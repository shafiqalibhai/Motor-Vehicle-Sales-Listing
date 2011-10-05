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


$status1 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=580,directories=no,location=no';
$status2 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$status3 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$status4 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$link1 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=print&amp;id='. $row->id;
$link2 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=enquire&amp;id='. $row->id;
$link3 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=recommend&amp;id='. $row->id;
$link4 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=maillist&amp;id='. $row->id;
$link5 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=contactseller&amp;id='. $row->id;
$link6 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=smsseller&amp;id='. $row->id;
$link7 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;Itemid='.$myItemid.'&amp;task=lightbox&amp;id='. $row->id;


		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);
		} else {
			$formatted_price = number_format($number, 2,",",".");
		}

?> 


<table border="0" cellspacing="0" cellpadding="0" width="780">
	<tr>
		<td><?php echo $ez_printheader;?></td>
	</tr>
</table>

<table border="0" cellspacing="2" cellpadding="1" width="800">
	<tr>
		<td colspan="2" valign="top" class="sectionname"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></td>
	</tr>
	<tr>
		<td valign="top" width="<?php echo $ea_imgwidth;?>">

<!--START IMAGE TABLE-->			

		<div align="center">
			<table border="0" cellspacing="2" cellpadding="1">
					<tr>
						<td valign="top" colspan="3"><div align="center"><?php if ($row->image1) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" width="<?php echo $ea_imgwidth;?>" border="1" alt="" /><?php }else{ ?><img src="components/<?php echo $ea_imagedirectory;?>/nothumb.gif" border="1" width="<?php echo $ea_imgwidth;?>" name="picture" alt="" /><?php } ?></div></td>
					</tr>
					<tr>
					<?php if ( $row->image2 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image2 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image2;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image3 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image3;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image4 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image4;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image5 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image5;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image6 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image6;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image7 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image7;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image8 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image8;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center' > </td>
						<?php } if ( $row->image9 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image9;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image10 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image10;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image11 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image11;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image12 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image12;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>

					<tr>
					<?php if ( $row->image13 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image13;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image14 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image14;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image15 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image15;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image16 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image16;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image17 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image17;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image18 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image18;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image19 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image19;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image20 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image20;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center' > </td>
						<?php } if ( $row->image21 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image21;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image22 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image22;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image23 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image23;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image24 ){ ?>
						<td valign='top'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image24;?>" width="110" border="0" alt="" /></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>

					</tr>

					<tr>
						<td valign="top" colspan="3"><?php echo $ezlogo;?></td>
					</tr>

				</table>
			</div>

<!--END IMAGE TABLE-->			

</td>
		<td valign="top">

<table border="0" width="100%" cellspacing="2" cellpadding="5">
	<tr>
		<td>


<!--START VEHICLE SPECS TABLE-->			

			<div align="center">
				<table width="100%">
					<tr>
						<td class='sectionname'><?php echo _EZAUTOS_LISTINGS_SUMMARY;?></td>
					</tr>
					<tr>
						<td>
							<div align="center">
								<table border="0" width="95%">
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_ADDNUM; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->id;?></td>
								</tr>
				<tr>
					<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_CATG; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->category;?></a></td>
				</tr>
								<?php if ( $ea_sitetype==0 ) { ?>
								<tr>
									<td width="150"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_PRICE; ?>&nbsp;:</strong>&nbsp;&nbsp;
		<?php if ( $row->showprice && $row->price != 0 ) { ?>
		<?php if ( $ea_currencypos==0 ) { ?>
		<?php echo $ea_currencysign.''.$formatted_price;?>
		<?php } else { ?>
		<?php echo $formatted_price.' '.$ea_currencysign;?>
		<?php } ?>
		<?php } else { ?>
		<?php echo _EZAUTOS_POR;?>
		<?php } ?>


<?php if ( $row->freq ) {
 
if ($row->freq == 1) { echo _EZAUTOS_RENTAL_DAILY; }
if ($row->freq == 2) { echo _EZAUTOS_RENTAL_WEEKLY; }
if ($row->freq == 3) { echo _EZAUTOS_RENTAL_FNIGHT; }
if ($row->freq == 4) { echo _EZAUTOS_RENTAL_MONTH; }

} ?>

</td>
								</tr>
								<?php } ?>



								<?php if ( $row->incltax ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TAX; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo _EZAUTOS_DET_YES; ?></td>
								</tr>
								<?php } ?>

								<?php if ( $row->onroad ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_ONROAD; ?>&nbsp;:</strong>&nbsp;&nbsp;
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
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_ENGSIZE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->engine;?></td>
								</tr>
								<?php } ?>
									<?php if ( $row->trans ) { ?>
									<tr>
										<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_TRANSMISSION; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->trans;?></td>
									</tr>
									<?php } ?>
									<?php if ( $row->fuel ) { ?>
									<tr>
										<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_FUEL; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->fuel;?></td>
									</tr>
									<?php } ?>
									<?php if ( $row->odometer ) { ?>
									<tr>
										<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_MILEAGE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->odometer.' '.$row->mileage_unit;?></td>
									</tr>
									<?php } ?>
									<?php if ( !$row->odometer && $row->mileage ) { ?>
									<tr>
										<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_MILEAGE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->mileage;?></td>
									</tr>
									<?php } ?>


									<?php if ( $row->colour ) { ?>
									<tr>
										<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DETAILS_EXTCOLOUR; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->colour;?></td>
									</tr>
									<?php } ?>

									<?php if ( $row->intcolour ) { ?>
									<tr>
										<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DETAILS_INTCOLOUR; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->intcolour;?></td>
									</tr>
									<?php } ?>

								<?php if ( $row->doors ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_DOORS;?>&nbsp;:</strong>&nbsp;&nbsp;
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
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_BODY;?>&nbsp;:</strong>&nbsp;&nbsp;

<?php

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

								<?php if ( $row->year ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_YOM;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->year;?></td>
								</tr>
								<?php } ?>

								<?php if ( $row->yearreg ) { ?>
								<tr>
									<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_FIRSTREG;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->monthreg.'/'.$row->yearreg;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->yearinsp ) { ?>
								<tr>
									<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTINSPECTION;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->monthinsp.'/'.$row->yearinsp;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->yearemiss ) { ?>
								<tr>
									<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTEMISSIONSINSP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->monthemiss.'/'.$row->yearemiss;?></td>
								</tr>
								<?php } ?>

								<?php if ( $row->co2 ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_CO2;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->co2;?>  <?php echo _EZAUTOS_VLDET_CO2EMM;?></td>
								</tr>
								<?php } ?>

								<?php if ( $row->numowners ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_NUMOWNERS;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->numowners;?></td>
								</tr>
								<?php } ?>


									<?php if ( $row->tag ) { ?>
								<tr>
									<td align="left"><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_CONDITION; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->tag;?></td>
								</tr>
									<?php } ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_DET_AVAILABILITY; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->availability;?></td>
								</tr>

								<?php if ( $row->rego ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_REG;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->rego;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->vin ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_VIN;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->vin;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->stocknum ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_STOCKNUM;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->stocknum;?></td>
								</tr>
								<?php } ?>
							</table>
						</div>
					</td>
				</tr>
			</table>
			</div>

<!--END VEHICLE SPECS TABLE-->			


					</td>
				</tr>





	<tr>
		<td>

<!--BEGIN DESCRIPTIVE VEHICLE INFORMATION TABLE-->			


		<div align="center">
			<table width="100%">
				<tr>
					<td class="sectionname"><?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?></td>
				</tr>
				<tr>
					<td>
	<div align="center">


			<table border="0" width="95%" cellspacing="0" cellpadding="0">
				<tr>
		<td>
			<?php if ( $row->longdesc ){ ?><?php echo $row->longdesc;?>
			<?php } else { ?>
			<?php echo $row->smalldesc;?>
			<?php } ?>
		</td>
				</tr>
			</table>
		</div>
	</td></tr></table>
</div>



<!--END DESCRIPTIVE VEHICLE INFORMATION TABLE-->			


		</td>
	</tr>




<!--START ADDITIONAL VEHICLE FEATURES TABLE-->			

<?php if ($row->features) { ?>

				<tr>
					<td>
		<div align="center">
			<table width="100%">
				<tr>
					<td class="sectionname"><?php echo _EZAUTOS_DET_ADDFEAT; ?></td>
				</tr>
				<tr>
					<td>

	<div align="center">

<table border="0" width="95%">
<tr>
<td><br /><?php echo $row->features;?><br />
</td>
</tr>
</table>

					</td>
				</tr>
			</table>
		</div>
					</td>
				</tr>

<?php } ?>


<?php if ( !$row->features && $row->showfeat ) { ?>


				<tr>
					<td>
		<div align="center">
			<table width="100%">
				<tr>
					<td class="sectionname"><?php echo _EZAUTOS_DET_ADDFEAT; ?></td>
				</tr>
				<tr>
					<td>
	<div align="center">

<table border="0" width="95%">
<tr>
<td width="50%" valign="top">

		<table border="0" width="100%">

<?php if ( $row->airco ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_AIRCO; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->pwin ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_POWIN; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->psteer ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_POSTEER; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->cruise ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_CC; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->airbag ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_AIRBAGS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->abs ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_ALBS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->amfm ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_AMFM; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->cdp ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_CDP; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->atheft ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_ATS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->tilt ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_TS; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
</table>
</td>

<td width="50%" valign="top">

		<table border="0" width="100%">
<?php if ( $row->custom1a ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom1a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom2a ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom2a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom3a ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom3a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom4a ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom4a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom5a ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom5a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom6a ) { ?>
			<tr><td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom6a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td></tr>
<?php } ?>
<?php if ( $row->custom7a ) { ?>
			<tr>
				<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom7a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>
<?php if ( $row->custom8a ) { ?>
			<tr>
				<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom8a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>
<?php if ( $row->custom9a ) { ?>
			<tr>
				<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom9a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>
<?php if ( $row->custom10a ) { ?>
			<tr>
				<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo $row->custom10a; ?> : </strong><?php echo _EZAUTOS_DET_YES; ?></td>
			</tr>
<?php } ?>

		</table>

</td>
</tr>
</table>



	</div>

					</td>
				</tr>
			</table>
		</div>

					</td>
				</tr>
<?php } ?>


<?php if ( !$row->fuelsystem && !$row->borestroke && !$row->power && !$row->torque && !$row->weightpower && !$row->frontbrakes 
&& !$row->rearbrakes && !$row->wheeldims && !$row->turncirc && !$row->compressionratio && !$row->tankcapacity && !$row->extlength 
&& !$row->extwidth && !$row->extheight && !$row->fronttrack && !$row->reartrack && !$row->wheelbase && !$row->frontsus 
&& !$row->rearsus && !$row->kerbweight && !$row->groundclear && !$row->seatcap && !$row->cityfuel && !$row->highwayfuel 
&& !$row->towingcap && !$row->countryorigin ) { ?>

<!--START VEHICLE SPECS TABLE-->			

	<tr>
		<td>
			<div align="center">
				<table width="100%">
					<tr>
						<td class='sectionname'><?php echo _EZAUTOS_LISTINGS_TECHNICAL;?></td>
					</tr>
					<tr>
						<td>
							<div align="center">
							<table border="0" width="95%">

								<?php if ( $row->fuelsystem ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FUELSYS; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->fuelsystem;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->borestroke ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_BORESTROKE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->borestroke;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->power ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_POWER; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->power;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->torque ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TORQUE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->torque;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->weightpower ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_WEIGHTPOWER; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->weightpower;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->frontbrakes ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FRONTBRAKES; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->frontbrakes;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->rearbrakes ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_REARBRAKES; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->rearbrakes;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->wheeldims ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_WHEELDIMS;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->wheeldims;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->turncirc ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TURNCIRC;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->turncirc;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->compressionratio ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_COMPRAT;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->compressionratio;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->tankcapacity ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TANKCAP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->tankcapacity;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->extlength ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_EXTLENGTH;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->extlength;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->extwidth ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_EXTWIDTH; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->extwidth;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->extheight ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_EXTHEIGHT; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->extheight;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->fronttrack ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FRONTTRACK; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->fronttrack;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->reartrack ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_REARTRACK; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->reartrack;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->wheelbase ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_WHEELBASE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->wheelbase;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->frontsus ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_FRONTSUS; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->frontsus;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->rearsus ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_REARSUS; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->rearsus;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->kerbweight ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_KERBWEIGHT;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->kerbweight;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->groundclear ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_GRCLEAR;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->groundclear;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->seatcap ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_SEATCAP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->seatcap;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->cityfuel ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_CITYFUEL;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->cityfuel;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->highwayfuel ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_HWYFUEL;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->highwayfuel;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->towingcap ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_TOWCAP;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->towingcap;?></td>
								</tr>
								<?php } ?>
								<?php if ( $row->countryorigin ) { ?>
								<tr>
									<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_SPECS_COUNTRYORIGIN;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->countryorigin;?></td>
								</tr>
								<?php } ?>

							</table>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>

<!--END VEHICLE SPECS TABLE-->			

<?php } ?>



<?php if ($row->finance) { ?>

<!--START FINANCE STUFF-->			

				<tr>
					<td>
<div align="center">
	<table width="100%">
		<tr>
			<td class='sectionname'><?php echo _EZAUTOS_VLDET_FINANCE;?></td>
		</tr>
		<tr>
			<td>
				<div align="center">
					<table border="0" width="95%">
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
							<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_REPAYMENTS;?>&nbsp;:</strong>&nbsp;&nbsp;
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
							<td><img src="components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZAUTOS_VLDET_TERM;?>&nbsp;:</strong>&nbsp;&nbsp;
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
					</td>
				</tr>

<!--END FINANCE STUFF-->

<?php } ?>




						<?php if ( $ea_useprofile ) { ?>

<!--START SELLER INFORMATION BLOCK-->			

				<tr>
					<td>


<div align="center">
	<table width="100%">
		<tr>
			<td class='sectionname'><?php echo _EZAUTOS_PROFILE_DSDET;?></td>
		</tr>
		<tr>
			<td>
				<div align="center">
					<table border="0" width="95%">

						<tr>
							<td valign="top" width="80">
									<?php if ( !$row->dealer_image ) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/profiles/nothumb.jpg" alt="" align="left" width="60" hspace="10" />
									<?php } else { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" width="60" hspace="10" />
									<?php } ?>
									</td>
									<td valign="top" align="left">
									<?php if ($row->dealerpublished) { ?><a href="index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>&amp;task=showprofile&amp;id=<?php echo $row->mid;?>" title="<?php echo _EZAUTOS_PROFILER_CBPROFILE;?>"><?php } ?><strong><?php echo $row->dealer_name;?> <?php if ($row->dealer_type) { ?>(<?php echo $row->dealer_type;?>)<?php } ?></strong><?php if ($row->dealerpublished) { ?></a><?php } ?><br />
									<?php if ($row->dealerpublished == 0) { ?><br /><?php echo _EZAUTOS_PNPFC;?><br /><?php } ?>
									<?php if ($row->dealerpublished) { ?>
									<?php if ($row->dealer_company) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo $row->dealer_company;?><br /><?php } ?>
									<?php if ($row->dealer_phone) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_PROFILE_PHONE;?>:&nbsp;<?php echo $row->phone_pref.' '.$row->dealer_phone;?><br /><?php } ?>
									<?php if ($row->dealer_mobile) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_PROFILE_MOBILE2;?>:&nbsp;<?php echo $row->dealer_mobile;?><br /><?php } ?>
									<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_PROFILE_EMAIL;?>:&nbsp;<?php echo $row->dealer_email;?><br />
									<?php if ( $ea_usesms && $row->show_sms && $row->dealer_sms ){ ?>
									<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZAUTOS_SELLER_SMS1;?>:&nbsp;<?php echo $row->dealer_sms;?><br />
									<?php } ?>
									<?php } ?>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
</div>
					</td>
				</tr>


<!--END SELLER INFORMATION BLOCK-->			

						<?php } ?>




</table>


</td>
	</tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="800">
	<tr>
		<td><?php echo $ez_printfooter;?></td>
	</tr>
</table>

