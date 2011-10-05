<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
 * FCKeditor - The text editor for Internet - http://www.fckeditor.net
 * Copyright (C) 2003-2008 Frederico Caldeira Knabben
 *
 * == BEGIN LICENSE ==
 *
 * Licensed under the terms of any of the following licenses at your
 * choice:
 *
 *  - GNU General Public License Version 2 or later (the "GPL")
 *    http://www.gnu.org/licenses/gpl.html
 *
 *  - GNU Lesser General Public License Version 2.1 or later (the "LGPL")
 *    http://www.gnu.org/licenses/lgpl.html
 *
 *  - Mozilla Public License Version 1.1 or later (the "MPL")
 *    http://www.mozilla.org/MPL/MPL-1.1.html
 *
 * == END LICENSE ==
 *
 * "About" dialog window.
-->
<?php
 require_once( '../../../../../libraries/joomla/version.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<script src="common/fck_dialog_common.js" type="text/javascript"></script>
	<script type="text/javascript">

var oEditor = window.parent.InnerDialogLoaded() ;
var FCKLang	= oEditor.FCKLang ;

window.parent.AddTab( 'About', FCKLang.DlgAboutAboutTab ) ;
window.parent.AddTab( 'License', FCKLang.DlgAboutLicenseTab ) ;
window.parent.AddTab( 'BrowserInfo', FCKLang.DlgAboutBrowserInfoTab ) ;

// Function called when a dialog tag is selected.
function OnDialogTabChange( tabCode )
{
	ShowE('divAbout', ( tabCode == 'About' ) ) ;
	ShowE('divLicense', ( tabCode == 'License' ) ) ;
	ShowE('divInfo'	, ( tabCode == 'BrowserInfo' ) ) ;
}

function SendEMail()
{
	var eMail = 'mailto:' ;
	eMail += 'fredck' ;
	eMail += '@' ;
	eMail += 'fckeditor' ;
	eMail += '.' ;
	eMail += 'net' ;

	window.location = eMail ;
}

window.onload = function()
{
	// Translate the dialog box texts.
	oEditor.FCKLanguageManager.TranslatePage(document) ;

	window.parent.SetAutoSize( true ) ;
}

	</script>
</head>
<body style="overflow: hidden">
	<div id="divAbout">
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="height: 100%">
			<tr>
				<td colspan="2">
					<img alt="" src="fck_about/JoomlaFCKlogo.png" width="155" height="75" align="left" />
					<table width="80" height="60" border="0" align="right" cellpadding="5" cellspacing="0" bgcolor="#ffffff">
						<tr>
						  <td align="center" nowrap="nowrap" style="border-right: #000000 1px solid; border-top: #000000 1px solid;
								border-left: #000000 1px solid; border-bottom: #000000 1px solid"><p><span fcklang="DlgAboutVersion">Version<br>
						  </span><b> 2.6.1<br>
						  <br>
						  </b></p>
								</td>
						</tr>
				  </table>
				</td>
			</tr>
			<tr style="height: 100%">
				<td align="center" valign="middle">
					<span style="font-size: 14px" dir="ltr">
						<b><a href="http://www.joomlafckeditor.com/index.php?option=com_content&task=view&id=91" target="_blank" title="Visit the FCKeditor web site">
							Phoenix edition</a></b> </span>
					<div style="padding-top:8px">
						<img alt="" src="fck_about/phoenix.png" width="110" height="103" />					</div>
				</td>
				<td width="9%" align="center" valign="middle" nowrap="nowrap">
					<div>
						<div style="margin-bottom:5px" dir="ltr"></div>
					</div>
			  </td>
			</tr>
			<tr>
			  <td width="80%" nowrap="nowrap">
					<span fcklang="DlgAboutInfo">For further information and support please visit - </span>&nbsp;<a href="http://www.joomlafckeditor.com"  target="_blank">www.joomlafckeditor.com</a><br />
				  Copyright WebxSolution Ltd &copy; 2005-2008  <a href="http://www.joomlafckeditor.com/joomla-license" target="_blank"><br>Creative Commons Licence.</a> </td>
				<td align="center" valign="top" width="20%">
					<a href="http://www.joomlafckeditor.com/Get%20Involved" target="_blank">Ways You Can Get Involved</a>				</td>
			</tr>
		</table>
	</div>
	<div id="divLicense" style="display: none">
			<p>
				Licensed under the terms of any of the following licenses at your
				choice:
			</p>
			<ul>
				<li style="margin-bottom:15px">
					<b>Creative Commons Licence</b> Version 2.4.4 or later (the "CC")<br />
					<a href="http://www.joomlafckeditor.com/joomla-license" target="_blank">http://www.joomlafckeditor.com/joomla-license</a>
			   </li>
			</ul>
	</div>
	<div id="divInfo" style="display: none" dir="ltr" >
		<table align="center" width="80%" border="0">
			<tr>
				<td>
					<script type="text/javascript">
<!--

<?php 
	$version = new JVersion();
	echo  "document.write( '<b>Joomla version<\/b><br />" . $version->getShortVersion() . "<br /><br />' )";
?> 
document.write( '<b>User Agent<\/b><br />' + window.navigator.userAgent + '<br /><br />' ) ;
document.write( '<b>Server<\/b><br />' + "<?php echo  $_SERVER['SERVER_SOFTWARE'] ." (" .  PHP_OS . ")"  ?>" + '<br /><br />' ) ;
document.write( '<b>Browser<\/b><br />' + window.navigator.appName + ' ' + window.navigator.appVersion + '<br /><br />' ) ;
document.write( '<b>Platform<\/b><br />' + window.navigator.platform + '<br /><br />' ) ;

var sUserLang = '?' ;

if ( window.navigator.language )
	sUserLang = window.navigator.language.toLowerCase() ;
else if ( window.navigator.userLanguage )
	sUserLang = window.navigator.userLanguage.toLowerCase() ;

document.write( '<b>User Language<\/b><br />' + sUserLang ) ;
//-->
					</script>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
