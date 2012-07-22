<?php

/**
 * Implementation of hook_content_default_fields().
 */
function og_gallery_content_default_fields() {
  $fields = array();

  // Exported field: field_gallery_description
  $fields['gallery-field_gallery_description'] = array(
    'field_name' => 'field_gallery_description',
    'type_name' => 'gallery',
    'display_settings' => array(
      'weight' => '-3',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => '5',
      'size' => 60,
      'default_value' => array(
        '0' => array(
          'value' => '',
          '_error_element' => 'default_value_widget][field_gallery_description][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Description',
      'weight' => '-3',
      'description' => 'Please enter a short description of your image gallery.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_gallery_image
  $fields['gallery-field_gallery_image'] = array(
    'field_name' => 'field_gallery_image',
    'type_name' => 'gallery',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'galleryformatter_default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'galleryformatter_default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '1',
    'multiple' => '1',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => 1,
    'description_field' => '0',
    'widget' => array(
      'file_extensions' => 'png gif jpg jpeg',
      'file_path' => 'galleries/[user]',
      'progress_indicator' => 'bar',
      'max_filesize_per_file' => '',
      'max_filesize_per_node' => '',
      'max_resolution' => '0',
      'min_resolution' => '0',
      'alt' => '',
      'custom_alt' => 0,
      'title' => '',
      'custom_title' => 0,
      'title_type' => 'textfield',
      'default_image' => NULL,
      'use_default_image' => 0,
      'slide_preset' => 'galleryformatter_slide',
      'thumb_preset' => 'galleryformatter_thumb',
      'style' => 'Greenarrows',
      'link_to_full' => 1,
      'link_to_full_preset' => '0',
      'insert' => 0,
      'insert_styles' => array(
        'auto' => 0,
        'link' => 0,
        'image' => 0,
        'Featured__colorbox' => 0,
        'features_test__colorbox' => 0,
        'galleryformatter_slide__colorbox' => 0,
        'galleryformatter_thumb__colorbox' => 0,
        'group_images__colorbox' => 0,
        'group_images_redux__colorbox' => 0,
        'group_images_showcase__colorbox' => 0,
        'group_images_thumb__colorbox' => 0,
        'member_list_image__colorbox' => 0,
        'profile_pictures__colorbox' => 0,
        'Small__colorbox' => 0,
        'tiny__colorbox' => 0,
        'user_picture_meta__colorbox' => 0,
        'wysiwyg_imageupload_preview__colorbox' => 0,
        'imagecache_Featured' => 0,
        'imagecache_features_test' => 0,
        'imagecache_galleryformatter_slide' => 0,
        'imagecache_galleryformatter_thumb' => 0,
        'imagecache_group_images' => 0,
        'imagecache_group_images_redux' => 0,
        'imagecache_group_images_showcase' => 0,
        'imagecache_group_images_thumb' => 0,
        'imagecache_member_list_image' => 0,
        'imagecache_profile_pictures' => 0,
        'imagecache_Small' => 0,
        'imagecache_tiny' => 0,
        'imagecache_user_picture_meta' => 0,
        'imagecache_wysiwyg_imageupload_preview' => 0,
      ),
      'insert_default' => 'auto',
      'insert_class' => '',
      'insert_width' => '',
      'label' => 'Images',
      'weight' => '-2',
      'description' => '',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_gallery_link
  $fields['gallery-field_gallery_link'] = array(
    'field_name' => 'field_gallery_link',
    'type_name' => 'gallery',
    'display_settings' => array(
      'weight' => '7',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'computed',
    'required' => '0',
    'multiple' => '0',
    'module' => 'computed_field',
    'active' => '1',
    'code' => '$node_field[0][\'value\'] = \'\';',
    'display_format' => '$path=$_GET[\'q\'];
//Parse URL to get nid
$links=explode("/",$_GET[\'q\']);
$nid=$links[1];
$img_node=node_load($nid);
$og_nid = reset($img_node->og_groups);
$og_alias=drupal_get_path_alias("node/".$og_nid);

$display = l(\'Back to galleries page\',$og_alias.\'/galleries\');',
    'store' => 0,
    'data_type' => 'varchar',
    'data_length' => '',
    'data_not_NULL' => 0,
    'data_default' => '',
    'data_sortable' => 1,
    'widget' => array(
      'default_value' => NULL,
      'default_value_php' => NULL,
      'label' => 'return',
      'weight' => '7',
      'description' => '',
      'type' => 'computed',
      'module' => 'computed_field',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Description');
  t('Images');
  t('return');

  return $fields;
}
