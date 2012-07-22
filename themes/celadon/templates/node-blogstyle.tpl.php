<?php
// $Id: node-blogstyle.tpl.php,v 1.1.2.1 2009/12/08 20:42:08 atelier Exp $
?>

<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <div class="inner">
    
    <?php if ($page == 0): ?>
      <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php endif; ?>

    <?php if ($node_top && !$teaser): ?>
    <div id="node-top" class="node-top row nested">
      <div id="node-top-inner" class="node-top-inner inner">
        <?php print $node_top; ?>
      </div><!-- /node-top-inner -->
    </div><!-- /node-top -->
    <?php endif; ?>

    <div class="date-label">
      <div class="date_day"><?php print format_date($node->created, 'custom', 'j'); ?></div>
      <div class="date_month"><?php print format_date($node->created, 'custom', 'M'); ?></div>
      <div class="comments_label"><?php print l($node->comment_count, 'node/' . $node->nid, array('fragment' => 'comments')) ?></div>
    </div>
    
    <h1 class="title"><?php print $title; ?></h1>
    
    <div class="post_author"><?php print t('by ') . l($node->name, 'user/' . $node->uid) ?></div>
    
    <div class="content clearfix">
      <?php print $content ?>
      
    </div>

    <?php if ($terms): ?>
    <div class="terms">
      <?php print $terms; ?>
    </div>
    <?php endif;?>

    <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
    <?php endif; ?>
  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div><!-- /node-<?php print $node->nid; ?> -->
