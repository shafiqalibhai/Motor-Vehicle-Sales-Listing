<?php

/**
* FileName: mod_ezautos_new.php
* Date: 14-10-2008
* License: Commercial copyright
* Script Version #: 3.13
* EZ Autos Version #: 5.2.0 stable
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

# Kill notices because people panic for no reason
error_reporting(E_ALL ^ E_NOTICE);

# call some core configuration variables:
global $mainframe;


DEFINE("EZADMIN_PATH6b","administrator/components/com_ezautos");

if (file_exists(EZADMIN_PATH6b."/config.ezautos.php")) {
  include(EZADMIN_PATH6b."/config.ezautos.php");
} else {
echo 'Configuration file not available';
}

$moduleclass_sfx    = $params->get( 'moduleclass_sfx' );
$count 		= intval( $params->get( 'count', 5 ) );
$horizspace = 5;//$params->get( 'horizspace' ) ;
$align 	= $params->get( 'align' ) ;
$colcount 	= $params->get( 'colcount' ) ;
$colwidth 	= $params->get( 'colwidth' ) ;
$slimbox 	= $params->get( 'slimbox' ) ;
$popwidth2 	= 70;//$params->get( 'popwidth2' ) ;


echo '<table width="97%" class="moduletable' . $moduleclass_sfx .'">';
echo '<tr>';


if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published = 1 AND a.hits<$ea_impnum"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $count"
	;
	$database->setQuery( $query );

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published = 1 AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $count"
	;
	$database->setQuery( $query );

}

} else {

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
	. "\n WHERE a.published = 1"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $count"
	;
	$database->setQuery( $query );

}

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {


    $rowcounter = 0;
    foreach($rows as $row) {
      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if ($slimbox == 1) { ?>
<td valign="top" width="<?php echo $colwidth;?>" ><div align="<?php echo $align;?>"><br />
<?php if ($row->image1) { ?><a href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" rel="lightbox" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>"><?php } ?><?php if ($row->image1) { ?>
<img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" height="70" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php }else{ ?>
<img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php } ?><?php if ($row->image1) { ?></a><?php } ?>
<br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></a><br />
<br /></div></td>

<?php } elseif ($slimbox == 2) { ?>

<td valign="top" width="<?php echo $colwidth;?>"><div align="<?php echo $align;?>"><br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>" onmouseover="return overlib('<img src=components/com_ezautos/<?php if ($row->image1) { ?><?php echo $ea_imagedirectory.'/'.$row->image1;?><?php }else{ ?><?php echo $ea_imagedirectory;?>/nothumb.gif<?php } ?> width=<?php echo $popwidth2;?> />', VAUTO, HAUTO, '<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative; ?>');" onmouseout="return nd();"><?php if ($row->image1) { ?>
<img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image1;?>" border="0" width="<?php echo $ea_thumbwidth;?>" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php }else{ ?>
<img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" width="<?php echo $ea_thumbwidth;?>" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php } ?></a><br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></a><br /><br /></div></td>

<?php } else { ?>

<td valign="top" width="<?php echo $colwidth;?>"><div align="<?php echo $align;?>"><br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php if ($row->image1) { ?>
<img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php }else{ ?>
<img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" /><?php } ?></a>
<br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></a><br /><br /></div></td>

<?php

}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }

    echo "</tr></table>";

}else{


}


?>