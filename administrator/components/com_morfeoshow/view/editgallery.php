<?php
/**
* @package		Joomla
* @subpackage	com_morfeoshow
* @copyright	Copyright (C) Vamba & Matthew Thomson. All rights reserved.
* @license		GNU/GPL.
* @author 		Vamba (.joomlaitalia.com) & Matthew Thomson (ignitejoomlaextensions.com)
* @based on  	com_morfeoshow
* @author 		Matthew Thomson (ignitejoomlaextensions.com)
* Joomla! and com_morfeoshow are free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed they include or
* are derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
include_once( JPATH_COMPONENT.DS.'settings.php' );
JHTML::_('behavior.tooltip');
global $params_morfeo;	
?>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton)
		{
			var form = document.adminForm;

			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			// do field validation
			var text = <?php echo $editor->getContent( 'description1' ); ?>
				<?php
				echo $editor->save( 'description1' );
				?>
				submitform( pressbutton );
			}
		}
		//-->
		</script>	
	<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Directory Permissions' ); ?> - <?php echo $row->name; ?></legend>
	<table class="adminlist">
	<thead>
		<tr>
			<th width="4%" class="title" align="center">#</th>
			<th width="48%" class="title" align="center"><?php echo JText::_( 'Directory' ); ?></th>
			<th width="48%" class="title" align="center"><?php echo JText::_( 'Permissions' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center">1</td>
			<td align="center">images/morfeoshow/<?php echo $row->folder?></td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.$folder) ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
			<tr>
			<td align="center">2</td>
			<td align="center">images/morfeoshow/<?php echo $row->folder?>/big</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.$row->folder.DS.'big') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
			<tr>
			<td align="center">3</td>
			<td align="center">images/morfeoshow/<?php echo $row->folder?>/thumbs</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.$row->folder.DS.'thumbs') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
		</tr>
			<tr>
			<td align="center">4</td>
			<td align="center">images/morfeoshow/<?php echo $row->folder?>/xml</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.$row->folder.DS.'xml') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
		<tr>
			<td align="center">5</td>
			<td align="center">images/morfeoshow/<?php echo $row->folder?>/mini</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.$row->folder.DS.'mini') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>		
	</tbody>
	</table>
	</fieldset>
		<!-- inizio -->
		<table class="admintable">
		<tr>
		<td width="70%" valign="top">
		<!-- inizio -->
	<?php
		$title = JText::_('Gallery information');
		echo $pane->startPane("gallery-pane");
		echo $pane->startPanel( $title, "detail-page" );
	?>		
	<table class="admintable">
	<tr>
		<td width="100" align="right" class="key">
			<?php echo JText::_( 'Title' ); ?>
		</td>
		<td>
			<input class="text_area" type="text" name="name" id="name" size="50" 
			maxlength="128" value="<?php echo htmlspecialchars($row->name, ENT_QUOTES, 'UTF-8'); ?>" />
		</td>
	</tr>
	<tr>
		<td width="100" align="right" class="key">
			<?php echo JText::_( 'Thumb' ); ?><br />
			<?php
			if( strlen($row->shortcut_filename) > 2 )
			{
				?>
				<img src="../images/morfeoshow/<?php echo $row->folder . '/' . $row->shortcut_filename; ?>" width="30" />
				<?php
			}
			?>
		</td>
		<td>
			<input type="file" name="upload_image" />
		</td>
	</tr>
		<tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Gallery type' ); ?>
			</td>
			<td>
				<?php echo $lists['fgallery'] ?>
			</td>
		</tr>	
	<tr>
	
		<td width="100" align="right" class="key">
			<?php echo JText::_( 'List description' ); ?>
		</td>
		<td>
			<?php echo $editor->display( 'description', $row->description ,'100%', 
			'150', '40', '5', array('pagebreak', 'readmore', 'image') );?>
		</td>
	</tr>
	<tr>
		<td width="100" align="right" class="key">
			<?php echo JText::_( 'Full description' ); ?>
		</td>	
		<td>
			<?php echo $editor->display( 'description1', $row->description1 ,'100%', 
			'150', '40', '5', array('pagebreak', 'readmore') );?>
		</td>
	</tr>
		<tr>
			<td class="key">
				<label for="ordering">
					<?php echo JText::_( 'Ordering' ); ?>
				</label>
			</td>
			<td>
				<?php echo $lists['ordering']; ?>
			</td>
		</tr>	
	<tr><td><br /><br /><br /></td></tr>
	</table>
<?php if ($row->flashgallery == 7 | $row->flashgallery == 8) {
if ($params_morfeo["googlekey"]) { ?>
	<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=<?php echo $params_morfeo["googlekey"] ?>" type="text/javascript"></script>
<?php	}else{ } ?>
		<!-- Check forms before submit -->
		<script language="javascript" type="text/javascript">
	var map = null;
    var geocoder = null;

    function gload() {
      if (GBrowserIsCompatible()) {
				var lat, lng, zoom;
				if(document.adminForm.glat.value!=0) lat = document.adminForm.glat.value;
				else lat = 44.13146369449934;
				if(document.adminForm.glng.value!=0) lng = document.adminForm.glng.value;
				else lng = 10.386028289794922;
				zoom = 14;
				for(var i=0;i<document.adminForm.gzoom.length;i++)
					if(document.adminForm.gzoom[i].checked) zoom = document.adminForm.gzoom[i].value;

        map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(parseFloat(lat), parseFloat(lng)), parseInt(zoom));
        geocoder = new GClientGeocoder();
      }
    }

    function showAddress() {
			address = document.adminForm.gaddress.value;
      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
              map.setCenter(point, 12);
              var marker = new GMarker(point);
              map.addOverlay(marker);
              marker.openInfoWindowHtml(address);
            }
          }
        );
      }
    }
		
		function changeZoom(val) {
			map.setZoom(val);
		}
		
		function getCoordinate(){
			var center = map.getCenter();
			document.adminForm.glat.value=center.lat();
			document.adminForm.glng.value=center.lng();
		}
		</script>
<?php
		$title = JText::_( 'Maps Gallery Settings' );
		echo $pane->endPanel();
		echo $pane->startPanel( $title, "params-page" );
		global $params_morfeo;
		if ($params_morfeo["googlekey"]) {
?>			
		<table class="admintable">
			<tr>
			  <td width="30%" class="key">
			  <label for="title">		
			<span class="editlinktip hasTip" title="<?php echo JText::_('Google id info');	?>">			  
					<?php echo JText::_( 'Google Maps Key' ); ?></span>
			  </label>
			  </td>
			  <td valign="top">
			<input type="text" size="120" name="gmapkey" value="<?php echo $row->gmapkey ;?>" />
				</td>
			</tr>
			<tr>
			  <td width="30%" class="key">
			  <label for="title">		
					<?php echo JText::_( 'Location' ); ?>
			  </label>
			  </td>
			  <td valign="top">
			<input type="text" style="width:70%" name="luogo" value="<?php echo $row->luogo ;?>" />
				</td>
			</tr>			
				<tr>
			  <td width="30%" class="key">
			  <label for="title">		
					<?php echo JText::_( 'Search Location' ); ?>
			  </label>
			  </td>
			  <td valign="top">
			<input type="text" style="width:70%" name="gaddress" value="" /><input type="button" onclick="showAddress();" value="<?php echo JText::_( 'Search' ); ?>" />
				</td>
			</tr>
			  <td width="30%" class="key">
			  <label for="title">
				  <?php echo JText::_( 'Latitude' ); ?> - <?php echo JText::_( 'Longitude' ); ?>:
			  </label>
			  </td>
			  <td valign="top">
						<input type="text" size="20" name="glat" value="<?php echo $row->glat ?>" /><input type="text" size="20" name="glng" value="<?php echo $row->glng ?>" /><input type="button" onclick="getCoordinate();" value="<?php echo JText::_( 'Search Coordinates' ); ?>" />
					</td>
			</tr>
			  <td width="30%" class="key">
			  <label for="title">
					<?php echo JText::_( 'Zoom' ); ?>
			  </label>
			  </td>
			  <td valign="top">
				<input type="radio" name="gzoom" value="5" <?php if($row->gzoom==5) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(5)" />5
				<input type="radio" name="gzoom" value="6" <?php if($row->gzoom==6) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(6)" />6
				<input type="radio" name="gzoom" value="7" <?php if($row->gzoom==7) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(7)" />7
				<input type="radio" name="gzoom" value="8" <?php if($row->gzoom==8) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(8)" />8
				<input type="radio" name="gzoom" value="9" <?php if($row->gzoom==9) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(9)" />9
				<input type="radio" name="gzoom" value="10" <?php if($row->gzoom==10) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(10)" />10
				<input type="radio" name="gzoom" value="11" <?php if($row->gzoom==11) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(11)" />11
				<input type="radio" name="gzoom" value="12" <?php if($row->gzoom==12) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(12)" />12
				<input type="radio" name="gzoom" value="13" <?php if($row->gzoom==13) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(13)" />13
				<input type="radio" name="gzoom" value="14" <?php if($row->gzoom==14) echo 'checked="checked"' ?> onfocus="javascript:changeZoom(14)" />14
					</td>
			</tr>
			  <td width="30%" class="key">
			  <label for="title">
			  <?php echo JText::_( 'Click on the map' ); ?>
			  </label>
			  </td>
					<td colspan="4"><div id="map" style="width: 350px; height: 300px"></div></td>
			</tr> 
				</table>
<?php
} else {
?>
	<table class="admintable">
			<tr>
			  <td width="30%" class="key">
			  <label for="title">		
					<?php echo JText::_( 'MUST ENTER A GOOGLE KEY TO THIS FEATURE' ); ?>
			  </label>
			  </td>	
              <td>			  
				<?php echo JText::_( 'Go to' ); ?>
			  </td>
			</tr> 
	</table>
<?php
}
}else{}
		echo $pane->endPanel();
		echo $pane->endPane();
?>					
			<script type="text/javascript" language="javascript">
				gload();
			</script>
	<!-- inizio -->
	</td>	
	<!-- inizio -->
		<td width="40%" valign="top">
			<?php
				$title = JText::_('Classic Gallery Settings');
				echo $pane->startPane("content-pane");
				echo $pane->startPanel( $title, "classic-page" );
			?>
	<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Template info');	?>">
					<?php echo JText::_( 'Template' ); ?></span>
			</td>
			<td>
				<?php echo $lists['classictpl'] ?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Select images order in frontend lists');	?>">
					<?php echo JText::_( 'Image Order Front' ); ?></span>
			</td>
			<td>
				<?php echo $lists['orderfront'] ?>
			</td>
		</tr>		
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Column info');	?>">
					<?php echo JText::_( 'Column' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="tcol" id="tcol" size="8" 
				maxlength="16" value="<?php echo $row->tcol ;?>" />
			</td>
		</tr>			
	</table>		
			<?php
				$title = JText::_('Image Rotator Settings');
				echo $pane->endPanel();
				echo $pane->startPanel( $title, "detail-page" );
			?>
	<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Height info');	?>">
				<?php echo JText::_( 'Height' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="height" id="height" size="8" 
				maxlength="16" value="<?php echo $row->height ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Width info');	?>">
				<?php echo JText::_( 'Width' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="width" id="width" size="8" 
				maxlength="16" value="<?php echo $row->width ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Transition info');	?>">
				<?php echo JText::_( 'Transition' ); ?></span>
			</td>
			<td>
				<?php echo $lists['transition'] ?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Navigator info');	?>">			
				<?php echo JText::_( 'Navigator' ); ?></span>
			</td>
			<td>
				<?php echo $lists['nav'] ?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Slider info');	?>">			
				<?php echo JText::_( 'Slider' ); ?></span>
			</td>
			<td>
				<?php echo $lists['movimento'] ?>
			</td>
		</tr>			
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Tempo info');	?>">			
				<?php echo JText::_( 'Tempo' ); ?></span>
			</td>
			<td>
				<?php echo $lists['tempo'] ?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Shuffle info');	?>">
				<?php echo JText::_( 'Shuffle' ); ?></span>
			</td>
			<td>
				<?php echo $lists['shuffle'] ?>
			</td>
		</tr>			
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Overstretch info');	?>">
				<?php echo JText::_( 'Overstretch' ); ?></span>
			</td>
			<td>
				<?php echo $lists['overstretch'] ?>
			</td>
		</tr>		
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Background info');	?>">			
				<?php echo JText::_( 'Background color' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="bkgnd" id="bkgnd" size="16" 
				maxlength="16" value="<?php echo $row->bkgnd ;?>" />
			</td>
		</tr>
		<tr><td></td></tr>
	</table>				
<?php
				$title = JText::_( 'Simple Viewer Settings' );
				echo $pane->endPanel();
				echo $pane->startPanel( $title, "params-page" );
?>				
		<table class="admintable">		
		<!--tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Background color' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="bkgnd1" id="bkgnd1" size="16" 
				maxlength="16" value="<?php echo $row->bkgnd1 ;?>" />
			</td>
		</tr-->
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Set Height');	?>">
				<?php echo JText::_( 'Height' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="heightsw" id="heightsw" size="8" 
				maxlength="16" value="<?php echo $row->heightsw ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Set Width');	?>">
				<?php echo JText::_( 'Width' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="widthsw" id="widthsw" size="8" 
				maxlength="16" value="<?php echo $row->widthsw ;?>" />
			</td>
		</tr>		
		</table>
<?php
				$title = JText::_( 'Post Card Settings' );
				echo $pane->endPanel();
				echo $pane->startPanel( $title, "params-page" );
?>
		<table class="admintable">		
		<!--tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Background color' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="bkgnd2" id="bkgnd2" size="16" 
				maxlength="16" value="<?php echo $row->bkgnd2 ;?>" />
			</td>
		</tr-->
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Set Height');	?>">
				<?php echo JText::_( 'Height' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="heightpc" id="heightpc" size="8" 
				maxlength="16" value="<?php echo $row->heightpc ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Set Width');	?>">
				<?php echo JText::_( 'Width' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="widthpc" id="widthpc" size="8" 
				maxlength="16" value="<?php echo $row->widthpc ;?>" />
			</td>
		</tr>		
		</table>	
<?php
				$title = JText::_( 'Polaroid Settings' );
				echo $pane->endPanel();
				echo $pane->startPanel( $title, "params-page" );
?>
		<table class="admintable">		
		<!--tr>
			<td width="100" align="right" class="key">
				<?php echo JText::_( 'Background color' ); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="bkgnd3" id="bkgnd3" size="16" 
				maxlength="16" value="<?php echo $row->bkgnd3 ;?>" />
			</td>
		</tr-->
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Set Height');	?>">
				<?php echo JText::_( 'Height' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="heightpl" id="heightpl" size="8" 
				maxlength="16" value="<?php echo $row->heightpl ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('Set Width');	?>">
				<?php echo JText::_( 'Width' ); ?></span>
			</td>
			<td>
				<input class="text_area" type="text" name="widthpl" id="widthpl" size="8" 
				maxlength="16" value="<?php echo $row->widthpl ;?>" />
			</td>
		</tr>		
		</table>	
<?php
				$title = JText::_( 'Flickr Galleries' );
				echo $pane->endPanel();
				echo $pane->startPanel( $title, "params-page" );
?>	
		<table class="admintable">		
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('FLICKR USER ID DESCRIPTION');	?>">
			<?php echo JText::_('FLICKR USER ID');	?></span>
			</td>
			<td>
			<input class="text_area" type="text" name="user_id" id="user_id" size="25" maxlength="100"
				value="<?php echo $row->user_id;?>" />
			</td>
		</tr>
		
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('SET ID DESCRIPTION');	?>">
			<?php echo JText::_('SET ID');	?></span>
			</td>
			<td>
			<input class="text_area" type="text" name="set_id" id="set_id" size="25" maxlength="100"
				value="<?php echo $row->set_id;?>" />
			</td>
		</tr>
		
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('TEXT DESCRIPTION');?>">	
			<?php echo JText::_('TEXT');?></span>
			</td>
			<td>
			<input class="text_area" type="text" name="text" id="text" size="25" maxlength="100"
				value="<?php echo $row->text;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('TAGS DESCRIPTION');?>">			
			<?php echo JText::_('TAGS');?></span>
			</td>
			<td>
			<input class="text_area" type="text" name="tags" id="tags" size="25" maxlength="100"
				value="<?php echo $row->tags;?>" />
			</td>
		</tr>		
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('GROUP ID DESCRIPTION');?>">			
			<?php echo JText::_('GROUP ID');?></span>
			</td>
			<td>
			<input class="text_area" type="text" name="group_id" id="group_id" size="25" maxlength="100"
				value="<?php echo $row->group_id ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<span class="editlinktip hasTip" title="<?php echo JText::_('RELEVANCE DESCRIPTION');?>">			
			<?php echo JText::_('RELEVANCE');?></span>
			</td>
			<td>
				<?php echo $lists['sort'] ?>
			</td>
		</tr>
		</table>
<?php
				$title = JText::_( 'Picasa Setting' );
				echo $pane->endPanel();
				echo $pane->startPanel( $title, "params-page" );
?>
		<table class="admintable">		
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Enter Picasa Username');	?>">
				<?php echo JText::_( 'Picasa username' ); ?>
				<span>
			</td>
			<td>
				<input class="text_area" type="text" name="pusername" id="pusername" size="20" 
				maxlength="200" value="<?php echo $row->pusername ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Set maximum size picture');	?>">
				<?php echo JText::_( 'Photo Size' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="pphotosize" id="pphotosize" size="6" 
				maxlength="16" value="<?php echo $row->pphotosize ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Set maximum thumbs size');	?>">			
				<?php echo JText::_( 'Thumb Size' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="pthumbsize" id="pthumbsize" size="6" 
				maxlength="16" value="<?php echo $row->pthumbsize ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Column in main page desc');	?>">
				<?php echo JText::_( 'Column in main page' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="palbumcols" id="palbumcols" size="6" 
				maxlength="16" value="<?php echo $row->palbumcols ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Column in album page desc');	?>">			
				<?php echo JText::_( 'Column in album page' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="pcols" id="pcols" size="6" 
				maxlength="16" value="<?php echo $row->pcols;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Max pics album desc');	?>">
				<?php echo JText::_( 'Max pics album' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="pmaxresults" id="pmaxresults" size="6" 
				maxlength="16" value="<?php echo $row->pmaxresults ;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Max pics main desc');	?>">			
				<?php echo JText::_( 'Max main album' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="pmaxalbums" id="pmaxalbums" size="6" 
				maxlength="16" value="<?php echo $row->pmaxalbums;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			------------------------
			</td>
			<td>
			<?php echo JText::_( 'Settings for single' ); ?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Picasa Album id desc');	?>">			
				<?php echo JText::_( 'Picasa Album id' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="psingle" id="psingle" size="20" 
				maxlength="120" value="<?php echo $row->psingle;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Background');	?>">			
				<?php echo JText::_( 'Background album' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="pback" id="pback" size="6" 
				maxlength="10" value="<?php echo $row->pback;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Set Height');	?>">			
				<?php echo JText::_( 'Height' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="paltezza" id="paltezza" size="6" 
				maxlength="6" value="<?php echo $row->paltezza;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_('Set Width');	?>">			
				<?php echo JText::_( 'Width' ); ?>
				<span>				
			</td>
			<td>
				<input class="text_area" type="text" name="plarghezza" id="plarghezza" size="6" 
				maxlength="6" value="<?php echo $row->plarghezza;?>" />
			</td>
		</tr>		
		</table>		
			<?php
				$title = JText::_( 'Metadata Information' );
				echo $pane->endPanel();
				echo $pane->startPanel( $title, "metadata-page" );
			?>
		<table class="adminform">
			<tr>
				<td class="title"><?php echo JText::_( 'Metadesc Information' ); ?></td>
			</tr>
			<tr>
				<td align="left" valign="top">
					<textarea class="inputbox"  rows="5" style="width:99%" name="metadesc"><?php echo $row->metadesc; ?></textarea>
				</td>
			</tr>
			<tr>
				<td class="title"><?php echo JText::_( 'Metakey Information' ); ?></td>
			</tr>
			<tr>
				<td align="left">
					<textarea class="inputbox"  rows="5" style="width:99%" name="metakey"><?php echo $row->metakey; ?></textarea>
				</td>
			</tr>
		</tr>
	</table>
			<?php
				echo $pane->endPanel();
				echo $pane->endPane();
			?>	
	</td>
	</table>
	<!-- inizio -->
		</div>
		</table>			
	<input type="hidden" name="cid" value="<?php echo $row->id; ?>" />
	<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
	<input type="hidden" name="folder" value="<?php echo $row->folder; ?>" />
	<input type="hidden" name="option" value="<?php echo $option;?>" />
	<input type="hidden" name="task" value="" />
	</form>