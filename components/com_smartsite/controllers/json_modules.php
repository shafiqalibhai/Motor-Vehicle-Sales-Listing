<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');
jimport('joomla.error.log');

class SmartsiteController extends JController
{

	function dragndrop() {
	    
        if ((strtolower($_SERVER['REQUEST_METHOD']) != 'post')||($_POST['caller'] != "smartsite"))
                      die('Direct Access to this location is not allowed.');
        
$db = JFactory::getDBO();
$user	=& JFactory::getUser();
$log = & JLog::getInstance('smartsite.php');

$logEntry = array();

    //below are the security checks to stop SQL injections via a post.
    //only numbers allowed for this var    
   if ($_POST['user_id'])
      if (ereg("^[0-9]*$", $_POST['user_id']) )
        $user_id = mysql_real_escape_string($_POST['user_id']);

    //only numbers and letters allowed for this var    
    if ($_POST['holder_id']!== null)
      if (ereg("^[0-9a-zA-Z]*$", $_POST['holder_id']) )
        $holder_id = mysql_real_escape_string($_POST['holder_id']);
        
    //only numbers and letters allowed for this var    
    if ($_POST['box_id']!== null)
      if (ereg("^[0-9a-zA-Z]*$", $_POST['box_id']) ) {
        $box_id_fake = mysql_real_escape_string($_POST['box_id']);   
        if ($user->id > 0) {
          $query = "SELECT box_id FROM #__smartsite_modules_users WHERE Id = '$box_id_fake'";
          $db->setQuery($query); 
          
          $logEntry['comment'] = $db->getQuery();
          $log->addEntry($logEntry);

          $box_id = $db->loadResult();  
        }
      }
    //only numbers allowed for this var    
    if ($_POST['order']!== null)
      if (ereg("^[0-9]*$", $_POST['order']) )
        $order = mysql_real_escape_string($_POST['order']);
    
        //only 0 and 1 allowed for this var    
    if ($_POST['minimized']!== null)
      if (ereg("^(0|1)$", $_POST['minimized']) )
        $minimized = mysql_real_escape_string($_POST['minimized']);
    
            //This query is to determine if we should do an insert or an update
            //with the received location information
            $db->setQuery( " SELECT COUNT(*) FROM #__smartsite_modules_users m"
			       . "\n WHERE m.user_id=".$user_id
             . "\n AND m.box_id = ".$box_id);
        
          $logEntry['comment'] = $db->getQuery();
          $log->addEntry($logEntry);             
            //exit;
            //Load the results
            $result =  $db->loadResult();
            
            //If the result is >0 then records already exist so update the database	       	
	       	  if ($result>0){
	       	  
              //update our values if they exist
              $db->setQuery( " UPDATE #__smartsite_modules_users m SET\n"
              . "modorder  = ".$order.",\n "
              . "minimized ='".$minimized."',\n"
              . "holder_id = '".$holder_id."'\n"
              . "WHERE m.user_id = ".$user_id."\n"
              . "AND m.box_id    = ".$box_id."\n"
              . "AND m.Id    = ".$box_id_fake);
         
           }else{
               
              //If the result = 0 then records don't exist so insert them into the database
              
                $db->setQuery( " SELECT position FROM #__modules"
    			       . "\n WHERE id=".$box_id);
            
                $position =  $db->loadResult();  
                
                if ($position != $holder_id) {
                  //check if module changed its position, and if yes insert all modules from the old position
                  //except the module which is being dropped    
                  $db->setQuery("SELECT id, position, ordering FROM #__modules WHERE position = '$position' 
                  AND published = '1' 
                  AND id != '$box_id'");
                  $modules = $db->loadObjectList();  
                  
                  foreach ($modules as $module) {
                  	  $query = " INSERT INTO #__smartsite_modules_users ( user_id, holder_id, box_id, modorder, minimized)"
                                    . " VALUES (".$user_id.",'".$module->position."',".$module->id.",".$module->ordering.",'0')"; 
                      //insert our values if they don't exist
                      $db->setQuery( $query);
                      $db->query();
                  }
                                
                }              
               
           
              $query = " INSERT INTO #__smartsite_modules_users ( user_id, holder_id, box_id, modorder, minimized)"
                                    . " VALUES (".$user_id.",'".$holder_id."',".$box_id.",".$order.",'".$minimized."')"; 
              //insert our values if they don't exist
              $db->setQuery( $query);
              
           }//if ($result>0) - else
           //Process the insert/update
           $result =  @$db->loadResult();    
	    
	}
	
	function delete() {
	    
        if ((strtolower($_SERVER['REQUEST_METHOD']) != 'post')||($_POST['caller'] != "smartsite"))
                      die('Direct Access to this location is not allowed.');
        

    $db = JFactory::getDBO();
    $user	=& JFactory::getUser();
    $globalVariables = &JComponentHelper::getParams( 'com_smartsite' );	
    $log = & JLog::getInstance('smartsite.php');
    
    $logEntry = array();    

        if ($globalVariables->get('error_log_enabled')>0) {        
            $logEntry['comment'] = '=========START=======>SmartsiteController->delete';
            $log->addEntry($logEntry);           
        }    

    //below are the security checks to stop SQL injections via a post.
    //only numbers allowed for this var    
   if ($_POST['user_id'])
      if (ereg("^[0-9]*$", $_POST['user_id']) )
        $user_id = mysql_real_escape_string($_POST['user_id']);
       
    //only numbers and letters allowed for this var    
    if ($_POST['box_id']!== null)
      if (ereg("^[0-9a-zA-Z]*$", $_POST['box_id']) ) {
        $box_id_fake = mysql_real_escape_string($_POST['box_id']);   
        if ($user->id > 0) {
            
          $query = "SELECT box_id FROM #__smartsite_modules_users WHERE Id = '$box_id_fake'";  
          $db->setQuery($query); 
          $box_id_real = $db->loadResult();
          
        if ($globalVariables->get('error_log_enabled')>0) {        
          $logEntry['comment'] = $db->getQuery();
          $log->addEntry($logEntry);           
        }           
        
          
          $query = "SELECT COUNT(*) FROM #__smartsite_modules_users WHERE box_id = '$box_id_real' AND user_id = '$user->id'";  
          $db->setQuery($query); 
            if ($globalVariables->get('error_log_enabled')>0) {        
              $logEntry['comment'] = $db->getQuery();
              $log->addEntry($logEntry);           
            }           
          if ($db->loadResult()>1) {                    
              $query = "DELETE FROM #__smartsite_modules_users WHERE Id = '$box_id_fake'";
              $db->setQuery($query); 
              $db->query(); 
          } else {
              $query = "UPDATE #__smartsite_modules_users SET published = '0' WHERE Id = '$box_id_fake'";
              $db->setQuery($query); 
              $db->query();               
          }
          
        if ($globalVariables->get('error_log_enabled')>0) {   
            $logEntry['comment'] = $db->getQuery();
            $log->addEntry($logEntry);                   
            $logEntry['comment'] = '=========END=======>SmartsiteController->delete';
            $log->addEntry($logEntry);           
        }            
        }
      }
    
	    
	}
	

	function minimaxi() {
	    
        if ((strtolower($_SERVER['REQUEST_METHOD']) != 'post')||($_POST['caller'] != "smartsite"))
                      die('Direct Access to this location is not allowed.');

$db = JFactory::getDBO();
$user	=& JFactory::getUser();

    //below are the security checks to stop SQL injections via a post.
    //only numbers allowed for this var    
   if ($_POST['user_id'])
      if (ereg("^[0-9]*$", $_POST['user_id']) )
        $user_id = mysql_real_escape_string($_POST['user_id']);

    //only numbers and letters allowed for this var    
    if ($_POST['box_id']!== null)
      if (ereg("^[0-9a-zA-Z]*$", $_POST['box_id']) && ereg("^[0-9a-zA-Z]*$", $_POST['action'])) {
        $box_id_fake = mysql_real_escape_string($_POST['box_id']);  
        $action = mysql_real_escape_string($_POST['action']); 
        if ($user->id > 0) {
          if ($action == 'minimize') {
              $minimized = '1';
          } else {
              $minimized = '0';              
          }
            
          $query = "UPDATE #__smartsite_modules_users SET minimized = '$minimized' WHERE Id = '$box_id_fake'";  
          $db->setQuery($query); 
          $db->query();

        }
      }
    
	    
	}

	function clone_module () {
	    
	    jimport('joomla.html.parameter');
	    
        $globalVariables = &JComponentHelper::getParams( 'com_smartsite' );	  	    
	    
	    $id	= JRequest::getInt( 'box_id', 0 );
	    $model = $this->getModel('json_modules'); 
	    
        if ((strtolower($_SERVER['REQUEST_METHOD']) != 'post')||($_POST['caller'] != "smartsite"))
                      die('Direct Access to this location is not allowed.');

        $log = & JLog::getInstance('smartsite.php');
        
        $logEntry = array();
        
        if ($globalVariables->get('error_log_enabled')>0) {        
            $logEntry['comment'] = '=========START=======>SmartsiteController->clone_module';
            $log->addEntry($logEntry); 
            $logEntry['comment'] = 'id='.$id;
            $log->addEntry($logEntry); 	            
        }
	    
	    if ($id>0) {
	            $model->clone_module($id);

	    } else {
                JError::raiseWarning( 500, 'Wrong module ID' );
				return;	          
	    }
	    
	    if ($globalVariables->get('error_log_enabled')>0) { 
            $logEntry['comment'] = '=========END=======>SmartsiteController->clone_module';
            $log->addEntry($logEntry); 
	    }
	    	    
            $this->setRedirect(($_SERVER['HTTP_REFERER'] != '') ? $_SERVER['HTTP_REFERER'] : JURI::base(), ''); 
            $this->redirect();
	}


}


?>
