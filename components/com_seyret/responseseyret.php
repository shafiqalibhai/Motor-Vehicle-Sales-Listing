<?php

// This file is a complementary script to remote server video support of Seyret component. 
//Seyret component calls this file and this file gives the video file list to Seyret component.


$sender=$_REQUEST['sender'];

//please enter the $responseseyretcheckitstring value that you have in your seyret_config.php file here.
$responseseyretcheckitstring="as_mustafa_lsnndhh12334_joomlaalemextraoridnarycomponents_453457785678FDDfweqwe";


if ($sender==$responseseyretcheckitstring){
$filelist="";
	if ($handle = opendir('.')) {
	   while (false !== ($file = readdir($handle))) {
	       if ($file != "." && $file != "..") {
	           $filelist=$filelist."&".$file;
	       }
	   }
	   closedir($handle);
	}
echo $filelist;
} else {
echo "Ooops, Lets stop here!";
}


?>