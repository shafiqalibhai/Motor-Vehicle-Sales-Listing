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

class newvideo{


//ADDING NEW VIDEO FUNCTIONS==========================
	
	function applyvideolink() {
		$vidlink = mosGetParam($_POST,'videolink',null);	
		$vidlink=urldecode($vidlink);
		$videodetails=$this->getvideodetails($vidlink);

	}
	
	
	function getvideodetails($vidlink){
		global $mosConfig_absolute_path;
		$includefile=$this->getserverpluginfile($vidlink);
		
		if ($includefile!=false){
		require_once($includefile);
		
		$videoplugin=new $classname;
		
			$detailscomplete=$videoplugin->analyselink($vidlink);
			
		} else {
			$detailscomplete="<div class=\"errorreport\">"._NOSERVERFOUNDREPORTIT."</div>";
		}

			
		return $detailscomplete;
	
	}
	
	
	function getserverpluginfile($vidlink){
		global $mosConfig_absolute_path;
		$plugindir=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/";
		$aserverfound=0;
		if ($handle = opendir($plugindir)) {
		    while (false !== ($file = readdir($handle))) {
				if ($file!="." and $file!=".."){ 
				$pluginname=str_replace(".php","",$file);
				$temporaryvidlink="Joomlaalem".$vidlink;
				$pos = strpos($temporaryvidlink, $pluginname);
				$pluginaddress=$plugindir.$file;
					if ($pos<>"0"){
						$aserverfound=1;
						return $pluginaddress;
					} 
			
				}
		    }
		}
		if ($aserverfound<>1){
		return false;
		}
		closedir($plugindir);	
	
	}
	//ADDING NEW VIDEO FUNCTIONS========================== END
	
	
}

?>