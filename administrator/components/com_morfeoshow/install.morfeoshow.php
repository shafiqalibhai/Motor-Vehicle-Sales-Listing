<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitegallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
function com_install() {

	$folders_to_make = array();
	$folders_to_make[0] = JPATH_SITE.'/images/morfeoshow/';
	for($i = 0; $i < count($folders_to_make); $i++)
	{
		if ( !file_exists($folders_to_make[$i]) )
		{
			if (! (mkdir($folders_to_make[$i], 0755)) ) 
			{
				JError::raise(2, 500, $folders_to_make[$i] . JText::_( 'ERROR: Folder could not be created' ) , '', false);
				$errors ++;
			}
		}
	$file 	= 'index.html';	
	$source = JPATH_ROOT . DS . 'images';	
	$dest1 	= JPATH_ROOT . DS . 'images' . DS . 'morfeoshow'.DS;
	@copy($source. DS .$file,$dest1. DS .$file);
	}

	$url = JURI::base() . 'index.php?option=com_morfeoshow&task=postinstall';
	
	if (headers_sent()) {
		echo( "<script>document.location.href='$url';</script>\n" );
	} else {
		header( 'Location: ' . $url );
	}

}
?>