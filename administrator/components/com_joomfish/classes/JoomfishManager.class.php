<?php
/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2009 Think Network GmbH, Munich
 *
 * All rights reserved.  The Joom!Fish project is a set of extentions for
 * the content management system Joomla!. It enables Joomla!
 * to manage multi lingual sites especially in all dynamic information
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -----------------------------------------------------------------------------
 * $Id: JoomfishManager.class.php 1251 2009-01-07 06:29:53Z apostolov $
 * @package joomfish
 * @subpackage classes
 *
*/



/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * The JoomFishManager controls all important configuration and information
 * of the content elements. These information might be cached in the session
 * settings if necessary in furture.
 *
 * @package joomfish
 * @subpackage administrator
 * @copyright 2003-2009 Think Network GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version 1.0, 2009-01-07 $Revision: 1251 $
 * @author Alex Kempkens <joomfish@thinknetwork.com>
*/
class JoomFishManager {
	/** Array of all known content elements and the reference to the XML file */
	var $_contentElements;

	/** string Content type which can use default values */
	var $DEFAULT_CONTENTTYPE="content";

	/** @var config Configuration of the map */
	var $_config=null;

	/** @var Component config */
	var $componentConfig= null;
	
	/**	PrimaryKey Data */
	var $_primaryKeys = null;

	var $allLanguagesCache=array();
	var $allLanguagesCacheByShortcode=array();
	var $allLanguagesCacheByID=array();
	var $activeLanguagesCache=array();
	var $activeLanguagesCacheByShortcode=array();
	var $activeLanguagesCacheByID=array();

	/** Standard constructor */
	function JoomFishManager() {
		include_once(JOOMFISH_ADMINPATH .DS. "models".DS."ContentElement.php");

		// now redundant
		//$this->_loadConfiguration( $adminPath );
		
		//$this->_loadContentElements( $adminPath );
		$this->_loadPrimaryKeyData();

		$this->activeLanguagesCache = array();
		$this->activeLanguagesCacheByID = array();
		// get all languages and split out active below
		$langlist = $this->getLanguages(false);
		if (count($langlist)>0){
			foreach ($langlist as $alang){
				if ($alang->active){
					$this->activeLanguagesCache[$alang->code] = $alang;
					$this->activeLanguagesCacheByID[$alang->id] = $alang;
					$this->activeLanguagesCacheByShortcode[$alang->shortcode] = $alang;
				}
				$this->allLanguagesCache[$alang->code] = $alang;
				$this->allLanguagesCacheByID[$alang->id] = $alang;
				$this->allLanguagesCacheByShortcode[$alang->shortcode] = $alang;
			}
		}
		// Must get the config here since if I do so dynamically it could be within a translation and really mess things up.
		$this->componentConfig =& JComponentHelper::getParams( 'com_joomfish' );
	}

	function & getInstance($adminPath=null){
		static $instance;
		if (!isset($instance)){
			$instance = new JoomFishManager($adminPath);
		}
		return $instance;
	}

	/** Loading of component configuration
	 * deprecated
	*/
	/*	
	function _loadConfiguration() {
		$this->_config = new stdClass();
		$config =& JComponentHelper::getParams( 'com_joomfish' );
		//$this->_config->componentAdminLang = $config->getValue("componentAdminLang");
		$this->_config->noTranslation = $config->getValue("noTranslation");
		$this->_config->defaultText = $config->getValue("defaultText");
		$this->_config->frontEndPublish = $config->getValue("frontEndPublish");
		$this->_config->frontEndPreview = $config->getValue("frontEndPreview");
		$this->_config->storageOfOriginal = $config->getValue("storageOfOriginal");
		$this->_config->showCPanels = $config->getValue("showCPanels");
		$this->_config->mbfupgradeDone = $config->getValue("mbfupgradeDone");
		$this->_config->qacaching = $config->getValue("qacaching");
		$this->_config->qalogging = $config->getValue("qalogging");
	}
	*/

	/**
	 * Load Primary key data from database
	 *
	 */
	function _loadPrimaryKeyData() {
		if ($this->_primaryKeys==null){
			$db =& JFactory::getDBO();
			$db->setQuery( "SELECT joomlatablename,tablepkID FROM `#__jf_tableinfo`");
			$rows = $db->loadObjectList("",false);
			$this->_primaryKeys = array();
			if( $rows ) {
				foreach ($rows as $row) {
					$this->_primaryKeys[$row->joomlatablename]=$row->tablepkID;
				}
			}

		}
	}

	/**
	 * Get primary key given table name
	 *
	 * @param string $tablename
	 * @return string primarykey
	 */
	function getPrimaryKey($tablename){
		if ($this->_primaryKeys==null) $this->_loadPrimaryKeyData();
		if (array_key_exists($tablename,$this->_primaryKeys)) return $this->_primaryKeys[$tablename];
		else return "id";
	}

	/**
	 * Saving of the file based configurations
	 */
	/*
	deprecated
	function saveConfiguration () {
		global $option;

		$configfile = "$this->_adminPath/config.joomfish.php";
		@chmod ($configfile, 0766);
		$permission = is_writable($configfile);
		if (!$permission) {
			$mosmsg = JText::_('CONFIG_WRITE_ERROR');
			return false;
		}

		$config = "<?php\n";
		$config .= '$joomfish_componentAdminLang =   "' .$this->_config->componentAdminLang. '";			// Which language the component admini should have' ."\n";
		$config .= '$joomfish_noTranslation = ' .$this->_config->noTranslation. ';			// What to show when no translation available' ."\n";
		$config .= '$joomfish_defaultText = "' .$this->_config->defaultText. '";		// Standard text if no translation - only for certain content elements!' ."\n";
		$config .= '$joomfish_frontEndPublish = "' .$this->_config->frontEndPublish. '";			// Whether publishers and above can publish from the frontend' ."\n";
		$config .= '$joomfish_frontEndPreview = "' .$this->_config->frontEndPreview. '";			// Whether managers and above can see inactive languages in the frontend' ."\n";
		$config .= '$joomfish_storageOfOriginal = "' .$this->_config->storageOfOriginal. '";			// md5 := only md5 values (default); both := md5 and clean text' ."\n";
		$config .= '$joomfish_showCPanels = "' .$this->_config->showCPanels. '";			// binary encoded information which panles to show' ."\n";
		$config .= '$joomfish_mbfupgradeDone = "' .$this->_config->mbfupgradeDone. '";			// Flag showing if the upgrade was done already. modify manually if you need to do the upgrade again' ."\n";
		$config .= '$joomfish_qacaching = "' .$this->_config->qacaching. '";			// Flag showing if experimental query analysis caching is enabled' ."\n";
		$config .= '$joomfish_qalogging = "' .$this->_config->qalogging. '";			// Flag showing if query analysis logging is enabled' ."\n";
		$config .= "?>";

		if ($fp = fopen("$configfile", "w")) {
			fputs($fp, $config, strlen($config));
			fclose ($fp);
		}
		$this->_loadConfiguration( $this->_adminPath );

		return true;
	}
	*/


	/**
	 * Loading of related XML files
	 *
	 * TODO This is very wasteful of processing time so investigate caching some how
	 * built in Joomla cache will not work because of the class structere of the results
	 * we get lots of incomplete classes from the unserialisation
	*/
	function _loadContentElements() {
		// XML library
		require_once(JPATH_SITE . "/includes/domit/xml_domit_lite_include.php" );

		// Try to find the XML file
		$filesindir = JFolder::files(JOOMFISH_ADMINPATH ."/contentelements" ,".xml");
		if(count($filesindir) > 0)
		{
			$this->_contentElements = array();
			foreach($filesindir as $file)
			{
				$xmlDoc =& new DOMIT_Lite_Document();
				$xmlDoc->resolveErrors( true );
				if ($xmlDoc->loadXML(JOOMFISH_ADMINPATH . "/contentelements/" . $file, false, true )) {
					$element = &$xmlDoc->documentElement;
					if ($element->getTagName() == 'joomfish') {
						if ( $element->getAttribute('type')=='contentelement' ) {
							$nameElements =& $element->getElementsByTagName('name', 1);
							$nameElement =& $nameElements->item(0);
							$name = strtolower( trim($nameElement->getText()) );
							$contentElement =& new ContentElement( $xmlDoc );
							$this->_contentElements[$contentElement->getTableName()] =& $contentElement;
						}
					}
				}
			}
		}
	}

	/**
	 * Loading of specific XML files
	*/
	function _loadContentElement($tablename) {
		if (!is_array($this->_contentElements)){
			$this->_contentElements = array();
		}
		if (array_key_exists($tablename,$this->_contentElements)){
			return;
		}
		// XML library
		require_once(JPATH_SITE . "/includes/domit/xml_domit_lite_include.php" );

		$file = JOOMFISH_ADMINPATH .'/contentelements/'.$tablename.".xml";
		if (file_exists($file)){
			$xmlDoc =& new DOMIT_Lite_Document();
			$xmlDoc->resolveErrors( true );
			if ($xmlDoc->loadXML( $file, false, true )) {
				$element = &$xmlDoc->documentElement;
				if ($element->getTagName() == 'joomfish') {
					if ( $element->getAttribute('type')=='contentelement' ) {
						$nameElements =& $element->getElementsByTagName('name', 1);
						$nameElement =& $nameElements->item(0);
						$name = strtolower( trim($nameElement->getText()) );
						$contentElement =& new ContentElement( $xmlDoc );
						$this->_contentElements[$contentElement->getTableName()] =& $contentElement;
						return $contentElement;
					}
				}
			}
		}
		return null;
	}

	/**
	 * Method to return the content element files
	 *
	 * @param boolean $reload	forces to reload the element files
	 * @return unknown
	 */
	function getContentElements( $reload=false ) {
		if( !isset( $this->_contentElements ) || $reload ) {
			$this->_loadContentElements();
		}
		return $this->_contentElements;
	}

	/** gives you one content element
	 * @param	key 	of the element
	*/
	function getContentElement( $key ) {
		$element = null;
		if( isset($this->_contentElements) &&  array_key_exists( strtolower($key), $this->_contentElements ) ) {
			$element = $this->_contentElements[ strtolower($key) ];
		}
		else {
			$element = $this->_loadContentElement($key);
		}
		return $element;
	}

	/**
	* @param string The name of the variable (from configuration.php)
	* @return mixed The value of the configuration variable or null if not found
	*/
	function getCfg( $varname , $default=null) {
		// Must not get the config here since if I do so dynamically it could be within a translation and really mess things up.
 		return $this->componentConfig->getValue($varname,$default);
	}

	/**
	* @param string The name of the variable (from configuration.php)
	* @param mixed The value of the configuration variable
	*/
	function setCfg( $varname, $newValue) {
		$config =& JComponentHelper::getParams( 'com_joomfish' );
		$config->setValue($varname, $newValue);
	}

	/** Creates an array with all the active languages for the JoomFish
	 *
	 * @return	Array of languages
	 */
	function getActiveLanguages() {
		/* if signed in as Manager or above include inactive languages too */
		$user =& JFactory::getUser();
		if ( isset($this) && $this->getCfg("frontEndPreview") && isset($user) && (strtolower($user->usertype)=="manager" || strtolower($user->usertype)=="administrator" || strtolower($user->usertype)=="super administrator")) {
			if (isset($this) && isset($this->allLanguagesCache)) return $this->allLanguagesCache;
		}
		else {
			if (isset($this) && isset($this->activeLanguagesCache)) return $this->activeLanguagesCache;
		}
		return JoomFishManager::getLanguages( true );
	}

	/** Creates an array with all languages for the JoomFish
	 *
	 * @param boolean	indicates if those languages must be active or not
	 * @return	Array of languages
	 */
	function getLanguages( $active=true ) {
		$db =& JFactory::getDBO();
		$langActive=null;

		$sql = 'SELECT * FROM #__languages';

		if( $active ) {
			$sql  .= ' WHERE active=1';
		}
		$sql .= ' ORDER BY ordering';

		$db->setQuery(  $sql );
		$rows = $db->loadObjectList('id',false);
		// We will need this class defined to popuplate the table
		include_once(JOOMFISH_ADMINPATH .DS. 'tables'.DS.'JFLanguage.php');
		if( $rows ) {
			foreach ($rows as $row) {
				$lang = new TableJFLanguage($db);
				$lang->bind($row);

				$langActive[] = $lang;
			}
		}

		return $langActive;
	}

	/**
	 * Fetches full langauge data for given shortcode from language cache
	 *
	 * @param array()
	 */
	function getLanguageByShortcode($shortcode, $active=false){
		if ($active){
			if (isset($this) && isset($this->activeLanguagesCacheByShortcode) && array_key_exists($shortcode,$this->activeLanguagesCacheByShortcode))
			return $this->activeLanguagesCacheByShortcode[$shortcode];
		}
		else {
			if (isset($this) && isset($this->allLanguagesCacheByShortcode) && array_key_exists($shortcode,$this->allLanguagesCacheByShortcode))
			return $this->allLanguagesCacheByShortcode[$shortcode];
		}
		return false;
	}
	
	/**
	 * Fetches full langauge data for given code from language cache
	 *
	 * @param array()
	 */
	function getLanguageByCode($code, $active=false){
		if ($active){
			if (isset($this) && isset($this->activeLanguagesCache) && array_key_exists($code,$this->activeLanguagesCache))
			return $this->activeLanguagesCache[$code];
		}
		else {
			if (isset($this) && isset($this->allLanguagesCache) && array_key_exists($code,$this->allLanguagesCache))
			return $this->allLanguagesCache[$code];
		}
		return false;
	}

	
	function getLanguagesIndexedByCode($active=false){
		if ($active){
			if (isset($this) && isset($this->activeLanguagesCache))
			return $this->activeLanguagesCache;
		}
		else {
			if (isset($this) && isset($this->allLanguagesCache))
			return $this->allLanguagesCache;
		}
		return false;
	}

	function getLanguagesIndexedById($active=false){
		if ($active){
			if (isset($this) && isset($this->activeLanguagesCacheByID))
			return $this->activeLanguagesCacheByID;
		}
		else {
			if (isset($this) && isset($this->allLanguagesCacheByID))
			return $this->allLanguagesCacheByID;
		}
		return false;
	}

	/** Retrieves the language ID from the given language name
	 *
	 * @param	string	Code language name (normally $mosConfig_lang
	 * @return	int 	Database id of this language
	 */
	function getLanguageID( $codeLangName="" ) {
		$db =& JFactory::getDBO();
		$langID = -1;
		if ($codeLangName != "" ) {
			if (isset($this) && isset($this->activeLanguagesCache) && array_key_exists($codeLangName,$this->activeLanguagesCache))
			return $this->activeLanguagesCache[$codeLangName]->id;
			else {
				$db->setQuery( "SELECT id FROM #__languages WHERE active=1 and code = '$codeLangName' order by ordering" );
				$langID = $db->loadResult(false);
			}
		}
		return $langID;
	}

	/** Retrieves the language code (for URL) from the given language name
	 *
	 * @param	string	Code language name (normally $mosConfig_lang
	 * @return	int 	Database id of this language
	 */
	function getLanguageCode( $codeLangName="" ) {
		$db =& JFactory::getDBO();
		$langID = -1;
		if ($codeLangName != "" ) {
			if (isset($this) && isset($this->activeLanguagesCache) && array_key_exists($codeLangName,$this->activeLanguagesCache))
			return $this->activeLanguagesCache[$codeLangName]->shortcode;
			else {
				$db->setQuery( "SELECT shortcode FROM #__languages WHERE active=1 and code = '$codeLangName' order by ordering" );
				$langID = $db->loadResult(false);
			}
		}
		return $langID;
	}

	function & getCache($lang=""){
		$conf =& JFactory::getConfig();
		if ($lang===""){
			$lang=$conf->getValue('config.language');
		}
		// I need to get language specific cache for language switching module
		if (!isset($this->_cache)) {
			$this->_cache = array();
		}
		if (isset($this->_cache[$lang])){
			return $this->_cache[$lang];
		}
		
		jimport('joomla.cache.cache');

		if (version_compare(phpversion(),"5.0.0",">=")){
			// Use new Joomfish DB Cache Storage Handler but only for php 5
			$storage = 'jfdb';
			// Make sure we have loaded the cache stroage handler 
			JLoader::import('JCacheStorageJFDB', dirname( __FILE__ ));
		}
		else {
			$storage = 'file';
		}
		
		$options = array(
			'defaultgroup' 	=> "joomfish-".$lang,
			'cachebase' 	=> $conf->getValue('config.cache_path'),		
			'lifetime' 		=> $this->getCfg("cachelife",1440) * 60,	// minutes to seconds
			'language' 		=> $conf->getValue('config.language'),
			'storage'		=> $storage
		);
		
		$this->_cache[$lang] =& JCache::getInstance( "callback", $options );
		return $this->_cache[$lang];		
	}

}
