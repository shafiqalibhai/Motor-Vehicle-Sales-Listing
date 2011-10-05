<?php
###############################################
# PU Database Admin - A Joomla Component			#
# Copyright (C) 2008  by Pragmatic Utopia     #
# Homepage   : www.pragmaticutopia.com        #
# Email      : rick@pragmaticutopia.com       #
# Version    : 1.1.0                          #
# License    : Released under GPL             #
#					      															#
###############################################
	
	function com_install() 
	{
  	global $database;
		global $mainframe;
		$output = "";
		$abspath = $mainframe->getCfg('absolute_path');
		$output .= "Changing admin menu icons...<br>";
		$database->setQuery("UPDATE #__components SET admin_menu_img='../administrator/components/com_pudba/images/menu.png' WHERE admin_menu_link='option=com_pudba'");
    $result[0] = $database->query();
		foreach ($result as $i=>$iresult) {
			if ($iresult){
				$output .= "Icon " . $i . " changed: <font color=green>OK</font><br />";
			}else{
				$output .=  "Error changing icon ".$i.". This is not a serious error, and can be ignored.<br>";
			}
		}
		$path = $abspath . "/components/com_pudba";
		$output .="Removing unused directory...<br>";
		if (file_exists($path)){
			$res = rmdir($path);
		}
		if ($res){
			$output .= "<font color=green>OK</font><br />";
		}else{
			$output .= "<font color=red>Error removing directory.  This error can be ignored.</font><br/>";
		}
		$output .=  "<p><b>PU Database Admin Installation Complete</b></p>";
		return $output;
	}
?> 
