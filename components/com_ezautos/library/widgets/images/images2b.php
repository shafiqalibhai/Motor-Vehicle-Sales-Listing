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

pic01.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image1";?>";
pic02.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image2";?>"; 
pic03.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image3";?>"; 
pic04.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image4";?>";
pic05.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image5";?>";
pic06.src = "<?php echo "$mosConfig_live_site/components/com_ezautos/$ea_imagedirectory/$row->image6";?>";

function doButtons(picimage) {
eval("document['picture'].src = " + picimage + ".src");
}
//  End -->

</script>


<!--START IMAGE TABLE-->			


<div align="center">
			<table border="0" cellspacing="2" cellpadding="1">
				<tr>
					<?php if ( $row->image2 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic01')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" rel="lightbox[car]" title="<?php echo $row->image1desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image1desc;?>" title="<?php echo $row->image1desc;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
					<?php } if ( $row->image2 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic02')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image2;?>" rel="lightbox[car]" title="<?php echo $row->image2desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image2;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image2desc;?>" title="<?php echo $row->image2desc;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
					<?php } if ( $row->image3 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic03')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image3;?>" rel="lightbox[car]" title="<?php echo $row->image3desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image3;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image3desc;?>" title="<?php echo $row->image3desc;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
					<?php } if ( $row->image4 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic04')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image4;?>" rel="lightbox[car]" title="<?php echo $row->image4desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image4;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image4desc;?>" title="<?php echo $row->image4desc;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
					<?php } if ( $row->image5 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic05')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image5;?>" rel="lightbox[car]" title="<?php echo $row->image5desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image5;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image5desc;?>" title="<?php echo $row->image5desc;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
					<?php } if ( $row->image6 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic06')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image6;?>" rel="lightbox[car]" title="<?php echo $row->image6desc;?>"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image6;?>" width="<?php echo $ea_thumbwidth;?>" border="0" alt="<?php echo $row->image6desc;?>" title="<?php echo $row->image6desc;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $row->image7 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic07')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image7;?>" rel="lightbox[car]" title="<?php echo $row->image7desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image8 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic08')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image8;?>" rel="lightbox[car]" title="<?php echo $row->image8desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
					<?php } if ( $row->image9 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic09')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image9;?>" rel="lightbox[car]" title="<?php echo $row->image9desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image10 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic10')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image10;?>" rel="lightbox[car]" title="<?php echo $row->image10desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image11 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic11')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image11;?>" rel="lightbox[car]" title="<?php echo $row->image11desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image12 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic12')" href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image12;?>" rel="lightbox[car]" title="<?php echo $row->image12desc;?>"> </a></td>
					<?php }else{ ?>
					<td valign="top"> </td>
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
					<?php } if ( $row->image16 ){ ?>
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
					<?php } if ( $row->image22 ){ ?>
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


