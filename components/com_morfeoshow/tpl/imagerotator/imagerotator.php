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
			   <table class="fototable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="middle">
							<div id="xcontainer" align="middle">
								<a href="http://www.macromedia.com/go/getflashplayer">
									"'. JText::_( 'Get the Flash Player' ).'"</a> 
									"'. JText::_( 'to see this gallery.' ).'"
							</div>	
						<script type="text/javascript">				
						var s1 = new SWFObject("' . JURI::root() .'components/com_morfeoshow/src/imagerotator.swf", "rotator", "'. $params['width'] .'","'. $params['height'] .'","7");
							s1.addParam("wmode", "transparent");
							s1.addVariable("file","'. JURI::root() .'images/morfeoshow/'. $row->folder .'/xml/imagerotator.xml");
							s1.addVariable("width","'. $params['width'] .'");
							s1.addVariable("height","'.  $params['height'] .'");
							s1.addVariable("transition","'. $trans .'");				
							s1.addVariable("shownavigation","'. $nav .'");	
							s1.addVariable("kenburns","'. $mov .'");
							s1.addVariable("rotatetime","'. $params['tempo'] .'");
							s1.addVariable("shuffle","'. $shuffle .'");							
							s1.addVariable("screencolor","0x'. $params['bkgnd'] .'");
							s1.addVariable("usefullscreen","false");
							s1.addVariable("overstretch","'. $overstretch .'");							
							s1.write("xcontainer");
							</script>
						</td>
					</tr>
				</table>

';	