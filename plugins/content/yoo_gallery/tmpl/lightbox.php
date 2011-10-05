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

// add javascript and css
if ($load_lightbox && $this->includeOnce('YOO_GALLERY_LIGHTBOX')) {
	$document =& JFactory::getDocument();
	$document->addScript($this->uri.'lib/lightbox/slimbox_packed.js');
	$document->addStyleSheet($this->uri.'lib/lightbox/css/slimbox.css');
}

// add spotlight javascript
if ($spotlight && $this->includeOnce('YOO_GALLERY_JS')) $document->addScript($this->uri.'gallery.js');

// init vars
$a_attribs = ($rel != '') ? 'rel="'.$rel.'"' : 'rel="lightbox['.$gallery_id.']"';

?>
<div class="<?php echo $style.' '.$thumb_style; ?>">
	<div id="<?php echo $gallery_id; ?>" class="yoo-gallery <?php echo $style; ?>">
	
		<div class="thumbnails">
		<?php 
			for ($j=0; $j < count($thumbs); $j++) :
				$thumb = $thumbs[$j];
				include($tmpl_thumb);
 			endfor;
		?>
		</div>
		
	</div>
</div>
<?php if ($spotlight) : ?>
<script type="text/javascript">
	window.addEvent('domready', function(){
		var fx = new YOOgalleryfx('<?php echo $gallery_id; ?>');
	});
</script>
<?php endif; ?>