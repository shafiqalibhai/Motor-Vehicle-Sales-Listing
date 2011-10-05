<?php

/**
* FileName: mod_ezautos_latestsellers.php
* Date: 2-09-2007
* License: Commercial copyright
* Script Version #: 1.2
* EZ Autos Version #: 5.1.0 stable
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


$moduleclass_sfx    = $params->get( 'moduleclass_sfx' );
$count 		= intval( $params->get( 'count', 5 ) );
$horizspace = $params->get( 'horizspace' ) ;
$colcount 	= $params->get( 'colcount' ) ;
$colwidth 	= $params->get( 'colwidth' ) ;

// Find EZ Autos Itemid from the menu table

	$query = "SELECT * from #__menu"
	. "\n WHERE link = 'index.php?option=com_ezautos'"
	;
	$database->setQuery( $query );
	$id = $database->loadResult();
	$Itemid = $id;

echo '<table class="moduletable' . $moduleclass_sfx .'">';
echo "<tr>";

	$query = "SELECT * FROM #__ezautos_profile"
	. "\n WHERE published = 1 "
	. "\n ORDER BY prid DESC"
	. "\n LIMIT $count"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();


    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

    $rowcounter = 0;
    foreach($rows as $row) {
      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";


?>


<td valign="top" width="<?php echo $colwidth;?>"><div align="center">
<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;Itemid=$Itemid&amp;task=showprofile&amp;id=$row->mid");?>">
<?php if ( !$row->dealer_image ) { ?><img src="components/com_ezautos/profiles/nothumb.jpg" alt="" border="0" style="margin-top: <?php echo $horizspace;?>px; margin-bottom: <?php echo $horizspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="60" />
			<?php } else { ?><img src="components/com_ezautos/profiles/<?php echo $row->dealer_image;?>" alt="" border="0" style="margin-top: <?php echo $horizspace;?>px; margin-bottom: <?php echo $horizspace;?>px; padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="60" />
			<?php } ?>
</a>
</div></td>


<?php
	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }

}else{

?>

<td></td>

<?php

}

    echo "</tr></table>";


?>


