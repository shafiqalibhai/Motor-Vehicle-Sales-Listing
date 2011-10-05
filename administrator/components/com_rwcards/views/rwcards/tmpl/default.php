<?php 
/**
* RWCards Template for RWCards
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

defined('_JEXEC') or die('Restricted access'); ?>

<?php
$gd = array();
$imageDir = array(JPATH_ROOT . "/images/stories/cards");
$imageDirExists = (JPath::find($imageDir, ""));
?>
<form action="index.php" method="post" name="adminForm">
<div id="editcell">
	<table class="adminlist">
	<thead>
		<tr>
			<th colspan="2">
				<?php echo JText::_( 'RWCards' ) . " " . JText::_( 'VERSION' ); ?>
			</th>
		</tr>			
	</thead>
		<tr>
			<td class="key" valign="top">GD Support<br /> <?php echo JText::_( 'GD_MUST_BE_ENABLED'); ?></td>
			<td>
				<?php $gd = gd_info(); 
				if (count($gd) > 0)
				{
					echo "GD Version " . $gd["GD Version"] . "<br \>";
					echo "FreeType Support: "; echo ($gd["FreeType Support"]) ? "<span style='color:green'>" . JText::_( 'YES' )  : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span><br \>";
					echo "T1Lib Support: "; echo ($gd["T1Lib Support"]) ? "<span style='color:green'>" . JText::_( 'YES' ) : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span><br \>";
					echo "GIF Read Support: "; echo ($gd["GIF Read Support"]) ? "<span style='color:green'>" . JText::_( 'YES' ) : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span><br \>";
					echo "GIF Create Support: "; echo ($gd["GIF Create Support"]) ? "<span style='color:green'>" . JText::_( 'YES' ) : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span><br \>";
					echo "JPG Support: "; echo ($gd["JPG Support"]) ? "<span style='color:green'>" . JText::_( 'YES' ) : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span><br \>";
					echo "PNG Support: "; echo ($gd["PNG Support"]) ? "<span style='color:green'>" . JText::_( 'YES' ) : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span><br \>";
					echo "WBMP Support: "; echo ($gd["WBMP Support"]) ? "<span style='color:green'>" . JText::_( 'YES' ) : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span><br \>";
					echo "XBM Support: "; echo ($gd["XBM Support"]) ? "<span style='color:green'>" . JText::_( 'YES' ) : "<span style='color:red'>" . JText::_( 'NO' ); echo "</span>";
				}
				else
				{
					echo JText::_( 'NO_GD' );
				}
				?>
			</td>
		</tr>
		<tr>
			<td valign="top"><?php echo JText::_( 'IMAGE_DIRECTORY'); ?></td>
			<td><?php echo ($imageDirExists) ? "<span style='color:green'>" . JText::_( 'IMAGE_DIRECTORY_CREATED') : "<span style='color:red'>" . JText::_( 'IMAGE_DIRECTORY_NOT_CREATED'); ?></span></td>
	</table>
</div>

<input type="hidden" name="option" value="com_rwcards" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="rwcards" />
</form>
