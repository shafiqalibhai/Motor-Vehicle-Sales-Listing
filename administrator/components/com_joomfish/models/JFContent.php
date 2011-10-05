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
 * $Id: JFContent.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage Models
 *
*/
/**
 * Database class for handling the joomfish contents
 *
 * @package joomfish
 * @subpackage administrator
 * @copyright 2003-2009 Think Network GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version $Revision: 1251 $
 * @author Alex Kempkens <joomfish@thinknetwork.com>
 */
class jfContent extends JTable  {
	/** @var int Primary ke */
	var $id=null;
	/** @var int Reference id for the language */
	var $language_id=null;
	/** @var int Reference id for the original content */
	var $reference_id=null;
	/** @var int Reference table of the original content */
	var $reference_table=null;
	/** @var int Reference field of the original content */
	var $reference_field=null;
	/** @var string translated value*/
	var $value=null;
	/** @var string original value for equals check*/
	var $original_value=null;
	/** @var string original value for equals check*/
	var $original_text=null;
	/** @var int user that checked out the jfContent*/
	//	var $checked_out=null;					// not yet supported
	/** @var datetime time when the checkout was done*/
	//	var $checked_out_time=null;			// not yet supported
	/** @var date Date of last modification*/
	var $modified=null;
	/** @var string Last translator*/
	var $modified_by=null;
	/** @var boolean Flag of the translation publishing status*/
	var $published=false;

	/** Standard constructur
	*/
	function jfContent( &$db ) {
		parent::__construct( '#__jf_content', 'id', $db );
	}

	/**
	 * Bind the content of the newValues to the object. Overwrite to make it possible
	 * to use also objects here
	 */
	function bind( $newValues ) {
		if (is_array( $newValues )) {
			return parent::bind( $newValues );
		} else {
			foreach (get_object_vars($this) as $k => $v) {
				if ( isset($newValues->$k) ) {
					$this->$k = $newValues->$k;
				}
			}
		}
		return true;
	}


	/**
	 * Validate language information
	 * Name and Code name are mandatory
	 * activated will automatically set to false if not set
	 */
	function check() {
		if (trim( $this->language_id ) == '') {
			$this->_error = JText::_('NO_LANGUAGE_DBERROR');
			return false;
		}

		return true;
	}

	function toString() {
		$retString = "<p>content field:<br />";
		$retString .= "id=$this->id; language_id=$this->language_id<br>";
		$retString .= "reference_id=$this->reference_id, reference_table=$this->reference_table, reference_field=$this->reference_field<br>";
		$retString .= "value=>" .htmlspecialchars($this->value). "<<br />";
		$retString .= "original_value=>" .htmlspecialchars($this->original_value). "<<br />";
		$retString .="modified=$this->modified, modified_by=$this->modified_by, published=$this->published</p>";

		return $retString;
	}
}
