<?php // no direct access
/*------------------------------------------------------------------------
# JA Zeolite for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
defined('_JEXEC') or die('Restricted access'); ?>
<?php if ($this->params->get('show_page_title')) : ?>
<h1 class="componentheading<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
	<?php echo $this->section->title; ?>
</h1>
<?php endif; ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
<tr>
	<td width="60%" valign="top" class="contentdescription<?php echo $this->params->get( 'pageclass_sfx' ); ?>" colspan="2">
	<?php if ($this->params->get('show_description_image') && $this->section->image) : ?>
		<img src="images/stories/<?php echo $this->section->image;?>" align="<?php echo $this->section->image_position;?>" hspace="6" alt="<?php echo $this->section->image;?>" />
	<?php endif; ?>
	<?php if ($this->params->get('show_description') && $this->section->description) : ?>
		<?php echo $this->section->description; ?>
	<?php endif; ?>
	</td>
</tr>
<tr>
	<td colspan="2">
	<?php if ($this->params->get('show_categories', 1)) : ?>
	<ul>
	<?php foreach ($this->categories as $category) : ?>
		<?php if (!$this->params->get('show_empty_categories') && !$category->numitems) continue; ?>
		<li>
			<a href="<?php echo $category->link; ?>" class="category">
				<?php echo $category->title;?>
			</a>
			<?php if ($this->params->get('show_cat_num_articles')) : ?>
			&nbsp;
			<span class="small">
				( <?php echo $category->numitems ." ". JText::_( 'items' );?> )
			</span>
			<?php endif; ?>
			<?php if ($this->params->def('show_category_description', 1) && $category->description) : ?>
			<br />
			<?php echo $category->description; ?>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php endif; ?>
	</td>
</tr>
</table>
