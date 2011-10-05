<?php

#############################################################################
#                                                                           #
#  EZ Realty 5.0.0 - A Mambo Real Estate component                          #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################

//Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );



    /**************************************************\
                         WHERE TO FINDIT
    \**************************************************/

switch ($task) {


  case 'helpers':
  helpers($_REQUEST['id']);
    break;


  case "deleteprofile_image": deleteProfileImage( $id, $option ); break;
  case "deletelogo_image": deleteLogoImage( $id, $option ); break;
  case "deletepdf_promo": deletePdfPromo( $id, $option ); break;
  case "deletepdfinfo": deletePdfInfo( $id, $option ); break;
  case "deletepage_topper": deletePageTopper( $id, $option ); break;


// Various RSS feeds and other exports

  case "newrss":
  include("components/com_ezautos/rss.ezautos.php");
    break;

  case "vast":
  include("components/com_ezautos/feeds/vast.ezautos.php");
    break;

  case "google":
  include("components/com_ezautos/feeds/google.ezautos.php");
    break;




// Privileges stuff

  case "publish":
    publishVehicle( $id, 1, $option );
    break;

  case "unpublish":
    publishVehicle( $id, 0, $option );
    break; 

  case "dofeatured":
    featuredVehicle( $id, 1, $option );
    break;

  case "unfeatured":
    featuredVehicle( $id, 0, $option );
    break; 

  case "resetdate":
    resetDate( $id, $option );
    break;



// PayPal IPN stuff

  case "upgrade1":
	upgrade1( $option );
	break;

  case "upgrade2":
	upgrade2( $option );
	break;

  case "upgrade3":
	upgrade3( $option );
	break;

  case "upgrade4":
	upgrade4( $option );
	break;


// shortlist stuff

  case "removelightbox":
	removeLightbox( $option, $id );
	break;

  case "lightbox":
	doLightbox( $option, $id );
	break;

  case "viewlightbox":
    EZHeader();
	viewLightbox( $option, $id );
	EZFooter();
	EZPowered();
	break;


// profile stuff


  case 'postmylistings':
    postMyListings( $option, $id );
    break;

  case 'dealerresults':
    EZHeader();
    dealerResults( $option, $limit, $limitstart );
	EZFooter();
	EZPowered();
    break;

  case 'displayprofiles':
    EZHeader();
    displayProfiles( $option, $limit, $limitstart );
    EZFooter();
	EZPowered();
    break;

  case 'dealerlistings':
    EZHeader();
    dealerListings( $option, $id, $limit, $limitstart );
    EZFooter();
	EZPowered();
    break;

  case 'showprofile':
    EZHeader();
    showProfile( $option, $id );
    EZFooter();
	EZPowered();
    break;

  case 'editprofile':
    EZMembersHeader();
    editProfile( $option, $id );
    EZMembersFooter();
	EZPowered();
    break;

  case 'addprofile':
    EZMembersHeader();
    editProfile( $option, 0 );
    EZMembersFooter();
	EZPowered();
    break;

  case 'saveprofile':
    saveProf( $option );
    break;


// VIP Buyer's functions


  case 'register':
    EZHeader();
    showLeads( $option );
	EZFooter();
	EZPowered();
	break;

  case 'savelead':
    EZHeader();
    saveLeads( $option );
	EZFooter();
	EZPowered();
	break;

  case 'unsubscribe':
    EZHeader();
    HTML_ezautos::unsubscribeLeads( $option );
	EZFooter();
	EZPowered();
	break;


  case "unsubscribevip":
	unsubscribeVip( $option );
	break;


  case 'showwanted':
    EZHeader();
    showWanted( $option );
	EZFooter();
	EZPowered();
	break;


  case 'enquire':
    EZEmailHeader();
    leadEnquiry( $option, $id );
	EZEmailFooter();
	break;


  case "enquiry2":
    sendEnquiry( $option );
	break;



// sms contact stuff


  case 'smsprofile':
    EZEmailHeader();
    smsProfile( $option, $id );
	EZEmailFooter();
	break;

  case "sendprofilesms":
    sendProfilesms( $option );
	break;

  case 'smsseller':
    EZEmailHeader();
    smsSeller( $option, $id );
	EZEmailFooter();
	break;

  case "send_sms":
    send_SMS( $option );
	break;



// email contact stuff


  case 'contactprofile':
    EZEmailHeader();
    contactProfile( $option, $id );
	EZEmailFooter();
	break;

  case "sendcontactprofile":
    sendContactProfile( $option );
	break;

  case 'contactseller':
    EZEmailHeader();
    contactSeller( $option, $id );
	EZEmailFooter();
	break;

  case "sendcontactseller":
    sendContactSeller( $option );
	break;

  case 'recommend':
    EZEmailHeader();
    recommendListing( $option, $id );
	EZEmailFooter();
    break;

  case 'sendrecommend':
    sendRecommend( $option );
	break;

  case 'maillist':
    EZEmailHeader();
    mailList( $option, $id );
	EZEmailFooter();
    break;

  case 'joinmaillist':
    joinMailList( $option );
	break;


  case 'enquire':
    EZEmailHeader();
    bookAdmin( $option, $id );
	EZEmailFooter();
	break;

  case "mailadmin":
    sendAdminMail( $option );
	break;



  case 'ezpanel':
    EZMembersHeader();
    myEZpanel( $option );
    EZMembersFooter();
	EZPowered();
    break;





  case 'featured':
    EZHeader();
    featuredList( $option, $limit, $limitstart );
	EZFooter();
	EZPowered();
    break;

  case 'newmake':
    EZEmailHeader();
    editMake( $option, $id );
	EZEmailFooter();
	EZPowered();
    break;

  case "savemake":
    saveMake( $option );
    break;

  case 'newmodel':
    EZEmailHeader();
    editModel( $option, $id );
	EZEmailFooter();
	EZPowered();
    break;

  case "savemodel":
    saveModel( $option );
    break;

  case "success":
    EZHeader();
    showSuccess( $option );
    EZFooter();
	EZPowered();
	break;

  case "cancel":
    EZHeader();
    showCancel( $option );
    EZFooter();
	EZPowered();
	break;

  case 'terms':
    EZMembersHeader();
	viewTerms( $option );
    EZMembersFooter();
	EZPowered();
	break;

  case 'preview_listing':
    if ( !$my->id ){
		mosNotAuth();
		return;
	}
    EZMembersHeader();
    previewDetails( $option, $id );
	EZMembersFooter();
	EZPowered();
	break;

  case 'save':
    saveList( $option );
    break;

  case 'deleteit':
    deleteListing( $id, $option );
    break;

  case 'edit':
    EZMembersHeader();
    editListing( $option, $id );
    EZMembersFooter();
	EZPowered();
    break;

  case 'addnew':
    EZMembersHeader();
    editListing( $option, 0 );
    EZMembersFooter();
	EZPowered();
    break;

  case 'multiresults':
    EZHeader();
    multiResults( $option, $limit, $limitstart );
	EZFooter();
	EZPowered();
    break;

  case 'results':
    EZHeader();
    searchResults2( $option, $limit, $limitstart );
	EZFooter();
	EZPowered();
    break;

  case 'search':
	EZHeader();
	itemSearch( $option );
	EZFooter();
	EZPowered();
	break;

  case 'print':
    EZPrintHeader();
    printDetails( $option, $id );
	EZPrintFooter();
    break;

  case 'listall':
    EZHeader();
    listAll( $option );
	EZFooter();
	EZPowered();
    break;

  case 'newlistings':
    EZHeader();
    newListings( $option );
	EZFooter();
	EZPowered();
    break;

  case 'detail':
    EZHeader();
    viewDetails( $option, $id );
	EZFooter();
	EZPowered();
    break;

  case 'viewcategory':
    EZHeader();
    viewCategory( $option, $id, $limit, $limitstart );
    EZFooter();
	EZPowered();
    break;

  case 'listcontents':
    EZHeader();
    listContents( $option, $id, $limit, $limitstart );
    EZFooter();
	EZPowered();
    break;

  case 'viewmodels':
    EZHeader();
    viewModels( $option, $id );
    EZFooter();
	EZPowered();
    break;

  default:
    EZHeader();
    showCategories( $option );
	EZFooter();
	EZPowered();
    break;

}



    /**************************************************\
                AJAX HELPER FUNCTION
    \**************************************************/


function helpers($id){
global $database, $mainframe;
switch ($id) {
  case '1':
  if(isset($_GET['firstCode'])){

    $query = "SELECT * FROM #__ezautos_model WHERE published='1' AND makeid=".$_GET['firstCode']." ORDER BY model";
    $database->setQuery( $query );
    $rows = $database->loadObjectList();
            echo "obj.options[obj.options.length] = new Option('"._EZAUTOS_DDSL_MODEL."','0');\n";
    foreach ($rows as $row){
             echo "obj.options[obj.options.length] = new Option('".$row->model."','".$row->moid."');\n";
    }
	
  }

  if(isset($_GET['firstCode2'])){

    $query = "SELECT * FROM #__ezautos_model WHERE published='1' AND makeid=".$_GET['firstCode2']." ORDER BY model";
    $database->setQuery( $query );
    $rows = $database->loadObjectList();
             echo "obj.options[obj.options.length] = new Option('"._EZAUTOS_DDSL_MODEL."','0');\n";
    foreach ($rows as $row){
             echo "obj.options[obj.options.length] = new Option('".$row->model."','".$row->moid."');\n";
    }
  }

  if(isset($_GET['firstCode3'])){

    $query = "SELECT * FROM #__ezautos_model WHERE published='1' AND makeid=".$_GET['firstCode3']." ORDER BY model";
    $database->setQuery( $query );
    $rows = $database->loadObjectList();
             echo "obj.options[obj.options.length] = new Option('"._EZAUTOS_DDSL_MODEL."','0');\n";
    foreach ($rows as $row){
             echo "obj.options[obj.options.length] = new Option('".$row->model."','".$row->moid."');\n";
    }
  }

  if(isset($_GET['firstCode4'])){

    $query = "SELECT * FROM #__ezautos_model WHERE published='1' AND makeid=".$_GET['firstCode4']." ORDER BY model";
    $database->setQuery( $query );
    $rows = $database->loadObjectList();
             echo "obj.options[obj.options.length] = new Option('"._EZAUTOS_DDSL_MODEL."','0');\n";
    foreach ($rows as $row){
             echo "obj.options[obj.options.length] = new Option('".$row->model."','".$row->moid."');\n";
    }
  }
 
 
 
 
 
  // Hrvoje 
 // For search and backend admin module   

  if(isset($_GET['firstCode6'])){

    $query = "SELECT * FROM #__ezautos_city WHERE published='1' AND countryid=".$_GET['firstCode6']." ORDER BY city";
    $database->setQuery( $query );
    $rows = $database->loadObjectList();
             echo "obj.options[obj.options.length] = new Option('"._EZAUTOS_DDSL_CITY."','0');\n";
    foreach ($rows as $row){
             echo "obj.options[obj.options.length] = new Option('".$row->city."','".$row->ciid."');\n";
    }
  }
  
 // For frontend admin module
   if(isset($_GET['firstCode10'])){

    $query = "SELECT * FROM #__ezautos_city WHERE published='1' AND countryid=".$_GET['firstCode10']." ORDER BY city";
    $database->setQuery( $query );
    $rows = $database->loadObjectList();
             echo "obj.options[obj.options.length] = new Option('"._EZAUTOS_DDSL_CITY."','0');\n";
    foreach ($rows as $row){
             echo "obj.options[obj.options.length] = new Option('".$row->city."','".$row->ciid."');\n";
    }
  }


 

 

  
  
  

///////////////////////////////////////////





  break;
 

}

}



    /**************************************************\
  	     	 	FRONT PAGE CATEGORY DISPLAY
    \**************************************************/

function showCategories( $option ) {
	global $database, $mainframe, $my, $ea_structure, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

  # Get the business introduction
	$query = "SELECT a.* FROM #__ezautos_content AS a"
	. "\n WHERE a.contid=1"
	;
	$database->setQuery( $query );
	$bizintro = $database->loadObjectList();


if ( $ea_structure == 1 ) {


  # Do the main database query
	$query = "SELECT c.* FROM #__ezautos_catg AS c"
	. "\n WHERE c.published='1'"
	. "\n AND c.access<='$my->gid'"
	. "\n ORDER BY c.ordering"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();


  # Bring it all to the screen
	HTML_ezautos::showCategories( $option, $rows, $bizintro );

} else if ( $ea_structure == 2 ) {


 # Build Make select list - Model select will be built by ajax

    $sql = "SELECT d.maid as value, d.make as text FROM #__ezautos_make AS d WHERE d.published = 1 ORDER by d.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_VLDET_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['make3'] = ezauHTML::selectList( $mtypelist, 'make', 'class="searchbox2" id="make3" size="1" onchange="getDropModelList3(this,0)" ','value', 'text', '');
    $lists['make4'] = ezauHTML::selectList( $mtypelist, 'make', 'class="searchbox2" id="make4" size="1" onchange="getDropModelList4(this,0)" ','value', 'text', '');

   $sql = "SELECT e.moid as value, e.model as text FROM #__ezautos_model AS e WHERE e.published = 1 ORDER by e.model";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $mltypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_VLDET_MODEL );
    $lists['model3'] = ezauHTML::selectList( $mltypelist, 'model', 'class="searchbox2" id="model3" size="1" ','value', 'text', '');
    $lists['model4'] = ezauHTML::selectList( $mltypelist, 'model', 'class="searchbox2" id="model4" size="1" ','value', 'text', '');








if ($ea_useyear) {

  # Build min year select list

	$yearlist1 = array();
		$yearlist1[] = ezauHTML::makeOption( '0', _EZAUTOS_LMIN_YEAR2 );
	for($i=$ea_minyear;$i<$ea_maxyear+1;$i++){
		$yearlist1[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['minyear'] = ezauHTML::selectList($yearlist1, 'minyear', 'class="slimsearchbox2" size="1"', 'value', 'text', '');

  # Build max year select list

	$yearlist2 = array();
		$yearlist2[] = ezauHTML::makeOption( '0', _EZAUTOS_LMAX_YEAR2 );
	for($i=$ea_maxyear;$i>$ea_minyear-1;$i--){
		$yearlist2[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['maxyear'] = ezauHTML::selectList($yearlist2, 'maxyear', 'class="slimsearchbox2" size="1"', 'value', 'text', '');

}


  # Do the main database query
	$query = "SELECT c.* FROM #__ezautos_catg AS c"
	. "\n WHERE c.published='1'"
	. "\n AND c.access<='$my->gid'"
	. "\n ORDER BY c.ordering"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();



  # Bring it all to the screen
	HTML_ezautos::showMulti( $option, $rows, $lists, $bizintro );

} else {

  # Do the main database query
	$query = "SELECT b.* FROM #__ezautos_make AS b"
	. "\n WHERE b.published='1'"
	. "\n ORDER BY b.make"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showMakes( $option, $rows, $bizintro );

}

}


    /**************************************************\
  	  	 	COUNT HOW MANY THINGS ARE IN THE MAKE
    \**************************************************/

function CountCont2 ( $mak ) {
	global $database;
	global $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

if ( $ea_expmgmt==1 ) {
	if ( $ea_expsys==0 ) {
	$query="SELECT count(b.id) as count FROM #__ezautos AS b WHERE b.make = $mak AND b.published=1 AND b.hits<$ea_impnum";
} else {
	$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));
	$query="SELECT count(b.id) as count FROM #__ezautos AS b WHERE b.make = $mak AND b.published=1 AND b.expdate>$currentdate";
}
	} else {
	$query="SELECT count(b.id) as count FROM #__ezautos AS b WHERE b.make = $mak AND b.published=1";
}
	$database->setQuery( $query );
	$result=$database->query();
	$val=mysql_fetch_row( $result );
	return $val[0];
}

    /**************************************************\
  	     	 	MODEL DISPLAY
    \**************************************************/

function viewModels( $option, $id ) {
	global $database, $mainframe, $myItemid, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

  # Get the make name
	$query = "SELECT make FROM #__ezautos_make"
	. "\n WHERE maid=$id"
	;
	$database->setQuery( $query );
	$makename = $database->loadResult();

  # Do the main database query
	$query = "SELECT * FROM #__ezautos_model"
	. "\n WHERE published='1'"
	. "\n AND makeid = $id"
	. "\n ORDER BY model"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();



///////////////////////////////////////
  # Hrvoje : Get the Country name
	$query = "SELECT country FROM #__ezautos_country"
	. "\n WHERE coid=$id"
	;
	$database->setQuery( $query );
	$countryname = $database->loadResult();

  # Do the main database query
	$query = "SELECT * FROM #__ezautos_city"
	. "\n WHERE published='1'"
	. "\n AND countryid = $id"
	. "\n ORDER BY city"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();
////////////////////////////////////////////



  # Bring it all to the screen
	HTML_ezautos::viewModels( $option, $rows, $id, $makename, $countryname, $cityname );
}


    /**************************************************\
  	  	 	COUNT HOW MANY THINGS ARE IN THE MODEL
    \**************************************************/

function CountCont3 ( $mod ) {
	global $database;
	global $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

if ( $ea_expmgmt==1 ) {
	if ( $ea_expsys==0 ) {
	$query="SELECT count(id) as count FROM #__ezautos WHERE model = $mod AND published=1 AND hits<$ea_impnum";
} else {
	$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));
	$query="SELECT count(id) as count FROM #__ezautos WHERE model = $mod AND published=1 AND expdate>$currentdate";
}
	} else {
	$query="SELECT count(id) as count FROM #__ezautos WHERE model = $mod AND published=1";
}
	$database->setQuery( $query );
	$result=$database->query();
	$val=mysql_fetch_row( $result );
	return $val[0];
}


    /**************************************************\
  	     	 	LIST MODEL CONTENTS
    \**************************************************/

function listContents( $option, $id, $limit, $limitstart ) {
	global $database, $my, $mainframe, $myItemid, $ea_perpage, $mosConfig_list_limit, $mosConfig_absolute_path;
	global $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");
DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

  # Get the model name
	$query = "SELECT dd.model FROM #__ezautos_model AS dd"
	. "\n WHERE dd.moid=$id"
	;
	$database->setQuery( $query );
	$modelname = $database->loadResult();


if ( $ea_expmgmt==1 ) {


if ( $ea_expsys==0 ) {

  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published = '1' AND a.model = $id AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.model=$id AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published = '1' AND a.model = $id AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.model=$id AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


} else {


  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published = '1' AND a.model = $id"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.model=$id"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}




  # Bring it all to the screen
	HTML_ezautos::listContents( $option, $rows, $id, $pageNav, $total, $modelname );
}


    /**************************************************\
        		 	LIST CATEGORY CONTENTS
    \**************************************************/

function viewCategory( $option, $id, $limit, $limitstart ) {
	global $database, $my, $mainframe, $myItemid, $ea_perpage, $mosConfig_list_limit, $mosConfig_absolute_path;
	global $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");
	DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

	$category = new mosCatgs( $database );
	$category->load( (int)$id );

	if(!$category->published) {
		mosNotAuth();
		return;
	}

	if( $category->access > $my->gid ) {
		mosNotAuth();
		return;
	}


if ( $ea_expmgmt==1 ) {


if ( $ea_expsys==0 ) {

  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg as cc on cc.cid=a.cid"
	. "\n WHERE a.published = '1' AND a.cid = $id AND a.hits<$ea_impnum"
	. "\n AND cc.access<=$gid"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.cid=$id AND a.expdate>$currentdate"
	. "\n AND cc.access<='$gid'" 
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));


  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg as cc on cc.cid=a.cid"
	. "\n WHERE a.published = '1' AND a.cid = $id AND a.hits<$ea_impnum"
	. "\n AND cc.access<=$gid"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.cid=$id AND a.expdate>$currentdate"
	. "\n AND cc.access<='$gid'" 
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


} else {


  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg as cc on cc.cid=a.cid"
	. "\n WHERE a.published = '1' AND a.cid = $id"
	. "\n AND cc.access<=$gid"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.cid=$id"
	. "\n AND cc.access<='$gid'" 
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


  # Bring it all to the screen
	HTML_ezautos::viewCategory( $option, $rows, $id, $category, $pageNav, $total );
}



    /**************************************************\
    		 	SHOW INDIVIDUAL ITEM DETAILS
    \**************************************************/

function viewDetails( $option, $id ) {
	global $database, $mainframe, $mosConfig_absolute_path, $myItemid, $my, $ea_impnum;
	global $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

  # Get the business logo content
	$query = "SELECT content FROM #__ezautos_content"
	. "\n WHERE contid=6"
	;
	$database->setQuery( $query );
	$ezlogo = $database->loadResult();



	$MetaTitle 	= $mainframe->getCfg('MetaTitle');


     $query = "SELECT a.*, c.name AS category, b.make AS makename, d.model as modelname, co.country AS countryname, ci.city as cityname, 
	u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, 
	u.dealer_mobile AS dealer_mobile, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, 
	u.published AS dealerpublished, u.dealer_declat AS dealer_declat, u.dealer_declong AS dealer_declong,
	q.username AS user1, u.show_addy AS show_addy FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_catg as c on c.cid=a.cid"
	. "\n LEFT JOIN #__ezautos_make as b ON b.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as d ON d.moid=a.model"
	// Hrvoje for Country
	. "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	//
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n LEFT JOIN #__users AS q ON q.id = a.owner"
    . "\n WHERE a.published = '1' AND a.id = $id";
    $database->setQuery( $query );
    $database->loadObject($row);


  # Check if item has not exceeded expiration limit

	if ( $ea_expmgmt==1 && $ea_expsys==0 ) {
		if ($row->hits>=$ea_impnum) {
			echo _EZAUTOS_NLAVAIL;
			return;
		}
	}

	if ( $ea_expmgmt==1 && $ea_expsys==1 ) {

	$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

		if ($row->expdate<$currentdate) {
			echo _EZAUTOS_NLAVAIL;
			return;
		}
	}


  # Check if item is published

	if (!$row->published) {
		echo _EZAUTOS_NLAVAIL;
		return;
	}

	$cat = new mosCatgs($database);
	$cat->load($row->cid);

  # Check if category is published

	if (!$cat->published) {
		mosNotAuth();
		return;
	}

  # Check whether category access level allows access to the item

	if ( $cat->access > $my->gid ) {	
		mosNotAuth();  
		return;
	}


  # Record the hit
	$query = "UPDATE #__ezautos"
	. "\n SET hits = hits + 1"
	. "\n WHERE id = $id"
	;
	$database->setQuery( $query );
	$database->query();


	HTML_ezautos::viewDetails( $option, $row, $ezlogo );
}


    /**************************************************\
    		 	PREVIEW INDIVIDUAL ITEM DETAILS
    \**************************************************/

function previewDetails( $option, $id ) {
	global $database, $mainframe, $mosConfig_absolute_path, $myItemid, $my, $ea_memlistings, $ea_sbimp, $ea_impnum;

include(EZADMIN_PATH."/config.ezautos.php");

  # Get the business logo content
	$query = "SELECT content FROM #__ezautos_content"
	. "\n WHERE contid=6"
	;
	$database->setQuery( $query );
	$ezlogo = $database->loadResult();


     $query = "SELECT a.*, c.name AS category, b.make AS makename, d.model as modelname, 
	u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, 
	u.dealer_mobile AS dealer_mobile, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, 
	u.published AS dealerpublished, u.dealer_declat AS dealer_declat, u.dealer_declong AS dealer_declong,
	q.username AS user1, u.show_addy AS showaddy FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_catg as c on c.cid=a.cid"
	. "\n LEFT JOIN #__ezautos_make as b ON b.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as d ON d.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n LEFT JOIN #__users AS q ON q.id = a.owner"
    . "\n WHERE a.published = '1' AND a.id = $id";
    $database->setQuery( $query );
    $database->loadObject($row);


  # Check whether member has access to preview the item

	if ( $row->owner <> $my->id ) {	
		mosNotAuth();  
		return;
	}

	
	HTML_ezautos::viewDetails( $option, $row, $ezlogo );
}


    /**************************************************\
    		 	SHOW THE NEW LISTINGS
    \**************************************************/


function newListings( $option ) {
	global $database, $mainframe, $myItemid, $ea_newlist, $mosConfig_list_limit, $mosConfig_absolute_path;
	global $ea_memlistings, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
		// By Hrvoje for City Country
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	////////////////////////////
	. "\n WHERE a.published=1 AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $ea_newlist"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
		// By Hrvoje for City Country
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	////////////////////////////
	. "\n WHERE a.published=1 AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $ea_newlist"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


}

} else {

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	// By Hrvoje for City Country
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	////////////////////////////
	. "\n WHERE a.published=1"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $ea_newlist"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


}

  # Bring it all to the screen
	HTML_ezautos::newListings( $option, $rows );
}



    /**************************************************\
    		 	SHOW ALL OF THE LISTINGS
    \**************************************************/


function listAll( $option ) {
	global $database, $mainframe, $myItemid, $mosConfig_list_limit, $mosConfig_absolute_path;
	global $ea_memlistings, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
		// By Hrvoje for Country City
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	
	. "\n WHERE a.published=1 AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	
		// By Hrvoje for Country City
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	
	. "\n WHERE a.published=1 AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

}

} else {

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"	
	// By Hrvoje for Country City
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"

	. "\n WHERE a.published=1"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

}

  # Bring it all to the screen
	HTML_ezautos::listAll( $option, $rows );
}


    /**************************************************\
          SHOW INDIVIDUAL ITEM DETAILS FOR PRINTING
    \**************************************************/

function printDetails( $option, $id ) {
	global $database, $mainframe, $mosConfig_absolute_path, $mosConfig_live_site, $myItemid, $my;
	global $ea_memlistings, $ea_sbimp, $ea_impnum;
	global $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

  # Get the business logo content
	$query = "SELECT content FROM #__ezautos_content"
	. "\n WHERE contid=6"
	;
	$database->setQuery( $query );
	$ezlogo = $database->loadResult();


     $query = "SELECT a.*, c.name AS category, b.make AS makename, d.model as modelname, 
	u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, 
	u.dealer_mobile AS dealer_mobile, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, 
	u.published AS dealerpublished, u.dealer_declat AS dealer_declat, u.dealer_declong AS dealer_declong,
	q.username AS user1, u.show_addy AS showaddy FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_catg as c on c.cid=a.cid"
	. "\n LEFT JOIN #__ezautos_make as b ON b.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as d ON d.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n LEFT JOIN #__users AS q ON q.id = a.owner"
    . "\n WHERE a.published = '1' AND a.id = $id";
    $database->setQuery( $query );
    $database->loadObject($row);


  # Check if item has not exceeded expiration limit

	if ( $ea_expmgmt==1 && $ea_expsys==0 ) {
		if ($row->hits>=$ea_impnum) {
			echo _EZAUTOS_NLAVAIL;
			return;
		}
	}

	if ( $ea_expmgmt==1 && $ea_expsys==1 ) {

	$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

		if ($row->expdate<$currentdate) {
			echo _EZAUTOS_NLAVAIL;
			return;
		}
	}

  # Check if item is published

	if (!$row->published) {
		echo _EZAUTOS_NLAVAIL;
		return;
	}

	$cat = new mosCatgs($database);
	$cat->load($row->cid);

  # Check if category is published

	if (!$cat->published) {
		mosNotAuth();
		return;
	}

  # Check whether category access level allows access to the item

	if ( $cat->access > $my->gid ) {	
		mosNotAuth();  
		return;
	}

	HTML_ezautos::printDetails( $option, $row, $ezlogo );
}



    /**************************************************\
    		 	SHOW THE FEATURED LISTINGS
    \**************************************************/


function featuredList( $option, $limit, $limitstart ) {
	global $database, $mainframe, $myItemid, $ea_perpage, $ea_newlist, $mosConfig_list_limit, $mosConfig_absolute_path;
	global $ea_memlistings, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");
DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n WHERE a.published = '1' AND a.featured = 1 AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname,"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.featured = 1 AND a.hits<$ea_impnum"
	. "\n ORDER BY rand()"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n WHERE a.published = '1' AND a.featured = 1 AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.featured = 1 AND a.expdate>$currentdate"
	. "\n ORDER BY rand()"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

}

} else {


  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n WHERE a.published = '1' AND a.featured = 1"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.featured = 1"
	. "\n ORDER BY rand()"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

}


  # Bring it all to the screen
	HTML_ezautos::featuredList( $option, $rows, $pageNav, $total );
}


    /**************************************************\
  	     	 	DO THE LIGHTBOX STUFF
    \**************************************************/

function doLightbox( $option, $id ) {
	global $database, $my, $mainframe, $myItemid;

include(EZADMIN_PATH."/config.ezautos.php");

  # Check that person has access to lightboxing

    if ( !$my->id ){
	echo _EZAUTOS_NEEDTOLOGIN;  
	return;
    }

$propid = (int) $id;

$database->SetQuery("SELECT count(*) from #__ezautos_lightbox WHERE propid = '$propid' AND uid='$my->id'");
$exists = $database->LoadResult();

if ($exists > 0){

		echo "<script> alert('"._EZAUTOS_SHORTLIST_ERROR."'); window.history.go(-1); </script>\n";

	    EZEmailHeader();
		EZClose();
		EZEmailFooter();

} else {

	$row = new mosLightbox( $database );

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	$row->propid = $propid;
	$row->uid = $my->id;
	$row->date=mktime();

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }


    EZEmailHeader();
	EZClose();
	EZEmailFooter();

}

}


    /**************************************************\
  	     	 	REMOVE THE LIGHTBOX ENTRY
    \**************************************************/

function removeLightbox( $option, $id ) {
	global $database, $my, $mainframe, $myItemid;

include(EZADMIN_PATH."/config.ezautos.php");

  # Check that person has access to lightboxing

    if ( !$my->id ){
	echo _EZAUTOS_NEEDTOLOGIN;  
	return;
    }

$llid = (int) $id;

	$row=new mosLightbox( $database );
	$row->load( $id );

	$database->setQuery( "DELETE FROM #__ezautos_lightbox WHERE llid=$id AND uid=$my->id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}

	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewlightbox") );


}


    /**************************************************\
        	LIST THE STUFF SAVED IN MY LIGHTBOX
    \**************************************************/

function viewLightbox( $option, $id ) {
	global $database, $my, $mainframe, $myItemid, $mosConfig_absolute_path, $ea_memlistings;
global $ea_perpage, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

  # Check that person has access to lightboxing

    if ( !$my->id ){
	echo _EZAUTOS_NEEDTOLOGIN;  
	return;
    }


if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {


  # Do the main database query to list the contents
	$query = "SELECT a.*, lb.llid AS litem, ma.make as makename,mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_lightbox as lb on lb.propid=a.id"
	. "\n LEFT JOIN #__ezautos_catg as c on c.cid=a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND lb.uid=$my->id AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));


  # Do the main database query to list the contents
	$query = "SELECT a.*, lb.llid AS litem, ma.make as makename,mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_lightbox as lb on lb.propid=a.id"
	. "\n LEFT JOIN #__ezautos_catg as c on c.cid=a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND lb.uid=$my->id AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();


}

} else {


  # Do the main database query to list the contents
	$query = "SELECT a.*, lb.llid AS litem,  ma.make as makename,mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_lightbox as lb on lb.propid=a.id"
	. "\n LEFT JOIN #__ezautos_catg as c on c.cid=a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND lb.uid=$my->id"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


  # Bring it all to the screen
	HTML_ezautos::viewLightbox( $option, $rows, $id );
}



    /**************************************************\
    		 	SHOW THE LEADS SUBMISSION PAGE
    \**************************************************/


function showLeads( $option ) {
	global $database, $mainframe, $myItemid;

include(EZADMIN_PATH."/config.ezautos.php");

 # Build Vehicle Category select list

	$sql	= "SELECT c.cid as value, c.name as text FROM #__ezautos_catg AS c WHERE c.published=1 ORDER by c.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}
	$ptypelist[] = ezauHTML::makeOption( '', _EZAUTOS_DDSL_CATG );
	$ptypelist = array_merge( $ptypelist, $database->loadObjectList() );
	$lists['cid'] = ezauHTML::selectList( $ptypelist, 'cid', 'class="searchbox" size="1"','value', 'text', '');

 # Build Make select list - Model select will be built by ajax

    $sql = "SELECT d.maid as value, d.make as text FROM #__ezautos_make AS d WHERE d.published = 1 ORDER by d.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALMAK );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['make3'] = ezauHTML::selectList( $mtypelist, 'make', 'class="searchbox" id="make3" size="1" onchange="getDropModelList3(this,0)" ','value', 'text', '');
   $sql = "SELECT e.moid as value, e.model as text FROM #__ezautos_model AS e WHERE e.published = 1 ORDER by e.model";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mltypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALMOD );
    $lists['model3'] = ezauHTML::selectList( $mltypelist, 'model', 'class="searchbox" id="model3" size="1" ','value', 'text', '');
	
	
	
	
// Added by Hrvoje for adding country and city into leads
$sql = "SELECT co.coid as value, co.country as text FROM #__ezautos_country AS co WHERE co.published = 1 ORDER by co.country";
$database->setQuery($sql);
if (!$database->query()) {
echo $database->stderr();
return;
}

$ctypelist[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALCOUNTRIES );
$ctypelist = array_merge( $ctypelist, $database->loadObjectList() );
$lists['country2'] = mosHTML::selectList( $ctypelist, 'country', 'class="searchbox2" id="country2" size="1" onchange="getDropCityList6(this,0)" ','value', 'text', '');

$sql = "SELECT ci.ciid as value, ci.city as text FROM #__ezautos_city AS ci WHERE ci.published = 1 ORDER by ci.city";
$database->setQuery($sql);
if (!$database->query()) {
echo $database->stderr();
return;
}

$cltypelist[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALCITIES );
$lists['city2'] = mosHTML::selectList( $cltypelist, 'city', 'class="searchbox2" id="city2" size="1" ','value', 'text', '');
//////////////////////////////





  # Build Max Price select list

	$sql	= "SELECT b.range as value, b.display as text FROM #__ezautos_price AS b WHERE b.published=1 ORDER by b.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$budgetit[] = ezauHTML::makeOption( '', _EZAUTOS_SEARCH_MAXPRI );
	$budgetit = array_merge( $budgetit, $database->loadObjectList() );
	$lists['maxprice'] = ezauHTML::selectList( $budgetit, 'maxprice', 'class="searchbox" size="1"','value', 'text', '');


  # Build min year select list

	$yearlist1 = array();
		$yearlist1[] = ezauHTML::makeOption( '0', _EZAUTOS_EARLIEST_YEAR );
	for($i=$ea_minyear;$i<$ea_maxyear+1;$i++){
		$yearlist1[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['minyear'] = ezauHTML::selectList($yearlist1, 'minyear', 'class="searchbox" size="1"', 'value', 'text', '');

  # Build max year select list

	$yearlist2 = array();
		$yearlist2[] = ezauHTML::makeOption( '0', _EZAUTOS_LATEST_YEAR );
	for($i=$ea_maxyear;$i>$ea_minyear-1;$i--){
		$yearlist2[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['maxyear'] = ezauHTML::selectList($yearlist2, 'maxyear', 'class="searchbox" size="1"', 'value', 'text', '');


  	$lists['html'] = ezauHTML::yesnoRadioList( 'html', 'class="inputbox"', '' );
  	$lists['listwanted'] = ezauHTML::yesnoRadioList( 'listwanted', 'class="inputbox"', '' );


  # Bring it all to the screen
	HTML_ezautos::showLeads( $option, $lists );
}


    /**************************************************\
                SAVE VEHICLE LEADS
    \**************************************************/


function saveLeads( ) {
	global $database, $myItemid, $ea_leadsnotice, $mosConfig_sitename, $mosConfig_mailfrom, $ea_bizemail, $mosConfig_usecaptcha;

include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("CAPTCHA_PATH","includes");

		$captcha_success = 0;
		if ($mosConfig_usecaptcha == '1' && file_exists(CAPTCHA_PATH."/captcha.php")) {

			session_name('mos_captcha');
			session_start();

			$spamstop = mosGetParam( $_POST, 'spamstop', '' );

			if(isset($_SESSION['code']) && ($_SESSION['code'] != "") && ($_SESSION['code'] == $spamstop)) {
				$captcha_success = 1; // success
			} else {
				$captcha_success = 2; // fail
			}

		}

		if ($captcha_success != '2') {

	$email = $_POST['email'];


if(!check_email($email)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
} else {

	$row = new mosLeads( $database );

if ( !$row->bind( $_POST, "approved owner published" ) ) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>\n";
	exit();
	}

	// sanitise id field
	$row->lid = (int) $row->lid;

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	$row->html = "1";
	$row->date = mktime();
	mosMakeHtmlSafe( $row );

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }


  # send admin an email about the submitted lead if leads notification is enabled

	if ( $ea_leadsnotice ) {

	$subject=$mosConfig_sitename  . _EZAUTOS_YOUVEGOTMAIL;
	$headers = "From: $mosConfig_sitename\r\n";
	$headers .= "Reply-To: $mosConfig_mailfrom\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

	$success = mosMail('', $mosConfig_sitename, $ea_bizemail, $subject, _EZAUTOS_LEADS_SUBMSG,0, NULL, NULL, NULL, $mosConfig_mailfrom, $mosConfig_sitename);

	}


	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid"), _EZAUTOS_LEADS_THANKS );

}
		} else {
			echo "<SCRIPT> alert('"._EZAUTOS_SECURITY_FAILED."'); window.history.go(-1);</SCRIPT>";
		}

}



    /**************************************************\
    		 	SHOW THE VEHICLES WANTED LEADS PAGE
    \**************************************************/


function showWanted( $option ) {
	global $database, $mainframe, $myItemid, $mosConfig_absolute_path, $mosConfig_list_limit, $ea_newlist;

  include(EZADMIN_PATH."/config.ezautos.php");

  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos_leads AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	// Hrvoje
    . "\n LEFT JOIN #__ezautos_country as co ON co.coid=a.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=a.city"
	
	///////
	. "\n WHERE a.published = '1' AND a.listwanted = '1'"
	. "\n ORDER BY a.lid DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


  # Bring it all to the screen
	HTML_ezautos::showWanted( $option, $rows );
}



    /**************************************************\
             SHOW LEAD ENQUIRY FORM
    \**************************************************/

function leadEnquiry( $option, $id ) {
	global $database, $mainframe, $myItemid, $my, $ea_reglead;

  include(EZADMIN_PATH."/config.ezautos.php");

  # Check if leads management is enabled

	if (!$ea_reglead) {
		mosNotAuth();
		return;
	}

	$row = new mosLeads( $database );
	$row->load( $id );

	HTML_ezautos::leadEnquiry( $option, $row );
}



    /**************************************************\
          SEND INTERESTED IN SALES LEAD RESPONSE
    \**************************************************/


function sendEnquiry ( $option ) {
	global $database, $myItemid, $mosConfig_db, $ea_bizemail, $mosConfig_live_site, $er_bizname, $ea_reglead, $mosConfig_usecaptcha;

  include(EZADMIN_PATH."/config.ezautos.php");

  # Check if leads management is enabled

	if (!$ea_reglead) {
		mosNotAuth();
		return;
	}


DEFINE("CAPTCHA_PATH","includes");

		$captcha_success = 0;
		if ($mosConfig_usecaptcha == '1' && file_exists(CAPTCHA_PATH."/captcha.php")) {

			session_name('mos_captcha');
			session_start();

			$spamstop = mosGetParam( $_POST, 'spamstop', '' );

			if(isset($_SESSION['code']) && ($_SESSION['code'] != "") && ($_SESSION['code'] == $spamstop)) {
				$captcha_success = 1; // success
			} else {
				$captcha_success = 2; // fail
			}

		}

		if ($captcha_success != '2') {

//Get the post variables 

	$enqname = $_POST['enqname'];
	$enqmail = $_POST['enqmail'];
	$telephone = $_POST['telephone'];
	$enqmessage = $_POST['enqmessage'];
	$lid = intval( $_POST['lid'] );


if(!check_email($enqmail)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
} else {


//Build the message

	$subject= stripslashes ( $ea_bizname ) .' '. _EZAUTOS_LEAD_RESPONSE;

	$message=$enqname . " (" . $enqmail . ")" . " "._EZAUTOS_RESPONS_PROPLEAD." ".$lid."\r \n";
	$message.=_EZAUTOS_TELEPHONE." $telephone \r\n "._EZAUTOS_SELLER_SMS10.":- ".$enqmessage ;

//Create the mail headers

	$headers = "From: $ea_bizemail\r\n";
	$headers .= "Reply-To: $enqmail\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos Vehicle Listing Software\r\n";

//Send the message 

	$success = mosMail('', $enqname, $ea_bizemail, $subject, $message,0, NULL, NULL, NULL, $enqmail, $enqname);

    EZEmailHeader();
	EZClose();
	EZEmailFooter();

}

		} else {
			echo "<SCRIPT> alert('"._EZAUTOS_SECURITY_FAILED."'); window.history.go(-1);</SCRIPT>";
		}

}



    /**************************************************\
     UNSUBSCRIBE FROM THE VIP BUYERS REGISTER/LEADS MANAGER
    \**************************************************/


function unsubscribeVip( $option ) {
	global $database, $mainframe, $myItemid, $my, $ea_reglead, $mosConfig_usecaptcha;

  include(EZADMIN_PATH."/config.ezautos.php");

  # Check if leads management is enabled

	if (!$ea_reglead) {
		mosNotAuth();
		return;
	}

	$email = addslashes(mosGetParam( $_POST, 'email'));

	$database->setQuery( "select * from #__ezautos_leads where email = '$email'" );
	$doit=$database->loadResult();

	if ( $doit ) {

		$row=new mosLeads( $database );
		$row->load( $email );

		$database->setQuery( "DELETE FROM #__ezautos_leads WHERE email = '$email'" );

		if ( !$database->query() ) {
			echo "<script> alert('" . $database->getErrorMsg()
		. "'); window.history.go(-1); </script>\n";
		} else {

			mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=unsubscribe&Itemid=$myItemid"), _EZAUTOS_UNSUBSCRIBE_SUCCESS);
		}
	} else {
		mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=unsubscribe&Itemid=$myItemid"), _EZAUTOS_UNSUBSCRIBE_FAILED);
	}

}


    /**************************************************\
                SHOW THE SEARCH FORM
    \**************************************************/


function itemSearch ( $option ) {
	global $database, $mainframe, $myItemid, $ea_tagit_demo, $ea_tagit_asnew, $ea_tagit_preluv, $ea_tagit_spare, $ea_useeng;
	global $ea_usetrans, $ea_usefuel, $ea_usecond, $ea_usepcode, $ea_minyear, $ea_maxyear, $ea_usecat, $ea_usemakmod;

include(EZADMIN_PATH."/config.ezautos.php");


if ($ea_usecat) {

  # get list of categories

    $query = "SELECT c.cid AS value, c.name AS text"
    . "\n FROM #__ezautos_catg AS c WHERE c.published=1"
    . "\n ORDER BY c.ordering"
    ;
    $categorys[] = ezauHTML::makeOption( '', _EZAUTOS_SEARCH_SELALCAT );
    $database->setQuery( $query );
    $categorys = array_merge( $categorys, $database->loadObjectList() );
    $lists['cid']   = ezauHTML::selectList( $categorys, 'cid', 'class="searchbox2" size="1"' , 'value', 'text', '' );

}

if ($ea_usemakmod) {

 
 # Build Make select list - Model select will be built by ajax
    $sql = "SELECT d.maid as value, d.make as text FROM #__ezautos_make AS d WHERE d.published = 1 ORDER by d.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALMAK );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['make3'] = ezauHTML::selectList( $mtypelist, 'make', 'class="searchbox2" id="make3" size="1" onchange="getDropModelList3(this,0)" ','value', 'text', '');

   $sql = "SELECT e.moid as value, e.model as text FROM #__ezautos_model AS e WHERE e.published = 1 ORDER by e.model";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $mltypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALMOD );
    $lists['model3'] = ezauHTML::selectList( $mltypelist, 'model', 'class="searchbox2" id="model3" size="1" ','value', 'text', '');

}


// Added by Hrvoje for Country Cities advanced search
$sql = "SELECT co.coid as value, co.country as text FROM #__ezautos_country AS co WHERE co.published = 1 ORDER by co.country";
$database->setQuery($sql);
if (!$database->query()) {
echo $database->stderr();
return;
}

$ctypelist[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALCOUNTRIES );
$ctypelist = array_merge( $ctypelist, $database->loadObjectList() );
$lists['country2'] = mosHTML::selectList( $ctypelist, 'country', 'class="searchbox2" id="country2" size="1" onchange="getDropCityList6(this,0)" ','value', 'text', '');

$sql = "SELECT ci.ciid as value, ci.city as text FROM #__ezautos_city AS ci WHERE ci.published = 1 ORDER by ci.city";
$database->setQuery($sql);
if (!$database->query()) {
echo $database->stderr();
return;
}

$cltypelist[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALCITIES );
$lists['city2'] = mosHTML::selectList( $cltypelist, 'city', 'class="searchbox2" id="city2" size="1" ','value', 'text', '');






if ( $ea_sitetype==0 ) {

  # Build Min Price select list

	$sql	= "SELECT f.range as value, f.display as text FROM #__ezautos_price AS f WHERE f.published = 1 ORDER by f.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$minpriceit[] = ezauHTML::makeOption( '', _EZAUTOS_DDSL_SELMIN );
	$minpriceit = array_merge( $minpriceit, $database->loadObjectList() );
	$lists['minprice'] = ezauHTML::selectList( $minpriceit, 'minprice', 'class="searchbox2" size="1"','value', 'text', '');


  # Build Max Price select list

	$sql	= "SELECT g.range as value, g.display as text FROM #__ezautos_price AS g WHERE g.published = 1 ORDER by g.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$maxpriceit[] = ezauHTML::makeOption( '', _EZAUTOS_DDSL_SELMAX );
	$maxpriceit = array_merge( $maxpriceit, $database->loadObjectList() );
	$lists['maxprice'] = ezauHTML::selectList( $maxpriceit, 'maxprice', 'class="searchbox2" size="1"','value', 'text', '');

}

if ($ea_usecond) {

  # Build vehicle condition select list

  	$tagit[] = ezauHTML::makeOption( '', _EZAUTOS_SEARCH_ANYCOND );
if ($ea_tagit_new) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_NEW, _EZAUTOS_TAGIT_NEW );
}
if ($ea_tagit_used) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_USED, _EZAUTOS_TAGIT_USED );
}
if ($ea_tagit_demo) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_DEMO, _EZAUTOS_TAGIT_DEMO );
}
if ($ea_tagit_asnew) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_ASNEW, _EZAUTOS_TAGIT_ASNEW );
}
if ($ea_tagit_preluv) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_PRELUV, _EZAUTOS_TAGIT_PRELUV );
}
if ($ea_tagit_spare) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_SPARE, _EZAUTOS_TAGIT_SPARE );
}
  
  	$lists['tag'] = ezauHTML::selectList( $tagit, 'tag', 'class="searchbox2" size="1"' , 'value', 'text', '' );

}

if ($ea_usetrans) {

  # Build transmission select list

	$transmission[] = ezauHTML::makeOption( '', _EZAUTOS_ANY_TRANS );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_AUTO, _EZAUTOS_TRANSTYPE_AUTO );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_MAN, _EZAUTOS_TRANSTYPE_MAN );
	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_SEMIA, _EZAUTOS_TRANSTYPE_SEMIA );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_CVT, _EZAUTOS_TRANSTYPE_CVT );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_OTH, _EZAUTOS_TRANSTYPE_OTH );
  
  	$lists['trans'] = ezauHTML::selectList( $transmission, 'trans', 'class="searchbox2" size="1"' , 'value', 'text', '' );

}

if ($ea_usefuel) {

  # Build Fuel select list

	$fuel_typeit[] = ezauHTML::makeOption( '', _EZAUTOS_ANY_FUEL );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE2, _EZAUTOS_FUEL_TYPE2 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE3, _EZAUTOS_FUEL_TYPE3 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE4, _EZAUTOS_FUEL_TYPE4 );
    $fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE5, _EZAUTOS_FUEL_TYPE5 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE6, _EZAUTOS_FUEL_TYPE6 );
	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE7, _EZAUTOS_FUEL_TYPE7 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE8, _EZAUTOS_FUEL_TYPE8 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE9, _EZAUTOS_FUEL_TYPE9 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE10, _EZAUTOS_FUEL_TYPE10 );
    $fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE11, _EZAUTOS_FUEL_TYPE11 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE13, _EZAUTOS_FUEL_TYPE13 );

  	$lists['fuel'] = ezauHTML::selectList( $fuel_typeit, 'fuel', 'class="searchbox2" size="1"' , 'value', 'text', '' );

}

if ($ea_usecolour) {

  # Build Colour select list

	$colourit[] = ezauHTML::makeOption( '', _EZAUTOS_ANY_COLOUR );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE2, _EZAUTOS_COLOUR_TYPE2 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE3, _EZAUTOS_COLOUR_TYPE3 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE4, _EZAUTOS_COLOUR_TYPE4 );
    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE5, _EZAUTOS_COLOUR_TYPE5 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE6, _EZAUTOS_COLOUR_TYPE6 );
	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE7, _EZAUTOS_COLOUR_TYPE7 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE8, _EZAUTOS_COLOUR_TYPE8 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE9, _EZAUTOS_COLOUR_TYPE9 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE10, _EZAUTOS_COLOUR_TYPE10 );
    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE11, _EZAUTOS_COLOUR_TYPE11 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE12, _EZAUTOS_COLOUR_TYPE12 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE13, _EZAUTOS_COLOUR_TYPE13 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE14, _EZAUTOS_COLOUR_TYPE14 );
    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE15, _EZAUTOS_COLOUR_TYPE15 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE16, _EZAUTOS_COLOUR_TYPE16 );
	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE17, _EZAUTOS_COLOUR_TYPE17 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE18, _EZAUTOS_COLOUR_TYPE18 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE19, _EZAUTOS_COLOUR_TYPE19 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE20, _EZAUTOS_COLOUR_TYPE20 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE21, _EZAUTOS_COLOUR_TYPE21 );

  	$lists['colour'] = ezauHTML::selectList( $colourit, 'colour', 'class="searchbox2" size="1"' , 'value', 'text', $row->colour );

}

if ($ea_usedoors) {

  # Build the door number list

	$doornum[] = ezauHTML::makeOption( 0, _EZAUTOS_SEARCH_ANYDOORNUM );
	$doornum[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_DOORS1 );
	$doornum[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_DOORS2 );
	$doornum[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_DOORS3 );
	$doornum[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_DOORS4 );
	$doornum[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_DOORS5 );
	$doornum[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_DOORS6 );
	$doornum[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_DOORS7 );
	$doornum[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_DOORS8 );
	$doornum[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_DOORS9 );

  	$lists['doors'] = ezauHTML::selectList( $doornum, 'doors', 'class="searchbox2" size="1"' , 'value', 'text', $row->doors );

}

if ($ea_usebody) {

	$bodytype[] = ezauHTML::makeOption( 0, _EZAUTOS_SEARCH_ANYBODY );
	$bodytype[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_BODY1 );
	$bodytype[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_BODY2 );
	$bodytype[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_BODY3 );
	$bodytype[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_BODY4 );
	$bodytype[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_BODY5 );
	$bodytype[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_BODY6 );
	$bodytype[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_BODY7 );
	$bodytype[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_BODY8 );
	$bodytype[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_BODY9 );
	$bodytype[] = ezauHTML::makeOption( 10, _EZAUTOS_SPECS_BODY10 );
	$bodytype[] = ezauHTML::makeOption( 11, _EZAUTOS_SPECS_BODY11 );
	$bodytype[] = ezauHTML::makeOption( 12, _EZAUTOS_SPECS_BODY12 );

  	$lists['body'] = ezauHTML::selectList( $bodytype, 'body', 'class="searchbox2" size="1"' , 'value', 'text', $row->body );

}

if ($ea_useeng) {

  # Build Enginesize select list

	$sql	= "SELECT e.engine as value, e.engine as text FROM #__ezautos_enginesize AS e WHERE e.published = 1 ORDER by e.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$enginesizelist[] = ezauHTML::makeOption( '', _EZAUTOS_ANY_ENG );
	$enginesizelist = array_merge( $enginesizelist, $database->loadObjectList() );
	$lists['engine'] = ezauHTML::selectList( $enginesizelist, 'engine', 'class="searchbox2" size="1"','value', 'text', '');

}

if ($ea_useyear) {

  # Build min year select list

	$yearlist1 = array();
		$yearlist1[] = ezauHTML::makeOption( '0', _EZAUTOS_LMIN_YEAR );
	for($i=$ea_minyear;$i<$ea_maxyear+1;$i++){
		$yearlist1[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['minyear'] = ezauHTML::selectList($yearlist1, 'minyear', 'class="searchbox2" size="1"', 'value', 'text', '');

  # Build max year select list

	$yearlist2 = array();
		$yearlist2[] = ezauHTML::makeOption( '0', _EZAUTOS_LMAX_YEAR );
	for($i=$ea_maxyear;$i>$ea_minyear-1;$i--){
		$yearlist2[] = ezauHTML::makeOption($i , $i);
	}
  	
	$lists['maxyear'] = ezauHTML::selectList($yearlist2, 'maxyear', 'class="searchbox2" size="1"', 'value', 'text', '');

}


  # Bring it all to the screen
	HTML_ezautos::itemSearch( $option, $lists );
}



    /**************************************************\
             PROCESS THE MULTI-LAYOUT FILTERED SEARCH RESULTS
    \**************************************************/


function multiResults ( $option, $limit, $limitstart ) {
    global $database, $mainframe, $myItemid;
    global $mosConfig_absolute_path, $ea_perpage, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");
	DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

/*    $limit         = $_REQUEST['limit'];

    $limitstart         = $_REQUEST['limitstart'];
    if($limitstart==''){    $limitstart=0;  }*/
    $where='';
    $wheres='';
    $limit = intval( mosGetParam( $_REQUEST, 'limit', $ea_perpage ) );
//    if($limit<1){$limit=10;}
    $limitstart = intval( mosGetParam( $_REQUEST, 'limitstart', 0 ) );


    $make = intval( mosGetParam( $_REQUEST, 'make', 0 ) );
    $model = intval( mosGetParam( $_REQUEST, 'model', 0 ) );
    
	
	
	// Added by hrvoje	
	$country = intval( mosGetParam( $_REQUEST, 'country', 0 ) );
    $city = intval( mosGetParam( $_REQUEST, 'city', 0 ) );
	///////////////////////////////////////////////////////
	
	
	
	
	$tag = mosGetParam( $_REQUEST, 'tag', '' ) ;
    $direction = mosGetParam( $_REQUEST, 'direction', '' );


    if($make){ $where[] =' s.make='.$make; }
    if($model){ $where[] =' s.model='.$model; }
    if($tag){ $where[] =" s.tag='".$tag."'";}
    if($direction){
        switch ($direction){

        case 'ASCPRICE':
        $order='ORDER BY s.price ASC';
        break;

        case 'DESCPRICE':
        $order='ORDER BY s.price DESC';
        break;

        case 'DESCID':
        $order='ORDER BY s.id DESC';
        break;

        case 'ASCID':
        $order='ORDER BY s.id ASC';
        break;

        }
    }else{
       $order='ORDER BY s.id DESC';
    }

if(isset ($where[0])){
    if(count($where)>0){
            $wheres = implode(' AND ', $where ) ;
            if(count($where)>0){
            $wheres=' AND '.$wheres;
            }
    }
}

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

    $query="SELECT COUNT(s.id) as numitems FROM #__ezautos as s
                   WHERE s.published = 1 AND s.hits<$ea_impnum $wheres "
                   . $order;

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));


    $query="SELECT COUNT(s.id) as numitems FROM #__ezautos as s
                   WHERE s.published = 1 AND s.expdate>$currentdate $wheres "
                   . $order;

}

} else {

    $query="SELECT COUNT(s.id) as numitems FROM #__ezautos as s
                   WHERE s.published = 1 $wheres "
                   . $order;
}


	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT s.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS s"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = s.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=s.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=s.model"
	. "\n WHERE s.published = 1 AND s.hits<$ea_impnum $wheres"
	. "\n $order"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT s.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS s"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = s.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=s.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=s.model"
	. "\n WHERE s.published = 1 AND s.expdate>$currentdate $wheres"
	. "\n $order"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";

}

} else {

	$query = "SELECT s.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS s"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = s.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=s.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=s.model"
	. "\n WHERE s.published = 1 $wheres"
	. "\n $order"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";

}

    $database->setQuery( $query );
    $rows=$database->loadObjectList();
    if ($database->getErrorNum()) { echo $database->stderr(); return false; }
//    echo $query;

  # Bring it all to the screen
	HTML_ezautos::multiResults( $option, $rows, $pageNav, $total );

}


    /**************************************************\
             PROCESS THE FILTERED SEARCH RESULTS
    \**************************************************/


function searchResults2 ( $option, $limit, $limitstart ) {
    global $database, $mainframe, $myItemid;
    global $mosConfig_absolute_path, $ea_perpage, $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");
	DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

/*    $limit         = $_REQUEST['limit'];

    $limitstart         = $_REQUEST['limitstart'];
    if($limitstart==''){    $limitstart=0;  }*/
    $where='';
    $wheres='';
    $limit = intval( mosGetParam( $_REQUEST, 'limit', $ea_perpage ) );
//    if($limit<1){$limit=10;}
    $limitstart = intval( mosGetParam( $_REQUEST, 'limitstart', 0 ) );

//	$maxmiles = str_replace( ",", "", $maxmiles );

    $cid = intval( mosGetParam( $_REQUEST, 'cid', 0 ) );
    $trans = mosGetParam( $_REQUEST, 'trans', '' ) ;
    $tag = mosGetParam( $_REQUEST, 'tag', '' ) ;
    $pcode = mosGetParam( $_REQUEST, 'pcode', '' ) ;
	$radius = mosGetParam( $_REQUEST, 'radius', '' ) ;
    $fuel = mosGetParam( $_REQUEST, 'fuel', '' ) ;
    
	$make = intval( mosGetParam( $_REQUEST, 'make', 0 ) );
    $model = intval( mosGetParam( $_REQUEST, 'model', 0 ) );
    // Added by Hrvoje
	$country = intval( mosGetParam( $_REQUEST, 'country', 0 ) );
    $city = intval( mosGetParam( $_REQUEST, 'city', 0 ) );
	//////////////////////////////
	$doors = intval( mosGetParam( $_REQUEST, 'doors', 0 ) );
    $body = intval( mosGetParam( $_REQUEST, 'body', 0 ) );
    $colour = mosGetParam( $_REQUEST, 'colour', '' ) ;
    $engine = mosGetParam( $_REQUEST, 'engine', '' ) ;
    $minprice = intval( mosGetParam( $_REQUEST, 'minprice', 0 ) );
    $maxprice = intval( mosGetParam( $_REQUEST, 'maxprice', 0 ) );
    $minyear = intval( mosGetParam( $_REQUEST, 'minyear', 0 ) );
    $maxyear = intval( mosGetParam( $_REQUEST, 'maxyear', 0 ) );
    $maxmiles = intval( mosGetParam( $_REQUEST, 'maxmiles', 0 ) );
    $direction = mosGetParam( $_REQUEST, 'direction', '' );


    if($cid){ $where[] =' s.cid='.$cid; }
    if($trans){ $where[] =" s.trans='".$trans."'";}
    if($tag){ $where[] =" s.tag='".$tag."'";}
    if($fuel){ $where[] =" s.fuel='".$fuel."'";}    
	
	if($make){ $where[] =' s.make='.$make; }
    if($model){ $where[] =' s.model='.$model; }
    // Added by Hrvoje
	if($country){ $where[] =' s.country='.$country; }
    if($city){ $where[] =' s.city='.$model; }
	/////////////////////////////////////////////
	
	if($doors){ $where[] =' s.doors='.$doors; }
    if($body){ $where[] =' s.body='.$body; }
    if($colour){ $where[] =" s.colour='".$colour."'";}
    if($engine){ $where[] =" s.engine='".$engine."'";}
    if($minprice){ $where[] =" s.price>=".$minprice; }
    if($maxprice){$where[] =" s.price<=".$maxprice;}
    if($minyear){ $where[] =" s.year>=".$minyear; }
    if($maxyear){$where[] =" s.year<=".$maxyear;}
    if($maxmiles){$where[] =" s.odometer<=".$maxmiles;}

	if($pcode)
	{
		if($radius)
		{			 
		
			$found_post_codes = get_pcodes_in_range ($pcode, $radius);
			
			// If some zips were found we create an IN query.
			if (count($found_post_codes) > 0)
			{
				$wherepostcode =" s.pcode IN (";
		
				foreach($found_post_codes as $pcodes => $dists)
					$wherepostcode .= '"' . $pcodes . '", ';

				$wherepostcode .= '"00000")';
				
				$where[] = $wherepostcode;
			}
		   // Or put an unreal zip code not to show results at all
			else $where[] = 's.pcode = "ZZZZZ"';
			
		}
		else
			$where[] =" s.pcode = '".$pcode."'";
	}


    if($direction){
        switch ($direction){

        case 'ASCPRICE':
        $order='ORDER BY s.price ASC';
        break;

        case 'DESCPRICE':
        $order='ORDER BY s.price DESC';
        break;

        case 'DESCID':
        $order='ORDER BY s.id DESC';
        break;

        case 'ASCID':
        $order='ORDER BY s.id ASC';
        break;

        }
    }else{
       $order='ORDER BY s.id DESC';
    }

if(isset ($where[0])){
    if(count($where)>0){
            $wheres = implode(' AND ', $where ) ;
            if(count($where)>0){
            $wheres=' AND '.$wheres;
            }
    }
}

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

    $query="SELECT COUNT(s.id) as numitems FROM #__ezautos as s
                   WHERE s.published = 1 AND s.hits<$ea_impnum $wheres "
                   . $order;

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));


    $query="SELECT COUNT(s.id) as numitems FROM #__ezautos as s
                   WHERE s.published = 1 AND s.expdate>$currentdate $wheres "
                   . $order;

}

} else {

    $query="SELECT COUNT(s.id) as numitems FROM #__ezautos as s
                   WHERE s.published = 1 $wheres "
                   . $order;
}


	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT s.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS s"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = s.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=s.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=s.model"
	
		// Hrvoje added Countries and Makes
	. "\n LEFT JOIN #__ezautos_country as co ON co.coid=s.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=s.city"
	//
	
	
	. "\n WHERE s.published = 1 AND s.hits<$ea_impnum $wheres"
	. "\n $order"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT s.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS s"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = s.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=s.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=s.model"
	
		// Hrvoje added Countries and Makes
	. "\n LEFT JOIN #__ezautos_country as co ON co.coid=s.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=s.city"
	//
	
	
	. "\n WHERE s.published = 1 AND s.expdate>$currentdate $wheres"
	. "\n $order"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";

}

} else {

	$query = "SELECT s.*, cc.name AS category, ma.make as makename, mo.model as modelname, co.country as countryname, ci.city as cityname"
	. "\n FROM #__ezautos AS s"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = s.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=s.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=s.model"
	
	// Hrvoje added Countries and Makes
	. "\n LEFT JOIN #__ezautos_country as co ON co.coid=s.country"
    . "\n LEFT JOIN #__ezautos_city as ci ON ci.ciid=s.city"
	//
	
	. "\n WHERE s.published = 1 $wheres"
	. "\n $order"
	. "\n LIMIT $pageNav->limitstart,$pageNav->limit";

}

    $database->setQuery( $query );
    $rows=$database->loadObjectList();
    if ($database->getErrorNum()) { echo $database->stderr(); return false; }
//    echo $query;


  # Bring it all to the screen
	HTML_ezautos::searchFilteredResults( $option, $rows, $pageNav, $total );

}






// POSTCODE RADIUS SEARCH STUFF

function get_pcodes_in_range ( $pcode, $range ){
	global $database;
       
  // returns an array of the postcodes within $range of $pcode. Returns
  // an array with keys as postcodes and values as the distance from 
  // the postcode defined in $pcode.

  $in = explode (" ", $pcode);

  $pcode = $in[0];
  
   $d = get_pcode_point($pcode); // base postcode details
  $details = $d[0];
  $details[0] = $details["latitude"];
  $details[1] = $details["longitude"];
 
  if (empty($details)) return;
      
  // Calculate the minimum and maximum latitude and longitude within a given range
  // to find Max - Min Lat / Long for Radius and zero point and query only postcodes in that range.
  // with reference to code provided by zeb
      
  $lat_range = $range/69.172;
  
  $lon_range = abs($range/(cos($details[0]) * 69.172));
  $min_lat = number_format($details[0] - $lat_range, "4", ".", "");
  $max_lat = number_format($details[0] + $lat_range, "4", ".", "");
  $min_lon = number_format($details[1] - $lon_range, "4", ".", "");
  $max_lon = number_format($details[1] + $lon_range, "4", ".", "");

  $return = array();    // declared here for scope
 
  $sql = 'SELECT pcode, latitude, longitude FROM #__ezautos_postcodes
          WHERE latitude BETWEEN '.$min_lat.' AND '.$max_lat.' AND longitude BETWEEN '.$min_lon.' AND '.$max_lon;
     
  $database->setQuery($sql);
	if (!$database->query()) {
	echo $database->stderr();
	return;
	}
	else {
    $row = $database->loadRowList(); 
      
    foreach ($row as $r) {
   
     // loop through all postcodes in reference table and determine whether or not it's within the specified range.
     
	 
	 $dist = calculate_distance($details[0],$r[1],$details[1],$r[2]);
     
     if ($dist <= $range) {
	
       $return[$r[0]] = round($dist, 2);
	  
      }
     }
   }
      
  return $return;

 }

function get_pcode_point ( $pcode ) {
	global $database;
   
   // This function pulls the lattitude and longitude from the reference table for a given postcode.
      
   $sql = 'SELECT latitude, longitude from #__ezautos_postcodes WHERE pcode = "' . $pcode . '"';
   $database->setQuery($sql);

	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	 $row = $database->loadAssocList();
 
     return $row;       
    
 }

function calculate_distance ($lat1, $lat2, $lon1, $lon2 ) {
global $er_raddistance;

  include(EZADMIN_PATH."/config.ezautos.php");

  // standard mathematical equations to determine the distance between 2 points based on decimal coordinates
 
  $lat1 = str_replace(",", ".", $lat1);
  $lat2 = str_replace(",", ".", $lat2);
  $lon1 = str_replace(",", ".", $lon1);
  $lon2 = str_replace(",", ".", $lon2);

  // Convert decimal degrees to radians

  $lat1 = deg2rad($lat1);
  $lon1 = deg2rad($lon1);
  $lat2 = deg2rad($lat2);
  $lon2 = deg2rad($lon2);

  // Great Circle Distance Formula using radians:

  //$distance = 3437.74677 (nautical miles)
  //$distance = 6378.7 (kilometers)
  //$distance = 3963.0 (statute miles) 

  $distance = $ea_raddistance * acos(sin($lat1) * sin($lat2) + cos($lat1) * cos($lat2) * cos($lon2 - $lon1));

  return $distance;

 }




    /**************************************************\
             SHOW CONTACT ADMIN RE VEHICLE FORM
    \**************************************************/

function bookAdmin( $option, $id ) {
	global $database, $mainframe, $myItemid, $my, $ea_viewenq;

include(EZADMIN_PATH."/config.ezautos.php");

	$row = new mosezautos( $database );
	$row->load( $id );
	
  # Check if item is published

	if (!$row->published) {
		mosNotAuth();
		return;
	}

  # Check if vehicle enquiries are enabled

	if (!$ea_viewenq) {
		mosNotAuth();
		return;
	}

	$cat = new mosCatgs($database);
	$cat->load($row->cid);

  # Check if category is published

	if (!$cat->published) {
		mosNotAuth();
		return;
	}

  # Check whether category access level allows access to the item

	if ( $cat->access > $my->gid ) {	
		mosNotAuth();  
		return;
	}


	HTML_ezautos::bookAdmin( $option, $row );
}



    /**************************************************\
             SHOW THE ADD TO MAILING LIST FORM
    \**************************************************/

function mailList( $option, $id ) {
	global $database, $mainframe, $myItemid, $my, $ea_viewmailing;

include(EZADMIN_PATH."/config.ezautos.php");

	$row = new mosezautos( $database );
	$row->load( $id );
	
  # Check if item is published

	if (!$row->published) {
		mosNotAuth();
		return;
	}

  # Check if mailing list is enabled

	if (!$ea_viewmailing) {
		mosNotAuth();
		return;
	}

	$cat = new mosCatgs($database);
	$cat->load($row->cid);

  # Check if category is published

	if (!$cat->published) {
		mosNotAuth();
		return;
	}

  # Check whether category access level allows access to the item

	if ( $cat->access > $my->gid ) {	
		mosNotAuth();  
		return;
	}


	HTML_ezautos::mailList( $option, $row );
}


    /**************************************************\
             SHOW RECOMMEND TO FRIEND FORM
    \**************************************************/

function recommendListing( $option, $id ) {
	global $database, $mainframe, $myItemid, $my, $ea_viewrecommend;

include(EZADMIN_PATH."/config.ezautos.php");

	$row = new mosezautos( $database );
	$row->load( $id );
	

  # Check if item is published

	if (!$row->published) {
		mosNotAuth();
		return;
	}

  # Check if recommend to friend is enabled

	if (!$ea_viewrecommend) {
		mosNotAuth();
		return;
	}

	$cat = new mosCatgs($database);
	$cat->load($row->cid);

  # Check if category is published

	if (!$cat->published) {
		mosNotAuth();
		return;
	}

  # Check whether category access level allows access to the item

	if ( $cat->access > $my->gid ) {	
		mosNotAuth();  
		return;
	}


	HTML_ezautos::recommendListing( $option, $row );
}


    /**************************************************\
         SHOW CONTACT OWNER VEHICLE INFORMATION FORM for new profile inclusion in full details template
    \**************************************************/

function contactSeller( $option, $id ) {
	global $database, $mainframe, $myItemid, $my, $ea_viewenq;

include(EZADMIN_PATH."/config.ezautos.php");

	$row = new mosezautos( $database );
	$row->load( $id );
	
  # Check if item is published

	if (!$row->published) {
		mosNotAuth();
		return;
	}

  # Check if vehicle enquiries are enabled

	if (!$ea_viewenq) {
		mosNotAuth();
		return;
	}

	$cat = new mosCatgs($database);
	$cat->load($row->cid);

  # Check if category is published

	if (!$cat->published) {
		mosNotAuth();
		return;
	}

  # Check whether category access level allows access to the item

	if ( $cat->access > $my->gid ) {	
		mosNotAuth();  
		return;
	}


	HTML_ezautos::contactSeller( $option, $row );
}


    /**************************************************\
              SHOW CONTACT OWNER BY SMS FORM for new profile inclusion in full details template
    \**************************************************/

function smsSeller( $option, $id ) {
	global $database, $mainframe, $myItemid, $my;

include(EZADMIN_PATH."/config.ezautos.php");

	$row = new mosezautos( $database );
	$row->load( $id );


  # Check if item is published

	if (!$row->published) {
		mosNotAuth();
		return;
	}

	$cat = new mosCatgs($database);
	$cat->load($row->cid);

  # Check if category is published

	if (!$cat->published) {
		mosNotAuth();
		return;
	}

  # Check whether category access level allows access to the item

	if ( $cat->access > $my->gid ) {	
		mosNotAuth();  
		return;
	}


	HTML_ezautos::smsSeller( $option, $row );
}









    /**************************************************\
      SHOW CONTACT DEALER/SELLER DIRECTLY BY EMAIL FORM
    \**************************************************/

function contactProfile( $option, $id ) {
	global $database, $mainframe, $myItemid, $my;

include(EZADMIN_PATH."/config.ezautos.php");

	# oop database connector
	$row=new mosProfile( $database );

	# load the row from the db table
	$row->load( $id );

  # Find the profile for this member

	$query = "SELECT DISTINCT * FROM #__ezautos_profile"
    . "\n WHERE mid = $id"
	;
    $database->setQuery( $query );
    $database->loadObject($row);

  # Check if item is published

	if (!$row->published) {
		mosNotAuth();
		return;
	}


	HTML_ezautos::contactProfile( $option, $row );
}


    /**************************************************\
        SHOW CONTACT DEALER/OWNER DIRECTLY BY SMS FORM
    \**************************************************/

function smsProfile( $option, $id ) {
	global $database, $mainframe, $myItemid, $my, $ea_usesms;

include(EZADMIN_PATH."/config.ezautos.php");

	# oop database connector
	$row=new mosProfile( $database );

	# load the row from the db table
	$row->load( $id );

  # Find the profile for this member

	$query = "SELECT DISTINCT * FROM #__ezautos_profile"
    . "\n WHERE mid = $id"
	;
    $database->setQuery( $query );
    $database->loadObject($row);

  # Check if item is published

	if (!$row->published) {
		mosNotAuth();
		return;
	}

  # Check if SMS functionality is enabled

	if ($ea_usesms==0 && !$row->show_sms) {
		mosNotAuth();
		return;
	}


	HTML_ezautos::smsProfile( $option, $row );
}



    /**************************************************\
                  SHOW THE ADD MAKE FORM
    \**************************************************/


function editMake( $option, $id ) {
	global $database, $my;

	$row = new mosMake( $database );
	$row->load( $id );


	HTML_ezautos::editMake( $option, $row );
}


    /**************************************************\
              SAVE MEMBER-SUBMITTED MAKES
    \**************************************************/


function saveMake( $option ) {
	global $database, $my;

$submak = $_POST['make'];

$database->SetQuery("SELECT count(*) from #__ezautos_make WHERE make = '$submak'");
$exists = $database->LoadResult();

if ($exists > 0){

		echo "<script> alert('"._EZAUTOS_ERROR_DUPLICATE."'); window.history.go(-1); </script>\n";

} else {

	$row = new mosMake( $database );

if ( !$row->bind( $_POST, "approved owner published" ) ) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>\n";
	exit();
	}

	// sanitise id field
	$row->maid = (int) $row->maid;

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	mosMakeHtmlSafe( $row );
	$row->published=1;

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();


    EZEmailHeader();
	EZClose();
	echo _EZAUTOS_CHECK_REFRESH;
	EZEmailFooter();

}

}


    /**************************************************\
                  SHOW THE ADD MODEL FORM
    \**************************************************/


function editModel( $option, $id ) {
	global $database, $my;

	$row = new mosModel( $database );
	$row->load( $id );

 # Build Make select list

    $sql = "SELECT maid as value, make as text FROM #__ezautos_make ORDER by make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['makeid'] = ezauHTML::selectList( $mtypelist, 'makeid', 'class="inputbox" size="1"','value', 'text', $row->makeid);


	HTML_ezautos::editModel( $option, $row, $lists );
}


    /**************************************************\
              SAVE MEMBER-SUBMITTED MODELS
    \**************************************************/


function saveModel( $option ) {
	global $database, $my;

$submod = $_POST['model'];

$database->SetQuery("SELECT count(*) from #__ezautos_model WHERE model = '$submod'");
$exists = $database->LoadResult();

if ($exists > 0){

		echo "<script> alert('"._EZAUTOS_ERROR_DUPLICATE."'); window.history.go(-1); </script>\n";

} else {

	$row = new mosModel( $database );

if ( !$row->bind( $_POST, "approved owner published" ) ) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>\n";
	exit();
	}

	// sanitise id field
	$row->moid = (int) $row->moid;

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	mosMakeHtmlSafe( $row );
	$row->published=1;

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();


    EZEmailHeader();
	EZClose();
	echo _EZAUTOS_CHECK_REFRESH;
	EZEmailFooter();

}

}



















    /**************************************************\
             PROCESS THE AGENT SEARCH RESULTS
    \**************************************************/


function dealerResults ( $option, $limit, $limitstart ) {
    global $database, $mainframe, $myItemid, $my;
    global $mosConfig_absolute_path, $ea_perpage;
global $ea_useprofile, $ea_profaccess;

include(EZADMIN_PATH."/config.ezautos.php");
	DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");


  # establish that the profiling system is in use

    if( !$ea_useprofile ) {
		echo _EZAUTOS_NOPROFACCESS;
        return;
    }   

  # Check whether profile access level allows access

	if ( $ea_profaccess > $my->gid ) {	
		echo _EZAUTOS_PROFACCESS_DENIED;
		return;
	}



/*    $limit         = $_REQUEST['limit'];

    $limitstart         = $_REQUEST['limitstart'];
    if($limitstart==''){    $limitstart=0;  }*/
    $where='';
    $wheres='';
    $limit = intval( mosGetParam( $_REQUEST, 'limit', $ea_perpage ) );
//    if($limit<1){$limit=10;}
    $limitstart = intval( mosGetParam( $_REQUEST, 'limitstart', 0 ) );

    $dealer_type = mosGetParam( $_REQUEST, 'dealer_type', '' );
    $dealer_locality = mosGetParam( $_REQUEST, 'dealer_locality', '' );

    if($dealer_type){ $where[] =" p.dealer_type='".$dealer_type."'";}
    if($dealer_locality){ $where[] =" p.dealer_locality='".$dealer_locality."'";}

       $order='ORDER BY dealer_name ASC';

if(isset ($where[0])){
    if(count($where)>0){
            $wheres = implode(' AND ', $where ) ;
            if(count($where)>0){
            $wheres=' AND '.$wheres;
            }
    }
}

    $query="SELECT COUNT(p.mid) as numitems FROM #__ezautos_profile AS p WHERE p.published = 1 $wheres "
                   . $order;


	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


    $query="SELECT p.* FROM #__ezautos_profile AS p WHERE p.published = 1 $wheres "
                   . $order.' LIMIT '.$pageNav->limitstart.', '.$pageNav->limit;

    $database->setQuery( $query );
    $rows=$database->loadObjectList();
    if ($database->getErrorNum()) { echo $database->stderr(); return false; }
//    echo $query;


  # Build Dealer Locality select list

	$sql	= "SELECT DISTINCT d.dealer_locality as value, d.dealer_locality as text FROM #__ezautos_profile AS d WHERE d.dealer_locality !='' ORDER by d.dealer_locality ASC";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$dlocalitylist[] = ezauHTML::makeOption( '', _EZAUTOS_PROFILE_SEARCHALL );
	$dlocalitylist = array_merge( $dlocalitylist, $database->loadObjectList() );
	$lists['dealerloc'] = ezauHTML::selectList( $dlocalitylist, 'dealer_locality', 'class="inputbox" size="1"','value', 'text', '');


  # Bring it all to the screen
	HTML_ezautos::dealerResults( $option, $rows, $pageNav, $total, $lists );

}



    /**************************************************\
  	     DISPLAY A LIST OF ALL DEALER/SELLER PROFILES
    \**************************************************/

function displayProfiles( $option, $limit, $limitstart ) {
	global $database, $my, $mainframe, $myItemid, $mosConfig_list_limit, $mosConfig_absolute_path, $ea_perpage;
global $ea_useprofile, $ea_profaccess;

include(EZADMIN_PATH."/config.ezautos.php");
	DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

  # establish that the profiling system is in use

    if( !$ea_useprofile ) {
		echo _EZAUTOS_NOPROFACCESS;
        return;
    }   

  # Check whether profile access level allows access

	if ( $ea_profaccess > $my->gid ) {	
		echo _EZAUTOS_PROFACCESS_DENIED;
		return;
	}


  # do the pagination count
	$query = "SELECT COUNT(mid) as numitems"
	. "\n FROM #__ezautos_profile"
	. "\n WHERE published = '1'"
	. "\n ORDER BY dealer_name ASC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );

  # Do the main database query to list the contents
	$query = "SELECT * FROM #__ezautos_profile"
	. "\n WHERE published=1"
	. "\n ORDER BY dealer_name ASC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();


  # Build Dealer Locality select list

	$sql	= "SELECT DISTINCT d.dealer_locality as value, d.dealer_locality as text FROM #__ezautos_profile AS d WHERE d.dealer_locality !='' ORDER by d.dealer_locality ASC";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$dlocalitylist[] = ezauHTML::makeOption( '', _EZAUTOS_PROFILE_SEARCHALL );
	$dlocalitylist = array_merge( $dlocalitylist, $database->loadObjectList() );
	$lists['dealerloc'] = ezauHTML::selectList( $dlocalitylist, 'dealer_locality', 'class="inputbox" size="1"','value', 'text', '');


  # Bring it all to the screen
	HTML_ezautos::displayProfiles( $option, $rows, $pageNav, $total, $lists );
}



    /**************************************************\
               DISPLAY THE SELLER'S PROFILE
    \**************************************************/


function showProfile( $option, $id ) {
	global $database, $mainframe, $my, $gid, $myItemid, $ea_profaccess, $ea_useprofile;

include(EZADMIN_PATH."/config.ezautos.php");

  # establish that the profiling system is in use

    if( !$ea_useprofile ) {
		echo _EZAUTOS_NOPROFACCESS;
        return;
    }   

  # Check whether profile access level allows access

	if ( $ea_profaccess > $my->gid ) {	
		echo _EZAUTOS_PROFACCESS_DENIED;
		return;
	}

	# oop database connector
	$row=new mosProfile( $database );

	# load the row from the db table
	$row->load( $id );

  # Find the profile for this member

	$query = "SELECT DISTINCT a.*, q.username AS user FROM #__ezautos_profile AS a"
	. "\n LEFT JOIN #__users AS q ON q.id = a.mid"
    . "\n WHERE a.mid = $id"
	;
    $database->setQuery( $query );
    $database->loadObject($row);


	HTML_ezautos::showProfile( $option, $row );
}







    /**************************************************\
       	 	LIST THE DEALERS OWN LISTINGS
    \**************************************************/

function dealerListings( $option, $id, $limit, $limitstart ) {
	global $database, $my, $mainframe, $myItemid, $mosConfig_list_limit, $mosConfig_absolute_path;
	global $ea_impnum, $ea_expmgmt, $ea_expsys, $ea_perpage;
	global $ea_useprofile, $ea_profaccess;

include(EZADMIN_PATH."/config.ezautos.php");
DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

  # establish that the profiling system is in use

    if( !$ea_useprofile ) {
		echo _EZAUTOS_NOPROFACCESS;
        return;
    }   

  # Check whether profile access level allows access

	if ( $ea_profaccess > $my->gid ) {	
		echo _EZAUTOS_PROFACCESS_DENIED;
		return;
	}

	DEFINE("PAGENAV_PATH","administrator/components/com_ezautos/includes");

  # Get the dealer's name
	$query = "SELECT dealer_name FROM #__ezautos_profile"
	. "\n WHERE mid=$id"
	;
	$database->setQuery( $query );
	$dealername = $database->loadResult();

  # Get the page topper
	$query = "SELECT page_topper FROM #__ezautos_profile"
	. "\n WHERE mid=$id"
	;
	$database->setQuery( $query );
	$topper = $database->loadResult();


if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_profile as c on c.mid=a.owner"
	. "\n WHERE a.published = '1' AND a.owner = $id AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, cc.name AS category"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.owner=$id AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));


  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_profile as c on c.mid=a.owner"
	. "\n WHERE a.published = '1' AND a.owner = $id AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, cc.name AS category"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.owner=$id AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


} else {


  # do the pagination count
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_profile as c on c.mid=a.owner"
	. "\n WHERE a.published = '1' AND a.owner = $id"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;

  # prepare limit choices for pagination stuff
	$limit = $limit ? $limit : $ea_perpage ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( PAGENAV_PATH."/pagenav.php" );
	$pageNav = new ezPageNav( $total, $limitstart, $limit );


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, cc.name AS category"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.owner=$id"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}

  # Bring it all to the screen
	HTML_ezautos::dealerListings( $option, $rows, $id, $dealername, $topper, $pageNav, $total );
}








    /**************************************************\
               ADD/EDIT THE SELLER'S PROFILE
    \**************************************************/


function editProfile( $option, $id ) {
	global $database, $mainframe, $my, $myItemid, $mosConfig_absolute_path, $mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");


if (!$my->id){
	mosNotAuth();  
	return;
    }

	# oop database connector
	$row=new mosProfile( $database );

	# load the row from the db table
	$row->load( $id );

  # Find the profile for this member

	$query = "SELECT DISTINCT * FROM #__ezautos_profile"
    . "\n WHERE mid = $my->id"
	;
    $database->setQuery( $query );
    $database->loadObject($row);

	$lists['show_sms'] 	= ezauHTML::yesnoRadioList('show_sms', 'class="inputbox"', $row->show_sms);
	$lists['show_addy'] 	= ezauHTML::yesnoRadioList('show_addy', 'class="inputbox"', $row->show_addy);


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



	HTML_ezautos::editProfile( $option, $row, $lists, $list );
}



    /**************************************************\
                  SAVE THE SELLER'S PROFILE
    \**************************************************/


function saveProf( ) {
	global $database, $my, $myItemid, $ea_approf, $ea_mapapi, $mosConfig_live_site, $mosConfig_sitename, $mosConfig_mailfrom, $ea_profnotice;

include(EZADMIN_PATH."/config.ezautos.php");


	$row = new mosProfile( $database );
	$msg = _EZAUTOS_GENERIC_SAVED;

if ( !$row->bind( $_POST, "approved owner published" ) ) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>\n";
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


	// sanitise id fields
	$row->prid = (int) $row->prid;
	$row->mid = (int) $row->mid;

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


	if ( $ea_approf == 0 ) {
	$row->published=0;
	} else {
	$row->published=1;
	}

	// code cleaner for xhtml transitional compliance
	$row->dealer_bio = str_replace( '<br>', '<br />', $row->dealer_bio );

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();


  # send admin an email about the profile if notifications are enabled

	if ( $ea_profnotice ) {

	$subject=$mosConfig_sitename  . _EZAUTOS_YOUVEGOTMAIL;
	$headers = "From: $mosConfig_sitename\r\n";
	$headers .= "Reply-To: $mosConfig_mailfrom\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";
	$message.=_EZAUTOS_PROFILE_ADDUPDATE_MSG."\r\n\r\n";
	$message.=_EZAUTOS_PROFILE_PROFID." $row->mid \r\n\r\n ";
	$message.=$mosConfig_live_site."/index.php?option=com_ezautos&Itemid=$myItemid&task=showprofile&id=$row->mid\r \n ";



	$success = mosMail('', $mosConfig_sitename, $ea_bizemail, $subject, $message,0, NULL, NULL, NULL, $mosConfig_mailfrom, $mosConfig_sitename);

	}


	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=editprofile&Itemid=$myItemid"), _EZAUTOS_PROFILE_SAVED );
}



    /**************************************************\
                  DISPLAY THE EZ PANEL
    \**************************************************/


function myEZpanel( $option ) {
	global $database, $mainframe, $myItemid, $my;
	global $ea_memlistings, $ea_expmgmt, $ea_expsys, $ea_impnum, $ea_perpage;

include(EZADMIN_PATH."/config.ezautos.php");

  # Check that access to member listings is allowed

    if ( !$ea_memlistings ){
	mosNotAuth();  
	return;
    }

  # Check that member has access to this area
    if ( !$my->id ){
	mosNotAuth();  
	return;
    }

  # Find out what the sellers exemption status is
	$query = "SELECT w.dealer_exempt FROM #__ezautos_profile AS w"
	. "\n WHERE w.mid='$my->id'"
	;
	$database->setQuery( $query );
	$exemptstatus = $database->loadResult();

  # Find out what the sellers publishing rights are
	$query = "SELECT publish_own FROM #__ezautos_profile"
	. "\n WHERE mid='$my->id'"
	;
	$database->setQuery( $query );
	$pubrights = $database->loadResult();

  # Find out whether sellers can upgrade to featured
	$query = "SELECT feat_upgr FROM #__ezautos_profile"
	. "\n WHERE mid='$my->id'"
	;
	$database->setQuery( $query );
	$featuredrights = $database->loadResult();

  # Find out whether sellers can reset the expiry date
	$query = "SELECT reset_own FROM #__ezautos_profile"
	. "\n WHERE mid='$my->id'"
	;
	$database->setQuery( $query );
	$expiredrights = $database->loadResult();


  # Get the members area introduction content
	$query = "SELECT z.* FROM #__ezautos_content AS z"
	. "\n WHERE z.contid=2"
	;
	$database->setQuery( $query );
	$ezmemintro = $database->loadObjectList();


  # Find the vehicles this member has listed

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.owner='$my->id'"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();


 # Build Make select list - Model select will be built by ajax
    $sql = "SELECT mai.maid as value, mai.make as text FROM #__ezautos_make AS mai ORDER by mai.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_CHECK_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['make3'] = ezauHTML::selectList( $mtypelist, 'make', 'class="inputbox" id="make3" size="1" onchange="getDropModelList3(this,0)" ','value', 'text', '');


   $sql = "SELECT moi.moid as value, moi.model as text FROM #__ezautos_model AS moi ORDER by moi.model";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mltypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_CHECK_MODEL );
    $lists['model3'] = ezauHTML::selectList( $mltypelist, 'model', 'class="inputbox" id="model3" size="1" ','value', 'text', '');


	HTML_ezautos::myEZpanel( $option, $rows, $lists, $ezmemintro, $exemptstatus, $pubrights, $featuredrights, $expiredrights );
}


    /**************************************************\
                  EDIT LISTINGS
    \**************************************************/

function editListing( $option, $id ) {
	global $database, $mainframe, $myItemid, $my, $ea_memlistings, $ea_maxlistings, $ea_imagedirectory;
	global $mosConfig_live_site, $mosConfig_absolute_path, $ea_payonly, $ea_paypal;
	global $ea_tagit_demo, $ea_tagit_asnew, $ea_tagit_preluv, $ea_tagit_spare;

  include(EZADMIN_PATH."/config.ezautos.php");

  # Check that member has access to this area
    if ( !$my->id ){
	mosNotAuth();  
	return;
    }

  # Check that access to member listings is allowed
    if ( !$ea_memlistings ){
	mosNotAuth();  
	return;
    }


  # Check that the member has created a profile

	$query = "select count(mid) from #__ezautos_profile"
	. "\n WHERE mid = '$my->id'"
	;
	$database->setQuery( $query );
	$count_prof=$database->loadResult();

    if ( $count_prof != 1 ){
	echo _EZAUTOS_ERROR_NOPROFILE;  
	return;
    }


  # Check that the member has not exceeded the allowable number of listings

	$query = "select count(id) from #__ezautos"
	. "\n WHERE owner = '$my->id'"
	. "\n AND premium = '0'"
	;
	$database->setQuery( $query );
	$count_prop=$database->loadResult();


	# oop database connector
	$row=new mosezautos( $database );

	# load the row from the db table
	$row->load( $id );

  if ( $id ){
//    $row->checkout( $my->username );
  }


  # do the second part of checking for exceeded listings

	if ( $count_prop == $ea_maxlistings && !$row->id ){
	mosNotAuth();  
	return;
    }


  # Find out what the sellers exemption status is
	$query = "SELECT dealer_exempt FROM #__ezautos_profile"
	. "\n WHERE mid='$my->id'"
	;
	$database->setQuery( $query );
	$exemptstatus = $database->loadResult();


  # Check that people are NOT trying to bypass your pay only status
    if ( $ea_payonly && $ea_paypal && !$row->id ){
	mosNotAuth();  
	return;
    }



	# we don't need the checkout function just yet
//	if ( $id ){
//    $row->checkout( $my->id );
//	}

  # Check that member has access to this listing

    if ( $row->id ){
	    if ( $row->owner !=$my->id ){
		mosNotAuth();  
		return;
	    }
    }


 # Build Make select list - Model select will be built by ajax
    $sql = "SELECT mai.maid as value, mai.make as text FROM #__ezautos_make AS mai ORDER by mai.make";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $mtypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_MAKE );
    $mtypelist = array_merge( $mtypelist, $database->loadObjectList() );
    $lists['make2'] = ezauHTML::selectList( $mtypelist, 'make', 'class="searchbox" id="make2" size="1" onchange="getDropModelList2(this,1)" ','value', 'text', $row->make);

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
    $lists['model2'] = ezauHTML::selectList( $mltypelist, 'model', 'class="searchbox" id="model2" size="1" ','value', 'text', $row->model);
	
	
	
	// Added by Hrvoje for frontend Country City admin
	$sql = "SELECT coi.coid as value, coi.country as text FROM #__ezautos_country AS coi ORDER by coi.country";
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }

    $countrytypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_COUNTRY );
    $countrytypelist = array_merge( $countrytypelist, $database->loadObjectList() );
    $lists['country2'] = ezauHTML::selectList( $countrytypelist, 'country', 'class="searchbox" id="country2" size="1" onchange="getDropModelList10(this,1)" ','value', 'text', $row->country);

if($row->country){
    $sql = "SELECT cii.ciid as value, cii.city as text FROM #__ezautos_city AS cii WHERE cii.countryid=".$row->country." ORDER by cii.city";
}else{
   $sql = "SELECT cii.ciid as value, cii.city as text FROM #__ezautos_city AS cii ORDER by cii.city";
}
    $database->setQuery($sql);
    if (!$database->query()) {
    echo $database->stderr();
    return;
    }
    $citytypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_CITY );
    if($row->country){
    $citytypelist = array_merge( $citytypelist, $database->loadObjectList() );
    }
    $lists['city2'] = ezauHTML::selectList( $citytypelist, 'city', 'class="searchbox" id="city2" size="1" ','value', 'text', $row->city);
	/////////////////////////////////
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


  # Build Enginesize select list

	$sql	= "SELECT eng.engine as value, eng.engine as text FROM #__ezautos_enginesize AS eng ORDER by eng.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$enginesizelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_ENGINE );
	$enginesizelist = array_merge( $enginesizelist, $database->loadObjectList() );
	$lists['engine'] = ezauHTML::selectList( $enginesizelist, 'engine', 'class="searchbox" size="1"','value', 'text', $row->engine);


 # Build Vehicle Category select list

	$sql	= "SELECT c.cid as value, c.name as text FROM #__ezautos_catg AS c WHERE c.published=1 ORDER by c.ordering";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;

	}

	$ptypelist[] = ezauHTML::makeOption( '0', _EZAUTOS_DDSL_CATG );
	$ptypelist = array_merge( $ptypelist, $database->loadObjectList() );
	$lists['cid'] = ezauHTML::selectList( $ptypelist, 'cid', 'class="searchbox" size="1"','value', 'text', $row->cid);


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

	$lists['showprice'] 	= ezauHTML::yesnoRadioList('showprice', 'class="inputbox"', $row->showprice);
	$lists['finance'] 	= ezauHTML::yesnoRadioList('finance', 'class="inputbox"', $row->finance);

	$lists['incltax'] 	= ezauHTML::yesnoRadioList('incltax', 'class="inputbox"', $row->incltax);


if ($id){

	$query = "SELECT DISTINCT * FROM #__ezautos"
    . "\n WHERE id = $id"
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


	HTML_ezautos::editListing( $option, $row, $lists, $list, $exemptstatus );
}



function multiSelect($arr_main,$name,$arr_selected)
	{
	$return='<select name="'.$name.'" class="searchbox" size="30" multiple="multiple">';
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


    /**************************************************\
        SAVE/UPDATE EXISTING DETAILS IN DATABASE
    \**************************************************/


function saveList( ) {

global $database, $mosConfig_absolute_path, $myItemid, $my, $ea_approve, $ea_notify, $ea_imagedirectory, $ea_expfig;

include(EZADMIN_PATH."/config.ezautos.php");

$owner = $_POST['owner'];
$exemptstatus = $_POST['estat'];

$row=new mosezautos( $database );

if ( !$row->bind( $_POST, "approved owner published" ) ) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>\n";
	exit();
	}

	// sanitise id field
	$row->id = (int) $row->id;

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }


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


	$row->lastupdate=mktime();

	// code cleaner for xhtml transitional compliance
	$row->longdesc 	= str_replace( '<br>', '<br />', $row->longdesc );

	$row->features = implode ( ",",$row->features);

	$row->odometer = str_replace( ',', '', $row->odometer );

	$row->owner=$owner;

	if ( $ea_approve ) {
	$row->published=0;
	} else {
	$row->published=1;
	}

	$isNew = ( $row->id < 1 );
	if ($isNew) {
	$row->listdate = date("Y-m-d");
	$row->expdate=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));
	}

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();


  # send admin an email about the updated listing if the approval process is enabled

	if ( $ea_notify ) {

	$subject=$mosConfig_sitename  . _EZAUTOS_YOUVEGOTMAIL;
	$headers = "From: $mosConfig_sitename\r\n";
	$headers .= "Reply-To: $mosConfig_mailfrom\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";
	$message.=_EZAUTOS_SUB_MSG."\r\n\r\n";
	$message.=_EZAUTOS_VLDET_ADDNUM." $row->id \r\n\r\n ";

	$success = mosMail('', $mosConfig_sitename, $ea_bizemail, $subject,$message,0, NULL, NULL, NULL, $mosConfig_mailfrom, $mosConfig_sitename);

	}


	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_UPDATEDONE);

}


    /**************************************************\
                  DELETE LISTING
    \**************************************************/


function deleteListing ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid, $ea_imagedirectory;

include(EZADMIN_PATH."/config.ezautos.php");

    if ( !$my->id ){
	mosNotAuth();  
	return;
    }

	$database->setQuery( "select owner from #__ezautos where id=" . intval( $id ) );
	$own=$database->loadResult();

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


	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&amp;task=ezpanel&amp;Itemid=$myItemid"), _EZAUTOS_LISTING_DELETED );
	}
}



function publishVehicle( $id, $publish=1, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid, $ea_imagedirectory;

  include(EZADMIN_PATH."/config.ezautos.php");

    if ( !$my->id ){
	mosNotAuth();  
	return;
    }

  # Find out what the sellers publishing rights are
	$query = "SELECT publish_own FROM #__ezautos_profile"
	. "\n WHERE mid='$my->id'"
	;
	$database->setQuery( $query );
	$pubrights = $database->loadResult();

    if ( $pubrights == 0 ){
	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_PUBLISH_OWN_DENIED);
    }

	$action = $publish ? 'publish' : 'unpublish';

	$query = "UPDATE #__ezautos"
	. "\n SET published = " . intval( $publish )
	. "\n WHERE id = $id"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_UPDATEDONE);

}


function featuredVehicle( $id, $featured=1, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid;

  include(EZADMIN_PATH."/config.ezautos.php");


    if ( !$my->id ){
	mosNotAuth();  
	return;
    }


  # Find out what the sellers publishing rights are
	$query = "SELECT feat_upgr FROM #__ezautos_profile"
	. "\n WHERE mid='$my->id'"
	;
	$database->setQuery( $query );
	$featuredrights = $database->loadResult();

    if ( $featuredrights == 0 ){
	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_NOFEAT_UPGRADE);
    }

	$action = $featured ? 'featured' : 'unfeatured';

	$query = "UPDATE #__ezautos"
	. "\n SET featured = " . intval( $featured )
	. "\n WHERE id = $id"
	;
	$database->setQuery( $query );
	if (!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_UPDATEDONE);

}


function resetDate ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid, $ea_expfig;

  include(EZADMIN_PATH."/config.ezautos.php");

    if ( !$my->id ){
	mosNotAuth();  
	return;
    }


  # Find out what the sellers publishing rights are
	$query = "SELECT reset_own FROM #__ezautos_profile"
	. "\n WHERE mid='$my->id'"
	;
	$database->setQuery( $query );
	$resetrights = $database->loadResult();

    if ( $resetrights == 0 ){
	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_NORESET);
    }


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

	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_EXPDATE_RESET );

	}
}


    /**************************************************\
             PROCESS LISTING ENQUIRY TO ADMIN
    \**************************************************/


function sendAdminMail ( $option ) {
	global $database, $myItemid, $mosConfig_db, $ea_bizemail, $mosConfig_live_site, $ea_bizname, $mosConfig_usecaptcha;


include(EZADMIN_PATH."/config.ezautos.php");
DEFINE("CAPTCHA_PATH","includes");

		$captcha_success = 0;
		if ($mosConfig_usecaptcha == '1' && file_exists(CAPTCHA_PATH."/captcha.php")) {

			session_name('mos_captcha');
			session_start();

			$spamstop = mosGetParam( $_POST, 'spamstop', '' );

			if(isset($_SESSION['code']) && ($_SESSION['code'] != "") && ($_SESSION['code'] == $spamstop)) {
				$captcha_success = 1; // success
			} else {
				$captcha_success = 2; // fail
			}

		}

		if ($captcha_success != '2') {

//Get the post variables 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$short_message = $_POST['short_message'];
	$id = intval( $_POST['id'] );

if(!check_email($email)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
} else {

//Build the message

	$subject= stripslashes ( $ea_bizname ) .' '. _EZAUTOS_VEHENQREQ;

	$message=$name . " (" . $email . ")"
	 . " "._EZAUTOS_REQUEST_VEHENQ."\r \n";
	$message.=$mosConfig_live_site . "/index.php?option=com_ezautos&task=detail&id=$id&Itemid=$myItemid \r \n "._EZAUTOS_TELEPHONE." $telephone \r\n "._EZAUTOS_MSG." $short_message ";

//Create the mail headers

	$headers = "From: $ea_bizemail\r\n";
	$headers .= "Reply-To: $email\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

//Send the message 

	$success = mosMail('', $name, $ea_bizemail, $subject, $message,0, NULL, NULL, NULL, $email, $name);

    EZEmailHeader();
	EZClose();
	EZEmailFooter();


}
		} else {
			echo "<script> alert('"._EZAUTOS_SECURITY_FAILED."'); window.history.go(-1);</script>";
		}

}



    /**************************************************\
  		 	PROCESS JOIN MAILING LIST EMAIL
    \**************************************************/


function joinMailList ( $option ) {
global $database, $my, $myItemid, $mosConfig_db, $ea_bizemail, $mosConfig_live_site, $ea_bizname, $mosConfig_usecaptcha;
global $ea_letterman;

include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("CAPTCHA_PATH","includes");


	//Get the post variables 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$listinterest = $_POST['listinterest'];
	$id = intval( $_POST['id'] );
	$subscriber_name = $_POST['name'];
	$subscriber_email = $_POST['email'];

$captcha_success = 0;
if ($mosConfig_usecaptcha == '1' && file_exists(CAPTCHA_PATH."/captcha.php")) {

	session_name('mos_captcha');
	session_start();

	$spamstop = mosGetParam( $_POST, 'spamstop', '' );

	if(isset($_SESSION['code']) && ($_SESSION['code'] != "") && ($_SESSION['code'] == $spamstop)) {
		$captcha_success = 1; // success
	} else {
		$captcha_success = 2; // fail
	}
}

if ($captcha_success != '2') {


	if(!check_email($email)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
	} else {

		if($ea_letterman == 1) {

			$database->SetQuery("SELECT count(*) from #__letterman_subscribers WHERE subscriber_email = '$subscriber_email'");
			$exists = $database->LoadResult();

			if ($exists > 0){

				echo "<script> alert('"._EZAUTOS_ERROR_DUPLICATE."'); window.history.go(-1); </script>\n";

			} else {

				$row = new mosLettermanSubs( $database );

				if (!$row->bind( $_POST )) {
					echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
					exit();
				}

				// sanitise id field
				$row->subscriber_id = (int) $row->subscriber_id;

				if (!$row->check()) {
					echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
					exit();
				}

				mosMakeHtmlSafe( $row );

				$isNew = ( $row->subscriber_id < 1 );
				if ($isNew) {
					$row->subscriber_name = $subscriber_name;
					$row->subscriber_email = $subscriber_email;
					$row->subscribe_date = date("Y-m-d H:i:s");
					$row->confirmed = 1;
				}

				if (!$row->store()) {
					echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
					exit();
				}

//Build the message

	$subject= stripslashes ( $ea_bizname ) .' '. _EZAUTOS_MAILING_TITLE;

	$message=$name . " (" . $email . ")"
	 . " "._EZAUTOS_REQUEST_MAILINGLIST."\r \n";
	$message.=$mosConfig_live_site."/index.php?option=com_ezautos&task=detail&id=$id&Itemid=$myItemid\r \n "._EZAUTOS_VEHICLE_INTERESTS." $listinterest ";

//Create the mail headers

	$headers = "From: $ea_bizemail\r\n";
	$headers .= "Reply-To: $email\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

//Send the message 

	$success = mosMail('', $name, $ea_bizemail, $subject, $message,0, NULL, NULL, NULL, $email, $name);


    EZEmailHeader();
	EZClose();
	EZEmailFooter();

			}

		} else {

$database->SetQuery("SELECT count(*) from #__ezautos_mail WHERE email = '$email'");
$exists = $database->LoadResult();

			if ($exists > 0){

				echo "<script> alert('"._EZAUTOS_ERROR_DUPLICATE."'); window.history.go(-1); </script>\n";

			} else {

				$row = new mosezMail( $database );

				if (!$row->bind( $_POST )) {
					echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
					exit();
		        }

	// sanitise id field
	$row->mailid = (int) $row->mailid;

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	mosMakeHtmlSafe( $row );

	$isNew = ( $row->mailid < 1 );
	if ($isNew) {
	$row->date = date("Y-m-d H:i:s");
	$row->confirmed = 1;
	}

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }


//Build the message

	$subject= stripslashes ( $ea_bizname ) .' '. _EZAUTOS_MAILING_TITLE;

	$message=$name . " (" . $email . ")"
	 . " "._EZAUTOS_REQUEST_MAILINGLIST."\r \n";
	$message.=$mosConfig_live_site."/index.php?option=com_ezautos&task=detail&id=$id&Itemid=$myItemid\r \n "._EZAUTOS_VEHICLE_INTERESTS." $listinterest ";

//Create the mail headers

	$headers = "From: $ea_bizemail\r\n";
	$headers .= "Reply-To: $email\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

//Send the message 

	$success = mosMail('', $name, $ea_bizemail, $subject, $message,0, NULL, NULL, NULL, $email, $name);

				EZEmailHeader();
				EZClose();
				EZEmailFooter();

			}
		}
	}

} else {
	echo "<SCRIPT> alert('"._EZAUTOS_SECURITY_FAILED."'); window.history.go(-1);</SCRIPT>";
}

}




    /**************************************************\
  		 	PROCESS RECOMMEND VEHICLE FORM
    \**************************************************/


function sendRecommend ( $option ) {
	global $database, $myItemid, $mosConfig_db, $ea_bizemail, $mosConfig_live_site, $ea_bizname, $mosConfig_usecaptcha;


include(EZADMIN_PATH."/config.ezautos.php");
DEFINE("CAPTCHA_PATH","includes");

		$captcha_success = 0;
		if ($mosConfig_usecaptcha == '1' && file_exists(CAPTCHA_PATH."/captcha.php")) {

			session_name('mos_captcha');
			session_start();

			$spamstop = mosGetParam( $_POST, 'spamstop', '' );

			if(isset($_SESSION['code']) && ($_SESSION['code'] != "") && ($_SESSION['code'] == $spamstop)) {
				$captcha_success = 1; // success
			} else {
				$captcha_success = 2; // fail
			}

		}

		if ($captcha_success != '2') {


//Get the post variables 

	$friendname = $_POST['friendname'];
	$friendmail = $_POST['friendmail'];
	$fromname = $_POST['fromname'];
	$frommail = $_POST['frommail'];
	$id = intval( $_POST['id'] );


if(!check_email($friendmail)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
} else {

if(!check_email($frommail)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
} else {


//Build the message

	$subject= stripslashes ( $ea_bizname ) .' '. _EZAUTOS_RECOMEND_VEH_FROM_FRIEND;

	$message=$fromname . " (" . $frommail . ")"
	 . " "._EZAUTOS_INVITE_VIEW_VEH."\r \n";
	$message.=$mosConfig_live_site."/index.php?option=com_ezautos&task=detail&id=$id&Itemid=$myItemid\r \n";

//Create the mail headers

	$headers = "From: $ea_bizemail\r\n";
	$headers .= "Reply-To: $frommail\r\n";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-MSMail-Priority: Low\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

//Send the message 

	$success = mosMail('', $fromname, $friendmail, $subject, $message,0, NULL, NULL, NULL, $frommail, $fromname);

    EZEmailHeader();
	EZClose();
	EZEmailFooter();

}

}
		} else {
			echo "<script> alert('"._EZAUTOS_SECURITY_FAILED."'); window.history.go(-1);</script>";
		}

}



    /**************************************************\
        	SEND SMS TO OWNER FUNCTIONS - for use with the new profile contacts on the full details apge
    \**************************************************/


function send_SMS ( $option ) {
	global $database, $myItemid, $mosConfig_db;


	$mid = $_GET['mid'];
	$user = $_GET['user'];
	$password = $_GET['password'];
	$from = $_GET['from'];
	$text = urlencode( $_GET['text'] );
	$api_id = $_GET['api_id'];
	$baseurl ="http://api.clickatell.com";


//Find the seller's international mobile number for sms messages 

     $query = "SELECT dealer_sms AS smail FROM #__ezautos_profile"
    . "\n WHERE mid = $mid";
    $database->setQuery( $query );
    $database->loadObject($thecontact);


	// auth call
	$url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
	// do auth call
	$ret = file($url);
	// split our response. return string is on first line of the data returned
	$sess = split(":",$ret[0]);

	if ($sess[0] == "OK") {
	$sess_id = trim($sess[1]); // remove any whitespace
	$url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$thecontact->smail&text=$text&from=$from";
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

    EZEmailHeader();
	EZClose();
	EZEmailFooter();

}

    /**************************************************\
          CONTACT OWNER RE LISTING MAIL FUNCTIONS - for use with the new profile contacts on the full details apge
    \**************************************************/


function sendContactSeller ( $option ) {
	global $database, $myItemid, $mosConfig_db, $mosConfig_live_site, $ea_bizemail, $ea_bizname, $mosConfig_usecaptcha;


include(EZADMIN_PATH."/config.ezautos.php");
DEFINE("CAPTCHA_PATH","includes");

		$captcha_success = 0;
		if ($mosConfig_usecaptcha == '1' && file_exists(CAPTCHA_PATH."/captcha.php")) {

			session_name('mos_captcha');
			session_start();

			$spamstop = mosGetParam( $_POST, 'spamstop', '' );

			if(isset($_SESSION['code']) && ($_SESSION['code'] != "") && ($_SESSION['code'] == $spamstop)) {
				$captcha_success = 1; // success
			} else {
				$captcha_success = 2; // fail
			}

		}

		if ($captcha_success != '2') {

//Get the post variables 

	$id = intval( $_POST['id'] );
	$mid = intval( $_POST['mid'] );
	$name = $_POST['name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$short_message = $_POST['short_message'];


if(!check_email($email)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
} else {


//Find the seller's email address 

     $query = "SELECT dealer_email AS smail FROM #__ezautos_profile"
    . "\n WHERE mid = $mid";
    $database->setQuery( $query );
    $database->loadObject($thecontact);

//Build the message

	$subject= stripslashes ( $ea_bizname ) .' '. _EZAUTOS_VEHENQREQ;

	$message=$name . " (" . $email . ")"
	 . " "._EZAUTOS_REQUEST_VEHENQ."\r \n";
	$message.=$mosConfig_live_site."/index.php?option=com_ezautos&task=detail&id=$id&Itemid=$myItemid\r \n "._EZAUTOS_TELEPHONE." $telephone \r\n "._EZAUTOS_MSG." $short_message ";

//Create the mail headers

	$headers = "From: $ea_bizemail\r\n";
	$headers .= "Reply-To: $email\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

//Send the message 

	$success = mosMail('', $name, $thecontact->smail, $subject, $message,0, NULL, NULL, NULL, $email, $name);

    EZEmailHeader();
	EZClose();
	EZEmailFooter();

}
		} else {
			echo "<script> alert('"._EZAUTOS_SECURITY_FAILED."'); window.history.go(-1);</script>";
		}

}



    /**************************************************\
      SEND EMAIL DIRECT TO DEALER/SELLER VIA PROFILE PAGE MAIL FUNCTIONS
    \**************************************************/


function sendContactProfile ( $option ) {
	global $database, $myItemid, $mosConfig_db, $mosConfig_live_site, $mosConfig_usecaptcha, $ea_bizemail;


include(EZADMIN_PATH."/config.ezautos.php");
DEFINE("CAPTCHA_PATH","includes");

		$captcha_success = 0;
		if ($mosConfig_usecaptcha == '1' && file_exists(CAPTCHA_PATH."/captcha.php")) {

			session_name('mos_captcha');
			session_start();

			$spamstop = mosGetParam( $_POST, 'spamstop', '' );

			if(isset($_SESSION['code']) && ($_SESSION['code'] != "") && ($_SESSION['code'] == $spamstop)) {
				$captcha_success = 1; // success
			} else {
				$captcha_success = 2; // fail
			}

		}

		if ($captcha_success != '2') {


//Get the post variables 

	$mid = intval( $_POST['mid'] );
	$name = $_POST['name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$short_message = $_POST['short_message'];

if(!check_email($email)) {
		echo "<script> alert('"._EZAUTOS_EMAIL_FORMAT_ERROR."'); window.history.go(-1); </script>\n";
} else {

//Find the seller's email address 

     $query = "SELECT distinct dealer_email AS smail FROM #__ezautos_profile"
    . "\n WHERE mid = $mid";
    $database->setQuery( $query );
    $database->loadObject($thecontact);

//Build the message

	$subject= _EZAUTOS_VEHENQREQ;

	$message=$name . " (" . $email . ")"
	 . " "._EZAUTOS_INCLUDES_TELEPHONE." $telephone \r\n "._EZAUTOS_MSG." $short_message ";

//Create the mail headers

	$headers = "From: $ea_bizemail\r\n";
	$headers .= "Reply-To: $email\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

//Send the message 

	$success = mosMail('', $name, $thecontact->smail, $subject, $message,0, NULL, NULL, NULL, $email, $name);

    EZEmailHeader();
	EZClose();
	EZEmailFooter();

}
		} else {
			echo "<script> alert('"._EZAUTOS_SECURITY_FAILED."'); window.history.go(-1);</script>";
		}

}



    /**************************************************\
        	SEND SMS DIRECT TO DEALER/SELLER VIA PROFILE PAGE MAIL FUNCTIONS
    \**************************************************/


function sendProfilesms ( $option ) {
	global $ea_usesms;

include(EZADMIN_PATH."/config.ezautos.php");

  # Check if SMS functionality is enabled

	if ($ea_usesms==0) {
		mosNotAuth();
		return;
	}


	$mid = $_GET['mid'];
	$user = $_GET['user'];
	$password = $_GET['password'];
	$from = $_GET['from'];
	$text = urlencode( $_GET['text'] );
	$api_id = $_GET['api_id'];
	$baseurl ="http://api.clickatell.com";


//Find the seller's international mobile number for sms messages 

     $query = "SELECT dealer_sms AS smail FROM #__ezautos_profile"
    . "\n WHERE mid = $mid";
    $database->setQuery( $query );
    $database->loadObject($thecontact);


	// auth call
	$url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
	// do auth call
	$ret = file($url);
	// split our response. return string is on first line of the data returned
	$sess = split(":",$ret[0]);

	if ($sess[0] == "OK") {
	$sess_id = trim($sess[1]); // remove any whitespace
	$url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$thecontact->smail&text=$text&from=$from";
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

    EZEmailHeader();
	EZClose();
	EZEmailFooter();

}



    /**************************************************\
  		 	COUNT HOW MANY THINGS ARE IN A CATEGORY
    \**************************************************/


function CountCont ( $cat ) {
	global $database;
	global $ea_impnum, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query="SELECT count(id) as count FROM #__ezautos WHERE cid = $cat AND published=1 AND hits<$ea_impnum";

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query="SELECT count(id) as count FROM #__ezautos WHERE cid = $cat AND published=1 AND expdate>$currentdate";

}

} else {

	$query="SELECT count(id) as count FROM #__ezautos WHERE cid = $cat AND published=1";
}

	$database->setQuery( $query );
	$result=$database->query();

	$val=mysql_fetch_row( $result );
	return $val[0];

}




function showSuccess( $option ) {
	global $database, $my, $mainframe;


  # Get the transaction successful content
	$query = "SELECT a.* FROM #__ezautos_content AS a"
	. "\n WHERE a.contid=4"
	;
	$database->setQuery( $query );
	$ezsuccess = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showSuccess( $option, $ezsuccess );
}



function showCancel( $option ) {
	global $database, $my, $mainframe;


  # Get the transaction cancelled content
	$query = "SELECT a.* FROM #__ezautos_content AS a"
	. "\n WHERE contid=5"
	;
	$database->setQuery( $query );
	$ezcancel = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::showCancel( $option, $ezcancel );
}


function viewTerms( $option ) {
	global $database, $my, $mainframe;


  # Get the listing terms content
	$query = "SELECT a.* FROM #__ezautos_content AS a"
	. "\n WHERE contid=3"
	;
	$database->setQuery( $query );
	$ezterms = $database->loadObjectList();

  # Bring it all to the screen
	HTML_ezautos::viewTerms( $option, $ezterms );
}



    /**************************************************\
                 DELETE IMAGE FUNCTIONS
    \**************************************************/


function deleteProfileImage ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid;

include(EZADMIN_PATH."/config.ezautos.php");

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
	mosRedirect( "index.php?option=com_ezautos&amp;task=editprofile&amp;id=$id&amp;Itemid=$myItemid", _EZAUTOS_VLDET_IMAGEDELETED );
	}
}


function deleteDealer_Logo ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid;

include(EZADMIN_PATH."/config.ezautos.php");


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
	mosRedirect( "index.php?option=com_ezautos&amp;task=editprofile&amp;id=$id&amp;Itemid=$myItemid", _EZAUTOS_VLDET_IMAGEDELETED );
	}
}


function deletePdfPromo ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid;

include(EZADMIN_PATH."/config.ezautos.php");

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
	mosRedirect( "index.php?option=com_ezautos&amp;task=editprofile&amp;id=$id&amp;Itemid=$myItemid", _EZAUTOS_VLDET_IMAGEDELETED );
	}
}


function deletePdfInfo ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid;

	$row=new mosezautos( $database );
	$row->load( $id );

  # Check that member has access to this listing

    if ( $row->id ){
	    if ( $row->owner !=$my->id ){
		mosNotAuth();  
		return;
	    }
    }

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/pdfs/'.$row->pdfinfo );
	$database->setQuery( "UPDATE #__ezautos SET pdfinfo='' WHERE id=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}
	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=edit&id=$id&Itemid=$myItemid"), _EZAUTOS_PROFILE_PDF_DELETED );
}


function deletePageTopper ( $id, $option ) {
	global $database, $my, $mosConfig_absolute_path, $myItemid;

	$row=new mosProfile( $database );
	$row->load( $id );

  # Check that member has access to this listing

    if ( $row->id ){
	    if ( $row->mid !=$my->id ){
		mosNotAuth();  
		return;
	    }
    }

	unlink( $mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$row->page_topper );
	$database->setQuery( "UPDATE #__ezautos_profile SET page_topper='' WHERE id=$id" );

	if ( !$database->query() ) {
	echo "<script> alert('" . $database->getErrorMsg()
	. "'); window.history.go(-1); </script>\n";
	}
	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=editprofile&id=$id&Itemid=$myItemid"), _EZAUTOS_VLDET_IMAGEDELETED );
}



    /**************************************************\
                 PAYPAL IPN STUFF
    \**************************************************/


function upgrade1 ( $option ) {
global $database, $mosConfig_live_site, $myItemid, $mosConfig_sitename, $mosConfig_mailfrom;
global $ea_payonly, $postmode, $currency, $premium_cost, $featured_cost, $checkmail, $ea_expfig;
global $ea_bizname, $ea_viewing_notify, $ea_bizemail;

include(EZADMIN_PATH."/config.ezautos.php");

    # IPN validation modes, choose: 1 or 2


           //* 1 = Live Via PayPal Network
           //* 2 = Test Via PayPal Developers Network Sandbox


    # IPN validation mode 1: Live Via PayPal Network

if ($postmode == 1) { $domain = "www.paypal.com"; }

    # IPN validation mode 2: Test Via PayPal Developer's Sandbox

elseif ($postmode == 2) { $domain = "www.sandbox.paypal.com"; }


  # read the post from PayPal system and add 'cmd'

$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
}

# post back to PayPal system to validate

$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ($domain, 80, $errno, $errstr, 30);


# assign posted variables to local variables

$item_name = $_POST['item_name'];
$id = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$mc_gross = $_POST['mc_gross'];
$mc_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$business = $_POST['business'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$memo = $_POST['memo'];
$txn_type = $_POST['txn_type'];
$pending_reason = $_POST['pending_reason'];
$reason_code = $_POST['reason_code'];
$payment_date = $_POST['payment_date'];
$payment_type = $_POST['payment_type'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$owner = $_POST['option_selection1'];

if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {

// check the payment_status is Completed
// check that txn_id has not been previously processed - can't do as no txn field
// check that receiver_email is your Primary PayPal email
// check that payment_amount/payment_currency are correct


	if (strcmp ($payment_status, "Completed") == 0 && $mc_currency = $currency && $mc_gross = $premium_cost && $receiver_email == $checkmail ) {


// process payment

	$row = new mosezautos( $database );

	if (!$row->bind( $_POST )) {
    echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
    exit();
	}

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	$row->lastupdate=mktime();
	$row->owner=$owner;
	$row->premium=1;
	$row->published=0;
	$row->listdate = date("Y-m-d");
	$row->expdate=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();





		# Notify admin of the upgraded listing

		# Build the message

		$subject = _EZAUTOS_IPN1." ".stripslashes( _EZAUTOS_PREMIUM );

		$message = _EZAUTOS_IPN2." ".stripslashes( _EZAUTOS_PREMIUM )."\r \n";
		$message .= _EZAUTOS_IPN3." ".$first_name." ".$last_name."\r \n";
		$message .= _EZAUTOS_IPN4." ".$id."\r \n";

		# Create the mail headers

		$headers = "From: $ea_bizemail\r\n";
		$headers .= "Reply-To: $ea_bizemail\r\n";
		$headers .= "X-Priority: 1\r\n";
		$headers .= "X-MSMail-Priority: High\r\n";
		$headers .= "X-Mailer: EZ Autos\r\n";

		# Send the message 

		mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,$subject,$message,0);

	} else {
		echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";

	}

}
	else if (strcmp ($res, "INVALID") == 0) {
	// log for manual investigation
	mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,"INVALID IPN","$res\n $req",0);

	}

	}
fclose ($fp);
}


}



function upgrade2 ( $option ) {
global $database, $mosConfig_live_site, $myItemid, $mosConfig_sitename, $mosConfig_mailfrom;
global $ea_payonly, $postmode, $currency, $premium_cost, $featured_cost, $checkmail, $ea_expfig;
global $ea_bizname, $ea_viewing_notify, $ea_bizemail;

include(EZADMIN_PATH."/config.ezautos.php");


    # IPN validation modes, choose: 1 or 2


           //* 1 = Live Via PayPal Network
           //* 2 = Test Via PayPal Developers Network Sandbox


    # IPN validation mode 1: Live Via PayPal Network

if ($postmode == 1) { $domain = "www.paypal.com"; }

    # IPN validation mode 2: Test Via PayPal Developer's Sandbox

elseif ($postmode == 2) { $domain = "www.sandbox.paypal.com"; }


  # read the post from PayPal system and add 'cmd'

$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
}

# post back to PayPal system to validate

$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ($domain, 80, $errno, $errstr, 30);


# assign posted variables to local variables

$item_name = $_POST['item_name'];
$id = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$mc_gross = $_POST['mc_gross'];
$mc_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$business = $_POST['business'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$memo = $_POST['memo'];
$txn_type = $_POST['txn_type'];
$pending_reason = $_POST['pending_reason'];
$reason_code = $_POST['reason_code'];
$payment_date = $_POST['payment_date'];
$payment_type = $_POST['payment_type'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$owner = $_POST['option_selection1'];

if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {

// check the payment_status is Completed
// check that txn_id has not been previously processed - can't do as no txn field
// check that receiver_email is your Primary PayPal email
// check that payment_amount/payment_currency are correct


	if (strcmp ($payment_status, "Completed") == 0 && $mc_currency = $currency && $mc_gross = $premium_cost && $receiver_email == $checkmail ) {


// process payment


		$doreset=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));


		# Update listing to premium

		$database->setQuery( "UPDATE #__ezautos"
		. "\n SET premium = '1', featured = '0', hits = '0', expdate = $doreset"
		. "\n WHERE id = '$id'"
		);
		$database->query() or die( $database->stderr() );





		# Notify admin of the upgraded listing

		# Build the message

		$subject = _EZAUTOS_IPN1." ".stripslashes( _EZAUTOS_PREMIUM );

		$message = _EZAUTOS_IPN2." ".stripslashes( _EZAUTOS_PREMIUM )."\r \n";
		$message .= _EZAUTOS_IPN3." ".$first_name." ".$last_name."\r \n";
		$message .= _EZAUTOS_IPN4." ".$id."\r \n";

		# Create the mail headers

		$headers = "From: $ea_bizemail\r\n";
		$headers .= "Reply-To: $ea_bizemail\r\n";
		$headers .= "X-Priority: 1\r\n";
		$headers .= "X-MSMail-Priority: High\r\n";
		$headers .= "X-Mailer: EZ Autos\r\n";

		# Send the message 

		mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,$subject,$message,0);

	} else {
		echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";

	}

}
	else if (strcmp ($res, "INVALID") == 0) {
	// log for manual investigation
	mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,"INVALID IPN","$res\n $req",0);

	}

	}
fclose ($fp);
}



}
















function upgrade3 ( $option ) {
global $database, $mosConfig_live_site, $myItemid, $mosConfig_sitename, $mosConfig_mailfrom;
global $ea_payonly, $postmode, $currency, $premium_cost, $featured_cost, $checkmail, $ea_expfig;
global $ea_bizname, $ea_viewing_notify, $ea_bizemail;

include(EZADMIN_PATH."/config.ezautos.php");


    # IPN validation modes, choose: 1 or 2


           //* 1 = Live Via PayPal Network
           //* 2 = Test Via PayPal Developers Network Sandbox


    # IPN validation mode 1: Live Via PayPal Network

if ($postmode == 1) { $domain = "www.paypal.com"; }

    # IPN validation mode 2: Test Via PayPal Developer's Sandbox

elseif ($postmode == 2) { $domain = "www.sandbox.paypal.com"; }


  # read the post from PayPal system and add 'cmd'

$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
}

# post back to PayPal system to validate

$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ($domain, 80, $errno, $errstr, 30);


# assign posted variables to local variables

$item_name = $_POST['item_name'];
$id = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$mc_gross = $_POST['mc_gross'];
$mc_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$business = $_POST['business'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$memo = $_POST['memo'];
$txn_type = $_POST['txn_type'];
$pending_reason = $_POST['pending_reason'];
$reason_code = $_POST['reason_code'];
$payment_date = $_POST['payment_date'];
$payment_type = $_POST['payment_type'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$owner = $_POST['option_selection1'];

if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {

// check the payment_status is Completed
// check that txn_id has not been previously processed
// check that receiver_email is your Primary PayPal email
// check that payment_amount/payment_currency are correct

	if (strcmp ($payment_status, "Completed") == 0 && $mc_currency = $currency && $mc_gross = $featured_cost && $receiver_email == $checkmail) {


// process payment

	$row = new mosezautos( $database );

	if (!$row->bind( $_POST )) {
    echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
    exit();
	}

	if (!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	$row->lastupdate=mktime();
	$row->owner=$owner;
	$row->premium=1;
	$row->featured=1;
	$row->published=0;
	$row->listdate = date("Y-m-d");
	$row->expdate=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
	$row->checkin();





		# Notify admin of the upgraded listing

		# Build the message

		$subject = _EZAUTOS_IPN1." ".stripslashes( _EZAUTOS_FEATURED );

		$message = _EZAUTOS_IPN2." ".stripslashes( _EZAUTOS_FEATURED )."\r \n";
		$message .= _EZAUTOS_IPN3." ".$first_name." ".$last_name."\r \n";
		$message .= _EZAUTOS_IPN4." ".$id."\r \n";

		# Create the mail headers

		$headers = "From: $ea_bizemail\r\n";
		$headers .= "Reply-To: $ea_bizemail\r\n";
		$headers .= "X-Priority: 1\r\n";
		$headers .= "X-MSMail-Priority: High\r\n";
		$headers .= "X-Mailer: EZ Autos\r\n";

		# Send the message 

		mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,$subject,$message,0);

	} else {
		echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";
	}

}
	else if (strcmp ($res, "INVALID") == 0) {
	// log for manual investigation
	mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,"INVALID IPN","$res\n $req",0);

	}

	}
fclose ($fp);
}


}



function upgrade4 ( $option ) {
global $database, $mosConfig_live_site, $myItemid, $mosConfig_sitename, $mosConfig_mailfrom;
global $ea_payonly, $postmode, $currency, $premium_cost, $featured_cost, $checkmail, $ea_expfig;
global $ea_bizname, $ea_viewing_notify, $ea_bizemail;

include(EZADMIN_PATH."/config.ezautos.php");

    # IPN validation modes, choose: 1 or 2


           //* 1 = Live Via PayPal Network
           //* 2 = Test Via PayPal Developers Network Sandbox


    # IPN validation mode 1: Live Via PayPal Network

if ($postmode == 1) { $domain = "www.paypal.com"; }

    # IPN validation mode 2: Test Via PayPal Developer's Sandbox

elseif ($postmode == 2) { $domain = "www.sandbox.paypal.com"; }


  # read the post from PayPal system and add 'cmd'

$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
}

# post back to PayPal system to validate

$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ($domain, 80, $errno, $errstr, 30);


# assign posted variables to local variables

$item_name = $_POST['item_name'];
$id = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$mc_gross = $_POST['mc_gross'];
$mc_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$business = $_POST['business'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$memo = $_POST['memo'];
$txn_type = $_POST['txn_type'];
$pending_reason = $_POST['pending_reason'];
$reason_code = $_POST['reason_code'];
$payment_date = $_POST['payment_date'];
$payment_type = $_POST['payment_type'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$owner = $_POST['option_selection1'];

if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {

// check the payment_status is Completed
// check that txn_id has not been previously processed
// check that receiver_email is your Primary PayPal email
// check that payment_amount/payment_currency are correct

	if (strcmp ($payment_status, "Completed") == 0 && $mc_currency = $currency && $mc_gross = $featured_cost && $receiver_email == $checkmail) {


// process payment


		$doreset=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));


		# Update listing to featured

		$database->setQuery( "UPDATE #__ezautos"
		. "\n SET premium = '1', featured = '1', hits = '0', expdate = $doreset"
		. "\n WHERE id = '$id'"
		);
		$database->query() or die( $database->stderr() );



		# Notify admin of the upgraded listing

		# Build the message

		$subject = _EZAUTOS_IPN1." ".stripslashes( _EZAUTOS_FEATURED );

		$message = _EZAUTOS_IPN2." ".stripslashes( _EZAUTOS_FEATURED )."\r \n";
		$message .= _EZAUTOS_IPN3." ".$first_name." ".$last_name."\r \n";
		$message .= _EZAUTOS_IPN4." ".$id."\r \n";

		# Create the mail headers

		$headers = "From: $ea_bizemail\r\n";
		$headers .= "Reply-To: $ea_bizemail\r\n";
		$headers .= "X-Priority: 1\r\n";
		$headers .= "X-MSMail-Priority: High\r\n";
		$headers .= "X-Mailer: EZ Autos\r\n";

		# Send the message 

		mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,$subject,$message,0);

	} else {
		echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";
	}

}
	else if (strcmp ($res, "INVALID") == 0) {
	// log for manual investigation
	mosMail($ea_bizemail,$ea_bizname,$ea_bizemail,"INVALID IPN","$res\n $req",0);

	}

	}
fclose ($fp);
}


}




/* *********************************************************************************
                 SEND OUT THE EMAIL WITH LISTINGS DETAILS FOR A MEMBER
   ********************************************************************************* */


function postMyListings ( $option, $id ) {
	global $database, $mainframe, $myItemid, $id, $task, $my, $ea_bizname, $ea_bizemail, $ea_sitetype, $mosConfig_live_site;
	global $ea_currencypos, $ea_currencysign, $ea_expmgmt, $ea_expsys;

include(EZADMIN_PATH."/config.ezautos.php");

  # Check that member has access to this area
    if ( $my->id != $id ){
	mosNotAuth();  
	return;
    }

	$query = "SELECT DISTINCT * FROM #__ezautos_profile"
    . "\n WHERE mid = $id"
	;
    $database->setQuery( $query );
    $database->loadObject($therow);

  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.owner=$id"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

	$subject= stripslashes ( $ea_bizname ) .' - '._EZAUTOS_LISTINGS_RPT;

	$message.='<html><head><meta http-equiv="Content-Type" content="text/html; '._ISO.'" /><title>'.$ea_bizname.' - '._EZAUTOS_LISTINGS_RPT.'</title></head>';
	$message.='<body style="background-color: #FFFFFF; padding: 10px;">';

	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td align="left"><br /><br /><h2>'.$therow->dealer_name;
if ($therow->dealer_company){
	$message.=' ('.$therow->dealer_company.')';
}
	$message.='</h2>';
	$message.='<h4>';

if ($therow->dealer_address2){
	$message.=$therow->dealer_address1.' '.$therow->dealer_address2.'<br />';
}

if ($therow->dealer_locality){
	$message.=$therow->dealer_locality.'<br />';
}

if ($therow->dealer_pcode){
	$message.=$therow->dealer_pcode;
}
	$message.='</h4>';
	$message.='</td></tr></table>';
	$message.='<table border="1" width="100%" style="border-collapse: collapse" bordercolor="#000000" cellpadding="4" cellspacing="0">';
	$message.='<tr><td>';
	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">';
	$message.='<tr>';

	$message.='<td width="20" align="left" bgcolor="#EFEFEF"><h4>ID#</h4></td>';
	$message.='<td align="left" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_MM.'</h4></td>';
	$message.='<td width="80" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_CATG.'</h4></td>';

if ( $ea_sitetype==0 ) {

	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_PRICE.'</h4></td>';
	$message.='<td width="60" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_AV.'</h4></td>';

}

	$message.='<td width="30" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_HITS.'</h4></td>';
	$message.='<td width="60" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_GENERIC_PUBSTATUS.'</h4></td>';
	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_DATE.'</h4></td>';
	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_UPDATE.'</h4></td>';

if ($ea_expmgmt==1 && $ea_expsys==1) {

	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_EXPDATE.'</h4></td>';

}
	$message.='</tr>';

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = $rows[$i];

		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);
		} else {
			$formatted_price = number_format($number, 2,",",".");
		}

	$message.='<tr><td colspan="6"><hr noshade color="#000000" size="1"></td></tr>';
	$message.='<tr>';

	$message.='<td valign="top" width="20" align="left">'.$row->id.'</td>';
	$message.='<td valign="top" align="left">'.$row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative.'</td>';
	$message.='<td valign="top" width="80" align="center">'.$row->category.'</td>';

if ( $ea_sitetype==0 ) {

	$message.='<td valign="top" width="70" align="center">';


	if ( $ea_currencypos==0 ) {
		$message.= $ea_currencysign.''.$formatted_price.' '.$row->price_type;
	} else {
		$message.= $formatted_price.' '.$ea_currencysign.' '.$row->price_type;
	}

if ( $row->freq ) {
 
	if ($row->freq == 1) {
		$message.= _EZAUTOS_RENTAL_DAILY;
	}
	if ($row->freq == 2) {
		$message.= _EZAUTOS_RENTAL_WEEKLY;
	}
	if ($row->freq == 3) {
		$message.= _EZAUTOS_RENTAL_FNIGHT;
	}
	if ($row->freq == 4) {
		$message.= _EZAUTOS_RENTAL_MONTH;
	}

}

	$message.='</td>';
	$message.='<td valign="top" width="60" align="center">'.$row->availability.'</td>';

}

	$message.='<td valign="top" width="30" align="center">'.$row->hits.'</td>';
	$message.='<td valign="top" width="60" align="center">';

if ($row->published == 1){
	$message.=_EZAUTOS_CONFIG_YES;
} else {
	$message.=_EZAUTOS_CONFIG_NO;
}
	$message.='</td>';
	$message.='<td valign="top" width="70" align="center">'.$row->listdate.'</td>';
	$message.='<td valign="top" width="70" align="center">'.strftime("%c",$row->lastupdate).'</td>';

if ($ea_expmgmt==1 && $ea_expsys==1) {
	$message.='<td width="70" align="center">';
if ($row->expdate) {
	$message.=strftime("%c",$row->expdate);
}
	$message.='</td>';
}

	$message.='</tr>';

}
	$message.='</table>';
	$message.='</td></tr></table>'.


	$database->setQuery( "SELECT COUNT(*) as count FROM #__ezautos WHERE owner=$id" );
	$ezcount = $database->loadObjectList();
	$ezTotal = $ezcount[0]->count;

	$database->setQuery( "SELECT SUM(hits) as sum FROM #__ezautos WHERE owner=$id" );
	$ezsum = $database->loadObjectList();
	$ezHits = $ezsum[0]->sum;

	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td align="left"><br /><br /><h2>'._EZAUTOS_NOTIFICATIONS_SUMMARY.':</h2>
<h4>'._EZAUTOS_NOTIFICATIONS_TOTALLISTINGS.': '.$ezTotal.'<br />
'._EZAUTOS_NOTIFICATIONS_TOTALHITS.': '.$ezHits.'</h4>
</td></tr></table>';

	$message.='</body></html>';

	$message_body 		= stripslashes( $message );

//Create the mail headers

	$headers ="MIME-Version: 1.0\n"; 
	$headers = "From: $ea_bizname\r\n";
	$headers .= "Reply-To: $ea_bizemail\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

		// Build e-mail message format
		$message_header 	= $headers;
		$message 			= $message_body;
		$subject 	= stripslashes( $subject);

	$success = mosMail('', $er_bizname, $therow->dealer_email, $subject, $message, 1, NULL, NULL, NULL, $ea_bizemail, $ea_bizname);

	mosRedirect( sefRelToAbs("index.php?option=com_ezautos&task=ezpanel&Itemid=$myItemid"), _EZAUTOS_NOTIFICATIONS_EMAILSENT );

}


?>