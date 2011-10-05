<?php // no direct access

defined('_JEXEC') or die('Restricted access');

foreach ($list as $item) :  ?>

<div class="gn_static_<?php echo $globalnews_id; ?>">
	<?php echo modGlobalNewsHelper::renderGN_Content($params,$item); ?>
</div>
<?php 
endforeach; ?>
<?php if ( $more == 1 && $group->link ) { ?>
<ul>
  <li class="gn_more"> <?php echo JHTML::_('link', $group->link, JText::_('More Articles...') ); ?> </li>
</ul>
<?php } ?>
