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


if ($row->images) { 
$imagekey = explode(",",$row->images);
$myimage1=$imagekey[0];
$myimage2=$imagekey[1];
$myimage3=$imagekey[2];
$myimage4=$imagekey[3];
$myimage5=$imagekey[4];
$myimage6=$imagekey[5];
$myimage7=$imagekey[6];
$myimage8=$imagekey[7];
$myimage9=$imagekey[8];
$myimage10=$imagekey[9];
$myimage11=$imagekey[10];
$myimage12=$imagekey[11];
$myimage13=$imagekey[12];
$myimage14=$imagekey[13];
$myimage15=$imagekey[14];
$myimage16=$imagekey[15];
$myimage17=$imagekey[16];
$myimage18=$imagekey[17];
$myimage19=$imagekey[18];
$myimage20=$imagekey[19];
$myimage21=$imagekey[20];
$myimage22=$imagekey[21];
$myimage23=$imagekey[22];
$myimage24=$imagekey[23];
}

?>

<?php if ($myimage2) { ?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/slideshow/js/image-slideshow.js"></script>
<?php } ?>


<!--START IMAGE TABLE-->			

<div id="ez_slideshow">
	<div id="previewPane">
					<div align="center">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td valign="top" align="center">
									<div id="watermark_box">

										<?php if ($myimage1) { ?>
										<img src="<?php echo $myimage1;?>" border="0" height="<?php echo $ea_imgheight;?>" alt="" />
										<span id="waitMessage"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/slideshow/images/loading.gif" alt="" /></span>	
										<?php } else { ?>
										<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/nothumb.gif" height="<?php echo $ea_imgheight;?>" alt="<?php echo $row->adline;?>" />
										<?php } ?>
										<?php if ( $ea_watermark ){ ?>
										<?php if ( $row->availability==_EZAUTOS_AVAIL_SOLD ){ ?>
										<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/sold.png" class="watermark" alt="<?php echo $row->adline;?>" />
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
		<div id="largeImageCaption"></div>
	</div>
<?php if ($myimage2) { ?>
	<div id="galleryContainer">
		<div id="arrow_left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/slideshow/images/arrow_left.gif" alt="" /></div>
		<div id="arrow_right"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/slideshow/images/arrow_right.gif" alt="" /></div>
		<div id="theImages">
				<!-- Thumbnails -->
<?php if ($myimage1) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage1;?>','1');return false"><img src="<?php echo $myimage1;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage2) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage2;?>','2');return false"><img src="<?php echo $myimage2;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage3) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage3;?>','3');return false"><img src="<?php echo $myimage3;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage4) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage4;?>','4');return false"><img src="<?php echo $myimage4;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage5) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage5;?>','5');return false"><img src="<?php echo $myimage5;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage6) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage6;?>','6');return false"><img src="<?php echo $myimage6;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage7) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage7;?>','7');return false"><img src="<?php echo $myimage7;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage8) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage8;?>','8');return false"><img src="<?php echo $myimage8;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage9) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage9;?>','9');return false"><img src="<?php echo $myimage9;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage10) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage10;?>','10');return false"><img src="<?php echo $myimage10;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage11) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage11;?>','11');return false"><img src="<?php echo $myimage11;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage12) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage12;?>','12');return false"><img src="<?php echo $myimage12;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage13) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage13;?>','13');return false"><img src="<?php echo $myimage13;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage14) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage14;?>','14');return false"><img src="<?php echo $myimage14;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage15) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage15;?>','15');return false"><img src="<?php echo $myimage15;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage16) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage16;?>','16');return false"><img src="<?php echo $myimage16;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage17) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage17;?>','17');return false"><img src="<?php echo $myimage17;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage18) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage18;?>','18');return false"><img src="<?php echo $myimage18;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage19) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage19;?>','19');return false"><img src="<?php echo $myimage19;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage20) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage20;?>','20');return false"><img src="<?php echo $myimage20;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage21) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage21;?>','21');return false"><img src="<?php echo $myimage21;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage22) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage22;?>','22');return false"><img src="<?php echo $myimage22;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage23) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage23;?>','23');return false"><img src="<?php echo $myimage23;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
<?php if ($myimage24) { ?>
				<a href="#" onclick="showPreview('<?php echo $myimage24;?>','24');return false"><img src="<?php echo $myimage24;?>" width="<?php echo $ea_thumbwidth;?>" /></a>
<?php } ?>
				<!-- End thumbnails -->


				<!-- Image captions -->	
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<!-- End image captions -->


				<div id="slideEnd"></div>
		</div>
	</div>
<?php } ?>
</div>

<!--END IMAGE TABLE-->			
