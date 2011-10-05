<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.event.plugin');

class plgSystemTemplateChooser extends JPlugin
{
  function plgSystemTemplateChooser(&$subject, $config)
  {
	parent::__construct($subject,$config);
  }

  function onAfterDispatch()
  {
    global $mainframe;
    if ($mainframe->isAdmin()) {
       return;
    }
    if (isset($_SESSION['template'])&&($_SESSION['template']!='')) {
      $mainframe->setTemplate($_SESSION['template']);
      return true;
    }
  }
}

?>
