<?php


/**
* JoomlaWatch - A real-time ajax joomla monitor and live stats
* @version 1.2.0
* @package JoomlaWatch
* @license http://www.gnu.org/licenses/gpl-3.0.txt 	GNU General Public License v3
* @copyright (C) 2007 by Matej Koval - All rights reserved! 
* @website http://www.codegravity.com
**/

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
	die('Restricted access');

if (JOOMLAWATCH_DEBUG)
	error_reporting(E_ALL);
else
	error_reporting(0);

class JoomlaWatch {

	var $database;

	function JoomlaWatch() {
		global $database;
		if (!JOOMLAWATCH_JOOMLA_15) // if Joomla 1.0
			$this->database = $database;
		else
			$this->database = & JFactory :: getDBO();

	}

	function checkPermissions() {
		$rand = $this->getRand();
		if ($rand != addslashes(strip_tags(@ $_GET['rand'])))
			die(_JW_ACCESS_DENIED);
	}

	function getActualDateTime() {
		$date = date("d.m.Y", JoomlaWatch :: getServerTime());
		$time = date("H:i:s", JoomlaWatch :: getServerTime());
		return "$date $time";
	}

	function dayOfWeek() {
		return date("w", JoomlaWatch :: getServerTime());
	}

	function dayOfMonth() {
		return date("d", JoomlaWatch :: getServerTime());
	}

	function getIP2LocationURL($ip) {
		$url = $this->getConfigValue('JOOMLAWATCH_TOOLTIP_URL');
		$result = str_replace("{ip}", $ip, $url);
		//TODO : appears to be a bug in str_ireplace - doesn't work!
		return $result;
	}

	function resetData() {

		$query = sprintf("delete from #__joomlawatch");
		$this->database->setQuery($query);
		$result1 = $this->database->query();

		$query = sprintf("delete from #__joomlawatch_uri");
		$this->database->setQuery($query);
		$result2 = $this->database->query();

		$query = sprintf("delete from #__joomlawatch_info");
		$this->database->setQuery($query);
		$result3 = $this->database->query();

		$query = sprintf("delete from #__joomlawatch_blocked");
		$this->database->setQuery($query);
		$result4 = $this->database->query();

		$query = sprintf("delete from #__joomlawatch_goals");
		$this->database->setQuery($query);
		$result4 = $this->database->query();

		$query = sprintf("delete from #__joomlawatch_cache");
		$this->database->setQuery($query);
		$result4 = $this->database->query();

		return ($result1 & $result2 & $result3 & $result4);

	}

	function getRand() {
		$query = sprintf("select value from #__joomlawatch_config where name = 'rand' order by id desc limit 1; ");
		$this->database->setQuery($query);
		$rand = $this->database->loadResult();
		return $rand;

	}
	function isModulePublished() {
		$query = sprintf("select published from #__modules where module = 'mod_joomlawatch_agent' order by id desc limit 1; ");
		$this->database->setQuery($query);
		$published = $this->database->loadResult();
		return $published;
	}

	function isIPIgnored($key) {
		$query = sprintf("select value from #__joomlawatch_config where name='JOOMLAWATCH_IGNORE_IP' limit 1");
		$this->database->setQuery($query);
		$rows = $this->database->loadObjectList();
		$rowValue = $this->database->loadResult();
		$exploded = explode("\n", $rowValue);
		foreach ($exploded as $value) {
			if ($this->wildcardSearch(trim($value), $key)) {
				return true;
			}
		}
		return false;
	}
	function isURIIgnored($key) {
		$query = sprintf("select value from #__joomlawatch_config where name='JOOMLAWATCH_IGNORE_URI' limit 1");
		$this->database->setQuery($query);
		$rowValue = $this->database->loadResult();
		$exploded = explode("\n", $rowValue);
		foreach ($exploded as $value) {
			if ($this->wildcardSearch(trim($value), $key)) {
				return true;
			}
		}
		return false;
	}

	function getLastVisitId() {
		$query = sprintf("select id from #__joomlawatch_uri order by id desc limit 1");
		$this->database->setQuery($query);
		$last = $this->database->loadResult();
		return $last;
	}

	function deleteOldVisits() {
		$query = sprintf("select id as maxid from #__joomlawatch where browser is not NULL order by id desc limit 1");
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		$maxidvisitors = @ $row->maxid - JoomlaWatch :: getConfigValue('JOOMLAWATCH_MAXID_VISITORS');

		$query = sprintf("delete from #__joomlawatch where (browser is not NULL and id < '%d') ", (int) $maxidvisitors);
		$this->database->setQuery($query);
		$this->database->query();

		$query = sprintf("delete from #__joomlawatch_uri where fk < '%d' ", (int) $maxidvisitors);
		$this->database->setQuery($query);
		$this->database->query();

		$maxidbots = @ $row->maxid - JoomlaWatch :: getConfigValue('JOOMLAWATCH_MAXID_BOTS');

		$query = sprintf("select id from #__joomlawatch where (id < '%d' and browser is NULL) order by id desc", (int) $maxidbots);
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();

		foreach ($rows as $row) {

			$query = sprintf("delete from #__joomlawatch where id = '%d' ", (int) $row->id);
			$this->database->setQuery($query);
			$this->database->query();

			$query = sprintf("delete from #__joomlawatch_uri where fk = '%d' ", (int) $row->id);
			$this->database->setQuery($query);
			$this->database->query();

		}

		if (JoomlaWatch :: getConfigValue('JOOMLAWATCH_STATS_KEEP_DAYS') != 0) { // 0 = infinite
			$today = JoomlaWatch :: jwDateToday();
			$daysToKeep = $today -JoomlaWatch :: getConfigValue('JOOMLAWATCH_STATS_KEEP_DAYS');

			$query = sprintf("delete from #__joomlawatch_info where date < '%d' ", (int) $daysToKeep);
			$this->database->setQuery($query);
			$this->database->query();
		}

		//delete all IP records that are less than 1%
		$value = JoomlaWatch :: getConfigValue('JOOMLAWATCH_STATS_IP_HITS');
		$query = sprintf("DELETE FROM `#__joomlawatch_info` where (`group` = 'ip' and date < '%d' and value < '%s')", (int) $today, JoomlaWatch :: sanitize_sql_string($value));
		$this->database->setQuery($query);
		$this->database->query();

		//TODO: change to 2% instead of 20 hits 
		/*
				//delete all IP records that are less than 1%
				$value = JoomlaWatch :: getConfigValue('JOOMLAWATCH_STATS_URL_HITS');
				$query = sprintf("DELETE FROM `#__joomlawatch_info` where (`group` = 'referers' and date < '$today' and value < '$value')";
				$this->database->setQuery($query);
				$this->database->query();
		*/
	}

	function jwDateToday() {
		$today = floor(JoomlaWatch :: getServerTime() / 3600 / 24 + JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET'));
		return $today;
	}

	function jwDateBySeconds($sec) {
		$date = floor($sec / 3600 / 24 + JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET'));
		return $date;
	}

	function getURI() {
		$redirURI = addslashes(strip_tags(@ $_SERVER[JoomlaWatch :: getConfigValue('JOOMLAWATCH_SERVER_URI_KEY')]));
		$uri = addslashes(strip_tags(@ $_SERVER['REQUEST_URI']));

		if (@ $redirURI && @ substr($redirURI, -9, 9) != "index.php")
			$uri = $redirURI;

		return $uri;
	}

	function dieWithBlockingMessage($ip) {
		$this->increaseHitsForBlockedIp($ip);
		die(JoomlaWatch :: getConfigValue('JOOMLAWATCH_BLOCKING_MESSAGE'));
	}

	function insertVisit($liveSite) {
		global $mainframe;

		$ip = addslashes(strip_tags(@ $_SERVER['REMOTE_ADDR']));
		$uri = $this->getURI();
		if (JoomlaWatch :: isIPIgnored($ip))
			return true;
		if (JoomlaWatch :: isURIIgnored($uri))
			return true;

		$referer = addslashes(strip_tags(@ $_SERVER['HTTP_REFERER']));
		$referer = strip_tags($referer);
		$sameSite = strstr($referer, $liveSite);

		if (@ !$sameSite) {
			preg_match('@^(?:http://)?([^/]+)@i', $referer, $matches);
			$host = @ $matches[1];
			$this->increaseKeyValueInGroup("referers", $host);
			// keywords from google
			preg_match('!q=([^&.]*)!', $referer, $matches);
			$query = @ $matches[1];
			$query = str_replace("%2B", "+", $query);
			$keywords = explode('+', $query);
			foreach ($keywords as $keyword) {

				$keyword = @ strtolower($keyword);
				if ($keyword) {
					$this->increaseKeyValueInGroup("keywords", $keyword);
				}
			}
		}
		if (JoomlaWatch :: getServerTime() % JoomlaWatch :: getConfigValue('JOOMLAWATCH_MAXID_BOTS') == 0) {
			$this->deleteOldVisits();
		}

		$time = JoomlaWatch :: getServerTime();

		$count = $this->getBlockedIp($ip);
		if (@ $count) {
			$this->dieWithBlockingMessage($ip);
		}

		$query = sprintf("select id, username from #__joomlawatch where ip = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		$id = @ $row->id;
		$username = @ $row->username;

		$title = @ $mainframe->getPageTitle();
		$userObject = @ $mainframe->getUser();
		if (!@ $id) {

			$referer = strip_tags($referer);
			$ip = strip_tags($ip);
			$query = sprintf("insert into #__joomlawatch (id, ip, country, browser, referer) values ('', '%s',  NULL, NULL, '%s') ", JoomlaWatch :: sanitize_sql_string($ip), JoomlaWatch :: sanitize_sql_string($referer));
			$this->database->setQuery($query);
			$this->database->query();

			$query = sprintf("select id from #__joomlawatch where ip = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($ip));
			$this->database->setQuery($query);
			$rows = @ $this->database->loadObjectList();
			$row = @ $rows[0];
			$id = @ $row->id;

			$query = sprintf("insert into #__joomlawatch_uri (id, fk, timestamp, uri, title) values ('', '%d', '%d', '%s', '%s') ", (int) $id, (int) $time, JoomlaWatch :: sanitize_sql_string($uri), JoomlaWatch :: sanitize_sql_string($title));
			$this->database->setQuery($query);
			$this->database->query();
		} else {
			$query = sprintf("insert into #__joomlawatch_uri (id, fk, timestamp, uri, title) values ('', '%d', '%d', '%s', '%s') ", (int) $id, (int) $time, JoomlaWatch :: sanitize_sql_string($uri), JoomlaWatch :: sanitize_sql_string($title));
			$this->database->setQuery($query);
			$this->database->query();
		}

		$newUsername = @ $userObject->username;
		if (($username != $newUsername) && ($newUsername)) {
			$query = sprintf("update #__joomlawatch set username = '%s' where ip = '%s'", JoomlaWatch :: sanitize_sql_string($newUsername), JoomlaWatch :: sanitize_sql_string($ip));
			$this->database->setQuery($query);
			$this->database->query();
		}
		if (@ $newUsername)
			$this->increaseKeyValueInGroup("users", $newUsername);

		if (JoomlaWatch :: getConfigValue('JOOMLAWATCH_IP_STATS'))
			$this->increaseKeyValueInGroup("ip", $ip); //add ip watching

		$this->increaseKeyValueInGroup("hits", "hits");

		$this->checkGoals($title, $newUsername, $ip, $referer);

	}

	function updateVisitByBrowser($uri) {
		$ip = addslashes(strip_tags($_SERVER['REMOTE_ADDR']));
		$userAgent = addslashes(strip_tags(@ $_SERVER['HTTP_USER_AGENT']));

		if (JoomlaWatch :: isIPIgnored($ip))
			return true;
		if (JoomlaWatch :: isURIIgnored($uri))
			return true;

		$this->updateBrowserStats($ip, $userAgent);

		$query = sprintf("select #__joomlawatch_uri.uri from #__joomlawatch left join #__joomlawatch_uri on #__joomlawatch.id = #__joomlawatch_uri.fk  where (#__joomlawatch.ip = '%s' and #__joomlawatch.browser is not null) order by #__joomlawatch_uri.timestamp desc limit 1", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		$uri = @ $row->uri;

		$this->increaseKeyValueInGroup("uri", $uri);
		$this->increaseKeyValueInGroup("loads", "loads");

	}

	function increaseKeyValueInGroup($name, $key) {
		if (!@ $key)
			return;

		$date = floor((JoomlaWatch :: getServerTime() + JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET')) / 3600 / 24);

		$query = sprintf("select id,value from #__joomlawatch_info where (`group` = '%s' and name = '%s' and date = '%d') ", JoomlaWatch :: sanitize_sql_string($name), JoomlaWatch :: sanitize_sql_string($key), (int) $date);
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		$count = @ $row->value;

		if (@ $count) {
			$count++;
			$query = sprintf("update #__joomlawatch_info set value = '%d' where (`group` = '%s' and name = '%s' and date = '%d') ", (int) $count, JoomlaWatch :: sanitize_sql_string($name), JoomlaWatch :: sanitize_sql_string($key), (int) $date);
			$this->database->setQuery($query);
			$this->database->query();
		} else {

			$query = sprintf("insert into #__joomlawatch_info (id, `group`, date, name, value) values ('', '%s', '%d', '%s', 1)", JoomlaWatch :: sanitize_sql_string($name), (int) $date, JoomlaWatch :: sanitize_sql_string($key));
			$this->database->setQuery($query);
			$this->database->query();

		}
	}

	function getMaxValueInGroupForWeek($name, $key, $dateWeekStart) {
		if (!@ $key)
			return;
		$dateWeekEnd = $dateWeekStart +7;

		$query = sprintf("select max(value) as value from #__joomlawatch_info where (`group` = '%s' and name = '%s' and `date` >= '%d' and `date` <= '%d') ", JoomlaWatch :: sanitize_sql_string($name), JoomlaWatch :: sanitize_sql_string($key), (int) $dateWeekStart, (int) $dateWeekEnd);
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		$value = @ $row->value;

		return $value;
	}

	function getKeyValueInGroupByDate($group, $name, $date) {
		if (!@ $name)
			return;

		$query = sprintf("select id,value from #__joomlawatch_info where (`group` = '%s' and name = '%s' and date = '%d') ", JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name), (int) $date);
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		$value = @ $row->value;

		return $value;
	}

	function getCountByKeyAndDate($group, $date) {
		$query = sprintf("select sum(value) as value from #__joomlawatch_info where (`group` = '%s' and date = '%d') order by id desc limit 1", JoomlaWatch :: sanitize_sql_string($group), (int) $date);
		$this->database->setQuery($query);
		$count = $this->database->loadResult();
		return $count;
	}

	function getCountByKeyBetweenDates($group, $date1, $date2) {
		$query = sprintf("select sum(value) as value from #__joomlawatch_info where (`group` = '%s' and (`date`>'%d' and `date`<='%d') ) order by id desc limit 1", JoomlaWatch :: sanitize_sql_string($group), (int) $date1, (int) $date2);
		$this->database->setQuery($query);
		$count = $this->database->loadResult();
		return $count;
	}

	function getTotalCountByKey($group) {
		$query = sprintf(" SELECT sum( value ) AS value FROM #__joomlawatch_info WHERE `group` = '%s' LIMIT 1 ", JoomlaWatch :: sanitize_sql_string($group));
		$this->database->setQuery($query);
		$count = $this->database->loadResult();
		return $count;
	}

	function updateHelperCountByKey($key, $value) {
		$count = $this->getCountByKey($key);

		if (@ $count) {
			$query = sprintf("update #__joomlawatch_config set value = '%s' where (name = '%s' and date = '%d')", JoomlaWatch :: sanitize_sql_string($value), JoomlaWatch :: sanitize_sql_string($key), (int) $date);
			$this->database->setQuery($query);
			$this->database->query();
		} else {
			$query = sprintf("insert into #__joomlawatch_config values ('', '%s', '%s')", JoomlaWatch :: sanitize_sql_string($key), JoomlaWatch :: sanitize_sql_string($value));
			$this->database->setQuery($query);
			$this->database->query();
		}
	}

	function updateBrowserStats($ip, $userAgent) {
		$query = sprintf("select id,browser from #__joomlawatch where ip = '%s' order by id asc limit 1", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		if (@ $row->browser == '')
			$firstTime = true;

		$country = $this->countryByIp($ip);

		$query = sprintf("select browser,country from #__joomlawatch where ip = '%s' order by browser desc limit 1", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];

		//check if first time visit
		if (@ !$row->browser) {

			$userAgent = strip_tags($userAgent);
			if (@ $userAgent) {
				// to make sure it's really unique for today 
				$this->increaseKeyValueInGroup("unique", "unique");
			}

			/* Googlebot patch identifier: Googlebot-Image/1.0 */
			if (!strstr($userAgent, "Googlebot")) {
				$query = sprintf("update #__joomlawatch set browser = '%s' where ip = '%s'", JoomlaWatch :: sanitize_sql_string($userAgent), JoomlaWatch :: sanitize_sql_string($ip));
				$this->database->setQuery($query);
				$this->database->query();
			}

			$browser = $this->identifyBrowser(@ $userAgent);
			$this->increaseKeyValueInGroup("browser", $browser);

			$os = $this->identifyOs(@ $userAgent);
			$this->increaseKeyValueInGroup("os", $os);

			$this->increaseKeyValueInGroup("country", $country);

		}

	}

	function countryByIp($ip) {
		if ($ip == '127.0.0.1')
			return;

		$query3 = sprintf("select ip, country from #__joomlawatch where (ip = '%s' and country is not NULL) limit 1", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query3);
		$this->database->query();
		$rows3 = $this->database->loadObjectList();
		$row3 = @ $rows3[0];

		if (@ !$row3->country) {

			$iplook = new ip2country($ip);
			$iplook->UseDB = true;
			$iplook->db_tablename = "#__joomlawatch_ip2c";

			if (($iplook->LookUp())) {
				$country = strtolower($iplook->Country);
				$query3 = sprintf("update #__joomlawatch set country = '%s' where ip = '%s'", JoomlaWatch :: sanitize_sql_string($country), JoomlaWatch :: sanitize_sql_string($ip));
				$this->database->setQuery($query3);
				$this->database->query();
			}

		} else {
			$country = $row3->country;
		}

		return @ $country;
	}

	function truncate($str, $len = "") {
		if (@ !$len)
			$len = JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_VISITS');

		if (strlen($str) < $len)
			return $str;
		else
			return substr($str, 0, $len) . "...";
	}

	function identifyOs($userAgent) {
		if (stristr($userAgent, "Mac"))
			$os = "Mac";
		else
			if (stristr($userAgent, "Linux"))
				$os = "Linux";
			else
				if (stristr($userAgent, "Windows 95"))
					$os = "Windows98";
				else
					if (stristr($userAgent, "Windows 98"))
						$os = "Windows98";
					else
						if (stristr($userAgent, "Windows ME"))
							$os = "Windows98";
						else
							if (stristr($userAgent, "Windows NT 4.0"))
								$os = "WindowsNT";
							else
								if (stristr($userAgent, "Windows NT 6.0"))
									$os = "WindowsVista";
								else
									if (stristr($userAgent, "Windows NT 5.1"))
										$os = "WindowsXP";
									else
										if (stristr($userAgent, "Windows"))
											$os = "Windows";

		return @ $os;
	}

	function identifyBrowser($userAgent) {
		if (stristr($userAgent, "Safari"))
			$browser = "Safari";
		else
			if (stristr($userAgent, "MSIE"))
				$browser = "Explorer";
			else
				if (stristr($userAgent, "Firefox"))
					$browser = "Firefox";
				else
					if (stristr($userAgent, "Opera"))
						$browser = "Opera";
					else
						if (stristr($userAgent, "Mozilla"))
							$browser = "Mozilla";

		return @ $browser;
	}

	function getBrowserByIp($ip) {
		if ($ip == '127.0.0.1')
			return;

		$query = sprintf("select browser from #__joomlawatch where (ip = '%s' and browser is not NULL) order by browser desc limit 1", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$this->database->query();
		$browser = $this->database->loadResult();
		return $browser;
	}

	function blockIp($ip) {
		$query = sprintf("insert into #__joomlawatch_blocked values ('','%s','')", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$this->database->query();
	}
	function unblockIp($ip) {
		$query = sprintf("delete from #__joomlawatch_blocked where ip = '%s'", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$this->database->query();
	}

	function blockIpToggle($ip) {

		$count = $this->getBlockedIp($ip);

		if (!$count) {
			$this->blockIp($ip);
		} else {
			$this->unblockIp($ip);
		}

	}
	function searchBlockedIp($ip) {
		$query = sprintf("select count(ip) as count from #__joomlawatch_blocked where ip = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($ip)); //starting % ommited 
		$this->database->setQuery($query);
		$this->database->query();
		$count = $this->database->loadResult();
		return $count;
	}
	function searchBlockedIpWildcard($term) {
		$query = sprintf("select count(ip) as count from #__joomlawatch_blocked where ip like '%s%%' limit 1", JoomlaWatch :: sanitize_sql_string($term)); //starting % ommited 
		$this->database->setQuery($query);
		$this->database->query();
		$count = $this->database->loadResult();
		return $count;
	}

	function getBlockedIp($ip) {

		$ipExploded = explode('.', $ip);

		if (JoomlaWatch :: searchBlockedIp($ip)) {
			return $ip;
		} else {
			$ip = $ipExploded[0] . "." . $ipExploded[1] . "." . $ipExploded[2] . ".*";
			if (JoomlaWatch :: searchBlockedIpWildcard($ip)) {
				return $ip;
			} else {
				$ip = $ipExploded[0] . "." . $ipExploded[1] . ".*";
				if (JoomlaWatch :: searchBlockedIpWildcard($ip)) {
					return $ip;
				} else {
					$ip = $ipExploded[0] . ".*";
					if (JoomlaWatch :: searchBlockedIpWildcard($ip))
						return $ip;
				}

			}

		}

		return "";

	}

	function getConfigValue($key) {

		$query = sprintf("select value from #__joomlawatch_config where name = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($key));
		$this->database->setQuery($query);
		$this->database->query();
		$value = $this->database->loadResult();
		// explicit off for checkboxes
		if ($value == "Off") {
			return false;
		}
		if ($value) {
			return addslashes($value);
		} else {
			return constant($key);
		}

	}

	function saveConfigValue($key, $value) {
		$query = sprintf("select count(name) as count from #__joomlawatch_config where name = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($key));
		$this->database->setQuery($query);
		$this->database->query();
		$count = $this->database->loadResult();

		if ($count) { //update
			$query = sprintf("update #__joomlawatch_config set value = '%s' where name = '%s'", JoomlaWatch :: sanitize_sql_string($value), JoomlaWatch :: sanitize_sql_string($key));
			$this->database->setQuery($query);
			$this->database->query();
		} else { //insert
			$query = sprintf("insert into #__joomlawatch_config values ('','$key','$value')", JoomlaWatch :: sanitize_sql_string($key), JoomlaWatch :: sanitize_sql_string($value));
			$this->database->setQuery($query);
			$this->database->query();

		}

	}
	function saveSettings($post) {

		foreach ($post as $key => $value) {
			if (strstr($key, "JOOMLAWATCH")) {
				$this->saveConfigValue($key, $value);
			}
		}
		//hack :( explicitly save checkbox values
		$array = array (
			'JOOMLAWATCH_FRONTEND_LINK',
			'JOOMLAWATCH_FRONTEND_HIDE_LOGO',
			'JOOMLAWATCH_IP_STATS',
			'JOOMLAWATCH_FRONTEND_LINK',
			'JOOMLAWATCH_FRONTEND_COUNTRIES',
			'JOOMLAWATCH_FRONTEND_COUNTRIES_FIRST',
			'JOOMLAWATCH_FRONTEND_VISITORS',
			'JOOMLAWATCH_FRONTEND_VISITORS_TODAY',
			'JOOMLAWATCH_FRONTEND_VISITORS_YESTERDAY',
			'JOOMLAWATCH_FRONTEND_VISITORS_THIS_WEEK',
			'JOOMLAWATCH_FRONTEND_VISITORS_LAST_WEEK',
			'JOOMLAWATCH_FRONTEND_VISITORS_THIS_MONTH',
			'JOOMLAWATCH_FRONTEND_VISITORS_LAST_MONTH',
			'JOOMLAWATCH_FRONTEND_VISITORS_TOTAL',
			'JOOMLAWATCH_TOOLTIP_ONCLICK'
		);
		foreach ($array as $key => $value) {
			if (@ !$post[$value]) {
				$this->saveConfigValue($value, "Off");
			}
		}
		// explicitly reset chache because of frontend settings
		$this->clearCache();

		return true;
	}

	function increaseHitsForBlockedIp($ip) {

		$ip = JoomlaWatch :: getBlockedIp($ip);
		$query = sprintf("select hits from #__joomlawatch_blocked where ip = '$ip' ", JoomlaWatch :: sanitize_sql_string($ip));
		$this->database->setQuery($query);
		$this->database->query();
		$hits = $this->database->loadResult();

		$hits++;
		if ($hits) { //update
			$query = sprintf("update #__joomlawatch_blocked set hits = '%d' where ip = '%s'", (int) $hits, JoomlaWatch :: sanitize_sql_string($ip));
			$this->database->setQuery($query);
			$this->database->query();
		}
	}

	function countryCodeToCountryName($code) {
		$query = sprintf("select country from #__joomlawatch_cc2c where cc = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($code));
		$this->database->setQuery($query);
		$this->database->query();
		$countryName = $this->database->loadResult();
		return $countryName;
	}
	function getDateByDay($day, $format = "d.m.Y") {

		$date = date($format, $day * 3600 * 24);
		$output = $date;

		if ($format == "d.m.Y" && ($date == date($format, JoomlaWatch :: getServerTime())))
			$output .= " (" . _JW_STATS_TODAY . ")";

		return $output;
	}

	function getBlockedIPs() {
		$query = sprintf("select ip,hits from #__joomlawatch_blocked order by hits desc ");
		$this->database->setQuery($query);
		return $rows = $this->database->loadObjectList();
	}

	function getBots() {

		$limit = 0;
		$limit = JoomlaWatch :: getConfigValue('JOOMLAWATCH_LIMIT_BOTS');
		$query = sprintf("select ip, referer, username from #__joomlawatch where (browser is NULL) order by id desc limit %d", (int) $limit);
		$this->database->setQuery($query);
		$rows = $this->database->loadObjectList();
		return $rows;

	}
	function getVisitors() {
		$limit = 0;
		$limit = JoomlaWatch :: getConfigValue('JOOMLAWATCH_LIMIT_VISITORS');
		$query = sprintf("select ip, referer, username from #__joomlawatch where (browser is not NULL and browser != '') order by id desc limit %d", (int) $limit);
		$this->database->setQuery($query);
		$rows = $this->database->loadObjectList();
		return $rows;
	}

	function getJoinedURIRows($ip) {
		$query2 = "SELECT * FROM #__joomlawatch LEFT JOIN #__joomlawatch_uri ON #__joomlawatch.id = #__joomlawatch_uri.fk where ip = '$ip' ORDER BY #__joomlawatch_uri.timestamp desc";
		$this->database->setQuery($query2);
		$rows = $this->database->loadObjectList();
		return $rows;
	}
	function getTotalIntValuesByName($name, $expanded, $limit) {

		$maxLimit = JoomlaWatch :: getConfigValue('JOOMLAWATCH_STATS_MAX_ROWS');
		if (@ $expanded == true)
			$query = sprintf("select name, sum(value) as value from #__joomlawatch_info where (`group` = '%s') group by name order by value desc limit %d", JoomlaWatch :: sanitize_sql_string($name), (int) $maxLimit);
		else
			$query = sprintf("select name, sum(value) as value from #__joomlawatch_info where (`group` = '%s') group by name order by value desc limit %d", JoomlaWatch :: sanitize_sql_string($name), (int) $limit);
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		return $rows;
	}

	function getIntValuesByName($name, $date, $expanded, $limit) {

		if ($date == "")
			$date = floor((time() + JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET')) / 3600 / 24);

		if (@ $expanded == true)
			$query = sprintf("select name, value from #__joomlawatch_info where (`group` = '%s' and `date` = '%d') order by value desc limit 20", JoomlaWatch :: sanitize_sql_string($name), (int) $date);
		else
			$query = sprintf("select name, value from #__joomlawatch_info where (`group` = '%s' and `date` = '%d') order by value desc limit $limit", JoomlaWatch :: sanitize_sql_string($name), (int) $date);

		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		return $rows;
	}

	function getServerTime() {
		return time() + JoomlaWatch :: getConfigValue('JOOMLAWATCH_TIMEZONE_OFFSET') * 3600;
	}

	function getSumOfTwoDays($date1, $date2, $group, $name) {
		$query = sprintf("SELECT sum(value) as value FROM `#__joomlawatch_info` WHERE ( (`date`>'%d' and `date`<='%d') and `group` = '%s' and `name` = '%s')", (int) $date2, (int) $date1, JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name));
		$this->database->setQuery($query);
		$value = $this->database->loadResult();
		return ($value);
	}

	function getRelDiffOfTwoDays($date1, $date2, $group, $name) {

		$query = sprintf("SELECT sum(value) as value FROM `#__joomlawatch_info` WHERE (`date`='%d' and `group` = '%s' and `name` = '%s')", (int) $date2, JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name));
		$this->database->setQuery($query);
		$value2 = $this->database->loadResult();

		$query = sprintf("SELECT sum(value) as value FROM `#__joomlawatch_info` WHERE (`date`='%d' and `group` = '%s'  and `name` = '%s')", (int) $date1, JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name));
		$this->database->setQuery($query);
		$value1 = $this->database->loadResult();

		$diff = 0;
		if ($value1) {
			$diff = floor((($value2 - $value1) / $value1) * 1000) / 10;
		} else {
			$diff = $value2;
		}

		return $diff;

	}

	function getRelDiffOfTwoWeeks($week1, $week2, $group, $name) {

		$startOfWeek1 = $week1 -7;
		$endOfWeek1 = $week1;
		$startOfWeek2 = $week2 -7;
		$endOfWeek2 = $week2;

		$query = sprintf("SELECT sum(value) as value FROM `#__joomlawatch_info` WHERE ( (`date`>'%d' and `date` <= '%d') and `group` = '%s' and `name` = '%s')", (int) $startOfWeek1, (int) $endOfWeek1, JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name));
		$this->database->setQuery($query);
		$value2 = $this->database->loadResult();

		$query = sprintf("SELECT sum(value) as value FROM `#__joomlawatch_info` WHERE ( (`date`>'%d' and `date` <= '%d') and `group` = '%s'  and `name` = '%s')", (int) $startOfWeek2, (int) $endOfWeek2, JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name));
		$this->database->setQuery($query);
		$value1 = $this->database->loadResult();

		$diff = 0;
		if ($value1) {
			$diff = floor((($value2 - $value1) / $value1) * 1000) / 10;
		} else {
			$diff = $value2;
		}

		return $diff;
	}

	function getRelDiffOfDay($date, $group, $name, $diff) {
		$query = sprintf("SELECT sum(value) as value FROM `#__joomlawatch_info` WHERE (`date`='%d' and `group` = '%s' and `name` = '%s')", (int) $date, JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name));
		$this->database->setQuery($query);
		$value = $this->database->loadResult();
		if ($value)
			$percent = floor(($diff / $value) * 1000) / 10;

		return @ $percent;

	}

	function getRelDiffOfWeek($date, $group, $name, $diff) {

		$date1 = $date -7;
		$date2 = $date;
		$query = sprintf("SELECT sum(value) as value FROM `#__joomlawatch_info` WHERE ( (`date`<='%d'  and `date`>'%d') and `group` = '%s' and `name` = '%s')", (int) $date2, (int) $date1, JoomlaWatch :: sanitize_sql_string($group), JoomlaWatch :: sanitize_sql_string($name));
		$this->database->setQuery($query);
		$value = $this->database->loadResult();
		$percent = 0;
		if ($value)
			$percent = floor(($diff / $value) * 1000) / 10;

		return @ $percent;

	}

	function getGoalNameById($id) {
		$query = sprintf("select name from #__joomlawatch_goals where id = '%d'", (int) $id);
		$this->database->setQuery($query);
		$this->database->query();
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		return @ $row->name;
	}

	// fnmatch PHP function only on UNIX :(, this replaces the wildcard search
	function wildcardSearch($pattern, $string) {
		return preg_match("#^" . strtr(preg_quote($pattern, '#'), array (
			'\*' => '.*',
			'\?' => '.'
		)) . "$#i", $string);
	}

	function checkGoals($title, $username, $ip, $came_from) {
		global $mainframe;

		$query = sprintf("select * from #__joomlawatch_goals");
		$this->database->setQuery($query);
		$this->database->query();
		$rows = $this->database->loadObjectList();
		foreach ($rows as $row) {

			$achieved = false;
			if ($row->disabled)
				continue;

			if (trim($row->uri_condition)) {
				if ($this->wildcardSearch($row->uri_condition, trim($this->getURI()))) {
					$achieved = true;
				} else
					continue;
			}
			if (trim($row->get_condition)) {
				if ($this->wildcardSearch($row->get_condition, trim($_GET[$row->get_var]))) {
					$achieved = true;
				} else
					if ($row->get_var == "*") {
						foreach ($_GET as $get) {
							if ($this->wildcardSearch($row->get_condition, trim($get))) {
								$achieved = true;
							}
						}
					} else
						continue;
			}
			if (trim($row->post_condition)) {
				if ($this->wildcardSearch($row->post_condition, trim($_POST[$row->post_var]))) {
					$achieved = true;
				} else
					if ($row->post_var == "*") {
						foreach ($_POST as $post) {
							if ($this->wildcardSearch($row->post_condition, trim($post))) {
								$achieved = true;
							}
						}
					} else
						continue;
			}
			if (trim($row->title_condition)) {
				if ($this->wildcardSearch($row->title_condition, trim($title))) {
					$achieved = true;
				} else
					continue;
			}
			if (trim($row->username_condition)) {
				if ($this->wildcardSearch($row->username_condition, trim($username))) {
					$achieved = true;
				} else
					continue;
			}
			if (trim($row->ip_condition)) {
				if ($this->wildcardSearch($row->ip_condition, trim($ip))) {
					$achieved = true;
				} else
					continue;
			}
			if (trim($row->came_from_condition)) {
				if ($this->wildcardSearch($row->came_from_condition, trim($came_from))) {
					$achieved = true;
				} else
					continue;
			}

			if ($achieved) {
				$this->increaseKeyValueInGroup("goals", $row->id);

				if (@ $row->redirect) {
					// for 1.0 only ?
					mosRedirect(@ $row->redirect);
				}
				if (@ $row->block) {
					$this->dieWithBlockingMessage($ip);
				}
			}

		}
	}
	function getDayByTimestamp($timestamp) {
		return floor(($timestamp +JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET')) / 24 / 3600 + JoomlaWatch :: getConfigValue('JOOMLAWATCH_WEEK_OFFSET'));
	}

	function getWeekByTimestamp($timestamp) {
		return ceil(($timestamp +JoomlaWatch :: getConfigValue('JOOMLAWATCH_DAY_OFFSET')) / 7 / 24 / 3600 + JoomlaWatch :: getConfigValue('JOOMLAWATCH_WEEK_OFFSET'));
	}

	function getGoalById($id) {

		//lower case id
		$id = strtolower($id);
		$query = sprintf("select * from #__joomlawatch_goals where id = '%d' limit 1 ", (int) $id);
		$this->database->setQuery($query);
		$rows = $this->database->loadAssocList();
		$row = @ $rows[0];
		return $row;

	}

	function saveGoal($post) {
		$id = @ $post['id'];
		if (@ $id) {
			//update
			$query = sprintf("update #__joomlawatch_goals  set ");
			$length = sizeof($post);
			if (@ $post['option'])
				$length = $length -1;
			$i = 0;
			foreach ($post as $key => $value) {
				$i++;
				if ($key == "id")
					continue;
				$key = strtolower($key);
				$query .= sprintf("%s = '%s' ", JoomlaWatch :: sanitize_sql_string($key), JoomlaWatch :: sanitize_sql_string($value));
				if ($i < $length -1)
					$query .= ", ";
			}
			$query .= sprintf(" where id = '%d'", (int) $id);

			$this->database->setQuery($query);
			$result = $this->database->query();
			//			echo($query);

		} else {
			// insert
			$query = sprintf("insert into #__joomlawatch_goals (id, ");
			$length = sizeof($post);
			if (@ $post['option'])
				$length = $length -1;
			$i = 0;
			foreach ($post as $key => $value) {
				if ($key == "id" || $key == "option")
					continue;
				$i++;
				$key = strtolower($key);
				$query .= sprintf("%s", JoomlaWatch :: sanitize_sql_string($key));
				if ($i < $length)
					$query .= ", ";
			}
			$query .= ") values ('',";
			$i = 0;
			foreach ($post as $key => $value) {
				if ($key == "id" || $key == "option")
					continue;
				$i++;
				$key = strtolower($key);
				$query .= sprintf("'%s'", JoomlaWatch :: sanitize_sql_string($value));
				if ($i < $length)
					$query .= ",";
			}
			$query .= ")";
			$this->database->setQuery($query);
			$result = $this->database->query();
			//			echo($query);
		}

		return $result;
	}

	function deleteGoal($id) {
		$query = sprintf("delete from #__joomlawatch_goals where id = '%d' limit 1", (int) $id);
		$this->database->setQuery($query);
		//TODO delete everyting from logs as well!
		$result = $this->database->query();

		$query = sprintf("delete from #__joomlawatch_info where (`group`='goals' and name='%d')", (int) $id);
		$this->database->setQuery($query);
		$this->database->query();
		return $result;
	}

	function enableGoal($id) {
		$query = sprintf("update #__joomlawatch_goals set disabled = NULL where id = '%d'", (int) $id);
		$this->database->setQuery($query);
		return $this->database->query();
	}

	function disableGoal($id) {
		$query = sprintf("update #__joomlawatch_goals set disabled = 1 where id = '%d'", (int) $id);
		$this->database->setQuery($query);
		return $this->database->query();
	}

	function getGoalCount($id) {
		$query = sprintf("select sum(value) as sum from #__joomlawatch_info where `group` = 'goals' and name = '%d'", (int) $id);
		$this->database->setQuery($query);
		$sum = $this->database->loadResult();
		return $sum;
	}

	function getCachedItem($joomlaWatch, $key) {
		$time = $joomlaWatch->getServerTime();
		$query = sprintf("select cache, lastUpdate from #__joomlawatch_cache where `key` = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($key));
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$row = @ $rows[0];
		$cacheInterval = @ $joomlaWatch->getConfigValue('JOOMLAWATCH_CACHE_FRONTEND_COUNTRIES');
		if ($time - @ $cacheInterval < @ $row->lastUpdate) {
			return @ $row->cache;
		} else {
			return false;
		}

	}

	function storeCachedItem($joomlaWatch, $key, $cache) {
		$query = sprintf("select cache, lastUpdate from #__joomlawatch_cache where `key` = '%s' limit 1", JoomlaWatch :: sanitize_sql_string($key));
		$joomlaWatch->database->setQuery($query);
		$joomlaWatch->database->query();
		$rows = @ $joomlaWatch->database->loadObjectList();
		$row = @ $rows[0];
		$time = $joomlaWatch->getServerTime();
		if (!@ $row->cache) {
			// insert
			$cache = addslashes($cache);
			$query = sprintf("insert into #__joomlawatch_cache (id, `key`, lastUpdate, cache) values ('','%s', '%d', '%s' )", JoomlaWatch :: sanitize_sql_string($key), (int) $time, JoomlaWatch :: sanitize_sql_string($cache));
			$joomlaWatch->database->setQuery($query);
			$joomlaWatch->database->query();
		} else {

			$cache = addslashes($cache);
			$query = sprintf("update #__joomlawatch_cache set lastUpdate = '%d', cache = '%s' where `key` = '%s' limit 1", (int) $time, JoomlaWatch :: sanitize_sql_string($cache), JoomlaWatch :: sanitize_sql_string($key));
			$joomlaWatch->database->setQuery($query);
			$joomlaWatch->database->query();
		}

	}

	function checkLicenseAccepted() {
		$accepted = $this->getConfigValue("JOOMLAWATCH_LICENSE_ACCEPTED");
		if (@ $accepted)
			return true;
		else
			return false;
	}

	function licenseAccepted() {
		$this->saveConfigValue("JOOMLAWATCH_LICENSE_ACCEPTED", "1");
	}

	function isIPUniqueForToday($ip) {
		$date = $this->jwDateToday();
		$query = sprintf("select count(value) as count from #__joomlawatch_info where `group` = 'ip' and name = '%s' and `date` = '%d' ", JoomlaWatch :: sanitize_sql_string($ip), (int) $date);
		$this->database->setQuery($query);
		$rows = @ $this->database->loadObjectList();
		$count = $this->database->loadResult();
		if (isset ($count)) {
			return false;
		} else {
			return true;
		}

	}

	function getCheckboxValue($key) {
		$setting = JoomlaWatch :: getConfigValue($key);
		if ($setting == '1' || strtolower($setting) == 'on') {
			return true;
		} else {
			return false;
		}
	}

	function getTooltipOnClick() {
		return JoomlaWatch :: getCheckboxValue("JOOMLAWATCH_TOOLTIP_ONCLICK");
	}

	function getTooltipOnEvent() {
		if (JoomlaWatch :: getTooltipOnClick()) {
			return "title='" . _JW_TOOLTIP_CLICK . "' onclick";
		} else {
			return "title='" . _JW_TOOLTIP_MOUSE_OVER . "' onmouseover";
		}
	}

	function getTooltipOnEventHide() {

		if (JoomlaWatch :: getTooltipOnClick()) {
			return "";
		} else {
			return "onClick='ajax_hideTooltip();'";
		}
	}

	function getLanguage() {
		$language = @ JoomlaWatch :: getConfigValue("JOOMLAWATCH_LANGUAGE");
		return $language;
	}

	function clearCache() {
		$query = sprintf("delete from #__joomlawatch_cache");
		$this->database->setQuery($query);
		$result1 = $this->database->query();
	}

	function getAvailableLanguages() {
		$langDirPath = JPATH_BASE2 . DS . "components" . DS . "com_joomlawatch" . DS . "lang";

		if ($handle = @ opendir($langDirPath)) {
			while (false !== ($file = readdir($handle))) {
				if (strstr($file, ".php")) {
					$file = str_replace(".php", "", $file);
					$langArray[] = $file;
				}
			}
			closedir($handle);
		}
		sort($langArray);
		return @ $langArray;
	}

	function backupTables() {

		$tables = array (
			"joomlawatch",
			"joomlawatch_uri",
			"joomlawatch_info",
			"joomlawatch_blocked",
			"joomlawatch_goals",
			"joomlawatch_cache"
		);

		$date = date("Ymd", JoomlaWatch :: getServerTime());
		foreach ($tables as $table) {
			$query = sprintf("CREATE TABLE #__%s_backup_%d SELECT * FROM #__%s", JoomlaWatch :: sanitize_sql_string($table), (int) $date, JoomlaWatch :: sanitize_sql_string($table));
			$this->database->setQuery($query);
			$result1 = $this->database->query();
		}

		return true;

	}

	function getExistingBackups() {
		$tables = $this->database->getTableList();
		$backups = "";
		foreach ($tables as $table) {
			if (strstr($table, "joomlawatch")) {
				if (strstr($table, "backup")) {
					$num = substr($table, -8, 8);
					$backups[] = $num;
				}
			}
		}
		return $backups;
	}

	/** 
	 * functions taken from
	 * Open Web Application Security Project
	 * (http://www.owasp.org)
	 */
	// sanitize a string for SQL input (simple slash out quotes and slashes)
	function sanitize_sql_string($string, $min = '', $max = '') {
		$string = addslashes($string); //gz
		$pattern = "//"; // jp
		$replacement = "";
		$len = strlen($string);
		if ((($min != '') && ($len < $min)) || (($max != '') && ($len > $max)))
			return FALSE;
		return preg_replace($pattern, $replacement, $string);
	}

}
?>