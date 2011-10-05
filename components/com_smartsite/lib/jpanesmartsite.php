<?php



// Check to ensure this file is within the rest of the framework

defined('JPATH_BASE') or die();



jimport("joomla.html.pane");



/**

 * JPanelSliders class to to draw parameter panes

 *

 * @author		Anton Nikiforov <anton@wowjoomla.com>

 * @package		Smartsite

 * @subpackage	HTML

 * @since		1.5

 */

class JPaneSmartsite extends JPane //modified for smartsite

{

	/**

	 * Constructor

	 *

	 * @param int useCookies, if set to 1 cookie will hold last used tab between page refreshes

	 */

	function __construct( $params = array() )

	{

		static $loaded = false;



		parent::__construct($params);



		if(!$loaded) {

			$this->_loadBehavior($params);

			$loaded = true;

		}

	}



	/**

	 * Creates a pane and creates the javascript object for it

	 *

	 * @param string The pane identifier

	 */

	function startPane( $id )

	{

		return '<div id="'.$id.'">';

	}



    /**

	 * Ends the pane

	 */

	function endPane() {

		return '</div>';

	}



	/**

	 * Creates a tab panel with title text and starts that panel

	 *

	 * @param	string	$text - The name of the tab

	 * @param	string	$id - The tab identifier

	 */

	function startPanel( $text, $id )

	{	   

	    jimport('joomla.html.parameter');

	    

        $user = & JFactory::getUser();

        $globalVariables = &JComponentHelper::getParams( 'com_smartsite' );

        

	   

	  $result = '<div id="m_'.$id.'" class="modbox" tabindex="0">

               <div class="modtitle">

               <h2 id="m_'.$id.'_link" class="nlnk"><span id="m_'.$id.'_title" class="modtitle_text">'.$text.'</span></h2>

        <a class="delbox" href="#" onclick="return _del(\''.$id.'\',24,\'n_24=sec%3D0\');"></a>

        <a class="minbox" id="m_'.$id.'_zippy" href="#" onclick="chgTT(this);return _zm(\''.$id.'\', \'24\');return false;"></a>

        ';

	  if (!$user->get('guest') || $globalVariables->get('show_registered_only')) {

	  $result .= '

        <a class="ddbox" id="DD_tg_'.$id.'" href="#" onclick="_ss_DD_open(event,'.$id.');return false;"></a>

        

        <script>

        ';

	  if (!$user->get('guest')) {

	      $result .= '

            _ss_DD_create('.$id.', [	  	  

                             ["Edit settings", "'.JRoute::_('index2.php?option=com_smartsite&client=0&task=edit&cid[]='.$id.'&controller=modules').'","SqueezeBox.fromElement(this);return false;", "{handler: \'iframe\', size: {x: 650, y: 300}}", 1, 0, 0],

                             ["Clone module", "#", "clone(\''.$id.'\');return false;", "", 0, 1, '.$id.']

                             ]);

                             ';

	  } else {

	      $result .= '

            _ss_DD_create('.$id.', [	  	  

                             ["Edit settings", "#","alert(\'You need to log in\');return false;", "", 0, 0, 0],

                             ["Clone module", "#", "alert(\'You need to log in\');return false;", "", 0, 0, '.$id.']

                             ]);

                             ';	      

	  }

	  $result .= '

        </script>

        ';

	  }

      $result .= '  

        <div class="dt" id="m_'.$id.'_h"></div>

        <div style="clear:both"></div>

         </div>           

        <div id="m_'.$id.'_b" class="modboxin"  style="height:px;">                     

               ';

	  

	   return $result; 

  



	}



	/**

	 * Ends a tab page

	 */

	function endPanel()

	{

		return '    </div>

</div>';

	}



	/**

	 * Load the javascript behavior and attach it to the document

	 *

	 * @param	array 	$params		Associative array of values

	 */

	function _loadBehavior($params = array())

	{

	    $user		=& JFactory::getUser();

	    $document =& JFactory::getDocument();



    JHTML::script('smartsite.js','components/com_smartsite/assets/js/');
   JHTML::stylesheet('smartsite_1.css','components/com_smartsite/assets/css/'); 

	
		/**	     JHTML::stylesheet('smartsite_2.css','components/com_smartsite/assets/css/');
	 */


	    $script = 'var smartsite_user = '.$user->id;

	    

	    $document->addScriptDeclaration($script);



	}

}

?>