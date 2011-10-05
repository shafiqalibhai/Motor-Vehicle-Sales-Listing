<?php
/**
* @version 1.4
* @package JDownloads
* @copyright (C) 2008 www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* 
*
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

Error_Reporting(E_ERROR);

define( 'EL_ADMIN_PATH', dirname(__FILE__) );

global $mainframe, $option, $my, $tree, $jlistConfig, $limit; $limitstart;

require_once( $mainframe->getPath( 'admin_html' ) );
require_once( $mainframe->getPath( 'class' ) );
require_once(EL_ADMIN_PATH.'/../../includes/pageNavigation.php');

$GLOBALS['jlistConfig'] = buildjlistConfig();

// Access
if ($jlistConfig['backend.manager.access'] == 0){
    if (!($acl->acl_check( 'administration', 'edit', 'users', $my->usertype, 'components', 'all' )
        || $acl->acl_check( 'administration', 'edit', 'users', $my->usertype, 'components', 'com_jdownloads' ))) {
            mosRedirect( 'index2.php', _NOT_AUTH);
        }
}        

$cid 	= mosGetParam($_REQUEST, 'cid', array());
$cat_id = intval(mosGetParam($_REQUEST, 'cat_id', -1));
$limit = intval( mosGetParam( $_REQUEST, 'limit', $jlistConfig['files.per.side.be'] ) );
$limitstart = intval( mosGetParam( $_REQUEST, 'limitstart', 0 ) );
$task 	= mosGetParam( $_REQUEST, 'task', '' );

switch($task){

	case 'categories.publish':
	categoriesPublish( $cid, 1, $option );
	break;

	case 'categories.unpublish':
	categoriesPublish( $cid, 0, $option );
	break;

	case 'categories.edit':
	categoriesEdit($option,$cid);
	break;

	case 'categories.list':
	categoriesList($option, $task, $limitstart);
	break;

	case 'categories.save':
	categoriesSave($option);
	break;

	case 'categories.apply':
	categoriesSave($option,1);
	break;

	case 'categories.delete':
	categoriesDelete($option, $cid);
	break;

	case 'categories.cancel':
	categoriesCancel($option);
	break;

    case 'categories.orderup':
    categoriesOrder( $cid[0], -1, $option );
    break;

    case 'categories.orderdown':
    categoriesOrder( $cid[0], 1, $option );
    break;

    case 'saveorder':
        $typ = mosGetParam( $_REQUEST, 'action' );
        if ($typ == 'file') {
          filesSaveOrder( $cid, $cat_id );
        } else {
          categoriesSaveOrder( $cid );
        }
    break;

/*FILES*/

	case 'files.publish':
	filesPublish( $cid, 1, $option, $cat_id );
	break;

	case 'files.unpublish':
	filesPublish( $cid, 0, $option, $cat_id );
	break;

	case 'files.edit':
    filesEdit($option,$cid,$cat_id);
	break;

	case 'files.list':
	filesList($option, $task, $cat_id, $limitstart);
	break;

	case 'files.save':
	filesSave($option, $cat_id);
	break;
    
    case 'files.copy':
    filesCopy($option, $cid, $cat_id);
    break;
    
    case 'files.copy.save':
    filesCopySave($option, $cat_id);
    break;

	case 'files.apply':
	filesSave($option, $cat_id, 1);
	break;

	case 'files.delete':
	filesDelete($option, $cid, $cat_id);
	break;

	case 'files.remove':
	filesRemove($option, $cid, $cat_id);
	break;

	case 'files.cancel':
	filesCancel($option, $cat_id);
	break;

    case 'files.saveorder':
    filesSaveOrder( $cid, $cat_id );
    break;
    
    case 'files.orderup':
	filesOrder( $cid[0], -1, $option, $cat_id );
	break;

	case 'files.orderdown':
	filesOrder( $cid[0], 1, $option, $cat_id );
	break;

// Licenses

	case 'license.edit':
	editLicense($option, $cid);
	break;
	
	case 'license.save':
	saveLicense($option);
	break;

	case 'license.delete':
	deleteLicense($option, $cid);
	break;

	case 'license.cancel':
	cancelLicense($option);
	break;


	case 'license.list':
	listLicense($option);
	break;

// Templates

	case 'templates.menu':
	menuTemplates($option, $cid);
	break;

	case 'templates.edit.cats':
	editTemplatesCats($option, $cid);
	break;

    case 'templates.save.cats':
	saveTemplatesCats($option);
	break;

    case 'templates.apply.cats':
	saveTemplatesCats($option,1);
	break;

	case 'templates.delete.cats':
	deleteTemplatesCats($option, $cid);
	break;

	case 'templates.cancel.cats':
	cancelTemplatesCats($option);
	break;

	case 'templates.list.cats':
	listTemplatesCats($option);
	break;

	case 'templates.active.cats':
	activeTemplatesCats($option, $cid);
	break;

	case 'templates.edit.files':
	editTemplatesFiles($option, $cid);
	break;

    case 'templates.save.files':
	saveTemplatesFiles($option);
	break;

    case 'templates.apply.files':
	saveTemplatesFiles($option,1);
	break;

	case 'templates.delete.files':
	deleteTemplatesFiles($option, $cid);
	break;

	case 'templates.cancel.files':
	cancelTemplatesFiles($option);
	break;

	case 'templates.list.files':
	listTemplatesFiles($option);
	break;

	case 'templates.active.files':
	activeTemplatesFiles($option, $cid);
	break;

    case 'templates.edit.details':
    editTemplatesDetails($option, $cid);
    break;

    case 'templates.save.details':
    saveTemplatesDetails($option);
    break;

    case 'templates.apply.details':
    saveTemplatesDetails($option,1);
    break;

    case 'templates.delete.details':
    deleteTemplatesDetails($option, $cid);
    break;

    case 'templates.cancel.details':
    cancelTemplatesDetails($option);
    break;

    case 'templates.list.details':
    listTemplatesDetails($option);
    break;

    case 'templates.active.details':
    activeTemplatesDetails($option, $cid);
    break;    
   
    
	case 'templates.edit.summary':
	editTemplatesSummary($option, $cid);
	break;

    case 'templates.save.summary':
	saveTemplatesSummary($option);
	break;

    case 'templates.apply.summary':
	saveTemplatesSummary($option,1);
	break;

	case 'templates.delete.summary':
	deleteTemplatesSummary($option, $cid);
	break;

	case 'templates.cancel.summary':
	cancelTemplatesSummary($option);
	break;

	case 'templates.list.summary':
	listTemplatesSummary($option);
	break;

	case 'templates.active.summary':
	activeTemplatesSummary($option, $cid);
	break;
	
// css edit
	case 'css.edit':
	cssEdit($option);
	break;

// css save
	case 'css.save':
	cssSave($option, $css_file, $css_text);
	break;

// language file edit
	case 'language.edit':
	languageEdit($option);
	break;

// language file save
	case 'language.save':
	languageSave($option, $lang_file, $lang_text);
	break;

//  create backup file
	case 'backup':
	runBackup($option);
	break;

//  upload file for restore
	case 'restore':
	showRestore($option, $task);
	break;

//  run restore file
    case 'restore.run':
    runRestore($option, $task);
    break;
    
//  manage download directories
    case 'directories.edit':
    directoriesEdit($option);
    break;

//  create new directory
    case 'directories.new':
    directoriesNew($option);
    break;

//  delete sub directory
    case 'directory.remove':
    directoryRemove($option);
    break;

// info
	case 'info':
	showInfo($option);
	break;

// info
	case 'support':
	showSupport($option);
	break;
    
    case 'install.sample':
    sampleInstall($option);
    break;
    
// Configuration
	case 'config.save':
	saveConfig($option);
	break;

	case 'config.show':
	showConfig($option);
	break;

	default:
	jlist_HTML::controlPanel($option, $task);
	break;
}

/* checkFiles
/
/ check uploaddir and subdirs for variations
/ 
/
*/
function checkFiles($task) {
	global $database, $mosConfig_absolute_path, $jlistConfig;
	//check if all files and dirs in the uploaddir directory are listed
	if($jlistConfig['files.autodetect'] || $task == 'restore.run'){
		if(file_exists($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'])){
          $startdir       = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/';
          $dir_len      = strlen($startdir);
          $dir          = $startdir;
          $only         = FALSE;
          $type         = array();
          if ($jlistConfig['all.files.autodetect']){
              $allFiles     = true;
          } else {   
              $allFiles     = FALSE;
              $type =  explode(',', $jlistConfig['file.types.autodetect']);
          }    
          $recursive    = TRUE;
          $onlyDir      = TRUE;
          $files        = array();
          $file         = array();
          
          $dirlist      = array();
          
          $new_files	   = 0;
          $new_dirs_found  = 0;
          $new_dirs_create = 0;
          $new_dirs_errors = 0;
          $new_dirs_exists = 0;
          $new_cats_create = 0;  
          
          $log_array = array();          

          // zuerst neue cats suchen
          clearstatcache();
          $searchdir    = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/';
          $searchdirs   = array();
          $dirlist = searchdir($searchdir);
          $no_writable = 0;
          for ($i=0; $i < count($dirlist); $i++) {
              // no tempzifiles directory
              if(strpos($dirlist[$i], 'tempzipfiles') === FALSE) {
                  if (!is_writable($dirlist[$i])){
                      $no_writable++;
                  }
                  $dirlist[$i] = str_replace($searchdir, '', $dirlist[$i]);
                  // am ende / löschen
                  $pos = strrpos($dirlist[$i], '/');
                  $dirlist[$i] = substr($dirlist[$i], 0, $pos);
                  $searchdirs[] = $dirlist[$i];
              }
          }  
          for ($i=1; $i < count($searchdirs); $i++) {
             $dirs = explode('/', $searchdirs[$i]);
             $sum = count($dirs);
             // this characters are not allowed in foldernames
             if (!eregi ( "[?:*'\"]", $searchdirs[$i])) {
               // prüfen ob dir als cat vorhanden
               $database->setQuery("SELECT COUNT(*) FROM #__jdownloads_cats WHERE cat_dir = '$searchdirs[$i]'");
               $cat_da = $database->loadResult(); 
               // wenn nicht - hinzufügen
               if (!$cat_da) {
                   $new_dirs_found++;
                   // neue cat anlegen
                   $row = new jlist_cats($database);
                   // bind it to the table
                   if (!$row -> bind($_POST)) {
                       echo "<script> alert('".$row -> getError()."'); window.history.go(-1); </script>\n";
                       exit();
                   }
                   $row->cat_description = '';    
                   $row->cat_title = $dirs[$sum - 1];
                   $row->cat_pic = $jlistConfig['cat.pic.default.filename'];                                 
                   if ($sum > 1) {
                       // cat_id für parent_id holen
                       $parent = substr($searchdirs[$i], 0, strrpos($searchdirs[$i] , '/') );
                       $database->setQuery("SELECT cat_id FROM #__jdownloads_cats WHERE cat_dir = '$parent'");
                       $row->parent_id = $database->loadResult();                        
                   }    
                   $row->cat_dir = $searchdirs[$i];
                   if (!$row -> store()) {
                       echo "<script> alert('".$row -> getError()."'); window.history.go(-1); </script>\n";
                       exit();
                   } else {
                       if(!$row->cat_id) $row->cat_id = mysql_insert_id();
                   }
                   $row->updateOrder(); 
                   $new_cats_create++;
                   $log_array[] = strftime($jlistConfig['global.datetime']).' - '._JLIST_AUTO_CAT_CHECK_ADDED.' <b>'.$searchdirs[$i].'</b><br />';
               }
             }      
          }
          
          // Prüfen ob alle publishte cat-dirs existieren
          $mis_cats = 0;
          $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE published=1");
          $cats = $database->loadObjectList();
          foreach($cats as $cat){
                $cat_dir = $searchdir.$cat->cat_dir;
                // wenn nicht da - unpublishen
                if(!is_dir($cat_dir)){
                    $database->setQuery("UPDATE #__jdownloads_cats SET published = 0 WHERE cat_id = '$cat->cat_id'");
                    $database->query();
                    $mis_cats++;
                    $log_array[] = strftime($jlistConfig['global.datetime']).' - '._JLIST_AUTO_CAT_CHECK_DISABLED.' <b>'.$cat->cat_dir.'</b><br />';
               }  
          }
          // when add categories - the access rigts must checked from all
          if ($new_cats_create){
              $sum = set_rights_of_cat (0, '00', $sum);    // all cats will checked   
          }    
          
          // alle files suchen und mit jdownloads_files abgleichen
          $all_dirs = scan_dir($dir, $type, $only, $allFiles, $recursive, $onlyDir, $files);
          if ($all_dirs != FALSE) {
              reset ($files);
              $new_files = 0;
              foreach($files as $key3 => $array2) {
                  $filename = $files[$key3]['file'];
                   if ($filename <> '') {
                      // no files in tempzipfiles and jD root directory
                     if(strpos($files[$key3]['path'], 'tempzipfiles') === FALSE && $files[$key3]['path'] != $startdir) {
                         $dir_path_total = $files[$key3]['path'];
                         $restpath = substr($files[$key3]['path'], $dir_len);
                         $only_dirs = substr($restpath, 0, strlen($restpath) - 1);
                         // existiert filename in files?
                         $exist_file = false;
                         $database->setQuery("SELECT * FROM #__jdownloads_files WHERE url_download = '$filename'");
                         $row_file_exists = $database->loadObjectList();
                         // wenn da - in cats suchen
                         if ($row_file_exists) {
                            foreach ($row_file_exists as $row_file_exist) {
                              if (!$exist_file) { 
                                $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE cat_dir = '$only_dirs' AND cat_id = '$row_file_exist->cat_id'" );
                                $row_cat_find = $database->loadResult();               
                               
                                if ($row_cat_find) {
                                    $exist_file = true;
                                } else {
                                   $exist_file = false;                                    
                                }    
                              }
                            }     
                         }  else {
                              $exist_file = false;
                         }    
                         // wenn nicht vorhanden und keine unerlaubten zeichen in foldername
                         if(!$exist_file && !eregi("['\\\"]", $only_dirs)) {
                            $database->setQuery("SELECT cat_id FROM #__jdownloads_cats WHERE cat_dir = '$only_dirs'");
                            $cat_id = $database->loadResult();
                            
                            $file_obj = new jlist_files($database);
                            $file_obj->url_download   = $filename;
                            $file_obj->file_title     = $filename;
                            $file_obj->size           = $files[$key3]['size'];
                            $file_obj->description    = $filename;                                                                                       $file_obj->date_added     = mosCurrentDate('%Y.%m.%d %H:%M:%S');
                            $file_obj->cat_id         = $cat_id;
                            $file_obj->file_pic       = $jlistConfig['file.pic.default.filename'];
                            $file_obj->created_by     = _JLIST_AUTO_FILE_CHECK_IMPORT_BY;
                            // nur sofort publishen wenn option aktiv
                            if ($jlistConfig['autopublish.founded.files']){
                                $file_obj->published = 1;
                            } else {
                                $file_obj->published = 0;
                            }    
                            $file_obj->store();
                            $file_obj->updateOrder();
                            $new_files++;
                            $log_array[] = strftime($jlistConfig['global.datetime']).' - '._JLIST_AUTO_FILE_CHECK_ADDED.' <b>'.$only_dirs.'/'.$filename.'</b><br />';
                         }                   
                      }
                  }
              }  
          }					
	  
          //prüfen ob download dateien alle physisch vorhanden - sonst unpublishen
          $mis_files = 0;
	      $database->setQuery("SELECT * FROM #__jdownloads_files WHERE published=1");
          $files = $database->loadObjectList();
	      foreach($files as $file){
		      // nur interne files testen
              if ($file->url_download <> ''){   
                $database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$file->cat_id'");
                $cat_dir = $database->loadResult();  
                $cat_dir_long = $startdir.$cat_dir.'/'.$file->url_download;
                // wenn nicht da - unpublishen
                if(!is_file($cat_dir_long)){
                    $database->setQuery("UPDATE #__jdownloads_files SET published = 0 WHERE file_id = '$file->file_id'");
                    $database->query();
                    $mis_files++;
                    $log_array[] = strftime($jlistConfig['global.datetime']).' - '._JLIST_AUTO_FILE_CHECK_DISABLED.' <b>'.$cat_dir.'/'.$file->url_download.'</b><br />';
               }  
             }
          }
           
       // save log
       if ($log_array) {
           foreach ($log_array as $log) {
                $log_message .= $log;
           }
           if ($task != 'restore.run'){
                $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '$log_message' WHERE setting_name = 'last.log.message'");
                $database->query();
                $jlistConfig['last.log.message'] = $log_message;
           }     
       }        
        
       if ($task == 'restore.run'){
            return $log_message;
       } 
              
        if ($task == '') {
            echo '<table width="100%" bgcolor="#FFFFCC" cellpadding="10px" cellspacing="0px"><tr><td align="center">'._JLIST_BACKEND_AUTOCHECK_TITLE.'<br />';
            if ($new_cats_create > 0){
                echo '<font color="#FF6600"><b>'.$new_cats_create.' '._JLIST_BACKEND_AUTOCHECK_NEW_CATS.'</b></font><br />';
            } else {
                echo '<font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS.'</b></font><br />';
            }
            
            if ($new_files > 0){
                echo '<font color="#FF6600"><b>'.$new_files.' '._JLIST_BACKEND_AUTOCHECK_NEW_FILES.'</b></font><br />';
            } else {
                echo '<font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES.'</b></font><br />';
            }            
            
            if ($mis_cats > 0){
                echo '<font color="##990000"><b>'.$mis_cats.' '._JLIST_BACKEND_AUTOCHECK_MISSING_CATS.'</b></font><br />';
            } else {
                echo '<font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS.'</b></font><br />';
            }    
                
            
            if ($mis_files > 0){
                echo '<font color="#990000"><b>'.$mis_files.' '._JLIST_BACKEND_AUTOCHECK_MISSING_FILES.'</b><br /></td></tr></table>';
            } else {
                echo '<font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES.'</b><br /></td></tr></table>';
            }
        
        if ($log_message)  echo '<table width="100%" bgcolor="#FFFFCC" cellpadding="10px" cellspacing="0px"><tr><td align="center">'._JLIST_BACKEND_AUTOCHECK_LOG_TITLE.'<br />'.$log_message.'</td></tr></table>';

        } else {
            
            if ($task == 'files.list') {
            echo '<table width="100%" bgcolor="#FFFFCC" cellpadding="10px" cellspacing="0px"><tr><td>'._JLIST_BACKEND_AUTOCHECK_TITLE.'</td>';
            if ($new_files > 0){
                echo '<td><font color="#FF6600"><b>'.$new_files.' '._JLIST_BACKEND_AUTOCHECK_NEW_FILES.'<br />'._JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE.'</b></font></td>';
            } else {
                echo '<td><font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES.'</b></font></td>';
            }
            if ($mis_files > 0){
                echo '<td><font color="#990000"><b>'.$mis_files.' '._JLIST_BACKEND_AUTOCHECK_MISSING_FILES.'<br />'._JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE.'</b></td></tr></table>';
            } else {
                echo '<td><font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES.'</b></td></tr></table>';
            }
            
        if ($log_message)  echo '<table width="100%" bgcolor="#FFFFCC" cellpadding="10px" cellspacing="0px"><tr><td align="center">'._JLIST_BACKEND_AUTOCHECK_LOG_TITLE.'<br />'.$log_message.'</td></tr></table>';
          }
          
            if ($task == 'categories.list') {
            echo '<table width="100%" bgcolor="#FFFFCC" cellpadding="10px" cellspacing="0px"><tr><td>'._JLIST_BACKEND_AUTOCHECK_TITLE.'</td>';
            if ($new_cats_create > 0){
                echo '<td><font color="#FF6600"><b>'.$new_cats_create.' '._JLIST_BACKEND_AUTOCHECK_NEW_CATS.'<br />'._JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE.'</b></font></td>';
            } else {
                echo '<td><font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS.'</b></font></td>';
            }
            if ($mis_cats > 0){
                echo '<td><font color="#990000"><b>'.$mis_cats.' '._JLIST_BACKEND_AUTOCHECK_MISSING_CATS.'<br />'._JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE.'</b></td></tr></table>';
            } else {
                echo '<td><font color="green"><b>'._JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS.'</b></td></tr></table>';
            }
            
        if ($log_message)  echo '<table width="100%" bgcolor="#FFFFCC" cellpadding="10px" cellspacing="0px"><tr><td align="center">'._JLIST_BACKEND_AUTOCHECK_LOG_TITLE.'<br />'.$log_message.'</td></tr></table>';
          }
          
          
        }
        
		} else {
			// error upload dir not exists
            echo '<font color="red"><b>'._JLIST_AUTOCHECK_DIR_NOT_EXIST.'<br /><br />'._JLIST_AUTOCHECK_DIR_NOT_EXIST_2.'</b></font>';
			
		}
    }            
}


/**
 * Füllt das Array mit den Dateiinformationen
 * (Pfad, Verzeichnisname, Dateiname, Dateigröße, letzte Aktualisierung
 *
 * @param		string	$dir 			Pfad zum Verzeichnis
 * @param		string	$file			enthält den Dateinamen
 * @param		string	$onlyDir		Enthält nur den Verzeichnisnamen
 * @param		array		$type		Suchmuster dateitypen
 * @param		bool		$allFiles	Listet alle Dateien in den Verzeichnissen auf ohne Rücksicht auf $type
 * @param		array		$files		Enthält den Inhalt der Verzeichnisstruktur
 * @return	array						Das Array mit allen Dateinamen
 */
function buildArray($dir,$file,$onlyDir,$type,$allFiles,$files) {

	$typeFormat = FALSE;
	foreach ($type as $item)
  {
  	if (strtolower($item) == substr(strtolower($file), -strlen($item)))
			$typeFormat = TRUE;
	}

	if($allFiles || $typeFormat == TRUE)
	{
		if(empty($onlyDir))
			$onlyDir = substr($dir, -strlen($dir), -1);
		$files[$dir.$file]['path'] = $dir;
		$files[$dir.$file]['file'] = $file;
		$files[$dir.$file]['size'] = fsize($dir.$file);
		$files[$dir.$file]['date'] = filemtime($dir.$file);
	}
	return $files;
}

/**
 * Durchläuft rekursiv das zu durchsuchende Verzeichnis
 *
 * @param		string	    $dir 			Pfad zum Verzeichnis
 * @param		array		$type			aufzulistende Dateitypen
 * @param		bool		$allFiles		Listet alle Dateien in den Verzeichnissen auf ohne Rücksicht auf $type
 * @param		bool		$recursive	    Durchläuft rekursiv alle Verzeichnisse und Unterverzeichnisse
 * @param		string	    $onlyDir		Enthält nur den Verzeichnisnamen
 * @param		array		$files		    Enthält als Verweis(Referenz) den Inhalt der Verzeichnisstruktur
 * @return	    mixed						false im Fehlerfall, ansonsten ein Array mit allen Dateinamen
 */

function scan_dir($dir, $type=array(),$only=FALSE, $allFiles=FALSE, $recursive=TRUE, $onlyDir="", &$files){
	$handle = @opendir($dir);
	if(!$handle)
		return false;
	while ($file = @readdir ($handle))
	{
		if (eregi("^\.{1,2}$",$file))
		{
			continue;
		}
		if(!$recursive && $dir != $dir.$file."/")
		{
			if(is_dir($dir.$file))
				continue;
		}
		if(is_dir($dir.$file))
		{
			scan_dir($dir.$file."/", $type, $only, $allFiles, $recursive, $file, $files);
		}
		else
		{
   if($only)
				$onlyDir = $dir;

			$files = buildArray($dir,$file,$onlyDir,$type,$allFiles,$files);
		}
	}
	@closedir($handle);
	return $files;
}

function fsize($file) {
        $a = array("B", "KB", "MB", "GB", "TB", "PB");

        $pos = 0;
        $size = filesize($file);
        while ($size >= 1024) {
                $size /= 1024;
                $pos++;
        }

        return round($size,2)." ".$a[$pos];
}

// get all dirs und subdirs for upload
// $path : path to browse
// $maxdepth : how deep to browse (-1=unlimited)
// $mode : "FULL"|"DIRS"|"FILES"
// $d : must not be defined

function searchdir ( $path , $maxdepth = -1 , $mode = "DIRS" , $d = 0 ) {
   if ( substr ( $path , strlen ( $path ) - 1 ) != '/' ) { $path .= '/' ; }
   $dirlist = array () ;
   if ( $mode != "FILES" ) {
       $dirlist[] = $path ;
   }
   if ( $handle = opendir ( $path ) ) {
       while ( false !== ( $file = readdir ( $handle ) ) ) {
           if ( $file != '.' && $file != '..' ) {
               $file = $path . $file ;
               if ( ! is_dir ( $file ) ) {
                  if ( $mode != "DIRS" ) {
                   $dirlist[] = $file ;
                  }
               }
               elseif ( $d >=0 && ($d < $maxdepth || $maxdepth < 0) ) {
                   $result = searchdir ( $file . '/' , $maxdepth , $mode , $d + 1 ) ;
                   $dirlist = array_merge ( $dirlist , $result ) ;
               }
       		}
       }
       closedir ( $handle ) ;
   }
   if ( $d == 0 ) { 
       natcasesort ( $dirlist ) ;
   }
   return ( $dirlist ) ;
}

////////////////////                CATEGORIES   	          ///////////////////////

// list subcats as tree
function tree($parent, $ident, $tree) {
    global $database, $tree;

   $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE parent_id =".$parent." ORDER BY ordering");
    
    $rows = $database->loadObjectList();
    if ($database->getErrorNum()) {
        echo $database->stderr();
        return false;
    }
    foreach ($rows as $v) {
    $v->cat_title = $ident.".&nbsp;&nbsp;<sup>L</sup>&nbsp;".$v->cat_title;
    $v->cat_title = str_replace('.&nbsp;&nbsp;<sup>L</sup>&nbsp;','.&nbsp;&nbsp;&nbsp;&nbsp;',$v->cat_title);
    $x = strrpos($v->cat_title,'.&nbsp;&nbsp;&nbsp;&nbsp;');
    $v->cat_title = substr_replace($v->cat_title, '.&nbsp;&nbsp;<sup>L</sup>&nbsp;', $x,7);
    $tree[] = $v;
    
    tree($v->cat_id, $ident.".&nbsp;&nbsp;<sup>L</sup>&nbsp;", $tree);
    }
}


//Publish Categories
function categoriesPublish( $cid=null, $publishform=1,  $option ) {
  global $database;
  if (!is_array( $cid ) || count( $cid ) < 1) {
    $action = $publishcat ? 'publish' : 'unpublish';
    echo "<script> alert('"._JLIST_BACKEND_NO_SELECT_ACTION."'); window.history.go(-1);</script>\n";
    exit;
  }
  $total = count ( $cid );
  $cids = implode( ',', $cid );

  $database->setQuery( "UPDATE #__jdownloads_cats"
  					. "\nSET published =". intval( $publishform )
					. "\nWHERE cat_id IN ( $cids )"
					);
  if (!$database->query()) {
    echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
    exit();
  }
    switch ( $publishform ) {
		case 1:
			$msg = $total ._JLIST_BACKEND_CATSEDIT_SUC_PUBL." ";
		break;
		case 0:
		default:
			$msg = $total ._JLIST_BACKEND_CATSEDIT_SUC_UNPUBL." ";
		break;
	}
	if (count( $cid ) == 1) {
		$row = new jlist_files( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( 'index2.php?option='.$option.'&task=categories.list', $msg );
}

// Reihenfolge ändern über orderup/orderdown
function categoriesOrder( $uid, $inc, $option ) {
	global $database;
	$row = new jlist_cats( $database );
	$row->load( $uid );
    $row->move( $inc );
	mosRedirect( "index2.php?option=com_jdownloads&task=categories.list" );
}

// Reihenfolge ändern über saverorder symbol
function categoriesSaveOrder( &$cid ) {
	global $database;
    $total  = count( $cid );
    $order   = josGetArrayInts( 'order' );
    for( $i=0; $i < $total; $i++ ) {
        $query = "UPDATE #__jdownloads_cats"
        . "\n SET ordering = " . (int) $order[$i]
        . "\n WHERE cat_id = " . (int) $cid[$i];
        $database->setQuery( $query );
        if (!$database->query()) {
            echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
            exit();
            }
        // update ordering
        $row = new jlist_cats( $database );
        $row->load( (int)$cid[$i] );
        $row->updateOrder();
    }
    // clean any existing cache files
    mosCache::cleanCache( 'com_jdownloads' );
    $msg  = _JLIST_BACKEND_CATS_SAVEORDER;
    mosRedirect( 'index2.php?option=com_jdownloads&task=categories.list', $msg );
}

//Cancel Categories
function categoriesCancel($option){
	global $database;
	$row = new jlist_cats( $database );
	$row->bind( $_POST );
	$row->checkin();
   // alle cats freigeben 
   // all cats checked in !!!
   $database->SetQuery("UPDATE #__jdownloads_cats SET checked_out = 0");
   $database->query();    
    
	mosRedirect( "index2.php?option=".$option."&task=categories.list" );
}
//Delete Categories
function categoriesDelete($option, $cid){
	global $database, $mosConfig_absolute_path, $jlistConfig;

	$total = count( $cid );
	$cats = join(",", $cid);

	$del_error = false;
	$delerror = '';
	
	// testen ob subcats existieren - dann nicht löschen
    $database->setQuery("SELECT count(*) FROM #__jdownloads_cats WHERE parent_id IN ($cats)");
    if ($subcats_exist = $database->loadResult()){
		$msg = _JLIST_BE_NO_DEL_SUBCATS_EXISTS;			
	}
    	
	// testen ob files hierzu existieren - dann nicht löschen
    $database->setQuery("SELECT count(*) FROM #__jdownloads_files WHERE cat_id IN ($cats)");
    if ($files_exist = $database->loadResult()){
		$msg =_JLIST_BE_NO_DEL_FILES_EXISTS;
	}
	
	//Delete Categories and dirs
	if (!$subcats_exist && !$files_exist) {	
		// first get cat_dirs for delete dirs
		$database->SetQuery("SELECT * FROM #__jdownloads_cats WHERE cat_id IN ($cats)");
		$del_dirs = $database->loadObjectList();	
		
		// remove from DB table
		$database->SetQuery("DELETE FROM #__jdownloads_cats WHERE cat_id IN ($cats)");
		$database->Query();
		if ( !$database->query() ) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
			exit();
		}
		$msg = $total ._JLIST_BACKEND_CATSLIST_DEL." ";

		//remove cat(s)
    	foreach($del_dirs as $dir) {
			if (!@rmdir($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$dir->cat_dir)) {
          		$del_error = true;
         	}
        	if ($del_error) {
            	$delerror = _JLIST_BE_DEL_CATS_DIRS_ERROR;
        	} else {
            	$delerror = _JLIST_BE_DEL_CATS_DIRS_OK;
        	}	
		}
	}
	mosRedirect( 'index2.php?option='.$option.'&task=categories.list', $msg.$delerror );
}

//Save Categories
function categoriesSave($option,$apply=0){
	global $database, $jlistConfig, $mosConfig_absolute_path;

	$new_cat = false;   	
    $new_subcat = false;
    $move_to_sub_cat = false;
    $move_to_root_cat = false;        
	$title_changed = false;
	$move_sub_to_sub = false;
	
	$parent_cat_dir = '';
	$root_cat_dir	= '';
	$source_dir 	= '';
	$dest_dir		= '';
	$old_dir_name = '';		
	$new_dir_name = '';
	$old_dir = '';
	$cat_dir_neu = '';	  	

	$row = new jlist_cats($database);
	// bind it to the table
	if (!$row -> bind($_POST)) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}
    
	$row->cat_description = rtrim(stripslashes($row->cat_description));
    
	if(empty($row->cat_title)) {
        mosRedirect("index2.php?option=".$option."&task=categories.edit&cid=".$row->cat_id, _JLIST_BACKEND_CATSEDIT_ERROR_TITLE." ");
    }
    $row->cat_title   = trim($row->cat_title);

    // this characters are not allowed in foldernames
	if (eregi ( "[?:*/'\\\"]", $row->cat_title)) {
        mosRedirect("index2.php?option=".$option."&task=categories.edit&cid=".$row->cat_id, _JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED." ");
	}    
	// id der markierten cat holen
	$marked_cat_id  = intval(mosGetParam($_POST, 'catid', 0));
    
    $row->published = intval(mosGetParam($_POST, 'publish', 0));      
	
	// original titel holen
	// nur wenn edit muss titeländerung bearbeitet werden
	$org_title  = mosGetParam($_POST, 'cat_title_org', '');
	if ($org_title != '' && $org_title != $row->cat_title) {
		if ($row->cat_id) {
			$title_changed = true;
		}	
	} else {
		$title_changed = false;		
	}	

	// neu oder edit - parameter setzen
	if (!$row->cat_id) {
    	// neue cat
        $new_cat = true;
       // prüfen ob subcat markiert
       if ($marked_cat_id == 0 ) {
          $row->parent_id = 0;
          $new_cat = true;
        } else {
            $row->parent_id = $marked_cat_id;
         	$new_subcat = true;            
        }
    } else {
        // geänderte cat
		$new_cat = false;
		if ($marked_cat_id != $row->cat_id ) {
		    if ($marked_cat_id == 0 ) {
            	// ändern als hauptcat!
           		$move_to_root_cat = true;
		   		$row->parent_id = 0;
            } else {
               // ändern als subcat bzw. zu anderer subcat verschieben
			   // - also dir der übergeordneten cat holen 
                $move_to_sub_cat = true;
				
				$database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$marked_cat_id'");
    			$root_cat_dir = $database->loadResult();
				
				$database->setQuery("SELECT parent_id FROM #__jdownloads_cats WHERE cat_id = '$marked_cat_id'");
    			if ($database->loadResult()) {
					$move_sub_to_sub = true;
				}
				
				$row->parent_id = $marked_cat_id;				
            }
        }
    }

 	// 1. neue cat als root und 2. neue cat als subcat -------------------
    if ($new_cat || $new_subcat) {

    	if ($new_subcat) {
			// dir der hauptcat holen
			$database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$marked_cat_id'");
   			$parent_cat_dir = $database->loadResult();
			$new_dir = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$parent_cat_dir.'/'.$row->cat_title;		
		} else {
			$new_dir = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$row->cat_title;
		}		

    	// für meldung
    	$new_dir_short = str_replace($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/', '', $new_dir);
        
    	// create new dir if not exists
    	$dir_exist = is_dir("$new_dir");
    	if(!$dir_exist) {
        	if ($makedir = @mkdir("$new_dir", 0777)) {
            	$message = '';
			} else {
        		$message = $new_dir_short.' '._JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR;
			}
		} else {
        	$message = $new_dir_short.' '._JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_EXISTS;
    	}

    	if ($message) {
       		// Fehler ausgeben und zurück
			mosRedirect("index2.php?option=".$option."&task=categories.edit&cid=".$row->cat_id, $message." ");
    	}
    	$row->cat_dir = $new_dir_short;
	}	
    
	// 3. titel geändert ----------------------------------------------
	if ($title_changed){
		$message = '';
		$old_dir_name = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$row->cat_dir;		
		$new_dir_name = str_replace($org_title, $row->cat_title, $old_dir_name);
		$cat_dir_neu = str_replace($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/', '', $new_dir_name);
		
		If ( @rename( $old_dir_name , $new_dir_name )) {
			$message = '';
			$row->cat_dir = $cat_dir_neu;	
		} else {
			$message = _JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR;
			mosRedirect("index2.php?option=".$option."&task=categories.edit&cid=".$row->cat_id, $message." ");
		}
		
		// wenn alles ok...
		// subcats suchen und cat_dir aktualisieren
		$database->setQuery("SELECT * FROM #__jdownloads_cats WHERE cat_id != '$row->cat_id' AND cat_dir LIKE '%$org_title/%'"); 
		$sub_cats = $database->loadObjectList();
		
		// aktualisieren
		if ($sub_cats) {
			foreach($sub_cats as $cats) {
				$cats->cat_dir = str_replace($org_title, $row->cat_title, $cats->cat_dir);
				$database->setQuery("UPDATE #__jdownloads_cats SET cat_dir = '$cats->cat_dir' WHERE cat_id = '$cats->cat_id'");
				$database->query();				 			
			}
		} 	
	}
	
	// 4. rootcat wird subcat  --------------------------------------
   	if ($move_to_sub_cat) {
   		$message = '';
		$source_dir = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$row->cat_dir.'/';
		$dest_dir	= $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$root_cat_dir.'/'.$row->cat_title.'/';
		
		$res = moveDirs($source_dir, $dest_dir, true, $message);
		if ($message != '') {
       		// Fehler ausgeben und zurück
			mosRedirect("index2.php?option=".$option."&task=categories.edit&cid=".$row->cat_id, $message." ");
		}	
		
		// subcats suchen
 		$database->setQuery("SELECT * FROM #__jdownloads_cats WHERE cat_dir LIKE '$row->cat_dir%'"); 
		$sub_cats = $database->loadObjectList();
		$row->cat_dir =	$root_cat_dir.'/'.$row->cat_title;
		// subcats aktualisieren
		if ($sub_cats) {
			foreach($sub_cats as $cats) {
				$cats->cat_dir = $row->cat_dir.'/'.$cats->cat_title; 
				$database->setQuery("UPDATE #__jdownloads_cats SET cat_dir = '$cats->cat_dir' WHERE cat_id = '$cats->cat_id'");
				$database->query();				 			
			}
		}	
	}
       
    // 5. subcat verschieben  --------------------------------------
   	if ($move_to_root_cat) {
   		$message = '';
		$source_dir = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$row->cat_dir.'/';
		$dest_dir	= $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$row->cat_title.'/';
		
		$res = moveDirs($source_dir, $dest_dir, true, $message);
		if ($message != '') {
       		// Fehler ausgeben und zurück
			mosRedirect("index2.php?option=".$option."&task=categories.edit&cid=".$row->cat_id, $message." ");
		}	
	
		// für $row->cat_dir
		$new_dir_name = $row->cat_title;		
		// subcats suchen und cat_dir aktualisieren
 		$database->setQuery("SELECT * FROM #__jdownloads_cats WHERE cat_id != '$row->cat_id' AND cat_dir LIKE '$row->cat_dir/%'"); 
		$sub_cats = $database->loadObjectList();
		
		// aktualisieren
		if ($sub_cats) {
			foreach($sub_cats as $cats) {
				$cats->cat_dir = str_replace($row->cat_dir, $new_dir_name, $cats->cat_dir);
				$database->setQuery("UPDATE #__jdownloads_cats SET cat_dir = '$cats->cat_dir' WHERE cat_id = '$cats->cat_id'");
				$database->query();				 			
			}
		}	
		$row->cat_dir =	$new_dir_name;	
	}
    if ($row->metakey){
        $row->metakey = stripslashes($row->metakey);
    }
    if ($row->metadesc){
        $row->metadesc = stripslashes($row->metadesc);
    }  
    // for the: set_rights_of_cat function - the cat_access value must save with the old value
	if (!$row->cat_access) $row->cat_access = '00';
    $new_access = $row->cat_access;
    $old_access = mosGetParam($_POST, 'old_access', '00');
    if ($old_access) $row->cat_access = $old_access;
    
    // in db schreiben
	if (!$row -> store()) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}else{
		if(!$row->cat_id) $row->cat_id = mysql_insert_id();
	}

   // check the access level from the children cats
   $sum_changed = 0;
   
   set_rights_of_cat($row->cat_id, $new_access, $sum_changed);
   if ($sum_changed == -1){
       $msg = '- '._JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG;
   } else {
       if ($sum_changed > 0){
           $sum_changed--;
           $msg = '- '.$sum_changed.' '._JLIST_BACKEND_CATSEDIT_SUM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG;
       } 
   }  

   $row->updateOrder();
   $row->checkin();   
   // all cats checked in !!!
   $database->SetQuery("SELECT cat_id FROM #__jdownloads_cats WHERE cat_id != $row->cat_id");
   $free_cat = $database->loadResultArray();
   $free_cat_id = implode(",", $free_cat);
   $database->SetQuery("UPDATE #__jdownloads_cats SET checked_out = 0 WHERE cat_id IN ($free_cat_id)");
   $database->query();    
   
	if (!$apply) {
		mosRedirect("index2.php?option=".$option."&task=categories.list", _JLIST_BACKEND_CATSEDIT_SAVE." ".$msg);
	} else {
		mosRedirect("index2.php?option=".$option."&task=categories.edit&cid=".$row->cat_id, _JLIST_BACKEND_CATSEDIT_SAVE." ".$msg);
	} 	
}

// edit cats
function categoriesEdit($option, $cid){
	global $database, $my, $mosConfig_absolute_path, $jlistConfig, $tree;

	if(is_array($cid)) $cid = 0;
	$row = new jlist_cats( $database );
	$row->load( $cid );

	// fehlermeldung wenn bereits in bearbeitung
	if ($row->isCheckedOut( $my->id )) {
		mosRedirect( 'index2.php?option='.$option.'&task=categories.list', _JLIST_BACKEND_CATS_USED );
	}
	$database->SetQuery("SELECT * FROM #__jdownloads_cats"
						. "\nWHERE cat_id = $cid");
	$database->loadObject($row);

	if ($cid) {
		$row->checkout( $my->id );

        // alle cats sperren für edit - falls dateioperationen laufen sollen
        // all cats checked out !!!
        $database->SetQuery("SELECT cat_id FROM #__jdownloads_cats WHERE cat_id != $cid");
        $lock_cat = $database->loadResultArray();
        $lock_cat_id = implode(",", $lock_cat);
        $database->SetQuery("UPDATE #__jdownloads_cats SET checked_out = '$my->id' WHERE cat_id IN ($lock_cat_id)");
        $database->query();
    
	} else {
		$row->published	 = 1;
	}

    // auswahlliste für zugriffskontrolle
    $access_list[] = mosHTML::makeOption('00', _JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1);
    $access_list[] = mosHTML::makeOption('01', _JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2);
    $access_list[] = mosHTML::makeOption('11', _JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3);
    $access_list[] = mosHTML::makeOption('22', _JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4);
    $access_box = mosHTML::selectList( $access_list, 'cat_access', 'class="inputbox" size="4" ', 'value', 'text', $row->cat_access );
    
    // auswahlliste für catsymbol
    $cat_pic_dir = '/images/jdownloads/catimages/';
    $pic_files = mosReadDirectory( "$mosConfig_absolute_path$cat_pic_dir" );
    $cat_pic_list[] = mosHTML::makeOption('', _JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT);
    foreach ($pic_files as $file) {
        if (eregi( "gif|jpg|png", $file )) {
            $cat_pic_list[] = mosHTML::makeOption( $file );
        }
    }
    // auswahlliste mit bereits existierenden cats
    $cat_list = array();
    if ($row->cat_id) {
        $listtitle = _JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX;
    } else {
        $listtitle = _JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW;
    }

    // standard pic wenn als option ausgewählt
    if ($jlistConfig['cat.pic.default.filename'] && !$row->cat_pic) {
        $row->cat_pic = $jlistConfig['cat.pic.default.filename'];
    }    

    $inputbox_pic = mosHTML::selectList( $cat_pic_list, 'cat_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].cat_pic.options[selectedIndex].value!='') {document.imagelib.src='../$cat_pic_dir' + document.forms[0].cat_pic.options[selectedIndex].value} else {document.imagelib2.src=''}\"", 'value', 'text', $row->cat_pic );

	jlist_HTML::categoriesEdit($option, $row, $inputbox_pic, $access_box);
}

// list cats
function categoriesList($option, $task, $limitstart){
	global $database, $mainframe, $limit, $tree;
      
    $search = $mainframe->getUserStateFromRequest( "search{$option}", 'search', '' );
	if (get_magic_quotes_gpc()) {
		$search			= stripslashes( $search );
	}	
	
	if ( $search ) {
		$where[] = "LOWER( a.cat_title ) LIKE '%" . $database->getEscaped( trim( strtolower( $search ) ) ) . "%'";
	}	
	
	$filter 		= $mainframe->getUserStateFromRequest( "filter{$option}", 'filter', '' );
	$filter 		= intval( $filter );
	$database->SetQuery( "SELECT count(*)"
						. "\nFROM #__jdownloads_cats AS a"
						. "\nWHERE a.published 	>= 0"
						);
  	$total = $database->loadResult();
	echo $database->getErrorMsg();

	if (!$search){
        $where = array(	"a.published >= 0" , "a.parent_id = 0" );
    }
    
	if ($search && $filter == 1) {
		$where[] = "LOWER(a.cat_title) LIKE '%$search%'";
		
	$database->SetQuery( "SELECT count(*)"
						. "\nFROM #__jdownloads_cats AS a"
						. (count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
						);
  	$total = $database->loadResult();
	echo $database->getErrorMsg();
	}

	if ($search) {
		$where[] = "LOWER(a.cat_title) LIKE '%$search%'";
		
	$database->SetQuery( "SELECT count(*)"
						. "\nFROM #__jdownloads_cats AS a"
						. (count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
						);
  	$total = $database->loadResult();
	echo $database->getErrorMsg();
	}

	$pageNav = new mosPageNav( $total, $limitstart, $limit );

	$query = "SELECT a.*"
			. "\nFROM #__jdownloads_cats AS a"
			. ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
			. "\nORDER BY a.parent_id, a.ordering, a.cat_title"
			;

	$database->SetQuery( $query );
	$cats = $database->loadObjectList();
	
	// subcategories view as tree
   	$tree = array();
   	
   	foreach ($cats as $v) {
       	$ident = '';
       	$tree[] = $v;
		tree($v->cat_id, $ident, $tree);
	} 
    $database->SetQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();
		
	jlist_HTML::categoriesList($rows, $option, $pageNav, $search, $filter, $tree, $task, $limitstart);
}

/*///////////////////                FILES              //////////////////////*/

//Publish Files
function filesPublish( $cid=null, $publishform=1,  $option, $cat_id ) {
  global $database;

	if (!is_array( $cid ) || count( $cid ) < 1) {
    	$action = $publishcat ? 'publish' : 'unpublish';
    	echo "<script> alert('"._JLIST_BACKEND_NO_SELECT_ACTION."'); window.history.go(-1);</script>\n";
    	exit;
	}
	$total = count ( $cid );
	$cids = implode( ',', $cid );
	// publish only when a intern or extern file link exist	
	if ($publishform) {
		$database->setQuery( "SELECT file_id FROM #__jdownloads_files WHERE file_id IN ( $cids ) AND url_download = '' AND extern_file = ''");
		$nofiles = $database->loadResultArray();
	}	
	$database->setQuery( "UPDATE #__jdownloads_files"
  					. "\nSET published =". intval( $publishform )
					. "\nWHERE file_id IN ( $cids )"
					);
	if (!$database->query()) {
    	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
    	exit();
  	}
    if ($nofiles){
        $no_cid = implode( ',', $nofiles );
        $database->setQuery( "UPDATE #__jdownloads_files SET published = 0 WHERE file_id IN ( $no_cid )" );
        $database->query();
    }    
    switch ( $publishform ) {
			case 1:
				if ($nofiles) {
                    $nofiles_sum = count($nofiles);
                    $total = $total - $nofiles_sum;
                    $msg = $total ._JLIST_BACKEND_FILESEDIT_SUC_PUBL.' - '.$nofiles_sum.' '._JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO.' ';
                } else {
                    $msg = $total ._JLIST_BACKEND_FILESEDIT_SUC_PUBL." ";
                }    
			break;                                             
			case 0:              
			default:
				$msg = $total ._JLIST_BACKEND_FILESEDIT_SUC_UNPUBL." ";
			break;
	}
    if (count( $cid ) == 1) {
		$row = new jlist_files( $database );
		$row->checkin( $cid[0] );
	}
	mosRedirect( 'index2.php?option='.$option.'&task=files.list&cat_id='.$cat_id, $msg );
}

//Cancel Files
function filesCancel($option, $cat_id){
	global $database;
	$row = new jlist_files( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=".$option."&task=files.list&cat_id=".$cat_id );
}

//Delete downloads
function filesDelete($option, $cid, $cat_id){
	global $database, $mosConfig_absolute_path, $jlistConfig;
	$total = count( $cid );
	$files = join(",", $cid);

    // file delete option
    $file_delete = intval(mosGetParam($_POST, 'delete_files', 0));
    if ($file_delete == 1) {
        $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_id IN ($files)");
	    $loads = $database->loadObjectList();

    	//remove file(s)
        foreach($loads as $url) { 
		  // keine externen links
          if ($url->url_download <> ''){
            // get cat_dir 
			$database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$url->cat_id'");
	    	$cat_dir = $database->loadResult();			

    	    if (!@unlink($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$cat_dir.'/'.$url->url_download)) {
                $del_error = true;
            }
          }
        }
      	if ($del_error) {
            $delerror = _JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR;
        } else {
            $delerror = _JLIST_BACKEND_FILESEDIT_DEL_FILES_OK;
        }
    }

	//Delete Downloads
	$database->SetQuery("DELETE FROM #__jdownloads_files WHERE file_id IN ($files)");
	$database->Query();
	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}
	$msg = $total ._JLIST_BACKEND_FILESLIST_DEL." ";
    if ($file_delete == 1) {
        $msg = $msg.' '.$delerror;
    }
	mosRedirect( 'index2.php?option='. $option .'&task=files.list&cat_id='.$cat_id, $msg );
}

//Remove Files from server
function filesRemove($option, $cid, $cat_id){
	global $database, $jlistConfig, $mosConfig_absolute_path;

	$database->setQuery("SELECT url_download FROM #__jdownloads_files WHERE file_id = '$cid'");
	$url_download = $database->loadResult();
	$database->setQuery("SELECT cat_id FROM #__jdownloads_files WHERE file_id = '$cid'");
	$cat_id = $database->loadResult();
	$database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$cat_id'");
	$cat_dir = $database->loadResult();
	//remove file
	@unlink($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$cat_dir.'/'.$url_download);
	//update db
	$database->setQuery("UPDATE #__jdownloads_files SET url_download = '', size = '', published = 0 WHERE file_id = '$cid'");
	$database->query();
	//redirect to edit
	mosRedirect('index2.php?option=com_jdownloads&task=files.edit&hidemainmenu=1&cid='.$cid.'&cat_id='.$cat_id,_JLIST_BACKEND_FILESEDIT_REMOVE_OK);
}

//Save Files
function filesSave($option, $cat_id, $apply=0){
	global $database, $jlistConfig, $mosConfig_absolute_path, $my;

	$new_file = false;
    $file_cat_changed = false;
    $movedmsg = '';
	$row = new jlist_files($database);
	// bind it to the table
	if (!$row -> bind($_POST)) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}
	if (empty($row->file_title)) {
        mosRedirect("index2.php?option=".$option."&task=files.edit&cid=".$row->file_id, _JLIST_BACKEND_FILESEDIT_ERROR_TITLE);
    } else {
        $row->file_title = stripslashes($row->file_title);
    }    
    // id der markierten hauptkategorie
    $marked_cat_id  = intval(mosGetParam($_POST, 'cat_id2', 0));
    // file upload?
    $file = mosGetParam($_FILES,'file_upload',array('tmp_name'=>''));
    // pic upload
    $pic = mosGetParam($_FILES,'file_upload_thumb',array('tmp_name'=>'')); 
    $modified_date_old = mosGetParam($_POST, 'modified_date_old', null);
    
    // pic auswahl vom server
    $pic_server = mosGetParam($_POST,'file_thumb', '');
    $row->published = intval(mosGetParam($_POST, 'publish', 0));
    $row->update_active = intval(mosGetParam($_POST, 'update', 0)); 
    
	if (empty($marked_cat_id)) {
        mosRedirect("index2.php?option=".$option."&task=files.edit&cid=".$row->file_id, _JLIST_BACKEND_FILESEDIT_CATLIST_ERROR);
    }  

    // filename holen
    $row->url_download = mosGetParam($_POST, 'filename', '');
    
    if (!$row->file_id){
        $row->cat_id = $marked_cat_id;
		$row->created_by = $my->username;
        $new_file = true;
    } else {
      // actualize only when user has not changed self the date value
	  if ($modified_date_old == $row->modified_date){
	      $row->modified_date = mosCurrentDate('%Y.%m.%d %H:%M:%S');
      }
      //actalize modified_by
      $row->modified_by = $my->username;
              
	  if ($row->cat_id != $marked_cat_id){
          $file_cat_changed = true;
          $org_cat_id = $row->cat_id; 
          $row->cat_id = $marked_cat_id;
      }
    }

    // uploadverz. der kat holen
	$database->SetQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = $marked_cat_id");
	$mark_catdir = $database->loadResult();

    $row->description = rtrim(stripslashes($row->description));
    $row->description_long = rtrim(stripslashes($row->description_long));
    
	if ($row->file_id){    
		// get filesize and date if no value set
    	
        if ($row->size == '' and $file['tmp_name'] == '' and !$file_cat_changed) {
       	    if ($row->url_download) {
                $filepath = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$mark_catdir.'/'.$row->url_download;
        	    if (@is_file($filepath)) {
                    $row->size = fsize($filepath);
       	        }
            } else {
               // extern file
               $row->size = urlfilesize($row->extern_file,'b');
            }    
        }

    	// is date empty get filedate - only for intern linked files
        if ($row->url_download){
    	    if (empty($row->date_added) and $file['tmp_name'] == '' and !$file_cat_changed) {
  			    $row->date_added = date("Y-m-d H:i:s", filemtime($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$mark_catdir.'/'.$row->url_download));
        	}
        } else {
          // extern file
          if (empty($row->date_added) and $file['tmp_name'] == '' and !$file_cat_changed) {
             $row->date_added = urlfiledate($row->extern_file);
             $row->size = urlfilesize($row->extern_file,'b');
          }    
        }  
	} else {
        if ($row->size == '' and $file['tmp_name'] == '' and !$file_cat_changed) {
               if ($row->url_download) {
                $filepath = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$mark_catdir.'/'.$row->url_download;
                if (@is_file($filepath)) {
                    $row->size = fsize($filepath);
                   }
            } else {
               // extern file
               $row->size = urlfilesize($row->extern_file,'b');
            }    
        }
    }
    
    //handle file upload
	if($file['tmp_name'] != ''){
	    $upload_dir = '/'.$jlistConfig['files.uploaddir'].'/'.$mark_catdir.'/';
		$target_path = $mosConfig_absolute_path.$upload_dir.$file['name'];

	    if(@move_uploaded_file($file['tmp_name'], $target_path)) {
	   	   $database->setQuery("UPDATE #__jdownloads_files SET url_download = '{$file['name']}' WHERE file_id = '$row->file_id'");
	   	   $database->query();
           $row->url_download = basename($target_path);
           $row->extern_file = '';
           $row->extern_site = '';
           // get filesize and date if no value set from user after upload
           if (!$row->size) {
               $row->size = fsize($target_path);
           }
           // is date empty get filedate
           if (empty($row->date_added)) {
              $row->date_added = mosCurrentDate('%Y.%m.%d %H:%M:%S');
           }
    	} else {
		   mosRedirect("index2.php?option=".$option."&task=files.edit&cid=".$row->file_id, _JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS." ");
		}
 	} else {
	   // kein upload - Kat gewechselt? dann file verschieben
       if ($file_cat_changed && $row->url_download != ''){
     		// datei verschieben
			// dir der alten cat holen 
			$database->SetQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$org_cat_id'");
			$old_catdir = $database->loadResult();                
               
			if(@rename($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$old_catdir.'/'.$row->url_download, $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$mark_catdir.'/'.$row->url_download )) {
            	$movedmsg = _JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK;
            } else {
                $movedmsg = _JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR;
            }
            }
		}
        
    // pic upload
    if($pic['tmp_name'] != ''){
        $upload_dir = '/images/jdownloads/screenshots/';
        // replace spaces in the pic filename
        $new_pic_name = str_replace(' ', '_', $pic['name']);
        $target_path = $mosConfig_absolute_path.$upload_dir.$new_pic_name;

        if(@move_uploaded_file($pic['tmp_name'], $target_path)) {
              $database->setQuery("UPDATE #__jdownloads_files SET thumbnail = '$new_pic_name' WHERE file_id = '$row->file_id'");
              $database->query();
              $x = create_new_thumb($target_path);       
              // set correct chmod
              @chmod($target_path, 644);
        }
    } else {
        // no new pic is uploaded
        if ($row->file_id){
            // old download and pic from server is selected
            $database->setQuery("UPDATE #__jdownloads_files SET thumbnail = '$pic_server' WHERE file_id = '$row->file_id'");
            $database->query();
        } else {
            // new download and pic from server is selected
            $row->thumbnail = $pic_server;
        }        
    } 
    
    if (!$row->url_download && !$row->extern_file){
       // download without intern or extern file can not set to publish!
       $row->published = 0;
    }
    
    // set extern site flag off when not exist mirror link
    if (!$row->mirror_1){
        $row->extern_site_mirror_1 = 0;
    }
    if (!$row->mirror_2){
        $row->extern_site_mirror_2 = 0;
    }
    
    if ($row->metakey){
        $row->metakey = stripslashes($row->metakey);
    }
    if ($row->metadesc){
        $row->metadesc = stripslashes($row->metadesc);
    }    
         
    // store it in the db
    if (!$row -> store()) {
        echo "<script> alert('"
            .$row -> getError()
            ."'); window.history.go(-1); </script>\n";
        exit();
    } 
    if(!$row->file_id) $row->file_id = mysql_insert_id();

    $row->updateOrder();
	$row->checkin();
	if(!$apply)	mosRedirect("index2.php?option=".$option."&task=files.list&cat_id=".$cat_id, _JLIST_BACKEND_FILESEDIT_SAVE.$movedmsg." ");
	else mosRedirect("index2.php?option=".$option."&task=files.edit&cid=".$row->file_id."&cat_id=".$cat_id, _JLIST_BACKEND_FILESEDIT_SAVE.$movedmsg." ");
}

// kopiere dateien in gleiche oder andere kategorie
function filesCopy($option, $cid, $cat_id){
    global $database;
    if (!is_array( $cid ) || count( $cid ) < 1) {
        //$action = $publishcat ? 'publish' : 'unpublish';
        echo "<script> alert('"._JLIST_BACKEND_NO_SELECT_ACTION."'); window.history.go(-1);</script>\n";
        exit;
    }
    $files_id = implode(',', $cid);
    $database->SetQuery("SELECT * FROM #__jdownloads_files WHERE file_id IN ($files_id)");
    $files = $database->loadObjectList(); 
    jlist_HTML::filesCopy($option, $files_id, $files, $cat_id);   
}  

function filesCopySave($option, $cat_id_act){
    global $database, $mosConfig_absolute_path, $jlistConfig;
    
    $cid = array();
    $files_id = mosGetParam($_REQUEST, 'cid2', 0);
    $publish_files = intval(mosGetParam($_REQUEST, 'filespublish', 0));
    $copy_files = intval(mosGetParam($_REQUEST, 'copyalsofiles', 0));
    
    $database->SetQuery("SELECT * FROM #__jdownloads_files WHERE file_id IN ($files_id)");
    $files = $database->loadObjectList(); 
    $cid = explode(',', $file_id);
    $sum = count(cid);

    $cat_id = intval(mosGetParam($_REQUEST, 'cat_id2', array())); 
    if ($cat_id){
        $database->SetQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = $cat_id");
        $cat_dir_new = $database->loadResult();
        foreach($files as $file){
            if ($cat_id == $file->cat_id){
                $filetitle = _JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT.' '.$file->file_title;
            } else {
                $filetitle = $file->file_title;
            }
            if ($copy_files && $file->url_download != ''){
                $url_download = $file->url_download;
                $database->SetQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = $file->cat_id");
                $cat_dir = $database->loadResult();
                $old_dir = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$cat_dir.'/'.$file->url_download;
                $new_dir = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$cat_dir_new.'/'.$file->url_download;
                if ( is_file ( $old_dir ) ){
                     @copy($old_dir, $new_dir); 
                } else {
                    $url_download = '';    
                } 
            } else {
                $url_download = '';
            }    
            
            $database->setQuery("INSERT INTO #__jdownloads_files (`file_id`, `file_title`, `description`, `description_long`, `file_pic`, `price`, `release`, `language`, `system`, `license`, `url_license`, `size`, `date_added`, `url_download`, `extern_file`, `mirror_1`, `mirror_2`, `url_home`, `author`, `url_author`, `created_by`, `created_mail`, `modified_by`, `modified_date`, `downloads`, `cat_id`, `ordering`, `published`, `checked_out`, `checked_out_time`) VALUES (NULL, '$filetitle', '$file->description', '$file->description_long', '$file->file_pic', '$file->price', '$file->release', '$file->language', '$file->system', '$file->license', '$file->url_license', '', '$file->date_added', '$url_download', '$file->extern_file', '$file->mirror_1', '$file->mirror_2', '$file->url_home', '$file->author', '$file->author_url', '$file->created_by', '$file->created_mail', '', '0000-00-00 00:00:00', '0', '$cat_id', '0', '$publish_files', '0', '0000-00-00 00:00:00')");
            if (!$database->query()) {
                // fehler beim erstellen in DB    
                echo $database->stderr();
                exit;
            }
        }    
    }    
    mosRedirect("index2.php?option=".$option."&task=files.list&cat_id=".$cat_id_act, $sum.' '._JLIST_BACKEND_FILES_COPY_SAVED." ");
}  
  

// files edit
function filesEdit($option, $cid, $cat_id){
	global $database, $my, $mosConfig_absolute_path, $jlistConfig, $tree;

    // for tooltip
    mosCommonHTML::loadOverlib();
    // for datepicker
	mosCommonHTML::loadCalendar();

    if(is_array($cid)) $cid = 0;

	$row = new jlist_files( $database );
	$row->load( $cid );

	// fail if checked out from another admin
	if ($row->isCheckedOut( $my->id )) {
  		mosRedirect( 'index2.php?option='.$option.'&task=files.list', _JLIST_BACKEND_FILES_USED );
	}
	$database->SetQuery("SELECT * FROM #__jdownloads_files"
						. "\nWHERE file_id = $cid");
	$database->loadObject($row);

	if ($cid) {
		$row->checkout( $my->id );
	} else {
		$row->published	 = 1;
	}

	if (!$row->date_added) {
		$row->date_added = mosCurrentDate('%Y.%m.%d %H:%M:%S');
	}

    // standard pic wenn als option ausgewählt
    if ($jlistConfig['file.pic.default.filename'] && !$row->file_pic) {
        $row->file_pic = $jlistConfig['file.pic.default.filename'];
    } 
    
    // build system listbox
    $file_system = array();
    $file_sys_values = explode(',' , $jlistConfig['system.list']);
    for ($i=0; $i < count($file_sys_values); $i++) {
        $file_system[] = mosHTML::makeOption( $i, $file_sys_values[$i] );
    }
    $listbox_system = mosHTML::selectList( $file_system, 'system', 'class="inputbox" size="1"', 'value', 'text', $row->system );

    // build language listbox
    $file_language = array();
    $file_lang_values = explode(',' , $jlistConfig['language.list']);
    for ($i=0; $i < count($file_lang_values); $i++) {
        $file_language[] = mosHTML::makeOption( $i, $file_lang_values[$i] );
    }
    $listbox_language = mosHTML::selectList( $file_language, 'language', 'class="inputbox" size="1"', 'value', 'text', $row->language );

    // get licenses array and build listbox with licenses
    $licenses = array();
    $licenses[] = mosHTML::makeOption( '0', _JLIST_BACKEND_FILESEDIT_LICENSES_LIST );
    $database->setQuery( "SELECT id AS value, license_title AS text FROM #__jdownloads_license" );
    $licenses = array_merge( $licenses, $database->loadObjectList() );

    // symbol list for category
    $file_pic_dir = '/images/jdownloads/fileimages/';
    $pic_files = mosReadDirectory( "$mosConfig_absolute_path$file_pic_dir" );
    $file_pic_list[] = mosHTML::makeOption('', _JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT);
    foreach ($pic_files as $file) {
        if (eregi( "gif|jpg|png", $file )) {
            $file_pic_list[] = mosHTML::makeOption( $file );
        }
    }

    $inputbox_pic = mosHTML::selectList( $file_pic_list, 'file_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].file_pic.options[selectedIndex].value!='') {document.imagelib.src='../$file_pic_dir' + document.forms[0].file_pic.options[selectedIndex].value} else {document.imagelib2.src=''}\"", 'value', 'text', $row->file_pic );

    // thumbnail list for uploaded screenshot
    $file_thumb_dir = '/images/jdownloads/screenshots/thumbnails/';
    $thumb_files = mosReadDirectory( "$mosConfig_absolute_path$file_thumb_dir" );
    $file_thumb_list[] = mosHTML::makeOption('', _JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC);
    foreach ($thumb_files as $thumb) {
        if (eregi( "gif|jpg|png", $thumb )) {
            $file_thumb_list[] = mosHTML::makeOption( $thumb );
        }
    }

    $inputbox_thumb = mosHTML::selectList( $file_thumb_list, 'file_thumb', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].file_thumb.options[selectedIndex].value!='') {document.imagelib4.src='../$file_thumb_dir' + document.forms[0].file_thumb.options[selectedIndex].value} else {document.imagelib4.src=''}\"", 'value', 'text', $row->thumbnail );
  
	jlist_HTML::filesEdit($option, $row, $licenses, $up_files, $inputbox_pic, $listbox_system, $listbox_language, $no_writable, $inputbox_thumb, $cat_id);
}

// files list
function filesList($option, $task, $cat_id, $limitstart){
	global $database, $mainframe, $limit;

	$where = array();
	
	$search = $mainframe->getUserStateFromRequest( "search{$option}", 'search', '' );
	if (get_magic_quotes_gpc()) {
		$search	= stripslashes( $search );
	}	
	
	if ( $search ) {
		$where[] = "LOWER( a.file_title ) LIKE '%" . $database->getEscaped( trim( strtolower( $search ) ) ) . "%'";
	}		
	
	$filter 		= $mainframe->getUserStateFromRequest( "filter{$option}", 'filter', '' );
	$filter 		= intval( $filter );
	//$cat_id 		= intval(mosGetParam($_REQUEST,'cat_id',-1));
    
    switch($cat_id){
      case '-2': $where[] = "a.published > 0"; break;   
      case '-3': $where[] = "a.published = 0"; break;   
      case '0':  $where[] = "a.published >= 0"; 
                 $where[] = "a.cat_id = 0"; break;   
      case '-1': $where[] = "a.published >= 0"; break;  
      default:   $where[] = "a.published >= 0";
                 $where[] = "a.cat_id = ".$cat_id; break;
    }    
/*    if($cat_id != -1){
        $where[] = "a.cat_id = ".$cat_id;
   }*/ 
    $database->SetQuery( "SELECT count(*)"
						. "\nFROM #__jdownloads_files AS a"
						. "\nWHERE ". implode( ' AND ', $where )
						. "\nORDER BY a.cat_id, a.ordering"
						);
  	$total = $database->loadResult();
	echo $database->getErrorMsg();

	if ($search && $filter == 1) {
		$where[] = "LOWER(a.file_title) LIKE '%$search%'";
        $database->SetQuery( "SELECT count(*)"
						. "\nFROM #__jdownloads_files AS a"
						. (count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
						);
	  	$total = $database->loadResult();
	    echo $database->getErrorMsg();
	}

	if ($search) {
		$where[] = "LOWER(a.file_title) LIKE '%$search%'";
        $database->SetQuery( "SELECT count(*)"
						. "\nFROM #__jdownloads_files AS a"
						. (count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
						);
		$total = $database->loadResult();
	    echo $database->getErrorMsg();
	}

	$pageNav = new mosPageNav( $total, $limitstart, $limit );
	$query = "SELECT a.*"
			. "\nFROM #__jdownloads_files AS a"
			. ( count( $where ) ? "\n WHERE " . implode( ' AND ', $where ) : "")
			. "\nORDER BY a.cat_id, a.ordering"
			;
	$database->SetQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	// get cat titles for view
	foreach($rows as $i=>$row){
		$cat = new jlist_cats($database);
		$cat->load($row->cat_id);
		$rows[$i]->cat_title = $cat->cat_title;
	}
	jlist_HTML::filesList($rows, $option, $pageNav, $search, $filter, $task, $limitstart);
}

// change saveorder
function filesSaveOrder( &$cid, $cat_id ) {
	global $database;

    $total  = count( $cid );
    $order   = josGetArrayInts( 'order' );

    for( $i=0; $i < $total; $i++ ) {
        $query = "UPDATE #__jdownloads_files"
        . "\n SET ordering = " . (int) $order[$i]
        . "\n WHERE file_id = " . (int) $cid[$i];
        $database->setQuery( $query );
        if (!$database->query()) {
            echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
            exit();
            }

        // update ordering
        $row = new jlist_files( $database );
        $row->load( (int)$cid[$i] );
        $row->updateOrder();
    }

    // clean any existing cache files
    mosCache::cleanCache( 'com_jdownloads' );

    $msg  = _JLIST_BACKEND_FILES_SAVEORDER;
    mosRedirect( 'index2.php?option=com_jdownloads&task=files.list&cat_id='.$cat_id, $msg );
}

// change saveorder with orderup/orderdown image
function filesOrder( $uid, $inc, $option, $cat_id ) {
	global $database;

	$row = new jlist_files( $database );
	$row->load( $uid );
    $row->move( $inc );

	mosRedirect( 'index2.php?option=com_jdownloads&task=files.list&cat_id='.$cat_id );
}

/**********************************************
/ License
/ ********************************************/

// license edit
function editLicense($option, $cid){
	global $database, $my, $mosConfig_absolute_path;

	if(is_array($cid)) $cid = 0;

	$row = new jlist_license( $database );
	$row->load( $cid );

	// fail if checked out not by 'me'
	if ($row->isCheckedOut( $my->id )) {
		mosRedirect( 'index2.php?option='.$option.'&task=license.list', $row->license_title.' '._JLIST_BACKEND_LIC_USED );
	}
	$database->SetQuery("SELECT * FROM #__jdownloads_license"
						. "\nWHERE id = $cid");
	$database->loadObject($row);

	if ($cid) {
		$row->checkout( $my->id );
	} else {
		$row->published	 = 1;
	}

	jlist_HTML::editLicense($option, $row);
}

// license save
function saveLicense($option, $apply=0){
	global $database;

	$row = new jlist_license($database);

	// bind it to the table
	if (!$row -> bind($_POST)) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}

	if(empty($row->license_title)) {
        mosRedirect("index2.php?option=".$option."&task=license.edit", _JLIST_BACKEND_LICEDIT_ERROR_TITLE); }

    $row->license_text = rtrim($row->license_text);
    
	// store it in the db
	if (!$row -> store()) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}else{
		if(!$row->id) $row->id = mysql_insert_id();
	}
	$row->updateOrder();
	$row->checkin();
	if(!$apply)	mosRedirect("index2.php?option=".$option."&task=license.list", _JLIST_BACKEND_LICEDIT_SAVE." ");
	else mosRedirect("index2.php?option=".$option."&task=license.edit&cid=".$row->id, _JLIST_BACKEND_LICEDIT_SAVE." ");
}

// license delete
function deleteLicense($option, $cid){
	global $database;
	
	$total = count( $cid );
	$cats = join(",", $cid);

	//Delete Categories
	$database->SetQuery("DELETE FROM #__jdownloads_license WHERE id IN ($cats)");
	$database->Query();

	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$msg = $total ._JLIST_BACKEND_LICLIST_DEL." ";
	mosRedirect( 'index2.php?option='. $option .'&task=license.list', $msg );
}

// license cancel
function cancelLicense($option){
	global $database;

	$row = new jlist_license( $database );
	$row->bind( $_POST );
	$row->checkin();

	mosRedirect( "index2.php?option=".$option."&task=license.list" );
}

// license list
function listLicense($option){
	global $database, $mainframe;

	$pageNav = new mosPageNav( $total, $limitstart, $limit );
	$query = "SELECT * FROM #__jdownloads_license";

	$database->SetQuery( $query );
	$rows = $database->loadObjectList();

	jlist_HTML::listLicense($rows, $option);
}

/**********************************************
/ Templates
/ ********************************************/

function menuTemplates($option, $task) {

    jlist_HTML::controlPanelTemplate($option, $task);
}


// templates edit
function editTemplatesCats($option, $cid){
	global $database, $my, $mosConfig_absolute_path;

	if(is_array($cid)) $cid = 0;

	$row = new jlist_templates( $database );
	$row->load( $cid );

	if ($row->isCheckedOut( $my->id )) {
		mosRedirect( 'index2.php?option='.$option.'&task=templates.list.cats', $row->template_name.' '._JLIST_BACKEND_CATS_USED );
	}
	$database->SetQuery("SELECT * FROM #__jdownloads_templates"
						. "\nWHERE id = $cid");
	$database->loadObject($row);

    if ($cid) {
		$row->checkout( $my->id );
	   }

    // load template text default
    if ($row->template_name == ''){
       $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT;
     } else {
       if ($row->template_text == '') {
           $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT;
       }
     }

    jlist_HTML::editTemplatesCats($option, $row);
}

function editTemplatesFiles($option, $cid){
	global $database, $my, $mosConfig_absolute_path;

	if(is_array($cid)) $cid = 0;

	$row = new jlist_templates( $database );
	$row->load( $cid );

	if ($row->isCheckedOut( $my->id )) {
		mosRedirect( 'index2.php?option='.$option.'&task=templates.list.files', $row->template_name.' '._JLIST_BACKEND_TEMP_USED );
	}
	$database->SetQuery("SELECT * FROM #__jdownloads_templates"
						. "\nWHERE id = $cid");
	$database->loadObject($row);

	if ($cid) {
		$row->checkout( $my->id );
	}

    // load template text default
    if ($row->template_name == ''){
       $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT;
     } else {
       if ($row->template_text == '') {
           $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT;
       }
     }

    jlist_HTML::editTemplatesFiles($option, $row);
}

function editTemplatesDetails($option, $cid){
    global $database, $my, $mosConfig_absolute_path;

    if(is_array($cid)) $cid = 0;

    $row = new jlist_templates( $database );
    $row->load( $cid );

    if ($row->isCheckedOut( $my->id )) {
        mosRedirect( 'index2.php?option='.$option.'&task=templates.list.details', $row->template_name.' '._JLIST_BACKEND_TEMP_USED );
    }
    $database->SetQuery("SELECT * FROM #__jdownloads_templates"
                        . "\nWHERE id = $cid");
    $database->loadObject($row);

    if ($cid) {
        $row->checkout( $my->id );
    }

    // load template text default
    if ($row->template_name == ''){
       $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT;
     } else {
       if ($row->template_text == '') {
           $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT;
       }
     }

    jlist_HTML::editTemplatesDetails($option, $row);
}

function editTemplatesSummary($option, $cid){
	global $database, $my, $mosConfig_absolute_path;

	if(is_array($cid)) $cid = 0;

	$row = new jlist_templates( $database );
	$row->load( $cid );

	if ($row->isCheckedOut( $my->id )) {
		mosRedirect( 'index2.php?option='.$option.'&task=templates.list.summary', $row->template_name.' '._JLIST_BACKEND_TEMP_USED );
	}
	$database->SetQuery("SELECT * FROM #__jdownloads_templates"
						. "\nWHERE id = $cid");
	$database->loadObject($row);

	if ($cid) {
		$row->checkout( $my->id );
	} 

    // load template text default
    if ($row->template_name == ''){
       $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_SUMMARY_DEFAULT;
     } else {
       if ($row->template_text == '') {
           $row->template_text = _JLIST_BACKEND_SETTINGS_TEMPLATES_SUMMARY_DEFAULT;
       }
     }

    jlist_HTML::editTemplatesSummary($option, $row);
}

// templates save
function saveTemplatesCats($option, $apply=0){
	global $database;

	$row = new jlist_templates($database);

	// bind it to the table
	if (!$row->bind($_POST)) {
		echo "<script> alert('"
			.$row->getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}

	$row->locked = mosGetParam($_POST, 'locked', '');
    if ($row->locked) {
        $row->template_name = mosGetParam($_POST, 'tempname', '');   
    }    
    
    if(empty($row->template_name)) {
        mosRedirect("index2.php?option=".$option."&task=templates.edit.cats", _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE); }

    $row->template_typ = '1';

    $row->template_text = rtrim(stripslashes($row->template_text));
    
	// store it in the db
	if (!$row -> store()) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}else{
		if(!$row->id) $row->id = mysql_insert_id();
	}
	$row->updateOrder();
	$row->checkin();

	if(!$apply)	mosRedirect("index2.php?option=".$option."&task=templates.list.cats", _JLIST_BACKEND_TEMPEDIT_SAVE." ");
	else mosRedirect("index2.php?option=".$option."&task=templates.edit.cats&cid=".$row->id, _JLIST_BACKEND_TEMPEDIT_SAVE." ");
}

// templates save
function saveTemplatesFiles($option, $apply=0){
	global $database;

	$row = new jlist_templates($database);

	// bind it to the table
	if (!$row -> bind($_POST)) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}

    $row->locked = mosGetParam($_POST, 'locked', '');
    if ($row->locked) {
        $row->template_name = mosGetParam($_POST, 'tempname', '');   
    }    

	if(empty($row->template_name)) {
        mosRedirect("index2.php?option=".$option."&task=templates.edit.files", _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE); }

    $row->template_typ = '2';

   $row->template_text = rtrim(stripslashes($row->template_text)); 

	// store it in the db
	if (!$row -> store()) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}else{
		if(!$row->id) $row->id = mysql_insert_id();
	}
	$row->updateOrder();
	$row->checkin();
	if(!$apply)	mosRedirect("index2.php?option=".$option."&task=templates.list.files", _JLIST_BACKEND_TEMPEDIT_SAVE." ");
	else mosRedirect("index2.php?option=".$option."&task=templates.edit.files&cid=".$row->id, _JLIST_BACKEND_TEMPEDIT_SAVE." ");
}

// templates save
function saveTemplatesDetails($option, $apply=0){
    global $database;

    $row = new jlist_templates($database);

    // bind it to the table
    if (!$row -> bind($_POST)) {
        echo "<script> alert('"
            .$row -> getError()
            ."'); window.history.go(-1); </script>\n";
        exit();
    }

    $row->locked = mosGetParam($_POST, 'locked', '');
    if ($row->locked) {
        $row->template_name = mosGetParam($_POST, 'tempname', '');   
    }    

    if(empty($row->template_name)) {
        mosRedirect("index2.php?option=".$option."&task=templates.edit.details", _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE); }

    $row->template_typ = '5';

    $row->template_text = rtrim(stripslashes($row->template_text)); 

    // store it in the db
    if (!$row -> store()) {
        echo "<script> alert('"
            .$row -> getError()
            ."'); window.history.go(-1); </script>\n";
        exit();
    }else{
        if(!$row->id) $row->id = mysql_insert_id();
    }
    $row->updateOrder();
    $row->checkin();
    if(!$apply)    mosRedirect("index2.php?option=".$option."&task=templates.list.details", _JLIST_BACKEND_TEMPEDIT_SAVE." ");
    else mosRedirect("index2.php?option=".$option."&task=templates.edit.details&cid=".$row->id, _JLIST_BACKEND_TEMPEDIT_SAVE." ");
}

// templates save
function saveTemplatesSummary($option, $apply=0){
	global $database;

	$row = new jlist_templates($database);

	// bind it to the table
	if (!$row -> bind($_POST)) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}

    $row->locked = mosGetParam($_POST, 'locked', '');
    if ($row->locked) {
        $row->template_name = mosGetParam($_POST, 'tempname', '');   
    }    
	
    if(empty($row->template_name)) {
        mosRedirect("index2.php?option=".$option."&task=templates.edit.summary", _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE); }

    $row->template_typ = '3';

    $row->template_text = rtrim(stripslashes($row->template_text)); 

	// store it in the db
	if (!$row -> store()) {
		echo "<script> alert('"
			.$row -> getError()
			."'); window.history.go(-1); </script>\n";
		exit();
	}else{
		if(!$row->id) $row->id = mysql_insert_id();
	}
	$row->updateOrder();
	$row->checkin();
	if(!$apply)	mosRedirect("index2.php?option=".$option."&task=templates.list.summary", _JLIST_BACKEND_TEMPEDIT_SAVE." ");
	else mosRedirect("index2.php?option=".$option."&task=templates.edit.summary&cid=".$row->id, _JLIST_BACKEND_TEMPEDIT_SAVE." ");
}

// templates delete
function deleteTemplatesCats($option, $cid){
	global $database;

	$total = count( $cid );
    $cids = implode( ',', $cid );

    // check for active or default layout
    $error_msg = checkTemplatesStatus($total,$cid);

    if ($error_msg) {
        mosRedirect("index2.php?option=".$option."&task=templates.list.cats", $error_msg);
    }

    // delete
	$database->SetQuery("DELETE FROM #__jdownloads_templates WHERE id IN ($cids)");
	$database->Query();

	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$msg = $total ._JLIST_BACKEND_TEMPLIST_DEL." ";
	mosRedirect( 'index2.php?option='. $option .'&task=templates.list.cats', $msg );
}

// templates delete
function deleteTemplatesFiles($option, $cid){
	global $database;

	$total = count( $cid );
	$cids = join(",", $cid);

    // check for active or default layout
    $error_msg = checkTemplatesStatus($total,$cid);

    if ($error_msg) {
        mosRedirect("index2.php?option=".$option."&task=templates.list.files", $error_msg);
    }

    // delete
	$database->SetQuery("DELETE FROM #__jdownloads_templates WHERE id IN ($cids)");
	$database->Query();

	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$msg = $total ._JLIST_BACKEND_TEMPLIST_DEL." ";
	mosRedirect( 'index2.php?option='. $option .'&task=templates.list.files', $msg );
}

// templates delete
function deleteTemplatesDetails($option, $cid){
    global $database;

    $total = count( $cid );
    $cids = join(",", $cid);

    // check for active or default layout
    $error_msg = checkTemplatesStatus($total,$cid);

    if ($error_msg) {
        mosRedirect("index2.php?option=".$option."&task=templates.list.details", $error_msg);
    }

    // delete
    $database->SetQuery("DELETE FROM #__jdownloads_templates WHERE id IN ($cids)");
    $database->Query();

    if ( !$database->query() ) {
        echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
        exit();
    }

    $msg = $total ._JLIST_BACKEND_TEMPLIST_DEL." ";
    mosRedirect( 'index2.php?option='. $option .'&task=templates.list.details', $msg );
}


// templates delete
function deleteTemplatesSummary($option, $cid){
	global $database;

	$total = count( $cid );
	$cids = join(",", $cid);

    // check for active or default layout
    $error_msg = checkTemplatesStatus($total,$cid);

    if ($error_msg) {
        mosRedirect("index2.php?option=".$option."&task=templates.list.summary", $error_msg);
    }

    // delete
    $database->SetQuery("DELETE FROM #__jdownloads_templates WHERE id IN ($cids)");
	$database->Query();

	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$msg = $total ._JLIST_BACKEND_TEMPLIST_DEL." ";
	mosRedirect( 'index2.php?option='. $option .'&task=templates.list.summary', $msg );
}

// templates cancel
function cancelTemplatesCats($option){
	global $database;

	$row = new jlist_templates( $database );
	$row->bind( $_POST );
	$row->checkin();
 
	mosRedirect( "index2.php?option=".$option."&task=templates.list.cats" );
}

// templates cancel
function cancelTemplatesFiles($option){
	global $database;

	$row = new jlist_templates( $database );
	$row->bind( $_POST );
	$row->checkin();

	mosRedirect( "index2.php?option=".$option."&task=templates.list.files" );
}

// templates cancel
function cancelTemplatesDetails($option){
    global $database;

    $row = new jlist_templates( $database );
    $row->bind( $_POST );
    $row->checkin();

    mosRedirect( "index2.php?option=".$option."&task=templates.list.details" );
}

// templates cancel
function cancelTemplatesSummary($option){
	global $database;

	$row = new jlist_templates( $database );
	$row->bind( $_POST );
	$row->checkin();

	mosRedirect( "index2.php?option=".$option."&task=templates.list.summary" );
}

// templates list
function listTemplatesCats($option){
	global $database, $mainframe;

	$pageNav = new mosPageNav( $total, $limitstart, $limit );
	$query = "SELECT * FROM #__jdownloads_templates where template_typ = 1";

	$database->SetQuery( $query );
	$rows = $database->loadObjectList();

	jlist_HTML::listTemplatesCats($rows, $option);
}

// templates list
function listTemplatesFiles($option){
	global $database, $mainframe;

	$pageNav = new mosPageNav( $total, $limitstart, $limit );
	$query = "SELECT * FROM #__jdownloads_templates where template_typ = 2";

	$database->SetQuery( $query );
	$rows = $database->loadObjectList();

	jlist_HTML::listTemplatesFiles($rows, $option);
}


function listTemplatesDetails($option){
    global $database, $mainframe;

    $pageNav = new mosPageNav( $total, $limitstart, $limit );
    $query = "SELECT * FROM #__jdownloads_templates where template_typ = 5";

    $database->SetQuery( $query );
    $rows = $database->loadObjectList();

    jlist_HTML::listTemplatesDetails($rows, $option);
}

// templates list
function listTemplatesSummary($option){
	global $database, $mainframe;

	$pageNav = new mosPageNav( $total, $limitstart, $limit );
	$query = "SELECT * FROM #__jdownloads_templates where template_typ = 3";

	$database->SetQuery( $query );
	$rows = $database->loadObjectList();

	jlist_HTML::listTemplatesSummary($rows, $option);
}

// templates active
function activeTemplatesCats($option, $cid){
	global $database;

    $total = count($cid);
    if ($total > 1) {
        echo "<script> alert('"._JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR."'); window.history.go(-1); </script>\n";
		exit();
    }
    
    $cids = implode( ',', $cid );
  
    // parent active disabled
	$database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = 1 AND template_active = 1");
	$database->Query();
    if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	// new active enabled
	$database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 1 WHERE template_typ = 1 AND id IN ( $cids )");
	$database->Query();
	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$msg = _JLIST_BACKEND_TEMPEDIT_ACTIVE." ";
	mosRedirect( 'index2.php?option='. $option .'&task=templates.list.cats', $msg );
}

// templates active
function activeTemplatesFiles($option, $cid){
	global $database;

    $total = count($cid);
    if ($total > 1) {
        echo "<script> alert('"._JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR."'); window.history.go(-1); </script>\n";
		exit();
    }

    $cids = implode( ',', $cid );

    // parent active disabled
	$database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = 2 AND template_active = 1");
	$database->Query();
    if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	// new active enabled
	$database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 1 WHERE template_typ = 2 AND id IN ( $cids )");
	$database->Query();
	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$msg = _JLIST_BACKEND_TEMPEDIT_ACTIVE." ";
	mosRedirect( 'index2.php?option='. $option .'&task=templates.list.files', $msg );
}

// templates active
function activeTemplatesDetails($option, $cid){
    global $database;

    $total = count($cid);
    if ($total > 1) {
        echo "<script> alert('"._JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR."'); window.history.go(-1); </script>\n";
        exit();
    }

    $cids = implode( ',', $cid );

    // parent active disabled
    $database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = 5 AND template_active = 1");
    $database->Query();
    if ( !$database->query() ) {
        echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
        exit();
    }

    // new active enabled
    $database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 1 WHERE template_typ = 5 AND id IN ( $cids )");
    $database->Query();
    if ( !$database->query() ) {
        echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
        exit();
    }

    $msg = _JLIST_BACKEND_TEMPEDIT_ACTIVE." ";
    mosRedirect( 'index2.php?option='. $option .'&task=templates.list.details', $msg );
}


// templates active
function activeTemplatesSummary($option, $cid){
	global $database;

    $total = count($cid);
    if ($total > 1) {
        echo "<script> alert('"._JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR."'); window.history.go(-1); </script>\n";
		exit();
    }

    $cids = implode( ',', $cid );

    // parent active disabled
	$database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = 3 AND template_active = 1");
	$database->Query();
    if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	// new active enabled
	$database->SetQuery("UPDATE #__jdownloads_templates SET template_active = 1 WHERE template_typ = 3 AND id IN ( $cids )");
	$database->Query();
	if ( !$database->query() ) {
		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$msg = _JLIST_BACKEND_TEMPEDIT_ACTIVE." ";
	mosRedirect( 'index2.php?option='. $option .'&task=templates.list.summary', $msg );
}

// css edit
function cssEdit($option) {
    global $mosConfig_absolute_path;
    
    $css_file = $mosConfig_absolute_path.'/components/com_jdownloads/jdownloads_fe.css';
    @chmod ($css_file, 0777);

	clearstatcache();
    if ( is_writable( $css_file ) == false ) {
      $css_writable = false;
    } else {
      $css_writable = true;
    }
	jlist_HTML::cssEdit($option, $css_file, $css_writable);
}

// css save
function cssSave($option, $css_file, $css_text) {

   $css_file = mosGetParam($_POST,'css_file', '');
   $css_text = mosGetParam($_POST,'css_text', '');
   clearstatcache();

   if (!is_writable($css_file)) {
		mosRedirect("index2.php?option=".$option."&task=css.edit", _JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT._JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO );
    break;
  }

  if ($fp = fopen( $css_file, "w")) {
    fputs($fp,stripslashes($css_text));
    fclose($fp);
		mosRedirect("index2.php?option=".$option."&task=css.edit", _JLIST_BACKEND_EDIT_CSS_SAVED);
  }
}

// language edit
function languageEdit($option) {
    global $mosConfig_lang, $mosConfig_absolute_path;

    if (file_exists($mosConfig_absolute_path.'/components/com_jdownloads/languages/'.$mosConfig_lang.'.php')) {
        $lang_file = $mosConfig_absolute_path.'/components/com_jdownloads/languages/'.$mosConfig_lang.'.php';
    } else {
        $lang_file = $mosConfig_absolute_path.'/components/com_jdownloads/languages/german.php';
    }

    if ($mosConfig_lang == 'germanf'){ $lang_file = $mosConfig_absolute_path.'/components/com_jdownloads/languages/german.php';}

    @chmod ($lang_file, 0777);
	clearstatcache();
    if ( is_writable( $lang_file ) == false ) {
      $lang_writable = false;
    } else {
      $lang_writable = true;
    }

	jlist_HTML::languageEdit($option, $lang_file, $lang_writable);
}

// language save
function languageSave($option, $lang_file, $lang_text) {

   $lang_file = mosGetParam($_POST,'lang_file', '');
   $lang_text = mosGetParam($_POST,'lang_text', '', _MOS_ALLOWHTML);

  if (!is_writable($lang_file)) {
 	mosRedirect("index2.php?option=".$option."&task=language.edit", _JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT._JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO );
    break;
  }

  if ($fp = fopen( $lang_file, "w")) {
    fputs($fp,stripslashes($lang_text));
    fclose($fp);
		mosRedirect("index2.php?option=".$option."&task=language.edit", _JLIST_BACKEND_EDIT_LANG_SAVED);
  }

}


/**********************************************
/ Configuration
/ ********************************************/

// Config view
function showConfig($option){
	global $jlistConfig, $database, $mainframe, $_VERSION, $mosConfig_absolute_path;
	
	$user_groups = array();
	$user_groups[] = mosHTML::makeOption( '0', _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL);
	$user_groups[] = mosHTML::makeOption( '1', _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED);
	$user_groups[] = mosHTML::makeOption( '2', _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS);
	
	
    $list_sortorder = array();
    $list_sortorder[] = mosHTML::makeOption( '0', _JLIST_BACKEND_SETTINGS_FILE_ORDER_1);
    $list_sortorder[] = mosHTML::makeOption( '1', _JLIST_BACKEND_SETTINGS_FILE_ORDER_2);
    $list_sortorder[] = mosHTML::makeOption( '2', _JLIST_BACKEND_SETTINGS_FILE_ORDER_3);
    $list_sortorder[] = mosHTML::makeOption( '3', _JLIST_BACKEND_SETTINGS_FILE_ORDER_4);
    $list_sortorder[] = mosHTML::makeOption( '4', _JLIST_BACKEND_SETTINGS_FILE_ORDER_5);
    
    $cats_sortorder = array();
    $cats_sortorder[] = mosHTML::makeOption( '0', _JLIST_BACKEND_SETTINGS_CATS_ORDER_1);
    $cats_sortorder[] = mosHTML::makeOption( '1', _JLIST_BACKEND_SETTINGS_CATS_ORDER_2);
    $cats_sortorder[] = mosHTML::makeOption( '2', _JLIST_BACKEND_SETTINGS_CATS_ORDER_3);
    
    // auswahlliste für default catsymbol
    $cat_pic_dir = '/images/jdownloads/catimages/';
    $pic_files = mosReadDirectory( "$mosConfig_absolute_path$cat_pic_dir" );
    $cat_pic_list[] = mosHTML::makeOption('', '');
    foreach ($pic_files as $file) {
        if (eregi( "gif|jpg|png", $file )) {
            $cat_pic_list[] = mosHTML::makeOption( $file );
        }
    }
    
    $inputbox_pic = mosHTML::selectList( $cat_pic_list, 'cat_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].cat_pic.options[selectedIndex].value!='') {document.imagelib.src='../$cat_pic_dir' + document.forms[0].cat_pic.options[selectedIndex].value} else {document.imagelib.src=''}\"", 'value', 'text', $jlistConfig['cat.pic.default.filename'] );
  
    // auswahlliste für default filesymbol
    $file_pic_dir = '/images/jdownloads/fileimages/';
    $pic_files = mosReadDirectory( "$mosConfig_absolute_path$file_pic_dir" );
    $file_pic_list[] = mosHTML::makeOption('', '');
    foreach ($pic_files as $file) {
        if (eregi( "gif|jpg|png", $file )) {
            $file_pic_list[] = mosHTML::makeOption( $file );
        }
    }
    $inputbox_pic_file = mosHTML::selectList( $file_pic_list, 'file_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].file_pic.options[selectedIndex].value!='') {document.imagelib2.src='../$file_pic_dir' + document.forms[0].file_pic.options[selectedIndex].value} else {document.imagelib2.src=''}\"", 'value', 'text', $jlistConfig['file.pic.default.filename'] );
  
    // auswahlliste für hot image
    $hot_pic_dir = '/images/jdownloads/hotimages/';
    $hot_files = mosReadDirectory( "$mosConfig_absolute_path$hot_pic_dir" );
    $hot_pic_list[] = mosHTML::makeOption('', '');
    foreach ($hot_files as $hotfile) {
        if (eregi( "gif|jpg|png", $hotfile )) {
            $hot_pic_list[] = mosHTML::makeOption( $hotfile );
        }
    }    
    
    $inputbox_hot = mosHTML::selectList( $hot_pic_list, 'hot_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].hot_pic.options[selectedIndex].value!='') {document.imagelib3.src='../$hot_pic_dir' + document.forms[0].hot_pic.options[selectedIndex].value} else {document.imagelib3.src=''}\"", 'value', 'text', $jlistConfig['picname.is.file.hot'] );
      
    // auswahlliste für new image
    $new_pic_dir = '/images/jdownloads/newimages/';
    $new_files = mosReadDirectory( "$mosConfig_absolute_path$new_pic_dir" );
    $new_pic_list[] = mosHTML::makeOption('', '');
    foreach ($new_files as $newfile) {
        if (eregi( "gif|jpg|png", $newfile )) {
            $new_pic_list[] = mosHTML::makeOption( $newfile );
        }
    }    
    
    $inputbox_new = mosHTML::selectList( $new_pic_list, 'new_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].new_pic.options[selectedIndex].value!='') {document.imagelib4.src='../$new_pic_dir' + document.forms[0].new_pic.options[selectedIndex].value} else {document.imagelib4.src=''}\"", 'value', 'text', $jlistConfig['picname.is.file.new'] );
            
    // auswahlliste für download image
    $down_pic_dir = '/images/jdownloads/downloadimages/';
    $down_files = mosReadDirectory( "$mosConfig_absolute_path$down_pic_dir" );
    $down_pic_list[] = mosHTML::makeOption('', '');
    foreach ($down_files as $downfile) {
        if (eregi( "gif|jpg|png", $downfile )) {
            $down_pic_list[] = mosHTML::makeOption( $downfile );
        }
    }    
    
    $inputbox_down = mosHTML::selectList( $down_pic_list, 'down_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].down_pic.options[selectedIndex].value!='') {document.imagelib5.src='../$down_pic_dir' + document.forms[0].down_pic.options[selectedIndex].value} else {document.imagelib5.src=''}\"", 'value', 'text', $jlistConfig['download.pic.details'] ); 
  
  $inputbox_mirror_1 = mosHTML::selectList( $down_pic_list, 'mirror_1_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].mirror_1_pic.options[selectedIndex].value!='') {document.imagelib6.src='../$down_pic_dir' + document.forms[0].mirror_1_pic.options[selectedIndex].value} else {document.imagelib6.src=''}\"", 'value', 'text', $jlistConfig['download.pic.mirror_1'] );
  
   $inputbox_mirror_2 = mosHTML::selectList( $down_pic_list, 'mirror_2_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].mirror_2_pic.options[selectedIndex].value!='') {document.imagelib7.src='../$down_pic_dir' + document.forms[0].mirror_2_pic.options[selectedIndex].value} else {document.imagelib7.src=''}\"", 'value', 'text', $jlistConfig['download.pic.mirror_2'] );  
  
    // auswahlliste für update image
    $upd_pic_dir = '/images/jdownloads/updimages/';
    $upd_files = mosReadDirectory( "$mosConfig_absolute_path$upd_pic_dir" );
    $upd_pic_list[] = mosHTML::makeOption('', '');
    foreach ($upd_files as $updfile) {
        if (eregi( "gif|jpg|png", $updfile )) {
            $upd_pic_list[] = mosHTML::makeOption( $updfile );
        }
    }    
    
    $inputbox_upd = mosHTML::selectList( $upd_pic_list, 'upd_pic', "class=\"inputbox\" size=\"1\""
  . " onchange=\"javascript:if (document.forms[0].upd_pic.options[selectedIndex].value!='') {document.imagelib8.src='../$upd_pic_dir' + document.forms[0].upd_pic.options[selectedIndex].value} else {document.imagelib8.src=''}\"", 'value', 'text', $jlistConfig['picname.is.file.updated'] );
    
    // for content file plugin by pelma
    // feststellen ob bereits installiert
    if ( $_VERSION->RELEASE < '1.5' ) {
        $file_plugin_path = $mainframe->getCfg('absolute_path') . '/mambots/content/mos_jdownloads_file.php';
    } else {    
        $file_plugin_path = $mainframe->getCfg('absolute_path') . '/plugins/content/mos_jdownloads_file.php';        
    }    
    if (file_exists($file_plugin_path)) {
        $database->setQuery("SELECT template_name  FROM #__jdownloads_templates WHERE template_typ = 2");
        $templaterows = $database->loadObjectList();
        $file_templates = array();
        $templatecnt = 0;
        foreach ($templaterows as $templaterow) {
            $file_templates[] = mosHTML::makeOption( $templaterow->template_name, $templaterow->template_name);
            $templatecnt++;
        }
        $file_plugin_inputbox = mosHTML::selectList( $file_templates, "jlistConfig[fileplugin.defaultlayout]" , 'size="6" class="inputbox"', 'value', 'text', $jlistConfig['fileplugin.defaultlayout'] );
        $file_plugin_inputbox2 = mosHTML::selectList( $file_templates, "jlistConfig[fileplugin.layout_disabled]" , 'size="6" class="inputbox"', 'value', 'text', $jlistConfig['fileplugin.layout_disabled'] );  
    }                
    
	jlist_HTML::showConfig($option, $list_sortorder, $cats_sortorder, $user_groups, $file_plugin_inputbox, $file_plugin_inputbox2, $inputbox_pic, $inputbox_pic_file, $inputbox_hot, $inputbox_new, $inputbox_down, $inputbox_mirror_1, $inputbox_mirror_2, $inputbox_upd);
}

// Config save
function saveConfig($option){
	global $database, $mosConfig_absolute_path;
	$msg = '';
	$root_dir = mosGetParam($_POST,'root_dir', 'downloads');
	$jlistConfig = mosGetParam($_POST,'jlistConfig',array(),_MOS_ALLOWHTML);
    $resize_thumbs = intval(mosGetParam($_POST,'resize_thumbs', 0));
    $jlistConfig['file.pic.default.filename'] = mosGetParam($_POST,'file_pic', 'zip.png');
    $jlistConfig['cat.pic.default.filename'] = mosGetParam($_POST,'cat_pic', 'folder.png');
    $jlistConfig['picname.is.file.new'] = mosGetParam($_POST,'new_pic', 'newfile.gif');
    $jlistConfig['picname.is.file.hot'] = mosGetParam($_POST,'hot_pic', 'hotfile.gif');
    $jlistConfig['picname.is.file.updated'] = mosGetParam($_POST,'upd_pic', 'update_blue.png');
    $jlistConfig['download.pic.details'] = mosGetParam($_POST,'down_pic', 'download_blue.png');
    $jlistConfig['download.pic.mirror_1'] = mosGetParam($_POST,'mirror_1_pic', 'mirror_blue1.png');
    $jlistConfig['download.pic.mirror_2'] = mosGetParam($_POST,'mirror_2_pic', 'mirror_blue2.png'); 
	$anti_leech = $jlistConfig['anti.leech'];
    
    // dirname geändert - also umbenennen
    $old_dir = $mosConfig_absolute_path.'/'.$root_dir;
    $new_dir = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'];
    if ($old_dir != $new_dir) {
      	if ( !@rename( $old_dir, $new_dir ) ) {
   		    $msg = _JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR;
		    mosRedirect('index2.php?option='.$option.'&task=config.show',$msg);	
        } else {
   		    $msg = '';
	    }
    }    

    // make sure that a pagenavi is selected
    //if ( !$jlistConfig['option.navigate.top'] && !$jlistConfig['option.navigate.bottom']){
      //   $jlistConfig['option.navigate.top'] = '1';
    // }    
    
	// anti-leech option
    // wenn aktiv in root dir kopieren und umbennenen
    $source = "$mosConfig_absolute_path/administrator/components/com_jdownloads/htaccess.txt"; 
    $dest   = "$mosConfig_absolute_path/".$jlistConfig['files.uploaddir'].'/.htaccess'; 

    if ($anti_leech && !is_file($dest)){
        if (is_file($source)){ 
            @copy($source, $dest);
            $msg .= _JLIST_ACTIVE_ANTILEECH_OK;
       } else {
           $msg .= _JLIST_ACTIVE_ANTILEECH_ERROR;
       }
    } else {
        // anti leech off? dann file löschen wenn da
       if (!$anti_leech) { 
        if (is_file($dest)){
            if (@unlink($dest)){
                $msg .= _JLIST_ACTIVE_ANTILEECH_OFF_OK;                
            } else {
                $msg .= _JLIST_ACTIVE_ANTILEECH_OFF_ERROR;                
            }   
        }
       }  
    }   
     
	foreach($jlistConfig as $setting_name=>$setting_value){
        $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '$setting_value' WHERE setting_name = '$setting_name'");
		$database->query();
	}
    
    $GLOBALS['jlistConfig'] = buildjlistConfig(); 
    
    // alle thumbs neu erstellen
    if ($resize_thumbs){
        // alle löschen
        $thumb_dir = $mosConfig_absolute_path.'/images/jdownloads/screenshots/thumbnails/';
        $screen_dir = $mosConfig_absolute_path.'/images/jdownloads/screenshots/';
        delete_dir_and_allfiles($thumb_dir);
        $pic_files = array();
        $only      = TRUE;
        $type      = array("png","jpg","gif");
        $allFiles  = false;
        $recursive = FALSE;
        $onlyDir   = FALSE;
        $ok = scan_dir($screen_dir, $type, $only, $allFiles,$recursive, $onlyDir, $pic_files);
        if ($ok){
            foreach ($pic_files as $pics){
                    create_new_thumb($pics[path].$pics[file]);
            }
            $msg = $msg.' - '._JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE;         
        }                        
            
    }    
	mosRedirect('index2.php?option='.$option.'&task=config.show',_JLIST_BACKEND_SETTINGS_SAVED.$msg);
}

//Information
function showInfo($option) {
	jlist_HTML::showInfo($option);
}

// run backup
function runBackup($option){
	global $database, $jlistConfig;
		$prefix = $database->_table_prefix;
        
        $tabellen = array($prefix.'jdownloads_config', $prefix.'jdownloads_cats', $prefix.'jdownloads_files', $prefix.'jdownloads_license', $prefix.'jdownloads_templates');
		$ausgabe = '<?php'."\r\n";
		for ($i=0; $i < count($tabellen); $i++) {
            $ausgabe .= '$database->setQuery("TRUNCATE TABLE `'.$tabellen[$i].'`") ;$database->query();'."\r\n";
        }    

		foreach($tabellen as $tabelle){
            // id field name
            switch($tabelle){
				case $prefix.'jdownloads_cats':
        			 $id_name = 'cat_id'; 
				break;
				case $prefix.'jdownloads_files':
        			 $id_name = 'file_id';
				break;
                default:
        			 $id_name = 'id';
				break;
			}
			$database->setQuery("SELECT $id_name FROM $tabelle");
			$xids = $database->loadObjectList();

			foreach($xids as $xid){
				switch($tabelle){
					case $prefix.'jdownloads_config':
						$object = new jlist_config($database);
					break;
					case $prefix.'jdownloads_cats':
						$object = new jlist_cats($database);
					break;
					case $prefix.'jdownloads_files':
						$object = new jlist_files($database);
					break;
					case $prefix.'jdownloads_license':
						$object = new jlist_license($database);
					break;
					case $prefix.'jdownloads_templates':
						$object = new jlist_templates($database);
					break;
				}
    			switch($id_name){
	       			case 'cat_id':
                         $object->load($xid->cat_id);
			 	    break;
			     	case 'file_id':
                         $object->load($xid->file_id);
    				break;
                    default:
                         $object->load($xid->id);
    			 	break;
	       		}

				$sql = '$database->setQuery("INSERT INTO '.$tabelle.' ( %s ) VALUES ( %s );"); $database->query();$i++; '."\r\n";
				$fields = array();
				$values = array();
				foreach (get_object_vars( $object ) as $k => $v) {
					if (is_array($v) or is_object($v) or $v === NULL) {
						continue;
					}
					if ($k[0] == '_') {
						continue;
					}
					$fields[] = $database->NameQuote( $k );
					$values[] = $database->Quote( $v );
				}
				$ausgabe .= sprintf( $sql, implode( ",", $fields ) ,  implode( ",", $values ) );
			}
		}
		$ausgabe .= "\r\n?>";
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M Y H:i:s") . " GMT");
		header ("Cache-Control: no-store, no-cache, must-revalidate");
        header ('Cache-Control: post-check=0, pre-check=0', false );
		header ("Pragma: no-cache");
		header ("Content-type: text/plain");
		header ('Content-Disposition: attachment; filename="'.'backup_jdownloads_v'.$jlistConfig['jd.version'].'.txt'.'"' );
		print $ausgabe;
		exit;
}

function showRestore($option, $task){
	jlist_HTML::showRestore($option, $task);
}

function runRestore($option, $task){
	global $database, $jlistConfig;

    $output = '';
	
    // get restore file
	$file = mosGetParam($_FILES,'restore_file',array('tmp_name'=>''));
	if($file['tmp_name']!= ''){
		$i = 0;
		// write values in db tables
		require_once($file['tmp_name']);
        // auto überwachung deaktivieren
        $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '0' WHERE setting_name = 'files.autodetect'");
        $database->query();
        $jlistConfig['files.autodetect'] = 0;
        
        // falls backup von alter version - prüfen
        require_once(EL_ADMIN_PATH.'/check.restore.jdownloads.php');
        $output = checkAfterRestore();
        $log_messages = checkFiles($task);
        $sum = '<font color="green">'.sprintf(_JLIST_BACKEND_RESTORE_MSG,(int)$i).'</font>';
        if ($log_messages){
            $output = $sum.'<br />'.$output.'<br /><b>'._JLIST_AFTER_RESTORE_TITLE_3.'</b><br />'.$log_messages.'<br /><b>'._JLIST_CHECK_FINISH.'</b>';
        } else {   
            $output = $sum.'<br />'.$output.'<br /><b>'._JLIST_CHECK_FINISH.'</b>';
        }    
        $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '".$output."' WHERE setting_name = 'last.restore.log'");
        $database->query();
        $jlistConfig['last.restore.log'] = $output;
    }
        // auto überwachung aktivieren
        $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '1' WHERE setting_name = 'files.autodetect'");
        $database->query();
        $jlistConfig['files.autodetect'] = 1;    
    mosRedirect('index2.php?option=com_jdownloads', $sum.' '._JLIST_BACKEND_RESTORE_MSG_2);
}

// create new directory
function directoriesNew($option){
	global $mosConfig_absolute_path, $jlistConfig;

    $marked_dir     = mosGetParam($_REQUEST, 'dirs', array());
    if ($marked_dir == '') {
       $marked_dir = '/'.$jlistConfig['files.uploaddir'].'/';
    }
    $new_dir_name   = mosGetParam($_REQUEST, 'new_subdir', '');
    $new_dir_name   = str_replace('/', '', $new_dir_name);
    $new_dir_name   = trim($new_dir_name);

    $new_dir = $mosConfig_absolute_path.$marked_dir.$new_dir_name;

    // create new dir if not exists
    $dir_exist = is_dir("$new_dir");
    if(!$dir_exist) {
       if ($makedir = @mkdir("$new_dir", 0777)) {
    	   $message = str_replace($mosConfig_absolute_path.'/', '', $new_dir).' '._JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_OK;
		   } else {
    	   $message = str_replace($mosConfig_absolute_path.'/', '', $new_dir).' '._JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR;
           }
	} else {
       $message = str_replace($mosConfig_absolute_path.'/', '', $new_dir).' '._JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_EXISTS;
    }
	mosRedirect('index2.php?option='.$option.'&task=directories.edit',$message);
}

// delete subdirectory incl. files
function directoryRemove($option){
	global $mosConfig_absolute_path, $jlistConfig;

    $marked_dir = mosGetParam($_REQUEST, 'del_dir', array());

    // is value = root dir or false value - do nothing
    if ($marked_dir == '/'.$jlistConfig['files.uploaddir'].'/' || !stristr($marked_dir, '/'.$jlistConfig['files.uploaddir'].'/')) {
        $message = $del_dir.' '._JLIST_BACKEND_DIRSEDIT_DELETE_DIR_ROOT_ERROR;
    	mosRedirect('index2.php?option='.$option.'&task=directories.edit',$message);
    } else {
        // del marked dir complete
        $res = delete_dir_and_allfiles ($mosConfig_absolute_path.$marked_dir);

        switch ($res) {
          case 0:
            $message = $marked_dir.'<br />'._JLIST_BACKEND_DIRSEDIT_DELETE_DIR_MESSAGE_OK;
            break;
          case -2:
            $message = $marked_dir.'<br />'._JLIST_BACKEND_DIRSEDIT_DELETE_DIR_MESSAGE_ERROR;
            break;
          default:
            $message = $marked_dir.'<br />'._JLIST_BACKEND_DIRSEDIT_DELETE_DIR_MESSAGE_ERROR_X;
            break;
        } 
	    mosRedirect('index2.php?option='.$option.'&task=directories.edit',$message);
	}
}

/*
* Read configuration parameter
*
* @return jlistConfig
*/
function buildjlistConfig(){
	global $database;

	$jlistConfig = array();
	$database->setQuery("SELECT setting_name, setting_value FROM #__jdownloads_config");
	$jlistConfigObj = $database->loadObjectList();
	if(!empty($jlistConfigObj)){
		foreach ($jlistConfigObj as $jlistConfigRow){
			$jlistConfig[$jlistConfigRow->setting_name] = $jlistConfigRow->setting_value;
		}
	}
	return $jlistConfig;
}

// get upload directories
//
// @return dirs
//
function getDirectories() {
	global $mosConfig_absolute_path, $jlistConfig;

    $dirs = array();
	//search all subdirectories
	if(file_exists($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'])){
		if ($handle = opendir($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'])) {
		    // List all the files
		    while (false !== ($file = readdir($handle))) {
              if($file != '.' && $file != '..') {
                if(is_dir($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$file)) {
		    		// added tio list array
		    		if ($file !== 'tempzipfiles') {
                        $dirs[] = $file;
                        }
   			    	}
                  }
			    }
		}
	    closedir($handle);
	}
	return $dirs;
}

// get all files in upload dir and subdirs
//
// @return up_files
//
function getFiles() {
	global $mosConfig_absolute_path, $jlistConfig;

    $up_files = array();

	if(file_exists($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'])){
       $startdir       = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/';
       $dir_len      = strlen($startdir);
       $dir          = $startdir;
       $type         = array("zip","txt","pdf");
       $only         = FALSE;
       $allFiles     = TRUE;
       $recursive    = TRUE;
       $onlyDir      = TRUE;
       $files        = array();
       $file         = array();

       $all_dirs = scan_dir($dir, $typ, $only, $allFiles, $recursive, $onlyDir, $files);
       if ($all_dirs != FALSE) {
           reset ($files);
           foreach($files as $key => $array) {
             // ist dirname > startdir?
             if ($startdir <> $files[$key]['path']) {
                 // unterverzeichnis vorhanden - nur pfadnamen ab download root + dateinamen
                 $restpath = substr($files[$key]['path'], $dir_len);
                 $files[$key]['path'] = $restpath;
                 } else { // dir ist startdir - also nur filenamen
                     $files[$key]['path'] = '';
                 }
           }

           // list all files
           foreach($files as $key3 => $array2) {
                if ($files[$key3]['file'] <> '') {
                    // no files in tempzifiles directory
                    if(strpos($files[$key3]['path'], 'tempzipfiles') === FALSE) {
                       $up_files[] = $files[$key3]['path'].$files[$key3]['file'];
                    }
                }
           }
       }
    }
	return $up_files;
}

// Kopiert alle dirs inkl. subdirs und files nach $dest
// und löscht abscchliessend das $source dir
function moveDirs($source, $dest, $recursive = true, $message) {

    $error = false;
	
	if (!is_dir($dest)) { 
        mkdir($dest); 
  	} 
 
    $handle = @opendir($source);
    
    if(!$handle) {
        $message = _JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY;
        return $message;
    }
    
    while ($file = @readdir ($handle)) {
        if (eregi("^\.{1,2}$",$file)) {
            continue;
        }
        
        if(!$recursive && $source != $source.$file."/") {
            if(is_dir($source.$file))
                continue;
        }
        
        if(is_dir($source.$file)) {
            moveDirs($source.$file."/", $dest.$file."/", $recursive, $message);
        } else {
            if (!@copy($source.$file, $dest.$file)) {
				$error = true;
			}
        }
    }
    @closedir($handle);
    
    // $source löschen wenn KEIN error
    if (!$error) {
		$res = delete_dir_and_allfiles ($source);	
        if ($res) {
			$message = _JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY;		
		}
	} else {
		$message = _JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY;
	}
	return $message;
} 

// check for aktive or default layout before delete
//
// @return error_msg
//
function checkTemplatesStatus($total,$cid) {
    global $database;

    $error_msg = '';
    
    // default template can not erase!
    for( $i=0; $i < $total; $i++ ) {
    	$database->setQuery("SELECT locked FROM #__jdownloads_templates WHERE id = ($cid[$i])");
        if ($database->loadResult() == 1 ) {
            $error_msg = _JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED;
        }
    }
    // active template can not erase!
    for( $i=0; $i < $total; $i++ ) {
    	$database->setQuery("SELECT template_active FROM #__jdownloads_templates WHERE id = ($cid[$i])");
        if ($database->loadResult() == 1 ) {
            $error_msg = _JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE;
        }
    }
    return $error_msg;
}

// delete_dir_and_allfiles - rekursiv löschen
// Rueckgabewerte:
//    0 - ok
//   -1 - kein Verzeichnis
//   -2 - Fehler beim Loeschen
//   -3 - Ein Eintrag war keine Datei/Verzeichnis/Link

function delete_dir_and_allfiles ($path) {
    if (!is_dir ($path)) {
        return -1;
    }
    $dir = @opendir ($path);
    if (!$dir) {
        return -2;
    }

    while (($entry = @readdir($dir)) !== false) {
        if ($entry == '.' || $entry == '..') continue;
        if (is_dir ($path.'/'.$entry)) {
            $res = delete_dir_and_allfiles ($path.'/'.$entry);
            // manage errors
            if ($res == -1) {
                @closedir ($dir); 
                return -2; 
            } else if ($res == -2) {
                @closedir ($dir); 
                return -2; 
            } else if ($res == -3) {
                @closedir ($dir); 
                return -3; 
            } else if ($res != 0) { 
                @closedir ($dir); 
                return -2; 
            }
        } else if (is_file ($path.'/'.$entry) || is_link ($path.'/'.$entry)) {
            // delete file
            $res = @unlink ($path.'/'.$entry);
            if (!$res) {
                @closedir ($dir);
                return -2; 
            }
        } else {
            @closedir ($dir);
            return -3;
        }
    }
    @closedir ($dir);
    // delete dir
    $res = @rmdir ($path);
    if (!$res) {
        return -2;
    }
    return 0;
}

// Beispieldaten installieren
function sampleInstall($option){
   global $database, $mosConfig_absolute_path, $jlistConfig;
   
        $root_dir = $jlistConfig['files.uploaddir'];
        // beispieldaten speichern - wenn neuinstallation
        $dir_exist = is_dir("$mosConfig_absolute_path/$root_dir");
            if($dir_exist) {
                if (is_writable("$mosConfig_absolute_path/$root_dir")) {      
                    if (!is_dir("$mosConfig_absolute_path/$root_dir/"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT)){
                        // daten speichern
                        // dirs für cats
                        $makdir = @mkdir("$mosConfig_absolute_path/$root_dir/"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT, 0777);
                        $makdir = @mkdir("$mosConfig_absolute_path/$root_dir/"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT.'/'._JLIST_SAMPLE_DATA_CAT_NAME_SUB, 0777);
                        // cat erstellen in db
                        if ($makdir) {
                            $database->setQuery("INSERT INTO #__jdownloads_cats (cat_title, cat_description, cat_dir, parent_id, cat_pic, published)  VALUES ('"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT."', '"._JLIST_SAMPLE_DATA_CAT_NAME_TEXT."', '"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT."', 0, 'joomla.png', 1)");
                            $database->query();
                            $cattitle = _JLIST_SAMPLE_DATA_CAT_NAME_ROOT;
                            $database->setQuery("SELECT cat_id FROM #__jdownloads_cats WHERE cat_title = '$cattitle'");
                            $catid = $database->loadResult();
                            $database->setQuery("INSERT INTO #__jdownloads_cats (cat_title, cat_description, cat_dir, parent_id, cat_pic, published)  VALUES ('"._JLIST_SAMPLE_DATA_CAT_NAME_SUB."', '"._JLIST_SAMPLE_DATA_CAT_NAME_TEXT."', '"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT.'/'._JLIST_SAMPLE_DATA_CAT_NAME_SUB."', ".$catid.", 'joomla.png', 1)");
                            $database->query();
                            // file kopieren nach catdir
                            $source_path = "$mosConfig_absolute_path/administrator/components/com_jdownloads/mod_jdownloads_top_1.1.zip";
                            $dest_path = $mosConfig_absolute_path.'/'.$root_dir.'/'._JLIST_SAMPLE_DATA_CAT_NAME_ROOT.'/'._JLIST_SAMPLE_DATA_CAT_NAME_SUB.'/mod_jdownloads_top_1.1.zip'; 
                            @copy($source_path, $dest_path);
                            // downloads erstellen
                            $cattitle = _JLIST_SAMPLE_DATA_CAT_NAME_SUB;
                            $database->setQuery("SELECT cat_id FROM #__jdownloads_cats WHERE cat_title = '$cattitle'");
                            $catid = $database->loadResult();
                            
                            $database->setQuery("INSERT INTO #__jdownloads_files (`file_id`, `file_title`, `description`, `description_long`, `file_pic`, `price`, `release`, `language`, `system`, `license`, `url_license`, `size`, `date_added`, `url_download`, `url_home`, `author`, `url_author`, `created_by`, `created_mail`, `modified_by`, `modified_date`, `downloads`, `cat_id`, `ordering`, `published`, `checked_out`, `checked_out_time`) VALUES (NULL, '"._JLIST_SAMPLE_DATA_FILE_NAME."', '"._JLIST_SAMPLE_DATA_FILE_NAME_TEXT."', '"._JLIST_SAMPLE_DATA_FILE_NAME_TEXT."', 'joomla.png', '', '1.0', '2', '1', '1', '', '1.92 KB', '".date('Y-m-d H:i:s')."', 'mod_jdownloads_top_1.1.zip', 'www.joomlaaddons.de', 'Arno Betz', 'info@joomlaaddons.de', 'Installer', '', '', '0000-00-00 00:00:00', '0', '".$catid."', '0', '1', '0', '0000-00-00 00:00:00')");
                            $database->query();
                            echo "<br /><font color='green'> "._JLIST_SAMPLE_DATA_CREATE_OK."<br />";
                        }
                    } else {
                        // daten existieren schon
                        echo "<br /><font color='red'> "._JLIST_SAMPLE_DATA_EXISTS."</font><br />";
                    } 
                } else {
                    // fehlermeldung: daten konnten nicht gespeichert werden
                    echo "<br /><font color='red'> "._JLIST_SAMPLE_DATA_CREATE_ERROR."</font><br />";
                } 
                       
            } else {
                // fehlermeldung: daten konnten nicht gespeichert werden
                echo "<br /><font color='red'> "._JLIST_SAMPLE_DATA_CREATE_ERROR."</font><br />";
            }
                echo '<br /><br /><a href="index2.php?option=com_jdownloads&task=" title="'._JLIST_SAMPLE_DATA_BACK_TO_PANEL.'">'._JLIST_SAMPLE_DATA_BACK_TO_PANEL.'</a><br />';
}

// Dateigröße einer externen Datei ermitteln
function urlfilesize($url) {
    if (substr($url,0,4)=='http' || substr($url,0,3)=='ftp') {
        // for php 4 users
        if (!function_exists('get_headers')) {
            function get_headers($url, $format=0) {
                $headers = array();
                $url = parse_url($url);
                $host = isset($url['host']) ? $url['host'] : '';
                $port = isset($url['port']) ? $url['port'] : 80;
                $path = (isset($url['path']) ? $url['path'] : '/') . (isset($url['query']) ? '?' . $url['query'] : '');
                $fp = fsockopen($host, $port, $errno, $errstr, 3);
                if ($fp) {
                    $hdr = "GET $path HTTP/1.1\r\n";
                    $hdr .= "Host: $host \r\n";
                    $hdr .= "Connection: Close\r\n\r\n";
                    fwrite($fp, $hdr);
                    while (!feof($fp) && $line = trim(fgets($fp, 1024))) {
                        if ($line == "\r\n") break;
                        list($key, $val) = explode(': ', $line, 2);
                        if ($format)
                            if ($val) $headers[$key] = $val;
                            else $headers[] = $key;
                        else $headers[] = $line;
                    }
                    fclose($fp);
                    return $headers;
                }
                return false;
            }
        }
        $size = array_change_key_case(get_headers($url, 1),CASE_LOWER);
        $size = $size['content-length'];
        if (is_array($size)) { $size = $size[1]; }
    } else {
        $size = @filesize($url); 
    }
    $a = array("B", "KB", "MB", "GB", "TB", "PB");

    $pos = 0;
    while ($size >= 1024) {
           $size /= 1024;
           $pos++;
    }
    return round($size,2)." ".$a[$pos];    
} 
         
// datum der externen datei holen
function urlfiledate($url){
    if (file_exists($url)){
        $aktuell = date("Y-m-d H:i:s",filemtime($url));
    } else {
        $aktuell = date("Y-m-d H:i:s");
    }    
  return $aktuell;
}      

function create_new_thumb($picturepath) {
    global $jlistConfig, $mosConfig_absolute_path;
    $thumbpath = $mosConfig_absolute_path.'/images/jdownloads/screenshots/thumbnails/';
    if (!is_dir($thumbpath)){
        @mkdir("$thumbpath", 0777);
    }    
    $newsize = $jlistConfig['thumbnail.size.width'];
    $thumbfilename = $thumbpath.basename($picturepath);
    if (file_exists($thumbfilename)){
       return true;
    }   
    
    /* Prüfen ob Datei existiert */
    if(!file_exists($picturepath)) {
        return false;
    }
    
    /* MIME-Typ auslesen */
    $size=getimagesize($picturepath);
    switch($size[2]) {
        case "1":
        $oldpic = imagecreatefromgif($picturepath);
        break;
        case "2":
        $oldpic = imagecreatefromjpeg($picturepath);
        break;
        case "3":
        $oldpic = imagecreatefrompng($picturepath);
        break;
        default:
        return false;
    }
    /* Alte Maße auslesen */
    $width = $size[0];
    $height = $size[1]; 
    /* Neue Maße errechnen */
    if($width>=$height) {
        $newwidth = $newsize;
        $newheight = $newsize*$height/$width;
    } else {
        $newheight = $newsize;
        $newwidth = $newsize*$width/$height;
    }    
    /* Neues Bild erstellen mit den neuen Maßen */
    $newpic = imagecreatetruecolor($newwidth,$newheight);
    /* Jetzt wird das Bild nur noch verkleinert */
    imagecopyresized($newpic,$oldpic,0,0,0,0,$newwidth,$newheight,$width,$height); 
    // Bild speichern
    switch($size[2]) {
        case "1":    return imagegif($newpic, $thumbfilename);
        break;
        case "2":    return imagejpeg($newpic, $thumbfilename);
        break;
        case "3":    return imagepng($newpic, $thumbfilename);
        break;
    }
    //Bilderspeicher freigeben
    imagedestroy($oldpic);
    imagedestroy($newpic);
}

function set_rights_to_tree($p_catid, $p_right, $p_right_from, &$p_changed){
// function coded by pelma
// Funktion welche die Rechte eines Kategoriebaum setzt. Achtung REKURSIV !!!
// $p_catid      = ID der Kategorie deren Rechte gesetzt werden soll.
// $p_right      = Die Rechte welche gesetzt werden.
// $p_right_from = Die ursprünglichen Rechte
// $p_changed    = Anzahl der Korrekturen   
// echo $p_catid.' p_right_from:'.$p_right_from.' p_right:'.$p_right.'<br />';
    global $database;
    // Lesen der Kategorie aus der Datenbank.
    $l_sql = "SELECT cat_access FROM #__jdownloads_cats WHERE cat_id = ".$p_catid;
    $database->setQuery($l_sql);
    $r_catrow = $database->loadObjectList();

    // Hier werden die eigentlichen Rechte der aktuellen Kategorie gesetzt.
    //  Falls die Rechte der aktuellen Kategorie KLEINER sind als die zu setzenden Rechte.
    //  Damit wird verhindert, dass Unterkategorien welche schon höhere Rechte haben nicht überschrieben werden.
    // Oder
    //  Falls die Rechte der aktuellen Kategorie kleiner oder gleich sind als die ursprünglichen Rechte.
    //  Sonst können kleinere Werte (=höhere Rechte) nicht gesetzt werden.
    if (($r_catrow[0]->cat_access < $p_right) || ($r_catrow[0]->cat_access <= $p_right_from)){
      $l_sql = "UPDATE #__jdownloads_cats SET cat_access = '".$p_right."' WHERE cat_id = ".$p_catid;
      $database->setQuery($l_sql);
      $database->query();
      if ($p_changed != -1){
          $p_changed++;
      }    
    }

    // Alle Unterkategorien der aktuellen Kategorie aus der Datenbank lesen.
    // d.h. Alle Kategorien deren parent_id der aktuellen KategorienID entsprechen.
    $l_sql = "SELECT cat_id FROM #__jdownloads_cats WHERE parent_id = ".$p_catid;
    $database->setQuery($l_sql);
    $l_childrows = $database->loadObjectList();
    if (!isset($l_childrows[0])){
      // Keine Unterkategorien gefunden, d.h. das Ende des aktuellen Kategorienbaumes ist erreicht. Die Funktion verlassen.
      // Falls die Funktion in der Rekursivität ist, wird in der unteren foreach-Schleife die nächste Unterkategorie aufgerufen.
       return;
    }
    // Alle Unterkategorien abfahren.
    foreach ($l_childrows as $l_childrow){
      // Zuerst: Automatische Korrektur von Fehlern.
      // D.h. Eine Unterkategorie welche schon niedrigere Rechte hat (=höheren Wert in cat_access) müsste eigentlich nicht abgefahren werden.
      // Es könnte aber sein, dass diese Fehlern aufweist (z.B. bei einem Update von 1.3 nach 1.4).
      // Fehler heisst in diesem Fall, dass eine Unter-Unter-Kategorie grössere Rechte hat (=niedriger Wert in cat_access).
      // Dies ist ja verboten und muss korrigiert werden.
      // Dazu:
      // Die aktuelle Unterkategorie aus der Datenbank lesen
      $l_sql = "SELECT cat_access FROM #__jdownloads_cats WHERE cat_id = ".$l_childrow->cat_id;
      $database->setQuery($l_sql);
      $l_child = $database->loadObjectList();
      // Die Original verlangten Werte als Defaut setzen.
      $l_right = $p_right;
      $l_right_from = $p_right_from;

      // Falls die Rechte der abzufahrenden Unterkategorie kleiner sind (cat_access grösser) als die ursprünglichen Rechte
      // Und: die Rechte der abzufahrenden Unterkategorie kleiner sind (cat_access grösser) als die zu setzenden Rechte
      // Dann: die eigenen Rechte der Unterkategorie ihr selbst als neu zu setzende Rechte übergeben.
      if (($l_child[0]->cat_access > $p_right_from) && ($l_child[0]->cat_access > $p_right)){
        $l_right = $l_child[0]->cat_access;
        $l_right_from = $l_child[0]->cat_access;
      }
      // Für alle Unterkategorien die Funktion nochmals aufrufen.
      set_rights_to_tree($l_childrow->cat_id, $l_right, $l_right_from, $p_changed);
    }
}

function get_lowest_rights($p_catid, $p_suggest_right){
// function coded by pelma  
// Funktion welche alle darüberliegenden Kategorien nach niedrigeren Rechten (=höhere Werte) durchsucht,
// und den höchsten Wert zurückgibt. Diese Funktion ist nicht rekursiv.
// $p_catid =           KategorienID, von welcher aus nach oben durchsucht wird.
// $p_suggested_right = Die rechte welche gesetzt werden sollen, und hier überprüft werden.
    global $database;
    // Kategorie laden aus Datenbank
    $l_sql = "SELECT cat_id, parent_id, cat_access FROM #__jdownloads_cats WHERE cat_id = ".$p_catid;
    $database->setQuery($l_sql);
    $l_catrow = $database->loadObjectList();
    if (!isset($l_catrow[0])){
      // Die Kategorie existiert nicht. Nicht weiterfahren, aber die vorgeschlagenen Rechte zurückgeben.
      // (Dies sollte eigentlich nie vorkommen)
     return $p_suggest_right;
    }
    // Initialiseren der Rechte welche von der Funktion zurückgegeben werden.
    $l_therights = $p_suggest_right;
    // Den Kategorien-Baum solange hochfahren bis keine höhere Kategorie mehr existiert. (d.h. bis die Hauptkategorie erreicht ist)
    while ($l_catrow[0]->parent_id > 0 ){
      // Nächsthöhere Parent-Kategorie aus Datenbank lesen.
      $l_sql = "SELECT parent_id, cat_access FROM #__jdownloads_cats WHERE cat_id = ".$l_catrow[0]->parent_id;
      $database->setQuery($l_sql);
      $l_catrow = $database->loadObjectList();
      // Wenn die geladene Parent-Kategorie einen höheren Wert hat, diesen übernehmen.
      if ($l_catrow[0]->cat_access > $l_therights){
          $l_therights = $l_catrow[0]->cat_access;
      }
    }
    // Zurück mit höchstem gefundenem Wert (=niedrigstes Recht)
    return $l_therights;
}

function set_rights_of_cat($p_catid, $p_suggest_right, &$p_changed){
// function coded by pelma  
// Hauptprozedur. Diese wird aufgerufen um die Rechte einer Kategorie zu setzen, inklusive deren Unterkategorien.
// $p_catid =           KategorienID, welche gesetzt werden soll.
// $p_suggested_right = Die rechte welche gesetzt werden sollen.
// $p_changed         = Anzahl der Korrekturen oder (-1): Gewünschte Änderung war nicht zulässig!  
    global $database;
    // Kategorie laden aus Datenbank.
    $l_sql = "SELECT parent_id, cat_access FROM #__jdownloads_cats WHERE cat_id = ".$p_catid;
    $database->setQuery($l_sql);
    $l_catrow = $database->loadObjectList();
    if (!isset($l_catrow[0]) && ($p_catid > 0)){
      // Die Kategorie existiert nicht. Nicht weiterfahren.
      return '';
    }
    // Ursprüngliche Rechte der Kategorie lesen.
    $l_rights_from = $l_catrow[0]->cat_access;
    if ($l_catrow[0]->parent_id == 0){
      // Es ist eine Hauptkategorie. Darüberliegende Kategorien müssen nicht nach niedrigen Rechten durchsucht werden.
      $l_rights_to_set = $p_suggest_right;
    } else {
      // Es ist eine Unterkategorie. Darüberliegenden Kategoriebaum nach niedrigen Rechten (=höherer Wert) durchsuchen.
      // Damit wird gewährleitet, dass eine Unterkategorie keine höheren Rechte erhalten kann.
      $l_rights_to_set = get_lowest_rights($p_catid, $p_suggest_right);
      if ($l_rights_to_set > $p_suggest_right) $p_changed = -1;
    }
    // Die Rechte der Kategorie und aller Unter- und Unter-Unter-Kategorien setzen.
    set_rights_to_tree($p_catid, $l_rights_to_set, $l_rights_from, $p_changed);
}

?>