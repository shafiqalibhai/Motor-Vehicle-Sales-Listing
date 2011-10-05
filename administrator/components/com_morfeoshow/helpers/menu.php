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

	function addmenuMorfeoShow( $id, $option, $vocedimenu ) {
				global $mainframe, $params_morfeo;
				
				$titologalleria 		= JRequest::getVar('titologalleria', '');
				$titologallerialias		= JRequest::getVar('titologallerialias', '');
				$vocedimenu				= JRequest::getVar('vocedimenu', '');
				$comid					= JRequest::getVar('comid', '');				
				$cid 					= JRequest::getVar( 'cid', array(0), '', 'array' );
				$id 					= $cid[0];				
				include_once( JPATH_COMPONENT.DS.'settings.php' );
				//Raccolgo le informazioni dal database
				$db =& JFactory::getDBO();
				
				$query = "SELECT name FROM #__morfeoshow WHERE id = '$id'";
				$db->setQuery( $query );
				$titologalleria = $db->loadResult();
				$titologallerialias = $db->loadResult();
				
				$query = "SELECT id FROM #__components WHERE link = 'option=com_morfeoshow'";
				$db->setQuery( $query );
				$comid = $db->loadResult();

				// Controllo i caratteri speciali non si sa mai rovinassero i Sef
				$special_chars = array('á','ä','à','é','ë','è','í','ï','ì','ó','ö','ò','ú','ü','ù','�?','Ä','À','É','Ë','È','�?','�?','Ì','Ó','Ö','Ò','Ú','Ü','Ù','ñ','Ñ','?','¿','!','¡','(',')','[',']',',');
				foreach ($special_chars as $special_char)	{
				$titologallerialias = str_replace($special_char, '', $titologallerialias);
				}
				// se ci sono spazi tra le parole inserisco un - per integrazione dei titoli alias	
					$titologallerialias = str_replace(' ', '-', $titologallerialias);	
				//Scrivo le informazioni raccolte nel database	
				$query = "INSERT INTO #__menu (`id`,`menutype`,`name`, `alias`,`link`,`type`,`published`,`parent`,`componentid`,`sublevel`,`ordering`,`checked_out`,`checked_out_time`,`pollid`,`browserNav`,`access`,`utaccess`,`params` ,`lft` ,`rgt` ,`home`)"
			                        ."\n VALUES ('','".$vocedimenu."','".$titologalleria."', '".$titologallerialias."','index.php?option=com_morfeoshow&amp;task=view&amp;gallery=".$id."','component','1','0','".$comid."','0','9999','0','0000-00-00 00:00:00','0','0','0','3','','','','');" ;
				$db->setQuery( $query );					

			    if (!$db->query()) {
			      echo "<script> alert('".$db->getErrorMsg()."'); window.history.go(-1); </script>\n";
			    }
				$text1 = JText::_( 'Menu Item saved successfully' );
				$text2 = JText::_( 'In menu item group' );
				$text3 = JText::_( 'Close this windows' );
				$message = $text1. '</span><br />'. $text2. '   <span style="font-size: 140%; font-weight: bold; color:red">' . $vocedimenu . '</span><br /><span style="text-align:middle;font-size: 140%; font-weight: bold; color:#800000">'. $text3 .'</span>';
				$mainframe->redirect( 'index3.php?option=' . $option .'&task=menuok', '<span style="	font-size: 100%; font-weight: bold; line-height:15px;">' . $message );		
}
?>