<?php
/**
* JoomlaWatch - A real-time ajax joomla monitor and live stats
* @version 1.2.x
* @package JoomlaWatch
* @license http://www.gnu.org/licenses/gpl-3.0.txt 	GNU General Public License v3
* @copyright (C) 2008 by Matej Koval - All rights reserved! 
* @website http://www.codegravity.com
**/

error_reporting(E_ALL);

define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = dirname(__FILE__).DS."..".DS."..".DS;
define('JPATH_BASE', $jBasePath);

if (@ file_exists(JPATH_BASE . DIRECTORY_SEPARATOR . "globals.php"))
	@ define('JOOMLAWATCH_JOOMLA_15', 0);
else
	@ define('JOOMLAWATCH_JOOMLA_15', 1);
if (JOOMLAWATCH_JOOMLA_15) {
	if (!defined('JPATH_ROOT'))
		require_once (JPATH_BASE . DS . 'includes' . DS . 'defines.php');
	if (!defined('JDEBUG')) 
		require_once (JPATH_BASE . DS . 'includes' . DS . 'framework.php');
	require_once (JPATH_BASE . DS . 'libraries' . DS . 'joomla' . DS . 'application' . DS . 'module' . DS . 'helper.php');
	$mainframe = & JFactory :: getApplication('site');
	$mainframe->initialise();
} else {
	define('_VALID_MOS', 1);
	require_once (JPATH_BASE . DS . 'globals.php');
	require_once (JPATH_BASE . DS . 'configuration.php');
	require_once (JPATH_BASE . DS . 'includes'.DS.'joomla.php');
}

require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "config.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "class.joomlawatch.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "class.joomlawatch.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "class.ip2country.php");

$joomlaWatch = new JoomlaWatch();
require_once (JPATH_BASE . DS . "components" . DS . "com_joomlawatch" . DS . "lang" . DS . $joomlaWatch->getLanguage().".php");

$joomlaWatchHTML = new JoomlaWatchHTML("/components/com_joomlawatch");
$joomlaWatch->checkPermissions();

$t1 = ($joomlaWatch->getServerTime()+ microtime());

$last = $joomlaWatch->getLastVisitId();

//$params = new MosParameters("");
$today = $joomlaWatch->getDayByTimestamp($joomlaWatch->getServerTime());
$thisWeek = $joomlaWatch->getWeekByTimestamp($joomlaWatch->getServerTime());

if (@ $_GET['day'])
	$day = @ $_GET['day'];
else
	$day = floor(($joomlaWatch->getServerTime()+ $joomlaWatch->getConfigValue('JOOMLAWATCH_DAY_OFFSET')) / 24 / 3600 + $joomlaWatch->getConfigValue('JOOMLAWATCH_WEEK_OFFSET'));

if (@ $_GET['week'])
	$week = @ $_GET['week'];
else
	$week = $joomlaWatch->getWeekByTimestamp($joomlaWatch->getServerTime());

$prev = $day -1;
$next = $day +1;
$prevWeek = $week -1;
$nextWeek = $week +1;
?>
<table border='0' cellpadding='1' cellspacing='0' width='100%'>

<tr><td colspan='5'>
<h3><?php echo _JW_STATS_TITLE."&nbsp;"; echo(date("W",$week*3600*24*7)); ?>/<?php echo(date("Y",$week*3600*24*7)); ?>
<?php echo $joomlaWatchHTML->renderOnlineHelp("visit-stats"); ?></h3>
</td></tr>
<tr><td colspan='5'>
	<table border='0'>
	<tr><td align='left' width='10%'><?php echo("<a href='javascript:setWeek($prevWeek)' id='visits_$prevWeek'>&lt;"._JW_STATS_WEEK."&nbsp;".date("W",$prevWeek*3600*24*7)."</a></td><td align='left'><img src='$joomlaWatchHTML->mosConfig_live_site/components/com_joomlawatch/icons/calendar.gif' border='0' align='center' />"); ?></td>
	<td align='center' width='20%'><?php if (@$week != $thisWeek)echo("<a href='javascript:setWeek($thisWeek)' id='visits_$thisWeek'>"._JW_STATS_THIS_WEEK."</a>"); ?></td>
	<td align='right' width='10%'><?php if ($nextWeek <= $thisWeek) echo("<img src='$joomlaWatchHTML->mosConfig_live_site/components/com_joomlawatch/icons/calendar.gif' border='0' align='center' /></td><td width='20%' align='right'><a href='javascript:setWeek($nextWeek)' id='visits_$nextWeek'>"._JW_STATS_WEEK."&nbsp;".date("W",$nextWeek*3600*24*7)."&gt;</a>"); ?></td>
	</tr>
	</table>
<tr>
<?php echo $joomlaWatchHTML->renderVisitsGraph($week); ?>
<br/>

<tr><td colspan='4'>

<table width='100%'>
	<tr>
	<td align='center' class='<?php echo $joomlaWatchHTML->renderTabClass("0", @$_GET['tab']);?>'>
	<?php echo $joomlaWatchHTML->renderSwitched("0", _JW_STATS_DAILY, @$_GET['tab']); ?>
	</td>
	<td align='center' class='<?php echo $joomlaWatchHTML->renderTabClass("1", @$_GET['tab']);?>'> 
	<?php echo $joomlaWatchHTML->renderSwitched("1", _JW_STATS_ALL_TIME, @$_GET['tab']); ?>
	</td>
	<td align='center' class='tab_none'> 
	</td>
	</tr>
</table>

<?php if (@$_GET['tab'] == "1") { ?>
<tr><td colspan='5'><h3><?php echo(_JW_STATS_ALL_TIME_TITLE); echo $joomlaWatchHTML->renderOnlineHelp("all-time-stats"); ?></h3></h3></td>

<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_URI);?></u></td></tr>
<tr><td  valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("uri", @$_GET['uri']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_COUNTRIES);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("country", @$_GET['countries']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_REFERERS);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("referers", @$_GET['referers']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<?php if ($joomlaWatch->getConfigValue('JOOMLAWATCH_IP_STATS')) { ?>
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_IPS);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("ip", @$_GET['ip']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<?php } ?> 
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_USERS);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("users", @$_GET['users']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_GOALS);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("goals", @$_GET['goals']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_KEYWORDS);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("keywords", @$_GET['keywords']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_BROWSER);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("browser", @$_GET['browsers']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_ALL_TIME)."&nbsp;"; echo(_JW_STATS_OS);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderTotalIntValuesByName("os", @$_GET['os']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>

<?php } else { ?>
	
<h3><?php echo(_JW_STATS_DAILY_TITLE)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?><?php echo $joomlaWatchHTML->renderOnlineHelp("daily-stats"); ?></h3></h3>
<table width='100%'>
<tr><td align='left'><?php echo("<a href='javascript:setDay($prev)' id='$prev'>&lt;".date("d.m.Y",$prev*3600*24)."<img src='$joomlaWatchHTML->mosConfig_live_site/components/com_joomlawatch/icons/calendar.gif' border='0' align='center' /></a>"); ?></td>
<td align='center'><?php if ($day != $today)echo("<a href='javascript:setDay($today)' id='$today'>"._JW_STATS_TODAY."</a>"); ?></td>
<td align='right'><?php if ($next <= $today) echo("<a href='javascript:setDay($next)' id='$next'><img src='$joomlaWatchHTML->mosConfig_live_site/components/com_joomlawatch/icons/calendar.gif' border='0' align='center' />".date("d.m.Y",$next*3600*24)."&gt;</a>"); ?></td>
</tr>
</table>
<tr><td colspan='4'><u><?php echo(_JW_STATS_URI)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td  valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("uri", $day, @$_GET['uri']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_COUNTRIES)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td><?php echo $joomlaWatchHTML->renderIntValuesByName("country", $day, @$_GET['countries']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_REFERERS)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("referers", $day, @$_GET['referers']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<?php if ($joomlaWatch->getConfigValue('JOOMLAWATCH_IP_STATS')) { ?>
<tr><td colspan='4'><u><?php echo(_JW_STATS_IP)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("ip", $day, @$_GET['ip']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<?php } ?>
<tr><td colspan='4'><u><?php echo(_JW_STATS_USERS)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("users", $day, @$_GET['users']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_GOALS)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("goals", $day, @$_GET['goals']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_KEYWORDS)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("keywords", $day, @$_GET['keywords']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_BROWSER)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("browser", $day, @$_GET['browser']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
<tr><td colspan='4'><u><?php echo(_JW_STATS_OS)."&nbsp;"; echo(_JW_STATS_FOR)."&nbsp;"; echo $joomlaWatch->getDateByDay($day);?></u></td></tr>
<tr><td valign='top'><?php echo $joomlaWatchHTML->renderIntValuesByName("os", $day, @$_GET['os']); ?></td></tr>
<tr><td colspan='4'>&nbsp;</td></tr>
</table>

<?php } ?>

</td>
</tr>
</table>

<hr size='1' width='100%'/>
<h3><?php echo(_JW_STATS_IP_BLOCKING_TITLE); echo $joomlaWatchHTML->renderOnlineHelp("ip-blocking"); ?></h3>
<a href='javascript:blockIpManually();'><?php echo(_JW_STATS_IP_BLOCKING_ENTER);?></a><br/>
<table>
<?php echo($joomlaWatchHTML->renderBlockedIPs()); ?>
</table>

<br/><br/>
	<span style='color: #cccccc;'>JoomlaWatch &copy;2006-2008 by Matej Koval</span>

<!-- rendered in <?php echo((time()+microtime())-$t1); ?>s -->
