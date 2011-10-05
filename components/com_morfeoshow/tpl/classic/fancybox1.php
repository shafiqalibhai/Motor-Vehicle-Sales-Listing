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

if ($params_morfeo['style'] == 1) { 
echo '<style>';
echo $params_morfeo['style1'];
echo '</style>';
		} 
		else
		{		

echo '<style>
.sboxgallery {padding: 10px 10px 30px 30px;}
#sboxth {padding: 0 5px 15px 0;text-align:center;font-size:10px;width:100px;}
#sboxth img {border: 1px solid #eeeccc;	border-width: 2px 2px 2px;}
#sboxth a:hover img {border: 1px solid #3e3e3e;border-width: 2px 2px 2px;}
</style>';
		}
	echo '
<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/boxover/boxover.js" type="text/javascript"></script>	
	<table class="sboxgallery" width="100%" cellpadding="0" cellspacing="0" border="0"><tr>';		
		foreach ($items as $file) 
	{ 

	$x=$x+1;
	if ($x % $params['colonne'] == 0) { 	
	
 if ($params_morfeo['titolo'] == 0) {
		$file->titolo = ''; 
		} 
		else 
		{
		if ($file->title == null) 
		{	
		$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
		$file->titolo = $file->filename;		
		$file->titolo = str_replace($ext, '', $file->titolo);	
		} else {
		$file->titolo = $file->title;
		}	
		}//end elsefilename		
echo '
<td id="sboxth">
		<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
			<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">
		</a>'
;			
		echo'</td></tr><tr>';

}else{	

 if ($params_morfeo['titolo'] == 0) {
		$file->titolo = ''; 
		} 
		else 
		{
		if ($file->title == null) 
		{	
		$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
		$file->titolo = $file->filename;		
		$file->titolo = str_replace($ext, '', $file->titolo);	
		} else {
		$file->titolo = $file->title;
		}	
		}//end elsefilename		
echo '
<td id="sboxth">
		<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
			<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">
		</a>'
;			
	echo'</td>';
		
	}	
	
}	
}
	echo '<tr></tr><tr><br /></tr></table>';