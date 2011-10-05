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

?>
<style type="text/css">	
	/* hide from ie on mac \*/	
	#flashcontent {	width: <?php echo $params["widthsw"]?>px; height: <?php echo $params["heightsw"]?>px;}
	/* end hide */
	a {	color:#333333;}
	p {	width: 480px;}
</style>

<?php
 echo '
				<table border="0" cellpadding="0" cellspacing="0" width="100%" valign="top">
					<tr>
						<td style="float:middle;" valign="top">
					<div id="xflashcontent" style="float:middle;" valign="top">
						<a href="http://www.macromedia.com/go/getflashplayer">
									"'. JText::_( 'Get the Flash Player' ).'"</a> 
									"'. JText::_( 'to see this gallery.' ).'"
					</div>
								<script type="text/javascript">
								var fo = new SWFObject("'. JURI::root() . 'components/com_morfeoshow/src/viewer.swf", "viewer", "'. $params["widthsw"] .'", "'. $params["heightsw"] .'", "8", "#000000");
			
								fo.addParam("wmode", "transparent");
								fo.addVariable("xmlDataPath", "'. JURI::root() .'images/morfeoshow/'. $row->folder .'/xml/gallery.xml");
								fo.addVariable("langOpenImage", "'. JText::_( 'Open Image in New Window.' ).'");
								fo.addVariable("langAbout", "'. JText::_( 'About.' ).'");	
								fo.addVariable("preloaderColor", "0x999999");
								fo.write("xflashcontent");
								</script>
						</td>
					</tr>
				</table>
	';