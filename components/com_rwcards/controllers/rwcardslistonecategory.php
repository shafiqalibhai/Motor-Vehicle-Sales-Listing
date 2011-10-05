<?php
/**
* RWCards controller  for ListOneCategory
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();


class RWCardsControllerRWCardsListOneCategory extends RWCardsController
{
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function display()
	{
		$model = $this->getModel('RWCardsListOneCategory');
		JRequest::setVar( 'view', 'RWCardsListOneCategory' );
		JRequest::setVar( 'layout', 'RWCardsListOneCategory'  );
		parent::display();
	}	
}
?>
