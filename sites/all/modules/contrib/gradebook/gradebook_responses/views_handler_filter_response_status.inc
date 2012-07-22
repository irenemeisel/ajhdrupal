<?php
// $Id: views_handler_filter_response_status.inc,v 1.1.2.2 2010/08/20 02:59:27 mgn Exp $

/**
 * @file
 * Filter by node type
 */

class views_handler_filter_response_status extends views_handler_filter_in_operator {
  function get_value_options() {
    if (!isset($this->value_options)) {
      $this->value_title = t('Response Status');
      $options = _gradebook_responses_status_string();
      $this->value_options = $options;
    }
  }
}