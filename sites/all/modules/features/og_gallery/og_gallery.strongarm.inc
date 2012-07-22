<?php

/**
 * Implementation of hook_strongarm().
 */
function og_gallery_strongarm() {
  $export = array();

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_gallery';
  $strongarm->value = '2';
  $export['comment_gallery'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'content_extra_weights_gallery';
  $strongarm->value = array(
    'title' => '-5',
    'body_field' => '-4',
    'revision_information' => '1',
    'author' => '2',
    'options' => '3',
    'comment_settings' => '4',
    'menu' => '-1',
    'path' => '5',
    'og_nodeapi' => '0',
  );
  $export['content_extra_weights_gallery'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_gallery';
  $strongarm->value = array(
    '0' => 'status',
    '1' => 'promote',
  );
  $export['node_options_gallery'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'og_content_type_usage_gallery';
  $strongarm->value = 'group_post_standard';
  $export['og_content_type_usage_gallery'] = $strongarm;

  return $export;
}
