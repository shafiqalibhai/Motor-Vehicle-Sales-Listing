<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_morfeoshow
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined('_JEXEC') or die('Restricted access');

class TableMorfeoshow_Img extends JTable {
	var $id 			= null;
	var $gallery_id 	= null;
	var $filename 		= null;
	var $title 			= null;
	var $imgdate		= null;	
	var $html 			= null;
	var $width 			= null;
	var $height 		= null;
	var $creator 		= null;
	var $link 			= null;


	function __construct(&$db)
	{
		parent::__construct( '#__morfeoshow_img', 'id', $db );
	}
}
?>