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

function morfeoshowBuildRoute(&$query) {
	$segments = array();
	if (isset($query['task']))	{
		$segments[] = $query['task'];
		unset($query['task']);
	}
	if(isset($query['gallery']))	{
		$segments[] = $query['gallery'];
		unset($query['gallery']);
	}
	return $segments;
}

function morfeoshowParseRoute($segments) {
	$vars = array();
	$vars['task'] 		= $segments[0];
	$vars['gallery'] 	= $segments[1];
	return $vars;
}

?>