<?php
/*
// "AllVideos" Plugin by JoomlaWorks for Joomla! 1.5.x - Version 2.5.3
// Copyright (c) 2006 - 2008 JoomlaWorks, a Komrade LLC company. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.joomlaworks.gr
// Designed and developed by the JoomlaWorks team
// *** Last update: August 10th, 2008 ***
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$tagReplace = array(

/* -------------------- Audio/Video formats -------------------- */
"flv" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\">
		<param name=\"movie\" value=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"file=$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.flv&image=$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.jpg&autostart={AUTOPLAY}{CONTROLBAR}&fullscreen=true\" />
	</object>
</span>
",

"flvremote" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\">
		<param name=\"movie\" value=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"file={AVSOURCE}&autostart={AUTOPLAY}{CONTROLBAR}&fullscreen=true\" />
	</object>
</span>
",

"mp3" => "
<span style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\" data=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\">
		<param name=\"movie\" value=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"false\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"file=$mosConfig_live_site/{AFOLDER}/{AVSOURCE}.mp3&autostart={AUTOPLAY}\" />
	</object>
</span>
",

"mp3remote" => "
<span style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\" data=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\">
		<param name=\"movie\" value=\"$mosConfig_live_site/plugins/content/jw_allvideos/players/mediaplayer_4.0.46.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"false\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"file={AVSOURCE}&autostart={AUTOPLAY}\" />
	</object>
</span>
",

"swf" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.swf\">
		<param name=\"movie\" value=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
	</object>
</span>
",

"swfremote" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"{AVSOURCE}\">
		<param name=\"movie\" value=\"{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
	</object>
</span>	
",

"wmv" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<span id=\"jwav-{AVSOURCE}\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\"></span>
</span>
<script type=\"text/javascript\">
	var cnt = document.getElementById('jwav-{AVSOURCE}');
	var src = '$mosConfig_live_site/plugins/content/jw_allvideos/players/wmvplayer.xaml';
	var cfg = {
		file:'$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.wmv',
		width:'{VWIDTH}',
		height:'{VHEIGHT}',
		autostart:'{AUTOPLAY}',
		image:'$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.jpg'
	};
	var ply = new jeroenwijering.Player(cnt,src,cfg);
</script>
",

"wmvremote" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<span id=\"jwav-{AVSOURCE}\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\"></span>
</span>
<script type=\"text/javascript\">
	var cnt = document.getElementById('jwav-{AVSOURCE}');
	var src = '$mosConfig_live_site/plugins/content/jw_allvideos/players/wmvplayer.xaml';
	var cfg = {
		file:'{AVSOURCE}',
		width:'{VWIDTH}',
		height:'{VHEIGHT}',
		autostart:'{AUTOPLAY}'
	};
	var ply = new jeroenwijering.Player(cnt,src,cfg);
</script>
",

"wma" => "
<span style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<span id=\"jwav-{AVSOURCE}\" style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\"></span>
</span>
<script type=\"text/javascript\">
	var cnt = document.getElementById(\"jwav-{AVSOURCE}\");
	var src = '$mosConfig_live_site/plugins/content/jw_allvideos/players/wmvplayer.xaml';
	var cfg = {
		file:'$mosConfig_live_site/{AFOLDER}/{AVSOURCE}.wma',
		width:'{AWIDTH}',
		height:'{AHEIGHT}',
		autostart:'{AUTOPLAY}',
		usefullscreen:'false'
	};
	var ply = new jeroenwijering.Player(cnt,src,cfg);
</script>
",

"wmaremote" => "
<span style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<span id=\"jwav-{AVSOURCE}\" style=\"width:{AWIDTH}px;height:{AHEIGHT}px;\"></span>
</span>
<script type=\"text/javascript\">
	var cnt = document.getElementById(\"jwav-{AVSOURCE}\");
	var src = '$mosConfig_live_site/plugins/content/jw_allvideos/players/wmvplayer.xaml';
	var cfg = {
		file:'{AVSOURCE}',
		width:'{AWIDTH}',
		height:'{AHEIGHT}',
		autostart:'{AUTOPLAY}',
		usefullscreen:'false'
	};
	var ply = new jeroenwijering.Player(cnt,src,cfg);
</script>
",

"mov" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<script type=\"text/javascript\">
		QT_WriteOBJECT_XHTML('$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.mov', '{VWIDTH}', '{VHEIGHT}', '', 'AUTOPLAY', '{AUTOPLAY}', 'BGCOLOR', '{BACKGROUND}', 'SCALE', 'Aspect');
	</script>
</span>
",

"movremote" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<script type=\"text/javascript\">
		QT_WriteOBJECT_XHTML('{AVSOURCE}', '{VWIDTH}', '{VHEIGHT}', '', 'AUTOPLAY', '{AUTOPLAY}', 'SCALE', 'Aspect');
	</script>
</span>
",

"mp4" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<script type=\"text/javascript\">
		QT_WriteOBJECT_XHTML('$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.mp4', '{VWIDTH}', '{VHEIGHT}', '', 'AUTOPLAY', '{AUTOPLAY}', 'SCALE', 'Aspect');
	</script>
</span>
",

"mp4remote" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<script type=\"text/javascript\">
		QT_WriteOBJECT_XHTML('{AVSOURCE}', '{VWIDTH}', '{VHEIGHT}', '', 'AUTOPLAY', '{AUTOPLAY}', 'SCALE', 'Aspect');
	</script>
</span>
",

"3gp" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<script type=\"text/javascript\">
		QT_WriteOBJECT_XHTML('$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.3gp', '{VWIDTH}', '{VHEIGHT}', '', 'AUTOPLAY', '{AUTOPLAY}', 'SCALE', 'Aspect');
	</script>
</span>
",

"3gpremote" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<script type=\"text/javascript\">
		QT_WriteOBJECT_XHTML('{AVSOURCE}', '{VWIDTH}', '{VHEIGHT}', '', 'AUTOPLAY', '{AUTOPLAY}', 'SCALE', 'Aspect');
	</script>
</span>
",

"divx" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"video/divx\" data=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.divx\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\">
		<param name=\"type\" value=\"video/divx\" />
		<param name=\"src\" value=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.divx\" />
		<param name=\"data\" value=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.divx\" />
		<param name=\"codebase\" value=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.divx\" />
		<param name=\"url\" value=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.divx\" />
		<param name=\"mode\" value=\"full\" />
		<param name=\"pluginspage\" value=\"http://go.divx.com/plugin/download/\" />
		<param name=\"allowContextMenu\" value=\"true\" />
		<param name=\"previewImage\" value=\"$mosConfig_live_site/{VFOLDER}/{AVSOURCE}.jpg\" />
		<param name=\"autoPlay\" value=\"{AUTOPLAY}\" />
		<param name=\"minVersion\" value=\"1.0.0\" />
		<param name=\"custommode\" value=\"none\" />
		<p>No video? Get the DivX browser plug-in for <a href=\"http://download.divx.com/player/DivXWebPlayerInstaller.exe\">Windows</a> or <a href=\"http://download.divx.com/player/DivXWebPlayer.dmg\">Mac</a></p>
	</object>
</span>
",

"divxremote" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"video/divx\" data=\"{AVSOURCE}\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\">
		<param name=\"type\" value=\"video/divx\" />
		<param name=\"src\" value=\"{AVSOURCE}\" />
		<param name=\"data\" value=\"{AVSOURCE}\" />
		<param name=\"codebase\" value=\"{AVSOURCE}\" />
		<param name=\"url\" value=\"{AVSOURCE}\" />
		<param name=\"mode\" value=\"full\" />
		<param name=\"pluginspage\" value=\"http://go.divx.com/plugin/download/\" />
		<param name=\"allowContextMenu\" value=\"true\" />
		<param name=\"previewImage\" value=\"\" />
		<param name=\"autoPlay\" value=\"{AUTOPLAY}\" />
		<param name=\"minVersion\" value=\"1.0.0\" />
		<param name=\"custommode\" value=\"none\" />
		<p>No video? Get the DivX browser plug-in for <a href=\"http://download.divx.com/player/DivXWebPlayerInstaller.exe\">Windows</a> or <a href=\"http://download.divx.com/player/DivXWebPlayer.dmg\">Mac</a></p>
	</object>
</span>
",



/* -------------------- 3rd party video providers -------------------- */
// YouTube
"youtube" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.youtube.com/v/{AVSOURCE}&hl=en&fs=1\">
		<param name=\"movie\" value=\"http://www.youtube.com/v/{AVSOURCE}&hl=en&fs=1\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
	</object>
</span>
",

// Google Video
"(google|google.co.uk|google.com.au|google.de|google.es|google.fr|google.it|google.nl|google.pl)" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://video.google.com/googleplayer.swf?docid={AVSOURCE}&hl=en&fs=true\">
		<param name=\"movie\" value=\"http://video.google.com/googleplayer.swf?docid={AVSOURCE}&hl=en&fs=true\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
	</object>
</span>
",

// 123video.nl - http://www.123video.nl/playvideos.asp?MovieID=248020
"123video" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.123video.nl/123video_share.swf?mediaSrc={AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.123video.nl/123video_share.swf?mediaSrc={AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
	</object>
</span>
",

// aniboom.com - http://www.aniboom.com/video/28604/Kashe-Li-Its-Hard/
"aniboom" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://api.aniboom.com/embedded.swf?videoar={AVSOURCE}\">
		<param name=\"movie\" value=\"http://api.aniboom.com/embedded.swf?videoar={AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"allowScriptAccess\" value=\"sameDomain\" />
	</object>
</span>
",

// badjojo.com [adult] - http://www.badjojo.com/video_play_front.php?Id=6718
"badjojo" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.badjojo.com/flvplayer.swf\">
		<param name=\"movie\" value=\"http://www.badjojo.com/flvplayer.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"config=http://www.badjojo.com/videoConfigXmlIndraCode.php?vId={AVSOURCE}\" />
	</object>
</span>
",

// brightcove.tv - http://www.brightcove.tv/title.jsp?title=1656387563&channel=151854679
"brightcove" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.brightcove.tv/playerswf\">
		<param name=\"movie\" value=\"http://www.brightcove.tv/playerswf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"allowFullScreen=true&initVideoId={AVSOURCE}&servicesURL=http://www.brightcove.tv&viewerSecureGatewayURL=https://www.brightcove.tv&cdnURL=http://admin.brightcove.com&autoStart={AUTOPLAY}\" />
		<param name=\"base\" value=\"http://admin.brightcove.com\" />
		<param name=\"seamlesstabbing\" value=\"false\" />
		<param name=\"swLiveConnect\" value=\"true\" />
	</object>
</span>
",

// collegehumor.com - http://www.collegehumor.com/video:1824771
"collegehumor" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id={AVSOURCE}&fullscreen=1\">
		<param name=\"movie\" value=\"http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id={AVSOURCE}&fullscreen=1\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// current.com - http://current.com/items/89150801_campaign_update_07_30_08
"current" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://current.com/e/{AVSOURCE}/en_US\">
		<param name=\"movie\" value=\"http://current.com/e/{AVSOURCE}/en_US\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// dailymotion.com - http://www.dailymotion.com/featured/video/x35714_cap-nord-projet-1_creation
"dailymotion" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.dailymotion.com/swf/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.dailymotion.com/swf/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// video.espn.com - http://sports.espn.go.com/broadband/video/videopage?videoId=3503001&categoryId=3025809&n8pe6c=2
"espn" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://sports.espn.go.com/broadband/player.swf?mediaId={AVSOURCE}\">
		<param name=\"movie\" value=\"http://sports.espn.go.com/broadband/player.swf?mediaId={AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// eyespot.com - http://eyespot.com/share?cmd=permalink&r=0XCzIG2UEAy3criEJW0wIWu85o
"eyespot" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://eyespot.com/flash/medialoader.swf?vurl=http://downloads.eyespot.com/direct/play?r={AVSOURCE}&_autoPlay={AUTOPLAY}\">
		<param name=\"movie\" value=\"http://eyespot.com/flash/medialoader.swf?vurl=http://downloads.eyespot.com/direct/play?r={AVSOURCE}&_autoPlay={AUTOPLAY}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// flurl.com - http://www.flurl.com/video/18402409_airport_musical.htm
"flurl" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.flurl.com/flashplayer/FLVPlayer.swf?xml=http://www.flurl.com/flashplayer/play_flash_xml.php?entryid={AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.flurl.com/flashplayer/FLVPlayer.swf?xml=http://www.flurl.com/flashplayer/play_flash_xml.php?entryid={AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"sameDomain\" />
	</object>
</span>
",

// funnyordie.com - http://www.funnyordie.com/videos/7c52bd0f81
"funnyordie" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www2.funnyordie.com/public/flash/fodplayer.swf?1203120643\">
		<param name=\"movie\" value=\"http://www2.funnyordie.com/public/flash/fodplayer.swf?1203120643\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"key={AVSOURCE}\" />
	</object>
</span>
",

// gametrailers.com - http://www.gametrailers.com/player/37719.html
"gametrailers" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.gametrailers.com/remote_wrap.php?mid={AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.gametrailers.com/remote_wrap.php?mid={AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"sameDomain\" />
	</object>
</span>
",

// godtube.com - http://www.godtube.com/view_video.php?viewkey=3336db1900a0d4d2df7e
"godtube" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://godtube.com/flvplayer.swf\">
		<param name=\"movie\" value=\"http://godtube.com/flvplayer.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"sameDomain\" />
		<param name=\"flashvars\" value=\"viewkey={AVSOURCE}\" />
	</object>
</span>
",

// gofish.com - http://www.gofish.com/player.gfp?gfid=30-1212872
"gofish" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.gofish.com/player/fwplayer.swf\">
		<param name=\"movie\" value=\"http://www.gofish.com/player/fwplayer.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"&loc=blog&gf=true&ns=false&fs=false&gfid={AVSOURCE}&c=grey&autoPlay=false&getAd=false&wm=false&ct=true&tb=false&svr=www.gofish.com\" />
	</object>
</span>
",

// guba.com - http://www.guba.com/watch/3000156661
"guba" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.guba.com/f/root.swf?video_url=http://free.guba.com/uploaditem/{AVSOURCE}/flash.flv&isEmbeddedPlayer=true\">
		<param name=\"movie\" value=\"http://www.guba.com/f/root.swf?video_url=http://free.guba.com/uploaditem/{AVSOURCE}/flash.flv&isEmbeddedPlayer=true\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// hook.tv - http://www.hook.tv/player.php?key=51AAAF57E594269E
"hook" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://flyfishing.hook.tv/player.swf?key={AVSOURCE}\">
		<param name=\"movie\" value=\"http://flyfishing.hook.tv/player.swf?key={AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// jumpcut.com - http://www.jumpcut.com/view?id=B4AC2D1607ED11DDA411000423CF0184
"jumpcut" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.jumpcut.com/media/flash/jump.swf?id={AVSOURCE}&asset_type=movie&asset_id={AVSOURCE}&eb=1\">
		<param name=\"movie\" value=\"http://www.jumpcut.com/media/flash/jump.swf?id={AVSOURCE}&asset_type=movie&asset_id={AVSOURCE}&eb=1\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// kewego.com - http://www.kewego.com/video/iLyROoafYcaT.html
"kewego" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.kewego.com/p/en/{AVSOURCE}.html\">
		<param name=\"movie\" value=\"http://www.kewego.com/p/en/{AVSOURCE}.html\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// krazyshow.com [adult] - http://www.krazyshow.com/media/playvideo.aspx?f=flash7&cid=FFE2C64AF5F843FB88A00B2FE31BD3BA
"krazyshow" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.krazyshow.com/media/flvplayer2.swf?autoStart=0&popup=1&video=http%3a%2f%2fwww.krazyshow.com%2fmedia%2fgetflashvideo.ashx%3fcid%3d{AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.krazyshow.com/media/flvplayer2.swf?autoStart=0&popup=1&video=http%3a%2f%2fwww.krazyshow.com%2fmedia%2fgetflashvideo.ashx%3fcid%3d{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// liveleak.com - http://www.liveleak.com/view?i=2eb_1217374911
"liveleak" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.liveleak.com/e/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.liveleak.com/e/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// livevideo.com - http://www.livevideo.com/video/APnews/F19F90BB55C64182A7F2AA222A982893/raw-video-at-least-7-killed-i.aspx
"livevideo" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.livevideo.com/flvplayer/embed/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.livevideo.com/flvplayer/embed/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// metacafe.com - http://www.metacafe.com/watch/1560301/jet_car_goes_324_mph_for_texas_speed_record/
"metacafe" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.metacafe.com/fplayer/{AVSOURCE}.swf\">
		<param name=\"movie\" value=\"http://www.metacafe.com/fplayer/{AVSOURCE}.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// mofile.com - http://tv.mofile.com/WGCQWS8D/
"mofile" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://tv.mofile.com/cn/xplayer.swf\">
		<param name=\"movie\" value=\"http://tv.mofile.com/cn/xplayer.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"sameDomain\" />
		<param name=\"flashvars\" value=\"v={AVSOURCE}&autoplay=0&nowSkin=1_1\" />
	</object>
</span>
",

// myspace.com - http://vids.myspace.com/index.cfm?fuseaction=vids.individual&VideoID=37910278
"myspace" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://lads.myspace.com/videos/vplayer.swf\">
		<param name=\"movie\" value=\"http://lads.myspace.com/videos/vplayer.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"sameDomain\" />
		<param name=\"flashvars\" value=\"m={AVSOURCE}&v=2&type=video\" />
	</object>
</span>
",

// myvideo.de - http://www.myvideo.de/watch/4027656/Webcam_Julia_Privat_Akt_mein_erster_Song?p=hm21
"myvideo" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.myvideo.de/movie/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.myvideo.de/movie/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// redtube.com [adult] - http://www.redtube.com/9194
"redtube" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://embed.redtube.com/player/\">
		<param name=\"movie\" value=\"http://embed.redtube.com/player/\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"id={AVSOURCE}&style=redtube\" />
	</object>
</span>
",

// revver.com - http://www.revver.com/video/1072440/gnarls-barkley-whos-gonna-save-my-soul/
"revver" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<script src=\"http://flash.revver.com/player/1.0/player.js?mediaId:{AVSOURCE};width:{VWIDTH};height:{VHEIGHT};\" type=\"text/javascript\"></script>
</span>
",

// sapo.pt - http://videos.sapo.pt/34NipYH7bWgUzc3pZgwo
"sapo" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://rd3.videos.sapo.pt/play?file=http://rd3.videos.sapo.pt/{AVSOURCE}/mov/1\">
		<param name=\"movie\" value=\"http://rd3.videos.sapo.pt/play?file=http://rd3.videos.sapo.pt/{AVSOURCE}/mov/1\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// sevenload.com - http://en.sevenload.com/videos/C4vgVtx-Startrek-Just-Got-Smaller
"sevenload" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.sevenload.com/pl/{AVSOURCE}/445x364/swf\">
		<param name=\"movie\" value=\"http://www.sevenload.com/pl/{AVSOURCE}/445x364/swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// spike.com [former iFilm.com] - http://www.spike.com/video/2881531
"(spike|ifilm)" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.spike.com/efp\">
		<param name=\"movie\" value=\"http://www.spike.com/efp\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"flvbaseclip={AVSOURCE}&\" />
	</object>
</span>
",

// stickam.com - http://www.stickam.com/viewMedia.do?mId=180191003
"stickam" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://player.stickam.com/flashVarMediaPlayer/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://player.stickam.com/flashVarMediaPlayer/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// stupidvideos.com - http://www.stupidvideos.com/video/just_plain_stupid/Spoon_Prank_1/#175073
"stupidvideos" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://img.purevideo.com/images/player/player.swf?sa=1&i={AVSOURCE}\">
		<param name=\"movie\" value=\"http://img.purevideo.com/images/player/player.swf?sa=1&i={AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// ustream.tv - http://www.ustream.tv/recorded/140603
"ustream" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.ustream.tv/flash/video/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.ustream.tv/flash/video/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// veoh.com - http://www.veoh.com/videos/v458872KnKgCCNF
"veoh" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.veoh.com/veohplayer.swf?permalinkId={AVSOURCE}&id=anonymous&player=videodetailsembedded&affiliateId=&videoAutoPlay=0\">
		<param name=\"movie\" value=\"http://www.veoh.com/veohplayer.swf?permalinkId={AVSOURCE}&id=anonymous&player=videodetailsembedded&affiliateId=&videoAutoPlay=0\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// videotube.de - http://www.videotube.de/watch/41819
"videotube" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.videotube.de/flash/videotube_player_4.swf\">
		<param name=\"movie\" value=\"http://www.videotube.de/flash/videotube_player_4.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"videoId={AVSOURCE}&svsf=1&lang=german&host=www.videotube.de\" />
		<param name=\"swLiveConnect\" value=\"true\" />
	</object>
</span>
",

// vidiac.com - http://www.vidiac.com/video/fee38abd-b421-4873-bf7b-9841003cff17.htm
"vidiac" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.vidiac.com/vidiac.swf\">
		<param name=\"movie\" value=\"http://www.vidiac.com/vidiac.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"sameDomain\" />
		<param name=\"flashvars\" value=\"video={AVSOURCE}\" />
	</object>
</span>
",

// vimeo.com - http://www.vimeo.com/1319796
"vimeo" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.vimeo.com/moogaloop.swf?clip_id={AVSOURCE}&amp;server=www.vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1\">
		<param name=\"movie\" value=\"http://www.vimeo.com/moogaloop.swf?clip_id={AVSOURCE}&amp;server=www.vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"scale\" value=\"showAll\" />
	</object>
</span>
",

// video.yahoo.com - http://video.yahoo.com/watch/3169238/8981933
"yahoo" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf\">
		<param name=\"movie\" value=\"http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"{AVSOURCE}\" />
	</object>
</span>
",

// youare.tv - http://www.youare.tv/watch.php?id=2859
"youare" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.youare.tv/yatvplayer.swf?videoID={AVSOURCE}&serverDomain=www.youare.tv\">
		<param name=\"movie\" value=\"http://www.youare.tv/yatvplayer.swf?videoID={AVSOURCE}&serverDomain=www.youare.tv\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"never\" />
	</object>
</span>
",

// youmaker.com - http://www.youmaker.com/video/sv?id=508ae75247584c5f8c5e6af6b8278edf001
"youmaker" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.youmaker.com/v.swf\">
		<param name=\"movie\" value=\"http://www.youmaker.com/v.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
		<param name=\"flashvars\" value=\"file=http://www.youmaker.com/video/v%3Fid%3D{AVSOURCE}%26nu%3Dnu&showdigits=true&overstretch=fit&autostart={AUTOPLAY}&rotatetime=12&linkfromdisplay=false&repeat=list&shuffle=false&showfsbutton=false&fsreturnpage=&fullscreenpage=\" />
	</object>
</span>
",



// --- Added in 2.5.2 - CHINESE video providers ---

// ku6.com - http://v.ku6.com/show/mXbA6Nvfwba9H3m4.html - mXbA6Nvfwba9H3m4
"ku6" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://player.ku6.com/refer/{AVSOURCE}/v.swf\">
		<param name=\"movie\" value=\"http://player.ku6.com/refer/{AVSOURCE}/v.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// sohu.com - http://v.blog.sohu.com/u/vw/1478211 - 1478211
"sohu" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://v.blog.sohu.com/fo/v4/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://v.blog.sohu.com/fo/v4/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"Always\" />
	</object>
</span>
",

// tudou.com - http://www.tudou.com/programs/view/sUMj-5Qpxr8/ - sUMj-5Qpxr8
"tudou" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.tudou.com/v/{AVSOURCE}\">
		<param name=\"movie\" value=\"http://www.tudou.com/v/{AVSOURCE}\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

// youku.com - http://v.youku.com/v_show/id_XMzc2MDU3OTY=.html - id_XMzc2MDU3OTY=
"youku" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://player.youku.com/player.php/sid/{AVSOURCE}/v.swf\">
		<param name=\"movie\" value=\"http://player.youku.com/player.php/sid/{AVSOURCE}/v.swf\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"sameDomain\" />
	</object>
</span>
",



// --- Added in 2.5.3 ---

// southparkstudios.com - http://www.southparkstudios.com/clips/165195/
"southpark" => "
<span style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" class=\"allvideos_player\" title=\"JoomlaWorks AllVideos Player\">
	<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://media.mtvnservices.com/mgid:cms:item:southparkstudios.com:{AVSOURCE}:\">
		<param name=\"movie\" value=\"http://media.mtvnservices.com/mgid:cms:item:southparkstudios.com:{AVSOURCE}:\" />
		<param name=\"quality\" value=\"high\" />
		<param name=\"wmode\" value=\"{TRANSPARENCY}\" />
		<param name=\"bgcolor\" value=\"{BACKGROUND}\" />
		<param name=\"autoplay\" value=\"{AUTOPLAY}\" />
		<param name=\"allowfullscreen\" value=\"true\" />
		<param name=\"allowscriptaccess\" value=\"always\" />
	</object>
</span>
",

);

?>