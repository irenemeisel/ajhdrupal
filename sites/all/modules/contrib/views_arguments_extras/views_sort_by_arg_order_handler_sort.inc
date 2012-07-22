<?php
// $id$


class views_sort_by_arg_order_handler_sort extends views_handler_sort {


  function option_definition() {
    $options = parent::option_definition();
    $options['inherit_type'] = array('default' => 1);
    $options['null_below'] = array('default' => 1);
    return $options;
  }

  function options_form(&$form, $form_state) {
    parent::options_form($form, $form_state);
    $form['argument_number'] = array(
      '#title' => t('Argument'),
      '#type' => 'select',
      '#options' => array(1,2,3,4,5,6,7,8,9),
      '#default_value' => $this->options['argument_number'],
    );
    $data = views_fetch_data();
    foreach ($data as $table => $fields) {
      foreach($fields as $field => $f) {
      if ($f['title']) {
          $group = $f['group'] ? $f['group'] : $fields['table']['group'];
          $options[$group][$table ."::" .$field] = $f['title'];
          $group_options[$group] = $group;
        }
      }
    }
    $form['null_below'] = array(
      '#type' => 'checkbox',
      '#title' => 'Non arguments at End',
      '#description' => t('Place items not in the argument at the end.'),
      '#default_value' => $this->options['null_below'],
      '#options' => array( 0, 'Null values below'),
    );
    $form['inherit_type'] = array(
      '#type' => 'checkbox',
      '#title' => 'Inherit type of Field from Argument',
      '#description' => t('If the argument is the NULL argument or you want to choose a different type for linking the uncheck, otherwise it is safe to leave it checked.'),
      '#default_value' => $this->options['inherit_type'],
      '#options' => array( 0, 'Inherit type of Field from Argument'),
    );
    $form['type_of_argument_group'] = array(
      '#title' => t('Type of Argument'),
      '#type' => 'select',
      '#options' => $group_options,
      '#default_value' => $this->options['type_of_argument_group'],
      '#process' => array('views_process_dependency'),
      '#dependency' => array(
        'edit-options-inherit-type' => array(0),
      ),
      '#dependency_count' => 1,
    );

    array_shift($group_options);
    foreach($group_options as $group) {

      $form[$group] = array(
        '#type' => 'select',
        '#options' => $options[$group],
        '#default_value' => $this->options[$group],
        '#process' => array('views_process_dependency'),
        '#dependency' => array(
          'edit-options-inherit-type' => array(0),
          'edit-options-type-of-argument-group' => array($group),
        ),
        '#dependency_count' => 2,
        
      );
    }

  }
  /*
   * We are going to Create a temp table, populate it with the argument
   * and then change the query to link to the temp table and sort on its
   * weight
   */
  function query() {
    // retrive options
    $arg_to_use = $this->options['argument_number'];
    $inherit_type = $this->options['inherit_type'];
    $order = $this->options['order'];
    $null_below = $this->options['null_below'];

    // find the table and field to which we will link
    $left_table = '';
    $left_field = '';
    // if inherited look at the argument to get table and field
    if ($inherit_type) {
      $arg_handlers = array_values($this->view->argument);
      $arg_handler = $arg_handlers[$arg_to_use];
      $left_table = $arg_handler->table;
      $left_field = $arg_handler->field;
    }
    else {
      $group = $this->options['type_of_argument_group'];
      list($left_table, $left_field) = explode('::', $this->options[$group]);
    }

    // find the type of field to which we are linking
    $schema = drupal_get_schema($left_table);
    $value_db_type = $schema['fields'][$left_field]['type'];

    // check to insure we have field type else assume int
    if ($value_db_type) {
      $value_query_type = db_type_placeholder($value_db_type);
    }
    else {
      $value_db_type = 'varchar(255)';
      $value_query_type = "'%s'";

    }

    // create an populate temp table
    $current_table = $this->table;
    $args = $this->view->args;
    $items = explode(',',$args[$arg_to_use]);
    $items = $invert_order ? array_reverse($items) : $items;
    foreach ($items as $o => $value) {
      $this->sort_values[$value] = $o;
      if($value) {
        $case_items[] = "WHEN $value_query_type THEN $o ";
        $case_items_args[] = $value;
        $max_o = $max_o > $o ? $max_o : $o;
      }
    }
    if ($case_items) {
      $is_desc = ($order == 'DESC');
      $null_o = $is_desc == $null_below ? -1 : $max_o+1;
       
      $order_by = "CASE $left_table.$left_field ". implode("", $case_items) . " ELSE $null_o END $order" ;
      _db_query_callback($case_items_args, TRUE);
      $order_by =  preg_replace_callback(DB_QUERY_REGEXP, '_db_query_callback', $order_by);
      $this->query->orderby[$this->position] = $order_by;
    }
  }
}
