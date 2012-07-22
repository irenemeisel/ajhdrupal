<?php
// $Id: node-product.tpl.php,v 1.1 2009/11/23 16:02:37 atelier Exp $
?>

<div id="node-<?php print $node->nid; ?>" class="node clear-block <?php print $node_classes; ?>">
  <div class="inner">
    <?php if ($page == 0): ?>
    <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php endif; ?>

    <div id="product-group" class="product-group">
      <div class="images">
        <?php print $fusion_uc_image; ?>
      </div><!-- /images -->

      <div class="content clearfix">
        <div id="content-body">
          <?php print $fusion_uc_body; ?>
        </div>

        <div id="product-details" class="clear">
          <div id="price-group">
            <?php print $fusion_uc_display_price; ?>
            <?php print $fusion_uc_add_to_cart; ?>
          </div>

          <div id="field-group">
            <?php print $fusion_uc_weight; ?>
            <?php print $fusion_uc_dimensions; ?>
            <?php print $fusion_uc_model; ?>
            <?php print $fusion_uc_list_price; ?>
            <?php print $fusion_uc_sell_price; ?>
            <?php print $fusion_uc_cost; ?>
          </div>
        </div><!-- /product-details -->

        <?php if ($fusion_uc_additional && !$teaser): ?>
        <div id="product-additional" class="product-additional">
          <?php print $fusion_uc_additional; ?>
        </div>
        <?php endif; ?>

        <?php if ($links && !$teaser): ?>
        <div class="links clear">
          <?php print $links; ?>
        </div>
        <?php endif; ?>
      </div><!-- /content -->
    </div><!-- /product-group -->
  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div>
