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
global $mosConfig_absolute_path, $mosConfig_lang, $_VERSION;

$utf8_lang = '';

if ( $_VERSION->RELEASE < '1.5' ) {
    $utf8_lang = '';
} else {
    $utf8_lang = '.utf8';
}

// get language file for default layouts
if (file_exists($mosConfig_absolute_path . '/components/com_jdownloads/languages/'.$mosConfig_lang.$utf8_lang.'.php')) {
	include($mosConfig_absolute_path . '/components/com_jdownloads/languages/'.$mosConfig_lang.$utf8_lang.'.php');
    } else {
	include($mosConfig_absolute_path . '/components/com_jdownloads/languages/english'.$utf8_lang.'php');
    }


function com_install() {
  global $database, $mosConfig_absolute_path, $_VERSION;
  
  //*********************************************
  // JD VERSION:
     $jd_version = '1.4';
     $jd_version_state = 'RC';
     $jd_version_svn = '601'; // added in  1.4
  //*********************************************
    
    // create backend menu miltilanguage
    // Only set up new icon for admin menu
    // id holen
    $database->setQuery("SELECT id from #__components WHERE name = 'jDownloads'");
    $m_id = $database->loadResult();
    
    if (!$m_id){
        if ( $_VERSION->RELEASE < '1.5' ) {
           $database->setQuery("INSERT INTO #__components VALUES (NULL, 'jDownloads', 'option=com_jdownloads', 0, 0, 'option=com_jdownloads', 'jDownloads', 'com_jdownloads', 0, '../administrator/components/com_jdownloads/images/m_jdownloads.gif', 0, '')");
           $database->query();
        } else {
           $database->setQuery("INSERT INTO #__components VALUES (NULL, 'jDownloads', 'option=com_jdownloads', 0, 0, 'option=com_jdownloads', 'jDownloads', 'com_jdownloads', 0, '../administrator/components/com_jdownloads/images/m_jdownloads.gif', 0, '', 1)");
           $database->query();
        }    
        // id holen
        $database->setQuery("SELECT id from #__components WHERE name = 'jDownloads'");
        $m_id = $database->loadResult();
    } else {   
        // nur pic hinzufügen
        $database->setQuery("UPDATE #__components SET link = 'option=com_jdownloads' WHERE name = 'jDownloads'");
        $database->query();
        
        $database->setQuery("UPDATE #__components SET admin_menu_img='../administrator/components/com_jdownloads/images/m_jdownloads.gif' WHERE name = 'jDownloads'");
        $database->query();
    }
    
    if ( $_VERSION->RELEASE < '1.5' ) {
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_MAIN."', '', 0, $m_id, 'option=com_jdownloads', '"._JLIST_BACKEND_CPANEL_MAIN."', 'com_jdownloads', 0, '../administrator/components/com_jdownloads/images/m_jdownloads.gif', 0, '')");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_FILES."', '', 0, $m_id, 'option=com_jdownloads&task=files.list', '"._JLIST_BACKEND_CPANEL_FILES."', 'com_jdownloads', 1, '../administrator/components/com_jdownloads/images/m_downloads.gif', 0, '')");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_CATEGORIES."', '', 0, $m_id, 'option=com_jdownloads&task=categories.list', '"._JLIST_BACKEND_CPANEL_CATEGORIES."', 'com_jdownloads', 2, '../administrator/components/com_jdownloads/images/m_categories.gif', 0, '')");
        $database->query();
        
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_LICENSE."', '', 0, $m_id, 'option=com_jdownloads&task=license.list', '"._JLIST_BACKEND_CPANEL_LICENSE."', 'com_jdownloads', 3, '../administrator/components/com_jdownloads/images/m_licenses.gif', 0, '')");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_TEMPLATES."', '', 0, $m_id, 'option=com_jdownloads&task=templates.menu', '"._JLIST_BACKEND_CPANEL_TEMPLATES."', 'com_jdownloads', 4, '../administrator/components/com_jdownloads/images/m_templates.gif', 0, '')");
        $database->query();
            
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_SETTINGS."', '', 0, $m_id, 'option=com_jdownloads&task=config.show', '"._JLIST_BACKEND_CPANEL_SETTINGS."', 'com_jdownloads', 5, '../administrator/components/com_jdownloads/images/m_config.gif', 0, '')");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_BACKUP."', '', 0, $m_id, 'option=com_jdownloads&task=backup', '"._JLIST_BACKEND_CPANEL_BACKUP."', 'com_jdownloads', 6, '../administrator/components/com_jdownloads/images/m_backup.gif', 0, '')");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_RESTORE."', '', 0, $m_id, 'option=com_jdownloads&task=restore', '"._JLIST_BACKEND_CPANEL_RESTORE."', 'com_jdownloads', 7, '../administrator/components/com_jdownloads/images/m_restore.gif', 0, '')");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_INFO."', '', 0, $m_id, 'option=com_jdownloads&task=info', '"._JLIST_BACKEND_CPANEL_INFO."', 'com_jdownloads', 8, '../administrator/components/com_jdownloads/images/m_info.gif', 0, '')");
        $database->query();

    } else {    

        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_MAIN."', '', 0, $m_id, 'option=com_jdownloads', '"._JLIST_BACKEND_CPANEL_MAIN."', 'com_jdownloads', 0, '../administrator/components/com_jdownloads/images/m_jdownloads.gif', 0, '', 1)");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_FILES."', '', 0, $m_id, 'option=com_jdownloads&task=files.list', '"._JLIST_BACKEND_CPANEL_FILES."', 'com_jdownloads', 1, '../administrator/components/com_jdownloads/images/m_downloads.gif', 0, '', 1)");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_CATEGORIES."', '', 0, $m_id, 'option=com_jdownloads&task=categories.list', '"._JLIST_BACKEND_CPANEL_CATEGORIES."', 'com_jdownloads', 2, '../administrator/components/com_jdownloads/images/m_categories.gif', 0, '', 1)");
        $database->query();
        
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_LICENSE."', '', 0, $m_id, 'option=com_jdownloads&task=license.list', '"._JLIST_BACKEND_CPANEL_LICENSE."', 'com_jdownloads', 3, '../administrator/components/com_jdownloads/images/m_licenses.gif', 0, '', 1)");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_TEMPLATES."', '', 0, $m_id, 'option=com_jdownloads&task=templates.menu', '"._JLIST_BACKEND_CPANEL_TEMPLATES."', 'com_jdownloads', 4, '../administrator/components/com_jdownloads/images/m_templates.gif', 0, '', 1)");
        $database->query();
            
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_SETTINGS."', '', 0, $m_id, 'option=com_jdownloads&task=config.show', '"._JLIST_BACKEND_CPANEL_SETTINGS."', 'com_jdownloads', 5, '../administrator/components/com_jdownloads/images/m_config.gif', 0, '', 1)");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_BACKUP."', '', 0, $m_id, 'option=com_jdownloads&task=backup', '"._JLIST_BACKEND_CPANEL_BACKUP."', 'com_jdownloads', 6, '../administrator/components/com_jdownloads/images/m_backup.gif', 0, '', 1)");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_RESTORE."', '', 0, $m_id, 'option=com_jdownloads&task=restore', '"._JLIST_BACKEND_CPANEL_RESTORE."', 'com_jdownloads', 7, '../administrator/components/com_jdownloads/images/m_restore.gif', 0, '', 1)");
        $database->query();
    
        $database->setQuery("INSERT INTO #__components VALUES (NULL, '"._JLIST_BACKEND_CPANEL_INFO."', '', 0, $m_id, 'option=com_jdownloads&task=info', '"._JLIST_BACKEND_CPANEL_INFO."', 'com_jdownloads', 8, '../administrator/components/com_jdownloads/images/m_info.gif', 0, '', 1)");
        $database->query();
    }
        
  ?>

  <center>
  <table width="100%" border="0">
   <tr>
      <td align="center">
        <img src="components/com_jdownloads/images/jdownloads.jpg" border="0" alt="jDownloads Logo" /><br /><?php echo  'Version '.$jd_version.' '.$jd_version_state; ?>
      </td>
   </tr>   
   <tr>   
	  <td background="E0E0E0" style="border:1px solid #999;">
        <code><b><?php echo _JLIST_INSTALL_0; ?></b><br />
        <?php


//********************************************************************************************
// move all images dirs to joomla images dir when not exists
// 
// *******************************************************************************************
    $source_dir   = array();
    $message = '';
    $ok = 0;
    $image_root   = "$mosConfig_absolute_path/images/jdownloads/";
    $source_root  = "$mosConfig_absolute_path/components/com_jdownloads/";
    $source_dir[] = 'catimages/';
    $source_dir[] = 'fileimages/';
    $source_dir[] = 'miniimages/';
    $source_dir[] = 'hotimages/';
    $source_dir[] = 'newimages/';
    $source_dir[] = 'updimages/';
    $source_dir[] = 'downloadimages/';
    $source_dir[] = 'headerimages/';    
    $source_dir[] = 'screenshots/'; 
    
    if (!is_dir($image_root)){
       @mkdir($image_root, 0755);
    }       
    $error = false;
    foreach($source_dir as $source){
       $sourcedir = $source_root.$source;
       if (@is_dir($sourcedir)){ 
            $destdir = $image_root.$source;
            if (!is_dir($destdir)){
                $res = moveDirs($sourcedir, $destdir, true, $message);
                if ($message != '') {
                    // Fehler
                    echo "<font color='red'>--> "._JLIST_INSTALL_MOVE_IMAGES_ERROR.' '.$message.'</font><br />';
                    $error = true;
                    $message = '';
                } else {
                    // ok
                    $ok ++;
                }
            }    
       }     
   }
   if ($ok){
       echo "<font color='green'>--> ".$ok.' '._JLIST_INSTALL_MOVE_IMAGES_OK.'</font><br />';     
   } else {
       if (!$error) {
           echo "<font color='green'>--> ".' '._JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST.'</font><br />';     
       } 
   }
   
   // dirs löschen falls nicht verschoben wurde, da schon da
   foreach($source_dir as $source){ 
        if (is_dir($source_root.$source)){
           delete_dir_and_allfiles($source_root.$source);   
        }    
   }    
        
//********************************************************************************************
// insert default config data - if not exist
// 
// *******************************************************************************************

      $sum_configs = 0;
      $root_dir = '';
      $old_version = '';
      
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'files.uploaddir'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('files.uploaddir', 'downloads')");
            $database->query();
            $sum_configs++;
        }  else {
            $database->setQuery("SELECT setting_value FROM #__jdownloads_config WHERE setting_name = 'files.uploaddir'");
            $dir = $database->loadResult();
            $root_dir = $mosConfig_absolute_path.'/'.$dir.'/';   
        }    

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'global.datetime'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('global.datetime', '"._JLIST_INSTALL_DEFAULT_DATE_FORMAT."')");
            $database->query();
            $sum_configs++;
        } else {
            $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '"._JLIST_INSTALL_DEFAULT_DATE_FORMAT."' WHERE setting_name = 'global.datetime'");
            $database->query();
            $jlistConfig['global.datetime'] = _JLIST_INSTALL_DEFAULT_DATE_FORMAT;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'files.autodetect'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('files.autodetect', '1')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto', '"._JLIST_SETTINGS_INSTALL_5."')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.option'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.option', '0')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.betreff'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.betreff', '"._JLIST_SETTINGS_INSTALL_3."')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.from'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.from', '"._JLIST_SETTINGS_INSTALL_4."')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.fromname'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.fromname', 'JDownloads')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.html'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.html', '1')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'zipfile.prefix'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('zipfile.prefix', 'downloads_')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'files.order'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('files.order', '0')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'checkbox.top.text'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('checkbox.top.text', '"._JLIST_SETTINGS_INSTALL_1."')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'downloads.titletext'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('downloads.titletext', '')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'layouts.editor'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('layouts.editor', '0')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'licenses.editor'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('licenses.editor', '1')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'files.editor'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('files.editor', '1')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'categories.editor'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('categories.editor', '1')");
            $database->query();
            $sum_configs++;
        }

   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'info.icons.size'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('info.icons.size', '20')");
            $database->query();
            $sum_configs++;
        }
        
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'cat.pic.size'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('cat.pic.size', '48')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'file.pic.size'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('file.pic.size', '32')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'offline'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('offline', '0')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'offline.text'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('offline.text', '"._JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT."')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'system.list'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('system.list', '"._JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST."')");
            $database->query();
            $sum_configs++;
        }
        
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'language.list'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('language.list', '"._JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST."')");
            $database->query();
            $sum_configs++;
        }
        // special option for viewing filetypes in new browser window
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'file.types.view'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('file.types.view', 'html,htm,txt,pdf,doc,jpg,jpeg,png,gif')");
            $database->query();
            $sum_configs++;
        }

        // new 1.2 beta
        // option for automatic watch download directories
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'directories.autodetect'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('directories.autodetect', '1')");
            $database->query();
            $sum_configs++;
        }

        // option for mail cloaking
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'mail.cloaking'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('mail.cloaking', '1')");
            $database->query();
            $sum_configs++;
        }

        // option for tempfiles delete time
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'tempfile.delete.time'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('tempfile.delete.time', '20')");
            $database->query();
            $sum_configs++;
        }

        // option for frontend upload
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'frontend.upload.active'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('frontend.upload.active', '1')");
            $database->query();
            $sum_configs++;
        }        
		
		// option for frontend uploaded filetypes
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'allowed.upload.file.types'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('allowed.upload.file.types', 'zip,rar')");
            $database->query();
            $sum_configs++;
        }
        
		// option for frontend uploaded filesize
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'allowed.upload.file.size'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('allowed.upload.file.size', '2048')");
            $database->query();
            $sum_configs++;
        }        
        
        // option for frontend uploaded - permissions
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'upload.access'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('upload.access', '0')");
            $database->query();
            $sum_configs++;
        }        

        // option for frontend view: files per side
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'files.per.side'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('files.per.side', '10')");
            $database->query();
            $sum_configs++;
        }        

 		// option for frontend upload form: text
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'upload.form.text'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('upload.form.text','"._JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT."')");      
            $database->query();
            $sum_configs++;
        }        
        
 		// option für titel von jD im Frontend header
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'jd.header.title'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('jd.header.title', 'Downloads')");
            $database->query();
            $sum_configs++;
        }    
		
 		// option für anzahl zeilen in BE listen
   		$database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'files.per.side.be'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('files.per.side.be', '15')");
            $database->query();
            $sum_configs++;
        }        		    
        
        // feld für letzte checkFiles log zu speichern (intern)
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'last.log.message'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('last.log.message', '')");
            $database->query();
            $sum_configs++;
        }  
        
        // feld für letzte checkAfterRestore log zu speichern (intern)
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'last.restore.log'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('last.restore.log', '')");
            $database->query();
            $sum_configs++;
        }                       

        // feld für header catlist anzeige - option
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'show.header.catlist'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('show.header.catlist', '1')");
            $database->query();
            $sum_configs++;
        }        
        
        // option für download ordner schutz
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'anti.leech'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('anti.leech', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // option für direct download bei {url_download} platzhalter - keine zusammenfassung anzeigen
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'direct.download'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('direct.download', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // option for NEW time - wie lange gilt ein file als neu (tage)
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'days.is.file.new'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('days.is.file.new', '15')");
            $database->query();
            $sum_configs++;
        }
        
        // option for NEW time - pic dateiname für anzeige
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'picname.is.file.new'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('picname.is.file.new', 'newfile.gif')");
            $database->query();
            $sum_configs++;
        }
        
        // option for HOT - ab wievielen downloads gilt ein file als hot (beliebt)
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'loads.is.file.hot'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('loads.is.file.hot', '100')");
            $database->query();
            $sum_configs++;
        }
        
        // option for HOT - pic dateiname für anzeige
           $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'picname.is.file.hot'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('picname.is.file.hot', 'hotfile.gif')");
            $database->query();
            $sum_configs++;
        }
        
        // option for detail download seite - pic dateiname für download pic
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'download.pic.details'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('download.pic.details', 'download_blue.png')");
            $database->query();
            $sum_configs++;
        }
        
        // option for auto publish upload files über frontend
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'upload.auto.publish'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('upload.auto.publish', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // new in 1.2.2
        // option für reihenfolge cats
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'cats.order'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('cats.order', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // option für autopublish neu gefundene dateien
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'autopublish.founded.files'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('autopublish.founded.files', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // option für auto überwachung - alle filetypen überwachen?
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'all.files.autodetect'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('all.files.autodetect', '1')");
            $database->query();
            $sum_configs++;
        }

        // option für auto überwachung - nur bestimmte file typen überwachen
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'file.types.autodetect'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('file.types.autodetect', 'zip,rar,exe,pdf,doc,gif,jpg,png')");
            $database->query();
            $sum_configs++;
        }
        
        // option für jcomments verwendung
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'jcomments.active'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('jcomments.active', '0')");
            $database->query();
            $sum_configs++;
        }        
        
        // New parameters für artikel file plugin (by pelma)
        // default layout
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.defaultlayout'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.defaultlayout','"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME."')");
            $database->query();
            $sum_configs++;
        }

        // show hot
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.show_hot'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.show_hot', '1')");
            $database->query();
            $sum_configs++;
        }

        // show new
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.show_new'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.show_new', '1')");
            $database->query();
            $sum_configs++;
        }

        // enable plugin
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.enable_plugin'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.enable_plugin', '1')");
            $database->query();
            $sum_configs++;
        }

        // show disabled message
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.show_jdfiledisabled'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.show_jdfiledisabled', '1')");
            $database->query();
            $sum_configs++;
        }

        // offline layout
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.layout_disabled'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.layout_disabled','"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME."')");
            $database->query();
            $sum_configs++;
        }

        // show original downloadtitle
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.show_downloadtitle'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.show_downloadtitle', '1')");
            $database->query();
            $sum_configs++;
        }

        // offline title
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.offline_title'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.offline_title','"._JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE."')");
            $database->query();
            $sum_configs++;
        }

        // offline description
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'fileplugin.offline_descr'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('fileplugin.offline_descr','"._JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION."')");
            $database->query();
            $sum_configs++;
        }
        
        // ---------------------- end plugin --------------------------------------- 
         
        // new für standard catpic
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'cat.pic.default.filename'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('cat.pic.default.filename','folder.png')");
            $database->query();
            $sum_configs++;
        } else {
            // is pic set?
            $database->setQuery("SELECT setting_value FROM #__jdownloads_config WHERE setting_name = 'cat.pic.default.filename'");
            $cat_pic_default = $database->loadResult();
        }    
         
         // new für standard filepic
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'file.pic.default.filename'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('file.pic.default.filename','zip.png')");
            $database->query();
            $sum_configs++;
        } else {
            // is pic set?
            $database->setQuery("SELECT setting_value FROM #__jdownloads_config WHERE setting_name = 'file.pic.default.filename'");
            $file_pic_default = $database->loadResult();
        }   
        
        // new param für versionsnummer von jd
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'jd.version'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('jd.version','$jd_version')");
            $database->query();
            $sum_configs++;
        } else {
            // set new value
            $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '$jd_version' WHERE setting_name = 'jd.version'");  
            $database->query();
        }    
        
        // new param für versions status von jd
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'jd.version.state'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('jd.version.state','$jd_version_state')");
            $database->query();
            $sum_configs++;
        } else {
            // set new value
            $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '$jd_version_state' WHERE setting_name = 'jd.version.state'");  
            $database->query();
        }    

        // ************************************************************************
        // new in 1.4  beta
        // ************************************************************************
        
        // new param für svn version von jd
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'jd.version.svn'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('jd.version.svn','$jd_version_svn')");
            $database->query();
            $sum_configs++;
        } else {
            // set new value
            $database->setQuery("UPDATE #__jdownloads_config SET setting_value = '$jd_version_svn' WHERE setting_name = 'jd.version.svn'");  
            $database->query();
        }    

        // for send mails after frontend uploads 
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.upload'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.upload', '"._JLIST_SETTINGS_INSTALL_5."')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.option.upload'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.option.upload', '0')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.betreff.upload'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.betreff.upload', '"._JLIST_SETTINGS_INSTALL_6."')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.from.upload'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.from.upload', '"._JLIST_SETTINGS_INSTALL_4."')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.fromname.upload'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.fromname.upload', 'JDownloads')");
            $database->query();
            $sum_configs++;
        }

        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.html.upload'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.html.upload', '1')");
            $database->query();
            $sum_configs++;
        }        
        
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.template.upload'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.template.upload', '"._JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE."')");
            $database->query();
            $sum_configs++;
        }
        
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'send.mailto.template.download'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('send.mailto.template.download', '"._JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT."')");
            $database->query();
            $sum_configs++;
        }
        
        // options for mirror download button/icon
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'download.pic.mirror_1'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('download.pic.mirror_1', 'mirror_blue1.png')");
            $database->query();
            $sum_configs++;
        }
        
        // options for mirror download button/icon
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'download.pic.mirror_2'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('download.pic.mirror_2', 'mirror_blue2.png')");
            $database->query();
            $sum_configs++;
        }
        
        // options for update button/icon
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'picname.is.file.updated'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('picname.is.file.updated', 'update_blue.png')");
            $database->query();
            $sum_configs++;
        }
        
        // options for update button/icon
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'days.is.file.updated'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('days.is.file.updated', '15')");
            $database->query();
            $sum_configs++;
        }
        
        // options for screenshots
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'thumbnail.size.width'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('thumbnail.size.width', '100')");
            $database->query();
            $sum_configs++;
        }

        // options for screenshots
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'thumbnail.size.height'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('thumbnail.size.height', '100')");
            $database->query();
            $sum_configs++;
        }
        
        // options for view thumbnail placeholder in details view if screenshot not exists - default off
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'thumbnail.view.placeholder'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('thumbnail.view.placeholder', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // options for view thumbnail placeholder in fileslist if screenshot not exists - default off
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'thumbnail.view.placeholder.in.lists'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('thumbnail.view.placeholder.in.lists', '0')");
            $database->query();
            $sum_configs++;
        }                           
                
        // options for backend access (1 = also manager have access)
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'backend.manager.access'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('backend.manager.access', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // options for navigation bar on the bottom - default off
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'option.navigate.bottom'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('option.navigate.bottom', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // options for navigation bar on the bottom - default off
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'option.navigate.top'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('option.navigate.top', '1')");
            $database->query();
            $sum_configs++;
        }

         // options for view the category info on the top  - default off
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'view.category.info'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('view.category.info', '0')");
            $database->query();
            $sum_configs++;
        }
        
        // options for config: set off monitoring log (for mass files import)  - default on
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'save.monitoring.log'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('save.monitoring.log', '1')");
            $database->query();
            $sum_configs++;
        }
        
        // options for config: view subheader in frontend for cats/files - default on 
        $database->setQuery("SELECT * FROM #__jdownloads_config WHERE setting_name = 'view.subheader'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('view.subheader', '1')");
            $database->query();
            $sum_configs++;
        }

        if ($sum_configs == 0) {
            echo "<font color='green'>--> "._JLIST_INSTALL_1."</font><br />";
            } else {
                 echo "<font color='green'>--> ".$sum_configs." "._JLIST_INSTALL_2."</font><br />";
            }

//***************************** config data end **********************************************

//********************************************************************************************
// alter tables
// _downloads_files - add new field: description_long, created_by, created_mail, modified_by, modified_date
// _downloads_files - change field: date_added from VARCHAR to DATETIME  (zuerst umwandlung in iso format)
// _downloads_cats - add new field: cat_dir
// v 1.2.2 :
// _downloads_files - add new fields: extern_file, mirror_1, mirror_2
// *******************************************************************************************
		$sum_added_fields = 0;
        $update = false;
        $update_to14beta = false;

        $prefix = $database->_table_prefix;
        
        $tables = array( $prefix.'jdownloads_files' );
        $result = $database->getTableFields( $tables );
        if (!$result[$prefix.'jdownloads_files']['description_long']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD description_long LONGTEXT NOT NULL AFTER description");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['created_by']){ 
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD created_by VARCHAR(255) NOT NULL AFTER url_author");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['created_mail']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD created_mail VARCHAR(255) NOT NULL AFTER created_by");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['modified_by']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD modified_by VARCHAR(255) NOT NULL AFTER created_mail");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['modified_date']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD modified_date DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL AFTER modified_by");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['price']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD price VARCHAR(20) NOT NULL AFTER file_pic");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        // new fields in template table
        $tables = array( $prefix.'jdownloads_templates' );
        $result = $database->getTableFields( $tables );
        if (!$result[$prefix.'jdownloads_templates']['note']){
            $database->SetQuery("ALTER TABLE #__jdownloads_templates ADD note TINYTEXT NOT NULL AFTER locked, ADD checkbox_off TINYINT(1) NOT NULL DEFAULT '0' AFTER note, ADD symbol_off TINYINT(1) NOT NULL DEFAULT '0' AFTER checkbox_off");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        
        $tables = array( $prefix.'jdownloads_cats' );
        $result = $database->getTableFields( $tables );
        if (!$result[$prefix.'jdownloads_cats']['cat_dir']){
            $database->SetQuery("ALTER TABLE #__jdownloads_cats ADD cat_dir TEXT NOT NULL AFTER cat_id");
            if ($database->query()) {
               $sum_added_fields++;
               // update from 1.1
               $update = true;    
            }
        }
        // change
        if ($update) {
            $ok = convert_date();
            $database->SetQuery("ALTER TABLE #__jdownloads_files CHANGE date_added date_added DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'");
            $database->query();
        }  
        // extern_files
        $tables = array( $prefix.'jdownloads_files' );
        $result = $database->getTableFields( $tables );
        if (!$result[$prefix.'jdownloads_files']['extern_file']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD extern_file VARCHAR(255) NOT NULL AFTER url_download");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }  
        if (!$result[$prefix.'jdownloads_files']['mirror_1']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD mirror_1 VARCHAR(255) NOT NULL AFTER extern_file");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }  
        
        if (!$result[$prefix.'jdownloads_files']['mirror_2']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD mirror_2 VARCHAR(255) NOT NULL AFTER mirror_1");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }  

        if (!$result[$prefix.'jdownloads_files']['thumbnail']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD thumbnail VARCHAR(255) NOT NULL DEFAULT '' AFTER file_pic");
            if ($database->query()) {
            $sum_added_fields++;
            }                                                                                      
        }
        
        // cat_pic war zu kurz definiert
        $database->SetQuery("ALTER TABLE #__jdownloads_cats CHANGE cat_pic cat_pic VARCHAR(255) NOT NULL");
        $database->query();
          
        // in 1.4 beta changed - tinyint has false length
        $database->SetQuery("ALTER TABLE #__jdownloads_files CHANGE ordering ordering INT(11) NOT NULL DEFAULT '0'");   
        $database->query();
        
        // in 1.4 beta new
        
        // option field for set update active when change the data set
        $tables = array( $prefix.'jdownloads_files' );
        $result = $database->getTableFields( $tables );
        if (!$result[$prefix.'jdownloads_files']['update_active']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD update_active TINYINT(1) NOT NULL DEFAULT '0' AFTER cat_id");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        
        if (!$result[$prefix.'jdownloads_files']['metakey']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD metakey TEXT NOT NULL AFTER cat_id");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['metadesc']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD metadesc TEXT NOT NULL AFTER metakey");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['extern_site']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD extern_site TINYINT(1) NOT NULL DEFAULT '0' AFTER extern_file");
            if ($database->query()) {
            $sum_added_fields++;
            // update from 1.2 or 1.3 to 1.4beta
            $update_to14beta = true;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['extern_site_mirror_1']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD extern_site_mirror_1 TINYINT(1) NOT NULL DEFAULT '0' AFTER mirror_2");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_files']['extern_site_mirror_2']){
            $database->SetQuery("ALTER TABLE #__jdownloads_files ADD extern_site_mirror_2 TINYINT(1) NOT NULL DEFAULT '0' AFTER extern_site_mirror_1");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        
        $tables = array( $prefix.'jdownloads_cats' );
        $result = $database->getTableFields( $tables );
        if (!$result[$prefix.'jdownloads_cats']['metakey']){
            $database->SetQuery("ALTER TABLE #__jdownloads_cats ADD metakey TEXT NOT NULL AFTER cat_access");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
        if (!$result[$prefix.'jdownloads_cats']['metadesc']){
            $database->SetQuery("ALTER TABLE #__jdownloads_cats ADD metadesc TEXT NOT NULL AFTER metakey");
            if ($database->query()) {
            $sum_added_fields++;
            }    
        }
          
        if ($sum_added_fields == 0) {
            echo "<font color='green'>--> "._JLIST_INSTALL_1_2."</font><br />";
        } else {
            echo "<font color='green'>--> ".$sum_added_fields." "._JLIST_INSTALL_2_2."</font><br />";        
		}
	
        // make sure that the cat rights are correct when update
        // and set default pics for cats and files when is it set in config
        if ($root_dir && $update_to14beta){
            echo "<font color='green'>--> "._JLIST_INSTALL_20."</font><br />";
            $sum = set_rights_of_cat(0, '00', $sum);
            if ($sum){
                echo "<font color='red'>--> "._JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS."</font><br />";
            } 
             echo "<font color='green'>--> "._JLIST_INSTALL_21."</font><br />";
             
             // and set default pics for cats and files when is it set in config
             if ($cat_pic_default){
                 $database->setQuery("UPDATE #__jdownloads_cats SET cat_pic = '$cat_pic_default' WHERE cat_pic = ''");  
                 $database->query();
             }    
             if ($file_pic_default){
                 $database->setQuery("UPDATE #__jdownloads_files SET file_pic = '$file_pic_default' WHERE file_pic = ''");  
                 $database->query();
             }    
        }    
//***************************** alter table end **********************************************


//********************************************************************************************
// write default layouts in database
//
//
//
// *******************************************************************************************

        $sum_layouts =0;
        $layout_active = 0;

        $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '1' AND locked = '1' AND  template_name ='"._JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME."'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            if ($root_dir && $update_to14beta){
                $database->setQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = '1' AND template_active = '1'");
                $database->query();
                $layout_active++;
            }
            $database->setQuery("INSERT INTO #__jdownloads_templates (template_name, template_typ, template_text, template_active, locked)  VALUES ('"._JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME."', 1, '"._JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT."', 1, 1)");
            $database->query();
            $sum_layouts++;
        }    
        // files
        $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '2' AND locked = '1'  AND  template_name ='"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME."'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            if ($root_dir && $update_to14beta){
                $database->setQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = '2' AND template_active = '1'");
                $database->query();
                $layout_active++;  
            }
            $database->setQuery("INSERT INTO #__jdownloads_templates (template_name, template_typ, template_text, template_active, locked)  VALUES ('"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME."', 2, '"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT."', 0, 1)");
            $database->query();
            $sum_layouts++;
        }
           
        // summary
        $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '3' AND locked = '1'  AND  template_name ='"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME."'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            if ($root_dir && $update_to14beta){
                $database->setQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = '3' AND template_active = '1'");
                $database->query();
                $layout_active++;  
            }
            $database->setQuery("INSERT INTO #__jdownloads_templates (template_name, template_typ, template_text, template_active, locked)  VALUES ('"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME."', 3, '"._JLIST_BACKEND_SETTINGS_TEMPLATES_SUMMARY_DEFAULT."', 1, 1)");
            $database->query();
            $sum_layouts++;
        }
        
        // typ 4 is removed (mail)
        
        // new layout for download details (added v1.2)
        $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '5' AND locked = '1' AND  template_name ='"._JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME."'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            if ($root_dir && $update_to14beta){
                $database->setQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = '5' AND template_active = '1'");
                $database->query();
                $layout_active++;  
            }
            $dummy = stripslashes( _JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT );
            $database->setQuery("INSERT INTO #__jdownloads_templates (template_name, template_typ, template_text, template_active, locked)  VALUES ('"._JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME."', 5, '$dummy', 1, 1)");
            $database->query();
            $sum_layouts++;
        }        
        
        // new  Simple layout with Checkboxes for files (added v1.2)
        $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '2' AND locked = '1' AND template_name ='"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME." 1.4'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            // altes activ = false / da unten neues aktiviert wird
            $database->setQuery("UPDATE #__jdownloads_templates SET template_active = 0 WHERE template_typ = '2' AND template_active = '1'");
            $database->query();
            // neues eintragen und aktivieren
            $database->setQuery("INSERT INTO #__jdownloads_templates (template_name, template_typ, template_text, template_active, locked, note, checkbox_off, symbol_off)  VALUES ('"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME." 1.4', 2, '"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1."', 1, 1, '', 0, 1)");
            $database->query();
            $sum_layouts++;
        } 
        
        // new  Simple layout without Checkboxes for files (added v1.2)
        $database->setQuery("SELECT * FROM #__jdownloads_templates WHERE template_typ = '2' AND locked = '1' AND template_name ='"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME." 1.4'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_templates (template_name, template_typ, template_text, template_active, locked, note, checkbox_off, symbol_off)  VALUES ('"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME." 1.4', 2, '"._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2."', 0, 1, '', 1, 1)");
            $database->query();
            $sum_layouts++;
        }
         
        
        if ($sum_layouts == 0) {
                echo "<font color='green'>--> "._JLIST_INSTALL_3."</font><br />";
           } else {
                echo "<font color='green'>--> ".$sum_layouts." "._JLIST_INSTALL_4."</font><br />";
        }
        if ($layout_active){
            echo "<font color='red'>--> "._JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE."</font><br />";
        }  
        
        
//*************************************** end layouts ****************************************

//********************************************************************************************
// Write default licenses in database
//
// Get it from language file and checked if exists in DB
//
//********************************************************************************************

        $lic_total = (int)_JLIST_SETTINGS_LICENSE_TOTAL;
        $sum_licenses = 0;

   		$database->setQuery("SELECT * FROM #__jdownloads_license WHERE license_title = '"._JLIST_SETTINGS_LICENSE1_TITLE."'");
        $temp = $database->loadResult();
        if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_license (license_title, license_text, license_url)  VALUES ('"._JLIST_SETTINGS_LICENSE1_TITLE."', '"._JLIST_SETTINGS_LICENSE1_TEXT."', '"._JLIST_SETTINGS_LICENSE1_URL."')");
            $database->query();
            $sum_licenses++;
        }

       $database->setQuery("SELECT * FROM #__jdownloads_license WHERE license_title = '"._JLIST_SETTINGS_LICENSE2_TITLE."'");
       $temp = $database->loadResult();
       if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_license (license_title, license_text, license_url)  VALUES ('"._JLIST_SETTINGS_LICENSE2_TITLE."', '"._JLIST_SETTINGS_LICENSE2_TEXT."', '"._JLIST_SETTINGS_LICENSE2_URL."')");
            $database->query();
            $sum_licenses++;
        }
   		
       $database->setQuery("SELECT * FROM #__jdownloads_license WHERE license_title = '"._JLIST_SETTINGS_LICENSE3_TITLE."'");
       $temp = $database->loadResult();
       if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_license (license_title, license_text, license_url)  VALUES ('"._JLIST_SETTINGS_LICENSE3_TITLE."', '"._JLIST_SETTINGS_LICENSE3_TEXT."', '"._JLIST_SETTINGS_LICENSE3_URL."')");
            $database->query();
            $sum_licenses++;
        }

       $database->setQuery("SELECT * FROM #__jdownloads_license WHERE license_title = '"._JLIST_SETTINGS_LICENSE4_TITLE."'");
       $temp = $database->loadResult();
       if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_license (license_title, license_text, license_url)  VALUES ('"._JLIST_SETTINGS_LICENSE4_TITLE."', '"._JLIST_SETTINGS_LICENSE4_TEXT."', '"._JLIST_SETTINGS_LICENSE4_URL."')");
            $database->query();
            $sum_licenses++;
        }

       $database->setQuery("SELECT * FROM #__jdownloads_license WHERE license_title = '"._JLIST_SETTINGS_LICENSE5_TITLE."'");
       $temp = $database->loadResult();
       if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_license (license_title, license_text, license_url)  VALUES ('"._JLIST_SETTINGS_LICENSE5_TITLE."', '"._JLIST_SETTINGS_LICENSE5_TEXT."', '"._JLIST_SETTINGS_LICENSE5_URL."')");
            $database->query();
            $sum_licenses++;
        }

       $database->setQuery("SELECT * FROM #__jdownloads_license WHERE license_title = '"._JLIST_SETTINGS_LICENSE6_TITLE."'");
       $temp = $database->loadResult();
       if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_license (license_title, license_text, license_url)  VALUES ('"._JLIST_SETTINGS_LICENSE6_TITLE."', '"._JLIST_SETTINGS_LICENSE6_TEXT."', '"._JLIST_SETTINGS_LICENSE6_URL."')");
            $database->query();
            $sum_licenses++;
        }

       $database->setQuery("SELECT * FROM #__jdownloads_license WHERE license_title = '"._JLIST_SETTINGS_LICENSE7_TITLE."'");
       $temp = $database->loadResult();
       if ($temp == 0) {
            $database->setQuery("INSERT INTO #__jdownloads_license (license_title, license_text, license_url)  VALUES ('"._JLIST_SETTINGS_LICENSE7_TITLE."', '"._JLIST_SETTINGS_LICENSE7_TEXT."', '"._JLIST_SETTINGS_LICENSE7_URL."')");
            $database->query();
            $sum_licenses++;
        }

       if ($sum_licenses == 0) {
          echo "<font color='green'>--> "._JLIST_INSTALL_5."</font><br />";
       } else {
          echo "<font color='green'>--> ".$sum_licenses." "._JLIST_INSTALL_6."</font><br />";
       }

//***************************** end licenses *************************************************

//********************************************************************************************
// Checked if exist joomfish 
// if yes, move the files
//********************************************************************************************
    if (@is_dir($mosConfig_absolute_path.'/administrator/components/com_joomfish/contentelements')){
        $fishresult = 1;
        @rename( "$mosConfig_absolute_path/administrator/components/com_jdownloads/joomfish/jdownloads_cats.xml", "$mosConfig_absolute_path/administrator/components/com_joomfish/contentelements/jdownloads_cats.xml");
        @rename( "$mosConfig_absolute_path/administrator/components/com_jdownloads/joomfish/jdownloads_config.xml", "$mosConfig_absolute_path/administrator/components/com_joomfish/contentelements/jdownloads_config.xml");
        @rename( "$mosConfig_absolute_path/administrator/components/com_jdownloads/joomfish/jdownloads_files.xml", "$mosConfig_absolute_path/administrator/components/com_joomfish/contentelements/jdownloads_files.xml");
        @rename( "$mosConfig_absolute_path/administrator/components/com_jdownloads/joomfish/jdownloads_layouts.xml", "$mosConfig_absolute_path/administrator/components/com_joomfish/contentelements/jdownloads_layouts.xml");
        @rmdir ("$mosConfig_absolute_path/administrator/components/com_jdownloads/joomfish"); 
    } else { 
        $fishresult = 0;
    }  
    	
	if ($fishresult) {
		echo "<font color='green'>--> "._JLIST_INSTALL_17." ".$mosConfig_absolute_path.'/administrator/components/com_joomfish/contentelements'.'</font><br />';
	} else {
        echo "<font color='green'>--> "._JLIST_INSTALL_18." ".$mosConfig_absolute_path.'/administrator/components/com_jdownloads/joomfish'.'<br />'._JLIST_INSTALL_19.'</font><br />';
    }    	

//***************************** end joomfish *************************************************

//********************************************************************************************
// Checked default directories 
//
// 
//
//********************************************************************************************

        // downloads
        $dir_exist = is_dir("$mosConfig_absolute_path/downloads");

        if($dir_exist) {
           if (is_writable("$mosConfig_absolute_path/downloads")) {
               echo "<font color='green'>--> "._JLIST_INSTALL_7."</font><br />";
           } else {
               echo "<font color='red'><strong>--> "._JLIST_INSTALL_8."</strong></font><br />";
           }
        } else {
            if ($makedir = @mkdir("$mosConfig_absolute_path/downloads/", 0777)) {
			   echo "<font color='green'>--> "._JLIST_INSTALL_9."<br />";
		       } else {
		 	        echo "<font color='red'><strong>--> "._JLIST_INSTALL_10."</strong></font><br />";
		       }
        }

        // tempzipfiles
        $dir_existzip = is_dir("$mosConfig_absolute_path/downloads/tempzipfiles");

        if($dir_existzip) {
           if (is_writable("$mosConfig_absolute_path/downloads/tempzipfiles")) {
              echo "<font color='green'>--> "._JLIST_INSTALL_11."</font><br />";
           } else {
               echo "<font color='red'><strong>--> "._JLIST_INSTALL_12."</strong></font><br />";
           }
        } else {
            if ($makedir = @mkdir("$mosConfig_absolute_path/downloads/tempzipfiles/", 0777)) {
    			echo "<font color='green'>--> "._JLIST_INSTALL_13."<br />";
		    } else {
		 	echo "<font color='red'><strong>--> "._JLIST_INSTALL_14."</strong></font><br />";
		    }
		 }

        // cats und files aktualisieren falls update von 1.1
        if ($root_dir != '' && $update){
            checkAfterInstall($root_dir);
        }    
        
        // beispieldaten speichern - wenn neuinstallation
        if ($root_dir == '' && !$update){
            $dir_exist = is_dir("$mosConfig_absolute_path/downloads");
            if($dir_exist) {
                if (is_writable("$mosConfig_absolute_path/downloads")) {      
                     if (!is_dir("$mosConfig_absolute_path/downloads/"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT)){
                        // daten speichern
                        // dirs für cats
                        $makdir = @mkdir("$mosConfig_absolute_path/downloads/"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT, 0777);
                        $makdir = @mkdir("$mosConfig_absolute_path/downloads/"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT.'/'._JLIST_SAMPLE_DATA_CAT_NAME_SUB, 0777);
                        // cat erstellen in db
                        if ($makdir) {
                            $database->setQuery("INSERT INTO #__jdownloads_cats (cat_title, cat_description, cat_dir, parent_id, cat_pic, published)  VALUES ('"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT."', '"._JLIST_SAMPLE_DATA_CAT_NAME_TEXT."', '"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT."', 0, 'joomla.png', 1)");
                            $database->query();
                            $database->setQuery("INSERT INTO #__jdownloads_cats (cat_title, cat_description, cat_dir, parent_id, cat_pic, published)  VALUES ('"._JLIST_SAMPLE_DATA_CAT_NAME_SUB."', '"._JLIST_SAMPLE_DATA_CAT_NAME_TEXT."', '"._JLIST_SAMPLE_DATA_CAT_NAME_ROOT.'/'._JLIST_SAMPLE_DATA_CAT_NAME_SUB."', 1, 'joomla.png', 1)");
                            $database->query();
                            // file kopieren nach catdir
                            $source_path = "$mosConfig_absolute_path/administrator/components/com_jdownloads/mod_jdownloads_top_1.1.zip";
                            $dest_path = $mosConfig_absolute_path.'/downloads/'._JLIST_SAMPLE_DATA_CAT_NAME_ROOT.'/'._JLIST_SAMPLE_DATA_CAT_NAME_SUB.'/mod_jdownloads_top_1.1.zip'; 
                            @copy($source_path, $dest_path);
                            // downloads erstellen
                            $database->setQuery("INSERT INTO #__jdownloads_files (`file_id`, `file_title`, `description`, `description_long`, `file_pic`, `price`, `release`, `language`, `system`, `license`, `url_license`, `size`, `date_added`, `url_download`, `url_home`, `author`, `url_author`, `created_by`, `created_mail`, `modified_by`, `modified_date`, `downloads`, `cat_id`, `ordering`, `published`, `checked_out`, `checked_out_time`) VALUES (NULL, '"._JLIST_SAMPLE_DATA_FILE_NAME."', '"._JLIST_SAMPLE_DATA_FILE_NAME_TEXT."', '"._JLIST_SAMPLE_DATA_FILE_NAME_TEXT."', 'joomla.png', '', '1.0', '2', '1', '1', '', '1.92 KB', '".date('Y-m-d H:i:s')."', 'mod_jdownloads_top_1.1.zip', 'www.joomlaaddons.de', 'Arno Betz', 'info@joomlaaddons.de', 'Installer', '', '', '0000-00-00 00:00:00', '0', '2', '0', '1', '0', '0000-00-00 00:00:00')");
                            $database->query();
                            echo "<font color='green'>--> "._JLIST_SAMPLE_DATA_CREATE_OK."<br />";
                        }
                     } else {
                        // daten existieren schon
                        echo "<font color='green'> "._JLIST_SAMPLE_DATA_EXISTS."</font><br />";
                     } 
                } else {
                    // fehlermeldung: daten konnten nicht gespeichert werden
                    echo "<font color='red'><strong>--> "._JLIST_SAMPLE_DATA_CREATE_ERROR."</strong></font><br />";
                }    
            } else {
                // fehlermeldung: daten konnten nicht gespeichert werden
                echo "<font color='red'><strong>--> "._JLIST_SAMPLE_DATA_CREATE_ERROR."</strong></font><br />";
            }    
        }    
        
        echo "<font color='#FF6600'><strong>--> "._JLIST_INSTALL_DB_TIP."</strong></font><br />";
        ?>

		<br />
   		<font color="green"><b><?php echo _JLIST_INSTALL_15; ?></b></font><br />
  		</code>
      </td>
    </tr>
  </table>
  
<a href="index2.php?option=com_jdownloads"><big><strong><?php echo _JLIST_INSTALL_16; ?></strong></big></a><br /><br />

  </center>
  <?php
}

function convert_date(){
    global $database;
       
    $ok = false;
    $database->setQuery("SELECT * FROM #__jdownloads_files");
    $files = $database->loadObjectList();
    foreach ($files as $file){
        list($date, $time) = explode(' ', $file->date_added);
        if (strpos($file->date_added, '-')) {
            list($y, $m, $d) = explode('-', $date);
        } else {   
            list($d, $m, $y) = explode('.', $date);
        }    
        list($h, $i) = explode(':', $time);        
        $date_added = sprintf('%04d-%02d-%02s %02d:%02d:00', $y, $m, $d, $h, $i);
        // in db schreiben
        $database->setQuery("UPDATE #__jdownloads_files SET date_added = '$date_added' WHERE file_id = '$file->file_id'");
        if ($database->query()){
            $ok = true;
        }
    }
    return $ok;
}    

// get upload directories
//
// @return dirs
//
function getDirectories($root_dir) {
    global $mosConfig_absolute_path, $jlistConfig;

    $dirs = array();
    //search all subdirectories
    if(file_exists($root_dir)){
        if ($handle = opendir($root_dir)) {
            // List all the files
            while (false !== ($file = readdir($handle))) {
              if($file != '.' && $file != '..') {
                if(is_dir($root_dir.$file)) {
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

// nach install prüfen ob alle files und dirs ok - da eventuell update von 1.1
function checkAfterInstall($root_dir) {
    global $database, $mosConfig_absolute_path;
   
    echo '<br />'._JLIST_CHECK_CATS_TITEL1.'<br />';
    echo _JLIST_CHECK_CATS_TITEL2;
    
    $dirs = getDirectories($root_dir);
    
    // daten einlesen
    $database->setQuery("SELECT * FROM #__jdownloads_cats");
    $cats = $database->loadObjectList();

    $database->setQuery("SELECT * FROM #__jdownloads_files WHERE cat_id != 0");
    $files = $database->loadObjectList();
    
    $dir_added = 0;
    $dir_error = 0;
       
    // root dirs erstellen falls nicht vorhanden
    foreach($cats as $cat){
        $dir = $root_dir.$cat->cat_title;
        if (!@is_dir($dir)) {
             if (!@mkdir($dir, 0777)) {
                 $dir_error++; 
             } else {
                 $dir = str_replace($root_dir, '', $dir);
                 $database->setQuery("UPDATE #__jdownloads_cats SET cat_dir = '$dir' WHERE cat_id = '$cat->cat_id'");
                 $database->query();
                 $dir_added++;
             }  
        }  else {
                        
            // cat_dir aktualisieren
             $dir = str_replace($root_dir, '', $dir);
             $database->setQuery("UPDATE #__jdownloads_cats SET cat_dir = '$dir' WHERE cat_id = '$cat->cat_id'");
             $database->query();
             $dir_added++;
        }         
    } 
    
    // files prüfen und falls notwendig verschieben - url_download kürzen auf filename
    $file_error = 0;
    $file_moved = 0;
    $file_not_found = 0;
    
    foreach($files as $file) {
        // nur verschieben wenn in url kein dir enthalten
      
        // alte position
        $old_dir = $root_dir.$file->url_download;
        // neue position 
        $database->setQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$file->cat_id'");
        $dir_short = $database->loadResult();
        $new_dir = $root_dir.$dir_short.'/'.basename($file->url_download);
        
        if (@is_file($old_dir)) {
            if (@rename($old_dir, $new_dir)){
                $filename = basename($new_dir);
                $database->setQuery("UPDATE #__jdownloads_files SET url_download = '$filename' WHERE file_id = '$file->file_id'");
                $database->query();
                $file_moved++;
            } else {
                $file_error++;
            }
        } else {
            $file_not_found++;
        }
      
    } 
    
    // alte dirs löschen old__               
    if ($dirs){
        foreach($dirs as $dir){
            @rmdir($root_dir.$dir);
        }
    }

    // meldungen        
    echo '<br /><br />';
    if ($dir_added) echo "<font color='green'>--> ".$dir_added.' '._JLIST_CHECK_CATS_CREATE.'</font><br />';   
    if ($dir_error) echo "<font color='red'><strong>--> ".$dir_error.' '._JLIST_CHECK_CATS_NOT_FOUND.'</strong></font><br />';   
    if ($file_moved) echo "<font color='green'>--> ".$file_moved.' '._JLIST_CHECK_FILES_MOVE.'</font><br />';   
    if ($file_error) echo "<font color='red'><strong>--> ".$file_error.' '._JLIST_CHECK_FILES_NOT_MOVED.'</strong></font><br />';
    if ($file_not_found) echo "<font color='red'><strong>--> ".$file_not_found.' '._JLIST_CHECK_FILES_NOT_FOUND.'</strong></font><br />';
    echo "<b>"._JLIST_CHECK_FINISH."</b>";       
    echo '<br /><br />';

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
        $message = _JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR;
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
            $message = _JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR;        
        }
    } else {
        $message = _JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR;
    }
    return $message;
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