<?php
/**
 * RWCards
 * @author Ralf Weber (email ralf@weberr.de / site www.weberr.de)
 * @package RWCards
 * @version     $Id$
 * @copyright Copyright (C) 2003-2008 LoadBrain
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 *
 * This is free software
 **/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


function com_install ()
{
	@chdir(JPATH_ROOT . "/images/stories/cards");
	$oldumask = umask(0);
	@mkdir(JPATH_ROOT . "/images/stories/cards/", 0777);
	umask($oldumask);
		 
	//captcha tmp dir
	@chdir(JPATH_ROOT  . "/components/com_rwcards/captcha");
	$oldumask = umask(0);
	@mkdir(JPATH_ROOT . "/components/com_rwcards/captcha/__temp__", 0777);
	umask($oldumask);
?>
  <center>
  <table width="100%" border="0">
    <tr>
      <td><img src="components/com_rwcards/images/admin_loadbrain.gif"></td>
      <td>
        <strong>RWCards - A Joomla E-Card Component</strong><br/>
        <font class="small">&copy; Copyright 2003 - 2008 by Ralf Weber<br/>
        Released under the terms and conditions of the <a href="index2.php?option=com_admisc&task=license">GNU General Public License</a>.</font><br/>
      </td>
    </tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
    <tr>
      <td background="E0E0E0" style="border:1px solid #999;color:green;font-weight:bold;" colspan="2">Installation finished.</td>
    </tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
  </table>
  </center>
<?php	   
}
?>
