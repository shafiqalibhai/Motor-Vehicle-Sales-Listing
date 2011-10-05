<?php

#############################################################################
#                                                                           #
#  EZ Autos 5.2.0 - A Mambo/Joomla Motor Vehicle Sales Listing component    #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006-2008 K.J. Strickland, Raptor Developments Pty Ltd     #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################

# Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

	global $database, $mainframe, $my, $Itemid, $mosConfig_absolute_path, $mosConfig_live_site;

$ea_rssname = str_replace ("&","&amp;",htmlspecialchars(stripslashes($ea_rssname)));

// set the file content type and character set
header("Content-Type: text/xml;charset=iso-8859-1");

$phpversion = phpversion();

//set the beginning of the xml file
ECHO <<<END
<?xml version="1.0" encoding="utf-8" ?>
<rss version="2.0" xmlns:g="http://base.google.com/ns/1.0">
    <channel>
      <title>$ea_rssname</title>
      <description>An RSS 2.0 data feed used by $mosConfig_sitename to add vehicles to the Google site.</description>
      <link>$mosConfig_live_site</link>\n
END;

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

  # Do the main database query
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, 
u.dealer_address1 AS dealer_address1, u.dealer_address2 AS dealer_address2, u.dealer_locality AS dealer_locality, 
u.dealer_pcode AS dealer_pcode, u.dealer_state AS dealer_state, u.dealer_country AS dealer_country FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND cc.published=1 AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

  # Do the main database query
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, 
u.dealer_address1 AS dealer_address1, u.dealer_address2 AS dealer_address2, u.dealer_locality AS dealer_locality, 
u.dealer_pcode AS dealer_pcode, u.dealer_state AS dealer_state, u.dealer_country AS dealer_country FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND cc.published=1 AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}

} else {

  # Do the main database query
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, 
u.dealer_address1 AS dealer_address1, u.dealer_address2 AS dealer_address2, u.dealer_locality AS dealer_locality, 
u.dealer_pcode AS dealer_pcode, u.dealer_state AS dealer_state, u.dealer_country AS dealer_country FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND cc.published=1"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}



//Make a loop to create the feed                                                

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];


// Clean up the short description for use in rss feeds

$row->smalldesc = preg_replace(array('/&/', '/</', '/>/', '/"/'), array('&amp;', '&lt;', '&gt;', '&quot;'), $row->smalldesc);
$row->smalldesc = str_replace( "'", "&#039;", $row->smalldesc );

// Clean up the category name for use in rss feeds

$row->category = preg_replace(array('/&/', '/</', '/>/', '/"/'), array('&amp;', '&lt;', '&gt;', '&quot;'), $row->category);
$row->category = str_replace( "'", "&#039;", $row->category );


// Check if there is an image for the listing
if ($row->image1==""){
$row->image = $mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/nothumb.gif";
} else {
$row->image = $mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/".$row->image1;
}

// Create an expiration date into the future based on the current time plus 14 days

$row->expa=mktime(0, 0, 0, date("m"), date("d")+14, date("Y"));
$row->exp=strftime("%Y-%m-%d",$row->expa);

// Check if there is a price specified and clean up the price format for use in rss feeds

if ($row->price){
$number = $row->price;
$formatted_price = number_format($number, 0,",","");
} else {
$formatted_price = "";
}

// display an item

ECHO <<<END
<item>
<title>$row->year $row->makename $row->modelname</title>
<g:color>$row->colour</g:color>
<g:condition>$row->tag</g:condition>
<description>$row->smalldesc</description>
<g:expiration_date>$row->exp</g:expiration_date>
<guid>$mosConfig_live_site/index.php?option=com_ezrealty&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid</guid>
<g:image_link>$row->image</g:image_link>
<link>$mosConfig_live_site/index.php?option=com_ezrealty&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid</link>
<g:location>$row->dealer_address1 $row->dealer_address2, $row->dealer_locality, $row->dealer_state, $row->dealer_pcode, $row->dealer_country</g:location>
<g:make>$row->makename</g:make>
<g:mileage>$row->odometer</g:mileage>
<g:model>$row->modelname</g:model>
<g:price>$formatted_price</g:price>
<g:vehicle_type>$row->category</g:vehicle_type>
<g:vin>$row->vin</g:vin>
<g:year>$row->year</g:year>
</item>\n
END;

  }

// Close the database

mysql_close();

// And end the xml file

ECHO <<<END
   </channel>
</rss>
END;


?>