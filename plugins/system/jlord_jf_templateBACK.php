<?php
/**
 * Jlord Joomfish Template plugin
 *
 * @package		jlord_jf_template
 * @subpackage	Components
 * @link		http://joomlord.com
 * @author		Minh Nguyen
 * @copyright 	Minh Nguyen (minhna@gmail.com)
 * @license		Commercial
 */

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

/**
 * Example Content Plugin
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 		1.5
 */
class plgSystemJlord_jf_template extends JPlugin
{

	/**
	 * Constructor
	 *
	 */
	function plgSystemJlord_jf_template(& $subject, $config)
	{
		parent::__construct($subject, $config);
	}
	
	function onAfterRoute(){
		global $option, $mainframe;		
		
		if ($mainframe->isAdmin()) {
			return; // Dont run in admin
		}
		
		$registry =& JFactory::getConfig();
		$jfLang = $registry->getValue("joomfish.language", false);
		
		if (!$jfLang) {
			return;
		}
		
		$str_config = $this->params->get('template_config', '');
		$str_config = preg_replace('/\s/', '', $str_config);
		if (preg_match('/'. $jfLang->shortcode . '=>(((.*?),)|((.*?)$))/', $str_config, $match)) {
			$newTemplate = $match[1];
			$newTemplate = preg_replace('/,/', '', $newTemplate);			
			$mainframe->set('setTemplate', $newTemplate);			
		}
		
	}
}
