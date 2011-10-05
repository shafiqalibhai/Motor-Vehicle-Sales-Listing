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
	width:70%;
	color: #666;
	font-weight: bold;
	border-bottom: 1px solid #e9e9e9;
	border-right: 1px solid #e9e9e9;
}
</style>
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>

		<table class="admintable">
		<tr>
			<td class="key">
				<label for="lifetime">
					<?php echo JText::_( 'LIFETIME' ); ?>:
				</label>
			</td>
			<td width="200">
				<input class="text_area" type="text" name="lifetime" id="lifetime" size="7" maxlength="250" value="<?php echo $this->rwcards->lifetime;?>" style="text-align:right;" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="cardsperpage">
					<?php echo JText::_( 'CARDSPERPAGE' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="cardsperpage" id="cardsperpage" size="7" maxlength="250" value="<?php echo $this->rwcards->cardsperpage;?>" style="text-align:right;" />
			</td>
		</tr>
		<tr>
			<td  class="key">
				<label for="rowssperpage">
					<?php echo JText::_( 'ROWSSPERPAGE' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="rowssperpage" id="rowssperpage" size="7" maxlength="250" value="<?php echo $this->rwcards->rowssperpage;?>" style="text-align:right;" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="attachement">
					<?php echo JText::_( 'ATTACHEMENT' ); ?>:
				</label>
			</td>
			<td>
				<?php echo JHTML::_('select.radiolist',  $arr, "attachement", $attribs, 'value', 'text', (int) $this->rwcards->attachement, $id ); ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="captcha">
					<?php echo JText::_( 'CAPTCHA' ); ?>:
				</label>
			</td>
			<td>
				<?php echo JHTML::_('select.radiolist',  $arr, "captcha", $attribs, 'value', 'text', (int) $this->rwcards->captcha, $id ); ?>
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_rwcards" />
<input type="hidden" name="id" value="<?php echo $this->rwcards->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="section" value="config" />
<input type="hidden" name="controller" value="config" />
</form>
