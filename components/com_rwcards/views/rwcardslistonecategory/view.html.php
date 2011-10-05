<?php
/**
* RWCards View for ListOneCategory
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/
jimport( 'joomla.application.component.view');


class RWCardsViewRWCardsListOneCategory extends JView
{
	function display($tpl = null)
	{

		$category_id = JRequest::getVar('category_id', 0, 'request', 'int');
		$this->assignRef( 'category_id', $category_id);
		$data = $this->get( 'Data' );
		$this->assignRef( 'rwcards', $data );
		$categories = $this->get( 'Categories' );
		$this->assignRef( 'categories', $categories );
		// If clicked on rewrite to sender, do not delete session data!
		$reWritetoSender = JRequest::getVar('reWritetoSender', '', 'request', 'string');
		$this->assignRef( 'reWritetoSender', $reWritetoSender );
		$sessionId = JRequest::getVar('sessionId', '', 'request', 'string');
		$this->assignRef( 'sessionId', $sessionId);
		$this->limitstart = JRequest::getVar('limitstart', 0, 'request', 'int');
		$this->assignRef( 'limitstart', $limitstart);
		      //var_dump($_REQUEST);
		parent::display($tpl);
	}
}
?>
                                                                                                