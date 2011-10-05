<?php
/**
* RWCards Template for SendCards
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
$document->addStyleSheet( JURI::base() . 'components/com_rwcards/css/rwcards.previewandsend.css', 'text/css', null, array( 'id' => 'StyleSheet' ) );
?>   

<div style="float:left; font-weight: bold;"><?php echo ($_SESSION['rwcardsSession']['picture'] != "") ? JText::_('RWCARDS_CARD_SUCESSFULLY_SENT') : JText::_('RWCARDS_VIEW_YOUR_CARD') . " " . $this->rwcards[0]->nameFrom; ?><br />
<br /><?php echo ($_SESSION['rwcardsSession']['picture'] != "") ? JText::_('RWCARDS_CONGATULATIONS') : JText::_('RWCARDS_VIEW_YOUR_CARD_HINT'); ?><br /><?php echo ($_SESSION['rwcardsSession']['picture'] != "") ? JText::_('RWCARDS_CONGATULATIONS_HINT') : ""; ?>
</div>
<p style="clear:both;" />
<br />

<p style="text-align:center;"><span id="showFrontCard" class="rwcardsLink"><?php echo JText::_('RWCARDS_SHOW_FRONT_CARD'); ?></span>&nbsp;&nbsp;<span id="showBackCard" class="rwcardsLink"><?php echo JText::_('RWCARDS_SHOW_BACK_CARD'); ?></span></p>
	<div id="rwcardsViewWrapper" style="position:relative; width:auto; height:300px; text-align:center;">
	<div id="frontCard" style="display:none;"><img src='<?php echo JURI::base(); ?>images/stories/cards/<?php echo ($_SESSION['rwcardsSession']['picture'] != "") ? $_SESSION['rwcardsSession']['picture'] : $this->rwcards[0]->picture; ?>' alt='<?php echo $_SESSION['rwcardsSession']['picture']; ?>' hspace='2' vspace='2' border='0' style='border:1px solid black;'></div>
	<div id="backCard" style="display:none; width:400px; height:300px;">
	<div class="rwcardsfull">
		<div class="rwcardsLeftForm">
			<p style="text-align:right;font-weight:bold;"><?php echo date("d.m.Y"); ?></p>
			<p style="font-weight:bold;"><?php echo  JText::_('RWCARDS_NAME_FROM') . "<br /> "; ?><?php echo ($_SESSION['rwcardsSession']['rwCardsFormNameFrom'] != "") ? $_SESSION['rwcardsSession']['rwCardsFormNameFrom'] : $this->rwcards[0]->nameFrom; ?>
			<br />
			<?php echo ($_SESSION['rwcardsSession']['rwCardsFormEmailFrom'] != "") ? $_SESSION['rwcardsSession']['rwCardsFormEmailFrom'] : $this->rwcards[0]->emailFrom; ?>
			</p>
			<p style="font-weight:bold;"><?php echo JText::_('RWCARDS_MESSAGE');?><br />
			<?php echo ($_SESSION['rwcardsSession']['rwCardsFormMessage'] != "") ? nl2br(stripslashes($_SESSION['rwcardsSession']['rwCardsFormMessage'])) : nl2br(stripslashes($this->rwcards[0]->message)); ?></p>
			</div>
			<div class="rwcardsRightForm">
			<p style="text-align:right;"><img src='<?php echo JURI::base(); ?>/components/com_rwcards/images/postmark.gif' /><img src='<?php echo JURI::base(); ?>/components/com_rwcards/images/stamp.jpg' /></p>
			<p style="font-weight:bold; text-align:right"><?php echo JText::_('RWCARDS_NAME_TO');?></p>
			<?php
			if ($this->viewCardOnly)
			{
                        ?>
				<span id="rwcardsReceiver">
				<p style="font-weight:bold; text-decoration:underline; text-align:right; padding-right:5px;">
				<?php echo $this->rwcards[0]->nameTo; ?>
				<br />
				<?php echo $this->rwcards[0]->emailTo; ?>
				<br />
				<br />
				</span>
			<?php
			}
			else
			{
				if ( count($_SESSION['rwcardsSession']['rwCardsFormEmailTo']) > 0 )
				{
					for ($i = 0; $i < count($_SESSION['rwcardsSession']['rwCardsFormEmailTo']); $i++)
					{
					?>
				<span id="rwcardsReceiver">
				<p style="font-weight:bold; text-decoration:underline; text-align:right; padding-right:5px;">
				<?php echo $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i]; ?>
				<br />
				<?php echo $_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i]; ?>
				<br />
				<br />
				</span>
				<?php
					}
				}
			}
			if ($this->viewCardOnly)
			{
			?>
			<p style="text-align:right; padding-right:5px; font-weight:bold;"><?php echo $this->rwcards[0]->nameFrom . "<br />" . JText::_('RWCARDS_REPLY'); ?></p>
			<p style="text-align:right; padding-right:5px;"><img src='<?php echo JURI::base(); ?>/components/com_rwcards/images/rewritecard.jpg' id="rwcardsReWriteCard" style="cursor:default;" />
			<?php
			}
			?>
			</div>
		<div class="rwcardsClr"></div>
	</div>
	</div>
</div>
<script type="text/javascript">//<![CDATA[
window.addEvent('domready', function()
{
	$('frontCard').setStyle('display', 'inline');
	frontCard = new Fx.Style('frontCard', 'opacity', {
	duration: 3000, 
	transition: Fx.Transitions.Quart.easeInOut
});
	frontCard.start(0,1);
});	

// Click on ShowFrontCard
$('showFrontCard').addEvent('click', function()
{
	$('backCard').setStyle('display', 'none');
	$('frontCard').setStyle('display', 'inline');
});

// Click on ShowBackCard
$('showBackCard').addEvent('click', function()
{
	$('frontCard').setStyle('display', 'none');
	$('backCard').setStyle('display', 'inline');
});
// Click on rwcardsReWriteCard
if ($('rwcardsReWriteCard'))
{
$('rwcardsReWriteCard').addEvent('click', function()
{
document.location.href='<?php echo JURI::base(); ?>index.php?option=com_rwcards&view=rwcards&Itemid=<?php echo $this->Itemid; ?>&task=rwcardsReWriteCard&sessionId=<?php echo $this->rwcards[0]->sessionId; ?>'
});
}
//]]></script>
<br />
<br />
<p style="clear:both;" />
<?php 
// Clear the session so if page is reloaded entry is not saved twice
$_SESSION['rwcardsSession'] = ""; 
?>