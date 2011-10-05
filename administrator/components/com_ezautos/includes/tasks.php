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



switch ($task) {


  case 'sampledata':
    installSample( $option );
    break;



  case "deleteprofile_image": deleteProfileImage( $id, $option ); break;
  case "deletelogo_image": deleteLogoImage( $id, $option ); break;
  case "deletepdf_promo": deletePdfPromo( $id, $option ); break;
  case "deletepdfinfo": deletePdfInfo( $id, $option ); break;
  case "deletepage_topper": deletePageTopper( $id, $option ); break;


  case "listimages":
	listImages( $option );
	showFooter();
	break;

  case "listthimages":
	listThImages( $option );
	showFooter();
	break;

  case "profaddons":
	profAddons( $option );
	showFooter();
	break;

  case "proppdfs":
	propPDFs( $option );
	showFooter();
	break;

  case "delimg":
	deleteImg( $id, $option );
	break;

  case "delproffiles":
	deleteProfFiles( $id, $option );
	break;

  case "delproppdfs":
	deletePropPDFs( $id, $option );
	break;


  case "upgradetables":
	upgradeTables( $option );
	break;


  case "optimizetables":
	optimizeTables( $option );
	break;


  case 'sendalertmail':
    sendalertMail( $option );
    break;


  case 'prunelightbox':
    pruneLightbox( $option );
    break;

  case 'migrateusers':
    migrateUsers( $option );
	showFooter();
    break;

  case 'pruneorphans':
    pruneOrphans( $option );
    break;




  case 'show':
    showVehicle( $option );
	showFooter();
    break;

  case 'new':
    editVehicle( 0, $option );
	showFooter();
    break;

  case 'edit':
    editVehicle( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editA':
    editVehicle( $id, $option );
	showFooter();
    break;

  case "save":
    saveVehicle( $option );
    break;

  case "cancel":
	cancelVehicle( $option );
	break;

  case "remove":
    removeVehicle( $id, $option );
    break;

  case "publish":
    publishVehicle( $cid, 1, $option );
    break;

  case "unpublish":
    publishVehicle( $cid, 0, $option );
    break;

  case "copy":
    copyVehicle( $cid, $option );
    break;

  case 'print':
    printDetails( $id, $option );
    break;




  case "resethits":
    resetHits( $id, $option );
    break;

  case "resetdate":
    resetDate( $id, $option );
    break;

  case "cleandb":
    cleanDB( $task );
    break;

  case "showcatg":
    viewCatg( $option );
	showFooter();
    break;

  case 'newcatg':
    editCatg( 0, $option );
	showFooter();
    break;

  case 'editcatg':
    editCatg( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editcatgA':
    editCatg( $id, $option );
	showFooter();
    break;

  case "savecatg":
    saveCatg( $option);
    break;

  case "cancelcatg":
    cancelCatg( $option );
    break;

  case "removecatg":
    removeCatg( $cid, $option );
    break;

  case "publishcatg":
    publishCatg( $cid, 1, $option );
    break;

  case "unpublishcatg":
    publishCatg( $cid, 0, $option );
    break; 

  case "orderupcatg":
    orderCatg( $cid[0], -1, $option );
    break;

  case "orderdowncatg":
    orderCatg( $cid[0], 1, $option );
    break;


  case "leads":
    showLeads( $option );
	showFooter();
    break;

  case 'newleads':
    editLeads( 0, $option );
	showFooter();
    break;

  case 'editleads':
    editLeads( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editleadsA':
    editLeads( $id, $option );
	showFooter();
    break;

  case "removeleads":
    removeLeads( $cid, $option );
    break;

  case "cancelleads":
	cancelLeads( $option );
	break;

  case "saveleads":
	saveLeads( $option );
	break;

  case "publishleads":
    publishLeads( $cid, 1, $option );
    break;

  case "unpublishleads":
    publishLeads( $cid, 0, $option );
    break; 

  case "sendleadsms":
	sendLeadSMS( $option );
	break;




  case "profiles":
    viewProf( $option );
	showFooter();
    break;

  case 'newprof':
    editProf( 0, $option );
	showFooter();
    break;

  case 'editprof':
    editProf( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editprofA':
    editProf( $id, $option );
	showFooter();
    break;

  case "saveprof":
    saveProf( $option );
    break;

  case "cancelprof":
    cancelProf( $option );
    break;

  case "removeprof":
    removeProf( $id, $option );
    break;

  case "publishprofile":
    publishProf( $cid, 1, $option );
    break;

  case "unpublishprofile":
    publishProf( $cid, 0, $option );
    break; 




  case "price":
    showPrice( $option );
	showFooter();
    break;

  case 'newprice':
    editPrice( 0, $option );
	showFooter();
    break;

  case 'editprice':
    editPrice( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editpriceA':
    editPrice( $id, $option );
	showFooter();
    break;

  case "saveprice":
	savePrice( $option );
	break;

  case "cancelprice":
	cancelPrice( $option );
	break;

  case "removeprice":
    removePrice( $cid, $option );
    break;

  case "publishprice":
    publishPrice( $cid, 1, $option );
    break;

  case "unpublishprice":
    publishPrice( $cid, 0, $option );
    break;

  case "orderupprice":
	orderPrice( $cid[0], -1, $option );
	break;

  case "orderdownprice":
	orderPrice( $cid[0], 1, $option );
	break;



  case "make":
    showMake( $option );
	showFooter();
    break;

  case 'newmake':
    editMake( 0, $option );
	showFooter();
    break;

  case 'editmake':
    editMake( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editmakeA':
    editMake( $id, $option );
	showFooter();
    break;

  case "savemake":
    saveMake( $option );
    break;

  case "cancelmake":
    cancelMake( $option );
    break;

  case "removemake":
    removeMake( $cid, $option );
    break;

  case "publishmake":
    publishMake( $cid, 1, $option );
    break;

  case "unpublishmake":
    publishMake( $cid, 0, $option );
    break;

    
  case "model":
    showModel( $option );
	showFooter();
    break;

  case 'newmodel':
    editModel( 0, $option );
	showFooter();
    break;

  case 'editmodel':
    editModel( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editmodelA':
    editModel( $id, $option );
	showFooter();
    break;

  case "savemodel":
    saveModel( $option );
    break;

  case "cancelmodel":
    cancelModel( $option );
    break;

  case "removemodel":
    removeModel( $cid, $option );
    break;

  case "publishmodel":
    publishModel( $cid, 1, $option );
    break;

  case "unpublishmodel":
    publishModel( $cid, 0, $option );
    break;

// Hrvoje for editing Countries / Cities

// Country
  case "mancountry":
    showCountry( $option );
	showFooter();
    break;

  case 'newcountry':
    editCountry( 0, $option );
	showFooter();
    break;

  case 'editcountry':
    editCountry( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editcountryA':
    editCountry( $id, $option );
	showFooter();
    break;

  case "savecountry":
    saveCountry( $option );
    break;

  case "cancelcountry":
    cancelCountry( $option );
    break;

  case "removecountry":
    removeCountry( $cid, $option );
    break;

  case "publishcountry":
    publishCountry( $cid, 1, $option );
    break;

  case "unpublishcountry":
    publishCountry( $cid, 0, $option );
    break;

// City

  case "mancity":
    showCity( $option );
	showFooter();
    break;

  case 'newcity':
    editCity( 0, $option );
	showFooter();
    break;

  case 'editcity':
    editCity( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editcityA':
    editCity( $id, $option );
	showFooter();
    break;

  case "savecity":
    saveCity( $option );
    break;

  case "cancelcity":
    cancelCity( $option );
    break;

  case "removecity":
    removeCity( $cid, $option );
    break;

  case "publishcity":
    publishCity( $cid, 1, $option );
    break;

  case "unpublishcity":
    publishCity( $cid, 0, $option );
    break;


////////////////////////////////////////



  case "enginesize":
    showEnginesize( $option );
	showFooter();
    break;

  case "newenginesize":
	editEnginesize( 0, $option);
	showFooter();
	break;
                	
  case "editenginesize":
	editEnginesize( intval( $cid[0] ), $option );
	showFooter();
	break;

  case "editenginesizeA":
	editEnginesize( $id, $option );
	showFooter();
	break;

  case "saveenginesize":
	saveEnginesize( $option );
	break;

  case "cancelenginesize":
	cancelEnginesize( $option );
	break;

  case "removeenginesize":
    removeEnginesize( $cid, $option );
    break;

  case "publishenginesize":
    publishEnginesize( $cid, 1, $option );
    break;

  case "unpublishenginesize":
    publishEnginesize( $cid, 0, $option );
    break;

  case "orderupenginesize":
	orderEnginesize( $cid[0], -1, $option );
	break;

  case "orderdownenginesize":
	orderEnginesize( $cid[0], 1, $option );
	break;




  case "content":
    showContent( $option );
	showFooter();
    break;

  case 'editcontent':
    editContent( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editcontentA':
    editContent( $id, $option );
	showFooter();
    break;

  case "savecontent":
	saveContent( $option );
	break;

  case "cancelcontent":
	cancelContent( $option );
	break;

  case "removecontent":
    removeContent( $cid, $option );
    break;




  case "mlist":
    showMlist( $option );
	showFooter();
    break;

  case 'newmlist':
    editMlist( 0, $option );
	showFooter();
    break;

  case 'editmlist':
    editMlist( intval( $cid[0] ), $option );
	showFooter();
    break;

  case 'editmlistA':
    editMlist( $id, $option );
	showFooter();
    break;

  case "savemlist":
	saveMlist( $option );
	break;

  case "cancelmlist":
	cancelMlist( $option );
	break;

  case "removemlist":
    removeMlist( $cid, $option );
    break;

  case "exportmlist":
    doMailExport( $option );
    break;

  case "prunesubs":
    pruneSubs( $option );
    break;




  case "features":
    showFeatures( $option );
	showFooter();
    break;

  case "savefeature":
	saveFeature( $option );
	break;

  case "removefeature":
    removeFeature( $cid, $option );
    break;

  case "orderupfeature":
	orderFeature( $cid[0], -1, $option );
	break;

  case "orderdownfeature":
	orderFeature( $cid[0], 1, $option );
	break;



  case "importpostcodes":
    importPostCodes( $option );
    break;

  case "importmakes":
    importMakes( $option );
    break;

  case "importmodels":
    importModels( $option );
    break;



  case "settings":
    showConfig( $option );
	showFooter();
    break;

  case "savesettings":
    saveConfig ( $option );
    break;

  default:
    cPanel( $option );
	showFooter();
    break;
}




/* *********************************************************************************
	   				IMPORT THE POSTCODES
   ********************************************************************************* */


function importPostCodes() {
	global $database, $mosConfig_absolute_path, $option;


// STEP 1 - HANDLE THE FILE UPLOAD TO THE UPLOADS DIRECTORY


	$id = $_REQUEST['id'];
	$error = $_FILES['upload']['error'];

	switch($error) {
		case '4':
		mosRedirect( "index2.php?option=com_ezautos",
		""._EZAUTOS_TAG3."" );
		exit();
		break;
	}

	$file = $_FILES['upload'];

	if(!isset($_FILES['upload'])) {
		exit();
	} elseif ((strcasecmp(substr($file['name'],-4),".csv"))) {
		mosRedirect( "index2.php?option=com_ezautos",
		_EZAUTOS_TAG4 );
	}
		$dest_dir = $mosConfig_absolute_path.'/images/';

			if (file_exists($dest_dir.$file['name']))
		{
			mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_TAG5 );
		}
			if (!move_uploaded_file($file['tmp_name'], $dest_dir.strtolower($file['name'])))
		{
			mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_TAG6 );
		} else {
			chmod($dest_dir.$file['name'], 0666);



// STEP 2 - IMPORT DATA INTO THE EZAUTOS POSTCODES TABLE



$fieldseparator = ",";
$lineseparator = "\n";


$csvfile = $mosConfig_absolute_path."/images/".$file[name];


if(!file_exists($csvfile)) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODESERROR );
	exit;
}

$file = fopen($csvfile,"r");

if(!$file) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODES_OPENERROR );
	exit;
}

$size = filesize($csvfile);

if(!$size) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODES_EMPTY );
	exit;
}

$csvcontent = fread($file,$size);

fclose($file);

$lines = 0;
$queries = "";
$linearray = array();

foreach(split($lineseparator,$csvcontent) as $line) {

	$lines++;

	$line = trim($line," \t");
	$line = str_replace("\r","",$line);
	$line = str_replace("'","\'",$line);
	
	$linearray = explode($fieldseparator,$line);
	
	$linemysql = implode("','",$linearray);

//echo $linemysql;
	
$query = "INSERT INTO #__ezautos_postcodes (id, pcode, city, state, county, latitude, longitude)

VALUES('$linemysql');";

$database->setQuery($query);
$database->query();


}


// DELETE THE CSV FILE


unlink( $csvfile );


$msg .= _EZAUTOS_TAG10.' '.$lines.' '._EZAUTOS_TAG23;


mosRedirect ("index2.php?option=com_ezautos", $msg );


}


}



/* *********************************************************************************
	   				IMPORT THE MAKES
   ********************************************************************************* */


function importMakes() {
	global $database, $mosConfig_absolute_path, $option;


// STEP 1 - HANDLE THE FILE UPLOAD TO THE UPLOADS DIRECTORY


	$id = $_REQUEST['id'];
	$error = $_FILES['upload']['error'];

	switch($error) {
		case '4':
		mosRedirect( "index2.php?option=com_ezautos",
		""._EZAUTOS_TAG3."" );
		exit();
		break;
	}

	$file = $_FILES['upload'];

	if(!isset($_FILES['upload'])) {
		exit();
	} elseif ((strcasecmp(substr($file['name'],-4),".csv"))) {
		mosRedirect( "index2.php?option=com_ezautos",
		_EZAUTOS_TAG4 );
	}
		$dest_dir = $mosConfig_absolute_path.'/images/';

			if (file_exists($dest_dir.$file['name']))
		{
			mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_TAG5 );
		}
			if (!move_uploaded_file($file['tmp_name'], $dest_dir.strtolower($file['name'])))
		{
			mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_TAG6 );
		} else {
			chmod($dest_dir.$file['name'], 0666);



// STEP 2 - IMPORT DATA INTO THE EZAUTOS MAKES TABLE



$fieldseparator = ",";
$lineseparator = "\n";


$csvfile = $mosConfig_absolute_path."/images/".$file[name];


if(!file_exists($csvfile)) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODESERROR );
	exit;
}

$file = fopen($csvfile,"r");

if(!$file) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODES_OPENERROR );
	exit;
}

$size = filesize($csvfile);

if(!$size) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODES_EMPTY );
	exit;
}

$csvcontent = fread($file,$size);

fclose($file);

$lines = 0;
$queries = "";
$linearray = array();

foreach(split($lineseparator,$csvcontent) as $line) {

	$lines++;

	$line = trim($line," \t");
	$line = str_replace("\r","",$line);
	$line = str_replace("'","\'",$line);
	
	$linearray = explode($fieldseparator,$line);
	
	$linemysql = implode("','",$linearray);

//echo $linemysql;
	
$query = "INSERT INTO #__ezautos_make (maid, make, make_image, published, checked_out, checked_out_time, editor)

VALUES('$linemysql');";

$database->setQuery($query);
$database->query();


}


// DELETE THE CSV FILE


unlink( $csvfile );


$msg .= _EZAUTOS_TAG10.' '.$lines.' '._EZAUTOS_TAG23;


mosRedirect ("index2.php?option=com_ezautos", $msg );


}


}



/* *********************************************************************************
	   				IMPORT THE MODELS
   ********************************************************************************* */


function importModels() {
	global $database, $mosConfig_absolute_path, $option;


// STEP 1 - HANDLE THE FILE UPLOAD TO THE UPLOADS DIRECTORY


	$id = $_REQUEST['id'];
	$error = $_FILES['upload']['error'];

	switch($error) {
		case '4':
		mosRedirect( "index2.php?option=com_ezautos",
		""._EZAUTOS_TAG3."" );
		exit();
		break;
	}

	$file = $_FILES['upload'];

	if(!isset($_FILES['upload'])) {
		exit();
	} elseif ((strcasecmp(substr($file['name'],-4),".csv"))) {
		mosRedirect( "index2.php?option=com_ezautos",
		_EZAUTOS_TAG4 );
	}
		$dest_dir = $mosConfig_absolute_path.'/images/';

			if (file_exists($dest_dir.$file['name']))
		{
			mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_TAG5 );
		}
			if (!move_uploaded_file($file['tmp_name'], $dest_dir.strtolower($file['name'])))
		{
			mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_TAG6 );
		} else {
			chmod($dest_dir.$file['name'], 0666);



// STEP 2 - IMPORT DATA INTO THE EZAUTOS MODELS TABLE



$fieldseparator = ",";
$lineseparator = "\n";


$csvfile = $mosConfig_absolute_path."/images/".$file[name];


if(!file_exists($csvfile)) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODESERROR );
	exit;
}

$file = fopen($csvfile,"r");

if(!$file) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODES_OPENERROR );
	exit;
}

$size = filesize($csvfile);

if(!$size) {
mosRedirect ("index2.php?option=$option", _EZAUTOS_IMPORT_POSTCODES_EMPTY );
	exit;
}

$csvcontent = fread($file,$size);

fclose($file);

$lines = 0;
$queries = "";
$linearray = array();

foreach(split($lineseparator,$csvcontent) as $line) {

	$lines++;

	$line = trim($line," \t");
	$line = str_replace("\r","",$line);
	$line = str_replace("'","\'",$line);
	
	$linearray = explode($fieldseparator,$line);
	
	$linemysql = implode("','",$linearray);

//echo $linemysql;
	
$query = "INSERT INTO #__ezautos_model (moid, makeid, model, published, checked_out, checked_out_time, editor)

VALUES('$linemysql');";

$database->setQuery($query);
$database->query();


}


// DELETE THE CSV FILE


unlink( $csvfile );


$msg .= _EZAUTOS_TAG10.' '.$lines.' '._EZAUTOS_TAG23;


mosRedirect ("index2.php?option=com_ezautos", $msg );


}


}



/* *********************************************************************************
	   				PRUNE THE LIGHTBOX OF OLD LISTINGS
   ********************************************************************************* */


function pruneLightbox( $option ) {
	global $database, $mainframe, $ea_lightboxexp;

include(EZADMIN_PATH."/config.ezautos.php");


			$calcdate=mktime(0, 0, 0, date("m"), date("d")-$ea_lightboxexp, date("Y"));

			$database->setQuery( "DELETE FROM #__ezautos_lightbox WHERE date < $calcdate" );

		if ( !$database->query() ) {
			echo "<script> alert('" . $database->getErrorMsg()
			. "'); window.history.go(-1); </script>\n";
		}

		mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_PRUNE_DONE );

}



/* *********************************************************************************
	   				OPTIMIZE THE DATABASE TABLES
   ********************************************************************************* */


function optimizeTables ($option) {
global $database;

	$msg = _EZAUTOS_OPTIMIZE_DATABASE;


   $database->setQuery("OPTIMIZE TABLE `#__ezautos`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_catg`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_content`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_enginesize`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_features`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_leads`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_lightbox`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_make`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_model`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_price`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_profile`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_mail`");
   $database->query();

   $database->setQuery("OPTIMIZE TABLE `#__ezautos_postcodes`");
   $database->query();


mosRedirect( 'index2.php?option=com_ezautos', $msg );
}




/* *********************************************************************************
                             UPGRADE DATABASE FUNCTIONS
   ********************************************************************************* */



function upgradeTables ($option) {
global $database;

	$msg = _EZAUTOS_DATABASE2;


   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `video` VARCHAR( 255 ) NOT NULL AFTER `image12`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `declat` VARCHAR( 20 ) NOT NULL AFTER `video`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `declong` VARCHAR( 20 ) NOT NULL AFTER `declat`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `derivative` VARCHAR( 20 ) NOT NULL AFTER `model`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `pcode` VARCHAR( 10 ) NOT NULL AFTER `seller_location`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `custom7a` VARCHAR( 50 ) NOT NULL AFTER `custom6a`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `custom8a` VARCHAR( 50 ) NOT NULL AFTER `custom7a`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `custom9a` VARCHAR( 50 ) NOT NULL AFTER `custom8a`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `custom10a` VARCHAR( 50 ) NOT NULL AFTER `custom9a`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `metadesc` VARCHAR( 255 ) NOT NULL AFTER `editor`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `metakey` VARCHAR( 255 ) NOT NULL AFTER `metadesc`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `fuelsystem` VARCHAR( 50 ) NOT NULL AFTER `fuel`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `borestroke` VARCHAR( 50 ) NOT NULL AFTER `fuelsystem`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `power` VARCHAR( 50 ) NOT NULL AFTER `borestroke`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `torque` VARCHAR( 50 ) NOT NULL AFTER `power`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `weightpower` VARCHAR( 50 ) NOT NULL AFTER `torque`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `frontbrakes` VARCHAR( 50 ) NOT NULL AFTER `weightpower`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `rearbrakes` VARCHAR( 50 ) NOT NULL AFTER `frontbrakes`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `wheeldims` VARCHAR( 50 ) NOT NULL AFTER `rearbrakes`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `turncirc` VARCHAR( 50 ) NOT NULL AFTER `wheeldims`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `compressionratio` VARCHAR( 50 ) NOT NULL AFTER `turncirc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `tankcapacity` VARCHAR( 50 ) NOT NULL AFTER `compressionratio`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `extlength` VARCHAR( 50 ) NOT NULL AFTER `tankcapacity`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `extwidth` VARCHAR( 50 ) NOT NULL AFTER `extlength`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `extheight` VARCHAR( 50 ) NOT NULL AFTER `extwidth`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `frontsus` VARCHAR( 50 ) NOT NULL AFTER `extheight`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `rearsus` VARCHAR( 50 ) NOT NULL AFTER `frontsus`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `kerbweight` VARCHAR( 50 ) NOT NULL AFTER `rearsus`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `groundclear` VARCHAR( 50 ) NOT NULL AFTER `kerbweight`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `seatcap` VARCHAR( 50 ) NOT NULL AFTER `groundclear`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `cityfuel` VARCHAR( 50 ) NOT NULL AFTER `seatcap`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `highwayfuel` VARCHAR( 50 ) NOT NULL AFTER `cityfuel`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `towingcap` VARCHAR( 50 ) NOT NULL AFTER `highwayfuel`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `countryorigin` VARCHAR( 50 ) NOT NULL AFTER `towingcap`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `fronttrack` VARCHAR( 50 ) NOT NULL AFTER `countryorigin`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `reartrack` VARCHAR( 50 ) NOT NULL AFTER `fronttrack`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `wheelbase` VARCHAR( 50 ) NOT NULL AFTER `reartrack`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `doorsbody` VARCHAR( 50 ) NOT NULL AFTER `wheelbase`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `stocknum` VARCHAR( 50 ) NOT NULL AFTER `doorsbody`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `price_type` VARCHAR( 50 ) NOT NULL AFTER `price`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `showprice` TINYINT( 1 ) NOT NULL AFTER `price_type`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `expdate` VARCHAR( 20 ) NULL AFTER `lastupdate`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n CHANGE `price` `price` DECIMAL( 15, 2 ) DEFAULT '0.00' NOT NULL");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_price`"
   . "\n CHANGE `range` `range` DECIMAL( 15, 2 ) DEFAULT '0.00' NOT NULL");
   $database->query();



   $database->setQuery("ALTER TABLE `#__ezautos_leads`"
   . "\n ADD `published` TINYINT( 1 ) NOT NULL AFTER `editor");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_price`"
   . "\n ADD `display` VARCHAR( 20 ) NOT NULL AFTER `range");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_make`"
   . "\n ADD `make_image` VARCHAR( 50 ) NOT NULL AFTER `make");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_make`"
   . "\n DROP `ordering`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_model`"
   . "\n DROP `ordering`");
   $database->query();


   $database->setQuery("CREATE TABLE `#__ezautos_profile` (
          `prid` int(11) NOT NULL auto_increment,
          `mid` int(11) NOT NULL default '0',
          `dealer_name` varchar(50) default NULL,
          `dealer_company` varchar(50) default NULL,
          `dealer_type` varchar(30) default NULL,
          `dealer_info` varchar(255) default NULL,
          `dealer_address1` varchar(50) default NULL,
          `dealer_address2` varchar(50) default NULL,
          `dealer_locality` varchar(50) default NULL,
          `dealer_pcode` varchar(10) default NULL,
          `dealer_state` varchar(50) default NULL,
          `dealer_country` varchar(50) default NULL,
          `dealer_declat` varchar(20) default NULL,
          `dealer_declong` varchar(20) default NULL,
          `dealer_email` varchar(50) default NULL,
          `dealer_phone` varchar(20) default NULL,
          `dealer_fax` varchar(20) default NULL,
          `dealer_mobile` varchar(20) default NULL,
          `dealer_sms` varchar(20) default NULL,
          `show_sms` tinyint(1) NOT NULL default '0',
          `dealer_msn` varchar(30) default NULL,
          `dealer_skype` varchar(30) default NULL,
          `dealer_ymsgr` varchar(30) default NULL,
          `dealer_icq` varchar(30) default NULL,
          `dealer_web` varchar(255) default NULL,
          `dealer_blog` varchar(255) default NULL,
          `dealer_image` varchar(70) default NULL,
          `published` tinyint(1) NOT NULL default '0',
          `checked_out` tinyint(1) NOT NULL default '0',
          `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
          `editor` varchar(50) default NULL,
PRIMARY KEY ( `prid` ),
UNIQUE KEY `mid` (`mid`)
) TYPE=MyISAM");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `dealer_declat` VARCHAR( 20 ) NOT NULL AFTER `dealer_country`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `dealer_declong` VARCHAR( 20 ) NOT NULL AFTER `dealer_declat`");
   $database->query();



   $database->setQuery("CREATE TABLE `#__ezautos_lightbox` (
          `llid` int(11) NOT NULL auto_increment,
          `uid` int(11) NOT NULL default '0',
          `propid` int(11) NOT NULL default '0',
          `date` varchar(20) default NULL,
PRIMARY KEY  (`llid`)
) TYPE=MyISAM");
   $database->query();



   $database->setQuery("CREATE TABLE `#__ezautos_content` (
          `contid` int(11) NOT NULL auto_increment,
          `title` varchar(50) NOT NULL default '',
          `content` text NOT NULL default '',
          `checked_out` tinyint(1) NOT NULL default '0',
          `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
          `editor` varchar(50) default NULL,
PRIMARY KEY  (`contid`)
) TYPE=MyISAM");
   $database->query();


   $database->setQuery("CREATE TABLE `#__ezautos_mail` (
          `mailid` int(11) NOT NULL auto_increment,
          `name` varchar(50) NOT NULL default '',
          `email` varchar(70) NOT NULL default '',
          `confirmed` tinyint(1) NOT NULL default '0',
          `date` datetime NOT NULL default '0000-00-00 00:00:00',
PRIMARY KEY  (`mailid`)
) TYPE=MyISAM");
   $database->query();



   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `dealer_unitnum` varchar(10) NOT NULL default '' AFTER `dealer_info`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `dealer_exempt` TINYINT( 1 ) NOT NULL default '0' AFTER `show_sms`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `feat_upgr` TINYINT( 1 ) NOT NULL default '0' AFTER `dealer_exempt`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `publish_own` TINYINT( 1 ) NOT NULL default '0' AFTER `feat_upgr`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `reset_own` TINYINT( 1 ) NOT NULL default '0' AFTER `publish_own`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `dealer_logo` varchar(70) NOT NULL default '' AFTER `dealer_image`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `dealer_pdf` varchar(70) NOT NULL default '' AFTER `dealer_logo`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `page_topper` varchar(70) NOT NULL default '' AFTER `dealer_pdf`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `linkit` varchar(255) NOT NULL default '' AFTER `page_topper`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `dealer_bio` mediumtext NOT NULL default '' AFTER `linkit`");
   $database->query();



$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (1, 'Business Introduction', 'This is where your business introduction goes for the site.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (2, 'Members Area Introduction', 'This is where you enter your members area introduction.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (3, 'Terms of Listing', 'This is where your terms of listing goes.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (4, 'Success Page', 'This is where your success page content goes. This is the page people land on after a successful payment.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (5, 'Cancel Page', 'This is where your cancel page content goes. This is the page people land on after a cancelled or failed payment.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (6, 'Business Logo', 'This is where your business logo content goes. This content is displayed at the bottom of every vehicle listing page, and could be your logo or some sort of special info.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();

$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (7, 'Admin Print Header Page', 'This is where the html for your print header goes.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (8, 'Admin Print Footer Page', 'This is where the html for your print footer goes.', 0, '0000-00-00 00:00:00', NULL)");
   $database->query();



   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image1desc` VARCHAR( 150 ) NOT NULL AFTER `image12`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image2desc` VARCHAR( 150 ) NOT NULL AFTER `image1desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image3desc` VARCHAR( 150 ) NOT NULL AFTER `image2desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image4desc` VARCHAR( 150 ) NOT NULL AFTER `image3desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image5desc` VARCHAR( 150 ) NOT NULL AFTER `image4desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image6desc` VARCHAR( 150 ) NOT NULL AFTER `image5desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image7desc` VARCHAR( 150 ) NOT NULL AFTER `image6desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image8desc` VARCHAR( 150 ) NOT NULL AFTER `image7desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image9desc` VARCHAR( 150 ) NOT NULL AFTER `image8desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image10desc` VARCHAR( 150 ) NOT NULL AFTER `image9desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image11desc` VARCHAR( 150 ) NOT NULL AFTER `image10desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image12desc` VARCHAR( 150 ) NOT NULL AFTER `image11desc`");
   $database->query();





   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image13` VARCHAR( 70 ) NOT NULL AFTER `image12desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image14` VARCHAR( 70 ) NOT NULL AFTER `image13`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image15` VARCHAR( 70 ) NOT NULL AFTER `image14`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image16` VARCHAR( 70 ) NOT NULL AFTER `image15`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image17` VARCHAR( 70 ) NOT NULL AFTER `image16`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image18` VARCHAR( 70 ) NOT NULL AFTER `image17`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image19` VARCHAR( 70 ) NOT NULL AFTER `image18`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image20` VARCHAR( 70 ) NOT NULL AFTER `image19`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image21` VARCHAR( 70 ) NOT NULL AFTER `image20`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image22` VARCHAR( 70 ) NOT NULL AFTER `image21`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image23` VARCHAR( 70 ) NOT NULL AFTER `image22`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image24` VARCHAR( 70 ) NOT NULL AFTER `image23`");
   $database->query();





   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image13desc` VARCHAR( 150 ) NOT NULL AFTER `image24`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image14desc` VARCHAR( 150 ) NOT NULL AFTER `image13desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image15desc` VARCHAR( 150 ) NOT NULL AFTER `image14desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image16desc` VARCHAR( 150 ) NOT NULL AFTER `image15desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image17desc` VARCHAR( 150 ) NOT NULL AFTER `image16desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image18desc` VARCHAR( 150 ) NOT NULL AFTER `image17desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image19desc` VARCHAR( 150 ) NOT NULL AFTER `image18desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image20desc` VARCHAR( 150 ) NOT NULL AFTER `image19desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image21desc` VARCHAR( 150 ) NOT NULL AFTER `image20desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image22desc` VARCHAR( 150 ) NOT NULL AFTER `image21desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image23desc` VARCHAR( 150 ) NOT NULL AFTER `image22desc`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `image24desc` VARCHAR( 150 ) NOT NULL AFTER `image23desc`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `email_status` TINYINT( 1 ) NOT NULL default '0' AFTER `metakey`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_leads`"
   . "\n ADD `maxprice` decimal (15,2) NOT NULL default '0.00' AFTER `budget`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_leads`"
   . "\n ADD `html` tinyint (1) NOT NULL default '0' AFTER `published`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_leads`"
   . "\n ADD `listwanted` tinyint (1) NOT NULL default '0' AFTER `html`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `type` int(11) NOT NULL default '0' AFTER `stocknum`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `freq` int(11) NOT NULL default '0' AFTER `type`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `numowners` tinyint(3) NOT NULL default '0' AFTER `freq`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `incltax` tinyint(1) NOT NULL default '0' AFTER `numowners`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `co2` int(11) NOT NULL default '0' AFTER `incltax`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `odometer` int(11) NOT NULL default '0' AFTER `co2`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `doors` tinyint(1) NOT NULL default '0' AFTER `odometer`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `body` VARCHAR( 20 ) NOT NULL default '' AFTER `doors`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `finance` tinyint(1) NOT NULL default '0' AFTER `body`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `deposit` VARCHAR( 20 ) NOT NULL default '' AFTER `finance`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `repayments` decimal(15,2) NOT NULL default '0.00' AFTER `deposit`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `term` tinyint(3) NOT NULL default '0' AFTER `repayments`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `termtype` tinyint(1) NOT NULL default '0' AFTER `term`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `features` TEXT NOT NULL default '' AFTER `termtype`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `mileage_unit` VARCHAR( 20 ) NOT NULL default '' AFTER `features`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `onroad` decimal(15,2) NOT NULL default '0.00' AFTER `mileage_unit`");
   $database->query();





   $database->setQuery("ALTER TABLE `#__ezautos_mail`"
   . "\n ADD `exported` TINYINT( 1 ) NOT NULL default '0' AFTER `confirmed`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_mail`"
   . "\n ADD `checked_out` TINYINT( 1 ) NOT NULL default '0' AFTER `date`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_mail`"
   . "\n ADD `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00' AFTER `checked_out`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_mail`"
   . "\n ADD `editor` VARCHAR( 50 ) NULL AFTER `checked_out_time`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `show_addy` tinyint(1) NOT NULL default '0' AFTER `dealer_country`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_profile`"
   . "\n ADD `carlister` INT(11) NOT NULL default '0' AFTER `dealer_bio`");
   $database->query();



   $database->setQuery("ALTER TABLE `#__ezautos` CHANGE `year` `year` INT( 4 ) NOT NULL");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_leads` ADD `minyear` INT( 4 ) NOT NULL AFTER `maxprice`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos_leads` ADD `maxyear` INT( 4 ) NOT NULL AFTER `minyear`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `pdfinfo` VARCHAR( 70 ) NOT NULL default '' AFTER `pcode`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_catg`"
   . "\n ADD `taxclass` VARCHAR( 10 ) NOT NULL default '' AFTER `image`");
   $database->query();



   $database->setQuery("ALTER TABLE `#__ezautos`"
   . "\n ADD `intcolour` varchar( 20 ) NOT NULL default '' AFTER `colour`");
   $database->query();



   $database->setQuery("ALTER TABLE `#__ezautos` ADD `tax_exp` VARCHAR( 10 ) NOT NULL AFTER `onroad` ,
ADD `nct_exp` VARCHAR( 10 ) NOT NULL AFTER `tax_exp` ,
ADD `images` TEXT NOT NULL AFTER `nct_exp` ,
ADD `tax_class` VARCHAR( 10 ) NOT NULL AFTER `images`");
   $database->query();


   $database->setQuery("ALTER TABLE `#__ezautos_profile` ADD `phone_pref` VARCHAR( 5 ) NOT NULL AFTER `dealer_email` ,
ADD `fax_pref` VARCHAR( 5 ) NOT NULL AFTER `dealer_phone` ,
ADD `mobile_pref` VARCHAR(5) NOT NULL AFTER `dealer_fax`");
   $database->query();




   $database->setQuery("CREATE TABLE `#__ezautos_features` (
          `id` int(11) NOT NULL auto_increment,
          `feature` varchar(50) default NULL,
          `ordering` int(11) NOT NULL default '0',
PRIMARY KEY  (`id`)
) TYPE=MyISAM");
   $database->query();


   $database->setQuery("CREATE TABLE `#__ezautos_postcodes` (
`id` int(11) NOT NULL auto_increment,
`pcode` varchar( 10 ) NOT NULL default '',
`city` varchar( 255 ) NOT NULL default '',
`state` char( 3 ) NOT NULL default '',
`county` varchar( 255 ) NOT NULL default '',
`latitude` varchar( 25 ) NOT NULL default '',
`longitude` varchar( 25 ) NOT NULL default '',
PRIMARY KEY  (`id`)
) TYPE=MyISAM");
   $database->query();




   $database->setQuery("ALTER TABLE `#__ezautos` ADD `yearreg` INT( 4 ) NOT NULL AFTER `tax_class`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos` ADD `yearinsp` INT( 4 ) NOT NULL AFTER `yearreg`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos` ADD `monthreg` INT( 2 ) NOT NULL AFTER `yearinsp`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos` ADD `monthinsp` INT( 2 ) NOT NULL AFTER `monthreg`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos` ADD `yearemiss` INT( 4 ) NOT NULL AFTER `monthinsp`");
   $database->query();

   $database->setQuery("ALTER TABLE `#__ezautos` ADD `monthemiss` INT( 2 ) NOT NULL AFTER `yearemiss`");
   $database->query();




mosRedirect( 'index2.php?option=com_ezautos', $msg );
}





/* *********************************************************************************
                             INSTALL SAMPLE DATA
   ********************************************************************************* */



function installSample ($option) {
global $database;

	$msg = _EZAUTOS_SAMPLE_INSTALLED;


// insert the data for the category list

$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (1, 'Hatchback', 'Hatchback description', '', '', 0, 1, 1, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (2, 'Saloon', 'Saloon description', '', '', 0, 1, 2, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (3, 'Estate', 'Estate description', '', '', 0, 1, 3, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (4, 'Convertible', 'Convertible description', '', '', 0, 1, 4, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (5, 'People Carrier', 'People Carrier description', '', '', 0, 1, 5, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (6, 'Coupe', 'Coupe description', '', '', 0, 1, 6, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (7, '4x4', '4x4 description', '', '', 0, 1, 7, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_catg` VALUES (8, '-unlisted type -', '-unlisted type - description', '', '', 0, 1, 8, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();



// insert the data for the price list

$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (1, 0.00, '0', 1, 1, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (2, 500.00, '500', 1, 2, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (3, 1000.00, '1,000', 1, 3, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (4, 2000.00, '2,000', 1, 4, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (5, 3000.00, '3,000', 1, 5, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (6, 4000.00, '4,000', 1, 6, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (7, 5000.00, '5,000', 1, 7, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (8, 6000.00, '6,000', 1, 8, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (9, 7000.00, '7,000', 1, 9, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (10, 8000.00, '8,000', 1, 10, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (11, 9000.00, '9,000', 1, 11, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (12, 10000.00, '10,000', 1, 12, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (13, 11000.00, '11,000', 1, 13, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (14, 12000.00, '12,000', 1, 14, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (15, 13000.00, '13,000', 1, 15, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (16, 14000.00, '14,000', 1, 16, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (17, 15000.00, '15,000', 1, 17, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (18, 16000.00, '16,000', 1, 18, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (19, 17000.00, '17,000', 1, 19, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (20, 18000.00, '18,000', 1, 20, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (21, 19000.00, '19,000', 1, 21, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (22, 20000.00, '20,000', 1, 22, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (23, 22500.00, '22,500', 1, 23, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (24, 25000.00, '25,000', 1, 24, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (25, 27500.00, '27,500', 1, 25, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (26, 30000.00, '30,000', 1, 26, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (27, 35000.00, '35,000', 1, 27, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (28, 40000.00, '40,000', 1, 28, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (29, 50000.00, '50,000', 1, 29, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (30, 75000.00, '75,000', 1, 30, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (31, 100000.00, '100,000', 1, 31, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (32, 250000.00, '250,000', 1, 32, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_price` VALUES (33, 500000.00, '500,000', 1, 33, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();



// insert the data for the features list

$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (1, 'air conditioning', 1)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (2, 'alloy wheels', 2)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (3, 'antilock braking', 3)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (4, 'antitheft protection', 4)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (5, 'bull bar', 5)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (6, 'centre armrest', 6)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (7, 'central locking', 7)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (8, 'cd player', 8)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (9, 'climate control', 9)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (10, 'cloth inserts', 10)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (11, 'cruise control', 11)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (12, 'disc changer', 12)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (13, 'driver airbag', 13)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (14, 'electric seat', 14)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (15, 'front fog lights', 15)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (16, 'engine immobiliser', 16)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (17, 'heated seat', 17)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (18, 'leather upholstery', 18)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (19, 'long-range fuel tank', 19)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (20, 'metallic paint', 20)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (21, 'multiple airbag', 21)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (22, 'parking sensors', 22)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (23, 'passenger airbag', 23)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (24, 'power steering', 24)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (25, 'power windows', 25)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (26, 'radiocassette', 26)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (27, 'roof rails', 27)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (28, 'rust proofing', 28)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (29, 'satellite navigation', 29)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (30, 'sunroof', 30)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (31, 'tilt steering', 31)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (32, 'tow bar', 32)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (33, 'traction control', 33)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (34, 'winch', 34)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_features` (`id`, `feature`, `ordering`) VALUES (35, 'window tinting', 35)");
   $database->query();

//Insert data for the engine size list

$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (1, '500cc', 1, 1, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (2, '750cc', 1, 2, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (3, '1000cc', 1, 3, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (4, '1250cc', 1, 4, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (5, '1500cc', 1, 5, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (6, '1750cc', 1, 6, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (7, '2000cc', 1, 7, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (8, '2250cc', 1, 8, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (9, '2500cc', 1, 9, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (10, '2750cc', 1, 10, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (11, '3000cc', 1, 11, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (12, '3250cc', 1, 12, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (13, '3500cc', 1, 13, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (14, '3750cc', 1, 14, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (15, '4000cc', 1, 15, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (16, '4250cc', 1, 16, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (17, '4500cc', 1, 17, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (18, '4750cc', 1, 18, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (19, '5000cc', 1, 19, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (20, '5250cc', 1, 20, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (21, '5500cc', 1, 21, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (22, '5750cc', 1, 22, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (23, '6000cc', 1, 23, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (24, '6250cc', 1, 24, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (25, '6500cc', 1, 25, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (26, '6750cc', 1, 26, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (27, '7000cc', 1, 27, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();
$database->setQuery("INSERT INTO `#__ezautos_enginesize` (`esid`, `engine`, `published`, `ordering`, `checked_out`, `checked_out_time`, `editor`) VALUES (28, '7250cc', 1, 28, 0, '0000-00-00 00:00:00', NULL)");
   $database->query();





mosRedirect( "index2.php?option=com_ezautos", $msg );


}



/* *********************************************************************************
	   			PRUNE ORPHAN PROFILES THAT DON'T HAVE A CORE MEMBER ACCOUNT
   ********************************************************************************* */


function pruneOrphans($option){
global $database, $mosConfig_absolute_path, $ea_imagedirectory;

include(EZADMIN_PATH."/config.ezautos.php");

	//find the users affected

	$database->setQuery("SELECT a.mid from #__ezautos_profile as a left join #__users as b on a.mid=b.id where b.username is null");
	$idlist=$database->loadObjectList();

	$allIDs=array();
	$cids=count($idlist);
	if ($cids>0){

		foreach($idlist as $id){
			$allIDs[]=$id->mid;
		}

		$ids=implode(',',$allIDs);
	}

	if (!$ids == ""){

		$database->setQuery( "SELECT * FROM #__ezautos WHERE owner in ($ids)" );
		$rows = $database->loadObjectList();

		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = $rows[$i];

			if ($row->image1){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image1 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image1 );
			}
			if ($row->image2){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image2 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image2 );
			}
			if ($row->image3){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image3 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image3 );
			}
			if ($row->image4){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image4 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image4 );
			}
			if ($row->image5){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image5 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image5 );
			}
			if ($row->image6){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image6 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image6 );
			}
			if ($row->image7){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image7 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image7 );
			}
			if ($row->image8){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image8 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image8 );
			}
			if ($row->image9){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image9 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image9 );
			}
			if ($row->image10){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image10 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image10 );
			}
			if ($row->image11){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image11 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image11 );
			}
			if ($row->image12){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image12 );
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image12 );
			}

				if ($row->image13){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image13 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image13 );
				}
				if ($row->image14){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image14 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image14 );
				}
				if ($row->image15){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image15 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image15 );
				}
				if ($row->image16){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image16 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image16 );
				}
				if ($row->image17){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image17 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image17 );
				}
				if ($row->image18){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image18 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image18 );
				}
				if ($row->image19){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image19 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image19 );
				}
				if ($row->image20){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image20 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image20 );
				}
				if ($row->image21){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image21 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image21 );
				}
				if ($row->image22){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image22 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image22 );
				}
				if ($row->image23){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image23 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image23 );
				}
				if ($row->image24){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image24 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image24 );
				}


			if ($row->pdfinfo){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/pdfs/'.$row->pdfinfo );
			}

		}

		$database->setQuery("DELETE FROM #__ezautos WHERE owner in ($ids)");
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
			exit();
		}

		$database->setQuery( "SELECT * FROM #__ezautos_profile WHERE mid in ($ids)");
		$rows = $database->loadObjectList();

		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = $rows[$i];

			if ($row->dealer_image){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->dealer_image );
			}
			if ($row->logo_image){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->logo_image );
			}
			if ($row->pdf_promo){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->pdf_promo );
			}
			if ($row->page_topper){
				unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->page_topper );
			}

		}

		$database->setQuery("DELETE FROM #__ezautos_profile WHERE mid in ($ids)");

		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
			exit();
		}

		mosRedirect ("index2.php?option=".$option,_EZAUTOS_TOOLS_PRUNEORPHANS_MSG1.' '.$cids.' '._EZAUTOS_TOOLS_PRUNEORPHANS_MSG2);

	} else {

		$cids=0;
		mosRedirect ("index2.php?option=".$option, _EZAUTOS_TOOLS_PRUNEORPHANS_MSG3 );

	}
}







/* *********************************************************************************
	   					MANAGE VEHICLE LISTINGS FUNCTIONS
   ********************************************************************************* */

function showVehicle( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

include(EZADMIN_PATH."/config.ezautos.php");

  # Prepare category choices

if ($ea_makefilt) {
	$filter_make	 	= $mainframe->getUserStateFromRequest( "filter_make{$option}", 'filter_make', 0 );
}
if ($ea_modfilt) {
	$filter_model	 	= $mainframe->getUserStateFromRequest( "filter_model{$option}", 'filter_model', 0 );
}
	$filter_category 	= $mainframe->getUserStateFromRequest( "filter_category{$option}", 'filter_category', 0 );
if ($ea_regfilt) {
	$filter_rego	 	= $mainframe->getUserStateFromRequest( "filter_rego{$option}", 'filter_rego', 0 );
}
if ($ea_vinfilt) {
	$filter_vin		 	= $mainframe->getUserStateFromRequest( "filter_vin{$option}", 'filter_vin', 0 );
}
	$order 				= $mainframe->getUserStateFromRequest( "zorder", 'zorder', 'a.id DESC' );

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewauto{$option}limitstart", 'limitstart', 0 );
 
	$where = array();


if ($ea_makefilt) {
	if ( $filter_make ) {
		$where[] = "a.make = '$filter_make'";
	}
}
if ($ea_modfilt) {
	if ( $filter_model ) {
		$where[] = "a.model = '$filter_model'";
	}
}
	if ( $filter_category ) {
		$where[] = "a.cid = '$filter_category'";
	}
if ($ea_regfilt) {
	if ( $filter_rego ) {
		$where[] = "a.rego = '$filter_rego'";
	}
}
if ($ea_vinfilt) {
	if ( $filter_vin ) {
		$where[] = "a.vin = '$filter_vin'";
	}
}


	$orderAllowed = array( 'a.id ASC', 'a.id DESC', 'seller.name ASC', 'seller.name DESC', 'a.cid ASC', 'a.cid DESC', 'a.year ASC', 'a.year DESC', 'a.published ASC', 'a.published DESC', 'a.premium ASC', 'a.premium DESC', 'a.featured ASC', 'a.featured DESC', 'a.expdate ASC', 'a.expdate DESC' );
	if (!in_array( $order, $orderAllowed )) {
		$order = 'a.id DESC';
	}

  # Get total number of records
	$query = "SELECT COUNT(*) FROM #__ezautos AS a ". ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : '' );
	$database->setQuery( $query );

	$total = $database->loadResult();

  # Set up page navigation

    require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
    $pageNav = new mosPageNav( $total, $limitstart, $limit );


  # Do the main database query

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, cc.name AS category, dd.dealer_name AS vehseller, u.name AS editor"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS dd ON dd.mid = a.owner"
	. "\n LEFT JOIN #__users AS u ON u.id = a.checked_out"
	. ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
	. "\n ORDER BY ". $order
	. "\n LIMIT $pageNav->limitstart, $pageNav->limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


	$ordering[] = ezauHTML::makeOption( 'a.id ASC', _EZAUTOS_ORDER_LIST1 );
	$ordering[] = ezauHTML::makeOption( 'a.id DESC', _EZAUTOS_ORDER_LIST2 );
	$ordering[] = ezauHTML::makeOption( 'seller.name ASC', _EZAUTOS_ORDER_LIST3 );
	$ordering[] = ezauHTML::makeOption( 'seller.name DESC', _EZAUTOS_ORDER_LIST4 );
	$ordering[] = ezauHTML::makeOption( 'a.cid ASC', _EZAUTOS_ORDER_LIST5 );
	$ordering[] = ezauHTML::makeOption( 'a.cid DESC', _EZAUTOS_ORDER_LIST6 );
	$ordering[] = ezauHTML::makeOption( 'a.year ASC', _EZAUTOS_ORDER_LIST7 );
	$ordering[] = ezauHTML::makeOption( 'a.year DESC', _EZAUTOS_ORDER_LIST8 );
	$ordering[] = ezauHTML::makeOption( 'a.published ASC', _EZAUTOS_ORDER_LIST9 );
	$ordering[] = ezauHTML::makeOption( 'a.published DESC', _EZAUTOS_ORDER_LIST10 );
	$ordering[] = ezauHTML::makeOption( 'a.premium ASC', _EZAUTOS_ORDER_LIST13 );
	$ordering[] = ezauHTML::makeOption( 'a.premium DESC', _EZAUTOS_ORDER_LIST14 );
	$ordering[] = ezauHTML::makeOption( 'a.featured ASC', _EZAUTOS_ORDER_LIST15 );
	$ordering[] = ezauHTML::makeOption( 'a.featured DESC', _EZAUTOS_ORDER_LIST16 );
	$ordering[] = ezauHTML::makeOption( 'a.expdate ASC', _EZAUTOS_ORDER_LIST17 );
	$ordering[] = ezauHTML::makeOption( 'a.expdate DESC', _EZAUTOS_ORDER_LIST18 );


	$javascript = 'onchange="document.adminForm.submit();"';
	$lists['order'] = ezauHTML::selectList( $ordering, 'zorder', 'class="dropbox" size="1"'. $javascript, 'value', 'text', $order );



  # get list of Vehicle categories for the dropdown filter

	$query = "SELECT cc.cid AS value, cc.name AS text"
	. "\n FROM #__ezautos_catg as cc"
	. "\n ORDER BY cc.ordering"
	;
	$categorys[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTTYPEALL );
	$database->setQuery( $query );
	$categorys = array_merge( $categorys, $database->loadObjectList() );
	$lists['cid']	= ezauHTML::selectList( $categorys, 'filter_category', 'class="dropbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_category" );


if ($ea_makefilt) {

  # get list of Vehicle Makes for the dropdown filter

	$query = "SELECT ma.maid AS value, ma.make AS text"
	. "\n FROM #__ezautos_make as ma"
	. "\n ORDER BY ma.make"
	;
	$makes[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTMAKEALL );
	$database->setQuery( $query );
	$makes = array_merge( $makes, $database->loadObjectList() );
	$lists['make']	= ezauHTML::selectList( $makes, 'filter_make', 'class="dropbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_make" );

}

if ($ea_modfilt) {

  # get list of Vehicle Models for the dropdown filter

	$query = "SELECT mo.moid AS value, mo.model AS text"
	. "\n FROM #__ezautos_model as mo"
	. "\n ORDER BY mo.model"
	;
	$models[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTMODELALL );
	$database->setQuery( $query );
	$models = array_merge( $models, $database->loadObjectList() );
	$lists['model']	= ezauHTML::selectList( $models, 'filter_model', 'class="dropbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_model" );

}

if ($ea_regfilt) {

  # get list of rego numbers for the dropdown filter

	$query = "SELECT DISTINCT dd.rego AS value, dd.rego AS text"
	. "\n FROM #__ezautos as dd where dd.rego !=''"
	. "\n ORDER BY dd.rego"
	;
	$regos[] = ezauHTML::makeOption( '0', _EZAUTOS_FILTER_REGO );
	$database->setQuery( $query );
	$regos = array_merge( $regos, $database->loadObjectList() );
	$lists['rego']	= ezauHTML::selectList( $regos, 'filter_rego', 'class="dropbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_rego" );

}

if ($ea_vinfilt) {

  # get list of vin numbers for the dropdown filter

	$query = "SELECT DISTINCT gg.vin AS value, gg.vin AS text"
	. "\n FROM #__ezautos as gg where gg.vin !=''"
	. "\n ORDER BY gg.vin"
	;
	$vins[] = ezauHTML::makeOption( '0', _EZAUTOS_FILTER_VIN );
	$database->setQuery( $query );
	$vins = array_merge( $vins, $database->loadObjectList() );
	$lists['vin']	= ezauHTML::selectList( $vins, 'filter_vin', 'class="dropbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_vin" );

}


  # Bring it all to the screen
	HTML_ezautos::showVehicle( $option, $rows, $lists, $pageNav );
}



function editVehicle( $uid, $option  ) {
	global $database, $my, $ea_imagedirectory, $mosConfig_absolute_path, $mosConfig_live_site;
	global $ea_tagit_demo, $ea_tagit_asnew, $ea_tagit_preluv, $ea_tagit_spare;

include(EZADMIN_PATH."/config.ezautos.php");

includeAjax($option);

$lists = array();

  # oop database connector
	$row = new mosezautos( $database );

  # load the row from the db table
	$row->load( $uid );

  if ( $uid ){
    $row->checkout( $my->id );
  }


 # Build Make select list - Model select will be built by ajax
    $sql = "SELECT a.maid as value, a.make as text FROM #__ezautos_make AS a ORDER by a.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['make'] = ezauHTML::selectList( $mtypelist, 'make', 'class="widedropbox" id="make" size="1" onchange="getDropModelList(this,1)" ','value', 'text', $row->make);
	if($row->make){
		$sql = "SELECT moi.moid as value, moi.model as text FROM #__ezautos_model AS moi WHERE moi.makeid=".$row->make." ORDER by moi.model";
	}else{
	   $sql = "SELECT moi.moid as value, moi.model as text FROM #__ezautos_model AS moi ORDER by moi.model";
	}
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $mltypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MODEL );
    if($row->make){
    $mltypelist = array_merge( $mltypelist, $database->loadObjectList() );
    }
    $lists['model'] = ezauHTML::selectList( $mltypelist, 'model', 'class="widedropbox" id="model" size="1" READONLY ','value', 'text', $row->model);
	
	
	
	// Hrvoje
	// For admin part
	 # Build Country select list - City select will be built by ajax
    $sql = "SELECT hz.coid as value, hz.country as text FROM #__ezautos_country AS hz ORDER by hz.country";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $cotypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_COUNTRY );
    $cotypelist = array_merge( $cotypelist, $database->loadObjectList() );
    $lists['country'] = ezauHTML::selectList( $cotypelist, 'country', 'class="widedropbox" id="country" size="1" onchange="getDropCityList6(this,1)" ','value', 'text', $row->country);
	if($row->country){
		$sql = "SELECT mhz.ciid as value, mhz.city as text FROM #__ezautos_city AS mhz WHERE mhz.countryid=".$row->country." ORDER by mhz.city";
	}else{
	   $sql = "SELECT mhz.ciid as value, mhz.city as text FROM #__ezautos_city AS mhz ORDER by mhz.city";
	}
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $citypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_CITY );
    if($row->country){
    $citypelist = array_merge( $citypelist, $database->loadObjectList() );
    }
    $lists['city'] = ezauHTML::selectList( $citypelist, 'city', 'class="widedropbox" id="city" size="1" READONLY ','value', 'text', $row->city);
	
	
	
	
	
	


  # Build Enginesize select list

	$sql	= "SELECT e.engine as value, e.engine as text FROM #__ezautos_enginesize AS e ORDER by e.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$enginesizelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_ENGINE );
	$enginesizelist = array_merge( $enginesizelist, $database->loadObjectList() );
	$lists['engine'] = ezauHTML::selectList( $enginesizelist, 'engine', 'class="widedropbox" size="1"','value', 'text', $row->engine);


 # Build Vehicle Category select list

	$sql	= "SELECT c.cid as value, c.name as text FROM #__ezautos_catg AS c WHERE c.published=1 ORDER by c.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;

	}

	$ptypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_CATG );
	$ptypelist = array_merge( $ptypelist, $database->loadObjectList() );
	$lists['cid'] = ezauHTML::selectList( $ptypelist, 'cid', 'class="widedropbox" size="1"','value', 'text', $row->cid);


  # Build listing status select lists

	$sortpremium[] = ezauHTML::makeOption( '0', _EZAUTOS_DETAILS_FREESTATUS );
  	$sortpremium[] = ezauHTML::makeOption( '1', _EZAUTOS_PREMIUM );
  
  	$lists['premium'] = ezauHTML::selectList( $sortpremium, 'premium', 'class="widedropbox" size="1"' , 'value', 'text', $row->premium );


  # Build Dealer/seller Profile select list

	$sql	= "SELECT d.mid as value, d.dealer_name as text FROM #__ezautos_profile AS d ORDER by d.dealer_name ASC";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$dealerlist[] = ezauHTML::makeOption( '0', _EZAUTOS_SELECT_SELLER );
	$dealerlist = array_merge( $dealerlist, $database->loadObjectList() );
	$lists['owner'] = ezauHTML::selectList( $dealerlist, 'owner', 'class="widedropbox" size="1"','value', 'text', $row->owner);


  # Build year select list

	$yearlist = array();
		$yearlist[] = ezauHTML::makeOption( '0', _EZAUTOS_DETAILS_SELYEAR );
	for($i=$ea_minyear;$i<$ea_maxyear+1;$i++){
		$yearlist[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['year'] = ezauHTML::selectList($yearlist, 'year', 'class="widedropbox" size="1"', 'value', 'text', $row->year);
	$lists['yearreg'] = ezauHTML::selectList($yearlist, 'yearreg', 'class="dropbox" size="1"', 'value', 'text', $row->yearreg);
	$lists['yearinsp'] = ezauHTML::selectList($yearlist, 'yearinsp', 'class="dropbox" size="1"', 'value', 'text', $row->yearinsp);
	$lists['yearemiss'] = ezauHTML::selectList($yearlist, 'yearemiss', 'class="dropbox" size="1"', 'value', 'text', $row->yearemiss);


  # Build month select list

	$monthlist = array();
		$monthlist[] = ezauHTML::makeOption( '0', _EZAUTOS_SPECS_SELMONTH );
	for($i=1;$i<12+1;$i++){
		$monthlist[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['monthreg'] = ezauHTML::selectList($monthlist, 'monthreg', 'class="wideentrybox" size="1"', 'value', 'text', $row->monthreg);
	$lists['monthinsp'] = ezauHTML::selectList($monthlist, 'monthinsp', 'class="wideentrybox" size="1"', 'value', 'text', $row->monthinsp);
	$lists['monthemiss'] = ezauHTML::selectList($monthlist, 'monthemiss', 'class="wideentrybox" size="1"', 'value', 'text', $row->monthemiss);


  # Build yes/no feature select lists

	$yesno[] = ezauHTML::makeOption( '0', _EZAUTOS_DET_NO );
  	$yesno[] = ezauHTML::makeOption( '1', _EZAUTOS_DET_YES );
  
  	$lists['airco'] = ezauHTML::selectList( $yesno, 'airco', 'class="inputbox" size="1"' , 'value', 'text', $row->airco );
  	$lists['pwin'] = ezauHTML::selectList( $yesno, 'pwin', 'class="inputbox" size="1"' , 'value', 'text', $row->pwin );
  	$lists['psteer'] = ezauHTML::selectList( $yesno, 'psteer', 'class="inputbox" size="1"' , 'value', 'text', $row->psteer );
  	$lists['cruise'] = ezauHTML::selectList( $yesno, 'cruise', 'class="inputbox" size="1"' , 'value', 'text', $row->cruise );
  	$lists['airbag'] = ezauHTML::selectList( $yesno, 'airbag', 'class="inputbox" size="1"' , 'value', 'text', $row->airbag );
  	$lists['abs'] = ezauHTML::selectList( $yesno, 'abs', 'class="inputbox" size="1"' , 'value', 'text', $row->abs );
  	$lists['amfm'] = ezauHTML::selectList( $yesno, 'amfm', 'class="inputbox" size="1"' , 'value', 'text', $row->amfm );
  	$lists['cdp'] = ezauHTML::selectList( $yesno, 'cdp', 'class="inputbox" size="1"' , 'value', 'text', $row->cdp );
  	$lists['atheft'] = ezauHTML::selectList( $yesno, 'atheft', 'class="inputbox" size="1"' , 'value', 'text', $row->atheft );
  	$lists['tilt'] = ezauHTML::selectList( $yesno, 'tilt', 'class="inputbox" size="1"' , 'value', 'text', $row->tilt );

  	$lists['showfeat'] = ezauHTML::selectList( $yesno, 'showfeat', 'class="inputbox" size="1"' , 'value', 'text', $row->showfeat );
  	$lists['published'] = ezauHTML::selectList( $yesno, 'published', 'class="inputbox" size="1"' , 'value', 'text', $row->published );
  	$lists['featured'] = ezauHTML::selectList( $yesno, 'featured', 'class="inputbox" size="1"' , 'value', 'text', $row->featured );

	$lists['showprice'] 	= ezauHTML::yesnoRadioList('showprice', 'class="inputbox"', $row->showprice);
	$lists['finance'] 	= ezauHTML::yesnoRadioList('finance', 'class="inputbox"', $row->finance);

	$lists['incltax'] 	= ezauHTML::yesnoRadioList('incltax', 'class="inputbox"', $row->incltax);



if ($uid){

	$query = "SELECT DISTINCT * FROM #__ezautos"
    . "\n WHERE id = $uid"
	;
    $database->setQuery( $query );
    $database->loadObject($therow);

	$imagedropdown = array( ezauHTML::makeOption( '', _EZAUTOS_REORDER_IMAGES) );
if ($therow->image1){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image1, _EZAUTOS_VLDET_IMAGE1 );
}
if ($therow->image2){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image2, _EZAUTOS_VLDET_IMAGE2 );
}
if ($therow->image3){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image3, _EZAUTOS_VLDET_IMAGE3 );
}
if ($therow->image4){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image4, _EZAUTOS_VLDET_IMAGE4 );
}
if ($therow->image5){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image5, _EZAUTOS_VLDET_IMAGE5 );
}
if ($therow->image6){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image6, _EZAUTOS_VLDET_IMAGE6 );
}
if ($therow->image7){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image7, _EZAUTOS_VLDET_IMAGE7 );
}
if ($therow->image8){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image8, _EZAUTOS_VLDET_IMAGE8 );
}
if ($therow->image9){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image9, _EZAUTOS_VLDET_IMAGE9 );
}
if ($therow->image10){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image10, _EZAUTOS_VLDET_IMAGE10 );
}
if ($therow->image11){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image11, _EZAUTOS_VLDET_IMAGE11 );
}
if ($therow->image12){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image12, _EZAUTOS_VLDET_IMAGE12 );
}
if ($therow->image13){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image13, _EZAUTOS_VLDET_IMAGE13 );
}
if ($therow->image14){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image14, _EZAUTOS_VLDET_IMAGE14 );
}
if ($therow->image15){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image15, _EZAUTOS_VLDET_IMAGE15 );
}
if ($therow->image16){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image16, _EZAUTOS_VLDET_IMAGE16 );
}
if ($therow->image17){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image17, _EZAUTOS_VLDET_IMAGE17 );
}
if ($therow->image18){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image18, _EZAUTOS_VLDET_IMAGE18 );
}
if ($therow->image19){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image19, _EZAUTOS_VLDET_IMAGE19 );
}
if ($therow->image20){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image20, _EZAUTOS_VLDET_IMAGE20 );
}
if ($therow->image21){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image21, _EZAUTOS_VLDET_IMAGE21 );
}
if ($therow->image22){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image22, _EZAUTOS_VLDET_IMAGE22 );
}
if ($therow->image23){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image23, _EZAUTOS_VLDET_IMAGE23 );
}
if ($therow->image24){
	$imagedropdown[] = ezauHTML::makeOption( $therow->image24, _EZAUTOS_VLDET_IMAGE24 );
}

}

  $list['image1'] = ezauHTML::selectList( $imagedropdown, 'image1', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image1.options[selectedIndex].value!='') {document.image1prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image1.options[selectedIndex].value} else {document.image1prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image1 );
  $list['image2'] = ezauHTML::selectList( $imagedropdown, 'image2', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image2.options[selectedIndex].value!='') {document.image2prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image2.options[selectedIndex].value} else {document.image2prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image2 );
  $list['image3'] = ezauHTML::selectList( $imagedropdown, 'image3', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image3.options[selectedIndex].value!='') {document.image3prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image3.options[selectedIndex].value} else {document.image3prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image3 );
  $list['image4'] = ezauHTML::selectList( $imagedropdown, 'image4', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image4.options[selectedIndex].value!='') {document.image4prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image4.options[selectedIndex].value} else {document.image4prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image4 );

  $list['image5'] = ezauHTML::selectList( $imagedropdown, 'image5', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image5.options[selectedIndex].value!='') {document.image5prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image5.options[selectedIndex].value} else {document.image5prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image5 );
  $list['image6'] = ezauHTML::selectList( $imagedropdown, 'image6', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image6.options[selectedIndex].value!='') {document.image6prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image6.options[selectedIndex].value} else {document.image6prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image6 );
  $list['image7'] = ezauHTML::selectList( $imagedropdown, 'image7', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image7.options[selectedIndex].value!='') {document.image7prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image7.options[selectedIndex].value} else {document.image7prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image7 );
  $list['image8'] = ezauHTML::selectList( $imagedropdown, 'image8', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image8.options[selectedIndex].value!='') {document.image8prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image8.options[selectedIndex].value} else {document.image8prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image8 );

  $list['image9'] = ezauHTML::selectList( $imagedropdown, 'image9', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image9.options[selectedIndex].value!='') {document.image9prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image9.options[selectedIndex].value} else {document.image9prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image9 );
  $list['image10'] = ezauHTML::selectList( $imagedropdown, 'image10', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image10.options[selectedIndex].value!='') {document.image10prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image10.options[selectedIndex].value} else {document.image10prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image10 );
  $list['image11'] = ezauHTML::selectList( $imagedropdown, 'image11', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image11.options[selectedIndex].value!='') {document.image11prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image11.options[selectedIndex].value} else {document.image11prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image11 );
  $list['image12'] = ezauHTML::selectList( $imagedropdown, 'image12', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image12.options[selectedIndex].value!='') {document.image12prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image12.options[selectedIndex].value} else {document.image12prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image12 );

  $list['image13'] = ezauHTML::selectList( $imagedropdown, 'image13', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image13.options[selectedIndex].value!='') {document.image13prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image13.options[selectedIndex].value} else {document.image13prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image13 );
  $list['image14'] = ezauHTML::selectList( $imagedropdown, 'image14', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image14.options[selectedIndex].value!='') {document.image14prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image14.options[selectedIndex].value} else {document.image14prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image14 );
  $list['image15'] = ezauHTML::selectList( $imagedropdown, 'image15', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image15.options[selectedIndex].value!='') {document.image15prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image15.options[selectedIndex].value} else {document.image15prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image15 );
  $list['image16'] = ezauHTML::selectList( $imagedropdown, 'image16', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image16.options[selectedIndex].value!='') {document.image16prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image16.options[selectedIndex].value} else {document.image16prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image16 );

  $list['image17'] = ezauHTML::selectList( $imagedropdown, 'image17', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image17.options[selectedIndex].value!='') {document.image17prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image17.options[selectedIndex].value} else {document.image17prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image17 );
  $list['image18'] = ezauHTML::selectList( $imagedropdown, 'image18', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image18.options[selectedIndex].value!='') {document.image18prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image18.options[selectedIndex].value} else {document.image18prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image18 );
  $list['image19'] = ezauHTML::selectList( $imagedropdown, 'image19', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image19.options[selectedIndex].value!='') {document.image19prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image19.options[selectedIndex].value} else {document.image19prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image19 );
  $list['image20'] = ezauHTML::selectList( $imagedropdown, 'image20', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image20.options[selectedIndex].value!='') {document.image20prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image20.options[selectedIndex].value} else {document.image20prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image20 );

  $list['image21'] = ezauHTML::selectList( $imagedropdown, 'image21', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image21.options[selectedIndex].value!='') {document.image21prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image21.options[selectedIndex].value} else {document.image21prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image21 );
  $list['image22'] = ezauHTML::selectList( $imagedropdown, 'image22', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image22.options[selectedIndex].value!='') {document.image22prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image22.options[selectedIndex].value} else {document.image22prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image22 );
  $list['image23'] = ezauHTML::selectList( $imagedropdown, 'image23', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image23.options[selectedIndex].value!='') {document.image23prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image23.options[selectedIndex].value} else {document.image23prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image23 );
  $list['image24'] = ezauHTML::selectList( $imagedropdown, 'image24', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].image24.options[selectedIndex].value!='') {document.image24prev.src='".$mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/th/' + document.forms[0].image24.options[selectedIndex].value} else {document.image24prev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->image24 );

  $list['pdfinfo'] = ezauHTML::selectList( $imagedropdown, 'pdfinfo', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].pdfinfo.options[selectedIndex].value!='') {document.pdfinfoprev.src='".$mosConfig_live_site."/components/com_ezautos/pdfs/' + document.forms[0].pdfinfo.options[selectedIndex].value} else {document.pdfinfoprev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->pdfinfo );



	$sql	= "SELECT y.feature as value, y.feature as text FROM #__ezautos_features AS y ORDER by y.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$ptypelist = $database->loadObjectList();

	$query = "SELECT features from #__ezautos"
	. "\n WHERE id='$row->id'"
	;
	$database->setQuery( $query );
	$myfeatures = $database->loadResult();

	$myfeatures2  = explode(",",$myfeatures);

    foreach($myfeatures2 as $myfeature2) {
	$myfeature2;
	}
	
	if($database->loadResult()==0){$myfeature2=0;}

	foreach($ptypelist as $ptypelists)
		{
		$feature[$ptypelists->value]=$ptypelists->text;
		}


	$lists['features'] = multiSelect($feature,'features[]',$myfeatures2);



	HTML_ezautos::editVehicle( $option, $row, $lists, $list );
}




function multiSelect($arr_main,$name,$arr_selected)
	{
	$return='<select name="'.$name.'" class="dropbox" size="30" multiple="multiple">';
			$return.='<option value="">'._EZAUTOS_SELECT_FEATURES.'</option>';
			$return.='<option value=""></option>';
	foreach($arr_main as $key=>$value)
		{
		if(is_array($arr_selected))
			{
			$selected='';
			foreach($arr_selected as $k=>$v)
				{
				if($key==$v){$selected='selected';}
				}
			$return.='<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
			}
		else
			{
			if($key==$arr_selected){$return.='<option value="'.$key.'" selected>'.$value.'</option>';}
			else{$return.='<option value="'.$key.'" >'.$value.'</option>';}
			}
		}
	$return.="</select>";
	return $return;
	}




function saveVehicle( $option ) {
	global $database, $mainframe, $ea_imagedirectory, $mosConfig_offset, $ea_expfig, $mosConfig_absolute_path;

include(EZADMIN_PATH."/config.ezautos.php");

	$row = new mosezautos( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;


	if (!$row->bind( $_POST )) {
    echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
    exit();
	}


	// sanitize
	$row->id = intval($row->id);
	$row->cid = intval($row->cid);



    if($_REQUEST['image1delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image1);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image1);
		$row->image1="";
	}else{
        if($_REQUEST['image1']){$row->image1=$_REQUEST['image1'];}
        if($_FILES['image1upload']['name']){  $row->image1=saveFileUpload($_FILES['image1upload']['name'],$_FILES['image1upload']['type'],$_FILES['image1upload']['tmp_name']); }
    }

    if($_REQUEST['image2delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image2);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image2);
		$row->image2="";
	}else{
        if($_REQUEST['image2']){$row->image2=$_REQUEST['image2'];}
        if($_FILES['image2upload']['name']){  $row->image2=saveFileUpload($_FILES['image2upload']['name'],$_FILES['image2upload']['type'],$_FILES['image2upload']['tmp_name']); }
    }

    if($_REQUEST['image3delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image3);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image3);
		$row->image3="";
	}else{
        if($_REQUEST['image3']){$row->image3=$_REQUEST['image3'];}
        if($_FILES['image3upload']['name']){  $row->image3=saveFileUpload($_FILES['image3upload']['name'],$_FILES['image3upload']['type'],$_FILES['image3upload']['tmp_name']); }
    }

	if($_REQUEST['image4delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image4);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image4);
		$row->image4="";
	}else{
        if($_REQUEST['image4']){$row->image4=$_REQUEST['image4'];}
        if($_FILES['image4upload']['name']){  $row->image4=saveFileUpload($_FILES['image4upload']['name'],$_FILES['image4upload']['type'],$_FILES['image4upload']['tmp_name']); }
    }

    if($_REQUEST['image5delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image5);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image5);
		$row->image5="";
	}else{
        if($_REQUEST['image5']){$row->image5=$_REQUEST['image5'];}
        if($_FILES['image5upload']['name']){  $row->image5=saveFileUpload($_FILES['image5upload']['name'],$_FILES['image5upload']['type'],$_FILES['image5upload']['tmp_name']); }
    }

    if($_REQUEST['image6delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image6);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image6);
		$row->image6="";
	}else{
        if($_REQUEST['image6']){$row->image6=$_REQUEST['image6'];}
        if($_FILES['image6upload']['name']){  $row->image6=saveFileUpload($_FILES['image6upload']['name'],$_FILES['image6upload']['type'],$_FILES['image6upload']['tmp_name']); }
    }

    if($_REQUEST['image7delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image7);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image7);
		$row->image7="";
	}else{
        if($_REQUEST['image7']){$row->image7=$_REQUEST['image7'];}
        if($_FILES['image7upload']['name']){  $row->image7=saveFileUpload($_FILES['image7upload']['name'],$_FILES['image7upload']['type'],$_FILES['image7upload']['tmp_name']); }
    }

	if($_REQUEST['image8delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image8);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image8);
		$row->image8="";
	}else{
        if($_REQUEST['image8']){$row->image8=$_REQUEST['image8'];}
        if($_FILES['image8upload']['name']){  $row->image8=saveFileUpload($_FILES['image8upload']['name'],$_FILES['image8upload']['type'],$_FILES['image8upload']['tmp_name']); }
    }

    if($_REQUEST['image9delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image9);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image9);
		$row->image9="";
	}else{
        if($_REQUEST['image9']){$row->image9=$_REQUEST['image9'];}
        if($_FILES['image9upload']['name']){  $row->image9=saveFileUpload($_FILES['image9upload']['name'],$_FILES['image9upload']['type'],$_FILES['image9upload']['tmp_name']); }
    }

    if($_REQUEST['image10delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image10);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image10);
		$row->image10="";
	}else{
        if($_REQUEST['image10']){$row->image10=$_REQUEST['image10'];}
        if($_FILES['image10upload']['name']){  $row->image10=saveFileUpload($_FILES['image10upload']['name'],$_FILES['image10upload']['type'],$_FILES['image10upload']['tmp_name']); }
    }

    if($_REQUEST['image11delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image11);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image11);
		$row->image11="";
	}else{
        if($_REQUEST['image11']){$row->image11=$_REQUEST['image11'];}
        if($_FILES['image11upload']['name']){  $row->image11=saveFileUpload($_FILES['image11upload']['name'],$_FILES['image11upload']['type'],$_FILES['image11upload']['tmp_name']); }
    }

	if($_REQUEST['image12delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image12);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image12);
		$row->image12="";
	}else{
        if($_REQUEST['image12']){$row->image12=$_REQUEST['image12'];}
        if($_FILES['image12upload']['name']){  $row->image12=saveFileUpload($_FILES['image12upload']['name'],$_FILES['image12upload']['type'],$_FILES['image12upload']['tmp_name']); }
    }

    if($_REQUEST['image13delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image13);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image13);
		$row->image13="";
	}else{
        if($_REQUEST['image13']){$row->image13=$_REQUEST['image13'];}
        if($_FILES['image13upload']['name']){  $row->image13=saveFileUpload($_FILES['image13upload']['name'],$_FILES['image13upload']['type'],$_FILES['image13upload']['tmp_name']); }
    }

    if($_REQUEST['image14delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image14);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image14);
		$row->image14="";
	}else{
        if($_REQUEST['image14']){$row->image14=$_REQUEST['image14'];}
        if($_FILES['image14upload']['name']){  $row->image14=saveFileUpload($_FILES['image14upload']['name'],$_FILES['image14upload']['type'],$_FILES['image14upload']['tmp_name']); }
    }

    if($_REQUEST['image15delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image15);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image15);
		$row->image15="";
	}else{
        if($_REQUEST['image15']){$row->image15=$_REQUEST['image15'];}
        if($_FILES['image15upload']['name']){  $row->image15=saveFileUpload($_FILES['image15upload']['name'],$_FILES['image15upload']['type'],$_FILES['image15upload']['tmp_name']); }
    }

	if($_REQUEST['image16delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image16);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image16);
		$row->image16="";
	}else{
        if($_REQUEST['image16']){$row->image16=$_REQUEST['image16'];}
        if($_FILES['image16upload']['name']){  $row->image16=saveFileUpload($_FILES['image16upload']['name'],$_FILES['image16upload']['type'],$_FILES['image16upload']['tmp_name']); }
    }

    if($_REQUEST['image17delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image17);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image17);
		$row->image17="";
	}else{
        if($_REQUEST['image17']){$row->image17=$_REQUEST['image17'];}
        if($_FILES['image17upload']['name']){  $row->image17=saveFileUpload($_FILES['image17upload']['name'],$_FILES['image17upload']['type'],$_FILES['image17upload']['tmp_name']); }
    }

    if($_REQUEST['image18delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image18);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image18);
		$row->image18="";
	}else{
        if($_REQUEST['image18']){$row->image18=$_REQUEST['image18'];}
        if($_FILES['image18upload']['name']){  $row->image18=saveFileUpload($_FILES['image18upload']['name'],$_FILES['image18upload']['type'],$_FILES['image18upload']['tmp_name']); }
    }

    if($_REQUEST['image19delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image19);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image19);
		$row->image19="";
	}else{
        if($_REQUEST['image19']){$row->image19=$_REQUEST['image19'];}
        if($_FILES['image19upload']['name']){  $row->image19=saveFileUpload($_FILES['image19upload']['name'],$_FILES['image19upload']['type'],$_FILES['image19upload']['tmp_name']); }
    }

	if($_REQUEST['image20delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image20);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image20);
		$row->image20="";
	}else{
        if($_REQUEST['image20']){$row->image20=$_REQUEST['image20'];}
        if($_FILES['image20upload']['name']){  $row->image20=saveFileUpload($_FILES['image20upload']['name'],$_FILES['image20upload']['type'],$_FILES['image20upload']['tmp_name']); }
    }

    if($_REQUEST['image21delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image21);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image21);
		$row->image21="";
	}else{
        if($_REQUEST['image21']){$row->image21=$_REQUEST['image21'];}
        if($_FILES['image21upload']['name']){  $row->image21=saveFileUpload($_FILES['image21upload']['name'],$_FILES['image21upload']['type'],$_FILES['image21upload']['tmp_name']); }
    }

    if($_REQUEST['image22delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image22);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image22);
		$row->image22="";
	}else{
        if($_REQUEST['image22']){$row->image22=$_REQUEST['image22'];}
        if($_FILES['image22upload']['name']){  $row->image22=saveFileUpload($_FILES['image22upload']['name'],$_FILES['image22upload']['type'],$_FILES['image22upload']['tmp_name']); }
    }

    if($_REQUEST['image23delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image23);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image23);
		$row->image23="";
	}else{
        if($_REQUEST['image23']){$row->image23=$_REQUEST['image23'];}
        if($_FILES['image23upload']['name']){  $row->image23=saveFileUpload($_FILES['image23upload']['name'],$_FILES['image23upload']['type'],$_FILES['image23upload']['tmp_name']); }
    }

	if($_REQUEST['image24delete']){
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image24);
		unlink ($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image24);
		$row->image24="";
	}else{
        if($_REQUEST['image24']){$row->image24=$_REQUEST['image24'];}
        if($_FILES['image24upload']['name']){  $row->image24=saveFileUpload($_FILES['image24upload']['name'],$_FILES['image24upload']['type'],$_FILES['image24upload']['tmp_name']); }
    }

        if($_REQUEST['pdfinfo']){$row->pdfinfo=$_REQUEST['pdfinfo'];}
        if($_FILES['pdfinfoupload']['name']){  $row->pdfinfo=savePropPdf($_FILES['pdfinfoupload']['name'],$_FILES['pdfinfoupload']['type'],$_FILES['pdfinfoupload']['tmp_name']); }


	$row->lastupdate = mktime();

	// code cleaner for xhtml transitional compliance
	$row->longdesc = str_replace( '<br>', '<br />', $row->longdesc );


	$row->features = implode ( ",",$row->features);

	$row->odometer = str_replace( ',', '', $row->odometer );


	$isNew = ( $row->id < 1 );
	if ($isNew) {
	$row->listdate = date("Y-m-d");
	$row->expdate=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));
	}


	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
    echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
    exit();
	}


	$row->checkin();


	mosRedirect( 'index2.php?option=com_ezautos&task=show', $msg );
}


function cancelVehicle() {
	global $database;

	$row = new mosezautos( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=show" );
}


function publishVehicle( $id=null, $publish=1 ) {
	global $database, $my;

	if (!is_array( $id ) || count( $id ) < 1) {
    $action = $publish ? 'publish' : 'unpublish';
    echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
    exit;
	}
	$ids = implode( ',', $id );
	$database->setQuery( "UPDATE #__ezautos SET published='$publish'"
	. "\nWHERE id IN ($ids) AND (checked_out=0 OR (checked_out='$my->id'))"
	);
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}
	if (count( $id ) == 1) {
		$row = new mosezautos( $database );
		$row->checkin( $id[0] );
	}

	mosRedirect( "index2.php?option=com_ezautos&task=show" );
}


function copyVehicle( $cid, $option ) {
	global $database;

	$total = count( $cid );
	for ( $i = 0; $i < $total; $i++ ) {
		$row = new mosezautos( $database );


		// main query
		$query = "SELECT a.*"
		. "\n FROM #__ezautos AS a"
		. "\n WHERE a.id = " . (int) $cid[$i]
		;
		$database->setQuery( $query );
		$item = $database->loadObjectList();


		$row->id 				= NULL;
		$row->cid 				= $item[0]->cid;
		$row->vin 				= $item[0]->vin;
		$row->rego 				= $item[0]->rego;
		$row->year 				= $item[0]->year;
		$row->make 				= $item[0]->make;
		$row->model 			= $item[0]->model;
		// Added by Hrvoje for Country / Cities search
		$row->country			= $item[0]->country;
		$row->city				= $item[0]->city;
		
		$row->derivative 		= $item[0]->derivative;
		$row->engine 			= $item[0]->engine;
		$row->price 			= $item[0]->price;
		$row->price_type		= $item[0]->price_type;
		$row->showprice 		= $item[0]->showprice;
		$row->trans 			= $item[0]->trans;
		$row->mileage 			= $item[0]->mileage;
		$row->colour 			= $item[0]->colour;
		$row->intcolour 		= $item[0]->intcolour;
		$row->fuel 				= $item[0]->fuel;
		$row->fuelsystem		= $item[0]->fuelsystem;
		$row->borestroke		= $item[0]->borestroke;
		$row->power				= $item[0]->power;
		$row->torque			= $item[0]->torque;
		$row->weightpower		= $item[0]->weightpower;
		$row->frontbrakes		= $item[0]->frontbrakes;
		$row->rearbrakes		= $item[0]->rearbrakes;
		$row->wheeldims			= $item[0]->wheeldims;
		$row->turncirc			= $item[0]->turncirc;
		$row->compressionratio	= $item[0]->compressionratio;
		$row->tankcapacity		= $item[0]->tankcapacity;
		$row->extlength			= $item[0]->extlength;
		$row->extwidth			= $item[0]->extwidth;
		$row->extheight			= $item[0]->extheight;
		$row->fronttrack		= $item[0]->fronttrack;
		$row->reartrack			= $item[0]->reartrack;
		$row->wheelbase			= $item[0]->wheelbase;
		$row->frontsus			= $item[0]->frontsus;
		$row->rearsus			= $item[0]->rearsus;
		$row->kerbweight		= $item[0]->kerbweight;
		$row->groundclear		= $item[0]->groundclear;
		$row->seatcap			= $item[0]->seatcap;
		$row->cityfuel			= $item[0]->cityfuel;
		$row->highwayfuel		= $item[0]->highwayfuel;
		$row->towingcap			= $item[0]->towingcap;
		$row->countryorigin		= $item[0]->countryorigin;
		$row->doorsbody			= $item[0]->doorsbody;
		$row->stocknum			= $item[0]->stocknum;
		$row->type 				= $item[0]->type;
		$row->freq 				= $item[0]->freq;
		$row->numowners 		= $item[0]->numowners;
		$row->incltax 			= $item[0]->incltax;
		$row->co2 				= $item[0]->co2;
		$row->odometer 			= $item[0]->odometer;
		$row->doors 			= $item[0]->doors;
		$row->body 				= $item[0]->body;
		$row->finance 			= $item[0]->finance;
		$row->deposit 			= $item[0]->deposit;
		$row->repayments 		= $item[0]->repayments;
		$row->term 				= $item[0]->term;
		$row->termtype 			= $item[0]->termtype;
		$row->features 			= $item[0]->features;
		$row->mileage_unit		= $item[0]->mileage_unit;
		$row->onroad			= $item[0]->onroad;
		$row->tax_exp			= $item[0]->tax_exp;
		$row->nct_exp			= $item[0]->nct_exp;
		$row->images			= $item[0]->images;
		$row->tax_class			= $item[0]->tax_class;
		$row->yearreg			= $item[0]->yearreg;
		$row->yearinsp			= $item[0]->yearinsp;
		$row->monthreg			= $item[0]->monthreg;
		$row->monthinsp			= $item[0]->monthinsp;
		$row->yearemiss			= $item[0]->yearemiss;
		$row->monthemiss		= $item[0]->monthemiss;
		$row->smalldesc 		= $item[0]->smalldesc;
		$row->longdesc 			= $item[0]->longdesc;
		$row->video 			= $item[0]->video;
		$row->declat 			= $item[0]->declat;
		$row->declong 			= $item[0]->declong;
		$row->listdate 			= $item[0]->listdate;
		$row->expdate			= $item[0]->expdate;
		$row->hits 				= '0';
		$row->tag 				= $item[0]->tag;
		$row->availability 		= $item[0]->availability;
		$row->showfeat 			= $item[0]->showfeat;
		$row->airco 			= $item[0]->airco;
		$row->pwin 				= $item[0]->pwin;
		$row->psteer 			= $item[0]->psteer;
		$row->cruise 			= $item[0]->cruise;
		$row->airbag 			= $item[0]->airbag;
		$row->abs 				= $item[0]->abs;
		$row->amfm 				= $item[0]->amfm;
		$row->cdp 				= $item[0]->cdp;
		$row->atheft 			= $item[0]->atheft;
		$row->tilt 				= $item[0]->tilt;
		$row->custom1a 			= $item[0]->custom1a;
		$row->custom2a 			= $item[0]->custom2a;
		$row->custom3a 			= $item[0]->custom3a;
		$row->custom4a 			= $item[0]->custom4a;
		$row->custom5a 			= $item[0]->custom5a;
		$row->custom6a 			= $item[0]->custom6a;
		$row->custom7a 			= $item[0]->custom7a;
		$row->custom8a 			= $item[0]->custom8a;
		$row->custom9a 			= $item[0]->custom9a;
		$row->custom10a 		= $item[0]->custom10a;
		$row->pcode		 		= $item[0]->pcode;
		$row->pdfinfo	 		= $item[0]->pdfinfo;
		$row->owner 			= $item[0]->owner;
		$row->premium 			= $item[0]->premium;
		$row->featured 			= $item[0]->featured;
		$row->published 		= '0';
		$row->checked_out 		= $item[0]->checked_out;
		$row->checked_out_time 	= $item[0]->checked_out_time;
		$row->editor	 		= $item[0]->editor;
		$row->metadesc 			= $item[0]->metadesc;
		$row->metakey 			= $item[0]->metakey;



		if (!$row->check()) {
			echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}
		if (!$row->store()) {
			echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}

}


	mosRedirect( "index2.php?option=com_ezautos&task=show" );
}


function removeVehicle( $id, $option ) {
    global $database, $mosConfig_absolute_path, $ea_imagedirectory;

include(EZADMIN_PATH."/config.ezautos.php");

	$database->setQuery( "select * from #__ezautos where id=" . intval( $id ) );
	$doit=$database->loadResult();

	if ( $id )
	{
	$row=new mosezautos( $database );
	$row->load( $id );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image1 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image1 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image2 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image2 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image3 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image3 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image4 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image4 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image5 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image5 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image6 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image6 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image7 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image7 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image8 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image8 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image9 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image9 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image10 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image10 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image11 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image11 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image12 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image12 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image13 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image13 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image14 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image14 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image15 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image15 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image16 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image16 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image17 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image17 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image18 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image18 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image19 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image19 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image20 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image20 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image21 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image21 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image22 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image22 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image23 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image23 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image24 );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image24 );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/pdfs/'.$row->pdfinfo );

	$database->setQuery( "DELETE FROM #__ezautos WHERE id=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}

	mosRedirect( 'index2.php?option=com_ezautos&task=show' );
	}
}


function printDetails( $uid, $option ) {
	global $database, $mainframe;


  # Get the print template header
	$query = "SELECT content FROM #__ezautos_content"
	. "\n WHERE contid=7"
	;
	$database->setQuery( $query );
	$ez_printheader = $database->loadResult();

  # Get the print template footer
	$query = "SELECT content FROM #__ezautos_content"
	. "\n WHERE contid=8"
	;
	$database->setQuery( $query );
	$ez_printfooter = $database->loadResult();

  # Get the business logo content
	$query = "SELECT content FROM #__ezautos_content"
	. "\n WHERE contid=6"
	;
	$database->setQuery( $query );
	$ezlogo = $database->loadResult();


     $query = "SELECT a.*, c.name AS category, b.make AS makename, d.model as modelname, 
	u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, 
	u.dealer_mobile AS dealer_mobile, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, 
	u.dealer_sms AS dealer_sms, u.dealer_email AS dealer_email, u.published AS dealerpublished FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_catg as c on c.cid=a.cid"
	. "\n LEFT JOIN #__ezautos_make as b ON b.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as d ON d.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
    . "\n WHERE a.published = '1' AND a.id = $uid";
    $database->setQuery( $query );
    $database->loadObject($row);


	HTML_ezautos::printDetails( $option, $row, $ez_printheader, $ez_printfooter, $ezlogo );
}




function resetHits ( $id, $option ) {
	global $database, $my;

	$database->setQuery( "select hits from #__ezautos where id=$id" );
	$own=$database->loadResult();

	if ( $id )
	{
	$row=new mosezautos( $database );
	$row->load( $id );

	$database->setQuery( "UPDATE #__ezautos SET hits=0 WHERE id=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}

	mosRedirect( 'index2.php?option=com_ezautos&task=show', _EZAUTOS_RESET_MSG );
	}
}



function resetDate ( $id, $option ) {
	global $database, $mainframe, $my, $ea_expfig;

include(EZADMIN_PATH."/config.ezautos.php");

	$database->setQuery( "select * from #__ezautos where id=$id" );
	$own=$database->loadResult();

	if ( $id )
	{
	$row=new mosezautos( $database );
	$row->load( $id );

	$doreset=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));

	$database->setQuery( "UPDATE #__ezautos SET expdate=$doreset WHERE id=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}

	mosRedirect( 'index2.php?option=com_ezautos&task=show', _EZAUTOS_EXPDATE_RESET );

	}
}



function cleanDB( $option ) {
	global $database, $mainframe, $ea_impnum, $ea_expmgmt, $ea_expsys, $ea_expgrace, $mosConfig_absolute_path, $ea_imagedirectory;

include(EZADMIN_PATH."/config.ezautos.php");

	if ( $ea_expmgmt==1 ) {

		if ( $ea_expsys==0 ) {

			$database->setQuery( "SELECT * FROM #__ezautos WHERE hits>=$ea_impnum" );
			$rows = $database->loadObjectList();

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = $rows[$i];

				if ($row->image1){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image1 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image1 );
				}
				if ($row->image2){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image2 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image2 );
				}
				if ($row->image3){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image3 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image3 );
				}
				if ($row->image4){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image4 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image4 );
				}
				if ($row->image5){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image5 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image5 );
				}
				if ($row->image6){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image6 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image6 );
				}
				if ($row->image7){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image7 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image7 );
				}
				if ($row->image8){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image8 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image8 );
				}
				if ($row->image9){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image9 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image9 );
				}
				if ($row->image10){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image10 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image10 );
				}
				if ($row->image11){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image11 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image11 );
				}
				if ($row->image12){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image12 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image12 );
				}
				if ($row->image13){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image13 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image13 );
				}
				if ($row->image14){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image14 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image14 );
				}
				if ($row->image15){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image15 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image15 );
				}
				if ($row->image16){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image16 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image16 );
				}
				if ($row->image17){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image17 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image17 );
				}
				if ($row->image18){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image18 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image18 );
				}
				if ($row->image19){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image19 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image19 );
				}
				if ($row->image20){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image20 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image20 );
				}
				if ($row->image21){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image21 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image21 );
				}
				if ($row->image22){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image22 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image22 );
				}
				if ($row->image23){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image23 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image23 );
				}
				if ($row->image24){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image24 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image24 );
				}

				if ($row->pdfinfo){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/pdfs/'.$row->pdfinfo );
				}

			}

		$database->setQuery( "DELETE FROM #__ezautos WHERE hits>=$ea_impnum" );

		} else {

			$date1=mktime(0, 0, 0, date("m"), date("d")-$ea_expgrace, date("Y"));
			$date2=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

			$database->setQuery( "SELECT * FROM #__ezautos WHERE expdate < $date1 AND expdate < $date2" );
			$rows = $database->loadObjectList();

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = $rows[$i];

				if ($row->image1){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image1 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image1 );
				}
				if ($row->image2){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image2 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image2 );
				}
				if ($row->image3){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image3 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image3 );
				}
				if ($row->image4){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image4 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image4 );
				}
				if ($row->image5){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image5 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image5 );
				}
				if ($row->image6){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image6 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image6 );
				}
				if ($row->image7){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image7 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image7 );
				}
				if ($row->image8){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image8 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image8 );
				}
				if ($row->image9){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image9 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image9 );
				}
				if ($row->image10){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image10 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image10 );
				}
				if ($row->image11){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image11 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image11 );
				}
				if ($row->image12){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image12 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image12 );
				}
				if ($row->image13){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image13 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image13 );
				}
				if ($row->image14){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image14 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image14 );
				}
				if ($row->image15){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image15 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image15 );
				}
				if ($row->image16){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image16 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image16 );
				}
				if ($row->image17){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image17 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image17 );
				}
				if ($row->image18){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image18 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image18 );
				}
				if ($row->image19){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image19 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image19 );
				}
				if ($row->image20){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image20 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image20 );
				}
				if ($row->image21){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image21 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image21 );
				}
				if ($row->image22){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image22 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image22 );
				}
				if ($row->image23){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image23 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image23 );
				}
				if ($row->image24){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$row->image24 );
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$row->image24 );
				}

				if ($row->pdfinfo){
					unlink( $mosConfig_absolute_path.'/components/com_ezautos/pdfs/'.$row->pdfinfo );
				}

			}

			$database->setQuery( "DELETE FROM #__ezautos WHERE expdate < $date1 AND expdate < $date2" );

		}

		if ( !$database->query() ) {
			echo "<script> alert('" . $database->getErrorMsg()
			. "'); window.history.go(-1); </script>\n";
		}

		mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_CLEANDB_SUCCESS );

	} else {

		mosRedirect( "index2.php?option=com_ezautos", _EZAUTOS_CLEANDB_FAIL );
	}
}



function sendalertMail() {
	global $database, $mainframe, $ea_impnum, $ea_expmgmt, $ea_expsys, $ea_expgrace, $ea_bizemail, $ea_bizname;

include(EZADMIN_PATH."/config.ezautos.php");

	$rows = array();

//calculate the grace period cut off


$date1=mktime(0, 0, 0, date("m"), date("d")-$ea_expgrace, date("Y"));
$date2=mktime(0, 0, 0, date("m"), date("d"), date("Y"));


if ( $ea_expmgmt==1 && $ea_expsys==1 ) {

	// Get all emails associated with listings that fall within the grace period


	$query = "SELECT a.*, s.dealer_email AS smail FROM #__ezautos as a"
    . "\n LEFT JOIN #__ezautos_profile as s ON s.mid=a.owner"
	. "\n WHERE a.expdate > $date1 AND a.expdate < $date2"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();


// Find EZ Autos Itemid from the menu table

	$query = "SELECT * from #__menu"
	. "\n WHERE link = 'index.php?option=com_ezautos'"
	;
	$database->setQuery( $query );
	$id = $database->loadResult();
	$myItemid = $id;

//Build the message

	$subject= stripslashes ( $ea_bizname ) .' '. _EZAUTOS_EXPIRY_WARNING;


	$message = _EZAUTOS_EXPIRY_MESSAGE."\r \n";
	$message.=$mosConfig_live_site . "/index.php?option=com_ezautos&Itemid=$myItemid \r \n "._EZAUTOS_EXPIRY_MESSAGE2."\r \n";

//Create the mail headers

	$headers = "From: $ea_bizname\r\n";
	$headers .= "Reply-To: $ea_bizemail\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

//Send the message 

	foreach ($rows as $row) {

	mosMail($ea_bizemail,$ea_bizname,$row->smail,$subject,$message,0);

	}

	$msg = _EZAUTOS_ALERTMSG_PT1.' '.count( $rows ).' '._EZAUTOS_ALERTMSG_PT2;

	// echo $row->id; //testing output of email response

	mosRedirect( 'index2.php?option=com_ezautos', $msg );

	} else {

	mosRedirect( 'index2.php?option=com_ezautos', _EZAUTOS_NOALERT_SENT );

	}
}



    /**************************************************\
                 DELETE IMAGE FUNCTIONS
    \**************************************************/


function deleteProfileImage ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path;

	$database->setQuery( "select dealer_image from #__ezautos_profile where prid=$id" );
	$own=$database->loadResult();

	if ( $id )
	{
	$row=new mosProfile( $database );
	$row->load( $id );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->dealer_image );
	$database->setQuery( "UPDATE #__ezautos_profile SET dealer_image='' WHERE prid=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}
	mosRedirect( "index2.php?option=com_ezautos&task=editprofA&hidemainmenu=1&id=$id", _EZAUTOS_VLDET_IMAGEDELETED );
	}
}


function deleteLogoImage ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path;

	$database->setQuery( "select dealer_logo from #__ezautos_profile where prid=$id" );
	$own=$database->loadResult();

	if ( $id )
	{
	$row=new mosProfile( $database );
	$row->load( $id );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->dealer_logo );
	$database->setQuery( "UPDATE #__ezautos_profile SET dealer_logo='' WHERE prid=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}
	mosRedirect( "index2.php?option=com_ezautos&task=editprofA&hidemainmenu=1&id=$id", _EZAUTOS_VLDET_IMAGEDELETED );
	}
}


function deletePdfPromo ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path;

	$database->setQuery( "select dealer_pdf from #__ezautos_profile where prid=$id" );
	$own=$database->loadResult();

	if ( $id )
	{
	$row=new mosProfile( $database );
	$row->load( $id );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->dealer_pdf );
	$database->setQuery( "UPDATE #__ezautos_profile SET dealer_pdf='' WHERE prid=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}
	mosRedirect( "index2.php?option=com_ezautos&task=editprofA&hidemainmenu=1&id=$id", _EZAUTOS_PROFILE_PDF_DELETED );
	}
}


function deletePdfInfo ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path;

	$database->setQuery( "select pdfinfo from #__ezautos where id=$id" );
	$own=$database->loadResult();

	if ( $id )
	{
	$row=new mosezautos( $database );
	$row->load( $id );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/pdfs/'.$row->pdfinfo );
	$database->setQuery( "UPDATE #__ezautos SET pdfinfo='' WHERE id=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}
	mosRedirect( "index2.php?option=com_ezautos&task=editA&hidemainmenu=1&id=$id", _EZAUTOS_PROFILE_PDF_DELETED );
	}
}


function deletePageTopper ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path;

	$database->setQuery( "select page_topper from #__ezautos_profile where prid=$id" );
	$own=$database->loadResult();

	if ( $id )
	{
	$row=new mosProfile( $database );
	$row->load( $id );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->page_topper );
	$database->setQuery( "UPDATE #__ezautos_profile SET page_topper='' WHERE prid=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}
	mosRedirect( "index2.php?option=com_ezautos&task=editprofA&hidemainmenu=1&id=$id", _EZAUTOS_VLDET_IMAGEDELETED );
	}
}






/* *********************************************************************************
	   					BUILD AND MANAGE THE VEHICLE CATEGORY FUNCTIONS
   ********************************************************************************* */


function viewCatg( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

  # Prepare pagelimit choices
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewcatg{$option}limitstart", 'limitstart', 0 );

  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_catg" );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

  # Do the main database query
	$database->setQuery( "SELECT a.*, g.name AS groupname, u.name as editor"
	. "\n FROM #__ezautos_catg AS a"
	. "\n LEFT JOIN #__groups AS g ON g.id = a.access"
	. "\n LEFT JOIN #__users AS u ON u.id = a.checked_out"
	. "\n ORDER BY a.ordering"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit"
	);
	$rows = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showCatgs( $rows, $pageNav, $option );
}

function editCatg( $categoryid, $option ) {
	global $database, $my;
	$lists = array();

	$row = new mosCatgs( $database );
	$row->load( $categoryid );

  if ( $categoryid ){
    $row->checkout( $my->id );
  }

  # make order list
	$orders = mosGetOrderingList( "SELECT ordering AS value, name AS text"
	. "\nFROM #__ezautos_catg"
	. "\n ORDER BY ordering"
	);
	$orderlist = ezauHTML::selectList( $orders, 'ordering', 'class="inputbox" size="1"',
	'value', 'text', intval( $row->ordering ) );

  # get list of groups
	$database->setQuery( "SELECT id AS value, name AS text FROM #__groups ORDER BY id" );
	$groups = $database->loadObjectList();
	
	$glist = ezauHTML::selectList( $groups, 'access', 'class="inputbox" size="1"',
	'value', 'text', intval( $row->access ) );


  # Imagelist
	$javascript 	= 'onchange="changeDisplayImage();"';
	$directory 		= '/images/stories';
	$lists['image'] = ezauHTML::Images( 'image', $row->image, $javascript, $directory );


	HTML_ezautos::editCatg( $row, $option , $glist , $orderlist, $lists );
}


function saveCatg( $option ) {
	global $database, $my;

	$row = new mosCatgs( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	// sanitize
	$row->cid = intval($row->cid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();
	$row->updateOrder( "" );

	mosRedirect( 'index2.php?option=com_ezautos&task=showcatg', $msg );
}


function cancelCatg( $option ) {
	global $database;

	$row = new mosCatgs( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=showcatg" );
}


function publishCatg( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishcatg' : 'unpublishcatg';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_catg"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE cid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosCatgs( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=showcatg" );
}


function removeCatg( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {

		$query = "SELECT COUNT( id )"
		. "\n FROM #__ezautos"
		. "\n WHERE cid = ".$cid[$i]
		;
		$database->setQuery($query);

		if(($count = $database->loadResult()) == null) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}

		if ($count != 0) {
			mosRedirect( "index2.php?option=com_ezautos&task=showcatg", _EZAUTOS_NOREMOVE );
		} else {


		$catg = new mosCatgs( $database );
		if (!$catg->delete( $cid[$i] )) {
			$msg .= $catg->getError();
		}
	}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=showcatg" );
}


function orderCatg( $uid, $inc, $option ) {
    global $database;

	$fp = new mosCatgs( $database );
	$fp->load( $uid );
	$fp->move( $inc );
	mosRedirect( "index2.php?option=com_ezautos&task=showcatg" );
}


/* *********************************************************************************
   					BUILD AND MANAGE THE VEHICLE MAKE FUNCTIONS
   ********************************************************************************* */


function showMake( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

  # Prepare pagelimit choices
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewmake{$option}limitstart", 'limitstart', 0 );

  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_make" );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );


  # Do the main database query
	$query = "SELECT b.*, u.name as editor FROM #__ezautos_make as b "
	. "\n LEFT JOIN #__users AS u ON u.id = b.checked_out"
    . "\n ORDER BY b.make"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";
	$database->setQuery( $query );

	if(!$result = $database->query()) {
		echo $database->stderr();
		return;
	}
	$rows = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showMake( $option, $rows, $pageNav );
}

// Hrvoje
function showCountry( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;
  # Prepare pagelimit choices
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewcity{$option}limitstart", 'limitstart', 0 );
  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_country" );
	$total = $database->loadResult();
  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );
  # Do the main database query
	$query = "SELECT b.*, u.name as editor FROM #__ezautos_country as b "
	. "\n LEFT JOIN #__users AS u ON u.id = b.checked_out"
    . "\n ORDER BY b.country"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";
	$database->setQuery( $query );
	if(!$result = $database->query()) {
		echo $database->stderr();
		return;
	}
	$rows = $database->loadObjectList();
  # Bring it all to the screen
	HTML_ezautos::showCountry( $option, $rows, $pageNav );
}
//////////////////////////////




function editMake( $makeid, $option ) {
	global $database, $my;

	$row = new mosMake( $database );
	$row->load( $makeid );

  if ( $makeid ){
    $row->checkout( $my->id );
  }

  # Imagelist
	$javascript 	= 'onchange="changeDisplayImage();"';
	$directory 		= '/images/stories';
	$lists['make_image'] = ezauHTML::Images( 'make_image', $row->make_image, $javascript, $directory );


	HTML_ezautos::editMake( $row, $option, $lists );
}


// Hrvoje
function editCountry( $countryid, $option ) {
	global $database, $my;

	$row = new mosCountry( $database );
	$row->load( $countryid );

  if ( $countryid ){
    $row->checkout( $my->id );
  }

  # Imagelist
	$javascript 	= 'onchange="changeDisplayImage();"';
	$directory 		= '/images/stories';
	$lists['country_image'] = ezauHTML::Images( 'country_image', $row->country_image, $javascript, $directory );


	HTML_ezautos::editCountry( $row, $option, $lists );
}
//////




function saveMake( $option ) {
	global $database, $my;

	$row = new mosMake( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	// sanitize
	$row->maid = intval($row->maid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();

	mosRedirect( 'index2.php?option=com_ezautos&task=make', $msg );
}

// Hrvoje
function saveCountry( $option ) {
	global $database, $my;
	$row = new mosCountry( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;
	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	// sanitize
	$row->coid = intval($row->coid);
	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();
	mosRedirect( 'index2.php?option=com_ezautos&task=mancountry', $msg );
}
//////////////////////




function cancelMake( $option ) {
	global $database;

	$row = new mosMake( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=make" );
}


// Hrvoje
function cancelCountry( $option ) {
	global $database;
	$row = new mosCountry( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=mancountry" );
}
/////////////////////////




function publishMake( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishmake' : 'unpublishmake';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_make"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE maid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosMake( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=make" );
}


// Hrvoje
function publishCountry( $cid=null, $publish=1, $option ) {
	global $database, $my;
	$catid = mosGetParam( $_POST, 'catid', array(0) );
	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishcountry' : 'unpublishcountry';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}
	$cids = implode( ',', $cid );
	$query = "UPDATE #__ezautos_country"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE coid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}
	if (count( $cid ) == 1) {
		$row = new mosCountry( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=mancountry" );
}
///////////////////////////






function removeMake( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {

		$query = "SELECT COUNT( moid )"
		. "\n FROM #__ezautos_model"
		. "\n WHERE makeid = ".$cid[$i]
		;
		$database->setQuery($query);

		if(($count = $database->loadResult()) == null) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}

		if ($count != 0) {
			mosRedirect( "index2.php?option=com_ezautos&task=make", _EZAUTOS_NOREMOVE2 );
		} else {


		$makk = new mosMake( $database );
		if (!$makk->delete( $cid[$i] )) {
			$msg .= $makk->getError();
		}
	}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=make" );
}


// Hrvoje
function removeCountry( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {
		$query = "SELECT COUNT( ciid )"
		. "\n FROM #__ezautos_city"
		. "\n WHERE countryid = ".$cid[$i]
		;
		$database->setQuery($query);
		if(($count = $database->loadResult()) == null) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
		if ($count != 0) {
			mosRedirect( "index2.php?option=com_ezautos&task=mancountry", _EZAUTOS_NOREMOVE2 );
		} else {
		$counttry = new mosCountry( $database );
		if (!$counttry->delete( $cid[$i] )) {
			$msg .= $counttry->getError();
		}
	}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=mancountry" );
}
/////////////////////////






/* *********************************************************************************
   					BUILD AND MANAGE THE VEHICLE MODEL FUNCTIONS
   ********************************************************************************* */


function showModel( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

  # Prepare pagelimit choices
	$filter_make2	 	= $mainframe->getUserStateFromRequest( "filter_make2{$option}", 'filter_make2', 0 );
	$order 				= $mainframe->getUserStateFromRequest( "zorder", 'zorder', 'a.id DESC' );

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewauto{$option}limitstart", 'limitstart', 0 );
 
	$where = array();

	if ( $filter_make2 ) {
		$where[] = "a.makeid = '$filter_make2'";
	}

	$orderAllowed = array( 'a.model ASC', 'a.model DESC', 'a.published ASC', 'a.published DESC' );
	if (!in_array( $order, $orderAllowed )) {
		$order = 'a.moid DESC';
	}

  # Get total number of records
	$query = "SELECT COUNT(*) FROM #__ezautos_model AS a ". ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : '' );
	$database->setQuery( $query );

	$total = $database->loadResult();

  # Set up page navigation

    require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
    $pageNav = new mosPageNav( $total, $limitstart, $limit );


  # Do the main database query

	$query = "SELECT a.*, ma.make as makename, u.name AS editor"
	. "\n FROM #__ezautos_model AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.makeid"
	. "\n LEFT JOIN #__users AS u ON u.id = a.checked_out"
	. ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
	. "\n ORDER BY ". $order
	. "\n LIMIT $pageNav->limitstart, $pageNav->limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	$ordering[] = ezauHTML::makeOption( 'a.model ASC', _EZAUTOS_ORDER_LIST19 );
	$ordering[] = ezauHTML::makeOption( 'a.model DESC', _EZAUTOS_ORDER_LIST20 );
	$ordering[] = ezauHTML::makeOption( 'a.published ASC', _EZAUTOS_ORDER_LIST9 );
	$ordering[] = ezauHTML::makeOption( 'a.published DESC', _EZAUTOS_ORDER_LIST10 );

	$javascript = 'onchange="document.adminForm.submit();"';
	$lists['order'] = ezauHTML::selectList( $ordering, 'zorder', 'class="inputbox" size="1"'. $javascript, 'value', 'text', $order );


  # get list of Vehicle Makes for the dropdown filter

	$query = "SELECT ma.maid AS value, ma.make AS text"
	. "\n FROM #__ezautos_make as ma"
	. "\n ORDER BY ma.make"
	;
	$makes[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTMAKEALL );
	$database->setQuery( $query );
	$makes = array_merge( $makes, $database->loadObjectList() );
	$lists['makelist']	= ezauHTML::selectList( $makes, 'filter_make2', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_make2" );


  # Bring it all to the screen
	HTML_ezautos::showModel( $option, $rows, $pageNav, $lists );
}


// Hrvoje
/* *********************************************************************************
   					BUILD AND MANAGE THE CITY FUNCTIONS
   ********************************************************************************* */

function showCity( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

  # Prepare pagelimit choices
	$filter_country2	= $mainframe->getUserStateFromRequest( "filter_country2{$option}", 'filter_country2', 0 );
	$order 				= $mainframe->getUserStateFromRequest( "zorder", 'zorder', 'a.id DESC' );

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewauto{$option}limitstart", 'limitstart', 0 );
 
	$where = array();

	if ( $filter_country2 ) {
		$where[] = "a.countryid = '$filter_country2'";
	}

	$orderAllowed = array( 'a.city ASC', 'a.city DESC', 'a.published ASC', 'a.published DESC' );
	if (!in_array( $order, $orderAllowed )) {
		$order = 'a.ciid DESC';
	}

  # Get total number of records
	$query = "SELECT COUNT(*) FROM #__ezautos_city AS a ". ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : '' );
	$database->setQuery( $query );

	$total = $database->loadResult();

  # Set up page navigation

    require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
    $pageNav = new mosPageNav( $total, $limitstart, $limit );


  # Do the main database query

	$query = "SELECT a.*, ma.country as countryname, u.name AS editor"
	. "\n FROM #__ezautos_city AS a"
    . "\n LEFT JOIN #__ezautos_country as ma ON ma.coid=a.countryid"
	. "\n LEFT JOIN #__users AS u ON u.id = a.checked_out"
	. ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
	. "\n ORDER BY ". $order
	. "\n LIMIT $pageNav->limitstart, $pageNav->limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	$ordering2[] = ezauHTML::makeOption( 'a.city ASC', _EZAUTOS_ORDER_LIST19 );
	$ordering2[] = ezauHTML::makeOption( 'a.city DESC', _EZAUTOS_ORDER_LIST20 );
	$ordering2[] = ezauHTML::makeOption( 'a.published ASC', _EZAUTOS_ORDER_LIST9 );
	$ordering2[] = ezauHTML::makeOption( 'a.published DESC', _EZAUTOS_ORDER_LIST10 );

	$javascript = 'onchange="document.adminForm.submit();"';
	$lists['order'] = ezauHTML::selectList( $ordering2, 'zorder', 'class="inputbox" size="1"'. $javascript, 'value', 'text', $order );


  # get list of Vehicle Makes for the dropdown filter

	$query = "SELECT ma.coid AS value, ma.country AS text"
	. "\n FROM #__ezautos_country as ma"
	. "\n ORDER BY ma.country"
	;
	$countries[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTMAKEALL );
	$database->setQuery( $query );
	$countries = array_merge( $countries, $database->loadObjectList() );
	$lists['countrylist']	= ezauHTML::selectList( $countries, 'filter_country2', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_country2" );


  # Bring it all to the screen
	HTML_ezautos::showCity( $option, $rows, $pageNav, $lists );
}

//////////////////////////




function editModel( $modelid, $option ) {
	global $database, $my;

	$row = new mosModel( $database );
	$row->load( $modelid );

  if ( $modelid ){
    $row->checkout( $my->id );
  }

 # Build Make select list

    $sql = "SELECT a.maid as value, a.make as text FROM #__ezautos_make AS a ORDER by a.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['makeid'] = ezauHTML::selectList( $mtypelist, 'makeid', 'class="inputbox" size="1"','value', 'text', $row->makeid);


	HTML_ezautos::editModel( $row, $option, $lists );
}


//Hrvoje
function editCity( $cityid, $option ) {
	global $database, $my;

	$row = new mosCity( $database );
	$row->load( $cityid );

  if ( $cityid ){
    $row->checkout( $my->id );
  }

 # Build Country select list

    $sql = "SELECT a.coid as value, a.country as text FROM #__ezautos_country AS a ORDER by a.country";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['countryid'] = ezauHTML::selectList( $mtypelist, 'countryid', 'class="inputbox" size="1"','value', 'text', $row->countryid);


	HTML_ezautos::editCity( $row, $option, $lists );
}
///////////////////////




function saveModel( $option ) {
	global $database;

	$row = new mosModel( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	// sanitize
	$row->moid = intval($row->moid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();

	mosRedirect( 'index2.php?option=com_ezautos&task=model', $msg );
}


// Hrvoje
function saveCity( $option ) {
	global $database;

	$row = new mosCity( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	// sanitize
	$row->ciid = intval($row->ciid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();

	mosRedirect( 'index2.php?option=com_ezautos&task=mancity', $msg );
}
////////////////////////////





function cancelModel( $option ) {
	global $database;

	$row = new mosModel( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=model" );
}

// Hrvoje
function cancelCity( $option ) {
	global $database;

	$row = new mosCity( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=mancity" );
}
/////////////////////




function publishModel( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishmodel' : 'unpublishmodel';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_model"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE moid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosModel( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=model" );
}


//Hrvoje
function publishCity( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishcity' : 'unpublishcity';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_city"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE ciid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosCity( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=mancity" );
}
////////////////////////////




function removeModel( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {

		$query = "SELECT COUNT( id )"
		. "\n FROM #__ezautos"
		. "\n WHERE model = ".$cid[$i]
		;
		$database->setQuery($query);

		if(($count = $database->loadResult()) == null) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}

		if ($count != 0) {
			mosRedirect( "index2.php?option=com_ezautos&task=model", _EZAUTOS_NOREMOVE );
		} else {


		$modd = new mosModel( $database );
		if (!$modd->delete( $cid[$i] )) {
			$msg .= $modd->getError();
		}
	}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=model" );
}



// Hrvoje
function removeCity( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {

		$query = "SELECT COUNT( id )"
		. "\n FROM #__ezautos"
		. "\n WHERE city = ".$cid[$i]
		;
		$database->setQuery($query);

		if(($count = $database->loadResult()) == null) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}

		if ($count != 0) {
			mosRedirect( "index2.php?option=com_ezautos&task=mancity", _EZAUTOS_NOREMOVE );
		} else {


		$citt = new mosCity( $database );
		if (!$citt->delete( $cid[$i] )) {
			$msg .= $citt->getError();
		}
	}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=mancity" );
}
//////////////////////////////////








/* *********************************************************************************
	   					BUILD AND MANAGE THE ENGINE CAPACITY FUNCTIONS
   ********************************************************************************* */


function showEnginesize( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

  # Prepare pagelimit choices
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewengine{$option}limitstart", 'limitstart', 0 );

  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_enginesize" );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );


  # Do the main database query
	$query = "SELECT b.*, u.name as editor FROM #__ezautos_enginesize as b "
	. "\n LEFT JOIN #__users AS u ON u.id = b.checked_out"
    . "\n ORDER BY b.ordering"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";
	$database->setQuery( $query );

	if(!$result = $database->query()) {
		echo $database->stderr();
		return;
	}
	$rows = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showEnginesize( $option, $rows, $pageNav );
}


function editEnginesize( $enginesizeid, $option ) {
	global $database, $my;

	$row = new mosEnginesize( $database );
	$row->load( $enginesizeid );

  if ( $enginesizeid ){
    $row->checkout( $my->id );
  }

  # make order list
	$orders = mosGetOrderingList( "SELECT ordering AS value, engine AS text"
	. "\nFROM #__ezautos_enginesize"
	. "\n ORDER BY ordering"
	);
	$orderlist = ezauHTML::selectList( $orders, 'ordering', 'class="inputbox" size="1"',
	'value', 'text', intval( $row->ordering ) );

	HTML_ezautos::editEnginesize( $row, $option, $orderlist );
}


function saveEnginesize( $option ) {
	global $database;

	$row = new mosEnginesize( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	// sanitize
	$row->esid = intval($row->esid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();
	$row->updateOrder( "" );

	mosRedirect( 'index2.php?option=com_ezautos&task=enginesize', $msg );
}


function cancelEnginesize( $option ) {
	global $database;

	$row = new mosEnginesize( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=enginesize" );
}


function publishEnginesize( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishenginesize' : 'unpublishenginesize';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_enginesize"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE esid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosEnginesize( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=enginesize" );
}


function removeEnginesize( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {
		$engg = new mosEnginesize( $database );
		if (!$engg->delete( $cid[$i] )) {
			$msg .= $engg->getError();
		}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=enginesize" );
}


function orderEnginesize( $uid, $inc, $option ) {
	global $database;

	$fp = new mosEnginesize( $database );
	$fp->load( $uid );
	$fp->move( $inc );
	mosRedirect( "index2.php?option=com_ezautos&task=enginesize" );
}


/* *********************************************************************************
	   					BUILD AND MANAGE THE PRICE RANGE LISTINGS
   ********************************************************************************* */


function showPrice( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

  # Prepare pagelimit choices
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewprice{$option}limitstart", 'limitstart', 0 );

  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_price" );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );


  # Do the main database query
	$query = "SELECT b.*, u.name as editor FROM #__ezautos_price as b "
	. "\n LEFT JOIN #__users AS u ON u.id = b.checked_out"
    . "\n ORDER BY b.ordering"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";
	$database->setQuery( $query );

	if(!$result = $database->query()) {
		echo $database->stderr();
		return;
	}
	$rows = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showPrice( $option, $rows, $pageNav );
}


function editPrice( $priceid, $option ) {
	global $database, $my;

	$row = new mosPrice( $database );
	$row->load( $priceid );

  if ( $priceid ){
    $row->checkout( $my->id );
  }

  # make order list
	$orders = mosGetOrderingList( "SELECT a.ordering AS value, a.range AS text"
	. "\n FROM #__ezautos_price AS a"
	. "\n ORDER BY a.ordering"
	);
	$orderlist = ezauHTML::selectList( $orders, 'ordering', 'class="inputbox" size="1"',
	'value', 'text', intval( $row->ordering ) );

	HTML_ezautos::editPrice( $row, $option, $orderlist );
}


function savePrice( $option ) {
	global $database;

	$row = new mosPrice( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();
	$row->updateOrder( "" );

	mosRedirect( 'index2.php?option=com_ezautos&task=price', $msg );
}


function cancelPrice( $option ) {
	global $database;

	$row = new mosPrice( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=price" );
}


function publishPrice( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishprc' : 'unpublishprc';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_price"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE pid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosPrice( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=price" );
}


function removePrice( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {
		$catg = new mosPrice( $database );
		if (!$catg->delete( $cid[$i] )) {
			$msg .= $catg->getError();
		}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=price" );
}


function orderPrice( $uid, $inc, $option ) {
	global $database;

	$fp = new mosPrice( $database );
	$fp->load( $uid );
	$fp->move( $inc );

	mosRedirect( "index2.php?option=com_ezautos&task=price" );
}



/* *********************************************************************************
	   					BUILD AND MANAGE THE FEATURES LIST
   ********************************************************************************* */


function showFeatures( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

  # Prepare pagelimit choices
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewprice{$option}limitstart", 'limitstart', 0 );

  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_features" );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );


  # Do the main database query
	$query = "SELECT b.* FROM #__ezautos_features as b "
    . "\n ORDER BY b.ordering"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";
	$database->setQuery( $query );

	if(!$result = $database->query()) {
		echo $database->stderr();
		return;
	}
	$rows = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showFeatures( $option, $rows, $pageNav );
}


function saveFeature( $option ) {
	global $database;

	$row = new mosFeatures( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->updateOrder( "" );

	mosRedirect( 'index2.php?option=com_ezautos&task=features', $msg );
}


function removeFeature( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {
		$feats = new mosFeatures( $database );
		if (!$feats->delete( $cid[$i] )) {
			$msg .= $feats->getError();
		}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=features" );
}


function orderFeature( $uid, $inc, $option ) {
	global $database;

	$fp = new mosFeatures( $database );
	$fp->load( $uid );
	$fp->move( $inc );

	mosRedirect( "index2.php?option=com_ezautos&task=features" );
}




/* *********************************************************************************
	   					BUILD AND MANAGE THE LEAD LISTINGS
   ********************************************************************************* */


function showLeads( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

include(EZADMIN_PATH."/config.ezautos.php");

  # Prepare pagelimit choices

if ($ea_makefilt) {
	$filter_make	 	= $mainframe->getUserStateFromRequest( "filter_make{$option}", 'filter_make', 0 );
}
if ($ea_modfilt) {
	$filter_model	 	= $mainframe->getUserStateFromRequest( "filter_model{$option}", 'filter_model', 0 );
}
	$filter_category 	= $mainframe->getUserStateFromRequest( "filter_category{$option}", 'filter_category', 0 );

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewcli{$option}limitstart", 'limitstart', 0 );

	$where = array();


if ($ea_makefilt) {
	if ( $filter_make ) {
		$where[] = "a.make = '$filter_make'";
	}
}
if ($ea_modfilt) {
	if ( $filter_model ) {
		$where[] = "a.model = '$filter_model'";
	}
}
	if ( $filter_category ) {
		$where[] = "a.cid = '$filter_category'";
	}


  # Get total number of records

	$query = "SELECT COUNT(*) FROM #__ezautos_leads AS a ". ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : '' );
	$database->setQuery( $query );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

  # Do the main database query
	$query = "SELECT a.*, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname, cc.name AS category, u.name AS editor"
	. "\n FROM #__ezautos_leads AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	
	
	. "\n LEFT JOIN #__users AS u ON u.id = a.checked_out"
	. ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
	. "\n ORDER BY a.lid DESC"
	. "\n LIMIT $pageNav->limitstart, $pageNav->limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

  # get list of Vehicle categories for the dropdown filter

	$query = "SELECT cc.cid AS value, cc.name AS text"
	. "\n FROM #__ezautos_catg as cc"
	. "\n ORDER BY cc.ordering"
	;
	$categorys[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTTYPEALL );
	$database->setQuery( $query );
	$categorys = array_merge( $categorys, $database->loadObjectList() );
	$lists['cid']	= ezauHTML::selectList( $categorys, 'filter_category', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_category" );


if ($ea_makefilt) {

  # get list of Vehicle Makes for the dropdown filter

	$query = "SELECT ma.maid AS value, ma.make AS text"
	. "\n FROM #__ezautos_make as ma"
	. "\n ORDER BY ma.make"
	;
	$makes[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTMAKEALL );
	$database->setQuery( $query );
	$makes = array_merge( $makes, $database->loadObjectList() );
	$lists['make']	= ezauHTML::selectList( $makes, 'filter_make', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_make" );

}

if ($ea_modfilt) {


  # get list of Vehicle Models for the dropdown filter

	$query = "SELECT mo.moid AS value, mo.model AS text"
	. "\n FROM #__ezautos_model as mo"
	. "\n ORDER BY mo.model"
	;
	$models[] = ezauHTML::makeOption( '0', _EZAUTOS_LISTINGS_SORTMODELALL );
	$database->setQuery( $query );
	$models = array_merge( $models, $database->loadObjectList() );
	$lists['model']	= ezauHTML::selectList( $models, 'filter_model', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_model" );

}


  # Bring it all to the screen
	HTML_ezautos::showLeads( $option, $rows, $lists, $pageNav );
}


function editLeads( $leadid, $option ) {
	global $database, $my, $mosConfig_absolute_path, $mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");

includeAjax($option);


	$row = new mosLeads( $database );
	$row->load( $leadid );

  if ( $leadid ){
    $row->checkout( $my->id );
  }


  # Build 'where did you find us' select list

	$sourceit[] = ezauHTML::makeOption( _EZAUTOS_LEADS_SOURCE5, _EZAUTOS_LEADS_SOURCE5 );
  	$sourceit[] = ezauHTML::makeOption( _EZAUTOS_LEADS_SOURCE2, _EZAUTOS_LEADS_SOURCE2 );
  	$sourceit[] = ezauHTML::makeOption( _EZAUTOS_LEADS_SOURCE3, _EZAUTOS_LEADS_SOURCE3 );
  	$sourceit[] = ezauHTML::makeOption( _EZAUTOS_LEADS_SOURCE4, _EZAUTOS_LEADS_SOURCE4 );
  	$sourceit[] = ezauHTML::makeOption( _EZAUTOS_LEADS_SOURCE1, _EZAUTOS_LEADS_SOURCE1 );
  
  	$lists['source'] = ezauHTML::selectList( $sourceit, 'source', 'class="widedropbox" size="1"' , 'value', 'text', $row->source );

 # Build Make select list - Model select will be built by ajax
    $sql = "SELECT f.maid as value, f.make as text FROM #__ezautos_make AS f ORDER by f.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['make'] = ezauHTML::selectList( $mtypelist, 'make', 'class="widedropbox" id="make" size="1" onchange="getDropModelList(this,1)" ','value', 'text', $row->make);

if($row->make){
    $sql = "SELECT g.moid as value, g.model as text FROM #__ezautos_model AS g WHERE g.makeid=".$row->make." ORDER by g.model";
}else{
   $sql = "SELECT g.moid as value, g.model as text FROM #__ezautos_model AS g ORDER by g.model";
}
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mltypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MODEL );
    if($row->make){
    $mltypelist = array_merge( $mltypelist, $database->loadObjectList() );
    }
    $lists['model'] = ezauHTML::selectList( $mltypelist, 'model', 'class="widedropbox" id="model" size="1" READONLY ','value', 'text', $row->model);
	
	
	
	
		// Hrvoje
	 # Build Country select list - City select will be built by ajax
    $sql = "SELECT hz.coid as value, hz.country as text FROM #__ezautos_country AS hz ORDER by hz.country";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $cotypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_COUNTRY );
    $cotypelist = array_merge( $cotypelist, $database->loadObjectList() );
    $lists['country'] = ezauHTML::selectList( $cotypelist, 'country', 'class="widedropbox" id="country" size="1" onchange="getDropCityList6(this,1)" ','value', 'text', $row->country);
	if($row->country){
		$sql = "SELECT mhz.ciid as value, mhz.city as text FROM #__ezautos_city AS mhz WHERE mhz.countryid=".$row->country." ORDER by mhz.city";
	}else{
	   $sql = "SELECT mhz.ciid as value, mhz.city as text FROM #__ezautos_city AS mhz ORDER by mhz.city";
	}
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $citypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_CITY );
    if($row->country){
    $citypelist = array_merge( $citypelist, $database->loadObjectList() );
    }
    $lists['city'] = ezauHTML::selectList( $citypelist, 'city', 'class="widedropbox" id="city" size="1" READONLY ','value', 'text', $row->city);
	
	
	
	

	


 # Build Vehicle Category select list

	$sql	= "SELECT h.cid as value, h.name as text FROM #__ezautos_catg AS h ORDER by h.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$ptypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_CATG );
	$ptypelist = array_merge( $ptypelist, $database->loadObjectList() );
	$lists['cid'] = ezauHTML::selectList( $ptypelist, 'cid', 'class="widedropbox" size="1"','value', 'text', $row->cid);


  # Build Max Price select list

	$sql	= "SELECT b.range as value, b.display as text FROM #__ezautos_price AS b WHERE b.published=1 ORDER by b.ordering";
	$database->setQuery($sql);
	$bprice2 = $database->loadObjectList();

	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$budgetit[] = ezauHTML::makeOption( '', _EZAUTOS_SEARCH_MAXPRI );
if ($bprice2){
	$budgetit = array_merge( $budgetit, $database->loadObjectList() );
}
	$lists['maxprice'] = ezauHTML::selectList( $budgetit, 'maxprice', 'class="widedropbox" size="1"','value', 'text', $row->maxprice);


  	$lists['published'] = ezauHTML::yesnoRadioList( 'published', 'class="inputbox"', $row->published );
  	$lists['html'] = ezauHTML::yesnoRadioList( 'html', 'class="inputbox"', $row->html );
  	$lists['listwanted'] = ezauHTML::yesnoRadioList( 'listwanted', 'class="inputbox"', $row->listwanted );


  # Build min year select list

	$yearlist1 = array();
		$yearlist1[] = ezauHTML::makeOption( '0', _EZAUTOS_EARLIEST_YEAR );
	for($i=$ea_minyear;$i<$ea_maxyear+1;$i++){
		$yearlist1[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['minyear'] = ezauHTML::selectList($yearlist1, 'minyear', 'class="widedropbox" size="1"', 'value', 'text', $row->minyear);

  # Build max year select list

	$yearlist2 = array();
		$yearlist2[] = ezauHTML::makeOption( '0', _EZAUTOS_LATEST_YEAR );
	for($i=$ea_maxyear;$i>$ea_minyear-1;$i--){
		$yearlist2[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['maxyear'] = ezauHTML::selectList($yearlist2, 'maxyear', 'class="widedropbox" size="1"', 'value', 'text', $row->maxyear);


	HTML_ezautos::editLeads( $row, $lists, $option );
}


function saveLeads( $option ) {
	global $database, $my;

	$row = new mosLeads( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	$row->date = mktime();

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	$row->checkin();

	mosRedirect( 'index2.php?option=com_ezautos&task=leads', $msg );
}


function publishLeads( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishleads' : 'unpublishleads';
		echo "<script> alert(_EZAUTOS_GENERIC_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_leads"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE lid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosLeads( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=leads" );
}


function cancelLeads( $option ) {
	global $database;

	$row = new mosLeads( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=leads" );
}


function removeLeads( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {
		$lead = new mosLeads( $database );
		if (!$lead->delete( $cid[$i] )) {
			$msg .= $lead->getError();
		}
	}
	mosRedirect( "index2.php?option=com_ezautos&task=leads" );
}


function sendLeadSMS ( $option ) {

	$id = $_GET['id'];
	$user = $_GET['user'];
	$password = $_GET['password'];
	$to = $_GET['to'];
	$from = $_GET['from'];
	$text = urlencode( $_GET['text'] );
	$api_id = $_GET['api'];
	$baseurl ="http://api.clickatell.com";

	$lid = $id;

	// auth call
	$url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
	// do auth call
	$ret = file($url);
	// split our response. return string is on first line of the data returned
	$sess = split(":",$ret[0]);
	if ($sess[0] == "OK") {
	$sess_id = trim($sess[1]); // remove any whitespace
	$url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$to&text=$text&from=$from";
	// do sendmsg call
	$ret = file($url);
	$send = split(":",$ret[0]);
	if ($send[0] == "ID")
	echo _EZAUTOS_SELLER_SMS11 ."<br> "._EZAUTOS_SELLER_SMS12 ." : ". $send[1];
	else
	echo _EZAUTOS_SELLER_SMS13;
	} else {
	echo _EZAUTOS_SELLER_SMS14 ." : ". $ret[0];
	exit();
	}

	mosRedirect( "index2.php?option=com_ezautos&task=editleadsA&hidemainmenu=1&id=$lid", _EZAUTOS_SELLER_SMS25 );

}



/* *********************************************************************************
	   					BUILD AND MANAGE THE SELLER PROFILE FUNCTIONS
   ********************************************************************************* */


function viewProf( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;

include(EZADMIN_PATH."/config.ezautos.php");

  # Prepare pagelimit choices
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewprofile{$option}limitstart", 'limitstart', 0 );

  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_profile AS b" );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

if ($ea_usecount) {

	$query = "SELECT a.*, count(b.id) AS nproperties, u.name as editor "
	. "\n FROM #__ezautos_profile AS a"
	. "\n LEFT JOIN #__ezautos AS b ON a.mid = b.owner"
	. "\n LEFT JOIN #__users AS u ON u.id = a.checked_out"
	. "\n GROUP BY a.mid"
	. "\n ORDER BY a.mid ASC"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";
	$database->setQuery( $query );

} else {

  # Do the main database query
	$query = "SELECT a.*, u.name as editor "
	. "\n FROM #__ezautos_profile AS a"
	. "\n LEFT JOIN #__users AS u ON u.id = a.checked_out"
	. "\n GROUP BY a.mid"
	. "\n ORDER BY a.mid ASC"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";
	$database->setQuery( $query );

}

	if(!$result = $database->query()) {
		echo $database->stderr();
		return;
	}
	$rows = $database->loadObjectList();


  # Bring it all to the screen
	HTML_ezautos::showProf( $option, $rows, $pageNav );
}


function editProf( $profileid, $option ) {
	global $database, $my, $mosConfig_absolute_path, $mosConfig_live_site;
	$lists = array();

	$row = new mosProfile( $database );
	$row->load( $profileid );

  if ( $profileid ){
    $row->checkout( $my->id );
  }

  # Build Dealer/seller Profile select list

	$sql	= "SELECT n.id as value, n.username as text FROM #__users AS n ORDER by n.username ASC";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$dealerlist[] = ezauHTML::makeOption( '0', _EZAUTOS_SELECT_SELLER );
	$dealerlist = array_merge( $dealerlist, $database->loadObjectList() );
	$lists['mid'] = ezauHTML::selectList( $dealerlist, 'mid', 'class="inputbox" size="1"','value', 'text', $row->mid);


	// make the lists
	$lists['published'] 	= ezauHTML::yesnoRadioList('published', 'class="inputbox"', $row->published);
	$lists['show_sms'] 	= ezauHTML::yesnoRadioList('show_sms', 'class="inputbox"', $row->show_sms);
	$lists['show_addy'] 	= ezauHTML::yesnoRadioList('show_addy', 'class="inputbox"', $row->show_addy);

	$lists['dealer_exempt'] = ezauHTML::yesnoRadioList('dealer_exempt', 'class="inputbox"', $row->dealer_exempt);
	$lists['feat_upgr'] 	= ezauHTML::yesnoRadioList('feat_upgr', 'class="inputbox"', $row->feat_upgr);
	$lists['publish_own'] 	= ezauHTML::yesnoRadioList('publish_own', 'class="inputbox"', $row->publish_own);
	$lists['reset_own'] 	= ezauHTML::yesnoRadioList('reset_own', 'class="inputbox"', $row->reset_own);


  $mapFiles = mosReadDirectory( $mosConfig_absolute_path."/components/com_ezautos/profiles/" );
  $imagedropdown = array( ezauHTML::makeOption( '', _EZAUTOS_VLDET_CHOOSEIMAGE) );
  foreach ($mapFiles as $file) {
    if (eregi( "bmp|gif|jpg|png", $file )) {
      $imagedropdown[] = ezauHTML::makeOption( $file );
    }
  }

  $list['dealer_image'] = ezauHTML::selectList( $imagedropdown, 'dealer_image', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].dealer_image.options[selectedIndex].value!='') {document.dealer_imageprev.src='".$mosConfig_live_site."/components/com_ezautos/profiles/' + document.forms[0].dealer_image.options[selectedIndex].value} else {document.dealer_imageprev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->dealer_image );
  $list['dealer_logo'] = ezauHTML::selectList( $imagedropdown, 'dealer_logo', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].dealer_logo.options[selectedIndex].value!='') {document.dealer_logoprev.src='".$mosConfig_live_site."/components/com_ezautos/profiles/' + document.forms[0].dealer_logo.options[selectedIndex].value} else {document.dealer_logoprev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->dealer_logo );
  $list['dealer_pdf'] = ezauHTML::selectList( $imagedropdown, 'dealer_pdf', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].dealer_pdf.options[selectedIndex].value!='') {document.dealer_pdfprev.src='".$mosConfig_live_site."/components/com_ezautos/profiles/' + document.forms[0].dealer_pdf.options[selectedIndex].value} else {document.dealer_pdfprev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->dealer_pdf );
  $list['page_topper'] = ezauHTML::selectList( $imagedropdown, 'page_topper', "class=\"inputbox\" size=\"1\""  . " onchange=\"javascript:if (document.forms[0].page_topper.options[selectedIndex].value!='') {document.page_topperprev.src='".$mosConfig_live_site."/components/com_ezautos/profiles/' + document.forms[0].page_topper.options[selectedIndex].value} else {document.page_topperprev.src='../images/M_images/blank.png'}\"",  'value', 'text', $row->page_topper );


	HTML_ezautos::editProf( $row, $option, $lists, $list );
}


function saveProf( $option ) {
	global $database, $my, $ea_approf, $ea_mapapi;

include(EZADMIN_PATH."/config.ezautos.php");

	$row = new mosProfile( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

// Google Maps stuff added by Syd L. Bolton 

$mapaddress=str_replace(' ', '%20', $_REQUEST['dealer_address1'] . ' ' . $_REQUEST['dealer_address2'] . ', ' . $_REQUEST['dealer_locality'] . ', ' . $_REQUEST['dealer_state'] . ', ' . $_REQUEST['dealer_pcode'] . ', ' . $_REQUEST['dealer_country']); 


$key=$ea_mapapi; 
$file = "http://maps.google.com/maps/geo?q=$mapaddress&output=xml&key=$key"; 
$longitude=''; 
$latitude=''; 

if ($fp = fopen($file, "r")) { 

	$coord='<coordinates>'; 
	$coordlen=strlen($coord); 
	$r = ""; 
	while ($data = fread($fp, 32768)) { 
		$r .= $data; 
	} do { 
		$foundit=stristr($r,$coord); 
		$startpos=strpos($r,$coord); 
		if (strlen($foundit) > 0) { 
			$mypos=strpos($foundit,"</coordinates>"); 
			$mycoord=trim(substr($foundit,$coordlen,$mypos-$coordlen)); 
			list($longitude, $latitude) = split(',', $mycoord); 
			$r=substr($r,$startpos+10); 
		} 
	} 

	while (strlen($foundit) > 0); 
	fclose($fp); 
} 

if ($latitude != '') $row->dealer_declat = $latitude; if ($longitude != '') $row->dealer_declong = $longitude; 

//end Syd's Google Map stuff 

	// sanitize
	$row->prid = intval($row->prid);
	$row->mid = intval($row->mid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if($_REQUEST['dealer_image']){$row->dealer_image=$_REQUEST['dealer_image'];}
	if($_FILES['dealer_imageupload']['name']){  $row->dealer_image=saveProfileUpload($_FILES['dealer_imageupload']['name'],$_FILES['dealer_imageupload']['type'],$_FILES['dealer_imageupload']['tmp_name']); }

	if($_REQUEST['dealer_logo']){$row->dealer_logo=$_REQUEST['dealer_logo'];}
	if($_FILES['dealer_logoupload']['name']){  $row->dealer_logo=saveLogoUpload($_FILES['dealer_logoupload']['name'],$_FILES['dealer_logoupload']['type'],$_FILES['dealer_logoupload']['tmp_name']); }

	if($_REQUEST['dealer_pdf']){$row->dealer_pdf=$_REQUEST['dealer_pdf'];}
	if($_FILES['dealer_pdfupload']['name']){  $row->dealer_pdf=savePdfPromo($_FILES['dealer_pdfupload']['name'],$_FILES['dealer_pdfupload']['type'],$_FILES['dealer_pdfupload']['tmp_name']); }

	if($_REQUEST['page_topper']){$row->page_topper=$_REQUEST['page_topper'];}
	if($_FILES['page_topperupload']['name']){  $row->page_topper=saveTopperUpload($_FILES['page_topperupload']['name'],$_FILES['page_topperupload']['type'],$_FILES['page_topperupload']['tmp_name']); }


	// code cleaner for xhtml transitional compliance
	$row->dealer_bio = str_replace( '<br>', '<br />', $row->dealer_bio );


	if (!$row->store()) {
		echo "<script> alert('"._EZAUTOS_DUPLICATE_PROFILE_ERROR."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();

	mosRedirect( 'index2.php?option=com_ezautos&task=profiles', $msg );
}


function cancelProf( $option ) {
	global $database;

	$row = new mosProfile( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=profiles" );
}


function removeProf( $id, $option ) {
    global $database, $mosConfig_absolute_path;

	$database->setQuery( "select * from #__ezautos_profile where prid=" . intval( $id ) );
	$doit=$database->loadResult();

	if ( $id )
	{
	$row=new mosProfile( $database );
	$row->load( $id );

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->dealer_image );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->dealer_logo );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->dealer_pdf );

	$database->setQuery( "DELETE FROM #__ezautos_profile WHERE prid=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}

	mosRedirect( 'index2.php?option=com_ezautos&amp;task=profiles' );
	}
}



function publishProf( $cid=null, $publish=1, $option ) {
	global $database, $my;

	$catid = mosGetParam( $_POST, 'catid', array(0) );

	if (!is_array( $cid ) || count( $cid ) < 1) {
		$action = $publish ? 'publishprofile' : 'unpublishprofile';
		echo "<script> alert(_EZAUTOS_GENERAL_ERROR1 '$action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode( ',', $cid );

	$query = "UPDATE #__ezautos_profile"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE prid IN ( $cids )"
	. "\n AND ( checked_out = 0 OR ( checked_out = $my->id ) )"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	if (count( $cid ) == 1) {
		$row = new mosProfile( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=com_ezautos&task=profiles" );
}





/* *********************************************************************************
				BUILD AND MANAGE THE CONTENT FUNCTIONS
   ********************************************************************************* */


function showContent( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;


  # Prepare pagelimit choices

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewcontent{$option}limitstart", 'limitstart', 0 );

  # get the total number of records
	$database->setQuery( "SELECT count(*) FROM #__ezautos_content" );
	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

  # Do the main database query
	$query = "SELECT b.*, u.name as editor FROM #__ezautos_content as b "
	. "\n LEFT JOIN #__users AS u ON u.id = b.checked_out"
    . "\n ORDER BY b.contid"
	. "\n LIMIT $pageNav->limitstart, $pageNav->limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


  # Bring it all to the screen
	HTML_ezautos::showContent( $option, $rows, $pageNav );
}


function editContent( $conid, $option ) {
	global $database, $my;
	$lists = array();

	$row = new mosezContent( $database );
	$row->load( $conid );

  if ( $conid ){
    $row->checkout( $my->id );
  }

	HTML_ezautos::editContent( $row, $option );
}



function saveContent( $option ) {
	global $database, $my;

	$row = new mosezContent( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	// sanitize
	$row->contid = intval($row->contid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }


	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();

	mosRedirect( 'index2.php?option=com_ezautos&task=content', $msg );
}


function cancelContent( $option ) {
	global $database;

	$row = new mosezContent( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=content" );
}





/* *********************************************************************************
				BUILD AND MANAGE THE UPLOADED IMAGES AND FILES
   ********************************************************************************* */


function deleteImg ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $ea_imagedirectory;

include(EZADMIN_PATH."/config.ezautos.php");


	if ( $id )
	{

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$id );
	unlink( $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$id );


	mosRedirect( "index2.php?option=com_ezautos&task=listimages", _EZAUTOS_LISTING_IMGDELETED );
	}
}



function deleteProfFiles ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path;

include(EZADMIN_PATH."/config.ezautos.php");


	if ( $id )
	{

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$id );


	mosRedirect( "index2.php?option=com_ezautos&task=profaddons", _EZAUTOS_IMGMGR_FILEDELETED );
	}
}


function deletePropPDFs ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path;

include(EZADMIN_PATH."/config.ezautos.php");


	if ( $id )
	{

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/pdfs/'.$id );


	mosRedirect( "index2.php?option=com_ezautos&task=proppdfs", _EZAUTOS_IMGMGR_FILEDELETED );
	}
}



function listImages( $option ) {
	global $my, $database, $mainframe, $mosConfig_absolute_path, $ea_imagedirectory;

include(EZADMIN_PATH."/config.ezautos.php");

?>

<form action="index2.php" method="post" name="adminForm">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_IMGMGR_PAGETITLE;?></div></td>
		</tr>
	</table>


    <table cellpadding="4" cellspacing="0" border="0" width="750" class="adminlist">
		<thead>
		<tr>
			<th width='250' align="left"><?php echo _EZAUTOS_IMGMGR_IMGNAME;?></th>
			<th width='200' align='center'><?php echo _EZAUTOS_IMGMGR_DIMENSIONS;?></th>
			<th width='100' align='center'><?php echo _EZAUTOS_IMGMGR_SIZE;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_ASSOCID;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_DELIFUNUSED;?></th>
			<th align='center'> </th>
		</tr>
		</thead>

	<?php

	// define the absolute directory path
	$dirPath = $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory;

	// open the directory and make sure it's open
	if ($handle = opendir($dirPath)) {

		// read through the directory contents
		while (false !== ($file = readdir($handle))) {

			// don't worry about the current or parent directory
			if ($file != "." && $file != "..") {
				if (is_dir("$dirPath/$file")) {
					// echo "[$file]<br>"; // don't do anything with subdirectories
				} else {

					//don't show the placeholder image or index file
					if ($file != "nothumb.gif") {
						if ($file != "index.php") {

							//get the image sizes and file size
							$imginfo = getimagesize("$dirPath/$file");
							$imgsizeinfo = filesize("$dirPath/$file");

							// height/width
							$srcWidth = $imginfo[0];
							$srcHeight = $imginfo[1];

							# Do the main database query to match images with those in use

							$query = "SELECT id FROM #__ezautos"
							."\n WHERE image1='$file' OR image2='$file' OR image3='$file' OR image4='$file' OR image5='$file' OR image6='$file' 
							OR image7='$file' OR image8='$file' OR image9='$file' OR image10='$file' OR image11='$file' OR image12='$file' 
							OR image13='$file' OR image14='$file' OR image15='$file' OR image16='$file' OR image17='$file' OR image18='$file' 
							OR image19='$file' OR image20='$file' OR image21='$file' OR image22='$file' OR image23='$file' OR image24='$file'"
	;
							$database->setQuery( $query );
							$liveimages = $database->loadResult();

							//show a delete link if the image is not listed in the database
							if (!$liveimages){

							?>

							<tr>
								<td width='250' align="left"><?php echo $file;?></th>
								<td width='200' align='center'><?php echo $srcWidth.' x '.$srcHeight;?></th>
								<td width='100' align='center'><?php echo $imgsizeinfo.' '._EZAUTOS_IMGMGR_BYTES;?></th>

							<?php

							//show the listing id numbers an image is associated with
							echo "<td width='100' align='center'>".$liveimages."</th>";

							echo "<td width='150' align='center'>";

								echo "<a href='index2.php?option=com_ezautos&task=delimg&id=".$file."'><strong>"._EZAUTOS_IMGMGR_DELTHISFILE."</strong></a><br />"._EZAUTOS_IMGMGR_ASSTN;
							echo "</td><td> </td></tr>";

							}
						}
					}
				}
			}
		}

		// now we close the directory
		closedir($handle);
	}

	echo "</table>";
	echo "<input type='hidden' name='option' value='com_ezautos'>";
	echo "<input type='hidden' name='task' value='listimages' />";
	echo "<input type='hidden' name='boxchecked' value='0'>";
	echo "<input type='hidden' name='hidemainmenu' value='0' />";
	echo "</form>";

}



function listThImages( $option ) {
	global $my,$database, $mainframe, $mosConfig_absolute_path, $ea_imagedirectory;

include(EZADMIN_PATH."/config.ezautos.php");

?>

<form action="index2.php" method="post" name="adminForm">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_IMGMGR_THPAGETITLE;?></div></td>
		</tr>
	</table>


    <table cellpadding="4" cellspacing="0" border="0" width="750" class="adminlist">
		<thead>
		<tr>
			<th width='250' align="left"><?php echo _EZAUTOS_IMGMGR_IMGNAME;?></th>
			<th width='200' align='center'><?php echo _EZAUTOS_IMGMGR_DIMENSIONS;?></th>
			<th width='100' align='center'><?php echo _EZAUTOS_IMGMGR_SIZE;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_ASSOCID;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_DELIFUNUSED;?></th>
			<th align='center'> </th>
		</tr>
		</thead>

	<?php

	// define the absolute directory path
	$dirPath = $mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th';

	// open the directory and make sure it's open
	if ($handle = opendir($dirPath)) {

		// read through the directory contents
		while (false !== ($file = readdir($handle))) {

			// don't worry about the current or parent directory
			if ($file != "." && $file != "..") {
				if (is_dir("$dirPath/$file")) {
					// echo "[$file]<br>"; // don't do anything with subdirectories
				} else {

					//don't show the placeholder image or index file
					if ($file != "nothumb.gif") {
						if ($file != "index.php") {

							//get the image sizes and file size
							$imginfo = getimagesize("$dirPath/$file");
							$imgsizeinfo = filesize("$dirPath/$file");

							// height/width
							$srcWidth = $imginfo[0];
							$srcHeight = $imginfo[1];

							# Do the main database query to match images with those in use

							$query = "SELECT id FROM #__ezautos"
							."\n WHERE image1='$file' OR image2='$file' OR image3='$file' OR image4='$file' OR image5='$file' OR image6='$file' 
							OR image7='$file' OR image8='$file' OR image9='$file' OR image10='$file' OR image11='$file' OR image12='$file' 
							OR image13='$file' OR image14='$file' OR image15='$file' OR image16='$file' OR image17='$file' OR image18='$file' 
							OR image19='$file' OR image20='$file' OR image21='$file' OR image22='$file' OR image23='$file' OR image24='$file'"
	;
							$database->setQuery( $query );
							$liveimages = $database->loadResult();

							//show a delete link if the image is not listed in the database
							if (!$liveimages){

							?>

							<tr>
								<td width='250' align="left"><?php echo $file;?></th>
								<td width='200' align='center'><?php echo $srcWidth.' x '.$srcHeight;?></th>
								<td width='100' align='center'><?php echo $imgsizeinfo.' '._EZAUTOS_IMGMGR_BYTES;?></th>

							<?php

							//show the listing id numbers an image is associated with
							echo "<td width='100' align='center'>".$liveimages."</th>";

							echo "<td width='150' align='center'>";

								echo "<a href='index2.php?option=com_ezautos&task=delimg&id=".$file."'><strong>"._EZAUTOS_IMGMGR_DELTHISFILE."</strong></a><br />"._EZAUTOS_IMGMGR_ASSMI;
							echo "</td><td> </td></tr>";

							}
						}
					}
				}
			}
		}

		// now we close the directory
		closedir($handle);
	}

	echo "</table>";
	echo "<input type='hidden' name='option' value='com_ezautos'>";
	echo "<input type='hidden' name='task' value='listthimages' />";
	echo "<input type='hidden' name='boxchecked' value='0'>";
	echo "<input type='hidden' name='hidemainmenu' value='0' />";
	echo "</form>";

}



function profAddons( $option ) {
	global $my,$database, $mainframe, $mosConfig_absolute_path;

?>

<form action="index2.php" method="post" name="adminForm">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_IMGMGR_MGPROFUPLOADS;?></div></td>
		</tr>
	</table>


    <table cellpadding="4" cellspacing="0" border="0" width="750" class="adminlist">
		<thead>
		<tr>
			<th width='250' align="left"><?php echo _EZAUTOS_IMGMGR_IMGNAME;?></th>
			<th width='200' align='center'><?php echo _EZAUTOS_IMGMGR_DIMENSIONS;?></th>
			<th width='100' align='center'><?php echo _EZAUTOS_IMGMGR_SIZE;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_ASSOCID;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_DELIFUNUSED;?></th>
			<th align='center'> </th>
		</tr>
		</thead>

	<?php

	// define the absolute directory path
	$dirPath = $mosConfig_absolute_path.'/components/com_ezautos/profiles';

	// open the directory and make sure it's open
	if ($handle = opendir($dirPath)) {

		// read through the directory contents
		while (false !== ($file = readdir($handle))) {

			// don't worry about the current or parent directory
			if ($file != "." && $file != "..") {
				if (is_dir("$dirPath/$file")) {
					// echo "[$file]<br>"; // don't do anything with subdirectories
				} else {

					//don't show the placeholder image or index file
					if ($file != "nothumb.jpg" && $file != "nologo.jpg" && $file != "notopper.jpg") {
						if ($file != "index.php") {

							//get the image sizes and file size
							$imginfo = getimagesize("$dirPath/$file");
							$imgsizeinfo = filesize("$dirPath/$file");

							// height/width
							$srcWidth = $imginfo[0];
							$srcHeight = $imginfo[1];

							?>

							<tr>
								<td width='250' align="left"><?php echo $file;?></th>
								<td width='200' align='center'><?php echo $srcWidth.' x '.$srcHeight;?></th>
								<td width='100' align='center'><?php echo $imgsizeinfo.' '._EZAUTOS_IMGMGR_BYTES;?></th>

							<?php

							# Do the main database query to match images with those in use

							$query = "SELECT mid FROM #__ezautos_profile"
							."\n WHERE dealer_image='$file' OR dealer_logo='$file' OR page_topper='$file' OR dealer_pdf='$file'"
							;
							$database->setQuery( $query );
							$liveimages = $database->loadResult();

							//show the listing id numbers a file is associated with
							echo "<td width='100' align='center'>".$liveimages."</th>";


							echo "<td width='150' align='center'>";


							//show a delete link if the image is not listed in the database
							if (!$liveimages){
								echo "<a href='index2.php?option=com_ezautos&task=delproffiles&id=".$file."'><strong>"._EZAUTOS_IMGMGR_DELTHISFILE."</strong></a>";
							}



							echo "</td><td> </td></tr>";
						}
					}
				}
			}
		}

		// now we close the directory
		closedir($handle);
	}

	echo "</table>";
	echo "<input type='hidden' name='option' value='com_ezautos'>";
	echo "<input type='hidden' name='task' value='profaddons' />";
	echo "<input type='hidden' name='boxchecked' value='0'>";
	echo "<input type='hidden' name='hidemainmenu' value='0' />";
	echo "</form>";

}


function propPDFs( $option ) {
	global $my,$database, $mainframe, $mosConfig_absolute_path;

?>

<form action="index2.php" method="post" name="adminForm">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_IMGMGR_PROPDOCUPLOADS;?></div></td>
		</tr>
	</table>


    <table cellpadding="4" cellspacing="0" border="0" width="750" class="adminlist">
		<thead>
		<tr>
			<th width='250' align="left"><?php echo _EZAUTOS_IMGMGR_IMGNAME;?></th>
			<th width='100' align='center'><?php echo _EZAUTOS_IMGMGR_SIZE;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_ASSOCID;?></th>
			<th width='150' align='center'><?php echo _EZAUTOS_IMGMGR_DELIFUNUSED;?></th>
			<th align='center'> </th>
		</tr>
		</thead>

	<?php

	// define the absolute directory path
	$dirPath = $mosConfig_absolute_path.'/components/com_ezautos/pdfs';

	// open the directory and make sure it's open
	if ($handle = opendir($dirPath)) {

		// read through the directory contents
		while (false !== ($file = readdir($handle))) {

			// don't worry about the current or parent directory
			if ($file != "." && $file != "..") {
				if (is_dir("$dirPath/$file")) {
					// echo "[$file]<br>"; // don't do anything with subdirectories
				} else {

					//don't show the placeholder image or index file
						if ($file != "index.php") {

							//get the image sizes and file size
							$imgsizeinfo = filesize("$dirPath/$file");

							?>

							<tr>
								<td width='250' align="left"><?php echo $file;?></th>
								<td width='100' align='center'><?php echo $imgsizeinfo.' '._EZAUTOS_IMGMGR_BYTES;?></th>

							<?php

							# Do the main database query to match images with those in use

							$query = "SELECT id FROM #__ezautos"
							."\n WHERE pdfinfo='$file'"
							;
							$database->setQuery( $query );
							$liveimages = $database->loadResult();

							//show the listing id numbers a file is associated with
							echo "<td width='100' align='center'>".$liveimages."</th>";


							echo "<td width='150' align='center'>";

							//show a delete link if the image is not listed in the database
							if (!$liveimages){
								echo "<a href='index2.php?option=com_ezautos&task=delproppdfs&id=".$file."'><strong>"._EZAUTOS_IMGMGR_DELTHISFILE."</strong></a>";
							}
							echo "</td><td> </td></tr>";
						}
				}
			}
		}

		// now we close the directory
		closedir($handle);
	}

	echo "</table>";
	echo "<input type='hidden' name='option' value='com_ezautos'>";
	echo "<input type='hidden' name='task' value='proppdfs' />";
	echo "<input type='hidden' name='boxchecked' value='0'>";
	echo "<input type='hidden' name='hidemainmenu' value='0' />";
	echo "</form>";

}







/* *********************************************************************************
				BUILD AND MANAGE THE MAILING LIST SUBMISSION FUNCTIONS
   ********************************************************************************* */


function showMlist( $option ) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;


  # Prepare pagelimit choices

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewcontent{$option}limitstart", 'limitstart', 0 );

	$where = array();


  # Get total number of records
	$query = "SELECT COUNT(*) FROM #__ezautos_mail AS b ". ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : '' );
	$database->setQuery( $query );

	$total = $database->loadResult();

  # Set up page navigation
	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

  # Do the main database query
	$query = "SELECT b.* FROM #__ezautos_mail as b "
    . "\n ORDER BY b.mailid"
	. "\n LIMIT $pageNav->limitstart, $pageNav->limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


  # Bring it all to the screen
	HTML_ezautos::showMlist( $option, $rows, $pageNav );
}


function editMlist( $conid, $option ) {
	global $database, $my;
	$lists = array();

	$row = new mosezMail( $database );
	$row->load( $conid );

  if ( $conid ){
    $row->checkout( $my->id );
  }

  	$lists['confirmed'] = ezauHTML::yesnoRadioList( 'confirmed', 'class="inputbox"', $row->confirmed );


	HTML_ezautos::editMlist( $row, $option, $lists );
}



function saveMlist( $option ) {
	global $database, $my;

	$row = new mosezMail( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;


	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	$row->mailid = intval($row->mailid);

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }


	$isNew = ( $row->mailid < 1 );
	if ($isNew) {
	$row->date = date("Y-m-d H:i:s");
	$row->confirmed = 1;
	}


	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();

	mosRedirect( 'index2.php?option=com_ezautos&task=mlist', $msg );


}


function cancelMlist( $option ) {
	global $database;

	$row = new mosezMail( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=com_ezautos&task=mlist" );
}


function removeMlist( $cid, $option ) {
	global $database;
	$msg = '';
	for ($i=0, $n=count($cid); $i < $n; $i++) {
		$lead = new mosezMail( $database );
		if (!$lead->delete( $cid[$i] )) {
			$msg .= $lead->getError();
		}
	}
	mosRedirect( "index2.php?option=com_ezautos&amp;task=mlist" );
}


function pruneSubs($option){
	global $database;

   //get exported subs
   $database->setQuery("SELECT a.id from #__ezautos_mail as a where a.exported = 1");
   $idlist=$database->loadObjectList();

   $allIDs=array();
   $cids=count($idlist);
   if ($cids>0)
   {
      foreach($idlist as $id)
      {
         $allIDs[]=$id->id;
      }

      $ids=implode(',',$allIDs);
   }

   if (!$ids == "")
   {
      $database->setQuery("DELETE FROM #__ezautos_mail WHERE id in ($ids)");
      if (!$database->query()) {
         echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
         exit();
      }

      mosRedirect ("index2.php?option=$option",_EZAUTOS_TOOLS_PRUNEORPHANS_MSG1.' '.$cids.' '._EZAUTOS_MLIST_PRUNESUBS_DONE);
   }
   else
   {
      $cids=0;
      mosRedirect ("index2.php?option=$option",_EZAUTOS_MLIST_PRUNESUBS_NONE);
   }

}



function doMailExport( $option ) {
	global $database, $mosConfig_absolute_path;

	if( stristr( $_SERVER['PHP_SELF'], "index2" ) ) {
		mosRedirect( "index3.php?option=com_ezautos&task=exportmlist&no_html=1" );
	}

	if (ereg('Opera(/| )([0-9].[0-9]{1,2})', $_SERVER['HTTP_USER_AGENT'])) {
		$UserBrowser = "Opera";
	}
	elseif (ereg('MSIE ([0-9].[0-9]{1,2})', $_SERVER['HTTP_USER_AGENT'])) {
		$UserBrowser = "IE";
	} else {
		$UserBrowser = '';
	}
	$mime_type = ($UserBrowser == 'IE' || $UserBrowser == 'Opera') ? 'application/octetstream' : 'application/octet-stream';

	$filename = "EZ_Autos_Mail_Subscribers_from_" . date('d-m-Y');

	$output = '<?xml version="1.0" encoding="ISO-8859-1" ?>
				  <!-- EZ Autos Mailing List Subscribers export file -->
				  <!DOCTYPE subscribers [
				  <!ELEMENT subscribers (subscriber+)>
				  <!ELEMENT subscriber (mailid, name, email, confirmed, date)>
				  <!ELEMENT mailid (#PCDATA)>
				  <!ELEMENT name (CDATA)>
				  <!ELEMENT email (#PCDATA)>
				  <!ELEMENT confirmed (#PCDATA)>
				  <!ELEMENT date (#PCDATA)>
				  ]>
				  <subscribers>
				  ';
	$query = "SELECT mailid, name, email, confirmed, date FROM #__ezautos_mail ORDER BY name ASC";
	$database->setQuery( $query );
	$subscribers = $database->loadObjectList();

	foreach ($subscribers AS $subscriber){
		$output .= "  <subscriber>\n";
		$output .= "    <mailid>" . $subscriber->mailid . "</mailid>\n";
		$output .= "    <name><![CDATA[" . htmlentities(html_entity_decode($subscriber->name)) . "]]></name>\n";
		$output .= "    <email>" . $subscriber->email . "</email>\n";
		$output .= "    <confirmed>" . $subscriber->confirmed . "</confirmed>\n";
		$output .= "    <date>" . $subscriber->date . "</date>\n";
		$output .= "  </subscriber>\n";
	}
	$output .= "</subscribers>";


	//send file to browser

	@ob_end_clean();
	ob_start();

	header('Content-Type: ' . $mime_type);
	header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');

	if ($UserBrowser == 'IE') {
		header('Content-Disposition: inline; filename="' . $filename . '.xml"');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
	}
	else {
		header('Content-Disposition: attachment; filename="' . $filename . '.xml"');
		header('Pragma: no-cache');
	}
	print $output;
	exit();
}












/* *********************************************************************************
	   					BUILD AND MANAGE THE CONFIGURATION FUNCTIONS
   ********************************************************************************* */


function showConfig( $option ) {
  global $mosConfig_absolute_path, $database,$mosConfig_live_site, $mainframe;


include(EZADMIN_PATH."/config.ezautos.php");


// cms settings

	$whichcms[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_JOOMLA10 );
	$whichcms[] = ezauHTML::makeOption( '2', _EZAUTOS_CONFIG_MAMBO );
	$whichcms[] = ezauHTML::makeOption( '3', _EZAUTOS_CONFIG_JOOMLA15 );
	$lists['ea_cms'] = ezauHTML::selectList( $whichcms, 'ea_cms', 'class="inputbox" size="1"' , 'value', 'text', $ea_cms );


// FLV settings

    $script_on = "document.adminForm.ea_flvwidth.readOnly = false;"
                ."document.adminForm.ea_flvheight.readOnly = false;";

    $script_off= "document.adminForm.ea_flvwidth.readOnly = true;"
                ."document.adminForm.ea_flvheight.readOnly = true;";

    if (!$ea_useflv){
       $lists['ea_useflv'] = "<input type=\"checkbox\" id=\"ea_useflv\" name=\"ea_useflv\" value=\"1\" onclick=\"javascript: if(document.adminForm.ea_useflv.checked){".$script_on."}else{".$script_off."} \" />";
    }else{
       $lists['ea_useflv'] = "<input type=\"checkbox\" id=\"ea_useflv\" name=\"ea_useflv\" value=\"1\" onclick=\"javascript: if(document.adminForm.ea_useflv.checked){".$script_on."}else{".$script_off."} \" checked />";
    }

    if (!$ea_useflv){
       $lists['ea_flvwidth']      = "<input type=\"text\" size=\"20\" id=\"ea_flvwidth\" name=\"ea_flvwidth\" value=\"$ea_flvwidth\" readonly />";
       $lists['ea_flvheight']      = "<input type=\"text\" size=\"20\" id=\"ea_flvheight\" name=\"ea_flvheight\" value=\"$ea_flvheight\" readonly />";
    }else{
       $lists['ea_flvwidth']      = "<input type=\"text\" size=\"20\" id=\"ea_flvwidth\" name=\"ea_flvwidth\" value=\"$ea_flvwidth\" />";
       $lists['ea_flvheight']      = "<input type=\"text\" size=\"20\" id=\"ea_flvheight\" name=\"ea_flvheight\" value=\"$ea_flvheight\" />";
    }





    if (!$ea_watermark){
       $lists['ea_watermark'] = "<input type=\"checkbox\" id=\"ea_watermark\" name=\"ea_watermark\" value=\"1\" />";
    }else{
       $lists['ea_watermark'] = "<input type=\"checkbox\" id=\"ea_watermark\" name=\"ea_watermark\" value=\"1\" checked />";
    }



// php.ini settings

    $script_on3 = "document.adminForm.ea_tempini.readOnly = false;";

    $script_off3= "document.adminForm.ea_tempini.readOnly = true;";

    if (!$ea_useini){
       $lists['ea_useini'] = "<input type=\"checkbox\" id=\"ea_useini\" name=\"ea_useini\" value=\"1\" onclick=\"javascript: if(document.adminForm.ea_useini.checked){".$script_on3."}else{".$script_off3."} \" />";
    }else{
       $lists['ea_useini'] = "<input type=\"checkbox\" id=\"ea_useini\" name=\"ea_useini\" value=\"1\" onclick=\"javascript: if(document.adminForm.ea_useini.checked){".$script_on3."}else{".$script_off3."} \" checked />";
    }

    if (!$ea_useini){
       $lists['ea_tempini']      = "<input type=\"text\" size=\"20\" id=\"ea_tempini\" name=\"ea_tempini\" value=\"$ea_tempini\" readonly />";
    }else{
       $lists['ea_tempini']      = "<input type=\"text\" size=\"20\" id=\"ea_tempini\" name=\"ea_tempini\" value=\"$ea_tempini\" />";
    }


// profile settings

    if (!$ea_useprofile){
       $lists['ea_useprofile'] = "<input type=\"checkbox\" id=\"ea_useprofile\" name=\"ea_useprofile\" value=\"1\" />";
    }else{
       $lists['ea_useprofile'] = "<input type=\"checkbox\" id=\"ea_useprofile\" name=\"ea_useprofile\" value=\"1\" checked />";
    }
    if (!$ea_approf){
       $lists['ea_approf'] = "<input type=\"checkbox\" id=\"ea_approf\" name=\"ea_approf\" value=\"1\" />";
    }else{
       $lists['ea_approf'] = "<input type=\"checkbox\" id=\"ea_approf\" name=\"ea_approf\" value=\"1\" checked />";
    }


// notification and integration settings


    if (!$ea_notification){
       $lists['ea_notification'] = "<input type=\"checkbox\" id=\"ea_notification\" name=\"ea_notification\" value=\"1\" />";
    }else{
       $lists['ea_notification'] = "<input type=\"checkbox\" id=\"ea_notification\" name=\"ea_notification\" value=\"1\" checked />";
    }


    if (!$ea_leadsnotice){
       $lists['ea_leadsnotice'] = "<input type=\"checkbox\" id=\"ea_leadsnotice\" name=\"ea_leadsnotice\" value=\"1\" />";
    }else{
       $lists['ea_leadsnotice'] = "<input type=\"checkbox\" id=\"ea_leadsnotice\" name=\"ea_leadsnotice\" value=\"1\" checked />";
    }


    if (!$ea_profnotice){
       $lists['ea_profnotice'] = "<input type=\"checkbox\" id=\"ea_profnotice\" name=\"ea_profnotice\" value=\"1\" />";
    }else{
       $lists['ea_profnotice'] = "<input type=\"checkbox\" id=\"ea_profnotice\" name=\"ea_profnotice\" value=\"1\" checked />";
    }




    if (!$ea_vinfilt){
       $lists['ea_vinfilt'] = "<input type=\"checkbox\" id=\"ea_vinfilt\" name=\"ea_vinfilt\" value=\"1\" />";
    }else{
       $lists['ea_vinfilt'] = "<input type=\"checkbox\" id=\"ea_vinfilt\" name=\"ea_vinfilt\" value=\"1\" checked />";
    }


    if (!$ea_regfilt){
       $lists['ea_regfilt'] = "<input type=\"checkbox\" id=\"ea_regfilt\" name=\"ea_regfilt\" value=\"1\" />";
    }else{
       $lists['ea_regfilt'] = "<input type=\"checkbox\" id=\"ea_regfilt\" name=\"ea_regfilt\" value=\"1\" checked />";
    }


    if (!$ea_makefilt){
       $lists['ea_makefilt'] = "<input type=\"checkbox\" id=\"ea_makefilt\" name=\"ea_makefilt\" value=\"1\" />";
    }else{
       $lists['ea_makefilt'] = "<input type=\"checkbox\" id=\"ea_makefilt\" name=\"ea_makefilt\" value=\"1\" checked />";
    }


    if (!$ea_modfilt){
       $lists['ea_modfilt'] = "<input type=\"checkbox\" id=\"ea_modfilt\" name=\"ea_modfilt\" value=\"1\" />";
    }else{
       $lists['ea_modfilt'] = "<input type=\"checkbox\" id=\"ea_modfilt\" name=\"ea_modfilt\" value=\"1\" checked />";
    }


    if (!$ea_piclist){
       $lists['ea_piclist'] = "<input type=\"checkbox\" id=\"ea_piclist\" name=\"ea_piclist\" value=\"1\" />";
    }else{
       $lists['ea_piclist'] = "<input type=\"checkbox\" id=\"ea_piclist\" name=\"ea_piclist\" value=\"1\" checked />";
    }







    if (!$ea_letterman){
       $lists['ea_letterman'] = "<input type=\"checkbox\" id=\"ea_letterman\" name=\"ea_letterman\" value=\"1\" />";
    }else{
       $lists['ea_letterman'] = "<input type=\"checkbox\" id=\"ea_letterman\" name=\"ea_letterman\" value=\"1\" checked />";
    }

    if (!$ea_mypms){
       $lists['ea_mypms'] = "<input type=\"checkbox\" id=\"ea_mypms\" name=\"ea_mypms\" value=\"1\" />";
    }else{
       $lists['ea_mypms'] = "<input type=\"checkbox\" id=\"ea_mypms\" name=\"ea_mypms\" value=\"1\" checked />";
    }

    if (!$ea_jreviews){
       $lists['ea_jreviews'] = "<input type=\"checkbox\" id=\"ea_jreviews\" name=\"ea_jreviews\" value=\"1\" />";
    }else{
       $lists['ea_jreviews'] = "<input type=\"checkbox\" id=\"ea_jreviews\" name=\"ea_jreviews\" value=\"1\" checked />";
    }



	$raddistance[] = ezauHTML::makeOption( '6378.7', _EZAUTOS_SCH_KILOMETER );
	$raddistance[] = ezauHTML::makeOption( '3963.0', _EZAUTOS_SCH_MILE );
	$raddistance[] = ezauHTML::makeOption( '3437.74677', _EZAUTOS_SCH_NAUTMILE );
	$lists['ea_raddistance'] = ezauHTML::selectList( $raddistance, 'ea_raddistance', 'class="inputbox" size="1"', 'value', 'text', $ea_raddistance );


// formatting settings


$structure[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_MAKEMOD );
$structure[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_CATG );
$structure[] = ezauHTML::makeOption( '2', _EZAUTOS_CONFIG_MULTI );
$lists['ea_structure'] = ezauHTML::selectList( $structure, 'ea_structure', 'class="inputbox" size="1"' , 'value', 'text', $ea_structure );


	$perpage = array(
		ezauHTML::makeOption( 5, 5 ),
		ezauHTML::makeOption( 10, 10 ),
		ezauHTML::makeOption( 15, 15 ),
		ezauHTML::makeOption( 20, 20 ),
		ezauHTML::makeOption( 25, 25 ),
		ezauHTML::makeOption( 30, 30 ),
		ezauHTML::makeOption( 50, 50 ),
	);

	$lists['perpage'] 	= ezauHTML::selectList( $perpage, 'ea_perpage', 'class="inputbox" size="1"', 'value', 'text', ( $ea_perpage ? $ea_perpage : 50 ) );

	$specpage = array(
		ezauHTML::makeOption( 5, 5 ),
		ezauHTML::makeOption( 10, 10 ),
		ezauHTML::makeOption( 15, 15 ),
		ezauHTML::makeOption( 20, 20 ),
		ezauHTML::makeOption( 25, 25 ),
		ezauHTML::makeOption( 30, 30 ),
		ezauHTML::makeOption( 50, 50 ),
	);

	$lists['specpage'] 	= ezauHTML::selectList( $specpage, 'ea_newlist', 'class="inputbox" size="1"', 'value', 'text', ( $ea_newlist ? $ea_newlist : 50 ) );


	$textalign[] = ezauHTML::makeOption( 'left', _EZAUTOS_CONFIG_LEFT );
	$textalign[] = ezauHTML::makeOption( 'right', _EZAUTOS_CONFIG_RIGHT );
	$lists['ea_textalign'] = ezauHTML::selectList( $textalign, 'ea_textalign', 'class="inputbox" size="1"', 'value', 'text', $ea_textalign );


// data settings

    if (!$ea_vehspecs){
       $lists['ea_vehspecs'] = "<input type=\"checkbox\" id=\"ea_vehspecs\" name=\"ea_vehspecs\" value=\"1\" />";
    }else{
       $lists['ea_vehspecs'] = "<input type=\"checkbox\" id=\"ea_vehspecs\" name=\"ea_vehspecs\" value=\"1\" checked />";
    }

    if (!$ea_vehfeats){
       $lists['ea_vehfeats'] = "<input type=\"checkbox\" id=\"ea_vehfeats\" name=\"ea_vehfeats\" value=\"1\" />";
    }else{
       $lists['ea_vehfeats'] = "<input type=\"checkbox\" id=\"ea_vehfeats\" name=\"ea_vehfeats\" value=\"1\" checked />";
    }

    if (!$ea_financespecs){
       $lists['ea_financespecs'] = "<input type=\"checkbox\" id=\"ea_financespecs\" name=\"ea_financespecs\" value=\"1\" />";
    }else{
       $lists['ea_financespecs'] = "<input type=\"checkbox\" id=\"ea_financespecs\" name=\"ea_financespecs\" value=\"1\" checked />";
    }

    if (!$ea_meta){
       $lists['ea_meta'] = "<input type=\"checkbox\" id=\"ea_meta\" name=\"ea_meta\" value=\"1\" />";
    }else{
       $lists['ea_meta'] = "<input type=\"checkbox\" id=\"ea_meta\" name=\"ea_meta\" value=\"1\" checked />";
    }


    if (!$ea_tagit_useit){
       $lists['ea_tagit_useit'] = "<input type=\"checkbox\" id=\"ea_tagit_useit\" name=\"ea_tagit_useit\" value=\"1\" />";
    }else{
       $lists['ea_tagit_useit'] = "<input type=\"checkbox\" id=\"ea_tagit_useit\" name=\"ea_tagit_useit\" value=\"1\" checked />";
    }

    if (!$ea_tagit_new){
       $lists['ea_tagit_new'] = "<input type=\"checkbox\" id=\"ea_tagit_new\" name=\"ea_tagit_new\" value=\"1\" />";
    }else{
       $lists['ea_tagit_new'] = "<input type=\"checkbox\" id=\"ea_tagit_new\" name=\"ea_tagit_new\" value=\"1\" checked />";
    }

    if (!$ea_tagit_used){
       $lists['ea_tagit_used'] = "<input type=\"checkbox\" id=\"ea_tagit_used\" name=\"ea_tagit_used\" value=\"1\" />";
    }else{
       $lists['ea_tagit_used'] = "<input type=\"checkbox\" id=\"ea_tagit_used\" name=\"ea_tagit_used\" value=\"1\" checked />";
    }



    if (!$ea_tagit_demo){
       $lists['ea_tagit_demo'] = "<input type=\"checkbox\" id=\"ea_tagit_demo\" name=\"ea_tagit_demo\" value=\"1\" />";
    }else{
       $lists['ea_tagit_demo'] = "<input type=\"checkbox\" id=\"ea_tagit_demo\" name=\"ea_tagit_demo\" value=\"1\" checked />";
    }

    if (!$ea_tagit_asnew){
       $lists['ea_tagit_asnew'] = "<input type=\"checkbox\" id=\"ea_tagit_asnew\" name=\"ea_tagit_asnew\" value=\"1\" />";
    }else{
       $lists['ea_tagit_asnew'] = "<input type=\"checkbox\" id=\"ea_tagit_asnew\" name=\"ea_tagit_asnew\" value=\"1\" checked />";
    }

    if (!$ea_tagit_preluv){
       $lists['ea_tagit_preluv'] = "<input type=\"checkbox\" id=\"ea_tagit_preluv\" name=\"ea_tagit_preluv\" value=\"1\" />";
    }else{
       $lists['ea_tagit_preluv'] = "<input type=\"checkbox\" id=\"ea_tagit_preluv\" name=\"ea_tagit_preluv\" value=\"1\" checked />";
    }

    if (!$ea_tagit_spare){
       $lists['ea_tagit_spare'] = "<input type=\"checkbox\" id=\"ea_tagit_spare\" name=\"ea_tagit_spare\" value=\"1\" />";
    }else{
       $lists['ea_tagit_spare'] = "<input type=\"checkbox\" id=\"ea_tagit_spare\" name=\"ea_tagit_spare\" value=\"1\" checked />";
    }


// listing type list stuff

    if (!$ea_usetype){
       $lists['ea_usetype'] = "<input type=\"checkbox\" id=\"ea_usetype\" name=\"ea_usetype\" value=\"1\" />";
    }else{
       $lists['ea_usetype'] = "<input type=\"checkbox\" id=\"ea_usetype\" name=\"ea_usetype\" value=\"1\" checked />";
    }
    if (!$ea_usetype1){
       $lists['ea_usetype1'] = "<input type=\"checkbox\" id=\"ea_usetype1\" name=\"ea_usetype1\" value=\"1\" />";
    }else{
       $lists['ea_usetype1'] = "<input type=\"checkbox\" id=\"ea_usetype1\" name=\"ea_usetype1\" value=\"1\" checked />";
    }
    if (!$ea_usetype2){
       $lists['ea_usetype2'] = "<input type=\"checkbox\" id=\"ea_usetype2\" name=\"ea_usetype2\" value=\"1\" />";
    }else{
       $lists['ea_usetype2'] = "<input type=\"checkbox\" id=\"ea_usetype2\" name=\"ea_usetype2\" value=\"1\" checked />";
    }
    if (!$ea_usetype3){
       $lists['ea_usetype3'] = "<input type=\"checkbox\" id=\"ea_usetype3\" name=\"ea_usetype3\" value=\"1\" />";
    }else{
       $lists['ea_usetype3'] = "<input type=\"checkbox\" id=\"ea_usetype3\" name=\"ea_usetype3\" value=\"1\" checked />";
    }
    if (!$ea_usetype4){
       $lists['ea_usetype4'] = "<input type=\"checkbox\" id=\"ea_usetype4\" name=\"ea_usetype4\" value=\"1\" />";
    }else{
       $lists['ea_usetype4'] = "<input type=\"checkbox\" id=\"ea_usetype4\" name=\"ea_usetype4\" value=\"1\" checked />";
    }
    if (!$ea_usetype5){
       $lists['ea_usetype5'] = "<input type=\"checkbox\" id=\"ea_usetype5\" name=\"ea_usetype5\" value=\"1\" />";
    }else{
       $lists['ea_usetype5'] = "<input type=\"checkbox\" id=\"ea_usetype5\" name=\"ea_usetype5\" value=\"1\" checked />";
    }
    if (!$ea_usetype6){
       $lists['ea_usetype6'] = "<input type=\"checkbox\" id=\"ea_usetype6\" name=\"ea_usetype6\" value=\"1\" />";
    }else{
       $lists['ea_usetype6'] = "<input type=\"checkbox\" id=\"ea_usetype6\" name=\"ea_usetype6\" value=\"1\" checked />";
    }

// rental frequency list stuff

    if (!$ea_usefrequit){
       $lists['ea_usefrequit'] = "<input type=\"checkbox\" id=\"ea_usefrequit\" name=\"ea_usefrequit\" value=\"1\" />";
    }else{
       $lists['ea_usefrequit'] = "<input type=\"checkbox\" id=\"ea_usefrequit\" name=\"ea_usefrequit\" value=\"1\" checked />";
    }
    if (!$ea_usefrequit1){
       $lists['ea_usefrequit1'] = "<input type=\"checkbox\" id=\"ea_usefrequit1\" name=\"ea_usefrequit1\" value=\"1\" />";
    }else{
       $lists['ea_usefrequit1'] = "<input type=\"checkbox\" id=\"ea_usefrequit1\" name=\"ea_usefrequit1\" value=\"1\" checked />";
    }
    if (!$ea_usefrequit2){
       $lists['ea_usefrequit2'] = "<input type=\"checkbox\" id=\"ea_usefrequit2\" name=\"ea_usefrequit2\" value=\"1\" />";
    }else{
       $lists['ea_usefrequit2'] = "<input type=\"checkbox\" id=\"ea_usefrequit2\" name=\"ea_usefrequit2\" value=\"1\" checked />";
    }
    if (!$ea_usefrequit3){
       $lists['ea_usefrequit3'] = "<input type=\"checkbox\" id=\"ea_usefrequit3\" name=\"ea_usefrequit3\" value=\"1\" />";
    }else{
       $lists['ea_usefrequit3'] = "<input type=\"checkbox\" id=\"ea_usefrequit3\" name=\"ea_usefrequit3\" value=\"1\" checked />";
    }
    if (!$ea_usefrequit4){
       $lists['ea_usefrequit4'] = "<input type=\"checkbox\" id=\"ea_usefrequit4\" name=\"ea_usefrequit4\" value=\"1\" />";
    }else{
       $lists['ea_usefrequit4'] = "<input type=\"checkbox\" id=\"ea_usefrequit4\" name=\"ea_usefrequit4\" value=\"1\" checked />";
    }







$lists['ea_viewrecommend'] 	= ezauHTML::yesnoRadioList('ea_viewrecommend', 'class="inputbox"', $ea_viewrecommend);
$lists['ea_viewenq'] 	= ezauHTML::yesnoRadioList('ea_viewenq', 'class="inputbox"', $ea_viewenq);
$lists['ea_viewmailing'] 	= ezauHTML::yesnoRadioList('ea_viewmailing', 'class="inputbox"', $ea_viewmailing);
$lists['ea_rssfeed'] 	= ezauHTML::yesnoRadioList('ea_rssfeed', 'class="inputbox"', $ea_rssfeed);
$lists['ea_reglead'] 	= ezauHTML::yesnoRadioList('ea_reglead', 'class="inputbox"', $ea_reglead);
$lists['ea_memlistings'] 	= ezauHTML::yesnoRadioList('ea_memlistings', 'class="inputbox"', $ea_memlistings);
$lists['ea_paypal'] 	= ezauHTML::yesnoRadioList('ea_paypal', 'class="inputbox"', $ea_paypal);
$lists['ea_approve'] 	= ezauHTML::yesnoRadioList('ea_approve', 'class="inputbox"', $ea_approve);
$lists['ea_freepic'] 	= ezauHTML::yesnoRadioList('ea_freepic', 'class="inputbox"', $ea_freepic);
$lists['ea_self'] 	= ezauHTML::yesnoRadioList('ea_self', 'class="inputbox"', $ea_self);
$lists['ea_shownewlink'] 	= ezauHTML::yesnoRadioList('ea_shownewlink', 'class="inputbox"', $ea_shownewlink);
$lists['ea_showfeatlink'] 	= ezauHTML::yesnoRadioList('ea_showfeatlink', 'class="inputbox"', $ea_showfeatlink);
$lists['ea_showmenu'] 	= ezauHTML::yesnoRadioList('ea_showmenu', 'class="inputbox"', $ea_showmenu);
$lists['ea_showsearch'] 	= ezauHTML::yesnoRadioList('ea_showsearch', 'class="inputbox"', $ea_showsearch);
$lists['ea_usesms'] 	= ezauHTML::yesnoRadioList('ea_usesms', 'class="inputbox"', $ea_usesms);
$lists['ea_expmgmt'] 	= ezauHTML::yesnoRadioList('ea_expmgmt', 'class="inputbox"', $ea_expmgmt);

$lists['ea_usecat'] 	= ezauHTML::yesnoRadioList('ea_usecat', 'class="inputbox"', $ea_usecat);
$lists['ea_usemakmod'] 	= ezauHTML::yesnoRadioList('ea_usemakmod', 'class="inputbox"', $ea_usemakmod);
$lists['ea_usetrans'] 	= ezauHTML::yesnoRadioList('ea_usetrans', 'class="inputbox"', $ea_usetrans);
$lists['ea_usefuel'] 	= ezauHTML::yesnoRadioList('ea_usefuel', 'class="inputbox"', $ea_usefuel);
$lists['ea_usecond'] 	= ezauHTML::yesnoRadioList('ea_usecond', 'class="inputbox"', $ea_usecond);
$lists['ea_usepcode'] 	= ezauHTML::yesnoRadioList('ea_usepcode', 'class="inputbox"', $ea_usepcode);

$lists['ea_usecolour'] 	= ezauHTML::yesnoRadioList('ea_usecolour', 'class="inputbox"', $ea_usecolour);
$lists['ea_usedoors'] 	= ezauHTML::yesnoRadioList('ea_usedoors', 'class="inputbox"', $ea_usedoors);
$lists['ea_usebody'] 	= ezauHTML::yesnoRadioList('ea_usebody', 'class="inputbox"', $ea_usebody);
$lists['ea_useyear'] 	= ezauHTML::yesnoRadioList('ea_useyear', 'class="inputbox"', $ea_useyear);
$lists['ea_useeng'] 	= ezauHTML::yesnoRadioList('ea_useeng', 'class="inputbox"', $ea_useeng);
$lists['ea_maxmiles'] 	= ezauHTML::yesnoRadioList('ea_maxmiles', 'class="inputbox"', $ea_maxmiles);
$lists['ea_usecount'] 	= ezauHTML::yesnoRadioList('ea_usecount', 'class="inputbox"', $ea_usecount);
$lists['ea_useback'] 	= ezauHTML::yesnoRadioList('ea_useback', 'class="inputbox"', $ea_useback);

$lists['ea_changeimages'] 	= ezauHTML::yesnoRadioList('ea_changeimages', 'class="inputbox"', $ea_changeimages);


$lists['ea_usemap'] 	= ezauHTML::yesnoRadioList('ea_usemap', 'class="inputbox"', $ea_usemap);
$lists['ea_shortlist'] 	= ezauHTML::yesnoRadioList('ea_shortlist', 'class="inputbox"', $ea_shortlist);
$lists['ea_quicklist'] 	= ezauHTML::yesnoRadioList('ea_quicklist', 'class="inputbox"', $ea_quicklist);



$expsys[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_EXPHITSBASED );
$expsys[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_EXPDATEBASED );
$lists['ea_expsys'] = ezauHTML::selectList( $expsys, 'ea_expsys', 'class="inputbox" size="1"' , 'value', 'text', $ea_expsys );

$mapsys[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_MAPTYPE1 );
$mapsys[] = ezauHTML::makeOption( '2', _EZAUTOS_CONFIG_MAPTYPE2 );
$mapsys[] = ezauHTML::makeOption( '3', _EZAUTOS_CONFIG_MAPTYPE3 );
$lists['ea_mapsys'] = ezauHTML::selectList( $mapsys, 'ea_mapsys', 'class="inputbox" size="1"' , 'value', 'text', $ea_mapsys );


	$mapview[] = ezauHTML::makeOption( 'G_NORMAL_MAP', _EZAUTOS_CONFIG_MAPVIEW1 );
	$mapview[] = ezauHTML::makeOption( 'G_SATELLITE_MAP', _EZAUTOS_CONFIG_MAPVIEW2 );
	$mapview[] = ezauHTML::makeOption( 'G_HYBRID_MAP', _EZAUTOS_CONFIG_MAPVIEW3 );
	$lists['ea_mapview'] = ezauHTML::selectList( $mapview, 'ea_mapview', 'class="inputbox" size="1"' , 'value', 'text', $ea_mapview );



$thumbcreator[] = ezauHTML::makeOption( 'none', _EZAUTOS_CONFIG_TNNONE );
$thumbcreator[] = ezauHTML::makeOption( 'gd1', _EZAUTOS_CONFIG_TNGD1 );
$thumbcreator[] = ezauHTML::makeOption( 'gd2', _EZAUTOS_CONFIG_TNGD2 );
$lists['ea_thumbcreation'] = ezauHTML::selectList( $thumbcreator, 'ea_thumbcreation', 'class="inputbox" size="1"' , 'value', 'text', $ea_thumbcreation );



$sitetype[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_SALESITE );
$sitetype[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_LIBSITE );
$lists['ea_sitetype'] = ezauHTML::selectList( $sitetype, 'ea_sitetype', 'class="inputbox" size="2"', 'value', 'text', $ea_sitetype );


$payonly[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_PAIDOPT1 );
$payonly[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_PAIDOPT2 );
$lists['ea_payonly'] = ezauHTML::selectList( $payonly, 'ea_payonly', 'class="inputbox" size="2"', 'value', 'text', $ea_payonly );


$pmode[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_LS );
$pmode[] = ezauHTML::makeOption( '2', _EZAUTOS_CONFIG_TS );
$lists['postmode'] = ezauHTML::selectList( $pmode, 'postmode', 'class="inputbox" size="2"', 'value', 'text', $postmode );

$cpos[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_BEFORE );
$cpos[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_AFTER );
$lists['ea_currencypos'] = ezauHTML::selectList( $cpos, 'ea_currencypos', 'class="inputbox" size="1"', 'value', 'text', $ea_currencypos );

$currencyformat[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_DECIMAL );
$currencyformat[] = ezauHTML::makeOption( '1', _EZAUTOS_CONFIG_EUROPEAN );
$lists['ea_currencyformat'] = ezauHTML::selectList( $currencyformat, 'ea_currencyformat', 'class="inputbox" size="1"' , 'value', 'text', $ea_currencyformat );


// get list of groups

$database->setQuery( "SELECT id AS value, name AS text FROM #__groups ORDER BY id" );
$groups = $database->loadObjectList();
	
$lists['ea_profaccess'] = ezauHTML::selectList( $groups, 'ea_profaccess', 'class="inputbox" size="1"', 'value', 'text', $ea_profaccess );


// gets a list of the template directories for the front-end output

	$listtemplates[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_SELTPL );
	if ($dir = @opendir($mosConfig_absolute_path."/components/com_ezautos/forms/templates")) {
		while (($file = readdir($dir)) !== false) {
			if ($file != ".." && $file != ".") {
				if(is_dir($mosConfig_absolute_path."/components/com_ezautos/forms/templates"."/".$file)) {
					if(!($file[0] == '.')) {
						$filelist[] = $file;
					}
				}
			}
		}
		closedir($dir);
	}
	asort($filelist);
	while (list ($key, $val) = each ($filelist)) {
	$listtemplates[] = ezauHTML::makeOption( $val, $val );
	}
   $lists['template'] = ezauHTML::selectList( $listtemplates, 'ea_template', 'class="inputbox" size="1"', 'value', 'text', $ea_template );


// gets a list of the template directories for the short listings pages front-end output

	$listtemplate2[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_SELTPL );
	if ($dir = @opendir($mosConfig_absolute_path."/components/com_ezautos/forms/list_templates")) {
		while (($file = readdir($dir)) !== false) {
			if ($file != ".." && $file != ".") {
				if(is_dir($mosConfig_absolute_path."/components/com_ezautos/forms/list_templates"."/".$file)) {
					if(!($file[0] == '.')) {
						$filelist2[] = $file;
					}
				}
			}
		}
		closedir($dir);
	}
	asort($filelist2);
	while (list ($key, $val) = each ($filelist2)) {
	$listtemplate2[] = ezauHTML::makeOption( $val, $val );
	}
$lists['ea_listtemplate'] = ezauHTML::selectList( $listtemplate2, 'ea_listtemplate', 'class="inputbox" size="1"' , 'value', 'text', $ea_listtemplate );







// gets a list of the template directories for the payment system

	$pmttmpl[] = ezauHTML::makeOption( '0', _EZAUTOS_CONFIG_SELTPL );
	if ($dir = @opendir($mosConfig_absolute_path."/components/com_ezautos/forms/payments")) {
		while (($file = readdir($dir)) !== false) {
			if ($file != ".." && $file != ".") {
				if(is_dir($mosConfig_absolute_path."/components/com_ezautos/forms/payments"."/".$file)) {
					if(!($file[0] == '.')) {
						$filelist3[] = $file;
					}
				}
			}
		}
		closedir($dir);
	}
	asort($filelist3);
	while (list ($key, $val) = each ($filelist3)) {
	$pmttmpl[] = ezauHTML::makeOption( $val, $val );
	}
$lists['ea_pmttmpl'] = ezauHTML::selectList( $pmttmpl, 'ea_pmttmpl', 'class="inputbox" size="1"' , 'value', 'text', $ea_pmttmpl );





  
  # Bring it all to the screen
	HTML_ezautos::showConfig( $option, $lists );
}



/* *********************************************************************************
	   					SAVE THE CONFIGURATION FUNCTIONS
   ********************************************************************************* */



function saveConfig ($option){
global $database, $mainframe, $mosConfig_absolute_path;

  $configfile = "components/".$option."/config.ezautos.php";
  @chmod ($configfile, 0766);
  $permission = is_writable($configfile);
  if (!$permission) {
    $mosmsg = "Config file not writeable!";
    mosRedirect("index2.php?option=".$option."&task=settings",$mosmsg);
    break;
  }


// Find EZ Autos Itemid from the menu table

	$query = "SELECT * from #__menu"
	. "\n WHERE link = 'index.php?option=com_ezautos'"
	;
	$database->setQuery( $query );
	$id = $database->loadResult();
	$myItemid = $id;



if (get_magic_quotes_gpc()==0) {
$ea_bizname = addslashes ( $ea_bizname );
$ea_bizad = addslashes ( $ea_bizad );
$ea_telephone = addslashes ( $ea_telephone );
$ea_mobile = addslashes ( $ea_mobile );
$ea_username = addslashes ( $ea_username );
$ea_password = addslashes ( $ea_password );
$ea_api = addslashes ( $ea_api );
$ea_bizemail = addslashes ( $ea_bizemail );
$ea_rssname = addslashes ( $ea_rssname );
}
  
  $config = "<?php\n";
  $config .= "\$myItemid = \"".$myItemid."\";\n";
  $config .= "\$ea_thumbcreation = \"".$_REQUEST['ea_thumbcreation']."\";\n";
  $config .= "\$ea_thumbwidth = \"".$_REQUEST['ea_thumbwidth']."\";\n";
  $config .= "\$ea_thumbquality = \"".$_REQUEST['ea_thumbquality']."\";\n";
  $config .= "\$ea_imagedirectory = \"".$_REQUEST['ea_imagedirectory']."\";\n";
  $config .= "\$ea_catthumbwidth = \"".$_REQUEST['ea_catthumbwidth']."\";\n";
  $config .= "\$ea_imgwidth = \"".$_REQUEST['ea_imgwidth']."\";\n";
  $config .= "\$ea_maxwidth = \"".$_REQUEST['ea_maxwidth']."\";\n";
  $config .= "\$ea_maxheight = \"".$_REQUEST['ea_maxheight']."\";\n";
  $config .= "\$ea_bizname = \"".$_REQUEST['ea_bizname']."\";\n";
  $config .= "\$ea_bizad = \"".$_REQUEST['ea_bizad']."\";\n";
  $config .= "\$ea_telephone = \"".$_REQUEST['ea_telephone']."\";\n";
  $config .= "\$ea_usesms = \"".$_REQUEST['ea_usesms']."\";\n";
  $config .= "\$ea_mobile = \"".$_REQUEST['ea_mobile']."\";\n";
  $config .= "\$ea_username = \"".$_REQUEST['ea_username']."\";\n";
  $config .= "\$ea_password = \"".$_REQUEST['ea_password']."\";\n";
  $config .= "\$ea_api = \"".$_REQUEST['ea_api']."\";\n";
  $config .= "\$ea_usemap = \"".$_REQUEST['ea_usemap']."\";\n";
  $config .= "\$ea_mapsys = \"".$_REQUEST['ea_mapsys']."\";\n";
  $config .= "\$ea_mapapi = \"".$_REQUEST['ea_mapapi']."\";\n";
  $config .= "\$ea_mapwidth = \"".$_REQUEST['ea_mapwidth']."\";\n";
  $config .= "\$ea_mapheight = \"".$_REQUEST['ea_mapheight']."\";\n";
  $config .= "\$ea_expmgmt = \"".$_REQUEST['ea_expmgmt']."\";\n";
  $config .= "\$ea_expsys = \"".$_REQUEST['ea_expsys']."\";\n";
  $config .= "\$ea_expfig = \"".$_REQUEST['ea_expfig']."\";\n";
  $config .= "\$ea_expgrace = \"".$_REQUEST['ea_expgrace']."\";\n";
  $config .= "\$ea_bizemail = \"".$_REQUEST['ea_bizemail']."\";\n";
  $config .= "\$ea_currencysign = \"".$_REQUEST['ea_currencysign']."\";\n";
  $config .= "\$ea_currencypos = \"".$_REQUEST['ea_currencypos']."\";\n";
  $config .= "\$ea_currencyformat = \"".$_REQUEST['ea_currencyformat']."\";\n";
  $config .= "\$ea_useprofile = \"".$_REQUEST['ea_useprofile']."\";\n";
  $config .= "\$ea_profaccess = \"".$_REQUEST['ea_profaccess']."\";\n";
  $config .= "\$ea_profmaxwidth = \"".$_REQUEST['ea_profmaxwidth']."\";\n";
  $config .= "\$ea_profmaxheight = \"".$_REQUEST['ea_profmaxheight']."\";\n";
  $config .= "\$ea_sitetype = \"".$_REQUEST['ea_sitetype']."\";\n";
  $config .= "\$ea_structure = \"".$_REQUEST['ea_structure']."\";\n";
  $config .= "\$ea_template = \"".$_REQUEST['ea_template']."\";\n";
  $config .= "\$ea_listtemplate = \"".$_REQUEST['ea_listtemplate']."\";\n";
  $config .= "\$ea_colcount = \"".$_REQUEST['ea_colcount']."\";\n";
  $config .= "\$ea_colwidth = \"".$_REQUEST['ea_colwidth']."\";\n";
  $config .= "\$ea_colour1 = \"".$_REQUEST['ea_colour1']."\";\n";
  $config .= "\$ea_colour2 = \"".$_REQUEST['ea_colour2']."\";\n";
  $config .= "\$ea_textbox = \"".$_REQUEST['ea_textbox']."\";\n";
  $config .= "\$ea_textarea = \"".$_REQUEST['ea_textarea']."\";\n";
  $config .= "\$ea_perpage = \"".$_REQUEST['ea_perpage']."\";\n";
  $config .= "\$ea_newlist = \"".$_REQUEST['ea_newlist']."\";\n";
  $config .= "\$ea_viewrecommend = \"".$_REQUEST['ea_viewrecommend']."\";\n";
  $config .= "\$ea_viewenq = \"".$_REQUEST['ea_viewenq']."\";\n";
  $config .= "\$ea_viewmailing = \"".$_REQUEST['ea_viewmailing']."\";\n";
  $config .= "\$ea_reglead = \"".$_REQUEST['ea_reglead']."\";\n";
  $config .= "\$ea_usecat = \"".$_REQUEST['ea_usecat']."\";\n";
  $config .= "\$ea_usemakmod = \"".$_REQUEST['ea_usemakmod']."\";\n";
  $config .= "\$ea_usetrans = \"".$_REQUEST['ea_usetrans']."\";\n";
  $config .= "\$ea_usefuel = \"".$_REQUEST['ea_usefuel']."\";\n";
  $config .= "\$ea_usecond = \"".$_REQUEST['ea_usecond']."\";\n";
  $config .= "\$ea_usepcode = \"".$_REQUEST['ea_usepcode']."\";\n";
  $config .= "\$ea_tagit_demo = \"".$_REQUEST['ea_tagit_demo']."\";\n";
  $config .= "\$ea_tagit_asnew = \"".$_REQUEST['ea_tagit_asnew']."\";\n";
  $config .= "\$ea_tagit_preluv = \"".$_REQUEST['ea_tagit_preluv']."\";\n";
  $config .= "\$ea_tagit_spare = \"".$_REQUEST['ea_tagit_spare']."\";\n";
  $config .= "\$ea_shownewlink = \"".$_REQUEST['ea_shownewlink']."\";\n";
  $config .= "\$ea_showfeatlink = \"".$_REQUEST['ea_showfeatlink']."\";\n";
  $config .= "\$ea_showmenu = \"".$_REQUEST['ea_showmenu']."\";\n";
  $config .= "\$ea_rssfeed = \"".$_REQUEST['ea_rssfeed']."\";\n";
  $config .= "\$ea_rssname = \"".$_REQUEST['ea_rssname']."\";\n";
  $config .= "\$ea_memlistings =  \"".$_REQUEST['ea_memlistings']."\";\n";
  $config .= "\$ea_impnum = \"".$_REQUEST['ea_impnum']."\";\n";
  $config .= "\$ea_lightboxexp = \"".$_REQUEST['ea_lightboxexp']."\";\n";
  $config .= "\$ea_notification =  \"".$_REQUEST['ea_notification']."\";\n";
  $config .= "\$ea_approve =  \"".$_REQUEST['ea_approve']."\";\n";
  $config .= "\$ea_freepic =  \"".$_REQUEST['ea_freepic']."\";\n";
  $config .= "\$ea_self =  \"".$_REQUEST['ea_self']."\";\n";
  $config .= "\$ea_changeimages =  \"".$_REQUEST['ea_changeimages']."\";\n";
  $config .= "\$ea_maxlistings =  \"".$_REQUEST['ea_maxlistings']."\";\n";
  $config .= "\$ea_paypal = \"".$_REQUEST['ea_paypal']."\";\n";
  $config .= "\$ea_payonly = \"".$_REQUEST['ea_payonly']."\";\n";
  $config .= "\$ea_leadsnotice = \"".$_REQUEST['ea_leadsnotice']."\";\n";
  $config .= "\$ea_pmttmpl = \"".$_REQUEST['ea_pmttmpl']."\";\n";
  $config .= "\$paypal_email = \"".$_REQUEST['paypal_email']."\";\n";
  $config .= "\$checkmail = \"".$_REQUEST['checkmail']."\";\n";
  $config .= "\$pp_currsign = \"".$_REQUEST['pp_currsign']."\";\n";
  $config .= "\$currency = \"".$_REQUEST['currency']."\";\n";
  $config .= "\$button_image = \"".$_REQUEST['button_image']."\";\n";
  $config .= "\$premium_cost = \"".$_REQUEST['premium_cost']."\";\n";
  $config .= "\$featured_cost = \"".$_REQUEST['featured_cost']."\";\n";
  $config .= "\$postmode = \"".$_REQUEST['postmode']."\";\n";
  $config .= "\$ea_shortlist = \"".$_REQUEST['ea_shortlist']."\";\n";
  $config .= "\$ea_quicklist = \"".$_REQUEST['ea_quicklist']."\";\n";
  $config .= "\$ea_online_status = \"".$_REQUEST['ea_online_status']."\";\n";
  $config .= "\$ea_useflv = \"".$_REQUEST['ea_useflv']."\";\n";
  $config .= "\$ea_flvwidth = \"".$_REQUEST['ea_flvwidth']."\";\n";
  $config .= "\$ea_flvheight = \"".$_REQUEST['ea_flvheight']."\";\n";
  $config .= "\$ea_showsearch = \"".$_REQUEST['ea_showsearch']."\";\n";
  $config .= "\$ea_watermark = \"".$_REQUEST['ea_watermark']."\";\n";
  $config .= "\$ea_useini = \"".$_REQUEST['ea_useini']."\";\n";
  $config .= "\$ea_tempini = \"".$_REQUEST['ea_tempini']."\";\n";
  $config .= "\$ea_approf = \"".$_REQUEST['ea_approf']."\";\n";
  $config .= "\$ea_logowidth = \"".$_REQUEST['ea_logowidth']."\";\n";
  $config .= "\$ea_logoheight = \"".$_REQUEST['ea_logoheight']."\";\n";
  $config .= "\$ea_topperwidth = \"".$_REQUEST['ea_topperwidth']."\";\n";
  $config .= "\$ea_topperheight = \"".$_REQUEST['ea_topperheight']."\";\n";
  $config .= "\$ea_mapview = \"".$_REQUEST['ea_mapview']."\";\n";
  $config .= "\$ea_letterman = \"".$_REQUEST['ea_letterman']."\";\n";
  $config .= "\$ea_mypms = \"".$_REQUEST['ea_mypms']."\";\n";
  $config .= "\$ea_jreviews = \"".$_REQUEST['ea_jreviews']."\";\n";
  $config .= "\$ea_textalign = \"".$_REQUEST['ea_textalign']."\";\n";
  $config .= "\$ea_vehspecs = \"".$_REQUEST['ea_vehspecs']."\";\n";
  $config .= "\$ea_vehfeats = \"".$_REQUEST['ea_vehfeats']."\";\n";
  $config .= "\$ea_financespecs = \"".$_REQUEST['ea_financespecs']."\";\n";
  $config .= "\$ea_meta = \"".$_REQUEST['ea_meta']."\";\n";
  $config .= "\$ea_tagit_useit = \"".$_REQUEST['ea_tagit_useit']."\";\n";
  $config .= "\$ea_tagit_new = \"".$_REQUEST['ea_tagit_new']."\";\n";
  $config .= "\$ea_tagit_used = \"".$_REQUEST['ea_tagit_used']."\";\n";
  $config .= "\$ea_usetype = \"".$_REQUEST['ea_usetype']."\";\n";
  $config .= "\$ea_usetype1 = \"".$_REQUEST['ea_usetype1']."\";\n";
  $config .= "\$ea_usetype2 = \"".$_REQUEST['ea_usetype2']."\";\n";
  $config .= "\$ea_usetype3 = \"".$_REQUEST['ea_usetype3']."\";\n";
  $config .= "\$ea_usetype4 = \"".$_REQUEST['ea_usetype4']."\";\n";
  $config .= "\$ea_usetype5 = \"".$_REQUEST['ea_usetype5']."\";\n";
  $config .= "\$ea_usetype6 = \"".$_REQUEST['ea_usetype6']."\";\n";
  $config .= "\$ea_usefrequit = \"".$_REQUEST['ea_usefrequit']."\";\n";
  $config .= "\$ea_usefrequit1 = \"".$_REQUEST['ea_usefrequit1']."\";\n";
  $config .= "\$ea_usefrequit2 = \"".$_REQUEST['ea_usefrequit2']."\";\n";
  $config .= "\$ea_usefrequit3 = \"".$_REQUEST['ea_usefrequit3']."\";\n";
  $config .= "\$ea_usefrequit4 = \"".$_REQUEST['ea_usefrequit4']."\";\n";
  $config .= "\$ea_raddistance = \"".$_REQUEST['ea_raddistance']."\";\n";
  $config .= "\$ea_usecolour = \"".$_REQUEST['ea_usecolour']."\";\n";
  $config .= "\$ea_usedoors = \"".$_REQUEST['ea_usedoors']."\";\n";
  $config .= "\$ea_usebody = \"".$_REQUEST['ea_usebody']."\";\n";
  $config .= "\$ea_useyear = \"".$_REQUEST['ea_useyear']."\";\n";
  $config .= "\$ea_imgheight = \"".$_REQUEST['ea_imgheight']."\";\n";
  $config .= "\$ea_minyear = \"".$_REQUEST['ea_minyear']."\";\n";
  $config .= "\$ea_maxyear = \"".$_REQUEST['ea_maxyear']."\";\n";
  $config .= "\$ea_useeng = \"".$_REQUEST['ea_useeng']."\";\n";
  $config .= "\$ea_profnotice = \"".$_REQUEST['ea_profnotice']."\";\n";
  $config .= "\$ea_vinfilt = \"".$_REQUEST['ea_vinfilt']."\";\n";
  $config .= "\$ea_regfilt = \"".$_REQUEST['ea_regfilt']."\";\n";
  $config .= "\$ea_makefilt = \"".$_REQUEST['ea_makefilt']."\";\n";
  $config .= "\$ea_modfilt = \"".$_REQUEST['ea_modfilt']."\";\n";
  $config .= "\$ea_piclist = \"".$_REQUEST['ea_piclist']."\";\n";
  $config .= "\$ea_maxmiles = \"".$_REQUEST['ea_maxmiles']."\";\n";
  $config .= "\$ea_usecount = \"".$_REQUEST['ea_usecount']."\";\n";
  $config .= "\$ea_useback = \"".$_REQUEST['ea_useback']."\";\n";
  $config .= "\$ea_cms = \"".$_REQUEST['ea_cms']."\";\n";
  $config .= "?>";

  if ($fp = fopen("$configfile", "w")) {
    fputs($fp, $config, strlen($config));
    fclose ($fp);
  }
  mosRedirect("index2.php?option=".$option."&task=settings", _EZAUTOS_SETTINGS_SAVED);
}


/**************************************************\
                     End
                   Functions
\**************************************************/



?>