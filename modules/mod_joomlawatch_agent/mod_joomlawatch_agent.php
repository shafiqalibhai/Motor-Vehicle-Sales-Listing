<?php


/**
* JoomlaWatch - A real-time ajax joomla monitor and live stats
* @version 1.2.x
* @package JoomlaWatch
* @license http://www.gnu.org/licenses/gpl-3.0.txt 	GNU General Public License v3
* @copyright (C) 2007 by Matej Koval - All rights reserved! 
* @website http://www.codegravity.com
**/

/** ensure this file is being included by a parent file */
if( !defined( '_JEXEC' ) && !defined( '_VALID_MOS' ) ) die( 'Restricted access' ); 

if (@ !defined('JPATH_BASE')) {
	define('_JEXEC', 1);
	$dirname = dirname(__FILE__);
	$dirnameExploded = explode(DIRECTORY_SEPARATOR, $dirname);
	$jBasePath = "";
	if (@ defined('JPATH_BASE'))
		$omitLast = 2; // Joomla 1.5, because there are modules in separate subdirs
	else
		$omitLast = 1; // Jooma 1.0
	for ($i = 0; $i < sizeof($dirnameExploded) - $omitLast; $i++) {
		$jBasePath .= $dirnameExploded[$i];
		if ($i < (sizeof($dirnameExploded) - ($omitLast +1)))
			$jBasePath .= DIRECTORY_SEPARATOR;
	}
	define('JPATH_BASE', $jBasePath);
	define('DS', DIRECTORY_SEPARATOR);
}
if (@ file_exists(JPATH_BASE . DIRECTORY_SEPARATOR . "globals.php"))
	@ define('JOOMLAWATCH_JOOMLA_15', 0);
else
	@ define('JOOMLAWATCH_JOOMLA_15', 1);

require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "config.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "class.joomlawatch.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "class.joomlawatch.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "class.ip2country.php");

if (JOOMLAWATCH_DEBUG)
	echo (DESC_JOOMLAWATCH_DEBUG);

$redirURI = addslashes(@ $_SERVER[JOOMLAWATCH_SERVER_URI_KEY]);
$uri = addslashes(@ $_SERVER['REQUEST_URI']);

if (@ $redirURI && @ substr($redirURI, -9, 9) != "index.php")
	$uri = $redirURI;

$joomlaWatch = new JoomlaWatch();
$joomlaWatch->insertVisit($joomlaWatchHTML->mosConfig_live_site);

/* 
 * The following piece of code identifies the userAgent and inserts the backlink to codegravity.com
 * 
 * I would really appreciate, that you would keep the this unchanged. 
 *
 * It took me some time to create and maintain this component and to share it with everyone. 
 *
 * This is the least you could kindly do. Thank you. 
 *
 *
 * Matej Koval
*/
if ($joomlaWatch->getCheckboxValue("JOOMLAWATCH_FRONTEND_LINK")) {
	echo ("<a href='http://www.codegravity.com' target='_blank' title='JoomlaWatch Stats " . JOOMLAWATCH_VERSION . "'>");
}

echo ("<img src='" . $joomlaWatchHTML->mosConfig_live_site . "/components/com_joomlawatch/img.php?rand=" . (rand() % 100000) . "' border='0' alt='JoomlaWatch Stats " . JOOMLAWATCH_VERSION . " by Matej Koval' title='JoomlaWatch Stats " . JOOMLAWATCH_VERSION . "'/>");

if ($joomlaWatch->getCheckboxValue("JOOMLAWATCH_FRONTEND_LINK")) {
	echo ("</a>");
}
?>
