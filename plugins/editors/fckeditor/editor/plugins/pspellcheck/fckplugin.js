/**
* @version		$Id: fckeditor.php 1154 18-1-2008 AW
* @package		JoomlaFCK
* @copyright	Copyright (C) 2006 - 2008 WebXSolution Ltd. All rights reserved.
* @license		Creative Commons Licence
* The code for this additional work for the FCKeditor has been  been written/modified by WebxSolution Ltd.
* You may not copy or distribute the work without written consent
* from WebxSolution Ltd.
*/
var FCKSpellCheck = function(){this.Name = 'SpellCheck' ;};FCKSpellCheck.prototype.Execute = function(){var spDialog='pspellcheck/spellcheck/fck_spellerpages.html';FCKDialog.OpenDialog('FCKDialog_SpellCheck','Spell Check',FCKConfig.PluginsPath+spDialog,460,480);};FCKSpellCheck.prototype.GetState = function(){if(FCKConfig.Pspell){return FCK_TRISTATE_OFF;}; return FCK_TRISTATE_DISABLED;};FCKCommands.RegisterCommand( 'SpellCheck',new FCKSpellCheck('SpellCheck'));