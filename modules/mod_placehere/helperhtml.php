<?php

/**
* @version		mod_placehere 
* @package		Joomla
* @copyright	Copyright (C) 2007 Eike Pierstorff eike@diebesteallerzeiten.de
* @license		GNU/GPL, see LICENSE.php
*
* File last changed 17/07/08
*/

class modPlaceHereHTML
{
 function buildTablefromArray($rows,$params) {
  // ****************** Output **********************/
   
	 if(count($rows)<1) { return; }   

	 $moduleclass_sfx			= $params->get("moduleclass_sfx","");
	 $leading					= $params->get("leading",1);
	 $num_of_cols				= $params->get("columns",2);
	 $w							= $params->get("containerwidth",false);
	 $width = "";
	 if($w) {
	  $width = ' width="' . $w . '"'; 
	 }
   echo '<div class="mod_placehere' . $moduleclass_sfx . '">';
	 echo '<table ' . $width . '>';
	 for($i=0;$i<$leading;$i++)  {
	  if($rows[$i]) {
	  echo '<tr>';
	   echo '<td valign="top" colspan="' . $num_of_cols . '" class="mod_placehere_leading">' . $rows[$i] . '</td>';
	  echo '</tr>';		
		}
	 }
	 // following paragraphs
	 // How many table rows ?
	 $num_of_trs = count($rows);
	 $width = 100/$num_of_cols;
	 
	 /* Fix by n7Epsilon: Don't run the loop if there are
	 no more paragraphs to show other than the leading one */
	 if ($num_of_trs > (int)$leading)
	 {   
		 for($i=$leading;$i<$num_of_trs;$i++) {
		  echo '<tr>';
			for($z=0;$z<$num_of_cols;$z++) {
				if(isset($rows[$i])) {
		     echo '<td valign="top" width="' . $width . '%" class="mod_placehere_following">' . $rows[$i] . '</td>'; 			
				} else {
				 echo '<td width="' . $width . '%" class="mod_placehere_following">&nbsp;</td>';
				}
			$i++;			
			}
		  echo '</tr>';
			$i--;		
		 }
	 }
	 echo '</table>';
	 echo '</div>';	 
 // ****************** Output **********************/ 

 }
 
function buildDivsfromArray($rows,$params) {
  // ****************** Output **********************/
   
     // no content
	 if(count($rows)<1)
	 	return;
     
	 $moduleclass_sfx			= $params->get("moduleclass_sfx","");	 
	 $leading					= $params->get("leading",1);
	 $num_of_cols				= $params->get("columns",2);
	 $w							= $params->get("containerwidth",false);
	
	 $width = "";
	 if($w) {
	  $width = ' width="' . $w . '"'; 
	 }
	 echo '<div ' . $width . ' class="mod_placehere' . $moduleclass_sfx . '">';
	 for($i=0;$i<$leading;$i++)  {
	  if($rows[$i]) {
	   echo '<div class="mod_placehere_leading">' . $rows[$i] . '</div>';
		}
	 }
	 // following paragraphs
	 // How many table rows ?
	 $num_of_trs = count($rows);
	 $width = 100/$num_of_cols;
   
     /* Fix by n7Epsilon: Don't run the loop if there are
	 no more paragraphs to show other than the leading one */
	 if ($num_of_trs > (int)$leading)
	 {
		 for($i=$leading;$i<$num_of_trs;$i++) {
			for($z=0;$z<$num_of_cols;$z++) {
				if(isset($rows[$i])) {
		     	echo '<div style="float:left;width:' . $width . '%" class="mod_placehere_following">' . $rows[$i] . '</div>'; 			
				} else {
				 echo '<div style="float:left;width:' . $width . '%" class="mod_placehere_following">&nbsp;</div>';
				}
				
			$i++;			
			} 
			echo '<br style="clear:both" />';	
			$i--;		
		 }
	 }
	
	 echo '</div>';
	 
 // ****************** Output **********************/ 

 } 
}
?>
