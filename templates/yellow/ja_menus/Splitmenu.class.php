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
if (!defined ('_JA_SPLIT_MENU_CLASS')) {
	define ('_JA_SPLIT_MENU_CLASS', 1);
	require_once (dirname(__FILE__).DS."Base.class.php");

	class JA_Splitmenu extends JA_Base{

		function JA_Splitmenu (&$params) {
			parent::JA_Base($params);

			//To show sub menu on a separated place
			$this->showSeparatedSub = true;
		}

		function beginMenu($startlevel=0, $endlevel = 10){
			if ($startlevel == 0) {
				echo "<div id=\"ja-splitmenu\" class=\"mainlevel clearfix\">\n";
			} else {
				echo "<div class=\"sublevel\">\n";
			}
		}
		function endMenu($startlevel=0, $endlevel = 10){
			echo "\n</div>";
		}
		function genMenu($startlevel=0, $endlevel = 10){
			if ($startlevel == 0) parent::genMenu(0,0);
			else parent::genMenu($startlevel, $endlevel);
		}

		function beginMenuItem($mitem=null, $level = 0, $pos = ''){
			$active = $this->genClass ($mitem, $level, $pos);
			echo "<li ".$active.">";
		}

		function genMenuHead () {
			?>
			<link href="<?php echo $this->getParam('menupath'); ?>/ja_splitmenu/ja.splitmenu.css" rel="stylesheet" type="text/css" />
			<?php
		}
	}
}
?>
