<?php
//Google plugin for Seyret component//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @Modification no google video logo by pegaz
* @ All rights reserved
* @ Seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html

**/	

// no direct access
defined( '_VALID_MOS' ) or die( 'Kýsýtlý alan' );


$videodownloadsupport="yes";
$downloadcachingnotimeout="yes";
// $downloadcachingnotimeout="no";
// $downloadcachingtimeout="360";

function googlegetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	global $mosConfig_absolute_path, $mosConfig_live_site,$my;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		

if ($reqtype=="new") {

		$vidlink=jalemurldecode($vidlink);	
		
		$videoservertype="google";
		$googledomain = array();
			$googledomain[0]=".google.com/";
			$googledomain[1]=".google.ae/";
			$googledomain[2]=".google.com.af/";
			$googledomain[3]=".google.com.ag/";
			$googledomain[4]=".google.com.ai/";
			$googledomain[5]=".google.am/";
			$googledomain[6]=".google.com.ar/";
			$googledomain[7]=".google.as/";
			$googledomain[8]=".google.at/";
			$googledomain[9]=".google.com.au/";
			$googledomain[10]=".google.az/";
			$googledomain[11]=".google.ba/";
			$googledomain[12]=".google.com.bd/";
			$googledomain[13]=".google.be/";
			$googledomain[14]=".google.bg/";
			$googledomain[15]=".google.com.bh/";
			$googledomain[16]=".google.bi/";
			$googledomain[17]=".google.com.bn/";
			$googledomain[18]=".google.com.bo/";
			$googledomain[19]=".google.com.br/";
			$googledomain[20]=".google.bs/";
			$googledomain[21]=".google.co.bw/";
			$googledomain[22]=".google.com.bz/";
			$googledomain[23]=".google.ca/";
			$googledomain[24]=".google.cd/";
			$googledomain[25]=".google.cg/";
			$googledomain[26]=".google.ch/";
			$googledomain[27]=".google.ci/";
			$googledomain[28]=".google.co.ck/";
			$googledomain[29]=".google.cl/";
			$googledomain[30]=".google.cn/";
			$googledomain[31]=".google.com.co/";
			$googledomain[32]=".google.co.cr/";
			$googledomain[33]=".google.com.cu/";
			$googledomain[34]=".google.cz/";
			$googledomain[35]=".google.de/";
			$googledomain[36]=".google.dj/";
			$googledomain[37]=".google.dk/";
			$googledomain[38]=".google.dm/";
			$googledomain[39]=".google.com.do/";
			$googledomain[40]=".google.com.ec/";
			$googledomain[41]=".google.ee/";
			$googledomain[42]=".google.com.eg/";
			$googledomain[43]=".google.es/";
			$googledomain[44]=".google.com.et/";
			$googledomain[45]=".google.fi/";
			$googledomain[46]=".google.com.fj/";
			$googledomain[47]=".google.fm/";
			$googledomain[48]=".google.fr/";
			$googledomain[49]=".google.ge/";
			$googledomain[50]=".google.gg/";
			$googledomain[51]=".google.com.gi/";
			$googledomain[52]=".google.gl/";
			$googledomain[53]=".google.gm/";
			$googledomain[54]=".google.gp/";
			$googledomain[55]=".google.gr/";
			$googledomain[56]=".google.com.gt/";
			$googledomain[57]=".google.gy/";
			$googledomain[58]=".google.com.hk/";
			$googledomain[59]=".google.hn/";
			$googledomain[60]=".google.hr/";
			$googledomain[61]=".google.ht/";
			$googledomain[62]=".google.hu/";
			$googledomain[63]=".google.co.id/";
			$googledomain[64]=".google.ie/";
			$googledomain[65]=".google.co.il/";
			$googledomain[66]=".google.im/";
			$googledomain[67]=".google.co.in/";
			$googledomain[68]=".google.is/";
			$googledomain[69]=".google.it/";
			$googledomain[70]=".google.je/";
			$googledomain[71]=".google.com.jm/";
			$googledomain[72]=".google.jo/";
			$googledomain[73]=".google.co.jp/";
			$googledomain[74]=".google.co.ke/";
			$googledomain[75]=".google.com.kh/";
			$googledomain[76]=".google.ki/";
			$googledomain[77]=".google.kg/";
			$googledomain[78]=".google.co.kr/";
			$googledomain[79]=".google.kz/";
			$googledomain[80]=".google.la/";
			$googledomain[81]=".google.li/";
			$googledomain[82]=".google.lk/";
			$googledomain[83]=".google.co.ls/";
			$googledomain[84]=".google.lt/";
			$googledomain[85]=".google.lu/";
			$googledomain[86]=".google.lv/";
			$googledomain[87]=".google.com.ly/";
			$googledomain[88]=".google.co.ma/";
			$googledomain[89]=".google.md/";
			$googledomain[90]=".google.mn/";
			$googledomain[91]=".google.ms/";
			$googledomain[92]=".google.com.mt/";
			$googledomain[93]=".google.mu/";
			$googledomain[94]=".google.mv/";
			$googledomain[95]=".google.mw/";
			$googledomain[96]=".google.com.mx/";
			$googledomain[97]=".google.com.my/";
			$googledomain[98]=".google.com.na/";
			$googledomain[99]=".google.com.nf/";
			$googledomain[100]=".google.com.ng/";
			$googledomain[101]=".google.com.ni/";
			$googledomain[102]=".google.nl/";
			$googledomain[103]=".google.no/";
			$googledomain[104]=".google.com.np/";
			$googledomain[105]=".google.nr/";
			$googledomain[106]=".google.nu/";
			$googledomain[107]=".google.co.nz/";
			$googledomain[108]=".google.com.om/";
			$googledomain[109]=".google.com.pa/";
			$googledomain[110]=".google.com.pe/";
			$googledomain[111]=".google.com.ph/";
			$googledomain[112]=".google.com.pk/";
			$googledomain[113]=".google.pl/";
			$googledomain[114]=".google.pn/";
			$googledomain[115]=".google.com.pr/";
			$googledomain[116]=".google.pt/";
			$googledomain[117]=".google.com.py/";
			$googledomain[118]=".google.com.qa/";
			$googledomain[119]=".google.ro/";
			$googledomain[120]=".google.ru/";
			$googledomain[121]=".google.rw/";
			$googledomain[122]=".google.com.sa/";
			$googledomain[123]=".google.com.sb/";
			$googledomain[124]=".google.sc/";
			$googledomain[125]=".google.se/";
			$googledomain[126]=".google.com.sg/";
			$googledomain[127]=".google.sh/";
			$googledomain[128]=".google.si/";
			$googledomain[129]=".google.sk/";
			$googledomain[130]=".google.sn/";
			$googledomain[131]=".google.sm/";
			$googledomain[132]=".google.st/";
			$googledomain[133]=".google.com.sv/";
			$googledomain[134]=".google.co.th/";
			$googledomain[135]=".google.com.tj/";
			$googledomain[136]=".google.tk/";
			$googledomain[137]=".google.tm/";
			$googledomain[138]=".google.to/";
			$googledomain[139]=".google.tp/";
			$googledomain[140]=".google.com.tr/";
			$googledomain[141]=".google.tt/";
			$googledomain[142]=".google.com.tw/";
			$googledomain[143]=".google.com.ua/";
			$googledomain[144]=".google.co.ug/";
			$googledomain[145]=".google.co.uk/";
			$googledomain[146]=".google.com.uy/";
			$googledomain[147]=".google.co.uz/";
			$googledomain[148]=".google.com.vc/";
			$googledomain[149]=".google.co.ve/";
			$googledomain[150]=".google.vg/";
			$googledomain[151]=".google.co.vi/";
			$googledomain[152]=".google.com.vn/";
			$googledomain[153]=".google.vu/";
			$googledomain[154]=".google.ws/";
			$googledomain[155]=".google.co.za/";
			$googledomain[156]=".google.co.zm/";
			$googledomain[157]=".google.co.zw/";

		for ($i=1; $i<=157;$i++){
			$vidlink=str_replace($googledomain[$i],".google.com/",$vidlink);
		}
		
		$smallvideocode=str_replace("http://video.google.com/videoplay?docid=","",$vidlink);
		$smallvideocode=str_replace("/","",$smallvideocode);
		$pos = strpos($smallvideocode, "&");
		if ($pos>0){
			$smallvideocode=substr($smallvideocode,0,$pos);		
		}
		
		
		//improved security not to call another site...
		$vidfeedlink="http://video.google.com/videofeed?docid=".$smallvideocode;
	
} else if ($reqtype=="refresh") {
	if ($vidlink==""){
		$vidfeedlink="http://video.google.com/videoplay?docid=".$existingcode;
	}	
	
}



		
		$str=jalem_file_get_contents($vidfeedlink);
		$pos = strpos($str, "<media:title>")+13;
		$post=strpos($str, "</media:title>")-$pos;		
		$videotitle=substr($str,$pos,$post);

		$pos = strpos($str, "<media:description>")+19;
		$post=strpos($str, "</media:description>")-$pos;		
		$itemcomment=substr($str,$pos,$post);	

		

		$pos = strpos($str, "media:thumbnail")+21;
		$post=strpos($str, "media:player")-$pos;		
		$trim1=substr($str,$pos,$post);
		
		
		$pos = strpos($trim1, "\"");
		$picturelink=substr($trim1,0,$pos);
		$picturelink=str_replace("\"","",$picturelink);
		
		

	


	if ($reqtype=="new") {
			$renderinputform=renderinputform($vidlink, $picturelink,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode);
			return $renderinputform;
	} else if ($reqtype=="refresh") {
			return array ($picturelink, $videotitle, $itemcomment);	
	}
		
}

function googleembed($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid, $setwidth=null, $setheight=null){
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
	} else {
	$videowidth=$videowidth."px";
	$videoheight=$videoheight."px";	
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
	$cachefile=$mosConfig_live_site."+google+".$vcode.$usevideoadsystem;	
	$md5cachefile=md5($cachefile).".xml";
	$fullmd5cachefile=$mosConfig_absolute_path."/seyretfiles/cache/pro/google/".$subdir.$md5cachefile;
	$fullmd5cachefilesite=$mosConfig_live_site."/seyretfiles/cache/pro/google/".$subdir.$md5cachefile;
	
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
			
			$dwnlink=googlegeneratevideodownloadlink($vcode, $pro, "embed");

			
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
					
			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/google";
			if (!is_dir($makedir))
					{
					$oldumask=umask(0);
					mkdir ($makedir,0755);
					umask($oldumask);
					}

			$makedir=$mosConfig_absolute_path."/seyretfiles/cache/pro/google/ad";
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
$embedvideo="<embed style=\"width:".$videowidth."; height:".$videoheight.";\" id=\"VideoPlayback\" type=\"application/x-shockwave-flash\" src=\"http://video.google.com/googleplayer.swf?docId=".$vcode."&hl=en\" flashvars=\"\"> </embed>";
}

return $embedvideo;

}


function googlegeneratevideodownloadlink($vcode, $pro, $dltask){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;

$vtype="google";

		
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