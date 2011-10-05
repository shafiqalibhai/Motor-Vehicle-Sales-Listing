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
// $mtime = microtime();
// $mtime = explode(" ", $mtime);
// $mtime = $mtime[1] + $mtime[0];
// $tstart = $mtime;

//sleep(15);

$task = mosGetParam( $_REQUEST, 'task', null);



$id = mosGetParam($_REQUEST,'id',null);
$navstart = mosGetParam($_REQUEST,'navstart',null);
$Itemid = mosGetParam($_REQUEST,'Itemid',null);
$nohtml = mosGetParam($_REQUEST,'no_html',null);
$catid = mosGetParam($_REQUEST,'catid',null);

require($mosConfig_absolute_path."/components/com_seyret/includes/json.php");
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php"); 
require($mosConfig_absolute_path."/components/com_seyret/seyret.html.php");
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret.class.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/seyret_gadgets.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/replytoslider.php");





switch ($errorreporting){

	case "noreport":
	default:
	error_reporting(0);
	break;
	
	case "allexceptnotice":
	error_reporting(E_ALL ^ E_NOTICE);
	break;

	case "allerrorreports":
	error_reporting(E_ALL);
	break;	
	
	
}	



//Language definitions
	if (file_exists($mosConfig_absolute_path."/components/com_seyret/language/".$mosConfig_lang.".php")){ 
	    include($mosConfig_absolute_path."/components/com_seyret/language/".$mosConfig_lang.".php");
    }else{ 
	include($mosConfig_absolute_path."/components/com_seyret/language/english.php");
    }







if ($Itemid==""){
$query = "SELECT id FROM #__menu WHERE link = 'index.php?option=com_seyret' AND published = '1'";
$database->setQuery( $query, 0, 1 );
$Itemid = $database->loadResult();
}


$seyretfbfile=$mosConfig_absolute_path. "/components/com_seyret/plugins/comment/discussfb.php";
if (file_exists($seyretfbfile)){
	require_once($seyretfbfile);
}
		






if ($task=="" AND $catid=="") {
	$task="seyretmainpage";
} else if ($task=="" AND $catid!=""){
	$task="seyretfrontpg";
}	

$cid="";

switch ($task){

	case "seyretfrontpg":
	seyretfrontpg($option);
	break;
	
	case "seyretmainpage":
	seyretmainpage($option);
		// $mtime = microtime();
		// $mtime = explode(" ", $mtime);
		// $mtime = $mtime[1] + $mtime[0];
		// $tend = $mtime;
		// $tpassed = ($tend - $tstart);
		// echo $tpassed ;	
	break;	

	case "videocatlist":
	seyretfrontpg($option);
	break;

	
	case "videolist":
	videolist($navstart,$cid);
	break;

	case "changedirectory":
	changedirectory();
	break;

	case "addlinkfront":
	addlinkfront();
	break;	
	
	case "applyvideolink":
	applyvideolink();
	break;		

	case "savevideoitem":
	savevideoitem();
	break;

	case "showvideo":
	showvideo($id);
	break;

	case "flvdownloadreq":
	flvdownloadreq();
	break;	

	case "embedpopup":
	embedpopup();
	break;
	
	case "voteclick":
	voteclick();
	break;

	case "addnewvideo":
	addnewvideo();
	break;
	
	
	case "videodirectlink":
	videodirectlink($id);
		// $mtime = microtime();
		// $mtime = explode(" ", $mtime);
		// $mtime = $mtime[1] + $mtime[0];
		// $tend = $mtime;
		// $tpassed = ($tend - $tstart);
		// echo $tpassed ;
	
	break;

	case "editvideos":
	editvideos($id);
	break;	
	
	case "pendingvideos":
	editvideos($id);
	break;	

	case "deletevideo":
	deletevideo($id);
	break;	

	case "refreshvideo":
	refreshvideo($id);
	break;

	
	case "uploadvideo":
	uploadvideo();
	break;		

	case "prouploadvideo":
	prouploadvideo();
	break;

	case "processvideoupload":
	processvideoupload();
	break;		

	case "proprocessvideoupload":
	proprocessvideoupload();
	break;

	case "deletemyunprocessedvideo":
	deletemyunprocessedvideo();
	break;
	
	case "playlistwithad":
	playlistwithad();
	break;	

	case "seyrethelp":
	seyrethelp();
	break;		

	case "reportvideo":
	reportvideo($id);
	break;	

	case "savevideoreport":
	savevideoreport($id);
	break;

	case "reportedvideos":
	reportedvideos();
	break;	

	case "editreport":
	editreport($id);
	break;
	
	case "searchvideos":
	searchvideos();
	break;	

	case "allvideoslist":
	allvideoslist();
	break;	

	case "uservideoslist":
	uservideoslist();
	break;	

	case "pendingvideoslist":
	pendingvideoslist();
	break;

	case "featuredvideos":
	featuredvideos();
	break;	

	case "rss2feed":
	rss2feed();
	break;	

	case "ajaxuploadvideogetform":
	ajaxuploadvideogetform();
	break;		

	case "prouploadcheckstatus":
	prouploadcheckstatus();
	break;
	
	case "listflashmodule":
	listflashmodule();
	break;		

	case "listflashmodule2":
	listflashmodule2();
	break;	
	
	case "generatersslinks":
	generatersslinks();
	break;
	
	case "report":
	report();
	break;	
	
	
	case "procheckflvconversion":
	procheckflvconversion();
	break;

	case "prouploadcreatethumbnails":
	prouploadcreatethumbnails();
	break;
	
	case "prouploadgetform":
	prouploadgetform();
	break;	
	
	case "saveproupload":
	saveproupload();
	break;	

	case "flashprocheck":
	flashprocheck();
	break;	

	case "flvconversionquee":
	flvconversionquee();
	break;	

	case "convertflvbatch":
	convertflvbatch();
	break;		

	case "clearhtmlcache":
	clearhtmlcache();
	break;	

	case "recommendationsxml":
	recommendationsxml();
	break;		
	
}
//Functions==============================================
function seyretfrontpg() {
HTML_seyret::htmlseyretfrontpg();
}	




function changedirectory() {
$cid = mosGetParam($_REQUEST,'catid',null);
$result1="<div id=\"directoriesresult\">".HTML_seyret::htmlvideocatlist($cid)."</div>";
$result2="<div id=\"videoslistresult\">".videolist(0,$cid)."</div>";

$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type: application/x-javascript; charset=$charset");

echo $result1.$result2;

}


function addlinkfront(){
	global $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	
	
if ($canaddvideos=="yes"){
	HTML_seyret::htmladdlinkfront();
} else
{
echo _YOUDONTHAVEPERMISSIONS;
}

}

function uploadvideo(){
	global $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	
	
if ($canuploadvideos=="yes"){
	HTML_seyret::htmluploadvideo();
} else
{
echo _YOUDONTHAVEPERMISSIONS;
}

}


function prouploadvideo(){
	global $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	
	
if ($canuploadvideos=="yes"){
	HTML_seyret::htmlprouploadvideo();
} else
{
echo _YOUDONTHAVEPERMISSIONS;
}

}



function videolist($navstart,$cid){
	global $database, $mosConfig_absolute_path, $mosConfig_live_site,$my, $Itemid;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');


	$cat_id="";
	$navstart = mosGetParam($_REQUEST,'navstart',null);
	$sender = mosGetParam($_REQUEST,'sender',null);
	$act = mosGetParam($_REQUEST,'act',null);	
	
	
	if ($cid=="" or $cid=="0"){
	$catid = mosGetParam($_REQUEST,'catid',null);
	} else {
	$catid=$cid;
	}
	
	$cookieorderingkey="";
	$cookieorderingtype="";
	
	$seyretbrwsrl = mosGetParam($_COOKIE,'seyretbrwsrl',null);
	$seyretbrwsrl=str_replace("\\\"","\"",$seyretbrwsrl);
	
	if ($seyretbrwsrl!=""){
		$jsonbrwsrl = new Services_Seyret_JSON();
		$seyretbrwsrlvalues = $jsonbrwsrl->decode($seyretbrwsrl);
		
		$cookieorderingkey=$seyretbrwsrlvalues->orderingkey;
		$cookieorderingtype=$seyretbrwsrlvalues->orderingtype;	
	
	}

	
	
	if ($cookieorderingkey==""){
		$neworderingkey=$orderingkey;
	} else {
		$neworderingkey=$cookieorderingkey;
	}

	if ($neworderingkey=="rating"){
		$queryneworderingkey="votetotal/voteclick";
	} else {
		$queryneworderingkey=$neworderingkey;
	}
	
	
	if ($cookieorderingtype==""){
		$neworderingtype=$orderingtype;
	} else {
		$neworderingtype=$cookieorderingtype;
	}




	
	$thecolumn=1; //this is for multicolumn


	//prepare navigation steps***************
	$limitstep=$videocountinvideolist;


	$checkfirstchar=substr($catid, 0, 1);
	if ($checkfirstchar<>"*"){
		$database->setQuery("SELECT * FROM #__seyret_categories WHERE id='$catid'");
		$myvidyocategory = $database->loadObjectList();
		foreach ($myvidyocategory as $myvidyocategory){
		$catgname=$myvidyocategory->categoryname;
		$cat_id=$myvidyocategory->catid;
		}
	$cid=$catid;//take unformatted category id 
	$catid=$cat_id;		

	} else {	
	$checkcatidlastchar=substr($catid, -1);  //firefox behaves a bit different, don't know why. this should correct...
	
	if ($catid<>"") {
		if ($checkcatidlastchar<>"#") {
			$catid=$catid."#";
		}
	}
	
	//strripos doesn't work in php 4 :(
	$catid = str_replace( "**", "a", $catid );
	$twostarrightposition=strrchr($catid,"a");
	$newcatid=substr($catid, $twostarrightposition, strlen($catid));
	$newcatid = str_replace( "*", "", $newcatid );	
	$catid = str_replace( "a", "**", $catid );
	$cid = str_replace( "#", "", $newcatid );		
	}
	

	
	
	$rssimage=$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/rss.png";	
				
				
	if ($cid=="" OR $cid=="undefined") $cid="0";
	$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=generatersslinks";
	$rssfeedforcategorylink=sefRelToAbs($link);	
	$rssfeedforcategory="<a href=\"$rssfeedforcategorylink\"><img src=\"$rssimage\" border=\"0\"  alt=\"\"/></a>";
	
	if ($act=="next") {
	$from=$navstart+$limitstep;
	}

	if ($act=="prev") {
	$from=$navstart-$limitstep;
	}

	if ($act=="") {
	$from=0;
	}
	//**************************************


	//get category name if not empty=============
	if ($catid<>"" AND $catid<>"0"){
		$wherequery="WHERE a.catid=b.catid AND a.catid='$catid' AND a.published='1'";
		$query="SELECT a.*, b.categoryname FROM #__seyret_items AS a, #__seyret_categories AS b $wherequery ORDER BY ".$queryneworderingkey." ".$neworderingtype." LIMIT $from, $limitstep";

		//Get linecount
		$database->setQuery("SELECT count(*) FROM #__seyret_items AS a, #__seyret_categories AS b $wherequery");
		$totalvideo = $database->loadResult();		
		
		
	} else {
		$wherequery="WHERE a.published='1'";
		$query="SELECT a.* FROM #__seyret_items AS a $wherequery ORDER BY ".$queryneworderingkey." ".$neworderingtype." LIMIT $from, $limitstep";
		$catgname="";

		//Get linecount
		$database->setQuery("SELECT count(*) FROM #__seyret_items AS a $wherequery");
		$totalvideo = $database->loadResult();		
	}
	//========================================
	



		
	//read videos---------------------------------------------------------	

	$database->setQuery($query);
	$vidyo = $database->loadObjectList();
	//---------------------------------------------------------------------------

	
	//read templatefiles====================================
	$templatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/videolist.php";
	$template= jalemseyret_read_file($templatefile);

	$rowtemplatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/videolist_row.php";
	$rowtemplate= jalemseyret_read_file($rowtemplatefile);
	//=======================================================
	
	$template = str_replace( "{videolistrows}", "<table class=\"videolisttable\" width=\"100%\"border=\"0\">{videolistrows}</table>", $template );

	//read each video item**************************************
	$categoryheading="";
	foreach ($vidyo as $vidyo) {
		if ($catid<>""  AND $catid<>"0"){
			$catgname=$vidyo->categoryname;
			$categoryheading=_VIDEOLISTHEADERPRE.$catgname._VIDEOLISTHEADERSUF;
		} else {
			$categoryheading=_VIDEOSINALLCATEGORIES;
		}
		
		$vid=$vidyo->id;
		

		
		$vhit=$vidyo->hit;
		$vpicturelink = $vidyo->picturelink;
		$votes=$vidyo->voteclick;
		$vratingtotal=$vidyo->votetotal;
		$vaddedby=$vidyo->addedby;
		$vaddedbyname=jagetusersname($vaddedby);
		$vaddeddate=$vidyo->addeddate;
		$downloads=$vidyo->downloadcount;	
		$accesslevel=$vidyo->accesslevel;			
		
		$vcatid="";
		$vcategoryname="";
		$vcatid=$vidyo->catid;
		
		if ($vpicturelink==""){
		$vpicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
		}
		
			//generate voting percent'''''''''''''''''''
			if ($votes>0){
			$intrating=($vratingtotal/$votes)*100;
			$nrating=ceil($intrating);
			$intrating=$nrating/100;
			}
			else {
			$intrating="";
			}
			//'''''''''''''''''''''''''''''''''''''''''''''''''''''

		//generate title and comment with config values-------------------------
		$showaccesslevels="no";
		$acclev="";
		if ($showaccesslevels=="yes") {
			$database->setQuery("SELECT * FROM #__seyret_permissions WHERE uservideoaccesslevel='$accesslevel'");
			$permgroupname = $database->loadObjectList();	
			foreach ($permgroupname as $permgroupname) {
			$accesslevelnames=$permgroupname->jaclname;
			}

			$acclev="<br/><span class=\"acesslevelinvideolist\">".$accesslevelnames."</span>";
		}
		
		$vtitle=$vidyo->title;
		if (strlen($vtitle)>$videolisttitlelettercount) {
			$vtitle=substr($vtitle,0,$videolisttitlelettercount)."...";
		}

							
		
		$vcomment=$vidyo->itemcomment;
		if (strlen($vcomment)>$videolistdescriptionlettercount) {
			$vcomment=substr($vcomment,0,$videolistdescriptionlettercount)."...";
		}
		$vcomment=$vcomment.$acclev;
		
		

		//----------------------------------------------------------------------------------


		//javascript mouse over details***************************
		$videotitle=str_replace("\'","",$vidyo->title);
		$videotitle=str_replace("\"","",$videotitle);
		$videotitle=str_replace("::","",$videotitle);
		$videodet=str_replace("\"","",$vidyo->itemcomment);
		$videodet=str_replace("\'","",$videodet);
		$videodet=str_replace("::","",$videodet);
		$videodet=strip_tags($videodet);
		
		
		$jsvideoinfo=_VIDEOINFO."::<table><tr><td width='30%' valign='top'>"._VIDEOTITLE."</td><td width='1%'  valign='top'>:</td><td width='89%'>".$videotitle."</td></tr><tr><td  valign='top'>"._DETAILS."</td><td  valign='top'>:</td><td>".$videodet."</td></tr><tr><td>"._VIDEOCAT."</td><td>:</td><td>".$catgname."</td></tr><tr><td>"._HIT."</td><td>:</td><td>".$vhit."</td></tr><tr><td>"._NUMBEROFVOTE."</td><td>:</td><td>".$votes."</td></tr><tr><td>"._RATING."</td><td>:</td><td>".$intrating."</td></tr><tr><td>"._DOWNLOADS."</td><td>:</td><td>".$downloads."</td></tr><tr><td>"._ADDEDBY."</td><td>:</td><td>".$vaddedbyname."</td></tr><tr><td>"._ADDEDDATE."</td><td>:</td><td>".$vaddeddate."</td></tr></table>";

		
		//*******************************************************

		//linked title in list row**************************************
		
		if ($useajaxbrowsing=="1"){		
		$vlinkedtitle="<div style=\"cursor:pointer;\" onclick=\"sndReqVideo(".$vid.")\">".$vtitle."</div>";
		} else {
		$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$vid;	
		$seflink=sefRelToAbs($link);
		$vlinkedtitle="<div><a href=\"".$seflink."\">".$vtitle."</a></div>";		
		}
		//**********************************************************
		
		$seyretplaylist = mosGetParam($_COOKIE,'seyretplaylist',null);
		if ($seyretplaylist=="") $seyretplaylist="{\"videocount\":\"0\",\"videoids\":\"a\",\"videothumbs\":\"_st_jh_thmb_\"}";
		$seyretpl=str_replace("\\\"","\"",$seyretplaylist);
		
		

			$jsonseyretpl = new Services_Seyret_JSON();
			$jsonseyretplvalues = $jsonseyretpl->decode($seyretpl);
			$videoids=$jsonseyretplvalues->videoids;
			$videoids_array=explode('a',$videoids);
		
		
		$thumb=$vpicturelink;
		if (in_array($vid, $videoids_array)){
			$addplaylistimage="<img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/blank.gif\"  alt=\"\"/>";			
		} else {
			$addplaylistimage="<img onclick=\"addmetoplaylist($vid, '$thumb')\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/blank.gif\" border=\"0\" alt=\"\"/>";		
		}
		
		

		
		//thumbnail ===================================================
		
		//<div style=\"position:absolute; top:0px; left:0px;\" id=\"addpladiv$vid\">".$addplaylistimage."</div>
		
		if ($useajaxbrowsing=="1"){	
			$vpicture="
						<img style=\"cursor:pointer;\" title=\"$jsvideoinfo\" class=\"videothumbss\" onclick=\"sndReqVideo(".$vid.")\"  src=\"".$vpicturelink."\" width=\"".$showthumbwidth."px\"  alt=\"\"/>
				
			";
		} else {
		$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$vid;	
		$seflink=sefRelToAbs($link);
			$vpicture="<a href=\"".$seflink."\"><img title=\"$jsvideoinfo\" class=\"videothumbss\" style=\"border:none;\" src=\"".$vpicturelink."\" width=\"".$showthumbwidth."px\" alt=\"\"/></a>";		
		}
		
		//============================================================

		$videojsinfoarea="<div style=\"position:relative;\"><div id=\"videoinfo".$vid."\" class=\"jsvideoinfo\">".$jsvideoinfo."</div></div>";
	


		//replace row template
		if ($usemulticolumnsvideolisting=="1") {
			 if ($thecolumn==1) { 
				 $template = str_replace( "{videolistrows}", "<tr>".$rowtemplate."{videolistrows}", $template );
				 if ($multicolumncount<>1){
				 $thecolumn=$thecolumn+1;
				 }
			 } else if ($thecolumn==$multicolumncount){
				 $template = str_replace( "{videolistrows}", $rowtemplate."</tr>"."{videolistrows}", $template );
				 $thecolumn=1;		 
			 } else {
				 $template = str_replace( "{videolistrows}", $rowtemplate."{videolistrows}", $template );
				 $thecolumn=$thecolumn+1;		 
			 }
		 
		} else {
		$template = str_replace( "{videolistrows}", "<tr>".$rowtemplate."</tr>"."{videolistrows}", $template );		
		}
	

	
	
	$template = str_replace( "{videoscreen}", $vpicture, $template );
	$template = str_replace( "{videojsinfoarea}", $videojsinfoarea, $template );
	$template = str_replace( "{videotitle}", $vlinkedtitle, $template );
	$template = str_replace( "{videoinfo}", $vcomment, $template );



	}//end of foreach



	//generate navigation buttons************************************
	if ($from==0){
	$leftimg="&nbsp;";
	}
	else {
	
	
	if ($useajaxbrowsing=="1"){	
		$leftimg="<div  style=\"cursor:pointer;\" onclick=previouslist()><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/left.png\" border=\"0\"></div>";
		} else {
		$leftimg="<a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=videocatlist&act=prev&navstart=".$from."&catid=".$cid."&Itemid=".$Itemid."\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/left.png\" border=\"0\"></a>";		
		}
	}
	
	$hmm=$from+$limitstep;
	if ($hmm>=$totalvideo){
	$rightimg="&nbsp;";	
	}
	else {
	if ($useajaxbrowsing=="1"){	
		$rightimg="<div style=\"cursor:pointer;\" onclick=nextlist()><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/right.png\" border=\"0\"></div>";
		} else {
		$rightimg="<a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=videocatlist&act=next&navstart=".$from."&catid=".$cid."&Itemid=".$Itemid."\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/right.png\" border=\"0\"></a>";		
		}
	}
	$navigation="<table width=\"100%\" class=\"listnavigation\"><tr><td width=\"1%\" align=\"left\">".$leftimg."</td><td class=\"listnavigationtitle\">".$categoryheading."</td><td width=\"1%\" align=\"right\">".$rightimg."</td></tr></table>";
	


	$searchfield="<div id=\"searchboxdiv\"><form action=\"index.php?option=com_seyret&Itemid=".$Itemid."\" method=\"post\" name=\"adminForm\"><input type=\"text\" id=\"searchkey\" name=\"searchkey\" size=\"10\" class=\"searchboxinmainpage\" value=\""._SEARCH."\" onblur=\"if(this.value=='') this.value='"._SEARCH."';\" onfocus=\"if(this.value=='"._SEARCH."') this.value='';\" type=\"text\"/><input type=\"hidden\" name=\"option\" value=\"com_seyret\" /><input type=\"hidden\" name=\"task\" value=\"searchvideos\" /></form></div>";

	
	$sortbykeys[] = mosHTML::makeOption( "addeddate", _SEYRETDATE );
	$sortbykeys[] = mosHTML::makeOption( "hit", _HIT );
	$sortbykeys[] = mosHTML::makeOption( "rating", _RATING );
	$sortbykeys[] = mosHTML::makeOption( "title", _VIDEOTITLE );
	
	
	$sortbykeylist = mosHTML::selectList($sortbykeys,"orderingkeyselect",'id="orderingkeyselect" class="sortboxes" onchange=sortbykey() size="1"',"value","text",$neworderingkey );
	
	
	 $ascendingkey="<div id=\"ascendingkeyimage\" class=\"sortbyicons\" onclick=sortbytype('ASC')><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/ascend.png\" border=\"0\" alt=\"\"/></div>";
	 $descendingkey="<div id=\"descendingkeyimage\"  class=\"sortbyicons\" onclick=sortbytype('DESC')><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/descend.png\" border=\"0\" alt=\"\"/></div>";
	
	
	$sortbykeys="<div id=\"sortbybuttons\"><div class=\"sortbytext\">"._SORTBY.$sortbykeylist."</div>".$ascendingkey.$descendingkey."</div>";
	

	//**************************************************
	
	//generate pagenumberand gopage button*********************************
	$thepagenumber=($from+$limitstep)/$limitstep;
	$totalpage=ceil($totalvideo/$limitstep);
	$gopageimg="<div style=\"cursor:pointer;\" onclick=gopage()><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/gopage.png\" border=\"0\" alt=\"\"/></div>";

	$pagenumber="<table width=\"100%\"><tr><td align=\"right\"><input style=\" display:none;\" type=\"text\" id=\"navstart\" name=\"navstart\" size=\"1\" value=\"".$from."\"/><input  style=\" display:none;\" type=\"text\" id=\"catid\" name=\"catid\" size=\"1\" value=\"".$catid."\"/><input  style=\" display:none;\" type=\"text\" id=\"cid\" name=\"cid\" size=\"1\" value=\"".$cid."\"/>"._JUMPTO.": <input class =\"seyretinputbox\" style=\"width:30px;\" type=\"text\" id=\"pagenumber\" name=\"pagenumber\" size=\"1\" value=\"".$thepagenumber."\"/> / ".$totalpage."</td><td width=\"1px\" align=\"right\">".$gopageimg."</td></tr></table>";
	$template = str_replace( "{pagenumber}", $pagenumber, $template );	
	$template = str_replace( "{navigation}", $navigation, $template );
	$template = str_replace( "{sortbykeys}", $sortbykeys, $template );
	$template = str_replace( "{searchbox}", $searchfield, $template );	
	
	$template = str_replace( "{videolistrows}", "", $template );	
	$template = str_replace( "{rssfeedforcategory}", $rssfeedforcategory, $template );	
	
	if ($sender=="ajax") {

	$iso = explode( '=', _ISO );
	$charset=$iso[1];
	header("Content-Type: application/x-javascript; charset=$charset");
		
	echo $template;
	}
	else {
	return $template;	
	}	
	
}//function end










//Function:jalemseyret_read_file->start ***************************
function jalemseyret_read_file( $file, $defaultfile='' ) {

	// open the HTML file and read it into $html
	if (file_exists( $file )) {
		$html_file = fopen( $file, "r" );
	}
	elseif( !empty( $defaultfile ) && file_exists( $defaultfile ) ) {
		$html_file = fopen( $defaultfile, "r" );
	}
	else {
		return;
	}
	$html = "";

	while (!feof($html_file)) {
		$buffer = fgets($html_file, 1024);
		$html .= $buffer;
	}
	fclose ($html_file);

	return $html;
}
//Function:jalemseyret_read_file->end ***************************
	




//Function:ShowSeyretCategoryLinkedPath->start ************************
function ShowSeyretCategoryLinkedPath($catid) {
	global $database,$mosConfig_lang, $mosConfig_absolute_path, $Itemid, $mosConfig_live_site;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

$fordatacatname="";
$catids="";


	if (strlen($catid)==0){
				if ($useajaxbrowsing=="1"){
				$linkedpath="<span style=\"cursor:pointer;\" onclick=\"sndReqDirectory(0)\">"._TOPLEVEL."</span>";
				} else {
				$link="index.php?option=com_seyret&Itemid=".$Itemid;
				$seflink=sefRelToAbs($link);
				$linkedpath="<a href=\"".$seflink."\">"._TOPLEVEL."</a>";
				}
				return "<span class=\"seyretlinkedpath\">".$linkedpath."</span>";
	}
	else
	{
				if ($useajaxbrowsing=="1"){
				$linkedpaths="<span style=\"cursor:pointer;\" onclick=\"sndReqDirectory(0)\">"._TOPLEVEL."</span> - ";
				} else {
				$link="index.php?option=com_seyret&Itemid=".$Itemid;
				$seflink=sefRelToAbs($link);
				$linkedpaths="<a href=\"".$seflink."\">"._TOPLEVEL."</a> - ";
				}
				
		$catidlength=strlen($catid);
		$newcatid=substr($catid,1,$catidlength-3);
		$catid_array=explode('**',$newcatid);

		while ($catidelement=each($catid_array)){

		$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
		$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
		
			$database->setQuery("SELECT * FROM #__seyret_categories WHERE catid='$fordatacatnamelast'");
			$seyretcat = $database->loadObjectList();
			foreach ($seyretcat as $seyretcat) {
			$cat_cat = $seyretcat->categoryname;
			
			if ($useajaxbrowsing=="1"){
				$linkedcat="<span style=\"cursor:pointer;\" onclick=\"sndReqDirectory(".$seyretcat->id.")\">".$cat_cat."</span>";
				} else {
				$linkedcat="<a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&Itemid=".$Itemid."&catid=".$seyretcat->id."\">".$cat_cat."</a>";
				}			
			
			
			
						}
		$linkedpaths=$linkedpaths.$linkedcat.' - ';

		}

	$linkedpath=substr($linkedpaths,0, strlen($catids)-3);
	return "<span class=\"seyretlinkedpath\">".$linkedpath."</span>";
	}


}
//Function:ShowSeyretCategoryLinkedPath->end ************************


function applyvideolink(){
global $mosConfig_absolute_path, $database;
	
$vidlink = mosGetParam($_REQUEST,'videourl',null);	
$vidlink=jalemurldecode($vidlink);
$existingcode="";
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '',_TOPLEVEL );
	foreach ($videocat as $videocat) 
	{
		$catid = $videocat->catid;
		$catname = $videocat->categoryname;
		
		$catids="";
		$fordatacatname='';
		$fordatacatnamelast='';
		
		$catidlength=strlen($catid);
		$newcatid=substr($catid,1,$catidlength-3);
		$catid_array=explode('**',$newcatid);


		while ($catidelement=each($catid_array)){
			$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
			$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
			
				$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
				$cat = $database->loadObjectList();
				foreach ($cat as $cat) {
				$cat_cat = $cat->categoryname;
				}
			$catids=$catids.$cat_cat.' - ';
		}
		$catidlast=substr($catids,0, strlen($catids)-3);
		$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}
	$categorylist = mosHTML::selectList($videocats,"catid",'class="inputbox" size="1"',"value","text");
	
	$aserverfound=0;
	$current_dir=$mosConfig_absolute_path.'/components/com_seyret/plugins/videoserver/';
	$dir=opendir($current_dir);
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){ 
		$pluginname=str_replace(".php","",$file);
		$temporaryvidlink="Joomlaalem".$vidlink;
		$pos = strpos($temporaryvidlink, $pluginname);
		$pluginaddress=$current_dir.$file;
			if ($pos<>"0"){
			require($pluginaddress);
			$nodotservertype=str_replace(".","",$pluginname);
			$funcname=$nodotservertype."getvideodetails";
			$videodetails=$funcname($vidlink,  $existingcode, $categorylist, "new");
			
			// $iso = explode( '=', _ISO );
			// $charset=$iso[1];
			// header("Content-Type: application/x-javascript; charset=$charset");
			
			$videoservercode=$videodetails;


			
	
			//duplicate control
			$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE videoservertype='$pluginname' AND videoservercode='$videoservercode'");
			$totaldupl = $database->loadResult(); 
			
			if ($totaldupl>0){
				mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid&task=addlinkfront", "<div class=\"seyreterrormessage\">"._THISVIDEOISADDEDBEFORE."</div>");
			} else {

				//echo utf8_encode($videodetails);
				$aserverfound=1;
			
			}
			

			}
	
		}
	}
	
	
	if ($aserverfound<>1){
	echo _NOSERVERFOUNDREPORTIT;
	}
	closedir($dir);	

}


function savevideoitem(){
	global $my, $database, $Itemid, $mosConfig_absolute_path;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
	require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');
	
	
	clearhtmlcache();

	$id=mosGetParam($_POST,'id', null);
	$videoservertype=mosGetParam($_POST,'videoservertype', null);
	$videoservercode=mosGetParam($_POST,'videoservercode', null);
	$published=mosGetParam($_POST,'published', null);
	
	
	if ($canpublishvideo=="no") {
	
		$_POST['published']="0";
	
	}
	

	
	$title=mosGetParam($_POST,'title', null);
	$_POST['title']=str_replace("\"","",$title);
	$_POST['title']=str_replace("\\","",$_POST['title']);

	$videotags=mosGetParam($_POST,'videotags', null);
	$_POST['videotags']=str_replace(","," ",$videotags);
	$_POST['videotags']=str_replace("."," ",$_POST['videotags']);
	


	
	if ($usejoomlaeditor=="1"){
		$itemcomment = mosGetParam($_POST,'itemcomment', null, _MOS_ALLOWHTML);
		$itemcomment=str_replace("<script","",$itemcomment);
		$itemcomment=str_replace("</script>","",$itemcomment);	
		$itemcomment=str_replace("<style","",$itemcomment);
		$itemcomment=str_replace("</style>","",$itemcomment);
		
	} else {
		$itemcomment = mosGetParam($_POST,'itemcomment', null);
	}
	
	$_POST['itemcomment']=$itemcomment ;


	$videourl = mosGetParam($_POST,'videourl', null);
	$_POST['videourl']=$videourl;

	$picturelink = mosGetParam($_POST,'picturelink', null);
	$_POST['picturelink']=$picturelink;

	$videoservercode = mosGetParam($_POST,'videoservercode', null);
	$_POST['videoservercode']=$videoservercode;
	
	$videoservertype = mosGetParam($_POST,'videoservertype', null);
	$_POST['videoservertype']=$videoservertype;
	
	$catid = mosGetParam($_POST,'catid', null);
	$_POST['catid']=$catid;	

	$isreplyto = mosGetParam($_POST,'isreplyto', null);
	$_POST['isreplyto']=$isreplyto;	
	
	

	
	$row = new mosseyretitem($database);
	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}

	$auppro=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proalphup.php";	
	if ($integrateaup=="1" AND file_exists($auppro) ) {
		require_once($auppro);
		aupsubmitvideo();	
	}	
	
	
	generatereplyxml($isreplyto);
	setcookie("seyretrply", "", "0", "/");
	
$tasksender = mosGetParam($_REQUEST,'tasksender',null);
		
	if ($tasksender=="editvideos"){
			mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid");
	} else if ($tasksender=="pendingvideoslist"){
			mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid&task=pendingvideoslist");
	} else if ($tasksender=="uploadvideo"){
			mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid&task=uploadvideo",_UPLOADEDSUCCESSFULLY);
	} else if ($tasksender=="addlinkfront"){
			mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid&task=addlinkfront",_VIDEOADDEDSUCCESFULLY);
	}


}


function saveproupload(){
	global $my, $database, $Itemid, $mosConfig_absolute_path;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
	require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');
	
	
	clearhtmlcache();

	$published=mosGetParam($_POST,'published', null);
	
	
	if ($canpublishvideo=="no") {
	
		$_POST['published']="0";
	
	}
	
	
	
	$title=mosGetParam($_POST,'title', null);
	$_POST['title']=str_replace("\"","",$title);
	$_POST['title']=str_replace("\\","",$_POST['title']);

	$videotags=mosGetParam($_POST,'videotags', null);
	$_POST['videotags']=str_replace(","," ",$videotags);
	$_POST['videotags']=str_replace("."," ",$_POST['videotags']);
	
	
	if ($usejoomlaeditor=="1"){
		$itemcomment = mosGetParam($_POST,'itemcomment', null, _MOS_ALLOWHTML);
		$itemcomment=str_replace("<script","",$itemcomment);
		$itemcomment=str_replace("</script>","",$itemcomment);	
		$itemcomment=str_replace("<style","",$itemcomment);
		$itemcomment=str_replace("</style>","",$itemcomment);
		
	} else {
		$itemcomment = mosGetParam($_POST,'itemcomment', null);
	}
	
	$_POST['itemcomment']=$itemcomment ;


	$videourl = mosGetParam($_POST,'videourl', null);
	$_POST['videourl']=$videourl;

	$picturelink = mosGetParam($_POST,'picturelink', null);
	$_POST['picturelink']=$picturelink;

	$videoservercode = mosGetParam($_POST,'videoservercode', null);
	$_POST['videoservercode']=$videoservercode;
	
	$videoservertype = mosGetParam($_POST,'videoservertype', null);
	$_POST['videoservertype']=$videoservertype;
	
	$catid = mosGetParam($_POST,'catid', null);
	$_POST['catid']=$catid;	
	
	
	$isreplyto = mosGetParam($_POST,'isreplyto', null);
	$_POST['isreplyto']=$isreplyto;		
	
	$row = new mosseyretitem($database);
	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}

	
	$processfile=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$my->id."/process.php";		
	if (file_exists($processfile)) {
		require($processfile);
		$posflv = strpos($uploadedvideolocation, ".flv");
		unlink($processfile);
	}

	
	$auppro=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proalphup.php";	
	if ($integrateaup=="1" AND file_exists($auppro) ) {
		require_once($auppro);
		aupuploadvideo();	
	}	
	
	
	generatereplyxml($isreplyto);
	setcookie("seyretrply", "", "0", "/");
		
	mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid");

}


function showvideo($id) {
	global $database, $my, $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_lang, $mosConfig_offset, $Itemid;

require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	
				
				
$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
$vidyo = $database->loadObjectList();
	foreach ($vidyo as $vidyo) {
	$vhit=$vidyo->hit;
	$vrclick=$vidyo->voteclick;
	$vcode=$vidyo->videoservercode;
	$vtype=$vidyo->videoservertype;
	$vtitle=$vidyo->title;
	$vcomment=$vidyo->itemcomment;
	$accesslevel=$vidyo->accesslevel;
	$frombackupid=$vidyo->backupid;
	$addedby=$vidyo->addedby;
	$addeddate=$vidyo->addeddate;
	$vratingtotal=$vidyo->votetotal;
	$isdownloadable=$vidyo->isdownloadable;
	$vthumb=$vidyo->picturelink;
	$catid=$vidyo->catid;	
	$videotags=$vidyo->videotags;
	$videourl=$vidyo->videourl;	
	$isreplyto=$vidyo->isreplyto;
	
	
	$totalvotes=_NUMBEROFVOTE." :".$vrclick;
	
	
	$videorepliestothis=renderrepliestovideo($id, "ajax");
	
	if ($cachevideoimages=="1") {
		//add by Ngo Van Luyen 09-10-2008
		require_once($mosConfig_absolute_path."/components/com_seyret/includes/downloadimg.php");

			
		$klpicturelink = $vthumb;
		$kltest = substr($vthumb, 0, 7);
		if ($kltest == "http://"){
			$localf = $mosConfig_absolute_path."/seyretfiles/images/";

			$klpicturelink = kuluyen_getAndSave($vthumb, $localf);
			
			$vthumb = $klpicturelink;
			
			
			$newcatid = str_replace( "*", "", $newcat );
			
			$database->setQuery("UPDATE #__seyret_items SET picturelink='$vthumb'  WHERE id='$id' ");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}		
			
			
		} 
		/* 	else { // if local server then resize
				if ($kltest == "seyretfiles/images/"){
					// $localf = $mosConfig_absolute_path."/".$vthumb;
					// kuluyen_resize($localf);
					
					// resizing will result with low quality images with player. So if image is large, it will be better for quality.
					
				}
		} */	
	
	}	
	
	$myid=$my->id;
	$auppro=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proalphup.php";	
	if ($integrateaup=="1" AND file_exists($auppro) AND $myid!=$addedby ) {
		require_once($auppro);
		aupviewvideo($addedby);	
	}
	
	
	if ($vrclick<>0){
			$intrating=($vratingtotal/$vrclick)*100;
			$nrating=ceil($intrating);
			$intrating=$nrating/100;
		}
		else {
			$intrating=0;
		}
	}
	
	$replytolink="";
	
	if ($isreplyto>0){
		$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$isreplyto'");
		$vids = $database->loadObjectList();
		foreach ($vids as $vids) {
			$replytotitle=$vids->title;
			
		}

		$rlink=sefRelToAbs("index.php?option=com_seyret&task=videodirectlink&id=$isreplyto&Itemid=$Itemid");
					
		$replytolink="<div id=\"isareplyto\">"._THISISAREPLYTOPRE."<a href=\"$rlink\"> ".$replytotitle." </a>"._THISISAREPLYTOPOST."</div>";
	
	}
	
	
	
	
	if ($showoriginallink=="1" AND $vtype!="localfile" AND $videourl!=""){
		$addurl="<div><div id=\"originalvideolink\"><a href=\"".$videourl."\" target=\"_blank\">"._ORIGINALVIDEOISHERE."</a></div></div>";
	} else {
		$addurl="";
	}

	$vcomment=$addurl.$vcomment;

	$addeddate = _ADDEDDATE." :".mosFormatDate( $addeddate, "%d %B %Y" );
	
	$totalhit=$vhit+1;
	$totalhit=_HIT." :".$totalhit;
	$rating=_RATING." :".$intrating;
	
	//increase hit------------
	$newhit=$vhit+1;
	
	$lcdate = date( 'Y-m-d H:i:s', time() + ( $mosConfig_offset * 60 * 60 ) );

	$database->setQuery("UPDATE #__seyret_items SET hit='$newhit', lastclicktime='$lcdate'  WHERE id='$id' ");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	}
	//-----------------------------
$useravatar=getuseravatar($addedby);

	
list ($embed, $voperations, $votearea, $embedcode, $videodirectlink, $comments, $imagead, $addedby, $videotagslinked) = generatecodes($vtype, $vcode, $id, $accesslevel, $frombackupid, $addedby, $isdownloadable, $vthumb, $catid, $videotags, $videourl);

	$getbookmarks=generatebookmarks($id,$vtitle);
	
	$vcomment="<span id=\"videodetailsreadmore\">".$vcomment."</span>";
	$vcomment=generatereadmorelink($vcomment, "", "videodetailsreadmore2");
	
	$embed="<div id=\"hiddenvideoembed\">".$embed."</div>";	
	$videotitle="<div id=\"hiddenvideotitle\">".$vtitle."</div>";
	$videodetails="<div id=\"hiddenvideodetails\">".$vcomment."</div>";
	$videooperations="<div id=\"hiddenvideooperations\">".$voperations."</div>";
	$votearea="<div id=\"hiddenvotearea\">".$votearea."</div>";
	$embedcode="<div id=\"hiddenembedcode\">".$embedcode."</div>";
	$videodirectlink="<div id=\"hiddenvideodirectlink\">".$videodirectlink."</div>";
	$thevideoid="<div id=\"hiddenthevideoid\">".$id."</div>";
	$comments="<div id=\"hiddencomments\">".$comments."</div>";
	$imagead="<div id=\"hiddenimagead\">".$imagead."</div><div id=\"hiddenthevideoid\">".$id."</div><div id=\"hiddenimageadduration\">".$imageadduration."</div>";
	$addedby="<div id=\"hiddenaddedby\">".$addedby."</div>";
	$totalhit="<div id=\"hiddentotalhit\">".$totalhit."</div>";
	$totalvotes="<div id=\"hiddentotalvotes\">".$totalvotes."</div>";
	$rating="<div id=\"hiddenvidrating\">".$rating."</div>";
	$useravatar="<div id=\"hiddenuseravatar\">".$useravatar."</div>";
	$addeddate="<div id=\"hiddenaddeddate\">".$addeddate."</div>";	
	$videotags="<div id=\"hiddenvideotags\">".$videotagslinked."</div>";
	$bookmarks="<div id=\"hiddenbookmarks\">".$getbookmarks."</div>";
	$replyto="<div id=\"hiddenisareplytocontainer\">".$replytolink."</div>";
	$videoreplies="<div id=\"hiddenvideoreplies\">".$videorepliestothis."</div>";
	
	
	
	
$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type: application/x-javascript; charset=$charset");

echo $videotitle.$videodetails.$videooperations.$embed.$votearea.$thevideoid.$embedcode.$videodirectlink.$comments.$imagead.$addedby.$totalhit.$totalvotes.$rating.$useravatar.$addeddate.$videotags.$bookmarks.$replyto.$videoreplies;	
}



function flvdownloadreq(){

	global $mosConfig_absolute_path, $my, $mosConfig_live_site;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');

	$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";		
	
	if (file_exists($pro_file)) {
		$pro="1";
	} else {
		$pro="0";
	}
	
	if ($candownloadvideo=="yes"){
		$servertype = mosGetParam($_REQUEST,'servertype',null);		
		$vcode = mosGetParam($_REQUEST,'vcode',null);
		$vidid = mosGetParam($_REQUEST,'vidid',null);
		
		$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$vidid'");
		$vidyo = $database->loadObjectList();
			foreach ($vidyo as $vidyo) {
			$vdownload=$vidyo->downloadcount;
			}

		$newvdownload=$vdownload+1;

		$database->setQuery("UPDATE #__seyret_items SET downloadcount='$newvdownload' WHERE id='$vidid' ");
			if (!$database->query()){
				echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
				exit();
			}

$cachefile=$mosConfig_live_site."+".$servertype."+".$vcode;	
$md5cachefile=md5($cachefile).".xml";
$fullmd5cachefile=$mosConfig_absolute_path."/seyretfiles/cache/dl/".$servertype."/".$md5cachefile;

$dlink="";

if (file_exists($fullmd5cachefile)){
	// read from cache  ----correct this
	$cache_file = fopen( $fullmd5cachefile, "r" );

	while (!feof($cache_file)) {
		$buffer = fgets($cache_file, 1024);
		$dlink .= $buffer;
	}
	fclose ($cache_file);
	echo $dlink;
} else {
	//generate from joomlaholic servers
		$makedir=$mosConfig_absolute_path."/seyretfiles/cache";
		if (!is_dir($makedir))
				{
				$oldumask=umask(0);
				mkdir ($makedir,0755);
				umask($oldumask);
				}

		$makedir=$mosConfig_absolute_path."/seyretfiles/cache/dl";
		if (!is_dir($makedir))
				{
				$oldumask=umask(0);
				mkdir ($makedir,0755);
				umask($oldumask);
				}

				
		$makedir=$mosConfig_absolute_path."/seyretfiles/cache/dl/".$servertype;
		if (!is_dir($makedir))
				{
				$oldumask=umask(0);
				mkdir ($makedir,0755);
				umask($oldumask);
				}

				
		$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$servertype.".php";
		$nodotservertype=str_replace(".","",$servertype);
	    require_once($includepluginfile);
		$funcname=$nodotservertype."generatevideodownloadlink";
		$vdownload=$funcname($vcode, $pro, "download");
		echo $vdownload;
	
		$fh=fopen($fullmd5cachefile,'w');
		fwrite($fh,$vdownload);
		fclose($fh);
}		
		
	
	
	
	} else {
		echo "<div style=\"width:100%; text-align:center; color:#D00010;\">"._THISAREAISONLYFORREGISTEREDUSERS."</div>";
	}
}

function embedpopup(){
	global $mosConfig_absolute_path, $database;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

	$catid="";
	$downloadcachingtimeout="";
	$servertype = mosGetParam($_REQUEST,'servertype',null);		
	$servertype=jalemurldecode($servertype);
	$vcode = mosGetParam($_REQUEST,'vcode',null);	
	$vcode=jalemurldecode($vcode);
	$vthumb = mosGetParam($_REQUEST,'vthumb',null);
	$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$servertype.".php";
    require_once($includepluginfile);	
	
	
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
	
	
	
	$servertype=str_replace(".","",$servertype);
	$functionname=$servertype."embed"; 
	$embed=$functionname($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid);
	echo "<body bgcolor=\"black\" align=\"center\">".$embed."<div style=\"display:none;\" id=\"hiddenimagead\"></div></body>";
	
}

function getvotestarsdisabled($id) {
global $database;

$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
$vidyo = $database->loadObjectList();
foreach ($vidyo as $vidyo) {
$vrating=$vidyo->votetotal;
$vrclick=$vidyo->voteclick;
}

if ($vrclick=="0") $vrclick="1";
$intrating=($vidyo->votetotal/$vrclick)*20;
$rating=ceil($intrating);


return "<div class=\"videoratingmain\">
	<div class=\"ratingscale\" style=\"width:".$rating."%;\"></div>
	<div style=\"left:0px; width:100%;\" class=\"starsofvote\"></div>
	</div>";

}

function getvotestarsenabled($id) {
global $database;

$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
$vidyo = $database->loadObjectList();
foreach ($vidyo as $vidyo) {
$vrating=$vidyo->votetotal;
$vrclick=$vidyo->voteclick;
}

if ($vrclick==0) $vrclick=1;
$intrating=($vidyo->votetotal/$vrclick)*20;
$rating=ceil($intrating);


return "<div class=\"videoratingmain\">
	<div id=\"ratingscale\" class=\"ratingscale\" style=\"width:".$rating."%;\"></div>
	<div id=\"yellowratingscale\" class=\"ratingscale votingscale\"></div>
	<div style=\"left:0px; width:12px; cursor:pointer;\" class=\"starsofvote\" onmouseout=\"rnormal()\" onmouseover=\"ratinganimate('20')\" onclick=\"voteclick(1)\"></div>
	<div style=\"left:12px; width:12px; cursor:pointer;\" class=\"starsofvote\" onmouseout=\"rnormal()\" onmouseover=\"ratinganimate('40')\" onclick=\"voteclick(2)\"></div>
	<div style=\"left:24px; width:12px; cursor:pointer;\" class=\"starsofvote\"  onmouseout=\"rnormal()\" onmouseover=\"ratinganimate('60')\" onclick=\"voteclick(3)\"></div>
	<div style=\"left:36px; width:12px; cursor:pointer;\" class=\"starsofvote\" onmouseout=\"rnormal()\" onmouseover=\"ratinganimate('80')\" onclick=\"voteclick(4)\"></div>
	<div style=\"left:48px; width:12px; cursor:pointer;\" class=\"starsofvote\" onmouseout=\"rnormal()\" onmouseover=\"ratinganimate('100')\" onclick=\"voteclick(5)\"></div>
	<div id=\"hiddenrating\" style=\"visibility:hidden;\">".$rating."%</div>
	</div>";

}	


function voteclick(){
global $database;
	$point = mosGetParam($_REQUEST,'point',null);
	$videoid = mosGetParam($_REQUEST,'videoid',null);
	$votedvideos = mosGetParam($_COOKIE,'votedvideos',null);
	$newvotedvideos=$votedvideos."a".$videoid;
	setcookie("votedvideos", $newvotedvideos, time()+60*60*24*30);
	

$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$videoid'");
$vidyo = $database->loadObjectList();
foreach ($vidyo as $vidyo) {
$vrating=$vidyo->votetotal;
$vratclick=$vidyo->voteclick;
}

$newratingtotal=$vrating+$point;
$newratingclick=$vratclick+1;

if ($point>5 OR $point<0) exit;


$database->setQuery("UPDATE #__seyret_items SET votetotal='$newratingtotal', voteclick='$newratingclick' WHERE id='$videoid'");
	if (!$database->query()){
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
	}	

$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type: application/x-javascript; charset=$charset");
	
$newvotestars="<table><tr><td>"._RATING.":</td><td>".getvotestarsdisabled($videoid)."</td></tr></table>";
$message=_THANKSFORVOTE;
	echo "<div id=\"hiddennewstars\">".$newvotestars."</div>
		  <div id=\"hiddenmessage\">".$message."</div>";
	

}

function videodirectlink($id){
HTML_seyret::htmlvideodirectlink($id);
}


function editvideos($id){
	global $my, $mosConfig_absolute_path, $database;

	require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');

	$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
	$vids = $database->loadObjectList();
	foreach ($vids as $vids) {
		$addedby = $vids->addedby;
	}

	$editmyvideo="";
	if ($caneditownvideos=="yes") {
			if ($addedby==$my->id) $editmyvideo="yes";
			


	}

	if ($caneditvideo=="yes" OR $editmyvideo=="yes"){
		HTML_seyret::htmleditvideos($id);
	} else {
	echo _YOUDONTHAVEADMINISTRATORRIGHTS;
	}

}



function deletevideo($id){

	global $my, $mosConfig_absolute_path, $database;

require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');

$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
$vids = $database->loadObjectList();
foreach ($vids as $vids) {
	$addedby = $vids->addedby;
}

$deletemyvideo="";
if ($candeleteownvideos=="yes") {
		if ($addedby==$my->id) $deletemyvideo="yes";

}

if ($candeletevideo=="yes" OR $deletemyvideo=="yes"){


		$myid=$my->id;
		$auppro=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proalphup.php";	
		if ($integrateaup=="1" AND file_exists($auppro) )  {
			require_once($auppro);
			aupdeletevideo($addedby);	
		}


		$database->setQuery( "SELECT * FROM #__seyret_items WHERE id='$id'");
		$videorep = $database->loadObjectList();
		foreach ($videorep as $videorep) 
		{
			$isreplyto=$videorep->isreplyto;
		}
		
		
	

		$query = "DELETE FROM #__seyret_items WHERE id='$id'";
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
		
		
		generatereplyxml($isreplyto);
		
		mosRedirect( "index.php?option=com_seyret");

} else {
echo _YOUDONTHAVEADMINISTRATORRIGHTS;
}

}
	
	

function proprocessvideoupload(){
global $mosConfig_absolute_path, $mosConfig_live_site, $my, $database, $mosConfig_offset;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');


	

	
	$sess=mosGetParam($_REQUEST,'sess',null);	

	
	
	$database->setQuery( "SELECT userid FROM #__session WHERE session_id='$sess'");

	$getuser = $database->loadObjectList();
	foreach ($getuser as $getuser) 
	{
		$userid=$getuser->userid;
	}
	

	
	if ($userid=="") {
		$userid="nouser";
	}
	
	
		
	


	
		// if (!function_exists('mime_content_type')){
		   // function mime_content_type ( $f )
		   // {
		       // return system ( trim( 'file -bi ' . escapeshellarg ( $f ) ) ) ;
		   // }
		// } 


	$vidtmpname=$_FILES['Filedata']['name'];
	
	
	$analyzepath = pathinfo($vidtmpname);
	$exttype=".".$analyzepath['extension'];
		
	$errorcode=$_FILES['Filedata']['error'];	
	
	$date = date( 'Y-m-d H:i:s', time() + ( $mosConfig_offset * 60 * 60 ) );
	$random=generaterandom(13);

	if ($vidtmpname=="") $errorcode=5;
	
	if ($errorcode>0)
	{
	switch ($errorcode)
		{
		case 1: $error=_SIZEEXCEEDSERVERCONF;
		break;
		
		case 2: $error=_SIZEEXCEEDCOMPONENTCONF;
		break;
		
		case 3: $error=_PARTIALUPLOADERROR;
		break;
		
		case 4: $error=_NOTUPLOADEDERROR;
		break;
		
		case 5: $error=_THEFILEISBIGGERPOSTMAXSIZE;
		break;
		}
		
	} else { // No upload error, now check file type 
	
		$exttype=strtolower($exttype); 
		if ($exttype<>".swf" AND $exttype<>".flv" AND $exttype<>".mpg" AND $exttype<>".mpeg" AND $exttype<>".3gp" AND $exttype<>".divx" AND $exttype<>".dat" AND $exttype<>".wmv" AND $exttype<>".mov" AND $exttype<>".avi" AND $exttype<>"divx" AND $exttype<>".mp3" AND $exttype<>".png"  AND $exttype<>".asf") {
			$error=_UNSUPPORTEDFILETYPE;
		} else {
			$error=$errorcode;
		}
		
		
		
	
	}	
	




	$dosya="<?php
/*
userid=".$userid."
filename=".$_FILES['Filedata']['name']."
date=".$date."
sess=".$sess."
random=".$random."
extension=".$exttype."
videolocation=".$mosConfig_live_site."/seyretfiles/uploads/videos/user_".$userid."/user_".$userid."_v".$random.$exttype."
error=".$error."
*/
?>

";
	
/* 	$log = $mosConfig_absolute_path.'/uploadlog.php';	

if ( $fp = fopen( $log, "a" ) ) {
	fwrite( $fp, $dosya );
	fclose ( $fp );
} */

	//if ($error<>"0") return;
	//if ($userid=="nouser") return;
	

	//mime control
	
	// if (mime_content_type($_FILES['useruploadedvideo']['tmp_name'])=='text/plain'){
	// echo "Attack?";
	// exit;
	// }

	
	$vidupdir=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$userid;
	if (!is_dir($vidupdir))
		{
		$oldumask=umask(0);
		mkdir ($vidupdir,0755);
		umask($oldumask);
		}

	$viduploadedname="user_".$userid."_v".$random.$exttype;
	$uplfile=$vidupdir."/".$viduploadedname;
	
	if (is_uploaded_file($_FILES['Filedata']['tmp_name']))
		{
		 if (!move_uploaded_file($_FILES['Filedata']['tmp_name'], $uplfile))
		 {

		 $error2="Couldn't move file";
		 }
		 
		
		} else
		{
			$error2="File attack?";
		}

$finame=$_FILES['Filedata']['name'];
$proupl_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proupld.php";
if (file_exists($proupl_file)) {
	include($proupl_file);
	} else 	{
	exit;	
	echo "Missing Pro File";
	}
proprocessuploadcomplete($userid,$random, $exttype,$finame,$error, $error2, $date, $sess);

}	
	
function processvideoupload(){
global $mosConfig_absolute_path, $mosConfig_live_site, $my, $database, $mosConfig_offset;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');


if ($canseevideoservercodes=="yes") {
$isadminhideornot="visibility:visible;";
} else {
$isadminhideornot="visibility:hidden;";
}
	
	if ($canpublishvideo=="yes"){
		$yesno[] = mosHTML::makeOption( 0, _NO );
		$yesno[] = mosHTML::makeOption( 1, _YES );
		$published=mosHTML::selectList( $yesno, 'published', 'class="inputbox" size="1"', 'value', 'text', '1' );	
	} else {
		$published=_PUBLISHAFTERMODERATED;
	}
	

	$novideothumbnail = mosGetParam($_REQUEST,'novideothumbnail',null);		
	
	if ($_FILES['useruploadedvideo']['error']>0)
	{
	echo "Problem:"; 
	switch ($_FILES['useruploadedvideo']['error'])
		{
		case 1: echo 'Your video size exceeds server configuration maximum size. Contact administrator.';
		break;
		
		case 2: echo 'Your video size exceeds component configuration maximum size.';
		break;
		
		case 3: echo 'The video was only partially uploaded.Try again please.';
		break;
		
		case 4: echo 'Video file was not uploaded.';
		break;
		}
		return;
	}
	
		// if (!function_exists('mime_content_type')){
		   // function mime_content_type ( $f )
		   // {
		       // return system ( trim( 'file -bi ' . escapeshellarg ( $f ) ) ) ;
		   // }
		// } 


	$vidtmpname=$_FILES['useruploadedvideo']['name'];
	$exttype=substr($vidtmpname, -4);
	$exttype=strtolower($exttype); 
	if ($exttype<>".swf" AND $exttype<>".flv" AND $exttype<>".mpg" AND $exttype<>"mpeg" AND $exttype<>".dat" AND $exttype<>".wmv" AND $exttype<>".avi" AND $exttype<>".mp3") {
	echo "Unsupported file type uploaded! Exited for security reasons!<br/>Type:".$exttype;
	return;
	} 
	

	//mime control
	
	// if (mime_content_type($_FILES['useruploadedvideo']['tmp_name'])=='text/plain'){
	// echo "Attack?";
	// exit;
	// }

	if ($exttype=="mpeg") $exttype=".mpeg";
	$vidupdir=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$my->id;
	if (!is_dir($vidupdir))
		{
		$oldumask=umask(0);
		mkdir ($vidupdir,0755);
		umask($oldumask);
		}
	$random=generaterandom(13);
	$viduploadedname="user_".$my->id."_v".$random.$exttype;
	$uplfile=$vidupdir."/".$viduploadedname;
	
	if (is_uploaded_file($_FILES['useruploadedvideo']['tmp_name']))
		{
		 if (!move_uploaded_file($_FILES['useruploadedvideo']['tmp_name'], $uplfile))
		 {
		 echo "couldn't move";
		 return;
		 }
		 
		
		} else
		{
			echo "video file attack?".$_FILES['useruploadedvideo']['tmp_name'];
			return;
		}
		

	
	if ($novideothumbnail=="0") {
	
		if ($_FILES['useruploadedthumb']['error']>0)
		{
		echo "Problem:"; 
		switch ($_FILES['useruploadedthumb']['error'])
			{
			case 1: echo 'Your thumbnail size exceeds server configuration maximum size. Contact administrator.';
			break;
			
			case 2: echo 'Your thumbnail  size exceeds component configuration maximum size.';
			break;
			
			case 3: echo 'The thumbnail was only partially uploaded.Try again please.';
			break;
			
			case 4: echo 'Thumbnail file was not uploaded.';
			break;
			}
			return;
		}
		
		$imagename=$_FILES['useruploadedthumb']['tmp_name'];
		@list($width, $height, $reqtype, $attr) = getimagesize($imagename);
		
		switch ($reqtype) {
			case 1:
			$ext = ".gif";
			break;
			
			case 2:
			$ext = ".jpg";
			break;
			
			case 3:
			$ext = ".png";
			break;
			
			default:
			echo "Sorry, but the file you uploaded was not a GIF, JPG, or PNG file. Possible attack?<br/>";
			return;
			}

		
		//proceed image
			$thumbupdir=$mosConfig_absolute_path."/seyretfiles/uploads/thumbnails/user_".$my->id;
			if (!is_dir($thumbupdir))
				{
				$oldumask=umask(0);
				mkdir ($thumbupdir,0755);
				umask($oldumask);
				}


			$thmbuploadedname="user_".$my->id."_t".$random.$ext;
			$uplfile=$thumbupdir."/".$thmbuploadedname;
			
			if (is_uploaded_file($_FILES['useruploadedthumb']['tmp_name']))
				{
						 if (!move_uploaded_file($_FILES['useruploadedthumb']['tmp_name'], $uplfile))
						 {
						 echo "couldn't move";
						 exit;
						 }
						 //convert to jpg
						$newfile="user_".$my->id."_t".$random.".jpg";
						$newfilename = $thumbupdir."/".$newfile;
						if ($reqtype == 1) {
							$image_old = imagecreatefromgif($uplfile);
						} elseif ($reqtype == 3) {
							$image_old = imagecreatefrompng($uplfile);
						//”convert” the image to jpg
						$image_jpg = imagecreatetruecolor($width, $height);

						imagecopyresampled($image_jpg, $image_old, 0, 0, 0, 0, $width, $height, $width, $height);
						imagejpeg($image_jpg, $newfilename);
						imagedestroy($image_old);
						imagedestroy($image_jpg);
						unlink($uplfile);
						}
						
						//resize
						$thumb_width = $configthumbwidth;
						$thumb_height = $height * ($configthumbwidth/$width);
						$largeimage = imagecreatefromjpeg($newfilename);
						$newthumbname=$newfilename;
						$thumb = imagecreatetruecolor($thumb_width, $thumb_height);
						imagecopyresampled($thumb, $largeimage, 0, 0, 0, 0,$thumb_width, $thumb_height, $width, $height);
						imagejpeg($thumb, $newthumbname);
						imagedestroy($largeimage);
						imagedestroy($thumb);
				 
				
				} else
				{
					echo "file attack thumb?";
					return;
				}
		
	}
	
	if ($thmbuploadedname<>""){
	$picturelink=$mosConfig_live_site."/seyretfiles/uploads/thumbnails/user_".$my->id."/".$newfile;
	}
	
		
				
	$videoservertype="localfile";
	$smallvideocode=$mosConfig_live_site."/seyretfiles/uploads/videos/user_".$my->id."/user_".$my->id."_v".$random.$exttype;
	
	$thepicture=$mosConfig_absolute_path."/seyretfiles/uploads/thumbnails/user_".$my->id."/".$newfile;
	$thevideo=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$my->id."/user_".$my->id."_v".$random.$exttype;
	
	
	$oldumask=umask(0);
	

	if (file_exists($thevideo)){
		if (!is_dir($thevideo)){
		chmod ($thevideo,0644);
		}//why do we need this? some crazy situations....
	}
	
	if (file_exists($thepicture)){	
		if (!is_dir($thepicture)){
		chmod ($thepicture,0644);		
		}
	}

	umask($oldumask);

	
	
	$date = date( 'Y-m-d H:i:s', time() + ( $mosConfig_offset * 60 * 60 ) );
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '',_TOPLEVEL );
	foreach ($videocat as $videocat) 
	{
		$catid = $videocat->catid;
		$catname = $videocat->categoryname;
		
		$catids="";
		$fordatacatname='';
		$fordatacatnamelast='';
		
		$catidlength=strlen($catid);
		$newcatid=substr($catid,1,$catidlength-3);
		$catid_array=explode('**',$newcatid);


		while ($catidelement=each($catid_array)){
			$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
			$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
			
				$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
				$cat = $database->loadObjectList();
				foreach ($cat as $cat) {
				$cat_cat = $cat->categoryname;
				}
			$catids=$catids.$cat_cat.' - ';
		}
		$catidlast=substr($catids,0, strlen($catids)-3);
		$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}
	$categorylist = mosHTML::selectList($videocats,"catid",'class="inputbox" size="1"',"value","text",$row->catid );
	
echo "
<form action=\"index.php?option=com_seyret&Itemid=".$Itemid."\" method=\"post\" name=\"adminForm\">

<table style=\"border:1px solid #999999; width:100%\">
			<tr>
				<td style=\"text-align:center;\"><img src=\"".$picturelink."\"  alt=\"\"/></td>
			</tr>
		</table>
		<br/>
		
		<table style=\"border:1px solid #999999; width:100%\">
			<tr>
				<td width=\"20%\">"._VIDEOTITLE."</td>
				<td><input type=\"text\" id=\"title\" name=\"title\" size=\"50\" class=\"seyretinputbox\" value=\"".$videotitle."\"/></td>
			</tr>
			
			<tr>
				<td>"._DETAILS."</td>
				<td><input type=\"text\" id=\"itemcomment\" name=\"itemcomment\" size=\"50\" class=\"seyretinputbox\" value=\"".$itemcomment."\"/></td>
			</tr>

			<tr>
				<td>"._TAGS."</td>
				<td><input type=\"text\" id=\"videotags\" name=\"videotags\" size=\"50\" class=\"seyretinputbox\" value=\"".$videotags."\"/></td>
			</tr>
			
			<tr>
				<td>"._VIDEOCAT_NAME."</td>
				<td>".$categorylist."</td>
			</tr>
			
			<tr>
				<td></td>
				<td><button type=\"submit\">"._SAVE."</button></td>
			</tr>
		</table>
		
		<br/>
		
		<table id=\"hidethesefromuser\" style=\"".$isadminhideornot."; border:1px solid #999999; width:100%\">
			<tr>
				<td width=\"20%\">"._VSERVERTYPE."</td>
				<td><input type=\"text\" id=\"videoservertype\" name=\"videoservertype\" size=\"50\" class=\"seyretinputbox\" value=\"".$videoservertype."\"/></td>
			</tr>
			
			<tr>
				<td>"._VSERVERCODE."</td>
				<td><input type=\"text\" id=\"videoservercode\" name=\"videoservercode\" size=\"50\" class=\"seyretinputbox\" value=\"".$smallvideocode."\"/></td>
			</tr>
			
			<tr>
				<td>"._VTHUMB."</td>
				<td><input type=\"text\" id=\"picturelink\" name=\"picturelink\" size=\"50\" class=\"seyretinputbox\" value=\"".$picturelink."\"/></td>
			</tr>
			
			<tr>
				<td>"._ADDEDBY."</td>
				<td><input type=\"text\" id=\"addedby\" name=\"addedby\" size=\"30\" class=\"seyretinputbox\" value=\"".$my->id."\"/></td>
			</tr>
			
			<tr>
				<td>"._ADDEDDATE."</td>
				<td><input type=\"text\" id=\"addeddate\" name=\"addeddate\" size=\"30\" class=\"seyretinputbox\" value=\"".$date."\"/></td>
			</tr>
			
			<tr>
				<td>"._IFPUBLISHED."</td>
				<td>".$published."</td>
			</tr>
		</table>
	
	<div id=\"videodetailsinput\"></div>
	 
	 
<input type=\"hidden\" name=\"option\" value=\"com_seyret\" />
<input type=\"hidden\" name=\"task\" value=\"savevideoitem\" />
<input type=\"hidden\" name=\"tasksender\" value=\"uploadvideo\" />

</form>";



		
}	
	

	
	




function playlistwithad(){

$vcode=mosGetParam($_REQUEST,'vcode',null);
$vcode=jalemurldecode($vcode);


echo "<playlist version=\"1\" xmlns=\"http://xspf.org/ns/0/\">
	<trackList>
		<track>
			<title>Ad</title>
			<creator>joomla Alem</creator>
			<location>http://localhost/edit/seyretfiles/localvideos/test1.flv</location>
		</track>
		<track>
			<title>Video</title>
			<creator>Seyret</creator>
			<location>http://localhost/edit$vcode</location>
		</track>
	</trackList>
</playlist>";

}


function rendertoolbar(){
global $mosConfig_absolute_path,$Itemid, $mosConfig_live_site, $mosConfig_lang, $my;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");

	$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";		
	
	if (file_exists($pro_file) AND $disablepro<>"1") {
		$pro="1";
	} else {
		$pro="0";
	}
	
	
	$moderatetoolbar="";


	$myid=$my->id;
	$image_lang_dir=$mosConfig_lang;
	$image_lang_dir_address=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir;
	if (!is_dir($image_lang_dir_address))
	{
	$image_lang_dir="english";
	}	
	
	
$toolbar="
<table class=\"seyrettoolbar\"  cellpadding=\"0\"  cellspacing=\"0\"><tr>";
	
	//generate HOME BUTTON
	if ($showhomebutton=="yes") {
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid");
		$toolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('1','homebutton')\" onmouseout= \"changebuttonstatus('2','homebutton')\" name=\"homebutton\"><img name=\"homebutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/home.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}
	
	//generate addvideobutton
	if ($showaddvideobutton=="yes") {
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=addlinkfront");
		$toolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('3','addvideobutton')\" onmouseout= \"changebuttonstatus('4','addvideobutton')\" name=\"addvideobutton\"><img name=\"addvideobutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/addvideo.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}

	//generate useruploadbutton
	if ($showuploadvideobutton=="yes") {	
	
		if ($pro=="1") {
			$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=prouploadvideo");
		} else {
			$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=uploadvideo");
		}
		
		$toolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('5','uploadvideobutton')\" onmouseout= \"changebuttonstatus('6','uploadvideobutton')\" name=\"uploadvideobutton\"><img name=\"uploadvideobutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/uploadvideo.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	
	
	}		


	//generate showmyvideosbutton
	if ($showmyvideosbutton=="yes") {
	
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=uservideoslist&userid=$myid");
		$toolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('9','myvideosbutton')\" onmouseout= \"changebuttonstatus('10','myvideosbutton')\" name=\"myvideosbutton\"><img name=\"myvideosbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/myvideos.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}

	//generate featured videos
	if ($showfeaturedvideosbutton=="yes") {	
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=featuredvideos");
		$toolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('7','featuredbutton')\" onmouseout= \"changebuttonstatus('8','featuredbutton')\" name=\"featuredbutton\"><img name=\"featuredbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/featured.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}
	
	
	//generate search
/* 	if ($showsearchbutton=="yes") {	
		$toolbar.="<td width=\"10\"><div style=\"cursor:pointer; position:relative;\" onmouseover=\"changebuttonstatus('11','searchbutton')\" onmouseout= \"changebuttonstatus('12','searchbutton')\" ><img name=\"searchbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/search.png\" border=\"0\" onclick=\"showsearchbox()\" alt=\"\"/><br/>
			<div id=\"searchfloatform\">
				
					<table width=\"100%\">
						<tr>
							<td nowrap=\"nowrap\"><form action=\"index.php\" method=\"post\" name=\"adminForm\"><input type=\"text\" id=\"searchkey\" name=\"searchkey\" size=\"20\" class=\"seyretinputbox\"/><button type=\"submit\"  class=\"seyretinputbox\">"._SEARCH."</button><input type=\"hidden\" name=\"option\" value=\"com_seyret\" /><input type=\"hidden\" name=\"task\" value=\"searchvideos\" /></form></td>
						</tr>	
					</table>
			</div>
		</div></td>";
	} */
	
	//generate allvideoslist
	if ($showallvideoslistbutton=="yes") {	
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=allvideoslist");
		$toolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('11','allvideosbutton')\" onmouseout= \"changebuttonstatus('12','allvideosbutton')\" name=\"allvideosbutton\"><img name=\"allvideosbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/allvideos.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}
	
	//generate help
	if ($showhelpbutton=="yes") {	
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=seyrethelp");
		$toolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('13','helpbutton')\" onmouseout= \"changebuttonstatus('14','helpbutton')\" name=\"helpbutton\"><img name=\"helpbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/help.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}

	


	


	
$toolbar.="<td align=\"right\"><span id=\"ajaxgif\">{ajaxgif}</span></td></tr></table>";

	$seyretplaylist = mosGetParam($_COOKIE,'seyretplaylist',null);
	if ($seyretplaylist=="") $seyretplaylist="{\"videocount\":\"0\",\"videoids\":\"a\",\"videothumbs\":\"_st_jh_thmb_\"}";
	$seyretpl=str_replace("\\\"","\"",$seyretplaylist);
	$jsonseyretpl = new Services_Seyret_JSON();
	$jsonseyretplvalues = $jsonseyretpl->decode($seyretpl);
	$videocount=$jsonseyretplvalues->videocount;
	
/*
$toolbar.="
		<div id=\"userplaylistcontainer\" style=\"display:none;\">
			<div id=\"userplaylist\" class=\"userplaylist\">
				<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
					<tr>
						<td width=\"1%\" style=\"padding:0px;\"><img name=\"myplaylistvbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/myplaylist.png\" border=\"0\" alt=\"\" /></td>
						<td width=\"1%\" nowrap=\"nowrap\" class=\"userplaylisttexts\">"._VIDEOINPLAYLIST."</td>
						<td width=\"1%\"><div id=\"userplaylistvideocount\" class=\"userplaylistvideocount\">$videocount</div></td>
						<td></td>
						<td width=\"100%\" nowrap=\"nowrap\"><div id=\"pllistthumbs\"></div></td>
						<td width=\"1%\">PLAY</td>
					</tr>
				</table>
			</div>
			<div>
				<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
					<tr>
						<td width=\"99%\" class=\"playlistetogglerbar\"></td>
						<td class=\"playlistetoggler\" onclick=\"togglepl()\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/playlisttoggler.png\" border=\"0\" alt=\"\" /></td>
					</tr>
				</table>	
			</div>
		</div>
	";

*/





if ($showmoderatetoolbar=="yes") {
	$moderatetoolbar="<br/><table class=\"moderatetoolbar\" cellpadding=\"0\"  cellspacing=\"0\"><tr>";
	
	//generate reportedvideos
	if ($showreportedvideosbutton=="yes") {	

		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=reportedvideos");
		$moderatetoolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('15','reportedvbutton')\" onmouseout= \"changebuttonstatus('16','reportedvbutton')\" name=\"reportedvbutton\"><img name=\"reportedvbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/reportedvideos.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}	

	//generate pendingvideos
	if ($showpendingvideosbutton=="yes") {
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=pendingvideoslist");	
		$moderatetoolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('17','pendingvbutton')\" onmouseout= \"changebuttonstatus('18','pendingvbutton')\" name=\"pendingvbutton\"><img name=\"pendingvbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/pendingvideos.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}	
	
	//generate ffmpeg*****************workonit
	if ($showpendingvideosbutton=="yes") {
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&task=flvconversionquee");	
		$moderatetoolbar.="<td width=\"10\"><a href=\"".$link."\" onmouseover=\"changebuttonstatus('19','batchcbutton')\" onmouseout= \"changebuttonstatus('20','batchcbutton')\" name=\"batchcbutton\"><img name=\"batchcbutton\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir."/batchconversion.png\" border=\"0\" vspace=\"0\" hspace=\"0\" alt=\"\" /></a></td>";
	}	
	
	
	$moderatetoolbar.="<td>&nbsp;</td></tr></table>";
}
$theusertype=strtolower($my->usertype);
if ($theusertype=="") $theusertype="guest";
$toolbarfull= $toolbar.$moderatetoolbar;


	$cachedir=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html";
	if (!is_dir($cachedir)){
	
			//attempt creating dir
			$makedir=$cachedir=$mosConfig_absolute_path."/administrator/components/com_seyret/cache";
			if (!is_dir($makedir))
			{
			$oldumask=umask(0);
			mkdir ($makedir,0755);
			umask($oldumask);
			}
			
			$makedir=$cachedir=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html";
			if (!is_dir($makedir))
			{
			$oldumask=umask(0);
			mkdir ($makedir,0755);
			umask($oldumask);
			}
			
			$cachedir=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html";
			if (!is_dir($cachedir)){
				echo "<div style=\"border:3px solid #FF1832; background-color:#FFFEDB; padding:20px; color:#FF1832; font-size:14px; font-weight:bold; font-family:Tahoma; text-align:center;\">"._CACHEDIRISMISSINGPLEASECREATE."<br/><br/>/administrator/components/com_seyret/cache/html/</div>";
			
			}			
	
	
	
	}
	
$toolbarcachefile=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html/".$mosConfig_lang."toolbar".$theusertype.".html";

if ( $fp = fopen( $toolbarcachefile, "w" ) ) {
		fwrite( $fp, $toolbarfull );
		fclose ( $fp );
	}
	


return $toolbarfull;

}







function seyrethelp(){
global $database, $my, $mosConfig_absolute_path, $mosConfig_lang;

		$database->setQuery("SELECT * FROM #__seyret_check");
		$shelp = $database->loadObjectList();
		foreach ($shelp as $shelp){
		$seyrethelp=$shelp->seyrethelp;
		}
		
		$theusertype=strtolower($my->usertype);
		if ($theusertype=="") $theusertype="guest";
		$toolbarcachefile=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html/".$mosConfig_lang."toolbar".$theusertype.".html";
		if (file_exists($toolbarcachefile)) {
			$toolbar=jalemseyret_read_file($toolbarcachefile);
		} else {
		//echo "musstfa";
			$toolbar=rendertoolbar();
		}

		
		$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
		echo $toolbar;
		echo $seyrethelp;

}	













function reportvideo($id){
global $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	
	
if ($canreportvideos=="yes"){
	HTML_seyret::htmlreportvideo($id);
} else
{
echo _YOUDONTHAVEPERMISSIONS;
}

}

function savevideoreport(){
	global $my, $database, $Itemid;

	clearhtmlcache();

	$reportreason = mosGetParam($_POST,'reportreason', null);
	$_POST['reportreason']=$reportreason;

	
	$row = new mosseyretreport($database);
	if (!$row->bind( $_POST )) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
		exit();
		}

	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
	exit();
	}

		mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid");

}

function reportedvideos(){
global $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	

if ($canviewreportedvideos=="yes"){
	HTML_seyret::htmlreportedvideos();
} else {
	echo _NORIGHTS;
}

}

function editreport($id){
global $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	

	if ($caneditreport=="yes"){
		HTML_seyret::htmleditreport($id);
	} else {
		echo _NORIGHTS;
	}


}

function searchvideos(){
global $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	

		HTML_seyret::htmlsearchvideos();


}



function renderinputform($vidlink, $picturelink,$videotitle,$itemcomment,$categorylist,$videoservertype,$smallvideocode){
	global $mosConfig_absolute_path,$my, $Itemid, $mosConfig_offset;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	

$videotags="";
$defaultpublishisyes ="";
$replylist="";
$candefinefeaturedvideos ="";
$featuredrow ="";


$itemcomment=str_replace("\"","&quot;",$itemcomment);
$videotitle=str_replace("\"","&quot;",$videotitle);
$smallvideocode=str_replace("\"","",$smallvideocode);

$date = date( 'Y-m-d H:i:s', time() + ( $mosConfig_offset * 60 * 60 ) );
		
		

if ($canpublishvideo=="yes") {
	if ($defaultpublishisyes=="yes"){
	$published="<input type=\"radio\" name=\"published\" value=\"0\"/>"._NO."<input type=\"radio\" name=\"published\" value=\"1\" checked> "._YES;	
	} else {
	$published="<input type=\"radio\" name=\"published\" value=\"0\" checked/>"._NO."<input type=\"radio\" name=\"published\" value=\"1\"> "._YES;	
	}
} else {
	$published="<input type=\"radio\" name=\"published\" value=\"0\" checked/>"._NO;	

}


		$replyrow="";
		$seyretrply=mosGetParam($_COOKIE,'seyretrply',null);
		
		if ($seyretrply!="")  {
			$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$seyretrply'");
			$vids = $database->loadObjectList();
			foreach ($vids as $vids) {
				$thevideotitle=$vids->title;
			}
			
				$thisisareply = array();
				$thisisareply[] = mosHTML::makeOption( "0", _NOTAREPLY );
				$thisisareply[] = mosHTML::makeOption( $seyretrply, $thevideotitle );
				$replylist = mosHTML::selectList($thisisareply,"isreplyto",'id="isreplyto" size="1"',"value","text",$seyretrply );
		}
		
		$replyrow="<tr><td>"._ISAREPLYTO."</td><td>".$replylist."</td></tr>";


if ($candefinefeaturedvideos=="yes"){
	$yesno[] = mosHTML::makeOption( 0, _NO );
	$yesno[] = mosHTML::makeOption( 1, _YES );
	$isfeatured=mosHTML::selectList( $yesno, 'featured', 'class="inputbox" size="1"', 'value', 'text');
	
	$featuredrow="<tr><td>"._FEATURED."</td><td>".$isfeatured."</td></tr>";
						
} 
	

if ($canseevideoservercodes=="yes") {
$isadminhideornot="visibility:visible;";
} else {
$isadminhideornot="visibility:hidden;";
}





		
		$generateinputform1="
		<form action=\"index.php?option=com_seyret&Itemid=".$Itemid."\" method=\"post\" name=\"admins\">

			<table width=\"100%\">
				<tr>
					<td colspan=\"3\">"._ADDVIDEOINFO."</td>
				</tr>
				
				<tr>
					<td>"._INPUTLINK."</td><td><input type=\"text\" id=\"videourl\" name=\"videourl\" size=\"50\" class=\"text_area\" value=\"".$vidlink."\"/></td>
					<td><button type=\"submit\" >"._APPLY."</td>
				</tr>	
			</table>
			
			<div id=\"videodetailsinput\"></div>
			 
		<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />			 
		<input type=\"hidden\" name=\"option\" value=\"com_seyret\" />
		<input type=\"hidden\" name=\"task\" value=\"applyvideolink\" />
		<input type=\"hidden\" name=\"tasksender\" value=\"addlinkfront\" />

		</form>		
		<form action=\"index.php?option=com_seyret&Itemid=".$Itemid."\" method=\"post\" name=\"adminform\">
		<table style=\"border:1px solid #999999; width:100%\">
			<tr>
				<td align=\"center\"><img src=\"".$picturelink."\" /></td>
			</tr>
		</table>
		<br/>
		
		<table style=\"border:1px solid #999999; width:100%\">
	
			<tr>
			
				<td width=\"20%\">"._VIDEOTITLE."</td>
				<td><input type=\"text\" id=\"title\" name=\"title\" size=\"50\" class=\"seyretinputbox\" value=\"".$videotitle."\"/></td>
			</tr>
			
			<tr>
				<td>"._DETAILS."</td>
				<td>";
				
				
				$generateinputform2="</td>
			</tr>

			<tr>
				<td>"._TAGS."</td>
				<td><input type=\"text\" id=\"videotags\" name=\"videotags\" size=\"50\" class=\"seyretinputbox\" value=\"".$videotags."\"/></td>
			</tr>

			
			<tr>
				<td>"._VIDEOCAT_NAME."</td>
				<td>".$categorylist."</td>
			</tr>
			
			<tr>
				<td>"._IFPUBLISHED."</td>
				<td>".$published."</td>
			</tr>

".$featuredrow.$replyrow."
			
			
			<tr>
				<td></td>
				<td><button type=\"submit\">"._SAVE."</button></td>
			</tr>
		</table>
		
		<br/>
		
		<table id=\"hidethesefromuser\" style=\"".$isadminhideornot."; border:1px solid #999999; width:100%\">

			<tr>
				<td width=\"20%\">"._VIDEOLINK."</td>
				<td><input type=\"text\" id=\"videourl\" name=\"videourl\" size=\"50\" class=\"seyretinputbox\" value=\"".$vidlink."\"/></td>
			</tr>
			
			
		<tr>
				<td width=\"20%\">"._VSERVERTYPE."</td>
				<td><input type=\"text\" id=\"videoservertype\" name=\"videoservertype\" size=\"50\" class=\"seyretinputbox\" value=\"".$videoservertype."\"/></td>
			</tr>
			
			<tr>
				<td>"._VSERVERCODE."</td>
				<td><input type=\"text\" id=\"videoservercode\" name=\"videoservercode\" size=\"50\" class=\"seyretinputbox\" value=\"".$smallvideocode."\"/></td>
			</tr>
			
			
			
			
			
			<tr>
				<td>"._VTHUMB."</td>
				<td><input type=\"text\" id=\"picturelink\" name=\"picturelink\" size=\"50\" class=\"seyretinputbox\" value=\"".$picturelink."\"/></td>
			</tr>
			
			<tr>
				<td>"._ADDEDBY."</td>
				<td><input type=\"text\" id=\"addedby\" name=\"addedby\" size=\"30\" class=\"seyretinputbox\" value=\"".$my->id."\"/></td>
			</tr>
			
			<tr>
				<td>"._ADDEDDATE."</td>
				<td><input type=\"text\" id=\"addeddate\" name=\"addeddate\" size=\"30\" class=\"seyretinputbox\" value=\"".$date."\"/></td>
			</tr>
			

		</table>
		
<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />
<input type=\"hidden\" name=\"option\" value=\"com_seyret\" />
<input type=\"hidden\" name=\"task\" value=\"savevideoitem\" />
<input type=\"hidden\" name=\"tasksender\" value=\"addlinkfront\" />

</form>

	";	
		echo $generateinputform1;
		if ($usejoomlaeditor=="1"){
			editorArea( 'editor1', $itemcomment, 'itemcomment', '100%;', '250', '75', '20' );
		} else {
			echo "<input type=\"text\" id=\"itemcomment\" name=\"itemcomment\" size=\"50\" class=\"seyretinputbox\" value=\"".$itemcomment."\"/>";
		}
		
		
		echo $generateinputform2;

return $smallvideocode;
}




function generatecodes($vtype, $vcode, $id, $accesslevel,$frombackupid, $addedby, $isdownloadable, $vthumb, $catid, $videotags, $videourl){
global $database, $Itemid, $mosConfig_live_site, $my, $mosConfig_lang, $mosConfig_absolute_path;

$downloadcachingtimeout=0;
$frombackupbutton="";
$showrefreshvideobutton="";
$openinnewwindow="";
$vdownloadlink="";
$reportthisvideo="";
$replythisvideo="";
$frombackupbutton="";
$deletethisvideo="";
$editthisvideo="";
$refreshthisvideo="";
		
		
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');





$videotagslinked=_TAGS.": ";

$videotags_array=explode(' ',$videotags);

foreach ($videotags_array as $vt){

	$link=sefRelToAbs("index.php?option=com_seyret&task=searchvideos&Itemid=$Itemid&searchkey=$vt");
	$videotagslinked.="<a href=\"$link\">$vt</a> ";

}

	$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$vtype.".php";
    require_once($includepluginfile);
	
	$image_lang_dir=$mosConfig_lang;
	$image_lang_dir_address=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir;
	if (!is_dir($image_lang_dir_address))
	{
	$image_lang_dir="english";
	}	
	
	
	if ($vthumb==""){
	$vthumb=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
	}
	
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
	




	if ($accesslevel<=$uservideoaccesslevel) {
			$vcode=jalemurlencode($vcode);	
			$fvtype=str_replace(".","",$vtype);
			$popupvtype=jalemurlencode($vtype);
			$functionname=$fvtype."embed"; 
			$embed=$functionname($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $catid);

			
//===================================================================================================	
		//*******************************
		if ($showembedcode=="yes"){
		$embed=str_replace("\"","'",$embed);
		$database->setQuery("SELECT * FROM #__seyret_check");
		$snippet = $database->loadObjectList();
			foreach ($snippet as $snippet) {
			$ssnip=$snippet->seyretsnippet;	
			$ssnip=str_replace("\"","'",$ssnip);
			}
		$embedcode="<table style=\"width:100%; padding:0px\"><tr><td width=\"10\">"._VIDEOEMBEDCODE.":</td><td width=\"1%\"><input type=\"text\" id=\"embedlink\" name=\"embedlink\" class=\"videoembedcode\" onClick=\"showshareembed()\" readonly=\"readonly\" value=\"".$embed.$ssnip."\"/></td></tr></table>";
		}
		//*******************************

		//*******************************
		if ($showvideodirectlink=="yes"){	
		$viddirectlink="index.php?option=com_seyret&task=videodirectlink&Itemid=$Itemid&id=".$id;
		$vvvlink=sefRelToAbs($viddirectlink);
		$videodirectlink="<table style=\"width:100%; padding:0px\"><tr><td width=\"10\">"._VIDEOURL.":</td><td width=\"1%\"><input type=\"text\" id=\"videolink\" name=\"videolink\" class=\"videodirectlink\" onClick=\"showdirectlink()\" readonly=\"readonly\" value=\"".$vvvlink."\"/></td></tr></table>";
		}
		//*******************************
		
		$editmyvideo="";
		if ($caneditownvideos=="yes") {
				if ($addedby==$my->id) $editmyvideo="yes";

		}
		
		
		$deletemyvideo="";
		if ($candeleteownvideos=="yes") {
				if ($addedby==$my->id) $deletemyvideo="yes";
		
		}	
		
		

		//*******************************
		if ($showeditbutton=="yes" OR $editmyvideo=="yes"){

			$editthisvideo="<td><a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=editvideos&id=".$id."\"><div style=\"cursor:pointer;\"><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/edit.png\" border=\"none\"/></div><div class=\"videooperationstext\">"._EDITBTN."</div></div></a></td>";

		}	
		//*******************************
		
		//*******************************	
		if ($showdeletevideobutton=="yes" OR ($showdeletevideobutton=="no" AND $deletemyvideo=="yes") OR ($showdeletevideobutton=="no" AND $candeletevideo=="yes")){	
		
		$deletethisvideo="<td><a href=\"javascript:if (confirm('"._DELETEVIDEOCONFIRMMESSAGE."')){ window.location.href='index.php?option=com_seyret&task=deletevideo&id=".$id."'}\"><div style=\"cursor:pointer;\"><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/delete.png\" border=\"none\"/></div><div class=\"videooperationstext\">"._DELETEBTN."</div></div></a></td>";
		}
		//*******************************

		//*******************************	
		if ($showrefreshvideobutton=="yes"){	
			$refreshthisvideo="<td><a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=refreshvideo&id=".$id."\"><div style=\"cursor:pointer;\"><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/refresh.png\" border=\"none\"/></div><div class=\"videooperationstext\">"._REFRESHBTN."</div></div></a></td>";			
		}
		//*******************************		
		
		//*******************************	
		if ($showreplybutton=="yes"){	
	
			$replythisvideo="<td><a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=addnewvideo&replyto=".$id."\"><div style=\"cursor:pointer;\"><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/reply.png\" border=\"none\"/></div><div class=\"videooperationstext\">"._REPLYBTN."</div></div></a></td>";
		}
		//*******************************

		
		//*******************************	
		if ($showreportbutton=="yes"){	
	
			$reportthisvideo="<td><a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=reportvideo&id=".$id."\"><div style=\"cursor:pointer;\"><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/report.png\" border=\"none\"/></div><div class=\"videooperationstext\">"._REPORTBTN."</div></div></a></td>";
		}
		//*******************************

		//*******************************	
		if ($showfrombackupbutton=="yes"){
			if ($frombackupid>0) {
			$frombackupbutton="<td><a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=videodirectlink&id=".$frombackupid."\"><div style=\"cursor:pointer;\"><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/frombackup.png\" border=\"none\"/></div><div class=\"videooperationstext\">Mirror</div></div></a></td>";
			}
		}
		//*******************************	
		
		//*******************************
		if ($showpopupbutton=="yes"){	
		$popupurl=$mosConfig_live_site."/index2.php?option=com_seyret&no_html=1&task=embedpopup&vthumb=".$vthumb."&vcode=".$vcode."&servertype=".$popupvtype."&vidwindow=popup";
		$popupwidth=$popupvideowidth+50;
		$popupheight=$popupvideoheight+30;
		$openinnewwindow="<td><div style=\"cursor:pointer;\" onclick=openinpopup('$popupurl','$popupwidth','$popupheight')><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/fullscreen.png\" border=\"none\"/></div><div class=\"videooperationstext\">"._FULLSCREENBTN."</div></div></td>";
	
		
		}
		//*******************************
		
		
				//*******************************
		if ($showdownloadbutton=="yes" AND $isdownloadable=="1" AND $videodownloadsupport=="yes"){
			$vstrcode = jalemurlencode($vcode );
			$downloadrequest=$mosConfig_live_site."/index2.php?option=com_seyret&no_html=1&task=flvdownloadreq&vidid=".$id."&vcode=".$vstrcode."&servertype=".$vtype;
			
			$vdownloadlink="<td><div style=\"cursor:pointer;\"  onclick=\"openinpopup('$downloadrequest','400','20')\"><div class=\"videooperationsicon\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/download.png\" border=\"none\"/></div><div class=\"videooperationstext\">"._DOWNLOADBTN."</div></div></td>";

		
				
		} else {
		$vdownloadlink="";
		}
		//*******************************
		
		
		$voperationsarray=array();
		$columncount=1;
		$voperationsarray[]=$openinnewwindow;
		$voperationsarray[]=$vdownloadlink;
		$voperationsarray[]=$reportthisvideo;
		$voperationsarray[]=$replythisvideo;
		$voperationsarray[]=$frombackupbutton;
		$voperationsarray[]=$deletethisvideo;
		$voperationsarray[]=$editthisvideo;
		$voperationsarray[]=$refreshthisvideo;
		
		
		$voperations="<div id=\"uservideooperationsbuttonsdiv\"><table class=\"uservideooperationsbuttons\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
		foreach ($voperationsarray as $voperationsarray){
		
			if ($voperationsarray!=""){
			$voperations.=$voperationsarray;
			$columncount++;
				if ($columncount==4){
					$columncount=1;
					$voperations.="</tr><tr>";
				}
			}
		}
		
		$voperations.="</tr></table></div>";

		
		if ($usevideovotesystem=="yes"){
			$votedvideos = mosGetParam($_COOKIE,'votedvideos',null);
			$votedvideos_array=explode('a',$votedvideos);
			$alreadyvoted="no";
			if (in_array($id, $votedvideos_array)) $alreadyvoted="yes";
			
			
			if ($videovoteactive=="yes" AND $alreadyvoted=="no"){
				$votearea="<table><tr><td>"._VOTEIT.":</td><td>".getvotestarsenabled($id)."</td></tr></table>";
			} else {
				if ($logintovotetext=="yes" AND $alreadyvoted=="no")
				{
				$votearea="<table><tr><td>"._LOGINTOVOTE.":</td><td>".getvotestarsdisabled($id)."</td></tr></table>";
				} else {
				$votearea="<table><tr><td>"._RATING.":</td><td>".getvotestarsdisabled($id)."</td></tr></table>";
				}
				
			}
		}
//===================================================================================================


	} else {
	
	
	$accessstringwithlink=str_replace("{accesslevelupgradelink_dontchangethis}","\"$accesslevelupgradelink\"",_YOUHAVENOACCESSRIGHTTOTHISVIDEO);
	
	
	
	   $embed="<div style=\"width:".$videowidth."px; text-align:center;\"><p style=\"text-align:center;\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/noaccess.png\"></p></div><div style=\"width:".$videowidth."px; text-align:center;\">".$accessstringwithlink."</div>";
	}
	
	$comments=getseyretcomments($id);
	$imagead=getseyretimagead($id);
	
	$addedbyno=$addedby;
	$addedby=jagetusersname($addedby);

	$link=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=0&userid=$addedbyno");
	$addedby="<a href=\"".$link."\">".$addedby."</a>";
	

	return array ($embed, $voperations, $votearea, $embedcode, $videodirectlink, $comments, $imagead, $addedby, $videotagslinked);
}





function getseyretimagead($id){
global $database, $mosConfig_absolute_path,$mosConfig_live_site, $Itemid;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");  

$catid="";

	$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
	$catname = $database->loadObjectList();	
	foreach ($catname as $catname) {
	$catid=$catname->catid;
	}

	$database->setQuery("SELECT count(*) FROM #__seyret_imageads WHERE catid='$catid' AND published='1'");
	$totalimad = $database->loadResult(); 
	if ($totalimad!=0){
		$adno=rand(1,$totalimad);
		$count=0;
		$database->setQuery("SELECT * FROM #__seyret_imageads WHERE catid='$catid' AND published='1'");
		$imagelink = $database->loadObjectList();	
		foreach ($imagelink as $imagelink) {
			$count=$count+1;
			if ($count==$adno) {
				$imad=$imagelink->imageadlink;
				$imadclick=$imagelink->clicklink;
			}
		}	

$imagead="<a href=\"".$imadclick."\" target=\"_blank\"><img src=\"".$imad."\" width=\"".$videowidth."\" style=\"border:none;\" alt=\"\"/></a>";


	} else {
		$imagead="<img src=\"".$defaultimagead."\" width=\"".$videowidth."\">";
	}


return $imagead;
}








function allvideoslist(){
HTML_seyret::htmlallvideoslist();

}

function featuredvideos(){
HTML_seyret::htmlfeaturedvideos();

}

function uservideoslist(){
HTML_seyret::htmluservideoslist();

}

function pendingvideoslist(){
HTML_seyret::htmlpendingvideoslist();

}


function generatevideoad($catid){
global $database;

	$database->setQuery("SELECT count(*) FROM #__seyret_ads WHERE catid='$catid' AND published='1'");
	$totalvidad = $database->loadResult(); 
	
	
	
	if ($totalvidad!=0){
		$adno=rand(1,$totalvidad);
		$count=0;
		$database->setQuery("SELECT * FROM #__seyret_ads WHERE catid='$catid' AND published='1'");
		$videoadlink = $database->loadObjectList();	
		foreach ($videoadlink as $videoadlink) {
			$count=$count+1;
			if ($count==$adno) {
				$videoadlink=$videoadlink->adlink;
			}
		}	

	}

	
return $videoadlink;
}



function refreshvideo($id){
global $database, $Itemid, $mosConfig_live_site, $my, $mosConfig_lang, $mosConfig_absolute_path, $mainframe;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	


$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
$vidyo = $database->loadObjectList();


	foreach ($vidyo as $vidyo) {
		$existingcode=$vidyo->videoservercode;
		$vtype=$vidyo->videoservertype;
		$vtitle=$vidyo->title;
		$vcomment=$vidyo->itemcomment;
		$vidlink=$vidyo->videourl;
	
	}

	$nodotservertype=str_replace(".","",$vtype);
		
	if ($vtype!="localfile") {
	$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$vtype.".php";

	require_once($includepluginfile);
	$funcname=$nodotservertype."getvideodetails";
	list ($picturelink, $videotitle, $itemcomment)=$funcname($vidlink,  $existingcode, $categorylist, "refresh");
	
	
	$database->setQuery("UPDATE #__seyret_items SET picturelink='$picturelink' WHERE id='$id' ");
		if (!$database->query()){
			echo "<script> alert('hata'); window.history.go(-1); </script>n";
			exit();
		}		
	
	}






	//$vthumb=str_replace("&","%26",$vthumb);
	$cachefile1=$mosConfig_live_site."+".$nodotservertype."+".$existingcode."1";	
	$cachefile2=$mosConfig_live_site."+".$nodotservertype."+".$existingcode."0";
	$md5cachefile1=md5($cachefile1).".xml";
	$md5cachefile2=md5($cachefile2).".xml";
	$fullmd5cachefile1=$mosConfig_absolute_path."/seyretfiles/cache/pro/".$nodotservertype."/ad/".$md5cachefile1;
	$fullmd5cachefile2=$mosConfig_absolute_path."/seyretfiles/cache/pro/".$nodotservertype."/".$md5cachefile2;
	@unlink($fullmd5cachefile1);
	@unlink($fullmd5cachefile2);

		
		$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$id;	
		mosRedirect( $link,_VIDEOINFOREFRESHED);

		
}



	
	
function rss2feed(){
global $database, $Itemid, $mosConfig_live_site, $mosConfig_lang, $mosConfig_absolute_path;

	$vidcatname="";
$feedtype = mosGetParam( $_REQUEST, 'feedtype', null);
$ordertype = mosGetParam( $_REQUEST, 'order', null);
$cid = mosGetParam( $_REQUEST, 'cid', null);
$feedlimit = mosGetParam( $_REQUEST, 'feedlimit', null);
if ($feedlimit=="") $feedlimit="10";

$ordert="";
if ($ordertype=="a") {
	$ordert="ASC";
	//add order type to title????? nope, not yet
	}
if ($ordertype=="d") {
	$ordert="DESC";
	}

$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type:  text/xml; charset=$charset");
	echo "<?xml version=\"1.0\" encoding=\"$charset\"?>";


	$description=_RSSVIDEOSCATDESCPRE." ".$mosConfig_live_site." "._RSSVIDEOSCATDESCPOST;
	
	
if ($cid=="0") {
	$wherequery=" WHERE published='1' AND catid='' ";
} else if ($cid=="all") {
	$wherequery=" WHERE published='1' ";
} else {
	
	$database->setQuery("SELECT * FROM #__seyret_categories WHERE id='$cid'");
	$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$catid = $cat->catid;
		$vidcatname = $cat->categoryname;
		$catdesc=$cat->categoryinfo;
		}	
	$wherequery=" WHERE published='1' AND catid='$catid' ";
}
	

if ($feedtype=="date") {
	$orderquery=" ORDER BY addeddate $ordert";
	

	
	if ($cid=="0") {
		$vidcatname = _TOPLEVEL;
		$rsstitle=_RSSCHANNELTITLEPRE." ".$vidcatname." "._RSSCHANNELTITLEPOST;	
	} else if ($cid=="all") {
		$rsstitle=_RSSCHANNELTITLEALLCATEGORIES;
	} else {
		$rsstitle=_RSSCHANNELTITLEPRE." ".$vidcatname." "._RSSCHANNELTITLEPOST;
	}
	
} else if ($feedtype=="rating"){
	$orderquery=" ORDER BY votetotal/voteclick $ordert";

	if ($cid=="0") {
		$vidcatname = _TOPLEVEL;
		$rsstitle=_RSSCHANNELTITLEHIGHESTRATEDPRE." ".$vidcatname." "._RSSCHANNELTITLEHIGHESTRATEDPOST;	
	} else if ($cid=="all") {
		$rsstitle=_RSSCHANNELTITLEALLCATEGORIESHIGHESTRATED;
	} else {
		$rsstitle=_RSSCHANNELTITLEHIGHESTRATEDPRE." ".$vidcatname." "._RSSCHANNELTITLEHIGHESTRATEDPOST;
	}
}

	
	
	
	echo "<rss version=\"2.0\">";

		echo "<channel>
			<title>$rsstitle</title>
			<link>$mosConfig_live_site</link>
				<description>$description</description>
				<category>$vidcatname</category>
				<generator>Seyret</generator>
				<webMaster></webMaster>";
				
				
			$database->setQuery("SELECT * FROM #__seyret_items $wherequery $orderquery LIMIT 0, $feedlimit");
			$item = $database->loadObjectList();
			foreach ($item as $item) {
			$vid=$item->id;
			$title = $item->title;
			$desc = $item->itemcomment;
			$thumb=$item->picturelink;

		
			echo "
			<item>
				<title>$title</title>
				
				<link>$mosConfig_live_site/index.php?option=com_seyret&amp;Itemid=$Itemid&amp;task=videodirectlink&amp;id=$vid</link>
				 				
				<description>
				<![CDATA[
				<p><img width=\"160\" src=\"$thumb\"></p>

				<p> $desc </p>
				<hr>
				]]>
				</description>
			
				<author></author>
				<category>$vidcatname</category>
			</item>";
			
			}


	echo "</channel>";

		
	echo "</rss>";	

}

	








function generatebookmarks($id, $title){
global $mosConfig_absolute_path, $mosConfig_live_site, $Itemid;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

	$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$id;
	$seflink=sefRelToAbs($link);
	$urlencseflink=urlencode($seflink);	
	
	$showdelicious="yes";
	$showdigg="yes";
	$showreddit="yes";
	$showsimpy="yes";
	$showyahoo="yes";	
	$showfurl="yes";	
	$showgoogle="yes";
	$showfacebook="yes"; 
	
	
	
$bookmarklist="";
if ($showdelicious=="yes"){
	$dellink="http://del.icio.us/post?v=2&url=$urlencseflink&notes=&tags=&title=$title";
	$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/delicious.png\" border=\"0\" alt=\"\"></a>";
} 

if ($showdigg=="yes"){
	$dellink="http://digg.com/submit?phase=2&url=$urlencseflink&bodytext=&tags=&title=$title";
	$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/digg.png\" border=\"0\" alt=\"\"></a>";
}

if ($showreddit=="yes"){
	$dellink="http://reddit.com/submit?url=$urlencseflink&title=$title";
	$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/reddit.png\" border=\"0\" alt=\"\"></a>";
} 

if ($showsimpy=="yes"){
	$dellink="http://www.simpy.com/simpy/LinkAdd.do?title=".$urlencseflink."&tags=&note=&href=".$title;
	$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/simpy.png\" border=\"0\" alt=\"\"></a>";
}  

if ($showyahoo=="yes"){
	$dellink="http://myweb2.search.yahoo.com/myresults/bookmarklet?t=".$urlencseflink."&d=&tag=&u=".$title;
	$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/yahoo.png\" border=\"0\" alt=\"\"></a>";
}  

if ($showfurl=="yes"){
	$dellink="http://www.furl.net/storeIt.jsp?u=".$urlencseflink."&keywords=&t=".$title;
	$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/furl.png\" border=\"0\" alt=\"\"></a>";
} 

if ($showgoogle=="yes"){
	$dellink="http://www.google.com/bookmarks/mark?op=add&bkmk=".$urlencseflink."&annotation=&labels=&title=".$title;
	$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/google.png\" border=\"0\" alt=\"\"></a>";
} 

//thanks to korpio  from Joomlaholic forums
if ($showfacebook=="yes"){ 
	$dellink="http://www.facebook.com/share.php?u=".$urlencseflink."&t=".$title; 
    $bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> 
<img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/facebook.png\" border=\"0\" alt=\"\"></a>"; 
} 


return $bookmarklist;
}


function listflashmodule2($vid=null, $listtype=null, $videocount=null){
global $database, $Itemid, $mosConfig_live_site;

//for future coding changes

if ($vid=="") $vid = mosGetParam($_REQUEST,'vid',0);
if ($listtype=="") $listtype = mosGetParam($_REQUEST,'listtype',null);
if ($videocount=="") $videocount = mosGetParam($_REQUEST,'videocount',null);


if ($listtype=="replies" OR $listtype=="repliesinternal") {

	//read videos---------------------------------------------------------	
	$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' AND isreplyto='$vid' ORDER BY addeddate DESC LIMIT 0, $videocount");
	$vidyo = $database->loadObjectList();
	//---------------------------------------------------------------------------

} else if ($listtype=="beingwatched") {

	//read videos---------------------------------------------------------	
	$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' ORDER BY lastclicktime DESC LIMIT 0, $videocount");
	$vidyo = $database->loadObjectList();
	//---------------------------------------------------------------------------

} else if ($listtype=="latest") {

    //read videos---------------------------------------------------------   
    $database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' ORDER BY addeddate DESC LIMIT 0, $videocount");
    $vidyo = $database->loadObjectList();
    //---------------------------------------------------------------------------

}



$string="
<".$listtype.">";
	
		foreach ($vidyo as $vidyo){
			$vidid=$vidyo->id;
			$vidtitlw=$vidyo->title;
			$vidthumb=$vidyo->picturelink;
			$duration=$vidyo->playtime;
			
			if ($duration!=""){
				$durationformatted=FormatTimeDiff(1, $duration, 'hms');
				$durformatted=$durationformatted["h"].":".$durationformatted["m"].":".$durationformatted["s"];
			} else {
				$durformatted="";
			}

			
			
			if ($vidthumb=="") $vidthumb=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$vidid;	
			$videuurl=sefRelToAbs($link);	
		
		$string.=	"<video id=\"$vidid\">
						<title>$vidtitlw</title>
						<thumbnail>$vidthumb</thumbnail>
						<videourl>$videuurl</videourl>
						<durat>$durformatted</durat>
					</video>
					
					";
		
		}

$string.="	
</".$listtype.">";


if ($listtype!="repliesinternal") {
	$iso = explode( '=', _ISO );
	$charset=$iso[1];
	header("Content-Type: application/x-javascript; charset=$charset");

}




	if ($listtype=="replies" OR $listtype=="repliesinternal") {
		return $string;

	} else {
		echo $string;
	}
	
}	


function listflashmodule(){
global $mosConfig_absolute_path;
$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";		
if (file_exists($pro_file)){
require_once($pro_file);prolistflashmodule();
}
}

//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////



function prouploadcheckstatus(){
global $mainframe, $database, $mosConfig_absolute_path, $my;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

$cook=$mainframe->_session;
$sid=$cook->session_id;	

//joomla 1.5 compatibility
if ($sid==""){
	$session=& JFactory::getSession();
	$sid=$session->getId();
}

$uploadedvideolocation="";
$mid = mosGetParam( $_REQUEST, 'mid', null);
$error="";

	$processfile=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$mid."/process.php";	
	
	if (file_exists($processfile)) {
		require($processfile);
		
		if ($sid!=$sess){
			$database->setQuery( "DELETE FROM #__session WHERE session_id LIKE '%".$sid."%'" );				
			$database->query();

			$database->setQuery( "UPDATE #__session SET session_id='$sid' WHERE session_id LIKE '%".$sess."%'" );				
			$database->query();
		}
	}
	
		
		if (file_exists($uploadedvideolocation) AND $error=="0" AND $status=="initial") {

				$statusmessage=_VIDEOUPLOADISSUCCESS;
	
$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type: application/x-javascript; charset=$charset");
	
					
			echo "
{uploadstatus: 'successful',
message: '".$statusmessage."'}
";
		} else {

			echo "
{uploadstatus: 'failed',
message: '".$error."'}
";	
		
		

		 //@unlink($uploadedvideolocation);
		 //@unlink($processfile);
	
	
	
		}

}



function procheckflvconversion(){
global $mainframe, $database, $mosConfig_absolute_path, $my;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/classes/converter.class.php');	

		$seyretconverter = new seyretconverter;
		$seyretconverter->checkconversionconfig();//important
		if ($seyretconverter->convertstatus=="startconvert") $seyretconverter->convertwithffmpeg();
		$seyretconverter->analyzevideofile();
		$convertstatus=$seyretconverter->convertstatus;
		$convertmessage=$seyretconverter->convertmessage;
		$seyretconverter->updatelogfile("convert");

$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type: application/x-javascript; charset=$charset");
		
echo "
{convertstatus: '".$convertstatus."',
message: '".$convertmessage."'}
";		
}


function prouploadcreatethumbnails(){
global $mainframe, $database, $mosConfig_absolute_path, $my, $mosConfig_live_site;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/classes/converter.class.php');	


		$seyretconverter = new seyretconverter;
		$seyretconverter->checkthumbnailextractconfig();//important
		if ($seyretconverter->extractstatus=="extract") $seyretconverter->extractthumbnails();
		$extractstatus=$seyretconverter->extractstatus;
		$extractmessage=$seyretconverter->extractmessage;
		$seyretconverter->updatelogfile("extract");

$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type: application/x-javascript; charset=$charset");
		
echo "
{thumbnailstatus: '".$extractstatus."',
message: '".$extractmessage."'}
";
	
}


function prouploadgetform(){
global $mainframe, $database, $mosConfig_absolute_path, $my, $mosConfig_live_site;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');

$thumboutputfile1="";
$outputfile ="";


	$mid=$my->id;
	$processfile = $mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$mid."/process.php";
		
	if (file_exists($processfile)) {
		include($processfile);
	}		

	
	require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');

		$yesno[] = mosHTML::makeOption( 0, _NO );
		$yesno[] = mosHTML::makeOption( 1, _YES );
		
		
if ($canseevideoservercodes=="yes") {
$isadminhideornot="visibility:visible;";
} else {
$isadminhideornot="visibility:hidden;";
}
	
	if ($canpublishvideo=="yes"){

		$published=mosHTML::selectList( $yesno, 'published', 'class="inputbox" size="1"', 'value', 'text', '1' );	
	} else {
		$published=_PUBLISHAFTERMODERATED;
	}
	


	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '',_TOPLEVEL );
	foreach ($videocat as $videocat) 
	{
		$catid = $videocat->catid;
		$catname = $videocat->categoryname;
		
		$catids="";
		$fordatacatname='';
		$fordatacatnamelast='';
		
		$catidlength=strlen($catid);
		$newcatid=substr($catid,1,$catidlength-3);
		$catid_array=explode('**',$newcatid);


		while ($catidelement=each($catid_array)){
			$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
			$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
			
				$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
				$cat = $database->loadObjectList();
				foreach ($cat as $cat) {
				$cat_cat = $cat->categoryname;
				}
			$catids=$catids.$cat_cat.' - ';
		}
		$catidlast=substr($catids,0, strlen($catids)-3);
		$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}
	$categorylist = mosHTML::selectList($videocats,"catid",'class="inputbox" size="1"',"value","text");


	

$thumboutputfile1=str_replace("5.jpg","1.jpg",$thumboutputfile1);
$mosConfig_absolute_path=strtolower($mosConfig_absolute_path);
$outputfile=strtolower($outputfile);
$thumboutputfile1=strtolower($thumboutputfile1);
	
$smallvideocode=str_replace($mosConfig_absolute_path,$mosConfig_live_site,$outputfile);
$thumboutputfile1=str_replace($mosConfig_absolute_path,$mosConfig_live_site,$thumboutputfile1);


if ($candefinefeaturedvideos=="yes"){
	$isfeatured=mosHTML::selectList( $yesno, 'featured', 'class="inputbox" size="1"', 'value', 'text');
	
	$featuredrow="<tr><td>"._FEATURED."</td><td>".$isfeatured."</td></tr>";
						
} 

$proupl_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proupld.php";
if (file_exists($proupl_file)) {
	include($proupl_file);
	} else 	{
	exit;	
	echo "Missing Pro File";
	}
	
$iso = explode( '=', _ISO );
$charset=$iso[1];
header("Content-Type: application/x-javascript; charset=$charset");
		

		echo "
<form action=\"$mosConfig_live_site/index.php\" enctype=\"multipart/form-data\" method=\"post\" name=\"adminForm\">";

if ($enablethumbnailextraction=="1" AND $instantthumbprocess=="1"){

$roundplaytime=(ceil($playtime*100))/100;
$roundplaytime=FormatTimeDiff(1, $roundplaytime, 'hms');
$durformatted=$roundplaytime["h"].":".$roundplaytime["m"].":".$roundplaytime["s"];

echo "<div>
	<div style=\"vertical-align:middle;\">

		<div id=\"thumbselectmain\">
				<img id=\"thumbselectorthumbprev\"  class=\"thumbselectorthumbprev\" src=\"$mosConfig_live_site/seyretfiles/uploads/thumbnails/user_$mid/user_".$mid."_t".$random."_0.jpg\" alt=\"\">
		</div>

		<div id=\"thumbselectselector\">
		
			<div  id=\"thumbselectselectortitle\">
				"._PLEASESELECTTHUMBNAIL."
			</div>
			
			<div>
				<img id=\"thumbselectorimg0\" class=\"thumbselectorthumb thumbselectorthumbselected\"  onclick=\"selectextrthumbnail('0')\" src=\"$mosConfig_live_site/seyretfiles/uploads/thumbnails/user_$mid/user_".$mid."_t".$random."_0.jpg\" alt=\"\">
				<img  id=\"thumbselectorimg1\"  class=\"thumbselectorthumb\"  onclick=\"selectextrthumbnail('1')\"  src=\"$mosConfig_live_site/seyretfiles/uploads/thumbnails/user_$mid/user_".$mid."_t".$random."_1.jpg\" alt=\"\">
				<img  id=\"thumbselectorimg2\" class=\"thumbselectorthumb\" onclick=\"selectextrthumbnail('2')\"  src=\"$mosConfig_live_site/seyretfiles/uploads/thumbnails/user_$mid/user_".$mid."_t".$random."_2.jpg\" alt=\"\">
			</div>
			

			<div>
				<img id=\"thumbselectorimg3\" class=\"thumbselectorthumb\"   onclick=\"selectextrthumbnail('3')\" src=\"$mosConfig_live_site/seyretfiles/uploads/thumbnails/user_$mid/user_".$mid."_t".$random."_3.jpg\" alt=\"\">
				<img   id=\"thumbselectorimg4\" class=\"thumbselectorthumb\"   onclick=\"selectextrthumbnail('4')\"  src=\"$mosConfig_live_site/seyretfiles/uploads/thumbnails/user_$mid/user_".$mid."_t".$random."_4.jpg\" alt=\"\">
				<img id=\"thumbselectorimg5\"  class=\"thumbselectorthumb\" onclick=\"selectextrthumbnail('5')\"  src=\"$mosConfig_live_site/seyretfiles/uploads/thumbnails/user_$mid/user_".$mid."_t".$random."_5.jpg\" alt=\"\">
			</div>
			
			
			
			<div id=\"thumbselectplaytime\">"._PLAYTIME.": ".$durformatted." "._SECONDS."
				
			</div>
			
		<div>

	</div>
</div>";	

} else if ($enablethumbnailextraction=="1" AND $instantthumbprocess=="0") {

echo "<div>
	<div style=\"vertical-align:middle;\">

				<img id=\"thumbselectorthumbprev\" class=\"thumbselectorthmbprev\" src=\"$thumboutputfile1\" alt=\"\">
				<div>"._THUMBNAILSEXTRACTIONBYADMIN."</div>
				

	</div>
</div>";


}

		$replyrow="";
		$seyretrply=mosGetParam($_COOKIE,'seyretrply',null);
		
		if ($seyretrply!="")  {
			$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$seyretrply'");
			$vids = $database->loadObjectList();
			foreach ($vids as $vids) {
				$thevideotitle=$vids->title;
			}
			
				$thisisareply = array();
				$thisisareply[] = mosHTML::makeOption( "0", _NOTAREPLY );
				$thisisareply[] = mosHTML::makeOption( $seyretrply, $thevideotitle );
				$replylist = mosHTML::selectList($thisisareply,"isreplyto",'id="isreplyto" size="1"',"value","text",$seyretrply );
		
		$replyrow="<tr><td>"._ISAREPLYTO."</td><td>".$replylist."</td></tr>";
		}
		
		


echo "
<div style=\"clear:both;\"></div>
<div>

		
		<table style=\"border:1px solid #999999; width:100%\">
	
			<tr>
			
				<td width=\"20%\">"._VIDEOTITLE."</td>
				<td><input type=\"text\" id=\"title\" name=\"title\" size=\"50\" class=\"seyretinputbox\" value=\"\"/></td>
			</tr>
			
			<tr>
				<td>"._DETAILS."</td>
				<td><input type=\"text\" id=\"itemcomment\" name=\"itemcomment\" size=\"50\" class=\"seyretinputbox\" value=\"\"/>
				
				
				</td>
			</tr>

			<tr>
				<td>"._TAGS."</td>
				<td><input type=\"text\" id=\"videotags\" name=\"videotags\" size=\"50\" class=\"seyretinputbox\" value=\"\"/></td>
			</tr>

			
			<tr>
				<td>"._VIDEOCAT_NAME."</td>
				<td>".$categorylist."</td>
			</tr>
			
			<tr>
				<td>"._IFPUBLISHED."</td>
				<td>".$published."</td>
			</tr>

".$featuredrow.$replyrow."
			
			
			<tr>
				<td></td>
				<td><button type=\"submit\">"._SAVE."</button></td>
			</tr>
		</table>
		
		<br/>
		
		<table id=\"hidethesefromuser\" style=\"".$isadminhideornot."; border:1px solid #999999; width:100%\">

			
		<tr>
				<td width=\"20%\">"._VSERVERTYPE."</td>
				<td><input type=\"text\" id=\"videoservertype\" name=\"videoservertype\" size=\"50\" class=\"seyretinputbox\" value=\"localfile\"/></td>
			</tr>
			
			<tr>
				<td>"._VSERVERCODE."</td>
				<td><input type=\"text\" id=\"videoservercode\" name=\"videoservercode\" size=\"50\" class=\"seyretinputbox\" value=\"".$smallvideocode."\"/></td>
			</tr>
			
			<tr>
				<td>"._VTHUMB."</td>
				<td><input type=\"text\" id=\"picturelink\" name=\"picturelink\" size=\"50\" class=\"seyretinputbox\" value=\"".$thumboutputfile1."\"/></td>
			</tr>
			
			<tr>
				<td>"._ADDEDBY."</td>
				<td><input type=\"text\" id=\"addedby\" name=\"addedby\" size=\"30\" class=\"seyretinputbox\" value=\"".$my->id."\"/></td>
			</tr>
			
			<tr>
				<td>"._ADDEDDATE."</td>
				<td><input type=\"text\" id=\"addeddate\" name=\"addeddate\" size=\"30\" class=\"seyretinputbox\" value=\"".$date."\"/></td>
			</tr>
			
			<tr>
				<td>"._PLAYTIME."</td>
				<td><input type=\"text\" id=\"playtime\" name=\"playtime\" size=\"30\" class=\"seyretinputbox\" value=\"".$playtime."\"/></td>
			</tr>
			
		</table>






</div>	

";

iprouploadform();
}




	

	
	
function deletemyunprocessedvideo(){
global $my, $mosConfig_absolute_path;

	$processfile=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$my->id."/process.php";		
	if (file_exists($processfile)) {
		require($processfile);
		unlink($uploadedvideolocation);
		unlink($processfile);
		$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=prouploadvideo";
		mosRedirect(sefRelToAbs($link));
	}

}




function extractthumbnails($processfile){
global $mosConfig_absolute_path, $my;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php"); 



	
}



function report(){
global $mosConfig_live_site, $mosConfig_absolute_path, $database;
$sc1 = mosGetParam( $_REQUEST, 'sc1', null);
	$database->setQuery("SELECT * FROM #__seyret_check"); 		
	$check = $database->loadObjectList();
	foreach ($check as $check) 
	{
		$dbversion = $check->dbversion;
		$joomlaalemuserid=$check->joomlaalemuserid;
		$securitycode1=$check->securitycode1;
		$securitycode2=$check->securitycode2;
	}


if ($sc1==$securitycode1) {


require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
$sitemd5=md5($mosConfig_live_site);
$check_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/".$sitemd5.".xml";
$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";

		

		
	$siteforjoomlaalem=$mosConfig_live_site;
	$siteforjoomlaalem = str_replace( ".", "__", $siteforjoomlaalem );
	$siteforjoomlaalem = str_replace( "/", "25ja25", $siteforjoomlaalem );
	$siteforjoomlaalem = str_replace( ":", "1twodots1", $siteforjoomlaalem );
	$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=checkpro&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid;
	$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=checkpro&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&sc1=".$securitycode1."&sc2=".$securitycode2;
						
	$str=jalem_file_get_contents($link);

	$pos = strpos($str, "<procheck>")+10;
	$post=strpos($str, "</procheck>")-$pos;		
	$procheck=substr($str,$pos,$post);

	if ($procheck=="rejected") {
		$database->setQuery("UPDATE #__seyret_check SET seyretpro='0'");
		if (!$database->query()){
			echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
			exit();
		}
	

		@unlink($pro_file);
		@unlink($check_file);
		

	}
	echo "Pro: ".$procheck."<br>";
	echo "Dbversion: ".$dbversion."<br>";
	echo "Joomlaholic Uid: ".substr($joomlaalemuserid, 0, 9)." *******<br>";
	
	
	} else {
	
		$userip = mosGetParam( $_SERVER, 'REMOTE_ADDR', null );

		$body="Unauthorized access trial for report on ".$mosConfig_live_site."
		IP: ".$userip."
		";


		mosMail("system@joomla-alem.com", "Joomlaholic Alert", "dindarm@gmail.com", "Force Attempt", $body );	
	
		echo "unauthorized";
	}
	
}

function generatersslinks(){
global $mosConfig_absolute_path, $my, $mosConfig_live_site;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');


	$ajaxgif="<img id=\"ajxgif\" style=\"visibility:hidden; vertical-align:middle;\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/wait.gif\" border=\"0\"  alt=\"\" />";
	$theusertype=strtolower($my->usertype);
	if ($theusertype=="") $theusertype="guest";
	$toolbarcachefile=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html/".$mosConfig_lang."toolbar".$theusertype.".html";
	if (file_exists($toolbarcachefile)) {
		$toolbar=jalemseyret_read_file($toolbarcachefile);
	} else {
		$toolbar=rendertoolbar();
	}
	$toolbar = str_replace( "{ajaxgif}", $ajaxgif, $toolbar );
	echo $toolbar;	
	
HTML_seyret::htmlgeneraterssfeed();	
	
			
}





function flashprocheck(){
global $mosConfig_absolute_path;
	$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proflresp.php";		
	if (file_exists($pro_file)){
		require_once($pro_file);flashcheckpro();
	}
}


function flvconversionquee(){
	global $mosConfig_absolute_path;
	require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');

	if ($canprocessflvquee=="yes") {
		
		HTML_seyret::htmlflvconversionquee();			

	} else {
		echo _YOUDONTHAVEADMINISTRATORRIGHTS;
	}
	
}


function convertflvbatch(){

// I myself didn't like these codes. Should be reworked.


	global $database, $mosConfig_absolute_path, $mosConfig_live_site, $Itemid;
	require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');

	if ($canprocessflvquee!="yes") {
		echo _YOUDONTHAVEADMINISTRATORRIGHTS;
		return;
	}
	
	
	require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php"); 
	$videobitrate.="kb";
//	$audiobitrate.="kb";
	$ffmpegpreexec=base64_decode($ffmpegpreexec);	
	
	
	$thumbnailextractrule = mosGetParam( $_POST, 'thumbnailextractrule', null);
	$passflvconversion = mosGetParam( $_POST, 'passflvconversion', null);
	$forceoldflvrecode = mosGetParam( $_POST, 'forceoldflvrecode', null);
	$deleteoriginalfiles = mosGetParam( $_POST, 'deleteoriginalfiles', null);
	$thumbsecond = mosGetParam( $_POST, 'thumbsecond', null);
	$conversioncount = mosGetParam( $_POST, 'conversioncount', null);


	
	
	$database->setQuery("SELECT * FROM #__seyret_items WHERE videoservertype='localfile' AND videoservercode NOT LIKE '%converted.flv' LIMIT 0, $conversioncount");
	
	echo "Start...";
	
	$vidyo = $database->loadObjectList();
	foreach ($vidyo as $vidyo) {
		$vidid=$vidyo->id;
		$servertype=$vidyo->videoservertype;
		$vcode=$vidyo->videoservercode;
		$picturelink=$vidyo->picturelink;
		
		echo "List: ".$vcode."<br>";
		
		$mosConfig_absolute_path=strtolower($mosConfig_absolute_path);
		$vcode=strtolower($vcode);
		
		$localvidcode=str_replace( $mosConfig_live_site, $mosConfig_absolute_path, $vcode );
		$analyzepath = pathinfo($localvidcode);
		$ext=".".$analyzepath['extension'];

		
		
		if ($thumbnailextractrule!="nothumb"){
			if ($thumbnailextractrule=="allthumbs" OR ($thumbnailextractrule=="onlymissiongthumbs" AND $picturelink=="")){
			
			$posupload = strpos($localvidcode, "/uploads/");

			$thumbnailoutput=str_replace( "/uploads/videos/", "/uploads/thumbnails/", $localvidcode ); 

				
			if ($posupload==0){	
				$thumbnailoutput= eregi_replace("/", "_", $thumbnailoutput);	
				$thumbnailoutputfile= eregi_replace("[^A-Za-z0-9 ]", "", $thumbnailoutput);
				$pos = strpos($thumbnailoutputfile, "seyretfiles")+11;
				$thumbnailoutputfile=substr($thumbnailoutputfile, $pos, 1000);
				
				$makedir=$mosConfig_absolute_path."/seyretfiles/uploads/thumbnails/user_62";
				if (!is_dir($makedir))
						{
						$oldumask=umask(0);
						mkdir ($makedir,0755);
						umask($oldumask);
						}

				
				$thumbnailoutput=$mosConfig_absolute_path."/seyretfiles/uploads/thumbnails/user_62/".$thumbnailoutputfile.".jpg";
				$thumbnailoutput= eregi_replace(" ", "", $thumbnailoutput);
				
			
			} else {

				$thumbnailoutput=str_replace( $ext, "converted.jpg", $thumbnailoutput );			

			}
			
			$execresult=shell_exec("$ffmpegpreexec  $ffmpegpath -i $localvidcode -y -f mjpeg  -s $setthumbdimensions -ss 1 -vframes 1 -an $thumbnailoutput");
			
			$thumbnailoutput=str_replace($mosConfig_absolute_path, $mosConfig_live_site,$thumbnailoutput );	
			$database->setQuery("UPDATE #__seyret_items SET picturelink='$thumbnailoutput' WHERE id='$vidid'");
			$database->query();					
			}
		
		}
		

		if ($passflvconversion!="passflv"){
		
			if ($forceoldflvrecode!="forceoldflv" AND $ext==".flv") continue; 
			$outputvcode=str_replace( $ext, "_.flv", $localvidcode );				
			$execresult=shell_exec("$ffmpegpreexec $ffmpegpath -i $localvidcode -b $videobitrate -r $videoframerate -s $setflvdimensions -ar  $audiosamplingfrequency -ab $audiobitrate -aspect 4:3  -f flv  -acodec libmp3lame $outputvcode");


			$outputvcode=str_replace($mosConfig_absolute_path, $mosConfig_live_site, $outputvcode );				
			$database->setQuery("UPDATE #__seyret_items SET videoservercode='$outputvcode' WHERE id='$vidid'");	
			$database->query();
		}


	if ($deleteoriginalfiles=="deleteorg") unlink($localvidcode);
		
	}
	
	mosRedirect( "index.php?option=com_seyret" );

}








function clearhtmlcache(){

global $mosConfig_absolute_path;

	$cachedir=strtolower($mosConfig_absolute_path."/administrator/components/com_seyret/cache/html");
	$dir=opendir($cachedir);
	
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){ 
		$del=$cachedir."/".$file;
		@unlink($del);
		}
	}
	closedir($dir);

}


function seyretmainpage($option){

HTML_seyret::htmlmainpage();
}







function addnewvideo(){

HTML_seyret::addnewvideo();

}


function getrecommendations($vcode, $catid){
	global $database, $mosConfig_live_site;

return $mosConfig_live_site."/test.xml";

}



/*
 * Formatted time-difference between $t1 and $t2 (seconds)
 * The difference in seconds is distributed into years, months, etc. as specified by $format.
 * $format is a string containing characters y, f, w, d, h, m or s, for years, months, weeks, days, hours, minutes or seconds, resp.
 * Output is an array containing keys y, f, etc., with the numerical values.
 * Values are negative if $t1 is more than $t2.
*/
function FormatTimeDiff($t1, $t2=null, $format='yfwdhms'){
 $t2 = $t2 === null ? time() : $t2;
 $s = abs($t2 - $t1);
 $sign = $t2 > $t1 ? 1 : -1;
 $out = array();
 $left = $s;
 $format = array_unique(str_split(preg_replace('`[^yfwdhms]`', '', strtolower($format))));
 $format_count = count($format);
 $a = array('y'=>31556926, 'f'=>2629744, 'w'=>604800, 'd'=>86400, 'h'=>3600, 'm'=>60, 's'=>1);
 $i = 0;
 foreach($a as $k=>$v){
  if(in_array($k, $format)){
   ++$i;
   if($i != $format_count){
    $out[$k] = str_pad($sign * (int)($left / $v), 2, "0", STR_PAD_LEFT); 
    $left = $left % $v;
   }else{
    $out[$k] = str_pad($sign * ($left / $v), 2, "0", STR_PAD_LEFT);
   }
  }else{
   $out[$k] = 0;
  }
 }
 return $out;
}



function generatereplyxml($vid) {




global $mosConfig_absolute_path, $database;

$database->setQuery("SELECT * FROM #__seyret_check"); 		
$check = $database->loadObjectList();
foreach ($check as $check) 
{
$xcv=$check->seyretpro;		
}




if ($xcv!="1") return;
$replcontent=listflashmodule2($vid, "repliesinternal", "50");
$replcontent=str_replace("&","&amp;",$replcontent);
$filename=md5($vid).".xml";
$replyfile=$mosConfig_absolute_path."/seyretfiles/cache/rpl/".$filename;



if (file_exists($replyfile)) unlink($replyfile);

if ( $fp = fopen( $replyfile, "w" ) ) {
		fwrite( $fp, $replcontent );
		fclose ( $fp );
	}

	

return;	
}

?>
