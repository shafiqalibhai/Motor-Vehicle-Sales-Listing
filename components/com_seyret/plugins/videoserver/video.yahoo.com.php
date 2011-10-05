<?php
//Yahoo Videos plugin for Seyret component//
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

function videoyahoocomgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $mosConfig_absolute_path, $mosConfig_live_site,$my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		
if ($reqtype=="new") {

		$vidlink=jalemurldecode($vidlink);	
		
		 //http://video.yahoo.com/watch/3184811/9014535
		 
		 //http://video.yahoo.com/network/100024552?v=3190060
		 
		$videoservertype="video.yahoo.com";
		
		$smallvideocode=str_replace("http://video.yahoo.com/watch/","",$vidlink);
		
		$pos = strpos($smallvideocode, "?v=");
		if ($pos>0) {
			$smallvideocode=substr($smallvideocode, $pos+3, 50);
		}
				
		
		
		//security
		$vidlink="http://video.yahoo.com/watch/".$smallvideocode;
	
} else if ($reqtype=="refresh") {

	
}


		
		
		$str=jalem_file_get_contents($vidlink);
		$pos = strpos($str, "<meta name=\"title\" content=\"")+28;
		$post=strpos($str, "<meta name=\"description\"")-$pos;		
		$videotitle=substr($str, $pos, $post);
		$videotitle=trim(str_replace("\" />","",$videotitle));
		
		
		if (strpos($smallvideocode, "/") == 0) {
			$pos = strpos($str, "so.addVariable(\"id\"");
			$post=strpos($str, "so.addVariable(\"vid\"")-$pos;		
			$id=substr($str,$pos,$post);	
			
			$id=eregi_replace("[^0-9]", "", $id);	
			$smallvideocode = $smallvideocode."/".$id;
			
		}
		

		$pos = strpos($str, "<meta name=\"description\" content=\"")+34;
		$post=strpos($str, "<link rel=\"image_src\"")-$pos;		
		$itemcomment=substr($str,$pos,$post);	
		$itemcomment=trim(str_replace("\" />","",$itemcomment));
		//ok
		
		
		$pos = strpos($str, "<link rel=\"image_src\" href=\"")+28;
		$post=strpos($str, "<link rel=\"video_src\"")-$pos;		
		$picturelink=substr($str,$pos,$post);	
		$picturelink=trim(str_replace("\" />","",$picturelink));
		
		
		
		$vidlink="http://video.yahoo.com/watch/".$smallvideocode;
		$smallvideocode=$smallvideocode."_joomlaalem_".$picturelink;
		
		

		if ($reqtype=="new") {
				$renderinputform=renderinputform($vidlink, $picturelink,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode);
				return $renderinputform;
		} else if ($reqtype=="refresh") {
				return array ($picturelink, $videotitle, $itemcomment);	
		}
		
}

function videoyahoocomembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
	global $mosConfig_absolute_path, $mosConfig_live_site;
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




	$vcodearray = explode("_joomlaalem_", $vcode);
	$vcodearrayids = explode("/", $vcodearray[0]);
	
	$yahoovid=$vcodearrayids[0];
	$yahooid=$vcodearrayids[1];
	$thumb=$vcodearray[1];


	
if ($pro=="1"){
	$generatenewfile="0";
	if ($usevideoadsystem=="1"){
		$subdir="ad/";
	} else {
		$subdir="";
	}

	//$vthumb=str_replace("&","%26",$vthumb);
	$cachefile=$mosConfig_live_site."+videoyahoocom+".$vcode.$usevideoadsystem;	
	$md5cachefile=md5($cachefile).".xml";
	$fullmd5cachefile=$mosConfig_absolute_path."/seyretfiles/cache/pro/videoyahoocom/".$subdir.$md5cachefile;
	$fullmd5cachefilesite=$mosConfig_live_site."/seyretfiles/cache/pro/videoyahoocom/".$subdir.$md5cachefile;
	
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
			
			$dwnlink=videoyahoocomgeneratevideodownloadlink($vcode, $pro, "embed");

			
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
					
			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/videoyahoocom";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}

			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/videoyahoocom/ad";
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

$embedvideo="<object  $classid id=\"seyretpl\"  name=\"seyretpl\"  width=\"".$videowidth."\" height=\"".$videoheight."\" ><param name=\"allowscriptaccess\" value=\"always\" /><param name=\"wmode\" value=\"transparent\" /><param name=\"allowfullscreen\" value=\"true\" /><param name=\"movie\" value=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\" /><param name=\"flashvars\" value=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" /><embed id=\"seyretp\" name=\"seyretp\" src=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\"     flashvars=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" width=".$videowidth." height=".$videoheight."    allowfullscreen=\"true\" allowscriptaccess=\"always\" wmode=\"transparent\"  type=\"application/x-shockwave-flash\" /></object>";
	
	
//end of pro	
} 
$unexpectederror=""; if (!file_exists($fullmd5cachefile) AND $vdlink=="") $unexpectederror="1";
if ($pro<>"1" OR $unexpectederror=="1"){


	$yahoovid=$vcodearrayids[0];
	$yahooid=$vcodearrayids[1];
	$thumb=urlencode($vcodearray[1]);

$embedvideo="<object width=\"".$videowidth."\" height=\"".$videoheight."\"><param name=\"movie\" value=\"http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.2.17\" /><param name=\"allowFullScreen\" value=\"true\" /><param name=\"bgcolor\" value=\"#000000\" /><param name=\"flashVars\" value=\"id=".$yahooiid."&vid=".$yahoovid."&lang=en-us&intl=us&thumbUrl=".$thumb."&embed=1\" /><embed src=\"http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.2.17\" type=\"application/x-shockwave-flash\" width=\"".$videowidth."\" height=\"".$videoheight."\" allowFullScreen=\"true\" bgcolor=\"#000000\" flashVars=\"id=".$yahooid."&vid=".$yahoovid."&lang=en-us&intl=us&thumbUrl=".$thumb."&embed=1\" ></embed></object>";

}


return $embedvideo;

}


function videoyahoocomgeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="videoyahoocom";

		
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