<?php
/**
* RWCards Model for PreviewAndSendCard
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
class rwcardsModelRWCardsPreviewAndSendCard extends JModel
{
	/**
	 * RWCards data array
	 *
	 * @var array
	 */
	var $_data;
	var $_categoryData;
	var $category_id;
	/**
	 * Gets the data
	 * @return array The data to be displayed to the user
	 */
	function getData()
	{
		$db =& JFactory::getDBO();
		$category_id = JRequest::getVar('category_id', 0, 'request', 'int');
		//var_dump($category_id);

		// All published pictures from this category;
		$query = "select #__rwcards.*, #__rwcardsconfig.cardsperpage, #__rwcardsconfig.rowssperpage  from #__rwcards, #__rwcardsconfig where #__rwcards.category_id = '" . $category_id . "' and #__rwcards.published = '1' order by ordering";
		$this->_data = $this->_getList( $query );
		
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
		$categories = array_merge( $categories, $this->_db->loadObjectList() );
		$lists['categories'] = JHTML::_('select.genericlist', $categories, "category_id", "class=\"inputbox\" size=\"1\" onchange=\"changeCategory();\"", 'value', 'text',  $category_id);

		return $lists['categories'];
	}
}
