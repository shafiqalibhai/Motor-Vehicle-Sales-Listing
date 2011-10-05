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




function 	embedthisvideo($id, $embedwidth=null, $embedheight=null){
global $mosConfig_absolute_path, $database;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php"); 

if ($embedwidth=="") $embedwidth=$videowidth;
if ($embedheight=="") $embedheight=$videoheight;

$downloadcachingnotimeout="";
$dlink ="";
$adxml="";

$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
$vidyo = $database->loadObjectList();
foreach ($vidyo as $vidyo) {
	$servertype = $vidyo->videoservertype;
	$vcode = $vidyo->videoservercode;
	$vthumb = $vidyo->picturelink;
}


	$catid="";
	$downloadcachingtimeout="";

	$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$servertype.".php";
	
	$servertype=str_replace(".","",$servertype);
	$functionname=$servertype."embed";
	
	if (!function_exists($functionname)) require_once($includepluginfile);	
	
	
	if ($vthumb==""){
	$vthumb=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
	}
	
//pro------------------------------
	$database->setQuery("SELECT * FROM #__seyret_check"); 		
	$check = $database->loadObjectList();
	foreach ($check as $check) 
	{
		$procheck=$check->seyretpro;		
	}
		
	$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";		
	
	if (file_exists($pro_file) AND $procheck=="1" AND $disablepro<>"1") {
		$pro="1";
	} else {
		$pro="0";
	}
//pro------------------------------	
	
	
	

	$embed=$functionname($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $embedwidth, $embedheight );
	
	//I'll work on this, this is a temporary solution
	
	$embed=str_replace("showdigits=true","showdigits=false",$embed);
	$embed=str_replace("usefullscreen=true","usefullscreen=false",$embed);
	$embed=str_replace("logo.png","logosmall.png",$embed);	
	
	return $embed;


}





?>