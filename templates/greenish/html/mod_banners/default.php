<?php // no direct access
/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
defined('_JEXEC') or die('Restricted access'); ?>
<div class="advs bannergroup<?php echo $params->get( 'moduleclass_sfx' ) ?>">

<?php if ($headerText) : ?>
  <div class="bannerheader"><?php echo $headerText ?></div>
<?php endif;

foreach($list as $item) :

	?><div class="banneritem<?php echo $params->get( 'moduleclass_sfx' ) ?>"><?php
	echo modBannersHelper::renderBanner($params, $item);
	?>
	</div>
<?php endforeach; ?>

<?php if ($footerText) : ?>
	<div class="bannerfooter<?php echo $params->get( 'moduleclass_sfx' ) ?>">
		 <?php echo $footerText ?>
	</div>
<?php endif; ?>
</div>
