<?php
###############################################
# PU Database Admin - A Joomla Component			#
# Copyright (C) 2007  by Pragmatic Utopia     #
# Homepage   : www.pragmaticutopia.com        #
# Email      : rick@pragmaticutopia.com       #
# Version    : 1.1.0                          #
# License    : Released under GPL             #
#					      															#
# Based on PHP Mini MySQL Admin		      			#
# (c) 2004-2007 Oleg Savchuk <osa@viakron.com>#
# Charset support - 			      							#
# thanks to Alex Didok http://www.main.com.ua #
#					      															#
# http://phpminiadmin.sourceforge.net	      	#
###############################################
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//@error_reporting(0);
//@ini_set('display_errors',0);

if(file_exists($mainframe->getCfg('absolute_path') . '/administrator/components/com_pudba/lang/' . $mainframe->getCfg('lang') . '.php'))
	require_once($mainframe->getCfg('absolute_path') . '/administrator/components/com_pudba/lang/' . $mainframe->getCfg('lang') . '.php');
else 
	require_once($mainframe->getCfg('absolute_path') . '/administrator/components/com_pudba/lang/english.php');

class clspuminiadmin
{
	function print_insert($tablename)
	{
		global $database;
		echo "<center><table border=0 cellpadding=0 cellspacing=0 class=adminform>";
		echo "<input type=hidden name=table_name value=\"".$tablename."\">";
		echo "<tr><th colspan=3><b>".PUD_INSERT_INTO." ".$tablename."</b></th></tr>";
  		$tables = array( $tablename );
  		$result = $database->getTableFields( $tables );	
		foreach ($result[$tablename] as $field=>$value)
		{
			if (stripos($value,"BLOB")!==FALSE || stripos($value,"TEXT")!==FALSE)
				$input = "<textarea name=\"pud_".$field."\" rows=4 cols=40></textarea>";
			else
				$input = "<input type=text name=\"pud_".$field."\" value=\"\">";
			echo "<tr><td width=20%>".$field."</td><td width=20%>".$input."</td><td width=60%>&nbsp;</td></tr>";
		}
		?>
		<tr><td colspan=2><center><input type=hidden name="task" value="saveinsert"><input type=submit value="<?php echo PUD_INSERT; ?>"><input type="button" value=" <?php echo PUD_CANCEL;?> " onclick="window.location='<?=$self?>?option=com_pudba'"></center></td><td></td></tr>
		</table></center>
		<?php
	}
	function print_new_table()
	{
	?>
		<script type="text/javascript">
		function addElement() 
		{
  			var ni = document.getElementById('formfields');
 			var numi = document.getElementById('formval');
  			var num = (document.getElementById('formval').value -1)+ 2;
  			numi.value = num;
  			var newdiv = document.createElement('div');
  			var divIdName = 'my'+num+'Div';
  			newdiv.setAttribute('id',divIdName);
  			newdiv.innerHTML = '<?php $field = clspuminiadmin::print_form_row(); echo $field; ?>';
  			ni.appendChild(newdiv);
		}

		function removeElement(divNum)
		{
  			var d = document.getElementById('myDiv');
  			var olddiv = document.getElementById(divNum);
  			d.removeChild(olddiv);
		}
		</script>
		<center><table border=0 cellpadding=0 cellspacing=0 class=adminform>
		<tr><th colspan=13><b><?php echo PUD_CREATE_TABLE; ?></b></th></tr>
		<tr><td><?php echo PUD_TABLE_NAME;?><input type=text name="table_name"><INPUT TYPE="button" VALUE="<?php echo PUD_ADD_FIELD;?>" onclick="addElement();"></tr>
		<tr><td width=100%><div id=formfields></div></td></tr>
		<tr><td colspan=13><center><input type=hidden name="task" value="savetable"><input type="hidden" value="0" id="formval" /><input type=submit value="<?php echo PUD_CREATE_TABLE; ?>"></center></td></tr>
		</table>
	<?php
	}
	function print_edit_row($tablename,$keyfield,$keyvalue)
	{
		global $database;
		//Get the record to edit
		$query = "SELECT * FROM ".$tablename." WHERE ".$keyfield." = ".$keyvalue;
		$database->setQuery($query);
		$database->LoadObject($row);
  		$tables = array( $tablename );
  		$result = $database->getTableFields( $tables );	
		?>
		<table width=100% cellpadding=0 cellspacing=0 border=0 class=adminform>
		<input type=hidden name=task value="saveedit">
		<input type=hidden name=table value="<?php echo $tablename;?>">
		<input type=hidden name=keyfield value="<?php echo $keyfield;?>">
		<input type=hidden name=keyvalue value="<?php echo $keyvalue;?>">
		<tr><th><?php echo PUD_COLUMN_TYPE; ?></th><th><?php echo PUD_COLUMN_NAME; ?></th><th><?php echo PUD_EDIT; ?></th><th>&nbsp;</th></tr>
		<?php
	
		foreach ($row as $field=>$value)
		{
			$type = $result[$tablename][$field];
			echo "<tr><td width=20%>".$type."</td><td width=20%>".$field."</td><td width=20%>";
			if (stripos($type,"BLOB")!==FALSE || stripos($type,"TEXT")!==FALSE)
			{
				$height = strlen($value)/50;
				if ($height > 6)
					$height = 6;
				elseif ($height < 1)
					$height = 1;
				$input = "<textarea name=\"pud_".$field."\" rows=".$height." cols=50>".URLDECODE($value)."</textarea>";
			}
			else
				$input = "<input type=text name=\"pud_".$field."\" value=\"".URLDECODE($value)."\">";
			echo $input."</td><td width=40%>&nbsp;</td></tr>";
		}
		?>
		<tr><td colspan=2><center><input type=submit value=" <?php echo PUD_UPDATE;?> ">&nbsp;&nbsp;<input type="button" value=" <?php echo PUD_CANCEL;?> " onclick="window.location='<?=$self?>?option=com_pudba'"></center></td></tr>
		</table>
		<?
	}
	function print_form_row()
	{
		$formfield = "<table width=100% cellpadding=0 cellspacing=0 border=0><tr><td>".PUD_FIELD_NAME."</td><td><input type=text name=field_name[]></td><td>".PUD_FIELD_TYPE."</td><td><select name=field_type[]>";
		$formfield .= "<option value=VARCHAR>VARCHAR</option><option value=TINYINT>TINYINT</option><option value=TEXT>TEXT</option><option value=DATE>DATE</option>";
    $formfield .= "<option value=SMALLINT>SMALLINT</option><option value=MEDIUMINT>MEDIUMINT</option><option value=INT>INT</option><option value=BIGINT>BIGINT</option>";
    $formfield .= "<option value=FLOAT>FLOAT</option><option value=DOUBLE>DOUBLE</option><option value=DECIMAL>DECIMAL</option><option value=DATETIME>DATETIME</option>";
    $formfield .= "<option value=TIMESTAMP>TIMESTAMP</option><option value=TIME>TIME</option><option value=YEAR>YEAR</option><option value=CHAR>CHAR</option>";
    $formfield .= "<option value=TINYBLOB>TINYBLOB</option><option value=TINYTEXT>TINYTEXT</option><option value=BLOB>BLOB</option><option value=MEDIUMBLOB>MEDIUMBLOB</option>";
    $formfield .= "<option value=MEDIUMTEXT>MEDIUMTEXT</option><option value=LONGBLOB>LONGBLOB</option><option value=LONGTEXT>LONGTEXT</option><option value=ENUM>ENUM</option>";
    $formfield .= "<option value=SET>SET</option><option value=BOOL>BOOL</option><option value=BINARY>BINARY</option><option value=VARBINARY>VARBINARY</option>";
    $formfield .= "</select></td><td>".PUD_LENGTH."</td><td><input type=text name=field_length[]></td><td>".PUD_NULL."</td><td><select name=field_null[]><option value=true SELECTED>NULL</option>";
		$formfield .= "<option value=false>NOT NULL</option></select></td><td>".PUD_DEFAULT."</td><td><input type=text name=field_default[]></td><td>".PUD_AUTO_INCREMENT."</td><td><select name=field_auto[]>";
		$formfield .= "<option value=true>True</option><option value=false SELECTED>False</option></td><td>".PUD_KEYING."</td><td><select name=field_key[]><option value=none SELECTED>None</option>";
		$formfield .= "<option value=primary>Primary Key</option><option value=index>Index</option><option value=unique>Unique</option></select></tr></table>";
		return $formfield;
	}
	function display_select($sth,$q,$pageno)
	{
		global $dbh,$DB,$reccount,$is_sht,$self,$database,$pagelinks,$mainframe;
		if(!defined ('_JEXEC')){
			$livesite = $mainframe->getCFG(live_site)."/";
		}else{
				$livesite = $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
		}
		$database->setQuery($q);
		$database->query();
		$total = $database->GetNumRows();
		$rc=array("o","e");
		$dbn=$DB['db'];
		$is_sht=(preg_match('/^show tables/i',$q));
		$is_show_crt=(preg_match('/^show create table/i',$q));
		$is_select=(preg_match('/^select/i',$q));
		$reccount=mysql_num_rows($sth);
		$fields_num=mysql_num_fields($sth);
		$sqldr ="<table border='0' cellpadding='1' cellspacing='1' width=100% class='adminlist'><tr>";
		if ($is_select){
			$sqldr .= "<th><center>".PUD_EDIT."</center></th><th><center>".PUD_DELETE."</center></th>";
		}
		for($i=0;$i<$fields_num;$i++)
		{
			$meta=mysql_fetch_field($sth,$i);
			$sqldr.="<th>".$meta->name."</th>";
			$tablename = $meta->table;
			if ($meta->primary_key == 1)
			{
				$keyfield = $meta->name;
				$keyindex = $i;
			}
 		}	

 		if ($is_sht){ 
			$sqldr.="<th>".PUD_INSERT."</th><th>".PUD_EXPLAIN."</th><th>".PUD_INDEXES."</th><th>".PUD_EXPORT."</th><th>".PUD_DROP."</th><th>".PUD_TRUNCATE."</th><th>".PUD_OPTIMIZE."</th><th>".PUD_REPAIR."</th>";
 		}
 		$sqldr.="</tr>\n";
 		$swapper=false;
		$k = 0;
 		while($row=mysql_fetch_row($sth))
		{
   			$sqldr.="<tr class=row".$k.">";
			if ($is_select)
			{
				$sqldr .= "<td><center><a href=\"index2.php?option=com_pudba&dbn=$dbn&task=editrow&table_name=".URLENCODE($tablename)."&keyfield=".URLENCODE($keyfield)."&keyvalue=".URLENCODE($row[$keyindex])."\"><img src=$livesite/administrator/images/edit_f2.png border=0 height=16 width=16></a></center></td>";
				$sqldr .= "<td><center><a href=\"index2.php?option=com_pudba&dbn=$dbn&task=drow&table_name=".URLENCODE($tablename)."&keyfield=".URLENCODE($keyfield)."&keyvalue=".URLENCODE($row[$keyindex])."\" onclick='return ays()'><img src=$livesite/administrator/images/cancel_f2.png border=0 height=16 width=16></a></center></td>";
			}
			if ($k == 0)
				$k = 1;
			else
				$k = 0;
   			for($i=0;$i<$fields_num;$i++)
			{
      				$v=$row[$i];
				$more='';
      				if ($is_sht && $i==0 && $v)
				{
         				//$v="<center><input type='checkbox' name='cb[]' value=\"$v\"></center></td>";
         				$v="<center><a href=\"?option=com_pudba&db=$dbn&table_name=$v&q=select+*+from+$v\">$v</a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&task=insert&table_name=".$v."\"><img src=$livesite/administrator/images/module.png border=0 height=16 width=16></a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&q=explain+$v\"><img src=$livesite/administrator/images/langmanager.png border=0 height=16 width=16></a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&q=show+index+from+$v\"><img src=$livesite/administrator/images/search_f2.png border=0 height=16 width=16></a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&task=shex&t=$v\"><img src=$livesite/administrator/images/restore_f2.png border=0 height=16 width=16></a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&q=drop+table+$v\" onclick='return ays()'><img src=$livesite/administrator/images/cancel_f2.png border=0 height=16 width=16></a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&q=truncate+table+$v\" onclick='return ays()'><img src=$livesite/administrator/images/trash.png border=0 height=16 width=16></a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&q=optimize+table+$v\" onclick='return ays()'><img src=$livesite/administrator/images/day_f2.png border=0 height=16 width=16></a></center></td>"
         				."<td><center><a href=\"?option=com_pudba&db=$dbn&q=repair+table+$v\" onclick='return ays()'><img src=$livesite/administrator/components/com_pudba/images/menu.png border=0 height=16 width=16></a></center></td>";
      				}
      				if ($is_show_crt){ 
					$v="<pre>$v</pre>";
      			}else{
					$sqldr.="<td><center>$v".(!$v?"<br />":'')."</center></td>";
				}
   			}
   			$sqldr.="</tr>\n";
 		}
 		$sqldr.="</table>";
		if ($is_select)
		{
			$pattern = '&pageno=[0-9]+';
			$pageurl = eregi_replace($pattern, "", $_SERVER['REQUEST_URI']);
			if (strstr($pageurl,"option=com_pudba") === false && strstr($pageurl,"?") === false)
				$pageurl .= "?option=com_pudba";
			elseif (strstr($pageurl,"option=com_pudba") === false)
				$pageurl .= "&option=com_pudba";
			if (strstr($pageurl,"q=") === false)
				$pageurl .= "&q=".$q;
			$pagelinks = clspuminiadmin::WritePagination($pageno,$pageurl,$total);
		}

		return "<div class=tb>".$sqldr."</div><br>".$pagelinks;
	}


	function print_import()
	{
	?>
		<center><table border=0 cellpadding=0 cellspacing=0 class=adminform>
		<tr><th><b><?php echo PUD_IMPORT_SQL_FILE; ?></b></th></tr>
		<tr><td><b><?php echo PUD_FILE; ?></b><input type="file" name="file1" value="" size=40></td></tr>
		<tr><td><input type="submit" value=" <?php echo PUD_UPLOAD_IMPORT; ?> " onclick="return ays()">
		<input type="button" value=" <?php echo PUD_CANCEL; ?> " onclick="window.location='<?=$self?>?option=com_pudba'"></td></tr>
		</table>
		<input type="hidden" name="task" value="doim">
		<input type="hidden" name="option" value="com_pudba">
		</center>
		<?
	}
	function print_screen()
	{
 		global $SQLq, $err_msg, $reccount, $time_all, $page, $MAX_ROWS_PER_PAGE;
		?>
		<center>
		<table class=adminform cellspacing=0 cellpadding=0 border=0>
		<tr><th><b><?php echo PUD_RUN_SQL_QUERIES; ?></b></th></tr>
		<tr><td><i><?php PUD_ENTER_QUERIES;?></i><br><textarea name="q" cols="70" rows="10"><?=$SQLq?></textarea></tr>
		<tr><td>
		<input type=submit name="GoSQL" value=" <?php echo PUD_GO;?> " onclick="return chksql()" style="width:100px">&nbsp;&nbsp;
		<input type=button name="Clear" value=" <?php echo PUD_CLEAR;?>" onClick="document.DF.q.value=''" style="width:100px">
		</td></tr></table>
		</center>
		<?
	}
	function print_export($t)
	{
 		$l=($t)? PUD_TABLE." ".$t:"DB";
		?>
		<center><table border=0 cellpadding=0 cellspacing=0 class=adminform>
		<tr><th><b><?php PUD_EXPORT; ?> <?php echo $l?></b></th></tr>
		<tr><td><input type="checkbox" name="s" value="1" checked>  <?php echo PUD_EXPORT_STRUCTURE;?> </td></tr>
		<tr><td><input type="checkbox" name="d" value="1" checked>  <?php echo PUD_EXPORT_DATA;?> </td></tr>
		<tr><td><input type="submit" value=" <?php echo PUD_DOWNLOAD;?> ">
		<input type="button" value=" <?php echo PUD_CANCEL;?> " onclick="window.location='?option=com_pudba'"></td></tr>
		<input type="hidden" name="task" value="doex">
		<input type="hidden" name="t" value="<?php echo $t?>">
		</table></center>
		<?
	} //end function print_export()

	function print_footer()
	{
		?>
		</form>
		<br>
		<br>
		<div align="right">
		<center>PU Database Admin &copy;<http://www.pragmaticutopia.com>Pragmatic Utopia</a></center>
		</div>
		<?
	} //end function print_footer()

	function print_header($message = "")
	{
		global $mainframe;
		if(!defined ('_JEXEC')){
			$livesite = $mainframe->getCFG(live_site). "/";
		}else{
			$livesite = $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
		} 		
		global $err_msg,$DB,$dbh,$self,$is_sht;
 		$dbn=$DB['db'];
		?>
		<script  type="text/javascript" src="<?php echo $livesite; ?>/includes/js/overlib_mini.js"></script>
		<script type="text/javascript">
		function frefresh()
		{
 			var F=document.adminForm;
 			F.method='get';
 			F.refresh.value="1";
 			F.submit();
		}
		function ays(){
 		return confirm('<?php echo PUD_ARE_YOU_SURE; ?>');
		}
		function chksql(){
 		var F=document.adminForm;
 		if(/^\s*(?:delete|drop|truncate|alter)/.test(F.q.value)) return ays();
		}
		<?
		if($is_sht)
		{
		?>
			function chkall(cab){
 			var e=document.adminForm.elements;
 			if (e!=null)
			{
  				var cl=e.length;                   
  				for (i=0;i<cl;i++)
				{
					var m=e[i];
					if(m.checked!=null && m.type=="checkbox")
					{
						m.checked=cab.checked
					}
				}
 			}
		}
		function sht(f)
		{
 			document.adminForm.dosht.value=f;
		}
		<?
		}
		?>
		</script>
		<style>
		div.tb {
    		width: 100%;
    		overflow: auto;	
		}
		</style>
		<table class=adminheading width=100% cellspacing=0 cellpadding=0 border=0>
		<tr><td width=80%><img src="<?php echo $livesite; ?>/administrator/components/com_pudba/images/PUDBA_logo.png" border=0></td><td width=20%>
		<a href="<?php echo $livesite;?>administrator/index2.php?option=com_pudba&db=<?php echo $dbn; ?>&q=show+tables" 
    		onMouseOver="return overlib('<?php echo PUD_LIST_TABLES; ?>', CAPTION,
        	'<?php echo PUD_SHOW_TABLES; ?>', BELOW, RIGHT);"
    		onmouseout="return nd();" ><img
    		src="<?php echo $livesite?>administrator/images/paste_f2.png"
    		border="0" /></a>
		<a href="<?php echo $livesite;?>administrator/index2.php?option=com_pudba&db=<?php echo $dbn; ?>&q=show+table+status" 
    		onMouseOver="return overlib('<?php echo PUD_SHOW_TABLE_STATUS_DESC;?>', CAPTION,
        	'<?php echo PUD_SHOW_TABLE_STATUS; ?>', BELOW, RIGHT);"
    		onmouseout="return nd();" ><img
    		src="<?php echo $livesite?>administrator/images/properties_f2.png"
    		border="0" /></a>
		<a href="<?php echo $livesite;?>administrator/index2.php?option=com_pudba&db=<?php echo $dbn; ?>&task=shex&q=" 
    		onMouseOver="return overlib('<?php echo PUD_EXPORT_DESC; ?>', CAPTION,
        	'<?php echo PUD_EXPORT; ?>', BELOW, RIGHT);"
    		onmouseout="return nd();" ><img
    		src="<?php echo $livesite?>administrator/images/restore_f2.png"
    		border="0" /></a>
		<a href="<?php echo $livesite;?>administrator/index2.php?option=com_pudba&db=<?php echo $dbn; ?>&task=shim&q=" 
    		onMouseOver="return overlib('<?php echo PUD_IMPORT_DESC; ?>', CAPTION,
        	'<?php echo PUD_IMPORT; ?>', BELOW, RIGHT);"
    		onmouseout="return nd();" ><img
    		src="<?php echo $livesite?>administrator/images/downloads_f2.png"
    		border="0" /></a>
		<a href="<?php echo $livesite;?>administrator/index2.php?option=com_pudba&db=<?php echo $dbn; ?>&task=shsql&q=" 
    		onMouseOver="return overlib('<?php echo PUD_SQL_DESC; ?>', CAPTION,
        	'<?php echo PUD_SQL; ?>', BELOW, RIGHT);"
    		onmouseout="return nd();" ><img
    		src="<?php echo $livesite?>administrator/images/edit_f2.png"
    		border="0" /></a>
		<a href="<?php echo $livesite;?>administrator/index2.php?option=com_pudba&db=<?php echo $dbn; ?>&task=newtable&q=" 
    		onMouseOver="return overlib('<?php echo PUD_CREATE_TABLE_DESC; ?>', CAPTION,
        	'<?php echo PUD_NEW_TABLE; ?>', BELOW, RIGHT);"
    		onmouseout="return nd();" ><img
    		src="<?php echo $livesite?>administrator/images/new_f2.png"
    		border="0" height=32 width=32/></a>
		</td></tr>
		<tr><td colspan=3><center><?php echo $message; ?></center></td></tr></table>
		<form method="post" name="adminForm" action="index2.php" enctype="multipart/form-data">
		<input type="hidden" name="refresh" value="">
		<input type="hidden" name="option" value="com_pudba">
		<?
	} //end function print_header
	function WritePagination($pageno,$url,$count)
	{
		if ($count > 0)
			$lastpage = ceil($count/30);
		else
			$lastpage = 1;
		$pageno = (int)$pageno;
		if ($pageno < 1) 
		{
   			$pageno = 1;
		} 
		elseif ($pageno > $lastpage) 
		{
   			$pageno = $lastpage;
		} 
		$pagination = "<table border=0 cellpadding=0 cellspacing=0 width=100%><tr><td width=27%>&nbsp;</td><td width=15%><center>";
		if ($pageno == 1) 
		{
   			$pagination .= "FIRST  PREV</center></td>";
		} 
		else 
		{
   			$pagination .= " <a href='".$url."'>FIRST</a>  ";
   			$prevpage = $pageno-1;
   			$pagination .= " <a href='".$url."&pageno=$prevpage'>PREV</a></center></td>";
		} 
		$pagination .= "<td width=15%><center>( Page ".$pageno." of ".$lastpage." )</center></td><td width=15%><center>";
		if ($pageno == $lastpage) 
		{
   			$pagination .= "NEXT  LAST</center></td>";
		} 
		else 
		{
   			$nextpage = $pageno+1;
   			$pagination .= " <a href='".$url."&pageno=$nextpage' >NEXT</a>  ";
   			$pagination .= " <a href='".$url."&pageno=$lastpage' >LAST</a></center></td>";
		} 
		$pagination .= "<td width=27%>&nbsp;</td></tr></table>";
		return $pagination;
	}
}