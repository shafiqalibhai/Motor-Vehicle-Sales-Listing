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

function managePhotos($option, $id)
{
	//get the table class from tables folder
	$row =& JTable::getInstance('Morfeoshow', 'Table');
	//get the row from the database with the gallery id
	$row->load($id);
	
	//get the images info from the database
	$db 	=& JFactory::getDBO();
	$query 	= "SELECT * FROM #__morfeoshow_img WHERE gallery_id = $id ORDER BY filename";
	$db->setQuery( $query );
	$rows 	= $db->loadObjectList();
	//$rows holds all the photo rows for this gallery


	if ($db->getErrorNum()) 
	{
		echo $db->stderr();
		return false;
	}
	
	HTML_morfeoshow::managePhotos($row, $option, $id);
}



function editDes($option, $id, $photo_id)
{

	//get the table class from tables folder
	$row =& JTable::getInstance('Morfeoshow', 'Table');
	//get the row from the database with that id
	$row->load($id);
	
	//get the image info from the database
	$db =& JFactory::getDBO();
	$query = "SELECT * FROM #__morfeoshow_img WHERE id =" .(int) $photo_id;
	$db->setQuery($query);
	$img_row = $db->loadObject();


	if ($db->getErrorNum()) 
	{
		echo $db->stderr();
		return false;
	}
	
	
	HTML_morfeoshow::editDes($row, $img_row, $option, $id);
}

function saveDes($option, $id, $folder, $photo_id)
{
	global $mainframe, $errors;
	$row =& JTable::getInstance('Morfeoshow_img', 'Table');
	
	//bind matches up post names with db names
	if (!$row->bind(JRequest::get('post')))
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}
	
	//description is in html and bind strips this, so this fixes it
	$row->title = JRequest::getVar( 'title', '', 'post',
	'string', JREQUEST_ALLOWRAW );
	$row->html = JRequest::getVar( 'html', '', 'post',
	'string', JREQUEST_ALLOWRAW );
	
	if (!$row->store())
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}
	
	//write the xml file with the new image description
	//this function is in inc/xml
	write_xml($id, $folder);

	$mainframe->redirect( 'index.php?option=' . $option . '&task=photos&cid[]=' . $id, JText::_( 'Description saved successfully' ) );
}


function delPhoto($option, $folder, $id, $photo_id)
{
	global $mainframe;
	$db =& JFactory::getDBO();
	$query = "SELECT filename FROM #__morfeoshow_img WHERE id =" .(int) $photo_id;
	$db->setQuery( $query );
	$result = $db->loadResult();
	
	$thumb_file = JPATH_SITE.'/images/morfeoshow/'. $folder . '/thumbs/' . $result;
	$big_file 	= JPATH_SITE.'/images/morfeoshow/'. $folder . '/big/' . $result;
	$mini_file  = JPATH_SITE.'/images/morfeoshow/'. $folder . '/mini/' . $result;
	
	unlink($thumb_file);
	unlink($big_file);
	unlink($mini_file);	
	
	$query = "DELETE FROM #__morfeoshow_img WHERE id = $photo_id";
	$db->setQuery($query);
	if (!$db->query())
	{
		echo "<script> alert('".$db->getErrorMsg()."');
		window.history.go(-1); </script>\n";
	}
	
	//this function is in inc/xml
	write_xml($id, $folder);
	
	$mainframe->redirect( 'index.php?option=' . $option . '&task=photos&cid=' . $id, JText::_( 'File deleted successfully' ) );
}


function Photos($option, $id)
{
    global $mainframe, $params_morfeo;
	$db 	=& JFactory::getDBO();
	//get the table class from tables folder
	$row =& JTable::getInstance('Morfeoshow', 'Table');
	//get the row from the database with the gallery id
	$row->load($id);
	$limit				= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
	$limitstart			= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );	
/*
	$ordinamento = array(
		JHTML::_( 'select.option', 'title desc', 'Titolo AZ' ),	
		JHTML::_( 'select.option', 'title asc', 'Titolo ZA' ),
		JHTML::_( 'select.option', 'filename desc', 'Filename AZ' ),
		JHTML::_( 'select.option', 'filename asc', 'Filename ZA' ),
		JHTML::_( 'select.option', 'id desc', 'ID desc' ),
		JHTML::_( 'select.option', 'is asc', 'ID asc' ),
		);		
	$javascript = 'onchange="document.adminForm.submit();"';
	$lists['ordinamento'] = JHTML::_('select.genericlist', $ordinamento, 'orderbay', 'class="inputbox" size="1"', 'value', 'text', $orderby);
*/
  $order = $params_morfeo['orderback'];	
	
//	$orderby = 'title desc';

	// get the total number of records
	$query = 'SELECT COUNT(*) '
	. ' FROM #__morfeoshow_img'
	. ' WHERE gallery_id ='. (int) $row->id 
	;
	$db->setQuery( $query );
	$total = $db->loadResult();	
	jimport('joomla.html.pagination');
	$pageNav = new JPagination( $total, $limitstart, $limit );		

	//get the images info from the database
	$query 	= "SELECT * FROM #__morfeoshow_img WHERE gallery_id = $id ORDER BY " .$order
	;
	$db->setQuery( $query, $pageNav->limitstart, $pageNav->limit );	
	$rows = $db->loadObjectList();
	if ($db->getErrorNum()) {
		echo $db->stderr();
		return false;
	}	
	
	HTML_morfeoshow::Photos($row, $rows, $option, $id, $pageNav, $lists);
}
?>