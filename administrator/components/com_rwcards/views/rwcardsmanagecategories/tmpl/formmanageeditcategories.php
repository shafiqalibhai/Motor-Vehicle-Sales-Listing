<?php defined('_JEXEC') or die('Restricted access');?>
<?php 
 $arr = array(
JHTML::_('select.option',  '0', JText::_( NO ) ),
JHTML::_('select.option',  '1', JText::_( YES ) )
);

?>
<style type="text/css">
table.admintable td.key
{
	background-color: #f6f6f6;
	text-align: left;
	width:200px;
	color: #666;
	font-weight: bold;
	border-bottom: 1px solid #e9e9e9;
	border-right: 1px solid #e9e9e9;
}
</style>

<form action="index.php?option=com_rwcards&controller=managecategories" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'KATEGORIEN' ); ?></legend>
		<table class="admintable">
			<tbody>
			<tr>
				<td width="100" align="right" class="key">
					<label for="category_kategorien_name">
						<?php echo JText::_( 'KATEGORIEN_NAME' ); ?>:
					</label>
				</td>
				<td>
			<input class="text_area" type="text" name="category_kategorien_name" id="category_kategorien_name" size="32" maxlength="250" value="<?php echo $this->rwcardsCategories->category_kategorien_name;?>" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right" class="key" valign="top">
					<label for="category_description">
						<?php echo JText::_( 'KATEGORIEN_DESCRIPTION' ); ?>:
					</label>
				</td>
				<td>
			<textarea class="text_area" style="width:178px; height:100px;" name="category_description" id="category_description" ><?php echo $this->rwcardsCategories->category_description;?></textarea>
				</td>
			</tr>
			<tr>
				<td class="key">
					<label for="published">
						<?php echo JText::_( 'PUBLISH' ); ?>:
					</label>
				</td>
				<td>
					<?php echo JHTML::_('select.radiolist',  $arr, "published", $attribs, 'value', 'text', (int) $this->rwcardsCategories->published, $id ); ?>
				</td>
		</tr>
			</tbody>
			</table>
		</fieldset>
</div>

<input type="hidden" name="option" value="<?php echo $option; ?>" />
<input type="hidden" name="id" value="<?php echo $this->rwcardsCategories->id; ?>" />
<input type="hidden" name="cid[]" value="<?php echo $this->rwcardsCategories->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="managecategories" />
</form>
