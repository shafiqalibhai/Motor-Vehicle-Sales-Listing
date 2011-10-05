<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport('joomla.application.component.model');
jimport('joomla.error.log');

class SmartsiteModelJson_Modules extends JModel {

	
	function clone_module($id) { //AJRSS specific
	    
	    jimport('joomla.html.parameter');
	    
        $globalVariables = &JComponentHelper::getParams( 'com_smartsite' );	    
	    
	    $db =& JFactory::getDBO();
	    $user	=& JFactory::getUser();
	    $module =& JTable::getInstance('module');
	    
	    if ($globalVariables->get('error_log_enabled')>0) {
	    
            $conf = JFactory::getConfig();
            $conf->loadObject(new JConfig());
            
            $log = & JLog::getInstance('smartsite.php');
            
            $logEntry = array();	
            
            $logEntry['comment'] = '=========START=======>SmartsiteModelJson_Modules->clone_module';
            $log->addEntry($logEntry); 	  
	    }
   

        $query = "SELECT * FROM #__smartsite_modules_users WHERE Id = '$id'";
        $db->setQuery($query);
        $smartsite_module = $db->loadObject();
        
        if ($globalVariables->get('error_log_enabled')>0) {
            $logEntry['comment'] = $db->getQuery();
            $log->addEntry($logEntry);
        } 	        
        
        $query = "SELECT MAX(ordering) FROM #__smartsite_modules_users WHERE holder_id = '$smartsite_module->holder_id'";
        $db->setQuery($query);
        $ordering = $db->loadResult()+1; 
        
        if ($globalVariables->get('error_log_enabled')>0) {
            $logEntry['comment'] = $db->getQuery();
            $log->addEntry($logEntry);
        } 		
          
        $modified = date("Y-m-d H:i:s", time());
            
        $query = "INSERT INTO #__smartsite_modules_users
        SET holder_id = '$smartsite_module->holder_id',
        box_id = '$smartsite_module->box_id',
        modorder = '$ordering',
        user_id = '$user->id',
        title = '$smartsite_module->title',
        content = '$smartsite_module->content',
        published = '$smartsite_module->published',
        showtitle = '$smartsite_module->showtitle',
        params = '$smartsite_module->params'";
        $db->setQuery($query);
        //echo $db->getQuery()."<hr>";
        $db->query();
        
        if ($globalVariables->get('error_log_enabled')>0) {
            $logEntry['comment'] = $db->getQuery();
            $log->addEntry($logEntry);
            $logEntry['comment'] = '=========END========>SmartsiteModelJson_Modules->clone_module';
            $log->addEntry($logEntry); 	            
        } 	       
                    

	}	
}
?>
