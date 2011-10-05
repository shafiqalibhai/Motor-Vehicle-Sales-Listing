<?php



/**

* FileName: mod_ezautos_search.php

* Date: 3-11-2008

* License: Commercial copyright

* Script Version #: 2.9

* EZ Autos Version #: 5.2.0 stable

* Author: K.J. Strickland - http://www.raptorservices.com.au

**/



/** ensure this file is being included by a parent file */

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );



# Kill notices because people panic for no reason

error_reporting(E_ALL ^ E_NOTICE);



# call some core configuration variables:

global $mainframe, $database, $mosConfig_lang;





DEFINE("EZADMIN_PATH9b","administrator/components/com_ezautos");



if (file_exists(EZADMIN_PATH9b."/config.ezautos.php")) {

  include(EZADMIN_PATH9b."/config.ezautos.php");

} else {

echo 'Configuration file not available';

}





# Get the right language file



if ($ea_cms == 3){

DEFINE("LANGUAGE_PATH9b","modules/mod_ezautos_search/mod_ezautos_search");

} else {

DEFINE("LANGUAGE_PATH9b","modules/mod_ezautos_search");

}



if (file_exists(LANGUAGE_PATH9b."/".$mainframe->getCfg( 'lang' ).".php")) {

  include(LANGUAGE_PATH9b."/".$mainframe->getCfg( 'lang' ).".php");

} elseif (file_exists(LANGUAGE_PATH9b."/english.php"))  {

  include(LANGUAGE_PATH9b."/english.php");

} else {

echo "Language file is not available";

}







$usecat 	= $params->get( 'usecat' ) ;

$usemakmod 	= $params->get( 'usemakmod' ) ;

$usetrans 	= $params->get( 'usetrans' ) ;

$usefuel	= $params->get( 'usefuel' ) ;

$usecond	= $params->get( 'usecond' ) ;

$usepcode	= $params->get( 'usepcode' ) ;



$usecolour	= $params->get( 'usecolour' ) ;

$usedoors	= $params->get( 'usedoors' ) ;

$usebody	= $params->get( 'usebody' ) ;

$useyear	= $params->get( 'useyear' ) ;

$useengine	= $params->get( 'useengine' ) ;

$usemileage	= $params->get( 'usemileage' ) ;





$tagit_demo 	= $params->get( 'tagit_demo' ) ;

$tagit_asnew	= $params->get( 'tagit_asnew' ) ;

$tagit_preluv	= $params->get( 'tagit_preluv' ) ;

$tagit_spare 	= $params->get( 'tagit_spare' ) ;





if ($ea_raddistance == 6378.7){

$dtag = _EZAUTOS_SCH_K2;

} elseif ($ea_raddistance == 3963.0){

$dtag = _EZAUTOS_SCH_SM2;

} elseif ($ea_raddistance == 3437.74677){

$dtag = _EZAUTOS_SCH_NM2;

}



  # get list of categories



    $query = "SELECT cc.cid AS value, cc.name AS text"

    . "\n FROM #__ezautos_catg AS cc WHERE cc.published=1"

    . "\n ORDER BY cc.ordering"

    ;

    $categorys[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALCAT2 );

    $database->setQuery( $query );

    $categorys = array_merge( $categorys, $database->loadObjectList() );

    $lists['cid']   = mosHTML::selectList( $categorys, 'cid', 'class="searchbox" size="1"' , 'value', 'text', '' );





 # Build Make select list - Model select will be built by ajax

    $sql = "SELECT ma.maid as value, ma.make as text FROM #__ezautos_make AS ma WHERE ma.published = 1 ORDER by ma.make";

    $database->setQuery($sql);

    if (!$database->query()) {

    echo $database->stderr();

    return;

    }

    $mtypelist2[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALMAK2 );

    $mtypelist2 = array_merge( $mtypelist2, $database->loadObjectList() );

    $lists['make2'] = mosHTML::selectList( $mtypelist2, 'make', 'class="searchbox" id="make" size="1" onchange="getDropModelList(this,0)" ','value', 'text', '');

   $sql = "SELECT mo.moid as value, mo.model as text FROM #__ezautos_model AS mo WHERE mo.published = 1 ORDER by mo.model";

    $database->setQuery($sql);

    if (!$database->query()) {

    echo $database->stderr();

    return;

    }

    $mltypelist2[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_SELALMOD2 );

    $lists['model2'] = mosHTML::selectList( $mltypelist2, 'model', 'class="searchbox" id="model" size="1" ','value', 'text', '');







 # HRVOJE - Build Country select list - City select will be built by ajax



 

 $sql = "SELECT co.coid as value, co.country as text FROM #__ezautos_country AS co WHERE co.published = 1 ORDER by co.country";

    $database->setQuery($sql);

    if (!$database->query()) {

    echo $database->stderr();

    return;

    }

    $country_list2[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_ANYCOUNTRY2);

  $country_list2 = array_merge( $country_list2, $database->loadObjectList() );

    $lists['country2'] = mosHTML::selectList( $country_list2, 'country', 'class="searchbox" id="country2" size="1" onchange="getDropCityList6(this,0)" ','value', 'text', '');

   $sql = "SELECT ci.ciid as value, ci.city as text FROM #__ezautos_city AS ci WHERE ci.published = 1 ORDER by ci.city";

    $database->setQuery($sql);

    if (!$database->query()) {

    echo $database->stderr();

    return;

    }

    $city_list2[] = mosHTML::makeOption( '0', _EZAUTOS_SEARCH_ANYCITY2 );

    $lists['city2'] = mosHTML::selectList( $city_list2, 'city', 'class="searchbox" id="city2" size="1" ','value', 'text', '');





/*

    $sql = "SELECT co.coid as value, co.country as text FROM #__ezautos_country AS co WHERE co.published = 1 ORDER by co.country";

    $database->setQuery($sql);

    if (!$database->query()) {

    echo $database->stderr();

    return;

    }



    $ctypelist[] = mosHTML::makeOption( '0', "Any Country" );

    $ctypelist = array_merge( $ctypelist, $database->loadObjectList() );

    $lists['country6'] = mosHTML::selectList( $ctypelist, 'country', 'class="searchbox2" id="country6" size="1"  onchange="getDropCityList6(this,0)" ','value', 'text', '');





   $sql = "SELECT ci.ciid as value, ci.city as text FROM #__ezautos_city AS ci WHERE ci.published = 1 ORDER by ci.city";

    $database->setQuery($sql);

    if (!$database->query()) {

    echo $database->stderr();

    return;

    }



    $cltypelist[] = ezautosHTML::makeOption( '0', "Any City" );

    $lists['city6'] = ezautosHTML::selectList( $cltypelist, 'city', 'class="searchbox2" id="city6" size="1" ','value', 'text', '');



*/















  # Build Min Price select list



	$sql	= "SELECT mip.range as value, mip.display as text FROM #__ezautos_price AS mip ORDER by mip.ordering";

	$database->setQuery($sql);

	if (!$database->query()) {

		echo $database->stderr();

		return;

	}



	$minpriceit[] = mosHTML::makeOption( '', _EZAUTOS_DDSL_SELMIN2 );

	$minpriceit = array_merge( $minpriceit, $database->loadObjectList() );

	$lists['minprice'] = mosHTML::selectList( $minpriceit, 'minprice', 'class="slimsearchbox" size="1"','value', 'text', '');





  # Build Max Price select list



	$sql	= "SELECT map.range as value, map.display as text FROM #__ezautos_price AS map ORDER by map.ordering";

	$database->setQuery($sql);

	if (!$database->query()) {

		echo $database->stderr();

		return;

	}



	$maxpriceit[] = mosHTML::makeOption( '', _EZAUTOS_DDSL_SELMAX2 );

	$maxpriceit = array_merge( $maxpriceit, $database->loadObjectList() );

	$lists['maxprice'] = mosHTML::selectList( $maxpriceit, 'maxprice', 'class="slimsearchbox" size="1"','value', 'text', '');



  # Build vehicle condition select list



  	$tagit[] = mosHTML::makeOption( '', _EZAUTOS_SEARCH_ANYCOND2 );

  	$tagit[] = mosHTML::makeOption( _EZAUTOS_TAGIT_NEW2, _EZAUTOS_TAGIT_NEW2 );

  	$tagit[] = mosHTML::makeOption( _EZAUTOS_TAGIT_USED2, _EZAUTOS_TAGIT_USED2 );



if ($tagit_demo) {

  	$tagit[] = mosHTML::makeOption( _EZAUTOS_TAGIT_DEMO2, _EZAUTOS_TAGIT_DEMO2 );

}

if ($tagit_asnew) {

  	$tagit[] = mosHTML::makeOption( _EZAUTOS_TAGIT_ASNEW2, _EZAUTOS_TAGIT_ASNEW2 );

}

if ($tagit_preluv) {

  	$tagit[] = mosHTML::makeOption( _EZAUTOS_TAGIT_PRELUV2, _EZAUTOS_TAGIT_PRELUV2 );

}

if ($tagit_spare) {

  	$tagit[] = mosHTML::makeOption( _EZAUTOS_TAGIT_SPARE2, _EZAUTOS_TAGIT_SPARE2 );

}

  

  	$lists['tag'] = mosHTML::selectList( $tagit, 'tag', 'class="searchbox" size="1"' , 'value', 'text', '' );





  # Build PostCode select list



	$sql	= "SELECT distinct p.pcode as value, p.pcode as text FROM #__ezautos AS p WHERE p.published = 1 AND p.pcode != '' ORDER by p.pcode ASC";

	$database->setQuery($sql);

	if (!$database->query()) {

		echo $database->stderr();

		return;

	}



	$pcodelist[] = mosHTML::makeOption( '', _EZAUTOS_SEARCH_ANYPCODE2 );

	$pcodelist = array_merge( $pcodelist, $database->loadObjectList() );

	$lists['pcode'] = mosHTML::selectList( $pcodelist, 'pcode', 'class="searchbox" size="1"','value', 'text', '');





  # Build transmission select list



	$transit[] = mosHTML::makeOption( '', _EZAUTOS_SEARCH_SELALTRANS2 );

  	$transit[] = mosHTML::makeOption( _EZAUTOS_TRANSTYPE_AUTO2, _EZAUTOS_TRANSTYPE_AUTO2 );

  	$transit[] = mosHTML::makeOption( _EZAUTOS_TRANSTYPE_MAN2, _EZAUTOS_TRANSTYPE_MAN2 );

	$transit[] = mosHTML::makeOption( _EZAUTOS_TRANSTYPE_SEMIA2, _EZAUTOS_TRANSTYPE_SEMIA2 );

  	$transit[] = mosHTML::makeOption( _EZAUTOS_TRANSTYPE_CVT2, _EZAUTOS_TRANSTYPE_CVT2 );

  	$transit[] = mosHTML::makeOption( _EZAUTOS_TRANSTYPE_OTH2, _EZAUTOS_TRANSTYPE_OTH2 );

  

    $lists['trans'] = mosHTML::selectList( $transit, 'trans', 'class="searchbox" size="1"' , 'value', 'text', '' );





  # Build Fuel select list



	$fuel_typeit2[] = mosHTML::makeOption( '', _EZAUTOS_ANY_FUELA );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE2A, _EZAUTOS_FUEL_TYPE2A );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE3A, _EZAUTOS_FUEL_TYPE3A );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE4A, _EZAUTOS_FUEL_TYPE4A );

    $fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE5A, _EZAUTOS_FUEL_TYPE5A );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE6A, _EZAUTOS_FUEL_TYPE6A );

	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE7A, _EZAUTOS_FUEL_TYPE7A );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE8A, _EZAUTOS_FUEL_TYPE8A );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE9A, _EZAUTOS_FUEL_TYPE9A );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE10A, _EZAUTOS_FUEL_TYPE10A );

    $fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE11A, _EZAUTOS_FUEL_TYPE11A );

  	$fuel_typeit2[] = mosHTML::makeOption( _EZAUTOS_FUEL_TYPE13A, _EZAUTOS_FUEL_TYPE13A );



  	$lists['fuel2'] = mosHTML::selectList( $fuel_typeit2, 'fuel', 'class="searchbox" size="1"' , 'value', 'text', '' );





  # Build Colour select list



	$colourit2[] = mosHTML::makeOption( '', _EZAUTOS_ANY_COLOURB );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE2B, _EZAUTOS_COLOUR_TYPE2B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE3B, _EZAUTOS_COLOUR_TYPE3B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE4B, _EZAUTOS_COLOUR_TYPE4B );

    $colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE5B, _EZAUTOS_COLOUR_TYPE5B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE6B, _EZAUTOS_COLOUR_TYPE6B );

	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE7B, _EZAUTOS_COLOUR_TYPE7B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE8B, _EZAUTOS_COLOUR_TYPE8B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE9B, _EZAUTOS_COLOUR_TYPE9B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE10B, _EZAUTOS_COLOUR_TYPE10B );

    $colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE11B, _EZAUTOS_COLOUR_TYPE11B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE12B, _EZAUTOS_COLOUR_TYPE12B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE13B, _EZAUTOS_COLOUR_TYPE13B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE14B, _EZAUTOS_COLOUR_TYPE14B );

    $colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE15B, _EZAUTOS_COLOUR_TYPE15B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE16B, _EZAUTOS_COLOUR_TYPE16B );

	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE17B, _EZAUTOS_COLOUR_TYPE17B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE18B, _EZAUTOS_COLOUR_TYPE18B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE19B, _EZAUTOS_COLOUR_TYPE19B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE20B, _EZAUTOS_COLOUR_TYPE20B );

  	$colourit2[] = mosHTML::makeOption( _EZAUTOS_COLOUR_TYPE21B, _EZAUTOS_COLOUR_TYPE21B );



  	$lists['colour2'] = mosHTML::selectList( $colourit2, 'colour', 'class="searchbox" size="1"' , 'value', 'text', $row->colour );





  # Build the door number list



	$doornum2[] = mosHTML::makeOption( 0, _EZAUTOS_SEARCH_ANYDOORNUMB );

	$doornum2[] = mosHTML::makeOption( 1, _EZAUTOS_SPECS_DOORS1B );

	$doornum2[] = mosHTML::makeOption( 2, _EZAUTOS_SPECS_DOORS2B );

	$doornum2[] = mosHTML::makeOption( 3, _EZAUTOS_SPECS_DOORS3B );

	$doornum2[] = mosHTML::makeOption( 4, _EZAUTOS_SPECS_DOORS4B );

	$doornum2[] = mosHTML::makeOption( 5, _EZAUTOS_SPECS_DOORS5B );

	$doornum2[] = mosHTML::makeOption( 6, _EZAUTOS_SPECS_DOORS6B );

	$doornum2[] = mosHTML::makeOption( 7, _EZAUTOS_SPECS_DOORS7B );

	$doornum2[] = mosHTML::makeOption( 8, _EZAUTOS_SPECS_DOORS8B );

	$doornum2[] = mosHTML::makeOption( 9, _EZAUTOS_SPECS_DOORS9B );



  	$lists['doors2'] = mosHTML::selectList( $doornum2, 'doors', 'class="searchbox" size="1"' , 'value', 'text', $row->doors );





	$bodytype2[] = mosHTML::makeOption( 0, _EZAUTOS_SEARCH_ANYBODYB );

	$bodytype2[] = mosHTML::makeOption( 1, _EZAUTOS_SPECS_BODY1B );

	$bodytype2[] = mosHTML::makeOption( 2, _EZAUTOS_SPECS_BODY2B );

	$bodytype2[] = mosHTML::makeOption( 3, _EZAUTOS_SPECS_BODY3B );

	$bodytype2[] = mosHTML::makeOption( 4, _EZAUTOS_SPECS_BODY4B );

	$bodytype2[] = mosHTML::makeOption( 5, _EZAUTOS_SPECS_BODY5B );

	$bodytype2[] = mosHTML::makeOption( 6, _EZAUTOS_SPECS_BODY6B );

	$bodytype2[] = mosHTML::makeOption( 7, _EZAUTOS_SPECS_BODY7B );

	$bodytype2[] = mosHTML::makeOption( 8, _EZAUTOS_SPECS_BODY8B );

	$bodytype2[] = mosHTML::makeOption( 9, _EZAUTOS_SPECS_BODY9B );

	$bodytype2[] = mosHTML::makeOption( 10, _EZAUTOS_SPECS_BODY10B );

	$bodytype2[] = mosHTML::makeOption( 11, _EZAUTOS_SPECS_BODY11B );

	$bodytype2[] = mosHTML::makeOption( 12, _EZAUTOS_SPECS_BODY12B );



  	$lists['body2'] = mosHTML::selectList( $bodytype2, 'body', 'class="searchbox" size="1"' , 'value', 'text', $row->body );





  # Build Enginesize select list



	$sql	= "SELECT e.engine as value, e.engine as text FROM #__ezautos_enginesize AS e WHERE e.published = 1 ORDER by e.ordering";

	$database->setQuery($sql);

	if (!$database->query()) {

		echo $database->stderr();

		return;

	}



	$enginesizelist2[] = mosHTML::makeOption( '', _EZAUTOS_ANY_ENGB );

	$enginesizelist2 = array_merge( $enginesizelist2, $database->loadObjectList() );

	$lists['engine2'] = mosHTML::selectList( $enginesizelist2, 'engine', 'class="searchbox" size="1"','value', 'text', '');





  # Build min year select list



	$yearlist3 = array();

		$yearlist3[] = mosHTML::makeOption( '0', _EZAUTOS_DDSL_SELMIN2B );

	for($i=$ea_minyear;$i<$ea_maxyear+1;$i++){

		$yearlist3[] = mosHTML::makeOption($i , $i);

	}

  	

	$lists['minyear2'] = mosHTML::selectList($yearlist3, 'minyear', 'class="slimsearchbox" size="1"', 'value', 'text', '');



  # Build max year select list



	$yearlist4 = array();

		$yearlist4[] = mosHTML::makeOption( '0', _EZAUTOS_DDSL_SELMAX2B );

	for($i=$ea_maxyear;$i>$ea_minyear-1;$i--){

		$yearlist4[] = mosHTML::makeOption($i , $i);

	}

  	

	$lists['maxyear2'] = mosHTML::selectList($yearlist4, 'maxyear', 'class="slimsearchbox" size="1"', 'value', 'text', '');







?>

<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/ajax/ajax.js"></script>



<div align="center"><img src="images/cars8x194.jpg" width="258" height="168"> </div>

<table width="100%" cellpadding="10">

  <tr>

    <td><form name="searchfilter" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=results&amp;Itemid=$myItemid");?>" method="post">

        <input type="hidden" name="option" value="com_ezautos" />

        <input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

        <input type="hidden" name="task" value="results" />

        <?php if (!$usecat) { ?>

        <input type="hidden" name="cid" value="0" />

        <?php } ?>

        <?php if (!$usemakmod) { ?>

        <input type="hidden" name="make" value="0" />

        <input type="hidden" name="model" value="0" />

        <?php } ?>

        <?php if (!$usetrans) { ?>

        <input type="hidden" name="trans" value="" />

        <?php } ?>

        <?php if (!$useengine) { ?>

        <input type="hidden" name="engine" value="" />

        <?php } ?>

        <?php if (!$usefuel) { ?>

        <input type="hidden" name="fuel" value="" />

        <?php } ?>

        <?php if (!$usecond) { ?>

        <input type="hidden" name="tag" value="" />

        <?php } ?>

        <?php if (!$usepcode) { ?>

        <input type="hidden" name="pcode" value="" />

        <input type="hidden" name="radius" value="" />

        <?php } ?>

        <?php if (!$usecolour) { ?>

        <input type="hidden" name="colour" value="" />

        <?php } ?>

        <?php if (!$usedoors) { ?>

        <input type="hidden" name="doors" value="0" />

        <?php } ?>

        <?php if (!$usebody) { ?>

        <input type="hidden" name="body" value="0" />

        <?php } ?>

        <?php if (!$usemileage) { ?>

        <input type="hidden" name="maxmiles" value="0" />

        <?php } ?>

        <?php if (!$useyear) { ?>

        <input type="hidden" name="minyear" value="0" />

        <input type="hidden" name="maxyear" value="0" />

        <?php } ?>

        <?php if ($ea_sitetype!=0) { ?>

        <input type="hidden" name="minprice" value="" />

        <input type="hidden" name="maxprice" value="" />

        <?php } ?>

        <table border="0" width="100%" cellspacing="0" cellpadding="5">

          <?php if ( $ea_sitetype==0 ) { ?>

          <tr>

            <td><?php echo $lists['minprice'];?> <?php echo $lists['maxprice'];?></td>

          </tr>

          <?php } ?>

          <?php if ($useyear) { ?>

          <tr>

            <td><?php echo $lists['minyear2'];?> <?php echo $lists['maxyear2'];?></td>

          </tr>

          <?php } ?>

         

         

         

         

         

                  		  <?php /* 

		  // Added by Hrvoje for Country/City search

		  */?>

          <tr>

            <td>

			

			<?php echo $lists['country2'];?></td>

          </tr>

          <tr>

            <td><?php echo $lists['city2'];?>

          

            </td>

          </tr> 

         

         

         

         

         

          <?php if ($usecat) { ?>

          <tr>

            <td><?php echo $lists['cid'];?></td>

          </tr>

          <?php } ?>

		  <?php if ($usemakmod) { ?>

          <tr>

            <td><?php echo $lists['make2'];?></td>

          </tr>

          <tr>

            <td><?php echo $lists['model2'];?></td>

          </tr>

          <?php } ?>

          

     

          <?php if ($usetrans) { ?>

          <tr>

            <td><?php echo $lists['trans'];?></td>

          </tr>

          <?php } ?>

          <?php if ($useengine) { ?>

          <tr>

            <td><?php echo $lists['engine2'];?></td>

          </tr>

          <?php } ?>

          <?php if ($usefuel) { ?>

          <tr>

            <td><?php echo $lists['fuel2'];?></td>

          </tr>

          <?php } ?>

          <?php if ($usecolour) { ?>

          <tr>

            <td><?php echo $lists['colour2'];?></td>

          </tr>

          <?php } ?>

          <?php if ($usedoors) { ?>

          <tr>

            <td><?php echo $lists['doors2'];?></td>

          </tr>

          <?php } ?>

          <?php if ($usebody) { ?>

          <tr>

            <td><?php echo $lists['body2'];?></td>

          </tr>

          <?php } ?>

          <?php if ($usecond) { ?>

          <tr>

            <td><?php echo $lists['tag'];?></td>

          </tr>

          <?php } ?>

          <?php if ($usemileage) { ?>

          <tr>

            <td><strong><?php echo _EZAUTOS_MAXMILB;?>:-</strong><br />

              <input name="maxmiles" class="searchbox" maxlength="10" type="text" /></td>

          </tr>

          <?php } ?>

          <?php if ($usepcode) { ?>

          <tr>

            <td><strong><?php echo _EZAUTOS_SEARCH_PCODEAREA2;?>:-</strong><br />

              <input name="pcode" class="slimfield" maxlength="10" type="text" />

              <?php

			   $radiuslist2[] = mosHTML::makeOption( '', _EZAUTOS_SCH_RADIUS2 );

			   $radiuslist2[] = mosHTML::makeOption( '5', _EZAUTOS_SCH_5B." ".$dtag );

			   $radiuslist2[] = mosHTML::makeOption( '10', _EZAUTOS_SCH_10B." ".$dtag );

			   $radiuslist2[] = mosHTML::makeOption( '20', _EZAUTOS_SCH_20B." ".$dtag );

			   $radiuslist2[] = mosHTML::makeOption( '50', _EZAUTOS_SCH_50B." ".$dtag );

			   $radiuslist2[] = mosHTML::makeOption( '100', _EZAUTOS_SCH_100B." ".$dtag );

			 $my_radius2 = mosHTML::selectList( $radiuslist2, 'radius', 'class="slimsearchbox" size="1"', 'value', 'text', '' );

			 echo $my_radius2;?></td>

          </tr>

          <?php } ?>

          <tr>

            <td><strong><?php echo _EZAUTOS_SEARCH_SEARCHORD2;?>:-</strong><br />

              <select name="direction" class="searchbox">

                <option value="ASCPRICE"><?php echo _EZAUTOS_DDSL_PRASC2;?></option>

                <option value="DESCPRICE"><?php echo _EZAUTOS_DDSL_PRDESC2;?></option>

                <option value="ASCID"><?php echo _EZAUTOS_DDSL_IDASC2;?></option>

                <option value="DESCID"><?php echo _EZAUTOS_DDSL_IDDESC2;?></option>

              </select></td>

          </tr>

          <tr>

            <td><input class="button" type="submit" name="submit" value="<?php echo _EZAUTOS_SEARCH2;?>" /></td>

          </tr>

        </table>

      </form></td>

  </tr>

  <tr>

    <td><div align="center"><a href="index.php?option=com_ezautos&task=search&Itemid=2">Advanced 
        Search </a></div></td>

  </tr>

</table>

