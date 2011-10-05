<?php
/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2009 Think Network GmbH, Munich
 *
 * All rights reserved.  The Joom!Fish project is a set of extentions for
 * the content management system Joomla!. It enables Joomla!
 * to manage multi lingual sites especially in all dynamic information
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -----------------------------------------------------------------------------
 * $Id: view.php 1251 2009-01-07 06:29:53Z apostolov $
 * @package joomfish
 * @subpackage Views
 *
*/
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view');
jimport('joomla.html.pane');

/**
 * Method to translate with a pre_reg function call
 *
 * @param array $matches
 * @return string
 */
function jfTranslate($matches){
	$translation = '!!!' .JText::_($matches[1]);
	return $translation;
}


/**
 * HTML Abstract View class for the Joomfish never used directly
 *
 * @since 2.0
 */
class JoomfishViewDefault extends JView {
	function __construct($config = null)
	{
		parent::__construct($config);
		$this->_addPath('template', $this->_basePath.DS.'views'.DS.'default'.DS.'tmpl');
	}

	function display($tpl=null)
	{
		$document =& JFactory::getDocument();
		$livesite = JURI::base();
		$document->addStyleSheet($livesite.'components/com_joomfish/assets/css/joomfish.css');
		
		// Get data from the model
		$state		= &$this->get('State');
		// Are there messages to display ?
		$showMessage	= false;
		$message = $this->get('message');
				
		if ( is_object($state) )
		{
			$message1		= $state->get('message') == null ? $message : $state->get('message');
			$message2		= $state->get('extension.message');
			$showMessage	= ( $message1 || $message2 );
		}

		$this->assign('showMessage',	$showMessage);
		$this->assignRef('state',		$state);

		JHTML::_('behavior.tooltip');
		parent::display($tpl);
	}

	/**
	 * Routine to hide submenu suing CSS since there are no paramaters for doing so without hiding the main menu
	 *
	 */
	function _hideSubmenu(){
		JHTML::stylesheet( 'hidesubmenu.css', 'administrator/components/com_joomfish/assets/css/' );	 	
	}

	 /**
	 * This method creates a standard cpanel button
	 *
	 * @param string $link
	 * @param string $image
	 * @param string $text
	 * @param string $path
	 * @param string $target
	 * @param string $onclick
	 * @access protected
	 */
	 function _quickiconButton( $link, $image, $text, $path=null, $target='', $onclick='' ) {
	 	if( $target != '' ) {
	 		$target = 'target="' .$target. '"';
	 	}
	 	if( $onclick != '' ) {
	 		$onclick = 'onclick="' .$onclick. '"';
	 	}
	 	if( $path === null || $path === '' ) {
	 		$path = 'components/com_joomfish/assets/images/';
	 	}
		?>
		<div style="float:left;">
			<div class="icon">
				<a href="<?php echo $link; ?>" <?php echo $target;?>  <?php echo $onclick;?>>
					<?php echo JHTML::_('image.administrator', $image, $path, NULL, NULL, $text ); ?>
					<span><?php echo $text; ?></span>
				</a>
			</div>
		</div>
		<?php
	 }
	/**
	 * Method to use a tooltip independ from JElements
	 *
	 * @param string $label	title of the lable
	 * @param string $description	of the lable
	 * @param string $control_name	name of the control the lable is related to
	 * @param string $name	of the control
	 * @return unknown
	 */
	function fetchTooltip($label, $description, $control_name='', $name='')
	{
		$output = '<label id="'.$control_name.$name.'-lbl" for="'.$control_name.$name.'"';
		if ($description) {
			$output .= ' class="hasTip" title="'.JText::_($label).'::'.JText::_($description).'">';
		} else {
			$output .= '>';
		}
		$output .= JText::_( $label ).'</label>';

		return $output;
	}
}
?>
