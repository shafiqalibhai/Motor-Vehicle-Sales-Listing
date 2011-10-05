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

/** ensure this file is being included by a parent file */
if( !defined( '_JEXEC' ) && !defined( '_VALID_MOS' ) ) die( 'Restricted access' ); 

class AdminJoomlaWatchHTML {

	var $database;
	var $mosConfig_live_site;

	function AdminJoomlaWatchHTML($omitDir = "") {
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

	function renderHeader() {

?>
	<script type="text/javascript" src="<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/ajax-dynamic-content.js"></script>
	<script type="text/javascript" src="<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/ajax.js"></script>
	<script type="text/javascript" src="<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/joomlawatch.js.php?rand=<?php echo ($this->getRand());?>"></script>
	<script type="text/javascript" src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/fade.js'></script>
	<div align='left'>
	<table width='100%' <?php echo JoomlaWatch :: getTooltipOnEventHide(); ?> >
	<tr>
	<td valign='top'>
		
	<table>
	<tr><td>
	<a href='http://www.codegravity.com' target='_blank'><img src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/joomlawatch-logo-32x32.gif' align='center' border='0'/></a>
	</td><td>
	<a href='http://www.codegravity.com' target='_blank' style='font-family: verdana; font-size: 14px; align:top; font-weight: bold; color: black;'>JoomlaWatch <?php echo(JoomlaWatch :: getConfigValue('JOOMLAWATCH_VERSION'));?></a><br/><?php echo _JW_TITLE;?>
	</td>
	</tr>
	<tr><td colspan='2'>
				
				<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch' ><?php echo _JW_MENU_STATS;?></a> | 
				<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=goals'><?php echo _JW_MENU_GOALS;?></a> |
				<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=settings'><?php echo _JW_MENU_SETTINGS;?></a> |
				<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=credits'><?php echo _JW_MENU_CREDITS;?></a> |
				<a href='http://www.codegravity.com/projects/joomlawatch#doc' target='_blank'><?php echo _JW_MENU_DOCUMENTATION;?> <img src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/external.gif' border='0'/></a> | 
				<a href='http://www.codegravity.com/projects/joomlawatch#faq' target='_blank'><?php echo _JW_MENU_FAQ;?> <img src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/external.gif' border='0'/></a> |
				<a href='http://www.codegravity.com/donate/' target='_blank' title='<?php echo _JW_MENU_SUPPORT;?>'><?php echo _JW_MENU_LICENSE;?></a> <img src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/external.gif' border='0'/></a> |
				<a href='http://www.codegravity.com/donate/#sponsors' target='_blank' title='<?php echo _JW_MENU_SUPPORT;?>'><?php echo _JW_MENU_DONATORS;?></a> <img src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/external.gif' border='0'/></a>
	</td>
	</tr>
	</table>
	</td>
	<td align='right' valign='top'><span style='color: gray;'><?php echo _JW_HEADER_CAST_YOUR;?> <a href='http://extensions.joomla.org/component/option,com_mtree/task,search/Itemid,35/searchword,joomlawatch/cat_id,0/' target='_blank'><?php echo _JW_HEADER_VOTE;?></a>. <?php echo _JW_HEADER_DOWNLOAD;?> <a href='http://www.codegravity.com/download/' target='_blank'>CodeGravity.com</a></span><br/><iframe src="http://www.codegravity.com/space/?<?php echo time(); ?>" width="468" height="60" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></td></tr>
	</table>
			<?php


	}

	function getRand() {
		$query = "select value from #__joomlawatch_config where name = 'rand' order by id desc limit 1";
		$this->database->setQuery($query);
		$this->database->query();
		$rows = $this->database->loadObjectList();
		$row = @ $rows[0];
		$rand = @ $row->value;
		return $rand;
	}

	function renderBody($option) {
		$dirname = dirname(__FILE__);
		$dirnameExploded = explode(DIRECTORY_SEPARATOR, $dirname);
		$jBasePath = "";
		for ($i = 0; $i < sizeof($dirnameExploded) - 3; $i++)
			$jBasePath .= $dirnameExploded[$i] . DIRECTORY_SEPARATOR;
?>
	<script type="text/javascript">sendLastIdReq();</script>

	
	<center>
    <table border='0' cellpadding='2' width='100%' <?php echo JoomlaWatch :: getTooltipOnEventHide(); ?> >
    <tr>
    <td id="visits" valign='top' align='left' width='80%'>
    <?php echo _JW_VISITS_PANE_LOADING; ?>
	<br/><br/>
    </td>
    <td id="stats" valign='top'  align='left'>
    <?php echo _JW_STATS_PANE_LOADING; ?>
    </td>
	</tr>    
	</table>    
	</center>
 <?php


	}

	function renderSettings($result = "") {
?>
	<link rel="stylesheet" type="text/css" href="<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/css/coda-slider.css" />
	<script type="text/javascript" src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/jquery.js'></script>
	<script type="text/javascript" src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/jquery-easing.1.2.js'></script>
	<script type="text/javascript" src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/jquery-easing-compatibility.1.2.js'></script>
	<script type="text/javascript" src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/js/coda-slider.1.1.1.js'></script>
	<script type="text/javascript">
		jQuery(window).bind("load", function() {
			jQuery("div#slider1").codaSlider()
			// jQuery("div#slider2").codaSlider()
		});
	</script>

	<center>
	<form action='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=settingsSave' method='POST' id='settingsForm'>
		
		
		
	<div class="slider-wrap">
		<div align='left' style='text-align:left;'>
		<h2><?php echo(_JW_SETTINGS_TITLE); echo JoomlaWatchHTML::renderOnlineHelp("settings"); ?></h2>
		<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch'>&lt;&lt; <?php echo(_JW_BACK);?></a>
		 | <a href="javascript:document.getElementById('settingsForm').submit();"> <?php echo(_JW_SETTINGS_SAVE);?></a>
		</div>
	<div id="slider1" class="csw">
		<div class="panelContainer">
				
			<div class="panel" title="<?php echo(_JW_SETTINGS_APPEARANCE);?>">
				<div class="wrapper">
					<table width='90%'>
		
		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_LANGUAGE);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('LANGUAGE', $color); ?>

		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_APPEARANCE);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('TRUNCATE_VISITS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('TRUNCATE_STATS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('TRUNCATE_GOALS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('LIMIT_BOTS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('LIMIT_VISITORS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('TOOLTIP_WIDTH', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('TOOLTIP_HEIGHT', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('TOOLTIP_ONCLICK', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('TOOLTIP_URL', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('IP_STATS', $color); ?>
		</table>
		</div>
		</div>
					<div class="panel" title="<?php echo(_JW_SETTINGS_FRONTEND);?>">
				<div class="wrapper">
					<table width='90%'>
		

		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_FRONTEND);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_HIDE_LOGO', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_LINK', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_COUNTRIES', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_FIRST', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS_TODAY', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS_YESTERDAY', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS_THIS_WEEK', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS_LAST_WEEK', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS_THIS_MONTH', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS_LAST_MONTH', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_VISITORS_TOTAL', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_NUM', $color); ?>
		</table>
		</div>
		</div>
					<div class="panel" title="<?php echo(_JW_SETTINGS_HISTORY_PERFORMANCE);?>">
				<div class="wrapper">
					<table width='90%'>


		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_HISTORY_PERFORMANCE);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('UPDATE_TIME_VISITS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('UPDATE_TIME_STATS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('STATS_MAX_ROWS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('STATS_IP_HITS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('MAXID_BOTS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('MAXID_VISITORS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('STATS_KEEP_DAYS', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('CACHE_FRONTEND_COUNTRIES', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('CACHE_FRONTEND_VISITORS', $color); ?>
		</table>
		</div>
		</div>
					<div class="panel" title="<?php echo(_JW_SETTINGS_ADVANCED);?>">
				<div class="wrapper">
					<table width='90%'>
		
		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_ADVANCED);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('TIMEZONE_OFFSET', $color); ?>

		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_IGNORE);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('IGNORE_IP', $color, " <a href=\"javascript:addElementValueById('JOOMLAWATCH_IGNORE_IP','".$_SERVER['REMOTE_ADDR']."');\">"._JW_SETTINGS_ADD_YOUR_IP." ".$_SERVER['REMOTE_ADDR']." "._JW_SETTINGS_TO_THE_LIST."</a>");?> 
		<?php echo JoomlaWatchHTML :: renderInputElement('IGNORE_URI', $color); ?>
		
		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_BLOCKING);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('BLOCKING_MESSAGE', $color); ?>
		
		</table>
		</div>
		</div>

					<div class="panel" title="<?php echo(_JW_SETTINGS_EXPERT);?>">
				<div class="wrapper">
					<table width='90%'>
		<tr><td colspan='3' align='left'><h3><?php echo(_JW_SETTINGS_EXPERT);?></h3></td></tr>
		<?php echo JoomlaWatchHTML :: renderInputElement('WEEK_OFFSET', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('DAY_OFFSET', $color); ?>
		<?php echo JoomlaWatchHTML :: renderInputElement('SERVER_URI_KEY', $color); ?>
		
		<tr><td colspan='3'>
		<br/><br/>
		<h3><?php echo(_JW_SETTINGS_RESET_ALL);?><?php echo JoomlaWatchHTML::renderOnlineHelp("reset"); ?></h3>		
		<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=resetData' onClick="javascript:return confirm('<?php echo(_JW_SETTINGS_RESET_CONFIRM);?>')">[<?php echo(_JW_SETTINGS_RESET_ALL_LINK);?>]</a>
		</td></tr>
		</table>
		</div>
		</div>

</div>
</div>
</div>
		<?php 		if (@$result) echo("<span style='color: green;'>"._JW_SETTINGS_SAVED."</span><br/><br/>"); ?>
		<input type='submit' name='submitForm' value=' [ <?php echo(_JW_SETTINGS_SAVE);?> ] '/>
		</form>

		</center>
		
		<?php


	}
	function renderResetData($result = "") {
		if ($result) {
			echo ("<h3>" . _JW_RESET_SUCCESS . "</h3>");
		} else {
			echo ("<h3>" . _JW_RESET_ERROR . "</h3>");
		}

	}

	function renderEnabled($id, $disabled) {
		if ($disabled)
			$output = "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_joomlawatch&task=goals&action=enable&goalId=$id'><img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/unpublished.png' border='0'/></a>";
		else
			$output = "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_joomlawatch&task=goals&action=disable&goalId=$id'><img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/published.png' border='0'/></a>";

		return $output;
	}
	function renderActionButtons($id) {
		$output = "";
		$output .= "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_joomlawatch&task=goals&action=edit&goalId=$id'><img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/edit.gif' border='0' title='" . _JW_GOALS_EDIT . "'/></a> ";
		$output .= "&nbsp;&nbsp;";
		$output .= "<a href='$this->mosConfig_live_site/administrator/index2.php?option=com_joomlawatch&task=goals&action=delete&goalId=$id' onClick='return confirm(\"" . _JW_GOALS_DELETE_CONFIRM . " $id? \");'><img src='$this->mosConfig_live_site/components/com_joomlawatch/icons/delete.gif' border='0' title='" . _JW_GOALS_DELETE . "'/></a> ";

		return $output;
	}

	function renderCell($style, $content) {
		$content = JoomlaWatch :: truncate($content, JoomlaWatch :: getConfigValue('JOOMLAWATCH_TRUNCATE_GOALS'));
		$output = "<td align='center' style='$style'>$content</td>";
		return $output;

	}

	function renderGoals($result = "") {

		echo ("<h2>" . _JW_GOALS_TITLE . JoomlaWatchHTML :: renderOnlineHelp("goals") . "</h2>");

		if ($result) {
			echo (_JW_SUCCESS . "<br/>");
		}
?>
<table width='100%' cellpadding='4'>
<tr><td align='left'>
<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=goals&action=insert'><img src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/new.gif' border='0' title='<?php echo _JW_GOALS_NEW;?>' valign='center'/> <?php echo _JW_GOALS_NEW;?></a> &nbsp; &nbsp;
</td>
<td align='right'> 
<a href='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=goals'><img src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/reload.gif' border='0' title='<?php echo _JW_GOALS_RELOAD;?>'/></a>
</td>
</tr>
</table>
<?php


		echo ("<div style='width: 80%; text-align: justify; border: 1px solid black;'>");
		echo (_JW_DESC_GOALS);
		echo ("</div><br/>");
?>
<table width='100%' cellpadding='4'>
<tr>
<th align='center'><?php echo(_JW_GOALS_ID);?></th>
<th align='center'><?php echo(_JW_GOALS_NAME);?></th>
<th align='center'><?php echo(_JW_GOALS_URI_CONDITION);?></th>
<th align='center'><?php echo(_JW_GOALS_TITLE_CONDITION);?></th>
<th align='center'><?php echo(_JW_GOALS_USERNAME_CONDITION);?></th>
<th align='center'><?php echo(_JW_GOALS_CAME_FROM_CONDITION);?></th>
<th align='center'><?php echo(_JW_GOALS_IP_CONDITION);?></th>
<th align='center'><?php echo(_JW_GOALS_GET_VAR);?></th>
<th align='center'><?php echo(_JW_GOALS_GET_CONDITION);?></th>
<th align='center'><?php echo(_JW_GOALS_POST_VAR);?></th>
<th align='center'><?php echo(_JW_GOALS_POST_CONDITION);?></th>
<th align='center'><?php echo(_JW_GOALS_HITS);?></th>
<th align='center'><?php echo(_JW_GOALS_ENABLED);?></th>
</tr>
<?php


		$query = "select * from #__joomlawatch_goals ";
		$this->database->setQuery($query);
		$this->database->query();
		$rows = $this->database->loadObjectList();
?>
<?php


		$i = 0;
		foreach ($rows as $row) {
			$i++;
			if ($i % 2)
				$color = "#f5f5f5";
			else
				$color = "#f0f0f0";
			$style = "background-color: $color;";
?>
<tr>
<?php echo $this->renderCell($style, @$row->id);?>
<?php echo $this->renderCell($style, @$row->name);?>
<?php echo $this->renderCell($style, @$row->uri_condition);?>
<?php echo $this->renderCell($style, @$row->title_condition);?>
<?php echo $this->renderCell($style, @$row->username_condition);?>
<?php echo $this->renderCell($style, @$row->came_from_condition);?>
<?php echo $this->renderCell($style, @$row->ip_condition);?>
<?php echo $this->renderCell($style, @$row->get_var);?>
<?php echo $this->renderCell($style, @$row->get_condition);?>
<?php echo $this->renderCell($style, @$row->post_var); ?>
<?php echo $this->renderCell($style, @$row->post_condition);?>
<td align='center' style='<?php echo $style;?>'><?php echo JoomlaWatch :: getGoalCount($row->id);?></td>
<td align='center' style='<?php echo $style;?>'><?php echo $this->renderEnabled($row->id, $row->disabled);?></td>
<td align='center' style='<?php echo $style;?>'><?php echo @$this->renderActionButtons($row->id);?></td>

</tr>
<?php


		}
?>
</table>
<br/><br/><br/><br/>
<?php


	}
	function renderInputField($id, $values, & $color) {
		if (!@ $values)
			$values = "";
		if (!@ $color)
			$color = "";

		$name = constant("_JW_GOALS_" . $id);
		if ($values)
			$value = @ $values[strtolower($id)];

		if (!@ $color)
			$color = "#f7f7f7";
		else
			$color = "";

		$desc = constant("_JW_DESC_GOALS_" . $id);
		$output = "<td align='right' valign='top' width='150px;' bgcolor='$color'><b>$name :</b> </td><td valign='top' bgcolor='$color'><input type='text' name='$id' value='" . @ $value . "'/></td><td style='color: gray;' valign='top' align='left' bgcolor='$color'><i>$desc</i></td>";
		return $output;
	}

	function renderGoalsInsert() {
		$this->renderGoalForm(_JW_GOALS_INSERT);
	}
	function renderGoalEdit($id) {
		$values = JoomlaWatch :: getGoalById($id);
		$this->renderGoalForm(_JW_GOALS_UPDATE . " $id", $values);
	}

	function renderGoalForm($action, $values = "") {
?>
<center>
<img align='right' src='<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/goals.gif'/>

<form action='<?php echo($this->mosConfig_live_site);?>/administrator/index2.php?option=com_joomlawatch&task=goals&action=save' method='POST'>
<?php $color=""; ?>
<table width='80%' cellpadding='3'>
<tr><td valign='top' align='left' colspan='3'>
<h2><?php echo($action);?><?php echo JoomlaWatchHTML::renderOnlineHelp("goals-form"); ?></h2>
<div align='center' style='border:1px solid black; width:600px; text-align: justify; text-justify: distribute; padding: 5px;'>
<?php echo _JW_DESC_GOALS_INSERT; ?>
</div>
<br/>
</td></tr>
<tr>
<tr><?php echo($this->renderInputField("NAME", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("URI_CONDITION", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("TITLE_CONDITION", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("USERNAME_CONDITION", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("IP_CONDITION", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("CAME_FROM_CONDITION", $values, $color)); ?></tr>
<tr><td></td></tr>
<tr><td align='right' style='color: gray;'><b><?php echo(_JW_GOALS_ADVANCED."&nbsp;:");?></b></td></tr>
<tr><?php echo($this->renderInputField("GET_VAR", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("GET_CONDITION", $values, $color)); ?></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><?php echo($this->renderInputField("POST_VAR", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("POST_CONDITION", $values, $color)); ?></tr>
<tr></tr>
<tr><td align='right' style='color: gray;'><b><?php echo(_JW_GOALS_ACTION."&nbsp;:");?></b></td></tr>
<tr><?php echo($this->renderInputField("BLOCK", $values, $color)); ?></tr>
<tr><?php echo($this->renderInputField("REDIRECT", $values, $color)); ?></tr>
<tr><td></td></tr>
<tr><td></td></tr>
</tr>
<tr><td colspan='3' align='center'>
<br/><br/>
<input type='submit' value='<?php echo $action; ?>' />
<?php if (@$values) { ?>
<input type='hidden' name='id' value='<?php echo @$values['id']; ?>' />
<?php } ?>
</td>
</table>
</form>
</center>
<?php


	}

	function renderAdminStyles() {
	require_once (JPATH_BASE2 . DS . "components" . DS . "com_joomlawatch" . DS . "lang" . DS . JoomlaWatch::getLanguage().".php");
?>
	<link rel="stylesheet" href="<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/css/ajax-tooltip.css" type="text/css" />
	<style type="text/css">
		H2 {font-family: verdana, helvetica, arial; font-size: 14px; }
        TR, TD { font-family: verdana, helvetica, arial; font-size:10px;}
        .tab_active { 
        	background-position: top center; 
        	background-image: url(<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/tab-on.gif);
        	background-repeat: no-repeat;
        	width:100px;
        }
              .tab_inactive { 
        	background-position: top center; 
        	background-image: url(<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/tab-off.gif);
        	background-repeat: no-repeat;
        	width:100px;
        }
              .tab_none { 
        	background-position: bottom center; 
        	background-image: url(<?php echo($this->mosConfig_live_site);?>/components/com_joomlawatch/icons/tab-none.gif);
        	background-repeat: repeat-x;
        }
        #ajax_tooltipObj .ajax_tooltip_content{
	border:2px solid #317082;	/* Border width */
	left:100px;	/* Same as border thickness */
	top:0px;
	position:fixed;
	width:<?php echo(JoomlaWatch :: getConfigValue('JOOMLAWATCH_TOOLTIP_WIDTH'));?>px;	/* Width of tooltip content */
	height:<?php echo(JoomlaWatch :: getConfigValue('JOOMLAWATCH_TOOLTIP_HEIGHT'));?>px;	/* Height of tooltip content */
	background-color:#FFF;	/* Background color */
	padding:5px;	/* Space between border and content */
	font-size:0.8em;	/* Font size of content */
	overflow:auto;	/* Hide overflow content */
	z-index:1000001;
	}
</style>
<?php


	}

	function renderCredits() {
		$output = "<center><table width='100%'><tr><td style='padding: 5px;' align='left'><h2>" . _JW_CREDITS_TITLE . "</h2>";
		$output .= JoomlaWatch :: getConfigValue('JOOMLAWATCH_CREDITS');
		$output .= "</td></tr></table></center><br/><br/><br/><br/><br/><br/>";
		return $output;
?>	
	<?php


	}

	function renderBackToGoals($result = "") {
		$output = "<a href='" . $this->mosConfig_live_site . "/administrator/index2.php?option=com_joomlawatch&task=goals'> &lt;&lt; " . _JW_BACK . "</a>";
		return $output;
	}
	function renderBackToStats($result = "") {
		$output = "<a href='" . $this->mosConfig_live_site . "/administrator/index2.php?option=com_joomlawatch'> &lt;&lt; " . _JW_BACK . "</a>";
		return $output;
	}

	function renderAcceptLicense() {
		$output = "<center><script>function enableContinue() { document.getElementById('continue').disabled = !document.getElementById('accept').checked; }</script>" .
		"<h2>JoomlaWatch " . JoomlaWatch :: getConfigValue("JOOMLAWATCH_VERSION") . " license</h2>" .
		"<form  name='acceptForm' action='$this->mosConfig_live_site/administrator/index2.php?option=com_joomlawatch&task=licenseAccepted' method='POST'>" .
		"<div style='width:600px;height:400px;overflow:auto;text-align:left;'>" . JoomlaWatch :: getConfigValue("JOOMLAWATCH_LICENSE") . "</div><br/>" .
		"<input type='checkbox' id='accept' value='" . _JW_LICENSE_AGREE . "' onClick='javascript:enableContinue();'/> " . _JW_LICENSE_AGREE . "&nbsp; &nbsp;" .
		"<input type='submit' name='continue' id='continue' value='" . _JW_LICENSE_CONTINUE . "' disabled/>" .
		"</form></center>";
		return $output;
	}

}
?>