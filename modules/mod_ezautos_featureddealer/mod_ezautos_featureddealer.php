<?php

/**
* FileName: mod_ezautos_featureddealer.php
* Date: 2-09-2007
* License: Commercial copyright
* Script Version #: 1.2
* EZ Autos Version #: 5.1.0 stable
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


# Kill notices because people panic for no reason
error_reporting(E_ALL ^ E_NOTICE);

# call some core configuration variables:
global $mainframe, $mosConfig_lang;

# Get the right language file

DEFINE("LANGUAGE_PATH3","modules/mod_ezautos_featureddealer");

if (file_exists(LANGUAGE_PATH3."/".$mosConfig_lang.".php")) {
  include(LANGUAGE_PATH3."/".$mosConfig_lang.".php");
} elseif (file_exists(LANGUAGE_PATH3."/english.php"))  {
  include(LANGUAGE_PATH3."/english.php");
} else {
echo "Language file is not available";
}

DEFINE("EZADMIN_PATH3","administrator/components/com_ezautos");

if (file_exists(EZADMIN_PATH3."/config.ezautos.php")) {
  include(EZADMIN_PATH3."/config.ezautos.php");
} else {
echo 'Configuration file not available';
}


$moduleclass_sfx    = $params->get( 'moduleclass_sfx' );

// Find EZ Autos Itemid from the menu table

	$query = "SELECT * from #__menu"
	. "\n WHERE link = 'index.php?option=com_ezautos'"
	;
	$database->setQuery( $query );
	$id = $database->loadResult();
	$Itemid = $id;

echo '<table class="moduletable' . $moduleclass_sfx .'">';
echo "<tr>";

  # Do the main database query to list the contents


	$query = "SELECT * FROM #__ezautos_profile"
    . "\n WHERE published = '1' ORDER BY RAND() LIMIT 1"
	;
	$database->setQuery( $query );



	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

	$rowcounter=0;
	foreach ( $rows as $row )

	{

?>

<td valign="top">
<div align="center"><span class="h2"><?php echo $row->dealer_name; ?></span></div>

<?php if ($row->dealer_company) { ?><div align="center"><strong><?php echo $row->dealer_company; ?></strong></div><?php } ?><br />


<div align="left">
			<?php if ( !$row->dealer_image ) { ?><img src="components/com_ezautos/profiles/nothumb.jpg" alt="" align="left" style="padding-left: 5px; margin-right: 5px" width="<?php echo $ea_thumbwidth;?>" />
			<?php } else { ?><img src="components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" style="padding-left: 5px; margin-right: 5px" width="<?php echo $ea_thumbwidth;?>" />
			<?php } ?>


<?php echo $row->dealer_info; ?><br /><br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$Itemid&amp;task=showprofile&amp;id=$row->mid");?>"><?php echo _MOD_EZAUTOS_FDREADMORE;?></a><br /><br /></div></td>


<?php
                    $rowcounter++;
                }

}else{

?>

<td></td>

<?php

}


?>
</tr>
</table>
<br />

