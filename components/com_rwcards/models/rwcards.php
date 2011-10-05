<?php
/**
* RWCards Model for Entry RWCards
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
class rwcardsModelrwcards extends JModel
{
	/**
	 * RWCards data array
	 *
	 * @var array
	 */
	var $_data;
	var $_categoryData;

	/**
	 * Gets the data
	 * @return array The data to be displayed to the user
	 */
	function getData()
	{
		$db =& JFactory::getDBO();
		
		// First all categories;
		$query = "select id from #__rwcards_category where #__rwcards_category.published = '1' order by ordering";
		$this->_categoryData = $this->_getList( $query );
		
		// Get all Cards for each category to build a slideshow with them
		$i = 0;
		foreach ($this->_categoryData as $val)
		{
                	$query = "SELECT #__rwcards.*, #__rwcards_category.category_kategorien_name, #__rwcards_category.category_description  FROM #__rwcards left join #__rwcards_category on #__rwcards_category.id = '" . $val->id . "' where (#__rwcards.category_id = '" . $val->id ."' and #__rwcards.published  = '1') order by #__rwcards.ordering";
			$db->setQuery( $query );
			$this->_data[$i] = $this->_getList( $query );
			$i++;
		}

		return $this->_data;
	}
}
