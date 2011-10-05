<?php
/**
* RWCArds Model for RWCards Component
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

jimport( 'joomla.application.component.model' );

class RWCardsModelRWCardsManageUploadEcards extends JModel
{

	/**
	 * Hellos data array
	 *
	 * @var array
	 */
	var $_images = array();
	
	/**
	 * Constructor that retrieves the ID from the request
	 *
	 * @access	public
	 * @return	void
	 */
	function __construct()
	{
		parent::__construct();
		$this->images = $_images;
	}

	function getImages()
	{
        $this->images = JFolder::files(JPATH_ROOT . "/images/stories/cards");
		return $this->images;
	}

}