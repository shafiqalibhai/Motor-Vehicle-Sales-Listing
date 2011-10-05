<?php

#############################################################################
#                                                                           #
#  EZ Autos 5.0.0 - A Mambo Motor Vehicle Sales Listing component           #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################



defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

require_once( $mainframe->getPath( 'toolbar_html' ) );
require_once( $mainframe->getPath( 'toolbar_default' ) );

switch ($task) {


	case 'newmlist':
	case 'editmlist':
	case 'editmlistA':
    menuezautos::EDIT_MLIST_MENU();
		break;

	case 'editcontent':
	case 'editcontentA':
    menuezautos::EDIT_CONTENT_MENU();
		break;

	case 'new':
	case 'edit':
	case 'editA':
		menuezautos::EDIT_MENU();
		break;

	case 'newcatg':
	case 'editcatg':
	case 'editcatgA':
		menuezautos::EDIT_CTG_MENU();
		break;


	case 'newmake':
	case 'editmake':
	case 'editmakeA':
		menuezautos::EDIT_MAKE_MENU();
		break;

	case 'newmodel':
	case 'editmodel':
	case 'editmodelA':
		menuezautos::EDIT_MODEL_MENU();
		break;
		
	// Hrvoje
	case 'newcountry':
	case 'editcountry':
	case 'editcountryA':
		menuezautos::EDIT_COUNTRY_MENU();
		break;
	
	case 'newcity':
	case 'editcity':
	case 'editcityA':
		menuezautos::EDIT_CITY_MENU();
		break;		
	/////////////////
		
		
		

	case 'newenginesize':
	case 'editenginesize':
	case 'editenginesizeA':
		menuezautos::EDIT_ENGINESIZE_MENU();
		break;

	case 'newprice':
	case 'editprice':
	case 'editpriceA':
		menuezautos::EDIT_PRICE_MENU();
		break;

	case 'newleads':
	case 'editleads':
	case 'editleadsA':
		menuezautos::EDIT_LEAD_MENU();
		break;

	case 'newprof':
	case 'editprof':
	case 'editprofA':
		menuezautos::EDIT_PROFILE_MENU();
		break;

  case "mlist":
    menuezautos::MLIST_MENU();
    break;

  case "content":
    menuezautos::CONTENT_MENU();
    break;


	case "showcatg":
		menuezautos::CTG_MENU();
		break;

	case "settings":
		menuezautos::CONFIG_MENU();
		break;

	case "leads":
		menuezautos::LEADS_MENU();
		break;

	case "profiles":
		menuezautos::PROFILE_MENU();
		break;

	case "price":
		menuezautos::PRICE_MENU();
		break;

	case "make":
		menuezautos::MAKE_MENU();
		break;

	case "model":
		menuezautos::MODEL_MENU();
		break;
			
	// Hrvoje
		case "mancountry":
		menuezautos::COUNTRY_MENU();
		break;
		case "mancity":
		menuezautos::CITY_MENU();
		break;
	///////////////

	case "enginesize":
		menuezautos::ENGINESIZE_MENU();
		break;

	case "show":
		menuezautos::LISTINGS_MENU();
		break;

	case "features":
		menuezautos::FEATURES_MENU();
		break;

  case 'listimages':
  case 'listthimages':
  case 'profaddons':
  case 'proppdfs':
    menuezautos::UPLOADS_MENU();
    break;

	default:
		break;
}

?>