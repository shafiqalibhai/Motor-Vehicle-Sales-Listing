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
    <ul class="menu<?php echo $params->get('pageclass_sfx'); ?>">
        <?php if ($params->get('link_titles')) : ?>
        <li>
			<a href="<?php echo $article->url; ?>">
	            <?php echo $article->title; ?>
	        </a>
		</li>
        <?php else : ?>
		<li>
			echo $article->title;
		</li>
		<?php endif; ?>
    </ul>
    <?php endif; ?>
	
    
<?php 
/* DO NOT EDIT AFTER THIS */
$contentarray[] = ob_get_contents();
ob_end_clean();
} 
?>