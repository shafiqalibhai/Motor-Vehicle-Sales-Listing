<?php
//snowvision Videos plugin for Seyret component//
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

function mojoflixcomgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $mosConfig_absolute_path, $mosConfig_live_site,$my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		


if ($reqtype=="new") {

		$vidlink=jalemurldecode($vidlink);	
		
		
		$videoservertype="mojoflix.com";
		$smallvideocode=str_replace("http://www.mojoflix.com/Video/","",$vidlink);
		$smallvideocode=str_replace("http://mojoflix.com/Video/","",$smallvideocode);
		
		//improved security not to call another site...
		$vidlink="http://www.mojoflix.com/Video/".$smallvideocode;
		$str=jalem_file_get_contents($vidlink);
		
		$smallvideocode=str_replace(".html","",$smallvideocode);


		$vidlink="http://www.mojoflix.com/Embed/".$smallvideocode.".asx";
	
} else if ($reqtype=="refresh") {
	if ($vidlink==""){
		$vidlink="http://www.mojoflix.com/Embed/".$existingcode.".asx";
	}	
	
}


		
		
		$infostr=jalem_file_get_contents($vidlink);
		
		$pos = strpos($infostr, "<Title>")+7;
		$post=strpos($infostr, "</Title>")-$pos;		
		$videotitle=substr($infostr,$pos,$post);

		
		$pos = strpos($infostr, "<ref href=\"")+11;
		$post=strpos($infostr, ".wmv\"/>")-$pos;		
		$picturelink=substr($infostr,$pos,$post+4);
		$picturelink=str_replace("/video_","/medium_thumb_",$picturelink);
		$picturelink=str_replace(".wmv",".jpg",$picturelink);

	if ($reqtype=="new") {
			$renderinputform=renderinputform($vidlink, $picturelink,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode);
			return $renderinputform;
	} else if ($reqtype=="refresh") {
			return array ($picturelink, $videotitle, $itemcomment);	
	}
		
}

function mojoflixcomembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
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




$embedvideo="<EMBED name=MediaPlayer src=\"http://www.mojoflix.com/Embed/".$vcode.".asx\" width=".$videowidth." height=".$videoheight." type=application/x-mplayer2 ShowControls=\"1\" ShowStatusBar=\"1\" allowScriptAccess=\"never\" autoStart=\"1\"></EMBED>";

return $embedvideo;

}


function mojoflixcomgeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="mojoflixcom";

		
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