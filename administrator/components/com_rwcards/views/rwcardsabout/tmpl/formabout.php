<?php 
/**
* RWCards Template for RWCards
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');?>
<style type="text/css">
table.admintable td.key
{
	background-color: #f6f6f6;
	text-align: left;
	width:100%;
	color: #666;
	font-weight: bold;
	border-bottom: 1px solid #e9e9e9;
	border-right: 1px solid #e9e9e9;
}
</style>
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'ABOUT' ) . JText::_( ' RWCards ' ) . JText::_( 'VERSION') ; ?></legend>

		<table class="admintable" width="100%">
		<tr>
			<td>
			&copy; Ralf Weber - LoadBrain<br />
			<a href="http://www.weberr.de" target="_blank">http://www.weberr.de</a><br />
			Email: <a href="mailto:ralf@weberr.de">ralf@weberr.de</a>
			<br />
<br />
			For Questions, Bugs, Features, please visit the <a href="http://www.weberr.de/index.php/forum.html" target="_blank">forum</a> or directly the <a href="http://www.weberr.de/bugtracker/" target="_blank">bugtracker system</a>.
			</td>
		<tr>
			<td class="key">History</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.12 (25.10.2008)</p>
				<p>
					<ul>
						<li>fixed a vulnerability in RWCards which regarding the report, can be exploited by malicious people to disclose sensitive information. See: http://secunia.com/advisories/32367/</li>
					</ul>
				</p>			
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.11 (08.10.2008)</p>
				<p>
					<ul>
						<li>fixed problems with path, added to all links, images Juri::base();</li>
						<li>added quotation to sql strings to fix saving when magic_quotes is not on</li>
					</ul>
				</p>			
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.10 (02.09.2008)</p>
				<p>
					<ul>
						<li>fixed bug in sending email to several receivers, so that only each one gets exactly one email</li>
					</ul>
				</p>			
			</td>
		</tr>		
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.9 (18.07.2008)</p>
				<p>
					<ul>
						<li>Fixed some problems with layout (missing divs)</li>
					</ul>
				</p>			
			</td>
		</tr>		
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.8 (24.04.2008)</p>
				<p>
					<ul>
						<li>Refixed check of formula if captcha is configured not to use</li>
					</ul>
				</p>			
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.7 (10.04.2008)</p>
				<p>
					<ul>
						<li>Added menu icons to admin interface</li>
						<li>Put Strings for menu description in xml file in CDATA blocks</li>
						<li>Fixed JavaScript for selection of image so that the first image is selected by default when creating a new card</li>
					</ul>
				</p>			
			</td>
		</tr>				
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.6 (14.02.2008)</p>
				<p>
					<ul>
						<li>Fixed check of formula if captcha is not used to work</li>
					</ul>
				</p>			
			</td>
		</tr>	
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.5 (03.01.2008)</p>
				<p>
					<ul>
						<li>Again several new adaptions on Joomla 1.5 RC4 and some bugfixes</li>
						<li>had to rename all files/dirs with "view" to "look"</li>
						<li>Fixed link in email fo watch the card</li>
					</ul>
				</p>			
			</td>
		</tr>			
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.4 (20.12.2007)</p>
				<p>
					<ul>
						<li>Adaption on Joomla 1.5 RC4</li>
					</ul>
				</p>			
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.3</p>
				<p>
					<ul>
						<li>As the location of some libs changed in Joomla 1.5 RC3, I had to adept some imports, like jimport('joomla.utilities.mail'); change to jimport('joomla.mail.mail'); </li>
					</ul>
				</p>			
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.2</p>
				<p>
					<ul>
						<li>Filenames in rwcards.xml and folders are now exactly the same concerning lower and uppercase</li>
						<li>fixed some minor bugs</li>
					</ul>
				</p>			
			</td>
		</tr>		
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.1</p>
				<p>
					<ul>
						<li>new css files added</li>
					</ul>
				</p>			
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Version 3.0.0</p>
				<p>
					<ul>
						<li>Using of Joomla 1.5 API</li>
						<li>Thumbnails are created without underscore in name.</li>
						<li>Possibility to send card to multiple receivers</li>
						<li>All JavaScripts and CSS files/functions start with rwcards so there will be no more conflicts</li>
						<li>Preview of categories and cards in animated boxes</li>
						<li>PNG-Support</li>
						<li>Captcha now works always</li>
						<li>Switched from prototype js-library to Joomlas standard mootools, no more conflicts now with other componentes/modules</li><li>Installation checks for GDLib and other needed libraries/directories</li>
					</ul>
				</p>			
			</td>
		</tr>		
	</table>
	</fieldset>
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_rwcards" />
<input type="hidden" name="task" value="" />
</form>
