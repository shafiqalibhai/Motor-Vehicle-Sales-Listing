<?php
/**
 * @version		mod_placehere
 * @package		Joomla
 * @copyright	Copyright (C) 2007 Eike Pierstorff eike@diebesteallerzeiten.de
 * @license		GNU/GPL, see LICENSE.php
 *
 * 11/18/07 Line  72 Correct date routine
 * 08/03/08 Sql for section/category display, added ordering options
 * 19/07/08 fixed HTML error http://diebesteallerzeiten.de/blog/module-15/#comment-3795
 * 14/08/08 + exact ordering option 
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

require_once (JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

class modPlaceHereHelper
{
	var $access = false;
	var $catid = false;
	var $sectionid = false;
	var $slug;
	var $created;
	var $modified;
	var $title;
	var $text;
	var $readmore_text;
	var $readmore_link;	
	
	function modPlaceHereHelper() {
		
	}
	
	function getList(&$params)
	{

		global $mainframe;
		JPluginHelper::importPlugin('content');
		$limitstart	= JRequest::getVar('limitstart', 0, '', 'int');
		$dispatcher	   =& JDispatcher::getInstance();
		$db			=& JFactory::getDBO();
		$user		=& JFactory::getUser();
		$userId		= (int) $user->get('id');
		$show_front	= $params->get('show_front', 1);
		$aid		= $user->get('aid', 0);
		$count		= (int) $params->get('count', false);
		// Id of currently displayed article
		$curid		= JRequest::getVar('id', 0, '', 'int');
		$hide_current	= $params->get('hide_current', 0);
		// trim text to n characters ?
		$trim = $params->get('trim', false);
		//
		$addstring = $params->get('addstring', "");
		//Item, cat, section
		$type		= trim( $params->get('type') );
		//  ID or comma separated lists of ids
		$showbyid		= trim( $params->get('showbyid') );

		// map id to type
		$cimid = $catid = $secid = false;
		switch($type) {
	  // Items
			// Cats
	  case '3':
	  	$secid = true;
	  	if($params->get("show_section") == 1) {
	  		$params->set('section',1);
	  	}
	  	break;
	  case '2':
	  	$catid = true;
	  	if($params->get("show_category") == 1) {
	  		$params->set('category',1);
	  	}
	  	break;
	  case '1':
	  default:
	  	$cimid = true;
	  	break;
	 }

		$contentConfig = &JComponentHelper::getParams( 'com_content' );
		$access		= !$contentConfig->get('shownoauth');

		$nullDate	= $db->getNullDate();
		
		// Kenneth Crowder 05/02/08
		jimport('joomla.utilities.date');  


		$date = new JDate();
		$now = $date->toMySQL();

		// 15/08/08 moved this to the top since we need to know the ids for the ordering
		$Condition = "";
		if ($cimid)
		{
			$ids = explode( ',',  $showbyid );
			JArrayHelper::toInteger( $ids );
			$Condition = ' AND (a.id=' . implode( ' OR a.id=', $ids ) . ')';
		}

		if ($catid)
		{
			$ids = explode( ',',  $showbyid );
			JArrayHelper::toInteger( $ids );
			$Condition = ' AND (cc.id=' . implode( ' OR cc.id=', $ids ) . ')';
		}
		if ($secid)
		{
			$ids = explode( ',',  $showbyid );
			JArrayHelper::toInteger( $ids );
			$Condition = ' AND (s.id=' . implode( ' OR s.id=', $ids ) . ')';
		}


		$where		= 'a.state = 1'
		. ' AND ( a.publish_up = '.$db->Quote($nullDate).' OR a.publish_up <= '.$db->Quote($now).' )'
		. ' AND ( a.publish_down = '.$db->Quote($nullDate).' OR a.publish_down >= '.$db->Quote($now).' )'
		;

		if(	$hide_current ) {
		 $where .= " AND a.id != '" . $curid . "' ";
		}
			
		// User Filter
		switch ($params->get( 'user_id' ))
		{
			case 'by_me':
				$where .= ' AND (created_by = ' . (int) $userId . ' OR modified_by = ' . (int) $userId . ')';
				break;
			case 'not_me':
				$where .= ' AND (created_by <> ' . (int) $userId . ' AND modified_by <> ' . (int) $userId . ')';
				break;
		}

		// Ordering
		switch ($params->get( 'ordering' ))
		{
			case 'exact':
			    $ordering .= ' FIELD(a.id , ' . implode( ' ,', $ids ) . ')';
				break;			
			case 'o_dsc':
				$ordering = 'a.ordering DESC';
				break;
			case 'o_asc':
				$ordering = 'a.ordering ASC';
				break;
			case 'm_dsc':
				$ordering		= 'a.modified DESC, a.created DESC';
				break;
			case 's_asc':	
				$ordering		= 'a.sectionid ASC';
				break;
			case 's_dsc':
				$ordering		= 'a.sectionid DESC';
				break;	
			case 'cy_asc':	
				$ordering		= 'a.catid ASC, a.sectionid ASC';
				break;
			case 'cy_dsc':
				$ordering		= 'a.catid DESC, a.sectionid DESC';
				break;					
			case 'random':
				$ordering = 'RAND()';
				break;
			case 'c_dsc':
			default:
				$ordering		= 'a.created DESC';
				break;
		}
		
		switch ($params->get( 'flip_frontpage' ))
		{
		 case(1):
		  $flip = " NOT ";
		 break;
		 default:
		  $flip = "  ";
		 break;
		}
		
		// Ordering 
		switch ($params->get( 'sec_ordering' ))
		{
			case 'o_dsc':
				$ordering .= ',a.ordering DESC';
				break;
			case 'o_asc':
				$ordering .= ',a.ordering ASC';
				break;
			case 'm_dsc':
				$ordering	 .= ',a.modified DESC, a.created DESC';
				break;
			case 's_asc':	
				$ordering	 .= ',a.sectionid ASC';
				break;
			case 's_dsc':
				$ordering		.= ',a.sectionid DESC';
				break;	
			case 'cy_asc':	
				$ordering		.= ',a.catid ASC, a.sectionid ASC';
				break;
			case 'cy_dsc':
				$ordering		.= ',a.catid DESC, a.sectionid DESC';
				break;					
			case 'random':
				$ordering .= ',RAND()';
				break;
			case 'c_dsc':
				$ordering		= 'a.created DESC';
				break;
			case 'none':
			default:
			break;
		}

		// Content Items only
		// John Woelfel - +18 lines - Change query to allow for  static content items in Joomla 1.5
		// 04/04/08 Mike Bronner fixed sql to display author names
		if($cimid)
		{
			$query = 'SELECT a.*, ' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,'.
			' \'\' as catslug,'.
			' 0 as catid, \'\' as category, ' .
			' 0 as sectionid, \'\' as section' .	
			' , u.name AS author '	.						
			' FROM #__content AS a' .
			($show_front == '0' ? ' LEFT JOIN #__content_frontpage AS f ON f.content_id = a.id' : '') .
			' LEFT JOIN #__users AS u ON u.id = a.created_by '.
			' WHERE '. $where .
			($access ? ' AND a.access <= ' .(int) $aid. ' ':'').
			$Condition .
			($show_front == '0' ? ' AND f.content_id IS  ' . $flip . ' NULL ' : '').
			' ORDER BY '. $ordering;
		}
		else
		{
		// 08/03/08 Sql Error corrected by Maurice
		// http://diebesteallerzeiten.de/blog/module-for-15-alpha/#comment-2634
			$query = 'SELECT a.*, ' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug'.
			' , cc.id as catid, cc.title as category ' .
			' , s.id as sectionid, s.title as section' .
			' , u.name AS author '	.		
			' FROM #__content AS a' .
			($show_front == '0' ? ' LEFT JOIN #__content_frontpage AS f ON f.content_id = a.id' : '') .
			' INNER JOIN #__categories AS cc ON cc.id = a.catid' .
			' INNER JOIN #__sections AS s ON s.id = a.sectionid' .
			' LEFT JOIN #__users AS u ON u.id = a.created_by '.
			' WHERE '. $where .' AND s.id > 0' .
			($access ? ' AND a.access <= ' .(int) $aid. ' AND cc.access <= ' .(int) $aid. ' AND s.access <= ' .(int) $aid : '').
			$Condition .
			($show_front == '0' ? ' AND f.content_id IS  ' . $flip . ' NULL ' : '').
			' AND s.published = 1' .
			' AND cc.published = 1' .
			' ORDER BY '. $ordering;

		}
		
		
		
		if($count) {
		 $db->setQuery($query, 0, $count);
		} else {
		 $db->setQuery($query);
		}
		$rows = $db->loadObjectList();
		
		// there is no result
		if(count($rows) == 0 && $params->get( 'show_notfoundtext' )) {		
			// a dummy object with lots of empty properties so the template won't throw notices
			$rows[0] = new modPlaceHereHelper();	
			$rows[0]->event = new stdClass();
			$rows[0]->event->afterDisplayTitle = NULL;
			$rows[0]->event->beforeDisplayContent = NULL;
			$rows[0]->event->afterDisplayContent = NULL;	
			
			// since there is no actual article we set the icon to false
			$params->set('show_pdf_icon',false);
			$params->set('show_print_icon',false);
			$params->set('show_email_icon',false);
					
		    $rows[0]->title = 	$params->get('notfoundtitle','');
			$rows[0]->text = 	$params->get('notfoundtext','');
			return $rows;				
		}

		for($i=0;$i<count($rows);$i++) {
		 $rows[$i]->readmore_link = "";
		 $rows[$i]->readmore_text = "";
		 
		 $rows[$i]->url = ContentHelperRoute::getArticleRoute($rows[$i]->slug, $rows[$i]->catslug, $rows[$i]->sectionid);
		 if($params->get('link_to_cat', 0) == 1) {			
			$rows[$i]->url = ContentHelperRoute::getCategoryRoute($rows[$i]->catid, $rows[$i]->catslug);		 
		 	
		 }
		 $rows[$i]->parameters	= new JParameter( $rows[$i]->attribs );	      	
		 
		 if($params->get( 'show_intro' ) && $params->get( 'use_metadesc' , 'no' ) == 'no' ) {   
		 	$rows[$i]->text = $rows[$i]->introtext;	
			$rows[$i]->readmore_link = $rows[$i]->url;		
		  	if($rows[$i]->fulltext) {
				$rows[$i]->readmore_text = $rows[$i]->parameters->get('readmore') ? $rows[$i]->parameters->get('readmore') : $params->get( 'readmoretext' );			
					   
		  	}		  	
		 } else if($params->get( 'use_metadesc' , 'no' ) == 'yes') {
		 	// we set introtext as default, if there actually is a metadesc we override this
			$rows[$i]->text = $rows[$i]->introtext;
			if(!empty($rows[$i]->metadesc))
				$rows[$i]->text = $rows[$i]->metadesc;
		 } else {		 	
		  	$rows[$i]->text = $rows[$i]->introtext . $rows[$i]->fulltext;
		 }
		 
		 if($params->get('striptags', false) == true) {
		 	$rows[$i]->text = strip_tags($rows[$i]->text);
		 }
		 
		 if($trim) {
		 	$rows[$i]->readmore_link = $rows[$i]->url;	
			$rows[$i]->readmore_text = $rows[$i]->parameters->get('readmore') ? $rows[$i]->parameters->get('readmore') : $params->get( 'readmoretext' );					
		 	$rows[$i]->text = mk_html_substr($rows[$i]->text,$trim,$addstring);
		 }
		 
		 $plugins	= $params->get('plugins', 0);
		 switch($plugins) {
			 case(1):
			 	$rows[$i]->event = new stdClass();
			 	$rows[$i]->event->afterDisplayTitle = NULL;
			 	$rows[$i]->event->beforeDisplayContent = NULL;
				$rows[$i]->event->afterDisplayContent = NULL;			 	
			 break;
			 case(0):
			 default:
		    	$rows[$i]->event = new stdClass();
		    	$results = $dispatcher->trigger('onPrepareContent', array (& $rows[$i], & $rows[$i]->parameters,$limitstart));
		    	$results = $dispatcher->trigger('onAfterDisplayTitle', array ($rows[$i], & $rows[$i]->parameters,$limitstart));
		    	$rows[$i]->event->afterDisplayTitle = trim(implode("\n", $results));
		    	$results = $dispatcher->trigger('onBeforeDisplayContent', array (& $rows[$i], & $rows[$i]->parameters,$limitstart));
		    	$rows[$i]->event->beforeDisplayContent = trim(implode("\n", $results));
		    	$results = $dispatcher->trigger('onAfterDisplayContent', array (& $rows[$i], & $rows[$i]->parameters,$limitstart));
		    	$rows[$i]->event->afterDisplayContent = trim(implode("\n", $results));
		   break;
		 }	
		 	

		}
	return $rows;
	}
}


/*
 * This function by Michael Kelly http://www.conurestudios.com
 * 
 * mk_html_substr($string, $length, $addstring="")
 * @param string $string
 * @param int	 $length trim to $length characters
 * @params $addstring	characters to be displayed after trimmed string
 * 
 */
 
function mk_html_substr($string, $length, $addstring="") {
	$addstring = " " . $addstring;
	if (strlen($string) > $length) {
		if( !empty( $string ) && $length>0 ) {
			$isText = true;
			$ret = "";
			$i = 0;
			$currentChar = "";
			$lastSpacePosition = -1;
			$lastChar = "";
			$tagsArray = array();
			$currentTag = "";
			$tagLevel = 0;
			$noTagLength = strlen( strip_tags( $string ) );

			// Parser loop
			for( $j=0; $j<strlen( $string ); $j++ ) {
				$currentChar = substr( $string, $j, 1 );
				$ret .= $currentChar;
				if( $currentChar == "<") $isText = false;
				if( $isText ) {
					// Memorize last space position
					if( $currentChar == " " ) { $lastSpacePosition = $j; }
					else { $lastChar = $currentChar; }
					$i++;
				}else{
					$currentTag .= $currentChar;
				}
				// Greater than event
				if( $currentChar == ">" ) {
					$isText = true;
					// Opening tag handler
					if( ( strpos( $currentTag, "<" ) !== FALSE ) && ( strpos( $currentTag, "/>" ) === FALSE ) && ( strpos( $currentTag, "</") === FALSE ) ) {
						// Tag has attribute(s)
						if( strpos( $currentTag, " " ) !== FALSE ) {
							$currentTag = substr( $currentTag, 1, strpos( $currentTag, " " ) - 1 );
						} else {
							// Tag doesn't have attribute(s)
							$currentTag = substr( $currentTag, 1, -1 );
						}
						array_push( $tagsArray, $currentTag );
					} else if( strpos( $currentTag, "</" ) !== FALSE ) {
						array_pop( $tagsArray );
					}
					$currentTag = "";
				}
				if( $i >= $length) {
					break;
				}
			}
			// Cut HTML string at last space position
			if( $length < $noTagLength ) {
				if( $lastSpacePosition != -1 ) {
					$ret = substr( $string, 0, $lastSpacePosition );
				} else {
					$ret = substr( $string, $j );
				}
			}
			// Close broken XHTML elements
			while( sizeof( $tagsArray ) != 0 ) {
				$aTag = array_pop( $tagsArray );
				$ret .= "</" . $aTag . ">\n";
			}
		} else {
			$ret = "";
		}
		// only add string if text was cut
		if ( strlen($string) > $length ) {
			return( $ret.$addstring );
		} else {
			return ( $res );
		}
	} else {
		return ( $string );
	}
}
