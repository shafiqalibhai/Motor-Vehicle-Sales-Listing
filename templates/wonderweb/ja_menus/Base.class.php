<?php
/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
defined( '_VALID_MOS' ) or defined('_JEXEC') or die('Restricted access');

if (!defined ('_JA_BASE_MENU_CLASS')) {
	define ('_JA_BASE_MENU_CLASS', 1);

	class JA_Base{
		var $_params = null;
		var $children = null;
		var $open = null;
		var $items = null;
		var $Itemid = 0;
		var $showSeparatedSub = false;

		function JA_Base( &$params ){
			global $Itemid;
			$this->_params = $params;
			$this->Itemid = $Itemid;
			$this->loadMenu();
		}

		function  loadMenu(){
			$this->loadMenu_15();
			
		}

		function createParameterObject($param, $path='', $type='menu') {
			return new JParameter($param, $path);
			
		}

		function getPageTitle ($params) {
			return $params->get ('page_title');
			
		}

		

	    function  loadMenu_15(){
    	    $menu = @JMenu :: getInstance();
    	    if(strtolower(get_class($menu)) == 'jexception') {
    	    	$menu = @JMenu :: getInstance('site');
    	    }
    	    $user =& JFactory::getUser();
			$children = array ();

			// Get Menu Items
			$items = &JSite::getMenu();
			$rows = $items->getItems('menutype', $this->getParam('menutype'));
    	    // first pass - collect children
    	    $cacheIndex = array();
 		    $this->items = array();
   	    	foreach ($rows as $index => $v) {
    		    if ($v->access <= $user->get('aid',0)) {
    			    $pt = $v->parent;
    			    $list = @ $children[$pt] ? $children[$pt] : array ();

					switch ($v->type)
					{
						case 'url' :
							if ((strpos($v->link, 'index.php?') !== false) && (strpos($v->link, 'Itemid=') === false)) {
								$v->url = $v->link.'&amp;Itemid='.$v->id;
							} else {
								$v->url = $v->link;
							}
							break;

						default :
							$router = JSite::getRouter();
							$v->url = $router->getMode() == JROUTER_MODE_SEF ? 'index.php?Itemid='.$v->id : $v->link.'&Itemid='.$v->id;
							break;

					}
					// Handle SSL links
					$iParams = $this->createParameterObject($v->params);
					$iSecure = $iParams->def('secure', 0);
					if ($v->home == 1) {
						$v->url = JURI::base();
					} elseif (strcasecmp(substr($v->url, 0, 4), 'http') && (strpos($v->link, 'index.php?') !== false)) {
						$v->url = JRoute::_($v->url, true, $iSecure);
					} else {
						$v->url = str_replace('&', '&amp;', $v->url);
					}

					$v->_idx = count($list);									
					array_push($list, $v);
    			    $children[$pt] = $list;
    		    }
    		    $cacheIndex[$v->id] = $index;
				$this->items[$v->id] = $v;
    	    }

            $this->children = $children;
    	    // second pass - collect 'open' menus
    	    $open = array (
    		    $this->Itemid
    	    );
    	    $count = 20; // maximum levels - to prevent runaway loop
    	    $id = $this->Itemid;

    	    while (-- $count)
    	    {
    		    if (isset($cacheIndex[$id])) {
    			    $index = $cacheIndex[$id];
    			    if (isset ($rows[$index]) && $rows[$index]->parent > 0) {
    				    $id = $rows[$index]->parent;
    				    $open[] = $id;
    			    } else {
    				    break;
    			    }
    		    }
    	    }
            $this->open = $open;
		   // $this->items = $rows;
	    }

		function genMenuItem($item, $level = 0, $pos = '', $ret = 0)
		{
			$data = null;
			$tmp = $item;
			
			if ($tmp->type == 'menulink')
			{
				$menu = &JSite::getMenu();
				$alias_item = clone($menu->getItem($tmp->query['Itemid']));
				if (!$alias_item) {
					return false;
				} else {
					$tmp->url = $alias_item->link;
				}
			}
			
			if ($tmp->type == 'separator')
			{
				$data = '<a href="#" title=""><span class="separator">'.$tmp->name.'</span></a>';
				if (!$ret) echo $data;
				return $data; 
			}

			// Print a link if it exists
			$active = $this->genClass ($tmp, $level, $pos);

			$id='id="menu' . $tmp->id . '"';
			$iParams = $this->createParameterObject( $item->params );
			//$iParams =& new JParameter($tmp->params);
			$itembg = '';
			if ($this->getParam('menu_images') && $iParams->get('menu_image') && $iParams->get('menu_image') != -1) {
				if ($this->getParam('menu_background')) {
					$itembg = ' style="background-image:url(images/stories/'.$iParams->get('menu_image').');"';
					$txt = '<span class="menu-title">' . $tmp->name . '</span>';
				} else {
					$txt = '<img src="images/stories/'.$iParams->get('menu_image').'" alt="'.$tmp->name.'" title="'.$tmp->name.'" /><span class="menu-title">' . $tmp->name . '</span>';
				}
			} else {
				$txt = '<span class="menu-title">' . $tmp->name . '</span>';
			}
			//Add page title to item
			if ($level == 0 && $this->getParam('menu_title')) {
				if ($this->getPageTitle($iParams)) {
					$txt .= '<span class="menu-desc">'. $this->getPageTitle($iParams).'</span>';
				} else {
					$txt .= '<span class="menu-desc">'. $tmp->name.'</span>';
				}
			}

			$title = "title=\"$tmp->name\"";

			if ($tmp->url != null)
			{
				switch ($tmp->browserNav)
				{
					default:
					case 0:
						// _top
						$data = '<a href="'.$tmp->url.'" '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
						break;
					case 1:
						// _blank
						$data = '<a href="'.$tmp->url.'" target="_blank" '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
						break;
					case 2:
						// window.open
						$attribs = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,'.$this->getParam('window_open');

						// hrm...this is a bit dickey
						$link = str_replace('index.php', 'index2.php', $tmp->url);
						$data = '<a href="'.$link.'" onclick="window.open(this.href,\'targetWindow\',\''.$attribs.'\');return false;" '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
						break;
				}
			} else {
				$data = '<a '.$active.' '.$id.' '.$title.$itembg.'>'.$txt.'</a>';
			}
				
			if ($ret) return $data; else echo $data;
		}

		function getParam($paramName){
			return $this->_params->get($paramName);
		}

		function setParam($paramName, $paramValue){
			return $this->_params->set($paramName, $paramValue);
		}

		function beginMenu($startlevel=0, $endlevel = 10){
			echo "<div>";
		}
		function endMenu($startlevel=0, $endlevel = 10){
			echo "</div>";
		}

		function beginMenuItems($pid=0, $level=0){
			echo "<ul>";
		}
		function endMenuItems($pid=0, $level=0){
			echo "</ul>";
		}

		function beginMenuItem($mitem=null, $level = 0, $pos = ''){
			echo "<li>";
		}
		function endMenuItem($mitem=null, $level = 0, $pos = ''){
			echo "</li>";
		}

		function genClass ($mitem, $level, $pos) {
			$active = in_array($mitem->id, $this->open);
			$cls = ($level?"":"menu-item{$mitem->_idx}"). ($active?" active":"").($pos?" $pos-item":"");
			return $cls?"class=\"$cls\"":"";
		}

		function hasSubMenu($level) {
			$pid = $this->getParentId ($level);
			if (!$pid) return false;
			return $this->hasSubItems ($pid);
		}
		function hasSubItems($id){
			if (@$this->children[$id]) return true;
			return false;
		}
		function genMenu($startlevel=0, $endlevel = 10){
			$this->setParam('startlevel', $startlevel);
			$this->setParam('endlevel', $endlevel);
			$this->beginMenu($startlevel, $endlevel);

			if ($this->getParam('startlevel') == 0) {
				//First level
				$this->genMenuItems (0, 0);
			}else{
				//Sub level
				$pid = $this->getParentId($this->getParam('startlevel'));
				if ($pid)
				$this->genMenuItems ($pid, $this->getParam('startlevel'));
			}
			$this->endMenu($startlevel, $endlevel);
		}

		/*
		 $pid: parent id
		 $level: menu level
		 $pos: position of parent
		 */

		function genMenuItems($pid, $level) {
			if (@$this->children[$pid]) {
				$this->beginMenuItems($pid, $level);
				$i = 0;
				foreach ($this->children[$pid] as $row) {
					$pos = ($i == 0 ) ? 'first' : (($i == count($this->children[$pid])-1) ? 'last' :'');

					$this->beginMenuItem($row, $level, $pos);
					$this->genMenuItem( $row, $level, $pos);

					// show menu with menu expanded - submenus visible
					if ($level < $this->getParam('endlevel')) $this->genMenuItems( $row->id, $level+1 );
					$i++;

					if ($level == 0 && $pos == 'last' && in_array($row->id, $this->open)) {
						global $jaMainmenuLastItemActive;
						$jaMainmenuLastItemActive = true;
					}
					$this->endMenuItem($row, $level, $pos);
				}
				$this->endMenuItems($pid, $level);
			}
		}

		function indentText($level, $text) {
			echo "\n";
			for ($i=0;$i<$level;++$i) echo "   ";
			echo $text;
		}

		function getParentId ($level) {
			if (!$level || (count($this->open) < $level)) return 0;
			return $this->open[count($this->open)-$level];
		}

		function getParentText ($level) {
			$pid = $this->getParentId ($level);
			if ($pid) {
				return $this->items[$pid]->name;
			}else return "";
		}

		function genMenuHead () {
		}
	}
}
?>
