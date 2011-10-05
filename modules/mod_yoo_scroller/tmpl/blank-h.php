<?php
/**
* YOOscroller Joomla! Module
*
* @author    yootheme.com
* @copyright Copyright (C) 2007 YOOtheme Ltd. & Co. KG. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="<?php echo $style ?>">
	<div id="<?php echo $scroller_id ?>" class="yoo-scroller" style="<?php echo $css_module_width . $css_module_height ?>">
	
		<div class="panel-container" style="<?php echo $css_module_width ?>">
			<div class="panel-container-bg">

				<div class="panel" style="<?php echo $css_panel_width . $css_panel_height ?>">
					<div style="<?php echo $css_total_panel_width ?>">
					<?php for ($i=0; $i < $items; $i++) : ?>
						<div class="slide" style="<?php echo $css_slide_width ?>">
							<?php modYOOscrollerHelper::renderItem($list[$i], $params, $access); ?>
						</div>
					<?php endfor; ?>
					</div>
				</div>
				
				<?php if ($scrollbar) : ?>
				<div class="scrollarea" style="<?php echo $css_scrollarea_width ?>">
					<div class="scrollarea-l">
						<div class="scrollarea-r" style="<?php echo $css_scrollarea_height ?>">
						
							<div class="back"></div>
							<div class="scrollbar" style="<?php echo $css_scrollbar_width . $css_scrollbar_height ?>">
								<div class="scrollknob scrollknob-size">
									<div class="scrollknob-r">
										<div class="scrollknob-m">
										</div>
									</div>
								</div>
							</div>
							<div class="forward"></div>
							
						</div>
					</div>
				</div>
				<?php endif; ?>
			
			</div>
		</div>
										
	</div>
</div>