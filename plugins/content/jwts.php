<?php
/*
// JoomlaWorks "Tabs & Slides" Plugin for Joomla! 1.5.x - Version 2.4
// License: http://www.gnu.org/copyleft/gpl.html
// Copyright (c) 2006 - 2008 JoomlaWorks, a Komrade LLC company.
// More info at http://www.joomlaworks.gr
// Developers: Fotis Evangelou
// ***Last update: May 20th, 2008***
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

// Import library dependencies
jimport('joomla.event.plugin');

class plgContentJwts extends JPlugin
{
	//Constructor
	function plgContentJwts( &$subject )
	{
		parent::__construct( $subject );
		// load plugin parameters
		$this->_plugin = JPluginHelper::getPlugin( 'content', 'jwts' );
		$this->_params = new JParameter( $this->_plugin->params );
	}


	function onPrepareContent(&$row, &$params, $limitstart) {

		// just startup
		global $mainframe, $loadJWTSscripts;

		// checking
		if ( !preg_match("#{tab=.+?}#s", $row->text) && !preg_match("#{slide=.+?}#s", $row->text) ) {
			return;
		}

		// JS loader selection
		$use_optimized_loader = 0; // Use optimized JS code loader? 0=no and 1=yes. Default is 0.

		$plugin =& JPluginHelper::getPlugin('content', 'jwts');
		$pluginParams = new JParameter( $plugin->params );

		// j!1.5 paths
		$mosConfig_absolute_path 	= JPATH_SITE;
		$mosConfig_live_site 		= $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
		if(substr($mosConfig_live_site, -1)=="/") $mosConfig_live_site = substr($mosConfig_live_site, 0, -1);

		// Parameters
		$enable_tabs 		= $pluginParams->get('enable_tabs', 1);
		$enable_slides 		= $pluginParams->get('enable_slides', 1);
		$slides_slidespeed 	= $pluginParams->get('slides_slidespeed', '30');
		$slides_timer 		= $pluginParams->get('slides_timer', '10');

		if(!$loadJWTSscripts) {
			$loadJWTSscripts=1;
			$header = "<!-- JoomlaWorks \"Tabs & Slides\" Plugin (v2.3) starts here -->
						<style type=\"text/css\" media=\"screen\">
							@import \"$mosConfig_live_site/plugins/content/plugin_jw_ts/tabs_slides.css\";
						</style>
						<style type=\"text/css\" media=\"print\">.jwts_tabbernav{display:none;}</style>
						<script type=\"text/javascript\">var jwts_slideSpeed=".$slides_slidespeed."; var jwts_timer=".$slides_timer.";</script>
						<script type=\"text/javascript\" src=\"$mosConfig_live_site/plugins/content/plugin_jw_ts/tabs_slides_comp.js\"></script>
					  ";
			if($use_optimized_loader) {
				$header .= "<script type=\"text/javascript\" src=\"$mosConfig_live_site/plugins/content/plugin_jw_ts/tabs_slides_opt_loader.js\"></script>";
			} else {
				$header .= "<script type=\"text/javascript\" src=\"$mosConfig_live_site/plugins/content/plugin_jw_ts/tabs_slides_def_loader.js\"></script>";
			}
			$header .= "<!-- JoomlaWorks \"Tabs & Slides\" Plugin (v2.3) ends here -->";

			// cache check
			if($mainframe->getCfg('caching') && ($option=='com_frontpage' || $option=='')) {
				echo $header;
			} else {
				$mainframe->addCustomHeadTag($header);
			}
		}

		if($enable_tabs) {
			if(!$_REQUEST['print'] && $_REQUEST['format']!="pdf") {
				$b=1;
				unset($tabs);
				if (preg_match_all("/{tab=.+?}{tab=.+?}|{tab=.+?}|{\/tabs}/", $row->text, $matches, PREG_PATTERN_ORDER) > 0) {
					foreach ($matches[0] as $match) {
						if($b==1 && $match!="{/tabs}") {
							$tabs[] = 1;
							$b=2;
						}
						elseif($match=="{/tabs}"){
							$tabs[]=3;
							$b=1;
						}
						elseif(preg_match("/{tab=.+?}{tab=.+?}/", $match)){
							$tabs[]=2;
							$tabs[]=1;
							$b=2;
						}
						else {
							$tabs[]=2;
						}
					}
				}
				@reset($tabs);
				$tabscount = 0;
				if (preg_match_all("/{tab=.+?}|{\/tabs}/", $row->text, $matches, PREG_PATTERN_ORDER) > 0) {
					foreach ($matches[0] as $match) {
						if($tabs[$tabscount]==1) {
							$match = str_replace("{tab=", "", $match);
							$match = str_replace("}", "", $match);
							$row->text = str_replace( "{tab=".$match."}", "
		<div class=\"jwts_tabber\" id=\"jwts_tab".$tabid."\"><div class=\"jwts_tabbertab\" title=\"".$match."\"><h2><a href=\"javascript:void(null);\" name=\"advtab\">".$match."</a></h2>", $row->text );        
							$tabid++;
						} elseif($tabs[$tabscount]==2) {
							$match = str_replace("{tab=", "", $match);
							$match = str_replace("}", "", $match);
							$row->text = str_replace( "{tab=".$match."}", "</div><div class=\"jwts_tabbertab\" title=\"".$match."\"><h2><a href=\"javascript:void(null);\" name=\"advtab\">".$match."</a></h2>", $row->text );
						} elseif($tabs[$tabscount]==3) {
							$row->text = str_replace( "{/tabs}", "</div></div><div class=\"jwts_clr\"></div>", $row->text );
						}
						$tabscount++;
					}
				}
			} else {
				if (preg_match_all("/{tab=.+?}/", $row->text, $matches, PREG_PATTERN_ORDER) > 0) {
					foreach ($matches[0] as $match) {
						$match = str_replace("{tab=", "", $match);
						$match = str_replace("}", "", $match);
						$row->text = str_replace( "{tab=".$match."}", "</div><div><h3>".$match."</h3>", $row->text );
						$row->text = str_replace( "{/tabs}", "", $row->text );
					}
				}
			}
		} // enable_tabs
		// End Tabs Replacement

		// Start Slides Replacement
		if($enable_slides) {
			if(!$_REQUEST['print'] && $_REQUEST['format']!="pdf") {
				if (preg_match_all("/{slide=.+?}/", $row->text, $matches, PREG_PATTERN_ORDER) > 0) {
					foreach ($matches[0] as $match) {
						$match = str_replace("{slide=", "", $match);
						$match = str_replace("}", "", $match);
						$row->text = str_replace( "{slide=".$match."}", "<div class=\"jwts_title\"><div class=\"jwts_title_left\"><a href=\"javascript:void(null);\" title=\"Click to open!\" class=\"jwts_title_text\">".$match."</a></div></div><div class=\"jwts_slidewrapper\"><div>", $row->text );
						$row->text = str_replace( "{/slide}", "</div></div>", $row->text );
					}
				}
			} else {
				if (preg_match_all("/{slide=.+?}/", $row->text, $matches, PREG_PATTERN_ORDER) > 0) {
					foreach ($matches[0] as $match) {
						$match = str_replace("{slide=", "", $match);
						$match = str_replace("}", "", $match);
						$row->text = str_replace( "{slide=".$match."}", "<h3>&nbsp;".$match."</h3><div>", $row->text );
						$row->text = str_replace( "{/slide}", "</div>", $row->text );
					}
				}
			}
		}
		// End Slides Replacement

	} // onPrepareContent

} // class

?>