<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<script language="javascript" type="text/javascript">
function iFrameHeight() {
	var h = 0;
	if ( !document.all ) {
		h = document.getElementById('blockrandom').contentDocument.height;
		document.getElementById('blockrandom').style.height = h + 60 + 'px';
	} else if( document.all ) {
		h = document.frames('blockrandom').document.body.scrollHeight;
		document.all.blockrandom.style.height = h + 20 + 'px';
	}
}
</script>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner">

<?php if ($this->params->def('show_page_title', 1)): ?>
<h2 class="PostHeaderIcon-wrapper"> <span class="PostHeader">
<span class="componentheading<?php echo $this->params->get('pageclass_sfx')?>"><?php echo $this->escape($this->params->get('page_title')); ?></span>
</span>
</h2>

<?php endif; ?>
<div class="PostContent">

<iframe <?php echo $this->wrapper->load; ?>
	id="blockrandom"
	name="iframe"
	src="<?php echo $this->wrapper->url; ?>"
	width="<?php echo $this->params->get( 'width' ); ?>"
	height="<?php echo $this->params->get( 'height' ); ?>"
	scrolling="<?php echo $this->params->get( 'scrolling' ); ?>"
	align="top"
	frameborder="0"
	class="wrapper<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
	<?php echo JText::_( 'NO_IFRAMES' ); ?>
</iframe>

</div>
<div class="cleared"></div>


</div>

    </div>
</div>

