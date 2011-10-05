<?php
//Seyret AIO Module With Javascript Effects v.0.2//
/**
* Content code
* @package Latest Seyret
* @Copyright (C) 2008 Mustafa DINDAR
* @ All rights reserved
* @ latest seyret module is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.1
**/	

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

global $database, $mosConfig_live_site, $mosConfig_absolute_path, $mainframe, $mosConfig_lang;

if (!function_exists("jalem_file_get_contents")) require_once($mosConfig_absolute_path."/components/com_seyret/includes/seyret_gadgets.php");


//Language definitions
	if (file_exists($mosConfig_absolute_path."/components/com_seyret/language/".$mosConfig_lang.".php")){ 
	    require_once($mosConfig_absolute_path."/components/com_seyret/language/".$mosConfig_lang.".php");
    }else{ 
	require_once($mosConfig_absolute_path."/components/com_seyret/language/english.php");
    }
	

$query = "SELECT id FROM #__menu WHERE link = 'index.php?option=com_seyret' AND published = '1'";
$database->setQuery( $query, 0, 1 );
$seyretitemid = $database->loadResult();
		
		
$videocount 		= $params->get( 'count', '4' );
$videothumbwidth 	= $params->get( 'videothumbwidth', '120' );
$videothumbheight 	= $params->get( 'videothumbheight', '90' );
$videolisttype 		= $params->get( 'videolisttype', 'latest' );
$videodetails  		= $params->get( 'videodetails', 'bottom' );
$detaillabels  		= $params->get( 'detaillabels', 'text' );
$showvideoowner  	= $params->get( 'showvideoowner', '1' );
$showrating  		= $params->get( 'showrating', '1' );
$showhit  			= $params->get( 'showhit', '1' );
$showdownloads  	= $params->get( 'showdownloads', '0' );
$showaddeddate  	= $params->get( 'showaddeddate', '1' );
$showcategory  		= $params->get( 'showcategory', '0' );


$effecttype  		= $params->get( 'effecttype', 'noeffects' );
$filmedifilmcolor	= $params->get( 'filmedifilmcolor' );
$filmedshadow		= $params->get( 'filmedshadow','0' );
$filmedshadowopacity= $params->get( 'filmedshadowopacity','33' );
$filmedistrip		= $params->get( 'filmedistrip','100' );
$filmedishine		= $params->get( 'filmedishine','25' );
$cornerradius		= $params->get( 'cornerradius','8' );
$cornerishade		= $params->get( 'cornerishade','0' );
$cornerishadow		= $params->get( 'cornerishadow','33' );
$cornerinverse		= $params->get( 'cornerinverse','0' );
$edgemaskfile		= $params->get( 'edgemaskfile', 'crippleedge.png');
$glossyiradius		= $params->get( 'glossyiradius', '25');
$glossyshadow		= $params->get( 'glossyshadow', '1');
$glossyibgcolor		= $params->get( 'glossyibgcolor', '000000');
$glossyigradient	= $params->get( 'glossyigradient', '000000');
$glossyhorizontal	= $params->get( 'glossyhorizontal', '0');
$instantishadow 	= $params->get( 'instantishadow', '33');
$instanticolor 	    = $params->get( 'instanticolor', '33');
$instanttilt 		= $params->get( 'instanttilt', '');
$slidedishade 		= $params->get( 'slidedishade', '50');
$slidedibgcolor 	= $params->get( 'slidedibgcolor', 'E8EAFD');
$slidedigradient 	= $params->get( 'slidedigradient', 'FFE9BE');
$slidedshadow 		= $params->get( 'slidedshadow', '1');
$slidedishadow 		= $params->get( 'slidedishadow', '000000');
$slidedcircles 		= $params->get( 'slidedcircles', '1');
$slidedgradientdir 	= $params->get( 'slidedgradientdir', '');
$seyretcolumns 		= $params->get( 'seyretcolumns', '4');
$categoryids 		= $params->get( 'categoryids', '');
$incategories 		= $params->get( 'incategories', '');
$seyretscreenname 	= $params->get( 'seyretscreenname', 'username');
$videotitle 		= $params->get( 'videotitle', 'notitle');
$videotitlelength 	= $params->get( 'videotitlelength', '100');
$displaytype 		= $params->get( 'displaytype', 'thumbnail');

$row1bakgrcolor 	= $params->get( 'row1bakgrcolor', 'FFFFFF');
$row2bakgrcolor 	= $params->get( 'row2bakgrcolor', 'EDEDED');

$row1fontcolor 		= $params->get( 'row1fontcolor', '4F4F4F');
$row2fontcolor 		= $params->get( 'row2fontcolor', '4F4F4F');

$row1linecolor 		= $params->get( 'row1linecolor', '4F4F4F');
$row2linecolor 		= $params->get( 'row2linecolor', '4F4F4F');

$videotitleline 	= $params->get( 'videotitleline', '4F4F4F');
$videobottomline 	= $params->get( 'videobottomline', '4F4F4F');


?>

<style>

.row1{
background-color:#<?php echo $row1bakgrcolor ;?>;
border-bottom:1px solid #<?php echo $row1linecolor ;?>;
color:#<?php echo $row1fontcolor ;?>;
}

.row2{
background-color:#<?php echo $row2bakgrcolor ;?>;
border-bottom:1px solid #<?php echo $row2linecolor ;?>;
color:#<?php echo $row2fontcolor ;?>;
}


.videotitleinmodule{
font-weight:bold;
text-align:center;
padding: 5px;
border-bottom:1px solid #<?php echo $videotitleline ;?>;


}


.videothumbnailinmodule{
text-align:center;
padding: 5px;

margin:3px;
}


.votestarsinmodule{
text-align:center;
padding: 5px;
border:1px solid #CCCCCC;
margin:3px;
}

.seyretmoduleimageclass{
border:1px solid #345FAB;
padding:2px;
background-color:#FFFFFF;
}


.videoratingmainmodule {
position:relative;
background-image:url(<?php echo $mosConfig_live_site;?>/components/com_seyret/themes/default/images/star0.png);
background-repeat:repeat-x;
height:12px;
width:60px;
}

.ratingscalemodule {
position:absolute;
top:0px;
left:0px;
background-image:url(<?php echo $mosConfig_live_site;?>/components/com_seyret/themes/default/images/starfull.png);
height:12px;
}


.starsofvotemodule {
position:absolute;
top:0px;

background-repeat:repeat-x;
height:12px;
}





.modulevideodetails td{
border-bottom:1px solid #<?php echo $videobottomline ;?>;
padding:1px;
padding-left:3px;
}


</style>

<?php



$rowgauge=1;

if ($effecttype=="noeffects"){
	$effecttype=" ";
	$effectclass="seyretmoduleimageclass";
} else 
{
?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/seyretfiles/tools/jseffects/<?php echo $effecttype;?>.js"></script>
<?php 
}

//---------------------------------
//Define javascript effect classes
//---------------------------------


			if ($effecttype=="filmed"){
				$effectclass="filmed";
				if ($filmedifilmcolor!="") $effectclass.=" icolor".$filmedifilmcolor;
				if ($filmedshadow=="0"){ 
					$effectclass.=" noshadow";
				} else {
					$effectclass.=" ishadow".$filmedshadowopacity;
				}
				
				$effectclass.=" istrip".$filmedistrip;	
				$effectclass.=" ishine".$filmedishine;
			}

			if ($effecttype=="corner"){
				$effectclass="corner iradius".$cornerradius;
				$effectclass.=" ishade".$cornerishade;	
				$effectclass.=" ishadow".$cornerishadow;	
				if ($cornerinverse=="1") $effectclass.=" inverse";

			}

			if ($effecttype=="edge"){
				$effectclass="edges imask0";
			?>
				<script type="text/javascript">
				var mask2load = new Array();
				mask2load[0] = "seyretfiles/tools/jseffects/edgemasks/<?php echo $edgemaskfile;?>";
				</script> 
			<?php
			}

			if ($effecttype=="glossy"){
				$effectclass="glossy";
				$effectclass.=" iradius".$glossyiradius;
					if ($glossyshadow=="0"){ 
						$effectclass.=" noshadow";
					}
				$effectclass.=" ibgcolor".$glossyibgcolor;	
				$effectclass.=" igradient".$glossyigradient;
					if ($glossyhorizontal=="1"){ 
						$effectclass.=" horizontal";
					}
					
			}

			if ($effecttype=="instant"){
				$effectclass="instant";
				$effectclass.=" ishadow".$instantishadow;
				$effectclass.=" icolor".$instanticolor;
				$effectclass.=" ".$instanttilt;	
			}

			if ($effecttype=="slided"){
				$effectclass="slided";
				$effectclass.=" ishade".$slidedishade;	
				$effectclass.=" ibgcolor".$slidedibgcolor;
				$effectclass.=" igradient".$slidedigradient;	
				if ($slidedshadow=="0"){ 
					$effectclass.=" noshadow";
				} else {
					$effectclass.=" ishadow".$slidedishadow;
				}
				if ($slidedcircles=="0"){ 
					$effectclass.=" nocircles";
				}
				$effectclass.=" ".$slidedgradientdir;	
				
				
			}


//---------------------------------
//---------------------------------
//---------------------------------




//Analyze categories and generate query string
$extraquerystring="";
if ($incategories!=""){
	$extraquerystring="AND catid IN(";
	$catids = explode(",", $incategories);
	foreach ($catids as $catid){
		$database->setQuery("SELECT * FROM #__seyret_categories WHERE id='$catid'");
		$cats = $database->loadObjectList();
		foreach ($cats as $cats) {
		$catlongid=$cats->catid;
		}
		$extraquerystring.="'$catlongid',";
	
	}
	$extraquerystring=substr($extraquerystring, 0, -1);
	$extraquerystring.=")";

//echo $extraquerystring;
	
	$extraquerystring=substr($extraquerystring, 0, -1);	
	$extraquerystring.=")";
}

if ($showcategory=="1") {
	$videocats = array();
	//Generate Category Array
	$database->setQuery("SELECT * FROM #__seyret_categories");
	$myvidyocategory = $database->loadObjectList();
	foreach ($myvidyocategory as $myvidyocategory){
		$catgname=$myvidyocategory->categoryname;
		$cat_id=$myvidyocategory->catid;
		$videocats[$cat_id] = $catgname;
	}

}	

//Define list type and generate order query string

if ($videolisttype=="latest"){
	$orderby=" ORDER BY addeddate DESC ";
} else if ($videolisttype=="highestrated"){
	$orderby="  AND voteclick>0 ORDER BY votetotal/voteclick DESC ";
} else if ($videolisttype=="mostdownloaded"){
	$orderby=" ORDER BY downloadcount DESC ";
} else if ($videolisttype=="mostclicked"){
	$orderby=" ORDER BY hit DESC ";
}
//

if ($videolisttype!="random"){
	$lastquery="SELECT * FROM #__seyret_items WHERE published='1' $extraquerystring $orderby LIMIT 0, $videocount";
	$database->setQuery($lastquery);
	$vidyo = $database->loadObjectList();

	
	$columni=0;
		echo "<div>
		<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"text-align:center;\" width=\"100%\">
		<tr>";
		foreach ($vidyo as $vidyo) {
			$columni=$columni+1;
			$vid=$vidyo->id;
			$vhit=$vidyo->hit;
			$vtitle=$vidyo->title;
			$vpicturelink = $vidyo->picturelink;
			if ($vpicturelink=="") $vpicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
			$votes=$vidyo->voteclick;
			$vratingtotal=$vidyo->votetotal;
			$vaddedby=$vidyo->addedby;
			$downloads=$vidyo->downloadcount;
			$catid=$vidyo->catid;
			
			$addeddate=$vidyo->addeddate;
				$addeddate= mosFormatDate( $addeddate, "%d-%m-%Y" );
			
			$database->setQuery("SELECT username, name FROM #__users WHERE id='$vaddedby'"); 		
			$usname = $database->loadObjectList();
			foreach ($usname as $usname) 
			{
				$vaddedbyname=$usname->name;
				$vaddedbyusername=$usname->username;
			}
			
			if ($seyretscreenname=="username"){
				$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=uservideoslist&&from=0&userid=".$vaddedby;
				$seflink=sefRelToAbs($link);			
				$screenname="<a href=\"".$seflink."\">".$vaddedbyusername."</a>";
			} else {
				$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=uservideoslist&&from=0&userid=".$vaddedby;
				$seflink=sefRelToAbs($link);			
				$screenname="<a href=\"".$seflink."\">".$vaddedbyname."</a>";
			}
			
			if ($votes>0){
				$intrating=($vratingtotal/$votes)*20;
				$rating=ceil($intrating);
			}
			else {
				$rating="";
			}

			
			$vtitle=str_replace("\"", "&quot;", $vtitle);
			$vtitle=str_replace("'", "&acute;", $vtitle);
			
			$vaddeddate=$vidyo->addeddate;
			
			$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=videodirectlink&id=".$vid;
			$seflink=sefRelToAbs($link);	
			

			$sjsvideoinfo=$vtitle;

			
				echo "<td>";//sütun
				echo "<div class=\"row".$rowgauge."\">";//sütun
				if ($rowgauge==1) {
					$rowgauge=2;
				} else {
					$rowgauge=1;
				}
				
				if ($videotitle=="top"){
				
							if (strlen($vtitle)>$videotitlelength) {
								$vshorttitle=substr($vtitle,0,$videotitlelength)."...";
							} else {
								$vshorttitle=$vtitle;
							}
					echo "<div class=\"videotitleinmodule\"><a href=".$seflink.">".$vshorttitle."</a></div>";
				}
				

					
					if ($videodetails=="right") echo "<table width=\"100%\"><tr><td width=\"1%\">";
					
					
					if ($displaytype=="player") {
					
						if (!function_exists("embedthisvideo")) require_once($mosConfig_absolute_path."/components/com_seyret/includes/seyret.module.helper.php");
						echo "<div class=\"videothumbnailinmodule\">";
						echo embedthisvideo($vid, $videothumbwidth,$videothumbheight);
						echo "</div>";
					
					} else {
						echo "<div class=\"videothumbnailinmodule\"><a href=".$seflink."><img class=\"$effectclass \" title=\"$sjsvideoinfo\"  src=\"".$vpicturelink."\" width=\"".$videothumbwidth."\" height=\"".$videothumbheight."\" alt=\"".$vtitle."\" /></a></div>";
					}
					


					if ($videotitle=="bottom"){
					
							if (strlen($vtitle)>$videotitlelength) {
								$vshorttitle=substr($vtitle,0,$videotitlelength)."...";
							} else {
								$vshorttitle=$vtitle;
							}
					echo "<div class=\"videotitleinmodule\"><a href=".$seflink.">".$vshorttitle."</a></div>";
					}
					
					if ($videodetails!="nodetails"){
									
					if ($videodetails=="right")  echo "</td><td>";
					

					echo "<table class=\"modulevideodetails\" cellspacing=\"0\" width=\"100%\">";
					
					
					if ($detaillabels=="image"){

						if ($showvideoowner=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_user.png\"  style=\"border:none;\"/></td>	<td>$screenname</td></tr>";
											
						if ($showrating=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_rating.png\"  style=\"border:none;\"/>&nbsp;</td><td><div style=\"padding-right:0px;\">
								<div class=\"videoratingmainmodule\"> 
									<div class=\"ratingscalemodule\" style=\"width:".$rating."%;\"></div>
									<div style=\"left:0px; width:100%;\" class=\"starsofvotemodule\"></div>
								</div>
							</div>
							</td></tr>";
						

						if ($showhit=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_click.png\"  style=\"border:none;\"/></td><td>$vhit</td></tr>";
						if ($showdownloads=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_download.png\"  style=\"border:none;\"/></td><td>$downloads</td></tr>";					
		
						//echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_favorite.png\"  style=\"border:none;\"/></td><td>$favorites</td></tr>";	

						if ($showcategory=="1"){
						$cat="&nbsp;";
						if ($catid!="") $cat=$videocats[$catid];
						echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_category.png\"  style=\"border:none;\"/></td><td>$cat</td></tr>";
						}
							
						if ($showaddeddate=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_addeddate.png\"  style=\"border:none;\"/></td><td>$addeddate</td></tr>";					
					} else {
						if ($showvideoowner=="1")  echo "<tr><td>"._ADDEDBY.":</td><td>$screenname</td></tr>";	
						if ($showrating=="1") echo "<tr><td>"._RATING.":</td><td><div style=\"padding-right:0px;\">
								<div class=\"videoratingmainmodule\"> 
									<div class=\"ratingscalemodule\" style=\"width:".$rating."%;\"></div>
									<div style=\"left:0px; width:100%;\" class=\"starsofvotemodule\"></div>
								</div>
							</div>
							</td></tr>";				

						if ($showhit=="1") echo "<tr><td>"._HIT.":</td><td>$vhit</td></tr>";
						if ($showdownloads=="1") echo "<tr><td>"._DOWNLOADS.":</td><td>$downloads</td></tr>";
								
						if ($showcategory=="1"){
						$cat="&nbsp;";
						if ($catid!="") $cat=$videocats[$catid];
						echo "<tr><td>"._VIDEOCAT.":</td><td>$cat</td></tr>";
						}		
						//echo "<tr><td>"._HIT.":</td><td>$downloads</td></tr>";
						if ($showaddeddate=="1")  echo "<tr><td>"._ADDEDDATE.":</td><td>$addeddate</td></tr>";
											
					}
	

					echo "</table>";

		
					
					if ($videodetails=="right")  echo "</td><tr></table>";
				
				}
				
				
				echo "</div>";
				echo "</td>";//sütunbitiþ
	 
				if ($columni==$seyretcolumns){
				echo "</tr><tr>";
				$columni=0;
				}
		}
		
		echo "</tr></table></div>";
		
		
		
} else {
	$listedvideos=array();
	$database->setQuery("SELECT count(*) FROM #__seyret_items WHERE published='1'");
	$totalrnvid = $database->loadResult(); 	
	$whilei=0;
	$columni=0;
	if ($totalrnvid<$videocount) $videocount=$totalrnvid;
	
	echo "<div>
	<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"text-align:center;\" width=\"100%\">
	<tr>";
				
				
	while ($whilei<$videocount){
	$whilei=$whilei+1;

	if ($totalrnvid!=0){
		
		$fvno=rand(1,$totalrnvid);
		if (in_array($fvno, $listedvideos)) {
			$whilei=$whilei-1;
			//echo $fvno." -exists- ";
			continue;		
		}
		$listedvideos[]=$fvno;
		//echo "*".$fvno."*<br>";
		$count=0;
		$database->setQuery("SELECT * FROM #__seyret_items WHERE published='1'");
		$vidyo = $database->loadObjectList();	
		foreach ($vidyo as $vidyo) {
			$count=$count+1;
			if ($count==$fvno) {



					$columni=$columni+1;
					$vid=$vidyo->id;
					$vhit=$vidyo->hit;
					$vtitle=$vidyo->title;
						if ($vtitle=="") $vtitle="&nbsp;";
					$vpicturelink = $vidyo->picturelink;
					if ($vpicturelink=="") $vpicturelink=$mosConfig_live_site."/components/com_seyret/localplayer/nothumbnail.png";
					$votes=$vidyo->voteclick;
					$vratingtotal=$vidyo->votetotal;
					$vaddedby=$vidyo->addedby;
					$downloads=$vidyo->downloadcount;
					$catid=$vidyo->catid;
					
					$addeddate=$vidyo->addeddate;
						$addeddate= mosFormatDate( $addeddate, "%d-%m-%Y" );
					
					$database->setQuery("SELECT username, name FROM #__users WHERE id='$vaddedby'"); 		
					$usname = $database->loadObjectList();
					foreach ($usname as $usname) 
					{
						$vaddedbyname=$usname->name;
						$vaddedbyusername=$usname->username;
					}
					
					if ($seyretscreenname=="username"){
						$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=uservideoslist&&from=0&userid=".$vaddedby;
						$seflink=sefRelToAbs($link);			
						$screenname="<a href=\"".$seflink."\">".$vaddedbyusername."</a>";
					} else {
						$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=uservideoslist&&from=0&userid=".$vaddedby;
						$seflink=sefRelToAbs($link);			
						$screenname="<a href=\"".$seflink."\">".$vaddedbyname."</a>";
					}
					
					if ($votes>0){
						$intrating=($vratingtotal/$votes)*20;
						$rating=ceil($intrating);
					}
					else {
						$rating="";
					}

					
					$vtitle=str_replace("\"", "&quot;", $vtitle);
					$vtitle=str_replace("'", "&acute;", $vtitle);
					
					$vaddeddate=$vidyo->addeddate;
					
					$link="index.php?option=com_seyret&Itemid=".$seyretitemid."&task=videodirectlink&id=".$vid;
					$seflink=sefRelToAbs($link);	
					

					$sjsvideoinfo=$vtitle;

					
						echo "<td>";//sütun
						echo "<div class=\"row".$rowgauge."\">";//sütun
						if ($rowgauge==1) {
							$rowgauge=2;
						} else {
							$rowgauge=1;
						}
						
						if ($videotitle=="top"){
							if (strlen($vtitle)>$videotitlelength) {
								$vshorttitle=substr($vtitle,0,$videotitlelength)."...";
							} else {
								$vshorttitle=$vtitle;
							}
							$vshorttitle=substr($vtitle,0,$videotitlelength);
					echo "<div class=\"videotitleinmodule\"><a href=".$seflink.">".$vshorttitle."</a></div>";
						}
						

							
							if ($videodetails=="right") echo "<table width=\"100%\"><tr><td width=\"1%\">";
							
							
						if ($displaytype=="player") {
						
							if (!function_exists("embedthisvideo")) require_once($mosConfig_absolute_path."/components/com_seyret/includes/seyret.module.helper.php");
							echo "<div class=\"videothumbnailinmodule\">";
							echo embedthisvideo($vid, $videothumbwidth,$videothumbheight);
							echo "</div>";
						
						} else {
							echo "<div class=\"videothumbnailinmodule\"><a href=".$seflink."><img class=\"$effectclass \" title=\"$sjsvideoinfo\"  src=\"".$vpicturelink."\" width=\"".$videothumbwidth."\" height=\"".$videothumbheight."\" alt=\"".$vtitle."\" /></a></div>";
						}

							if ($videotitle=="bottom"){
							
							if (strlen($vtitle)>$videotitlelength) {
								$vshorttitle=substr($vtitle,0,$videotitlelength)."...";
							} else {
								$vshorttitle=$vtitle;
							}
					echo "<div class=\"videotitleinmodule\"><a href=".$seflink.">".$vshorttitle."</a></div>";
							}
							
							if ($videodetails!="nodetails"){
											
							if ($videodetails=="right")  echo "</td><td>";
							

							echo "<table class=\"modulevideodetails\" cellspacing=\"0\" width=\"100%\">";
							
							
							if ($detaillabels=="image"){

								if ($showvideoowner=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_user.png\"  style=\"border:none;\"/></td>	<td>$screenname</td></tr>";
													
								if ($showrating=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_rating.png\"  style=\"border:none;\"/>&nbsp;</td><td><div style=\"padding-right:0px;\">
										<div class=\"videoratingmainmodule\"> 
											<div class=\"ratingscalemodule\" style=\"width:".$rating."%;\"></div>
											<div style=\"left:0px; width:100%;\" class=\"starsofvotemodule\"></div>
										</div>
									</div>
									</td></tr>";
								

								if ($showhit=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_click.png\"  style=\"border:none;\"/></td><td>$vhit</td></tr>";
								if ($showdownloads=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_download.png\"  style=\"border:none;\"/></td><td>$downloads</td></tr>";					
				
								//echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_favorite.png\"  style=\"border:none;\"/></td><td>$favorites</td></tr>";	

								if ($showcategory=="1"){
								$cat="&nbsp;";
								if ($catid!="") $cat=$videocats[$catid];
								echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_category.png\"  style=\"border:none;\"/></td><td>$cat</td></tr>";
								}
									
								if ($showaddeddate=="1") echo "<tr><td><img src=\"".$mosConfig_live_site."/components/com_seyret/themes/default/images/module_addeddate.png\"  style=\"border:none;\"/></td><td>$addeddate</td></tr>";					
							} else {
								if ($showvideoowner=="1")  echo "<tr><td>"._ADDEDBY.":</td><td>$screenname</td></tr>";	
								if ($showrating=="1") echo "<tr><td>"._RATING.":</td><td><div style=\"padding-right:0px;\">
										<div class=\"videoratingmainmodule\"> 
											<div class=\"ratingscalemodule\" style=\"width:".$rating."%;\"></div>
											<div style=\"left:0px; width:100%;\" class=\"starsofvotemodule\"></div>
										</div>
									</div>
									</td></tr>";				

								if ($showhit=="1") echo "<tr><td>"._HIT.":</td><td>$vhit</td></tr>";
								if ($showdownloads=="1") echo "<tr><td>"._DOWNLOADS.":</td><td>$downloads</td></tr>";
										
								if ($showcategory=="1"){
								$cat="&nbsp;";
								if ($catid!="") $cat=$videocats[$catid];
								echo "<tr><td>"._VIDEOCAT.":</td><td>$cat</td></tr>";
								}		
								//echo "<tr><td>"._HIT.":</td><td>$downloads</td></tr>";
								if ($showaddeddate=="1")  echo "<tr><td>"._ADDEDDATE.":</td><td>$addeddate</td></tr>";
													
							}
			

							echo "</table>";

				
							
							if ($videodetails=="right")  echo "</td><tr></table>";
						
						}
						
						
						echo "</div>";
						echo "</td>";//sütunbitiþ
			 
						if ($columni==$seyretcolumns){
							echo "</tr><tr>";
							$columni=0;
						}
					
					}//get random video
				
				}//end of foreach

			}	//end of 0 vid control 

	}//end of while control
echo "</tr></table></div>";	
}

	
?>