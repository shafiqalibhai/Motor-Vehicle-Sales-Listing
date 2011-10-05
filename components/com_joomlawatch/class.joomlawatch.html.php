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

if (JOOMLAWATCH_DEBUG)
error_reporting(E_ALL);
else
error_reporting(0);

class JoomlaWatchHTML {

	var $database;
	var $mosConfig_live_site;
	var $lastDate;

	function JoomlaWatchHTML($omitDir = "") {
		global $database, $mosConfig_live_site;
		if (!JOOMLAWATCH_JOOMLA_15) { // if Joomla 1.0
			$this->database = $database;
			$this->mosConfig_live_site = $mosConfig_live_site;
		} else { // if Joomla 1.5
			$this->database = & JFactory :: getDBO();
			if (@$_SERVER['HTTPS'] == "on") {
				$base = "https://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
			} else {
				$base = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
			}
			if ($omitDir != "") {
				$base = substr($base, 0, -strlen($omitDir)); //length of directory to omit
			}
			$this->mosConfig_live_site = rtrim($base, "/");
		}

	}

	function renderIntValuesByName($group, $date = "", $expanded = false, $limit = 5) {

		$rows = JoomlaWatch :: getIntValuesByName($group, $date, $expanded, $limit);

		$i = 0xFF;

		$output = "";
		foreach ($rows as $row) {

			$origName = $row->name;
			$relDiff = JoomlaWatch :: getRelDiffOfTwoDays($date -2, $date -1, $group, $row->name);
			$diffOutput = $this->renderDiff($group, $row->name, $date -1, $relDiff, 1, "$relDiff% - " . _JW_TOOLTIP_YESTERDAY_INCREASE);

			$count = JoomlaWatch :: getCountByKeyAndDate($group, $date);
			if ($count)
			$percent = floor(($row->value / $count) * 1000) / 10;
			else
			$percent = 0;

			if (@ $group == 'referers' || @ $group == 'referers_total') {
				$groupTruncated = JoomlaWatch :: truncate($row->name, JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_STATS'));
				$row->name = "<a href='http://$row->name' title='$row->name' target='_blank'>$groupTruncated</a>";
			} else
			if (@ $group == 'uri' || @ $group == 'uri_total') {
				$groupTruncated = JoomlaWatch :: truncate($row->name, JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_STATS'));
				$row->name = "<a href='$this->mosConfig_live_site$row->name' title='$row->name'>$groupTruncated</a>";
			} else
			if (@ $row->name && ($group == 'browser' || $group == 'os' || $group == 'browser_total' || $group == 'os_total'))
			$icon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/" . strtolower($row->name) . ".gif' />";
			else
			if ($group == 'country' || $group == 'country_total') {
				if (@ $row->name) {
					$countryName = JoomlaWatch :: countryCodeToCountryName(@ $row->name);
					$icon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/flags/" . strtolower(@ $row->name) . ".png' title='$countryName' alt='$countryName' " . JoomlaWatch :: getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->mosConfig_live_site . "/components/com_joomlawatch/tooltip.php?rand=" . JoomlaWatch :: getRand() . "&ip=" . @ $row->ip . "',this);return false\"/>";
				}
			} else
			if (@ $group == 'goals' || @ $group == 'goals_total') {
				$goalName = JoomlaWatch :: getGoalNameById(@ $row->name);
				$groupTruncated = JoomlaWatch :: truncate($goalName, JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_STATS'));
				$row->name = "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_joomlawatch&task=goals&action=edit&goalId=" . @ $row->name . "'>$groupTruncated</a>";
			} else
			if (@ $group == 'users' || @ $group == 'users_total') {
				$row->name = "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_users&task=view&search=$row->name'>" . @ $row->name . "</a>";
			}
			if ($group == 'keywords') {
				// to have characters like " instead of it's code
				$row->name = strip_tags(urldecode($row->name));
			} else
			if ($group == 'ip') {
				if (@ $row->name) {
					$mapsIcon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/map_icon.gif' border='0' " . JoomlaWatch :: getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->mosConfig_live_site . "/components/com_joomlawatch/tooltip.php?rand=" . JoomlaWatch :: getRand() . "&ip=" . @ $row->name . "',this);return false\"/>";
					if (JoomlaWatch :: getBlockedIp($row->name))
					$ip = "<s>" . $row->name . "</s>";
					else
					$ip = $row->name;
					$blocked = JoomlaWatch :: getBlockedIp($row->name);
					$country = JoomlaWatch :: countryByIp($row->name);
					$countryName = JoomlaWatch :: countryCodeToCountryName($country);
					if (!$country)
					$country = "none";
					$icon = $mapsIcon . "&nbsp;<img src='$this->mosConfig_live_site/components/com_joomlawatch/flags/" . strtolower($country) . ".png' title='$countryName' alt='$countryName' onClick=\"ajax_showTooltip('" . $this->mosConfig_live_site . "/components/com_joomlawatch/tooltip.php?rand=" . JoomlaWatch :: getRand() . "&ip=$row->ip',this);return false\"/>";
					$row->name = "<a  id='$row->name' href='javascript:blockIpToggle(\"$row->name\");' style='color: black;'>" . $ip . "</a>";

				}
			}

			$progressBarIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/progress_bar.gif";

			$trendsIcon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/trend_icon.gif' border='0'  " . JoomlaWatch :: getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->mosConfig_live_site . "/components/com_joomlawatch/trendtooltip.php?rand=" . JoomlaWatch :: getRand() . "&group=$group&name=$origName&date=$date',this);return false\"/>";

			if (@ $row->name)
			$output .= "<tr><td>" . @ $icon . "&nbsp;" . $row->name . "</td><td align='right'><table><tr><td align='right'>" . $row->value . "</td></tr></table></td><td> <table border='0'><tr><td>" . @ $diffOutput . "</td><td>" . @ $trendsIcon . "</td><td><img src='$progressBarIcon' width='$percent' height='10' /></td><td align='left'>$percent%</td></tr></table></td></tr>";
		}
		if ($count > $limit && !$frontend)
		$output = "<tr><td colspan='4'>" . $this->renderExpand($group) . "</td></tr>" . $output;

		if (@ $count)
		$output .= "<tr><td colspan='5'><b>" . _JW_STATS_TOTAL . ":</b> " . @ $count . " </td></tr>";

		return $output;
	}

	function renderTotalIntValuesByName($group, $expanded = false, $limit = 5, $frontend = false) {

		$date = floor((JoomlaWatch :: getServerTime() + JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET')) / 3600 / 24);

		$rows = JoomlaWatch :: getTotalIntValuesByName($group, $expanded, $limit);

		$i = 0xFF;

		$output = "";
		$count = JoomlaWatch :: getTotalCountByKey($group);

		foreach ($rows as $row) {

			$origName = $row->name;

			$i -= 3;
			$color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

			if ($count)
			$percent = floor(($row->value / $count) * 1000) / 10;
			else
			$percent = 0;

			if (@ $group == 'referers' || @ $group == 'referers_total') {
				$groupTruncated = JoomlaWatch :: truncate($row->name, JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_STATS'));
				$row->name = "<a href='http://$row->name' title='$row->name' target='_blank'>$groupTruncated</a>";
			} else
			if (@ $group == 'uri' || @ $group == 'uri_total') {
				$groupTruncated = JoomlaWatch :: truncate($row->name, JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_STATS'));
				$row->name = "<a href='$this->mosConfig_live_site$row->name' title='$row->name'>$groupTruncated</a>";
			} else
			if (@ $row->name && ($group == 'browser' || $group == 'os' || $group == 'browser_total' || $group == 'os_total'))
			$icon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/" . strtolower($row->name) . ".gif' />";
			else
			if ($group == 'country' || $group == 'country_total') {
				if ($row->name) {
					$countryName = JoomlaWatch :: countryCodeToCountryName($row->name);
					$icon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/flags/" . strtolower($row->name) . ".png' title='$countryName' alt='$countryName'/>";
				}
			} else
			if (@ $group == 'goals' || @ $group == 'goals_total') {
				$goalName = JoomlaWatch :: getGoalNameById($row->name);
				$groupTruncated = JoomlaWatch :: truncate($goalName, JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_STATS'));
				if (@ $row->name) {
					$row->name = "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_joomlawatch&task=goals&action=edit&goalId=$row->name'>$groupTruncated</a>";
				}
			} else
			if (@ $group == 'users' || @ $group == 'users_total') {
				$row->name = "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_users&task=view&search=$row->name'>$row->name</a>";
			}

			if ($group == 'keywords') {
				// to have characters like " instead of it's code
				$row->name = strip_tags(urldecode($row->name));
			} else
			if ($group == 'ip') {
				if (@ $row->name) {
					$mapsIcon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/map_icon.gif' border='0'  " . JoomlaWatch :: getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->mosConfig_live_site . "/components/com_joomlawatch/tooltip.php?rand=" . JoomlaWatch :: getRand() . "&ip=" . @ $row->name . "',this);return false\"/>";

					if (JoomlaWatch :: getBlockedIp($row->name)) {
						$ip = "<s>" . $row->name . "</s>";
					} else {
						$ip = $row->name;
					}
					$blocked = JoomlaWatch :: getBlockedIp($row->name);
					$country = JoomlaWatch :: countryByIp($row->name);
					$countryName = JoomlaWatch :: countryCodeToCountryName($country);
					if (!$country)
					$country = "none";
					$icon = $mapsIcon . "&nbsp;<img src='$this->mosConfig_live_site/components/com_joomlawatch/flags/" . strtolower($country) . ".png' title='$countryName' alt='$countryName'/>";
					$row->name = "<a  id='$row->name' href='javascript:blockIpToggle(\"$row->name\");' style='color: black;'>" . $ip . "</a>";

				}
			}

			$progressBarIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/progress_bar.gif";

			$color = "ffffff";
			if (@ $row->name) {

				if (!@ $frontend) {
					$output .= "<tr><td align='left' style='background-color: #$color;'>" . @ $icon . "&nbsp;" . $row->name . "</td><td style='background-color: #$color;' align='right'>" . $row->value . "</td><td style='background-color: #$color;'> <table><tr><td><img src='$progressBarIcon' width='$percent' height='10' /></td><td  " . JoomlaWatch :: getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->mosConfig_live_site . "/components/com_joomlawatch/trendtooltip.php?rand=" . JoomlaWatch :: getRand() . "&group=$group&name=$origName&date=$date',this);return false\">$percent%</td></tr></table></td></tr>";
				} else {
					$output .= "<tr><td valign='top' align='right' class='joomlawatch'>$percent%</td><td valign='top' align='left' class='joomlawatch'>" . @ $icon . "&nbsp;</td><td valign='top' align='left' class='joomlawatch'>" . $countryName . "</td></tr>";
				}
			}
		}
		if ($count > $limit && !$frontend)
		$output = "<tr><td colspan='4'>" . $this->renderExpand($group) . "</td></tr>" . $output;

		if (@ $count && !@ $frontend)
		$output .= "<tr><td colspan='5'><b>" . _JW_STATS_TOTAL . ":</b> " . @ $count . " </td></tr>";

		return $output;
	}

	function renderVisitsGraph($week = 0) {
		$output = "";

		$today = date("d.m.Y", JoomlaWatch :: getServerTime());

		$dateExploded = explode('.', $today);

		$dayOfWeek = JoomlaWatch :: dayOfWeek();

		$timestamp = ($week + $dayOfWeek) * 24 * 3600 * 7;

		//	$output .= $dayOfWeek;

		$startTimestamp = $timestamp - (24 * 3600 * $dayOfWeek -1);

		$i = 0xFF;

		//	$startTimestamp = $week * 24 * 3600 * 7 - (24 * 3600 * $dayOfWeek -1);

		//		$output .= $dayOfWeek;

		$maxLoads = JoomlaWatch :: getMaxValueInGroupForWeek("loads", "loads", floor((24 * 3600 * (($week * 7) - 3)) / 3600 / 24 + JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET')));

		for ($sec = 24 * 3600 * (($week * 7) - 3); $sec < 24 * 3600 * (($week * 7) + 4); $sec += 24 * 3600) {
			$i -= 3;
			$color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

			if ($i % 2 == 0)
			$color = "#f5f5f5";
			else
			$color = "#fafafa";

			$percent = 0;
			$count = 0;
			$date = floor($sec / 3600 / 24 + JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET'));

			$stats['unique'] = JoomlaWatch :: getKeyValueInGroupByDate("unique", "unique", $date);
			$stats['loads'] = JoomlaWatch :: getKeyValueInGroupByDate("loads", "loads", $date);
			$stats['hits'] = JoomlaWatch :: getKeyValueInGroupByDate("hits", "hits", $date);

			foreach ($stats as $key => $value) {

				$count = $stats['loads'];
				if ($count)
				$percent = floor(($value / $count) * 100);

				$progressBarIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/progress_bar_$key.gif";

				$output .= "<tr><td style='background-color: $color;'>";
				$dow = date("D", $sec);
				if (@ !$once[$dow]) {
					$output .= substr(date("d.m.Y", $sec), 0, 6) . "&nbsp;" . $dow;
					$once[$dow] = 1;
				}
				$output .= "</td>";

				if ($key == "unique")
				$fontColor = "#0000FF";
				else
				if ($key == "loads")
				$fontColor = "#00C000";
				else
				if ($key == "hits")
				$fontColor = "#aaaaaa";
				else
				$fontColor = "black";
				if ($maxLoads)
				$percentWidth = $percent * $value / $maxLoads;
				else
				$percentWidth = $percent;
				if (@ $value) {
					if ($key == "hits")
					$output .= "<td align='right' style='color:$fontColor; background-color: $color;'>" . $value . "</td><td style='background-color: $color;'> <table cellpadding='0' cellspacing='0' ><tr><td style='background-color: $color;'></td><td style='color:$fontColor; background-color: $color;'>&nbsp;</td></tr></table></td>";
					else
					if ($key == "loads")
					$output .= "<td align='right' style='color:$fontColor; background-color: $color;'>" . $value . "</td><td style='background-color: $color;'> <table cellpadding='0' cellspacing='0' ><tr><td style='background-color: $color;'><img src='$progressBarIcon' width='$percentWidth' height='10' /></td><td style='color:$fontColor; background-color: $color;'></td></tr></table></td>";
					else
					$output .= "<td align='right' style='color:$fontColor; background-color: $color;'>" . $value . "</td><td style='background-color: $color;'> <table cellpadding='0' cellspacing='0' ><tr><td style='background-color: $color;'><img src='$progressBarIcon' width='$percentWidth' height='10' /></td><td style='color:$fontColor; background-color: $color;'>&nbsp;$percent%</td></tr></table></td>";
				} else
				$output .= "<td align='right' style='background-color: $color;'></td><td align='right' style='background-color: $color;'></td>";

				$output .= "</tr>";

			}

		}
		$output .= "<tr><td colspan='3' align='right'>* <span style='color:#0000FF;'>" . _JW_STATS_UNIQUE . "</span>, <span style='color:#00C000;'>" . _JW_STATS_LOADS . "</span>, <span style='color:#aaaaaa;'>" . _JW_STATS_HITS . "</span></td></tr>";

		return $output;
	}

	function renderTable($rows, $bots = false) {

		$output = "";
		$i = 0xFF;
		foreach ($rows as $row) {

			/* reset the values from previous iteration */
			$country = "none";
			$countryName = "";
			$flag = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/flags/$country.png' title='$countryName' alt='$countryName'/>";

			if ($i > 0x00)
			$i -= 2;
			else
			$i = 0xFF;

			$rows2 = JoomlaWatch :: getJoinedURIRows($row->ip);
			$row2 = $rows2[0];

			$color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

			if ($bots == true)
			$color = "ffffff";

			$country = $row2->country;

			if (!$country) {
				$country = JoomlaWatch :: countryByIp($row->ip);
			}
			if (@ $country) {
				$countryName = JoomlaWatch :: countryCodeToCountryName($country);
				$flag = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/flags/$country.png' title='$countryName' alt='$countryName'/>";
				$countryUpper = strtoupper($country);
			}

			$userAgent = JoomlaWatch :: getBrowserByIp($row->ip);

			$browser = "";
			$os = "";
			$browserIcon = "";
			$osIcon = "";

			if (@ $userAgent) {
				$browser = JoomlaWatch :: identifyBrowser(@ $userAgent);
				if (@ $browser)
				$browserIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/" . strtolower($browser) . ".gif";

				if (@ $browserIcon)
				$browser = "<img src='$browserIcon' alt='$userAgent' title='$userAgent' />";

				$os = JoomlaWatch :: identifyOs(@ $userAgent);

				if (@ $os)
				$osIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/" . strtolower($os) . ".gif";

				if (@ $osIcon)
				$os = "<img src='$osIcon' alt='$userAgent' title='$userAgent'/>";
			}

			if ($bots == true && $osIcon)
			continue; // bot icon fix
			if ($bots == true) {
				$osIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/blank.gif";
				$browserIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/blank.gif";
				$browser = "<img src='$browserIcon' alt='$userAgent' title='$userAgent' />";
				$os = "<img src='$osIcon' alt='$userAgent' title='$userAgent'/>";
			}

			/*			if (!$row->addr) {
			$addr = getHostByAddr($row->ip);
			$query = "update #__joomlawatch set host = '".$addr."' where ip = '".$row->ip."' ";
			$this->database->setQuery($query);
			$this->database->query();
			}
			*/
			if (JoomlaWatch :: getBlockedIp($row->ip))
			$ip = "<s>" . $row->ip . "</s>";
			else
			$ip = $row->ip;

			// sometimes happens that timestamp is nothing
			if (!$rows2[0]->timestamp)
			continue;

			$username = "";
			if (@ $row->username)
			$username = "<br/><a href='$this->mosConfig_live_site/administrator/index2.php?option=com_users&task=view&search=$row->username' style='color: black; text-decoration:none;'><i>" . @ $row->username . "</i></a>";
			$ip = "<a id='$row->ip' href='javascript:blockIpToggle(\"$row->ip\");' style='color:black;'>" . $ip . "</a>";

			$date = date("d.m.Y", $rows2[0]->timestamp);
			if ($this->lastDate && $this->lastDate != $date) {
				$output .= "<tr><td colspan='5'><h3>$date</h3></td></tr>";
			}

			$mapsIcon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/map_icon.gif' border='0' " . JoomlaWatch :: getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->mosConfig_live_site . "/components/com_joomlawatch/tooltip.php?rand=" . JoomlaWatch :: getRand() . "&ip=$row->ip',this);return false\"/>";
			$output .= ("<tr><td valign='top' align='left' style='background-color: #$color'>" . @ $row->id . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $mapsIcon . "</td>
																		<td valign='top' align='left' style='background-color: #$color; color: #999999;'>" . @ $countryUpper . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $flag . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'>$ip$username</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $browser . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $os . "</td>
																		<td valign='top' align='left' style='background-color: #$color;' width='100%'>");

			foreach ($rows2 as $row2) {

				$date = date("d.m.Y", $row2->timestamp);

				$this->lastDate = $date;

				$row2->timestamp = date("H:i:s", $row2->timestamp);
				$uriTruncated = JoomlaWatch :: truncate($row2->uri);
				$row2->title = JoomlaWatch :: truncate($row2->title);

				$output .= ("<div id='id$row2->id' style='background-color: #$color'>$row2->timestamp <a href='$row2->uri' target='_blank'>$row2->title</a> $uriTruncated</div>");

			}
			if (@ $row->referer) {
				$refererTruncated = JoomlaWatch :: truncate($row->referer);
				$output .= "<i style='color: gray;'> " . _JW_VISITS_CAME_FROM . ": <a href='$row->referer' target='_blank' style='color: gray;' title='$row->referer'>$refererTruncated</a></i>";
			}

			$output .= ("</td></tr>");
		}

		return $output;
	}

	function renderExpand($element) {
		if (@ $_GET[$element] == "false" || !@ $_GET[$element])
		$operation = "expand";
		else
		$operation = "collapse";

		$operationTranslated = constant("_JW_STATS_" . strtoupper($operation));
		$elementTranslated = constant("_JW_STATS_" . strtoupper($element));

		$output = "<a name='$element'></a><a href=\"javascript:expand('$element')\" id='$element'><img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/$operation.gif' border='0' alt='$operation'/>$operationTranslated&nbsp;$elementTranslated</a>";

		return $output;
	}

	function renderVisitors() {

		$rows = JoomlaWatch :: getVisitors();
		$this->lastDate = "";
		$output = JoomlaWatchHTML :: renderTable($rows);

		return $output;
	}

	function renderBots() {

		$rows = JoomlaWatch :: getBots();
		$this->lastDate = "";
		$output = JoomlaWatchHTML :: renderTable($rows, true);

		return $output;
	}

	function renderSwitched($element, $text, $value) {
		$output = "";
		if ($element != $value) {
			$output .= "<a href=\"javascript:setStatsType('$element');\" id='$element'>$text</a>";
		} else
		$output .= "$text</a>";

		return $output;
	}

	function renderTabClass($name, $value) {
		if ($name == $value)
		return "tab_active";
		else
		return "tab_inactive";
	}

	function renderInputElement($key, & $color, $addToDescription = "") {

		if (!@ $color)
		$color = "#f7f7f7";
		else
		$color = "";

		$value = "";
		$value = JoomlaWatch :: getConfigValue("JOOMLAWATCH_" . $key);
		$defaultValue = @ constant("JOOMLAWATCH_" . $key);

		$type = @ constant("TYPE_JOOMLAWATCH_" . $key);
		if ((strcmp($value, $defaultValue)) && ($type != "checkbox"))
		$changed = "<i>(" . _JW_SETTINGS_DEFAULT . ": <a href=\"javascript:setElementValueById('JOOMLAWATCH_$key','$defaultValue');\">$defaultValue</a>" . ")</i>&nbsp;";

		$desc = "";
		if ($type == "number" && !(is_numeric($value))) {
			$desc .= " <span style='color: red; font-weight: bold;'> WARNING: The value you entered is not a number. JoomlaWatch will not work properly!</span> ";
		}
		$desc .= constant("_JW_DESC_" . $key);
		$desc .= $addToDescription;

		$keyShortened = str_replace("JOOMLAWATCH_", "", $key);
		$output = "<tr><td style='background-color: $color;' align='left'>$keyShortened</td><td style='background-color: $color;' align='center'>";

		$key = "JOOMLAWATCH_" . $key;
		if ($type == "select") {
			if ($value && $value != "Off")
			$checked = "checked";
			else
			$checked = "";
			$output .= "<select align='center' name='$key' id='$key' style='text-align:center;'>";

			$languages = JoomlaWatch :: getAvailableLanguages();
			foreach ($languages as $language) {
				if ($value == $language) {
					$selected = "selected";
				} else {
					$selected = "";
				}
				$output .= "<option align='center' style='text-align:center;' $selected>$language</option>";
			}
			$output .= "</select>";
		} else
		if ($type == "checkbox") {
			if ($value && $value != "Off")
			$checked = "checked";
			else
			$checked = "";
			$output .= "<input type='checkbox' id='$key' name='$key' $checked/>";
		} else
		if ($type == "text") {
			$output .= "<textarea id='$key' cols='15' rows='3' name='$key' style='text-align:center;'>$value</textarea>";

		} else
		$output .= "<input type='text' id='$key' name='$key' value='$value' size='20' style='text-align:center;'/>";

		$output .= "</td><td style='background-color: $color;' align='left'>" . @ $changed . " $desc</td></tr>";
		return $output;
	}

	function renderBlockedIPs() {

		$rows = JoomlaWatch :: getBlockedIPs();
		$output = "";
		if (@ $rows)
		$output .= "<tr><th>country</th><th>IP</th><th>bl.hits</th></tr>";
		if (@ $rows)
		foreach ($rows as $row) {
			$icon = "";
			$country = "";
			if (!strstr($row->ip, "*")) {
				$country = JoomlaWatch :: countryByIp($row->ip);
				$countryName = JoomlaWatch :: countryCodeToCountryName($country);
				if (!$country)
				$country = "none";
				$icon = "<img src='$this->mosConfig_live_site/components/com_joomlawatch/flags/" . @ strtolower($country) . ".png' title='$countryName' alt='$countryName'/>";
			}
			$output .= "<tr><td align='center'>" . $icon . "</td><td align='right'>" . $row->ip . "</td><td align='center'>" . $row->hits . "</td><td>" .
			"<a  id='$row->ip' href='javascript:blockIpToggle(\"$row->ip\");'>unblock</a>";
			"</td></tr>";

		}
		return $output;

	}

	function renderDiff($group, $name, $date, $relDiff, $onlyImage = 0, $title = "") {
		$diffOutput = "";

		if (!$relDiff) {
			$color = "gray";
		} else {
			if ($relDiff < 0) {
				$color = "red";
			} else {
				$color = "green";
			}
		}

		if (!$onlyImage) {
			$diffOutput .= "<table cellpadding='0' cellspacing='0'><tr><td><a href='" . @ $this->mosConfig_live_site . "/administrator/index2.php?option=com_joomlawatch&task=trends&group=$group&name=$name&date=$date' style='color:$color;'>";
			$diffOutput .= "$relDiff%</a></td><td>";
		}
		$diffOutput .= "<img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/trend_$color.gif' border='0' title='$title'/>";
		if (!$onlyImage) {
			$diffOutput .= "</td></tr></table>";
		}

		return $diffOutput;
	}

	function renderDayDiff($group, $name, $date1, $date2, $onlyImage = 0) {
		$relDiff = JoomlaWatch :: getRelDiffOfTwoDays($date1, $date2, $group, $name);
		$output = $this->renderDiff($group, $name, $date2, $relDiff, $onlyImage);
		return $output;

	}

	function renderDayTrends($group, $name, $date) {

		$resultsArray = array ();
		$max = 0;
		$maxDate = 0;
		for ($i = $date -20; $i <= $date; $i++) {
			$value = JoomlaWatch :: getKeyValueInGroupByDate($group, $name, $i);
			if ($max < $value) {
				$max = $value;
				$maxDate = $i;
			}
			$resultsArray[$i - ($date -20)] = $value;
		}

		$helpId = JoomlaWatchHTML :: renderOnlineHelp("trends");
		$output = "<center><h2>" . _JW_TRENDS_DAILY_WEEKLY . " $group : $name $helpId</h2><br/>";
		$output .= "<table cellpadding='0' cellspacing='0'>";
		$output .= "<tr>";
		$progressBarIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/progress_bar_vertical.gif";

		for ($i = $date -20; $i <= $date; $i++) {
			$value = ($resultsArray[$i - ($date -20)]);
			$percent = 0;
			if ($max)
			$percent = floor(($value / $max) * 1000) / 10;
			$output .= "<td valign='bottom' align='center'>";
			$output .= "$value<br/><img src='$progressBarIcon' height='$percent' width='10' /><br/>";
			$output .= $this->renderDayDiff($group, $name, $i -1, $i);
			$output .= JoomlaWatch :: getDateByDay($i, "d.m") . "<br/>";
			$output .= JoomlaWatch :: getDateByDay($i, "D") . "<br/>";
			$output .= "</td>";

		}
		$output .= "</tr>";
		$output .= "</table>";
		$output .= "</center>";

		return $output;

	}
	function renderWeekTrends($group, $name, $date) {

		$resultsArray = array ();
		$max = 0;
		$maxDate = 0;
		// first day has to be monday
		$offset = - (date("N", $date * 24 * 3600) - 1) + 7;
		for ($i = $date -20 * 7 + $offset; $i <= $date + $offset; $i += 7) {
			$value = JoomlaWatch :: getSumOfTwoDays($i, $i -7, $group, $name);
			if ($max < $value) {
				$max = $value;
				$maxDate = $i;
			}
			$resultsArray[$i - ($date -20 * 7)] = $value;
		}

		$output = "<center>";
		$output .= "<table>";
		$output .= "<tr>";
		$progressBarIcon = "$this->mosConfig_live_site/components/com_joomlawatch/icons/progress_bar_vertical_wide.gif";

		for ($i = $date -20 * 7 + $offset; $i <= $date + $offset; $i += 7) {
			$value = ($resultsArray[$i - ($date -20 * 7)]);
			$percent = 0;

			if ($max)
			$percent = floor(($value / $max) * 1000) / 10;
			$output .= "<td valign='bottom' align='center'>";
			$output .= "$value<br/><img src='$progressBarIcon' height='$percent' width='20' /><br/>";
			$relDiff = JoomlaWatch :: getRelDiffOfTwoWeeks($i, $i -7, $group, $name);
			$output .= $this->renderDiff($group, $name, $i -7, $relDiff);
			$output .= date("W/y", $i * 24 * 3600) . "<br/>";
			$output .= "</td>";

		}
		$output .= "</tr>";
		$output .= "</table>";
		$output .= "</center>";

		return $output;

	}
	function renderTrends() {

		$group = @ $_GET['group'];
		$name = @ $_GET['name'];
		$date = @ $_GET['date'];

		$output = "";
		$output .= "<br/><br/>";
		$output .= "<br/><br/>";
		$output .= "<br/><br/>";
		$output .= "<br/><br/>";
		$output .= $this->renderDayTrends($group, $name, $date);
		$output .= "<br/><br/>";
		$output .= $this->renderWeekTrends($group, $name, $date);
		return $output;

	}

	function renderPrint() {
		$group = @ $_GET['group'];
		$name = @ $_GET['name'];
		$date = @ $_GET['date'];
		$task = @ $_GET['task'];
		$action = @ $_GET['action'];

		$print = @ $_GET['print'];
		if (@ $print) {
			$output = "<script language='Javascript'>window.print();</script>";
		} else {
			$output = ("<table width='100%'><tr><td align='right'><a href='$this->mosConfig_live_site/components/com_joomlawatch/trendtooltip.php?rand=" . JoomlaWatch :: getRand() . "&group=$group&name=$name&date=$date&print=1' target='_blank'><img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/print.gif' border='0' title='" . _JW_TOOLTIP_PRINT . "'/></a></td></tr></table>");
		}
		return $output;
	}

	function renderFrontendStats($joomlaWatch) {

		$output = "";
		if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_COUNTRIES')) {
			$cachedItem = $joomlaWatch->getCachedItem($joomlaWatch, "CACHE_FRONTEND_COUNTRIES");
			if (@ $cachedItem) {
				$outputFirst .= stripslashes($cachedItem);
			} else {

				$numberOfCountries = @ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_COUNTRIES_NUM');
				if (!$numberOfCountries)
				$numberOfCountries = 5;

				$ctryOutput = "<h3 class='joomlawatch'>" . _JW_FRONTEND_COUNTRIES . "</h3>";
				$ctryOutput .= "<table width='150' border='0' class='joomlawatch'>";
				$ctryOutputFetched = $this->renderTotalIntValuesByName("country", false, $numberOfCountries, true);
				$ctryOutput .= $ctryOutputFetched;
				$ctryOutput .= "</table>";
				if ($ctryOutputFetched) {
					$joomlaWatch->storeCachedItem($joomlaWatch, "CACHE_FRONTEND_COUNTRIES", $ctryOutput);
				}
				$outputFirst .= $ctryOutput;
			}
		}
		if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS')) {

			$cachedItem = $joomlaWatch->getCachedItem($joomlaWatch, "CACHE_FRONTEND_VISITORS");
			if (@ $cachedItem) {
				$outputSecond .= stripslashes($cachedItem);
			} else {

				$todayDate = $joomlaWatch->jwDateToday();
				$yesterdayDate = $todayDate -1;
				$dow = $joomlaWatch->dayOfWeek();
				$dom = $joomlaWatch->dayOfMonth();
				$numOfDaysActualMonth = date("t", $joomlaWatch->getServerTime());
				$numOfDaysPrevMonth = date("t", $joomlaWatch->getServerTime() - $numOfDaysActualMonth * 24 * 3600);
				$lastMonthsDate = $todayDate - $numOfDaysActualMonth;

				if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS_TODAY'))
				$today = $joomlaWatch->getCountByKeyAndDate("unique", $todayDate);
				if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS_YESTERDAY'))
				$yesterday = $joomlaWatch->getCountByKeyAndDate("unique", $yesterdayDate);
				if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS_THIS_WEEK'))
				$lastWeek = $joomlaWatch->getCountByKeyBetweenDates("unique", $todayDate - $dow -7, $todayDate - $dow);
				if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS_LAST_WEEK'))
				$thisWeek = $joomlaWatch->getCountByKeyBetweenDates("unique", $todayDate - $dow, $todayDate);
				if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS_THIS_MONTH'))
				$thisMonth = $joomlaWatch->getCountByKeyBetweenDates("unique", $todayDate - $dom, $todayDate);
				if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS_LAST_MONTH'))
				$lastMonth = $joomlaWatch->getCountByKeyBetweenDates("unique", $lastMonthsDate - $numOfDaysPrevMonth, $lastMonthsDate);
				if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_VISITORS_TOTAL'))
				$total = $joomlaWatch->getTotalCountByKey("unique");

				$visOutput = "";
				$visOutput .= "<h3 class='joomlawatch'>" . _JW_FRONTEND_VISITORS . "</h3>";
				$visOutput .= "<table width='150' border='0' class='joomlawatch'>";
				if (@ $today)
				$visOutput .= "<tr><td align='left' valign='top' class='joomlawatch'>" . _JW_FRONTEND_TODAY . ": </td><td align='left' valign='top'> " . @ $today . "</td></tr>";
				if (@ $yesterday)
				$visOutput .= "<tr><td align='left' valign='top' class='joomlawatch'>" . _JW_FRONTEND_YESTERDAY . ": </td><td align='left' valign='top'> " . @ $yesterday . "</td></tr>";
				if (@ $thisWeek)
				$visOutput .= "<tr><td align='left' valign='top' class='joomlawatch'>" . _JW_FRONTEND_THIS_WEEK . ": </td><td align='left' valign='top'> " . @ $thisWeek . "</td></tr>";
				if (@ $lastWeek)
				$visOutput .= "<tr><td align='left' valign='top' class='joomlawatch'>" . _JW_FRONTEND_LAST_WEEK . ": </td><td align='left' valign='top'> " . @ $lastWeek . "</td></tr>";
				if (@ $thisMonth)
				$visOutput .= "<tr><td align='left' valign='top' class='joomlawatch'>" . _JW_FRONTEND_THIS_MONTH . ": </td><td align='left' valign='top'> " . @ $thisMonth . "</td></tr>";
				if (@ $lastMonth)
				$visOutput .= "<tr><td align='left' valign='top' class='joomlawatch'>" . _JW_FRONTEND_LAST_MONTH . ": </td><td align='left' valign='top'> " . @ $lastMonth . "</td></tr>";
				if (@ $total)
				$visOutput .= "<tr><td align='left' valign='top' class='joomlawatch'>" . _JW_FRONTEND_TOTAL . ": </td><td align='left' valign='top'> " . @ $total . "</td></tr>";
				$visOutput .= "</table>";

				if (@ $today || @ $yesterday || @ $thisWeek || @ $lastWeek || @ $thisMonth || @ $lastMonth || @ $total) {
					$joomlaWatch->storeCachedItem($joomlaWatch, "CACHE_FRONTEND_VISITORS", $visOutput);
				}
				$outputSecond .= $visOutput;
			}
		}
		// to be able to swap order of Countries/Visitors
		if (@ $joomlaWatch->getConfigValue('JOOMLAWATCH_FRONTEND_COUNTRIES_FIRST')) {
			$output .= "<br/><br/>" . $outputFirst . "<br/>" . $outputSecond . "<br/><br/>";
		} else {
			$output .= "<br/><br/>" . $outputSecond . "<br/>" . $outputFirst . "<br/><br/>";
		}

		return $output;

	}

	function renderOnlineHelp($id) {
		$output = "&nbsp;<a href='http://www.codegravity.com/projects/joomlawatch#doc-$id' target='_blank'><img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/help.gif' border='0' title='" . _JW_TOOLTIP_HELP . ": $id'/></a>";
		return $output;
	}

	function renderCloseWindow() {
		$output = "<div align='right'><a href='javascript:ajax_hideTooltip();'>X " . _JW_TOOLTIP_WINDOW_CLOSE . "</a></div>";
		return $output;
	}

	function renderExistingBackups() {
		$tables = JoomlaWatch :: getExistingBackups();
		$output = "";
		/*		foreach ($tables as $table) {
		$output .= "<a href='$table'>$table</a><br/>";
		}
		*/
		return $output;
	}

}
?>