<?php
/**
* @version $Id: jumi.php 23 2008-11-28 13:54:32Z martin2hajek $
* @package Joomla! 1.5.x, Jumi plugin
* @copyright (c) 2008 Martin Hajek
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
*/ 

defined('_JEXEC') or die( "Direct Access Is Not Allowed" );
// Import library dependencies
jimport('joomla.event.plugin');

class plgContentJumi extends JPlugin
{
	function plgContentJumi( &$subject )
	{
	  parent::__construct( $subject );
	  // load plugin parameters and language file
	  $this->_plugin = JPluginHelper::getPlugin( 'content', 'jumi' );
	  $this->_params = new JParameter( $this->_plugin->params );
	  JPlugin::loadLanguage('plg_content_jumi', JPATH_ADMINISTRATOR);
	}

	function onPrepareContent(&$article, &$params, $limitstart)
	{
	  // just startup
	  global $mainframe;
	  $plugin =& JPluginHelper::getPlugin('content', 'jumi');
	  $pluginParams = new JParameter( $plugin->params );
	  // expression to search for
	  $regex = '/{(jumi)\s*(.*?)}/i'; //BUG: des not work with written codes containing }
		// if hide_code then replace jumi syntax codes with an empty string
		if ( $pluginParams->get( 'hide_code') == 1 ) {
			$article->text = preg_replace( $regex, '', $article->text );
			return true;
		}

		$continuesearching = true;
    while ($continuesearching){  //Nesting loop
		
			// find all instances of $regex (i.e. jumi) in an article and put them in $matches
			$matches = array();
			$matches_found = preg_match_all( $regex, $article->text, $matches, PREG_SET_ORDER );
			if ($matches_found) {
				// cycle through all jumi instancies. Put text into $dummy[2]
				foreach ($matches as $dummy) {
					//read arguments contained in [] from $dummy[2] and put them into the array $jumi
					$mms=array();
					$jumi="";
					preg_match_all('/\[.*?\]/', $dummy[2], $mms);
					if ($mms) { //at the least one argument found
						foreach ($mms as $i=>$mm) {
							$jumi = preg_replace("/\[|]/", "", $mm);
						}
					}
					
			    //Following syntax {jumi [storage_source][arg1]...[argN]}
					$storage_source = $this->getStorageSource(trim(array_shift($jumi)), $pluginParams->def('default_absolute_path',JPATH_ROOT)); //filepathname or record id or ""
					$output = ''; // Jumi output
		
					if($storage_source == '') { //if nothing to show
						$output = '<div style="color:#FF0000;background:#FFFF00;">'.JText::_('ERROR_CONTENT').'</div>';
					} else { // buffer output
						ob_start();
						if(is_int($storage_source)){ //it is record id
		    		  $code_stored = $this->getCodeStored($storage_source);
		      		if($code_stored != null){ //include custom script written
								eval ('?>'.$code_stored);
		      		} else {
								$output = '<div style="color:#FF0000;background:#FFFF00;">'.JText::sprintf('ERROR_RECORD', $storage_source).'</div>';
		      		}
		      	} else { //it is file
		      		if(is_readable($storage_source)) {
								include($storage_source); //include file
		      		} else {
								$output = '<div style="color:#FF0000;background:#FFFF00;">'.JText::sprintf('ERROR_FILE', $storage_source).'</div>';
		      		}
						}
			  	if ($output == ''){ //if there are no errors
			  		//$output = str_replace( '$' , '\$' , ob_get_contents()); fixed joomla bug
			  		$output = ob_get_contents();
			  	}
					ob_end_clean();
				}
				
				// final replacement of $regex (i.e. {jumi [][]}) in $article->text by $output
					$article->text = preg_replace($regex, $output, $article->text, 1);
				}
				if ($pluginParams->get('nested_replace') == 0) {
  				$continuesearching = false;
  			}
			} else {
   		  $continuesearching = false;
			}
	}
		return true;
	}

	function getCodeStored($source)
	{ //returns code stored in the database or null.
		$database  = &JFactory::getDBO();
		//$user = &JFactory::getUser();
		//$database->setQuery("select custom_script from #__jumi where id = '{$source}' and access <= {$user->gid} and published = 1");
		$database->setQuery("select custom_script from #__jumi where id = $source");
		return $database->loadResult();
	}
	
	function getStorageSource($source, $abspath)
	{ //returns filepathname or a record id or ""
  	$storage=trim($source);
  	if ($storage!=""){
			if ($id = substr(strchr($storage,"*"),1)) { //if record id return it
  			return (int)$id;
  		} else { // else return filepathname
  		return $abspath.DS.$storage;
  		}
  	}	else { // else return ""
  	return '';
  }
}

}
?>
