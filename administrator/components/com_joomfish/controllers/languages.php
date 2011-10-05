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
 * $Id: languages.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage languages
 *
*/

defined( 'JPATH_BASE' ) or die( 'Direct Access to this location is not allowed.' );

jimport('joomla.application.component.controller');

/**
 * The JoomFish Tasker manages the general tasks within the Joom!Fish admin interface
 *
 */
class LanguagesController extends JController  {
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask('show',  'display' );
	}


	/**
	 * Standard display control structure
	 * 
	 */
	function display( )
	{
		$this->view = & $this->getView("languages");
		parent::display();
	}
	
	/*
	 * Standard Handler for cancel of dialog
	 */
	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or die( 'Invalid Token' );
		
		$this->setRedirect( 'index.php?option=com_joomfish' );
	}

	/**
	 * Standard method to save the language information
	 *
	 */
	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or die( 'Invalid Token' );

		$post	= JRequest::get('post');
		$cid 	= JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);
		
		$model = $this->getModel('languages');
		
		if ($model->store($cid, $post)) {
			$msg = JText::_( 'Languages saved' );
		} else {
			$msg = JText::_( 'Error Saving Languages' );
		}

		// Check the table in so it can be edited.... we are done with it anyway
		$link = 'index.php?option=com_joomfish';
		$this->setRedirect($link, $msg);
	}	

	/**
	 * Standard method to save the language information
	 *
	 */
	function apply()
	{
		// Check for request forgeries
		JRequest::checkToken() or die( 'Invalid Token' );

		$post	= JRequest::get('post');
		$cid 	= JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);
		
		$model = $this->getModel('languages');
		
		if ($model->store($cid, $post)) {
			$msg = JText::_( 'Languages saved' );
		} else {
			$msg = JText::_( 'Error Saving Languages' );
		}

		// Check the table in so it can be edited.... we are done with it anyway
		$link = 'index.php?option=com_joomfish&task=languages.show';
		$this->setRedirect($link, $msg);
	}	

	/**
	 * Method to manage the language params
	 */
	function displayLanguageConfig() {
		$document =& JFactory::getDocument();

		$viewType	= $document->getType();
		$viewName	= JRequest::getCmd( 'view', $this->getName() );
		$viewLayout	= JRequest::getCmd( 'layout', 'languageConfig' );

		$view = & $this->getView( $viewName, $viewType, '', array( 'base_path'=>$this->_basePath));

		// Get/Create the model
		if ($model = & $this->getModel('languageConfig')) {
			// Push the model into the view (as default)
			$view->setModel($model, true);
		}

		// Set the layout
		$view->setLayout($viewLayout);

		$view->displayLanguageConfig();
	}
	
	/**
	 * Method to translate global config values
	 *
	 */
	function translateConfig(){
		$document =& JFactory::getDocument();

		$viewName	= JRequest::getCmd( 'view', $this->getName() );
		$viewLayout	= JRequest::getCmd( 'layout', 'translateConfig' );

		$view = & $this->getView( $viewName );

		// Get/Create the model
		if ($model = & $this->getModel('languageConfig')) {
			// Push the model into the view (as default)
			$view->setModel($model, true);
		}

		$cid 	= JRequest::getVar( 'cid', array(), 'request', 'array' );
		JArrayHelper::toInteger($cid);
		if (count($cid)!=1){
			return "";
		}
		
		$model = $this->getModel('languages');
		$view->language = $model->getTable('JFLanguage');		
		$view->language->load($cid[0]);

		if (isset($view->language) && isset($view->language->params) ){
			$view->translations = new JParameter( $view->language->params);
		}
		else {
			$view->translations = new JParameter("");
		}

		// Default Text handled 'manually'
		$config =& JComponentHelper::getParams( 'com_joomfish' );
		$view->defaulttext = $config->getValue("defaultText");		
		$view->trans_defaulttext = $view->translations->get("defaulttext","");
		
		// Set the config detials for translation in the view
		$elementfolder =JPath::clean( JPATH_ADMINISTRATOR . '/components/com_joomfish/contentelements' );
		include($elementfolder.DS."language.config.php");
		$view->jf_siteconfig=$jf_siteconfig;

		// Need to load com_config language strings!
		$lang =& JFactory::getLanguage();
		$lang->load( 'com_config' );

		$jconf = new JConfig();
		$view->jconf = $jconf;
		
		// Set the layout
		$view->setLayout($viewLayout);

		$view->translateConfig();
		
	}

	/**
	 * Method to translate global config values
	 *
	 */
	function saveTranslateConfig(){
		// Check for request forgeries
		JRequest::checkToken() or die( 'Invalid Token' );

		$lang_id 	= JRequest::getInt( 'lang_id',0 );
		$model = $this->getModel('languages');
		$language = $model->getTable('JFLanguage');		
		$language->load($lang_id);

		if  (is_null($lang_id) || !isset($language->id) || $language->id<=0){
			die( 'Invalid Language Id' );
		}
		
		$params = new JParameter($language->params);
		$data = array();
		foreach ($_REQUEST as $key=>$val) {
			if (strpos($key,"trans_")===0){
				$key = str_replace("trans_","",$key);
				if (ini_get('magic_quotes_gpc')) {
          		  $val = stripslashes($val);
        		} 
        		$data[$key]=$val;
			}
		}
		$registry = new JRegistry();
		$registry->loadArray($data);
		$language->params = $registry->toString();

		$language->store();
		global $mainframe;
		$mainframe->redirect("index.php?option=com_joomfish&task=languages.show",JText::_("Languages saved"));
	}
	
	
}
?>
