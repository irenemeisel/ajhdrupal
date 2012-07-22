<?php

/**
 * Implementation of hook_context_default_contexts().
 */
function og_gallery_context_default_contexts() {
  $items = array();

  $items['context_ui-og_gallery-group'] = array(
    'namespace' => 'context_ui',
    'attribute' => 'og_gallery',
    'value' => 'group',
    'description' => 'Show on group context',
    'og_group_type' => array(
      '0' => 'group',
    ),
    'block' => array(
      'views_og_tab_galleries-block_1' => array(
        'module' => 'views',
        'delta' => 'og_tab_galleries-block_1',
        'weight' => 38,
        'region' => 'sidebar_last',
        'status' => '0',
        'label' => 'Group galleries',
        'type' => 'context_ui',
      ),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function og_gallery_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => 1);
  }
}

/**
 * Implementation of hook_node_info().
 */
function og_gallery_node_info() {
  $items = array(
    'gallery' => array(
      'name' => t('Photo gallery'),
      'module' => 'features',
      'description' => t('A <em>photo gallery</em>, is a collection of images. Users can create as many galleries as they want. Galleries can be posted to one or more groups.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function og_gallery_views_api() {
  return array(
    'api' => '2',
  );
}
