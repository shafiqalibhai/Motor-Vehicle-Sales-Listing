<?php 
/* ************************************************ 
* The Flash Mod 
* Version 3.0.2
* Copyright (C) 2008 by Michael Carico - All rights reserved
* Written by Michael Carico
* Released under GNU/GPL License - http://www.gnu.org/copyleft/gpl.htm
* Website http://www.kabam.net
************************************************ */
# Don't allow direct acces to the file
defined('_JEXEC') or die('Restricted access');

#--------------------------------------
# Functions 
#--------------------------------------
if (!defined( '_FMinlineCode' )) {
  /** ensure that functions are declared only once */
  define( '_FMinlineCode', 1 );

  function FMinlineCode($fm_path, $fm_source, $fm_width, $fm_height, $fm_version, $fm_quality, $fm_wmode, $fm_loop, $fm_name) {

    echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"';
    echo ' codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version='.$fm_version.'"'; 
    echo ' width="'.$fm_width.'"'; 
    echo ' height="'.$fm_height.'"';
    if ($fm_name <> '') echo ' id="'.$fm_name.'\"';
    echo '>';
    echo ' <param name="movie" value="'.$fm_path.$fm_source.'"/>';
    echo ' <param name="quality" value="'.$fm_quality.'" />';
    if ($fm_wmode <> 'window') echo ' <param name="wmode" value="'.$fm_wmode.'" />';
    if ($fm_loop == 'no') echo ' <param name="loop" value="false" />';
    if ($fm_embed != 'no') {
      echo '<embed src="'.$fm_path.$fm_source.'"'; 
      echo ' quality="'.$fm_quality.'"';
      echo ' pluginspage="http://www.macromedia.com/go/getflashplayer"'; 
      echo ' type="application/x-shockwave-flash"';
      echo ' width="'.$fm_width.'"'; 
      echo ' height="'.$fm_height.'"';
      if ($fm_wmode <> 'window') echo ' wmode="'.$fm_wmode.'"';
      if ($fm_loop == 'no') echo ' loop="false"';
      if ($fm_name <> '') echo ' name="'.$fm_name.'"';
      echo '></embed>';
    }	  
    echo '</object>';
  } // end FMinlineCode

} // end check functions defined 
#--------------------------------------

#--------------------------------------
# Main Body 
#--------------------------------------
# Ensure access to core functions
global $mainframe;

# Paramaeters 
$fm_path     = $params->def('fm_path','images/flash/');
$fm_source   = $params->def('fm_source','');
$fm_width    = $params->def('fm_width','');
$fm_height   = $params->def('fm_height','');
$fm_version  = $params->def('fm_version','6.0.0.0');
$fm_quality  = $params->def('fm_quality','high');
$fm_wmode    = $params->def('fm_wmode','window');
$fm_loop     = $params->def('fm_loop','yes');
$fm_name     = $params->def('fm_name','');
$fm_usejs    = $params->def('fm_usejs','yes');
$fm_embed    = $params->def('fm_embed','');
$fm_noscript = $params->def('fm_noscript','');
$fm_noflash  = $params->def('fm_noflash','');

$fm_noflash = str_replace("\r\n",'',$fm_noflash);
$fm_noflash = str_replace("\n",'',$fm_noflash);


# Display SWF
  if ($fm_usejs == 'yes') {
    if (!defined( '_FMjsInclude' )) {
      define( '_FMjsInclude', 1 );
	  $headtag = '<script language="JavaScript" type="text/javascript" src="modules/mod_flashmod/mod_flashmod.js"></script>'."\n";
      $mainframe->addCustomHeadTag($headtag);	  
    }	 
?>
    <script language="JavaScript" type="text/javascript">
      <!-- 
      var MM_contentVersion = 6;
      var plugin = (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]) ? navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
      if ( plugin ) {
        var words = navigator.plugins["Shockwave Flash"].description.split(" ");
        for (var i = 0; i < words.length; ++i) {
          if (isNaN(parseInt(words[i])))
          continue;
          var MM_PluginVersion = words[i]; 
        }
        var MM_FlashCanPlay = MM_PluginVersion >= MM_contentVersion;
      } else if (navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 && (navigator.appVersion.indexOf("Win") != -1)) {
        document.write('<SCR' + 'IPT LANGUAGE=VBScript\> \n'); //FS hide this from IE4.5 Mac by splitting the tag
        document.write('on error resume next \n');
        document.write('MM_FlashCanPlay = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & MM_contentVersion)))\n');
        document.write('</SCR' + 'IPT\> \n');
      }
      if ( MM_FlashCanPlay ) {
        <?php
        echo 'AC_FL_RunContent(';
        echo "'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=".$fm_version."'";
        echo ",'width','".$fm_width."'"; 
        echo ",'height','".$fm_height."'";
        if ($fm_name <> '') echo ",'id','".$fm_name."'";
        echo ",'src','".$fm_path.$fm_source."'";
        echo ",'quality','".$fm_quality."'";
        if ($fm_wmode <> 'window') echo ",'wmode','".$fm_wmode."'";
        if ($fm_loop == 'no') echo ",'loop','false'";
        echo ",'pluginspage','http://www.macromedia.com/go/getflashplayer'";	
        echo ",'movie','".$fm_path.$fm_source."'";
        echo ");";
        ?>
      } else {
        document.write('<?php echo $fm_noflash; ?>');
      }
    //-->
    </script>
    <?php 	 
    echo '<noscript>';
    if ($fm_noscript == 'noflash') {
      echo $fm_noflash;
    } else {
	  FMinlineCode($fm_path, $fm_source, $fm_width, $fm_height, $fm_version, $fm_quality, $fm_wmode, $fm_loop, $fm_name);
    }	  
    echo '</noscript>';
  } else {
    FMinlineCode($fm_path, $fm_source, $fm_width, $fm_height, $fm_version, $fm_quality, $fm_wmode, $fm_loop, $fm_name);
  }
?>