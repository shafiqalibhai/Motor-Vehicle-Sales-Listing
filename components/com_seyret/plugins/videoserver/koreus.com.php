<?php
//koreus.com plugin for Seyret component//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2008 Mustafa Dindar
* @ All rights reserved
* @ Seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html

**/	

// no direct access
defined( '_VALID_MOS' ) or die( 'Kýsýtlý alan' );

$videodownloadsupport="yes";
$downloadcachingnotimeout="yes";


function koreuscomgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $database, $mosConfig_absolute_path, $mosConfig_live_site, $my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
	
	$vidlink = jalemurldecode($vidlink);
    //http://www.koreus.com/video/saut-de-trop.html
	$smallvideocode = str_replace("http://www.koreus.com/video/", "", $vidlink);
	$smallvideocode = str_replace("http://koreus.com/video/", "", $smallvideocode);
    $smallvideocode = str_replace(".html", "", $smallvideocode);
	//improved security not to call another site...
	$vidlink = "http://www.koreus.com/video/".$smallvideocode.".html";


    $videoservertype = "koreus.com";

	$str = jalem_file_get_contents($vidlink);
	
	


    $pos = strpos($str, "<title>")+7;
	$post = strpos($str, "</title>", $pos)-$pos;
	$videotitle = substr($str, $pos, $post);
    $videotitle = trim($videotitle);

	

	
	
    $pos = strpos($str, "id=\"mediadescription\">")+22;
	$post = strpos($str, "</div>", $pos)-$pos;
    $itemcomment = substr($str, $pos, $post);
    $itemcomment = strip_tags(trim($itemcomment));
	
	


	$pos = strpos($str, "name=\"link_flv\"");
	$post = strpos($str, "data=&quot;", $pos)+11;
    $pos = strpos($str, "&quot;", $post)-$post;
    $url = substr($str, $post, $pos);

    $str = fetchURL($url, true);
    $pos = strpos($str, "&image=")+7;
	$post = strpos($str, "&showdigits", $pos)-$pos;
    $picturelink = substr($str, $pos, $post);

	
		
	
	
	if ($reqtype == "new") {
			$renderinputform=renderinputform($vidlink, $picturelink, $videotitle, $itemcomment, $categorylist, $videoservertype, $smallvideocode);
			return $renderinputform;
	} else if ($reqtype=="refresh") {
			return array ($picturelink, $videotitle, $itemcomment);	
	}

}



function koreuscomembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
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
	$cachefile=$mosConfig_live_site."+koreuscom+".$vcode.$usevideoadsystem;
	$md5cachefile=md5($cachefile).".xml";
	$fullmd5cachefile=$mosConfig_absolute_path."/seyretfiles/cache/pro/koreuscom/".$subdir.$md5cachefile;
	$fullmd5cachefilesite=$mosConfig_live_site."/seyretfiles/cache/pro/koreuscom/".$subdir.$md5cachefile;
	
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
			
			$dwnlink=koreuscomgeneratevideodownloadlink($vcode, $pro, "embed");

			
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
					
			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/koreuscom";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}

			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/koreuscom/ad";
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
	$longtail = "&plugins=ltas&midroll=".$c;	
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
//----------------------
    $link = "http://www.koreus.com/video/".$vcode;
    $embedvideo = "<object type=\"application/x-shockwave-flash\" data=\"$link\" height=\"$videoheight\" width=\"$videowidth\"><param name=\"movie\" value=\"$link\"><embed src=\"http://www.koreus.com/video/saut-de-trop\" type=\"application/x-shockwave-flash\" width=\"$videowidth\" height=\"$videoheight\"></embed></object>";
    //$embedvideo = "<embed src=\"http://video.videoclick.com/videoclick_tv.swf?flashidmedia=$idmedia&flashiddiffuseur=$iddiffuseur\" quality=\"high\" wmode=\"transparent\" width=\"$videowidth\" height=\"$videoheight\" name=\"playerUniversel\" align=\"middle\" allowFullScreen=\"true\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\"></embed>";
    //$embedvideo = koreuscomdownload($vcode); // only for test flv link
//----------------------
//$embedvideo="<embed wmode=\"transparent\" src=\"http://blip.tv/scripts/flash/blipplayer.swf?autoStart=false&file=".$vcode."%3Fsource%3D3\" quality=\"high\" width=\"".$videowidth."\" height=\"".$videoheight."\" name=\"movie\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\"></embed>";
}

return $embedvideo;

}


function koreuscomgeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="koreuscom";

		
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



function fetchURL($url, $body = false) {
    $url_parsed = parse_url($url);
    $host = $url_parsed["host"];
    if (!isset($url_parsed["port"])) {
        $port = 80;
    }
    else {
        $port = $url_parsed["port"];
    }
    $path = $url_parsed["path"];
    if (isset($url_parsed["query"])) $path .= "?" . $url_parsed["query"];
    $out = "GET $path HTTP/1.1\r\n" .
           "Host: $host\r\n" .
           "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1\r\n" .
           "Connection: close\r\n\r\n";
    $fp = fsockopen(gethostbyname($host), $port, $errno, $errstr, 5);
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



?>