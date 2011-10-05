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


?>


<script type="text/javascript">

<!-- Begin
var pic01 = new Image();
var pic02 = new Image(); 
var pic03 = new Image(); 
var pic04 = new Image();
var pic05 = new Image();
var pic06 = new Image(); 
var pic07 = new Image();
var pic08 = new Image();
var pic09 = new Image(); 
var pic10 = new Image();
var pic11 = new Image(); 
var pic12 = new Image(); 

pic01.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image1";?>";
pic02.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image2";?>"; 
pic03.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image3";?>"; 
pic04.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image4";?>";
pic05.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image5";?>";
pic06.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image6";?>";
pic07.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image7";?>";
pic08.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image8";?>";
pic09.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image9";?>";
pic10.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image10";?>";
pic11.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image11";?>"; 
pic12.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image12";?>"; 

function doButtons(picimage) {
eval("document['picture'].src = " + picimage + ".src");
}
//  End -->

</script>


<!--START IMAGE TABLE-->			

<?php if ($row->image2) { ?>

		<div align="center">
			<table border="0" cellspacing="0" cellpadding="1" width="100%">
				<tr>
					<td valign="top" width="50%">

		<div align="center">
			<table border="0" cellspacing="2" cellpadding="1">
					<tr>
					<?php if ( $row->image2 ){ ?>
						<td><a onmouseover="doButtons('pic01')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" rel="lightbox[car]" title="<?php echo $row->image1desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image1;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image2 ){ ?>
						<td><a onmouseover="doButtons('pic02')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image2;?>" rel="lightbox[car]" title="<?php echo $row->image2desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image2;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image2;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image3 ){ ?>
						<td><a onmouseover="doButtons('pic03')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image3;?>" rel="lightbox[car]" title="<?php echo $row->image3desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image3;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image3;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image4 ){ ?>
						<td><a onmouseover="doButtons('pic04')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image4;?>" rel="lightbox[car]" title="<?php echo $row->image4desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image4;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image4;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image5 ){ ?>
						<td><a onmouseover="doButtons('pic05')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image5;?>" rel="lightbox[car]" title="<?php echo $row->image5desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image5;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image5;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image6 ){ ?>
						<td><a onmouseover="doButtons('pic06')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image6;?>" rel="lightbox[car]" title="<?php echo $row->image6desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image6;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image6;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image7 ){ ?>
						<td><a onmouseover="doButtons('pic07')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image7;?>" rel="lightbox[car]" title="<?php echo $row->image7desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image7;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image7;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image8 ){ ?>
						<td><a onmouseover="doButtons('pic08')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image8;?>" rel="lightbox[car]" title="<?php echo $row->image8desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image8;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image8;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center' > </td>
						<?php } if ( $row->image9 ){ ?>
						<td><a onmouseover="doButtons('pic09')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image9;?>" rel="lightbox[car]" title="<?php echo $row->image9desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image9;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image9;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image10 ){ ?>
						<td><a onmouseover="doButtons('pic10')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image10;?>" rel="lightbox[car]" title="<?php echo $row->image10desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image10;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image10;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image11 ){ ?>
						<td><a onmouseover="doButtons('pic11')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image11;?>" rel="lightbox[car]" title="<?php echo $row->image11desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image11;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image11;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } if ( $row->image12 ){ ?>
						<td><a onmouseover="doButtons('pic12')" target="_blank" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image12;?>" rel="lightbox[car]" title="<?php echo $row->image12desc;?>"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image12;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt='<?php echo $row->image12;?> - <?php echo _EZAUTOS_CLICKOPEN;?>' /></a></td>
						<?php }else{ ?>
						<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>

				<tr>
					<?php if ( $row->image13 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic13')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image13;?>" rel="lightbox[car]" title="<?php echo $row->image13desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image14 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic14')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image14;?>" rel="lightbox[car]" title="<?php echo $row->image14desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image15 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic15')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image15;?>" rel="lightbox[car]" title="<?php echo $row->image15desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image16 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic16')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image16;?>" rel="lightbox[car]" title="<?php echo $row->image16desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image17 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic17')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image17;?>" rel="lightbox[car]" title="<?php echo $row->image17desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image18 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic18')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image18;?>" rel="lightbox[car]" title="<?php echo $row->image18desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
				</tr>
				<tr>

					<?php if ( $row->image19 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic19')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image19;?>" rel="lightbox[car]" title="<?php echo $row->image19desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image20 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic20')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image20;?>" rel="lightbox[car]" title="<?php echo $row->image20desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image21 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic21')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image21;?>" rel="lightbox[car]" title="<?php echo $row->image21desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
						<?php } ?>
					</tr>
					<tr>
						<?php if ( $row->image22 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic22')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image22;?>" rel="lightbox[car]" title="<?php echo $row->image22desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image23 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic23')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image23;?>" rel="lightbox[car]" title="<?php echo $row->image23desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image24 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic24')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image24;?>" rel="lightbox[car]" title="<?php echo $row->image24desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
				</tr>

				</table>
			</div>

</td>


					<td valign="top" width="50%">
<?php } ?>
					<div align="center">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>

								<td valign="top" align="center">
									<div id="watermark_box">
										<?php if ($row->image1) { ?>
										<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory.'/'.$row->image1;?>" height="<?php echo $ea_imgheight;?>" border="1" name="picture" alt="<?php echo _EZREALTY_PIX_HOVER;?>" />
										<?php }else{ ?>
										<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/nothumb.gif" border="1" height="<?php echo $ea_imgheight;?>" name="picture" alt="" />
										<?php } ?>

										<?php if ( $ea_watermark ){ ?>
										<?php if ( $row->availability==_EZAUTOS_AVAIL_SOLD ){ ?>
										<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/sold.png" class="watermark" alt="<?php echo _EZREALTY_DETAILS_MARKET5;?>" />
										<?php } ?>
										<?php if ( $row->featured==1 && $row->availability!=_EZAUTOS_AVAIL_SOLD ){ ?>
										<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/wow.png" class="watermark" alt="<?php echo $row->adline;?>" />
										<?php } ?>
										<?php } ?>
									</div>
								</td>
							</tr>
						</table>
					</div>
<?php if ($row->image2) { ?>
</td>

				</tr>
			</table>
		</div>
<?php } ?>


<!--END IMAGE TABLE-->			


