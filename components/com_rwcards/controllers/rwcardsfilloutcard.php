<?php
/**
* RWCards controller  for FillOutCards
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

class RWCardsControllerRWCardsFillOutCard extends RWCardsController
{

	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'CheckCaptcha', 'CheckCaptcha' );
		$this->registerTask( 'display', 'display' );
		$task = JRequest::getVar('task', '', 'request', 'string');
		//var_dump($task);
	}
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function display()
	{
		$model = $this->getModel('RWCardsFillOutCard');
		JRequest::setVar( 'view', 'RWCardsFillOutCard' );
		JRequest::setVar( 'layout', 'RWCardsFillOutCard'  );
		parent::display();
	}

	function CheckCaptcha()
	{
		$model = $this->getModel('RWCardsFillOutCard');
		JRequest::setVar( 'view', 'RWCardsFillOutCard' );
		JRequest::setVar( 'layout', 'RWCardsFillOutCard'  );
		parent::display();
	}	
}
?>
