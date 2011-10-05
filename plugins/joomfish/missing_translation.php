<?php
/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2009 Think Network GmbH, Munich
 *
 * All rights reserved.  The Joom!Fish project is a set of extentions for
 * the content management system Joomla!. It enables Joomla!
 * to manage multi lingual sites especially in all dynamic information
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -----------------------------------------------------------------------------
 * $Id: missing_translation.php 1251 2009-01-07 10:51:34Z apostolov $
 *
*/


// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );
JPlugin::loadLanguage( 'plg_joomfish_missing_translation', JPATH_ADMINISTRATOR );

class plgJoomfishMissing_Translation extends JPlugin
{
	var $_dbvalid = 0;
	
	function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);
	}

	/**
	 * Works out what to show if the translation is missing
	 *
	 * @param object $row_to_translate
	 * @param string $language
	 * @param string $reference_table
	 */
	function onMissingTranslation(&$row_to_translate, $language, $reference_table, $tableArray){
		global   $_JOOMFISH_MANAGER;
		$conf	=& JFactory::getConfig();
		$default_lang	= $conf->getValue('config.defaultlang');

		$db =& JFactory::getDBO();

		$noTranslationBehaviour = $_JOOMFISH_MANAGER->getCfg( 'noTranslation' );
		if( $noTranslationBehaviour  >= 1 && $language != $default_lang ) {
			// don't even think about translations if none exist for the table
			if ($db->translatedContentAvailable($reference_table)) {
				// only offer alternatives for table == content
				if( $reference_table == $_JOOMFISH_MANAGER->DEFAULT_CONTENTTYPE ) {
					// get default text from joomfish language (if present)
					$jflang =&  $conf->getValue("joomfish.language");
					$langParams = new JParameter( $jflang->params );
					$defaultText = $langParams->get('defaulttext',$_JOOMFISH_MANAGER->getCfg('defaultText'));

					if ($defaultText=="") {
						$defaultText = '<div class="jfdefaulttext">' .JText::_('There are no translations available.'). '</div>';
					}
					if ($noTranslationBehaviour==3 && isset($row_to_translate->id)){
						$defaultText="{jfalternative}".$row_to_translate->id."|content|$defaultText{/jfalternative}";
					}

					// Note that its critical that the content elements are only loaded here otherwise joomla caching of content is wasted
					// since the contentelement files are loaded unnecessarily even when the content is cached!!

					// cache this burdonsome analysis of field types
					$cache = & JFactory::getCache('com_content');
					$fieldInfo = $cache->call("JoomFish::_contentElementFields",$reference_table, $language);
					//$contentElement = $_JOOMFISH_MANAGER->getContentElement( $reference_table );
					//$contentObject = new ContentObject( $_JOOMFISH_MANAGER->getLanguageID($language), $contentElement );
					//$textFields = $contentObject->getTextFields();
					$textFields = $fieldInfo["textFields"];
					if( $textFields !== null ) {
						$defaultSet = false;
						foreach ($textFields as $field) {
							if( !$defaultSet && $fieldInfo["fieldTypes"][$field]=="htmltext") {
								if ($noTranslationBehaviour==1)	{
									$row_to_translate->$field = $defaultText;
								} else if ($noTranslationBehaviour>=2) {
									$cr="<br/>";
									$row_to_translate->$field = $defaultText .$cr.(isset($row_to_translate->$field)?$row_to_translate->$field:"");
								}
								$defaultSet = true;
							} else {
								if ($noTranslationBehaviour==1)	{
									$row_to_translate->$field = "";
								} else if ($noTranslationBehaviour>=2) {
									//if ($contentObject->getFieldType($field)=="htmltext"){
									if ($fieldInfo["fieldTypes"][$field]=="htmltext"){
										$cr="<br/>";
									} else {
										$cr="\n";
									}
									$row_to_translate->$field = (isset($row_to_translate->$field)?$row_to_translate->$field:"");
								}
							}
						}
					}
				}
			}
		}

	}
	
}

