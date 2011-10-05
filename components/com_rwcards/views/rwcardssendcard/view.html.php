<?php
/**
* RWCards View for SendCards
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

jimport( 'joomla.application.component.view');


class RWCardsViewRWCardsSendCard extends JView
{
	
	function display($tpl = null)
	{
		$task =  JRequest::getVar('task', '', 'request', 'string');		
		
                switch($task)
		{
			case "viewCard":
				$this->viewCard();
				break;
			
			default:
				$data = $this->get( 'SaveSenderData' );
				$this->assignRef( 'rwcards', $data );
				$Itemid = JRequest::getVar('Itemid', 0, 'request', 'int');
				$this->assignRef( 'Itemid', $Itemid );
				$task = JRequest::getVar('task', 0, 'request', 'int');
				$this->assignRef( 'task', $task );
				parent::display($tpl);
			break;
		}
	}

	function viewCard()
	{
		global $mainframe;	
		
		$Itemid = JRequest::getVar('Itemid', 0, 'request', 'int');
		$this->assignRef( 'Itemid', $Itemid );	
        $viewCardOnly = JRequest::getVar('read', '', 'request', 'string');
		$this->assignRef( 'viewCardOnly', $viewCardOnly );
		$data = $this->get( 'ViewCardsData' );
		$this->assignRef( 'rwcards', $data );		
		parent::display($tpl);
	}
}
?>
