<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitiongallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

$result = $count;	
if($result > 0) {
$x=0;

if ($params_morfeo['style0'] == 1) { 
echo '<style>';
echo $params_morfeo['style2'];
echo '</style>';
		} 
		else
		{
?>
<style>
a img, img 	{ border: none; text-decoration: none; }
#page-wrap	{ width: auto; margin: 0 auto; }
.photo-link	{padding: 5px;margin: 5px;border: 1px solid #999;display: block;width: <?php echo $params_morfeo['larghezza']?>px;text-align:center;font-size:9px;text-decoration: none;}
.photo-link:hover{border-color: white;text-decoration: none;}
</style>
<?php
}
	echo '<table class="sboxgallery" width="100%" cellpadding="0" cellspacing="0" border="0"><tr>';	
	echo '<div id="page-wrap">';
		foreach ($items as $file) 
	{ 
	
	$x=$x+1;
	if ($x % $params['colonne'] == 0) { 	
	
     if ($file->html =='') 
	 { 
	echo '<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
		<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">';
if ($params_morfeo['titolo'] == 0) { 
		} 
		else 
		{
		if ($file->title == null) 
		{	
		$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
		$file->filename = str_replace($ext, '', $file->filename);	
			echo $file->filename;
				} 
				else 
				{	
			echo $file->title;
			}//end elsefilename
		}//end else titolo
echo '</a>';
	}	
	else	
	{ 
echo '<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
		<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="'.$file->html.'" alt="'.$file->html.'">'
;			
if ($params_morfeo['titolo'] == 0) { 
		} 
		else 
		{
		if ($file->title == null) 
		{	
		$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
		$file->filename = str_replace($ext, '', $file->filename);	
			echo $file->filename;
				} 
				else 
				{	
			echo $file->title;
			}//end elsefilename
		}//end else titolo
echo '</a>';
	}//fine else immagine
	echo'</td></tr><tr>';	
}else{

     if ($file->html =='') 
	 { 
	echo '<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
		<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">';
if ($params_morfeo['titolo'] == 0) { 
		} 
		else 
		{
		if ($file->title == null) 
		{	
		$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
		$file->filename = str_replace($ext, '', $file->filename);	
			echo $file->filename;
				} 
				else 
				{	
			echo $file->title;
			}//end elsefilename
		}//end else titolo
echo '</a>';
	}	
	else	
	{ 
echo '<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
		<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="'.$file->html.'" alt="'.$file->html.'">'
;			
if ($params_morfeo['titolo'] == 0) { 
		} 
		else 
		{
		if ($file->title == null) 
		{	
		$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
		$file->filename = str_replace($ext, '', $file->filename);	
			echo $file->filename;
				} 
				else 
				{	
			echo $file->title;
			}//end elsefilename
		}//end else titolo
echo '</a>';
	}//fine else immagine
	echo'</td>';
	}	
  }	
}
		echo '</div>';
		echo '</td></tr><tr><td></br /></td></tr></table>';			