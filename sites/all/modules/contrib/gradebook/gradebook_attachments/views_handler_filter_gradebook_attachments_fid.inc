<?php
// $Id: views_handler_filter_gradebook_attachments_fid.inc,v 1.1.2.2 2010/08/20 02:59:26 mgn Exp $

/**
 * @file
 * Filter by whether or not a node has attached files from the gradebook_attachments module.
 */
class views_handler_filter_gradebook_attachments_fid extends views_handler_filter_boolean_operator {
  function construct() {
    parent::construct();
    $this->value_value = t('Has attached files');
  }

  function query() {
    $this->ensure_my_table();
    $this->query->add_where($this->options['group'], "(SELECT COUNT(*) FROM {gradebookapi_files} g WHERE g.nid = $this->table_alias.nid) " . (empty($this->value) ? '=' : '<>') . " 0");
  }
}