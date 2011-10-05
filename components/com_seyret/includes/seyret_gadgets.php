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





function getuseravatar($addedby){
	global $mosConfig_absolute_path, $mosConfig_live_site, $Itemid, $database;
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');
	
$avat="";	
$avatar="";

	$link=sefRelToAbs("index.php?option=com_seyret&task=uservideoslist&Itemid=$Itemid&from=0&userid=$addedby");
	
//cb avatar
if (file_exists($mosConfig_absolute_path."/components/com_comprofiler/comprofiler.php")){
	$database->setQuery("SELECT * FROM #__comprofiler WHERE user_id='$addedby'");
	$avt = $database->loadObjectList();	
	foreach ($avt as $avt) {
	$avat=$avt->avatar;
	}
}

$avatarlink=$mosConfig_live_site."/images/comprofiler/".$avat;
$avatar="<a href=\"".$link."\"><img src=\"".$avatarlink."\" border=\"0\" width=\"48\"></a>";
if ($avat=="") $avatar="";


if ($avatar==""){
$avatar="<a href=\"".$link."\"><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/".$theme."/images/noavatar.jpg\" border=\"0\" width=\"48\"></a>";
}

return $avatar;

}




function jalem_file_get_contents($url) {
  
  if (function_exists('curl_init')){
	  $ch=curl_init();
	  $timeout=30; // set to zero for no timeout
	  curl_setopt($ch,CURLOPT_URL, $url);
	  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	  $file_contents=curl_exec($ch);
	  curl_close($ch);
  } else {
	$file_contents=file_get_contents($url);
  }
  return $file_contents;
}




//Function:jagetusername ->start *****************
function jagetusersname($id) {
global $database, $my, $mosConfig_absolute_path;
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");  
		
		$username=_UNKNOWN;
		
		$database->setQuery("SELECT name, username FROM #__users WHERE id='$id'"); 		
		$usname = $database->loadObjectList();
		foreach ($usname as $usname) 
		{
		$uname=$usname->name;
		$username=$usname->username;
		}

	if ($screenname=="username"){	
	return $username;
	} else {
	return $uname;
	}
	
	
	
}
//Function:jagetusername->end   *******************


function getseyretcomments($id){
global $mosConfig_absolute_path, $Itemid;
require($mosConfig_absolute_path.'/components/com_seyret/includes/seyret_permissions.php');	
require($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_config.php");  

	
	$comments="";

	if ($showcomments=="yes"){
	
	    if ($commentingsystem=="jcomments") {
		      $comments = $mosConfig_absolute_path . '/components/com_jcomments/jcomments.php';
		      if (file_exists( $comments )) {
		        require_once( $comments );
		        $comments = JComments::showComments( $id, 'com_seyret', '' );
		      }
	    } else if ($commentingsystem=="jomcomment"){
			$jomcommentfile=$mosConfig_absolute_path. "/mambots/content/jom_comment_bot.php";
			if (file_exists($jomcommentfile)){
				include_once($jomcommentfile);
				$comments=jomcomment($id, "com_seyret");
				$comments.="<div id=\"seyretfbdiscussinput\"></div><div id=\"toggle\"></div>";
			} else {
				$jomcommentfile=$mosConfig_absolute_path. "/plugins/content/jom_comment_bot.php";
				if (file_exists($jomcommentfile)){
					include_once($jomcommentfile);
					$comments=jomcomment($id, "com_seyret");
					$comments.="<div id=\"seyretfbdiscussinput\"></div><div id=\"toggle\"></div>";
				}			
			
			}
		} else if ($commentingsystem=="fireboard") {

			if ($showcomments=="yes"){
			$comments=seyretfbforum($id);
			}
			
			if ($comments=="") {
			$comments="<div id=\"seyretfbdiscussinput\"></div><div id=\"toggle\"></div>";
			}
		} else if ($commentingsystem=="nocomment"){
			
			$comments="<div id=\"seyretfbdiscussinput\"></div><div id=\"toggle\"></div>";
		

		} else if ($commentingsystem=="joomlacomment"){
			global $option, $mosConfig_absolute_path;
			require("$mosConfig_absolute_path/administrator/components/com_comment/plugin/$option/josc_com_seyret.php");
			$comments="$comments";

		
		}



	}
	
	return $comments;

}




function generaterandom ($length)
{

  $randomstart ="";
  $possible = "0123456789abcdefghijklmnopqrstuwxyz"; 
  $i = 0; 
  while ($i < $length) { 
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    if (!strstr($randomstart, $char)) { 
      $randomstart .= $char;
      $i++;
    }
  }
return $randomstart;
}


//strange but some servers don't accept % sign, so don't use php urlencode
function jalemurlencode($url){
	$url=str_replace("&","*am*",$url);	
	$url=str_replace("=","*eq*",$url);
	$url = str_replace( "/", "25ja25", $url );	
	$url = str_replace( ":", "1twodots1", $url );	
	$url = str_replace(	".", "p_p_p", $url );
	$url = str_replace(	" ", "h_h_h", $url );	
	$url = str_replace(	"-", "m_m_m", $url );

	return $url;
}


function jalemurldecode($url){
	$url=str_replace("*am*","&",$url);	
	$url=str_replace("*eq*","=",$url);
	$url = str_replace( "25ja25", "/",$url );	
	$url = str_replace( "1twodots1", ":",$url );
	$url = str_replace( "p_p_p", ".",$url );
	$url = str_replace( "h_h_h", " ",$url );
	$url = str_replace( "m_m_m", "-",$url );
	return $url;
}



function generatereadmorelink($string, $cutcharcount ,$spanid){

	$stringcharcount=strlen($string);
	if ($cutcharcount=="") $cutcharcount=300;

	if ($stringcharcount>$cutcharcount){

			$itisok="no";
			while ($itisok=="no"){
				 $chartest=substr($string, $cutcharcount, 1);
				 if ($chartest==" "){
					$itisok="yes";
				 } else {
					$cutcharcount=$cutcharcount-1;
				 }
			}

			$newstring1=substr($string, 0, $cutcharcount);
			$morestring=" <span id=\"more".$spanid."\" class=\"readmore\" onclick=showmoredetails('".$spanid."')> ["._READMORE."] </span>";
			$lessstring=" <span id=\"less".$spanid."\" class=\"readmore hiddenspan\" onclick=showlessdetails('".$spanid."')> ["._LESS."] </span>";
			$newstring2="<span id=\"".$spanid."\" class=\"hiddenspan\">".substr($string, $cutcharcount, 10000)."</span>";

			return $newstring1. $newstring2. $morestring.  $lessstring;


	} else {
			return $string;
	}


}



function download($file_source, $file_target, $downloadertype="") {
global $database, $mosConfig_absolute_path;
	$typenotset="";
	$checkresult="0";
	

	if ($downloadertype=="") {
		$downloadertype="curl";
		$typenotset="1";
	}


$file=$mosConfig_absolute_path."/libraries/joomla/filesystem/folder.php";
$japiversion="";

if (file_exists($file)) {

	jimport('joomla.filesystem.file');
	
	$japiversion="1.5";
}	
	
	error_reporting(E_ALL);
	
	
	
	if (function_exists('curl_init') AND $downloadertype=="curl"){
		 
		  $ch=curl_init();
		  $timeout=10; // set to zero for no timeout
		  curl_setopt($ch,CURLOPT_URL, $file_source);
		  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		  $file_contents=curl_exec($ch);
		  curl_close($ch);
		  
		  
		  // echo "mustafa<br>".$file_target."<br>".$file_contents;
		  
		  // exit;
		  
		  if ($japiversion=="1.5") {
			JFile::write($file_target, $file_contents);
		  
		  } else {
		  
	        $wh = fopen($file_target, 'wb');
            if (fwrite($wh, $file_contents) === FALSE) {
	                   // 'Download error: Cannot write to file ('.$file_target.')';

			}
			
	        fclose($wh);
			
		  }


			
			if ($typenotset=="1"){
				$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='curl'");			 
				if (!$database->query()){
					echo "hata";
					exit;
				}
			}
			
			if (filesize($file_target)==0){
				unlink($file_target);
				$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='fopen'");			 
				if (!$database->query()){
						echo "hata";
					}			
			
			}
			


	        return;

			
		  
		  
	} else {
 
		
        $rh = fopen($file_source, 'rb');
        $wh = fopen($file_target, 'wb');
        if ($rh===false || $wh===false) {
// error reading or opening file
           return;
        }
        while (!feof($rh)) {
            if (fwrite($wh, fread($rh, 1024)) === FALSE) {
                   // 'Download error: Cannot write to file ('.$file_target.')';
               }
        }
        fclose($rh);
        fclose($wh);

		if ($typenotset=="1"){
			$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='fopen'");			 
			if (!$database->query()){
				echo "hata";
				exit;
			}
		}

			
		
		if (filesize($file_target)==0){
			unlink($file_target);
			$database->setQuery("UPDATE #__seyret_check SET dfltdownloader='curl'");			 
			if (!$database->query()){
					echo "hata";
				}			
			
		}
        // No error
        return;
		
		
	}		

	
}

?>