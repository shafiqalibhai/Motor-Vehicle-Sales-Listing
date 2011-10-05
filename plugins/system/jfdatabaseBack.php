<?php
/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2008 Think Network GmbH, Munich
 * 
 * All rights reserved.  The Joom!Fish project is a set of extentions for 
 * the content management system Joomla!. It enables Joomla! 
 * to manage multi lingual sites especially in all dynamic information 
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU Lesser General Public License" (LGPL) is available at
 * http: *www.gnu.org/copyleft/lgpl.html
 * -----------------------------------------------------------------------------
 * $Id: ReadMe,v 1.2 2005/03/15 11:07:01 akede Exp $
 * @package joomfish
 * @subpackage system.jfdatabase_bot
 * @version 2.0
 *
*/

/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Restricted access' );

// In PHP5 this should be a instance_of check
// Currently Joom!Fish does not need to be active in Administrator
// This might be an extended version
if($mainframe->isAdmin()) {
	return;
}

// Joom!Fish bot get's only activated if essential files are missing
//if ( !file_exists( JPATH_PLUGINS .DS. 'system' .DS. 'jfdatabase' .DS. 'jfdatabase.class.php' )) {
if ( !file_exists( dirname(__FILE__) .DS. 'jfdatabase' .DS. 'jfdatabase_inherit.php' )) {
	JError::raiseNotice('no_jf_plugin', JText::_('Joom!Fish plugin not installed correctly. Plugin not executed'));
	return;
}

jimport('joomla.filesystem.file');
if(JFile::exists(JPATH_SITE .DS. 'components' .DS. 'com_joomfish' .DS. 'helpers' .DS. 'defines.php')) {
	require_once( JPATH_SITE .DS. 'components' .DS. 'com_joomfish' .DS. 'helpers' .DS. 'defines.php' );
	JLoader::register('JoomfishManager', JOOMFISH_ADMINPATH .DS. 'classes' .DS. 'JoomfishManager.class.php' );
	JLoader::register('JoomFishVersion', JOOMFISH_ADMINPATH .DS. 'version.php' );
	JLoader::register('JoomFish', JOOMFISH_PATH .DS. 'helpers' .DS. 'joomfish.class.php' );	
} else {
	JError::raiseNotice('no_jf_extension', JText::_('Joom!Fish extension not installed correctly. Plugin not executed'));
	return;
}

/**
* Exchange of the database abstraction layer for multi lingual translations.
*/
class plgSystemJFDatabase extends JPlugin{
	/**
	 * stored configuration from plugin
	 *
	 * @var object configuration information
	 */
	var $_config = null;

	function plgSystemJFDatabase(& $subject, $config)
	{
		global $mainframe;
		if ($mainframe->isAdmin()) {
			// This plugin is only relevant for use within the frontend!
			return;
		}
		parent::__construct($subject, $config);

		// put params in registry so I have easy access to them later
		$conf =& JFactory::getConfig();
		$conf->setValue("jfdatabase.params",$this->params);

		$this->_config = array(
		'adapter' 	=> $this->params->get('dbadapter', "inheritor")
		);

		if(defined('JOOMFISH_PATH')) {
			$this->_jfInitialize();
		} else {
			JError::raiseNotice('no_jf_component', JText::_('Joom!Fish component not installed correctly. Plugin not executed'));
		}
	}

	/**
	 * During this event we setup the database and link it to the Joomla! ressources for future use
	 * @return void
	 */
	function onAfterInitialise()
	{
		global $mainframe;
		if ($mainframe->isAdmin()) {
			// This plugin is only relevant for use within the frontend!
			return;
		}
		$this->_setupJFDatabase();
	}

	function onAfterRender()
	{
		// There is a bug in Garbage collectino in Joomla 1.5.5 see http://joomlacode.org/gf/project/joomla/tracker/?action=TrackerItemEdit&tracker_item_id=12101
		// garbage collect the cache
		/*
		$jfm =& JoomFishManager::getInstance();
		if ($jfm->getCfg("transcaching",1)){
		$jlang =& JFactory::getLanguage();
		$language = $jlang->getTag();
		$cache = $jfm->getCache($language);
		$cache->gc();
		}
		*/
		// Therefore do it ourselves (the old fashioned way to maximise performance)
		$jfm =& JoomFishManager::getInstance();
		if ($jfm->getCfg("transcaching",1)){
			$jlang =& JFactory::getLanguage();
			$language = $jlang->getTag();
			$cache = $jfm->getCache($language);
			$handler =& $cache->_getStorage();
			$lifetime = intval($jfm->getCfg("cachelife",1440)) * 60;	// minutes to seconds
			if (!JError::isError($handler)  && strtolower(get_class($handler)) == "jcachestoragefile") {
				$files = JFolder::files($handler->_root.DS.$cache->_options["defaultgroup"], '_expire', true, true);
				clearstatcache();
				foreach($files As $file) {
					$time = @filemtime($file);
					if ($time){
						$time += $lifetime;
						if ( $handler->_now > $time) {
							JFile::delete($file);
							JFile::delete(str_replace('_expire', '', $file));
						}

					}
				}
			}
		}

		$buffer = JResponse::getBody();
		$info = "";
		$db =& JFactory::getDBO();
		$info .=  "<div style='font-size:11px'>";
		foreach ($db->profileData as $func=>$data) {
			$info .=  "$func = ".round($data["total"],4)." (".$data["count"].")<br />";
		}
		$info .=  "</div>";
		$buffer = str_replace("JFTimings",$info,$buffer);
		JResponse::setBody($buffer);
	}

	/**
	 * Setup for the Joom!Fish database connectors, overwriting the original instances of Joomla!
	 * Which connector is used and which technique is based on the extension configuration
	 * @return void
	 */
	function _setupJFDatabase(){
		if ($this->_config["adapter"] == "decorator") {
			if (file_exists( JPATH_ADMINISTRATOR .DS. 'components' .DS. 'com_joomfish' .DS. 'jfdatabase_decorator.class.php' )) {
				require_once( JPATH_ADMINISTRATOR .DS. 'components' .DS. 'com_joomfish' .DS. 'jfdatabase_decorator.class.php' );

				$db = & JFactory::getDBO();
				$db = new JFDatabase();


				$conf =& JFactory::getConfig();
				$conf->setValue('config.mbf_content', 1 );
				$conf->setValue('config.multilingual_support', 1 );

				// TODO: check on legacy mode on or off
				$GLOBALS['database'] = $db;
			}
		}
		else {
			if (file_exists( dirname(__FILE__).DS.'jfdatabase'.DS.'jfdatabase_inherit.php' )) {
				require_once( dirname(__FILE__).DS.'jfdatabase'.DS.'jfdatabase_inherit.php' );

				$conf =& JFactory::getConfig();

				$host 		= $conf->getValue('config.host');
				$user 		= $conf->getValue('config.user');
				$password 	= $conf->getValue('config.password');
				$db   		= $conf->getValue('config.db');
				$dbprefix 	= $conf->getValue('config.dbprefix');
				$dbtype 	= $conf->getValue('config.dbtype');
				$debug 		= $conf->getValue('config.debug');
				$driver 	= $conf->getValue('config.dbtype');

				$options = array("driver"=>$driver, "host"=>$host, "user"=>$user, "password"=>$password, "database"=>$db, "prefix"=>$dbprefix,"select"=>true);

				$db = & JFactory::getDBO();
				$db = new JFDatabase($options);
				$debug = $conf->getValue('config.debug');
				$db->debug($debug);

				if ($db->getErrorNum() > 2) {
					JError::raiseError('joomla.library:'.$db->getErrorNum(), 'JDatabase::getInstance: Could not connect to database <br/>' . $db->getErrorMsg() );
				}

				$conf->setValue('config.mbf_content', 1 );
				$conf->setValue('config.multilingual_support', 1 );

				// legacy mode only
				// check on legacy mode on/off by testing existence of $database global
				if (defined('_JLEGACY')  && array_key_exists('database',$GLOBALS)){
					$GLOBALS['database'] = new mldatabase($options);
					$GLOBALS['database']->debug($conf->getValue('config.debug'));
				}

				//echo phpinfo();
			}
		}

	}

	/** This function initialize the Joom!Fish manager in order to have
	  * easy access and prepare certain information.
	  * @access private
	  */
	function _jfInitialize ( ) {
		/* ToDo: check if we really need this any longer. Should be removed latest with 2.1
		* @deprecated
		*/
		$GLOBALS[ '_JOOMFISH_MANAGER'] 	 =&  JoomFishManager::getInstance();
	}
}

