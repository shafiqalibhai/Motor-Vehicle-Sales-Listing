<?php
// ensure this file is being included by a parent file
if( !defined( '_JEXEC' ) && !defined( '_VALID_MOS' ) ) die( 'Restricted access' );

//------------------------------------------------------------------------------
// Configuration Variables
	global $mosConfig_absolute_path,$mosConfig_live_site;
	// login to use joomlaXplorer: (true/false)
	$GLOBALS["require_login"] = false;
	
	$GLOBALS["language"] = $mosConfig_lang;
	
	// the filename of the QuiXplorer script: (you rarely need to change this)
	if($_SERVER['SERVER_PORT'] == 443 ) {
		$GLOBALS["script_name"] = "https://".$GLOBALS['__SERVER']['HTTP_HOST'].$GLOBALS['__SERVER']["PHP_SELF"];
	}
	else {
		$GLOBALS["script_name"] = "http://".$GLOBALS['__SERVER']['HTTP_HOST'].$GLOBALS['__SERVER']["PHP_SELF"];
	}
	
	// allow Zip, Tar, TGz -> Only (experimental) Zip-support
	if( function_exists("gzcompress")) {
	  	$GLOBALS["zip"] = $GLOBALS["tgz"] = true;
	}
	else {
	  	$GLOBALS["zip"] = $GLOBALS["tgz"] = false;
	}

//------------------------------------------------------------------------------
// Global User Variables (used when $require_login==false)
	
	if( strstr( $mosConfig_absolute_path, "/" )) {
		$GLOBALS["separator"] = "/";
	}
	else {
		$GLOBALS["separator"] = "\\";
	}
	  
	// the home directory for the filemanager: (use '/', not '\' or '\\', no trailing '/')
	
	// !Note! This has been changed since joomlaXplorer 1.3.0
	// and now grants access to all directories for one level ABOVE this Site
	$dir_above = substr( $mosConfig_absolute_path, 0, strrpos( $mosConfig_absolute_path, $GLOBALS["separator"] ));
	if( !@is_readable($dir_above) || !is_dir($dir_above) ) {
		$GLOBALS["home_dir"] = $mosConfig_absolute_path;
		// the url corresponding with the home directory: (no trailing '/')
		$GLOBALS["home_url"] = $mosConfig_live_site;
	}
	else {
		$GLOBALS["home_dir"] = $dir_above;
		// the url corresponding with the home directory: (no trailing '/')
		$GLOBALS["home_url"] = substr( $mosConfig_live_site, 0, strrpos($mosConfig_live_site, '/'));
	}
	
	// show hidden files in QuiXplorer: (hide files starting with '.', as in Linux/UNIX)
	$GLOBALS["show_hidden"] = true;
	
	// filenames not allowed to access: (uses PCRE regex syntax)
	$GLOBALS["no_access"] = "^\.ht";
	
	// user permissions bitfield: (1=modify, 2=password, 4=admin, add the numbers)
	$GLOBALS["permissions"] = 7;
//------------------------------------------------------------------------------
/* NOTE:
	Users can be defined by using the Admin-section,
	or in the file "config/.htusers.php".
	For more information about PCRE Regex Syntax,
	go to http://www.php.net/pcre.pattern.syntax
*/
//------------------------------------------------------------------------------
?>
