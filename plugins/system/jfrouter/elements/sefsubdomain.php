<?php

/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2009 Think Network GmbH, Munich, 2007-2009 GWE Systems Ltd
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
 * $Id: sefsubdomain.php 1251 2009-01-07 11:07:01 apostolov Exp $
 * @package joomfish
 * @subpackage jfrouter
 * @version 2.0
 *
*/


// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class JElementSefsubdomain extends JElement
{
	function fetchElement($name, $value, &$node, $control_name)
	{
			if(JPath::find(JPATH_SITE .DS. 'components' .DS. 'com_joomfish' .DS. 'helpers','defines.php')) {
				require_once(JPATH_SITE .DS. 'components' .DS. 'com_joomfish' .DS. 'helpers'.DS.'defines.php');
				require_once( JPATH_ADMINISTRATOR .DS. 'components' .DS. 'com_joomfish' .DS. 'classes' .DS.'JoomfishManager.class.php' );
			} else {
				JError::raiseNotice('no_jf_component', JText::_('Joom!Fish component not installed correctly. Plugin not executed'));
			}
			$jfm = JoomFishManager::getInstance();
			$activeLanguages = $jfm->getActiveLanguages();

			$indexedvalues = array();
			if (!is_array($value)){
				$default = $value;
				foreach ($activeLanguages as $key => $val) {
					$indexedvalues[$key] = $val->id."::".$default; 
				}
			}
			else {
				foreach ($value as $val) {
					list($key,$val) = split("::",$val,2);
					$indexedvalues[$key] = $val; 					
				}
			}
			$html = "<fieldset><table>";
			$html .= "<tr style='font-weight:bold;'><td>".JText::_("Language")."</td><td>".JText::_("Prefix")."</td></tr>";
			foreach ($activeLanguages as $key => $val) {
				$html .= "<tr>";
				$html .= '<td>'.$val->name.'</td><td>';
				$prefix = array_key_exists($val->id,$indexedvalues)? $indexedvalues[$val->id] : ""; 
				$idprefix = $val->id."::".$prefix;
				$html .= "<input type='text' length='10' maxlength='50' id='sefprefix".$val->id."' onblur='document.getElementById(\"hiddensefsubdomain".$val->id."\").value=\"".$val->id."::\"+this.value;' value='".$prefix."' />";
				$html .= "<input type='hidden' id='hiddensefsubdomain".$val->id."' name='".$control_name.'['.$name.'][]'."' value='".$idprefix."' />";	
				$html .= "</td></tr>";
			}
			$html .="</table></fieldset>";

			return $html;
		
	}
}
