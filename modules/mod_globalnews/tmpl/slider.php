<?php

defined('_JEXEC') or die('Restricted access'); 

JHTML::script( 'slider.js','modules/mod_globalnews/scripts/js/',false);
?>

<div id="gn_slider_<?php echo $globalnews_id.'_'.$j; ?>" class="gn_slider_<?php echo $globalnews_id; ?>">
  <div class="gn_opacitylayer">
  <?php foreach ($list as $item) : ?>
    <div class="gn_news">
	<?php echo modGlobalNewsHelper::renderGN_Content($params,$item); ?>
	</div>
  <?php endforeach; ?>
  </div>
</div>
<div class="gn_pagination_<?php echo $globalnews_id; ?>" id="paginate-gn_slider_<?php echo $globalnews_id.'_'.$j; ?>"></div>
<script type="text/javascript" language="javascript">
<!--
GN_ContentSlider("gn_slider_<?php echo $globalnews_id.'_'.$j; ?>", <?php echo $params->get('delay', 3000) ?>,"<?php echo $linkNext; ?>","<?php echo $linkMore; ?>");
-->
</script>