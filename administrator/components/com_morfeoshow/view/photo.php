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
?>
	<form action="index.php" method="post" name="adminForm" id="adminform">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Current images' ); ?> - <?php echo JText::_( 'Gallery' ); ?>: <?php echo $row->name ?></legend>
	<table class="adminlist">
	<thead>
	<tr>
		<th width="20" class="title"><?php echo JText::_( 'NUM' ); ?></th>	
		<th width="35" class="title"><?php echo JText::_( 'Image' ); ?></th>
		<th class="title"><?php echo JText::_( 'File name' ); ?></th>
		<th class="title"><?php echo JText::_( 'Image Title' ); ?></th>	
		<th class="title"><?php echo JText::_( 'Creator' ); ?></th>	
		<th width="30%"class="title"><?php echo JText::_( 'Link' ); ?></th>			
		<th width="35" class="title"><?php echo JText::_( 'Edit' ); ?></th>		
		<th width="35" class="title"><?php echo JText::_( 'Delete' ); ?></th>
	</tr>
		</thead>
				<tfoot>
					<tr>
						<td colspan="15">
							<?php echo $pageNav->getListFooter(); ?>
						</td>
					</tr>
				</tfoot>
			<tbody>	

	<?php
	//import the class that can do things like replace & with &amp;
	jimport('joomla.filter.filteroutput');
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$img_row = &$rows[$i];

	//use the filteroutput class called above
	$edit_link 	= JFilterOutput::ampReplace( 'index.php?option=' . $option . '&task=edit_des&cid[]='. $id . '&pid=' .$img_row->id );
	$del_link 	= JFilterOutput::ampReplace( 'index.php?option=' . $option . '&task=del_photo&cid[]='. $id . '&folder=' .$row->folder . '&pid=' .$img_row->id );
?>
			<tr class="<?php echo 'row'. $k; ?>">
			<td align="center">
					<?php echo $pageNav->getRowOffset( $i ); ?>
			</td>		
			<td align="center" >
				<img src="../images/morfeoshow/<?php echo $row->folder . '/thumbs/' . $img_row->filename; ?>" width="30" />
			</td>
			<td>
				<?php echo $img_row->filename; ?></a>
			</td>
			<td>
				<?php echo $img_row->title; ?></a>
			</td>
			<td>
				<?php echo $img_row->creator; ?></a>
			</td>
			<td>
				<?php echo $img_row->link; ?></a>
			</td>			
			<td align="center">
				<a href="<?php echo $edit_link; ?>"><img src="components/com_morfeoshow/images/edit.png" alt="<?php echo JText::_( 'Edit' ); ?>" title="<?php echo JText::_( 'Edit' ); ?>"/></a>
			</td>
			
			<td align="center">
				<a href="<?php echo $del_link; ?>"><img src="components/com_morfeoshow/images/delete.png" alt="<?php echo JText::_( 'Delete' ); ?>" title="<?php echo JText::_( 'Delete' ); ?>"/></a>
			</td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</tbody>
	</table>
	</fieldset>
	<div align="center">
		<?php echo JText::_( 'Gallery images are ordered by filename' ); ?>
	</div>	
	<input type="hidden" name="cid" value="<?php echo $img_row->gallery_id ?>" />	
	<input type="hidden" name="option" value="<?php echo $option ?>" />
	<input type="hidden" name="task" value="photos" />
	</form>