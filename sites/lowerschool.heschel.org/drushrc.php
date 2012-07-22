<?php 


$options['db_type'] = 'mysqli';
$options['db_host'] = 'aegir.heschel.org';
$options['db_port'] = 3306;
$options['db_passwd'] = 'uvegMNm5t3';
$options['db_name'] = 'lowerschoolhesch';
$options['db_user'] = 'lowerschoolhesch';
$options['installed'] = true;
$options['site_ip_addresses'] = array (
);
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.19',
      'description' => 'This platform is running Drupal 6.19',
    ),
  ),
  'profiles' => 
  array (
    'drupal_commons' => 
    array (
      'name' => 'drupal_commons',
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/drupal_commons.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Drupal Commons',
        'description' => '<img src="./profiles/drupal_commons/images/logo.png" alt="Drupal Commons" title="Drupal Commons"/><br/>Social collaboration software.',
        'languages' => 
        array (
          0 => 'en',
        ),
        'version' => NULL,
      ),
      'version' => '6.19',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'acquia_agent' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/acquia/acquia_connector/acquia_agent/acquia_agent.module',
      'name' => 'acquia_agent',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia agent',
        'description' => 'Allows Drupal to securely communicate with the Acquia Network, and checks for updates to Acquia Drupal.',
        'package' => 'Acquia Network Connector',
        'php' => '5.0',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'acquia_connector',
        'datestamp' => '1276745405',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'acquia_connector',
      'version' => '6.x-1.9',
    ),
    'acquia_network_subscription' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/acquia_network_subscription/acquia_network_subscription.module',
      'name' => 'acquia_network_subscription',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'acquia_agent',
          1 => 'acquia_search',
          2 => 'acquia_spi',
          3 => 'apachesolr',
          4 => 'apachesolr_nodeaccess',
          5 => 'apachesolr_og',
          6 => 'apachesolr_search',
          7 => 'context',
          8 => 'context_ui',
          9 => 'mollom',
          10 => 'search',
          11 => 'strongarm',
        ),
        'description' => 'Integrate the Acquia Network with Drupal Commons',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'variable' => 
          array (
            0 => 'apachesolr_enabled_facets',
          ),
        ),
        'name' => 'Acquia Network Subscription',
        'package' => 'Features',
        'project' => 'acquia_network_subscription',
        'version' => '6.x-1.0',
        'php' => '4.3.5',
      ),
      'project' => 'acquia_network_subscription',
      'version' => '6.x-1.0',
    ),
    'acquia_search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/acquia/acquia_search/acquia_search.module',
      'name' => 'acquia_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia search',
        'description' => 'Provides integration between your Drupal site and Acquia\'s hosted search service.',
        'package' => 'Acquia Network Connector',
        'core' => '6.x',
        'project' => 'acquia_search',
        'project status url' => 'http://updates.acquia.com/release-history',
        'version' => '6.x-1.5256',
        'dependencies' => 
        array (
          0 => 'acquia_agent',
          1 => 'apachesolr',
          2 => 'apachesolr_search',
          3 => 'search',
        ),
        'acquia' => '1',
        'php' => '4.3.5',
      ),
      'project' => 'acquia_search',
      'version' => '6.x-1.5256',
    ),
    'acquia_spi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/acquia/acquia_connector/acquia_spi/acquia_spi.module',
      'name' => 'acquia_spi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia site information',
        'description' => 'Sends a site profile including Acquia Drupal version, platform and module information; number of posts, comments and users; as well as file hashes and file metainformation on files in the system to the Acquia Network to facilitate support and update notifications.',
        'package' => 'Acquia Network Connector',
        'php' => '5.0',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'acquia_agent',
        ),
        'version' => '6.x-1.9',
        'project' => 'acquia_connector',
        'datestamp' => '1276745405',
      ),
      'project' => 'acquia_connector',
      'version' => '6.x-1.9',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'admin_menu',
        'datestamp' => '1246537502',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'admin_menu',
      'version' => '6.x-1.5',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'ajax_load' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ajax_load/ajax_load.module',
      'name' => 'ajax_load',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax Load',
        'description' => 'Helper module to load and add JavasScript and CSS data for Ajax-loaded content.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'ajax_load',
        'datestamp' => '1278833379',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ajax_load',
      'version' => '6.x-1.x-dev',
    ),
    'ajax_load_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ajax_load/ajax_load_example/ajax_load_example.module',
      'name' => 'ajax_load_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax load example',
        'description' => 'Example module to demonstrate Ajax load functionality.',
        'package' => 'User interface',
        'dependencies' => 
        array (
          0 => 'ajax_load',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'ajax_load',
        'datestamp' => '1278833379',
        'php' => '4.3.5',
      ),
      'project' => 'ajax_load',
      'version' => '6.x-1.x-dev',
    ),
    'apachesolr' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/apachesolr/apachesolr.module',
      'name' => 'apachesolr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr framework',
        'description' => 'Framework for searching with Solr',
        'dependencies' => 
        array (
          0 => 'search',
        ),
        'package' => 'Apache Solr',
        'core' => '6.x',
        'php' => '5.1.4',
        'version' => '6.x-1.1',
        'project' => 'apachesolr',
        'datestamp' => '1280090703',
      ),
      'project' => 'apachesolr',
      'version' => '6.x-1.1',
    ),
    'apachesolr_image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/apachesolr/contrib/apachesolr_image/apachesolr_image.module',
      'name' => 'apachesolr_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr image module integration',
        'description' => 'Integrates the Apache Solr and Image modules',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'apachesolr',
        ),
        'package' => 'Apache Solr',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'apachesolr',
        'datestamp' => '1280090703',
        'php' => '4.3.5',
      ),
      'project' => 'apachesolr',
      'version' => '6.x-1.1',
    ),
    'apachesolr_nodeaccess' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/apachesolr/contrib/apachesolr_nodeaccess/apachesolr_nodeaccess.module',
      'name' => 'apachesolr_nodeaccess',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr node access',
        'description' => 'Integrates the node access system with Apache Solr search',
        'dependencies' => 
        array (
          0 => 'apachesolr',
        ),
        'package' => 'Apache Solr',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'apachesolr',
        'datestamp' => '1280090703',
        'php' => '4.3.5',
      ),
      'project' => 'apachesolr',
      'version' => '6.x-1.1',
    ),
    'apachesolr_og' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/apachesolr/contrib/apachesolr_og/apachesolr_og.module',
      'name' => 'apachesolr_og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr Organic Groups',
        'description' => 'Integrates Organic Groups and Apache Solr Search',
        'dependencies' => 
        array (
          0 => 'apachesolr',
          1 => 'og',
        ),
        'package' => 'Apache Solr',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'apachesolr',
        'datestamp' => '1280090703',
        'php' => '4.3.5',
      ),
      'project' => 'apachesolr',
      'version' => '6.x-1.1',
    ),
    'apachesolr_search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/apachesolr/apachesolr_search.module',
      'name' => 'apachesolr_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr search',
        'description' => 'Search with Solr',
        'dependencies' => 
        array (
          0 => 'search',
          1 => 'apachesolr',
        ),
        'package' => 'Apache Solr',
        'core' => '6.x',
        'php' => '5.1.4',
        'version' => '6.x-1.1',
        'project' => 'apachesolr',
        'datestamp' => '1280090703',
      ),
      'project' => 'apachesolr',
      'version' => '6.x-1.1',
    ),
    'better_formats' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/better_formats/better_formats.module',
      'name' => 'better_formats',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6110',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Better Formats',
        'description' => 'Enhances the core input format system by managing input format defaults and settings.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'better_formats',
        'datestamp' => '1265402405',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'better_formats',
      'version' => '6.x-1.2',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the boxes that are displayed around the main content.',
        'package' => 'Core - required',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'blogapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/blogapi/blogapi.module',
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog API',
        'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to structure site pages in a hierarchy or outline.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.6',
        'project' => 'ctools',
        'datestamp' => '1275441007',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.6',
    ),
    'calendar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/calendar/calendar.module',
      'name' => 'calendar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Calendar',
        'description' => 'Views plugin to display views containing dates as Calendars.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'date_api',
          2 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'calendar',
        'datestamp' => '1248867038',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.2',
    ),
    'calendar_ical' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/calendar/calendar_ical/calendar_ical.module',
      'name' => 'calendar_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar iCal',
        'description' => 'Adds ical functionality to Calendar views.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'date_api',
          2 => 'calendar',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'calendar',
        'datestamp' => '1248867038',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.2',
    ),
    'chart' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/chart/chart.module',
      'name' => 'chart',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chart API',
        'description' => 'Chart generation API.',
        'package' => 'Charting',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'chart',
        'datestamp' => '1221170703',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'chart',
      'version' => '6.x-1.2',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows the user to change the color scheme of certain themes.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'commons' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/custom/commons/commons.module',
      'name' => 'commons',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commons',
        'core' => '6.x',
        'description' => 'Provide Drupal amendments to assist with Commons environment',
        'package' => 'Commons',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_core' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_core/commons_core.module',
      'name' => 'commons_core',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
          1 => 'aggregator',
          2 => 'ajax_load',
          3 => 'better_formats',
          4 => 'blog',
          5 => 'calendar',
          6 => 'comment',
          7 => 'commons',
          8 => 'contact',
          9 => 'content',
          10 => 'content_permissions',
          11 => 'context',
          12 => 'context_contrib',
          13 => 'context_og',
          14 => 'context_ui',
          15 => 'ctools',
          16 => 'date',
          17 => 'date_api',
          18 => 'date_popup',
          19 => 'date_timezone',
          20 => 'date_tools',
          21 => 'dblog',
          22 => 'diff',
          23 => 'editablefields',
          24 => 'features',
          25 => 'fieldgroup',
          26 => 'filefield',
          27 => 'filefield_meta',
          28 => 'flag',
          29 => 'flag_heartbeat',
          30 => 'freelinking',
          31 => 'friendlist_activity',
          32 => 'getid3',
          33 => 'heartbeat',
          34 => 'heartbeat_views',
          35 => 'hrules',
          36 => 'imageapi',
          37 => 'imageapi_gd',
          38 => 'imagecache',
          39 => 'imagecache_canvasactions',
          40 => 'imagecache_profiles',
          41 => 'imagecache_ui',
          42 => 'imagefield',
          43 => 'insert',
          44 => 'jcalendar',
          45 => 'link',
          46 => 'menu',
          47 => 'og',
          48 => 'og_access',
          49 => 'og_activity',
          50 => 'og_aggregator',
          51 => 'og_statistics',
          52 => 'og_views',
          53 => 'optionwidgets',
          54 => 'page_manager',
          55 => 'panels',
          56 => 'path',
          57 => 'pathauto',
          58 => 'php',
          59 => 'poll',
          60 => 'profile',
          61 => 'rules',
          62 => 'rules_admin',
          63 => 'search',
          64 => 'shoutbox',
          65 => 'shoutbox_group',
          66 => 'shoutbox_points',
          67 => 'strongarm',
          68 => 'tagadelic',
          69 => 'tagadelic_views',
          70 => 'tagging',
          71 => 'taxonomy',
          72 => 'text',
          73 => 'token',
          74 => 'tracker',
          75 => 'user_relationship_blocks',
          76 => 'user_relationship_elaborations',
          77 => 'user_relationship_mailer',
          78 => 'user_relationship_views',
          79 => 'user_relationships_api',
          80 => 'user_relationships_rules',
          81 => 'user_relationships_ui',
          82 => 'user_terms',
          83 => 'userpoints',
          84 => 'userpoints_nc',
          85 => 'userpoints_user_picture',
          86 => 'vertical_tabs',
          87 => 'views',
          88 => 'views_content',
          89 => 'views_ui',
          90 => 'wikitools',
          91 => 'wysiwyg',
        ),
        'description' => 'The main components of Drupal Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'blog-field_content_images',
            1 => 'blog-field_featured_content',
            2 => 'blog-field_group_sticky',
            3 => 'discussion-field_content_images',
            4 => 'discussion-field_featured_content',
            5 => 'discussion-field_group_sticky',
            6 => 'document-field_featured_content',
            7 => 'document-field_file',
            8 => 'document-field_group_sticky',
            9 => 'event-field_content_images',
            10 => 'event-field_date',
            11 => 'event-field_featured_content',
            12 => 'event-field_group_sticky',
            13 => 'event-field_location',
            14 => 'group-field_featured_group',
            15 => 'group-field_group_image',
            16 => 'group-field_grouplink',
            17 => 'notice-field_content_images',
            18 => 'poll-field_content_images',
            19 => 'poll-field_featured_content',
            20 => 'wiki-field_content_images',
            21 => 'wiki-field_featured_content',
            22 => 'wiki-field_group_sticky',
          ),
          'context' => 
          array (
            0 => 'context_ui-content-global_content',
            1 => 'context_ui-dashboard-dashboard',
            2 => 'context_ui-global-global',
            3 => 'context_ui-group-group',
            4 => 'context_ui-profile-profile',
            5 => 'context_ui-users-user_browser',
          ),
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'blog-group_images',
            1 => 'blog-group_promote_content',
            2 => 'discussion-group_images',
            3 => 'discussion-group_promote_content',
            4 => 'document-group_promote_content',
            5 => 'document-group_upload',
            6 => 'event-group_event_details',
            7 => 'event-group_images',
            8 => 'event-group_promote_content',
            9 => 'group-group_attributes',
            10 => 'group-group_promote_content',
            11 => 'notice-group_images',
            12 => 'poll-group_images',
            13 => 'poll-group_promote_content',
            14 => 'wiki-group_images',
            15 => 'wiki-group_promote_content',
          ),
          'heartbeat' => 
          array (
            0 => 'heartbeat_create_user',
            1 => 'heartbeat_delete_comment',
            2 => 'heartbeat_delete_content',
            3 => 'heartbeat_delete_user',
            4 => 'heartbeat_flag_content',
            5 => 'heartbeat_friend_removed',
            6 => 'heartbeat_join_group',
            7 => 'heartbeat_leave_group',
          ),
          'imagecache' => 
          array (
            0 => 'Featured',
            1 => 'Small',
            2 => 'group_images',
            3 => 'group_images_thumb',
            4 => 'member_list_image',
            5 => 'profile_pictures',
            6 => 'user_picture_meta',
          ),
          'node' => 
          array (
            0 => 'discussion',
            1 => 'document',
            2 => 'event',
            3 => 'group',
            4 => 'notice',
            5 => 'page',
            6 => 'wiki',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view_panel_context',
            1 => 'user_view_panel_context',
          ),
          'page_manager_pages' => 
          array (
            0 => 'Home',
            1 => 'user_dashboard',
          ),
          'rules_categories' => 
          array (
            0 => 'commons_core',
          ),
          'variable' => 
          array (
            0 => 'comment_default_order_blog',
            1 => 'comment_default_order_discussion',
            2 => 'comment_default_order_document',
            3 => 'comment_default_order_event',
            4 => 'comment_default_order_notice',
            5 => 'comment_default_order_poll',
            6 => 'comment_default_order_wiki',
            7 => 'comment_group',
            8 => 'comment_preview_blog',
            9 => 'comment_preview_discussion',
            10 => 'comment_preview_document',
            11 => 'comment_preview_event',
            12 => 'comment_preview_notice',
            13 => 'comment_preview_poll',
            14 => 'comment_preview_wiki',
            15 => 'content_extra_weights_blog',
            16 => 'content_extra_weights_discussion',
            17 => 'content_extra_weights_document',
            18 => 'content_extra_weights_event',
            19 => 'content_extra_weights_group',
            20 => 'content_extra_weights_notice',
            21 => 'content_extra_weights_poll',
            22 => 'content_extra_weights_wiki',
            23 => 'freelinking_camelcase',
            24 => 'freelinking_nodetype',
            25 => 'freelinking_notfound',
            26 => 'freelinking_onceonly',
            27 => 'freelinking_restriction',
            28 => 'heartbeat_access_types',
            29 => 'heartbeat_relations_api',
            30 => 'heartbeat_show_user_profile_messages_privateheartbeat',
            31 => 'node_options_blog',
            32 => 'node_options_discussion',
            33 => 'node_options_document',
            34 => 'node_options_event',
            35 => 'node_options_forum',
            36 => 'node_options_group',
            37 => 'node_options_notice',
            38 => 'node_options_page',
            39 => 'node_options_poll',
            40 => 'node_options_wiki',
            41 => 'og_audience_required',
            42 => 'og_content_type_usage_blog',
            43 => 'og_content_type_usage_discussion',
            44 => 'og_content_type_usage_document',
            45 => 'og_content_type_usage_event',
            46 => 'og_content_type_usage_group',
            47 => 'og_content_type_usage_notice',
            48 => 'og_content_type_usage_page',
            49 => 'og_content_type_usage_poll',
            50 => 'og_content_type_usage_wiki',
            51 => 'og_home_page_view',
            52 => 'og_private_groups',
            53 => 'og_visibility',
            54 => 'pathauto_node_blog_pattern',
            55 => 'pathauto_node_discussion_pattern',
            56 => 'pathauto_node_document_pattern',
            57 => 'pathauto_node_event_pattern',
            58 => 'pathauto_node_group_pattern',
            59 => 'pathauto_node_notice_pattern',
            60 => 'pathauto_node_page_pattern',
            61 => 'pathauto_node_poll_pattern',
            62 => 'pathauto_node_wiki_pattern',
            63 => 'pathauto_taxonomy_2_pattern',
            64 => 'pathauto_tracker_pattern',
            65 => 'pathauto_user_pattern',
            66 => 'tagadelic_block_tags_2',
            67 => 'tagadelic_sort_order',
            68 => 'tagging_inject_2',
            69 => 'tagging_show_suggestion_example',
            70 => 'theme_settings',
            71 => 'user_picture_dimensions',
            72 => 'user_picture_imagecache_comments',
            73 => 'user_picture_imagecache_profiles',
            74 => 'user_picture_imagecache_profiles_default',
            75 => 'user_picture_path',
            76 => 'user_pictures',
            77 => 'user_terms_group_terms',
            78 => 'user_terms_group_title',
            79 => 'user_terms_profile_path',
            80 => 'user_terms_vocabs',
            81 => 'wikitools_404_type',
            82 => 'wikitools_disallowed_characters',
            83 => 'wikitools_main_page_title',
            84 => 'wikitools_node_types',
            85 => 'wikitools_options',
            86 => 'wikitools_path',
            87 => 'wikitools_subpages',
            88 => 'wikitools_subpages_handling',
          ),
          'views' => 
          array (
            0 => 'blog_stream',
            1 => 'content_global_blogs',
            2 => 'content_global_calendar',
            3 => 'content_global_discussions',
            4 => 'content_global_documents',
            5 => 'content_global_polls',
            6 => 'content_global_wikis',
            7 => 'most_active_users',
            8 => 'my_recent_items',
            9 => 'my_unread_items',
            10 => 'newest_users',
            11 => 'og_all',
            12 => 'og_calendar',
            13 => 'og_content_tracker',
            14 => 'og_dashboard_groups',
            15 => 'og_featured',
            16 => 'og_members_custom_block',
            17 => 'og_most_active',
            18 => 'og_my_groups',
            19 => 'og_polls_all',
            20 => 'og_profile_user_groups',
            21 => 'og_recent_poll',
            22 => 'og_tab_blogs',
            23 => 'og_tab_discussions',
            24 => 'og_tab_documents',
            25 => 'og_tab_wikis',
            26 => 'og_tag_cloud',
            27 => 'og_upcoming_events',
            28 => 'recent_content_all',
            29 => 'recent_featured',
            30 => 'recent_featured_stream',
            31 => 'recent_notices',
            32 => 'tag_cloud',
            33 => 'upcoming_events',
            34 => 'user_directory',
            35 => 'user_meta',
            36 => 'users_online',
          ),
        ),
        'name' => 'Commons Core',
        'package' => 'Features',
        'project' => 'commons_core',
        'version' => '6.x-1.0',
        'php' => '4.3.5',
      ),
      'project' => 'commons_core',
      'version' => '6.x-1.0',
    ),
    'commons_notifications' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_notifications/commons_notifications.module',
      'name' => 'commons_notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'messaging_mail',
          2 => 'messaging_simple',
          3 => 'notifications',
          4 => 'notifications_autosubscribe',
          5 => 'notifications_content',
          6 => 'notifications_ui',
          7 => 'notifications_views',
          8 => 'strongarm',
        ),
        'description' => 'Integration of email and web notifications for site activity',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'variable' => 
          array (
            0 => 'messaging_default_filter',
            1 => 'messaging_default_method',
            2 => 'notifications_content_per_type',
            3 => 'notifications_content_type',
            4 => 'notifications_content_type_group',
            5 => 'notifications_default_auto',
            6 => 'notifications_node_ui_group',
            7 => 'notifications_ui_account_options',
            8 => 'notifications_ui_node',
            9 => 'notifications_ui_per_type',
            10 => 'notifications_ui_types',
            11 => 'notifications_ui_user',
          ),
        ),
        'name' => 'Commons Notifications',
        'package' => 'Features',
        'project' => 'commons_notifications',
        'version' => '6.x-1.0',
        'php' => '4.3.5',
      ),
      'project' => 'commons_notifications',
      'version' => '6.x-1.0',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/content.module',
      'name' => 'content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content',
        'description' => 'Allows administrators to define new content types.',
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'content_copy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/content_copy/content_copy.module',
      'name' => 'content_copy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Copy',
        'description' => 'Enables ability to import/export field definitions.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'content_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/content_permissions/content_permissions.module',
      'name' => 'content_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Permissions',
        'description' => 'Set field-level permissions for CCK fields.',
        'package' => 'CCK',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'context' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'context',
        'datestamp' => '1275426609',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-2.0',
    ),
    'context_contrib' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/context/context_contrib/context_contrib.module',
      'name' => 'context_contrib',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context Contrib',
        'description' => 'Provides integration with Context on behalf of the following contrib modules: Nodequeue, Views, CSS Injector.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'context',
        'datestamp' => '1275426609',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-2.0',
    ),
    'context_og' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/context_og/context_og.module',
      'name' => 'context_og',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context OG',
        'description' => 'Provides Organic Groups conditions and reactions for the Context module.',
        'package' => 'Context',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'views',
          2 => 'og_views',
          3 => 'ctools',
          4 => 'context',
        ),
        'version' => '6.x-2.0-beta2',
        'project' => 'context_og',
        'datestamp' => '1279217405',
        'php' => '4.3.5',
      ),
      'project' => 'context_og',
      'version' => '6.x-2.0-beta2',
    ),
    'context_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for setting up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'context',
        'datestamp' => '1275426609',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-2.0',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.6',
        'project' => 'ctools',
        'datestamp' => '1275441007',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.6',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'ctools',
        'datestamp' => '1275441007',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.6',
    ),
    'date' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Defines CCK date/time fields and widgets.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date_api',
          2 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'date_api' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'date_locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date_locale/date_locale.module',
      'name' => 'date_locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Locale',
        'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'locale',
        ),
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'date_php4' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date_php4/date_php4.module',
      'name' => 'date_php4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date PHP4',
        'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'date_popup' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'date_repeat' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'date_timezone' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date_timezone/date_timezone.module',
      'name' => 'date_timezone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '5200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Timezone',
        'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'date_tools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'date',
        'datestamp' => '1253103320',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.4',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '6.x',
        'version' => '6.x-1.22',
        'project' => 'devel',
        'datestamp' => '1281718291',
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.22',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/devel/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.22',
        'project' => 'devel',
        'datestamp' => '1281718291',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.22',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer block and page illustrating relevant node_access records.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.22',
        'project' => 'devel',
        'datestamp' => '1281718291',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.22',
    ),
    'diff' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/diff/diff.module',
      'name' => 'diff',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Diff',
        'description' => 'Show difference between node revisions.',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'diff',
        'datestamp' => '1211484008',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'diff',
      'version' => '6.x-2.0',
    ),
    'editablefields' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/editablefields/editablefields.module',
      'name' => 'editablefields',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Editablefields',
        'description' => 'Allows you to make some view fields editable',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'ajax_load',
        ),
        'package' => 'CCK',
        'version' => '6.x-2.0',
        'core' => '6.x',
        'project' => 'editablefields',
        'datestamp' => '1263936609',
        'php' => '4.3.5',
      ),
      'project' => 'editablefields',
      'version' => '6.x-2.0',
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '6.x',
        'package' => 'Features',
        'version' => '6.x-1.0-beta8',
        'project' => 'features',
        'datestamp' => '1276791607',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.0-beta8',
    ),
    'features_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/features/tests/features_test.module',
      'name' => 'features_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'fieldgroup',
          1 => 'views',
          2 => 'text',
          3 => 'features',
        ),
        'description' => 'Test module for Features testing.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'features_test-field_features_test',
            1 => 'features_test-field_features_test_child_a',
            2 => 'features_test-field_features_test_child_b',
          ),
          'fieldgroup' => 
          array (
            0 => 'features_test-group_features_test',
          ),
          'filter' => 
          array (
            0 => 'features_test',
          ),
          'imagecache' => 
          array (
            0 => 'features_test',
          ),
          'node' => 
          array (
            0 => 'features_test',
          ),
          'user' => 
          array (
            0 => 'create features_test content',
          ),
          'views' => 
          array (
            0 => 'features_test',
          ),
        ),
        'name' => 'Features Tests',
        'package' => 'Testing',
        'version' => '6.x-1.0-beta8',
        'project' => 'features',
        'datestamp' => '1276791607',
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.0-beta8',
    ),
    'fieldgroup' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/fieldgroup/fieldgroup.module',
      'name' => 'fieldgroup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '9',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Create display groups for CCK fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'filefield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/filefield/filefield.module',
      'name' => 'filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField',
        'description' => 'Defines a file field type.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.7',
        'project' => 'filefield',
        'datestamp' => '1277943012',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.7',
    ),
    'filefield_meta' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/filefield/filefield_meta/filefield_meta.module',
      'name' => 'filefield_meta',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField Meta',
        'description' => 'Add metadata gathering and storage to FileField.',
        'dependencies' => 
        array (
          0 => 'filefield',
          1 => 'getid3',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.7',
        'project' => 'filefield',
        'datestamp' => '1277943012',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.7',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Handles the filtering of content in preparation for display.',
        'package' => 'Core - required',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'flag' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on content.',
        'core' => '6.x',
        'package' => 'Flags',
        'version' => '6.x-1.3',
        'project' => 'flag',
        'datestamp' => '1273367107',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'flag',
      'version' => '6.x-1.3',
    ),
    'flag_actions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'version' => '6.x-1.3',
        'project' => 'flag',
        'datestamp' => '1273367107',
        'php' => '4.3.5',
      ),
      'project' => 'flag',
      'version' => '6.x-1.3',
    ),
    'flag_heartbeat' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/flag_heartbeat/flag_heartbeat.module',
      'name' => 'flag_heartbeat',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'package' => 'Heartbeat',
        'project' => 'heartbeat',
        'name' => 'Flag heartbeat',
        'description' => 'Integration module between heartbeat en flag.',
        'dependencies' => 
        array (
          0 => 'heartbeat',
          1 => 'flag',
        ),
        'core' => '6.x',
        'version' => '6.x-4.9',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Enables threaded discussions about general topics.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'freelinking' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/freelinking/freelinking.module',
      'name' => 'freelinking',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '2',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Freelinking',
        'description' => 'Wiki-style freelinking for node content using CamelCase and delimiters.',
        'package' => 'Input filters',
        'version' => '6.x-1.10',
        'core' => '6.x',
        'project' => 'freelinking',
        'datestamp' => '1270537215',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'freelinking',
      'version' => '6.x-1.10',
    ),
    'friendlist_activity' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/friendlist_activity/friendlist_activity.module',
      'name' => 'friendlist_activity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '51',
      'info' => 
      array (
        'package' => 'Heartbeat',
        'project' => 'heartbeat',
        'name' => 'friendlist activity',
        'description' => 'Logs activity when a friendlist event occurs. Integration module for all modules that defined rules/events with Rules ui.',
        'dependencies' => 
        array (
          0 => 'heartbeat',
        ),
        'core' => '6.x',
        'version' => '6.x-4.9',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'getid3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/getid3/getid3.module',
      'name' => 'getid3',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '-10',
      'info' => 
      array (
        'name' => 'getID3()',
        'description' => 'getID3() extracts useful information from multimedia file formats.',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'getid3',
        'datestamp' => '1259199334',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'getid3',
      'version' => '6.x-1.3',
    ),
    'hds' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/hds/hds.module',
      'name' => 'hds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Heartbeat displays',
        'description' => 'Extended heartbeat display modes. Implementation of Display suite.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ds',
          1 => 'heartbeat',
        ),
        'package' => 'Heartbeat',
        'version' => '6.x-4.9',
        'project' => 'heartbeat',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'heartbeat' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/heartbeat.module',
      'name' => 'heartbeat',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '403',
      'weight' => '50',
      'info' => 
      array (
        'package' => 'Heartbeat',
        'project' => 'heartbeat',
        'name' => 'Heartbeat activity',
        'description' => 'Logs user activity when certain events occur, triggering actions. The logged data is accessable through heartbeat displays.',
        'core' => '6.x',
        'version' => '6.x-4.9',
        'datestamp' => '1274213412',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'heartbeattest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/tests/heartbeattest.module',
      'name' => 'heartbeattest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Heartbeat test helper',
        'description' => 'Heartbeat helper module used when running simpletests. This module is NOT for production usage!',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'heartbeat',
        ),
        'package' => 'Heartbeat',
        'version' => '6.x-4.9',
        'project' => 'heartbeat',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'heartbeat_comments' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/heartbeat_comments/heartbeat_comments.module',
      'name' => 'heartbeat_comments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Heartbeat comments',
        'description' => 'Gives the possibility react on messages. For activity in node context, node comments can be used.',
        'package' => 'Heartbeat',
        'dependencies' => 
        array (
          0 => 'heartbeat',
        ),
        'core' => '6.x',
        'version' => '6.x-4.9',
        'project' => 'heartbeat',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'heartbeat_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/heartbeat_example/heartbeat_example.module',
      'name' => 'heartbeat_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Heartbeat example module',
        'description' => 'Advanced features of heartbeat explained and demonstrated. This module is not for production usage.',
        'package' => 'Heartbeat',
        'dependencies' => 
        array (
          0 => 'heartbeat',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-4.9',
        'project' => 'heartbeat',
        'datestamp' => '1274213412',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'heartbeat_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/views/heartbeat_views.module',
      'name' => 'heartbeat_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'package' => 'Heartbeat',
        'name' => 'Heartbeat views',
        'description' => 'Build your own views from heartbeat logged activity stream.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'heartbeat',
        ),
        'core' => '6.x',
        'version' => '6.x-4.9',
        'project' => 'heartbeat',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'hrules' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/heartbeat_rules/hrules.module',
      'name' => 'hrules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Heartbeat rules',
        'description' => 'Use rules to connect with heartbeat API. With this enabled, you can create heartbeat streams with user interface only.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'token',
          2 => 'heartbeat',
        ),
        'package' => 'Heartbeat',
        'version' => '6.x-4.9',
        'project' => 'heartbeat',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Allows uploading, resizing and viewing of images.',
        'package' => 'Image',
        'core' => '6.x',
        'version' => '6.x-1.0-beta5',
        'project' => 'image',
        'datestamp' => '1263642608',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.0-beta5',
    ),
    'imageapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imageapi/imageapi.module',
      'name' => 'imageapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI',
        'description' => 'ImageAPI supporting multiple toolkits.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.8',
        'project' => 'imageapi',
        'datestamp' => '1272675611',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.8',
    ),
    'imageapi_gd' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imageapi/imageapi_gd.module',
      'name' => 'imageapi_gd',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI GD2',
        'description' => 'Uses PHP\'s built-in GD2 image processing support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'imageapi',
        'datestamp' => '1272675611',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.8',
    ),
    'imageapi_imagemagick' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imageapi/imageapi_imagemagick.module',
      'name' => 'imageapi_imagemagick',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI ImageMagick',
        'description' => 'Command Line ImageMagick support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'imageapi',
        'datestamp' => '1272675611',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.8',
    ),
    'imagecache' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache/imagecache.module',
      'name' => 'imagecache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache',
        'description' => 'Dynamic image manipulator and cache.',
        'package' => 'ImageCache',
        'dependencies' => 
        array (
          0 => 'imageapi',
        ),
        'core' => '6.x',
        'version' => '6.x-2.0-beta10',
        'project' => 'imagecache',
        'datestamp' => '1250716281',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta10',
    ),
    'imagecache_autorotate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache_actions/imagecache_autorotate.module',
      'name' => 'imagecache_autorotate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Autorotate',
        'description' => 'Autorotate image based on EXIF Orientation.',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'imagecache_actions',
        'datestamp' => '1274796306',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.7',
    ),
    'imagecache_canvasactions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache_actions/imagecache_canvasactions.module',
      'name' => 'imagecache_canvasactions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Canvas Actions',
        'description' => 'Actions for manipulating image canvases layers, including watermark and background effect. Also an aspect switcher (portrait/landscape)',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'imagecache_actions',
        'datestamp' => '1274796306',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.7',
    ),
    'imagecache_coloractions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache_actions/imagecache_coloractions.module',
      'name' => 'imagecache_coloractions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Color Actions',
        'description' => 'Additional ImageCache actions, providing color-shifting, brightness and alpha transparency effects.',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'imagecache_actions',
        'datestamp' => '1274796306',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.7',
    ),
    'imagecache_customactions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache_actions/imagecache_customactions.module',
      'name' => 'imagecache_customactions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Custom Actions',
        'description' => 'Allow direct PHP code manipulation of imagecache images.',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'imagecache_actions',
        'datestamp' => '1274796306',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.7',
    ),
    'imagecache_profiles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache_profiles/imagecache_profiles.module',
      'name' => 'imagecache_profiles',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Profile Pictures',
        'description' => 'Utilizes imagecache presets for user profile pictures.',
        'package' => 'ImageCache',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'imagecache_profiles',
        'datestamp' => '1269515110',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_profiles',
      'version' => '6.x-1.3',
    ),
    'imagecache_textactions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache_actions/imagecache_textactions.module',
      'name' => 'imagecache_textactions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Text Actions',
        'description' => 'Display simple or dynamic captions on images.',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'imagecache_actions',
        'datestamp' => '1274796306',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.7',
    ),
    'imagecache_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagecache/imagecache_ui.module',
      'name' => 'imagecache_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache UI',
        'description' => 'ImageCache User Interface.',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-2.0-beta10',
        'project' => 'imagecache',
        'datestamp' => '1250716281',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta10',
    ),
    'imagefield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imagefield/imagefield.module',
      'name' => 'imagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageField',
        'description' => 'Defines an image field type.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
        ),
        'package' => 'CCK',
        'version' => '6.x-3.7',
        'project' => 'imagefield',
        'datestamp' => '1277942710',
        'php' => '4.3.5',
      ),
      'project' => 'imagefield',
      'version' => '6.x-3.7',
    ),
    'image_attach' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/image/contrib/image_attach/image_attach.module',
      'name' => 'image_attach',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Attach',
        'description' => 'Allows easy attaching of image nodes to other content types.',
        'package' => 'Image',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta5',
        'project' => 'image',
        'datestamp' => '1263642608',
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.0-beta5',
    ),
    'image_gallery' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/image/contrib/image_gallery/image_gallery.module',
      'name' => 'image_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Gallery',
        'description' => 'Allows sorting and displaying of image galleries based on categories.',
        'package' => 'Image',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta5',
        'project' => 'image',
        'datestamp' => '1263642608',
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.0-beta5',
    ),
    'image_import' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/image/contrib/image_import/image_import.module',
      'name' => 'image_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Import',
        'description' => 'Allows batches of images to be imported from a directory on the server.',
        'package' => 'Image',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta5',
        'project' => 'image',
        'datestamp' => '1263642608',
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.0-beta5',
    ),
    'image_im_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/image/contrib/image_im_advanced/image_im_advanced.module',
      'name' => 'image_im_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageMagick Advanced Options',
        'description' => 'Adds advanced options to the ImageMagick image toolkit.',
        'package' => 'Image',
        'core' => '6.x',
        'version' => '6.x-1.0-beta5',
        'project' => 'image',
        'datestamp' => '1263642608',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.0-beta5',
    ),
    'insert' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/insert/insert.module',
      'name' => 'insert',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '15',
      'info' => 
      array (
        'name' => 'Insert',
        'description' => 'Assists in inserting files, images, or other media into the body field or other text areas.',
        'core' => '6.x',
        'version' => '6.x-1.0-beta4',
        'project' => 'insert',
        'datestamp' => '1268522408',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'insert',
      'version' => '6.x-1.0-beta4',
    ),
    'jcalendar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/calendar/jcalendar/jcalendar.module',
      'name' => 'jcalendar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar Popup',
        'description' => 'Replaces the links to calendar items with a javascript popup that gracefully regresses if javascript is not enabled',
        'dependencies' => 
        array (
          0 => 'calendar',
          1 => 'views',
        ),
        'core' => '6.x',
        'package' => 'Date/Time',
        'version' => '6.x-2.2',
        'project' => 'calendar',
        'datestamp' => '1248867038',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.2',
    ),
    'jquery_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/jquery_ui/jquery_ui.module',
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery UI',
        'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'jquery_ui',
        'datestamp' => '1245556234',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_ui',
      'version' => '6.x-1.3',
    ),
    'link' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'link',
        'datestamp' => '1276539609',
        'php' => '4.3.5',
      ),
      'project' => 'link',
      'version' => '6.x-2.9',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'messaging' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging.module',
      'name' => 'messaging',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging',
        'description' => 'Messaging system. This is the base module for the Messaging Framework',
        'package' => 'Messaging',
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_debug' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_debug/messaging_debug.module',
      'name' => 'messaging_debug',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging debug',
        'description' => 'Debugging and development utilities for messaging package.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'messaging',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_mail' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_mail/messaging_mail.module',
      'name' => 'messaging_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simple Mail',
        'description' => 'Mail Sending Method: Integration with Drupal mail API',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_mime_mail' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_mime_mail/messaging_mime_mail.module',
      'name' => 'messaging_mime_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging Mime Mail',
        'description' => 'Mail Sending Method: Integration with Mime Mail module (Beta)',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'mimemail',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_phpmailer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_phpmailer/messaging_phpmailer.module',
      'name' => 'messaging_phpmailer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging PHPMailer',
        'description' => 'Mail Sending Method: Integration with PHPMailer for HTML Mail',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_privatemsg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_privatemsg/messaging_privatemsg.module',
      'name' => 'messaging_privatemsg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging Privatemsg',
        'description' => 'Sending Method: Integration with Privatemsg (Beta)',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'privatemsg',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_simple' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_simple/messaging_simple.module',
      'name' => 'messaging_simple',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simple messaging',
        'description' => 'Sending Method: Show messages on user\'s page',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_sms' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_sms/messaging_sms.module',
      'name' => 'messaging_sms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SMS Messaging',
        'description' => 'Sending Method: SMS',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'sms',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_twitter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_twitter/messaging_twitter.module',
      'name' => 'messaging_twitter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Twitter Messaging',
        'description' => 'Sending method for messaging that uses Twitter',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'twitter',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'messaging_xmpp' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/messaging/messaging_xmpp/messaging_xmpp.module',
      'name' => 'messaging_xmpp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging XMPP',
        'description' => 'XMPP Sending Method: Integration with XMPP Framework',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'xmppframework',
          2 => 'xmpp_user',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'messaging',
        'datestamp' => '1258139771',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.2',
    ),
    'mollom' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/acquia/mollom/mollom.module',
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom',
        'description' => 'Protects forms against spam.',
        'core' => '6.x',
        'version' => '6.x-1.13',
        'project' => 'mollom',
        'datestamp' => '1270444809',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mollom',
      'version' => '6.x-1.13',
    ),
    'mollom_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/acquia/mollom/tests/mollom_test.module',
      'name' => 'mollom_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom Test',
        'description' => 'Testing module for Mollom functionality. Do not enable.',
        'core' => '6.x',
        'package' => 'Testing',
        'hidden' => true,
        'version' => '6.x-1.13',
        'project' => 'mollom',
        'datestamp' => '1270444809',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mollom',
      'version' => '6.x-1.13',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core - required',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'nodereference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/nodereference/nodereference.module',
      'name' => 'nodereference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'notifications' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications.module',
      'name' => 'notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications',
        'description' => 'The basic notifications framework',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'token',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_autosubscribe' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications_autosubscribe/notifications_autosubscribe.module',
      'name' => 'notifications_autosubscribe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Autosubscribe',
        'description' => 'Provides automatic notifications.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications',
          1 => 'notifications_content',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications_content/notifications_content.module',
      'name' => 'notifications_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Content Notifications',
        'description' => 'Allows users to subscribe to content related events.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_lite' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications_lite/notifications_lite.module',
      'name' => 'notifications_lite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Lite',
        'description' => 'Extra Simple Notifications API. Enable only when required by other modules.',
        'package' => 'Notifications',
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_tags' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications_tags/notifications_tags.module',
      'name' => 'notifications_tags',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Notifications',
        'description' => 'Allows users to subscribe to taxonomy terms.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications_content',
          1 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications_ui/notifications_ui.module',
      'name' => 'notifications_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications UI',
        'description' => 'Provides an UI to notifications',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications_views/notifications_views.module',
      'name' => 'notifications_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Views',
        'description' => 'Views integration for Notifications.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'notifications',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'og' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og/og.module',
      'name' => 'og',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups',
        'description' => 'Enable users to create and manage groups.  OG Views integration module is recommended for best experience.',
        'package' => 'Organic groups',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'og',
        'datestamp' => '1268751911',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'og',
      'version' => '6.x-2.1',
    ),
    'og_access' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og/modules/og_access/og_access.module',
      'name' => 'og_access',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Organic groups access control',
        'description' => 'Enable access control for private posts and private groups.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'og',
        'datestamp' => '1268751911',
        'php' => '4.3.5',
      ),
      'project' => 'og',
      'version' => '6.x-2.1',
    ),
    'og_actions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og/modules/og_actions/og_actions.module',
      'name' => 'og_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups actions',
        'description' => 'Provides actions for use with Organic Groups and Trigger.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'og',
        'datestamp' => '1268751911',
        'php' => '4.3.5',
      ),
      'project' => 'og',
      'version' => '6.x-2.1',
    ),
    'og_activity' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/og_activity/og_activity.module',
      'name' => 'og_activity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '51',
      'info' => 
      array (
        'package' => 'Heartbeat',
        'project' => 'heartbeat',
        'name' => 'organic group activity',
        'description' => 'Logs activity in a group. Actions performed by administrators of a group are logged foreach member as well.',
        'dependencies' => 
        array (
          0 => 'heartbeat',
          1 => 'og',
        ),
        'core' => '6.x',
        'version' => '6.x-4.9',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'og_aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og_aggregator/og_aggregator.module',
      'name' => 'og_aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups aggregator',
        'description' => 'allows Organic group to maintain an individual list of subscribed feeds.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'aggregator',
          1 => 'og',
        ),
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'og_aggregator',
        'datestamp' => '1258021548',
        'php' => '4.3.5',
      ),
      'project' => 'og_aggregator',
      'version' => '6.x-1.4',
    ),
    'og_notifications' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og/modules/og_notifications/og_notifications.module',
      'name' => 'og_notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic Groups Notifications',
        'description' => 'Allows users to receive notifications and subscribe to group content.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'notifications',
          2 => 'notifications_content',
          3 => 'notifications_lite',
          4 => 'messaging',
          5 => 'token',
        ),
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'og',
        'datestamp' => '1268751911',
        'php' => '4.3.5',
      ),
      'project' => 'og',
      'version' => '6.x-2.1',
    ),
    'og_statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og_statistics/og_statistics.module',
      'name' => 'og_statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups statistics',
        'description' => 'Enable statistics for organic groups.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'og_views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-rc5',
        'project' => 'og_statistics',
        'datestamp' => '1271461507',
        'php' => '4.3.5',
      ),
      'project' => 'og_statistics',
      'version' => '6.x-1.0-rc5',
    ),
    'og_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og/modules/og_views/og_views.module',
      'name' => 'og_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups Views integration',
        'description' => '<strong>Highly recommended.</strong>. Use Views to search and display organic groups.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'og',
        'datestamp' => '1268751911',
        'php' => '4.3.5',
      ),
      'project' => 'og',
      'version' => '6.x-2.1',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.19',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'optionwidgets' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/optionwidgets/optionwidgets.module',
      'name' => 'optionwidgets',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Option Widgets',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.6',
        'project' => 'ctools',
        'datestamp' => '1275441007',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.6',
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6306',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '6.x',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-3.5',
        'project' => 'panels',
        'datestamp' => '1275094509',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.5',
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '6.x',
        'version' => '6.x-3.5',
        'project' => 'panels',
        'datestamp' => '1275094509',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.5',
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '6.x',
        'version' => '6.x-3.5',
        'project' => 'panels',
        'datestamp' => '1275094509',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.5',
    ),
    'panels_stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/panels/panels_stylizer/panels_stylizer.module',
      'name' => 'panels_stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels stylizer',
        'description' => 'Create custom styles for Panel panes and regions',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'color',
        ),
        'version' => '6.x-3.5',
        'project' => 'panels',
        'datestamp' => '1275094509',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.5',
    ),
    'password_policy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/password_policy/password_policy.module',
      'name' => 'password_policy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Password policy',
        'description' => 'The password policy module allows you to enforce a specific level of password complexity for the user passwords on the system.',
        'package' => 'Other',
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'password_policy',
        'datestamp' => '1272571507',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'password_policy',
      'version' => '6.x-1.0-beta1',
    ),
    'password_policy_password_tab' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/password_policy/contrib/password_tab/password_policy_password_tab.module',
      'name' => 'password_policy_password_tab',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Password change tab',
        'description' => 'Implements a separate password change tab.',
        'package' => 'Other',
        'dependencies' => 
        array (
          0 => 'password_policy',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'password_policy',
        'datestamp' => '1272571507',
        'php' => '4.3.5',
      ),
      'project' => 'password_policy',
      'version' => '6.x-1.0-beta1',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '7',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '6.x',
        'recommends' => 
        array (
          0 => 'path_redirect',
        ),
        'version' => '6.x-1.4',
        'project' => 'pathauto',
        'datestamp' => '1281556294',
        'php' => '4.3.5',
      ),
      'project' => 'pathauto',
      'version' => '6.x-1.4',
    ),
    'performance' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/devel/performance/performance.module',
      'name' => 'performance',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Performance Logging',
        'description' => 'Logs detailed and/or summary page generation time and memory consumption for page requests.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.22',
        'project' => 'devel',
        'datestamp' => '1281718291',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.22',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'ping' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/ping/ping.module',
      'name' => 'ping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ping',
        'description' => 'Alerts other sites when your site has been updated.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'quant' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/custom/quant/quant.module',
      'name' => 'quant',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Quant',
        'description' => 'Display quantitative analytical charts of your site\'s activity over time periods',
        'dependencies' => 
        array (
          0 => 'chart',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'rules' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/rules/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'Lets you define conditionally executed actions based on occurring events.',
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'rules',
        'datestamp' => '1269612910',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.2',
    ),
    'rules_admin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Administration UI',
        'description' => 'Provides the administration UI for rules.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'rules',
        'datestamp' => '1269612910',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.2',
    ),
    'rules_forms' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/rules/rules_forms/rules_forms.module',
      'name' => 'rules_forms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Forms support',
        'description' => 'Provides events, conditions and actions for rule-based form customization.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'rules',
        'datestamp' => '1269612910',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.2',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of rule sets.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'rules',
        'datestamp' => '1269612910',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.2',
    ),
    'rules_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/rules/rules_test/rules_test.module',
      'name' => 'rules_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Simpletest',
        'description' => 'Tests the functionality of the rule engine',
        'package' => 'Rules',
        'dependencies' => 
        array (
          0 => 'simpletest',
          1 => 'rules',
        ),
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'rules',
        'datestamp' => '1269612910',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.2',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'shoutbox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/shoutbox/shoutbox.module',
      'name' => 'shoutbox',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shoutbox',
        'description' => 'This module enables you to display a shoutbox block and page.',
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1280708191',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'shoutbox',
      'version' => '6.x-2.x-dev',
    ),
    'shoutbox_group' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/shoutbox/shoutbox_group/shoutbox_group.module',
      'name' => 'shoutbox_group',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shoutbox Group',
        'core' => '6.x',
        'description' => 'Extends shoutbox functionality to organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'shoutbox',
        ),
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1280708191',
        'php' => '4.3.5',
      ),
      'project' => 'shoutbox',
      'version' => '6.x-2.x-dev',
    ),
    'shoutbox_points' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/shoutbox/shoutbox_points/shoutbox_points.module',
      'name' => 'shoutbox_points',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shoutbox Points',
        'core' => '6.x',
        'description' => 'Extends shoutbox functionality to userpoints',
        'dependencies' => 
        array (
          0 => 'shoutbox',
          1 => 'userpoints',
        ),
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1280708191',
        'php' => '4.3.5',
      ),
      'project' => 'shoutbox',
      'version' => '6.x-2.x-dev',
    ),
    'shouts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/shouts/shouts.module',
      'name' => 'shouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shouts',
        'description' => 'Gives the possibility to the user to shout a message.',
        'package' => 'Heartbeat',
        'dependencies' => 
        array (
          0 => 'heartbeat',
        ),
        'core' => '6.x',
        'version' => '6.x-4.9',
        'project' => 'heartbeat',
        'datestamp' => '1274213412',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.9',
    ),
    'skinr' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/skinr/skinr.module',
      'name' => 'skinr',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Skinr',
        'description' => 'Provides a way to define and/or skin bits of Drupal output from the UI.',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'skinr',
        'datestamp' => '1266950409',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'skinr',
      'version' => '6.x-1.5',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'strongarm' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/strongarm/strongarm.module',
      'name' => 'strongarm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '-1000',
      'info' => 
      array (
        'name' => 'Strongarm',
        'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'strongarm',
        'datestamp' => '1265516406',
        'php' => '4.3.5',
      ),
      'project' => 'strongarm',
      'version' => '6.x-2.0-rc1',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6055',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core - required',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'system_charts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/chart/contrib/system_charts/system_charts.module',
      'name' => 'system_charts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal System Charting',
        'description' => 'Charting for various core modules.',
        'package' => 'Charting',
        'dependencies' => 
        array (
          0 => 'chart',
        ),
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'chart',
        'datestamp' => '1221170703',
        'php' => '4.3.5',
      ),
      'project' => 'chart',
      'version' => '6.x-1.2',
    ),
    'tagadelic' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagadelic/tagadelic.module',
      'name' => 'tagadelic',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagadelic',
        'description' => 'Tagadelic makes weighted tag clouds from your taxonomy terms.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'package' => 'Taxonomy',
        'version' => '6.x-1.2',
        'project' => 'tagadelic',
        'datestamp' => '1230725138',
        'php' => '4.3.5',
      ),
      'project' => 'tagadelic',
      'version' => '6.x-1.2',
    ),
    'tagadelic_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagadelic_views/tagadelic_views.module',
      'name' => 'tagadelic_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagadelic Views',
        'description' => 'Adds a Tagadelic View to the Views module',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'tagadelic',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'tagadelic_views',
        'datestamp' => '1254750390',
        'php' => '4.3.5',
      ),
      'project' => 'tagadelic_views',
      'version' => '6.x-1.1',
    ),
    'tagging' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagging/tagging.module',
      'name' => 'tagging',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Tagging',
        'description' => 'This widget is replacing the default Drupal-Tagging-Interface with a more visual driven one, to make tagging even easier. (by Impressive.media)',
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'tagging',
        'version' => '6.x-2.4',
        'datestamp' => '1279448408',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.4',
    ),
    'tagging_extractor_suggest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagging/modules/tagging_extractor_suggest/tagging_extractor_suggest.module',
      'name' => 'tagging_extractor_suggest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagging extractor suggestions',
        'description' => 'This tagging moduile exposes suggestions based on the current node content (body) using the extractor module.',
        'package' => 'Taxonomy',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'tagging',
          2 => 'extractor',
        ),
        'version' => '6.x-2.4',
        'project' => 'tagging',
        'datestamp' => '1279448408',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.4',
    ),
    'tagging_opencalais_suggest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagging/modules/tagging_opencalais_suggest/tagging_opencalais_suggest.module',
      'name' => 'tagging_opencalais_suggest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagging opencalais suggestions',
        'description' => 'This tagging module exposes suggestions based on the current content (body) using the semantic opencalais service',
        'package' => 'Taxonomy',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'tagging',
          2 => 'calais_api',
        ),
        'version' => '6.x-2.4',
        'project' => 'tagging',
        'datestamp' => '1279448408',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.4',
    ),
    'tagging_vocab_suggest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagging/modules/tagging_vocab_suggest/tagging_vocab_suggest.module',
      'name' => 'tagging_vocab_suggest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagging full-vocabular suggestion',
        'description' => 'This tagging module exposes all vocabulary terms of a the vocabulary as suggestions (no matter what is in the content).',
        'package' => 'Taxonomy',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'tagging',
        ),
        'version' => '6.x-2.4',
        'project' => 'tagging',
        'datestamp' => '1279448408',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.4',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'throttle' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/throttle/throttle.module',
      'name' => 'throttle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Throttle',
        'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
        'core' => '6.x',
        'version' => '6.x-1.13',
        'project' => 'token',
        'datestamp' => '1275922817',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.13',
    ),
    'tokenSTARTER' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/token/tokenSTARTER.module',
      'name' => 'tokenSTARTER',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TokenSTARTER',
        'description' => 'Provides additional tokens and a base on which to build your own tokens.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'core' => '6.x',
        'version' => '6.x-1.13',
        'project' => 'token',
        'datestamp' => '1275922817',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.13',
    ),
    'token_actions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/token/token_actions.module',
      'name' => 'token_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token actions',
        'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'core' => '6.x',
        'version' => '6.x-1.13',
        'project' => 'token',
        'datestamp' => '1275922817',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.13',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent posts for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'transliteration' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/transliteration/transliteration.module',
      'name' => 'transliteration',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Transliteration',
        'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'transliteration',
        'datestamp' => '1279738213',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'transliteration',
      'version' => '6.x-3.0',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.19',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'upload' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/upload/upload.module',
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upload',
        'description' => 'Allows users to upload and attach files to content.',
        'package' => 'Core - optional',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core - required',
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'userpoints' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints/userpoints.module',
      'name' => 'userpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints',
        'description' => 'Userpoints core: API module for recording points for other modules.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'userpoints',
        'datestamp' => '1256148224',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.1',
    ),
    'userpoints_nc' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_nc/userpoints_nc.module',
      'name' => 'userpoints_nc',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Nodes and Comments',
        'description' => 'Grants userpoints for posting nodes or comments or moderating comments',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'userpoints_nc',
        'datestamp' => '1231497640',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_nc',
      'version' => '6.x-1.1',
    ),
    'userpoints_rules' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints/userpoints_rules.module',
      'name' => 'userpoints_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints rules integration',
        'description' => 'Provides integration of Userpoints with rules',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'rules',
        ),
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'userpoints',
        'datestamp' => '1256148224',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.1',
    ),
    'userpoints_service' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints/userpoints_service.module',
      'name' => 'userpoints_service',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Service',
        'description' => 'Exposes userpoints functionality via XML-RPC',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'services',
        ),
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'userpoints',
        'datestamp' => '1256148224',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.1',
    ),
    'userpoints_user_picture' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_user_picture/userpoints_user_picture.module',
      'name' => 'userpoints_user_picture',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints User Picture',
        'description' => 'Users earn points for adding a user picture.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'userpoints_user_picture',
        'datestamp' => '1236510955',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_user_picture',
      'version' => '6.x-1.0',
    ),
    'userreference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/cck/modules/userreference/userreference.module',
      'name' => 'userreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.8',
        'project' => 'cck',
        'datestamp' => '1281570988',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.8',
    ),
    'user_relationships_api' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationships_api/user_relationships_api.module',
      'name' => 'user_relationships_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-API',
        'description' => 'API for User Relationships. This will only provide the programmer interface.',
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationships_panels_visibility' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationships_panels_visibility/user_relationships_panels_visibility.module',
      'name' => 'user_relationships_panels_visibility',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Panels Visibility',
        'description' => 'Provide visibility for panels panes and pages based on User Relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'ctools',
        ),
        'core' => '6.x',
        'package' => 'User Relationships',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationships_rules' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/custom/user_relationships_rules/user_relationships_rules.module',
      'name' => 'user_relationships_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Rules',
        'description' => 'Rules integration for User Relationships.',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'rules',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'user_relationships_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationships_ui/user_relationships_ui.module',
      'name' => 'user_relationships_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-UI',
        'description' => 'User Relationships UI. This enables basic UI functionality for User Relationships',
        'package' => 'User Relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_blocks' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_blocks/user_relationship_blocks.module',
      'name' => 'user_relationship_blocks',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Blocks',
        'description' => 'Blocks that can be used with User Relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_defaults' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_defaults/user_relationship_defaults.module',
      'name' => 'user_relationship_defaults',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Defaults',
        'description' => 'Allows admins to specify relationships that are automatically created when a new user joins',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_elaborations' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_elaborations/user_relationship_elaborations.module',
      'name' => 'user_relationship_elaborations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Elaborations',
        'description' => 'Allow users to elaborate on their relationships with others',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_implications' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_implications/user_relationship_implications.module',
      'name' => 'user_relationship_implications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Implications',
        'description' => 'Lets admins create implied relationships. For example \'Manager implies Coworker\'',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_invites' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_invites/user_relationship_invites.module',
      'name' => 'user_relationship_invites',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Invite',
        'description' => 'Gives users the option of specifying a relationship when inviting new users',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
          2 => 'invite',
        ),
        'core' => '6.x',
        'package' => 'User Relationships',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_mailer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_mailer/user_relationship_mailer.module',
      'name' => 'user_relationship_mailer',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Mailer',
        'description' => 'Gives the option to mail users when about relationship events (request, remove, disapprove, approve, etc)',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_migrate/user_relationship_migrate.module',
      'name' => 'user_relationship_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR Migrate Buddylist2',
        'description' => 'Allows admins to migrate buddylist2 relationships to user relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_node_access/user_relationship_node_access.module',
      'name' => 'user_relationship_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Node Access',
        'description' => 'Provides per node access control based on relationship to author',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_service' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_service/user_relationship_service.module',
      'name' => 'user_relationship_service',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Services',
        'description' => 'Provides functions of User Relationships to Services module.',
        'package' => 'User Relationships',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'user_relationships_api',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_relationship_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_relationships/user_relationship_views/user_relationship_views.module',
      'name' => 'user_relationship_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Views',
        'description' => 'Integrates User Relationships with Views',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'views',
        ),
        'core' => '6.x',
        'package' => 'User Relationships',
        'version' => '6.x-1.0-rc4',
        'project' => 'user_relationships',
        'datestamp' => '1273827310',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0-rc4',
    ),
    'user_terms' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_terms/user_terms.module',
      'name' => 'user_terms',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Terms',
        'description' => 'Allows users to be associated with taxonomy terms.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'version' => '6.x-1.0',
        'project' => 'user_terms',
        'datestamp' => '1269943838',
        'php' => '4.3.5',
      ),
      'project' => 'user_terms',
      'version' => '6.x-1.0',
    ),
    'vertical_tabs' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/vertical_tabs/vertical_tabs.module',
      'name' => 'vertical_tabs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '300',
      'info' => 
      array (
        'name' => 'Vertical Tabs',
        'description' => 'Provides vertical tabs for supported forms like the node edit page.',
        'core' => '6.x',
        'package' => 'User interface',
        'recommends' => 
        array (
          0 => 'form',
        ),
        'version' => '6.x-1.0-rc1',
        'project' => 'vertical_tabs',
        'datestamp' => '1265224223',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'vertical_tabs',
      'version' => '6.x-1.0-rc1',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6009',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.11',
        'project' => 'views',
        'datestamp' => '1276743614',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.11',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'ctools',
        'datestamp' => '1275441007',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.6',
    ),
    'views_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views/views_export/views_export.module',
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views exporter',
        'description' => 'Allows exporting multiple views at once.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-2.11',
        'project' => 'views',
        'datestamp' => '1276743614',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.11',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-2.11',
        'project' => 'views',
        'datestamp' => '1276743614',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.11',
    ),
    'wikitools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/wikitools/wikitools.module',
      'name' => 'wikitools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wikitools',
        'description' => 'Provides helper functionality to have wiki-like behaviour.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'wikitools',
        'datestamp' => '1245300061',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wikitools',
      'version' => '6.x-1.2',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows users to edit contents with client-side editors.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'wysiwyg',
        'datestamp' => '1268063714',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg',
      'version' => '6.x-2.1',
    ),
  ),
  'themes' => 
  array (
    'bluemarine' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/bluemarine/bluemarine.info',
      'name' => 'bluemarine',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bluemarine',
        'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
        'version' => '6.19',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'chameleon' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/chameleon/chameleon.info',
      'name' => 'chameleon',
      'type' => 'theme',
      'owner' => 'themes/chameleon/chameleon.theme',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chameleon',
        'description' => 'Minimalist tabled theme with light colors.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'favicon',
          2 => 'name',
          3 => 'slogan',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
            1 => 'common.css',
          ),
        ),
        'version' => '6.19',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'marvin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/chameleon/marvin/marvin.info',
      'name' => 'marvin',
      'type' => 'theme',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Marvin',
        'description' => 'Boxy tabled theme in all grays.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'version' => '6.19',
        'core' => '6.x',
        'base theme' => 'chameleon',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.19',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'minnelli' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/garland/minnelli/minnelli.info',
      'name' => 'minnelli',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Minnelli',
        'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
        'version' => '6.19',
        'core' => '6.x',
        'base theme' => 'garland',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'minnelli.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'pushbutton' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/pushbutton/pushbutton.info',
      'name' => 'pushbutton',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pushbutton',
        'description' => 'Tabled, multi-column theme in blue and orange tones.',
        'version' => '6.19',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1281559292',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.19',
    ),
    'acquia_commons' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/themes/acquia_commons/acquia_commons.info',
      'name' => 'acquia_commons',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia Commons',
        'description' => 'Fusion Starter sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
        'base theme' => 'fusion_core',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/acquia_commons-style.css',
          ),
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'panels',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'sidebar first',
          'sidebar_last' => 'sidebar last',
          'header_top' => 'header top',
          'header' => 'header',
          'preface_top' => 'preface top',
          'preface_bottom' => 'preface bottom',
          'content_top' => 'content top',
          'content' => 'content',
          'content_bottom' => 'content bottom',
          'postscript_top' => 'postscript top',
          'postscript_bottom' => 'postscript bottom',
          'footer' => 'footer',
          'node_top' => 'node top',
          'node_bottom' => 'node bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'search',
          6 => 'favicon',
          7 => 'primary_links',
          8 => 'secondary_links',
        ),
        'settings' => 
        array (
          'theme_grid' => 'grid16-fluid',
          'theme_grid_options' => 
          array (
            0 => 'grid16-960',
            1 => 'grid16-fluid',
          ),
          'fluid_grid_width' => 'fluid-95',
          'theme_font_size' => 'font-size-12',
          'sidebar_layout' => 'sidebars-split',
          'sidebar_first_width' => '3',
          'sidebar_last_width' => '3',
        ),
        'skinr' => 
        array (
          'options' => 
          array (
            'inherit_skins' => true,
          ),
          'grid12-width' => '; Stackable list/menu styles',
          'fusion-list-styles' => 
          array (
            'title' => 'List/menu styles',
            'type' => 'checkboxes',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
              4 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Bottom border (no bullets) <span class="preview-icon" id="list-styles-bottom-border"></span></span>',
                'class' => 'fusion-list-bottom-border',
              ),
              2 => 
              array (
                'label' => '<span class="preview-text">Extra vertical spacing (no bullets) <span class="preview-icon" id="list-styles-extra-vertical-spacing"></span></span>',
                'class' => 'fusion-list-vertical-spacing',
              ),
              3 => 
              array (
                'label' => 'Circle bullets',
                'class' => 'commons-list-circle-bullets',
              ),
            ),
          ),
          'commons-colors' => 
          array (
            'title' => 'Drupal Commons Colors (main color/highlight color)',
            'type' => 'select',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
              4 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Gray/Light Blue',
                'class' => 'commons-colors-grayblue',
              ),
              2 => 
              array (
                'label' => 'Orange/Dark Blue',
                'class' => 'commons-colors-orangeblue',
              ),
              3 => 
              array (
                'label' => 'Light Blue/Dark Blue',
                'class' => 'commons-colors-blueblue',
              ),
            ),
          ),
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fusion_core' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/themes/fusion_core/fusion_core.info',
      'name' => 'fusion_core',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Core',
        'description' => '<a href="http://drupal.org/project/fusion">Fusion Core</a> is the grid-enabled base theme for powerful sub-themes.  With the <a href="http://drupal.org/project/skinr">Skinr</a> module, it enables easy point-and-click theming. By <a href="http://www.topnotchthemes.com">TopNotchThemes</a>',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/style.css',
            1 => 'css/typography.css',
            2 => 'css/superfish.css',
            3 => 'css/superfish-navbar.css',
            4 => 'css/superfish-vertical.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/jquery.bgiframe.min.js',
          1 => 'js/hoverIntent.js',
          2 => 'js/supposition.js',
          3 => 'js/supersubs.js',
          4 => 'js/superfish.js',
          5 => 'js/script.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'sidebar first',
          'sidebar_last' => 'sidebar last',
          'header_top' => 'header top',
          'header' => 'header',
          'preface_top' => 'preface top',
          'preface_bottom' => 'preface bottom',
          'content_top' => 'content top',
          'content' => 'content',
          'content_bottom' => 'content bottom',
          'postscript_top' => 'postscript top',
          'postscript_bottom' => 'postscript bottom',
          'footer' => 'footer',
          'node_top' => 'node top',
          'node_bottom' => 'node bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'search',
          6 => 'favicon',
          7 => 'primary_links',
          8 => 'secondary_links',
        ),
        'settings' => 
        array (
          'theme_grid' => 'grid16-960',
          'theme_grid_options' => 
          array (
            0 => 'grid16-960',
            1 => 'grid16-fluid',
            2 => 'grid12-960',
            3 => 'grid12-fluid',
          ),
          'fluid_grid_width' => 'fluid-100',
          'theme_font_size' => 'font-size-13',
          'sidebar_layout' => 'sidebars-split',
          'sidebar_first_width' => '3',
          'sidebar_last_width' => '3',
        ),
        'skinr' => 
        array (
          'grid16-width' => 
          array (
            'title' => 'Width (16 column grid)',
            'type' => 'select',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '1 unit wide (60px/6.25%)',
                'class' => 'grid16-1',
              ),
              2 => 
              array (
                'label' => '2 units wide (120px/12.5%)',
                'class' => 'grid16-2',
              ),
              3 => 
              array (
                'label' => '3 units wide (180px/18.75%)',
                'class' => 'grid16-3',
              ),
              4 => 
              array (
                'label' => '4 units wide (240px/25%)',
                'class' => 'grid16-4',
              ),
              5 => 
              array (
                'label' => '5 units wide (300px/31.25%)',
                'class' => 'grid16-5',
              ),
              6 => 
              array (
                'label' => '6 units wide (360px/37.5%)',
                'class' => 'grid16-6',
              ),
              7 => 
              array (
                'label' => '7 units wide (420px/43.75%)',
                'class' => 'grid16-7',
              ),
              8 => 
              array (
                'label' => '8 units wide (480px/50%)',
                'class' => 'grid16-8',
              ),
              9 => 
              array (
                'label' => '9 units wide (540px/56.25%)',
                'class' => 'grid16-9',
              ),
              10 => 
              array (
                'label' => '10 units wide (600px/62.5%)',
                'class' => 'grid16-10',
              ),
              11 => 
              array (
                'label' => '11 units wide (660px/68.75%)',
                'class' => 'grid16-11',
              ),
              12 => 
              array (
                'label' => '12 units wide (720px/75%)',
                'class' => 'grid16-12',
              ),
              13 => 
              array (
                'label' => '13 units wide (780px/81.25%)',
                'class' => 'grid16-13',
              ),
              14 => 
              array (
                'label' => '14 units wide (840px/87.5%)',
                'class' => 'grid16-14',
              ),
              15 => 
              array (
                'label' => '15 units wide (900px/93.75%)',
                'class' => 'grid16-15',
              ),
              16 => 
              array (
                'label' => '16 units wide (960px/100%)',
                'class' => 'grid16-16',
              ),
            ),
          ),
          'grid12-width' => 
          array (
            'title' => 'Width (12 column grid)',
            'type' => 'select',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '1 unit wide (80px/8.33%)',
                'class' => 'grid12-1',
              ),
              2 => 
              array (
                'label' => '2 units wide (160px/16.67%)',
                'class' => 'grid12-2',
              ),
              3 => 
              array (
                'label' => '3 units wide (240px/25%)',
                'class' => 'grid12-3',
              ),
              4 => 
              array (
                'label' => '4 units wide (320px/33.33%)',
                'class' => 'grid12-4',
              ),
              5 => 
              array (
                'label' => '5 units wide (400px/41.67%)',
                'class' => 'grid12-5',
              ),
              6 => 
              array (
                'label' => '6 units wide (480px/50%)',
                'class' => 'grid12-6',
              ),
              7 => 
              array (
                'label' => '7 units wide (560px/58.33%)',
                'class' => 'grid12-7',
              ),
              8 => 
              array (
                'label' => '8 units wide (640px/66.67%)',
                'class' => 'grid12-8',
              ),
              9 => 
              array (
                'label' => '9 units wide (720px/75%)',
                'class' => 'grid12-9',
              ),
              10 => 
              array (
                'label' => '10 units wide (800px/83.33%)',
                'class' => 'grid12-10',
              ),
              11 => 
              array (
                'label' => '11 units wide (880px/91.67%)',
                'class' => 'grid12-11',
              ),
              12 => 
              array (
                'label' => '12 units wide (960px/100%)',
                'class' => 'grid12-12',
              ),
            ),
          ),
          'grid-width' => 
          array (
            'description' => 'Change the width of this block. Fluid grid % widths are relative to the parent region\'s width. Default widths: sidebar blocks default to the sidebar width; in other regions width is divided equally among all blocks.',
          ),
          'fusion-alignment' => 
          array (
            'title' => 'Block position',
            'type' => 'select',
            'description' => 'Change the position of this block (default is to float to the left)',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Float block to the right',
                'class' => 'fusion-right',
              ),
              2 => 
              array (
                'label' => 'Position block in the center',
                'class' => 'fusion-center',
              ),
              3 => 
              array (
                'label' => 'Clear floats (block drops to a new line)',
                'class' => 'fusion-clear',
              ),
            ),
          ),
          'fusion-content-alignment' => 
          array (
            'title' => 'Content alignment',
            'type' => 'select',
            'description' => 'Default is left aligned content',
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Center align content within its container',
                'class' => 'fusion-center-content',
              ),
              2 => 
              array (
                'label' => 'Right align content within its container',
                'class' => 'fusion-right-content',
              ),
            ),
          ),
          'fusion-general-styles' => 
          array (
            'title' => 'General styles',
            'type' => 'checkboxes',
            'description' => 'These are some generally useful options for blocks',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Text: large, bold callout style <span class="preview-icon" id="fusion-general-styles-fusion-callout"></span></span>',
                'class' => 'fusion-callout',
              ),
              2 => 
              array (
                'label' => '<span class="preview-text">Links: bold all links <span class="preview-icon" id="fusion-general-styles-bold-links"></span></span>',
                'class' => 'fusion-bold-links',
              ),
              3 => 
              array (
                'label' => '<span class="preview-text">Padding: add 30px extra padding inside block <span class="preview-icon" id="fusion-general-styles-fusion-padding"></span></span>',
                'class' => 'fusion-padding',
              ),
              4 => 
              array (
                'label' => '<span class="preview-text">Border: add 1px border and 10px padding <span class="preview-icon" id="fusion-general-styles-fusion-border"></span></span>',
                'class' => 'fusion-border',
              ),
            ),
          ),
          'fusion-equal-heights' => 
          array (
            'title' => 'Equal heights',
            'type' => 'checkboxes',
            'description' => 'Make blocks in a region the same height',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.equalheights.js',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Equal heights: equalize the heights of blocks with this style in the same region <span class="preview-icon" id="fusion-general-styles-equal-heights"></span></span>',
                'class' => 'equal-heights',
              ),
            ),
          ),
          'fusion-multicol' => 
          array (
            'title' => 'List columns',
            'type' => 'select',
            'description' => 'Put items in lists (menus, list views, etc.) in multiple columns',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
              4 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '2-column list/menu (50%/50%)',
                'class' => 'fusion-2-col-list clearfix',
              ),
              2 => 
              array (
                'label' => '3-column list/menu (33%/33%/33%)',
                'class' => 'fusion-3-col-list clearfix',
              ),
            ),
          ),
          'fusion-menu' => 
          array (
            'title' => 'Menu layout',
            'type' => 'radios',
            'description' => 'Different layouts and alignment options for your menus',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Single line menu with separators <span class="preview-icon" id="fusion-menu-fusion-inline-menu"></span></span>',
                'class' => 'fusion-inline-menu',
              ),
              2 => 
              array (
                'label' => '<span class="preview-text">Multi-column menu with bold headers (set menu items to Expanded) <span class="preview-icon" id="fusion-menu-fusion-multicol-menu"></span></span>',
                'class' => 'fusion-multicol-menu clearfix',
              ),
            ),
          ),
          'fusion-list-styles' => 
          array (
            'title' => 'List/menu styles',
            'type' => 'checkboxes',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
              4 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Bottom border (no bullets) <span class="preview-icon" id="list-styles-bottom-border"></span></span>',
                'class' => 'fusion-list-bottom-border',
              ),
              2 => 
              array (
                'label' => '<span class="preview-text">Extra vertical spacing (no bullets) <span class="preview-icon" id="list-styles-extra-vertical-spacing"></span></span>',
                'class' => 'fusion-list-vertical-spacing',
              ),
            ),
          ),
          'fusion-superfish' => 
          array (
            'title' => 'Superfish menu styles',
            'type' => 'radios',
            'description' => 'Superfish dropdown menus (must also set menu items to Expanded)',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Vertical menu (for sidebar blocks) <span class="preview-icon" id="fusion-superfish-superfish-vertical"></span></span>',
                'class' => 'superfish superfish-vertical',
              ),
            ),
          ),
          'fusion-float-imagefield' => 
          array (
            'title' => 'Image floating styles',
            'type' => 'select',
            'description' => 'These options will float ImageField images in content to the left or right and add margins',
            'features' => 
            array (
              0 => 'block',
              1 => 'node',
              2 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Float ImageField left',
                'class' => 'fusion-float-imagefield-left',
              ),
              2 => 
              array (
                'label' => 'Float ImageField right',
                'class' => 'fusion-float-imagefield-right',
              ),
            ),
          ),
          'fusion-login' => 
          array (
            'title' => 'User login block styles',
            'type' => 'radios',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.overlabel.js',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Horizontal: puts user login block on a single line with label overlays (good for Header Top region) <span class="preview-icon" id="fusion-login-fusion-horiz-login"></span></span>',
                'class' => 'fusion-horiz-login',
              ),
            ),
          ),
        ),
        'version' => '6.x-1.0',
        'project' => 'fusion',
        'datestamp' => '1278618609',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'fusion',
      'version' => '6.x-1.0',
    ),
  ),
);


# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
