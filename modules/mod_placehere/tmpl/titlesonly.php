<?php // @version $Id: default.php 9836 2008-01-03 16:41:32Z tsai146 $
defined('_JEXEC') or die('Restricted access');
?>
<?php 
 $contentarray = array(); 
 foreach($list as $article) {
 ob_start(); 
 // DO NOT EDIT BEFORE THIS 
?>
    <?php if ($params->get('show_title')) : ?>
    <p class="contentheading<?php echo $params->get('pageclass_sfx'); ?>">
        <?php if ($params->get('link_titles')) : ?>
        <a href="<?php echo $article->url; ?>" class="contentpagetitle<?php echo $params->get('pageclass_sfx'); ?>">
            <?php echo $article->title; ?>
        </a>
        <?php else :
		echo $article->title;
	endif; ?>
    </p>
    <?php endif; ?>
    <?php if ($params->get('show_create_date')) : ?>
        <span class="createdate">
            <?php echo JHTML::_('date', $article->created, JText::_('DATE_FORMAT_LC2')); ?>
        </span>
        <?php endif; ?>
  <?php if ((!empty ($article->modified)) && $params->get('show_modify_date')) : ?>
		<span class="modifydate">
            <?php echo JHTML::_('date', $article->modified, JText::_('DATE_FORMAT_LC2')); ?>
        </span>
        <?php endif; ?>
<?php 
/* DO NOT EDIT AFTER THIS */
$contentarray[] = ob_get_contents();
ob_end_clean();
} 
?>
