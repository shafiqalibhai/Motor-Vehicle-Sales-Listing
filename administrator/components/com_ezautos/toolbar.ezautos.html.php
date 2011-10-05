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

class menuezautos {

	function EDIT_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'save' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancel', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancel' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_MLIST_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savemlist' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelmlist', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelmlist' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_CONTENT_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savecontent' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelcontent', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelcontent' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_CTG_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savecatg' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelcatg', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelcatg' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_MAKE_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savemake' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelmake', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelmake' );
		}
		mosMenuBar::endTable();
	}

// Hrvoje
	function EDIT_COUNTRY_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savecountry' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelcountry', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelcountry' );
		}
		mosMenuBar::endTable();
	}
//////////////////////////

	function EDIT_MODEL_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savemodel' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelmodel', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelmodel' );
		}
		mosMenuBar::endTable();
	}

// Hrvoje
	function EDIT_CITY_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savecity' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelcity', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelcity' );
		}
		mosMenuBar::endTable();
	}
///////////////////////


	function EDIT_ENGINESIZE_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveenginesize' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelenginesize', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelenginesize' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_PRICE_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveprice' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelprice', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelprice' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_LEAD_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveleads' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelleads', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelleads' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_PROFILE_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveprof' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelprof', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelprof' );
		}
		mosMenuBar::endTable();
	}



  function LISTINGS_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList('publish');
    mosMenuBar::unpublishList('unpublish');
    mosMenuBar::addNewX('new');
    mosMenuBar::editListX('edit');
    mosMenuBar::spacer();
	mosMenuBar::custom( 'copy', 'copy.png', 'copy_f2.png', 'Copy', false );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function MLIST_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::addNewX('newmlist');
    mosMenuBar::editListX('editmlist');
    mosMenuBar::deleteList('','removemlist' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'exportmlist', 'archive.png', 'archive_f2.png', 'XML Export', false );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
  
  function CONTENT_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::editListX('editcontent');
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
  
  function CTG_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList('publishcatg');
    mosMenuBar::unpublishList('unpublishcatg');
    mosMenuBar::addNewX('newcatg');
    mosMenuBar::editListX('editcatg');
    mosMenuBar::deleteList('','removecatg' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function MAKE_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishmake' );
    mosMenuBar::unpublishList( 'unpublishmake' );
    mosMenuBar::addNewX('newmake');
    mosMenuBar::editListX('editmake');
    mosMenuBar::deleteList( '', 'removemake' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
  
  // Hrvoje
    function COUNTRY_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishcountry' );
    mosMenuBar::unpublishList( 'unpublishcountry' );
    mosMenuBar::addNewX('newcountry');
    mosMenuBar::editListX('editcountry');
    mosMenuBar::deleteList( '', 'removecountry' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
  ////////////////////////////////
  

  function MODEL_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishmodel' );
    mosMenuBar::unpublishList( 'unpublishmodel' );
    mosMenuBar::addNewX('newmodel');
    mosMenuBar::editListX('editmodel');
    mosMenuBar::deleteList( '', 'removemodel' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

// Hrvoje
  function CITY_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishcity' );
    mosMenuBar::unpublishList( 'unpubliscity' );
    mosMenuBar::addNewX('newcity');
    mosMenuBar::editListX('editcity');
    mosMenuBar::deleteList( '', 'removecity' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
/////////////////////////////


  function ENGINESIZE_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishenginesize' );
    mosMenuBar::unpublishList( 'unpublishenginesize' );
    mosMenuBar::addNewX('newenginesize');
    mosMenuBar::editListX('editenginesize');
    mosMenuBar::deleteList( '', 'removeenginesize' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function PRICE_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishprice' );
    mosMenuBar::unpublishList( 'unpublishprice' );
    mosMenuBar::addNewX('newprice');
    mosMenuBar::editListX('editprice');
    mosMenuBar::deleteList( '', 'removeprice' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function LEADS_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::addNewX('newleads');
    mosMenuBar::editListX('editleads');
    mosMenuBar::deleteList( '', 'removeleads' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function PROFILE_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishprofile' );
    mosMenuBar::unpublishList( 'unpublishprofile' );
    mosMenuBar::addNewX('newprof');
    mosMenuBar::editListX('editprof');
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function FEATURES_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::spacer();
    mosMenuBar::deleteList( '', 'removefeature' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function UPLOADS_MENU() {
    mosMenuBar::startTable();
	mosMenuBar::custom( 'listimages', 'preview.png', 'preview_f2.png', 'Main Vehicle Images', false );
	mosMenuBar::custom( 'listthimages', 'move.png', 'move_f2.png', 'Vehicle Thumbnails', false );
	mosMenuBar::custom( 'proppdfs', 'archive.png', 'archive_f2.png', 'Vehicle PDFs', false );
	mosMenuBar::custom( 'profaddons', 'unarchive.png', 'unarchive_f2.png', 'Profile Uploads', false );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function CONFIG_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::save( 'savesettings'  );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }



}


?>