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
 * $Id: joomfish.class.php 1251 2009-01-06 18:33:02Z apostolov $
 *
*/

/**
* @package joomfish
 * @subpackage frontend.includes
 * @copyright 2003-2009 Think Network GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version $Revision: 1251 $
 * @author Alex Kempkens <Alex@JoomFish.net>
*/

// ensure this file is being included by a parent file
defined( 'JPATH_BASE' ) or die( 'Direct Access to this location is not allowed.' );

// backwards compatability hack!
global $mambelfishWarnedAdmin;
$mambelfishWarnedAdmin=false;
class MambelFish{
	function warnAdmin(){
		global $adminEmail,$mambelfishWarnedAdmin;
		$privateWarning=false;
		if (!$mambelfishWarnedAdmin) {
			$bt = debug_backtrace();
			if (count($bt)>=2){
				$subject = "Deprecated use of Mambelfish Translation";
				$content = "Deprecated use of Mambelfish. Request URL : ".$_SERVER['REQUEST_URI']."\n\n";
				$content .= "Please contact the author of this component/module/mambot with the details in this message.\n\n";
				$content .= "In the meantime the following function reference can be commented out and translation should not be affected.\n";
				$content .= "File : ".basename(dirname($bt[1]["file"]))."\\".basename($bt[1]["file"])."\n";
				$content .= "Line : ".$bt[1]["line"]."\n";
				$content .= "Function : ".$bt[1]["function"]."\n\n";
				if ( $privateWarning) {
					global  $my ;
					$db =& JFactory::getDBO();

					require_once( mosMainFrame::getBasePath() .'/components/com_messages/messages.class.php' );

					$query = "SELECT id"
					. "\n FROM #__users"
					. "\n WHERE sendEmail = 1"
					;
					$db->setQuery( $query );
					$users = $db->loadResultArray(false);
					foreach ($users as $user_id) {
						$msg = new mosMessage( $db );
						// send message from admin
						$msg->send( $user_id, $user_id, $subject, $content);
					}
				}

				else {
					$content = str_replace("\n","<br/>",$content);
					echo "$content";
				}
			}
		}
		$mambelfishWarnedAdmin=true;
	}
	function translate( $content, $reference_table, $language, $tableArray=array())	{ MambelFish::warnAdmin(); return $content;}
	function translateList( $rows, $reference_table, $language , $tableArray) {	  MambelFish::warnAdmin(); return $rows;}
}

/**
 * The joom fish change the text information in the supported
 * objects after they have been loaded. The idea is to create a
 * flexible environment which can add the multi language support at
 * any time.</p>
 *
 * The basic concept behind the joom fish is to map an existing content
 * with all his general information to a different translation of it's
 * text content. There is no additional copy of the information like the
 * author or publishing flags, only a copy of the text fields.
 *
 * @author	A. Kempkens
 */
class JoomFish {

	function translateListCached ($rows,  $language , $tableArray) {
		JoomFish::translateList($rows,  $language , $tableArray);
		return $rows;
	}

	/**
	 * Translate a list 
	 **/
	function translateList( &$rows, $language , $tableArray) {
		if (!isset($rows) || !is_array($rows)) return $rows;

		global  $_JOOMFISH_MANAGER;

		$registry =& JFactory::getConfig();
		$defaultLang = $registry->getValue("config.defaultlang");


		$db =& JFactory::getDBO();
		$querySQL = $db->_sql;

		// do not try to translate if I have no fields!!!
		if (!isset($tableArray) || count($tableArray)==0) {
			//echo "$tableArray $querySQL<br>";
			return;
		}
		// If I write content in non-default language then this skips the translation!
		//if($language == $defaultLang) return $rows;
		$rowsLanguage = $language;
		if (count($rows)>0){
			foreach ($tableArray["fieldTablePairs"] as $key=>$value){
				$reftable = $tableArray["fieldTablePairs"][$key];
				$alias = $tableArray["tableAliases"][$reftable];

				// If there is not translated content for this table then skip it!
				if (!$db->translatedContentAvailable($reftable)) continue;

				// get primary key for tablename
				$idkey = $_JOOMFISH_MANAGER->getPrimaryKey( trim($reftable) );

				// I actually need to check the primary key against the alias list!

				for ($i=0;$i<$tableArray["fieldCount"];$i++){
					if (!array_key_exists($i,$tableArray["fieldTableAliasData"])) continue;
					// look for fields from the correct table with the correct name
					if (($tableArray["fieldTableAliasData"][$i]["tableName"]==$reftable) &&
					($tableArray["fieldTableAliasData"][$i]["fieldName"]==$idkey)
					&&  ($tableArray["fieldTableAliasData"][$i]["tableNameAlias"]==$alias)){
						$idkey=$tableArray["fieldTableAliasData"][$i]["fieldNameAlias"];
						break;
					}
				}


				// NASTY KLUDGE TO DEAL WITH SQL CONSTRUCTION IN contact.php, weblinks.php where multiple tables to be translated all use "id" which gets dropped! etc.
				if ($reftable=='categories' && isset($content->catid) && $content->catid>0) {
					$idkey = "catid";
				}
				if ($reftable=='sections' && count($rows)>0 && isset($content->sectionid) && $content->sectionid>0) {
					$idkey = "sectionid";
				}
				$idstring = "";
				$idlist = array(); // temp variable to make sure all ids in idstring are unique (for neatness more than performance)
				foreach( array_keys( $rows) as $key ) {
					$content =& $rows[$key];


					if (isset($content->$idkey) && !in_array($content->$idkey,$idlist)) {
						//print ($idkey ." ".$content->$idkey." list<br>");
						$idstring .= (strlen( $idstring)>0?",":""). $content->$idkey;
						$idlist[] = $content->$idkey;
					}
				}
				if (strlen( $idstring)==0) continue;

				JoomFish::translateListWithIDs( $rows, $idstring, $reftable, $language ,$idkey, $tableArray, $querySQL);
			}
		}
	}

	/**
	  * Function to translate a section object
	  */
	function translateListWithIDs( &$rows, $ids, $reference_table, $language, $refTablePrimaryKey="id", & $tableArray, $querySQL, $allowfallback=true )
	{
		//print " translateListWithIDs for ids=$ids refTablePrimaryKey=$refTablePrimaryKey<br>" ;
		$config	=& JFactory::getConfig();
		$debug = $config->get("dbprefix");

		global $_JOOMFISH_MANAGER;
		$registry =& JFactory::getConfig();
		$defaultLang = $registry->getValue("config.defaultlang");
		$db =& JFactory::getDBO();

		// setup Joomfish pluginds
		$dispatcher	   =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('joomfish');

		if ($reference_table == "languages" || $reference_table == "jf_content" ) {
			return;					// I can't translate myself ;-)

		}

		$results = $dispatcher->trigger('onBeforeTranslation', array (&$rows, $ids, $reference_table, $language, $refTablePrimaryKey, & $tableArray, $querySQL, $allowfallback));

		// find reference table alias
		$reftableAlias = $reference_table;
		for ($i=0;$i<$tableArray["fieldCount"];$i++){
			if (!array_key_exists($i,$tableArray["fieldTableAliasData"])) continue;
			if ($tableArray["fieldTableAliasData"][$i]["tableName"]==$reference_table &&
			$tableArray["fieldTableAliasData"][$i]["fieldNameAlias"]==$refTablePrimaryKey ){
				$reftableAlias = $tableArray["fieldTableAliasData"][$i]["tableNameAlias"];
				break;
			}
		}
		
		// NASTY KLUDGE TO DEAL WITH SQL CONSTRUCTION IN contact.php, weblinks.php where multiple tables to be translated all use "id" which gets dropped! etc.
		$currentRow = current($rows);
		// must not check on catid>0 since this would be uncategorised items
		if ($reference_table=='categories' && count($rows)>0 && isset($currentRow->catid) ) {			
			$reftableAlias = $tableArray["tableAliases"]["categories"];
		}
		if ($reference_table=='sections' && count($rows)>0 && isset($currentRow->sectionid)) {
			$reftableAlias = $tableArray["tableAliases"]["sections"];
		}

		//print " translateListWithIDs( ".count($rows). ", ids=$ids, reftab=$reference_table, $language, primkey = $refTablePrimaryKey )<br>";
		if ($debug) {
			echo "<p><strong>JoomFish debug (new):</strong><br>"
			. "reference_table=$reference_table<br>"
			. "$refTablePrimaryKey  IN($ids)<br>"
			. "language=$language<br>"
			.(count($rows)>0? "class=" .get_class(current($rows)):"")
			. "</p>";
		}

		static $languages;
		if (!isset($languages)){
			$jfm = JoomFishManager::getInstance();
			$languages = $jfm->getLanguagesIndexedByCode();
		}

		// process fallback language
		$fallbackrows=array();
		$idarray = explode(",",$ids);
		$fallbackids=array();
		if ($languages[$language]->fallback_code==""){
			$allowfallback=false;
		}
		else {
			$fallbacklanguage = $languages[$language]->fallback_code;
			if (!array_key_exists($fallbacklanguage, $languages)){
				$allowfallback=false;
			}
		}

		if (isset($ids) && $reference_table!='') {
			$user =& JFactory::getUser();
			$published = ($user->gid<21)?"\n	AND jf_content.published=1":"";
			//$published = "\n	AND jf_content.published=1";
			$sql = "SELECT jf_content.reference_field, jf_content.value, jf_content.reference_id, jf_content.original_value "
			. "\nFROM #__jf_content AS jf_content"
			. "\nWHERE jf_content.language_id=".$languages[$language]->id
			. $published
			. "\n   AND jf_content.reference_id IN($ids)"
			. "\n   AND jf_content.reference_table='$reference_table'"
			;
			$db->setQuery( $sql );
			$translations = $db->loadObjectList('',false);
			if (count($translations)>0){
				$fieldmap = null;
				foreach( array_keys( $rows) as $key ) {
					$row_to_translate =& $rows[$key];
					$rowTranslationExists=false;
					//print_r ($row_to_translate); print"<br>";
					if( isset( $row_to_translate->$refTablePrimaryKey ) ) {
						foreach ($translations as $row){
							if ($row->reference_id!=$row_to_translate->$refTablePrimaryKey) continue;
							// TODO - consider building array for refFields.  Some queries may have multiple aliases e.g. SELECT a.*, a.field as fieldalias
							$refField = $row->reference_field;
							// adjust refField for aliases (make sure the field is from the same table!).
							// I could reduce the calculation by building an array of translation reference fields against their mapping number
							// but this refinement can wait!
							
							$fieldmatch=false; // This is used to confirm the field is from the correct table
							for ($i=0;$i<$tableArray["fieldCount"];$i++){
								if (!array_key_exists($i,$tableArray["fieldTableAliasData"])) continue;
								// look for fields from the correct table with the correct name
								if ($tableArray["fieldTableAliasData"][$i]["tableName"]==$reference_table &&
								$tableArray["fieldTableAliasData"][$i]["fieldName"]==$refField &&
								$tableArray["fieldTableAliasData"][$i]["tableNameAlias"] == $reftableAlias){
									$refField=$tableArray["fieldTableAliasData"][$i]["fieldNameAlias"];
									$fieldmatch=true;
									break;
								}
							}
							$fieldIndex = $i;
							if ($fieldmatch && isset( $row->reference_id)  && $row->reference_id==$row_to_translate->$refTablePrimaryKey && $fieldIndex<=$tableArray["fieldCount"]){
								if (is_subclass_of($row_to_translate, 'mosDBTable')) {
									$row_to_translate->set($row->reference_field, $row->value);
								} else {
									$row_to_translate->$refField = $row->value;
								}
								$rowTranslationExists=true;
								//print_r( $row_to_translate);
							}
						}
						if (!$rowTranslationExists){
							if ($allowfallback && isset($rows[$key]->$refTablePrimaryKey)){
								$fallbackrows[$key] =& $rows[$key];
								$fallbackids[$key] = $rows[$key]->$refTablePrimaryKey;
							}
							else {
								$results = $dispatcher->trigger('onMissingTranslation', array (&$row_to_translate, $language,$reference_table, $tableArray, $querySQL));

								//JoomFish::processMissingTranslation($row_to_translate, $language,$reference_table);
							}
						}
					}
				}
			}
			else {
				foreach( array_keys( $rows ) as $key ) {
					if ($allowfallback && isset($rows[$key]->$refTablePrimaryKey)){
						$fallbackrows[$key] =& $rows[$key];
						$fallbackids[$key] = $rows[$key]->$refTablePrimaryKey;
					}
					else {
						$results = $dispatcher->trigger('onMissingTranslation', array (&$rows[$key], $language,$reference_table, $tableArray, $querySQL));
						//JoomFish::processMissingTranslation($rows[$key], $language,$reference_table);
					}
				}
			}


			if ($allowfallback && count($fallbackrows)>0 ){
				$fallbackids = implode($fallbackids,",");
				JoomFish::translateListWithIDs( $fallbackrows, $fallbackids, $reference_table, $fallbacklanguage, $refTablePrimaryKey, $tableArray,$querySQL, false);
			}
		}
		$dispatcher->trigger('onAfterTranslation', array (&$rows, $ids, $reference_table, $language, $refTablePrimaryKey, $tableArray, $querySQL, $allowfallback));
	}

	/**
	 * Cached extraction of content element field information
	 * this cached version is shared between pages and hence makes a big improvement to load times
	 * for newly visited pages in a cached scenario
	 *
	 * private function
	 *
	 * @param string $reference_table
	 * @return unknown
	 */
	function _contentElementFields($reference_table){
		static $info;
		if (!isset($info)){
			$info = array();
		}
		if (!isset($info[$reference_table])){
			// TODO - use global cache location
			$cacheDir = dirname(__FILE__)."/cache";
			if (!file_exists($cacheDir)){
				mkdir($cacheDir);
			}
			$cacheFile = $cacheDir."/".$reference_table."_cefields.cache";
			if (file_exists($cacheFile)){
				$cacheFileContent = file_get_contents($cacheFile);
				$info[$reference_table] = unserialize($cacheFileContent);
			}
			else {
				$jfm =& JoomFishManager::getInstance();
				$contentElement = $jfm->getContentElement( $reference_table );
				// The language is not relevant for this function so just use the current language
				$registry =& JFactory::getConfig();
				$lang = $registry->getValue("config.jflang");

				JLoader::import( 'models.ContentObject',JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish");
				$contentObject = new ContentObject( $jfm->getLanguageID($lang), $contentElement );
				$textFields = $contentObject->getTextFields();
				$info[$reference_table]["textFields"] = $textFields ;
				$info[$reference_table]["fieldTypes"] = array();
				if( $textFields !== null ) {
					$defaultSet = false;
					foreach ($textFields as $field) {
						$info[$reference_table]["fieldTypes"][$field] = $contentObject->getFieldType($field);
					}
				}
				$cacheFileContent = serialize($info[$reference_table]);
				$handle = fopen($cacheFile,"w");
				fwrite($handle,$cacheFileContent);
				fclose($handle);
			}
		}

		return $info[$reference_table];
	}

	/**
	  * Version information of the component
	  *
	  * @author	Alex Kempkens
	  */
	function version() {
		return JoomFishManager :: getVersion();
	}
}
