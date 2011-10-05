<?php
###############################################
# PU Database Admin - A Joomla Component			#
# Copyright (C) 2008  by Pragmatic Utopia     #
# Homepage   : www.pragmaticutopia.com        #
# Email      : rick@pragmaticutopia.com       #
# Version    : 1.1.0                          #
# License    : Released under GPL             #
###############################################
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
class pumenu {
  	function TABLES_MENU(){
			mosMenuBar::startTable();
   		mosMenuBar::spacer();
   		mosMenuBar::endTable();
  	}
  	function DEFAULT_MENU() {
			mosMenuBar::startTable();
   		mosMenuBar::spacer();
   		mosMenuBar::endTable();
  	}	
}
?>
