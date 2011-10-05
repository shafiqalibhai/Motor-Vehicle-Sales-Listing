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

class TableMorfeoshow_Rating extends JTable {
	var $content_id 	= null;
	var $rating_sum 	= null;
	var $rating_count 	= null;
	var $lastip			= null;

	function __construct(&$db)
	{
		parent::__construct( '#__morfeoshow_rating', 'content_id', $db );
	}
}
?>