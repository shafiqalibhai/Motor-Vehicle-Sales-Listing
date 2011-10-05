<?php 
/**
* RWCards Template for ListOneCategory
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/
// no direct access
defined('_JEXEC') or die('Restricted access');

global $mainframe;	
     	
// Load the moo.fx scripts
$document = &JFactory::getDocument();
$document->addScript(JURI::base() . 'media/system/js/mootools.js');
$document->addScript(JURI::base() . 'components/com_rwcards/js/slimbox.js');
$document->addStyleSheet( JURI::base() . 'components/com_rwcards/css/slimbox/slimbox.css', 'text/css', null, array( 'id' => 'StyleSheet' ) );
?>   


<form method="post"  name="formRWCardsListOneCategory">

<div style="font-weight:bold; text-align:right;">
<?php echo JText::_('ECARD_CHOSEN_CATEGORY') . ": " . $this->categories; ?></div>                                                             
<p />&nbsp;<p />
<?php
if ( count($this->rwcards['rows']) > 0)
{
?>
<div style="float:left; font-weight: bold;"><?php echo JText::_('ECARD_CLICK_ON_CARD_TO_PREVIEW'); ?></div>
<br />
<div style="text-align:center;">
<table border="0">
<tr>
<?php
$k="";
for ($i=0, $n=count( $this->rwcards['rows'] ); $i < $n; $i++)
{
?>
<td>
<a href="<?php echo JURI::base(); ?>images/stories/cards/<?php echo $this->rwcards['rows'][$i]->picture;?>" rel="lightbox[atomium]" title="<?php echo JText::_('ECARD_AUTHOR') . ": " .$this->rwcards['rows'][$i]->autor . "<br/><br/><u>" . JText::_('ECARD_DESCRIPTION') . "</u><br/>" . nl2br($this->rwcards['rows'][$i]->description); ?>"><img src="./images/stories/cards/<?php echo strtolower(substr($this->rwcards['rows'][$i]->picture, 0, -4) ) . "@rwcards" . strtolower(substr($this->rwcards['rows'][$i]->picture, strrpos($this->rwcards['rows'][$i]->picture, ".")) ); ?>" style="border: 1px solid black; margin:5px;" /></a>
<br />
<span style="float:left; display:inline; width:165px; margin:5px; padding-bottom:10px;"><a href="./index.php?option=com_rwcards&amp;controller=rwcardsfilloutcard&amp;Itemid=
<?php echo intval($_REQUEST['Itemid']); ?>&id=<?php echo intval($this->rwcards['rows'][$i]->id); ?>&amp;category_id=<?php echo
intval($_REQUEST['category_id']); ?>&reWritetoSender=<?php echo $this->reWritetoSender; ?>&sessionId=<?php echo $this->sessionId; ?>"><?php echo JText::_('ECARD_SEND_THIS_IMAGE'); ?></a></span></td>
<?php
$k++;
if($k % $this->rwcards['cardsPerLine'] == 0)
{
	echo "</tr><tr>";
}
}
?>
</table>
</div>
<br />
<p style="clear:both;" />
<div id="limit" style="text-align:center;"><?php echo $this->rwcards['_pageNav']->getPagesLinks( JURI::base() . "index.php?option=" . $option . "&controller=rwcardslistonecategory&Itemid=" . intval($_REQUEST['Itemid']) . "&category_id=" . JRequest::getVar('category_id', 0, 'request', 'int')); ?></div>

</form>
</p>
<br />
<p style="clear:both;" />
<?php
}
else
{
?>
<table id="rwcardsTable">
<tr>
<td valign="top"><span style="font-weight: bold; color:red; font-size:14px;"><?php echo JText::_('RWCARDS_NO_CATEGORY_PUBLISHE_OR_CREATED'); ?><br/><?php echo JText::_('RWCARDS_NO_PICTURES_PUBLISHE_OR_CREATED');?></span></td>
</tr>
</table>
<?php
}
?>

<script type="text/javascript">//<![CDATA[

$('category_id').addEvent('change', function()
{
	var chosenCategory = $('category_id').getValue();
	document.location.href='<?php echo JURI::base(); ?>index.php?option=com_rwcards&view=rwcards&controller=rwcardslistonecategory&Itemid=<?php echo $this->Itemid; ?>&category_id=' + chosenCategory + '&reWritetoSender=<?php echo $this->reWritetoSender; ?>&sessionId=<?php echo $this->sessionId; ?>';;
});
//]]></script>