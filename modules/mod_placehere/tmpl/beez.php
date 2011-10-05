<?php // @version $Id: default.php 9836 2008-01-03 16:41:32Z tsai146 $
defined('_JEXEC') or die('Restricted access');
?>
<?php
 $oldsectionid = -1;
 $oldcatid = -1; 
 $contentarray = array(); 
 foreach($list as $article) {
 ob_start(); 
 
 if(($article->catid == $oldcatid) &&  ($article->sectionid == $oldsectionid)) { 
	$article->catid = 0;
	$article->sectionid = 0;
	} else {
	$oldcatid = $article->catid; 
	$oldsectionid = $article->sectionid; 
 } 
 
 // DO NOT EDIT BEFORE THIS 
?>
    <?php if ($params->get('show_page_title')) : ?>
    <h1 class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
        <?php echo $params->get('page_title'); ?>
    </h1>
    <?php endif; ?>
    <?php if ($params->get('show_title')) : ?>
    <h2 class="contentheading<?php echo $params->get('pageclass_sfx'); ?>">
        <?php if ($params->get('link_titles') && $article->readmore_link != '') : ?>
        <a href="<?php echo $article->readmore_link; ?>" class="contentpagetitle<?php echo $params->get('pageclass_sfx'); ?>">
            <?php echo $article->title; ?>
        </a>
        <?php else :
		echo $article->title;
	endif; ?>
    </h2>
    <?php endif; ?>
    <?php if ((!empty ($article->modified) && $params->get('show_modify_date')) || ($params->get('show_author') && ($article->author != "")) || ($params->get('show_create_date'))) : ?>
    <p class="articleinfo">
        <?php if (!empty ($article->modified) && $params->get('show_modify_date')) : ?>
        <span class="modifydate">
            <?php echo JText::_('Last Updated').' ('.JHTML::_('date', $article->modified, JText::_('DATE_FORMAT_LC2')).')'; ?>
        </span>
        <?php endif; ?>
        <?php if (($params->get('show_author')) && ($article->author != "")) : ?>
        <span class="createdby">
            <?php JText::printf('Written by', ($article->created_by_alias ? $article->created_by_alias : $article->author)); ?>
        </span>
        <?php endif; ?>
        <?php if ($params->get('show_create_date')) : ?>
        <span class="createdate">
            <?php echo JHTML::_('date', $article->created, JText::_('DATE_FORMAT_LC2')); ?>
        </span>
        <?php endif; ?>
    </p>
    <?php endif; ?>
    <?php if (!$params->get('show_intro')) :
	echo $article->event->afterDisplayTitle;
endif; ?>
    <p class="buttonheading">
        <?php if ($params->get('show_pdf_icon') || $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
        <img src="./templates/beez/images/trans.gif" alt="<?php echo JText::_('attention open in a new window'); ?>" />
        <?php if ($params->get('show_pdf_icon')) :
		echo JHTML::_('icon.pdf', $article, $params, $article->access);
	endif;
	if ($params->get('show_print_icon')) :
		echo JHTML::_('icon.print_popup', $article, $params, $article->access);
	endif;
	if ($params->get('show_email_icon')) :
		echo JHTML::_('icon.email', $article, $params, $article->access);
	endif;
	endif; ?>
    </p>
    <?php if (($params->get('show_section') && $article->sectionid) || ($params->get('show_category') && $article->catid)) : ?>
    <p class="iteminfo">
        <?php if ($params->get('show_section') && $article->sectionid) : ?>
        <span>
            <?php if ($params->get('link_section')) : ?>
            <?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($article->sectionid)).'">'; ?>
            <?php endif; ?>
            <?php echo $article->section; ?>
            <?php if ($params->get('link_section')) : ?>
            <?php echo '</a>'; ?>
            <?php endif; ?>
            <?php if ($params->get('show_category')) : ?>
            <?php echo ' - '; ?>
            <?php endif; ?>
        </span>
        <?php endif; ?>
        <?php if ($params->get('show_category') && $article->catid) : ?>
        <span>
            <?php if ($params->get('link_category')) : ?>
            <?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($article->catslug, $article->sectionid)).'">'; ?>
            <?php endif; ?>
            <?php echo $article->category; ?>
            <?php if ($params->get('link_category')) : ?>
            <?php echo '</a>'; ?>
            <?php endif; ?>
        </span>
        <?php endif; ?>
    </p>
    <?php endif; ?>
    <?php echo $article->event->beforeDisplayContent; ?>
    <?php if ($params->get('show_url') && $article->urls) : ?>
    <span class="small"><a href="<?php echo $article->urls; ?>" target="_blank">
            <?php echo $article->urls; ?>
        </a></span>
    <?php endif; ?>
    <?php if (isset ($article->toc)) :
	echo $article->toc;
endif; ?>
    <?php echo JFilterOutput::ampReplace($article->text); ?>
<?php if ($params->get('show_readmore') && $params->get('show_intro') && $article->readmore_text) { ?>
<p>
		<a href="<?php echo $article->readmore_link; ?>" class="readon<?php echo $params->get( 'pageclass_sfx' ); ?>">
			<?php echo $article->readmore_text; ?>
		</a>
	
</p>
<?php } else { ?>
	<a name="spacer" class="readon">&nbsp;</a>
<?php } ?>
    <?php echo $article->event->afterDisplayContent; ?>

<?php 
/* DO NOT EDIT AFTER THIS */
$contentarray[] = ob_get_contents();
ob_end_clean();
} 
?>
