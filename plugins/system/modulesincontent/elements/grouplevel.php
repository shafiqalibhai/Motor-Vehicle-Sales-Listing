<?php
/**
 * Element: Group Level
 * Element to displays a select box of backend group levels
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
 * Group Level Element
 *
 * @since      Class available since Release 0.1.0
 */
class JElementGroupLevel extends JElement
{
	/**
	* Element name
	*
	* @access	protected
	* @var		string
	*/
	var	$_name = 'GroupLevel';

	function fetchElement( $name, $value, &$node, $control_name ) 
	{
		$_root			= ( isset( $node->_attributes['root'] ) ) ? $node->_attributes['root'] : 'USERS';
		$_showroot		= ( isset( $node->_attributes['showroot'] ) ) ? $node->_attributes['showroot'] : true;
		if ( strtoupper( $_root ) == 'USERS' && !isset( $node->_attributes['showroot'] ) ) { $_showroot = false; }
		
		$_acl		=& JFactory::getACL();
		$options	= $_acl->get_group_children_tree( null, $_root, $_showroot );
		$list		= JHTML::_( 'select.genericlist', $options, ''.$control_name.'['.$name.']', 'class="inputbox"', 'value', 'text', $value, $control_name.$name );

		return $list;
	}
}