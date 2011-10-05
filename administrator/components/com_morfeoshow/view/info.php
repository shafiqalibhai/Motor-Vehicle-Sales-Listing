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
	<div id="jb">
		<div id="element-box">
			<div class="t">
				<div class="t">
					<div class="t">
				</div>
			</div>
		</div>
	<div class="m">
		<table width="90%" border="0" cellpadding="0" cellspacing="0">
			<tr valign="top" align="left">
				<td align="center" width="250px" valign="middle"><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/logo.png" border="0" alt="" />
				</td>
				<td>
					<span class="componentname">Welcome in MorfeoShow</span> <br />
					<span class="componentdesc">Easy Photo Gallery System for Joomla! 1.5</span> <br />
					<span class="componentdate">07-09-2008 release 1.2.0</span><br />
					<span class="copyright">&copy; 2007-2008 Vamba (<a href="http://www.joomlaitalia.com" target="_blank">joomlaitalia.com</a>) <br />Based on an original work by Matthew Thomson (<a href="http://www.ignitejoomlaextensions.com" target="_blank">ignitejoomlaextensions.com</a>)<br /><br/><br/></span>
				<td align="center" valign="middle" width="160px"><a href="http://www.joomlaitalia.com" target="_blank"><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/vlogo.png" width="160px" border="0" alt="" /></a>Joomla! Extensions
				</td>						
				</td>
			</tr>
			<tr valign="top" align="left">
				<td></td>
				<td></td>
			</tr>
			<tr valign="top" align="right">
		        <td></td>
				<td align="center" style="text-align: right;">
				</td>
			</tr>
	</table>
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Help' );?></legend>
	<table class="adminlist">
	<tr>
	<td>
	<h2>What should I do?</h2>
	<h3>Installation</h3>
	<ol>
	<li><b>Install Component</b> - Extensions>Install/Uninstall</li>
	<li><b>Download</b> and <b>Install Plugin</b> - Extensions>Install/Uninstall</li>
	<li><b>Enable Plugin</b> - Plugin Manager - Content section</li>
	</ol>
	<h3>Configuration</h3>
	<ol>
	<li>Components>MorfeoShow>Configuration</li>
	</ol>
	<h2>Management - Creating A Gallery</h2>
	<b>You can create Four types of galleries:</b>
	<ol>
	<li> Classic (Standard Interface)</li>
	<li> Flash (Flash Interface)</li>
	<li> Maps (Google Maps Interface)</li>
	<li> External sources (Picasa or Flickr)</li>
	</ol>
	<h2>To create a gallery go to:</h2>
	<ul>
	<li>
	Components>MorfeoShow>Galleries And click 'New'.
	</li>
	<li>
	After configuring your gallery, you can then click the 'Upload' icon and upload a single file or multiple files. 
	</li>
	</ul>
	<h2>Note:</h2> 
	From version 1.1.0 you can add multiple images to a gallery from a folder on your server. To access these images you must first upload the images to your server with a FTP client to:<br />
<b>components/com_morfeoshow/MYPHOTO</b><br />
The uploading function is not available in gallery types such as Flickr or Google Maps.
The default maximum number of images allowed in each gallery is set to 50 images.

	<h3>Creating Menu Links</h3>
You can create menu links to either the individual galleries or to the album containing all your galleries.<br /> 
To link to an indivudual gallery, after creating the gallery click on the 'Menu Item' icon next to it's name.<br />
To link to a list of all your galleries, go to:<br />
<b>Menus>Main Menu>New>MorfeoShow</b>

	<h3>Other features</h3>
	<ol>
    <li> Several visual display parameters to choose from including 'Classic' and 'Flash'. 	</li>
    <li> Short and full descriptions can be added to each gallery and set to display or not.	</li>
    <li> Additional images can be inserted in the full description.	</li>
    <li> Galleries can be edited after being created.	</li>
    <li> Folders' write permissions are displayed in the backend when gallery folders are created or edited.	</li></ol> 	
	</td>
	</tr>	
	</table>
	</fieldset>			
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Credits' ); ?></legend>
	<table class="adminlist">
	<tr>
	<td>
	<b>Thanks to:</b>
	<ul>
	<li><b>Matthew Thomson</b> This component is based on his component <b>ingnitegallery</b> please take time to visit his web site <a href="http://www.ignitejoomlaextensions.com" target="blank">www.ignitejoomlaextensions.com</a> and use his component </li>
	<li><b>Dirceu Veiga</b> for his fantastic icon designs <a href="http://dirceuveiga.com.br/eg/" target='blank'>dirceuveiga.com.br/eg</a></li>
	<li><b>Jeroen Wijering</b> Image Rotator which the flash gallery is based on <a href="http://www.jeroenwijering.com/?item=JW_Image_Rotator" target='blank'>jw Image Rotator</a></li>
	<li><b>Michael J. I. Jackson</b> for his fantastic <a href="http://mjijackson.com/shadowbox" target='blank'>Shadowbox</a></li>
	<li><b>No3dfx</b> for wonderful <a href="http://www.no3dfx.com/polaroid/" target='blank'>Polaroid Gallery</a></li>
	<li><b>Multiprof</b> for Picasa integration system <a href="http://www.multiprof.nl" target='blank'>Multiprof</a></li>	
	<li><b>Airtightinteractive</b> for <a href="http://www.airtightinteractive.com/simpleviewer/" target='blank'>SimpleViewer</a> SimpleViewer &copy; 2008 Airtight Inc. All rights reserved.</li>		
	<li><b>Deziner Folio</b> for <a href="http://www.dezinerfolio.com" target='blank'>DF xmlgallery</a> All the Credit to <a href="http://tonyyoo.com/" target='blank'><b>Tony Yoo</b></a> The author of this Gallery.</li>	
	<li>Thanks to <b>AlexRed</b> for allowing me to use some ideas contained in his Ozio Gallery.</li>
	<li>Thanks to all testers of <a href="http://www.joomlaitalia.com" target='blank'>www.joomlaitalia.com</a></li>
	<li>Thanks to <b>Luscarpa</b> <a href="http://www.joomitaly.com" target='blank'>www.joomitaly.com</a> &amp; <a href="http://www.siloos.it" target='blank'>www.siloos.it</a></li>
	<li>Thanks to <b>Joomlafrance.org</b> <a href="http://www.joomlafrance.org" target='blank'>www.joomlafrance.org</a> For French translations lang files</li>
	<li>Thanks to <b>Comunidadjoomla.org</b> <a href="http://www.comunidadjoomla.org/" target='blank'>www.comunidadjoomla.org</a> For Spanish translations lang files</li>		
	<li>Thanks to Caisebas, Leonel Canton, Tim, Joerg, Guilloman, EnglandAndy, Rw1, Drpeer and all friends of international support forum (Sorry if I forget a few names and nicks) for supporting and testing.</li>	
	<li>Thanks to <b>Robin Wyllie</b> my personal mentor and english tutor.</li>
	<li>.......and finally to all Joomla! supporters</li>
	<li>All Icons on MorfeoShow Joomla! Component are FREEWARE and property of Fasticon.com!<br /><a href="http://www.fasticon.com" target='blank'><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/ban.gif" border="0" alt="" /></a></li>
	<li>Picasa Gallery is property of picasa.com!<br /><a href="http://www.picasa.com" target='blank'><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/logopicasa.png" border="0" alt="" /></a></li>
	<li>Flickr Gallery is property of flickr.com!<br /><a href="http://www.flickr.com" target='blank'><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/logoflickr.png" border="0" alt="" /></a></li>
	<li>Google Maps are property of google.com!<br /><a href="http://www.google.com" target='blank'><img src="<?php echo JURI::base() ?>components/com_morfeoshow/images/logogoogle.png" border="0" alt="" /></a></li>	
	<ul>
	</td>
	</tr>	
	</table>
	</fieldset>	
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Changelog' ); ?></legend>
	<table class="adminlist">
	<tr>
	<td>04-09-2008 - Release 1.2.0
	<ol>
	<li>+ Added Classic Gallery parameters for Colums and template
	</li>		
	<li>+ Added Max Size Upload configuration set
	</li>		
	<li># Fixed upload filename with space and special chars (not allowed to multiupload file with special chars)
	</li>	
	<li># Fixed some layout issues and addes page class suffix param support
	</li>	
	<li>+ Added Gallery Picasa for singles album
	</li>		
	<li>+ Added Flickr Gallery  for singles album
	</li>	
	<li>+ Rewritten Classic gallery now support Shadowbox and Fancybox.
	</li>	
	<li>+ Changhed layout System and create templates for all gallery formats 
	</li>
	<li>+ Changhed another time Polaroid swf file for issue with IE
	</li>
	<li>+ Added Spanish Language thanks to Leonel Canton
	</li>	
	<li>+ Added German Language thanks to Tim and Joerg
	</li>	
	<li>- Removed fildset and legend from galleries
	</li>	
	<li>+ Content Plugin v. 1.0.1 released
	</li>
	<li># Fixed problem in upload
	</li>	
	<li>+ Added filter for gallery list in backend
	</li>	
	<li># Fixed some little issues with css style hardcoded
	</li>	
	<li># Fixed some little code issues and visual problem
	</li>	
	<li>+ Addesd some new setting in configuration like css style for classic galleries, simpleview settings etc.
	</li>
	<li>+ Changes in the frontend files structure. Created templates and esources for js
	</li>
	<li># Fixed Fatal error: Call to undefined function: getdate() - Was one of my fault
	</li>
	<li># Fixed Fatal Gmaps problem with IE browser
	</li>		
	<tr>
	<td>14-08-2008 - Release 1.1.0
	<ol>
	<li>+ Added Function Upload from Folder for multiple images add
	</li>		
	<li>+ Added Google Ajax API support
	</li>	
	<li>+ Rewritten Shadowbox gallery system for title and description support. It's possible to show hide tiltle in configuration
	</li>	
	<li>+ Updated Shadowbox to relese 2 and updated some others Js too 
	</li>	
	<li>+ Added new db tables row for picasa gallery system
	</li>	
	<li># Fixed problem with web site url starting with or without www
	</li>	
	<li>+ Content Plugin v. 0.0.1 released
	</li>
	<li># Fixed problem when we try to assign menu items to another template
	</li>	
	<li>+ Added System to choose menu group for single menu item gallery
	</li>	
	<li>+ Added Picasa Album support
	</li>
	<li># Fixed some little issues with css style hardcoded
	</li>	
	<li># Fixed some little code issues and visual problem
	</li>	
	<li>- Removed iframe for List Flash format, now is integrate in frontend without it.
	</li>
	<li>+ In admin gallery list 2 new row added. One for images list access and editing, and one for plugin code
	</li>	
	<li>+ Split photo uploading from list of images. 1st steps for multi images uploading feature goal
	</li>
	<li>+ Changes in the admin files structure. Some layout changed but no ne features added
	</li>
	<li>+ Pagination in classic galleries list added
	</li>		
	<li># Fixed Fatal error: Call to undefined function: getdate() - Was one of my fault
	</li>
	</ol>
	</td>
	</tr>
	<tr>
	<td>27-07-2008 - Release 1.0.0 - Starting release
	</td>	
	</tr>
	</table>
	</fieldset>
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'To Do' ); ?></legend>
	<table class="adminlist">
	<tr>
	<td>
	<ol>
	<li>Galleries Rating/Vote System</li>
	<li>Galleries Comments/Reviews System</li>
	<li>Galleries Categories System</li>	
	</ol>
	</td>
	</tr>	
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
