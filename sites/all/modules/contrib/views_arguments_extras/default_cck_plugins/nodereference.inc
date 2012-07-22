<?php
// $id$

function views_arguments_extras_nodereference_views_arguments_extras_default() {
  return array(
    'title' => 'Node Reference',
    'types' => array('nodereference'),
    'form callback' => 'views_plugin_argument_default_cck_nodereference_form',
    'argument callback' => 'views_plugin_argument_default_cck_nodereference_argument',

  );
}


function views_plugin_argument_default_cck_nodereference_form() {
  return array(
    'argument_default_cck_nodereference_format' => array(
      '#title' => 'Format',
      '#type' => 'select',
      '#options' => array('nid'=>'NID', 'title'=>'Title'),
    ),
    'argument_default_cck_nodereference_delta' => array(
      '#title' => 'Delta',
      '#type' => 'select',
      '#options' => array('all', 1, 2, 3, 4, 5, 6, 7, 8, 9),
    ),
  );
}
function views_plugin_argument_default_cck_nodereference_argument($field, $options) {
  $format = $options['argument_default_cck_nodereference_format'];
  $delta  = $options['argument_default_cck_nodereference_delta'];
  $field = is_array($field) ? $field : array();
  if ($delta) {
    return views_plugin_argument_default_cck_nodereference_get_value($field[$delta], $format);
  }
  else {
  $nodes = array();
    foreach ($field as $item) {
      $nodes[] = views_plugin_argument_default_cck_nodereference_get_value($item, $format);
    }
  return implode(',',$nodes);
  }
}
function views_plugin_argument_default_cck_nodereference_get_value($item, $format) {
  $nid = $item['nid'];
  switch ($format) {
    case 'nid' : return $nid;
    case 'title' : 
      $node = node_load($nid);
      return $node->title;
    break;
  }
}
