<?php
/**
* @version 1.2 stable
* @package JDownloads
* @copyright (C) 2008 www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* 
*
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
require_once( $mainframe->getPath( 'toolbar_html' ) );

switch ( $task ) {

		case "new":
		case "edit":
		case "editA":
		case "copy":
		menujlist::EDIT_MENU();
		break;

		case "categories.list":
			menujlist::CATEGORIES_LIST();
		break;

		case "categories.edit":
			menujlist::CATEGORIES_ADD();
		break;

		case "files.list":
			menujlist::FILES_LIST();
		break;

		case "files.edit":
			menujlist::FILES_EDIT();
		break;

        case "files.copy":
            menujlist::FILES_COPY();
        break;
        
        case "license.list":
			menujlist::LICENSE_LIST();
		break;

		case "license.edit":
			menujlist::LICENSE_EDIT();
		break;

        case "templates.menu":
			menujlist::TEMPLATES_MENU();
		break;
		
        case "templates.list.cats":
			menujlist::TEMPLATES_LIST_CATS();
		break;

		case "templates.edit.cats":
			menujlist::TEMPLATES_EDIT_CATS();
		break;

        case "templates.list.files":
			menujlist::TEMPLATES_LIST_FILES();
		break;

		case "templates.edit.files":
			menujlist::TEMPLATES_EDIT_FILES();
		break;
        
        case "templates.list.details":
            menujlist::TEMPLATES_LIST_DETAILS();
        break;

        case "templates.edit.details":
            menujlist::TEMPLATES_EDIT_DETAILS();
        break;        

        case "templates.list.summary":
			menujlist::TEMPLATES_LIST_SUMMARY();
		break;

		case "templates.edit.summary":
			menujlist::TEMPLATES_EDIT_SUMMARY();
		break;
		
        case "css.edit":
    	menujlist::CSS_EDIT();
    	break;

        case "language.edit":
    	menujlist::LANG_EDIT();
    	break;

		case "config.show":
    	menujlist::SETTINGS_MENU();
    	break;

		case "restore":
    	menujlist::RESTORE_MENU();
    	break;

 		case "info":
    	menujlist::INFO_MENU();
    	break;

		default:
		menujlist::_DEFAULT();
		break;
	}
?>