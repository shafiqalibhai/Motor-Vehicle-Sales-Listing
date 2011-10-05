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

	function showSettings( $option ){
	global $params_morfeo, $rows;
		include_once( JPATH_COMPONENT.DS.'settings.php' );
		
		$scelta = array(
			JHTML::_( 'select.option', '0', JText::_( 'Flash Frontent List' ) ),	
			JHTML::_( 'select.option', '1', JText::_( 'Classic Frontent List' ) ),
			);		
		$lists['scelta'] = JHTML::_('select.genericlist', $scelta, 'frontend', 'class="inputbox" size="1"', 'value', 'text', 'frontend', $params_morfeo["frontend"]);
		
		HTML_morfeoshow::showSettings( $option, $params_morfeo, $rows, $lists );
}

	function saveSettings( $option, $task ) {
	global $mainframe;
	
		$configfile = JPATH_COMPONENT.DS.'settings.php';
		@chmod( $configfile, 0766 );

		$permission = is_writable( $configfile );
			if( !$permission ) {
				$msg = JText::_('Settings file is not writeable');
		$mainframe->redirect( 'index.php?option=' . $option .'&task=showSettings', $msg);
		break;
	}

	$txt  = "";
	$txt .= "/********************************************\n";
	$txt .= "* MorfeoShow  - Joomla! Component       	  \n";
	$txt .= "* Copyright (C) 2008 by www.joomlaitalia.com \n";
	$txt .= "* --------- All Rights Reserved ------------ \n";  
	$txt .= "* Homepage   : www.joomlaitalia.com          \n";
	$txt .= "* License    : GNU/GPL License               \n";
	$txt .= "*********************************************/\n";
	$txt .= "\n";
	$txt .= "defined('_JEXEC') or die( 'Direct Access to this location is not allowed.' );\n";
	$txt .= "\$params_morfeo					= array();\n";
	$txt .= "\$params_morfeo['googlekey']		= \"".JRequest::getVar( 'googlekey' )."\";\n";	
	$txt .= "\$params_morfeo['user_id']			= \"".JRequest::getVar( 'user_id' )."\";\n";
	$txt .= "\$params_morfeo['max_img']			= \"".JRequest::getVar( 'max_img' )."\";\n";	
	$txt .= "\$params_morfeo['frontend']		= \"".JRequest::getVar( 'frontend' )."\";\n";
	$txt .= "\$params_morfeo['logo']			= \"".JRequest::getVar( 'logo' )."\";\n";	
	$txt .= "\$params_morfeo['minilistw']		= \"".JRequest::getVar( 'minilistw' )."\";\n";	
	$txt .= "\$params_morfeo['minilisth']		= \"".JRequest::getVar( 'minilisth' )."\";\n";
	$txt .= "\$params_morfeo['minithumbw']		= \"".JRequest::getVar( 'minithumbw' )."\";\n";	
	$txt .= "\$params_morfeo['minithumbh']		= \"".JRequest::getVar( 'minithumbh' )."\";\n";	
	$txt .= "\$params_morfeo['minimainw']		= \"".JRequest::getVar( 'minimainw' )."\";\n";	
	$txt .= "\$params_morfeo['minimainh']		= \"".JRequest::getVar( 'minimainh' )."\";\n";
	$txt .= "\$params_morfeo['imagesw']			= \"".JRequest::getVar( 'imagesw' )."\";\n";	
	$txt .= "\$params_morfeo['imagesh']			= \"".JRequest::getVar( 'imagesh' )."\";\n";	
	$txt .= "\$params_morfeo['cropw']			= \"".JRequest::getVar( 'cropw' )."\";\n";	
	$txt .= "\$params_morfeo['croph']			= \"".JRequest::getVar( 'croph' )."\";\n";
	$txt .= "\$params_morfeo['resizew']			= \"".JRequest::getVar( 'resizew' )."\";\n";	
	$txt .= "\$params_morfeo['resizeh']			= \"".JRequest::getVar( 'resizeh' )."\";\n";
	$txt .= "\$params_morfeo['shulang']			= \"".JRequest::getVar( 'shulang' )."\";\n";	
	$txt .= "\$params_morfeo['shuadat']			= \"".JRequest::getVar( 'shuadat' )."\";\n";	
	$txt .= "\$params_morfeo['titolo']			= \"".JRequest::getVar( 'titolo' )."\";\n";	
	$txt .= "\$params_morfeo['larghezza']		= \"".JRequest::getVar( 'larghezza' )."\";\n";		
	$txt .= "\$params_morfeo['back']			= \"".JRequest::getVar( 'back' )."\";\n";	
	$txt .= "\$params_morfeo['gapi']			= \"".JRequest::getVar( 'gapi' )."\";\n";
	$txt .= "\$params_morfeo['orderback']		= \"".JRequest::getVar( 'orderback' )."\";\n";	
	$txt .= "\$params_morfeo['flickrkey']		= \"".JRequest::getVar( 'flickrkey' )."\";\n";	
	$txt .= "\$params_morfeo['description']		= \"".JRequest::getVar( 'description' )."\";\n";
	$txt .= "\$params_morfeo['style']			= \"".JRequest::getVar( 'style' )."\";\n";	
	$txt .= "\$params_morfeo['style0']			= \"".JRequest::getVar( 'style0' )."\";\n";	
	$txt .= "\$params_morfeo['style1']			= \"".JRequest::getVar( 'style1' )."\";\n";	
	$txt .= "\$params_morfeo['style2']			= \"".JRequest::getVar( 'style2' )."\";\n";	
	$txt .= "\$params_morfeo['maximgh']			= \"".JRequest::getVar( 'maximgh' )."\";\n";
	$txt .= "\$params_morfeo['maximgw']			= \"".JRequest::getVar( 'maximgw' )."\";\n";	
	$txt .= "\$params_morfeo['txtcolor']		= \"".JRequest::getVar( 'txtcolor' )."\";\n";
	$txt .= "\$params_morfeo['framecolor']		= \"".JRequest::getVar( 'framecolor' )."\";\n";	
	$txt .= "\$params_morfeo['framewidth']		= \"".JRequest::getVar( 'framewidth' )."\";\n";
	$txt .= "\$params_morfeo['stagepadding']	= \"".JRequest::getVar( 'stagepadding' )."\";\n";	
	$txt .= "\$params_morfeo['navpadding']		= \"".JRequest::getVar( 'navpadding' )."\";\n";
	$txt .= "\$params_morfeo['cols']			= \"".JRequest::getVar( 'cols' )."\";\n";	
	$txt .= "\$params_morfeo['rows']			= \"".JRequest::getVar( 'rows' )."\";\n";
	$txt .= "\$params_morfeo['navpos']			= \"".JRequest::getVar( 'navpos' )."\";\n";	
	$txt .= "\$params_morfeo['alignv']			= \"".JRequest::getVar( 'alignv' )."\";\n";
	$txt .= "\$params_morfeo['alignh']			= \"".JRequest::getVar( 'alignh' )."\";\n";	
	$txt .= "\$params_morfeo['larfront']		= \"".JRequest::getVar( 'larfront' )."\";\n";
	$txt .= "\$params_morfeo['colonnefront']	= \"".JRequest::getVar( 'colonnefront' )."\";\n";
	$txt .= "\$params_morfeo['max_upload_size']	= \"".JRequest::getVar( 'max_upload_size' )."\";\n";	
	$settings  = "<?php\n";
	$settings .= $txt;
	$settings .= "?>";

	if( $fp = fopen( "$configfile", "w" )){
		fputs( $fp, $settings, strlen( $settings ) );
		fclose( $fp );
		$config_saved = 1;
	} else {
		$msg = JText::_('Could not open the settings file. Could not save your changes');
		$link = 'index.php?option=' . $option .	'&task=showSettings';
	}

	if( isset( $config_saved ) ) {
		switch ($task) {
			case 'applySettings':
				$msg = JText::_('Apply settings saved');
				$link = 'index.php?option=' . $option .	'&task=showSettings';
				break;
			case 'saveSettings':
			default:
				$msg = JText::_('Settings saved');
				$link = 'index.php?option=' . $option .	'&task=back';
				break;
		}
	
		$mainframe->redirect( $link, $msg);
	}
}
?>