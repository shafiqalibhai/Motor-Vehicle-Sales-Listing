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
<form id="jForm" action="<?php JRoute::_('index.php')?>" method="post">
<?php if ($this->params->get('show_page_title')) : ?>
	<h1 class="componentheading<?php echo $this->params->get('pageclass_sfx')?>"><?php echo $this->params->get('page_title'); ?></h1>
<?php endif; ?>
	<p>
		<?php if ($this->params->get('filter')) : ?>
		<?php echo JText::_('Filter').'&nbsp;'; ?>
		<input type="text" name="filter" value="<?php echo htmlspecialchars($this->filter, ENT_COMPAT, 'UTF-8'); ?>" class="inputbox" onchange="document.jForm.submit();" />
		<?php endif; ?>
		<?php echo $this->form->monthField; ?>
		<?php echo $this->form->yearField; ?>
		<?php echo $this->form->limitField; ?>
		<button type="submit" class="button"><?php echo JText::_('Filter'); ?></button>
	</p>

<?php echo $this->loadTemplate('items'); ?>

	<input type="hidden" name="view" value="archive" />
	<input type="hidden" name="option" value="com_content" />
</form>
