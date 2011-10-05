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


class RWCardsModelRWCardsManageEcards extends JModel
{

/**
* Hellos data array
*
* @var array
*/
var $_data;

/**
* Constructor that retrieves the ID from the request
*
* @access	public
* @return	void
*/
function __construct()
{

parent::__construct();
$task	= JRequest::getCmd('task');

$id 	= JRequest::getVar('id', 0, 'get', 'int');
$this->publish	= ($task == 'publish') ? 1 : 0;
$this->order	= ($task == 'orderdown') ? 1 : -1;
$this->saveorder	= ($task == 'saveorder') ? 1 : -1;
$cid 	= JRequest::getVar('cid', array(0), 'request', 'array');
JArrayHelper::toInteger($cid, array(0));

$this->setId((int)$cid[0]);
}

/**
* Returns the query
* @return string The query to be used to retrieve the rows from the database
*/
function _buildQuery()
{
$query = ' SELECT * FROM #__rwcards';
return $query;
}

/**
* Retrieves the hello data
* @return array Array of objects containing the data from the database
*/
function &getListData()
{	
global $mainframe, $option;

$category_id = JRequest::getInt( 'category_id', 0, 'post' );

$db			=& JFactory::getDBO();
$filter_order		= $mainframe->getUserStateFromRequest( $option.'filter_order', 		'filter_order', 	'ordering',	'cmd' );
$filter_order_Dir	= $mainframe->getUserStateFromRequest( $option.'filter_order_Dir',	'filter_order_Dir',	'',	'word' );
$filter_state 		= $mainframe->getUserStateFromRequest( $option.'filter_state', 		'filter_state', 	'',	'word' );
$filter_catid 		= $mainframe->getUserStateFromRequest( $option.'filter_catid', 		'filter_catid',		'',	'int' );
$search 		= $mainframe->getUserStateFromRequest( $option.'search', 			'search', 			'',	'string' );
$search 		= JString::strtolower( $search );

$limit		= $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
$limitstart	= $mainframe->getUserStateFromRequest($option.'.limitstart', 'limitstart', 0, 'int');

$where = array();

if ( $search ) 
{
$where[] = 'autor LIKE "%'.$db->getEscaped($search).'%" or description LIKE "%'.$db->getEscaped($search).'%"';
}
if ( $filter_catid ) 
{
$where[] = 'id = '.(int) $filter_catid;
}
if ( $filter_state ) 
{
if ( $filter_state == 'P' ) 
{
$where[] = '#__rwcards.published = 1';
}
else if ($filter_state == 'U' ) 
{
$where[] = '#__rwcards.published = 0';
}
}

if (intval($category_id) > 0)
{
$where[] = '#__rwcards.category_id = "' . $category_id . '" and #__rwcards_category.id = "' . $category_id . '"';
}
else
{
$where[] = '#__rwcards.category_id = #__rwcards_category.id';
}

$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
if ($filter_order == 'ordering')
{
$orderby 	= ' ORDER BY ordering, category_id';
}
else 
{                            
$orderby 	= ' ORDER BY '. $filter_order .' '. $filter_order_Dir .', ordering, category_id';
}

// get the total number of records
$query = "SELECT COUNT(*) FROM #__rwcards" . $where . $orderby;
$db->setQuery( $query );
$this->total = $db->loadResult();
jimport('joomla.html.pagination');
$this->_data['_pageNav'] = new JPagination( $this->total, $limitstart, $limit );


$query = "SELECT #__rwcards.* , #__rwcards_category.category_kategorien_name FROM (#__rwcards, #__rwcards_category)" . $where . $orderby;
$db->setQuery( $query, $this->_data['_pageNav']->limitstart, $this->_data['_pageNav']->limit );

$this->_data['rows'] = $db->loadObjectList();

// build list of categories
$categories[] = JHTML::_('select.option',  '-1', '- '. JText::_( 'ECARD_CHOOSE_CATEGORY' ) .' -' );

$query = "SELECT id AS value, category_kategorien_name AS text FROM #__rwcards_category order by category_kategorien_name, ordering";
$this->_db->setQuery( $query );
//$categories = $this->_db->loadObjectList();
$categories = array_merge( $categories, $this->_db->loadObjectList() );
$lists['categories'] = JHTML::_('select.genericlist', $categories, "category_id", "class=\"inputbox\" size=\"1\" onchange=\"changeCategory();\"", 'value', 'text',  $category_id);

// state filter
$lists['state']	=  JHTML::_('grid.state',  $filter_state );

// table ordering
if ( $filter_order_Dir == 'desc' ) 
{                                    
$lists['order_Dir'] = 'asc';
} 
else 
{                                      
$lists['order_Dir'] = 'desc';
}
$lists['order'] = $filter_order;

// search filter
$lists['search']= $search;

$this->_data['lists'] = $lists;

return $this->_data;
}


/**
* Method to set the hello identifier
*
* @access	public
* @param	int Hello identifier
* @return	void
*/
function setId($id)
{
// Set id and wipe data
$this->_id		= $id;
$this->_data	= null;
}


/**
* Method to get a hello
* @return object with data
*/
function &getEditData()
{

// Load the data
if (empty( $this->_data )) 
{
$query = 'SELECT * FROM #__rwcards where id = "'.$this->_id . '"';
$this->_db->setQuery( $query );
$this->_data['rows'] = $this->_db->loadObject();
}
if (!$this->_data) {
$this->_data = new stdClass();
$this->_data->id = 0;
}

// all categories as select.list, current value is selected
$query = "SELECT id AS value, category_kategorien_name AS text FROM #__rwcards_category order by category_kategorien_name, ordering";
$this->_db->setQuery( $query );
$categories = $this->_db->loadObjectList();
$lists['categories'] = JHTML::_('select.genericlist', $categories, "category_id", "class=\"inputbox\" size=\"1\"" , 'value', 'text',  $this->_data['rows']->category_id);

// all pictures from /images/stories/cards
jimport( 'joomla.filesystem.folder' );
$imageFiles = JFolder::files( JPATH_ROOT . '/images/stories/cards', 'jpg$|gif$|png$|swf$', false, false, array('.jpg', '.gif'));

$images = array();

foreach ($imageFiles as $file)
{
if ( preg_match("/.*@rwcards.*/", $file) ) continue;
$option[] = JHTML::_( 'select.option', $file );
}

$lists['imageFiles'] = JHTML::_('select.genericlist', $option, "picture", "class=\"inputbox\" size=\"1\" onchange=\"changeImagePreview();\"", 'value', 'text', $this->_data['rows']->picture);

$this->_data['lists'] = $lists;

return $this->_data;
}

/**
* Method to store a record
*
* @access	public
* @return	boolean	True on success
*/
function store()
{

$row =& $this->getTable('rwcards');

$data = JRequest::get( 'post' );

$this->RWCardsCreateThumbnails();

// Bind the form fields to the hello table
if (!$row->bind($data)) {
$this->setError($this->_db->getErrorMsg());
return false;
}

// Make sure the hello record is valid
if (!$row->check()) {
$this->setError($this->_db->getErrorMsg());
return false;
}

// Store the web link table to the database
if (!$row->store()) {
$this->setError( $row->getErrorMsg() );
return false;
}
return true;
}

/**
* Method to delete record(s)
*
* @access	public
* @return	boolean	True on success
*/
function delete()
{
$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );

$row =& JTable::getInstance('rwcards', 'Table');

if (count( $cids ))
{
foreach($cids as $cid) {
if (!$row->delete( $cid )) {
$this->setError( $row->getErrorMsg() );
return false;
}
}						
}
return true;
}


/**
* Changes the state of one or more content pages
* @param array An array of unique category id numbers
* @param integer 0 if unpublishing, 1 if publishing
* @param string The current option
*/
function getchangeData( $cid=null )
{
global $mainframe;

$cid		= JRequest::getVar( 'cid', array(), 'post', 'array' );
// Initialize variables
$db 	=& JFactory::getDBO();
$user 	=& JFactory::getUser();

if (count( $this->_id)  < 1) {
			$action = $this->publish ? 'publish' : 'unpublish';
	JError::raiseError(500, JText::_( 'Select an item to' .$action, true ) );
	}
	
	$cids = implode( ',', $cid );
	
	$query = 'UPDATE #__rwcards'
	. ' SET published = ' . $this->publish
	. ' WHERE id IN ( '. $cids .' )'
	. ' AND ( checked_out = 0 OR ( checked_out = '. (int) $user->get('id') .' ) )'
	;
	$db->setQuery( $query );
	if (!$db->query()) {
	JError::raiseError(500, $db->getErrorMsg() );
	}
	
	
	$mainframe->redirect( 'index.php?option=com_rwcards&controller=manageecards&section=manageecards&task=view' );
	}
	
	
	function getOrderData( $cid=null )
	{
	global $mainframe;
	
	$cid		= JRequest::getVar( 'cid', array(), 'post', 'array' );
	$db =& JFactory::getDBO();
	
	$row =& JTable::getInstance('rwcards', 'Table');
	
	
	$row->load( $cid[0] );
	$row->move( $this->order, ' published != 0' );
		//var_dump($row); exit;
		
		$mainframe->redirect( 'index.php?option=com_rwcards&controller=manageecards&section=manageecards&task=view' );
	}	
	
	
	function getsaveOrderData( $cid=null )
	{
	global $mainframe;
	
	$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
	//var_dump($cid);exit;
	
	// Initialize variables
	$db			=& JFactory::getDBO();
	$total		= count( $cid );
	$order 		= JRequest::getVar( 'order', array(0), 'post', 'array' );
	JArrayHelper::toInteger($order, array(0));
	
	$row =& JTable::getInstance('rwcards', 'Table');
	$groupings = array();
	
	// update ordering values
	for( $i=0; $i < $total; $i++ ) {
			$row->load( (int) $cid[$i] );
		// track categories
		$groupings[] = $row->catid;
		
		if ($row->ordering != $order[$i]) {
		$row->ordering = $order[$i];
		if (!$row->store()) {
		//TODO - convert to JError
		JError::raiseError(500, $db->getErrorMsg() );
		}
		}
		}
		
		// execute updateOrder for each parent group
		$groupings = array_unique( $groupings );
		foreach ($groupings as $group){
		$row->reorder('ordering = '.(int) $group);
		}
		
		$mainframe->redirect( 'index.php?option=com_rwcards&controller=manageecards&section=manageecards&task=view' );
		
		}
		
		
		function RWCardsCreateThumbnails()
		{
		global $mainframe;
		
		$image		= JRequest::getVar( 'picture', array(), 'post', 'array' );
		
		$breite = 160;
		$hoehe = 120;  
		$fileExtension = strtolower( substr($image[0], strrpos($image[0], ".")) );
		$name = strtolower( substr($image[0], 0, -4) ) . "@rwcards" . $fileExtension; 
		
		$size = GetImageSize (JPATH_ROOT . "/images/stories/cards/" . $image[0]); 
		//var_dump($size); exit;
		// zugross & quer
		if ($size[0] > $breite && $size[1] > $hoehe  && $size[0] >= $size[1]) 
				{
				if ($size[0] == $size[1])
				{
				$sizemin[0] = $breite;
				$sizemin[1] = $breite;
				}  
				else
				{
				$sizemin[0] = $breite;
				$sizemin[1] = $hoehe;
				}
				}
				// zugross & hochkant
				else if ($size[0] > $breite && $size[1] > $hoehe && $size[1] > $size[0]) 
				{
				$sizemin[0] = $hoehe;
				$sizemin[1] = $breite;
				}
				// breite zu gross:
				else if ($size[0] > $breite )
		{
		$sizemin[0] = $breite;
		$sizemin[1] = $size[1];
		}
		// hoehe zu gross:
		else if ($size[1] > $hoehe )
		{
		$sizemin[0] = $size[0];
		$sizemin[1] = $hoehe;
		}
		// bild ok:
		else 
		{
		$sizemin[0] = $sizemin[0];
		$sizemin[1] = $sizemin[1];
		}
		
		if (eregi( "\.gif", $image[0] ))
		{
		$im = ImageCreateFromGif(JPATH_ROOT . "/images/stories/cards/" . $image[0]);
		}
		if (eregi( "\.png", $image[0] ))
		{
		$im = ImageCreateFromPNG(JPATH_ROOT . "/images/stories/cards/" . $image[0]);
		}
		if (eregi( "\.jpg", $image[0] ))
		{
		$im = @imagecreatefromjpeg(JPATH_ROOT . "/images/stories/cards/" . $image[0]); 
		}
		$small = imagecreatetruecolor($sizemin[0], $sizemin[1] );
		
		ImageCopyResampled($small, $im, 0, 0, 0, 0, $sizemin[0], $sizemin[1], $size[0], $size[1]);
		ImageDestroy($im);
		
		if (eregi( "\.gif", $image[0] ))
		{
		imagegif($small, JPATH_ROOT . "/images/stories/cards/" . $name, "100%");
		}
		if (eregi( "\.png", $image[0] ))
		{
		imagepng($small, JPATH_ROOT . "/images/stories/cards/" . $name);
		}	   
		else
		{
		if (!ImageJPEG($small, JPATH_ROOT . "/images/stories/cards/" . $name, "100%"))
		{
		echo "<font color=red><b>";
				echo _RWCARD_THUMBNAIL_ERROR;
				echo "</b></font><br>\n";
			}
			}
			}
			
			}
