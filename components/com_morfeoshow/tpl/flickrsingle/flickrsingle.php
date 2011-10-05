<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitiongallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
error_reporting(0);
?>
<style>
#gallflickr ul {
	margin: 0px;
	padding: 0px;
	list-style-type: none;
}
#gallflickr li {
	float: left;
	margin: 10px;
}
#gallflickr li a {
}
</style>
				<?php 
				
					if ($params_morfeo['flickrkey'] == '') {
					echo JText::_( 'No Flickr Key ID present' );
					}else{
					if ($photoset_id == '') {
					echo JText::_( 'Invalid or no Photoset id present' );
					}
					else
					{ ?>
<table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td>
			<div id="gallflickr">
				<ul>
				<?php foreach ($photos['photo'] as $photo): ?>
				<li><a class="gallflickr" rel="one-big-group" href="<?php echo $f->buildPhotoURL($photo, 'medium') ?>"><img src="<?php echo $f->buildPhotoURL($photo, 'square') ?>" alt="<?php echo $photo['title'] ?>" title="<?php echo $photo['title'] ?>" /></a></li>
				<?php endforeach; ?>
				</ul>
			</div>
		</td>
	</tr>
</table>
<?php	
					}
				}					