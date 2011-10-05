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


		echo '
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="middle">
							<div id="screen" align="middle">
								<a href="http://www.macromedia.com/go/getflashplayer">
									"'.JText::_( 'Get the Flash Player' ).'"</a> 
									"'. JText::_( 'to see this gallery.' ).'"
							</div>
									<script type="text/javascript">
			//<![CDATA[
									var so = new SWFObject("'.JURI::root().'components/com_morfeoshow/src/polaroid.swf", "polaroid", "'.$params["widthpl"].'", "'. $params["heightpl"].'", "8", "#'.$params["bkgnd3"].'");
			// specify the url to the xml-file, default is photos.xml
									so.addParam("wmode", "transparent");
									so.addVariable("xmlURL","'.JURI::root().'images/morfeoshow/'. $row->folder.'/xml/polaroid.xml");
									so.write("screen");
			//]]>
								</script>				
						</td>
					</tr>
				</table>
			';	