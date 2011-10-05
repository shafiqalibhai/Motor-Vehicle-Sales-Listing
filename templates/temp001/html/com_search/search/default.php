<?php defined('_JEXEC') or die('Restricted access'); ?>
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

<?php echo $this->loadTemplate('form'); ?>
<?php if(!$this->error && count($this->results) > 0) :
	echo $this->loadTemplate('results');
else :
	echo $this->loadTemplate('error');
endif; ?>

</div>
<div class="cleared"></div>


</div>

    </div>
</div>
