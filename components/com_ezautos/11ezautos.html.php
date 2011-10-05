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





function parseThruBots($string)

	{

	global $_MAMBOTS;

	$page = '';

	$_MAMBOTS->loadBotGroup( 'content' );

	$obj = new stdClass;

	$obj->text=$string;

	$params =	new dummy_params_ezautosclass();

	$results = $_MAMBOTS->trigger( 'onPrepareContent', array( &$obj, &$params, $page ), true );   

	$string= $obj->text;

	return $string;

	}



class dummy_params_ezautosclass

	{

	function get()

		{

		$a=0;

		}

	}





class HTML_ezautos {





    /**************************************************\

  		 	FRONT PAGE CATEGORY LIST DISPLAY

    \**************************************************/





function showCategories( $option, &$rows, $bizintro ) {

global $database, $myItemid, $mainframe, $ea_catthumbwidth, $ea_bizintro, $ea_colcount, $ea_colwidth, $mosConfig_live_site;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', _EZAUTOS_CATEGORIES );

$mainframe->setPageTitle( _EZAUTOS_CATEGORIES );





?> 
<p> <BR>
</p>
<table width="100%" border="0">
  <tr> 
    <td valign="top" width="50%"> <table border="0" width="100%" class="listtableborder">
        <tr> 
          <td> <form name="search1" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=multiresults&amp;Itemid=$myItemid");?>" method="post">
              <input type="hidden" name="option2" value="com_ezautos" />
              <input type="hidden" name="Itemid2" value="<?php echo $myItemid;?>" />
              <input type="hidden" name="task2" value="multiresults" />
              <input type="hidden" name="direction2" value="ASCPRICE" />
              <input type="hidden" name="tag2" value="<?php echo _EZAUTOS_TAGIT_NEW;?>" />
			  
              <table width="100%" border="0" cellspacing="2" cellpadding="0">
                <tr> 
                  <td class="sectiontableheader"><?php echo _EZAUTOS_SCH_NEWCARS;?></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td><?php echo $lists['model3']; ?></td>
                </tr>
                <tr> 
                  <td><?php echo $lists['make3']; ?>
                    <input class="button" type="submit" name="submit2" value="<?php echo _EZAUTOS_INCLUDES_SEARCH;?>" /></td></tr>
              </table>
            </form></td>
        </tr>
      </table></td>
    <td width="10"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" width="10" alt="" /></td>
    <td valign="top" width="50%"> <table border="0" width="100%" class="listtableborder">
        <tr> 
          <td> <form name="search2" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=multiresults&amp;Itemid=$myItemid");?>" method="post">
              <input type="hidden" name="option2" value="com_ezautos" />
              <input type="hidden" name="Itemid2" value="<?php echo $myItemid;?>" />
              <input type="hidden" name="task2" value="multiresults" />
              <input type="hidden" name="direction2" value="ASCPRICE" />
              <input type="hidden" name="tag2" value="<?php echo _EZAUTOS_TAGIT_USED;?>" />
             <td height="29"  background="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bartab.gif">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><strong><?php echo _EZAUTOS_CATEGORIES;?></strong></font></td>
			  <table width="100%" border="0" cellspacing="2" cellpadding="0">
                <tr> 
                  <td class="sectiontableheader"><?php echo _EZAUTOS_SCH_USEDCARS;?></td>
                </tr>
                <tr> 
                  <td><?php echo $lists['make4']; ?></td>
                </tr>
                <tr> 
                  <td><?php echo $lists['model4']; ?></td>
                </tr>
                <tr> 
                  <td><input class="button" type="submit" name="submit2" value="<?php echo _EZAUTOS_INCLUDES_SEARCH;?>" /></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p><p>Seach by Vechile Types</p>
<table width="618" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php foreach($bizintro as $row2) { ?>
  <tr> 

    <td><br /> <?php echo stripslashes($row2->content);?><br /></td>

  </tr>

  <?php } ?>

  <tr> 

    <td height="29"  background="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bartab.gif">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><strong><?php echo _EZAUTOS_CATEGORIES;?></strong></font></td>

  </tr>

  <tr> 

    <td valign="top" > 

      <?php



$colcount 	= $ea_colcount;

$colwidth 	= $ea_colwidth;



$count = 0;

$image = array("hatchback.jpg","saloon.jpg","estate.jpg","convertable.jpg","carrier.jpg","coupe.jpg","4x4.jpg","temp1.jpg","temp1.jpg");



echo "<table border='0' width='100%'>";

echo "<tr>";



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



    $rowcounter = 0;

    foreach($rows as $row) {

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

?>

    <td valign="top" width="<?php echo $colwidth;?>" > <table width="98%" border="0" align="left" cellpadding="0" cellspacing="0" onClick="location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewcategory&amp;id=$row->cid");?>'" onMouseOver="EZOver(this)" onMouseOut="EZOut(this)">
        <tr bgcolor="#323232"> 
          <?php if ( $row->image <> "" ){ ?>
          <td width="4%" rowspan="2" valign="top"  > <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewcategory&amp;id=$row->cid");?>"> 
            <img src='<?php echo $mosConfig_live_site;?>/images/stories/<?php echo $row->image;?>' align='left' border='0' width='<?php echo $ea_catthumbwidth;?>' alt='category' /></a> 
          </td>
          <?php } ?>
          <td width="96%" valign="top" > 
            <!-- AFAQ - Table and images added for better look -->
            <table width="304"  border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top" background="/components/com_ezautos/images/greySmaalBoxBGD.gif"><table width="304" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td height="11"><img src="/components/com_ezautos/images/orangecurveTop.gif" width="304" height="11"></td>
                    </tr>
                    <tr> 
                      <td height="27"><table width="100%"  border="0" cellspacing="3" cellpadding="0">
                          <tr> 
                            <td> <span class="h3"> &nbsp;&nbsp;<?php echo $row->name;?> 
                              (<?php echo CountCont( $row->cid ) ?><font size='-7'> 
                              <?php if (CountCont( $row->cid ) == 1 ){ ?>
                              <?php echo _EZAUTOS_VEHICLE;?> 
                              <?php } else { ?>
                              <?php echo _EZAUTOS_VEHICLES;?> 
                              <?php } ?>
                              )</font></span><br> <img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/<?php echo $image[$count++];?>" width = "60" height="35" hspace="7" vspace="2"></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr> 
                      <td valign="top"> <font size='-7'>&nbsp; </font> <?php echo $row->description;?><br> 
                        <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewcategory&amp;id=$row->cid");?>"></a> 
                        &nbsp;&nbsp;<img src="/components/com_ezautos/images/viewVehicles.gif" width="95" height="21" border="0"></td>
                    </tr>
                    <tr> 
                      <td height="11"><img src="/components/com_ezautos/images/greySmallBoxBottom.gif" width="304" height="11"></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr bgcolor="#323232">
          <td class="listtableborder"> <form name="search1" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=multiresults&amp;Itemid=$myItemid");?>" method="post">
              <input type="hidden" name="option" value="com_ezautos" />
              <input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />
              <input type="hidden" name="task" value="multiresults" />
              <input type="hidden" name="direction" value="ASCPRICE" />
              <input type="hidden" name="tag" value="<?php echo _EZAUTOS_TAGIT_NEW;?>" />
            </form></td>
        </tr>
      </table>

      <table border="0" cellpadding="0" cellspacing="0" width="100%" >

        <tr> 

          <td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

        </tr>

      </table></td>

    <?php

	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }



}else{





}



    echo "</tr></table>";



?>

  </tr>

</table>

<?php



}







    /**************************************************\

  		 	FRONT PAGE MULTI LAYOUT DISPLAY

    \**************************************************/





function showMulti( $option, &$rows, $lists, $bizintro ) {

global $database, $myItemid, $mosConfig_live_site, $mainframe, $ea_catthumbwidth, $ea_colcount, $ea_colwidth;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', _EZAUTOS_CATEGORIES );

$mainframe->setPageTitle( _EZAUTOS_CATEGORIES );



?>



<table border="0" width="100%" cellspacing="3" cellpadding="3">

<?php foreach($bizintro as $row2) { ?>



	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><tr>

		<td><br /><?php echo stripslashes($row2->content);?><br /></td>

	</tr>



<?php } ?>



	<tr>

		<td>



<table width="100%" border="0" >

	<tr>

		<td valign="top" width="50%">

		<table border="0" width="100%" class="listtableborder">

			<tr>

				<td>

						<form name="search1" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=multiresults&amp;Itemid=$myItemid");?>" method="post">

						<input type="hidden" name="option" value="com_ezautos" />

						<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

						<input type="hidden" name="task" value="multiresults" />

						<input type="hidden" name="direction" value="ASCPRICE" />

						<input type="hidden" name="tag" value="<?php echo _EZAUTOS_TAGIT_NEW;?>" />

						<table width="100%" border="0" cellspacing="2" cellpadding="0">

							<tr>

								<td class="sectiontableheader"><?php echo _EZAUTOS_SCH_NEWCARS;?></td>

							</tr>

							<tr>

								<td><?php echo $lists['make3']; ?></td>

							</tr>

							<tr>

								<td><?php echo $lists['model3']; ?></td>

							</tr>

							<tr>

								<td><input class="button" type="submit" name="submit" value="<?php echo _EZAUTOS_INCLUDES_SEARCH;?>" /></td>

							</tr>

						</table>

						</form>



				</td>

			</tr>

		</table>

		</td>

<td width="10"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" width="10" alt="" /></td>

		<td valign="top" width="50%">

		<table border="0" width="100%" class="listtableborder">

			<tr>

				<td>

						<form name="search2" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=multiresults&amp;Itemid=$myItemid");?>" method="post">

						<input type="hidden" name="option" value="com_ezautos" />

						<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

						<input type="hidden" name="task" value="multiresults" />

						<input type="hidden" name="direction" value="ASCPRICE" />

						<input type="hidden" name="tag" value="<?php echo _EZAUTOS_TAGIT_USED;?>" />

						<table width="100%" border="0" cellspacing="2" cellpadding="0">

							<tr>

								<td class="sectiontableheader"><?php echo _EZAUTOS_SCH_USEDCARS;?></td>

							</tr>

							<tr>

								<td><?php echo $lists['make4']; ?></td>

							</tr>

							<tr>

								<td><?php echo $lists['model4']; ?></td>

							</tr>

							<tr>

								<td><input class="button" type="submit" name="submit" value="<?php echo _EZAUTOS_INCLUDES_SEARCH;?>" /></td>

							</tr>

						</table>

						</form>



				</td>

			</tr>

		</table>

		</td>

	</tr>
</table>

		</td>

	</tr>

	<tr>
<!--  latest saad! -->


                

              <tr> 

                <td>&nbsp;&nbsp;&nbsp;<span ><font color="#FFCC00"><strong><?php echo _EZAUTOS_FEATURED_LIST;;?></strong></font></span></td>

              </tr>

           



		<table border="0" width="100%">

			<tr>



<?php



if ( $ea_expmgmt==1 ) {



if ( $ea_expsys==0 ) {



	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"

	. "\n FROM #__ezautos AS a"

    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"

    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"

    . "\n WHERE a.published = '1' AND a.featured = 1 AND a.hits<$ea_impnum ORDER BY RAND() LIMIT 3"

	;

	$database->setQuery( $query );



} else {



$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));



	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"

	. "\n FROM #__ezautos AS a"

    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"

    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"

    . "\n WHERE a.published = '1' AND a.featured = 1 AND a.expdate>$currentdate ORDER BY RAND() LIMIT 3"

	;

	$database->setQuery( $query );



}



} else {



	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"

	. "\n FROM #__ezautos AS a"

    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"

    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"

    . "\n WHERE a.published = '1' AND a.featured = 1 ORDER BY RAND() LIMIT 3"

	;

	$database->setQuery( $query );



}



	$rows2 = $database->loadObjectList();

	if ($database->getErrorNum()) {

		echo $database->stderr();

		return false;

	}



    $num_rows2=ceil( count( $rows2 ) / 1 );

	if ($num_rows2 > 0) {



    $rowcounter = 0;

    foreach($rows2 as $row2) {

      if (($rowcounter%3==0) AND ($rowcounter<>0)) echo "</tr><tr>";



		$number = $row2->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



?>



<td valign="top" width="33%"><br />

<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row2->id&amp;Itemid=$myItemid");?>">

<?php if ($row2->image1) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row2->image1;?>" border="0" align="left" style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px; margin-right: 5px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row2->year.' '.$row2->makename.' '.$row2->modelname.' '.$row2->derivative;?>" alt="<?php echo $row2->year.' '.$row2->makename.' '.$row2->modelname.' '.$row2->derivative;?>" />

<?php }else{ ?>
</a><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row2->id&amp;Itemid=$myItemid");?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" align="left" border="0" style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px; margin-right: 5px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row2->year.' '.$row2->makename.' '.$row2->modelname.' '.$row2->derivative;?>" alt="<?php echo $row2->year.' '.$row2->makename.' '.$row2->modelname.' '.$row2->derivative;?>" /></a><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row2->id&amp;Itemid=$myItemid");?>">
<?php } ?>

</a>

<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row2->id&amp;Itemid=$myItemid");?>"><strong><?php echo $row2->year.' '.$row2->makename.' '.$row2->modelname.' '.$row2->derivative;?></strong></a><br />

<span class="h3">

<?php 

if ( $ea_sitetype==0 ) {

	if ( $row2->showprice && $row2->price != 0 ) {

		if ( $ea_currencypos==0 ) {

			echo $ea_currencysign.''.$formatted_price.' '.$row2->price_type;

		} else {

			echo $formatted_price.' '.$ea_currencysign.' '.$row2->price_type;

		}

	} else {

		echo $row2->price_type;

		if (!$row2->price_type) { echo _EZAUTOS_POR; }

	}

	if ( $row2->freq ) {

		if ($row2->freq == 1) { echo _EZAUTOS_RENTAL_DAILY; }

		if ($row2->freq == 2) { echo _EZAUTOS_RENTAL_WEEKLY; }

		if ($row2->freq == 3) { echo _EZAUTOS_RENTAL_FNIGHT; }

		if ($row2->freq == 4) { echo _EZAUTOS_RENTAL_MONTH; }

	}

}

?>

</span>

</td>

<td width="10"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" width="10" alt="" /></td>



<?php



}



	$rowcounter++;

	}

    if ($rowcounter%3<>0) {

      for ($i = 1; $i <= (3-($rowcounter%3)); $i++) {

        echo "<td width='33%' valign='top'> </td>";

      }

    }



    echo "</tr></table>";



?>


		

	</tr>

	<tr>

		<td valign="top">



		<table border="0" width="100%" class="listtableborder">

			<tr>

				<td>

<table border="0" cellpadding="0" cellspacing="5" width="100%" class="listbkgr">

	<tr>

		<td class="h2"><?php echo _EZAUTOS_VEHICLE_CATEGORIES;?></td>

	</tr>



	<tr>

		<td>



<?php



$colcount 	= $ea_colcount;

$colwidth 	= $ea_colwidth;





echo "<table border='0' width='100%'>";

echo "<tr>";



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



    $rowcounter = 0;

    foreach($rows as $row) {

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

?>



		<td valign="top" width="<?php echo $colwidth;?>">

			<table border="0" width="100%" cellpadding="5">

				<tr>

					<td valign="top">

						<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=viewcategory&amp;id=$row->cid&amp;Itemid=$myItemid");?>"><strong><?php echo $row->name;?></strong></a>

					</td>

				</tr>

			</table>

		</td>



<?php

	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }



}else{





}



    echo "</tr></table>";



?>



</td>

	</tr>



</table>

</td>

	</tr>



</table>





</td>

	</tr>

</table>



















<?php



}







    /**************************************************\

  		 	FRONT PAGE MAKE LIST DISPLAY

    \**************************************************/





function showMakes( $option, &$rows, $bizintro ) {

global $database, $mosConfig_live_site, $myItemid, $mainframe, $ea_catthumbwidth, $ea_bizintro, $ea_colcount, $ea_colwidth;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', _EZAUTOS_LISTS_MAKES );

$mainframe->setPageTitle( _EZAUTOS_LISTS_MAKES );



?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

<?php foreach($bizintro as $row2) { ?>



	<tr>

		<td><br /><?php echo stripslashes($row2->content);?><br /></td>

	</tr>



<?php } ?>

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_LISTS_MAKES;?></td>

	</tr>



	<tr>

		<td valign="top">



<?php



$colcount 	= $ea_colcount;

$colwidth 	= $ea_colwidth;





echo "<table border='0' width='100%'>";

echo "<tr>";



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





    $rowcounter = 0;

    foreach($rows as $row) {

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

?>



		<td valign="top" width="<?php echo $colwidth;?>">

			<table border="0" width="100%" cellpadding="5" onclick="location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewmodels&amp;id=$row->maid");?>'">

				<tr>

					<td valign="top"><div align="center">



						<a class="makemodel" href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewmodels&amp;id=$row->maid");?>'><?php echo $row->make;?></a> <span class="small">(<?php echo CountCont2( $row->maid ) ?>)</span><br />



<?php if ( $row->make_image <> "" ){ ?>

					<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewmodels&amp;id=$row->maid");?>">

					<img src="<?php echo $mosConfig_live_site;?>/images/stories/<?php echo $row->make_image;?>" border="0" alt="" /></a><br />

<?php } ?>



					</div></td>

				</tr>

			</table>

		</td>



<?php

	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }



}else{





}



    echo "</tr></table>";



?>



		</td>

	</tr>





</table>

			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

				<tr>

					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

				</tr>

			</table>



<?php



}







    /**************************************************\

  		 	SHOW LIST OF MODELS

    \**************************************************/





function viewModels( $option, &$rows, $id, $makename ) {

global $database, $myItemid, $mainframe, $ea_catthumbwidth, $ea_bizintro, $ea_colcount, $ea_colwidth;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', $makename.' '._EZAUTOS_LISTS_MODELS );

$mainframe->setPageTitle( $makename.' '._EZAUTOS_LISTS_MODELS );



?>



<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo $makename;?> <?php echo _EZAUTOS_LISTS_MODELS;?></td>

	</tr>



	<tr>

		<td valign="top">



<?php





    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





$colcount 	= $ea_colcount;

$colwidth 	= $ea_colwidth;





echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

?>



		<td valign="top" width="<?php echo $colwidth;?>">

			<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)" onclick="location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=listcontents&amp;id=$row->moid");?>'">

				<tr>

					<td valign="top"><div align="center">

						<a class="makemodel" href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=listcontents&amp;id=$row->moid");?>'><?php echo $row->model;?></a> <span class="small">(<?php echo CountCont3( $row->moid ) ?>)</span><br />

					</div></td>

				</tr>

			</table>

		</td>



<?php

	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";





}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><br /><?php echo _EZAUTOS_RESULTS_NORESULTS;?><br /><br /><br /></td>

	</tr>

</table>



<?php



}





?>





		</td>

	</tr>

</table>

			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

				<tr>

					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

				</tr>

			</table>



<?php



}







    /**************************************************\

                MODEL CONTENTS DISPLAY

    \**************************************************/





function listContents( $option, &$rows, $id, &$pageNav, $total, $modelname ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $ea_currencysign, $ea_thumbwidth;

global $ea_perpage, $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos, $ea_listtemplate;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



  include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title', $modelname );

$mainframe->setPageTitle( $modelname );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}





?>





<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo $modelname;?></td>

	</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";





if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	} 



}



}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><br /><?php echo _EZAUTOS_NO_MODELS;?><br /><br /><br /></td>

	</tr>

</table>

			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

				<tr>

					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

				</tr>

			</table>



<?php



}



?>



<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />

<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task=listcontents&amp;id='.$id .'&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>



<?php





}









    /**************************************************\

                CATEGORY CONTENTS DISPLAY

    \**************************************************/





function viewCategory( $option, &$rows, $id, $category, &$pageNav, $total ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $ea_currencysign, $ea_thumbwidth;

global $ea_perpage, $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos, $ea_listtemplate;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title', $category->name );

$mainframe->setPageTitle( $category->name );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}



?>





<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo $category->name;?></td>

	</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	} 



}



}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><br /><?php echo _EZAUTOS_NOCATLISTINGS;?><br /><br /><br /></td>

	</tr>

</table>

			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

				<tr>

					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

				</tr>

			</table>



<?php



}



?>



<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />

<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task=viewcategory&amp;id='.$id .'&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>



<?php





}





    /**************************************************\

           DISPLAY DETAILS OF THE SELECTED ITEM

    \**************************************************/





function viewDetails( $option, &$row, $ezlogo, $page=0 ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $ea_bizname, $id, $my, $gid, $ea_template, $ea_usesms;

global $ea_currencysign, $ea_imgwidth, $ea_thumbwidth, $ea_imagedirectory, $ea_viewenq, $ea_viewrecommend, $ea_structure;

global $ea_viewmailing, $ea_sitetype, $ea_thumbcreation, $ea_mobile, $ea_currencyformat, $ea_currencypos, $ea_profsys, $ea_profaccess;

global $ea_useprofile, $ea_shortlist, $mosConfig_absolute_path, $ea_mapwidth, $ea_mapheight, $ea_usemap;

global $ea_useflv, $ea_flvwidth, $ea_flvheight, $ea_profaccess;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");



DEFINE("MAINTEMPLATE_PATH","components/com_ezautos/forms/templates/".$ea_template);





$mainframe->appendMetaTag( 'description', 	$row->metadesc );

$mainframe->appendMetaTag( 'keywords', 		$row->metakey );

$mainframe->appendMetaTag( 'title', 		$row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative );

$mainframe->setPageTitle( $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative );





if (file_exists(MAINTEMPLATE_PATH.'/viewdetails.ezautos.php')) {

  include(MAINTEMPLATE_PATH.'/viewdetails.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



}





    /**************************************************\

     PREVIEW DETAILS OF THE SELECTED ITEM VIA USER PANEL

    \**************************************************/





function previewDetails( $option, &$row, $ezlogo, $page=0 ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $ea_bizname, $id, $my, $gid, $ea_template, $ea_currencysign;

global $ea_imgwidth, $ea_thumbwidth, $ea_imagedirectory, $ea_viewenq, $ea_viewrecommend, $ea_viewmailing, $ea_sitetype;

global $ea_thumbcreation, $ea_mobile, $ea_currencyformat, $ea_currencypos, $ea_structure, $ea_usesms, $ea_profsys, $ea_profaccess;

global $ea_useprofile, $ea_bizlogo, $ea_shortlist, $mosConfig_absolute_path, $ea_mapwidth, $ea_mapheight, $ea_usemap;

global $ea_useflv, $ea_flvwidth, $ea_flvheight, $ea_profaccess;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");



DEFINE("MAINTEMPLATE_PATH","components/com_ezautos/forms/templates/".$ea_template);





$mainframe->appendMetaTag( 'description', 	$row->metadesc );

$mainframe->appendMetaTag( 'keywords', 		$row->metakey );

$mainframe->appendMetaTag( 'title', 		$row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative );

$mainframe->setPageTitle( $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative );



if (file_exists(MAINTEMPLATE_PATH.'/viewdetails.ezautos.php')) {

  include(MAINTEMPLATE_PATH.'/viewdetails.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





}



    /**************************************************\

                DISPLAY DETAILS FOR PRINTING

    \**************************************************/





function printDetails( $option, &$row, $ezlogo, $page=0 ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $ea_bizname, $id, $my, $ea_template, $ea_currencysign, $ea_sitetype;

global $ea_imgwidth, $ea_thumbwidth, $ea_imagedirectory, $ea_viewenq, $ea_viewrecommend, $ea_viewmailing, $ea_profsys, $ea_profaccess;

global $ea_thumbcreation, $ea_mobile, $ea_currencyformat, $ea_currencypos, $ea_structure, $ea_usesms, $gid;

global $ea_useprofile, $ea_shortlist, $mosConfig_absolute_path, $ea_mapwidth, $ea_mapheight, $ea_usemap, $ea_profaccess;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");



DEFINE("PRINTTEMPLATE_PATH","components/com_ezautos/forms/print");



$mainframe->appendMetaTag( 'description', 	$row->metadesc );

$mainframe->appendMetaTag( 'keywords', 		$row->metakey );

$mainframe->appendMetaTag( 'title', 		$row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative );

$mainframe->setPageTitle( $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative );



if (file_exists(PRINTTEMPLATE_PATH.'/print.ezautos.php')) {

  include(PRINTTEMPLATE_PATH.'/print.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





}





    /**************************************************\

                SHOW THE NEW LISTINGS

    \**************************************************/





function newListings( $option, &$rows ) {

global $database, $myItemid, $mainframe, $id, $mosConfig_live_site, $ea_currencysign, $ea_listtemplate;

global $ea_thumbwidth, $ea_perpage, $ea_newlist, $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title', _EZAUTOS_NEW_LISTINGS );

$mainframe->setPageTitle( _EZAUTOS_NEW_LISTINGS );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}





?>



<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

		<tr>

			<td class="sectiontableheader"><?php echo _EZAUTOS_NEW_LISTINGS;?></td>

		</tr>

</table>



<?php





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%'    bgcolor=\"#323232\"     >";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	} 



}





}







    /**************************************************\

                SHOW ALL OF THE LISTINGS

    \**************************************************/





function listAll( $option, &$rows ) {

global $database, $myItemid, $mainframe, $id, $mosConfig_live_site, $ea_currencysign, $ea_listtemplate;

global $ea_thumbwidth, $ea_perpage, $ea_newlist, $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $ea_currencypos;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



$mainframe->appendMetaTag( 'title', _EZAUTOS_CURRENT_STOCK );

$mainframe->setPageTitle( _EZAUTOS_CURRENT_STOCK );



?>



<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

		<tr>

			<td class="sectiontableheader"><?php echo _EZAUTOS_CURRENT_STOCK;?></td>

		</tr>

</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td><table border="0" width="97%" cellpadding="3" cellspacing="0">

        <?php



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];





$link2 = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=detail&amp;id='. $row->id .'&amp;Itemid='. $myItemid );



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



?>

        <tr class="sectiontableentry<?php echo ($k+1); ?>"> 

          <td class="liner"><?php echo $row->year;?></td>

          <td class="liner"><a href="<?php echo $link2; ?>"><?php echo $row->makename.' '.$row->modelname.' '.$row->derivative.' - '.stripslashes($row->cityname).', '.stripslashes($row->countryname);?></a></td>

          <td class="liner"> 

            <?php if ( $ea_sitetype==0 ) {

if ( $row->showprice ) {

	if ( $ea_currencypos==0 ) {

		echo $ea_currencysign.''.$formatted_price.' '.$row->price_type;

	} else {

		echo $formatted_price.' '.$ea_currencysign.' '.$row->price_type;

	}

} else {

	echo $row->price_type;

		if (!$row->price_type) { echo _EZAUTOS_POR; }

}



if ( $row->freq ) {

	if ($row->freq == 1) { echo _EZAUTOS_RENTAL_DAILY; }

	if ($row->freq == 2) { echo _EZAUTOS_RENTAL_WEEKLY; }

	if ($row->freq == 3) { echo _EZAUTOS_RENTAL_FNIGHT; }

	if ($row->freq == 4) { echo _EZAUTOS_RENTAL_MONTH; }

}

}

?>

          </td>

          <td class="liner"> 

            <?php if ($row->engine && $row->engine !=0) { echo $row->engine; } ?>

          </td>

          <td class="liner"> 

            <?php

if ($row->trans == 0) { echo _EZAUTOS_TRANSTYPE_NS; }

if ($row->trans == 1) { echo _EZAUTOS_TRANSTYPE_AUTO; }

if ($row->trans == 2) { echo _EZAUTOS_TRANSTYPE_MAN; }

if ($row->trans == 3) { echo _EZAUTOS_TRANSTYPE_SEMIA; }

if ($row->trans == 4) { echo _EZAUTOS_TRANSTYPE_CVT; }

if ($row->trans == 5) { echo _EZAUTOS_TRANSTYPE_OTH; }

?>

          </td>

          <td class="liner"> 

            <?php 



if ( $row->doors) {

if ( $row->doors != 0 ) {

if ($row->doors == 0) {

		echo _EZAUTOS_SPECS_DOORSNS;

}

if ($row->doors == 1) {

		echo _EZAUTOS_SPECS_DOORS1;

}

if ($row->doors == 2) {

		echo _EZAUTOS_SPECS_DOORS2;

}

if ($row->doors == 3) {

		echo _EZAUTOS_SPECS_DOORS3;

}

if ($row->doors == 4) {

		echo _EZAUTOS_SPECS_DOORS4;

}

if ($row->doors == 5) {

		echo _EZAUTOS_SPECS_DOORS5;

}

if ($row->doors == 6) {

		echo _EZAUTOS_SPECS_DOORS6;

}

if ($row->doors == 7) {

		echo _EZAUTOS_SPECS_DOORS7;

}

if ($row->doors == 8) {

		echo _EZAUTOS_SPECS_DOORS8;

}

if ($row->doors == 9) {

		echo _EZAUTOS_SPECS_DOORS9;

}

echo ' '._EZAUTOS_SPECS_DOORS.' ';

}

}



if ($row->body !='0'){

if ($row->body > 1 && $row->body <13){

if ($row->body == 1) { echo _EZAUTOS_SPECS_BODY1; }

if ($row->body == 2) { echo _EZAUTOS_SPECS_BODY2; }

if ($row->body == 3) { echo _EZAUTOS_SPECS_BODY3; }

if ($row->body == 4) { echo _EZAUTOS_SPECS_BODY4; }

if ($row->body == 5) { echo _EZAUTOS_SPECS_BODY5; }

if ($row->body == 6) { echo _EZAUTOS_SPECS_BODY6; }

if ($row->body == 7) { echo _EZAUTOS_SPECS_BODY7; }

if ($row->body == 8) { echo _EZAUTOS_SPECS_BODY8; }

if ($row->body == 9) { echo _EZAUTOS_SPECS_BODY9; }

if ($row->body == 10) { echo _EZAUTOS_SPECS_BODY10; }

if ($row->body == 11) { echo _EZAUTOS_SPECS_BODY11; }

if ($row->body == 12) { echo _EZAUTOS_SPECS_BODY12; }

}else{

echo $row->body;

}

}

?>

            <?php if ( $row->doorsbody && !$row->doors OR !$row->body ) { ?>

            <?php echo $row->doorsbody;?> 

            <?php } ?>

          </td>

        </tr>

        <?php





	} 



?>

      </table></td>

  </tr>

</table>

<?php



}









    /**************************************************\

                FEATURED LISTINGS DISPLAY

    \**************************************************/





function featuredList( $option, &$rows, &$pageNav, $total ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $ea_currencysign, $ea_thumbwidth;

global $ea_perpage, $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos, $ea_listtemplate;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title', _EZAUTOS_FEATURED_LIST );

$mainframe->setPageTitle( _EZAUTOS_FEATURED_LIST );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}



?>

<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_FEATURED_LIST;?></td>

	</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



	if ($ea_listtemplate == 'multicolumn') {



echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	} 



}



}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><br /><?php echo _EZAUTOS_EMPTY_FEATURED;?><br /><br /><br /></td>

	</tr>

</table>

			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

				<tr>

					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

				</tr>

			</table>



<?php



}



?>



<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task=featured&amp;id='.$id .'&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>



<?php





}







    /**************************************************\

                LIST SHORTLIST CONTENTS

    \**************************************************/





function viewLightbox( $option, &$rows, $id ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $ea_currencysign, $ea_thumbwidth;

global $ea_perpage, $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos, $ea_listtemplate;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title', _EZAUTOS_MY_LIGHTBOX );

$mainframe->setPageTitle( _EZAUTOS_MY_LIGHTBOX );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}



?>





<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_MY_LIGHTBOX;?></td>

	</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	} 



}



}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><br /><?php echo _EZAUTOS_EMPTY_LIGHTBOX;?><br /><br /><br /></td>

	</tr>

</table>

			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

				<tr>

					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

				</tr>

			</table>



<?php



}





}







    /**************************************************\

                SHOW THE LEADS SUBMISSION PAGE

    \**************************************************/





function showLeads( $option, $lists ) {

	global $database, $myItemid, $mainframe, $mosConfig_live_site, $mosConfig_usecaptcha;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', _EZAUTOS_LEADS_SUBTITLE );

$mainframe->setPageTitle( _EZAUTOS_LEADS_SUBTITLE );

$mainframe->appendMetaTag( 'description', 	_EZAUTOS_LEADS_INTRO );





if ( $ea_reglead ){



	# Submit Lead Form Check



?>

		<script type="text/javascript">

		<!--

		function validatelead() {

			var form = document.reglead;

			// do field validation

			if (form.lead_name.value == "") {

				alert( "<?php echo _EZAUTOS_LM_ERROR1;?>" );

			} else if (form.email.value == "") {

				alert( "<?php echo _EZAUTOS_LM_ERROR2;?>" );

			} else if (form.cid.value == "") {

				alert( "<?php echo _EZAUTOS_LM_ERROR3;?>" );

			} else if (form.make.value == "0") {

				alert( "<?php echo _EZAUTOS_LM_ERROR4;?>" );

			} else if (form.maxprice.value == "") {

				alert( "<?php echo _EZAUTOS_LM_ERROR6;?>" );

			} else {

				document.reglead.action = 'index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>';

				document.reglead.submit();



			}

		}

		//-->

		</script>



<br />



<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_LEADS_SUBTITLE;?></td>

	</tr>

	<tr>

		<td><br /><?php echo _EZAUTOS_LEADS_INTRO;?></td>

	</tr>

</table>



<br />

<br />



<form name="reglead" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid");?>" method="post">



	<input type="hidden" name="option" value="com_ezautos" />

	<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

	<input type="hidden" name="task" value="savelead" />

	<input type="hidden" name="lid" value="<?php echo $row->lid;?>" />



<div align="center">

<table cellpadding="5" cellspacing="5" border="0" width="90%">

	<tr>

		<td class="sectiontableheader" valign="top" colspan="3" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_LCONTACT;?>:</td>

	</tr>





		<tr>

			<td valign="top" width="170" align="<?php echo $ea_textalign;?>"><br /><?php echo _EZAUTOS_LEADS_LNAME;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br /><input class="inputbox" type="text" name="lead_name" maxlength="100" size="30" /></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_HPHONE;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="hphone" maxlength="100" size="30" /></td>

			<td valign="top" align="<?php echo $ea_textalign;?>">&nbsp;</td>

		</tr>

<!--saad-->

		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_WPHONE;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="wphone" maxlength="100" size="30" /></td>

			<td valign="top" align="<?php echo $ea_textalign;?>">&nbsp;</td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_MOBILE;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="mobile" maxlength="100" size="30" /></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_SELLER_SMS5;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_FAX;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="fax" maxlength="100" size="30" /></td>

			<td valign="top" align="<?php echo $ea_textalign;?>">&nbsp;</td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_LEMAIL;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="email" maxlength="100" size="30" /> </td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?><br /><br /></td>

		</tr>



	<tr>

    	<td class="sectiontableheader" valign="top" colspan="3" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_DETAILS;?>:</td>

	</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo _EZAUTOS_LEADS_CAT;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo $lists['cid']; ?> </td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_MAK;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo $lists['make3']; ?></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_MOD;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo $lists['model3']; ?></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>









		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_COUNTRY_NAME;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo $lists['country2']; ?></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_CITY_NAME;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo $lists['city2']; ?></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>





















		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LM_BUDGET;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo $lists['maxprice']; ?></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LMIN_YEAR;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo $lists['minyear'];?></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LMAX_YEAR;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo $lists['maxyear'];?></td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_GENERIC_REQ;?><br /><br /></td>

		</tr>





	<tr>

    	<td class="sectiontableheader" valign="top" colspan="3" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_NOTPUBL;?>:</td>

	</tr>



	<tr>

		<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo _EZAUTOS_LEADS_PUBLISHONWANTED;?>:</td>

		<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo $lists['listwanted']; ?></td>

		<td valign="top" align="<?php echo $ea_textalign;?>"><br />&nbsp;</td>

	</tr>



	<tr>

    	<td class="sectiontableheader" valign="top" colspan="3" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_LEADS_FEEDBACK;?>:</td>

	</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo _EZAUTOS_LEADS_SOURCE;?>:</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br />

			<select name="source" class="searchbox"> 

			<option value="<?php echo _EZAUTOS_LEADS_SOURCE5;?>"><?php echo _EZAUTOS_LEADS_SOURCE5;?></option>

			<option value="<?php echo _EZAUTOS_LEADS_SOURCE2;?>"><?php echo _EZAUTOS_LEADS_SOURCE2;?></option>

			<option value="<?php echo _EZAUTOS_LEADS_SOURCE3;?>"><?php echo _EZAUTOS_LEADS_SOURCE3;?></option>

			<option value="<?php echo _EZAUTOS_LEADS_SOURCE4;?>"><?php echo _EZAUTOS_LEADS_SOURCE4;?></option>

			<option value="<?php echo _EZAUTOS_LEADS_SOURCE1;?>"><?php echo _EZAUTOS_LEADS_SOURCE1;?></option>

			</select>

			</td>

			<td><br /><?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>"><br /><?php echo _EZAUTOS_LEADS_COMMENTS;?>:<br /></td>

			<td colspan="2" valign="top" align="<?php echo $ea_textalign;?>"><br />
          <textarea class="inputbox" rows="8" name="comments" cols="60"></textarea>
          <br /><br /></td>

		</tr>



					<?php if ($mosConfig_usecaptcha == '1') { ?>

					<tr><td colspan="3" valign="top" align="<?php echo $ea_textalign;?>">

					<br /><?php echo _EZAUTOS_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />

					<img src="<?php echo $mosConfig_live_site;?>/includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />

					</td></tr>

					<?php } ?>					





		<tr>

			<td valign="top" align="<?php echo $ea_textalign;?>">&nbsp;</td>

			<td valign="top" align="<?php echo $ea_textalign;?>"><input type="button" name="<?php echo _EZAUTOS_LEADS_SUBMIT;?>" value="<?php echo _EZAUTOS_LEADS_SUBMIT;?>" class="button" onclick="validatelead()" /></td>

			<td valign="top" align="<?php echo $ea_textalign;?>">&nbsp;</td>

		</tr>

	</table>

</div>

</form>



<?php } else { ?>



<br />



<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td><?php echo _EZAUTOS_LEADS_NOTON;?></td>

	</tr>

</table>



<br />

<br />



<?php



	}

}







    /**************************************************\

                SHOW THE VEHICLES WANTED PAGE

    \**************************************************/





function showWanted( $option, $rows ){

	global $database, $myItemid, $mainframe, $ea_reglead, $ea_perpage, $mosConfig_live_site, $ea_textalign, $ea_currencyformat;



  include(EZADMIN_PATH."/config.ezautos.php");





$mainframe->appendMetaTag( 'title', 	_EZAUTOS_VEHICLES_WANTED );

$mainframe->setPageTitle( _EZAUTOS_VEHICLES_WANTED );

$mainframe->appendMetaTag( 'description', 	_EZAUTOS_VEHICLES_WANTEDDESC );



if ( $ea_reglead ){



?>



<br />



<table width="100%" border="0" cellspacing="1" cellpadding="4">

	<tr>

		<td class="sectiontableheader"><strong><?php echo _EZAUTOS_VEHICLES_WANTED;?></strong></td>

	</tr>

	<tr>

		<td><br /><?php echo _EZAUTOS_VEHICLES_WANTEDDESC;?></td>

	</tr>

</table>





<p>&nbsp;</p>

<table width="618"  border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/upperGreyCurve.gif" width="618" height="11"></td>

  </tr>

  <tr> 

    <td valign="top" background="/components/com_ezautos/images/greyCurveBGD.gif"><table width="618" border="0" cellspacing="1" cellpadding="4">

        <tr> 

          <td width="26" bgcolor="f4960f" ><font color="#FFFFFF"><strong>ID#</strong></font></td>

          <td width="81" bgcolor="f4960f" ><font color="#FFFFFF"><strong><?php echo _EZAUTOS_LEADS_CAT;?></strong></font></td>

          <td width="81" bgcolor="f4960f" ><font color="#FFFFFF"><strong><?php echo _EZAUTOS_VLDET_LOCATION;?></strong></font></td>

          <td width="81" bgcolor="f4960f" ><font color="#FFFFFF"><strong><?php echo _EZAUTOS_LISTINGS_MM;?></strong></font></td>

          <td width="81" bgcolor="f4960f" ><font color="#FFFFFF"><strong><?php echo _EZAUTOS_LEADS_BUDGET;?></strong></font></td>

          <td width="56" bgcolor="f4960f" ><font color="#FFFFFF"><strong><?php echo _EZAUTOS_VEHICLES_AGERANGE;?></strong></font></td>

          <td width="148" bgcolor="f4960f" ><font color="#FFFFFF"><strong><?php echo _EZAUTOS_INTERESTED;?></strong></font></td>

        </tr>

      </table>

      <?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



			$k = 0;

			for ($i=0, $n=count( $rows ); $i < $n; $i++) {

			$row = &$rows[$i];



		$number = $row->maxprice;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}





$status2 = 'status=no,toolbar=no,scrollbars=no,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';

$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=enquire&amp;id='.$row->lid.'&amp;Itemid='.$myItemid;

												

        ?>

      <table width="616" border="0" align="center" cellpadding="4" cellspacing="1" >

        <tr bgcolor="323232"> 

          <td width="26" valign="top"><?php echo $row->lid;?></td>

          <td width="81" valign="top"><?php echo $row->category;?></td>

          <td width="81" valign="top"><?php echo stripslashes($row->cityname).', '.stripslashes($row->countryname);?></td>

          <td width="81" valign="top"><?php echo $row->makename.' '.$row->modelname;?></td>

          <td width="81" valign="top"> 

            <?php

if ( $ea_currencypos==0 ) {

echo $ea_currencysign.''.$formatted_price;

} else {

echo $formatted_price.' '.$ea_currencysign;

}

?>

          </td>

          <td width="56" valign="top"><?php echo $row->minyear.' - '.$row->maxyear;?></td>

          <td width="146" valign="top"><a href="javascript:void(0)" onclick="window.open('<?php echo $link2; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZAUTOS_EA;?>"><?php echo _EZAUTOS_EA;?></a></td>

        </tr>

      </table>

      

    </td>

  </tr>

  <tr> 

    <td height="12" valign="top"><img src="/components/com_ezautos/images/lowerGreyCurve.gif" width="618" height="11"></td>

  </tr>

</table>

<div align="center"> </div>



<div align="center"> 

  

</div>



<?php



	} 



}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><?php echo _EZAUTOS_RESULTS_NORESULTS;?></td>

	</tr>

</table>



<?php



}



} else { ?>



<br />



<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td><?php echo _EZAUTOS_LEADS_NOTON;?></td>

	</tr>

</table>



<br />

<br />



<?php



}



}







    /**************************************************\

           SHOW SALES LEAD ENQUIRY FORM

    \**************************************************/





function leadEnquiry( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $ea_reglead, $mosConfig_usecaptcha, $ea_textalign;



  include(EZADMIN_PATH."/config.ezautos.php");





$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=enquiry2&amp;Itemid='. $myItemid;



if ( $ea_reglead ){





?>

		<script type="text/javascript">

		<!--

		function validateviewing() {

			var form = document.viewing;

			// do field validation

			if (form.enqname.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR1;?>" );

			} else if (form.enqmail.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR2;?>" );

			} else if (form.telephone.value == "") {

				alert( "<?php echo _EEZAUTOS_EMAIL_ERROR3;?>" );

				

			} else if (form.country3.value == "") {

			alert( "<?php echo _EZAUTOS_COUNTRY_ERROR1;?>" );

			} else if (form.city3.value == "") {

			alert( "<?php echo _EZAUTOS_CITY_ERROR1;?>" );

			

				

			} else if (form.enqmessage.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR9;?>" );

			} else {

				document.viewing.action = '<?php echo $link2; ?>';

				document.viewing.submit();



			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="3">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_LEADCONTACT_PROMO;?> (id# <?php echo $row->lid;?>)</td>

	</tr>

</table>



		<form class="form" name="viewing" action="<?php echo $link2;?>" method="post">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="enquiry2" />

			<input type="hidden" name="lid" value="<?php echo $lid;?>" />



				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">

					<tr><td width="30%" valign="top"><?php echo _EZAUTOS_VIEWDET_VNAME;?>:<br /><input type="text" name="enqname" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_VIEWDET_VMAIL;?>:<br /><input type="text" name="enqmail" size="18" class="inputbox" maxlength="100" /></td></tr>

						<tr><td width="30%" valign="top"><?php echo _EZAUTOS_VIEWDET_VPHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_SELLER_SMS10;?>:<br /><textarea name="enqmessage" class="inputbox" rows="3" cols="18"></textarea></td></tr>



					<?php if ($mosConfig_usecaptcha == '1') { ?>

					<tr><td colspan="2" valign="top">

					<br /><?php echo _EZAUTOS_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />

					<img src="<?php echo $mosConfig_live_site;?>/includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />

					</td></tr>

					<?php } ?>					



					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZAUTOS_VIEWDET_SEND;?>" value="<?php echo _EZAUTOS_VIEWDET_SEND;?>" class="button" onclick="validateviewing()" /></td></tr>

				</table>

		</form>



<?php



	}



}











    /**************************************************\

                SHOW THE UNSUBSCRIBE FORM

    \**************************************************/





function unsubscribeLeads( $option ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha, $ea_textalign;



  include(EZADMIN_PATH."/config.ezautos.php");





$link2 = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=unsubscribevip&amp;Itemid='. $myItemid );





	# Add to Mailing List Form Check



?>

		<script type="text/javascript">

		<!--

		function validateunsub() {

			var form = document.vipunsubs;

			// do field validation

			if (form.email.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR2;?>" );

			} else {

				document.vipunsubs.action = '<?php echo $link2; ?>';

				document.vipunsubs.submit();

			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="3">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_LEADS_UNSUBSCRIBE;?></td>

	</tr>

	<tr>

		<td><br /><?php echo _EZAUTOS_LEADS_UNSUBSCRIBE_INSTRUCTIONS;?><br /><br /></td>

	</tr>

</table>



<form class="form" name="vipunsubs" action="<?php echo $link2;?>" method="post">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="unsubscribevip" />



<div align="center">

				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">

					<tr><td width="100%" valign="top"><?php echo _EZAUTOS_VIEWDET_VMAIL;?>:<br /><input type="text" name="email" size="35" class="inputbox" maxlength="50" /></td></tr>





					<tr><td valign="top"><input type="button" name="<?php echo _EZAUTOS_UNSUBSCRIBE;?>" value="<?php echo _EZAUTOS_UNSUBSCRIBE;?>" class="button" onclick="validateunsub()" /></td></tr>

				</table>

</div>

</form>



<?php



  }













    /**************************************************\

                SHOW THE SEARCH FORM

    \**************************************************/





function itemSearch( $option, $lists ) {

	global $database, $myItemid, $mainframe, $mosConfig_live_site, $option, $ea_usecat, $ea_usemakmod;

	global $ea_usetrans, $ea_usefuel, $ea_usecond, $ea_usepcode, $ea_minyear, $ea_maxyear, $ea_useeng;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', 	_EZAUTOS_SEARCHADV );

$mainframe->setPageTitle( _EZAUTOS_SEARCHADV );





if ($ea_raddistance == 6378.7){

$dtag = _EZAUTOS_SCH_K;

} elseif ($ea_raddistance == 3963.0){

$dtag = _EZAUTOS_SCH_SM;

} elseif ($ea_raddistance == 3437.74677){

$dtag = _EZAUTOS_SCH_NM;

}





?>



<table width="90%" align="center" cellpadding="5"><tr><td>





<table width="100%" cellpadding="10" class="listtableborder"><tr><td>

	<form name="searchfilter" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=results");?>" method="post">

	<input type="hidden" name="option" value="com_ezautos" />

	<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

	<input type="hidden" name="task" value="results" />

<?php if (!$ea_usecat) { ?>

	<input type="hidden" name="cid" value="0" />

<?php }

if (!$ea_usemakmod) { ?>

	<input type="hidden" name="make" value="0" />

	<input type="hidden" name="model" value="0" />

<?php }

if (!$ea_usetrans) { ?>

	<input type="hidden" name="trans" value="" />

<?php }

if (!$ea_useeng) { ?>

	<input type="hidden" name="engine" value="" />

<?php }

if (!$ea_usefuel) { ?>

	<input type="hidden" name="fuel" value="" />

<?php }

if (!$ea_usecond) { ?>

	<input type="hidden" name="tag" value="" />

<?php }

if (!$ea_usepcode) { ?>

	<input type="hidden" name="pcode" value="" />

	<input type="hidden" name="radius" value="" />

<?php }

if (!$ea_usecolour) { ?>

	<input type="hidden" name="colour" value="" />

<?php }

if (!$ea_usedoors) { ?>

	<input type="hidden" name="doors" value="0" />

<?php }

if (!$ea_usebody) { ?>

	<input type="hidden" name="body" value="0" />

<?php }

if (!$ea_maxmiles) { ?>

	<input type="hidden" name="maxmiles" value="0" />

<?php }

if (!$ea_useyear) { ?>

	<input type="hidden" name="minyear" value="0" />

	<input type="hidden" name="maxyear" value="0" />

<?php }

if ($ea_sitetype!=0) { ?>

	<input type="hidden" name="minprice" value="" />

	<input type="hidden" name="maxprice" value="" />

<?php } ?>







<table border="0" width="100%">

	<tr>

		<td class="h2"><?php echo _EZAUTOS_SEARCHADV;?></td>

	</tr>

	<tr>

		<td>

		

		<table border="0" cellspacing="2" cellpadding="5">

<?php if ($ea_usecond) { ?>

	<tr>

		<td><?php echo _EZAUTOS_VLDET_TAG;?>:-</td>

		<td colspan="2"><?php echo $lists['tag'];?></td>

	</tr>

<?php }

if ($ea_usecat) { ?>

	<tr>

		<td><?php echo _EZAUTOS_SEARCHVEHTYPE;?>:-</td>

		<td colspan="2"><?php echo $lists['cid'];?></td>

	</tr>

<?php }

if ( $ea_sitetype==0 ) { ?>

	<tr>

		<td width="130"><?php echo _EZAUTOS_SEARCHPRICE;?>:-</td>

		<td><?php echo $lists['minprice'];?></td>

		<td><?php echo $lists['maxprice'];?></td>

	</tr>

<?php }

if ($ea_useyear) { ?>

	<tr>

		<td width="130"><?php echo _EZAUTOS_SEARCH_AGERANGE;?>:-</td>

		<td><?php echo $lists['minyear'];?></td>

		<td><?php echo $lists['maxyear'];?></td>

	</tr>







	<tr>

		<td><?php echo _EZAUTOS_SEARCH_COUNTRY.' / '. _EZAUTOS_SEARCH_CITY;?>:-</td>

		<td><?php echo $lists['country2'];?></td>

		<td><?php echo $lists['city2'];?></td>

	</tr>







<?php }

if ($ea_usemakmod) { ?>

	<tr>

		<td><?php echo _EZAUTOS_SEARCH_MAKE.' / '. _EZAUTOS_SEARCH_MODEL;?>:-</td>

		<td><?php echo $lists['make3'];?></td>

		<td><?php echo $lists['model3'];?></td>

	</tr>

<?php }?>













<?php if ($ea_useeng) { ?>

	<tr>

		<td><?php echo _EZAUTOS_VLDET_ENG;?>:-</td>

		<td colspan="2"><?php echo $lists['engine'];?></td>

	</tr>

<?php }

if ($ea_usetrans) { ?>

	<tr>

		<td><?php echo _EZAUTOS_DDSL_TRANS;?>:-</td>

		<td colspan="2"><?php echo $lists['trans'];?></td>

	</tr>

<?php }

if ($ea_usefuel) { ?>

	<tr>

		<td><?php echo _EZAUTOS_VLDET_FUEL;?>:-</td>

		<td colspan="2"><?php echo $lists['fuel'];?></td>

	</tr>

<?php }

if ($ea_usecolour) { ?>

	<tr>

		<td><?php echo _EZAUTOS_VLDET_COLOUR;?>:-</td>

		<td colspan="2"><?php echo $lists['colour'];?></td>

	</tr>

<?php }

if ($ea_usedoors) { ?>

	<tr>

		<td><?php echo _EZAUTOS_SEARCH_DOORS;?>:-</td>

		<td colspan="2"><?php echo $lists['doors'];?></td>

	</tr>

<?php }

if ($ea_usebody) { ?>

	<tr>

		<td><?php echo _EZAUTOS_SPECS_BODY;?>:-</td>

		<td colspan="2"><?php echo $lists['body'];?></td>

	</tr>

<?php }

if ($ea_maxmiles) { ?>

	<tr>

		<td><?php echo _EZAUTOS_SCHMILES;?>:-</td>

		<td colspan="2"><input name="maxmiles" class="searchbox2" maxlength="10" type="text" /></td>

	</tr>

<?php }

if ($ea_usepcode){ ?>

	<tr>

		<td><?php echo _EZAUTOS_SEARCH_PCODEAREA;?>:-</td>

		<td colspan="2"><input name="pcode" class="slimfield" maxlength="6" type="text" /> 

<?php



			   $radiuslist[] = ezauHTML::makeOption( '', _EZAUTOS_SCH_RADIUS );

			   $radiuslist[] = ezauHTML::makeOption( '5', _EZAUTOS_SCH_5." ".$dtag );

			   $radiuslist[] = ezauHTML::makeOption( '10', _EZAUTOS_SCH_10." ".$dtag );

			   $radiuslist[] = ezauHTML::makeOption( '20', _EZAUTOS_SCH_20." ".$dtag );

			   $radiuslist[] = ezauHTML::makeOption( '50', _EZAUTOS_SCH_50." ".$dtag );

			   $radiuslist[] = ezauHTML::makeOption( '100', _EZAUTOS_SCH_100." ".$dtag );

			 $my_radius = ezauHTML::selectList( $radiuslist, 'radius', 'class="slimfield2" size="1"', 'value', 'text', '' );

			 echo $my_radius;?></td>

	</tr>

<?php } ?>





	<tr>

		<td><?php echo _EZAUTOS_SEARCH_SEARCHORD;?>:-</td>

		<td colspan="2"><select name="direction" class="searchbox2"> 

		<option value="ASCPRICE"><?php echo _EZAUTOS_DDSL_PRASC;?></option>

                            <option value="DESCPRICE"><?php echo _EZAUTOS_DDSL_PRDESC;?></option>

                            <option value="ASCID"><?php echo _EZAUTOS_DDSL_IDASC;?></option>

                            <option value="DESCID"><?php echo _EZAUTOS_DDSL_IDDESC;?></option>

		</select></td>

	</tr>

	<tr>

		<td></td>

		<td colspan="2"><input class="button" type="submit" name="submit" value="<?php echo _EZAUTOS_INCLUDES_SEARCH;?>" /></td>

	</tr>

</table>



	</td>

	</tr>

	</table>

	</form>

</td></tr></table>



<br /><br /><br />



</td></tr></table>



<?php





}





    /**************************************************\

                SHOW THE FILTERED SEARCH RESULTS

    \**************************************************/





function searchFilteredResults( $option, &$rows, &$pageNav, $total ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $ea_currencysign, $ea_thumbwidth, $ea_perpage;

global $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos, $ea_listtemplate;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title', _EZAUTOS_RESULTS_RESULTS );

$mainframe->setPageTitle( _EZAUTOS_RESULTS_RESULTS );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}



?>



<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

		<tr>

			<td class="sectiontableheader"><?php echo _EZAUTOS_RESULTS_RESULTS;?></td>

		</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";





if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}





if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





	} 



}





?>







<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;task=<?php echo $_REQUEST['task'];?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />

<input type="hidden" name="cid" value="<?php echo $_REQUEST['cid'];?>" />

<input type="hidden" name="trans" value="<?php echo $_REQUEST['trans'];?>" />

<input type="hidden" name="tag" value="<?php echo $_REQUEST['tag'];?>" />

<input type="hidden" name="pcode" value="<?php echo $_REQUEST['pcode'];?>" />

<input type="hidden" name="radius" value="<?php echo $_REQUEST['radius'];?>" />

<input type="hidden" name="fuel" value="<?php echo $_REQUEST['fuel'];?>" />

<input type="hidden" name="make" value="<?php echo $_REQUEST['make'];?>" />

<input type="hidden" name="model" value="<?php echo $_REQUEST['model'];?>" />

<input type="hidden" name="engine" value="<?php echo $_REQUEST['engine'];?>" />

<input type="hidden" name="maxprice" value="<?php echo $_REQUEST['maxprice'];?>" />

<input type="hidden" name="minprice" value="<?php echo $_REQUEST['minprice'];?>" />

<input type="hidden" name="maxyear" value="<?php echo $_REQUEST['maxyear'];?>" />

<input type="hidden" name="minyear" value="<?php echo $_REQUEST['minyear'];?>" />

<input type="hidden" name="colour" value="<?php echo $_REQUEST['colour'];?>" />

<input type="hidden" name="doors" value="<?php echo $_REQUEST['doors'];?>" />

<input type="hidden" name="body" value="<?php echo $_REQUEST['body'];?>" />

<input type="hidden" name="maxmiles" value="<?php echo $_REQUEST['maxmiles'];?>" />

<input type="hidden" name="direction" value="<?php echo $_REQUEST['direction'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task='.$_REQUEST['task'].'&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>



<?php





}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><?php echo _EZAUTOS_RESULTS_NORESULTS;?></td>

	</tr>

</table>



<?php



}





}







    /**************************************************\

                SHOW THE FILTERED MULTILAYOUT SEARCH RESULTS

    \**************************************************/





function multiResults( $option, &$rows, &$pageNav, $total ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $ea_currencysign, $ea_thumbwidth, $ea_perpage;

global $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos, $ea_listtemplate;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title', _EZAUTOS_RESULTS_RESULTS );

$mainframe->setPageTitle( _EZAUTOS_RESULTS_RESULTS );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}



?>



<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

		<tr>

			<td class="sectiontableheader"><?php echo _EZAUTOS_RESULTS_RESULTS;?></td>

		</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";





if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}





if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





	} 



}





?>







<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;task=<?php echo $_REQUEST['task'];?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />

<input type="hidden" name="make" value="<?php echo $_REQUEST['make'];?>" />

<input type="hidden" name="model" value="<?php echo $_REQUEST['model'];?>" />

<input type="hidden" name="tag" value="<?php echo $_REQUEST['tag'];?>" />

<input type="hidden" name="direction" value="<?php echo $_REQUEST['direction'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task='.$_REQUEST['task'].'&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>



<?php





}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><?php echo _EZAUTOS_RESULTS_NORESULTS;?></td>

	</tr>

</table>



<?php



}





}







    /**************************************************\

                SHOW THE JOIN MAILING LIST FORM

    \**************************************************/





function mailList( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;



include(EZADMIN_PATH."/config.ezautos.php");



$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=joinmaillist&amp;Itemid='. $myItemid;



	# Add to Mailing List Form Check



?>

<script type="text/javascript">

		<!--

		function validatemaillist() {

			var form = document.maillist;

			// do field validation

			if (form.name.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR1;?>" );

			} else if (form.email.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR2;?>" );

			} else if (form.listinterest.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR7;?>" );

			} else {

				document.maillist.action = '<?php echo $link2; ?>';

				document.maillist.submit();

			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_JOIN_US;?></td>

	</tr>

	<tr>

		<td align="center"><br /><?php echo _EZAUTOS_JOIN_SPEIL;?></td>

	</tr>

</table>



		<form class="form" name="maillist" action="<?php echo $link2;?>" method="post">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="joinmaillist" />

			<input type="hidden" name="id" value="<?php echo $row->id;?>" />



				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">

					<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_NAME;?>:<br /><input type="text" name="name" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_MAIL;?>:<br /><input type="text" name="email" size="18" class="inputbox" maxlength="100" /></td></tr>

					<tr><td colspan="2" valign="top"><?php echo _EZAUTOS_YOUR_INTERESTS;?>:<br /><textarea name="listinterest" class="inputbox" rows="3" cols="40"></textarea></td></tr>



					<?php if ($mosConfig_usecaptcha == '1') { ?>

					<tr><td colspan="2" valign="top">

					<br /><?php echo _EZAUTOS_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />

					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />

					</td></tr>

					<?php } ?>					



					<tr><td colspan="2" valign="top"><div align="center"><br /><br /><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validatemaillist()" /></div></td></tr>

				</table>

		</form>



<?php



  }







    /**************************************************\

           SHOW CONTACT ADMIN EMAIL FORM

    \**************************************************/





function bookAdmin( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;





$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=mailadmin&amp;Itemid='. $myItemid;





	# Add to Mailing List Form Check



?>

<script type="text/javascript">

		<!--

		function validateenquiry() {

			var form = document.enquiry;

			// do field validation

			if (form.name.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR1;?>" );

			} else if (form.email.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR2;?>" );

			} else if (form.telephone.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR3;?>" );

			} else if (form.short_message.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR9;?>" );

			} else {

				document.enquiry.action = '<?php echo $link2; ?>';

				document.enquiry.submit();



			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_ASK_US;?></td>

	</tr>

</table>



		<form class="form" name="enquiry" action="<?php echo $link2;?>" method="post">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="mailadmin" />

			<input type="hidden" name="id" value="<?php echo $id;?>" />

				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">

					<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_NAME;?>:<br /><input type="text" name="name" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_MAIL;?>:<br /><input type="text" name="email" size="18" class="inputbox" maxlength="100" /></td></tr>

						<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_PHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_MSG;?>:<br /><textarea name="short_message" class="inputbox" rows="3" cols="18"></textarea></td></tr>



					<?php if ($mosConfig_usecaptcha == '1') { ?>

					<tr><td colspan="2" valign="top">

					<br /><?php echo _EZAUTOS_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />

					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />

					</td></tr>

					<?php } ?>					



					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validateenquiry()" /></td></tr>

				</table>

		</form>



<?php



  }





    /**************************************************\

                SHOW RECOMMEND TO FRIEND FORM

    \**************************************************/





function recommendListing( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;





$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=sendrecommend&amp;Itemid='. $myItemid;



	# Recommend to friend Form Check



?>

<script type="text/javascript">

		<!--

		function validaterecommend() {

			var form = document.recommend;

			// do field validation

			if (form.fromname.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR1;?>" );

			} else if (form.frommail.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR2;?>" );

			} else if (form.friendname.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR5;?>" );

			} else if (form.friendmail.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR6;?>" );

			} else {

				document.recommend.action = '<?php echo $link2; ?>';

				document.recommend.submit();



			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_SEND_FRIEND;?></td>

	</tr>

</table>



		<form class="form" name="recommend" action="<?php echo $link2;?>" method="post">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="sendrecommend" />

			<input type="hidden" name="id" value="<?php echo $id;?>" />

				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">

					<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_NAME;?>:<br /><input type="text" name="fromname" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_MAIL;?>:<br /><input type="text" name="frommail" size="18" class="inputbox" maxlength="100" /></td></tr>

						<tr><td width="30%" valign="top"><?php echo _EZAUTOS_FRIENDS_NAME;?>:<br /><input type="text" name="friendname" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_FRIENDS_MAIL;?>:<br /><input type="text" name="friendmail" size="18" class="inputbox" maxlength="100" /></td></tr>



					<?php if ($mosConfig_usecaptcha == '1') { ?>

					<tr><td colspan="2" valign="top">

					<br /><?php echo _EZAUTOS_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />

					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />

					</td></tr>

					<?php } ?>					



					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validaterecommend()" /></td></tr>

				</table>

		</form>



<?php



  }







    /**************************************************\

        SHOW CONTACT VEHICLE OWNER FORM - for use with the new profile contacts on the full details apge

    \**************************************************/





function contactSeller( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;





$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=sendcontactseller&amp;Itemid='. $myItemid;



	# Add to Mailing List Form Check



?>

<script type="text/javascript">

		<!--

		function validateenquiry() {

			var form = document.enquiry;

			// do field validation

			if (form.name.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR1;?>" );

			} else if (form.email.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR2;?>" );

			} else if (form.telephone.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR3;?>" );

			} else if (form.short_message.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR9;?>" );

			} else {

				document.enquiry.action = '<?php echo $link2; ?>';

				document.enquiry.submit();



			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_VIEWDET_SELLER_VIEWING;?></td>

	</tr>

</table>



		<form class="form" name="enquiry" action="<?php echo $link2;?>" method="post">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="sendcontactseller" />

<input type="hidden" name="id" value="<?php echo $row->id;?>" />

<input type="hidden" name="mid" value="<?php echo $row->owner;?>" />

				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">

					<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_NAME;?>:<br /><input type="text" name="name" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_MAIL;?>:<br /><input type="text" name="email" size="18" class="inputbox" maxlength="100" /></td></tr>

						<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_PHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_MSG;?>:<br /><textarea name="short_message" class="inputbox" rows="3" cols="18"></textarea></td></tr>



					<?php if ($mosConfig_usecaptcha == '1') { ?>

					<tr><td colspan="2" valign="top">

					<br /><?php echo _EZAUTOS_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />

					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />

					</td></tr>

					<?php } ?>					



					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validateenquiry()" /></td></tr>

				</table>

		</form>



<?php



  }





    /**************************************************\

               SHOW CONTACT OWNER BY SMS FORM - for use with the new profile contacts on the full details apge

    \**************************************************/





function smsSeller( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $ea_memlistings, $ea_mobile;



include(EZADMIN_PATH."/config.ezautos.php");



$link1 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=send_sms&amp;Itemid='. $myItemid;



?>



<script type="text/javascript">

		<!--

		function validatesms() {

			var form = document.form1;

			// do field validation

			if (form.user.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS15;?>" );

			} else if (form.password.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS16;?>" );

			} else if (form.from.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS17;?>" );

			} else if (form.text.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS18;?>" );

			} else if (form.api_id.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS20;?>" );



			} else {

				document.form1.action = '<?php echo $link1; ?>';

				document.form1.submit();

			}

		}

		//-->

		</script>





<table width="100%" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_SELLER_SMS6;?></td>

	</tr>

</table>

<br />

<br />

<div align="center">

	<table border="0" width="470" cellspacing="0" cellpadding="0">

		<tr>

			<td width="60%" valign="top">



	<table border="1" width="100%" cellspacing="0" cellpadding="5">

		<tr>

			<td width="100%" valign="top">



		<form class="form" name="form1" action="<?php echo $link1;?>" method="get">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="send_sms" />

			<input type="hidden" name="id" value="<?php echo $row->id;?>" />

			<input type="hidden" name="mid" value="<?php echo $row->owner;?>" />



			<table border="0" width="100%">

				<tr>

					<td valign="top" width="100%" colspan="3" align="center" class="sectiontableheader"><strong><?php echo _EZAUTOS_SELLER_SMS22;?></strong></td>

				</tr>

				<tr>

					<td valign="top" width="47%">

					<?php echo _EZAUTOS_SELLER_SMS7;?>:<br /><input type="text" name="user" id="user" size="19" class="inputbox" maxlength="50" /></td>

					<td valign="top" width="6%">&nbsp;</td>

					<td valign="top" width="47%">

					<?php echo _EZAUTOS_SELLER_SMS8;?>:<br /><input type="password" name="password" id="password" size="19" class="inputbox" maxlength="50" /></td>

				</tr>

				<tr>

					<td valign="top" width="47%"><?php echo _EZAUTOS_SELLER_SMS19;?>:<br /><input type="text" name="api_id" id="api_id" size="19" class="inputbox" maxlength="50" /></td>

					<td valign="top" width="6%">&nbsp;</td>

					<td valign="top" width="47%"><?php echo _EZAUTOS_SELLER_SMS9;?>:<br /><input type="text" name="from" id="from" size="19" class="inputbox" maxlength="50" /></td>

				</tr>

				<tr>

					<td valign="top" width="100%" colspan="3">

					<?php echo _EZAUTOS_SELLER_SMS10;?>:<br /><textarea name="text" id="text" class="inputbox" rows="2" cols="44" maxlength="150"></textarea><br />(<?php echo _EZAUTOS_SELLER_SMS21;?>)

					</td>

				</tr>

				<tr>

					<td valign="bottom" width="100%" colspan="3"><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validatesms()" /> <input class="button" type="reset" name="<?php echo _EZAUTOS_RESET;?>" value="<?php echo _EZAUTOS_RESET;?>"></td>

				</tr>

			</table>



</form>



</td>

		</tr>

			</table>



			</td>

			<td width="40%" valign="top">



	<table border="0" width="100%" cellspacing="5" cellpadding="5">

		<tr>

			<td width="100%" valign="top">



<strong><?php echo _EZAUTOS_SELLER_SMS23;?></strong><br />

<?php echo _EZAUTOS_SELLER_SMS3;?> <a href="http://affiliates.clickatell.com/central/campaigns/redir.php?cid=2662">Clickatell</a> <?php echo _EZAUTOS_SELLER_SMS4;?>

<br />

<br />

<?php echo _EZAUTOS_SELLER_SMS5;?>

</td>



</td>

				</tr>

	  </table>



		</tr>

	</table>

</div>



<br />





<?php



  }







    /**************************************************\

      SHOW CONTACT DEALER/SELLER PRIVATELY VIA THE PROFILE PAGE TO EMAIL FORM

    \**************************************************/





function contactProfile( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;





$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=sendcontactprofile&amp;Itemid='. $myItemid;





?>

<script type="text/javascript">

		<!--

		function validateenquiry2() {

			var form = document.enquiry2;

			// do field validation

			if (form.name.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR1;?>" );

			} else if (form.email.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR2;?>" );

			} else if (form.telephone.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR3;?>" );

			} else if (form.short_message.value == "") {

				alert( "<?php echo _EZAUTOS_EMAIL_ERROR9;?>" );

			} else {

				document.enquiry2.action = '<?php echo $link2; ?>';

				document.enquiry2.submit();



			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_PROFILE_SENDCONTACT;?></td>

	</tr>

</table>



<form class="form" name="enquiry2" action="<?php echo $link2;?>" method="post">

<input type="hidden" name="option" value="com_ezautos" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="sendcontactprofile" />

<input type="hidden" name="mid" value="<?php echo $row->mid;?>" />



				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">

					<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_NAME;?>:<br /><input type="text" name="name" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_MAIL;?>:<br /><input type="text" name="email" size="18" class="inputbox" maxlength="100" /></td></tr>

						<tr><td width="30%" valign="top"><?php echo _EZAUTOS_YOUR_PHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>

						<td width="30%" valign="top"><?php echo _EZAUTOS_MSG;?>:<br /><textarea name="short_message" class="inputbox" rows="3" cols="18"></textarea></td></tr>



					<?php if ($mosConfig_usecaptcha == '1') { ?>

					<tr><td colspan="2" valign="top">

					<br /><?php echo _EZAUTOS_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />

					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />

					</td></tr>

					<?php } ?>					



	<tr>

		<td colspan="2" valign="top"><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validateenquiry2()" /></td>

	</tr>

</table>



</form>



<?php



  }







    /**************************************************\

       SHOW CONTACT DEALER/OWNER PRIVATELY VIA THE PROFILE PAGE BY SMS FORM

    \**************************************************/





function smsProfile( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site;



$link1 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=sendprofilesms&amp;Itemid='. $myItemid;



?>



<script type="text/javascript">

		<!--

		function validatesms1() {

			var form = document.form1;

			// do field validation

			if (form.user.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS15;?>" );

			} else if (form.password.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS16;?>" );

			} else if (form.from.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS17;?>" );

			} else if (form.text.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS18;?>" );

			} else if (form.api_id.value == "") {

				alert( "<?php echo _EZAUTOS_SELLER_SMS20;?>" );



			} else {

				document.form1.action = '<?php echo $link1; ?>';

				document.form1.submit();

			}

		}

		//-->

		</script>





<table width="100%" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_PROFILE_SMSCONTACT;?></td>

	</tr>

</table>

<br />

<br />

<div align="center">



<table border="0" width="470" cellspacing="0" cellpadding="0">

	<tr>

		<td width="60%" valign="top">

			<table border="1" width="100%" cellspacing="0" cellpadding="5">

				<tr>

					<td width="100%" valign="top">



						<form class="form" name="form1" action="<?php echo $link1;?>" method="get">

						<input type="hidden" name="option" value="com_ezautos" />

						<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

						<input type="hidden" name="task" value="sendprofilesms" />

						<input type="hidden" name="mid" value="<?php echo $row->mid;?>" />



			<table border="0" width="100%">

				<tr>

					<td valign="top" width="100%" colspan="3" align="center" class="sectiontableheader"><strong><?php echo _EZAUTOS_SELLER_SMS22;?></strong></td>

				</tr>

				<tr>

					<td valign="top" width="47%">

					<?php echo _EZAUTOS_SELLER_SMS7;?>:<br /><input type="text" name="user" id="user" size="19" class="inputbox" maxlength="50" /></td>

					<td valign="top" width="6%">&nbsp;</td>

					<td valign="top" width="47%">

					<?php echo _EZAUTOS_SELLER_SMS8;?>:<br /><input type="password" name="password" id="password" size="19" class="inputbox" maxlength="50" /></td>

				</tr>

				<tr>

					<td valign="top" width="47%"><?php echo _EZAUTOS_SELLER_SMS19;?>:<br /><input type="text" name="api_id" id="api_id" size="19" class="inputbox" maxlength="50" /></td>

					<td valign="top" width="6%">&nbsp;</td>

					<td valign="top" width="47%"><?php echo _EZAUTOS_SELLER_SMS9;?>:<br /><input type="text" name="from" id="from" size="19" class="inputbox" maxlength="50" /></td>

				</tr>

				<tr>

					<td valign="top" width="100%" colspan="3">

					<?php echo _EZAUTOS_SELLER_SMS10;?>:<br /><textarea name="text" id="text" class="inputbox" rows="2" cols="44" maxlength="150"></textarea><br />(<?php echo _EZAUTOS_SELLER_SMS21;?>)

					</td>

				</tr>

				<tr>

					<td valign="bottom" width="100%" colspan="3"><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validatesms1()" /> <input class="button" type="reset" name="<?php echo _EZAUTOS_RESET;?>" value="<?php echo _EZAUTOS_RESET;?>"></td>

				</tr>

			</table>

						</form>

					</td>

				</tr>

			</table>

		</td>

		<td width="40%" valign="top">

	<table border="0" width="100%" cellspacing="5" cellpadding="5">

		<tr>

			<td width="100%" valign="top">



<strong><?php echo _EZAUTOS_SELLER_SMS23;?></strong><br />

<?php echo _EZAUTOS_SELLER_SMS3;?> <a href="http://affiliates.clickatell.com/central/campaigns/redir.php?cid=2662">Clickatell</a> <?php echo _EZAUTOS_SELLER_SMS4;?>

<br />

<br />

<?php echo _EZAUTOS_SELLER_SMS5;?>

</td>



</td>

				</tr>

	</table>

		</td>

	</tr>

</table>

</div>

<br />





<?php



  }









    /**************************************************\

      			  SHOW ADD NEW MAKE FORM

    \**************************************************/





function editMake( $option, $row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site;





$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=savemake&amp;Itemid='. $myItemid;





	# Add Make Form Check



?>



<script type="text/javascript">

		<!--

		function validatemake() {

			var form = document.newmake;

			// do field validation

    		if (form.make.value == ""){

     		alert( "<?php echo _EZAUTOS_MAKE_ERROR1;?>" );

			} else {

				document.newmake.action = '<?php echo $link2; ?>';

				document.newmake.submit();



			}

		}

		//-->

		</script>

<!-- here-->



<table width="100%" cellspacing="0" cellpadding="3" bgcolor="#525252">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_GENERIC_ADD .' '. _EZAUTOS_MAKE_STITLE;?></td>

	</tr>

</table>



		<form class="form" name="newmake" action="<?php echo $link2;?>" method="post" >

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="savemake" />

			<input type="hidden" name="maid" value="<?php echo $row->maid;?>" />



	<table width="100%" border="0" cellpadding="4" cellspacing="0" class="adminform" bgcolor="#525252">

		<tr class="row0">

			<td width="200"><?php echo _EZAUTOS_MAKE_NAME;?>:</td>

			<td><input class="inputbox" type="text" name="make" size="30" maxlength="100" value="<?php echo $row->make;?>" /></td>

		</tr>

	</table>

	

<br /><br />



<div align="center"><input type="button" name="<?php echo _EZAUTOS_CHECK_GO;?>" value="<?php echo _EZAUTOS_CHECK_GO;?>" class="button" onclick="validatemake()" /></div>



</form>





<?php



  }





    /**************************************************\

      			  SHOW ADD NEW MODEL FORM

    \**************************************************/





function editModel( $option, $row, $lists ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site;





$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=savemodel&amp;Itemid='. $myItemid;





	# Add Model Form Check



?>



<script type="text/javascript">

		<!--

		function validatemodel() {

			var form = document.newmodel;

			 // do field validation

			if (form.name.value == ""){

				alert( "<?php echo _EZAUTOS_MODEL_ERROR1;?>" );

			} else if (form.makeid.value == "0"){

				alert( "<?php echo _EZAUTOS_MAKE_ERROR1;?>" );

			} else {

				document.newmodel.action = '<?php echo $link2; ?>';

				document.newmodel.submit();



			}

		}

		//-->

		</script>



<table width="100%" cellspacing="0" cellpadding="3">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_GENERIC_ADD .' '. _EZAUTOS_MODEL_STITLE;?></td>

	</tr>

</table>



		<form class="form" name="newmodel" action="<?php echo $link2;?>" method="post">

			<input type="hidden" name="option" value="com_ezautos" />

			<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

			<input type="hidden" name="task" value="savemodel" />

			<input type="hidden" name="moid" value="<?php echo $row->moid;?>" />



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">

        <tr class="row1">

            <td width="200"><?php echo _EZAUTOS_DDSL_MAKE;?>:</td>

            <td><?php echo $lists['makeid']; ?></td>

        </tr>

		<tr class="row0">

			<td width="200"><?php echo _EZAUTOS_MODEL_NAME;?>:</td>

			<td><input class="inputbox" type="text" name="model" size="30" maxlength="100" value="<?php echo $row->model;?>" /></td>

		</tr>

	</table>

<br /><br />



<div align="center"><input type="button" name="<?php echo _EZAUTOS_CHECK_GO;?>" value="<?php echo _EZAUTOS_CHECK_GO;?>" class="button" onclick="validatemodel()" /></div>



</form>





<?php



  }











    /**************************************************\

       DISPLAY A LIST OF DEALER/SELLER PROFILE RESULTS

    \**************************************************/





function dealerResults( $option, &$rows, &$pageNav, $total, $lists ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $my, $ea_catthumbwidth, $ea_perpage;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', 	_EZAUTOS_RESULTS_RESULTS );

$mainframe->setPageTitle( _EZAUTOS_RESULTS_RESULTS );



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



?>





<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_RESULTS_RESULTS;?></td>

	</tr>

</table>





<?php



			$k = 0;

			for ($i=0, $n=count( $rows ); $i < $n; $i++) {

				$row = &$rows[$i];



        ?>



<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)" onclick="location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=showprofile&amp;id=$row->mid");?>'">

	<tr>

		<td valign="top" width="<?php echo $ea_catthumbwidth;?>">

		<?php if ( !$row->dealer_image ) { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/nothumb.jpg" alt="" align="left" width="60" hspace="10" />

		<?php } else { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" width="60" hspace="10" />

		<?php } ?>

		</td>

		<td valign="top"><span class="h3"><?php echo $row->dealer_name;?> - <?php echo $row->dealer_company;?></span><br />

		<?php echo _EZAUTOS_PROFILE_LOCALITY;?>:&nbsp;<?php echo $row->dealer_locality;?><br />

		<?php echo $row->dealer_info;?><br />... <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=showprofile&amp;id=$row->mid&amp;Itemid=$myItemid");?>"><strong><?php echo _EZAUTOS_PROFILER_CBPROFILE;?></strong></a>

		</td>

	</tr>

</table>



<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

	<tr>

		<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

	</tr>

</table>



<?php



    } 



?>



<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;task=<?php echo $_REQUEST['task'];?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />

<input type="hidden" name="dealer_locality" value="<?php echo $_REQUEST['dealer_locality'];?>" />

<input type="hidden" name="dealer_type" value="<?php echo $_REQUEST['dealer_type'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task='.$_REQUEST['task'].'&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>



<?php





}else{





?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td colspan='2' class='sectiontableheader' width='100%'><?php echo _EZAUTOS_RESULTS_RESULTS;?></td>

	</tr>

	<tr>

		<td class='h3'><br /><?php echo _EZAUTOS_RESULTS_NORESULTS;?></td>

	</tr>

</table>



<?php



}



?>



<br />



<?php



  # Define dealer/seller type



	$dealer_typeit[] = ezauHTML::makeOption( '', _EZAUTOS_SEL_SELLER_TYPE );

  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE2, _EZAUTOS_PROFILE_TYPE2 );

  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE3, _EZAUTOS_PROFILE_TYPE3 );

  

  	$lists['dealer_type'] = ezauHTML::selectList( $dealer_typeit, 'dealer_type', 'class="inputbox" size="1"' , 'value', 'text', '' );



?>



<table width="100%" cellpadding="15" class="listtableborder">

	<tr>

		<td>



		<form name="dealersearchfilter" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=dealerresults");?>" method="post">

		<input type="hidden" name="option" value="com_ezautos" />

		<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

		<input type="hidden" name="task" value="dealerresults" />



		<div align="center">

			<table border="0">



				<tr>

					<td><div align="center"><strong><?php echo _EZAUTOS_PROFILE_FINDDEALER;?>:-</strong><br />



<?php echo $lists['dealer_type'];?>&nbsp;<?php echo $lists['dealerloc'];?>&nbsp;<input class="button" type="submit" name="<?php echo _EZAUTOS_SEARCH_SEARCH;?>" value="<?php echo _EZAUTOS_SEARCH_SEARCH;?>" />

</div></td>

				</tr>

			</table>

		</div>



		</form>



		</td>

	</tr>

</table>



<?php



}











    /**************************************************\

  		 	DISPLAY A LIST OF DEALER/SELLER PROFILES

    \**************************************************/





function displayProfiles( $option, &$rows, $pageNav, $total, $lists ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $ea_catthumbwidth;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', 	_EZAUTOS_PROFILE_AGSELLERS );

$mainframe->setPageTitle( _EZAUTOS_PROFILE_AGSELLERS );



?>
<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_PROFILE_AGSELLERS;?></td>

	</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];





?>

<table width="618"  border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/upperGreyCurve.gif" width="618" height="11"></td>

  </tr>

  <tr> 

    <td valign="top" background="/components/com_ezautos/images/greyCurveBGD.gif"><table width="100%" border="0" cellpadding="0" cellspacing="0" onclick="location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=showprofile&amp;id=$row->mid");?>'" >

        <tr> 

          <td valign="top" width="<?php echo $ea_catthumbwidth;?>"> 

            <?php if ( !$row->dealer_image ) { ?>

            <img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/nothumb.jpg" alt="" align="left" width="60" hspace="10" /> 

            <?php } else { ?>

            <img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" width="60" hspace="10" /> 

            <?php } ?>

          </td>

          <td valign="top"><span class="h3"><?php echo $row->dealer_name;?> 

            <?php if ($row->dealer_company) { ?>

            - <?php echo $row->dealer_company;?> 

            <?php } ?>

            </span><br /> 

            <?php if ($row->dealer_locality) { ?>

            <?php echo _EZAUTOS_PROFILE_LOCALITY;?>:&nbsp;<?php echo $row->dealer_locality;?> 

            <?php } ?>

            <br /> <?php echo $row->dealer_info;?><br /> <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=showprofile&amp;id=$row->mid");?>"><strong><?php echo _EZAUTOS_PROFILER_CBPROFILE;?></strong></a> 

          </td>

        </tr>

      </table></td>

  </tr>

  <tr> 

    <td height="12" valign="top"><img src="/components/com_ezautos/images/lowerGreyCurve.gif" width="618" height="11"></td>

  </tr>

</table>

<table border="0" cellpadding="0" cellspacing="0" width="618" >

  <tr> 

    <td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="5" width="1" alt="" /></td>

  </tr>

</table>

<?php



	} 



}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><br /><?php echo _EZAUTOS_PROFILE_NOPROFILES;?><br /><br /><br /></td>

	</tr>

</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

	<tr>

		<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

	</tr>

</table>



<?php



}



?>



<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task=displayprofiles&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>

<br />



<?php



  # Define dealer/seller type



	$dealer_typeit[] = ezauHTML::makeOption( '', _EZAUTOS_SEL_SELLER_TYPE );

  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE2, _EZAUTOS_PROFILE_TYPE2 );

  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE3, _EZAUTOS_PROFILE_TYPE3 );

  

  	$lists['dealer_type'] = ezauHTML::selectList( $dealer_typeit, 'dealer_type', 'class="inputbox" size="1"' , 'value', 'text', '' );



?>



<table width="100%" cellpadding="15" class="listtableborder">

	<tr>

		<td>



		<form name="dealersearchfilter" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=dealerresults");?>" method="post">

		<input type="hidden" name="option" value="com_ezautos" />

		<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

		<input type="hidden" name="task" value="dealerresults" />



		<div align="center">

			<table border="0">



				<tr>

					<td><div align="center"><strong><?php echo _EZAUTOS_PROFILE_FINDDEALER;?>:-</strong><br />



<?php echo $lists['dealer_type'];?>&nbsp;<?php echo $lists['dealerloc'];?>&nbsp;<input class="button" type="submit" name="<?php echo _EZAUTOS_SEARCH_SEARCH;?>" value="<?php echo _EZAUTOS_SEARCH_SEARCH;?>" />

</div></td>

				</tr>

			</table>

		</div>



		</form>



		</td>

	</tr>

</table>





<?php





}

















    /**************************************************\

      		  SHOW SELLER'S PROFILE

    \**************************************************/





function showProfile( $option, &$row ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $ea_usesms, $ea_usemap, $ea_mapsys, $ea_mapwidth, $ea_mapheight;

global $ea_online_status;



include(EZADMIN_PATH."/config.ezautos.php");



$mainframe->appendMetaTag( 'title', 	$row->dealer_name );

$mainframe->setPageTitle( $row->dealer_name );

$mainframe->appendMetaTag( 'description', 	$row->dealer_info );



?>



<?php

$status3 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';

$link5 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=contactprofile&amp;id='. $row->mid;



$status4 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';

$link6 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=smsprofile&amp;id='. $row->mid;



$link8 = sefRelToAbs( 'index.php?option=com_pms&amp;page=new&amp;id='. $row->user .'&amp;title='._EZAUTOS_REPMS_PRIVATE.' '. $row->id );



?>





<br />

<?php if ($row->page_topper) { ?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/<?php echo $row->page_topper;?>" border="0" alt="" /></td>

	</tr>

</table>



<?php } ?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><strong><?php echo $row->dealer_name; ?></strong> <?php if ($row->dealer_type) { ?>(<?php echo $row->dealer_type;?>)<?php } ?></td>

	</tr>

</table>



<br />



<table cellpadding="0" cellspacing="0" border="0" width="95%">

	<tr>

		<td>





				<table class="admintable">

				<tbody>



	<tr rowspan="2">

			<td valign="top" width="200">



<table><tr><td>



			<?php if ( !$row->dealer_image ) { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/nothumb.jpg" alt="" align="left" hspace="10" />

			<?php } else { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" hspace="10" />

			<?php } ?>



</td></tr>

<tr><td>

			<?php if ( $row->dealer_pdf ) { ?>



<br /><br />

<a target="_blank" href="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/profiles/<?php echo $row->dealer_pdf;?>"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/marketing.png" border="0" alt="<?php echo _EZAUTOS_PROFILE_DOWNLOAD_PROMO;?>" /></a>



			<?php } ?>

</td></tr>



<?php if ( $row->dealer_skype ) { ?>

<tr><td>

<!--

Skype 'My status' button

http://www.skype.com/go/skypebuttons

-->

<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>

<a href="skype:<?php echo  $row->dealer_skype;?>?call"><img src="http://mystatus.skype.com/balloon/<?php echo  $row->dealer_skype;?>" style="border: none;" width="150" height="60" alt="My status" /></a>

<br />

</td></tr>

<?php } ?>



<?php if ( $row->dealer_ymsgr ) { ?>

<tr><td>

<?php

$check_it = 'http://mail.opi.yahoo.com/online?u='.$row->dealer_ymsgr.'&m=a&t=1';

$id = $row->dealer_ymsgr;

$online='<a href="ymsgr:sendIM?'.$row->dealer_ymsgr.'"><img src="'.$mosConfig_live_site.'/components/com_ezautos/images/yonline.gif" width="120" border="0" alt="" /></a>';

$offline='<a href="ymsgr:sendIM?'.$row->dealer_ymsgr.'"><img src="'.$mosConfig_live_site.'/components/com_ezautos/images/yoffline.gif" width="120" border="0" alt="" /></a>';

$file = fopen("$check_it"."$id", "r");$read = fread($file, 200);

$read = ereg_replace($id, "", $read);

if ($y = strstr ($read, "00")) {

$x = "$offline";

}elseif ($y = strstr ($read, "01")) {

$x = "$online";

}

echo ("$x");

fclose($file);

?>

<br />

</td></tr>

<?php } ?>



<?php if ( $row->dealer_icq ) { ?>

<tr><td>

<br />

<img src="http://status.icq.com/online.gif?icq=<?php echo $row->dealer_icq;?>&img=5" alt="" /> <?php echo "ICQ"; ?>:&nbsp;<?php echo  $row->dealer_icq; ?>

<br />

</td></tr>

<?php } ?>







<?php if ( $row->linkit ) { ?>

<tr><td>

<br /><br />

<?php echo $row->linkit; ?>

</td></tr>

<?php } ?>



</table>





			</td>

		<td valign="top">

<strong><?php echo $row->dealer_name; ?></strong> <?php if ($row->dealer_type) { ?>(<?php echo $row->dealer_type;?>)<?php } ?><br />

<?php if ( $row->dealer_company ) { ?>

<strong><?php echo $row->dealer_company; ?></strong><br /><br />

<?php } ?>



<?php echo $row->dealer_address1; ?> <?php echo $row->dealer_address2; ?><br />

<?php echo $row->dealer_locality; ?> <?php echo $row->dealer_state; ?> <?php echo $row->dealer_pcode; ?><br />

<?php echo $row->dealer_country; ?><br /><br />





<?php echo $row->dealer_bio; ?><br /><br />



<?php if ( $row->dealer_phone ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_PROFILE_PHONE; ?>:&nbsp;<?php echo $row->phone_pref.' '.$row->dealer_phone;?><br />

<?php } if ( $row->dealer_mobile ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_PROFILE_MOBILE2; ?>:&nbsp;<?php echo $row->mobile_pref.' '.$row->dealer_mobile;?><br />

<?php } if ( $row->dealer_fax ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo  _EZAUTOS_PROFILE_FAX; ?>:&nbsp;<?php echo $row->fax_pref.' '.$row->dealer_fax;?><br />

<?php } ?>



<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_PROFILE_EMAIL; ?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link5; ?>','win2','<?php echo $status3; ?>');" title="<?php echo _EZAUTOS_SELLER_C;?>"><?php echo _EZAUTOS_SELLER_C;?></a><br />

<?php if ( $ea_usesms && $row->show_sms && $row->dealer_sms ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_PROFILE_TEXT; ?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link6; ?>','win2','<?php echo $status4; ?>');" title="<?php echo _EZAUTOS_SELLER_SMS2;?>"><?php echo _EZAUTOS_SELLER_SMS2;?></a><br />

<?php } ?>

<?php if ( $ea_mypms ){ ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_MYPMS;?>:&nbsp;<a href="<?php echo $link8;?>" title="<?php echo _EZAUTOS_MYPMS_MSG;?>"><?php echo _EZAUTOS_MYPMS_MSG;?></a><br />

<?php } ?>



<br />

<?php if ( $row->dealer_web && $row->dealer_web != 'http://' ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_PROFILE_WEB; ?>:&nbsp;<a target="_blank" href="<?php echo  $row->dealer_web; ?>"><?php echo  $row->dealer_web; ?></a><br />

<?php } if ( $row->dealer_blog && $row->dealer_blog != 'http://' ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_PROFILE_BLOG; ?>:&nbsp;<a target="_blank" href="<?php echo  $row->dealer_blog; ?>"><?php echo  $row->dealer_blog; ?></a><br /><br />

<?php } ?>



<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow.png" alt="" align="left" /><?php echo _EZAUTOS_AGENT_CURRENTLISTINGS; ?>:&nbsp;<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=dealerlistings&amp;id=$row->mid");?>"><?php echo  _EZAUTOS_AGENT_MYLISTINGS; ?></a><br />





<br /><br />



<!--START MAPPING BOX-->			



<?php if ( $ea_usemap && $row->show_addy ){ ?>



<!--START GOOGLE MAPPING BOX STUFF-->			



<?php if ( $ea_mapsys == 1 ){ ?>



<script type="text/javascript">

//<![CDATA[

function load()

{

    if (GBrowserIsCompatible())

    {

        map = new GMap2(document.getElementById("map"));

        map.addControl(new GSmallMapControl());

        map.addControl(new GMapTypeControl());

        map.setCenter(new GLatLng(34.20725938207231, -77.947998046875), 15);

        map.setMapType(<?php echo $ea_mapview;?>);

        geocoder = new GClientGeocoder();

        showAddress("<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>") ;

    }

    else

    {

        alert("<?php echo _EZAUTOS_MAPPING_INCOMPATIBLE;?>");

    }

}





//]]>

</script>



						<div align="center">

							<table width="100%">

								<tr>

									<td>

										<div align="center">

											<table border="0" align="center">

												<tr valign='top'><td valign='top' align="left">

    <form action="#" onsubmit="showAddress(this.address.value); return false">

      <div id="map" style="width: <?php echo $ea_mapwidth;?>px; height: <?php echo $ea_mapheight;?>px"></div>

    </form>

</td></tr>

											</table>

										</div>

									</td>

								</tr>

							</table>

						</div>



<!--END GOOGLE MAPPING BOX-->			



<?php } ?>



<?php if ( $ea_mapsys == 2 ){ ?>





<!--START YAHOO MAPPING BOX-->			



<div id="mapContainer"></div>



<script type="text/javascript">

// Create and display Map object at the address and with zoom level 3.

//Include your application ID.

var map = new Map("mapContainer", "YahooDemo", 

  "<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>", 3); 



map.addWidget(new SatelliteControlWidget());





// Make the map draggable 

map.addTool( new PanTool(), true );



// Create a POI marker object

marker1 = new CustomPOIMarker( '<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>)',

  '<?php echo $row->dealer_company;?>', '0xFF0000', '0xFFFFFF'); 



// Add the POI marker to the map and display it 

map.addMarkerByAddress( marker1, "<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>"); 



// Create a Navigator Widget object 

navWidget = new NavigatorWidget();  

// Add the Navigator Widget to the map and display it 

map.addWidget(navWidget); 



</script>





<!--END YAHOO MAPPING BOX-->			



<?php } ?>





<?php if ( $ea_mapsys == 3 && $row->dealer_declat && $row->dealer_declong ){ ?>



<!--START GOOGLE COORDINATES MAPPING BOX STUFF-->			





<div align="center">







    <script type="text/javascript">

    //<![CDATA[



function ezautosmap()

{

    

    if (GBrowserIsCompatible()) { 

 

      // A function to create the marker and set up the event window

      // Dont try to unroll this function. It has to be here for the function closure

      // Each instance of the function preserves the contends of a different instance

      // of the "marker" and "html" variables which will be needed later when the event triggers.    





      function createMarker(point,html) {

        var marker = new GMarker(point);



        return marker;

      }



      // Display the map, with some controls and set the initial location 

      var map = new GMap2(document.getElementById("automap"));

      map.addControl(new GLargeMapControl());

      map.addControl(new GMapTypeControl());

      map.setCenter(new GLatLng(<?php echo $row->dealer_declat;?>,<?php echo $row->dealer_declong;?>),15);

      map.setMapType(<?php echo $ea_mapview;?>);

    

      // Set up three markers with info windows 

    

      var point = new GLatLng(<?php echo $row->dealer_declat;?>,<?php echo $row->dealer_declong;?>);

      var marker = createMarker(point)

      map.addOverlay(marker);



    }

    

    // display a warning if the browser was not compatible

    else {

      alert("<?php echo _EZAUTOS_MAPPING_INCOMPATIBLE;?>");

    }



}

 

    // This Javascript is based on code provided by the

    // Blackpool Community Church Javascript Team

    // http://www.commchurch.freeserve.co.uk/   

    // http://www.econym.demon.co.uk/googlemaps/

 

    //]]>

    </script>



</div>



   <div id="automap" style="width: <?php echo $ea_mapwidth;?>px; height: <?php echo $ea_mapheight;?>px"></div>



<!--END GOOGLE COORDINATES MAPPING BOX-->			



<?php } ?>





<?php } ?>





<!--END MAPPING BOX STUFF-->			



	</td>





	</tr>





				</tbody>

				</table>



		</td>

	</tr>

</table>













<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

	<tr>

		<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

	</tr>

</table>



<?php





}







    /**************************************************\

       	 	LIST THE DEALERS OWN LISTINGS

    \**************************************************/





function dealerListings( $option, &$rows, $id, $dealername, $topper, &$pageNav, $total ) {

global $database, $myItemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $ea_listtemplate, $ea_currencyformat;

global $ea_currencypos, $ea_sitetype, $ea_currencysign, $ea_thumbwidth, $ea_imagedirectory, $ea_thumbcreation;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}



$mainframe->appendMetaTag( 'title',	_EZAUTOS_AGENT_LISTINGSFOR.' '.$dealername );

$mainframe->setPageTitle( _EZAUTOS_AGENT_LISTINGSFOR.' '.$dealername );



if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}



?>



<br />

<?php if ($topper) { ?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/<?php echo $topper;?>" border="0" alt="" /></td>

	</tr>

</table>



<?php } ?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_AGENT_LISTINGSFOR;?> <?php echo $dealername;?></td>

	</tr>

</table>



<?php



    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {



		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";





if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}





if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}





	} 



}



}else{



?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

	<tr>

		<td class='h3'><br /><br /><?php echo _EZAUTOS_DEALER_NOLISTINGS;?><br /><br /><br /></td>

	</tr>

</table>



<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">

	<tr>

		<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

	</tr>

</table>



<?php



}





?>



<form name="pageForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $myItemid;?>" method="get">

<input type="hidden" name="option" value="<?php echo $option;?>" />

<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />

<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />

<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />



<?php



$link='index.php?option='.$option.'&amp;task=dealerlistings&amp;id='.$id .'&amp;Itemid='. $myItemid;

?>



<table width='100%' border='0' cellspacing='1' cellpadding='0'>

    <tr>

        <td colspan="2"><div align="center"><?php echo $pageNav->writeLinks($link); ?></div></td>

    </tr>

    <tr>

        <td><?php echo $pageNav->writeCounter();?></td><td><div align="right"><?php echo _EZAUTOS_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getBox($link);?></div></td>



    </tr>

</table>



</form>





<?php





}

















    /**************************************************\

      		  ADD/EDIT SELLER'S PROFILE FORM

    \**************************************************/





function editProfile( $option, &$row, $lists, $list ) {

global $database, $myItemid, $mainframe, $my, $id, $mosConfig_live_site, $ea_logowidth, $ea_logoheight;



include(EZADMIN_PATH."/config.ezautos.php");



mosMakeHtmlSafe( $row );



	# Profile Form Check



?>



<script type="text/javascript">

		<!--

		function validatemyprofile() {

			var form = document.myprofile;

			// do field validation

			if (form.dealer_name.value == "") {

				alert( "<?php echo _EZAUTOS_PROFILE_NAME;?>" );



			} else if (form.dealer_email.value == ""){

				alert( "<?php echo _EZAUTOS_PROFILE_EMAIL;?>" );



			} else if (form.dealer_locality.value == ""){

				alert( "<?php echo _EZAUTOS_LOCALITY_ERROR;?>" );



			} else {

				document.myprofile.action = 'index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>';

				document.myprofile.submit();



			}

		}

		//-->

		</script>

<br />

<br />



<table width="95%" border="0" cellpadding="0" cellspacing="0" bgcolor="#7f7f7f">

	<tr>

		<td>



<form class="form" name="myprofile" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid");?>" method="post" enctype="multipart/form-data">

	<input type="hidden" name="option" value = "<?php echo $option;?>" />

	<input type="hidden" name="Itemid" value = "<?php echo $myItemid;?>" />

	<input type="hidden" name="prid" value = "<?php echo $row->prid; ?>" />

	<input type="hidden" name="task" value="saveprofile" />

	<input type="hidden" name="mid" value="<?php echo $my->id; ?>" />





	<table cellpadding="0" cellspacing="0" border="0" width="100%">

	    <tr>

	      <td width="100%" align="left" class="sectiontableheader"><?php echo $row->prid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_PROFILE_DETAILS;?></td>

	    </tr>

	</table>



<br />





<table cellpadding="0" cellspacing="0" border="0" width="100%">

	<tr>

		<td>



<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/tabs/tabpane.js"></script>

<link type="text/css" rel="StyleSheet" href="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/tabs/tab.webfx.css" />



<div class="tab-pane" id="tab-pane-1">



<script type="text/javascript">

var tabPane1 = new WebFXTabPane( document.getElementById( "tab-pane-1" ) );

</script>



   <div class="tab-page" id="tab-page-1">

      <h2 class="tab"><?php echo _EZAUTOS_TABS_ADDRESS;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-1" ) );

      </script>





	<table cellpadding="5" cellspacing="5" border="0" width="100%">



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_NAME; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_name" id="dealer_name" size="40" maxlength="60" value="<?php echo  $row->dealer_name ; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>



<?php



  # Define dealer/seller type



	$dealer_typeit[] = ezauHTML::makeOption( '', _EZAUTOS_PROFILE_TYPE1 );

  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE2, _EZAUTOS_PROFILE_TYPE2 );

  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE3, _EZAUTOS_PROFILE_TYPE3 );

  

  	$lists['dealer_type'] = ezauHTML::selectList( $dealer_typeit, 'dealer_type', 'class="searchbox" size="1"' , 'value', 'text', $row->dealer_type );



?>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_TYPE4; ?>:</strong></td>

			<td align="left" valign="top"><?php echo $lists['dealer_type'];?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_COMPANY; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_company" id="dealer_company" size="40" maxlength="60" value="<?php echo  $row->dealer_company; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_UNITNUM; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_unitnum" id="dealer_unitnum" size="15" maxlength="20" value="<?php echo $row->dealer_unitnum; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ADDRESS1; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_address1" id="dealer_address1" size="15" maxlength="20" value="<?php echo $row->dealer_address1; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ADDRESS2; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_address2" id="dealer_address2" size="40" maxlength="60" value="<?php echo $row->dealer_address2; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_LOCALITY; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_locality" id="dealer_locality" size="40" maxlength="60" value="<?php echo  $row->dealer_locality; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_PCODE; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_pcode" id="dealer_pcode" size="40" maxlength="60" value="<?php echo  $row->dealer_pcode; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_STATE; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_state" id="dealer_state" size="40" maxlength="60" value="<?php echo  $row->dealer_state; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_COUNTRY; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_country" id="dealer_country" size="40" maxlength="60" value="<?php echo  $row->dealer_country; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_VLDET_DECLAT;?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_declat" size="15" value="<?php echo $row->dealer_declat;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_VLDET_DECLONG;?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_declong" size="15" value="<?php echo $row->dealer_declong;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_SHOWADDY; ?>:</strong></td>

			<td align="<?php echo $ea_textalign;?>"><?php echo $lists['show_addy']; ?> (<?php echo _EZAUTOS_PROFILE_SHOWADDYDESC; ?>)</td>

		</tr>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_CARLISTER_ID; ?>:</strong></td>

			<td align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="carlister" size="15" value="<?php if ($row->carlister != 0) { echo $row->carlister; } ?>" /></td>

		</tr>



</table>



   </div>



   <div class="tab-page" id="tab-page-2">

      <h2 class="tab"><?php echo _EZAUTOS_PROFILE_CONTDETS;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-2" ) );

      </script>





	<table cellpadding="5" cellspacing="5" border="0" width="100%">

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_EMAIL; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_email" id="dealer_email" size="40" maxlength="60" value="<?php echo  $row->dealer_email ; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_PHONE; ?>:</strong></td>

			<td align="left"><?php echo _EZAUTOS_PREFIX;?>: <input class="inputbox" type="text" name="phone_pref" id="phone_prefx" size="6" maxlength="5" value="<?php echo  $row->phone_pref ; ?>" />&nbsp;&nbsp;&nbsp;&nbsp; <?php echo _EZAUTOS_NUM;?>: <input class="inputbox" type="text" name="dealer_phone" id="dealer_phone" size="18" maxlength="20" value="<?php echo  $row->dealer_phone ; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_FAX; ?>:</strong></td>

			<td align="left"><?php echo _EZAUTOS_PREFIX;?>: <input class="inputbox" type="text" name="fax_pref" id="fax_prefx" size="6" maxlength="5" value="<?php echo  $row->fax_pref ; ?>" />&nbsp;&nbsp;&nbsp;&nbsp; <?php echo _EZAUTOS_NUM;?>: <input class="inputbox" type="text" name="dealer_fax" id="dealer_fax" size="18" maxlength="20" value="<?php echo  $row->dealer_fax ; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_MOBILE; ?>:</strong></td>

			<td align="left"><?php echo _EZAUTOS_PREFIX;?>: <input class="inputbox" type="text" name="mobile_pref" id="mobile_prefx" size="6" maxlength="5" value="<?php echo  $row->mobile_pref ; ?>" />&nbsp;&nbsp;&nbsp;&nbsp; <?php echo _EZAUTOS_NUM;?>: <input class="inputbox" type="text" name="dealer_mobile" id="dealer_mobile" size="18" maxlength="20" value="<?php echo  $row->dealer_mobile ; ?>" /></td>

		</tr>



<?php if ($ea_usesms){ ?>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_SMS; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_sms" id="dealer_sms" size="40" maxlength="60" value="<?php echo  $row->dealer_sms ; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ALLOWSMS; ?>:</strong></td>

			<td align="left" valign="top"><?php echo $lists['show_sms']; ?></td>

		</tr>



<?php } ?>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_WEB; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_web" id="dealer_web" size="40" maxlength="60" value="<?php if (!$row->prid OR !$row->dealer_web ){ ?>http://<?php } else { ?><?php echo  $row->dealer_web;?><?php } ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_BLOG; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_blog" id="dealer_blog" size="40" maxlength="60" value="<?php if (!$row->prid OR !$row->dealer_blog ){ ?>http://<?php } else { ?><?php echo  $row->dealer_blog;?><?php } ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_SKYPE; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_skype" id="dealer_skype" size="40" maxlength="60" value="<?php echo  $row->dealer_skype ; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_YAHOO; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_ymsgr" id="dealer_ymsgr" size="40" maxlength="60" value="<?php echo  $row->dealer_ymsgr ; ?>" /></td>

		</tr>

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ICQ; ?>:</strong></td>

			<td align="left" valign="top"><input class="inputbox" type="text" name="dealer_icq" id="dealer_icq" size="40" maxlength="60" value="<?php echo  $row->dealer_icq ; ?>" /></td>

		</tr>

</table>



   </div>



   <div class="tab-page" id="tab-page-3">

      <h2 class="tab"><?php echo _EZAUTOS_PROFILE_PROMO;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-3" ) );

      </script>



	<table cellpadding="5" cellspacing="5" border="0" width="100%">

		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_INTRO; ?>:</strong></td>

			<td align="left" valign="top"><textarea class="inputbox" cols="29" rows="5" id="dealer_info" name="dealer_info"><?php echo $row->dealer_info; ?></textarea></td>

		</tr>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_IMAGE; ?>:</strong></td>

			<td align="left" valign="top"><?php profileUpload($row->dealer_image,'1',$list['dealer_image'],'dealer_image');?>

			<?php if ($row->dealer_image){ ?>

			&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs('index.php?option=com_ezautos&amp;task=deleteprofile_image&amp;id='.$row->prid.'&amp;Itemid='.$myItemid);?>"><?php echo _EZAUTOS_VLDET_DELETEIMG; ?></a></strong>

			<?php } ?>

			</td>

		</tr>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_LOGO; ?>:</strong><br /><br /><?php echo _EZAUTOS_PROFILE_MAXSIZE;?><br />

<?php echo $ea_logowidth.' (W) x '.$ea_logoheight.' (H)';?></td>

			<td align="left" valign="top"><?php logoUpload($row->dealer_logo,'1',$list['dealer_logo'],'dealer_logo');?>

			<?php if ($row->dealer_logo){ ?>

			&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs('index.php?option=com_ezautos&amp;task=deletelogo_image&amp;id='.$row->prid.'&amp;Itemid='.$myItemid);?>"><?php echo _EZAUTOS_VLDET_DELETEIMG; ?></a></strong>

			<?php } ?>

			</td>

		</tr>



		<tr>

			<td width="180" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_TOPPER; ?>:</strong><br /><br /><?php echo _EZAUTOS_PROFILE_MAXSIZE;?><br />

<?php echo $ea_topperwidth.' (W) x '.$ea_topperheight.' (H)';?></td>

			<td valign="top"><?php topperUpload($row->page_topper,'1',$list['page_topper'],'page_topper');?>

			<?php if ($row->page_topper){ ?>

			&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs('index.php?option=com_ezautos&amp;task=deletepage_topper&amp;id='.$row->prid.'&amp;Itemid='.$myItemid);?>"><?php echo _EZAUTOS_VLDET_DELETEIMG; ?></a></strong>

			<?php } ?>

			<br /><br /></td>

		</tr>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_PDF_BROCH; ?>:</strong></td>

			<td align="left" valign="top"><?php pdfUpload($row->dealer_pdf,'1',$list['dealer_pdf'],'dealer_pdf');?>

			<?php if ($row->dealer_pdf){ ?>

			&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs('index.php?option=com_ezautos&amp;task=deletepdf_promo&amp;id='.$row->prid.'&amp;Itemid='.$myItemid);?>"><?php echo _EZAUTOS_PROFILE_PDF_DELETE; ?></a></strong>

			<?php } ?>

			</td>

		</tr>



	</table>



   </div>



   <div class="tab-page" id="tab-page-4">

      <h2 class="tab"><?php echo _EZAUTOS_PROFILE_PRIVILEGES;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-4" ) );

      </script>



	<table cellpadding="5" cellspacing="5" border="0" width="100%">



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_DEALER_EXEMPT; ?>:</strong></td>

			<td align="left" valign="top"><?php if ($row->dealer_exempt == 1) { ?> <?php echo _EZAUTOS_PROFILE_DEXEMPT;?><?php } else { ?><?php echo _EZAUTOS_PROFILE_NOSPECPRIV;?><?php } ?></td>

		</tr>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_FEAT_UPGR; ?>:</strong></td>

			<td align="left" valign="top"><?php if ($row->feat_upgr == 1) { ?> <?php echo _EZAUTOS_PROFILE_DFEAT;?><?php } else { ?><?php echo _EZAUTOS_PROFILE_NOSPECPRIV;?><?php } ?></td>

		</tr>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PUBLISH_OWN; ?>:</strong></td>

			<td align="left" valign="top"><?php if ($row->publish_own == 1) { ?> <?php echo _EZAUTOS_PROFILE_DOWN;?><?php } else { ?><?php echo _EZAUTOS_PROFILE_NOSPECPRIV;?><?php } ?></td>

		</tr>



		<tr>

			<td width="180" align="<?php echo $ea_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_EXPRESET; ?>:</strong></td>

			<td align="left" valign="top"><?php if ($row->reset_own == 1) { ?> <?php echo _EZAUTOS_PROFILE_DEXPRESET;?><?php } else { ?><?php echo _EZAUTOS_PROFILE_NOSPECPRIV;?><?php } ?></td>

		</tr>



	</table>



   </div>

</div>



</td>

	</tr>

</table>



<table cellpadding="5" cellspacing="5" border="0" width="100%">

	<tr>

		<td width="100%" align="<?php echo $ea_textalign;?>" valign="top"><strong><br /><br /><?php echo _EZAUTOS_PROF_BIO; ?>:</strong>

		<br /><br />



		<?php

		// parameters : areaname, content, hidden field, width, height, rows, cols

		editorArea( 'editor1',  $row->dealer_bio , 'dealer_bio', '100%;', '150', '30', '20' ) ; ?>

		</td>

	</tr>

</table>



<br /><br />



<div align="center"><input type="button" name="<?php echo _EZAUTOS_PROFILE_SAVE;?>" value="<?php echo _EZAUTOS_PROFILE_SAVE;?>" class="button" onclick="validatemyprofile()" /></div>



</form>



		</td>

	</tr>

</table>

<br /><br />





<?php





}























    /**************************************************\

                   SELLERS PANEL

    \**************************************************/





function myEZpanel ( $option, &$rows, $lists, $ezmemintro, $exemptstatus, $pubrights, $featuredrights, $expiredrights ) {



global $database, $mainframe, $my, $ea_approve, $id, $ea_maxlistings, $ea_currencysign, $myItemid;

global $ea_imagedirectory, $ea_thumbwidth, $button_image, $currency, $paypal_email, $business;

global $premium_cost, $featured_cost, $postmode, $ea_paypal, $mosConfig_live_site;

global $ea_impnum, $ea_sbimp, $ea_memlistings, $ea_sitetype, $ea_payonly, $ea_thumbcreation, $ea_self, $pp_currsign;

global $ea_expmgmt, $ea_expsys, $ea_pmttmpl, $ea_expfig, $ea_expgrace, $ea_shortlist;



include(EZADMIN_PATH."/config.ezautos.php");



DEFINE("PAYMENT_PATH","components/com_ezautos/forms/payments/".$ea_pmttmpl."/");





?>





<table width="100%" border="0" cellspacing="0" cellpadding="0">

<?php

    foreach($ezmemintro as $row2) {

?>

	<tr>

		<td><br /><br /><?php echo $row2->content;?></td>

	</tr>

<?php } ?>



	<tr>

		<td valign="top"><br />





<?php if ( $ea_payonly==0 && $ea_sitetype==0 ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZAUTOS_LISTINGS_INTRO;?>:- <?php echo $ea_maxlistings;?><br />

<?php } elseif ( $ea_sitetype==1 ) { ?>

<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZAUTOS_LISTINGS_INTRO2;?>:- <?php echo $ea_maxlistings;?><br />

<?php } ?>



		<?php if ( $exemptstatus == 0 ) { ?>



			<?php if ( $ea_sitetype==0 && $ea_paypal ) { ?>

				<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo stripslashes( _EZAUTOS_PREMIUM ).' '._EZAUTOS_LISTINGS_PAID1.':- '.$pp_currsign.$premium_cost.' ('.$currency.') ';?><br />

				<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo stripslashes( _EZAUTOS_FEATURED ).' '._EZAUTOS_LISTINGS_PAID1.':- '.$pp_currsign.$featured_cost.' ('.$currency.') ';?><br />

			<?php } ?>



			<?php if ( $ea_sitetype==0 && $ea_paypal==1 && $ea_payonly==1 ) { ?>

				<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZAUTOS_FEND_BUYNOW;?><br />

			<?php } ?>



		<?php } ?>



			<?php if ( $ea_memlistings==1 && $ea_expmgmt==1 && $ea_expsys==0 ) { ?>

				<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZAUTOS_LISTINGS_HITSINTRO.':- '.$ea_impnum.' '._EZAUTOS_LISTINGS_HITS2;?><br />

			<?php } ?>

			<?php if ( $ea_sitetype==0 && $ea_paypal==1 && $ea_expmgmt==1 && $ea_expsys==0 ) { ?>

				<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZAUTOS_LISTINGS_HITSEXPL;?><br />

			<?php } ?>



			<?php if ( $ea_memlistings==1 && $ea_expmgmt==1 && $ea_expsys==1 ) { ?>

				<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZAUTOS_LISTINGS_TIMEINTRO.':- '.$ea_expfig.' '._EZAUTOS_LISTINGS_TIME2.' '.$ea_expgrace.' '._EZAUTOS_LISTINGS_TIME3;?><br />

			<?php } ?>

			<?php if ( $ea_sitetype==0 && $ea_paypal==1 && $ea_expmgmt==1 && $ea_expsys==1 ) { ?>

				<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZAUTOS_LISTINGS_TIMEEXPL;?><br />

			<?php } ?>





		</td>

	</tr>

</table>



<br /><br />

<table width="618"  border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/upperGreyCurve.gif" width="618" height="11"></td>

  </tr>

  <tr> 

    <td valign="top" background="/components/com_ezautos/images/greyCurveBGD.gif"><table width="100%"  border="0" cellspacing="0" cellpadding="0">

        <tr> 

          <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">

              <tr> 

                <td>&nbsp;&nbsp;&nbsp;<span ><font color="#FFCC00"><strong><?php echo _EZAUTOS_MYEZPANEL;?></strong></font></span></td>

              </tr>

            </table></td>

        </tr>

        <tr> 

          <td><table width="100%" border="0" cellspacing="5" cellpadding="5">

              <tr> 

                <td width="24%"><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=editprofile&amp;Itemid=$myItemid");?>"> 

                    <img src="/components/com_ezautos/images/myProfile2.gif" alt="" align="top" border="0" /></a><br />

                    <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=editprofile&amp;Itemid=$myItemid");?>"><?php echo _EZAUTOS_MYPROFILE;?> 

                    </a></div></td>

                <?php if ( $ea_shortlist ) { ?>

                <td width="27%"><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=viewlightbox&amp;Itemid=$myItemid");?>"> 

                    <img src="/components/com_ezautos/images/myShortList2.gif" alt="" align="top" border="0" /></a><br />

                    <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=viewlightbox&amp;Itemid=$myItemid");?>"><?php echo _EZAUTOS_MYLIGHTBOX;?> 

                    </a></div></td>

                <td width="25%"><div align="center"> <a href="javascript:location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=addnew");?>';"><img src="/components/com_ezautos/images/adListing2.gif" alt="" align="top" border="0" /><br>

                    </a> <a href="javascript:location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=addnew");?>';"><?php echo _EZAUTOS_ADDNEW;?></a> 

                  </div></td>

                <?php } ?>

                <td width="24%"><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=postmylistings&amp;id=$my->id&amp;Itemid=$myItemid");?>"> 

                    <img src="/components/com_ezautos/images/emailListing2.gif" alt="" align="top" border="0" /></a><br />

                    <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=postmylistings&amp;id=$my->id&amp;Itemid=$myItemid");?>"><?php echo _EZAUTOS_PROFILE_MAILLISTINGS;?> 

                    </a></div></td>

              </tr>

            </table></td>

        </tr>

      </table></td>

  </tr>

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/lowerGreyCurve.gif" width="618" height="11"></td>

  </tr>

</table>

<br /><br />

<?php if ($ea_self){



$status1 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';

$link1 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=newmake&amp;id='. $id;

$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=newmodel&amp;id='. $id;



?>

<table width="618"  border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/upperGreyCurve.gif" width="618" height="11"></td>

  </tr>

  <tr> 

    <td valign="top" background="/components/com_ezautos/images/greyCurveBGD.gif"><table width="100%"  border="0" cellspacing="0" cellpadding="0">

        <tr> 

          <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">

              <tr> 

                <td>&nbsp;&nbsp;&nbsp;<span ><font color="#FFCC00"><span ><strong><?php echo _EZAUTOS_CHECK_AVAIL;?></strong></span></font></span></td>

              </tr>

            </table></td>

        </tr>

        <tr> 

          <td><table border="0" cellpadding="0" cellspacing="0" width="100%" >

              <tr> 

                <td class ="select" align="center"><div align="center"><br />

                    <?php echo $lists['make3'];?><br />

                    <br />

                    <a href="javascript:void(0)" onclick="window.open('<?php echo $link1; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZAUTOS_CHECK_SUBMIT;?>"><?php echo _EZAUTOS_CHECK_SUBMIT;?></a><br />

                  </div></td>

                <td align="center"><div align="center"><br />

                    <?php echo $lists['model3'];?><br />

                    <br />

                    <a href="javascript:void(0)" onclick="window.open('<?php echo $link2; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZAUTOS_CHECK_SUBMIT;?>"><?php echo _EZAUTOS_CHECK_SUBMIT;?></a><br />

                  </div></td>

              </tr>

            </table></td>

        </tr>

      </table></td>

  </tr>

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/lowerGreyCurve.gif" width="618" height="11"></td>

  </tr>

</table>

<?php } ?>

<p>&nbsp;</p>

<table width="618"  border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/upperGreyCurve.gif" width="618" height="11"></td>

  </tr>

  <tr> 

    <td valign="top" background="/components/com_ezautos/images/greyCurveBGD.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr> 

          <td width="<?php echo $ea_thumbwidth;?>" class="sectiontableheader"></td>

          <td class="sectiontableheader"><?php echo _EZAUTOS_MEMBERS_CARDET;?></td>

          <td width="27" class="sectiontableheader"><?php echo _EZAUTOS_MEMBERS_HITS;?></td>

          <td width="67" class="sectiontableheader"><?php echo _EZAUTOS_MEMBERS_ACTION;?></td>

          <td width="63" class="sectiontableheader"><?php echo _EZAUTOS_MEMBERS_STATUS;?></td>

          <?php if ( $exemptstatus == 0 ) { ?>

          <?php if ( $ea_sitetype==0 && $ea_paypal ) { ?>

          <td width="76" class="sectiontableheader"><?php echo stripslashes( _EZAUTOS_PREMIUM );?></td>

          <td width="78" class="sectiontableheader"><?php echo stripslashes( _EZAUTOS_FEATURED );?></td>

          <?php } ?>

          <?php } ?>

          <?php if ( $featuredrights == 1 ) { ?>

          <td width="63" class="sectiontableheader"><?php echo stripslashes( _EZAUTOS_FEATURED );?></td>

          <?php } ?>

          <?php if ( $ea_expmgmt==1 && $ea_expsys==1 && $expiredrights == 1 ) { ?>

          <td width="63" class="sectiontableheader"><?php echo stripslashes( _EZAUTOS_LISTINGS_EXPDATE );?></td>

          <?php } ?>

        </tr>

        <?php





           //* 1 = Live Via PayPal Network

           //* 2 = Test Via PayPal Developers Network Sandbox





    # IPN validation mode 1: Live Via PayPal Network



if ($postmode == 1) { $domain = "www.paypal.com"; }



    # IPN validation mode 2: Test Via PayPal Developer's Sandbox



elseif ($postmode == 2) { $domain = "www.sandbox.paypal.com"; }





    $num_rows=ceil( count( $rows ) / 1 );

	if ($num_rows > 0) {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



	$task	=	$row->published ? sefRelToAbs("index.php?option=com_ezautos&amp;task=unpublish&amp;id=$row->id&amp;Itemid=$myItemid") : sefRelToAbs("index.php?option=com_ezautos&amp;task=publish&amp;id=$row->id&amp;Itemid=$myItemid");

	$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';

	$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;



if ( $featuredrights == 1 ) {

	$task2	=	$row->featured ? sefRelToAbs("index.php?option=com_ezautos&amp;task=unfeatured&amp;id=$row->id&amp;Itemid=$myItemid") : sefRelToAbs("index.php?option=com_ezautos&amp;task=dofeatured&amp;id=$row->id&amp;Itemid=$myItemid");

	$img2	=	$row->featured ? 'on.png' : 'off.png';

	$alt2 	=	$row->featured ? 'Featured' : 'Not Featured';

}





	?>

        <tr> 

          <td width="<?php echo $ea_thumbwidth;?>"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"> 

            <?php if ($row->images) { 



$imagekey = explode(",",$row->images);

$myimage=$imagekey[0];



?>

            <img src="<?php echo $myimage;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /> 

            <?php

} else {



if ($row->image1) { ?>

            <img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" width="<?php echo $ea_thumbwidth;?>" style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px; margin-right: 5px" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />

            <?php }else{ ?>

            <img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" width="<?php echo $ea_thumbwidth;?>" style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px; margin-right: 5px" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />

            <?php } ?>

            <?php } ?>

            </a></td>

          <td align="left"> 

            <?php if ($ea_expmgmt==1 && $ea_expsys==1) { ?>

            <?php if ($row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y"))) { ?>

            <strong>***<?php echo _EZAUTOS_LISTINGS_EXPIRED; ?>***</strong><br /> 

            <?php } ?>

            <?php } ?>

            <?php if ($ea_expmgmt==1 && $ea_expsys==0) { ?>

            <?php if ($row->hits >= $ea_impnum ) { ?>

            <strong>***<?php echo _EZAUTOS_LISTINGS_EXPIRED; ?>***</strong><br /> 

            <?php } ?>

            <?php } ?>

            <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=detail&amp;id=$row->id");?>"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></a></td>

          <td width="25" align="center"><?php echo $row->hits;?></td>

          <td width="65"><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=edit&amp;id=$row->id");?>" title = "<?php echo _EZAUTOS_LISTINGS_EDIT;?>"><img src = "components/com_ezautos/images/edit.png" width="15" height="15" border="0" alt="<?php echo _EZAUTOS_LISTINGS_EDIT;?>" /></a> 

              <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=preview_listing&amp;id=$row->id");?>" title="<?php echo _EZAUTOS_LISTINGS_PREVIEW;?>"><img src = "components/com_ezautos/images/preview.gif" width="16" height="16" border="0" alt="<?php echo _EZAUTOS_LISTINGS_PREVIEW;?>" /></a> 

              <a href = "javascript:if (confirm('<?php echo _EZAUTOS_CHECKDELETE;?>')){ location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=deleteit&amp;id=$row->id");?>';}" title="<?php echo _EZAUTOS_DELETE_LISTING;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/trash.png" width="15" height="15" border="0" alt="<?php echo _EZAUTOS_DELETE_LISTING;?>" /></a></div></td>

          <td width="60"><div align="center"> 

              <?php if ( $pubrights == 1 ) { ?>

              <a href="<?php echo $task;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a> 

              <?php } else { ?>

              <img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/<?php echo $img?>" border="0" alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>" /> 

              <?php } ?>

            </div></td>

          <?php if ( $featuredrights == 1 ) { ?>

          <td width="60"><div align="center"> <a href="<?php echo $task2;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/<?php echo $img2;?>" border="0" alt="<?php echo $alt2; ?>" /></a> 

            </div></td>

          <?php } ?>

          <?php if ( $ea_expmgmt==1 && $ea_expsys==1 && $expiredrights == 1 ) { ?>

          <td width="60"><div align="center"> 

              <?php if ($row->expdate) { ?>

              <?php echo strftime("%c",$row->expdate); ?><br />

              <?php if ($row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y"))) { ?>

              <a href = "javascript:if (confirm('<?php echo _EZAUTOS_RESET_BTN; ?>')){ location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=resetdate&amp;id=$row->id");?>';}" title="<?php echo _EZAUTOS_RESET_BTN;?>"><strong><?php echo _EZAUTOS_RESET_BTN;?></strong></a>

              <?php } ?>

              <?php } else { ?>

              <a href = "javascript:if (confirm('<?php echo _EZAUTOS_RESET_BTN; ?>')){ location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=resetdate&amp;id=$row->id");?>';}" title="<?php echo _EZAUTOS_RESET_BTN;?>"><strong><?php echo _EZAUTOS_RESET_BTN;?></strong></a> 

              <?php } ?>

            </div></td>

          <?php } ?>

          <?php if ( $exemptstatus == 0 ) { ?>

          <?php if ( $ea_sitetype==0 && $ea_paypal && $ea_payonly==0 ) { ?>

          <td width="75"><div align="center"> 

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" title="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" /> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" title="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" /> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==0 ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==0 ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" title="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" /> 

              <?php } ?>

            </div></td>

          <?php } ?>

          <?php if ( $ea_sitetype==0 && $ea_paypal && $ea_payonly==0 ) { ?>

          <td width="75"><div align="center"> 

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" title="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" /> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" title="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" /> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==0 ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==0 ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" title="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" /> 

              <?php } ?>

            </div></td>

          <?php } ?>

          <?php if ( $ea_sitetype==0 && $ea_paypal && $ea_payonly==1 ) { ?>

          <td width="75"><div align="center"> 

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" title="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" /> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" title="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" /> 

              <?php } ?>

              <?php if ( $row->premium==0 && $ea_expmgmt==0 ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade2.php')) {

  include(PAYMENT_PATH.'upgrade2.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->premium==1 && $ea_expmgmt==0 ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" title="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" /> 

              <?php } ?>

            </div></td>

          <?php } ?>

          <?php if ( $ea_sitetype==0 && $ea_paypal && $ea_payonly==1 ) { ?>

          <td width="75"><div align="center"> 

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate < mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" title="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" /> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits >= $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTINGS_RENEW;?> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==1 && $ea_expsys==0 && $row->hits < $ea_impnum ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" title="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" /> 

              <?php } ?>

              <?php if ( $row->featured==0 && $ea_expmgmt==0 ) { ?>

              <?php 

if (file_exists(PAYMENT_PATH.'upgrade4.php')) {

  include(PAYMENT_PATH.'upgrade4.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>

              <br />

              <?php echo _EZAUTOS_LISTING_UPGRADE;?> 

              <?php } ?>

              <?php if ( $row->featured==1 && $ea_expmgmt==0 ) { ?>

              <img src="<?php echo $mosConfig_live_site;?>/images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" title="<?php echo stripslashes( _EZAUTOS_FEATURED );?>" /> 

              <?php } ?>

            </div></td>

          <?php } ?>

          <?php } ?>

        </tr>

        <tr> 

          <td colspan="7" class="sectiontableheader"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>

        </tr>

        <?php



  }



}else{



	?>

        <tr> 

          <td align="center"><br />

            <strong><?php echo _EZAUTOS_NOLISTINGS;?></strong></td>

        </tr>

        <?php } ?>

      </table></td>

  </tr>

  <tr> 

    <td valign="top"><img src="/components/com_ezautos/images/lowerGreyCurve.gif" width="618" height="11"></td>

  </tr>

</table>

<p> <br />

</p>

<br />

<br />





		<?php if ( $exemptstatus == 0 ) { ?>



<?php if ( $ea_sitetype==0 && $ea_paypal && $ea_payonly==1 ) { ?>



<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">

	<tr>

		<td><div align="center">



<?php 

if (file_exists(PAYMENT_PATH.'upgrade1.php')) {

  include(PAYMENT_PATH.'upgrade1.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>



		<br />

<?php echo stripslashes( _EZAUTOS_PREMIUM ).' - '.$pp_currsign.$premium_cost.' ('.$currency.')' ;?>







		</div></td>



		<td><div align="center">



<?php 

if (file_exists(PAYMENT_PATH.'upgrade3.php')) {

  include(PAYMENT_PATH.'upgrade3.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>



			<br />

<?php echo stripslashes( _EZAUTOS_FEATURED ).' - '.$pp_currsign.$featured_cost.' ('.$currency.')' ;?>



		</div></td>

	</tr>

</table>



	<?php } else { ?>



<table width="100%">

	<tr>

		<td>

		<div align="center"><input type="button" class="button" name="<?php echo _EZAUTOS_ADDNEW;?>" value="<?php echo _EZAUTOS_ADDNEW;?>" onclick="javascript:location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=addnew");?>';" /></div>

		</td>

	</tr>

</table>





<?php } ?>





	<?php } else { ?>



<table width="100%">

	<tr>

		<td>

<div align="center"><input type="button" class="button" name="<?php echo _EZAUTOS_ADDNEW;?>" value="<?php echo _EZAUTOS_ADDNEW;?>" onclick="javascript:location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=addnew");?>';" /></div>

		</td>

	</tr>

</table>





		<?php } ?>





		<?php if ( $exemptstatus == 0 ) { ?>



<?php if ( $ea_sitetype==0 && $ea_paypal && $ea_payonly==0 ) { ?>



<br /><br />



<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">

	<tr>

		<td colspan="2" class="sectiontableheader"><?php echo _EZAUTOS_SKIPFREE_LISTING;?></td>

	</tr>

	<tr>

		<td><div align="center"><br />





<?php 

if (file_exists(PAYMENT_PATH.'upgrade1.php')) {

  include(PAYMENT_PATH.'upgrade1.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>



		<br />

<?php echo stripslashes( _EZAUTOS_PREMIUM ).' - '.$pp_currsign.$premium_cost.' ('.$currency.')' ;?>



		</div></td>



		<td><div align="center"><br />



<?php 

if (file_exists(PAYMENT_PATH.'upgrade3.php')) {

  include(PAYMENT_PATH.'upgrade3.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}

?>



			<br />

<?php echo stripslashes( _EZAUTOS_FEATURED ).' - '.$pp_currsign.$featured_cost.' ('.$currency.')' ;?>



		</div></td>

	</tr>

</table>



<?php } ?>



		<?php } ?>



<br /><br />





<?php } 







    /**************************************************\

                   EDIT EXISTING LISTING

    \**************************************************/





function editListing ( $option, &$row, &$lists, $list, $exemptstatus ) {



global $database, $mainframe, $my, $myItemid, $ea_approve, $ea_maxlistings, $ea_currencysign, $ea_imagedirectory;

global $ea_thumbwidth, $ea_memintro, $ea_paypal, $mosConfig_live_site, $id, $ea_sitetype, $ea_freepic;

global $ea_usepcode, $ea_textbox, $ea_textarea, $ea_maxheight, $ea_maxwidth, $ea_usesms, $ea_changeimages, $ea_usepcode;

global $ea_useflv, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");



mosMakeHtmlSafe( $row );



?>





<script type="text/javascript">

		<!--

		function updatedoc() {

			var form = document.adminForm;

			// do field validation





      if (form.year.value == "0"){

        alert( "<?php echo _EZAUTOS_VLDET_ERROR2;?>" );



      } else if (form.cid.value == "0"){

        alert( "<?php echo _EZAUTOS_VLDET_ERROR4;?>" );



      } else if (form.make.value == "0"){

        alert( "<?php echo _EZAUTOS_VLDET_ERROR5;?>" );



      } else if (form.model.value == "0"){

        alert( "<?php echo _EZAUTOS_VLDET_ERROR6;?>" );

		

	  } else if (form.country.value == "0"){

        alert( "<?php echo _EZAUTOS_COUNTRY_ERROR1;?>" );



      } else if (form.city.value == "0"){

        alert( "<?php echo _EZAUTOS_CITY_ERROR1;?>" );



      



<?php if ( $ea_sitetype==0 ) { ?>



      } else if (form.price.value == ""){

        alert( "<?php echo _EZAUTOS_VLDET_ERROR9;?>" );



<?php } ?>

<?php if ( $ea_usepcode ) { ?>



      } else if (form.pcode.value == ""){

        alert( "<?php echo _EZAUTOS_ERROR_PCODE;?>" );



<?php } ?>



      } else if (form.smalldesc.value == ""){

        alert( "<?php echo _EZAUTOS_VLDET_ERROR11;?>" );



			} else {



				<?php getEditorContents( 'editor1', 'longdesc' ) ; ?>



				document.adminForm.action = 'index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>';

				document.adminForm.submit();



			}

		}

		//-->

		</script>





<br /><br />



<table cellpadding="0" cellspacing="0" border="0" width="100%">

	<tr>

		<td class="sectiontableheader"><?php echo $row->id ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_VLDET_TITLE;?></td>

	</tr>

</table>



<br />

<br />



<form action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid");?>" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">

	<input type="hidden" name="option" value = "<?php echo $option;?>" />

	<input type="hidden" name="Itemid" value = "<?php echo $myItemid;?>" />

	<input type="hidden" name="id" value = "<?php echo $row->id; ?>" />

	<input type="hidden" name="task" value="save" />

	<input type="hidden" name="owner" value = "<?php echo $my->id; ?>" />

	<input type="hidden" name="estat" value="<?php echo $exemptstatus; ?>" />





<!-- add new listings -->



<table width="97%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#7f7f7f">

	<tr>

		<td>



<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/tabs/tabpane.js"></script>

<link type="text/css" rel="StyleSheet" href="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/tabs/tab.webfx.css" />



<div class="tab-pane" id="tab-pane-1">



<script type="text/javascript">

var tabPane1 = new WebFXTabPane( document.getElementById( "tab-pane-1" ) );

</script>



   <div class="tab-page" id="tab-page-1">

      <h2 class="tab"><?php echo _EZAUTOS_LISTINGS_SUMMARY;?></h2>



      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#686868">

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_YOM;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['year']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

        </tr>

        <?php if ( $ea_sitetype==0 ){ ?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_REG;?>:</strong></td>

          <td class="linerControlPanel"valign="top"><br />

              <input class="inputbox" type="text" name="rego" size="10" maxlength="20" value="<?php echo $row->rego;?>" /></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_VIN;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <input class="inputbox" type="text" name="vin" size="<?php echo $ea_textbox;?>" maxlength="50" value="<?php echo $row->vin;?>" /></td>

        </tr>

        <?php } ?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_CATG;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['cid']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_MAKE;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['make2']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_MODEL;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['model2']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

        </tr>

        <?php /* By Hrvoje */?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_COUNTRY_NAME;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['country2']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_CITY_NAME;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['city2']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_DERIVATIVE;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <input class="inputbox" type="text" name="derivative" size="10" maxlength="20" value="<?php echo $row->derivative;?>" /></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_ENG;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['engine']; ?></td>

        </tr>

        <?php



  # Build Transmission type select list



	$transmission[] = ezauHTML::makeOption( '', _EZAUTOS_TRANSTYPE_NS );

  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_AUTO, _EZAUTOS_TRANSTYPE_AUTO );

  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_MAN, _EZAUTOS_TRANSTYPE_MAN );

	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_SEMIA, _EZAUTOS_TRANSTYPE_SEMIA );

  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_CVT, _EZAUTOS_TRANSTYPE_CVT );

  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_OTH, _EZAUTOS_TRANSTYPE_OTH );

  

  	$lists['trans'] = ezauHTML::selectList( $transmission, 'trans', 'class="searchbox" size="1"' , 'value', 'text', $row->trans );



?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_TRANS;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['trans'];?></td>

        </tr>

        <?php



  # Build the colour list



	$colourit[] = ezauHTML::makeOption( '', _EZAUTOS_COLOUR_TYPE0 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE2, _EZAUTOS_COLOUR_TYPE2 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE3, _EZAUTOS_COLOUR_TYPE3 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE4, _EZAUTOS_COLOUR_TYPE4 );

    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE5, _EZAUTOS_COLOUR_TYPE5 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE6, _EZAUTOS_COLOUR_TYPE6 );

	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE7, _EZAUTOS_COLOUR_TYPE7 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE8, _EZAUTOS_COLOUR_TYPE8 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE9, _EZAUTOS_COLOUR_TYPE9 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE10, _EZAUTOS_COLOUR_TYPE10 );

    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE11, _EZAUTOS_COLOUR_TYPE11 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE12, _EZAUTOS_COLOUR_TYPE12 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE13, _EZAUTOS_COLOUR_TYPE13 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE14, _EZAUTOS_COLOUR_TYPE14 );

    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE15, _EZAUTOS_COLOUR_TYPE15 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE16, _EZAUTOS_COLOUR_TYPE16 );

	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE17, _EZAUTOS_COLOUR_TYPE17 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE18, _EZAUTOS_COLOUR_TYPE18 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE19, _EZAUTOS_COLOUR_TYPE19 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE20, _EZAUTOS_COLOUR_TYPE20 );

  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE21, _EZAUTOS_COLOUR_TYPE21 );



  	$lists['colour'] = ezauHTML::selectList( $colourit, 'colour', 'class="searchbox" size="1"' , 'value', 'text', $row->colour );

  	$lists['intcolour'] = ezauHTML::selectList( $colourit, 'intcolour', 'class="searchbox" size="1"' , 'value', 'text', $row->intcolour );



?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_DETAILS_EXTCOLOUR;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['colour'];?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_DETAILS_INTCOLOUR;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['intcolour'];?></td>

        </tr>

        <?php



  # Build the fuel type list



	$fuel_typeit[] = ezauHTML::makeOption( '', _EZAUTOS_FUEL_TYPE1 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE2, _EZAUTOS_FUEL_TYPE2 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE3, _EZAUTOS_FUEL_TYPE3 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE4, _EZAUTOS_FUEL_TYPE4 );

    $fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE5, _EZAUTOS_FUEL_TYPE5 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE6, _EZAUTOS_FUEL_TYPE6 );

	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE7, _EZAUTOS_FUEL_TYPE7 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE8, _EZAUTOS_FUEL_TYPE8 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE9, _EZAUTOS_FUEL_TYPE9 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE10, _EZAUTOS_FUEL_TYPE10 );

    $fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE11, _EZAUTOS_FUEL_TYPE11 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE12, _EZAUTOS_FUEL_TYPE12 );

  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE13, _EZAUTOS_FUEL_TYPE13 );



  	$lists['fuel_type'] = ezauHTML::selectList( $fuel_typeit, 'fuel', 'class="searchbox" size="1"' , 'value', 'text', $row->fuel );



?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_FUEL;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['fuel_type'];?></td>

        </tr>

        <?php if ($row->id && $row->doorsbody) { ?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_SPECS_DOORSBODY;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <input class="inputbox" type="text" name="doorsbody" size="<?php echo $ea_textbox;?>" value="<?php echo $row->doorsbody;?>" />

              <?php echo _EZAUTOS_SPECS_REDUNDANT;?></td>

        </tr>

        <?php }



  # Build the door number list



	$doornum[] = ezauHTML::makeOption( 0, _EZAUTOS_SPECS_DOORSNS );

	$doornum[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_DOORS1 );

	$doornum[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_DOORS2 );

	$doornum[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_DOORS3 );

	$doornum[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_DOORS4 );

	$doornum[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_DOORS5 );

	$doornum[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_DOORS6 );

	$doornum[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_DOORS7 );

	$doornum[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_DOORS8 );

	$doornum[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_DOORS9 );



  	$lists['doors'] = ezauHTML::selectList( $doornum, 'doors', 'class="searchbox" size="1"' , 'value', 'text', $row->doors );



?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_SPECS_DOORS;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['doors'];?></td>

        </tr>

        <?php



  # Build the body type list



	$bodytype[] = ezauHTML::makeOption( 0, _EZAUTOS_SPECS_BODYNS );

	$bodytype[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_BODY1 );

	$bodytype[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_BODY2 );

	$bodytype[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_BODY3 );

	$bodytype[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_BODY4 );

	$bodytype[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_BODY5 );

	$bodytype[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_BODY6 );

	$bodytype[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_BODY7 );

	$bodytype[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_BODY8 );

	$bodytype[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_BODY9 );

	$bodytype[] = ezauHTML::makeOption( 10, _EZAUTOS_SPECS_BODY10 );

	$bodytype[] = ezauHTML::makeOption( 11, _EZAUTOS_SPECS_BODY11 );

	$bodytype[] = ezauHTML::makeOption( 12, _EZAUTOS_SPECS_BODY12 );



  	$lists['body'] = ezauHTML::selectList( $bodytype, 'body', 'class="searchbox" size="1"' , 'value', 'text', $row->body );



?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_SPECS_BODY;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <?php echo $lists['body'];?></td>

        </tr>

        <?php if ($row->mileage) { ?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_VLDET_MILEAGE;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <input class="inputbox" type="text" name="mileage" size="10" value="<?php echo $row->mileage;?>" />

              <?php echo _EZAUTOS_SPECS_REDUNDANT;?></td>

        </tr>

        <?php }



$odom[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_ODOMETER_TYPE1 );

$odom[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_ODOMETER_TYPE2 );

$lists['mileage_unit'] = ezauHTML::selectList( $odom, 'mileage_unit', 'class="dropbox" size="1"' , 'value', 'text', $row->mileage_unit );



?>

        <tr>

          <td class="linerControlPanel" width="200" valign="top" align="<?php echo $ea_textalign;?>"><br />

              <strong><?php echo _EZAUTOS_SPECS_ODOMETER;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <input class="inputbox" type="text" name="odometer" size="10" value="<?php if ($row->odometer !=0 ) { echo $row->odometer;} ?>" />

              <?php echo $lists['mileage_unit'];?> <?php echo _EZAUTOS_SPECS_NUMOWNERS_DESC;?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <strong><?php echo _EZAUTOS_SPECS_CO2;?>:</strong></td>

          <td class="linerControlPanel" valign="top"><br />

              <input class="inputbox" type="text" name="co2" size="10" value="<?php if ($row->co2 !=0 ) { echo $row->co2;} ?>" />

      g/km - <?php echo _EZAUTOS_SPECS_CO2_DESC;?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <strong><?php echo _EZAUTOS_SPECS_NUMOWNERS;?>:</strong></td>

          <td class="linerControlPanel" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <input class="inputbox" type="text" name="numowners" size="10" value="<?php if ($row->numowners !=0 ) { echo $row->numowners;} ?>" />

              <?php echo _EZAUTOS_SPECS_NUMOWNERS_DESC;?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_FIRSTREG;?>:</strong></td>

          <td class="linerControlPanel" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <?php echo $lists['monthreg'];?> <?php echo $lists['yearreg'];?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTINSPECTION;?>:</strong></td>

          <td class="linerControlPanel" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <?php echo $lists['monthinsp'];?> <?php echo $lists['yearinsp'];?></td>

        </tr>

        <tr>

          <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTEMISSIONSINSP;?>:</strong></td>

          <td class="linerControlPanel" align="<?php echo $ea_textalign;?>" valign="top"><br />

              <?php echo $lists['monthemiss'];?> <?php echo $lists['yearemiss'];?></td>

        </tr>

      </table>

      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-1" ) );

      </script>



      <br />

      <br />

</div>



<?php if ( $ea_vehspecs == 1 ){ ?>



   <div class="tab-page" id="tab-page-2">

      <h2 class="tab"><?php echo _EZAUTOS_LISTINGS_SPECS;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-2" ) );

      </script>



<table width="100%" bgcolor="#686868">



<?php if ( $ea_sitetype==0 && $ea_paypal && $exemptstatus == 0 ){ ?>



<?php if ( $row->premium ){ ?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FUELSYS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="fuelsystem" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->fuelsystem;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_BORESTROKE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="borestroke" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->borestroke;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_POWER;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="power" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->power;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TORQUE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="torque" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->torque;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WEIGHTPOWER;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="weightpower" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->weightpower;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTBRAKES;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="frontbrakes" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->frontbrakes;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARBRAKES;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="rearbrakes" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->rearbrakes;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WHEELDIMS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="wheeldims" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->wheeldims;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TURNCIRC;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="turncirc" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->turncirc;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_COMPRAT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="compressionratio" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->compressionratio;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TANKCAP;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="tankcapacity" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->tankcapacity;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTLENGTH;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="extlength" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->extlength;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTWIDTH;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="extwidth" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->extwidth;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTHEIGHT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="extheight" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->extheight;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTTRACK;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="fronttrack" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->fronttrack;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARTRACK;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="reartrack" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->reartrack;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WHEELBASE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="wheelbase" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->wheelbase;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTSUS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="frontsus" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->frontsus;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARSUS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="rearsus" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->rearsus;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_KERBWEIGHT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="kerbweight" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->kerbweight;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_GRCLEAR;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="groundclear" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->groundclear;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_SEATCAP;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="seatcap" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->seatcap;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_CITYFUEL;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="cityfuel" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->cityfuel;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_HWYFUEL;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="highwayfuel" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->highwayfuel;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TOWCAP;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="towingcap" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->towingcap;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_COUNTRYORIGIN;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="countryorigin" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->countryorigin;?>" /><br /><br /></td>

  </tr>



<?php } else { ?>



  <tr>

    <td class="linerControlPanel" width="100%" valign="top"><br /><strong><div align="center"><?php echo _EZAUTOS_LISTING_RESTRICTED;?></div></strong><br /><br /></td>

  </tr>



<?php } ?>



<?php } else { ?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FUELSYS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="fuelsystem" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->fuelsystem;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_BORESTROKE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="borestroke" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->borestroke;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_POWER;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="power" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->power;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TORQUE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="torque" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->torque;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WEIGHTPOWER;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="weightpower" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->weightpower;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTBRAKES;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="frontbrakes" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->frontbrakes;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARBRAKES;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="rearbrakes" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->rearbrakes;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WHEELDIMS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="wheeldims" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->wheeldims;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TURNCIRC;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="turncirc" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->turncirc;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_COMPRAT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="compressionratio" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->compressionratio;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TANKCAP;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="tankcapacity" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->tankcapacity;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTLENGTH;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="extlength" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->extlength;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTWIDTH;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="extwidth" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->extwidth;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTHEIGHT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="extheight" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->extheight;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTTRACK;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="fronttrack" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->fronttrack;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARTRACK;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="reartrack" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->reartrack;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WHEELBASE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="wheelbase" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->wheelbase;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTSUS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="frontsus" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->frontsus;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARSUS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="rearsus" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->rearsus;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_KERBWEIGHT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="kerbweight" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->kerbweight;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_GRCLEAR;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="groundclear" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->groundclear;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_SEATCAP;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="seatcap" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->seatcap;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_CITYFUEL;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="cityfuel" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->cityfuel;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_HWYFUEL;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="highwayfuel" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->highwayfuel;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TOWCAP;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="towingcap" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->towingcap;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_COUNTRYORIGIN;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="countryorigin" maxlength="50" size="<?php echo $ea_textbox;?>" value="<?php echo $row->countryorigin;?>" /><br /><br /></td>

  </tr>



<?php } ?>

</table>

<br /><br />



</div>



<?php } ?>



<?php if ( $ea_vehfeats == 1 ){ ?>



   <div class="tab-page" id="tab-page-3">

      <h2 class="tab"><?php echo _EZAUTOS_LISTINGS_FEATS;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-3" ) );

      </script>



<table width="100%" bgcolor="#686868">



<?php if ( $ea_sitetype==0 && $ea_paypal && $exemptstatus == 0 ){ ?>



<?php if ( $row->premium ){ ?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ADDFEAT;?>:</strong><br /><?php echo _EZAUTOS_VLDET_SELMULT;?><br /></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['features'];?><br /><br /></td>

  </tr>



<?php if ($row->id && $row->showfeat && !$row->features) { ?>



    <tr>

      <td colspan="2"><div class="h3"><?php echo _EZAUTOS_VLDET_REDUNDANT_FEATURES;?></div></td>

    </tr>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SHOWCARFEAT;?>:</strong><br /><?php echo _EZAUTOS_VLDET_SHOWCARFEATDESC;?></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['showfeat']; ?><br /><br /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ADDFEAT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br />



<table border="0" width="100%" cellpadding="5">

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_AIRCO; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['airco']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_POWIN; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['pwin']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_POSTEER; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['psteer']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_CC; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['cruise']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_AIRBAGS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['airbag']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_ALBS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['abs']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_AMFM; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['amfm']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_CDP; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['cdp']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_ATS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['atheft']; ?><br /><br /></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_TS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['tilt']; ?><br /><br /></td>

	</tr>

</table>



</td>

  </tr>



  <tr>

    <td width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><?php echo _EZAUTOS_VLDET_CUSTFEAT;?></td>

    <td valign="top"><br />



<table border="0" width="100%" cellpadding="5">

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom1a" size="20" maxlength="50" value="<?php echo $row->custom1a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom2a" size="20" maxlength="50" value="<?php echo $row->custom2a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom3a" size="20" maxlength="50" value="<?php echo $row->custom3a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom4a" size="20" maxlength="50" value="<?php echo $row->custom4a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom5a" size="20" maxlength="50" value="<?php echo $row->custom5a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom6a" size="20" maxlength="50" value="<?php echo $row->custom6a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom7a" size="20" maxlength="50" value="<?php echo $row->custom7a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom8a" size="20" maxlength="50" value="<?php echo $row->custom8a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom9a" size="20" maxlength="50" value="<?php echo $row->custom9a;?>" /><br /><br /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom10a" size="20" maxlength="50" value="<?php echo $row->custom10a;?>" /><br /><br /></td>

	</tr>

</table>



</td>

  </tr>



<?php } ?>



<?php } else { ?>



  <tr>

    <td width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ADDFEAT;?>:</strong></td>

    <td valign="top"><br /><strong><?php echo _EZAUTOS_LISTING_RESTRICTED;?></strong><br /><br /></td>

  </tr>



<?php } ?>



<?php } else { ?>



  <tr>

    <td width="20%" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ADDFEAT;?>:</strong><br /><?php echo _EZAUTOS_VLDET_SELMULT;?><br /></td>

    <td width="80%" valign="top"><br /><?php echo $lists['features'];?><br /><br /></td>

  </tr>



<?php if ($row->id && $row->showfeat && !$row->features) { ?>



    <tr>

      <td colspan="2"><div class="h3"><?php echo _EZAUTOS_VLDET_REDUNDANT_FEATURES;?></div></td>

    </tr>



  <tr>

    <td width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SHOWCARFEAT;?>:</strong><br /><?php echo _EZAUTOS_VLDET_SHOWCARFEATDESC;?></td>

    <td valign="top"><br /><?php echo $lists['showfeat']; ?><br /><br /></td>

  </tr>

  <tr>

    <td width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ADDFEAT;?>:</strong></td>

    <td valign="top"><br />



<table border="0" width="100%" cellpadding="5">

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_AIRCO; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['airco']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_POWIN; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['pwin']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_POSTEER; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['psteer']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_CC; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['cruise']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_AIRBAGS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['airbag']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_ALBS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['abs']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_AMFM; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['amfm']; ?></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_CDP; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['cdp']; ?></td>

	</tr>

	<tr>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_ATS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['atheft']; ?><br /><br /></td>

		<td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo _EZAUTOS_VLDET_TS; ?>: </td><td valign="top" width="100" align="<?php echo $ea_textalign;?>"><?php echo $lists['tilt']; ?><br /><br /></td>

	</tr>

</table>



</td>

  </tr>



  <tr>

    <td width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><?php echo _EZAUTOS_VLDET_CUSTFEAT;?></td>

    <td valign="top" align="<?php echo $ea_textalign;?>"><br />



<table border="0" width="100%" cellpadding="5">

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom1a" size="20" maxlength="50" value="<?php echo $row->custom1a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom2a" size="20" maxlength="50" value="<?php echo $row->custom2a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom3a" size="20" maxlength="50" value="<?php echo $row->custom3a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom4a" size="20" maxlength="50" value="<?php echo $row->custom4a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom5a" size="20" maxlength="50" value="<?php echo $row->custom5a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom6a" size="20" maxlength="50" value="<?php echo $row->custom6a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom7a" size="20" maxlength="50" value="<?php echo $row->custom7a;?>" /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom8a" size="20" maxlength="50" value="<?php echo $row->custom8a;?>" /></td>

	</tr>

	<tr>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom9a" size="20" maxlength="50" value="<?php echo $row->custom9a;?>" /><br /><br /></td>

		<td width="50%" align="<?php echo $ea_textalign;?>"><input class="inputbox" type="text" name="custom10a" size="20" maxlength="50" value="<?php echo $row->custom10a;?>" /><br /><br /></td>

	</tr>

</table>



</td>

  </tr>



<?php } ?>



<?php } ?>

</table>

<br /><br />



</div>



<?php } ?>





   <div class="tab-page" id="tab-page-4">

      <h2 class="tab"><?php echo _EZAUTOS_VLDET_MKTG1;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-4" ) );

      </script>



<table width="100%" bgcolor="#686868">



    <tr>

      <td class="sectiontableheader" colspan="2"><div align="center"><?php echo _EZAUTOS_SPECS_PRICINGCLASSIF;?></div></td>

    </tr>



<?php if ($ea_usepcode) { ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_PROPPOSTCODE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="pcode" size="10" value="<?php echo $row->pcode;?>" />  <?php echo _EZAUTOS_GENERIC_REQ;?></td>

  </tr>

<?php } 



if ($ea_usetype) {



  # Build listing type select list



  	$typeit[] = ezauHTML::makeOption( 0, _EZAUTOS_TYPE_SELECT );

if ( $ea_usetype1 ) {

  	$typeit[] = ezauHTML::makeOption( 1, _EZAUTOS_TYPE_SALE );

  }

if ( $ea_usetype2 ) {

  	$typeit[] = ezauHTML::makeOption( 2, _EZAUTOS_TYPE_RENTAL );

  }

if ( $ea_usetype3 ) {

  	$typeit[] = ezauHTML::makeOption( 3, _EZAUTOS_TYPE_LEASE );

  }

if ( $ea_usetype4 ) {

  	$typeit[] = ezauHTML::makeOption( 4, _EZAUTOS_TYPE_AUCTION );

  }

if ( $ea_usetype5 ) {

  	$typeit[] = ezauHTML::makeOption( 5, _EZAUTOS_TYPE_SWAP );

  }

if ( $ea_usetype6 ) {

  	$typeit[] = ezauHTML::makeOption( 6, _EZAUTOS_TYPE_TENDER );

  }

  

  	$lists['type'] = ezauHTML::selectList( $typeit, 'type', 'class="searchbox" size="1"' , 'value', 'text', $row->type );



?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_LISTTYPE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['type']; ?></td>

  </tr>





<?php 



}



if ( $ea_sitetype==0 ) {



if ($ea_tagit_useit == 1) {





  # Build vehicle condition select list



if ($ea_tagit_new) {

  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_NEW, _EZAUTOS_TAGIT_NEW );

}

if ($ea_tagit_new) {

  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_USED, _EZAUTOS_TAGIT_USED );

}

if ($ea_tagit_demo) {

  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_DEMO, _EZAUTOS_TAGIT_DEMO );

}

if ($ea_tagit_asnew) {

  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_ASNEW, _EZAUTOS_TAGIT_ASNEW );

}

if ($ea_tagit_preluv) {

  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_PRELUV, _EZAUTOS_TAGIT_PRELUV );

}

if ($ea_tagit_spare) {

  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_SPARE, _EZAUTOS_TAGIT_SPARE );

}

  

  	$lists['tag'] = ezauHTML::selectList( $tagit, 'tag', 'class="searchbox" size="1"' , 'value', 'text', $row->tag );



?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_TAG;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['tag']; ?></td>

  </tr>



<?php }





  # Build market availability select list



	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_AV, _EZAUTOS_AVAIL_AV );

  	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_UC, _EZAUTOS_AVAIL_UC );

  	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_SOLD, _EZAUTOS_AVAIL_SOLD );

  	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_OT, _EZAUTOS_AVAIL_OT );

  

  	$lists['sell'] = ezauHTML::selectList( $sellit, 'availability', 'class="searchbox" size="1"' , 'value', 'text', $row->availability );



 ?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_AV;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['sell']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>

  </tr>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_PRICE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="price" size="10" maxlength="30" value="<?php echo $row->price;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?> - <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>

  </tr>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_ONROAD;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="onroad" size="10" value="<?php echo $row->onroad;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?> - <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>

  </tr>





  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TAX;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['incltax']; ?></td>

  </tr>



<?php



if ($ea_usefrequit) {



  # Build rental/lease frequency select list



  	$freqit[] = ezauHTML::makeOption( 0, _EZAUTOS_RENTAL_NA );

if ($ea_usefrequit1) {

  	$freqit[] = ezauHTML::makeOption( 1, _EZAUTOS_RENTAL_DAILY );

  }

if ( $ea_usefrequit2 ) {

  	$freqit[] = ezauHTML::makeOption( 2, _EZAUTOS_RENTAL_WEEKLY );

  }

if ( $ea_usefrequit3 ) {

  	$freqit[] = ezauHTML::makeOption( 3, _EZAUTOS_RENTAL_FNIGHT );

  }

if ( $ea_usefrequit4 ) {

  	$freqit[] = ezauHTML::makeOption( 4, _EZAUTOS_RENTAL_MONTH );

  }

  

  	$lists['freq'] = ezauHTML::selectList( $freqit, 'freq', 'class="searchbox" size="1"' , 'value', 'text', $row->freq );



?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FREQUENCY;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['freq']; ?></td>

  </tr>



<?php } ?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SHOWPRICE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['showprice']; ?></td>

  </tr>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_PRICETYPE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="price_type" size="<?php echo $ea_textbox;?>" value="<?php echo $row->price_type;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?> - <?php echo _EZAUTOS_PRICETYPE;?><br /><br /></td>

  </tr>



<?php } ?>



<?php if ( $ea_sitetype==1 ) { ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_PRICE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="price" size="10" value="<?php echo $row->price;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?> - <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>

  </tr>



<?php



if ($ea_usefrequit) {



  # Build rental/lease frequency select list



  	$freqit[] = ezauHTML::makeOption( 0, _EZAUTOS_RENTAL_NA );

if ($ea_usefrequit1) {

  	$freqit[] = ezauHTML::makeOption( 1, _EZAUTOS_RENTAL_DAILY );

  }

if ( $ea_usefrequit2 ) {

  	$freqit[] = ezauHTML::makeOption( 2, _EZAUTOS_RENTAL_WEEKLY );

  }

if ( $ea_usefrequit3 ) {

  	$freqit[] = ezauHTML::makeOption( 3, _EZAUTOS_RENTAL_FNIGHT );

  }

if ( $ea_usefrequit4 ) {

  	$freqit[] = ezauHTML::makeOption( 4, _EZAUTOS_RENTAL_MONTH );

  }

  

  	$lists['freq'] = ezauHTML::selectList( $freqit, 'freq', 'class="searchbox" size="1"' , 'value', 'text', $row->freq );



?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FREQUENCY;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['freq']; ?></td>

  </tr>



<?php } ?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SHOWPRICE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['showprice']; ?></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_PRICETYPE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="price_type" size="<?php echo $ea_textbox;?>" value="<?php echo $row->price_type;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?> - <?php echo _EZAUTOS_PRICETYPE;?><br /><br /></td>

  </tr>



<?php } ?>



    <tr>

      <td class="sectiontableheader" colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_MKTG1;?></div></td>

    </tr>



<?php if ( $ea_sitetype==0 ) { ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_STOCKNUM;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="inputbox" type="text" name="stocknum" size="<?php echo $ea_textbox;?>" value="<?php echo $row->stocknum;?>" /></td>

  </tr>



<?php } ?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SDESC;?>:</strong><br /><?php echo _EZAUTOS_GENERIC_REQ;?><br />(<?php echo _EZAUTOS_VLDET_SDESCMAX;?>)</td>

    <td class="linerControlPanel" valign="top"><br /><textarea class="inputbox" rows="5" name="smalldesc" cols="<?php echo $ea_textarea;?>"><?php echo $row->smalldesc;?></textarea></td>

  </tr>





<?php if ($ea_useflv==1) { ?>

<?php if ( $ea_paypal && $exemptstatus == 0  ){ ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_VTOUR;?>:</strong><br /><br /><?php echo _EZAUTOS_LISTINGS_FLVMODE;?></td>

<?php if ( $row->premium ){ ?>

    <td class="linerControlPanel" valign="top"><br /><textarea class="inputbox" rows="5" name="video" cols="<?php echo $ea_textarea;?>"><?php if (!$row->id OR !$row->video ){ ?>http://<?php } else { ?><?php echo  $row->video;?><?php } ?></textarea> <?php echo _EZAUTOS_GENERIC_OPT;?><br /><br /></td>

<?php } else { ?>

    <td class="linerControlPanel" valign="top"><br /><strong><?php echo _EZAUTOS_LISTING_RESTRICTED;?></strong><br /><br /></td>

<?php } ?>

  </tr>

<?php } else { ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_VTOUR;?>:</strong><br /><br /><?php echo _EZAUTOS_LISTINGS_FLVMODE;?></td>

    <td class="linerControlPanel" valign="top"><br /><textarea class="inputbox" rows="5" name="video" cols="<?php echo $ea_textarea;?>"><?php if (!$row->id OR !$row->video ){ ?>http://<?php } else { ?><?php echo  $row->video;?><?php } ?></textarea> <?php echo _EZAUTOS_GENERIC_OPT;?><br /><br /></td>

  </tr>

<?php } ?>

<?php } ?>





<?php if ( $ea_paypal && $exemptstatus == 0  ){ ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_MARKETINGMATERIAL;?></strong><br /><br /></td>

<?php if ( $row->premium ){ ?>

        <td class="linerControlPanel" valign="top"><br /><?php proppdfUpload($row->pdfinfo,'1',$list['pdfinfo'],'pdfinfo');?>

<?php if ($row->pdfinfo){ ?>

&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=deletepdfinfo&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo _EZAUTOS_PROFILE_PDF_DELETE;?></a></strong>

<?php } ?><br />

</td>

<?php } else { ?>

    <td class="linerControlPanel" valign="top"><br /><strong><?php echo _EZAUTOS_LISTING_RESTRICTED;?></strong><br /><br /></td>

<?php } ?>

  </tr>

<?php } else { ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_MARKETINGMATERIAL;?></strong><br /></td>

        <td valign="top"><br /><?php proppdfUpload($row->pdfinfo,'1',$list['pdfinfo'],'pdfinfo');?>

<?php if ($row->pdfinfo){ ?>

&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=deletepdfinfo&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo _EZAUTOS_PROFILE_PDF_DELETE;?></a></strong>

<?php } ?><br />

</td>

</tr>

<?php } ?>



<?php if ( $ea_financespecs == 1 ) { ?>



    <tr>

      <td class="sectiontableheader" colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_FINANCE;?></div></td>

    </tr>



<?php if ( $ea_paypal && $exemptstatus == 0  ){ ?>

<?php if ( $row->premium ){ ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_FINANCE_AVAILABLE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['finance']; ?></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_DEPOSIT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="wideentrybox" type="text" name="deposit" size="10" value="<?php echo $row->deposit;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_REPAYMENTS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="wideentrybox" type="text" name="repayments" size="10" value="<?php echo $row->repayments;?>" />  <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>

  </tr>



<?php



  # Build the term list



	$loanterm[] = ezauHTML::makeOption( 0, _EZAUTOS_VLDET_TERMTYPENA );

	$loanterm[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_DOORS1 );

	$loanterm[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_DOORS2 );

	$loanterm[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_DOORS3 );

	$loanterm[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_DOORS4 );

	$loanterm[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_DOORS5 );

	$loanterm[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_DOORS6 );

	$loanterm[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_DOORS7 );

	$loanterm[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_DOORS8 );

	$loanterm[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_DOORS9 );

	$loanterm[] = ezauHTML::makeOption( 10, _EZAUTOS_SPECS_DOORS10 );

	$loanterm[] = ezauHTML::makeOption( 11, _EZAUTOS_SPECS_DOORS11 );

	$loanterm[] = ezauHTML::makeOption( 12, _EZAUTOS_SPECS_DOORS12 );



  	$lists['term'] = ezauHTML::selectList( $loanterm, 'term', 'class="searchbox" size="1"' , 'value', 'text', $row->term );





  # Build the term type list



	$loantermtype[] = ezauHTML::makeOption( 0, _EZAUTOS_VLDET_TERMTYPENA );

	$loantermtype[] = ezauHTML::makeOption( 1, _EZAUTOS_VLDET_TERM_MONTHS );

	$loantermtype[] = ezauHTML::makeOption( 2, _EZAUTOS_VLDET_TERM_YEARS );



  	$lists['termtype'] = ezauHTML::selectList( $loantermtype, 'termtype', 'class="searchbox" size="1"' , 'value', 'text', $row->termtype );



?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_TERM;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['term'];?> <?php echo $lists['termtype'];?></td>

  </tr>

<?php } else { ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /> </td>

    <td class="linerControlPanel" valign="top"><br /><strong><?php echo _EZAUTOS_LISTING_RESTRICTED;?></strong><br /><br /></td>

  </tr>

<?php } ?>

<?php } else { ?>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_FINANCE_AVAILABLE;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['finance']; ?></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_DEPOSIT;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="wideentrybox" type="text" name="deposit" size="10" value="<?php echo $row->deposit;?>" /></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_REPAYMENTS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><input class="wideentrybox" type="text" name="repayments" size="10" value="<?php echo $row->repayments;?>" />  <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>

  </tr>



<?php



  # Build the term list



	$loanterm[] = ezauHTML::makeOption( 0, _EZAUTOS_SPECS_DOORSNS );

	$loanterm[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_DOORS1 );

	$loanterm[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_DOORS2 );

	$loanterm[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_DOORS3 );

	$loanterm[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_DOORS4 );

	$loanterm[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_DOORS5 );

	$loanterm[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_DOORS6 );

	$loanterm[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_DOORS7 );

	$loanterm[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_DOORS8 );

	$loanterm[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_DOORS9 );

	$loanterm[] = ezauHTML::makeOption( 10, _EZAUTOS_SPECS_DOORS10 );

	$loanterm[] = ezauHTML::makeOption( 11, _EZAUTOS_SPECS_DOORS11 );

	$loanterm[] = ezauHTML::makeOption( 12, _EZAUTOS_SPECS_DOORS12 );



  	$lists['term'] = ezauHTML::selectList( $loanterm, 'term', 'class="searchbox" size="1"' , 'value', 'text', $row->term );





  # Build the term type list



	$loantermtype[] = ezauHTML::makeOption( 0, _EZAUTOS_VLDET_TERMTYPENA );

	$loantermtype[] = ezauHTML::makeOption( 1, _EZAUTOS_VLDET_TERM_MONTHS );

	$loantermtype[] = ezauHTML::makeOption( 2, _EZAUTOS_VLDET_TERM_YEARS );



  	$lists['termtype'] = ezauHTML::selectList( $loantermtype, 'termtype', 'class="searchbox" size="1"' , 'value', 'text', $row->termtype );



?>



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_TERM;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><?php echo $lists['term'];?> <?php echo $lists['termtype'];?></td>

  </tr>

<?php } ?>

<?php } ?>

</table>

<br /><br />



</div>



<?php if ( $ea_meta == 1 ) { ?>



   <div class="tab-page" id="tab-page-5">

      <h2 class="tab"><?php echo _EZAUTOS_VLDET_TAGS;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-5" ) );

      </script>



<table width="100%" bgcolor="#686868">



  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_METADESC;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><textarea class="inputbox" cols="<?php echo $ea_textarea;?>" rows="2" name="metadesc" id="metadesc"><?php echo str_replace('&','&amp;',$row->metadesc); ?></textarea></td>

  </tr>

  <tr>

    <td class="linerControlPanel" width="200" align="<?php echo $ea_textalign;?>" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_METAKEYS;?>:</strong></td>

    <td class="linerControlPanel" valign="top"><br /><textarea class="inputbox" cols="<?php echo $ea_textarea;?>" rows="2" name="metakey" id="metakey"><?php echo str_replace('&','&amp;',$row->metakey); ?></textarea><br /><br /></td>

  </tr>

</table>

<br /><br />



</div>



<?php } ?>





   <div class="tab-page" id="tab-page-6">

      <h2 class="tab"><?php echo _EZAUTOS_MEMBERS_IMAGE2;?></h2>



      <script type="text/javascript">

      tabPane1.addTabPage( document.getElementById( "tab-page-6" ) );

      </script>





<?php if ($row->images){ ?>



<table width="100%">

    <tr>

      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_IMG1;?></div></th>

    </tr>

  <tr>

    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_TABS_IMAGES;?>:</strong><br /><?php echo _EZAUTOS_SPECIAL_IMAGES_DESCRIPTION;?></td>

    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="40" rows="5" name="images" id="images"><?php echo $row->images; ?></textarea></td>

  </tr>

</table>



<?php } else { ?>





<table width="100%" bgcolor="#686868">



<?php if ( $ea_sitetype==0 && $ea_paypal && $exemptstatus == 0 ){ ?>



<?php if ( $row->premium ){ ?>



	<tr>

        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE1;?></u></strong></font></td>

        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE2;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE1;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image1desc" size="40" value="<?php echo $row->image1desc;?>" />

			<?php imageUpload($row->image1,'1',$list['image1'],'image1');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE2;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image2desc" size="40" value="<?php echo $row->image2desc;?>" />

			<?php imageUpload($row->image2,'1',$list['image2'],'image2');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE3;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE4;?></u></strong></font></td>

	</tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE3;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image3desc" size="40" value="<?php echo $row->image3desc;?>" />

			<?php imageUpload($row->image3,'1',$list['image3'],'image3');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE4;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image4desc" size="40" value="<?php echo $row->image4desc;?>" />

			<?php imageUpload($row->image4,'1',$list['image4'],'image4');?>

			</td></tr></table>

		</td>

	</tr>



<?php if ( $row->featured ){ ?>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE5;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE6;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE5;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image5desc" size="40" value="<?php echo $row->image5desc;?>" />

			<?php imageUpload($row->image5,'1',$list['image5'],'image5');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE6;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image6desc" size="40" value="<?php echo $row->image6desc;?>" />

			<?php imageUpload($row->image6,'1',$list['image6'],'image6');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE7;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE8;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE7;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image7desc" size="40" value="<?php echo $row->image7desc;?>" />

			<?php imageUpload($row->image7,'1',$list['image7'],'image7');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE8;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image8desc" size="40" value="<?php echo $row->image8desc;?>" />

			<?php imageUpload($row->image8,'1',$list['image8'],'image8');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE9;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE10;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE9;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image9desc" size="40" value="<?php echo $row->image9desc;?>" />

			<?php imageUpload($row->image9,'1',$list['image9'],'image9');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE10;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image10desc" size="40" value="<?php echo $row->image10desc;?>" />

			<?php imageUpload($row->image10,'1',$list['image10'],'image10');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE11;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE12;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE11;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image11desc" size="40" value="<?php echo $row->image11desc;?>" />

			<?php imageUpload($row->image11,'1',$list['image11'],'image11');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE12;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image12desc" size="40" value="<?php echo $row->image12desc;?>" />

			<?php imageUpload($row->image12,'1',$list['image12'],'image12');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE13;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE14;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE13;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image13desc" size="40" value="<?php echo $row->image13desc;?>" />

			<?php imageUpload($row->image13,'1',$list['image13'],'image13');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE14;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image14desc" size="40" value="<?php echo $row->image14desc;?>" />

			<?php imageUpload($row->image14,'1',$list['image14'],'image14');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE15;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE16;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE15;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image15desc" size="40" value="<?php echo $row->image15desc;?>" />

			<?php imageUpload($row->image15,'1',$list['image15'],'image15');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE16;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image16desc" size="40" value="<?php echo $row->image16desc;?>" />

			<?php imageUpload($row->image16,'1',$list['image16'],'image16');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE17;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE18;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE17;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image17desc" size="40" value="<?php echo $row->image17desc;?>" />

			<?php imageUpload($row->image17,'1',$list['image17'],'image17');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE18;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image18desc" size="40" value="<?php echo $row->image18desc;?>" />

			<?php imageUpload($row->image18,'1',$list['image18'],'image18');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE19;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE20;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE19;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image19desc" size="40" value="<?php echo $row->image19desc;?>" />

			<?php imageUpload($row->image19,'1',$list['image19'],'image19');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE20;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image20desc" size="40" value="<?php echo $row->image20desc;?>" />

			<?php imageUpload($row->image20,'1',$list['image20'],'image20');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE21;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE22;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE21;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image21desc" size="40" value="<?php echo $row->image21desc;?>" />

			<?php imageUpload($row->image21,'1',$list['image21'],'image21');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE22;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image22desc" size="40" value="<?php echo $row->image22desc;?>" />

			<?php imageUpload($row->image22,'1',$list['image22'],'image22');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE23;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE24;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE23;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image23desc" size="40" value="<?php echo $row->image23desc;?>" />

			<?php imageUpload($row->image23,'1',$list['image23'],'image23');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE24;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image24desc" size="40" value="<?php echo $row->image24desc;?>" />

			<?php imageUpload($row->image24,'1',$list['image24'],'image24');?>

			</td></tr></table>

		</td>

	</tr>



<?php } ?>



<?php } else { ?>



<?php if ( $ea_freepic ){ ?>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE1;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE1;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image1desc" size="40" value="<?php echo $row->image1desc;?>" />

			<?php imageUpload($row->image1,'1',$list['image1'],'image1');?>

			</td></tr></table>

		</td>

	</tr>



<?php } else { ?>



	<tr>

 	   <td><br /><br /><strong><?php echo _EZAUTOS_LISTING_RESTRICTED;?></strong><br /><br /></td>

	</tr>



<?php } ?>



		<?php } ?>





<?php } else { ?>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE1;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE2;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE1;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image1desc" size="40" value="<?php echo $row->image1desc;?>" />

			<?php imageUpload($row->image1,'1',$list['image1'],'image1');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE2;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image2desc" size="40" value="<?php echo $row->image2desc;?>" />

			<?php imageUpload($row->image2,'1',$list['image2'],'image2');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE3;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE4;?></u></strong></font></td>

	</tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE3;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image3desc" size="40" value="<?php echo $row->image3desc;?>" />

			<?php imageUpload($row->image3,'1',$list['image3'],'image3');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE4;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image4desc" size="40" value="<?php echo $row->image4desc;?>" />

			<?php imageUpload($row->image4,'1',$list['image4'],'image4');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE5;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE6;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE5;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image5desc" size="40" value="<?php echo $row->image5desc;?>" />

			<?php imageUpload($row->image5,'1',$list['image5'],'image5');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE6;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image6desc" size="40" value="<?php echo $row->image6desc;?>" />

			<?php imageUpload($row->image6,'1',$list['image6'],'image6');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE7;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE8;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE7;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image7desc" size="40" value="<?php echo $row->image7desc;?>" />

			<?php imageUpload($row->image7,'1',$list['image7'],'image7');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE8;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image8desc" size="40" value="<?php echo $row->image8desc;?>" />

			<?php imageUpload($row->image8,'1',$list['image8'],'image8');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE9;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE10;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE9;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image9desc" size="40" value="<?php echo $row->image9desc;?>" />

			<?php imageUpload($row->image9,'1',$list['image9'],'image9');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE10;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image10desc" size="40" value="<?php echo $row->image10desc;?>" />

			<?php imageUpload($row->image10,'1',$list['image10'],'image10');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE11;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE12;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE11;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image11desc" size="40" value="<?php echo $row->image11desc;?>" />

			<?php imageUpload($row->image11,'1',$list['image11'],'image11');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE12;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image12desc" size="40" value="<?php echo $row->image12desc;?>" />

			<?php imageUpload($row->image12,'1',$list['image12'],'image12');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE13;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE14;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE13;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image13desc" size="40" value="<?php echo $row->image13desc;?>" />

			<?php imageUpload($row->image13,'1',$list['image13'],'image13');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE14;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image14desc" size="40" value="<?php echo $row->image14desc;?>" />

			<?php imageUpload($row->image14,'1',$list['image14'],'image14');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE15;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE16;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE15;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image15desc" size="40" value="<?php echo $row->image15desc;?>" />

			<?php imageUpload($row->image15,'1',$list['image15'],'image15');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE16;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image16desc" size="40" value="<?php echo $row->image16desc;?>" />

			<?php imageUpload($row->image16,'1',$list['image16'],'image16');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE17;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE18;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE17;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image17desc" size="40" value="<?php echo $row->image17desc;?>" />

			<?php imageUpload($row->image17,'1',$list['image17'],'image17');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE18;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image18desc" size="40" value="<?php echo $row->image18desc;?>" />

			<?php imageUpload($row->image18,'1',$list['image18'],'image18');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE19;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE20;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE19;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image19desc" size="40" value="<?php echo $row->image19desc;?>" />

			<?php imageUpload($row->image19,'1',$list['image19'],'image19');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE20;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image20desc" size="40" value="<?php echo $row->image20desc;?>" />

			<?php imageUpload($row->image20,'1',$list['image20'],'image20');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE21;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE22;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE21;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image21desc" size="40" value="<?php echo $row->image21desc;?>" />

			<?php imageUpload($row->image21,'1',$list['image21'],'image21');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE22;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image22desc" size="40" value="<?php echo $row->image22desc;?>" />

			<?php imageUpload($row->image22,'1',$list['image22'],'image22');?>

			</td></tr></table>

		</td>

	</tr>



	<tr>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE23;?></u></strong></font></td>

        <td bgcolor="#000000" width="50%"><font color="#ffffff"><strong><u><?php echo _EZAUTOS_VLDET_IMAGE24;?></u></strong></font></td>

	</tr>

	<tr>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE23;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image23desc" size="40" value="<?php echo $row->image23desc;?>" />

			<?php imageUpload($row->image23,'1',$list['image23'],'image23');?>

			</td></tr></table>

		</td>

		<td width="50%" valign="top">

			<table cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr><td>

			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE24;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image24desc" size="40" value="<?php echo $row->image24desc;?>" />

			<?php imageUpload($row->image24,'1',$list['image24'],'image24');?>

			</td></tr></table>

		</td>

	</tr>



<?php } ?>

</table>



<?php } ?>



</div>







		</td>

	</tr>

</table>



<table cellpadding="0" cellspacing="0" border="0" width="97%">



<?php if ( $ea_sitetype==0 && $ea_paypal && $exemptstatus == 0 ){ ?>



<?php if ( $row->premium ){ ?>

  <tr>

    <td valign="top"><br /><br /><strong><?php echo _EZAUTOS_VLDET_LDESC;?></strong>: (<?php echo _EZAUTOS_GENERIC_OPT;?>)<br /><br />

		<?php

		// parameters : areaname, content, hidden field, width, height, rows, cols

		editorArea( 'editor1',  stripslashes($row->longdesc) , 'longdesc', '100%;', '200', '60', '20' ) ; ?>

	</td>

  </tr>

<?php } else { ?>

  <tr>

    <td valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_LDESC;?></strong>: (<?php echo _EZAUTOS_GENERIC_OPT;?>)<br /></td>

    <td valign="top"><br /><strong><?php echo _EZAUTOS_LISTING_RESTRICTED;?></strong><br /><br /></td>

  </tr>

<?php } ?>



<?php } else { ?>

  <tr>

    <td valign="top"><br /><br /><strong><?php echo _EZAUTOS_VLDET_LDESC;?></strong>: (<?php echo _EZAUTOS_GENERIC_OPT;?>)<br />

		<?php

		// parameters : areaname, content, hidden field, width, height, rows, cols

		editorArea( 'editor1',  stripslashes($row->longdesc) , 'longdesc', '100%;', '200', '60', '20' ) ; ?>

	</td>

  </tr>



<?php } ?>



</table>



<br /><br /><div align="center"><input type="button" name="<?php echo _EZAUTOS_SUBMIT_LISTING ?>" value="<?php echo _EZAUTOS_SUBMIT_LISTING ?>" class="button" onclick="updatedoc()" /></div>



</form>



<br /><br />



<?php





}









    /**************************************************\

                 TERMS OF LISTING VEHICLES

    \**************************************************/





function viewTerms ( $option, $ezterms ){

global $database, $myItemid, $mainframe;



include(EZADMIN_PATH."/config.ezautos.php");



?>



<br /><br />



<table cellpadding="0" cellspacing="0" border="0" width="100%">

	<tr>

		<td class="sectiontableheader"><?php echo _EZAUTOS_LISTING_TERMS;?></td>

	</tr>

</table>



<br />

<br />



<table width="100%">

<?php

    foreach($ezterms as $row2) {

?>

	<tr>

		<td><?php echo stripslashes($row2->content); ?></td>

	</tr>

<?php } ?>

</table>



<br /><br />



<?php





}







    /**************************************************\

                TRANSACTION SUCCESSFUL PAGE

    \**************************************************/



function showSuccess ( $option, $ezsuccess ){

global $database, $myItemid, $mainframe;



include(EZADMIN_PATH."/config.ezautos.php");



?>



<table width="100%">

<?php

    foreach($ezsuccess as $row2) {

?>

	<tr>

		<td><br /><br /><?php echo stripslashes($row2->content); ?><br /><br /><br /></td>

	</tr>

<?php } ?>

</table>





<?php



}





    /**************************************************\

                 TRANSACTION CANCELLED PAGE

    \**************************************************/



function showCancel ( $option, $ezcancel ){

global $database, $myItemid, $mainframe;



include(EZADMIN_PATH."/config.ezautos.php");



?>



<table width="100%">

<?php

    foreach($ezcancel as $row2) {

?>

	<tr>

		<td><br /><br /><?php echo stripslashes($row2->content); ?><br /><br /><br /></td>

	</tr>

<?php } ?>

</table>





<?php



}





    /**************************************************\

                    END THE HTML CLASS

    \**************************************************/





}













    /**************************************************\

                         HEADER

    \**************************************************/



function EZHeader ( ) {

global $database, $my, $myItemid, $mainframe, $id, $cid, $gid, $ea_bizname, $ea_reglead, $ea_memlistings;

global $mosConfig_live_site, $ea_sitetype, $ea_colour1, $ea_colour2, $ea_shownewlink, $ea_showfeatlink, $ea_showmenu;

global $ea_useprofile, $ea_shortlist, $ea_quicklist, $ea_showsearch;



include(EZADMIN_PATH."/config.ezautos.php");





$link1a = sefRelToAbs( 'index.php?option=com_ezautos&amp;Itemid='. $myItemid );

$link2a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=search&amp;Itemid='. $myItemid );

$link3a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=newlistings&amp;Itemid='. $myItemid );

$link4a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=featured&amp;Itemid='. $myItemid );

$link5a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=displayprofiles&amp;Itemid='. $myItemid );

$link6a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=register&amp;Itemid='. $myItemid );

$link7a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=unsubscribe&amp;Itemid='. $myItemid );

$link8a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=viewlightbox&amp;Itemid='. $myItemid );

$link9a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=listall&amp;Itemid='. $myItemid );

$link10a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=ezpanel&amp;Itemid='. $myItemid );

$link11a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=showwanted&amp;Itemid='. $myItemid );



?>



<?php if ($ea_usemap && $ea_mapsys != 2 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "detail") { ?>

<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/includes.js"></script>

<?php } ?>

<?php if ($ea_usemap && $ea_mapsys != 2 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "showprofile") { ?>

<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/includes.js"></script>

<?php } ?>



<?php if ($ea_usemap && $ea_mapsys == 3 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "detail") { ?>

<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=<?php echo $ea_mapapi;?>" type="text/javascript"></script>

<?php } ?>

<?php if ($ea_usemap && $ea_mapsys == 3 && mosGetParam($_REQUEST, 'option', '') == "com_ezautos"  && mosGetParam($_REQUEST, 'task', '') == "showprofile") { ?>

<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=<?php echo $ea_mapapi;?>" type="text/javascript"></script>

<?php } ?>





<script type="text/javascript">



function EZOver(lnk) { 

lnk.style.backgroundColor = "#<?php echo $ea_colour1;?>";lnk.style.cursor = "hand" 

}



function EZOut(lnk) { 

lnk.style.backgroundColor = "#<?php echo $ea_colour2;?>";lnk.style.cursor = "hand" 

}



</script>



<div class="componentheading"><?php echo stripslashes( $ea_bizname );?></div>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">



	<tr><td>



	<?php if ( $ea_showmenu ){ ?>



	<table border="0" cellspacing="5" cellpadding="5" width="100%"><tr>

	<td>

<div align="center">

<a href="<?php echo $link1a;?>"><?php echo _EZAUTOS_INCLUDES_HOME;?></a>



<?php if ( $ea_showsearch ) { ?>

 | <a href="<?php echo $link2a;?>"><?php echo _EZAUTOS_INCLUDES_SEARCH;?></a>

	<?php } ?>

	<?php if ( $ea_shownewlink ){ ?>

 | <a href="<?php echo $link3a;?>"><?php echo _EZAUTOS_INCLUDES_NEW;?></a>

	<?php } ?>

	<?php if ( $ea_showfeatlink ){ ?>

 | <a href="<?php echo $link4a;?>"><?php echo _EZAUTOS_FEATURED_LIST;?></a>

	<?php }

if ($ea_reglead) { ?>

 | <a href="<?php echo $link11a;?>"><?php echo _EZAUTOS_VEHICLES_WANTED;?></a>

<?php }

if ( $ea_useprofile && $ea_profaccess<=$my->gid ) { ?>

	 | <a href="<?php echo $link5a;?>"><?php echo _EZAUTOS_PROFILE_AGLINK;?></a>

	<?php } ?>

<br />

<?php if ( $ea_reglead ) { ?>

	 <a href="<?php echo $link6a;?>"><?php echo _EZAUTOS_LEADS_REGISTER;?></a>

	 | <a href="<?php echo $link7a;?>"><?php echo _EZAUTOS_VIP_UNSUBSCRIBE;?></a>

	<?php } ?>

<?php if ( $ea_shortlist ) { ?>

	| <a href="<?php echo $link8a;?>"><?php echo _EZAUTOS_VIEW_LIGHTBOX;?></a>

	<?php } ?>



<?php if ( $ea_quicklist ) { ?>

	| <a href="<?php echo $link9a;?>"><?php echo _EZAUTOS_VIEW_STOCK;?></a>

	<?php } ?>

	<?php if ( $ea_memlistings ){ ?>

	 | <a href="<?php echo $link10a;?>"><?php echo _EZAUTOS_MYEZPANEL;?></a>

	<?php } ?>





</div>

	</td>

	</tr></table>



	</td></tr>



	<?php } ?>



	<tr><td>



<?php



  return;

}





    /**************************************************\

                       MEMBERS HEADER

    \**************************************************/



function EZMembersHeader ( ){

global $myItemid, $ea_bizname, $my, $mosConfig_live_site, $ea_colour1, $ea_colour2, $ea_shortlist;;



include(EZADMIN_PATH."/config.ezautos.php");



$link1a = sefRelToAbs( 'index.php?option=com_ezautos&amp;Itemid='. $myItemid );

$link2a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=ezpanel&amp;Itemid='. $myItemid );

$link3a = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=terms&amp;Itemid='. $myItemid );

	

?>



<script type="text/javascript">



function EZOver(lnk) { 

lnk.style.backgroundColor = "#<?php echo $ea_colour1;?>";lnk.style.cursor = "hand" 

}



function EZOut(lnk) { 

lnk.style.backgroundColor = "#<?php echo $ea_colour2;?>";lnk.style.cursor = "hand" 

}



</script>



<div class="componentheading"><?php echo stripslashes( $ea_bizname );?></div>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">



<tr><td>



<div align="center">

<table  cellpadding="0" cellspacing="0" border="0">

	<tr>

	<td align="center" valign="top"><a href="<?php echo $link1a;?>"><?php echo _EZAUTOS_MAINPANEL;?></a> |

	<a href="<?php echo $link2a;?>"><?php echo _EZAUTOS_MYEZPANEL;?></a> |

 <a href="<?php echo $link3a;?>"><?php echo _EZAUTOS_LISTING_TERMS;?></a>

	</td>

	</tr>

</table>

</div>





</td></tr>



<tr><td>



<?php



}



    /**************************************************\

                       PRINT HEADER

    \**************************************************/



function EZPrintHeader ( ){

global $database, $myItemid, $mainframe, $id, $cid, $ea_telephone, $ea_bizemail, $ea_bizname, $ea_bizad;

global $ea_perpage, $ea_newlist, $ea_imgwidth, $ea_catthumbwidth, $ea_carthumbwidth, $ea_currencysign;

global $ea_viewrecommend, $ea_viewenq, $ea_viewmailing, $ea_rssfeed, $ea_reglead, $ea_shortlist;





include(EZADMIN_PATH."/config.ezautos.php");



?>





<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">

<tr><td>



<div align="center">

<table  cellpadding="0" cellspacing="0" border="0">

	<tr>

		<td align="right"><br /><a href="#" onclick="window.close()"><?php echo _EZAUTOS_INCLUDES_CLOSE;?></a><br /><br /></td>

		<td align="center" width="20"><br />&nbsp;|&nbsp;<br /><br /></td>

		<td align="left"><br /><a href="javascript:;" onclick="window.print(); return false"><?php echo _EZAUTOS_INCLUDES_PRINT;?></a><br /><br /></td>

	</tr>

</table>

</div>



</td></tr>

<tr><td>





<?php



  return;

}





    /**************************************************\

                       EMAIL HEADER

    \**************************************************/



function EZEmailHeader ( ){

global $database, $myItemid, $mainframe, $id, $cid, $ea_telephone, $ea_bizemail, $ea_bizname, $ea_bizad;

global $ea_perpage, $ea_newlist, $ea_imgwidth, $ea_catthumbwidth, $ea_carthumbwidth, $ea_currencysign;

global $ea_viewrecommend, $ea_viewenq, $ea_viewmailing, $ea_rssfeed, $ea_reglead, $ea_shortlist;



include(EZADMIN_PATH."/config.ezautos.php");

	

?>



<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">

<tr><td>



<table width="100%" cellpadding="0" cellspacing="0" border="0">

	<tr>

		<td><div align="center"><br /><a href="#" onclick="window.close()"><?php echo _EZAUTOS_INCLUDES_CLOSE;?></a><br /><br /></div></td>

	</tr>

</table>



</td></tr>

<tr><td>



<?php



  return;

}



function EZClose()



{



?>



<table width="100%" cellpadding="0" cellspacing="0" border="0">

	<tr>

		<td align="center"><br /><br /><?php echo _EZAUTOS_INCLUDES_POSTMAIL;?><br /><br /></td>

	</tr>

</table>





<?php



return;



}



    /**************************************************\

                         FOOTER

    \**************************************************/



function EZFooter ( ){

global $myItemid, $ea_rssfeed, $mosConfig_live_site, $mainframe;



include(EZADMIN_PATH."/config.ezautos.php");



$link1rss = $mosConfig_live_site.'/index2.php?option=com_ezautos&amp;task=newrss&amp;Itemid='. $myItemid.'&amp;no_html=1';



?>



	</td></tr>



	<?php if ( $ea_rssfeed ){ ?>



	<tr><td><br /><br /><a href="<?php echo $link1rss;?>" target="_blank"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/rss.png" border="0" alt="<?php echo _EZAUTOS_INCLUDES_RSS;?>" title="<?php echo _EZAUTOS_INCLUDES_RSS;?>" /> - <?php echo _EZAUTOS_INCLUDES_RSS;?></a></td></tr>



	<?php } ?>



	<?php if ( $ea_useback ){ ?>

	<tr><td>



<div align="center">

<table>

	<tr>

	<td align="center"><br /><br /><input class="button" type="button" value="<?php echo _EZAUTOS_INCLUDES_BACK;?>" onclick="javascript:history.go(-1)" /></td>

	</tr>

</table>

</div>



	</td></tr>

	<?php } ?>

	</table>



<?php

  return;

}





    /**************************************************\

                     MEMBERS FOOTER

    \**************************************************/



function EZMembersFooter ( ){

global $myItemid, $mosConfig_live_site;



include(EZADMIN_PATH."/config.ezautos.php");



?>



	</td></tr>



	<tr><td><br /><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=terms");?>"><?php echo _EZAUTOS_LISTING_TERMS;?></a></div><br /></td></tr>



	</table>



<?php



}





    /**************************************************\

                      PRINT FOOTER

    \**************************************************/



function EZPrintFooter ( ){

global $myItemid;



include(EZADMIN_PATH."/config.ezautos.php");



?>



	</td></tr>

	<tr><td>



<div align="center">

<table>

	<tr>

	<td align='center'><br /><br /><br /><div align="center"><span class='small'><?php echo mosCurrentDate(); ?></span></div></td>

	</tr>

</table>

</div>

	</td></tr>



	</table>





<?php



  return;



}





    /**************************************************\

                      EMAIL FOOTER

    \**************************************************/



function EZEmailFooter ( ){

global $myItemid;



include(EZADMIN_PATH."/config.ezautos.php");



?>



	</td></tr>

	<tr><td>



<div align="center">

	<table>

	<tr>

	<td><br /><br /><br /><div align="center"><span class='small'><?php echo mosCurrentDate(); ?></span></div></td>

	</tr></table>

</div>

	</td></tr>



</table>



<?php



  return;



}













?>