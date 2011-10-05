<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

JToolBarHelper::title('SmartSite');
JToolBarHelper::preferences('com_smartsite');

jimport('joomla.application.component.helper');
$view = JRequest::getVar('view', 'default');

require_once(JPATH_COMPONENT_SITE . DS . 'controllers' . DS . "$view.php");

$controller = new SmartsiteController();
$controller->addModelPath(JPATH_COMPONENT_SITE . DS . 'models');
$controller->addViewPath(JPATH_COMPONENT_SITE . DS . 'views');
$controller->execute(JRequest::getVar('task', null, 'default', 'cmd'));
$controller->redirect();
?>