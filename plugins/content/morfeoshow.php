<?php
/**
* @package		Joomla
* @subpackage	plugin_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) 
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/
defined( '_JEXEC' ) or die( 'Restricted access' );


$mainframe->registerEvent('onPrepareContent', 'showMorfeo');

function showMorfeo( &$row, &$params )
{
	preg_match_all('/\{morfeo ([0-9]+)\}/U',$row->text, $matches);
	foreach( $matches[1] as $id )
	{
		$txt = plgContentProcess($id);
		$row->text = str_replace("{morfeo $id}", $txt, $row->text);
	}

return true;
}

function plgContentProcess($id)
{
    global $mainframe, $row, $params_morfeo;
	
	jimport('joomla.environment.uri' );
	$host = JURI::root();
	require_once(JPATH_SITE.DS.'administrator/components/com_morfeoshow/settings.php' );	
	$db =& JFactory::getDBO();
	$query = "SELECT * FROM #__morfeoshow WHERE id =" .(int)$id;
	$db->setQuery($query);
	$row = $db->loadObject();
    $skin ="classic";
	$lang = $params_morfeo['shulang'];
	$pla ="img";

	
	$params["flashgallery"]		= $row->flashgallery;
	$params["height"]			= $row->height;
	$params["width"]			= $row->width;
	$params["height"]			= $row->height;
	$params["widthsw"]			= $row->widthsw;
	$params["heightsw"]			= $row->heightsw;
	$params["widthpc"]			= $row->widthpc;
	$params["heightpc"]			= $row->heightpc;
	$params["widthpl"]			= $row->widthpl;
	$params["heightpl"]			= $row->heightpl;
	$params["width"]			= $row->width;
	$params["trans"]			= $row->trans;
	$params["navigation"]		= $row->navigation;
	$params["movimento"]		= $row->movimento;			
	$params["tempo"]			= $row->tempo;
	$params["bkgnd"] 			= $row->bkgnd;
	$params["bkgnd1"] 			= $row->bkgnd1;
	$params["bkgnd2"] 			= $row->bkgnd2;
	$params["bkgnd3"] 			= $row->bkgnd3;
	$params["user_id"] 			= $row->user_id;
	$params["group_id"] 		= $row->group_id; 
	$params["text"] 			= $row->text;
	$params["tags"] 			= $row->tags; 
	$params["set_id"] 			= $row->set_id; 
	$params["sort"] 			= $row->sort;
	$params["user"] 			= $row->pusername;
	$params["psingle"] 			= $row->psingle;
	$params["pback"] 			= $row->pback;
	$params["ph"] 				= $row->paltezza;
	$params["pw"] 				= $row->plarghezza;	
	$params["overstretch"] 		= $row->overstretch;
	$params["shuffle"] 			= $row->shuffle;
	$params["template"] 		= $row->tclassic;
	$params["colonne"] 			= $row->tcol;

	
	static $HeaderAdded;
		if(!$HeaderAdded) {
		$HeaderAdded=1;	
		$header='';
		if ($row->flashgallery == 0) {

		if ($params['template'] == 4 || $params['template'] == 5 || $params['template'] == 6|| $params['template'] == 7) 
		{	

	if ($params_morfeo['gapi'] == 0) 
	{	
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}

		$header .= '
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.fancybox-1.0.0.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.pngFix.pack.js" type="text/javascript"></script>	
		<style type="text/css" media="all">	
	@import "'.JURI::root(true).'/components/com_morfeoshow/style/style.css"; 		
	@import "'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/fancy.css"; 
		</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".photo-link").fancybox({ "zoomSpeedIn": 500, "zoomSpeedOut": 500, "overlayShow": true }); 
		});
	</script>		
';
	} 
	else
	{

	switch ($params_morfeo['shuadat']) {
		case 'shadowbox-jquery.js':	
	if ($params_morfeo['gapi'] == 0) 
	{	
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}		
break;
		case 'shadowbox-mootools.js':
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/mootools.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("mootools", "1.11");
	</script>	
		';
	}			
break;	
		case 'shadowbox-prototype.js':
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/prototype.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("prototype", "1.6");
	</script>	
		';
	}		
break;
		case 'shadowbox-yui.js':	
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/yui-utilities.js" type="text/javascript"></script>		
		';

break;
		case 'shadowbox-dojo.js':
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/dojo.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("dojo", "1.1.1");
	</script>	
		';
	}		
break;	

}	
		
		$header .= '
	<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/adapter/'.$params_morfeo['shuadat'].'"></script>
	<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/shadowbox.js"></script>
		<style type="text/css" media="all">	
	@import "'.JURI::root(true).'/components/com_morfeoshow/style/style.css"; 		
		</style>
<script type="text/javascript">
Shadowbox.loadSkin("'.$skin.'", "'.JURI::root(true).'/components/com_morfeoshow/src/skin");
Shadowbox.loadLanguage("'.$lang.'", "'.JURI::root(true).'/components/com_morfeoshow/src/lang");
Shadowbox.loadPlayer(["'.$pla.'"], "'.JURI::root(true).'/components/com_morfeoshow/src/player");
window.onload = function(){
    Shadowbox.init();
};

</script>
	';
	}	
	} else if ($row->flashgallery == 9) {
	
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}		
		$header .= '
		<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery.blockUI-1.33.pack.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery.history.pack.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/lightbox/lb.js" type="text/javascript"></script>			
		<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/picas.js" type="text/javascript"></script>		
		<style type="text/css" media="all">	
	@import "'.JURI::root(true).'/components/com_morfeoshow/style/style.css"; 		
	@import "'.JURI::root(true).'/components/com_morfeoshow/src/js/css/pic.css"; 
	@import "'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/lightbox/lb.css";	
		</style>
';	

	} else if ($row->flashgallery == 10) {
	
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}		
		$header .= '
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.fancybox-1.0.0.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.pngFix.pack.js" type="text/javascript"></script>		
		<style type="text/css" media="all">	
	@import "'.JURI::root(true).'/components/com_morfeoshow/style/style.css"; 		
	@import "'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/fancy.css"; 
		</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".gallflickr").fancybox({ "zoomSpeedIn": 500, "zoomSpeedOut": 500, "overlayShow": true }); 
		});
	</script>	
';	
	
	}
	else
	{

		$header .= '
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>		
		<style type="text/css" media="all">	
	@import "'.JURI::root(true).'/components/com_morfeoshow/style/style.css"; 	
		</style>
	';	
	}//end else
	
	$mainframe->addCustomHeadTag($header);
	
	}//end of header		

	
switch ($params["flashgallery"]) {
	//case 0 Shadowboxgallery
	case '0':			
		
			$db =& JFactory::getDBO();
			$query = 'SELECT COUNT(id)'
			. ' FROM #__morfeoshow_img'
			. ' WHERE gallery_id ='. (int) $row->id 			
			;
			$db->setQuery( $query );
			$count 	= $db->loadResult();			
			$query = 'SELECT *'
			. ' FROM #__morfeoshow_img'
			. ' WHERE gallery_id ='. (int) $row->id 
			. ' ORDER BY '. $row->orderfront			
			;
			$db->setQuery($query);
			$items = $db->loadObjectList();			

			$path 	= JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS. $row->folder .DS.'big';
			$path1 	= JURI::root().'images/morfeoshow/'. $row->folder .'/big/';
			$path2 	= JURI::root().'images/morfeoshow/'. $row->folder.'/thumbs/';
			$txt='';

	switch ($params["template"]) {
case '0':

				$result = $count;	
				if($result > 0) {
				$x=0;

				if ($params_morfeo['style'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style1'].'"';
				$txt .='</style>';
						} 
						else
						{		

				$txt .='<style>
				.sboxgallery {padding: 10px 10px 30px 30px;}
				#sboxth {padding: 0 5px 15px 0;text-align:center;font-size:10px;width:100px;}
				#sboxth img {border: 1px solid #eeeccc;	border-width: 2px 2px 2px;}
				#sboxth a:hover img {border: 1px solid #3e3e3e;border-width: 2px 2px 2px;}
				</style>';

						}
						
				$txt .='<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/boxover/boxover.js" type="text/javascript"></script>
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
				$txt .='<td id="sboxth" style="font-size:12px">
		<a rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
			<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">
		</a>
		</td></tr><tr>';
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
	$txt .='<td id="sboxth" style="font-size:12px">
		<a rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
			<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">
		</a>
		</td>';
		
	}	
	
}	
}
	$txt .='<tr></tr><tr><br /></tr></table>';			
break;
			
case '1':

				$result = $count;	
				if($result > 0) {
				$x=0;
				if ($params_morfeo['style0'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style2'].'"';
				$txt .='</style>';
						} 
						else
						{

				$txt .='<style>
				a img, img 	{ border: none; text-decoration: none; }
				#page-wrap	{ width: auto; margin: 0 auto; }
				.photo-link	{padding: 5px;margin: 5px;border: 1px solid #999;display: block;width: '. $params_morfeo['larghezza'].'px;text-align:center;font-size:9px;text-decoration: none;}
				.photo-link:hover{border-color: white;text-decoration: none;}
				</style>';

				}
				$txt .='<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/boxover/boxover.js" type="text/javascript"></script>
					<table class="sboxgallery" width="100%" cellpadding="0" cellspacing="0" border="0"><tr>';	
				$txt .='<div id="page-wrap">';
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
						
				$txt .='<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">'
				;			
			$txt .='</a>';
			$txt .='</td></tr><tr>';
			}
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
						
				$txt .='<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">'
				;			
			$txt .='</a>';
			$txt .='</td>';
	}	
	
}	
}	
}
				$txt .='</div>';
				$txt .='</td></tr><tr><td></br /></td></tr></table>';	
break;

case '2':

				$result = $count;	
				if($result > 0) {
				$x=0;

				if ($params_morfeo['style'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style1'].'"';
				$txt .='</style>';
						} 
						else
						{		

				$txt .='<style>
				.sboxgallery {padding: 10px 10px 30px 30px;}
				#sboxth {padding: 0 5px 15px 0;text-align:center;font-size:10px;width:100px;}
				#sboxth img {border: 1px solid #eeeccc;	border-width: 2px 2px 2px;}
				#sboxth a:hover img {border: 1px solid #3e3e3e;border-width: 2px 2px 2px;}
				</style>';
						}
						
				$txt .='<table class="sboxgallery" width="100%" cellpadding="0" cellspacing="0" border="0"><tr>';		
						foreach ($items as $file) 
					{ 

				$x=$x+1;
				if ($x % $params['colonne'] == 0) { 					
					
				     if ($file->html =='') 
					 { 
				$txt .='<td id="sboxth">
					<a rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">
					</a>
					<br />
				';
					}	
					else	
					{ 
					
				$txt .='
				<td id="sboxth">
						<a rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
							<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="'.$file->html.'" alt="'.$file->html.'">
						</a>
							<br />'
				;			
					}//fine else immagine	
				if ($params_morfeo['titolo'] == 0) { 
						} 
						else 
						{
						if ($file->title == null) 
						{	
						$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
						$file->filename = str_replace($ext, '', $file->filename);	
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''.$file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</td></tr><tr>';

				}else{	

				     if ($file->html =='') 
					 { 
				$txt .='<td id="sboxth">
					<a rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">
					</a>
					<br />
				';
					}	
					else	
					{ 
					
				$txt .='
				<td id="sboxth">
						<a rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
							<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="'.$file->html.'" alt="'.$file->html.'">
						</a>
							<br />'
				;			
					}//fine else immagine	
				if ($params_morfeo['titolo'] == 0) { 
						} 
						else 
						{
						if ($file->title == null) 
						{	
						$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
						$file->filename = str_replace($ext, '', $file->filename);	
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''.$file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</td>';
				}	
			}	
		}		
				$txt .='</td></tr><tr><td></br /></td></tr></table>';
break;
			
case '3':

				$result = $count;	
				if($result > 0) {
				$x=0;
				if ($params_morfeo['style0'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style2'].'"';
				$txt .='</style>';
						} 
						else
						{

				$txt .='<style>
				a img, img 	{ border: none; text-decoration: none; }
				#page-wrap	{ width: auto; margin: 0 auto; }
				.photo-link	{padding: 5px;margin: 5px;border: 1px solid #999;display: block;width: '. $params_morfeo['larghezza'].'px;text-align:center;font-size:9px;text-decoration: none;}
				.photo-link:hover{border-color: white;text-decoration: none;}
				</style>';

				}
				$txt .='<table class="sboxgallery" width="100%" cellpadding="0" cellspacing="0" border="0"><tr>';	
				$txt .='<div id="page-wrap">';
						foreach ($items as $file) 
					{ 
	
				$x=$x+1;
				if ($x % $params['colonne'] == 0) { 					
					
				     if ($file->html =='') 
					 { 
				$txt .='<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">';
				if ($params_morfeo['titolo'] == 0) { 
						} 
						else 
						{
						if ($file->title == null) 
						{	
						$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
						$file->filename = str_replace($ext, '', $file->filename);	
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''.$file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</a>';
					}	
					else	
					{ 
				$txt .='<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
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
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''.$file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</a>';
					}//fine else immagine			
				$txt .='</td></tr><tr>';	
				}else{	
				     if ($file->html =='') 
					 { 
				$txt .='<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">';
				if ($params_morfeo['titolo'] == 0) { 
						} 
						else 
						{
						if ($file->title == null) 
						{	
						$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
						$file->filename = str_replace($ext, '', $file->filename);	
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''.$file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</a>';
					}	
					else	
					{ 
				$txt .='<td align="center"><a class="photo-link" rel="shadowbox[Morfeo];options={slideshowDelay:6}" class="option" href="'.$path1.$file->filename.'">
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
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''.$file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</a>';
				}//fine else immagine					
				$txt .='</td>';
			}	
		}
	}		
				$txt .='</div>';
				$txt .='</td></tr><tr><td></br /></td></tr></table>';	
break;	

case '4':

				$result = $count;	
				if($result > 0) {
				$x=0;
				if ($params_morfeo['style'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style1'].'"';
				$txt .='</style>';
						} 
						else
						{		

				$txt .='<style>
				.sboxgallery {padding: 10px 10px 30px 30px;}
				#sboxth {padding: 0 5px 15px 0;text-align:center;font-size:10px;width:100px;}
				#sboxth img {border: 1px solid #eeeccc;	border-width: 2px 2px 2px;}
				#sboxth a:hover img {border: 1px solid #3e3e3e;border-width: 2px 2px 2px;}
				</style>';
						}
				$txt .='
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
				$txt .='
				<td id="sboxth">
						<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
							<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">
						</a>'
				;			
				$txt .='</td></tr><tr>';
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
				$txt .='
				<td id="sboxth">
						<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
							<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">
						</a>'
				;			
				$txt .='</td>';				
			}	
		  }	
		}		
				$txt .='</td></tr><tr><td></br /></td></tr></table>';
break;	

case '5':

				$result = $count;	
				if($result > 0) {
				$x=0;
				if ($params_morfeo['style0'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style2'].'"';
				$txt .='</style>';
						} 
						else
						{
				$txt .='<style>
				a img, img 	{ border: none; text-decoration: none; }
				#page-wrap	{ width: auto; margin: 0 auto; }
				.photo-link	{padding: 5px;margin: 5px;border: 1px solid #999;display: block;width: '. $params_morfeo['larghezza'].'px;text-align:center;font-size:9px;text-decoration: none;}
				.photo-link:hover{border-color: white;text-decoration: none;}
				</style>';
				}
				$txt .='<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/boxover/boxover.js" type="text/javascript"></script>	
					<table align="left" valign="top" border="0" cellpadding="0" cellspacing="0" width="100%">';
				$txt .='<tr>';
				$txt .='<div id="page-wrap">';
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
				$txt .='<td align="center"><a class="photo-link" rel="one-big-group"  href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">'
				;			
				$txt .='</a>';
				$txt .='</td></tr><tr>';

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
				$txt .='<td align="center"><a class="photo-link" rel="one-big-group"  href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="header=['.$file->titolo.'] body=['.$file->html.']">'
				;			
				$txt .='</a>';
				$txt .='</td>';				

				}
			}				
		}					
				$txt .='</td></tr><tr><td></br /></td></tr></table>';		
break;
			
case '6':

$result = $count;	
if($result > 0) {
$x=0;

				if ($params_morfeo['style'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style1'].'"';
				$txt .='</style>';
						} 
						else
						{		

				$txt .='<style>
				.sboxgallery {padding: 10px 10px 30px 30px;}
				#sboxth {padding: 0 5px 15px 0;text-align:center;font-size:10px;width:100px;}
				#sboxth img {border: 1px solid #eeeccc;	border-width: 2px 2px 2px;}
				#sboxth a:hover img {border: 1px solid #3e3e3e;border-width: 2px 2px 2px;}
				</style>';
						}
				$txt .='<table class="sboxgallery" width="100%" cellpadding="0" cellspacing="0" border="0"><tr>';		
						foreach ($items as $file) 
					{
				$x=$x+1;
				if ($x % $params['colonne'] == 0) { 					
				     if ($file->html =='') 
					 { 
				$txt .='<td id="sboxth">
					<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">
					</a>
					<br />
				';
					}	
					else	
					{ 
					
				$txt .='
				<td id="sboxth">
						<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
							<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="'.$file->html.'" alt="'.$file->html.'">
						</a>
							<br />'
				;			
					}//fine else immagine	
				if ($params_morfeo['titolo'] == 0) { 
						} 
						else 
						{
						if ($file->title == null) 
						{	
						$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
						$file->filename = str_replace($ext, '', $file->filename);	
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''. $file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</td></tr><tr>';
				
			}else{	


				     if ($file->html =='') 
					 { 
				$txt .='<td id="sboxth">
					<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">
					</a>
					<br />
				';
					}	
					else	
					{ 
					
				$txt .='
				<td id="sboxth">
						<a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
							<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'" title="'.$file->html.'" alt="'.$file->html.'">
						</a>
							<br />'
				;			
					}//fine else immagine	
				if ($params_morfeo['titolo'] == 0) { 
						} 
						else 
						{
						if ($file->title == null) 
						{	
						$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
						$file->filename = str_replace($ext, '', $file->filename);	
							$txt .=''.$file->filename.'';
								} 
								else 
								{	
							$txt .=''. $file->title.'';
							}//end elsefilename
						}//end else titolo
				$txt .='</td>';			
				
				}
			}
		}		
				$txt .='</td></tr><tr><td></br /></td></tr></table>';
break;	

case '7':
				$result = $count;	
				if($result > 0) {
				$x=0;
				if ($params_morfeo['style0'] == 1) { 
				$txt .='<style>"'.$params_morfeo['style2'].'"';
				$txt .='</style>';
						} 
						else
						{
				$txt .='<style>
				a img, img 	{ border: none; text-decoration: none; }
				#page-wrap	{ width: auto; margin: 0 auto; }
				.photo-link	{padding: 5px;margin: 5px;border: 1px solid #999;display: block;width: '. $params_morfeo['larghezza'].'px;text-align:center;font-size:9px;text-decoration: none;}
				.photo-link:hover{border-color: white;text-decoration: none;}
				</style>';
				}
				$txt .='<table align="left" valign="top" border="0" cellpadding="0" cellspacing="0" width="100%">';
						$txt .='<tr>';
				$txt .='<div id="page-wrap">';
						foreach ($items as $file) 
					{ 
				$x=$x+1;
				if ($x % $params['colonne'] == 0) {					
				     if ($file->html =='') 
					 { 
				$txt .='<td align="center"><a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">';
				if ($params_morfeo['titolo'] == 0) { 
					} 
					else 
					{
					if ($file->title == null) 
					{	
					$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
					$file->filename = str_replace($ext, '', $file->filename);	
						$txt .=''.$file->filename.'';
							} 
							else 
							{	
						$txt .=''.$file->title.'';
						}//end elsefilename
					}//end else titolo
					$txt .='</a>';
						}	
						else	
						{ 
					$txt .='<td align="center"><a class="photo-link" rel="one-big-group"  href="'.$path1.$file->filename.'">
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
								$txt .=''.$file->filename.'';
									} 
									else 
									{	
								$txt .=''.$file->title.'';
								}//end elsefilename
							}//end else titolo
					$txt .='</a>';
						}//fine else immagine	
					$txt .='</td></tr><tr>';
				}else{	
				     if ($file->html =='') 
					 { 
				$txt .='<td align="center"><a class="photo-link" rel="one-big-group" href="'.$path1.$file->filename.'">
						<img src="'.$path2.$file->filename.'" width="'.$params_morfeo['larghezza'].'">';
				if ($params_morfeo['titolo'] == 0) { 
					} 
					else 
					{
					if ($file->title == null) 
					{	
					$ext 			= array('.png','.jpg','.bmp','.gif','(',')','[',']','-','_');
					$file->filename = str_replace($ext, '', $file->filename);	
						$txt .=''.$file->filename.'';
							} 
							else 
							{	
						$txt .=''.$file->title.'';
						}//end elsefilename
					}//end else titolo
					$txt .='</a>';
						}	
						else	
						{ 
					$txt .='<td align="center"><a class="photo-link" rel="one-big-group"  href="'.$path1.$file->filename.'">
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
								$txt .=''.$file->filename.'';
									} 
									else 
									{	
								$txt .=''.$file->title.'';
								}//end elsefilename
							}//end else titolo
					$txt .='</a>';
						}//fine else immagine	
					$txt .='</td>';
			
						}
					}
				}					
					$txt .='</div>';
					$txt .='</td></tr><tr><td></br /></td></tr></table>';		
break;			
	
}
	
	return $txt;
break;

	//case 1 Imagerotatorgallery
	case '1':
 
				if	 ( $params["trans"] == 0 ) {	$trans = "random";
			} elseif ( $params["trans"] == 1 ) {	$trans = "fade"; 
			} elseif ( $params["trans"] == 2 ) {	$trans = "blocks"; 
			} elseif ( $params["trans"] == 3 ) { 	$trans = "circles"; 
			} elseif ( $params["trans"] == 4 ) {	$trans = "bubbles"; 
			} elseif ( $params["trans"] == 5 ) {	$trans = "lines"; 
			} elseif ( $params["trans"] == 6 ) {	$trans = "slowfade"; 
				}

				if    ( $params['navigation'] == 1 ) { 	$nav = "true";	
			} else if ( $params["navigation"] == 0 ) {	$nav = "false"; 
				}

				if    ( $params['overstretch'] == 1 ) { $overstretch = "true";	
			} else if ( $params['overstretch'] == 0 ) {	$overstretch = "false"; 
				}	

				if    ( $params['shuffle'] == 1 ) { $shuffle = "true";	
			} else if ( $params['shuffle'] == 0 ) {	$shuffle = "false"; 
				}				
				
				if	  ( $params['movimento'] == 1 ) {	$mov = "true";	
			} else if ( $params["movimento"] == 0 ) {	$mov = "false"; 		
				}	
				
$txt='
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>
			   <table class="fototable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="middle">
							<div id="xcontainer" align="middle">
								<a href="http://www.macromedia.com/go/getflashplayer">
									"'. JText::_( 'Get the Flash Player' ).'"</a> 
									"'. JText::_( 'to see this gallery.' ).'"
							</div>	
						<script type="text/javascript">				
						var s1 = new SWFObject("' . JURI::root() .'components/com_morfeoshow/src/imagerotator.swf", "rotator", "'. $params['width'] .'","'. $params['height'] .'","7");
							s1.addParam("wmode", "transparent");
							s1.addVariable("file","'. JURI::root() .'images/morfeoshow/'. $row->folder .'/xml/imagerotator.xml");
							s1.addVariable("width","'. $params['width'] .'");
							s1.addVariable("height","'.  $params['height'] .'");
							s1.addVariable("transition","'. $trans .'");				
							s1.addVariable("shownavigation","'. $nav .'");	
							s1.addVariable("kenburns","'. $mov .'");
							s1.addVariable("rotatetime","'. $params['tempo'] .'");
							s1.addVariable("shuffle","'. $shuffle .'");							
							s1.addVariable("screencolor","0x'. $params['bkgnd'] .'");
							s1.addVariable("usefullscreen","false");
							s1.addVariable("overstretch","'. $overstretch .'");							
							s1.write("xcontainer");
							</script>
						</td>
					</tr>
				</table>
';	
				return $txt;	
break;

	//case 2 Imageviwergallery		
	case '2':
			$txt='
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>			
				<table border="0" cellpadding="0" cellspacing="0" width="100%" valign="top">
					<tr>
						<td style="float:middle;" valign="top">
					<div id="morfflashcontent" style="float:middle;" valign="top">
						<a href="http://www.macromedia.com/go/getflashplayer">
									"'. JText::_( 'Get the Flash Player' ).'"</a> 
									"'. JText::_( 'to see this gallery.' ).'"
					</div>
								<script type="text/javascript">
								var fo = new SWFObject("'. JURI::root() . 'components/com_morfeoshow/src/viewer.swf", "viewer", "'. $params["widthsw"] .'", "'. $params["heightsw"] .'", "8", "#000000");
			
								fo.addParam("wmode", "transparent");
								fo.addVariable("xmlDataPath", "'. JURI::root() .'images/morfeoshow/'. $row->folder .'/xml/gallery.xml");
								fo.addVariable("langOpenImage", "'. JText::_( 'Open Image in New Window.' ).'");
								fo.addVariable("langAbout", "'. JText::_( 'About.' ).'");	
								fo.addVariable("preloaderColor", "0x999999");
								fo.write("morfflashcontent");
								</script>
						</td>
					</tr>
				</table>
			';	
				return $txt;	
break;

	//case3 Postcardgallery
	case '3':

			$txt='
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>			
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td valign=top">
							<div id="morfyflashcontent" align="middle">
								<a href="http://www.macromedia.com/go/getflashplayer">
									"'.JText::_( 'Get the Flash Player' ).'"</a> 
									"'. JText::_( 'to see this gallery.' ).'"
							</div>
							<script type="text/javascript">
							var fo = new SWFObject("'. JURI::root() .'components/com_morfeoshow/src/postcard.swf", "postcard", "'. $params["widthpc"] .'", "'. $params["heightpc"] .'", "8", "' . $params["bkgnd2"] .'");	
								fo.addParam("wmode", "transparent");							
								fo.addVariable("langOpenImage", "Open Image in New Window");
								fo.addVariable("langAbout", "About");	
								fo.addVariable("xmlURL", "' .JURI::root() .'images/morfeoshow/' . $row->folder .'/xml/postcard.xml");					
								fo.write("morfyflashcontent");	
								</script>					
						</td>
					</tr>
				</table>
			';	
				return $txt;
break;

	//case4 Polaroidgallery
	case '4':

			$txt='
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>			
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="middle">
							<div id="morfyscreen" align="middle">
								<a href="http://www.macromedia.com/go/getflashplayer">
									"'.JText::_( 'Get the Flash Player' ).'"</a> 
									"'. JText::_( 'to see this gallery.' ).'"
							</div>
									<script type="text/javascript">
			//<![CDATA[
									var so = new SWFObject("'.JURI::root().'components/com_morfeoshow/src/polaroid.swf", "polaroid", "'.$params["widthpl"].'", "'. $params["heightpl"].'", "8", "'.$params["bkgnd3"].'");
			// specify the url to the xml-file, default is photos.xml
									so.addParam("wmode", "transparent");
									so.addVariable("xmlURL","'.JURI::root().'images/morfeoshow/'. $row->folder.'/xml/polaroid.xml");
									so.write("morfyscreen");
			//]]>
								</script>				
						</td>
					</tr>
				</table>
			';	
				return $txt;
break;

	//case5 Flickr
	case '5':
 
					if    ( $params['sort'] == 1 ) { 	$sort = "sort=relevance";	
				} else if ( $params["sort"] == 0 ) {	$sort = "sort="; 
				} 

				
$txt='
				<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
							<iframe align="center" src="http://www.flickr.com/slideShow/index.gne?user_id='.$params["user_id"].'&group_id='.$params["group_id"].'&text='.$params["text"].'&tags='.$params["tags"].'&set_id='.$params["set_id"].'&'.$sort.'" frameBorder="0" width="500" scrolling="no" height="500"></iframe>	
							</iframe>
						</td>
					</tr>
				</table>
';	
				return $txt;
break;

	//case6 Flickr 2
	case '6':
 
			  		if    ( $params['user_id'] == '' ) { 	$user = "";	
						} else {							$user = $params["user_id"]."/"; 
				} 
			 		if    ( $params['tags'] ) { 			$tags = "tags/".$params["tags"];	
						} else {							$tags = ""; 
				} 
			 		if    ( $params['set_id'] == '') { 		$set = "";	
						} else {							$set = "/sets/".$params["set_id"];
				} 
			 		if    ( $params['sort'] == 1 ) { 		$int = "/interesting";	
						} else {							$int = ""; 
				} 		
			 
$txt='
				<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
							<iframe align="center" src="http://www.flickr.com/photos/'.$user . $tags . $set .$int . '/show" frameBorder="0" width="730" scrolling="no" height="560">
							</iframe>
						</td>
					</tr>
				</table>
';	
				return $txt;
break;

	//case7 Flickr Map
	case '7':

			$txt='
				<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
							<iframe align="center" src="http://flickr.com/map/?&fLat='.$row->glat.'&fLon='.$row->glng.'&zl=5&map_type=hyb&order_by=interestingness" frameBorder="0" width="700" scrolling="no" height="550"></iframe>
							</iframe>
						</td>
					</tr>
				</table>
			';	
				return $txt;
break;

		//case8 Google Map
		case '8':
		//Recupera dati

		$latitudine 	= $row->glat;
		$longitudine 	= $row->glng;
		$zoom 			= $row->gzoom;
		$name 			= $row->name;
		$name 			= $row->luogo;
		$descrizione 	= $row->description;
		$gmapkey 		= $row->gmapkey;
				 $txt='
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>				 
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td align="center">
								<meta name="gmapkey" content="'.$gmapkey.'" />
						    <script src="'. JURI::root().'components/com_morfeoshow/src/js/gmapez-2.js" type="text/javascript"></script>
<div id="contenuto" style="padding-left:10px;padding-right:10px;padding-top:10px;">	  
							<div class="GMapEZ GLargeMapControl GMapTypeControl GScaleControl GOverviewMapControl" style="width: 600px; height: 480px;">
							<a href="' . ('http://maps.google.com/maps?ll=' . $latitudine . ',' . $longitudine . '&amp;spn=0.006130,0.239795&amp;') . '">
EXTENT
A OPEN
</a>
<div title="'.$name.'"
<table>		
							<tr>
								<td valign="top">
									<span style="font-size:14px;font-weight:bold;color:#004080;">'. $name .'</span><br />'. $descrizione .'	
							</tr>
</table>			
</div></div></div>		
</td>
</tr>
</table>
';
				return $txt;
break;

//case8 Picasa
case '9':
//Recupera dati	
?>		
<script type="text/javascript">
var pwi_username = "<?php echo $row->pusername ;?>";
var pwi_photosize = "<?php echo $row->pphotosize ;?>"; //return maximum size picture (see for supported format:  http://code.google.com/apis/picasaweb/reference.html#Parameters)
var pwi_thumbsize = "<?php echo $row->pthumbsize ;?>"; //size thumb /cropped(see for supported format:  http://code.google.com/apis/picasaweb/reference.html#Parameters)
var pwi_albumcols = "<?php echo $row->palbumcols ;?>"; // distribute thumbs on main page over x collums
var pwi_cols ="<?php echo $row->pcols ;?>"; // distribute thumbs on albumphotos page over x collums
var pwi_maxresults = "<?php echo $row->pmaxresults ;?>"; //maximum of pictures on albumphotos page
var pwi_maxalbums = "<?php echo $row->pmaxalbums ;?>"; //maximum of pictures on albumphotos page
var pwi_container_div = "#container";

function formatDate(dt) {
	var months = new Array(12);
	months[0] = "<?php echo JText::_( 'January' ) ?>";
	months[1] = "<?php echo JText::_( 'February' ) ?>";
	months[2] = "<?php echo JText::_( 'March' ) ?>";
	months[3] = "<?php echo JText::_( 'April' ) ?>";
	months[4] = "<?php echo JText::_( 'May' ) ?>";
	months[5] = "<?php echo JText::_( 'June' ) ?>";
	months[6] = "<?php echo JText::_( 'July' ) ?>";
	months[7] = "<?php echo JText::_( 'August' ) ?>";
	months[8] = "<?php echo JText::_( 'September' ) ?>";
	months[9] = "<?php echo JText::_( 'October' ) ?>";
	months[10] = "<?php echo JText::_( 'November' ) ?>";
	months[11] = "<?php echo JText::_( 'December' ) ?>";
	var today = new Date(Number(dt));
	var year = today.getYear();
	if (year < 1000) {
		year += 1900;
	};
	return (today.getDate() + " " + months[(today.getMonth())]+ " " + year);
}

function albums(j) { //returns the list of all albums for the user
	var scAlbums = new StringCat();
	scAlbums.push("<table align='center'><tr><td colspan='" + pwi_albumcols + "'><h3><?php echo JText::_( 'Albums' ) ?></h3></td></tr><tr>");
	for (var i = 0; i < j.feed.entry.length; i++) {
		var id_base = j.feed.entry[i].gphoto$id.$t;
		var album_date = formatDate(j.feed.entry[i].gphoto$timestamp.$t);
		scAlbums.push("<td valign=top align='center'><span class='small' a href='javascript:void(0)' onclick='javascript:$.historyLoad(\"" + id_base + "/1\")'><img src='" + j.feed.entry[i].media$group.media$thumbnail[0].url + "?imgmax=" + pwi_thumbsize + "&crop=0' class='pwimages' /></a>");
		scAlbums.push("<br /><a class='small' href='javascript:void(0)' onclick='javascript:$.historyLoad(\"" + id_base + "/1\")'>" + j.feed.entry[i].title.$t + "</a><br />" + album_date + "&nbsp;&nbsp;&nbsp;&nbsp;" + j.feed.entry[i].gphoto$numphotos.$t + " <?php echo JText::_( 'photos' ) ?></center></span></td>");
		if (i % pwi_albumcols == (pwi_albumcols - 1)) {
			scAlbums.push("</tr><tr><td colspan='" + pwi_albumcols + "'></td></tr><tr>");
		}
	}
	scAlbums.push("</tr></table>");
	pwi_storage_albums = scAlbums.toString();
	show(false, pwi_storage_albums);
}


function album(j) { //returns all photos in a specific album
	var scPhotos = new StringCat();
	 //get the number of photos in the album
	var np = j.feed.openSearch$totalResults.$t;
	var loc = j.feed.gphoto$location.$t;
	var desc = j.feed.subtitle.$t;
	var album_date = formatDate(j.feed.gphoto$timestamp.$t);
	var item_plural = "s";
	if (np == "1") {
		item_plural = "";
	}
	var len = j.feed.entry.length;
	pwi_currAlbumTitle = j.feed.title.$t;

	scPhotos.push("<center><table border=0><tr>");
	scPhotos.push("<tr><td colspan='" + pwi_cols + "'><a class='standard' href='#'><<< <?php echo JText::_( 'Albums' ) ?></a> &gt; " + j.feed.title.$t + "<br/>");
	scPhotos.push("<blockquote><div style='margin-left:3px'><h4>" + j.feed.title.$t + "</h4></div>");
	scPhotos.push("<div style='margin-left:3px'><i>" + np + " <?php echo JText::_( 'photo' ) ?>" + item_plural + ", " + album_date + ", " + loc + "</i></div>");
	scPhotos.push("<div style='margin-left:3px'><b>" + desc + "</b></div>");
	scPhotos.push("</td></tr><tr>");

	 //create paging navigation
	pageCount = (np / pwi_maxresults);
	var ppage = "<?php echo JText::_( 'photos' ) ?> | ",
	npage = "| <?php echo JText::_( 'next' ) ?>";
	if (pwi_page > 1) {
		ppage = "<a href='javascript:void(0)' onclick='$.historyLoad(\"" + pwi_currAlbum + "/" + (parseInt(pwi_page) - 1) + "\")'><?php echo JText::_( 'PREVIOUS' ) ?></a> | "
	};
	if (pwi_page < pageCount) {
		npage = "| <a href='javascript:void(0)' onclick='$.historyLoad(\"" + pwi_currAlbum + "/" + (parseInt(pwi_page) + 1) + "\")'><?php echo JText::_( 'next' ) ?></a>"
	};

	var navRow = new StringCat();
	navRow.push("<tr><td colspan='" + pwi_cols + "'>" + ppage + "<?php echo JText::_( 'Page' ) ?> ");
	for (var i = 1; i <= pageCount + 1; i++) {
		if (i == pwi_page) {
			navRow.push("<b>[" + (i) + "]</b> ");
		} else {
			navRow.push("<a href='javascript:void(0)' onclick='$.historyLoad(\"" + pwi_currAlbum + "/" + i + "\")'>" + (i) + "</a> ");
		};
	};
	navRow.push(npage + "</td></tr>");
	scPhotos.push(navRow.toString());
	for (var i = 0; i < len; i++) {
		var img_base = j.feed.entry[i].content.src;
		var id_base = j.feed.entry[i].gphoto$id.$t;
		var desc = j.feed.entry[i].summary.$t;
		var photoDate = j.feed.entry[i].exif$tags.exif$time ? formatDateTime(j.feed.entry[i].exif$tags.exif$time.$t) : j.feed.entry[i].published.$t;
		desc = photoDate + " - " + desc;
		scPhotos.push("<td valign=top><center><a href='" + img_base + "?imgmax=" + pwi_photosize + "&crop=0'  class='lightbox' title='" + desc + "'><img src='" + img_base + "?imgmax=" + pwi_thumbsize + "&crop=1' class='pwimages'/></a>");
		scPhotos.push("</center></td>");
		if (i % pwi_cols == (pwi_cols - 1)) {
			scPhotos.push("</tr><tr><td colspan=" + pwi_cols + "></td></tr><tr>");
		}
	}
	scPhotos.push("</tr>"+navRow+"</table></center>");
	pwi_storage_photos = scPhotos.toString();
	show(false, pwi_storage_photos);
}


function show(loading, data) {
	if (loading) {
		$(pwi_container_div).fadeOut('slow');
		$("#maincontent").block("<img src=\"<?php echo JURI::root()?>components/com_morfeoshow/images/loading.gif\"> <?php echo JText::_( 'Loading' ) ?> ...", {
			border: '3px solid #ccc'
		});
	} else {
		$("#maincontent").unblock();
		$(pwi_container_div).html(data).fadeIn('fast');
		$('a.lightbox').lightBox({
		overlayBgColor: '#fff',
		overlayOpacity: 0.6,
		imageLoading: "<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/load.gif",
		imageBtnClose:"<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/close.png",
		imageBtnPrev: "<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/prev.gif",
		imageBtnNext: "<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/next.gif",
		imageBlank:	"<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/blank.gif",
		containerResizeSpeed: 350,
		txtImage: "<?php echo JText::_( 'Images' ) ?>",
		txtOf: "<?php echo JText::_( 'of' ) ?>"
   });
	}
}

$(document).ready(function() {
	if(pwi_username == "<?php echo JText::_( 'picasa username missing' ) ?>"){
		alert('<?php echo JText::_( 'You must set one picasa username' ) ?>');
	}else{
		$.extend($.blockUI.defaults.overlayCSS, {
			backgroundColor: '#FFF'
		});
		$.ajaxSetup({
			cache: true
		});
		$.historyInit(fromHistory);
	}
});

</script>
<?php
$txt='
				<div id="pagebody">
					<div id="header"></div>
						<div id="maincontent">
							<div id="container"></div>
					   </div>
					<div id="footer"></div>
				</div>
';
				return $txt;

break;
//case flickr single
case '10':

	global $mainframe, $params_morfeo;

	require_once(JPATH_SITE.DS.'components'.DS.'com_morfeoshow'.DS.'tpl'.DS.'resources'.DS.'phpFlickr'.DS.'phpFlickr.php');
	
	$f 				= new phpFlickr($params_morfeo['flickrkey']); 
	$photoset_id 	= $params['set_id'];
	$photos 		= $f->photosets_getPhotos($photoset_id);	

	$txt='';
	$txt .='<style>
#gallflickr ul {
	margin: 0px;
	padding: 0px;
	list-style-type: none;
}
#gallflickr li {
	float: left;
	margin: 10px;
}
#gallflickr li a {
}
</style>
<table align="left" valign="top" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td>
			<div id="gallflickr">
				<ul>
';
					foreach ($photos['photo'] as $photo): 
	$txt .='<li><a class="gallflickr" rel="one-big-group" href="'.$f->buildPhotoURL($photo, 'medium').'"><img src="'.$f->buildPhotoURL($photo, 'square').'" alt="'.$photo['title'].'" title="'.$photo['title'].'" /></a></li>';
				 endforeach;
	$txt .='</ul>
			</div>
		</td>
	</tr>
</table>';

return $txt;
break;

//case Picasa single
case '11':

	global $mainframe, $params_morfeo;

	$userid		 	=  $params['user'];
	$gallery 		=  $params['psingle'];
	$background		=  $params['pback'];	
	$ph				=  $params['ph'];
	$pw				=  $params['pw'];

	$txt='<table class="fltable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center">
<embed pluginspage = "http://www.macromedia.com/go/getflashplayer" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" flashvars="host=picasaweb.google.com&amp;RGB=0x'. $background.'&amp;feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F'.$userid.'%2Falbumid%2F'.$gallery.'%3Fkind%3Dphoto%26alt%3Drss" wmode="transparent" type ="application/x-shockwave-flash" height ="'.$ph.'" width="'.$pw.'"></embed>
						</td>
					</tr>
				</table>
';
return $txt;
break;		
} 

}
