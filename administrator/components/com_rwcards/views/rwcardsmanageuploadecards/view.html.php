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


class RWCardsViewRWCardsManageUploadEcards extends JView
{
	/**
	 * display method of Hello view
	 * @return void
	 **/
	function display($tpl = null)
	{
		$task =  JRequest::getVar('task');
		$this->getData();
	}

	function getData()
	{
		$rwcardsImages =& $this->get('Images');
                
		JToolBarHelper::title(   JText::_( 'UPLOAD ECARDS' ), 'rwcards' );

		$bar = & JToolBar::getInstance('toolbar');
		$bar->appendButton( 'Popup', 'upload', 'UPLOAD', "index.php?option=com_media", 650, 650 );
		JToolBarHelper::cancel('cancel', 'Close');
		JHTML::_('stylesheet', 'rwcards.css', 'administrator/components/com_rwcards/css/');
                
   		$this->assignRef('rwcardsImages', $rwcardsImages);
		parent::display($tpl);
		
	}
}
