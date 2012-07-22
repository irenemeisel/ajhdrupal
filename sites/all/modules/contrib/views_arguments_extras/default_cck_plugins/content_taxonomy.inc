<?php
// $id$

function views_arguments_extras_content_taxonomy_views_arguments_extras_default() {
  return array(
    'title' => 'Content Taxonomy',
    'types' => array('content_taxonomy'),
    'form callback' => 'views_plugin_argument_default_cck_content_taxonomy_form',
    'argument callback' => 'views_plugin_argument_default_cck_content_taxonomy_argument',

  );
}

function views_plugin_argument_default_cck_content_taxonomy_form() {
  return array(
    'content_taxonomy_format' => array(
      '#title' => 'Format',
      '#type' => 'select',
      '#options' => array('tid'=>'TID', 'name'=>'Term Name'),
    )
  );
}
function views_plugin_argument_default_cck_content_taxonomy_argument($field, $options) {
  $format = $options['content_taxonomy_format'];
  $tid = $field[0]['value'];
  switch ($format) {
    case 'tid' : 
      return $tid;
    break;
    case 'name' : 
      $term = taxonomy_get_term($tid);
      return $term->name;
    break; 
  }
}
