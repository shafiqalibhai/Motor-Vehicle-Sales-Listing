<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_ignitiongallery
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script type="text/javascript">
var pwi_username = "<?php echo $row->pusername ;?>";
var pwi_photosize = "<?php echo $row->pphotosize ;?>"; //return maximum size picture (see for supported format:  http://code.google.com/apis/picasaweb/reference.html#Parameters)
var pwi_thumbsize = "<?php echo $row->pthumbsize ;?>"; //size thumb /cropped(see for supported format:  http://code.google.com/apis/picasaweb/reference.html#Parameters)
var pwi_albumcols = "<?php echo $row->palbumcols ;?>"; // distribute thumbs on main page over x collums
var pwi_cols ="<?php echo $row->pcols ;?>"; // distribute thumbs on albumphotos page over x collums
var pwi_maxresults = "<?php echo $row->pmaxresults ;?>"; //maximum of pictures on albumphotos page
var pwi_maxalbums = "<?php echo $row->pmaxalbums ;?>"; //maximum of pictures on albumphotos page
var pwi_container_div = "#piccontainer";

function formatDate(dt) {
	var months = new Array(12);
	months[0] = "<?php echo JText::_( 'January' ) ?>";
	months[1] = "<?php echo JText::_( 'February' ) ?>";
	months[2] = "<?php echo JText::_( 'March' ) ?>";
	months[3] = "<?php echo JText::_( 'April' ) ?>";
	months[4] = "<?php echo JText::_( 'May' ) ?>";
	months[5] = "<?php echo JText::_( 'June' ) ?>";
	months[6] = "<?php echo JText::_( 'July' ) ?>";
	months[7] = "<?php echo JText::_( 'August' ) ?>";
	months[8] = "<?php echo JText::_( 'September' ) ?>";
	months[9] = "<?php echo JText::_( 'October' ) ?>";
	months[10] = "<?php echo JText::_( 'November' ) ?>";
	months[11] = "<?php echo JText::_( 'December' ) ?>";
	var today = new Date(Number(dt));
	var year = today.getYear();
	if (year < 1000) {
		year += 1900;
	};
	return (today.getDate() + " " + months[(today.getMonth())]+ " " + year);
}

function albums(j) { //returns the list of all albums for the user
	var scAlbums = new StringCat();
	scAlbums.push("<table align='center'><tr><td colspan='" + pwi_albumcols + "'><h3><?php echo JText::_( 'Albums' ) ?></h3></td></tr><tr>");
	for (var i = 0; i < j.feed.entry.length; i++) {
		var id_base = j.feed.entry[i].gphoto$id.$t;
		var album_date = formatDate(j.feed.entry[i].gphoto$timestamp.$t);
		scAlbums.push("<td valign=top align='center'><span class='small' a href='javascript:void(0)' onclick='javascript:$.historyLoad(\"" + id_base + "/1\")'><img src='" + j.feed.entry[i].media$group.media$thumbnail[0].url + "?imgmax=" + pwi_thumbsize + "&crop=0' class='pwimages' /></a>");
		scAlbums.push("<br /><a class='small' href='javascript:void(0)' onclick='javascript:$.historyLoad(\"" + id_base + "/1\")'>" + j.feed.entry[i].title.$t + "</a><br />" + album_date + "&nbsp;&nbsp;&nbsp;&nbsp;" + j.feed.entry[i].gphoto$numphotos.$t + " <?php echo JText::_( 'photos' ) ?></center></span></td>");
		if (i % pwi_albumcols == (pwi_albumcols - 1)) {
			scAlbums.push("</tr><tr><td colspan='" + pwi_albumcols + "'></td></tr><tr>");
		}
	}
	scAlbums.push("</tr></table>");
	pwi_storage_albums = scAlbums.toString();
	show(false, pwi_storage_albums);
}


function album(j) { //returns all photos in a specific album
	var scPhotos = new StringCat();
	 //get the number of photos in the album
	var np = j.feed.openSearch$totalResults.$t;
	var loc = j.feed.gphoto$location.$t;
	var desc = j.feed.subtitle.$t;
	var album_date = formatDate(j.feed.gphoto$timestamp.$t);
	var item_plural = "<?php echo JText::_( 's' ) ?>";
	if (np == "1") {
		item_plural = "";
	}
	var len = j.feed.entry.length;
	pwi_currAlbumTitle = j.feed.title.$t;

	scPhotos.push("<center><table border=0><tr>");
scPhotos.push("<tr><td colspan='" + pwi_cols + "'><a class='standard' href='javascript:void(0)' onclick='$.historyLoad(\"\");'><<< <?php echo JText::_( 'Albums' ) ?></a> &gt; " + j.feed.title.$t + "<br/>");	
	scPhotos.push("<blockquote><div style='margin-left:3px'><h4>" + j.feed.title.$t + "</h4></div>");
	scPhotos.push("<div style='margin-left:3px'><i>" + np + " <?php echo JText::_( 'photo' ) ?>" + item_plural + ", " + album_date + ", " + loc + "</i></div>");
	scPhotos.push("<div style='margin-left:3px'><b>" + desc + "</b></div>");
	scPhotos.push("</td></tr><tr>");
	
	 //create paging navigation
	pageCount = (np / pwi_maxresults);
	var ppage = "<?php echo JText::_( 'photos' ) ?> | ",
	npage = "| <?php echo JText::_( 'next' ) ?>";
	if (pwi_page > 1) {
		ppage = "<a href='javascript:void(0)' onclick='$.historyLoad(\"" + pwi_currAlbum + "/" + (parseInt(pwi_page) - 1) + "\")'><?php echo JText::_( 'previous' ) ?></a> | "
	};
	if (pwi_page < pageCount) {
		npage = "| <a href='javascript:void(0)' onclick='$.historyLoad(\"" + pwi_currAlbum + "/" + (parseInt(pwi_page) + 1) + "\")'><?php echo JText::_( 'next' ) ?></a>"
	};

	var navRow = new StringCat();
	navRow.push("<tr><td colspan='" + pwi_cols + "'>" + ppage + "<?php echo JText::_( 'Page' ) ?> ");
	for (var i = 1; i < pageCount + 1; i++) {	
		if (i == pwi_page) {
			navRow.push("<b>[" + (i) + "]</b> ");
		} else {
			navRow.push("<a href='javascript:void(0)' onclick='$.historyLoad(\"" + pwi_currAlbum + "/" + i + "\")'>" + (i) + "</a> ");
		};
	};
	navRow.push(npage + "</td></tr>");
	scPhotos.push(navRow.toString());
	for (var i = 0; i < len; i++) {
		var img_base = j.feed.entry[i].content.src;
		var id_base = j.feed.entry[i].gphoto$id.$t;
		var desc = j.feed.entry[i].summary.$t;
		var photoDate = j.feed.entry[i].exif$tags.exif$time ? formatDateTime(j.feed.entry[i].exif$tags.exif$time.$t) : j.feed.entry[i].published.$t;
		desc = photoDate + " - " + desc;
		scPhotos.push("<td valign='top'><center><a href='" + img_base + "?imgmax=" + pwi_photosize + "&crop=0' class='lightbox' title='" + desc + "'><img src='" + img_base + "?imgmax=" + pwi_thumbsize + "&crop=1' class='pwimages'/></a>");
		scPhotos.push("</center></td>");
		if (i % pwi_cols == (pwi_cols - 1)) {
			scPhotos.push("</tr><tr><td colspan=" + pwi_cols + "></td></tr><tr>");
		}
	}
	scPhotos.push("</tr>"+navRow+"</table></center>");
	pwi_storage_photos = scPhotos.toString();
	show(false, pwi_storage_photos);
}


function show(loading, data) {
	if (loading) {
		$(pwi_container_div).fadeOut('slow');
		$("#maincontent").block("<img src=\"<?php echo JURI::root()?>components/com_morfeoshow/images/loading.gif\"> <?php echo JText::_( 'Loading' ) ?> ...", {
			border: '3px solid #ccc'
		});
	} else {
		$("#maincontent").unblock();
		$(pwi_container_div).html(data).fadeIn('fast');
		$('a.lightbox').lightBox({
		overlayBgColor: '#fff',
		overlayOpacity: 0.6,
		imageLoading: "<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/load.gif",
		imageBtnClose:"<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/close.png",
		imageBtnPrev: "<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/prev.gif",
		imageBtnNext: "<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/next.gif",
		imageBlank:	"<?php echo JURI::root(true)?>/components/com_morfeoshow/tpl/resources/lightbox/blank.gif",
		containerResizeSpeed: 350,
		txtImage: "<?php echo JText::_( 'Images' ) ?>",
		txtOf: "<?php echo JText::_( 'of' ) ?>"
   });
	}
}

$(document).ready(function() {
	if(pwi_username == "<?php echo JText::_( 'picasa username missing' ) ?>"){
		alert('<?php echo JText::_( 'You must set one picasa username' ) ?>');
	}else{
		$.extend($.blockUI.defaults.overlayCSS, {
			backgroundColor: '#fff'
		});
		$.ajaxSetup({
			cache: true
		});
		$.historyInit(fromHistory);
	}
});

</script>
				<div id="pagebody">
					<div id="headerpic"></div>
						<div id="maincontent">
							<div id="piccontainer"></div>
					   </div>
					<div id="footerpic"></div>
				</div>
				<div style="float:right;" class="small">Picasa Gallery System is Property of <a href="http://www.picasa.com" target="blank" title="Picasa" alt="Picasa">Picasa</a> All right reserverd</div>
<?php				