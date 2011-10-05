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

class RWCardsControllerConfig extends RWCardsController
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
	 * display the edit form
	 * @return void
	 */
	function view()
	{
		JRequest::setVar( 'view', 'rwcardsconfig' );
		JRequest::setVar( 'layout', 'formConfig'  );
		JRequest::setVar('hidemainmenu', 1);

		parent::display();
	}

	/**
	 * save a record (and redirect to main page)
	 * @return void
	 */
	function save()
	{
		$model = $this->getModel('rwcardsconfig');

		if ($model->store($post)) {
			$msg = JText::_( 'ENTRY SAVED' );
		} else {
			$msg = JText::_( 'ERROR ENTRY SAVED' );
		}

		$link = 'index.php?option=com_rwcards&controller=config&section=config&task=view';
		$this->setRedirect($link, $msg);
	}


	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
		$msg = JText::_( 'CANCEL' );
		$this->setRedirect( 'index.php?option=com_rwcards', $msg );
	}
}
?>
