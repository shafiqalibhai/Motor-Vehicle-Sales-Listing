<?php
/*
// "AllVideos" Plugin by JoomlaWorks for Joomla! 1.0.x - Version 2.5.3
// Copyright (c) 2006 - 2008 JoomlaWorks, a Komrade LLC company. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.joomlaworks.gr
// Designed and developed by the JoomlaWorks team
// *** Last update: July 27th, 2008 ***
*/

ob_start ("ob_gzhandler"); 
header("Content-type: text/javascript; charset: UTF-8"); 
header("Cache-Control: must-revalidate"); 
$offset = 60 * 60 ; 
$ExpStr = "Expires: ".
gmdate("D, d M Y H:i:s", 
time() + $offset) . " GMT"; 
header($ExpStr);

// Includes
include("silverlight.js");
echo "\n\n";
include("wmvplayer.js");
echo "\n\n";
include("AC_QuickTime.js");
echo "\n\n";

ob_flush();
?>