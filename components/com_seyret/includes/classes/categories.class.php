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

class seyretcategory{

	var $longcatid;
	var $shortcatid;
	var $categoryname;
	var $categorynamewithparent;
	
	
	
	
	
	// function scategory($id){
		// global $database;
		
		// $database->setQuery("SELECT * FROM #__seyret_categories WHERE id='$id'");
		// $catg = $database->loadObjectList();
		// foreach ($catg as $catg){
			// $this->longcatid=$catg->catid;
			// $this->categoryname=$catg->categoryname;
		// }
		
		// $this->shortcatid=$id;

	// }
	
	
	// return a ctageory list.
	// input is a combined catgory id to allow multicategory system.
	function getincategorylistonlynames($id){
		global $database;
		$catnamelist="";
		$database->setQuery("SELECT * FROM #__seyret_categories WHERE catid='$id'");
		$ccc = $database->loadObjectList();
		foreach ($ccc as $ccc){
			$catnamelist.=$ccc->categoryname.", ";
		}
			
		
	
	$catnamelist=substr($catnamelist,0,-2);
	return $catnamelist;
	}
	
	function getcategoriescombobox($selectedcatid){
		global $database;
		
		$videocats = array();
		$database->setQuery("SELECT * FROM #__seyret_categories");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
			$catname = $cat->categoryname;
			$catid = $cat->catid;
			$videocats[] = mosHTML::makeOption($catid, $catname );
		}

	$videocatlist = mosHTML::selectList($videocats,"categoryquicklist",'id="categoryquicklist" class="inputbox" size="1"',"value","text",$selectedcatid);
	
	return $videocatlist;
	}
	
	
	function getvideosinthiscategory($catid){
		global $mosConfig_absolute_path, $database, $Itemid;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
		
		$template=new readtemplate;
		$samecategoryvideoslistrow=$template->gettemplatefile("listviewinvideopage.php", $theme);
		

		$videoslist="";
		$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1' AND catid like '%$catid%' ORDER BY addeddate DESC");
		$videos = $database->loadObjectList();
		foreach ($videos as $videos){
			$videoslist.=$samecategoryvideoslistrow;
			
			$videoid=$videos->id;
			$thumbsrc=$videos->picturelink;
			$title=$videos->title;
			$votetotal=$videos->votetotal;
			$voteclick=$videos->voteclick;
			$addedby=$videos->addedby;
			
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$videoid;
			$seflink=sefRelToAbs($link);
			$videotoolsobj=new videotools;
			$votestars=$videotoolsobj->getvotestars($votetotal,$voteclick, "small");

			$videoowner=new seyretuser($addedby, 10);
			$addedbyname=$videoowner->username;

			
			$videoslist = str_replace( "{videothumbnailsrc}", $thumbsrc, $videoslist );	
			$videoslist = str_replace( "{videotitle}", $title, $videoslist );	
			$videoslist = str_replace( "{votestars}", $votestars, $videoslist );	
			$videoslist = str_replace( "{videolink}", $seflink, $videoslist );	
			$videoslist = str_replace( "{addedby}", $addedbyname, $videoslist );	
			
			
		}
	
	
	
	
	return $videoslist;
	}
	
}


?>