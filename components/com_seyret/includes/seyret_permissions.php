<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

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

global $mosConfig_absolute_path, $my, $database;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");

$database->setQuery("SELECT * FROM #__seyret_check"); 		
$check = $database->loadObjectList();
foreach ($check as $check) 
{
$seyretpro=$check->seyretpro;		
}


		
		
//************************* to remove notices, also default
		$showmoderatetoolbar="no";	
		$showreportedvideosbutton="no";	
		$showpendingvideosbutton="no";	
		$showaddvideobutton="no";	
		$canaddvideos="no";	
		$showuploadvideobutton="no";	
		$canuploadvideos="no";	
		$showmyvideosbutton="no";	
		$showfeaturedvideosbutton="no";	
		$showsearchbutton="no";	
		$showhelpbutton="no";	
		$showdeletevideobutton="no";	
		$candeletevideo="no";	
		$showeditbutton="no";	
		$showpopupbutton="no";	
		$showdownloadbutton="no";	
		$candownloadvideo="no";	
		$showreportbutton="no";	
		$canreportvideos="no";	
		$showvideodirectlink="no";	
		$showembedcode="no";	
		$videovoteactive="no";	
		$usevideovotesystem="no";	
		$showcomments="no";	
		$canpublishvideo="no";
		$canseevideoservercodes="no";
		$uservideoaccesslevel="0";
		$defaultpublishisno="no";	
		$caneditownvideos="no";		
		$candeleteownvideos ="no";
		$canprocessflvquee="no";			
//************************


$theusertype=strtolower($my->usertype);
$database->setQuery("SELECT count(*) FROM #__seyret_permissions WHERE jaclname='$theusertype'");
$total = $database->loadResult(); //line count
if ($total==0 AND $theusertype<>"super administrator") $theusertype="public frontend";
		

		

		
$database->setQuery("SELECT * FROM #__seyret_permissions WHERE jaclname='$theusertype'");
		$perm = $database->loadObjectList();
		
foreach ($perm as $perm){
		if ($perm->canseeadmintoolbar=="1") $showmoderatetoolbar="yes";	
		
		if ($perm->canseereportedvideosbutton=="1") $showreportedvideosbutton="yes";	
		
		if ($perm->canseependingvideosbutton=="1") $showpendingvideosbutton="yes";	
		
		if ($perm->canseeaddvideobutton=="1") $showaddvideobutton="yes";	
		if ($perm->canaddvideos=="1") $canaddvideos="yes";	
		
		if ($perm->canseeuploadvideobutton=="1") $showuploadvideobutton="yes";	
		if ($perm->canuploadvideos=="1") $canuploadvideos="yes";	
		
		if ($perm->canseemyvideosbutton=="1") $showmyvideosbutton="yes";	
		
		if ($perm->canseefeaturedvideosbutton=="1") $showfeaturedvideosbutton="yes";	
		
		if ($perm->canseesearchvideosbutton=="1") $showsearchbutton="yes";	
		
		if ($perm->canseehelpbutton=="1") $showhelpbutton="yes";	
		
		if ($perm->canseedeletevideobutton=="1") $showdeletevideobutton="yes";	
		if ($perm->candeletevideo=="1") $candeletevideo="yes";	
		if ($perm->candeleteownvideos=="1") $candeleteownvideos="yes";
		
		if ($perm->canseeeditvideobutton=="1") $showeditbutton="yes";	
		if ($perm->caneditvideo=="1") $caneditvideo="yes";	
		if ($perm->caneditownvideos=="1") $caneditownvideos="yes";	
		
		if ($perm->canseefullscreenbutton=="1") $showpopupbutton="yes";	
		
		if ($perm->canseedownloadbutton=="1") $showdownloadbutton="yes";	
		if ($perm->candownloadvideo=="1") $candownloadvideo="yes";	
		
		if ($perm->canseereportbutton=="1") $showreportbutton="yes";	
		if ($perm->canreportvideos=="1") $canreportvideos="yes";	
		
		if ($perm->canseedirectlinkbox=="1") $showvideodirectlink="yes";	
		if ($perm->canseeembedbox=="1") $showembedcode="yes";	
		
		if ($perm->canseevotestars=="1") $usevideovotesystem="yes";	
		if ($perm->canvote=="1") $videovoteactive="yes";	
		
		if ($perm->canseecomments=="1") $showcomments="yes";	
		
		if ($perm->canpublishvideo=="1") $canpublishvideo="yes";
		if ($perm->canseevideoservercodes=="1") $canseevideoservercodes="yes";
		
		$uservideoaccesslevel=$perm->uservideoaccesslevel;
		if ($uservideoaccesslevel=="") $uservideoaccesslevel=0;
}


if ($theusertype=="super administrator"){
		$showmoderatetoolbar="yes";	
		$showreportedvideosbutton="yes";	
		$showpendingvideosbutton="yes";	
		$showaddvideobutton="yes";	
		$canaddvideos="yes";	
		$showuploadvideobutton="yes";	
		$canuploadvideos="yes";	
		$showmyvideosbutton="yes";	
		$showfeaturedvideosbutton="yes";	
		$showsearchbutton="yes";	
		$showhelpbutton="yes";	
		$showdeletevideobutton="yes";	
		$showrefreshvideobutton="yes";	
		$candeletevideo="yes";	
		$showeditbutton="yes";	
		$showpopupbutton="yes";	
		$showdownloadbutton="yes";	
		$candownloadvideo="yes";	
		$showreportbutton="yes";	
		$canreportvideos="yes";	
		$showvideodirectlink="yes";	
		$showembedcode="yes";	
		$videovoteactive="yes";	
		$usevideovotesystem="yes";	
		$showcomments="yes";	
		$canpublishvideo="yes";
		$canseevideoservercodes="yes";
		$uservideoaccesslevel="999";
		$defaultpublishisyes="yes";		
		$candefinefeaturedvideos="yes";	
		$caneditvideo="yes";
		$caneditownvideos ="yes";
		$candeleteownvideos ="yes";
		$canprocessflvquee="yes";		
		$canviewreportedvideos="yes";
		
}

$showhomebutton="yes";
$logintovotetext="yes";

	

$caneditreport="yes";	
$showfrombackupbutton="no";
if ($seyretpro=="1") $showfrombackupbutton="yes";
$showallvideoslistbutton="yes";


if ($enabledownloads<>1){
	$showdownloadbutton="no";
} 


//edit this
$showreplybutton="no";
if ($seyretpro=="1" and $videoresponsesystem=="1") $showreplybutton="yes";

?>