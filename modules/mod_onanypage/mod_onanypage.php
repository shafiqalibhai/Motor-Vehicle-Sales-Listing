<?php

/*
* Mod OnAnyPage module
* version 1.5.1 
*
* copyright Ewout Wierda © 2008
*	Community Licence, see joomlaloft.com
* Free for non-commercial use
*	mail@joomlaloft.com
*	joomlaloft.com
*
* Mod OnAnyPage is a module to display other modules on selected pages 
* with more precision than offered by the normal Joomla! module settings. 
* Mod OnAnyPage adds separate options to determine where a module is to 
* be displayed and provides almost complete control in combination with 
* the menu assignment of modules. Mod OnAnyPage has many options to 
* display or hide modules on specific pages or types of pages, and modules 
* can be displayed on all pages except those specified, or can be hidden 
* on all pages except those specified. Some examples of available options 
* are all articles, articles by id, all categories, category blogs, 
* categories by id, all core components, components by name, and pages 
* by part of the url. 
* 
* Instructions for use: 1. Publish the module(s) that you want to be displayed by 
* Mod OnAnyPage to a module position called 'onanypage' (or any other name you 
* choose) by typing in the module position field, and set 'Menu Assignment' to 
* 'All'. <br/><br/>2. In the Mod OnAnyPage settings select the module position 
* where you want the module(s) to appear that are to be displayed by Mod OnAnyPage. 
* In 'Display module(s) published to module position' type in 'onanypage' (or any 
* other name you chose as the position of the module(s) that you want to be 
* displayed by Mod OnAnyPage). <br/><br/>3. Set the display mode of Mod OnAnyPage 
* to 'Exclude mode' to specify the pages where Mod OnAnyPage should not be displayed 
* or to 'Include mode' to specify pages where Mod OnAnyPage should be displayed. 
* Exclude (in 'Exclude mode') or include (in 'Include mode') the pages or types 
* of pages where you want Mod OnAnyPage (and the module(s) to be displayed by it) 
* to be hidden or visible. Set 'Menu Assignment' to 'All' or to selected menu 
* items as desired.
*/

 

defined( '_JEXEC' ) or die( 'Restricted access' );



/*making database ready to use*/
$database =& JFactory::getDBO();



/*getting system input to see what page is being loaded*/
$option = JRequest::getVar('option', null);
$task = JRequest::getVar('task', null);
$view = JRequest::getVar('view', null);
$layout = JRequest::getVar('layout', null);
$idalias = JRequest::getVar('id', null);



/*getting moap parameters*/
$moap_displaypos = $params->get( 'moap_display_pos' );
$moap_displaystyle = $params->get( 'moap_display_style', 'xhtml' );
$moap_custom_style = $params->get( 'moap_custom_style', '' );
$moap_spacediv = $params->get( 'moap_spacediv' );
$moap_divspace = $params->get( 'moap_divspace' );
$moap_cleardiv = $params->get( 'moap_cleardiv' );
$moap_stylediv = $params->get( 'moap_stylediv' );
$moap_divstyle = $params->get( 'moap_divstyle' );
$moap_styleadd = $params->get( 'moap_styleadd' );
$moap_addstyle = $params->get( 'moap_addstyle' );
$moap_stylealt = $params->get( 'moap_stylealt' );
$moap_altstyle = $params->get( 'moap_altstyle' );

$moap_inexclude = $params->get( 'moap_inexclude' );

$moap_start = trim( $params->get( 'moap_start' ) );
$moap_end = trim( $params->get( 'moap_end' ) );
$moap_settimezone = $params->get( 'moap_settimezone', '' );
$moap_admintimezone = $params->get( 'moap_admintimezone', '' );

$moap_front = $params->get( 'moap_front' );
$moap_view = $params->get( 'moap_view' );
$moap_blogcat = $params->get( 'moap_blogcat' );
$moap_cat = $params->get( 'moap_cat' );
$moap_blogsect = $params->get( 'moap_blogsect' );
$moap_sect = $params->get( 'moap_sect' );

$moap_pagealia = $params->get( 'moap_pagealia' );
$moap_pagealias = $params->get( 'moap_pagealias' );
$moap_pageids = $params->get( 'moap_pageids' );
$moap_pageid = $params->get( 'moap_pageid' );
$moap_catids = $params->get( 'moap_catids' );
$moap_catall = $params->get( 'moap_catall' );
$moap_catid = $params->get( 'moap_catid' );
$moap_sectids = $params->get( 'moap_sectids' );
$moap_sectall = $params->get( 'moap_catall' );
$moap_sectid = $params->get( 'moap_sectid' );

$moap_commost = $params->get( 'moap_commost' );
$moap_comjoom = $params->get( 'moap_comjoom' );
$moap_com3rdp = $params->get( 'moap_com3rdp' );

$moap_comname = $params->get( 'moap_comname' );
$moap_comnames = $params->get( 'moap_comnames' );
$moap_nocomname = $params->get( 'moap_comname' );
$moap_nocomnames = $params->get( 'moap_comnames' );

$moap_udefconds = strval($params->get( 'moap_udefconds' ));
$moap_udefcond = $params->get( 'moap_udefcond' );

$moap_urlconds = strval($params->get( 'moap_urlconds' ));
$moap_urlcond = $params->get( 'moap_urlcond' );

$moap_reguser = $params->get( 'moap_reguser' );
$moap_noreguser = $params->get( 'moap_noreguser' );



/*processing system input to see what page is being loaded*/
$id = "";
$alias = "";
if (strpos($idalias, ":") !== false) {
	$idandalias = explode(":", $idalias);
  if(count($idandalias)==2){
    $id = $idandalias[0];
    $alias = $idandalias[1];
  }
}
$comprefix = substr( $option, 0, 4 );
$optionname = substr( $option, 4 );



/*processing parameters to cope with multiple entries*/
$moap_pagepageids = 0;
if ($moap_pageids && ($option=="com_content" && $view=="article")) {
  $moap_pageidn = explode(",",$moap_pageids);
	foreach ($moap_pageidn as $pageidn) {
  	if ($id==$pageidn) {
  		$moap_pagepageids=1;
		}
  }
}

$moap_catcatids = 0;
if ($moap_catids && ($option=="com_content" && $view=="category")) {
  $moap_catidn = explode(",",$moap_catids);
  foreach ($moap_catidn as $catidn) {
  	if ($id==$catidn) {
  		$moap_catcatids=1;
		}
  }
}

$moap_sectsectids = 0;
if ($moap_sectids && ($option=="com_content" && $view=="section")) {
  $moap_sectidn = explode(",",$moap_sectids);
  foreach ($moap_sectidn as $sectidn) {
  	if ($id==$sectidn) {
  		$moap_sectsectids=1;
		}
  }
}

$moap_comcomnames = 0;
if (($moap_comnames != "") && ($comprefix == 'com_')) {
  $moap_comnamen = explode(",",$moap_comnames);
  foreach ($moap_comnamen as $comnamen) {
  	if ($optionname==$comnamen) {
  		$moap_comcomnames=1;
		}
  }
}

$moap_nocomcomnames = 0;
if (($moap_nocomnames != "") && ($comprefix == 'com_')) {
  $moap_nocomnamen = explode(",",$moap_nocomnames);
  foreach ($moap_nocomnamen as $nocomnamen) {
  	if ($optionname!=$nocomnamen) {
  		$moap_nocomcomnames=1;
		}
  }
}



/*processing parameters to cover pages in the scope of categories, and pages and categories in the scope of sections*/
$moap_catpageids = 0;
if (($moap_catids && $moap_catall) && ($option=="com_content" && $view=="article")) {
  $moap_catidn = explode(",",$moap_catids);
  foreach ($moap_catidn as $catidn) {
		$query = "SELECT catid FROM jos_content WHERE id=$id";
    $database->setQuery($query);
		$pagecatid = $database->loadResult();
    if ($catidn == $pagecatid) {
    	$moap_catpageids = 1;
		}
	}
}

$moap_sectpageids = 0;
if (($moap_sectids && $moap_sectall) && ($option=="com_content" && $view=="article")) {
  $moap_sectidn = explode(",",$moap_sectids);
  foreach ($moap_sectidn as $sectidn) {
    $query = "SELECT sectionid FROM jos_content WHERE id=$id";
    $database->setQuery($query);
    $pagesectid = $database->loadResult();
    if ($sectidn == $pagesectid) {
    	$moap_sectpageids = 1;
		}
	}
}

$moap_sectcatids = 0;
if (($moap_sectids && $moap_sectall) && ($option=="com_content" && $view=="category")) {
  $moap_sectidn = explode(",",$moap_sectids);
  foreach ($moap_sectidn as $sectidn) {
		$query = "SELECT section FROM jos_categories WHERE id=$id";
    $database->setQuery($query);
    $catsectid = $database->loadResult();
		if ($sectidn == $catsectid) {
    	$moap_sectcatids = 1;
		}
	}
}



/*processing url condition*/
/*getting url*/
$uri = & JFactory::getURI();
$pageurl = $uri->toString();
/*checking url*/
if ( $moap_urlconds && (strpos($pageurl, $moap_urlconds) != 0) ) {
	$moap_inurlcond = 1;
} else {
	$moap_inurlcond = 0;
}


/*main checking process*/

/*check in moap exclude mode*/
if ($moap_inexclude == "exclude") {
	$callModornot = 1;
	if (
  	/*Front page*/
  	($moap_front == -1 && ($option=="com_content" && $view=="frontpage")) || 
  	/*All articles*/
  	($moap_view == -1 && ($option=="com_content" && $view=="article")) || 
  	/*All category blogs*/
  	($moap_blogcat == -1 && ($option=="com_content" && ($view=="category" || $layout=="blog"))) || 
  	/*All category tables*/
  	($moap_cat == -1 && ($option=="com_content" && $view=="category")) || 
  	/*All section blogs*/
  	($moap_blogsect == -1 && ($option=="com_content" && ($view=="section" && $layout=="blog"))) || 
  	/*All section tables*/
  	($moap_sect == -1 && ($option=="com_content" && $view=="section")) || 
  	/*Content page specified by alias*/
  	($moap_pagealias == -1 && ($moap_pagealia==$alias)) ||
  	/*Content pages specified by id*/
  	($moap_pageid == -1 && ($moap_pagepageids)) || 
  	/*Categories specified by id*/
  	($moap_catid == -1 && ($moap_catcatids)) || 
  	/*Extend to all pages in specified category(s)*/
  	($moap_catid == -1 && $moap_catall == 1 && ($option=="com_content" && $view=="article" && $moap_catpageids)) ||
  	/*Sections specified by id*/
  	($moap_sectid == -1 && ($moap_sectsectids)) || 
  	/*Extend to all pages and categories in specified section(s)*/
  	($moap_sectid == -1 && $moap_sectall == 1 && (($option=="com_content" && $view=="category" && $moap_sectcatids) || ($option=="com_content" && $view=="article" && $moap_sectpageids))) ||
  	/*All core components except content*/
  	($moap_commost == -1 && ($option=="com_contact" || $option=="com_newsfeeds" || $option=="com_search" || $option=="com_user" || $option=="com_weblinks" || $option=="com_wrapper")) || 
  	/*All core components*/
  	($moap_comjoom == -1 && ($option=="com_content" || $option=="com_contact" || $option=="com_newsfeeds" || $option=="com_search" || $option=="com_user" || $option=="com_weblinks" || $option=="com_wrapper")) || 
  	/*All components except core components*/
  	($moap_com3rdp == -1 && ($comprefix == 'com_' && $option!="com_content" && $option!="com_contact" && $option!="com_newsfeeds" && $option!="com_search" && $option!="com_user" && $option!="com_weblinks" && $option!="com_wrapper")) || 
  	/*Components specified by name*/
  	($moap_comname == -1 && ($moap_comcomnames)) || 
  	/*All components except components specified by name*/
  	($moap_comname == -1 && ($moap_nocomcomnames)) || 
  	/*Pages with url containing*/
  	($moap_urlcond == -1 && ($moap_inurlcond)) || 
  	/*User defined condition*/
  	($moap_udefcond == -1 && eval("return ".$moap_udefconds.";"))
	) {
		$callModornot = 0;
	}
} else {

/*check in moap include mode*/
  if ($moap_inexclude == "include") {
  	$callModornot = 0;
  	if (
    	/*Front page*/
    	($moap_front == 1 && ($option=="com_content" && $view=="frontpage")) || 
    	/*All articles*/
    	($moap_view == 1 && ($option=="com_content" && $view=="article")) || 
    	/*All category blogs*/
    	($moap_blogcat == 1 && ($option=="com_content" && ($view=="category" || $layout=="blog"))) || 
    	/*All category tables*/
    	($moap_cat == 1 && ($option=="com_content" && $view=="category")) || 
    	/*All section blogs*/
    	($moap_blogsect == 1 && ($option=="com_content" && ($view=="section" && $layout=="blog"))) || 
    	/*All section tables*/
    	($moap_sect == 1 && ($option=="com_content" && $view=="section")) || 
    	/*Content page specified by alias*/
    	($moap_pagealias == 1 && ($moap_pagealia==$alias)) ||
    	/*Content pages specified by id*/
    	($moap_pageid == 1 && ($moap_pagepageids)) || 
    	/*Categories specified by id*/
    	($moap_catid == 1 && ($moap_catcatids)) || 
    	/*Extend to all pages in specified category(s)*/
    	($moap_catid == 1 && $moap_catall == 1 && ($option=="com_content" && $view=="article" && $moap_catpageids)) ||
    	/*Sections specified by id*/
    	($moap_sectid == 1 && ($moap_sectsectids)) || 
    	/*Extend to all pages and categories in specified section(s)*/
    	($moap_sectid == 1 && $moap_sectall == 1 && (($option=="com_content" && $view=="category" && $moap_sectcatids) || ($option=="com_content" && $view=="article" && $moap_sectpageids))) ||
    	/*All core components except content*/
    	($moap_commost == 1 && ($option=="com_contact" || $option=="com_newsfeeds" || $option=="com_search" || $option=="com_user" || $option=="com_weblinks" || $option=="com_wrapper")) || 
    	/*All core components*/
    	($moap_comjoom == 1 && ($option=="com_content" || $option=="com_contact" || $option=="com_newsfeeds" || $option=="com_search" || $option=="com_user" || $option=="com_weblinks" || $option=="com_wrapper")) || 
    	/*All components except core components*/
    	($moap_com3rdp == 1 && ($comprefix == 'com_' && $option!="com_content" && $option!="com_contact" && $option!="com_newsfeeds" && $option!="com_search" && $option!="com_user" && $option!="com_weblinks" && $option!="com_wrapper")) || 
    	/*Components specified by name*/
    	($moap_comname == 1 && ($moap_comcomnames)) || 
    	/*All components except components specified by name*/
    	($moap_comname == 1 && ($moap_nocomcomnames)) || 
    	/*Pages with url containing*/
    	($moap_urlcond == 1 && ($moap_inurlcond)) || 
    	/*User defined condition*/
    	($moap_udefcond == 1 && eval("return ".$moap_udefconds.";"))
  	) {
  	$callModornot = 1;
		}
	} else {
  	$callModornot = 0;
	}
}



/*access checking process*/
$user =& JFactory::getUser();
/*check for non-registered users*/
if ($user->guest) {
  if ($moap_noreguser == -1) {
  	$accessModornot = 0;
  } else {
  	$accessModornot = 1;
  }
/*check for registered users*/
} else {
  if ($moap_reguser == -1) {
  	$accessModornot = 0;
  } else {
  	$accessModornot = 1;
  }
}



/*date & time checking process*/
/*turn joomla system offset into a time zone*/
$config =& JFactory::getConfig();
$jtzo = $config->getValue('config.offset');
if ($jtzo < -11) {$jtz='Pacific/Auckland';} else if ($jtzo < -10) {$jtz='Pacific/Samoa';} else if ($jtzo < -9) {$jtz='Pacific/Honolulu';} else if ($jtzo < -8) {$jtz='America/Anchorage';} else if ($jtzo < -7) {$jtz='America/Los_Angeles';} else if ($jtzo < -6) {$jtz='America/Denver';} else if ($jtzo < -5) {$jtz='America/Chicago';} else if ($jtzo < -4) {$jtz='America/New_York';} else if ($jtzo < -3) {$jtz='America/Santiago';} else if ($jtzo < -2) {$jtz='America/Sao_Paulo';} else if ($jtzo < -1) {$jtz='Atlantic/South_Georgia';} else if ($jtzo < 0) {$jtz='PAtlantic/Azores';} else if ($jtzo < 1) {$jtz='UTC';} if ($jtzo < 2) {$jtz='Europe/Brussels';} else if ($jtzo < 3) {$jtz='Europe/Istanbul';} else if ($jtzo < 4) {$jtz='Europe/Moscow';} else if ($jtzo < 5) {$jtz='Asia/Dubai';} else if ($jtzo < 5.5) {$jtz='Asia/Karachi';} else if ($jtzo < 6) {$jtz='Asia/Kolkata';} else if ($jtzo < 7) {$jtz='Asia/Omsk';} else if ($jtzo < 8) {$jtz='Asia/Jakarta';} else if ($jtzo < 9) {$jtz='Asia/Singapore';} else if ($jtzo < 9.5) {$jtz='Asia/Tokyo';} else if ($jtzo < 10) {$jtz='Australia/Adelaide';} else if ($jtzo < 11) {$jtz='Australia/Sydney';} else if ($jtzo < 12) {$jtz='Pacific/Noumea';} else {$jtz='Pacific/Auckland';} 
/*set default time*/
if ( function_exists("date_default_timezone_set") && function_exists("date_default_timezone_get") ) {
	if( $moap_settimezone == 1 ) {
		date_default_timezone_set($moap_admintimezone);
	} else if ( $moap_settimezone == 2 ) {
		date_default_timezone_set($jtz);
	} else {
		@date_default_timezone_set(@date_default_timezone_get());
	}
} else {
	if( $moap_settimezone == 1 ) {
		putenv("TZ=$moap_admintimezone");
	} else if ( $moap_settimezone == 2 ) {
		putenv("TZ=$jtz");
	} else {
		$getenvtz = getenv("TZ");
		putenv("TZ=$getenvtz");
	}
}
/*check time window*/
if ( $moap_start != "" || $moap_end != "" ) {
  if ( $moap_start != "" ) {
  	if ( strtotime($moap_start) < strtotime("now") ) {
    	$startmod = 1;
    } else {
    	$startmod = 0;
    }
	}
  if ( $moap_end != "" ) {
  	if ( strtotime($moap_end) > strtotime("now") ) {
    	$endmod = 1;
    } else {
    	$endmod = 0;
    }
	}
  if ( $startmod == 0 || $endmod == 0 ) {
  	$timeforModornot = 0;
  } else {
  	$timeforModornot = 1;
  }
} else {
	$timeforModornot = 1;
}



/*result of checking processes*/
$callmoap = 0;
if ($callModornot==1 && $accessModornot==1 && $timeforModornot==1) {
	$callmoap = 1;
}



/*enable non-standard module styles*/
if ($moap_custom_style != '') {
	$moap_style = $moap_custom_style;
} else {
	$moap_style = $moap_displaystyle;
}



/*add space above and/or clear and/or style div(s) before and/or after moap and/or mods*/
$spacingdiv = "<div style='height:".$moap_divspace.";'></div>";
$clearingdiv = "<div style='height:1px;clear:both;'>&nbsp;</div>";
$stylingdiv_open = '<div class="onanypage" style="'.$moap_divstyle.'">';
$stylingdiv_close = '</div>';
if ($moap_spacediv == 'single' || $moap_spacediv == 'both') {
	$spacemoap = $spacingdiv;
} else {
	$spacemoap = "";
}
if ($moap_spacediv == 'multi' || $moap_spacediv == 'both') {
	$spacemods = $spacingdiv;
} else {
	$spacemods = "";
}
if ($moap_cleardiv == 'single' || $moap_cleardiv == 'both') {
	$clearmoap = $clearingdiv;
} else {
	$clearmoap = "";
}
if ($moap_cleardiv == 'multi' || $moap_cleardiv == 'both') {
	$clearmods = $clearingdiv;
} else {
	$clearmods = "";
}
if ($moap_stylediv == 'single' || $moap_stylediv == 'both') {
	$stylemoap_open = $stylingdiv_open;
	$stylemoap_close = $stylingdiv_close;
} else {
	$stylemoap_open = "";
	$stylemoap_close = "";
}
if ($moap_stylediv == 'multi' || $moap_stylediv == 'both') {
	$stylemods_open = $stylingdiv_open;
	$stylemods_close = $stylingdiv_close;
} else {
	$stylemods_open = "";
	$stylemods_close = "";
}



/*produce output*/

$document	= &JFactory::getDocument();
$renderer	= $document->loadRenderer('module');
$attribs = array();
$attribs['style'] = $moap_style;
$contents = "";
if ($callmoap==1) {
  	if ($moap_styleadd == 1) {
			$document->addStyleDeclaration($moap_addstyle);
		}
  	if ($moap_styleadd == 2) {
			$contents .= '<style type="text/css"><!--'.$moap_addstyle.'--></style>';
		}
		$contents .= $spacemoap;
		$contents .= $stylemoap_open;
  	foreach (JModuleHelper::getModules($moap_displaypos) as $mods)  {
  		$contents .= $spacemods;
			$contents .= $stylemods_open;
  		$contents .= $renderer->render($mods, $attribs);
			$contents .= $stylemods_close;
  		$contents .= $clearmods;
  	}
		$contents .= $stylemoap_close;
		$contents .= $clearmoap;
  	echo $contents;
} else {
  	if ($moap_stylealt == 1) {
			$document->addStyleDeclaration($moap_altstyle);
		}
  	if ($moap_stylealt == 2) {
			$contents .= '<style type="text/css"><!--'.$moap_altstyle.'--></style>';
		}
}

?>