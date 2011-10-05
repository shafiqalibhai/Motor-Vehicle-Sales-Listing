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

class RWCardsControllermanageEcards extends RWCardsController
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();
		$this->registerTask( 'add', 'edit' );
		$this->registerTask( 'view', 'view' );
		$this->registerTask( 'publish', 'publish' );;
	}


	/**
	 * display the edit form
	 * @return void
	 */
	function edit()
	{
		JRequest::setVar( 'view', 'rwcardsManageEcards' );
		JRequest::setVar( 'layout', 'formManageEditEcards'  );
		JRequest::setVar('hidemainmenu', 1);
		JRequest::setVar('edit', 'edit');

		parent::display();
	}
	/**
	 * display the edit form
	 * @return void
	 */
	function view()
	{
		JRequest::setVar( 'view', 'rwcardsManageEcards' );
		JRequest::setVar( 'layout', 'formManageEcards'  );
		JRequest::setVar('hidemainmenu', 1);

		parent::display();
	}

	/**
	 * save a record (and redirect to main page)
	 * @return void
	 */
	function save()
	{
		$model = $this->getModel('rwcardsManageEcards');

		if ($model->store($post)) {
			$msg = JText::_( 'ENTRY SAVED' );
		} else {
			$msg = JText::_( 'ERROR ENTRY SAVED' );
		}

		$link = 'index.php?option=com_rwcards&controller=manageecards&section=manageecards&task=view';
		$this->setRedirect($link, $msg);
	}

	/**
	 * remove record(s)
	 * @return void
	 */
	function remove()
	{
		$model = $this->getModel('rwcardsManageEcards');
		if(!$model->delete()) {
			$msg = JText::_( 'ERROR ENTRY DELETED' );
		} else {
			$msg = JText::_( 'ENTRY DELETED' );
		}

		$this->setRedirect( 'index.php?option=com_rwcards&controller=manageecards&section=manageecards&task=view', $msg );
	}

	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
		$msg = JText::_( 'CANCEL OPERATION' );
		$this->setRedirect( 'index.php?option=com_rwcards&controller=manageecards&section=manageecards&task=view', $msg );
	}

	function publish()
	{
		JRequest::setVar( 'view', 'rwcardsManageEcards' );
		JRequest::setVar( 'layout', 'formManageEcards'  );
		JRequest::setVar('hidemainmenu', 1);
		JRequest::setVar('publish', 'publish');

		parent::display();
	}
	
	function unpublish()
	{
		JRequest::setVar( 'view', 'rwcardsManageEcards' );
		JRequest::setVar( 'layout', 'formManageEditEcards'  );
		JRequest::setVar('hidemainmenu', 1);
		JRequest::setVar('unpublish', 'unpublish');

		parent::display();
	}	
	
	function orderdown()
	{
		JRequest::setVar( 'view', 'rwcardsManageEcards' );
		JRequest::setVar( 'layout', 'formManageEditEcards'  );
		JRequest::setVar('hidemainmenu', 1);
		JRequest::setVar('orderdown', 'orderdown');

		parent::display();
	}		

	function orderup()
	{
		JRequest::setVar( 'view', 'rwcardsManageEcards' );
		JRequest::setVar( 'layout', 'formManageEditEcards'  );
		JRequest::setVar('hidemainmenu', 1);
		JRequest::setVar('orderup', 'orderup');

		parent::display();
	}

	function saveorder()
	{
		JRequest::setVar( 'view', 'rwcardsManageEcards' );
		JRequest::setVar( 'layout', 'formManageEditEcards'  );
		JRequest::setVar('hidemainmenu', 1);
		JRequest::setVar('saveorder', 'saveorder');

		parent::display();
	}

}
?>
