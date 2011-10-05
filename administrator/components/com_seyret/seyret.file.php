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
defined( '_VALID_MOS' ) or die( 'Kýsýtlý alan' );



class seyret_file{
	var $filedir;
	var $filename;
	var $filefulladdress;
	var $fileownerid;
	var $fileownername;
	var $permissions;
	var $permissionsstring;
	var $fileexists;
	
	function jhfile($fdir, $file){

		$this->filedir = $fdir;
		$this->filename = $file;
		$this->filefulladdress = $fdir."/".$file;
		clearstatcache();
		if (file_exists($this->filefulladdress)){
			$this->getownername();
			$this->getpermissions();
			$this->fileexists="yes";
		} else {
			$this->fileexists="no";
		}

	}
	
	
	function getownername(){
		$this->getownerid();
		if (function_exists("posix_getpwuid")){
			$userinfo = posix_getpwuid($this->fileownerid);
			$this->fileownername=$userinfo['name'];
		}
	}
	
	
	function getownerid(){
	
		$this->fileownerid = fileowner( $this->filefulladdress );
	}
	
	function getpermissions(){
		$this->permissions=substr(sprintf('%o', fileperms($this->filefulladdress)), -4);
		$this->permissionstostring();
	}
	
	function permissionstostring(){
		$perms=$this->permissions;
		if (($perms & 0xC000) == 0xC000) {
		   
	   // Socket
		$info = 's';
		} elseif (($perms & 0xA000) == 0xA000) {
			// Symbolic Link
			$info = 'l';
		} elseif (($perms & 0x8000) == 0x8000) {
			// Regular
			$info = '-';
		} elseif (($perms & 0x6000) == 0x6000) {
			// Block special
			$info = 'b';
		} elseif (($perms & 0x4000) == 0x4000) {
			// Directory
			$info = 'd';
		} elseif (($perms & 0x2000) == 0x2000) {
			// Character special
			$info = 'c';
		} elseif (($perms & 0x1000) == 0x1000) {
			// FIFO pipe
			$info = 'p';
		} else {
			// Unknown
			$info = 'u';
		}

		// Owner
		$info .= (($perms & 0x0100) ? 'r' : '-');
		$info .= (($perms & 0x0080) ? 'w' : '-');
		$info .= (($perms & 0x0040) ?
					(($perms & 0x0800) ? 's' : 'x' ) :
					(($perms & 0x0800) ? 'S' : '-'));

		// Group
		$info .= (($perms & 0x0020) ? 'r' : '-');
		$info .= (($perms & 0x0010) ? 'w' : '-');
		$info .= (($perms & 0x0008) ?
					(($perms & 0x0400) ? 's' : 'x' ) :
					(($perms & 0x0400) ? 'S' : '-'));

		// World
		$info .= (($perms & 0x0004) ? 'r' : '-');
		$info .= (($perms & 0x0002) ? 'w' : '-');
		$info .= (($perms & 0x0001) ?
					(($perms & 0x0200) ? 't' : 'x' ) :
					(($perms & 0x0200) ? 'T' : '-'));

		$this->permissionsstring=$info;
	}
	
	
			
	
}
?>