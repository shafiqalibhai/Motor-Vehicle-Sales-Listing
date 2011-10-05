<?php
/**
* RWCards table class
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');



class TableRWCardsData  extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;
	/** @var string*/
	var $nameTo = '';
	/** @var string */
	var $nameFrom = '';
	/** @var string */
	var $emailTo = '';
	/** @var string */
	var $emailFrom = '';
	/** @var string */
	var $picture = '';
	/** @var string */
	var $sessionId = '';
	/** @var string */
	var $message = '';
	/** @var date */
	var $writtenOn = null;
	/** @var date */
	var $sendDate = null;
	/** @var int */
	var $cardSent		= 0;
	/** @var date */
	var $cardRead	= 0;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function __construct(& $db) {
		parent::__construct('#__rwcardsdata', 'id', $db);
	}
}
?>
