<?php
/**
* YOOgallery Joomla! Plugin
*
* @author    yootheme.com
* @copyright Copyright (C) 2008 YOOtheme Ltd. & Co. KG. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

if (!class_exists('YOOGallery')) {
	require_once(dirname(__FILE__).'/yoo_gallery/gallery.php');
}

class plgContentYOO_gallery extends JPlugin {
    
	// plugin line params
	var $parameter;

	function plgContentYOO_gallery(&$subject, $params) {
		parent::__construct($subject, $params);
	}
	
	function onPrepareContent(&$article, &$params, $limitstart) {

		// simple performance check to determine whether bot should process further
		if (JString::strpos($article->text, 'yoogallery') === false) {
			return true;
		}

		// get plugin info
		$plugin       =& JPluginHelper::getPlugin('content', 'yoo_gallery');
	 	$pluginParams = new JParameter($plugin->params);

	 	// expression to search for
		$regex = "#{yoogallery\s*(.*?)}#s";

		// check whether plugin has been unpublished
		if (!$pluginParams->get('enabled', 1)) {
			$article->text = preg_replace($regex, '', $article->text);
			return true;
		}

		// perform the replacement
		preg_match_all($regex, $article->text, $matches);
	
	 	if ($count = count($matches[0])) {
	 		$this->replace($article, $matches, $count, $regex, $pluginParams);
		}
    }

	function replace(&$article, &$matches, $count, $regex, $pluginParams) {
		for ($i = 0; $i < $count; $i++) {

			// set line params
		 	$this->setParams($matches[1][$i], array('width' => null, 'height' => null));

			// set default thumbnail size, if no sizes defined
			if (!$this->parameter['width'] && !$this->parameter['height']) {
				$this->parameter['width']  = $pluginParams->get('width', 100);
				$this->parameter['height'] = null;
			}

			// set gallery params
		 	$params = new JParameter('');
			$params->bind($pluginParams->toArray());
			$params->bind($this->parameter);
			$params->set('cfg_path', 'plugins/content/yoo_gallery/');
			$params->set('cfg_juri', JURI::base());
			$params->set('cfg_jroot', JPATH_ROOT);

			// render gallery
			$gallery =& new YOOGallery($params);
			$replace =  $gallery->render();

			// replace
			$article->text = str_replace($matches[0][$i], $replace, $article->text);
	 	}
	}

	function setParams($param_line, $default = array()) {
		$matches = array();
		$this->parameter = $default;
		
		preg_match_all("#(\w+)=\[(.*?)\]#s", $param_line, $matches);
	    for ($i = 0; $i < count($matches[1]); $i++) {
			$this->parameter[strtolower($matches[1][$i])] = $matches[2][$i];
	    }
	}

}