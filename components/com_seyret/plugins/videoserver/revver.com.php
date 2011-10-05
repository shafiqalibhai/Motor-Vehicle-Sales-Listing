<?php
//Revver.com plugin for Seyret component//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ Seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html

**/	

// no direct access
defined( '_VALID_MOS' ) or die( 'Kýsýtlý alan' );

$videodownloadsupport="yes";
$downloadcachingnotimeout="yes";

function revvercomgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $database, $mosConfig_absolute_path, $mosConfig_live_site,$my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
	

		$vidlink=jalemurldecode($vidlink);	
		
				
		$smallvideocode=str_replace("http://www.revver.com/video/","",$vidlink);
		$smallvideocode=str_replace("http://revver.com/video/","",$smallvideocode);

		//improved security not to call another site...
		$vidlink="http://www.revver.com/video/".$smallvideocode;
	
		$smallvideocode  = eregi_replace("/(.*)", "", $smallvideocode );
		
	
		$videoservertype="revver.com";
		

		$str=jalem_file_get_contents($vidlink);
		$pos = strpos($str, "<title>")+7;
		$post=strpos($str, "</title>")-$pos;		
		$videotitle=substr($str,$pos,$post);
		$videotitle=str_replace("Revver : ","",$videotitle);

		
		$pos = strpos($str, "<meta name=\"description\" content=\"")+33;
		$post=strpos($str, "<meta name=\"keywords\" content=\"")-$pos;		
		$itemcomment=substr($str,$pos,$post);	
		$itemcomment= eregi_replace("[<>\"/]", "", $itemcomment );

		
		$picturelink="http://frame.revver.com/frame/120x90/".$smallvideocode.".jpg";	
		
		$renderinputform=renderinputform($vidlink, $picturelink,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode);
		return $renderinputform;
		
}



function revvercomembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
	global $mosConfig_absolute_path,$mosConfig_live_site;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');


	$adxml="";
	$dlink="";
	$unexpectederror="";
	$fullmd5cachefile="";
	$vdlink="";

	
	$vcode = jalemurldecode($vcode );
	$vidwindow = mosGetParam($_REQUEST,'vidwindow',null);	
	if ($vidwindow=="popup"){
	$videowidth=$popupvideowidth;
	$videoheight=$popupvideoheight;
	} 


$embedvideo="<embed src=\"http://flash.revver.com/player/1.0/player.swf?r=revver20661911742323332248540\" width=\"".$videowidth."\" height=\"".$videoheight."\" bgcolor=\"#FFFFFF\" type=\"application/x-shockwave-flash\" salign=\"TL\" flashvars=\"&mediaId=".$vcode."&affiliateId=0&\"\" /></embed>";

return $embedvideo;

}



function revvercomgeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="revvercom";

		
		$database->setQuery("SELECT joomlaalemuserid FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
			$joomlaalemuserid=$check->joomlaalemuserid;		
		}
		$siteforjoomlaalem=$mosConfig_live_site;
		$siteforjoomlaalem = jalemurlencode( $siteforjoomlaalem );
		
		if ($pro=="1") {
		$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";
		require_once($pro_file);	
			$str=generateprodlink($vtype, $vcode);
			
			$pos = strpos($str, "<prolink>")+9;
			$post=strpos($str, "</prolink>")-$pos;		
			$dlink=substr($str,$pos,$post);
			
			$pos = strpos($str, "<dltype>")+8;
			$post=strpos($str, "</dltype>")-$pos;		
			$dtype=substr($str,$pos,$post);
			
			if ($dltask<>"embed") {
				if ($dtype=="script") {
					$downlink="<script>self.location = \"".$dlink."\";</script>";
				} else if ($dtype=="save") {
					$downlink="<a href=\"".$dlink."\">"._RIGHTCLICKANDSAVE."</a>";
				}
				return $downlink;
				
			} else {
				return $str;
			}

		} else {
			$func="generatedownloadlink";
			$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=".$func."&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&vtype=".$vtype."&vcode=".$vcode;
			$videodownloadlink=jalem_file_get_contents($link);
			return $videodownloadlink;	
		}

}


?>		