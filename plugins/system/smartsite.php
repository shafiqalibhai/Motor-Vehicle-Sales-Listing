<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class  plgSystemSmartsite extends JPlugin
{
	/**
	 * Constructor
	 *
	 * For php4 compatability we must not use the __constructor as a constructor for plugins
	 * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
	 * This causes problems with cross-referencing necessary for the observer design pattern.
	 *
	 * @access	protected
	 * @param	object $subject The object to observe
	 * @param 	array  $config  An array that holds the plugin configuration
	 * @since	1.0
	 */
	function plgSystemSmartsite(& $subject, $config)
	{
		parent::__construct($subject, $config);

		//load the translation
		$this->loadLanguage( );
	}
	
	function onAfterInitialise()
	{
	   global $mainframe;
	   if (!$mainframe->isAdmin()) {
    	   JHTML::_('behavior.mootools'); 
    	   $document	=& JFactory::getDocument();
           $document->addStyleSheet(JURI::base() . 'media/system/css/modal.css');
           $document->addScript(JURI::base() . 'media/system/js/modal.js');		   
	   } 
	}
	
	/**
	* Converting the site URL to fit to the HTTP request
	*
	*/
	function onAfterRender()
	{
		global $mainframe, $database;

	   global $mainframe;
	   if (!$mainframe->isAdmin()) {
	       			
		$document	=& JFactory::getDocument();
		$doctype	= $document->getType();
		$db = JFactory::getDBO();
                $user = & JFactory::getUser();
			
		$controller = JRequest::getString('controller', '');
		$task = JRequest::getString('task', '');
		

		// Only render for HTML output
		if ( $doctype !== 'html' ) { return; }

		
		$user	=& JFactory::getUser();

		ob_start();
?>
<script>

<?php 
if ( 'modules' != $controller) { 
    ?>
function chgTT(n) {
    var tipText = ["Minimize","Restore","Maximize"];
    var tipTextMap = {"maxbox":0,"minbox":1,"shrinkbox":2,"enlargebox":1 };
    n.setAttribute('title',tipText[tipTextMap[n.className]]);
}
_ss_RegisterOnloadHandler(
                          function (){
                              var ttip = {"ddbox":"Menu","delbox":"Delete","minbox":"Minimize","maxbox":"Restore","shrinkbox":"Restore","enlargebox":"Maximize"};
                              var divs = _gelstn("div");
                              for (var i = 0, modtitle; modtitle = divs[i]; i++) {
                                  if (modtitle.className == "modtitle") {
                                      var anchors = modtitle.getElementsByTagName("a");
                                      for (var j = 0, a; a = anchors[j]; j++) {
                                          if (ttip[a.className]) {
                                              a.setAttribute("title", ttip[a.className]);
                                              a.setAttribute("href", "javascript:void(0)");
                                          }
                                      }
                                  }
                              }
                          }
                          );
_table=_gel("t_1");
_pl=true;
_upc();
<?php 
}
    ?>
		window.addEvent('domready', function() {

			SqueezeBox.initialize({});
<?php /**/
if ($controller == 'modules' && $task == 'saved') {
?>   setTimeout(function(){      
      window.parent.location.reload(true);
   }, 1500);
<?php 
}/**/
?>
		});


</script>

<?php
if (!$user->get('guest') && 'modules' != $controller) {
	$query = "SELECT Id FROM #__smartsite_modules_users WHERE user_id = '".$user->get('id')."' AND minimized = '1'";
	$db->setQuery($query);
	$rows = $db->loadObjectList();
	
	if (count($rows)>0) {
	    echo '<script>';
    	foreach ($rows AS $row) {	
    		echo "_zm(".$row->Id.");\n";
    	}
    	echo '</script>';
	}
}
		$debug = ob_get_clean();
		
		ob_start();
		?>
		
<script>
    _mod=true;
    _pid="";
    _old_html = false;
    _cbp=true;
    _theme_url="";
    _theme_cached=true;
    _authpath="";
    var _pl_data = {};
    var _isk = {};
    var _risv = false;
    _risv = true;
    var _max_strategies={};
</script>
	
		
		<?php	
		
		$debug1 = ob_get_clean();	

		$body = JResponse::getBody();
		$body = str_replace('</body>', $debug.'</body>', $body);			
		if ('modules' != $controller) {		    

		    $body = str_replace('<body>','<body><script>create_smartmenu();</script>', $body);
		    $number = preg_match_all("|<body (.*)>|U", $body, $temp);
		    
		    for ($i = 0; $i<count($temp); $i++) {
		      $attr = ''; 
              if (isset($temp[$i][0])) $attr = $temp[$i][0];
		      $body = str_replace('<body '.$attr.'>','<body '.$attr.'><script>create_smartmenu();</script>', $body); 
		         
		    }

    		$body = str_replace('</head>', $debug1.'</head>', $body);
		}
		
		JResponse::setBody($body);
	}
	}
}