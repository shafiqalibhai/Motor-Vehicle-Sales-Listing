<?php
/*
 * FCKeditor - The text editor for Internet - http://www.fckeditor.net
 * Copyright (C) 2003-2007 Frederico Caldeira Knabben
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
 * Configuration file for the File Manager Connector for PHP.
 */

global $Config;

// set syatem constants
define( 'DS', DIRECTORY_SEPARATOR );

//currenrt level in diretoty structure
$currentfolderlevel = 7;

//get root folder
$rootFolder = explode(DS,dirname(__FILE__));

array_splice($rootFolder,-$currentfolderlevel);

define( '_JEXEC', 1 );

define('JPATH_BASE',implode(DS,$rootFolder));

require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );


/* Load in the configuation file */
//require_once( '../../../../../../../configuration.php' );
require_once( JPATH_CONFIGURATION	.DS.'configuration.php' );

/*load loader class */

require_once(JPATH_LIBRARIES .DS.'loader.php' );


/* Load Joomla's required classes */

jimport('joomla.base.object');
jimport('joomla.text');
jimport('joomla.filter.input');
jimport('joomla.database.database');
jimport('joomla.factory');
jimport('joomla.error.error');
jimport('joomla.environment.uri');



//get system parameters

$JConfig = new JConfig();


//get DB intstance

$database =  &  JDatabase::getInstance(array('driver'=>$JConfig->dbtype,'host'=>$JConfig->host,'user'=>$JConfig->user,'password'=>$JConfig->password,
								'database'=>$JConfig->db,'prefix'=>$JConfig->dbprefix));
								
								
//need to check if back end user has already logged in 

$expired_time = time() - ($JConfig->lifetime * 60);


$ip = md5($_SERVER['REMOTE_ADDR']);
$sql ='select ips.session_id from #__session ips '
. 'join #__session uip on uip.session_id = ips.data '
. 'where ips.session_id =\'' .$ip . '\' and uip.gid > 18 '
. 'and uip.time > ' .$expired_time;

$database->setQuery( $sql);
$ip_recorded_for_jusr = $database->loadResult();

if(isset($ip_recorded_for_jusr)) 
{
	$Config['Enabled'] = true;
}
else
{
	$Config['Enabled'] = false;
}

/* Need to access the database to get the image path */
$sql = "SELECT params FROM #__plugins WHERE name = 'Editor - JoomlaFCK'";
$database->setQuery( $sql );
$result = $database->loadResult();

preg_match('/imagePath=(.*)\n/', $result, $location, PREG_OFFSET_CAPTURE);

$imagePath = $location[1][0];

//Added for relative image URLs

preg_match('/UserRelativeFilePath=(.*)\n/', $result, $userFiletype, PREG_OFFSET_CAPTURE);

$useRelative = $userFiletype[1][0];

//unset class instances

unset($JConfig);
unset($database);


// Get base URL

$url = preg_replace('@/plugins/.*/php/@i','',JURI::root());



if($useRelative)
{
	
  	// get subfolders if joomla istall is not in the root folder
	preg_match("/^(https?:\/\/.*?\/)(.+)/i",$url, $matches);
	$url =  (count($matches) > 0) ?  '/' . $matches[2] : '';
   
}



// Path to user files relative to the document root.


$Config['UserFilesPath'] = $url .  (preg_match("@^/.*@",$imagePath) ?  "" : "/")  . $imagePath; 


// Fill the following value it you prefer to specify the absolute path for the
// user files directory. Useful if you are using a virtual directory, symbolic
// link or alias. Examples: 'C:\\MySite\\userfiles\\' or '/root/mysite/userfiles/'.
// Attention: The above 'UserFilesPath' must point to the same directory.


$Config['UserFilesAbsolutePath'] = JPATH_SITE  .  (preg_match("@^/.*@",$imagePath) ?  "" : "/")  . $imagePath;

// Due to security issues with Apache modules, it is recommended to leave the
// following setting enabled.
$Config['ForceSingleExtension'] = true ;

// Perform additional checks for image files
// if set to true, validate image size (using getimagesize)
$Config['SecureImageUploads'] = true;

// What the user can do with this connector
$Config['ConfigAllowedCommands'] = array('QuickUpload', 'FileUpload', 'GetFolders', 'GetFoldersAndFiles', 'CreateFolder') ;

// Allowed Resource Types
$Config['ConfigAllowedTypes'] = array('File', 'Image', 'Flash', 'Media') ;

// For security, HTML is allowed in the first Kb of data for files having the
// following extensions only.
$Config['HtmlExtensions'] = array("html", "htm", "xml", "xsd", "txt", "js") ;

/*
	Configuration settings for each Resource Type

	- AllowedExtensions: the possible extensions that can be allowed. 
		If it is empty then any file type can be uploaded.
	- DeniedExtensions: The extensions that won't be allowed. 
		If it is empty then no restrictions are done here.

	For a file to be uploaded it has to fulfill both the AllowedExtensions
	and DeniedExtensions (that's it: not being denied) conditions.

	- FileTypesPath: the virtual folder relative to the document root where
		these resources will be located. 
		Attention: It must start and end with a slash: '/'

	- FileTypesAbsolutePath: the physical path to the above folder. It must be
		an absolute path. 
		If it's an empty string then it will be autocalculated.
		Useful if you are using a virtual directory, symbolic link or alias. 
		Examples: 'C:\\MySite\\userfiles\\' or '/root/mysite/userfiles/'.
		Attention: The above 'FileTypesPath' must point to the same directory.
		Attention: It must end with a slash: '/'

	 - QuickUploadPath: the virtual folder relative to the document root where
		these resources will be uploaded using the Upload tab in the resources 
		dialogs.
		Attention: It must start and end with a slash: '/'

	 - QuickUploadAbsolutePath: the physical path to the above folder. It must be
		an absolute path. 
		If it's an empty string then it will be autocalculated.
		Useful if you are using a virtual directory, symbolic link or alias. 
		Examples: 'C:\\MySite\\userfiles\\' or '/root/mysite/userfiles/'.
		Attention: The above 'QuickUploadPath' must point to the same directory.
		Attention: It must end with a slash: '/'

	 	NOTE: by default, QuickUploadPath and QuickUploadAbsolutePath point to 
	 	"userfiles" directory to maintain backwards compatibility with older versions of FCKeditor. 
	 	This is fine, but you in some cases you will be not able to browse uploaded files using file browser.
	 	Example: if you click on "image button", select "Upload" tab and send image 
	 	to the server, image will appear in FCKeditor correctly, but because it is placed 
	 	directly in /userfiles/ directory, you'll be not able to see it in built-in file browser.
	 	The more expected behaviour would be to send images directly to "image" subfolder.
	 	To achieve that, simply change
			$Config['QuickUploadPath']['Image']			= $Config['UserFilesPath'] ;
			$Config['QuickUploadAbsolutePath']['Image']	= $Config['UserFilesAbsolutePath'] ;
		into:	
			$Config['QuickUploadPath']['Image']			= $Config['FileTypesPath']['Image'] ;
			$Config['QuickUploadAbsolutePath']['Image'] 	= $Config['FileTypesAbsolutePath']['Image'] ;			
		
*/

$Config['AllowedExtensions']['File']	= array('7z', 'aiff', 'asf', 'avi', 'bmp', 'csv', 'doc', 'fla', 'flv', 'gif', 'gz', 'gzip', 'jpeg', 'jpg', 'mid', 'mov', 'mp3', 'mp4', 'mpc', 'mpeg', 'mpg', 'ods', 'odt', 'pdf', 'png', 'ppt', 'pxd', 'qt', 'ram', 'rar', 'rm', 'rmi', 'rmvb', 'rtf', 'sdc', 'sitd', 'swf', 'sxc', 'sxw', 'tar', 'tgz', 'tif', 'tiff', 'txt', 'vsd', 'wav', 'wma', 'wmv', 'xls', 'xml', 'zip') ;
$Config['DeniedExtensions']['File']		= array() ;
$Config['FileTypesPath']['File']		= $Config['UserFilesPath'] . 'file/' ;
$Config['FileTypesAbsolutePath']['File']= ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'].'file/' ;
$Config['QuickUploadPath']['File']		= $Config['UserFilesPath'] ;
$Config['QuickUploadAbsolutePath']['File']= $Config['UserFilesAbsolutePath'] ;

$Config['AllowedExtensions']['Image']	= array('bmp','gif','jpeg','jpg','png') ;
$Config['DeniedExtensions']['Image']	= array() ;
$Config['FileTypesPath']['Image']		= $Config['UserFilesPath'] . '' ;
$Config['FileTypesAbsolutePath']['Image']= ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'].'' ;
$Config['QuickUploadPath']['Image']		= $Config['UserFilesPath'] ;
$Config['QuickUploadAbsolutePath']['Image']= $Config['UserFilesAbsolutePath'] ;

$Config['AllowedExtensions']['Flash']	= array('swf','flv') ;
$Config['DeniedExtensions']['Flash']	= array() ;
$Config['FileTypesPath']['Flash']		= $Config['UserFilesPath'] . 'flash/' ;
$Config['FileTypesAbsolutePath']['Flash']= ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'].'flash/' ;
$Config['QuickUploadPath']['Flash']		= $Config['UserFilesPath'] ;
$Config['QuickUploadAbsolutePath']['Flash']= $Config['UserFilesAbsolutePath'] ;

$Config['AllowedExtensions']['Media']	= array('aiff', 'asf', 'avi', 'bmp', 'fla', 'flv', 'gif', 'jpeg', 'jpg', 'mid', 'mov', 'mp3', 'mp4', 'mpc', 'mpeg', 'mpg', 'png', 'qt', 'ram', 'rm', 'rmi', 'rmvb', 'swf', 'tif', 'tiff', 'wav', 'wma', 'wmv') ;
$Config['DeniedExtensions']['Media']	= array() ;
$Config['FileTypesPath']['Media']		= $Config['UserFilesPath'] . 'media/' ;
$Config['FileTypesAbsolutePath']['Media']= ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'].'media/' ;
$Config['QuickUploadPath']['Media']		= $Config['UserFilesPath'] ;
$Config['QuickUploadAbsolutePath']['Media']= $Config['UserFilesAbsolutePath'] ;

?>
