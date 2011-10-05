<?php
/**
* @version 1.4
* @package JDownloads
* @copyright (C) 2008 www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* functions to check dir structure and files url after restore backup file!
* check categories rights
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
  
// nach restore prüfen ob alle files und dirs ok - da eventuell backupdatei  von 1.1
function checkAfterRestore() {
    global $database, $mosConfig_absolute_path, $jlistConfig;
    
  //*********************************************
  // JD VERSION:
     $jd_version = '1.4';
     $jd_version_state = 'RC';   
     $jd_version_svn = '601'; // added in  1.4 RC     
  //*********************************************
    
    $output = '';
    
//********************************************************************************************
// insert default config data - if not exist
// *******************************************************************************************
      $root_dir = '';
      $sum_configs = 0;
      $update_to14beta = false;  

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
            $database->SetQuery("INSERT INTO #__jdownloads_config (setting_name, setting_value) VALUES ('files.autodetect', '0')");
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
            $update_to14beta = true;  
        } else {
            if ($temp != '1.4'){
                $update_to14beta = true;
            }      
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
        
        // options for view thumbnail placeholder if screenshot not exists - default off
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
            $output .= '<font color="green"> '._JLIST_INSTALL_1.'</font><br />';
        } else {
            $output .= '<font color="green"> '.$sum_configs.' '._JLIST_INSTALL_2.'</font><br />';
        }

//***************************** config data end **********************************************

//********************************************************************************************
// alter tables
// _downloads_files - add new field: description_long, created_by, created_mail, modified_by, modified_date
// _downloads_files - change field: date_added from VARCHAR to DATETIME
// _downloads_cats - add new field: cat_dir
//
// *******************************************************************************************
        $sum_added_fields = 0;
        $update = false;

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
             $output .= '<font color="green">--> '._JLIST_INSTALL_1_2.'</font><br />';
        } else {
             $output .= '<font color="green">--> '.$sum_added_fields.' '._JLIST_INSTALL_2_2.'</font><br />';        
        }    

        
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
                 $output .= '<font color="green">--> '._JLIST_INSTALL_3.'</font><br />';
           } else {
                 $output .= '<font color="green">--> '.$sum_layouts.' '._JLIST_INSTALL_4.'</font><br />';
        }
        if ($layout_active){
             $output .= '<font color="red">--> '._JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE.'</font><br />';
        }  
        
        
//*************************************** end layouts ****************************************
    
    // wenn update dann cats und files prüfen
    if ($update) {
        $output .= _JLIST_AFTER_RESTORE_3.'<br />';
        $output .= _JLIST_AFTER_RESTORE_4.'<br />';
    
        // daten einlesen
        $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE published = 1 ORDER BY parent_id");
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
          } else {
              $dir = str_replace($root_dir, '', $dir);
              $database->setQuery("UPDATE #__jdownloads_cats SET cat_dir = '$dir' WHERE cat_id = '$cat->cat_id'");
              $database->query();
          }          
      } 
    
      // files prüfen und falls notwendig verschieben - url_download kürzen auf filename
      $file_error = 0;
      $file_moved = 0;
      $file_not_found = 0;
    
      foreach($files as $file) {
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
                $filename = basename($new_dir);
                $database->setQuery("UPDATE #__jdownloads_files SET url_download = '$filename' WHERE file_id = '$file->file_id'");
                $database->query();       
            } else {
                $file_not_found++;
                $filename = basename($new_dir);
                $database->setQuery("UPDATE #__jdownloads_files SET url_download = '$filename' WHERE file_id = '$file->file_id'");
                $database->query();  
            }         
      }                
    
      // meldungen        
      if ($dir_added) $output .= '<font color="green"> '.$dir_added.' '._JLIST_CHECK_CATS_CREATE.'</font><br />';   
      if ($dir_error) $output .= '<font color="red"><strong> '.$dir_error.' '._JLIST_CHECK_CATS_NOT_FOUND.'</strong></font><br />';   
      if ($file_moved) $output .= '<font color="green"> '.$file_moved.' '._JLIST_CHECK_FILES_MOVE.'</font><br />';   
      if ($file_error) $output .= '<font color="red"><strong> '.$file_error.' '._JLIST_CHECK_FILES_NOT_MOVED.'</strong></font><br />';
      if ($file_not_found) $output .= '<font color="red"><strong> '.$file_not_found.' '._JLIST_CHECK_FILES_NOT_FOUND.'</strong></font><br />';
    }
    
    // make sure that the cat rights are correct when update
     if ($root_dir && $update_to14beta){
        $output .= '<font color="red">--> '._JLIST_AFTER_RESTORE_3.'</font><br />';
        $output .= '<font color="green">--> '._JLIST_AFTER_RESTORE_4.'</font><br />';
        // daten einlesen
        $database->setQuery("SELECT * FROM #__jdownloads_cats");
        $cats = $database->loadObjectList();
        $dir_added = 0;
        $dir_error = 0;
       // root dirs erstellen falls nicht vorhanden
       foreach($cats as $cat){
          $dir = $root_dir.$cat->cat_dir;
          if (!@is_dir($dir)) {
             if (!@mkdir($dir, 0777)) {
                 $dir_error++; 
             } else {
                 $dir_added++;
             }  
          }          
      }         
      // meldungen        
      $output .= '<font color="green">--> '.$dir_added.' '._JLIST_CHECK_CATS_CREATE.'</font><br />';   
      if ($dir_error) $output .= '<font color="red"><strong>--> '.$dir_error.' '._JLIST_CHECK_CATS_NOT_FOUND.'</strong></font><br />';

      // check categories access rights
        $output .= '<font color="green">--> '._JLIST_INSTALL_20.'</font><br />';  
        $sum = set_rights_of_cat (0, '00', $sum);    // all cats will checked 
        if ($sum){
            $output .= '<font color="red">--> '._JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS.'</font><br />';
        } 
        $output .= '<font color="green">--> '._JLIST_INSTALL_21.'</font><br />';
        
        // and set default pics for cats and files when is set in config
        if ($cat_pic_default){
                 $database->setQuery("UPDATE #__jdownloads_cats SET cat_pic = '$cat_pic_default' WHERE cat_pic = ''");  
                 $database->query();
        }    
        if ($file_pic_default){
                 $database->setQuery("UPDATE #__jdownloads_files SET file_pic = '$file_pic_default' WHERE file_pic = ''");  
                 $database->query();
        }
   }     
   return $output;
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
?>