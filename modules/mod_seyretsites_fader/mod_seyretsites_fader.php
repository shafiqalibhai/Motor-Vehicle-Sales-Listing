<?php
/*
// "Seyret Sites Fader" Module for Joomla! 1.0.X - Version 1.0
// License: http://www.gnu.org/copyleft/gpl.html
// Author: Larry Gillock Jr
// Copyright (c)2007 JoomlaToys.com - http://www.joomlatoys.com
// Project page at http://www.joomlatoys.com
// ***Last update: 05/27/2007***
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

global $database, $mosConfig_absolute_path, $mosConfig_live_site, $mainframe, $mosConfig_offset, $mosConfig_locale;

// module parameters
$moduleclass_sfx = $params->get( 'moduleclass_sfx', '' );
$imagefolder = trim($params->get('imagefolder'));
$transition = intval($params->get('transition',20));
$delay = intval($params->get('delay',1000));
$width = intval($params->get('width',120));
$height = intval($params->get('height',52));
$forceresize = intval($params->get('forceresize',0));
$enablelink	= trim($params->get('enablelink'));
$link = trim($params->get('link'));
$linktitle = $params->get( 'linktitle', 'JoomlaToys Seyret Sites Fader' );
$target = trim($params->get('target'));
$display = trim($params->get('display'));
$darkbg = intval($params->get('darkbg',0));
$useforbanners = intval($params->get('useforbanners',0));
$bannerfolder = $params->get('bannerfolder','images/banners/');

// retrieve the published banners only
$database->setQuery("SELECT * FROM  #__banner");
$rows = $database->loadObjectList();
$bannerpath = array();
$bannerurl = array();
if ($rows) {
	foreach ($rows as $row) {
		if ($row->showBanner) {
			$bannerpath[]=$bannerfolder.$row->imageurl;
			$bannerurl[]=$row->clickurl;
		}
	}
}
?>

<!-- JoomlaWorks "Simple Image Rotator" Module (v1.1) starts here -->
<style type="text/css" media="all">
ul#jw-sir {position:relative;list-style:none;list-style-image:none;margin:0px auto;padding:0px;overflow:hidden;border:none;background:none;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}
ul#jw-sir li {list-style:none;margin:0px;padding:0px;border:none;background:none;}
<?php if ($enablelink) { ?>
ul#jw-sir li a {margin:0px;padding:0px;border:none;background:none;}
ul#jw-sir li a img {display:none;position:absolute;top:0;left:0;border:none;background:none;}
<?php } else { ?>
ul#jw-sir li img {display:none;position:absolute;top:0;left:0;border:none;background:none;}
<?php } ?>
ul#jw-sir li#jw-sir-loading {background:<?php if ($darkbg) {echo '#000';} else {echo '#fff';} ?> url(modules/mod_seyretsites_fader/loading<?php if ($darkbg) {echo '_black';} ?>.gif) no-repeat center;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}
</style>
<script type="text/javascript" src="modules/mod_seyretsites_fader/mod_seyretsites_fader.js"></script>
<script type="text/javascript">var delay=<?php echo $delay; ?>;var transition=<?php echo $transition; ?>;</script>
<ul id="jw-sir" class="<?php echo $moduleclass_sfx; ?>">
  <?php
if ($useforbanners) {
// banner mode
echo '<li id="jw-sir-loading"></li>';
	$total = count($bannerpath);
	for ($i=0;$i<$total;$i++) {
			$link = $bannerurl[$i];
			$finalpath = $bannerpath[$i];
			// resize
			if ($forceresize) {
				$image_info = @getimagesize($finalpath);
				$rwidth = $image_info[0];
				$rheight = $image_info[1];	
				if ( $image_info[0] > $width ) {
					$target = $width;
					$percentage = ($target / $rwidth);
					$rwidth = round($rwidth * $percentage);
					$rheight = round($rheight * $percentage);
					$img_dimensions = 'style="width:'.$rwidth.'px;height:'.$rheight.'px;" ';
				} else {
				$img_dimensions = 'style="width:'.$rwidth.'px;height:'.$rheight.'px;" ';
				}
			}			
			// output
			if ($enablelink) {
					if ($target) {
					echo '<li><a href="'.$link.'" target="_blank"><img src="'.$finalpath.'" title="'.$linktitle.'" alt="'.$linktitle.'" '.$img_dimensions.' /></a></li>';
					} else {
					echo '<li><a href="'.$link.'"><img src="'.$finalpath.'" title="'.$linktitle.'" alt="'.$linktitle.'" '.$img_dimensions.' /></a></li>';
					}
				} else {
				echo '<li><img src="'.$finalpath.'" title="'.$linktitle.'" alt="'.$linktitle.'" '.$img_dimensions.' /></li>';
			}
	}
} else {
// standard mode
	if (file_exists($imagefolder) && is_readable($imagefolder)) {
		$folder = opendir($imagefolder);
		} else {
		echo '<div class="message">"Simple Image Rotator" error! Please check the module settings and make sure you have entered a valid image folder path!</div>';
		return;
	}
	$allowed_types = array("jpg","JPG","jpeg","JPEG","gif","GIF","png","PNG","bmp","BMP");
	$index = array();
	while ($file = readdir ($folder)) {
		if(in_array(substr(strtolower($file), strrpos($file,".") + 1),$allowed_types)) {array_push($index,$file);}
	}
	closedir($folder);
	if($display == 'random') {shuffle($index);} else {sort($index);}
	echo '<li id="jw-sir-loading"></li>';
	foreach ($index as $file) {
		$finalpath = $imagefolder."/".$file;
		// resize
		if ($forceresize) {
			$image_info = @getimagesize($finalpath);
			$rwidth = $image_info[0];
			$rheight = $image_info[1];	
			if ( $image_info[0] > $width ) {
				$target = $width;
				$percentage = ($target / $rwidth);
				$rwidth = round($rwidth * $percentage);
				$rheight = round($rheight * $percentage);
				$img_dimensions = 'style="width:'.$rwidth.'px;height:'.$rheight.'px;" ';
			} else {
			$img_dimensions = 'style="width:'.$rwidth.'px;height:'.$rheight.'px;" ';
			}
		}
		// output
		if ($enablelink) {
				if ($target) {
				echo '<li><a href="'.$link.'" target="_blank"><img src="'.$finalpath.'" title="'.$linktitle.'" alt="'.$linktitle.'" '.$img_dimensions.'/></a></li>';
				} else {
				echo '<li><a href="'.$link.'"><img src="'.$finalpath.'" title="'.$linktitle.'" alt="'.$linktitle.'" '.$img_dimensions.'/></a></li>';
				}
			} else {
			echo '<li><img src="'.$finalpath.'" title="'.$linktitle.'" alt="'.$linktitle.'" '.$img_dimensions.'/></li>';
		}
	}
	
// end if
}
?>
</ul>
<!-- JoomlaWorks "Simple Image Rotator" Module (v1.1) ends here -->
