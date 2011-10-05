<?php
/**
* YOOgallery Core
*
* @author    yootheme.com
* @copyright Copyright (C) 2008 YOOtheme. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="thumbnail">
	<div class="thumbnail-bg">
		<div class="corner-tl"></div>
		<div class="corner-tr"></div>
		<div class="corner-bl"></div>
		<div class="corner-br"></div>
				
		<a href="<?php echo $thumb['img']; ?>" title="<?php echo $thumb['name']; ?>" <?php echo $a_attribs; ?>>
			<img src="<?php echo $thumb['thumb']; ?>" alt="<?php echo $thumb['name']; ?>" width="<?php echo $thumb['thumb_width']; ?>" height="<?php echo $thumb['thumb_height']; ?>" />
		</a>

	</div>
</div>