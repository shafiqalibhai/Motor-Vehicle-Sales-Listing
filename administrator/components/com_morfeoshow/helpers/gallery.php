<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_morfeoshow
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

function showGallerys($option)
{
	global $mainframe, $option, $id, $folder, $params, $type;
	
	
	$db =& JFactory::getDBO();
	$filter_order		= $mainframe->getUserStateFromRequest( "$option.filter_order",'filter_order','ordering','cmd' );
	$filter_order_Dir		= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir",	'filter_order_Dir',	'',	'word' );
	$filter_state			= $mainframe->getUserStateFromRequest( "$option.filter_state",		'filter_state',		'',				'word' );	
	$limit					= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
	$limitstart				= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );	

	$filter_flashgallery	= $mainframe->getUserStateFromRequest( "$option.filter_flashgallery",		'filter_flashgallery',		0,				'int' );
	$search					= $mainframe->getUserStateFromRequest( "$option.search",			'search',			'',				'string' );
	$search					= JString::strtolower( $search );	

	$where = array();
	if ( $filter_flashgallery ) {
		$where[] = 'flashgallery = ' . (int) $filter_flashgallery;
	}	
	
	if ($search) {
		$where[] = 'LOWER(name) LIKE '.$db->Quote( '%'.$db->getEscaped( $search, true ).'%', false );
	}	
	
	if ( $filter_state ) {
		if ( $filter_state == 'P' ) {
			$where[] = 'published = 1';
		} else if ($filter_state == 'U' ) {
			$where[] = 'published = 0';
		}
	}		
	
	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );	
	if ($filter_order == 'ordering'){
		$orderby 	= ' ORDER BY  name, ordering';
	} else {
		$orderby 	= ' ORDER BY '. $filter_order .' '. $filter_order_Dir .', name, ordering';
	}	
	
	
	// get the total number of records
	$query = 'SELECT COUNT(*) '
	. ' FROM #__morfeoshow'
	;
	$db->setQuery( $query );
	$total = $db->loadResult();	
	jimport('joomla.html.pagination');
	$pageNav = new JPagination( $total, $limitstart, $limit );		
	$query = 'SELECT * FROM #__morfeoshow'
	. $where	
	. $orderby
	;

	$db->setQuery( $query, $pageNav->limitstart, $pageNav->limit );	
	$rows = $db->loadObjectList();
	if ($db->getErrorNum()) {
		echo $db->stderr();
		return false;
	}	

	// state filter
	$lists['state']	= JHTML::_('grid.state',  $filter_state );

	// table ordering
	$lists['order_Dir']	= $filter_order_Dir;
	$lists['order']		= $filter_order;

	// search filter
	$lists['search']= $search;

	write_xml_2 ($id, $folder);		
	HTML_morfeoshow::showGallerys($option, $rows, $pageNav, $lists, $params);
}


function addGallery($option)
{
    global $params_morfeo;
	$db 		=& JFactory::getDBO();
	$option 	= JRequest::getCmd( 'option' );
	$folder		= JRequest::getVar('folder', '');
	$row 		=& JTable::getInstance('Morfeoshow', 'Table');	
	$vamba 		=& JTable::getInstance('Morfeoshow', 'Table');
	include_once( JPATH_COMPONENT.DS.'settings.php' );
	$lists = array();
	$lists['published'] = JHTML::_('select.booleanlist', 'published', 'class="inputbox"', 1);
	
	$transition = array(
		JHTML::_( 'select.option', '0', 'Random' ),	
		JHTML::_( 'select.option', '1', 'Fade' ),
		JHTML::_( 'select.option', '2', 'Blocks' ),
		JHTML::_( 'select.option', '3', 'Circles' ),
		JHTML::_( 'select.option', '4', 'Bubbles' ),
		JHTML::_( 'select.option', '5', 'Lines' ),
		JHTML::_( 'select.option', '6', 'Slow fade' ),
		JHTML::_( 'select.option', '7', 'Fluids' ),
		JHTML::_( 'select.option', '8', 'Flash' ),
		JHTML::_( 'select.option', '9', 'Bg Fade' ),			
		);		
	
	$lists['transition'] = JHTML::_('select.genericlist', $transition, 'trans', 'class="inputbox" size="1"', 'value', 'text', $row->trans);		

	$tempo = array(
		JHTML::_( 'select.option', '4', 'Default' ),	
		JHTML::_( 'select.option', '0', 'Flash' ),
		JHTML::_( 'select.option', '1', 'Very fast' ),
		JHTML::_( 'select.option', '2', 'Fast' ),
		JHTML::_( 'select.option', '3', 'Medium' ),
		JHTML::_( 'select.option', '5', 'Slow' ),
		JHTML::_( 'select.option', '6', 'Very slow' ),	
		);		
	
	$lists['tempo'] = JHTML::_('select.genericlist', $tempo, 'tempo', 'class="inputbox" size="1"', 'value', 'text', $row->tempo);
	
	$fgallery = array(
		JHTML::_( 'select.option', '0',  'Classic' ),	
		JHTML::_( 'select.option', '1',  'Flash Image rotator' ),
		JHTML::_( 'select.option', '2',  'Flash Simpleviewer' ),
		JHTML::_( 'select.option', '3',  'Flash Post Card' ),
		JHTML::_( 'select.option', '4',  'Flash Polaroid' ),		
		JHTML::_( 'select.option', '5',  'Flickr Flash Gallery' ),
		JHTML::_( 'select.option', '6',  'Flickr Flash Slidershow' ),
		JHTML::_( 'select.option', '10', 'Flickr Single Album' ),
		JHTML::_( 'select.option', '7',  'Flickr Maps Gallery' ),		
		JHTML::_( 'select.option', '8',  'Google Maps' ),	
		JHTML::_( 'select.option', '9',  'Picasa Galleries' ),
		JHTML::_( 'select.option', '11', 'Picasa Single Album' ),
			);		
	$lists['fgallery'] = JHTML::_('select.genericlist', $fgallery, 'flashgallery', 'class="inputbox" size="1"', 'value', 'text', $row->flashgallery);		

	$navigatore = array(
		JHTML::_( 'select.option', '1', JText::_( 'Show' ) ),	
		JHTML::_( 'select.option', '0', JText::_( 'Hide' ) ),
			);		
	$lists['navigator'] = JHTML::_('select.genericlist', $navigatore, 'navigation', 'class="inputbox" size="1"', 'value', 'text', $row->navigation);
	
	$movimento = array(
		JHTML::_( 'select.option', '0', JText::_( 'Off' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'On' ) ),
			);		
	$lists['movimento'] = JHTML::_('select.genericlist', $movimento, 'movimento', 'class="inputbox" size="1"', 'value', 'text', $row->movimento);		
	
	$sort = array(
		JHTML::_( 'select.option', '0', 'default' ),	
		JHTML::_( 'select.option', '1', 'relevance' ),
			);		
	$lists['sort'] = JHTML::_('select.genericlist', $sort, 'sort', 'class="inputbox" size="1"', 'value', 'text', $row->sort);	
	
	$overstretch = array(
		JHTML::_( 'select.option', '0', JText::_( 'No' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'Yes' ) ),
			);		
	$lists['overstretch'] = JHTML::_('select.genericlist', $overstretch, 'overstretch', 'class="inputbox" size="1"', 'value', 'text', $row->overstretch);

	$shuffle = array(
		JHTML::_( 'select.option', '0', JText::_( 'No' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'Yes' ) ),
			);		
	$lists['shuffle'] = JHTML::_('select.genericlist', $shuffle, 'shuffle', 'class="inputbox" size="1"', 'value', 'text', $row->shuffle);	
	
	$classictpl = array(
		JHTML::_( 'select.option', '0', JText::_( 'Shadowbox 1' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'Shadowbox 2' ) ),
		JHTML::_( 'select.option', '2', JText::_( 'Shadowbox 3' ) ),	
		JHTML::_( 'select.option', '3', JText::_( 'Shadowbox 4' ) ),					
		JHTML::_( 'select.option', '4', JText::_( 'Fancybox 1' ) ),	
		JHTML::_( 'select.option', '5', JText::_( 'Fancybox 2' ) ),
		JHTML::_( 'select.option', '6', JText::_( 'Fancybox 3' ) ),	
		JHTML::_( 'select.option', '7', JText::_( 'Fancybox 4' ) ),		
			);		
	$lists['classictpl'] = JHTML::_('select.genericlist', $classictpl, 'tclassic', 'class="inputbox" size="1"', 'value', 'text', $row->tclassic);	
	
	
	$orderfront = array(
		JHTML::_( 'select.option', 'rand()', JText::_( 'Random' ) ),	
		JHTML::_( 'select.option', 'title asc', JText::_( 'Title Asc' ) ),
		JHTML::_( 'select.option', 'title desc', JText::_( 'Title Desc' ) ),
		JHTML::_( 'select.option', 'filename asc', JText::_( 'Filename Asc' ) ),	
		JHTML::_( 'select.option', 'filename desc', JText::_( 'Filename Desc' ) ),
		JHTML::_( 'select.option', 'id asc', JText::_( 'Id Asc' ) ),					
		JHTML::_( 'select.option', 'id desc', JText::_( 'Id Desc' ) ),	
		JHTML::_( 'select.option', 'imgdate asc', JText::_( 'Date Asc' ) ),
		JHTML::_( 'select.option', 'imgdate desc', JText::_( 'Date Desc' ) ),	
			);		
	$lists['orderfront'] = JHTML::_('select.genericlist', $orderfront, 'orderfront', 'class="inputbox" size="1"', 'value', 'text', $row->orderfront);		

	// build the html select list for ordering
	$query = 'SELECT ordering AS value, name AS text'
	. ' FROM #__morfeoshow'
	. ' ORDER BY ordering'
	;

		// table ordering
	$lists['ordering'] 			= JHTML::_('list.specificordering',  $row, '', $query );	
	
	HTML_morfeoshow::addGallery($option, $lists, $folder, $vamba, $params_morfeo);
}

function configureGallery($option, $id)
{

	global $params_morfeo;
	$db 		=& JFactory::getDBO();
	$cid 		= JRequest::getVar( 'cid', array(0), '', 'array' );	
	$option 	= JRequest::getCmd( 'option' );
	$folder		= JRequest::getVar('folder', '');
	JArrayHelper::toInteger($cid, array(0));	
	
//	$row =& JTable::getInstance('Morfeoshow', 'Table');
	// load the row from the db table
//	$row->load( $cid[0] );

	$query = "SELECT * FROM #__morfeoshow WHERE id =" .(int) $id;
	$db->setQuery($query);
	$row = $db->loadObject();
	$lists = array();
	$lists['published'] = JHTML::_('select.booleanlist', 'published', 'class="inputbox"', 1);
	
	$transition = array(
		JHTML::_( 'select.option', '0', 'Random' ),	
		JHTML::_( 'select.option', '1', 'Fade' ),
		JHTML::_( 'select.option', '2', 'Blocks' ),
		JHTML::_( 'select.option', '3', 'Circles' ),
		JHTML::_( 'select.option', '4', 'Bubbles' ),
		JHTML::_( 'select.option', '5', 'Lines' ),
		JHTML::_( 'select.option', '6', 'Slow fade' ),	
		JHTML::_( 'select.option', '7', 'Fluids' ),
		JHTML::_( 'select.option', '8', 'Flash' ),
		JHTML::_( 'select.option', '9', 'Bg Fade' ),		
		);		
	
	$lists['transition'] = JHTML::_('select.genericlist', $transition, 'trans', 'class="inputbox" size="1"', 'value', 'text', $row->trans);	
	
	$tempo = array(
		JHTML::_( 'select.option', '4', 'Default' ),	
		JHTML::_( 'select.option', '0', 'Flash' ),
		JHTML::_( 'select.option', '1', 'Very fast' ),
		JHTML::_( 'select.option', '2', 'Fast' ),
		JHTML::_( 'select.option', '3', 'Medium' ),
		JHTML::_( 'select.option', '5', 'Slow' ),
		JHTML::_( 'select.option', '6', 'Very slow' ),	
		);		
	
	$lists['tempo'] = JHTML::_('select.genericlist', $tempo, 'tempo', 'class="inputbox" size="1"', 'value', 'text', $row->tempo);		

		
	$fgallery = array(
		JHTML::_( 'select.option', '0',  'Classic' ),	
		JHTML::_( 'select.option', '1',  'Flash Image rotator' ),
		JHTML::_( 'select.option', '2',  'Flash Simpleviewer' ),
		JHTML::_( 'select.option', '3',  'Flash Post Card' ),
		JHTML::_( 'select.option', '4',  'Flash Polaroid' ),		
		JHTML::_( 'select.option', '5',  'Flickr Flash Gallery' ),
		JHTML::_( 'select.option', '6',  'Flickr Flash Slidershow' ),
		JHTML::_( 'select.option', '10', 'Flickr Single Album' ),
		JHTML::_( 'select.option', '7',  'Flickr Maps Gallery' ),		
		JHTML::_( 'select.option', '8',  'Google Maps' ),	
		JHTML::_( 'select.option', '9',  'Picasa Galleries' ),
		JHTML::_( 'select.option', '11', 'Picasa Single Album' ),		
			);		
	$lists['fgallery'] = JHTML::_('select.genericlist', $fgallery, 'flashgallery', 'class="inputbox" size="1"', 'value', 'text', $row->flashgallery);
	
	$navigatore = array(
		JHTML::_( 'select.option', '1', JText::_( 'Show' ) ),	
		JHTML::_( 'select.option', '0', JText::_( 'Hide' ) ),
			);		
	$lists['nav'] = JHTML::_('select.genericlist', $navigatore, 'navigation', 'class="inputbox" size="1"', 'value', 'text', $row->navigation);	
	
	$movimento = array(
		JHTML::_( 'select.option', '0', JText::_( 'Off' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'On' ) ),
			);		
	$lists['movimento'] = JHTML::_('select.genericlist', $movimento, 'movimento', 'class="inputbox" size="1"', 'value', 'text', $row->movimento);		

	$sort = array(
		JHTML::_( 'select.option', '0', 'default' ),	
		JHTML::_( 'select.option', '1', 'relevance' ),
			);		
	$lists['sort'] = JHTML::_('select.genericlist', $sort, 'sort', 'class="inputbox" size="1"', 'value', 'text', $row->sort);

	$overstretch = array(
		JHTML::_( 'select.option', '0', JText::_( 'No' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'Yes' ) ),
			);		
	$lists['overstretch'] = JHTML::_('select.genericlist', $overstretch, 'overstretch', 'class="inputbox" size="1"', 'value', 'text', $row->overstretch);	

	$shuffle = array(
		JHTML::_( 'select.option', '0', JText::_( 'No' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'Yes' ) ),
			);		
	$lists['shuffle'] = JHTML::_('select.genericlist', $shuffle, 'shuffle', 'class="inputbox" size="1"', 'value', 'text', $row->shuffle);

	$classictpl = array(
		JHTML::_( 'select.option', '0', JText::_( 'Shadowbox 1' ) ),	
		JHTML::_( 'select.option', '1', JText::_( 'Shadowbox 2' ) ),
		JHTML::_( 'select.option', '2', JText::_( 'Shadowbox 3' ) ),	
		JHTML::_( 'select.option', '3', JText::_( 'Shadowbox 4' ) ),					
		JHTML::_( 'select.option', '4', JText::_( 'Fancybox 1' ) ),	
		JHTML::_( 'select.option', '5', JText::_( 'Fancybox 2' ) ),
		JHTML::_( 'select.option', '6', JText::_( 'Fancybox 3' ) ),	
		JHTML::_( 'select.option', '7', JText::_( 'Fancybox 4' ) ),		
			);		
	$lists['classictpl'] = JHTML::_('select.genericlist', $classictpl, 'tclassic', 'class="inputbox" size="1"', 'value', 'text', $row->tclassic);	

	$orderfront = array(
		JHTML::_( 'select.option', 'rand()', JText::_( 'Random' ) ),	
		JHTML::_( 'select.option', 'title asc', JText::_( 'Title Asc' ) ),
		JHTML::_( 'select.option', 'title desc', JText::_( 'Title Desc' ) ),
		JHTML::_( 'select.option', 'filename asc', JText::_( 'Filename Asc' ) ),	
		JHTML::_( 'select.option', 'filename desc', JText::_( 'Filename Desc' ) ),
		JHTML::_( 'select.option', 'id asc', JText::_( 'Id Asc' ) ),					
		JHTML::_( 'select.option', 'id desc', JText::_( 'Id Desc' ) ),	
		JHTML::_( 'select.option', 'imgdate asc', JText::_( 'Date Asc' ) ),
		JHTML::_( 'select.option', 'imgdate desc', JText::_( 'Date Desc' ) ),	
			);		
	$lists['orderfront'] = JHTML::_('select.genericlist', $orderfront, 'orderfront', 'class="inputbox" size="1"', 'value', 'text', $row->orderfront);		
	
	// build the html select list for ordering
	$query = 'SELECT ordering AS value, name AS text'
	. ' FROM #__morfeoshow'
	. ' ORDER BY ordering'
	;

	$lists['ordering'] 			= JHTML::_('list.specificordering',  $row, $cid[0], $query );
	
	HTML_morfeoshow::configureGallery($row, $lists, $option, $folder);
}

function saveGallery($option, $id, $name)
{
	global $mainframe, $params_morfeo;
	//the successfully saved message will only show if errors = 0
	$errors = 0;
	
	//get an instance of my table class in tables folder
	$row =& JTable::getInstance('morfeoshow', 'Table');
	
	//the name of the folder the images are stored in will
	//be a cut down alphanumeric or underscore version of the name
	
	//replace any non alphanumeric with an underscore
	$alpha_num =  ereg_replace("[^A-Za-z0-9]", "_", $name);
	$lowercase = strtolower($alpha_num);
	if(strlen($lowercase) > 12)
	{
		$folder_name = substr($lowercase,0,12);
	}
	else
	{
		$folder_name = $lowercase;
	}
	
	//put in a random number so no folders will have the same name
	$folder_name = $folder_name.'-'.rand(1000, 9999);
	
	//put the folder name into the post array so it will bind to the database later. 
	$_POST['folder'] = $folder_name;

	//MAKE FOLDER PART
	$folders_to_make = array();
	//this is the folder that will hold all images/xml for all galleries
	$folders_to_make[0] = JPATH_SITE.'/images/morfeoshow/';
	
	//this will be used as a temp folder for uploaded images before resizing
	$folders_to_make[1] = JPATH_SITE.'/images/morfeoshow/temp_upload/';
	
	//this is the folder for the gallery
	$folders_to_make[2] = JPATH_SITE.'/images/morfeoshow/' . $folder_name ;
	
	//folders inside gallery folder for thumbs, big images and flash files for the swf
	//to grab (like xml and actionscript files)
	$folders_to_make[3] = JPATH_SITE.'/images/morfeoshow/'. $folder_name . '/thumbs/';
	$folders_to_make[4] = JPATH_SITE.'/images/morfeoshow/'. $folder_name . '/big/';
	$folders_to_make[5] = JPATH_SITE.'/images/morfeoshow/'. $folder_name . '/xml/';
	$folders_to_make[6] = JPATH_SITE.'/images/morfeoshow/'. $folder_name . '/mini/';	

	for($i = 0; $i < count($folders_to_make); $i++)
	{
		if ( !file_exists($folders_to_make[$i]) )
		{
			if (! (mkdir($folders_to_make[$i], 0755)) ) 
			{
				JError::raise(2, 500, $folders_to_make[$i] . JText::_( 'ERROR: Folder could not be created' ) , '', false);
				$errors ++;
			}
		}
	$file 	= 'index.html';	
	$source = JPATH_ROOT . DS . 'images';	
	$dest1 	= JPATH_ROOT . DS . 'images' . DS . 'morfeoshow/'. $folder_name;
	$dest2 	= JPATH_ROOT . DS . 'images' . DS . 'morfeoshow/'. $folder_name . '/thumbs/';	
	$dest3 	= JPATH_ROOT . DS . 'images' . DS . 'morfeoshow/'. $folder_name . '/big/';
	$dest4 	= JPATH_ROOT . DS . 'images' . DS . 'morfeoshow/'. $folder_name . '/xml/';	
	$dest5 	= JPATH_ROOT . DS . 'images' . DS . 'morfeoshow/'. $folder_name . '/mini/';	
	@copy($source. DS .$file,$dest1. DS .$file);
	@copy($source. DS .$file,$dest2. DS .$file);
	@copy($source. DS .$file,$dest3. DS .$file);
	@copy($source. DS .$file,$dest4. DS .$file);
	@copy($source. DS .$file,$dest5. DS .$file);	
	}

		
	//if there has been a shortcut image uploaded then process it
	if(strlen($_FILES['upload_image']['name']) > 2 )
	{
		//UPLOAD PART
		//the input field name on the upload form
		$fieldName = 'upload_image';
		//where the file will go
		$dir = JPATH_SITE.'/images/morfeoshow/temp_upload/';
		$accept = 'image/jpeg,image/pjpeg,image/png,image/gif';
		//set the max upload size to 1 000 000 bytes (1 megabyte)
		$max_upload_size = 2000000;
	
		//upload the image using this function in: inc/upload.php
		//if successful this function will return an array with filename, filesize, filetype
		$array = custom_uploadFile($fieldName, $dir, $accept, $max_upload_size);
		
		//RESIZE PART
		//$array[0] is the filename returned from the upload class
		$img_size = getimagesize($dir.$array[0]);
		
		$shortcut_dir = JPATH_SITE.'/images/morfeoshow/'. $folder_name . '/';
	
		// Instantiate image class used for resizing thumb 
		$cropthumb = new cropImage();
		
		// Create thumbnail with 50 as the maximum default width and 50 as max default height
		$shortcut_image = $cropthumb->crop($dir.$array[0], $shortcut_dir.$array[0], 50, 50, 15);
		
		if (!$shortcut_image === true) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}
		
		//put the filename into the post array to store into database later
		$_POST['shortcut_filename'] = $array[0];
	}
	
	//WRITE THE POST VALUES TO THE DATABASE
	
	//bind matches up post names with db names
	if (!$row->bind(JRequest::get('post')))
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}

	// if new item, order last in appropriate group
	if (!$row->id) {
		$row->ordering = $row->getNextOrder( );
	}	
	
	//description is in html and bind strips this, so this fixes it
	$row->description1 = JRequest::getVar( 'description1', '', 'post',
	'string', JREQUEST_ALLOWRAW );	
	
	//put them into the database
	if (!$row->store())
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}
	
	$message = '';
	if ($errors == 0)
	{
		$message = JText::_( 'Gallery saved successfully' );
	}

	$mainframe->redirect('index.php?option=' . $option, $message);
}

function saveChanges($option, $id, $name, $folder, $task)
{
	global $mainframe;
	//the successfully saved message will only show if errors = 0
	$errors = 0;
	
	//get an instance of my table class in tables folder
	$row =& JTable::getInstance('morfeoshow', 'Table');
	
	//if there has been a shortcut image uploaded then process it
	if(strlen($_FILES['upload_image']['name']) > 2 )
	{
		//UPLOAD PART
		//the input field name on the upload form
		$fieldName = 'upload_image';
		//where the file will go
		$dir = JPATH_SITE.'/images/morfeoshow/temp_upload/';
		$accept = 'image/jpeg,image/pjpeg,image/png,image/gif';
		//set the max upload size to 2 000 000 bytes (2 megabytes)
		$max_upload_size = 2000000;
	
		//upload the image using this function in: inc/upload.php
		//if successful this function will return an array with filename, filesize, filetype
		$array = custom_uploadFile($fieldName, $dir, $accept, $max_upload_size);
		
		//RESIZE PART
		//$array[0] is the filename returned from the upload class
		$img_size = getimagesize($dir.$array[0]);
		
		$shortcut_dir = JPATH_SITE.'/images/morfeoshow/'. $folder . '/';
	
		// Instantiate image class used for resizing thumb
		$cropthumb = new cropImage();
		
		// Create thumbnail with 50 as the maximum default width and 50 as max default height
		$shortcut_image = $cropthumb->crop($dir.$array[0], $shortcut_dir.$array[0], 50, 50, 15);
		
		if (!$shortcut_image === true) 
		{
			JError::raise(2, 500, JText::_( 'ERROR: Image could not be resized' ), '', false);
			$errors ++;
		}
		
		//put the filename into the post array to store into database later
		$_POST['shortcut_filename'] = $array[0];
	}
	
	//WRITE THE POST VALUES TO THE DATABASE
	
	//bind matches up post names with db names
	if (!$row->bind(JRequest::get('post')))
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}

	// if new item, order last in appropriate group
	if (!$row->id) {
		$row->ordering = $row->getNextOrder();
	}		
	
	//description is in html and bind strips this, so this fixes it
	$row->description1 = JRequest::getVar( 'description1', '', 'post',
	'string', JREQUEST_ALLOWRAW );	
	
	//put them into the database
	if (!$row->store())
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}
	
	
	$message = '';
	
	switch($task)
	{
		case 'save_changes':
	if ($errors == 0)
		{
		$message = JText::_( 'Gallery saved successfully' );
		}		
		$url = 'index.php?option=' . $option;
		break;
	
		case 'apply':
	if ($errors == 0)
		{
		$message = JText::_( 'Apply to Gallery saved successfully' );
		}			
		$url = 'index.php?option=' . $option . '&task=edit&cid='.$id;
		break;
	}
	
	

	$mainframe->redirect($url, $message);
}

function removeGallery($option, $id)
{
	global $mainframe;
	$errors = 0;
	
	$db =& JFactory::getDBO();
	$query = "SELECT folder FROM #__morfeoshow WHERE id =" .(int) $id;
	$db->setQuery( $query );
	$row = $db->loadObject();
	
	$folders_to_remove = array();
	$folders_to_remove[0] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/xml/';
	$folders_to_remove[1] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/big/';
	$folders_to_remove[2] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/thumbs/';
	$folders_to_remove[3] = JPATH_SITE.'/images/morfeoshow/'. $row->folder . '/mini/';	
	$folders_to_remove[4] = JPATH_SITE.'/images/morfeoshow/'. $row->folder .'/';
	
	for($i = 0; $i < count($folders_to_remove); $i++)
	{
		if (file_exists($folders_to_remove[$i]))
		{
			$d = dir($folders_to_remove[$i]); 
			while($entry = $d->read()) 
			{ 
				if ($entry!= "." && $entry!= "..") 
				{ 
			 		unlink($folders_to_remove[$i].$entry); 
			 	} 
			} 
			$d->close();
			
			if (!rmdir($folders_to_remove[$i])) 
			{
				JError::raise(2, 500, JText::_( 'ERROR: Folder could not be deleted' ), '', false);
				$errors ++;
			}	
		}
	}

	//DELETE FROM DATABASE PART
	$db =& JFactory::getDBO();
	$query = "DELETE FROM #__morfeoshow WHERE id = $id";
	$db->setQuery( $query );
	if (!$db->query())
	{
		echo "<script> alert('".$db->getErrorMsg()."');
		window.history.go(-1); </script>\n";
	}
	
	$message = '';
	if ($errors == 0)
	{
		$message = JText::_( 'Gallery deleted successfully' );
	}
	
	$mainframe->redirect( 'index.php?option=' . $option, $message );
}


function switchPublish($option, $id, $task)
{
	global $mainframe;
	$row =& JTable::getInstance('morfeoshow', 'Table');
	
	switch($task)
	{
		case 'publish':
		$_POST['published'] = 1;
		break;
	
		default:
		$_POST['published'] = 0;
		break;
	}

	$_POST['id'] = $id;

	if (!$row->bind(JRequest::get('post')))
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}
	
	if (!$row->store())
	{
		echo "<script> alert('".$row->getError()."');
		window.history.go(-1); </script>\n";
		exit();
	}
	$mainframe->redirect('index.php?option=' . $option);
}
?>