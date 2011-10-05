<?php
/**
* @version $Id: jumi_demo.php 23 2008-11-28 13:54:32Z martin2hajek $
* @package Jumi
* @copyright (C) 2008 Martin Hajek
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/  
defined('_JEXEC') or die( "Direct Access Is Not Allowed" );
?>
<p><strong>Hello in the world of Jumi!</strong></p>
<p>This is the default Jumi demo file.</p>
<p>Your current content of $jumi[] array is:</p>
<?php
   if (!empty($jumi)){
      echo "<ul>\n";
      foreach ($jumi as $key => $value) {
   	  echo '<li>$jumi['.$key.'] = '.$value.'</li>';
   	}
   	echo "</ul>\n";
	}
	else {
		echo "<p>empty</p>";
	}
?>
<p>Jumi is a set of custom code extensions for CMS Joomla! Jumi comes as a component, a plugin and a module.</p>
<p>Jumi brings you sufficient power, flexibility and simplicity for quick development and reliable operation of your applications running under Joomla!</p>
<p>Jumi resources: <a href="http://jumi.vedeme.cz">Downloads & guides</a>, <a href="http://edo.webmaster.am/jumi">Tips & tricks</a>.</p>
