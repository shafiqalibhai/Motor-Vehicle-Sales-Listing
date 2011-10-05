<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div class="templatechooser<?php echo $moduleclass_sfx;?>">
<?php
$onchange = "";
if ($show_preview) {
	$onchange = "showimage_".$chooserID ."()";


?>

<img src="<?php echo JURI::base(); echo "templates/$cur_template/template_thumbnail.png";?>" name="preview_<?php echo $chooserID; ?>" border="1" width="<?php echo $preview_width;?>" height="<?php echo $preview_height;?>" alt="<?php echo $cur_template; ?>" />
<script language='JavaScript1.2' type='text/javascript'>
<!--
	function showimage_<?php echo $chooserID; ?>() {
		//if (!document.images) return;
		document.images.preview_<?php echo $chooserID; ?>.src = '<?php echo JURI::base();?>templates/' + getSelectedValue_<?php echo $chooserID; ?>( 'templateform_<?php echo $chooserID; ?>', 'mod_change_template_<?php echo $chooserID; ?>' ) + '/template_thumbnail.png';
	}
	function getSelectedValue_<?php echo $chooserID; ?>( frmName, srcListName ) {
		var form = eval( 'document.' + frmName );
		var srcList = eval( 'form.' + srcListName );

		i = srcList.selectedIndex;
		if (i != null && i > -1) {
			return srcList.options[i].value;
		} else {
			return null;
		}
	}
-->
</script>
<?php
}
?>
<form  name="templateform_<?php echo $chooserID; ?>" method="post" action="">
	<?php 
        $selectattr = " class=\"button\" onchange=\"$onchange\""; 
	echo JHTML::_('select.genericlist', $darray, 'mod_change_template_'.$chooserID, $selectattr,'value', 'text', $cur_template );
	?>
	<input class="button" type="submit" value="<?php echo JText::_('Select');?>" />
</form>
</div>