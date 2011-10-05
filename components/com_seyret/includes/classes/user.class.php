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

class seyretuser{


	var $userid;
	var $useravatar;
	var $username;
	var $registerdate;
	var $ownedvideocount;
	
	function seyretuser($userid, $avatarwidth){
	
		$this->userid=$userid;
		
		$this->getuseravatar($avatarwidth);
		$this->getuserdetails();
		$this->getownedvideocount();
	
	}


	function getuseravatar($width){
		global $mosConfig_absolute_path, $mosConfig_live_site, $Itemid, $database;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		
		
		$thisuserid=$this->userid;
		
		$avat="";	
		$avatar="";

		$link=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=0&userid=$thisuserid");
		
		//cb avatar
		if (file_exists($mosConfig_absolute_path."/components/com_comprofiler/comprofiler.php")){
			$database->setQuery("SELECT * FROM #__comprofiler WHERE user_id='$thisuserid;'");
			$avt = $database->loadObjectList();	
			foreach ($avt as $avt) {
			$avat=$avt->avatar;
			}
		}

		$avatarlink=$mosConfig_live_site."/images/comprofiler/".$avat;
		$avatar="<a href=\"".$link."\"><img src=\"".$avatarlink."\" border=\"0\" width=\"48\"></a>";
		if ($avat=="") $avatar="";


		if ($avatar==""){
		$avatar="<a href=\"".$link."\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/noavatar.jpg\" border=\"0\" width=\"$width\"></a>";
		}

		$this->useravatar=$avatar;

	}
	
	
	function getuserdetails(){
	global $database;
	
		$theuserid=$this->userid;
		$username=_GUEST;
		$regdate="";
		
		$database->setQuery("SELECT * FROM #__users WHERE id='$theuserid'"); 		
		$usname = $database->loadObjectList();
		foreach ($usname as $usname) 
		{
			$username=$usname->username;
			$realname=$usname->name;
			$regdate=$usname->registerDate;
		}

		$this->username=$username;
		$this->registerdate=$regdate;
	
	}
	


	function getownedvideocount(){
	global $database;
	
		$theuserid=$this->userid;
	
		$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE addedby='$theuserid'");
		$owndvideos = $database->loadResult(); 
		$this->ownedvideocount=$owndvideos;
	
	}

}//class ends

?>