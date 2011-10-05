<?php
// ******************************************************************************
// Title          mod_joomlaxplorer Admin Module for Joomla
// Author         Mike Leeper - http://www.mlwebtechnologies.com
// Version        1.3
// License        This is free software and you may redistribute it under the GPL.
//                mod_joomlaxplorer comes with absolutely no warranty. For details, 
//                see the license at http://www.gnu.org/licenses/gpl.txt
//                YOU ARE NOT REQUIRED TO KEEP COPYRIGHT NOTICES IN
//                THE HTML OUTPUT OF THIS SCRIPT. YOU ARE NOT ALLOWED
//                TO REMOVE COPYRIGHT NOTICES FROM THE SOURCE CODE.
// *******************************************************************************
// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

if(file_exists(dirname(__FILE__).'/../components/com_joomlaxplorer/images/joomla_x_icon.png'))
{
echo "<a href=\"$mosConfig_live_site/administrator/index2.php?option=com_joomlaxplorer\" style=\"color: black; text-decoration: none;\" target=\"_self\"><img src=\"components/com_joomlaxplorer/images/joomla_x_icon.png\" align=\"middle\" border=\"0\" title=\"Joomla!Xplorer\" alt=\"Joomla!Xplorer\" /></a>";
}
if(file_exists(dirname(__FILE__).'/../components/com_joomlaxplorer/_img/joomla_x_icon.png'))
{
echo "<a href=\"$mosConfig_live_site/administrator/index2.php?option=com_joomlaxplorer\" style=\"color: black; text-decoration: none;\" target=\"_self\"><img src=\"components/com_joomlaxplorer/_img/joomla_x_icon.png\" align=\"middle\" border=\"0\" title=\"Joomla!Xplorer\" alt=\"Joomla!Xplorer\" /></a>";
}
?>
