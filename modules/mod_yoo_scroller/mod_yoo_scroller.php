<?php
/**
* YOOscroller Joomla! Module
*
* @author    yootheme.com
* @copyright Copyright (C) 2007 YOOtheme Ltd. & Co. KG. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

global $mainframe;

// count instances
if (!isset($GLOBALS['yoo_scrollers'])) {
	$GLOBALS['yoo_scrollers'] = 1;
} else {
	$GLOBALS['yoo_scrollers']++;
}

// include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

// disable edit ability icon
$access = new stdClass();
$access->canEdit	= 0;
$access->canEditOwn = 0;
$access->canPublish = 0;

$list = modYOOscrollerHelper::getList($params, $access);

// check if any results returned
$items = count($list);
if (!$items) {
	return;
}

// init vars
$style          = $params->get('style', 'default-v');
$module_width   = $params->get('module_width', 400);
$module_height  = $params->get('module_height', 200);
$slide_size     = $params->get('slide_size', 200);
$slide_interval = $params->get('slide_interval', 3000);
$scrollbar      = 1; /* 0: hide, 1: show, currently only show supported*/
$autoplay       = $params->get('autoplay', 1) ? 'true' : 'false';
$module_base    = JURI::base() . 'modules/mod_yoo_scroller/';

// css parameters
$scroller_id           = 'yoo-scroller-' . $GLOBALS['yoo_scrollers'];

switch ($style) {
	case 'basic-h':
		$mode              = 'horizontal';
		$scrollarea_size   = ($scrollbar) ? 16 : 0;
		$scrollarea_width  = $module_width;
		$scrollarea_height = $scrollarea_size - 1;
		$scrollbar_width   = $scrollarea_width - 30;
		$scrollbar_height  = $scrollarea_height;
		$panel_width       = $module_width;
		$panel_height      = $module_height - $scrollarea_size;
		$slide_width       = $slide_size < $panel_width ? $slide_size : $panel_width;
		$knob_offset       = 0;
		break;
	case 'basic-v':
	    $mode              = 'vertical';
		$scrollarea_size   = ($scrollbar) ? 16 : 0;
		$scrollarea_width  = $scrollarea_size - 1;
		$scrollarea_height = $module_height;
		$scrollbar_width   = $scrollarea_width;
		$scrollbar_height  = $scrollarea_height - 30;
		$panel_width       = $module_width - $scrollarea_size;
		$panel_height      = $module_height;
		$slide_width       = $panel_width;
		$slide_height      = $slide_size;
		$knob_offset       = 0;
		break;
	case 'default-v':
	case 'blank-v':	
	    $mode              = 'vertical';
		$scrollarea_size   = ($scrollbar) ? 18 : 0;
		$scrollarea_width  = $scrollarea_size;
		$scrollarea_height = $module_height - 40;
		$scrollbar_width   = $scrollarea_width;
		$scrollbar_height  = $scrollarea_height - 42;
		$panel_width       = $module_width - $scrollarea_size - 10;
		$panel_height      = $module_height;
		$slide_width       = $panel_width;
		$slide_height      = $slide_size;
		$knob_offset       = -20;
		break;
	default:
		$mode              = 'horizontal';
		$scrollarea_size   = ($scrollbar) ? 18 : 0;
		$scrollarea_width  = $module_width - 40;
		$scrollarea_height = $scrollarea_size;
		$scrollbar_width   = $scrollarea_width - 42;
		$scrollbar_height  = $scrollarea_height;
		$panel_width       = $module_width;
		$panel_height      = $module_height - $scrollarea_size - 10;
		$slide_width       = $slide_size < $panel_width ? $slide_size : $panel_width;
		$knob_offset       = 0;
}

$css_scrollarea_width  = 'width: ' . $scrollarea_width . 'px;';
$css_scrollarea_height = 'height: ' . $scrollarea_height . 'px;';
$css_scrollbar_width   = 'width: ' . $scrollbar_width . 'px;';
$css_scrollbar_height  = 'height: ' . $scrollbar_height . 'px;';
$css_slide_width       = 'width: ' . $slide_width . 'px;';
if ($mode == "vertical") $css_slide_height = 'height: ' . $slide_height . 'px;'; /* only needed for vertical layout */
$css_module_width      = 'width: ' . $module_width . 'px;';
$css_module_height     = 'height: ' . $module_height . 'px;';
$css_panel_width       = 'width: ' . $panel_width . 'px;';
$css_panel_height      = 'height: ' . $panel_height . 'px;';
$css_total_panel_width = 'width: ' . ($slide_width * $items) . 'px;'; /* only needed for horizontal layout */

// js parameters
$javascript            = "new YOOscroller('" . $scroller_id . "', { mode: '" . $mode . "', slideInterval: " . $slide_interval . ", autoplay: " . $autoplay . ", knobOffset: " . $knob_offset . " });";

switch ($style) {
	case 'basic-h':
		require(JModuleHelper::getLayoutPath('mod_yoo_scroller', 'basic-h'));
		break;
	case 'basic-v':
		require(JModuleHelper::getLayoutPath('mod_yoo_scroller', 'basic-v'));
		break;
	case 'blank-h':
		require(JModuleHelper::getLayoutPath('mod_yoo_scroller', 'blank-h'));
		break;
	case 'blank-v':
		require(JModuleHelper::getLayoutPath('mod_yoo_scroller', 'blank-v'));
		break;
	case 'default-v':
		require(JModuleHelper::getLayoutPath('mod_yoo_scroller', 'default-v'));
		break;
	default:
		require(JModuleHelper::getLayoutPath('mod_yoo_scroller', 'default-h'));
}

$document =& JFactory::getDocument();
$document->addStyleSheet($module_base . 'mod_yoo_scroller.css.php');
$document->addScript($module_base . 'mod_yoo_scroller.js');
echo "<script type=\"text/javascript\">\n// <!--\nwindow.addEvent('domready', function(){ $javascript });\n// -->\n</script>\n";