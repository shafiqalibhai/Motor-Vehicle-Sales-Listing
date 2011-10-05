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
 * $Id: jfdatabase_decorator 1251 2009-01-07 11:07:01 apostolov Exp $
 * @package joomfish
 * @subpackage jfdatabase
 * @version 2.0
 *
*/



// Don't allow direct linking
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

//require_once( JPATH_SITE.'/components/com_joomfish/includes/joomfish.class.php' );
//require_once( JPATH_SITE."/administrator/components/com_joomfish/joomfish.class.php");


/**
 * Multi lingual Database connector class
 *
 * Decorator version
 *
 * @package joomfish
 * @subpackage jfdatabase
 * @copyright 2003-2009 Think Network GmbH
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 1.0, 2009-01-07 $Revision: 1251 $
 * @author Geraint Edwards
*/

class JFDatabase  {

	/** @var array list of multi lingual tables */
	var $_mlTableList=null;
 	/** @var Internal variable to hold array of unique tablenames and mapping data*/
	var $_refTables=null; 
  
	var $_db = null;
		
	/**
	 *  Constructor
	*/
	function JFDatabase( ) {
		// take copy of  main database instance
		$this->_db = JFactory::getDBO();
		
		$query = "select distinct reference_table from #__jf_content";
		$this->_db->setQuery( $query );
		$this->_mlTableList = $this->_db->loadResultArray();
		if( !$this->_mlTableList ){
			echo $this->_db->getErrorMsg();
		}
	}
	
	function getErrorNum(){
		return $this->_db->getErrorNum();
	}
	
	function debug( $debug ){
		return $this->_db->debug( $debug );
	}
	
	function setQuery( $sql, $offset = 0, $limit = 0, $prefix='#__' ){
		return $this->_db->setQuery( $sql, $offset, $limit, $prefix);
	}
	
	/**
	* This global function loads the first row of a query into an object
	*
	* If an object is passed to this function, the returned row is bound to the existing elements of <var>object</var>.
	* If <var>object</var> has a value of null, then all of the returned query fields returned in the object.
	* @param string The SQL query
	* @param object The address of variable
	*/
	function loadObject( $translate=true, $language=null ) {
		global $mosConfig_lang, $_JOOMFISH_MANAGER;
		if( $language===null) $language = $mosConfig_lang;

		$object  = $this->_db->loadObject( );
		if( $translate && isset($_JOOMFISH_MANAGER)) {
			$doTranslate=false;
			$tables =$this->_getRefTables();
			foreach ($tables["fieldTablePairs"] as $i=>$table) {
				if ($this->translatedContentAvailable($table)) {
					$doTranslate=true;
					break;
				}
			}
			if ( $doTranslate) {
				JoomFish::translate( $object, $this->_getTableName(), $language, $this->_getRefTables());
			}
		}
		return $object;
	}

	
	/**
	 * Public function to test if table has translated content available
	 *
	 * @param string $table : tablename to test
	 */
	function translatedContentAvailable($table){
		return in_array( $table, $this->_mlTableList) || $table=="content";
	}
	
	/**
	* Load a list of database objects
	* @param string The field name of a primary key
	* @return array If <var>key</var> is empty as sequential list of returned TRANSLATED records.
	* If <var>key</var> is not empty then the returned array is indexed by the value
	* the database key.  Returns <var>null</var> if the query fails.
	*/
	function loadObjectList( $key='', $translate=true, $language=null ) {
		global $mosConfig_lang, $_JOOMFISH_MANAGER;
		if( $language===null) {
			$jlang =& JFactory::getLanguage();
			$language = $jlang->getTag();
		}
		
		$result = $this->_db->loadObjectList( $key );
		if( $translate && isset($_JOOMFISH_MANAGER)) {
			$doTranslate=false;
			$tables =$this->_getRefTables();
			if ($tables == null) return $result; // an unstranslatable query to return result as is
			foreach ($tables["fieldTablePairs"] as $i=>$table) {
				if ($this->translatedContentAvailable($table)) {
					$doTranslate=true;
					break;
				}
			}
			if ($doTranslate ) {
				JoomFish::translateList( $result, $this->_getTableName(), $language, $this->_getRefTables() );
			} 
		} 
		return $result;
	}

	/**
	* Overwritten method to loads the first field of the first row returned by the query.
	*
	* @return The value returned in the query or null if the query failed.
	*/
	function loadResult( $translate=true, $language=null ) {
		$result=null;
		$ret=null;
		$result = $this->loadObject( $translate, $language );
		if( $result != null ) {
			$fields = get_object_vars( $result );
			$field = each($fields);
			$ret = $field[1];
		}
		return $ret;
	}

	/**
	* Overwritten insert function to enable storage of material created in non-default language.
	* Note that this creates a translation which is identical to the original - when we update
	* the original in the default language we then keep the translation (although it will appread out of date!).
	*
	* @param	string	table name
	* @param	object	instance with information to store
	* @param	string	primary key name of table
	* @param	boolean	debug info printed or not
	* @param	boolean	passthru without storing information in a translation table
	*/
	function insertObject( $table, &$object, $keyName = NULL, $verbose=false , $passthru=false) {
		global $mosConfig_lang, $mosConfig_defaultLang, $_JOOMFISH_MANAGER;
		$passthru = $mosConfig_lang == $mosConfig_defaultLang;
		
		if( !$passthru && isset($_JOOMFISH_MANAGER)) {
		  //Must insert parent first to get reference id !
			$parentInsertReturn = $this->_db->insertObject( $table, $object, $keyName, $verbose);
			$actContentObject=null;
			if( isset($table) && $table!="" ) {
				$tableName = ereg_replace( '^#__', '', $table);
				// *** QUESTION ***//
				// IS THIS TEST APPROPRIATE HERE - I THINK IT MEANS YOU CAN'T DO A FIRST TRANSLATION FOR A TABLE VIA THE FRONT END
				// ** TEST BEFORE 1.8 **//
				//if ($this->translatedContentAvailable($table)) {
					$contentElement = $_JOOMFISH_MANAGER->getContentElement( $tableName );
					if( isset( $contentElement ) ) {
						$actContentObject = new ContentObject( $_JOOMFISH_MANAGER->getLanguageID($mosConfig_lang), $contentElement );
						if( isset( $object->$keyName ) ) {
							$actContentObject->loadFromContentID( $object->$keyName );
							$actContentObject->updateMLContent( $object );
							if( isset( $object->state ) ) {
								$actContentObject->published = ($object->state == 1) ? true : false;
							} else if ( isset( $object->published ) ) {
								$actContentObject->published = ($object->published == 1) ? true : false;
							}
							if ($actContentObject->published){
								if ( $_JOOMFISH_MANAGER->getCfg("frontEndPublish")){
									global $acl;
									$user =& JFactory::getUser();
									$access = new stdClass();
									$access->canPublish = $acl->acl_check( 'action', 'publish', 'users', $user->usertype, 'content', 'all' );
									if ($access->canPublish) $actContentObject->setPublished($actContentObject->published);
								}
							}
							$actContentObject->store();
						}
					}
				//}
			}
			return $parentInsertReturn;
		}
		else {
			return $this->_db->insertObject( $table, $object, $keyName, $verbose);
		}
	}

	/**
	* Overwritten update function to enable storage of translated information.
	* Based on the configuration in the content elements the automatic storage of
	* information is activated or not. It is important that this upgraded method will ensure
	* that all information will be written into the translation table. Only in the case that the
	* default language is choosen the information will be updated directly within the original tables.
	* To make sure that all other information will be written into the tables as expected the
	* statements will be manipulated as needed.
	* 
	* @param	string	table name
	* @param	object	instance with information to store
	* @param	string	primary key name of table
	* @param	boolean	update fields with null or not
	* @param	boolean	passthru without storing information in a translation table
	*/
	function updateObject( $table, &$object, $keyName, $updateNulls=true, $passthru=false ) {
		global $mosConfig_lang, $mosConfig_defaultLang, $_JOOMFISH_MANAGER;
		
		// if the currect language is the site default language the translations will not be updated!
		$passthru = $mosConfig_lang == $mosConfig_defaultLang;
		
		if( !$passthru && isset($_JOOMFISH_MANAGER)) {
			$actContentObject=null;
			if( isset($table) && $table!="" ) {
				$tableName = ereg_replace( '^#__', '', $table);
				// *** QUESTION ***//
				// IS THIS TEST APPROPRIATE HERE - I THINK IT MEANS YOU CAN'T DO A FIRST TRANSLATION FOR A TABLE VIA THE FRONT END
				// ** TEST BEFORE 1.8 **//
				//if ($this->translatedContentAvailable($table)) {
					$contentElement = $_JOOMFISH_MANAGER->getContentElement( $tableName );
					if( isset( $contentElement ) ) {
						$actContentObject = new ContentObject( $_JOOMFISH_MANAGER->getLanguageID($mosConfig_lang), $contentElement );
						if( isset( $object->$keyName ) ) {
							$actContentObject->loadFromContentID( $object->$keyName );
							$actContentObject->updateMLContent( $object );
							if( isset( $object->state ) ) {
								$actContentObject->published = ($object->state == 1) ? true : false;
							} else if ( isset( $object->published ) ) {
								$actContentObject->published = ($object->published == 1) ? true : false;
							}
							if ( $_JOOMFISH_MANAGER->getCfg("frontEndPublish")){
								global $acl;
								$user =& JFactory::getUser();
								$access = new stdClass();
								$access->canPublish = $acl->acl_check( 'action', 'publish', 'users', $user->usertype, 'content', 'all' );
								if ($access->canPublish) $actContentObject->setPublished($actContentObject->published);
							}
	
							$actContentObject->store();
						}
					}
				//}
			}
			return $this->_db->updateObject( $table, $object, $keyName, $updateNulls );

		} else {
			return $this->_db->updateObject( $table, $object, $keyName, $updateNulls );
		}
	}
	
	/** Internal function to determit the table name from an sql query
	 *
	 * @return	string	table name
	 */
	function _getTableName() {
		global $mosConfig_dbprefix;

		$posFrom = strpos( strtoupper($this->_sql), 'FROM ') + 5; // after 'FROM '
		$posWhere = strpos( strtoupper($this->_sql), 'WHERE ');
		$table = substr( $this->_sql, $posFrom, $posWhere - $posFrom);
		if( strpos( $table, ' ' ) !== false ) {
			$table = substr( $table, 0, strpos( $table, ' ' ) );
		}
		if (isset($mosConfig_dbprefix) && strlen($mosConfig_dbprefix)>0) $table = ereg_replace( $mosConfig_dbprefix, '', $table);
		$table = ereg_replace( "\n", "", $table) ;
		
		return $table;
	}

	/**
	 * Override query in order to extract ref tables data
	 *
	 * @return n/a
	 */
	function query() {
		$this->_db->query();
		$this->setRefTables();
		return $this->_cursor;
	}

	function fillRefTableCache($cacheDir,$cacheFile){
		$cacheFileContent = serialize($this->_refTables);
		$handle = fopen($cacheFile,"w");
		fwrite($handle,$cacheFileContent);
		fclose($handle);	
		// clean out old cache files	
		$this->cleanRefTableCache($cacheDir);		
	}

	function cleanRefTableCache($cacheDir){
		if (!($dh = opendir($cacheDir))) {
			return false;
		}
		while ($file = readdir($dh)) {
			if (($file != '.') && ($file != '..')) {
				$file = "$cacheDir/$file";
				if (is_file($file) && @filemtime($file) < $this->cacheExpiry) {
					if (!@unlink($file)) {
						echo "problems clearing cache file $file";
					}
				}
			}
		}
		return true;
	}
	
	function setRefTables(){
		// Before joomfish manager is created since we can't translate so skip this anaylsis
		global $_JOOMFISH_MANAGER;
		if (!$_JOOMFISH_MANAGER) return;
		
		// This could be speeded up by the use of a cache - but only of benefit is global caching is off
		$tempsql = $this->_sql;
		// only needed for selects at present - possibly add for inserts/updates later
		if (strpos(strtoupper($tempsql),"SELECT")===false) {
			return;
		}
	
		$registry =& JFactory::getConfig();
		$cache =& JFactory::getCache('com_joomfish');

		// TODO try to use Joomla caching routines directly
		// remove time formats (assume all numbers are not necessay - this could be dodgy?!
		$nos = array("0","1","2","3","4","5","6","7","8","9");
		$sql_exNos = str_replace($nos,"",$tempsql);
		$sqlHash = md5($sql_exNos );
		
		$this->cacheExpiry = time() - $cache->_options["lifetime"]/60;
		$cacheDir = $cache->_options["cachebase"]."/refTableSQL";
		if (!file_exists($cacheDir)) mkdir($cacheDir);
		$cacheFile = "$cacheDir/$sqlHash";
		if (file_exists($cacheFile) &&	@filemtime($cacheFile) > $this->cacheExpiry) {
			$cacheFileContent = file_get_contents($cacheFile);
			$this->_refTables = unserialize($cacheFileContent);
			return;
		}
		
		if($this->_cursor===true || $this->_cursor===false) {
			$this->fillRefTableCache($cacheDir,$cacheFile);
			return;
		}
		
		// get column metadata
		$i = 0;
		//echo " $this->_sql $this->_cursor ".var_export( $this->_cursor, true )."<br>";
		//$cursorType = get_resource_type($this->_cursor);
		if (is_object($this->_cursor) && get_class($this->_cursor)=="mysqli_result"){
		  $dbIsMySQL = false;
		}
		else {
			$cursorType = get_resource_type($this->_cursor);
			if ($cursorType == "mysql result") {
				$dbIsMySQL = true;
			}
			else $dbIsMySQL = false;
		}
		
		if (!$dbIsMySQL && function_exists("mysqli_num_fields"))  $fields = mysqli_num_fields($this->_cursor);
		else $fields = mysql_num_fields($this->_cursor);
		//print "<br> $tempsql $this->_cursor $fields";

		if ($fields<=0) {
			$this->fillRefTableCache($cacheDir,$cacheFile);
			return;
		}

		$this->_refTables=array();
		$this->_refTables["fieldTablePairs"]=array();
		$this->_refTables["tableAliases"]=array();
		$this->_refTables["fieldAliases"]=array();
		$this->_refTables["fieldTableAliasData"]=array();
		$this->_refTables["fieldCount"]=$fields;
		$this->_refTables["sql"]=$tempsql;
		// local variable to keep track of aliases that have already been analysed
		$tableAliases = array();

		for ($i = 0; $i < $fields; ++$i) {
		  	if (!$dbIsMySQL && function_exists("mysqli_fetch_field"))  $meta = mysqli_fetch_field($this->_cursor);
		  	else  $meta = mysql_fetch_field($this->_cursor, $i);
			if (!$meta) {
				echo "No information available<br />\n";
			}
			else {
				$tempTable =  $meta->table;
				// if I have already found the table alias no need to do it again!
				if (array_key_exists($tempTable,$tableAliases)){
					$value = $tableAliases[$tempTable];
				}
				else {
					if (!isset($tempTable) || strlen($tempTable)==0) {
						continue;
					}
					//echo "<br>Information for column $i of ".($fields-1)." ".$meta->name." : $tempTable=";
					$tempArray=array();
					$prefix = $this->_table_prefix;
					preg_match_all("/$prefix(\w*)\s+AS\s+".$tempTable."[,\s]/i",$this->_sql, $tempArray, PREG_PATTERN_ORDER);
					if (count($tempArray)>1 && count($tempArray[1])>0) $value = $tempArray[1][0];
					else $value = null;
					if (isset($this->_table_prefix) && strlen($this->_table_prefix)>0 && strpos($tempTable,$this->_table_prefix)===0) $tempTable = substr($tempTable, strlen( $this->_table_prefix));
					$value = $value?$value:$tempTable;
					$tableAliases[$tempTable]=$value;
				}
				
				if ((!($value=="session" || strpos($value,"jf_")===0)) && $this->translatedContentAvailable($value)){
				/// ARGH !!! I must also look for aliases for fieldname !!
					$tempName = $meta->name;
					$tempArray=array();
					preg_match_all("/(\w*)\s+AS\s+".$tempName."[,\s]/i",$this->_sql, $tempArray, PREG_PATTERN_ORDER);
					if (count($tempArray)>1 && count($tempArray[1])>0) {
						//echo "$meta->name is an alias for ".$tempArray[1][0]."<br>";
						$nameValue = $tempArray[1][0];
					}
					else $nameValue = $meta->name;

					if (!array_key_exists($value,$this->_refTables["tableAliases"])) $this->_refTables["tableAliases"][$value]=$meta->table;
					// I can't use the field name as the key since it may not be unique!
					if (!in_array($value,$this->_refTables["fieldTablePairs"])) $this->_refTables["fieldTablePairs"][]=$value;
					if (!array_key_exists($nameValue,$this->_refTables["fieldAliases"])) $this->_refTables["fieldAliases"][$meta->name]=$nameValue;				

					// Put all the mapping data together so that everything is in sync and I can check fields vs aliases vs tables in one place
					$this->_refTables["fieldTableAliasData"][$i]=array("fieldNameAlias"=>$meta->name, "fieldName"=>$nameValue,"tableNameAlias"=>$meta->table,"tableName"=>$value);
				}
				
			}
		}
		$this->fillRefTableCache($cacheDir,$cacheFile);
		
	}

	/** Internal function to return reference table names from an sql query
	 *
	 * @return	string	table name
	 */
	function _getRefTables(){
		return $this->_refTables;
	}

	/**
	 * Returns a reference to the global Database object, only creating it
	 * if it doesn't already exist. And keeps sure that there is only one
	 * instace for a specific combination of the JDatabase signature
	 *
	 * @param string  Database driver
	 * @param string Database host
	 * @param string Database user name
	 * @param string Database user password
	 * @param string Database name
	 * @param string Common prefix for all tables
	 * @return database A database object
	 * @since 1.5
	*/
	function &getInstance( $driver='mysql', $host='localhost', $user, $pass, $db='', $table_prefix='' )
	{
		$signature = serialize(array($driver, $host, $user, $pass, $db, $table_prefix));
		$database = JDatabase::_getStaticInstance($signature,'JFDatabase',true);

		return $database;
	}	
}

class mldatabase extends JFDatabase 
{
	function mldatabase($options){
			$this->_db->JFDatabase( $options);

	}

	function loadObject( &$object, $translate=true, $language=null )
	{
		$object = $this->_db->loadObject($translate, $language);
	}
}
?>
