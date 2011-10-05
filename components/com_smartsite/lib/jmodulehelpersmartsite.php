<?php
/**
* @version		$Id: helper.php 10214 2008-04-19 08:59:04Z eddieajau $
* @package		Joomla.Framework
* @subpackage	Application
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

// Import library dependencies
jimport('joomla.application.component.helper');

/**
 * Module helper class
 *
 * @static
 * @author		Johan Janssens <johan.janssens@joomla.org>
 * @package		Joomla.Framework
 * @subpackage	Application
 * @since		1.5
 */
class JModuleHelperSmartsite
{
	/**
	 * Get module by name (real, eg 'Breadcrumbs' or folder, eg 'mod_breadcrumbs')
	 *
	 * @access	public
	 * @param	string 	$name	The name of the module
	 * @param	string	$title	The title of the module, optional
	 * @return	object	The Module object
	 */
	function &getModule($name, $title = null )
	{
		$result		= null;
		$modules	=& JModuleHelper::_load();
		$total		= count($modules);
		for ($i = 0; $i < $total; $i++)
		{
			// Match the name of the module
			if ($modules[$i]->name == $name)
			{
				// Match the title if we're looking for a specific instance of the module
				if ( ! $title || $modules[$i]->title == $title )
				{
					$result =& $modules[$i];
					break;	// Found it
				}
			}
		}

		// if we didn't find it, and the name is mod_something, create a dummy object
		if (is_null( $result ) && substr( $name, 0, 4 ) == 'mod_')
		{
			$result				= new stdClass;
			$result->id			= 0;
			$result->title		= '';
			$result->module		= $name;
			$result->position	= '';
			$result->content	= '';
			$result->showtitle	= 0;
			$result->control	= '';
			$result->params		= '';
			$result->user		= 0;
		}

		return $result;
	}

	/**
	 * Get modules by position
	 *
	 * @access public
	 * @param string 	$position	The position of the module
	 * @return array	An array of module objects
	 */
	function &getModules($position)
	{
		$position	= strtolower( $position );
		$result		= array();

		$modules =& JModuleHelperSmartsite::_load();

//start: added for smartsite
		$user	=& JFactory::getUser();
		$db		=& JFactory::getDBO();		
		//jimport('recly.common.GlobalVariables');
		jimport('joomla.html.parameter');
                //$globalVariables = new Recly_GlobalVariables('smartsite_vars');     
                $defaultModules = array();  
                
        $globalVariables = &JComponentHelper::getParams( 'com_smartsite' ); 
               
//end: added for smartsite    
  		//echo "count(modules)=<pre>";print_r(count($modules));echo "</pre><hr>"; 

		$total = count($modules);
		for($i = 0; $i < $total; $i++) {
		    $defaultModules[] = $modules[$i]->id_module;//added for smartsite
		    
		        //start for mod_ajrss/feederator: change name of mod_ajrss modules to names of their feeds
			if ($modules[$i]->module == 'mod_ajrss') {
				    $params = new JParameter($modules[$i]->params);
		            $id_feed = $params->get('id_feed');
		            if ($params->get('useModulesName') && $id_feed>0) {
    				    $db->setQuery("SELECT name FROM #__fdr_feeds WHERE Id = '$id_feed'");
    				    $modules[$i]->title = $db->loadResult();
		            }
			}
			//end for mod_ajrss/feederator: change name of mod_dbrss2 modules to names of their feeds

//start: modified for smartsite						    
			if($modules[$i]->position == $position) {
			    $modules[$i]->id_smartsite_module = $modules[$i]->id_module;
			    $result[] =  $modules[$i];								
			}
//end: modified for smartsite 

		}
    
//start: added for smartsite    			
		$modulesReordered = null;
		$userDefinedModules = array();
        
		if ($user->id > 0) {
		    
		       $query = "SELECT box_id FROM #__smartsite_modules_users 
		       WHERE user_id = '$user->id'
		       ORDER BY modorder";
		       $db->setQuery($query);
		       $userDefinedModules = $db->loadResultArray();		    
		    
            		//start: loop thru default modules to see if there're any new
            		for($j = 0; $j < count($defaultModules); $j++) {   
            		            $isNew = true;      
            		            for($i = 0; $i < count($userDefinedModules); $i++) {      		    
                        			if($defaultModules[$j] == $userDefinedModules[$i]) {
                        				$isNew = false;	
                        			}                       			
            		            }
            		            if ($isNew) $newModules[] = $defaultModules[$j];	
                    }
                    //end: loop thru default modules to see if there're any new
            		
               // echo "userDefinedModules=<pre>";print_r($userDefinedModules);echo "</pre><hr>";
               // echo "defaultModules=<pre>";print_r($defaultModules);echo "</pre><hr>";    
                    
                if (count($userDefinedModules) != count($defaultModules)) {// if number of default modules has changed since last visit
                    
                  
                    foreach ($newModules as $newModule) {
                         $module = null;
                        $query = "SELECT ordering, id, params, title, content, showtitle FROM #__modules WHERE position = '$position' AND id = '$newModule' AND published = '1' ";
                        $db->setQuery($query);
                        //echo $db->getQuery()."<hr>";
                        $module = $db->loadObject($module);
                        if ($module) {
                        	$query = "INSERT INTO #__smartsite_modules_users SET 
                        	holder_id = '".$position."',
                        	box_id = '$newModule',
                        	modorder = '$module->ordering',
                        	user_id = '".$user->id."',
                        	params = '".$module->params."',
                        	title = ".$db->Quote($module->title).",
                        	content = ".$db->Quote($module->content).",
                        	published = '1',
                        	showtitle = '".$module->showtitle."'
                        	";
                        	$db->setQuery($query);
                        	//echo $db->getQuery()."<hr>";
                        	$db->query();
                        	//  mu.content, mu.showtitle
                        }
                    }


		       }   		    
        
		    
		       $query = "SELECT * FROM #__smartsite_modules_users 
		       WHERE holder_id = '".$position."' AND 
		       user_id = '$user->id' AND published = '1'
		       ORDER BY modorder";
		       $db->setQuery($query);
		      // echo $db->getQuery()."<hr>";
		       
		       $modulesReordered = $db->loadObjectList();
		       
		       //echo "modulesReordered=<pre>";print_r($modulesReordered);echo "</pre><hr>"; 
		       
		       if (count($modulesReordered)>0) {
		           
		           // start: read existing modules and move them to user-defined positions (ordering will be default)
		            $result1		= array();	
		            $k = 0;            
            		for($i = 0; $i < count($modulesReordered); $i++) {

            			if($modulesReordered[$i]->holder_id == $position) {
            			    $moduleIsCurrentlyPublished = false;
                    		for($j = 0; $j < count($modules); $j++) {   
                    		  //  echo "modules[$j]=<pre>";print_r($modules[$j]);echo "</pre><hr>"; 
                    		  //  echo "modulesReordered[$i]=<pre>";print_r($modulesReordered[$i]);echo "</pre><hr>";             		    

                    			if($modules[$j]->id_module == $modulesReordered[$i]->box_id) {

                    			    $newModule = new stdClass();
                    			    foreach (get_object_vars($modules[$j]) as $key=>$value) {
                    			    	$newModule->$key = $value;
                    			    }                   			    
                    				$newModule->id_smartsite_module = $modulesReordered[$i]->Id;
                    				
                    				
                    				//echo "newModule=<pre>";print_r($newModule);echo "</pre><hr>";
                    				
                    				if ($modulesReordered[$i]->params != '' && strlen($modulesReordered[$i]->params)>2) {
                    				    $newModule->params = $modulesReordered[$i]->params;
                    				    $params = new JParameter($newModule->params);
                    		            $id_feed = $params->get('id_feed');
                    		            if ($modulesReordered[$i]->title != '') {
                    		                $newModule->title = $modulesReordered[$i]->title;
                    		            } 
                    		            if ($params->get('useModulesName') && $id_feed>0) {
                        				    $db->setQuery("SELECT name FROM #__fdr_feeds WHERE Id = '$id_feed'");
                        				    $newModule->title = $db->loadResult();
                    		            }                    				  
                    				}
                    			    $result1[$k] = $newModule;
                    				$moduleIsCurrentlyPublished = true;	
                    				$k++;	
                    			}
                    		}
                    					    			
            			}
            			
            		}	
            		// end: read existing modules and move them to user-defined positions (ordering will be default)
            		
            		$newModules = array();
            		$result = $result1;           	           
		       }
		       
		}
		
		//echo "result=<pre>";print_r($result);echo "</pre><hr>";
//exit;
		
//end: added for smartsite
		if(count($result) == 0) {
			if(JRequest::getBool('tp')) {
				$result[0] = JModuleHelper::getModule( 'mod_'.$position );
				$result[0]->title = $position;
				$result[0]->content = $position;
				$result[0]->position = $position;
			}
		}

		return $result;
	}

	/**
	 * Checks if a module is enabled
	 *
	 * @access	public
	 * @param   string 	$module	The module name
	 * @return	boolean
	 */
	function isEnabled( $module )
	{
		$result = &JModuleHelper::getModule( $module);
		return (!is_null($result));
	}

	function renderModule($module, $attribs = array())
	{
		static $chrome;
		global $mainframe, $option;

		$scope = $mainframe->scope; //record the scope
		$mainframe->scope = $module->module;  //set scope to component name

		// Handle legacy globals if enabled
		if ($mainframe->getCfg('legacy'))
		{
			// Include legacy globals
			global $my, $database, $acl, $mosConfig_absolute_path;

			// Get the task variable for local scope
			$task = JRequest::getString('task');

			// For backwards compatibility extract the config vars as globals
			$registry =& JFactory::getConfig();
			foreach (get_object_vars($registry->toObject()) as $k => $v) {
				$name = 'mosConfig_'.$k;
				$$name = $v;
			}
			$contentConfig = &JComponentHelper::getParams( 'com_content' );
			foreach (get_object_vars($contentConfig->toObject()) as $k => $v)
			{
				$name = 'mosConfig_'.$k;
				$$name = $v;
			}
			$usersConfig = &JComponentHelper::getParams( 'com_users' );
			foreach (get_object_vars($usersConfig->toObject()) as $k => $v)
			{
				$name = 'mosConfig_'.$k;
				$$name = $v;
			}
		}

		// Get module parameters
		$params = new JParameter( $module->params );

		// Get module path
		$module->module = preg_replace('/[^A-Z0-9_\.-]/i', '', $module->module);
		$path = JPATH_BASE.DS.'modules'.DS.$module->module.DS.$module->module.'.php';

		// Load the module
		if (!$module->user && file_exists( $path ) && empty($module->content))
		{
			$lang =& JFactory::getLanguage();
			$lang->load($module->module);

			$content = '';
			ob_start();
			require $path;
			$module->content = ob_get_contents().$content;
			ob_end_clean();
		}

		// Load the module chrome functions
		if (!$chrome) {
			$chrome = array();
		}

		require_once (JPATH_BASE.DS.'templates'.DS.'system'.DS.'html'.DS.'modules.php');
		$chromePath = JPATH_BASE.DS.'templates'.DS.$mainframe->getTemplate().DS.'html'.DS.'modules.php';
		if (!isset( $chrome[$chromePath]))
		{
			if (file_exists($chromePath)) {
				require_once ($chromePath);
			}
			$chrome[$chromePath] = true;
		}

		//make sure a style is set
		if(!isset($attribs['style'])) {
			$attribs['style'] = 'none';
		}

		//dynamically add outline style
		if(JRequest::getBool('tp')) {
			$attribs['style'] .= ' outline';
		}

		foreach(explode(' ', $attribs['style']) as $style)
		{
			$chromeMethod = 'modChrome_'.$style;

			// Apply chrome and render module
			if (function_exists($chromeMethod))
			{
				$module->style = $attribs['style'];

				ob_start();
				$chromeMethod($module, $params, $attribs);
				$module->content = ob_get_contents();
				ob_end_clean();
			}
		}

		$mainframe->scope = $scope; //revert the scope

		return $module->content;
	}

	/**
	 * Get the path to a layout for a module
	 *
	 * @static
	 * @param	string	$module	The name of the module
	 * @param	string	$layout	The name of the module layout
	 * @return	string	The path to the module layout
	 * @since	1.5
	 */
	function getLayoutPath($module, $layout = 'default')
	{
		global $mainframe;

		// Build the template and base path for the layout
		$tPath = JPATH_BASE.DS.'templates'.DS.$mainframe->getTemplate().DS.'html'.DS.$module.DS.$layout.'.php';
		$bPath = JPATH_BASE.DS.'modules'.DS.$module.DS.'tmpl'.DS.$layout.'.php';

		// If the template has a layout override use it
		if (file_exists($tPath)) {
			return $tPath;
		} else {
			return $bPath;
		}
	}

	/**
	 * Load published modules
	 *
	 * @access	private
	 * @return	array
	 */
	function &_load()
	{
		global $mainframe, $Itemid;

		static $modules;

		if (isset($modules)) {
			return $modules;
		}

		$user	=& JFactory::getUser();
		$db		=& JFactory::getDBO();

		$aid	= $user->get('aid', 0);

		$modules	= array();

		$wheremenu = isset( $Itemid ) ? ' AND ( mm.menuid = '. (int) $Itemid .' OR mm.menuid = 0 )' : '';

		
		$numberModules = 0;
	/*	if (!$user->get('guest')) {
		    $query = "SELECT COUNT(*) FROM #__smartsite_modules_users WHERE user_id = '".$user->get('id')."'";
		    $db->setQuery( $query );
		    $numberModules = $db->loadResult();
		}
	*/	
		//echo "numberModules=<pre>";print_r($numberModules);echo "</pre><hr>";
/*
		
		if (!$user->get('guest') && $numberModules>0) {
    		$query = "SELECT m.id AS id_module, mu.Id AS id_smartsite_module, mu.modorder AS ordering,\n
    		        mu.title, m.module, mu.holder_id AS position, mu.content, mu.showtitle, m.control, mu.params\n"
    			. " FROM #__smartsite_modules_users AS mu \n"
    			. " LEFT JOIN #__modules AS m ON m.id = mu.box_id \n"
    			. " LEFT JOIN #__modules_menu AS mm ON mm.moduleid = m.id \n"   			
    			. " WHERE m.published = 1 AND mu.published = 1\n"
    			. " AND m.access <= ". (int)$aid
    			. " AND m.client_id = ". (int)$mainframe->getClientId()
    			. $wheremenu
    			. " ORDER BY position, ordering";			    
		    
		} else {
*/		     
    		$query = 'SELECT id AS id_module, title, module, position, content, showtitle, control, params'
    			. ' FROM #__modules AS m'
    			. ' LEFT JOIN #__modules_menu AS mm ON mm.moduleid = m.id'
    			. ' WHERE m.published = 1'
    			. ' AND m.access <= '. (int)$aid
    			. ' AND m.client_id = '. (int)$mainframe->getClientId()
    			. $wheremenu
    			. ' ORDER BY position, ordering';
	//	}
		
		$db->setQuery( $query );
//echo $db->getQuery()."<hr>";
		if (null === ($modules = $db->loadObjectList())) {
			JError::raiseWarning( 'SOME_ERROR_CODE', JText::_( 'Error Loading Modules' ) . $db->getErrorMsg());
			return false;
		}

		$total = count($modules);
		for($i = 0; $i < $total; $i++)
		{
			//determine if this is a custom module
			$file					= $modules[$i]->module;
			$custom 				= substr( $file, 0, 4 ) == 'mod_' ?  0 : 1;
			$modules[$i]->user  	= $custom;
			// CHECK: custom module name is given by the title field, otherwise it's just 'om' ??
			$modules[$i]->name		= $custom ? $modules[$i]->title : substr( $file, 4 );
			$modules[$i]->style		= null;
			$modules[$i]->position	= strtolower($modules[$i]->position);
		}

		return $modules;
	}

}

