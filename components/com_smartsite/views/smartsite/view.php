<?php
defined('_JEXEC') or die();
jimport('joomla.application.component.view');
//$document = JFactory::getDocument();
//$document->addStyleSheet(JURI::base() . 'components/com_login_box/assets/css/style1.css');

class SmartsiteViewSmartsite extends JView {
   function display($tmpl = null) {
      parent::display($tmpl);
   }
    function addmodule_popup($tpl = null)
	{
		global $mainframe;
		
        jimport('joomla.application.component.view');
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base() . 'components/com_smartsite/assets/css/add_module.css');
        $document->addScript(JURI::base() . 'components/com_smartsite/assets/js/add_module.js');
        
		parent::display($tpl);
       
	}    
}
?>