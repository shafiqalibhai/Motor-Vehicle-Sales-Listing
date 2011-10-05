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

class seyretinstaller{


	var $downloadedzipfile;	
	var $temporaryfolder;
	var $targetfolder;
	var $error;
	var $xmlfilename;	
	var $plugindate;
	var $plugintype;	
	var $fileslist;		
	var $downloadcode;		
	
	
	function seyretinstallerunzip(){
		global $mosConfig_absolute_path;

		if (file_exists($mosConfig_absolute_path.'/libraries/pcl/pclzip.php')) {
			require_once( $mosConfig_absolute_path.'/libraries/pcl/pclzip.php' );
			require_once( $mosConfig_absolute_path . '/libraries/pcl/pclerror.php' );
		} else if (file_exists($mosConfig_absolute_path . '/administrator/includes/pcl/pclzip.lib.php')) {
			require_once( $mosConfig_absolute_path . '/administrator/includes/pcl/pclzip.lib.php' );
			require_once( $mosConfig_absolute_path . '/administrator/includes/pcl/pclerror.lib.php' );
		} else {
			$this->error="Missing zip library";
		}
		
		
		$meddir = $mosConfig_absolute_path."/seyretfiles/cache/tmp";	
		$random=generaterandom(15);
		$tmpdir="install_".$random;
		$this->temporaryfolder=$meddir ."/".$tmpdir;
		
		$zipfile = new PclZip( $this->downloadedzipfile );

		$extr = $zipfile->extract( PCLZIP_OPT_PATH, $this->temporaryfolder );
		if($extr == 0) {
			$this->error="Couldn't extract zip file.";
			return false;
		}

		unlink($this->downloadedzipfile);
		
		return;
	
	}
	
	
	
	function readxmlfile(){
	global $mosConfig_absolute_path;
	require( $mosConfig_absolute_path . '/includes/domit/xml_domit_include.php' );	
	
		$xmlfile=$this->temporaryfolder."/".$this->xmlfilename;
		
		$seyretxmldoc =& new DOMIT_Document(); 
		$success = $seyretxmldoc->loadXML($xmlfile, true); 

		if ($success) {

			$seyretxmlelement =& $seyretxmldoc->documentElement;
			$seyretchildnodes=& $seyretxmlelement->childNodes;
		  
			foreach ($seyretchildnodes as $schildnode) {
				if ($schildnode->nodeName=="type") $this->plugintype=$schildnode->getText();
				if ($schildnode->nodeName=="date") $this->plugindate=$schildnode->getText();
				if ($schildnode->nodeName=="targetfolder") $this->targetfolder=$schildnode->getText();				
				if ($schildnode->nodeName=="files") $this->fileslist=$schildnode;	
			}
		  
		
		}
		
		return; 
	
	}
	
	
	
	function installfiles(){
		global $mosConfig_absolute_path;
		
		$checkpath=$mosConfig_absolute_path.$this->targetfolder;
		$filefolder=explode('/',$this->targetfolder);
		$path=$mosConfig_absolute_path;
		foreach ($filefolder as $checkfolder){
			if ($checkfolder=="") continue;
			$path.="/".$checkfolder;
				if (!is_dir($path))
					{
					$oldumask=umask(0);
					mkdir ($path,0755);
					umask($oldumask);
					}			
		
		
		}
		
		foreach($this->fileslist->childNodes as $file){
			$filename=$file->getText();
			$sourcepath=$this->temporaryfolder."/".$filename;
			$targetpath=$mosConfig_absolute_path.$this->targetfolder."/".$filename;
			
			
			
			//echo "<br>".$targetpath."<br>".$basedir;
			
			$basedir=$mosConfig_absolute_path.$this->targetfolder;
			$filefolder=explode('/',$filename);
			$foldercount=count($filefolder)-1;
			for ($i=0; $i<$foldercount; $i++){
				$basedir=$basedir."/".$filefolder[$i];
				if (!is_dir($basedir))
					{
					$oldumask=umask(0);
					mkdir ($basedir,0755);
					umask($oldumask);
					}			
			}
			
			copy($sourcepath, $targetpath);
			unlink($sourcepath);
		}

			
		full_rmdir($this->temporaryfolder);
	
	}
	
	
	function findxmlfile(){
		$dirname=$this->temporaryfolder;

		if ($dirHandle = opendir($dirname)){
            while ($file = readdir($dirHandle)){
			
				$analyzepath = pathinfo($dirname."/".$file);
				$exttype=$analyzepath['extension'];
                if ($exttype == 'xml') {
					$this->xmlfilename=$file;
				}
            }

            closedir($dirHandle);

            return true;
        }
	
	}
	
	
	function installthezip(){
		$this->seyretinstallerunzip();		
		$this->findxmlfile();
		$this->readxmlfile();
		$this->installfiles();	
	
	
	}
	
	
	function getandinstall(){
		global $database, $mosConfig_absolute_path;
		
		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
			$joomlaalemuserid=$check->joomlaalemuserid;	
			$downloadertype= $check->dfltdownloader;		
		}
		
		
		require( $mosConfig_absolute_path . '/administrator/components/com_seyret/seyret_version.php' );	
		$seyretversion=str_replace( ".","__",  $seyretversion );
		
		

		$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=downloadpackage&downloadcode=".$this->downloadcode."&jalemuserid=".$joomlaalemuserid."&sv=".$seyretversion;
		

		
	
		$downloadto = $mosConfig_absolute_path."/seyretfiles/cache/tmp";	
		$random=generaterandom(15);
		$this->downloadedzipfile=$downloadto."/".$random.".zip";
		
		download($link, $this->downloadedzipfile, $downloadertype);
		
		

		
		$this->installthezip();

	}






















}


?>