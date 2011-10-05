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
	<form action="index.php" method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Edit images description' ); ?></legend>
        <table class="admintable" cellpadding="5" cellspacing="0" border="0" ">
            <tr>
            	<td>
            		&nbsp;
            	</td>
            	<td>
            		<img src="../images/morfeoshow/<?php echo $row->folder . '/thumbs/' . $img_row->filename; ?>" />
            	</td>
            </tr>
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Title' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="title" id="title" size="40" 
				 value="<?php echo htmlspecialchars($img_row->title, ENT_QUOTES, 'UTF-8'); ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Date' ); ?>
			</td>		
		  <td><?php echo JHTML::_('calendar', $img_row->imgdate, 'imgdate', 'imgdate', '%Y-%m-%d ', array('class'=>'inputbox', 'size'=>'25',  'maxlength'=>'19')); ?></td>		
		</tr>		
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Description' ); ?>
			</td>
			<td>
				<?php echo $editor->display( 'html', $img_row->html ,'100%', 
				'150', '40', '5', array('pagebreak', 'readmore', 'image') );?>
			</td>
		</tr>		
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Creator' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="creator" id="creator" size="40" 
				 value="<?php echo $img_row->creator ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Web Site Link' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="link" id="link" size="80" 
				 value="<?php echo $img_row->link ?>" />
			</td>
		</tr>		
		</table>
        </fieldset>
        <input type="hidden" name="folder" value="<?php echo $row->folder; ?>" />
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="option" value="<?php echo $option ?>" />
        <input type="hidden" name="cid" value="<?php echo $id ?>" />
        <input type="hidden" name="id" value="<?php echo $img_row->id; ?>" />
   	</form>