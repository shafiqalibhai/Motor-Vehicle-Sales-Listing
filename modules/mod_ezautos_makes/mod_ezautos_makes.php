<?php



/**

* FileName: mod_ezautos_makes.php

* Date: 3-11-2008

* License: Commercial copyright

* Script Version #: 1.0

* EZ Autos Version #: 5.2.0 stable

* Author: K.J. Strickland - http://www.raptorservices.com.au

*/



// no direct access

defined( '_VALID_MOS' ) or die( 'Restricted access' );





# Kill notices because people panic for no reason

error_reporting(E_ALL ^ E_NOTICE);



# call some core configuration variables:

global $mainframe, $mosConfig_lang;



DEFINE("EZADMIN_PATH14b","administrator/components/com_ezautos");



if (file_exists(EZADMIN_PATH14b."/config.ezautos.php")) {

  include(EZADMIN_PATH14b."/config.ezautos.php");

} else {

echo 'Configuration file not available';

}



$class_sfx = $params->get( 'class_sfx' ) ;

$moduleclass_sfx = $params->get( 'moduleclass_sfx' ) ;



?> 

<table class="moduletable<?php echo $moduleclass_sfx;?>" cellpadding="0" cellspacing="0" width="96%" height="100%">

  <tr>

    <td height="12%">&nbsp;</td>

    <td height="12%">&nbsp;</td>

    <td height="12%">&nbsp;</td>

    <td height="12%">&nbsp;</td>

    <td height="12%">&nbsp;</td>
    <td height="12%">&nbsp;</td>
    <td height="12%">&nbsp;</td>
    <td height="12%">&nbsp;</td>

  </tr>

  <tr>

    <td width="210" height="100%"><?php



  # Do the main database query

	$query = "SELECT aa.*, count(b.make) AS nvehicles"

	. "\n FROM #__ezautos_make AS aa"

	. "\n LEFT JOIN #__ezautos AS b ON aa.maid = b.make"

	. "\n WHERE aa.published='1'"

	. "\n GROUP BY aa.make"

	;

	$database->setQuery( $query );

	$rows = $database->loadObjectList();





    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



    $rowcounter = 0;

	$counter =0;

    foreach($rows as $row) {



?>

      <a class="makelist" href="<?php echo sefRelToAbs("index.php?option=com_ezautos&Itemid=$myItemid&task=results&cid=&trans=&tag=&pcode=&radius=&fuel=&make=$row->maid&model=0&engine=&maxprice=&minprice=&maxyear=0&minyear=0&colour=&doors=0&body=0&maxmiles=&direction=ASCPRICE&limit=10&limitstart=0");?>">

      <font color="#FFFFFF" size="1px"><?php

//if ($row->nvehicles != 0)

{

if($counter <30){

echo $row->make.' ('.$row->nvehicles.')';

echo "</a><br />";

}

$counter++;

}

?>

      <?php

}

}





?>

    </font>   </a></td>

    <td width="210"><?php



  # Do the main database query

	$query = "SELECT aa.*, count(b.make) AS nvehicles"

	. "\n FROM #__ezautos_make AS aa"

	. "\n LEFT JOIN #__ezautos AS b ON aa.maid = b.make"

	. "\n WHERE aa.published='1'"

	. "\n GROUP BY aa.make"

	;

	//$database->setQuery( $query );

	//$rows = $database->loadObjectList();





    //$num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



    $rowcounter = 0;

	$counter =0;

    foreach($rows as $row) {



?>

      <a class="makelist" href="<?php echo sefRelToAbs("index.php?option=com_ezautos&Itemid=$myItemid&task=results&cid=&trans=&tag=&pcode=&radius=&fuel=&make=$row->maid&model=0&engine=&maxprice=&minprice=&maxyear=0&minyear=0&colour=&doors=0&body=0&maxmiles=&direction=ASCPRICE&limit=10&limitstart=0");?>">

     <font color="#FFFFFF" size="1px"> <?php

//if ($row->nvehicles != 0)

{

if($counter >=30 && $counter <60){

echo $row->make.' ('.$row->nvehicles.')';

echo "</a><br />";

}

$counter++;

}

?>

      <?php

}

}





?>

     </font> </a></td> 

    <td width="210"><?php



  # Do the main database query

	$query = "SELECT aa.*, count(b.make) AS nvehicles"

	. "\n FROM #__ezautos_make AS aa"

	. "\n LEFT JOIN #__ezautos AS b ON aa.maid = b.make"

	. "\n WHERE aa.published='1'"

	. "\n GROUP BY aa.make"

	;

	//$database->setQuery( $query );

	//$rows = $database->loadObjectList();





    //$num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



    $rowcounter = 0;

	$counter =0;

    foreach($rows as $row) {



?>

      <a class="makelist" href="<?php echo sefRelToAbs("index.php?option=com_ezautos&Itemid=$myItemid&task=results&cid=&trans=&tag=&pcode=&radius=&fuel=&make=$row->maid&model=0&engine=&maxprice=&minprice=&maxyear=0&minyear=0&colour=&doors=0&body=0&maxmiles=&direction=ASCPRICE&limit=10&limitstart=0");?>">

      <font color="#FFFFFF" size="1px"><?php

//if ($row->nvehicles != 0)

{

if($counter >=60 && $counter <90){

echo $row->make.' ('.$row->nvehicles.')';

echo "</a><br />";

}

$counter++;

}

?>

      <?php

}

}





?>

   </font> </a></td>

    <td width="210"><?php



  # Do the main database query

	$query = "SELECT aa.*, count(b.make) AS nvehicles"

	. "\n FROM #__ezautos_make AS aa"

	. "\n LEFT JOIN #__ezautos AS b ON aa.maid = b.make"

	. "\n WHERE aa.published='1'"

	. "\n GROUP BY aa.make"

	;

	//$database->setQuery( $query );

	//$rows = $database->loadObjectList();





    //$num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



    $rowcounter = 0;

	$counter =0;

    foreach($rows as $row) {



?>

      <a class="makelist" href="<?php echo sefRelToAbs("index.php?option=com_ezautos&Itemid=$myItemid&task=results&cid=&trans=&tag=&pcode=&radius=&fuel=&make=$row->maid&model=0&engine=&maxprice=&minprice=&maxyear=0&minyear=0&colour=&doors=0&body=0&maxmiles=&direction=ASCPRICE&limit=10&limitstart=0");?>">

   <font color="#FFFFFF" size="1">   <?php

//if ($row->nvehicles != 0)

{

if($counter >=90 && $counter < 120){

echo $row->make.' ('.$row->nvehicles.')';

echo "</a><br />";

}

$counter++;

}

?>

      <?php

}

}





?>

    </font> </a></td>

    <td width="210"> 

      <a class="makelist" href="<?php echo sefRelToAbs("index.php?option=com_ezautos&Itemid=$myItemid&task=results&cid=&trans=&tag=&pcode=&radius=&fuel=&make=$row->maid&model=0&engine=&maxprice=&minprice=&maxyear=0&minyear=0&colour=&doors=0&body=0&maxmiles=&direction=ASCPRICE&limit=10&limitstart=0");?>">      </a>

      <?php



  # Do the main database query

	$query = "SELECT aa.*, count(b.make) AS nvehicles"

	. "\n FROM #__ezautos_make AS aa"

	. "\n LEFT JOIN #__ezautos AS b ON aa.maid = b.make"

	. "\n WHERE aa.published='1'"

	. "\n GROUP BY aa.make"

	;

	//$database->setQuery( $query );

	//$rows = $database->loadObjectList();





    //$num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



    $rowcounter = 0;

	$counter =0;

    foreach($rows as $row) {



?>

      <a class="makelist" href="<?php echo sefRelToAbs("index.php?option=com_ezautos&Itemid=$myItemid&task=results&cid=&trans=&tag=&pcode=&radius=&fuel=&make=$row->maid&model=0&engine=&maxprice=&minprice=&maxyear=0&minyear=0&colour=&doors=0&body=0&maxmiles=&direction=ASCPRICE&limit=10&limitstart=0");?>">

  <font color="#FFFFFF" size="1">     <?php

//if ($row->nvehicles != 0)

{

if($counter >=120 && $counter < 150){

echo $row->make.' ('.$row->nvehicles.')';

echo "</a><br />";

}

$counter++;

}

?>

      <?php

}

}





?>

   </font>   </a></td>

  </tr>

  <tr>

    <td height="34">&nbsp;</td>

    <td height="34">&nbsp;</td>

    <td height="34">&nbsp;</td>

    <td height="34">&nbsp;</td>

    <td height="34">&nbsp;</td>

  </tr>

</table>

