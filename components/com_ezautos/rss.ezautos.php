<?php

#############################################################################
#                                                                           #
#  EZ Autos 5.0.0 - A Mambo Motor Vehicle Sales Listing component           #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################


# Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

	global $database, $mainframe, $my, $Itemid, $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_MetaDesc;

  # Check that access to rss feed is allowed

    if ( !$ea_rssfeed ){
	echo _EZAUTOS_NOENTRY;
    } else {

$ea_rssname = str_replace ("&","&amp;",htmlspecialchars(stripslashes($ea_rssname)));
$mosConfig_MetaDesc = str_replace ("&amp","",htmlspecialchars(stripslashes($mosConfig_MetaDesc)));

// set the file content type and character set
header("Content-Type: text/xml;charset=iso-8859-1");

$phpversion = phpversion();

//set the beginning of the xml file
ECHO <<<END
<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
    <channel>
      <title>$ea_rssname</title>
      <link>$mosConfig_live_site</link>
      <description>$mosConfig_MetaDesc</description>
      <language>en-us</language>
      <generator>PHP/$phpversion</generator>
    <image>
<url>$mosConfig_live_site/components/com_ezautos/images/rss_logo.jpg</url>
<title>$ea_rssname</title>
<link>$mosConfig_live_site</link>
</image>\n
END;


if ( $ea_expmgmt==1 ) {


if ( $ea_expsys==0 ) {


// Select the required number of published vehicles and order them from newest first

  # Do the main database query
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $ea_newlist"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

// Select the required number of published vehicles and order them from newest first

  # Do the main database query
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1 AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $ea_newlist"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


} else {

  # Do the main database query
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published=1"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $ea_newlist"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}



//Make a loop to create the feed                                                

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];

// Check if there is no thumbnail image for the vehicle
if ($row->image1==""){
$row->image1 = "nothumb.gif";
}


// Clean up the description for use in rss feeds
$row->smalldesc = str_replace ("&amp","",htmlspecialchars(stripslashes($row->smalldesc)));
// Escape all the nasty bits
$row->smalldesc = preg_replace(array('/</', '/>/', '/"/'), array('&lt;', '&gt;', '&quot;'), $row->smalldesc);

$row->listdate2 = date("D, d M Y H:i:s",strtotime($row->listdate));

// display an item

ECHO <<<END
<item>
<title>$row->year $row->makename $row->modelname $row->derivative</title>
    <link>$mosConfig_live_site/index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid</link>
    <description><![CDATA[<img src='$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/th/$row->image1' align='left' width='$ea_thumbwidth' hspace='10' />$row->smalldesc ...]]></description>
    <guid>$mosConfig_live_site/index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid</guid>
	<pubDate>$row->listdate2 +0000</pubDate>
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

}

?>