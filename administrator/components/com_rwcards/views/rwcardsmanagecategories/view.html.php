<?php
/**
* RWCards View class
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

jimport( 'joomla.application.component.view' );


class RWCardsViewRWCardsManageCategories extends JView
{
	/**
	 * Hellos data array
	 *
	 * @var array
	 */
	var $_data;
	
	/**
	 * display method of Hello view
	 * @return void
	 **/
	function display($tpl = null)
	{
		$task =  JRequest::getVar('task');
		$cid 	= JRequest::getVar('cid', array(0), 'post', 'array');
		JArrayHelper::toInteger($cid, array(0));   
		
		switch($task)
		{
			case "edit":
			case "add":
			$this->editData($cid);
			break;

			case "publish":
			$this->changeData($cid, 1);
			break;

			case "unpublish":
			$this->changeData($cid, 0);
			break;

			case 'orderup':
			$this->orderData( $cid[0], -1 );
			break;
		
			case 'orderdown':
			$this->orderData( $cid[0], 1 );
			break;

			case 'saveorder':
			$this->saveOrder( $cid[0] );
			break;
					
			default:
			$this->getData();
		}

	}
	
	function getData()
	{

		$rwcardsCategories		=& $this->get('ListData');

		JToolBarHelper::title(   JText::_( 'MANAGE CATEGORIES' ), 'rwcards' );
		JToolBarHelper::publishList();
		JToolBarHelper::unpublishList();
		JToolBarHelper::deleteList();
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();
		JToolBarHelper::cancel( 'stop', 'Close' );
		JHTML::_('stylesheet', 'rwcards.css', 'administrator/components/com_rwcards/css/');

		$this->assignRef('rwcardsCategories', $rwcardsCategories);
		$this->assignRef('pageNav', $pageNav);
		
		parent::display($tpl);
	}
	
	
	function editData()
	{
		$rwcardsCategories		=& $this->get('editData');
		$isNew		= ($rwcardsCategories->id < 1);
		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );
		JToolBarHelper::title(   JText::_( 'RWCards: ' ) . JText::_( 'MANAGE CATEGORIES' ).': <small><small>[ ' . $text.' ]</small></small>', 'rwcards' );
		JToolBarHelper::save();
		JHTML::_('stylesheet', 'rwcards.css', 'administrator/components/com_rwcards/css/');
		
		if ($isNew)  {
			JToolBarHelper::cancel();
		} else {
			// for existing items the button is renamed `close`
			JToolBarHelper::cancel();
		}
		$this->assignRef('rwcardsCategories', $rwcardsCategories);
		parent::display($tpl);
	}
	

/**
* Changes the state of one or more content pages
* @param array An array of unique category id numbers
* @param integer 0 if unpublishing, 1 if publishing
* @param string The current option
*/
	
	function changeData($cid=null, $state=0)
	{
		$rwcardsCategories		=& $this->get('changeData');
	}	
	
	function orderData( $uid, $inc )
	{
		$rwcardsCategories		=& $this->get('orderData');
	}

	function saveOrder( $cid )
	{
        	$rwcardsCategories		=& $this->get('saveOrderData');
	}
}

