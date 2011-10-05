/**
 * @version		$Id: fckeditor.php 1154 18-1-2008 andrew
 * @package		JoomlaFCK
 * @copyright	Copyright (C) 2006 - 2008 WebXSolution Ltd. All rights reserved.
 * @license		Creative Commons Licence <http://www.joomlafckeditor.com/index.php?option=com_content&view=article&id=5&Itemid=2>
 * Ths application has been written by WebxSolution Ltd.  You may not copy or distribute JoomlaFCK without written consent
 * from WebxSolution Ltd.
 */

FCKConfig.Plugins.Add( 'formatsource','en,es,fr,it,ko,nl,pt,ru,za,zh') ;
FCKConfig.Plugins.Add('stylesheet','en');
FCKConfig.Plugins.Add('jlink','en,es,fr,it,ko,nl,pt,ru,za,zh');
FCKConfig.Plugins.Add( 'istyles' ,'en',FCKConfig.BasePath);
FCKConfig.Plugins.Add('pspellcheck');


FCKConfig.ToolbarSets["Creative"] = [
	['Source','DocProps','-','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form','Checkbox','Radio','TextField','Textarea','Select','Button','HiddenField'],
	'/',
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
	['Link','JLink','Unlink','Anchor'],
	['TextColor','BGColor'],
	['Table','Rule','Smiley','SpecialChar','PageBreak'],
	 '/',
	['Style','FontFormat','FontName','FontSize'],
	['FitWindow','-','About']
] ;

FCKConfig.ToolbarSets["Advanced"] = [
	['Source','FormatSource','-','ShowBlocks','Preview'],
	['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
	['Undo','Redo','-','Find','Replace','-','SelectAll'],
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
	['istyles','TextColor','BGColor','RemoveFormat'],
	['Link','JLink','Unlink','Anchor'],
	['Image','Flash','-','Table','Templates','Rule'],
	['Stylesheet'],
	['Style'],
	['FontFormat'],
	['FontName'],
	['FontSize'],
	['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
	['Smiley','SpecialChar','-','FitWindow','-','About']
] ;

FCKConfig.ToolbarSets["Blog"] = [
	['Bold','Italic','Underline','-','OrderedList','UnorderedList'],
	['Cut','Copy','Paste','PasteText','PasteWord','-','SpellCheck'],
	 '/',
	['BGColor','RemoveFormat','-','Undo','Redo'],
	['Link','Unlink','-','About']
] ;


FCKConfig.Keystrokes = [
	[ CTRL + 65 /*A*/, true ],
	[ CTRL + 67 /*C*/, true ],
	[ CTRL + 70 /*F*/, true ],
	[ CTRL + 83 /*S*/, true ],
	[ CTRL + 84 /*T*/, true ],
	[ CTRL + 88 /*X*/, true ],
	[ CTRL + 86 /*V*/, 'Paste' ],
	[ CTRL + 45 /*INS*/, true ],
	[ SHIFT + 45 /*INS*/, 'Paste' ],
	[ CTRL + 88 /*X*/, 'Cut' ],
	[ SHIFT + 46 /*DEL*/, 'Cut' ],
	[ CTRL + 90 /*Z*/, 'Undo' ],
	[ CTRL + 89 /*Y*/, 'Redo' ],
	[ CTRL + SHIFT + 90 /*Z*/, 'Redo' ],
	[ CTRL + 76 /*L*/, 'Link' ],
	[ CTRL + 66 /*B*/, 'Bold' ],
	[ CTRL + 73 /*I*/, 'Italic' ],
	[ CTRL + 85 /*U*/, 'Underline' ],
	[ CTRL + SHIFT + 83 /*S*/, 'Save' ],
	[ CTRL + ALT + 13 /*ENTER*/, 'FitWindow' ],
	[ CTRL + SHIFT + 76 /*L*/, 'JLink' ],
	[ CTRL + 71 /*G*/, 'SpellCheck' ],
	[ CTRL + 68 /*D*/, 'FormatSource' ],
	[ CTRL + SHIFT + 73, 'istyles' ],
	[ CTRL + 69, 'Source' ]
] ;


FCKConfig.ContextMenu = ['Generic','Link','Anchor','Image','Flash','Select','Textarea','Checkbox','Radio','TextField','HiddenField','ImageButton','Button','BulletedList','NumberedList','Table','Form'] ;

FCKConfig.FontColors = '000000,993300,333300,003300,003366,000080,333399,333333,800000,FF6600,808000,808080,008080,0000FF,666699,808080,FF0000,FF9900,99CC00,339966,33CCCC,3366FF,800080,999999,FF00FF,FFCC00,FFFF00,00FF00,00FFFF,00CCFF,993366,C0C0C0,FF99CC,FFCC99,FFFF99,CCFFCC,CCFFFF,99CCFF,CC99FF,FFFFFF' ;

FCKConfig.FontNames		= 'Arial ;Courier New ;Tahoma ;Times New Roman ;Verdana' ;
FCKConfig.FontSizes		= '8;9;10;12;14;16;18;20;22;24;26;28;36;48;smaller;larger;xx-small;x-small;small;medium;large;x-large;xx-large' ;

FCKConfig.FontFormats	= 'p;div;pre;address;h1;h2;h3;h4;h5;h6' ;

// The following value defines which File Browser connector and Quick Upload 
// "uploader" to use. It is valid for the default implementaion and it is here
// just to make this configuration file cleaner. 
// It is not possible to change this value using an external file or even 
// inline when creating the editor instance. In that cases you must set the 
// values of LinkBrowserURL, ImageBrowserURL and so on.
// Custom implementations should just ignore it.

var _FileBrowserLanguage	= 'php' ;	// asp | aspx | cfm | lasso | perl | php | py
var _QuickUploadLanguage	= 'php' ;	// asp | aspx | cfm | lasso | php

//change blocker background for dialog Iframe
FCKConfig.BackgroundBlockerColor = '#000000'

//set protected tags

FCKConfig.ProtectedSource.Add( /<HR ID="SYSTEM-READMORE".*?\/>/i );

// overidden  fuctions
FCKConfig.ProtectedSource.Protect = function( html )
{
	var codeTag = this._CodeTag ;	function _Replace( protectedSource )
	{
		var index = FCKTempBin.AddElement( protectedSource ) ;	if (protectedSource.match(/<HR ID="SYSTEM-READMORE".*?\/>/i))
		{ 
				return '<hr style="color: red; background-color: red; height: 1px; border:0px;" class="system-readmore" />';
		}
		return '<!--{' + codeTag + index + '}-->' ;
	}
	
	  
	for ( var i = 0 ; i < this.RegexEntries.length ; i++ )
	{  
		
		html = html.replace( this.RegexEntries[i], _Replace ) ;
		
	}
	
	

	return html ;
}

FCKConfig.ProtectedSource.Revert = function( html, clearBin )
{
	function _Replace( m, opener, index )
	{
		var protectedValue = clearBin ? FCKTempBin.RemoveElement( index ) : FCKTempBin.Elements[ index ] ;
		// There could be protected source inside another one.
		return FCKConfig.ProtectedSource.Revert( protectedValue, clearBin ) ;
	}
	
	var regex = regex = new RegExp( "(<|&lt;)!--\\{" + this._CodeTag + "(\\d+)\\}--(>|&gt;)", "g" ) ;
		
	html =  html.replace( regex, _Replace ) ;	
    
	for( var i = 0; i < FCKTempBin.Elements.length; i++)
	{
	  	if (typeof(FCKTempBin.Elements[i]) == "string" && FCKTempBin.Elements[i].match(/<HR ID="SYSTEM-READMORE".*?\/>/i))
		{	
		    
			html = html.replace( /<hr.*?class="system-readmore".*?\/>/, FCKTempBin.Elements[i]  ,"i") ;
			break;
		}
	}
	
	return html;

}

FCK.Events.AttachEvent	( 'OnAfterSetHTML', function() 
							{ 
							    if (FCK.EditMode == FCK_EDITMODE_WYSIWYG)
								{
									FCK.EditorDocument.body.style.cssText += 'background-color:' + FCKConfig.BackgroundColor + ';' + 'background-image:none;'; 
								}
							 }
						) ;


