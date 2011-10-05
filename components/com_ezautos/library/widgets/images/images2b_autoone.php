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
var pic13 = new Image();
var pic14 = new Image();
var pic15 = new Image();
var pic16 = new Image();
var pic17 = new Image();
var pic18 = new Image();
var pic19 = new Image();
var pic20 = new Image();
var pic21 = new Image();
var pic22 = new Image();
var pic23 = new Image();
var pic24 = new Image();


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
pic13.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image13";?>";
pic14.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image14";?>";
pic15.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image15";?>";
pic16.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image16";?>";
pic17.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image17";?>";
pic18.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image18";?>";
pic19.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image19";?>";
pic20.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image20";?>";
pic21.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image21";?>";
pic22.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image22";?>";
pic23.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image23";?>";
pic24.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image24";?>";

function doButtons(picimage) {
eval("document['picture'].src = " + picimage + ".src");
}
//  End -->

</script>


<!--START IMAGE TABLE-->			


<div align="center">
<div align="center" width="500">
<?php if ( $row->image1  ){ ?><a onmouseover="doButtons('pic01')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" rel="lightbox[car]" title="<?php echo $row->image1desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image1desc;?>" title="<?php echo $row->image1desc;?>" class="image_th" /></a><?php } ?>   
<?php if ( $row->image2   ){ ?><a onmouseover="doButtons('pic02')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image2;?>" rel="lightbox[car]" title="<?php echo $row->image2desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image2 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image2desc;?>" title="<?php echo $row->image2desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image3   ){ ?><a onmouseover="doButtons('pic03')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image3;?>" rel="lightbox[car]" title="<?php echo $row->image3desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image3 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image3desc;?>" title="<?php echo $row->image3desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image4   ){ ?><a onmouseover="doButtons('pic04')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image4;?>" rel="lightbox[car]" title="<?php echo $row->image4desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image4 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image4desc;?>" title="<?php echo $row->image4desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image5   ){ ?><a onmouseover="doButtons('pic05')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image5;?>" rel="lightbox[car]" title="<?php echo $row->image5desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image5 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image5desc;?>" title="<?php echo $row->image5desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image6   ){ ?><a onmouseover="doButtons('pic06')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image6;?>" rel="lightbox[car]" title="<?php echo $row->image6desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image6 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image6desc;?>" title="<?php echo $row->image6desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image7   ){ ?><a onmouseover="doButtons('pic07')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image7;?>" rel="lightbox[car]" title="<?php echo $row->image7desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image7 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image7desc;?>" title="<?php echo $row->image7desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image8   ){ ?><a onmouseover="doButtons('pic08')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image8;?>" rel="lightbox[car]" title="<?php echo $row->image8desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image8 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image8desc;?>" title="<?php echo $row->image8desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image9   ){ ?><a onmouseover="doButtons('pic09')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image9;?>" rel="lightbox[car]" title="<?php echo $row->image9desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image9 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image9desc;?>" title="<?php echo $row->image9desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image10  ){ ?><a onmouseover="doButtons('pic10')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image10;?>" rel="lightbox[car]" title="<?php echo $row->image10desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image10 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image10desc;?>" title="<?php echo $row->image10desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image11  ){ ?><a onmouseover="doButtons('pic11')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image11;?>" rel="lightbox[car]" title="<?php echo $row->image11desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image11 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image11desc;?>" title="<?php echo $row->image11desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image12  ){ ?><a onmouseover="doButtons('pic12')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image12 ;?>" rel="lightbox[car]" title="<?php echo $row->image12desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image12 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image12desc;?>" title="<?php echo $row->image12desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image13  ){ ?><a onmouseover="doButtons('pic13')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image13 ;?>" rel="lightbox[car]" title="<?php echo $row->image13desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image13 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image13desc;?>" title="<?php echo $row->image13desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image14  ){ ?><a onmouseover="doButtons('pic14')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image14 ;?>" rel="lightbox[car]" title="<?php echo $row->image14desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image14 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image14desc;?>" title="<?php echo $row->image14desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image15  ){ ?><a onmouseover="doButtons('pic15')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image15 ;?>" rel="lightbox[car]" title="<?php echo $row->image15desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image15 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image15desc;?>" title="<?php echo $row->image15desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image16  ){ ?><a onmouseover="doButtons('pic16')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image16 ;?>" rel="lightbox[car]" title="<?php echo $row->image16desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image16 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image16desc;?>" title="<?php echo $row->image16desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image17  ){ ?><a onmouseover="doButtons('pic17')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image17 ;?>" rel="lightbox[car]" title="<?php echo $row->image17desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image17 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image17desc;?>" title="<?php echo $row->image17desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image18  ){ ?><a onmouseover="doButtons('pic18')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image18 ;?>" rel="lightbox[car]" title="<?php echo $row->image18desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image18 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image18desc;?>" title="<?php echo $row->image18desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image19  ){ ?><a onmouseover="doButtons('pic19')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image19 ;?>" rel="lightbox[car]" title="<?php echo $row->image19desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image19 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image19desc;?>" title="<?php echo $row->image19desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image20  ){ ?><a onmouseover="doButtons('pic20')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image20 ;?>" rel="lightbox[car]" title="<?php echo $row->image20desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image20 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image20desc;?>" title="<?php echo $row->image20desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image21  ){ ?><a onmouseover="doButtons('pic21')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image21 ;?>" rel="lightbox[car]" title="<?php echo $row->image21desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image21 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image21desc;?>" title="<?php echo $row->image21desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image22  ){ ?><a onmouseover="doButtons('pic22')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image22 ;?>" rel="lightbox[car]" title="<?php echo $row->image22desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image22 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image22desc;?>" title="<?php echo $row->image22desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image23  ){ ?><a onmouseover="doButtons('pic23')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image23 ;?>" rel="lightbox[car]" title="<?php echo $row->image23desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image23 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image23desc;?>" title="<?php echo $row->image23desc;?>" class="image_th" /></a><?php } ?>
<?php if ( $row->image24  ){ ?><a onmouseover="doButtons('pic24')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image24 ;?>" rel="lightbox[car]" title="<?php echo $row->image24desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image24 ;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image24desc;?>" title="<?php echo $row->image24desc;?>" class="image_th" /></a><?php } ?>
</div> 
 




  <?php if ( $row->image2 ){ ?>
<table align="center"><tr><td><div align="center" class="smalldark"><?php echo _EZAUTOS_VIEW_SLIDESHOWGALLERY;?></div></td></tr></table>
					<?php } ?>

</div>
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

<!--END IMAGE TABLE-->			


