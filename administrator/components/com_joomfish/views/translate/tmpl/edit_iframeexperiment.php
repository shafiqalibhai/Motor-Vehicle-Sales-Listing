<?php

/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2009 Think Network GmbH, Munich
 *
 * All rights reserved.  The Joom!Fish project is a set of extentions for
 * the content management system Joomla!. It enables Joomla!
 * to manage multi lingual sites especially in all dynamic information
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -----------------------------------------------------------------------------
 * $Id: edit_iframeexperiment.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage Views
 *
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
/**
	* @return void
	* @param object $this->actContentObject
	* @param array $this->langlist
	* @param string $this->catid
	* @desc Shows the dialog for the content translation
	*/

$act=$this->act;
$task=$this->task;
$select_language_id = $this->select_language_id;
$user =& JFactory::getUser();
$db =& JFactory::getDBO();
$elementTable = $this->actContentObject->getTable();

// Should use CSS for image waps - in the meantime to this.
global $mainframe;
$jsfile = '<script language="javascript" type="text/javascript" src="'.JURI::root().'/includes/js/mambojavascript.js" ></script>';
$mainframe->addCustomHeadTag( $jsfile );
$headerstyle = '#border-top.h_green { display: none; }';
$document =& JFactory::getDocument();
$document->addSyleDeclaration($headerstyle);

$this->_JoomlaHeader( JText::_('TITLE_TRANSLATION'), 'joomfish', '', false );

jimport( 'joomla.html.editor' );
$wysiwygeditor =& JFactory::getEditor();

$editorFields=null;
foreach ($this->tranFilters as $filter) {
	echo "<input type='hidden' name='".$filter->filterType."_filter_value' value='".$filter->filter_value."'/>";
}

// check system and user editor and load appropriate copying script
$user =& JFactory::getUser();
$conf =& JFactory::getConfig();
$editor = $conf->getValue('config.editor');
echo "\n<!-- editor is $editor //-->\n";
$editorFile = JOOMFISH_ADMINPATH."/editors/".strtolower($editor).".php";
if (file_exists($editorFile)){
	require_once($editorFile);
}
else {
	?>

	<script language="javascript" type="text/javascript">
	function copyToClipboard(value,action) {
		try {
			if (document.getElementById) {
				innerHTML="";
				if (action=="copy") {
					srcEl = document.getElementById("original_value_"+value);
					innerHTML = srcEl.innerHTML;
				}
				if (window.clipboardData){
					window.clipboardData.setData("Text",innerHTML);
					alert("<?php echo JText::_('CLIPBOARD_COPIED'); ?>");
				}
				else {
					srcEl = document.getElementById("text_origText_"+value);
					srcEl.value = innerHTML;
					srcEl.select();
					alert("<?php echo JText::_('CLIPBOARD_COPY');?>");
				}
			}
		}
		catch(e){
			alert("<?php echo JText::_('CLIPBOARD_NOSUPPORT');?>");
		}
	}
    </script>
    <?php } ?>

	<script language="javascript" type="text/javascript">
	function confirmChangeLanguage(fromLang, fromIndex){
		selections = document.getElementsByName("language_id")[0].options;
		selection = document.getElementsByName("language_id")[0].selectedIndex;
		//alert(selection+" from "+ fromIndex+" which is "+fromLang+" xx "+document.getElementsByName("language_id")[0].value);
		var toLang = selections[selection].text;
		var toValue = selection = document.getElementsByName("language_id")[0].value;
		if (fromIndex!=toValue){
			answer = confirm("<?php echo ereg_replace( '<br />', '\n', JText::_('JS_CHANGE_TRANSLATION_LANGUAGE')); ?>");
			if (!answer) {
				document.getElementsByName("language_id")[0].selectedIndex=fromIndex;
			}
		}
		else {
			alert("<?php echo ereg_replace( '<br />', '\n', JText::_('JS_REINSTATE_TRANSLATION_LANGUAGE')); ?>");
		}
	}
    </script>

   	<table width="100%">
	  <tr>
	    <td>
		<table width="90%" border="0" cellpadding="2" cellspacing="2" class="adminform">
			<?php
			$k=1;
			for( $i=0; $i<count($elementTable->Fields); $i++ ) {
				$field =& $elementTable->Fields[$i];
				$originalValue = $field->originalValue;

				if( $field->Translate ) {
					$translationContent = $field->translationContent;

					// This causes problems in Japanese/Russian etc. ??
					jimport('joomla.filter.output');
					JFilterOutput::objectHTMLSafe( $translationContent );
				?>
		    <tr class="<?php echo "row$k"; ?>">
		      <th colspan="3"><?php echo JText::_('DBFIELDLABLE') .': '. $field->Lable;?></th>
		    </tr>
	      	<?php
	      	if (strtolower($field->Type)!='xxx-params'){// disabled for Joomla1.5'){
	      	?>
		    <tr class="<?php echo "row$k"; ?>">
		      <td align="left" valign="top"><?php echo JText::_('ORIGINAL');?></td>
		      <?php if( strtolower($field->Type)=='htmltext' ) {?>
		      <td align="left" valign="top">
		      	<iframe src="about:blank" id="original_iframe_<?php echo $field->Name?>" style='border:solid 1px red;width:100%;height:100px;'></iframe>
		      	<script language="javascript" type="text/javascript">
      			  window.addEvent('domready', 
      			  	function(){
      			  		var orig=document.getElementById( "hidden_origText_<?php echo $field->Name;?>");
      			  		var targ=document.getElementById("original_iframe_<?php echo $field->Name?>");
      			  		alert(orig.value);
	      			  	}
      			  	);
				</script>
		      <?php } 
		      else { 
		      	?>
		      <td align="left" valign="top" id="original_value_<?php echo $field->Name?>">
		      <?php echo $field->originalValue; 
		      } 
		      ?>
		      </td>
			  <td valign="top">
				<input type="hidden" name="origValue_<?php echo $field->Name;?>" value='<?php echo md5( $field->originalValue );?>' />
				<?php if( strtolower($field->Type)!='htmltext' ) {?>
					<input type="hidden" name="origText_<?php echo $field->Name;?>" value='<?php echo $field->originalValue;?>' />
					<a class="toolbar" onclick="document.adminForm.refField_<?php echo $field->Name;?>.value = document.adminForm.origText_<?php echo $field->Name;?>.value;" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('copy_<?php echo $field->Name;?>','','images/copy_f2.png',1);"><img src="images/copy.png" alt="<?php echo JText::_('copy');?>" border="0" name="copy_<?php echo $field->Name;?>" align="middle" /></a>
				<?php }	else { ?>
				    <textarea  name="origText_<?php echo $field->Name;?>" style="display:none"><?php echo $field->originalValue;?></textarea>
				    <textarea id="hidden_origText_<?php echo $field->Name;?>" style="display:none;" ><?php echo $field->originalValue;?></textarea>
					
					<a class="toolbar" onclick="copyToClipboard('<?php echo $field->Name;?>','copy');" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('copy_<?php echo $field->Name;?>','','images/copy_f2.png',1);"><img src="images/copy.png" alt="<?php echo JText::_('copy');?>" border="0" name="copy_<?php echo $field->Name;?>" align="middle" /></a>
				<?php  }?>
			  </td>
		    </tr>
		    <tr class="<?php echo "row$k"; ?>">
		      <td align="left" valign="top"><?php echo JText::_('Translation');?></td>
		      <td align="left" valign="top">
					  <input type="hidden" name="id_<?php echo $field->Name;?>" value="<?php echo $translationContent->id;?>" />
						<?php
						if( strtolower($field->Type)=='text' || strtolower($field->Type)=='titletext' ) {
							$length = ($field->Length>0)?$field->Length:60;
							$maxLength = ($field->MaxLength>0)?$field->MaxLength:60;
							?>
							<input class="inputbox" type="text" name="refField_<?php echo $field->Name;?>" size="<?php echo $length;?>" value="<?php echo $translationContent->value; ?>" maxlength="<?php echo $maxLength;?>"/>

							<?php
							// Temp change for Joomla 1.5
						} else if( strtolower($field->Type)=='textarea' || strtolower($field->Type)=='params' ) {
							$ta_rows = ($field->Rows>0)?$field->Rows:15;
							$ta_cols = ($field->Columns>0)?$field->Columns:30;
							?>
							<textarea name="refField_<?php echo $field->Name;?>" rows="<?php echo $ta_rows;?>" cols="<?php echo $ta_cols;?>" ><?php echo $translationContent->value; ?></textarea>
							<?php
						} else if( strtolower($field->Type)=='htmltext' ) {
							?>
							<?php
							$editorFields[] = array( "editor_".$field->Name, "refField_".$field->Name );
							// parameters : areaname, content, hidden field, width, height, rows, cols
							echo $wysiwygeditor->display( "refField_".$field->Name, $translationContent->value, '100%', '300', '70', '15' ) ;

						}
						?>
				</td>
				<td valign="top">
					<?php if( strtolower($field->Type)!='htmltext' ) {?>
						<a class="toolbar" onclick="document.adminForm.refField_<?php echo $field->Name;?>.value = '';" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('clear_<?php echo $field->Name;?>','','images/delete_f2.png',1);"><img src="images/delete.png" alt="<?php echo JText::_('clear');?>" border="0" name="clear_<?php echo $field->Name;?>" align="middle" /></a>
					<?php } else {?>
					<!-- ToDo
						<a class="toolbar" onclick="editor_setHTML('refField_<?php echo $field->Name;?>', ''); document.adminForm.refField_<?php echo $field->Name;?>.value = '';" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('clear_<?php echo $field->Name;?>','','images/delete_f2.png',1);"><img src="images/delete.png" alt="<?php echo JText::_('clear');?>" border="0" name="clear_<?php echo $field->Name;?>" align="middle" /></a>
					-->
					<a class="toolbar" onclick="copyToClipboard('<?php echo $field->Name;?>','clear');" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('clear_<?php echo $field->Name;?>','','images/delete_f2.png',1);"><img src="images/delete.png" alt="<?php echo JText::_('clear');?>" border="0" name="clear_<?php echo $field->Name;?>" align="middle" /></a>

					<?php }?>
					</td>
		    </tr>
	      	<?php
	      	}
	      	else {
	      	?>
		    <tr class="<?php echo "row$k"; ?>">
		      <td colspan="3">
		      <table class='translateparams'>
			      <tr>
				      <td valign="top" style="text-align:center!important"><?php echo JText::_('ORIGINAL');?></td>
				      <td valign="top" style="text-align:center!important"><?php echo JText::_('Translation');?></td>
				      <td valign="top" align="right">
						<input type="hidden" name="origValue_<?php echo $field->Name;?>" value='<?php echo md5( $field->originalValue );?>' />
						<input type="hidden" name="origText_<?php echo $field->Name;?>" value='<?php echo $field->originalValue;?>' />
						<a class="toolbar" onclick="copyParams('orig', '<?php echo $field->Name;?>');" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('copy_<?php echo $field->Name;?>','','images/copy_f2.png',1);">
						   <img src="images/copy.png" alt="<?php echo JText::_('copy');?>" border="0" name="copy_<?php echo $field->Name;?>" align="middle" />
						</a>
						<a class="toolbar" onclick="copyParams('defaultvalue', '<?php echo $field->Name;?>');"  onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('clear_<?php echo $field->Name;?>','','images/delete_f2.png',1);">
						    <img src="images/delete.png" alt="<?php echo JText::_('clear');?>" border="0" name="clear_<?php echo $field->Name;?>" align="middle" />
						</a>
					   </td>
			     </tr>
			     <tr>
			      <td align="left" valign="top" class="origparams" id="original_value_<?php echo $field->Name?>">
			      <?php
			      $tpclass = "TranslateParams_".$elementTable->Name;
			      if (!class_exists($tpclass)){
			      	$tpclass = "TranslateParams";
			      }
			      $transparams = new $tpclass($field->originalValue,$translationContent->value, $field->Name,$elementTable->Fields);
			      $transparams->showOriginal();
			      $transparams->showDefault();

			      ?>
			      </td>
			      <td align="left" valign="top" class="translateparams">
						  <input type="hidden" name="id_<?php echo $field->Name;?>" value="<?php echo $translationContent->id;?>" />
							<?php
							$retval = $transparams->editTranslation();
							if ($retval){
								$editorFields[] = $retval;
							}
							?>
					</td>
			      </tr>
		      </table>
		      </td>
		    </tr>
	      	<?php
	      	}
	      	?>
				<?php
				}
				$k=1-$k;
			}
				?>
		</table>
	  </td>
	  <td valign="top" width="30%">
		<?php
		jimport('joomla.html.pane');
		$tabs = & JPane::getInstance('tabs');
		echo $tabs->startPane("translation");
		echo $tabs->startPanel(JText::_('PUBLISHING'),"ItemInfo-page");
	  ?>
  	<table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminForm">
      <tr>
        <td width="34%"><strong><?php echo JText::_('TITLE_STATE');?>:</strong></td>
        <td width="50%"><?php echo $this->actContentObject->state > 0 ? JText::_('STATE_OK') : ($this->actContentObject->state < 0 ? JText::_('STATE_NOTEXISTING') : JText::_('STATE_CHANGED'));?></td>
      </tr>
      <tr>
        <td><strong><?php echo JText::_('LANGUAGE');?>:</strong></td>
        <td><?php echo $this->langlist;?></td>
      </tr>
      <tr>
        <td><strong><?php echo JText::_('TITLE_PUBLISHED')?>:</strong></td>
        <td><input type="checkbox" name="published" value="1" <?php echo $this->actContentObject->published&0x0001 ? 'checked="checked"' : ''; ?> /></td>
      </tr>
      <tr>
        <td><strong><?php echo JText::_('TITLE_DATECHANGED');?>:</strong></td>
        <td><?php echo $this->actContentObject->lastchanged ? strftime("%A, %d %B %Y %H:%M",strtotime($this->actContentObject->lastchanged)) : JText::_('new');?></td>
      </tr>
	  </table>
	  <?php
	  echo $tabs->endPanel();
	  echo $tabs->endPane();
		?>
	  <input type="hidden" name="select_language_id" value="<?php echo $select_language_id;?>" />
	  <input type="hidden" name="reference_id" value="<?php echo $this->actContentObject->id;?>" />
	  <input type="hidden" name="reference_table" value="<?php echo (isset($elementTable->name) ? $elementTable->name : '');?>" />
	  <input type="hidden" name="catid" value="<?php echo $this->catid;?>" />
	</td></tr>
	<?php
	$this->_JoomlaFooter($task, $act, $editorFields);
