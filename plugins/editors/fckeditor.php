<?php
/**
 * @version		$Id: fckeditor.php 1154 18-1-2008 andrew
 * @package		JoomlaFCK
 * @copyright	Copyright (C) 2006 - 2008 WebXSolution Ltd. All rights reserved.
 * @license		Creative Commons Licence <http://www.joomlafckeditor.com/index.php?option=com_content&view=article&id=5&Itemid=2>
 * Ths application has been written by WebxSolution Ltd.  You may not copy or distribute JoomlaFCK without written consent
 * from WebxSolution Ltd.
 */

// Do not allow direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.event.plugin');

/**
 * fckeditor Lite for Joomla! WYSIWYG Editor Plugin
 *
 * @author WebxSolution Ltd <andrew@webxsolution.com>
 * @package Editors
 * @since 1.5
 */
class plgEditorFckeditor extends JPlugin {

	/**
	 * Constructor
	 *
	 * For php4 compatability we must not use the __constructor as a constructor for plugins
	 * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
	 * This causes problems with cross-referencing necessary for the observer design pattern.
	 *
	 * @param 	object $subject The object to observe
	 * @param 	array  $config  An array that holds the plugin configuration
	 * @since 1.5
	 */
	function plgEditorFckeditor(& $subject, $config) {
		parent::__construct($subject, $config);
	}

	/**
	 * Method to handle the onInitEditor event.
	 *  - Initializes the fckeditor Lite WYSIWYG Editor
	 *
	 * @access public
	 * @return string JavaScript Initialization string
	 * @since 1.5
	 */
	function onInit()
	{
  		return '<script type="text/javascript" src="'.JURI::root().'plugins/editors/fckeditor/fckeditor.js"></script>';
			
	}

	/**
	 * fckeditor Lite WYSIWYG Editor - get the editor content
	 *
	 * @param string 	The name of the editor
	 */
	function onGetContent( $editor ) {
			
		return " FCKeditorAPI.GetInstance('$editor').GetHTML(); ";
	}

	/**
	 * fckeditor Lite WYSIWYG Editor - set the editor content
	 *
	 * @param string 	The name of the editor
	 */
	function onSetContent( $editor, $html ) {
		return " oFCKeditor.InsertHtml = '" .  htmlentities($html) . "';alert('".$html."');";
	}

	/**
	 * fckeditor Lite WYSIWYG Editor - copy editor content to form field
	 *
	 * @param string 	The name of the editor
	 */
	function onSave( $editor ) { /* We do not need to test for anything */	}

	/**
	 * fckeditor Lite WYSIWYG Editor - display the editor
	 *
	 * @param string The name of the editor area
	 * @param string The content of the field
	 * @param string The name of the form field
	 * @param string The width of the editor area
	 * @param string The height of the editor area
	 * @param int The number of columns for the editor area
	 * @param int The number of rows for the editor area
	 * @param mixed Can be boolean or array.
	 */
	function onDisplay( $name, $content, $width, $height, $col, $row, $buttons = true )
	{
		// Load modal popup behavior
		JHTML::_('behavior.modal', 'a.modal-button');
		
		// Only add "px" to width and height if they are not given as a percentage
		if (is_numeric( $width )) {
			$width .= 'px';
		}
		if (is_numeric( $height )) {
			$height .= 'px';
		}

		jimport('joomla.environment.browser');
		$instance	=& JBrowser::getInstance();
		$language	=& JFactory::getLanguage();
		$db			=& JFactory::getDBO();
		
		

		if ($language->isRTL()) {
			$direction = 'rtl';
		} else {
			$direction = 'ltr';
		}
		
		/*
		 * Lets get the default template for the site application
		 */
		$query = 'SELECT template'
			. ' FROM #__templates_menu'
			. ' WHERE client_id = 0'
			. ' AND menuid = 0'
			;
		$db->setQuery( $query );
		$template = $db->loadResult();
		
		
		
		/* Need to check to see  seesion recordd already created */
			
		$ip = md5($_SERVER['REMOTE_ADDR']);
		$query ='select session_id from #__session where session_id =\'' .$ip .'\''; 
		$db->setQuery( $query);
		$ip_recorded = $db->loadResult();
		
		
		if(!isset($ip_recorded)) //lets  record IP address
		{
		    
		   	$query = 'insert into #__session(time,session_id,gid,client_id,data) values(\'' . (time() + 7200) . '\',\'' . $ip  . '\',0,0,\''
			. session_id() . '\')';
			$db->Execute( $query );
		}
		
		else // update time and  user session_id 
		{
		   	$query = 'update #__session set time = \'' . (time() + 7200) . '\',data = \'' . session_id() . '\' ' 
			.'where session_id =\'' .$ip .'\''; 
			$db->Execute( $query );  
	                     
		}
		
		/* Load the FCK's Parameters */
		$toolbar 			=	$this->params->def( 'toolbar', 'Advanced' );
		$toolbar_ft 		=	$this->params->def( 'toolbar_ft', 'Advanced' );
		$skin				= 	$this->params->def( 'skin', 'office2003' );
		$imagePath			=	$this->params->def( 'imagePath', '/images/stories/' );
		$text_direction		=	$this->params->def( 'text_direction', 'ltr' );
		$wwidth				=   $this->params->def( 'wwidth', '100%' );
		$hheight			= 	$this->params->def( 'hheight', 480 );
		$lang_mode			= 	$this->params->def( 'lang_mode', 0 );
		$lang				= 	$this->params->def( 'lang_code', 'en' );
		$entermode 			= $this->params->def( 'entermode', 0 );
		$shiftentermode 	= $this->params->def( 'shiftentermode', 1 );
		$htmlentities 		= $this->params->def( 'htmlentities', 0 );
		$includelatinentities = $this->params->def( 'includelatinentities', 0 );
		$includegreekentities = $this->params->def( 'includegreekentities', 0 );
		$numericentities 	= $this->params->def( 'numericentities', 0 );
		$bgcolor 			= $this->params->def('bgcolor','#FFFFFF');
		$showerrors 		= $this->params->def( 'showerrors', 1 );
		// initialise $error varable
		$errors = '';
			
		//set default view for toolabar
		$toolbar = $toolbar == 'Default' ? 'Advanced' : $toolbar;
		$toolbar_ft = $toolbar_ft == 'Default' ? 'Advanced' : $toolbar_ft;
		
		
		//set flag to see if Pspell should be enabled
		$enablePspell = function_exists("pspell_check")  ? 1 : 0;
	
		$hasRoot = 0;

    	$path_root = '../';

   		if(!strpos(JPATH_BASE,'administrator'))
		{
		  	//set toolbar to compact mode
			$toolbar = $toolbar_ft;
			
			$path_root = '';
		}

		/* Check on the users enteries to ensure that they are correct */
		$lastCharacter = substr( $imagePath, (strlen( $imagePath ) - 1), strlen($imagePath) );
		if( $lastCharacter != '/' && $lastCharacter != '\\' ){
			$imagePath .= '/';
		}//end if
		/* Check on the users enteries to ensure that they are correct */
		$firstCharacter = substr( $imagePath, 0, 1 );
		if( $firstCharacter != '/' && $firstCharacter != '\\' ){
			$imagePath = '/' . $imagePath;
		}//end if	
		/* Check to see if the path exists. */
		

	
				
		// If language mode set 
		

	    // set default Joomla language setting
		 switch ($lang_mode)
		 {
			 case 0:
				 $AutoDetectLanguage = 	0; // User selectiom
				 break;
			 case 1:
			 	$AutoDetectLanguage = 	0; // Joomla Default
				$lang = substr( $language->getTag(), 0, strpos( $language->getTag(), '-' ) ); //access joomlas global configuation and get the language setting from there
				break;
			 case 2:
			 	$AutoDetectLanguage = 	1; // Browser default
 				break; 
		 }
		 
		// Define Enter & Shift Enter Mode
		 $enterbehavior = array();
		 $enterbehavior[0] = 'br';
		 $enterbehavior[1] = 'p';
		 $enterbehavior[2] = 'div';

		// Define Entities
		$htmlentities	= $htmlentities ? 'true' : 'false';
		$includelatinentities	= $includelatinentities ? 'true' : 'false';
		$includegreekentities	= $includegreekentities ? 'true' : 'false';
		$numericentities	= $numericentities ? 'true' : 'false';


     
		$BaseAddCSSPath = '';
		$style_css = '';
        $stylesheet_name = '';
		
		$sitePath = preg_replace('/\/$/','',JURI::root());
	
	  	
		 if(!$errors)	
			$content_css = $this->_getTemplateCss($template,$path_root,$BaseAddCSSPath,$style_css,$stylesheet_name,$errors);
		
      /* Generate the Output */
		$html = '
		<textarea name="'.$name.'" id="'.$name.'" cols="75" rows="20" style="width:100%; height:350px;">' .$content.   '</textarea>';
		
		$doc = & JFactory::getDocument();
		$doc->addScriptDeclaration(
		    'function DisplayEditor' . $name . '() {
			var oFCKeditor = new FCKeditor("'.$name.'");
			oFCKeditor.BasePath = "'.JURI::root() .'plugins/editors/fckeditor/" ;
			oFCKeditor.Config["SitePath"] =  "'. $sitePath.'";
			oFCKeditor.Config["CustomConfigurationsPath"] = "'. $sitePath . '/plugins/editors/fckconfigjoomla.js";
			oFCKeditor.ToolbarSet = "'.$toolbar.'" ;
      		oFCKeditor.Config["EnterMode"] = "'.$enterbehavior[$entermode].'";
      		oFCKeditor.Config["ShiftEnterMode"] = "'.$enterbehavior[$shiftentermode].'";
      		oFCKeditor.Config["BaseAddCSSPath"] = "'. $BaseAddCSSPath.'";
			oFCKeditor.Config["EditorAreaCSS"] = "'.  $content_css .'";
			oFCKeditor.Config["ContentLangDirection"] = "'.$direction.'" ;
			oFCKeditor.Config["AutoDetectLanguage"]  ="'. $AutoDetectLanguage .'";
			oFCKeditor.Config["DefaultLanguage"] = "'.$lang.'" ;
			oFCKeditor.Config["ProcessHTMLEntities"] = '.$htmlentities.' ;
			oFCKeditor.Config["IncludeLatinEntities"] = '.$includelatinentities.' ;
			oFCKeditor.Config["IncludeGreekEntities"] = '.$includegreekentities.' ;
			oFCKeditor.Config["ProcessNumericEntities"] = '.$numericentities.' ;
			oFCKeditor.Config["SkinPath"] = oFCKeditor.BasePath + "editor/skins/" + "'.$skin.'" + "/" ;
			oFCKeditor.Config["StylesXmlPath"]= "../'.$style_css.'";
			oFCKeditor.Config["AddStylesheets"] = "'.$stylesheet_name.'";
			oFCKeditor.Config["BackgroundColor"] = "'.$bgcolor.'";	
			oFCKeditor.Config["Pspell"] = "'.$enablePspell.'";	
			oFCKeditor.Width = "'.$wwidth.'" ;
		/*	oFCKeditor.Style_css ="'.$style_css.'" ; */
			oFCKeditor.Height = "'.$hheight.'" ;
			function ReplaceTextHeader()
			{
				oFCKeditor.ReplaceTextarea();
			}
				
			function RenderEditor() 
			{
			 
			  if(navigator.userAgent.indexOf("MSIE") >= 0)
			  {
			  	window.addEvent(\'domready\',ReplaceTextHeader);
			  }
			  else
			  {
			  	 ReplaceTextHeader();
			  }	
			}
			
			/* oFCKeditor.ReplaceTextarea();*/
			RenderEditor();}');
		  
		
  		$html .= '<script type="text/javascript">DisplayEditor'. $name . '()</script>';
		
		/* Add Joomla's Buttons */
		$html .= $this->_displayButtons($name, $buttons);

		
		$my = JFactory::getUser();
		if( $showerrors && ( $my->usertype == 'Super Administrator' || $my->usertype == 'Administrator' ) ){
			//Version Checker
			if( function_exists( "curl_init" ) ){
				$ch = curl_init();	curl_setopt( $ch, CURLOPT_URL, 'http://www.joomlafckeditor.com/jversion.txt' );	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
				$version = curl_exec($ch); curl_close( $ch ); if( $version != '2.6.1' && $version ){ $errors .= 'Please beaware there is a newer version of the JoomlaFCK Editor which can be downloaded from <a href="http://www.joomlafckeditor.com" target="_blank">http://www.joomlafckeditor.com</a>.<br/>'; }//end if
			}//end if
			
			if( !is_dir( JPATH_SITE . $imagePath ) && $my->gid > $gid ){
				$errors .= '<span style="color: red;">Warning: ' . JPATH_SITE . $imagePath . ' does not appear to be a valid directory!</span><br/>';
			}//end if
			
			if( $errors !== "" ){
				$adminMessage =  '<span style="color:blue">Please note the above message will only displayed to Administrators and above and cam be turned off in the Plugins Advance settings.</span>';			
				$html = $errors . $adminMessage . $html;
			}
		}//end if

		return $html;
	}
	
function xml_writer($txt_filename = "" ,$xml_filename = "")
 {
 	
  
  global $main, $elem;  	
	
	$file_exist = (is_file($xml_filename)); 
		
	
	if(!$file_exist  ||  ($file_exist  &&  floor((time() - filemtime($txt_filename))/60)  <= 5)) //template changed within the last 5 minutes
	{
	
		$xml_str="<?xml version=\"1.0\" encoding=\"utf-8\" ?>
					<Styles>";
			
			
		/* echo '<span style="color: green;">Writing: ' . $txt_filename . ' to: '. $xml_filename .'</span><br/>'; */
		/* When was the files last modified? */
		$xml_str="<?xml version=\"1.0\" encoding=\"utf-8\" ?>
					<Styles>";
					
					
		$oldumask = umask(0) ;
		@chmod( $txt_filename, 0666);
		$f=file($txt_filename); 
		umask( $oldumask ) ;					
			
		$main=array();
		$elem=array();
		
		$this->extract_css_elements($f,dirname($txt_filename));
		
		
		if(count($main))
		{
			foreach($main as $k=>$val)
			{
				if($val !== "offline" ){
					$xml_str.='<Style name="'.$val.'" element="'.$elem[$k].'">
									<Attribute name="class" value="'.$val.'" />
								</Style>';	
					$xml_str.="\n";
				}//end if
			}//end for loop
		}//end count
	
		$xml_str.="\n"."</Styles>"; 
		$fp=fopen($xml_filename,"w");
		fwrite($fp,$xml_str);
		fclose($fp);
	}
 }//end function
 
 	
	function extract_css_elements($f,$dirname = '')
	{
		
	
	   global $main, $elem,$dir; 
	   
	   $dir = $dirname;
	  
		
		for($i=0;$i<count($f);$i++)
		{
			$mm= trim($f[$i]);
			
		  
			preg_replace_callback('/@import\s*(?:url\()?["\']([^"\')]+)["\']\)?;/i',  create_function(
            '$matches', 
			'global $dir;
			 $oldumask = umask(0);
		     @chmod( $matches[1], 0666);
		     umask( $oldumask );
			 $file_array = file($dir ."/" .$matches[1]);
			 extract_css_elements($file_array,$dir);'
			),$mm);
			
			
			//for dot class
				if(preg_match("/^\./", $mm,$tt))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],1);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"p");
						}
					}
				}//end dot
				//for ids
				elseif(preg_match("/^#/", $mm,$tt))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],1);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"p");
						}
					}
				}//end ids
				//for div class
				elseif(preg_match("/^div(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],4);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"div");
						}
					}
				}//end div
				//for img class
				elseif(preg_match("/^img(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],4);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"img");
						}
					}
				}//end img
				elseif(preg_match("/^table(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],6);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"table");
						}
					}
				}//end table
				elseif(preg_match("/^tr(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],3);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"tr");
						}
					}
				}//end table row
				elseif(preg_match("/^td(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],3);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"td");
						}
					}
				}//end table cell
				elseif(preg_match("/^input(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],6);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"input");
						}
					}
				}//end input
				elseif(preg_match("/^textarea(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],9);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"textarea");
						}
					}
				}//end textarea
				elseif(preg_match("/^hr(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],3);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"hr");
						}
					}
				}//end horizontal rule
				//for span class
				elseif(preg_match("/^span(\.|#)/", $mm))
				{
				$x=explode("{",$mm);
				$xx=trim($x[0]);
				$pp=explode(",",$xx);
				foreach($pp as $val)
					{
					$ll=explode(" ",$val);
					$nn=substr($ll[0],5);
					if(!in_array($nn,$main) && $nn!="")
						{
						array_push($main,$nn);
						array_push($elem,"span");
						}
					}
				}//end img
				
				
				
	
		}
		
	
	}//end function	
	
	
	function onGetInsertMethod($name)
	{
		$doc = & JFactory::getDocument();
		$url = str_replace('administrator/', '', JURI::base() );
		$js= "function jInsertEditorText( text,editor ) {
				var oEditor = FCKeditorAPI.GetInstance(editor) ;
				text = text.replace( /<img src=\"/, '<img src=\"".$url."' );
				oEditor.InsertHtml( text );
		}";
		$doc->addScriptDeclaration($js);

		return true;
	}

	function _getTemplateCss($template,$path_root,& $BaseAddCSSPath,& $style_css,& $stylesheet_name,& $errors )
	{
	
	    //Get parameter options for template CSS
		$content_css		=	$this->params->def( 'content_css', 1 );
		$editor_css			=	$this->params->def( 'editor_css', 0 );
		$content_css_custom	=	$this->params->def( 'content_css_custom', '' );
		$add_stylesheet_path = $this->params->def('add_stylesheet_path','');
    	$add_stylesheet = $this->params->def('add_stylesheet','');
	
	
	
	
	
	 /* Start setting up the XML files */
		$xml_path=  $path_root . "plugins/editors/fckeditor/fckstyles_template.xml";
		$style_css="fckstyles_template.xml";
	
	 
	 // initialise $error varable
	 $errors = '';
	
	
		if ( $content_css || $editor_css ) {
			if($editor_css !== 0 & $content_css == 0){
				if( is_file( JPATH_SITE . '/templates/'.$template.'/css/editor.css' ) ){
					$content_css = 'templates/'.$template.'/css/editor.css';
				} else {
					$errors .= '<span style="color: red;">Warning: ' . JPATH_SITE . '/templates/'.$template.'/css/editor.css' . ' does not appear to be a valid file. Reverting to JoomlaFCK\'s default styles</span><br/>';
				}//end if valid file
			} else {
				if( is_file( JPATH_SITE . '/templates/'.$template.'/css/template.css' ) ){
					$content_css = 'templates/'.$template.'/css/template.css';
					
				} 
			
				else if( is_file( JPATH_SITE . '/templates/'.$template.'/css/template.css.php' ) ){
				
				
				   $content_css = 'templates/'.$template.'/css/JFCKeditor.css.php'; 
				  
				   if(!is_file( JPATH_SITE . '/templates/'.$template.'/css/JFCKeditor.css.php') ||  
				   		filemtime(JPATH_SITE . '/templates/'.$template.'/css/template.css.php') > 
						filemtime(JPATH_SITE . '/templates/'.$template.'/css/JFCKeditor.css.php') ) 
				   {
				           
              
						 $file_content = file_get_contents('../templates/'.$template.'/css/template.css.php');
						  
						 $file_content  =  preg_replace_callback("/(.*?)(@?ob_start\('?\"?ob_gzhandler\"?'?\))(.*)/",
						   create_function(
								'$matches',
								'return ($matches[1]) .\';\';'
								
							),$file_content);
						 
						 
						  $file_content = preg_replace("/(.*define\().*DIRECTORY_SEPARATOR.*(;?)/",'',$file_content);
						 					 
     		   
						 $file_content =
						 
						 '<'. '?' . 'php' . ' function getYooThemeCSS() { ' . '?' . '>' . $file_content . '<'. '?' . 'php' .  ' } ' . '?' . '>';
						  
									  
						$fout = fopen($path_root . $content_css,"w");
						fwrite($fout,$file_content);
						fclose($fout);
					}
					
					include($path_root . $content_css);
					
					$content_css = 'templates/'.$template.'/css/JFCKeditor.css'; 
					
					 
				
					
					ob_start();
					
					
					getYooThemeCSS();
					
								
					$file_content =  ob_get_contents(); 
					
										
					ob_end_clean();
					
									
					$fout = fopen($path_root . $content_css,"w");
					fwrite($fout,$file_content);
					fclose($fout);
				    
					
					
					
				}
				else {
					$errors .= '<span style="color: red;">Warning: ' . JPATH_SITE . '/templates/'.$template.'/css/template.css' . ' or ' . JPATH_SITE . '/templates/'.$template.'/css/template.css.php does not appear to be a valid file. Reverting to JoomlaFCK\'s default styles</span><br/>';
				}//end if valid file
			}//end if  $editor_css !== 0 & $content_css == 0

			/* Is the content_css == 0 or 1 then use FCK's default */
			if( $errors !== "" ){
				$content_css = 'plugins/editors/fckeditor/editor/css/fck_editorarea.css';
			}//end if 
	
			/*write to xml file and read from css asnd store this file under editors*/
			$this->xml_writer($path_root .$content_css, $xml_path );
	
		} else {
			if ( $content_css_custom ) {
               
			              
				$hasRoot = strpos(' ' . strtolower($content_css_custom),strtolower(JPATH_SITE));
				$file_path = ($hasRoot ? '' : JPATH_SITE) .  ($hasRoot || substr($content_css_custom,0,1) == DS  ? '' : DS) .
				$content_css_custom;
           
		 	   
		    if( is_file(  $file_path) ){
					$content_css =  $file_path;
					$content_css = str_replace(strtolower(JPATH_SITE) . DS,'',strtolower($content_css_custom));
				} else {
					$errors .= '<span style="color: red;">Warning: ' .  $file_path . ' does not appear to be a valid file.</span><br/>';
					$content_css = 'plugins/editors/fckeditor/editor/css/fck_editorarea.css';
				}//end if valid file
					
			} else {
	
	     
				$content_css = 'plugins/editors/fckeditor/editor/css/fck_editorarea.css';
	
			}//end if $content_css_custom
			/*write to xml file and read from css asnd store this file under editors*/
		
				$this->xml_writer($path_root .$content_css, $xml_path );
            
			
		}//end if $content_css || $editor_css

    		
		//if additional stylesheets specified
   		$stylesheet_name = ''; 
		
		
		
		if($add_stylesheet_path)
		{
		
		   	$hasRoot = strpos(' ' . strtolower($add_stylesheet_path),strtolower(JPATH_SITE));
			 
			$add_stylesheet_path = str_replace(strtolower(JPATH_SITE) . DS,'',strtolower($add_stylesheet_path));
			
		
		
  		}
		else
		{
		   $add_stylesheet_path = '/templates/' .$template. '/css/';
		}
				
			   
      
		
	    $BaseAddCSSPath = (preg_match('/(^\/|^\\\\)/',$add_stylesheet_path) ? '' : '/') .$add_stylesheet_path   
				.(preg_match('/.(\/$|\\\\$)/',$add_stylesheet_path) ? '' : '/');
        
		
  
        $BaseAddCSSPath = str_replace('\\','/',$BaseAddCSSPath);
		
       
	     //echo $add_stylesheet_path;

  
	   	if($add_stylesheet_path &&  $add_stylesheet)
	   	{
	   
			if (strpos($add_stylesheet,';'))
			{
				$stylesheets =  explode(';',$add_stylesheet);
			}
			else
			{
				$stylesheets[] = $add_stylesheet;
			}
		
		   
			$count = 0;
			
			foreach($stylesheets as $stylesheet)
			{
			
				if(!preg_match('/\.\w{3}$/',$stylesheet))
				{
					$stylesheet .= '.css';
						   
				}
				
			
				 
				$fin =  $path_root .  substr($BaseAddCSSPath,1,strlen($BaseAddCSSPath)) . $stylesheet;
							
				
							
				$file =  JPATH_SITE . (preg_match('/(^\/|^\\\\)/',$add_stylesheet_path) ? '' : DS) .$add_stylesheet_path   
				.(preg_match('/.(\/$|\\\\$)/',$add_stylesheet_path) ? '' : DS) . $stylesheet;
				
				$fout = $path_root . 'plugins/editors/fckeditor/' . str_replace('.css','.xml',$stylesheet);	
			
			
			 
				if( !is_file($file) )
				{
					
						$errors .= '<span style="color: red;">Warning: ' 
						. $file . ' does not appear to be a valid file. So additional styles will not be added</span><br/>';
						array_splice($stylesheets, $count,1);
						
				}
				else
				{ 
					$this->xml_writer($fin,$fout);
				}
		
		       $count ++;
			}
			
			 	$stylesheet_name =  str_replace('.css','',implode(';',$stylesheets));
	   
	   	}
		
		$content_css =   JURI::root() . $content_css; 
	 	$content_css =   str_replace(DS,'/',$content_css); 

		return $content_css;
	}
	
	function _displayButtons($name, $buttons)
	{
		// Load modal popup behavior
		JHTML::_('behavior.modal', 'a.modal-button');

		$args['name'] = $name;
		$args['event'] = 'onGetInsertMethod';

		$return = '';
		$results[] = $this->update($args);
		foreach ($results as $result) {
			if (is_string($result) && trim($result)) {
				$return .= $result;
			}
		}

		if(!empty($buttons))
		{
			$results = $this->_subject->getButtons($name, $buttons);

			/*
			 * This will allow plugins to attach buttons or change the behavior on the fly using AJAX
			 */
			$return .= "\n<div id=\"editor-xtd-buttons\">\n";
			foreach ($results as $button)
			{
				/*
				 * Results should be an object
				 */
				if ( $button->get('name') ) 
				{
					$modal		= ($button->get('modal')) ? 'class="modal-button"' : null;
					$href		= ($button->get('link')) ? 'href="'.$button->get('link').'"' : null;
					$onclick	= ($button->get('onclick')) ? 'onclick="'.$button->get('onclick').'"' : null;
					$return .= "<div class=\"button2-left\"><div class=\"".$button->get('name')."\"><a ".$modal." title=\"".$button->get('text')."\" ".$href." ".$onclick." rel=\"".$button->get('options')."\">".$button->get('text')."</a></div></div>\n";
				}
			}
			$return .= "</div>\n";
		}
		
		return $return;
	}

}
?>