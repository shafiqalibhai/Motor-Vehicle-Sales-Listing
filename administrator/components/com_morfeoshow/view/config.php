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
?>
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Directory Permissions' ); ?></legend>
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
			<td align="center">images/morfeoshow</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.$folder) ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
<?php		
	$check_temp_folders    = array();
	$check_temp_folders[0] = JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.'temp_upload'.DS;
		for($i = 0; $i < count($check_temp_folders); $i++)
	{
				if ( !file_exists($check_temp_folders[$i])) 
			{
			
			$errors ++;	
				} else {
?>				
			<tr>			
			<td align="center">3</td>			
				<td align="center">images/morfeoshow/temp_upload</td>
				<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'morfeoshow'.DS.'temp_upload'.DS.$folder) ? 
				'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
				'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
			</tr>
<?php			
			}	
	}
?>	
		<tr>
			<td align="center">2</td>
			<td align="center">components/com_morfeoshow</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_morfeoshow') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>		
	</tbody>
	</table>
	</fieldset>
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Permissions' ); ?> - <?php echo JText::_( 'File' ); ?></legend>
	<table class="adminlist">
	<thead>
		<tr>
			<th width="4%" class="title" align="center">#</th>
			<th width="48%" class="title" align="center"><?php echo JText::_( 'File' ); ?></th>
			<th width="48%" class="title" align="center"><?php echo JText::_( 'Permissions' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center">1</td>
			<td align="center">administrator/components/com_morfeoshow/settings.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'administrator'.DS.'components'.DS.'com_morfeoshow'.DS.'settings.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
		<tr>
			<td align="center">1</td>
			<td align="center">components/com_morfeoshow/gallery.xml</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_morfeoshow'.DS.'gallery.xml') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>		
	</tbody>
	</table>
	</fieldset>	
	<form action="index.php" method="post" name="adminForm">	
	<fieldset class="adminform">
		<legend><?php echo JText::_('Settings');	?></legend>
	<table class="admintable" width="100%">
		<tr><td>
<?php
		$pane = &JPane::getInstance('Tabs');
	        echo $pane->startPane( 'morfeo-pane' );
        	echo $pane->startPanel(JText::_('General'), 'morf-tab' );
?>
		<table width="100%" class="admintable">
		<tr>		
			<td width="150" align="right" class="key">
			<?php echo JText::_('Google Map Key ID');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="googlekey"
				id="googlekey" size="80" maxlength="180"
				value="<?php echo $params['googlekey'];?>" />
			</td>
			<td><?php echo JText::_('Google ID info');	?>
			</td>
		</tr>
		<tr>		
			<td width="150" align="right" class="key">
			<?php echo JText::_('Flickr Key ID');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="flickrkey"
				id="flickrkey" size="80" maxlength="180"
				value="<?php echo $params['flickrkey'];?>" />
			</td>
			<td><?php echo JText::_('Flickr ID info');	?>
			</td>
		</tr>			
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Flickr user ID');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="user_id"
				id="user_id" size="50" maxlength="100"
				value="<?php echo $params['user_id'];?>" />
			</td>
			<td><?php echo JText::_('Flickr user ID Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Max images allowed');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="max_img"
				id="max_img" size="10" maxlength="100"
				value="<?php echo $params['max_img'];?>" />
			</td>
			<td><?php echo JText::_('MAXIMUM NUMBER OF IMAGES ALLOWED DESCRIPTION'); ?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Size upload allowed');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="max_upload_size"
				id="max_upload_size" size="10" maxlength="100"
				value="<?php echo $params['max_upload_size'];?>" />
			</td>
			<td><?php echo JText::_('Set maximun size upload allowed default 2000000'); ?>
			</td>
		</tr>		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Image Order Back');	?>
			</td>		
			<td>
				<?php			
					$lho[] = JHTML::_( 'select.option', 'rand()', JText::_( 'Random' ) );	
					$lho[] = JHTML::_( 'select.option', 'title asc', JText::_( 'Title Asc' ) );
					$lho[] = JHTML::_( 'select.option', 'title desc', JText::_( 'Title Desc' ) );
					$lho[] = JHTML::_( 'select.option', 'filename asc', JText::_( 'Filename Asc' ) );	
					$lho[] = JHTML::_( 'select.option', 'filename desc', JText::_( 'Filename Desc' ) );
					$lho[] = JHTML::_( 'select.option', 'id asc', JText::_( 'Id Asc' ) );					
					$lho[] = JHTML::_( 'select.option', 'id desc', JText::_( 'Id Desc' ) );	
					$lho[] = JHTML::_( 'select.option', 'imgdate asc', JText::_( 'Date Asc' ) );
					$lho[] = JHTML::_( 'select.option', 'imgdate desc', JText::_( 'Date Desc' ) );					
					$mio_orderback = JHTML::_('select.genericlist', $lho, 'orderback', 'class="inputbox" size="1"', 'value', 'text',  $params['orderback']);
					echo $mio_orderback;
				?>			
			</td>
			<td><?php echo JText::_('Select images order in backend lists');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Gallery description');	?>
			</td>
			<td>
				<?php
					$vfo[] = JHTML::_( 'select.option', '1', JText::_( 'Gallery description on top' ) );	
					$vfo[] = JHTML::_( 'select.option', '0', JText::_( 'Gallery description on bottom' ) );
					$fut_description = JHTML::_('select.genericlist', $vfo, 'description', 'class="inputbox" size="1"', 'value', 'text', $params['description'] );
					echo $fut_description;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Select where show galleries descriptions');	?>
			</td>
		</tr>		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Google AJAX API');	?>
			</td>
			<td>
				<?php
					$bnb[] = JHTML::_( 'select.option', '1', JText::_( 'Yes' ) );	
					$bnb[] = JHTML::_( 'select.option', '0', JText::_( 'No' ) );
					$bbb_gapi = JHTML::_('select.genericlist', $bnb, 'gapi', 'class="inputbox" size="1"', 'value', 'text', $params['gapi'] );
					echo $bbb_gapi;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Utilize or not Google AJAX Libraries API insted of local ajax libraries');	?>
			</td>
		</tr>		
	</table>
 <?php
		echo $pane->endPanel();
		echo $pane->startPanel( JText::_('Classic gallery Setting'), 'morf-tabd' );
?>	
		<table width="100%" class="admintable">
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('TW');?>
			</td>
			<td>
			<input class="text_area" type="text" name="larghezza"
				id="larghezza" size="4" maxlength="6"
				value="<?php echo $params['larghezza'];?>" />
			</td>
			<td><?php echo JText::_('Set value for thumbs width in shoutbox gallery');	?>
			</td>
		</tr>
		<!--tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Gallery template');	?>
			</td>
			<td>
				<?php
					$vvo[] = JHTML::_( 'select.option', '0', JText::_( 'Shadowbox 1' ) );	
					$vvo[] = JHTML::_( 'select.option', '1', JText::_( 'Shadowbox 2' ) );
					$vvo[] = JHTML::_( 'select.option', '2', JText::_( 'Shadowbox 3' ) );	
					$vvo[] = JHTML::_( 'select.option', '3', JText::_( 'Shadowbox 4' ) );					
					$vvo[] = JHTML::_( 'select.option', '4', JText::_( 'Fancybox 1' ) );	
					$vvo[] = JHTML::_( 'select.option', '5', JText::_( 'Fancybox 2' ) );
					$vvo[] = JHTML::_( 'select.option', '6', JText::_( 'Fancybox 3' ) );	
					$vvo[] = JHTML::_( 'select.option', '7', JText::_( 'Fancybox 4' ) );						
					$but_template = JHTML::_('select.genericlist', $vvo, 'template', 'class="inputbox" size="1"', 'value', 'text', $params['template'] );
					echo $but_template;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Select template for classic gallery');	?>
			</td>
		</tr-->		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Image Title');	?>
			</td>
			<td>
				<?php
					$vro[] = JHTML::_( 'select.option', '0', JText::_( 'Hide' ) );	
					$vro[] = JHTML::_( 'select.option', '1', JText::_( 'Show' ) );
					$bnt_titolo = JHTML::_('select.genericlist', $vro, 'titolo', 'class="inputbox" size="1"', 'value', 'text', $params['titolo'] );
					echo $bnt_titolo;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Show or Hide titles of images in the shoutbox gallery');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Interface Language');	?>
			</td>		
			<td>
				<?php			
					$lno[] = JHTML::_( 'select.option', 'en', JText::_( 'English' ) );	
					$lno[] = JHTML::_( 'select.option', 'it', JText::_( 'Italian' ) );
					$lno[] = JHTML::_( 'select.option', 'fr', JText::_( 'French' ) );
					$lno[] = JHTML::_( 'select.option', 'es', JText::_( 'Spanish' ) );	
					$lno[] = JHTML::_( 'select.option', 'de', JText::_( 'Deutsch' ) );
					$lno[] = JHTML::_( 'select.option', 'nl', JText::_( 'Nederlands' ) );					
					$lno[] = JHTML::_( 'select.option', 'pt', JText::_( 'Portugues' ) );	
					$lno[] = JHTML::_( 'select.option', 'pl', JText::_( 'Polish' ) );
					$lno[] = JHTML::_( 'select.option', 'ru', JText::_( 'Russian' ) );					
					$dio_shulang = JHTML::_('select.genericlist', $lno, 'shulang', 'class="inputbox" size="1"', 'value', 'text',  $params['shulang']);
					echo $dio_shulang;
				?>			
			</td>
			<td><?php echo JText::_('Select language of Shoutbox interface');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Ajax for Shotbox');	?>
			</td>
			<td>
				<?php 
					$tno[] = JHTML::_( 'select.option', 'shadowbox-base.js', JText::_( 'Default' ) );	
					$tno[] = JHTML::_( 'select.option', 'shadowbox-mootools.js', JText::_( 'Mootools' ) );
					$tno[] = JHTML::_( 'select.option', 'shadowbox-jquery.js', JText::_( 'JQuery' ) );	
					$tno[] = JHTML::_( 'select.option', 'shadowbox-prototype.js', JText::_( 'Prototype' ) );
					$tno[] = JHTML::_( 'select.option', 'shadowbox-yui.js', JText::_( 'Yui' ) );	
					$tno[] = JHTML::_( 'select.option', 'shadowbox-dojo.js', JText::_( 'Dojo' ) );
					$cne_shuadat = JHTML::_('select.genericlist', $tno, 'shuadat', 'class="inputbox" size="1"', 'value', 'text', $params['shuadat']);
					echo $cne_shuadat;
				?>
			</td>
			<td><?php echo JText::_('Select adapter for shoutbox');	?>
			</td>
		</tr>
	</table>
 <?php
		echo $pane->endPanel();
		echo $pane->startPanel( JText::_('CSS style'), 'morf-tab11' );
?>
		<table width="100%">
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Custom CSS Style');	?>
			</td>
			<td>
				<?php
					$rfo[] = JHTML::_( 'select.option', '0', JText::_( 'No' ) );	
					$rfo[] = JHTML::_( 'select.option', '1', JText::_( 'Yes' ) );
					$nft_style = JHTML::_('select.genericlist', $rfo, 'style', 'class="inputbox" size="1"', 'value', 'text', $params['style'] );
					echo $nft_style;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Select type of style Default or Custom');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Style Classic Gallery 1');	?>
			</td>
			<td width="40%">
			<textarea type="textarea" cols="50" rows="7" name="style1"
				id="style1"> <?php echo $params['style1'];?></textarea>
			</td>
			<td valign="top"><?php echo JText::_('CSS Style for Classic Shadowbox and Fancybox gallery 1');	?><br /><b><?php echo JText::_('Default');	?></b><br /><span style="font-size:9px">
<span style="color:green">.sboxgallery</span> {padding: 10px 10px 30px 30px;}<br />
<span style="color:green">#sboxth</span> {padding: 0 5px 15px 0;text-align:center;font-size:10px;width:100px;}<br />
<span style="color:green">#sboxth img</span> {border: 1px solid #eeeccc;border-width: 2px 2px 2px;}<br />
<span style="color:green">#sboxth a:hover img</span> {border: 1px solid #3e3e3e;border-width: 2px 2px 2px;}			
			<span>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Custom CSS Style');	?>
			</td>
			<td>
				<?php
					$rfy[] = JHTML::_( 'select.option', '0', JText::_( 'No' ) );	
					$rfy[] = JHTML::_( 'select.option', '1', JText::_( 'Yes' ) );
					$nfy_style0 = JHTML::_('select.genericlist', $rfy, 'style0', 'class="inputbox" size="1"', 'value', 'text', $params['style0'] );
					echo $nfy_style0;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Select type of style Default or Custom');	?>
			</td>
		</tr>		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Style Classic Gallery 2');	?>
			</td>
			<td width="40%">
			<textarea type="textarea" cols="50" rows="7" name="style2"
				id="style2"> <?php echo $params['style2'];?></textarea>
			</td>
			<td valign="top"><?php echo JText::_('CSS Style for Classic Shadowbox or Fancybox gallery 2');	?><br /><b><?php echo JText::_('Default');	?></b><br /><span style="font-size:9px">
<span style="color:green">a img, img</span> { border: none; text-decoration: none; }<br />
<span style="color:green">#page-wrap</span> { width: auto; margin: 0 auto; }<br />
<span style="color:green">.photo-link</span>	{padding: 5px;margin: 5px;border: 1px solid #999;display: block;width: <?php echo $params_morfeo['larghezza']?>px;text-align:center;font-size:9px;text-decoration: none;}<br />
<span style="color:green">.photo-link:hover</span>{border-color: white;text-decoration: none;}</span>			
			</td>
		</tr>
		</table>
 <?php
		echo $pane->endPanel();
		echo $pane->startPanel( JText::_('Simpleviewer gallery settings'), 'morf-tabv' );
?>	
		<table width="100%" class="admintable">
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Max Image Height');	?>
			</td>
			<td width="150">
			<input class="text_area" type="text" name="maximgh"
				id="maximgh" size="4" maxlength="6"
				value="<?php echo $params['maximgh'];?>" />
			</td>
			<td width="60%"><?php echo JText::_('Set value for max image height');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Max Image Width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="maximgw"
				id="maximgw" size="4" maxlength="6"
				value="<?php echo $params['maximgw'];?>" />
			</td>
			<td><?php echo JText::_('Set value for max image width');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Text color');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="txtcolor"
				id="txtcolor" size="7" maxlength="6"
				value="<?php echo $params['txtcolor'];?>" />
			</td>
			<td><?php echo JText::_('Set value for text color');	?>
			</td>
		</tr>	
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Frame color');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="framecolor"
				id="framecolor" size="7" maxlength="6"
				value="<?php echo $params['framecolor'];?>" />
			</td>
			<td><?php echo JText::_('Set value for frame color');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Frame Width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="framewidth"
				id="framewidth" size="4" maxlength="6"
				value="<?php echo $params['framewidth'];?>" />
			</td>
			<td><?php echo JText::_('Set value for frame width');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Stagepadding');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="stagepadding"
				id="stagepadding" size="4" maxlength="6"
				value="<?php echo $params['stagepadding'];?>" />
			</td>
			<td><?php echo JText::_('Set value for stage width');	?>
			</td>
		</tr>			
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Nav padding');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="navpadding"
				id="navpadding" size="4" maxlength="6"
				value="<?php echo $params['navpadding'];?>" />
			</td>
			<td><?php echo JText::_('Set value for nav padding');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Colums');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="cols"
				id="cols" size="4" maxlength="6"
				value="<?php echo $params['cols'];?>" />
			</td>
			<td><?php echo JText::_('Set value for colums');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Rows');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="rows"
				id="rows" size="4" maxlength="6"
				value="<?php echo $params['rows'];?>" />
			</td>
			<td><?php echo JText::_('Set value for rows');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Nav position');	?>
			</td>
			<td>
				<?php
					$cno[] = JHTML::_( 'select.option', 'left', JText::_( 'Left' ) );	
					$cno[] = JHTML::_( 'select.option', 'right', JText::_( 'Right' ) );
					$cno[] = JHTML::_( 'select.option', 'top', JText::_( 'Top' ) );	
					$cno[] = JHTML::_( 'select.option', 'bottom', JText::_( 'Bottom' ) );					
					$cnt_navpos = JHTML::_('select.genericlist', $cno, 'navpos', 'class="inputbox" size="1"', 'value', 'text', $params['navpos'] );
					echo $cnt_navpos;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Set position of navigator');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Align v');	?>
			</td>
			<td>
				<?php
					$fno[] = JHTML::_( 'select.option', 'center', JText::_( 'Center' ) );	
					$fno[] = JHTML::_( 'select.option', 'top', JText::_( 'Top' ) );	
					$fno[] = JHTML::_( 'select.option', 'bottom', JText::_( 'Bottom' ) );					
					$fnt_alignv = JHTML::_('select.genericlist', $fno, 'alignv', 'class="inputbox" size="1"', 'value', 'text', $params['alignv'] );
					echo $fnt_alignv;
				?>					
			</td>
			<td><?php echo JText::_('INFO ALIGN V');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Align h');	?>
			</td>
			<td>
				<?php
					$fgo[] = JHTML::_( 'select.option', 'center', JText::_( 'Center' ) );	
					$fgo[] = JHTML::_( 'select.option', 'top', JText::_( 'Top' ) );	
					$fgo[] = JHTML::_( 'select.option', 'bottom', JText::_( 'Bottom' ) );					
					$fnh_alignh = JHTML::_('select.genericlist', $fgo, 'alignh', 'class="inputbox" size="1"', 'value', 'text', $params['alignh'] );
					echo $fnh_alignh;
				?>					
			</td>	
			<td><?php echo JText::_('INFO ALIGN H');	?>
			</td>
		</tr>		
	</table>		
 <?php
		echo $pane->endPanel();
		echo $pane->startPanel( JText::_('Layout frontend list'), 'morf-tab1' );
?>
		<table width="100%">		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Frontend List');	?>
			</td>
			<td>
				<?php
					$rno[] = JHTML::_( 'select.option', '0', JText::_( 'Flash Frontend List' ) );	
					$rno[] = JHTML::_( 'select.option', '1', JText::_( 'Classic Frontend List' ) );
					$rno[] = JHTML::_( 'select.option', '2', JText::_( 'Classic Rows Colums Frontend List' ) );					
					$nnt_frontend = JHTML::_('select.genericlist', $rno, 'frontend', 'class="inputbox" size="1"', 'value', 'text', $params['frontend'] );
					echo $nnt_frontend;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Set type of frontend list view');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Number of Cols');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="colonnefront"
				id="colonnefront" size="4" maxlength="6"
				value="<?php echo $params['colonnefront'];?>" />
			</td>
			<td><?php echo JText::_('Set number of Cols for Classic Rows Cols Frontend List');	?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right" class="key">
			<?php echo JText::_('Thumbs Width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="larfront"
				id="larfront" size="4" maxlength="6"
				value="<?php echo $params['larfront'];?>" />
			</td>
			<td><?php echo JText::_('Set Thumbs Width value for Rows Cols List');	?>
			</td>
		</tr>		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Classic List Logo');	?>
			</td>
			<td>
				<?php
					$vno[] = JHTML::_( 'select.option', '0', JText::_( 'Hide' ) );	
					$vno[] = JHTML::_( 'select.option', '1', JText::_( 'Show' ) );
					$bnt_logo = JHTML::_('select.genericlist', $vno, 'logo', 'class="inputbox" size="1"', 'value', 'text', $params['logo'] );
					echo $bnt_logo;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Show or Hide frontend classic list logo');	?>
			</td>
		</tr>	
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Back button');	?>
			</td>
			<td>
				<?php
					$bno[] = JHTML::_( 'select.option', '1', JText::_( 'Hide' ) );	
					$bno[] = JHTML::_( 'select.option', '0', JText::_( 'Show' ) );
					$bbt_back = JHTML::_('select.genericlist', $bno, 'back', 'class="inputbox" size="1"', 'value', 'text', $params['back'] );
					echo $bbt_back;
				?>					
			</td>
			<td width="40%"><?php echo JText::_('Show or Hide frontend back button');	?>
			</td>
		</tr>			
	</table>
 <?php
		echo $pane->endPanel();
		echo $pane->startPanel( JText::_('Frontend list thumbs'), 'morf-tab2' );
?>
		<table width="100%" class="admintable">		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('List thumbs width');	?>
			</td>
			<td width="40%">
			<input class="text_area" type="text" name="minilistw"
				id="minilistw" size="4" maxlength="6"
				value="<?php echo $params['minilistw'];?>" />
			</td>
			<td><?php echo JText::_('List thumbs width Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('List thumbs height');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="minilisth"
				id="minilisth" size="4" maxlength="6"
				value="<?php echo $params['minilisth'];?>" />
			</td>
			<td><?php echo JText::_('List thumbs height Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('List flash thumbs width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="minimainw"
				id="minimainw" size="4" maxlength="6"
				value="<?php echo $params['minimainw'];?>" />
			</td>
			<td><?php echo JText::_('List flash thumbs width Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('List flash thumbs height');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="minimainh"
				id="minimainh" size="4" maxlength="6"
				value="<?php echo $params['minimainh'];?>" />
			</td>
			<td><?php echo JText::_('List flash thumbs height Description');	?>
			</td>
		</tr>
	</table>		

 <?php
		echo $pane->endPanel();
		echo $pane->startPanel( JText::_('Gallery thumbs'), 'morf-tab3' );
?>
		<table width="100%" class="admintable">		
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Gallery thumbs width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="minithumbw"
				id="minithumbw" size="4" maxlength="6"
				value="<?php echo $params['minithumbw'];?>" />
			</td>
			<td width="40%"><?php echo JText::_('Gallery thumbs width Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Gallery thumbs height');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="minithumbh"
				id="minithumbh" size="4" maxlength="6"
				value="<?php echo $params['minithumbh'];?>" />
			</td>
			<td><?php echo JText::_('Gallery thumbs height Description');	?>
			</td>
		</tr>	
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Images width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="imagesw"
				id="imagesw" size="4" maxlength="6"
				value="<?php echo $params['imagesw'];?>" />
			</td>
			<td><?php echo JText::_('Images width Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Images height');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="imagesh"
				id="imagesh" size="4" maxlength="6"
				value="<?php echo $params['imagesh'];?>" />
			</td>
			<td><?php echo JText::_('Images height Description');	?>
			</td>
		</tr>	
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Forced crop width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="cropw"
				id="cropw" size="4" maxlength="6"
				value="<?php echo $params['cropw'];?>" />
			</td>
			<td><?php echo JText::_('Forced crop width Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Forced crop height');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="croph"
				id="croph" size="4" maxlength="6"
				value="<?php echo $params['croph'];?>" />
			</td>
			<td><?php echo JText::_('Forced crop height Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Forced resize width');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="resizew"
				id="resizew" size="4" maxlength="6"
				value="<?php echo $params['resizew'];?>" />
			</td>
			<td><?php echo JText::_('Forced resize width Description');	?>
			</td>
		</tr>
		<tr>
			<td width="150" align="right" class="key">
			<?php echo JText::_('Forced resize height');	?>
			</td>
			<td>
			<input class="text_area" type="text" name="resizeh"
				id="resizeh" size="4" maxlength="6"
				value="<?php echo $params['resizeh'];?>" />
			</td>
			<td><?php echo JText::_('Forced resize height Description');	?>
			</td>
		</tr>			
		<tr>
			<td width="150" align="right" class="key">
				<?php echo JText::_('Temp Images Folder');	?>
			</td>
			<td>
			<a href="index.php?option=com_morfeoshow&task=svuota"><b><?php echo JText::_('Click here to clear temporary images folder');	?></b></a>
			</td>
			<td><?php echo JText::_('ATTENTION TEMP FOLDER');	?>
			</td>			
		</tr> 
	</table>
<?php
	echo $pane->endPanel();
?> 
		</td></tr>		
		</fieldset>
		</table>
		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="task" value="" />
		</form>