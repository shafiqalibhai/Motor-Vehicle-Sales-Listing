<?php
/**
* @version   $Id: router.php 53 2008-12-06 10:16:52Z edo888 $
* @package   Jumi
* @copyright Copyright (C) 2008 Edvard Ananyan. All rights reserved.
* @license   GNU/GPL, see LICENSE.php
*/

function JumiBuildRoute(&$query) {
    $db =& JFactory::getDBO();
    $segments = array();

    if(isset($query['fileid'])) {
        $db->setQuery('select alias from #__jumi where id = '.$query['fileid']);
        $segments[] = $db->loadResult();
        unset($query['fileid']);
    }

    return $segments;
}

function JumiParseRoute($segments) {
    $db =& JFactory::getDBO();
    $vars = array();

    $db->setQuery('select id from #__jumi where alias = "'.$segments[0].'"');
    $vars['fileid'] = $db->loadResult();

    return $vars;
}