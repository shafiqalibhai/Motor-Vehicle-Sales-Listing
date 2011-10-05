<?php
/**
* RWCArds Controller for RWCards Component
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

class RWCardsControllermanageSentCards extends RWCardsController
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();
		$this->registerTask( 'add'  , 	'view' );
	}

	/**
	 * display the view form
	 * @return void
	 */
	function view()
	{
		JRequest::setVar( 'view', 'RWCardsManageSentCards' );
		JRequest::setVar( 'layout', 'formManageSentCards'  );
		JRequest::setVar('hidemainmenu', 1);
		parent::display();
	}


	/**
	 * remove record(s)
	 * @return void
	 */
	function remove()
	{
		$model = $this->getModel('rwcards');
		if(!$model->delete()) {
			$msg = JText::_( 'Error: Could not be Deleted' );
		} else {
			$msg = JText::_( 'Deleted' );
		}

		$this->setRedirect( 'index.php?option=com_rwcards', $msg );
	}

	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
		$msg = JText::_( 'Operation Cancelled' );
		$this->setRedirect( 'index.php?option=com_rwcards', $msg );
	}
}
?>
