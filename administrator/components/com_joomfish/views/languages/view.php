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
 * $Id: view.php 1251 2009-01-07 06:29:53Z apostolov $
 * @package joomfish
 * @subpackage Views
 *
*/
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

JLoader::import( 'views.default.view',JOOMFISH_ADMINPATH);
jimport( 'joomla.filesystem.file');
jimport( 'joomla.application.component.view');
jimport('joomla.html.pane');

/**
 * HTML View class for the WebLinks component
 *
 * @static
 * @package		Joomla
 * @subpackage	Weblinks
 * @since 1.0
 */
class LanguagesViewLanguages extends JoomfishViewDefault
{
	/**
	 * Control Panel display function
	 *
	 * @param template $tpl
	 */
	function display($tpl = null)
	{
		global $mainframe;
		
		$document =& JFactory::getDocument();
		// this already includes administrator
		$livesite = JURI::base();
		$document->addStyleSheet($livesite.'components/com_joomfish/assets/css/joomfish.css');

		$document->setTitle(JText::_('JOOMFISH_TITLE') . ' :: ' .JText::_('Language Title'));
		
		// Set toolbar items for the page
		JToolBarHelper::title( JText::_( 'Language Title' ), 'language' );
		JToolBarHelper::deleteList('Are you sure you want to delete the selcted items?', 'language.remove');
		JToolBarHelper::custom( 'languages.save', 'save', 'save', 'Save',false);
		JToolBarHelper::custom( 'languages.apply', 'apply', 'apply', 'Apply',false);
		JToolBarHelper::cancel('languages.cancel');
		JToolBarHelper::help( 'screen.languages', true);

		JSubMenuHelper::addEntry(JText::_('Control Panel'), 'index2.php?option=com_joomfish');
		JSubMenuHelper::addEntry(JText::_('Translation'), 'index2.php?option=com_joomfish&amp;task=translate.overview');
		JSubMenuHelper::addEntry(JText::_('Orphans'), 'index2.php?option=com_joomfish&amp;task=translate.orphans');
		JSubMenuHelper::addEntry(JText::_('Manage Translations'), 'index2.php?option=com_joomfish&amp;task=manage.overview', false);
		JSubMenuHelper::addEntry(JText::_('Statistics'), 'index2.php?option=com_joomfish&amp;task=statistics.overview', false);
		JSubMenuHelper::addEntry(JText::_('Language Configuration'), 'index2.php?option=com_joomfish&amp;task=languages.show', true);
		JSubMenuHelper::addEntry(JText::_('Content elements'), 'index2.php?option=com_joomfish&amp;task=elements.show', false);
		JSubMenuHelper::addEntry(JText::_('HELP AND HOWTO'), 'index2.php?option=com_joomfish&amp;task=help.show', false);
		
		$option				= JRequest::getCmd('option', 'com_joomfish');
		$filter_state		= $mainframe->getUserStateFromRequest( $option.'filter_state',		'filter_state',		'',				'word' );
		$filter_catid		= $mainframe->getUserStateFromRequest( $option.'filter_catid',		'filter_catid',		0,				'int' );
		$filter_order		= $mainframe->getUserStateFromRequest( $option.'filter_order',		'filter_order',		'l.ordering',	'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( $option.'filter_order_Dir',	'filter_order_Dir',	'',				'word' );
		$search				= $mainframe->getUserStateFromRequest( $option.'search',			'search',			'',				'string' );
		$search				= JString::strtolower( $search );
				
		$languages	= &$this->get('data');
		$defaultLanguage = &$this->get('defaultLanguage');
		
		$this->assignRef('items', $languages);
		$this->assignRef('defaultLanguage', $defaultLanguage);
		
		// state filter
		$lists['state']	= JHTML::_('grid.state',  $filter_state );

		// table ordering
		$lists['order_Dir'] = $filter_order_Dir;
		$lists['order'] = $filter_order;

		// search filter
		$lists['search']= $search;

		$this->assignRef('user',		JFactory::getUser());
		$this->assignRef('lists',		$lists);
		
		JHTML::_('behavior.tooltip');
		parent::display($tpl);
	}

	/**
	 * Method displaying the config traslation layout
	 */
	function translateConfig($tpl = null) {

		$document =& JFactory::getDocument();
		// this already includes administrator
		$livesite = JURI::base();
		$document->addStyleSheet($livesite.'components/com_joomfish/assets/css/joomfish.css');

		$document->setTitle(JText::_('JOOMFISH_TITLE') . ' :: ' .JText::_('Language Title'));
		
		// hide the sub menu
		JRequest::setVar('hidemainmenu',1);		
		
		// Set toolbar items for the page
		JToolBarHelper::title( JText::_( 'Language Title' ) .' - '.JText::_( 'Translate Configuration' ) , 'language' );
		JToolBarHelper::save('languages.saveTranslateConfig');
		JToolBarHelper::cancel('languages.show');
		JToolBarHelper::help( 'screen.languages', true);

		parent::display($tpl);		
	}
	/**
	 * Method to determine the correct image path for language flags.
	 * The works as the standard JHTMLImage method except that it uses always the live site basic as URL
	 *
	 * @param unknown_type $language
	 * @param unknown_type $altFile
	 * @param unknown_type $altFolder
	 * @param unknown_type $alt
	 * @param unknown_type $attribs
	 * @return unknown
	 */
	function languageImage($language, $folder, $altFile=NULL, $altFolder='/images/M_images/', $alt=NULL, $attribs = null) {
		static $paths;
		global $mainframe;

		$file = '';
		if(!empty($language->image)) {
			//$file = 'flags/' . JFile::makeSafe(  $language->image);
			$file =  $language->image;
			$folder = "/images/";
		} elseif (!empty( $language->shortcode)) {
			$file = 'flags/' . $language->shortcode . '.gif';
		}

		if (!$paths) {
			$paths = array();
		}

		if (is_array( $attribs )) {
			$attribs = JArrayHelper::toString( $attribs );
		}

		$cur_template = $mainframe->getTemplate();

		if ( $altFile )
		{
			// $param allows for an alternative file to be used
			$src = $altFolder . $altFile;
		}
		else if ( $altFile == -1 )
		{
			// Comes from an image list param field with 'Do not use' selected
			return '';
		} else {
			$path = JPATH_SITE .'/templates/'. $cur_template .'/images/'. $file;
			if (!isset( $paths[$path] ))
			{
				if ( file_exists( JPATH_SITE .'/templates/'. $cur_template .'/images/'. $file ) ) {
					$paths[$path] = 'templates/'. $cur_template .'/images/'. $file;
				} else {
					// outputs only path to image
					$paths[$path] = $folder . $file;
				}
			}
			$src = $paths[$path];
		}

		if (substr($src, 0, 1 ) == "/") {
			$src = substr_replace($src, '', 0, 1);
		}

		return '<img src="'. JURI::root() . $src .'" alt="'. html_entity_decode( $alt ) .'" '.$attribs.' />';
	}
	
}
?>
