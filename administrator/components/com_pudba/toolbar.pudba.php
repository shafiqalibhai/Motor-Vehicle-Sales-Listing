<?
###############################################
# PU Database Admin - A Joomla Component			#
# Copyright (C) 2008  by Pragmatic Utopia     #
# Homepage   : www.pragmaticutopia.com        #
# Email      : rick@pragmaticutopia.com       #
# Version    : 1.1.0                          #
# License    : Released under GPL             #
#					      															#
###############################################
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

require_once( $mainframe->getPath( 'toolbar_html' ) );
require_once( $mainframe->getPath( 'toolbar_default' ) );
if ($act) $task = $act;
if ($q) $task = $q;
switch ($task) {

	case "show tables":
		pumenu::TABLES_MENU();
		break;
  	default:
    		pumenu::DEFAULT_MENU();
    		break;
}
?>
