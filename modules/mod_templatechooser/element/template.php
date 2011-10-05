<?php

class JElementTemplate extends JElement {

  var   $_name = 'Template';

  function fetchElement($name, $value, &$node, $control_name)
  {
    global $tc_reset;  
    $template_path = "../templates";
    $templatefolder = @dir( $template_path );
    $darray = array();

    if ($templatefolder) {
        while ($templatefile = $templatefolder->read()) {
                if ($templatefile != "." && $templatefile != ".."&& $templatefile != "_system"&& $templatefile != "system" && $templatefile != ".svn" && $templatefile != "css" && is_dir( "$template_path/$templatefile" )  ) {
                     $templatename = $templatefile;
                     $darray[] = $templatename;
                }
        }
        $templatefolder->close();
    }

    sort( $darray );

    $option[0] = JHTML::_('select.option',0, "Hide");
    $option[1] = JHTML::_('select.option',1, "Show");


    $i=0;
    $radiolist= "<div width=\"100%\">";
   
    $uri = &JURI::getInstance();
    $paramarray = $uri->getQuery(true);
    $reset = 0;
    if (isset($paramarray['tc_reset']))
      $reset = $paramarray['tc_reset'];

    while (!empty($darray[$i])) {
      $radiolist .= "<div style=\"width:40%; text-align:right; float:left;\">";
      if (($this->_parent->get($darray[$i].'_name') != "")&&($reset!=1))
        $newname = $this->_parent->get($darray[$i].'_name');
      else
        $newname = $darray[$i];
      $radiolist .= "<input type=\"text\" name=\"".$control_name."[".$darray[$i]."_name]\" id=\"".$darray[$i]."_name\" value=\"".$newname."\">";
      $radiolist .= "</div><div style=\"width:59%; text-align:left; float:left;\">";
      if ($this->_parent->get($darray[$i]) != "")
        $newvalue = $this->_parent->get($darray[$i]);
      else
        $newvalue = $value;
	
      $radiolist .= JHTML::_('select.radiolist',  $option, ''.$control_name.'['.$darray[$i].']', '', 'value', 'text', $newvalue, $control_name.$darray[$i] );
      $radiolist .="</div>";
      $i++;
    }
    $uri = &JURI::getInstance();
    $url = $uri->_uri;
    $url .= "&tc_reset=1";
    $radiolist .= "<a href=\"".$url."\">Reset template names</a>";
    $radiolist .= "</div>";
    return $radiolist;
  }
}
?>