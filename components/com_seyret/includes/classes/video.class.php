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

class seyretvideo{
	
	//variables
	var $videoowner;
	var $videotitle;
	var $description;
	var $embedcode;
	var $bookmarks;
	var $samecategoryvideos; // get videos in same category. Result is templated html.
	var $categorylistonlynames; // get category name list with sending a combined category id.
	var $videodetailedinfo; //get video detailed info. Result is templated html.
	var $videoaddeddate;
	var $videocategoryid;
	var $vidtagslinked;
	var $videourlbox;
	
	

	
	
	function seyretvideo($id, $videowidth, $videoheight){
		global $database, $Itemid;
		
		$categoryobj=new seyretcategory;
		
		$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'");
		$videos = $database->loadObjectList();
		foreach ($videos as $video){
			$this->videotitle=$video->title;
			$this->description=$video->itemcomment;
			$plugin=$video->videoservertype;
			$servercode=$video->videoservercode;
			$catid=$video->catid;
			$this->videocategoryid=$catid;
			$this->videoowner=$video->addedby;
			$this->videoaddeddate=$video->addeddate;
			$videotags=$video->videotags;
		}
		
//only first category
		$pos=strpos($catid,"|")+1;
		$catid=substr($catid, 0, $pos);
//only first category

		$videotagslinked="";
		$videotags_array=explode(' ',$videotags);
		foreach ($videotags_array as $vt){
			$link=sefRelToAbs("index.php?option=com_seyret&task=searchvideos&Itemid=$Itemid&searchkey=$vt");
			$videotagslinked.="<a href=\"$link\">$vt</a> ";
		}
		$this->vidtagslinked=$videotagslinked;		

		$viddirectlink="index.php?option=com_seyret&task=videodirectlink&Itemid=$Itemid&id=".$id;
		$vvvlink=sefRelToAbs($viddirectlink);
		$videodirectlinkbox="<input type=\"text\" id=\"videolink\" name=\"videolink\" class=\"videodirectlink\" onClick=\"showdirectlink()\" readonly=\"readonly\" value=\"".$vvvlink."\"/>";
		$this->videourlbox=$videodirectlinkbox;
		
		
		$this->getembedcodeofthis($plugin, $servercode, $videowidth, $videoheight);
		$this->generatebookmarklist($id);
		$this->samecategoryvideos=$categoryobj->getvideosinthiscategory($catid);	
		$this->categorylistonlynames=$categoryobj->getincategorylistonlynames($catid);	
		$this->getvideodetailedinfo($id);
		

		
		
	}

	
	function getvideodetailedinfo($id){
		global $mosConfig_live_site;
		$addedby=$this->videoowner;
		$userobj=new seyretuser($addedby, 60);
		$useravatar=$userobj->useravatar;
		$username=$userobj->username;
		$vidcount=$userobj->ownedvideocount;
		$descrptn=generatereadmorelink($this->description, "85", "readmorevideodetails");
		
		$joined=mosFormatDate( $userobj->registerdate, "%d %B %Y" );


		$categoryobj=new seyretcategory;
		$incategeries=$categoryobj->getincategorylistonlynames($this->videocategoryid);



			
		$detailedinfohtml="
		<div id=\"videodetailedinfomain\">
			<table border=\"0\" cellspacing=\"0\" width=\"100%\">
			  <tr>
			    <td rowspan=\"4\" width=\"1%\">$useravatar</td>
			    <td colspan=\"2\">"._ADDEDBY.": ".$username."</td>
			  </tr>
			  <tr>
			    <td colspan=\"2\">"._JOINED.": ".$joined."</td>
			  </tr>
			  <tr>
			    <td colspan=\"2\">"._OWNEDVIDEOSCOUNT.": ".$vidcount."</td>
			  </tr>
			  <tr>
			    <td>"._INCHANNEL.": Kanal</td><td width=\"1%\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/default/images/subscribe.png\" alt=\""._SUBSCRIBETHISCHANNEL."\"/></td>
			  </tr>
			 </table>
			
			<div id=\"videodetailedinfo\">
				<span class=\"videodetailedinfotitle\">"._THISVIDEOINFORMATION."</span><br/>
				<div id=\"videodetailedinfodescription\">".$descrptn."</div>
				<div id=\"videodetailedinfoextrastoggler\">"._THISVIDEOINFORMATIONMORE."</div>
				<div id=\"videodetailedinfoextras\" style=\"display:none;\">
					<div id=\"videodetailedinfoaddeddate\">"._ADDEDDATE2.": ".mosFormatDate( $this->videoaddeddate, "%d %B %Y" )."</div>
					<div id=\"videodetailedinfocategorylist\">"._INCATEGORY.": ".$incategeries."</div>
					<table border=\"0\" width=\"100%\">
						<tr>
							<td valign=\"top\">"._TAGLIST.":"."</td>
							<td>".$this->vidtagslinked."</td>
						</tr>

						<tr>
							<td>"._DIRECTURL.":"."</td>
							<td width=\"1%\">".$this->videourlbox."</td>
						</tr>	
						
						<tr>
							<td>"._EMBED.":"."</td>
							<td width=\"1%\">".$this->videourlbox."</td>
						</tr>						
					</table>	

				
				
				</div>
			</div>
		</div>
		
		<script type=\"text/javascript\">
		
		window.addEvent('load', function(){

			$('videodetailedinfoextras').setStyle('display', 'block');

			var extrasslide = new Fx.Slide('videodetailedinfoextras');
			extrasslide.hide();
			$('videodetailedinfoextrastoggler').addEvent('click', function(e){
				e = new Event(e);
				extrasslide.toggle();
				e.stop();
			});
		
		});

		</script>
		";
		
		$this->videodetailedinfo=$detailedinfohtml;
		
	
	}

	function getembedcodeofthis($plugin, $servercode, $videowidth, $videoheight){
		global $mosConfig_absolute_path;
		$includefile=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver/".$plugin.".php";
		require_once($includefile);
		$videoplugin=new $classname;
		$embedcode=$videoplugin->generatestandardembedcode($servercode, $videowidth, $videoheight);
		$this->embedcode=$embedcode;
	}


	function generatebookmarklist($id){
		global $mosConfig_absolute_path, $mosConfig_live_site, $Itemid;
		require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

			$title=$this->videotitle;
			
			$link="index.php?option=com_seyret&Itemid=".$Itemid."&task=videodirectlink&id=".$id;
			$seflink=sefRelToAbs($link);
			$urlencseflink=urlencode($seflink);	
			
			$showdelicious="yes";
			$showdigg="yes";
			$showreddit="yes";
			$showsimpy="yes";
			$showyahoo="yes";	
			$showfurl="yes";	
			$showgoogle="yes";
			
		$bookmarklist="";
		if ($showdelicious=="yes"){
			$dellink="http://del.icio.us/post?v=2&url=$urlencseflink&notes=&tags=&title=$title";
			$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/delicious.png\" border=\"0\" alt=\"\"></a>";
		} 

		if ($showdigg=="yes"){
			$dellink="http://digg.com/submit?phase=2&url=$urlencseflink&bodytext=&tags=&title=$title";
			$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/digg.png\" border=\"0\" alt=\"\"></a>";
		}

		if ($showreddit=="yes"){
			$dellink="http://reddit.com/submit?url=$urlencseflink&title=$title";
			$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/reddit.png\" border=\"0\" alt=\"\"></a>";
		} 

		if ($showsimpy=="yes"){
			$dellink="http://www.simpy.com/simpy/LinkAdd.do?title=".$urlencseflink."&tags=&note=&href=".$title;
			$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/simpy.png\" border=\"0\" alt=\"\"></a>";
		}  

		if ($showyahoo=="yes"){
			$dellink="http://myweb2.search.yahoo.com/myresults/bookmarklet?t=".$urlencseflink."&d=&tag=&u=".$title;
			$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/yahoo.png\" border=\"0\" alt=\"\"></a>";
		}  

		if ($showfurl=="yes"){
			$dellink="http://www.furl.net/storeIt.jsp?u=".$urlencseflink."&keywords=&t=".$title;
			$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/furl.png\" border=\"0\" alt=\"\"></a>";
		} 

		if ($showgoogle=="yes"){
			$dellink="http://www.google.com/bookmarks/mark?op=add&bkmk=".$urlencseflink."&annotation=&labels=&title=".$title;
			$bookmarklist.="<a href=\"$dellink\" target=\"_blank\"> <img src=\"$mosConfig_live_site/components/com_seyret/themes/$theme/images/b_icons/google.png\" border=\"0\" alt=\"\"></a>";
		} 




		$this->bookmarks=$bookmarklist;
	}
	
	


}
?>