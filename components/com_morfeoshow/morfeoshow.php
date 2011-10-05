<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitiongallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

require_once( JApplicationHelper::getPath( 'html' ) );
$task 		= JRequest::getString('task', '');
$gallery 	= JRequest::getInt('gallery', 0);
// cache activation
$cache =& JFactory::getCache( 'com_morfeoshow' );

switch($task) {
	case 'view': 	mostraGalleria($option, $gallery);			break;
		default:	mostraFrontend($option);					break;
}

function mostraFrontend($option){
global $mainframe, $header, $params_morfeo;
	$db 		=& JFactory::getDBO();	
	$result		= JRequest::getVar('result', 0, '', 'int');
	$default_limit = '20';
	$limit = $mainframe->getUserStateFromRequest('com_morfeoshow', 'limit', $default_limit, 'int');	
	$limitstart	= JRequest::getVar('limitstart', 0, '', 'int');	
	JRequest::setVar('limit', (int) $limit);
	static $HeaderAdded;
		if(!$HeaderAdded) {
		$HeaderAdded=1;	
		$header .= '
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>			
		<style type="text/css" media="all">	
	@import "'.JURI::root(true).'/components/com_morfeoshow/style/style.css"; 	
		</style>
	';	

	$mainframe->addCustomHeadTag($header);
}

	// get the total number of records
	$query = 'SELECT COUNT(id)'
	. ' FROM #__morfeoshow'
	. ' WHERE published = 1'	
	;
	$db->setQuery( $query );
	$total 	= $db->loadResult();
	jimport('joomla.html.pagination');
	$pageNav = new JPagination( $total, $limitstart, $limit );
	
	$query 	= "SELECT * FROM #__morfeoshow WHERE published = 1 ORDER by ordering"
	;
	$db->setQuery( $query, $pageNav->limitstart, $pageNav->limit );	
	$rows = $db->loadObjectList();

	if ($db->getErrorNum()) {
		echo $db->stderr();
		return false;
	}
	
	HTML_morfeoshow::mostraFrontend($option, $rows, $pageNav, $limitstart, $limit, $total);
}

function mostraGalleria($option, $gallery){
	
	global $mainframe, $params_morfeo;
	$db 		=& JFactory::getDBO();
	$task 		= JRequest::getString('task', '');
	include_once(JPATH_SITE.DS.'administrator'.DS.'components'.DS.'com_morfeoshow'.DS.'settings.php' ); 
	
	$query = "SELECT * FROM #__morfeoshow WHERE id =" .(int)$gallery;
	$db->setQuery($query);
	$row = $db->loadObject();
    $skin ="classic";
	$lang =$params_morfeo['shulang'];
	$pla ="img";
	$params['template'] = @$row->tclassic;	
	
	static $HeaderAdded;
		if(!$HeaderAdded) {
		$HeaderAdded=1;
		$header='';		
		if (@$row->flashgallery == 0) {

		if ($params['template'] == 4 || $params['template'] == 5 || $params['template'] == 6|| $params['template'] == 7) 
		{	

	if ($params_morfeo['gapi'] == 0) 
	{	
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}

		$header .= '
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.fancybox-1.0.0.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.pngFix.pack.js" type="text/javascript"></script>	
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/style/style.css" />
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/fancy.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			$(".photo-link").fancybox({ "zoomSpeedIn": 500, "zoomSpeedOut": 500, "overlayShow": true }); 
		});
	</script>		
';
	} 
	else
	{

	switch ($params_morfeo['shuadat']) {
		case 'shadowbox-jquery.js':	
	if ($params_morfeo['gapi'] == 0) 
	{	
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}		
break;
		case 'shadowbox-mootools.js':
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/mootools.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("mootools", "1.11");
	</script>	
		';
	}			
break;	
		case 'shadowbox-prototype.js':
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/prototype.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("prototype", "1.6");
	</script>	
		';
	}		
break;
		case 'shadowbox-yui.js':	
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/yui-utilities.js" type="text/javascript"></script>		
		';

break;
		case 'shadowbox-dojo.js':
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/dojo.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("dojo", "1.1.1");
	</script>	
		';
	}		
break;	

}	
		
		$header .= '
	<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/adapter/'.$params_morfeo['shuadat'].'"></script>
	<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/shadowbox.js"></script>
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/style/style.css" />
	<script type="text/javascript">
Shadowbox.loadSkin("'.$skin.'", "'.JURI::root(true).'/components/com_morfeoshow/src/skin");
Shadowbox.loadLanguage("'.$lang.'", "'.JURI::root(true).'/components/com_morfeoshow/src/lang");
Shadowbox.loadPlayer(["'.$pla.'"], "'.JURI::root(true).'/components/com_morfeoshow/src/player");
window.onload = function(){
    Shadowbox.init();
};

</script>
	';
	}	
	} else if ($row->flashgallery == 9) {
	
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}		
		$header .= '
		<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery.blockUI-1.33.pack.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery.history.pack.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/lightbox/lb.js" type="text/javascript"></script>			
		<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/picas.js" type="text/javascript"></script>
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/style/style.css" />
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/src/js/css/pic.css" />
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/lightbox/lb.css" />		

';	

	} else if ($row->flashgallery == 10) {
	
	if ($params_morfeo['gapi'] == 0) 
	{			
		$header .= '
	<script src="'.JURI::root(true).'/components/com_morfeoshow/src/js/jquery-1.2.3.pack.js" type="text/javascript"></script>		
		';
		} else {
		$header .= '
	<script src="http://www.google.com/jsapi"></script>
	<script>
	google.load("jquery", "1.2.6");
	</script>	
		';
	}		
		$header .= '
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.fancybox-1.0.0.js" type="text/javascript"></script>
		<script src="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/jquery.pngFix.pack.js" type="text/javascript"></script>	
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/style/style.css" />
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/tpl/resources/fancy/fancy.css" />		
	<script type="text/javascript">
		$(document).ready(function() {
			$(".gallflickr").fancybox({ "zoomSpeedIn": 500, "zoomSpeedOut": 500, "overlayShow": true }); 
		});
	</script>	
';	
	
	}
	else
	{

		$header .= '
		<script type="text/javascript" src="'.JURI::root(true).'/components/com_morfeoshow/src/js/swfobject.js"></script>		
		<link rel="stylesheet" href="'.JURI::root(true).'/components/com_morfeoshow/style/style.css" />
	';	
	}//end else
	
	$mainframe->addCustomHeadTag($header);
	
	}//end of header		
	
	$mainframe->setPageTitle( stripslashes(@$row->name) );
	if (@$row->metadesc == ''){}else{
	$mainframe->prependMetaTag('description',$row->metadesc);
	}
	if (@$row->metakey == ''){}else{
	$mainframe->prependMetaTag('keywords',$row->metakey.", ");
	}	
	jimport('joomla.environment.uri' );
	$host = JURI::root();
	
	HTML_morfeoshow::mostraGalleria($option, $row, $task);
}
?>