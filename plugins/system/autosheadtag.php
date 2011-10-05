<?php

/**
* FileName: autosheadtag.php
* Date: 4th August 2008
* License: Commercial copyright
* Script Version #: 1.0
* EZ Autos Version #: 5.2.0 stable
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.event.plugin');

class  plgSystemAutosHeadTag extends JPlugin
{

	function plgSystemAutosHeadTag( &$subject, $config )
	{
		parent::__construct($subject, $config);
	}

	function onAfterDispatch()
	{
		$uri = JRequest::getURI();
		if(strpos('J'. $uri, 'administrator/')){
			return;
		}
		$plugin =& JPluginHelper::getPlugin('system', 'autosheadtag');


global $mainframe;

DEFINE("EZADMIN_PATH99B","administrator/components/com_ezautos");

include(EZADMIN_PATH99B."/config.ezautos.php");


$tag = '<script type="text/javascript" src="' . $mainframe->getCfg( 'live_site' ) . '/'.'components/com_ezautos/library/slimbox/js/mootools.js"></script>' . "\n"; 
$tag .= '<script type="text/javascript" src="' . $mainframe->getCfg( 'live_site' ) . '/'.'components/com_ezautos/library/slimbox/js/slimbox.js"></script>' . "\n"; 
$tag .= '<link rel="stylesheet" href="' . $mainframe->getCfg( 'live_site' ) . '/'.'components/com_ezautos/library/slimbox/css/slimbox.css" type="text/css" media="screen" />' . "\n"; 
$tag .= '<link rel="stylesheet" href="' . $mainframe->getCfg( 'live_site' ) . '/'.'components/com_ezautos/library/slideshow/css/image-slideshow.css" type="text/css" />' . "\n"; 
$tag .= '<link rel="stylesheet" href="' . $mainframe->getCfg( 'live_site' ) . '/'.'components/com_ezautos/library/ez_css.css" type="text/css" />' . "\n"; 
$tag .= '<script type="text/javascript" src="' . $mainframe->getCfg( 'live_site' ) . '/'.'includes/js/overlib_mini.js"></script>' . "\n"; 
$tag .= '<script type="text/javascript" src="' . $mainframe->getCfg( 'live_site' ) . '/'.'includes/js/mambojavascript.js"></script>' . "\n"; 


if ($ea_usemap && $ea_mapsys == 2 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "detail") {
$tag .= '<script type="text/javascript" src="http://maps.yahooapis.com/v3.04/fl/javascript/apiloader.js?appid=<' . $ea_mapapi . '"></script>' . "\n"; 
$tag .= '<style type="text/css">
#mapContainer { 
  height: ' . $ea_mapheight . 'px; 
  width: ' . $ea_mapwidth . 'px; 
} 
</style> ' . "\n"; 
}

if ($ea_usemap && $ea_mapsys == 2 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "showprofile") {
$tag .= '<script type="text/javascript" src="http://maps.yahooapis.com/v3.04/fl/javascript/apiloader.js?appid=' . $ea_mapapi . '"></script>' . "\n"; 
$tag .= '<style type="text/css">
#mapContainer { 
  height: ' . $ea_mapheight . 'px; 
  width: ' . $ea_mapwidth . 'px; 
} 
</style> ' . "\n"; 
}

if ($ea_usemap && $ea_mapsys == 2 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "print") {
$tag .= '<script type="text/javascript" src="http://maps.yahooapis.com/v3.04/fl/javascript/apiloader.js?appid=' . $ea_mapapi . '"></script>' . "\n"; 
$tag .= '<style type="text/css">
#mapContainer { 
  height: ' . $ea_mapheight . 'px; 
  width: ' . $ea_mapwidth . 'px; 
} 
</style> ' . "\n"; 
}



if ($ea_usemap && $ea_mapsys == 1 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "detail") {
$tag .= '<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=' . $ea_mapapi . '" type="text/javascript"></script> ' . "\n"; 
$tag .= '<script type="text/javascript">

<!--

//<![CDATA[
// This Javascript is based on code provided by the
// Blackpool Community Church Javascript Team
// http://www.commchurch.freeserve.co.uk/   
// http://www.econym.demon.co.uk/googlemaps/

var map = null;
var geocoder = null;
var gmarkers = [];
var htmls = [];
var to_htmls = [];
var from_htmls = [];
var i = 0;
      var baseIcon = new GIcon();
          baseIcon.iconSize=new GSize(32,32);
          baseIcon.shadowSize=new GSize(56,32);
          baseIcon.iconAnchor=new GPoint(16,32);
          baseIcon.infoWindowAnchor=new GPoint(16,0);
          
      var forsale = new GIcon(baseIcon, "http://maps.google.com/mapfiles/kml/pal3/icon31.png", null, "http://maps.google.com/mapfiles/kml/pal3/icon31s.png");


// A function to create the marker and set up the event window

function createMarker(point, address, icon)
{
    var marker = new GMarker(point, icon);
    
    gmarkers[i] = marker;
    i++;
    return marker;
}

        
function showAddress(address)
{
    if (geocoder)
    {
        geocoder.getLatLng
        (
            address, function(point)
            {
                if (!point)
                {
                    alert(address + " not found");
                }
                else
                {
                    map.setCenter(point, 13);
                    var marker = new GMarker(point, forsale);
                    map.addOverlay(marker);
                    map.addOverlay(createMarker(point, address, forsale));
                }
            }
        );
    }
}

//]]!>

//-->

</script> ' . "\n"; 
}


if ($ea_usemap && $ea_mapsys == 1 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "showprofile") {
$tag .= '<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=' . $ea_mapapi . '" type="text/javascript"></script> ' . "\n"; 
$tag .= '<script type="text/javascript">

<!--

//<![CDATA[
// This Javascript is based on code provided by the
// Blackpool Community Church Javascript Team
// http://www.commchurch.freeserve.co.uk/   
// http://www.econym.demon.co.uk/googlemaps/

var map = null;
var geocoder = null;
var gmarkers = [];
var htmls = [];
var to_htmls = [];
var from_htmls = [];
var i = 0;
      var baseIcon = new GIcon();
          baseIcon.iconSize=new GSize(32,32);
          baseIcon.shadowSize=new GSize(56,32);
          baseIcon.iconAnchor=new GPoint(16,32);
          baseIcon.infoWindowAnchor=new GPoint(16,0);
          
      var forsale = new GIcon(baseIcon, "http://maps.google.com/mapfiles/kml/pal3/icon31.png", null, "http://maps.google.com/mapfiles/kml/pal3/icon31s.png");


// A function to create the marker and set up the event window

function createMarker(point, address, icon)
{
    var marker = new GMarker(point, icon);
    
    gmarkers[i] = marker;
    i++;
    return marker;
}

        
function showAddress(address)
{
    if (geocoder)
    {
        geocoder.getLatLng
        (
            address, function(point)
            {
                if (!point)
                {
                    alert(address + " not found");
                }
                else
                {
                    map.setCenter(point, 13);
                    var marker = new GMarker(point, forsale);
                    map.addOverlay(marker);
                    map.addOverlay(createMarker(point, address, forsale));
                }
            }
        );
    }
}

//]]!>

//-->

</script> ' . "\n"; 
}

if ($ea_usemap && $ea_mapsys == 1 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "print") {
$tag .= '<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=' . $ea_mapapi . '" type="text/javascript"></script> ' . "\n"; 
$tag .= '<script type="text/javascript">

<!--

//<![CDATA[
// This Javascript is based on code provided by the
// Blackpool Community Church Javascript Team
// http://www.commchurch.freeserve.co.uk/   
// http://www.econym.demon.co.uk/googlemaps/

var map = null;
var geocoder = null;
var gmarkers = [];
var htmls = [];
var to_htmls = [];
var from_htmls = [];
var i = 0;
      var baseIcon = new GIcon();
          baseIcon.iconSize=new GSize(32,32);
          baseIcon.shadowSize=new GSize(56,32);
          baseIcon.iconAnchor=new GPoint(16,32);
          baseIcon.infoWindowAnchor=new GPoint(16,0);
          
      var forsale = new GIcon(baseIcon, "http://maps.google.com/mapfiles/kml/pal3/icon31.png", null, "http://maps.google.com/mapfiles/kml/pal3/icon31s.png");


// A function to create the marker and set up the event window

function createMarker(point, address, icon)
{
    var marker = new GMarker(point, icon);
    
    gmarkers[i] = marker;
    i++;
    return marker;
}

        
function showAddress(address)
{
    if (geocoder)
    {
        geocoder.getLatLng
        (
            address, function(point)
            {
                if (!point)
                {
                    alert(address + " not found");
                }
                else
                {
                    map.setCenter(point, 13);
                    var marker = new GMarker(point, forsale);
                    map.addOverlay(marker);
                    map.addOverlay(createMarker(point, address, forsale));
                }
            }
        );
    }
}

//]]!>

//-->

</script> ' . "\n"; 
}


		if(!empty($tag)){
			$GLOBALS['mainframe']->addCustomHeadTag($tag);
		}
 		return;

	}

}
?>