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

function uploadImage($option, $task, $folder, $id)
{
	global $mainframe, $params_morfeo;
	require_once(JPATH_COMPONENT.DS.'settings.php');
	$errors = 0;

	$db =& JFactory::getDBO();
	$query = "SELECT id FROM #__morfeoshow_img WHERE gallery_id =" .(int) $id;
	$db->setQuery($query);
	$rows = $db->loadObjectList();
	$num_photos = count($rows);
	if($num_photos > $params_morfeo["max_img"])
	{
		JError::raise(2, 500, JText::_( 'Maximum amount of photos per album reached' ), '', false);
		$errors ++;
	}
	
	if($errors == 0)
	{
	
		//START IMAGE UPLOAD PART
		
		//the input field on the upload form
		$fieldName = 'upload_image';
		//where the file will go
		$dir = JPATH_SITE.'/images/morfeoshow/temp_upload/';
		$accept = 'image/jpeg,image/pjpeg,image/png,image/gif';
		//set max upload size to 2 000 000 bytes (2 Megabytes)
		$max_upload_size = $params_morfeo['max_upload_size'];
	
		//upload the image using this function in: upload.php
		$array = custom_uploadFile($fieldName, $dir, $accept, $max_upload_size);
		
		//START RESIZE PART
		//$array[0] is the filename returned from the upload class
		$img_size = getimagesize($dir.$array[0]);
		
		$thumb_dir 	= JPATH_SITE.'/images/morfeoshow/'. $folder . '/thumbs/';
		// Instantiate image class used for resizing and cropping thumb - inc/crop.php
		// the thumb is cropped because the swf displays square thumbs
		$cropthumb = new cropImage();
		
		// Create thumbnail: src dir, dst dir, width, height, img quality (0=best, 100 worst)
		$thumb_image = $cropthumb->crop($dir.$array[0], $thumb_dir.$array[0], $params_morfeo["minithumbw"], $params_morfeo["minithumbh"], 15);
		
		if (!$thumb_image === true) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}
		
		//Create Mini Pic part
		$mini_dir = JPATH_SITE.'/images/morfeoshow/'. $folder . '/mini/';
		//instantiate a new class from inc/resize.php
		$image = new resizeImage();
		//make a resized image(src file, dest file, max width, max height, img quality (0=best, 100 worst)
		$mini_image = $image->resize($dir.$array[0], $mini_dir.$array[0], $params_morfeo["minimainw"], $params_morfeo["minimainh"], 15);
		//print_r($big_image);
		//exit;
		if ($mini_image == false) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}		
		
		
		//Create Full Pic part
		$big_dir = JPATH_SITE.'/images/morfeoshow/'. $folder . '/big/';
		//instantiate a new class from inc/resize.php
		$image = new resizeImage();
		//make a resized image(src file, dest file, max width, max height, img quality (0=best, 100 worst)
		$big_image = $image->resize($dir.$array[0], $big_dir.$array[0], $params_morfeo["imagesw"], $params_morfeo["imagesh"], 15);
		//print_r($big_image);
		//exit;
		if ($big_image == false) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}
			
		$row =& JTable::getInstance('morfeoshow_img', 'Table');
		
		//WRITE TO DATABASE PART
		//put a couple of values into the post array so I can store to database
		$_POST['width'] = $big_image['width'];
		$_POST['height'] = $big_image['height'];
		$_POST['gallery_id'] = $id;
		$_POST['filename'] = $array[0];
		
		//bind matches up post names with db names
		if (!$row->bind(JRequest::get('post')))
		{
			echo "<script> alert('".$row->getError()."');
			window.history.go(-1); </script>\n";
			exit();
		}
		
		//description is in html and bind strips this, so this fixes it
		$row->title = JRequest::getVar( 'title', '', 'post',
		'string', JREQUEST_ALLOWRAW );
		$row->html = JRequest::getVar( 'html', '', 'post',
		'string', JREQUEST_ALLOWRAW );
		
		if (!$row->store())
		{
			echo "<script> alert('".$row->getError()."');
			window.history.go(-1); </script>\n";
			exit();
		}
		
		//write the xml file with the new image details
		//this function is in inc/xml
		write_xml($id, $folder);
		
	}
	
	
	$message = '';
	if ($errors == 0)
	{
		$message = JText::_( 'Image saved successfully' );
	}
		
	$mainframe->redirect( 'index.php?option=' . $option . '&task=manage_photos&cid[]=' . $id, $message );
}


// Funzione upload
function custom_uploadFile($fieldName, $dir, $accept, $max_upload_size, $overwrite=0) 
{
	require_once(JPATH_COMPONENT.DS.'settings.php');
	$file_tmp 		= $_FILES[$fieldName]['tmp_name'];
	$file_name 		= $_FILES[$fieldName]['name'];
	$file_size 		= $_FILES[$fieldName]['size'];
	$file_type 		= $_FILES[$fieldName]['type'];
	$file_error 	= $_FILES[$fieldName]['error'];

	// check for generic errors first		  
	if ($file_error > 0) 
	{
		echo "<script> alert('";
		switch ($file_error) 
		{
		  case 1:  echo JText::_( 'ERROR: File exceeded PHP maximum upload size' );  break;
		  case 2:  echo JText::_( 'ERROR: File exceeded PHP maximum file size' );  break;
		  case 3:  echo JText::_( 'ERROR: File only partially uploaded' );  break;
		  case 4:  echo JText::_( 'ERROR: No file uploaded' );  break;
		}
		echo "'); window.history.go(-1); </script>\n";
		exit;
	}
	
	// check custom max_upload_size passed into the function
	if ($max_upload_size < $file_size) 
	{
		echo "<script> alert('";
		echo JText::_( 'ERROR: File exceeded maximum upload size' );
		echo ' max_upload_size: '.$max_upload_size.' | file_size: '.$file_size;
		echo "'); window.history.go(-1); </script>\n";
		exit;
	}
	
	//check file type is valid
	$valid_file_types = explode(",", $accept);
	$type_ok = 0;
	
	foreach ($valid_file_types as $type) 
	{
		if ($file_type == $type) 
		{
			$type_ok = 1;
		}
	}
	
	if ($type_ok == 0) 
	{
		echo "<script> alert('";
		echo JText::_( 'ERROR: File type not valid' );
		echo "'); window.history.go(-1); </script>\n";
		exit;
	}
	
	// CHECK FOR SPECIAL CHARACTERS
	$special_chars = array('á','ä','à','é','ë','è','í','ï','ì','ó','ö','ò','ú','ü','ù','�?','Ä','À','É','Ë','È','�?','�?','Ì','Ó','Ö','Ò','Ú','Ü','Ù','ñ','Ñ','?','¿','!','¡','(',')','[',']',',',' ');
	foreach ($special_chars as $special_char) 
	{
		$file_name = str_replace($special_char, '', $file_name);
	}
	
	if (empty($overwrite)) 
	{
	  $check_if_file_exists = file_exists($dir.$file_name);
	  if ($check_if_file_exists === true) 
	  {
		// split file name into name and extension
		$split_point = strrpos($file_name, '.');
		$file_n = substr($file_name, 0, $split_point);
		$file_ext = substr($file_name, $split_point);
		$i=0;
		while (true === file_exists($dir.$file_n.$i.$file_ext)) {
			$i++;
		}
		$file_name = $file_n.$i.$file_ext;
	  }
	}
	
	// put the file where we'd like it
	$path = $dir.$file_name;
	
	// is_uploaded_file and move_uploaded_file
	if (is_uploaded_file($file_tmp)) 
	{
		if (!move_uploaded_file($file_tmp, $path)) 
		{
			echo "<script> alert('";
			echo JText::_( 'ERROR: Could not move file to destination directory' );
			echo "'); window.history.go(-1); </script>\n";
			exit;
		}
	} 
	else 
	{
		echo "<script> alert('";
		echo JText::_( 'ERROR: Possible file upload attack. Filename:' ).' '.$file_name;
		echo "'); window.history.go(-1); </script>\n";
		exit;
	}
	$array = array($file_name, $file_size, $file_type);
	return $array;
}
        global $params_morfeo;
		include_once( JPATH_COMPONENT.DS.'settings.php' );
		$forcedwidth	= $params_morfeo["resizew"];	
		$forcedheight	= $params_morfeo["resizeh"];

		
class resizeImage 
{
function resize($sourcefile, $destfile, $forcedwidth, $forcedheight, $imgcomp=0)  
	{
		// set the quality, 0 best quality | 100 worst quality
		$img_quality = 100-$imgcomp;
		if(file_exists($sourcefile)) 
		{
			$image_size = getimagesize($sourcefile);
			$src_width = $image_size[0];
			$src_height = $image_size[1];
			$src_type = $image_size[2]; // 1 = GIF, 2 = JPG, 3 = PNG
			
			if(($src_width < $forcedwidth) && ($src_height < $forcedheight))
			{
				$new_width = $src_width;
				$new_height = $src_height;
			}
			
			else if(($src_width/$forcedwidth)>=($src_height/$forcedheight)) 
			{
				$new_width = $forcedwidth;
				$new_height = ($forcedwidth/$src_width)*$src_height;
			}
			//otherwise do as commented above but swap width for height
			else 
			{
				$new_height = $forcedheight;
				$new_width = ($new_height/$src_height)*$src_width;   
			}
			
			//create an image resource from the source file, this function will return $a, which
			//will become $img_src
			$img_src = $this->img_create_from_file($sourcefile, $src_type);
			
			//create an image resource for the destination file, use the new width and height
			//caculated above, returns $a, which will become $img_dst
			$img_dst = $this->img_create($new_width, $new_height, $src_type);
			
			imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $new_width, $new_height, $src_width, $src_height);
			//destination img resource, source file path, img composition, file type
			//this function will put the dest image resouce into the dest file path
			$this->img_output($img_dst, $destfile, $img_quality, $src_type);
			
			imagedestroy($img_dst);
			
			$new_size_array = array();
			$new_size_array['width'] = $new_width;
			$new_size_array['height'] = $new_height;
			return $new_size_array;
		}
		else
		return false;
	}
	
	function img_create_from_file($sourcefile, $src_type) 
	{
		ini_set('memory_limit', '32M');
		switch ($src_type) 
		{
			case 1: // for gif
				$a = imagecreatefromgif($sourcefile);
				return $a;
			case 2: // for jpeg
				$a = imagecreatefromjpeg($sourcefile);
				return $a;
			case 3: // for png
				$a = imagecreatefrompng($sourcefile);
				return $a;
		}	
	}
	
	function img_create($new_width, $new_height, $src_type) 
	{
		switch ($src_type) 
		{
			case 1: // for gif
				$a = imagecreate($new_width, $new_height);
				return $a;
			case (2 || 3): // for jpeg and png
				$a = imagecreatetruecolor($new_width, $new_height);
				return $a;
		}		
	}
	
	function img_output($img_dst, $destfile, $img_quality, $src_type) 
	{
		switch ($src_type) 
		{
			case 1: // for gif
				imagegif($img_dst, $destfile); // for gif
				break;
			case 2: // for jpeg
				imagejpeg($img_dst, $destfile, $img_quality); // for jpeg
				break;
			case 3: // for png
				$img_quality /= 10;
				if($img_quality > 9) $img_quality = 9;
				imagepng($img_dst, $destfile, $img_quality); // for png
				break;
		}		
	}
  
}
	global $params_morfeo;
	include_once( JPATH_COMPONENT.DS.'settings.php' );
	$forcedwidth1	= $params_morfeo["cropw"];	
	$forcedheight2	= $params_morfeo["croph"];	

class cropImage 
{
	
	function crop($sourcefile, $destfile, $forcedwidth1, $forcedheight1, $imgcomp=0)  
	{

		// set the quality, 0 best quality | 100 worst quality
		$img_quality = 100-$imgcomp;

		if(file_exists($sourcefile)) 
		{
			$image_size = getimagesize($sourcefile);
			$src_width = $image_size[0];
			$src_height = $image_size[1];
			$src_type = $image_size[2]; // 1 = GIF, 2 = JPG, 3 = PNG
			
			//if the width is smaller make the width forced and the height the same ratio
			if($src_width <= $src_height) 
			{
				$new_width = $forcedwidth1;
				$new_height = ($forcedwidth1/$src_width)*$src_height;
			}
			//if the height is smaller make the height forced and the width the same ratio
			else 
			{
				$new_height = $forcedheight1;
				$new_width = ($new_height/$src_height)*$src_width;   
			}
			
			//create an image resource from the source file, this function will return $a, which
			//will become $img_src
			$img_src = $this->img_create_from_file($sourcefile, $src_type);
			
			//create an image resource for the destination file, use the new width and height
			//caculated above, returns $a, which will become $img_dst
			$img_dst = $this->img_create($new_width, $new_height, $src_type);
			
			//imagecopyresampled will stretch the old image to fit the new. because the ratio of
			// (newwidth/oldwidth * old height = new height) was used above it will look the same
			//0,0,0,0 are the x/y of source and destination files, 0,0 (top left) is wanted for both
			//now img_dst has the new image in the resource
			imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $new_width, $new_height, $src_width, $src_height);
			
			//create an image resource for the cropped image, with the forced width
			//and height that were passed to this function
			$crop_dst = $this->img_create($forcedwidth1, $forcedheight1, $src_type);
			
			//put the shrinkin img into the cropped resource.
			imagecopy($crop_dst, $img_dst, 0, 0, 0, 0, $src_width, $src_height);
			
			//this function will put the dest image resouce into the dest file path
			$this->img_output($crop_dst, $destfile, $img_quality, $src_type);
			
			imagedestroy($img_dst);
			imagedestroy($crop_dst);
			return true;
		}
		else
		return false;
	}
	
	function img_create_from_file($sourcefile, $src_type) 
	{
		ini_set('memory_limit', '32M');
		switch ($src_type) 
		{
			case 1: // for gif
				$a = imagecreatefromgif($sourcefile);
				return $a;
			case 2: // for jpeg
				$a = imagecreatefromjpeg($sourcefile);
				return $a;
			case 3: // for png
				$a = imagecreatefrompng($sourcefile);
				return $a;
		}	
	}
	
	function img_create($new_width, $new_height, $src_type) 
	{
		switch ($src_type) 
		{
			case 1: // for gif
				$a = imagecreate($new_width, $new_height);
				return $a;
			case (2 || 3): // for jpeg and png
				$a = imagecreatetruecolor($new_width, $new_height);
				return $a;
		}		
	}
	
	function img_output($img_dst, $destfile, $img_quality, $src_type) 
	{
		switch ($src_type) 
		{
			case 1: // for gif
				imagegif($img_dst, $destfile); // for gif
				break;
			case 2: // for jpeg
				imagejpeg($img_dst, $destfile, $img_quality); // for jpeg
				break;
			case 3: // for png
				$img_quality /= 10;
				if($img_quality > 9) $img_quality = 9;
				imagepng($img_dst, $destfile, $img_quality); // for png
				break;
		}		
	} 
}

//test

function uploadImage2($option, $task, $folder, $id)
{
	global $mainframe, $params_morfeo;
	require_once(JPATH_COMPONENT.DS.'settings.php');
	$errors 	= 0;
	$images    	= JRequest::getVar('images', '');
	$db 		=& JFactory::getDBO();
	$query 		= "SELECT id FROM #__morfeoshow_img WHERE gallery_id =" .(int) $id;
	$db->setQuery($query);
	$rows 		= $db->loadObjectList();
	$num_photos = count($rows);
	if($num_photos > $params_morfeo["max_img"])
	{
		JError::raise(2, 500, JText::_( 'Maximum amount of photos per album reached' ), '', false);
		$errors ++;
	}
	
	if($errors == 0)
	{
	
		//START IMAGE UPLOAD PART
		foreach ($images as $fieldName) {
		$dir = JPATH_SITE.'/components/com_morfeoshow/myphoto/';
		$accept = 'image/jpeg,image/pjpeg,image/png,image/gif';
		//set max upload size to 2 000 000 bytes (2 Megabytes)
		$max_upload_size = $params_morfeo['max_upload_size'];
		$img_size = getimagesize($dir.$fieldName);
		
		$taglia 			= array('(',')','[',']',' ');
		//Create thumb		
		$thumb_dir 		= JPATH_SITE.'/images/morfeoshow/'. $folder . '/thumbs/';
		$cropthumb 		= new cropImage();
		$thumb_image 	= $cropthumb->crop($dir.$fieldName, $thumb_dir.str_replace($taglia,'', $fieldName), $params_morfeo["minithumbw"], $params_morfeo["minithumbh"], 15);
		
		if (!$thumb_image === true) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}
		
		//Create Mini Pic part
		$mini_dir 	= JPATH_SITE.'/images/morfeoshow/'. $folder . '/mini/';
		$image 		= new resizeImage();
		$mini_image = $image->resize($dir.$fieldName, $mini_dir.str_replace($taglia,'', $fieldName), $params_morfeo["minimainw"], $params_morfeo["minimainh"], 15);
		if ($mini_image == false) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}		
		
		//Create Full Pic part
		$big_dir 	= JPATH_SITE.'/images/morfeoshow/'. $folder . '/big/';
		$image 		= new resizeImage();
		$big_image 	= $image->resize($dir.$fieldName, $big_dir.str_replace($taglia,'', $fieldName), $params_morfeo["imagesw"], $params_morfeo["imagesh"], 15);
		if ($big_image == false) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}
			
		$row =& JTable::getInstance('morfeoshow_img', 'Table');
		
		
		//WRITE TO DATABASE PART
		//put a couple of values into the post array so I can store to database
		$_POST['width'] 		= $big_image['width'];
		$_POST['height'] 		= $big_image['height'];
		$_POST['gallery_id'] 	= $id;
		$_POST['filename'] 		= str_replace($taglia,'', $fieldName);
//		$ext 					= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
//		$_POST['title'] 		= str_replace($ext, '', $fieldName);

		
		if (!$row->bind(JRequest::get('post')))
		{
			echo "<script> alert('".$row->getError()."');
			window.history.go(-1); </script>\n";
			exit();
		}
		
		$row->title = JRequest::getVar( 'title', '', 'post',
		'string', JREQUEST_ALLOWRAW );
		$row->html = JRequest::getVar( 'html', '', 'post',
		'string', JREQUEST_ALLOWRAW );
		
		if (!$row->store())
		{
			echo "<script> alert('".$row->getError()."');
			window.history.go(-1); </script>\n";
			exit();
		}
		$obj = ($dir.$fieldName);
		@unlink($obj);
		write_xml($id, $folder);
		
	}
}	
	$message = '';
	if ($errors == 0)
	{
		$message = JText::_( 'Images added successfully' );
	}
		
	$mainframe->redirect( 'index.php?option=' . $option . '&task=photos&cid[]=' . $id, $message );
}
?>