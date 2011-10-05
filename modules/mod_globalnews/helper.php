<?php
/**
* @version		$Id: helper.php 2008 Vargas $
* @package		Joomla
* @copyright	Copyright (C) 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

require_once (JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

class modGlobalNewsHelper {

function getGN_Chars( &$params, $link, $str ) {

     $more   = $params->get('readmore', 1);
     $limit  = trim( $params->get('limittext', '150') );
	 
	 $str = trim( strip_tags( $str ) );
	 $str = preg_replace( "/[\n\t\r]+/",' ',$str );
	 $str = preg_replace('/{(\w+)[^}]*}.*{\/\1}|{(\w+)[^}]*}/Us','',$str);
	 
	 if ( strlen( $str ) > $limit) {
          $str   = substr( $str, 0, $limit );
          $space = strrpos( $str, ' ' );
		  $str   = substr( $str, 0, $space ). '...';
	 }
	 
	 if ( $more == 1 && $link != '' ) {
		  $str  .= JHTML::_('link', $link, JText::_('Read More...'));
	 }
	 
	 return $str;
}

function setGN_Tags( $str ) {

	switch ( $str ) 
	{
	   case 2 :
	      $tags = array('<strong>','</strong>');
	      break;
	   case 3 :
	      $tags = array('<u>','</u>');
	      break;
	   case 4 :
	      $tags = array('<strong><u>','</u></strong>');
	      break;
	   case 5 :
	      $tags = array('<h1>','</h1>');
	      break;
	   case 6 :
	      $tags = array('<h2>','</h2>');
	      break;
	   case 7 :
	      $tags = array('<h3>','</h3>');
	      break;
	   case 8 :
	      $tags = array('<h4>','</h4>');
	      break;
	   case 9 :
	      $tags = array('<h5>','</h5>');
	      break;
	   case 10 :
	      $tags = array('<h6>','</h6>');
	      break;
	   case 11 :
	      $tags = array('<p>','</p>');
	      break;
	   } 
	return $tags;
}

function getGN_Img( &$params, $link, $img, $pfx ) {

	if(($size = getimagesize($img)) === FALSE) {
		return false;
	}

	$image 	    = $params->get( $pfx.'_img', 0 );
	$margin 	= $params->get( $pfx.'_img_margin', '3px' );
	$width 		= (int)$params->get( $pfx.'_img_width', '' );
	$height 	= (int)$params->get( $pfx.'_img_height', '' );
	
	$coeff = $size[0]/$size[1];
		
	if ( $width == '') {
	    if ( $height ) {
		    $width = $coeff * $height;
		} else {
		    ($size[0] > 100 ? $width = 100 : $width = $size[0]);
		}
	}
	
	if ( $height == '' && $width ) {
	    	$height = (int) $width / $coeff;
	}
	
	if ( $image < 3 )  :
		   $style = 'float:left;';
		   if ( $pfx == 'cat' ) {
		        $style .= 'margin-right:' . $margin . ';';
		   } else {
		        $style .= 'margin:' . $margin . ';';
		   }
	endif;
	
	if ( $image > 2 )  :
		   $style = 'float:right;';
		   if ( $pfx == 'cat' ) {
		        $style .= 'margin-left:' . $margin . ';';
		   } else {
		        $style .= 'margin:' . $margin . ';';
		   }
	endif;
				
    return ( $link ? '<a href="'.$link.'">' : '' )
		  .JHTML::_('image', $img, '', array('width' => $width, 'height' => $height, 'border' => 0, 'style' =>$style ))
		  .( $link ? '</a>' : '' );
}

function renderGN_Content( &$params, $item ) {

     $show_title  = $params->get('show_title', 1 );
     $show_text   = $params->get('show_text', 1 );
     $show_image  = $params->get('item_img', 0 );
     $show_date   = $params->get('show_date', 0 );
	 $html = '';
	 
	 if ( $show_date == 2 ) :
	      $format = $params->get('date_format', '' );
	      $html .= '<div class="small">'.JHTML::_('date',  $item->date,  $format ).'</div>';
	 endif;
	 
	 if ( ( $show_image == 2 || $show_image == 4 ) && $item->image ) :
	      $html .= $item->image;
	 endif;
	 		  	
	 if ( $show_title != 0 ) {
	      $html .= $item->title;
	      if ( $show_title < 5 && $show_text == 1 ) {
	           $html .= '<br />';
	      }
	 }
	 		  
	 if ( $show_date == 1 ) :
		  $format = $params->get('date_format', '');
	      $html .= '<div class="small">'.JHTML::_('date',  $item->date,  $format ).'</div>';
	 endif;
		  	
	 if ( ( $show_image == 1  || $show_image == 3 ) && $item->image ) :
	       $html .= $item->image;
	 endif;
		  
	 if ( $show_date == 3 ) :
	      $format = $params->get('date_format', '');
	      $html .= '<div class="small">'.JHTML::_('date',  $item->date,  $format ).'</div>';
	 endif;
	 
     if ( $show_text != 0 ) :
		  $html .= $item->text;
	 endif;
		  	 
	 return $html;
}

	function getGN_Cats(&$params)
	{
		global $the_id;

		$db			=& JFactory::getDBO();
		$user		=& JFactory::getUser();
		$userId		= (int) $user->get('id');

		$catlist	= trim( $params->get('catids', '') );
		$seclist    = trim( $params->get('secids', '') ); 
		$catexc		= trim( $params->get('catexc', '') );
		$secexc		= trim( $params->get('secexc', '') );
		$curcat     = $params->get('curcat', 0);
		$current    = $params->get('current', 1);
		$show_cat   = $params->get('show_cat', 1);
		$cat_title  = $params->get('cat_title', 1);
		$cat_img    = $params->get( 'cat_img', 0);
		$global     = $params->get('global', 's');
		$filter     = $params->get('filter', 0);
		$aid		= $user->get('aid', 0);

		$contentConfig = &JComponentHelper::getParams( 'com_content' );
		$access		= !$contentConfig->get('shownoauth');
		
		$the_id = $id = null;

		switch ($params->get( 'cat_order', 1))
		{
			case '0':
				$ordering		= 'rand()';
				break;
			case '1':
				$ordering		= $global.'.id ASC';
				break;
			case '2':
				$ordering		= $global.'.title ASC';
				break;
			case '3':
			default:
				$ordering		= $global.'.ordering ASC';
				break;
		}
		
        if ( $seclist ) {
	        $secids = explode( ',', $seclist );
	        JArrayHelper::toInteger( $secids );
	        $condition = ' AND (s.id=' . implode( ' OR s.id=', $secids ) . ')';
        } elseif ( $secexc ) {
	        $secids = explode( ',', $secexc );
	        JArrayHelper::toInteger( $secids );
	        $condition = ' AND (s.id!=' . implode( ' AND s.id!=', $secids ) . ')';
        } else {
	        $condition = '';
        }
		
        if ( $filter != 0 || $curcat == 1 || $current != 1 ) :
		
		     $option	= JRequest::getCmd('option');
		     $view		= JRequest::getCmd('view');
			 
		     $temp		= JRequest::getString('id');
		     $temp		= explode(':', $temp);
		     $id		= $temp[0];
		
             if ( $option == 'com_content' && $view == 'section' ) {
				  if ( $filter != 0 ) {
	                   $condition .= ' AND s.id='. $id;
				  }
             }
			 
             if ( $option == 'com_content' && $view == 'category' ) {
				  if ( $filter != 0 ) {
		          $query      = 'SELECT section from #__categories WHERE id='. $id;
	              $db->setQuery($query);
		          $condition .= ' AND s.id='. $db->loadResult();
				  }
             }
				   
             if ( $option == 'com_content' && $view == 'article' && $id ) {
                  $the_id     = $id;
				  if ( $filter != 0 ) {
		          $query      = 'select sectionid from #__content where id='. $the_id;
		          $db->setQuery($query);
		          $condition .= ' AND s.id='. $db->loadResult();
				  }
             }

        endif;

        if ( $global == 'c' ) {
		
            if ( $catlist ) {
	            $catids = explode( ',', $catlist );
	            JArrayHelper::toInteger( $catids );
	            $condition .= ' AND (c.id=' . implode( ' OR c.id=', $catids ) . ')';
            } elseif ( $catexc ) {
	            $catids = explode( ',', $catexc );
	            JArrayHelper::toInteger( $catids );
	            $condition .= ' AND (c.id!=' . implode( ' AND c.id!=', $catids ) . ')';
            }
			
		    $query = 'SELECT c.*, ' .
			' CASE WHEN CHAR_LENGTH(c.alias) THEN CONCAT_WS(":", c.id, c.alias) ELSE c.id END as slug' .
			' FROM #__categories AS c' .
			' INNER JOIN #__sections AS s ON s.id = c.section' .
			' WHERE s.scope = "content"' .
			($access ? ' AND c.access <= ' .(int) $aid : '').
			($condition!='' ? $condition : '').
			' AND c.published = 1' .
			' ORDER BY c.section, '. $ordering;
			
        } else {
		
		    $query = 'SELECT s.* ' .
			' FROM #__sections AS s' .
			' WHERE s.scope = "content"' .
			($access ? ' AND s.access <= ' .(int) $aid : '').
			($condition!='' ? $condition : '').
			' AND s.published = 1' .
			' ORDER BY '. $ordering;
		}
			
		$db->setQuery($query);
		$rows = $db->loadObjectList();

		$i		= 0;
		$cats	= array();
		
		foreach ( $rows as $row ) {
				
		    if ( $global == 's')  {
			$cats[$i]->link = JRoute::_(ContentHelperRoute::getSectionRoute( $row->id ));
			$cats[$i]->cond = ' AND a.sectionid = '.$row->id;
			    if ( $catlist ) {
	            $catids = explode( ',', $catlist );
	            JArrayHelper::toInteger( $catids );
				$cats[$i]->cond .= ' AND (a.catid=' . implode(' OR a.catid=', $catids ) . ')';
			    } elseif ( $catexc ) {
	            $catids = explode( ',', $catexc );
	            JArrayHelper::toInteger( $catids );
				$cats[$i]->cond .= ' AND (a.catid!= ' . implode(' AND a.catid!=', $catids ) . ')';
			    }
            } else {
			$cats[$i]->link = JRoute::_(ContentHelperRoute::getCategoryRoute( $row->slug, $row->section ));
			$cats[$i]->cond = ' AND a.catid = '.$row->id;
            }
				
	    $cats[$i]->title = '';
	    $cats[$i]->image = '';
			
		if ( $cat_img != 0 && $row->image ) {
		     $config 	= JComponentHelper::getParams ('com_media');
			 $folder 	= $config->get('image_path');
			 $cats[$i]->image .= modGlobalNewsHelper::getGN_Img( $params, $cats[$i]->link, $folder .'/'. $row->image, 'cat' );
        }
		
	    if ( $id == $row->id && $curcat == 1 ) {
			 $cats[$i]->link = '';
		}
		
	    if ( $cat_title != 0 ) {
		     if ( $show_cat == 2 ) {
		          if ( $cat_title == 1 ) {
			           $cats[$i]->title .= $row->title;
		          } else {
			           $tags = modGlobalNewsHelper::setGN_Tags( $cat_title );
			           $cats[$i]->title .= $tags[0] .  $row->title . $tags[1];
		          }
			 
		     } else {
		          if ( $cat_title == 1 ) {
			           $cats[$i]->title .= ( $cats[$i]->link ? '<a href="' . $cats[$i]->link. '">' : '' ) . $row->title . ( $cats[$i]->link ? '</a>' : '' );
		           } else {
			            $tags = modGlobalNewsHelper::setGN_Tags( $cat_title );
			            $cats[$i]->title .= ( $cat_title > 4 ? $tags[0] : '' ) . ( $cats[$i]->link ? '<a href="' . $cats[$i]->link. '">' : '' ) . ( $cat_title < 5 ? $tags[0] : '' ) .  $row->title . ( $cat_title < 5 ? $tags[1] : '' ) . ( $cats[$i]->link ? '</a>' : '' ) . ( $cat_title > 4 ? $tags[1] : '' );
		              }
		          }
		     }
		
			$i++;
		}

		return $cats;
	}

	function getGN_List(&$params,$listCondition)
	{
		global $the_id;

		$db			=& JFactory::getDBO();
		$user		=& JFactory::getUser();
		$userId		= (int) $user->get('id');

		$count		= trim( $params->get('count', 5) );
		$current    = trim( $params->get('current', 1) );
		$layout     = $params->get('layout', 'list');
		$show_text  = $params->get('show_text', 1);
		$show_title = $params->get('show_title', 1);
		$item_img   = $params->get( 'item_img', 0);
		$show_front	= $params->get('show_front', 1);
		$aid		= $user->get('aid', 0);

		$contentConfig = &JComponentHelper::getParams( 'com_content' );
		$access		= !$contentConfig->get('shownoauth');

		$nullDate	= $db->getNullDate();
		jimport('joomla.utilities.date');
		$date = new JDate();
		$now = $date->toMySQL();
		
		$where		= 'a.state = 1'
			. ' AND ( a.publish_up = '.$db->Quote($nullDate).' OR a.publish_up <= '.$db->Quote($now).' )'
			. ' AND ( a.publish_down = '.$db->Quote($nullDate).' OR a.publish_down >= '.$db->Quote($now).' )'
			;
			
		if ( $the_id && $current == 0 )
		{
			$where .= ' AND a.id != ' . $the_id;
		}

		switch ($params->get( 'user_id', 0 ))
		{
			case 'by_me':
				$where .= ' AND (a.created_by = ' . (int) $userId . ' OR a.modified_by = ' . (int) $userId . ')';
				break;
			case 'not_me':
				$where .= ' AND (a.created_by <> ' . (int) $userId . ' AND a.modified_by <> ' . (int) $userId . ')';
				break;
		}

		switch ($params->get( 'ordering', 'c_dsc' ))
		{
			case 'random':
				$ordering		= 'rand()';
				break;
			case 'h_asc':
				$ordering		= 'a.hits ASC';
				break;
			case 'h_dsc':
				$ordering		= 'a.hits DESC';
				break;
			case 'alpha':
				$ordering		= 'a.title';
				break;
			case 'ralpha':
				$ordering		= 'a.title DESC';
				break;
			case 'm_dsc':
				$ordering		= 'a.modified DESC, a.created DESC';
				break;
			case 'order':
				$ordering		= 'a.ordering ASC';
				break;
			case 'c_dsc':
			default:
				$ordering		= 'a.created DESC';
				break;
		}
				
		$query = 'SELECT a.*, ' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(":", a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug'.
			' FROM #__content AS a' .
			($show_front == '0' ? ' LEFT JOIN #__content_frontpage AS f ON f.content_id = a.id' : '') .
			' INNER JOIN #__categories AS cc ON cc.id = a.catid' .
			' INNER JOIN #__sections AS s ON s.id = a.sectionid' .
			' WHERE '. $where .' AND s.id > 0' .
			($access ? ' AND a.access <= ' .(int) $aid : '').
			($show_front == '0' ? ' AND f.content_id IS NULL ' : '').
			' AND s.published = 1' .
			$listCondition.
			' ORDER BY '. $ordering;
			
		$db->setQuery($query, 0, $count);
		$rows = $db->loadObjectList();
		
		$i		= 0;
		$lists	= array();
		foreach ( $rows as $row ) {
		
		    $link = '';
			if ( $show_title != 0 ) {
			     if ( $show_title == 1 ) {
                      if ( $the_id == $row->id && $current == 2 ) {
		                   $lists[$i]->title = htmlspecialchars( $row->title );
                      } else {
		                   $link = JRoute::_(ContentHelperRoute::getArticleRoute($row->slug, $row->catslug, $row->sectionid));
		                   $lists[$i]->title = '<a href="'.$link.'">'.htmlspecialchars( $row->title ).'</a>'; 
			          }
			     } else {
		              $tags = modGlobalNewsHelper::setGN_Tags( $show_title );
                      if ( $the_id == $row->id && $current == 2 ) {
		                   $lists[$i]->title = $tags[0] . htmlspecialchars( $row->title ) .  $tags[1];
                      } else {
		                   $link = JRoute::_(ContentHelperRoute::getArticleRoute($row->slug, $row->catslug, $row->sectionid));
		                   $lists[$i]->title = ( $show_title > 4 ? $tags[0] : '' ) . '<a href="'. $link .'">' . ( $show_title < 5 ? $tags[0] : '' ) .  htmlspecialchars( $row->title ) . ( $show_title < 5 ? $tags[1] : '' ) . '</a>' . ( $show_title > 4 ? $tags[1] : '' );
			          }
			     }
			}
			
			$lists[$i]->image = '';
			$lists[$i]->text  = '';
			
	        if ( $layout != 'list' ) :
			     $lists[$i]->date = $row->created;
		         if ( $item_img != 0 ) {
				      if ( $row->images != '' ) {
		                   $images = explode ( "|",$row->images );
		                   $config 	= JComponentHelper::getParams ('com_media');
			               $folder 	= $config->get('image_path');
			               $image   = $folder .'/'.$images[0];
		                   $lists[$i]->image .= modGlobalNewsHelper::getGN_Img ( $params, $link, $image, 'item' );
		              } else {
						   $regex = "/<img[^>]+src\s*=\s*[\"']\/?([^\"']+)[\"'][^>]*\>/";
						   $text   = $row->introtext.$row->fulltext;
						   preg_match ($regex, $text, $matches);
		                   $images = (count($matches)) ? $matches : array();
					       if ( count($images) ) {
		                        $lists[$i]->image .= modGlobalNewsHelper::getGN_Img ( $params, $link, $images[1], 'item' );
					       }
					  }
		         }
						
		         if ( $show_text != 0 ) {
				      if ( $show_text == 1 ) {
		                   $lists[$i]->text .= modGlobalNewsHelper::getGN_Chars( $params, $link, $row->introtext );
			          } else {
					       $tags = modGlobalNewsHelper::setGN_Tags( $show_text );
		                   $lists[$i]->text .= $tags[0] . modGlobalNewsHelper::getGN_Chars( $params, $link, $row->introtext ) . $tags[1];
			          }
			     }
				 
            endif;
			
			$i++;
		}

		return $lists;
	}
}