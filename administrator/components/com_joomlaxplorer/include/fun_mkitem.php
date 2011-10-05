<?php
/** ensure this file is being included by a parent file */
if( !defined( '_JEXEC' ) && !defined( '_VALID_MOS' ) ) die( 'Restricted access' );
/*------------------------------------------------------------------------------
     The contents of this file are subject to the Mozilla Public License
     Version 1.1 (the "License"); you may not use this file except in
     compliance with the License. You may obtain a copy of the License at
     http://www.mozilla.org/MPL/

     Software distributed under the License is distributed on an "AS IS"
     basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
     License for the specific language governing rights and limitations
     under the License.

     The Original Code is fun_mkdir.php, released on 2003-03-31.

     The Initial Developer of the Original Code is The QuiX project.

     Alternatively, the contents of this file may be used under the terms
     of the GNU General Public License Version 2 or later (the "GPL"), in
     which case the provisions of the GPL are applicable instead of
     those above. If you wish to allow use of your version of this file only
     under the terms of the GPL and not to allow others to use
     your version of this file under the MPL, indicate your decision by
     deleting  the provisions above and replace  them with the notice and
     other provisions required by the GPL.  If you do not delete
     the provisions above, a recipient may use your version of this file
     under either the MPL or the GPL."
------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------
Author: The QuiX project
	quix@free.fr
	http://www.quix.tk
	http://quixplorer.sourceforge.net

Comment:
	QuiXplorer Version 2.3
	Make Dir/File Functions
	
	Have Fun...
------------------------------------------------------------------------------*/
//------------------------------------------------------------------------------
function make_item($dir) {		// make new directory or file
	if(($GLOBALS["permissions"]&01)!=01) show_error($GLOBALS["error_msg"]["accessfunc"]);
	
	$mkname=$GLOBALS['__POST']["mkname"];
	$mktype=$GLOBALS['__POST']["mktype"];
	$symlink_target = $GLOBALS['__POST']['symlink_target'];
	
	$mkname=basename(stripslashes($mkname));
	if($mkname=="") show_error($GLOBALS["error_msg"]["miscnoname"]);
	
	$new = get_abs_item($dir,$mkname);

	if(@$GLOBALS['jx_File']->file_exists($new)) show_error($mkname.": ".$GLOBALS["error_msg"]["itemdoesexist"]);
	
	if($mktype=="dir") {
		$ok=@$GLOBALS['jx_File']->mkdir($new, 0777);
		$err=$GLOBALS["error_msg"]["createdir"];
	} elseif( $mktype == 'file') {
		$ok=@$GLOBALS['jx_File']->mkfile($new);
		$err=$GLOBALS["error_msg"]["createfile"];
	} elseif( $mktype == 'symlink' ) {
		if( empty( $symlink_target )) {
			show_error('Please provide a valid <strong>target</strong> for the symbolic link.');
		}
		if( !file_exists($symlink_target) || !is_readable($symlink_target)) {
			show_error('The file you wanted to make a symbolic link to does not exist or is not accessible by PHP.');
		}
		$ok = symlink( $symlink_target, $new );
		$err = 'The symbolic link could not be created.';
	}
	
	if($ok===false || PEAR::isError( $ok )) {
		if( PEAR::isError( $ok ) ) $err.= $ok->getMessage();
		show_error($err);
	}
	
	header("Location: ".make_link("list",$dir,NULL));
}
//------------------------------------------------------------------------------
?>
