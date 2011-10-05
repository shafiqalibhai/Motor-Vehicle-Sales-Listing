<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitiongallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
class HTML_morfeoshow{

function mostraFrontend($option, $rows, $pageNav, $limitstart, $limit, $total) {
	include_once(JPATH_SITE.DS.'administrator'.DS.'components'.DS.'com_morfeoshow'.DS.'settings.php' ); 
    global $mainframe;
    $params = &$mainframe->getParams();
	
	if ($params->get('show_page_title', 1)) : 
?>
<div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>"><?php echo $params->get('page_title'); ?></div>
<?php endif; ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane<?php echo $params->get( 'pageclass_sfx' ); ?>">

<?php if ($params_morfeo['frontend'] == 1) { ?>

<table class="fltable<?php echo $params->get('pageclass_sfx'); ?>" border="0" cellpadding="0" cellspacing="0" width="100%">

<?php if ($params_morfeo['logo'] == 1) {	?>
		<div align="left">
			<img src="<?php echo JURI::root()?>components/com_morfeoshow/images/front.png">
		</div>
<?php }	else {} 
				JRequest::setVar('limit', (int) $limit);
				$link= JRoute::_('index.php?option=com_morfeoshow&Itemid='.JRequest::getVar('Itemid', NULL));
?>				
			<form action="<?php echo $link; ?>" method="post" name="Form">
			<table>
				<tr>
					<td align="right" width="100%" nowrap="nowrap">
					</td>
					<td align="right" width="100%" nowrap="nowrap">
					&nbsp;&nbsp;&nbsp; <?php echo JText::_( 'Display' ) ?> &nbsp;#&nbsp;
            
			<?php $link= JRoute::_('index.php?option=com_morfeoshow&Itemid='.JRequest::getVar('Itemid', NULL));
				echo $pageNav->getLimitBox($link);
?>					
					</td>
				</tr>
			</table>
			<input type="hidden" name="option" value="com_morfeoshow" />
		    </form>
<table>			
	<tr>
		<th width="40" align="left" class="toggler" nowrap="nowrap"></th>
		<th width="35%" align="left" class="toggler" nowrap="nowrap"><?php echo JText::_( 'Gallery' );?></th>	
		<th width="60%" align="left" class="toggler" nowrap="nowrap"><?php echo JText::_( 'Description' );?></th>	
	</tr>
	<?php	
		$tabclass = array("sectiontableentry1".$params->get( 'pageclass_sfx' )."", "sectiontableentry2".$params->get( 'pageclass_sfx' )."");
		$k =0;
		$j =1;	
		
		if (sizeof($rows)==0) { 
			} else {
		foreach ($rows as $row) { 
		echo "<tr class='". $tabclass[$k] ."'>";
		if ($row->shortcut_filename) {
		?>		
			<td>
				<a href="index.php?option=<?php echo $option; ?>&task=view&gallery=<?php echo $row->id; ?>">
				<img width="40" border="0" src="images/morfeoshow/<?php echo $row->folder; ?>/<?php echo $row->shortcut_filename; ?>"/></a>
			</td>
	<?php } else {	?>
			<td>
				<a href="index.php?option=<?php echo $option; ?>&task=view&gallery=<?php echo $row->id; ?>">
				<img width="40" border="0" src="<?php JURI::root()?>components/com_morfeoshow/images/no.png"/></a>
			</td>
	<?php }	?>			
			<td>
				<a href="index.php?option=<?php echo $option; ?>&task=view&gallery=<?php echo $row->id; ?>">
				<?php echo $row->name; ?></a>
	<?php	
			echo '</td>';

			echo '<td>';
			$row->description = stripslashes($row->description);			
			echo substr($row->description,0,120); 
				if (strlen($row->description)>120) 
				echo '...';

			echo '</td>';
			echo '</tr>';
				$k = 1 - $k; }}
		
	
			echo '<tr>';
			echo '<td colspan=\"4\">&nbsp;</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td align="center" colspan="4" class="sectiontablefooter'.$params->get( 'pageclass_sfx' ).'">';
				$link= JRoute::_('index.php?option=com_morfeoshow&Itemid='.JRequest::getVar('Itemid', NULL));
				echo $pageNav->getPagesLinks($link);

				echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td colspan="4" align="right">';

			echo $pageNav->getPagesCounter();
				echo '</td>';
			echo '<tr>';
			
			

}if ($params_morfeo['frontend'] == 0) {
?>

	<tr>
		<td>
		<div id="flashcontent" align="middle">
			<a href="http://www.macromedia.com/go/getflashplayer">
				<?php echo JText::_( 'Get the Flash Player' );?></a> 
				<?php echo JText::_( 'to see this gallery.' );?>
		</div>

				<script type="text/javascript">
					var so = new SWFObject("<?php echo JURI::root()?>components/com_morfeoshow/gallery.swf", "gallery", "745", "700", "8", "#ffffff");
					so.addVariable("xmlURL","'.JURI::root().'components/com_morfeoshow/gallery.xml");			
					so.addParam("quality", "high");
					so.addParam("wmode", "transparent");
					so.write("flashcontent");
				</script>
			</td>
		</tr>
	
<?php
	}if ($params_morfeo['frontend'] == 2) {
	
$result = $total;	
if($result > 0) {
$x=0;
?>
<style>
a img, img 	{ border: none; text-decoration: none; }
.colonne	{padding: 5px;margin: 5px;border: 1px solid #999;display: block;width: <?php echo $params_morfeo['larfront']?>px;text-align:center;font-size:9px;text-decoration: none;}
.colonne:hover{border-color: white;text-decoration: none;}
</style>
<script src="<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/boxover/boxover.js" type="text/javascript"></script>
<tr>
<?php
foreach ($rows as $row){

{
$x=$x+1;

if ($x % $params_morfeo['colonnefront'] == 0) { 

		if ($row->shortcut_filename) {
		?>		
			<td align="center">
				<a  class="colonne" href="index.php?option=<?php echo $option; ?>&task=view&gallery=<?php echo $row->id; ?>">
				<img width="<?php echo $params_morfeo['larfront']?>" border="0" src="images/morfeoshow/<?php echo $row->folder; ?>/<?php echo $row->shortcut_filename; ?>" title="header=[<?php echo $row->name?>] body=[<?php echo $row->description ?>]" /></a>
			</td></tr><tr>
	<?php } else {	?>
			<td align="center">
				<a  class="colonne" href="index.php?option=<?php echo $option; ?>&task=view&gallery=<?php echo $row->id; ?>">
				<img width="<?php echo $params_morfeo['larfront']?>" border="0" src="<?php JURI::root()?>components/com_morfeoshow/images/no.png" title="header=[<?php echo $row->name?>] body=[<?php echo $row->description ?>]"/></a>
			</td></tr><tr>
	<?php }	?>	
<?php				
}else{ 		
if ($row->shortcut_filename) {
		?>		
			<td align="center">
				<a  class="colonne" href="index.php?option=<?php echo $option; ?>&task=view&gallery=<?php echo $row->id; ?>">
				<img width="<?php echo $params_morfeo['larfront']?>" border="0" src="images/morfeoshow/<?php echo $row->folder; ?>/<?php echo $row->shortcut_filename; ?>" title="header=[<?php echo $row->name?>] body=[<?php echo $row->description ?>]"/></a>
			</td>
	<?php } else {	?>
			<td align="center">
				<a  class="colonne" href="index.php?option=<?php echo $option; ?>&task=view&gallery=<?php echo $row->id; ?>">
				<img width="<?php echo $params_morfeo['larfront']?>" border="0" src="<?php JURI::root()?>components/com_morfeoshow/images/no.png" title="header=[<?php echo $row->name?>] body=[<?php echo $row->description ?>]"/></a>
			</td>
	<?php }	?>	
<?php			
}

}
}
echo '<tr></tr><tr><br /></tr>';	
} 	
 }//end else
echo '</table>'; 
}//end frontend function


function elencafiles($dirname,$row){
	$arrayfiles=Array();
	if(file_exists($dirname)){
		$handle = opendir($dirname);
		while (false !== ($file = readdir($handle))) { 
			if(is_file($dirname.$file)){
				array_push($arrayfiles,$file);
			}
		}
		$handle = closedir($handle);
	}
	sort($arrayfiles);
	return $arrayfiles;
}

	
function mostraGalleria($option, $row) {	
	jimport('joomla.environment.uri' );
	global $params_morfeo, $mainframe;
	$db =& JFactory::getDBO();
    $param = &$mainframe->getParams();
		
			$query = 'SELECT COUNT(id)'
			. ' FROM #__morfeoshow_img'
			. ' WHERE gallery_id ='. (int) @$row->id 			
			;
			$db->setQuery( $query );
			$count 	= $db->loadResult();			
			$query = 'SELECT *'
			. ' FROM #__morfeoshow_img'
			. ' WHERE gallery_id ='. (int) @$row->id 
			. ' ORDER BY '. @$row->orderfront 			
			;
			$db->setQuery($query);
			$items = $db->loadObjectList();
			
	        
			//flash gallery params
			$params["flashgallery"]		= @$row->flashgallery;
			$params["height"]			= @$row->height;
			$params["width"]			= @$row->width;
			$params["height"]			= @$row->height;
			$params["widthsw"]			= @$row->widthsw;
			$params["heightsw"]			= @$row->heightsw;
			$params["widthpc"]			= @$row->widthpc;
			$params["heightpc"]			= @$row->heightpc;
			$params["widthpl"]			= @$row->widthpl;
			$params["heightpl"]			= @$row->heightpl;
			$params["width"]			= @$row->width;
			$params["trans"]			= @$row->trans;
			$params["navigation"]		= @$row->navigation;
			$params["movimento"]		= @$row->movimento;			
			$params["tempo"]			= @$row->tempo;
			$params["bkgnd"] 			= @$row->bkgnd;
			$params["bkgnd1"] 			= @$row->bkgnd1;
			$params["bkgnd2"] 			= @$row->bkgnd2;
			$params["bkgnd3"] 			= @$row->bkgnd3;
			$params["user_id"] 			= @$row->user_id;
			$params["group_id"] 		= @$row->group_id; 
			$params["text"] 			= @$row->text;
			$params["tags"] 			= @$row->tags; 
			$params["set_id"] 			= @$row->set_id; 
			$params["sort"] 			= @$row->sort;
			$params["user"] 			= @$row->pusername;
			$params["psingle"] 			= @$row->psingle;
			$params["pback"] 			= @$row->pback;
			$params["ph"] 				= @$row->paltezza;
			$params["pw"] 				= @$row->plarghezza;
			$params["overstretch"] 		= @$row->overstretch;
			$params["shuffle"] 			= @$row->shuffle;
			$params["template"] 		= @$row->tclassic;
			$params["colonne"] 			= @$row->tcol;	


echo '<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center"><tr><td>';			

	if ($params_morfeo['description'] == 1) {			
	if (@$row->description1) {
	?>
	<fieldset class="morfeo">
	<table cellpadding="0" cellspacing="0" border="0" class="desctable">
		<tr>
			<td>
				<?php echo @$row->description1; ?>
			</td>
		</tr>
	</table>
	</fieldset>
<?php		
	}else{ }	
	}else{ }	


switch ($params["flashgallery"]) {
//case 0 Shadowboxgallery
case '0':
	$image_dir  = JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS. $row->folder .DS.'big';
	$path1 		= JURI::root().'images/morfeoshow/'. $row->folder .'/big/';
	$path2 		= JURI::root().'images/morfeoshow/'. $row->folder.'/thumbs/';	

	switch ($params["template"]) {
			case '0':
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/shadowbox1.php' );
			break;
			
			case '1':
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/shadowbox2.php' );
			break;

			case '2':
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/shadowbox3.php' );
			break;
			
			case '3':
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/shadowbox4.php' );
			break;	

			case '4':
			//fancybox first style
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/fancybox1.php' );
			break;	

			case '5':
			//fancybox second style
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/fancybox2.php' );
			break;
			
			case '6':
			//fancybox first style
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/fancybox3.php' );
			break;	

			case '7':
			//fancybox second style
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'classic/fancybox4.php' );
			break;			
	
		}	
	
break;
//case 1 Imagerotatorgallery
case '1':	
	
				if	 ( $params["trans"] == 0 ) {	$trans = "random";
			} elseif ( $params["trans"] == 1 ) {	$trans = "fade"; 
			} elseif ( $params["trans"] == 2 ) {	$trans = "blocks"; 
			} elseif ( $params["trans"] == 3 ) { 	$trans = "circles"; 
			} elseif ( $params["trans"] == 4 ) {	$trans = "bubbles"; 
			} elseif ( $params["trans"] == 5 ) {	$trans = "lines"; 
			} elseif ( $params["trans"] == 6 ) {	$trans = "slowfade";
			} elseif ( $params["trans"] == 7 ) {	$trans = "fluids"; 
			} elseif ( $params["trans"] == 8 ) {	$trans = "flash"; 
			} elseif ( $params["trans"] == 9 ) {	$trans = "bgfade";			
				}

				if    ( $params['navigation'] == 1 ) { 	$nav = "true";	
			} else if ( $params['navigation'] == 0 ) {	$nav = "false"; 
				}
				
				if    ( $params['overstretch'] == 1 ) { $overstretch = "true";	
			} else if ( $params['overstretch'] == 0 ) {	$overstretch = "false"; 
				}	

				if    ( $params['shuffle'] == 1 ) { $shuffle = "true";	
			} else if ( $params['shuffle'] == 0 ) {	$shuffle = "false"; 
				}					

				if	  ( $params['movimento'] == 1 ) {	$mov = "true";	
			} else if ( $params['movimento'] == 0 ) {	$mov = "false"; 		
				}	
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'imagerotator/imagerotator.php' );	
break;
//case 2 Imageviwergallery		
case '2':
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'imageviewer/imageviewer.php' );
break;
//case3 Postcardgallery
case '3':
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'postcard/postcard.php' );

break;
//case4 Polaroidgallery
case '4':
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'polaroid/polaroid.php' );
break;
//case5 Flickr
case '5':

					if    ( $params['sort'] == 1 ) { 	$sort = "sort=relevance";	
				} else if ( $params["sort"] == 0 ) {	$sort = "sort="; 
				} 

				
echo '
				<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
							<iframe align="center" src="http://www.flickr.com/slideShow/index.gne?user_id='.$params["user_id"].'&group_id='.$params["group_id"].'&text='.$params["text"].'&tags='.$params["tags"].'&set_id='.$params["set_id"].'&'.$sort.'" frameBorder="0" width="500" scrolling="no" height="500"></iframe>	
							</iframe>
						</td>
					</tr>
				</table>
';				

break;
//case6 Flickr 2
case '6':

			  		if    ( $params['user_id'] == '' ) { 	$user = "";	
						} else {							$user = $params["user_id"]."/"; 
				} 
			 		if    ( $params['tags'] ) { 			$tags = "tags/".$params["tags"];	
						} else {							$tags = ""; 
				} 
			 		if    ( $params['set_id'] == '') { 		$set = "";	
						} else {							$set = "/sets/".$params["set_id"];
				} 
			 		if    ( $params['sort'] == 1 ) { 		$int = "/interesting";	
						} else {							$int = ""; 
				} 		
			 
echo '
				<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
							<iframe align="center" src="http://www.flickr.com/photos/'.$user . $tags . $set .$int . '/show" frameBorder="0" width="730" scrolling="no" height="560">
							</iframe>
						</td>
					</tr>
				</table>
';	

break;
//case7 Flickr Map
case '7':
			echo '
				<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
							<iframe align="center" src="http://flickr.com/map/?&fLat='.$row->glat.'&fLon='.$row->glng.'&zl=5&map_type=hyb&order_by=interestingness" frameBorder="0" width="700" scrolling="no" height="550"></iframe>
							</iframe>
						</td>
					</tr>
				</table>
			';	
break;
//case8 Google Map
case '8':
?>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td align="center">
<?php
			//Recupera dati
			$latitudine 	= $row->glat;
			$longitudine 	= $row->glng;
			$zoom 			= $row->gzoom;
			$name 			= $row->name;
			$name 			= $row->luogo;
			$descrizione 	= $row->description;
			$gmapkey 		= $row->gmapkey;
?>	
<meta name="gmapkey" content="<?php echo $gmapkey ;?>" />
    <script
	  src="<?php echo JURI::root()?>components/com_morfeoshow/src/js/gmapez-2.js"
      type="text/javascript"></script>
<div id="contenuto" style="padding-left:10px;padding-right:10px;padding-top:10px;">	  
<div class="GMapEZ GLargeMapControl GMapTypeControl GScaleControl GOverviewMapControl" style="width: 600px; height: 480px;">
  <?php 
echo '<a href="' . ('http://maps.google.com/maps?ll=' . $latitudine . ',' . $longitudine . '&amp;spn=0.006130,0.239795&amp;') . '">';
	echo 'EXTENT';
	echo 'A OPEN';
		echo '</a>';
		echo '<div title="'.$name.'">';
			echo '<table>';		
			echo '<tr>';
		    echo '<td valign="top">';
		    echo '<span style="font-size:14px;font-weight:bold;color:#004080;">';
			echo $name;
		    echo '</span><br />';
			echo $descrizione;
		    echo '</tr>';
		    echo '</table>';			
	echo '</div>';

?>
</div>
</div>		
		</td>
		</tr>
		</table>
<?php
break;
//case9 Picasa
case '9':
	global $mainframe, $params_morfeo;
			require_once( JPATH_COMPONENT.DS.'tpl'.DS.'picasa/picasa.php' );
break;

//case10 flickr single gallery
case '10':
	global $mainframe, $params_morfeo;

	require_once(JPATH_COMPONENT.DS.'tpl'.DS.'resources'.DS.'phpFlickr'.DS.'phpFlickr.php');
	
	$f 				= new phpFlickr($params_morfeo['flickrkey']); 
	$photoset_id 	= $params['set_id'];
	$photos 		= $f->photosets_getPhotos($photoset_id);	
	
	require_once( JPATH_COMPONENT.DS.'tpl'.DS.'flickrsingle/flickrsingle.php' );
break;

//case10 picasa single gallery
case '11':
	global $mainframe, $params_morfeo;

	$userid		 	=  $params['user'];
	$gallery 		=  $params['psingle'];
	$background		=  $params['pback'];	
	$ph				=  $params['ph'];
	$pw				=  $params['pw'];
?>
				<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
<embed pluginspage = "http://www.macromedia.com/go/getflashplayer" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" flashvars="host=picasaweb.google.com&amp;RGB=0x<?php echo $background ?>&amp;feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F<?php echo $userid ?>%2Falbumid%2F<?php echo $gallery ?>%3Fkind%3Dphoto%26alt%3Drss" wmode="transparent" type ="application/x-shockwave-flash" height ="<?php echo $ph ?>" width="<?php echo $pw ?>"></embed>
						</td>
					</tr>
				</table>
<?php	
break;
					
	}
	if ($params_morfeo['description'] == 0) {	
	if (@$row->description1) {
	?>
	<fieldset class="morfeo">
	<table cellpadding="0" cellspacing="0" border="0" class="desctable">
		<tr>
			<td>
				<?php echo @$row->description1; ?>
			</td>
		</tr>
	</table>
	</fieldset>
<?php	}else{ } 
		}else{ }  ?>
<?php
		if ($params_morfeo['back'] == 0) { ?>	
			<div class="back_button" align="center">
			<a href="index.php?option=com_morfeoshow&Itemid=<?php echo JRequest::getVar('Itemid', NULL); ?>">	
				<?php echo JText::_( 'Back' ); ?></a>
			</div>
<?php			
		echo '</td></tr></table>';		
		} else {
		echo '</td></tr></table>';
		}		
	}
}
?>