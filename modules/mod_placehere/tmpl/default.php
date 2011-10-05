<?php // no direct access
defined('_JEXEC') or die('Restricted access');
?>

<?php
 $oldsectionid = -1;
 $oldcatid = -1; 
 $contentarray = array(); 
 foreach($list as $article) {
 ob_start(); 
 // DO NOT EDIT BEFORE THIS 
?>

<?php if ($params->get('show_title') || $params->get('show_pdf_icon') || $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
<table class="contentpaneopen">

<?php echo $article->event->beforeDisplayContent; ?>
<?php 
	  if(($article->catid == $oldcatid) &&  ($article->sectionid == $oldsectionid)) { 
     $article->catid = 0;
		 $article->sectionid = 0;
	  } else {
	   $oldcatid = $article->catid; 
	   $oldsectionid = $article->sectionid; 
    }
if (($params->get('section') && $article->sectionid) || ($params->get('category') && $article->catid)) : ?>
<tr>
	<td>
		<?php if ($params->get('show_section') && $article->sectionid) : ?>
		<span class="section">
			<?php echo $article->section; ?>
			<?php if ($params->get('show_category')) : ?>
				<?php echo ' - '; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>

		<?php if ($params->get('show_category') && $article->catid) : ?>
		<span class="category">
			<?php echo $article->category; ?>
		</span>
		<?php endif; ?>
	</td>
</tr>
<?php endif;
   
?>
<?php echo $article->event->afterDisplayContent; ?>

<tr>
	<?php if ($params->get('show_title')) : ?>
	<td class="contentheading<?php echo $params->get( 'pageclass_sfx' ); ?>" width="100%">
		<?php if ($params->get('link_titles') && !empty($article->readmore_link)) : ?>
		<a href="<?php echo $article->readmore_link; ?>" class="contentpagetitle<?php echo $params->get( 'pageclass_sfx' ); ?>">
			<?php echo $article->title; ?>
		</a>
		<?php else : ?>
			<?php echo $article->title; ?>
		<?php endif;  ?>
	</td>
	<?php endif; ?>
	<?php if (!$params->get('print')) : ?>
	<?php if ($params->get('show_pdf_icon')) : ?>
	<td align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.pdf',  $article, $params, $article->access); ?>
	</td>
	<?php endif; ?>

	<?php if ( $params->get( 'show_print_icon' )) : ?>
	<td align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.print_popup',  $article, $params, $article->access); ?>
	</td>
	<?php endif; ?>

	<?php if ($params->get('show_email_icon')) : ?>
	<td align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.email',  $article, $params, $article->access); ?>
	</td>
	<?php endif; ?>
	<?php else : ?>
	<td align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.print_screen',  $article, $params, $this->access); ?>
	</td>
	<?php endif; ?>
</tr>
</table>
<?php endif; ?>

<?php  if (!$params->get('show_intro')) :
	echo $article->event->afterDisplayTitle;
endif; ?>

<?php echo $article->event->beforeDisplayContent; ?>
<table class="contentpaneopen<?php echo $params->get( 'pageclass_sfx' ); ?>">


<?php if (($params->get('show_author')) && ($article->author != "")) : ?>
<tr>
	<td width="70%"  valign="top" colspan="2">
		<span class="small">
			<?php JText::printf( 'Written by', ($article->created_by_alias ? $article->created_by_alias : $article->author) ); ?>
		</span>
		&nbsp;&nbsp;
	</td>
</tr>
<?php endif; ?>

<?php if ($params->get('show_create_date')) : ?>
<tr>
	<td valign="top" colspan="2" class="createdate">
		<?php echo JHTML::_('date', $article->created, JText::_('DATE_FORMAT_LC2')) ?>
	</td>
</tr>
<?php endif; ?>

<?php if ($params->get('show_url') && $article->urls) : ?>
<tr>
	<td valign="top" colspan="2">
		<a href="http://<?php echo $article->urls ; ?>" target="_blank">
			<?php echo $article->urls; ?></a>
	</td>
</tr>
<?php endif; ?>

<tr>
<td valign="top" colspan="2">
<?php if (isset ($article->toc)) : ?>
	<?php echo $article->toc; ?>
<?php endif; ?>
<?php echo $article->text; ?>
</td>
</tr>

<?php if ( $article->modified !='' && $params->get('show_modify_date')) : ?>
<tr>
	<td colspan="2"  class="modifydate">
		<?php echo JText::_( 'Last Updated' ); ?> ( <?php echo JHTML::_('date', $article->modified, JText::_('DATE_FORMAT_LC2')); ?> )
	</td>
</tr>
<?php endif; ?>

<?php if ($params->get('show_readmore') && $params->get('show_intro') && $article->readmore_text) : ?>
<tr>
	<td  colspan="2">
		<a href="<?php echo $article->readmore_link; ?>" class="readon<?php echo $params->get( 'pageclass_sfx' ); ?>">
			<?php echo $article->readmore_text; ?>
		</a>
	</td>
</tr>
<?php endif; ?>

</table>
<span class="article_separator">&nbsp;</span>
<?php echo $article->event->afterDisplayContent; ?>

<?php 
/* DO NOT EDIT AFTER THIS */
$contentarray[] = ob_get_contents();
ob_end_clean();
} 
?>
