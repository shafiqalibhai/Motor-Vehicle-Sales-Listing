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

//get toolbar.morfeoshow.html.php
require_once( JApplicationHelper::getPath( 'toolbar_html' ) );

switch($task){
	
	case 'add':				TOOLBAR_morfeoshow::_NEW();				break;
	case 'edit':			TOOLBAR_morfeoshow::_EDIT();			break;
	case 'edit_des':		TOOLBAR_morfeoshow::_DES();				break;
	case 'manage_photos':	TOOLBAR_morfeoshow::_MANAGE_PHOTOS();	break;
	case 'photos':			TOOLBAR_morfeoshow::_PHOTOS();			break;
	case 'postinstall'	:	TOOLBAR_morfeoshow::_POSTINSTALL();		break;
	case 'info'			:	TOOLBAR_morfeoshow::_INFO();			break;	
	case 'showSettings':	TOOLBAR_morfeoshow::_SETTINGS();		break;	
			default:		TOOLBAR_morfeoshow::_DEFAULT();			break;
			
}
?>