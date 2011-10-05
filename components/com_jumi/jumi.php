<?php
/**
* @version   $Id: jumi.php 15 2008-11-03 15:42:08Z edo888 $
* @package   Jumi
* @copyright Copyright (C) 2008 Edvard Ananyan. All rights reserved.
* @license   GNU/GPL, see LICENSE.php
*/

defined("_JEXEC") or die("Restricted access");

$fileid    = JRequest::getVar('fileid');
$database  = &JFactory::getDBO();
$user      = &JFactory::getUser();
$document  = &JFactory::getDocument();
$mainframe = &JFactory::getApplication('site');

$database->setQuery("select * from #__jumi where id = '{$fileid}' and access <= {$user->gid} and published = 1");
$appl = $database->loadObject();

if(!is_object($appl))
    JError::raiseError(404, "The Jumi Application is Unpublished or Removed");

$document->setTitle($appl->title);

eval("?>".$appl->custom_script);

if(!empty($appl->path))
    if(is_file($appl->path))
        require($appl->path);
    elseif(is_file($mainframe->getCfg('absolute_path').DS.$appl->path))
        require $mainframe->getCfg('absolute_path').DS.$appl->path;
    else
        JError::raiseError(404, "Couldn't find page");