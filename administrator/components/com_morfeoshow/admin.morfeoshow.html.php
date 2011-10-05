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
jimport( 'joomla.application.component.view');
jimport( 'joomla.html.pane' );


class HTML_morfeoshow
{
function showPostinstall() 
{ 
	global $folder; 
		JSubMenuHelper::addEntry(false);
		include( JPATH_COMPONENT.DS.'view'.DS.'postinstall.php' );

}

function showInfo() 
{ 
	global $folder; 
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow');
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings');
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info',true );
		JSubMenuHelper::addEntry(JText::_('Back'), 'index.php?option=com_morfeoshow&task=back');		
		include( JPATH_COMPONENT.DS.'view'.DS.'info.php' );
}	

function showGallerys($option, &$rows, &$pageNav, &$lists, $params) 
{
		global $params_morfeo, $html; 
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow',true);
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings');
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info');
		require_once(JPATH_COMPONENT.DS.'settings.php');
		include( JPATH_COMPONENT.DS.'view'.DS.'showgallery.php' );		
}

################
# Manage Galleries
################	

function addGallery($option, &$lists, $folder, $vamba) 
{
        global $params_morfeo;
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow',true);
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings');
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info');
		JSubMenuHelper::addEntry(JText::_('Back'), 'index.php?option=com_morfeoshow&task=back');		
		require_once(JPATH_COMPONENT.DS.'settings.php');
		$editor =& JFactory::getEditor();
		$pane	=& JPane::getInstance('sliders');
		include( JPATH_COMPONENT.DS.'view'.DS.'addgallery.php' );	
}
	
function configureGallery(&$row, &$lists, $option, $folder)
{
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow',true);
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings');
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info');
		JSubMenuHelper::addEntry(JText::_('Back'), 'index.php?option=com_morfeoshow&task=back');		
		require_once(JPATH_COMPONENT.DS.'settings.php');
		$editor =& JFactory::getEditor();
		$pane	=& JPane::getInstance('sliders');
		include( JPATH_COMPONENT.DS.'view'.DS.'editgallery.php' );	
}

################
# Manage Images
################

function managePhotos($row, $option, $id) 
{
		global $image, $tzoffset;
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow',true);
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings');
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info');
		JSubMenuHelper::addEntry(JText::_('Back'), 'index.php?option=com_morfeoshow&task=back');		
		require_once(JPATH_COMPONENT.DS.'settings.php');
//		$date 	=& JFactory::getDate(@$image->imgdate, $tzoffset);
		$date 	= JHTML::_('date',  @$image->imgdate, '%Y-%m-%d' );	
		$editor =& JFactory::getEditor();
		include( JPATH_COMPONENT.DS.'view'.DS.'addphoto.php' );		
}

function editDes($row, $img_row, $option, $id) 
{ 
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow',true);
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings');
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info');
		JSubMenuHelper::addEntry(JText::_('Back'), 'index.php?option=com_morfeoshow&task=back');		
		require_once(JPATH_COMPONENT.DS.'settings.php');
		$editor =& JFactory::getEditor();
		include( JPATH_COMPONENT.DS.'view'.DS.'editphoto.php' );	
}

################
# List of Images x Gallery
################
function Photos($row, $rows, $option, $id, $pageNav, &$lists) 
{
		global $image, $tzoffset;
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow',true);
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings');
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info');
		JSubMenuHelper::addEntry(JText::_('Back'), 'index.php?option=com_morfeoshow&task=back');		
		require_once(JPATH_COMPONENT.DS.'settings.php');
		include( JPATH_COMPONENT.DS.'view'.DS.'photo.php' );		
}

################
# Config/Settings
################
function showSettings( $option, &$params, $rows, $lists )
{ 
		global $folder, $errors;
		JSubMenuHelper::addEntry(JText::_('Galleries'), 'index.php?option=com_morfeoshow');
		JSubMenuHelper::addEntry(JText::_('Settings'), 'index.php?option=com_morfeoshow&task=showSettings',true);
		JSubMenuHelper::addEntry(JText::_('Info'), 'index.php?option=com_morfeoshow&task=info');
		JSubMenuHelper::addEntry(JText::_('Back'), 'index.php?option=com_morfeoshow&task=back');		
		require_once(JPATH_COMPONENT.DS.'settings.php');		
		include( JPATH_COMPONENT.DS.'view'.DS.'config.php' );
}

################
# Menu item 
################
function menu( $id, $option, $params, $titologalleria, $titologallerialias, $lists )
{ 
		global $errors, $vocedimenu;
		require_once(JPATH_COMPONENT.DS.'settings.php');		
?>

<form action="index.php" method="post" name="adminForm">
				<!-- Menu Item Type Section -->
	<fieldset>
			<legend>
					<?php echo JText::_( 'Choose Menu Item Type' ); ?> <?php echo JText::_( 'For Gallery' ); ?>: <b><?php echo $titologalleria; ?></b>
			</legend>
				<div style="float:left">
						<?php echo $lists['menu']; ?>  
					<input type="submit" value="<?php echo JText::_( 'Go' ); ?>" class="button" />
					<input type="hidden" name="option" value="com_morfeoshow" />
					<input type="hidden" name="cid" value="<?php echo $id; ?>" />
					<input type="hidden" name="titologalleria" value="<?php echo $titologalleria; ?>" />
					<input type="hidden" name="titologallerialias" value="<?php echo $titologallerialias; ?>" />
					<input type="hidden" name="task" value="crea_menu" />
</form>					
				</div>
	</fieldset>
				
<?php		
}

function menuok () 
{ 
}		

}// end class
?>