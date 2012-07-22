<?php
// $Id: embed.inc,v 1.1.2.1 2010/03/13 22:43:00 jbrown Exp $

// Copyright 2007-2008 Jonathan Brown


function bd_video_embed_code($nid) {

  $url = url('node/' . $nid . '/bd_embed', array('absolute' => TRUE));
  $code = '<iframe src="' . $url . '" width="400" height="300" frameborder="0" scrolling="no"></iframe>';
  return htmlspecialchars($code);
}


function _bd_video_embed($node) {

  $settings['video_player_settings_saved'] = TRUE;
  $settings['video_width'] = 400;
  $settings['video_height'] = 300;
  $settings['controlbar_height'] = 24;
  $settings['controlbar_auto_hide'] = 'always';

  _bd_video_set_render_settings($settings);
  $video = _bd_video_render_video(_bd_video_get_first_video($node), 'default');
  
  $output .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
  $output .= '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">';
  $output .= '<head>' . drupal_get_js() . '</head>';
  $output .= '<body style="margin: 0;">' . $video . '</body>';
  $output .= '</html>';

  echo $output;
}

