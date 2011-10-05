<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_morfeoshow
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
$pane	=& JPane::getInstance('sliders');
?>
<style>
.pigiaqui{
	float:right;
	font-size: 20px;
	text-decoration: none;
	border-width: 2px;
	border-style: solid;
	cursor: pointer;
	background: #f1f1f1;	
}	
</style>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<?php
		$title = JText::_('Single Upload');
		echo $pane->startPane("gallery-pane");
		echo $pane->startPanel( $title, "upload-page" );
	?>		
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Upload an image to gallery' ); ?>: <?php echo $row->name; ?></legend>
        <table  class="admintable" cellpadding="5" cellspacing="0" border="0" >
      <tr>
	     <td></td>
		<td><input class="pigiaqui" type="submit" name="submit" value="<?php echo JText::_( 'Save' ); ?> <?php echo JText::_( 'Image' ); ?>">
            </tr>
		<tr>		
            <tr>
            	<td class="key"><?php echo JText::_( 'Upload' ); ?> <?php echo JText::_( 'Image' ); ?></td>
                <td><input type="file" name="upload_image" /></td>
            </tr>
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Title' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="title" id="title" size="40" 
				 value="" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Date' ); ?>
			</td>		
		  <td><?php echo JHTML::_('calendar', $date , 'imgdate', 'imgdate', '%Y-%m-%d', array('class'=>'inputbox', 'size'=>'25',  'maxlength'=>'19')); ?></td>		
		</tr>		
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Description' ); ?>
			</td>
			<td>
				<?php echo $editor->display( 'html', '' ,'100%', 
				'150', '40', '5', array('pagebreak', 'readmore', 'image') );?>
			</td>
		</tr>		
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Creator' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="creator" size="40" 
				 value="" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Web site link' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="link" size="80" 
				 value="" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			</td>
			<td><br /><br />
			</td>
		</tr>		
        </table>
        </fieldset>
        <input type="hidden" name="folder" value="<?php echo $row->folder; ?>" />
        <input type="hidden" name="task" value="upload_image" />
        <input type="hidden" name="option" value="<?php echo $option ?>" />
        <input type="hidden" name="cid" value="<?php echo $id ?>" />
   </form>
   <?php
		$title = JText::_( 'Multiple Images Add' );
		echo $pane->endPanel();
		echo $pane->startPanel( $title, "Multiple-page" );
?>			
	<form action="index.php" method="post" enctype="multipart/form-data">   
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Add images from folder to gallery' ); ?>: <?php echo $row->name; ?></legend>
        <table  class="admintable" cellpadding="5" cellspacing="0" border="0" >
      <tr>   
<?php   
		global $filter, $recurse, $fullpath;
		$path = JPATH_SITE.'/components/com_morfeoshow/myphoto';

         jimport('joomla.filesystem.folder');
         $img  = JFolder::files($path, $filter, $recurse, $fullpath);

?>
		<!--tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Generic Title' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="title" id="title" size="40" 
				 value="" />
			</td>
		</tr-->
		<tr>
			<td width="300" align="right" class="key">
				<?php echo JText::_( 'Date' ); ?>
			</td>		
		  <td><?php echo JHTML::_('calendar', $date , 'imgdate', 'imgdate', '%Y-%m-%d', array('class'=>'inputbox', 'size'=>'25',  'maxlength'=>'19')); ?></td>
          <td width="200"></td>		  
		</tr>
		<tr>
			<td width="300" align="right" class="key">
				<?php echo JText::_( 'Current Images Folder' ); ?>
			</td>
			<td>
			
				<?php 
				$imgfolder= JURI::root(true).DS.'components'.DS.'com_morfeoshow'.DS.'myphoto'; 
				echo '<h3>' ;
				echo $imgfolder ;
				echo '</h3>' ;				
				?>
			</td>
          <td width="200"></td>				
		</tr>		
		<tr>
			<td width="300" valign="top" class="key">
				<?php echo JText::_( 'Select files to add' ); ?><br />
				<?php echo JText::_( 'Select files to add description' ); ?>
				<?php echo JText::_( 'Select files to add description2' ); ?>				
			</td>
			<td valign="top">
				<select name="images[]" multiple size="20">
<?php
			foreach ($img as $images) 
			{
					if (eregi("gif|jpe|jpeg|jpg|png", $images))
					{
					echo '<option>'.$images.'</option>';
					}
			}
					echo '</select>';
	echo '</td>';
//	echo '</tr>';
?>	
		<td width="200" valign="top"><input class="pigiaqui" type="submit" name="submit" value="<?php echo JText::_( 'Add' ); ?> <?php echo JText::_( 'Images' ); ?>">
       </td>
		</tr>
		</table>
        </fieldset>
        <input type="hidden" name="folder" value="<?php echo $row->folder; ?>" />
        <input type="hidden" name="task" value="upload_image2" />
        <input type="hidden" name="option" value="<?php echo $option ?>" />
        <input type="hidden" name="cid" value="<?php echo $id ?>" />
   </form>
<?php
		echo $pane->endPanel();
		echo $pane->endPane();
?>	   
   <br />