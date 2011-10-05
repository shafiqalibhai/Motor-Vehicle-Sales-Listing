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

function write_xml($id, $folder) {
	$db =& JFactory::getDBO();
	$query = "SELECT * FROM #__morfeoshow_img WHERE gallery_id = $id ORDER BY filename";
	$db->setQuery($query);
	$rows = $db->loadObjectList();
	$filename = JPATH_SITE.'/images/morfeoshow/'. $folder . '/xml/imagerotator.xml';
	$pathimage = JURI::root(). 'images/morfeoshow/';
	$vambastart = '![CDATA[';
	$vambaend = ']]';	
	$filehandle = fopen($filename, 'w');
	
	$string = '<?xml version="1.0" encoding="UTF-8"?>'."\n".'<playlist>'."\n";
	$string .= '<trackList>'."\n";	
	$n = count($rows);
	for ($i=0; $i<$n; $i++)
	{
		$row = &$rows[$i];
	$string .= '<track>'."\n";		
	$string .= '<title>' . $row->title . '</title>'."\n";
	$string .= '<creator>' . $row->creator . '</creator>'."\n";	
	$string .= '<location>'. $pathimage . $folder. '/big/'. $row->filename . '</location>'."\n";
	$string .= '<info>' . $row->link . '</info>'."\n";	
	$string .= '</track>'."\n";
	}	
	$string .= '</trackList>'."\n";	
	$string .= '</playlist>';
	//write the gallery information to the xml file
	fwrite($filehandle, $string);
	fclose($filehandle);
    global $params_morfeo;
	include_once( JPATH_COMPONENT.DS.'settings.php' );	
	$filename = JPATH_SITE.'/images/morfeoshow/'. $folder . '/xml/gallery.xml';
	$pathimage = JURI::root(). 'images/morfeoshow/';
	$vambastart = '<![CDATA[';
	$vambaend = ']]>';		
	$filehandle = fopen($filename, 'w');
	
	$string = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
	$string .= '<simpleviewergallery maxImageWidth="'.$params_morfeo['maximgh'].'" maxImageHeight="'.$params_morfeo['maximgh'].'" textColor="0x'.$params_morfeo['txtcolor'].'" frameColor="0x'.$params_morfeo['framecolor'].'" frameWidth="'.$params_morfeo['framewidth'].'" stagePadding="'.$params_morfeo['stagepadding'].'" navPadding="'.$params_morfeo['navpadding'].'" thumbnailColumns="'.$params_morfeo['cols'].'" thumbnailRows="'.$params_morfeo['rows'].'" navPosition="'.$params_morfeo['navpos'].'" vAlign="'.$params_morfeo['alignv'].'" hAlign="'.$params_morfeo['alignh'].'" title="" enableRightClickOpen="true" backgroundImagePath="" imagePath="'. $pathimage . $folder. '/big/" thumbPath="'. $pathimage . $folder. '/thumbs/">'."\n";	
	$n = count($rows);
	for ($i=0; $i<$n; $i++)
	{
		$row = &$rows[$i];
	$string .= '<image>'."\n";		
	$string .= '<filename>'. $row->filename . '</filename>'."\n";
	$vambastart = '<![CDATA[';
	$vambaend = ']]>';		
	$string .= '<caption>' . $vambastart . $row->html . $vambaend .'</caption>'."\n";	
	$string .= '</image>'."\n";
	}	
	$string .= '</simpleviewergallery>';
	//write the gallery information to the xml file
	fwrite($filehandle, $string);
	fclose($filehandle);	

//postcard 1.1.0	
	$filename = JPATH_SITE.'/images/morfeoshow/'. $folder . '/xml/postcard.xml';
	$pathimage = JURI::root(). 'images/morfeoshow/';
	$vambastart = '<![CDATA[';
	$vambaend = ']]>';		
	$filehandle = fopen($filename, 'w');

	$string = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
	$string .= '<gallery frameColor="0xFFFFFF" frameWidth="15" imagePadding="20" displayTime="6" enableRightClickOpen="true">'."\n";	
	$n = count($rows);
	for ($i=0; $i<$n; $i++)
	{
		$row = &$rows[$i];
	$string .= '<image>'."\n";		
	$string .= '<url>'. $pathimage . $folder. '/big/'. $row->filename . '</url>'."\n";
	$string .= '<caption>' . $vambastart . $row->html . $vambaend  . '</caption>'."\n";
	$string .= '<width>700</width>'."\n";
	$string .= '<height>465</height>'."\n";
	$string .= '</image>'."\n";
	}	
	$string .= '</gallery>';
	//write the gallery information to the xml file
	fwrite($filehandle, $string);
	fclose($filehandle);



//polaroid
	$filename 	= JPATH_SITE.'/images/morfeoshow/'. $folder . '/xml/polaroid.xml';
	$pathimage 	= JURI::root(). 'images/morfeoshow/';
	$vambastart = '';
	$vambaend 	= '"';		
	$filehandle = fopen($filename, 'w');
	
	$string = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
	$string .= '<photos>'."\n";	
	$n = count($rows);
	for ($i=0; $i<$n; $i++)
	{
		$row = &$rows[$i];
	$string .= '<photo desc="' . $vambastart . $row->title . $vambaend  . ' url="'. $pathimage . $folder. '/big/'. $row->filename . '" />'."\n";	
	}	
	$string .= '</photos>';
	//write the gallery information to the xml file
	fwrite($filehandle, $string);
	fclose($filehandle);
}	

// Funzione scrittura xml2
function write_xml_2($id, $folder) {
	global $string;
	$db 	=& JFactory::getDBO();
	$query 	= "SELECT *"
	. "\n FROM #__morfeoshow"
	. "\n WHERE  flashgallery= '0'"	
	. "\n OR  flashgallery= '1'"	
	. "\n OR  flashgallery= '2'"	
	. "\n OR  flashgallery= '3'"	
	. "\n OR  flashgallery= '4'"		
	. "\n ORDER BY name";	
	$db->setQuery($query);
	$rows 		= $db->loadObjectList();
	$filename 	= JPATH_SITE.'/components/com_morfeoshow/gallery.xml';
	$pathimage 	= JURI::root(true). '/images/morfeoshow/';
	$img 		= JURI::root(true).'/images/morfeoshow/';
	$thumb		= JURI::root(true).'/images/morfeoshow/';
	$vambastart = '<![CDATA[';
	$vambaend = ']]>';	
	$filehandle = fopen($filename, 'w');
	
	$string .= '<gallery title="MorfeoShow Gallery" thumbDir="'. $thumb .'" imageDir="'. $img .'" random="true">'."\n";	
	$n = count($rows);
		foreach( $rows as $row )
		{	
		$string .= '<category name="'. $row->name . '">'."\n";	
	$query = "SELECT * FROM #__morfeoshow_img WHERE gallery_id = $row->id ORDER BY filename";
	$db->setQuery($query);
	$images = $db->loadObjectList();
	@$date 	= $images->imgdate;

	$n = count($images);
	for ($i=0; $i<$n; $i++)
	{
		$image 	 = &$images[$i];
		$string .= '<image>'."\n";		
				$string .= '<date>'. JHTML::_('date',  $image->imgdate, JText::_('DATE_FORMAT_LC3') ) . '</date>'."\n";	
				$string .= '<title>'. $image->title . '</title>'."\n";	
				$string .= '<desc>' . $vambastart . $image->html . $vambaend  . '</desc>'."\n";	
				$string .= '<thumb>'. $row->folder . '/mini/'. $image->filename . '</thumb>'."\n";
				$string .= '<img>'. $row->folder . '/big/'. $image->filename . '</img>'."\n";
		$string .= '</image>'."\n";				
	}	
	$string .= '</category>'."\n";
	}	
	$string .= '</gallery'."\n";	
	//write the gallery information to the xml file
	fwrite($filehandle, $string);
	fclose($filehandle);	
}
?>