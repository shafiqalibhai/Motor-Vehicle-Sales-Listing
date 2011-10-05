<?php
/**
* RWCards Model for FillOutCards
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

jimport( 'joomla.application.component.model' );
require_once (JPATH_COMPONENT.DS.'captcha'.DS. 'class.captcha.php');
/**
 * RWCards Model
 *
 */
class RWCardsModelRWCardsFillOutCard extends JModel
{
	/**
	 * RWCards data array
	 *
	 * @var array
	 */
	var $_data;
	var $rwcards_id;
	/**
	 * Gets the data
	 * @return array The data to be displayed to the user
	 */
	function getData()
	{
		$db =& JFactory::getDBO();
		$rwcards_id = JRequest::getVar('id', 0, 'request', 'int');
		$sessionId = JRequest::getVar('sessionId', '', 'request', 'string');
		

		// New Card or someone answers
		if ( $sessionId != "")
		{
			$query = "select #__rwcardsdata.*, #__rwcards.*, #__rwcardsconfig.captcha from #__rwcardsdata, #__rwcards, #__rwcardsconfig where #__rwcards.id = '" . $rwcards_id . "' and #__rwcardsdata.sessionId = '" . $sessionId ."'";
		}
		else
		{
        	$query = "select #__rwcards.*, #__rwcardsconfig.captcha from #__rwcards, #__rwcardsconfig where #__rwcards.id = '" . $rwcards_id . "'";
		}
		
		$this->_data = $this->_getList( $query );
		
		return $this->_data;
	}

	function getCheckCaptcha()
	{
		$session_code = JRequest::getVar('sessionCode', '', 'request', 'string');
		$captchaCode =  JRequest::getVar('captchaCode', '', 'request', 'string');
                
		if (empty($session_code)) 
	 	{ 
	 		$session_code = md5(round(rand(0,40000))); 
		} 
		else 
		{ 
			$session_code = $session_code; 
		}	
	
  		$my_captcha = new captcha( $session_code, './components/com_rwcards/captcha/__temp__' ); 

		if ( !$my_captcha->verify( $captchaCode ) )
		{
			//echo "no captcha"; exit;
			return false;
		}
		else
		{
			//echo "yes captcha";
			return true;
		}
		
	}
}
