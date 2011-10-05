<?php
/**
 * Title Include File (English)
 * Can overrule set variables in the Title Element
 *
 * @package    Modules in Content
 * @version    0.1.1
 * @since      File available since Release 0.1.0
 *
 * @author     Peter van Westen <peter@nonumber.nl>
 * @link       http://www.nonumber.nl/modulesincontent
 * @copyright  Copyright (C) 2008 NoNumber! All Rights Reserved
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

 
// Ensure this file is being included by a parent file
defined('_JEXEC') or die( 'Restricted access' );

if ( $_description == 'Easily place modules in your content.' ) {
	$_description = '
		<p>Easily place modules in your content.</p>
		<p>You can place modules using the syntax:<br />
		Using the name of the module: {<span style="color:green">module <span style="color:blue">Main Menu</span></span>}<br />
		Using the id of the module: {<span style="color:green">module <span style="color:blue">3</span></span>}</p>
		<p>You can also place colmplete module positions using the syntax:<br />
		{<span style="color:green">modulepos <span style="color:blue">mainmenu</span></span>}</p>
		<p>To use another style than the default, you can do this:<br />
		{<span style="color:green">module <span style="color:blue">Main Menu</span>|<span style="color:blue">horz</span></span>}<br />
		You can choose from: table, horz, xhtml, rounded, none.</p>
		';
}
