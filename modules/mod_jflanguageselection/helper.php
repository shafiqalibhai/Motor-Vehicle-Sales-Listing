<?php
/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2009 Think Network GmbH, Munich
 *
 * All rights reserved.  The Joom!Fish project is a set of extentions for
 * the content management system Joomla!. It enables Joomla!
 * to manage multi lingual sites especially in all dynamic information
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -----------------------------------------------------------------------------
 * $Id: helper.php 1251 2009-01-07 06:29:53Z apostolov $
 * @package joomfish
 * @subpackage mod_jflanguageselection
 *
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Prevent redifinition of class, when module is used in two separate locations
if( !defined( 'JFMODULE_CLASS' ) ) {
	define( 'JFMODULE_CLASS', true );

	class JFModuleHTML {

		function makeOption( $value, $text='', $style='') {
			$obj = new stdClass;
			$obj->value = $value;
			$obj->text = $text;
			$obj->style = $style;
			return $obj;
		}

		/**
	* Generates an HTML select list
	* @param array An array of objects
	* @param string The value of the HTML name attribute
	* @param string Additional HTML attributes for the <select> tag
	* @param string The name of the object variable for the option value
	* @param string The name of the object variable for the option text
	* @param mixed The key that is selected
	* @returns string HTML for the select list
	*/
		function selectList( &$arr, $tag_name, $tag_attribs, $key, $text, $selected=NULL ) {
			// check if array
			if ( is_array( $arr ) ) {
				reset( $arr );
			}

			$html 	= "\n<select name=\"$tag_name\" $tag_attribs>";
			$count 	= count( $arr );

			for ($i=0, $n=$count; $i < $n; $i++ ) {
				$k = $arr[$i]->$key;
				$t = $arr[$i]->$text;
				$id = ( isset($arr[$i]->id) ? @$arr[$i]->id : null);

				$extra = ' '.$arr[$i]->style." ";
				$extra .= $id ? " id=\"" . $arr[$i]->id . "\"" : '';
				if (is_array( $selected )) {
					foreach ($selected as $obj) {
						$k2 = $obj->$key;
						if ($k == $k2) {
							$extra .= " selected=\"selected\"";
							break;
						}
					}
				} else {
					$extra .= ($k == $selected ? " selected=\"selected\"" : '');
				}
				$html .= "\n\t<option value=\"".$k."\"$extra >" . $t . "</option>";
			}
			$html .= "\n</select>\n";

			return $html;
		}

		/**
	 * internal function to generate a new href link
	 * @param	TableJFLanguage	the language
	 * @return	string	new href string
	 */
		function _createHRef( $language , $modparams) {
			// NB I pass the language in order to ensure I use the standard language cache files
			$db =& JFactory::getDBO();
			$pfunc = $db->_profile();

			$code = $language->getLanguageCode();
			$app	= &JFactory::getApplication();
			$router = &$app->getRouter();
			$vars = $router->getVars();

			$href= "index.php";
			$hrefVars = '';

			// set lang to correct value
			$vars['lang']=$code;

			foreach ($vars as $k=>$v) {
				if( $hrefVars != "" ) {
					$hrefVars .= "&";
				}
				$hrefVars .= $k.'='.$v;
			}

			// Add the existing variables
			if( $hrefVars != "" ) {
				$href .= '?' .$hrefVars;
			}

			$app	= &JFactory::getApplication();
			$router = &$app->getRouter();
			$uri = &JURI::getInstance();
			$currenturl = $uri->toString();
			
			$params =& JComponentHelper::getParams("com_joomfish");
			if ($modparams->get("cache_href",1) && $params->get("transcaching",1)){
				$jfm =& JoomFishManager::getInstance();
				$cache = $jfm->getCache($language->code);

				$url = $cache->get( array("JFModuleHTML", '_createHRef2'), array($currenturl,$href, $code));
			}
			else {
				$url= JFModuleHTML::_createHRef2($currenturl,$href, $code);
			}
			$db->_profile($pfunc);
			return $url;
		}
		
		function _createHRef2($currenturl,$href, $code) {
			// Treat change of language specially because of problems if menu alias is translated
			$registry =& JFactory::getConfig();
			$language = $registry->getValue("joomfish.language",null);
			if($language != null) {
				$jfLang = $language->getLanguageCode();
			} else {
				$jfLang = null;
			}

			if ( !is_null($code) && $code != $jfLang){
				$registry =& JFactory::getConfig();
				$sefLang = TableJFLanguage::createByShortcode($code, false);
				$registry->setValue("joomfish.sef_lang", $sefLang->code);

				// Should really do this with classes and clones - this is a proof of concept
				$menu =& JSite::getMenu();
				$menu->_items = JFModuleHTML::getJFMenu($sefLang->code, false, $menu->_items);
				$url = JFModuleHTML::_route( $href, $sefLang);
				$menu->_items = JFModuleHTML::getJFMenu($language->code, true);
				$registry->setValue("joomfish.sef_lang", false);

				/*
				$menu  =& JSite::getMenu(true);
				if (version_compare(phpversion(), '5.0') >= 0) {
				$keepmenu = clone($menu);
				}
				else {
				$keepmenu = $menu;
				}
				$menu = new JMenuSite();
				$url = JRoute::_( $href );
				$registry->setValue("joomfish.sef_lang", false);
				$menu = $keepmenu;
				return $url;
				*/
			}
			else {
				$url = JFModuleHTML::_route( $href ,$language);
			}

			return $url;
		}

		function _route($href,$sefLang){
			$jfm =& JoomFishManager::getInstance();
			$conf =& JFactory::getConfig();
			$code = $sefLang->code;
			if ($jfm->getCfg("transcaching",1) && $code!==$conf->getValue('config.defaultlang')){
				$cache = $jfm->getCache($code);
				// add ssl flag into cache determination
				$uri = &JURI::getInstance();
				$url = $cache->get( array("JFModuleHTML", 'getRoute'), array($href,$code,$uri->isSSL()));
			}
			else {
				$url = JFModuleHTML::getRoute($href,$code);
			}
			return $url;
		}

		function getRoute($href,$code=""){
			// I may need to use absolute URL here is using subdomains for language switching
			// this forces a full absolute URL
			
			// Make secure to force router to add schema and host
			// TODO watch that Joomla if introduces a new https host in the config that it is handled correctly
			$ssl = 1; 
			$registry =& JFactory::getConfig();
			$registry->setValue("joomfish.sef_host", false);
			// Annoying thing is that this 'caches' the prefix as a static so we can't change the domain easily
			$url  = JRoute::_( $href, true, $ssl);
			$currenthost = $registry->getValue("joomfish.current_host", false);
			$sefhost = $registry->getValue("joomfish.sef_host", false);
			if ($sefhost && $currenthost) {
				$url = str_replace($currenthost, $sefhost, $url);
			}
			// if not secure then return url to unsecure state
			$uri = &JURI::getInstance();
			if (!$uri->isSSL()){
				$url = str_replace("https://", "http://", $url);
			}
			$registry->setValue("joomfish.sef_host", false);
			return $url;
		}

		function getJFMenu($lang, $getOriginals=true,  $currentLangMenuItems=false){
			static $instance;
			if (!isset($instance)){
				$instance = array();

				if (!$currentLangMenuItems){
					JError::raiseWarning('SOME_ERROR_CODE', "Error translating Menus - missing currentLangMenuItems");
					return false;
				}
				$db		= & JFactory::getDBO();

				$sql	= 'SELECT m.*, c.`option` as component' .
				' FROM #__menu AS m' .
				' LEFT JOIN #__components AS c ON m.componentid = c.id'.
				' WHERE m.published = 1 '.
				' ORDER BY m.sublevel, m.parent, m.ordering';
				$db->setQuery($sql);

				// get untranslated menus first
				// run through the translation code so that we get the correct reftablearray
				$registry =& JFactory::getConfig();
				$defLang = $registry->getValue("config.defaultlang");
				// done as array of one item so that joomla core menu code will work with it
				if (!($menu = $db->loadObjectList('id',true, $defLang))) {
					JError::raiseWarning('SOME_ERROR_CODE', "Error loading Menus: ".$db->getErrorMsg());
					return false;
				}

				$instance["raw"] = array("rows"=>$menu, "tableArray"=>$db->_getRefTables(),"originals"=>$currentLangMenuItems);
				JFModuleHTML::_setupMenuRoutes($instance["raw"]["rows"]);
				// This is really annoying in PHP5 - an array of stdclass objects is copied as an array of references
				// I tried doing this as a stdclass and cloning but it didn't seek to work.
				$instance["raw"] = serialize($instance["raw"]);

				$defLang = $registry->getValue("config.jflang");
				$instance[$defLang] = unserialize($instance["raw"]);

			}
			if (!isset($instance[$lang])){
				$instance[$lang] = unserialize($instance["raw"]);

				// Do not cache here since it can affect SEF components 				
				JoomFish::translateList( $instance[$lang]["rows"], $lang, $instance[$lang]["tableArray"]);
				JFModuleHTML::_setupMenuRoutes($instance[$lang]["rows"]);
			}
			if ($getOriginals){
				return $instance[$lang]["originals"];
			}
			else {
				return $instance[$lang]["rows"];
			}
		}

		function _setupMenuRoutes(&$menus) {
			if($menus) {
				foreach($menus as $key => $menu)
				{
					//Get parent information
					$parent_route = '';
					$parent_tree  = array();
					if(($parent = $menus[$key]->parent) && (isset($menus[$parent])) &&
					(is_object($menus[$parent])) && (isset($menus[$parent]->route)) && isset($menus[$parent]->tree)) {
						$parent_route = $menus[$parent]->route.'/';
						$parent_tree  = $menus[$parent]->tree;
					}
	
					//Create tree
					array_push($parent_tree, $menus[$key]->id);
					$menus[$key]->tree   = $parent_tree;
	
					//Create route
					$route = $parent_route.$menus[$key]->alias;
					$menus[$key]->route  = $route;
	
					//Create the query array
					$url = str_replace('index.php?', '', $menus[$key]->link);
					if(strpos($url, '&amp;') !== false)
					{
						$url = str_replace('&amp;','&',$url);
					}
	
					parse_str($url, $menus[$key]->query);
				}
			}
		}
	}
}
