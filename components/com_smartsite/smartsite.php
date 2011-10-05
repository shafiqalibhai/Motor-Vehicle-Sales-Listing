<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$controller = JRequest::getVar('controller', 'default');

/*switch ($controller) {
    case 'modules':
            // Make sure the user is authorized to view this page
            $user = & JFactory::getUser();
            if (!$user->authorize( 'com_modules', 'manage' )) {
            	$mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
            }
            
            require_once(JPATH_BASE .DS. 'administrator'.DS. 'includes'. DS . 'toolbar.php');
            
            // Require the base controller
            require_once(JPATH_BASE .DS. 'administrator'.DS. 'components'. DS . 'com_modules' . DS . 'controller.php');
            
            
            // Create the controller
            $controller	= new ModulesController( array( 'default_task' => 'view' ));

        
        break;
    default:*/
            require_once(JPATH_BASE .DS. 'administrator'.DS. 'includes'. DS . 'toolbar.php');
            require_once(JPATH_COMPONENT_SITE . DS . 'controllers' . DS . "$controller.php"); 
            
            $controller = new SmartsiteController( );        
/*        break;       
}
*/


$controller->execute(JRequest::getVar('task', null, 'default', 'cmd'));
$controller->redirect(); 

?>