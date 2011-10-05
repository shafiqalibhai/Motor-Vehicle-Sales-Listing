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

$link = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=detail&amp;id='. $row->id .'&amp;Itemid='. $myItemid );

$status3 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$link5 = $mosConfig_live_site. '/index2.php?option=com_ezautos&amp;task=lightbox&amp;id='.$row->id.'&amp;Itemid='.$myItemid;

if (mosGetParam($_REQUEST, 'option', '') == "com_ezautos" && mosGetParam($_REQUEST, 'task', '') == "viewlightbox") {
	$link6 = sefRelToAbs( 'index.php?option=com_ezautos&amp;task=removelightbox&amp;id='.$row->litem.'&amp;Itemid='.$myItemid );
}

?><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
.style1 {
	color: #FFFFFF;
	font-size:8px;	
}
.style2 {
	padding-left:20px;
	margin-left:20px;
}
padding-left="20"
</style>
<link href=""<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/style.css" rel="stylesheet" type="text/css">
<link href=""<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/layout.css" rel="stylesheet" type="text/css">
    
	    
     <tr> 
                            <td>&nbsp;</td>
</tr> 
		
		<!-- saad -->
<tr> 
                            <td><table width="613" border="0" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td width="614" height="8" background="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/listingBoxTop.gif"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/spacer.gif" width="1" height="1"></td>
                                </tr>
                                <tr> 
                                  <td width="613" height="93" background="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/listingBox-bgd.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="63%" align="center"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="113" align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id");?>" target="_blank"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>"
                                                ></a></td>
                                            <td width="200" align="center">                                              <div align="center">
                                              <p><strong><?php echo $row->year.' '.$row->makename.' '.$row->modelname;?></strong></p>
                                              <p><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id");?>"><?php echo $row->smalldesc;?>,<?php echo $row->colour;?> Color </a></p>
                                              </div>
                                            </td>
                                          </tr>
                                      </table></td>
                                      <td width="1%" background="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/verticleSeprator.gif"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/spacer.gif" width="1" height="1"></td>
                                      <td width="35%" valign="top" line-spacing > <font color="#CC0000" face="Verdena" size="2"><strong>&nbsp;&nbsp; </strong></font><strong><?php echo _EZAUTOS_DET_PRICE; ?> &nbsp;:</strong>&nbsp;&nbsp;
                                          <?php if ( $row->showprice && $row->price != 0 ) {
		if ( $ea_currencypos==0 ) {
			echo $ea_currencysign.''.$formatted_price.' '.$row->price_type;echo "<br>";
		} else {
			echo $formatted_price.' '.$ea_currencysign.' '.$row->price_type;echo "<br>";
		}
	} else {
		echo $row->price_type;
		if (!$row->price_type) { echo _EZAUTOS_POR;echo "<br>"; }
	}
	if ( $row->freq ) {
		if ($row->freq == 1) { echo _EZAUTOS_RENTAL_DAILY;echo "<br>"; }
		if ($row->freq == 2) { echo _EZAUTOS_RENTAL_WEEKLY;echo "<br>"; }
		if ($row->freq == 3) { echo _EZAUTOS_RENTAL_FNIGHT;echo "<br>"; }
		if ($row->freq == 4) { echo _EZAUTOS_RENTAL_MONTH;echo "<br>"; }
	} ?>
                                          <font color="#FF6600" face="Verdena" size="2"><strong>&nbsp;&nbsp; </strong></font><strong><?php echo _EZAUTOS_VLDET_REG;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->rego; echo "<br>";?> <font color="#FF6600" face="Verdena" size="2"><strong>&nbsp;&nbsp; </strong></font><strong><?php echo _EZAUTOS_VLDET_VIN;?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->vin; echo "<br>";?> <font color="#FF6600" face="Verdena" size="2"><strong>&nbsp;&nbsp; </strong></font><strong><?php echo _EZAUTOS_DET_ENGSIZE; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->engine;echo "<br>";?> <font color="#CC0000" face="Verdena" size="2"><strong>&nbsp;&nbsp; </strong></font><strong><?php echo _EZAUTOS_DET_TRANSMISSION; ?>&nbsp;:</strong>&nbsp;&nbsp;<?php echo $row->trans;echo "<br>";?> <?php echo "<strong>&nbsp;&nbsp;&nbsp;&nbsp;"._EZAUTOS_VLDET_LOCATION." : </strong> "; if(strlen($row->cityname) <> 0 && strlen($row->countryname) <> 0){echo '  '.stripslashes($row->cityname).', '.stripslashes($row->countryname);} ?> </td>
                                    </tr>
                                  </table></td>
                                </tr>
                               <tr> 	
                            	      <td width="614" height="8" background="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/listingBoxBottom.gif"><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/spacer.gif" width="1" height="1"></td>
                           	  </tr> 
                             
							
							 <tr> 
                                  <td height="19" class="redBar" bgcolor="#fdf0dc" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="3%">&nbsp;</td> 
                                        <td width="10%">&nbsp;</td>
                                        <td width="3%"><a href="javascript:void(0)"onclick="window.open('<?php echo $link5; ?>','win2','<?php echo $status3; ?>')" <img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/add.gif" width="11" height="15" border="0"></a></td>
                                        <td width="32%"><a href="javascript:void(0)"onclick="window.open('<?php echo $link5; ?>','win2','<?php echo $status3; ?>')" style="style1"> <font color="#FFFFFF" face="Verdena" text-align="left" padding-left="20" size="2"><strong>&nbsp;&nbsp; </strong><?php echo _EZAUTOS_LISTINGS_ADDLIGHTBOX;?></font></a></td>
                                        <td width="3%"><a href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id");?>'><img src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/readMore.gif" width="16" height="15" border="0"></a></td>
                                        <td width="49%"><div align="center"><a href='<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id");?>' style="style1"><font color="#FFFFFF" face="Verdena" text-align="left" padding-left="20" size="2"><strong>&nbsp;&nbsp; </strong><?php echo _EZAUTOS_READMORE;?></font></a></div></td>
                                      </tr>
                                    </table></td>
                              </tr>                               
							     </tr>
                    
								                                   
                                    </table></td>
                                
                          </tr>
                              
						
						  			
									
									
				 <!-- saad -->
				
<?php

?>


</td>
