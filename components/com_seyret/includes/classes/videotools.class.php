<?php
defined( '_VALID_MOS' ) or die( 'Oppps, what are you doing' );

//Seyret Component v.0.2.8//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2
**/	

class videotools{




	function getlatestvideoswithtemplate($theme){
		global $mosConfig_absolute_path, $mosConfig_live_site, $database, $Itemid;
		require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");
	
		$seyretbrwsrl = mosGetParam($_COOKIE,'seyretbrwsrl',null);
		$seyretbrwsrl=str_replace("\\\"","\"",$seyretbrwsrl);
		if ($seyretbrwsrl!=""){
			$jsonbrwsrl = new Services_Seyret_JSON();
			$seyretbrwsrlvalues = $jsonbrwsrl->decode($seyretbrwsrl);
			$cbrowsingstyleintabs=$seyretbrwsrlvalues->browsingstyleintabs;		
		} else {
			$cbrowsingstyleintabs="list";
		
		}



	
	
	/*$latestvideoslist="
	<table style=\"width:100%; text-align:right;\" cellpadding=\"3\"><tr><td><span class=\"displaystyle\">"._DISPLAYSTYLE." : </span></td><td width=\"1%\"><img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewlist_act.gif\"></td><td width=\"1%\"><img style=\"cursor:pointer;\" src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewgrid_pas.gif\" onclick=\"changeliststyleintabs('blocks')\"></td></tr></table>";*/ 
	
	 

	
	if ($cbrowsingstyleintabs=="list"){
		
		$step=8;
	
		$frontlatestnavstart = mosGetParam($_REQUEST,'latestnavstart',null);
		$frontlatestnavstart=intval( $frontlatestnavstart);
		// $frontlatestnavstart = mosGetParam($_REQUEST,'latestnavstart',null);
		// $frontlatestnavstart=intval( $frontlatestnavstart);
		
		$template=new readtemplate;
		$latestvideoslistrow=$template->gettemplatefile("listviewinvideolisttabs.php", $theme);
		$latestvideoslist="<table width=\"100%\" class=\"mainpagecategorylist\">";
	
		
		$tdwidth=ceil(100/$latestvideoslistcolumncount)."%";
        $database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' ORDER BY addeddate DESC LIMIT $frontlatestnavstart,$step");
		$videos = $database->loadObjectList();

         $thecolumn=0;

		foreach ($videos as $videos){
			
			
			$videoid=$videos->id;
			$thumbnailsrc=$videos->picturelink;
			$videodetails=$videos->itemcomment;
			$videotitle=$videos->title;
			$votetotal=$videos->votetotal;
			$voteclick=$videos->voteclick;
			$vcategoryid=$videos->catid;
			$addedby=$videos->addedby;
			$addeddate=$videos->addeddate;
			$addeddate = _ADDEDDATE.": ".mosFormatDate( $addeddate, "%d %B %Y" );

			if ($thumbnailsrc=="") $thumbnailsrc=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
			
			$categoryobj=new seyretcategory;
			$incategeries=$categoryobj->getincategorylistonlynames($vcategoryid);
			
			$incategory=_INCATEGORY.": ".$incategeries;
		//	$inchannel=_INCHANNEL.": ".$vchannelid;
			
			$videodetailswithmore=generatereadmorelink($videodetails, "", "latest".$videoid);
			$votestars=getvotestarsdisabled($videoid);
			
			
			$userobj=new seyretuser($addedby, 50);
			$useravatar=$userobj->useravatar;
			$username=$userobj->username;
			
			$uslink=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=0&userid=$addedby");
			$usernamelinked="<a href=\"".$uslink."\">".$username."</a>";			
			
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$videoid;
			$seflink=sefRelToAbs($link);
			
			
			if ($thecolumn==0) { 
			 $latestvideoslist.="<tr>"; 
			} 
			$thecolumn=$thecolumn+1;
		 
			$latestvideoslist.="<td width=\"$tdwidth\">".$latestvideoslistrow."</td>" ;
			
			if ($thecolumn== $latestvideoslistcolumncount){
				 $latestvideoslist.="</tr>";
				 $thecolumn=0;		 
			}
			


			$latestvideoslist = str_replace( "{videolink}", $seflink, $latestvideoslist );				
			$latestvideoslist = str_replace( "{videothumbnailsrc}", $thumbnailsrc, $latestvideoslist );	
			$latestvideoslist = str_replace( "{videodetails}", $videodetailswithmore, $latestvideoslist );
			$latestvideoslist = str_replace( "{videotitle}", $videotitle, $latestvideoslist );
			$latestvideoslist = str_replace( "{votestars}", $votestars, $latestvideoslist );
			$latestvideoslist = str_replace( "{incategory}", $incategory, $latestvideoslist );
			$latestvideoslist = str_replace( "{addeddate}", $addeddate, $latestvideoslist );
			$latestvideoslist = str_replace( "{useravatar}", $useravatar, $latestvideoslist );
			$latestvideoslist = str_replace( "{addedby}", $usernamelinked, $latestvideoslist );	

		}
		
		
	
	 

 

}



	
	//render page navigation system ------$navfrom

		$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1'");	
		$totalvid = $database->loadResult();
		$paginatedvids=0;
		$page=0;
		$navlinks="<div id=\"pagenavigationmainpage\">";
		while ($totalvid>$paginatedvids){
		$page=$page+1;
		if ($page==4) break;
		
		$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&latestnavstart=$paginatedvids");
		if ($frontlatestnavstart==$paginatedvids){
		$navlinks.="<span class=\"pagenavigationmainpageactive\">[ ".$page." ]</span> - ";
		} else {
		$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
		}
		
		$paginatedvids=$paginatedvids+$step;
		

		}
		$navlinks = substr($navlinks, 0, -3)."</div>";
		//echo $navlinks;	
		if (substr($latestvideoslist, -4) !="/tr>"){
			$latestvideoslist.="</tr>";
		}

		
		$latestvideoslist.="</table>";
		return $latestvideoslist.$navlinks;
	}


	
	
	function gethighestratedvideoswithtemplate($theme){
	
		global $mosConfig_absolute_path, $mosConfig_live_site, $database, $Itemid;
		require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");
	
		$seyretbrwsrl = mosGetParam($_COOKIE,'seyretbrwsrl',null);
		$seyretbrwsrl=str_replace("\\\"","\"",$seyretbrwsrl);


		if ($seyretbrwsrl!=""){
			$jsonbrwsrl = new Services_Seyret_JSON();
			$seyretbrwsrlvalues = $jsonbrwsrl->decode($seyretbrwsrl);
			$cbrowsingstyleintabs=$seyretbrwsrlvalues->browsingstyleintabs;		
		} else {
			$cbrowsingstyleintabs="list";
		
		}


	
	
/* 	$highestratedvideoslist="
	<table style=\"width:100%; text-align:right;\" cellpadding=\"3\"><tr><td><span class=\"displaystyle\">"._DISPLAYSTYLE." : </span></td><td width=\"1%\"><img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewlist_act.gif\"></td><td width=\"1%\"><img style=\"cursor:pointer;\" src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewgrid_pas.gif\" onclick=\"changeliststyleintabs('blocks')\"></td></tr></table>"; */
	
	
	if ($cbrowsingstyleintabs=="list"){
		
		$step=8;
	
		$fronthighestratednavstart = mosGetParam($_REQUEST,'highestratednavstart',null);
		$fronthighestratednavstart=intval( $fronthighestratednavstart);
		// $fronthighestratednavstart = mosGetParam($_REQUEST,'highestratednavstart',null);
		// $fronthighestratednavstart=intval( $fronthighestratednavstart);
		
		$template=new readtemplate;
		$highestratedvideoslistrow=$template->gettemplatefile("listviewinvideolisttabs.php", $theme);
		$highestratedvideoslist="<table width=\"100%\" class=\"mainpagecategorylist\">";

		
		$tdwidth=ceil(100/$highestratedvideoslistcolumncount)."%";
		$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' AND voteclick>0 ORDER BY votetotal/voteclick DESC  LIMIT $fronthighestratednavstart,$step");
		$videos = $database->loadObjectList();
		
		$thecolumn=0;
        
		
		
		foreach ($videos as $videos){
			
			
			$videoid=$videos->id;
			$thumbnailsrc=$videos->picturelink;
			$videodetails=$videos->itemcomment;
			$videotitle=$videos->title;
			$votetotal=$videos->votetotal;
			$voteclick=$videos->voteclick;
			$vcategoryid=$videos->catid;
			$addedby=$videos->addedby;
			$addeddate=$videos->addeddate;
			$addeddate = _ADDEDDATE.": ".mosFormatDate( $addeddate, "%d %B %Y" );

			if ($thumbnailsrc=="") $thumbnailsrc=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
						
			$categoryobj=new seyretcategory;
			$incategeries=$categoryobj->getincategorylistonlynames($vcategoryid);
			
			$incategory=_INCATEGORY.": ".$incategeries;
		//	$inchannel=_INCHANNEL.": ".$vchannelid;
			
			$videodetailswithmore=generatereadmorelink($videodetails, "", "highestrated".$videoid);
			$votestars=getvotestarsdisabled($videoid);
			
			
			$userobj=new seyretuser($addedby, 50);
			$useravatar=$userobj->useravatar;
			$username=$userobj->username;
			
			$uslink=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=0&userid=$addedby");
			$usernamelinked="<a href=\"".$uslink."\">".$username."</a>";			
			
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$videoid;
			$seflink=sefRelToAbs($link);
			


			if ($thecolumn==0) { 
			 $highestratedvideoslist.="<tr>"; 
			} 
			$thecolumn=$thecolumn+1;
		 
			$highestratedvideoslist.="<td width=\"$tdwidth\">".$highestratedvideoslistrow."</td>" ;
			
			if ($thecolumn== $highestratedvideoslistcolumncount){
				 $highestratedvideoslist.="</tr>";
				 $thecolumn=0;		 
			}
			
			

			$highestratedvideoslist = str_replace( "{videolink}", $seflink, $highestratedvideoslist );				
			$highestratedvideoslist = str_replace( "{videothumbnailsrc}", $thumbnailsrc, $highestratedvideoslist );	
			$highestratedvideoslist = str_replace( "{videodetails}", $videodetailswithmore, $highestratedvideoslist );
			$highestratedvideoslist = str_replace( "{videotitle}", $videotitle, $highestratedvideoslist );
			$highestratedvideoslist = str_replace( "{votestars}", $votestars, $highestratedvideoslist );
			$highestratedvideoslist = str_replace( "{incategory}", $incategory, $highestratedvideoslist );
			$highestratedvideoslist = str_replace( "{addeddate}", $addeddate, $highestratedvideoslist );
			$highestratedvideoslist = str_replace( "{useravatar}", $useravatar, $highestratedvideoslist );
			$highestratedvideoslist = str_replace( "{addedby}", $usernamelinked, $highestratedvideoslist );	

			
		}
		
		
	
	} else {
		
		//$highestratedvideoslist="<table style=\"width:100%; text-align:right;\" cellpadding=\"3\"><tr><td><span class=\"displaystyle\">"._DISPLAYSTYLE." : </span></td><td width=\"1%\"><img style=\"cursor:pointer;\" src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewlist_pas.gif\" onclick=\"changeliststyleintabs('list')\"></td><td width=\"1%\"><img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewgrid_act.gif\"></td></tr></table>";
		$highestratedvideoslist="";
	}
	
	//render page navigation system ------$navfrom

		$database->setQuery("SELECT count(*) FROM #__seyret_items  WHERE published='1' AND voteclick>0");	
		$totalvid = $database->loadResult();
			if ($totalvid>0){
			$paginatedvids=0;
			$page=0;
			$navlinks="<div id=\"pagenavigationmainpage\">";
			while ($totalvid>$paginatedvids){
			$page=$page+1;
			if ($page==4) break;
			
			$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&highestratednavstart=$paginatedvids");
			if ($fronthighestratednavstart==$paginatedvids){
			$navlinks.="<span class=\"pagenavigationmainpageactive\">[ ".$page." ]</span> - ";
			} else {
			$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
			}
			
			$paginatedvids=$paginatedvids+$step;
			

			}
			$navlinks = substr($navlinks, 0, -3)."</div>";
			//echo $navlinks;	
		} else {
			$navlinks ="";
		}
	
		if (substr($highestratedvideoslist, -4)=="<tr>"){
$highestratedvideoslist=substr($highestratedvideoslist, 0, -4);
}
$highestratedvideoslist.="</table>";
return $highestratedvideoslist.$navlinks;
}
	
	

	function getfeaturedvideoswithtemplate($theme){
	
	global $mosConfig_absolute_path, $mosConfig_live_site, $database, $Itemid;
		require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");
	
		$seyretbrwsrl = mosGetParam($_COOKIE,'seyretbrwsrl',null);
		$seyretbrwsrl=str_replace("\\\"","\"",$seyretbrwsrl);


		if ($seyretbrwsrl!=""){
			$jsonbrwsrl = new Services_Seyret_JSON();
			$seyretbrwsrlvalues = $jsonbrwsrl->decode($seyretbrwsrl);
			$cbrowsingstyleintabs=$seyretbrwsrlvalues->browsingstyleintabs;		
		} else {
			$cbrowsingstyleintabs="list";
		
		}


	
	
/* 	$featuredvideoslist="
	<table style=\"width:100%; text-align:right;\" cellpadding=\"3\"><tr><td><span class=\"displaystyle\">"._DISPLAYSTYLE." : </span></td><td width=\"1%\"><img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewlist_act.gif\"></td><td width=\"1%\"><img style=\"cursor:pointer;\" src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewgrid_pas.gif\" onclick=\"changeliststyleintabs('blocks')\"></td></tr></table>"; */
	
	
	
	if ($cbrowsingstyleintabs=="list"){
		
		$step=8;
	
		$frontfeaturednavstart = mosGetParam($_REQUEST,'featurednavstart',null);
		$frontfeaturednavstart=intval( $frontfeaturednavstart);
		// $frontfeaturednavstart = mosGetParam($_REQUEST,'featurednavstart',null);
		// $frontfeaturednavstart=intval( $frontfeaturednavstart);
		
		$template=new readtemplate;
		$featuredvideoslistrow=$template->gettemplatefile("listviewinvideolisttabs.php", $theme);
		$featuredvideoslist="<table width=\"100%\" class=\"mainpagecategorylist\">";
		
		
		$tdwidth=ceil(100/$featuredvideoslistcolumncount)."%";
		$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' AND featured='1' ORDER BY addeddate DESC  LIMIT $frontfeaturednavstart,$step");
		$videos = $database->loadObjectList();
		
		$thecolumn=0;
		foreach ($videos as $videos){
			
			
			$videoid=$videos->id;
			$thumbnailsrc=$videos->picturelink;
			$videodetails=$videos->itemcomment;
			$videotitle=$videos->title;
			$votetotal=$videos->votetotal;
			$voteclick=$videos->voteclick;
			$vcategoryid=$videos->catid;
			$addedby=$videos->addedby;
			$addeddate=$videos->addeddate;
			$addeddate = _ADDEDDATE.": ".mosFormatDate( $addeddate, "%d %B %Y" );

			if ($thumbnailsrc=="") $thumbnailsrc=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
			
			$categoryobj=new seyretcategory;
			$incategeries=$categoryobj->getincategorylistonlynames($vcategoryid);
			
			$incategory=_INCATEGORY.": ".$incategeries;
		//	$inchannel=_INCHANNEL.": ".$vchannelid;
			
			$videodetailswithmore=generatereadmorelink($videodetails, "", "featured".$videoid);
			$votestars=getvotestarsdisabled($videoid);
			
			
			$userobj=new seyretuser($addedby, 50);
			$useravatar=$userobj->useravatar;
			$username=$userobj->username;
			
			$uslink=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=0&userid=$addedby");
			$usernamelinked="<a href=\"".$uslink."\">".$username."</a>";			
			
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$videoid;
			$seflink=sefRelToAbs($link);
			


			if ($thecolumn==0) { 
			 $featuredvideoslist.="<tr>"; 
			} 
			$thecolumn=$thecolumn+1;
		 
			$featuredvideoslist.="<td width=\"$tdwidth\">".$featuredvideoslistrow."</td>" ;
			
			if ($thecolumn== $featuredvideoslistcolumncount){
				 $featuredvideoslist.="</tr>";
				 $thecolumn=0;		 
			}
			
			

			$featuredvideoslist = str_replace( "{videolink}", $seflink, $featuredvideoslist );				
			$featuredvideoslist = str_replace( "{videothumbnailsrc}", $thumbnailsrc, $featuredvideoslist );	
			$featuredvideoslist = str_replace( "{videodetails}", $videodetailswithmore, $featuredvideoslist );
			$featuredvideoslist = str_replace( "{videotitle}", $videotitle, $featuredvideoslist );
			$featuredvideoslist = str_replace( "{votestars}", $votestars, $featuredvideoslist );
			$featuredvideoslist = str_replace( "{incategory}", $incategory, $featuredvideoslist );
			$featuredvideoslist = str_replace( "{addeddate}", $addeddate, $featuredvideoslist );
			$featuredvideoslist = str_replace( "{useravatar}", $useravatar, $featuredvideoslist );
			$featuredvideoslist = str_replace( "{addedby}", $usernamelinked, $featuredvideoslist );	

			
		}
		
		
	
	}
	//render page navigation system ------$navfrom

		$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1' AND featured='1'");	
		$totalvid = $database->loadResult();
		if ($totalvid>0){
			$paginatedvids=0;
			$page=0;
			$navlinks="<div id=\"pagenavigationmainpage\">";
			while ($totalvid>$paginatedvids){
			$page=$page+1;
			if ($page==4) break;
			
			$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&featurednavstart=$paginatedvids");
			if ($frontfeaturednavstart==$paginatedvids){
			$navlinks.="<span class=\"pagenavigationmainpageactive\">[ ".$page." ]</span> - ";
			} else {
			$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
			}		
		

		
			$paginatedvids=$paginatedvids+$step;
			

			}
			
			$navlinks = substr($navlinks, 0, -3)."</div>";
			//echo $navlinks;	
		
		} else  {
			$navlinks="";
		}
	
		if (substr($featuredvideoslist, -4)=="<tr>"){
$featuredvideoslist=substr($featuredvideoslist, 0, -4);
}
$featuredvideoslist.="</table>";
return $featuredvideoslist.$navlinks;
}
	function getmostviewedvideoswithtemplate($theme){
	
		global $mosConfig_absolute_path, $mosConfig_live_site, $database, $Itemid;
		require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");
	
		$seyretbrwsrl = mosGetParam($_COOKIE,'seyretbrwsrl',null);
		$seyretbrwsrl=str_replace("\\\"","\"",$seyretbrwsrl);


		if ($seyretbrwsrl!=""){
			$jsonbrwsrl = new Services_Seyret_JSON();
			$seyretbrwsrlvalues = $jsonbrwsrl->decode($seyretbrwsrl);
			$cbrowsingstyleintabs=$seyretbrwsrlvalues->browsingstyleintabs;		
		} else {
			$cbrowsingstyleintabs="list";
		
		}


	
	
/* 	$mostviewedvideoslist="
	<table style=\"width:100%; text-align:right;\" cellpadding=\"3\"><tr><td><span class=\"displaystyle\">"._DISPLAYSTYLE." : </span></td><td width=\"1%\"><img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewlist_act.gif\"></td><td width=\"1%\"><img style=\"cursor:pointer;\" src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/viewgrid_pas.gif\" onclick=\"changeliststyleintabs('blocks')\"></td></tr></table>"; */
	
	
	
	if ($cbrowsingstyleintabs=="list"){
		
		$step=8;
	
		$frontmostviewednavstart = mosGetParam($_REQUEST,'mostviewednavstart',null);
		$frontmostviewednavstart=intval( $frontmostviewednavstart);
		// $frontmostviewednavstart = mosGetParam($_REQUEST,'mostviewednavstart',null);
		// $frontmostviewednavstart=intval( $frontmostviewednavstart);
		
		$template=new readtemplate;
		$mostviewedvideoslistrow=$template->gettemplatefile("listviewinvideolisttabs.php", $theme);
		$mostviewedvideoslist="<table width=\"100%\" class=\"mainpagecategorylist\">";
		
		$tdwidth=ceil(100/$mostviewedvideoslistcolumncount)."%";
		$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' ORDER BY hit DESC  LIMIT $frontmostviewednavstart,$step");
		$videos = $database->loadObjectList();
		
		$thecolumn=0;
        
		foreach ($videos as $videos){
			
			
			$videoid=$videos->id;
			$thumbnailsrc=$videos->picturelink;
			$videodetails=$videos->itemcomment;
			$videotitle=$videos->title;
			$votetotal=$videos->votetotal;
			$voteclick=$videos->voteclick;
			$vcategoryid=$videos->catid;
			$addedby=$videos->addedby;
			$addeddate=$videos->addeddate;
			$addeddate = _ADDEDDATE.": ".mosFormatDate( $addeddate, "%d %B %Y" );

			if ($thumbnailsrc=="") $thumbnailsrc=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
			
			
			$categoryobj=new seyretcategory;
			$incategeries=$categoryobj->getincategorylistonlynames($vcategoryid);
			
			$incategory=_INCATEGORY.": ".$incategeries;
		//	$inchannel=_INCHANNEL.": ".$vchannelid;
			
			$videodetailswithmore=generatereadmorelink($videodetails, "", "mostviewed".$videoid);
			$votestars=getvotestarsdisabled($videoid);
			
			
			$userobj=new seyretuser($addedby, 50);
			$useravatar=$userobj->useravatar;
			$username=$userobj->username;
			
			$uslink=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=0&userid=$addedby");
			$usernamelinked="<a href=\"".$uslink."\">".$username."</a>";			
			
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$videoid;
			$seflink=sefRelToAbs($link);
			
			if ($thecolumn==0) { 
			 $mostviewedvideoslist.="<tr>"; 
			} 
			$thecolumn=$thecolumn+1;
		 
			$mostviewedvideoslist.="<td width=\"$tdwidth\">".$mostviewedvideoslistrow."</td>" ;
			
			if ($thecolumn== $mostviewedvideoslistcolumncount){
				 $mostviewedvideoslist.="</tr>";
				 $thecolumn=0;		 
			}
			

			
			$mostviewedvideoslist = str_replace( "{videolink}", $seflink, $mostviewedvideoslist );				
			$mostviewedvideoslist = str_replace( "{videothumbnailsrc}", $thumbnailsrc, $mostviewedvideoslist );	
			$mostviewedvideoslist = str_replace( "{videodetails}", $videodetailswithmore, $mostviewedvideoslist );
			$mostviewedvideoslist = str_replace( "{videotitle}", $videotitle, $mostviewedvideoslist );
			$mostviewedvideoslist = str_replace( "{votestars}", $votestars, $mostviewedvideoslist );
			$mostviewedvideoslist = str_replace( "{incategory}", $incategory, $mostviewedvideoslist );
			$mostviewedvideoslist = str_replace( "{addeddate}", $addeddate, $mostviewedvideoslist );
			$mostviewedvideoslist = str_replace( "{useravatar}", $useravatar, $mostviewedvideoslist );
			$mostviewedvideoslist = str_replace( "{addedby}", $usernamelinked, $mostviewedvideoslist );	

			
		}
		
		
	
	} 
	//render page navigation system ------$navfrom

		$database->setQuery("SELECT count(*) FROM #__seyret_items  WHERE published='1' AND voteclick>0");	
		$totalvid = $database->loadResult();
			if ($totalvid>0){
			$paginatedvids=0;
			$page=0;
			$navlinks="<div id=\"pagenavigationmainpage\">";
			while ($totalvid>$paginatedvids){
			$page=$page+1;
			if ($page==4) break;
			
			$link=sefRelToAbs("index.php?option=com_seyret&Itemid=$Itemid&mostviewednavstart=$paginatedvids");
			if ($frontmostviewednavstart==$paginatedvids){
			$navlinks.="<span class=\"pagenavigationmainpageactive\">[ ".$page." ]</span> - ";
			} else {
			$navlinks.="<a href=\"".$link."\">[ ".$page." ]</a> - ";
			}
			
			$paginatedvids=$paginatedvids+$step;
			

			}
			$navlinks = substr($navlinks, 0, -3)."</div>";
			//echo $navlinks;	
		} else {
			$navlinks ="";
		}

	if (substr($mostviewedvideoslist, -4)=="<tr>"){
$mostviewedvideoslist=substr($mostviewedvideoslist, 0, -4);
}
$mostviewedvideoslist.="</table>";
return $mostviewedvideoslist.$navlinks;
}
	
	function getarandomvideoembed(){
		global $mosConfig_absolute_path, $mosConfig_live_site, $database;
		require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");
		
		$servertype="";
		$servercode="";
		
		$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1'");
		$videos = $database->loadResult(); 
		if ($videos==0) return "No video yet";
		if ($videos!=0){
				$randomvid=rand(1,$videos);
				$count=0;
				$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1'");
				$randvideo = $database->loadObjectList();	
				foreach ($randvideo as $randvideo) {
					  $count=$count+1;
					  if ($count==$randomvid) {
						$servertype=$randvideo->videoservertype;
						$servercode=$randvideo->videoservercode;
						$videoid=$randvideo->id;
						$videotitle=$randvideo->title;
						$videodescription=$randvideo->itemcomment;
						
						
						$videodescription=generatereadmorelink($videodescription, "100" ,"randomembed");
					}
				}
			}

		global $mosConfig_absolute_path;
		$plugin=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$servertype.".php";
		require($plugin);
		
		$pluginobject=new $classname;
		$videowidth="300";
		$videoheight="250";
		$vidembedcode=$pluginobject->generatestandardembedcode($servercode, $videowidth, $videoheight);
		
		$template=new readtemplate;
		$frontpagevideoembed=$template->gettemplatefile("mainpagevideoembed.php", $theme);
		$frontpagevideoembed = str_replace( "{embeddedvideo}", $vidembedcode, $frontpagevideoembed );		
		$frontpagevideoembed = str_replace( "{vidoetitleinembed}", $videotitle, $frontpagevideoembed );
		$frontpagevideoembed = str_replace( "{vidodescriptioninembed}", $videodescription, $frontpagevideoembed );
		
		return $frontpagevideoembed;
	}
	
	
	
	
	
	
	
	function getpublishedvideocount(){
	global $database;
		$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1'");
		$videocount = $database->loadResult();
		return $videocount;
	}


	
	function getvideocategorieswithtemplate($theme){
		global $mosConfig_absolute_path, $mosConfig_live_site, $database, $Itemid;
		require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");	

		$template=new readtemplate;
		$categorytemplate=$template->gettemplatefile("mainpagecategory.php", $theme);
		
		$mainpagecategorycolumncount="4";
		$tdwidth=ceil(100/$mainpagecategorycolumncount)."%";

		
		$categoriesresult="<table width=\"100%\" class=\"mainpagecategorylist\">";

		$database->setQuery("SELECT * FROM #__seyret_categories WHERE parentcat='' ORDER BY categoryname ASC");
		$categories = $database->loadObjectList();
		
		
		$thecolumn=1;
		
		foreach ($categories as $categories){
 
			$categoryname=$categories->categoryname;
			$categoryid=$categories->catid;
			$categorydesc=$categories->categoryinfo;
			$cid=$categories->id;
			
			
			
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&catid=".$cid;	
			$seflink=sefRelToAbs($link);
		
			$categorydescmore=generatereadmorelink($categorydesc, "150", "category".$cid);
			
			
			$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1' AND catid='$categoryid'");
			$total = $database->loadResult(); 
			if ($total<>0){
				$database->setQuery("SELECT * FROM #__seyret_items WHERE  published='1' AND catid='$categoryid' ORDER BY addeddate DESC LIMIT 0, 1");
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

		
			 if ($thecolumn==1) { 
				 $categoriesresult.="<tr><td>".$categorytemplate."</td>";
				 $thecolumn=$thecolumn+1;

			 } else if ($thecolumn==$mainpagecategorycolumncount){
				 $categoriesresult.="<td width=\"$tdwidth\">".$categorytemplate."</td></tr>";
				 $thecolumn=1;		 
			 } else {
				 $categoriesresult.="<td  width=\"$tdwidth\">".$categorytemplate."</td>";
				 $thecolumn=$thecolumn+1;		 
			 }
			 
			$categoryname="<a href=\"$seflink\">".$categoryname."</a>";
			$categoriesresult = str_replace( "{categorynameinmainpage}", $categoryname, $categoriesresult );
			$categoriesresult = str_replace( "{categorythumbnailsrcinmainpage}", $imglink, $categoriesresult );
			$categoriesresult = str_replace( "{categorydescrinmainpage}", $categorydescmore, $categoriesresult );


		
		
		}

		if (substr($categoriesresult, -4)=="<tr>"){
			$categoriesresult=substr($categoriesresult, 0, -4);
		}		
		$categoriesresult.="</table>";


		return $categoriesresult;
		
	
	}







}//class ends

?>