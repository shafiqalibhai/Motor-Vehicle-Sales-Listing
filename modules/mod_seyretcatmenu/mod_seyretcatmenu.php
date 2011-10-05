<?php
/**
* Mustafa Dindar
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

global $mosConfig_offset, $mosConfig_live_site, $database;


		$componentname = 'com_seyret';
		$database->setQuery( "SELECT id FROM #__menu WHERE link LIKE '%".$componentname."%'" );
		$rows = $database->loadObjectList();
		$seyretitemid = $rows[0]->id;
		
		

?>
<div style="text-align:left;">
<?php
		$menuclass = 'mainlevel'. $params->get( 'class_sfx' );
		if ($level > 0) {
			$menuclass = 'sublevel'. $params->get( 'class_sfx');
		}
		
		

		$database->setQuery("SELECT * FROM #__seyret_categories");
		$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
			$catid = $cat->catid;
			$catname = $cat->categoryname;
			$rawcatid=$catid;
		
			$catid=str_replace( "**", "a", $catid );
			$twostarrightposition=strrchr($catid,"a");
			
			if ($twostarrightposition<>""){
				$newcatid = str_replace( "*", "", $twostarrightposition );
			} else {
				$newcatid = $catid;	
			}
			
			$cid = str_replace( "#", "", $newcatid );	
			$cid = str_replace( "a", "", $cid );
			$cid = str_replace( "*", "", $cid );	

		
			$levels=substr_count($rawcatid,"*");

				if ($levels==2){

				echo "<a href=\"index.php?option=com_seyret&catid=$cid&Itemid=$seyretitemid\" class=\"mainlevel\">".$catname."</a>";
				
				seyretcatmenudisplay_children($rawcatid, $seyretitemid);


				}
		}



function seyretcatmenudisplay_children($parent, $seyretitemid) {
global $database;
   // retrieve all children of $parent
	$database->setQuery("SELECT * FROM #__seyret_categories WHERE parentcat='$parent'");
	$cat = $database->loadObjectList();
		foreach ($cat as $cat) {
		$catid = $cat->catid;
		$catname = $cat->categoryname;
		$rawcatid=$catid;
		
		
		$catid=str_replace( "**", "a", $catid );
		$twostarrightposition=strrchr($catid,"a");
		if ($twostarrightposition<>""){
			$newcatid = str_replace( "*", "", $twostarrightposition );
		} else {
			$newcatid = $catid;	
		}
		
		$cid = str_replace( "#", "", $newcatid );	
		$cid = str_replace( "a", "", $cid );
		$cid = str_replace( "*", "", $cid );

		
		echo "<a href=\"index.php?option=com_seyret&catid=$cid&Itemid=$seyretitemid\" class=\"sublevel\">".$catname."</a>";
   
		}
}

function seyretcatmenucount_children($rawcatid){
global $database;
   // retrieve all children of $parent
	$database->setQuery("SELECT * FROM #__seyret_categories WHERE parentcat='$rawcatid'");
	$total = $database->loadResult(); //line count
	return $total;

}



?>

</div>