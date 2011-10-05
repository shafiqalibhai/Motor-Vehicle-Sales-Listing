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


class TableRWCardsConfig  extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;
	/** @var int */
	var $lifetime = 7;
	/** @var int */
	var $cardsperpage	= 4;
	/** @var date */
	var $rowssperpage	= 2;
	/** @var string */
	var $attachement = 0;
	/** @var int */
	var $captcha = 1;
	


	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function __construct(& $db) {
		parent::__construct('#__rwcardsconfig', 'id', $db);
	}
}
?>
