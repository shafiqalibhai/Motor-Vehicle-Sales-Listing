<?php
/**
* RWCards Model for ListOneCategory
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

/**
 * RWCards Model
 *
 */
class rwcardsModelRWCardsListOneCategory extends JModel
{
	/**
	 * RWCards data array
	 *
	 * @var array
	 */
	var $_data;
	var $total;
	var $limit;
	var $limitstart;
	var $_categoryData;
	var $category_id;
	/**
	 * Gets the data
	 * @return array The data to be displayed to the user
	 */
	function getData()
	{
		global $mainframe, $option;
		$db =& JFactory::getDBO();
		$category_id = JRequest::getVar('category_id', 0, 'request', 'int');

		// get the total number of records
		$this->cardsPerLine = $db->loadResult($db->setQuery("select cardsperpage from #__rwcardsconfig"));
		// for pagebreak in view
		$this->limit = $db->loadResult($db->setQuery("select rowssperpage from #__rwcardsconfig"));
		$this->limitstart = JRequest::getVar('limitstart', 0, 'request', 'int');
		$this->limit = $this->limit * $this->cardsPerLine;
		$query = "SELECT COUNT(*) FROM #__rwcards where #__rwcards.category_id = '" . $category_id . "' and #__rwcards.published = '1' order by ordering";;
		$db->setQuery( $query );
		$this->total = $db->loadResult();
		jimport('joomla.html.pagination');
		$this->_data['_pageNav'] = new JPagination( $this->total, $this->limitstart, $this->limit );

		// All published pictures from this category;
		$query = "select #__rwcards.*, #__rwcardsconfig.cardsperpage, #__rwcardsconfig.rowssperpage  from #__rwcards, #__rwcardsconfig where #__rwcards.category_id = '" . $category_id . "' and #__rwcards.published = '1' order by ordering";
		$this->_data['rows'] = $this->_getList( $query, $this->limitstart, $this->limit );

		$this->_data['limit'] = $this->limit * $this->cardsPerLine;
		$this->_data['cardsPerLine'] = $this->cardsPerLine;
		return $this->_data;
	}
                                                                                                                                                              
	function getCategories()
	{
		$db =& JFactory::getDBO();

		// First all categories;
		$category_id = JRequest::getVar('category_id', 0, 'request', 'int');
		$categories[] = JHTML::_('select.option',  $category_id, '- '. JText::_( 'ECARD_CHOOSE_CATEGORY' ) .' -' );
		
		$query = "SELECT id AS value, category_kategorien_name AS text FROM #__rwcards_category order by ordering, category_kategorien_name asc";
		$this->_db->setQuery( $query );
		$categories = array_merge( $categories, $this->_db->loadObjectList() );                                         //onchange=\"changeCategory();\"
		$lists['categories'] = JHTML::_('select.genericlist', $categories, "category_id", "class=\"inputbox\" size=\"1\"", 'value', 'text',  $category_id);

		return $lists['categories'];
	}
}
