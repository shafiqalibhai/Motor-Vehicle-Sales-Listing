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


class TableRWCards  extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;
	/**
	 * @var string
	 */
	var $autor = '';
	/**
	 * @var string
	 */
	var $email = '';
	/**
	 * @var string
	 */
	var $picture = '';
	/**
	 * @var string
	 */
	var $description = '';
	/** @var int */
	var $checked_out		= 0;
	/** @var date */
	var $checked_out_time	= 0;
	/** @var int */
	var $published			= 1;	
	/** @var int */
	var $ordering			= 1;
	/** @var int */
	var $category_id		= 0;
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function __construct(& $db) {
		parent::__construct('#__rwcards', 'id', $db);
	}
}
?>
