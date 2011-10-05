<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_morfeoshow
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined('_JEXEC') or die('Restricted access');

class TableMorfeoshow extends JTable {
	var $id 				= null;
	var $name 				= null;
	var $description 		= null;
	var $description1 		= null;	
	var $user 				= null;
	var $published 			= null;
	var $folder 			= null;
	var $shortcut_filename 	= null;
	var $flashgallery 		= null;
	var $height 			= null;
	var $width 				= null;
	var $heightsw 			= null;
	var $widthsw			= null;
	var $heightpc 			= null;
	var $widthpc			= null;	
	var $heightpl 			= null;
	var $widthpl 			= null;	
	var $trans 				= null;
	var $movimento 			= null;	
	var $navigation 		= null;
	var $tempo 				= null;
	var $bkgnd 				= null;
	var $bkgnd1 			= null;
	var $bkgnd2 			= null;
	var $bkgnd3 			= null;
	var $ordering 			= null;
	var $metakey 			= null;
	var $metadesc 			= null;
	var $metadata 			= null;
	var $glat 				= null;
	var $glng 				= null;
	var $gzoom				= null;
	var $gmapkey			= null;
	var $luogo				= null;
	var $user_id			= null;
	var $group_id			= null;
	var $text				= null;
	var $tags				= null;
	var $set_id				= null;	
	var $sort				= null;	
	var $pusername 			= null;	
	var $pphotosize 		= null;	
	var $pthumbsize 		= null;	 
	var $palbumcols 		= null;	
	var $pcols 				= null;	
	var $pmaxresults 		= null;	
	var $pmaxalbums 		= null;	 	
	var $psingle 			= null;	
	var $pback 				= null;	
	var $paltezza 			= null;	
	var $plarghezza 		= null;	 	
	var $overstretch 		= null;
	var $shuffle 			= null;
	var $tclassic	 		= null;
	var $tcol	 			= null;
	var $orderfront			= null;	
	
	function __construct(&$db)
	{
		parent::__construct( '#__morfeoshow', 'id', $db );
	}
}
?>