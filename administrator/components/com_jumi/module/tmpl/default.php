<?php
/**
* @version $Id: default.php 19 2008-11-21 21:28:28Z martin2hajek $
* @package Joomla! 1.5
* @copyright (c) 2008 Martin Hajek
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');

if($code_written.$storage_source != '') { //something to show
  if($code_written != '') //if code written
    eval ('?>'.$code_written); //include custom script written
  
  if($storage_source != '') { // if record id or filepathname
    if(is_int($storage_source)) { //it is record id
      if($code_stored != null) {
				eval ('?>'.$code_stored); //include custom script written
      } else {
				echo '<div style="color:#FF0000;background:#FFFF00;">'.JText::sprintf('ERROR_RECORD', $storage_source).'</div>';
      }
    } else { //it is file
      if(is_readable($storage_source)) {
				include($storage_source); //include file
      } else {
				echo '<div style="color:#FF0000;background:#FFFF00;">'.JText::sprintf('ERROR_FILE', $storage_source).'</div>';
      }
    }
  }
} else { //nothing to show
  echo '<div style="color:#FF0000;background:#FFFF00;">'.JText::sprintf('ERROR_CONTENT').'</div>';
}
?>