<?php
/**
* RWCArds Model for RWCards Component
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

class RWCardsModelRWCardsManageSentCards extends JModel
{
	/**
	* RWCardsSentCards data array
	*
	* @var array
	*/
	var $_data;
	
	/**
	* Constructor that retrieves the task from the request
	*
	* @access	public
	* @return	void
	*/
	function __construct()
	{
		parent::__construct();
		$task = JRequest::getCmd('task');
	}


	/**
	* Retrieves the data
	* @return array Array of objects containing the data from the database
	*/
	function getListData()
	{	
		global $mainframe, $option;

		// First delete all entries that are too old as defined in config table
		$this->delete();
		

		$db =& JFactory::getDBO();
		$search = $mainframe->getUserStateFromRequest( $option.'search', 'search', '',	'string' );
		$search = JString::strtolower( $search );
		
		$limit= $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
		$limitstart = $mainframe->getUserStateFromRequest($option.'.limitstart', 'limitstart', 0, 'int');
		
		$where = array();
		
		if ( $search ) 
		{
			$where[] = 'nameTo LIKE "%'.$db->getEscaped($search).'%" or nameFrom LIKE "%'.$db->getEscaped($search).'%" or emailTo LIKE "%'.$db->getEscaped($search).'%" or emailFrom LIKE "%'.$db->getEscaped($search).'%" or message LIKE "%'.$db->getEscaped($search).'%"' ;
		}
		
		// filter by cards sent
		$cardsFilterSent = JRequest::getInt( 'cardSent', -1, 'post' );
		if ( $cardsFilterSent  > -1 )
		{
			$where[] = "#__rwcardsdata.cardSent = '" . $cardsFilterSent . "'";
		}
		
		// filter by cards read
		$cardsFilterRead = JRequest::getInt( 'cardRead', -1, 'post' );
		if ( $cardsFilterRead > -1 )
		{
			$where[] = "#__rwcardsdata.cardRead = '" . $cardsFilterRead ."'";
		}
		
		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
		$orderby 	= ' ORDER BY id';
		
		// get the total number of records
		$query = "SELECT COUNT(*) FROM #__rwcardsdata" . $where. $orderby;
		$db->setQuery( $query );
		$this->total = $db->loadResult();
		
		jimport('joomla.html.pagination');
		$this->_data['_pageNav'] = new JPagination( $this->total, $limitstart, $limit );
		
		$query = "SELECT * from #__rwcardsdata"	. $where . $orderby;
		$db->setQuery( $query, $this->_data['_pageNav']->limitstart, $this->_data['_pageNav']->limit );
		$this->_data['rows'] = $db->loadObjectList();

		// build list of sent/not sent cards
		$allSentCards[] = JHTML::_('select.option',  '-1', '- '. JText::_( 'RWCARDS_FILTER_CHOOSE_ALL_SENT_CARDS' ) .' -' );
		$allSentCards[] = JHTML::_('select.option',  '1', '- '. JText::_( 'RWCARDS_ALL_SENT_CARDS' ) .' -' );
		$allSentCards[] = JHTML::_('select.option',  '0', '- '. JText::_( 'RWCARDS_ALL_NOT_SENT_CARDS') .' -' );
		$lists['allSentCards'] = JHTML::_('select.genericlist', $allSentCards, "cardSent", "class=\"inputbox\" size=\"1\" onchange=\"getFilterCards();\"", 'value', 'text',  $cardsFilterSent);
		
		// build list of read/not read cards
		$allReadCards[] = JHTML::_('select.option',  '-1', '- '. JText::_( 'RWCARDS_FILTER_CHOOSE_ALL_READ_CARDS' ) .' -' );
		$allReadCards[] = JHTML::_('select.option',  '1', '- '. JText::_( 'RWCARDS_ALL_READ_CARDS' ) .' -' );
		$allReadCards[] = JHTML::_('select.option',  '0', '- '. JText::_( 'RWCARDS_ALL_NOT_READ_CARDS') .' -' );
		$lists['allReadCards'] = JHTML::_('select.genericlist', $allReadCards, "cardRead", "class=\"inputbox\" size=\"1\" onchange=\"getFilterCards();\"", 'value', 'text',  $cardsFilterRead);
		
		// search filter
		$lists['search']= $search;
		
		$this->_data['lists'] = $lists;
		
		return $this->_data;
	}



	/**
	* Method to delete all records that are older then defined in the configuration tabel
	*
	* @access private
	*/
	function delete()
	{
		$db =& JFactory::getDBO();
		
		$db->setQuery( "select lifetime FROM #__rwcardsconfig" );
		$rowsConfig = $db->loadObjectList();
		$lifetimeDate = date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")-$rowsConfig[0]->lifetime, date("Y")));
		
		$db->setQuery( "select writtenOn FROM #__rwcardsdata" );
		$rows = $db->loadObjectList();
		
		for ($i=0; $i<count($rows); $i++) 
		{
			if ($rows[$i]->writtenOn <= $lifetimeDate)
			{
				//echo "DELETE FROM #__rwcardsdata WHERE writtenOn <= '" . $lifetimeDate . "'<br>";
				$db->query( $db->setQuery("DELETE FROM #__rwcardsdata WHERE writtenOn <= '" . $lifetimeDate . "'" ) );
			}
		}
	}

}