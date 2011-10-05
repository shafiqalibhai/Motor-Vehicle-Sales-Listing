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
if (!defined ('_JA_MOO_MENU_CLASS')) {
	define ('_JA_MOO_MENU_CLASS', 1);
	require_once (dirname(__FILE__).DS."Base.class.php");
	
	class JA_Moomenu extends JA_Base{
		function beginMenu($startlevel=0, $endlevel = 10){
		}
  
  		function beginMenuItems($pid=0, $level=0){
			if($level==0) echo "<ul id=\"ja-cssmenu\" class=\"clearfix\">\n";
			else echo "<ul>";
		}
  		function endMenuItems($pid=0, $level=0){
			if($level==0) echo "</ul>\n";
			else echo "</ul>";
		}
      
		function endMenu($startlevel=0, $endlevel = 10){
		}
        
        function hasSubMenu($level) {
            return false;
        }
        
        function beginMenuItem($row=null, $level = 0, $pos = '') {
            $active = in_array($row->id, $this->open);
            $active = ($active) ? " active" : "";
            if ($level == 0 && @$this->children[$row->id]) echo "<li class=\"havechild{$active}\">";
            else if ($level > 0 && @$this->children[$row->id]) echo "<li class=\"havesubchild{$active}\">";
            else echo "<li ".(($active) ? "class=\"active\"" : "").">";
        }
        function endMenuItem($mitem=null, $level = 0, $pos = ''){
            echo "</li> \n";
        }
		
		function genMenuItem($item, $level = 0, $pos = '', $ret = 0) {
			//if ($level) return parent::genMenuItem($item, $level, '', $ret);
			//else 
			return parent::genMenuItem($item, $level, $pos, $ret);
		}

		function genMenuHead () {
			?>
			<link href="<?php echo $this->getParam('menupath'); ?>/ja_moomenu/ja.moomenu.css" rel="stylesheet" type="text/css" />
			<script src="<?php echo $this->getParam('menupath'); ?>/ja_moomenu/ja.moomenu.js" language="javascript" type="text/javascript" ></script>
			<?php
		}
	}
}
?>