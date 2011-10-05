<?php
/**
* RWCards Model for SendCard
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

/**
 * RWCardsSendCard Model
 *
 */
class rwcardsModelRWCardsSendCard extends JModel
{
	/**
	 * RWCards data array
	 *
	 * @var array
	 */
	var $_data;

	/**
	 * Saves the senders data
	 */
	function getSaveSenderData()
	{
		global $mainframe;
        jimport('joomla.mail.mail');
		$db =& JFactory::getDBO();

		// check the config settings
		$db->setQuery("SELECT attachement FROM #__rwcardsconfig");
		$attachement = intval($db->loadResult());

		$Itemid = JRequest::getVar('Itemid', 0, 'request', 'int');

		if ( $_SESSION['rwcardsSession'] != "" )
		{
			// All receivers are stored in tbe database
			for ($i = 0; $i < count($_SESSION['rwcardsSession']['rwCardsFormEmailTo']); $i++)
			{
				$query = "INSERT INTO #__rwcardsdata SET picture= '" . $_SESSION['rwcardsSession']['picture'] . "', nameTo = '" . $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i] . "', nameFrom = '" . $_SESSION['rwcardsSession']['rwCardsFormNameFrom'] . "', emailTo = '" . $_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i] . "', emailFrom = '" . $_SESSION['rwcardsSession']['rwCardsFormEmailFrom'] . "', message = " . $db->Quote($_SESSION['rwcardsSession']['rwCardsFormMessage']) . ", sessionID = '" . $_SESSION['rwcardsSession']['sessionCode'] . "' , writtenOn = '" . date("Y-m-d") . "' , cardSent = '0'";
				$db->setQuery( $query );
				if (!$result = $db->query()) 
				{
					echo  $db->stderr();
				}
                        
				// Get the ID generated from the previous INSERT operation
				$lastId[$i] = $db->insertid();
				
				// Send an email to the receiver(s)
                                 $mail =& JMail::getInstance();
				
				if (!$_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i] || !$_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i] || (JMailHelper::isEmailAddress($_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i]) == false))
				{
				$this->setError(JText::_('RWCARDS_MAIL_PROBLEM'));
				$this->display();
				return false;
				}

				$MailFrom 	= $_SESSION['rwcardsSession']['rwCardsFormEmailFrom'];
				$FromName 	= $_SESSION['rwcardsSession']['rwCardsFormNameFrom'];
	
				// Prepare email body
	
				$linkToRWCards = JURI::base() . "index.php?option=com_rwcards&controller=rwcardsprelookcard&Itemid=" . $Itemid . "&sessionId=" . $_SESSION['rwcardsSession']['sessionCode'] . "&id=" . $lastId[$i] . "&task=viewCard&read=1&sendmail=1";
				$linkToViewOnly = JURI::base() ."index.php?option=com_rwcards&controller=rwcardsprelookcard&Itemid=" . $Itemid . "&sessionId=" . $_SESSION['rwcardsSession']['sessionCode'] . "&id=" . $lastId[$i] . "&task=viewCard&sendmail=0";
				
				$subject = JText::_('RWCARDS_SUBJECT') . " " . $FromName;
				
				// send link to card
				if ($attachement)
				{
					$message = JText::_('RWCARDS_GREETING') . " " . $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i] . "\n" . $FromName . " " . JText::_('RWCARDS_MSG_ATTACHEMENT_1') . "\n" . JText::_('RWCARDS_MSG_ATTACHEMENT_2') . "\n" . JText::_('RWCARDS_MSG_ATTACHEMENT_3') . "\n\n" . nl2br($_SESSION['rwcardsSession']['rwCardsFormMessage']) . "\n\n" . JText::_('RWCARDS_MSG_SEPARATOR') . "\n\n" .  JText::_('RWCARDS_MSG_COPYRIGHT');
					$mail->addAttachment("./images/stories/cards/" . $_SESSION['rwcardsSession']['picture']);
	            }
				else
				{
					$message = JText::_('RWCARDS_GREETING') . " " . $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i] . "\n" . $FromName . " " . JText::_('RWCARDS_MSG_PART_1') . "\n\n" . JText::_('RWCARDS_MSG_PART_2') . "\n\n" . $linkToRWCards . "\n\n" . JText::_('RWCARDS_MSG_SEPARATOR') . "\n" . JText::_('RWCARDS_MSG_COPYRIGHT') . "\n\n";					
				}
				
				$mail->addRecipient( $_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i] );
				$mail->setSender( array( $MailFrom, $FromName ) );
				$mail->setSubject( $subject );
				$mail->setBody( $message );
				$sent = $mail->Send();
                                //echo $sent;
				// Update database and set cardSent to 1 so it does not get send anothertime
				$db->setQuery("UPDATE #__rwcardsdata SET cardSent = '1' where id = '" . $lastId[$i] . "' and sessionId = '" . $_SESSION['rwcardsSession']['sessionCode'] . "'");
				$db->query();
				$db->query();
				/**
				 *  email only to one sender no concatening of all if serveral, 01.09.2008 RW
				 */
				$mail = null;				
			}
		}
		else
		{
        	$mainframe->redirect( JURI::base() . 'index.php?option=com_rwcards&view=rwcards&Itemid=' . $Itemid . '');
		}
	}

	function getViewCardsData()
	{
		global $mainframe;
        jimport('joomla.mail.mail');

		$sessionId = JRequest::getVar('sessionId', '', 'request', 'string');
		$read = JRequest::getVar('read', '', 'request', 'string');
		$sendmail = JRequest::getVar('sendmail', '', 'request', 'string');
		$id = JRequest::getVar('id', '', 'request', 'string');

		$db =& JFactory::getDBO();
		// check the config settings                                       
		$query = "SELECT * FROM #__rwcardsdata where sessionId = '" . $sessionId . "' and id = '" . $id . "'";
		$this->_data = $this->_getList( $query );
                
		if ( $result = $db->query() )
		{
			if ( $this->_data[0]->cardRead == '0')
			{
				// email to sender that card was read
				$mail =& JMail::getInstance();
				$subject =  JText::_('RWCARDS_CARD_READ_SUBJECT');
				$message = JText::_('RWCARDS_GREETING') . " " . $this->_data[0]->nameFrom . "\n" . $this->_data[0]->nameTo . " " . JText::_('RWCARDS_CARD_READ_MSG_1') . " " . date("d.m.Y") . " " . JText::_('RWCARDS_CARD_READ_MSG_2') . "\n\n" . JText::_('RWCARDS_CARD_READ_MSG_3') . "\n\n" . JText::_('RWCARDS_MSG_SEPARATOR') . "\n" . JText::_('RWCARDS_MSG_COPYRIGHT') . "\n\n";
				$mail->addRecipient( $this->_data[0]->emailFrom );
				$mail->setSender( array( $this->_data[0]->emailTo, $this->_data[0]->nameTo ) );
				$mail->setSubject( $this->_data[0]->nameFrom.': '.$subject );
				$mail->setBody( $message );
				$sent = $mail->Send();
				// update table so email is only sent once
				$query = "Update #__rwcardsdata set cardRead = '1', readOn = '" . date("Y-m-d") . "' where sessionId = '" . $sessionId . "' and id = '" . $id . "'";
				$db->setQuery( $query );
				$db->query();
			}
			

		}
		
		return $this->_data;		
	}
}
