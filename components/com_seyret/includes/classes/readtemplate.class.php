<?php
defined( '_VALID_MOS' ) or die( 'Oppps, what are you doing' );

//Seyret Component v.0.2.8//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2
**/	



class readtemplate{
	

	
	function gettemplatefile($templatefile, $theme){
		global $mosConfig_absolute_path;
		$templatefilefull=$mosConfig_absolute_path."/components/com_seyret/themes/".$theme."/templates/".$templatefile;

		if (file_exists( $templatefilefull )) {
			$html_file = fopen( $templatefilefull, "r" );
		} else {
			return "error";
		}
		$html = "";

		while (!feof($html_file)) {
			$buffer = fgets($html_file, 1024);
			$html .= $buffer;
		}
		fclose ($html_file);

		return $html;		

	}


}


?>