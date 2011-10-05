<?php // no direct access
defined('_JEXEC') or die('Restricted access');

$canEdit = ($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own'));
?>
<?php if ($this->params->get('show_page_title', 1) && $this->params->get('page_title') != $this->article->title) : ?>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner">

<h2 class="PostHeaderIcon-wrapper"> <span class="PostHeader">
<?php echo $this->escape($this->params->get('page_title')); ?>
</span>
</h2>


</div>

    </div>
</div>

<?php endif; ?>
<?php $metadata = array(); ?>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner">
<div class="PostMetadataHeader">
<?php if ($this->params->get('show_title')) : ?>
<h2 class="PostHeaderIcon-wrapper"> 	<?php if ($this->params->get('show_title')) : ?>
		<?php if ($this->params->get('link_titles') && $this->article->readmore_link != '') : ?>
		<a href="<?php echo $this->article->readmore_link; ?>" class="PostHeader">
			<?php echo $this->escape($this->article->title); ?></a>
		<?php else : ?>
			<?php echo $this->escape($this->article->title); ?>
		<?php endif; ?>
	<?php endif; ?>
</h2>
<?php endif; ?>

</div>
<div class="PostContent">
<?php  if (!$this->params->get('show_intro')) :
	echo $this->article->event->afterDisplayTitle;
endif; ?>
<?php echo $this->article->event->beforeDisplayContent; ?>
<?php if (($this->params->get('show_section') && $this->article->sectionid) || ($this->params->get('show_category') && $this->article->catid)) : ?>
<table class="contentpaneopen<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
<tr>
	<td>
		<?php if ($this->params->get('show_section') && $this->article->sectionid && isset($this->article->section)) : ?>
		<span>
			<?php if ($this->params->get('link_section')) : ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($this->article->sectionid)).'">'; ?>
			<?php endif; ?>
			<?php echo $this->article->section; ?>
			<?php if ($this->params->get('link_section')) : ?>
				<?php echo '</a>'; ?>
			<?php endif; ?>
				<?php if ($this->params->get('show_category')) : ?>
				<?php echo ' - '; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>
		<?php if ($this->params->get('show_category') && $this->article->catid) : ?>
		<span>
			<?php if ($this->params->get('link_category')) : ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->article->catslug, $this->article->sectionid)).'">'; ?>
			<?php endif; ?>
			<?php echo $this->article->category; ?>
			<?php if ($this->params->get('link_category')) : ?>
				<?php echo '</a>'; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>
	</td>
</tr>
</table>
<?php endif; ?>
<?php if (isset ($this->article->toc)) : ?>
	<?php echo $this->article->toc; ?>
<?php endif; ?>
<div class="article">
<?php echo $this->article->text; ?>
</div>
<?php if ( intval($this->article->modified) !=0 && $this->params->get('show_modify_date')) : ?>
<p class="modifydate">
		<?php echo JText::_( 'Last Updated' ); ?> ( <?php echo JHTML::_('date', $this->article->modified, JText::_('DATE_FORMAT_LC2')); ?> )
</p>
<?php endif; ?>

</div>
<div class="cleared"></div>

</div>

    </div>
</div>
