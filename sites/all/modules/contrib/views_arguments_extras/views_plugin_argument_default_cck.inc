<?php
// $id$

class views_plugin_argument_default_cck extends views_plugin_argument_default {
  
  var $option_name = 'default_argument_cck';

  function argument_form(&$form, &$form_state) {
    $default_options = $this->argument->options;
    $fields = content_fields();
    $options = array();
    $plugins = array();
    $plugins = views_plugin_argument_default_cck();
    $type_selector = array();

    // find all types that are useed and which fields use them
    foreach($fields as $key =>$field) {
      $types[$field['type']][$key] = $key;
    }
    foreach ($plugins as $id => $plugin) {
      if (array_intersect($plugin['types'], array_keys($types))) {
        $options[$id] = $plugin['title'];
        //build info for type select box
        foreach($plugin['types'] as $type_name) {
          foreach($types[$type_name] as $fid => $fname) {
            $type_selector[$id][$fid] = $fname;
          }
        }
      }
    }
    $form[$this->option_name] = array(
      '#title' => 'CCK Type',
      '#type' => 'select',
      '#options' => $options,
      '#default_value' => $default_options[$this->option_name],
      '#process' => array('views_process_dependency'),
      '#dependency' => array(
        'radio:options[default_action]' => array('default'),
        'radio:options[default_argument_type]' => array($this->id)
      ),
      '#dependency_count' => 2,
    );
    foreach($type_selector as $id => $fields) {
      $form_id = $this->option_name ."-$id";
      $form[$form_id] = array(
        '#title' => 'Choose Field',
        '#type' => 'select',
        '#options' => $fields,
      '#default_value' => $default_options[$form_id],
      '#process' => array('views_process_dependency'),
        '#dependency' => array(
          'radio:options[default_action]' => array('default'),
          'radio:options[default_argument_type]' => array($this->id),
          'edit-options-default-argument-cck' => array($id),
        ),
        '#dependency_count' => 3,
        
      );
    }
    foreach ($plugins as $plugin_id => $plugin) {
      if (($form_fun = $plugin['form callback']) && function_exists($form_fun)) {
        $plugin_form = $form_fun();
        foreach($plugin_form as $id => $form_element) {
          $form[$id] = $form_element;
          $form[$id]['#process'] = array('views_process_dependency');
          $form[$id]['#dependency'] = array(
            'radio:options[default_action]' => array('default'),
            'radio:options[default_argument_type]' => array($this->id),
            'edit-options-default-argument-cck' => array($plugin_id),
          );
          $form[$id]['#default_value'] = $default_options[$id];
          $form[$id]['#dependency_count'] = 3;
        }
      }
    }
  }
  function get_argument() {
    //$nid = parent::get_argument();
    $options = $this->argument->options;
    $type = $options[$this->option_name];
    $field_name = $options[$this->option_name ."-$type"];
    $node = views_plugin_argument_default_get_node();
    $field = $node->{$field_name};
    $plugin = views_plugin_argument_default_cck($type);
    if (($arg_fun = $plugin['argument callback']) && function_exists($arg_fun)) {
      $return = $arg_fun($field,$options, $node, $this);
      return $return;
    }
  }
}

function views_plugin_argument_default_get_node() {
    foreach (range(1, 3) as $i) {
      $node = menu_get_object('node', $i);
      if (!empty($node)) {
        return $node;
      }
    }

    if (arg(0) == 'node' && is_numeric(arg(1))) {
      return node_load(arg(1));
    }
}


function views_plugin_argument_default_cck($name=FALSE) {
  ctools_include('plugins'); 
  $defaults = ctools_get_plugins('views_arguments_extras','default');
  if ($name) {
    return $defaults[$name];
  }
  return $defaults;
}
