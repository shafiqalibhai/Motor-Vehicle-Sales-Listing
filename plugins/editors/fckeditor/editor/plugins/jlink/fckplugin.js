/**
* @version		$Id: fckeditor.php 1154 18-1-2008 AW
* @package		JoomlaFCK
* @copyright	Copyright (C) 2006 - 2008 WebXSolution Ltd. All rights reserved.
* @license		Creative Commons Licence
* The code for this additional work for the FCKeditor has been  been written/modified by WebxSolution Ltd.
* You may not copy or distribute the work without written consent
* from WebxSolution Ltd.
*/
FCKCommands.RegisterCommand( 'JLink',new FCKDialogCommand( 'JLink',FCKLang.dbLinkDlgTitle,FCKPlugins.Items['jlink'].Path + 'fck_JLink.html',425,500 ) ); var odbLinkItem = new FCKToolbarButton( 'JLink',FCKLang.dbLinkBtn);odbLinkItem.IconPath = FCKPlugins.Items['jlink'].Path + 'jLink.gif';FCKToolbarItems.RegisterItem( 'JLink',odbLinkItem ); var FCKdbLink = new Object();FCKdbLink.Add = function( linkname,caption ){if(linkname.substr(0,4) != "http" && linkname.substr(0,4) != "HTTP")linkname = "./"+linkname;FCK.InsertHtml("<a href='"+linkname+"'>"+caption+"</a>") ;};FCK.ContextMenu.RegisterListener({AddItems : function( menu,tag,tagName ){if(tagName == 'A' || FCKSelection.HasAncestorNode( 'A' )){menu.AddSeparator();menu.AddItem( 'JLink',FCKLang.dbLinkBtn,odbLinkItem.IconPath) ;}}});//End code 