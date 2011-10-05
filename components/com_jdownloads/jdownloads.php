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
clearstatcache();
session_start();

	global $database, $mosConfig_lang, $mosConfig_sitename, $Itemid, $mainframe;   
    global $id, $limit, $limitstart, $site_aktuell, $catid, $cid, $task, $pop, $jlistConfig, $jlistTemplates, $_VERSION;  
    
	define( 'ELPATH', dirname(__FILE__) );

    $utf8_lang = '';

    if ( $_VERSION->RELEASE < '1.5' ) {
        $utf8_lang = '';
    } else {
        $utf8_lang = '.utf8';
    }
    
    if (file_exists(ELPATH.'/languages/'.$mosConfig_lang.$utf8_lang.'.php')) {
      include(ELPATH.'/languages/'.$mosConfig_lang.$utf8_lang.'.php');
    } else {
      include(ELPATH.'/languages/english'.$utf8_lang.'.php');
    }

	require_once( $mainframe->getPath( 'class' ) );
	require_once( $mainframe->getPath( 'front_html' ) );
	require_once(ELPATH.'/../../includes/pageNavigation.php');

	$id = (int)mosGetParam( $_REQUEST, 'cid', array(0));
	if (!is_array( $id)) {
         $id = array(0);
    }

    $GLOBALS['jlistConfig'] = buildjlistConfig();
    $GLOBALS['jlistTemplates'] = getTemplates();

    $pop 			= intval( mosGetParam( $_REQUEST, 'pop', 0 ) );
	$task 			= mosGetParam( $_REQUEST, 'task' );
	$cid 			= (int)mosGetParam($_REQUEST, 'cid', array());
    $catid          = (int)mosGetParam($_REQUEST, 'catid', 0);
    
	$limit        =  intval($jlistConfig['files.per.side']);
	$limitstart   = intval( mosGetParam( $_REQUEST, 'start', 0 ) );
    $site_aktuell = intval( mosGetParam( $_REQUEST, 'site', 1 ) );
    
switch ($task) {

	   case 'view.upload':
		    viewUpload($option,$task);
	        break;
	   
	   case 'summary':
		    Summary($option);
		    break;

	   case 'finish':
		    finish($option);
		    break;

       case 'viewcategory':
    		showOneCategory($option,$cid);
	       	break;

       case 'view.download':
            showDownload($option,$cid);               
            break;

       case 'download':
            download($option,$cid);               
            break;
                        
       case 'search':
            showSearchForm($option,$cid);
            break;            
            
       case 'search.result':
            showSearchResult($option,$cid);
            break;            
           
	   default: showCats($option,$cid);
            break;
}

// show summary
function Summary($option){
	global $database, $jlistConfig, $mosConfig_live_site, $mosConfig_absolute_path, $my, $Itemid;

    $extern_site = false;
    $marked_files_id = array();
    // file-id der ausgewählten dateien holen - falls verwendet
    $marked_files_id = mosGetParam( $_POST, 'cb_arr', array(0));
    for($i=0,$n=count($marked_files_id);$i<$n;$i++){
        $marked_files_id[$i] = intval($marked_files_id[$i]);
    }
    // get file id
    $fileid = intval(mosGetParam( $_REQUEST, 'cid', 0 ));
    // get cat id
    $catid = intval(mosGetParam( $_REQUEST, 'catid', 0 ));
    // is mirror file ?
    $is_mirror =  intval(mosGetParam( $_REQUEST, 'm', 0 ));
  
    // ist vorhanden dann download direkt nicht über checkbox
    if ($fileid){
        $direktlink = true;
        $id_text = $fileid;        
        $filename = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=finish&cid='.$fileid.'&catid='.$catid.'&m='.$is_mirror);
        $download_link = $filename;       
    }    
        
    // in text übertragen für anzeige der gewählten files
    $anz = 0;
    if (!$id_text){
        $anz = count($marked_files_id);
        if ( $anz > 1 ){
           $id_text = implode(',', $marked_files_id);
        } else {
           $id_text = $marked_files_id[0];
        }
    }

    // get filetitle and release for mail and summary
    $mail_files_arr = array();
    $mail_files = "<div><ul>";
    $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_id IN ($id_text) ");
    $mail_files_arr = $database->loadObjectList();
    $database->setQuery("SELECT * FROM #__jdownloads_license");
    $lic_arr = $database->loadObjectList();
    
    for ($i=0; $i<count($mail_files_arr); $i++) {
         $mail_files .= "<div><li><b>".$mail_files_arr[$i]->file_title.' '.$mail_files_arr[$i]->release.'&nbsp;&nbsp;&nbsp;</b>'._JLIST_FE_DETAILS_LICENSE_TITLE.': <b>'.$lic_arr[$mail_files_arr[$i]->license]->license_title.'&nbsp;&nbsp;&nbsp;</b>'._JLIST_FE_DETAILS_FILESIZE_TITLE.': <b>'.$mail_files_arr[$i]->size.'</b></li></div>';
    }
    $mail_files .= "</ul></div>";
    
    // set flag when link must opened in a new browser window 
    if (!$is_mirror && $i == 1 && $mail_files_arr[0]->extern_site){
        $extern_site = true;    
    }
    if ($is_mirror == 1 && $i == 1 && $mail_files_arr[0]->extern_site_mirror_1){
        $extern_site = true;    
    }
    if ($is_mirror == 2 && $i == 1 && $mail_files_arr[0]->extern_site_mirror_2){
        $extern_site = true;    
    } 
        
    // wenn kein direktlink - checkox variante   
    if (!$direktlink){ 
        // wenn mehr als eine datei - markierte files als zip packen
        $download_verz = $mosConfig_live_site.'/'.$jlistConfig['files.uploaddir'].'/';
        $zip_verz = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/';
        if (count($marked_files_id) > 1) {
            // zufallszahl für zip-dateinamen
            if (empty($user_random_id)){
                $user_random_id = buildRandomID();
            }
            $zip=new ss_zip();
            for ($i=0; $i<count($marked_files_id); $i++) {
                // fileurl holen
                $database->setQuery("SELECT url_download FROM #__jdownloads_files WHERE file_id = '".(int)$marked_files_id[$i]."'");
                $filename = $database->loadResult();
                $database->setQuery("SELECT cat_id FROM #__jdownloads_files WHERE file_id = '".(int)$marked_files_id[$i]."'");
                $cat_id = $database->loadResult();
                $database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$cat_id'");
                $cat_dir = $database->loadResult();
                $cat_dir = $cat_dir.'/'; 
                $zip->add_file($zip_verz.$cat_dir.$filename, $filename);
            }
            $zip->archive(); // return the ZIP
            $zip->save($zip_verz."tempzipfiles/".$jlistConfig['zipfile.prefix'].$user_random_id.".zip");
            $zip_size = fsize($zip_verz."tempzipfiles/".$jlistConfig['zipfile.prefix'].$user_random_id.".zip");
            $mail_files .= "<div><br />"._JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE.': <b>'.$zip_size.'</b></div>';
            
            // alte zips löschen
            $del_ok = deleteOldFile($zip_verz."tempzipfiles/");
            $filename = $download_verz."tempzipfiles/".$jlistConfig['zipfile.prefix'].$user_random_id.".zip";
            $download_link = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=finish&list='.$id_text.'&amp;user='.$user_random_id); 
        } else {
            // nur 1 datei
            $database->setQuery("SELECT cat_id FROM #__jdownloads_files WHERE file_id = '".(int)$marked_files_id[0]."'");
            $cat_id = $database->loadResult();
            $filename = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=finish&cid='.(int)$marked_files_id[0].'&catid='.$cat_id);
            $download_link = $filename;
        }
    }
                
    jlist_HTML::Summary($option, $marked_files_id, $mail_files, $filename, $download_link, $del_ok, $extern_site);
}

// finish and start the download
function finish($option){
	global $mainframe, $database, $mosConfig_live_site, $mosConfig_absolute_path, $jlistConfig, $mail_files, $Itemid;
    
   $extern = false;
   $extern_site = false;
   $sess_name = session_name();
   $user_sess_id = $_COOKIE["$sess_name"];

  if ($user_sess_id == session_id()) {
   
    // get file id
    $fileid = intval(mosGetParam( $_REQUEST, 'cid', 0 ));
    // get cat id
    $catid = intval(mosGetParam( $_REQUEST, 'catid', 0 ));
    
    $is_mirror = intval(mosGetParam( $_REQUEST, 'm', 0 ));
    
    
    // files liste holen wenn mhr als ein dosnload markiert
    $files = $database->getEscaped (mosGetParam( $_REQUEST, 'list', '' ));
    if ($files){
        // sammeldownload
        $user_random_id = intval(mosGetParam( $_REQUEST, 'user', 0 ));
        $download_verz = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'; 
        $filename = $download_verz."tempzipfiles/".$jlistConfig['zipfile.prefix'].$user_random_id.".zip"; 
        // Zähler versorgen
        $database->setQuery("UPDATE #__jdownloads_files SET downloads=downloads+1 WHERE file_id IN ($files) ");
        $database->query();
        // send mail
        if ($jlistConfig['send.mailto.option'] == '1') {
            sendMail($files);  
        }
    } else {
        // einzelner download
        // hits um 1 erhöhen
        $database->setQuery("UPDATE #__jdownloads_files SET downloads=downloads+1 WHERE file_id = '".(int)$fileid."'");
        $database->query();

        // get filename and build path
        if (!$is_mirror){
            $database->setQuery("SELECT url_download FROM #__jdownloads_files WHERE file_id = '".(int)$fileid."'");
            $file_url = $database->loadResult();
            if ($file_url){
                $database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '".(int)$catid."'");
                $cat_dir = $database->loadResult();
                $filename = $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'.$cat_dir.'/'.$file_url;
            } else {
                $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_id = '".(int)$fileid."'");
                $result = $database->loadObjectlist();
                $filename = $result[0]->extern_file; 
                if ($result[0]->extern_site){
                    $extern_site = true;
                }
                $extern = true;
            }
        } else {
            // is mirror 
            $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_id = '".(int)$fileid."'");
            $result = $database->loadObjectlist();
            if ($is_mirror == 1){
                $filename = $result[0]->mirror_1; 
                if ($result[0]->extern_site_mirror_1){
                    $extern_site = true;
                }
            } else {
                $filename = $result[0]->mirror_2; 
                if ($result[0]->extern_site_mirror_2){
                    $extern_site = true;
                }
            }
            $extern = true;    
        }      
        
        // send mail
        if ($jlistConfig['send.mailto.option'] == '1') {
            sendMail($fileid);  
        }
    }    
    // run download
	$x = download($filename, $extern, $extern_site);
    if ($x == 2) {
        // datei nicht vorhanden
        echo '<div align ="center"><br /><b><font color="#990000">'._JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE.'</font></b><br /><br /></div>';         
    }
  
  } else {
      // unerlaubte verlinkung
      echo '<div align ="center"><br /><b><font color="red">'._JLIST_FRONTEND_ANTILEECH_MESSAGE.'</font></b><br /><br /></div>';
  }    
}

// download starten
function download($file, $extern, $extern_site){
     global $jlistConfig;
    //session_unset();
    //session_destroy();
    
    $view_types = array();
    $view_types = explode(',', $jlistConfig['file.types.view']); 
    clearstatcache(); 
    // existiert file - wenn nicht error
    if (!$extern){
        if (!file_exists($file)) { 
            return 2;
        } else {
            $len = filesize($file);
        }    
    } else {   
         $len = urlfilesize($file); 
    }
    
    // if url go to other website - open it in a new browser window
    if ($extern_site){
        echo "<script>document.location.href='$file';</script>\n";
        exit;   
    }    
    
        
    $filename = basename($file);
    $file_extension = strtolower(substr(strrchr($filename,"."),1));
    $ctype = datei_mime($file_extension);
    ob_end_clean();
    header("Cache-Control: public, must-revalidate");
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header("Pragma: no-cache");
    header("Expires: 0"); 
    header("Content-Description: File Transfer");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Content-Type: " . $ctype);
    header("Content-Length: ".(string)$len);
    if (!in_array($file_extension, $view_types)){
        header('Content-Disposition: attachment; filename="'.$filename.'"');
    }    
    header("Content-Transfer-Encoding: binary\n");
    
    @readfile($file);
    exit;
}

function datei_mime($filetype) {
    
    switch ($filetype) {
        case "ez":  $mime="application/andrew-inset"; break;
        case "hqx": $mime="application/mac-binhex40"; break;
        case "cpt": $mime="application/mac-compactpro"; break;
        case "doc": $mime="application/msword"; break;
        case "bin": $mime="application/octet-stream"; break;
        case "dms": $mime="application/octet-stream"; break;
        case "lha": $mime="application/octet-stream"; break;
        case "lzh": $mime="application/octet-stream"; break;
        case "exe": $mime="application/octet-stream"; break;
        case "class": $mime="application/octet-stream"; break;
        case "dll": $mime="application/octet-stream"; break;
        case "oda": $mime="application/oda"; break;
        case "pdf": $mime="application/pdf"; break;
        case "ai":  $mime="application/postscript"; break;
        case "eps": $mime="application/postscript"; break;
        case "ps":  $mime="application/postscript"; break;
        case "xls": $mime="application/vnd.ms-excel"; break;
        case "ppt": $mime="application/vnd.ms-powerpoint"; break;
        case "wbxml": $mime="application/vnd.wap.wbxml"; break;
        case "wmlc": $mime="application/vnd.wap.wmlc"; break;
        case "wmlsc": $mime="application/vnd.wap.wmlscriptc"; break;
        case "vcd": $mime="application/x-cdlink"; break;
        case "pgn": $mime="application/x-chess-pgn"; break;
        case "csh": $mime="application/x-csh"; break;
        case "dvi": $mime="application/x-dvi"; break;
        case "spl": $mime="application/x-futuresplash"; break;
        case "gtar": $mime="application/x-gtar"; break;
        case "hdf": $mime="application/x-hdf"; break;
        case "js":  $mime="application/x-javascript"; break;
        case "nc":  $mime="application/x-netcdf"; break;
        case "cdf": $mime="application/x-netcdf"; break;
        case "swf": $mime="application/x-shockwave-flash"; break;
        case "tar": $mime="application/x-tar"; break;
        case "tcl": $mime="application/x-tcl"; break;
        case "tex": $mime="application/x-tex"; break;
        case "texinfo": $mime="application/x-texinfo"; break;
        case "texi": $mime="application/x-texinfo"; break;
        case "t":   $mime="application/x-troff"; break;
        case "tr":  $mime="application/x-troff"; break;
        case "roff": $mime="application/x-troff"; break;
        case "man": $mime="application/x-troff-man"; break;
        case "me":  $mime="application/x-troff-me"; break;
        case "ms":  $mime="application/x-troff-ms"; break;
        case "ustar": $mime="application/x-ustar"; break;
        case "src": $mime="application/x-wais-source"; break;
        case "zip": $mime="application/zip"; break;
        case "au":  $mime="audio/basic"; break;
        case "snd": $mime="audio/basic"; break;
        case "mid": $mime="audio/midi"; break;
        case "midi": $mime="audio/midi"; break;
        case "kar": $mime="audio/midi"; break;
        case "mpga": $mime="audio/mpeg"; break;
        case "mp2": $mime="audio/mpeg"; break;
        case "mp3": $mime="audio/mpeg"; break;
        case "aif": $mime="audio/x-aiff"; break;
        case "aiff": $mime="audio/x-aiff"; break;
        case "aifc": $mime="audio/x-aiff"; break;
        case "m3u": $mime="audio/x-mpegurl"; break;
        case "ram": $mime="audio/x-pn-realaudio"; break;
        case "rm":  $mime="audio/x-pn-realaudio"; break;
        case "rpm": $mime="audio/x-pn-realaudio-plugin"; break;
        case "ra":  $mime="audio/x-realaudio"; break;
        case "wav": $mime="audio/x-wav"; break;
        case "pdb": $mime="chemical/x-pdb"; break;
        case "xyz": $mime="chemical/x-xyz"; break;
        case "bmp": $mime="image/bmp"; break;
        case "gif": $mime="image/gif"; break;
        case "ief": $mime="image/ief"; break;
        case "jpeg": $mime="image/jpeg"; break;
        case "jpg": $mime="image/jpeg"; break;
        case "jpe": $mime="image/jpeg"; break;
        case "png": $mime="image/png"; break;
        case "tiff": $mime="image/tiff"; break;
        case "tif": $mime="image/tiff"; break;
        case "wbmp": $mime="image/vnd.wap.wbmp"; break;
        case "ras": $mime="image/x-cmu-raster"; break;
        case "pnm": $mime="image/x-portable-anymap"; break;
        case "pbm": $mime="image/x-portable-bitmap"; break;
        case "pgm": $mime="image/x-portable-graymap"; break;
        case "ppm": $mime="image/x-portable-pixmap"; break;
        case "rgb": $mime="image/x-rgb"; break;
        case "xbm": $mime="image/x-xbitmap"; break;
        case "xpm": $mime="image/x-xpixmap"; break;
        case "xwd": $mime="image/x-xwindowdump"; break;
        case "msh": $mime="model/mesh"; break;
        case "mesh": $mime="model/mesh"; break;
        case "silo": $mime="model/mesh"; break;
        case "wrl": $mime="model/vrml"; break;
        case "vrml": $mime="model/vrml"; break;
        case "css": $mime="text/css"; break;
        case "asc": $mime="text/plain"; break;
        case "txt": $mime="text/plain"; break;
        case "gpg": $mime="text/plain"; break;
        case "rtx": $mime="text/richtext"; break;
        case "rtf": $mime="text/rtf"; break;
        case "wml": $mime="text/vnd.wap.wml"; break;
        case "wmls": $mime="text/vnd.wap.wmlscript"; break;
        case "etx": $mime="text/x-setext"; break;
        case "xsl": $mime="text/xml"; break;
        case "flv": $mime="video/x-flv"; break;
        case "mpeg": $mime="video/mpeg"; break;
        case "mpg": $mime="video/mpeg"; break;
        case "mpe": $mime="video/mpeg"; break;
        case "qt":  $mime="video/quicktime"; break;
        case "mov": $mime="video/quicktime"; break;
        case "mxu": $mime="video/vnd.mpegurl"; break;
        case "avi": $mime="video/x-msvideo"; break;
        case "movie": $mime="video/x-sgi-movie"; break;
        case "asf": $mime="video/x-ms-asf"; break;
        case "asx": $mime="video/x-ms-asf"; break;
        case "wm":  $mime="video/x-ms-wm"; break;
        case "wmv": $mime="video/x-ms-wmv"; break;
        case "wvx": $mime="video/x-ms-wvx"; break;
        case "ice": $mime="x-conference/x-cooltalk"; break;
        case "rar": $mime="application/x-rar"; break;
        default:    $mime="application/octet-stream"; break; 
    }
    return $mime;
}


// frontend upload form anzeigen
function viewUpload($option, $task){
    global $database, $Itemid;
    
// nur anzeigen wenn mindestens eine cat existiert - sonst abbruch
    $database->SetQuery("SELECT COUNT(*) FROM #__jdownloads_cats WHERE published = 1");
    $cat_sum = $database->loadResult();
    if (!$cat_sum) {
       echo _JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST;
       
    } else {        
		jlist_HTML::viewUpload($option, $task);
    }
}

// show only one category
function showOneCategory($option,$cid) {
    global $mainframe, $database, $limit, $limitstart, $site_aktuell, $jlistConfig; 
        
    $catid = (int)mosGetParam($_REQUEST,'catid',0);
   
    // cat laden
	$database->setQuery("SELECT * FROM #__jdownloads_cats WHERE cat_id = '$catid' AND published = 1");
	$cat = $database->loadObjectList();
        
    if(empty($cat)){
		$cat[0] = new jlist_cats($database);
		$cat[0]->cat_id = 0;
		$cat[0]->cat_title = _JLIST_FRONTEND_NOCAT;
    } else {
    
            // subcats laden
            $access = checkAccess_JD();
            
            // reihenfolge wie in optionen gesetzt
            $cat_sort_field = 'ordering';
            $cat_sort = '';
            if ($jlistConfig['cats.order'] == 1) {
                $cat_sort_field = 'cat_title';
            }
            if ($jlistConfig['cats.order'] == 2) {
                $cat_sort_field = 'cat_title';
                $cat_sort = 'DESC';
            }    
            
            $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE parent_id = '$catid' AND published = 1 AND cat_access <= '$access' ORDER BY $cat_sort_field $cat_sort");
            $subs = $database->loadObjectList();
        
            if ($subs) {
                $sum_subcats = array();
                $sum_subfiles = array();
                
                foreach($subs as $sub){
                    // summe für subcats und files der einzel cat holen
                    $files = 0;
                    $subcats = 0;
                    $database->setQuery("SELECT COUNT(*) FROM #__jdownloads_files WHERE cat_id = '$sub->cat_id' AND published = 1");
                    $sum = $database->loadResult();
                    $files = $files + $sum;
                    infos($sub->cat_id, $subcats, $files, $access);
                    $sum_subfiles[] = $files;
                    $sum_subcats[] = $subcats;
                }         
            }    

        // anzahl files ermitteln
        $database->setQuery("SELECT COUNT(*) FROM #__jdownloads_files WHERE cat_id = '$catid' AND published = 1");
        $total = $database->loadResult();

        if ( $total <= $limit ) {
            $limitstart = 0;
        }
        $sum_pages = ceil($total / $limit);
    
        // manipulation ungültiger werte abblocken
        if ($site_aktuell > $sum_pages || $limitstart > $total || $limitstart < 0){
            $limitstart = 0;
            $site_aktuell = 1; 
        }         
        
        // load files in order by config 
        $files = array();
        $files = getSortedFiles($catid, $limitstart, $limit);        
    }
    $access = array();
    $p_access = array();
    // übergeordnete cat access rechte holen und verarbeiten
    if ($cat[0]->parent_id){
        $database->setQuery("SELECT cat_access FROM #__jdownloads_cats WHERE cat_id = ".$cat[0]->parent_id);
        $parent_access = $database->loadResult();
        $p_access[0] = (int)substr($parent_access, 0, 1);
        $p_access[1] = (int)substr($parent_access, 1, 1);
        $access[0] = (int)substr($cat[0]->cat_access, 0, 1);
        $access[1] = (int)substr($cat[0]->cat_access, 1, 1);
        if ($p_access[0] > $access[0]) $access[0] = $p_access[0];
        if ($p_access[1] > $access[1]) $access[1] = $p_access[1];
    } else {
        $parent_access = NULL;
        $access[0] = (int)substr($cat[0]->cat_access, 0, 1);
        $access[1] = (int)substr($cat[0]->cat_access, 1, 1);
    }

    jlist_HTML::showOneCategory($option, $cat, $subs, $files, $catid, $total, $sum_pages, $limit, $limitstart, $sum_subcats, $sum_subfiles, $site_aktuell, $access);
}                                                                                              

// einzelnen download mit detaillierten infos anzeigen
function showDownload($option,$cid){
   global $database;
   
   $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_id = '$cid'");
   $database->loadObject($file);
   
   $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE cat_id = '$file->cat_id'");
   $database->loadObject($cat);   

  // $access = checkAccess_JD();
   $access = array();
   $access[0] = (int)substr($cat->cat_access, 0, 1);
   $access[1] = (int)substr($cat->cat_access, 1, 1);
   
   jlist_HTML::showDownload($option, $file, $cat, $access);   
}  

// show only categories
function showCats($option,$cid){
	global $database, $jlistConfig, $limit, $limitstart, $site_aktuell; 
	//$user_session_id = $_COOKIE["jDOWNLOADS"];
    // access
    $access = checkAccess_JD();
    
    if(is_array($cid)) $cid = 0;
	$parent_id = (int)mosGetParam($_REQUEST,'parent_id',0);
	$where = '';
	if($cid){
		$where = ' AND cat_id='.$cid;
	}
	$database->SetQuery( "SELECT count(*)"
						. "\nFROM #__jdownloads_cats "
						. "\nWHERE published = 1 AND parent_id = 0 AND cat_access <= '$access'"
						);
  	$total = $database->loadResult();
    if ( $total <= $limit ) {
        $limitstart = 0;
    }
  	$sum_pages = ceil($total / $limit);
    
    // manipulation ungültiger werte abblocken
    if ($site_aktuell > $sum_pages || $limitstart > $total || $limitstart < 0){
       $limitstart = 0;
       $site_aktuell = 1; 
    } 
    
    // reihenfolge wie in optionen gesetzt
    $cat_sort_field = 'ordering';
    $cat_sort = '';
    if ($jlistConfig['cats.order'] == 1) {
        $cat_sort_field = 'cat_title';
    }
    if ($jlistConfig['cats.order'] == 2) {
        $cat_sort_field = 'cat_title';
        $cat_sort = 'DESC';
    }    

    $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE published = 1".$where." AND parent_id = 0 AND cat_access <= '$access' ORDER BY $cat_sort_field $cat_sort LIMIT $limitstart, $limit");
    $cats = $database->loadObjectList();

	if(empty($cats)){
		$cats[0] = new jlist_cats($database);
		$cats[0]->cat_id = 0;
		$cats[0]->cat_title = _JLIST_FRONTEND_NOCAT;
	} else {
        // gesamt download infos holen...
        $catlist = array();
        $query = "SELECT cat_id AS id, parent_id AS parent, cat_title AS name FROM #__jdownloads_cats WHERE published = 1 AND cat_access <= '$access'";
        $database->setQuery( $query );
        $catlist = $database->loadObjectList();
        
        // gesamtanzahl cats inkl. subcats 
        $sum_all_cats = count($catlist);
        // gesamtanzahl aller files
        $totalfiles = 0;
        foreach($catlist as $kat){
            $database->SetQuery( "SELECT count(*) FROM #__jdownloads_files WHERE published = 1 AND cat_id = '$kat->id'");
            $totalfiles =  $totalfiles + $database->loadResult();
        }
        $sub_cats = array();
        $sub_files = array();  
        
        // summe für subcats und files der einzel cat holen
        foreach($cats as $cat){
            $files = 0;
            $subcats = 0;
            $database->setQuery("SELECT COUNT(*) FROM #__jdownloads_files WHERE published = 1 AND cat_id = '$cat->cat_id'");
            $sum = $database->loadResult();
            $files = $files + $sum;
            infos($cat->cat_id, $subcats, $files, $access);
            $sub_files[] = $files;
            $sub_cats[] = $subcats;
        }    
    }    
 	jlist_HTML::showCats($option, $cats, $total, $sum_pages, $limit, $limitstart, $site_aktuell, $sub_cats, $sub_files, $sum_all_cats, $totalfiles);
}

function showSearchForm($option,$cid){

    jlist_HTML::showSearchForm($option);
}    
            
function showSearchResult($option,$cid){

    jlist_HTML::showSearchResult($option);
}

/**
 * send mail to admin if config set
 */
function sendMail($files){
    global $database, $jlistConfig, $mosConfig_mailer, $mosConfig_mailfrom, $mosConfig_fromname, $my; 
    
    // In Joomla config muss sendmail aktiviert sein
    // get filetitle and release for mail and summary
    $mail_files_arr = array();
    $mail_files = "<div><ul>";
    $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_id IN ($files) ");
    $mail_files_arr = $database->loadObjectList();
    $database->setQuery("SELECT * FROM #__jdownloads_license");
    $lic_arr = $database->loadObjectList();
    
    for ($i=0; $i<count($mail_files_arr); $i++) {
         $mail_files .= "<div><li>".$mail_files_arr[$i]->file_title.' '.$mail_files_arr[$i]->release.'&nbsp;&nbsp;&nbsp;'._JLIST_FE_DETAILS_LICENSE_TITLE.': '.$lic_arr[$mail_files_arr[$i]->license]->license_title.'&nbsp;&nbsp;&nbsp;'._JLIST_FE_DETAILS_FILESIZE_TITLE.': '.$mail_files_arr[$i]->size.'</li></div>';
    }
    $mail_files .= "</ul></div>";
 
    // get IP
    $ip = getenv ("REMOTE_ADDR");

    // date and time
    $timestamp = time();
    $date_time = strftime($jlistConfig['global.datetime'], $timestamp);

    $user_downloads = '<br />';

    // get user
    if ($my->id == 0) {
       $my_name = _JLIST_MAIL_DOWNLOADER_NAME_VISITOR;
       $my_group = _JLIST_MAIL_DOWNLOADER_GROUP;
    } else {
       $my_name = $my->username;
       $my_group = $my->usertype;
       $my_email = $my->email;
    }

    $empfaenger = $jlistConfig['send.mailto'];
    $betreff = $jlistConfig['send.mailto.betreff'];
    $html_format = true;

    $text = "";
    $text = $jlistConfig['send.mailto.template.download'];
    $text = str_replace('{file_list}', $mail_files, $text);
    $text = str_replace('{ip_address}', $ip, $text);
    $text = str_replace('{user_name}', $my_name, $text);
    $text = str_replace('{user_group}', $my_group, $text);
    $text = str_replace('{date_time}', $date_time, $text);
    $text = str_replace('{user_email}', $my_email, $text);
    if (!$jlistConfig['send.mailto.html']){
        $html_format = false;
        $text = strip_tags($text);
    }
    $success = mosMail ($mosConfig_mailfrom, $mosConfig_fromname, $empfaenger, $betreff, $text, $html_format);
    if (!$success) {
        if ($my->gid == 2) {
           echo _JLIST_MAILSEND_ERROR.'<br />';
        }
    }
}    

function sendMailUploads($name, $mail, $url_download, $filetitle, $description){
    global $database, $jlistConfig, $mosConfig_mailer, $mosConfig_mailfrom, $mosConfig_fromname; 
    
    // In Joomla config muss sendmail aktiviert sein
    // get IP
    $ip = getenv ("REMOTE_ADDR");

        // date and time
    $timestamp = time();
    $date_time = strftime($jlistConfig['global.datetime'], $timestamp);

    $empfaenger = $jlistConfig['send.mailto.upload'];
    $betreff = $jlistConfig['send.mailto.betreff.upload'];
    $html_format = true;

    $text = "";
    $text = $jlistConfig['send.mailto.template.upload'];
    $text = str_replace('{name}', $name, $text);
    $text = str_replace('{ip}', $ip, $text);
    $text = str_replace('{mail}', $mail, $text);
    $text = str_replace('{file_title}', $filetitle, $text);
    $text = str_replace('{file_name}', $url_download, $text);
    $text = str_replace('{date}', $date_time, $text);
    $text = str_replace('{description}', $description, $text);
    if (!$jlistConfig['send.mailto.html.upload']){
        $html_format = false;
        $text = strip_tags($text);
    }
        mosMail($mosConfig_mailfrom, $mosConfig_fromname, $empfaenger, $betreff, $text, $html_format);
}      

/**
 * Builds configuration variable
 * @return jlistConfig
 */
function buildjlistConfig(){
	global $database;

	$jlistConfig = array();
	$database->setQuery("SELECT id, setting_name, setting_value FROM #__jdownloads_config");
	$jlistConfigObj = $database->loadObjectList();
	if(!empty($jlistConfigObj)){
		foreach ($jlistConfigObj as $jlistConfigRow){
			$jlistConfig[$jlistConfigRow->setting_name] = $jlistConfigRow->setting_value;
		}
	}
	return $jlistConfig;
}

/**
 * Build random downloader User-ID
 */
function buildRandomID(){
   mt_srand((double)microtime()*1000000);
   mt_getrandmax();
   $random_id = mt_rand();
   return $random_id;
}

/* Alle Dateien in "tempzipfiles" löschen
/  die älter als der in config angegebenen zeit sind
*/

function deleteOldFile($dir){
	global $jlistConfig;
	
   $del_ok = false;
   $time = gettimeofday();
   foreach (glob($dir."*.*") as $datei) {
      if ( $time[sec] - date(filemtime($datei)) >= ($jlistConfig['tempfile.delete.time'] * 60) )
           $del_ok = unlink($datei);
      }
    return $del_ok;
}

// Get active templates text
// @return jlistTemplates

function getTemplates(){
	global $database;

    $templates_values = array();

    for ($i=1;$i<6;$i++) {
	   $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '$i' AND template_active = 1");
       $templates_values[$i] = $database->loadObjectList();
       // ist leer, kein layout aktiviert. versuchen standard zu aktivieren, sonst meldung
       if (empty($templates_values[$i])){
           $database->setQuery("SELECT id FROM #__jdownloads_templates WHERE template_typ = '$i' AND locked = 1");
           $id = $database->loadResultArray(0);
           $database->setQuery("UPDATE #__jdownloads_templates SET template_active = 1 WHERE id = $id[0]");
           $result = $database->query();
           $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '$i' AND template_active = 1");
           $templates_values[$i] = $database->loadObjectList();
       }    
    }
    return $templates_values;
}

// get files in sortorder (see config)
function getSortedFiles($catid, $limitstart, $limit) {
    global $database, $jlistConfig;

    switch ($jlistConfig['files.order']) {
    
    case '0':
        $database->setQuery("SELECT * FROM #__jdownloads_files WHERE cat_id = '$catid' AND published = 1 ORDER BY ordering LIMIT $limitstart, $limit");
        break;

    case '1':
        $database->setQuery("SELECT a.* FROM #__jdownloads_files AS a WHERE a.cat_id = '$catid' AND a.published = 1 ORDER BY a.date_added DESC LIMIT $limitstart, $limit");
        break;

    case '2':
        $database->setQuery("SELECT a.* FROM #__jdownloads_files AS a WHERE a.cat_id = '$catid' AND a.published = 1 ORDER BY a.date_added ASC LIMIT $limitstart, $limit");
        break;

    case '3':
        $database->setQuery("SELECT a.* FROM #__jdownloads_files AS a WHERE a.cat_id = '$catid' AND a.published = 1 ORDER BY a.file_title ASC LIMIT $limitstart, $limit");
        break;

    case '4':
        $database->setQuery("SELECT a.* FROM #__jdownloads_files AS a WHERE a.cat_id = '$catid' AND a.published = 1 ORDER BY a.file_title DESC LIMIT $limitstart, $limit");
        break;
    }
    $files = $database->loadObjectList();
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

// build comp header
function makeHeader($header, $compo_text, $is_showcats, $is_one_cat, $sum_subs, $is_detail, $is_search, $is_upload, $is_summary,  $is_finish, $sum_pages, $limit, $total, $limitstart, $site_aktuell) {
	global $jlistConfig, $Itemid, $database, $my;
	
    // Anzeige 1 von 0 verhindern
    if ($sum_pages == 0){
        $sum_pages = 1;
    }    
    
	// compo header
    $header = '';
    $header = '<div class="componentheading">'.$jlistConfig['jd.header.title'].'</div>';
    
	// components description
	if ($compo_text && $jlistConfig['downloads.titletext'] != '') {
		$header .= '<div style="padding:5px;">'.$jlistConfig['downloads.titletext'].'</div>';
	}	

    // home link
    $header .= '<table class="jd_top_navi"><tr><td align="center"><a href="'.sefRelToAbs('index.php?option=com_jdownloads&amp;Itemid='.$Itemid).'">'.'<img src="components/com_jdownloads/images/home_fe.png" width="32" height="32" border="0" alt="" /></a> <a href="'.sefRelToAbs('index.php?option=com_jdownloads&amp;Itemid='.$Itemid).'">'._JLIST_FRONTEND_HOME_LINKTEXT.'</a></td>';

    // insert search link
    $header .= '<td align="center"><a href="'.sefRelToAbs('index.php?option=com_jdownloads&amp;Itemid='.$Itemid.'&amp;task=search').'">'.'<img src="components/com_jdownloads/images/search.png" width="32" height="32" border="0" alt="" /></a> <a href="'.sefRelToAbs('index.php?option=com_jdownloads&amp;Itemid='.$Itemid.'&amp;task=search').'">'._JLIST_FRONTEND_SEARCH_LINKTEXT.'</a></td>';

    // insert frontend upload link if activ
    if ($jlistConfig['frontend.upload.active']) {
        $header .= '<td align="center"><a href="'.sefRelToAbs('index.php?option=com_jdownloads&amp;Itemid='.$Itemid.'&amp;task=view.upload').'">'.'<img src="components/com_jdownloads/images/upload.png" width="32" height="32" border="0" alt="" /></a> <a href="'.sefRelToAbs('index.php?option=com_jdownloads&amp;Itemid='.$Itemid.'&amp;task=view.upload').'">'._JLIST_FRONTEND_UPLOAD_LINKTEXT.'</a></td>';
    }
    
    // listbox aller cats erzeugen wenn aktiviert in config
    // bei auswahl einer cat per js cat aufrufen
    if ($jlistConfig['show.header.catlist']){
        $catlistid = intval(mosGetParam($_REQUEST, 'catid', 0));
		$access = checkAccess_JD();
        $src_list = array();
        // reihenfolge wie in optionen gesetzt
        $cat_sort_field = 'ordering';
        $cat_sort = '';
        if ($jlistConfig['cats.order'] == 1) {
            $cat_sort_field = 'cat_title';
        }
        if ($jlistConfig['cats.order'] == 2) {
            $cat_sort_field = 'cat_title';
            $cat_sort = 'DESC';
        }   

		$query = "SELECT cat_id AS id, parent_id AS parent, cat_title AS name FROM #__jdownloads_cats WHERE published = 1 AND cat_access <= '$access' ORDER BY $cat_sort_field $cat_sort";
		$database->setQuery( $query );
		$src_list = $database->loadObjectList();
		$preload = array();
		$preload[] = mosHTML::makeOption( '0', _JLIST_FRONTEND_HEADER_CATLIST_TITLE );
		$selected = array();
		$selected[] = mosHTML::makeOption( $catlistid );
    	$cat_listbox= mosHTML::treeSelectList( $src_list, 0, $preload, 'cat_list',
                 'class="inputbox" size="1" id="cat_list"  onchange="gocat(cat_list,'.$Itemid.')"', 'value', 'text', $selected );
		
		$header .= '<td valign="bottom"><form name="go_cat" id="go_cat" action="" method="post">'.$cat_listbox.'</form></td></tr></table>';         
    }
		
    // Subheader !!
        
    // inofficial feature - hide subheader
    if ($jlistConfig['view.subheader']) {
        if ($is_showcats) {
            $prev_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=&amp;site=".($site_aktuell-1)."&amp;start=".($limitstart-$limit)).'">'._JLIST_FRONTEND_PREV_SITE_BUTTON.'</a>';
            $prev_inactive = '';
            $next_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=&amp;site=".($site_aktuell+1)."&amp;start=".($limitstart+$limit)).'">'._JLIST_FRONTEND_NEXT_SITE_BUTTON.'</a>';
            $next_inactive = '';
			
           if ($site_aktuell == 1 && $site_aktuell + 1 > $sum_pages ){
               // keine links
               $nav1 = $prev_inactive;
               $nav2 = $next_inactive;
           } else {
                if ($site_aktuell == 1 && $site_aktuell + 1 <= $sum_pages) {
                    // nur link zur nächsten site
                    $nav1 = $prev_inactive;
                    $nav2 = $next_active;
                } else {
                    if ($site_aktuell > 1 && $site_aktuell + 1 <= $sum_pages ){
                        // link zur nächsten und vorigen site
                        $nav1 = $prev_active;
                        $nav2 = $next_active;
                    } else {
                        if ($site_aktuell > 1 && $site_aktuell == $sum_pages ){
                            // nur link nur zur vorigen site
                            $nav1 = $prev_active;
                            $nav2 = $next_inactive;
                        } 
                    }
               }
		   }			
           if ($jlistConfig['option.navigate.top']){
                $header .= '<table class="jd_cat_subheader" width="100%">
                        <tr><td colspan="3"></td></tr>
                        <tr><td width="70%" valign="top"><b>'._JLIST_FRONTEND_SUBTITLE_OVER_CATLIST.'</b></td>
                        <td width="30%" valign="top" colspan="2"><div style="text-align:right">'.$nav1.' '._JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT.' '.$site_aktuell.' '._JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT.' '.$sum_pages.' '.$nav2.'</div></td></tr>
                        <tr><td width="70%" valign="top" align="left" valign="top">'._JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE.': '.$total.'</td>';
           } else {
                $header .= '<table class="jd_cat_subheader" width="100%">
                        <tr><td colspan="3"></td></tr>
                        <tr><td width="70%" valign="top"><b>'._JLIST_FRONTEND_SUBTITLE_OVER_CATLIST.'</b></td>
                        <td width="30%" valign="top" colspan="2"><div style="text-align:right"> </div></td></tr>
                        <tr><td width="70%" valign="top" align="left" valign="top">'._JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE.': '.$total.'</td>';
           }              
        }
        
        if ($is_one_cat) {
            $catid = intval(mosGetParam($_REQUEST, 'catid', 0));
            $database->setQuery("SELECT cat_title FROM #__jdownloads_cats WHERE cat_id = '$catid'");
            $title = $database->loadResult();
            
            $prev_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=viewcategory&amp;catid=".$catid."&amp;site=".($site_aktuell-1)."&amp;start=".($limitstart-$limit)).'">'._JLIST_FRONTEND_PREV_SITE_BUTTON.'</a>';
            $prev_inactive = '';
            $next_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=viewcategory&amp;catid=".$catid."&amp;site=".($site_aktuell+1)."&amp;start=".($limitstart+$limit)).'">'._JLIST_FRONTEND_NEXT_SITE_BUTTON.'</a>';
            $next_inactive = '';

            // summe subcats nur anzeigen wenn vorhanden
            if ($sum_subs == 0){
                $einf ='';
            } else {
             $einf = _JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE.': '.$sum_subs;
            }
           
           if ($site_aktuell == 1 && $site_aktuell + 1 > $sum_pages ){
               // keine links
               $nav1 = $prev_inactive;
               $nav2 = $next_inactive;
           } else {
                if ($site_aktuell == 1 && $site_aktuell + 1 <= $sum_pages) {
                // nur link zur nächsten site
                $nav1 = $prev_inactive;
                $nav2 = $next_active;
           } else {
                if ($site_aktuell > 1 && $site_aktuell + 1 <= $sum_pages ){
                // link zur nächsten und vorigen site
                $nav1 = $prev_active;
                $nav2 = $next_active;
                } else {
                   if ($site_aktuell > 1 && $site_aktuell == $sum_pages ){
                      // nur link nur zur vorigen site
                      $nav1 = $prev_active;
                      $nav2 = $next_inactive;
                   } 
                }
           }
           }
           if ($jlistConfig['option.navigate.top']){
                $header .= '<table class="jd_cat_subheader" width="100%"><tr><td colspan="3"></td></tr>
                     <tr><td width="70%" valign="top"><b>'._JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT.': '.$title.'</b></td>
                     <td width="30%" valign="top" colspan="2"><div style="text-align:right">'.$nav1.' '._JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT.' '.$site_aktuell.' '._JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT.' '.$sum_pages.' '.$nav2.'</div></td></tr>
                     <tr><td width="70%" valign="top" align="left" valign="top">'.$einf.'</td>';
           } else {
                $header .= '<table class="jd_cat_subheader" width="100%"><tr><td colspan="3"></td></tr>
                     <tr><td width="70%" valign="top"><b>'._JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT.': '.$title.'</b></td>
                     <td width="30%" valign="top" colspan="2"><div style="text-align:right"> </div></td></tr>
                     <tr><td width="70%" valign="top" align="left" valign="top">'.$einf.'</td>';
           }          
        }    
    }    
    
    if ($is_detail) {
        $header .= '<table class="jd_cat_subheader" width="100%"><tr><td><b> '._JLIST_FRONTEND_SUBTITLE_OVER_DETAIL.' </b></td><td width="30%" align="right"> </td></tr></table>'; 
    }                

    if ($is_search) {
        $header .= '<table class="jd_cat_subheader" width="100%"><tr><td><b> '._JLIST_FRONTEND_SEARCH_LINKTEXT.' </b></td><td width="30%" align="right"> </td></tr></table>'; 
    }
        
    if ($is_upload) {
        $header .= '<table class="jd_cat_subheader" width="100%"><tr><td><b> '._JLIST_FRONTEND_UPLOAD_PAGE_TITLE.' </b></td><td width="30%" align="right"> </td></tr></table>'; 
    }        
        
    if ($is_summary) {
        $header .= '<table class="jd_cat_subheader" width="100%"><tr><td><b> '._JLIST_FRONTEND_HEADER_SUMMARY_TITLE.' </b></td><td width="30%" align="right"> </td></tr></table>'; 
    }         
        
    if ($is_finish) {
        $header .= '<table class="jd_cat_subheader" width="100%"><tr><td> '._JLIST_FRONTEND_HEADER_FINISH_TITLE.' </td><td width="30%" align="right"> </td></tr></table>'; 
    }
        
    if ( !$jlistConfig['offline'] ) {
            return $header;
        } else {
            if ($my->gid == 2) {
                return $header;     
            } else {
                $header = '<div class="componentheading">'.$jlistConfig['jd.header.title'].'</div>';
                // components description
                if ($compo_text && $jlistConfig['downloads.titletext'] != '') {
                    $header .= '<div style="padding:5px;">'.$jlistConfig['downloads.titletext'].'</div>';
                }
                return $header;    
            }
        }             
}

// build comp footer
function makeFooter($make_back_button, $is_showcats, $is_one_cat, $sum_pages, $limit, $limitstart, $site_aktuell) {
    global $database, $Itemid, $jlistConfig;
	
    $footer = '';
    if ($sum_pages == 0){
        $sum_pages = 1;
    }
    
    // view pagnavigation bottom
    if ($jlistConfig['option.navigate.bottom']){ 
       if ($is_showcats) {
           $prev_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=&amp;site=".($site_aktuell-1)."&amp;start=".($limitstart-$limit)).'">'._JLIST_FRONTEND_PREV_SITE_BUTTON.'</a>';
           $prev_inactive = ''; //_JLIST_FRONTEND_PREV_SITE_BUTTON;
           $next_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=&amp;site=".($site_aktuell+1)."&amp;start=".($limitstart+$limit)).'">'._JLIST_FRONTEND_NEXT_SITE_BUTTON.'</a>';
           $next_inactive = ''; //_JLIST_FRONTEND_NEXT_SITE_BUTTON;
       }
       if ($is_one_cat) {
            $catid = intval(mosGetParam($_REQUEST, 'catid', 0));
            $database->setQuery("SELECT cat_title FROM #__jdownloads_cats WHERE cat_id = '$catid'");
            $title = $database->loadResult();
            $prev_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=viewcategory&amp;catid=".$catid."&amp;site=".($site_aktuell-1)."&amp;start=".($limitstart-$limit)).'">'._JLIST_FRONTEND_PREV_SITE_BUTTON.'</a>';
            $prev_inactive = ''; 
            $next_active = '<a href="'.sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=viewcategory&amp;catid=".$catid."&amp;site=".($site_aktuell+1)."&amp;start=".($limitstart+$limit)).'">'._JLIST_FRONTEND_NEXT_SITE_BUTTON.'</a>';
            $next_inactive = ''; 
       }

       if ($site_aktuell == 1 && $site_aktuell + 1 > $sum_pages ){
          // keine links
          $nav1 = $prev_inactive;
          $nav2 = $next_inactive;
       } else {
          if ($site_aktuell == 1 && $site_aktuell + 1 <= $sum_pages) {
              // nur link zur nächsten site
              $nav1 = $prev_inactive;
              $nav2 = $next_active;
          } else {
              if ($site_aktuell > 1 && $site_aktuell + 1 <= $sum_pages ){
                  // link zur nächsten und vorigen site
                  $nav1 = $prev_active;
                  $nav2 = $next_active;
              } else {
                  if ($site_aktuell > 1 && $site_aktuell == $sum_pages ){
                     // nur link nur zur vorigen site
                      $nav1 = $prev_active;
                      $nav2 = $next_inactive;
                  } 
              }
          }
       }   
           
       if ($is_showcats || $is_one_cat){
                $footer .= '<table class="jd_footer" align="right" width="100%">              
                            <tr><td width="70%" valign="top"></td>
                            <td width="30%" valign="top"><div style="text-align:right">'.$nav1.' '._JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT.' '.$site_aktuell.' '._JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT.' '.$sum_pages.' '.$nav2.'</div></td></tr></table>';         
       }
    }  
    // back button
	if ($make_back_button){
        $footer .= '<div style="text-align:left" class="back_button"><a href="javascript:history.go(-1)">'._JLIST_FRONTEND_BACK_BUTTON.'</a></div>'; 
        $footer .= '<div style="text-align:center" class="jd_footer"><a href="http://www.joomlaaddons.de" target="_blank" title="www.joomlaAddons.de">'._JLIST_PRODUCT_FOOTER.'</a><br />'._JLIST_VERSION_FOOTER.'</div>';
	} else {
        $footer .= '<div style="text-align:center" class="jd_footer"><a href="http://www.joomlaaddons.de" target="_blank" title="www.joomlaAddons.de">'._JLIST_PRODUCT_FOOTER.'</a><br />'._JLIST_VERSION_FOOTER.'</div>';
    }    
	return $footer;
}

function checkAccess_JD(){
    global $my;
    
     $access = '';
    // JACL check
    if (isset($my->jaclplus)){
        if ($my->jaclplus == '0') $access = '01';
        if ($my->jaclplus == '0,1') $access = '11';
        if ($my->jaclplus == '0,1,2') $access = '22';
    } else {    
        if ($my->gid == 0) $access = '01';
        if ($my->gid == 1) $access = '11';
        if ($my->gid == 2) $access = '22';
    }    
    return $access;
}

function DatumsDifferenz_JD($Start,$Ende) {
    $Tag1=(int) substr($Start, 8, 2);
    $Monat1=(int) substr($Start, 5, 2);
    $Jahr1=(int) substr($Start, 0, 4);
    
    $Tag2=(int) substr($Ende, 8, 2);
    $Monat2=(int) substr($Ende, 5, 2);
    $Jahr2=(int) substr($Ende, 0, 4);

    if (checkdate($Monat1, $Tag1, $Jahr1)and checkdate($Monat2, $Tag2, $Jahr2)){
        $Datum1=mktime(0,0,0,$Monat1, $Tag1, $Jahr1);
        $Datum2=mktime(0,0,0,$Monat2, $Tag2, $Jahr2);

        $Diff=(Integer) (($Datum1-$Datum2)/3600/24);
        return $Diff;
    } else {
        return -1;
    }
} 

function infos($parent, &$subcats, &$files, $access) {
 global $database;
    // subcats holen
    $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE parent_id = '$parent' AND published = 1 AND cat_access <= '$access'");
    $rows = $database->loadObjectList();
    if ($database->getErrorNum()) {
        echo $database->stderr();
        return false;
    }
    if ($rows){
        foreach ($rows as $v) {
            $database->setQuery("SELECT COUNT(*) FROM #__jdownloads_files WHERE cat_id = '$v->cat_id' AND published = 1");
            $sum = $database->loadResult();
            $files = $files + $sum;
            $subcats++;
            // nach nächster ebene suchen
            infos($v->cat_id, $subcats, $files, $access);
        }
    }
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
    return $size;    
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

?>