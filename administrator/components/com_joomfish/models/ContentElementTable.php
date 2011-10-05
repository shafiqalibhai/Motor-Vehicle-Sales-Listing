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
 * $Id: ContentElementTable.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage Models
 *
*/



// Don't allow direct linking
defined( 'JPATH_BASE' ) or die( 'Direct Access to this location is not allowed.' );

include_once(dirname(__FILE__).DS."ContentElementTableField.php");

/**
 * Description of a content element table.
 *
 * @package joomfish
 * @subpackage administrator
 * @copyright 2003-2009 Think Network GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version $Revision: 1251 $
 * @author Alex Kempkens <joomfish@thinknetwork.com>
 */
class ContentElementTable {
	var $Name;
	var $Fields;
	var $Filter;

	/** Standard constructor
	*/
	function ContentElementTable( $tableElement ) {
		$this->Name = trim( $tableElement->getAttribute( 'name' ) );

		$tableFields = $tableElement->getElementsByTagName( 'field' );
		$tableFields = $tableFields->toArray();
		$this->Fields =array();
		$this->IndexedFields =array();
		foreach( $tableFields as $tablefieldElement ) {
			$field = new ContentElementTablefield( $tablefieldElement );
			$this->Fields[] = $field;
			$this->IndexedFields[$field->Name] = $field;
		}

		$filterElement = $tableElement->getElementsByPath('filter', 1);
		if( $filterElement ) {
			$this->Filter = $filterElement->getText();
		}
	}

	/** Retrieves one field based on the name
	 * @param	string	Fieldname
	 * @return	object	field
	 */
	function getField( $name ) {
		$ret_field = null;
		foreach( $this->Fields  as $field ) {
			if ($field->Name == $name ) {
				$ret_field = $field;
				break;
			}
		}

		return $ret_field;
	}
}
?>
