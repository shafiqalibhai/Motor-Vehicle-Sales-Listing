<?php
//brightcove Videos plugin for Seyret component//
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


function brightcovetvgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $mosConfig_absolute_path, $mosConfig_live_site,$my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		
		$vidlink=jalemurldecode($vidlink);	
		
if ($reqtype=="new") {

//**************************************type1
		$smallvideocode=str_replace("http://www.brightcove.tv/title.jsp?title=","",$vidlink);
		$smallvideocode=str_replace("http://brightcove.tv/title.jsp?title=","",$smallvideocode);
//**************************************type1
		
//**************************************type2
		$pos = strpos($smallvideocode, "bctid=");
		if ($pos>0){
		$smallvideocode=substr($smallvideocode,$pos+6, 100);
		}
//**************************************type2

//**************************************type3
		$pos = strpos($smallvideocode, "bctid");
		if ($pos>0){
		$smallvideocode=substr($smallvideocode,$pos+5, 100);
		}		
//**************************************type3
		
		$pos = strpos($smallvideocode, "&");
		if ($pos>0) {
		$smallvideocode=substr($smallvideocode,0, $pos);
		}
		
		//improved security not to call another site...
		$vidlink="http://www.brightcove.tv/title.jsp?title=".$smallvideocode;
	
} else if ($reqtype=="refresh") {
	if ($vidlink==""){
		$vidlink="http://www.brightcove.tv/title.jsp?title=".$existingcode;
	}	
	
}


		
		$videoservertype="brightcove.tv";


		$str=jalem_file_get_contents($vidlink);
		$pos = strpos($str, "<title>")+7;
		$post=strpos($str, "</title>")-$pos;		
		$videotitle=substr($str,$pos,$post);
		$videotitle=str_replace("Brightcove - ","",$videotitle);
		$videotitle=str_replace("Subfighter - ","",$videotitle);
		

		$pos = strpos($str, "<meta name=\"description\" content=\"")+34;
		$post=strpos($str, "<meta name=\"keywords\"")-$pos;
		$itemcomment=substr($str,$pos,$post);
		$itemcomment=nl2br($itemcomment);
	    $itemcomment=strip_tags($itemcomment);
		$itemcomment=str_replace("  ","",$itemcomment);
		$itemcomment=str_replace("/>","",$itemcomment);

		
$req = "\x00\x00\x00\x00\x00\x01\x002com.brightcove.catalog.CatalogFacade.findVideoById\x00\x02/1\x00\x00\x00\x14\x0a\x00\x00\x00\x03\x02\x00" . chr(strlen($smallvideocode)) . $smallvideocode . "\x01\x01\x05";
            $out = "POST /services/amfgateway HTTP/1.1\r\n" .
                   "Host: services.brightcove.com\r\n" .
                   "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1\r\n" .
                   "Referer: http://admin.brightcove.com/destination/player/player.swf?allowFullScreen=true&initVideoId={$smallvideocode}&servicesURL=http://services.brightcove.com/services&viewerSecureGatewayURL=https://services.brightcove.com/services/amfgateway&cdnURL=http://admin.brightcove.com&autoStart=false\r\n" .
                   "Content-type: application/x-amf\r\n" .
                   "Content-length: " . strlen($req) . "\r\n" .
                   "Connection: close\r\n\r\n" .
                   $req;
            $fp = fsockopen(gethostbyname("services.brightcove.com"), 80, $errno, $errstr, 5);
            fwrite($fp, $out);
            $in = "";
            while (!feof($fp)) {
                $s = fgets($fp, 1024);
                $in .= $s;
            }
            fclose($fp);
            $content = $in;
			
            if (preg_match('/thumbnailURL\x02(.{2})/', $content, $match)) {
            $len = unpack("n", $match[1]);
            preg_match('/thumbnailURL\x02.{2}(.{' . $len[1] . '})/', $content, $match);
            $picturelink = $match[1];
            }
					
		$picturelink=trim($picturelink);	


	if ($reqtype=="new") {
			$renderinputform=renderinputform($vidlink, $picturelink,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode);
			return $renderinputform;
	} else if ($reqtype=="refresh") {
			return array ($picturelink, $videotitle, $itemcomment);	
	}
		
}

function brightcovetvembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
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
	$cachefile=$mosConfig_live_site."+brightcove+".$vcode.$usevideoadsystem;	
	$md5cachefile=md5($cachefile).".xml";
	$fullmd5cachefile=$mosConfig_absolute_path."/seyretfiles/cache/pro/brightcove/".$subdir.$md5cachefile;
	$fullmd5cachefilesite=$mosConfig_live_site."/seyretfiles/cache/pro/brightcove/".$subdir.$md5cachefile;
	
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
			
			$dwnlink=brightcovetvgeneratevideodownloadlink($vcode, $pro, "embed");

			
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
					
			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/brightcove";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}

			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/brightcove/ad";
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

$embedvideo=" <object  $classid  id=\"seyretpl\"  name=\"seyretpl\"  width=\"".$videowidth."\" height=\"".$videoheight."\" > <param name=\"allowscriptaccess\" value=\"always\" /> <param name=\"wmode\" value=\"transparent\" /> <param name=\"allowfullscreen\" value=\"true\" /> <param name=\"movie\" value=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\" /> <param name=\"flashvars\" value=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" /> <embed id=\"seyretp\" name=\"seyretp\" src=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\"     flashvars=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" width=".$videowidth." height=".$videoheight."    allowfullscreen=\"true\" allowscriptaccess=\"always\" wmode=\"transparent\"  type=\"application/x-shockwave-flash\" /> </object>";
	
	
//end of pro	
} 
$unexpectederror=""; if (!file_exists($fullmd5cachefile) AND $vdlink=="") $unexpectederror="1";
if ($pro<>"1" OR $unexpectederror=="1"){


$embedvideo="<embed src=\"http://www.brightcove.tv/playerswf\" bgcolor=\"#FFFFFF\" flashVars=\"initVideoId=".$vcode."&servicesURL=http://www.brightcove.tv&viewerSecureGatewayURL=https://www.brightcove.tv&cdnURL=http://admin.brightcove.com&autoStart=false\" base=\"http://admin.brightcove.com\" name=\"bcPlayer\" width=\"".$videowidth."\" height=\"".$videoheight."\" allowFullScreen=\"true\" allowScriptAccess=\"always\" seamlesstabbing=\"false\" type=\"application/x-shockwave-flash\" swLiveConnect=\"true\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\"></embed>";
}


return $embedvideo;

}


function brightcovetvgeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="brightcove";

		
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