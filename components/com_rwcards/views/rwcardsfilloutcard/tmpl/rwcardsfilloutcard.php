<?php 
/**
* RWCards Template for FillOutCards
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

$document = &JFactory::getDocument();
$document->addScript(JURI::base() . 'media/system/js/mootools.js');
$document->addScript(JURI::base() . 'components/com_rwcards/js/windoo.js');
$document->addStyleSheet( JURI::base() . 'components/com_rwcards/css/windoo.css', 'text/css', null, array( 'id' => 'StyleSheet' ) );
$document->addStyleSheet( JURI::base() . 'components/com_rwcards/css/windoo.aero.css', 'text/css', null, array( 'id' => 'StyleSheet' ) );
$document->addStyleSheet( JURI::base() . 'components/com_rwcards/css/rwcards.filloutform.css', 'text/css', null, array( 'id' => 'StyleSheet' ) );
require_once (JPATH_COMPONENT.DS.'captcha'.DS. 'class.captcha.php');

?>   
<?php

if($this->captchaError or count($this->rwCardsError) > 0)
{
(!$this->isCaptcha) ? array_push($this->rwCardsError, JText::_('RWCARDS_FORM_CAPTURE_ERROR_MESSAGE')) : "";
?>
<script type="text/javascript">//<![CDATA[
window.addEvent('domready', function()
{
	//** Window 4: display Alert dialog window
	new Windoo.Alert("<h2 style='text-align:center; font-weight:bold; color:red; font-family:Verdana;'><?php echo join('<br /><br />', $this->rwCardsError) . '<br /><br />';  ?></h2>", {
		'window': {
			'theme': Windoo.Themes.aero,
			'width': 500,
			'height': 300,
			'title' : '<?php echo JText::_('RWCARDS_FORM_ERROR'); ?>'
		}
	});
});	
//]]></script>
<?php
}                                                              
?>

<div id="rwcardsAlertDialog"></div>
<div style="float:left; font-weight: bold;"><?php echo JText::_('ECARD_PLEASE_FILL_OUT'); ?></div>
<br/><br/>


<form name="rwCardsForm" method="post" action="<?php echo JURI::base(); ?>index.php?option=com_rwcards&amp;controller=rwcardsfilloutcard&amp;task=CheckCaptcha&amp;Itemid=<?php echo intval($_REQUEST['Itemid']); ?>&amp;id=<?php echo intval($_REQUEST['id']); ?>&category_id=<?php echo intval($_REQUEST['category_id']); ?>">
<div class="rwcardsImage">
	<p style="text-align:center;"><img src="<?php echo JURI::base(); ?>images/stories/cards/<?php echo(isset($_SESSION['rwcardsSession']['picture'])) ? $_SESSION['rwcardsSession']['picture'] : $this->rwcards[0]->picture; ?>" hspace="2" vspace="2" /></p>
</div>
<div class="rwcardsfull">
	<div class="rwcardsLeftForm">
		<?php echo JText::_('RWCARDS_MESSAGE');?><br>
		<textarea id="rwCardsFormMessage" name="rwCardsFormMessage" class="rwcards_inputbox" rows="8" cols="20"><?php echo ($_SESSION['rwcardsSession']['rwCardsFormMessage'] != "") ? $_SESSION['rwcardsSession']['rwCardsFormMessage'] : ""; ?></textarea>
		<br><br>
		<?php echo JText::_('RWCARDS_NAME_FROM');?><br>
		<input id="rwCardsFormNameFrom" name="rwCardsFormNameFrom" value="<?php echo (isset($_SESSION['rwcardsSession']['rwCardsFormNameFrom'])) ? $_SESSION['rwcardsSession']['rwCardsFormNameFrom'] : $this->rwcards[0]->nameTo; ?>" type="text" class="rwcards_inputbox">
		<br><br>
		<?php echo JText::_('RWCARDS_EMAIL_FROM');?><br>
		<input id="rwCardsFormEmailFrom" name="rwCardsFormEmailFrom" value="<?php echo (isset($_SESSION['rwcardsSession']['rwCardsFormEmailFrom'])) ? $_SESSION['rwcardsSession']['rwCardsFormEmailFrom'] : $this->rwcards[0]->emailTo; ?>" type="text" class="rwcards_inputbox">
    	</div>
    	<div class="rwcardsRightForm">
	<p style="text-align:right;">
		<?php
		if ( isset($_SESSION['rwcardsSession']['rwCardsFormEmailTo']) )
		{
			for ($i = 0; $i < count($_SESSION['rwcardsSession']['rwCardsFormEmailTo']); $i++)
			{
			?>
				<span id="rwcardsReceiver">
				<?php echo JText::_('RWCARDS_NAME_TO');?><br>
				<input id="rwCardsFormNameTo[<?php echo $i; ?>]" name="rwCardsFormNameTo[]" value="<?php echo $_SESSION['rwcardsSession']['rwCardsFormNameTo'][$i]; ?>" type="text" class="rwcards_inputbox">
				<br><br>
				<?php echo JText::_('RWCARDS_EMAIL_TO');?><br>
				<input id="rwCardsFormEmailTo[<?php echo $i; ?>]" name="rwCardsFormEmailTo[]" value="<?php echo  $_SESSION['rwcardsSession']['rwCardsFormEmailTo'][$i]; ?>" type="text" class="rwcards_inputbox">
				<br />
				<br />
				</span>
		<?php
			}
		}
		else
		{
		?>
			<span id="rwcardsReceiver">
			<?php echo JText::_('RWCARDS_NAME_TO');?><br>
			<input id="rwCardsFormNameTo[]" name="rwCardsFormNameTo[]" value="<?php echo $this->rwcards[0]->nameFrom; ?>" type="text" class="rwcards_inputbox">
			<br><br>
			<?php echo JText::_('RWCARDS_EMAIL_TO');?><br>
			<input id="rwCardsFormEmailTo[]" name="rwCardsFormEmailTo[]" value="<?php echo $this->rwcards[0]->emailFrom; ?>" type="text" class="rwcards_inputbox">
			<br />
			<br />
		</span>
		<?php
		}
		?>
		<br style="line-height:50px;" />
		<span id="moreReceivers" style="font-weight:bold; cursor:pointer;"><?php echo JText::_('RWCARDS_ADD_RECEIVER');?></span>
		<br>
		<span id="lessReceivers" style="visibility:hidden; font-weight:bold;  cursor:pointer;"><br /><?php echo JText::_('RWCARDS_REMOVE_RECEIVER');?></span>
		<?php
		if ($this->rwcards[0]->captcha == "1")
		{
		if (empty($_SESSION['rwcardsSession']['sessionCode'])) 
		{ 
			$session_code = md5(round(rand(0,40000))); 
		} 
		else 
		{ 
			$session_code = $_SESSION['rwcardsSession']['sessionCode']; 
		}	
	
		$my_captcha = new captcha( $session_code, './components/com_rwcards/captcha/__temp__' );
		$pic_url = $my_captcha->get_pic( 4 );
		?>
		<br />
		<br />
		<span id="rwcardsCaptcha">
		<?php echo JText::_('RWCARDS_FORM_CAPTURE'); ?><br />
		<img src="<?php echo JURI::base(); ?>/components/com_rwcards/captcha/captcha_image.php?img=<?php echo $pic_url;  ?>" align="right"><br /><br /><br /><br /><br />
		<?php echo JText::_('RWCARDS_FORM_CAPTURE_CODE'); ?><br>
		<input id="captchaCode" name="captchaCode"  type="text" value="" class="rwcards_inputbox">
		<br>
		<?php echo JText::_('RWCARDS_FORM_CAPTCHA_HINT1') . "<br>" . JText::_('RWCARDS_FORM_CAPTCHA_HINT2');?><br>
		</span>
		<?php
		}
		?>
		<input type="hidden" id="captcha_config" name="captcha_config" value="<?php echo $this->rwcards[0]->captcha; ?>" />		
</p>
    	</div>
	<div class="rwcardsClr"></div>
	<div class="rwcards_buttons_bottom">
		<p style="text-align:center; margin-top:20px;">
		<input type="button" id="rwCardsBack" value="<?php echo JText::_('RWCARDS_BACK');?>" class="rwcards_button" /> 
		<input type="submit" name="submit" id="submit" value="<?php echo JText::_('RWCARDS_PREVIEW_CARD'); ?>" class="rwcards_button" />
		<input type="submit" name="submit" id="submit" value="<?php echo JText::_('RWCARDS_SEND_CARD');?>" class="rwcards_button" />
		</p>    
	</div>
</div>

	<input type="hidden" name="picture" value="<?php echo $this->rwcards[0]->picture; ?>" />
	<input type="hidden" name="sessionCode" id="sessionCode" value="<?php echo $session_code; ?>" />
	
</form>
<p style="clear:both;" />
<script type="text/javascript">//<![CDATA[
<?php
if($this->captchaError or count($this->rwCardsError) > 0)
{
for ($i = 0; $i < count($this->rwCardsFieldsError); $i++)
{
?>
	$('<?php echo $this->rwCardsFieldsError[$i]; ?>').setStyle('background-color', 'red');
<?php
}
?>
$('<?php echo $this->rwCardsFieldsError[0]; ?>').focus();
<?php
}
?>
if ($$('#rwcardsReceiver').length >= 2)
{
	$('lessReceivers').setStyle('visibility', 'visible');
}

$('moreReceivers').addEvent('click', function()
{
	$('rwcardsReceiver').clone().injectAfter('rwcardsReceiver')
	$('lessReceivers').setStyle('visibility', 'visible');
});

$('lessReceivers').addEvent('click', function()
{
	if ($$('#rwcardsReceiver').length <= 2)
	{
		$('lessReceivers').setStyle('visibility', 'hidden');
	}
	//alert($$('#rwcardsReceiver').length)
	$('rwcardsReceiver').remove()
});

$('rwCardsBack').addEvent('click', function()
{
document.location.href='<?php echo JURI::base(); ?>index.php?option=com_rwcards&view=rwcards&controller=rwcardslistonecategory&Itemid=<?php echo $_REQUEST['Itemid']; ?>&category_id=<?php echo $_REQUEST['category_id']; ?>&sessionId=<?php echo $this->sessionId; ?>';
});
//]]></script>