<?php
/**
 * Helper class for Template Chooser module
 * 
 * @package    mod_templatechooser
 * @subpackage Modules
 * @link http://templates.linkster.be/
 * @license		GNU/GPL, see LICENSE.php
 * mod_templatechooseris free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */


class modTemplateChooserHelper
{

  function setTemplate($newTemplate, $keepcookie)
  {
    global $mainframe;


    // Initialize some variables
    $_SESSION['template'] = $newTemplate;    
    // store in cookie if needed
    if ($keepcookie == 1) {        
      setcookie("joomla_template", $newTemplate, time()+ (86400 * 365));
    }
    $uri =& JURI::getInstance();
    $url = $uri->current();
    $url .= '?';
    $paramarray  = $uri->getQuery(true);
    foreach ($paramarray as $paramname => $paramvalue) {
      if ($paramname != 'template') {
        $url .= $paramname;
	$url .= '=';
	$url .= $paramvalue;
	$url .= '&&';
      }	
    }
    $url .= 'template=';
    $url .= $newTemplate;
    $mainframe->redirect($url);
  }

  function getTemplates(&$params) {

    // titlelength can be set in module params
    $titlelength = $params->get( 'title_length', 20 );
    $preview_height = $params->get( 'preview_height', 90 );
    $preview_width = $params->get( 'preview_width', 140 );
    $keep_cookie = $params->get( 'keep_cookie', 0 );

    $show_preview = $params->get( 'show_preview', 0 );

    // Read files from template directory
    $template_path = "templates";
    $templatefolder = @dir( $template_path );
    $darray = array();

    if ($templatefolder) {
	while ($templatefile = $templatefolder->read()) {
		if ($templatefile != "." && $templatefile != ".."&& $templatefile != "_system"&& $templatefile != "system" && $templatefile != ".svn" && $templatefile != "css" && is_dir( "$template_path/$templatefile" )  ) {
		  if ($params->get($templatefile, 1) == 1 ) {
		        $templatefile_new = $params->get($templatefile."_name") ? $params->get($templatefile."_name") : $templatefile;
		        if(strlen($templatefile_new) > $titlelength) {
				$templatename = substr( $templatefile_new, 0, $titlelength-3 );
				$templatename .= "...";
			} else {
				$templatename = $templatefile_new;
			}
		        $darray[] = JHTML::_('select.option', $templatefile, $templatename );
		  }
		}
	}
	$templatefolder->close();
    }
 
    sort( $darray );
    return $darray;
  }
}