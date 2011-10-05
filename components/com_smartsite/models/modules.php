<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport('joomla.application.component.model');
class SmartsiteModelModules extends JModel {
	function restore_defaults () {   
	    $db =& JFactory::getDBO();
	    $user	=& JFactory::getUser();

	    $query = "DELETE FROM #__smartsite_modules_users WHERE user_id = '$user->id'";
    	$db->setQuery($query);
    	return $db->query();     	
    			
	}
	
	function recover_deleted () {   
	    $db =& JFactory::getDBO();
	    $user	=& JFactory::getUser();

	    $query = "UPDATE #__smartsite_modules_users SET published = '1' WHERE user_id = '$user->id'";
    	$db->setQuery($query);
    	return $db->query();     	
    			
	}
	
	function synchronize_dependent_modules ($id) {
	    jimport('joomla.html.parameter');
      	    
	    $db =& JFactory::getDBO();
	   // $user	=& JFactory::getUser();
	    $module =& JTable::getInstance('module');	  

    	    $module->load($id);  
    	    $params = new JParameter($module->params);
    	    
    	    $query = "SELECT * FROM #__smartsite_modules_users WHERE box_id = '$id'";
    	    $db->setQuery($query);
    	    $kids = $db->loadObjectList();
    	    
    	    foreach ($kids as $kid) {
    	        $kidParams = new JParameter($kid->params);

    	        $paramString = '';
    	        if ($kidParams->get('id_feed')>0) {
    	           $id_feed = $kidParams->get('id_feed');
    	        } else {
    	           $id_feed = $params->get('id_feed'); 
    	        }
                $item1 = $params->get('item1');
                $refresh1 = $params->get('refresh1');
                $useModulesName = $params->get('useModulesName');
                $feedfont = $params->get('feedfont');
                $feedbgcolor = $params->get('feedbgcolor');
                if (isset($id_feed)) $paramString .= "id_feed=".$id_feed."\n";
                if (isset($item1)) $paramString .= "item1=".$item1."\n";
                if (isset($refresh1)) $paramString .= "refresh1=".$refresh1."\n";
                if (isset($useModulesName)) $paramString .= "useModulesName=".$useModulesName."\n";
                if (isset($feedfont)) $paramString .= "feedfont=".$feedfont."\n";
                if (isset($feedbgcolor)) $paramString .= "feedbgcolor=".$feedbgcolor."\n";    	       
    	        	
                $query = "UPDATE #__smartsite_modules_users SET params = '$paramString' WHERE Id = '$kid->Id'";
                $db->setQuery($query);
                //echo $db->getQuery()."<hr>";
                $db->query();
                
            
    	    }
	        
	    
	}
	
	function add_module_submit($name, $url) { //AJRSS specific
	    
	    jimport('joomla.html.parameter');
	    
	    $db =& JFactory::getDBO();
	    $user	=& JFactory::getUser();
	    $module =& JTable::getInstance('module');
	                   
        $query = "SELECT MIN(id) FROM #__modules WHERE module = 'mod_ajrss'";
        $db->setQuery($query);
        $min_id = $db->loadResult();
        
        $query = "SELECT MAX(ordering) FROM #__modules WHERE position = 'left'";
        $db->setQuery($query);
        $ordering = $db->loadResult(); 
        
        $module->load($min_id);      

        $params = new JParameter($module->params);
        
        $query = "SELECT * FROM #__fdr_feeds WHERE url = '$url'";
        $db->setQuery($query);
        $rows = $db->loadObjectList();        

        //$params = new JParameter($modules->params);
       
        if (count($rows)>0) {
           // $paramsNew->set('id_feed', $rows[0]->Id);
            $paramString .= "id_feed=".$rows[0]->Id."\n";
        } else {
            $modified = date("Y-m-d H:i:s", time());
            $query = "INSERT INTO #__fdr_feeds SET
                      name = '$name',
                      published = '1',
                      internal = '0',
                      created = '$modified',
                      created_by = '$user->id',
                      modified = '$modified',
                      modified_by = '$user->id',
                      cache = '1',
                      cache_refresh_time = '3600',
                      url = '$url',
                      format = 'RSS2.0'
                      "; 
            $db->setQuery($query);  
            //echo $db->getQuery()."<hr>"; 
            $db->query();
            
            $query = "SELECT id FROM #__fdr_feeds WHERE 
                      name = '$name' AND
                      published = '1' AND
                      internal = '0' AND
                      created = '$modified' AND
                      created_by = '$user->id' AND
                      modified = '$modified' AND
                      modified_by = '$user->id' AND
                      cache = '1' AND
                      cache_refresh_time = '3600' AND
                      url = '$url' AND
                      format = 'RSS2.0'";
            $db->setQuery($query);
            //echo $db->getQuery()."<hr>";
            $id_feed = $db->loadResult(); 
            //echo "id_feed=<pre>";print_r($id_feed);echo "</pre><hr>";
            if ($id_feed>0) {
                
                //$paramsNew->set('id_feed', $id_feed);
                $paramString .= "id_feed=$id_feed\n";
                
            }           
        }
        
       // echo "params=<pre>";print_r($params);echo "</pre><hr>";
        
        $item1 = $params->get('item1');
        $refresh1 = $params->get('refresh1');
        $useModulesName = $params->get('useModulesName');
        $feedfont = $params->get('feedfont');
        $feedbgcolor = $params->get('feedbgcolor');
        if (isset($item1)) $paramString .= "item1=".$item1."\n";
        if (isset($refresh1)) $paramString .= "refresh1=".$refresh1."\n";
        if (isset($useModulesName)) $paramString .= "useModulesName=".$useModulesName."\n";
        if (isset($feedfont)) $paramString .= "feedfont=".$feedfont."\n";
        if (isset($feedbgcolor)) $paramString .= "feedbgcolor=".$feedbgcolor."\n";
 
		
        $query = "INSERT INTO #__smartsite_modules_users
        SET holder_id = 'left',
        box_id = '$module->id',
        modorder = '$ordering',
        user_id = '$user->id',
        title = '$name',
        published = '1',
        showtitle = '1',
        params = '$paramString'";
        $db->setQuery($query);
        //echo $db->getQuery()."<hr>";
        $db->query();
	}	
}
?>
