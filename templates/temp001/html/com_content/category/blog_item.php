<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php $canEdit   = ($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own')); ?>
<?php if ($this->item->state == 0) : ?>
<div class="system-unpublished">
<?php endif; ?>

<?php $metadata = array(); ?>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner">
<div class="PostMetadataHeader">
<?php if ($this->item->params->get('show_title')) : ?>
<h2 class="PostHeaderIcon-wrapper"> <?php if ($this->item->params->get('link_titles') && $this->item->readmore_link != '') : ?>
		<a href="<?php echo $this->item->readmore_link; ?>" class="PostHeader">
			<?php echo $this->escape($this->item->title); ?></a>
		<?php else : ?>
			<?php echo $this->escape($this->item->title); ?>
		<?php endif; ?>
</h2>
<?php endif; ?>

</div>
<div class="PostContent">
<?php  if (!$this->item->params->get('show_intro')) :
	echo $this->item->event->afterDisplayTitle;
endif; ?>
<?php echo $this->item->event->beforeDisplayContent; ?>
<?php if (($this->item->params->get('show_section') && $this->item->sectionid) || ($this->item->params->get('show_category') && $this->item->catid)) : ?>
<table class="contentpaneopen<?php echo $this->item->params->get( 'pageclass_sfx' ); ?>">
<tr>
	<td>
		<?php if ($this->item->params->get('show_section') && $this->item->sectionid && isset($this->item->section)) : ?>
		<span>
			<?php if ($this->item->params->get('link_section')) : ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($this->item->sectionid)).'">'; ?>
			<?php endif; ?>
			<?php echo $this->item->section; ?>
			<?php if ($this->item->params->get('link_section')) : ?>
				<?php echo '</a>'; ?>
			<?php endif; ?>
				<?php if ($this->item->params->get('show_category')) : ?>
				<?php echo ' - '; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>
		<?php if ($this->item->params->get('show_category') && $this->item->catid) : ?>
		<span>
			<?php if ($this->item->params->get('link_category')) : ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug, $this->item->sectionid)).'">'; ?>
			<?php endif; ?>
			<?php echo $this->item->category; ?>
			<?php if ($this->item->params->get('link_category')) : ?>
				<?php echo '</a>'; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>
	</td>
</tr>
</table>
<?php endif; ?>
<?php if (isset ($this->item->toc)) : ?>
	<?php echo $this->item->toc; ?>
<?php endif; ?>
<div class="article">
<?php echo $this->item->text; ?>
</div>
<?php if ( intval($this->item->modified) != 0 && $this->item->params->get('show_modify_date')) : ?>
<p class="modifydate">
<?php echo JText::_( 'Last Updated' ); ?> ( <?php echo JHTML::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC2')); ?> )
</p>
<?php endif; ?>
<?php if ($this->item->params->get('show_readmore') && $this->item->readmore) : ?>
<p>
 <a class="Button" href="<?php echo $this->item->readmore_link; ?>">
  <span class="btn">
   <span class="t"><?php if ($this->item->readmore_register) :
				echo str_replace(' ', '&nbsp;', JText::_('Register to read more...'));
			elseif ($readmore = $this->item->params->get('readmore')) :
				echo str_replace(' ', '&nbsp;', $readmore);
			else :
				echo str_replace(' ', '&nbsp;', JText::sprintf('Read more...'));
			endif; ?></span>
   <span class="r"><span></span></span>
   <span class="l"></span>
  </span>
 </a>
</p>
<?php endif; ?>

</div>
<div class="cleared"></div>

</div>

    </div>
</div>


<?php if ($this->item->state == 0) : ?>
</div>
<?php endif; ?>
<span class="article_separator">&nbsp;</span>
<?php echo $this->item->event->afterDisplayContent; ?>
