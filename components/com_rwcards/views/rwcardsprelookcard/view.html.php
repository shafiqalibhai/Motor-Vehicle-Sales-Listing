<?php
/**
* RWCards View for PreviewCards
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

jimport( 'joomla.application.component.view');


class RWCardsViewRWCardsPreLookCard extends JView
{
	function display($tpl = null)
	{
		$data = $this->get( 'Data' );
		$this->assignRef( 'rwcards', $data );
		$categories = $this->get( 'Categories' );
		$captchaError = false;
		$isCaptcha = true;
		$rwCardsError = 0;
		$Itemid = JRequest::getVar('Itemid', 0, 'request', 'int');
		$id = JRequest::getVar('id', 0, 'request', 'int');
		$this->assignRef( 'Itemid', $Itemid );
		$this->assignRef( 'id', $id);
		$this->assignRef( 'categories', $categories );
		$this->assignRef( 'captchaError', $captchaError);
		$this->assignRef( 'isCaptcha', $isCaptcha);
		$this->assignRef( 'rwCardsError', $rwCardsError);

		parent::display($tpl);
	}
}
?>
