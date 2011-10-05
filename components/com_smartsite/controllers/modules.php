<?php
/**
 * @version		$Id: controller.php 10094 2008-03-02 04:35:10Z instance $
 * @package		Joomla
 * @subpackage	Modules
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.controller' );

$client	= JRequest::getVar('client', 0, '', 'int');
if ($client == 1) {
	JSubMenuHelper::addEntry(JText::_('Site'), 'index.php?option=com_modules&client_id=0');
	JSubMenuHelper::addEntry(JText::_('Administrator'), 'index.php?option=com_modules&client=1', true );
} else {
	JSubMenuHelper::addEntry(JText::_('Site'), 'index.php?option=com_modules&client_id=0', true );
	JSubMenuHelper::addEntry(JText::_('Administrator'), 'index.php?option=com_modules&client=1');
}

class SmartsiteController extends JController
{
	/**
	 * Constructor
	 */
	function __construct( $config = array() )
	{
		parent::__construct( $config );

		// Register Extra tasks
		$this->registerTask( 'apply', 			'save' );
		$this->registerTask( 'unpublish', 		'publish' );
		$this->registerTask( 'orderup', 		'reorder' );
		$this->registerTask( 'orderdown', 		'reorder' );
		$this->registerTask( 'accesspublic', 	'access' );
		$this->registerTask( 'accessregistered','access' );
		$this->registerTask( 'accessspecial',	'access' );
	}


	/**
	 * Saves the module after an edit form submit
	 */
	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		global $mainframe;

		$cache = & JFactory::getCache();
		$cache->clean( 'com_content' );

		// Initialize some variables
		$db		=& JFactory::getDBO();
		$client	=& JApplicationHelper::getClientInfo(JRequest::getVar('client', '0', '', 'int'));
		$this->setRedirect( 'index.php?option=com_modules&client='.$client->id );

		$post	= JRequest::get( 'post' );
		// fix up special html fields
		$post['content']   = JRequest::getVar( 'content', '', 'post', 'string', JREQUEST_ALLOWRAW );
		$post['client_id'] = $client->id;
		
		$row = new stdClass();
		$row->Id = JRequest::getInt( 'id', 0 );
		$row->title = mysql_escape_string(JRequest::getString( 'title', '' ));
		$row->showtitle = JRequest::getInt( 'showtitle', 0 );
		$row->content = JRequest::getVar( 'content', '' );
		$row->modorder = JRequest::getInt( 'ordering', 0 );
		$row->holder_id = JRequest::getVar( 'filter_position', 'left' );
		$temp = JRequest::getVar( 'params', '' );
		
		//echo "row=<pre>";print_r($row);echo "</pre><hr>";
		$row->params = '';
		
         foreach ($temp as $k => $v)
			{
			   // echo "k=<pre>";print_r($k);echo "</pre><hr>";
               // echo "v=<pre>";print_r($v);echo "</pre><hr>";
                $row->params .= "$k=$v\n";

			}		
		
			
		/*
		$contentConfig = &JComponentHelper::getParams( 'com_content' );
		
		echo "contentConfig=<pre>";print_r($contentConfig);echo "</pre><hr>";
		
			foreach (get_object_vars($contentConfig->toObject()) as $k => $v)
			{
			    echo "k=<pre>";print_r($k);echo "</pre><hr>";
                echo "v=<pre>";print_r($v);echo "</pre><hr>";
				$name = 'mosConfig_'.$k;
				$$name = $v;
			}		
		*/
		$query = "UPDATE #__smartsite_modules_users SET 
		title = '$row->title',
		showtitle = '$row->showtitle',
		content = '$row->content',
		modorder = '$row->modorder',
		holder_id = '$row->holder_id',
		params = '$row->params'
		WHERE Id = '$row->Id'
		";
		$db->setQuery($query);
		//echo $db->getQuery($query)."<hr>";//exit;
		$db->query();
		
        
		$menus = JRequest::getVar( 'menus', '', 'post', 'word' );
		$selections = JRequest::getVar( 'selections', array(), 'post', 'array' );
		JArrayHelper::toInteger($selections);

		$this->setMessage( JText::_( 'Item saved' ) );
		
		$mainframe->redirect('index2.php?option=com_smartsite&task=saved&controller=modules'); 
	}

	/**
	* Compiles information to add or edit a module
	* @param string The current GET/POST option
	* @param integer The unique id of the record to edit
	*/
	function edit( )
	{
	    
        jimport('joomla.application.component.view');
        $document = JFactory::getDocument();
        $document->addScript(JURI::base() . 'includes/js/joomla.javascript.js'); 
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/template.css'); 
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/rounded.css'); 
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/ie7.css');
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/ie6.css');  

        
		// Initialize some variables
		$db 	=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$client	=& JApplicationHelper::getClientInfo(JRequest::getVar('client', '0', '', 'int'));
		$module = JRequest::getVar( 'module', '', '', 'cmd' );
		$id 	= JRequest::getVar( 'id', 0, 'method', 'int' );
		$cid 	= JRequest::getVar( 'cid', array( $id ), 'method', 'array' );
		JArrayHelper::toInteger($cid, array(0));

		$model	= &$this->getModel('module');
		

	
		$model->setState( 'id',			$cid[0] );
		$model->setState( 'clientId',	$client->id );

		$lists 	= array();
		//$row 	=& JTable::getInstance('module');
		// load the row from the db table
		//$row->load( (int) $cid[0] );
		
    		$query = "SELECT m.id AS id_module, mu.Id AS id, mu.modorder AS ordering,\n
    		        mu.title, m.module, mu.holder_id AS position, mu.content, mu.showtitle, m.control, mu.params\n"
    			. " FROM #__smartsite_modules_users AS mu \n"
    			. " LEFT JOIN #__modules AS m ON m.id = mu.box_id \n"
    			. " WHERE mu.Id = '".(int) $cid[0]."' \n";
		$db->setQuery($query);
		//echo $db->getQuery()."<hr>";
		$row = $db->loadObject();
		
		//echo "row=<pre>";print_r($row);echo "</pre><hr>";
		
		// get list of Positions for dropdown filter
		$query = 'SELECT m.position AS value, m.position AS text'
		. ' FROM #__modules as m'
		. ' WHERE m.client_id = '.(int) $client->id
		. ' GROUP BY m.position'
		. ' ORDER BY m.position'
		;
		//$positions[] = array(); //JHTML::_('select.option',  '0', '- '. JText::_( 'Select Position' ) .' -' );
		$db->setQuery( $query );
		//echo $db->getQuery()."<hr>";
		$positions = $db->loadObjectList();
		
		//echo "positions=<pre>";print_r($positions);echo "</pre><hr>";
		
		$lists['position']	= JHTML::_('select.genericlist',   $positions, 'filter_position', 'class="inputbox" size="1" ', 'value', 'text', "$row->position" );
		
		
		
		/*
		// fail if checked out not by 'me'
		if ($row->isCheckedOut( $user->get('id') )) {
			$this->setRedirect( 'index.php?option=com_modules&client='.$client->id );
			return JError::raiseWarning( 500, JText::sprintf( 'DESCBEINGEDITTED', JText::_( 'The module' ), $row->title ) );
		}
*/
		$row->content = htmlspecialchars( str_replace( '&amp;', '&', $row->content ), ENT_COMPAT, 'UTF-8' );
/*
		if ( $cid[0] ) {
			$row->checkout( $user->get('id') );
		}
		*/
		// if a new record we must still prime the JTableModel object with a default
		// position and the order; also add an extra item to the order list to
		// place the 'new' record in last position if desired
		if ($cid[0] == 0) {
			$row->position 	= 'left';
			$row->showtitle = true;
			$row->published = 1;
			//$row->ordering = $l;

			$row->module 	= $module;
		}

		if ($client->id == 1)
		{
			$where 				= 'client_id = 1';
			$lists['client_id'] = 1;
			$path				= 'mod1_xml';
		}
		else
		{
			$where 				= 'client_id = 0';
			$lists['client_id'] = 0;
			$path				= 'mod0_xml';
		}

		$query = 'SELECT holder_id AS position, modorder AS ordering, showtitle, title'
		. ' FROM #__smartsite_modules_users'
		//. ' WHERE '. $where
		. ' WHERE user_id = '.$user->get('id').' ORDER BY ordering'
		;
		$db->setQuery( $query );
		if ( !($orders = $db->loadObjectList()) ) {
			echo $db->stderr();
			return false;
		}

		$orders2 	= array();

		$l = 0;
		$r = 0;
		for ($i=0, $n=count( $orders ); $i < $n; $i++) {
			$ord = 0;
			if (array_key_exists( $orders[$i]->position, $orders2 )) {
				$ord =count( array_keys( $orders2[$orders[$i]->position] ) ) + 1;
			}

			$orders2[$orders[$i]->position][] = JHTML::_('select.option',  $ord, $ord.'::'.addslashes( $orders[$i]->title ) );
		}

		// get selected pages for $lists['selections']
		if ( $cid[0] ) {
			$query = 'SELECT menuid AS value'
			. ' FROM #__modules_menu'
			. ' WHERE moduleid = '.(int) $row->id
			;
			$db->setQuery( $query );
			$lookup = $db->loadObjectList();
			if (empty( $lookup )) {
				$lookup = array( JHTML::_('select.option',  '-1' ) );
				$row->pages = 'none';
			} elseif (count($lookup) == 1 && $lookup[0]->value == 0) {
				$row->pages = 'all';
			} else {
				$row->pages = null;
			}
		} else {
			$lookup = array( JHTML::_('select.option',  0, JText::_( 'All' ) ) );
			$row->pages = 'all';
		}

		if ( $row->access == 99 || $row->client_id == 1 || $lists['client_id'] ) {
			$lists['access'] 			= 'Administrator';
			$lists['showtitle'] 		= 'N/A <input type="hidden" name="showtitle" value="1" />';
			$lists['selections'] 		= 'N/A';
		} else {
			if ( $client->id == '1' ) {
				$lists['access'] 		= 'N/A';
				$lists['selections'] 	= 'N/A';
			} else {
				$lists['access'] 		= JHTML::_('list.accesslevel',  $row );

				$selections				= JHTML::_('menu.linkoptions');
				$lists['selections']	= JHTML::_('select.genericlist',   $selections, 'selections[]', 'class="inputbox" size="15" multiple="multiple"', 'value', 'text', $lookup, 'selections' );
			}
			$lists['showtitle'] = JHTML::_('select.booleanlist',  'showtitle', 'class="inputbox"', $row->showtitle );
		}

		// build the html select list for published
		$lists['published'] = JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $row->published );

		$row->description = '';

		$lang =& JFactory::getLanguage();
		if ( $client->id != '1' ) {
			$lang->load( trim($row->module), JPATH_SITE );
		} else {
			$lang->load( trim($row->module) );
		}

		// xml file for module
		if ($row->module == 'custom') {
			$xmlfile = JApplicationHelper::getPath( $path, 'mod_custom' );
		} else {
			$xmlfile = JApplicationHelper::getPath( $path, $row->module );
		}

		$data = JApplicationHelper::parseXMLInstallFile($xmlfile);
		if ($data)
		{
			foreach($data as $key => $value) {
				$row->$key = $value;
			}
		}

		// get params definitions
		$params = new JParameter( $row->params, $xmlfile, 'module' );

		//require_once( JApplicationHelper::getPath( 'admin_html' ) );//smartsite
		require_once(JPATH_BASE .DS. 'components'. DS . 'com_smartsite' . DS . 'smartsite.html.php');
		HTML_modules::edit( $model, $row, $orders2, $lists, $params, $client );
	}

	function saved() {
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/template.css'); 
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/rounded.css'); 
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/ie7.css');
        $document->addStyleSheet(JURI::base() . 'administrator/templates/khepri/css/ie6.css');  	    
	    
      $view = $this->getView();
	  $view->display('success');
	} 
	
	
}