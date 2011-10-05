<?php

#############################################################################
#                                                                           #
#  EZ Autos 5.0.0 - A Mambo Motor Vehicle Sales Listing component           #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################


    
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );



/**************************************************\
                  FUNCTION USED TO SHOW THE IMAGE OPTIONS
-image name (from db)
-if its an admin show the dropdown of the existing images
-dropdown of existing images
-name of the db field that holds the image
\**************************************************/


function imageUpload($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site,$ea_imagedirectory, $ea_thumbwidth;

  include(EZADMIN_PATH."/config.ezautos.php");

?>

<table border="0" width="100%">
	<tr>
		<td valign="top" width="130">
		<table >
			<tr>
				<td width="130">
				<?php if($image){ ?>
					<strong><?php echo _EZAUTOS_VLDET_CURRENTIMG;?></strong><br />
					<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/th/'.$image) ){echo 'th/nothumb.gif';}else{echo $image;} ?>' hspace='4' width='<?php echo $ea_thumbwidth;?>' border='0' alt='' />
					<?php if($image && file_exists($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$image)){?>
						<br /><a href='<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $image;?>' target="_blank"><?php echo _EZAUTOS_VLDET_OPENFULLSIZE;?></a><br />
					<?php } ?>
				<?php } ?>
				<?php if($image){ ?>
					<strong><?php echo _EZAUTOS_VLDET_DELETEIMG;?>:-</strong>&nbsp;&nbsp;<input type="checkbox" name="<?php echo $fieldname;?>delete">
				<?php } ?>
				</td>
			</tr>
			<?php if(!$image){ ?>
			<tr>
				<td>
					<strong><?php echo _EZAUTOS_VLDET_UPLOADNEW;?>:</strong><br />
					<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="30" />
				</td>
			</tr>
			<?php } ?>
		</table>
		</td>
		<td valign="top">
		<table>
			<?php if($image){ ?>
			<tr>
				<td>
					<strong><?php echo _EZAUTOS_REORDER_IMAGES;?></strong><br />
					<?php echo $images;?><br />
  				    <script language="javascript" type="text/javascript">
     		       if (document.forms[0].<?php echo $fieldname;?>.options.value!=''){
      		        jsimg='<?php echo "$mosConfig_live_site/components/com_ezautos/".$ea_imagedirectory."/th/"; ?>' + getSelectedValue( 'adminForm', '<?php echo $fieldname;?>' );
     		       } else {
     		         jsimg='../images/M_images/blank.png';
     		       }
     		       document.write('<img src=' + jsimg + ' name="<?php echo $fieldname;?>prev" width="<?php echo $ea_thumbwidth;?>" border="2" alt="<?php echo _EZAUTOS_VLDET_TNPREV;?>" />');
     		       </script>
				</td>
			</tr>
			<?php } ?>
		</table>
		</td>
	</tr>
</table>

<?php
}


/**************************************************\
        PROFILE IMAGE MANAGEMENT STUFF
\**************************************************/


function profileUpload($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site, $ea_thumbwidth;

  include(EZADMIN_PATH."/config.ezautos.php");

?>

<table ><tr><td width="150">
<strong><?php echo _EZAUTOS_VLDET_CURRENTIMG;?></strong><br />

<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezautos/profiles/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$image) ){echo 'nothumb.jpg';}else{echo $image;} ?>' hspace='4' width='<?php echo $ea_thumbwidth;?>' border='0' alt='' />

</td></tr>

<tr><td>
<?php if(!$image){ ?>

<strong><?php echo _EZAUTOS_VLDET_UPLOADNEW;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
   FUNCTION THAT MANAGES THE PROFILE IMAGE UPLOAD
\**************************************************/
    
function saveProfileUpload($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;
global $ea_imagedirectory,$ea_thumbwidth, $ea_thumbcreation, $ea_thumbquality;

include(EZADMIN_PATH."/config.ezautos.php");


$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".jpg")) && (strcasecmp(substr($fileatt_name,-4),".png")) && (strcasecmp(substr($fileatt_name,-4),".gif")) ) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed!'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your image'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezautos/profiles/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }

        resizeProfileImage($mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$fileatt_name);

return $fileatt_name;
 }

}


/**************************************************\
   FUNCTION THAT CHECKS THE PROFILE IMAGE UPLOAD
\**************************************************/


function resizeProfileImage($src_file, $ea_profmaxwidth, $ea_profmaxheight){
	global $ea_profmaxwidth, $ea_profmaxheight, $ea_thumbquality;

include(EZADMIN_PATH."/config.ezautos.php");

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];

// Set a maximum height and width
$width = $ea_profmaxwidth;
$height = $ea_profmaxheight;

if ($srcWidth > $width OR $srcHeight > $height) {

// Get new dimensions
list($width_orig, $height_orig) = getimagesize($src_file);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);

    if ($imginfo[2] == 'JPG')
		$image = imagecreatefromjpeg($src_file);
    if ($imginfo[2] == 'GIF')
        $image = imagecreatefromgif($src_file);
    if ($imginfo[2] == 'PNG')
        $image = imagecreatefrompng($src_file);

$withSampling = true;

    // Resize
    if($withSampling)
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    else   
        imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
if(imagejpeg($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagegif($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagepng($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else {
return 0;
}

}

}



/**************************************************\
        LOGO IMAGE MANAGEMENT STUFF
\**************************************************/


function logoUpload($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;

  include(EZADMIN_PATH."/config.ezautos.php");

?>

<table ><tr><td width="150">
<strong><?php echo _EZAUTOS_VLDET_CURRENTIMG;?></strong><br />

<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezautos/profiles/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$image) ){echo 'nologo.jpg';}else{echo $image;} ?>' hspace='4' border='0' alt='' />

</td></tr>

<tr><td>
<?php if(!$image){ ?>

<strong><?php echo _EZAUTOS_VLDET_UPLOADNEW;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
   FUNCTION THAT MANAGES THE LOGO IMAGE UPLOAD
\**************************************************/
    
function saveLogoUpload($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;
global $ea_thumbcreation, $ea_thumbquality;

  include(EZADMIN_PATH."/config.ezautos.php");

$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= $name."_".md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".jpg")) && (strcasecmp(substr($fileatt_name,-4),".png")) && (strcasecmp(substr($fileatt_name,-4),".gif")) ) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed!'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your image'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezautos/profiles/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }

        resizeLogoImage($mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$fileatt_name);

return $fileatt_name;
 }

}


/**************************************************\
   FUNCTION THAT RESIZES THE LOGO IMAGE
\**************************************************/
    


function resizeLogoImage($src_file, $ea_logowidth, $ea_logoheight){
	global $ea_logowidth, $ea_logoheight, $ea_thumbquality;

include(EZADMIN_PATH."/config.ezautos.php");

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];

// Set a maximum height and width
$width = $ea_logowidth;
$height = $ea_logoheight;

if ($srcWidth > $width OR $srcHeight > $height) {

// Get new dimensions
list($width_orig, $height_orig) = getimagesize($src_file);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);

    if ($imginfo[2] == 'JPG')
		$image = imagecreatefromjpeg($src_file);
    if ($imginfo[2] == 'GIF')
        $image = imagecreatefromgif($src_file);
    if ($imginfo[2] == 'PNG')
        $image = imagecreatefrompng($src_file);

$withSampling = true;

    // Resize
    if($withSampling)
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    else   
        imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
if(imagejpeg($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagegif($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagepng($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else {
return 0;
}

}

}



/**************************************************\
                  FUNCTION THAT MANAGES THE IMAGE UPLOAD AND CALL TO THUMBNAILER
\**************************************************/
    
function saveFileUpload($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;
global $ea_imagedirectory, $ea_thumbwidth, $ea_thumbcreation, $ea_thumbquality, $ea_maxwidth, $ea_maxheight;

include(EZADMIN_PATH."/config.ezautos.php");

$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".jpg")) && (strcasecmp(substr($fileatt_name,-4),".png")) && (strcasecmp(substr($fileatt_name,-4),".gif")) ) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed!'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezautos/".$ea_imagedirectory."/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your image'); window.history.go(-1); </script>\n";
        exit();
    return '';
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezautos/".$ea_imagedirectory."/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezautos/".$ea_imagedirectory."/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }


  // Resize the thumbnail and main image

        resize_image($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$fileatt_name, $mosConfig_absolute_path."/components/com_ezautos/".$ea_imagedirectory."/th/".$fileatt_name, $ea_thumbwidth, $ea_thumbcreation, $ea_thumbquality);

        resize($mosConfig_absolute_path.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$fileatt_name, $ea_thumbwidth, $ea_thumbcreation, $ea_thumbquality);



return $fileatt_name;
 }

}


/**************************************************\
   FUNCTION THAT RESIZES THE MAIN IMAGE
\**************************************************/


function resize($src_file, $ea_maxwidth, $ea_maxheight){
	global $ea_maxwidth, $ea_maxheight, $ea_thumbquality, $ea_useini, $ea_tempini, $ea_imgwidth, $ea_imgheight;

include(EZADMIN_PATH."/config.ezautos.php");

if ($ea_useini) {

$do_inioverride = $ea_tempini."M";
ini_set("memory_limit","$do_inioverride");
}

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];

// Set a maximum height and width
$width = $ea_maxwidth;
$height = $ea_maxheight;


if ($srcWidth > $width OR $srcWidth > $ea_imgwidth OR $srcHeight > $height OR $srcHeight > $ea_imgheight) {


// Get new dimensions
list($width_orig, $height_orig) = getimagesize($src_file);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);

    if ($imginfo[2] == 'JPG')
		$image = imagecreatefromjpeg($src_file);
    if ($imginfo[2] == 'GIF')
        $image = imagecreatefromgif($src_file);
    if ($imginfo[2] == 'PNG')
        $image = imagecreatefrompng($src_file);

$withSampling = true;

    // Resize
    if($withSampling)
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    else   
        imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
if(imagejpeg($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagegif($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagepng($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else {
return 0;
}

}

}


/**************************************************\
                  THUMBNAILER
\**************************************************/


function resize_image($src_file, $dest_file, $new_size, $method, $ea_thumbquality, $ea_maxheight, $ea_maxwidth){
global $mosConfig_absolute_path, $ea_maxwidth, $ea_maxheight, $ea_imagedirectory, $fileatt_name, $fileatt;

include(EZADMIN_PATH."/config.ezautos.php");

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG', 4 => 'SWF', 5 => 'PSD', 6 => 'BMP', 7 => 'TIFF', 8 => 'TIFF', 9 => 'JPC', 10 => 'JP2', 11 => 'JPX', 12 => 'JB2', 13 => 'SWC', 14 => 'IFF');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // GD can only handle JPG & PNG images
  if ($imginfo[2] != 'JPG' && $imginfo[2] != 'PNG' && ($method == 'gd1' || $method == 'gd2')) die("ERROR: GD can only handle JPG and PNG files!");


//Move on and do the thumbnailing stuff


  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];


  //echo "Creating thumbnail from $imginfo[2], $imginfo[0] x $imginfo[1]...<br>";

  $ratio = max($srcWidth, $srcHeight) / $new_size;
  $ratio = max($ratio, 1.0);
  $destWidth = (int)($srcWidth / $ratio);
  $destHeight = (int)($srcHeight / $ratio);

  // Method for thumbnails creation

  switch ($method) {

  case "gd1" :

    if (!function_exists('imagecreatefromjpeg')) {
        die('GD image library not installed!');
    }
    if ($imginfo[2] == 'JPG'){
      $src_img = imagecreatefromjpeg($src_file);
      //      echo 'src_img1'.$src_img;
    }else{
      $src_img = imagecreatefrompng($src_file);
      //      echo 'src_img2'.$src_img;
    }
    if (!$src_img){
      $ERROR = $lang_errors['invalid_image'];
//    echo $lang_errors['invalid_image'];
    echo "<font color=red>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";  
      return false;
    }
    
    $dst_img = imagecreate($destWidth, $destHeight);

      imagetruecolortopalette($src_img, false, 256);   // Create New Color Pallete
      $palsize = ImageColorsTotal($src_img);
      for ($i = 0; $i < $palsize; $i++) {   // Counting Colors In The Image
       $colors = ImageColorsForIndex($src_img, $i);   // Number Of Colors Used
       ImageColorAllocate($dst_img, $colors['red'], $colors['green'], $colors['blue']);   // Tell The Server What Colors This Image Will Use
      }

    imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $destWidth, $destHeight, $srcWidth, $srcHeight);

    if(imagejpeg($dst_img, $dest_file, $ea_thumbquality)){
        echo "<font color=red>Notice</font> : Thumbnail created ".$dest_file."<br />";   
    }else{
        echo "<font color=black>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";           
    }
    
    imagedestroy($src_img);
    imagedestroy($dst_img);
    break;

  case "gd2" :
    if (!function_exists('imagecreatefromjpeg')) {
        die('GD image library not installed!');
    }
    if (!function_exists('imagecreatetruecolor')) {
        die('GD2 image library does not support truecolor thumbnailing!');
    }
    if ($imginfo[2] == 'JPG')
      $src_img = imagecreatefromjpeg($src_file);
    else
      $src_img = imagecreatefrompng($src_file);
    if (!$src_img){
        echo "<font color=red>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";  
//      $ERROR = $lang_errors['invalid_image'];
      return false;
    }
    $dst_img = imagecreatetruecolor($destWidth, $destHeight);
    imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
    imagejpeg($dst_img, $dest_file, $ea_thumbquality);

    if(imagejpeg($dst_img, $dest_file, $ea_thumbquality)){
        echo "<font color=red>Notice</font> : Thumbnail created ".$dest_file."<br />";   
    }else{
        echo "<font color=black>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";       
    }
    
    imagedestroy($src_img);
    imagedestroy($dst_img);
    break;
  }

  // Set mode of uploaded picture
  chmod($dest_file, octdec('644'));

  // We check that the image is valid
  $imginfo = getimagesize($dest_file);
  if ($imginfo == null){
    return false;
  } else {
    return true;
  }
}











/**************************************************\
        PDF MANAGEMENT STUFF
\**************************************************/


function pdfUpload($pdf,$admin,$pdfs=null,$fieldname){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");

?>

<table>

<?php if($pdf){ ?>
<tr><td width="150">
<strong><?php echo _EZAUTOS_PROFILE_CURRENT_PDF;?></strong><br />

<a target="_blank" href="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/profiles/<?php echo $pdf;?>"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/marketing.png" border="0" alt="<?php echo _EZAUTOS_PROFILE_DOWNLOAD_PROMO;?>" /></a>

</td></tr>
<?php } ?>

<tr><td>
<?php if(!$pdf){ ?>

<strong><?php echo _EZAUTOS_PROFILE_PDF_UPLOAD;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
   FUNCTION THAT MANAGES THE PDF PROMO UPLOAD
\**************************************************/
    
function savePdfPromo($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");

$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".pdf")) && (strcasecmp(substr($file['name'],-4),".doc")) && (strcasecmp(substr($file['name'],-4),".xls"))) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed! Only files of type pdf, doc, or xls can be uploaded for marketing material.'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your PDF file'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezautos/profiles/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }

return $fileatt_name;
 }

}



/**************************************************\
        PDF MANAGEMENT STUFF
\**************************************************/


function proppdfUpload($pdf,$admin,$pdfs=null,$fieldname){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");

?>

<table>

<?php if($pdf){ ?>
<tr><td width="150">
<strong><?php echo _EZAUTOS_PROFILE_CURRENT_PDF;?></strong><br />

<a target="_blank" href="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/pdfs/<?php echo $pdf;?>"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/marketing.png" border="0" alt="<?php echo _EZAUTOS_PROFILE_DOWNLOAD_PROMO;?>" /></a>

</td></tr>
<?php } ?>

<tr><td>
<?php if(!$pdf){ ?>

<strong><?php echo _EZAUTOS_PROFILE_PDF_UPLOAD;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
   FUNCTION THAT MANAGES THE PDF PROMO UPLOAD
\**************************************************/
    
function savePropPdf($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");

$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".pdf")) && (strcasecmp(substr($file['name'],-4),".doc")) && (strcasecmp(substr($file['name'],-4),".xls"))) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed! Only files of type pdf, doc, or xls can be uploaded for marketing material.'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezautos/pdfs/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your PDF file'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezautos/pdfs/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezautos/pdfs/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }

return $fileatt_name;
 }

}



/**************************************************\
        PAGE TOPPER IMAGE MANAGEMENT STUFF
\**************************************************/


function topperUpload($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");

?>

<table ><tr><td width="150">
<strong><?php echo _EZAUTOS_VLDET_CURRENTIMG;?></strong><br />

<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezautos/profiles/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$image) ){echo 'notopper.jpg';}else{echo $image;} ?>' hspace='4' border='0' width='350' alt='' />

</td></tr>

<tr><td>
<?php if(!$image){ ?>

<strong><?php echo _EZAUTOS_VLDET_UPLOADNEW;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
   FUNCTION THAT MANAGES THE PAGE TOPPER IMAGE UPLOAD
\**************************************************/
    
function saveTopperUpload($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$myItemid,$mosConfig_absolute_path,$mosConfig_live_site;
global $ea_thumbcreation, $ea_thumbquality;

include(EZADMIN_PATH."/config.ezautos.php");

$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".jpg")) && (strcasecmp(substr($fileatt_name,-4),".png")) && (strcasecmp(substr($fileatt_name,-4),".gif")) ) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed!'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your image'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezautos/profiles/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezautos/profiles/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }

        resizeTopperImage($mosConfig_absolute_path.'/components/com_ezautos/profiles/'.$fileatt_name);

return $fileatt_name;
 }

}


/**************************************************\
   FUNCTION THAT RESIZES THE PAGE TOPPER IMAGE
\**************************************************/
    


function resizeTopperImage($src_file, $ea_topperwidth, $ea_topperheight){
	global $ea_topperwidth, $ea_topperheight, $ea_thumbquality;

include(EZADMIN_PATH."/config.ezautos.php");

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];

// Set a maximum height and width
$width = $ea_topperwidth;
$height = $ea_topperheight;

if ($srcWidth > $width OR $srcWidth > $ea_topperwidth OR $srcHeight > $height OR $srcHeight > $ea_topperheight) {

// Get new dimensions
list($width_orig, $height_orig) = getimagesize($src_file);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);

    if ($imginfo[2] == 'JPG')
		$image = imagecreatefromjpeg($src_file);
    if ($imginfo[2] == 'GIF')
        $image = imagecreatefromgif($src_file);
    if ($imginfo[2] == 'PNG')
        $image = imagecreatefrompng($src_file);

$withSampling = true;

    // Resize
    if($withSampling)
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    else   
        imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
if(imagejpeg($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagegif($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else if(imagepng($image_p, $src_file, $ea_thumbquality)) {
return 1;
} else {
return 0;
}

}

}


?>