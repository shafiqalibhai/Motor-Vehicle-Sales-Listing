<?php
/**
* @version   $Id: toolbar.jumi.html.php 15 2008-11-03 15:42:08Z edo888 $
* @package   Jumi
* @copyright Copyright (C) 2008 Edvard Ananyan. All rights reserved.
* @license   GNU/GPL, see LICENSE.php
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

class TOOLBAR_Jumi {

	function _EDIT($applid)	{
		$cid = JRequest::getVar('cid',array(0));

		$text = ( $cid[0] ? JText::_( 'Edit' ) : JText::_( 'New' ) );

		JToolBarHelper::title(  JText::_( 'Jumi Application' ).': <small><small>[ ' . $text.' ]</small></small>' );
		//JToolBarHelper::Preview('index.php?option=com_application&tmpl=component&applid='.$applid);
		JToolBarHelper::save();
		if($text !== JText::_('New')) JToolBarHelper::apply();
		if ($cid[0]) JToolBarHelper::cancel('cancel','Close');
		else         JToolBarHelper::cancel();
		JToolBarHelper::help('screen.applications.edit');
	}

	function _DEFAULT() {
		JToolBarHelper::title(  JText::_( 'Jumi Applications Manager' ) );
		JToolBarHelper::publishList();
		JToolBarHelper::unpublishList();
		JToolBarHelper::deleteList();
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();
		JToolBarHelper::help( 'screen.applications' );
	}
}