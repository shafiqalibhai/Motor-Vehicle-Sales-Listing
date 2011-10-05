<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_morfeoshow
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

// Include language helper file if 'JLanguageHelper' class doesn't exist
if (!class_exists('JLanguageHelper')) 
{
	jimport('joomla.language.helper');
}

//get admin.morfeoshow.html.php
require_once( JApplicationHelper::getPath( 'admin_html' ) );

//get all the functions
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'configuration.php' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'deltempdir.php' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'gallery.php' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'menu.php' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'photo.php' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'upload.php' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'xml.php' );

//get all the table classes in tables/morfeoshow.php
JTable::addIncludePath(JPATH_COMPONENT.DS.'tables');

$document =& JFactory::getDocument();
$url = $mainframe->getSiteURL();
$url_css = 'administrator/components/'.$option.'/images/icon.css';
$document->addStyleSheet($url.$url_css);

//get the variables using jrequest to prevent injections
$task 			= JRequest::getString('task', '');
$option 		= JRequest::getVar('option', 'com_morfeoshow');
$folder			= JRequest::getVar('folder', '');
$photo_id		= JRequest::getVar('pid', '');
$name			= JRequest::getVar('name', '');
$cid 			= JRequest::getVar( 'cid', array(0), '', 'array' );
$id 			= $cid[0];

// switch every task
switch($task)
{
	case 'add': 			addGallery($option);								break;
	case 'edit': 			configureGallery($option, $id);						break;
	case 'save':			saveGallery($option, $id, $name);					break;
	case 'save_changes':
	case 'apply':			saveChanges($option, $id, $name, $folder, $task); 	break;
	case 'remove':			removeGallery($option, $id);						break;
	case 'publish':
	case 'unpublish':		switchPublish($option, $id, $task);					break;
	case 'orderup':			moveUpGallery( );									break;
	case 'orderdown':		moveDownGallery( );									break;
	case 'saveorder':		saveOrder( );										break;	
	case 'manage_photos':	managePhotos($option, $id);							break;
	case 'photos':			Photos($option, $id);								break;
	case 'menu':			menu($option, $id);									break;
	case 'menuok':			menuok($option, $id);								break;	
	case 'crea_menu':		addmenuMorfeoShow($id, $option, $vocedimenu);		break;	
	case 'upload_image':	uploadImage($option, $task, $folder, $id);			break;
	case 'upload_image2':	uploadImage2($option, $task, $folder, $id);			break;	
	case 'edit_des':		editDes($option, $id, $photo_id);					break;
	case 'save_des':		saveDes($option, $id, $folder, $photo_id);			break;
	case 'del_photo':		delPhoto( $option, $folder, $id, $photo_id );		break;
	case 'back':			showGallerys($option);								break;
	case "postinstall":		showPostinstall();									break;	
	case "info":			showInfo();											break;
	case 'showSettings':	showSettings( $option );							break;
	case 'applySettings':
	case 'saveSettings':	saveSettings( $option, $task );						break;
	case 'svuota':			Svuota($dir);										break;
	default:				showGallerys($option);								
		break;
}

	//function post install
	function showPostinstall()
{
	HTML_morfeoshow::showPostinstall( );	
}
	//function show info
	function showInfo()
{
	HTML_morfeoshow::showInfo( );	
}

	//function show info
	function menu($option, $id)
{
		global $rows, $params, $params_morfeo, $menu, $vocedimenu;
		
		$db		=& JFactory::getDBO();
		$query = "SELECT name FROM #__morfeoshow WHERE id = '$id'";
		$db->setQuery( $query );
		$titologalleria = $db->loadResult();
		$titologallerialias = $db->loadResult();

		// get list of Positions for dropdown filter
		$query = 'SELECT menutype AS value, menutype AS text'
		. ' FROM #__menu'
		. ' GROUP BY menutype'
		. ' ORDER BY menutype ASC'
		;
		$menu[] = JHTML::_('select.option',  '0', '- '. JText::_( 'Select Menu' ) .' -' );
		$db->setQuery( $query );
		$menu = array_merge( $menu, $db->loadObjectList() );
		$lists['menu']	= JHTML::_('select.genericlist',  $menu, 'vocedimenu', 'class="inputbox" size="1"' , 'value', 'text', $vocedimenu);		

	HTML_morfeoshow::menu($id, $option, $params, $titologalleria, $titologallerialias, $lists);	
}

	function menuok()
{
	HTML_morfeoshow::menuok();	
}

/**
* Moves the record up one position
*/
function moveUpGallery(  ) {
	orderGallery( -1 );
}

/**
* Moves the record down one position
*/
function moveDownGallery(  ) {
	orderGallery( 1 );
}

/**
* Moves the order of a record
* @param integer The direction to reorder, +1 down, -1 up
*/
function orderGallery( $inc )
{
	global $mainframe;

	// Check for request forgeries
	JRequest::checkToken() or jexit( 'Invalid Token' );

	$db		=& JFactory::getDBO();
	$cid	= JRequest::getVar('cid', array(0), '', 'array');
	$option = JRequest::getCmd('option');
	JArrayHelper::toInteger($cid, array(0));

	$limit 		= JRequest::getVar( 'limit', 0, '', 'int' );
	$limitstart = JRequest::getVar( 'limitstart', 0, '', 'int' );
	$id 		= JRequest::getVar( 'id', 0, '', 'int' );

	$row =& JTable::getInstance('morfeoshow', 'Table');
	$row->load( $cid[0] );
	$row->move( $inc, 'cid = '.(int) $row->id.' AND published != 0' );

	$mainframe->redirect( 'index.php?option='. $option );
}

/**
* Saves user reordering entry
*/
function saveOrder(  )
{
	global $mainframe;

	// Check for request forgeries
	JRequest::checkToken() or jexit( 'Invalid Token' );

	$db			=& JFactory::getDBO();
	$cid		= JRequest::getVar( 'cid', array(), 'post', 'array' );
	JArrayHelper::toInteger($cid);

	$total		= count( $cid );
	$order		= JRequest::getVar( 'order', array(0), 'post', 'array' );
	JArrayHelper::toInteger($order, array(0));

	$row =& JTable::getInstance('morfeoshow', 'Table');

	// update ordering values
	for( $i=0; $i < $total; $i++ ) {
		$row->load( (int) $cid[$i] );

		if ($row->ordering != $order[$i]) {
			$row->ordering = $order[$i];
			if (!$row->store()) {
				JError::raiseError(500, $db->getErrorMsg() );
			}
		}
	}
	
	$msg 	=  JText::_( 'New ordering saved' );
	$mainframe->redirect( 'index.php?option=com_morfeoshow', $msg );
}

?>