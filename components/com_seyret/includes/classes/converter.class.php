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

class seyretconverter{


	var $userprocesslogfile;
	var $inputfile;	
	var $videooutputfile;
	var $inputfiletype;	
	var $outputfiletype;
	var $convertstatus;
	var $convertmessage;	
	var $videoplaytime;
	var $timeinterval;
	var $extractstatus;
	var $extractmessage;
	var $defaultthumbnailfile;
	
	
	
	function seyretconverter(){
		global $mosConfig_absolute_path, $my;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		
		$outputfile="";
		$playtime="";
		
		$this->userprocesslogfile=$mosConfig_absolute_path."/seyretfiles/uploads/videos/user_".$my->id."/process.php";
		if (file_exists($this->userprocesslogfile)) require($this->userprocesslogfile);

		//set variables
	
		$this->inputfile=str_replace(strtolower($mosConfig_absolute_path),$mosConfig_absolute_path,$uploadedvideolocation);
		$this->inputfiletype=$extension;
		$this->outputfiletype="flv";		
		$this->videooutputfile=$outputfile;
		$this->videoplaytime=$playtime;
		
	
	}
	
	
	function convertwithffmpeg(){
		global $mosConfig_absolute_path;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		
	
		if ($this->inputfiletype==".flv") {
			$this->videooutputfile=$this->inputfile;
			return;
		} else {
			$this->videooutputfile=str_replace($this->inputfiletype,".".$this->outputfiletype,$this->inputfile);
		}
		
		$ffmpegpreexec=base64_decode($ffmpegpreexec);
		
		if ($forcelamesupport=="1"){
			$lamesupp="-acodec libmp3lame";
		} else {
			$lamesupp="";
		}
		
		$videobitrate.="kb";
		$command=$ffmpegpreexec." ".$ffmpegpath." -i ".$this->inputfile." -b ".$videobitrate." -r ".$videoframerate." -s ".$setflvdimensions." -ar  ".$audiosamplingfrequency." -ab ".$audiobitrate." -aspect 4:3  -f ".$this->outputfiletype." ".$lamesupp." ".$this->videooutputfile;
		$execresult=shell_exec($command);	

		
		$this->convertstatus="converted";
		return;
		
		


		//mencoder support by imageleet
		//$execresult=shell_exec("$ffmpegpreexec /usr/local/bin/mencoder $uploadedvideolocation -o $outputfile -of lavf -oac mp3lame -lameopts abr:br=56 -ovc lavc -lavcopts vcodec=flv:vbitrate=800:mbd=2:mv0:trell:v4mv:cbp:last_pred=3 -srate 22050 -ofps 24 -vf harddup");
	}
	
	
	
	function checkfileexists($file, $filechecktype){
		if (!file_exists($file) OR is_dir($file)) {
			$this->convertstatus="notconverted";
			if ($filechecktype=="ffmpeg") $this->convertmessage=_FFMPEGNOTFOUND;			
			if ($filechecktype=="mencoder") $this->convertmessage=_MENCODERNOTFOUND;	
			if ($filechecktype=="inputfile") $this->convertmessage=_INPUTFILENOTFOUND;
		}
		

	}
	
	
	function updatelogfile($logtype){
		global $mosConfig_absolute_path, $mosConfig_live_site;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	
	
		if ($logtype=="convert"){
			if ($this->videooutputfile=="") $this->videooutputfile=$this->inputfile;
$process='
<?php 
$convertstatus="'.$this->convertstatus.'";
$outputfile="'.$this->videooutputfile.'"; 
$playtime="'.$this->videoplaytime.'";
$timeintervalforthumb="'.$this->timeinterval.'";
?>';			
		} else if ($logtype=="extract"){
		
		if ($this->extractstatus=="postponed") $thumbfile=$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/thumbscheduled.png";
		
$process='
<?php 
$thumbnailstatus="'.$this->extractstatus.'";
$thumboutputfile1="'.$this->defaultthumbnailfile.'"; 
?>';		
		
		}

			
			
		if ( $fp = fopen($this->userprocesslogfile, "a" ) ) {
			fwrite( $fp, $process );
			fclose ( $fp );
		}
	
	}
	
	
	
	
	function checkconversionconfig(){
		global $mosConfig_absolute_path;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
		
			if ($enableflvconversion=="1" AND $instantvideoprocess=="1"){
				$this->convertstatus="startconvert";
				$this->convertmessage=_VIDEOCONVERTSUCCESS;
				$this->checkfileexists($ffmpegpath, "ffmpeg");
				$this->checkfileexists($this->inputfile, "inputfile");
				
			} else if ($enableflvconversion=="1" AND $instantvideoprocess=="0"){
				$this->convertstatus="postponed";
				$this->convertmessage=_VIDEOCONVERTPOSTPONED;
			} else{
				$this->convertstatus="notconverted";
				$this->convertmessage=_VIDEOCONVERTNOTSET;
			}		
	
	
	}
	
	function checkthumbnailextractconfig(){
		global $mosConfig_absolute_path;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
			
			//Buraya shell_exec fonksiyon kontrolü ekle
			
			if ($enablethumbnailextraction=="1" AND $instantthumbprocess=="1"){
				$this->extractstatus="extract";
				$this->extractmessage=_THUMBNAILSEXTRACTED;
				$this->checkfileexists($ffmpegpath, "ffmpeg");
				$this->checkfileexists($this->inputfile, "inputfile");	
			
			
			} else if ($enablethumbnailextraction=="1" AND $instantthumbprocess=="0") {
				$this->extractstatus="postponed";
				$this->extractmessage=_THUMBNAILSEXTRACTIONBYADMIN;
			} else {
				$this->extractstatus="notextracted";
				$this->extractmessage=_NOTHUMBNAILSEXTRACT;
			}	
		
	}
	
	
	function analyzevideofile(){
		global $mosConfig_absolute_path;		
		$getidfile=$mosConfig_absolute_path.'/seyretfiles/tools/getid3/getid3/getid3.php';
		if (file_exists($getidfile)) {
			require_once($getidfile);
			$getID3 = new getID3;

			if (file_exists($this->inputfile)) {	
				$videofileinfo = $getID3->analyze($this->inputfile);
			} else {
				$videofileinfo = $getID3->analyze($this->videooutputfile);
			}
			
			
			$this->timeinterval=$videofileinfo['playtime_seconds']/7;
		} else {
			$this->timeinterval=5;
		}
		
			$this->videoplaytime=$videofileinfo['playtime_seconds'];
	}
	
	
	function extractthumbnails(){
		global $mosConfig_absolute_path, $my;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
			
		if (file_exists($this->userprocesslogfile)) require($this->userprocesslogfile);
		
		$mid=$my->id;
		
		$thumbdir=$mosConfig_absolute_path."/seyretfiles/uploads/thumbnails/user_".$mid;
		if (!is_dir($thumbdir))
				{
				$oldumask=umask(0);
				mkdir ($thumbdir,0755);
				umask($oldumask);
				}
					
		$ffmpegpreexec=base64_decode($ffmpegpreexec);
		
	
		for ($i=0;$i<6;$i++){
			$shots=$i*$timeintervalforthumb;
	 
			
			$this->defaultthumbnailfile=$thumbdir."/user_".$mid."_t".$random."_".$i.".jpg";
			$command="$ffmpegpreexec  $ffmpegpath -i ".$this->inputfile." -y -f mjpeg  -s $setthumbdimensions -ss $shots -vframes 1 -an ".$this->defaultthumbnailfile;
			
			$execresult=shell_exec($command);	
			
			
			// if ($setthumbdimensionsbig!="0"){
				// $outputfile=$thumbdir."/user_".$mid."_t".$random."_".$i."_big.jpg";
				// $execresult=shell_exec("$ffmpegpreexec  $ffmpegpath -i $uploadedvideolocation -y -f mjpeg  -s $setthumbdimensionsbig -ss $shots -vframes 1 -an $thumboutputfile");
			// }
			
		}	
		
		
		//if ($extension!=".flv") unlink($uploadedvideolocation);		
		
	
					$this->extractstatus="extracted";
	}

	
	
	
	
}

?>