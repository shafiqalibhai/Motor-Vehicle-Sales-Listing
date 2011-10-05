<?php
//Myspace.com plugin for Seyret component//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ Seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html

**/	

// no direct access
defined( '_VALID_MOS' ) or die( 'Kýsýtlý alan' );


function myspacetvcomgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype){
	
	global $database, $mosConfig_absolute_path, $mosConfig_live_site,$my;
	
require($mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/myspace.com.php");
	$vidlink=str_replace("http://myspacetv.com/","http://vids.myspace.com/",$vidlink);
	$renderinputformfake=myspacecomgetvideodetails($vidlink, $existingcode,$categorylist, $reqtype);
	
		$adxml="";
	$dlink="";
	$unexpectederror="";
	$fullmd5cachefile="";
	$vdlink="";
	
	return $renderinputformfake;
}

?>