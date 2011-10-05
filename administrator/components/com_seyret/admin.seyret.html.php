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

defined('_VALID_MOS') or
	die('Direct Access to this locale is not allowed.');
	
	
//Get language files
	if (file_exists($mosConfig_absolute_path."/components/com_seyret/language/".$mosConfig_lang.".php")){ 
	    include($mosConfig_absolute_path."/components/com_seyret/language/".$mosConfig_lang.".php");
    }else{ 
	include($mosConfig_absolute_path."/components/com_seyret/language/english.php");
    }



$addthistoheader="
<link href=\"".$mosConfig_live_site."/administrator/components/com_seyret/style/seyret_admin_style.css\" rel=\"stylesheet\" type=\"text/css\" />
";
$mainframe->addCustomHeadTag($addthistoheader);


	


	
class HTML_seyret {	

//Function intropanel->start****************
function intropanel($mosConfig_dbprefix) {
   global $database, $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_locale;
	

	
		

	require_once($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_version.php");
	 
		
		$database->setQuery("SELECT * FROM #__seyret_check");
		if (!$database->loadObjectList()) 
		{
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" style="border:solid 1px #FF0000;"><div align="center">
      <p>&nbsp;</p>
      <p><?php echo _ISTHISFRESHINSTALL;?></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#FF3300" style="color: #FFFFFF!important; padding:5px;"><div align="center"><strong><span><?php echo _IFTHISISFRESHINSTALL;?></span></strong></div></td>
    <td width="50%" bgcolor="#FF3300" style="color: #FFFFFF!important; padding:5px;"><div align="center"><strong><span><?php echo _IFTHISISUNINSTALL;?></span></strong></div></td>
  </tr>
  <tr>
    <td valign="top" style="border:solid 1px #FF0000;"><div align="center"><br><?php echo _VERSION_INFO.": ".$seyretversion;?> - <?php echo $seyretversionname;?> - <?php echo $seyretversionstatus;?><br><br><?php echo _THISWILLDROPTABLES;?>
        <br>
        <br>
        <a href="index2.php?option=com_seyret&task=freshinstall"><img style="vertical-align:middle;" src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/installdatabase.png" border="0"></a><br><br><?php echo _INSTALLATTENTION;?><br><br>
    </div></td>
    <td valign="top" style="border:solid 1px #FF0000;"><div align="center"><br><br><?php echo _UNINSTALLEXPL;?></div></td>
  </tr>
</table>


<?php 
		} 
		else
		{ 
			
			$vers = $database->loadObjectList();
			foreach ($vers as $vers) {
			$dbversion = $vers->dbversion;
			$joomlaalemtrack = $vers->joomlaalemtrack;			
			$seyretpro = $vers->seyretpro;	
			$joomlaalemuserid = $vers->joomlaalemuserid;
			$prophpdate = $vers->prophpdate;
			$securitycode1 = $vers->securitycode1;
			$securitycode2 = $vers->securitycode2;
			$accepttermsofuse = $vers->accepttermsofuse;
		}	

				
				
				if ($dbversion!=$seyretversion) //need an upgrade
				{
				mosRedirect( "index2.php?option=com_seyret&task=upgradeseyret" );
				}
			

				if ($accepttermsofuse!="1") //need an accepttermsofuse
				{
				mosRedirect( "index2.php?option=com_seyret&task=termsofuse" );
				}

				
			

  

	
HTML_seyret::tablehead();
?>



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="seyretadmininner">
		
		
		<tr>
			<td align="left">
			
			
			<object width="750" height="500">
			<param name="wmode" value="transparent"><param name="movie" value="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/dashboard.swf">
			<param name="FlashVars" value="siteurl=<?php echo $mosConfig_live_site;?>">
			<embed src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/dashboard.swf" width="750" height="500" wmode="transparent"  FlashVars="siteurl=<?php echo $mosConfig_live_site;?>" >
			</embed>
			</object>
			

			</td>

		</tr>
		
	</table>

						
<?php

HTML_seyret::tabletail();


}

}

//Function intropanel->finish******************

//Function:tablehead->start ***************************
function tablehead() {
?>

   <table class="seyretadminouter" width="100%" cellpadding="10px" cellspacing="0px">
   <tr>
      
	  <td width="200px" valign="top">
					
		<div id="treeContainer">
			<div id="seyretmenuheader"><?php echo _SEYRETMENU;?></div>
			<div id="seyretmenuintro" class="seyretmenurow"><a href="index2.php?option=com_seyret"><?php echo "Seyret";?></a></div>
			<div id="seyretmenucategories" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=videocatlist"><?php echo _CATEGORIES;?></a></div>
			<div id="seyretmenuvideos" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=videoslist"><?php echo _VIDEOS;?></a></div>
			<div id="seyretmenudiagnostics" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=diagnostics"><?php echo _DIAGNOSTICS;?></a></div>		
			<div id="seyretmenudonations" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=donation"><?php echo _DONATIONS;?></a></div>		
			<div id="seyretmenuimageads" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=longtailads"><?php echo _LONGTAILADS;?></a></div>		
			<div id="seyretmenuconfig" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=configuration"><?php echo _CONFIG;?></a></div>
			<div id="seyretmenuplugins" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=seyretplugins"><?php echo _SEYRETPLUGINS;?></a></div>			
			<div id="seyretmenupermissions" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=permissions"><?php echo _PERMISSIONS;?></a></div>	
			<div id="seyretmenuextras" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=extras"><?php echo _EXTRAS;?></a></div>		
			<div id="seyretmenuuninstall" class="seyretmenurow"><a href="index2.php?option=com_seyret&task=uninstall"><?php echo _UNINSTALL;?></a></div>					
		</div>
					
	  </td>
	  
	  
	  <td valign="top">
	  
<?php
}	  
//Function:tablehead->end ***************************


//Function:tabletail->start ***************************
function tabletail() {
?>
		</td>
	</tr>
	</table>	  
<?php
}
//Function:tabletail->end ***************************




//Function:htmlvideocatlist->start ***************************
function htmlvideocatlist($rows, $pageNav) {
		global $database;
		

HTML_seyret::tablehead();
?>

		

<form action="index2.php" method="post" name="adminForm">




	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _VIDEO_CATEGORIES;?></td>
						</tr>
					</table>
			</td>
		</tr>
		
		<tr>
			<th class="title" width="2%"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>

			
			<th class="title" width="15%" align="center"><?php echo _VIDEOCAT_CODE;?></th>
			<th class="title" width="20%"><?php echo _VIDEOCAT_NAME;?></th>
			<th width="20%" align="left"><?php echo _VIDEOCAT_PARENT;?></th>
			<th width="30%" align="left"><?php echo _VIDEOCAT_DIR;?></th>
		</tr>

					<?php
					$k = 0;
					for($i=0; $i < count( $rows ); $i++) {
					$row = $rows[$i];
					$formattedcatid=$row->catid;
					$formattedcatidlength=strlen($formattedcatid);
					$categorydir = $row->categoryfilesdirectory;
					$parentcat = $row->parentcat;
					$parentcatlength=strlen($parentcat);
					if ($parentcatlength==0) {
						$strippedcatid=substr($formattedcatid, 1, -2);
						} 
						else {
						$strippedcatid=substr($formattedcatid,$parentcatlength, -2);
						}
					
					?>

		<tr class="<?php echo "row$k";//row: css için ?>"> 
			<td><input type="checkbox" id="cb<?php echo $i;?>" name="id[]" value="<?php echo "$row->id"; ?>" onclick="isChecked(this.checked);" /></td>
			
			<td align="center"><a href="#editvideocat" onclick="return listItemTask('cb<?php echo $i;?>','editvideocat')"><?php echo $strippedcatid; ?></a></td>
			<td align="left"><a href="#editvideocat" onclick="return listItemTask('cb<?php echo $i;?>','editvideocat')"><?php echo $row->categoryname; ?></a></td>			
			<td align="left"><?php echo ShowCategoryPath($row->parentcat); ?></td>
			<td align="left"><?php echo $categorydir; ?></td>

					<?php $k = 1 - $k; ?>
		</tr>
		
		
		
		
<?php } ?>

		<tr>
			<th align="center" colspan="9">
			<?php echo $pageNav->writePagesLinks(); ?></th>
		</tr>
     
		<tr>
			<td align="center" colspan="9">
			<?php echo $pageNav->writePagesCounter(); ?><br />
			<?php echo $pageNav->writeLimitBox(); ?> 
			</td>
		</tr>
     
	 </table>
	 
	 

	 
	 
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="videocatlist" />
<input type="hidden" name="boxchecked" value="0" />

</form>

<?php 
HTML_seyret::tabletail();
}
//Function:htmlvideocatlist->end ***************************



//Function:HtmlEditvideocat->start ***************************
 function htmleditvideocat($id, $row, $videocatlist) { 


$formattedcatid=$row->catid;
$formattedcatidlength=strlen($formattedcatid);
$parentcat = $row->parentcat;
$parentcatlength=strlen($parentcat);
if ($parentcatlength==0) {
		$strippedcatid=substr($formattedcatid, 1, -2);
		} 
		else {
		$strippedcatid=substr($formattedcatid,$parentcatlength, -2);
		}
HTML_seyret::tablehead();

?>



<form action="index2.php" method="post" name="adminForm">



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="seyretadmininner">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _VIDEO_CATEGORIES;?> - <small><?php echo $row->id ? _EDIT_CATEGORY : _NEW_CATEGORY;?></small></td>
						</tr>
					</table>
			</td>
		</tr>
	
	<tr>

		<td width="21%"><br><b><?php echo _VIDEOCAT_NAME;?>:</b></td>
		<td width="79%"><br><input type="text" name="categoryname" size="20" class="inputbox" value="<?php echo "$row->categoryname";?>"></td>
	</tr>
	

	<tr>

		<td width="2%"><b><?php echo _VIDEOCAT_PARENT;?>:</b></td>
		<td width="79%"><?php echo $videocatlist;?></td>
	</tr>

		<tr>

		<td width="2%"><b><?php echo _CATEGORYINFO;?>:</b></td>
		<td width="79%"><textarea name="categoryinfo" cols="40" rows="6"><?php echo "$row->categoryinfo";?></textarea></td>
	</tr>
	
	<tr>

		<td width="21%"><br><b><?php echo _VIDEOCAT_DIR;?>:</b></td>
		<td width="79%"><br><?php 
		
					if ($id<>0) {
					?>
					<input type="text" name="categoryfilesdirectory" size="50" class="inputbox" value="<?php echo "$row->categoryfilesdirectory";?>">
					<?php 
					} else {
					echo _CATEGORYDIRECTORYWILLBEGENERATED;
					}?>
		
		
		
		</td>
	</tr>
	
	
	<tr>
		<td width="100%" colspan="2"><br><b><?php echo _NEWVIDEOCATCOMMENT;?></b></td>
	</tr>

</table>


<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
<input type="hidden" name="catid" value="dummy" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="savevideocat" />
<input type="hidden" name="boxchecked" value="0" />
</form>	

<?php 

HTML_seyret::tabletail();
}

//Function:HtmlEditvideocat->end   ***************************



//Function:Htmlconfiguration->start   ***************************
function htmlconfiguration(){
global $database, $mosConfig_absolute_path, $mosConfig_live_site;
	
	$enableflvconversion="0";
	$enablethumbnailextraction="";
	$setflvdimensions="480X360";
	$audiobitrate="64";
	$audiosamplingfrequency="44100";
	$videoframerate="25";
	$videobitrate="200";
	$setthumbdimensions="160X120";	
	$setthumbdimensionsbig="0";	
	
	$instantvideoprocess="1";
	$instantthumbnailprocess="1";
	$showoriginallink="1";
	$ffmpegpreexec="";
	
	
	require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 
	$ffmpegpreexec=trim(base64_decode($ffmpegpreexec));

	$allowurlvalue=ini_get("allow_url_fopen");

	if ($allowurlvalue=="1") {
	$allowurlv="<font color=\"green\">"._ON."</font>";
	} else {
	$allowurlv="<font color=\"red\">"._OFF."</font>";
	}

	if (function_exists('curl_init')){
	$curlf="<font color=\"green\">"._INSTALLED."</font>";
	} else {
	$curlf="<font color=\"red\">"._NOTINSTALLED."</font>";
	}	

	if ($allowurlvalue=="1" OR function_exists('curl_init')) {
	$seyfstat="<font color=\"green\">"._PASSED."</font>";
	} else {
	$seyfstat="<font color=\"red\">"._FAILED."</font>";
	}
	
	if (!isset($ffmpegpath)) $ffmpegpath=$mosConfig_absolute_path."/seyretfiles/tools/converter/ffmpeg.exe";
					

	$database->setQuery( "SELECT * FROM #__seyret_check");
	$check = $database->loadObjectList();
	foreach ($check as $check) 
	{
	$jalemuserid = $check->joomlaalemuserid;
	$jalemdonated=$check->jalemdonated;
	$joomlaalemtrack=$check->joomlaalemtrack;
	$pro=$check->seyretpro;
	}

	$enabledisable[] = mosHTML::makeOption( 1, _ENABLED );
	$enabledisable[] = mosHTML::makeOption( 2, _DISABLED );

	$messagefeed=mosHTML::selectList( $enabledisable, 'messagefeed', 'class="inputbox" size="1"', 'value', 'text', $joomlaalemtrack );
	
	$yesno[] = mosHTML::makeOption( 0, _NO );
	$yesno[] = mosHTML::makeOption( 1, _YES );
	
	$proyesno[] = mosHTML::makeOption( 0, _NO );
	if ($pro=="1") {
	$proyesno[] = mosHTML::makeOption( 1, _YES );	
	}
	
	

	$flvdimensions[] = mosHTML::makeOption('600x480');
	$flvdimensions[] = mosHTML::makeOption('480x360');
	$flvdimensions[] = mosHTML::makeOption('352x288');
	$flvdimensions[] = mosHTML::makeOption('320x240');	
	$flvdimensions[] = mosHTML::makeOption('240x180');	
	$flvdimensions[] = mosHTML::makeOption('160x120');		
	$flvdimensions[] = mosHTML::makeOption('120x90');
	
	$thumbdimensions[] = mosHTML::makeOption('600x480');
	$thumbdimensions[] = mosHTML::makeOption('480x360');
	$thumbdimensions[] = mosHTML::makeOption('352x288');
	$thumbdimensions[] = mosHTML::makeOption('320x240');	
	$thumbdimensions[] = mosHTML::makeOption('240x180');	
	$thumbdimensions[] = mosHTML::makeOption('160x120');		
	$thumbdimensions[] = mosHTML::makeOption('120x90');
	
	$thumbdimensionsbig[] = mosHTML::makeOption(0, _DONTEXTRACT);
	$thumbdimensionsbig[] = mosHTML::makeOption('600x480');
	$thumbdimensionsbig[] = mosHTML::makeOption('480x360');
	$thumbdimensionsbig[] = mosHTML::makeOption('352x288');
	$thumbdimensionsbig[] = mosHTML::makeOption('320x240');	
	$thumbdimensionsbig[] = mosHTML::makeOption('240x180');	
	$thumbdimensionsbig[] = mosHTML::makeOption('160x120');		
	$thumbdimensionsbig[] = mosHTML::makeOption('120x90');

	
	$errorreportlist[] = mosHTML::makeOption('noreport', _NOERRORREPORT);
	$errorreportlist[] = mosHTML::makeOption('allexceptnotice', _SHOWERRORSEXCEPTNOTICES);
	$errorreportlist[] = mosHTML::makeOption('allerrorreports', _SHOWERRORSINCLUDINGNOTICES);

	
	if ($jalemdonated=="1" OR $pro=="1"){
	$donate=mosHTML::selectList( $yesno, 'enabledownloads', 'class="inputbox" size="1"', 'value', 'text', $enabledownloads );
	} else {
	$donate=_NO;
	}

	$disableprolist=mosHTML::selectList( $yesno, 'disablepro', 'class="inputbox" size="1"', 'value', 'text', $disablepro );
	
	
	
	$uname[] = mosHTML::makeOption( "username", _USERNAME );
	$uname[] = mosHTML::makeOption( "realname", _REALNAME );
	$screen_name=mosHTML::selectList( $uname, 'screenname', 'class="inputbox" size="1"', 'value', 'text', $screenname );	

	$current_dir=$mosConfig_absolute_path.'/components/com_seyret/themes';
	$dir=opendir($current_dir);
	
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".." and $file!="index.html" and $file!=".svn"){ 
		$theme_dir[] = mosHTML::makeOption( $file );
		}
	}
	closedir($dir);
	
	
	$current_dir=$mosConfig_absolute_path.'/components/com_seyret/localplayer/skins';
	$skindir=opendir($current_dir);
	
	while($file=readdir($skindir))
	{
		$ext=strtolower(substr($file, -3));
		if ($ext=="swf"){ 
			$skin_dir[] = mosHTML::makeOption( substr($file, 0, -4) );
		}
	}
	closedir($skindir);

	$video_sort_by[]=mosHTML::makeOption("addeddate",_ADDEDDATE);
	$video_sort_by[]=mosHTML::makeOption("hit",_HIT);
	$video_sort_by[]=mosHTML::makeOption( "rating", _RATING );
	$video_sort_by[]=mosHTML::makeOption( "title", _VIDEOTITLE );	
	

	$video_sort_type[]=mosHTML::makeOption("DESC",_DESCENDING);
	$video_sort_type[]=mosHTML::makeOption("ASC",_ASCENDING);
	

	$commentingsystemopt[]=mosHTML::makeOption("nocomment",_NOCOMMENT);
	$commentingsystemopt[]=mosHTML::makeOption("jomcomment",_JOMCOMMENT);
	$commentingsystemopt[]=mosHTML::makeOption("fireboard",_FIREBOARD);
	$commentingsystemopt[]=mosHTML::makeOption("jcomments", "JComments");
	$commentingsystemopt[]=mosHTML::makeOption("joomlacomment","!JoomlaComment");

	
	

	
HTML_seyret::tablehead();
?>


	<form action="index2.php" method="post" name="adminForm">
	
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminform">

		<tr>
			<td width="100%" colspan="3" >
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _GENERALCONFIG;?></td>
						</tr>
					</table>
			</td>
		</tr>
		
		
		<tr>
			<td width="100%" colspan="3" ><hr></td>
		</tr>

	
		<tr><td>

<?php 
			$tabs = new mosTabs(1);
		    $tabs->startPane("about-pane");
			$tabs->startTab(_SYSTEM,"general");
?>	

		<table>
			<tr>
				<td valign="top"><b><?php echo _CURLLIB;?></b></td>
				<td valign="top"><?php echo $curlf;?></td>
				<td width="%60"><?php echo _CURLLIBINFO;?></td>
			</tr>

			
			<tr>
				<td valign="top"><b><?php echo _ALLOWURLVALUE;?></b></td>
				<td valign="top"><?php echo $allowurlv;?></td>
				<td width="%60"><?php echo _ALLOWURLVALUEINFO;?></td>
			</tr>


			<tr>
				<td valign="top"><b><?php echo _SEYRETFUNCSTATUS;?></b></td>
				<td valign="top"><?php echo $seyfstat;?></td>
				<td width="%60"><?php echo _SEYRETFUNCSTATUSINFO;?></td>
			</tr>
			
			
			<tr>
				<td valign="top"><b><?php echo _JALEMUSERID;?></b></td>
				<td valign="top"><?php echo $jalemuserid;?></td>
				<td width="%60"><?php echo _JALEMUSERIDINFO;?></td>
			</tr>

			
			<tr>
				<td valign="top"><b><?php echo _DISABLEPRO;?></b></td>
				<td valign="top"><?php echo $disableprolist;?></td>
				<td width="%60"><?php echo _DISABLEPROINFO;?></td>
			</tr>	

			
			<tr>
				<td valign="top"><b><?php echo _MESSAGEFEED;?></b></td>
				<td valign="top"><?php echo $messagefeed;?></td>
				<td width="%60"><?php echo _MESSAGEFEEDINFO;?></td>
			</tr>		
			
			
			
			<tr>
				<td valign="top"><b><?php echo _ENABLEDOWNLOADS;?></b></td>
				<td valign="top"><?php echo $donate;?></td>
				<td width="%60"><?php echo _ENABLEDOWNLOADSINFO;?></td>
			</tr>
			
			
			<tr>
				<td valign="top"><b><?php echo _YOUTUBEID;?></b></td>
				<td valign="top"><input type="text" name="youtubedeveloperid" size="20" class="inputbox" value="<?php echo $youtubedeveloperid;?>"/></td>
				<td width="%60"><?php echo _YOUTUBEIDINFO;?></td>
			</tr>
			
			<tr>
				<td valign="top"><b><?php echo _USEAJAXBROWSING;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'useajaxbrowsing', 'class="inputbox" size="1"', 'value', 'text', $useajaxbrowsing);?></td>
				<td><?php echo _USEAJAXBROWSINGINFO;?> <font color="red">BETA</font></td>
			</tr>	

			<tr>
				<td valign="top"><b><?php echo _SHOWORIGINALVIDEOLINK;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'showoriginallink', 'class="inputbox" size="1"', 'value', 'text', $showoriginallink);?></td>
				<td><?php echo _SHOWORIGINALVIDEOLINKINFO;?></td>
			</tr>
			

			<tr>
				<td valign="top"><b><?php echo _VIDEORESPONSESYSTEM;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'videoresponsesystem', 'class="inputbox" size="1"', 'value', 'text', $videoresponsesystem);?></td>
				<td><?php echo _VIDEORESPONSESYSTEMINFO;?></td>
			</tr>

			
			<tr>
				<td valign="top"><b><?php echo _USEJOOMLAEDITOR;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'usejoomlaeditor', 'class="inputbox" size="1"', 'value', 'text', $usejoomlaeditor);?></td>
				<td><?php echo _USEJOOMLAEDITORINFO;?></td>
			</tr>

			
			<tr>
				<td valign="top"><b><?php echo _ACCESSLEVELCOUNT;?></b></td>
				<td valign="top"><input type="text" name="videoaccesslevelsconf" size="30" class="inputbox" value="<?php echo $videoaccesslevelsconf;?>"/></td>
				<td width="%60"><?php echo _ACCESSLEVELCOUNTINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _UPGRADEACCESSLEVELLINK;?></b></td>
				<td valign="top"><input type="text" name="accesslevelupgradelink" size="30" class="inputbox" value="<?php echo $accesslevelupgradelink;?>"/></td>
				<td width="%60"><?php echo _UPGRADEACCESSLEVELLINKINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _LOCALFILESDIRECTORY;?></b></td>
				<td valign="top"><input type="text" name="localfilesdirectory" size="30" class="inputbox" value="<?php echo $localfilesdirectory;?>"/></td>
				<td width="%60"><?php echo _LOCALFILESDIRECTORYINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _ERRORREPORTING;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $errorreportlist, 'errorreporting', 'class="inputbox" size="1"', 'value', 'text', $errorreporting);?></td>
				<td><?php echo _ERRORREPORTINGINFO;?></td>
			</tr>	

			<tr>
				<td valign="top"><b><?php echo _CACHECATEGORYIMAGES;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'cachecategoryimages', 'class="inputbox" size="1"', 'value', 'text', $cachecategoryimages);?></td>
				<td><?php echo _CACHECATEGORYIMAGESINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _CACHEVIDEOIMAGES;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'cachevideoimages', 'class="inputbox" size="1"', 'value', 'text', $cachevideoimages);?></td>
				<td><?php echo _CACHEVIDEOIMAGESINFO;?></td>
			</tr>
			
			<tr>
				<td valign="top"><b><?php echo _INTEGRATEAUP;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'integrateaup', 'class="inputbox" size="1"', 'value', 'text', $integrateaup);?></td>
				<td><?php echo _INTEGRATEAUPINFO;?></td>
			</tr>
			
			</table>

<?php
	$tabs->endTab();
	$tabs->startTab(_DISPLAY,"display");
?>

		<table width="100%">
			

			
			
			<tr>
				<td><b><?php echo _THEME;?></b></td>
				<td><?php echo mosHTML::selectList( $theme_dir, 'theme', 'class="inputbox" size="1"', 'value', 'text', $theme );?></td>
				<td><?php echo _THEMEINFO;?></td>
			</tr>

			<tr>
				<td><b><?php echo _PLAYERSKIN;?></b></td>
				<td><?php echo mosHTML::selectList( $skin_dir, 'playerskin', 'class="inputbox" size="1"', 'value', 'text', $playerskin );?></td>
				<td><?php echo _THEMEINFO;?></td>
			</tr>
			
			<tr>
				<td valign="top"><b><?php echo _TWOCOLUMNSVIDEOLIST;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'usemulticolumnsvideolisting', 'class="inputbox" size="1"', 'value', 'text', $usemulticolumnsvideolisting);?></td>
				<td><?php echo _TWOCOLUMNSVIDEOLISTINFO;?></td>
			</tr>
			
			<tr>
				<td valign="top"><b><?php echo _MULTICOLUMNCOUNT;?></b></td>
				<td valign="top"><input type="text" name="multicolumncount" size="5" class="inputbox" value="<?php echo $multicolumncount;?>"/></td>
				<td><?php echo _MULTICOLUMNCOUNTINFO;?></td>
			</tr>
			
			
			<tr>
				<td valign="top"><b><?php echo _LATESTVIDEOSCOLUMNCOUNT;?></b></td>
				<td valign="top"><input type="text" name="latestvideoslistcolumncount" size="5" class="inputbox" value="<?php echo $latestvideoslistcolumncount;?>"/></td>
				<td><?php echo _LATESTVIDEOSCOLUMNCOUNTINFO;?></td>
			</tr>			
			
			<tr>
				<td valign="top"><b><?php echo _HIGRATEDVIDEOSCOLUMNCOUNT;?></b></td>
				<td valign="top"><input type="text" name="highestratedvideoslistcolumncount" size="5" class="inputbox" value="<?php echo $highestratedvideoslistcolumncount;?>"/></td>
				<td><?php echo _HIGRATEDVIDEOSCOLUMNCOUNTINFO;?></td>
			</tr>				
	
			<tr>
				<td valign="top"><b><?php echo _MOSTVVIDEOSCOLUMNCOUNT;?></b></td>
				<td valign="top"><input type="text" name="mostviewedvideoslistcolumncount" size="5" class="inputbox" value="<?php echo $mostviewedvideoslistcolumncount;?>"/></td>
				<td><?php echo _MOSTVVIDEOSCOLUMNCOUNTINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _FEATUREDVIDEOSCOLUMNCOUNT;?></b></td>
				<td valign="top"><input type="text" name="featuredvideoslistcolumncount" size="5" class="inputbox" value="<?php echo $featuredvideoslistcolumncount;?>"/></td>
				<td><?php echo _FEATUREDVIDEOSCOLUMNCOUNTINFO;?></td>
			</tr>
				
	
	
			<tr>
				<td valign="top"><b><?php echo _TITLELENGTH;?></b></td>
				<td valign="top"><input type="text" name="videolisttitlelettercount" size="5" class="inputbox" value="<?php echo $videolisttitlelettercount;?>"/></td>
				<td><?php echo _TITLELENGTHINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _DETAILSLENGTH;?></b></td>
				<td valign="top"><input type="text" name="videolistdescriptionlettercount" size="5" class="inputbox" value="<?php echo $videolistdescriptionlettercount;?>"/></td>
				<td><?php echo _DETAILSLENGTHINFO;?></td>
			</tr>		

			<tr>
				<td valign="top"><b><?php echo _VIDEOWIDTH;?></b></td>
				<td valign="top"><input type="text" name="videowidth" size="5" class="inputbox" value="<?php echo $videowidth;?>"/></td>
				<td><?php echo _VIDEOWIDTHINFO;?></td>
			</tr>		

			<tr>
				<td valign="top"><b><?php echo _VIDEOHEIGHT;?></b></td>
				<td valign="top"><input type="text" name="videoheight" size="5" class="inputbox" value="<?php echo $videoheight;?>"/></td>
				<td><?php echo _VIDEOHEIGHTINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _POPUPVIDEOWIDTH;?></b></td>
				<td valign="top"><input type="text" name="popupvideowidth" size="5" class="inputbox" value="<?php echo $popupvideowidth;?>"/></td>
				<td><?php echo _POPUPVIDEOWIDTHINFO;?></td>
			</tr>		

			<tr>
				<td valign="top"><b><?php echo _POPUPVIDEOHEIGHT;?></b></td>
				<td valign="top"><input type="text" name="popupvideoheight" size="5" class="inputbox" value="<?php echo $popupvideoheight;?>"/></td>
				<td><?php echo _POPUPVIDEOHEIGHTINFO;?></td>
			</tr>		

			<tr>
				<td><b><?php echo _DEFAULTSORTBY;?></b></td>
				<td><?php echo mosHTML::selectList( $video_sort_by, 'orderingkey', 'class="inputbox" size="1"', 'value', 'text', $orderingkey );?></td>
				<td><?php echo _DEFAULTSORTBYINFO;?></td>
			</tr>

			<tr>
				<td><b><?php echo _DEFAULTSORT;?></b></td>
				<td><?php echo mosHTML::selectList( $video_sort_type, 'orderingtype', 'class="inputbox" size="1"', 'value', 'text', $orderingtype );?></td>
				<td><?php echo _DEFAULTSORTINFO;?></td>
			</tr>


			<tr>
				<td valign="top"><b><?php echo _VIDEOCOUNTINVLIST;?></b></td>
				<td valign="top"><input type="text" name="videocountinvideolist" size="5" class="inputbox" value="<?php echo $videocountinvideolist;?>"/></td>
				<td><?php echo _VIDEOCOUNTINVLISTINFO;?></td>
			</tr>
			
			<tr>
				<td valign="top"><b><?php echo _VIDEOMAXSIZE;?></b></td>
				<td valign="top"><input type="text" name="videomaxuploadsize" size="5" class="inputbox" value="<?php echo $videomaxuploadsize;?>"/></td>
				<td width="%60"><?php echo _VIDEOMAXSIZEINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _THUMBMAXSIZE;?></b></td>
				<td valign="top"><input type="text" name="thumbmaxuploadsize" size="5" class="inputbox" value="<?php echo $thumbmaxuploadsize;?>"/></td>
				<td width="%60"><?php echo _THUMBMAXSIZEINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _RESIZETHUMBWIDTH;?></b></td>
				<td valign="top"><input type="text" name="configthumbwidth" size="5" class="inputbox" value="<?php echo $configthumbwidth;?>"/></td>
				<td width="%60"><?php echo _RESIZETHUMBWIDTHINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _EMBEDBOXWIDTH;?></b></td>
				<td valign="top"><input type="text" name="embedboxwidth" size="5" class="inputbox" value="<?php echo $embedboxwidth;?>"/></td>
				<td width="%60"><?php echo _EMBEDBOXWIDTHINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _THUMBWIDTHINLIST;?></b></td>
				<td valign="top"><input type="text" name="showthumbwidth" size="5" class="inputbox" value="<?php echo $showthumbwidth;?>"/></td>
				<td width="%60"><?php echo _THUMBWIDTHINLISTINFO;?></td>
			</tr>

			
			<tr>
				<td valign="top"><b><?php echo _USERSCREENNAME;?></b></td>
				<td valign="top"><?php echo $screen_name;?></td>
				<td width="%60"><?php echo _USERSCREENNAMECOMMENT;?></td>
			</tr>
	

			<tr>
				<td valign="top"><b><?php echo _SHOWVIDEOTOOLTIPS;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'showvideotooltips', 'class="inputbox" size="1"', 'value', 'text', $showvideotooltips);?></td>
				<td><?php echo _SHOWVIDEOTOOLTIPSINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _SHOWCATEGORYTOOLTIPS;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'showcategorytooltips', 'class="inputbox" size="1"', 'value', 'text', $showcategorytooltips);?></td>
				<td><?php echo _SHOWCATEGORYTOOLTIPSINFO;?></td>
			</tr>

			</table>
			
<?php
	$tabs->endTab();
	
	$tabs->startTab(_INTEGRATION,"integration");
?>
			
			<table>
			
			<tr>
				<td valign="top"><b><?php echo _COMMENTINGSYSTEM;?></b></td>
				<td><?php echo mosHTML::selectList( $commentingsystemopt, 'commentingsystem', 'class="inputbox" size="1"', 'value', 'text', $commentingsystem );?></td>
				<td width="%60"><?php echo _COMMENTINGSYSTEMINFO;?></td>
			</tr>

			
			<tr>
				<td valign="top" width="%20"><b><?php echo _FIREBOARDCATEGORYFORDISCUSS;?></b></td>
				<td valign="top"><input type="text" name="fbdiscusscategoryforseyret" size="10" class="inputbox" value="<?php echo $fbdiscusscategoryforseyret;?>"/></td>
				<td><?php echo _FIREBOARDCATEGORYFORDISCUSSINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _LEAVEVIDEOLINK;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'leavevideolinkfordiscuss', 'class="inputbox" size="1"', 'value', 'text', $leavevideolinkfordiscuss);?></td>
				<td><?php echo _LEAVEVIDEOLINKINFO;?></td>
			</tr>
			

			</table>
<?php
	$tabs->endTab();
	$tabs->startTab(_CONVERSION,"conversion");
?>
			
			<table class="adminform">
			
			<tr>
				<th colspan="3">
					<?php echo _SYSTEM;?>
				</th>
			</tr>		
			<tr>
				<td valign="top" width="%20"><b><?php echo _FFMPEGPATH;?></b></td>
				<td valign="top"><input type="text" name="ffmpegpath" size="60" class="inputbox" value="<?php echo $ffmpegpath;?>"/></td>
				<td><?php echo _FFMPEGPATHINFO;?></td>
			</tr>

			<tr>
				<td valign="top" width="%20"><b><?php echo _FFMPEGPREEXEC;?></b></td>
				<td valign="top"><input type="text" name="ffmpegpreexec" size="60" class="inputbox" value="<?php echo $ffmpegpreexec;?>"/></td>
				<td><?php echo _FFMPEGPREEXECINFO;?></td>
			</tr>
			

			<tr>
				<td valign="top"><b><?php echo _FORCELAMESUPPORT;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'forcelamesupport', 'class="inputbox" size="1"', 'value', 'text', $forcelamesupport);?></td>
				<td><?php echo _FORCELAMESUPPORTINFO;?></td>
			</tr>
			
			
			<tr>
				<td valign="top"><b><?php echo _ENABLEFLVCONVERSION;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $proyesno, 'enableflvconversion', 'class="inputbox" size="1"', 'value', 'text', $enableflvconversion);?></td>
				<td><?php echo _ENABLEFLVCONVERSIONINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _ENABLEAUTOMATICTHUMBNAILEXTRACTION;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $proyesno, 'enablethumbnailextraction', 'class="inputbox" size="1"', 'value', 'text', $enablethumbnailextraction);?></td>
				<td><?php echo _ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO;?></td>
			</tr>
		

			<tr>
				<td valign="top"><b><?php echo _INSTANTVIDEOPROCESS;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'instantvideoprocess', 'class="inputbox" size="1"', 'value', 'text', $instantvideoprocess);?></td>
				<td><?php echo _INSTANTVIDEOPROCESSINFO;?></td>
			</tr>
			
			<tr>
				<td valign="top"><b><?php echo _INSTANTTHUMBPROCESS;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $yesno, 'instantthumbprocess', 'class="inputbox" size="1"', 'value', 'text', $instantthumbprocess);?></td>
				<td><?php echo _INSTANTTHUMBPROCESSINFO;?></td>
			</tr>			
			
			</table>
			
			<table class="adminform">
			
			<tr>
				<th colspan="3">
					<?php echo _VIDEOCONVERSION;?>
				</th>
			</tr>		
			
			<tr>
				<td valign="top"  width="%20"><b><?php echo _VIDEODIMENSIONS;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $flvdimensions, 'setflvdimensions', 'class="inputbox" size="1"', 'value', 'text', $setflvdimensions);?></td>
				<td><?php echo _VIDEODIMENSIONSINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _AUDIOSAMPLINGFREQUENCY;?></b></td>
				<td valign="top"><input type="text" name="audiosamplingfrequency" size="10" class="inputbox" value="<?php echo $audiosamplingfrequency;?>"/></td>
				<td><?php echo _AUDIOSAMPLINGFREQUENCYINFO;?></td>
			</tr>

			<tr>
				<td valign="top"><b><?php echo _AUDIOBITRATE;?></b></td>
				<td valign="top"><input type="text" name="audiobitrate" size="10" class="inputbox" value="<?php echo $audiobitrate;?>"/></td>
				<td><?php echo _AUDIOBITRATEINFO;?></td>
			</tr>			


			
			
			
			<tr>
				<td valign="top"><b><?php echo _VIDEOFRAMERATE;?></b></td>
				<td valign="top"><input type="text" name="videoframerate" size="10" class="inputbox" value="<?php echo $videoframerate;?>"/></td>
				<td><?php echo _VIDEOFRAMERATEINFO;?></td>
			</tr>			

			<tr>
				<td valign="top"><b><?php echo _VIDEOBITRATE;?></b></td>
				<td valign="top"><input type="text" name="videobitrate" size="10" class="inputbox" value="<?php echo $videobitrate;?>"/></td>
				<td><?php echo _VIDEOBITRATEINFO;?></td>
			</tr>		
			
			
			
			</table>

			<table class="adminform">
			
			<tr>
				<th colspan="3">
					<?php echo _THUMBNAILEXRACTION;?>
				</th>
			</tr>		
			
			<tr>
				<td valign="top"  width="%20"><b><?php echo _THUMBNAILDIMENSIONS;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $thumbdimensions, 'setthumbdimensions', 'class="inputbox" size="1"', 'value', 'text', $setthumbdimensions);?></td>
				<td><?php echo _THUMBNAILDIMENSIONSINFO;?></td>
			</tr>

			<tr>
				<td valign="top"  width="%20"><b><?php echo _THUMBNAILDIMENSIONSBIG;?></b></td>
				<td valign="top"><?php echo mosHTML::selectList( $thumbdimensionsbig, 'setthumbdimensionsbig', 'class="inputbox" size="1"', 'value', 'text', $setthumbdimensionsbig);?></td>
				<td><?php echo _THUMBNAILDIMENSIONSBIGINFO." - Will be coded";?></td>
			</tr>
			

			</table>


			
			
			
<?php
	$tabs->endTab();
	$tabs->endPane();
	
?>

		</td></tr>	
		
</table>



<?php
HTML_seyret::tabletail();
?>	

		<input type="hidden" name="oldmessagefeed" value="<?php echo $joomlaalemtrack; ?>" />
		<input type="hidden" name="task" value="saveconfig" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="option" value="com_seyret" />
	</form>

<?php	


	
	
}
//Function:Htmlconfiguration->end   ***************************	



//Function:htmlvideoslist->start ***************************
function htmlvideoslist($rows, $pageNav) {
		global $database, $mosConfig_live_site, $mosConfig_absolute_path;
        
	
	$filtervideoservertype = mosGetParam($_POST,'videoservertype',null);
	$filterpublish = mosGetParam($_POST,'published',null);
	$filterfeatured = mosGetParam($_POST,'featured',null);
	$filtercatid = mosGetParam($_POST,'catid',null);


	
	$plugins=array();
	$plugins[] = mosHTML::makeOption( "", "-Select Video Server-" );
	//***********************************************
	$current_dir=$mosConfig_absolute_path."/components/com_seyret/plugins/videoserver";
	$dir=opendir($current_dir);
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){
		$localplgfile=$current_dir."/".$file;
		$analyzepath = pathinfo($localplgfile);
		$ext=$analyzepath['extension'];
		if ($ext=="xml"){
				$addfile = str_replace( ".xml", "", $file );
				$plugins[] = mosHTML::makeOption( $addfile );
						
			}
		}
	}
	
	
	closedir($dir);
	
	$spluginslist=mosHTML::selectList( $plugins, 'videoservertype', 'class="inputbox" size="1" onChange="document.adminForm.submit();"', 'value', 'text', $filtervideoservertype);	
	//******************************************

	$yesno="";
	$yesno=array();
	$yesno[] = mosHTML::makeOption( "", "-Select Published-" );
	$yesno[] = mosHTML::makeOption( "1", "Published" );
	$yesno[] = mosHTML::makeOption( "0", "Not Published" );
	$ispublished=mosHTML::selectList( $yesno, 'published', 'class="inputbox" size="1" onChange="document.adminForm.submit();"', 'value', 'text', $filterpublish );							


	$yesno="";
	$yesno=array();
	$yesno[] = mosHTML::makeOption( "", "-Select Featured-" );
	$yesno[] = mosHTML::makeOption( "1", "Featured" );
	$yesno[] = mosHTML::makeOption( "0", "Not featured" );
	$isfeatured=mosHTML::selectList( $yesno, 'featured', 'class="inputbox" size="1" onChange="document.adminForm.submit();"', 'value', 'text', $filterfeatured );	
	
	
	//----------------------------------------------------------------
	$database->setQuery( "SELECT * FROM #__seyret_categories ORDER BY catid ASC");

	$videocat = $database->loadObjectList();
	$videocats = array();
	$videocats[] = mosHTML::makeOption( '', "-Select Category-" );
	$videocats[] = mosHTML::makeOption( 'top',_TOP );
	foreach ($videocat as $videocat) 
	{
	$catid = $videocat->catid;
	$catname = $videocat->categoryname;
	
	$catids="";
	$fordatacatname='';
	$fordatacatnamelast='';
	
	$catidlength=strlen($catid);
	$newcatid=substr($catid,1,$catidlength-3);
	$catid_array=explode('**',$newcatid);


	while ($catidelement=each($catid_array)){
	

	$fordatacatname=$fordatacatname.'**'.$catidelement['value'];
	$fordatacatnamelast=substr($fordatacatname,1,strlen($fordatacatname)).'*#';
	
		$database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$fordatacatnamelast'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$cat_cat = $cat->categoryname;
		}
	$catids=$catids.$cat_cat.' » ';

	}

	$catidlast=substr($catids,0, strlen($catids)-3);
	

	$videocats[] = mosHTML::makeOption( $catid, $catidlast );
	}

	$videocatlist = mosHTML::selectList($videocats,"catid",'id="catid" class="inputbox" size="1"  onchange="document.adminForm.submit();"',"value","text", $filtercatid );
	//----------------------------------------------------------------
	
HTML_seyret::tablehead();
?>

		

<form action="index2.php" method="post" name="adminForm">




	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="11">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _VIDEO_LIST;?></td>
						</tr>
					</table>
			</td>
		</tr>
		<tr>
			<td width="100%" colspan="11">
					<div style="text-align:right;">Filters: <?php echo $videocatlist." ".$spluginslist. " ". $ispublished. " ". $isfeatured;?></div>
			</td>

		</tr>

		
		<tr>
			<th class="title" width="1%"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>

			<th class="title" width="1%"><?php echo _ID;?></th>	
			<th class="title" width="1%" colspan="2"><?php echo _ATTRIBUTES;?></th>
			<th class="title" width="1%" align="center"><?php echo _VTHUMB;?></th>
			<th width="20%" align="left"><?php echo _VIDEOTITLE;?></th>
			<th align="left"><?php echo _DETAILS;?></th>
			<th class="title" width="30%"><?php echo _VIDEOCAT_PARENT;?></th>
			<th width="2%" align="center"><?php echo _HIT;?></th>
			<th width="2%" align="center"><?php echo _PUBLISH;?></th>
			<th width="2%" align="center"><?php echo _FEATURED;?></th>
			</tr>

					<?php
					$k = 0;
					for($i=0; $i < count( $rows ); $i++) {
					$row = $rows[$i];
					
					?>

		<tr class="<?php echo "row$k";//row: css için ?>"> 
			<td><input type="checkbox" id="cb<?php echo $i;?>" name="id[]" value="<?php echo "$row->id"; ?>" onclick="isChecked(this.checked);" /></td>
			
			<td align="center">
					<?php echo $row->id;?>
			</td>
			
			<td align="center">
					<?php
					if ($row->accesslevel>0) {
					$permimg="vidpermissions.png";
					} else {
					$permimg="blank.gif";
					}
					?>
				<img src="components/com_seyret/images/<?php echo $permimg;?>" width="32" height="32" border="0" />
			</td>			

			<td align="center">
					<?php
					if ($row->hasbackup==1) {
					$backimg="hasbackup.png";
					} else if ($row->hasbackup==2){
					$backimg="isbackup.png";
					} else {
					$backimg="blank.gif";
					}
					?>
				<img src="components/com_seyret/images/<?php echo $backimg;?>" width="32" height="32" border="0" />
			</td>			
			
			
			<td align="center"><a href="#editvideo" onclick="return listItemTask('cb<?php echo $i;?>','editvideo')"><img src="<?php 
					if ($row->picturelink==""){
						$vpicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
					} else {
						$vpicturelink=$row->picturelink;
					}
		echo $vpicturelink; ?>" width="80px" /></a></td>			
			<td align="left"><a href="#editvideo" onclick="return listItemTask('cb<?php echo $i;?>','editvideo')"><?php echo $row->title; ?></a></td>			
			<td align="left"><?php echo $row->itemcomment; ?></td>	
			
			<td align="left"><?php echo ShowCategoryPath($row->catid); ?></td>
			<td align="center"><?php echo $row->hit; ?></td>		
			<td align="center">
					<?php
					if ($row->published == "1") {
					$img="tick.png";
					} else {
					$img="publish_x.png";
					}
					if ($row->hasbackup==2){
					$img="blank.gif";
					}
					?>

				<a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $row->published ? "unpbvideo" : "pbvideo";?>')">
				<img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
				</a>
			
			</td>

			<td align="center">
					<?php
					if ($row->featured=="1") {
						$fimg="featured.png";
					} else {
						$fimg="blank.gif";
					}
					?>
				<img src="components/com_seyret/images/<?php echo $fimg;?>" width="32" height="32" border="0" />
			</td>	

			
 			<?php $k = 1 - $k; ?>
		</tr>
		
		
		
		
<?php } ?>



     
		<tr>
			<td align="center" colspan="11">
				<?php echo $pageNav->getListFooter(); ?>

			</td>
		</tr>
     
	 </table>
	 
	 

	 
	 
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="videoslist" />
<input type="hidden" name="boxchecked" value="0" />

</form>

<?php 
HTML_seyret::tabletail();
}
//Function:htmlvideoslist->end ***************************



//Function:HtmlEditvideo->start ***************************
 function htmleditvideo($id, $row, $videocatlist, $theparentcat) { 
	global $mosConfig_live_site, $database, $mosConfig_absolute_path, $my;
require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');	

	$yesno[]=array();
	$yesno[] = mosHTML::makeOption( 0, _NO );
	$yesno[] = mosHTML::makeOption( 1, _YES );
	$ispublished=mosHTML::selectList( $yesno, 'published', 'class="inputbox" size="1"', 'value', 'text', $row->published );	
	$isfeatured=mosHTML::selectList( $yesno, 'featured', 'class="inputbox" size="1"', 'value', 'text', $row->featured );

	if ($row->isdownloadable==""){
		$dwnlb=1;
	} else {
		$dwnlb=$row->isdownloadable;
	}
	$isdownloadable=mosHTML::selectList( $yesno, 'isdownloadable', 'class="inputbox" size="1"', 'value', 'text', $dwnlb );	
	

	$bckp=$row->hasbackup;
	if ($bckp=="2"){
	$ispublished="<font color=\"red\">"._THISISABACKUPFILE."</font>";
	}
	
	
	$accesslevels=array();
	for ($i=0; $i<=$videoaccesslevelsconf; $i++){
		$accesslevels[] = mosHTML::makeOption($i);
	}
	$accesslevellist=mosHTML::selectList( $accesslevels, 'accesslevel', 'class="inputbox" size="1"', 'value', 'text', $row->accesslevel);

	
HTML_seyret::tablehead();

        $database->setQuery("SELECT n.* FROM #__seyret_categories AS n WHERE catid='$theparentcat'");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$videocatdir = $cat->categoryfilesdirectory;
		}


if ($videocatdir==""){
$videocatdir=$localfilesdirectory;
}

$findcatname="0";
$dummyvideocatdir="mustafa".$videocatdir;

while ($findcatname=="0"){
$dummyvideocatdir="mustafa".$dummyvideocatdir;
$pos = strpos($dummyvideocatdir, "/");
	if ($pos>0){
	$dummyvideocatdir=substr($dummyvideocatdir, $pos+1,500);
	} else {
	$dummyvideocatdir=substr($dummyvideocatdir, 7,500);
	$findcatname="1";
	}

}

$videocatname=$dummyvideocatdir;

	$videos=array();
	//***********************************************
	$current_dir=$mosConfig_absolute_path.$videocatdir;
	$dir=opendir($current_dir);
	while($file=readdir($dir))
	{
		if ($file!="." and $file!=".."){
		$vidfile=$file;	
		$thumbdir="_thumbs";
			if ($vidfile!=$thumbdir){
			
				$fullfile=$current_dir."/".$vidfile;
			    if (!is_dir($fullfile)){

						$renameit= str_replace(" ", "_", $fullfile);
						if ($renameit!=$fullfile){
							rename($fullfile, $renameit);
						}
						
						$renameitlower=strtolower($renameit);
						if ($renameitlower!=$renameit){
							rename($renameit, $renameitlower);
						}						
						
						if (file_exists($renameitlower)){
							$vidfile= strtolower(str_replace(" ", "_", $vidfile));
						}
					
						$videos[] = mosHTML::makeOption( $vidfile );
					

				}
			}
		}
	}
	closedir($dir);
	//******************************************

	$videolist=mosHTML::selectList( $videos, 'localvideolist', 'id="localvideolist" class="inputbox" style="width:326px;font-size:10px;" size="7" onchange="selectthisvideo()"', 'value', 'text');

	

$thumbdir="_thumbs";

	$thumbs=array();
	//***********************************************
	$current_dir=$mosConfig_absolute_path.$videocatdir."/".$thumbdir;
	$dir=@opendir($current_dir);
	while($file=@readdir($dir))
	{
		if ($file!="." and $file!=".."){
		$thumbfile=$file;	
		$thumbs[] = mosHTML::makeOption( $thumbfile,$thumbfile );
		}
	}
	@closedir($dir);
	//******************************************	
	$thumblist=mosHTML::selectList( $thumbs, 'localthumblist', 'id="localthumblist" class="inputbox" style="width:326px; font-size:10px;" size="7" onchange="selectthisthumb()"', 'value', 'text', $localthumb );	


	if ($row->addeddate=="" OR $row->addeddate==0){
	$date = date( 'Y-m-d H:i:s', time() + ( $mosConfig_offset * 60 * 60 ));
	} else {
	$date=$row->addeddate;
	};

	if ($row->addedby=="" OR $row->addedby==0){
	$addedby=$my->id;
	} else {
	$addedby=$row->addedby;
	};	

?>

<script language="JavaScript" type="text/javascript">

	var seyrethttp = createRequestObject();
		
		
  function selectthisvideo() {
  	
	var dir=document.getElementById("videocatdir").value;
	var file=document.getElementById("localvideolist").value;
    var fileaddress="<?php echo $mosConfig_live_site;?>"+dir+"/"+file;
	document.getElementById("videoservercode").value=fileaddress;
	document.getElementById("videoservertype").value="localfile";
  
  }
  
  function selectthisthumb() {
  	
	var dir=document.getElementById("videocatdir").value;
	var file=document.getElementById("localthumblist").value;
    var fileaddress="<?php echo $mosConfig_live_site;?>"+dir+"/"+"_thumbs"+"/"+file;
	document.getElementById("picturelink").value=fileaddress;
	document.getElementById("videoservertype").value="localfile";
	document.getElementById("showthumb").innerHTML="<img src=\""+fileaddress+"\" width=\"120px\" />";
	
  
  } 

		//general request object
		function createRequestObject() {
			var xRequest='';
			if (window.XMLHttpRequest) 
			{
				xRequest=new XMLHttpRequest(); 
			}
			else if (typeof ActiveXObject != "undefined")
			{
				xRequest=new ActiveXObject("Microsoft.XMLHTTP");
			}
			return xRequest;
		}
		


		
		function getfilelists() {

		var catid=document.getElementById("catid").value;	
		var strReplaceAll = catid;
        var intIndexOfMatch = strReplaceAll.indexOf( "*" );
		while (intIndexOfMatch != -1){
		 strReplaceAll = strReplaceAll.replace( "*", "25ja25" );
		 intIndexOfMatch = strReplaceAll.indexOf( "*" );
		 }
		var strReplaced=strReplaceAll.replace( "#", "theend" );

		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=getfilelists&catid='+strReplaced);
		seyrethttp.onreadystatechange = handleResponselist;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}
 
		function handleResponselist() {

			if(seyrethttp.readyState == 4){
				var response = seyrethttp.responseText;				
				document.getElementById("hiddenvalues").innerHTML = response;
				document.getElementById("videofilelistss").innerHTML = document.getElementById("hiddenvideodirfilelist").innerHTML;
				document.getElementById("videothumblistss").innerHTML = document.getElementById("hiddenthumbdirfilelist").innerHTML;			
				document.getElementById("videocatdir").value=document.getElementById("hiddenvideocatdir").innerHTML;
				
			}
			
		}	

		
</script>



<form action="index2.php" method="post" name="adminForm">



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="seyretadmininner">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _VIDEO;?> - <small><?php echo $row->id ? _EDIT_VIDEO : _NEW_VIDEO;?></small></td>
						</tr>
					</table>
			</td>
		</tr>

	<tr>
		<td width="15%"><b><?php echo _VIDEOCAT_PARENT;?>:</b></td>
		<td><?php echo $videocatlist;?></td>
		<td width="1%"rowspan="4"><div id="showthumb" style="float:left;"><img src="<?php echo $row->picturelink;?>"  width="120px" /></div></td>
	</tr>

	<tr>
		<td><b><?php echo _VIDEOTITLE;?>:</b></td>
		<td><input type="text" name="title" size="80" class="inputbox" value="<?php echo "$row->title";?>"></td>

	</tr>
	
	<tr>
		<td><b><?php echo _DETAILS;?>:</b></td>
		<td><input type="text" name="itemcomment" size="80" class="inputbox" value="<?php echo "$row->itemcomment";?>"></td>

	</tr>

	<tr>
		<td><b><?php echo _VIDEOACCESSLEVEL;?>:</b></td>
		<td><?php echo $accesslevellist;?><?php echo _PUBLISHED;?>:<?php echo $ispublished;?> <?php echo _ADDEDDATE;?>:<input type="text" id="addeddate" name="addeddate" size="10" class="inputbox" value="<?php echo $date;?>"/> <?php echo _ADDEDBY;?>:<input type="text" id="addedby" name="addedby" size="3" class="inputbox" value="<?php echo $addedby;?>"/><?php echo _ISDOWNLOADABLE;?>:<?php echo $isdownloadable;?></td>
	</tr>	
		
	<tr>
		<td><b><?php echo _FEATURED;?>:</b></td>
		<td><?php echo $isfeatured;?></td>

	</tr>		

	<tr>
		<td colspan="3" style="color:red; font-size:14px;" width="100%"><?php echo _LOCALVIDEO;?> - <small><?php echo _LOCALVIDEOINFO;?></small></td>
	</tr>

	<tr>
		<td colspan="3" width="100%">
			<table style="width:100%; border:1px solid red; background-color:#FCF0EC;">
					
					<tr>
						<td width="20%"><b><?php echo _VIDEOCAT_DIR;?>:</b></td>
						<td width="80%"><input type="text" id="videocatdir" name="videocatdir" size="60" class="inputbox" value="<?php echo $videocatdir;?>"></td>
					</tr>	

					<tr>
						<td width="20%"><b><?php echo _VIDEOCAT_FILELIST;?>:</b></td>
						<td width="80%"><div id="videofilelistss"><?php echo $videolist;?></div></td>
					</tr>	

					<tr>
						<td width="20%"><b><?php echo _VIDEOCAT_THUMBLIST;?>:</b></td>
						<td width="80%"><div id="videothumblistss"><?php echo $thumblist;?></div></td>
					</tr>					
					
					
					
			</table>
		</td>
	</tr>


	<tr>
		<td colspan="3" style="color:green; font-size:14px;" width="100%"><?php echo _VIDEOSERVER;?> - <small><?php echo _VIDEOSERVERINFO;?></small></td>
	</tr>	
	
	
	<tr>
		<td colspan="3" width="100%">
			<table style="width:100%; border:1px solid #006B01; background-color:#DFFFDF;">
				<tr><td>Will be coded - Don't ask please.
				</td></tr>
			</table>
		</td>
	</tr>


	<tr>
		<td colspan="3" style="color:#0049CE; font-size:14px;" width="100%"><?php echo _SERVERCODES;?> - <small><?php echo _SERVERCODESINFO;?></small></td>
	</tr>

	
	<tr>
		<td colspan="3" width="100%">
			<table style="width:100%; border:1px solid #0049CE; background-color:#DBE8FF;">


					<tr>
						<td width="2%"><b><?php echo _VTHUMB;?>:</b></td>
						<td width="79%"><input type="text" name="picturelink" id="picturelink" size="80" class="inputbox" value="<?php echo "$row->picturelink";?>"> <img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/becareful.gif" border="0" alt="Be careful!" /></td>
					</tr>	

					<tr>
						<td width="2%"><b><?php echo _VSERVERTYPE;?>:</b></td>
						<td width="79%"><input type="text" name="videoservertype" id="videoservertype" size="80" class="inputbox" value="<?php echo "$row->videoservertype";?>"> <img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/becareful.gif" border="0" alt="Be careful!" /></td>
					</tr>

					<tr>
						<td width="2%"><b><?php echo _VSERVERCODE;?>:</b></td>
						<td width="79%"><input type="text" name="videoservercode" id="videoservercode" size="80" class="inputbox" value="<?php echo "$row->videoservercode";?>"> <img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/becareful.gif" border="0" alt="Be careful!" /></td>
					</tr>
			</table>
		</td>
	</tr>


	
	

	
	<tr>
		<td width="100%" colspan="3"><br><b><?php echo _NEWVIDEOCOMMENT;?></b></td>
	</tr>

		<tr>
		<td colspan="3"><div id="hiddenvalues" style="visibility:hidden; display:none;"></div></td>
	</tr>
</table>


<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="savevideocat" />
<input type="hidden" name="boxchecked" value="0" />
</form>	

<?php 

HTML_seyret::tabletail();
}

//Function:HtmlEditvideo->end   ***************************






function askversiontracking() {
	global $mosConfig_live_site;
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border:solid 1px #FF0000;"><div align="center">
      <p>&nbsp;</p>
      <p><?php echo _VERSIONTRACKINGINFO;?></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#FF3300" style="color: #FFFFFF!important; padding:5px;"><div align="center"><strong><span><?php echo _PLEASESELECTTRACKINGCHOICE;?></span></strong></div></td>

  </tr>
  <tr>
        <td style="border:solid 1px #FF0000;"><div align="center">      
		<p>&nbsp;</p>
		<a href="index2.php?option=com_seyret&task=joomlaalemtracking&id=1"><img style="vertical-align:middle;" src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/trackingyes.png" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index2.php?option=com_seyret&task=joomlaalemtracking&id=2"><img style="vertical-align:middle;" src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/trackingno.png" border="0"></a>
		<p>&nbsp;</p>
		</div></td>
  
  </tr>
</table>
<?php

}




function htmldonation(){
global $database, $mosConfig_live_site, $mosConfig_absolute_path;
$sitemd5=md5(str_replace( "www.", "", $mosConfig_live_site));
$check_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/".$sitemd5.".xml";
$pro_file=$mosConfig_absolute_path."/administrator/components/com_seyret/sql/pro/spphp.php";


		$siteforjoomlaalem=$mosConfig_live_site;
		$siteforjoomlaalem = str_replace( "www.", "", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( "https://", "http://", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( ".", "__", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( "/", "25ja25", $siteforjoomlaalem );
		$siteforjoomlaalem = str_replace( ":", "1twodots1", $siteforjoomlaalem );
		
		

		$database->setQuery("SELECT * FROM #__seyret_check");
		$check = $database->loadObjectList();
		foreach ($check as $check) {
			$joomlaalemuserid=$check->joomlaalemuserid;
			$jalemdonated=$check->jalemdonated;
			$seyretpro = $check->seyretpro;	
			$prophpdate = $check->prophpdate;	
			$securitycode1 = $check->securitycode1;
			$securitycode2 = $check->securitycode2;
		}

		

HTML_seyret::tablehead();

$jalemlength=strlen($joomlaalemuserid);
if ($jalemlength<>15) {
 ?>

 <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _CAUTION;?></td>
						</tr>
					</table>
			</td>
		</tr>
		
		<tr>
		<td><font style="color:red; font-size:14px;"><?php echo _NOJALEMUSERID;?></font>
		</td>
		</tr>
</table>		
 <?php
} else {


?>

<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _DONATIONHEADER;?></td>
						</tr>
					</table>
			</td>
		</tr>
		
		<tr>
			
			
			<td width="50%" valign="top">
			<div style="border-bottom: 1px solid #3300CC; padding: 10px;  color: #3300CC;  font-size:14px;">
			<?php echo _PROSTATUS;?>
			</div>		
			
			
			<?php 
			
			if ($seyretpro=="0"){
			
					echo "<p>"._SEYRETISNOTPRO."</p>";
					
					?>

<div class="upgradetopromethodheader">
<?php echo _PAYVIAPAYPAL;?>
</div>

<div class="upgradetopromethod">

<?php
					echo "<p>"._DONATEFORPROMETHOD1."</p>";
					echo "<br>
					<a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=dindarm@gmail.com&item_name=Donation_for_pro_".$joomlaalemuserid."&amount=40&no_shipping=0&no_note=1&tax=0&currency_code=USD&bn=PP%2dDonationsBF&charset=UTF%2d8&return=http://www.joomlaholic.com&cancel=http://www.joomlaholic.com\"><img src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/40usd.png\" border=\"0\"/></a>
					<a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=dindarm@gmail.com&item_name=Donation_for_pro_".$joomlaalemuserid."&amount=60&no_shipping=0&no_note=1&tax=0&currency_code=USD&bn=PP%2dDonationsBF&charset=UTF%2d8&return=http://www.joomlaholic.com&cancel=http://www.joomlaholic.com\"><img src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/60usd.png\" border=\"0\"/></a>
					<a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=dindarm@gmail.com&item_name=Donation_for_pro_".$joomlaalemuserid."&amount=80&no_shipping=0&no_note=1&tax=0&currency_code=USD&bn=PP%2dDonationsBF&charset=UTF%2d8&return=http://www.joomlaholic.com&cancel=http://www.joomlaholic.com\"><img src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/80usd.png\" border=\"0\"/></a>										";
					echo "<br><br>
					<a href=\"http://wiki.joomlaholic.com/index.php?title=Pro_and_Standard_Version\">"._FORMOREINFORMATIONABOUTPRO."</a>";					

?>
</div>

<div onclick="document.getElementById('upgrademethod2').style.display='block'" style="text-align:right; cursor:pointer; color:red;"><?php echo _WANTTOUSECOUPON;?></div>

	<div id="upgrademethod2" style="display:none;">
	<div class="upgradetopromethodheader">
		<?php echo _COUPONMETHOD;?>
	</div>
	<div class="upgradetopromethod">
		<?php echo _DONATEFORPROMETHOD2;?>
	</div>

	<div class="upgradetopromethod">
		<form action="index2.php" method="post" name="adminForm">
			<input type="text" id="couponcode" name="couponcode" size="60" class="inputbox" value="">
			<input class="button" type="submit" value="<?php echo _SUBMITCOUPON;?>" />
			<input type="hidden" name="option" value="com_seyret" />
			<input type="hidden" name="task" value="submitprocoupon" />
		</form>
	</div>
	

</div>


<?php
					
			} else if ($seyretpro=="2") {	

					$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=checkpro&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&sc1=".$securitycode1."&sc2=".$securitycode2;
					$str=jalem_file_get_contents($link);
		
					$pos = strpos($str, "<procheck>")+10;
					$post=strpos($str, "</procheck>")-$pos;		
					$procheck=substr($str,$pos,$post);
					
					if ($procheck=="rejected") {
						$database->setQuery("UPDATE #__seyret_check SET seyretpro='0'");
						if (!$database->query()){
							echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
							exit();
						}
					
						echo "<p><img style=\"vertical-align:middle; float:left; padding:3px;\" src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/becareful.gif\" border=\"0\">"._SEYRETPROISREJECTED."</p>";
		
					} else if ($procheck=="pending") {
						echo "<p>"._SEYRETPROISPENDING."</p>";
						?>
						       <p> <a href="index2.php?option=com_seyret&task=resetprodonation"><?php echo _RESETMYPROSTATUS?></a>
						<?php					
					
					} else if ($procheck=="approved") {
					
						$database->setQuery("UPDATE #__seyret_check SET seyretpro='1'");
						if (!$database->query()){
							echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
							exit();
						}
						echo "<p><img style=\"vertical-align:middle; float:left; padding:3px;\" src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/reload.png\" border=\"0\">"._SEYRETPROISAPPROVEDREFRESH."</p>";						
					
					} else {
						echo "<p><img style=\"vertical-align:middle; float:left; padding:3px;\" src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/connectwarn.png\" border=\"0\"> "._COULDNTCONNECTTRYLATER."</p>";	
							?>
							       <p> <hr><img style="vertical-align:middle; float:left; padding:3px;" src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/reset.png" border="0"><?php echo _YOUCANRESETIFMISTAKENLY?><br><a href="index2.php?option=com_seyret&task=resetprodonation"><?php echo _RESETMYPROSTATUS?></a>
							<?php						
					}	

					
					
			} else if ($seyretpro=="1") {
			
					$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=checkpro&siteinfo=".$siteforjoomlaalem."&jalemuserid=".$joomlaalemuserid."&sc1=".$securitycode1."&sc2=".$securitycode2;
					$str=jalem_file_get_contents($link);

		
					$pos = strpos($str, "<procheck>")+10;
					$post=strpos($str, "</procheck>")-$pos;		
					$procheck=substr($str,$pos,$post);

					$pos = strpos($str, "<jhprophpdate>")+14;
					$post=strpos($str, "</jhprophpdate>")-$pos;		
					$jholicphpdate=substr($str,$pos,$post);



					
					if ($procheck=="approved") {
					
						echo "<p><img style=\"vertical-align:middle; float:left; padding:3px;\" src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/prook.png\" border=\"0\">"._PROAPPROVED."</p>";

						$localdate=strtotime($prophpdate);
						$jholicdate=strtotime($jholicphpdate);
						
						

						if ($localdate!=$jholicdate OR !file_exists($check_file) OR !file_exists($pro_file)) {
						echo "<br><img style=\"vertical-align:middle;\" src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/warning.png\" border=\"0\"><font color=\"red\">"._NEEDTOUPDATE."</p></font>";	
							?>
							       <p>
								   
								   		<div id="">
											<a href="index2.php?option=com_seyret&task=updateprophp">
											<div class="button2left">&nbsp;</div>
											<div class="button2mid"><?php echo _UPDATEPROPHP?></div>
											<div class="button2right">&nbsp;</div>
											</a>
										</div>	
								  </p>
								  <div style="clear:both;"></div>
							<?php	
						} else {
						echo "<br><hr><img style=\"vertical-align:middle;\" src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/trackingyes.png\" border=\"0\"><font color=\"green\">"._ITISUPTODATE."</p></font>";	
						}
					
					
					
					} else if ($procheck=="pending" OR $procheck=="rejected"){
						$database->setQuery("UPDATE #__seyret_check SET seyretpro='2'");
						if (!$database->query()){
							echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>n";
							exit();
						}
						
						

					
					} else {
						echo "<p><img style=\"vertical-align:middle; float:left; padding:3px;\" src=\"".$mosConfig_live_site."/administrator/components/com_seyret/images/connectwarn.png\" border=\"0\"> "._COULDNTCONNECTTRYLATER."</p>";	
							?>
							       <p> <hr><img style="vertical-align:middle; float:left; padding:3px;" src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/reset.png" border="0"><?php echo _YOUCANRESETIFMISTAKENLY?><br><a href="index2.php?option=com_seyret&task=resetprodonation"><?php echo _RESETMYPROSTATUS?></a>
							<?php						
					}			
			
			
?>
<div id="movepro">	
		<div id="moveproheader">
			<?php echo _MOVEPRO?>
		</div>

		<div id="moveproinfo">
			<?php echo _MOVEPROINFO?>
		</div>		
		
		<div id="moveprobutton">
			<a href="index2.php?option=com_seyret&task=requestcouponcodetomove">
			<div class="button1left">&nbsp;</div>
			<div class="button1mid"><?php echo _REQUESTCOUPONCODETOMOVE?></div>
			<div class="button1right">&nbsp;</div>
			</a>
		</div>			
		
		

</div>

<?php			
			
			
			} else {
				echo "check your database";
			}
			
			?>
			</td>
		
		</tr>
		
		
</table>



<?php


HTML_seyret::tabletail();


}


}








function htmluninstall(){
global $mosConfig_live_site;


HTML_seyret::tablehead();

?>

<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _UNINSTALL;?></td>
						</tr>
					</table>
			</td>
		</tr>
			
		<tr>
			<td align="center"><font style="color:red; font-size:14px;"><?php echo _CAUTION;?>
			<p><img style="vertical-align:middle;" src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/caution.png" border="0"><p><?php echo _CAUTIONUNINSTALL2;?></font>
			<p><a href="index2.php?option=com_seyret&task=proceeduninstall"><img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_seyret/images/proceeduninstall.png" border="none"/></a>
			<p><font style="font-size:14px;"><?php echo _CAUTIONUNINSTALL3;?></font>
			</td>
		</tr>
		
		
</table>

<?php


HTML_seyret::tabletail();		
}



function htmladlist($rows, $pageNav){
global $database, $mosConfig_live_site;

		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
			$seyretprocheck=$check->seyretpro;		
		}


HTML_seyret::tablehead();

?>
	

<?php if ($seyretprocheck=="1") {
?>	

<form action="index2.php" method="post" name="adminForm">




	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="7">
					<table width="100%">
						<tr>
						<td valign="top"><font color="red" size="3">BETA FEATURE</font></td>
						</tr>	
			
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _AD_VIDEO_LIST;?></td>
						</tr>
					</table>
			</td>
		</tr>
		
		<tr>
			<th class="title" width="1%"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>

			
			<th class="title" width="10%" align="center"><?php echo _PARENT;?></th>
			<th align="left"><?php echo _ADLINK;?></th>
			<th width="2%" align="center"><?php echo _PUBLISH;?></th>
			</tr>

					<?php
					$k = 0;
					for($i=0; $i < count( $rows ); $i++) {
					$row = $rows[$i];
					
					?>

		<tr class="<?php echo "row$k";//row: css için ?>"> 
			<td><input type="checkbox" id="cb<?php echo $i;?>" name="id[]" value="<?php echo "$row->id"; ?>" onclick="isChecked(this.checked);" /></td>
			
			<td align="left"><?php echo ShowCategoryPath($row->catid); ?></td>		
			<td align="left"><a href="#editad" onclick="return listItemTask('cb<?php echo $i;?>','editad')"><?php echo $row->adlink; ?></td>		
			<td align="center">
					<?php
					if ($row->published == "1") {
					$img="tick.png";
					} else {
					$img="publish_x.png";
					}
					?>

				<a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $row->published ? "unpbad" : "pbad";?>')">
				<img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
				</a>
			
			</td>		
 			<?php $k = 1 - $k; ?>
		</tr>
		
		
		
		
<?php } ?>

		<tr>
			<th align="center" colspan="9">
			<?php echo $pageNav->writePagesLinks(); ?></th>
		</tr>
     
		<tr>
			<td align="center" colspan="9">
			<?php echo $pageNav->writePagesCounter(); ?><br />
			<?php echo $pageNav->writeLimitBox(); ?> 
			</td>
		</tr>
     
	 </table>
	 
	 

	 
	 
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="admanagement" />
<input type="hidden" name="boxchecked" value="0" />

</form>

<?php 
} else {
?>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="7">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _THISISAPROVERSIONFEATURE;?></td>
						</tr>
						<tr>
						<td><?php echo _GOTODONATIONSPAGETOENABLEPRO;?>
						</td>
						
						</td>
					</table>
			</td>
		</tr>
	</table>
<?php
}

?> 
<?php


HTML_seyret::tabletail();		
}




//Function:HtmlEditad->start ***************************
function htmleditad($id, $row, $videocatlist) { 
	global $mosConfig_absolute_path, $mosConfig_live_site;
 require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 
	
	if ($remoteservervideosupport=="1") {
		$link=$remoteserver_ads_directory."/index.php?sender=".$responseseyretcheckitstring;
		$str=jalem_file_get_contents($link);
		
		
		$files = explode("&", $str);
		
		$filecount=count($files);
		$selectlist="<select id=\"remotefilelist\" class=\"inputbox\" size=\"15\" onclick=\"selectthisfile()\">";
		
		for ($i=0; $i<$filecount;$i++) {
			$filename=$files[$i];
			
			if ($filename!="" AND $filename!="index.php"){
			$selectlist=$selectlist."<option value=\"".$remoteserver_ads_directory."/".$filename."\">".$filename."</option>\n";
			}
			
		}
	
		$selectlist=$selectlist."</select>";
		$adfileslist=$selectlist;
	
	} else {
	$adfileslist=_REMOTESERVERSUPPORTISNOTENABLED;
	
		//***********************************************
		$current_dir=$mosConfig_absolute_path."/".$local_ads_directory;
		$dir=opendir($current_dir);
		while($file=readdir($dir))
		{
			if ($file!="." and $file!=".."){
			$vidfile=$mosConfig_live_site."/".$local_ads_directory."/".$file;	
			$videos[] = mosHTML::makeOption( $vidfile );
			}
		}
		closedir($dir);
		//******************************************

		$videolist=mosHTML::selectList( $videos, 'remotefilelist', 'class="inputbox" style="width:326px;font-size:10px;" size="7" id="remotefilelist" onclick="selectthisfile()"', 'value', 'text' );
		
		$adfileslist=$videolist;	
	}


HTML_seyret::tablehead();

?>
<script language="JavaScript" type="text/javascript">
  function selectthisfile() {
  	
	var file=document.getElementById("remotefilelist").value;
	document.getElementById("adlink").value=file;
  
  }
</script>

<form action="index2.php" method="post" name="adminForm">



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="seyretadmininner">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _AD;?> - <small><?php echo $row->id ? _EDIT_AD : _NEW_AD;?></small></td>
						</tr>
					</table>
			</td>
		</tr>
	

<?php 	
	if ($remoteservervideosupport=="1") {
?>
	<tr>
		<td colspan="2"><font style="color:red; font-weight:bold;"><?php echo _REMOTESERVERADDRESS.": ".$remoteserver_ads_directory;?></font></td>
	</tr>
<?php
	}
?>	
	
	<tr>
		<td width="20%"><b><?php echo _VIDEOCAT_NAME;?>:</b></td>
		<td width="80%"><?php echo $videocatlist;?></td>
	</tr>


	
	<tr>
		<td width="20%"><b><?php echo _REMOTESERVERFILES;?>:</b></td>
		<td width="80%"><?php echo $adfileslist;?></td>
	</tr>
	
	
	<tr>
		<td width="20%"><b><?php echo _ADLINK;?>:</b></td>
		<td width="80%"><input type="text" id="adlink" name="adlink" size="60" class="inputbox" value="<?php echo "$row->adlink";?>"></td>
	</tr>

	<tr>
		<td width="20%"><b><?php echo _IFPUBLISHED;?>:</b></td>
		<td width="80%"><input type="radio" name="published" value="1" checked="checked"/><?php echo _YES;?>
	<input type="radio" name="published" value="0"
		<?php if ($row->published == "0") {
		echo  "checked=\"checked\"";
		} ?>
	/><?php echo _NO;?></td>
	</tr>

	
	<tr>
		<td width="100%" colspan="2"><br><b><?php echo _NEWADCOMMENT;?></b></td>
	</tr>

</table>


<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="savead" />
<input type="hidden" name="boxchecked" value="0" />
</form>	

<?php 

HTML_seyret::tabletail();
}

//Function:HtmlEditad->end   ***************************




//Function:htmlextras->start ***************************
 function htmlextras($id, $row) { 

 
 
 
HTML_seyret::tablehead();


?>



<form action="index2.php" method="post" name="adminForm">



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="seyretadmininner">
		
		<tr>
			<td width="100%">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _EXTRAS;?></td>
						</tr>
					</table>
			</td>
		</tr>
		
		<tr><td>
<?php 
	$tabs = new mosTabs(1);
    $tabs->startPane("about-pane");
	$tabs->startTab(_WRITEHELP,"help");
?>
	<table width="100%">
	<tr>
		<td width="100%"><br><b><?php echo _WRITEHELPCOMMENT;?></b></td>
	</tr>
	
	<tr>
		<td width="100%"><?php editorArea( 'editor1', $row->seyrethelp, 'seyrethelp', '100%;', '350', '75', '20' ) ; ?></td>
	</tr>
	</table>
	
<?php
	$tabs->endTab();
	$tabs->startTab(_SNIPPETS,"snippets");
?>
	<table width="100%">
	<tr>
		<td width="100%"><br><b><?php echo _SNIPPETCOMMENT;?></b></td>
	</tr>
	
	<tr>
		<td width="100%"><?php editorArea( 'editor2', $row->seyretsnippet, 'seyretsnippet', '100%;', '350', '75', '20' ) ; ?></td>
	</tr>
	</table>
<?php
	$tabs->endTab();
	$tabs->endPane();
?>	
	

</td></tr>
</table>


<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="savehelp" />
<input type="hidden" name="boxchecked" value="0" />
</form>	

<?php 

HTML_seyret::tabletail();
}

//Function:htmlextras->end   ***************************






//Function:htmlpermissions->start ***************************
function htmlpermissions($rows) {
		global $database;
		
$k=0;
HTML_seyret::tablehead();
?>

		

<form action="index2.php" method="post" name="adminForm">




	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td  colspan="2" width="100%">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _RIGHTS;?></td>
						</tr>
					</table>
			</td>
		</tr>

		<tr>
			<td  colspan="2"><span class="permissionsheading"><?php echo _SUPERADMINRIGHTS;?></span></td>
		</tr>
			
		<tr>
			<td colspan="2"><?php echo _SUPERADMINRIGHTSINFO;?></td>
		</tr>

					
		<tr >
			<th colspan="2" class="title"  align="center"><?php echo _RIGHTS;?></th>
		</tr>

<?php
		for($i=0; $i < count( $rows ); $i++) {
		$row = $rows[$i];
		$id=$row->id;
		$aclname=$row->jaclname;

?>
		<tr class="<?php echo "row$k";//row: css için ?>"> 
			<td width="1%"><input type="checkbox" id="cb<?php echo $i;?>" name="id[]" value="<?php echo "$id"; ?>" onclick="isChecked(this.checked);" /></td>
			<td><a href="#editseyretacl" onclick="return listItemTask('cb<?php echo $i;?>','editseyretacl')"><?php echo $aclname; ?></a></td>
			
			<?php $k = 1 - $k; ?>
		</tr>
		
	
<?php

 } ?>

    
	 </table>
	 

<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="permissions" />
<input type="hidden" name="boxchecked" value="0" />

</form>

<?php 
HTML_seyret::tabletail();
}
//Function:htmlvideocatlist->end ***************************






//Function:htmleditseyretacl->start ***************************
function htmleditseyretacl($id, $row) { 
global $mosConfig_absolute_path, $database;

require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 

	$yesno[] = mosHTML::makeOption( 0, _NO );
	$yesno[] = mosHTML::makeOption( 1, _YES );
	
	for ($i=0; $i<=$videoaccesslevelsconf; $i++){
	$accesslevels[] = mosHTML::makeOption($i);
	}


	$database->setQuery("SELECT * FROM #__core_acl_aro_groups");
	$jacldata = $database->loadObjectList();
	foreach ($jacldata as $jacldata) 
	{
		$jaclname=$jacldata->name;
		if ($jaclname=="ROOT" OR $jaclname=="USERS") continue;
		$jaclcode=strtolower($jaclname);
		$jacllist[]=mosHTML::makeOption($jaclcode, $jaclname);
	}


HTML_seyret::tablehead();

?>



<form action="index2.php" method="post" name="adminForm">



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="seyretadmininner">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _SEYRETACL;?> - <small><?php echo $row->id ? _EDIT_SEYRETACL : _NEW_SEYRETACL;?></small></td>
						</tr>
					</table>
			</td>
		</tr>
	
	<tr>
		<td width="100%" colspan="2"><br><b><?php echo _ACLCOMMENT;?></b></td>
	</tr>

	<tr>
		<td width="21%"><br><b><?php echo _JACLNAME;?>:</b></td>
		<td width="79%"><br><?php echo mosHTML::selectList( $jacllist, 'jaclname', 'class="inputbox" size="1"', 'value', 'text', $row->jaclname);?>
</td>
	</tr>

	
	
			<tr class="permissionsrow1">
				<td><b><?php echo _CANSEEADMINTOOLBAR;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseeadmintoolbar', 'class="inputbox" size="1"', 'value', 'text', $row->canseeadmintoolbar);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEEREPORTEDVIDESBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseereportedvideosbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseereportedvideosbutton);?></td>
			</tr>	

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEPENDINGVIDESBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseependingvideosbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseependingvideosbutton);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEEADDVIDEOSBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseeaddvideobutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseeaddvideobutton);?></td>
			</tr>	

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANADDVIDEOS;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canaddvideos', 'class="inputbox" size="1"', 'value', 'text', $row->canaddvideos);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEEUPLOADVIDEOSBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseeuploadvideobutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseeuploadvideobutton);?></td>
			</tr>	

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANUPLOADVIDEOS;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canuploadvideos', 'class="inputbox" size="1"', 'value', 'text', $row->canuploadvideos);?></td>
			</tr>
			
			
			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEEMYVIDEOSBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseemyvideosbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseemyvideosbutton);?></td>
			</tr>				

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEFEATUREDVIDEOSBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseefeaturedvideosbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseefeaturedvideosbutton);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEESEARCHVIDEOSBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseesearchvideosbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseesearchvideosbutton);?></td>
			</tr>	
			
			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEHELPBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseehelpbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseehelpbutton);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEEDELETEVIDEOBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseedeletevideobutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseedeletevideobutton);?></td>
			</tr>	


			<tr  class="permissionsrow1">
				<td><b><?php echo _CANDELETEANYVIDEO;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'candeletevideo', 'class="inputbox" size="1"', 'value', 'text', $row->candeletevideo);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANDELETEOWNVIDEO;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'candeleteownvideos', 'class="inputbox" size="1"', 'value', 'text', $row->candeleteownvideos);?></td>
			</tr>	
			
			
			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEEDITVIDEOBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseeeditvideobutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseeeditvideobutton);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANEDITANYVIDEO;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'caneditvideo', 'class="inputbox" size="1"', 'value', 'text', $row->caneditvideo);?></td>
			</tr>	

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANEDITOWNVIDEO;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'caneditownvideos', 'class="inputbox" size="1"', 'value', 'text', $row->caneditownvideos);?></td>
			</tr>
			
			
			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEEFULLSCREENBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseefullscreenbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseefullscreenbutton);?></td>
			</tr>				

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEDOWNLOADBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseedownloadbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseedownloadbutton);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANDOWNLOADVIDEO;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'candownloadvideo', 'class="inputbox" size="1"', 'value', 'text', $row->candownloadvideo);?></td>
			</tr>	

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEREPORTBUTTON;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseereportbutton', 'class="inputbox" size="1"', 'value', 'text', $row->canseereportbutton);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANREPORTVIDEOS;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canreportvideos', 'class="inputbox" size="1"', 'value', 'text', $row->canreportvideos);?></td>
			</tr>	

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEDIRECTLINKBOX;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseedirectlinkbox', 'class="inputbox" size="1"', 'value', 'text', $row->canseedirectlinkbox);?></td>
			</tr>	
			
			<tr  class="permissionsrow2">
				<td><b><?php echo _CANSEEEMBEDBOX;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseeembedbox', 'class="inputbox" size="1"', 'value', 'text', $row->canseeembedbox);?></td>
			</tr>	

			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEVOTESTARTS;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseevotestars', 'class="inputbox" size="1"', 'value', 'text', $row->canseevotestars);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANVOTE;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canvote', 'class="inputbox" size="1"', 'value', 'text', $row->canvote);?></td>
			</tr>	
			
			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEECOMMENTS;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseecomments', 'class="inputbox" size="1"', 'value', 'text', $row->canseecomments);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _CANPUBLISHVIDEO;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canpublishvideo', 'class="inputbox" size="1"', 'value', 'text', $row->canpublishvideo);?></td>
			</tr>			

			
			<tr  class="permissionsrow1">
				<td><b><?php echo _CANSEEVIDEOSERVERDETAILS;?></b></td>
				<td><?php echo mosHTML::selectList( $yesno, 'canseevideoservercodes', 'class="inputbox" size="1"', 'value', 'text', $row->canseevideoservercodes);?></td>
			</tr>	

			<tr  class="permissionsrow2">
				<td><b><?php echo _VIDEOACCESSLEVEL;?></b></td>
				<td><?php echo mosHTML::selectList( $accesslevels, 'uservideoaccesslevel', 'class="inputbox" size="1"', 'value', 'text', $row->uservideoaccesslevel);?></td>
			</tr>	
			
</table>


<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="saveseyretacl" />
<input type="hidden" name="boxchecked" value="0" />
</form>	

<?php 

HTML_seyret::tabletail();
}

//Function:HtmlEditvideocat->end   ***************************


function htmlimageadlist($rows, $pageNav){
global $database, $mosConfig_live_site;

		$database->setQuery("SELECT * FROM #__seyret_check"); 		
		$check = $database->loadObjectList();
		foreach ($check as $check) 
		{
			$seyretprocheck=$check->seyretpro;		
		}

HTML_seyret::tablehead();

?>

		

<?php if ($seyretprocheck=="1") {
?>		
		
<form action="index2.php" method="post" name="adminForm">




	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="7">
					<table width="100%">
						<tr>
						<td valign="top"><font color="red" size="3">BETA FEATURE</font></td>
						</tr>	
			
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _AD_IMAGE_LIST;?></td>
						</tr>
					</table>
			</td>
		</tr>
		
		<tr>
			<th class="title" width="1%"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>

			
			<th class="title" width="10%" align="center"><?php echo _PARENT;?></th>
			<th align="left"><?php echo _ADLINK;?></th>
			<th width="2%" align="center"><?php echo _PUBLISH;?></th>
			</tr>

					<?php
					$k = 0;
					for($i=0; $i < count( $rows ); $i++) {
					$row = $rows[$i];
					
					?>

		<tr class="<?php echo "row$k";//row: css için ?>"> 
			<td><input type="checkbox" id="cb<?php echo $i;?>" name="id[]" value="<?php echo "$row->id"; ?>" onclick="isChecked(this.checked);" /></td>
			
			<td align="left"><?php echo ShowCategoryPath($row->catid); ?></td>		
			<td align="left"><a href="#editimagead" onclick="return listItemTask('cb<?php echo $i;?>','editimagead')"><?php echo $row->imageadlink; ?></td>		
			<td align="center">
					<?php
					if ($row->published == "1") {
					$img="tick.png";
					} else {
					$img="publish_x.png";
					}
					?>

				<a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $row->published ? "unpbad" : "pbad";?>')">
				<img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
				</a>
			
			</td>		
 			<?php $k = 1 - $k; ?>
		</tr>
		
		
		
		
<?php } ?>

		<tr>
			<th align="center" colspan="9">
			<?php echo $pageNav->writePagesLinks(); ?></th>
		</tr>
     
		<tr>
			<td align="center" colspan="9">
			<?php echo $pageNav->writePagesCounter(); ?><br />
			<?php echo $pageNav->writeLimitBox(); ?> 
			</td>
		</tr>
     
	 </table>
	 
	 

	 
	 
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="imageadmanagement" />
<input type="hidden" name="boxchecked" value="0" />

</form>


<?php 
} else {
?>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		
		<tr>
			<td width="100%" colspan="7">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _THISISAPROVERSIONFEATURE;?></td>
						</tr>
						<tr>
						<td><?php echo _GOTODONATIONSPAGETOENABLEPRO;?>
						</td>
						
						</td>
					</table>
			</td>
		</tr>
	</table>
<?php
}

?> 
<?php


HTML_seyret::tabletail();		
}



//Function:HtmlEditimagead->start ***************************
function htmleditimagead($id, $row, $videocatlist) { 
	global $mosConfig_absolute_path;
 require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 

HTML_seyret::tablehead();

?>


<form action="index2.php" method="post" name="adminForm">



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="seyretadmininner">
		
		<tr>
			<td width="100%" colspan="6">
					<table width="100%">
						<tr>
						<td class="seyretadminheader" width="100%"><?php echo _IMAGEAD;?> - <small><?php echo $row->id ? _EDIT_AD : _NEW_AD;?></small></td>
						</tr>
					</table>
			</td>
		</tr>
	

	

	
	
	<tr>
		<td width="20%"><b><?php echo _VIDEOCAT_NAME;?>:</b></td>
		<td width="80%"><?php echo $videocatlist;?></td>
	</tr>


	
	
	
	<tr>
		<td width="20%"><b><?php echo _ADLINK;?>:</b></td>
		<td width="80%"><input type="text" id="adlink" name="imageadlink" size="60" class="inputbox" value="<?php echo "$row->imageadlink";?>"></td>
	</tr>

	<tr>
		<td width="20%"><b><?php echo _CLICKLINK;?>:</b></td>
		<td width="80%"><input type="text" id="clicklink" name="clicklink" size="60" class="inputbox" value="<?php echo "$row->clicklink";?>"></td>
	</tr>
	
	
	<tr>
		<td width="20%"><b><?php echo _IFPUBLISHED;?>:</b></td>
		<td width="80%"><input type="radio" name="published" value="1" checked="checked"/><?php echo _YES;?>
	<input type="radio" name="published" value="0"
		<?php if ($row->published == "0") {
		echo  "checked=\"checked\"";
		} ?>
	/><?php echo _NO;?></td>
	</tr>

	
	<tr>
		<td width="100%" colspan="2"><br><b><?php echo _NEWIMAGEADCOMMENT;?></b></td>
	</tr>

</table>


<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="saveimagead" />
<input type="hidden" name="boxchecked" value="0" />
</form>	

<?php 

HTML_seyret::tabletail();
}

//Function:HtmlEditad->end   ***************************

function htmlinstallplugin(){
global $mosConfig_absolute_path;
 require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 

HTML_seyret::tablehead();

?>

		<form enctype="multipart/form-data" action="index2.php" method="post" name="filename">
		<table class="adminheading">
		<tr>
			<th class="install">
			<a name="install"><?php echo _INSTALLNEWPLUGIN;?></name>
			</th>
		</tr>
		</table>
		
		<table class="adminform">
		<tr>
			<th>
			<?php echo _UPLOADPACKAGE;?>
			</th>
		</tr>
		<tr>
			<td align="left">
			<?php echo _PACKAGEFILE;?>
			<input class="text_area" name="uploadedpluginfile" type="file" size="70"/>
			<input class="button" type="submit" value="<?php echo _UPLOADANDINSTALL;?>" />
			</td>
		</tr>
		</table>
		
		<input type="hidden" name="task" value="installpluginupload"/>
		<input type="hidden" name="option" value="com_seyret"/>
		</form>

		
		
<?php 

HTML_seyret::tabletail();
}




function htmldiagnostics(){
global $mosConfig_absolute_path;
 require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 

HTML_seyret::tablehead();

$filesystemcheckresult=checkfilesystem();
$connectioncheckresult=checkconnection();


?>


		<table class="adminheading">
		<tr>
			<th>
				<?php echo _DIAGNOSTICS;?>
			</th>
		</tr>
		</table>
		
		<table class="adminform">
		<tr>
			<th>
				<?php echo _FILESYSTEM;?>
			</th>
		</tr>
		
		<tr>
			<td align="left">
			<?php echo $filesystemcheckresult;?>
			</td>
		</tr>
		</table>
		

		<table class="adminform">
		<tr>
			<th>
				<?php echo _CONNECTION;?>
			</th>
		</tr>
		
		<tr>
			<td align="left">
			<?php echo $connectioncheckresult;?>
			</td>
		</tr>
		</table>	

		<table class="adminform">
		<tr>
			<th>
				<?php echo _CACHE;?>
			</th>
		</tr>
		
		<tr>
			<td align="left">
			<a href="index2.php?option=com_seyret&task=clearcache"><?php echo _CLEARVIDEOCACHE?></a>
			</td>
		</tr>
		</table>			
		
<?php 

HTML_seyret::tabletail();
}






function htmlseyretplugins(){
global $mosConfig_absolute_path, $database, $mosConfig_live_site;
 require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 

HTML_seyret::tablehead();


	$database->setQuery( "SELECT * FROM #__seyret_check");
	$check = $database->loadObjectList();
	foreach ($check as $check) 
	{
		$pro=$check->seyretpro;
	}
	
	
	
$filesystemcheckresult=checkfilesystem();
$connectioncheckresult=checkconnection();


	require( $mosConfig_absolute_path . '/administrator/components/com_seyret/seyret_version.php' );	
	$seyretversion=str_replace( ".","__",  $seyretversion );
	//$seyretversion="";
		
		
		

	$link="http://www.joomla-alem.com/index2.php?option=com_joomlaalem&no_html=1&task=checkpackages&sv=".$seyretversion;
	$str=jalem_file_get_contents($link);
	
	// echo $str;
	// exit;

	$videopluginspacks = array();
	$languagefilespacks= array();	
	$themefilespacks= array();
	$localizedbuttonspack= array();
	$toolspack= array();
	$playerskinpack = array();
	
	$vsplugincache=$mosConfig_absolute_path."/administrator/components/com_seyret/cache/html/vsplugins.xml";	
	
	$fh=fopen($vsplugincache,'w');
	fwrite($fh,$str);
	fclose($fh);		
		
		
	$seyretxmldoc =& new DOMIT_Document(); 
	$success = $seyretxmldoc->loadXML($vsplugincache, true); 


		
?>


		<table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminform">

		<tr>
			<td width="100%" colspan="5" >
					<div class="seyretadminheader" width="100%"><?php echo _SEYRETPLUGINS;?></div>
			</td>
		</tr>
		
		
		<tr>
			<td width="100%" colspan="5" ><hr></td>
		</tr>

		<tr>
			<td width="100%" colspan="5" ><div class="plugininfo"><?php echo _SEYRETCOMPATIBLEPLUGINS;?></div></td>
		</tr>

		
		<tr>
			<th>Pluginname</th><th>Local Version</th><th>Server Version</th><th>Status</th><th>Action</th>
		</tr>
		
		
		
		<?php
		if ($success) {

		$seyretxmlelement =& $seyretxmldoc->documentElement;
		$seyretchildnodes=& $seyretxmlelement->childNodes;
		
			foreach ($seyretchildnodes as $schildnode) {
			if ($schildnode->nodeName=="vsplugin") $vschild=$schildnode;
				
				$packname=$schildnode->getAttribute("name");
				$packtype=$schildnode->getAttribute("packtype");
				$targetfolder=$schildnode->getAttribute("targetfolder");
				$detailedname=$schildnode->getAttribute("vspdname");
				
				foreach ($vschild as $vs) {
			
					if ($vs->nodeName=="downloadcode")  $downcode=$vs->getText();
					if ($vs->nodeName=="pversion") $pversion=$vs->getText();
				}
				

					$xmlfile=$mosConfig_absolute_path.$targetfolder."/".$packname.".xml";


				
				if (file_exists($xmlfile)) {
					$seyretlocalxmldoc =& new DOMIT_Document(); 
					$success = $seyretlocalxmldoc->loadXML($xmlfile, true); 				
				
				} else {
					$success=false;
				}
	


				if ($success) {

					$seyretlocalxmlelement =& $seyretlocalxmldoc->documentElement;
					$seyretlocalchildnodes=& $seyretlocalxmlelement->childNodes;
				  
					foreach ($seyretlocalchildnodes as $slchildnode) {
						if ($slchildnode->nodeName=="packageversion") $localpackageversion=$slchildnode->getText();	
						if ($slchildnode->nodeName=="name") $localpackagename=$slchildnode->getText();	
						
					}
				}
		
				if ($pversion!=$localpackageversion) {
					$updatemessage="<div style=\"color:red;\">Outdated</div>";
					if ($pro=="1") {
						$downloadmessage="<div style=\"color:red;\"><a href=\"$mosConfig_live_site/administrator/index2.php?option=com_seyret&task=getpackage&downloadcode=$downcode\">Update from Joomlaholic servers.</a></div>";
					} else {
						$downloadmessage="<div style=\"color:silver;\">Only pro users can update from servers.</div>";
					}
					
					
				} else {
					$updatemessage="<div style=\"color:green;\">Up to date</div>";
					$downloadmessage="&nbsp;";
				}
				
				if (!file_exists($xmlfile)) {
					$updatemessage="<div style=\"color:red;\">Not installed</div>";
					if ($pro=="1") {
						$downloadmessage="<div style=\"color:red;\"><a href=\"$mosConfig_live_site/administrator/index2.php?option=com_seyret&task=getpackage&downloadcode=$downcode\">Update from Joomlaholic servers.</a></div>";
					} else {
						$downloadmessage="<div style=\"color:silver;\">Only pro users can update from servers.</div>";
					}	  	
					$localpackagename="<div style=\"color:red;\">$detailedname</div>";
					$localpackageversion="-";
				}
				
				if ($packtype=="videoserver"){
					$videopluginspacks[]="<tr><td>$localpackagename</td><td>$localpackageversion</td><td>$pversion</td><td>$updatemessage</td><td>$downloadmessage</td></tr>";				
				} else if ($packtype=="language"){
					$languagefilespacks[]="<tr><td>$localpackagename</td><td>$localpackageversion</td><td>$pversion</td><td>$updatemessage</td><td>$downloadmessage</td></tr>";				
				} else if ($packtype=="seyrettheme"){
					$themefilespacks[]="<tr><td>$localpackagename</td><td>$localpackageversion</td><td>$pversion</td><td>$updatemessage</td><td>$downloadmessage</td></tr>";					
				} else if ($packtype=="localizedbuttons"){
					$localizedbuttonspack[]="<tr><td>$localpackagename</td><td>$localpackageversion</td><td>$pversion</td><td>$updatemessage</td><td>$downloadmessage</td></tr>";					
				} else if ($packtype=="tool"){
					$toolspack[]="<tr><td>$localpackagename</td><td>$localpackageversion</td><td>$pversion</td><td>$updatemessage</td><td>$downloadmessage</td></tr>";					
				} else if ($packtype=="playerskin"){
					$playerskinpack[]="<tr><td>$localpackagename</td><td>$localpackageversion</td><td>$pversion</td><td>$updatemessage</td><td>$downloadmessage</td></tr>";					
				}
			

			}
			
		foreach ($videopluginspacks as $vplugins){
			echo $vplugins;
		}
		
?>
		<tr>
			<th>Language</th><th>Local Version</th><th>Server Version</th><th>Status</th><th>Action</th>
		</tr>
<?php		

		foreach ($languagefilespacks as $languages){
			echo $languages;
		}

?>
		<tr>
			<th>Themes</th><th>Local Version</th><th>Server Version</th><th>Status</th><th>Action</th>
		</tr>
<?php		

		foreach ($themefilespacks as $themes){
			echo $themes;
		}			

?>
		<tr>
			<th>Localized Buttons</th><th>Local Version</th><th>Server Version</th><th>Status</th><th>Action</th>
		</tr>
<?php		

		foreach ($localizedbuttonspack as $localized){
			echo $localized;
		}	

?>
		<tr>
			<th>Player Skins</th><th>Local Version</th><th>Server Version</th><th>Status</th><th>Action</th>
		</tr>
<?php		

		foreach ($playerskinpack as $skin){
			echo $skin;
		}
		
	?>
		<tr>
			<th>Tools</th><th>Local Version</th><th>Server Version</th><th>Status</th><th>Action</th>
		</tr>
<?php		

		foreach ($toolspack as $tool){
			echo $tool;
		}
		
	}
	?>
		
		</table>			
		
<?php 



HTML_seyret::tabletail();
}




function htmlpackit(){
global $mosConfig_absolute_path, $database, $mosConfig_live_site;
 require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php'); 

 require_once($mosConfig_absolute_path."/administrator/components/com_seyret/seyret_version.php");
 
HTML_seyret::tablehead();




		
?>
<form action="index2.php" method="post" name="adminForm">

		<table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminform">

		
		<tr>
			<td width="21%"><b><?php echo "Package name";?>:</b></td>
			<td width="79%"><input type="text" name="packagename" size="100" class="inputbox" value="write package name"></td>
		</tr>

		<tr>
			<td width="21%"><b><?php echo "XML file";?>:</b></td>
			<td width="79%"><input type="text" name="packthisxmlname" size="100" class="inputbox" value=""></td>
		</tr>	


		<tr>
			<td width="21%"><b><?php echo "Type";?>:</b></td>
			<td width="79%"><input type="text" name="type" size="100" class="inputbox" value="seyrettheme"></td>
		</tr>	

		<tr>
			<td width="21%"><b><?php echo "Target Folder";?>:</b></td>
			<td width="79%"><input type="text" name="targetfolder" size="100" class="inputbox" value="/components/com_seyret/"></td>
		</tr>		

		<tr>
			<td width="21%"><b><?php echo "Package Version";?>:</b></td>
			<td width="79%"><input type="text" name="packageversion" size="100" class="inputbox" value=""></td>
		</tr>

		<tr>
			<td width="21%"><b><?php echo "Compatibility";?>:</b></td>
			<td width="79%"><input type="text" name="compatibility" size="100" class="inputbox" value="<?php echo $seyretversion;?>"></td>
		</tr>
		
		<tr>
			<td width="21%"><b><?php echo "Author";?>:</b></td>
			<td width="79%"><input type="text" name="author" size="100" class="inputbox" value="Joomlaholic Team"></td>
		</tr>	
		<tr>
			<td width="21%"><b><?php echo "Author Mail";?>:</b></td>
			<td width="79%"><input type="text" name="authormail" size="100" class="inputbox" value="dindarm@gmail.com"></td>
		</tr>	

				<tr>
			<td width="21%"><b><?php echo "Author URL";?>:</b></td>
			<td width="79%"><input type="text" name="authorurl" size="100" class="inputbox" value="http://www.joomlaholic.com"></td>
		</tr>
		
		<tr>
			<td width="21%"><b><?php echo "Copyright";?>:</b></td>
			<td width="79%"><input type="text" name="copyright" size="100" class="inputbox" value="2008 Joomlaholic Team"></td>
		</tr>	

		<tr>
			<td width="21%"><b><?php echo "Description";?>:</b></td>
			<td width="79%"><input type="text" name="description" size="100" class="inputbox" value=""></td>
		</tr>	


		<tr>
			<td width="21%"></td>
			<td width="79%"><input class="button" type="submit" value="<?php echo "Pack It";?>" /></td>
		</tr>
					
		</table>

<input type="hidden" name="option" value="com_seyret" />
<input type="hidden" name="task" value="packitprocess" />

</form>				
		
<?php 

HTML_seyret::tabletail();
}




function htmlrequestcouponcode($str){

HTML_seyret::tablehead();

$movelimit=seyretfindit($str,"movelimit");
$couponcode=seyretfindit($str,"couponcode");


		
?>
<div class="couponcodeinfo"><?php echo _THISISYOURCOUPONCODE;?></div>


<div class="couponcode"><?php echo $couponcode;?></div>

<div class="movelimit"><?php echo _MOVELIMIT." : ".$movelimit;?></div>
	
		
<?php 

HTML_seyret::tabletail();
}




function htmlentersc2(){

HTML_seyret::tablehead();

		
?>
	<div class="upgradetopromethod">
		<?php echo _ENTERYOURSECURITYCODE2;?>
	</div>

	<div class="upgradetopromethod">
		<form action="index2.php" method="post" name="adminForm">
			<input type="text" id="sc" name="sc" size="60" class="inputbox" value="">
			<input class="button" type="submit" value="<?php echo _SUBMITSC2;?>" />
			<input type="hidden" name="option" value="com_seyret" />
			<input type="hidden" name="task" value="submitsc2" />
		</form>
	</div>
		
		
<?php 

HTML_seyret::tabletail();
}





function htmllongtail(){
global $mosConfig_absolute_path;

require($mosConfig_absolute_path.'/administrator/components/com_seyret/longtail_config.php');   



	HTML_seyret::tablehead();

	
	
?>


	<table width="100%">
		<tr>
		<td class="seyretadminheader" width="100%"><?php echo _LONGTAILSOLUTIONCONFIG;?></td>
		</tr>
	</table>



	<div>
		<div style="float:left; padding:20px;"
			<img src="http://www.longtailvideo.com/images/logo.gif" alt="LongTail Video"/>
		</div>	
			
		<div style="font-weight:bold;">
			<?php echo _LONGTAILSOLUTIONINFO;?>
		</div>	
	
	
	
		<div id="moveprobutton">
		<a href="http://www.longtailvideo.com/referral.aspx?page=landingpage&ref=joomlaholic" target="_blank">
		<div class="button1left">&nbsp;</div>
		<div class="button1mid"><?php echo _FREELONGTAILSIGNUP?></div>
		<div class="button1right">&nbsp;</div>
		</a>
		</div>	
		
		
	</div>
	
	<div style="clear:both;"></div>
	<div>

		<div  style="font-weight:bold;"><?php echo _LONGTAILENTERCODE;?> <a href="http://wiki.joomlaholic.com/index.php?title=Video_Tutorials-LongTailAds" target="_blank"><?php echo _LONGTAILVIDEOTUTORIAL;?></a> <br/>
		
		
	


		<form action="index2.php" method="post" name="adminForm"><br/>
			<input type="text" name="longtailcode" size="120" class="inputbox" value="">
			<input class="button" type="submit" value="<?php echo _SUBMITLONGTAILCODE;?>" />
			<input type="hidden" name="option" value="com_seyret" />
			<input type="hidden" name="task" value="submitlongtailcode" />
		</form>


		
		
		
		</div>
		
		
	</div>	
	
<?php
if ( $d!="") {

?>	
		
	<div>
	
		<p><p><?php echo _LONGTAILENTEREDPARAMETERS; ?><p>
		<font color="red"><?php echo htmlentities ("<script language=\"JavaScript\" src=\"http://www.ltassrv.com/serve/api5.5.asp?"."d=".$d."&"."s=".$s."&"."c=".$c."&"."v=".$v."\"></script>");?></font>
		
		<p><?php // echo "d=".$d."&"."s=".$s."&"."c=".$c."&"."v=".$v; ?>

	
	</div>



		
<?php 
} else {

?>	
		
	<div>
	
		<p><p><?php echo _LONGTAILNOTENTEREDPARAMETERS; ?>
	
	</div>



		
<?php 	

}
	


	HTML_seyret::tabletail();
}

}//class end

?>		

