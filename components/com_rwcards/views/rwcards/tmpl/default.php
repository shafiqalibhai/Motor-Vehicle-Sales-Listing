<?php
/**
* RWCards Template for RWCards Entry page
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
$document->addScript(JURI::base() . 'components/com_rwcards/js/rwcards.gallery.js');
$document->addStyleSheet( JURI::base() . 'components/com_rwcards/css/rwcards.slideshow.css', 'text/css', null, array( 'id' => 'StyleSheet' ) );
?>

<?php
if ( count($this->rwcards[0]) > 0)
{
for ($i=0; $i < count($this->rwcards); $i++)
{
?>
<style>
#myGallery_rwcards_<?php echo $i; ?>
{
width: 260px; !important;
height: 220px; !important;
border: 1px solid #000;
}      

#myGallery_rwcards_<?php echo $i; ?> img.thumbnail
{
display: none;
}
#rwcardsTable
{
width:100%;
border:0px;
padding:1em;
border:1px solid black;
margin:2px;
}
</style>
<script type="text/javascript">
function startGallery_rwcards_<?php echo $i; ?>() {
var myGallery = new gallery($('myGallery_rwcards_<?php echo $i; ?>'), {
timed: true,
showArrows: false,
showCarousel: false
});
}
window.addEvent('domready', startGallery_rwcards_<?php echo $i; ?>);
</script>


<table id="rwcardsTable">
<tr>
        <td width="150px">
<div id="myGallery_rwcards_<?php echo $i; ?>">
<?php
        foreach ($this->rwcards[$i] as $key => $val)
        {
?>
        <div class="imageElement">
        <h3><?php echo JText::_('ECARD_AUTHOR') . ": " . $val->autor; ?></h3>
        <p><?php echo JText::_('ECARD_DESCRIPTION') . "<br/>" . nl2br($val->description); ?></p>
        <a href="<?php echo JURI::base(); ?>index.php?option=com_rwcards&view=rwcards&controller=rwcardslistonecategory&Itemid=<?php echo intval($_GET['Itemid']); ?>&category_id=<?php echo $val->category_id; ?>&reWritetoSender=<?php echo $this->reWritetoSender; ?>&sessionId=<?php echo $this->sessionId; ?>" title="<?php echo $val->picture; ?>" class="open"></a>
        <img src="<?php echo JURI::base(); ?>images/stories/cards/<?php echo strtolower(substr($val->picture, 0, -4) ) . "@rwcards" . strtolower( substr($val->picture, strrpos($val->picture, ".")) ); ?>" class="full" />
</div>
<?php
        }
?>
</div>
        </td>
        <td valign="top" width="200px"><span style="font-weight: bold; text-decoration:underline;">
		<a href="<?php echo JURI::base(); ?>index.php?option=com_rwcards&view=rwcards&controller=rwcardslistonecategory&Itemid=<?php echo intval($_GET['Itemid']); ?>&category_id=<?php echo $val->category_id; ?>&reWritetoSender=<?php echo $this->reWritetoSender; ?>&sessionId=<?php echo $this->sessionId; ?>" title="<?php echo $val->picture; ?>" class="open"></a>
		<?php echo $this->rwcards[$i][0]->category_kategorien_name; ?></a></span><br/><br/><?php echo $this->rwcards[$i][0]->category_description; ?>
		<br><br><br><br>
        <a href="<?php echo JURI::base(); ?>index.php?option=com_rwcards&view=rwcards&controller=rwcardslistonecategory&Itemid=<?php echo intval($_GET['Itemid']); ?>&category_id=<?php echo $val->category_id; ?>&reWritetoSender=<?php echo $this->reWritetoSender; ?>&sessionId=<?php echo $this->sessionId; ?>" title="<?php echo $val->picture; ?>" class="open"><?php echo JText::_('ECARD_SEE_ALL_CARDS'); ?></a>
        </td>
</tr>
</table> 
<?php
}
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

