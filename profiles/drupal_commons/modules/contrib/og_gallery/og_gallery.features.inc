<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function og_gallery_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "context" && $api == "context") {
    return array("version" => 3);
  }
  elseif ($module == "strongarm" && $api == "strongarm") {
    return array("version" => 1);
  }
}

/**
 * Implementation of hook_node_info().
 */
function og_gallery_node_info() {
  $items = array(
    'gallery' => array(
      'name' => t('Photo Gallery'),
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
