<?php
// $Id: views_handler_field_gradebook_attachments_description.inc,v 1.1.2.2 2010/08/20 02:59:26 mgn Exp $

/**
 * @file
 * Field handler to provide a list of file descriptions.
 */

class views_handler_field_gradebook_attachments_description extends views_handler_field_prerender_list {
  function init(&$view, &$options) {
    parent::init($view, $options);
    if (!empty($options['link_to_file'])) {
      $this->additional_fields['fid'] = 'fid';
    }
  }

  function option_definition() {
    $options = parent::option_definition();
    $options['link_to_file'] = array('default' => FALSE);
    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['link_to_file'] = array(
      '#title' => t('Link this field to download the file'),
      '#type' => 'checkbox',
      '#default_value' => !empty($this->options['link_to_file']),
    );
  }

  function pre_render($values) {
 
    if (empty($this->options['link_to_file'])) {
      return;
   }

    $fids = array();
    $this->items = array();
 
    $data = array();
    foreach ($values as $result) {
      if ($result->{$this->aliases['fid']}) {
        $fids[] = $result->{$this->aliases['fid']};
      }
    }
    if ($fids) {
      // Support "only listed files" option.
      $result = db_query("SELECT f.fid, f.filepath, g.description FROM {files} f INNER JOIN {gradebookapi_files} g ON f.fid = g.fid WHERE f.fid IN (" . implode(', ', $fids) . ")");
      while ($file = db_fetch_object($result)) {
        $this->items[$file->fid] = $file;
      }
    }
  }

  function render($values) {
    return $this->render_link($values->{$this->field_alias}, $values);
  }

  /**
   * Render whatever the data is as a link to the file.
   *
   * Data should be made XSS safe prior to calling this function.
   */
  function render_link($data, $value) {
    if (!empty($this->options['link_to_file']) && $value->{$this->aliases['fid']} && $data !== NULL && $data !== '') {
      $values = $this->items[$value->{$this->aliases['fid']}];
      $this->options['alter']['make_link'] = TRUE;
      $this->options['alter']['path'] = file_create_url($values->filepath);
    }
    return $data;
  }
}
