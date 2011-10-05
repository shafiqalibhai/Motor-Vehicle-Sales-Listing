<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitegallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

class TOOLBAR_morfeoshow {

	function _NEW()	{
		JToolBarHelper::title( JText::_( 'MorfeoShow - '. JText::_( 'New Gallery' ) ),'nuova.png' );
		JToolBarHelper::save();
		JToolBarHelper::cancel();
	}
	
	function _EDIT() {
		JToolBarHelper::title( JText::_( 'MorfeoShow - '. JText::_( 'Edit Gallery' ) ),'modifica.png' );
		JToolBarHelper::apply();
		JToolBarHelper::custom('save_changes','save', '', JText::_( 'Save' ), false);
		JToolBarHelper::cancel();
	}
	
	function _DES()	{
		JToolBarHelper::title( JText::_( 'MorfeoShow - '. JText::_( 'Edit Description' ) ),'modifica.png' );
		JToolBarHelper::custom('save_des','save', '', JText::_( 'Save' ), false);
		JToolBarHelper::custom('photos','cancel', '', JText::_( 'Cancel' ), false);
	}
	
	function  _MANAGE_PHOTOS()	{
		JToolBarHelper::title( JText::_( 'MorfeoShow - '. JText::_( 'Manage Images' ) ),'immagini.png' );
		JToolBarHelper::back();	
	}
	
	function  _PHOTOS()	{
		JToolBarHelper::title( JText::_( 'MorfeoShow - '. JText::_( 'Gallery Images List' ) ),'immagini.png' );
		JToolBarHelper::custom('back','cancel', '', JText::_( 'Cancel' ), false);
	}	

	function _POSTINSTALL()	{
	}
	
	function _INFO() {
	JToolBarHelper::title( JText::_( 'MorfeoShow - '. JText::_( 'Info' ) ),'immagini.png' );
	}	

	function _SETTINGS() {
		JToolBarHelper::title( JText::_( 'MorfeoShow - '. JText::_( 'Settings' ) ),'immagini.png' );  
		JToolBarHelper::save('saveSettings');
		JToolBarHelper::apply('applySettings');
		JToolBarHelper::cancel();
	}	
	
	function _DEFAULT() {
		JToolBarHelper::title( JText::_( 'MorfeoShow' ),'gallerie.png' );
		JToolBarHelper::addNew();
		JToolBarHelper::editList();
		JToolBarHelper::deleteList(JText::_( 'Are you sure you wish to delete an entire gallery'));
	}
}
?>
