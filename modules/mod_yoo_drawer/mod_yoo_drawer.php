<?php
/**
* YOOdrawer Joomla! Module
*
* @author    yootheme.com
* @copyright Copyright (C) 2007 YOOtheme Ltd. & Co. KG. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

global $mainframe;

// count instances
if (!isset($GLOBALS['yoo_drawers'])) {
	$GLOBALS['yoo_drawers'] = 1;
} else {
	$GLOBALS['yoo_drawers']++;
}

// include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

// disable edit ability icon
$access = new stdClass();
$access->canEdit	= 0;
$access->canEditOwn = 0;
$access->canPublish = 0;

$list = modYOOdrawerHelper::getList($params, $access);

// check if any results returned
$items = count($list);
if (!$items) {
	return;
}

// init vars
$style           = $params->get('style', 'default-v');
$module_height   = $params->get('module_height', '200');
$item_size       = $params->get('item_size', '220');
$item_minimized  = $params->get('item_minimized', '90');
$title           = $params->get('title', 'Title');
$module_base     = JURI::base() . 'modules/mod_yoo_drawer/';

// css parameters
$drawer_id       = 'yoo-drawer-' . $GLOBALS['yoo_drawers'];

switch ($style) {
	// horizontal
	case "photo-h":
		$layout              = 'horizontal';
		$item_width          = $item_size;
		$item_height         = $module_height;
		$module_width        = $item_size + ($items-1) * $item_minimized;
		$css_item_width      = 'width: ' . $item_width . 'px;';
		$css_item_height     = 'height: ' . $item_height . 'px;';
		$css_module_width    = 'width: ' . $module_width . 'px;';
		$css_module_height   = 'height: ' . $module_height . 'px;';
		// js parameters
		$item_shift          = $item_size - $item_minimized + 10;
		break;

	// vertical
	case "photo-v":
		$layout              = 'vertical';
		$item_height         = $item_size;
		$module_height       = $item_size + ($items-1) * $item_minimized;
		$css_item_height     = 'height: ' . $item_height . 'px;';
		$css_module_height   = 'height: ' . $module_height . 'px;';
		// js parameters
		$item_shift          = $item_size - $item_minimized + 10;
		break;
		
	case "default-v":
	default:
		$layout              = 'vertical';
		$item_height         = $item_size - 10;
		$module_height       = $item_size + ($items-1) * $item_minimized;
		$css_item_height     = 'height: ' . $item_height . 'px;';
		$css_module_height   = 'height: ' . $module_height . 'px;';
		// js parameters
		$item_shift          = $item_size - $item_minimized - 10;
}


$javascript      = "new YOOdrawer('" . $drawer_id . "', '#" . $drawer_id . " .item', { layout: '" . $layout . "', shiftSize: " . $item_shift . " });";

switch ($style) {
	case "photo-h":
   		require(JModuleHelper::getLayoutPath('mod_yoo_drawer', 'photo-h'));
   		break;
	case "photo-v":
   		require(JModuleHelper::getLayoutPath('mod_yoo_drawer', 'photo-v'));
   		break;
	default:
    	require(JModuleHelper::getLayoutPath('mod_yoo_drawer', 'default-v'));
}

$document =& JFactory::getDocument();
$document->addStyleSheet($module_base . 'mod_yoo_drawer.css.php');
$document->addScript($module_base . 'mod_yoo_drawer.js');
echo "<script type=\"text/javascript\">\n// <!--\nwindow.addEvent('domready', function(){ $javascript });\n// -->\n</script>\n";