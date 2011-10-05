<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

 <?php >



function newListings( $option, &$rows ) {

global $database, $myItemid, $mainframe, $id, $mosConfig_live_site, $ea_currencysign, $ea_listtemplate;

global $ea_thumbwidth, $ea_perpage, $ea_newlist, $ea_imagedirectory, $ea_thumbcreation, $ea_sitetype, $ea_currencyformat, $ea_currencypos;

global $ea_colcount, $ea_colwidth, $ea_shortlist, $mosConfig_absolute_path;

global $ea_watermark, $ea_jreviews, $ea_textalign;



include(EZADMIN_PATH."/config.ezautos.php");

DEFINE("JREV_PATH","/components/com_jreviews_everywhere");



if (!$ea_colcount){

$colcount 	= "4";

} else {

$colcount 	= $ea_colcount;

}

if (!$ea_colwidth){

$colwidth 	= "25%";

} elseif ($ea_colwidth && !$ea_colcount){

$colwidth 	= "25%";

} else {

$colwidth 	= $ea_colwidth;

}







$mainframe->appendMetaTag( 'title', _EZAUTOS_NEW_LISTINGS );

$mainframe->setPageTitle( _EZAUTOS_NEW_LISTINGS );

if ($ea_listtemplate) {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/".$ea_listtemplate);

} else {

DEFINE("TEMPLATE_PATH","components/com_ezautos/forms/list_templates/template2");

}





?>

<!--saad-->

<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >

		<tr>

			<td   background="<?php echo $mosConfig_live_site;?>/components/com_ezautos/images/pageHeading.gif"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><strong>&nbsp;&nbsp;<?php echo _EZAUTOS_NEW_LISTINGS;?></strong></font></td>

		</tr>

		

</table>



<?php





	if ($ea_listtemplate == 'multicolumn') {





echo "<table border='0' width='100%' bgcolor='#FFFFFF'>";

echo "<tr>";



    $rowcounter = 0;

    foreach($rows as $row) {

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	$rowcounter++;

	}

    if ($rowcounter%$colcount<>0) {

      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {

        echo "<td width='$colwidth' valign='top'> </td>";

      }

    }

    echo "</tr></table>";



} else {



	$k = 0;

	for ($i=0, $n=count( $rows ); $i < $n; $i++) {

	$row = &$rows[$i];



		$number = $row->price;



		if ($ea_currencyformat==0) {



			$formatted_price = number_format($number);

		} else {

			$formatted_price = number_format($number, 2,",",".");

		}



if (file_exists(TEMPLATE_PATH.'/listshort.ezautos.php')) {

  include(TEMPLATE_PATH.'/listshort.ezautos.php');

} else {

echo _EZAUTOS_TEMPLATE_ERROR;  

}



	} 



}





}

?>

</body>

</html>

