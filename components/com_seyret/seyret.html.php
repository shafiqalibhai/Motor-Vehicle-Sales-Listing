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





	$image_lang_dir=$mosConfig_lang;
	$image_lang_dir_address=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir;
	if (!is_dir($image_lang_dir_address))
	{
		$image_lang_dir="english";
	}


    $seyretjson = new Services_Seyret_JSON();

	//setcookies
	$seyretcookiearray=array(
		"siteaddress"=> $mosConfig_live_site,
		"seyrettheme"=>$theme,
		"seyretimagelangdir"=>$image_lang_dir,
		"seyretuseimageads"=> $useimageadsystem,
		"seyretuseimageduration"=> $imageadduration,
		"seyretshowvideotooltips"=> $showvideotooltips,
		"seyretshowcategorytooltips"=> $showcategorytooltips

	);
	$cookieoutput = $seyretjson->encode($seyretcookiearray);	
	setcookie("seyretdsplnf", $cookieoutput, "0", "/");

	$browsing="list";
	$seyretbrowserules = mosGetParam($_COOKIE,'seyretbrwsrl',null);
	if ($seyretbrowserules==""){
	    $seyretbrowsejson = new Services_Seyret_JSON();
		$seyretbrowsearray=array(
			"orderingkey"=> $orderingkey,
			"orderingtype"=>$orderingtype,
			"browsingstyleintabs"=>$browsing,
			"videocountinvideolist"=>$videocountinvideolist			
		);
		$cookieoutput = $seyretbrowsejson->encode($seyretbrowsearray);	
		setcookie("seyretbrwsrl", $cookieoutput, "0", "/");	
	}

	
	
	$seyretplaylist = mosGetParam($_COOKIE,'seyretplaylist',null);
	if ($seyretplaylist==""){
	    $seyretplaylistjson = new Services_Seyret_JSON();
		$seyretplaylistarray=array(
			"videocount"=>"0",
			"videoids"=>"a",
			"videothumbs"=>"_st_jh_thmb_"
		);
		$cookieoutput = $seyretplaylistjson->encode($seyretplaylistarray);	
		setcookie("seyretplaylist", $cookieoutput, "0", "/");	
	}

	//
	

// $addthistoheader="
// <script type=\"text/javascript\" src=\"$mosConfig_live_site/components/com_seyret/mootools.js\"></script>
// <script type=\"text/javascript\" src=\"$mosConfig_live_site/components/com_seyret/seyret.js\"></script>
// <link href=\"$mosConfig_live_site/components/com_seyret/themes/$theme/style/seyret_style.css\" rel=\"stylesheet\" type=\"text/css\" />
// ";
// $mainframe->addCustomHeadTag($addthistoheader);

if ($nohtml!="1"){
?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_seyret/mootools.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_seyret/seyret.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_seyret/ufo.js"></script>
<link href="<?php echo $mosConfig_live_site;?>/components/com_seyret/themes/<?php echo $theme;?>/style/seyret_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="<?php echo $mosConfig_live_site;?>/components/com_seyret/themes/<?php echo $theme;?>/style/seyret.tabs.css" />
<?php
}

class HTML_seyret {
//Function:htmlseyretfrontpg->start ***************************
function htmlseyretfrontpg() {
global $database, $Itemid, $mosConfig_live_site, $my, $mosConfig_lang, $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	




$downloadcachingtimeout="";
$vtitle="";
$vcomment="";
$cid="";
$catid=mosGetParam($_REQUEST,'catid',null);
$vidid="";



		
	$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";		
	
	if (file_exists($pro_file) AND $disablepro<>"1") {
		$pro="1";
	} else {
		$pro="0";
	}
	




		$randomfeaturedvideo="<img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/video.png\" width=\"".$videowidth."px\" border=\"0\" alt=\"\" />";
		$imagead=getseyretimagead($vidid);


?>

<div style="position:relative;"><div id="blockit" style="position:absolute; left:0px; top:0px; width:100%; height:700px; visibility:hidden;"></div></div>
<?php
		$cid = mosGetParam($_REQUEST,'catid',null);
		if ($cid=="" or $cid=="undefined") {
		$newcid="0";
		} else {
		$newcid=$cid;
		}
	

	
		
	$frontpagecachefile=$mosConfig_absolute_path."/administrator/components/com_seyret//cache/html/".$mosConfig_lang."frontpage".$newcid.".html";
	if (file_exists($frontpagecachefile)) {
		$template=jalemseyret_read_file($frontpagecachefile);
	} else {

		//read main template
		$templatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/frontpage.php";
		$template= jalemseyret_read_file($templatefile)."<div id=\"hiddenvalues\" style=\"display:none;\"><div id=\"hiddenimagead\">$randomfeaturedvideo</div></div>";
		
		//read videomainarea
		$videomainareafile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/videomainarea.php";
		$videomainarea= jalemseyret_read_file($videomainareafile);
		
		//read videodirectories
		$videodirectiestemplatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/grouplist.php";
		$videodirectoriestemplate= jalemseyret_read_file($videodirectiestemplatefile);

		$template = str_replace( "{videodirectoriesheader}", $videodirectoriestemplate, $template );
		$template = str_replace( "{videomainarea}", $videomainarea, $template );

		$videorepliestothis=renderrepliestovideo("0", "notajax");		



		$catcachefile=$mosConfig_absolute_path."/administrator/components/com_seyret//cache/html/".$mosConfig_lang."category".$newcid.".html";
		
		if (file_exists($catcachefile)){
			$categorylist=jalemseyret_read_file($catcachefile);
		} else {
			$categorylist=HTML_seyret::htmlvideocatlist($newcid);
		}

		
		
		$embedcode="<div id=\"embedcode\"></div>";
		$videodirectlink="<div id=\"videodirectlink\"></div>";
		$comments="<div id=\"comments\"></div>";
		$totalhit="<span id=\"totalhit\"></span>";
		$addedby="<div id=\"addedby\"></div>";
		$totalvotes="<span id=\"totalvotes\"></span>";
		$rating="<span id=\"vidrating\"></span>";
		$addeddate="<div id=\"addeddate\"></div>";
		$useravatar="<span id=\"useravatar\"></span>";	
		$videotags="<span id=\"videotags\"></span>";
		$bookmarks="<div id=\"bookmarks\"  class=\"bookmarks\"></div>";
		$votearea="<div id=\"votearea\" class=\"votearea\"></div>";
		$videooperationsarea="<span id=\"videooperationsarea\"></span>";		
		$seyretcredit="<div id=\"seyretcredit\">Powered by <a href=\"http://www.joomlaholic.com\">Seyret</a>";
		$commentstitle="<div id=\"commentstitle\">"._DISCUSSIONONFORUM."</div>";
		$aboutthisvideo="<div id=\"aboutthisvideotitle\">"._ABOUTTHISVIDEO."</div>";
		$isareplyto="<div id=\"isareplytocontainer\"></div>";	
		$videoreplies="<div id=\"videorepliescontainer\">".$videorepliestothis."</div>";
		
			
		
		
		$template = str_replace( "{videoembedcode}", $embedcode, $template );
		$template = str_replace( "{videourl}", $videodirectlink, $template );
		$template = str_replace( "{useravatar}", $useravatar, $template );		
		$template = str_replace( "{videotags}", $videotags, $template );	
		$template = str_replace( "{bookmarks}", $bookmarks, $template );	
		$template = str_replace( "{comments}", $comments, $template );	
		$template = str_replace( "{videovotearea}", $votearea, $template );	
		$template = str_replace( "{totalhit}", $totalhit, $template );	
		$template = str_replace( "{addedby}", $addedby, $template );	
		$template = str_replace( "{totalvotes}", $totalvotes, $template );	
		$template = str_replace( "{rating}", $rating, $template );	
		$template = str_replace( "{addeddate}", $addeddate, $template );	
		$template = str_replace( "{videooperations}", $videooperationsarea, $template );
		$template = str_replace( "{categorylist}", $categorylist, $template );		
		$template = str_replace( "{seyretcredit}", $seyretcredit, $template );		
		$template = str_replace( "{commentstitle}", $commentstitle, $template );		
		$template = str_replace( "{aboutthisvideotitle}", $aboutthisvideo, $template );
		$template = str_replace( "{isareplyto}", $isareplyto, $template );
		$template = str_replace( "{videoreplies}", $videoreplies, $template );
		
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/longtail_config.php');	
	
	$longtailapi="";
	if ($d!="") {
		$longtailapi= "<script language=\"JavaScript\" src=\"http://www.ltassrv.com/serve/api5.5.asp?d=".$d."s=".$s."&c=".$c."&v=".$v."\"></script>";	
	}
	$template = str_replace( "{longtailapi}", $longtailapi, $template );
		
		

	if ( $fp = fopen( $frontpagecachefile, "w" ) ) {
			fwrite( $fp, $template );
			fclose ( $fp );
		}
	
	
	}	//cache 	 ends
	
	
			$ajaxgif="<img id=\"ajxgif\" style=\"visibility:hidden; vertical-align:middle;\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/wait.gif\" border=\"0\"  alt=\"\" />";

			$theusertype=strtolower($my->usertype);
			if ($theusertype=="") $theusertype="guest";
			$toolbarcachefile=$mosConfig_absolute_path."/administrator/components/com_seyret//cache/html/".$mosConfig_lang."toolbar".$theusertype.".html";
			if (file_exists($toolbarcachefile)) {
				$toolbar=jalemseyret_read_file($toolbarcachefile);
			} else {
				$toolbar=rendertoolbar();
			}	
	


	

	$videolist=videolist("0",$cid);
	$videolist="<div id=\"videolistdiv\">".$videolist."</div>";

	$videotitle="<div id=\"videotitlearea\" class=\"videotitleinmainarea\">$vtitle</div>";
	$videodetailsarea="<div id=\"videodetailsarea\" class=\"videodetailsinmainarea\">$vcomment</div>";


	if ($useimageadsystem=="1") {
		$videoembedarea="<div id=\"showvideo\"  style=\"min-height:".$videoheight."px; min-width:".$videowidth."\"   class=\"videoarea\">".$imagead."</div>";
	} else  {
		$videoembedarea="<div id=\"showvideo\"  style=\"min-height:".$videoheight."px;\"  min-width:".$videowidth."\" class=\"videoarea\">".$randomfeaturedvideo."</div>";
	}
	
	
	
	
	

	
	//write template values


	
	$template = str_replace( "{toolbar}", $toolbar, $template );
	$template = str_replace( "{ajaxgif}", $ajaxgif, $template );
	$template = str_replace( "{videotitle}", $videotitle, $template );
	$template = str_replace( "{showvideodetailsarea}", $videodetailsarea, $template );
	$template = str_replace( "{videolistarea}", $videolist."", $template );
	$template = str_replace( "{embedvideoarea}", $videoembedarea, $template );

	$template_array=preg_split("/{seyretmod/", $template);
		
	foreach ($template_array as $template_array){
		if (substr($template_array, 1, 1)=="}"){
			$modulepos="seyretmod".substr($template_array, 0, 1);
			
			if (class_exists("JModuleHelper")){//1.5 compatibility
				$seyretbirbucuk_modules = &JModuleHelper::getModules($modulepos);
				foreach ($seyretbirbucuk_modules as $seyretbirbucuk) {
					echo JModuleHelper::renderModule( $seyretbirbucuk);
				}				
			} else {
				mosLoadModules ($modulepos,-1);
			}

			
			
			echo substr($template_array, 2);     
		} else {
			echo $template_array;

		}
		
	}

}//end of frontpage




function htmlvideocatlist($cid){
global $database, $mosConfig_absolute_path,$mosConfig_live_site, $Itemid, $mosConfig_lang;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");  

$catid="";

if ($cid!=''){
	$database->setQuery("SELECT * FROM #__seyret_categories WHERE id='$cid'");
	$cat = $database->loadObjectList();
	foreach ($cat as $cat) {
	$catid = $cat->catid;
	$vidcatname = $cat->categoryname;
	}//get cat id and catname here

}

$database->setQuery( "SELECT * FROM #__seyret_categories WHERE parentcat='$catid' ORDER BY categoryname ASC" );
$rows = $database->loadObjectList();
if ($database->getErrorNum()) {
	echo $database->stderr();
	return false;
	} //get sub categories
$linkedpath=ShowSeyretCategoryLinkedPath($catid);
$videocatd="<span class=\"linkedpath\">".$linkedpath."</span>"."<table width=\"100%\"><tr>";

		$column=1;
		for($i=0; $i < count( $rows ); $i++) 
		{
			$row = $rows[$i];	
			$videocatd.="<td>";
			
			if ($useajaxbrowsing=="1"){
			$catname="<span style=\"cursor:pointer;\" onclick=\"sndReqDirectory(".$row->id.")\">".$row->categoryname."</span>";
			} else {
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&catid=".$row->id;
			$seflink=sefRelToAbs($link);
			$catname="<a href=\"".$seflink."\">".$row->categoryname."</a>";
			}
			

			
			

				$database->setQuery( "SELECT * FROM #__seyret_categories WHERE parentcat='$row->catid'  ORDER BY categoryname ASC" );
				$rowsub = $database->loadObjectList();
				$rowsubs="";
				$subcats="";
				if ($database->getErrorNum()) {
					echo $database->stderr();
					return false;
					}
				$subnames="";
				for($m=0; $m < count( $rowsub ); $m++) {
					$rowsubs = $rowsub[$m];

					if ($useajaxbrowsing=="1"){
						$subcats.="<span style=\"cursor:pointer;\" onclick=\"sndReqDirectory(".$rowsubs->id.")\">".$rowsubs->categoryname."</span>, ";
						
						} else {
						$link="index.php?option=com_seyret&Itemid=".$Itemid."&catid=".$rowsubs->id;
						$seflink=sefRelToAbs($link);						
						
						$subcats.="<a href=\"".$seflink."\">".$rowsubs->categoryname."</a>, ";
						}

				$subnames.=$rowsubs->categoryname.", ";

				}
				
		$total="";
				
		if ($cachecategoryimages=="1") {
			//---------------------------------------------------
	        //add by Ngo Van Luyen 09-10-2008
			require_once($mosConfig_absolute_path."/components/com_seyret/includes/downloadimg.php");

	        $catimgdir = "seyretfiles/images";

	        $imagename ="cat_" . $row->id.".jpg";
	        $imgpath = $catimgdir."/".$imagename;
	        $fullpath = $mosConfig_absolute_path."/".$imgpath;

	        if (file_exists($fullpath)){
	            $imglink = $imgpath;

	        } else {
	    		$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1' AND catid='$row->catid'");
	    		$total = $database->loadResult();
	    		if ($total<>0){
	    			$database->setQuery("SELECT * FROM #__seyret_items WHERE  published='1' AND catid='$row->catid' ORDER BY addeddate DESC LIMIT 0, 1");
	    			$vid = $database->loadObjectList();
	    			foreach ($vid as $vid) {
	        			$imglink = $vid->picturelink;
	        			if ($imglink==""){
	        				$imglink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
	        			} else {

	                        $test = substr($imglink, 0, 7);
	                        if ($test == "images/"){ // if local file
	                            $source = $mosConfig_absolute_path."/".$imglink;
	                            $des = $mosConfig_absolute_path."/".$imgpath;
	                            copy($source, $des);
	                            $imglink = $imgpath;
	                        } else if ($test == "http://"){ // remote file
	                            $localf = $mosConfig_absolute_path."/".$catimgdir."/";
	                            $klpicturelink = kuluyen_getAndSave4Dir($imglink, $localf, $imagename);
	                            $imglink = $imgpath;
	                        }
	                    }
	    			}
	    		} else {
	    			  $imglink=$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/directory.gif";
	    		}
	        }	

			//---------------------------------------------------		
		} else {
			$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1' AND catid='$row->catid'");
			$total = $database->loadResult(); 
			if ($total<>0){
				$database->setQuery("SELECT * FROM #__seyret_items WHERE  published='1' AND catid='$row->catid' ORDER BY addeddate DESC LIMIT 0, 1");
				$vid = $database->loadObjectList();
				foreach ($vid as $vid) {
				$imglink = $vid->picturelink;
				if ($imglink==""){
					$imglink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
					}
				}
			} else {
				  $imglink=$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/directory.gif";		
			}		
		
		}		
		
			


		
			
			
			$title=_CATEGORYINFO."::<table>
			<tr><td width='40%' valign='top' >"._CATEGORYNAME."</td><td width='1%'  valign='top'>:</td><td width='89%'>".$row->categoryname."</td></tr>
			<tr><td  valign='top'>"._SUBCATEGORIES."</td><td  valign='top'>:</td><td>".$subnames."</td></tr>
			<tr><td>"._VIDEOSINCAT."</td><td>:</td><td>".$total."</td></tr>
			</table>";
		


		$dirimage="<img class=\"videodirimg\" title=\"$title\" src=\"".$imglink ."\" alt=\"\" />";

		
		$subtemplatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/directory.php";
		$subtemplate= jalemseyret_read_file($subtemplatefile);
		$subtemplate = str_replace( "{dirimage}", $dirimage, $subtemplate );			
		$subtemplate = str_replace( "{dirname}", $catname, $subtemplate );			
		$subtemplate = str_replace( "{dirsubcategories}", $subcats, $subtemplate );	
		$videocatd.=$subtemplate;
		$videocatd.="</td>";
		if ($column==1) {
			$column=2;
			}
			else
			{
			$videocatd.="</tr><tr>";
			$column=1;
			}
		} // end of for next
	if (substr($videocatd, -4)=="<tr>"){
		$videocatd=substr($videocatd, 0, -4);
	}
	$videocatd.="</table>";
	
	if ($cid=="") $cid="0";
	$catcachefile=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html/".$mosConfig_lang."category".$cid.".html";

	if ( $fp = fopen( $catcachefile, "w" ) ) {
			fwrite( $fp, $videocatd );
			fclose ( $fp );
		}

	return $videocatd;
	
}

function htmladdlinkfront() {
global $database, $mosConfig_live_site, $mosConfig_absolute_path, $Itemid;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");
		$database->setQuery( "SELECT id, categoryname"
		."\nFROM #__seyret_categories");

		$mycats=array();						
		$mycats[] = mosHTML::makeOption( '', "Top" );
		$cats = $database->loadObjectList();
		foreach ($cats as $cats) 
		{
		$myid = $cats->id;
		$mycname = $cats->categoryname;


		$mycats[] = mosHTML::makeOption( $myid, $mycname );
		}
		$catslist = mosHTML::selectList($mycats,"catid",'class="inputbox" size="1"',"value","text");
			
		$ajaxgif="<img id=\"ajxgif\" style=\"visibility:hidden; vertical-align:middle;\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/wait.gif\" border=\"0\"  alt=\"\" /><span id=\"hiddenimagead\"></span>";

		$ajx=rendertoolbar();
		$ajx = str_replace( "{ajaxgif}", $ajaxgif, $ajx );
		echo $ajx;
		
		
		
		$seyretrply=mosGetParam($_COOKIE,'seyretrply',null);
		
		if ($seyretrply!="")  {
			$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$seyretrply'");
			$vids = $database->loadObjectList();
			foreach ($vids as $vids) {
				$thevideotitle=$vids->title;
			}
			echo "<div class=\"addingreplyto\">"._YOUAREADDINGAREPLYTO.": ".$thevideotitle."</div>";
		}
		
		
?>
	
<form action="index.php?option=com_seyret&Itemid=<?php echo $Itemid; ?>" method="post" name="adminForm">

	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="3"><?php echo _ADDVIDEOINFO;?></td>
		</tr>
		
		<tr>
			<td><?php echo _INPUTLINK;?></td><td><input type="text" id="videourl" name="videourl" size="50" class="text_area"/></td>
			<td><button type="submit" ><?php echo _APPLY;?></td>
		</tr>	
  </table>
	
	<div id="videodetailsinput"></div>
	 
<input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />	 
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="applyvideolink" />
<input type="hidden" name="tasksender" value="addlinkfront" />

</form>
<?php

 

}


function htmlvideodirectlink($id) {
global $database, $Itemid, $mosConfig_live_site, $my, $mosConfig_lang, $mosConfig_absolute_path, $mainframe, $mosConfig_offset, $_MAMBOTS;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	




$addvideobutton="";
$useruploadvideo="";
$pendingvideobutton ="";
$str="";

?>
<div style="position:relative;"><div id="blockit" style="position:absolute; left:0px; top:0px; width:100%; height:700px; visibility:hidden;"></div></div>



<?php
	

	$replytolink="";
	$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
	$vids = $database->loadObjectList();
	foreach ($vids as $vids) {
		$catid = $vids->catid;
		$thevideotitle=$vids->title;
		$theviddetails=$vids->itemcomment;
		$vtype=$vids->videoservertype;
		$vcode=$vids->videoservercode;
		$vhit=$vids->hit;
		$accesslevel=$vids->accesslevel;
		$frombackupid=$vids->backupid;
		$addedby=$vids->addedby;	
		$addeddate=$vids->addeddate;
		$vrclick=$vids->voteclick;
		$vratingtotal=$vids->votetotal;
		$isdownloadable=$vids->isdownloadable;
		$vthumb=$vids->picturelink;
		$videotags=$vids->videotags;
		$videourl=$vids->videourl;
		$isreplyto=$vids->isreplyto;
		$vpublished=$vids->published;
		
		
	}

	if ($vpublished!="1") {
		$msg=_VIDEONOTFOUND;
		mosRedirect( "index.php?option=com_seyret&Itemid=$Itemid", $msg);
	}
	
	$myid=$my->id;
	$auppro=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proalphup.php";	
	if ($integrateaup=="1" AND file_exists($auppro) AND $myid!=$addedby ) {
		require_once($auppro);
		aupviewvideo($addedby);	
	}	
	
	
	if ($isreplyto>0){
		$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$isreplyto'");
		$vids = $database->loadObjectList();
		foreach ($vids as $vids) {
			$replytotitle=$vids->title;
			
		}

		$rlink=sefRelToAbs("index.php?option=com_seyret&task=videodirectlink&id=$isreplyto&Itemid=$Itemid");
					
		$replytolink="<div id=\"isareplyto\">"._THISISAREPLYTOPRE."<a href=\"$rlink\"> ".$replytotitle." </a>"._THISISAREPLYTOPOST."</div>";
	
	}
	
	
	$addeddate = _ADDEDDATE." :".mosFormatDate( $addeddate, "%d %B %Y" );
	
	if ($showoriginallink=="1" AND $vtype!="localfile" AND $videourl!=""){
		$addurl="<div><div id=\"originalvideolink\"><a href=\"".$videourl."\" target=\"_blank\">"._ORIGINALVIDEOISHERE."</a></div></div>";
	} else {
		$addurl="";
	}

	$theviddetails=$addurl.$theviddetails;	
	$totalhit=$vhit+1;
	$totalhit=_HIT." :".$totalhit;
	$totalvotes=_NUMBEROFVOTE." :".$vrclick;
	
	if ($vrclick<>0){
			$intrating=($vratingtotal/$vrclick)*100;
			$nrating=ceil($intrating);
			$intrating=$nrating/100;
		}
		else {
			$intrating=0;
			$vrclick=_NOVOTE;
		}

	
	$rating=_RATING." :".$intrating;
	
	
	$mainframe->SetPageTitle( $thevideotitle );
	$striptheviddetails=strip_tags($theviddetails);
	$mainframe->prependMetaTag( 'description', $striptheviddetails );	
	$mainframe->prependMetaTag( 'keywords', $videotags );	
	
	if ($vtype==""){
		$query = "DELETE FROM #__seyret_items WHERE id='$id'";
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
		mosRedirect( "index.php?option=com_seyret");
	} else {
	
	//strripos doesn't work in php 4 :(
	$newcatid="";
	$pos = strpos($catid, "**");
	if ($pos<>0){
		$catid_array=explode("**",$catid);
		$arraylpos=count($catid_array)-1;
		$newcat=$catid_array[$arraylpos];
	} else {
		$newcat=$catid;
	}
	$newcatid = str_replace( "*", "", $newcat );	
	$cid = str_replace( "#", "", $newcatid );	
	//-------
	
	// if remote server, then download and save

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

	

	$videorepliestothis=renderrepliestovideo($id, "notajax");
	

	

	//read main template
	$templatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/frontpage.php";
	$template= jalemseyret_read_file($templatefile)."<div id=\"hiddenvalues\" style=\"display:none;\"><div id=\"hiddenimagead\">".$embed."</div><div id=\"hiddenthevideoid\">".$id."</div></div>";
	
	//read videomainarea
	$videomainareafile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/videomainarea.php";
	$videomainarea= jalemseyret_read_file($videomainareafile);
	
	//read videodirectories
	$videodirectiestemplatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/grouplist.php";
	$videodirectoriestemplate= jalemseyret_read_file($videodirectiestemplatefile);


	$ajaxgif="<img id=\"ajxgif\" style=\"visibility:hidden; vertical-align:middle;\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/wait.gif\" border=\"0\"  alt=\"\" />";

	
	

	$videolist=videolist("0",$cid);
	$videolist="<div id=\"videolistdiv\">".$videolist."</div>";
	
	$theviddetails="<span id=\"videodetailsreadmore\">".$theviddetails."</span>";
	$theviddetails=generatereadmorelink($theviddetails, "", "videodetailsreadmore2");

	
	$ajaxgif="<img id=\"ajxgif\" style=\"visibility:hidden; vertical-align:middle;\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/wait.gif\" border=\"0\"  alt=\"\" />";
	
	$videotitle="<div id=\"videotitlearea\" class=\"videotitleinmainarea\">".$thevideotitle."</div>";
	$videodetailsarea="<div id=\"videodetailsarea\" class=\"videodetailsinmainarea\">".$theviddetails."</div>";
	$videooperationsarea="<div id=\"videooperationsarea\">".$voperations."</div>";
	if ($useimageadsystem=="1") {
	$videoembedarea="<div id=\"showvideo\" style=\"min-height:".$videoheight."px;  min-width:".$videowidth."px;\" class=\"videoarea\">".$imagead."</div>";
	} else {
	$videoembedarea="<div id=\"showvideo\" style=\"min-height:".$videoheight."px;  min-width:".$videowidth."px;\"  class=\"videoarea\" >".$embed."</div>";
	}
	
	$getbookmarks=generatebookmarks($id, $thevideotitle);
	
	
	$votearea="<div id=\"votearea\" class=\"votearea\">".$votearea."</div>";
	$embedcode="<div id=\"embedcode\">".$embedcode."</div>";
	$videodirectlink="<div id=\"videodirectlink\">".$videodirectlink."</div>";
	$addedby="<div id=\"addedby\" class=\"addedby\">".$addedby."</div>";
	$totalhit="<span id=\"totalhit\" class=\"totalhit\">".$totalhit."</span>";
	$totalvotes="<span id=\"totalvotes\" class=\"totalvotes\">".$totalvotes."</span>";
	$rating="<span id=\"vidrating\" class=\"vidrating\">".$rating."</span>";
	$useravatar="<span id=\"useravatar\" class=\"useravatar\">".$useravatar."</span>";
	$addeddate="<div id=\"addeddate\" class=\"addeddate\">".$addeddate."</div>";
	$videotags="<div id=\"videotags\" class=\"videotags\">".$videotagslinked."</div>";
	$getbookmarks="<div id=\"bookmarks\" class=\"bookmarks\">".$getbookmarks."</div>";	

	$seyretcredit="<div id=\"seyretcredit\">Powered by <a href=\"http://www.joomlaholic.com\">Seyret</a>";
	$commentstitle="<div id=\"commentstitle\">"._DISCUSSIONONFORUM."</div>";
	$aboutthisvideo="<div id=\"aboutthisvideotitle\">"._ABOUTTHISVIDEO."</div>";
	$isareplyto="<div id=\"isareplytocontainer\">".$replytolink."</div>";	
	$videoreplies="<div id=\"videorepliescontainer\">".$videorepliestothis."</div>";	

	
	
	if ($cid=="") {
	$newcid="0";
	} else {
	$newcid=$cid;
	}
	
	$catcachefile=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html/".$mosConfig_lang."category".$newcid.".html";
	
	if (file_exists($catcachefile)){
		$categorylist=jalemseyret_read_file($catcachefile);
	} else {
		$categorylist=HTML_seyret::htmlvideocatlist($cid);
	}
	
	
	
	
	$comments="<div id=\"comments\">".getseyretcomments($id)."</div>";
	
	$toolbar=rendertoolbar();
	//write template values

	$template = str_replace( "{videodirectoriesheader}", $videodirectoriestemplate, $template );
	$template = str_replace( "{addvideobutton}", $addvideobutton, $template );
	$template = str_replace( "{uploadvideobutton}", $useruploadvideo, $template );
	$template = str_replace( "{adminshowpendingvideobutton}", $pendingvideobutton, $template );
	$template = str_replace( "{ajaxgif}", $ajaxgif, $template );
	$template = str_replace( "{videomainarea}", $videomainarea, $template );
	$template = str_replace( "{videotitle}", $videotitle, $template );
	$template = str_replace( "{showvideodetailsarea}", $videodetailsarea, $template );
	$template = str_replace( "{videooperations}", $videooperationsarea, $template );
	$template = str_replace( "{addedby}", $addedby, $template );
	$template = str_replace( "{totalhit}", $totalhit, $template );
	$template = str_replace( "{totalvotes}", $totalvotes, $template );
	$template = str_replace( "{rating}", $rating, $template );
	$template = str_replace( "{useravatar}", $useravatar, $template );
	$template = str_replace( "{addeddate}", $addeddate, $template );
	$template = str_replace( "{videolistarea}", $videolist."", $template );
	$template = str_replace( "{embedvideoarea}", $videoembedarea, $template );
	$template = str_replace( "{videoembedcode}", $embedcode, $template );
	$template = str_replace( "{videourl}", $videodirectlink, $template );
	$template = str_replace( "{videogrouptitle}", _VIDEOGROUPTITLE, $template );	
	$template = str_replace( "{categorylist}", $categorylist, $template );	
	$template = str_replace( "{videovotearea}", $votearea, $template );	
	$template = str_replace( "{comments}", $comments, $template );	
	$template = str_replace( "{toolbar}", $toolbar, $template );
	$template = str_replace( "{ajaxgif}", $ajaxgif, $template );
	$template = str_replace( "{videotags}", $videotags, $template );	
	$template = str_replace( "{bookmarks}", $getbookmarks, $template );	
	$template = str_replace( "{seyretcredit}", $seyretcredit, $template );	
	$template = str_replace( "{commentstitle}", $commentstitle, $template );	
	$template = str_replace( "{aboutthisvideotitle}", $aboutthisvideo, $template );
	$template = str_replace( "{isareplyto}", $isareplyto, $template );
	$template = str_replace( "{videoreplies}", $videoreplies, $template );	
	
	
	
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/longtail_config.php');	
	
	$longtailapi="";
	if ($d!="") {
		$longtailapi= "<script language=\"JavaScript\" src=\"http://www.ltassrv.com/serve/api5.5.asp?d=".$d."s=".$s."&c=".$c."&v=".$v."\"></script>";	
	}
	$template = str_replace( "{longtailapi}", $longtailapi, $template );
		

	$template_array=preg_split("/{seyretmod/", $template);
		
		foreach ($template_array as $template_array){
			if (substr($template_array, 1, 1)=="}"){
				$modulepos="seyretmod".substr($template_array, 0, 1);
				
				if (class_exists("JModuleHelper")){//1.5 compatibility
					$seyretbirbucuk_modules = &JModuleHelper::getModules($modulepos);
					foreach ($seyretbirbucuk_modules as $seyretbirbucuk) {
					    echo JModuleHelper::renderModule( $seyretbirbucuk);
					}				
				} else {
					mosLoadModules ($modulepos,-1);
				}

				
				
				echo substr($template_array, 2);     
			} else {
				echo $template_array;
			}
			
		}
	}
	
}//end of htmlvideodirectlink



function htmleditvideos($id){
global $database, $mosConfig_absolute_path, $mosConfig_live_site, $image_lang_dir;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

$repthevideotitle="";
$downloadcachingtimeout ="";
$pro="";

$sender = mosGetParam($_REQUEST,'sender',null);
if ($sender==""){
$sender="editvideos";
}


	$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
	$vids = $database->loadObjectList();
	foreach ($vids as $vids) {
	$videocatid = $vids->catid;
	$thevideotitle=$vids->title;
	$theviddetails=$vids->itemcomment;
	$vtype=$vids->videoservertype;
	$vcode=$vids->videoservercode;
	$vthumb=$vids->picturelink;
	$owner=$vids->addedby;
	$vdate=$vids->addeddate;
	$vpublish=$vids->published;
	$vfeatured=$vids->featured;
	$thevideotags=$vids->videotags;
	$seyretrply=$vids->isreplyto;
	}

	if ($vtype==""){
		$query = "DELETE FROM #__seyret_items WHERE id='$id'";
		$database->setQuery( $query );
		if (!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		}
		mosRedirect( "index.php?option=com_seyret");
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
	$categorylist = mosHTML::selectList($videocats,"catid",'class="inputbox" size="1"',"value","text",$videocatid );





	$replyrow="";
	
	if ($seyretrply!="")  {
		$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$seyretrply'");
		$vids = $database->loadObjectList();
		foreach ($vids as $vids) {
			$repthevideotitle=$vids->title;
		}
		
			$thisisareply = array();
			$thisisareply[] = mosHTML::makeOption( "0", _NOTAREPLY );
			$thisisareply[] = mosHTML::makeOption( $seyretrply, $repthevideotitle );
			$replylist = mosHTML::selectList($thisisareply,"isreplyto",'id="isreplyto" size="1"',"value","text",$seyretrply );
		
		$replyrow="<tr><td>"._ISAREPLYTO."</td><td>".$replylist."</td></tr>";
	}
	
	


		
	$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$vtype.".php";
    require_once($includepluginfile);
	
	$fvtype=str_replace(".","",$vtype);
	$functionname=$fvtype."embed"; 
	$embed=$functionname($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $videocatid);

	$yesno[] = mosHTML::makeOption( 0, _NO );
	$yesno[] = mosHTML::makeOption( 1, _YES );
	$isfeatured=mosHTML::selectList( $yesno, 'featured', 'class="inputbox" size="1"', 'value', 'text', $vfeatured );
	
	
?>
<form action="index2.php" method="post" name="adminForm">
<table width="100%" style="border:1px solid #999999;">
	<tr>
		<td align="center"><?php echo $embed;?>
		</td>
	</tr>
</table>
<br/>
<table width="100%" style="border:1px solid #FFCC00;">
	<tr>
	<td width="30%"><?php echo _VIDEOTITLE;?></td><td  colspan="2"><input type="text" id="title" name="title" size="40" class="text_area"value="<?php echo $thevideotitle;?>"/></td>
	</tr>
	
	<tr>
	<td><?php echo _DETAILS;?></td><td  colspan="2">
	
	<?php 
			if ($usejoomlaeditor=="1"){
			editorArea( 'editor1', $theviddetails, 'itemcomment', '100%;', '250', '75', '20' );
		} else {
			echo "<input type=\"text\" id=\"itemcomment\" name=\"itemcomment\" size=\"50\" class=\"seyretinputbox\" value=\"".$theviddetails."\"/>";
		}
	?>
	
	</td>
	</tr>

	<tr>
	<td><?php echo _TAGS;?></td><td  colspan="2"><input type="text" id="videotags" name="videotags" size="40" class="text_area"value="<?php echo $thevideotags;?>"/></td>
	</tr>
	
	<tr>
	<td><?php echo _VIDEOCAT_PARENT;?></td><td colspan="2"><?php echo $categorylist;?></td>
	</tr>	

	<tr>
	<td width="30%"><?php echo _VTHUMB;?></td><td colspan="2"><input type="text" id="picturelink" name="picturelink" size="40" class="text_area"value="<?php echo $vthumb;?>"/></td>
	</tr>

	<tr>
	<td width="30%"><?php echo _VSERVERTYPE;?></td><td><input type="text" id="videoservertype" name="videoservertype" size="20" class="text_area"value="<?php echo $vtype;?>"/></td><td rowspan="5"><img width="90px" src="<?php echo $vthumb;?>" alt=""/></td>
	</tr>

	<tr>
	<td width="30%"><?php echo _VSERVERCODE;?></td><td><input type="text" id="videoservercode" name="videoservercode" size="20" class="text_area"value="<?php echo $vcode;?>"/></td>
	</tr>

	<tr>
	<td width="30%"><?php echo _ADDEDBY;?></td><td><input type="text" id="addedby" name="addedby" size="20" class="text_area"value="<?php echo $owner;?>"/></td>
	</tr>

	<tr>
	<td width="30%"><?php echo _ADDEDDATE;?></td><td><input type="text" id="addeddate" name="addeddate" size="20" class="text_area"value="<?php echo $vdate;?>"/></td>
	</tr>

	<tr>
	<td width="30%"><?php echo _IFPUBLISHED;?></td><td><input type="radio" name="published" value="0" checked="checked" /><?php echo _NO;?><input type="radio" name="published" value="1" <?php 
							if ($vpublish == "1") {
							echo "checked=\"checked\" ";
							} ?> /> <?php echo _YES;?> </td>
	</tr>

	<tr>
	<td width="30%"><?php echo _FEATURED;?></td><td><?php echo $isfeatured;?></td>
	</tr>
<?php echo $replyrow;?>	
	
	<tr>
	<td colspan="2" align="center"><button type="submit"><?php echo _SAVE;?></td><td><?php echo "<a href=\"javascript:if (confirm('"._DELETEVIDEOCONFIRMMESSAGE."')){ window.location.href='index.php?option=com_seyret&task=deletevideo&id=".$id."'}\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/delete.png\" border=\"0\" alt=\"\" />"._DELETEBTN."</a>";?></td>
	</tr>	

	
	
</table>
<input type="hidden" name="tasksender" value="<?php echo $sender;?>">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="savevideoitem" />


</form>	
<?php	
}


function htmluploadvideo(){
global $database, $mosConfig_absolute_path, $mosConfig_live_site;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

$videomaxuploadsize=$videomaxuploadsize*1000000;
$thumbmaxuploadsize=$thumbmaxuploadsize*1000000;
		
$toolbar=rendertoolbar();
$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
echo $toolbar;

?>
<form action="index.php?option=com_seyret&Itemid=<?php echo $Itemid; ?>" enctype="multipart/form-data" method="post" name="adminForm">
<table width="100%" style="text-align:left;">
	
	<tr>
	<td width="100%"><?php echo _UPLOADVIDEOINFORM;?></td>
	<td><?php echo "<img align=\"center\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/uploadvideo.png\" border=\"0\"  alt=\"\" />";?></td>
	</tr>
	
	<tr>
	<td colspan="2">
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $videomaxuploadsize;?>">
		<input name="useruploadedvideo" type="file"><p>
	</td>
	</tr>

	<tr>
	<td width="100%"><?php echo _UPLOADTHUMBNAILINFORM;?></td>
	<td><?php echo "<img align=\"center\" src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/uploadthumb.png\" border=\"0\"  alt=\"\" />";?></td>
	</tr>
	
	<tr>
	<td colspan="2">
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $thumbmaxuploadsize;?>">
		<input name="useruploadedthumb" type="file"><p>
	</td>
	</tr>
	
	<tr>
		<td  colspan="2"><input type="hidden" name="novideothumbnail" id="novideothumbnail" value="0"/><input type="checkbox" name="novideothumbnail" id="novideothumbnail" value="1"/><label for="novideothumbnail"><?php echo _NOTHUMBNAILFORTHISVIDEO;?></label>
		</td>
	</tr>
	
	<tr>
		<td  colspan="2">
<input type="submit" value="<?php echo _UPLOADANDGOTONEXT;?>">
		</td>
	</tr>
	
</table>
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="processvideoupload" />
</form>
<?php
}


function htmlprouploadvideo(){
global $database, $mosConfig_absolute_path, $mosConfig_live_site, $my, $mainframe, $Itemid, $image_lang_dir;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

$videomaxuploadsizekb=$videomaxuploadsize*1000000;
$thumbmaxuploadsizekb=$thumbmaxuploadsize*1000000;
		
		
		
$toolbar=rendertoolbar();
$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
echo $toolbar;


	$processfile=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$my->id."/process.php";		
	if (file_exists($processfile)) {
		require($processfile);
		echo "<div>"._UNPROCESSEDFILEINFO."</div>";
		echo "<div class=\"unprocessedfileinfo\">"._UPLOADEDFILENAME.": ".$filename."<br/>"._UPLOADEDDATE.": ".$date."</div>";
		echo "<a href=\"$mosConfig_live_site/index.php?option=com_seyret&Itemid=$Itemid&task=deletemyunprocessedvideo\">Delete my unprocessed</a>"; 
		return;
	}


?>

<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_seyret/includes/js/Swiff.Base.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_seyret/includes/js/Swiff.Uploader.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_seyret/includes/js/FancyUpload.js"></script>
	
	
<link href="<?php echo $mosConfig_live_site;?>/components/com_seyret/themes/<?php echo $theme;?>/style/seyret_style.css" rel="stylesheet" type="text/css" />


	


<?php 

$proupl_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/proupld.php";
if (file_exists($proupl_file)) {
	include($proupl_file);
	} else 	{
	exit;	
	echo "Missing Pro File";
	}
uploadjscript($videomaxuploadsize);

$cook=$mainframe->_session;
$sid=$cook->session_id;

//joomla 1.5 compatibility
if ($sid==""){
	$session=& JFactory::getSession();
	$sid=$session->getId();
}



		$seyretrply=mosGetParam($_COOKIE,'seyretrply',null);
		
		if ($seyretrply!="")  {
			$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$seyretrply'");
			$vids = $database->loadObjectList();
			foreach ($vids as $vids) {
				$thevideotitle=$vids->title;
			}
			echo "<div class=\"addingreplyto\">"._YOUAREADDINGAREPLYTO.": ".$thevideotitle."</div>";
		}
		
		

?>
<br>
	<table>
		<tr>
			<td><?php echo _UPLOADVIDEOINFORM;?></td>
			<td width="1%"><?php echo "<img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/uploadvideo.png\" border=\"0\"  alt=\"\" />";?></td>
		</tr>
	</table>
			
			

	
				
	<div>	
	
	<div id="myuploadercontainer"></div>		
	
		<form action="<?php echo $mosConfig_live_site;?>/index.php?option=com_seyret&task=proprocessvideoupload&sess=<?php echo $sid; ?>" method="post" id="videoupload" enctype="multipart/form-data">
			
			<div>
				<fieldset class="dene">
					<legend><?php echo _SELECTVIDEOSTOUPLOAD;?></legend>
					<div class="label emph">
						<label for="videoupload-filedata-1">
							<span><?php echo _SELECTVIDEOSTOUPLOADINFO;?></span>
						</label>
						<br/>
						
						<div id="fileselector" style="display:none;">
							<input type="file" name="Filedata" id="videoupload-filedata-1" />
						</div>
					</div>

				</fieldset>
			</div>

			<div >
				<fieldset  class="dene">
					<legend><?php echo _UPLOADQUEUE;?></legend>

					<div class="note" id="videoupload-status">
						<?php echo _UPLOADQUEUEINFO;?>
					</div>

					<ul class="videoupload-queue" id="videoupload-queue">
					<li style="display: none;" />
					</ul>
				</fieldset>
			</div>



			<div id="uploaderbutton">
				<input type="submit" class="submit" id="profile-submit" value="<?php echo _STARTUPLOAD;?>"/>
			</div>
			

		</form>
		
			<div id="uploadoperations" style="display:none;">
				<table width="100%" border="0s">
				  <tr>
				    <td style="width:135px;"><div id="uploadcontrollabel" class="insignificant"><?php echo _UPLOADCONTROL;?></div></td>
				    <td><div id="uploadcontrolresult">&nbsp;</div> </td>
				    <td rowspan="4" style="width:65px;"><img  src="<?php echo $mosConfig_live_site;?>/components/com_seyret/themes/<?php echo $theme;?>/images/checklist.png" border="none"  alt="" /></td>
				  </tr>
				  <tr>
				    <td style="width:135px;"><div id="conversionchecklabel" class="insignificant"><?php echo _CONVERSIONCHECK;?></div></td>
				    <td><div id="conversioncheckresult">&nbsp;</div></td>
				  </tr>
				  <tr>
				    <td style="width:135px;"><div id="thumbchecklabel" class="insignificant"><?php echo _THUMBNAILCHECK;?></div></td>
				    <td><div id="thumbcheckresult">&nbsp;</div></td>
				  </tr>
				  <tr>
				    <td style="width:135px;"><div id="getinputformlabel" class="insignificant"><?php echo _GETTINGINPUTFORM;?></div></td>
				    <td><div id="getinputformresult">&nbsp;</div></td>
				  </tr>
				</table>
				<div  style="position:relative;">
					<div id="postuploadmessages">&nbsp;</div>				
					<div style="position:absolute; right:5px; top:5px; cursor:pointer" onclick="displayuploadmsg()"><img  src="<?php echo $mosConfig_live_site;?>/components/com_seyret/themes/<?php echo $theme;?>/images/messagelist.png" border="none"  alt="" /></div>
				</div>
			
			</div>
			<div id="postuploadmessagesall"  style="display:none;">&nbsp;</div>
				
			<div id="uploadformdetails">
			
			</div>
		
	</div>
		
		
		
<?php
}


function htmlreportvideo($id){
global $database, $my, $mosConfig_offset;
		
		$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
		$reportvideo = $database->loadObjectList();
		foreach ($reportvideo as $reportvideo){
		$thumb=$reportvideo->picturelink;
		}
$toolbar=rendertoolbar();
$toolbar = str_replace( "{ajaxgif}", "", $toolbar );
echo $toolbar;

$date = date( 'Y-m-d H:i:s', time() + ( $mosConfig_offset * 60 * 60 ) );
$name=jagetusersname($my->id);
	
?>
<form action="index.php?option=com_seyret&Itemid=<?php echo $Itemid; ?>" enctype="multipart/form-data" method="post" name="adminForm">
<table width="100%" style="text-align:left;">
	
	<tr>
		<td align="center" colspan="2"><img src="<?php echo $thumb;?>" width="120px;"  alt="" /></td>
	</tr>
	
	<tr>
		<td colspan="2"><?php echo _REPORTVIDEOINFORM;?></td>
	</tr>

	<tr>
		<td width="20%"><?php echo _VIDEOID;?>:</td>
		<td><?php echo $id;?></td>
	</tr>
	
	<tr>
		<td><?php echo _REPORTEDBY;?>:</td>
		<td><?php echo $name;?></td>
	</tr>		
	
	<tr>
		<td><?php echo _REPORTEDDATE;?>:</td>
		<td><?php echo $date;?></td>
	</tr>
	
	<tr>
		<td><?php echo _REPORTCOMMENT;?>:</td>
		<td><textarea cols="30" rows="5" id="reportreason" name="reportreason"></textarea></td>
	</tr>

	<tr>
		<td></td>
		<td><button type="submit"><?php echo _SAVE;?></td>
	</tr>	
	
	
</table>
<input type="hidden" name="videoid" value="<?php echo $id;?>" />
<input type="hidden" name="reportedby" value="<?php echo $my->id;?>" />
<input type="hidden" name="reporteddate" value="<?php echo $date;?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="savevideoreport" />
</form>
<?php
}




function htmlreportedvideos(){
global $database;
$toolbar=rendertoolbar();
$toolbar = str_replace( "{ajaxgif}", "", $toolbar );
echo $toolbar;

$reportlist="<table width=\"100%\">";

	$database->setQuery("SELECT * FROM #__seyret_reports WHERE reportread='0'"); 		
	$reports = $database->loadObjectList();
	foreach ($reports as $reports) {
	$reportid=$reports->id;
	$reportedby=$reports->reportedby;
	$date=$reports->reporteddate;
	$videoid=$reports->videoid;
	$reportreason=$reports->reportreason;
	$reportlist.="<tr><td>".$reportid."</td><td>".jagetusersname($reportedby)."</td><td>".$date."</td><td><a href=\"index.php?option=com_seyret&task=editreport&id=$reportid\">".$videoid."</a></td><td><a href=\"index.php?option=com_seyret&task=editreport&id=$reportid\">".$reportreason."</a></td></tr>";
	}

$reportlist.="</table>";

echo $reportlist;

}


function htmleditreport($id){
global $database, $mosConfig_absolute_path, $my, $mosConfig_live_site, $mosConfig_lang, $mosConfig_offset;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");

$downloadcachingtimeout ="";
$pro="";
$toolbar=rendertoolbar();
$toolbar = str_replace( "{ajaxgif}", "", $toolbar );
echo $toolbar;


		
	$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";		
	
	if (file_exists($pro_file) AND $disablepro<>"1") {
		$pro="1";
	} else {
		$pro="0";
	}


	
	$database->setQuery("SELECT * FROM #__seyret_reports WHERE id='$id'"); 		
	$reports = $database->loadObjectList();
	foreach ($reports as $reports) {
		$reportid=$reports->id;
		$reportedby=$reports->reportedby;
		$repdate=$reports->reporteddate;
		$videoid=$reports->videoid;
		$reportreason=$reports->reportreason;
	}
	
	$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$videoid'");
	$vids = $database->loadObjectList();
	foreach ($vids as $vids) {
		$videocatid = $vids->catid;
		$thevideotitle=$vids->title;
		$theviddetails=$vids->itemcomment;
		$vtype=$vids->videoservertype;
		$vcode=$vids->videoservercode;
		$vthumb=$vids->picturelink;
		$owner=$vids->addedby;
		$vdate=$vids->addeddate;
		$vpublish=$vids->published;
	}

	

	
	if ($vtype<>"") {
	$includepluginfile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$vtype.".php";
    require_once($includepluginfile);
		$fvtype=str_replace(".","",$vtype);
		$functionname=$fvtype."embed"; 
		$embed=$functionname($vcode, $vthumb, $downloadcachingnotimeout, $downloadcachingtimeout, $pro, $videocatid);
	}
	
	$date = date( 'Y-m-d H:i:s', time() + ( $mosConfig_offset * 60 * 60 ) );
	

	$image_lang_dir=$mosConfig_lang;
	$image_lang_dir_address=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/images/".$image_lang_dir;
	if (!is_dir($image_lang_dir_address))
	{
	$image_lang_dir="english";
	}
	
	
?>
<form action="index.php?option=com_seyret&Itemid=<?php echo $Itemid; ?>" enctype="multipart/form-data" method="post" name="adminForm">
<table width="100%" style="text-align:left;">
	
	<tr>
	<td colspan="2" align="center"><?php echo $embed;?></td>
	</tr>

	<tr>
		<td width="15%"><?php echo _REPORTEDBY;?></td>
		<td>: <?php echo jagetusersname($reportedby);?></td>
	</tr>	

	<tr>
		<td><?php echo _REPORTEDDATE;?></td>
		<td>: <?php echo $repdate;?></td>
	</tr>

	<tr>
		<td><?php echo _REPORTCOMMENT;?></td>
		<td>: <?php echo $reportreason;?></td>
	</tr>

	<tr>
		<td><?php echo _REPORTREPLY;?></td>
		<td> <textarea cols="30" rows="5" id="reportreply" name="reportreply"></textarea></td>
	</tr>

	<tr>
	<td colspan="2" align="center"><?php echo "<a href=\"index.php?option=com_seyret&task=editvideos&id=".$videoid."\"><img  src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/edit.png\" border=\"none\"  alt=\"\" /></a>";?>
	
	<?php echo "<a href=\"javascript:if (confirm('"._DELETEVIDEOCONFIRMMESSAGE."')){ window.location.href='index.php?option=com_seyret&task=deletevideo&id=".$videoid."'}\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/delete.png\" border=\"0\" alt=\"\" /></a>";?></td>
	</tr>		
	

	<tr>
		<td></td>
		<td><button type="submit"><?php echo _SAVE;?></td>
	</tr>	
</table>
<input type="hidden" name="id" value="<?php echo $id;?>" />
<input type="hidden" name="reportread" value="1" />
<input type="hidden" name="reportprocessed" value="1" />
<input type="hidden" name="videoid" value="<?php echo $videoid;?>" />
<input type="hidden" name="reportreplydate" value="<?php echo $date;?>" />
<input type="hidden" name="reportprocessedby" value="<?php echo $my->id;?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="savevideoreport" />
</form>



<?php	

}



function htmlsearchvideos(){
global $database, $mosConfig_absolute_path, $my, $mosConfig_live_site, $Itemid;;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");

$vcategoryname="";
$toolbar=rendertoolbar();
$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
echo $toolbar;

$searchkey=mosGetParam($_REQUEST,'searchkey','mustafa');
$jalemfrom=0;
$step=50;

echo "<br/><table width=\"100%\" style=\"padding:5px;\">";

		$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' AND (title LIKE '%$searchkey%' OR itemcomment LIKE '%$searchkey%' OR videotags LIKE '%$searchkey%') ORDER BY addeddate DESC"); 
		$results = $database->loadObjectList();
		foreach ($results as $results){
		$id=$results->id;
		$thumbnail=$results->picturelink;
		$vtitle=$results->title;
		$addedby=$results->addedby;
		$addeddate=$results->addeddate;
		$vcomment=substr($results->itemcomment,0, 70);
		$vcatid=$results->catid;
		
			$database->setQuery("SELECT * FROM #__seyret_categories WHERE catid='$vcatid'");
			$catname = $database->loadObjectList();	
			foreach ($catname as $catname) {
			$vcategoryname=$catname->categoryname;
			}
		
			$link=sefRelToAbs("index.php?option=com_seyret&task=videodirectlink&id=$id&Itemid=$Itemid");
		
	
	
		echo "<tr>
				<td valign=\"top\" width=\"1%\"><a href=\"".$link."\"><img src=".$thumbnail." width=\"120px;\" style=\"border:none;\"  alt=\"\" /></a></td>
				<td valign=\"top\" class=\"searchresultvideodetails\"><span class=\"searchresultvideotitle\"><a href=\"".$mosConfig_live_site."/index.php?option=com_seyret&task=videodirectlink&id=".$id."\">".$vtitle."</a></span><span>".$vcomment."...<br/>".jagetusersname($addedby)." - ".$vcategoryname."<br/>".$addeddate."</span></td>
		</tr>";
		
		
			}
echo "</table>";


}



function htmlallvideoslist(){
global $database, $mosConfig_absolute_path, $mosConfig_live_site, $Itemid;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
	
$navlinks="";
$navfrom = mosGetParam($_REQUEST,'from','0');
$step=10;
		$toolbar=rendertoolbar();
		$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
		echo $toolbar;

	?>
	<br/>
	<table width="100%" cellpadding="0" cellspacing="2" class="allvideoslisttable">
	<?php
	$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' ORDER BY addeddate DESC LIMIT $navfrom, $step");
			$allvidlist = $database->loadObjectList();	
			foreach ($allvidlist as $allvidlist) {
				$aiid=$allvidlist->id;
				$aititle=$allvidlist->title;
				$aiitemcomment=$allvidlist->itemcomment;
				$aipicturelink=$allvidlist->picturelink;
				$aihit=$allvidlist->hit;
				$aivotetotal=$allvidlist->votetotal;
				$aivotecount=$allvidlist->voteclick;
				$aiaddeddate=$allvidlist->addeddate;
				$aiaddedby=$allvidlist->addedby;
				
				$addedbyname=jagetusersname($aiaddedby);
				
				if ($aipicturelink==""){
				$aipicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
				}
				
				
				if ($aivotecount<>0){
						$intrating=($aivotetotal/$aivotecount)*100;
						$nrating=ceil($intrating);
						$intrating=$nrating/100;
					}
					else {
						$intrating=0;
					}

				$link=sefRelToAbs("index.php?option=com_seyret&task=videodirectlink&Itemid=$Itemid&id=$aiid");
				$aititlelink="<a href=\"".$link."\">".$aititle."</a>";
				
				$videothumbnail="<a href=\"".$link."\"><img src=\"".$aipicturelink."\" width=\"120px\" style=\"border:none;\" alt=\"\" /></a>";
				//read templatefile====================================
				$templatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/allvideosforbotslist_row.php";
				$template= jalemseyret_read_file($templatefile);
	
				$template = str_replace( "{videothumbnail}", $videothumbnail, $template );
				$template = str_replace( "{videotitle}", $aititlelink, $template );
				$template = str_replace( "{description}", $aiitemcomment, $template );
				$template = str_replace( "{hitlabel}", _HIT, $template );
				$template = str_replace( "{hitcount}", $aihit, $template );
				$template = str_replace( "{votecountlabel}", _NUMBEROFVOTE, $template );
				$template = str_replace( "{votecount}", $aivotecount, $template );
				$template = str_replace( "{addeddatelabel}", _ADDEDDATE, $template );
				$template = str_replace( "{addeddate}", $aiaddeddate, $template );
				$template = str_replace( "{addedbylabel}", _ADDEDBY, $template );
				$template = str_replace( "{addedby}", $addedbyname, $template );
				$template = str_replace( "{ratinglabel}", _RATING, $template );
				$template = str_replace( "{rating}", $intrating, $template );
				
				
				
				
				echo $template;
			
			}
	?>
	</table>
	<div align="center">
	<?php
	

//render page navigation system ------$navfrom
	$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1'");	
	$totalvid = $database->loadResult();
	$paginatedvids=0;
	$page=0;
	while ($totalvid>$paginatedvids){
	$page=$page+1;
	$link=sefRelToAbs("index.php?option=com_seyret&task=allvideoslist&Itemid=$Itemid&from=$paginatedvids");
	if ($navfrom==$paginatedvids){
	$navlinks.="<font color=\"red\">[ ".$page." ]</font> - ";
	} else {
	$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
	}
	
	$paginatedvids=$paginatedvids+$step;
	

	}
	$navlinks = substr($navlinks, 0, -3);
	echo $navlinks;	
	?>
	</div>
	<?php
 	
	
	
}



function htmluservideoslist(){
global $database, $mosConfig_absolute_path, $mosConfig_live_site, $Itemid;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
	

$userid	= mosGetParam($_REQUEST,'userid','0');
$navfrom = mosGetParam($_REQUEST,'from','0');
$step=10;
		$toolbar=rendertoolbar();
		$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
		echo $toolbar;

	?>
	<br/>
	<table width="100%" cellpadding="0" cellspacing="2" class="allvideoslisttable">
	<?php
	$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' AND addedby='$userid' ORDER BY addeddate DESC LIMIT $navfrom, $step");
			$allvidlist = $database->loadObjectList();	
			foreach ($allvidlist as $allvidlist) {
				$aiid=$allvidlist->id;
				$aititle=$allvidlist->title;
				$aiitemcomment=$allvidlist->itemcomment;
				$aipicturelink=$allvidlist->picturelink;
				$aihit=$allvidlist->hit;
				$aivotetotal=$allvidlist->votetotal;
				$aivotecount=$allvidlist->voteclick;
				$aiaddeddate=$allvidlist->addeddate;
				$aiaddedby=$allvidlist->addedby;
				
				$addedbyname=jagetusersname($aiaddedby);
				
				if ($aipicturelink==""){
				$aipicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
				}
				
				
				if ($aivotecount<>0){
						$intrating=($aivotetotal/$aivotecount)*100;
						$nrating=ceil($intrating);
						$intrating=$nrating/100;
					}
					else {
						$intrating=0;
					}

				$link=sefRelToAbs("index.php?option=com_seyret&task=videodirectlink&Itemid=$Itemid&id=$aiid");
				$aititlelink="<a href=\"".$link."\">".$aititle."</a>";
				
				$videothumbnail="<a href=\"".$link."\"><img src=\"".$aipicturelink."\" width=\"120px\" style=\"border:none;\" alt=\"\" /></a>";
				//read templatefile====================================
				$templatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/allvideosforbotslist_row.php";
				$template= jalemseyret_read_file($templatefile);
	
				$template = str_replace( "{videothumbnail}", $videothumbnail, $template );
				$template = str_replace( "{videotitle}", $aititlelink, $template );
				$template = str_replace( "{description}", $aiitemcomment, $template );
				$template = str_replace( "{hitlabel}", _HIT, $template );
				$template = str_replace( "{hitcount}", $aihit, $template );
				$template = str_replace( "{votecountlabel}", _NUMBEROFVOTE, $template );
				$template = str_replace( "{votecount}", $aivotecount, $template );
				$template = str_replace( "{addeddatelabel}", _ADDEDDATE, $template );
				$template = str_replace( "{addeddate}", $aiaddeddate, $template );
				$template = str_replace( "{addedbylabel}", _ADDEDBY, $template );
				$template = str_replace( "{addedby}", $addedbyname, $template );
				$template = str_replace( "{ratinglabel}", _RATING, $template );
				$template = str_replace( "{rating}", $intrating, $template );
				
				
				
				
				echo $template;
			
			}
	?>
	</table>
	<div align="center">
	<?php
	

//render page navigation system ------$navfrom
	$navlinks="";
	$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1' AND addedby='$userid'");	
	$totalvid = $database->loadResult();
	$paginatedvids=0;
	$page=0;
	while ($totalvid>$paginatedvids){
	$page=$page+1;
	$link=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=$paginatedvids&userid=$userid");
	if ($navfrom==$paginatedvids){
	$navlinks.="<font color=\"red\">[ ".$page." ]</font> - ";
	} else {
	$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
	}
	
	$paginatedvids=$paginatedvids+$step;
	

	}
	$navlinks = substr($navlinks, 0, -3);
	echo $navlinks;	
	?>
	</div>
	<?php
 	
	
	
}



function htmlpendingvideoslist(){
global $database, $mosConfig_absolute_path, $mosConfig_live_site, $Itemid;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
	


$navfrom = mosGetParam($_REQUEST,'from','0');
$step=10;
		$toolbar=rendertoolbar();
		$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
		echo $toolbar;

	?>
	<br/>
	<table width="100%" cellpadding="0" cellspacing="2" class="allvideoslisttable">
	<?php
	$database->setQuery("SELECT * FROM #__seyret_items WHERE published='0' AND (hasbackup!='2' OR hasbackup IS NULL) ORDER BY addeddate DESC LIMIT $navfrom, $step");
			$allvidlist = $database->loadObjectList();	
			foreach ($allvidlist as $allvidlist) {
				$aiid=$allvidlist->id;
				$aititle=$allvidlist->title;
				$aiitemcomment=$allvidlist->itemcomment;
				$aipicturelink=$allvidlist->picturelink;
				$aihit=$allvidlist->hit;
				$aivotetotal=$allvidlist->votetotal;
				$aivotecount=$allvidlist->voteclick;
				$aiaddeddate=$allvidlist->addeddate;
				$aiaddedby=$allvidlist->addedby;
				
				$addedbyname=jagetusersname($aiaddedby);
				
				if ($aipicturelink==""){
				$aipicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
				}
				
				
				if ($aivotecount<>0){
						$intrating=($aivotetotal/$aivotecount)*100;
						$nrating=ceil($intrating);
						$intrating=$nrating/100;
					}
					else {
						$intrating=0;
					}

				$link=sefRelToAbs("index.php?option=com_seyret&task=editvideos&Itemid=$Itemid&id=$aiid&sender=pendingvideoslist");
				$aititlelink="<a href=\"".$link."\">".$aititle."</a>";
				
				$videothumbnail="<a href=\"".$link."\"><img src=\"".$aipicturelink."\" width=\"120px\" style=\"border:none;\" alt=\"\" /></a>";
				//read templatefile====================================
				$templatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/allvideosforbotslist_row.php";
				$template= jalemseyret_read_file($templatefile);
	
				$template = str_replace( "{videothumbnail}", $videothumbnail, $template );
				$template = str_replace( "{videotitle}", $aititlelink, $template );
				$template = str_replace( "{description}", $aiitemcomment, $template );
				$template = str_replace( "{hitlabel}", _HIT, $template );
				$template = str_replace( "{hitcount}", $aihit, $template );
				$template = str_replace( "{votecountlabel}", _NUMBEROFVOTE, $template );
				$template = str_replace( "{votecount}", $aivotecount, $template );
				$template = str_replace( "{addeddatelabel}", _ADDEDDATE, $template );
				$template = str_replace( "{addeddate}", $aiaddeddate, $template );
				$template = str_replace( "{addedbylabel}", _ADDEDBY, $template );
				$template = str_replace( "{addedby}", $addedbyname, $template );
				$template = str_replace( "{ratinglabel}", _RATING, $template );
				$template = str_replace( "{rating}", $intrating, $template );
				
				
				
				
				echo $template;
			
			}
	?>
	</table>
	<div align="center">
	<?php
	

//render page navigation system ------$navfrom
	$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='0'");	
	$totalvid = $database->loadResult();
	$paginatedvids=0;
	$page=0;
	while ($totalvid>$paginatedvids){
	$page=$page+1;
	$link=sefRelToAbs("index.php?option=com_seyret&task=pendingvideoslist&Itemid=$Itemid&from=$paginatedvids");
	if ($navfrom==$paginatedvids){
	$navlinks.="<font color=\"red\">[ ".$page." ]</font> - ";
	} else {
	$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
	}
	
	$paginatedvids=$paginatedvids+$step;
	

	}
	$navlinks = substr($navlinks, 0, -3);
	echo $navlinks;	
	?>
	</div>
	<?php
 	
	
	
}



function htmlfeaturedvideos(){
global $database, $mosConfig_absolute_path, $mosConfig_live_site, $Itemid;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
	
$navlinks="";
$navfrom = mosGetParam($_REQUEST,'from','0');
$step=10;
		$toolbar=rendertoolbar();
		$toolbar = str_replace( "{ajaxgif}", "<td>&nbsp;</td>", $toolbar );
		echo $toolbar;

	?>
	<br/>
	<table width="100%" cellpadding="0" cellspacing="2" class="allvideoslisttable">
	<?php
	$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' AND featured='1' ORDER BY addeddate DESC LIMIT $navfrom, $step");
			$allvidlist = $database->loadObjectList();	
			foreach ($allvidlist as $allvidlist) {
				$aiid=$allvidlist->id;
				$aititle=$allvidlist->title;
				$aiitemcomment=$allvidlist->itemcomment;
				$aipicturelink=$allvidlist->picturelink;
				$aihit=$allvidlist->hit;
				$aivotetotal=$allvidlist->votetotal;
				$aivotecount=$allvidlist->voteclick;
				$aiaddeddate=$allvidlist->addeddate;
				$aiaddedby=$allvidlist->addedby;
				
				$addedbyname=jagetusersname($aiaddedby);
				
				if ($aipicturelink==""){
				$aipicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
				}
				
				
				if ($aivotecount<>0){
						$intrating=($aivotetotal/$aivotecount)*100;
						$nrating=ceil($intrating);
						$intrating=$nrating/100;
					}
					else {
						$intrating=0;
					}

				$link=sefRelToAbs("index.php?option=com_seyret&task=videodirectlink&Itemid=$Itemid&id=$aiid");
				$aititlelink="<a href=\"".$link."\">".$aititle."</a>";
				
				$videothumbnail="<a href=\"".$link."\"><img src=\"".$aipicturelink."\" width=\"120px\" style=\"border:none;\" alt=\"\" /></a>";
				//read templatefile====================================
				$templatefile=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/allvideosforbotslist_row.php";
				$template= jalemseyret_read_file($templatefile);
	
				$template = str_replace( "{videothumbnail}", $videothumbnail, $template );
				$template = str_replace( "{videotitle}", $aititlelink, $template );
				$template = str_replace( "{description}", $aiitemcomment, $template );
				$template = str_replace( "{hitlabel}", _HIT, $template );
				$template = str_replace( "{hitcount}", $aihit, $template );
				$template = str_replace( "{votecountlabel}", _NUMBEROFVOTE, $template );
				$template = str_replace( "{votecount}", $aivotecount, $template );
				$template = str_replace( "{addeddatelabel}", _ADDEDDATE, $template );
				$template = str_replace( "{addeddate}", $aiaddeddate, $template );
				$template = str_replace( "{addedbylabel}", _ADDEDBY, $template );
				$template = str_replace( "{addedby}", $addedbyname, $template );
				$template = str_replace( "{ratinglabel}", _RATING, $template );
				$template = str_replace( "{rating}", $intrating, $template );
				
				
				
				
				echo $template;
			
			}
	?>
	</table>
	<div align="center">
	<?php
	

//render page navigation system ------$navfrom
	$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1' AND featured='1'");	
	$totalvid = $database->loadResult();
	$paginatedvids=0;
	$page=0;
	while ($totalvid>$paginatedvids){
	$page=$page+1;
	$link=sefRelToAbs("index.php?option=com_seyret&task=featuredvideos&Itemid=$Itemid&from=$paginatedvids");
	if ($navfrom==$paginatedvids){
	$navlinks.="<font color=\"red\">[ ".$page." ]</font> - ";
	} else {
	$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
	}
	
	$paginatedvids=$paginatedvids+$step;
	

	}
	$navlinks = substr($navlinks, 0, -3);
	echo $navlinks;	
	?>
	</div>
	<?php
 	
	
	
}




function htmlgeneraterssfeed(){
global $database,$mosConfig_live_site, $mosConfig_absolute_path;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

	
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( 'all',_ALLCATEGORIES );
	$videocats[] = mosHTML::makeOption( '0',_TOPLEVEL );
	foreach ($videocat as $videocat) 
	{
		$catid = $videocat->catid;
		$id = $videocat->id;
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
		$videocats[] = mosHTML::makeOption( $id, $catidlast );
	}
	$categorylist = mosHTML::selectList($videocats,"cid",'id="cid" class="rssgenerateoptionboxes" onchange=updatersslink() size="1"',"value","text");
	
	
	$feedtype[] = mosHTML::makeOption( "date", _SEYRETDATE );
	$feedtype[] = mosHTML::makeOption( "rating", _RATING );
	$feedtypelist = mosHTML::selectList($feedtype,"feedtype",'id="feedtype" class="rssgenerateoptionboxes" onchange=updatersslink() size="1"',"value","text" );
	
	$ordertype[] = mosHTML::makeOption( "d", _DESCENDING );
	$ordertype[] = mosHTML::makeOption( "a", _ASCENDING );
	$ordertypelist = mosHTML::selectList($ordertype,"ordertype",'id="ordertype" class="rssgenerateoptionboxes" onchange=updatersslink() size="1"',"value","text" );	

	$feedlimit[] = mosHTML::makeOption( "5");
	$feedlimit[] = mosHTML::makeOption( "10");
	$feedlimit[] = mosHTML::makeOption( "15");
	$feedlimit[] = mosHTML::makeOption( "20");
	$feedlimit[] = mosHTML::makeOption( "25");
	$feedlimit[] = mosHTML::makeOption( "30");
	$feedlimit[] = mosHTML::makeOption( "35");
	$feedlimit[] = mosHTML::makeOption( "40");
	$feedlimit[] = mosHTML::makeOption( "45");
	$feedlimit[] = mosHTML::makeOption( "50");
	$feedlimitlist = mosHTML::selectList($feedlimit,"feedlimit",'id="feedlimit" class="rssgenerateoptionboxes" onchange=updatersslink() size="1"',"value","text", "15" );	
	
	
	$rssimage=$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/rss.png";
	$rssbigimage=$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/rssbig.png";
	$openrssimage=$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/gotorss.png";
?>

<div class="generaterssfeedinfo">
<div style="float: left; width:80%;"> <?php echo _GENERATERSSFEEDINFO;?></div>

<div style="float: right;"> <img style="vertical-align:middle;" src="<?php echo $rssbigimage;?>" border="0" alt="rss"/></div>
<div style="clear:both;"></div>
</div>


<div class="generaterssoptions">
<?php echo $categorylist." ".$feedtypelist." ".$ordertypelist." ".$feedlimitlist; ?>
</div>

<div class="generatersslinkdiv">
<img style="vertical-align:middle;" src="<?php echo $rssimage;?>" border="0" alt="rss"/>&nbsp;
<input  style="vertical-align:middle;" type="text" id="rsslink" name="rsslink" onclick="updatersslink()" class="rsslinkinputbox"/>
<a href="" id="openrsslink" target="_blank"><img style="vertical-align:middle;" src="<?php echo $openrssimage;?>" border="0" alt="rss"/></a>
</div>



<?php

echo "<script type=\"text/javascript\">
		
		window.addEvent('load', function(){

			updatersslink();
		
		});

		</script>";

}




function htmlflvconversionquee(){
global $Itemid;

		$ajx=rendertoolbar();
		$ajx = str_replace( "{ajaxgif}","<td>&nbsp;</td>", $ajx );
		echo $ajx;
		
?>


<form action="index.php?option=com_seyret&Itemid=<?php echo $Itemid; ?>" method="post" name="adminForm">

	<table width="100%">
		<tr>
			<td><?php echo _BATCHCONVERSIONINFO;?></td>
		</tr>
		
		<tr>
			<td>
			
				<input type="radio" name="thumbnailextractrule" value="nothumb"/><?php echo _DONTEXTRACTTHUMBNAIL;?><br/>
				<input type="radio" name="thumbnailextractrule" value="allthumbs"/><?php echo _EXTRACTALLTHUMBNAILS;?> <br/>
				<input type="radio" name="thumbnailextractrule" value="onlymissiongthumbs" checked="checked"/><?php echo _EXTRACTONLYMISSINGTHUMBNAILS;?><br/>
				<hr>

			<input type="checkbox" name="passflvconversion" value="passflv"><?php echo _DONTCONERTTOFLV;?><br/>				
			<input type="checkbox" name="forceoldflvrecode" value="forceoldflv"><?php echo _FORCEREENCODEOLDFLV;?><br/>
			<input type="checkbox" name="deleteoriginalfiles" value="deleteorg"><?php echo _DELETEORIGINALFILE;?><br/>
			<hr>
			<?php echo _DEFAULTTIMETOSNAPSHOT;?><br>
			<input type="text" id="thumbsecond" name="thumbsecond" size="3" class="inputbox" value="2"/>
			<hr>
			<?php echo _CONVERSIONVIDEOCOUNT;?><br>
			<input type="text" id="conversioncount" name="conversioncount" size="3" class="inputbox" value="10"/>
			<hr>
			
			</td>
		</tr>
		<tr>
			<td><button type="submit" ><?php echo _STARTBATCHCONVERSION;?></td>
		</tr>	
	</table>

	 
<input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />	 
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="convertflvbatch" />

</form>
<?php		
		
		

}




function htmlmainpage(){
global $mosConfig_absolute_path, $mosConfig_live_site;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/classes/seyrettoolbar.class.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/classes/readtemplate.class.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/classes/video.class.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/classes/videotools.class.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/classes/user.class.php");
require($mosConfig_absolute_path."/components/com_seyret/includes/classes/categories.class.php");


$tablabels['videocategories']=_CATEGORIES;
$tablabels['featuredvideos']=_FEATUREDVIDEOS;
$tablabels['latestvideos']=_LATESTVIDEOS;
$tablabels['highestratedvideos']=_HIGHESTRATEDVIDEOS;
$tablabels['mostdiscussedvideos']=_MOSTDISCUSSEDVIDEOS;
$tablabels['mostviewedvideos']=_MOSTVIEWEDVIDEOS;

$template=new readtemplate;
$mainpagetemplate=$template->gettemplatefile("mainpage.php", $theme);

$seyrettoolbar=rendertoolbar();
$seyrettoolbar = str_replace( "{ajaxgif}", "&nbsp;", $seyrettoolbar );



$templvideo=new videotools;





//tabs _-----------------------------------------------------------------------------------------------
$pos = strpos($mainpagetemplate, "{seyrettabs}");
$post=strpos($mainpagetemplate, "{/seyrettabs}")-$pos;
$gettabstag=substr($mainpagetemplate,$pos,$post+13);
$analysegettabstag=str_replace("{seyrettabs}","",$gettabstag);
$analysegettabstag=str_replace("{/seyrettabs}","",$analysegettabstag);
//tabs _-----------------------------------------------------------------------------------------------


$pattern = '/{seyrettabs}/';
if (!preg_match($pattern, $mainpagetemplate)) $analysegettabstag="";



//embedvideo-------------------------------------------------------------------------------------------
$pos = strpos($mainpagetemplate, "{embedvideo}");
$post=strpos($mainpagetemplate, "{/embedvideo}")-$pos;
$getembedvideotag=substr($mainpagetemplate,$pos,$post+13);
$analysegetembedvideotag=str_replace("{embedvideo}","",$getembedvideotag);
$analysegetembedvideotag=str_replace("{/embedvideo}","",$analysegetembedvideotag);
//embedvideo-------------------------------------------------------------------------------------------

if ($analysegetembedvideotag=="randomvideos") {
	//$embedvideotomainpage=$templvideo->getarandomvideoembed();
}

$videocount=$templvideo->getpublishedvideocount();

//$searchfield="<form action=\"index.php\" method=\"post\" name=\"adminForm\"><input type=\"text\" id=\"searchkey\" name=\"searchkey\" size=\"20\" class=\"searchboxinmainpage\" value=\""._SEARCHVIDEOS."\" onblur=\"if(this.value=='') this.value='"._SEARCHVIDEOS."';\" onfocus=\"if(this.value=='"._SEARCHVIDEOS."') this.value='';\" type=\"text\"/><input type=\"hidden\" name=\"option\" value=\"com_seyret\" /><input type=\"hidden\" name=\"task\" value=\"searchvideos\" /></form>";
//$smallstatistics=_SMALLSTATISTICSPRE.$videocount._SMALLSTATISTICSPOST;

$searchfield="";
$smallstatistics="";

$mainpagetemplate = str_replace( "{smallstatistics}", $smallstatistics, $mainpagetemplate );
$mainpagetemplate = str_replace( "{searchfield}", $searchfield, $mainpagetemplate );
$mainpagetemplate = str_replace( "{toolbar}", $seyrettoolbar, $mainpagetemplate );
//$mainpagetemplate = str_replace( $getembedvideotag, $embedvideotomainpage, $mainpagetemplate );

	
$pagerender=explode($gettabstag,$mainpagetemplate);

//echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"$mosConfig_live_site/components/com_seyret/themes/$theme/style/seyret.tabs.css\" />";
			
	$template_array=preg_split("/{seyretmod/", $pagerender[0]);
		
		foreach ($template_array as $template_array){
			if (substr($template_array, 1, 1)=="}"){
				$modulepos="seyretmod".substr($template_array, 0, 1);
				
				if (class_exists("JModuleHelper")){//1.5 compatibility
					$seyretbirbucuk_modules = &JModuleHelper::getModules($modulepos);
					foreach ($seyretbirbucuk_modules as $seyretbirbucuk) {
					    echo JModuleHelper::renderModule( $seyretbirbucuk);
					}				
				} else {
					mosLoadModules ($modulepos,-1);
				}

				
				
				echo substr($template_array, 2);     
			} else {
				echo $template_array;
			}
			
		}
		
		

		$analysegettabstaglist=explode("|",$analysegettabstag);
		

			$tabs = new mosTabs(1,1);
			$tabs->startPane("tabs");

				
				
			$i=0;
			foreach ($analysegettabstaglist as $addedtabs) {
				
				if ($addedtabs!=""){
					$i=$i+1;
					$tabsl="tabs".$i;
					$tabs->startTab($tablabels[$addedtabs],$tabsl);
					$funcname="get".$addedtabs."withtemplate";
					$tabname=$templvideo->$funcname($theme);
					echo "<br/>".$tabname;
					//<br/> is a solution for indent problem in ie
					$tabs->endTab();				
				
				}

			}
			
			$tabs->endPane();	
		
		
			

		
		
	$template_array=preg_split("/{seyretmod/", $pagerender[1]);
		
		foreach ($template_array as $template_array){
			if (substr($template_array, 1, 1)=="}"){
				$modulepos="seyretmod".substr($template_array, 0, 1);
				
				if (class_exists("JModuleHelper")){//1.5 compatibility
					$seyretbirbucuk_modules = &JModuleHelper::getModules($modulepos);
					foreach ($seyretbirbucuk_modules as $seyretbirbucuk) {
					    echo JModuleHelper::renderModule( $seyretbirbucuk);
					}				
				} else {
					mosLoadModules ($modulepos,-1);
				}

				
				
				echo substr($template_array, 2);     
			} else {
				echo $template_array;
			}
			
		}
			





}




function addnewvideo(){
global $Itemid, $mosConfig_live_site;


	$replyto=mosGetParam($_REQUEST,'replyto',null);
	
	$cookieoutput=$replyto;
	setcookie("seyretrply", $cookieoutput, "0", "/");

	$ajx=rendertoolbar();
	$ajx = str_replace( "{ajaxgif}", "&nbsp;", $ajx );
	echo $ajx;	
	
	
?>

		<div class="addnewvideobuttons">
			<a href="<?php echo $mosConfig_live_site."/index.php?option=com_seyret&Itemid=".$Itemid."&task=addlinkfront";?>"><div id="addnewvideofromserver"><?php echo _ADDFROMANOTHERSERVER;?>
			</div></a>
			
			<a href="<?php echo $mosConfig_live_site."/index.php?option=com_seyret&Itemid=".$Itemid."&task=prouploadvideo";?>"><div id="addnewvideofrommycomputer"><?php echo _UPLOADFROMMYCOMPUTER;?>
			</div></a>	
		</div>

<?php
	
}




}// end of html class

?>
