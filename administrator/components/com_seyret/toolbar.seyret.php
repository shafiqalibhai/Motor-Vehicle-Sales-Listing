<?php

//Seyret Component v.0.2//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2
**/	

defined('_VALID_MOS') or 
	die('No access');


require_once($mainframe->getPath('toolbar_html'));

switch ($task) {


	default:
	case "intropanel";
	menu_seyret::intromenu();
	break;
	
	

//videocatEGORIES*************************

	case "videocatlist":
	menu_seyret::videocatlist();
	break;


	case "newvideocat":
	case "editvideocat":
	menu_seyret::editvideocat();
	break;


	case "configuration":
	menu_seyret::configuration();
	break;

	case "videoslist":
	global $database;
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
		$seyretpro=$check->seyretpro;		
		}	
	menu_seyret::videoslist($seyretpro);
	break;	

	case "editvideo":
	menu_seyret::editvideo();
	break;	

	case "newvideo":
	menu_seyret::editvideo();
	break;


	case "admanagement":
	menu_seyret::admanagement();
	break;

	case "imageadmanagement":
	menu_seyret::imageadmanagement();
	break;
	
	
	case "newad":
	case "editad":
	menu_seyret::editad();
	break;	

	case "newimagead":
	case "editimagead":
	menu_seyret::editimagead();
	break;	

	
	case "extras":
	menu_seyret::extras();
	break;	
	
	case "permissions":
	menu_seyret::permissions();
	break;

	case "newseyretacl":
	case "editseyretacl":
	menu_seyret::editseyretacl();
	break;
	
	}

?>

