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

//Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);
		} else {
			$formatted_price = number_format($number, 2,",",".");
		}

$status1 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=580,directories=no,location=no';
$status2 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$status3 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$status4 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';

$link1 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=print&amp;id='.$row->id.'&amp;Itemid='.$myItemid;
$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=enquire&amp;id='.$row->id.'&amp;Itemid='.$myItemid;
$link3 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=recommend&amp;id='.$row->id.'&amp;Itemid='.$myItemid;
$link4 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=maillist&amp;id='.$row->id.'&amp;Itemid='.$myItemid;
$link5 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=contactseller&amp;id='.$row->id.'&amp;Itemid='.$myItemid;
$link6 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=smsseller&amp;id='.$row->id.'&amp;Itemid='.$myItemid;
$link7 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=lightbox&amp;id='.$row->id.'&amp;Itemid='.$myItemid;
$link8 = sefRelToAbs( 'index.php?option=com_pms&amp;page=new&amp;id='. $row->user1 .'&amp;title='._EZAUTOS_REPMS.' '. $row->id );

?> 

<script type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

//-->
</script>
				
<script type="text/javascript">
<!--

function toggleTab(tab)
{
 myTab = MM_findObj(tab);
 myTab.style.display == '' ? myTab.style.display = 'none' : myTab.style.display = '';
}
//-->

</script>


<table border="0" width="100%" cellspacing="2" cellpadding="5">
	<tr>
		<td>

<!--BEGIN MAKE/MODEL ETC AND SHORT DESCRIPTION-->			

			<table border="0" width="100%">
				<tr>
					<td class="sectiontableheader"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></td>
				</tr>
			</table>

<!--END MAKE/MODEL ETC AND SHORT DESCRIPTION-->			

		</td>
	</tr>

	<tr>
		<td valign="top" width="100%">

<!--START IMAGE TABLE-->			

<?php

DEFINE("IMAGES_PATH","components/com_ezautos/library/widgets/images");

if ($row->images) {

if (file_exists(IMAGES_PATH."/images2a.php")) {
  include(IMAGES_PATH."/images2a.php");
} else {
}

} else {

if (file_exists(IMAGES_PATH."/images2b.php")) {
  include(IMAGES_PATH."/images2b.php");
} else {
}

}

?>

<!--END IMAGE TABLE-->			


		</td>
	</tr>

	<tr>
		<td>


		
<!--START JAVASCRIPT DROPDOWN BOX SYSTEM-->			


<table width="100%" cellpadding="0" cellspacing="0">					
	<tr> 
		<td>
                      

<table width="100%" border="0" cellpadding="1" cellspacing="0" class="sectiontableentry1" style="border: outset 1px; cursor: hand;" onclick="toggleTab('summary');">
	<tr> 
		<td>
			<table border="0" cellspacing="0" cellpadding="1" style="font: 10pt Tahoma;">
				<tr valign="middle"> 
					<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow_down.png" border="0" width="10" height="10" hspace="5" alt="" /></td>
					<td><strong><?php echo _EZAUTOS_LISTINGS_SUMMARY;?>&nbsp;</strong></td>
					<td><font size='1'>(<?php echo _EZAUTOS_LISTINGS_EXPAND;?>)</font></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<div id="summary" style="padding: 10px;" > 

							<div align="center">
								<table border="0" width="95%" cellspacing="0" cellpadding="0">
								<tr>
					<td align="left">


							<div align="center">
								<table border="0" width="100%">
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_ADDNUM; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->id;?></td>
								</tr>
<?php if ( $ea_structure == 1 ) { ?>
				<tr>
					<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_CATG; ?>&nbsp;:</strong>&nbsp;&nbsp;<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewcategory&amp;id=$row->cid");?>"><?php echo $row->category;?></a></td>
				</tr>
<?php } else { ?>
				<tr>
					<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_CATG; ?>&nbsp;:</strong>&nbsp;&nbsp;<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=results&amp;cid=$row->cid&amp;trans=&amp;tag=&amp;pcode=&amp;fuel=&amp;make=0&amp;model=0&amp;maxprice=&amp;minprice=&amp;direction=ASCPRICE&amp;limit=10&amp;limitstart=0");?>"><?php echo $row->category;?></a></td>
				</tr>
<?php } ?>
								<?php if ( $ea_sitetype==0 ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_PRICE; ?>&nbsp;:</strong>&nbsp;&nbsp;
<?php
if ( $row->showprice && $row->price != 0 ) {
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
?>

</td>
								</tr>
								<?php } ?>

									<?php if ( $row->incltax ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TAX; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo _EZAUTOS_DET_YES; ?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->onroad > "0.00" ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_ONROAD; ?>&nbsp;:</strong>&nbsp;&nbsp;

									<?php
									$number3 = $row->onroad;
									if ($ea_currencyformat==0) {
									$formatted_price3 = number_format($number3);
									} else {
									$formatted_price3 = number_format($number3, 2,",",".");
									}
									?>
									<?php if ( $ea_currencypos==0 ) { ?>
									<?php echo $ea_currencysign.''.$formatted_price3;?>
									<?php } else { ?>
									<?php echo $formatted_price3.' '.$ea_currencysign;?>
									<?php } ?>

										</td>
									</tr>
									<?php } ?>

								<?php if ( $row->engine ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_ENGSIZE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->engine;?></td>
								</tr>
								<?php } ?>
									<?php if ( $row->trans ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_TRANSMISSION; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->trans;?></td>
									</tr>
									<?php } ?>
									<?php if ( $row->fuel ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_FUEL; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->fuel;?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->odometer ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_MILEAGE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->odometer.' '.$row->mileage_unit;?></td>
									</tr>
									<?php } ?>
									<?php if ( !$row->odometer && $row->mileage ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_MILEAGE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->mileage;?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->colour ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DETAILS_EXTCOLOUR; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->colour;?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->intcolour ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DETAILS_INTCOLOUR; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->intcolour;?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->doors ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_DOORS;?>&nbsp;:</strong>&nbsp;&nbsp;

<?php

if ($row->doors == 0) { echo _EZAUTOS_SPECS_DOORSNS; }
if ($row->doors == 1) { echo _EZAUTOS_SPECS_DOORS1; }
if ($row->doors == 2) { echo _EZAUTOS_SPECS_DOORS2; }
if ($row->doors == 3) { echo _EZAUTOS_SPECS_DOORS3; }
if ($row->doors == 4) { echo _EZAUTOS_SPECS_DOORS4; }
if ($row->doors == 5) { echo _EZAUTOS_SPECS_DOORS5; }
if ($row->doors == 6) { echo _EZAUTOS_SPECS_DOORS6; }
if ($row->doors == 7) { echo _EZAUTOS_SPECS_DOORS7; }
if ($row->doors == 8) { echo _EZAUTOS_SPECS_DOORS8; }
if ($row->doors == 9) { echo _EZAUTOS_SPECS_DOORS9; }

?>

</td>
									</tr>
									<?php } ?>
									<?php if ( $row->body ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_BODY;?>&nbsp;:</strong>&nbsp;&nbsp;

<?php
if ($row->body == 0) { echo _EZAUTOS_SPECS_BODYNS; }
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
?>
										</td>
									</tr>
									<?php } ?>



									<?php if ( $row->doorsbody && !$row->doors OR !$row->body ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_DOORSBODY;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->doorsbody;?></td>
									</tr>
									<?php } ?>

								<?php if ( $row->year ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_YOM;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->year;?></td>
								</tr>
								<?php } ?>

								<?php if ( $row->yearreg ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_FIRSTREG;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->monthreg.'/'.$row->yearreg;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->yearinsp ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTINSPECTION;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->monthinsp.'/'.$row->yearinsp;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->yearemiss ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTEMISSIONSINSP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->monthemiss.'/'.$row->yearemiss;?></td>
								</tr>
								<?php } ?>

									<?php if ( $row->co2 ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_CO2;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->co2;?> <?php echo _EZAUTOS_VLDET_CO2EMM;?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->numowners ) { ?>
									<tr>
										<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_NUMOWNERS;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->numowners;?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->tag ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_CONDITION; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->tag;?></td>
								</tr>
									<?php } ?>

								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_AVAILABILITY; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->availability;?></td>
								</tr>

								<?php if ( $row->rego ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_REG;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->rego;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->vin ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_VIN;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->vin;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->stocknum ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_STOCKNUM;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->stocknum;?></td>
								</tr>
								<?php } ?>
							</table>
						</div>

					</td>
					<td valign="top" align="right">
<?php if ( $row->pdfinfo ) { ?>
<table border="0">
	<tr><td valign="top"><a target="_blank" href="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/pdfs/<?php echo $row->pdfinfo;?>"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/marketing.png" border="0" alt="<?php echo _EZAUTOS_PROFILE_DOWNLOAD_PROMO;?>" /></a></td></tr>
</table>
<?php } ?>
					</td>
								</tr>
								</table>
							</div>

</div>

<!--START TECHNICAL SPECIFICATIONS TABLE-->			




	<table width="100%" border="0" cellpadding="1" cellspacing="0" class="sectiontableentry1" style="border: outset 1px; cursor: hand;" onclick="toggleTab('specifications');" >
		<tr> 
			<td>
			<table border="0" cellspacing="0" cellpadding="1" style="font: 10pt Tahoma;">
					<tr valign="middle"> 
						<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow_down.png" border="0" width="10" height="10" hspace="5" alt="" /></td>
						<td><strong><?php echo _EZAUTOS_LISTINGS_TECHNICAL;?></strong></td>
						<td><font size='1'>(<?php echo _EZAUTOS_LISTINGS_EXPAND;?>)</font></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<div id="specifications" style="padding: 10px; display: none;">

	<div align="center">
		<table border="0" width="95%">

<?php if ( !$row->fuelsystem && !$row->borestroke && !$row->power && !$row->torque && !$row->weightpower && !$row->frontbrakes 
&& !$row->rearbrakes && !$row->wheeldims && !$row->turncirc && !$row->compressionratio && !$row->tankcapacity && !$row->extlength 
&& !$row->extwidth && !$row->extheight && !$row->fronttrack && !$row->reartrack && !$row->wheelbase && !$row->frontsus 
&& !$row->rearsus && !$row->kerbweight && !$row->groundclear && !$row->seatcap && !$row->cityfuel && !$row->highwayfuel 
&& !$row->towingcap && !$row->countryorigin ) { ?>

<tr>
	<td><?php echo _EZAUTOS_LISTINGS_NOTECHSPECS;?></td>
</tr>

<?php } else { ?>

								<?php if ( $row->fuelsystem ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FUELSYS; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->fuelsystem;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->borestroke ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_BORESTROKE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->borestroke;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->power ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_POWER; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->power;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->torque ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TORQUE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->torque;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->weightpower ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_WEIGHTPOWER; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->weightpower;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->frontbrakes ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FRONTBRAKES; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->frontbrakes;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->rearbrakes ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_REARBRAKES; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->rearbrakes;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->wheeldims ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_WHEELDIMS;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->wheeldims;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->turncirc ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TURNCIRC;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->turncirc;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->compressionratio ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_COMPRAT;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->compressionratio;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->tankcapacity ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TANKCAP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->tankcapacity;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->extlength ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_EXTLENGTH;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->extlength;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->extwidth ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_EXTWIDTH; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->extwidth;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->extheight ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_EXTHEIGHT; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->extheight;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->fronttrack ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FRONTTRACK; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->fronttrack;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->reartrack ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_REARTRACK; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->reartrack;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->wheelbase ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_WHEELBASE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->wheelbase;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->frontsus ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FRONTSUS; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->frontsus;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->rearsus ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_REARSUS; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->rearsus;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->kerbweight ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_KERBWEIGHT;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->kerbweight;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->groundclear ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_GRCLEAR;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->groundclear;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->seatcap ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_SEATCAP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->seatcap;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->cityfuel ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_CITYFUEL;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->cityfuel;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->highwayfuel ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_HWYFUEL;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->highwayfuel;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->towingcap ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TOWCAP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->towingcap;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->countryorigin ) { ?>
								<tr>
									<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_COUNTRYORIGIN;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->countryorigin;?></td>
								</tr>
								<?php } ?>


<?php } ?>

		</table>
	</div>


</div>

<!--END TECHNICAL SPECIFICATIONS TABLE-->			




<!--START ADDITIONAL VEHICLE FEATURES TABLE-->			


<?php if ($row->features) { ?>

	<table width="100%" border="0" cellpadding="1" cellspacing="0" class="sectiontableentry1" style="border: outset 1px; cursor: hand;" onclick="toggleTab('features');" >
		<tr> 
			<td>
			<table border="0" cellspacing="0" cellpadding="1" style="font: 10pt Tahoma;">
					<tr valign="middle"> 
						<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow_down.png" border="0" width="10" height="10" hspace="5" alt="" /></td>
						<td><strong><?php echo _EZAUTOS_DET_ADDFEAT; ?></strong></td>
						<td><font size='1'>(<?php echo _EZAUTOS_LISTINGS_EXPAND;?>)</font></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<div id="features" style="padding: 10px; display: none;"> 

		<table border="0" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td valign="top" align="left"><?php echo $row->features;?><br /></td>
			</tr>
		</table>

	</div>

			<?php } ?>


			<?php if ( !$row->features && $row->showfeat ) { ?>

	<table width="100%" border="0" cellpadding="1" cellspacing="0" class="sectiontableentry1" style="border: outset 1px; cursor: hand;" onclick="toggleTab('features');" >
		<tr> 
			<td>
			<table border="0" cellspacing="0" cellpadding="1" style="font: 10pt Tahoma;">
					<tr valign="middle"> 
						<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow_down.png" border="0" width="10" height="10" hspace="5" alt="" /></td>
						<td><strong><?php echo _EZAUTOS_DET_ADDFEAT; ?></strong></td>
						<td><font size='1'>(<?php echo _EZAUTOS_LISTINGS_EXPAND;?>)</font></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<div id="features" style="padding: 10px; display: none;"> 

	<div align="center">

<table border="0" width="95%">
<tr>
<td width="50%" valign="top">

		<table border="0" width="100%">

<?php if ( $row->airco ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_AIRCO; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->pwin ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_POWIN; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->psteer ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_POSTEER; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->cruise ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_CC; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->airbag ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_AIRBAGS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->abs ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_ALBS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->amfm ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_AMFM; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->cdp ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_CDP; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->atheft ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_ATS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->tilt ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_TS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
</table>
</td>

<td width="50%" valign="top">

		<table border="0" width="100%">
<?php if ( $row->custom1a ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom1a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom2a ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom2a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom3a ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom3a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom4a ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom4a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom5a ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom5a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom6a ) { ?>
			<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom6a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom7a ) { ?>
			<tr>
				<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom7a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>
<?php if ( $row->custom8a ) { ?>
			<tr>
				<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom8a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>
<?php if ( $row->custom9a ) { ?>
			<tr>
				<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom9a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>
<?php if ( $row->custom10a ) { ?>
			<tr>
				<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom10a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>

		</table>

</td>
</tr>
</table>


	</div>

</div>

<?php } ?>

<!--END ADDITIONAL VEHICLE FEATURES TABLE-->			



<!--BEGIN DESCRIPTIVE VEHICLE INFORMATION SECTION-->			


	<table width="100%" border="0" cellpadding="1" cellspacing="0" class="sectiontableentry1" style="border: outset 1px; cursor: hand;" onclick="toggleTab('featuresxx');" >
		<tr> 
			<td>
			<table border="0" cellspacing="0" cellpadding="1" style="font: 10pt Tahoma;">
					<tr valign="middle"> 
						<td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/arrow_down.png" border="0" width="10" height="10" hspace="5" alt="" /></td>
						<td><strong><?php echo _EZAUTOS_CATEGORY_DEFCONTENT; ?></strong></td>
						<td><font size='1'>(<?php echo _EZAUTOS_LISTINGS_EXPAND;?>)</font></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<div id="featuresxx" style="padding: 10px; display: none;"> 

		<table border="0" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td>
					<?php if ( $row->longdesc ){ ?><?php echo parseThruBots(stripslashes($row->longdesc));?>
					<?php } else { ?>
					<?php echo parseThruBots($row->smalldesc);?>
					<?php } ?>
				</td>
			</tr>
		</table>
</div>


<!--END DESCRIPTIVE VEHICLE INFORMATION SECTION-->			





						</td>
                    </tr>
</table>

<!--END JAVASCRIPT DROPDOWN BOX SYSTEM-->			


		</td>
	</tr>


<tr>

<td>

<div align="center">
<table>

				<tr>



					<td valign="top">
<?php if ( $ea_usemap && $row->dealer_declat && $row->dealer_declong && $row->show_addy ){ ?>


<!--START GOOGLE COORDINATES MAPPING BOX STUFF-->			

<div align="center">

    <script type="text/javascript">
    //<![CDATA[

function ezautosmap()
{

    // Check to see if this browser can run the Google API
    if (GBrowserIsCompatible()) {

      gmarkers = [];
      htmls = [];
      to_htmls = [];
      from_htmls = [];
      i=0;

      // Display the map, with some controls and set the initial location 
      var map = new GMap2(document.getElementById("automap"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng( <?php echo $row->dealer_declat;?>,<?php echo $row->dealer_declong;?>), 15);
      map.setMapType(<?php echo $ea_mapview;?>);
    
      // Set up three markers with info windows 
    
      var point = new GLatLng( <?php echo $row->dealer_declat;?>,<?php echo $row->dealer_declong;?>);
      var marker = createMarker(point,'<?php echo $row->id;?>','<strong><?php echo $row->year." ".$row->makename." ".$row->modelname." ".$row->derivative;?></strong>')
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

      // A function to create the marker and set up the event window
      function createMarker(point,name,html) {
        var marker = new GMarker(point);

        // The info window version with the "to here" form open
        to_htmls[i] = html + '<br /><?php echo _EZAUTOS_MAP_DIRECTIONS;?>: <strong><?php echo _EZAUTOS_MAP_TOHERE;?></strong> - <a href="javascript:fromhere(' + i + ')"><?php echo _EZAUTOS_MAP_FROMHERE;?></a>' +
           '<br /><?php echo _EZAUTOS_MAP_START;?>:<form action="http://maps.google.com/maps" method="get" target="_blank">' +
           '<input type="text" size="40" maxlength="40" name="saddr" id="saddr" value="" /><br />' +
           '<input value="<?php echo _EZAUTOS_MAP_DIRECTIONS;?>" type="submit">' +
           '<input type="hidden" name="daddr" value="' + point.lat() + ',' + point.lng() + 
                  // "(" + name + ")" + 
           '"/>';
        // The info window version with the "to here" form open
        from_htmls[i] = html + '<br><?php echo _EZAUTOS_MAP_DIRECTIONS;?>: <a href="javascript:tohere(' + i + ')"><?php echo _EZAUTOS_MAP_TOHERE;?></a> - <strong><?php echo _EZAUTOS_MAP_FROMHERE;?></strong>' +
           '<br /><?php echo _EZAUTOS_MAP_END;?>:<form action="http://maps.google.com/maps" method="get" target="_blank">' +
           '<input type="text" size="40" maxlength="40" name="daddr" id="daddr" value="" /><br />' +
           '<input value="<?php echo _EZAUTOS_MAP_DIRECTIONS;?>" type="submit">' +
           '<input type="hidden" name="saddr" value="' + point.lat() + ',' + point.lng() +
                  // "(" + name + ")" + 
           '"/>';
        // The inactive version of the direction info
        html = html + '<br /><?php echo _EZAUTOS_MAP_DIRECTIONS;?>: <a href="javascript:tohere('+i+')"><?php echo _EZAUTOS_MAP_TOHERE;?></a> - <a href="javascript:fromhere('+i+')"><?php echo _EZAUTOS_MAP_FROMHERE;?></a>';

        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        gmarkers[i] = marker;
        htmls[i] = html;
        i++;
        return marker;
      }

      // functions that open the directions forms
      function tohere(i) {
        gmarkers[i].openInfoWindowHtml(to_htmls[i]);
      }
      function fromhere(i) {
        gmarkers[i].openInfoWindowHtml(from_htmls[i]);
      }

    </script>

</div>

   <div id="automap" style="width: <?php echo $ea_mapwidth;?>px; height: <?php echo $ea_mapheight;?>px"></div>

<!--END GOOGLE COORDINATES MAPPING BOX-->			


					<?php } ?>
		</td>




<td valign="top">
<br />

<?php if ( $row->video != "http://" && $ea_useflv==1 && $row->video) { ?>

										<div align="center">

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" height="<?php echo $ea_flvheight;?>" width="<?php echo $ea_flvwidth;?>">
<param name="salign" value="lt" />
<param name="quality" value="high" />
<param name="scale" value="noscale" />  
<param name="wmode" value="transparent" />
<param name="movie" value="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/flash/flvplay.swf" />  
<param name="FlashVars" value="&amp;streamName=<?php echo $row->video;?>&amp;skinName=<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/flash/flvskin&amp;autoPlay=false&amp;autoRewind=true" />
<embed flashvars="&amp;streamName=<?php echo $row->video;?>&amp;autoPlay=false&amp;autoRewind=true&amp;skinName=<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/flash/flvskin" quality="high" scale="noscale" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/flash/flvplay.swf" wmode="transparent" height="<?php echo $ea_flvheight;?>" width="<?php echo $ea_flvwidth;?>"></embed>
</object>

										</div>

<?php } ?>

</td>

</tr>

</table>
</div>

		</td>
	</tr>



				<tr>
					<td>


<!--START NEW BOTTOM STUFF-->			

<div align="center">
	<table width="100%">
		<tr>
			<td valign="top" width="33%">


<!--START VISITOR LINKS SELECTION BOX-->			

						<div align="center">
							<table width="100%">
								<tr>
									<td class='sectiontableheader' align="left"><?php echo _EZAUTOS_TOOLS; ?></td>
								</tr>
								<tr>
									<td>
										<div align="center">
											<table border="0" width="100%">
												<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link1; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZAUTOS_DET_PRINT;?>"><?php echo _EZAUTOS_DET_PRINT; ?></a></td></tr>
												<?php if ( $ea_useprofile==0 && $ea_viewenq ){ ?>
												<tr><td><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link2; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZAUTOS_DET_ENQUIRE;?>"><?php echo _EZAUTOS_DET_ENQUIRE; ?></a></td></tr>
												<?php } if ( $ea_viewrecommend ){ ?>
												<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link3; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZAUTOS_DET_FRIEND;?>"><?php echo _EZAUTOS_DET_FRIEND; ?></a></td></tr>
												<?php } if ( $ea_viewmailing ){ ?>
												<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link4; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZAUTOS_DET_MLIST;?>"><?php echo _EZAUTOS_DET_MLIST; ?></a></td></tr>
												<?php } ?>
												<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo $mosConfig_live_site. '/index.php?option=com_ezautos&amp;task=detail&amp;id='. $id.'&amp;Itemid='.$myItemid;?>" onmousedown="addBookmark('<?php echo stripslashes( $ea_bizname );?>','<?php echo $mosConfig_live_site. '/index.php?option=com_ezautos&amp;task=detail&amp;id='. $id.'&amp;Itemid='.$myItemid;?>')" onmouseover="return overlib('<?php echo _EZAUTOS_BOOKMARK;?>')" onmouseout="return nd();"><?php echo _EZAUTOS_BOOKMARK;?></a></td></tr>
												<?php if ( $ea_shortlist ) { ?>
												<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link7; ?>','win2','<?php echo $status3; ?>');" title="<?php echo _EZAUTOS_LISTINGS_ADDLIGHTBOX;?>"><?php echo _EZAUTOS_LISTINGS_ADDLIGHTBOX;?></a></td></tr>
												<tr><td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$myItemid&amp;task=viewlightbox");?>"><?php echo _EZAUTOS_VIEW_LIGHTBOX;?></a></td></tr>
												<?php } ?>
											</table>
										</div>
									</td>
								</tr>
							</table>
						</div>

<!--END VISITOR LINKS SELECTION BOX-->			

			</td>

<?php if ($row->finance) { ?>

			<td valign="top" width="33%">


<!--START FINANCE BOX-->			

						<div align="center">
							<table width="100%">
								<tr>
									<td class='sectiontableheader' align="left"><?php echo _EZAUTOS_VLDET_FINANCE; ?></td>
								</tr>
								<tr>
									<td>
										<div align="center">
											<table border="0" width="100%">
						<?php if ( $row->deposit ) { ?>
						<tr>
							<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_DEPOSIT;?>&nbsp;:</strong>&nbsp;&nbsp;
							<?php if ( $ea_currencypos==0 ) {
							echo $ea_currencysign.''.$row->deposit;
							} else {
							echo $row->deposit.' '.$ea_currencysign;
							} ?>
							</td>
						</tr>
						<?php } ?>
						<?php if ( $row->repayments ) { ?>
						<tr>
							<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_REPAYMENTS;?>&nbsp;:</strong>&nbsp;&nbsp;
							<?php
							$number2 = $row->repayments;
							if ($ea_currencyformat==0) {
							$formatted_price2 = number_format($number2);
							} else {
							$formatted_price2 = number_format($number2, 2,",",".");
							}
							?>
							<?php if ( $ea_currencypos==0 ) { ?>
							<?php echo $ea_currencysign.''.$formatted_price2;?>
							<?php } else { ?>
							<?php echo $formatted_price2.' '.$ea_currencysign;?>
							<?php } ?>
							</td>
						</tr>
						<?php } ?>
						<?php if ( $row->term ) { ?>
						<tr>
							<td align="left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_TERM;?>&nbsp;:</strong>&nbsp;&nbsp;
							<?php echo $row->term.'&nbsp;';
							if ($row->termtype == 1) { echo _EZAUTOS_VLDET_TERM_MONTHS; }
							if ($row->termtype == 2) { echo _EZAUTOS_VLDET_TERM_YEARS; }
							?>
							</td>
						</tr>
						<?php } ?>
											</table>
										</div>
									</td>
								</tr>
							</table>
						</div>

<!--END FINANCE BOX-->			

			</td>

<?php } ?>
		
			<td valign="top" width="33%">

<!--START SELLER INFORMATION BLOCK-->			

						<?php if ( $ea_useprofile ) { ?>

						<div align="center">
							<table width="100%">
								<tr>
									<td class='sectiontableheader' colspan='2' align="left"><?php echo _EZAUTOS_PROFILE_DSDET;?></td>
								</tr>
								<?php if ( $ea_profaccess <= $my->gid ) { ?>
								<tr>
									<td valign="top" width="80">
									<?php if ( !$row->dealer_image ) { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/nothumb.jpg" alt="" align="left" width="60" hspace="10" />
									<?php } else { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" width="60" hspace="10" />
									<?php } ?>
									</td>
									<td valign="top" align="left">
									<?php if ($row->dealerpublished) { ?><a href="index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>&amp;task=showprofile&amp;id=<?php echo $row->mid;?>" title="<?php echo _EZAUTOS_PROFILER_CBPROFILE;?>"><?php } ?><strong><?php echo $row->dealer_name;?> <?php if ($row->dealer_type) { ?>(<?php echo $row->dealer_type;?>)<?php } ?></strong><?php if ($row->dealerpublished) { ?></a><?php } ?><br />
									<?php if ($row->dealerpublished == 0) { ?><br /><?php echo _EZAUTOS_PNPFC;?><br /><?php } ?>
									<?php if ($row->dealerpublished ) { ?>
									<?php if ($row->dealer_company) { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo $row->dealer_company;?><br /><?php } ?>
									<?php if ($row->dealer_phone) { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_PROFILE_PHONE;?>:&nbsp;<?php echo $row->phone_pref.' '.$row->dealer_phone;?><br /><?php } ?>
									<?php if ($row->dealer_mobile) { ?><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_PROFILE_MOBILE2;?>:&nbsp;<?php echo $row->dealer_mobile;?><br /><?php } ?>
									<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_PROFILE_EMAIL;?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link5; ?>','win2','<?php echo $status3; ?>');" title="<?php echo _EZAUTOS_PROFILE_EMAIL;?>"><?php echo _EZAUTOS_LISTING7;?></a><br />
									<?php if ( $ea_usesms && $row->show_sms && $row->dealer_sms ){ ?>
									<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_SELLER_SMS1;?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link6; ?>','win2','<?php echo $status4; ?>');" title="<?php echo _EZAUTOS_SELLER_SMS2;?>"><?php echo _EZAUTOS_SELLER_SMS2;?></a><br />
									<?php } ?>

									<?php if ( $ea_mypms ){ ?>
									<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_MYPMS;?>:&nbsp;<a href="<?php echo $link8;?>" title="<?php echo _EZAUTOS_MYPMS_MSG;?>"><?php echo _EZAUTOS_MYPMS_MSG;?></a><br />
									<?php } ?>

									<?php } ?>
									</td>
								</tr>
								<?php } else { ?>
								<tr>
									<td colspan='2'><br /><strong><?php echo _EZAUTOS_PROFACCESS_DENIED;?></strong></td>
								</tr>
								<?php } ?>

							</table>
						</div>

						<?php } ?>

<!--END SELLER INFORMATION BLOCK-->			


		</td>
	</tr>
	</table>
	</div>

<!--END NEW BOTTOM STUFF-->			


</td>
</tr>


	<tr>
		<td>
			<table width="100%">
				<tr>
					<td align="left"><?php echo stripslashes($ezlogo);?></td>
				</tr>
			</table>

<!--END DESCRIPTIVE VEHICLE INFORMATION TABLE-->			

<br />

		</td>
	</tr>
</table>

<?php
if ($ea_jreviews && file_exists(JREV_PATH."/jreviews_everywhere.php")){
?>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
		<td>
<?php
global $mainframe;
include_once($mainframe->getCfg('absolute_path') ."/components/com_jreviews_everywhere/jreviews_everywhere.php");
$reviews = new jReviewsEverywhere();
$reviews->getReviews($row->id, $row->cid, 'com_ezautos');
echo $reviews->reviews_page;
?>
		</td>
	</tr>
</table>
<?php
}
?>
