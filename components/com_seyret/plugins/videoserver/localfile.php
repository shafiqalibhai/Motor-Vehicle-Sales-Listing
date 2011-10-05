<?php
//Local video plugin for Seyret component//
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


function localfilegetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $mosConfig_absolute_path, $mosConfig_live_site,$my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
	
	$videoservertype="localfile";
	

	//***********************************************
	$current_dir=$mosConfig_absolute_path.$localfilesdirectory;
	$dir=opendir($current_dir);
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){
		$vidfile="/seyretfiles/localvideos/".$file;	
		$videos[] = mosHTML::makeOption( $vidfile );
		}
	}
	closedir($dir);
	//******************************************

	$videolist=mosHTML::selectList( $videos, 'videoservercode', 'class="inputbox" style="width:326px;font-size:10px;" size="7"', 'value', 'text', $videoservercode );


	//***********************************************
	$current_dir=$mosConfig_absolute_path.'/seyretfiles/localthumbnails';
	$dir=opendir($current_dir);
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){
		$thumbfile="/seyretfiles/localthumbnails/".$file;	
		$thumbs[] = mosHTML::makeOption( $mosConfig_live_site.$thumbfile,$thumbfile );
		}
	}
	closedir($dir);
	//******************************************	
	$thumblist=mosHTML::selectList( $thumbs, 'picturelink', 'class="inputbox" style="width:326px; font-size:10px;" size="7"', 'value', 'text', $picturelink );	
	
		$renderinputform=renderinputform($thumblist,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode);
		return $renderinputform;

		
}	

function localfileembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
	global $mosConfig_absolute_path,$mosConfig_live_site;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');

		$adxml="";
	$dlink="";
	$unexpectederror="";
	$fullmd5cachefile="";
	$vdlink="";
	
	$vcode = jalemurldecode($vcode);
	$vidwindow = mosGetParam($_REQUEST,'vidwindow',null);	
	if ($vidwindow=="popup"){
	$videowidth=$popupvideowidth;
	$videoheight=$popupvideoheight;
	} 

	if ($setwidth>0 AND $setheight>0){
		$videowidth=$setwidth;
		$videoheight=$setheight;
	}
	
	$adxml="";
	
	$posavi = strpos($vcode, ".avi");
	$poswmv = strpos($vcode, ".wmv");	
	$posflv = strpos($vcode, ".flv");
	$posmp3 = strpos($vcode, ".mp3");
	$posmpg = strpos($vcode, ".mpg");
	$posmpeg = strpos($vcode, ".mpeg");
	$posswf = strpos($vcode, ".swf");
	$posdivx = strpos($vcode, ".divx");
	$posrmvb = strpos($vcode, ".rmvb");
	$posasx = strpos($vcode, ".asx");	
	$posmov = strpos($vcode, ".mov");

if ($posrmvb>0) {

$embedvideo="<table border=\"0\" cellpadding=\"0\" align=\"left\"><tr><td> <OBJECT id=\"rvocx\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"".$videowidth."\" height=\"".$videoheight."\"> <param name=\"src\" value=\"".$vcode."\"> <param name=\"autostart\" value=\"false\"> <param name=\"controls\" value=\"imagewindow\"> <param name=\"console\" value=\"video\"> <param name=\"loop\" value=\"true\"> <EMBED src=\"".$vcode."\" width=\"".$videowidth."\" height=\"".$videoheight."\"loop=\"true\" type=\"audio/x-pn-realaudio-plugin\" controls=\"imagewindow\" console=\"video\" autostart=\"false\"> </EMBED> </OBJECT> </td></tr> <tr><td> <OBJECT id=\"rvocx\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"".$videowidth."\" height=\"30\"> <param name=\"src\" value=\"".$vcode."\"> <param name=\"autostart\" value=\"false\"> <param name=\"controls\" value=\"ControlPanel\"> <param name=\"console\" value=\"video\"> <EMBED src=\"".$vcode."\" width=\"".$videowidth."\" height=\"30\" controls=\"ControlPanel\" type=\"audio/x-pn-realaudio-plugin\" console=\"video\" autostart=\"false\"> </EMBED> </OBJECT> </td></tr></table>";

	  
}
	
if ($posmov>0) {

$embedvideo="<OBJECT classid='clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B' width=\"".$videowidth."\" height=\"".$videoheight."\" codebase='http://www.apple.com/qtactivex/qtplugin.cab'><param name='src' value=\"".$vcode."\"><param name='autoplay' value=\"false\"><param name='controller' value=\"true\"><param name='loop' value=\"true\"><EMBED src=\"".$vcode."\" width=\"".$videowidth."\" height=\"".$videoheight."\" autoplay=\"false\" controller=\"true\" loop=\"true\" pluginspage='http://www.apple.com/quicktime/download/'></EMBED></OBJECT>";
	  
}	
	
if ($poswmv>0 OR $posmpg>0 OR $posmpeg>0 OR $posasx>0) {
	$videoheight=$videoheight+70;
	$embedvideo="<embed id=\"MediaPlayer\" src=\"".$vcode."\" width=".$videowidth." height=".$videoheight." type=application/x-mplayer2 ShowControls=\"1\" ShowStatusBar=\"1\" allowScriptAccess=\"never\" autoStart=\"0\"></embed>";
}






if ($posswf>0) {
	
    $embedvideo="<object width=\"".$videowidth."\" height=\"".$videoheight."\"><param name=\"movie\" value=\"".$vcode."\"><embed src=\"".$vcode."\" width=\"".$videowidth."\" height=\"".$videoheight."\"></embed></object>";

	//$embedvideo="<embed src=\"".$mosConfig_live_site."/components/com_seyret/localplayer/seyretplayer.swf\" allowfullscreen=\"true\" bgcolor=\"#FFFFFF\" type=\"application/x-shockwave-flash\" flashvars=\"file=".$vcode."&image=".$vthumb."&showdigits=false&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&$repeat&usefullscreen=true&backcolor=0x000000&frontcolor=0xCCCCCC\" height=\"".$videoheight."\" width=\"".$videowidth."\">";
												
												
}



if ($posmp3>0) {
	$embedvideo="<div><img src=\"$vthumb\" width=".$videowidth."></div><EMBED id=\"MediaPlayer\" src=\"".$vcode."\" width=".$videowidth." height=70 type=application/x-mplayer2 ShowControls=\"1\" ShowStatusBar=\"1\" allowScriptAccess=\"never\" autoStart=\"0\"></EMBED>";
}



if ($posflv>0) {



if ($pro=="1"){
	$generatenewfile="0";
	if ($usevideoadsystem=="1"){
		$subdir="ad/";
	} else {
		$subdir="";
	}

	$dlink="";
	
	//$vthumb=str_replace("&","%26",$vthumb);
	$cachefile=$mosConfig_live_site."+localfile+".$vcode.$usevideoadsystem;	
	$md5cachefile=md5($cachefile).".xml";
	$fullmd5cachefile=$mosConfig_absolute_path."/seyretfiles/cache/pro/localfile/".$subdir.$md5cachefile;
	$fullmd5cachefilesite=$mosConfig_live_site."/seyretfiles/cache/pro/localfile/".$subdir.$md5cachefile;
	
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



			
			if ($usevideoadsystem=="1"){
				$videoadlink=generatevideoad($catid);
				
				$adxml="<track>
<title>Ad</title>
<creator>admanager</creator>
<location>".$videoadlink."</location>
<image>".$vthumb."</image>
</track>";
			}	

			$vdlink=$vcode;


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
					
			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/localfile";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}

			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/localfile/ad";
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

 $embedvideo="<object  $classid  id=\"seyretpl\"  name=\"seyretpl\"  width=\"".$videowidth."\" height=\"".$videoheight."\" > <param name=\"allowscriptaccess\" value=\"always\" /> <param name=\"wmode\" value=\"transparent\" /> <param name=\"allowfullscreen\" value=\"true\" /> <param name=\"movie\" value=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\" /> <param name=\"flashvars\" value=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" /><embed id=\"seyretp\" name=\"seyretp\" src=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\"     flashvars=\"width=".$videowidth."&height=".$videoheight."&enablejs=true".$longtail."&file=".$fullmd5cachefilesite."&image=".$vthumb."&autostart=false&logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&skin=".$mosConfig_live_site."/components/com_seyret/localplayer/skins/".$playerskin.".swf&$repeat&fullscreen=true\" width=".$videowidth." height=".$videoheight."    allowfullscreen=\"true\" allowscriptaccess=\"always\" wmode=\"transparent\"  type=\"application/x-shockwave-flash\" /></object>"; 
	
	

	
//end of pro	
} else {
$embedvideo="<embed src=\"".$mosConfig_live_site."/components/com_seyret/localplayer/player.swf\" allowfullscreen=\"true\" bgcolor=\"#FFFFFF\" type=\"application/x-shockwave-flash\" flashvars=\"file=".$vcode."&amp;image=".$vthumb."&amp;showdigits=false&amp;autostart=false&amp;logo=".$mosConfig_live_site."/components/com_seyret/localplayer/logo.png&amp;repeat=false&amp;usefullscreen=true&backcolor=0x000000&frontcolor=0xCCCCCC\" height=\"".$videoheight."\" width=\"".$videowidth."\">";
}
	
}	

if ($posdivx>0) {	


$embedvideo="<embed type=\"video/divx\" src=\"".$vcode."\" custommode=\"Stage6\" width=\"".$videowidth."\" height=\"".$videoheight."\" autoPlay=\"false\"  previewImage=\"".$vthumb."\"  pluginspage=\"http://go.divx.com/plugin/download/\">
</embed>";

}


if ($posavi>0) {
	$embedvideo="<embed type=\"video/divx\" src=\"".$vcode."\" custommode=\"Stage6\" width=\"".$videowidth."\" height=\"".$videoheight."\" autoPlay=\"false\"  previewImage=\"".$vthumb."\"  pluginspage=\"http://go.divx.com/plugin/download/\">
	</embed>";
}



return $embedvideo;

}


function localfilegeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="localfile";

		
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