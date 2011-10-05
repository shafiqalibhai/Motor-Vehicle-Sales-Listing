
<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
 
require_once(JPATH_BASE.DS.'components'.DS.'com_smartsite'.DS.'lib'.DS.'jpanesmartsite.php');
 
/*
 * Module chrome for rendering the smartmodule
 */
function modChrome_smartsite($module, &$params, &$attribs) 
{
 
  jimport('joomla.html.pane');
  // Initialize variables
  $smartsite = new JPaneSmartsite ();
  $id_module = $module->id_smartsite_module > 0 ? $module->id_smartsite_module : $module->id;
  echo $smartsite->startPanel( JText::_( $module->title ), $id_module );
  echo $module->content;
  echo $smartsite->endPanel();
}
?>
