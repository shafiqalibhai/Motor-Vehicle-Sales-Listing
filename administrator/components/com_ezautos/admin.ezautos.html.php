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


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


class HTML_ezautos {


    /**************************************************\
                 SHOW ADD LICENSE KEY FORM
    \**************************************************/

function addKey( $option ) {
  global $mosConfig_absolute_path, $database,$mosConfig_live_site, $mainframe;

include(EZADMIN_PATH."/license.php");

$link2 = $mosConfig_live_site. '/administrator/index2.php?option=com_ezautos&task=savekey';

?>
		<script type="text/javascript">
		<!--
		function validatekey() {
			var form = document.license;
			// do field validation
			if (form.ez_license.value == "") {
				alert( "<?php echo _EZAUTOS_LICKEYNUM_ERROR;?>" );
			} else {
				document.license.action = '<?php echo $link2; ?>';
				document.license.submit();
			}
		}
		//-->
		</script>

		<form class="form" name="license" action="<?php echo $link2;?>" method="post">
<div align="center"
<table cellpadding="4" cellspacing="0" border="0" width="300">
	<tr>
			<td align="left">
				<span class="componentheading">license.php is :
				<?php echo is_writable( 'components/com_ezautos/license.php' ) ? '<strong><font color="green"> '._EZAUTOS_WRITABLE.'</font></strong>' : '<strong><font color="red"> '._EZAUTOS_UNWRITABLE.'</font></strong>' ?>
				</span>
			</td>
			<input type="hidden" name="option" value="com_ezautos" />
			<input type="hidden" name="task" value="savekey" />
				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">
					<tr><td width="100%" valign="top"><?php echo _EZAUTOS_LICENSE_KEY;?>:<br /><input type="text" name="ez_license" size="30" value="<?php echo stripslashes( $ez_license ); ?>" class="inputbox" maxlength="100" /></td>
					<tr><td valign="top"><input type="button" name="<?php echo _EZAUTOS_SAVE;?>" value="<?php echo _EZAUTOS_SAVE;?>" class="button" onclick="validatekey()" /></td></tr>
				</table>

			<td align="left">

			</td>


	</tr>
</table>
</div>
		</form>

<?php

  }



/* *********************************************************************************
          						  SHOW THE CPANEL
   ********************************************************************************* */


function cPanel( $option ) {
	global $database, $mainframe, $mosConfig_live_site;

include(EZADMIN_PATH."/config.ezautos.php");

$tabs = new mosTabs(0);

?>

<link rel="stylesheet" href="components/com_ezautos/includes/cpanel.css" type="text/css" />


  <table cellpadding="4" cellspacing="1" border="0" width="100%">
  <tr bgcolor="#990000">

    <td width="100%" align="center" >
<font color="#ffffff" size="6" face="impact">Vehicle Manager cPanel</font>
</td>
  </tr>
</table>
<table cellpadding="1" cellspacing="0" border="0" width="100%" class="menudottedline">  
  <tr  class="menubackgr" >
    <td width="100%" align="right" class="smallgrey">
Version 5.2.1 &nbsp;&nbsp;
    </td>
  </tr>
  </table>




<table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminform">
	<tr>
		<td width="60%" valign="top">

		<table border="0" cellspacing="0" cellpadding="0" width="100%" id="table2">
			<tr>
				<td>

				<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
					<thead>
					<tr>
						<th><div align="left"><?php echo _EZAUTOS_CPANEL_SYSTOOLS;?>:-</div></th>
					</tr>
					</thead>
				</table>
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td valign="top">




			<div id="cpanel">

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=show">
					<img src="components/com_ezautos/images/icon1.png" alt="<?php echo _EZAUTOS_CPANEL_VMGR;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_VMGR;?></span>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=showcatg">
					<img src="components/com_ezautos/images/icon2.png" alt="<?php echo _EZAUTOS_CPANEL_MGCAT;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGCAT;?></span>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=make">
					<img src="components/com_ezautos/images/icon3.png" alt="<?php echo _EZAUTOS_CPANEL_MGVEHMAKE;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGVEHMAKE;?></span>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=model">
					<img src="components/com_ezautos/images/icon4.png" alt="<?php echo _EZAUTOS_CPANEL_MGVEHMOD;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGVEHMOD;?></span>
				</a>
			</div>
		</div>
        
        
        				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=mancountry">
					<img src="components/com_ezautos/images/icon99.png" alt="<?php echo _EZAUTOS_CPANEL_MGVEHCOUNTRY;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGVEHCOUNTRY;?></span>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=mancity">
					<img src="components/com_ezautos/images/icon100.png" alt="<?php echo _EZAUTOS_CPANEL_MGVEHCITY;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGVEHCITY;?></span>
				</a>
			</div>
		</div>
        
        
        


				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=enginesize">
					<img src="components/com_ezautos/images/icon5.png" alt="<?php echo _EZAUTOS_CPANEL_MGENG;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGENG;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=features">
					<img src="components/com_ezautos/images/icon20.png" alt="<?php echo _EZAUTOS_FEATURES_MANAGEFEATURES;?>" align="top" border="0" /><span><?php echo _EZAUTOS_FEATURES_MANAGEFEATURES;?></span>
				</a>
			</div>
		</div>


				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=price">
					<img src="components/com_ezautos/images/icon6.png" alt="<?php echo _EZAUTOS_CPANEL_MGPRICE;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGPRICE;?></span>
				</a>
			</div>
		</div>


				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=profiles">
					<img src="components/com_ezautos/images/icon7.png" alt="<?php echo _EZAUTOS_CPANEL_PROFMGR;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_PROFMGR;?></span>
				</a>
			</div>
		</div>


			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=leads">
					<img src="components/com_ezautos/images/icon8.png" alt="<?php echo _EZAUTOS_CPANEL_MGSALES;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGSALES;?></span>
				</a>
			</div>
		</div>


			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=content">
					<img src="components/com_ezautos/images/icon18.png" alt="<?php echo _EZAUTOS_CPANEL_STATIC;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_STATIC;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=mlist">
					<img src="components/com_ezautos/images/icon20.png" alt="<?php echo _EZAUTOS_CPANEL_MLIST;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MLIST;?></span>
				</a>
			</div>
		</div>



			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=settings">
					<img src="components/com_ezautos/images/icon15.png" alt="<?php echo _EZAUTOS_CPANEL_CONFIG;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_CONFIG;?></span>
				</a>
			</div>
		</div>





						</div>
						</td>
					</tr>
				</table>

				</td>
			</tr>
			<tr>
				<td>

				<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
					<thead>
					<tr>
						<th><div align="left"><?php echo _EZAUTOS_CPANEL_MAINTTOOLS;?>:-</div></th>
					</tr>
					</thead>
				</table>
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td valign="top">
						<div id="cpanel">


							<div style="float:left;">
							<div class="icon">
								<a href="index2.php?option=com_ezautos&amp;task=migrateusers">
									<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon24.png" alt="<?php echo _EZAUTOS_CPANEL_SYNCH;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_SYNCH;?></span>
								</a>
							</div>
							</div>


			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=cleandb">
					<img src="components/com_ezautos/images/icon25.png" alt="<?php echo _EZAUTOS_CPANEL_CLEANLIST;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_CLEANLIST;?></span>
				</a>
			</div>
		</div>


			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=prunelightbox">
					<img src="components/com_ezautos/images/icon27.png" alt="<?php echo _EZAUTOS_CPANEL_PRUNE;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_PRUNE;?></span>
				</a>
			</div>
		</div>



							<div style="float:left;">
							<div class="icon">
								<a href = "javascript:if (confirm('<?php echo _EZAUTOS_TOOLS_PRUNEORPHANS_WARNING;?>')){ location.href='index2.php?option=com_ezautos&amp;task=pruneorphans';}" title="<?php echo _EZAUTOS_TOOLS_PRUNEORPHANS_WARNING;?>">
									<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon26.png" alt="<?php echo _EZAUTOS_TOOLS_PRUNEORPHANS;?>" align="top" border="0" /><span><?php echo _EZAUTOS_TOOLS_PRUNEORPHANS;?></span>
								</a>
							</div>
							</div>


							<div style="float:left;">
							<div class="icon">
								<a href = "javascript:if (confirm('<?php echo _EZAUTOS_MLIST_PRUNESUBS_WARNING;?>')){ location.href='index2.php?option=com_ezrealty&amp;task=prunesubs';}" title="<?php echo _EZAUTOS_MLIST_PRUNESUBS_WARNING;?>">
									<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon22.png" alt="<?php echo _EZAUTOS_MLIST_PRUNESUBS;?>" align="top" border="0" /><span><?php echo _EZAUTOS_MLIST_PRUNESUBS;?></span>
								</a>
							</div>
							</div>


							<div style="float:left;">
							<div class="icon">
								<a href="index2.php?option=com_ezautos&amp;task=listimages">
									<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon31.png" alt="<?php echo _EZAUTOS_CPANEL_MGEUPLOADS;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_MGEUPLOADS;?></span>
								</a>
							</div>
							</div>

						</div>
						</td>
					</tr>
				</table>

				</td>
			</tr>

			<tr>
				<td valign="top">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td width="50%" valign="top">

				<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
					<thead>
					<tr>
						<th><div align="left"><?php echo _EZAUTOS_CPANEL_EMAILTOOLS;?>:-</div></th>
					</tr>
					</thead>
				</table>
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td valign="top">
					<div id="cpanel">


			<div style="float:left;">
			<div class="icon">
							<a href = "javascript:if (confirm('<?php echo _EZAUTOS_CHECK_ALERT;?>')){ location.href='index2.php?option=com_ezautos&amp;task=sendalertmail';}" title="<?php echo _EZREALTY_CHECK_ALERT;?>">
					<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon9.png" alt="<?php echo _EZAUTOS_CPANEL_SENDALERT;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_SENDALERT;?></span>
				</a>
			</div>
		</div>


						<div style="float:left;">
						<div class="icon">
							<a href = "index2.php?option=com_ezautos&task=multimail" title="<?php echo _EZAUTOS_CHECK_LEADSALERT;?>">
								<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon32.png" alt="<?php echo _EZAUTOS_CPANEL_LEADNOTIFICATIONS;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_LEADNOTIFICATIONS;?></span>
							</a>
						</div>
						</div>

						<div style="float:left;">
						<div class="icon">
							<a href = "index2.php?option=com_ezautos&task=adminpostmultilistings" title="<?php echo _EZAUTOS_CPANEL_SENDLISTINGS;?>">
								<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon30.png" alt="<?php echo _EZAUTOS_CPANEL_SENDLISTINGS;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_SENDLISTINGS;?></span>
							</a>
						</div>
						</div>
					</div>
					</td>
				</tr>
			</table>

			</td>
			<td width="50%" valign="top">

				<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
					<thead>
				<tr>
					<th><div align="left"><?php echo _EZAUTOS_CPANEL_DBTOOLS;?>:-</div></th>
				</tr>
					</thead>
			</table>
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td valign="top">
					<div id="cpanel">

						<div style="float:left;">
						<div class="icon">
							<a href = "javascript:if (confirm('<?php echo _EZAUTOS_TOOLS_INSTALLSAMPLE_WARNING;?>')){ location.href='index2.php?option=com_ezautos&amp;task=sampledata';}" title="<?php echo _EZAUTOS_TOOLS_INSTALLSAMPLE_WARNING;?>">
								<img src="<?php echo $mosConfig_live_site;?>/administrator/components/com_ezautos/images/icon23.png" alt="<?php echo _EZAUTOS_TOOLS_INSTALLSAMPLE;?>" align="top" border="0" /><span><?php echo _EZAUTOS_TOOLS_INSTALLSAMPLE;?></span>
							</a>
						</div>
						</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=optimizetables">
					<img src="components/com_ezautos/images/icon16.png" alt="<?php echo _EZAUTOS_CPANEL_OPTIMIZE;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_OPTIMIZE;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezautos&amp;task=upgradetables">
					<img src="components/com_ezautos/images/icon12.png" alt="<?php echo _EZAUTOS_CPANEL_UPGRADE;?>" align="top" border="0" /><span><?php echo _EZAUTOS_CPANEL_UPGRADE;?></span>
				</a>
			</div>
		</div>

					</div>
					</td>
				</tr>
			</table>
</td>
					</tr>
				</table>
				</td>
			</tr>

	</table>

	</td>
	<td width="40%" valign="top">

<?php
$tabs->startPane("displayPane");
$tabs->startTab( _EZAUTOS_CPANEL_INTRO,"intro-page");
?>

<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">

  <tr>
    <td valign="top"><br />

<p>All customers can receive free support as per the terms of support via the Helpdesk 
at <a target="_blank" href="http://www.raptorsupport.com">Raptor Support</a>.  Please ensure you read the TOS 
and consult the online support site troubleshooting articles prior to submitting any support ticket, as you'll find 
most common installation problems already have problem-solving instructions written. 
This will help to avoid unnecessary delays in resolving your problem - and keep the support system 
clear of inappropriate requests.</p>
<p>If you want custom modification assistance - this is not handled as part of free support, and must either be 
done on a commercial basis - or you can visit the Peer-to-Peer forum.</p>
<p>The <a target="_blank" href="http://forum.raptorsupport.com">Peer-to-Peer forum</a> is also available if 
you would like to connect with other users.  You'll find a lot of helpful posts on many topics - including customization 
instructions and other quick tips.</p>

</td>
  </tr>

</table>


<?php
$tabs->endTab();
$tabs->startTab( _EZAUTOS_IMPORT_POSTCODES,"postcode-page");
?>

<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">

  <tr>
    <td valign="top"><br />

<br />

<strong><?php echo _EZAUTOS_IMPORT_POSTCODETITLE;?></strong>
<br />
<br /><?php echo _EZAUTOS_IMPORT_POSTCODES_NOTES;?><br />

<?php

$link4 = $mosConfig_live_site. '/administrator/index2.php?option=com_ezautos&task=importpostcodes';

?>
		<script type="text/javascript">
		<!--
		function saveit() {
			var form = document.adminForm;
			// do field validation
			if (form.upload.value == "") {
				alert( "<?php echo _EZAUTOS_TAG11;?>" );
			} else {
				document.adminForm.action = '<?php echo $link4; ?>';
				document.adminForm.submit();

			}
		}
		//-->
		</script>


							<table border="0" cellpadding="10" cellspacing="10">
								<tr>
									<td width="100">
										<form action="index2.php" method="POST" name="adminForm" id="adminForm" enctype="multipart/form-data">
										<input type="hidden" name="option" value = "com_ezautos" />
										<input type="hidden" name="task" value="importpostcodes" />
										<input class="inputbox" type="file" name="upload" id="upload" size="20" />
									</td>
									<td>
										<input type="button" name="<?php echo _EZAUTOS_TAG12; ?>" value="<?php echo _EZAUTOS_TAG12; ?>" class="button" onclick="saveit()" />
									</td>
										</form>
								</tr>
							</table>


<br />
<br />

<strong><?php echo _EZAUTOS_TAG13;?></strong>
<br />

<?php

$link5 = $mosConfig_live_site. '/administrator/index2.php?option=com_ezautos&task=importmakes';

?>
		<script type="text/javascript">
		<!--
		function saveit2() {
			var form = document.adminForm2;
			// do field validation
			if (form.upload.value == "") {
				alert( "<?php echo _EZAUTOS_TAG11;?>" );
			} else {
				document.adminForm2.action = '<?php echo $link5; ?>';
				document.adminForm2.submit();

			}
		}
		//-->
		</script>


							<table border="0" cellpadding="10" cellspacing="10">
								<tr>
									<td width="100">
										<form action="index2.php" method="POST" name="adminForm2" id="adminForm2" enctype="multipart/form-data">
										<input type="hidden" name="option" value = "com_ezautos" />
										<input type="hidden" name="task" value="importmakes" />
										<input class="inputbox" type="file" name="upload" id="upload" size="20" />
									</td>
									<td>
										<input type="button" name="<?php echo _EZAUTOS_TAG12; ?>" value="<?php echo _EZAUTOS_TAG12; ?>" class="button" onclick="saveit2()" />
									</td>
										</form>
								</tr>
							</table>


<br />

<strong><?php echo _EZAUTOS_TAG14;?></strong>
<br />

<?php

$link6 = $mosConfig_live_site. '/administrator/index2.php?option=com_ezautos&task=importmodels';

?>
		<script type="text/javascript">
		<!--
		function saveit3() {
			var form = document.adminForm3;
			// do field validation
			if (form.upload.value == "") {
				alert( "<?php echo _EZAUTOS_TAG11;?>" );
			} else {
				document.adminForm3.action = '<?php echo $link6; ?>';
				document.adminForm3.submit();

			}
		}
		//-->
		</script>


							<table border="0" cellpadding="10" cellspacing="10">
								<tr>
									<td width="100">
										<form action="index2.php" method="POST" name="adminForm3" id="adminForm3" enctype="multipart/form-data">
										<input type="hidden" name="option" value = "com_ezautos" />
										<input type="hidden" name="task" value="importmodels" />
										<input class="inputbox" type="file" name="upload" id="upload" size="20" />
									</td>
									<td>
										<input type="button" name="<?php echo _EZAUTOS_TAG12; ?>" value="<?php echo _EZAUTOS_TAG12; ?>" class="button" onclick="saveit3()" />
									</td>
										</form>
								</tr>
							</table>

</td>
  </tr>

</table>


<?php
$tabs->endTab();
$tabs->startTab( _EZAUTOS_CPANEL_FEEDS,"feeds-page");
?>

<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">

  <tr>
    <td valign="top"><br /><?php echo _EZAUTOS_CPANEL_FEEDSDESC;?>


<?php

$google = $mosConfig_live_site .'/index2.php?option=com_ezautos&task=google&Itemid='.$myItemid.'&no_html=1';
$vast = $mosConfig_live_site .'/index2.php?option=com_ezautos&task=vast&Itemid='.$myItemid.'&no_html=1';


?>

<br /><br />

<a target="_blank" href="<?php echo $google;?>"><?php echo _EZAUTOS_CPANEL_GOOGLE1;?></a> - 

<strong>(<a target="_blank" href="http://www.google.com/base/help/housing.html"><?php echo _EZAUTOS_CPANEL_GOOGLE2;?></a>)</strong>

<br />
<br />

<a target="_blank" href="<?php echo $vast;?>"><?php echo _EZAUTOS_CPANEL_VAST1;?></a> - 

<strong>(<a target="_blank" href="http://www.vast.com/info/submitcontent"><?php echo _EZAUTOS_CPANEL_VAST2;?></a>)</strong>


<br />
<br />


</td>
  </tr>

</table>


<?php
$tabs->endTab();
$tabs->endPane();
?>


		</td>
	</tr>
</table>



<?php

}



/**************************************************\
            SHOW THE LIST OF VEHICLES
\**************************************************/


function showVehicle( $option, &$rows, &$lists, &$pageNav ) {
global $database, $my, $ea_imagedirectory, $mosConfig_live_site, $ea_sitetype;
global $ea_thumbcreation, $ea_currencypos, $ea_currencysign, $ea_currencyformat, $ea_expmgmt, $ea_expsys, $ea_expgrace;

include(EZADMIN_PATH."/config.ezautos.php");

	mosCommonHTML::loadOverlib();

$status2 = 'status=yes,toolbar=yes,scrollbars=yes,titlebar=yes,menubar=yes,resizable=yes,width=780,height=600,directories=no,location=no';

?>

<link rel="stylesheet" href="components/com_ezautos/includes/cpanel.css" type="text/css" />


<form action="index2.php" method="post" name="adminForm">

<table border="0" width="100%">
	<tr>
		<td align="left">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"> </td>
			<td nowrap="nowrap" width="70" align="right"><?php echo _EZAUTOS_ORDERBY;?>:- </td>
			<td align="right"><?php echo $lists['order'];?></td>
		</tr>
	</table>
		</td>
	</tr>
<?php if (!$ea_vinfilt && !$ea_regfilt) { } else { ?>
	<tr>
		<td align="left">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"> </td>
			<td nowrap="nowrap"><?php echo _EZAUTOS_LISTINGS_FILTER;?></td>
<?php if ($ea_vinfilt) { ?>
			<td align="right"><?php echo $lists['vin'];?></td>
<?php }
if ($ea_regfilt) { ?>
			<td align="right"><?php echo $lists['rego'];?></td>
<?php } ?>
		</tr>
	</table>

		</td>
	</tr>
<?php } ?>
	<tr>
		<td align="left">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_LISTINGS_TITLE;?></div></td>
			<td nowrap="nowrap"><?php echo _EZAUTOS_LISTINGS_FILTER;?></td>
			<td align="right"><?php echo $lists['cid'];?></td>
<?php if ($ea_makefilt) { ?>
			<td align="right"><?php echo $lists['make'];?></td>
<?php }
if ($ea_modfilt) { ?>
			<td align="right"><?php echo $lists['model'];?></td>
<?php } ?>
		</tr>
	</table>
</td>
	</tr>


</table>





	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align="left">ID#</th>
			<th width="20" align="left"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
<?php if ( $ea_piclist ) { ?>
			<th width="50" align="left"> </th>
<?php } ?>
			<th align="left"><?php echo _EZAUTOS_LISTINGS_MM;?></th>
			<th align="left" width="90"><?php echo _EZAUTOS_LISTINGS_CATG;?></th>
<?php if ( $ea_sitetype==0 ) { ?>
			<th width="70" align="left"><?php echo _EZAUTOS_LISTINGS_PRICE;?></th>
			<th width="60" align="center"><?php echo _EZAUTOS_LISTINGS_AV;?></th>
<?php } ?>
			<th width="30" align="center"><?php echo _EZAUTOS_LISTINGS_HITS;?></th>
			<th width="60" align="center"><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
			<th width="30" align="center"><?php echo stripslashes( _EZAUTOS_PREMIUM );?></th>
			<th width="30" align="center"><?php echo stripslashes( _EZAUTOS_FEATURED );?></th>
			<th width="60" align="center"><?php echo _EZAUTOS_LISTINGS_SELLER;?></th>
			<th width="70" align="center"><?php echo _EZAUTOS_LISTINGS_DATE;?></th>
			<th width="60" align="center"><?php echo _EZAUTOS_LISTINGS_UPDATE;?></th>
<?php if ($ea_expmgmt==1 && $ea_expsys==1) { ?>
			<th width="70" align="center"><?php echo _EZAUTOS_LISTINGS_EXPDATE;?></th>
<?php } ?>
			<th align='center' width='50'><?php echo _EZAUTOS_VLDET_DELETE;?></th>
			<th align='center' width='50'><?php echo _EZAUTOS_DET_PRINT; ?></th>
		</tr>
		</thead>

		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];

				$task	=	$row->published ? 'unpublish' : 'publish';
				$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
				$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;


			$row->id 	= $row->id;
			$link 		= 'index2.php?option=com_ezautos&task=editA&hidemainmenu=1&id='. $row->id;
			$link3  = 'index3.php?option=com_ezautos&task=print&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);
		} else {
			$formatted_price = number_format($number, 2,",",".");
		}


        ?>

		<tr class="<?php echo "row$k"; ?>">
			<td width="20" align="left"><?php echo ($row->id); ?></td>
				<td width="20">
				<?php echo $checked; ?>
				</td>

<?php if ( $ea_piclist ) { ?>
			<td width="50" align="left">

<?php if ($row->images) { 

$imagekey = explode(",",$row->images);
$myimage=$imagekey[0];

?>
<img src="<?php echo $myimage;?>" border="0" width="50" alt="<?php echo _EZAUTOS_GENERIC_EDITDETAILS; ?>" />
<?php
} else {

if ($row->image1) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" width="50" alt="<?php echo _EZAUTOS_GENERIC_EDITDETAILS; ?>" /><?php }else{ ?><img src="../components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" width="50" alt="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>" /><?php } ?>

<?php } ?>
</td>
<?php } ?>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative; ?>
					</a>
					<?php
				}
				?>
			</td>

			<td width="90" align="left"><?php echo $row->category; ?></td>
<?php if ( $ea_sitetype==0 ) { ?>
			<td width="60" align="left">

		<?php if ( $row->showprice ) { ?>
		<?php if ( $ea_currencypos==0 ) { ?>
		<?php echo $ea_currencysign.''.$formatted_price;?>
		<?php } else { ?>
		<?php echo $formatted_price.' '.$ea_currencysign;?>
		<?php } ?>
		<?php } else { ?>
		<?php echo _EZAUTOS_POR;?>
		<?php } ?>

</td>
			<td width='60' align='center'><?php echo $row->availability; ?></td>
<?php } ?>

			<td width="30" align="center"><?php echo $row->hits; ?><?php if ($ea_expmgmt==1 && $ea_expsys==0) { ?><br /><a href = "javascript:if (confirm('<?php echo _EZAUTOS_RESET_BTN;?>')){ location.href='index2.php?option=com_ezautos&amp;task=resethits&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZAUTOS_RESET_BTN;?>"><strong><?php echo _EZAUTOS_RESET_BTN;?></strong></a><?php } ?></td>

			<td align='center' width="70">
				<a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td width='30' align='center'><?php if ($row->premium == 1){ ?><img src="../images/M_images/rating_star.png" border="0" alt="<?php echo _EZAUTOS_PREMIUM; ?>" title="<?php echo _EZAUTOS_PREMIUM; ?>" /><?php }else{ ?><img src="../images/M_images/rating_star_blank.png" border="0" alt="<?php echo _EZAUTOS_DETAILS_FREESTATUS; ?>" title="<?php echo _EZAUTOS_DETAILS_FREESTATUS; ?>" /><?php } ?></td>
			<td width='30' align='center'><?php if ($row->featured == 1){ ?><img src="../images/M_images/rating_star.png" border="0" alt="<?php echo _EZAUTOS_FEATURED; ?>" title="<?php echo _EZAUTOS_FEATURED; ?>" /><?php }else{ ?><img src="../images/M_images/rating_star_blank.png" border="0" alt="" /><?php } ?></td>
			<td width='60' align='center'><?php echo ($row->vehseller); ?></td>
			<td width='70' align='center'><?php echo ($row->listdate); ?></td>
			<td width="60" align="center"><?php echo strftime("%c",$row->lastupdate); ?></td>


<?php if ($ea_expmgmt==1 && $ea_expsys==1) { ?>

			<td width='70' align='center'>
<?php if ($row->expdate) { ?>

<?php echo strftime("%c",$row->expdate); ?><br />
<?php if ($row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y"))) { ?><a href = "javascript:if (confirm('<?php echo _EZAUTOS_RESET_BTN; ?>')){ location.href='index2.php?option=com_ezautos&amp;task=resetdate&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZAUTOS_RESET_BTN;?>"><strong><?php echo _EZAUTOS_RESET_BTN;?></strong></a><?php } ?>
<?php } else { ?>
<a href = "javascript:if (confirm('<?php echo _EZAUTOS_RESET_BTN; ?>')){ location.href='index2.php?option=com_ezautos&amp;task=resetdate&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZAUTOS_RESET_BTN;?>"><strong><?php echo _EZAUTOS_RESET_BTN;?></strong></a>
<?php } ?>
</td>

<?php } ?>

			<td align='center' width="50"><a href = "javascript:if (confirm('<?php echo _EZAUTOS_VLDET_DELETE;?>')){ location.href='index2.php?option=com_ezautos&amp;task=remove&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZAUTOS_VLDET_DELETE;?>"><strong><?php echo _EZAUTOS_VLDET_DELETE;?></strong></a></td>
			<td align='center' width="50"><a href="javascript:void(0)" onclick="window.open('<?php echo $link3; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZAUTOS_DET_PRINT; ?>"><strong><?php echo _EZAUTOS_DET_PRINT; ?></strong></a></td>

			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="show" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

  }


/**************************************************\
            ADD/EDIT VEHICLE DETAILS
\**************************************************/


function editVehicle( $option, &$row, &$lists, $list ) {
global $database, $my, $mosConfig_live_site, $ea_sitetype, $ea_thumbcreation, $ea_usepcode, $ea_useflv;

include(EZADMIN_PATH."/config.ezautos.php");

$tabs = new mosTabs(0);
mosMakeHtmlSafe( $row );

?>

<link rel="stylesheet" href="components/com_ezautos/includes/cpanel.css" type="text/css" />

    <script language="javascript" type="text/javascript">


		function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancel') {
        submitform( pressbutton );
        return;
      }

      // do field validation

		if (form.year.value == "0"){
		alert( "<?php echo _EZAUTOS_VLDET_ERROR2;?>" );
		
		} else if (form.cid.value == "0"){
		alert( "<?php echo _EZAUTOS_VLDET_ERROR4;?>" );
		
		} else if (form.make.value == "0"){
		alert( "<?php echo _EZAUTOS_VLDET_ERROR5;?>" );
		
		} else if (form.model.value == "0"){
		alert( "<?php echo _EZAUTOS_VLDET_ERROR6;?>" );
		
		} else if (form.country.value == "0"){
		alert( "<?php echo _EZAUTOS_COUNTRY_ERROR1;?>" );
		
		} else if (form.city.value == "0"){
		alert( "<?php echo _EZAUTOS_CITY_ERROR1;?>" );

<?php if ( $ea_sitetype==0 ) { ?>

      } else if (form.price.value == ""){
        alert( "<?php echo _EZAUTOS_VLDET_ERROR9;?>" );

<?php } ?>

<?php if ( $ea_usepcode ) { ?>

      } else if (form.pcode.value == ""){
        alert( "<?php echo _EZAUTOS_ERROR_PCODE;?>" );

<?php } ?>

      } else if (form.smalldesc.value == ""){
        alert( "<?php echo _EZAUTOS_VLDET_ERROR11;?>" );

      } else if (form.owner.value == "0"){
        alert( "<?php echo _EZAUTOS_OWNER_ERROR;?>" );

      } else {

		<?php getEditorContents( 'editor1', 'longdesc' ) ; ?>

        submitform( pressbutton );
      }
    }

    </script>


<table cellpadding="4" cellspacing="0" border="0" width="100%">
  <tr>
    <td width="100%" align="left"><span class="sectionname"><div class="header icon-48-generic"><?php echo $row->cid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_VLDET_TITLE;?></div></span></td>
  </tr>
</table>


<form action="index2.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">


<table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
		<td align="left">


<?php
$tabs->startPane("displayPane");
$tabs->startTab(_EZAUTOS_TABS_SUMMARY,"summary-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_TABS_SUMMARY;?></div></th>
    </tr>
	</thead>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_YOM;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['year']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_REG;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="rego" size="10" value="<?php echo $row->rego;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_VIN;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="vin" size="44" value="<?php echo $row->vin;?>" /></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_CATG;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['cid']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
  
  
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_MAKE;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['make']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_MODEL;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['model']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
  
 
   <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_COUNTRY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['country']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_CITY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['city']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
 
 
 
 
  
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_DERIVATIVE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="derivative" size="10" value="<?php echo $row->derivative;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ENG;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['engine']; ?></td>
  </tr>

<?php

  # Build Transmission type select list

	$transmission[] = ezauHTML::makeOption( '', _EZAUTOS_TRANSTYPE_NS );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_AUTO, _EZAUTOS_TRANSTYPE_AUTO );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_MAN, _EZAUTOS_TRANSTYPE_MAN );
	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_SEMIA, _EZAUTOS_TRANSTYPE_SEMIA );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_CVT, _EZAUTOS_TRANSTYPE_CVT );
  	$transmission[] = ezauHTML::makeOption( _EZAUTOS_TRANSTYPE_OTH, _EZAUTOS_TRANSTYPE_OTH );
  
  	$lists['trans'] = ezauHTML::selectList( $transmission, 'trans', 'class="widedropbox" size="1"' , 'value', 'text', $row->trans );

?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_TRANS;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['trans'];?></td>
  </tr>

<?php

  # Build the colour list

	$colourit[] = ezauHTML::makeOption( '', _EZAUTOS_COLOUR_TYPE0 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE2, _EZAUTOS_COLOUR_TYPE2 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE3, _EZAUTOS_COLOUR_TYPE3 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE4, _EZAUTOS_COLOUR_TYPE4 );
    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE5, _EZAUTOS_COLOUR_TYPE5 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE6, _EZAUTOS_COLOUR_TYPE6 );
	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE7, _EZAUTOS_COLOUR_TYPE7 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE8, _EZAUTOS_COLOUR_TYPE8 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE9, _EZAUTOS_COLOUR_TYPE9 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE10, _EZAUTOS_COLOUR_TYPE10 );
    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE11, _EZAUTOS_COLOUR_TYPE11 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE12, _EZAUTOS_COLOUR_TYPE12 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE13, _EZAUTOS_COLOUR_TYPE13 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE14, _EZAUTOS_COLOUR_TYPE14 );
    $colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE15, _EZAUTOS_COLOUR_TYPE15 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE16, _EZAUTOS_COLOUR_TYPE16 );
	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE17, _EZAUTOS_COLOUR_TYPE17 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE18, _EZAUTOS_COLOUR_TYPE18 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE19, _EZAUTOS_COLOUR_TYPE19 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE20, _EZAUTOS_COLOUR_TYPE20 );
  	$colourit[] = ezauHTML::makeOption( _EZAUTOS_COLOUR_TYPE21, _EZAUTOS_COLOUR_TYPE21 );

  	$lists['colour'] = ezauHTML::selectList( $colourit, 'colour', 'class="widedropbox" size="1"' , 'value', 'text', $row->colour );
  	$lists['intcolour'] = ezauHTML::selectList( $colourit, 'intcolour', 'class="widedropbox" size="1"' , 'value', 'text', $row->intcolour );

?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_EXTCOLOUR;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['colour'];?></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_INTCOLOUR;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['intcolour'];?></td>
  </tr>



<?php

  # Build the fuel type list

	$fuel_typeit[] = ezauHTML::makeOption( '', _EZAUTOS_FUEL_TYPE1 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE2, _EZAUTOS_FUEL_TYPE2 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE3, _EZAUTOS_FUEL_TYPE3 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE4, _EZAUTOS_FUEL_TYPE4 );
    $fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE5, _EZAUTOS_FUEL_TYPE5 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE6, _EZAUTOS_FUEL_TYPE6 );
	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE7, _EZAUTOS_FUEL_TYPE7 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE8, _EZAUTOS_FUEL_TYPE8 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE9, _EZAUTOS_FUEL_TYPE9 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE10, _EZAUTOS_FUEL_TYPE10 );
    $fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE11, _EZAUTOS_FUEL_TYPE11 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE12, _EZAUTOS_FUEL_TYPE12 );
  	$fuel_typeit[] = ezauHTML::makeOption( _EZAUTOS_FUEL_TYPE13, _EZAUTOS_FUEL_TYPE13 );

  	$lists['fuel_type'] = ezauHTML::selectList( $fuel_typeit, 'fuel', 'class="widedropbox" size="1"' , 'value', 'text', $row->fuel );

?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_FUEL;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['fuel_type'];?></td>
  </tr>

<?php if ($row->cid && $row->doorsbody) { ?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_DOORSBODY;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="doorsbody" size="44" value="<?php echo $row->doorsbody;?>" /> <?php echo _EZAUTOS_SPECS_REDUNDANT;?></td>
  </tr>

<?php }


  # Build the door number list

	$doornum[] = ezauHTML::makeOption( 0, _EZAUTOS_SPECS_DOORSNS );
	$doornum[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_DOORS1 );
	$doornum[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_DOORS2 );
	$doornum[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_DOORS3 );
	$doornum[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_DOORS4 );
	$doornum[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_DOORS5 );
	$doornum[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_DOORS6 );
	$doornum[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_DOORS7 );
	$doornum[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_DOORS8 );
	$doornum[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_DOORS9 );

  	$lists['doors'] = ezauHTML::selectList( $doornum, 'doors', 'class="widedropbox" size="1"' , 'value', 'text', $row->doors );

?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_DOORS;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['doors'];?></td>
  </tr>


<?php

  # Build the body type list

	$bodytype[] = ezauHTML::makeOption( 0, _EZAUTOS_SPECS_BODYNS );
	$bodytype[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_BODY1 );
	$bodytype[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_BODY2 );
	$bodytype[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_BODY3 );
	$bodytype[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_BODY4 );
	$bodytype[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_BODY5 );
	$bodytype[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_BODY6 );
	$bodytype[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_BODY7 );
	$bodytype[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_BODY8 );
	$bodytype[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_BODY9 );
	$bodytype[] = ezauHTML::makeOption( 10, _EZAUTOS_SPECS_BODY10 );
	$bodytype[] = ezauHTML::makeOption( 11, _EZAUTOS_SPECS_BODY11 );
	$bodytype[] = ezauHTML::makeOption( 12, _EZAUTOS_SPECS_BODY12 );

  	$lists['body'] = ezauHTML::selectList( $bodytype, 'body', 'class="widedropbox" size="1"' , 'value', 'text', $row->body );

?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_BODY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['body'];?></td>
  </tr>

<?php if ($row->id && $row->mileage && !$row->odometer) { ?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_MILEAGE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="mileage" size="10" value="<?php echo $row->mileage;?>" /> <?php echo _EZAUTOS_SPECS_REDUNDANT;?></td>
  </tr>

<?php }

$odom[] = ezauHTML::makeOption( _EZAUTOS_SPECS_ODOMETER_TYPE1, _EZAUTOS_SPECS_ODOMETER_TYPE1 );
$odom[] = ezauHTML::makeOption( _EZAUTOS_SPECS_ODOMETER_TYPE2, _EZAUTOS_SPECS_ODOMETER_TYPE2 );
$lists['mileage_unit'] = ezauHTML::selectList( $odom, 'mileage_unit', 'class="dropbox" size="1"' , 'value', 'text', $row->mileage_unit );

?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_ODOMETER;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="odometer" size="10" value="<?php if ($row->odometer !=0 ) { echo $row->odometer;} ?>" /> <?php echo $lists['mileage_unit'];?> <?php echo _EZAUTOS_SPECS_NUMOWNERS_DESC;?></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_CO2;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="co2" size="10" value="<?php if ($row->co2 !=0 ) { echo $row->co2;} ?>" /> <?php echo _EZAUTOS_VLDET_CO2EMM;?> - <?php echo _EZAUTOS_SPECS_CO2_DESC;?></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_NUMOWNERS;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="numowners" size="10" value="<?php if ($row->numowners !=0 ) { echo $row->numowners;} ?>" /> <?php echo _EZAUTOS_SPECS_NUMOWNERS_DESC;?></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_FIRSTREG;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['monthreg'];?> <?php echo $lists['yearreg'];?></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTINSPECTION;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['monthinsp'];?> <?php echo $lists['yearinsp'];?></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_MONTHYEAR_NEXTEMISSIONSINSP;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['monthemiss'];?> <?php echo $lists['yearemiss'];?></td>
  </tr>



</table>

<?php
$tabs->endTab();

if ( $ea_vehspecs == 1 ){

$tabs->startTab(_EZAUTOS_TABS_SPECS,"specs-page");
?>


<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_SPECS1;?></div></th>
    </tr>
	</thead>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FUELSYS;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="fuelsystem" size="40" value="<?php echo $row->fuelsystem;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_BORESTROKE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="borestroke" size="40" value="<?php echo $row->borestroke;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_POWER;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="power" size="40" value="<?php echo $row->power;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TORQUE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="torque" size="40" value="<?php echo $row->torque;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WEIGHTPOWER;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="weightpower" size="40" value="<?php echo $row->weightpower;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTBRAKES;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="frontbrakes" size="40" value="<?php echo $row->frontbrakes;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARBRAKES;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="rearbrakes" size="40" value="<?php echo $row->rearbrakes;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WHEELDIMS;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="wheeldims" size="40" value="<?php echo $row->wheeldims;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TURNCIRC;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="turncirc" size="40" value="<?php echo $row->turncirc;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_COMPRAT;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="compressionratio" size="40" value="<?php echo $row->compressionratio;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TANKCAP;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="tankcapacity" size="40" value="<?php echo $row->tankcapacity;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTLENGTH;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="extlength" size="40" value="<?php echo $row->extlength;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTWIDTH;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="extwidth" size="40" value="<?php echo $row->extwidth;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_EXTHEIGHT;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="extheight" size="40" value="<?php echo $row->extheight;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTTRACK;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="fronttrack" size="40" value="<?php echo $row->fronttrack;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARTRACK;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="reartrack" size="40" value="<?php echo $row->reartrack;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_WHEELBASE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="wheelbase" size="40" value="<?php echo $row->wheelbase;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FRONTSUS;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="frontsus" size="40" value="<?php echo $row->frontsus;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_REARSUS;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="rearsus" size="40" value="<?php echo $row->rearsus;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_KERBWEIGHT;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="kerbweight" size="40" value="<?php echo $row->kerbweight;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_GRCLEAR;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="groundclear" size="40" value="<?php echo $row->groundclear;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_SEATCAP;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="seatcap" size="40" value="<?php echo $row->seatcap;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_CITYFUEL;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="cityfuel" size="40" value="<?php echo $row->cityfuel;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_HWYFUEL;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="highwayfuel" size="40" value="<?php echo $row->highwayfuel;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TOWCAP;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="towingcap" size="40" value="<?php echo $row->towingcap;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_COUNTRYORIGIN;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="countryorigin" size="40" value="<?php echo $row->countryorigin;?>" /><br /><br /></td>
  </tr>

</table>

<?php
$tabs->endTab();

}
if ( $ea_vehfeats == 1 ){

$tabs->startTab(_EZAUTOS_TABS_FEAT,"features-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_FEAT1;?></div></th>
    </tr>
	</thead>


  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ADDFEAT;?>:</strong><br /><?php echo _EZAUTOS_VLDET_SELMULT;?><br /></td>
    <td width="80%" valign="top"><?php echo $lists['features'];?><br /><br /></td>
  </tr>

<?php if ($row->id && $row->showfeat && !$row->features) { ?>

    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_FEAT1;?></div></th>
    </tr>
    <tr>
      <td colspan="2"><div class="sectionname"><?php echo _EZAUTOS_VLDET_REDUNDANT_FEATURES;?></div></td>
    </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SHOWCARFEAT;?>:</strong><br /><?php echo _EZAUTOS_VLDET_SHOWCARFEATDESC;?></td>
    <td width="80%" valign="top"><br /><?php echo $lists['showfeat']; ?><br /><br /></td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_ADDFEAT;?>:</strong><br /><?php echo _EZAUTOS_VLDET_ADDFEATDESC;?></td>
    <td width="80%" valign="top"><br />

<table border="0" id="additional features" cellpadding="5">
	<tr>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_AIRCO; ?>: </td><td valign="top" width="100"><?php echo $lists['airco']; ?></td>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_POWIN; ?>: </td><td valign="top" width="100"><?php echo $lists['pwin']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_POSTEER; ?>: </td><td valign="top" width="100"><?php echo $lists['psteer']; ?></td>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_CC; ?>: </td><td valign="top" width="100"><?php echo $lists['cruise']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_AIRBAGS; ?>: </td><td valign="top" width="100"><?php echo $lists['airbag']; ?></td>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_ALBS; ?>: </td><td valign="top" width="100"><?php echo $lists['abs']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_AMFM; ?>: </td><td valign="top" width="100"><?php echo $lists['amfm']; ?></td>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_CDP; ?>: </td><td valign="top" width="100"><?php echo $lists['cdp']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_ATS; ?>: </td><td valign="top" width="100"><?php echo $lists['atheft']; ?><br /><br /></td>
		<td valign="top" width="100"><?php echo _EZAUTOS_VLDET_TS; ?>: </td><td valign="top" width="100"><?php echo $lists['tilt']; ?><br /><br /></td>
	</tr>
</table>

</td>
  </tr>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><?php echo _EZAUTOS_VLDET_CUSTFEAT;?></td>

    <td width="80%" valign="top"><br />

<table border="0" width="500" cellpadding="5">
	<tr>
		<td width="248"><input class="inputbox" type="text" name="custom1a" size="15" value="<?php echo $row->custom1a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
		<td width="248"><input class="inputbox" type="text" name="custom2a" size="15" value="<?php echo $row->custom2a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
	</tr>
	<tr>
		<td width="248"><input class="inputbox" type="text" name="custom3a" size="15" value="<?php echo $row->custom3a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
		<td width="248"><input class="inputbox" type="text" name="custom4a" size="15" value="<?php echo $row->custom4a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
	</tr>
	<tr>
		<td width="248"><input class="inputbox" type="text" name="custom5a" size="15" value="<?php echo $row->custom5a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
		<td width="248"><input class="inputbox" type="text" name="custom6a" size="15" value="<?php echo $row->custom6a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
	</tr>
	<tr>
		<td width="248"><input class="inputbox" type="text" name="custom7a" size="15" value="<?php echo $row->custom7a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
		<td width="248"><input class="inputbox" type="text" name="custom8a" size="15" value="<?php echo $row->custom8a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
	</tr>
	<tr>
		<td width="248"><input class="inputbox" type="text" name="custom9a" size="15" value="<?php echo $row->custom9a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?><br /><br /></td>
		<td width="248"><input class="inputbox" type="text" name="custom10a" size="15" value="<?php echo $row->custom10a;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?><br /><br /></td>
	</tr>
</table>

</td>
  </tr>

<?php } ?>

</table>

<?php
$tabs->endTab();

}

$tabs->startTab(_EZAUTOS_TABS_MARKETING,"marketing-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_SPECS_PRICINGCLASSIF;?></div></th>
    </tr>
	</thead>

<?php if ($ea_usepcode) { ?>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_PROPPOSTCODE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="pcode" size="10" value="<?php echo $row->pcode;?>" />  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

<?php }

if ( $ea_sitetype==0 ) {


if ($ea_usetype) {

  # Build listing type select list

  	$typeit[] = ezauHTML::makeOption( 0, _EZAUTOS_TYPE_SELECT );
if ( $ea_usetype1 ) {
  	$typeit[] = ezauHTML::makeOption( 1, _EZAUTOS_TYPE_SALE );
  }
if ( $ea_usetype2 ) {
  	$typeit[] = ezauHTML::makeOption( 2, _EZAUTOS_TYPE_RENTAL );
  }
if ( $ea_usetype3 ) {
  	$typeit[] = ezauHTML::makeOption( 3, _EZAUTOS_TYPE_LEASE );
  }
if ( $ea_usetype4 ) {
  	$typeit[] = ezauHTML::makeOption( 4, _EZAUTOS_TYPE_AUCTION );
  }
if ( $ea_usetype5 ) {
  	$typeit[] = ezauHTML::makeOption( 5, _EZAUTOS_TYPE_SWAP );
  }
if ( $ea_usetype6 ) {
  	$typeit[] = ezauHTML::makeOption( 6, _EZAUTOS_TYPE_TENDER );
  }
  
  	$lists['type'] = ezauHTML::selectList( $typeit, 'type', 'class="widedropbox" size="1"' , 'value', 'text', $row->type );

?>

  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_LISTTYPE;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['type']; ?></td>
  </tr>

<?php

}

if ($ea_tagit_useit == 1) {


  # Build vehicle condition select list

if ($ea_tagit_new) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_NEW, _EZAUTOS_TAGIT_NEW );
}
if ($ea_tagit_new) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_USED, _EZAUTOS_TAGIT_USED );
}
if ($ea_tagit_demo) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_DEMO, _EZAUTOS_TAGIT_DEMO );
}
if ($ea_tagit_asnew) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_ASNEW, _EZAUTOS_TAGIT_ASNEW );
}
if ($ea_tagit_preluv) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_PRELUV, _EZAUTOS_TAGIT_PRELUV );
}
if ($ea_tagit_spare) {
  	$tagit[] = ezauHTML::makeOption( _EZAUTOS_TAGIT_SPARE, _EZAUTOS_TAGIT_SPARE );
}

  	$lists['tag'] = ezauHTML::selectList( $tagit, 'tag', 'class="searchbox" size="1"' , 'value', 'text', $row->tag );

?>

  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_TAG;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['tag']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

<?php }

  # Build market availability select list

	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_AV, _EZAUTOS_AVAIL_AV );
  	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_UC, _EZAUTOS_AVAIL_UC );
  	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_SOLD, _EZAUTOS_AVAIL_SOLD );
  	$sellit[] = ezauHTML::makeOption( _EZAUTOS_AVAIL_OT, _EZAUTOS_AVAIL_OT );
  
  	$lists['sell'] = ezauHTML::selectList( $sellit, 'availability', 'class="widedropbox" size="1"' , 'value', 'text', $row->availability );

?>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_AV;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['sell']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_PRICE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="price" size="15" value="<?php echo $row->price;?>" />  <?php echo _EZAUTOS_GENERIC_REQ;?> - <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>
  </tr>

  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_ONROAD;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="onroad" size="15" value="<?php echo $row->onroad;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?> - <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>
  </tr>


  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_TAX;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['incltax']; ?></td>
  </tr>


<?php

if ($ea_usefrequit) {

  # Build rental/lease frequency select list

  	$freqit[] = ezauHTML::makeOption( 0, _EZAUTOS_RENTAL_NA );
if ($ea_usefrequit1) {
  	$freqit[] = ezauHTML::makeOption( 1, _EZAUTOS_RENTAL_DAILY );
  }
if ( $ea_usefrequit2 ) {
  	$freqit[] = ezauHTML::makeOption( 2, _EZAUTOS_RENTAL_WEEKLY );
  }
if ( $ea_usefrequit3 ) {
  	$freqit[] = ezauHTML::makeOption( 3, _EZAUTOS_RENTAL_FNIGHT );
  }
if ( $ea_usefrequit4 ) {
  	$freqit[] = ezauHTML::makeOption( 4, _EZAUTOS_RENTAL_MONTH );
  }
  
  	$lists['freq'] = ezauHTML::selectList( $freqit, 'freq', 'class="widedropbox" size="1"' , 'value', 'text', $row->freq );

?>

  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_FREQUENCY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['freq']; ?></td>
  </tr>

<?php } ?>

  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SHOWPRICE;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['showprice']; ?></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_PRICETYPE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="price_type" size="44" value="<?php echo $row->price_type;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?> - <?php echo _EZAUTOS_PRICETYPE;?><br /><br /></td>
  </tr>

<?php } ?>

	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_MKTG1;?></div></th>
    </tr>
	</thead>

<?php if ( $ea_sitetype==0 ) { ?>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_SPECS_STOCKNUM;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="stocknum" size="44" value="<?php echo $row->stocknum;?>" /></td>
  </tr>
<?php } ?>

  <tr class="row1">
    <td valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_SDESC;?>:</strong><br /><?php echo _EZAUTOS_GENERIC_REQ;?><br />(<?php echo _EZAUTOS_VLDET_SDESCMAX;?>)</td>
    <td align="left"><br /><textarea class="wideentrybox" rows="5" name="smalldesc" cols="55"><?php echo $row->smalldesc;?></textarea><br /><br /></td>
  </tr>

<?php if ($ea_useflv==1) { ?>
  <tr class="row1">
    <td valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_VTOUR;?>:</strong><br /><br /><?php echo _EZAUTOS_LISTINGS_FLVMODE;?></td>
    <td valign="top"><br /><textarea class="wideentrybox" rows="5" name="video" cols="55"><?php if (!$row->id OR !$row->video ){ ?>http://<?php } else { ?><?php echo  $row->video;?><?php } ?></textarea> <?php echo _EZAUTOS_GENERIC_OPT;?><br /><br /></td>
  </tr>
<?php } ?>

  <tr class="row1">
    <td valign="top" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_MARKETINGMATERIAL;?></strong><br /></td>
        <td valign="top"><br /><?php proppdfUpload($row->pdfinfo,'1',$list['pdfinfo'],'pdfinfo');?>
<?php if ($row->pdfinfo){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezautos&task=deletepdfinfo&id=<?php echo $row->id;?>"><?php echo _EZAUTOS_PROFILE_PDF_DELETE;?></a></strong>
<?php } ?><br />
</td>
  </tr>


<?php if ( $ea_financespecs == 1 ) { ?>

	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_FINANCE;?></div></th>
    </tr>
	</thead>

  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_FINANCE_AVAILABLE;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['finance']; ?></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_DEPOSIT;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="deposit" size="10" value="<?php echo $row->deposit;?>" /></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_REPAYMENTS;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="wideentrybox" type="text" name="repayments" size="10" value="<?php echo $row->repayments;?>" />  <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>
  </tr>

<?php

  # Build the term list

	$loanterm[] = ezauHTML::makeOption( 0, _EZAUTOS_VLDET_TERMTYPENA );
	$loanterm[] = ezauHTML::makeOption( 1, _EZAUTOS_SPECS_DOORS1 );
	$loanterm[] = ezauHTML::makeOption( 2, _EZAUTOS_SPECS_DOORS2 );
	$loanterm[] = ezauHTML::makeOption( 3, _EZAUTOS_SPECS_DOORS3 );
	$loanterm[] = ezauHTML::makeOption( 4, _EZAUTOS_SPECS_DOORS4 );
	$loanterm[] = ezauHTML::makeOption( 5, _EZAUTOS_SPECS_DOORS5 );
	$loanterm[] = ezauHTML::makeOption( 6, _EZAUTOS_SPECS_DOORS6 );
	$loanterm[] = ezauHTML::makeOption( 7, _EZAUTOS_SPECS_DOORS7 );
	$loanterm[] = ezauHTML::makeOption( 8, _EZAUTOS_SPECS_DOORS8 );
	$loanterm[] = ezauHTML::makeOption( 9, _EZAUTOS_SPECS_DOORS9 );
	$loanterm[] = ezauHTML::makeOption( 10, _EZAUTOS_SPECS_DOORS10 );
	$loanterm[] = ezauHTML::makeOption( 11, _EZAUTOS_SPECS_DOORS11 );
	$loanterm[] = ezauHTML::makeOption( 12, _EZAUTOS_SPECS_DOORS12 );

  	$lists['term'] = ezauHTML::selectList( $loanterm, 'term', 'class="dropbox" size="1"' , 'value', 'text', $row->term );


  # Build the term type list

	$loantermtype[] = ezauHTML::makeOption( 0, _EZAUTOS_VLDET_TERMTYPENA );
	$loantermtype[] = ezauHTML::makeOption( 1, _EZAUTOS_VLDET_TERM_MONTHS );
	$loantermtype[] = ezauHTML::makeOption( 2, _EZAUTOS_VLDET_TERM_YEARS );

  	$lists['termtype'] = ezauHTML::selectList( $loantermtype, 'termtype', 'class="dropbox" size="1"' , 'value', 'text', $row->termtype );

?>

  <tr class="row1">
    <td width="20%" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_TERM;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['term'];?> <?php echo $lists['termtype'];?></td>
  </tr>

<?php } ?>


</table>

<?php
$tabs->endTab();

if ( $ea_meta == 1 ) {

$tabs->startTab(_EZAUTOS_TABS_SEO,"metatags-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_TAGS;?></div></th>
    </tr>
	</thead>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_METADESC;?>:</strong></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="40" rows="5" name="metadesc" id="metadesc"><?php echo str_replace('&','&amp;',$row->metadesc); ?></textarea></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_VLDET_METAKEYS;?>:</strong></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="40" rows="5" name="metakey" id="metakey"><?php echo str_replace('&','&amp;',$row->metakey); ?></textarea></td>
  </tr>
</table>

<?php
$tabs->endTab();

}

$tabs->startTab(_EZAUTOS_TABS_ADMIN,"admin-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_DETAILS_TAB6A;?></div></th>
    </tr>
	</thead>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_DEALER_SELLER;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['owner']; ?></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_PUBL;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['published']; ?></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_LISTSTATUS;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['premium']; ?></td>
  </tr>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_LISTPREMIUM;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['featured']; ?><br /><br /></td>
  </tr>
</table>

<?php
$tabs->endTab();
$tabs->startTab(_EZAUTOS_TABS_IMAGES,"images-page");
?>


<?php if ($row->images){ ?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_IMG1;?></div></th>
    </tr>
	</thead>
  <tr class="row1">
    <td width="20%" valign="top"><br /><strong><?php echo _EZAUTOS_TABS_IMAGES;?>:</strong><br /><?php echo _EZAUTOS_SPECIAL_IMAGES_DESCRIPTION;?></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="40" rows="5" name="images" id="images"><?php echo $row->images; ?></textarea></td>
  </tr>
</table>

<?php } else { ?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_VLDET_IMG1;?></div></th>
    </tr>
	</thead>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE1;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image1desc" size="50" value="<?php echo $row->image1desc;?>" />
			<?php imageUpload($row->image1,'1',$list['image1'],'image1');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE2;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image2desc" size="50" value="<?php echo $row->image2desc;?>" />
			<?php imageUpload($row->image2,'1',$list['image2'],'image2');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE3;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image3desc" size="50" value="<?php echo $row->image3desc;?>" />
			<?php imageUpload($row->image3,'1',$list['image3'],'image3');?>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE4;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image4desc" size="50" value="<?php echo $row->image4desc;?>" />
			<?php imageUpload($row->image4,'1',$list['image4'],'image4');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE5;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image5desc" size="50" value="<?php echo $row->image5desc;?>" />
			<?php imageUpload($row->image5,'1',$list['image5'],'image5');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE6;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image6desc" size="50" value="<?php echo $row->image6desc;?>" />
			<?php imageUpload($row->image6,'1',$list['image6'],'image6');?>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE7;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image7desc" size="50" value="<?php echo $row->image7desc;?>" />
			<?php imageUpload($row->image7,'1',$list['image7'],'image7');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE8;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image8desc" size="50" value="<?php echo $row->image8desc;?>" />
			<?php imageUpload($row->image8,'1',$list['image8'],'image8');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE9;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image9desc" size="50" value="<?php echo $row->image9desc;?>" />
			<?php imageUpload($row->image9,'1',$list['image9'],'image9');?>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE10;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image10desc" size="50" value="<?php echo $row->image10desc;?>" />
			<?php imageUpload($row->image10,'1',$list['image10'],'image10');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE11;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image11desc" size="50" value="<?php echo $row->image11desc;?>" />
			<?php imageUpload($row->image11,'1',$list['image11'],'image11');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE12;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image12desc" size="50" value="<?php echo $row->image12desc;?>" />
			<?php imageUpload($row->image12,'1',$list['image12'],'image12');?>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE13;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image13desc" size="50" value="<?php echo $row->image13desc;?>" />
			<?php imageUpload($row->image13,'1',$list['image13'],'image13');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE14;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image14desc" size="50" value="<?php echo $row->image14desc;?>" />
			<?php imageUpload($row->image14,'1',$list['image14'],'image14');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE15;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image15desc" size="50" value="<?php echo $row->image15desc;?>" />
			<?php imageUpload($row->image15,'1',$list['image15'],'image15');?>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE16;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image16desc" size="50" value="<?php echo $row->image16desc;?>" />
			<?php imageUpload($row->image16,'1',$list['image16'],'image16');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE17;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image17desc" size="50" value="<?php echo $row->image17desc;?>" />
			<?php imageUpload($row->image17,'1',$list['image17'],'image17');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE18;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image18desc" size="50" value="<?php echo $row->image18desc;?>" />
			<?php imageUpload($row->image18,'1',$list['image18'],'image18');?>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE19;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image19desc" size="50" value="<?php echo $row->image19desc;?>" />
			<?php imageUpload($row->image19,'1',$list['image19'],'image19');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE20;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image20desc" size="50" value="<?php echo $row->image20desc;?>" />
			<?php imageUpload($row->image20,'1',$list['image20'],'image20');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE21;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image21desc" size="50" value="<?php echo $row->image21desc;?>" />
			<?php imageUpload($row->image21,'1',$list['image21'],'image21');?>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE22;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image22desc" size="50" value="<?php echo $row->image22desc;?>" />
			<?php imageUpload($row->image22,'1',$list['image22'],'image22');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE23;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image23desc" size="50" value="<?php echo $row->image23desc;?>" />
			<?php imageUpload($row->image23,'1',$list['image23'],'image23');?>
			</td></tr></table>
		</td>
		<td width="33%" valign="top">
			<table width="100%" cellpadding="4" cellspacing="1" border="0" style="border-collapse: collapse" bordercolor="#000000"><tr class="row1"><td>
			<strong><u><?php echo _EZAUTOS_VLDET_IMAGE24;?></u></strong> <?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?><br /><input class="inputbox" type="text" name="image24desc" size="50" value="<?php echo $row->image24desc;?>" />
			<?php imageUpload($row->image24,'1',$list['image24'],'image24');?>
			</td></tr></table>
		</td>
	</tr>
</table>

<?php } ?>

<?php
$tabs->endTab();
$tabs->endPane();
?>


</td>

	</tr>

</table>

<br /><br />

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminlist">
	<thead>
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZAUTOS_VLDET_LDESC;?></div></th>
    </tr>
	</thead>
  <tr>
    <td valign="top" width="200"><?php echo _EZAUTOS_VLDET_LDESCMAX;?></td>
    <td align="left"><br />
		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  stripslashes($row->longdesc) , 'longdesc', '100%;', '300', '60', '20' ) ; ?>
    </td>
</table>


	<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<?php

  }




    /**************************************************\
                DISPLAY DETAILS FOR PRINTING
    \**************************************************/


function printDetails( $option, $row, $ez_printheader, $ez_printfooter, $ezlogo ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $ea_bizname, $id, $my, $ea_template, $ea_currencysign, $ea_sitetype;
global $ea_imgwidth, $ea_thumbwidth, $ea_imagedirectory, $ea_viewenq, $ea_viewrecommend, $ea_viewmailing, $ea_profsys, $ea_profaccess;
global $ea_thumbcreation, $ea_mobile, $ea_currencyformat, $ea_currencypos, $ea_structure, $ea_usesms, $gid;
global $ea_useprofile, $ea_shortlist, $mosConfig_absolute_path, $ea_mapwidth, $ea_mapheight, $ea_usemap, $ea_profaccess;


include(EZADMIN_PATH."/config.ezautos.php");


DEFINE("PRINTTEMPLATE_PATH","components/com_ezautos/includes");


if (file_exists(PRINTTEMPLATE_PATH.'/print.php')) {
  include(PRINTTEMPLATE_PATH.'/print.php');
} else {
echo _EZAUTOS_TEMPLATE_ERROR;
}


}




/**************************************************\
            SHOW THE LIST OF VEHICLE TYPES
\**************************************************/


function showCatgs( &$rows, $pageNav, $option) {
global $database, $my;

		mosCommonHTML::loadOverlib();

?>


<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_CATEGORY_PAGETITLE;?></div></td>
		</tr>
		<tr>
			<td width="100%"> </td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20">#</th>
			<th width="20"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th class="title"><?php echo _EZAUTOS_CATEGORY_CATNAME;?></th>
			<th nowrap width="100"><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
			<th nowrap width="150"><?php echo _EZAUTOS_CATEGORY_ACCLEVEL;?></th>
			<th colspan="2" nowrap="nowrap" width="100"><div align="center"><?php echo _EZAUTOS_GENERIC_REORDER;?></div></th>
		</tr>
		</thead>

		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];

				$task	=	$row->published ? 'unpublishcatg' : 'publishcatg';
				$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
				$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;

			$row->id 	= $row->cid;
			$link 		= 'index2.php?option=com_ezautos&task=editcatgA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

        ?>

		<tr class="row<?php echo $k; ?>">
				<td width="20" align="center">
				<?php echo $pageNav->rowNumber( $i ); ?>
				</td>
				<td width="20">
				<?php echo $checked; ?>
				</td>
				<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->name; ?>
					</a>
					<?php
				}
				?>
				</td>

			<td width="100" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td width="150" align="center" nowrap><?php echo $row->groupname;?></td>
			<td width="50" align="right">
				<?php	if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
				<div align="right"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderupcatg')"><img src="images/uparrow.png" width="12" height="12" border="0" alt="<?php echo _EZAUTOS_GENERIC_UP; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			<td width="50">

				<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdowncatg')"><img src="images/downarrow.png" width="12" height="12" border="0" alt="<?php echo _EZAUTOS_GENERIC_DOWN; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
        		</div>
			</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="showcatg" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT VEHICLE TYPE ENTRIES
\**************************************************/


function editCatg( &$row, $option, $glist, $orderlist, &$lists  ) {
global $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

	function changeDisplayImage() {
		if (document.adminForm.image.value !='') {
			document.adminForm.imagelib.src='../images/stories/' + document.adminForm.image.value;
		} else {
			document.adminForm.imagelib.src='images/blank.png';
		}
	}

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelcatg') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.name.value == ""){
			alert( "<?php echo _EZAUTOS_CATEGORY_ERROR1;?>" );
      } else {

				<?php getEditorContents( 'editor1', 'description' ) ; ?>

        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
	    <tr>
	      <td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->cid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_CATEGORY_MAIN;?></div></td>
	    </tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_CATEGORY_DEFTITLE;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="name" size="25" value="<?php echo $row->name;?>"></td>
		</tr>
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_CATEGORY_TAXCLASS;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="taxclass" size="5" value="<?php echo $row->taxclass;?>"> <?php echo _EZAUTOS_CATEGORY_TAXCLASS_DESC;?></td>
		</tr>

		<tr class="row0">
			<td valign="top"><?php echo _EZAUTOS_CATEGORY_DEFCONTENT;?>:</td>
			<td align="left">
		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  stripslashes($row->description) , 'description', '100%;', '300', '60', '20' ) ; ?>
			</td>
		</tr>
		<tr class="row1">
			<td valign="top" ><?php echo _EZAUTOS_CATEGORY_DEFACCESS;?></td>
			<td nowrap ><?php echo $glist?></td>
		</tr>
		<tr class="row0">
			<td valign="top" ><?php echo _EZAUTOS_GENERIC_DEFORDER;?></td>
			<td nowrap ><?php echo $orderlist?></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZAUTOS_CATEGORY_IMAGESEL;?>:</td>
			<td align="left"><?php echo $lists['image']; ?></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZAUTOS_CATEGORY_IMAGE;?>:</td>
			<td valign="top">
			<?php
			if (eregi("swf", $row->image)) {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			} elseif (eregi("gif|jpg|png", $row->image)) {
				?>
				<img src="../images/stories/<?php echo $row->image; ?>" name="imagelib" alt="<?php echo _EZAUTOS_CATEGORY_IMAGE; ?>" />
				<?php
			} else {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			}
			?>
			</td>
		</tr>

	</table>

	<input type="hidden" name="cid" value="<?php echo $row->cid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php
}

/**************************************************\
            SHOW THE LIST OF VEHICLE MAKES
\**************************************************/
function showMake( $option, &$rows, &$pageNav ) {
global $database, $my;
		mosCommonHTML::loadOverlib();
?>
<form action="index2.php" method="post" name="adminForm">
    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_MAKE_TITLE;?></div></td>
		</tr>
	</table>
    <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width='150' align="left"><?php echo _EZAUTOS_MAKE_MAKE;?></th>
			<th align="left"><?php echo _EZAUTOS_GENERIC_LOGOS;?></th>
			<th width='100'><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
		</tr>
		</thead>
		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$task	=	$row->published ? 'unpublishmake' : 'publishmake';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;
			$row->id 	= $row->maid;
			$link 		= 'index2.php?option=com_ezautos&task=editmakeA&hidemainmenu=1&id='. $row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
			<td width='150' align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->range;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->make; ?>
					</a>
					<?php
				}
				?>
			</td>
			<td align="left"><img src="../images/stories/<?php echo $row->make_image;?>" width="50" alt="" /></td>
			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="make" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
<?php
}
/**************************************************\
            ADD/EDIT VEHICLE MAKE ENTRIES
\**************************************************/
function editMake( &$row, $option, $lists ) {
global $my;
mosMakeHtmlSafe( $row );
?>
<script language="javascript" type="text/javascript">

	function changeDisplayImage() {
		if (document.adminForm.make_image.value !='') {
			document.adminForm.imagelib.src='../images/stories/' + document.adminForm.make_image.value;
		} else {
			document.adminForm.imagelib.src='images/blank.png';
		}
	}
    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelmake') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.make.value == ""){
        alert( "<?php echo _EZAUTOS_MAKE_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }
</script>
<form action="index2.php" method="POST" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->maid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_MAKE_STITLE;?></div></td>
		</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_MAKE_NAME;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="make" size="30" value="<?php echo $row->make;?>" /></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZAUTOS_SELECT_LOGO;?>:</td>
			<td align="left"><?php echo $lists['make_image']; ?></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZAUTOS_PREVIEW_LOGO;?>:</td>
			<td valign="top">
			<?php
			if (eregi("swf", $row->make_image)) {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			} elseif (eregi("gif|jpg|png", $row->make_image)) {
				?>
				<img src="../images/stories/<?php echo $row->make_image; ?>" name="imagelib" alt="" />
				<?php
			} else {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			}
			?>
			</td>
		</tr>
	</table>

	<input type="hidden" name="maid" value="<?php echo $row->maid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
</form>









<?php
}

/**************************************************\
            SHOW THE LIST OF COUNTRIES
\**************************************************/
function showCountry( $option, &$rows, &$pageNav ) {
global $database, $my;
		mosCommonHTML::loadOverlib();
?>
<form action="index2.php" method="post" name="adminForm">
    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_COUNTRY_TITLE;?></div></td>
		</tr>
	</table>
    <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width='150' align="left"><?php echo _EZAUTOS_MAKE_MAKE;?></th>
			<th align="left"><?php echo _EZAUTOS_GENERIC_LOGOS;?></th>
			<th width='100'><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
		</tr>
		</thead>
		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$task	=	$row->published ? 'unpublishcountry' : 'publishcountry';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;
			$row->id 	= $row->coid;
			$link 		= 'index2.php?option=com_ezautos&task=editcountryA&hidemainmenu=1&id='. $row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
			<td width='150' align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->range;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->country; ?>
					</a>
					<?php
				}
				?>
			</td>
			<td align="left"><img src="../images/stories/<?php echo $row->country_image;?>" width="50" alt="" /></td>
			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="country" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
<?php
}
/**************************************************\
            ADD/EDIT VEHICLE COUNTRY ENTRIES
\**************************************************/
function editCountry( &$row, $option, $lists ) {
global $my;
mosMakeHtmlSafe( $row );
?>
<script language="javascript" type="text/javascript">

	function changeDisplayImage() {
		if (document.adminForm.country_image.value !='') {
			document.adminForm.imagelib.src='../images/stories/' + document.adminForm.country_image.value;
		} else {
			document.adminForm.imagelib.src='images/blank.png';
		}
	}
    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelcountry') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.country.value == ""){
        alert( "<?php echo _EZAUTOS_COUNTRY_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }
</script>
<form action="index2.php" method="POST" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->maid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_COUNTRY_STITLE;?></div></td>
		</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_COUNTRY_NAME;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="country" size="30" value="<?php echo $row->country;?>" /></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZAUTOS_SELECT_LOGO;?>:</td>
			<td align="left"><?php echo $lists['country_image']; ?></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZAUTOS_PREVIEW_LOGO;?>:</td>
			<td valign="top">
			<?php
			if (eregi("swf", $row->country_image)) {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			} elseif (eregi("gif|jpg|png", $row->country_image)) {
				?>
				<img src="../images/stories/<?php echo $row->country_image; ?>" name="imagelib" alt="" />
				<?php
			} else {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			}
			?>
			</td>
		</tr>
	</table>

	<input type="hidden" name="coid" value="<?php echo $row->coid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
</form>







<?php 
}
/**************************************************\
            SHOW THE LIST OF VEHICLE MODELS
\**************************************************/
function showModel( $option, &$rows, &$pageNav, $lists ) {
global $database;
		mosCommonHTML::loadOverlib();
    ?>
<form action="index2.php" method="post" name="adminForm">
  <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_MODEL_TITLE;?></div></td>
			<td nowrap="nowrap"><?php echo _EZAUTOS_LISTINGS_FILTER;?></td>
			<td width="right"><?php echo $lists['makelist'];?></td>
			<td nowrap="nowrap" width="70" align="right"><?php echo _EZAUTOS_ORDERBY;?>:- </td>
			<td align="right"><?php echo $lists['order'];?></td>
		</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width='100' align="left"><?php echo _EZAUTOS_MAKE_MAKE;?></th>
			<th align="left"><?php echo _EZAUTOS_MODEL_MODEL;?></th>
			<th width='100'><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
		</tr>
		</thead>
		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$task	=	$row->published ? 'unpublishmodel' : 'publishmodel';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;
			$row->id 	= $row->moid;
			$link 		= 'index2.php?option=com_ezautos&task=editmodelA&hidemainmenu=1&id='. $row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
            <td width="100" align="left">(<?php echo $row->makename; ?>)</td>
			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->range;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->model; ?>
					</a>
					<?php
				}
				?>
			</td>
			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>	
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="model" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
<?php
}
/**************************************************\
            ADD/EDIT VEHICLE MODEL ENTRIES
\**************************************************/
function editModel( &$row, $option, $lists ) {
global $my;
mosMakeHtmlSafe( $row );
?>
<script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelmodel') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.name.value == ""){
        alert( "<?php echo _EZAUTOS_MODEL_ERROR1;?>" );
      } else if (form.makeid.value == "0"){
        alert( "<?php echo _EZAUTOS_MAKE_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }
</script>
<form action="index2.php" method="POST" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->moid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_MODEL_STITLE;?></div></td>
		</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
        <tr class="row1">
            <td width="200"><?php echo _EZAUTOS_DDSL_MAKE;?>:</td>
            <td align="left"><?php echo $lists['makeid']; ?></td>
        </tr>
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_MODEL_NAME;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="model" size="30" value="<?php echo $row->model;?>" /></td>
		</tr>

	</table>
	<input type="hidden" name="moid" value="<?php echo $row->moid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
</form>







<?php 
}
// Hrvoje
/**************************************************\
            SHOW THE LIST OF CITIES
\**************************************************/
function showCity( $option, &$rows, &$pageNav, $lists ) {
global $database;
		mosCommonHTML::loadOverlib();
    ?>
<form action="index2.php" method="post" name="adminForm">
  <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_CITY_TITLE;?></div></td>
			<td nowrap="nowrap"><?php echo _EZAUTOS_LISTINGS_FILTER;?></td>
			<td width="right"><?php echo $lists['countrylist'];?></td>
			<td nowrap="nowrap" width="70" align="right"><?php echo _EZAUTOS_ORDERBY;?>:- </td>
			<td align="right"><?php echo $lists['order'];?></td>
		</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width='100' align="left"><?php echo _EZAUTOS_COUNTRY_NAME;?></th>
			<th align="left"><?php echo _EZAUTOS_CITY_NAME;?></th>
			<th width='100'><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
		</tr>
		</thead>
		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			$task	=	$row->published ? 'unpublishcity' : 'publishcity';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;
			$row->id 	= $row->ciid;
			$link 		= 'index2.php?option=com_ezautos&task=editcityA&hidemainmenu=1&id='. $row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
            <td width="100" align="left">(<?php echo $row->countryname; ?>)</td>
			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->range;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->city; ?>
					</a>
					<?php
				}
				?>
			</td>
			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>	
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="city" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
<?php
}
// Hrvoje
/**************************************************\
            ADD/EDIT CITY ENTRIES
\**************************************************/
function editCity( &$row, $option, $lists ) {
global $my;
mosMakeHtmlSafe( $row );
?>
<script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelcity') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.name.value == ""){
        alert( "<?php echo _EZAUTOS_CITY_ERROR1;?>" );
      } else if (form.countryid.value == "0"){
        alert( "<?php echo _EZAUTOS_COUNTRY_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }
</script>
<form action="index2.php" method="POST" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->ciid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_MODEL_STITLE;?></div></td>
		</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
        <tr class="row1">
            <td width="200"><?php echo _EZAUTOS_DDSL_COUNTRY;?>:</td>
            <td align="left"><?php echo $lists['countryid']; ?></td>
        </tr>
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_CITY_NAME;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="city" size="30" value="<?php echo $row->city;?>" /></td>
		</tr>

	</table>
	<input type="hidden" name="ciid" value="<?php echo $row->ciid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
</form>










<?php 
}


/**************************************************\
          SHOW THE LIST OF ENGINE SIZES
\**************************************************/


function showEnginesize( $option, &$rows, &$pageNav ) {
global $database;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_ENGINE_TITLE;?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left"><?php echo _EZAUTOS_ENGINE_ENGINE;?></th>
			<th width='100'><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
			<th colspan="2" nowrap="nowrap" width='100'><div align="center"><?php echo _EZAUTOS_GENERIC_REORDER;?></div></th>
		</tr>
		</thead>
			<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishenginesize' : 'publishenginesize';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;

			$row->id 	= $row->esid;
			$link 		= 'index2.php?option=com_ezautos&task=editenginesizeA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->engine;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->engine; ?>
					</a>
					<?php
				}
				?>
			</td>
			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td width='50'>

				<?php if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderupenginesize')"><img src="images/uparrow.png" width="12" height="12" border="0" alt="<?php echo _EZAUTOS_GENERIC_UP; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
		<td width='50'>
			<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
			<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdownenginesize')"><img src="images/downarrow.png" width="12" height="12" border="0" alt="<?php echo _EZAUTOS_GENERIC_DOWN; ?>" /></a>
			<?php } else { echo "&nbsp;"; } ?>
			</div>
		</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="enginesize" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT ENGINE SIZE ENTRIES
\**************************************************/


function editEnginesize( &$row, $option, $orderlist ) {
global $database;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelenginesize') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.name.value == ""){
        alert( "<?php echo _EZAUTOS_ENGINE_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }
</script>

<form action="index2.php" method="POST" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->esid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_ENGINE_STITLE;?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_ENGINE_NAME;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="engine" size="30" value="<?php echo $row->engine;?>" /></td>
		</tr>
		<tr class="row1">
			<td valign="top" ><?php echo _EZAUTOS_GENERIC_DEFORDER;?></td>
			<td nowrap ><?php echo $orderlist?></td>
		</tr>
	</table>

	<input type="hidden" name="esid" value="<?php echo $row->esid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}


/**************************************************\
            SHOW THE PRICE RANGE LIST
\**************************************************/


function showPrice( $option, &$rows, &$pageNav ) {
global $database;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_PRANGE_TITLE;?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left" width="150"><?php echo _EZAUTOS_PRANGE_PRANGE;?></th>
			<th align="left" width="150"><?php echo _EZAUTOS_PRANGE_DISPLAY;?></th>
			<th> </th>
			<th width='100'><?php echo _EZAUTOS_GENERIC_PUBSTATUS;?></th>
			<th colspan="2" nowrap="nowrap" width='100'><div align="center"><?php echo _EZAUTOS_GENERIC_REORDER;?></div></th>
		</tr>
		</thead>
		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishprice' : 'publishprice';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;

			$row->id 	= $row->pid;
			$link 		= 'index2.php?option=com_ezautos&task=editpriceA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left" width="150">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->range;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDITDETAILS;?>">
					<?php echo $row->range; ?>
					</a>
					<?php
				}
				?>
			</td>
				<td align="left"width="150"><?php echo $row->display; ?></td>
				<td align="left"> </td>

			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td width='50'>
				<?php if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderupprice')"><img src="images/uparrow.png" width="12" height="12" border="0" alt="<?php echo _EZAUTOS_GENERIC_UP; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>

			<td width='50'>
				<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdownprice')"><img src="images/downarrow.png" width="12" height="12" border="0" alt="<?php echo _EZAUTOS_GENERIC_DOWN; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="price" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT PRICE RANGE ITEMS
\**************************************************/


function editPrice( &$row, $option, $orderlist ) {
global $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelprice') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.range.value == ""){
        alert( "<?php echo _EZAUTOS_PRANGE_ERROR1;?>" );
      } else if (form.display.value == ""){
        alert( "<?php echo _EZAUTOS_PRANGE_ERROR2;?>" );
      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->pid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_PRANGE_STITLE;?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_PRANGE_NAME;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="range" size="30" value="<?php echo $row->range;?>" /> <strong><?php echo _EZAUTOS_VLDET_PRICEDESC;?></strong></td>
		</tr>

		<tr class="row0">
			<td width="200"><?php echo _EZAUTOS_PRANGE_DISPLAY;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="display" size="30" value="<?php echo $row->display;?>" /></td>
		</tr>

		<tr class="row1">
			<td valign="top" ><?php echo _EZAUTOS_GENERIC_DEFORDER;?></td>
			<td nowrap ><?php echo $orderlist?></td>
		</tr>
	</table>

	<input type="hidden" name="pid" value="<?php echo $row->pid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<?php 

}





/**************************************************\
            SHOW THE FEATURES LIST
\**************************************************/


function showFeatures( $option, &$rows, &$pageNav ) {
global $database, $mosConfig_live_site;

		mosCommonHTML::loadOverlib();

$link3 = $mosConfig_live_site. '/administrator/index2.php?option=com_ezautos&task=savefeature';

    ?>

		<script type="text/javascript">
		<!--
		function addit2() {
			var form = document.dForm;
			// do field validation
      if (form.feature.value == ""){
        alert( "<?php echo _EZAUTOS_FEATURE_ERROR1;?>" );
      } else {

				document.dForm.action = '<?php echo $link3; ?>';
				document.dForm.submit();
			}
		}
		//-->

		</script>

		<form class="form" name="dForm" action="<?php echo $link3;?>" method="post">
		<input type="hidden" name="option" value="com_ezautos" />
		<input type="hidden" name="task" value="savefeature" />
		<input type="hidden" name="id" value="" />

<table width="100%">
	<tr>
		<td valign="top" align="right"><strong><?php echo _EZAUTOS_FEATURES_ADD;?>:-</strong> <input class="inputbox" type="text" name="feature" size="30" id="feature" /> 
		<input type="button" name="<?php echo _EZAUTOS_SAVE;?>" value="<?php echo _EZAUTOS_SAVE;?>" class="button" onclick="addit2()" /></td>
	</tr>
</table>

</form>


<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_FEATURES_MANAGEFEATURES;?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20">#</th>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left" width="150"><?php echo _EZAUTOS_FEATURES_NAME;?></th>
			<th> </th>
			<th colspan="2" nowrap="nowrap" width="100"><div align="center"><?php echo _EZAUTOS_FEATURES_ORDERING;?></div></th>

		</tr>
		</thead>
		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$row->id 	= $row->id;
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20" align="center">
				<?php echo $pageNav->rowNumber( $i ); ?>
				</td>

				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left" width="150">
					<?php echo $row->feature; ?>
			</td>
				<td align="left"> </td>

			<td width="50" align="right">
				<?php	if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
				<div align="right"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderupfeature')"><img src="images/uparrow.png" width="12" height="12" border="0" alt="" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			<td width="50">

				<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdownfeature')"><img src="images/downarrow.png" width="12" height="12" border="0" alt="" /></a>
				<?php } else { echo "&nbsp;"; } ?>
        		</div>
			</td>

			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="features" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            SHOW THE LEADS LIST
\**************************************************/


function showLeads( $option, &$rows, &$lists, &$pageNav ) {
global $my;

include(EZADMIN_PATH."/config.ezautos.php");

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_LEADS_TITLE;?></div></td>
			<td nowrap="nowrap"><?php echo _EZAUTOS_LISTINGS_FILTER;?></td>
			<td width="right"><?php echo $lists['cid'];?></td>
<?php if ($ea_makefilt) { ?>
			<td width="right"><?php echo $lists['make'];?></td>
<?php }
if ($ea_modfilt) { ?>
			<td width="right"><?php echo $lists['model'];?></td>
<?php } ?>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width="200" align="left"><?php echo _EZAUTOS_LEADS_LNAME;?></th>
			<th width="250" align="left"><?php echo _EZAUTOS_LEADS_LEMAIL;?></th>
			<th width="150" align="left"><?php echo _EZAUTOS_SELLER_SMS9;?></th>
			<th align="left"><?php echo _EZAUTOS_LEADS_CAT;?></th>
			<th align="left"><?php echo _EZAUTOS_LEADS_MAK;?></th>
			<th align="left"><?php echo _EZAUTOS_LEADS_MOD;?></th>
			<th align="left"><?php echo _EZAUTOS_LM_BUDGET;?></th>
			<th align="left"><?php echo _EZAUTOS_LEADS_AR;?></th>


		</tr>
		</thead>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];


			$row->id 	= $row->lid;
			$link 		= 'index2.php?option=com_ezautos&task=editleadsA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>

		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->lead_name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="">
					<?php echo $row->lead_name; ?>
					</a>
					<?php
				}
				?>
			</td>

			<td align="left"><a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a></td>
			<td align="left"><a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_SELLER_SMS26; ?>"><?php echo $row->mobile; ?></a></td>
			<td align="left"><?php echo $row->category; ?></td>
			<td align="left"><?php echo $row->makename; ?></td>
			<td align="left"><?php echo $row->modelname; ?></td>
			<td align="left"><?php echo $row->maxprice; ?></td>
			<td align="left"><?php echo strftime("%c",$row->date); ?></td>

			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="leads" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}



/**************************************************\
            ADD/EDIT VEHICLE LEADS ITEMS
\**************************************************/


function editLeads( &$row, &$lists, $option ) {
global $database, $my, $mosConfig_live_site, $ea_mobile, $ea_username, $ea_password, $ea_api;

include(EZADMIN_PATH."/config.ezautos.php");
mosMakeHtmlSafe( $row );

$link1 = $mosConfig_live_site. '/administrator/index2.php?option=com_ezautos&task=sendleadsms';

?>

<link rel="stylesheet" href="components/com_ezautos/includes/cpanel.css" type="text/css" />

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelleads') {
        submitform( pressbutton );
        return;
      }
      // do field validation

      if (form.lead_name.value == ""){
        alert( "<?php echo _EZAUTOS_LEADS_ERROR1;?>" );

      } else if (form.email.value == ""){
        alert( "<?php echo _EZAUTOS_LEADS_ERROR2;?>" );

      } else if (form.cid.value == "0"){
        alert( "<?php echo _EZAUTOS_LEADS_ERROR3;?>" );

      } else if (form.make.value == "0"){
        alert( "<?php echo _EZAUTOS_LEADS_ERROR4;?>" );

      } else if (form.maxprice.value == ""){
        alert( "<?php echo _EZAUTOS_LEADS_ERROR6;?>" );


      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo $row->lid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_LEADS_TITLE2;?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th colspan="2"><strong><?php echo _EZAUTOS_LEADS_LCONTACT;?>:</strong></th>
		</tr>
		</thead>
  <tr class="row1">
			<td align="left" width="150"><strong><?php echo _EZAUTOS_LEADS_LNAME;?>:</strong></td>
			<td align="left"><input class="wideentrybox" type="text" name="lead_name" size="30" value="<?php echo $row->lead_name;?>" />  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>

  <tr class="row1">
			<td align="left"><strong><?php echo _EZAUTOS_LEADS_HPHONE;?>:</strong></td>
			<td align="left"><input class="wideentrybox" type="text" name="hphone" size="30" value="<?php echo $row->hphone;?>" /></td>
		</tr>

  <tr class="row1">
			<td align="left"><strong><?php echo _EZAUTOS_LEADS_WPHONE;?>:</strong></td>
			<td align="left"><input class="wideentrybox" type="text" name="wphone" size="30" value="<?php echo $row->wphone;?>" /></td>
		</tr>

  <tr class="row1">
			<td align="left"><strong><?php echo _EZAUTOS_LEADS_MOBILE;?>:</strong></td>
			<td align="left"><input class="wideentrybox" type="text" name="mobile" size="30" value="<?php echo $row->mobile;?>" /></td>
		</tr>

  <tr class="row1">
			<td align="left"><strong><?php echo _EZAUTOS_LEADS_FAX;?>:</strong></td>
			<td align="left"><input class="wideentrybox" type="text" name="fax" size="30" value="<?php echo $row->fax;?>" /></td>
		</tr>

  <tr class="row1">
			<td align="left"><strong><?php echo _EZAUTOS_LEADS_LEMAIL;?>:</strong></td>
			<td align="left"><input class="wideentrybox" type="text" name="email" size="30" value="<?php echo $row->email;?>" />  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>

		<thead>
  <tr>
    <th colspan="2"><strong><?php echo _EZAUTOS_LEADS_DETAILS;?>:</strong></th>
  </tr>
		</thead>


  <tr class="row1">
    <td valign="top" align="left"><br /><strong><?php echo _EZAUTOS_LEADS_CAT;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['cid']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>


  <tr class="row1">
    <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_LEADS_MAK;?>:</strong></td>
    <td valign="top"><br /> <?php echo $lists['make']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

  <tr class="row1">
    <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_LEADS_MOD;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['model']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
  
  
  
  
  
    <tr class="row1">
    <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_COUNTRY_NAME;?>:</strong></td>
    <td valign="top"><br /> <?php echo $lists['country']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

  <tr class="row1">
    <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CITY_NAME;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['city']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
  
  
  
  


  <tr class="row1">
	<td width="150" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_LEADS_BUDGET;?>:</strong></td>
	<td valign="top"><br /><?php echo $lists['maxprice']; ?>   <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

<?php 
//this field is no longer used - and left in place to allow site manager the opportunity to transfer details 
//over to the new maxprice field. It will cease to show once a maxprice has been selected and saved.

if ( $row->budget && !$row->maxprice ) { ?>
  <tr class="row1">
    <td valign="top" align="left"><br /><?php echo _EZAUTOS_LM_BUDGET;?>:</td>
	<td align="left"><br /><input class="wideentrybox" type="text" name="budget" size="30" value="<?php echo $row->budget;?>" />  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>
<?php } ?>

  <tr class="row1">
    <td valign="top" align="left"><br /><strong><?php echo _EZAUTOS_LMIN_YEAR;?>:</strong></td>
	<td valign="top" align="left"><br /><?php echo $lists['minyear'];?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

  <tr class="row1">
    <td valign="top" align="left"><br /><strong><?php echo _EZAUTOS_LMAX_YEAR;?>:</strong></td>
	<td valign="top" align="left"><br /><?php echo $lists['maxyear'];?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

  <tr class="row1">
    <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_LEADS_SOURCE;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['source']; ?>  <?php echo _EZAUTOS_GENERIC_REQ;?></td>
  </tr>

  <tr class="row1">
    <td valign="top" align="left"><br /><strong><?php echo _EZAUTOS_LEADS_COMMENTS;?>:</strong><br /></td>
    <td align="left"><br /><textarea rows="5" name="comments" cols="70"><?php echo $row->comments;?></textarea><br /><br /></td>
  </tr>

  <tr class="row1">
    <td width="150" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_LEADS_PUBLISHONWANTED;?>:</strong></td>
    <td align="left"><br /><?php echo $lists['listwanted']; ?></td>
  </tr>

  <tr class="row1">
    <td width="150" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_LEADS_HTML;?>:</strong></td>
    <td align="left"><br /><?php echo $lists['html']; ?></td>
  </tr>

  <tr class="row1">
    <td width="150" align="left" valign="top"><br /><strong><?php echo _EZAUTOS_DETAILS_PUBL;?>:</strong></td>
    <td align="left"><br /><?php echo $lists['published']; ?><br /><br /><br /></td>
  </tr>


	</table>

	<input type="hidden" name="lid" value="<?php echo $row->lid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
	<thead>
	<tr>
		<th><?php echo _EZAUTOS_SELLER_SMS24;?></th>
	</tr>
	</thead>
</table>
<br />
<br />

<div align="center">
	<table border="0" width="470" cellspacing="0" cellpadding="0">
		<tr>
			<td width="60%" valign="top">

	<table border="1" width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<td width="100%" valign="top">

		<script type="text/javascript">
		<!--
		function validatesms() {
			var form = document.form1;
			// do field validation
			if (form.text.value == "") {
				alert( "<?php echo _EZAUTOS_SELLER_SMS18;?>" );

			} else {
				document.form1.action = '<?php echo $link1; ?>';
				document.form1.submit();
			}
		}
		//-->
		</script>

		<form class="form" name="form1" action="<?php echo $link1;?>" method="get">
			<input type="hidden" name="option" value="com_ezautos" />
			<input type="hidden" name="task" value="sendleadsms" />
			<input type="hidden" name="id" value="<?php echo $row->lid;?>" />
			<input type="hidden" name="to" value="<?php echo $row->mobile;?>" />
			<input type="hidden" name="user" value="<?php echo stripslashes( $ea_username );?>" />
			<input type="hidden" name="password" value="<?php echo stripslashes( $ea_password );?>" />
			<input type="hidden" name="api" value="<?php echo stripslashes( $ea_api );?>" />
			<input type="hidden" name="from" value="<?php echo stripslashes( $ea_mobile );?>" />


			<table border="0" width="300" cellspacing="10">
				<tr>
					<td valign="top">
					<strong><?php echo _EZAUTOS_SELLER_SMS10;?>:</strong><br /><textarea name="text" id="text" class="inputbox" rows="5" cols="16" maxlength="150"></textarea><br />(<?php echo _EZAUTOS_SELLER_SMS21;?>)</td>
					<td valign="top"><br /><?php echo _EZAUTOS_SELLER_SMS27;?></td>
				</tr>
				<tr>
					<td valign="bottom" colspan="2"><input type="button" name="<?php echo _EZAUTOS_SEND;?>" value="<?php echo _EZAUTOS_SEND;?>" class="button" onclick="validatesms()" /> <input class="button" type="reset" name="<?php echo _EZAUTOS_RESET;?>" value="<?php echo _EZAUTOS_RESET;?>"></td>
				</tr>
			</table>

</form>

</td>
				</tr>
			</table>

			</td>
			<td width="40%" valign="top">

	<table border="0" width="100%" cellspacing="5" cellpadding="5">
		<tr>
			<td width="100%" valign="top">

<strong><?php echo _EZAUTOS_SELLER_SMS23;?></strong><br />
<?php echo _EZAUTOS_SELLER_SMS3;?> <a href="http://affiliates.clickatell.com/central/campaigns/redir.php?cid=2662">Clickatell</a> <?php echo _EZAUTOS_SELLER_SMS4;?>
<br />
</td>

</td>
				</tr>
			</table>

		</tr>
	</table>
</div>

<br />


<?php 

}





/**************************************************\
            SHOW THE LIST OF PROFILES
\**************************************************/


function showProf( $option, &$rows, &$pageNav ) {
global $my;

include(EZADMIN_PATH."/config.ezautos.php");


		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_PROFILE_MANAGE;?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width="20" align='left'>ID#</th>
<?php if ($ea_piclist) { ?>
			<th class="title" width="100"><?php echo _EZAUTOS_PROFILE_IMAGE; ?></th>
<?php } ?>
			<th class="title" width="150"><?php echo _EZAUTOS_PROFILE_NAME; ?></th>
<?php if ($ea_usecount) { ?>
			<th class="title" width="150"><?php echo _EZAUTOS_PROFILE_NUMPROPS; ?></th>
<?php } ?>
			<th class="title" width="150"><?php echo _EZAUTOS_PROFILE_COMPANY; ?></th>
			<th class="title"><?php echo _EZAUTOS_LISTING4; ?></th>
			<th class="title"><?php echo _EZAUTOS_PROFILE_MAIL_LISTINGSREPORT; ?></th>
			<th width="100"><?php echo _EZAUTOS_GENERIC_PUBSTATUS; ?></th>
			<th align='center' width='100'><?php echo _EZAUTOS_VLDET_DELETE;?></th>
				</tr>
		</thead>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishprofile' : 'publishprofile';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZAUTOS_GENERIC_PUBLISHED : _EZAUTOS_GENERIC_UNPUBLISHED;

			$row->id 	= $row->prid;
			$link 		= 'index2.php?option=com_ezautos&task=editprofA&hidemainmenu=1&id='. $row->id;
			$link2 		= 'index2.php?option=com_ezautos&task=adminpostlistings&id='. $row->mid;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
				<td width="20">
				<?php echo $row->mid; ?>
				</td>
<?php if ($ea_piclist) { ?>
			<td width="100" align="left"><?php if ($row->dealer_image) { ?><img src="../components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" border="0" width="50" alt="" /><?php }else{ ?><img src="../components/com_ezautos/profiles/nothumb.jpg" border="0" width="50" alt="" /><?php } ?></td>
<?php } ?>


			<td width="150">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->dealer_name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_PROFILE_EDIT; ?>">
					<?php echo $row->dealer_name; ?>
					</a>
					<?php
				}
				?>
			</td>


<?php if ($ea_usecount) { ?>
			<td width="150" align="left" nowrap><?php echo $row->nproperties; ?></td>
<?php } ?>
			<td width="150" align="left" nowrap><?php echo $row->dealer_company; ?></td>

			<td align="left" nowrap><a href="mailto:<?php echo $row->dealer_email; ?>"><?php echo $row->dealer_email; ?></a></td>

			<td width="90" align="center" nowrap><a href="<?php echo $link2; ?>" title="<?php echo _EZAUTOS_PROFILE_MAILLISTINGS; ?>"><strong><?php echo _EZAUTOS_PROFILE_MAILLISTINGS; ?></strong></a></td>

			<td width="100" align="center" nowrap><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td align='center' width="100"><a href = "javascript:if (confirm('<?php echo _EZAUTOS_VLDET_DELETE;?>')){ location.href='index2.php?option=com_ezautos&amp;task=removeprof&amp;id=<?php echo $row->prid?>';}" title="<?php echo _EZAUTOS_VLDET_DELETE;?>"><strong><?php echo _EZAUTOS_VLDET_DELETE;?></strong></a></td>
				</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="profiles" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT PROFILE ENTRIES
\**************************************************/


function editProf( &$row, $option, &$lists, $list ) {
global $database, $my, $ea_logowidth, $ea_logoheight, $ea_topperwidth, $ea_topperheight;

include(EZADMIN_PATH."/config.ezautos.php");

$tabs = new mosTabs(0);
mosCommonHTML::loadOverlib();
mosMakeHtmlSafe( $row );

?>

<link rel="stylesheet" href="components/com_ezautos/includes/cpanel.css" type="text/css" />

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelprof') {
        submitform( pressbutton );
        return;
      }
      // do field validation
			if (form.mid.value == "0") {
				alert( "<?php echo _EZAUTOS_PROFILE_ERROR_MID;?>" );

			} else if (form.dealer_name.value == "") {
				alert( "<?php echo _EZAUTOS_PROFILE_NAME;?>" );

			} else if (form.dealer_type.value == "") {
				alert( "<?php echo _EZAUTOS_PROFILE_TYPE_ERROR;?>" );

			} else if (form.dealer_email.value == ""){
				alert( "<?php echo _EZAUTOS_PROFILE_EMAIL;?>" );

			} else if (form.dealer_locality.value == ""){
				alert( "<?php echo _EZAUTOS_LOCALITY_ERROR;?>" );

			} else {

				<?php getEditorContents( 'editor1', 'dealer_bio' ) ; ?>
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm" enctype="multipart/form-data">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
	    <tr>
	      <td width="100%" align="left"><span class="sectionname"><div class="header icon-48-generic"><?php echo $row->prid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_PROFILE_DETAILS;?></div></span></td>
	    </tr>
	</table>



<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td>

<?php
$tabs->startPane("editPane");
$tabs->startTab(_EZAUTOS_TABS_ADDRESS,"summary-page");
?>


	<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_LINK; ?>:</td>
			<td align="left"><?php echo $lists['mid']; ?></td>
		</tr>

<?php

  # Define agent/seller type

	$dealer_typeit[] = ezauHTML::makeOption( "", _EZAUTOS_PROFILE_TYPE1 );
  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE2, _EZAUTOS_PROFILE_TYPE2 );
  	$dealer_typeit[] = ezauHTML::makeOption( _EZAUTOS_PROFILE_TYPE3, _EZAUTOS_PROFILE_TYPE3 );
  
  	$lists['dealer_type'] = ezauHTML::selectList( $dealer_typeit, 'dealer_type', 'class="inputbox" size="1"' , 'value', 'text', $row->dealer_type );

?>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_NAME; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_name" id="dealer_name" size="40" maxlength="60" value="<?php echo  $row->dealer_name ; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_TYPE4; ?>:</strong></td>
			<td align="left"><?php echo $lists['dealer_type'];?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_COMPANY; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_company" id="dealer_company" size="40" maxlength="60" value="<?php echo  $row->dealer_company; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_UNITNUM; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_unitnum" id="dealer_unitnum" size="15" maxlength="20" value="<?php echo $row->dealer_unitnum; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ADDRESS1; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_address1" id="dealer_address1" size="15" maxlength="20" value="<?php echo $row->dealer_address1; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ADDRESS2; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_address2" id="dealer_address2" size="40" maxlength="60" value="<?php echo $row->dealer_address2; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_LOCALITY; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_locality" id="dealer_locality" size="40" maxlength="60" value="<?php echo  $row->dealer_locality; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_PCODE; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_pcode" id="dealer_pcode" size="40" maxlength="60" value="<?php echo  $row->dealer_pcode; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_STATE; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_state" id="dealer_state" size="40" maxlength="60" value="<?php echo  $row->dealer_state; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_COUNTRY; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_country" id="dealer_country" size="40" maxlength="60" value="<?php echo  $row->dealer_country; ?>" /></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_VLDET_DECLAT;?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_declat" size="15" value="<?php echo $row->dealer_declat;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_VLDET_DECLONG;?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_declong" size="15" value="<?php echo $row->dealer_declong;?>" />  <?php echo _EZAUTOS_GENERIC_OPT;?></td>
		</tr>
		<tr>
			<td width="200" align="<?php echo $er_textalign;?>" valign="top"><strong><?php echo _EZAUTOS_PROFILE_SHOWADDY; ?>:</strong></td>
			<td align="left"><?php echo $lists['show_addy']; ?> (<?php echo _EZAUTOS_PROFILE_SHOWADDYDESC; ?>)</td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_CARLISTER_ID; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="carlister" size="15" value="<?php if ($row->carlister != 0) { echo $row->carlister; } ?>" /></td>
		</tr>


	</table>


<?php
$tabs->endTab();
$tabs->startTab(_EZAUTOS_PROFILE_CONTDETS,"contact-page");
?>

	<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_EMAIL; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_email" id="dealer_email" size="40" maxlength="60" value="<?php echo  $row->dealer_email ; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_PHONE; ?>:</strong></td>
			<td align="left"><?php echo _EZAUTOS_PREFIX;?>: <input class="inputbox" type="text" name="phone_pref" id="phone_prefx" size="6" maxlength="5" value="<?php echo $row->phone_pref ; ?>" />&nbsp;&nbsp;&nbsp;&nbsp; <?php echo _EZAUTOS_NUM;?>: <input class="inputbox" type="text" name="dealer_phone" id="dealer_phone" size="18" maxlength="20" value="<?php echo  $row->dealer_phone ; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_FAX; ?>:</strong></td>
			<td align="left"><?php echo _EZAUTOS_PREFIX;?>: <input class="inputbox" type="text" name="fax_pref" id="fax_prefx" size="6" maxlength="5" value="<?php echo $row->fax_pref ; ?>" />&nbsp;&nbsp;&nbsp;&nbsp; <?php echo _EZAUTOS_NUM;?>: <input class="inputbox" type="text" name="dealer_fax" id="dealer_fax" size="18" maxlength="20" value="<?php echo  $row->dealer_fax ; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_MOBILE; ?>:</strong></td>
			<td align="left"><?php echo _EZAUTOS_PREFIX;?>: <input class="inputbox" type="text" name="mobile_pref" id="mobile_prefx" size="6" maxlength="5" value="<?php echo $row->mobile_pref ; ?>" />&nbsp;&nbsp;&nbsp;&nbsp; <?php echo _EZAUTOS_NUM;?>: <input class="inputbox" type="text" name="dealer_mobile" id="dealer_mobile" size="18" maxlength="20" value="<?php echo  $row->dealer_mobile ; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_SMS; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_sms" id="dealer_sms" size="40" maxlength="60" value="<?php echo $row->dealer_sms ; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ALLOWSMS; ?>:</strong></td>
			<td align="left"><?php echo $lists['show_sms']; ?></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_WEB; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_web" id="dealer_web" size="40" maxlength="60" value="<?php if (!$row->prid OR !$row->dealer_web ){ ?>http://<?php } else { ?><?php echo  $row->dealer_web;?><?php } ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_BLOG; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_blog" id="dealer_blog" size="40" maxlength="60" value="<?php if (!$row->prid OR !$row->dealer_blog ){ ?>http://<?php } else { ?><?php echo  $row->dealer_blog;?><?php } ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_SKYPE; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_skype" id="dealer_skype" size="40" maxlength="60" value="<?php echo  $row->dealer_skype ; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_YAHOO; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_ymsgr" id="dealer_ymsgr" size="40" maxlength="60" value="<?php echo  $row->dealer_ymsgr ; ?>" /></td>
		</tr>
		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_ICQ; ?>:</strong></td>
			<td align="left"><input class="inputbox" type="text" name="dealer_icq" id="dealer_icq" size="40" maxlength="60" value="<?php echo  $row->dealer_icq ; ?>" /></td>
		</tr>
	</table>

<?php
$tabs->endTab();
$tabs->startTab(_EZAUTOS_PROFILE_PROMO,"promo-page");
?>

	<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_LINKEDIN; ?>:</strong><br /><?php echo _EZAUTOS_PROFILE_LINKEDIN_DESC;?></td>
			<td align="left"><textarea class="inputbox" cols="60" rows="3" id="linkit" name="linkit"><?php echo $row->linkit; ?></textarea><br /><br /></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_INTRO; ?>:</strong></td>
			<td align="left"><textarea class="inputbox" cols="29" rows="5" id="dealer_info" name="dealer_info"><?php echo $row->dealer_info; ?></textarea></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_IMAGE; ?>:</strong><br /><br /></td>
			<td valign="top"><?php profileUpload($row->dealer_image,'1',$list['dealer_image'],'dealer_image');?>
			<?php if ($row->dealer_image){ ?>
			&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezautos&task=deleteprofile_image&id=<?php echo $row->prid;?>"><?php echo _EZAUTOS_VLDET_DELETEIMG; ?></a></strong>
			<?php } ?>
			</td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_LOGO; ?>:</strong><br /><br /><?php echo _EZAUTOS_PROFILE_MAXSIZE;?><br />
<?php echo $ea_logowidth.' (W) x '.$ea_logoheight.' (H)';?></td>
			<td valign="top"><?php logoUpload($row->dealer_logo,'1',$list['dealer_logo'],'dealer_logo');?>
			<?php if ($row->dealer_logo){ ?>
			&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezautos&task=deletelogo_image&id=<?php echo $row->prid;?>"><?php echo _EZAUTOS_VLDET_DELETEIMG; ?></a></strong>
			<?php } ?>
			</td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_TOPPER; ?>:</strong><br /><br /><?php echo _EZAUTOS_PROFILE_MAXSIZE;?><br />
<?php echo $ea_topperwidth.' (W) x '.$ea_topperheight.' (H)';?></td>
			<td valign="top"><?php topperUpload($row->page_topper,'1',$list['page_topper'],'page_topper');?>
			<?php if ($row->page_topper){ ?>
			&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezautos&task=deletepage_topper&id=<?php echo $row->prid;?>"><?php echo _EZAUTOS_VLDET_DELETEIMG; ?></a></strong>
			<?php } ?>
			<br /><br /></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PROFILE_PDF_BROCH; ?>:</strong><br /><br /></td>
			<td valign="top"><?php pdfUpload($row->dealer_pdf,'1',$list['dealer_pdf'],'dealer_pdf');?>
			<?php if ($row->dealer_pdf){ ?>
			&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezautos&task=deletepdf_promo&id=<?php echo $row->prid;?>"><?php echo _EZAUTOS_PROFILE_PDF_DELETE; ?></a></strong>
			<?php } ?>
			</td>
		</tr>

	</table>


<?php
$tabs->endTab();
$tabs->startTab(_EZAUTOS_PROFILE_PRIVILEGES,"privs-page");
?>

	<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_DEALER_EXEMPT; ?>:</strong></td>
			<td align="left"><?php echo $lists['dealer_exempt'];?> *** <?php echo _EZAUTOS_DEALER_EXEMPT_DESC;?></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_FEAT_UPGR; ?>:</strong></td>
			<td align="left"><?php echo $lists['feat_upgr'];?> *** <?php echo _EZAUTOS_FEAT_UPGR_DESC;?></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_PUBLISH_OWN; ?>:</strong></td>
			<td align="left"><?php echo $lists['publish_own'];?> *** <?php echo _EZAUTOS_PUBLISH_OWN_DESC;?></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><?php echo _EZAUTOS_EXPRESET; ?>:</strong></td>
			<td align="left"><?php echo $lists['reset_own'];?> *** <?php echo _EZAUTOS_EXPRESET_DESC;?></td>
		</tr>

		<tr>
			<td width="200" align="left" valign="top"><strong><br /><br /><?php echo _EZAUTOS_PROFILE_APPROVE; ?>:</strong></td>
			<td align="left"><br /><br /><?php echo $lists['published']; ?></td>
		</tr>

	</table>

<?php
$tabs->endTab();
$tabs->endPane();
?>

</td>
	</tr>
</table>

<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">
	<tr>
		<td width="200" align="left" valign="top"><strong><br /><br /><?php echo _EZAUTOS_PROF_BIO; ?>:</strong></td>
		<td><br />
		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  $row->dealer_bio , 'dealer_bio', '100%;', '300', '60', '20' ) ; ?>
		</td>
	</tr>
</table>


	<input type="hidden" name="prid" value="<?php echo $row->prid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<?php 

}






/**************************************************\
      SHOW THE LIST OF CONTENT ITEMS
\**************************************************/


function showContent( $option, &$rows, &$pageNav ) {
global $my;

mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_MANAGE_STATIC; ?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left"><?php echo _EZAUTOS_CONTENT_ITEM; ?></th>
		</tr>
		</thead>


			<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$row->id 	= $row->contid;
			$link 		= 'index2.php?option=com_ezautos&task=editcontentA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			?>
		<tr class="<?php echo "row$k"; ?>">

				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->title;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDIT; ?>">
					<?php echo $row->title; ?>
					</a>
					<?php
				}
				?>
			</td>

			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="content" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT CONTENT ITEM
\**************************************************/


function editContent( &$row, $option ) {
global $database, $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelcontent') {
        submitform( pressbutton );
        return;
      }
				<?php getEditorContents( 'editor1', 'content' ) ; ?>

        submitform( pressbutton );
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><div class="header icon-48-generic"><?php echo $row->contid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo $row->title; ?></div></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo $row->title; ?></strong>:</td>
			<td align="left">		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  stripslashes($row->content) , 'content', '100%;', '300', '60', '20' ) ; ?>

</td>
		</tr>


	</table>

	<input type="hidden" name="contid" value="<?php echo $row->contid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}








/**************************************************\
      SHOW THE LIST OF MAILING LIST ITEMS
\**************************************************/


function showMlist( $option, &$rows, &$pageNav ) {
global $my;

mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><div class="header icon-48-generic"><?php echo _EZAUTOS_MANAGE_SUBSCRIBER; ?></div></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<thead>
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left" width="200"><?php echo _EZAUTOS_SUBSCRIBER_NAME; ?></th>
			<th align="left"><?php echo _EZAUTOS_SUBSCRIBER_EMAIL; ?></th>
			<th align="left" width="100"><?php echo _EZAUTOS_SUBSCRIBER_CONFIRMED; ?></th>
			<th align="left" width="200"><?php echo _EZAUTOS_SUBSCRIBER_DATE; ?></th>
		</tr>
		</thead>


			<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$row->id 	= $row->mailid;
			$link 		= 'index2.php?option=com_ezautos&task=editmlistA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			?>
		<tr class="<?php echo "row$k"; ?>">

				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left" width="200">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->title;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZAUTOS_GENERIC_EDIT; ?>">
					<?php echo $row->name; ?>
					</a>
					<?php
				}
				?>
			</td>
			<td align="left"><?php echo $row->email; ?></td>
			<td width="100"><?php if ($row->confirmed == 1){ ?><img src="images/tick.png" border="0" alt="<?php echo 'Confirmed'; ?>" title="<?php echo 'Confirmed'; ?>" /><?php }else{ ?><img src="images/publish_x.png" border="0" alt="<?php echo 'Not Confirmed'; ?>" title="<?php echo 'Not Confirmed'; ?>" /><?php } ?></td>
			<td width="200"><?php echo $row->date; ?></td>

			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="mlist" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT MAILING LIST ITEM
\**************************************************/


function editMlist( &$row, $option, &$lists ) {
global $database, $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelmlist') {
        submitform( pressbutton );
        return;
      }
      // do field validation

      if (form.name.value == ""){
			alert( "<?php echo _EZAUTOS_ERROR_SUBNAME; ?>" );
      } else if (form.email.value == ""){
        alert( "<?php echo _EZAUTOS_ERROR_EMAIL;?>" );

      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><div class="header icon-48-generic"><?php echo $row->mailid ? _EZAUTOS_GENERIC_EDIT : _EZAUTOS_GENERIC_ADD;?> <?php echo _EZAUTOS_CPANEL_MLIST; ?></div></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo _EZAUTOS_SUBSCRIBER_NAME; ?></strong>:</td><td align="left"><input class="inputbox" type="text" name="name" id="name" size="40" maxlength="60" value="<?php echo  $row->name; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo _EZAUTOS_SUBSCRIBER_EMAIL; ?></strong>:</td><td align="left"><input class="inputbox" type="text" name="email" id="email" size="40" maxlength="60" value="<?php echo  $row->email; ?>" /> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo _EZAUTOS_SUBSCRIBER_CONFIRMED; ?></strong>:</td><td align="left"><?php echo $lists['confirmed']; ?> <?php echo _EZAUTOS_GENERIC_REQ;?></td>
		</tr>
	</table>

	<input type="hidden" name="mailid" value="<?php echo $row->mailid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}









/* *********************************************************************************
	   					BUILD AND MANAGE THE CONFIGURATION FUNCTIONS
   ********************************************************************************* */


function showConfig( $option, $lists ) {
  global $mosConfig_absolute_path, $database,$mosConfig_live_site, $mainframe;


include(EZADMIN_PATH."/config.ezautos.php");

	$tabs = new mosTabs(0);
  
?>
    <script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancel') {
        submitform( pressbutton );
        return;
      } else {

        submitform( pressbutton );
        
      }
    }
    </script>


<table cellpadding="4" cellspacing="0" border="0" width="100%">
	<tr>
			<td width="270" align="right">
				<span class="componentheading">config.ezautos.php is :
				<?php echo is_writable( 'components/com_ezautos/config.ezautos.php' ) ? '<strong><font color="green"> '._EZAUTOS_WRITABLE.'</font></strong>' : '<strong><font color="red"> '._EZAUTOS_UNWRITABLE.'</font></strong>' ?>
				</span>
			</td>
	</tr>
</table>


 <form action="index2.php" method="POST" name="adminForm">
  <table cellpadding="4" cellspacing="1" border="0" width="100%">
  <tr bgcolor="#990000">

    <td width="100%" align="center" >
<font color="#ffffff" size="6" face="impact">Configuration</font>
</td>
  </tr>
</table>
<table cellpadding="1" cellspacing="0" border="0" width="100%" class="menudottedline">  
  <tr  class="menubackgr" >
    <td width="100%" align="right" class="smallgrey">
Version 5.2.1 &nbsp;&nbsp;
    </td>
  </tr>
  </table>

<table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
		<td align="left">



<?php
$tabs->startPane("configPane");
$tabs->startTab(_EZAUTOS_CONFIG_IMG1,"image-page");
?>

<table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_IMAGESIZES;?></div></th>
    </tr>
	</thead>

     <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_TNCREATOR; ?></strong></td>
      <td align="left" valign="top"  width="150"><br />
      <?php echo $lists['ea_thumbcreation']; ?>
      </td>
      <td align="left" valign="top"><br />
        <?php
          echo ""._EZAUTOS_CONFIG_GDCHOOSE."<br />";
          # Perform check for common image processors
          #$shell_cmd="";
          #if (substr(PHP_OS, 0, 3) == "WIN") {
          #  $shell_cmd = getenv( "COMSPEC" ) . " /C ";
          #}
          # Imagemagick detection
          #unset($output);
          #@exec($shell_cmd."convert -version", $output, $status);
          #if (!$status) {
          #  if (preg_match("/imagemagick[ \t]+([0-9\.]+)/i",$output[0],$matches)) {
          #    echo "<span class='small'>Found Imagemagick</span><br />";
          #  }
          #}
          # NetPBM detection
          #unset($output);
          #@exec($shell_cmd."jpegtopnm -version 2>&1", $output, $status);
          #if (!$status) {
          #  if(preg_match("/netpbm[ \t]+([0-9\.]+)/i",$output[0],$matches)) {
          #    echo "<span class='small'>Found NetPBM</span><br />";
          #  }
          #}
          # GD detection
          $GDfuncList = get_extension_funcs('gd');
          ob_start();
          @phpinfo(INFO_MODULES);
          $output=ob_get_contents();
          ob_end_clean();
          $matches[1]='';
          if (preg_match("/GD Version[ \t]*(<[^>]+>[ \t]*)+([^<>]+)/s",$output,$matches)) {
            $gdversion = $matches[2];
          }
          if ($GDfuncList) {
            echo "<span class='small'>"._EZAUTOS_CONFIG_GDFOUND." $gdversion</span><br />";
          }
        ?><br />
        <?php echo _EZAUTOS_CONFIG_GDLIMIT;?>
      </td>
    </tr>
    
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_WIDTHTHUMB;?>:</strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_thumbwidth" value="<?php echo stripslashes( $ea_thumbwidth ); ?>"><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_WIDTHTHUMBDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_THUMBQUAL;?>:</strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_thumbquality" value="<?php echo stripslashes( $ea_thumbquality ); ?>"> %<br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_THUMBQUALDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_IMGDIR;?>:</strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_imagedirectory" value="<?php echo stripslashes( $ea_imagedirectory ); ?>"><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_IMGDIRDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_WIDTHCATTHUMB;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_catthumbwidth" value="<?php echo stripslashes( $ea_catthumbwidth ); ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_WIDTHCATTHUMBDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_WIDTHMAINIMG;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_imgwidth" value="<?php echo stripslashes( $ea_imgwidth ); ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_WIDTHMAINIMGDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_HEIGHTMAINIMG;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_imgheight" value="<?php echo stripslashes( $ea_imgheight ); ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_HEIGHTMAINIMGDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_MAXWIDTH;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_maxwidth" value="<?php echo "$ea_maxwidth"; ?>" /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_MAXWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_MAXHEIGHT;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_maxheight" value="<?php echo "$ea_maxheight"; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_MAXHEIGHTDESC;?><br /></td>
    </tr>

	<tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_USEWATERMARK;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_watermark']; ?></td>
	  <td align="left"><?php echo _EZAUTOS_CONFIG_USEWATERMARK_DESC;?></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_YOURVIDEOS;?></div></th>
    </tr>
	</thead>

	<tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_FLV;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_useflv']; ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_FLV_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_FLVWIDTH;?></strong><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_flvwidth']; ?><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_FLVWIDTH_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_FLVHEIGHT;?></strong><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_flvheight']; ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_FLVHEIGHT_DESC;?><br /></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_INI;?></div></th>
    </tr>
	</thead>

	<tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_INIOVERRIDE;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_useini']; ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_INIOVERRIDE_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_INISIZE;?></strong><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tempini']; ?> M<br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_INISIZE_DESC;?><br /></td>
    </tr>

</table>



			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_BIZ1,"business-page");
			?>


    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_YOURBIZSET;?></div></th>
    </tr>
	</thead>
    <tr align="center" valign="middle" class="row0" width="200">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_BIZNAME;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_bizname" value="<?php echo stripslashes( $ea_bizname );?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_BIZNAMEDESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_BIZAD;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_bizad" size="40" value="<?php echo stripslashes( $ea_bizad );?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_BIZADDESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_TELEPHONE;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_telephone" value="<?php echo stripslashes( $ea_telephone ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_TELEPHONEDESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_EMAIL;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_bizemail" value="<?php echo stripslashes( $ea_bizemail ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_EMAILDESC;?></td>
    </tr>
	<tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_CURRENCYSIGN;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_currencysign" value="<?php echo htmlspecialchars( $ea_currencysign, ENT_QUOTES ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_CURRENCYSIGNDESC;?></td>
    </tr>
	<tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_CURRENCYPOS;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_currencypos']; ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_CURRENCYPOS_DESC;?></td>
    </tr>
	<tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_CURRENCYFORMAT;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_currencyformat']; ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_CURRENCYFORMAT_DESC;?></td>
    </tr>

	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_PROFILES,"profile-page");
			?>



    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_PROFILING;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_SHOWPROF;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['ea_useprofile'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_SHOWPROF_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_APPROF;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['ea_approf'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_APPROF_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_PROFACCESS;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['ea_profaccess'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_PROFACCESSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_PROFILEWIDTH;?></strong></td>
      <td align="left" valign="top" width="200"><br /><input type="text" name="ea_profmaxwidth" value="<?php echo stripslashes( $ea_profmaxwidth ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_PROFILEWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_PROFILEHEIGHT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_profmaxheight" value="<?php echo stripslashes( $ea_profmaxheight ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_PROFILEHEIGHTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_LOGOWIDTH;?></strong></td>
      <td align="left" valign="top" width="200"><br /><input type="text" name="ea_logowidth" value="<?php echo $ea_logowidth; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_LOGOWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_LOGOHEIGHT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_logoheight" value="<?php echo $ea_logoheight; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_LOGOHEIGHTDESC;?><br /><br /></td>
    </tr>
	
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_TOPPERWIDTH;?></strong></td>
      <td align="left" valign="top" width="200"><br /><input type="text" name="ea_topperwidth" value="<?php echo $ea_topperwidth; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_TOPPERWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_TOPPERHEIGHT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_topperheight" value="<?php echo $ea_topperheight; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_TOPPERHEIGHTDESC;?><br /><br /></td>
    </tr>
	
	</table>
			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_SMS,"sms-page");
			?>



    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_SELLER_SMS22;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_USESMS;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['ea_usesms'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USESMS_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_MOBILE;?></strong></td>
      <td align="left" valign="top" width="200"><br /><input type="text" name="ea_mobile" value="<?php echo stripslashes( $ea_mobile ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_MOBILEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SELLER_SMS7;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_username" value="<?php echo stripslashes( $ea_username ); ?>" /></td><td align="left"><?php echo _EZAUTOS_SELLER_SMS7DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SELLER_SMS8;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_password" value="<?php echo stripslashes( $ea_password ); ?>" /></td><td align="left"><?php echo _EZAUTOS_SELLER_SMS8DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_SELLER_SMS19;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_api" value="<?php echo stripslashes( $ea_api ); ?>" /></td><td align="left"><?php echo _EZAUTOS_SELLER_SMS19DESC;?><br /><br /></td>
    </tr>
	
	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_MAPPING,"mapping-page");
			?>

    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_MAPPINGDESC;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEMAPPING;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usemap'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEMAPPINGDESC;?></td>
	</tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_MAPTYPE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_mapsys'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_MAPTYPEDESC;?></td>
	</tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_MAPAPI;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_mapapi" size="110" value="<?php echo "$ea_mapapi"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_MAPAPIDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_MAPWIDTH;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_mapwidth" value="<?php echo "$ea_mapwidth"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_MAPWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_MAPHEIGHT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_mapheight" value="<?php echo "$ea_mapheight"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_MAPHEIGHTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_MAPVIEW;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_mapview'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_MAPVIEWDESC;?></td>
	</tr>

	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_EXP,"expiration-page");
			?>

    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_DEFEXPMGMT;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_USEEXPMGMT;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['ea_expmgmt'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_USEEXPMGMTDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_EXPSYS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_expsys'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_EXPSYSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_EXPFIG;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_expfig" value="<?php echo $ea_expfig; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_EXPFIGDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_EXPGRACE;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_expgrace" value="<?php echo $ea_expgrace; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_EXPGRACEDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_IMPNUM;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="10" name="ea_impnum" value="<?php echo $ea_impnum; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_IMPNUMDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_SHORTLIST;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_shortlist'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_SHORTLIST_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_LIGHTBOXEXP;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="10" name="ea_lightboxexp" value="<?php echo $ea_lightboxexp; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZAUTOS_CONFIG_LIGHTBOXEXPDESC;?><br /><br /></td>
    </tr>

	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_FMT,"formatting-page");
			?>

    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_FORMATTING;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
		<td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_STRUCTURE;?></strong><br /><br /></td>
		<td align="left" valign="top" width="200"><br /><?php echo $lists['ea_structure']; ?></td>
		<td align="left"><?php echo _EZAUTOS_CONFIG_STRUCTUREDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_TPL;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['template']; ?></td><td align="left">
      <?php echo _EZAUTOS_CONFIG_TPLDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_LISTINGSTEMPL;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_listtemplate']; ?></td><td align="left">
      <?php echo _EZAUTOS_CONFIG_LISTINGSTEMPL_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_COLCOUNT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_colcount" value="<?php echo "$ea_colcount"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_COLCOUNTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_COLWIDTH;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_colwidth" value="<?php echo "$ea_colwidth"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_COLWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_COLOUR1;?></strong></td>
      <td align="left" valign="top"><br /># <input type="text" name="ea_colour1" value="<?php echo "$ea_colour1"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_COLOUR1DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_COLOUR2;?></strong></td>
      <td align="left" valign="top"><br /># <input type="text" name="ea_colour2" value="<?php echo "$ea_colour2"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_COLOUR2DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_TEXTBOX;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_textbox" value="<?php echo "$ea_textbox"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_TEXTBOXDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_TEXTAREA;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_textarea" value="<?php echo "$ea_textarea"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_TEXTAREADESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_ALIGN;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_textalign'];?></td><td align="left"><?php echo _EZAUTOS_CONFIG_ALIGN_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_VEHPERPAGE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['perpage'];?></td><td align="left"><?php echo _EZAUTOS_CONFIG_VEHPERPAGEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_NEWLIST;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['specpage'];?></td><td align="left"><?php echo _EZAUTOS_CONFIG_NEWLISTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_RSSNN;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="35" name="ea_rssname" value="<?php echo stripslashes( $ea_rssname ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_RSSNNDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_USEBACK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_useback'];?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEBACK_DESC;?><br /><br /></td>
    </tr>



	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_DATA,"data-page");
			?>

    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_DATA_TYPES;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_VEHSPECS;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_vehspecs'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_VEHSPECS_DESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_VEHFEATS;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_vehfeats'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_VEHFEATS_DESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_FINANCE;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_financespecs'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_FINANCE_DESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_META;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_meta'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_META_DESC;?></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_CONDITION_OPTIONS;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEIT;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tagit_useit'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEIT_DESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_NEW;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tagit_new'] ?></td><td align="left"></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USED;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tagit_used'] ?></td><td align="left"></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEDEMONSTRATOR;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tagit_demo'] ?></td><td align="left"></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEASNEW;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tagit_asnew'] ?></td><td align="left"></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEPRELUV;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tagit_preluv'] ?></td><td align="left"></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USESPARE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_tagit_spare'] ?></td><td align="left"></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_LISTTYPE;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_USE_TYPE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetype']; ?></td><td align="left"><br /><?php echo _EZAUTOS_USE_TYPE_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_TYPE_SALE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetype1']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_TYPE_RENTAL;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetype2']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_TYPE_LEASE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetype3']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_TYPE_AUCTION;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetype4']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_TYPE_SWAP;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetype5']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_TYPE_TENDER;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetype6']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_FREQUENCYLIST;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USERENTALFREQ;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usefrequit']; ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_USERENTALFREQ_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_RENTAL_NIGHTLY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usefrequit1']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_RENTAL_WEEKLY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usefrequit2']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_RENTAL_FNIGHT;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usefrequit3']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_RENTAL_MONTH;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usefrequit4']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_SCH,"search-page");
			?>

<table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_MGSCHFILTER;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_USECATEGORY;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_usecat'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USECATEGORY_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEMAKMOD;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usemakmod'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEMAKMOD_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEENG;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_useeng'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEENG_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USETRANS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usetrans'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USETRANS_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEFUEL;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usefuel'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEFUEL_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USECOND;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usecond'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USECOND_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USECOLOUR;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usecolour'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USECOLOUR_DESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEDOORS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usedoors'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEDOORS_DESC;?></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEBODY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usebody'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEBODY_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_PCODE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_usepcode'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_PCODE_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_SCH_DISTANCE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_raddistance']; ?></td><td align="left"><br /><?php echo _EZAUTOS_SCH_DISTANCEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_USEYEAR;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_useyear'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_USEYEAR_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_LMIN_YEAR;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_minyear" value="<?php echo "$ea_minyear"; ?>" /></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_MINYEAR_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZAUTOS_LMAX_YEAR;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_maxyear" value="<?php echo "$ea_maxyear"; ?>" /></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_MAXYEAR_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_SCHMILES;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_maxmiles']; ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_SCHMILES_DESC;?><br /><br /></td>
    </tr>

	</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_LINKS,"links-page");
			?>

<table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_PAGELAYOUT;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_RECFRIEND;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_viewrecommend'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_RECFRIENDDESC;?>
      <br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_VEHENQ;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_viewenq'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_VEHENQDESC;?>
      <br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_MAILINGVIEW;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_viewmailing'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_MAILINGDESC;?>
      <br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_RSS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_rssfeed'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_RSSDESC;?>
      <br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_LEAD;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_reglead'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_LEADDESC;?>
      <br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_SHOWMENU;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_showmenu'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_SHOWMENU_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_NEWLINK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_shownewlink'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_NEWLINK_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_FEATLINK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_showfeatlink'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_FEATLINK_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_SEARCHLINK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_showsearch'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_SEARCHLINK_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_QUICKLIST;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_quicklist'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_QUICKLIST_DESC;?><br /><br /></td>
    </tr>

	</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_MISC,"miscellaneous-page");
			?>

    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_CMS;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_CMSTYPE;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_cms'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_CMSTYPE_DESC;?><br /><br /></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_DEFINE_NOTIFICATIONS;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_NOTIFICATION;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_notification'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_NOTIFICATIONDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_LEADSNOTIFY;?></strong><br /><br /></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_leadsnotice'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_LEADSNOTIFY_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_PROFUPDATE;?></strong><br /><br /></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_profnotice'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_PROFUPDATE_DESC;?><br /><br /></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_FILTERS;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_FILTERS_VIN;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_vinfilt'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_FILTERS_VIN_DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_FILTERS_REG;?></strong><br /><br /></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_regfilt'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_FILTERS_REG_DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_FILTERS_MAKE;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_makefilt'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_FILTERS_MAKE_DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_FILTERS_MODEL;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_modfilt'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_FILTERS_MODEL_DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_SHOWPICS;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_piclist'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_SHOWPICS_DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_USECOUNT;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_usecount'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_USECOUNT_DESC;?><br /><br /></td>
    </tr>

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_CCINTEGRATION;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_LETTERMAN;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_letterman'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_LETTERMAN_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_PMS;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_mypms'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_PMS_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_JREVIEWS;?></strong></td>
      <td align="left" valign="top" width="100"><br /><?php echo $lists['ea_jreviews'] ?></td><td align="left"><br /><?php echo _EZAUTOS_CONFIG_JREVIEWS_DESC;?><br /><br /></td>
    </tr>

	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_OPS,"operation-page");
			?>

    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">

	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_OP2;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_SITETYPE;?></strong></td>
      <td align="left" valign="top" width="200"><br />
      <?php echo $lists['ea_sitetype']; ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_SITETYPEDESC;?>
      <br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_MEMLISTINGS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_memlistings'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_MEMLISTINGSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_PAIDLISTINGS;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_paypal'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_PAIDLISTINGSDESC;?><br /><br /></td>
    </tr>


    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_PAIDONLY;?></strong><br /><br /></td>
      <td align="left" valign="top"><br />
      <?php echo $lists['ea_payonly']; ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_PAIDONLYDESC;?><br /><br /></td>
    </tr>

</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_MEM1,"members-page");
			?>


    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_MEMSALES;?></div></th>
    </tr>
	</thead>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZAUTOS_CONFIG_MEMAPPROVAL;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['ea_approve'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_MEMAPPROVALDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_NUMLISTINGS;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="ea_maxlistings" value="<?php echo "$ea_maxlistings"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_NUMLISTINGSDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_FREEPIC;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_freepic'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_FREEPICDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_SELFENTRY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_self'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_SELFENTRYDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_CHANGEIMAGES;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_changeimages'] ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_CHANGEIMAGES_DESC;?><br /><br /></td>
    </tr>

</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZAUTOS_CONFIG_PAYMENTS,"paypal-page");
			?>


    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminlist">
	<thead>
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZAUTOS_CONFIG_PP;?></div></th>
    </tr>
	</thead>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_PAYMENTSYS;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['ea_pmttmpl']; ?></td><td align="left">
      <?php echo _EZAUTOS_CONFIG_PAYMENTSYS_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZAUTOS_CONFIG_PPEMAIL;?></strong></td>
      <td align="left" valign="top" width="200"><br /><input type="text" size="50" name="paypal_email" value="<?php echo htmlspecialchars( $paypal_email, ENT_QUOTES ); ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_PPEMAILDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_CHECKMAIL;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="30" name="checkmail" value="<?php echo "$checkmail"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_CHECKMAILDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_PPCURRENCY;?></strong></td>
      <td align="left" valign="top">
<br /><input type="text" size="3" name="pp_currsign" value="<?php echo "$pp_currsign"; ?>" /> <?php echo _EZAUTOS_CONFIG_CURRENCYSIGN;?>
<br /><input type="text" size="10" name="currency" value="<?php echo "$currency"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_PPCURRENCYDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_PPBUTTON;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="button_image" value="<?php echo "$button_image"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_PPBUTTONDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZAUTOS_CONFIG_PPPOSTMODE;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['postmode']; ?></td><td align="left"><?php echo _EZAUTOS_CONFIG_PPPOSTMODEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_PPCOST;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="premium_cost" value="<?php echo "$premium_cost"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_PPCOSTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZAUTOS_CONFIG_FPCOST;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="featured_cost" value="<?php echo "$featured_cost"; ?>" /></td><td align="left"><?php echo _EZAUTOS_CONFIG_FPCOSTDESC;?><br /><br /></td>
    </tr>

</table>

			<?php
		$tabs->endTab();
		$tabs->endPane();

		?>

  <input type="hidden" name="option" value="<?php echo $option;?>">
  <input type="hidden" name="task" value="saveconfig">
  <input type="hidden" name="boxchecked" value="0">
</form>


</td>
</tr>
</table>

<?php
}



// END THE HTML CLASS

}

?>