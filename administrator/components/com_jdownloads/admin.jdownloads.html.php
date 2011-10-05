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

global $mosConfig_lang, $mosConfig_live_site, $mainframe, $_VERSION;

$mainframe->addCustomHeadTag( "<link href=\"".$mosConfig_live_site."/administrator/components/com_jdownloads/style.css\" rel=\"stylesheet\" type=\"text/css\"/>" );

$utf8_lang = '';

if ( $_VERSION->RELEASE < '1.5' ) {
    $utf8_lang = '';
} else {
    $utf8_lang = '.utf8';
}
                                 
if (file_exists(EL_ADMIN_PATH.'/../../../components/com_jdownloads/languages/'.$mosConfig_lang.$utf8_lang.'.php')) {
	include(EL_ADMIN_PATH.'/../../../components/com_jdownloads/languages/'.$mosConfig_lang.$utf8_lang.'.php');
} else {
	include(EL_ADMIN_PATH.'/../../../components/com_jdownloads/languages/english'.$utf8_lang.'php');
}

class jlist_HTML{

////////////////////                CATEGORIES              ///////////////////////
function categoriesEdit($option, $row, $inputbox_pic, $access_box){
    global $database, $mosConfig_live_site, $jlistConfig;
	?>

	<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'categories.cancel') {
			submitform( pressbutton );
			return;
		}
        
		// do field validation
		if (form.cat_title.value == "" || form.catid.value == ""){
			if (form.cat_title.value == ""){
                alert( "<?php echo _JLIST_BACKEND_CATSEDIT_ERROR_TITLE;?>" );
            }
            if (form.catid.value == ""){
                alert( "<?php echo _JLIST_BACKEND_CATSEDIT_ERROR_CATLIST;?>" );
            }
		} else {
			submitform( pressbutton );
		}
	}
	
	function disable_enable_field ( element, status ) {
 		var elementToToggle = document.getElementById( element.id );
 		if ( status == 'active' )
 		{
 			element.readOnly = false;
 			elementToToggle.className = "active";
 		}
 		else
 		{
 			element.readOnly = true;
 			elementToToggle.className = "deactive";
 		}
	}
	</script>

	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo $row->cat_id ? _JLIST_BACKEND_CATSEDIT_EDIT : _JLIST_BACKEND_CATSEDIT_ADD;?></font></td>
		</tr>
	</table>
    
  <?php  $publish = array();
         $publish[] = mosHTML::makeOption( '0', _JLIST_FE_NO);
         $publish[] = mosHTML::makeOption( '1', _JLIST_FE_YES);
         $publish = mosHTML::selectList( $publish, "publish", 'size="1" class="inputbox"', 'value', 'text', $row->published );
                                
    echo '<div align="center"><br /><b><font color="#990000">'._JLIST_BACKEND_EDIT_PUBLISHED.'</b>: '.$publish.'</font></div>'; ?>
    
	<table width="100%" border="0">
		<tr>
			<td width="100%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->cat_id ? _JLIST_BACKEND_CATSEDIT_EDIT : _JLIST_BACKEND_CATSEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table>
                            <tr>
                                <td>
                                    <strong><?php echo _JLIST_BACKEND_FILESEDIT_REQUIRES_INFO." "; ?>
                                    <br /><br /></strong>
                                </td>
                            </tr>

		  					<tr>
                                <td><strong>
                                    <?php echo _JLIST_BACKEND_CATSEDIT_CAT_TITLE." "; ?></strong><br />
		    						<input name="cat_title" value="<?php echo $row->cat_title; ?>" size="50" maxlength="255"/>
                                    <input type="hidden" name="ordering" value="<?php echo $row->ordering;?>"/>
		    					</td>
		    					<td valign ="top"><?php echo " "._JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC; ?>
		    					</td>
		  					</tr>

                            <tr>
		    					<td valign="top"><strong>
                                    <?php
                                    if ($row->cat_id) {
                                        echo _JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE." ";
                                    } else {
                                        echo _JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW." ";
                                    }
                                    ?>
                                    </strong><br />
                                <?php
                                  // build cat tree listbox
									$src_list = array();
									$query = "SELECT cat_id AS id, parent_id AS parent, cat_title AS name FROM #__jdownloads_cats ORDER BY ordering";
									$database->setQuery( $query );
									$cats = $database->loadObjectList();
									$preload = array();
									$preload[] = mosHTML::makeOption( '0', _JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX );
							    	$catlist = mosHTML::treeSelectList( &$cats, 0, $preload, 'catid', 'class="inputbox" size="8" onChange="javascript:disableCatDirs('.$row->cat_id.')"', 'value', 'text', $row->cat_id);
									echo $catlist;                                
								?>
                                </td>
		    					<td valign ="top">
                                    <?php
                                    if ($row->cat_id) {
                                        echo _JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC." ";
                                    } else {
                                        echo _JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW." ";
                                    }
                                    ?>
                                </td>
                            </tr>
                            
		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE." "; ?></strong><br />
		    					<?php echo $access_box; ?>
		    					</td>
		    					<td valign ="top"><?php echo ' '._JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC; ?>
		    					</td>
		  					</tr>

                            <tr>
	       				        <td><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT." "; ?></strong><br />
                                   <?php echo $inputbox_pic; ?>
					            </td>
                                <td valign ="top"><?php echo ' '._JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC; ?>
		    				    </td>
					        </tr>

					       <tr>
                                <td>
					               <script language="javascript" type="text/javascript">
					               if (document.forms[0].cat_pic.options.value!=''){
		      			               jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/catimages/'; ?>" + getSelectedText( 'adminForm', 'cat_pic' );
	           				       } else {
		          			              jsimg='';
				        	       }
					               document.write('<img src=' + jsimg + ' name="imagelib" width="32" height="32" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW; ?>" />');
				    	           </script>
  					           </td>
                          </tr>
                           
                            <table>
		  					<tr>
		  						<td><strong><?php echo _JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION." "; ?></strong><br />
		  							<?php
                                    if ($jlistConfig['categories.editor'] == "1") {
									   editorArea( 'cat_description',  $row->cat_description , 'cat_description', '100%', '500', '80', '5' ) ;
                                    } else {?>
                                       <textarea name="cat_description" rows="12" cols="50"><?php echo $row->cat_description; ?></textarea>
                                    <?php
                                    } ?>
		  						</td>
                            </tr>
                            </table>   
                            <table>
                            <tr>
                                <td valign="top"> <strong><?php echo _JLIST_BACKEND_EDIT_METADESC_TITLE." "; ?></strong><br />
                                    <textarea name="metadesc" rows="3" cols="50"><?php echo $row->metadesc; ?></textarea>
                                </td>
                                <td valign ="top"><?php echo ' '._JLIST_BACKEND_EDIT_METADESC_DESC; ?>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <strong><?php echo _JLIST_BACKEND_EDIT_METAKEY_TITLE." "; ?></strong><br />
                                    <textarea name="metakey" rows="3" cols="50"><?php echo $row->metakey; ?></textarea>
                                </td>
                                <td valign ="top"><?php echo ' '._JLIST_BACKEND_EDIT_METAKEY_DESC; ?>
                                </td>
		  					</tr>
                            </table>
		  				</table>
		  			</td>
		  		</tr>
			</table>
			</td>
		</tr>
	</table>
<br /><br />

		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0">
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="cat_id" value="<?php echo $row->cat_id; ?>" />
		<input type="hidden" name="cat_dir" value="<?php echo $row->cat_dir; ?>" />
		<input type="hidden" name="cat_title_org" value="<?php echo $row->cat_title; ?>" />
        <input type="hidden" name="parent_id" value="<?php echo $row->parent_id; ?>" /> 
        <input type="hidden" name="old_access" value="<?php echo $row->cat_access; ?>" /> 
		<input type="hidden" name="task" value="" />
	</form>

<?php
}

// list cats
function categoriesList($rows, $option, $pageNav, $search, $filter, $tree, $task, $limitstart){
	global $mosConfig_live_site, $jlistConfig, $Itemid;

	mosCommonHTML::loadOverlib();
?>
    <form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
	  		<td colspan="3" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right" colspan="10"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_CATSLIST_TITLE_HEAD;?></font></td>
		</tr>
		<tr>
			<td align="right" colspan="12">
				<?php echo _JLIST_BACKEND_CATSLIST_SEARCH." ";
				if (!$search) {
				?>
				<input type="text" name="search" value="<?php echo $search;?>" class="text_area" onChange="document.adminForm.submit();" />
				<?php } else { ?>
				<b><input type="text" name="search" value="<?php echo $search;?>" class="text_area" onChange="document.adminForm.submit();" /></b>
				<?php }
				
				echo _JLIST_BACKEND_CATSLIST_SEARCH_LIMIT." ";
				echo $pageNav->getLimitBox();
				?>
			</td>
	  </tr>
	  <tr>
          <td colspan="12">
              <?php
               if($jlistConfig['files.autodetect']){
                  checkFiles($task);
               } else {
                  echo '<div align="center"><b><font color="#FF6600">'._JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC.'</font></b></div>';
               }
             ?>
          </td>
      </tr>
		<tr>
			<th width="5" align="left"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $tree ); ?>);" /></th>
            <th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_CATSLIST_CATID." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_CATSLIST_TITLE." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_CATSLIST_PIC." "; ?></th>
            <th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_CATSLIST_PATH." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_CATSLIST_LINK." "; ?></th>
            <th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_CATSLIST_READ." "; ?></th>
            <th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_CATSLIST_DOWNLOAD." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_CATSLIST_PUBLISHED." "; ?></th>
			<th class="title" style="text-align: center" colspan="2" width="60"><?php echo _JLIST_BACKEND_CATSLIST_ORDERING." "; ?></th>
			<th width="1%"><a href="javascript: saveorder( <?php echo count( $tree )-1; ?> )"><img src="images/filesave.png" border="0" width="16" height="16" alt="Save Order" /></a></th>
        </tr>
		<?php
		$k = 0;

		$tree = array_slice($tree, $pageNav->limitstart, $pageNav->limit);
		
		for($i=0, $n=count( $tree ); $i < $n; $i++) { 
			$row = &$tree[$i];
			$row->id = $row->cat_id;
		
			$link 		= 'index2.php?option=com_jdownloads&task=categories.edit&hidemainmenu=1&cid='.$row->cat_id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
		<tr class="<?php echo "row$k"; ?>">
			<td><?php echo $checked; ?>
            </td>

            <td align="center">
				<?php echo $row->cat_id; ?>
			</td>

			<td><a href="<?php echo $link; ?>" title="<?php echo _JLIST_BACKEND_CATSEDIT_TITLE;?>"><?php echo $row->cat_title; ?></a>
            </td>

            

            <td align="center">
            <?php 
			if ($row->cat_pic != ''){
				?>
			<img src="<?php echo $mosConfig_live_site.'/images/jdownloads/catimages/'.$row->cat_pic; ?>" width="32px" height="32px" align="middle" border="0"/>
            </td>
			<?php } ?>
            
			
			<td align="center">
            <?php
                echo mosToolTip($row->cat_dir, _JLIST_BACKEND_CATSLIST_PATH);
            ?>
			</td>

			<td align="center">
				<?php
                if ($row->published) {
                    $url_cat_link = '<a href="'.$mosConfig_live_site.'/'.'index.php?option=com_jdownloads&Itemid=999999&task=viewcategory&catid='.$row->id.'" target="_blank">'._JLIST_BACKEND_CATSLIST_LINK_TEXT.'</a>';
                    echo $url_cat_link;
                } else {
                    echo '';
                }        
                ?>
			</td>

            <?php // set access info
              $access = array();
              $access[] = '<font color="green">'._JLIST_BACKEND_CATSLIST_ACCESS_ALL.'</font>';
              $access[] = '<font color="#FF6600">'._JLIST_BACKEND_CATSLIST_ACCESS_REGGED.'</font>';
              $access[] = '<font color="red">'._JLIST_BACKEND_CATSLIST_ACCESS_ADMINS.'</font>';
              ?>
              <td align="center">
                  <?php echo $access[(int)substr($row->cat_access, 0, 1)]; ?>
              </td>
              <td align="center">
                  <?php echo $access[(int)substr($row->cat_access, 1, 1)]; ?>
              </td>
              
			<?php
			$task2 = $row->published ? 'categories.unpublish' : 'categories.publish';
			$img = $row->published ? 'publish_g.png' : 'publish_x.png';
			?>              

			<td align="center"><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task2;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="" /></a>
            </td>

			<td width="25" align="right">
				<?php		if ($i > 0) { ?>
				<a href="#reorder" onClick="return listItemTask('cb<?php echo $i;?>','categories.orderup')">
				<img src="images/uparrow.png" width="12" height="12" border="0" alt="orderup">
				</a>
				<?php		} ?>
		  	</td>

			<td width="25" align="left">
				<?php		if ($i < $n-1) { ?>
				<a href="#reorder" onClick="return listItemTask('cb<?php echo $i;?>','categories.orderdown')">
				<img src="images/downarrow.png" width="12" height="12" border="0" alt="orderdown">
				</a>
				<?php		}?>
			</td>
			<td align="center">
				<input type="text" name="order[]" size="5" value="<?php echo $row->ordering; ?>" class="text_area" style="text-align: center" />
			</td>
				<?php $k = 1 - $k;  } ?>
		</tr>
		<tr>
		  <td align="center" colspan="12"><?php echo $pageNav->writePagesLinks(); ?></td>
	  	</tr>
		<tr>
		  <td align="center" colspan="12"><?php echo $pageNav->writePagesCounter(); ?></td>
	  	</tr>
	</table>
	<input type="hidden" name="boxchecked" value="0">
	<input type="hidden" name="option" value="<?php echo $option; ?>">
	<input type="hidden" name="task" value="categories.list">
	<input type="hidden" name="hidemainmenu" value="0">
	<input type="hidden" name="action" value="cat">
    <input type="hidden" name="limitstart" value="" />

</form>

<?php
}

/***********************************************************************
/                               FILES
/***********************************************************************/
function filesEdit($option, $row, $licenses, $up_files, $inputbox_pic, $listbox_system, $listbox_language, $no_writable, $inputbox_thumb, $cat_id) {
	global $database, $mosConfig_live_site, $mosConfig_absolute_path, $jlistConfig;
	?>
	<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'files.cancel') {
			submitform( pressbutton );
			return;
		}

        // mirror files nur wenn intern oder extern angegeben
        if (form.extern_file){
          if (form.file_upload.value == "" && form.extern_file.value == ""){
            if (form.mirror_1.value != "" || form.mirror_2.value != ""){
                alert( "<?php echo _JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR;?>" );
                return; 
            }
          }
        }
		// do field validation
		if (form.file_title.value == "" || form.cat_id2.value == 0){
			if (form.file_title.value == ""){
                alert( "<?php echo _JLIST_BACKEND_FILESEDIT_ERROR_TITLE;?>" );
            }
            if (form.cat_id2.value == ""){
                alert( "<?php echo _JLIST_BACKEND_FILESEDIT_CATLIST_ERROR;?>" );
            }    
		} else {
			submitform( pressbutton );
		}
	}
	</script>

	<form action="index2.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color:#C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo $row->file_id ? _JLIST_BACKEND_FILESEDIT_EDIT : _JLIST_BACKEND_FILESEDIT_ADD;?></font></td>
		</tr>
	</table>

	<div align="right">
	<?php 
		// download was sent in from frontend
		if ($row->created_mail) { 
			echo '<div><font color="#666666"><small>'._JLIST_BACKEND_FILESEDIT_SENT_IN_FROM.'<font color="#990000">'.$row->created_by.'</font> '._JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL.'<font color="#990000">'.$row->created_mail.'</font></small></font></div>';
		} else {
			echo '&nbsp;<br /></div>';		
		}
	
        $publish = array();
        $publish[] = mosHTML::makeOption( '0', _JLIST_FE_NO);
        $publish[] = mosHTML::makeOption( '1', _JLIST_FE_YES);
        $publish = mosHTML::selectList( $publish, "publish", 'size="1" class="inputbox"', 'value', 'text', $row->published );
        echo '<div align="center"><b><font color="#990000">'._JLIST_BACKEND_EDIT_PUBLISHED.'</b>: '.$publish.'</font> ';
    
        if ($row->file_id){
        $update = array();
        $update[] = mosHTML::makeOption( '0', _JLIST_FE_NO);
        $update[] = mosHTML::makeOption( '1', _JLIST_FE_YES);
        $update = mosHTML::selectList( $update, "update", 'size="1" class="inputbox"', 'value', 'text', $row->update_active );
        echo '&nbsp;&nbsp;<b><font color="#990000">'._JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE.'</b>: '.$update.'</font> '.mosToolTip(_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT).'</div>';   
        }
    
$tabs = new mosTabs(1);  //parameter 1,0 - 1 setzt cookie
$tabs->startPane('editfile');
$tabs->startTab(_JLIST_BACKEND_FILESEDIT_TABTITLE_1,'daten1');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->file_id ? _JLIST_BACKEND_FILESEDIT_EDIT : _JLIST_BACKEND_FILESEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table width="100%">
    	  					<tr>
		    					<td colspan="3"><strong><?php echo _JLIST_BACKEND_FILESEDIT_REQUIRES_INFO." "; ?><br /><br /><?php echo _JLIST_BACKEND_FILESEDIT_FILE_TITLE." "; ?></strong><br />
                                    <input name="file_title" value="<?php echo $row->file_title; ?>" size="60" maxlength="255"/>

                                    <strong><?php echo " "._JLIST_BACKEND_FILESEDIT_RELEASE." "; ?></strong>
		    						<input name="release" value="<?php echo $row->release; ?>" size="15" maxlength="255"/>

                                    <strong><?php echo " "._JLIST_BACKEND_FILESEDIT_SYSTEM." "; ?></strong>
                                    <?php echo $listbox_system; ?>

                                    <strong><?php echo " "._JLIST_BACKEND_FILESEDIT_LANGUAGE." "; ?></strong>
                                    <?php echo $listbox_language; ?>
                                    
                                    <strong><?php echo " "._JLIST_BACKEND_FILESEDIT_LICENSE." "; ?></strong>
                                    <?php
                                    $templic = (int)$row->license;
                                    $inputbox_lic = mosHTML::selectList( $licenses, 'license', 'size="1" class="inputbox"', 'value', 'text', $templic );
                                    echo $inputbox_lic; ?>
                                </td>
                            </tr>
                                    <input type="hidden" name="ordering" value="<?php echo $row->ordering;?>"/>
		    						<input type="hidden" name="published" value="<?php echo $row->published;?>"/>
                                    <input type="hidden" name="update_active" value="<?php echo $row->update_active;?>"/>
		    					</td>
		  					</tr>
		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_FILE_CAT." "; ?></strong><br />
		    					<?php 
									// build cat tree listbox
									$src_list = array();
									$query = "SELECT cat_id AS id, parent_id AS parent, cat_title AS name FROM #__jdownloads_cats ORDER BY ordering";
									$database->setQuery( $query );
									$cats2 = $database->loadObjectList();
									$preload = array();
									//$preload[] = mosHTML::makeOption( '0', _JLIST_BACKEND_FILESLIST_NOCATS );
							    	$catlist= mosHTML::treeSelectList( &$cats2, 0, $preload, 'cat_id2', 'class="inputbox" size="5"', 'value', 'text', $row->cat_id);
									echo $catlist;																		      ?>
		    					</td>
		    					<td>
                                    <?php echo _JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC." "; ?>
		    					</td>
		  					</tr>
		  					<tr>
	       				        <td><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT." "; ?></strong><br />
                                   <?php echo $inputbox_pic; ?>
					           </td>
					           <td>
                                    <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC." "; ?>
					           </td>
					        </tr>
					       <tr>
                                <td>
					               <script language="javascript" type="text/javascript">
					               if (document.forms[0].file_pic.options.value!=''){
		      			               jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/fileimages/'; ?>" + getSelectedText( 'adminForm', 'file_pic' );
	           				       } else {
		          			              jsimg='';
				        	       }
					               document.write('<img src=' + jsimg + ' name="imagelib" width="32" height="32" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW; ?>" />');
				    	           </script>
  					           </td>
                          </tr>
							<table>
		  					<tr>
		    					<td colspan="2"><strong><?php echo _JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ." "; ?></strong><br />
                                <?php
                                if ($jlistConfig['files.editor'] == "1") {
									editorArea( 'description',  $row->description , 'description', '100%', '500', '80', '5' ) ;
                                } else {?>
                                    <textarea name="description" rows="4" cols="60"><?php echo $row->description; ?></textarea>
                                <?php
                                } ?>
		    					</td>
		    					<td valign="top">
		    					     <?php echo ' '._JLIST_BACKEND_FILESEDIT_EDITOR_INFO." "; ?>
		    					</td>
		  					</tr>
		  					</table>
                            <table>
                            <tr>
		    					<td colspan="2"><strong><?php echo _JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG." "; ?></strong><br />
                                <?php
                                if ($jlistConfig['files.editor'] == "1") {
									editorArea( 'description_long',  $row->description_long , 'description_long', '100%', '500', '80', '5' ) ;
                                } else {?>
                                    <textarea name="description_long" rows="8" cols="60"><?php echo $row->description_long; ?></textarea>
                                <?php
                                } ?>
		    					</td>
		  					</tr>
		  					</table>
		  					
                        </table>
                   </td>
                  </tr>
                 </table>
			</td>
		</tr>
	</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_FILESEDIT_TABTITLE_2,'daten2');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->file_id ? _JLIST_BACKEND_FILESEDIT_EDIT : _JLIST_BACKEND_FILESEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table width="100%">

                            <tr>
		    				  <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_HITS." "; ?></strong><br />
	    						<input name="downloads" value="<?php echo $row->downloads; ?>" size="10"/>
  	    					  </td>
                              <td><?php echo " "._JLIST_BACKEND_FILESEDIT_HITS_DESC; ?>
		    				  </td>
		  					</tr>

                            <tr>
                              <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_PRICE." "; ?></strong><br />
                                <input name="price" value="<?php echo $row->price; ?>" size="10" maxlength="20"/>
                                </td>
                              <td><?php echo " "._JLIST_BACKEND_FILESEDIT_PRICE_DESC; ?></td>
                            </tr>                            
                            
		  					
		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_SIZE." "; ?></strong><br />
		    						<input name="size" value="<?php echo $row->size; ?>" size="25" maxlength="50"/>
		    					</td>
                                <td>
                                    <?php echo " "._JLIST_BACKEND_FILESEDIT_SIZE_DESC; ?>
		    					</td>
		  					</tr>

		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_DADDED." "; ?></strong><br />
		    						<input name="date_added" id="date_added" value="<?php echo $row->date_added; ?>" size="25"/>
		    						<input name="reset" type="reset" class="button" onclick="return showCalendar('date_added', '%Y-%m-%d')" value="..." />
		    					</td> 
                                <td><?php echo " "._JLIST_BACKEND_FILESEDIT_DADDED_DESC; ?>
		    					</td>
		  					</tr>
                            <?php if ($row->file_id) { ?>
                            <tr><td colspan="3"><hr></td></tr>   
                            <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_CREATED_BY." "; ?></strong><br />
                                   <input name="created_by" id="created_by" value="<?php echo $row->created_by; ?>" size="25" maxlength="255"/>
                                </td>
                                </td> 
                                <td><?php echo " "._JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC; ?>
                                </td>
                            </tr>
                            <tr>     
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_MODIFIED_DATE." "; ?></strong><br />
                                <input name="modified_date" id="modified_date" value="<?php echo $row->modified_date; ?>" size="25"/>
                                </td>
                                </td> 
                                <td><?php echo " "; ?>
                                </td>
                            </tr>
                            <tr>     
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_MODIFIED_BY." "; ?></strong><br />
                                <input name="modified_by" id="modified_by" value="<?php echo $row->modified_by; ?>" size="25" maxlength="255"/>
                                </td>
                                </td> 
                                <td><?php echo " "; ?>
                                </td>
                            </tr>
                            <?php } ?>
                            
		  					 <tr><td colspan="3"><hr></td></tr>   
                            <tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE." "; ?></strong></td>
                            </tr>
                            <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_URL_HOME." "; ?></strong><br />
		    						<input name="url_home" value="<?php echo $row->url_home; ?>" size="70" maxlength="255"/>
		    					</td>
                                <td valign ="top"><?php echo " "._JLIST_BACKEND_FILESEDIT_URL_HOME_DESC; ?>
                                </td>
		  					</tr>

		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_AUTHOR." "; ?></strong><br />
		    						<input name="author" value="<?php echo $row->author; ?>" size="70" maxlength="255"/>
		    					</td>
                                <td valign ="top"><?php echo " "._JLIST_BACKEND_FILESEDIT_AUTHOR_DESC; ?>
                                </td>
		  					</tr>

		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_AUTHOR_URL." "; ?></strong><br />
		    						<input name="url_author" value="<?php echo $row->url_author; ?>" size="70" maxlength="255"/>
		    					</td>
		    					<td valign ="top"><?php echo " "._JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC; ?>
		    					</td>
		  					</tr>
                             <tr><td colspan="3"><hr></td></tr>   
                            <tr>
                                <td valign="top"> <strong><?php echo _JLIST_BACKEND_EDIT_METADESC_TITLE." "; ?></strong><br />
                                    <textarea name="metadesc" rows="3" cols="40"><?php echo $row->metadesc; ?></textarea>
                                </td>
                                <td valign ="top"><?php echo ' '._JLIST_BACKEND_EDIT_METADESC_DESC; ?>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <strong><?php echo _JLIST_BACKEND_EDIT_METAKEY_TITLE." "; ?></strong><br />
                                    <textarea name="metakey" rows="3" cols="40"><?php echo $row->metakey; ?></textarea>
                                </td>
                                <td valign ="top"><?php echo ' '._JLIST_BACKEND_EDIT_METAKEY_DESC; ?>
                                </td>
                            </tr>

                        </table>
                   </td>
                  </tr>
                 </table>
			</td>
		</tr>
	</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_FILESEDIT_TABTITLE_3,'daten3');
?>

<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->file_id ? _JLIST_BACKEND_FILESEDIT_EDIT : _JLIST_BACKEND_FILESEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table width="100%">

		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD." "; ?></strong><br />
		    					<?php
		    					$writable = is_writable($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/') ? _JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE : _JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE;
		    					echo $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/ - '.$writable;
		    					?>
		    					</td>
                                <td valign ="top"><?php echo " "._JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC; ?>
  	    					    </td>
		    					
		  					</tr>
		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_FILESEDIT_FILE." "; ?></strong><br />
		    						<input name="file_upload" size="50"  type="file"/><br /><?php echo _JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE.' '. ini_get('upload_max_filesize'); ?>
                                </td>
                                <td valign ="top"><?php echo " "._JLIST_BACKEND_FILESEDIT_FILE_DESC; ?>
  	    					    </td>
                            </tr>

                            <?php
                       if($row->url_download != ''){ ?>
                            <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER." "; ?></strong><br /><br /><big><font color="#990000">
                                <?php echo $row->url_download; ?>
                                 </font></big><br /></td>
                                <td valign ="top"><?php echo _JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO;?>
                                  </td>
                              </tr>
                            <tr>
                                <td>
                                    <a href="index2.php?option=<?php echo $option;?>&task=files.remove&cid=<?php echo $row->file_id;?>"><?php echo _JLIST_BACKEND_FILESEDIT_FILE_REMOVE;?><br /><br /></a>
                                </td>
                              </tr>

                     <?php } else { ?>

                            <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO." "; ?></strong><br />
                                <?php echo ''; ?>
                                <br />
                                  </td>
                              </tr>
                              
                              <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE." "; ?></strong><br />
                                 <input name="extern_file" value="<?php echo $row->extern_file; ?>" size="70" maxlength="255" />
                                 </td>
                                <td valign ="top"><?php echo _JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC; ?>
                                  </td>
                              </tr>
                              <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE." "; ?></strong><br />
                                    <?php echo mosHTML::yesnoRadioList("extern_site",'',($row->extern_site) ? 1:0);?> 
                                 </td>
                                <td valign ="top"><?php echo _JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC; ?>
                                  </td>
                              </tr>
                    <?php } ?>
                              <tr><td colspan="3"><hr></td></tr>  
                              <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE." "; ?></strong><br />
                                 <input name="mirror_1" value="<?php echo $row->mirror_1 ?>" size="70" maxlength="255"/>
                                 </td>
                                <td valign ="top"><?php echo _JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC; ?>
                                  </td>
                              </tr>
                              <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE." "; ?></strong><br />
                                    <?php echo mosHTML::yesnoRadioList("extern_site_mirror_1",'',($row->extern_site_mirror_1) ? 1:0);?> 
                                 </td>
                                <td valign ="top"><?php echo _JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC; ?>
                                  </td>
                              </tr>
                              
                              <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE." "; ?></strong><br />
                                 <input name="mirror_2" value="<?php echo $row->mirror_2 ?>" size="70" maxlength="255"/>
                                 </td>
                                <td valign ="top"><?php echo _JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC; ?>
                                  </td>
                              </tr>
                              <tr>
                                <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE." "; ?></strong><br />
                                    <?php echo mosHTML::yesnoRadioList("extern_site_mirror_2",'',($row->extern_site_mirror_2) ? 1:0);?> 
                                 </td>
                                <td valign ="top"><?php echo _JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC; ?>
                                  </td>
                              </tr>
                              <tr><td colspan="3"><hr></td></tr>
                              <tr>
                                   <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE." "; ?></strong><br />                                  <?php echo $inputbox_thumb; ?>
                               </td>
                               <td>
                                    <?php echo _JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC." "; ?>
                               </td>
                            </tr>

                           <tr>
                                <td>
                                   <script language="javascript" type="text/javascript">
                                   if (document.forms[0].file_thumb.options.value!=''){
                                         jsimg2="<?php echo $mosConfig_live_site.'/images/jdownloads/screenshots/thumbnails/'; ?>" + getSelectedText( 'adminForm', 'file_thumb' );
                                      } else {
                                            jsimg2='';
                                   }
                                   document.write('<img src=' + jsimg2 + ' name="imagelib4" border="1" border-color="#555555" alt="" />');
                                   </script>
                                 </td>
                          </tr>                              
                          <tr>
                             <td><strong><?php echo _JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE." "; ?></strong><br />
                                  <input name="file_upload_thumb" size="50"  type="file"/>
                              </td>
                              <td valign ="top"><?php echo " "._JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC; ?>
                              </td>
                          </tr>
                    </table>
		  			</td>
		  		</tr>
				</table>
			</td>
		</tr>
	</table>

<?php
$tabs->endTab();
$tabs->endPane(editfile);?>

		<input type="hidden" name="hidemainmenu" value="0">
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="file_id" value="<?php echo $row->file_id; ?>" />
		<input type="hidden" name="cat_id" value="<?php if ($row->cat_id) {echo $row->cat_id;}else{echo $cat_id;} ?>" />
		<input type="hidden" name="filename" value="<?php echo $row->url_download; ?>" />		
        <input type="hidden" name="modified_date_old" value="<?php echo $row->modified_date; ?>" />        
		<input type="hidden" name="task" value="" />
	</form>

<?php
}

// files list
function filesList($rows, $option, $pageNav, $search, $filter, $task, $limitstart){
	global $database, $mosConfig_live_site, $jlistConfig;

    // für mosToolTip
    mosCommonHTML::loadOverlib();

    $cat_id = mosGetParam($_REQUEST,'cat_id',-1);
?>
	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
	  		<td colspan="11" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right" colspan="4"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_FILESLIST_TITLE;?></font></td>
		</tr>
		<tr>
            <td colspan="7" align="left">
				<?php
                $del_files_option = mosHTML::yesnoSelectList( 'delete_files', 'class="inputbox"', '1', _JLIST_FE_YES, _JLIST_FE_NO );
                echo ' '._JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION." ".$del_files_option.' '.mosToolTip(_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP); ?>
            </td>
        	<td colspan="7" align="right">
				<?php echo _JLIST_BACKEND_FILESLIST_SEARCH." ";?>
				<input type="text" name="search" value="<?php echo $search;?>" class="text_area" onChange="document.adminForm.submit();" />
				<?php
				echo _JLIST_BACKEND_FILESLIST_SEARCH_LIMIT." ";
				echo $pageNav->getLimitBox().' ';

	// build cat tree listbox
		$src_list = array();
		$query = "SELECT cat_id AS id, parent_id AS parent, cat_title AS name FROM #__jdownloads_cats ORDER BY ordering";
		$database->setQuery( $query );
		$cats = $database->loadObjectList();
		$preload = array();
		$preload[] = mosHTML::makeOption( '-1', _JLIST_BACKEND_FILESLIST_CATS );
		$preload[] = mosHTML::makeOption( '0',  _JLIST_BACKEND_FILESLIST_NOCATS );
        $preload[] = mosHTML::makeOption( '-2', _JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED );		
        $preload[] = mosHTML::makeOption( '-3', _JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED );
    	$html= mosHTML::treeSelectList( &$cats, 0, $preload, 'cat_id',
                 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $cat_id);
				
				echo $html;
				?>
			</td>
	  </tr>
	  <tr>
		  <td colspan="14">
              <?php
               if($jlistConfig['files.autodetect']){
                  checkFiles($task);
               } else {
                  echo '<div align="center"><b><font color="#FF6600">'._JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC.'</font></b></div>';
               }
             ?>
          </td>
	  </tr>

		<tr>
			<th width="5" align="left"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>
            <th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_FILE_ID." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_FILESLIST_FILE." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_RELEASE." "; ?></th>
            <th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_PIC." "; ?></th>
            <th class="title"><?php echo _JLIST_BACKEND_FILESLIST_CAT." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_DESCRIPTION." "; ?></th>
            <th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_FILENAME." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_DADDED." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_HITS." "; ?></th>
			<th class="title" style="text-align: center"><?php echo _JLIST_BACKEND_FILESLIST_PUBLISHED." "; ?></th>
			<th class="title" colspan="2" width="60" style="text-align: center">
            <?php echo _JLIST_BACKEND_FILESLIST_ORDERING." "; ?></th>
			<th width="1%"><a href="javascript: saveorder( <?php echo count( $rows )-1; ?> )"><img src="images/filesave.png" border="0" width="16" height="16" alt="Save Order" /></a></th>
		</tr>
		<?php
		$k = 0;
		for($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$row->id = $row->file_id;
			$link 		= 'index2.php?option=com_jdownloads&task=files.edit&hidemainmenu=1&cid='.$row->file_id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
		<tr class="<?php echo "row$k"; ?>">
			<td><?php echo $checked; ?></td>

            <td align="center">
				<?php echo $row->file_id; ?>
			</td>

        	<td><a href="<?php echo $link; ?>" ><?php echo $row->file_title; ?></a></td>

			<td align="center"><?php  echo $row->release; ?></td>
			
			<td align="center">
                <?php if($row->file_pic){ ?>
                    <img src="<?php echo $mosConfig_live_site.'/images/jdownloads/fileimages/'.$row->file_pic; ?>" width="24px" height="24px" align="middle" border="0"/>
                <?php } ?>
            </td>

			<td><?php echo $row->cat_title;?></td>

			<td align="center">
            <?php
                if (strlen($row->description) > 200 ) {
                    $description_short =  str_replace("'", " ", substr($row->description, 0, 200).' ...');
                } else {
                    $description_short = str_replace(chr(39), " ", $row->description);
                }
                if ($description_short != '') {
                    echo mosToolTip(strip_tags($description_short), _JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT);
                }
            ?>
            </td>
            
            <td align="center">
            <?php if ($row->url_download != '') {
                echo mosToolTip($row->url_download);
            } else {
                if ($row->extern_file != '') {
                    echo mosToolTip($row->extern_file);
                }       
            }        
            ?></td>

			<td align="center"><?php echo substr(mosFormatDate($row->date_added, $jlistConfig['global.datetime'] ,$offset = NULL),0,10); ?></td>
			<td align="center"><?php echo $row->downloads;?></td>

			<?php
			$task2 = $row->published ? 'files.unpublish' : 'files.publish';
			$img = $row->published ? 'publish_g.png' : 'publish_x.png';
			?>
			<td align="center"><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task2;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="" /></a></td>
			<td width="25" align="right">
				<?php		if ($i > 0) { ?>
				<a href="#reorder" onClick="return listItemTask('cb<?php echo $i;?>','files.orderup')">
				<img src="images/uparrow.png" width="12" height="12" border="0" alt="orderup">
				</a>
				<?php		} ?>
		  	</td>
			<td width="25" align="left">
				<?php		if ($i < $n-1) { ?>
				<a href="#reorder" onClick="return listItemTask('cb<?php echo $i;?>','files.orderdown')">
				<img src="images/downarrow.png" width="12" height="12" border="0" alt="orderdown">
				</a>
				<?php		}?>
			</td>
			<td align="center">
				<input type="text" name="order[]" size="5" value="<?php echo $row->ordering; ?>" class="text_area" style="text-align: center" />
			</td>
				<?php $k = 1 - $k;  } ?>
		</tr>
		<tr>
		  <td align="center" colspan="14"><?php echo $pageNav->writePagesLinks(); ?></td>
	  	</tr>
		<tr>
		  <td align="center" colspan="14"><?php echo $pageNav->writePagesCounter(); ?></td>
	  	</tr>
	</table>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="files.list" />
	<input type="hidden" name="hidemainmenu" value="0">
    <input type="hidden" name="action" value="file">
    <input type="hidden" name="limitstart" value="" />

 </form>

<?php
}

// Dateien kopieren (ohne dateizuordnung)
function filesCopy($option, $files_id, $files, $cat_id){
    global $database;
    
    ?>
    <script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
        var form = document.adminForm;
        
        if (pressbutton == 'files.list') {
            submitform( pressbutton );
            return;
        }
        
        // do field validation
        if (form.cat_id2.value == 0){
            alert( "<?php echo _JLIST_BACKEND_FILESEDIT_CATLIST_ERROR;?>" );
        } else {
            submitform( pressbutton );
        }
    }
    </script>
   

    <form action="index2.php" method="post" name="adminForm">
    <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
        <tr>
              <td colspan="2" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
              <td class="sectionname" colspan="1" align="right"><font style="color: #C24733; font-size : 16px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_FILES_COPY_TITLE;?></font></td>
        </tr>
        <tr>
            <th  colspan="3" class="title"><?php echo _JLIST_BACKEND_FILES_COPY_TITLE.' '; ?></th>
        </tr>
        <tr>
           <td width="30%" valign="top"><b><?php echo _JLIST_BACKEND_FILES_COPY_DESC; ?></b><br /><br />
       <?php 
           // build cat tree listbox
           $src_list = array();
           $query = "SELECT cat_id AS id, parent_id AS parent, cat_title AS name FROM #__jdownloads_cats ORDER BY ordering";
           $database->setQuery( $query );
           $cats2 = $database->loadObjectList();
           $preload = array();
           $catlist= mosHTML::treeSelectList( $cats2, 0, $preload, 'cat_id2', 'class="inputbox" size="10"', 'value', 'text', $row->cat_id);
           echo $catlist.'<br />';
           echo '<div align="left"><br /><b>'._JLIST_BACKEND_FILES_COPY_TEXT_3.'</b>:<br />'.mosHTML::yesnoRadioList("filespublish","",(0) ? 1:0).'</div>';
           echo '<div align="left"><br /><b>'._JLIST_BACKEND_FILES_COPY_TEXT_4.'</b>:<br />'.mosHTML::yesnoRadioList("copyalsofiles","",(0) ? 1:0).'</div>';
      ?> 
       </td>
       <td width="30%" valign="top">
       <b><?php echo _JLIST_BACKEND_FILES_COPY_TEXT_1; ?></b><br />
       <ul>
       <?php foreach ($files as $file){
                echo '<li>'.$file->file_title.'</li>';
       } 
       ?></ul>
       </td>
       <td width="30%" valign="top"> 
         <b><?php echo _JLIST_BACKEND_FILES_COPY_TEXT_2; ?></b>  
        </tr>
        
        
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="option" value="<?php echo $option; ?>" />
    <input type="hidden" name="task" value="files.copy.save" /> 
    <input type="hidden" name="cid2" value="<?php echo $files_id; ?>" />
    <input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>" /> 
    <input type="hidden" name="hidemainmenu" value="0" />
   </table>
   </form>
  <?php 
    
}    

/*
/  Display the main component control panel
*/

function controlPanel($option, $task) {
    global $mosConfig_absolute_path, $mainframe, $mosConfig_live_site, $jlistConfig;
?>
    <table class="jdadminpanel" border="0">
		<th><div align="center">
                <img src="components/com_jdownloads/images/jdownloads.jpg" alt="jDownloads Logo">
        </div>
        </th>
	</table>

<!-- ICON begin -->

    <table class="adminform">
        <tr>

	       <td width="40%" valign="top">

    	   	<div id="cpanel">

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_jdownloads&task=files.list" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_FILES;?>">
                <img src="components/com_jdownloads/images/downloads.png" width="48px" height="48px" align="middle" border="0"/>
            	<br />
	            <?php echo _JLIST_BACKEND_CPANEL_FILES;?>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_jdownloads&task=categories.list" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_CATEGORIES;?>">
	            <img src="components/com_jdownloads/images/categories.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_CATEGORIES;?>
	            </a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=license.list" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_LICENSE;?>">
	            <img src="components/com_jdownloads/images/licenses.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_LICENSE;?>
	            </a>
			</div>
		</div>

<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=templates.menu" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_TEMPLATES;?>">
	            <img src="components/com_jdownloads/images/template.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_TEMPLATES;?>
	            </a>
			</div>
		</div>

<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=config.show" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_SETTINGS;?>">
	            <img src="components/com_jdownloads/images/config.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_SETTINGS;?>
	            </a>
			</div>
		</div>
		
<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=backup" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_BACKUP;?>">
	            <img src="components/com_jdownloads/images/backup.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_BACKUP;?>
	            </a>
			</div>
		</div>
		
<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=restore" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_RESTORE;?>">
	            <img src="components/com_jdownloads/images/restore.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_RESTORE;?>
	            </a>
			</div>
		</div>
		
<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=info" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_INFO;?>">
	            <img src="components/com_jdownloads/images/info.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_INFO;?>
	            </a>
			</div>
		</div>

<div style="float:left;">
			<div class="icon">
	            <a href="http://www.joomlaaddons.de" target="_blank" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_SUPPORT;?>">
	            <img src="components/com_jdownloads/images/support.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_SUPPORT;?>
	            </a>
			</div>
		</div>
	</div>

<!-- ICON END -->

    <div style="clear:both;"> </div>
	</td>

<!-- TABS begin -->
	<td width="60%" valign="top">
		<div style="width: 100%;"><br />
            <?php // beispieldaten option
            if (!is_dir($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/'._JLIST_SAMPLE_DATA_CAT_NAME_ROOT)){ ?>
                <div align="right"><a href="index2.php?option=com_jdownloads&task=install.sample" title="<?php echo _JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT;?>"><?php echo _JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT.' >> ';?></a></div> <?php } ?>
			
            <form action="index2.php" method="post" name="adminForm">

              <?php	$tabs = new mosTabs(1);  //parameter 1,0 1 setzt cookie
                    $tabs->startPane('paneltabs');

                    $tabs->startTab(_JLIST_BACKEND_PANEL_TABTEXT_STATUS,'status');
              ?>
              <table width="100%" border="0">
                <tr>
                    <th class="title"><?php echo _JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER." "; ?></th>
                </tr>
                <tr>
   		          <td valign="top" align="left" width="100%">
                    <?php echo _JLIST_BACKEND_PANEL_STATUS_TITEL.' ';
                        if ($jlistConfig['offline']) {
                            echo _JLIST_BACKEND_PANEL_STATUS_OFFLINE; ?><br /><br />
                            <?php echo _JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE; ?><br /><br />
                            <?php
                        } else {
                            echo _JLIST_BACKEND_PANEL_STATUS_ONLINE; ?><br /><br />
                            <?php echo _JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE; ?><br /><br />
                            <?php
                        } ?>
                  </td>
               </tr>

               <tr>
                    <th class="title"><?php echo _JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER." "; ?></th>
                </tr>
               <tr>
                <td>
                    <?php
                     if($jlistConfig['files.autodetect']){
                       checkFiles($task);
                     } else {
                       echo '<b><font color="#FF6600">'._JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC.'</font></b><br />';
                     }
                    ?>
                    <br />
                </td>
               </tr>

              </table>
              <?php
               $tabs->endTab();
               
              $tabs->startTab(_JLIST_BACKEND_PANEL_TABTEXT_3,'log');
              ?>
              <table width="100%" border="0">
               <tr>
                    <th class="title"><?php echo _JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE." "; ?></th>
               </tr>

                  <tr>
                     <td valign="top" align="left" width="100%">
                         <?php echo $jlistConfig['last.log.message']; ?>
                  </td>
               </tr>
              </table>
              <?php
               $tabs->endTab();
               
              $tabs->startTab(_JLIST_BACKEND_PANEL_TABTEXT_4,'restore log');
              ?>
              <table width="100%" border="0">
               <tr>
                    <th class="title"><?php echo _JLIST_BACKEND_RESTORE_LOG_TAB_TITLE." "; ?></th>
               </tr>

                  <tr>
                     <td valign="top" align="left" width="100%">
                         <?php echo $jlistConfig['last.restore.log']; ?>
                  </td>
               </tr>
              </table>
              <?php
               $tabs->endTab();
              
              $tabs->startTab(_JLIST_BACKEND_PANEL_TABTEXT_5,'server limits');
              ?>
              <table width="100%" border="0">
               <tr>
                    <th class="title"><?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_TITLE." "; ?></th>
               </tr>

                  <tr>
                     <td valign="top" align="left" width="100%">
                         <?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_DESC; ?>
                  </td>
               </tr>
               <tr>
                 <td style="background-color:#DCDCDC;">
                 <?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS; 
                       if (get_cfg_var(file_uploads)){ echo _JLIST_FE_YES; } else { echo _JLIST_FE_NO; } ?><br /> 
                 <?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE.' '.get_cfg_var (upload_max_filesize); ?><br />
                 <?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE.' '.get_cfg_var (post_max_size); ?><br />
                 <?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT.' '.get_cfg_var (memory_limit); ?><br /> 
                 <?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME.' '.get_cfg_var (max_input_time); ?><br />
                 <?php echo _JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME.' '.get_cfg_var (max_execution_time); ?><br />
                 </td>
               </tr>
              </table>
              <?php
               $tabs->endTab();
                             
              $tabs->startTab(_JLIST_BACKEND_PANEL_TABTEXT_2,'version');
              ?>
              <table width="100%" border="0">
               <tr>
                    <th class="title"><?php echo _JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER." "; ?></th>
               </tr>

   		       <tr>
   		          <td valign="top" align="left" width="100%">
           	          <?php echo '<b><font color="#990000">jDownloads '.$jlistConfig['jd.version'].' '.$jlistConfig['jd.version.state'].' Build '.$jlistConfig['jd.version.svn'].'</font></b>'._JLIST_VERSION;?>
                  </td>
               </tr>
              </table>
              <?php
               $tabs->endTab();

               $tabs->endPane('paneltabs');?>

        </div>
    </td>

<!-- TABS END -->

    </tr>
</table>

<?php
}

/**********************************************
/ Licenses
/ ********************************************/

// Licenses list

function listLicense($rows, $option){
	global $mosConfig_live_site, $jlistConfig;

	mosCommonHTML::loadOverlib();
?>
	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
	  		<td colspan="3" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right" colspan="4"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_LICLIST_TITLE_HEAD;?></font></td>
		</tr>
		
	  <tr>
		  <td colspan="7">&nbsp;</td>
	  </tr>
		<tr>
			<th width="5" align="left"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th class="title"><?php echo _JLIST_BACKEND_LICLIST_TITLE." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_LICLIST_LINK." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION." "; ?></th>
        </tr>
		<?php
		$k = 0;
		for($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			//$row->id = $row->cat_id;
			$link 		= 'index2.php?option=com_jdownloads&task=license.edit&hidemainmenu=1&cid='.$row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
		<tr class="<?php echo "row$k"; ?>">
			<td><?php echo $checked; ?></td>
			<td><a href="<?php echo $link; ?>" title="<?php echo _JLIST_BACKEND_LICEDIT_EDIT;?>"><?php echo $row->license_title; ?></a></td>

			<td><a href="<?php echo $row->license_url; ?>" target="_blank"><?php echo $row->license_url; ?></a></td>
            <td>
            <?php
                if (strlen($row->license_text) > 200 ) {
                   echo substr($row->license_text, 0, 197).'...';
                } else {
                   echo $row->license_text;
                }
            ?>
            </td>

            <?php $k = 1 - $k;  } ?>
		</tr>
	</table>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="hidemainmenu" value="0">
</form>

<?php
}

function editLicense($option, $row){
global $mosConfig_live_site, $jlistConfig;
	?>

	<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'license.cancel') {
			submitform( pressbutton );
			return;
		}

		// do field validation
		if (form.license_title.value == ""){
			alert( "<?php echo _JLIST_BACKEND_LICEDIT_ERROR_TITLE;?>" );
		} else {
			submitform( pressbutton );
		}
	}
	</script>

	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo $row->id ? _JLIST_BACKEND_LICEDIT_EDIT : _JLIST_BACKEND_LICEDIT_ADD;?></font></td>
		</tr>
	</table>
	<table width="100%" border="0">
		<tr>
			<td width="100%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->id ? _JLIST_BACKEND_LICEDIT_EDIT : _JLIST_BACKEND_LICEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table>
		  					<tr>
		    					<td><strong><?php echo _JLIST_BACKEND_LICEDIT_LIC_TITLE." "; ?></strong><br />
		    						<input name="license_title" value="<?php echo $row->license_title; ?>" size="70" maxlength="50"/>
		       					</td>
		  					</tr>
                            <tr>
		    					<td><strong><?php echo _JLIST_BACKEND_LICEDIT_LIC_URL." "; ?></strong><br />
		    						<input name="license_url" value="<?php echo $row->license_url; ?>" size="70" maxlength="255"/>
		       					</td>
		  					</tr>
		  					<tr>
		  						<td><strong><?php echo _JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION." "; ?></strong><br />
	  							<?php
                                 if ($jlistConfig['licenses.editor'] == "1") {
									editorArea( 'license_text',  $row->license_text , 'license_text', '100%', '500', '80', '20' ) ;
                                 } else {?>
                                    <textarea name="license_text" rows="20" cols="80"><?php echo $row->license_text; ?></textarea>
                                <?php
                                } ?>

		  						</td>
		  					</tr>
		  				</table>
		  			</td>
		  		</tr>
			</table>
			</td>
		</tr>
	</table>
<br /><br />

		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0">
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
		<input type="hidden" name="task" value="" />
	</form>

<?php
}

/**********************************************
/ Templates
/ ********************************************/

 /* Display the submenu for templates
 */

function controlPanelTemplate($option) {
    global $mosConfig_absolute_path, $mainframe, $mosConfig_live_site, $_VERSION;
    ?>

    <table class="jdadminpanel" border="0">
		<tr>
			<th>
                <?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_NAME; ?>
            </th>
		</tr>
	</table>

<!-- ICON begin -->

    <table class="adminform">
        <tr>

	       <td width="40%" valign="top">

    	   	<div id="cpanel">

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_jdownloads&task=templates.list.cats" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_CATS;?>">
	            <img src="components/com_jdownloads/images/template.png" width="48px" height="48px" align="middle" border="0"/>
                <br />
	            <?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_CATS;?>
	            </a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=templates.list.files" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_FILES;?>">
	            <img src="components/com_jdownloads/images/template.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_FILES;?>
	            </a>
            </div>
		</div>

        <div style="float:left;">
            <div class="icon">
                <a href="index2.php?option=com_jdownloads&task=templates.list.details" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS;?>">
                <img src="components/com_jdownloads/images/template.png" width="48px" height="48px" align="middle" border="0"/>
                <br />
                <?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS;?>
                </a>
            </div>
        </div>
        
        
				<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=templates.list.summary" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY;?>">
	            <img src="components/com_jdownloads/images/template.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY;?>
	            </a>
			</div>
		</div>

<div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=css.edit" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_EDIT_CSS_TITLE;?>">
	            <img src="components/com_jdownloads/images/css.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_EDIT_CSS_TITLE;?>
	            </a>
			</div>
		</div>

     <?php
      if ( $_VERSION->RELEASE < '1.5' ) { ?>
        <div style="float:left;">
			<div class="icon">
	            <a href="index2.php?option=com_jdownloads&task=language.edit" style="text-decoration:none;" title="<?php echo _JLIST_BACKEND_EDIT_LANG_TITLE;?>">
	            <img src="components/com_jdownloads/images/langmanager.png" width="48px" height="48px" align="middle" border="0"/>
	            <br />
	            <?php echo _JLIST_BACKEND_EDIT_LANG_TITLE;?>
	            </a>
			</div>
		</div>
        <?php } ?>
	</div>


<!-- ICON END -->

    <div style="clear:both;"> </div>
	</td>

<!-- TABS begin -->
	<td width="60%" valign="top">
      <form action="index2.php" method="post" name="adminForm">
		<div style="width: 100%;">
            
              <?php	$tabs = new mosTabs(1);  //parameter 1,0 1 setzt cookie
                    $tabs->startPane('temppaneltabs');

                    $tabs->startTab(_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO,'Info');
              ?>
              <table width="100%" border="0">
   		       <tr>
   		          <td valign="top" align="left" width="100%">
                     <?php echo  _JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD; ?>
                     <?php echo  _JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO._JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2; ?>
                  </td>
               </tr>
              </table>
              <?php
               $tabs->endTab();
               $tabs->endPane('temppaneltabs');?>
        </div>
    </td>
<!-- TABS END -->
    </tr>
</table>

	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="controlPanel" />
</form>

<?php
}


// Templates list

function listTemplatesCats($rows, $option){
	global $mosConfig_live_site, $jlistConfig;

    $temp_typ = array();
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP1;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP2;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP3;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP4;

	mosCommonHTML::loadOverlib();
?>
	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
	  		<td colspan="3" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right" colspan="4"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD;?></font></td>
		</tr>

	  <tr align="right">
		  <td colspan="7"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED_DESC; ?></td>
	  </tr>
		<tr>
			<th width="5" align="left"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TITLE." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TYP." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_ACTIVE." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED." "; ?></th>
        </tr>
		<?php
		$k = 0;
		for($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$link 		= 'index2.php?option=com_jdownloads&task=templates.edit.cats&hidemainmenu=1&cid='.$row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
		<tr class="<?php echo "row$k"; ?>">
			<td><?php echo $checked; ?></td>
			<td><a href="<?php echo $link; ?>" title="<?php echo _JLIST_BACKEND_TEMPEDIT_EDIT;?>"><?php echo $row->template_name; ?></a></td>

            <td>
            <?php
            echo $temp_typ[$row->template_typ -1]; ?>
            </td>

            <td>
            <?php
            if ($row->template_active > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>
            </td>
            
			<td>
            <?php
            if ($row->locked > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>
            </td>

            <?php $k = 1 - $k;  } ?>
		</tr>
	</table>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="hidemainmenu" value="0">
</form>

<?php
}

function editTemplatesCats($option, $row){
global $mosConfig_live_site, $jlistConfig;
    ?>
    <script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'templates.cancel.cats') {
			submitform( pressbutton );
			return;
		}

		if (form.template_name.value == ""){
			alert( "<?php echo _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE;?>" );
		} else {
			submitform( pressbutton );
		}
	}
	</script>

	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></font></td>
		</tr>
	</table>
	<table width="100%" border="0">
		<tr>
			<td width="100%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table>
		  					<tr valign="top">
		    					<td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NAME." "; ?></strong><br />
		    					    <?php 
                                          if ($row->locked){
                                             $dis = 'disabled="disabled"'; 	
                                          } else {
                                             $dis = '';
                                          } ?>
                                    <input name="template_name" value="<?php echo $row->template_name; ?>" <?php echo $dis; ?> size="70" maxlength="64"/>
		       					</td>
                                <td><?php if (!$dis) { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION; 
                                        } else { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION.'<br />'._JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK; }?>
                                   </td>
   		  					</tr>
                            <tr valign="top">
                                <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_TITLE." "; ?></strong><br />
                                    <textarea name="note" rows="1" cols="80"><?php echo $row->note; ?></textarea>
                                   </td>
                                   <td><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_DESC; ?>
                                   </td>
                              </tr>
		  					<tr>
		  						<td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_TEXT." "; ?></strong><br />
		  							<?php
                                    if ($jlistConfig['layouts.editor'] == "1") {
                                    	editorArea( 'template_text',  $row->template_text , 'template_text', '100%', '500', '80', '20' ) ;
                                        } else {?>
                                        <textarea name="template_text" rows="20" cols="80"><?php echo $row->template_text; ?></textarea>
                                        <?php
                                        } ?>
		  						</td>
		       					<td valign="top">
                                   <?php
                                        echo _JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC.'<br /><br />'._JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC2.'<br /><br />'._JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC3;
                                   ?>
		       					</td>
		  					</tr>

                            <tr>
		      		           <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE." "; ?>
                               </th>
		      	            </tr>
                            <tr>
                               <td>
                               <br />
                                <div><img src="components/com_jdownloads/images/downloads_cats.gif" alt="Templates Infos" border="1" /></div>
                              </td>
                              <td valign="top"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT;?>
                              </td>
                            </tr>

		  				</table>
		  			</td>
		  		</tr>
			</table>
			</td>
		</tr>
	</table>
<br /><br />

		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
        <input type="hidden" name="tempname" value="<?php echo $row->template_name; ?>" />
        <input type="hidden" name="locked" value="<?php echo $row->locked; ?>" />        
		<input type="hidden" name="task" value="" />
	</form>

<?php
}

// Templates list

function listTemplatesFiles($rows, $option){
	global $mosConfig_live_site, $jlistConfig;

    $temp_typ = array();
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP1;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP2;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP3;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP4;

	mosCommonHTML::loadOverlib();
?>
	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
	  		<td colspan="3" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right" colspan="4"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD;?></font></td>
		</tr>

	  <tr align="right">
		  <td colspan="7"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED_DESC; ?></td>
	  </tr>
		<tr>
			<th width="5" align="left"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TITLE." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TYP." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_ACTIVE." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED." "; ?></th>
        </tr>
		<?php
		$k = 0;
		for($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$link 		= 'index2.php?option=com_jdownloads&task=templates.edit.files&hidemainmenu=1&cid='.$row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
		<tr class="<?php echo "row$k"; ?>">
			<td><?php echo $checked; ?></td>
			<td><a href="<?php echo $link; ?>" title="<?php echo _JLIST_BACKEND_TEMPEDIT_EDIT;?>"><?php echo $row->template_name; ?></a></td>

            <td>
            <?php
            echo $temp_typ[$row->template_typ -1]; ?>
            </td>

            <td>
            <?php
            if ($row->template_active > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>

            </td>
            
            <td>
            <?php
            if ($row->locked > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>
            </td>

            <?php $k = 1 - $k;  } ?>
		</tr>
	</table>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="hidemainmenu" value="0" />
</form>

<?php
}

function listTemplatesDetails($rows, $option){
    global $mosConfig_live_site, $jlistConfig;

    $temp_typ = array();
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP1;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP2;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP3;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP4;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP5;
    
    mosCommonHTML::loadOverlib();
?>
    <form action="index2.php" method="post" name="adminForm">
    <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
        <tr>
              <td colspan="3" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
              <td class="sectionname" align="right" colspan="4"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD;?></font></td>
        </tr>

      <tr align="right">
          <td colspan="7"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED_DESC; ?></td>
      </tr>
        <tr>
            <th width="5" align="left"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>
            <th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TITLE." "; ?></th>
            <th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TYP." "; ?></th>
            <th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_ACTIVE." "; ?></th>
            <th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED." "; ?></th>
        </tr>
        <?php
        $k = 0;
        for($i=0, $n=count( $rows ); $i < $n; $i++) {
            $row = &$rows[$i];
            $link         = 'index2.php?option=com_jdownloads&task=templates.edit.details&hidemainmenu=1&cid='.$row->id;
            $checked     = mosCommonHTML::CheckedOutProcessing( $row, $i );
            ?>
        <tr class="<?php echo "row$k"; ?>">
            <td><?php echo $checked; ?></td>
            <td><a href="<?php echo $link; ?>" title="<?php echo _JLIST_BACKEND_TEMPEDIT_EDIT;?>"><?php echo $row->template_name; ?></a></td>

            <td>
            <?php
            echo $temp_typ[$row->template_typ -1]; ?>
            </td>

            <td>
            <?php
            if ($row->template_active > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>

            </td>
            
            <td>
            <?php
            if ($row->locked > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>
            </td>

            <?php $k = 1 - $k;  } ?>
        </tr>
    </table>
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="option" value="<?php echo $option; ?>" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="hidemainmenu" value="0" />
</form>

<?php
}

function editTemplatesFiles($option, $row){
global $mosConfig_live_site, $jlistConfig;
    ?>
    <script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'templates.cancel.files') {
			submitform( pressbutton );
			return;
		}

		if (form.template_name.value == ""){
			alert( "<?php echo _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE;?>" );
		} else {
			submitform( pressbutton );
		}
	}
	</script>

	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></font></td>
		</tr>
	</table>
	<table width="100%" border="0">
		<tr>
			<td width="100%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table>
		  					<tr valign="top">
		    					<td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NAME." "; ?></strong><br />
		    						<?php 
                                          if ($row->locked){
                                             $dis = 'disabled="disabled"';     
                                          } else {
                                             $dis = '';
                                          } ?>
                                    <input name="template_name" value="<?php echo $row->template_name; ?>" <?php echo $dis; ?> size="70" maxlength="64"/>
		       					</td>
		       					<td><?php if (!$dis) { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION; 
                                        } else { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION.'<br />'._JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK; }?>
                                   </td>
		  					</tr>

                            <tr valign="top">
                                <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_TITLE." "; ?></strong><br />
                                    <textarea name="note" rows="1" cols="80"><?php echo $row->note; ?></textarea>
                                   </td>
                                   <td><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_DESC; ?>
                                   </td>
                              </tr>
                              
<tr valign="top">
                                <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE." "; ?></strong><br />
                                   <?php 
                                   $checkboxed = array();
                                   $checkboxed[] = mosHTML::makeOption( '0', _JLIST_FE_YES);
                                   $checkboxed[] = mosHTML::makeOption( '1', _JLIST_FE_NO);
                                   echo mosHTML::selectList( $checkboxed, 'checkbox_off', 'size="1" class="inputbox"', 'value', 'text', $row->checkbox_off );
                                  ?>                    
                                   </td>
                                   <td><?php echo _JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC; ?>
                                   </td>
                              </tr>                              

                              <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE." "; ?></strong><br />
                                   <?php 
                                   $symbols = array();
                                   $symbols[] = mosHTML::makeOption( '0', _JLIST_FE_YES);
                                   $symbols[] = mosHTML::makeOption( '1', _JLIST_FE_NO);
                                   echo mosHTML::selectList( $symbols, 'symbol_off', 'size="1" class="inputbox"', 'value', 'text', $row->symbol_off );
                                  ?>                    
                                   </td>
                                   <td><?php echo _JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC; ?>
                                   </td>
                              </tr>                            
                            
		  					<tr>
		  						<td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_TEXT." "; ?></strong><br />
		  							<?php
                                    if ($jlistConfig['layouts.editor'] == "1") {
                                    	editorArea( 'template_text',  $row->template_text , 'template_text', '100%', '500', '80', '20' ) ;
                                        } else {?>
                                        <textarea name="template_text" rows="20" cols="80"><?php echo $row->template_text; ?></textarea>
                                        <?php
                                        } ?>
		  						</td>
		       					<td valign="top">
                                   <?php
                                        echo _JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC.'<br /><br />'._JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC2.'<br /><br />'._JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX;
                                   ?>
		       					</td>
		  					</tr>

                            <tr>
	      		              <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE." "; ?></th>
           	                  </tr>
                              <tr><td>
                              <br />
                              <div><img src="components/com_jdownloads/images/downloads_files.gif" alt="Templates Infos" border="1" /></div>
                              </td>
                              <td valign="top"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT;?>
                              </td>
                              </tr>

		  				</table>
		  			</td>
		  		</tr>
			</table>
			</td>
		</tr>
	</table>
<br /><br />

		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
        <input type="hidden" name="tempname" value="<?php echo $row->template_name; ?>" />
        <input type="hidden" name="locked" value="<?php echo $row->locked; ?>" />
        <input type="hidden" name="task" value="" />
	</form>

<?php
}

function editTemplatesDetails($option, $row){
global $mosConfig_live_site, $jlistConfig;
    ?>
    <script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
        var form = document.adminForm;
        if (pressbutton == 'templates.cancel.details') {
            submitform( pressbutton );
            return;
        }

        if (form.template_name.value == ""){
            alert( "<?php echo _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE;?>" );
        } else {
            submitform( pressbutton );
        }
    }
    </script>

    <form action="index2.php" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <tr>
              <td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
              <td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></font></td>
        </tr>
    </table>
    <table width="100%" border="0">
        <tr>
            <td width="100%" valign="top">
            <table cellpadding="4" cellspacing="1" border="0" class="adminform">
                <tr>
                      <th colspan="2"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></th>
                  </tr>
                  <tr>
                      <td valign="top" align="left" width="100%">
                          <table>
                              <tr valign="top">
                                <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NAME." "; ?></strong><br />
                                    <?php 
                                          if ($row->locked){
                                             $dis = 'disabled="disabled"';     
                                          } else {
                                             $dis = '';
                                          } ?>
                                    <input name="template_name" value="<?php echo $row->template_name; ?>" <?php echo $dis; ?> size="70" maxlength="64"/>
                                   </td>
                                   <td><?php if (!$dis) { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION; 
                                        } else { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION.'<br />'._JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK; }?>
                                   </td>
                              </tr>
                              <tr valign="top">
                                <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_TITLE." "; ?></strong><br />
                                    <textarea name="note" rows="1" cols="80"><?php echo $row->note; ?></textarea>
                                   </td>
                                   <td><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_DESC; ?>
                                   </td>
                              </tr>
                              <tr>
                                  <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_TEXT." "; ?></strong><br />
                                      <?php
                                    if ($jlistConfig['layouts.editor'] == "1") {
                                        editorArea( 'template_text',  $row->template_text , 'template_text', '100%', '500', '80', '20' ) ;
                                        } else {?>
                                        <textarea name="template_text" rows="20" cols="80"><?php echo $row->template_text; ?></textarea>
                                        <?php
                                        } ?>
                                  </td>
                                   <td valign="top">
                                   <?php
                                        echo _JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC.'<br /><br />'._JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX;
                                   ?>
                                   </td>
                              </tr>

                            <tr>
                                <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE." "; ?></th>
                                 </tr>
                              <tr><td>
                              <br />
                              <div><img src="components/com_jdownloads/images/downloads_details.gif" alt="Templates Infos" border="1" /></div>
                              </td>
                              <td valign="top"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT;?>
                              </td>
                              </tr>

                          </table>
                      </td>
                  </tr>
            </table>
            </td>
        </tr>
    </table>
<br /><br />

        <input type="hidden" name="boxchecked" value="0" />
        <input type="hidden" name="hidemainmenu" value="0" />
        <input type="hidden" name="option" value="<?php echo $option; ?>" />
        <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
        <input type="hidden" name="tempname" value="<?php echo $row->template_name; ?>" />
        <input type="hidden" name="locked" value="<?php echo $row->locked; ?>" />
        <input type="hidden" name="task" value="" />
    </form>

<?php
}

// Templates list

function listTemplatesSummary($rows, $option){
	global $mosConfig_live_site, $jlistConfig;

    $temp_typ = array();
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP1;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP2;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP3;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP4;
    $temp_typ[] = _JLIST_BACKEND_TEMP_TYP5; 
    
	mosCommonHTML::loadOverlib();
?>
	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
	  		<td colspan="3" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right" colspan="4"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD;?></font></td>
		</tr>

	  <tr align="right">
		  <td colspan="7"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED_DESC; ?></td>
	  </tr>
		<tr>
			<th width="5" align="left"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TITLE." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_TYP." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_ACTIVE." "; ?></th>
			<th class="title"><?php echo _JLIST_BACKEND_TEMPLIST_LOCKED." "; ?></th>
        </tr>
		<?php
		$k = 0;
		for($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$link 		= 'index2.php?option=com_jdownloads&task=templates.edit.summary&hidemainmenu=1&cid='.$row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
		<tr class="<?php echo "row$k"; ?>">
			<td><?php echo $checked; ?></td>
			<td><a href="<?php echo $link; ?>" title="<?php echo _JLIST_BACKEND_TEMPEDIT_EDIT;?>"><?php echo $row->template_name; ?></a></td>

            <td>
            <?php
            echo $temp_typ[$row->template_typ -1]; ?>
            </td>

            <td>
            <?php
            if ($row->template_active > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>
            </td>

			<td>
            <?php
            if ($row->locked > 0) { ?>
                <img src="components/com_jdownloads/images/active.png" width="12px" height="12px" align="middle" border="0"/>
            <?php } ?>
            </td>

            <?php $k = 1 - $k;  } ?>
		</tr>
	</table>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="hidemainmenu" value="0" />
</form>

<?php
}

function editTemplatesSummary($option, $row){
global $mosConfig_live_site, $jlistConfig;
    ?>
    <script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'templates.cancel.summary') {
			submitform( pressbutton );
			return;
		}

		if (form.template_name.value == ""){
			alert( "<?php echo _JLIST_BACKEND_TEMPEDIT_ERROR_TITLE;?>" );
		} else {
			submitform( pressbutton );
		}
	}
	</script>

	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></font></td>
		</tr>
	</table>
	<table width="100%" border="0">
		<tr>
			<td width="100%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo $row->id ? _JLIST_BACKEND_TEMPEDIT_EDIT : _JLIST_BACKEND_TEMPEDIT_ADD;?></th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table>
		  					<tr valign="top">
		    					<td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NAME." "; ?></strong><br />
		    					<?php 
                                          if ($row->locked){
                                             $dis = 'disabled="disabled"';     
                                          } else {
                                             $dis = '';
                                          } ?>
                                    <input name="template_name" value="<?php echo $row->template_name; ?>" <?php echo $dis; ?> size="70" maxlength="64"/>
		       					</td>
		       					<td><?php if (!$dis) { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION; 
                                        } else { echo _JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION.'<br />'._JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK; }?>
                                   </td>
		  					</tr>
                            <tr valign="top">
                                <td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_TITLE." "; ?></strong><br />
                                    <textarea name="note" rows="1" cols="80"><?php echo $row->note; ?></textarea>
                                   </td>
                                   <td><?php echo _JLIST_BACKEND_TEMPEDIT_NOTE_DESC; ?>
                                   </td>
                              </tr>
		  					<tr>
		  						<td><strong><?php echo _JLIST_BACKEND_TEMPEDIT_TEXT." "; ?></strong><br />
		  							<?php
                                    if ($jlistConfig['layouts.editor'] == "1") {
                                    	editorArea( 'template_text',  $row->template_text , 'template_text', '100%', '500', '80', '20' ) ;
                                        } else {?>
                                        <textarea name="template_text" rows="20" cols="80"><?php echo $row->template_text; ?></textarea>
                                        <?php
                                        } ?>
		  						</td>
		       					<td valign="top">
                                   <?php
                                        echo _JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC;
                                   ?>
		       					</td>
		  					</tr>

                            <tr>
	      		              <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE." "; ?></th>
           	                  </tr>
                              <tr><td>
                              <br />
                              <div><img src="components/com_jdownloads/images/summary.gif" alt="Templates Infos" border="1" /></div>
                              </td>
                              <td valign="top"><?php echo _JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT;?>
                              </td>
                              </tr>

		  				</table>
		  			</td>
		  		</tr>
			</table>
			</td>
		</tr>
	</table>
<br /><br />

		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
        <input type="hidden" name="tempname" value="<?php echo $row->template_name; ?>" />
        <input type="hidden" name="locked" value="<?php echo $row->locked; ?>" />
		<input type="hidden" name="task" value="" />
	</form>

<?php
}

// css edit
function cssEdit($option, $css_file, $css_writable) {

    //$css_file = stripslashes($css_file);
    $f=fopen($css_file,"r");
    $css_text = fread($f, filesize($css_file));
    $css_text = htmlspecialchars($css_text);
    ?>

	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_EDIT_CSS_TITLE;?></font></td>
		</tr>
	</table>
	<table width="100%" border="0">
		<tr>
			<td width="100%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_EDIT_CSS_TITLE;?> </th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table>
		  					<tr colspan="2" valign="top">
		    					<td><strong>
                                    <?php
                                        echo _JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT." ";
                                        if ($css_writable) {
                                            echo _JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES;
                                        } else {
                                            echo _JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO;
                                            ?>
                                            </strong><br />
                                            <?php echo _JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO; ?><br />
                                        <?php } ?>
		       					</td>
		  					</tr>
		  					<tr>
		  						<td><strong><?php echo _JLIST_BACKEND_EDIT_CSS_FIELD_TITLE.": ".$css_file; ?></strong><br />
                                    <textarea name="css_text" rows="36" cols="100"><?php echo $css_text ?></textarea>
		  						</td>
		  					</tr>
		  				</table>
		  			</td>
		  		</tr>
			</table>
			</td>
		</tr>
	</table>
<br /><br />

		<input type="hidden" name="css_file" value="<?php echo $css_file; ?>" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="" />
	</form>
	<?php
}

// language edit
function languageEdit($option, $lang_file, $lang_writable) {
?>

    <?php
    //$lang_file = stripslashes($lang_file);
    $f=fopen($lang_file,"r");
    $lang_text = fread($f, filesize($lang_file));
    $lang_text = htmlspecialchars($lang_text);

    ?>
    
	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_EDIT_LANG_TITLE;?></font></td>
		</tr>
	</table>
	<table width="100%" border="0">
		<tr>
			<td width="100%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_EDIT_LANG_TITLE;?> </th>
		      	</tr>
		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table>
		  					<tr colspan="2" valign="top">
		    					<td><strong>
                                <?php
                                echo _JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT." ";
                                if ($lang_writable) {
                                    echo _JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES;
                                } else {
                                    echo _JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO;
                                    ?>
                                    </strong><br />
		       					    <?php echo _JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO; ?>
                                    <?php } ?>
		       					</td>
		  					</tr>

		  					<tr>
		  						<td><strong><?php echo _JLIST_BACKEND_EDIT_LANG_FIELD_TITLE.": ".$lang_file; ?></strong><br />
                                    <textarea name="lang_text" rows="36" cols="100"><?php echo $lang_text ?></textarea>
		  						</td>
		  					</tr>
		  				</table>
		  			</td>
		  		</tr>
			</table>
			</td>
		</tr>
	</table>
<br /><br />
		<input type="hidden" name="lang_file" value="<?php echo $lang_file; ?>" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="" />
	</form>
	<?php
}

/* ==============================================
/  Configuration
/ =============================================== */
function showConfig($option, $list_sortorder, $cats_sortorder, $user_groups, $file_plugin_inputbox, $file_plugin_inputbox2, $inputbox_pic, $inputbox_pic_file, $inputbox_hot, $inputbox_new, $inputbox_down, $inputbox_mirror_1, $inputbox_mirror_2, $inputbox_upd){
	global $jlistConfig, $mosConfig_absolute_path, $mosConfig_live_site, $mainframe;

  ?>

  <form action="index2.php" method="post" name="adminForm" id="adminForm">

	<table class="adminlist">
		<tr>
	  		<td colspan="8" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;">
	  		<?php echo _JLIST_BACKEND_SETTINGS;?></font></td>
		</tr>
	</table>
	<div>&nbsp;<br /></div>

<?php	$tabs = new mosTabs(1);  //parameter 1,0 1 setzt cookie
$tabs->startPane('jdconfig');
$tabs->startTab(_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS,'downloads');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">

<?php /* Global config */ ?>
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD." "; ?></th>
		      	</tr>

		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table width="100%">

	                   

						<tr>
       					<td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_UPLOADDIR." "; ?></strong><br />
	    					<?php echo $mosConfig_absolute_path.'/';?>
		    					<input name="jlistConfig[files.uploaddir]" value="<?php echo $jlistConfig['files.uploaddir']; ?>" size="50" />/<br />
	    					<?php echo (is_writable($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'])) ? _JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE : _JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE;?></td>
	   					<td>
	    					<?php echo _JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC;?>
	   					</td>
	  					</tr>

                        <tr>
    					<td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP." "; ?></strong><br />
	    					<?php echo $mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/tempzipfiles';?>
                            <br />
	    					<?php echo (is_writable($mosConfig_absolute_path.'/'.$jlistConfig['files.uploaddir'].'/tempzipfiles')) ? _JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE : _JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE;?></td>
    					<td>
	    					<?php echo _JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC;?>
    					</td>
	  					</tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_DATETIME." "; ?></strong><br />
                                <input name="jlistConfig[global.datetime]" value="<?php echo $jlistConfig['global.datetime']; ?>" size="30" maxlength="50"/></td>
                        <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_DATETIME_DESC;?>
                        </td>
                          </tr>                        
                        
                        <tr>
    					<td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT." "; ?></strong><br />
		    					<input name="jlistConfig[zipfile.prefix]" value="<?php echo $jlistConfig['zipfile.prefix']; ?>" size="30" maxlength="50"/></td>
    					<td>
                            <br />
	    					<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC;?>
    					</td>
	  					</tr>

 						<tr>
    					<td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME." "; ?></strong><br />
		    					<input name="jlistConfig[tempfile.delete.time]" value="<?php echo $jlistConfig['tempfile.delete.time']; ?>" size="10" maxlength="10"/></td>
    					<td>
                            <br />
	    					<?php echo _JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC;?>
    					</td>
	  					</tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE." "; ?></strong><br />
                            <?php echo mosHTML::yesnoRadioList("jlistConfig[direct.download]","",($jlistConfig['direct.download']) ? 1:0);?>
                        </td>
                        <td>
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC;?>
                        </td>
                          </tr>	  					
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES." "; ?></strong><br />
                               <input name="jlistConfig[file.types.view]" value="<?php echo $jlistConfig['file.types.view']; ?>" size="50" maxlength="500"/>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC;?>
                        </td>                
                        </tr> 
                    </table>
                   </td>
                  </tr>
                 </table>
			</td>
		</tr>
	</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE,'autodetect');
?>
<table width="100%" border="0">
    <tr>
        <td width="40%" valign="top">

<?php /* config for autodetect downloads/files */ ?>
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
                <tr>
                      <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE." "; ?></th>
                  </tr>

                  <tr>
                      <td valign="top" align="left" width="100%">
                          <table width="100%">

                       <tr>
                        <td width="330"><strong><font color="#990000"><?php echo _JLIST_BACKEND_SETTINGS_FAUTO." "; ?></font></strong><br />
                            <?php echo mosHTML::yesnoRadioList("jlistConfig[files.autodetect]","",($jlistConfig['files.autodetect']) ? 1:0);?>
                        </td>
                        <td>
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_FAUTO_DESC;?>
                        </td>
                          </tr>
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE." "; ?></strong><br />
                            <?php echo mosHTML::yesnoRadioList("jlistConfig[all.files.autodetect]","",($jlistConfig['all.files.autodetect']) ? 1:0);?>
                        </td>
                        <td>
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC;?>
                        </td>
                        </tr> 
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE." "; ?></strong><br />
                               <input name="jlistConfig[file.types.autodetect]" value="<?php echo $jlistConfig['file.types.autodetect']; ?>" size="50" maxlength="500"/>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC;?>
                        </td>                
                        </tr>                       
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE." "; ?></strong><br />
                            <?php echo mosHTML::yesnoRadioList("jlistConfig[autopublish.founded.files]","",($jlistConfig['autopublish.founded.files']) ? 1:0);?>
                        </td>
                        <td>
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC;?>
                        </td>
                        </tr>
                    </table>
                   </td>
                  </tr>
                 </table>
            </td>
        </tr>
    </table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND,'frontend');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">

<?php /* Frontend config */ ?>
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD." "; ?></th>
		      	</tr>

		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table width="100%">

						<tr>
    					<td width="330"><strong><font color="#990000"><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE." "; ?></font></strong><br />
                               <input name="jlistConfig[jd.header.title]" value="<?php echo $jlistConfig['jd.header.title']; ?>" size="50" maxlength="80" />
                        </td>
    					<td>
    					<br />
    					       <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC;?>
    					</td>
	  					</tr>                        
						
						<tr>
    					<td width="330"><strong><font color="#990000"><?php echo _JLIST_BACKEND_OFFLINE_OPTION_TITLE." "; ?></font></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[offline]","",($jlistConfig['offline']) ? 1:0);?>
                        </td>
    					<td>
    					<br />
    					       <?php echo _JLIST_BACKEND_OFFLINE_OPTION_DESC;?>
    					</td>
	  					</tr>

                        <tr>
		    			<td width="330"><strong><?php echo _JLIST_BACKEND_OFFLINE_MESSAGE_TITLE." "; ?></strong><br />
                                <textarea name="jlistConfig[offline.text]" rows="10" cols="40"><?php echo $jlistConfig['offline.text']; ?></textarea>
                                </td>
		    					<td valign="top"><br />
		    					<?php echo _JLIST_BACKEND_OFFLINE_MESSAGE_DESC;?>
		    					</td>
    					</tr>

                        <tr>
		    			<td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT." "; ?></strong><br />
                                <textarea name="jlistConfig[downloads.titletext]" rows="3" cols="40"><?php echo $jlistConfig['downloads.titletext']; ?></textarea>
                                </td>
		    					<td valign="top"><br />
		    					<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC;?>
		    					</td>
    					</tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[show.header.catlist]","",($jlistConfig['show.header.catlist']) ? 1:0);?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC;?>
                        </td>                
                        </tr>                        
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[view.category.info]","",($jlistConfig['view.category.info']) ? 1:0);?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT;?>
                        </td>                
                        </tr> 
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[option.navigate.top]","",($jlistConfig['option.navigate.top']) ? 1:0);?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT;?>
                        </td>                
                        </tr>
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[option.navigate.bottom]","",($jlistConfig['option.navigate.bottom']) ? 1:0);?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT;?>
                        </td>                
                        </tr>                         

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT." "; ?></strong><br />
		    					<input name="jlistConfig[checkbox.top.text]" value="<?php echo $jlistConfig['checkbox.top.text']; ?>" size="50" maxlength="80"/></td>
    					<td>
    					<br />
    					<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC.'<br />'._JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO;?>
    					</td>
	  					</tr>

						<tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE." "; ?></strong><br />
		    					<input name="jlistConfig[files.per.side]" value="<?php echo $jlistConfig['files.per.side']; ?>" size="10" maxlength="10"/></td>
    					<td>
    					<br />
    					<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC;?>
    					</td>
	  					</tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT." "; ?></strong><br />
                        <?php
                        $catsorder = (int)$jlistConfig['cats.order'];
                        $inputbox = mosHTML::selectList( $cats_sortorder, 'jlistConfig[cats.order]' , 'size="3" class="inputbox"', 'value', 'text', $catsorder );
                        echo $inputbox; ?>
                        </td>
                        <td valign="top">
                        <br />
                        <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC;?>
                        </td>
                          </tr>
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT." "; ?></strong><br />
                        <?php
                        $filesorder = (int)$jlistConfig['files.order'];
                        $inputbox = mosHTML::selectList( $list_sortorder, 'jlistConfig[files.order]' , 'size="5" class="inputbox"', 'value', 'text', $filesorder );
                        echo $inputbox; ?>
                        </td>
    					<td valign="top">
    					<br />
    					<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC;?>
    					</td>
	  					</tr>
                        
                        <tr>
                        <td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[jcomments.active]","",($jlistConfig['jcomments.active']) ? 1:0);?>
                        </td>
                        <td>
                               <?php 
                               $jcomments = $mainframe->getCfg('absolute_path') . '/components/com_jcomments/jcomments.php';
                               if (file_exists($jcomments)) {
                                    echo _JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC;
                               } else {
                                    echo _JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC;
                               } ?>
                        </td>
                          </tr>

		  				</table>
		  			</td>
		  		</tr>
				</table>
				
				<table cellpadding="4" cellspacing="1" border="0" class="adminform">
						
						</table>
					</td>
				</tr>
				</table>						
				
            </td>
		</tr>
	</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND,'backend');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">

<?php /* Backend config */ ?>
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD." "; ?></th>
		      	</tr>

                     <tr>
                        <td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_MANAGER_ACCESS." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[backend.manager.access]","",($jlistConfig['backend.manager.access']) ? 1:0);
                               echo '<br /><br />';?>
                        </td>
                        <td>
                               <?php echo _JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC;?>
                        </td>
                     </tr>
                         
					 <tr>
                        <td width="330"><strong><?php echo _JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE." "; ?></strong><br />
		    					<input name="jlistConfig[files.per.side.be]" value="<?php echo $jlistConfig['files.per.side.be']; ?>" size="10" maxlength="5"/></td>
    					<td>
    					<br />
    					<?php echo _JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC;?>
    					</td>
	  					</tr>

                        <tr>
    					<td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_EDITOR_FILES." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[files.editor]","",($jlistConfig['files.editor']) ? 1:0);?>
                        </td>
    					<td>
    					       <?php echo _JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC;?>
    					</td>
	  					</tr>

                        <tr>
    					<td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_EDITOR_CATS." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[categories.editor]","",($jlistConfig['categories.editor']) ? 1:0);?>
                        </td>
    					<td>
    					       <?php echo _JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC;?>
    					</td>
	  					</tr>

                        <tr>
    					<td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_EDITOR_LICENSES." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[licenses.editor]","",($jlistConfig['licenses.editor']) ? 1:0);?>
                        </td>
    					<td>
    					       <?php echo _JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC;?>
    					</td>
	  					</tr>

                        <tr>
    					<td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[layouts.editor]","",($jlistConfig['layouts.editor']) ? 1:0);?>
                        </td>
    					<td>
    					       <?php echo _JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC;?>
    					</td>
	  					</tr>
	  					
                        <tr>
		    			<td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST." "; ?></strong><br />
                                <textarea name="jlistConfig[language.list]" rows="4" cols="40"><?php echo $jlistConfig['language.list']; ?></textarea>
                                </td>
		    					<td valign="top"><br />
		    					<?php echo _JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC;?>
		    					</td>
    					</tr>

                        <tr>
		    			<td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST." "; ?></strong><br />
                                <textarea name="jlistConfig[system.list]" rows="4" cols="40"><?php echo $jlistConfig['system.list']; ?></textarea>
                                </td>
		    					<td valign="top"><br />
		    					<?php echo _JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC;?>
		    					</td>
    					</tr>

		  				</table>
		  			</td>
		  		</tr>
				</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES,'pics');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">

<?php /* Images config */ ?>
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD." "; ?></th>
		      	</tr>

		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table width="100%">
                        <tr>
                        <td colspan="2">
                        <?php echo _JLIST_BACKEND_SETTINGS_IMAGES_NOTE." "; ?>
                        </td>
                        </tr>
                        <tr>
    					<td valign="top" width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE." "; ?></strong><br />
                          <input name="jlistConfig[info.icons.size]" value="<?php echo $jlistConfig['info.icons.size']; ?>" size="5" maxlength="5"/> px 
                          </td>
    					<td valign="top">
	    					<?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC.'<br />'._JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO.'<br />';
                                  $msize =  $jlistConfig['info.icons.size'];
                                  $sample_path = $mosConfig_live_site.'/images/jdownloads/miniimages/'; 
                                  $sample_pic = '<img src="'.$sample_path.'date.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" /> ';
                                  $sample_pic .= '<img src="'.$sample_path.'language.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" /> ';
                                  $sample_pic .= '<img src="'.$sample_path.'weblink.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" />';
                                  $sample_pic .= '<img src="'.$sample_path.'stuff.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" /> ';
                                  $sample_pic .= '<img src="'.$sample_path.'contact.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" /> ';
                                  $sample_pic .= '<img src="'.$sample_path.'system.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" />';
                                  $sample_pic .= '<img src="'.$sample_path.'currency.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" /> ';
                                  $sample_pic .= '<img src="'.$sample_path.'download.png" align="middle" width="'.$msize.'" height="'.$msize.'" border="0" alt="" />';
                                  echo $sample_pic; ?>
    					</td>
	  					</tr>
                        <tr><td colspan="3"><hr></td></tr>
                        <tr>
                        <td valign="top" width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE." "; ?></strong><br />
                                <input name="jlistConfig[cat.pic.size]" value="<?php echo $jlistConfig['cat.pic.size']; ?>" size="5" maxlength="5"/> px</td>
                        <td valign="top">
                            <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC;?>
                        </td>
                        </tr>
                        <tr>
                          <td valign="top"><strong><?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE." "; ?></strong><br />
                             <?php echo $inputbox_pic; ?>
                          </td>
                          <td valign ="top"><?php echo ' '._JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC; ?>
                          </td>
                        </tr>
                        <tr>
                             <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].cat_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/catimages/'; ?>" + getSelectedText( 'adminForm', 'cat_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib" width="<?php echo $jlistConfig['cat.pic.size']; ?>" height="<?php echo $jlistConfig['cat.pic.size']; ?>" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                             </td>
                        </tr> 
                         <tr><td colspan="3"><hr></td></tr>
                        <tr>
                        <td valign="top" width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE." "; ?></strong><br />
                                <input name="jlistConfig[file.pic.size]" value="<?php echo $jlistConfig['file.pic.size']; ?>" size="5" maxlength="5"/> px</td>
                        <td valign="top">
                            <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC;?>
                        </td>
                        </tr>
                        <tr>
                          <td valign="top"><strong><?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE." "; ?></strong><br />
                             <?php echo $inputbox_pic_file; ?>
                          </td>
                          <td valign ="top"><?php echo ' '._JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC; ?>
                          </td>
                          </tr>

                           <tr>
                             <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].file_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/fileimages/'; ?>" + getSelectedText( 'adminForm', 'file_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib2" width="<?php echo $jlistConfig['file.pic.size']; ?>" height="<?php echo $jlistConfig['file.pic.size']; ?>" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                             </td>
                          </tr>
                          <tr><td colspan="3"><hr></td></tr> 
                          <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_NEW_TITLE." "; ?></strong><br />
                                <input name="jlistConfig[days.is.file.new]" value="<?php echo $jlistConfig['days.is.file.new']; ?>" size="5" maxlength="5"/></td>
                        <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_NEW_DESC;?>
                        </td>
                          </tr>
                          
                         <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE." "; ?></strong><br />
                            <?php echo $inputbox_new; ?>     
                        </td>
                        <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2;?>
                        </td>
                          </tr>
                          <tr>
                          <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].new_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/newimages/'; ?>" + getSelectedText( 'adminForm', 'new_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib4" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                          </td>
                        </tr>  
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_HOT_TITLE." "; ?></strong><br />
                                <input name="jlistConfig[loads.is.file.hot]" value="<?php echo $jlistConfig['loads.is.file.hot']; ?>" size="5" maxlength="10"/></td>
                        <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_HOT_DESC;?>
                        </td>
                          </tr>  
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE." "; ?></strong><br />
                            <?php echo $inputbox_hot; ?>
                        </td>
                        <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC;?>
                        </td>
                        </tr>
                        <tr>
                          <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].hot_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/hotimages/'; ?>" + getSelectedText( 'adminForm', 'hot_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib3" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                          </td>
                        </tr>
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_UPD_TITLE." "; ?></strong><br />
                                <input name="jlistConfig[days.is.file.updated]" value="<?php echo $jlistConfig['days.is.file.updated']; ?>" size="5" maxlength="5"/></td>
                        <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_UPD_DESC;?>
                        </td>
                          </tr>
                          
                         <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE." "; ?></strong><br />
                            <?php echo $inputbox_upd; ?>     
                        </td>
                        <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3;?>
                        </td>
                          </tr>
                          <tr>
                          <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].upd_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/updimages/'; ?>" + getSelectedText( 'adminForm', 'upd_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib8" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                          </td>
                        </tr> 
                        <tr><td colspan="3"><hr></td></tr>   
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE." "; ?></strong><br />
                             <?php echo $inputbox_down; ?>     
                         <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC;?>
                        </td>
                        </tr>                            
                        <tr>
                          <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].down_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/downloadimages/'; ?>" + getSelectedText( 'adminForm', 'down_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib5" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                          </td>
                        </tr>
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1." "; ?></strong><br />
                             <?php echo $inputbox_mirror_1; ?>     
                         <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC;?>
                        </td>
                        </tr>                            
                        <tr>
                          <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].mirror_1_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/downloadimages/'; ?>" + getSelectedText( 'adminForm', 'mirror_1_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib6" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                          </td>
                        </tr>
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2." "; ?></strong><br />
                             <?php echo $inputbox_mirror_2; ?>     
                         <td>
                            <?php echo _JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC;?>
                        </td>
                        </tr>                            
                        <tr>
                          <td valign="top">
                               <script language="javascript" type="text/javascript">
                                if (document.forms[0].mirror_2_pic.options.value!=''){
                                    jsimg="<?php echo $mosConfig_live_site.'/images/jdownloads/downloadimages/'; ?>" + getSelectedText( 'adminForm', 'mirror_2_pic' );
                                } else {
                                     jsimg='';
                                }
                                document.write('<img src=' + jsimg + ' name="imagelib7" border="1" alt="<?php echo _JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC; ?>" />');
                               </script>
                          </td>
                        </tr>
                        <tr><td colspan="3"><hr></td></tr>
                        <tr><td colspan="3"><strong><?php echo _JLIST_CONFIG_SETTINGS_THUMBS_TITLE." "; ?></strong><br />
                            <?php echo _JLIST_CONFIG_SETTINGS_THUMBS_INFO." "; ?><br /><br />
                            <?php if (function_exists(gd_info)){
                                        echo '<font color="green">'._JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK.'</font>';
                                  } else {
                                        echo '<font color="red">'._JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK.'</font>';
                                  } ?>   
                        </td></tr>
                        <tr>
                        <td width="330">
                                <input name="jlistConfig[thumbnail.size.height]" value="<?php echo $jlistConfig['thumbnail.size.height']; ?>" size="6" maxlength="5"/> px</td>
                        <td>
                            <?php echo _JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT;?>
                        </td>
                          </tr>
                          <tr>
                           <td width="330">
                                <input name="jlistConfig[thumbnail.size.width]" value="<?php echo $jlistConfig['thumbnail.size.width']; ?>" size="6" maxlength="5"/> px</td>
                           <td>
                            <?php echo _JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH;?>
                           </td>
                        </tr>
                        
                        <tr>
                        <td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[thumbnail.view.placeholder]","",($jlistConfig['thumbnail.view.placeholder']) ? 1:0);?>
                               <br />
                               <?php 
                               $nopic = '<img src="'.$mosConfig_live_site.'/images/jdownloads/screenshots/thumbnails/no_pic.gif"/>';
                               echo $nopic;
                               ?> 
                        </td>
                        <td valign="top">
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT;?>
                        </td>                
                        </tr>
                        
                        <tr>
                        <td width="330"><br /><strong><?php echo _JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[thumbnail.view.placeholder.in.lists]","",($jlistConfig['thumbnail.view.placeholder.in.lists']) ? 1:0);?>
                        </td>
                        <td valign="top">
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT;?>
                        </td>                
                        </tr>
                        
                        <tr>
                        <td width="330"><br /><strong><?php echo _JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList('resize_thumbs', 'class="inputbox"', 0);?>
                        </td>
                        <td>
                               <?php echo _JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC;?>
                        </td>
                          </tr>   
                           
                        </table>
		  			</td>
		  		</tr>
  			</table>
       </td>
	</tr>
</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE,'upload');
?>
<table width="100%" border="0">
    <tr>
        <td width="40%" valign="top">

<?php /* upload config */ ?>
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
                <tr>
                      <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD." "; ?></th>
                  </tr>

                  <tr>
                      <td valign="top" align="left" width="100%">
                          <table width="100%">

                        <tr>
                        <td width="330"><strong><font color="#990000"><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE." "; ?></font></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[frontend.upload.active]","",($jlistConfig['frontend.upload.active']) ? 1:0);?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC;?>
                        </td>                
                
                        </tr>
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS." "; ?></strong><br />
                               
                               <?php
                               $upload_x = intval($jlistConfig['upload.access']);
                               $acc_list = mosHTML::selectList( $user_groups, 'jlistConfig[upload.access]', 'size="1" class="inputbox"', 'value', 'text',  $upload_x); 
                               echo $acc_list; ?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC;?>
                        </td>                
                        </tr>                        
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH." "; ?></strong><br />
                               <?php echo mosHTML::yesnoRadioList("jlistConfig[upload.auto.publish]","",($jlistConfig['upload.auto.publish']) ? 1:0);?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC;?>
                        </td>                
                        </tr>                        
                        
                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES." "; ?></strong><br />
                               <input name="jlistConfig[allowed.upload.file.types]" value="<?php echo $jlistConfig['allowed.upload.file.types']; ?>" size="50" maxlength="500"/>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC;?>
                        </td>                
                        </tr>                            

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE." "; ?></strong><br />
                               <input name="jlistConfig[allowed.upload.file.size]" value="<?php echo $jlistConfig['allowed.upload.file.size']; ?>" size="50" maxlength="80"/><br />
                               <?php echo _JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE.' '. ini_get('upload_max_filesize'); ?>
                        </td>
                        <td>
                        <br />
                               <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC;?>
                        </td>                
                        </tr>

                         <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT." "; ?></strong><br />
                                <textarea name="jlistConfig[upload.form.text]" rows="8" cols="40"><?php echo $jlistConfig['upload.form.text']; ?></textarea>
                                </td>
                                <td valign="top"><br />
                                <?php echo _JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC;?>
                                </td>
                        </tr>
                        
                        </table>
                      </td>
                  </tr>
                </table>
       </td>
    </tr>
</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY,'security');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">

<?php /* Backend config */ ?>
                <table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD." "; ?></th>
		      	</tr>
                
                <tr>
                    <td width="330"><br />
                        <strong><?php echo _JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE." "; ?></strong><br />
                         <?php echo mosHTML::yesnoRadioList("jlistConfig[anti.leech]","",($jlistConfig['anti.leech']) ? 1:0);?>
                    </td>
                    <td>
                        <?php echo _JLIST_BACKEND_SETTINGS_ANTILEECH_DESK;?>
                    </td>
                  </tr>                

<!-- Mail encode -->
                <tr>
    				<td width="330"><br />
						<strong><?php echo _JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL." "; ?></strong><br />
                     	<?php echo mosHTML::yesnoRadioList("jlistConfig[mail.cloaking]","",($jlistConfig['mail.cloaking']) ? 1:0);?>
                    </td>
    				<td>
    					<?php echo _JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC;?>
    				</td>
	  			</tr>

  				</table>
  			</td>
  		</tr>
</table>

<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL,'email');
?>
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">

<?php /* E-Mail config */ ?>
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD." "; ?></th>
		      	</tr>

		      	<tr>
		      		<td valign="top" align="left" width="100%">
		      			<table width="100%">

                        <tr>
    					<td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION." "; ?></strong><br />
                                <?php echo mosHTML::yesnoRadioList("jlistConfig[send.mailto.option]","",($jlistConfig['send.mailto.option']) ? 1:0);?>
                        </td>
    					<td>
    					       <?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC;?>
    					</td>
	  					</tr>

                        <tr>
    					<td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML." "; ?></strong><br />
                                <?php echo mosHTML::yesnoRadioList("jlistConfig[send.mailto.html]","",($jlistConfig['send.mailto.html']) ? 1:0);?>
                        </td>
    					<td>
    					       <?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC;?>
    					</td>
	  					</tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO." "; ?></strong><br />
		    					<input name="jlistConfig[send.mailto]" value="<?php echo $jlistConfig['send.mailto']; ?>" size="50" maxlength="80"/></td>
    					<td>
                            <br />
        					<?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC;?>
    					</td>
	  					</tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF." "; ?></strong><br />
		    					<input name="jlistConfig[send.mailto.betreff]" value="<?php echo $jlistConfig['send.mailto.betreff']; ?>" size="50" maxlength="80"/></td>
    					<td>
                            <br />
        					<?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC;?>
    					</td>
	  					</tr>
                        
                        <tr>
                          <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE." "; ?></strong><br />
                              <textarea name="jlistConfig[send.mailto.template.download]" rows="10" cols="40"><?php echo $jlistConfig['send.mailto.template.download']; ?></textarea>
                          </td>
                          <td valign="top">
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC;?>
                        </td>
                          
                        </tr>
                    </table>
		  			</td>
		  		</tr>
                <tr><td colspan="2"><hr></td></tr>  
                <tr>
                      <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD." "; ?></th>
                  </tr>

                  <tr>
                      <td valign="top" align="left" width="100%">
                          <table width="100%">

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION." "; ?></strong><br />
                                <?php echo mosHTML::yesnoRadioList("jlistConfig[send.mailto.option.upload]","",($jlistConfig['send.mailto.option.upload']) ? 1:0);?>
                        </td>
                        <td>
                               <?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC;?>
                        </td>
                          </tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML." "; ?></strong><br />
                                <?php echo mosHTML::yesnoRadioList("jlistConfig[send.mailto.html.upload]","",($jlistConfig['send.mailto.html.upload']) ? 1:0);?>
                        </td>
                        <td>
                               <?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC;?>
                        </td>
                          </tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO." "; ?></strong><br />
                                <input name="jlistConfig[send.mailto.upload]" value="<?php echo $jlistConfig['send.mailto.upload']; ?>" size="50" maxlength="80"/></td>
                        <td>
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC;?>
                        </td>
                          </tr>

                        <tr>
                        <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF." "; ?></strong><br />
                                <input name="jlistConfig[send.mailto.betreff.upload]" value="<?php echo $jlistConfig['send.mailto.betreff.upload']; ?>" size="50" maxlength="80"/></td>
                        <td>
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC;?>
                        </td>
                          </tr>
                        <tr>
                          <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE." "; ?></strong><br />
                              <textarea name="jlistConfig[send.mailto.template.upload]" rows="10" cols="40"><?php echo $jlistConfig['send.mailto.template.upload']; ?></textarea>
                          </td>
                          <td valign="top">
                            <br />
                            <?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC;?>
                        </td>
                          
                        </tr>                          
                          
                    </table>
                      </td>
                  </tr>
                  
				</table>
                
                </td>
    </tr>
</table>
                
<?php
$tabs->endTab();
$tabs->startTab(_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS,'plugins');
?>
<table width="100%" border="0">
  <tr>
    <td width="40%" valign="top">

      <?php /* File Plugin config */ ?>
      <table cellpadding="4" cellspacing="1" border="0" class="adminform">
         <tr>
            <th colspan="2"><?php echo _JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD; ?></th>
         </tr>
         <tr>
           <td valign="top" align="left" width="100%">
              <table width="100%">

                <?php
                if (!$file_plugin_inputbox){
                ?> <tr>
                     <td width="330"><strong>
                     <?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED; ?>
                     </td>
                   </tr>
                <?php
                } else {
                ?>
               <tr>
                <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT." "; ?></strong><br />
                   <?php
                     echo( $file_plugin_inputbox);
                   ?>
                </td>
                <td>
                   <?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC;?>
                </td>
               </tr>
               <tr>
                <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN." "; ?></strong><br />
                   <?php echo mosHTML::yesnoRadioList("jlistConfig[fileplugin.enable_plugin]","",($jlistConfig['fileplugin.enable_plugin']) ? 1:0);?>
                </td>
                <td>
                   <?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC;?>
                </td>
               </tr>
               <tr>
                <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED." "; ?></strong><br />
                   <?php echo mosHTML::yesnoRadioList("jlistConfig[fileplugin.show_jdfiledisabled]","",($jlistConfig['fileplugin.show_jdfiledisabled']));?>
                </td>
                <td>
                   <?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC;?>
                </td>
               </tr>
               <tr>
                <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE." "; ?></strong><br />
                   <?php echo mosHTML::yesnoRadioList("jlistConfig[fileplugin.show_downloadtitle]","",($jlistConfig['fileplugin.show_downloadtitle']) ? 1:0);?>
                </td>
                <td>
                   <?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC;?>
                </td>
               </tr>

               <tr>
                 <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE." "; ?></strong><br />
                     <textarea name="jlistConfig[fileplugin.offline_title]" rows="3" cols="40"><?php echo $jlistConfig['fileplugin.offline_title']; ?></textarea>
                 </td>
                 <td valign="top"><br />
                    <?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC;?>
                 </td>
               </tr>

               <tr>
                 <td width="330"><strong><?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC." "; ?></strong><br />
                     <textarea name="jlistConfig[fileplugin.offline_descr]" rows="3" cols="40"><?php echo $jlistConfig['fileplugin.offline_descr']; ?></textarea>
                 </td>
                 <td valign="top"><br />
                    <?php echo _JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC;?>
                 </td>
               </tr>

                <?php
                }
                ?>

              </table>
           </td>
         </tr>
      </table>
    </td>
  </tr>
</table>

<?php
$tabs->endTab();
$tabs->endPane(jdconfig);?>

	<input type="hidden" name="option" value="<?php echo $option;?>" />
	<input type="hidden" name="root_dir" value="<?php echo $jlistConfig['files.uploaddir'];?>" />	
	<input type="hidden" name="task" value="" />
	</form>
	<?php
}


// show restore
function showRestore($option, $task) {
	global $mosConfig_live_site;
	?>

	<form action="index2.php" method="post" name="adminForm" enctype="multipart/form-data">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
	  		<td width="50%" colspan="1" class="sectionname" style="font-size: 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_COMPONENT_NAME; ?></td>
	  		<td class="sectionname" align="right" colspan="1"><font style="color: #C24733; font-size : 18px; font-weight: bold; text-align: left;"><?php echo _JLIST_BACKEND_RESTORE_TITLE_HEAD;?></font></td>
		</tr>
		<tr>
			<th class="title" colspan="3"><?php echo _JLIST_BACKEND_RESTORE_TITLE_HEAD.' '; ?></th>
        </tr>
        <tr>
            <td style="padding:10px;" colspan="3"><?php echo _JLIST_BACKEND_RESTORE_WARNING; ?>
            </td>
        </tr>
        <tr>
            <td style="padding:20px;" align="center" colspan="3"><b><?php echo _JLIST_BACKEND_RESTORE_FILE; ?></b><br /><br />
                <input type="file" size="50" name="restore_file">
            </td>
        </tr>
		<tr>
			<td style="padding:20px;" align="center" colspan="3"><input type="submit" name="submitbutton" value="<?php echo _JLIST_BACKEND_RESTORE_RUN;?>" onclick="return confirm('<?php echo _JLIST_BACKEND_RESTORE_RUN_FINAL;?>');">
			</td>
		</tr>

	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="restore.run" />
	<input type="hidden" name="hidemainmenu" value="0" />
   </table>
   </form>
 	<?php
}

// show info
function showInfo($option){
	global $mosConfig_live_site;
?>
	<form action="index2.php" method="post" name="adminForm" id="adminForm">
<table width="100%" border="0">
	<tr>
		<td width="40%" valign="top">
			<table cellpadding="4" cellspacing="1" border="0" class="adminform">
		    	<tr>
		      		<th colspan="2"><?php echo _JLIST_BACKEND_INFO_TEXT_TITLE." "; ?></th>
		      	</tr>

		      	<tr valign="top" align="center" width="100%">
		      		<td>
		      		 <img src="components/com_jdownloads/images/jdownloads.jpg" alt="jDownloads Logo"/><br /><br />
                    </td>
                </tr>
		      	<tr valign="top" align="center" width="100%">
                    <td>
                       	<big>jDownloads - a Download Management Component for Joomla!</big><br />
                         Copyright 2007/2008 by Arno Betz - <a href="http://www.JoomlaAddons.de" target="_blank">www.JoomlaAddons.de</a> all rights reserved.
                         <br /><br />
                         <b>jDownloads logo</b> created and copyright by <a href="http://www.rkdesign.ch" target="_blank">rkdesign</a> - all rights reserved.<br /><br />
                         <?php echo _JLIST_BACKEND_INFO_LICENSE_TITLE.'<br />';
                               echo _JLIST_BACKEND_INFO_LICENSE_TEXT;
                         ?>
   					</td>
				</tr>
            </table>
        </td>
    </tr>
</table>

<br /><br />
<?php
        $back_link = '<a href="index2.php?option=com_jdownloads"><big><strong>'._JLIST_BACKEND_INFO_LINK_BACK.'</strong></big></a>';
        echo $back_link;
        ?>

	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="hidemainmenu" value="0" />
</form>
	<?php
}

}

?>
