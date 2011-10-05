<?php
/**
 * @version		$Id: jvideo_search.php 1 2008-09-09 12:06:06 Infinovation, LLC $
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$mainframe->registerEvent( 'onSearch', 'plgSearchJVideo_Search' );
$mainframe->registerEvent( 'onSearchAreas', 'plgSearchJVideo_SearchAreas' );

JPlugin::loadLanguage( 'plg_search_jvideo_search' );

/**
 * @return array An array of search areas
 */
function &plgSearchJVideo_SearchAreas()
{
	static $areas = array(
		'jvideo' => 'JVideo'
	);
	return $areas;
}

/**
 * JVideo Search Method
 *
 * The sql must return the following fields that are
 * used in a common display routine: href, title, section, created, text,
 * browsernav
 * @param string Target search string
 * @param string mathcing option, exact|any|all
 * @param string ordering option, newest|oldest|popular|alpha|category
 * @param mixed An array if restricted to areas, null if search all
 */
function plgSearchJVideo_Search( $text, $phrase='', $ordering='', $areas=null )
{
	$db		=& JFactory::getDBO();
	$user	=& JFactory::getUser();
	$searchText = $text;

	require_once(JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

	if (is_array( $areas )) {
		if (!array_intersect( $areas, array_keys( plgSearchJVideo_SearchAreas() ) )) {
			return array();
		}
	}

	// load plugin params info
 	$plugin =& JPluginHelper::getPlugin('search', 'jvideo_search');
 	$pluginParams = new JParameter( $plugin->params );

	$limit = $pluginParams->def( 'search_limit', 50 );

	$text = trim( $text );
	if ( $text == '' ) {
		return array();
	}

	switch ( $ordering ) {
		case 'alpha':
			$order = 'v.video_title ASC';
			break;

		/*
		case 'category':
		case 'popular':
		case 'newest':
		case 'oldest':
		case 'featured':
		*/
		default:
			$order = 'v.hits DESC';
	}

	$text	= $db->Quote( '%'.$db->getEscaped( $text, true ).'%', false );
	
	$query = 'select require_admin_vid_appr from #__jvideo_config';
	$db->setQuery ( $query, 0, $limit );
	$require_admin = $db->loadObject();
	
	$admin_where = "";
	
	if ($require_admin->require_admin_vid_appr == '1') {
		$admin_where = ' AND v.admin_approved = 1';
	}

	$query	= 'SELECT v.video_title as title, v.video_desc AS text, date_added AS created, v.id as video_id,'
	. ' "2" AS browsernav, '
	. ' c.id, c.breadcrumb, c.category_name as ignoreme, case when breadcrumb is null '
	. ' then category_name when breadcrumb = \'\' then category_name ' 
	. ' when breadcrumb is not null then concat(breadcrumb, \' -> \', category_name) end as section '
	. ' FROM #__jvideos AS v'
	. ' LEFT JOIN #__jvideos_categories AS vc '
	. ' ON vc.video_id = v.id '
	. ' LEFT JOIN #__jvideo_categories AS c '
	. ' ON vc.category_id = c.id '
	. ' WHERE ( v.video_title LIKE '.$text
	. ' OR v.video_desc LIKE '.$text
	. ' OR v.tags LIKE '.$text.' )'
	. ' AND v.published = 1'
	. $admin_where
	. ' GROUP BY v.id'
	. ' ORDER BY '. $order
	;

	$db->setQuery( $query, 0, $limit );
	$rows = $db->loadObjectList();

	foreach($rows as $key => $row) {
		$row->href = "index.php?option=com_jvideo&view=watch&id=".$row->video_id;
	}

	return $rows;
}
?>