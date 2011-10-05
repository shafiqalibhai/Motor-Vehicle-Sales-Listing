<?php

#############################################################################
#                                                                           #
#  EZ Autos 5.2.0 - A Mambo/Joomla Motor Vehicle Sales Listing component    #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################


    # Don't allow direct linking

    defined ('_VALID_MOS') or die( 'Direct Access to this location is not allowed.' );



switch ($task) {

  case 'multimail':
    multiMail( $option );
    break;

}


/**************************************************\
 FUNCTION TO SEND MAIL TO PEOPLE ON THE VIP BUYERS LIST
\**************************************************/


function multiMail ( $option ){
	global $myItemid, $mosConfig_absolute_path, $mainframe, $database, $mosConfig_live_site, $my, $gid;
	global $ea_bizname, $ea_bizemail, $ea_imagedirectory, $ea_imgheight, $ea_useprofile, $myItemid;
	global $ea_currencysign, $ea_currencypos, $ea_currencyformat, $ea_expmgmt, $ea_expsys, $ea_impnum;

  include(EZADMIN_PATH."/config.ezautos.php");


if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, 
u.dealer_image AS dealer_image, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, 
u.dealer_phone AS dealer_phone, u.dealer_mobile AS dealer_mobile, u.published AS dealerpublished, u.dealer_email AS dealer_email, 
u.dealer_type AS dealer_type FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND a.email_status=0 AND cc.published=1 AND a.hits<$ea_impnum"
	;
	$database->setQuery( $query );
    $therows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, 
u.dealer_image AS dealer_image, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, 
u.dealer_phone AS dealer_phone, u.dealer_mobile AS dealer_mobile, u.published AS dealerpublished, u.dealer_email AS dealer_email, 
u.dealer_type AS dealer_type FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND a.email_status=0 AND cc.published=1 AND a.expdate>$currentdate"
	;
	$database->setQuery( $query );
    $therows = $database->loadObjectList();

}

} else {

	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname, 
u.dealer_image AS dealer_image, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, 
u.dealer_phone AS dealer_phone, u.dealer_mobile AS dealer_mobile, u.published AS dealerpublished, u.dealer_email AS dealer_email, 
u.dealer_type AS dealer_type FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n LEFT JOIN #__ezautos_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND a.email_status=0 AND cc.published=1"
	;
	$database->setQuery( $query );
    $therows = $database->loadObjectList();

}

	$k = 0;
	for ($i=0, $n=count( $therows ); $i < $n; $i++) {
		$therow = $therows[$i];

//		echo $therow->id.'<br />';

		$number = $therow->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);
		} else {
			$formatted_price = number_format($number, 2,",",".");
		}


//Build the message


	$subject= stripslashes ( $ea_bizname ) .' - '. _EZAUTOS_LEADSMAILBACK;

	$message='<html><head><meta http-equiv="Content-Type" content="text/html; '._ISO.'" /><title>'.$ea_bizname.' '._EZAUTOS_PROFILE_VIPNOTIFICATIONS.'</title></head>';

	$message.='<body style="background-color: #FFFFFF; padding: 10px;">';


	$message.='<table border="2" style="border-collapse: collapse" bordercolor="#004A80" width="750">
	<tr>
		<td valign="top">';

	$message.='<table border="0" style="border-collapse: collapse" bordercolor="#004A80" width="750">
	<tr>
		<td width="450" valign="top">
		<table border="0" width="100%">
			<tr>
				<td valign="top" bgcolor="#004A80"><div align="center"><strong><font face="Arial" color="#FFFFFF">'.$therow->year.' '.$therow->makename.' '.$therow->modelname.' '.$therow->derivative.'</font></strong></div></td>
			</tr>
			<tr>
				<td valign="top"><br /><div align="center">';
if ($therow->image1) {
	$message.='<img src="'.$mosConfig_live_site.'/components/com_ezautos/'.$ea_imagedirectory.'/'.$therow->image1.'" width="300px" border="0" name="picture" alt="" />';
}else{
	$message.='<img src="'.$mosConfig_live_site.'/components/com_ezautos/'.$ea_imagedirectory.'/nothumb.gif" border="1" width="300px" name="picture" alt="" />';
}
	$message.='</div><br /></td>
			</tr>
			<tr>
				<td valign="top" bgcolor="#004A80">
				<strong><font color="#FFFFFF" face="Arial">'._EZAUTOS_TABS_DESCRIPTION.':-</font></strong></td>
			</tr>
			<tr>';
if ($therow->longdesc) {
				$message.='<td valign="top"><br /><font face="Arial" size="2">'.$therow->longdesc.'</font><br /><br /></td>';
}else{
				$message.='<td valign="top"><br /><font face="Arial" size="2">'.$therow->smalldesc.'</font><br /><br /></td>';
}
	$message.='</tr>
		</table>
		</td>
		<td width="300" valign="top">
		<table border="0" width="100%">
			<tr>
				<td valign="top" bgcolor="#004A80"><strong><font color="#FFFFFF" face="Arial">'._EZAUTOS_NOTIFICATIONS_OVERVIEW.'</font></strong></td>
			</tr>
			<tr>
				<td valign="top">
				<table border="0" width="100%">
					<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_DET_ADDNUM.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->id.'</font></td>
					</tr>';
	 if ( $therow->rego ){ 
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_REG.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->rego.'</font></td>
					</tr>';
	 }
	 if ( $therow->vin ){ 
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_VIN.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->vin.'</font></td>
					</tr>';
	 }
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_CATG.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->category.'</font></td>
					</tr>';

if ( $therow->tag ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_TAG.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->tag.'</font></td>
					</tr>';
}
if ( $therow->price ) {

	$message.='<tr><td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_LISTINGS_PRICE.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">';

if ( $therow->showprice ) {
	if ( $ea_currencypos==0 ) {
		$message.= $ea_currencysign.''.$formatted_price.' '.$therow->price_type;
	} else {
		$message.= $formatted_price.' '.$ea_currencysign.' '.$therow->price_type;
	}
} else {
	$message.= _EZAUTOS_POR;
}

if ( $therow->freq ) {
 
	if ($therow->freq == 1) {
		$message.= _EZAUTOS_RENTAL_DAILY;
	}
	if ($therow->freq == 2) {
		$message.= _EZAUTOS_RENTAL_WEEKLY;
	}
	if ($therow->freq == 3) {
		$message.= _EZAUTOS_RENTAL_FNIGHT;
	}
	if ($therow->freq == 4) {
		$message.= _EZAUTOS_RENTAL_MONTH;
	}

}
	$message.='</font></td>
					</tr>';
}
if ( $therow->engine ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_DET_ENGSIZE.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->engine.'</font></td>
					</tr>';
}
if ( $therow->trans ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_DET_TRANSMISSION.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->trans.'</font></td>
					</tr>';
}
if ( $therow->fuel ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_FUEL.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->fuel.'</font></td>
					</tr>';
}
if ( $therow->odometer ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_DET_MILEAGE.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->odometer.' '.$therow->mileage_unit.'</font></td>
					</tr>';
}
if ( $therow->colour ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_DET_COLOUR.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->colour.'</font></td>
					</tr>';
}
if ( $therow->doors ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_SPECS_DOORS.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">';

if ($therow->doors == 0) {
		$message.= _EZAUTOS_SPECS_DOORSNS;
}
if ($therow->doors == 1) {
		$message.= _EZAUTOS_SPECS_DOORS1;
}
if ($therow->doors == 2) {
		$message.= _EZAUTOS_SPECS_DOORS2;
}
if ($therow->doors == 3) {
		$message.= _EZAUTOS_SPECS_DOORS3;
}
if ($therow->doors == 4) {
		$message.= _EZAUTOS_SPECS_DOORS4;
}
if ($therow->doors == 5) {
		$message.= _EZAUTOS_SPECS_DOORS5;
}
if ($therow->doors == 6) {
		$message.= _EZAUTOS_SPECS_DOORS6;
}
if ($therow->doors == 7) {
		$message.= _EZAUTOS_SPECS_DOORS7;
}
if ($therow->doors == 8) {
		$message.= _EZAUTOS_SPECS_DOORS8;
}
if ($therow->doors == 9) {
		$message.= _EZAUTOS_SPECS_DOORS9;
}

	$message.='</font></td>
					</tr>';
}
if ( $therow->body ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_SPECS_BODY.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">';
if ($therow->body == 1) {
		$message.= _EZAUTOS_SPECS_BODY1;
}
if ($therow->body == 2) {
		$message.= _EZAUTOS_SPECS_BODY2;
}
if ($therow->body == 3) {
		$message.= _EZAUTOS_SPECS_BODY3;
}
if ($therow->body == 4) {
		$message.= _EZAUTOS_SPECS_BODY4;
}
if ($therow->body == 5) {
		$message.= _EZAUTOS_SPECS_BODY5;
}
if ($therow->body == 6) {
		$message.= _EZAUTOS_SPECS_BODY6;
}
if ($therow->body == 7) {
		$message.= _EZAUTOS_SPECS_BODY7;
}
if ($therow->body == 8) {
		$message.= _EZAUTOS_SPECS_BODY8;
}
if ($therow->body == 9) {
		$message.= _EZAUTOS_SPECS_BODY9;
}
if ($therow->body == 10) {
		$message.= _EZAUTOS_SPECS_BODY10;
}
if ($therow->body == 11) {
		$message.= _EZAUTOS_SPECS_BODY11;
}
if ($therow->body == 12) {
		$message.= _EZAUTOS_SPECS_BODY12;
}

	$message.='</font></td>
					</tr>';
}
if ( $therow->row->co2 ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_SPECS_CO2.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->row->co2.'</font></td>
					</tr>';
}
if ( $therow->numowners ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_SPECS_NUMOWNERS.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->numowners.'</font></td>
					</tr>';
}
	$message.='</table>
				</td>
			</tr>';

if ( $therow->deposit ){
	$message.='<tr>
				<td valign="top" bgcolor="#004A80"><strong>
				<font color="#FFFFFF" face="Arial">'._EZAUTOS_VLDET_FINANCE.'</font></strong></td>
			</tr>
			<tr>
				<td valign="top">
				<table border="0" width="100%">
					<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_DEPOSIT.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->deposit.'</font></td>
					</tr>
					<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_REPAYMENTS.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">';

							$number2 = $therow->repayments;
							if ($ea_currencyformat==0) {
							$formatted_price2 = number_format($number2);
							} else {
							$formatted_price2 = number_format($number2, 2,",",".");
							}
							if ( $ea_currencypos==0 ) {
							$message.= $ea_currencysign.''.$formatted_price2;
							} else {
							$message.= $formatted_price2.' '.$ea_currencysign;
							}
	$message.='</font></td>
					</tr>';
if ( $therow->termtype ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'._EZAUTOS_VLDET_TERM.'</font></td>
						<td width="50%" valign="top"><font face="Arial" size="2">';
							if ($therow->termtype == 1) { $message.= _EZAUTOS_VLDET_TERM_MONTHS; }
							if ($therow->termtype == 2) { $message.= _EZAUTOS_VLDET_TERM_YEARS; }
	$message.='</font></td>
					</tr>';
}

	$message.='</table>
				</td>
			</tr>';
}

if ( $ea_useprofile ) {
	$message.='<tr>
				<td valign="top" bgcolor="#004A80"><strong>
				<font color="#FFFFFF" face="Arial">'._EZAUTOS_PROFILE_DSDET.':-</font></strong></td>
			</tr>
			<tr>
				<td valign="top">
				<table border="0" width="100%">
					<tr>
						<td rowspan="3" width="50%" valign="top"><div align="center">';
if ( !$therow->dealer_image ){
	$message.='<img src="'.$mosConfig_live_site.'/components/com_ezautos/profiles/nothumb.jpg" width="60" border="0" alt="" />';
}else{
	$message.='<img src="'.$mosConfig_live_site.'/components/com_ezautos/profiles/'.$therow->dealer_image.'" border="0" width="60" alt="" />';
}
	$message.='</div></td>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->dealer_name.'</font></td>
					</tr>';
if ( $therow->dealer_company ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->dealer_company.'</font></td>
					</tr>';
}
if ( $therow->dealer_phone ){
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2">'.$therow->dealer_phone.'</font></td>
					</tr>';
}
	$message.='<tr>
						<td width="50%" valign="top"><font face="Arial" size="2"><a href="mailto:'.$therow->dealer_email.'">'._EZAUTOS_PROFILE_EMAIL.'</a></font></td>
					</tr>
					<tr>
						<td colspan="2"><hr noshade color="#004A80"></td>
					</tr>

				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>';
}
	$message.='<tr>
		<td width="100%" valign="top" colspan="2"><font face="Arial" size="2">
		<p align="center"><strong><a href="'.$mosConfig_live_site . '/index.php?option=com_ezautos&Itemid='.$myItemid.'&task=detail&id='.$therow->id.'">'._EZAUTOS_READMORE.'</a></strong>&nbsp;&nbsp;|&nbsp;&nbsp;<strong><a href="'.$mosConfig_live_site . '/index.php?option=com_ezautos&Itemid='.$myItemid.'&task=unsubscribe">'._EZAUTOS_NOTIFICATIONS_UNSUBSCRIBE.'</a></strong></font></td>
	</tr>
</table>';
	$message.='</td></tr></table>';
	$message.='</body></html>';


	$message_body 		= stripslashes( $message );
	$mode				= "1";


	$sql='select * from #__ezautos_leads where cid='.$therow->cid.' and model='.$therow->model.' and maxprice>='.$therow->price.' and minyear<='.$therow->year.' and maxyear>='.$therow->year;
	$database->setQuery( $sql );
	$rows = $database->loadObjectList();

		if ($rows){

			foreach ($rows as $row) {
//				echo $row->email.'<br />';

				//Create the mail headers

				$headers ="MIME-Version: 1.0\n"; 
				$headers = "From: $ea_bizname\r\n";
				$headers .= "Reply-To: $ea_bizemail\r\n";
				$headers .= "X-Priority: 1\r\n";
				$headers .= "X-MSMail-Priority: High\r\n";
				$headers .= "X-Mailer: EZ Autos\r\n";


				// Build e-mail message format

				$message_header 	= $headers;
				$message 			= $message_body;
				$subject 	= stripslashes( $subject);


				$success = mosMail('', $ea_bizname, $row->email, $subject, $message, $mode, NULL, NULL, NULL, $ea_bizemail, $ea_bizname);

			}

		}

//mark off the vehicles as processed so they're not included in the next round

//		$database->setQuery( "update #__ezautos set email_status='1' WHERE id=$therow->id" );

//		if ( !$database->query() ) {
//			echo "<script> alert('" . $database->getErrorMsg()
//			. "'); window.history.go(-1); </script>\n";
//		}

	} // end the vehicle queries round

}



/* *********************************************************************************
                 SEND OUT THE EMAIL WITH LISTINGS DETAILS FOR A MEMBER
   ********************************************************************************* */


switch ($task) {

  case 'adminpostlistings':
    adminPostListings( $option, $id );
    break;

  case 'adminpostmultilistings':
    adminpostMultiListings( $option );
    break;

}


function adminPostListings ( $option, $id ) {
	global $database, $myItemid, $id, $gid, $task, $my, $ea_bizname, $ea_bizemail, $ea_sitetype, $ea_expmgmt, $ea_expsys, $mosConfig_live_site;
	global $ea_currencypos, $ea_currencysign;

include(EZADMIN_PATH."/config.ezautos.php");


	$query = "SELECT DISTINCT * FROM #__ezautos_profile"
    . "\n WHERE mid = $id"
	;
    $database->setQuery( $query );
    $database->loadObject($therow);

  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.owner=$id"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

	$subject= stripslashes ( $ea_bizname ) .' - '._EZAUTOS_LISTINGS_RPT;

	$message.='<html><head><meta http-equiv="Content-Type" content="text/html; '._ISO.'" /><title>'.$ea_bizname.' - '._EZAUTOS_LISTINGS_RPT.'</title></head>';
	$message.='<body style="background-color: #FFFFFF; padding: 10px;">';

	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td align="left"><br /><br /><h2>'.$therow->dealer_name;
if ($therow->dealer_company){
	$message.=' ('.$therow->dealer_company.')';
}
	$message.='</h2>';
	$message.='<h4>';

if ($therow->dealer_address2){
	$message.=$therow->dealer_address1.' '.$therow->dealer_address2.'<br />';
}

if ($therow->dealer_locality){
	$message.=$therow->dealer_locality.'<br />';
}

if ($therow->dealer_pcode){
	$message.=$therow->dealer_pcode;
}
	$message.='</h4>';
	$message.='</td></tr></table>';
	$message.='<table border="1" width="100%" style="border-collapse: collapse" bordercolor="#000000" cellpadding="4" cellspacing="0">';
	$message.='<tr><td>';
	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">';
	$message.='<tr>';

	$message.='<td width="20" align="left" bgcolor="#EFEFEF"><h4>ID#</h4></td>';
	$message.='<td align="left" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_MM.'</h4></td>';
	$message.='<td width="80" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_CATG.'</h4></td>';

if ( $ea_sitetype==0 ) {

	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_PRICE.'</h4></td>';
	$message.='<td width="60" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_AV.'</h4></td>';

}

	$message.='<td width="30" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_HITS.'</h4></td>';
	$message.='<td width="60" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_GENERIC_PUBSTATUS.'</h4></td>';
	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_DATE.'</h4></td>';
	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_UPDATE.'</h4></td>';

if ($ea_expmgmt==1 && $ea_expsys==1) {

	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_EXPDATE.'</h4></td>';

}
	$message.='</tr>';

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = $rows[$i];

		$number = $row->price;

		if ($ea_currencyformat==0) {

			$formatted_price = number_format($number);
		} else {
			$formatted_price = number_format($number, 2,",",".");
		}

	$message.='<tr><td colspan="6"><hr noshade color="#000000" size="1"></td></tr>';
	$message.='<tr>';

	$message.='<td valign="top" width="20" align="left">'.$row->id.'</td>';
	$message.='<td valign="top" align="left">'.$row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative.'</td>';
	$message.='<td valign="top" width="80" align="center">'.$row->category.'</td>';

if ( $ea_sitetype==0 ) {

	$message.='<td valign="top" width="70" align="center">';


	if ( $ea_currencypos==0 ) {
		$message.= $ea_currencysign.''.$formatted_price.' '.$row->price_type;
	} else {
		$message.= $formatted_price.' '.$ea_currencysign.' '.$row->price_type;
	}

if ( $row->freq ) {
 
	if ($row->freq == 1) {
		$message.= _EZAUTOS_RENTAL_DAILY;
	}
	if ($row->freq == 2) {
		$message.= _EZAUTOS_RENTAL_WEEKLY;
	}
	if ($row->freq == 3) {
		$message.= _EZAUTOS_RENTAL_FNIGHT;
	}
	if ($row->freq == 4) {
		$message.= _EZAUTOS_RENTAL_MONTH;
	}

}


	$message.='</td>';
	$message.='<td valign="top" width="60" align="center">'.$row->availability.'</td>';

}

	$message.='<td valign="top" width="30" align="center">'.$row->hits.'</td>';
	$message.='<td valign="top" width="60" align="center">';

if ($row->published == 1){
	$message.=_EZAUTOS_CONFIG_YES;
} else {
	$message.=_EZAUTOS_CONFIG_NO;
}
	$message.='</td>';
	$message.='<td valign="top" width="70" align="center">'.$row->listdate.'</td>';
	$message.='<td valign="top" width="70" align="center">'.strftime("%c",$row->lastupdate).'</td>';

if ($ea_expmgmt==1 && $ea_expsys==1) {
	$message.='<td width="70" align="center">';
if ($row->expdate) {
	$message.=strftime("%c",$row->expdate);
}
	$message.='</td>';
}

	$message.='</tr>';

}
	$message.='</table>';
	$message.='</td></tr></table>'.


	$database->setQuery( "SELECT COUNT(*) as count FROM #__ezautos WHERE owner=$id" );
	$ezcount = $database->loadObjectList();
	$ezTotal = $ezcount[0]->count;

	$database->setQuery( "SELECT SUM(hits) as sum FROM #__ezautos WHERE owner=$id" );
	$ezsum = $database->loadObjectList();
	$ezHits = $ezsum[0]->sum;

	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td align="left"><br /><br /><h2>'._EZAUTOS_NOTIFICATIONS_SUMMARY.':</h2>
<h4>'._EZAUTOS_NOTIFICATIONS_TOTALLISTINGS.': '.$ezTotal.'<br />
'._EZAUTOS_NOTIFICATIONS_TOTALHITS.': '.$ezHits.'</h4>
</td></tr></table>';

	$message.='</body></html>';

	$message_body 		= stripslashes( $message );

//Create the mail headers

	$headers ="MIME-Version: 1.0\n"; 
	$headers = "From: $ea_bizname\r\n";
	$headers .= "Reply-To: $ea_bizemail\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

		// Build e-mail message format
		$message_header 	= $headers;
		$message 			= $message_body;
		$subject 	= stripslashes( $subject);

	$success = mosMail('', $ea_bizname, $therow->dealer_email, $subject, $message, 1, NULL, NULL, NULL, $ea_bizemail, $ea_bizname);

	mosRedirect( 'index2.php?option=com_ezautos&task=profiles', _EZAUTOS_NOTIFICATIONS_EMAILSENT );

}



function adminPostMultiListings ( $option ) {
	global $database, $myItemid, $id, $gid, $task, $my, $ea_bizname, $ea_bizemail, $ea_sitetype, $ea_expmgmt, $ea_expsys, $mosConfig_live_site;
	global $ea_currencypos, $ea_currencysign;

include(EZADMIN_PATH."/config.ezautos.php");



	$query = "SELECT * FROM #__ezautos_profile"
	;
    $database->setQuery( $query );
    $therows = $database->loadObjectList();


	$k = 0;
	for ($i=0, $n=count( $therows ); $i < $n; $i++) {
		$therow = $therows[$i];

echo $therow->dealer_email.'<br />';


	$subject= stripslashes ( $ea_bizname ) .' - '._EZAUTOS_LISTINGS_RPT;

	$message.='<html><head><meta http-equiv="Content-Type" content="text/html; '._ISO.'" /><title>'.$ea_bizname.' - '._EZAUTOS_LISTINGS_RPT.'</title></head>';
	$message.='<body style="background-color: #FFFFFF; padding: 10px;">';

	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td align="left"><br /><br /><h2>'.$therow->dealer_name;
if ($therow->dealer_company){
	$message.=' ('.$therow->dealer_company.')';
}
	$message.='</h2>';
	$message.='<h4>';

if ($therow->dealer_address2){
	$message.=$therow->dealer_address1.' '.$therow->dealer_address2.'<br />';
}

if ($therow->dealer_locality){
	$message.=$therow->dealer_locality.'<br />';
}

if ($therow->dealer_pcode){
	$message.=$therow->dealer_pcode;
}
	$message.='</h4>';
	$message.='</td></tr></table>';
	$message.='<table border="1" width="100%" style="border-collapse: collapse" bordercolor="#000000" cellpadding="4" cellspacing="0">';
	$message.='<tr><td>';
	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">';
	$message.='<tr>';

	$message.='<td width="20" align="left" bgcolor="#EFEFEF"><h4>ID#</h4></td>';
	$message.='<td align="left" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_MM.'</h4></td>';
	$message.='<td width="80" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_CATG.'</h4></td>';

if ( $ea_sitetype==0 ) {

	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_PRICE.'</h4></td>';
	$message.='<td width="60" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_AV.'</h4></td>';

}

	$message.='<td width="30" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_HITS.'</h4></td>';
	$message.='<td width="60" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_GENERIC_PUBSTATUS.'</h4></td>';
	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_DATE.'</h4></td>';
	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_UPDATE.'</h4></td>';

if ($ea_expmgmt==1 && $ea_expsys==1) {

	$message.='<td width="70" align="center" bgcolor="#EFEFEF"><h4>'._EZAUTOS_LISTINGS_EXPDATE.'</h4></td>';

}
	$message.='</tr>';


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ma.make as makename, mo.model as modelname FROM #__ezautos as a"
	. "\n LEFT JOIN #__ezautos_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.owner=$therow->mid"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();


	$k2 = 0;
	for ($i2=0, $n2=count( $rows ); $i2 < $n2; $i2++) {
	$row = $rows[$i2];

echo $row->id.'<br />';

	$message.='<tr><td colspan="6"><hr noshade color="#000000" size="1"></td></tr>';
	$message.='<tr>';

	$message.='<td valign="top" width="20" align="left">'.$row->id.'</td>';
	$message.='<td valign="top" align="left">'.$row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative.'</td>';
	$message.='<td valign="top" width="80" align="center">'.$row->category.'</td>';

if ( $ea_sitetype==0 ) {

	$message.='<td valign="top" width="70" align="center">';

	if ( $ea_currencypos==0 ) {
		$message.= $ea_currencysign.''.$formatted_price.' '.$row->price_type;
	} else {
		$message.= $formatted_price.' '.$ea_currencysign.' '.$row->price_type;
	}

if ( $row->freq ) {
 
	if ($row->freq == 1) {
		$message.= _EZAUTOS_RENTAL_DAILY;
	}
	if ($row->freq == 2) {
		$message.= _EZAUTOS_RENTAL_WEEKLY;
	}
	if ($row->freq == 3) {
		$message.= _EZAUTOS_RENTAL_FNIGHT;
	}
	if ($row->freq == 4) {
		$message.= _EZAUTOS_RENTAL_MONTH;
	}

}

	$message.='</td>';
	$message.='<td valign="top" width="60" align="center">'.$row->availability.'</td>';

}

	$message.='<td valign="top" width="30" align="center">'.$row->hits.'</td>';
	$message.='<td valign="top" width="60" align="center">';

if ($row->published == 1){
	$message.=_EZAUTOS_CONFIG_YES;
} else {
	$message.=_EZAUTOS_CONFIG_NO;
}
	$message.='</td>';
	$message.='<td valign="top" width="70" align="center">'.$row->listdate.'</td>';
	$message.='<td valign="top" width="70" align="center">'.strftime("%c",$row->lastupdate).'</td>';

if ($ea_expmgmt==1 && $ea_expsys==1) {
	$message.='<td width="70" align="center">';
if ($row->expdate) {
	$message.=strftime("%c",$row->expdate);
}
	$message.='</td>';
}

	$message.='</tr>';

}
	$message.='</table>';
	$message.='</td></tr></table>'.


	$database->setQuery( "SELECT COUNT(*) as count FROM #__ezautos WHERE owner=$therow->mid" );
	$ezcount = $database->loadObjectList();
	$ezTotal = $ezcount[0]->count;

	$database->setQuery( "SELECT SUM(hits) as sum FROM #__ezautos WHERE owner=$therow->mid" );
	$ezsum = $database->loadObjectList();
	$ezHits = $ezsum[0]->sum;

	$message.='<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td align="left"><br /><br /><h2>'._EZAUTOS_NOTIFICATIONS_SUMMARY.':</h2>
<h4>'._EZAUTOS_NOTIFICATIONS_TOTALLISTINGS.': '.$ezTotal.'<br />
'._EZAUTOS_NOTIFICATIONS_TOTALHITS.': '.$ezHits.'</h4>
</td></tr></table>';

	$message.='</body></html>';

	$message_body 		= stripslashes( $message );

//Create the mail headers

	$headers ="MIME-Version: 1.0\n"; 
	$headers = "From: $ea_bizname\r\n";
	$headers .= "Reply-To: $ea_bizemail\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: EZ Autos\r\n";

		// Build e-mail message format
		$message_header 	= $headers;
		$message 			= $message_body;
		$subject 	= stripslashes( $subject);

	$success = mosMail('', $ea_bizname, $therow->dealer_email, $subject, $message, 1, NULL, NULL, NULL, $ea_bizemail, $ea_bizname);

}

//	mosRedirect( 'index2.php?option=com_ezautos', _EZAUTOS_NOTIFICATIONS_EMAILSENT );

}




?>