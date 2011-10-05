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


class RWCardsViewRWCardsconfig extends JView
{
	/**
	 * display method of Hello view
	 * @return void
	 **/
	function display($tpl = null)
	{
		$rwcards		=& $this->get('Data');
		$text = JText::_( 'Edit' );
		JToolBarHelper::title(   JText::_( 'RWCards: ' ) . JText::_( 'CONFIG' ).': <small><small>[ ' . $text.' ]</small></small>', 'rwcards' );
		JToolBarHelper::save();
		JHTML::_('stylesheet', 'rwcards.css', 'administrator/components/com_rwcards/css/');
		if ($isNew)  {
			JToolBarHelper::cancel();
		} else {
			// for existing items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		}

		$this->assignRef('rwcards',		$rwcards);

		parent::display($tpl);
	}
}
