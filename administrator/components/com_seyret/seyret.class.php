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


// VIDEO DATABASE =======================================

class mosseyretitem extends mosdbTable 
			{
			 var $id=null;
			 var $catid=null;
			 var $title=null;
			 var $itemcomment=null;
			 var $videoservertype=null;
			 var $videoservercode=null;
			 var $picturelink=null;
			 var $ordering=null;
			 var $hit=null;
			 var $votetotal=null;
			 var $voteclick=null;
			 var $addedby=null;
			 var $addeddate=null;			 
			 var $published=null;			 
			 var $downloadcount=null;
			 var $accesslevel=null; 
			 var $hasbackup=null;
			 var $backupid=null;
			 var $isdownloadable=null;
			 var $videourl=null;
			 var $featured=null;
			 var $fbthread=null; 
			 var $videotags=null;
			 var $playtime=null;//seconds
			 var $isreplyto=null;

			 
function mosseyretitem(&$db) 
					{
			$this->mosDBTable('#__seyret_items','id',$db);

					}
	
			}
//==========================================================
	
	
// Category DATABASE =======================================

class mosvideocat extends mosdbTable 
			{
			 var $id=null;
			 var $catid=null;
			 var $categoryname=null;
			 var $parentcat=null;
			 var $categoryinfo=null;
			 var $categoryfilesdirectory=null;
			 
			 


function mosvideocat(&$db) 
					{
			$this->mosDBTable('#__seyret_categories','id',$db);

					}
	
			}
//==========================================================


// AD DATABASE =======================================

class mosseyretad extends mosdbTable 
			{
			 var $id=null;
			 var $catid=null;
			 var $adlink=null;
			 var $published=null;

			 
			 

function mosseyretad(&$db) 
					{
			$this->mosDBTable('#__seyret_ads','id',$db);

					}
	
			}
//==========================================================


// IMAGE AD DATABASE =======================================

class mosseyretimagead extends mosdbTable 
			{
			 var $id=null;
			 var $catid=null;
			 var $imageadlink=null;
			 var $published=null;
			 var $clicklink=null;
			 
			 

function mosseyretimagead(&$db) 
					{
			$this->mosDBTable('#__seyret_imageads','id',$db);

					}
	
			}
//==========================================================

// CHECK DATABASE =======================================

class mosseyretcheck extends mosdbTable 
			{
			 var $id=null;
			 var $dbversion=null;
			 var $joomlaalemtrack=null;
			 var $joomlaalemuserid=null;
			 var $jalemdonated=null;
			 var $seyrethelp=null;
			 var $seyretsnippet=null;
			 var $seyretpro=null;
			 var $prophpdate=null;
			 var $accepttermsofuse=null;
			 var $savedconfig=null;
			 
			 
			 
			 

function mosseyretcheck(&$db) 
					{
			$this->mosDBTable('#__seyret_check','id',$db);

					}
	
			}
//==========================================================	


// REPORT DATABASE =======================================

class mosseyretreport extends mosdbTable 
			{
			 var $id=null;
			 var $videoid=null;
			 var $reportedby=null;
			 var $reporteddate=null;
			 var $reportreason=null;
			 var $reportread=null;
			 var $reportprocessed=null;
			 var $reportprocessedby=null;
			 var $reportreply=null;
			 var $reportreplydate=null;			 

			 
			 

function mosseyretreport(&$db) 
					{
			$this->mosDBTable('#__seyret_reports','id',$db);

					}
	
			}
//==========================================================



// PERMISSIONS DATABASE =======================================

class mosseyretpermissions extends mosdbTable 
			{
			 var $id=null;
			 var $jaclname=null;
			 var $canseeadmintoolbar=null;
			 var $canseereportedvideosbutton=null;
			 var $canseependingvideosbutton=null;
			 var $canseeaddvideobutton=null;
			 var $canaddvideos=null;
			 var $canseeuploadvideobutton=null;
			 var $canuploadvideos=null;
			 var $canseemyvideosbutton=null;
			 var $canseefeaturedvideosbutton=null;
			 var $canseesearchvideosbutton=null;
			 var $canseehelpbutton=null;
			 var $canseedeletevideobutton=null;
			 var $candeletevideo=null;
			 var $canseeeditvideobutton=null;
			 var $caneditvideo=null;
			 var $canseefullscreenbutton=null;
			 var $canseedownloadbutton=null;
			 var $candownloadvideo=null;
			 var $canseereportbutton=null;
			 var $canreportvideos=null;
			 var $canseedirectlinkbox=null;
			 var $canseeembedbox=null;
			 var $canseevotestars=null;
			 var $canvote=null;
			 var $canseecomments=null;
			 var $canpublishvideo=null;
			 var $canseevideoservercodes=null;
			 var $uservideoaccesslevel=null;
			 
			 var $caneditownvideos=null;
			 var $candeleteownvideos=null;
			 
			 
			 

function mosseyretpermissions(&$db) 
					{
			$this->mosDBTable('#__seyret_permissions','id',$db);

					}
	
			}
//==========================================================
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>