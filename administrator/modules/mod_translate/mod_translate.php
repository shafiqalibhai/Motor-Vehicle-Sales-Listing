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
 * $Id: mod_translate.php 1251 2009-01-07 06:29:53Z apostolov $
 * @package joomfish
 * @subpackage mod_translate
 *
*/

// ensure this file is being included by a parent file
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

include_once( JPATH_SITE .DS. 'components' .DS. 'com_joomfish' .DS. 'helpers' .DS. 'defines.php' );
JLoader::register('JoomfishManager', JOOMFISH_ADMINPATH .DS. 'classes' .DS. 'JoomfishManager.class.php' );
JLoader::register('JoomFishVersion', JOOMFISH_ADMINPATH .DS. 'version.php' );

JHTML::_('behavior.modal');

$linkType = $params->get("linktype","newwindow");

$value = array();
$value[]="com_content#content#cid#task#!edit";
$value[]="com_frontpage#content#cid#task#!edit";
$value[]="com_sections#sections#cid#task#!edit";
$value[]="com_categories#categories#cid#task#!edit";
$value[]="com_contact#contact_details#cid#!edit";
$value[]="com_menus#menu#cid#task#!edit";
$value[]="com_modules#modules#cid#task#!edit#client#!1";
$value[]="com_newsfeeds#newsfeeds#cid#task#!edit";
$value[]="com_poll#polls#cid#task#!edit";

$components = $params->get("components",$value);
$mapping=null;
foreach ($components as $component){
	$map = explode("#",$component);
	if (count($map)>=3 && trim($map[0])==$option){
		if (count($map)>3 && (count($map)-3)%2==0){
			$matched=true;
			for ($p=0;$p<(count($map)-3)/2;$p++){
				$testParam = JRequest::getVar( trim($map[3+$p*2]), '');
				if ((strpos(trim($map[4+$p*2]),"!")!==false && strpos(trim($map[4+$p*2]),"!")==0)){
					if ($testParam == substr(trim($map[4+$p*2]),1)){
						$matched=false;
						break;
					}
				}
				else {
					if ($testParam != trim($map[4+$p*2])){
						$matched=false;
						break;
					}
				}
			}
			if ($matched) {
				$mapping=$map;
				break;
			}
		}
		else {
			$mapping=$map;
			break;
		}
	}
}
// Add the standard style to the site
JHTML::stylesheet("mod_translate.css","administrator/modules/mod_translate/");
$joomFishManager = & JoomFishManager::getInstance();// JoomFishManager(JPATH_ADMINISTRATOR."/components/com_joomfish");

if ($mapping!=null){

	//Global definitions
	if( !defined('DS') ) {
		define( 'DS', DIRECTORY_SEPARATOR );
	}

	if( !defined('JOOMFISH_PATH') ) {
		define( 'JOOMFISH_PATH', JPATH_SITE .'components'.DS.'com_joomfish' );
		define( 'JOOMFISH_ADMINPATH', JPATH_ADMINISTRATOR .DS.'components'.DS.'com_joomfish' );
		define( 'JOOMFISH_LIBPATH', JOOMFISH_ADMINPATH .DS. 'libraries' );
		define( 'JOOMFISH_LANGPATH', JOOMFISH_PATH .DS. 'language' );
		define( 'JOOMFISH_URL', '/components/com_joomfish');
	}

	//	require_once( JOOMFISH_LIBPATH .DS. 'joomla' .DS. 'language.php' );
	//	require_once( JOOMFISH_LIBPATH .DS. 'joomla' .DS. 'registry.php' );

	$lang = JFactory::getLanguage();
	$lang->load('com_joomfish');

	$langActive = JoomFishManager::getLanguages( true );
	$langOptions[] = JHTML::_('select.option', -1, JText::_("SELECT LANGUAGE") );

	if ( count($langActive)>0 ) {
		foreach( $langActive as $language )
		{
			$langOptions[] = JHTML::_('select.option', $language->id, $language->name );
		}
	}
	$langlist = JHTML::_('select.genericlist', $langOptions, 'select_language_id', 'id="select_language_id" class="inputbox"  size="1" onChange="translateItem();"', 'value', 'text', -1);//$langActive[0]->id );
	// I also need to trap component specific actions e.g. pony gallery uses
?>
<span class='modtranslate'>
<script language="JavaScript" type="text/javascript">
function translateItem(){
	var langCode=document.getElementById('select_language_id').value;
	var option="<?php echo trim($mapping[1]);?>";

	if( langCode == -1 ) return;

	if (document.adminForm.boxchecked.value==0) {
		alert("<?php echo JText::sprintf( 'Please make a selection from the list to', JText::_("translate") ); ?>")
		return
		<?php
		$setlang="&select_language_id=\"+langCode+\"";
		global $mosConfig_live_site;
		$targetURL = JURI::root()."administrator/index2.php?option=com_joomfish&task=translate.edit&direct=1&catid=\"+option+\"".$setlang;
		?>
		SqueezeBox.initialize({});
		SqueezeBox.setOptions(SqueezeBox.presets,{'handler': 'iframe','size': {'x': 1000, 'y': 600},'closeWithOverlay': 0});
		SqueezeBox.url = "<?php echo $targetURL;?>";
		
		SqueezeBox.setContent('iframe', SqueezeBox.url );
		return;// SqueezeBox.call(SqueezeBox, true);
	}
	if (document.adminForm.boxchecked.value!=1) {
		alert( "<?php echo JText::_("You must select exactly one item to translate");?>");
		return;
	}
	if (langCode==-1){
		alert( "<?php echo JText::_("You must select a language");?>");
		return;
	}
	// not all components use "cid" e.g. ponygallery uses act=pictures or act=showcatg
	var cid = "<?php echo trim($mapping[2]);?>[]";
	var checkboxes = document.getElementsByName(cid);
	for (var i=0;i<checkboxes.length;i++){
		if (checkboxes[i].checked){
			//alert("you want to edit item "+(i+1)+" content item id = "+checkboxes[i].value);
			// second part is language id 1=Cymraeg,5=German etc!
			<?php
			global $mosConfig_live_site;
			$targetURL = JURI::root()."administrator/index2.php?task=translate.edit&boxchecked=1&direct=1&catid=\"+option+\"&cid[]=0|\"+checkboxes[i].value+\"|\"+langCode+\"&option=com_joomfish";
			?>
			SqueezeBox.initialize({});
			SqueezeBox.setOptions(SqueezeBox.presets,{'handler': 'iframe','size': {'x': 1000, 'y': 600},'closeWithOverlay': 0});
			SqueezeBox.url = "<?php echo $targetURL;?>";
		
			SqueezeBox.setContent('iframe', SqueezeBox.url );
			return;// SqueezeBox.call(SqueezeBox, true);
		}
	}
	alert("There was a problem");
}
</script>
<a href="javascript:translateItem()" title="<?php echo JText::_('translate this item'); ?>"><?php echo JText::_('translate to'); ?></a>:&nbsp;
<?php echo $langlist; ?>
</span>
<?php
}
else {
?>
<span class='modtranslate'>
<?php
$params = JComponentHelper::getParams('com_languages');
$language = $joomFishManager->getLanguageByCode($params->get("site", 'en-GB'));
if(isset($language) && $language) {
	echo JText::_('Default language') .': ';
	$langImg = '/components/com_joomfish/images/flags/' .$language->getLanguageCode() .".gif";
	if( isset($language->image) && $language->image!="" ) {
		$langImg = '/images/' .$language->image;
	}
	$outString = $language->name;
	if( file_exists( JPATH_SITE . $langImg ) ) {
		$outString = '<img src="' .JURI::root(true) . $langImg. '" alt="' .$language->name. '" title="' .$language->name. '" />';
	}
	echo $outString;
}
?>
</span>
<?php
}
?>
