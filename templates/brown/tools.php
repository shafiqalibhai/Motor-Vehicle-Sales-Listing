<?php
define ('JA_TOOL_COLOR', 'ja_color');
define ('JA_TOOL_SCREEN', 'ja_screen');
define ('JA_TOOL_FONT', 'ja_font');
define ('JA_TOOL_LAYOUT', 'ja_layout');
define ('JA_TOOL_BODY', 'ja_body');
class Tools {
	var $_params_cookie = array(); //Params will store in cookie for user select. Default: store all params
	var $_tpl = null;
	var $template = '';
	//This default value could override by setting with function setScreenSizes() and setColorThemes()

	function Tools ($template, $_params_cookie=null) {
		$this->_tpl = $template;
		$this->template = $template->template;
		if(!$_params_cookie) {
			$_params_cookie = array();
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
	function calSpotlight ($spotlight, $totalwidth=100, $firstwidth=0) {
		$modules = array();
		$modules_s = array();
		foreach ($spotlight as $position) {
			if( $this->_tpl->countModules ($position) ){
				$modules_s[] = $position;
			}
			$modules[$position] = array('class'=>'-full');
		}
		if (!count($modules_s)) return null;
		if ($firstwidth) {
			if (count($modules_s)>1) {
				$width = round(($totalwidth-$firstwidth)/(count($modules_s)-1),1) . "%";
				$firstwidth = $firstwidth . "%";
			}else{
				$firstwidth = $totalwidth . "%";
			}
		}else{
			$width = (round($totalwidth/(count($modules_s)),2)) . "%";
			$firstwidth = $width;
		}
		if (count ($modules_s) > 1){
			$modules[$modules_s[0]]['class'] = "-left";
			$modules[$modules_s[0]]['width'] = $firstwidth;
			$modules[$modules_s[count ($modules_s) - 1]]['class'] = "-right";
			$modules[$modules_s[count ($modules_s) - 1]]['width'] = $width;
			for ($i=1; $i<count ($modules_s) - 1; $i++){
				$modules[$modules_s[$i]]['class'] = "-center";
				$modules[$modules_s[$i]]['width'] = $width;
			}
		}
		return $modules;
	}
	function baseurl(){
		return JURI::base();
	}
	function templateurl(){
		return JURI::base()."templates/".$this->template;
	}
	function isFrontPage(){
		return (JRequest::getCmd( 'view' ) == 'frontpage') ;
	}
	function sitename() {
		$config = new JConfig();
		return $config->sitename;
	}
}
?>
