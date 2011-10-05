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
?>
    <script src="<?php echo $mosConfig_live_site;?>/components/com_jdownloads/jdownloads.js" type="text/javascript"></script>
    <script src="<?php echo $mosConfig_live_site;?>/components/com_jdownloads/lightbox/lightbox.js" type="text/javascript"></script>
<?php

$mainframe->addCustomHeadTag( "<link href=\"".$mosConfig_live_site."/components/com_jdownloads/jdownloads_fe.css\" rel=\"stylesheet\" type=\"text/css\"/>" );
$mainframe->addCustomHeadTag( "<link href=\"".$mosConfig_live_site."/components/com_jdownloads/lightbox/lightbox.css\" rel=\"stylesheet\" type=\"text/css\"/>" );


$marked_files_id = array();

class jlist_HTML{

/* ###########################################################
/  Nur Kategorien-Übersicht anzeigen
############################################################## */
	function showCats($option, $cats, $total, $sum_pages, $limit, $limitstart, $site_aktuell, $sub_cats, $sub_files, $sum_all_cats, $totalfiles){
		global $database, $mosConfig_live_site, $jlistConfig, $jlistTemplates, $Itemid, $my, $mainframe;
	     
    $mainframe->setPageTitle( $jlistConfig['jd.header.title']);
    
    $html_cat = makeHeader($html_cat, true, true, false, 0, false, false, false, false, false, $sum_pages, $limit, $total, $limitstart, $site_aktuell);
    echo $html_cat;
	$html_cat = '';
    $metakey = '';		
	
	if(!empty($cats)){
		for ($i=0; $i < $limit; $i++) { 	
           if ($cats[$i]->cat_title){
               // get access control
               $access = array();
               $access[0] = (int)substr($cats[$i]->cat_access, 0, 1);
               $access[1] = (int)substr($cats[$i]->cat_access, 1, 1);
               // only view when user has corect access level
               if ($my->gid >= $access[0]) {
                   $database->setQuery("SELECT COUNT(*) FROM #__jdownloads_files WHERE cat_id = '{$cats[$i]->cat_id}' AND published = 1");
                   $anzahl_files = $database->loadResult();

                   //display cat info
                   $catlink = "<a href='".sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=viewcategory&amp;catid=".$cats[$i]->cat_id)."'>";

                   // symbol anzeigen - auch als url
                   if ($cats[$i]->cat_pic != '' ) {
                       $size = $jlistConfig['cat.pic.size'];
                       $catpic = $catlink.'<img src="images/jdownloads/catimages/'.$cats[$i]->cat_pic.'" align="top" width="'.$size.'" height="'.$size.'" border="0" alt="" /> </a>';
                   } else {
                       $catpic = '';
                   }                   
                   $catlink .= $cats[$i]->cat_title.'</a>';
                   $html_cat .= str_replace('{cat_title}', $catlink, $jlistTemplates[1][0]->template_text);
			       $html_cat = str_replace('{cat_description}', $cats[$i]->cat_description, $html_cat);
			       $html_cat = str_replace('{cat_pic}', $catpic, $html_cat);
                   if ($sub_cats[$i] == 0){
                       $html_cat = str_replace('{sum_subcats}','', $html_cat);
                   } else {
                       $html_cat = str_replace('{sum_subcats}', _JLIST_FRONTEND_COUNT_SUBCATS.' '.$sub_cats[$i], $html_cat);
                   }
                   $html_cat = str_replace('{sum_files_cat}', _JLIST_FRONTEND_COUNT_FILES.' '.$sub_files[$i], $html_cat);
			       $html_cat = str_replace('{files}', "", $html_cat);
    	           $html_cat = str_replace('{checkbox_top}', "", $html_cat);
			       $html_cat = str_replace('{form_button}', "", $html_cat);
                   $html_cat = str_replace('{form_hidden}', "", $html_cat);
                   $html_cat = str_replace('{cat_info_end}', "", $html_cat);
                   $html_cat = str_replace('{cat_info_begin}', "", $html_cat);
                   // cat title row info only view in one category
                   // remove all title html tags in output
                   if ($pos_end = strpos($html_cat, '{cat_title_end}')){
                       $pos_beg = strpos($html_cat, '{cat_title_begin}');
                       $html_cat = substr_replace($html_cat, '', $pos_beg, ($pos_end - $pos_beg)+ 15);
                   }
                   // add metakey infos
                   if ($cats[$i]->metakey){
                        $metakey = $metakey.' '.$cats[$i]->metakey; 
                   }
               } // access control
           }
        }
        
        $mainframe->appendMetaTag( 'keywords' , strip_tags($metakey));  
        
    	$footer = makeFooter(false, true, false, $sum_pages, $limit, $limitstart, $site_aktuell);  
        $html_cat .= $footer;

        if ( !$jlistConfig['offline'] ) {
            echo $html_cat;
        } else {
            if ($my->gid == 2) {
                echo _JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT;
                echo $html_cat;
            } else {
                $html_off = '<br /><br />'.$jlistConfig['offline.text'].'<br /><br />';
                $html_off .= $footer;
                echo $html_off;
            }
        }
    }
}

/* ###########################################################
/  Einzelne Kategorie mit Liste der download files anzeigen
############################################################## */
	function showOneCategory($option, $cat, $subcats, $files, $catid, $total, $sum_pages, $limit, $limitstart, $sum_subcats, $sum_subfiles, $site_aktuell, $access){
		global $database, $mosConfig_live_site, $jlistConfig, $jlistTemplates, $Itemid, $my, $mainframe, $mosConfig_MetaKeys;
    
    $mainframe->setPageTitle( $jlistConfig['jd.header.title'].' - '.$cat[0]->cat_title ); 
    $mainframe->appendMetaTag( 'keywords' , strip_tags($cat[0]->metakey ));  
    $mainframe->appendMetaTag( 'description' , strip_tags($cat[0]->metadesc)); 
    $sum_subs = count($subcats);
    $html_cat = makeHeader($html_cat, false, false, true, $sum_subs, false, false, false, false, false, $sum_pages, $limit, $total, $limitstart, $site_aktuell);
    echo $html_cat;        
    
    if ($site_aktuell > 1) $subcats = '';
        // get pic
        if ($cat[0]->cat_pic != '' ) {
            $size = $jlistConfig['cat.pic.size'];
            $catpic = '<img src="images/jdownloads/catimages/'.$cat[0]->cat_pic.'" align="top" width="'.$size.'" height="'.$size.'" border="0" alt="" /> ';
        } else {
            $catpic = '';
        }
  		//display cat info
		if ($jlistConfig['view.category.info']) {
            $html_cat = str_replace('{cat_title}', $cat[0]->cat_title, $jlistTemplates[1][0]->template_text);
		    $html_cat = str_replace('{cat_description}', $cat[0]->cat_description, $html_cat);
		    $html_cat = str_replace('{cat_pic}', $catpic, $html_cat);
            $html_cat = str_replace('{sum_subcats}', '', $html_cat);
            $html_cat = str_replace('{sum_files_cat}', '', $html_cat);
            $html_cat = str_replace('{cat_info_begin}', '', $html_cat); 
            $html_cat = str_replace('{cat_info_end}', '', $html_cat); 
            // remove all title html tags in top cat output
            if ($pos_end = strpos($html_cat, '{cat_title_end}')){
                $pos_beg = strpos($html_cat, '{cat_title_begin}');
                $html_cat = substr_replace($html_cat, '', $pos_beg, ($pos_end - $pos_beg) + 15);
            }    
        } else {
            $html_cat = str_replace('{cat_title}', '', $jlistTemplates[1][0]->template_text);
            // remove all title html tags in top cat output
            if ($pos_end = strpos($html_cat, '{cat_title_end}')){
                $pos_beg = strpos($html_cat, '{cat_title_begin}');
                $html_cat = substr_replace($html_cat, '', $pos_beg, ($pos_end - $pos_beg) + 15);
            } 
            // remove all html tags in top cat output
            if ($pos_end = strpos($html_cat, '{cat_info_end}')){
                $pos_beg = strpos($html_cat, '{cat_info_begin}');
                $html_cat = substr_replace($html_cat, '', $pos_beg, ($pos_end - $pos_beg) + 14);
            } else {
                $html_cat = str_replace('{cat_description}', '', $html_cat);
                $html_cat = str_replace('{cat_pic}', '', $html_cat);
                $html_cat = str_replace('{sum_subcats}', '', $html_cat);
                $html_cat = str_replace('{sum_files_cat}', '', $html_cat);
            }
        }        
  		$html_files = '';
        $i = 0;
        $formid = $cat[0]->cat_id;
                
        // subcats anzeigen
        if(!empty($subcats)){
            $html_cat = str_replace('{files}', "", $html_cat);
            $html_cat = str_replace('{checkbox_top}', "", $html_cat);
            $html_cat = str_replace('{form_hidden}', "", $html_cat);
            $html_cat = str_replace('{form_button}', "", $html_cat);
            
            for ($i=0; $i < count($subcats); $i++){        
                 //display cat info
                 $catlink = "<a href='".sefRelToAbs("index.php?option=com_jdownloads&amp;Itemid=".$Itemid."&amp;task=viewcategory&amp;catid=".$subcats[$i]->cat_id)."'>";
                 
                 // Symbol anzeigen - auch als url
                 if ($subcats[$i]->cat_pic != '' ) {
                     $size = $jlistConfig['cat.pic.size'];
                     $catpic = $catlink.'<img src="images/jdownloads/catimages/'.$subcats[$i]->cat_pic.'" align="top" width="'.$size.'" height="'.$size.'" border="0" alt="" /> </a>';
                 } else {
                     $catpic = '';
                 }                         
                 // url vervollständigen
                 $catlink .= $subcats[$i]->cat_title."</a>";
                 
                 $html_cat .= str_replace('{cat_title}', $catlink, $jlistTemplates[1][0]->template_text);
                 $html_cat = str_replace('{cat_description}', $subcats[$i]->cat_description, $html_cat);
                 $html_cat = str_replace('{cat_pic}', $catpic, $html_cat);
                 $html_cat = str_replace('{cat_info_begin}', '', $html_cat); 
                 $html_cat = str_replace('{cat_info_end}', '', $html_cat);
                 if ($i > 0){
                     // remove all title html tags in top cat output
                     if ($pos_end = strpos($html_cat, '{cat_title_end}')){
                         $pos_beg = strpos($html_cat, '{cat_title_begin}');
                         $html_cat = substr_replace($html_cat, '', $pos_beg, ($pos_end - $pos_beg) + 15);
                     } 
                 } else {
                     $html_cat = str_replace('{subcats_title_text}', _JLIST_FE_FILELIST_TITLE_OVER_SUBCATS_LIST, $html_cat);             
                     $html_cat = str_replace('{cat_title_begin}', '', $html_cat); 
                     $html_cat = str_replace('{cat_title_end}', '', $html_cat);
                 }    
                 
                 if ($sub_cats[$i] == 0){
                    $html_cat = str_replace('{sum_subcats}','', $html_cat);
                 } else {
                    $html_cat = str_replace('{sum_subcats}', _JLIST_FRONTEND_COUNT_SUBCATS.' '.$sub_cats[$i], $html_cat);
                 }

                 $html_cat = str_replace('{sum_files_cat}', _JLIST_FRONTEND_COUNT_FILES.' '.$sum_subfiles[$i], $html_cat);

                 // mehrfache file liste anzeige verhindern
                 if ($i < (count($subcats) -1)) {
                     $html_cat = str_replace('{files}', "", $html_cat);
                     $html_cat = str_replace('{checkbox_top}', "", $html_cat);
                     $html_cat = str_replace('{form_hidden}', "", $html_cat);
                     $html_cat = str_replace('{form_button}', "", $html_cat);
                 }
            }    
        }                        
        // build info pics
        $pic_date    = '';
        $pic_license = '';
        $pic_author  = '';
        $pic_website = '';
        $pic_system = '';
        $pic_language  = '';
        $pic_download = '';
        $pic_price = '';
        $pic_size = '';
        // anzeigen wenn im Layout aktiviert (0 = aktiv !!)
        if ($jlistTemplates[2][0]->symbol_off == 0 ) {
            $msize =  $jlistConfig['info.icons.size'];
            $pic_date = '<img src="images/jdownloads/miniimages/date.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_DATE.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_DATE.'" />&nbsp;';
            $pic_license = '<img src="images/jdownloads/miniimages/license.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_LICENCE.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_LICENCE.'" />&nbsp;';
            $pic_author = '<img src="images/jdownloads/miniimages/contact.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR.'" />&nbsp;';
            $pic_website = '<img src="images/jdownloads/miniimages/weblink.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE.'" />&nbsp;';
            $pic_system = '<img src="images/jdownloads/miniimages/system.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM.'" />&nbsp;';
            $pic_language = '<img src="images/jdownloads/miniimages/language.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE.'" />&nbsp;';
            $pic_downloads = '<img src="images/jdownloads/miniimages/download.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD_HITS.'" />&nbsp;';
            $pic_download = '<img src="images/jdownloads/miniimages/download.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD.'" />&nbsp;';
            $pic_price = '<img src="images/jdownloads/miniimages/currency.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_PRICE.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_PRICE.'" />&nbsp;';
            $pic_size = '<img src="images/jdownloads/miniimages/stuff.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="'._JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE.'" title="'._JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE.'" />&nbsp;';
        }
        // a little pic for extern links
        $extern_url_pic = '<img src="'.$mosConfig_live_site.'/components/com_jdownloads/images/link_extern.gif" />';

        // files der cat anzeigen
        for ($i=0; $i<count($files); $i++) {
            $value = $files[$i]->file_id;
            // nur checkbox wenn kein externer link
            if (!$files[$i]->extern_file){
                $checkbox_list = '<input type="checkbox" id="cb'.$i.'" name="cb_arr[]" value="'.$value.'" onclick="istChecked(this.checked,'.$formid.');"/>';
            } else {
                $userinfo = _JLIST_FRONTEND_EXTERN_FILE_USER_INFO;
                $checkbox_list = mosToolTip($userinfo);
            }    
        	$html_file = str_replace('{file_id}',$files[$i]->file_id, $jlistTemplates[2][0]->template_text);
            // files title row info only view when it is the first file
            if ($i > 0){
                // remove all html tags in top cat output
                if ($pos_end = strpos($html_file, '{files_title_end}')){
                    $pos_beg = strpos($html_file, '{files_title_begin}');
                    $html_file = substr_replace($html_file, '', $pos_beg, ($pos_end - $pos_beg) + 17);
                }
            } else {
                $html_file = str_replace('{files_title_text}', _JLIST_FE_FILELIST_TITLE_OVER_FILES_LIST, $html_file);
                $html_file = str_replace('{files_title_end}', '', $html_file);
                $html_file = str_replace('{files_title_begin}', '', $html_file);
            } 
             // titel einsetzen
             // new in 1.4 beta (2) - new placeholder varables for full translation
             // in the moment 1.3 placeholder names are supported
             $html_file = str_replace('{license_title}', _JLIST_FE_FILELIST_LICENSE_TITLE, $html_file);
             $html_file = str_replace('{price_title}', _JLIST_FE_FILELIST_PRICE_TITLE, $html_file);
             $html_file = str_replace('{language_title}', _JLIST_FE_FILELIST_LANGUAGE_TITLE, $html_file);
             $html_file = str_replace('{filesize_title}', _JLIST_FE_FILELIST_FILESIZE_TITLE, $html_file);
             $html_file = str_replace('{system_title}', _JLIST_FE_FILELIST_SYSTEM_TITLE, $html_file);
             $html_file = str_replace('{author_title}', _JLIST_FE_FILELIST_AUTHOR_TITLE, $html_file);
             $html_file = str_replace('{author_url_title}', _JLIST_FE_FILELIST_AUTHOR_URL_TITLE, $html_file);
             $html_file = str_replace('{created_date_title}', _JLIST_FE_FILELIST_CREATED_DATE_TITLE, $html_file);
             $html_file = str_replace('{hits_title}', _JLIST_FE_FILELIST_HITS_TITLE, $html_file);
             $html_file = str_replace('{created_by_title}', _JLIST_FE_FILELIST_CREATED_BY_TITLE, $html_file);
             $html_file = str_replace('{modified_by_title}', _JLIST_FE_FILELIST_MODIFIED_BY_TITLE, $html_file);
             $html_file = str_replace('{modified_date_title}', _JLIST_FE_FILELIST_MODIFIED_DATE_TITLE, $html_file);
            
            // titel als link zur detailseite
            $titel_link = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=view.download&cid='.$files[$i]->file_id);
            $titel_link_text = '<a href="'.$titel_link.'">'.$files[$i]->file_title.'</a>';
            $detail_link_text = '<a href="'.$titel_link.'">'._JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS.'</a>';

            // Symbol anzeigen - auch als url
            if ($files[$i]->file_pic != '' ) {
                 $fpicsize = $jlistConfig['file.pic.size'];
                 $filepic = '<a href="'.$titel_link.'">'.'<img src="images/jdownloads/fileimages/'.$files[$i]->file_pic.'" align="top" width="'.$fpicsize.'" height="'.$fpicsize.'" border="0" alt="" /> </a>';
            } else {
                 $filepic = '';
            }
            $html_file = str_replace('{file_pic}',$filepic, $html_file);
            
            // link zu details am ende
            $html_file = str_replace('{link_to_details}',$detail_link_text, $html_file);
            
            $html_file = str_replace('{file_title}', $titel_link_text, $html_file);
        
        	if ($files[$i]->release == '' ) {
                $html_file = str_replace('{release}', '', $html_file);
            } else {
                $html_file = str_replace('{release}',_JLIST_FRONTEND_VERSION_TITLE.$files[$i]->release, $html_file);
            }
            // thumbnail
            if ($files[$i]->thumbnail != ''){
               $thumbnail =  $mosConfig_live_site.'/images/jdownloads/screenshots/thumbnails/'.$files[$i]->thumbnail; 
               $screenshot = $mosConfig_live_site.'/images/jdownloads/screenshots/'.$files[$i]->thumbnail; 
               $html_file = str_replace('{thumbnail}', $thumbnail, $html_file);
               $html_file = str_replace('{screenshot}', $screenshot, $html_file);
               $html_file = str_replace('{screenshot_end}', '', $html_file);
               $html_file = str_replace('{screenshot_begin}', '', $html_file); 
            } else { 
               if ($jlistConfig["thumbnail.view.placeholder.in.lists"]) {
                   $thumbnail = $mosConfig_live_site.'/images/jdownloads/screenshots/thumbnails/no_pic.gif';
                   $screenshot = $mosConfig_live_site.'/images/jdownloads/screenshots/no_pic.gif';
                   $html_file = str_replace('{thumbnail}', $thumbnail, $html_file);
                   $html_file = str_replace('{screenshot}', $screenshot, $html_file);    
                   $html_file = str_replace('{screenshot_end}', '', $html_file);
                   $html_file = str_replace('{screenshot_begin}', '', $html_file);
               } else {    
                   if ($pos_end = strpos($html_file, '{screenshot_end}')){
                        $pos_beg = strpos($html_file, '{screenshot_begin}');
                        $html_file = substr_replace($html_file, '', $pos_beg, ($pos_end - $pos_beg) + 16);
                   } 
               }    
            }  
                
            $html_file = str_replace('{description}', $files[$i]->description, $html_file);

            // pics for: new file / hot file / updated
            $hotpic = '<img src="'.$mosConfig_live_site.'/images/jdownloads/hotimages/'.$jlistConfig['picname.is.file.hot'].'"/>';
            $newpic = '<img src="'.$mosConfig_live_site.'/images/jdownloads/newimages/'.$jlistConfig['picname.is.file.new'].'"/>';
            $updatepic = '<img src="'.$mosConfig_live_site.'/images/jdownloads/updimages/'.$jlistConfig['picname.is.file.updated'].'"/>';

            if ($jlistConfig['loads.is.file.hot'] > 0 && $files[$i]->downloads >= $jlistConfig['loads.is.file.hot'] ){
                $html_file = str_replace('{pic_is_hot}', $hotpic, $html_file);
            } else {    
                $html_file = str_replace('{pic_is_hot}', '', $html_file);
            }
    
            // berechnung für NEW
            $tage_diff = DatumsDifferenz_JD(date('Y-m-d H:m:s'), $files[$i]->date_added);
            if ($jlistConfig['days.is.file.new'] > 0 && $tage_diff <= $jlistConfig['days.is.file.new']){
                $html_file = str_replace('{pic_is_new}', $newpic, $html_file);
            } else {    
                $html_file = str_replace('{pic_is_new}', '', $html_file);
            }
            
            // berechnung für UPDATED
            // view only when in download is set it to updated active
            if ($files[$i]->update_active) {
                $tage_diff = DatumsDifferenz_JD(date('Y-m-d H:m:s'), $files[$i]->modified_date);
                if ($jlistConfig['days.is.file.updated'] > 0 && $tage_diff >= 0 && $tage_diff <= $jlistConfig['days.is.file.updated']){
                    $html_file = str_replace('{pic_is_updated}', $updatepic, $html_file);
                } else {    
                    $html_file = str_replace('{pic_is_updated}', '', $html_file);
                }
            } else {
                $html_file = str_replace('{pic_is_updated}', '', $html_file);
            }    

            // get license data and build link
            $lic = array();
            $database->setQuery('SELECT * from #__jdownloads_license WHERE id = '.$files[$i]->license);
            $database->loadObject( $lic );
            $lic_data = '';
            if (!$lic->license_url == '') {
                $lic_data = $pic_license.'<a href="'.$lic->license_url.'" target="_blank" title="'._JLIST_FRONTEND_MINI_ICON_ALT_LICENCE.'">'.$lic->license_title.'</a> '.$extern_url_pic;
            } else {
                if (!$lic->license_title == '') {
                     if (!$lic->license_text == '') {
                          $lic_data = $pic_license.$lic->license_title;
                          $lic_data .= mosToolTip($lic->license_text, $lic->license_title);
                     } else {
                          $lic_data = $pic_license.$lic->license_title;
                     }
                } else {
                     $lic_data = '';
                }
            }
            $html_file = str_replace('{license}',$lic_data, $html_file);
            $html_file = str_replace('{license_text}',$lic_data, $html_file);
            
            // checkboxen nur anzeigen wenn user hat zugang und checkbox in layout aktiviert ( = 0 !! )
            if ( $my->gid >= $access[1] && $jlistTemplates[2][0]->checkbox_off == 0 ) {
                 $html_file = str_replace('{checkbox_list}',$checkbox_list, $html_file);
            } else {
                 $html_file = str_replace('{checkbox_list}','', $html_file);
            }

			$html_file = str_replace('{cat_id}', $files[$i]->cat_id, $html_file);
			
            if (!$files[$i]->size == '') {
                $html_file = str_replace('{size}', $pic_size.$files[$i]->size, $html_file);
                $html_file = str_replace('{filesize_value}', $pic_size.$files[$i]->size, $html_file);
            } else {
                $html_file = str_replace('{size}', '', $html_file);
                $html_file = str_replace('{filesize_value}', '', $html_file);
            }
            
            if (!$files[$i]->price == '') {
                $html_file = str_replace('{price_value}', $pic_price.$files[$i]->price, $html_file);
            } else {
                $html_file = str_replace('{price_value}', '', $html_file);
            }

            if (!$files[$i]->date_added == '') {
                 $date_data = $pic_date.substr(mosFormatDate($files[$i]->date_added, $jlistConfig['global.datetime'], $offset = NULL),0,10);
            } else {
                 $date_data = '';
            }
			$html_file = str_replace('{date_added}',$date_data, $html_file);
            $html_file = str_replace('{created_date_value}',$date_data, $html_file);
            
            $html_file = str_replace('{created_by_value}',$files[$i]->created_by, $html_file);
            $html_file = str_replace('{modified_by_value}',$files[$i]->modified_by, $html_file);
            if ($files[$i]->modified_date != '0000-00-00 00:00:00') {
                $modified_data = $pic_date.substr(mosFormatDate($files[$i]->modified_date, $jlistConfig['global.datetime'], $offset = NULL),0,10);
            } else {
                $modified_data = '';
            }
            $html_file = str_replace('{modified_date_value}',$modified_data, $html_file);

            // only view download-url when user has corect access level
            if ($my->gid >= $access[1]) {
                
                // direct download ohne zusammenfassung?
                if ($jlistConfig['direct.download'] == '0'){
                    $download_link = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=summary&cid='.$files[$i]->file_id.'&catid='.$files[$i]->cat_id); 
                } else {
                    $download_link = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=finish&cid='.$files[$i]->file_id.'&catid='.$files[$i]->cat_id); 
                }
                                     
                 $download_link_text = '<a href="'.$download_link.'">'._JLIST_LINKTEXT_DOWNLOAD_URL.'</a>';
				 $html_file = str_replace('{url_download}',$pic_download.$download_link_text, $html_file);
			
                // mirrors
                if ($files[$i]->mirror_1) {
                    $mirror1_link = '<a href="'.$download_link.'&m=1">'._JLIST_FRONTEND_MIRROR_URL_TITLE_1.'</a>';
                    $html_file = str_replace('{mirror_1}', $mirror1_link, $html_file);
                } else {
                    $html_file = str_replace('{mirror_1}', '', $html_file);
                }
                if ($files[$i]->mirror_2) {
                    $mirror2_link = '<a href="'.$download_link.'&m=2">'._JLIST_FRONTEND_MIRROR_URL_TITLE_2.'</a>';
                    $html_file = str_replace('{mirror_2}', $mirror2_link, $html_file);
                } else {
                    $html_file = str_replace('{mirror_2}', '', $html_file);
                }            
            } else {
			     $html_file = str_replace('{url_download}', '', $html_file);
                 $html_file = str_replace('{mirror_1}', '', $html_file); 
                 $html_file = str_replace('{mirror_2}', '', $html_file); 
            }
            
            // build website url
            if (!$files[$i]->url_home == '') {
                 if (strpos($files[$i]->url_home, 'http://') !== false) {    
                     $html_file = str_replace('{url_home}',$pic_website.'<a href="'.$files[$i]->url_home.'" target="_blank" title="'._JLIST_FRONTEND_HOMEPAGE.'">'._JLIST_FRONTEND_HOMEPAGE.'</a> '.$extern_url_pic, $html_file);
                     $html_file = str_replace('{author_url_text} ',$pic_website.'<a href="'.$files[$i]->url_home.'" target="_blank" title="'._JLIST_FRONTEND_HOMEPAGE.'">'._JLIST_FRONTEND_HOMEPAGE.'</a> '.$extern_url_pic, $html_file);
                 } else {
                     $html_file = str_replace('{url_home}',$pic_website.'<a href="http://'.$files[$i]->url_home.'" target="_blank" title="'._JLIST_FRONTEND_HOMEPAGE.'">'._JLIST_FRONTEND_HOMEPAGE.'</a> '.$extern_url_pic, $html_file);
                     $html_file = str_replace('{author_url_text}',$pic_website.'<a href="http://'.$files[$i]->url_home.'" target="_blank" title="'._JLIST_FRONTEND_HOMEPAGE.'">'._JLIST_FRONTEND_HOMEPAGE.'</a> '.$extern_url_pic, $html_file);
                 }    
            } else {
                $html_file = str_replace('{url_home}', '', $html_file);
                $html_file = str_replace('{author_url_text}', '', $html_file);
            }

            // encode is link a mail
            if (strpos($files[$i]->url_author, '@') && $jlistConfig['mail.cloaking']){
                if (!$files[$i]->author) { 
                    $mail_encode = mosHTML::emailcloaking($files[$i]->url_author);
                } else {
                    $mail_encode = mosHTML::emailcloaking($files[$i]->url_author, true, $files[$i]->author, false);
                }        
            }
                    
            // build author link
            if ($files[$i]->author <> ''){
                if ($files[$i]->url_author <> '') {
                    if ($mail_encode) {
                        $link_author = $pic_author.' '.$mail_encode;
                    } else {
                        if (strpos($files[$i]->url_author, 'http://') !== false) {    
                            $link_author = $pic_author.'<a href="'.$files[$i]->url_author.'" target="_blank">'.$files[$i]->author.'</a> '.$extern_url_pic;
                        } else {
                            $link_author = $pic_author.'<a href="http://'.$files[$i]->url_author.'" target="_blank">'.$files[$i]->author.'</a> '.$extern_url_pic;
                        }        
                    }
                    $html_file = str_replace('{author}',$link_author, $html_file);
                    $html_file = str_replace('{author_text}',$link_author.' '.$extern_url_pic, $html_file);
                    $html_file = str_replace('{url_author}', '', $html_file);
                } else {
                    $link_author = $pic_author.$files[$i]->author;
                    $html_file = str_replace('{author}',$link_author, $html_file);
                    $html_file = str_replace('{author_text}',$link_author, $html_file);
                    $html_file = str_replace('{url_author}', '', $html_file);
                }
            } else {
                    $html_file = str_replace('{url_author}', $pic_author.$files[$i]->url_author, $html_file);
        	        $html_file = str_replace('{author}','', $html_file);
                    $html_file = str_replace('{author_text}','', $html_file); 
            }

            // set system value
            $file_sys_values = explode(',' , $jlistConfig['system.list']);
			if ($files[$i]->system == 0 ) {
                $html_file = str_replace('{system}', '', $html_file);
                 $html_file = str_replace('{system_text}', '', $html_file); 
            } else {
                $html_file = str_replace('{system}', $pic_system.$file_sys_values[$files[$i]->system], $html_file);
                $html_file = str_replace('{system_text}', $pic_system.$file_sys_values[$files[$i]->system], $html_file);
            }

            // set language value
            $file_lang_values = explode(',' , $jlistConfig['language.list']);
			if ($files[$i]->language == 0 ) {
                $html_file = str_replace('{language}', '', $html_file);
                $html_file = str_replace('{language_text}', '', $html_file);
            } else {
                $html_file = str_replace('{language}', $pic_language.$file_lang_values[$files[$i]->language], $html_file);
                $html_file = str_replace('{language_text}', $pic_language.$file_lang_values[$files[$i]->language], $html_file);
            }

			$html_file = str_replace('{downloads}',$pic_downloads.$files[$i]->downloads, $html_file);
            $html_file = str_replace('{hits_value}',$pic_downloads.$files[$i]->downloads, $html_file);
			$html_file = str_replace('{ordering}',$files[$i]->ordering, $html_file);
			$html_file = str_replace('{published}',$files[$i]->published, $html_file);

			$html_files .= $html_file;
    	}

		// nur anzeigen wenn files vorhanden
        if (!empty($files)) {
            $html_cat = str_replace('{files}',$html_files,$html_cat);
        } else {
            $no_files_msg = '<br /><b> '._JLIST_FRONTEND_NOFILES.'<br /><br /></b>';            
            $html_cat = str_replace('{files}', $no_files_msg, $html_cat);
        }    

        // top checkbox nur anzeigen wenn user hat zugang
        if ($my->gid >= $access[1]) {
            $checkbox_top = '<tr><form name="down'.$formid.'" action="'.$mosConfig_live_site.'/index.php?option=com_jdownloads&Itemid='.$Itemid.'&task=summary'.'
                    " onsubmit="return pruefen('.$formid.',\''._JLIST_JAVASCRIPT_TEXT_1.'\',\''._JLIST_JAVASCRIPT_TEXT_2.'\');" method="post">
                    <td width="90%" align="right">'.$jlistConfig['checkbox.top.text'].'</td>
                    <td width="10%" align="center"><input type="checkbox" name="toggle"
                    value="" onclick="checkAlle('.$i.','.$formid.');" /></td></tr>';
            
            // top checkboxen nur anzeigen wenn im layout aktiviert
            if ($jlistTemplates[2][0]->checkbox_off == 0 && !empty($files)) {
               $html_cat = str_replace('{checkbox_top}', $checkbox_top, $html_cat);
            } else {
               $html_cat = str_replace('{checkbox_top}', '', $html_cat);
            }   
        } else {
            if ($jlistTemplates[2][0]->checkbox_off == 0){
                $html_cat = str_replace('{checkbox_top}', '<b>'._JLIST_FRONTEND_CAT_ACCESS_REGGED.'</b>', $html_cat);
            } else {
                $html_cat = str_replace('{checkbox_top}', '', $html_cat);
            }        
        }
                
        $form_hidden = '<input type="hidden" name="boxchecked" value=""/> ';
        $html_cat = str_replace('{form_hidden}', $form_hidden, $html_cat);
        $html_cat .= '</form>';

        $html_cat .= '<script type="text/javascript" src="'.$mosConfig_live_site.'/includes/js/overlib_mini.js"></script>';

        // button nur anzeigen wenn checkboxen aktiviert
        $button = '<input class="button" type="submit" name="weiter" value="'._JLIST_FORM_BUTTON_TEXT.'"/>';
        
        // only view submit button when user has corect access level
        if ($my->gid >= $access[1] && $jlistTemplates[2][0]->checkbox_off == 0 && !empty($files)) {
            $html_cat = str_replace('{form_button}', $button, $html_cat);
        } else {
            $html_cat = str_replace('{form_button}', '', $html_cat);
        }
    	$footer =  makeFooter(true, false, true, $sum_pages, $limit, $limitstart, $site_aktuell); 
        $html_cat .= $footer;
        
        if ( !$jlistConfig['offline'] ) {
            echo $html_cat;
        } else {
            if ($my->gid == 2) {
                echo _JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT;
                echo $html_cat;
            } else {
                $html_off = '<br /><br />'.$jlistConfig['offline.text'].'<br /><br />';
                $html_off .= $footer;
                echo $html_off;
            }
        }    
}


/* #################################################################################
/  Einzelnen Download anzeigen mit Detail Infos
/  ################################################################################# */
function showDownload($option, $file, $cat, $access){
    global $database, $jlistConfig, $jlistTemplates, $mosConfig_absolute_path, $mosConfig_live_site, $Itemid, $my, $mainframe;

    $mainframe->setPageTitle( $jlistConfig['jd.header.title'].' - '.$cat->cat_title.' - '.$file->file_title );
    $mainframe->appendMetaTag( 'keywords' , strip_tags($file->metakey ));  
    $mainframe->appendMetaTag( 'description' , strip_tags($file->metadesc)); 

    $html_file = makeHeader($html_file, false, false, false, 0, true, false, false, false, false, 0, 0, 0, 0, 0);
    echo $html_file;        
    
    $html_file = str_replace('{price_value}',$file->price, $jlistTemplates[5][0]->template_text);
    // titel einsetzen
    $html_file = str_replace('{pathway_text}', _JLIST_FE_DETAILS_PATHWAY_TEXT, $html_file);
    $html_file = str_replace('{details_block_title}', _JLIST_FE_DETAILS_DATA_BLOCK_TITLE, $html_file);
    $html_file = str_replace('{license_title}', _JLIST_FE_DETAILS_LICENSE_TITLE, $html_file);
    $html_file = str_replace('{price_title}', _JLIST_FE_DETAILS_PRICE_TITLE, $html_file);
    $html_file = str_replace('{language_title}', _JLIST_FE_DETAILS_LANGUAGE_TITLE, $html_file);
    $html_file = str_replace('{filesize_title}', _JLIST_FE_DETAILS_FILESIZE_TITLE, $html_file);
    $html_file = str_replace('{system_title}', _JLIST_FE_DETAILS_SYSTEM_TITLE, $html_file);
    $html_file = str_replace('{author_title}', _JLIST_FE_DETAILS_AUTHOR_TITLE, $html_file);
    $html_file = str_replace('{author_url_title}', _JLIST_FE_DETAILS_AUTHOR_URL_TITLE, $html_file);
    $html_file = str_replace('{created_date_title}', _JLIST_FE_DETAILS_CREATED_DATE_TITLE, $html_file);
    $html_file = str_replace('{hits_title}', _JLIST_FE_DETAILS_HITS_TITLE, $html_file);
    $html_file = str_replace('{created_by_title}', _JLIST_FE_DETAILS_CREATED_BY_TITLE, $html_file);
    $html_file = str_replace('{modified_by_title}', _JLIST_FE_DETAILS_MODIFIED_BY_TITLE, $html_file);
    $html_file = str_replace('{modified_date_title}', _JLIST_FE_DETAILS_MODIFIED_DATE_TITLE, $html_file);
    
    // a little pic for extern links
    $extern_url_pic = '<img src="'.$mosConfig_live_site.'/components/com_jdownloads/images/link_extern.gif" />';
     
    // für mosToolTip
    mosCommonHTML::loadOverlib();
    
    // get pic
    if ($file->file_pic != '' ) {
        $fpicsize = $jlistConfig['file.pic.size'];
        $filepic = '<img src="images/jdownloads/fileimages/'.$file->file_pic.'" align="top" width="'.$fpicsize.'" height="'.$fpicsize.'" border="0" alt="" /> ';
    } else {
        $filepic = '';
    }
    $html_file = str_replace('{file_pic}',$filepic, $html_file);
    $html_file = str_replace('{file_title}', $file->file_title.' '.$file->release, $html_file);
    // thumbnail
    if ($file->thumbnail != ''){
       $thumbnail = $mosConfig_live_site.'/images/jdownloads/screenshots/thumbnails/'.$file->thumbnail;
       $screenshot = $mosConfig_live_site.'/images/jdownloads/screenshots/'.$file->thumbnail; 
       $html_file = str_replace('{thumbnail}', $thumbnail, $html_file);
       $html_file = str_replace('{screenshot}', $screenshot, $html_file);
       $html_file = str_replace('{screenshot_end}', '', $html_file);
       $html_file = str_replace('{screenshot_begin}', '', $html_file);
    } else {
       if ($jlistConfig["thumbnail.view.placeholder"]) {
           $thumbnail = $mosConfig_live_site.'/images/jdownloads/screenshots/thumbnails/no_pic.gif';
           $screenshot = $mosConfig_live_site.'/images/jdownloads/screenshots/no_pic.gif';
           $html_file = str_replace('{thumbnail}', $thumbnail, $html_file);
           $html_file = str_replace('{screenshot}', $screenshot, $html_file);
           $html_file = str_replace('{screenshot_end}', '', $html_file);
           $html_file = str_replace('{screenshot_begin}', '', $html_file); 
       } else { 
           if ($pos_end = strpos($html_file, '{screenshot_end}')){
                $pos_beg = strpos($html_file, '{screenshot_begin}');
                $html_file = substr_replace($html_file, '', $pos_beg, ($pos_end - $pos_beg) + 16);
           }
       }
    }  
    // description
    if (!$file->description_long){
        $html_file = str_replace('{description_long}',$file->description, $html_file);
    } else {
        $html_file = str_replace('{description_long}',$file->description_long, $html_file);
    }    

    // pics for: new file / hot file /updated
    $hotpic = '<img src="'.$mosConfig_live_site.'/images/jdownloads/hotimages/'.$jlistConfig['picname.is.file.hot'].'" />';
    $newpic = '<img src="'.$mosConfig_live_site.'/images/jdownloads/newimages/'.$jlistConfig['picname.is.file.new'].'" />';
    $updatepic = '<img src="'.$mosConfig_live_site.'/images/jdownloads/updimages/'.$jlistConfig['picname.is.file.updated'].'"/>';

    // berechnung für HOT
    if ($jlistConfig['loads.is.file.hot'] > 0 && $file->downloads >= $jlistConfig['loads.is.file.hot'] ){
        $html_file = str_replace('{pic_is_hot}', $hotpic, $html_file);
    } else {    
        $html_file = str_replace('{pic_is_hot}', '', $html_file);
    }
    
    // berechnung für NEW
    $tage_diff = DatumsDifferenz_JD(date('Y-m-d H:m:s'), $file->date_added);
    if ($jlistConfig['days.is.file.new'] > 0 && $tage_diff <= $jlistConfig['days.is.file.new']){
        $html_file = str_replace('{pic_is_new}', $newpic, $html_file);
    } else {    
        $html_file = str_replace('{pic_is_new}', '', $html_file);
    }
    
    // berechnung für UPDATED
    // view only when in download is set it to updated active
    if ($file->update_active) {
        $tage_diff = DatumsDifferenz_JD(date('Y-m-d H:m:s'), $file->modified_date);
        if ($jlistConfig['days.is.file.updated'] > 0 && $tage_diff >= 0 && $tage_diff <= $jlistConfig['days.is.file.updated']){
            $html_file = str_replace('{pic_is_updated}', $updatepic, $html_file);
        } else {    
            $html_file = str_replace('{pic_is_updated}', '', $html_file);
        }
    } else {
       $html_file = str_replace('{pic_is_updated}', '', $html_file);
    }    

    // get license data and build link
    $lic = array();
    $database->setQuery('SELECT * from #__jdownloads_license WHERE id = '.$file->license);
    $database->loadObject( $lic );
    $lic_data = '';
    if (!$lic->license_url == '') {
         $lic_data = $pic_license.'<a href="'.$lic->license_url.'" target="_blank" title="'._JLIST_FRONTEND_MINI_ICON_ALT_LICENCE.'">'.$lic->license_title.'</a> '.$extern_url_pic;
    } else {
        if (!$lic->license_title == '') {
             if (!$lic->license_text == '') {
                  $lic_data = $pic_license.$lic->license_title;
                  $lic_data .= mosToolTip($lic->license_text, $lic->license_title);
             } else {
                  $lic_data = $pic_license.$lic->license_title;
             }
        } else {
            $lic_data = '';
        }
    }
                    
    $html_file = str_replace('{license_text}',$lic_data, $html_file);
    $html_file = str_replace('{filesize_value}',$file->size, $html_file);
    $html_file = str_replace('{created_by_value}',$file->created_by, $html_file);
    $html_file = str_replace('{modified_by_value}',$file->modified_by, $html_file);
    if ($file->modified_date != '0000-00-00 00:00:00') {
        $modified_data = $pic_date.substr(mosFormatDate($file->modified_date, $jlistConfig['global.datetime'], $offset = NULL),0,10);
    } else {
        $modified_data = '';
    }
    $html_file = str_replace('{modified_date_value}',$modified_data, $html_file);
    
    // funktion zur berechnung entfernt - hier nur falls vorhanden platzhalter entfernen
    $html_file = str_replace('{download_time}','', $html_file);    
        
    if (!$file->date_added != '0000-00-00 00:00:00') {
        $date_data = $pic_date.substr(mosFormatDate($file->date_added, $jlistConfig['global.datetime'], $offset = NULL),0,10);
    } else {
        $date_data = '';
    }
    $html_file = str_replace('{created_date_value}',$date_data, $html_file);

    // only view download link when user has corect access level
    if ($my->gid >= $access[1]) {
        // direct download ohne zusammenfassung?
        if ($jlistConfig['direct.download'] == '0'){ 
            $download_link = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=summary&cid='.$file->file_id.'&catid='.$file->cat_id);
            
        } else {
            $download_link = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=finish&cid='.$file->file_id.'&catid='.$file->cat_id);
        }
        
        $download_link_text = '<a href="'.$download_link.'"><img src="images/jdownloads/downloadimages/'.$jlistConfig['download.pic.details'].'" border="0" alt="'._JLIST_LINKTEXT_DOWNLOAD_URL.'"/></a>';
        $html_file = str_replace('{url_download}',$pic_download.$download_link_text, $html_file);
        
        // mirrors
        if ($file->mirror_1) {
            $mirror1_link = '<a href="'.$download_link.'&m=1"><img src="images/jdownloads/downloadimages/'.$jlistConfig['download.pic.mirror_1'].'" border="0" alt="'._JLIST_FRONTEND_MIRROR_URL_TITLE_1.'"/></a>';
            $html_file = str_replace('{mirror_1}', $mirror1_link, $html_file);
        } else {
            $html_file = str_replace('{mirror_1}', '', $html_file);
        }
        if ($file->mirror_2) {
            $mirror2_link = '<a href="'.$download_link.'&m=2"><img src="images/jdownloads/downloadimages/'.$jlistConfig['download.pic.mirror_2'].'" border="0" alt="'._JLIST_FRONTEND_MIRROR_URL_TITLE_2.'"/></a>';
            $html_file = str_replace('{mirror_2}', $mirror2_link, $html_file);
        } else {
            $html_file = str_replace('{mirror_2}', '', $html_file);
        }            
    } else {
        //Infotext kein zugriff 
        $regg = str_replace('<br />', '', _JLIST_FRONTEND_CAT_ACCESS_REGGED); 
        $html_file = str_replace('{url_download}', $regg, $html_file);
        $html_file = str_replace('{mirror_1}', '', $html_file); 
        $html_file = str_replace('{mirror_2}', '', $html_file); 
    }    
    

    // build website url
    if (!$file->url_home == '') {
         if (strpos($file->url_home, 'http://') !== false) {    
             $html_file = str_replace('{author_url_text}',$pic_website.'<a href="'.$file->url_home.'" target="_blank" title="'._JLIST_FRONTEND_HOMEPAGE.'">'._JLIST_FRONTEND_HOMEPAGE.'</a> '.$extern_url_pic, $html_file);
         } else {
             $html_file = str_replace('{author_url_text}',$pic_website.'<a href="http://'.$file->url_home.'" target="_blank" title="'._JLIST_FRONTEND_HOMEPAGE.'">'._JLIST_FRONTEND_HOMEPAGE.'</a> '.$extern_url_pic, $html_file);
         }    
    } else {
        $html_file = str_replace('{author_url_text}', '', $html_file);
    }

    // encode is link a mail
    $link_author = '';
    if (strpos($file->url_author, '@') && $jlistConfig['mail.cloaking']){
        if (!$file->author) { 
            $mail_encode = mosHTML::emailcloaking($file->url_author);
        } else {
            $mail_encode = mosHTML::emailcloaking($file->url_author, true, $file->author, false);
        }        
    }
                    
    // build author link
    if ($file->author <> ''){
         if ($file->url_author <> '') {
              if ($mail_encode) {
                  $link_author = $mail_encode;
              } else {
                  if (strpos($file->url_author, 'http://') !== false) {
                     $link_author = $pic_author.'<a href="'.$file->url_author.'" target="_blank">'.$file->author.'</a> '.$extern_url_pic;
                  } else {
                     $link_author = $pic_author.'<a href="http://'.$file->url_author.'" target="_blank">'.$file->author.'</a>  '.$extern_url_pic;
                  }        
              }
              $html_file = str_replace('{author_text}',$link_author.' '.$extern_url_pic, $html_file);
              $html_file = str_replace('{url_author}', '', $html_file);
         } else {
              $link_author = $pic_author.$file->author;
              $html_file = str_replace('{author_text}',$link_author, $html_file);
              $html_file = str_replace('{url_author}', '', $html_file);
         }
    } else {
        $html_file = str_replace('{url_author}', $pic_author.$file->url_author, $html_file);
        $html_file = str_replace('{author_text}','', $html_file);
    }

    // set system value
    $file_sys_values = explode(',' , $jlistConfig['system.list']);
    if ($file->system == 0 ) {
         $html_file = str_replace('{system_text}', '', $html_file);
    } else {
         $html_file = str_replace('{system_text}', $pic_system.$file_sys_values[$file->system], $html_file);
    }

    // set language value
    $file_lang_values = explode(',' , $jlistConfig['language.list']);
    if ($file->language == 0 ) {
        $html_file = str_replace('{language_text}', '', $html_file);
    } else {
        $html_file = str_replace('{language_text}', $pic_language.$file_lang_values[$file->language], $html_file);
    }
    $html_file = str_replace('{hits_value}',$file->downloads, $html_file);
         
    // Option for JComments integration
    if ($jlistConfig['jcomments.active']){
        $jcomments = $mainframe->getCfg('absolute_path') . '/components/com_jcomments/jcomments.php';
        if (file_exists($jcomments)) {
            require_once($jcomments);
            $obj_id = $file->file_id;
            $obj_title = $file->file_title;
            $html_file .= JComments::showComments($obj_id, 'com_jdownloads', $obj_title);
        }    
    } 
    
    
    $footer = makeFooter(true, false, false, $sum_pages, $limit, $limitstart, $site_aktuell);  
    $html_file .= $footer;
    
    if ( !$jlistConfig['offline'] ) {
            echo $html_file;
        } else {
            if ($my->gid == 2) {
                echo _JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT;
                echo $html_file;
            } else {
                $html_off = '<br /><br />'.$jlistConfig['offline.text'].'<br /><br />';
                $html_off .= $footer;
                echo $html_off;
            }
        }
}    

/* #################################################################################
/  Zusammenfassung anzeigen mit link zur Downloadseite
/  ################################################################################# */
function Summary($option, $marked_files_id, $mail_files, $filename, $download_link, $del_ok, $extern_site){
    global $database, $jlistConfig, $jlistTemplates, $mosConfig_live_site, $mosConfig_absolute_path, $my, $Itemid, $mainframe;
    $mainframe->setPageTitle( $jlistConfig['jd.header.title'].' - '._JLIST_BACKEND_TEMP_TYP3 ); 
    $html_sum = makeHeader($html_sum, false, false, false, 0, false, false, false, true, false, 0, $sum_pages, $list_per_page, $total, $list_start);
    echo $html_sum;
        // build output from template
        $html_sum = $jlistTemplates[3][0]->template_text;
        $html_sum = str_replace('{download_liste}', $mail_files, $html_sum);
        $html_sum = str_replace('{title_text}', _JLIST_FE_SUMMARY_PAGE_TITLE_TEXT, $html_sum);
        $html_sum = str_replace('{license_note}', _JLIST_FE_SUMMARY_PAGE_LICENSE_NOTE, $html_sum);
        
        // summary pic
        $sum_size = $jlistConfig['cat.pic.size'];
        $sumpic = '<img src="components/com_jdownloads/images/summary.png" width="'.$sum_size.'" height="'.$sum_size.'" border="0" alt="" /> ';
        $html_sum = str_replace('{summary_pic}', $sumpic, $html_sum);

        if (count($marked_files_id) > 1) {
           $html_sum = str_replace('{download_link}', '<div style="text-align:center"><a href="'.$download_link.'" target="_self"  title="'._JLIST_LINKTEXT_ZIP.'"><img src="images/jdownloads/downloadimages/'.$jlistConfig['download.pic.details'].'" border="0" alt="'._JLIST_LINKTEXT_ZIP.'" /></a></div>', $html_sum);
           $html_sum = str_replace('{external_download_info}', '', $html_sum);
        } else {
            if ($extern_site){
                // link target=_blank
                $link = '<div style="text-align:center"><a href="'.$download_link.'" target="_blank" title="'._JLIST_LINKTEXT_ZIP.'" ><img src="images/jdownloads/downloadimages/'.$jlistConfig['download.pic.details'].'" border="0" alt="'._JLIST_LINKTEXT_ZIP.'" /></a></div>'; 
                $html_sum = str_replace('{download_link}', $link, $html_sum);
                // add info about extern file link
                $html_sum = str_replace('{external_download_info}', _JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO, $html_sum);
           } else {    
                $link = '<div style="text-align:center"><a href="'.$download_link.'" target="_self" title="'._JLIST_LINKTEXT_ZIP.'" ><img src="images/jdownloads/downloadimages/'.$jlistConfig['download.pic.details'].'" border="0" alt="'._JLIST_LINKTEXT_ZIP.'" /></a></div>';
                $html_sum = str_replace('{download_link}', $link, $html_sum);
                $html_sum = str_replace('{external_download_info}', '', $html_sum);
           }
        }
		$footer = makeFooter(true, false, false, 0, 0, 0, 0);  
        $html_sum .= $footer;
    echo $html_sum;
	}

// view frontend upload form
function viewUpload($option, $task ){
	global $database, $mosConfig_absolute_path, $jlistConfig, $Itemid, $my, $mainframe;
    
     $mainframe->setPageTitle( $jlistConfig['jd.header.title'].' - '._JLIST_FRONTEND_UPLOAD_PAGE_TITLE );   
    // variablen vorbelegen
	$image1 = '<img src="components/com_jdownloads/images/';
	$image2 = '" width="18" height="18" border="0" alt="" align="top" />';
	$upload_stop_pic = '<img src="components/com_jdownloads/images/upload_stop.png" width="24" height="24" border="0" alt="" />';
	$upload_ok_pic = '<img src="components/com_jdownloads/images/upload_ok.png" width="24" height="24" border="0" alt="" />';	
	
	$max_file_size = $jlistConfig['allowed.upload.file.size'] * 1024 ;
	$name_pic 		 =	'form_no_value.png';
	$mail_pic 		 =	'form_no_value.png';
	$filetitle_pic 	 =	'form_no_value.png';
	$catlist_pic	 =	'form_no_value.png';
	$file_upload_pic =	'form_no_value.png';
	$description_pic =	'form_no_value.png';
	
    $html_form = makeHeader($html_form, false, false, false, 0, false, false, true, false, false, 0, 0, 0, 0, 0);
	echo $html_form;
	$html_form = '';  
	
    $footer = makeFooter(true, false, false, 0, 0, 0, 0);  

	// Zugriffskontrolle	
    if ($my->gid < (int)$jlistConfig['upload.access']){
		if ((int)$jlistConfig['upload.access'] == 2 ) {
			$msg = '<div class="jd_div_content"><br />'._JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS.'<br /><br /></div>';
		} else {
			$msg = '<div class="jd_div_content"><br />'._JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED.'<br /><br /></div>';
		}
		$html_form .= '{msg}';
		$access = false;
	} else {
		$access= true;  
		// nur einfügen wenn access = true
		$html_form .= '<div class="jd_div_content"><br />'.$jlistConfig['upload.form.text'].'<br /></div>';
	}
		// Inhalte holen, falls vorhanden	
	if ($my->id > 0) {
       $name = $my->username;
	   $mail = $my->email;
	   $disabled = 'disabled="disabled"';
	   $name_pic =	'';
	   $mail_pic =	'';
    } else {
	   $name =	$database->getEscaped (mosGetParam( $_POST, 'name', '' ));
	   $mail =  $database->getEscaped (mosGetParam( $_POST, 'mail', '' ));
	   $disabled = '';	   	   
    }

	$author = 		$database->getEscaped (mosGetParam( $_POST, 'author', '' ));
	$author_url = 	$database->getEscaped (mosGetParam( $_POST, 'author_url', '' ));
	$filetitle =	$database->getEscaped (mosGetParam( $_POST, 'filetitle', '' ));
	$version =		$database->getEscaped (mosGetParam( $_POST, 'version', '' ));
    $price =        $database->getEscaped (mosGetParam( $_POST, "price", '' ));
	$catlist_sel =	$database->getEscaped (mosGetParam( $_POST, "catlist", '0' ));
    $license_sel =	$database->getEscaped (mosGetParam( $_POST, 'license', '0' ));
	$system_sel  =	$database->getEscaped (mosGetParam( $_POST, 'system', '0' ));
	$language_sel =	$database->getEscaped (mosGetParam( $_POST, 'language', '0' ));
	$description =	$database->getEscaped (mosGetParam( $_POST, 'description', '' ));
    $description_long = $database->getEscaped (mosGetParam( $_POST, 'description_long', '' ));	
    $file_upload  = mosGetParam($_FILES,'file_upload',array('tmp_name'=>''));
    $pic_upload  = mosGetParam($_FILES,'pic_upload',array('tmp_name'=>''));
		
	// ist gesendet?
    $sended = intval(mosGetParam( $_POST, 'send', 0 ));
	if ($sended == 1) { 
		$no_valid = 0; 
		if ($name != '') {
			$name_pic =	'';
		} else {
			$name_pic =	'form_no_value.png';
			$no_valid++; }		

		// einfacher mail check		
		if ($mail != '' && eregi("^[a-z0-9\._-]+@+[a-z0-9\._-]+\.+[a-z]{2,4}$", $mail)){
    		$mail_pic =	'';
		} else {
			$mail_pic =	'form_no_value.png';
			$mail = '';
			$no_valid++; }		

		if ($filetitle != '') {
			$filetitle_pic = '';
		} else {
			$filetitle_pic = 'form_no_value.png';
			$no_valid++; }		

		if ($catlist_sel != '0' ) {
			$catlist_pic = '';
		} else {
			$catlist_pic = 'form_no_value.png';
			$no_valid++; }		

		if ($file_upload['tmp_name'] != '') {
			$file_upload_pic = '';
		} else {
			$file_upload_pic = 'form_no_value.png';
			$no_valid++; }		

		if ($description != '') {
			$description_pic =	'';
		} else {
			$description_pic = 'form_no_value.png';
			$no_valid++; }		

				
		// wenn alles ok - daten speichern --------------------------------------
		if ($no_valid == 0) {
			$msg = '';
			
			// uploadverz. der kat holen
			$database->SetQuery("SELECT cat_dir FROM #__jdownloads_cats WHERE cat_id = '$catlist_sel'");
			$mark_catdir = $database->loadResult();

    		// eingabe inhalte bearbeiten
			$description = trim($description);
    		
			// erlaubte dateitypen?
	        $filetype = substr(strrchr($file_upload['name'], '.'), 1);
           	$file_types = trim($jlistConfig['allowed.upload.file.types']);
           	$file_types = str_replace(',', '|', $file_types);
           	if (!eregi( $file_types, $filetype )) {
           		$file_upload['tmp_name'] = '';
				$msg = '<div>'.$upload_stop_pic.'<font color="red"> '
				   		._JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE.
				   		'</font><br />&nbsp;</div>';
				$html_form = str_replace('{form}', '{msg}{form}', $html_form);	
           	}

			// erlaubte dateigrösse?
           	if ($file_upload['size'] > $max_file_size) {
           		$file_upload['tmp_name'] = '';
				$msg = '<div>'.$upload_stop_pic.'<font color="red"> '
				   		._JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE.
				   		'</font><br />&nbsp;</div>';
				$html_form = str_replace('{form}', '{msg}{form}', $html_form);	
           	}           	
            
            //pic upload bearbeiten
            $thumbnail = '';
            $pic_types = 'gif|jpg|png';
            if($pic_upload['tmp_name']!=''){
              $pictype = strtolower(substr(strrchr($pic_upload['name'],"."),1)); 
              if (eregi( $pictype, $pic_types )) {
                $pic_filename = str_replace(' ', '_', $pic_upload['name']);
                $target_path =  $mosConfig_absolute_path.'/images/jdownloads/screenshots/'.$pic_filename;
                if(@move_uploaded_file($pic_upload['tmp_name'], $target_path)) {
                     // set chmod
                     @chmod($target_path, 644);
                     // resize pic
                     create_new_thumb($target_path);
                     $thumbnail = basename($target_path);
                }      
              }             
            }
               		
			//datei upload bearbeiten
			if($file_upload['tmp_name']!=''){
          		$upload_dir = '/'.$jlistConfig['files.uploaddir'].'/'.$mark_catdir.'/';
           		$dir_and_filename = str_replace('/'.$jlistConfig['files.uploaddir'].'/', '', $upload_dir.$file_upload['name']);
				$target_path = $mosConfig_absolute_path.$upload_dir.$file_upload['name'];

		    	if(@move_uploaded_file($file_upload['tmp_name'], $target_path)) {
              		// get filesize
               		$size = fsize($target_path);
               		// get filedate
            		$date_added = mosCurrentDate('%Y-%m-%d %H:%M:%S');
					$url_download = basename($target_path);
					
					// auto publish ?
                    if ($jlistConfig['upload.auto.publish']){
                        $publish = 1;
                    } else {
                        $publish = 0;
                    } 
                    $filepic = $jlistConfig['file.pic.default.filename'];    
                    $database->setQuery("INSERT INTO #__jdownloads_files (`file_id`, `file_title`, `description`, `description_long`, `file_pic`, `thumbnail`, `price`, `release`, `language`, `system`, `license`, `url_license`, `size`, `date_added`, `url_download`, `url_home`, `author`, `url_author`, `created_by`, `created_mail`, `modified_by`, `modified_date`, `downloads`, `cat_id`, `ordering`, `published`, `checked_out`, `checked_out_time`) VALUES (NULL, '$filetitle', '$description', '$description_long', '$filepic', '$thumbnail', '$price', '$version', '$language_sel', '$system_sel', '$license_sel', '', '$size', '$date_added', '$url_download', '', '$author', '$author_url', '$name', '$mail', '', '0000-00-00 00:00:00', '0', '$catlist_sel', '0', '$publish', '0', '0000-00-00 00:00:00')");
		   	   		if (!$database->query()) {
						// fehler beim erstellen in DB	
						echo $database->stderr();
						exit;
					}					 
                    // alles OK!
                    if (!$msg) {
                        $msg = '<div>'.$upload_ok_pic.'<font color="green"> '
                               ._JLIST_FRONTEND_UPLOAD_OK.
                               '</font><br />&nbsp;</div>';
                               $html_form = str_replace('{form}', '{msg}{form}', $html_form);
                               // send email wenn aktiviert
                               if ($jlistConfig['send.mailto.option.upload']){
                                   sendMailUploads($name, $mail, $url_download, $filetitle, $description);   
                               }    
                    }
                } else {
					// fehler beim verschieben
					$msg = '<div>'.$upload_stop_pic.'<font color="red"> '
				   		._JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE.
				   		'</font><br />&nbsp;</div>';
					$html_form = str_replace('{form}', '{msg}{form}', $html_form);	
				}
		   	}

		// file saved upload end ------------------------------------------------------		
			
		} else {
			// fehlermeldung übergeben	
			$msg = '<div>'.$upload_stop_pic.'<font color="red"> '._JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE.'</font><br />&nbsp;</div>';
			$html_form = str_replace('{form}', '{msg}{form}', $html_form);
		}
	}

	// nur form einfügen wenn access = true
	if ($access) {
		 	
	// form anzeigen 
	$form = '<form name="uploadForm" id="uploadForm" action="'.$_SERVER["PHP_SELF"].'" method="post" enctype="multipart/form-data">
	<table class="jd_upload_form" border="0" cellpadding="0" cellspacing="5" width="99%">
        <tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_NAME.'
            </td>
            <td width="267" valign="middle">
                <input type="text" name="name" id="name" maxlength="60" size="40" '.$disabled.' value="'.$name.'">&nbsp;'.$image1.$name_pic.$image2.'
            </td>
        </tr>
        <tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_MAIL.'
            </td>
            <td width="267">
                <input type="text" name="mail" maxlength="60" size="40" '.$disabled.' value="'.$mail.'">&nbsp;'.$image1.$mail_pic.$image2.'
            </td>
        </tr>
		<tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR.'
            </td>
            <td width="267">
                <input type="text" name="author" id="author" maxlength="60" size="40 value="'.$author.'">
            </td>
        </tr>
        <tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL.'
            </td>
            <td width="267">
                <input type="text" name="author_url" maxlength="60" size="40"  value="'.$author_url.'">
            </td>
        </tr>

        <tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE.'
            </td>
            <td width="267">
                <input type="text" name="filetitle" maxlength="60" size="40" value="'.$filetitle.'">&nbsp;'.$image1.$filetitle_pic.$image2.'
            </td>
        </tr>
		<tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_VERSION.'
            </td>
            <td width="267">
                <input type="text" name="version" maxlength="60" size="40" value="'.$version.'">
            </td>
        </tr>
        
        <tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_PRICE.'
            </td>
            <td width="267">
                <input type="text" name="price" maxlength="20" size="40" value="'.$price.'">
            </td>
        </tr>		
		
		<tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY.'
            </td>
            <td width="200">';
            
       	// build cat tree listbox
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
		$preload[] = mosHTML::makeOption( '0', _JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES );
		$selected = array();
		$selected[] = mosHTML::makeOption( '0' );
    	$cat_listbox= mosHTML::treeSelectList( &$src_list, 0, $preload, 'catlist',
                 'class="inputbox" size="1"', 'value', 'text', $catlist_sel );
              
 		$form .= $cat_listbox.'&nbsp;'.$image1.$catlist_pic.$image2.'
            </td>
        </tr>      
		<tr>
            <td width="140" valign="middle">
                '._JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ.'
            </td>
            <td width="267">';
            
		// build listbox with licenses
    	$licenses = array();
    	$licenses[] = mosHTML::makeOption( '0', _JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES );
    	$database->setQuery( "SELECT id AS value, license_title AS text FROM #__jdownloads_license" );
    	$licenses = array_merge( $licenses, $database->loadObjectList() );
    	$lic_listbox = mosHTML::selectList( $licenses, 'license', 'size="1" class="inputbox"', 'value', 'text', $license_sel );
		            
   		$form .= $lic_listbox.'
            </td>
        </tr>        
		<tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE.'
            </td>
            <td width="200">';
            
	    // build language listbox
    	$file_language = array();
    	$file_lang_values = explode(',' , $jlistConfig['language.list']);
    	for ($i=0; $i < count($file_lang_values); $i++) {
        	$file_language[] = mosHTML::makeOption( $i, $file_lang_values[$i] );
    	}
    	$listbox_language = mosHTML::selectList( $file_language, 'language', 'class="inputbox" size="1"', 'value', 'text', $language_sel );                 
            
            
		$form .= $listbox_language.'
            </td>
        </tr>      
		<tr>
            <td width="140" valign="middle">'._JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM.'
            </td>
            <td width="200">';
			
		// build system listbox
    	$file_system = array();
    	$file_sys_values = explode(',' , $jlistConfig['system.list']);
    	for ($i=0; $i < count($file_sys_values); $i++) {
        	$file_system[] = mosHTML::makeOption( $i, $file_sys_values[$i] );
    	}
    	$listbox_system = mosHTML::selectList( $file_system, 'system', 'class="inputbox" size="1"', 'value', 'text', $system_sel );				
		
		$form .= $listbox_system.'
            </td>
        </tr>              

        <tr>
            <td width="140" valign="top">'._JLIST_FRONTEND_UPLOAD_FILENAME.'
            </td>
            <td width="200">
                <input name="file_upload" size="38" type="file" value="'.$file_upload.'">&nbsp;'.$image1.$file_upload_pic.$image2.'<br />'._JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE.': <b>'.$jlistConfig['allowed.upload.file.types'].'</b><br />'._JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE.': <b>'.$jlistConfig['allowed.upload.file.size'].' KB</b>
            </td>
        </tr>
        
        <tr>
            <td width="140" valign="top">'._JLIST_FRONTEND_UPLOAD_PIC_FILETITLE.'
            </td>
            <td width="200">
                <input name="pic_upload" size="38" type="file" value="'.$pic_upload.'"><br />'._JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES.' <b>.gif .jpg .png </b>
            </td>
        </tr>
		  
        <tr>
            <td width="140" valign="top">'._JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE.'
            </td>
            <td width="267">
                <textarea name="description" rows="2" cols="35">'.$description.'</textarea>&nbsp;'.$image1.$description_pic.$image2.'
            </td>
        </tr>
        
        <tr>
            <td width="140" valign="top">'._JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG.'
            </td>
            <td width="267">
                <textarea name="description_long" rows="4" cols="35">'.$description_long.'</textarea>
            </td>
        </tr>
        <tr>
            <td width="140" valign="middle">&nbsp;
            </td>
            <td width="267">
                <input type="submit" name="senden" value="'._JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND.'"> <input type="reset" name="cancel" value="'._JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR.'">
            </td>
        </tr>
    </table>	
	<input type="hidden" name="option" value="'.$option.'" />
	<input type="hidden" name="task" value="'.$task.'" />
	<input type="hidden" name="send" value="1" /></form>
	<input type="hidden" name="MAX_FILE_SIZE" value="'.$max_file_size.'">';	
	
	} else {
		$form = '';  
	}	// end access if()...
	
	$html_form = str_replace('{form}', $form, $html_form);
	
	if (isset($msg)) {
		$html_form = str_replace('{msg}', $msg, $html_form);	
	}
	
	echo $html_form;
	echo $footer; 
	
	// Focus auf erstes feld setzen
    
	if ($access) {
		if ($my->id > 0) {  
	?>
    <script type="text/Javascript" language="JavaScript">
    <!--
        document.getElementById("author").focus();
    -->
    </script>
	<?php
		} else {
	?>
    <script type="text/Javascript" language="JavaScript">
    <!--
        document.getElementById("name").focus();
    -->
    </script>
	<?php
		} 
	}			      
}

function showSearchForm($option){
     global $Itemid, $jlistConfig, $my, $mainframe;
     
    $mainframe->setPageTitle( $jlistConfig['jd.header.title'].' - '._JLIST_FRONTEND_SEARCH_LINKTEXT );   
    $html_form = makeHeader($html_form, false, false, false, 0, false, true, false, false, false, 0, 0, 0, 0, 0);
    echo $html_form;
    $html_form = '';
    
    $html_form = '<form name="jdsearch" action="index.php?option=com_jdownloads&Itemid='.$Itemid.'&task=search.result" method="post">';
    $html_form .= '<table class="jd_div_content" border="0" cellpadding="0" cellspacing="5" width="99%">
        <tr><td><br /></td></tr>
        <tr>
            <td width="100" valign="middle">'._JLIST_FRONTEND_SEARCH_TEXT_TITLE.'
            </td>
            <td width="200" valign="middle">
                <input class="jd_inputbox" type="text" name="jdsearchtext" id="jdsearchtext" maxlength="80" size="30"  value=""> <input type="submit" name="searchsubmit" value="'._JLIST_FRONTEND_SEARCH_BUTTON_TEXT.'"/> 
            </td>
        </tr>
        <tr>
            <td width="100" valign="middle">'._JLIST_FRONTEND_SEARCH_IN_TITLE.'
            </td>
            <td width="200">
                <input class="jd_inputbox" type="checkbox" name="jdsearchintitle" id="jdsearchintitle" value="1" checked="checked"> 
            </td>
        </tr>
        <tr>
           <td width="100" valign="middle">'._JLIST_FRONTEND_SEARCH_IN_DESC.'
            </td>
            <td width="200">
                <input class="jd_inputbox" type="checkbox" name="jdsearchindesc" id="jdsearchindesc" value="1" checked="checked"> 
            </td>
        </tr>
        <tr>
           <td width="100" valign="middle">'._JLIST_FRONTEND_SEARCH_NUMBERS.'
            </td>
            <td width="200">
                <input class="jd_inputbox" type="text" name="jdsearchnumber" id="jdsearchnumber" maxlength="3" size="3" value="30">
            </td>
        </tr>
        <tr><td><br /><br /></td></tr>
        </table>
        </form>';
        
    $html_form .= makeFooter(true, false, false, 0, 0, 0, 0); 
    
    if ( !$jlistConfig['offline'] ) {
            echo $html_cat;
    } else {
            if ($my->gid == 2) {
                echo _JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT;
                echo $html_cat;
            } else {
                $html_off = '<br /><br />'.$jlistConfig['offline.text'].'<br /><br />';
                echo $html_off;
            }
    }
    
    echo $html_form;
    ?>
    <script type="text/Javascript" language="JavaScript">
    <!--
        document.getElementById("jdsearchtext").focus();
    -->
    </script>
    <?php
}    

function showSearchResult($option){
    global $database, $Itemid, $mosConfig_absolute_path, $jlistConfig, $mainframe;
    
    $mainframe->setPageTitle( $jlistConfig['jd.header.title'].' - '._JLIST_FRONTEND_SEARCH_RESULT_TITLE );   
    $html_form = makeHeader($html_form, false, false, false, 0, false, true, false, false, false, 0, 0, 0, 0, 0);

    $searchtext =    $database->getEscaped(mosGetParam($_POST, 'jdsearchtext', ''));
    $searchintitle = $database->getEscaped(mosGetParam($_POST, 'jdsearchintitle', ''));
    $searchintext =  $database->getEscaped(mosGetParam($_POST, 'jdsearchindesc', ''));
    $searchnumber =  intval($database->getEscaped(mosGetParam($_POST, 'jdsearchnumber', 30)));
    if (!$searchnumber) $searchnumber = 30;
    
    if (strlen($searchtext) < 3){
        echo "<script> alert('"._JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT."'); window.history.go(-1); </script>\n";    
    }    
    if (!$searchintitle && !$searchintext){
        echo "<script> alert('"._JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION."'); window.history.go(-1); </script>\n";    
    }
    
    if ($searchintitle && $searchintext){
        $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_title LIKE '%$searchtext%' OR description LIKE '%$searchtext%' OR description_long LIKE '%$searchtext%' AND published = 1 ORDER BY date_added LIMIT $searchnumber");
    }
    if ($searchintitle && !$searchintext){
        $database->setQuery("SELECT * FROM #__jdownloads_files WHERE file_title LIKE '%$searchtext%' AND published = 1 ORDER BY date_added LIMIT $searchnumber");
    }
    if (!$searchintitle && $searchintext){
        $database->setQuery("SELECT * FROM #__jdownloads_files WHERE description LIKE '%$searchtext%' OR description_long LIKE '%$searchtext%' AND published = 1 ORDER BY date_added LIMIT $searchnumber");
    }    
    $files = $database->loadObjectList();
    
    if ($files) {
        // files gefunden   
        // cat der files holen und auf access beschränken
        $access = checkAccess_JD();        
        $output = array();
        foreach($files as $file) {
          if ($file->published) {  
            $database->setQuery("SELECT * FROM #__jdownloads_cats WHERE cat_id = '$file->cat_id'");
            $cat = $database->loadObjectList();
            if ($cat[0]->cat_access <= $access){
                $output[] = $file;
            }
          }      
        }    
        if ($output) {
            $files_found = true;
            // result header
            $html_form .= '<table class="jd_search_form" border="0" cellpadding="0" cellspacing="5" width="99%">
                  <tr>
                  <td class="jd_search_result_title" width="100%"><b>'._JLIST_FRONTEND_SEARCH_RESULT_TITLE.'</b><br />'
                  ._JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT.': <b>'.$searchtext.'</b><br />'
                  ._JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES.': <b>'.count($output).'</b></td>
                  </tr>
                  <tr>
                  </tr>';
                            
            foreach ($output as $out){
                // suchtext farblich hervorheben
                if ($searchintitle && $searchintext){
                    $out->description = eregi_replace($searchtext, '<font color="#CC3300">'.$searchtext.'</font>', $out->description);
                    $out->file_title = eregi_replace($searchtext, '<font color="#CC3300">'.$searchtext.'</font>', $out->file_title);
                }
                if ($searchintitle && !$searchintext){
                    $out->file_title = eregi_replace($searchtext, '<font color="#CC3300">'.$searchtext.'</font>', $out->file_title);
                }
                if (!$searchintitle && $searchintext){
                    $out->description = eregi_replace($searchtext, '<font color="#CC3300">'.$searchtext.'</font>', $out->description);
                }
                $titel_link = sefRelToAbs('index.php?option='.$option.'&amp;Itemid='.$Itemid.'&amp;task=view.download&cid='.$out->file_id);
                $titel_link_text = '<a href="'.$titel_link.'">'.$out->file_title.'</a>';
                $detail_link_text = '<a href="'.$titel_link.'">'._JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS.'</a>';
                
                $html_form .= '<tr width="100%"><td class="jd_search_results"><b>'.$titel_link_text.' '.$out->release.'</b><br />'.substr($out->description, 0, 400).'...<br />'.$detail_link_text.'</td></tr>';    
            }    
            $html_form .= '</table>'; 
        } else {
            $files_found = false;  
        }    
    } else {
      $files_found = false;  
    }
    if (!$files_found) {
        // keine files gefunden - oder falsche berechtigung
        // result header
        $html_form .= '<table class="jd_search_form" border="0" cellpadding="0" cellspacing="5" width="99%">
                  <tr>
                  <td class="jd_search_result_title" width="100%"><b>'._JLIST_FRONTEND_SEARCH_RESULT_TITLE.'</b><br />'
                  ._JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT.': <b>'.$searchtext.'</b><br />'
                  ._JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES.'</td>
                  </tr>
                  <tr>
                  </tr></table>';
    }    
    $html_form .= makeFooter(true, false, false, 0, 0, 0, 0);
    echo $html_form;
}

//end of class
}
?>