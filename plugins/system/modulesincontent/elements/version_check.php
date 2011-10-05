<?php
/**
 * VersionCheck Include File
 * Checks if current version is the latest
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

/**
 * Version Check Class (Include file)
 *
 * @since      Class available since Release 1.2.0
 */
class ModulesInContentVersionCheck
{
	function check( $version_file = '', $version_path = '', $version_url = '' )
	{
		$version = array( '', '' );
		if ( $version_file ) {
			// open the current version file
			$_current_version_file = @fopen( dirname( __FILE__ ).DS.$version_path.$version_file, 'r' );
			if ( $_current_version_file ) {
				// read the contents of the version files (10 chars must be enough)
				$_current_version = ModulesInContentVersionCheck::cleanString( fread( $_current_version_file, 10 ) );
				if ( $_current_version ) {
					$version[0] = $_current_version;
					$version[1] = $_current_version;
					// the url of the new version file
					$_new_version_url	= $version_url.'/'.$version_file;
					// open the new version file
					$_new_version_file = @fopen( $_new_version_url, 'r' );
					if ( !$_new_version_file ) {
						// the given version_url is not found, so is probably a file and not a folder
						// so try to find the file in the folder
						// the url of the new version file
						$_new_version_url	= $version_url;
						// open the new version file
						$_new_version_file = @fopen( $_new_version_url, 'r' );
					}
					if ( $_new_version_file ) {
						// read the contents of the new version files (10 chars must be enough)
						$_new_version = ModulesInContentVersionCheck::cleanString( fread( $_new_version_file, 10 ) );
						$version[1] = $_new_version;
					}
				}
			}
		}
		// return false
		return $version;
	}
	function setMessage( $version_file = '', $version_path = '', $version_url = '', $download_url = '' )
	{
		$messageQueue = $this->getMessageQueue();

		if ( $version_file && !$messageQueue ) {
			$_version = ModulesInContentVersionCheck::check( $version_file, $version_path, $version_url );
			$_current_version = $_version[0];
			$_new_version = $_version[1];
			if ( $_current_version < $_new_version ) {
				// set message
				$_msg = JText::sprintf( 'A newer version is available', $download_url, $_new_version );
				$this->enqueueMessage( $_msg, 'notice' );
			}
		}
	}
	function getMessage( $version_file = '', $version_path = '', $version_url = '', $download_url = '' )
	{
		$msg = '';
		if ( $version_file ) {
			$_version = ModulesInContentVersionCheck::check( $version_file, $version_path, $version_url );
			$_current_version = $_version[0];
			$_new_version = $_version[1];
			if ( $_current_version && $_current_version < $_new_version ) {
				// set message
				$msg = '<div id="system-message"><dd class="notice"><ul><li>';
				$msg .= JText::sprintf( 'A newer version is available', $download_url, $_new_version );
				$msg .= '</li></ul></dd></div>';
			}
		}
		return $msg;
	}

	function setIcon( $html, $version_file = '', $version_path = '', $version_url = '', $download_url = '', $icon_url = '' )
	{
		if ( $version_file ) {
			$_version = ModulesInContentVersionCheck::check( $version_file, $version_path, $version_url );
			$_current_version = $_version[0];
			$_new_version = $_version[1];
			if ( $_current_version && $_current_version < $_new_version ) {
				$_tooltip = JText::sprintf( 'Tip: A newer version is available ('.$version_file.')', $_new_version );
				if ( $_tooltip != 'Tip: A newer version is available ('.$version_file.')' ) {
					$_s = '<div id="module-status">';
					$_r = '<div id="module-status"><span style="padding-left: 2px;"><label class="hasTip" title="'.$_tooltip.'"><a href="'.$download_url.'" target="_blank"><img width="16" height="16" src="'.$icon_url.'"></a></label></span>';
					$html = str_replace( $_s, $_r, $html );
				}
			}
		}
		return $html;
	}

	function cleanString( $str = '' )
	{
		$str = preg_replace( '#[^0-9\.]#', '', $str );
		return $str;
	}
}