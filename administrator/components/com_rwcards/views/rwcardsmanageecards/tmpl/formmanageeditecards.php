<?php 
/**
* RWCards Template for RWCards
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

defined('_JEXEC') or die('Restricted access');?>
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

#otherImageChosen
{
	color:red;
	font-weight:bold;
}
</style>

<form action="index.php?option=com_rwcards&controller=manageecards" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'KATEGORIEN' ); ?></legend>
		<table class="admintable">
			<tbody>
			<tr>
				<td width="100" align="right" class="key">
					<label for="autor">
						<?php echo JText::_( 'ECARD_AUTHOR' ); ?>:
					</label>
				</td>
				<td>
			<input class="text_area" type="text" name="autor" id="autor" size="32" maxlength="250" value="<?php echo $this->rwcards['rows']->autor;?>" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right" class="key">
					<label for="email">
						<?php echo JText::_( 'ECARD_EMAIL' ); ?>:
					</label>
				</td>
				<td>
			<input class="text_area" type="text" name="email" id="email" size="32" maxlength="250" value="<?php echo $this->rwcards['rows']->email;?>" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right" valign="top" class="key">
					<label for="description ">
						<?php echo JText::_( 'ECARD_DESCRIPTION' ); ?>:
					</label>
				</td>
				<td>
			<textarea  name="description" id="description" rows="5" cols="45" class="inputbox"><?php echo $this->rwcards['rows']->description;?></textarea>
				</td>
			</tr>
			<tr>
				<td width="100" align="right" class="key">
					<label for="category_id">
						<?php echo JText::_( 'ECARD_CATEGORY' ); ?>:
					</label>
				</td>
				<td>
			<?php echo $this->rwcards['lists']['categories'];?>
				</td>
			</tr>
			<tr>
				<td width="100" align="right" valign="top" class="key">
					<label for="picture">
						<div id="originalImage"><?php echo JText::_( 'ECARD_PICTURE' ); ?>:
						<br /><?php echo $this->rwcards['rows']->picture; ?></div><br /><br />

<?php echo JText::_( 'ECARD_NEW_PICTURE' ); ?> :<br />

<?php echo $this->rwcards['lists']['imageFiles'];?>
<div id="otherImageChosen"></div>
					</label>
				</td>
				<td>
					<img src="../images/stories/cards/<?php echo $this->rwcards['rows']->picture; ?>" name="imageFile" />
				</td>
			</tr>
			<tr>
				<td class="key">
					<label for="published">
						<?php echo JText::_( 'PUBLISH' ); ?>:
					</label>
				</td>
				<td>
					<?php echo JHTML::_('select.radiolist',  $arr, "published", $attribs, 'value', 'text', (int) $this->rwcards['rows']->published, $id ); ?>
				</td>
		</tr>
			</tbody>
			</table>
		</fieldset>
</div>

<input type="hidden" name="option" value="<?php echo $option; ?>" />
<input type="hidden" name="id" value="<?php echo $this->rwcards['rows']->id; ?>" />
<input type="hidden" name="cid[]" value="<?php echo $this->rwcards['rows']->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="manageecards" />
</form>
<script language="JavaScript">
var img = document.getElementById('imageFile');

if (img == null)
{
	document.images['imageFile'].src = '../images/stories/cards/' + document.adminForm.picture.value;
}
	
function changeImagePreview()
{
	if (document.getElementById('imageFile') != null)
	{
		document.images['imageFile'].src = '../images/stories/cards/' + document.adminForm.picture.value;
		document.getElementById('otherImageChosen').innerHTML = document.adminForm.picture.value;
		document.getElementById('originalImage').style.color = "green;"
		document.getElementById('originalImage').innerHTML = "<?php echo JText::_( 'ECARD_ORIGINAL_PICTURE' ) . '<br/>' . $this->rwcards['rows']->picture; ?>";
	}
	else
	{
		document.images['imageFile'].src = '../images/stories/cards/' + document.adminForm.picture.value;
	}
}
</script>