<?php header("Content-type: text/css"); ?>
/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
<?php
$template_path = dirname( dirname( $_SERVER['REQUEST_URI'] ) );
?>
h1.logo a {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/logo.png', sizingMethod='image');
 	background-image: none;
}

.maskDesc {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/mask.png', sizingMethod='scale');
	background-image: url (../images/blank.png);
}

.but_next:hover {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/arrow-r-hover.png', sizingMethod='scale');
	background-image: none;
}

.but_prev:hover {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/arrow-l-hover.png', sizingMethod='scale');
	background-image: none;
}
