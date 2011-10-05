<?php

/**
* FileName: mod_ezautos_featured.php
* Date: 14-10-2008
* License: Commercial copyright
* Script Version #: 3.14
* EZ Autos Version #: 5.2.0 stable
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


# Kill notices because people panic for no reason
error_reporting(E_ALL ^ E_NOTICE);

# call some core configuration variables:
global $mainframe, $mosConfig_lang;

DEFINE("EZADMIN_PATH2b","administrator/components/com_ezautos");

if (file_exists(EZADMIN_PATH2b."/config.ezautos.php")) {
  include(EZADMIN_PATH2b."/config.ezautos.php");
} else {
echo 'Configuration file not available';
}

# Get the right language file

if ($ea_cms == 3){
DEFINE("LANGUAGE_PATH2b","modules/mod_ezautos_featured/mod_ezautos_featured");
} else {
DEFINE("LANGUAGE_PATH2b","modules/mod_ezautos_featured");
}

if (file_exists(LANGUAGE_PATH2b."/".$mainframe->getCfg( 'lang' ).".php")) {
  include(LANGUAGE_PATH2b."/".$mainframe->getCfg( 'lang' ).".php");
} elseif (file_exists(LANGUAGE_PATH2b."/english.php"))  {
  include(LANGUAGE_PATH2b."/english.php");
} else {
echo "Language file is not available";
}



$moduleclass_sfx    = $params->get( 'moduleclass_sfx' );
$width 		= $params->get( 'width' ) ;
$vertspace 	= $params->get( 'vertspace' ) ;
$horizspace = $params->get( 'horizspace' ) ;
$imgalign 	= $params->get( 'imgalign' ) ;
$slimbox4 	= $params->get( 'slimbox4' ) ;
$popwidth1 	= $params->get( 'popwidth1' ) ;


echo '<table width="100%" class="moduletable' . $moduleclass_sfx .'">';


if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
    . "\n WHERE a.published = '1' AND a.featured = 1 AND a.hits<$ea_impnum ORDER BY RAND() LIMIT 1"
	;
	$database->setQuery( $query );

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
    . "\n WHERE a.published = '1' AND a.featured = 1 AND a.expdate>$currentdate ORDER BY RAND() LIMIT 1"
	;
	$database->setQuery( $query );

}

} else {

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
    . "\n WHERE a.published = '1' AND a.featured = 1 ORDER BY RAND() LIMIT 1"
	;
	$database->setQuery( $query );

}


	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}


    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

	$rowcounter=0;
	foreach ( $rows as $row )

	{

		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);
		} else {
			$formatted_price = number_format($number, 2,",",".");
		}

?>

	<tr>

		<td valign='top'>
<div align="left">
		<br /><span class="h3"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?> - 

		<?php if ( $row->showprice ) { ?>
		<?php if ( $ea_currencypos==0 ) { ?>
		<?php echo $ea_currencysign.''.$formatted_price;?>
		<?php } else { ?>
		<?php echo $formatted_price.' '.$ea_currencysign;?>
		<?php } ?>
		<?php } else { ?>
		<?php echo 'Price on Request';?>
		<?php } ?>

</span>
<br /><br />
</div>
</td>
	</tr>
	<tr>

		<td valign="top"><div align="left">


<?php if ($slimbox4 == 1) { ?>

<?php if ($row->image1) { ?><a href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" rel="lightbox" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>"><?php } ?><?php if ($row->image1) { ?>

AAA<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory.'/'.$row->image1;?>" width="<?php echo $width;?>" border='0' align="<?php echo $imgalign;?>" style="margin-top: <?php echo $vertspace;?>px; margin-bottom: <?php echo $vertspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php }else{ ?>
<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/nothumb.gif" width="<?php echo $width;?>" border='0' align="<?php echo $imgalign;?>" style="margin-top: <?php echo $vertspace;?>px; margin-bottom: <?php echo $vertspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php } ?><?php if ($row->image1) { ?></a><?php } ?>

<?php } elseif ($slimbox4 == 2) { ?>

<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>" onmouseover="return overlib('<img src=components/com_ezautos/<?php if ($row->image1) { ?><?php echo $ea_imagedirectory.'/'.$row->image1;?><?php }else{ ?><?php echo $ea_imagedirectory;?>/nothumb.gif<?php } ?> width=<?php echo $popwidth1;?> />', VAUTO, HAUTO, '<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative; ?>');" onmouseout="return nd();"><?php if ($row->image1) { ?>
<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory.'/'.$row->image1;?>" width="<?php echo $width;?>" border='0' align="<?php echo $imgalign;?>" style="margin-top: <?php echo $vertspace;?>px; margin-bottom: <?php echo $vertspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php }else{ ?>
<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/nothumb.gif" width="<?php echo $width;?>" border='0' align="<?php echo $imgalign;?>" style="margin-top: <?php echo $vertspace;?>px; margin-bottom: <?php echo $vertspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php } ?></a>

<?php } else { ?>

<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>">

<?php if ($row->image1) { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory.'/'.$row->image1;?>" width="<?php echo $width;?>" border='0' align="<?php echo $imgalign;?>" style="margin-top: <?php echo $vertspace;?>px; margin-bottom: <?php echo $vertspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php }else{ ?>
<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/nothumb.gif" width="<?php echo $width;?>" border='0' align="<?php echo $imgalign;?>" style="margin-top: <?php echo $vertspace;?>px; margin-bottom: <?php echo $vertspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php } ?></a>

<?php } ?>

		<?php echo $row->smalldesc;?> ... <br />

<?php if ( $row->tag ) { ?>
		<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp; <?php echo _MOD_EZAUTOS_F1;?> : <?php echo $row->tag;?><br />
<?php } ?>
<?php if ( $row->odometer ) { ?>
		<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp; <?php echo _MOD_EZAUTOS_F2;?> : <?php echo $row->odometer.' '.$row->mileage_unit;?><br />
<?php } ?>
<?php if ( !$row->odometer && $row->mileage ) { ?>
		<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp; <?php echo _MOD_EZAUTOS_F2;?> : <?php echo $row->mileage;?><br />
<?php } ?>
<?php if ( $row->engine ) { ?>
		<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp; <?php echo _MOD_EZAUTOS_F3;?> : <?php echo $row->engine;?><br />
<?php } ?>
<?php if ( $row->fuel ) { ?>
		<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp; <?php echo _MOD_EZAUTOS_F6;?> : <?php echo $row->fuel;?><br />
<?php } ?>
<?php if ( $row->trans ) { ?>
		<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp; <?php echo _MOD_EZAUTOS_F4;?> : <?php echo $row->trans;?><br />
<?php } ?>
<?php if ( $row->colour ) { ?>
		<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp; <?php echo _MOD_EZAUTOS_F5;?> : <?php echo $row->colour;?><br /><br />
<?php } ?>


		<a class="readon" href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo _MOD_EZAUTOS_FREADMORE;?></a>
</div>
		</td>
	</tr>


<?php
                    $rowcounter++;
                }

}else{


}


?>
</table>

<br />
