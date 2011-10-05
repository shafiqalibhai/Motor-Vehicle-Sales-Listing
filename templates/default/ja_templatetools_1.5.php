<?php
/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
define ('JA_TOOL_COLOR', 'ja_color');
define ('JA_TOOL_SCREEN', 'ja_screen');
define ('JA_TOOL_FONT', 'ja_font');
define ('JA_TOOL_LAYOUT', 'ja_layout');
define ('JA_TOOL_BODY', 'ja_body');
define ('JA_TOOL_MENU', 'ja_menu');
define ('JA_TOOL_USER', 'usertool');
class JA_Tools {
	var $_params_cookie = array(); //Params will store in cookie for user select. Default: store all params
	var $_tpl = null;
	var $template = '';
	//This default value could override by setting with function setScreenSizes() and setColorThemes()
	var $_ja_layouts = null;
	var $_ja_body_themes = null;
	var $_ja_screen_sizes = null;
	var $_ja_color_themes = null;

	function JA_Tools ($template, $_params_cookie=null) {
		$this->_tpl = $template;
		$template->_tools = $this;
		$this->template = $template->template;
		if(!$_params_cookie) {
			$_params_cookie = array();
		}
		
		if ($this->getParam('usertool_screen') && !in_array(JA_TOOL_SCREEN, $_params_cookie)) {
			$_params_cookie[]=JA_TOOL_SCREEN;
		}
		if ($this->getParam('usertool_font') && !in_array(JA_TOOL_FONT, $_params_cookie)) {
			$_params_cookie[]=JA_TOOL_FONT;
		}
		if ($this->getParam('usertool_color') && !in_array(JA_TOOL_COLOR, $_params_cookie)) {
			$_params_cookie[]=JA_TOOL_COLOR;
		}
		if ($this->getParam('usertool_layout') && !in_array(JA_TOOL_LAYOUT, $_params_cookie)) {
			$_params_cookie[]=JA_TOOL_LAYOUT;
		}
		if ($this->getParam('usertool_body') && !in_array(JA_TOOL_BODY, $_params_cookie)) {
			$_params_cookie[]=JA_TOOL_BODY;
		}
		if ($this->getParam('usertool_bg') && !in_array('ja_bodybg', $_params_cookie)) {
			$_params_cookie[]='ja_bodybg';
		}
		
		foreach ($_params_cookie as $k) {
			$this->_params_cookie[$k] = $this->_tpl->params->get($k);
		}

		$this->getUserSetting();
	}

	function getUserSetting(){
		$exp = time() + 60*60*24*355;
		if (isset($_COOKIE[$this->template.'_tpl']) && $_COOKIE[$this->template.'_tpl'] == $this->template){
			foreach($this->_params_cookie as $k=>$v) {
				$kc = $this->template."_".$k;
				if (isset($_GET[$k])){
					$v = $_GET[$k];
					setcookie ($kc, $v, $exp, '/');
				}else{
					if (isset($_COOKIE[$kc])){
						$v = $_COOKIE[$kc];
					}
				}
				$this->setParam($k, $v);
			}

		}else{
			@setcookie ($this->template.'_tpl', $this->template, $exp, '/');
		}
		return $this;
	}

	function getParam ($param, $default='') {
		if (isset($this->_params_cookie[$param])) {
			return $this->_params_cookie[$param];
		}
		return $this->_tpl->params->get($param, $default);
	}

	function setParam ($param, $value) {
		$this->_params_cookie[$param] = $value;
	}

	function getCurrentURL(){
		$cururl = JRequest::getURI();
		if(($pos = strpos($cururl, "index.php"))!== false){
			$cururl = substr($cururl,$pos);
		}
		$cururl =  JRoute::_($cururl, true, 0);
		return $cururl;
	}

	function genToolMenu($ja_tools, $imgext = 'gif'){
		if ($ja_tools & 1){//show screen tools
			?>
			<ul class="ja-usertools-screen">
			<?php
			foreach ($this->_ja_screen_sizes as $ja_screen_size) {
				echo "
				<li><img style=\"cursor: pointer;\" src=\"".$this->templateurl()."/images/".strtolower($ja_screen_size).( ($this->getParam(JA_TOOL_SCREEN)==$ja_screen_size) ? "-hilite" : "" ).".".$imgext."\" title=\"".$ja_screen_size."\" alt=\"".$ja_screen_size."\" id=\"ja-tool-".$ja_screen_size."\" onclick=\"switchTool('".$this->template."_".JA_TOOL_SCREEN."','$ja_screen_size');return false;\" /></li>
				";
			} ?>
			</ul>
		<?php
		}
  	if ($ja_tools & 2){//show font tools
  		?>
  		<ul class="ja-usertools-font">
  		<li><img style="cursor: pointer;" title="<?php echo JText::_('Increase font size');?>" src="<?php echo $this->templateurl();?>/images/user-increase.<?php echo $imgext;?>" alt="<?php echo JText::_('Increase font size');?>" id="ja-tool-increase" onclick="switchFontSize('<?php echo $this->template."_".JA_TOOL_FONT;?>','inc'); return false;" /></li>
  		<li><img style="cursor: pointer;" title="<?php echo JText::_('Default font size');?>" src="<?php echo $this->templateurl();?>/images/user-reset.<?php echo $imgext;?>" alt="<?php echo JText::_('Default font size');?>" id="ja-tool-reset" onclick="switchFontSize('<?php echo $this->template."_".JA_TOOL_FONT;?>',<?php echo $this->_tpl->params->get(JA_TOOL_FONT);?>); return false;" /></li>
  		<li><img style="cursor: pointer;" title="<?php echo JText::_('Decrease font size');?>" src="<?php echo $this->templateurl();?>/images/user-decrease.<?php echo $imgext;?>" alt="<?php echo JText::_('Decrease font size');?>" id="ja-tool-decrease" onclick="switchFontSize('<?php echo $this->template."_".JA_TOOL_FONT;?>','dec'); return false;" /></li>
  		</ul>
  		<script type="text/javascript">var CurrentFontSize=parseInt('<?php echo $this->getParam(JA_TOOL_FONT);?>');</script>
  		
  		<?php
    }

		if ($ja_tools & 4){//show color tools
			?>
			<ul class="ja-usertools-color">
			<?php
			foreach ($this->_ja_color_themes as $ja_color_theme) {
				echo "
				<li><img style=\"cursor: pointer;\" src=\"".$this->templateurl()."/images/".strtolower($ja_color_theme).( ($this->getParam(JA_TOOL_COLOR)==$ja_color_theme) ? "-hilite" : "" ).".".$imgext."\" title=\"".$ja_color_theme." color\" alt=\"".$ja_color_theme." color\" id=\"ja-tool-".$ja_color_theme."color\" onclick=\"switchTool('".$this->template."_".JA_TOOL_COLOR."','$ja_color_theme');return false;\" /></li>
				";
			} ?>
			</ul>
		<?php
		}

		if ($ja_tools & 8){//show LAYOUT tools
			?>
			<ul class="ja-usertools-layout">
			<?php
			foreach ($this->_ja_layouts as $ja_layout) {
				echo "
				<li><img style=\"cursor: pointer;\" src=\"".$this->templateurl()."/images/".strtolower($ja_layout).( ($this->getParam(JA_TOOL_LAYOUT)==$ja_layout) ? "-hilite" : "" ).".".$imgext."\" title=\"".JText::_($ja_layout)."\" alt=\"".JText::_($ja_layout)."\" id=\"ja-tool-".$ja_layout."\" onclick=\"switchTool('".$this->template."_".JA_TOOL_LAYOUT."','$ja_layout');return false;\" /></li>
				";
			} ?>
			</ul>
		<?php
		}

		if ($ja_tools & 16){//show LAYOUT tools
			?>
			<ul class="ja-usertools-body">
			<?php
			foreach ($this->_ja_body_themes as $ja_body_theme) {
				echo "
				<li><img style=\"cursor: pointer;\" src=\"".$this->templateurl()."/images/".strtolower($ja_body_theme).( ($this->getParam(JA_TOOL_BODY)==$ja_body_theme) ? "-hilite" : "" ).".".$imgext."\" title=\"".JText::_($ja_body_theme)."\" alt=\"".JText::_($ja_body_theme)."\" id=\"ja-tool-".$ja_body_theme."\" onclick=\"switchTool('".$this->template."_".JA_TOOL_BODY."','$ja_body_theme');return false;\" /></li>
				";
			} ?>
			</ul>
		<?php
		}
  	
		if ($ja_tools & 32){//show mainbody function
  		?>
  		<ul class="ja-usertools-expand">
  		<li id="ja-mainbody-resize"></li>
  		</ul>
  		<?php
    }
    
		if ($ja_tools & 64){//show module functions
  		?>
  		<div class="ja-usertools-modfunc">
  		<a href="" title="<?php echo JText::_('Reset Module Status');?>" onclick="switchTool('ja-ordercolumn','-'); return false;" ><?php echo JText::_('Reset Module Status');?></a>
  		</div>
  		<?php
    }
		
		if ($ja_tools & 128){//show module functions
			//Get background
			$path = dirname(__FILE__).DS.'images'.DS.'background';
			$sel = $this->getParam("ja_bodybg");
			$imgFiles 	= JFolder::files( $path );
			$imageFile = array();
			$i = 0;
			foreach ($imgFiles as $file){
				$i_f 	= $path .DS. $file;
				if ( eregi( "bmp|gif|jpg|png|jpeg", strtolower($file) ) && is_file( $i_f ) ) {
					$thumb = $this->jaImgResize ($path .DS. $file, 40,40);
					//$thumb = '';
					$imageFile[] = array('file'=>$file, 'thumb'=>$thumb);
				}
			}
  		?>
  		<div class="ja-usertools-bgswitcher">
  		<?php 
			foreach ($imageFile as $file){
				$attr = 'onClick="switchTool(\''.$this->template.'_ja_bodybg\', \''.$file['file'].'\');"';
				echo "<img src=\"".$this->baseurl().'/'.$file['thumb']."\" $attr />";
			}
			$attr = 'onChange="switchTool(\''.$this->template.'_ja_bodybg\', this.options[this.selectedIndex].value);"';
			echo JHTML::_('select.genericlist',  $imageFile, 'bgswitcher', $attr, 'file', 'file', $sel);
			?>
  		</div>
  		<?php
    }
	}

	function setLayouts ($_array_layouts) {
		$this->_ja_layouts = $_array_layouts;
	}

	function setBodyThemes ($_array_body_themes) {
		$this->_ja_body_themes = $_array_body_themes ;
	}

	function setScreenSizes ($_array_screen_sizes) {
		$this->_ja_screen_sizes = $_array_screen_sizes;
	}

	function setColorThemes ($_array_color_themes) {
		$this->_ja_color_themes = $_array_color_themes;
	}

	function getCurrentMenuIndex(){
		$Itemid = JRequest::getInt( 'Itemid');
		$database		=& JFactory::getDBO();
		$id = $Itemid;
		$menutype = 'mainmenu';
		$ordering = '0';
		while (1){
			$sql = "select parent, menutype, ordering from #__menu where id = $id limit 1";
			$database->setQuery($sql);
			$row = null;
			$row = $database->loadObject();
			if ($row) {
				$menutype = $row->menutype;
				$ordering = $row->ordering;
				if ($row->parent > 0)
				{
					$id = $row->parent;
				}else break;
			}else break;
		}

		$user	=& JFactory::getUser();
		if (isset($user))
		{
			$aid = $user->get('aid', 0);
			$sql = "SELECT count(*) FROM #__menu AS m"
			. "\nWHERE menutype='". $menutype ."' AND published='1' AND access <= '$aid' AND parent=0 and ordering < $ordering";
		} else {
			$sql = "SELECT count(*) FROM #__menu AS m"
			. "\nWHERE menutype='". $menutype ."' AND published='1' AND parent=0 and ordering < $ordering";
		}
		$database->setQuery($sql);

		return $database->loadResult();
	}

	function calSpotlight ($spotlight, $totalwidth=100, $specialwidth=0, $special='left') {

		/********************************************
		$spotlight = array ('position1', 'position2',...)
		*********************************************/
		$modules = array();
		$modules_s = array();
		foreach ($spotlight as $position) {
			if( $this->_tpl->countModules ($position) ){
				$modules_s[] = $position;
			}
			$modules[$position] = array('class'=>'-full','width'=>$totalwidth.'%');
		}

		if (!count($modules_s)) return null;
		if ($specialwidth) {
			if (count($modules_s)>1) {
				$width = round(($totalwidth-$specialwidth)/(count($modules_s)-1),1) . "%";
				$specialwidth = $specialwidth . "%";
			}else{
				$specialwidth = $totalwidth . "%";
			}
		}else{
			$width = (round($totalwidth/(count($modules_s)),2)) . "%";
			$specialwidth = $width;
		}

		if (count ($modules_s) > 1){
			$modules[$modules_s[0]]['class'] = "-left";
			$modules[$modules_s[0]]['width'] = ($special=='left')?$specialwidth:$width;
			$modules[$modules_s[count ($modules_s) - 1]]['class'] = "-right";
			$modules[$modules_s[count ($modules_s) - 1]]['width'] = ($special=='right')?$specialwidth:$width;
			for ($i=1; $i<count ($modules_s) - 1; $i++){
				$modules[$modules_s[$i]]['class'] = "-center";
				$modules[$modules_s[$i]]['width'] = $width;
			}
		}
		return $modules;
	}

	function isIE6 () {
		$msie='/msie\s(5\.[5-9]|[6]\.[0-9]*).*(win)/i';
		return isset($_SERVER['HTTP_USER_AGENT']) &&
			preg_match($msie,$_SERVER['HTTP_USER_AGENT']) &&
			!preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT']);
	}
	
	function isIE () {
		$msie='/msie/i';
		return isset($_SERVER['HTTP_USER_AGENT']) &&
			preg_match($msie,$_SERVER['HTTP_USER_AGENT']) &&
			!preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT']);
	}

	function isOP () {
		return isset($_SERVER['HTTP_USER_AGENT']) &&
			preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT']);
	}

  function noBG4IE6() {
		if ($this->isIE6())
		echo ' style="background: none;"';
	}

	function baseurl(){
		return JURI::base();
	}

	function templateurl(){
		return JURI::base()."templates/".$this->template;
	}

	function getRandomImage ($img_folder) {
		$imglist=array();

		mt_srand((double)microtime()*1000);

		//use the directory class
		$imgs = dir($img_folder);

		//read all files from the  directory, checks if are images and ads them to a list (see below how to display flash banners)
		while ($file = $imgs->read()) {
			if (eregi("gif", $file) || eregi("jpg", $file) || eregi("png", $file))
				$imglist[] = $file;
		}
		closedir($imgs->handle);

		if(!count($imglist)) return '';

		//generate a random number between 0 and the number of images
		$random = mt_rand(0, count($imglist)-1);
		$image = $imglist[$random];

		return $image;
	}

	function isFrontPage(){
		return (JRequest::getCmd( 'option' )=='com_content' && JRequest::getCmd( 'view' ) == 'frontpage') ;
	}
	
	function isContentEdit() {
		return (JRequest::getCmd( 'option' )=='com_content' && JRequest::getCmd( 'view' ) == 'article' && (JRequest::getCmd( 'task' ) == 'edit' || JRequest::getCmd( 'layout' ) == 'form'));
	}
	
	function sitename() {
		$config = new JConfig();
		return $config->sitename;
	}

	function genMenuHead(){
		$html = "";
		if ($this->getParam(JA_TOOL_MENU)== '2') {
				$html = '<link href="'.$this->templateurl().'/ja_menus/ja_cssmenu/ja-sosdmenu.css" rel="stylesheet" type="text/css" />
					<script language="javascript" type="text/javascript" src="'. $this->templateurl().'/ja_menus/ja_cssmenu/ja.cssmenu.js"></script>';
		} else if ($this->getParam(JA_TOOL_MENU) == 3) {
			$html = '<link href="'.$this->templateurl().'/ja_menus/ja_scriptdlmenu/ja-scriptdlmenu.css" rel="stylesheet" type="text/css" />
					<script language="javascript" type="text/javascript" src="'.$this->templateurl().'/ja_menus/ja_scriptdlmenu/ja-scriptdlmenu.js"></script>';
		} else if ($this->getParam(JA_TOOL_MENU) == 4) {
			$html = '<link href="'.$this->templateurl().'/ja_menus/ja_moomenu/ja-moomenu.css" rel="stylesheet" type="text/css" />
						<script language="javascript" type="text/javascript" src="'.$this->templateurl().'/ja_menus/ja_moomenu/ja.moomenu.js"></script>';
		} else { //Default
				$html = '<link href="'.$this->templateurl().'/ja_menus/ja_splitmenu/ja-splitmenu.css" rel="stylesheet" type="text/css" />';
		}

		if ($this->getParam('usertool_font')){
		?>
			<script type="text/javascript">
			var currentFontSize = <?php echo $this->getParam(JA_TOOL_FONT); ?>;
			</script>
		<?php
		}
		echo $html;
	}
	
	function extractImage( &$row, $autoresize, $width = 0, $height = 0) {
		$regex = '/<img ([^\>]*)>/';
		//$regex = '#<\s*img [^\>]*src\s*=\s*(["\'])(.*?)\1#im';
		preg_match ($regex, $row->text, $matches);
		if(!count($matches)) preg_match ($regex, $row->fulltext, $matches);
		$images = (count($matches)) ? $matches : array();
		$image = '';
		
		if (count($images)) {
			$image = trim($images[1]);
			$params = JA_Tools::parseParams ($image);
		}
		if ($image) {
			if ($autoresize && function_exists('imagecreatetruecolor') 
				&& ($image1 = JA_Tools::processImage ( $params['src'], $width, $height ))) {
					//$image = "<img src=\"".$image1."\" alt=\"{$row->title}\" $align />";
					$params['src'] = $image1;
			} else {
				if ($width) $params['width'] = $width;
				if ($height) $params['height'] = $height;
			}
			$image = '';
			foreach ($params as $k=>$v) $image .= " $k=\"$v\"";
			$image = "<img$image />";
		} else $image = '';

		$regex1 = "/\<img[^\>]*>/";
		$row->text = preg_replace( $regex1, '', $row->text );
		$regex1 = "/<div class=\"mosimage\".*<\/div>/";
		$row->text = preg_replace( $regex1, '', $row->text );
		return $image;
	}

	function processImage ( &$img, $width, $height, $crop=1) {
		if(!$img) return;
		
		$img = str_replace(JURI::base(),'',$img);
		$img = str_replace("'",'',$img);
		$img = rawurldecode($img);
		$imagesurl = (file_exists(JPATH_SITE .'/'.$img)) ? JA_Tools::jaResize($img,$width,$height, $crop) :  '' ;
		return $imagesurl;
	}
	
	function jaResize($image,$max_width,$max_height, $crop=1){
		$path =JPATH_SITE; 
		$imgInfo = getimagesize($path.'/'.$image);
		$width = $imgInfo[0];
		$height = $imgInfo[1];
		if(!$max_width && !$max_height) {
			$max_width = $width;
			$max_height = $height;
		}else{
			if(!$max_width) $max_width = 1000;
			if(!$max_height) $max_height = 1000;
		}
		$x_ratio = $max_width / $width;
		$y_ratio = $max_height / $height;
		$dst = new stdClass();
		$src = new stdClass();
		$src->y = $src->x = 0;
		$dst->y = $dst->x = 0;
		if ($crop) {
			$dst->w = $max_width;
			$dst->h = $max_height;
			if (($width <= $max_width) && ($height <= $max_height) ) {
				$src->w = $max_width;
				$src->h = $max_height;
			}else{
				if ($x_ratio < $y_ratio) {
					$src->w = ceil($max_width/$y_ratio);
					$src->h = $height;
				} else {
					$src->w = $width;
					$src->h = ceil($max_height/$x_ratio);
				}
			}
			$src->x = floor(($width-$src->w)/2);
			$src->y = floor(($height-$src->h)/2);
		} else {
			$src->w = $width;
			$src->h = $height;
			if (($width <= $max_width) && ($height <= $max_height) ) {
				$dst->w = $width;
				$dst->h = $height;
			} else if (($x_ratio * $height) < $max_height) {
				$dst->h = ceil($x_ratio * $height);
				$dst->w = $max_width;
			} else {
				$dst->w = ceil($y_ratio * $width);
				$dst->h = $max_height;
			}
		}

		$ext = strtolower(substr(strrchr($image, '.'), 1)); // get the file extension
		$rzname = strtolower(substr($image, 0, strpos($image,'.')))."_{$dst->w}_{$dst->h}.{$ext}"; // get the file extension
		//
		$resized = $path.'/images/resized/'.$rzname; 
		if(file_exists($resized)){
			$smallImg = getimagesize($resized);
			if (($smallImg[0] <= $dst->w && $smallImg[1] == $dst->h) ||
				($smallImg[1] <= $dst->h && $smallImg[0] == $dst->w)) {
					return "images/resized/".$rzname;
			}
		}
		if(!file_exists($path.'/images/resized/') && !mkdir($path.'/images/resized/',0755)) return '';
		$folders = explode('/',strtolower($image));
		$tmppath = $path.'/images/resized/';
		for($i=0;$i < count($folders)-1; $i++){
			if(!file_exists($tmppath.$folders[$i]) && !mkdir($tmppath.$folders[$i],0755)) return '';
			$tmppath = $tmppath.$folders[$i].'/';
		}	

				
	 switch ($imgInfo[2]) {
		case 1: $im = imagecreatefromgif($path.'/'.$image); break;
		case 2: $im = imagecreatefromjpeg($path.'/'.$image);  break;
		case 3: $im = imagecreatefrompng($path.'/'.$image); break;
		default: return '';  break;
	 }
				
	 $newImg = imagecreatetruecolor($dst->w, $dst->h);
	 
	 /* Check if this image is PNG or GIF, then set if Transparent*/  
	 if(($imgInfo[2] == 1) OR ($imgInfo[2]==3)){
		imagealphablending($newImg, false);
		imagesavealpha($newImg,true);
		$transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
		imagefilledrectangle($newImg, 0, 0, $dst->w, $dst->h, $transparent);
	 }
	 imagecopyresampled($newImg, $im, $dst->x, $dst->y, $src->x, $src->y, $dst->w, $dst->h, $src->w, $src->h);

		//Generate the file, and rename it to $newfilename
	 switch ($imgInfo[2]) {
		case 1: imagegif($newImg,$resized); break;
		case 2: imagejpeg($newImg,$resized, 90);  break;
		case 3: imagepng($newImg,$resized); break;
		default: return '';  break;
	 }
	 
	 return "images/resized/".$rzname;

	}	
	
	function parseParams($params) {
		$params = html_entity_decode($params, ENT_QUOTES);
		$regex = "/\s*([^=\s]+)\s*=\s*('([^']*)'|\"([^\"]*)\"|([^\s]*))/";
		preg_match_all($regex, $params, $matches);
		
		 $paramarray = null;
		 if(count($matches)){
			$paramarray = array();
				for ($i=0;$i<count($matches[1]);$i++){ 
					$key = $matches[1][$i];
					$val = $matches[3][$i]?$matches[3][$i]:($matches[4][$i]?$matches[4][$i]:$matches[5][$i]);
					$paramarray[$key] = $val;
				}
			}
			return $paramarray;
	}    
}
?>
