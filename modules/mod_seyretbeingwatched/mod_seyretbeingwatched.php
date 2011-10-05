<?php
//Latest Seyret Module With Javascript Effects v.0.2//
/**
* Content code
* @package Latest Seyret
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ latest seyret module is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2
**/	

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

global $mosConfig_live_site;

?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_seyret/ufo.js"></script>
<?php 
		
		
$width  		= $params->get( 'width', '350' );
$height  		= $params->get( 'height', '260' );
$refresh  		= $params->get( 'refresh', '15' );
$width  		= $params->get( 'width', '550' );
$columncount  	= $params->get( 'columncount', '3' );
$rowcount  		= $params->get( 'rowcount', '2' );
$thumbscale  	= $params->get( 'thumbscale', '80' );
$showreflection = $params->get( 'showreflection', '0' );
$frontcolor  		= $params->get( 'frontcolor', 'F4F4F4' );
$basecolor  		= $params->get( 'basecolor', 'FFFFFF' );
$borderwidth  		= $params->get( 'borderwidth', '1' );
$bordercolor  		= $params->get( 'bordercolor', 'CBCBCB' );
$xround  		= $params->get( 'xround', '10' );
$yround  		= $params->get( 'yround', '10' );
$spinnerred  		= $params->get( 'spinnerred', '151' );
$spinnergreen  		= $params->get( 'spinnergreen', '151' );
$spinnerblue  		= $params->get( 'spinnerblue', '151' );
$spnw  		= $params->get( 'spnw', '40' );
$spnh  		= $params->get( 'spnh', '40' );
$siteurl  		= $params->get( 'siteurl', $mosConfig_live_site );
$textcolor  		= $params->get( 'textcolor', $mosConfig_live_site );
$textbold  		= $params->get( 'textbold', $mosConfig_live_site );

?>
<div id="ufoSeyretModuleBW" style="text-align:center; height:<?php echo $height;?>px;">


</div>


<script type="text/javascript">
		var FO = { movie:"<?php echo $mosConfig_live_site; ?>/modules/mod_seyretbeingwatched/seyretbeingwatched.swf", 
		width:"<?php echo  $width; ?>", 
		height:"<?php echo $height ;?>", 
		flashvars:"frontcolor=0x<?php echo $frontcolor; ?>&basecolor=0x<?php echo $basecolor; ?>&borderwidth=<?php echo $borderwidth; ?>&bordercolor=0x<?php echo $bordercolor; ?>&xround=<?php echo $xround;?>&yround=<?php echo $yround;?>&spinnerred=<?php echo $spinnerred;?>&spinnergreen=<?php echo $spinnergreen;?>&spinnerblue=<?php echo $spinnerblue;?>&spnw=<?php echo $spnw;?>&spnh=<?php echo $spnh;?>&columncount=<?php echo $columncount;?>&rowcount=<?php echo $rowcount;?>&thumbscale=<?php echo $thumbscale;?>&textcolor=0x<?php echo $textcolor;?>&textbold=<?php echo $textbold;?>&showreflection=<?php echo $showreflection;?>&refresh=<?php echo $refresh;?>&listtype=beingwatched&siteurl=<?php echo $siteurl;?>",
		majorversion:"8", build:"0", xi:"true" };
		UFO.create(FO, "ufoSeyretModuleBW");
</script>
