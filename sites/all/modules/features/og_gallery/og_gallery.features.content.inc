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
        'format' => 'hidden',
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
      'insert' => 0,
      'insert_styles' => array(
        'auto' => 0,
        'link' => 0,
        'image' => 0,
        'group_images__colorbox' => 0,
        'imagecache_Featured' => 0,
        'imagecache_Small' => 0,
        'user_picture_meta__colorbox' => 0,
        'imagecache_group_images' => 0,
        'Featured__colorbox' => 0,
        'imagecache_group_images_thumb' => 0,
        'member_list_image__colorbox' => 0,
        'imagecache_member_list_image' => 0,
        'galleryformatter_thumb__colorbox' => 0,
        'imagecache_profile_pictures' => 0,
        'gallery_small__colorbox' => 0,
        'imagecache_user_picture_meta' => 0,
        'Small__colorbox' => 0,
        'imagecache_galleryformatter_slide' => 0,
        'group_images_thumb__colorbox' => 0,
        'imagecache_galleryformatter_thumb' => 0,
        'profile_pictures__colorbox' => 0,
        'imagecache_gallery_small' => 0,
        'galleryformatter_slide__colorbox' => 0,
        'imagecache_gallery_large' => 0,
        'imagecache_gallery_medium' => 0,
        'gallery_large__colorbox' => 0,
        'gallery_medium__colorbox' => 0,
      ),
      'insert_default' => 'auto',
      'insert_class' => '',
      'insert_width' => '',
      'slide_preset' => 'galleryformatter_slide',
      'thumb_preset' => 'galleryformatter_thumb',
      'style' => 'Greenarrows',
      'link_to_full' => 1,
      'link_to_full_preset' => 'gallery_large',
      'label' => 'Images',
      'weight' => '-2',
      'description' => '',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Description');
  t('Images');

  return $fields;
}
