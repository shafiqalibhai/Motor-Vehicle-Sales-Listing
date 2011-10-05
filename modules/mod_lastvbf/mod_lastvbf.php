<?php
/**
* @ Module Display Latest Threads Title's of VBulletin
* @ version 1.7.0
* @ Copyright 2008 masih.ad@gmail.com
* @ package mod_LastVBF
* @ Released under GNU/GPL License
**/
# Don't allow direct acces to the file
	defined( '_VALID_MOS' ) or die( 'Restricted access' );
# Ensure access to core functions
	global $mainframe;
#--------------------------------------
# Parameters
#--------------------------------------
  $url_js           = $params->def('url_js','#');
  $by_vbf           = $params->def('by_vbf','By');
  $in_vbf           = $params->def('in_vbf','In');
  $title_vbf        = $params->def('title_vbf','Title');
  $author_vbf       = $params->def('author_vbf','Author');
  $forum_id         = $params->def('forum_id','');
  $tr1        		= $params->def('tr1','');
  $tr2       		= $params->def('tr2','');
  $linkcolor       	= $params->def('linkcolor','');
  $infocolor      	= $params->def('infocolor','');
  $marqueebg      	= $params->def('marqueebg','');
  $fsize  	    	= $params->def('fsize','10');
  $max_ch           = $params->def('max_ch','200');
  $module_style     = $params->get('module_style','0');
  $height_m			= $params->def('height_m','');
  $t_number			= $params->def('t_number','15');
  $direction_m      = $params->get('direction_m','0');
if ($direction_m == 0)
	{
		$mdir = "up" ;
	}
if ($direction_m == 1)
	{
		$mdir = "down" ;
	}
$t_num = $t_number-1
?>
<!-- BEGIN: LastVBF Module -->
<script src="<?php echo $url_js ?>/external.php?forumids=<?php echo $forum_id ?>&amp;type=JS"></script>
<?php if ($url_js == '#'){
	echo ("You should write your forum url in the Module parameters");
}

# Table Style 1
if( $module_style == 0)
{
?>
<div  style="font-family:Tahoma, Arial, Verdana;font-size:<?php echo $fsize ?>pt;">
<table width="100%" >

	<script type="text/javascript">
		for (i=0; i<=<?php echo $t_num ?>; i++) {
			if (threads[i].title.length > <?php echo $max_ch ?>)
			{ 
				threads[i].title = threads[i].title.substring(0, <?php echo $max_ch ?>) + "...";
		    }
		    if (i%2==0)
		    {
				document.write('<tr bgcolor="<?php echo $tr1 ?>"><td><a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" >' , threads[i].title, '</a>');
				document.write('<br /><span style="color:<?php echo $infocolor ?>"><?php echo $by_vbf ?> :', threads[i].poster, '| <?php echo $in_vbf ?> : ', threads[i].threadtime, '</span></td></tr>');
			}
			else
		   {
		   		document.write('<tr bgcolor="<?php echo $tr2 ?>"><td><a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" >' , threads[i].title, '</a>');
				document.write('<br /><span style="color:<?php echo $infocolor ?>"><?php echo $by_vbf ?> : ', threads[i].poster, '| <?php echo $in_vbf ?> : ', threads[i].threadtime, '</span></td></tr>');
			}
	   }
	</script>
</table><br />
</div>
<?php
}
# Table Style 2
if( $module_style == 1)
{
?>
<div  style="font-family:Tahoma, Arial, Verdana;font-size:<?php echo $fsize ?>pt;">
<table width="100%" >
	<script type="text/javascript">
		for (i=0; i<=<?php echo $t_num ?>; i++) {
			if (threads[i].title.length > <?php echo $max_ch ?>)
			{ 
				threads[i].title = threads[i].title.substring(0, <?php echo $max_ch ?>) + "...";
		    }
		    if (i%2==0)
		    {
				document.write('<tr bgcolor="<?php echo $tr1 ?>"><td><a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" title="<?php echo $author_vbf ?> : ', threads[i].poster, ' in ', threads[i].threaddate, '-', threads[i].threadtime, '">', threads[i].title, '</a></td></tr>');
			}
			else
		   {
		   		document.write('<tr bgcolor="<?php echo $tr2 ?>"><td><a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" title="<?php echo $author_vbf ?> : ', threads[i].poster, ' in ', threads[i].threaddate, '-', threads[i].threadtime, '">', threads[i].title, '</a></td></tr>');
		   }
	   }
	</script>
</table><br />
</div>
<?php
}
# Table1 Style 3
if( $module_style == 2)
{
?>
<div  style="font-family:Tahoma, Arial, Verdana;font-size:<?php echo $fsize ?>pt;">
<table width="100%"  >
	<tr>
		<td width="80%"  ><strong><?php echo $title_vbf ?></strong></td>
		<td width="20%" ><strong><?php echo $author_vbf ?></strong></td>
	</tr>
	<script type="text/javascript">
		for (i=0; i<=<?php echo $t_num ?>; i++) {
		if (threads[i].title.length > <?php echo $max_ch ?>)
		{ 
			threads[i].title = threads[i].title.substring(0, <?php echo $max_ch ?>) + "...";
	    }
		document.write('<tr><td ><a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" title="<?php echo $author_vbf ?> : ', threads[i].poster, ' in ', threads[i].threaddate, '-', threads[i].threadtime, '">', threads[i].title, '</a></td><td >', threads[i].poster,'</td></tr>');
		}
	</script>
</table><br/>
</div>
<?php 
}
# Marquee Style
if( $module_style == 3)
{
?>
<div  style="font-family:Tahoma, Arial, Verdana;font-size:<?php echo $fsize ?>pt;background-color:<?php echo $marqueebg ?>">
	<marquee direction="<?php echo $mdir ?>" scrolldelay="60" scrollamount="1" onmouseover="stop();" onmouseout="start();" style="height:<?php echo $height_m ?>px ">
		<script type="text/javascript">
		for (i=0; i<=<?php echo $t_num ?>; i++) {
		if (threads[i].title.length > <?php echo $max_ch ?>)
		{ 
			threads[i].title = threads[i].title.substring(0, <?php echo $max_ch ?>) + "...";
	    }
		document.write('<a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" title="<?php echo $author_vbf ?> : ', threads[i].poster, ' in ', threads[i].threaddate, '-', threads[i].threadtime, '">', threads[i].title, '</a><br>');
		}
		</script></marquee><br />
</div>
<?php
}
# Table Style 4 vbseo
if( $module_style == 4)
{
?>
<div  style="font-family:Tahoma, Arial, Verdana;font-size:<?php echo $fsize ?>pt;">
<table width="100%" >

	<script type="text/javascript">
		for (i=0; i<=<?php echo $t_num ?>; i++) {
			if (threads[i].title.length > <?php echo $max_ch ?>)
			{ 
				threads[i].title = threads[i].title.substring(0, <?php echo $max_ch ?>) + "...";
		    }
		    if (i%2==0)
		    {
				document.write('<tr bgcolor="<?php echo $tr1 ?>"><td><a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" >' , threads[i].title, '</a>');
				document.write('<br /><span style="color:<?php echo $infocolor ?>"><?php echo $by_vbf ?> : <a style="color:<?php echo $infocolor ?>" href="<?php echo $url_js ?>/members/', threads[i].poster, '.html">', threads[i].poster,'</a>| <?php echo $in_vbf ?> : ', threads[i].threadtime, '</span></td></tr>');
			}
			else
		   {
		   		document.write('<tr bgcolor="<?php echo $tr2 ?>"><td><a style="color:<?php echo $linkcolor ?>" href="<?php echo $url_js ?>/showthread.php?t=', threads[i].threadid, '" target="_blank" >' , threads[i].title, '</a>');
				document.write('<br /><span style="color:<?php echo $infocolor ?>"><?php echo $by_vbf ?> : <a style="color:<?php echo $infocolor ?>" href="<?php echo $url_js ?>/members/', threads[i].poster, '.html">', threads[i].poster,'</a>| <?php echo $in_vbf ?> : ', threads[i].threadtime, '</span></td></tr>');			}
	   }
	</script>
</table><br />
</div>
<?php
}
?><!-- END: LastVBF Module -->