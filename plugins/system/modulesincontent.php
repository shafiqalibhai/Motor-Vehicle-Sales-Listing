<?php
/**
 * Main File
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
defined( '_JEXEC' ) or die( 'Restricted access' );

// Import library dependencies
jimport( 'joomla.event.plugin' );

// Include the syndicate functions only once
require_once( dirname( __FILE__ ).DS.'modulesincontent'.DS.'elements'.DS.'version_check.php' );

/**
* Plugin that loads modules within content
*/
class plgSystemModulesInContent extends JPlugin
{
	/**
	* Constructor
	*
	* For php4 compatability we must not use the __constructor as a constructor for
	* plugins because func_get_args ( void ) returns a copy of all passed arguments
	* NOT references.  This causes problems with cross-referencing necessary for the
	* observer design pattern.
	*/
	function plgSystemModulesInContent( &$subject )
	{
		parent::__construct( $subject );

		// load plugin parameters
		$this->_plugin = JPluginHelper::getPlugin( 'system', 'modulesincontent' );
		$this->_params = new JParameter( $this->_plugin->params );
	}
	
	function onPrepareContent( &$article ) 
	{
		plgSystemModulesInContent::processModules( $article );
	}
	
	function onAfterRender() 
	{
		global $mainframe;
		
		$_document	=& JFactory::getDocument();
		$_docType = $_document->getType();
		
		// Return if page is not html
		if ( $_docType != 'html' ) { return; }

		if ( $mainframe->isAdmin() ) {
			// Return if show icon is turned off
			if ( !$this->_params->get( 'show_update', 1 ) ) { return; }
			// Show update icon
			$_lang =& JFactory::getLanguage();
			$_lang->load('plg_system_modulesincontent');
			$_body = JResponse::getBody();
			$_body = ModulesInContentVersionCheck::setIcon( $_body, 'version_modulesincontent', '', 'http://www.nonumber.nl/versions', 'http://www.nonumber.nl/download/modulesincontent', '../plugins/system/modulesincontent/images/icon-ani.gif' );
		} else {
			// Strip remaining 'lost' tags
			$_tags = 'module|modulepos';
			if ( $this->_params->get( 'handle_loadposition', 0 ) ) { $_tags .= '|loadposition'; }
			$_regex = '#\s*(\{\s*('.$_tags.')\s+[^\}]+?\})\s*#';
			$_error_msg = '<!-- The Module in Content tag \1 is stripped because it is not allowed here. -->';
			$_body = JResponse::getBody();
			$_body = preg_replace( $_regex, $_error_msg, $_body );
		}
		JResponse::setBody( $_body );
	}
	function processModules( &$article )
	{
		$_error_msg = 0;
		if ( isset( $article->created_by ) ) {
			// Articles
			if ( !$this->_params->get( 'articles_enable', 1 ) ) { return 1; }
			$_acl =& JFactory::getACL();
			$_article_group				= $_acl->getAroGroup( $article->created_by );
			$_security_group			= $_acl->get_group_data( $this->_params->get( 'articles_security_level', 23 ) );
			if ( $_security_group['4'] > $_article_group->lft ) {
				$_error_msg = '<!-- The Module in Content tag %s is stripped because this article does not pass the security settings. -->';
			}
		} else {
			// Sections & Categories
			if ( $this->_params->get( 'secscats_enable', 1 ) == 0 ) {
				$_error_msg = '<!-- The Module in Content tag %s is stripped because Module in Content is not enabled in section / category descriptions. -->';
			}
		}
		
		$_params_style = $this->_params->get( 'style', 'none' );
		$_params_override_style = $this->_params->get( 'override_style', 1 );
		
		$_tags = 'module|modulepos';
		if ( $this->_params->get( 'handle_loadposition', 0 ) ) { $_tags .= '|loadposition'; }
		$_regex = '#\s*(\{\s*('.$_tags.')\s+([^\}]+?)((?:\|[^\}]+)?)\})\s*#';
		if ( preg_match_all( $_regex, $article->text, $_matches, PREG_SET_ORDER ) > 0 ) {
			JPluginHelper::importPlugin( 'content' );

			foreach ( $_matches as $_match ) {
				$_type = $_match['2'];
				$_module = $_match['3'];
					
				if ( $_error_msg ) {
					$_module_html = sprintf( $_error_msg, $match['1'] );
				} else {
					$_style = $_params_style;
					
					if ( $_params_override_style && $_match['3'] ) {
						$_style = substr( $_match['4'], 1 );
					}
					
					if ( $_type == 'module' ) {
						// module
						$_module_html	= plgSystemModulesInContent::processModule( $_module, $_style );
					} else {
						// module position
						$_module_html	= plgSystemModulesInContent::processPosition( $_module, $_style );
					}
				}
				$article->text = str_replace( $_match['0'], $_module_html, $article->text );
			}
		}
	}
	function processPosition( $position, $style = 'none' )
	{
		$_document	= &JFactory::getDocument();
		$_renderer	= $_document->loadRenderer( 'module' );
		$_params	= array( 'style'=>$style );

		$html = '';
		foreach ( JModuleHelper::getModules( $position ) as $_mod ) {
			$html .= $_renderer->render( $_mod, $_params );
		}
		return $html;
	}

	function processModule( $module, $style = 'none' )
	{
		global $mainframe;
		
		$_db		=& JFactory::getDBO();
		$_user		=& JFactory::getUser();
		$_aid		= $_user->get( 'aid', 0 );
		
		if ( is_numeric( $module ) ) {
			$_where = ' AND m.id='.$module;
		} else {
			$_where = ' AND m.title="'.$module.'"';
		}
		$_query = 'SELECT *'.
			' FROM #__modules AS m'.
			' WHERE m.access <= '.(int) $_aid.
			' AND m.client_id = '.(int) $mainframe->getClientId().
			$_where.
			' ORDER BY ordering'.
			' LIMIT 1';

		$_db->setQuery( $_query );
		$_row = $_db->loadObject();
		
		$html = '';
		if ( $_row ) {
			//determine if this is a custom module
			$_row->user = ( substr( $_row->module, 0, 4 ) == 'mod_' ) ? 0 : 1;
			$_row->style = $style;
			
			$_attribs = array();
			$_attribs['style'] = $style;
			
			$html = JModuleHelper::renderModule( $_row, $_attribs );
		}
		return $html;
	}
}