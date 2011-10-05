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
	$conf="index.php?option=com_morfeoshow&task=showSettings";
		$ordering = ($lists['order'] == 'ordering');		
		JHTML::_('behavior.modal');
		JHTML::_('behavior.tooltip');

?>
	<form action="index.php" method="post" name="adminForm" id="adminform">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Galleries List' ); ?></legend>
		<table>
		<tr>
			<td align="left" width="100%">
				<?php echo JText::_( 'Filter' ); ?>:
				<input type="text" name="search" id="search" value="<?php echo $lists['search'];?>" class="text_area" onchange="document.adminForm.submit();" />
				<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
				<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_flashgallery').value='0';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
			</td>
			<td nowrap="nowrap">
				<?php
				echo $lists['state'];
				?>
			</td>
		</tr>
		</table>	
	<table class="adminlist">
	<thead>
	<tr>
		<th width="2"><?php echo JText::_( 'NUM' ); ?></th>	
		<th width="2">&nbsp;</th>
		<th width="25%" class="title" style="text-align: left;">
			<?php echo JHTML::_('grid.sort',   'Gallery title', 'name', @$lists['order_Dir'], @$lists['order'] ); ?></th>
		<th width="18%" class="title">
			<?php echo JHTML::_('grid.sort',   'Format', 'flashgallery', @$lists['order_Dir'], @$lists['order'] ); ?></th>			
		<th width="40"  class="title"><?php echo JText::_( 'Upload' ); ?></th>
		<th width="40"  class="title"><?php echo JText::_( 'Images' ); ?></th>			
		<th width="30%" class="title" style="text-align: left;">
			<?php echo JHTML::_('grid.sort',   'Description', 'description', @$lists['order_Dir'], @$lists['order'] ); ?></th>		  <th width="12%"  class="title"><?php echo JText::_( 'Plugin id' ); ?></th>			
		<th width="12%"  class="title"><?php echo JText::_( 'Menu Item' ); ?></th>
		<th width="60">
			<?php echo JHTML::_('grid.sort',   'Published', 'published', @$lists['order_Dir'], @$lists['order'] ); ?></th>		
		<th width="30%" class="title" nowrap="nowrap">
			<?php echo JHTML::_('grid.sort',   'Order', 'ordering', @$lists['order_Dir'], @$lists['order'] ); ?>
			<?php echo JHTML::_('grid.order',  $rows ); ?>		
		</th>
		<th width="1%" nowrap="nowrap">
			<?php echo JHTML::_('grid.sort',   'ID', 'id', @$lists['order_Dir'], @$lists['order'] ); ?>
		</th>		
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
				$row = &$rows[$i];
				@$checked 	= JHTML::_('grid.checkedout', $row, $i );
				$published 	= JHTML::_('grid.published', $row, $i );
				$link 		= JRoute::_( 'index.php?option=com_morfeoshow&task=edit&cid[]='. $row->id );				
		
		?>
			<tr class="<?php echo 'row'. $k; ?>">
				<td align="center">
					<?php echo $pageNav->getRowOffset( $i ); ?>
				</td>	
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Edit Gallery' );?>::<?php echo $row->name; ?>">			
							<a href="<?php echo $link; ?>">
								<?php echo $row->name; ?></a></span>
			</td>
			<td align="center">
			<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery format' ); ?>::<?php echo JText::_( 'This is the type used for this gallery' ); ?>">
<?php			
switch ($row->flashgallery) {
	case '0':	echo 'Classic';					break;
	case '1':	echo 'Flash Imagerotator'; 		break;	
	case '2':	echo 'Flash Simpleviewer';		break;
	case '3':	echo 'Flash Post Card';			break;
	case '4':	echo 'Flash Polaroid ';			break;
	case '5':	echo 'Flickr Classic Gallery';	break;
	case '6':	echo 'Flickr Postcard Gallery';	break;
	case '7':	echo 'Flickr Maps Gallery';		break;
	case '8':	echo 'Google Maps';				break;
	case '9':	echo 'Picasa Galleries';		break;
	case '10':	echo 'Flickr Single Album';		break;
	case '11':	echo 'Picasa Single Album';		break;	
}	
?>			
			</span>
			</td>
			<td align="center">
			<?php
switch ($row->flashgallery) {
case '0':
case '1':
case '2':
case '3':
case '4':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'Upload or Add images' );?>">	
				<a href="#manage_photos" onclick="return listItemTask('cb<?php echo $i ?>','manage_photos')"><img width="25" src="components/com_morfeoshow/images/upload.png" /></a></span>
<?php
break;
case '5':
case '6':
case '10':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'Flickr Gallery' );?>">	
				<img width="25" src="components/com_morfeoshow/images/flickr.png" /></span>
<?php
break;	
case '7':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'Flickr Gallery Maps' );?>">
			<img width="25" src="components/com_morfeoshow/images/flickrmap.png" /></span>			
<?php
break;
case '8':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'Google Maps' );?>">
			<img width="25" src="components/com_morfeoshow/images/google.png" /></span>			
<?php
break;
case '9':
case '11':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'Picasa Gallery' );?>">
			<img width="25" src="components/com_morfeoshow/images/pica.png" /></span>			
<?php
}					
 ?>				
			</td>
			
			<td align="center">
			<?php
switch ($row->flashgallery) {
case '0':
case '1':
case '2':
case '3':
case '4':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'Manage images for this gallery' );?>">
				<a href="#photos" onclick="return listItemTask('cb<?php echo $i ?>','photos')"><img width="25" src="components/com_morfeoshow/images/img.png" /></a></span>
<?php
break;
case '5':
case '6':
case '10':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'No Manage images for this gallery' );?>">
				<img width="25" src="components/com_morfeoshow/images/img1.png"/></span>
<?php
break;	
case '7':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'No Manage images for this gallery' );?>">
			<img width="25" src="components/com_morfeoshow/images/img1.png" /></span>		
<?php
break;
case '8':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'No Manage images for this gallery' );?>">
			<img width="25" src="components/com_morfeoshow/images/img1.png"/></span>			
<?php
break;
case '9':
case '11':
?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'No Manage images for this gallery' );?>">
			<img width="25" src="components/com_morfeoshow/images/img1.png" /></span>			
<?php
break;
}					
 ?>				
			</td>			
			<td>
			<?php
			$row->description = stripslashes($row->description);			
			echo substr($row->description,0,25); 
				if (strlen($row->description)>25) 
				echo '...';
?>	
			</td>
			<td align="center">
					<span class="editlinktip hasTip" title="<?php echo JText::_( 'Plugin code' ); ?>::<?php echo JText::_( 'Copy and Paste this code in content article item' ); ?>">
			{morfeo <?php echo $row->id ?>}
					</span>
			</td>
			<td align="center">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Gallery' );?> - <?php echo $row->name; ?>::<?php echo JText::_( 'Create menu item' );?>">			
				<a class="modal" href="index3.php?option=com_morfeoshow&task=menu&cid[]=<?php echo $row->id ?>" rel="{handler: 'iframe', size: {x: 480, y: 120}}"><img width="25" src="components/com_morfeoshow/images/menu.png" /></a></span>
		
			</td>			
			<td align="center">
				<?php echo $published;?>
			</td>
			<td class="order">
			<!--span><?php echo $pageNav->orderUpIcon($i, ($row->id == @$rows[$i-1]->id), 'orderup', 'Move Up', $ordering ); ?></span>
			<span><?php echo $pageNav->orderDownIcon($i, $n, ($row->id == @$rows[$i+1]->id), 'orderdown', 'Move Down', $ordering ); ?></span-->
			<?php $disabled = $ordering ?  '' : 'disabled="disabled"'; ?>
				<input type="text" name="order[]" size="5" value="<?php echo $row->ordering;?>" <?php echo $disabled ?> class="text_area" style="text-align: center" />
			</td>
			<td align="center">
				<?php echo $row->id; ?>
			</td>			
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</tbody>
	</table>
	</fieldset>	
	<input type="hidden" name="option" value="<?php echo $option;?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $lists['order_Dir']; ?>" />	
	<?php echo JHTML::_( 'form.token' ); ?>	
	</form>
<?php
		return $html;	
?>	