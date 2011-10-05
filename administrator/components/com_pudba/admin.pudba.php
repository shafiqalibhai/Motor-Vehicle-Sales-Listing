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

$absolutepath = $mainframe->getCfg('absolute_path');
require_once( $mainframe->getPath( 'admin_html' ) );
if(!defined ('_JEXEC')){
	$livesite = $mainframe->getCFG(live_site)."/";
}else{
	$livesite = $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
}
$dbhost = $mainframe->getCfg('host');
$dbuser = $mainframe->getCfg('user');
$dbpass = $mainframe->getCfg('password');
$defaultdb = $mainframe->getCfg('db');
$task = mosGetParam($_REQUEST, 'task');
$cid = mosGetParam($_REQUEST, 'cid', array(0));
$id = mosGetParam($_REQUEST, 'id');
$tablename = mosGetParam($_REQUEST, 'table_name', "");
$SQLq=trim(mosGetParam($_REQUEST,'q',"show tables"));

global $DB,$pageno;
$DB=array(
	'user'=>"$dbuser",#required
	'pwd'=>"$dbpass", #required
	'db'=>"$defaultdb",  #default DB
	'host'=>"$dbhost",#optional
	'port'=>"",#optional
	'chset'=>"",#default charset, optional
	);
$self=$_SERVER['PHP_SELF'];

//strip quotes if they set
if (@get_magic_quotes_gpc())
{
	$_REQUEST=array_map('killmq',$_REQUEST);
}

if ($_REQUEST['refresh'] && $DB['db'] && !$SQLq) 
	$SQLq="show tables";

switch ($task) 
{
	case "shex":
		clspuminiadmin::print_header();
		clspuminiadmin::print_export($_REQUEST['t']);
		break;
	case "doex":
		do_export();
		$SQLq = "show tables";
		clspuminiadmin::print_header();
		do_sql($SQLq,$tablename,$pageno);
		break;
	case "shim":
		clspuminiadmin::print_header();
    clspuminiadmin::print_import();
		break;
	case "drow":
		$keyfield = mosGetParam($_REQUEST, 'keyfield');
		$keyvalue = mosGetParam($_REQUEST, 'keyvalue');
       		$res = DeleteRow($keyfield,$keyvalue,$tablename);
		if ($res !== false)
			$mess = "<font color=green size=4>".PUD_ROW_DELETED."</font>";
		else
			$mess = "<font color=red size=4>".PUD_ROW_DELETE_ERROR." ".$res."</font>";
		clspuminiadmin::print_header($mess);
		do_sql($SQLq,$tablename,$pageno);
		break;
	case "doim":
    $res = do_import();
		$SQLq = "show tables";
		clspuminiadmin::print_header($res);
		do_sql($SQLq,$tablename,$pageno);
		break;
	case "shsql":
		clspuminiadmin::print_header();
		clspuminiadmin::print_screen();
		break;
	case "editrow":
		$keyfield = mosGetParam($_REQUEST, 'keyfield');
		$keyvalue = mosGetParam($_REQUEST, 'keyvalue');
		clspuminiadmin::print_header();
		clspuminiadmin::print_edit_row($tablename,$keyfield,$keyvalue);
		break;
	case "saveedit":
		$res = SaveEdit($_REQUEST);
		if ($res !== false)
			$mess = "<font color=green size=4>".PUD_ROW_UPDATED."</font>";
		else
			$mess = "<font color=red size=4>".PUD_ROW_ERROR." ".$res."</font>";
		clspuminiadmin::print_header($mess);
		do_sql($SQLq,$tablename,$pageno);
		break;
	case "newtable":
		clspuminiadmin::print_header();
		clspuminiadmin::print_new_table();
		break;
	case "insert":
		clspuminiadmin::print_header();
		clspuminiadmin::print_insert($tablename);
		break;
	case "saveinsert":
		$res = saveinsert($_REQUEST);
		$SQLq = "show tables";
		if ($res === true)
			$mess = "<font color=green size=4>".PUD_INSERT_SUCCESS."</font>";
		else
			$mess = "<font color=red size=4>".PUD_INSERT_ERROR."<br> ".$res."</font>";
		clspuminiadmin::print_header($mess);
		do_sql($SQLq,$tablename,$pageno);
		break;
	case "savetable":
		$fieldnames = mosGetParam($_REQUEST, 'field_name');
		$fieldtypes = mosGetParam($_REQUEST, 'field_type');
		$fieldlengths = mosGetParam($_REQUEST, 'field_length');
		$fielddefaults = mosGetParam($_REQUEST, 'field_default');
		$fieldauto = mosGetParam($_REQUEST, 'field_auto');
		$fieldkey = mosGetParam($_REQUEST, 'field_key');
		$fieldnull = mosGetParam($_REQUEST, 'field_null', false);
		$res = SaveTable($tablename,$fieldnames,$fieldtypes,$fieldlengths,$fielddefaults,$fieldnull,$fieldkey,$fieldauto);
		if ($res === true)
			$mess = "<font color=green size=4>".PUD_TABLE_CREATE_SUCCESS."</font>";
		else
			$mess = "<font color=red size=4>".PUD_TABLE_CREATE_ERROR."<br> ".$res."</font>";
		clspuminiadmin::print_header($mess);
		do_sql($SQLq,$tablename,$pageno);
		break;
	default:
		$res = do_sql($SQLq,$tablename,$pageno);
		clspuminiadmin::print_header();
		echo $res;
		break;
	
}
if ($reccount > 0)
	echo "<br>".$reccount." Records Returned";
clspuminiadmin::print_footer();

function DeleteRow($keyfield,$keyvalue,$tablename)
{
	global $database;
	$query = "DELETE FROM `".$tablename."` WHERE `".$keyfield."` LIKE '".$keyvalue."'";
	$database->setQuery($query);
	$res = $database->query();
	return $res;
}
function saveinsert($request)
{
	global $database;
	$tablename = $request['table_name'];
	$query = "INSERT INTO ".$tablename." (";
	foreach ($request as $field=>$value)
	{
		if (stripos($field,"pud_") !== false)
		{
			$fieldname = substr($field,4);
			$query .= "`".URLDECODE($fieldname) . "`,";
		}
	}
	//eat off that last comma.  yum!
	$query = substr($query,0,strlen($query)-1);
	$query .= ") VALUES ( ";
	foreach ($request as $field=>$value)
	{
		if (stripos($field,"pud_") !== false)
		{
			$query .= "'".URLDECODE($value) . "',";
		}
	}
	//eat off that last comma.  yum!
	$query = substr($query,0,strlen($query)-1);
	$query .=" )";
	$database->setQuery($query);
	$res = $database->query();
	return $res;
}

function SaveEdit($requests)
{
	$query = "UPDATE ".URLDECODE($requests['table'])." SET ";
	foreach ($requests as $field=>$value)
	{
		if (stripos($field,"pud_") !== false)
		{
			$fieldname = substr($field,4);
			$query .= "`".URLDECODE($fieldname) . "` = '" . URLDECODE(mysql_real_escape_string($value)) ."',";
		}
		
	}
	//eat off that last comma.  yum!
	$query = substr($query,0,strlen($query)-1);
	$query .= " WHERE ".$requests['keyfield']. " LIKE ".$requests['keyvalue'];
	global $database;
	$database->setQuery($query);
	$res = $database->query();
	return $res;

}
function SaveTable($tablename,$fieldnames,$fieldtypes,$fieldlengths,$fielddefaults,$fieldnull,$fieldkey,$fieldauto)
{
	$i = 0;
	$index = false;
	$unique = false;
	$uniquetxt = "";
	$indextxt = "";
	$query = "CREATE TABLE `".$tablename."` (";
	foreach($fieldnames as $fieldname)
	{
		if ($fieldtypes[$i] == "INT" && ($fieldlengths[$i] > 11 || $fieldlengths[$i] < 1))
			$fieldlengths[$i] == 11;
		if ($fieldtypes[$i] == "VARCHAR" && ($fieldlengths[$i] > 255 || $fieldlengths[$i] < 1))
			$fieldlengths[$i] == 255;
		$query .= "`".$fieldname."` ".$fieldtypes[$i];
		if ($fieldlengths[$i] != "")
			$query.= "(".$fieldlengths[$i].")";
		if ($fieldnull[$i]=="false")
			$query.=" NOT NULL";
		if ($fieldauto[$i] == "true")
			$query .= " AUTO_INCREMENT";
		if (strlen($fielddefaults[$i]) > 0)
			$query .= " DEFAULT ".$fielddefaults[$i];
		if ($fieldkey[$i] == "primary")
			$query .= " PRIMARY KEY";
		elseif ($fieldkey[$i] == "unique")
		{
			$unique = true;
			if (strlen($uniquetxt)>0)
				$uniquetxt .=",";
			$uniquetxt .= "`".$fieldname."`";
		}
		elseif ($fieldkey[$i] == "index")
		{
			$index = true;
			if (strlen($indextxt)>0)
				$indextxt .=",";
			$indextxt .= "`".$fieldname."`";
		}
		$query .=",";
		$i = $i+1;
	}
	if ($index)
	{
		$query .= " INDEX (".$indextxt."),";
	}
	if ($unique)	
	{
		$query .= " UNIQUE (".$uniquetxt."),";
	}
	//eat off that last comma.  yum!
	$query = substr($query,0,strlen($query)-1);
	//close out the query
	$query .=");";
	//May as well run this one through Joomla
	global $database;
	$database->setQuery($query);
	$res = $database->query($query);
	if ($res === false)
		return $database->getErrorMsg();
	else
		return true;		
}

function do_sql($q,$tablename="",$pageno=1){
 global $dbh,$last_sth,$last_sql,$reccount,$SQLq;
 $pageno = mosGetParam( $_REQUEST, 'pageno', 1);
 $SQLq=$q;
 if (!do_multi_sql($q,'')){
    $res=false;
 }else{
    if ($last_sth && $last_sql){
       $SQLq=$last_sql;
       if (preg_match("/^select|show|explain/i",$last_sql)) {
          if ($q!=$last_sql){ 
							//say that requested Results are being displayed
          }
          $output = clspuminiadmin::display_select($last_sth,$last_sql,$pageno);
       } else {
         $reccount=mysql_affected_rows($dbh);
         $res= TRUE;
         if (preg_match("/^insert|replace/i",$last_sql)){
         	 $output = " Last inserted id=".get_identity();
         }
         if (preg_match("/^drop|truncate|repair|optimize/i",$last_sql)){
         	 if ($res === TRUE){
         	 		$output = "<center><font color=GREEN size=4><b>".PUD_SUCCESS."</b></font><br />Last Query:".$last_sql."</center><br />";
         		}else{
         			$output = "<center><font color=RED size=4><b>".PUD_FAILURE."</b></font><br />Last Query:".$last_sql."</center><br />";
         		}
         		$query = db_query("show tables",$dbh,0);
         		$output .= clspuminiadmin::display_select($query,"show tables",$pageno);
         }
       }
    }
 }
 return $output;
}

function db_connect($nodie=0){
 global $dbh,$DB,$err_msg;

 $dbh=mysql_connect($DB['host'].($DB['port']?":$DB[port]":''),$DB['user'],$DB['pwd']);
 if (!$dbh) {
    $err_msg='Cannot connect to the database because: '.mysql_error();
    if (!$nodie) die($err_msg);
 }

 if ($dbh && $DB['db']) {
  $res=mysql_select_db($DB['db'], $dbh);
  if (!$res) {
     $err_msg='Cannot select db because: '.mysql_error();
     if (!$nodie) die($err_msg);
  }else{
     if ($DB['chset']) db_query("SET NAMES ".$DB['chset']);
  }
 }

 return $dbh;
}

function db_checkconnect($dbh1=NULL, $skiperr=0){
 global $dbh;
 if (!$dbh1) $dbh1=&$dbh;
 if (!$dbh1 or !mysql_ping($dbh1)) {
    db_connect($skiperr);
    $dbh1=&$dbh;
 }
 return $dbh1;
}

function db_disconnect(){
 global $dbh;
 mysql_close($dbh);
}

function dbq($s){
 global $dbh;
 return mysql_real_escape_string($s,$dbh);
}

function db_query($sql, $dbh1=NULL, $skiperr=0)
{
 $dbh1=db_checkconnect($dbh1, $skiperr);
 $sth=mysql_query($sql, $dbh1);
 if (!$sth && $skiperr) return;
 catch_db_err($dbh1, $sth, $sql);
 return $sth;
}

function db_array($sql, $dbh1=NULL, $skiperr=0){#array of rows
 $sth=db_query($sql, $dbh1, $skiperr);
 if (!$sth) return;
 $res=array();
 while($row=mysql_fetch_assoc($sth)) $res[]=$row;
 return $res;
}

function catch_db_err($dbh, $sth, $sql=""){
 if (!$sth) die("Error in DB operation:<br>\n".mysql_error($dbh)."<br>\n$sql");
}

function get_identity($dbh1=NULL){
 $dbh1=db_checkconnect($dbh1);
 return mysql_insert_id($dbh1);
}

function get_db_select($sel=''){
 $result='';
 if ($_SESSION['sql_sd'] && !$_REQUEST['db']=='*'){//check cache
    $arr=$_SESSION['sql_sd'];
 }else{
   $arr=db_array("show databases");
   $_SESSION['sql_sd']=$arr;
 }

 return sel($arr,'Database',$sel);
}

function chset_select($sel=''){
 $result='';
 if ($_SESSION['sql_chset']){
    $arr=$_SESSION['sql_chset'];
 }else{
   $arr=db_array("show character set",NULL,1);
   $_SESSION['sql_chset']=$arr;
 }

 return sel($arr,'Charset',$sel);
}

function sel($arr,$n,$sel=''){
 foreach($arr as $a){
   $b=$a[$n];
   $res.="<option value='$b' ".($sel && $sel==$b?'selected':'').">$b</option>";
 }
 return $res;
}

function pen($p,$np=''){
 return str_replace('%p%',$p, $np);
}

function killmq($value){
 return is_array($value)?array_map('killmq',$value):stripslashes($value);
}

//during login only - from cookies or use defaults;
function loadcfg(){
 global $DB;
    $_SESSION['DB']=$DB;
 }

//each time - from session to $DB_*
function loadsess(){
 global $DB;

 $DB=$_SESSION['DB'];

 $rdb=$_REQUEST['db'];
 if ($rdb=='*') $rdb='';
 if ($rdb) {
    $DB['db']=$rdb;
 }
}



function do_export(){
 global $DB;
 $rt=$_REQUEST['t'];
 $t=split(",",$rt);
 $th=array_flip($t);
 $ct=count($t);

 header('Content-type: text/plain');
 header("Content-Disposition: attachment; filename=\"$DB[db]".(($ct==1&&$t[0])?".$t[0]":(($ct>1)?'.'.$ct.'tables':'')).".sql\"");

 $sth=db_query("show tables from $DB[db]");
 while($row=mysql_fetch_row($sth)){
   if (!$rt||array_key_exists($row[0],$th)) do_export_table($row[0],1);
 }
 exit;
}

function do_export_table($t='',$isvar=0){
 set_time_limit(600);
 $MAXI=838860;

 if ($_REQUEST['s']){
  $sth=db_query("show create table `$t`");
  $row=mysql_fetch_row($sth);
  echo "DROP TABLE IF EXISTS `$t`;\n$row[1];\n\n";
 }

 if ($_REQUEST['d']){
  $exsql='';
  echo "/*!40000 ALTER TABLE `$t` DISABLE KEYS */;\n";
  $sth=db_query("select * from `$t`");
  while($row=mysql_fetch_row($sth)){
    $values='';
    foreach($row as $value) $values.=(($values)?',':'')."'".dbq($value)."'";
    $exsql.=(($exsql)?',':'')."(".$values.")";
    if (strlen($exsql)>$MAXI) {
       echo "INSERT INTO `$t` VALUES $exsql;\n";$exsql='';
    }
  }
  if ($exsql) echo "INSERT INTO `$t` VALUES $exsql;\n";
  echo "/*!40000 ALTER TABLE `$t` ENABLE KEYS */;\n";
  echo "\n";
 }
 flush();
}

function do_import(){
 global $err_msg,$dbh;

 if ($_FILES['file1'] && $_FILES['file1']['name']){
  $filename=$_FILES['file1']['tmp_name'];
  if (!do_multi_sql('', $filename) ){
     $return="Error: ".mysql_error($dbh);
  }else{
     $return='Import done successfully';
     do_sql('show tables');
     return;
  }
 }else{
  $return="Error: Please select file first";
 }
 clspuminiadmin::print_import();
 return $return;
}

// multiple SQL statements splitter
function do_multi_sql($insql, $fname){
 set_time_limit(600);

 $sql='';
 $ochar='';
 $is_cmt='';
 $GLOBALS['insql_done']=0;
 while ( $str=get_next_chunk($insql, $fname) ){
    $opos=-strlen($ochar);
    $cur_pos=0;
    $i=strlen($str);
    while ($i--){
       if ($ochar){
          list($clchar, $clpos)=get_close_char($str, $opos+strlen($ochar), $ochar);
          if ( $clchar ) {
             if ($ochar=='--' || $ochar=='#' || $is_cmt ){
                $sql.=substr($str, $cur_pos, $opos-$cur_pos );
             }else{
                $sql.=substr($str, $cur_pos, $clpos+strlen($clchar)-$cur_pos );
             }
             $cur_pos=$clpos+strlen($clchar);
             $ochar='';
             $opos=0;
          }else{
             $sql.=substr($str, $cur_pos);
             break;
          }
       }else{
          list($ochar, $opos)=get_open_char($str, $cur_pos);
          if ($ochar==';'){
             $sql.=substr($str, $cur_pos, $opos-$cur_pos+1);
             if (!do_one_sql($sql)) return 0;
             $sql='';
             $cur_pos=$opos+strlen($ochar);
             $ochar='';
             $opos=0;
          }elseif(!$ochar) {
             $sql.=substr($str, $cur_pos);
             break;
          }else{
             $is_cmt=0;if ($ochar=='/*' && substr($str, $opos, 3)!='/*!') $is_cmt=1;
          }
       }
    }
 }

 if ($sql){
    if (!do_one_sql($sql)) return 0;
    $sql='';
 }

 return 1;
}

//read from insql var or file
function get_next_chunk($insql, $fname){
 global $LFILE, $insql_done;
 if ($insql) {
    if ($insql_done){
       return '';
    }else{
       $insql_done=1;
       return $insql;
    }
 }
 if (!$fname) return '';
 if (!$LFILE){
    $LFILE=fopen($fname,"r+b") or die("Can't open [$fname] file $!");
 }
 return fread($LFILE, 64*1024);
}

function get_open_char($str, $pos){
 if ( preg_match("/(\/\*|^--|(?<=\s)--|#|'|\"|;)/", $str, $m, PREG_OFFSET_CAPTURE, $pos) ) {
    $ochar=$m[1][0];
    $opos=$m[1][1];
 }
 return array($ochar, $opos);
}

#RECURSIVE!
function get_close_char($str, $pos, $ochar){
 $aCLOSE=array(
   '\'' => '(?<!\\\\)\'|(\\\\+)\'',
   '"' => '(?<!\\\\)"',
   '/*' => '\*\/',
   '#' => '[\r\n]+',
   '--' => '[\r\n]+',
 );
 if ( $aCLOSE[$ochar] && preg_match("/(".$aCLOSE[$ochar].")/", $str, $m, PREG_OFFSET_CAPTURE, $pos ) ) {
    $clchar=$m[1][0];
    $clpos=$m[1][1];
    $sl=strlen($m[2][0]);
    if ($ochar=="'" && $sl){
       if ($sl % 2){ #don't count as CLOSE char if number of slashes before ' ODD
          list($clchar, $clpos)=get_close_char($str, $clpos+strlen($clchar), $ochar);
       }else{
          $clpos+=strlen($clchar)-1;$clchar="'";#correction
       }
    }
 }
 return array($clchar, $clpos);
}

function do_one_sql($sql)
{
	global $last_sth,$last_sql;
	$pageno = mosGetParam( $_REQUEST, 'pageno', 1);
 	$sql=trim($sql);
 	$sql=preg_replace("/;$/","",$sql);
 	if ($sql){
		$last_sql=$sql;
  	if (preg_match("/^select/i",$sql) && !preg_match("/limit +\d+/i", $sql)){
			$start = ($pageno-1) * 30;
      $sql.=" LIMIT $start,30";
    }
    $last_sth=db_query($sql,0,'noerr');
    return $last_sth;
 	}
 	return 1;
}

function do_sht(){
 $cb=$_REQUEST['cb'];
 switch ($_REQUEST['dosht']){
  case 'exp': $_REQUEST['t']=join(",",$cb);
	print_export();
	exit;
  case 'drop': $sq='DROP TABLE';break;
  case 'trunc': $sq='TRUNCATE TABLE';break;
  case 'opt': $sq='OPTIMIZE TABLE';break;
 }
 if ($sq && is_array($cb)){
  foreach($cb as $v){
   $sql.=$sq." $v;\n";
  }
  do_sql($sql);
 }
 do_sql('show tables');
}

?>