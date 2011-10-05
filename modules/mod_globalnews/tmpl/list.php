<?php

defined('_JEXEC') or die('Restricted access'); ?>

<div class="gn_list_<?php echo $globalnews_id; ?>">
  <ul>
    <?php foreach ($list as $item) :  ?>
    <li> <?php echo $item->title; ?> </li>
    <?php endforeach; ?>
    <?php if ( $more == 1 && $group->link ) { ?>
    <li class="gn_more"> <?php echo JHTML::_('link', $group->link, JText::_('More Articles...') ); ?> </li>
    <?php } ?>
  </ul>
</div>
