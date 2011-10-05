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

pic01.src = "<?php echo "$myimage1";?>";
pic02.src = "<?php echo "$myimage2";?>"; 
pic03.src = "<?php echo "$myimage3";?>"; 
pic04.src = "<?php echo "$myimage4";?>";
pic05.src = "<?php echo "$myimage5";?>";
pic06.src = "<?php echo "$myimage6";?>";
pic07.src = "<?php echo "$myimage7";?>";
pic08.src = "<?php echo "$myimage8";?>"; 
pic09.src = "<?php echo "$myimage9";?>"; 
pic10.src = "<?php echo "$myimage10";?>";
pic11.src = "<?php echo "$myimage11";?>";
pic12.src = "<?php echo "$myimage12";?>";

function doButtons(picimage) {
eval("document['picture'].src = " + picimage + ".src");
}
//  End -->

</script>


<!--START IMAGE TABLE-->			

		<div align="center">
			<table border="0" cellspacing="0" cellpadding="1" width="100%">
				<tr>
					<td valign="top" width="50%">

		<div align="center">
			<table border="0" cellspacing="2" cellpadding="1">
				<tr>
					<?php if ( $myimage2 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic01')" href="<?php echo $myimage1;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage1;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage2 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic02')" href="<?php echo $myimage2;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage2;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage3 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic03')" href="<?php echo $myimage3;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage3;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } ?>
					</tr>
					<tr>
					<?php if ( $myimage4 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic04')" href="<?php echo $myimage4;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage4;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage5 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic05')" href="<?php echo $myimage5;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage5;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage6 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic06')" href="<?php echo $myimage6;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage6;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $myimage7 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic07')" href="<?php echo $myimage7;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage7;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage8 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic08')" href="<?php echo $myimage8;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage8;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage9 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic09')" href="<?php echo $myimage9;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage9;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
					</tr>
					<tr>
					<?php if ( $myimage10 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic10')" href="<?php echo $myimage10;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage10;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $myimage11 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic11')" href="<?php echo $myimage11;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage11;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $myimage12 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic12')" href="<?php echo $myimage12;?>" rel="lightbox[car]" title=""><img src="<?php echo $myimage12;?>" border="0" width="<?php echo $ea_thumbwidth;?>" alt="" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $myimage13 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic13')" href="<?php echo $myimage13;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage14 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic14')" href="<?php echo $myimage14;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage15 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic15')" href="<?php echo $myimage15;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } ?>
					</tr>
					<tr>
					<?php if ( $myimage16 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic16')" href="<?php echo $myimage16;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage17 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic17')" href="<?php echo $myimage17;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage18 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic18')" href="<?php echo $myimage18;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ($myimage19 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic19')" href="<?php echo $myimage19;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage20 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic20')" href="<?php echo $myimage20;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $myimage21 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic21')" href="<?php echo $myimage21;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
					</tr>
					<tr>
					<?php if ( $myimage22 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic22')" href="<?php echo $myimage22;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $myimage23 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic23')" href="<?php echo $myimage23;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $myimage24 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic24')" href="<?php echo $myimage24;?>" rel="lightbox[car]" title=""> </a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
				</tr>

				</table>
			</div>

</td>


					<td valign="top" width="50%">
					<div align="center">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td valign="top" align="center">
									<div id="watermark_box">
										<?php if ($row->images) { ?>
										<img src="<?php echo $myimage1;?>" border="0" height="<?php echo $ea_imgheight;?>" border="1" name="picture" alt="<?php echo _EZAUTOS_HOVER;?>" />
										<?php } else { ?>
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
</td>

				</tr>
			</table>
		</div>


<!--END IMAGE TABLE-->			
