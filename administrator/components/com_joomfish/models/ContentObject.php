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
 * $Id: ContentObject.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage Models
 *
*/
include_once(dirname(__FILE__).DS."JFContent.php");

/**
 * Representation of one content with his translation.
 * The object includes information from the original object and
 * the refering translation. Based on that information it is
 * able to handle all necessary interactions with the tranlsation.
 * Each instance of this object represents only one translation in
 * on specified language, but it handles all the fields within the
 * ContentElement.
 *
 * @package joomfish
 * @subpackage administrator
 * @copyright 2003-2009 Think Network GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version $Revision: 1251 $
 * @author Alex Kempkens <joomfish@thinknetwork.com>
 */
class ContentObject {
	/** @var _contentElement Reference to the ContentElement definition of the instance */
	var $_contentElement;

	/** @var id ID of the based content */
	var $id;

	/** @var translation_id 	translation id value */
	var $translation_id=0;

	/** @var checked_out User who checked out this content if any */
	var $checked_out;

	/** @var title Title of the object; used from the field configured as titletext */
	var $title;

	/** @var titleTranslation the actual translation of the title */
	var $titleTranslation;

	/** @var language_id language for the translation */
	var $language_id;

	/** @var language Language name of the content */
	var $language;

	/** @var lastchanged Date when the translation was last modified */
	var $lastchanged;

	/** @var modified_date Date of the last modification of the content - if existing */
	var $modified_date;

	/** @var state State of the translation
	 * -1 := for at least one field of the content the translation is missing
	 *  0 := the translation exists but the original content was changed
	 *  1 := the translation is valid
	 */
	var $state=-1;

	/** @var int Number of changed fields */
	var $_numChangedFields=0;
	/** @var int Number of new fields, with an original other than NULL */
	var $_numNewAndNotNullFields=0;
	/** @var int Number for fields unchanged */
	var $_numUnchangedFields=0;

	/** published Flag if the translation is published or not */
	var $published=false;

	/** Standard constructor
	 *
	 * @param	languageID		ID of the associated language
	 * @param	elementTable	Reference to the ContentElementTable object
	 */
	function ContentObject( $languageID,& $contentElement, $id=-1 ) {
		$db =& JFactory::getDBO();

		if($id>0) $this->id = $id;
		$this->language_id = $languageID;
		// active languages are cached in $_JOOMFISH_MANAGER - use these if possible
		global $_JOOMFISH_MANAGER;
		if (isset($_JOOMFISH_MANAGER) && $_JOOMFISH_MANAGER->activeLanguagesCacheByID && array_key_exists($languageID,$_JOOMFISH_MANAGER->activeLanguagesCacheByID)){
			$lang = $_JOOMFISH_MANAGER->activeLanguagesCacheByID[$languageID];
		}
		else {
			$lang = new TableJFLanguage($db);
			$lang->load( $languageID );
		}
		$this->language = $lang->name;
		$this->_contentElement = $contentElement;
	}

	/** Loads the information based on a certain content ID
	 */
	function loadFromContentID( $id=null ) {
		$db =& JFactory::getDBO();
		if( $id!=null && isset($this->_contentElement) && $this->_contentElement!==false ) {
			$db->setQuery( $this->_contentElement->createContentSQL( $this->language_id, $id ) );
			$row=null;
			$row = $db->loadObject(  );
			$this->id = $id;
			$this->readFromRow( $row );
		}
	}

	/** Reads the information from the values of the form
	 * The content element will be loaded first and then the values of the override
	 * what is actually in the element
	 *
	 * @param	array	The values which should be bound to the object
	 * @param	string	The field prefix
	 * @param	string	An optional field
	 * @param 	boolean	try to bind the values to the object
	 * @param 	boolean	store original values too
	 */
	function bind( $formArray, $prefix="", $suffix="", $tryBind=true, $storeOriginalText=false ) {
		$user =& JFactory::getUser();
		$db =& JFactory::getDBO();

		if( $tryBind ) {
			$this->_jfBindArrayToObject( $formArray, $this );
		}
		if( $this->published=="" ) $this->published=0;

		// Go thru all the fields of the element and try to copy the content values
		$elementTable =& $this->_contentElement->getTable();

		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldName=$field->Name;
			if( isset($formArray[$prefix ."refField_". $fieldName .$suffix]) ) {

				// Handle magic quotes compatability
				if (get_magic_quotes_gpc() && $field->Type !== 'htmltext') {
					$formArray[$prefix ."refField_". $fieldName .$suffix] = JRequest::_stripSlashesRecursive( $formArray[$prefix ."refField_". $fieldName .$suffix] );
					$formArray[$prefix ."origText_". $fieldName .$suffix] = JRequest::_stripSlashesRecursive( $formArray[$prefix ."origText_". $fieldName .$suffix] );
				}
				else {
					$formArray[$prefix ."refField_". $fieldName .$suffix] = JRequest::getVar( $prefix ."refField_". $fieldName .$suffix, '', 'post', 'string', JREQUEST_ALLOWRAW );					
					$formArray[$prefix ."origText_". $fieldName .$suffix] = JRequest::getVar( $prefix ."origText_". $fieldName .$suffix, '', 'post', 'string', JREQUEST_ALLOWRAW );					
				}

				$translationValue = $formArray[$prefix ."refField_". $fieldName .$suffix];
				$originalValue = $formArray[$prefix ."origValue_". $fieldName .$suffix];
				$originalText = ($storeOriginalText) ? $formArray[$prefix ."origText_". $fieldName .$suffix] : null;
				$fieldContent = new jfContent($db);

				// code cleaner for xhtml transitional compliance
				if( $field->Type == 'titletext' || $field->Type == 'text') {
					jimport('joomla.filter.output');
					//$translationValue = JFilterOutput::ampReplace( $translationValue );
				}
				if( $field->Type == 'htmltext' ) {
					$translationValue = str_replace( '<br>', '<br />', $translationValue );

					// remove <br /> take being automatically added to empty fulltext
					$length	= strlen( $translationValue ) < 9;
					$search = strstr( $translationValue, '<br />');
					if ( $length && $search ) {
						$translationValue = NULL;
					}
				}
				if ($field->Type == "params" && is_array($translationValue)){
					$registry = new JRegistry();
					$registry->loadArray($translationValue);
					$translationValue = $registry->toString();
				}
				if ($field->posthandler!=""){
					if (method_exists($this,$field->posthandler)){
						$handler = $field->posthandler;
						$this->$handler($translationValue);
					}
				}

				$fieldContent->id=$formArray[$prefix . "id_" .$fieldName .$suffix];
				$fieldContent->reference_id = (intval($formArray[$prefix . "reference_id" .$suffix]) > 0) ? intval($formArray[$prefix . "reference_id" .$suffix]) : $this->id;
				$fieldContent->language_id = $this->language_id;
				$fieldContent->reference_table= $db->getEscaped( $elementTable->Name );
				$fieldContent->reference_field= $db->getEscaped( $fieldName );
				$fieldContent->value = $translationValue;
				// original value will be already md5 encoded - based on that any encoding isn't needed!
				$fieldContent->original_value = $originalValue;
				$fieldContent->original_text = $originalText;
				$fieldContent->modified = date( "Y-m-d H:i:s" );
				$fieldContent->modified_by = $user->id;
				$fieldContent->published=$this->published;
				$field->translationContent = $fieldContent;
				
			}
		}
	}

	// Post handlers
	function filterTitle(&$alias){
		if($alias=="") {
			$alias = JRequest::getString("refField_title");
		}
		$alias = JFilterOutput::stringURLSafe($alias);
	}
	
	function filterName(&$alias){
		if($alias=="") {
			$alias = JRequest::getString("refField_name");
		}
		$alias = JFilterOutput::stringURLSafe($alias);
	}

	function saveUrlParams(&$link){
		$urlparams = JRequest::getVar("urlparams",array(),'post',"array");
		if (is_array($urlparams) && count($urlparams)>0){
			$pos = strpos( $link, '?' );
			if ($pos !== false)
			{
				$prefix = substr( $link, 0, $pos );
				$query	= substr( $link, $pos+1 );

				$temp = array();
				if(strpos($query, '&amp;') !== false) {
					$query = str_replace('&amp;', '&', $query);
				}
				parse_str( $query, $temp );
				$temp2 = array_merge( $temp, $urlparams );

				$temp3 = array();
				foreach ($temp2 as $k => $v)
				{
					$temp3[] = $k.'='.$v;
				}
				$url = null;
				$link = $prefix . '?' . implode( '&', $temp3 );
			}
		}
	}

	/** Reads the information out of an existing mosDBTable object into the contentObject.
	 *
	 * @param	object	instance of an mosDBTable object
	 */
	function updateMLContent( &$dbObject ) {
		$db =& JFactory::getDBO();
		if( $dbObject === null ) return;

		if( $this->published=="" ) $this->published=0;

		// retriev the original untranslated object for references
		// this MUST be copied by value and not by reference!
		$origObject = clone($dbObject);
		$key = $dbObject->get( '_tbl_key' );
		$db->setQuery( "SELECT * FROM " .$dbObject->get('_tbl'). " WHERE " .$key. "='" .$dbObject->$key. "'" );
		$origObject = $db->loadObject(  false );

		$this->copyContentToTranslation( $dbObject, $origObject );
	}

	/**
	 * This method copies a currect database object into the translations
	 * The original object might be the same kind of object and it is not required that
	 * both objects are of the type mosDBTable!
	 *
	 * @param object $dbObject new values for the translation
	 * @param object $origObject original values based on the db for reference
	 */
	function copyContentToTranslation( &$dbObject, $origObject ) {
		$user =& JFactory::getUser();

		// Go thru all the fields of the element and try to copy the content values
		$elementTable =& $this->_contentElement->getTable();

		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldName=$field->Name;
			if( isset($dbObject->$fieldName) && $field->Translate ) {
				$translationValue = $dbObject->$fieldName;
				$fieldContent =& $field->translationContent;

				$fieldContent->value = $translationValue;
				$dbObject->$fieldName = $origObject->$fieldName;
				$fieldContent->original_value = md5( $origObject->$fieldName );
				// ToDo: Add handling of original text!

				$fieldContent->modified = date( "Y-m-d H:i:s" );
				$fieldContent->modified_by = $user->id;
			}
		}
	}

	/** Reads some of the information from the overview row
	 */
	function readFromRow( $row ) {
		$this->id = $row->id;
		$this->translation_id = $row->jfc_id;
		$this->title = $row->title;
		$this->titleTranslation = $row->titleTranslation;
		if( !isset($this->language_id) || $this->language_id == -1 ) {
			$this->language_id = $row->language_id;
			$this->language = $row->language;
		}
		$this->lastchanged = $row->lastchanged;
		$this->published = $row->published;
		if( isset($row->modified_date) ) $this->modified_date = $row->modified_date;
		if( isset($row->checked_out) ) $this->checked_out = $row->checked_out;

		// Go thru all the fields of the element and try to copy the content values
		$elementTable =& $this->_contentElement->getTable();
		$fieldContent = new jfContent($db);
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldName = $field->Name;
			if( isset($row->$fieldName) ) {
				$field->originalValue = $row->$fieldName;
			}
		}


		$this->_loadContent();
	}

	/** Reads all translation information from the database
	 *
	 */
	function _loadContent() {
		$db =& JFactory::getDBO();

		$elementTable = $this->getTable();
		$sql = "select * "
		."\n  from #__jf_content"
		."\n where reference_id='" .$this->id."'"
		."\n   and reference_table='" .$elementTable->Name. "'";
		if( isset($this->language_id) && $this->language_id!="" ) {
			$sql .= "\n   and language_id=" .$this->language_id;
		}

		//echo "load sql=>$sql<<br />";
		$db->setQuery( $sql );
		$rows = $db->loadObjectList(false);
		echo $db->getErrorMsg();

		$translationFields=null;
		if( count($rows) > 0 ) {
			foreach( $rows as $row ) {
				$fieldContent = new jfContent($db);
				if( !$fieldContent->bind( $row ) ) {
					echo $fieldContent->getError();
				}
				$translationFields[$fieldContent->reference_field] = $fieldContent;
			}
		}

		// Check fields and their state
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			if( isset($translationFields[$field->Name]) ) {
				$fieldContent = $translationFields[$field->Name];
			} else {
				$fieldContent = null;
			}

			if( $field->Translate) {
				if(isset($fieldContent) ) {
					$field->changed= (md5($field->originalValue) != $fieldContent->original_value);
					if( $field->changed ) {
						$this->_numChangedFields ++;
					}
					else $this->_numUnchangedFields++;
				}
				else{
					$fieldContent = new jfContent($db);
					$fieldContent->reference_id = $this->id;
					$fieldContent->reference_table = $elementTable->Name;
					$fieldContent->reference_field = $field->Name;
					$fieldContent->language_id = $this->language_id;
					$fieldContent->original_value = $field->originalValue;
					$field->changed =false;
					if ( $field->originalValue != '' ) {
						$this->_numNewAndNotNullFields ++;
					}
				}
			}
			$field->translationContent = $fieldContent;
		}

		// Checking the record state based on the fields. If one field is changed the record is modifed
		if( $this->_numChangedFields == 0 && $this->_numNewAndNotNullFields == 0 ) {
			$this->state = 1;
		} elseif ( $this->_numChangedFields == 0 && $this->_numNewAndNotNullFields > 0 && $this->_numUnchangedFields==0) {
			$this->state = -1;
		} else {
			$this->state = 0;
		}
	}

	/** Returns the content element fields which are text and can be translated
	 *
	 * @param	boolean	onle translateable fields?
	 * @return	array	of fieldnames
	 */
	function getTextFields( $translation = true ) {
		$elementTable =& $this->_contentElement->getTable();
		$textFields = null;

		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldType = $field->Type;
			if( $field->Translate == $translation && ($fieldType=="htmltext" || $fieldType=="text") ) {
				$textFields[] = $field->Name;
			}
		}

		return $textFields;
	}

	/**
	 * Returns the field type of a field
	 *
	 * @param string $fieldname
	 */
	function getFieldType($fieldname){
		$elementTable =& $this->_contentElement->getTable();
		$textFields = null;

		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			if ($elementTable->Fields[$i]->Name == $fieldname) return $elementTable->Fields[$i]->Type;
		}
		return "text";
	}

	/** Sets all fields of this content object to a certain published state
	*/
	function setPublished( $published ) {
		$elementTable =& $this->_contentElement->getTable();
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldContent =& $field->translationContent;
			$fieldContent->published = $published;
		}
	}

	/** Updates the reference id of all included fields. This
	 * Happens e.g when the reference object was created new
	 *
	 * @param	referenceID		new reference id
	 */
	function updateReferenceID( $referenceID ) {
		if( intval($referenceID) <= 0 ) return;

		$elementTable =& $this->_contentElement->getTable();
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldContent =& $field->translationContent;
			$fieldContent->reference_id = $referenceID;
		}
	}

	/** Stores all fields of the content element
	 */
	function store() {
		$elementTable =& $this->_contentElement->getTable();
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldContent =& $field->translationContent;

			if( $field->Translate ) {
				if( isset($fieldContent->reference_id) ) {
					if ( isset($fieldContent->value) && $fieldContent->value!='' ) {
						$fieldContent->store(true);
					} else {
						$fieldContent->delete();
					}
				}
			}
		}
	}

	/** Checkouts all fields of this content element
	*/
	function checkout( $who, $oid=null ) {
		$elementTable =& $this->_contentElement->getTable();
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldContent =& $field->translationContent;

			if( $field->Translate ) {
				if( isset($fieldContent->reference_id) ) {
					$fieldContent->checkout( $who, $oid );
					echo $fieldContent->getError();
				}
			}
		}
	}

	/** Checkouts all fields of this content element
	*/
	function checkin( $oid=null ) {
		$elementTable =& $this->_contentElement->getTable();
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldContent =& $field->translationContent;

			if( $field->Translate ) {
				if( isset($fieldContent->reference_id) ) {
					$fieldContent->checkin( $oid );
					echo $fieldContent->getError();
				}
			}
		}
	}

	/** Delets all translations (fields) of this content element
	*/
	function delete( $oid=null ) {
		$elementTable =& $this->_contentElement->getTable();
		for( $i=0; $i<count($elementTable->Fields); $i++ ) {
			$field =& $elementTable->Fields[$i];
			$fieldContent =& $field->translationContent;
			if( $field->Translate ) {
				if( isset($fieldContent->reference_id) ) {
					if( !$fieldContent->delete( $oid ) ) {
						echo $fieldContent->getError() ."<br />";
					}
				}
			}
		}
	}
	/** Returns the content element table this content is based on
	 */
	function  getTable() {
		return $this->_contentElement->getTable();
	}



	/**
	 * Temporary legacy function copied from Joomla
	 *
	 * @param unknown_type $array
	 * @param unknown_type $obj
	 * @param unknown_type $ignore
	 * @param unknown_type $prefix
	 * @return unknown
	 */
	function _jfBindArrayToObject( $array, &$obj, $ignore='', $prefix=NULL )
	{
		if (!is_array( $array ) || !is_object( $obj )) {
			return (false);
		}

		foreach (get_object_vars($obj) as $k => $v)
		{
			if( substr( $k, 0, 1 ) != '_' )
			{
				// internal attributes of an object are ignored
				if (strpos( $ignore, $k) === false)
				{
					if ($prefix) {
						$ak = $prefix . $k;
					} else {
						$ak = $k;
					}
					if (isset($array[$ak])) {
						$obj->$k = $array[$ak];
					}
				}
			}
		}

		return true;
	}

}
?>
