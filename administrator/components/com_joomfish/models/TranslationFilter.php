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
 * $Id: TranslationFilter.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage Models
 *
*/
function getTranslationFilters($catid, $contentElement)
{
	if (!$contentElement) return array();
	$filterNames=$contentElement->getAllFilters();
	if (count($filterNames)>0) {
		$filterNames["reset"]="reset";
	}
	$filters=array();
	foreach ($filterNames as $key=>$value){
		$filterType = "translation".ucfirst(strtolower($key))."Filter" ;
		$classFile = JPATH_SITE."/administrator/components/com_joomfish/contentelements/$filterType.php" ;
		if (!class_exists($filterType)){
			if (file_exists($classFile )) include_once($classFile);
			if (!class_exists($filterType)) {
				continue;
			}
		}
		$filters[strtolower($key)] =  new $filterType($contentElement);
	}
	return $filters;
}


class translationFilter
{
	var $filterNullValue;
	var $filterType;
	var $filter_value;
	var $filterField = false;
	var $tableName = "";
	var $filterHTML="";

	// Should we use session data to remember previous selections?
	var $rememberValues = true;

	function translationFilter($contentElement=null){

		global $mainframe;
		if (intval(JRequest::getVar('filter_reset',0))){
			$this->filter_value =  $this->filterNullValue;
		}
		else if ($this->rememberValues){
			// TODO consider making the filter variable name content type specific
			$this->filter_value = $mainframe->getUserStateFromRequest($this->filterType.'_filter_value', $this->filterType.'_filter_value', $this->filterNullValue);
		}
		else {
			$this->filter_value =  JRequest::getVar( $this->filterType.'_filter_value', $this->filterNullValue );
		}
		//echo $this->filterType.'_filter_value = '.$this->filter_value."<br/>";
		$this->tableName = isset($contentElement)?$contentElement->getTableName():"";
	}

	function _createFilter(){
		if (!$this->filterField ) return "";
		$filter="";
		if ($this->filter_value!=$this->filterNullValue){
			$filter = "c.".$this->filterField."=$this->filter_value";
		}
		return $filter;
	}

	function _createfilterHTML(){ return "";}
}

class translationResetFilter extends translationFilter
{
	function translationResetFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="reset";
		$this->filterField = "";
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		return "";
	}

	
	/**
 * Creates javascript session memory reset action
 *
 */
	function _createfilterHTML(){
		$reset["title"]= JText::_('Reset');
		$reset["html"] = "<input type='hidden' name='filter_reset' id='filter_reset' value='0' /><input type='button' value='".JText::_("reset")."' onclick='document.getElementById(\"filter_reset\").value=1;document.adminForm.submit()' />";
		return $reset;

	}

}

class translationFrontpageFilter extends translationFilter
{
	function translationFrontpageFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="frontpage";
		$this->filterField = $contentElement->getFilter("frontpage");
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		if (!$this->filterField) return "";
		$filter="";
		if ($this->filter_value!=$this->filterNullValue){
			$db =& JFactory::getDBO();
			$sql = "SELECT content_id FROM #__content_frontpage order by ordering";
			$db->setQuery($sql);
			$ids = $db->loadResultArray();
			if (is_null($ids)){
				$ids = array();
			}
			$ids[] = -1;
			$idstring = implode(",",$ids);
			$not = "";
			if ($this->filter_value==0){
				$not = " NOT ";
			}
			$filter =   " c.".$this->filterField.$not." IN (".$idstring.") ";
		}
		return $filter;
	}

	
	/**
 * Creates frontpage filter
 *
 * @param unknown_type $filtertype
 * @param unknown_type $contentElement
 * @return unknown
 */
	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";

		$FrontpageOptions=array();
		$FrontpageOptions[] = JHTML::_('select.option', -1, JText::_('Filter any'));
		$FrontpageOptions[] = JHTML::_('select.option', 1, JText::_('Yes'));
		$FrontpageOptions[] = JHTML::_('select.option', 0, JText::_('No'));
		$frontpageList=array();
		$frontpageList["title"]= JText::_('FRONTPAGE FILTER');
		$frontpageList["html"] = JHTML::_('select.genericlist', $FrontpageOptions, 'frontpage_filter_value', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $this->filter_value );

		return $frontpageList;

	}

}

class translationArchiveFilter extends translationFilter
{
	function translationArchiveFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="archive";
		$this->filterField = $contentElement->getFilter("archive");
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		if (!$this->filterField) return "";
		$filter="";
		if ($this->filter_value!=$this->filterNullValue){
			if ($this->filter_value==0){
				$filter =   " c.".$this->filterField." >=0 ";
			}
			else {
				$filter =   " c.".$this->filterField." =-1 ";
			}
		}
		return $filter;
	}

	
	/**
 * Creates frontpage filter
 *
 * @param unknown_type $filtertype
 * @param unknown_type $contentElement
 * @return unknown
 */
	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";

		$FrontpageOptions=array();
		$FrontpageOptions[] = JHTML::_('select.option', -1, JText::_('Filter any'));
		$FrontpageOptions[] = JHTML::_('select.option', 1, JText::_('Yes'));
		$FrontpageOptions[] = JHTML::_('select.option', 0, JText::_('No'));
		$frontpageList=array();
		$frontpageList["title"]= JText::_('ARCHIVE FILTER');
		$frontpageList["html"] = JHTML::_('select.genericlist', $FrontpageOptions, 'archive_filter_value', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $this->filter_value );

		return $frontpageList;

	}

}

class translationCategoryFilter extends translationFilter
{
	var $section_filter_value;
	
	function translationCategoryFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="category";
		$this->filterField = $contentElement->getFilter("category");
		parent::translationFilter($contentElement);
		
		// if currently selected category is not compatible with section then reset
		if (intval(JRequest::getVar('filter_reset',0))){
			$this->section_filter_value =  -1;
		}
		else if ($this->rememberValues){
			global $mainframe;
			$this->section_filter_value = $mainframe->getUserStateFromRequest('section_filter_value', 'section_filter_value', -1);
		}
		else {
			$this->section_filter_value =  JRequest::getVar( "section_filter_value", -1 );
		}

		if ($this->section_filter_value!=-1 and $this->filter_value>=0){
			$cat = & JTable::getInstance('category');
			$cat->load($this->filter_value);
			if ($cat->section != $this->section_filter_value) {
				$this->filter_value=-1;
			}
		}
		if ($this->section_filter_value==0){
			$this->filter_value=0;
		}
		
	}


	/**
 * Creates category filter
 *
 * @param unknown_type $filtertype
 * @param unknown_type $contentElement
 * @return unknown
 */
	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";

		// limit choices to specific section
		$sectionfilter = "";
		if ($this->section_filter_value!=-1){
			$sectionfilter = " AND section=".$db->quote($this->section_filter_value);
		}

		$categoryOptions=array();
		$categoryOptions[-1] = JHTML::_('select.option', '-1',JText::_('ALL CATEGORIES') );
		// if content categories then add "static content" null category
		if ($this->tableName=="content" && $this->section_filter_value<=0){
			$categoryOptions[0] = JHTML::_('select.option' ,'0',JText::_('Uncategorized') );
		}

		
		//	$sql = "SELECT c.id, c.title FROM #__categories as c ORDER BY c.title";
		$sql = "SELECT DISTINCT cat.id, cat.title FROM #__categories as cat, #__".$this->tableName." as c
			WHERE c.".$this->filterField."=cat.id $sectionfilter ORDER BY cat.title";
		$db->setQuery($sql);
		$cats = $db->loadObjectList();
		$catcount=0;
		foreach($cats as $cat){
			$categoryOptions[$cat->id] = JHTML::_('select.option', $cat->id,$cat->title);
			$catcount++;
		}
		$categoryList=array();
		$categoryList["title"]= JText::_('CATEGORY FILTER');
		$categoryList["html"] = JHTML::_('select.genericlist', $categoryOptions, 'category_filter_value', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $this->filter_value );

		return $categoryList;

	}

}

class translationAuthorFilter extends translationFilter
{
	function translationAuthorFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="author";
		$this->filterField = $contentElement->getFilter("author");
		parent::translationFilter($contentElement);
	}


	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";
		$AuthorOptions=array();
		$AuthorOptions[] = JHTML::_('select.option', '-1',JText::_('ALL AUTHORS') );

		//	$sql = "SELECT c.id, c.title FROM #__categories as c ORDER BY c.title";
		$sql = "SELECT DISTINCT auth.id, auth.username FROM #__users as auth, #__".$this->tableName." as c
			WHERE c.".$this->filterField."=auth.id ORDER BY auth.username";
		$db->setQuery($sql);
		$cats = $db->loadObjectList();
		$catcount=0;
		foreach($cats as $cat){
			$AuthorOptions[] = JHTML::_('select.option', $cat->id,$cat->username);
			$catcount++;
		}
		$Authorlist=array();
		$Authorlist["title"]=JText::_('AUTHOR FILTER');
		$Authorlist["html"] = JHTML::_('select.genericlist', $AuthorOptions, 'author_filter_value', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $this->filter_value );

		return $Authorlist;

	}

}


class translationKeywordFilter extends translationFilter
{
	function translationKeywordFilter($contentElement){
		$this->filterNullValue="";
		$this->filterType="keyword";
		$this->filterField = $contentElement->getFilter("keyword");
		parent::translationFilter($contentElement);
	}


	function _createFilter(){
		if (!$this->filterField) return "";
		$filter="";
		if ($this->filter_value!=""){
			$db =& JFactory::getDBO();
			$filter =  "LOWER(c.".$this->filterField." ) LIKE '%".$db->getEscaped( $this->filter_value, true )."%'";
		}
		return $filter;
	}

	/**
 * Creates Keyword filter
 *
 * @param unknown_type $filtertype
 * @param unknown_type $contentElement
 * @return unknown
 */
	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";
		$Keywordlist=array();
		$Keywordlist["title"]= JText::_('KEYWORD FILTER');
		$Keywordlist["html"] = 	'<input type="text" name="keyword_filter_value" value="'.$this->filter_value.'" class="text_area" onChange="document.adminForm.submit();" />';

		return $Keywordlist;

	}

}

class translationModuleFilter  extends translationFilter
{
	function translationModuleFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="module";
		$this->filterField = $contentElement->getFilter("module");
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		$filter = "c.".$this->filterField."<99";
		return $filter;
	}

	function _createfilterHTML(){
		return "";
	}
}

class translationMenutypeFilter  extends translationFilter
{
	function translationMenutypeFilter ($contentElement){
		$this->filterNullValue="-+-+";
		$this->filterType="menutype";
		$this->filterField = $contentElement->getFilter("menutype");
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		if (!$this->filterField ) return "";
		$filter="";
		if ($this->filter_value!=$this->filterNullValue){
			$filter = "c.".$this->filterField."='".$this->filter_value."'";
		}
		return $filter;
	}

	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";
		$MenutypeOptions=array();
		$MenutypeOptions[] = JHTML::_('select.option', $this->filterNullValue, JText::_('ALL MENUS') );

		$sql = "SELECT DISTINCT mt.menutype FROM #__menu as mt";
		$db->setQuery($sql);
		$cats = $db->loadObjectList();
		$catcount=0;
		foreach($cats as $cat){
			$MenutypeOptions[] = JHTML::_('select.option', $cat->menutype,$cat->menutype);
			$catcount++;
		}
		$Menutypelist=array();
		$Menutypelist["title"]= JText::_('MENU FILTER');
		$Menutypelist["html"] = JHTML::_('select.genericlist', $MenutypeOptions, 'menutype_filter_value', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $this->filter_value );

		return $Menutypelist;

	}
}

/**
 * filters translations based on creation/modification date of original
 *
 */
class translationChangedFilter extends translationFilter
{
	function translationChangedFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="lastchanged";
		$this->filterField = $contentElement->getFilter("changed");
		list($this->_createdField,$this->_modifiedField) = explode("|",$this->filterField);
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		if (!$this->filterField) return "";
		$filter="";
		if ($this->filter_value!=$this->filterNullValue && $this->filter_value==1){
			// translations must be created after creation date so no need to check this!
			$filter = "( c.$this->_modifiedField>0 AND jfc.modified < c.$this->_modifiedField)" ;
		}
		else if ($this->filter_value!=$this->filterNullValue){
			$filter = "( ";
			$filter .= "( c.$this->_modifiedField>0 AND jfc.modified >= c.$this->_modifiedField)" ;
			$filter .= " OR ( c.$this->_modifiedField=0 AND jfc.modified >= c.$this->_createdField)" ;
			$filter .= " )";
		}

		return $filter;
	}


	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";
		$ChangedOptions=array();
		$ChangedOptions[] = JHTML::_('select.option', -1,JText::_('Filter both'));
		$ChangedOptions[] = JHTML::_('select.option', 1, JText::_('Original Newer'));
		$ChangedOptions[] = JHTML::_('select.option', 0, JText::_('Translation Newer'));

		$ChangedList=array();
		$ChangedList["title"]= JText::_('Translation Age');
		$ChangedList["html"] = JHTML::_('select.genericlist', $ChangedOptions, $this->filterType.'_filter_value', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $this->filter_value );

		return $ChangedList;
	}
}

/**
 * Look for unpublished translations - i.e. no translation or translation is unpublished
 * Really only makes sense with a specific language selected
 *
 */

class translationTrashFilter extends translationFilter
{
	function translationTrashFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="trash";
		$this->filterField = $contentElement->getFilter("trash");
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		// -1 = archive, -2 = trash
		$filter = "c.".$this->filterField.">=-1";
		return $filter;
	}

	function _createfilterHTML(){
		return "";
	}

}

/**
 * Look for unpublished translations - i.e. no translation or translation is unpublished
 * Really only makes sense with a specific language selected
 *
 */

class translationPublishedFilter extends translationFilter
{
	function translationPublishedFilter ($contentElement){
		$this->filterNullValue=-1;
		$this->filterType="published";
		$this->filterField = $contentElement->getFilter("published");
		parent::translationFilter($contentElement);
	}

	function _createFilter(){
		if (!$this->filterField) return "";
		$filter="";
		if ($this->filter_value!=$this->filterNullValue){
			if ($this->filter_value==1){
				$filter = "jfc.".$this->filterField."=$this->filter_value";
			}
			else if ($this->filter_value==0){
				$filter = " ( jfc.".$this->filterField."=$this->filter_value AND jfc.reference_field IS NOT NULL ) ";
			}
			else if ($this->filter_value==2){
				$filter = " jfc.reference_field IS NULL  ";
			}
			else if ($this->filter_value==3){
				$filter = " jfc.reference_field IS NOT NULL ";
			}
		}

		return $filter;
	}

	function _createfilterHTML(){
		$db =& JFactory::getDBO();

		if (!$this->filterField) return "";

		$PublishedOptions=array();
		$PublishedOptions[] = JHTML::_('select.option', -1, JText::_('Filter any'));
		$PublishedOptions[] = JHTML::_('select.option', 3, JText::_('FILTER AVAILABLE'));
		$PublishedOptions[] = JHTML::_('select.option', 1, JText::_('TITLE_PUBLISHED'));
		$PublishedOptions[] = JHTML::_('select.option', 0, JText::_('TITLE_UNPUBLISHED'));
		$PublishedOptions[] = JHTML::_('select.option', 2, JText::_('FILTER MISSING'));

		$publishedList=array();
		$publishedList["title"]= JText::_('Translation Availability');
		$publishedList["html"] = JHTML::_('select.genericlist', $PublishedOptions, 'published_filter_value', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'value', 'text', $this->filter_value );

		return $publishedList;

	}

}

class TranslateParams
{
	var $origparams;
	var $defaultparams;
	var $transparams;
	var $fields;
	var $fieldname;

	function TranslateParams($original, $translation, $fieldname, $fields=null){
		global $mainframe;
		$this->origparams =  $original;
		$this->transparams = $translation;
		$this->fieldname = $fieldname;
		$this->fields = $fields;
	}

	function showOriginal(){
		echo $this->origparams;
	}

	function showDefault(){
		echo "";
	}

	function editTranslation(){
		$returnval = array( "editor_".$this->fieldname, "refField_".$this->fieldname );
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( "editor_".$this->fieldname,  $this->transparams, "refField_".$this->fieldname, '100%;', '300', '70', '15' ) ;
		echo $this->transparams;
		return $returnval;
	}
}

class TranslateParams_xml extends TranslateParams
{
	function showOriginal(){
		$output = "";
		$fieldname='orig_'.$this->fieldname;
		$output .= $this->origparams->render($fieldname);
		$output .= <<<SCRIPT
		<script language='javascript'>
		function copyParams(srctype, srcfield){
			var orig = document.getElementsByTagName('select');		
			for (var i=0;i<orig.length;i++){
				if (orig[i].name.indexOf(srctype)>=0 && orig[i].name.indexOf("[")>=0){
					// TODO double check the str replacement only replaces one instance!!!
					targetName = orig[i].name.replace(srctype,"refField");					
					target = document.getElementsByName(targetName);
					if (target.length!=1){
						alert(targetName+" problem "+target.length);
					}
					else {
						target[0].selectedIndex = orig[i].selectedIndex;
					}
				}
			}
			var orig = document.getElementsByTagName('input');		
			for (var i=0;i<orig.length;i++){
				if (orig[i].name.indexOf(srctype)>=0 && orig[i].name.indexOf("[")>=0){				
					// treat radio buttons differently 
					if (orig[i].type.toLowerCase()=="radio"){
						//alert( orig[i].id+" "+orig[i].checked);
						targetId = orig[i].id;
						if (targetId){
							targetId = targetId.replace(srctype,"refField");
							target = document.getElementById(targetId);
							if (!target){
								alert("missing target for radio button "+orig[i].name);
							}
							else {
								target.checked = orig[i].checked;
							}
						}
						else {
							alert("missing id for radio button "+orig[i].name);
						}
					}
					else {
						// TODO double check the str replacement only replaces one instance!!!
						targetName = orig[i].name.replace(srctype,"refField");
						target = document.getElementsByName(targetName);
						if (target.length!=1){
							alert(targetName+" problem "+target.length);
						}
						else {
							target[0].value = orig[i].value;
						}
					}
				}
			}		   
			var orig = document.getElementsByTagName('textarea');		
			for (var i=0;i<orig.length;i++){
				if (orig[i].name.indexOf(srctype)>=0 && orig[i].name.indexOf("[")>=0){				
					// TODO double check the str replacement only replaces one instance!!!
					targetName = orig[i].name.replace(srctype,"refField");
					target = document.getElementsByName(targetName);
					if (target.length!=1){
						alert(targetName+" problem "+target.length);
					}
					else {
						target[0].value = orig[i].value;
					}
				}
			}		   
		}
		
		var orig = document.getElementsByTagName('select');		
		for (var i=0;i<orig.length;i++){
			if (orig[i].name.indexOf("$fieldname")>=0){
				orig[i].disabled = true;
			}
		}
		var orig = document.getElementsByTagName('input');		
		for (var i=0;i<orig.length;i++){
			if (orig[i].name.indexOf("$fieldname")>=0){
				orig[i].disabled = true;
			}
		}
		</script>
SCRIPT;
		echo $output;
}

function showDefault(){
	$output = "<span style='display:none'>";
	$output .= $this->defaultparams->render("defaultvalue_".$this->fieldname);
	$output .= "</span>\n";
	echo $output;
}

function editTranslation(){
	echo $this->transparams->render("refField_".$this->fieldname);
	return false;
}
}

class JFMenuParams extends JObject{
	var $params=null;
	function __construct($params){
		$this->params = $params;
	}
	function render($type){
		$params = "";
		if ($type=="refField_"){
			// URL paramaters are not stored in the params field
			$this->_urlparams	= $this->params->getUrlParams();
		}

		$this->_params		= $this->params->getStateParams();
		$this->_sysparams	= $this->params->getSystemParams();
		$this->_advanced	= $this->params->getAdvancedParams();
		$this->_component	= $this->params->getComponentParams();
		$this->_name		= $this->params->getStateName();
		$this->_description	= $this->params->getStateDescription();

		// SLIDERS WON'T WORK :( they don't operate independently
		/*
		// Add slider pane
		$pane =& JPane::getInstance('sliders');
		$params .= $pane->startPane($type."pane");
		*/
		//echo 'urlparams<br/>';
		//echo $this->_urlparams->render('urlparams');

		// TODO replace variable names properly
		if($this->_params && $this->_params->getParams('params')){
			$params .= '<h3>'.JText :: _('Parameters - Basic').'</h3>';
			$params .= $this->_params->render($type."params");
		}
		if($this->_sysparams && $this->_sysparams->getParams('sysparams')){
			$params .= '<h3>'.JText :: _('Parameters - System').'</h3>';
			$params .=  $this->_sysparams->render($type."params");
		}
		if($this->_advanced && $this->_advanced->getParams('advanced')){
			$params .= '<h3>'.JText :: _('Parameters - Advanced').'</h3>';
			$params .=  $this->_advanced->render($type."params");
		}
		if($this->_component && $this->_component->getParams('component')){
			$params .= '<h3>'.JText :: _('Parameters - Component').'</h3>';
			$params .=  $this->_component->render($type."params");
		}

		// special treatment for url parameters because of javascript problems with duplicate "id" in rendered paramts
		if ($type=="refField_"){
			if($this->_urlparams && $this->_urlparams->getParams('urlparams')){
				$params .= '<h3>'.JText :: _('Parameters - URL').'</h3>';
				$params .= $this->_urlparams->render('urlparams');
			}
		}

		return $params;
	}
}

class TranslateParams_menu extends TranslateParams_xml
{
	var $_menutype;
	var $_menuViewItem;
	var $orig_menuModelItem;
	var $trans_menuModelItem;

	function TranslateParams_menu($original, $translation, $fieldname, $fields=null){
		$lang =& JFactory::getLanguage();
		$lang->load("com_menus", JPATH_ADMINISTRATOR);

		$cid =  JRequest::getVar( 'cid', array(0) );
		$oldcid = $cid;
		$translation_id = 0;
		if( strpos($cid[0], '|') >= 0 ) {
			list($translation_id, $contentid, $language_id) = explode('|', $cid[0]);
		}

		JRequest::setVar("cid",array($contentid));
		JRequest::setVar("edit",true);

		$this->orig_menuModelItem = new MenusModelItem();

		/*
		$app	= &JFactory::getApplication();
		$menu	= &$app->getMenu('site');
		if (is_object( $menu ))
		{
		$params	=& $menu->getParams($contentid);
		// Set Default State Data
		$this->orig_menuModelItem->setState( 'parameters.menu', $params );
		}
		*/

		// Get The Original State Data
		$item	=&$this->orig_menuModelItem->getItem();

		// NOW GET THE TRANSLATION - IF AVAILABLE
		$this->trans_menuModelItem = new JFMenusModelItem();
		$item	=&$this->trans_menuModelItem->getItem($translation);

		// NOW GET THE Default- IF AVAILABLE
		$this->default_menuModelItem = new JFDefaultMenusModelItem();
		$item	=&$this->default_menuModelItem->getItem();

		$this->origparams = new JFMenuParams($this->orig_menuModelItem);
		$this->transparams = new JFMenuParams($this->trans_menuModelItem);

		// This is tricky!!
		$this->defaultparams = new JFMenuParams($this->default_menuModelItem);

		// reset old values in REQUEST array
		$cid=$oldcid;
		JRequest::setVar( 'cid',$cid);

	}

	function showOriginal(){
		if ($this->_menutype=="wrapper"){
			?>
			<table width="100%" class="paramlist">
			<tr>
			<td width="40%" align="right" valign="top"><span class="editlinktip"><!-- Tooltip -->
			<span onmouseover="return overlib('Link for Wrapper', CAPTION, 'Wrapper Link', BELOW, RIGHT);" onmouseout="return nd();" >Wrapper Link</span></span></td>

			<td align="left" valign="top"><input type="text" name="orig_params[url]" value="<?php echo $this->origparams->get('url','')?>" class="text_area" size="30" /></td>
			</tr>
			</table>
			<?php
		}
		parent::showOriginal();
	}

	function editTranslation(){
		if ($this->_menutype=="wrapper"){
			?>
			<table width="100%" class="paramlist">
			<tr>
			<td width="40%" align="right" valign="top"><span class="editlinktip"><!-- Tooltip -->
			<span onmouseover="return overlib('Link for Wrapper', CAPTION, 'Wrapper Link', BELOW, RIGHT);" onmouseout="return nd();" >Wrapper Link</span></span></td>
			<td align="left" valign="top"><input type="text" name="refField_params[url]" value="<?php echo $this->transparams->get('url','')?>" class="text_area" size="30" /></td>
			</tr>
			</table>
			<?php
		}
		parent::editTranslation();
	}



}

class TranslateParams_modules extends TranslateParams_xml
{
	function TranslateParams_modules($original, $translation, $fieldname, $fields=null){

		$this->fieldname = $fieldname;
		global $mainframe;
		$module = null;
		foreach ($fields as $field) {
			if ($field->Name=="module"){
				$module = $field->originalValue;
				break;
			}
		}
		if (is_null($module)){
			echo JText::_("PROBLEMS WITH CONTENT ELEMENT FILE");
			exit();
		}
		$lang =& JFactory::getLanguage();
		$lang->load($module, JPATH_SITE);

		// xml file for module
		if ($module == 'custom') {
			$xmlfile = JApplicationHelper::getPath( 'mod0_xml', 'mod_custom' );
		} else {
			$xmlfile = JApplicationHelper::getPath( 'mod0_xml', $module );
		}

		$this->origparams = new  JParameter( $original,$xmlfile, 'module');
		$this->transparams = new  JParameter( $translation,$xmlfile, 'module');
		$this->defaultparams = new  JParameter( "",$xmlfile, 'component');
		$this->fields = $fields;
	}

	function showOriginal(){
		parent::showOriginal();

		$output = "";
		if ($this->origparams->getNumParams('advanced')) {
			$fieldname='orig_'.$this->fieldname;
			$output .= $this->origparams->render($fieldname, 'advanced');
		}
		if ($this->origparams->getNumParams('other')) {
			$fieldname='orig_'.$this->fieldname;
			$output .= $this->origparams->render($fieldname, 'other');
		}
		if ($this->origparams->getNumParams('legacy')) {
			$fieldname='orig_'.$this->fieldname;
			$output .= $this->origparams->render($fieldname, 'legacy');
		}
		echo $output;
	}

	function showDefault(){
		parent::showDefault();

		$output = "<span style='display:none'>";
		if ($this->origparams->getNumParams('advanced')) {
			$fieldname='defaultvalue_'.$this->fieldname;
			$output .= $this->defaultparams->render($fieldname, 'advanced');
		}
			if ($this->origparams->getNumParams('other')) {
			$fieldname='defaultvalue_'.$this->fieldname;
			$output .= $this->defaultparams->render($fieldname, 'other');
		}
		if ($this->origparams->getNumParams('legacy')) {
			$fieldname='defaultvalue_'.$this->fieldname;
			$output .= $this->defaultparams->render($fieldname, 'legacy');
		}
		$output .= "</span>\n";
		echo $output;
	}

	function editTranslation(){
		parent::editTranslation();

		$output = "";
		if ($this->origparams->getNumParams('advanced')) {
			$fieldname='refField_'.$this->fieldname;
			$output .= $this->transparams->render($fieldname, 'advanced');
		}
		if ($this->origparams->getNumParams('other')) {
			$fieldname='refField_'.$this->fieldname;
			$output .= $this->transparams->render($fieldname, 'other');
		}
		if ($this->origparams->getNumParams('legacy')) {
			$fieldname='refField_'.$this->fieldname;
			$output .= $this->transparams->render($fieldname, 'legacy');
		}
		echo $output;
	}

}

class TranslateParams_content extends TranslateParams_xml
{
	function TranslateParams_content($original, $translation, $fieldname, $fields=null){

		$this->fieldname = $fieldname;
		global $mainframe;
		$content = null;
		foreach ($fields as $field) {
			if ($field->Type=="params"){
				$content = $field->originalValue;
				break;
			}
		}
		if (is_null($content)){
			echo JText::_("PROBLEMS WITH CONTENT ELEMENT FILE");
			exit();
		}
		$lang =& JFactory::getLanguage();
		$lang->load("com_content", JPATH_SITE);

		$this->origparams = new  JParameter( $original, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_content'.DS.'models'.DS.'article.xml');
		$this->transparams = new  JParameter( $translation, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_content'.DS.'models'.DS.'article.xml');
		$this->defaultparams = new  JParameter( "", JPATH_ADMINISTRATOR.DS.'components'.DS.'com_content'.DS.'models'.DS.'article.xml');
		$this->fields = $fields;
	}

	function showOriginal(){
		parent::showOriginal();

		$output = "";
		if ($this->origparams->getNumParams('advanced')) {
			$fieldname='orig_'.$this->fieldname;
			$output .= $this->origparams->render($fieldname, 'advanced');
		}
		if ($this->origparams->getNumParams('legacy')) {
			$fieldname='orig_'.$this->fieldname;
			$output .= $this->origparams->render($fieldname, 'legacy');
		}
		echo $output;
	}

	function showDefault(){
		parent::showDefault();

		$output = "<span style='display:none'>";
		if ($this->origparams->getNumParams('advanced')) {
			$fieldname='defaultvalue_'.$this->fieldname;
			$output .= $this->defaultparams->render($fieldname, 'advanced');
		}
		if ($this->origparams->getNumParams('legacy')) {
			$fieldname='defaultvalue_'.$this->fieldname;
			$output .= $this->defaultparams->render($fieldname, 'legacy');
		}
		$output .= "</span>\n";
		echo $output;
	}

	function editTranslation(){
		parent::editTranslation();

		$output = "";
		if ($this->origparams->getNumParams('advanced')) {
			$fieldname='refField_'.$this->fieldname;
			$output .= $this->transparams->render($fieldname, 'advanced');
		}
		if ($this->origparams->getNumParams('legacy')) {
			$fieldname='refField_'.$this->fieldname;
			$output .= $this->transparams->render($fieldname, 'legacy');
		}
		echo $output;
	}

}

include_once(JPATH_ADMINISTRATOR."/components/com_menus/models/item.php");
class JFMenusModelItem extends MenusModelItem {
	function &getItem($translation=null)
	{
		$params = new JParameter( $translation );
		static $item;
		if (isset($item)) {
			return $item;
		}

		$table = clone(parent::getItem());

		// replace values
		$table->params = $translation;

		// I could pick up the URL here or treat as a special content element field type?
		if ($table->type == 'component'){

			// Note that to populate the initial value of the urlparams
			$conf =& JFactory::getConfig();
			$elementTable = $conf->getValue('joomfish.elementTable',false);
			foreach ($elementTable->Fields as $efield) {
				if ($efield->Name=="link" && isset($efield->translationContent->value) && $efield->translationContent->value!==""){
					$uri = new JURI($efield->translationContent->value);
					if ($uri->getVar("option",false)){
						$table->link = $efield->translationContent->value;
					}
				}
			}

			$url = str_replace('index.php?', '', $table->link);
			$url = str_replace('&amp;', '&', $url);
			$table->linkparts = null;
			if(strpos($url, '&amp;') !== false)
			{
			   $url = str_replace('&amp;','&',$url);
			}
			
			parse_str($url, $table->linkparts);

			$db = &$this->getDBO();
			if ($component = @$table->linkparts['option']) {
				$query = 'SELECT `id`' .
				' FROM `#__components`' .
				' WHERE `link` <> \'\'' .
				' AND `parent` = 0' .
				' AND `option` = "'.$db->getEscaped($component).'"';
				$db->setQuery( $query );
				$table->componentid = $db->loadResult();
			}
		}
		//$values = $params->getProperties(false);
		//print_r($values);
		$item = $table;
		return $item;
	}

}
class JFDefaultMenusModelItem extends MenusModelItem {

	function &getItem()
	{
		static $item;
		if (isset($item)) {
			return $item;
		}

		$table = & parent::getItem();
		$clone = clone($table);
		// get an empty version for the defalut
		JRequest::setVar("edit",false);
		$table = null;
		JRequest::setVar( 'cid',array(0));
		$table = & parent::getItem();
		$item = clone($table);
		$item->componentid = $clone->componentid;
		$item->type = $clone->type;
		$item->menutype = $clone->menutype;

		$component		= &$this->getComponent();

		// restore original
		$table = $clone;

		return $item;
	}

}
?>
