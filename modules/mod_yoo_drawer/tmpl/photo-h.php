<?php
/**
* YOOdrawer Joomla! Module
*
* @author    yootheme.com
* @copyright Copyright (C) 2007 YOOtheme Ltd. & Co. KG. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="<?php echo $style ?>">
	<div id="<?php echo $drawer_id ?>" class="yoo-drawer <?php echo $style ?>" style="<?php echo $css_module_width ?>">

		<ul class="list" style="<?php echo $css_module_height ?>">
		<?php for ($i=0; $i < $items; $i++) : ?>
		
			<?php
			$listitem = $list[$i];
			$item_class = "item item" . ($i + 1);
			if ($i == 0) $item_class .= " first active";
			if ($i == $items - 1) $item_class .= " last";
			$item_style = "position: absolute; left: " . ($item_minimized * $i) . "px; z-index: " . ($items - $i) . ";";
			?>

			<li class="<?php echo $item_class ?>" style="<?php echo $css_item_width . $item_style ?>">
				<div style="<?php echo $css_item_height ?>">
					<?php modYOOdrawerHelper::renderItem($listitem, $params, $access); ?>
				</div>
			</li>
			
		<?php endfor; ?>
		</ul>
		
	</div>
</div>