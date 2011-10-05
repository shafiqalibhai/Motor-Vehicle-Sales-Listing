<?php

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

require_once(JPATH_BASE .DS. 'components'. DS . 'com_smartsite' . DS . 'lib' . DS . 'jmodulehelpersmartsite.php');

class JDocumentRendererSmart_Modules extends JDocumentRenderer
{
	/**
	 * Renders multiple modules script and returns the results as a string
	 *
	 * @access public
	 * @param string 	$name		The position of the modules to render
	 * @param array 	$params		Associative array of values
	 * @return string	The output of the script
	 */
	function render( $position, $params = array(), $content = null )
	{
		$renderer =&  $this->_doc->loadRenderer('module');
                $postfix = '';
		if (!isset($GLOBALS['smartsite_postfix'])) {
		      $GLOBALS['smartsite_postfix'] = 1; 
		      $postfix = ' first';
		}
		if (!isset($params['styling'])) $params['styling'] = '';
		$contents = '<div class="yui-u'.$postfix.'" id="c_'.$position.'"';
		if ($params['styling'] != '') $contents .='style="'.$params['styling'].'"'; 
		$contents .='>';  

		foreach (JModuleHelperSmartsite::getModules($position) as $mod)  {	    
			$contents .= $renderer->render($mod, $params, $content);
		}

		$contents .= '<div class="dm"></div></div>';		
		
		return $contents;
	}
}