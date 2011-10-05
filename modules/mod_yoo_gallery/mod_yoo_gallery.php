<?php
/**
* YOOgallery Joomla! Module
*
* @author    yootheme.com
* @copyright Copyright (C) 2008 YOOtheme. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

if (!class_exists('YOOGallery')) {
	require_once(dirname(__FILE__).'/yoo_gallery/gallery.php');
}

// set gallery params
$params->set('cfg_path', 'modules/mod_yoo_gallery/yoo_gallery/');
$params->set('cfg_juri', JURI::base());
$params->set('cfg_jroot', JPATH_ROOT);

// render gallery
$gallery =& new YOOGallery($params);
echo $gallery->render();