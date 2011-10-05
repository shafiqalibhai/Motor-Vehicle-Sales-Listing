<?php
//Seyret Component v.0.2//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2
**/	



// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );


function renderrepliestovideo($id, $ajax){

global $database, $mosConfig_live_site, $mosConfig_absolute_path, $Itemid;

require($mosConfig_absolute_path.'/administrator/components/com_seyret/seyret_config.php');


$file="/seyretfiles/cache/rpl/".md5($id).".xml";

if (!file_exists($mosConfig_absolute_path.$file)) generatereplyxml($id);




if (file_exists($mosConfig_absolute_path.$file)){


	if ($ajax=="notajax") {
		$repliesslider="


		<script type=\"text/javascript\">
			
		window.addEvent('load', function(){

			
				var mysecSlide = new Fx.Slide('videoreplies');
				mysecSlide.hide();
				$('videoreplies').setStyle('display', 'block');
				
				$('videorepliestoggler').addEvent('click', function(e){
					e = new Event(e);
					mysecSlide.toggle();
					e.stop();
				});		
			

				
			});
				var BSFO = { movie:\"".$mosConfig_live_site."/components/com_seyret/slider.swf\", 
				width:\"".$videowidth."\", 
				height:\"100\", 
				wmode:\"transparent\",
				flashvars:\"thumbscale=60&wdth=".$videowidth."&siteurl=".$mosConfig_live_site."&videoid=".$id."&file=".$file."\",
				majorversion:\"8\", build:\"0\", xi:\"true\" };
				
				UFO.create(BSFO, \"videoreplies\");
		</script>	

		
		<div id=\"hiddenreplylist\"><div id=\"videorepliestoggler\">".SHOWREPLIES."</div><div id=\"videoreplies\" style=\"display:none;\">
</div></div>
			";	
	
	} else {
		$repliesslider="
		<div id=\"script\">
		
		
				var mysecSlide = new Fx.Slide('videoreplies');
				mysecSlide.hide();
				$('videoreplies').setStyle('display', 'block');
				
				$('videorepliestoggler').addEvent('click', function(e){
					e = new Event(e);
					mysecSlide.toggle();
					e.stop();
				});	
				
				
				var BSFO = { movie:\"".$mosConfig_live_site."/components/com_seyret/slider.swf\", 
				width:\"".$videowidth."\", 
				height:\"100\", 
				wmode:\"transparent\",
				flashvars:\"thumbscale=60&wdth=".$videowidth."&siteurl=".$mosConfig_live_site."&videoid=".$id."&file=".$file."\",
				majorversion:\"8\", build:\"0\", xi:\"true\" };
				
				UFO.create(BSFO, \"videoreplies\");
		</div>	
		
		<div id=\"hiddenreplylist\"><div id=\"videorepliestoggler\">".SHOWREPLIES."</div><div id=\"videoreplies\"></div></div>
			
			";
	
	}


		

} else {
	$repliesslider="";
}



	return $repliesslider;

}
?>