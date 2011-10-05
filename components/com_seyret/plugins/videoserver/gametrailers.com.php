<?php
//gametrailers  Videos plugin for Seyret component//
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


function gametrailerscomgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $mosConfig_absolute_path, $mosConfig_live_site,$my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		

if ($reqtype=="new") {

		$vidlink=jalemurldecode($vidlink);		
		
		$smallvideocode=str_replace("http://www.gametrailers.com/player/","",$vidlink);
        $urlmatch = "\.html(.*)";
        $smallvideocode  = eregi_replace($urlmatch, '', $smallvideocode );	
		
		//improved security not to call another site...
		$vidlink="http://www.gametrailers.com/player/".$smallvideocode.".html";
	
} else if ($reqtype=="refresh") {
	if ($vidlink==""){
		$vidlink="http://www.gametrailers.com/player/".$existingcode;
	}	
	
}

		$videoservertype="gametrailers.com";
		
		$str=jalem_file_get_contents($vidlink);
		
		$pos = strpos($str, "media_title")+13;
		$post = strpos($str, "<div class=\"media_subline")-$pos;
		$videotitle=substr($str,$pos,$post);
		$videotitle=strip_tags($videotitle);

		
		$pos = strpos($str, "media_description")+19;
		$post = strpos($str, "<div class=\"media_statsbox")-$pos;
		$itemcomment=substr($str,$pos,$post);
	    $itemcomment=strip_tags($itemcomment);

		if (eregi("usermovies", $smallvideocode)){
			$umlink=str_replace("usermovies/","",$smallvideocode);
			$getlink="http://mosii.gametrailers.com/getmediainfo4.php?umid=".$umlink."&playClick=%5Btype+Function%5D&record%5Fdl=%5Btype+Function%5D&setupMovie=%5Btype+Function%5D&hdClick=%5Btype+Function%5D&playpause=%5Btype+Function%5D&playAgain=%5Btype+Function%5D&thumbtip%5Fon=%5Btype+Function%5D&thumbtip%5Foff=%5Btype+Function%5D&start%5Ftooltip=%5Btype+Function%5D&stop%5Ftooltip=%5Btype+Function%5D&volumeSet=%5Btype+Function%5D&setVolumeHead=%5Btype+Function%5D&volumeGrab=%5Btype+Function%5D&volumeRelease=%5Btype+Function%5D&setupShare=%5Btype+Function%5D&sendMovie=%5Btype+Function%5D&checkEmail=%5Btype+Function%5D&showMessageError=%5Btype+Function%5D&showMenuSection=%5Btype+Function%5D&swapRightMenu=%5Btype+Function%5D&post%5Fxml%5Fload=%5Btype+Function%5D&setupFeatured=%5Btype+Function%5D&setEndMovie=%5Btype+Function%5D&hideEndMovie=%5Btype+Function%5D&setMoviesPage=%5Btype+Function%5D&changeMoviesPage=%5Btype+Function%5D&setMovie=%5Btype+Function%5D&hideMovie=%5Btype+Function%5D&parse%5Frelated%5Fxml=%5Btype+Function%5D&stretchObjects=%5Btype+Function%5D&remote=1&refdomain=undefined";
		} else {
			$umlink=$smallvideocode;
			$getlink="http://mosii.gametrailers.com/getmediainfo4.php?mid=".$umlink."&playClick=%5Btype+Function%5D&record%5Fdl=%5Btype+Function%5D&setupMovie=%5Btype+Function%5D&hdClick=%5Btype+Function%5D&playpause=%5Btype+Function%5D&playAgain=%5Btype+Function%5D&thumbtip%5Fon=%5Btype+Function%5D&thumbtip%5Foff=%5Btype+Function%5D&start%5Ftooltip=%5Btype+Function%5D&stop%5Ftooltip=%5Btype+Function%5D&volumeSet=%5Btype+Function%5D&setVolumeHead=%5Btype+Function%5D&volumeGrab=%5Btype+Function%5D&volumeRelease=%5Btype+Function%5D&setupShare=%5Btype+Function%5D&sendMovie=%5Btype+Function%5D&checkEmail=%5Btype+Function%5D&showMessageError=%5Btype+Function%5D&showMenuSection=%5Btype+Function%5D&swapRightMenu=%5Btype+Function%5D&post%5Fxml%5Fload=%5Btype+Function%5D&setupFeatured=%5Btype+Function%5D&setEndMovie=%5Btype+Function%5D&hideEndMovie=%5Btype+Function%5D&setMoviesPage=%5Btype+Function%5D&changeMoviesPage=%5Btype+Function%5D&setMovie=%5Btype+Function%5D&hideMovie=%5Btype+Function%5D&parse%5Frelated%5Fxml=%5Btype+Function%5D&stretchObjects=%5Btype+Function%5D&remote=1&refdomain=undefined";		
		}
		
		$str=jalem_file_get_contents($getlink);


		
		$pos = strpos($str, "thumbnail=")+10;
		$post = strpos($str, ".jpg")-$pos;		
		$picturelink=substr($str,$pos,$post+4);	
	
	
		$picturelink=urldecode($picturelink);

			


	if ($reqtype=="new") {
			$renderinputform=renderinputform($vidlink, $picturelink,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode);
			return $renderinputform;
	} else if ($reqtype=="refresh") {
			return array ($picturelink, $videotitle, $itemcomment);	
	}
		
}



function gametrailerscomembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
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

	if ($setwidth>0 AND $setheight>0){
		$videowidth=$setwidth;
		$videoheight=$setheight;
	}


if ($pro=="1"){
	$generatenewfile="0";
	if ($usevideoadsystem=="1"){
		$subdir="ad/";
	} else {
		$subdir="";
	}

	//$vthumb=str_replace("&","%26",$vthumb);
	$cachefile=$mosConfig_live_site."+gametrailerscom+".$vcode.$usevideoadsystem;	
	$md5cachefile=md5($cachefile).".xml";
	$fullmd5cachefile=$mosConfig_absolute_path."/seyretfiles/cache/pro/gametrailerscom/".$subdir.$md5cachefile;
	$fullmd5cachefilesite=$mosConfig_live_site."/seyretfiles/cache/pro/gametrailerscom/".$subdir.$md5cachefile;
	
	if (file_exists($fullmd5cachefile)){
		if ($downloadcachingnotimeout<>"yes"){
			$cache_file = fopen( $fullmd5cachefile, "r" );
			while (!feof($cache_file)) {
				$buffer = fgets($cache_file, 1024);
				$dlink .= $buffer;
			}
			fclose ($cache_file);
					
			$pos = strpos($dlink, "<vdtime>")+8;
			$post=strpos($dlink, "</vdtime>")-$pos;
			$timestamp=substr($dlink,$pos,$post);
			
			$now = date( 'Y-m-d H:i:s', time());
			$nowdate=strtotime($now);
			$dltime=strtotime($timestamp);
			$cacheage=$nowdate-$dltime;
			$downloadcachingtimeoutseconds=$downloadcachingtimeout*60;	
			
			if ($cacheage>=$downloadcachingtimeoutseconds) $generatenewfile="1";
			
		}
		
	//end of checking cache file
	} else {
	$generatenewfile="1";
	}

if ($generatenewfile=="1"){
			$now = date( 'Y-m-d H:i:s', time());
			$vcode = jalemurlencode($vcode );
			
			$dwnlink=gametrailerscomgeneratevideodownloadlink($vcode, $pro, "embed");

			
			if ($usevideoadsystem=="1"){
				$videoadlink=generatevideoad($catid);
				
				$adxml="<track>
<title>Ad</title>
<creator>admanager</creator>
<location>".$videoadlink."</location>
<image>".$vthumb."</image>
</track>";
			}	
			
			$pos = strpos($dwnlink, "<prolink>")+9;
			$post=strpos($dwnlink, "</prolink>")-$pos;
			$vdlink=substr($dwnlink,$pos,$post);


			$makedir=$mosConfig_absolute_path."/seyretfiles/cache";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}
			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}
					
			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/gametrailerscom";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}

			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/gametrailerscom/ad";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}
			
if ($vdlink<>""){
			$fh=fopen($fullmd5cachefile,'w');
  

			$dlcachetext="<playlist version=\"1\" xmlns=\"http://xspf.org/ns/0/\">
<title>Playlist</title>
<vdtime>".$now."</vdtime>
<trackList>

".$adxml."

<track>
<title>Video</title>
<creator>Seyret</creator>
<location>".$vdlink."</location>
<image>".$vthumb."</image>
<meta rel=\"type\">video/flv</meta>
</track>

</trackList>
</playlist>";

			fwrite($fh,$dlcachetext);
			fclose($fh);
}
	}//end of generate new file
	
				if ($usevideoadsystem=="1") {
					$repeat="repeat=true";
				} else {
					$repeat="repeat=false";
				}
	
	
require($mosConfig_absolute_path.'/administrator/components/com_seyret/longtail_config.php');	

if ($d!="") {
	$longtail = "&plugins=ltas&channel=".$c;	
} else {
	$longtail="";
}

$nohtml = mosGetParam($_REQUEST,'no_html',null);
if ($nohtml!="1") $classid=" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" ";

$embedvideo="<object  $classid  id=\"seyretpl\"  name=\"seyretpl\"  width=\"".$videowidth."\" height=\"".$videoheight."\" > <param name=\"allowscriptaccess\" value=\"always\" /><param name=\"wmode\" value=\"transparent\" /> <param name=\"allowfullscreen\" value=\"true\" /> <param name=\"movie\" value=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\" /> <param name=\"flashvars\" value=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" /> <embed id=\"seyretp\" name=\"seyretp\" src=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\"     flashvars=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" width=".$videowidth." height=".$videoheight."    allowfullscreen=\"true\" allowscriptaccess=\"always\" wmode=\"transparent\"  type=\"application/x-shockwave-flash\" /> </object>";
	
//end of pro	
} 
$unexpectederror=""; if (!file_exists($fullmd5cachefile) AND $vdlink=="") $unexpectederror="1";
if ($pro<>"1" OR $unexpectederror=="1"){

	if (eregi("usermovies", $vcode)){
	$vcode=str_replace("usermovies/","",$vcode);
	$embedvideo="<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\"  codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0\" id=\"gtembed\" width=\"".$videowidth."\" height=\"".$videoheight."\">	<param name=\"allowScriptAccess\" value=\"sameDomain\" /> <param name=\"movie\" value=\"http://www.gametrailers.com/remote_wrap.php?umid=".$vcode."\"/> <param name=\"quality\" value=\"high\" /> <embed src=\"http://www.gametrailers.com/remote_wrap.php?umid=".$vcode."\" swLiveConnect=\"true\" name=\"gtembed\" align=\"middle\" allowScriptAccess=\"sameDomain\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"".$videowidth."\" height=\"".$videoheight."\"></embed> </object>";
	} else {
	$embedvideo="<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\"  codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0\" id=\"gtembed\" width=\"".$videowidth."\" height=\"".$videoheight."\">	<param name=\"allowScriptAccess\" value=\"sameDomain\" /> <param name=\"movie\" value=\"http://www.gametrailers.com/remote_wrap.php?mid=".$vcode."\"/> <param name=\"quality\" value=\"high\" /> <embed src=\"http://www.gametrailers.com/remote_wrap.php?mid=".$vcode."\" swLiveConnect=\"true\" name=\"gtembed\" align=\"middle\" allowScriptAccess=\"sameDomain\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"".$videowidth."\" height=\"".$videoheight."\"></embed> </object>";	
	}
}

return $embedvideo;

}


function gametrailerscomgeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="gametrailerscom";

		
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