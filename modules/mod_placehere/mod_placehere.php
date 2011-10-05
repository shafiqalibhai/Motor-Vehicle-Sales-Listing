<?php
/**
* @version		mod_placehere
* @package		Joomla
* @copyright	Copyright (C) 2007 Eike Pierstorff eike@diebesteallerzeiten.de
* @license		GNU/GPL, see LICENSE.php
*
* File last changed 17/07/08
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
$template = $params->get('template','default');
$mode = $params->get("outputmode",1);

// it would be pointless to have beez template and table based columns
if($template == "beez" && $mode == 1) {
	$mode = 2;
}

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');
require_once (dirname(__FILE__).DS.'helperhtml.php');
$list = modPlaceHereHelper::getList($params);
require(JModuleHelper::getLayoutPath('mod_placehere',$template));

switch($mode) {
 case(3):
 echo implode("\n",$contentarray);
 break;
 case(2):
  modPlaceHereHTML::buildDivsfromArray($contentarray,$params); 
 break;
 case(1):
 default:
  modPlaceHereHTML::buildTablefromArray($contentarray,$params);
 break;
}




