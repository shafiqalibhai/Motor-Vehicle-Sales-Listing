<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class SmartsiteController extends JController
{
    
   function display() {
      $view = $this->getView('default');
      $view->display();
   }     

	function front_page()
	{
	    $view = $this->getView('smartsite'); 
	    $view->display('front_page');
  
	}

	function restore_defaults () {
      $model = $this->getModel('modules');
      $result = $model->restore_defaults();

   	  if ($result) 
   	  {
	   $msg	= JText::_('Defaults were successfully restored');
   	  } else {
   	   $msg	= JText::_('Unable to restore defaults');   
   	  }

      $this->setRedirect(($_SERVER['HTTP_REFERER'] != '') ? $_SERVER['HTTP_REFERER'] : JURI::base(), $msg);  	  
	  return $this->redirect();        	
		
	}
	
	function recover_deleted () {   
      $model = $this->getModel('modules');
      $result = $model->recover_deleted();
      
   	  if ($result) 
   	  {
	   $msg	= JText::_('Deleted modules were successfully recovered');
   	  } else {
   	   $msg	= JText::_('Unable to recover deleted modules');   
   	  }
   	  
   	  $this->setRedirect(($_SERVER['HTTP_REFERER'] != '') ? $_SERVER['HTTP_REFERER'] : JURI::base(), $msg);  
	  return $this->redirect();        	
		
	}	
	
	function synchronize_dependent_modules () {
	    
	    
	    $id	= JRequest::getInt( 'id_module', 0 );
	    $model = $this->getModel('modules');  
	    
	    if ($id>0) {
	            $model->synchronize_dependent_modules($id);
    	    
	    } else {
                JError::raiseWarning( 500, 'Wrong id_module' );
				return;	          
	    }
	}
	
	function add_module_submit() { //AJRSS specific
	    
	    jimport('joomla.html.parameter');
      
	    $name	= JRequest::getString( 'name', '' );
	    $url	= JRequest::getString( 'url', '' );
	    
	    $model = $this->getModel('modules');
	    $model->add_module_submit($name, $url);
	    
	    $view = $this->getView('smartsite'); 
	    
        $view->display('add_module_submit'); 
  	    
	}

	
	function add_module()
	{
		$view = $this->getView('smartsite'); 
        $view->addmodule_popup('add_module');
	}

   function reinstall() 
   {
       require_once(JPATH_SITE.DS . 'administrator/components/com_smartsite/install.smartsite.php');
   } 	

}

?>
