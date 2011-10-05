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
 * $Id: cpanel.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage cpanel
 *
*/


defined( 'JPATH_BASE' ) or die( 'Direct Access to this location is not allowed.' );

jimport('joomla.application.component.controller');

/**
 * The JoomFish Tasker manages the general tasks within the Joom!Fish admin interface
 *
 */
class CpanelController extends JController  {
	/**
	 * Joom!Fish Controler for the Control Panel
	 * @param array		configuration
	 * @return joomfishTasker
	 */
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'show',  'display' );

		// ensure DB cache table is created and up to date
		JLoader::import( 'helpers.controllerHelper',JOOMFISH_ADMINPATH);
		JLoader::import( 'classes.JCacheStorageJFDB',JOOMFISH_ADMINPATH);
		JoomfishControllerHelper::_checkDBCacheStructure();
		JoomfishControllerHelper::_checkDBStructure();
	}

	/**
	 * Standard display control structure
	 * 
	 */
	function display( )
	{
		$this->view = & $this->getView('cpanel');
		parent::display();
	}
	
	function cancel()
	{
		$this->setRedirect( 'index.php?option=com_joomfish' );
	}
}

?>
