<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitiongallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
function com_uninstall(){
    global $errors;
	$db 	=& JFactory::getDBO();
	$query 	= "SELECT folder FROM #__morfeoshow";
	$db->setQuery( $query );
	$rows 	= $db->loadObjectlist();
	
	for($i = 0; $i < count($rows); $i++){

		$row = &$rows[$i];
	
		$folders_to_remove = array();
		$folders_to_remove[0] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/xml/';
		$folders_to_remove[1] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/big/';
		$folders_to_remove[2] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/mini/';		
		$folders_to_remove[3] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/thumbs/';
		$folders_to_remove[4] = JPATH_SITE.'/images/morfeoshow/'. $row->folder .'/';
		
		for($k = 0; $k < count($folders_to_remove); $k++)	{
			if (file_exists($folders_to_remove[$k])) {
				$d = dir($folders_to_remove[$k]); 
				while($entry = $d->read())	{ 
					if ($entry!= "." && $entry!= "..")	{ 
				 		unlink($folders_to_remove[$k].$entry); 
				 	} 
				} 
				$d->close();
				
				if (!rmdir($folders_to_remove[$k])) {
					JError::raise(2, 500, JText::_( 'ERROR: Folder could not be deleted' ), '', false);
					$errors ++;
				}	
			}
		}
	}
	
	$folders_to_remove 		= array();
	$folders_to_remove[0] 	= JPATH_SITE.'/images/morfeoshow/temp_upload/';
	$folders_to_remove[1] 	= JPATH_SITE.'/images/morfeoshow/';
	
	for($k = 0; $k < count($folders_to_remove); $k++) {
		if (file_exists($folders_to_remove[$k])) {
			$d = dir($folders_to_remove[$k]); 
			while($entry = $d->read())	{ 
				if ($entry!= "." && $entry!= "..") 	{ 
			 		unlink($folders_to_remove[$k].$entry); 
			 	} 
			} 
			$d->close();
			
			if (!rmdir($folders_to_remove[$k]))	{
				JError::raise(2, 500, JText::_( 'ERROR: Folder could not be deleted' ), '', false);
				$errors ++;
			}	
		}
	}

	$db =& JFactory::getDBO();
	$query = "DROP TABLE #__morfeoshow;";
	$db->setQuery( $query );
	
	$db =& JFactory::getDBO();
	$query = "DROP TABLE #__morfeoshow_img;";
	$db->setQuery( $query );
	
	$db =& JFactory::getDBO();
	$query = "DROP TABLE #__morfeoshow_rating;";
	$db->setQuery( $query );

}
?>