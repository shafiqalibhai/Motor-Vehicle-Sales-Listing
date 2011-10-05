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


if ($row->image2) { ?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/slideshow/js/image-slideshow.js"></script>

<script type="text/javascript">

	function startSlide(e)
	{
		if(document.all)e = event;
		var id = this.id;
		this.getElementsByTagName('IMG')[0].src = '<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/slideshow/images/' + this.id + '_over.gif';	
		if(this.id=='arrow_right'){
			slideSpeedMultiply = Math.floor((e.clientX - this.offsetLeft) / 5);
			slideSpeed = -1*slideSpeedMultiply;
			slideSpeed = Math.max(-10,slideSpeed);
		}else{			
			slideSpeedMultiply = 10 - Math.floor((e.clientX - this.offsetLeft) / 5);
			slideSpeed = 1*slideSpeedMultiply;
			slideSpeed = Math.min(10,slideSpeed);
			if(slideSpeed<0)slideSpeed=10;
		}
	}
	
	function releaseSlide()
	{
		var id = this.id;
		this.getElementsByTagName('IMG')[0].src = '<?php echo $mosConfig_live_site; ?>/components/com_ezautos/library/slideshow/images/' + this.id + '.gif';
		slideSpeed=0;
	}

</script>

<?php } ?>



<!--START IMAGE TABLE-->			

<div id="ez_slideshow">
	<div id="previewPane">
					<div align="center">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td valign="top" align="center">
									<div id="watermark_box">

										<?php if ($row->image1) { ?>
										<img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" height="<?php echo $ea_imgheight;?>" alt="<?php echo $row->image1desc;?>" />
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
<?php if ($row->image2) { ?>
	<div id="galleryContainer">
		<div id="arrow_left"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/slideshow/images/arrow_left.gif" alt="" /></div>
		<div id="arrow_right"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/slideshow/images/arrow_right.gif" alt="" /></div>
		<div id="theImages">
				<!-- Thumbnails -->
<?php if ($row->image1) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>','1');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image1;?>" alt="<?php echo $row->image1desc;?>" /></a>
<?php } ?>
<?php if ($row->image2) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image2;?>','2');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image2;?>" alt="<?php echo $row->image2desc;?>" /></a>
<?php } ?>
<?php if ($row->image3) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image3;?>','3');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image3;?>" alt="<?php echo $row->image3desc;?>" /></a>
<?php } ?>
<?php if ($row->image4) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image4;?>','4');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image4;?>" alt="<?php echo $row->image4desc;?>" /></a>
<?php } ?>
<?php if ($row->image5) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image5;?>','5');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image5;?>" alt="<?php echo $row->image5desc;?>" /></a>
<?php } ?>
<?php if ($row->image6) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image6;?>','6');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image6;?>" alt="<?php echo $row->image6desc;?>" /></a>
<?php } ?>
<?php if ($row->image7) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image7;?>','7');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image7;?>" alt="<?php echo $row->image7desc;?>" /></a>
<?php } ?>
<?php if ($row->image8) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image8;?>','8');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image8;?>" alt="<?php echo $row->image8desc;?>" /></a>
<?php } ?>
<?php if ($row->image9) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image9;?>','9');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image9;?>" alt="<?php echo $row->image9desc;?>" /></a>
<?php } ?>
<?php if ($row->image10) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image10;?>','10');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image10;?>" alt="<?php echo $row->image10desc;?>" /></a>
<?php } ?>
<?php if ($row->image11) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image11;?>','11');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image11;?>" alt="<?php echo $row->image11desc;?>" /></a>
<?php } ?>
<?php if ($row->image12) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image12;?>','12');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image12;?>" alt="<?php echo $row->image12desc;?>" /></a>
<?php } ?>
<?php if ($row->image13) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image13;?>','13');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image13;?>" alt="<?php echo $row->image13desc;?>" /></a>
<?php } ?>
<?php if ($row->image14) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image14;?>','14');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image14;?>" alt="<?php echo $row->image14desc;?>" /></a>
<?php } ?>
<?php if ($row->image15) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image15;?>','15');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image15;?>" alt="<?php echo $row->image15desc;?>" /></a>
<?php } ?>
<?php if ($row->image16) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image16;?>','16');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image16;?>" alt="<?php echo $row->image16desc;?>" /></a>
<?php } ?>
<?php if ($row->image17) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image17;?>','17');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image17;?>" alt="<?php echo $row->image17desc;?>" /></a>
<?php } ?>
<?php if ($row->image18) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image18;?>','18');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image18;?>" alt="<?php echo $row->image18desc;?>" /></a>
<?php } ?>
<?php if ($row->image19) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image19;?>','19');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image19;?>" alt="<?php echo $row->image19desc;?>" /></a>
<?php } ?>
<?php if ($row->image20) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image20;?>','20');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image20;?>" alt="<?php echo $row->image20desc;?>" /></a>
<?php } ?>
<?php if ($row->image21) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image21;?>','21');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image21;?>" alt="<?php echo $row->image21desc;?>" /></a>
<?php } ?>
<?php if ($row->image22) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image22;?>','22');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image22;?>" alt="<?php echo $row->image22desc;?>" /></a>
<?php } ?>
<?php if ($row->image23) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image23;?>','23');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image23;?>" alt="<?php echo $row->image23desc;?>" /></a>
<?php } ?>
<?php if ($row->image24) { ?>
				<a href="#" onclick="showPreview('<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image24;?>','24');return false"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image24;?>" alt="<?php echo $row->image24desc;?>" /></a>
<?php } ?>
				<!-- End thumbnails -->


				<!-- Image captions -->	
				<div class="imageCaption"><?php echo $row->image1desc;?></div>
				<div class="imageCaption"><?php echo $row->image2desc;?></div>
				<div class="imageCaption"><?php echo $row->image3desc;?></div>
				<div class="imageCaption"><?php echo $row->image4desc;?></div>
				<div class="imageCaption"><?php echo $row->image5desc;?></div>
				<div class="imageCaption"><?php echo $row->image6desc;?></div>
				<div class="imageCaption"><?php echo $row->image7desc;?></div>
				<div class="imageCaption"><?php echo $row->image8desc;?></div>
				<div class="imageCaption"><?php echo $row->image9desc;?></div>
				<div class="imageCaption"><?php echo $row->image10desc;?></div>
				<div class="imageCaption"><?php echo $row->image11desc;?></div>
				<div class="imageCaption"><?php echo $row->image12desc;?></div>
				<div class="imageCaption"><?php echo $row->image13desc;?></div>
				<div class="imageCaption"><?php echo $row->image14desc;?></div>
				<div class="imageCaption"><?php echo $row->image15desc;?></div>
				<div class="imageCaption"><?php echo $row->image16desc;?></div>
				<div class="imageCaption"><?php echo $row->image17desc;?></div>
				<div class="imageCaption"><?php echo $row->image18desc;?></div>
				<div class="imageCaption"><?php echo $row->image19desc;?></div>
				<div class="imageCaption"><?php echo $row->image20desc;?></div>
				<div class="imageCaption"><?php echo $row->image21desc;?></div>
				<div class="imageCaption"><?php echo $row->image22desc;?></div>
				<div class="imageCaption"><?php echo $row->image23desc;?></div>
				<div class="imageCaption"><?php echo $row->image24desc;?></div>
				<!-- End image captions -->


				<div id="slideEnd"></div>
		</div>
	</div>
<?php } ?>
</div>

<!--END IMAGE TABLE-->			
