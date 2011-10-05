<?php
/**
* RWCards View class
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view' );

class RWCardsViewRWCardsAbout extends JView
{
	/**
	 * display method of Hello view
	 * @return void
	 **/
	function display($tpl = null)
	{
		JToolBarHelper::title( JText::_( 'ABOUT' ) . JText::_( ' RWCards ' ) . JText::_( 'RWCARDS_VERSION'), 'rwcards' );
		JToolBarHelper::cancel( 'cancel', 'Close' );
		JHTML::_('stylesheet', 'rwcards.css', 'administrator/components/com_rwcards/css/');
		parent::display($tpl);
	}
}
