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

<script language="JavaScript">
function getFilterCards()
{
	document.adminForm.submit();
}
</script>

<form action="index.php?option=com_rwcards&controller=managesentcards" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'ECARDS' ); ?></legend>
		<table>
		<tr>
			<td align="left" width="100%">
				<?php echo JText::_( 'Filter' ); ?>:
				<input type="text" name="search" id="search" value="<?php echo $this->rwcards['lists']['search'];?>" class="text_area" onchange="document.adminForm.submit();" />
				<button onclick="adminForm.submit();"><?php echo JText::_( 'Go' ); ?></button>
				<button onclick="document.getElementById('search').value='';adminForm.submit();"><?php echo JText::_( 'Reset' ); ?></button>
			</td>
			<td nowrap="nowrap">
				<?php
				echo $this->rwcards['lists']['allSentCards'];
				?>
			</td>
			<td nowrap="nowrap">
				<?php
				echo $this->rwcards['lists']['allReadCards'];
				?>
			</td>
		</tr>
		</table>
		<table class="adminlist">
			<thead>
				<tr>
					<th width="20"  align="center">
						<?php echo JText::_( 'Num' ); ?>
					</th>
					<th nowrap="nowrap" class="title"><?php echo JText::_('RWCARDS_NAME_TO'); ?></th>
					<th nowrap="nowrap" class="title"><?php echo JText::_('RWCARDS_NAME_FROM'); ?></th>
					<th nowrap="nowrap" class="title"><?php echo JText::_('RWCARDS_PICTURE'); ?></th>
					<th nowrap="nowrap" class="title"><?php echo JText::_('RWCARDS_MESSAGE'); ?></th>
					<th nowrap="nowrap" class="title"><?php echo JText::_('RWCARDS_WRITTEN_ON'); ?></th>
					<th nowrap="nowrap" class="title"><?php echo JText::_('RWCARDS_READ_ON'); ?></th>
					<th width="5%" class="title" nowrap="nowrap"><?php echo JText::_('RWCARDS_CARD_SENT'); ?></th>
					<th nowrap="nowrap" width="5%"><?php echo JText::_('RWCARDS_CARD_READ'); ?></th>	
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="12"><?php echo ""; ?></td>
				</tr>
			</tfoot>
			<tbody>
		<?php
		$k = 0;
		for ($i=0, $n=count( $this->rwcards['rows'] ); $i < $n; $i++)
		{
			$row = &$this->rwcards['rows'];		
		?>
					<tr class="<?php echo "row$k"; ?>">
					<td align="center"><?php echo $this->rwcards['_pageNav']->getRowOffset($i); ?></td>
					<td align="center"><?php echo $row[$i]->nameTo . "<br />" . $row[$i]->emailTo; ?></td>
					<td align="center"><?php echo $row[$i]->nameFrom . "<br />" . $row[$i]->emailFrom; ?></td>
					<td><img src="../images/stories/cards/<?php echo strtolower( substr($row[$i]->picture, 0, -4) ) . "@rwcards" . strtolower( substr($row[$i]->picture, strrpos($row[$i]->picture, ".")) ); ?>" border="0" title="<?php echo nl2br($row[$i]->description); ?>" /></td>
					<td><?php echo nl2br($row[$i]->message); ?></td>
					<td align="center"><?php echo $row[$i]->writtenOn; ?></td>
					<td align="center"><?php echo $row[$i]->readOn; ?></td>
					<td align="center"><?php echo ($row[$i]->cardSent) ? "<img src='images/tick.png' />" : "<img src='images/publish_x.png' />"; ?></td>
					<td align="center"><?php echo ($row[$i]->cardRead) ? "<img src='images/tick.png' />" : "<img src='images/publish_x.png' />"; ?></td>
				</tr>
		<?php
		$k = 1 - $k;
		}
		?>
			</tbody>
			</table>
		</fieldset>
</div>

<input type="hidden" name="option" value="<?php echo $option; ?>" />
<input type="hidden" name="task" value="view" />
<input type="hidden" name="controller" value="managesentcards" />
</form>
