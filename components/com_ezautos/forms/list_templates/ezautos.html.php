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
global $database, $myItemid, $mainframe, $ea_catthumbwidth, $ea_bizintro, $ea_colcount, $ea_colwidth;

include(EZADMIN_PATH."/config.ezautos.php");

$mainframe->appendMetaTag( 'title', _EZAUTOS_CATEGORIES );
$mainframe->setPageTitle( _EZAUTOS_CATEGORIES );


?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>

<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {
	font-size: 14pt;
	color: #9F0000;
	font-weight: bold;
}
-->
</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

<?php foreach($bizintro as $row2) { ?>

	<tr>
		<td><br /><?php echo stripslashes($row2->content);?><br /></td>
	</tr>

<?php } ?>

	<tr>
		<td class="sectiontableheader"><?php echo _EZAUTOS_CATEGORIES;?></td>
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
			<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)" onclick="location.href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewcategory&amp;id=$row->cid");?>'">
				<tr>

<?php if ( $row->image <> "" ){ ?>

					<td valign="top" width="<?php echo $ea_catthumbwidth;?>">
					<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewcategory&amp;id=$row->cid");?>">
					<img src='<?php echo $mosConfig_live_site;?>/images/stories/<?php echo $row->image;?>' align='left' border='0' width='<?php echo $ea_catthumbwidth;?>' alt='category' /></a>
					</td>

<?php } ?>

					<td valign="top">
						<span class="h3"><?php echo $row->name;?></span> <font size='-7'>(<?php echo CountCont( $row->cid ) ?><?php if (CountCont( $row->cid ) == 1 ){ ?> <?php echo _EZAUTOS_VEHICLE;?><?php } else { ?> <?php echo _EZAUTOS_VEHICLES;?><?php } ?>)</font><br />
						<?php echo $row->description;?> ... <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewcategory&amp;id=$row->cid");?>"><strong><?php echo _EZAUTOS_VIEWCAR;?></strong></a>
					</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
				<tr>
					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
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

	<tr>
		<td><br /><?php echo stripslashes($row2->content);?><br /></td>
	</tr>

<?php } ?>

	<tr>
		<td>

<table border="0" width="100%">
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
							
							 <?php if ($usemakmod) { ?>
          <tr> 
            <td><?php echo $lists['make2'];?></td>
          </tr>
          <tr> 
            <td><?php echo $lists['model2'];?></td>
          </tr>
          <?php } ?>
							
							
							
							
							
							
							
							
							
								<td><?php echo $lists['make']; ?></td>
							</tr>
							<tr>
								<td><?php echo $lists['model']; ?></td>
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
		<td valign="top"><div class="h2"><?php echo _EZAUTOS_FEATURED_LIST;?></div>

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
<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" align="left" border="0" style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px; margin-right: 5px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row2->year.' '.$row2->makename.' '.$row2->modelname.' '.$row2->derivative;?>" alt="<?php echo $row2->year.' '.$row2->makename.' '.$row2->modelname.' '.$row2->derivative;?>" /><?php } ?>
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

		</td>
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
global $database, $myItemid, $mainframe, $ea_catthumbwidth, $ea_bizintro, $ea_colcount, $ea_colwidth;

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

		<td valign="top">
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

		<td valign="top">
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

<form