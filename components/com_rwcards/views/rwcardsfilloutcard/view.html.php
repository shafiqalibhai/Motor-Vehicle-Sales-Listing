<?php
/**
* RWCards View for FillOutCards
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

jimport( 'joomla.application.component.view');


class RWCardsViewRWCardsFillOutCard extends JView
{
	function display($tpl = null)
	{
		$task =  JRequest::getVar('task', '', 'request', 'string');
		// If clicked on rewrite to sender, do not delete session data!
		$reWritetoSender = JRequest::getVar('reWritetoSender', '', 'request', 'string');
		$this->assignRef( 'reWritetoSender', $reWritetoSender );
		$sessionId = JRequest::getVar('sessionId', '', 'request', 'string');
		$this->assignRef( 'sessionId', $sessionId);
		// Is Captcha activated in config?
		$this->isCaptchaOn = JRequest::getVar('captcha_config', '', 'request', 'int');

		switch($task)
		{
            case "CheckCaptcha":
			$this->CheckCaptcha();
			break;
		
		default:
		$data = $this->get( 'Data' );
		$this->assignRef( 'rwcards', $data );
		$Itemid = JRequest::getVar('Itemid', 0, 'request', 'int');
		$this->assignRef( 'Itemid', $Itemid);
		$category_id = JRequest::getVar('category_id', 0, 'request', 'int');
		$this->assignRef( 'category_id', $category_id);
		$sessionCode = JRequest::getVar('sessionCode', 0, 'request', 'int');
		$this->assignRef( 'sessionCode', $sessionCode);
		parent::display($tpl);
		break;
		}
	}

	function CheckCaptcha()
	{
		global $mainframe;
		
		$_SESSION['rwcardsSession'] = $_POST;
				
		$rwCardsError = $this->checkRWCardsForm();
		$rwCardsFieldsError = $this->getFielsErrors();
		
		// If Captcha activated in config, then check it else put it on true
		if ($this->isCaptchaOn)
		{
			$isCaptcha = $this->get( 'CheckCaptcha' );
		}
		else
		{
			$isCaptcha = true;
		}
		

		if ($isCaptcha && count($rwCardsError) == 0)
		{
                	//var_dump($_POST); exit;
			$submit = JRequest::getVar('submit', '', 'request', 'string');
			$Itemid = JRequest::getVar('Itemid', 0, 'request', 'int');
			$id = JRequest::getVar('id', 0, 'request', 'int');
			if ( $submit == JTEXT::_('RWCARDS_PREVIEW_CARD') )
			{
				$mainframe->redirect( JURI::base() . 'index.php?option=com_rwcards&controller=rwcardsprelookcard&task=previewrwcard&Itemid=' . $Itemid . '&id=' . $id . '');
                	}
			else
			{
				$mainframe->redirect( JURI::base() . 'index.php?option=com_rwcards&controller=rwcardsprelookcard&task=sendrwcard&Itemid=' . $Itemid . '&id=' . $id . '');
			}
		}
		else
		{
			
			$data = $this->get( 'Data' );
			$this->assignRef( 'rwcards', $data );
			$captchaError = true;	
			$this->assignRef( 'captchaError', $captchaError);
			$this->assignRef( 'isCaptcha', $isCaptcha);
			$this->assignRef( 'rwCardsError', $rwCardsError);
			$this->assignRef( 'rwCardsFieldsError', $rwCardsFieldsError);
			parent::display($tpl);
		}
	}
	
	function checkRWCardsForm()
	{
		jimport('joomla.mail.helper'); 
		$rwCardsError = array();
		
		$nameFrom = JRequest::getVar('rwCardsFormNameFrom', '', 'session', 'string');
		($nameFrom == "") ? array_push($rwCardsError, JText::_('RWCARDS_FORM_ERROR_NAME_FROM')) : "";

		$message = JRequest::getVar('rwCardsFormMessage', '', 'session', 'string');
		($message== "") ? array_push($rwCardsError, JText::_('RWCARDS_FORM_ERROR_MESSAGE')) : "";

		$emailFrom = JRequest::getVar('rwCardsFormEmailFrom', '', 'session', 'string');
		if ( !in_array(JText::_('RWCARDS_FORM_ERROR_EMAIL_FROM'), $rwCardsError) )
		{
			$emailFrom = (JMailHelper::isEmailAddress($emailFrom)) ? true : "";
			($emailFrom == "") ? array_push($rwCardsError, JText::_('RWCARDS_FORM_ERROR_EMAIL_FROM')) : "";
		}
		
		for ($i = 0; $i < count($_SESSION['rwcardsSession']['rwCardsFormNameTo']); $i++)
		{
			$nameTo[$i] = $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i];
			if ( !in_array(JText::_('RWCARDS_FORM_ERROR_NAME_TO'), $rwCardsError) )
			{
				$nameTo[$i] = $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i];
				($nameTo[$i] == "") ? array_push($rwCardsError, JText::_('RWCARDS_FORM_ERROR_NAME_TO')) : "";
			}
			$emailTo[$i] = $_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i];
			if ( !in_array(JText::_('RWCARDS_FORM_ERROR_EMAIL_TO'), $rwCardsError) )
			{
				$emailTo[$i] = (JMailHelper::isEmailAddress($emailTo[$i])) ? true : "";
				($emailTo[$i] == "") ? array_push($rwCardsError, JText::_('RWCARDS_FORM_ERROR_EMAIL_TO')) : "";
			}
		}
		return $rwCardsError;
	}
	
	function getFielsErrors()
	{
		jimport('joomla.mail.helper'); 

		$rwCardsFieldsError = array();
		
		$message = JRequest::getVar('rwCardsFormMessage', '', 'session', 'string');
		($message == "") ? array_push($rwCardsFieldsError, 'rwCardsFormMessage') : "";
		$nameFrom = JRequest::getVar('rwCardsFormNameFrom', '', 'session', 'string');
		($nameFrom == "") ? array_push($rwCardsFieldsError, 'rwCardsFormNameFrom') : "";				                                                                             
		$emailFrom = JRequest::getVar('rwCardsFormEmailFrom', '', 'session', 'string');
		$emailFrom = (JMailHelper::isEmailAddress($emailFrom)) ? true : "";
		($emailFrom == "") ? array_push($rwCardsFieldsError, 'rwCardsFormEmailFrom') : "";

		for ($i = 0; $i < count($_SESSION['rwcardsSession']['rwCardsFormNameTo']); $i++)
		{
			$nameTo[$i] = $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i];
			($nameTo[$i] == "") ? array_push($rwCardsFieldsError, ('rwCardsFormNameTo[' . $i . ']')) : "";
			$emailTo[$i] = $_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i];
			$emailTo[$i] = (JMailHelper::isEmailAddress($emailTo[$i])) ? true : "";
			($emailTo[$i] == "") ? array_push($rwCardsFieldsError, ('rwCardsFormEmailTo[' . $i . ']')) : "";
		}

		return $rwCardsFieldsError;
	}
}
?>
