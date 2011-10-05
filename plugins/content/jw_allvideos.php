<?php
/*
// "AllVideos" Plugin by JoomlaWorks for Joomla! 1.5.x - Version 2.5.3
// Copyright (c) 2006 - 2008 JoomlaWorks, a Komrade LLC company. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.joomlaworks.gr
// Designed and developed by the JoomlaWorks team
// *** Last update: August 10th, 2008 ***
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Trigger the plugin
$mainframe->registerEvent( 'onPrepareContent', 'jwAllVideos' );

function jwAllVideos( &$row, &$params, $page=0 ) {
	// Globals
	global $mainframe;
	
	// JoomlaWorks reference parameters
	$plg_name					= "jw_allvideos";
	$plg_tag					= "";
	$plg_copyrights_start		= "\n\n<!-- JoomlaWorks \"AllVideos\" Plugin (v2.5.3) starts here -->\n";
	$plg_copyrights_end			= "\n<!-- JoomlaWorks \"AllVideos\" Plugin (v2.5.3) ends here -->\n\n";
    // Paths without the ending slash
    $mosConfig_absolute_path	= JPATH_SITE;
    $mosConfig_live_site		= $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
    if(substr($mosConfig_live_site, -1)=="/") $mosConfig_live_site = substr($mosConfig_live_site, 0, -1);
    // Language tag ( $langTag ) as en-GB or el-GR
    $lang						=& JFactory::getLanguage();
    $langTag					= $lang->getTag();	

	// API
	$db =& JFactory::getDBO();
	
	// Includes
	include($mosConfig_absolute_path."/plugins/content/jw_allvideos/jw_allvideos_sources.php");
	
	// simple performance check to determine whether plugin should process further
	$grabTags = str_replace("(","",str_replace(")","",implode(array_keys($tagReplace),"|")));
	if (preg_match("#{(".$grabTags.")}#s",$row->text)==false) {return true;}

    // Get plugin info
    $plugin =& JPluginHelper::getPlugin('content', $plg_name);
		
	// Parameters
	$pluginParams = new JParameter( $plugin->params );
	
	// general
	$av_template			= $pluginParams->get('av_template','getault');
	$av_compressjs			= $pluginParams->get('av_compressjs',0);
	// video
	$vfolder 				= $pluginParams->get('vfolder','images/stories/videos');
	$vwidth 				= $pluginParams->get('vwidth',400);
	$vheight 				= $pluginParams->get('vheight',300);
	// audio
	$afolder 				= $pluginParams->get('afolder','images/stories/audio');
	$awidth 				= $pluginParams->get('awidth',300);
	$aheight 				= $pluginParams->get('aheight',20);
	// global
	$autoplay 				= ($pluginParams->get('autoplay',0)) ? 'true' : 'false';
	$transparency 			= $pluginParams->get('video_transparency','transparent');
	$background 			= $pluginParams->get('video_bg','');
	// FLV playback
	$av_flvcontroller 		= $pluginParams->get('av_flvcontroller','bottom');	

	if($av_flvcontroller == "over"){
		$av_flvcontroller = "&controlbar=over";
	} else {
		$av_flvcontroller = "";
	}

	// check whether plugin has been unpublished
	if ( !$pluginParams->get('enabled',1) ) {
		foreach ($tagReplace as $plg_tag => $value) {
			$regex = "#{".$plg_tag."}(.*?){/".$plg_tag."}#s";
			$row->text = preg_replace( $regex, "", $row->text );
		}
		return true;
	} else {
	
		// add CSS/JS to the head
		static $loadJWAVcss;
		if(!$loadJWAVcss) {
			$loadJWAVcss=1;
			$jwavhead = '
	<style type="text/css" media="all">
		@import "'.$mosConfig_live_site.'/plugins/content/jw_allvideos/templates/'.$av_template.'/template_css.css";
	</style>
			';
			if($av_compressjs){
			$jwavhead .= '
	<script type="text/javascript" src="'.$mosConfig_live_site.'/plugins/content/jw_allvideos/players/jw_allvideos_scripts.php"></script>
			';
			} else {
			$jwavhead .= '
	<script type="text/javascript" src="'.$mosConfig_live_site.'/plugins/content/jw_allvideos/players/silverlight.js"></script>
	<script type="text/javascript" src="'.$mosConfig_live_site.'/plugins/content/jw_allvideos/players/wmvplayer.js"></script>
	<script type="text/javascript" src="'.$mosConfig_live_site.'/plugins/content/jw_allvideos/players/AC_QuickTime.js"></script>
			';
			}
			
			$mainframe->addCustomHeadTag($plg_copyrights_start.$jwavhead.$plg_copyrights_end);
			
		}
		
	}

	// START ALLVIDEOS LOOP	
	foreach ($tagReplace as $plg_tag => $value) {
		// expression to search for
		$regex = "#{".$plg_tag."}(.*?){/".$plg_tag."}#s";			
		// process tags
		if (preg_match_all($regex, $row->text, $matches, PREG_PATTERN_ORDER) > 0) {
			// start the replace loop
			foreach ($matches[0] as $key => $match) {
				$tagcontent 	= preg_replace("/{.+?}/", "", $match);
				$tagparams 		= explode('|',$tagcontent);
				$tagsource 		= $tagparams[0];
				$final_vwidth 	= (@$tagparams[1]) ? $tagparams[1] : $vwidth;
				$final_vheight 	= (@$tagparams[2]) ? $tagparams[2] : $vheight;
				$final_autoplay = (@$tagparams[3]) ? $tagparams[3] : $autoplay;
								
				// replacements
				$findAVparams = array(
					"{AVSOURCE}",
					"{VFOLDER}",
					"{VWIDTH}",
					"{VHEIGHT}",
					"{AFOLDER}",
					"{AWIDTH}",
					"{AHEIGHT}",		
					"{AUTOPLAY}",
					"{TRANSPARENCY}",
					"{BACKGROUND}",
					"{CONTROLBAR}",
				);
				
				// special treatment
				if($plg_tag=="yahoo"){
					$tagsourceyahoo = explode('/',$tagsource);
					$tagsource = 'id='.$tagsourceyahoo[1].'&amp;vid='.$tagsourceyahoo[0];
				}
				if($plg_tag=="youku"){
					$tagsource = substr($tagsource,3);
				}				
				
				$replaceAVparams = array(
					$tagsource,
					$vfolder,
					$final_vwidth,
					$final_vheight,
					$afolder,
					$awidth,
					$aheight,
					$final_autoplay,
					$transparency,
					$background,
					$av_flvcontroller,
				);

				// wrap HTML around players
				$wrapstart = $plg_copyrights_start.'<span class="allvideos">';
				$wrapend = '</span>'.$plg_copyrights_end;

				$plg_html = JFilterOutput::ampReplace($wrapstart.str_replace($findAVparams, $replaceAVparams, $tagReplace[$plg_tag]).$wrapend);
				
				// Do the replace
				$row->text = preg_replace("#{".$plg_tag."}".preg_quote($tagcontent)."{/".$plg_tag."}#s", $plg_html , $row->text);

			} // end foreach

		} // end if
	
	} // END ALLVIDEOS LOOP	

} // END FUNCTION

?>