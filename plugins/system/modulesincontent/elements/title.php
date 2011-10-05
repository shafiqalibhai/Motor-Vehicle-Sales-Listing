<?php
/**
 * Element: Title
 * Displays a title with a bunch of extras, like: description, image, versioncheck
 *
 * @package    Modules in Content
 * @version    0.1.1
 * @since      File available since Release 0.1.0
 *
 * @author     Peter van Westen <peter@nonumber.nl>
 * @link       http://www.nonumber.nl/modulesincontent
 * @copyright  Copyright (C) 2008 NoNumber! All Rights Reserved
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// Ensure this file is being included by a parent file
defined('_JEXEC') or die( 'Restricted access' );

// Import library dependencies
require_once( dirname( __FILE__ ).DS.'version_check.php' );

/**
 * Title Element
 *
 * @since      Class available since Release 1.0.0
 */
class JElementTitle extends JElement
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'Title';

	function fetchTooltip( $label, $description, &$node, $control_name, $name )
	{
		return;
	}

	function fetchElement( $name, $value, &$node, $control_name )
	{
		$_title			= ( isset( $node->_attributes['label'] ) ) ? $node->_attributes['label'] : '';
		$_description	= ( isset( $node->_attributes['description'] ) ) ? $node->_attributes['description'] : '';
		$_image			= ( isset( $node->_attributes['image'] ) ) ? $node->_attributes['image'] : '';
		$_show_apply	= ( isset( $node->_attributes['show_apply'] ) ) ? $node->_attributes['show_apply'] : 0;

		// the main url
		$_url			= ( isset( $node->_attributes['url'] ) ) ? $node->_attributes['url'] : '';
		// the url of the download location
		$_download		= ( isset( $node->_attributes['download_url'] ) ) ? $node->_attributes['download_url'] : '';
		// the url of the help page
		$_help			= ( isset( $node->_attributes['help_url'] ) ) ? $node->_attributes['help_url'] : '';
		// the url to the new version folder
		$_version_url	= ( isset( $node->_attributes['version_url'] ) ) ? $node->_attributes['version_url'] : $_url.'/versions/';
		// the path to version folder (relative to this file) (end path with a slash, ie 'versions/')
		$_version_path	= ( isset( $node->_attributes['version_path'] ) ) ? $node->_attributes['version_path'] : '';
		// the filename of the current version file
		$_version_file	= ( isset( $node->_attributes['version_file'] ) ) ? $node->_attributes['version_file'] : '';

		$_msg = '';

		if ( $_title ) {
			$_title = html_entity_decode( JText::_( $_title ) );
		}

		if ( $_version_file ) {
			$_msg = ModulesInContentVersionCheck::getMessage( $_version_file, $_version_path, $_version_url, $_download );
			$_version = ModulesInContentVersionCheck::check( $_version_file, $_version_path, $_version_url );
			$_current_version = $_version[0];
			if ( $_current_version ) {
				if ( $_title ) {
					$_title .= ' v.'.$_current_version;
				} else {
					$_title = 'Version '.$_current_version;
				}
			}
		}

		if ( $_url ) {
			$_url = '<a href="'.$_url.'" target="_blank" title="'.$_title.'">';
		}

		if ( $_image ) {
			$_image = $_url.'<img src="'.$_image.'" border="0" style="float:right;margin-left:10px" alt="" />';
			if ( $_url ) { $_image .= '</a>'; }
		}

		if ( $_url ) { $_title = $_url.$_title.'</a>'; }

		if ( $_description ) { $_description = html_entity_decode( JText::_( $_description ) ); }
		if ( $_help ) { $_help = '<a href="'.$_help.'" target="_blank" title="'.JText::_( 'Help...' ).'">'.JText::_( 'Help...' ).'</a>'; }

		$_lang = JFactory::getLanguage();
		$_lang = str_replace( '_', '-', $_lang->_lang );

		$_include_file = '.title.inc.'.$_lang.'.php';
		if ( !file_exists( dirname( __FILE__ ).DS.$_include_file ) ) {
			$_include_file = 'title.inc.en-GB.php';
		}
		if ( file_exists( dirname( __FILE__ ).DS.$_include_file ) ) {
			include( dirname( __FILE__ ).DS.$_include_file );
		}

		$html = '<div class="panel"><div style="padding: 2px 5px;">';
		if ( $_image ) { $html .= $_image; }
		if ( $_show_apply ) {
			$_apply_button = '<a href="#" onclick="submitbutton(\'apply\');" title="'.JText::_( 'Apply' ).'"><img align="right" border="0" alt="'.JText::_( 'Apply' ).'" src="images/tick.png"/></a>';
			$html .= $_apply_button;
		}
		$html .= '<h4 style="margin: 0px;">'.$_title.'</h4>';
		if ( $_description ) { $html .= $_description; }
		if ( $_help ) { $html .= '<p>'.$_help.'</p>'; }
		$html .= '<div style="clear: both;"></div></div></div>';

		if ( $_msg ) { $html = $_msg.$html; }

		return $html;
	}
}