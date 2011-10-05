<?php
//Seyret Component v.0.2//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2
* Content taken from kuluyen_Image class and modified. 
**/	



// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );


//$localf = "/path/images/";
//$imgurl = "http://img.tamtay.vn/files/2008/09/01/thuymc/videos/263914.jpg";

//echo '<img border="0" src="http://video.igala.net/'.kuluyen_getAndSave($imgurl, $localf).'"></p>';

//=================================================================
function kuluyen_resize($fullpath){
    $thumb = new kuluyen_Image($fullpath);
    // $thumb->width(120);
    // $thumb->height(90);
    $thumb->save();
}
//=================================================================
function kuluyen_getAndSave4Dir($imgurl, $localf, $fname){
    /*$fout = kuluyen_getFilename($imgurl);
    $fresult = $fout;*/
    $fout = $localf.$fname;
    kuluyen_save_image($imgurl, $fout);

    $thumb = new kuluyen_Image($fout);
    // $thumb->width(120);
    // $thumb->height(90);
    $thumb->save();

    //$fresult = $fresult.'abc'.$thumb->getnt();

    return $fname;
}
//=================================================================
function kuluyen_getAndSave($imgurl, $localf){
    $fout = kuluyen_getFilename($imgurl);
    $fresult = "seyretfiles/images/".$fout;
    $fout = $localf.$fout;
   // kuluyen_save_image($imgurl, $fout);

	download($imgurl, $fout);

    //$fresult = $fresult.'abc'.$thumb->getnt();

    return $fresult;
}
//=================================================================
//Alternative Image Saving Using cURL seeing as allow_url_fopen is disabled - bummer
function kuluyen_save_image($img, $fullpath){
    // $ch = curl_init ($img);
    // curl_setopt($ch, CURLOPT_HEADER, 0);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
    // $rawdata = curl_exec($ch);
    // curl_close ($ch);
	// if(file_exists($fullpath)){
	// } else {
        // $fp = fopen($fullpath,'x');
        // fwrite($fp, $rawdata);
        // fclose($fp);
    // }
	
	download($img, $fullpath);
	
	
	
}
//=================================================================
function kuluyen_getFilename($fin){
    //http://img.tamtay.vn/files/2008/09/15/tammao_it/videos/256982.jpg
    //http://i1.ytimg.com/vi/pDOiF9VMwJQ/default.jpg
    //http://i2.ytimg.com/vi/-IiIhkx13ag/default.jpg
    //http://video.google.com/ThumbnailServer2?app=vss&contentid=9c20904ac68404dd&offsetms=5000&itag=w320&lang=en&sigh=4QTYmlhblkZHWOgvk_0b-KbZhFo
    //http://static.clip.vn/data/img.thumbnail/0/0/10/344344.jpg
    //http://p-images.veoh.com/image.out?imageId=media-v1084966ANGdbtz61198838541.jpg
    $fout = $fin;

    $test = substr($fin, 0, 7);
    if ($test == "http://"){
        $fout = substr($fin, 7, strlen($fin) - 7); // remove http://
        $ext = substr($fin, strlen($fin) - 4, 4); // get file extension

        $vowels = array("/", "?", "|", "(", ")", "!", "@", "#", "$", "%", "^", "&", "*", "-", "+", "=", "~", "<", ">", "_", ".", "[", "]", "{", "}", ":", ";", "'");
        $fout = str_replace($vowels, "_", $fout);
        $fout = $fout.$ext;
    }

    $fout = "video_".$fout;

    return $fout;
}
//=================================================================

?>

<?php

/*$thumb = new Image('/path/test/bug1.jpg');
$thumb->width(160);
$thumb->height(120);
$thumb->save();*/


class kuluyen_Image {

    var $file;
    var $image_width;
    var $image_height;
    var $width;
    var $height;
    var $ext;
    var $types = array('','gif','jpeg','png','swf');
    var $quality = 80;
    var $top = 0;
    var $left = 0;
    var $crop = false;
    var $type;
    var $nt = 0;

    function kuluyen_Image($name='') {
        $this->file = $name;
        $info = getimagesize($name);
        $this->image_width = $info[0];
        $this->image_height = $info[1];
        $this->type = $this->types[$info[2]];
        $nt = $info[2];
        $info = pathinfo($name);
        $this->dir = $info['dirname'];
        $this->name = str_replace('.'.$info['extension'], '', $info['basename']);
        $this->ext = $info['extension'];
    }

    function getnt() {
        return $nt;
    }
    function dir($dir='') {
        if(!$dir) return $this->dir;
        $this->dir = $dir;
    }

    function name($name='') {
        if(!$name) return $this->name;
        $this->name = $name;
    }

    function width($width='') {
        $this->width = $width;
    }

    function height($height='') {
        $this->height = $height;
    }

    function getext(){
        return $this->ext;
    }

    function resize($percentage=50) {
        // if($this->crop) {
            // $this->crop = false;
            // $this->width = round($this->width*($percentage/100));
            // $this->height = round($this->height*($percentage/100));
            // $this->image_width = round($this->width/($percentage/100));
            // $this->image_height = round($this->height/($percentage/100));
        // } else {
            // $this->width = round($this->image_width*($percentage/100));
            // $this->height = round($this->image_height*($percentage/100));
        // }

    }

    function crop($top=0, $left=0) {
        $this->crop = true;
        $this->top = $top;
        $this->left = $left;
    }

    function quality($quality=80) {
        $this->quality = $quality;
    }

    function show() {
        $this->save(true);
    }

    function save($show=false) {
        if ( ($this->width == $this->image_width) && ($this->height == $this->image_height) ) return;

        /*if($show) @header('Content-Type: image/'.$this->type);

        if(!$this->width && !$this->height) {
            $this->width = $this->image_width;
            $this->height = $this->image_height;
        } elseif (is_numeric($this->width) && empty($this->height)) {
            $this->height = round($this->width/($this->image_width/$this->image_height));
        } elseif (is_numeric($this->height) && empty($this->width)) {
            $this->width = round($this->height/($this->image_height/$this->image_width));
        } else {
            if($this->width<=$this->height) {
                $height = round($this->width/($this->image_width/$this->image_height));
                if($height!=$this->height) {
                    $percentage = ($this->image_height*100)/$height;
                    $this->image_height = round($this->height*($percentage/100));
                }
            } else {
                $width = round($this->height/($this->image_height/$this->image_width));
                if($width!=$this->width) {
                    $percentage = ($this->image_width*100)/$width;
                    $this->image_width = round($this->width*($percentage/100));
                }
            }
        }*/

        if($this->crop) {
            $this->image_width = $this->width;
            $this->image_height = $this->height;
        }

        if($this->type=='jpeg') $image = imagecreatefromjpeg($this->file);
        if($this->type=='png') $image = imagecreatefrompng($this->file);
        if($this->type=='gif') $image = imagecreatefromgif($this->file);

        $new_image = imagecreatetruecolor($this->width, $this->height);
        imagecopyresampled($new_image, $image, 0, 0, $this->top, $this->left, $this->width, $this->height, $this->image_width, $this->image_height);

        $name = $show ? null: $this->dir.DIRECTORY_SEPARATOR.$this->name.'.'.$this->ext;
        if($this->type=='jpeg') imagejpeg($new_image, $name, $this->quality);
        if($this->type=='png') imagepng($new_image, $name);
        if($this->type=='gif') imagegif($new_image, $name);

        imagedestroy($image);
        imagedestroy($new_image);

    }

}

?>