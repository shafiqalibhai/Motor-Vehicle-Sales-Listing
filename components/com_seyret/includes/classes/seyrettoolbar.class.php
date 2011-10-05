<?php
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

// no direct access
defined( '_VALID_MOS' ) or die( 'Oppps, what are you doing' );

class seyrettoolbar{

	function seyrettoolbar(){
		$this->usertoolbar=$this->getusertoolbar();
		$this->admintoolbar=$this->admintoolbar();
	}
	
	function getusertoolbar(){
		global $mosConfig_absolute_path;
		require($mosConfig_absolute_path."/components/com_seyret/includes/seyret.permissions.php");
		
		return "denemeuser";
	}

	function admintoolbar(){
	
		return "denemeadmin";
	}

}


?>