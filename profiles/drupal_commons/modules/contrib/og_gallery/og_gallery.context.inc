<?php

/**
 * Implementation of hook_context_default_contexts().
 */
function og_gallery_context_default_contexts() {
  $export = array();
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'context_ui-og_gallery-group';
  $context->description = 'Show on group context';
  $context->tag = '';
  $context->conditions = array();
  $context->reactions = array();
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Show on group context');

  $export['context_ui-og_gallery-group'] = $context;
  return $export;
}
