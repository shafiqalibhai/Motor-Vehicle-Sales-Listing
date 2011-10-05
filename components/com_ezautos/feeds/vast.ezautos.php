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

	global $database, $mainframe, $my, $myItemid, $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_MetaDesc;

# Call the configuration file - Don't change anything here!!!

DEFINE("EZADMIN_PATH3","administrator/components/com_ezautos");

if (file_exists(EZADMIN_PATH3."/config.ezautos.php")) {
  include(EZADMIN_PATH3."/config.ezautos.php");
} else {
echo _EZAUTOS_FNA;
}


	$filename = "EZ_Autos_Vast_Listings_for_" . date('d-m-Y');

	$output = '<?xml version="1.0" encoding="utf-8" ?>
				  <!-- EZ Autos Vast export file -->
				  <!DOCTYPE listings [
				  <!ELEMENT listings (listing+)>
				  <!ELEMENT listing (record_id, title, url, address, city, state, zip, country, listing_time, expire_time, 
description, category, vehicle_category, make, model, year, vin, mileage, body_style, transmission, exterior_color, interior_color, img_url, price)>
				  <!ELEMENT record_id (#PCDATA)>
				  <!ELEMENT title (#PCDATA)>
				  <!ELEMENT url (#PCDATA)>
				  <!ELEMENT address (#PCDATA)>
				  <!ELEMENT city (#PCDATA)>
				  <!ELEMENT state (#PCDATA)>
				  <!ELEMENT zip (#PCDATA)>
				  <!ELEMENT country (#PCDATA)>
				  <!ELEMENT listing_time (#PCDATA)>
				  <!ELEMENT expire_time (#PCDATA)>
				  <!ELEMENT description (#PCDATA)>
				  <!ELEMENT category (#PCDATA)>
				  <!ELEMENT vehicle_category (#PCDATA)>
				  <!ELEMENT make (#PCDATA)>
				  <!ELEMENT model (#PCDATA)>
				  <!ELEMENT year (#PCDATA)>
				  <!ELEMENT vin (#PCDATA)>
				  <!ELEMENT mileage (#PCDATA)>
				  <!ELEMENT body_style (#PCDATA)>
				  <!ELEMENT transmission (#PCDATA)>
				  <!ELEMENT exterior_color (#PCDATA)>
				  <!ELEMENT interior_color (#PCDATA)>
				  <!ELEMENT img_url (#PCDATA)>
				  <!ELEMENT price (#PCDATA)>
				  ]>
				  <listings>
				  ';

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


if ($rows > 0 ) {

	foreach ($rows AS $row){


// Check if there is a price specified and clean up the price format for use in rss feeds

if ($row->price){
$number = $row->price;
$formatted_price = number_format($number, 0,",",",");
} else {
$formatted_price = "";
}

// Create an expiration date into the future based on the expiration figure in the configuration area

$row->expa=mktime(0, 0, 0, date("m"), date("d")+$ea_expfig, date("Y"));
$row->exp=strftime("%Y-%m-%d",$row->expa);

// Check if there is an image for the listing
if ($row->image1==""){
$row->image = "";
} else {
$row->image = $mosConfig_live_site."/components/com_ezautos/".$ea_imagedirectory."/".$row->image1;
}

		$output .= "<listing>\n";

		$output .= "<record_id>".htmlentities(html_entity_decode(stripslashes($row->id)))."</record_id>\n";
		$output .= "<title>".htmlentities(html_entity_decode(stripslashes($row->metadesc)))."</title>\n";
		$output .= "<url>".$mosConfig_live_site."/index.php?option=com_ezautos&amp;task=detail&amp;id=".$row->id."&amp;Itemid=".$myItemid."</url>\n";
		$output .= "<address>".htmlentities(html_entity_decode(stripslashes($row->dealer_address1)))." ".htmlentities(html_entity_decode(stripslashes($row->dealer_address2)))."</address>\n";
		$output .= "<city>".htmlentities(html_entity_decode(stripslashes($row->dealer_locality)))."</city>\n";
		$output .= "<state>".htmlentities(html_entity_decode(stripslashes($row->dealer_state)))."</state>\n";
		$output .= "<zip>".htmlentities(html_entity_decode(stripslashes($row->dealer_pcode)))."</zip>\n";
		$output .= "<country>".htmlentities(html_entity_decode(stripslashes($row->dealer_country)))."</country>\n";
		$output .= "<listing_time>".$row->listdate."-00:00:00</listing_time>\n";
		$output .= "<expire_time>".$row->exp."-00:00:00</expire_time>\n";
		$output .= "<description>".htmlentities(html_entity_decode(stripslashes($row->smalldesc)))."</description>\n";
		$output .= "<category>car</category>\n";
		$output .= "<vehicle_category>cars</vehicle_category>\n";
		$output .= "<make>".htmlentities(html_entity_decode(stripslashes($row->makename)))."</make>\n";
		$output .= "<model>".htmlentities(html_entity_decode(stripslashes($row->modelname)))."</model>\n";
		$output .= "<year>".htmlentities(html_entity_decode(stripslashes($row->year)))."</year>\n";
		$output .= "<vin>".htmlentities(html_entity_decode(stripslashes($row->vin)))."</vin>\n";
		$output .= "<mileage>".htmlentities(html_entity_decode(stripslashes($row->odometer)))."</mileage>\n";
		$output .= "<body_style>".htmlentities(html_entity_decode(stripslashes($row->body)))."</body_style>\n";
		$output .= "<transmission>".htmlentities(html_entity_decode(stripslashes($row->trans)))."</transmission>\n";
		$output .= "<exterior_color>".htmlentities(html_entity_decode(stripslashes($row->colour)))."</exterior_color>\n";
		$output .= "<interior_color>".htmlentities(html_entity_decode(stripslashes($row->intcolour)))."</interior_color>\n";
		$output .= "<img_url>".$row->image."</img_url>\n";
		$output .= "<price>".htmlentities(html_entity_decode(stripslashes($ea_currencysign)))."".htmlentities(html_entity_decode(stripslashes($formatted_price)))."</price>\n";

		$output .= "  </listing>\n";
	}
	$output .= "</listings>";


	//send file to browser

	@ob_end_clean();
	ob_start();

	header('Content-Type: application/xml');
	header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');

	print $output;

} else {

	mosRedirect( "index.php?option=com_ezrealty" );

}

	exit();


?>