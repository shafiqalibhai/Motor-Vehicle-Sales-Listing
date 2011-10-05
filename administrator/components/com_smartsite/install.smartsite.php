<?php

defined( '_JEXEC' ) or die( 'Restricted access' ); 

jimport('joomla.filesystem.file');
//jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.archive');

global $mainframe;

function smartsiteMessage ($status, $message) 
{
 $result = '';   
 switch ($status) {
     case 1: 
       $result .= "<img src='".JURI::base()."components/com_smartsite/assets/images/tick.gif'>&nbsp;<font color=\"green\" style=\"font-family: courier, arial;font-size:8px; \">".$message."</font><br />";              
     break;
     case 3:
       $result .= "<br /><font color='orange' style=\"font-family: courier, arial;font-size:8px; \">WARNING! $message has encountered some minor problems during the install. Please check the log above and <a href=\"".JRoute::_('index.php?option=com_smartsite&task=reinstall', false)."\">try again</a>!</font>";          
     break;
     default:
       $result .= "<img src='".JURI::base()."components/com_smartsite/assets/images/cross.gif'>&nbsp;<font color=\"red\" style=\"font-family: courier, arial;font-size:8px; \">".$message."</font><br />";          
     break;   
     
 }   
 return $result;   
}

$db =& JFactory::getDBO();

$resultText = '<fieldset>';    
    
$hadProblems = false;   


$query = "CREATE TABLE IF NOT EXISTS `#__smartsite_modules_users` (
  `Id` int(11) unsigned NOT NULL auto_increment,
  `holder_id` varchar(100) NOT NULL,
  `box_id` varchar(200) NOT NULL,
  `modorder` int(11) default NULL,
  `user_id` int(11) NOT NULL,
  `minimized` enum('0','1') default '0',
  `title` varchar(100) default NULL,
  `content` text,
  `params` text,
  `published` int(1) unsigned NOT NULL default '0',
  `showtitle` int(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM";
$db->setQuery( $query );
$db->query();

//start: install plugin      

		$archivename = JPATH_SITE.DS.'components'.DS.'com_smartsite'.DS.'plugin_smartsite_system.zip';

		// Temporary folder to extract the archive into
		$tmpdir = JPATH_SITE.DS.'plugins'.DS.'system'.DS;

		// Clean the paths to use for archive extraction
		$extractdir = JPath::clean($tmpdir);
		$archivename = JPath::clean($archivename);

		// do the unpacking of the archive
		$result = JArchive::extract( $archivename, $extractdir);

		if ( $result === false ) {
		    $hadProblems = true; 
    		$resultText .= smartsiteMessage(0, "Couldn't install SmartSite System Plugin");

		} else {
            $query = "SELECT COUNT(*) FROM #__plugins WHERE element='smartsite' AND folder='system'";
            $db->setQuery( $query );
            
            if (!$db->loadResult()) {
                $query = "INSERT INTO `#__plugins` (`name`,`element`,`folder`,`access`,`ordering`,`published`,`iscore`,`client_id`,`checked_out`,`checked_out_time`,`params`) VALUES ('System - Smartsite','smartsite','system',0,0,1,0,0,0,'0000-00-00 00:00:00','')";
                $db->setQuery( $query );
                $db->query();   
                $resultText .= smartsiteMessage(1, "SmartSite System Plugin installed and published"); 
            }	
            	    		    
		}	
//end: install plugin	


$copyFrom = JPATH_SITE.DS.'components'.DS.'com_smartsite'.DS.'lib'.DS;
$copyTo = JPATH_SITE.DS.'libraries'.DS.'joomla'.DS.'document'.DS.'html'.DS.'renderer'.DS;

if (!JFile::copy($copyFrom.'smart_modules.php', $copyTo.'smart_modules.php')) {
			JError::raiseNotice('SOME_ERROR_CODE', 'Could not install necessary libs');
			$resultText .= smartsiteMessage(0, "Could not copy smart_modules.php from $copyFrom to $copyTo");
} else {
            $resultText .= smartsiteMessage(1, "smart_modules.php has been copied to $copyTo");     
}

if (!$hadProblems) {
//start: install template
		$archivename = JPATH_SITE.DS.'components'.DS.'com_smartsite'.DS.'smartsite_template.zip';

		// Temporary folder to extract the archive into
		$tmpdir = JPATH_SITE.DS.'templates'.DS;

		// Clean the paths to use for archive extraction
		$extractdir = JPath::clean($tmpdir);
		$archivename = JPath::clean($archivename);

		// do the unpacking of the archive
		$result = JArchive::extract( $archivename, $extractdir);

		if ( $result === false ) {
		    $hadProblems = true; 
    		$resultText .= smartsiteMessage(0, "Couldn't install SmartSite template");    		
		} else {
		    $query = "UPDATE `#__templates_menu` SET `template`='smartsite' WHERE `menuid`=0 AND `client_id`=0";
            $db->setQuery( $query );
            $db->query();		
            $resultText .= smartsiteMessage(1, "SmartSite Template installed and has been made a default template");     		    
		}	
//end: install template		
}
 
    if (!$hadProblems) {       
        $resultText .= smartsiteMessage(1, "SmartSite successfully installed"); 
    } else {
        $resultText .= smartsiteMessage(3, "SmartSite"); 
    }   
    $resultText .= "</fieldset>";     
        
	$msg .= '<table width="100%" border="0" cellpadding="8" cellspacing="0">';
    $msg .= '<tr><td align="left" valign="top">';
    $msg .= "<img src='".JURI::base()."components/com_smartsite/assets/images/smartsite_logo.gif'><br />";          
    $msg .= $resultText;   
	$msg .='<br /><br /></td></tr></table>';

	echo $msg ;



?>
