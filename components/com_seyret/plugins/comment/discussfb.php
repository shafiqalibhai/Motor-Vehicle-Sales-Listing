<?php
/**********************************************************************************
*Seyret discuss on Fireboard
 **********************************************************************************/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );



$task = mosGetParam( $_REQUEST, 'task', null);


switch ($task){
	case "saveseyrefbmessage":
	saveseyrefbmessage();
	break;	
}	
	
function seyretfbforum($id){
	global $database, $mainframe, $my, $mosConfig_absolute_path, $Itemid;

	if (file_exists($mosConfig_absolute_path."/components/com_fireboard/sources/fb_debug.php")) {
		include_once($mosConfig_absolute_path."/components/com_fireboard/sources/fb_debug.php");
	} else {
		return  "Fireboard not detected";
	}
	

	
	require_once ($mainframe->getCfg("absolute_path") . "/components/com_fireboard/sources/fb_config.class.php");
	
	$msgno=1;
	$userinfo="";
	$msg_avatar="";
	$avatar="";
	

			
			
	// get fireboards configuration params in
	require_once ($mosConfig_absolute_path. "/components/com_fireboard/sources/fb_config.class.php");
	global $fbConfig;
	$fbConfig = new fb_config();
	$fbConfig->load();
	include_once($mosConfig_absolute_path.'/components/com_fireboard/class.fireboard.php');
	include_once($mosConfig_absolute_path.'/components/com_fireboard/template/default/smile.class.php');

	
	
	// Include the fireboard language file
   	$mosConfig_lang=$mainframe->getCfg( 'lang' );
   	if (file_exists($mosConfig_absolute_path.'/administrator/components/com_fireboard/language/'.$mosConfig_lang.'.php')) 
    include_once($mosConfig_absolute_path.'/administrator/components/com_fireboard/language/'.$mosConfig_lang.'.php');
   	else 
    include_once($mosConfig_absolute_path.'/administrator/components/com_fireboard/language/english.php');



	$database->setQuery("SELECT * FROM #__seyret_items WHERE id='$id'"); 		
	$titl = $database->loadObjectList();
	foreach ($titl as $titl) 
	{
		$vtitle=$titl->title;
		$fbthred=$titl->fbthread;
		
	}	

	if ($fbthred=="0") {
		$discusstopic=$vtitle;
	} else {
		$discusstopic=_TOPICRE.$vtitle;
	}
		$discusstopic= str_replace("\"", "&quot;", $discusstopic);

  	$rowss=1;
	$boardcomments="<table class=\"fbdiscuss_table\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
	";  
	  
	$database->setQuery("SELECT * from #__fb_messages AS a left join #__fb_messages_text AS b on a.id=b.mesid where thread=$fbthred ORDER BY a.time ASC");	
	$sthread = $database->loadObjectList();
	foreach ($sthread as $sthread) 
	{
		$uname=$sthread->name;
		$userid=$sthread->userid;
		$fmessage=$sthread->message;
		$fsubject=$sthread->subject;
		$ftime=$sthread->time;
		$catid=$sthread->catid;
		

	
	$post_date = date("F jS Y  g:i", $ftime);
	
	//get avatar
	


	
   if ($fbConfig->allowavatar)
    {
       // $Avatarname = $userinfo->username;

        if ($fbConfig->avatar_src == "clexuspm") {
            $msg_avatar = '<span class="fb_avatar"><img class="fb_avatar_seyret" src="' . MyPMSTools::getAvatarLinkWithID($userid, "b") . '" alt="" /></span>';
        }
        elseif ($fbConfig->avatar_src == "cb")
        {
            $database->setQuery("SELECT avatar FROM #__comprofiler WHERE user_id=$userid AND avatarapproved=1");
            $avatar = $database->loadResult();

            if ($avatar != '')
            {
                //This now  has the right path to the upload directory and also handles the thumbnail and gallery photos.
                $imgpath = JB_JLIVEURL . '/images/comprofiler/';

                if (eregi("gallery/", $avatar) == false)
                    $imgpath .= "tn" . $avatar;
                else
                    $imgpath .= $avatar;

                $msg_avatar = '<span class="fb_avatar"><img width="60" src="' . $imgpath . '"  alt="" /></span>';
            }
            else {
                $imgpath = JB_JLIVEURL."/components/com_comprofiler/plugin/language/default_language/images/tnnophoto.jpg";
                $msg_avatar = '<span class="fb_avatar"><img width="60" src="' . $imgpath . '"  alt="" /></span>';
            }
        }
        else
                                    {
                                        //$avatar = $userinfo->avatar;
                                        
										
								
                                        if ($avatar != '') {
                                        	if(!file_exists(FB_ABSUPLOADEDPATH . '/avatars/l_' . $avatar)) {
											$msg_avatar = '<span class="fb_avatar"><img width="60" border="0" src="' . FB_LIVEUPLOADEDPATH . '/avatars/' . $avatar . '"  alt="" /></span>';									
											} else {
                                            $msg_avatar = '<span class="fb_avatar"><img width="60" border="0" src="' . FB_LIVEUPLOADEDPATH . '/avatars/l_' . $avatar . '"  alt="" /></span>';									
											}
                                        }
										
                                    	else {$msg_avatar = '<span class="fb_avatar"><img width="60"  border="0" src="' . FB_LIVEUPLOADEDPATH . '/avatars/nophoto.jpg"  alt="" /></span>'; }
                                    }
                                }

	//get avatar000000000000000000000000000000000000000000000000000000000000
	
	

	
	if ($msgno==1) {
	
		$fmessage = str_replace("<backlink>", "[quote]", $fmessage);
		$fmessage = str_replace("</backlink>", "[/quote]", $fmessage);
		
		$dummymessage=$fmessage;
		
		$pos = strpos($dummymessage, "[quote]")+7;
		$post=strpos($dummymessage, "[/quote]")-$pos;
		$dummymessagequote=substr($dummymessage,$pos,$post);
		
		$fmessage=str_replace($dummymessagequote,"",$fmessage);	
		$fmessage = str_replace("[quote]", "", $fmessage);
		$fmessage = str_replace("[/quote]", "", $fmessage);
	}

	
	$fmessage = smile::smileReplace($fmessage, 0, $fbConfig->disemoticons);
	$fmessage = str_replace("\n", "<br/>", $fmessage);

	
	
	
	
	if ($msgno==1) {
		$dummymessagequote = str_replace("[url=", "<a href=\"", $dummymessagequote);
		$dummymessagequote = str_replace("]", "\">", $dummymessagequote);
		$dummymessagequote = str_replace("[/url\">", "</a>", $dummymessagequote);
		$fmessage="<div class=\"discussbacklink\">".$dummymessagequote."</div>".$fmessage;
	}
	
	$boardcomments.="<tr><td width=\"1%\"  class=\"fbdiscussrow".$rowss."\">".$msg_avatar;
	
	$boardcomments.="</td><td valign=\"top\"  class=\"fbdiscussrow".$rowss." fbdiscussrowright\"><span class=\"fbdiscusssubject\">".$fsubject."</span> - <span class=\"fbdiscussthreadname\">$uname</span> <span class=\"fbdiscussthreaddate\">$post_date</span><br/>".$fmessage;
	
	$boardcomments.="</td></tr>";
	
	if ($rowss==1){
	$rowss=2;
	} else $rowss=1;
	
	$msgno=$msgno+1;
	}
	
	$boardcomments.="<tr><td colspan=\"2\" class=\"discussionlinkrow\" id=\"toggle\" style=\"cursor:pointer;\">";
	
	if(!$my->id){
		$boardcomments.=_LOGINTOWRITECOMMENT;
	} else {
		$boardcomments.=_CLICKHERETODISCUSS;
	}
	
	$boardcomments.="</td></tr>"; 	
	$boardcomments.="</table>"; 	

	$query = "SELECT id FROM #__menu WHERE link = 'index.php?option=com_seyret' AND published = '1'";
	$database->setQuery( $query, 0, 1 );
	$seyretitemid = $database->loadResult();	

	$boardcommentsinput="




	

<div id=\"seyretfbdiscussinput\">


	<form action=\"index.php\" method=\"post\" name=\"adminForm\" id=\"adminForm\">


	<table class=\"seyretfbdiscussposttable\">
		<tr>
			<th colspan=\"2\">"._DISCUSSPOSTHEADER."
			</th>
		</tr>
		
		<tr>
			<td>
				"._INPUTFBDISCUSSTOPIC."
			</td>
			
			<td>
				<input type=\"text\" id=\"seyretfbmessagetopic\" name=\"seyretfbmessagetopic\" class=\"seyretfbmessagetopic\" value=\"".$discusstopic."\"/>
			</td>
		</tr>
		<tr>
			<td>
				"._INPUTFBDISCUSSMESSAGE."
			</td>
			
			<td>
				<textarea class=\"seyretfbmessagebody\" rows=\"5\" id=\"seyretfbmessageadd\" name=\"seyretfbmessageadd\"></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;
			</td>
			
			<td>
				<button type=\"submit\" name=\"submit\" id=\"submitter\" class=\"button\" >"._SUBMITCOMMENT."	</button><div id=\"log_res\">&nbsp;</div>	
			</td>
		</tr>
		
		</table>

	<input type=\"hidden\" name=\"videoid\" value=\"$id\" />
	<input type=\"hidden\" name=\"fbthread\" value=\"$fbthred\" />

	<input type=\"hidden\" name=\"option\" value=\"com_seyret\" />
	<input type=\"hidden\" name=\"task\" value=\"saveseyrefbmessage\" />	

	</form>	
</div>


<script type=\"text/javascript\">
		
		var mySlide = new Fx.Slide('seyretfbdiscussinput');
		mySlide.hide();
		$('toggle').addEvent('click', function(e){
			e = new Event(e);
			mySlide.toggle();
			e.stop();
		});
		
	

</script>
"; 

	if(!$my->id){
		$boardcommentsinput="<div id=\"seyretfbdiscussinput\"></div>";
	} 
	return $boardcomments.$boardcommentsinput;

}
   

function saveseyrefbmessage(){
global $database, $my, $Itemid, $mosConfig_absolute_path, $mainframe;
$videoid = mosGetParam($_REQUEST,'videoid',null);
$message = mosGetParam($_REQUEST,'seyretfbmessageadd',null);
$fbthread = mosGetParam($_REQUEST,'fbthread',null);
$fbtitle = mosGetParam($_REQUEST,'seyretfbmessagetopic',null);



$query = "SELECT id FROM #__menu WHERE link = 'index.php?option=com_seyret' AND published = '1'";
$database->setQuery( $query, 0, 1 );
$seyretitemid = $database->loadResult();	
	
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 
$catid=$fbdiscusscategoryforseyret;


$ussname=jagetusersname($my->id);
$posttime = time();




if ($fbthread=="0") {
		$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=videodirectlink&id=".$videoid;	
		$seflink=sefRelToAbs($link);
		
		$quote=_THISTHREADISABOUTPRE." \[url=".$seflink."\]$fbtitle\[/url\] "._THISTHREADISABOUTPOST;
		
		$message="[quote]".$quote."[/quote]\n".$message;
		
		$database->setQuery(
			"INSERT INTO #__fb_messages (parent,catid,name,userid,email,subject,time,ip,topic_emoticon,hold) VALUES('0','$catid','$ussname','$my->id','$email','$fbtitle','$posttime','$ip','$topic_emoticon','$holdPost')");

		if ($database->query())
		{


			$pid = $database->insertId();
			$database->setQuery("UPDATE #__seyret_items SET fbthread='$pid' WHERE id='$videoid'");
			$database->query();

			$database->setQuery("UPDATE #__fb_messages SET thread='$pid' WHERE id='$pid'");
			$database->query();

			
			$database->setQuery("INSERT INTO #__fb_messages_text (mesid,message) VALUES('$pid','$message')");
			$database->query();
		
		}
		
} else {


		
		
		$database->setQuery(
			"INSERT INTO #__fb_messages (parent,thread,catid,name,userid,email,subject,time,ip,topic_emoticon,hold) VALUES('$fbthread','$fbthread','$catid','$ussname','$my->id','$email','$fbtitle','$posttime','$ip','$topic_emoticon','$holdPost')");

		if ($database->query())
		{


			$pid = $database->insertId();

			$database->setQuery("INSERT INTO #__fb_messages_text (mesid,message) VALUES('$pid','$message')");
			$database->query();
		
		}
	
	
}

	
$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=videodirectlink&id=".$videoid;	
mosRedirect($link);

		

	
}


   
?>
