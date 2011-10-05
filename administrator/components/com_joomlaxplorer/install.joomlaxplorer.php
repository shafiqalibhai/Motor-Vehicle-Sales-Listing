<?php
/**
* @version $Id: install.joomlaxplorer.php 37 2007-06-22 07:58:06Z soeren $
* @package joomlaXplorer
* @copyright (C) 2005-2007 Soeren
* @license GNU / GPL
* @author soeren
* joomlaXplorer is Free Software
*/
function com_install(){
	global $database;

	$database->setQuery( "SELECT id FROM #__components WHERE admin_menu_link = 'option=com_joomlaxplorer'" );
	$id = $database->loadResult();

	//add new admin menu images
	$database->setQuery( "UPDATE #__components SET admin_menu_img = '../administrator/components/com_joomlaxplorer/images/joomla_x_icon.png', admin_menu_link = 'option=com_joomlaxplorer' WHERE id=$id");
	$database->query();
}
?>