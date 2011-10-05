<?php

/*------------------------------------------------------------------------

# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521

# ------------------------------------------------------------------------

# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.

# @license - Copyrighted Commercial Software

# Author: J.O.O.M Solutions Co., Ltd

# Websites:  http://www.joomlart.com -  http://www.joomlancers.com

# This file may not be redistributed in whole or significant part.

-------------------------------------------------------------------------*/



// no direct access

defined('_JEXEC') or die('Restricted access');



/**

 * This is a file to add template specific chrome to module rendering.  To use it you would

 * set the style attribute for the given module(s) include in your template to use the style

 * for each given modChrome function.

 *

 * eg.  To render a module mod_test in the sliders style, you would use the following include:

 * <jdoc:include type="module" name="test" style="slider" />

 *

 * This gives template designers ultimate control over how modules are rendered.

 *

 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same

 * two arguments.

 */


require_once(JPATH_BASE.DS.'components'.DS.'com_smartsite'.DS.'lib'.DS.'jpanesmartsite.php');
 
/*
 * Module chrome for rendering the smartmodule
 */
function modChrome_smartsite($module, &$params, &$attribs) 
{
 
  jimport('joomla.html.pane');
  // Initialize variables
  $smartsite = new JPaneSmartsite ();
  $id_module = $module->id_smartsite_module > 0 ? $module->id_smartsite_module : $module->id;
  echo $smartsite->startPanel( JText::_( $module->title ), $id_module );
  echo $module->content;
  echo $smartsite->endPanel();
}




/*

 * Module chrome for rendering the module in a slider

 */

function modChrome_slider($module, &$params, &$attribs)

{

	jimport('joomla.html.pane');

	// Initialize variables

	$sliders = & JPane::getInstance('sliders');

	$sliders->startPanel( JText::_( $module->title ), 'module' . $module->id );

	echo $module->content;

	$sliders->endPanel();

}



/*

 * Module chrome that allows for rounded corners by wrapping in nested div tags

 */

function modChrome_jamodule($module, &$params, &$attribs)

{ ?>

		<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>" id="Mod<?php echo $module->id; ?>">

			<?php if ($module->showtitle != 0) : ?>

			<h3><span><?php echo $module->title; ?></span></h3>

			<?php endif; ?>

			<?php echo $module->content; ?>

    </div>

	<?php

}



/*

 * Module chrome that allows for rounded corners by wrapping in nested div tags

 */

function modChrome_jarounded($module, &$params, &$attribs)

{ ?>

		<div class="ja-box-br module<?php echo $params->get('moduleclass_sfx'); ?>">

		<div class="ja-box-bl"><div class="ja-box-tr"><div class="ja-box-tl">

			<?php if ($module->showtitle != 0) : ?>

				<h3 ><span><?php echo $module->title; ?></span></h3>

			<?php endif; ?>

			<div class="ja-box-ct clearfix">

			<?php echo $module->content; ?>

			</div>

		</div></div></div></div>

	<?php

}

?>