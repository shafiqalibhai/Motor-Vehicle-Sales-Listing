<?php
/**
* RWCards Template for PreviewCards
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

<div style="float:left; font-weight: bold;"><?php echo JText::_('RWCARDS_PREVIEW_CARD'); ?></div>
<br /><br />

<p style="text-align:center;"><span id="showFrontCard" class="rwcardsLink"><?php echo JText::_('RWCARDS_SHOW_FRONT_CARD'); ?></span>&nbsp;&nbsp;<span id="showBackCard" class="rwcardsLink"><?php echo JText::_('RWCARDS_SHOW_BACK_CARD'); ?></span></p>
	<div id="rwcardsViewWrapper" style="position:relative; width:auto; height:300px; text-align:center;">
	<div id="frontCard" style="display:none;"><img src='<?php echo JURI::base(); ?>images/stories/cards/<?php echo $_SESSION['rwcardsSession']['picture']; ?>' alt='<?php echo $_SESSION['rwcardsSession']['picture']; ?>' hspace='2' vspace='2' border='0' style='border:1px solid black;'></div>
	<div id="backCard" style="display:none; width:400px; height:300px;">
	<div class="rwcardsfull">
		<div class="rwcardsLeftForm">
			<p style="text-align:right;font-weight:bold;"><?php echo date("d.m.Y"); ?></p>
			<p style="font-weight:bold;"><? echo  JText::_('RWCARDS_NAME_FROM') . "<br /> " . $_SESSION['rwcardsSession']['rwCardsFormNameFrom']; ?>
			<br />
			<?php echo $_SESSION['rwcardsSession']['rwCardsFormEmailFrom']; ?>
			</p>
			<p style="font-weight:bold;"><?php echo JText::_('RWCARDS_MESSAGE');?><br />
			<?php echo nl2br(stripslashes($_SESSION['rwcardsSession']['rwCardsFormMessage']));  ?></p>
			</div>
			<div class="rwcardsRightForm">
			<p style="text-align:right;"><img src='<?php echo JURI::base(); ?>/components/com_rwcards/images/postmark.gif' /><img src='<?php echo JURI::base(); ?>/components/com_rwcards/images/stamp.jpg' /></p>
			<p style="font-weight:bold; text-align:right"><?php echo JText::_('RWCARDS_NAME_TO');?></p>
			<?php
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
			?>
			</div>
		<div class="rwcardsClr"></div>
	</div>
	</div>
</div>

	<div class="rwcards_buttons_bottom">
	<form method="post">
		<p style="text-align:center;">
		<span id="rwcardsGoBack" class="rwcardsLink"><?php echo JText::_('RWCARDS_GO_BACK');?></span>&nbsp;&nbsp; 
		<span id="rwcardsSend" class="rwcardsLink"><?php echo JText::_('RWCARDS_SEND_CARD');?></span>
		</p>
		<input type="hidden" name="sessionCode" id="sessionCode" value="<?php echo $_SESSION['rwcardsSession']['sessionCode']; ?>" />
		</form>    
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

$('rwcardsGoBack').addEvent('click', function()
{
document.location.href='<?php echo JURI::base(); ?>index.php?option=com_rwcards&controller=rwcardsfilloutcard&Itemid=<?php echo $this->Itemid; ?>&id=<?php echo $this->id; ?>'
});

$('rwcardsSend').addEvent('click', function()
{
document.location.href='<?php echo JURI::base(); ?>index.php?option=com_rwcards&controller=rwcardsprelookcard&task=sendrwcard&Itemid=<?php echo $this->Itemid; ?>&id=<?php echo $this->id; ?>'
});
//]]></script>
<br />
<br />
<p style="clear:both;" />
