<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport('joomla.application.component.view');
class SmartsiteViewDefault extends JView {
   function display($tpl = null) {
      $this->addTemplatePath(JPATH_COMPONENT_SITE . DS . 'views' . DS . 'default' . DS . 'tmpl');
      parent::display($tpl);
   }
}
?>