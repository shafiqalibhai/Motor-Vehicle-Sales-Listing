<?php

/**
* FileName: mod_ezautos_random.php
* Date: 14-10-2008
* License: Commercial copyright
* Script Version #: 3.14
* EZ Autos Version #: 5.2.0 stable
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

# Kill notices because people panic for no reason
error_reporting(E_ALL ^ E_NOTICE);

# call some core configuration variables:
global $mainframe;

DEFINE("EZADMIN_PATH8b","administrator/components/com_ezautos");

if (file_exists(EZADMIN_PATH8b."/config.ezautos.php")) {
  include(EZADMIN_PATH8b."/config.ezautos.php");
} else {
echo 'Configuration file not available';
}


$moduleclass_sfx    = $params->get( 'moduleclass_sfx' );
$count 		= intval( $params->get( 'count', 5 ) );
$horizspace = $params->get( 'horizspace' ) ;
$colcount 	= $params->get( 'colcount' ) ;
$colwidth 	= $params->get( 'colwidth' ) ;
$align		= $params->get( 'align' ) ;
$slimbox2 	= $params->get( 'slimbox2' ) ;
$popwidth3 	= $params->get( 'popwidth3' ) ;


echo '<table width="100%" class="moduletable' . $moduleclass_sfx .'">';
echo "<tr>";

if ( $ea_expmgmt==1 ) {

if ( $ea_expsys==0 ) {

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
    . "\n WHERE a.published = '1' AND a.hits<$ea_impnum ORDER BY RAND() LIMIT $count"
	;
	$database->setQuery( $query );

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
    . "\n WHERE a.published = '1' AND a.expdate>$currentdate ORDER BY RAND() LIMIT $count"
	;
	$database->setQuery( $query );

}

} else {

	$query = "SELECT a.*, ma.make as makename, mo.model as modelname"
	. "\n FROM #__ezautos AS a"
    . "\n LEFT JOIN #__ezautos_make as ma ON ma.maid=a.make"
    . "\n LEFT JOIN #__ezautos_model as mo ON mo.moid=a.model"
    . "\n WHERE a.published = '1' ORDER BY RAND() LIMIT $count"
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


if ($slimbox2 == 1) { ?><style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<?php if ($row->image1) { ?>
<div align="center"><a href="components/com_ezautos/<?php echo $ea_imagedirectory;?>/<?php echo $row->image1;?>" rel="lightbox" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>">
  <?php } ?>
  <?php if ($row->image1) { ?>
  <img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />
  <?php }else{ ?>
  <img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />
  <?php } ?>
  <?php if ($row->image1) { ?>
  </a>
  <?php } ?>
  <br />
  
  <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></a><br>
  <?php } elseif ($slimbox2 == 2) { ?>
</div>
<td valign="top"><div align="<?php echo $align;?>">
  <div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>" onMouseOver="return overlib('<img src=components/com_ezautos/<?php if ($row->image1) { ?><?php echo $ea_imagedirectory.'/'.$row->image1;?><?php }else{ ?><?php echo $ea_imagedirectory;?>/nothumb.gif<?php } ?> width=<?php echo $popwidth3;?> />', VAUTO, HAUTO, '<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative; ?>');" onMouseOut="return nd();">
    <?php if ($row->image1) { ?>
    </a><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>" onmouseover="return overlib('<img src=components/com_ezautos/<?php if ($row->image1) { ?><?php echo $ea_imagedirectory.'/'.$row->image1;?><?php }else{ ?><?php echo $ea_imagedirectory;?>/nothumb.gif<?php } ?> width=<?php echo $popwidth3;?> />', VAUTO, HAUTO, '<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative; ?>');" onmouseout="return nd();"><img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/<?php echo $row->image1;?>" border="0" width="<?php echo $ea_thumbwidth;?>" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />
    <?php }else{ ?>
    <img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" width="<?php echo $ea_thumbwidth;?>" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />
    <?php } ?>
    </a><br />
    <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></a><br />
    <br />
  </div>
</div></td>

<?php } else { ?>

<div align="center"></div>
<td valign="top" width="<?php echo $colwidth;?>"><div align="<?php echo $align;?>">
<?php if ($row->image1) { ?>
<div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>">
      <?php } ?>
      <?php if ($row->image1) { ?>
      <img src="components/com_ezautos/<?php echo $ea_imagedirectory;?><?php if ( $ea_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />
      <?php }else{ ?>
      <img src="components/com_ezautos/<?php echo $ea_imagedirectory;?>/th/nothumb.gif" border="0" style="padding-left: <?php echo $horizspace;?>px; margin-right: <?php echo $horizspace;?>px" width="<?php echo $ea_thumbwidth;?>" title="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" alt="<?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?>" />
      <?php } ?>
      <?php if ($row->image1) { ?>
  </a>
    <?php } ?>
    <br />
    <a href="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=detail&amp;id=$row->id&amp;Itemid=$myItemid");?>"><?php echo $row->year.' '.$row->makename.' '.$row->modelname.' '.$row->derivative;?></a><br />
    <br />
</div>
</div></td>

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
<div align="center"></div>
<div align="center"></div>
