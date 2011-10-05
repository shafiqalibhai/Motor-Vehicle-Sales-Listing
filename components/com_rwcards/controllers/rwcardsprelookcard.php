<?php
/**
* RWCards controller  for PreviewCards
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

class RWCardsControllerRWCardsPreLookCard extends RWCardsController
{

	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'sendRWCard', 'sendRWCard' );
		$this->registerTask( 'prelookRWCard', 'prelookRWCard' );
		$this->registerTask( 'viewCard', 'viewCard' );
		$task = JRequest::getVar('task', '', 'request', 'string');
		//var_dump($task);
	}
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function previewRWCard()
	{
		//$model = $this->getModel('RWCardsPreviewAndSendCard');
		JRequest::setVar( 'view', 'RWCardsPreLookCard' );
		JRequest::setVar( 'layout', 'RWCardsPreLookCard'  );
		parent::display();
	}

	function sendRWCard()
	{
		$model = $this->getModel('RWCardsSendCard');
		JRequest::setVar( 'view', 'RWCardsSendCard' );
		JRequest::setVar( 'layout', 'RWCardsSendCard'  );
		parent::display();
	}

	function viewCard()
	{
		
		$model = $this->getModel('RWCardsSendCard');
		JRequest::setVar( 'view', 'RWCardsSendCard' );
		JRequest::setVar( 'layout', 'RWCardsSendCard'  );
		parent::display();
	}	
}
?>
