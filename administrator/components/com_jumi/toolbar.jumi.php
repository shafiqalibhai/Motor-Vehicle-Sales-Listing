<?php
/**
* @version   $Id: toolbar.jumi.php 15 2008-11-03 15:42:08Z edo888 $
* @package   Jumi
* @copyright Copyright (C) 2008 Edvard Ananyan. All rights reserved.
* @license   GNU/GPL, see LICENSE.php
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

require_once(JApplicationHelper::getPath('toolbar_html'));

switch($task) {
	case 'edit':
		$cid = JRequest::getVar('cid',array(0),'','array' );
		if (!is_array( $cid ))
			$cid = array(0);
		TOOLBAR_Jumi::_EDIT($cid[0]);
		break;

	case 'add'  :
	case 'editA':
		$id = JRequest::getVar('id',0,'','int');
		TOOLBAR_Jumi::_EDIT( $id );
		break;

	default:
		TOOLBAR_Jumi::_DEFAULT();
		break;
}