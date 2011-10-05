<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_morfeoshow
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<link rel="stylesheet" href="<?php echo JURI::base()?>components/com_morfeoshow/css/install.css" type="text/css" />
	<div id="jc">
		<div id="element-box">
			<div class="t">
				<div class="t">
					<div class="t">
				</div>
			</div>
		</div>
	<div class="m">
		<table width="95%" border="0" cellpadding="0" cellspacing="0">
			<tr valign="top" align="left" valign="middle">
				<td align="center" width="160px"><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/install.png" border="0" alt="" />
				</td>
				<td>
					<span class="componentname">Welcome in MorfeoShow</span> <br />
					<span class="componentdesc">Easy Photo Gallery System for Joomla! 1.5</span> <br />
					<span class="componentdate">04-09-2008 release 1.2.0</span><br />
					<span class="copyright">&copy; 2007-2008 Vamba (<a href="http://www.joomlaitalia.com" target="_blank">joomlaitalia.com</a>) <br />Joomla! component based on<br />an original work by Matthew Thomson (<a href="http://www.ignitejoomlaextensions.com" target="_blank">ignitejoomlaextensions.com</a>)<br /><br/><br/></span>
				</td>
				<td align="center" valign="middle" width="160px"><a href="http://www.joomlaitalia.com" target="_blank"><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/vlogo.png" width="160px" border="0" alt="" /></a>Joomla! Extensions
				</td>				
			</tr>
			<tr valign="top" align="left">
				<td></td>
				<td></td>
			</tr>
			<tr valign="top" align="right">
		        <td></td>
				<td align="center" style="text-align: right;">
					<div class="button-left">
						<div class="next">
							<a href="<?php echo JURI::base() ?>index.php?option=com_morfeoshow"><?php echo JText::_( 'Continue' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
	</table>
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Directory Permissions' ); ?></legend>
	<table class="adminlist">
		<thead>
			<tr>
				<th width="60%" class="title" align="center"><?php echo JText::_( 'Directory' ); ?></th>
				<th width="40%" class="title" align="center"><?php echo JText::_( 'Permissions' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td align="center">images/morfeoshow</td>
				<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.$folder) ? 
				'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
				'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
			</tr>
			<tr>
				<td align="center">components/com_morfeoshow</td>
				<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_morfeoshow'.DS.$folder) ? 
				'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
				'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
			</tr>			
		</tbody>
		</table>
		</fieldset>
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Permissions' ); ?> - <?php echo JText::_( 'File' ); ?></legend>
	<table class="adminlist">
	<thead>
		<tr>
			<th width="60%" class="title" align="center"><?php echo JText::_( 'File' ); ?></th>
			<th width="40%" class="title" align="center"><?php echo JText::_( 'Permissions' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center">administrator/components/com_morfeoshow/settings.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'administrator'.DS.'components'.DS.'com_morfeoshow'.DS.'settings.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
		<tr>
			<td align="center">components/com_morfeoshow/gallery.xml</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_morfeoshow'.DS.'gallery.xml') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
			</tr>			
		</tbody>
		</table>
		</fieldset>		
</div>
					<div class="mboxdown">
					<div class="mboxdown">
					<div class="mboxdown">
				</div>
			</div>
		</div>
	</div>
</div>