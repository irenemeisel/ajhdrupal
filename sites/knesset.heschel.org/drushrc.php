<?php

$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_passwd'] = 'gDxs3QjnyD';
$options['db_name'] = 'site_439';
$options['db_user'] = 'site_439';
$options['installed'] = true;
$options['aliases'] = array (
);
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.20',
      'description' => 'This platform is running Drupal 6.20',
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
        'description' => 'Select this profile to install the Drupal Commons distribution for powering your community website. Drupal Commons provides provides blogging, discussions, user profiles, and other useful community features for both private communities (e.g. an Intranet), or public communities (e.g. a customer community).<br/><a href="http://drupal.org/project/commons" target="_blank"><img alt="Drupal Commons" title="Drupal Commons" src="./profiles/drupal_commons/images/logo.png"></img></a>',
        'languages' => 
        array (
          0 => 'en',
        ),
        'version' => NULL,
      ),
      'version' => '6.20',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'blogapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/blogapi/blogapi.module',
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog API',
        'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to structure site pages in a hierarchy or outline.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.20',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ping',
        'description' => 'Alerts other sites when your site has been updated.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Throttle',
        'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.20',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'acquia_agent' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/acquia/acquia_connector/acquia_agent/acquia_agent.module',
      'name' => 'acquia_agent',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia agent',
        'description' => 'Allows Drupal to securely communicate with the Acquia Network, and checks for updates to Acquia Drupal.',
        'package' => 'Acquia Network Connector',
        'php' => '5.0',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'acquia_connector',
        'datestamp' => '1284660059',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'acquia_connector',
      'version' => '6.x-1.10',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.10',
        'project' => 'acquia_connector',
        'datestamp' => '1284660059',
      ),
      'project' => 'acquia_connector',
      'version' => '6.x-1.10',
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
      'schema_version' => '-1',
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
    'mollom' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/acquia/mollom/mollom.module',
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom',
        'description' => 'Protects forms against spam.',
        'core' => '6.x',
        'version' => '6.x-1.15',
        'project' => 'mollom',
        'datestamp' => '1288636847',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mollom',
      'version' => '6.x-1.15',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom Test',
        'description' => 'Testing module for Mollom functionality. Do not enable.',
        'core' => '6.x',
        'package' => 'Testing',
        'hidden' => true,
        'php' => '5',
        'version' => '6.x-1.15',
        'project' => 'mollom',
        'datestamp' => '1288636847',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'mollom',
      'version' => '6.x-1.15',
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
      'schema_version' => '-1',
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
        'datestamp' => '1291334645',
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
      'schema_version' => '-1',
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
    'apachesolr_search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/apachesolr/apachesolr_search.module',
      'name' => 'apachesolr_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
    'apachesolr_image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/apachesolr/contrib/apachesolr_image/apachesolr_image.module',
      'name' => 'apachesolr_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
      'schema_version' => '-1',
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
      'schema_version' => '-1',
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
    'backup_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'backup_migrate',
        'datestamp' => '1289012136',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'backup_migrate',
      'version' => '6.x-2.4',
    ),
    'better_formats' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/better_formats/better_formats.module',
      'name' => 'better_formats',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
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
    'calendar_ical' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/calendar/calendar_ical/calendar_ical.module',
      'name' => 'calendar_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
    ),
    'calendar_multiday' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/calendar/calendar_multiday/calendar_multiday.module',
      'name' => 'calendar_multiday',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar Multiday',
        'description' => 'Use the calendar multiday display as an alternative to the standard display. (BETA version)',
        'dependencies' => 
        array (
          0 => 'calendar',
          1 => 'views',
        ),
        'core' => '6.x',
        'php' => '5.2',
        'package' => 'Date/Time',
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'chart_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/chart/chart_views/chart_views.module',
      'name' => 'chart_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chart API Views Integration',
        'description' => 'Provides a "Google Chart" Views style.',
        'package' => 'Charting',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'chart',
          1 => 'views',
          2 => 'views_calc',
        ),
        'version' => '6.x-1.3',
        'project' => 'chart',
        'datestamp' => '1289940382',
        'php' => '4.3.5',
      ),
      'project' => 'chart',
      'version' => '6.x-1.3',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal System Charting',
        'description' => 'Charting for various core modules.',
        'package' => 'Charting',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'chart',
        ),
        'version' => '6.x-1.3',
        'project' => 'chart',
        'datestamp' => '1289940382',
      ),
      'project' => 'chart',
      'version' => '6.x-1.3',
    ),
    'computed_field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/computed_field/computed_field.module',
      'name' => 'computed_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Computed Field',
        'description' => 'Allows the user to define computed values in custom content types.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'version' => '6.x-1.0-beta4',
        'project' => 'computed_field',
        'datestamp' => '1287289892',
        'php' => '4.3.5',
      ),
      'project' => 'computed_field',
      'version' => '6.x-1.0-beta4',
    ),
    'context_layouts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'core' => '6.x',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'custom_pagers' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/custom_pagers/custom_pagers.module',
      'name' => 'custom_pagers',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Pagers',
        'core' => '6.x',
        'description' => 'Allows administrators to define custom pagers for navigation in lists of nodes.',
        'version' => '6.x-1.0-beta2',
        'project' => 'custom_pagers',
        'datestamp' => '1263770103',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'custom_pagers',
      'version' => '6.x-1.0-beta2',
    ),
    'data' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/data/data.module',
      'name' => 'data',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Data',
        'description' => 'Provides two dimensional storage space for arbitrary data sets.',
        'package' => 'Data',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-alpha14',
        'project' => 'data',
        'datestamp' => '1285694160',
        'php' => '4.3.5',
      ),
      'project' => 'data',
      'version' => '6.x-1.0-alpha14',
    ),
    'data_node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/data/data_node/data_node.module',
      'name' => 'data_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Data Node',
        'description' => 'Relate data tables to nodes.',
        'package' => 'Data',
        'dependencies' => 
        array (
          0 => 'data',
          1 => 'data_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-alpha14',
        'project' => 'data',
        'datestamp' => '1285694160',
        'php' => '4.3.5',
      ),
      'project' => 'data',
      'version' => '6.x-1.0-alpha14',
    ),
    'data_search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/data/data_search/data_search.module',
      'name' => 'data_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Data Search',
        'description' => 'Provides search and views search integration for Data tables.',
        'package' => 'Data',
        'dependencies' => 
        array (
          0 => 'data',
          1 => 'search',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-alpha14',
        'project' => 'data',
        'datestamp' => '1285694160',
        'php' => '4.3.5',
      ),
      'project' => 'data',
      'version' => '6.x-1.0-alpha14',
    ),
    'data_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/data/data_taxonomy/data_taxonomy.module',
      'name' => 'data_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Data Taxonomy',
        'description' => 'Relate data table entries to taxonomy terms.',
        'package' => 'Data',
        'dependencies' => 
        array (
          0 => 'data',
          1 => 'data_ui',
          2 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-alpha14',
        'project' => 'data',
        'datestamp' => '1285694160',
        'php' => '4.3.5',
      ),
      'project' => 'data',
      'version' => '6.x-1.0-alpha14',
    ),
    'data_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/data/data_ui/data_ui.module',
      'name' => 'data_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Data Admin UI',
        'description' => 'Admin UI for Data Module',
        'package' => 'Data',
        'dependencies' => 
        array (
          0 => 'data',
          1 => 'schema',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-alpha14',
        'project' => 'data',
        'datestamp' => '1285694160',
        'php' => '4.3.5',
      ),
      'project' => 'data',
      'version' => '6.x-1.0-alpha14',
    ),
    'data_ui_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/data/data_ui/tests/data_ui_test.module',
      'name' => 'data_ui_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Data UI module tests',
        'description' => 'Test module for Data UI testing.',
        'package' => 'Testing',
        'version' => '6.x-1.0-alpha14',
        'core' => '6.x',
        'hidden' => true,
        'project' => 'data',
        'datestamp' => '1285694160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'data',
      'version' => '6.x-1.0-alpha14',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer block and page illustrating relevant node_access records.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Performance Logging',
        'description' => 'Logs detailed and/or summary page generation time and memory consumption for page requests.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
    ),
    'phptext' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/dynamicfield/phptext.module',
      'name' => 'phptext',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dynamic Field',
        'description' => 'Computes user generated php and lets you to access Drupal objects.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'dynamicfield',
        'datestamp' => '1234262112',
        'php' => '4.3.5',
      ),
      'project' => 'dynamicfield',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'fieldgroup',
          2 => 'text',
          3 => 'views',
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
          'user_permission' => 
          array (
            0 => 'create features_test content',
          ),
          'views' => 
          array (
            0 => 'features_test',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Features Tests',
        'package' => 'Testing',
        'version' => '6.x-1.0',
        'project' => 'features',
        'datestamp' => '1282573607',
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.0',
    ),
    'feeds' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/feeds/feeds.module',
      'name' => 'feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds',
        'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'job_scheduler',
        ),
        'core' => '6.x',
        'php' => '5.2',
        'version' => '6.x-1.0-beta10',
        'project' => 'feeds',
        'datestamp' => '1288369547',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_fast_news' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/feeds/feeds_fast_news/feeds_fast_news.module',
      'name' => 'feeds_fast_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'data',
          1 => 'feeds',
        ),
        'description' => 'A fast news aggregator built with feeds, creates flat database records from imported feed items.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'data:data_default:1',
            1 => 'data:data_table:1',
            2 => 'feeds:feeds_importer_default:1',
          ),
          'data_tables' => 
          array (
            0 => 'feeds_data_feed_fast',
          ),
          'feeds_importer' => 
          array (
            0 => 'feed_fast',
          ),
          'node' => 
          array (
            0 => 'feed_fast',
          ),
        ),
        'name' => 'Feeds Fast News',
        'package' => 'Feeds',
        'project' => 'feeds',
        'version' => '6.x-1.0-beta10',
        'datestamp' => '1288369547',
        'php' => '4.3.5',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_import' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/feeds/feeds_import/feeds_import.module',
      'name' => 'feeds_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'description' => 'An example of a node importer and a user importer.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
          ),
          'feeds_importer' => 
          array (
            0 => 'node',
            1 => 'user',
          ),
        ),
        'name' => 'Feeds Import',
        'package' => 'Feeds',
        'project' => 'feeds',
        'version' => '6.x-1.0-beta10',
        'datestamp' => '1288369547',
        'php' => '4.3.5',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_news' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/feeds/feeds_news/feeds_news.module',
      'name' => 'feeds_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'feeds',
          1 => 'views',
        ),
        'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
          ),
          'feeds_importer' => 
          array (
            0 => 'feed',
            1 => 'opml',
          ),
          'node' => 
          array (
            0 => 'feed',
            1 => 'feed_item',
          ),
          'views' => 
          array (
            0 => 'feeds_defaults_feed_items',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Feeds News',
        'package' => 'Feeds',
        'project' => 'feeds',
        'version' => '6.x-1.0-beta10',
        'datestamp' => '1288369547',
        'php' => '4.3.5',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/feeds/feeds_ui/feeds_ui.module',
      'name' => 'feeds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Admin UI',
        'description' => 'Administrative UI for Feeds module.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'core' => '6.x',
        'php' => '5.2',
        'version' => '6.x-1.0-beta10',
        'project' => 'feeds',
        'datestamp' => '1288369547',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
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
      'schema_version' => '-1',
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
    'hds' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/heartbeat/modules/hds/hds.module',
      'name' => 'hds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
        'version' => '6.x-4.11',
        'project' => 'heartbeat',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
      'schema_version' => '-1',
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
        'version' => '6.x-4.11',
        'project' => 'heartbeat',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Heartbeat example module',
        'description' => 'Advanced features of heartbeat explained and demonstrated. This module is not for production usage.',
        'package' => 'Heartbeat',
        'dependencies' => 
        array (
          0 => 'heartbeat',
          1 => 'not_for_production_modules',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-4.11',
        'project' => 'heartbeat',
        'datestamp' => '1295571920',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
      'schema_version' => '-1',
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
        'version' => '6.x-4.11',
        'project' => 'heartbeat',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
      'schema_version' => '-1',
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
        'version' => '6.x-4.11',
        'project' => 'heartbeat',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
    ),
    'homebox_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/homebox/homebox_example/homebox_example.module',
      'name' => 'homebox_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Homebox example',
        'description' => 'An example implementation of the Homebox API',
        'dependencies' => 
        array (
          0 => 'homebox',
        ),
        'package' => 'Homebox',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'homebox',
        'datestamp' => '1281486392',
        'php' => '4.3.5',
      ),
      'project' => 'homebox',
      'version' => '6.x-2.1',
    ),
    'homebox_og' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/homebox/homebox_og/homebox_og.module',
      'name' => 'homebox_og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Homebox OG',
        'description' => 'Provides integration with Organic Groups and Homebox',
        'dependencies' => 
        array (
          0 => 'homebox',
          1 => 'og',
        ),
        'package' => 'Homebox',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'homebox',
        'datestamp' => '1281486392',
        'php' => '4.3.5',
      ),
      'project' => 'homebox',
      'version' => '6.x-2.1',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.1',
        'project' => 'image',
        'datestamp' => '1292977280',
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.1',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.1',
        'project' => 'image',
        'datestamp' => '1292977280',
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.1',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.1',
        'project' => 'image',
        'datestamp' => '1292977280',
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.1',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageMagick Advanced Options',
        'description' => 'Adds advanced options to the ImageMagick image toolkit.',
        'package' => 'Image',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'image',
        'datestamp' => '1292977280',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.1',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Allows uploading, resizing and viewing of images.',
        'package' => 'Image',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'image',
        'datestamp' => '1292977280',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'image',
      'version' => '6.x-1.1',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI ImageMagick',
        'description' => 'Command Line ImageMagick support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'imageapi',
        'datestamp' => '1287340884',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.9',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
    ),
    'imce' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'imce',
        'datestamp' => '1293481277',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imce',
      'version' => '6.x-2.1',
    ),
    'job_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/job_scheduler/job_scheduler.module',
      'name' => 'job_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler',
        'description' => 'Scheduler API',
        'core' => '6.x',
        'php' => '5.2',
        'version' => '6.x-1.0-beta3',
        'project' => 'job_scheduler',
        'datestamp' => '1284491510',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'job_scheduler',
      'version' => '6.x-1.0-beta3',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
    ),
    'modalframe' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/modalframe/modalframe.module',
      'name' => 'modalframe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Modal Frame API',
        'description' => 'Provides an API to render an iframe within a modal dialog based on the jQuery UI Dialog plugin.',
        'package' => 'Modal frame',
        'dependencies' => 
        array (
          0 => 'jquery_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'modalframe',
        'datestamp' => '1273809616',
        'php' => '4.3.5',
      ),
      'project' => 'modalframe',
      'version' => '6.x-1.7',
    ),
    'modalframe_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/modalframe/modules/modalframe_example/modalframe_example.module',
      'name' => 'modalframe_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Modal Frame Example',
        'description' => 'Example for the Modal Frame API.',
        'package' => 'Modal frame',
        'dependencies' => 
        array (
          0 => 'modalframe',
        ),
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'modalframe',
        'datestamp' => '1273809616',
        'php' => '4.3.5',
      ),
      'project' => 'modalframe',
      'version' => '6.x-1.7',
    ),
    'nodeaccess_userreference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/nodeaccess_userreference/nodeaccess_userreference.module',
      'name' => 'nodeaccess_userreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Access User Reference',
        'description' => 'Provides per node access control with CCK User Reference fields.',
        'core' => '6.x',
        'package' => 'CCK',
        'dependencies' => 
        array (
          0 => 'userreference',
        ),
        'version' => '6.x-2.6',
        'project' => 'nodeaccess_userreference',
        'datestamp' => '1275226507',
        'php' => '4.3.5',
      ),
      'project' => 'nodeaccess_userreference',
      'version' => '6.x-2.6',
    ),
    'nodereference_url' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/nodereference_url/nodereference_url.module',
      'name' => 'nodereference_url',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference URL Widget',
        'description' => 'Adds an additional widget to the CCK Node Reference field that prepopulates a reference by the URL.',
        'dependencies' => 
        array (
          0 => 'nodereference',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'nodereference_url',
        'datestamp' => '1270624508',
        'php' => '4.3.5',
      ),
      'project' => 'nodereference_url',
      'version' => '6.x-1.6',
    ),
    'content_profile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/noderelationships/content_profile/content_profile.module',
      'name' => 'content_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Profile',
        'description' => 'Use content types for user profiles.',
        'package' => 'Content Profile',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'content_profile',
        'datestamp' => '1270662007',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'content_profile',
      'version' => '6.x-1.0',
    ),
    'content_profile_registration' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/noderelationships/content_profile/modules/content_profile_registration.module',
      'name' => 'content_profile_registration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Profile User Registration',
        'description' => 'Enable content profile features during user registration',
        'package' => 'Content Profile',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content_profile',
        ),
        'version' => '6.x-1.0',
        'project' => 'content_profile',
        'datestamp' => '1270662007',
        'php' => '4.3.5',
      ),
      'project' => 'content_profile',
      'version' => '6.x-1.0',
    ),
    'content_profile_tokens' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/noderelationships/content_profile/modules/content_profile_tokens.module',
      'name' => 'content_profile_tokens',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Profile Tokens',
        'description' => 'Add user tokens for content profiles.',
        'package' => 'Content Profile',
        'dependencies' => 
        array (
          0 => 'content_profile',
          1 => 'token',
          2 => 'content',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'content_profile',
        'datestamp' => '1270662007',
        'php' => '4.3.5',
      ),
      'project' => 'content_profile',
      'version' => '6.x-1.0',
    ),
    'noderelationships' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/noderelationships/noderelationships.module',
      'name' => 'noderelationships',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Relationships',
        'description' => 'Provides methods to complete two way relationships between content types enhancing the features of node reference fields.',
        'package' => 'CCK',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'nodereference',
          2 => 'views',
          3 => 'modalframe',
          4 => 'jquery_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'noderelationships',
        'datestamp' => '1274035809',
        'php' => '4.3.5',
      ),
      'project' => 'noderelationships',
      'version' => '6.x-1.6',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.3',
        'project' => 'notifications',
        'datestamp' => '1287647170',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.3',
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
      'schema_version' => '-1',
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
    'og_panels_hide_tab' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og_panels_hide_tab/og_panels_hide_tab.module',
      'name' => 'og_panels_hide_tab',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OG Panels Hide tabs',
        'description' => 'Module that hides OG Panels tabs',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og_panels',
        ),
        'version' => '6.x-1.x',
        'core' => '6.x',
        'project' => 'og_panel_hide_tab',
        'php' => '4.3.5',
      ),
      'project' => 'og_panel_hide_tab',
      'version' => '6.x-1.x',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
          1 => 'jquery_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-3.9',
        'project' => 'panels',
        'datestamp' => '1294876603',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.9',
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
      'schema_version' => '-1',
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
        'version' => '6.x-3.9',
        'project' => 'panels',
        'datestamp' => '1294876603',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.9',
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
      'schema_version' => '-1',
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
        'version' => '6.x-3.9',
        'project' => 'panels',
        'datestamp' => '1294876603',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.9',
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
      'schema_version' => '-1',
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
    'pm_block_user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/privatemsg/pm_block_user/pm_block_user.module',
      'name' => 'pm_block_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block user messages',
        'description' => 'Allows users to block other users from sending them messages.',
        'package' => 'Mail',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'privatemsg',
        ),
        'version' => '6.x-1.1',
        'project' => 'privatemsg',
        'datestamp' => '1260786352',
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.1',
    ),
    'pm_email_notify' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/privatemsg/pm_email_notify/pm_email_notify.module',
      'name' => 'pm_email_notify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Privatemsg Email Notification',
        'description' => 'Notifies users about new Private Messages via Email.',
        'package' => 'Mail',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'privatemsg',
        ),
        'version' => '6.x-1.1',
        'project' => 'privatemsg',
        'datestamp' => '1260786352',
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.1',
    ),
    'privatemsg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/privatemsg/privatemsg.module',
      'name' => 'privatemsg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Private messages',
        'description' => 'Allow private messages between users.',
        'package' => 'Mail',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'privatemsg',
        'datestamp' => '1260786352',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.1',
    ),
    'privatemsg_filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/privatemsg/privatemsg_filter/privatemsg_filter.module',
      'name' => 'privatemsg_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Privatemsg filter',
        'description' => 'Allow users to filter messages using tags or other criteria.',
        'package' => 'Mail',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'privatemsg',
        ),
        'version' => '6.x-1.1',
        'project' => 'privatemsg',
        'datestamp' => '1260786352',
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.1',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enables the use of Resource Description Framework (RDF) metadata.',
        'package' => 'RDF',
        'core' => '6.x',
        'php' => '5.2',
        'version' => '6.x-1.0-alpha8',
        'project' => 'rdf',
        'datestamp' => '1285020361',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'rdf',
      'version' => '6.x-1.0-alpha8',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
    ),
    'shoutbox_tags' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/shoutbox/shoutbox_tags/shoutbox_tags.module',
      'name' => 'shoutbox_tags',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shoutbox tags',
        'core' => '6.x',
        'description' => 'Offer #tag categorization functionality in Shoutbox',
        'package' => 'Shoutbox',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'shoutbox',
        ),
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1295397446',
        'php' => '4.3.5',
      ),
      'project' => 'shoutbox',
      'version' => '6.x-2.x-dev',
    ),
    'shoutbox_user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/shoutbox/shoutbox_user/shoutbox_user.module',
      'name' => 'shoutbox_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shoutbox user',
        'core' => '6.x',
        'description' => 'Shoutbox\'s per user, similar to a facebook wall',
        'package' => 'Shoutbox',
        'dependencies' => 
        array (
          0 => 'shoutbox',
        ),
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1295397446',
        'php' => '4.3.5',
      ),
      'project' => 'shoutbox',
      'version' => '6.x-2.x-dev',
    ),
    'drupalwiki_tagging_suggest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagging/modules/drupalwiki_tagging_suggest/drupalwiki_tagging_suggest.module',
      'name' => 'drupalwiki_tagging_suggest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal Wiki taggin suggestions',
        'description' => 'Suggesting terms for the Tagging-Module based on the current content and a algorythm developed for Drupal Wiki',
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'tagging',
        ),
        'version' => '6.x-2.5',
        'project' => 'tagging',
        'datestamp' => '1287311492',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.5',
    ),
    'tagging_alchemy_suggest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagging/modules/tagging_alchemy_suggest/tagging_alchemy_suggest.module',
      'name' => 'tagging_alchemy_suggest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagging AlchemyAPI suggestions',
        'description' => 'This plugin exposes suggestions based on the current node content (body) using AlchemyAPI natural language processing technology.',
        'package' => 'Taxonomy',
        'version' => '6.x-2.5',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'tagging',
        ),
        'project' => 'tagging',
        'datestamp' => '1287311492',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.5',
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
      'schema_version' => '-1',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.5',
        'project' => 'tagging',
        'datestamp' => '1287311492',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.5',
    ),
    'tagging_vocab_extractor_suggest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tagging/modules/tagging_vocab_extractor_suggest/tagging_vocab_extractor_suggest.module',
      'name' => 'tagging_vocab_extractor_suggest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagging vocab extractor suggestions',
        'description' => 'This tagging module exposes terms-suggestions which are part of a vocabulary and could be found in the title, teaser, body and (cck) using the extractor plugin.(Synonyms are  derived to their parent)',
        'package' => 'Taxonomy',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'tagging',
          1 => 'extractor',
        ),
        'project' => 'tagging',
        'version' => '6.x-2.5',
        'datestamp' => '1287311492',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.5',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.5',
        'project' => 'tagging',
        'datestamp' => '1287311492',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.5',
    ),
    'taxonomy_hide' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/taxonomy_hide/taxonomy_hide.module',
      'name' => 'taxonomy_hide',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'name' => 'Taxonomy hide',
        'description' => 'Hides and groups vocabulary terms in node views.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'version' => '6.x-1.02',
        'project' => 'taxonomy_hide',
        'datestamp' => '1225150823',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_hide',
      'version' => '6.x-1.02',
    ),
    'tinymce' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/tinymce/tinymce.module',
      'name' => 'tinymce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TinyMCE',
        'description' => 'The most popular WYSIWYG editor for advanced content editing.',
        'core' => '6.x',
        'project' => 'tinymce',
        'datestamp' => '1206987314',
        'version' => '6.x-1.1-dev',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'tinymce',
      'version' => '6.x-1.1-dev',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.15',
        'project' => 'token',
        'datestamp' => '1286469963',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.15',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.15',
        'project' => 'token',
        'datestamp' => '1286469963',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.15',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.2',
        'project' => 'userpoints',
        'datestamp' => '1296670918',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.2',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.2',
        'project' => 'userpoints',
        'datestamp' => '1296670918',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.2',
    ),
    'user2userpoints' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/user2userpoints/user2userpoints.module',
      'name' => 'user2userpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User to User Points',
        'description' => 'Users are able to send points to other users.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_admin_email' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_admin_email/userpoints_admin_email.module',
      'name' => 'userpoints_admin_email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Admin Email',
        'description' => 'Notifies the site admin when any user reaches a certain number of points',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_cap' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_cap/userpoints_cap.module',
      'name' => 'userpoints_cap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Cap',
        'description' => 'Limit the number of points a user can earn.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_commentspertype' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_commentspertype/userpoints_commentspertype.module',
      'name' => 'userpoints_commentspertype',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Comments per Type',
        'description' => 'Users get points for comments. Comments for different node types can be different.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_download' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_download/userpoints_download.module',
      'name' => 'userpoints_download',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Download',
        'description' => 'Deduct points from users when they download private files',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'upload',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_flag' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_flag/userpoints_flag.module',
      'name' => 'userpoints_flag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Points Flag',
        'description' => 'Integrates User Points with flag API.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'flag',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_invite' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_invite/userpoints_invite.module',
      'name' => 'userpoints_invite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Invite',
        'description' => 'Users earn points when they invite other, and when others register.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'invite',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_modr8' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_modr8/userpoints_modr8.module',
      'name' => 'userpoints_modr8',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Modr8',
        'description' => 'Moderators get awarded points for moderating via the modr8 module',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_nodelimit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_nodelimit/userpoints_nodelimit.module',
      'name' => 'userpoints_nodelimit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Points Node Limit',
        'description' => 'Limits the creation of specific nodes based on the available number of userpoints',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_no_negative' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_no_negative/userpoints_no_negative.module',
      'name' => 'userpoints_no_negative',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints No Negative',
        'description' => 'Has no UI.  Once enabled, prevents transactions that would move accounts negative.  Allows currently negative users to make positive transactions.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_pageviews' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_pageviews/userpoints_pageviews.module',
      'name' => 'userpoints_pageviews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Page Views',
        'description' => 'Gives points to content creators based on page views',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_register' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_register/userpoints_register.module',
      'name' => 'userpoints_register',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Register',
        'description' => 'Users earn points just for registering on the site',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_reset' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_reset/userpoints_reset.module',
      'name' => 'userpoints_reset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Reset',
        'description' => 'Resets all userpoints on the site.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_retroactive' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_retroactive/userpoints_retroactive.module',
      'name' => 'userpoints_retroactive',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Retroactive',
        'description' => 'Calculate userpoints for nodes and comments created so far.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_revision' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_revision/userpoints_revision.module',
      'name' => 'userpoints_revision',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Revision',
        'description' => 'Gives users points for creating revisions on nodes that are not their own.',
        'core' => '6.x',
        'package' => 'Userpoints',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_role' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_role/userpoints_role.module',
      'name' => 'userpoints_role',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Role',
        'description' => 'Users join/leave roles as they earn/lose certain points threshold, and get an email.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'userpoints_role_exempt' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_role_exempt/userpoints_role_exempt.module',
      'name' => 'userpoints_role_exempt',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Role exempt',
        'description' => 'Exempts certain roles from earning userpoints. Useful for admin and moderators.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'votingpoints' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/votingpoints/votingpoints.module',
      'name' => 'votingpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Votingpoints',
        'description' => 'Rules integration for users earning points as they vote on nodes. With the rules approach, the node author can be assigned userpoints too.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'rules',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
    ),
    'user_badges_products' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_badges/user_badges_products.module',
      'name' => 'user_badges_products',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Product Badges',
        'description' => 'Enables assignment of graphical badges to users and roles.',
        'dependencies' => 
        array (
          0 => 'user_badges',
          1 => 'ec_product',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'user_badges',
        'datestamp' => '1289861474',
        'php' => '4.3.5',
      ),
      'project' => 'user_badges',
      'version' => '6.x-1.6',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
      'schema_version' => '-1',
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
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'views_attach' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views_attach/views_attach.module',
      'name' => 'views_attach',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views attach',
        'description' => 'Provides new Views display types that can be attached to nodes or users.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'suggests' => 
        array (
          0 => 'token',
        ),
        'package' => 'Views',
        'version' => '6.x-2.2',
        'project' => 'views_attach',
        'datestamp' => '1255040204',
        'php' => '4.3.5',
      ),
      'project' => 'views_attach',
      'version' => '6.x-2.2',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions',
        'description' => 'Integrates actions with the permission system.',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'views_bulk_operations',
        'datestamp' => '1286380267',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.10',
    ),
    'views_gallery' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views_gallery/views_gallery.module',
      'name' => 'views_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Gallery',
        'description' => 'Add a Views image gallery to your website.',
        'core' => '6.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'imageapi',
          1 => 'imagecache',
          2 => 'imagefield',
          3 => 'content',
          4 => 'content_copy',
          5 => 'nodereference',
          6 => 'nodereference_url',
          7 => 'views',
          8 => 'views_attach',
          9 => 'token',
        ),
        'version' => '6.x-1.3',
        'project' => 'views_gallery',
        'datestamp' => '1275671414',
        'php' => '4.3.5',
      ),
      'project' => 'views_gallery',
      'version' => '6.x-1.3',
    ),
    'views_gallery_og' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views_gallery/views_gallery_og.module',
      'name' => 'views_gallery_og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Gallery for Organic Groups',
        'description' => 'Add Views image galleries to Organic Groups.',
        'core' => '6.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views_gallery',
          1 => 'og',
          2 => 'og_views',
        ),
        'version' => '6.x-1.3',
        'project' => 'views_gallery',
        'datestamp' => '1275671414',
        'php' => '4.3.5',
      ),
      'project' => 'views_gallery',
      'version' => '6.x-1.3',
    ),
    'commons' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/custom/commons/commons.module',
      'name' => 'commons',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
    'acquia_network_subscription' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/acquia_network_subscription/acquia_network_subscription.module',
      'name' => 'acquia_network_subscription',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
          8 => 'features',
          9 => 'mollom',
          10 => 'search',
          11 => 'strongarm',
        ),
        'description' => 'Integrate the Acquia Network with Drupal Commons',
        'features' => 
        array (
          'context' => 
          array (
            0 => 'context_ui-search',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'strongarm:strongarm:1',
          ),
          'user_permission' => 
          array (
            0 => 'administer mollom',
            1 => 'bypass mollom protection',
          ),
          'variable' => 
          array (
            0 => 'apachesolr_enabled_facets',
            1 => 'apachesolr_search_taxonomy_links',
          ),
        ),
        'name' => 'Acquia Network Subscription',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'advanced_help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/advanced_help/advanced_help.module',
      'name' => 'advanced_help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help',
        'description' => 'Allow advanced help and documentation.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'advanced_help',
        'datestamp' => '1238954409',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'advanced_help',
      'version' => '6.x-1.2',
    ),
    'help_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/advanced_help/help_example/help_example.module',
      'name' => 'help_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help example',
        'description' => 'A example help module to demonstrate the advanced help module.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'advanced_help',
        ),
        'version' => '6.x-1.2',
        'project' => 'advanced_help',
        'datestamp' => '1238954409',
        'php' => '4.3.5',
      ),
      'project' => 'advanced_help',
      'version' => '6.x-1.2',
    ),
    'auto_nodetitle' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/auto_nodetitle/auto_nodetitle.module',
      'name' => 'auto_nodetitle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Automatic Nodetitles',
        'description' => 'Allows hiding of the content title field and automatic title creation.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'auto_nodetitle',
        'datestamp' => '1249042505',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'auto_nodetitle',
      'version' => '6.x-1.2',
    ),
    'bd_video' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/bd_video/bd_video.module',
      'name' => 'bd_video',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blue Droplet Video',
        'description' => 'General purpose video module.',
        'package' => 'Video',
        'dependencies' => 
        array (
          0 => 'storage_api',
          1 => 'content',
          2 => 'flowplayer',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'bd_video',
        'datestamp' => '1268589606',
      ),
      'project' => 'bd_video',
      'version' => '6.x-1.2',
    ),
    'bd_video_ads' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/bd_video/modules/bd_video_ads.module',
      'name' => 'bd_video_ads',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blue Droplet Video Adverts',
        'description' => 'Advertising system for Blue Droplet Video.',
        'package' => 'Video',
        'dependencies' => 
        array (
          0 => 'bd_video',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'bd_video',
        'datestamp' => '1268589606',
      ),
      'project' => 'bd_video',
      'version' => '6.x-1.2',
    ),
    'cmf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/cmf/cmf.module',
      'name' => 'cmf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content management filter',
        'description' => 'This module adds an easier way for administrators to filter the content on a Drupal site for administration purposes.',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'cmf',
        'datestamp' => '1253372431',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'cmf',
      'version' => '6.x-2.0',
    ),
    'colorbox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/colorbox/colorbox.module',
      'name' => 'colorbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorbox',
        'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.3 and 1.4.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'jquery_update',
        ),
        'version' => '6.x-1.0-beta7',
        'php' => '4.3.5',
      ),
      'project' => 'colorbox',
      'version' => '6.x-1.0-beta7',
    ),
    'cvs_deploy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/cvs_deploy/cvs_deploy.module',
      'name' => 'cvs_deploy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CVS Deploy',
        'description' => 'Helps sites that are deployed directly from a CVS workspace.',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'version' => '6.x-1.1',
        'php' => '4.3.5',
      ),
      'project' => 'cvs_deploy',
      'version' => '6.x-1.1',
    ),
    'emaudio' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/emfield/contrib/emaudio/emaudio.module',
      'name' => 'emaudio',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Audio Field',
        'description' => 'Defines a field type for displaying third party music, podcasts, and other audio, such as podOmatic and Odeo.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'CCK',
        'version' => '6.x-1.18',
        'project' => 'emfield',
        'datestamp' => '1260225034',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-1.18',
    ),
    'emimage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/emfield/contrib/emimage/emimage.module',
      'name' => 'emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Image Field',
        'description' => 'Defines a field type for displaying images from third party providers, such as Flickr or Photobucket.',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.18',
        'project' => 'emfield',
        'datestamp' => '1260225034',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-1.18',
    ),
    'eminline' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/emfield/contrib/eminline/eminline.module',
      'name' => 'eminline',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Inline Media',
        'description' => 'Allows users to embed media into text-areas.',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'core' => '6.x',
        'version' => '6.x-1.18',
        'project' => 'emfield',
        'datestamp' => '1260225034',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-1.18',
    ),
    'emthumb' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/emfield/contrib/emthumb/emthumb.module',
      'name' => 'emthumb',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Thumbnail',
        'description' => 'Allows custom thumbnails for Embedded Media Fields.',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.18',
        'project' => 'emfield',
        'datestamp' => '1260225034',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-1.18',
    ),
    'emvideo' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/emfield/contrib/emvideo/emvideo.module',
      'name' => 'emvideo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Video Field',
        'description' => 'Defines a field type for displaying third party videos, such as YouTube and Google Video.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'CCK',
        'version' => '6.x-1.18',
        'project' => 'emfield',
        'datestamp' => '1260225034',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-1.18',
    ),
    'emwave' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/emfield/contrib/emwave/emwave.module',
      'name' => 'emwave',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Wave Field',
        'description' => 'Defines a field type for displaying waves from third party providers, such as Google or ...',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.18',
        'project' => 'emfield',
        'datestamp' => '1260225034',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-1.18',
    ),
    'emfield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/emfield/emfield.module',
      'name' => 'emfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Field',
        'description' => 'Provides an engine for modules to integrate various 3rd party content providers, such as Video Neighborhood, Image Neighborhood, and Audio Neighborhood.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'version' => '6.x-1.18',
        'project' => 'emfield',
        'datestamp' => '1260225034',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-1.18',
    ),
    'feedapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/feedapi/feedapi.module',
      'name' => 'feedapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI',
        'description' => 'Provides feed aggregation functionality, a feed management interface and an API. If you enable this module, enable at least one item processor (e. g. FeedAPI Node Item) and one parser (e. g. SimplePie parser).',
        'package' => 'FeedAPI Default',
        'core' => '6.x',
        'php' => '4.0',
        'version' => '6.x-1.8',
        'project' => 'feedapi',
        'datestamp' => '1250105143',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.8',
    ),
    'feedapi_inherit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/feedapi/feedapi_inherit/feedapi_inherit.module',
      'name' => 'feedapi_inherit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI Inherit',
        'description' => 'Passes on group and taxonomy information from feed to feed items. Requires FeedAPI Node processor.',
        'dependencies' => 
        array (
          0 => 'feedapi',
          1 => 'feedapi_node',
        ),
        'package' => 'FeedAPI Add On',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'feedapi',
        'datestamp' => '1250105143',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.8',
    ),
    'feedapi_node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/feedapi/feedapi_node/feedapi_node.module',
      'name' => 'feedapi_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI Node',
        'description' => 'Creates nodes from feed items.',
        'dependencies' => 
        array (
          0 => 'feedapi',
        ),
        'package' => 'FeedAPI Default',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'feedapi',
        'datestamp' => '1250105143',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.8',
    ),
    'parser_common_syndication' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/feedapi/parser_common_syndication/parser_common_syndication.module',
      'name' => 'parser_common_syndication',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common syndication parser',
        'description' => 'Provides an XML parser for FeedAPI modules. Requires PHP5.',
        'package' => 'FeedAPI Add On',
        'dependencies' => 
        array (
          0 => 'feedapi',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.8',
        'project' => 'feedapi',
        'datestamp' => '1250105143',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.8',
    ),
    'parser_simplepie' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/feedapi/parser_simplepie/parser_simplepie.module',
      'name' => 'parser_simplepie',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimplePie parser',
        'description' => 'Provides an XML parser for FeedAPI modules. Uses SimplePie library. Requires SimplePie 1.01+.',
        'package' => 'FeedAPI Default',
        'dependencies' => 
        array (
          0 => 'feedapi',
        ),
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'feedapi',
        'datestamp' => '1250105143',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.8',
    ),
    'flowplayer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/flowplayer/flowplayer.module',
      'name' => 'flowplayer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flowplayer API',
        'description' => 'Provides integration with the Flowplayer video player.',
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'flowplayer',
        'datestamp' => '1268588707',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'flowplayer',
      'version' => '6.x-1.0-beta1',
    ),
    'galleryformatter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/galleryformatter/galleryformatter.module',
      'name' => 'galleryformatter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gallery Formatter',
        'description' => 'Provides a jquery gallery CCK formatter for imagefield',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'imagefield',
          2 => 'imagecache',
        ),
        'core' => '6.x',
        'package' => 'User interface',
        'version' => '6.x-1.0-rc3',
        'php' => '4.3.5',
      ),
      'project' => 'galleryformatter',
      'version' => '6.x-1.0-rc3',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Adds Google Analytics javascript tracking code to all your site\'s pages.',
        'core' => '6.x',
        'package' => 'Statistics',
        'version' => '6.x-3.2',
        'project' => 'google_analytics',
        'datestamp' => '1297103607',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'google_analytics',
      'version' => '6.x-3.2',
    ),
    'gradebook' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/gradebook/gradebook.module',
      'name' => 'gradebook',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gradebook',
        'description' => 'Provides a simple gradebook.',
        'package' => 'Gradebook',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'gradebookapi',
        ),
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'gradebook',
        'datestamp' => '1282306137',
        'php' => '4.3.5',
      ),
      'project' => 'gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'gradebookapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/gradebook/gradebookapi.module',
      'name' => 'gradebookapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gradebook API',
        'description' => 'Provides a gradebook API.',
        'package' => 'Gradebook',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'gradebook',
        'datestamp' => '1282306137',
        'php' => '4.3.5',
      ),
      'project' => 'gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'gradebook_attachments' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/gradebook/gradebook_attachments/gradebook_attachments.module',
      'name' => 'gradebook_attachments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gradebook Attachments',
        'description' => 'Provides file attachments for gradebook assignments.',
        'package' => 'Gradebook',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'gradebookapi',
          2 => 'gradebook',
          3 => 'upload',
        ),
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'gradebook',
        'datestamp' => '1282306137',
        'php' => '4.3.5',
      ),
      'project' => 'gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'gradebook_attendance' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/gradebook/gradebook_attendance/gradebook_attendance.module',
      'name' => 'gradebook_attendance',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gradebook Attendance',
        'description' => 'Allows users to take attendance with their gradebooks.',
        'core' => '6.x',
        'package' => 'Gradebook',
        'dependencies' => 
        array (
          0 => 'gradebook',
          1 => 'gradebookapi',
        ),
        'version' => '6.x-2.x-dev',
        'project' => 'gradebook',
        'datestamp' => '1282306137',
        'php' => '4.3.5',
      ),
      'project' => 'gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'gradebook_responses' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/gradebook/gradebook_responses/gradebook_responses.module',
      'name' => 'gradebook_responses',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gradebook Responses',
        'description' => 'Provides student responses for gradebook assignments.',
        'package' => 'Gradebook',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'gradebookapi',
          2 => 'gradebook',
        ),
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'gradebook',
        'datestamp' => '1282306137',
        'php' => '4.3.5',
      ),
      'project' => 'gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'gradebook_roster' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/gradebook/gradebook_roster/gradebook_roster.module',
      'name' => 'gradebook_roster',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gradebook Roster',
        'description' => 'Provides a class roster.',
        'package' => 'Gradebook',
        'dependencies' => 
        array (
          0 => 'gradebookapi',
          1 => 'gradebook',
        ),
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'gradebook',
        'datestamp' => '1282306137',
        'php' => '4.3.5',
      ),
      'project' => 'gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'gradebook_scales' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/gradebook/gradebook_scales/gradebook_scales.module',
      'name' => 'gradebook_scales',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gradebook Scales and Weights',
        'description' => 'Provides assignment scales and gradebook category weights.',
        'package' => 'Gradebook',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'gradebookapi',
          2 => 'gradebook',
        ),
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'gradebook',
        'datestamp' => '1282306137',
        'php' => '4.3.5',
      ),
      'project' => 'gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'i18n' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18n.module',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Internationalization',
        'description' => 'Extends Drupal support for multilingual features.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'translation',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18nblocks' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18nblocks/i18nblocks.module',
      'name' => 'i18nblocks',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block translation',
        'description' => 'Enables multilingual blocks and block translation.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'i18nstrings',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18ncck' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18ncck/i18ncck.module',
      'name' => 'i18ncck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCK translation',
        'description' => 'Supports translatable custom CCK fields and fieldgroups.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'content',
          2 => 'i18nstrings',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18ncontent' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18ncontent/i18ncontent.module',
      'name' => 'i18ncontent',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content type translation',
        'description' => 'Add multilingual options for content and translate related strings: name, description, help text...',
        'dependencies' => 
        array (
          0 => 'i18nstrings',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18nmenu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18nmenu/i18nmenu.module',
      'name' => 'i18nmenu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu translation',
        'description' => 'Supports translatable custom menu items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'menu',
          2 => 'i18nblocks',
          3 => 'i18nstrings',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18npoll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18npoll/i18npoll.module',
      'name' => 'i18npoll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll aggregate',
        'description' => 'Aggregates poll results for all translations.',
        'dependencies' => 
        array (
          0 => 'translation',
          1 => 'poll',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18nprofile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18nprofile/i18nprofile.module',
      'name' => 'i18nprofile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile translation',
        'description' => 'Enables multilingual profile fields.',
        'dependencies' => 
        array (
          0 => 'profile',
          1 => 'i18nstrings',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18nstrings' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18nstrings/i18nstrings.module',
      'name' => 'i18nstrings',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'String translation',
        'description' => 'Provides support for translation of user defined strings.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18nsync' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18nsync/i18nsync.module',
      'name' => 'i18nsync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Synchronize translations',
        'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18ntaxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/i18ntaxonomy/i18ntaxonomy.module',
      'name' => 'i18ntaxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy translation',
        'description' => 'Enables multilingual taxonomy.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'taxonomy',
          2 => 'i18nstrings',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'i18n_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/i18n/tests/i18n_test.module',
      'name' => 'i18n_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Internationalization tests',
        'description' => 'Helper module for testing i18n (do not enable manually)',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'translation',
          2 => 'i18n',
        ),
        'package' => 'Testing',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1284106307',
        'php' => '4.3.5',
      ),
      'project' => 'i18n',
      'version' => '6.x-1.7',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1298619435',
        'php' => '4.3.5',
      ),
      'project' => 'imce_wysiwyg',
      'version' => '6.x-1.x-dev',
    ),
    'img_assist' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/img_assist/img_assist.module',
      'name' => 'img_assist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image assist',
        'description' => 'This module allows users to upload and insert inline images into posts. It automatically generates an Add image link under the textarea fields of your choice.',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'views',
        ),
        'package' => 'Image',
        'core' => '6.x',
        'version' => '6.x-2.0-alpha4',
        'project' => 'img_assist',
        'datestamp' => '1247699742',
        'php' => '4.3.5',
      ),
      'project' => 'img_assist',
      'version' => '6.x-2.0-alpha4',
    ),
    'jifupload' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/jifupload/jifupload.module',
      'name' => 'jifupload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jifUploader for Imagefield',
        'description' => 'Multiple images are automatically populated to a multi-value imagefield using the wjhk.jupload Java uploader applet.',
        'package' => 'CCK',
        'dependencies' => 
        array (
          0 => 'imagefield',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'jifupload',
        'datestamp' => '1287231043',
        'php' => '4.3.5',
      ),
      'project' => 'jifupload',
      'version' => '6.x-1.x-dev',
    ),
    'jquery_ui_dialog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/jquery_ui_dialog/jquery_ui_dialog.module',
      'name' => 'jquery_ui_dialog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JQuery UI Dialog API',
        'description' => 'A slim API to support jquery ui dialogs in Drupal. Just provides an direct interface to the jquery-ui-dialog plugin',
        'package' => 'WYSIWYG',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'jquery_ui',
          1 => 'jquery_update',
        ),
        'project' => 'jquery_ui_dialog',
        'version' => '6.x-1.10',
        'datestamp' => '1278749408',
        'php' => '4.3.5',
      ),
      'project' => 'jquery_ui_dialog',
      'version' => '6.x-1.10',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Updates Drupal to use the latest version of jQuery.',
        'package' => 'User interface',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'version' => '6.x-2.0-alpha1',
        'php' => '4.3.5',
      ),
      'project' => 'jquery_update',
      'version' => '6.x-2.0-alpha1',
    ),
    'languageicons' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/languageicons/languageicons.module',
      'name' => 'languageicons',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Language icons',
        'description' => 'Adds icons to language links.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Multilanguage',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'languageicons',
        'datestamp' => '1267437008',
        'php' => '4.3.5',
      ),
      'project' => 'languageicons',
      'version' => '6.x-2.0',
    ),
    'masquerade' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/masquerade/masquerade.module',
      'name' => 'masquerade',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Masquerade',
        'description' => 'This module allows permitted users to masquerade as other users.',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.5',
        'project' => 'masquerade',
        'datestamp' => '1288290048',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'masquerade',
      'version' => '6.x-1.5',
    ),
    'mimedetect' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/mimedetect/mimedetect.module',
      'name' => 'mimedetect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'MimeDetect',
        'description' => 'Provides common mime type detection for Drupal sites.',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'mimedetect',
        'datestamp' => '1274907008',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mimedetect',
      'version' => '6.x-1.3',
    ),
    'og_gradebook' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/og_gradebook/og_gradebook.module',
      'name' => 'og_gradebook',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OG Gradebook',
        'description' => 'Provides a simple gradebook per Organic Group.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'gradebook',
          1 => 'gradebookapi',
          2 => 'og',
          3 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'og_gradebook',
        'datestamp' => '1278835114',
        'php' => '4.3.5',
      ),
      'project' => 'og_gradebook',
      'version' => '6.x-2.x-dev',
    ),
    'og_panels' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/og_panels/og_panels.module',
      'name' => 'og_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups panels.',
        'description' => 'Enable group admins to create panel pages.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'panels',
          2 => 'page_manager',
        ),
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'og_panels',
        'datestamp' => '1270800608',
        'php' => '4.3.5',
      ),
      'project' => 'og_panels',
      'version' => '6.x-2.0',
    ),
    'storage_db' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/storage_api/services/db/storage_db.module',
      'name' => 'storage_db',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database',
        'description' => 'Database storage service serving via Drupal.',
        'package' => 'Storage',
        'dependencies' => 
        array (
          0 => 'storage_api',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'storage_api',
        'datestamp' => '1268589306',
      ),
      'project' => 'storage_api',
      'version' => '6.x-1.2',
    ),
    'storage_fs' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/storage_api/services/fs/storage_fs.module',
      'name' => 'storage_fs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filesystem',
        'description' => 'Filesystem storage service serving via any HTTP or FTP service.',
        'package' => 'Storage',
        'dependencies' => 
        array (
          0 => 'storage_api',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'storage_api',
        'datestamp' => '1268589306',
      ),
      'project' => 'storage_api',
      'version' => '6.x-1.2',
    ),
    'storage_fs_drupal' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/storage_api/services/fs_drupal/storage_fs_drupal.module',
      'name' => 'storage_fs_drupal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filesystem / Drupal',
        'description' => 'Filesystem storage service serving via Drupal.',
        'package' => 'Storage',
        'dependencies' => 
        array (
          0 => 'storage_api',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'storage_api',
        'datestamp' => '1268589306',
      ),
      'project' => 'storage_api',
      'version' => '6.x-1.2',
    ),
    'storage_ftp' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/storage_api/services/ftp/storage_ftp.module',
      'name' => 'storage_ftp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FTP',
        'description' => 'FTP storage service serving via any HTTP or FTP service.',
        'package' => 'Storage',
        'dependencies' => 
        array (
          0 => 'storage_api',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'storage_api',
        'datestamp' => '1268589306',
      ),
      'project' => 'storage_api',
      'version' => '6.x-1.2',
    ),
    'storage_rackspace' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/storage_api/services/rackspace/storage_rackspace.module',
      'name' => 'storage_rackspace',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rackspace Cloud Files',
        'description' => 'Rackspace Cloud Files storage service.',
        'package' => 'Storage',
        'dependencies' => 
        array (
          0 => 'storage_api',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'storage_api',
        'datestamp' => '1268589306',
      ),
      'project' => 'storage_api',
      'version' => '6.x-1.2',
    ),
    'storage_s3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/storage_api/services/s3/storage_s3.module',
      'name' => 'storage_s3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Amazon S3 / CloudFront',
        'description' => 'Amazon S3 / CloudFront storage service.',
        'package' => 'Storage',
        'dependencies' => 
        array (
          0 => 'storage_api',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'storage_api',
        'datestamp' => '1268589306',
      ),
      'project' => 'storage_api',
      'version' => '6.x-1.2',
    ),
    'storage_api' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/storage_api/storage_api.module',
      'name' => 'storage_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Storage API',
        'description' => 'Storage module.',
        'package' => 'Storage',
        'dependencies' => 
        array (
          0 => 'mimedetect',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.2',
        'project' => 'storage_api',
        'datestamp' => '1268589306',
      ),
      'project' => 'storage_api',
      'version' => '6.x-1.2',
    ),
    'imagerotator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/imagerotator/imagerotator.module',
      'name' => 'imagerotator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Image Rotator 3',
        'description' => 'Enables support for JW Image Rotator 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'lutman' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/lutman/lutman.module',
      'name' => 'lutman',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Flash plugin',
        'description' => 'Enables support for the jQuery Flash plugin embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'flowplayer3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/shared/flowplayer3/flowplayer3.module',
      'name' => 'flowplayer3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlowPlayer 3',
        'description' => 'Enables support for FlowPlayer 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'onepixelout' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/shared/onepixelout/onepixelout.module',
      'name' => 'onepixelout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => '1 Pixel Out',
        'description' => 'Enables support for the 1 Pixel Out MP3 player.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swfobject' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/shared/swfobject/swfobject.module',
      'name' => 'swfobject',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWFObject',
        'description' => 'Enables support for the SWFObject embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'ufo' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/shared/ufo/ufo.module',
      'name' => 'ufo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UFO',
        'description' => 'Enables support for the UFO embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'simpleviewer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/simpleviewer/simpleviewer.module',
      'name' => 'simpleviewer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimpleViewer',
        'description' => 'Enables support for SimpleViewer.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swfobject2' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/swfobject2/swfobject2.module',
      'name' => 'swfobject2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWFObject2',
        'description' => 'Enables support for the SWFObject 2 embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swftools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/swftools.module',
      'name' => 'swftools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWF Tools',
        'description' => 'This is the core component of SWF Tools and provides a common API for handling Adobe Flash related media.',
        'package' => 'SWF Tools',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'wijering' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/wijering/wijering.module',
      'name' => 'wijering',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Media Player 3',
        'description' => 'Enables support for JW Media Player 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'wijering4' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/swftools/wijering4/wijering4.module',
      'name' => 'wijering4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Media Player 4',
        'description' => 'Enables support for JW Media Player 4.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'taxonomy_manager' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/taxonomy_manager/taxonomy_manager.module',
      'name' => 'taxonomy_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Manager',
        'description' => 'Tool for administrating taxonomy terms.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'version' => '6.x-2.2',
        'project' => 'taxonomy_manager',
        'datestamp' => '1265405707',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_manager',
      'version' => '6.x-2.2',
    ),
    'video_s3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/video/plugins/video_s3/video_s3.module',
      'name' => 'video_s3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Amazon S3 on Video',
        'description' => 'Leverages the Video module and Amazon Simple Storage Service (Amazon S3) to serve and store your video\'s saving bandwidth.',
        'package' => 'Video',
        'dependencies' => 
        array (
          0 => 'video',
        ),
        'core' => '6.x',
        'version' => '6.x-4.2-beta4',
        'project' => 'video',
        'datestamp' => '1304313417',
        'php' => '4.3.5',
      ),
      'project' => 'video',
      'version' => '6.x-4.2-beta4',
    ),
    'video_zencoder' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/video/plugins/video_zencoder/video_zencoder.module',
      'name' => 'video_zencoder',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Zencoder API on Video',
        'description' => 'Zencoder is a webservice to transcode videos.',
        'package' => 'Video',
        'dependencies' => 
        array (
          0 => 'video',
          1 => 'video_s3',
        ),
        'core' => '6.x',
        'version' => '6.x-4.2-beta4',
        'project' => 'video',
        'datestamp' => '1304313417',
        'php' => '4.3.5',
      ),
      'project' => 'video',
      'version' => '6.x-4.2-beta4',
    ),
    'uploadfield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/video/types/uploadfield/uploadfield.module',
      'name' => 'uploadfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Video Upload',
        'description' => 'Handle video upload for video module using filefield and CCK.',
        'core' => '6.x',
        'version' => '6.x-4.2-beta4',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
          2 => 'video',
        ),
        'package' => 'Video',
        'project' => 'video',
        'datestamp' => '1304313417',
        'php' => '4.3.5',
      ),
      'project' => 'video',
      'version' => '6.x-4.2-beta4',
    ),
    'videoftp' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/video/types/videoftp/videoftp.module',
      'name' => 'videoftp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Video FTP',
        'description' => 'Allows you to attach videos uploaded through FTP to nodes.',
        'core' => '6.x',
        'version' => '6.x-4.2-beta4',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
          2 => 'video',
        ),
        'package' => 'Video',
        'project' => 'video',
        'datestamp' => '1304313417',
        'php' => '4.3.5',
      ),
      'project' => 'video',
      'version' => '6.x-4.2-beta4',
    ),
    'video' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/video/video.module',
      'name' => 'video',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Video',
        'description' => 'Allows Creation of CCK Video Fields.',
        'package' => 'Video',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
        ),
        'core' => '6.x',
        'version' => '6.x-4.2-beta4',
        'project' => 'video',
        'datestamp' => '1304313417',
        'php' => '4.3.5',
      ),
      'project' => 'video',
      'version' => '6.x-4.2-beta4',
    ),
    'viewsphpfilter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/viewsphpfilter/viewsphpfilter.module',
      'name' => 'viewsphpfilter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views PHP Filter',
        'description' => 'Adds a filter to Views that takes PHP code, and uses the return value of the code as an array of Node IDs to filter on.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'version' => '6.x-1.0-beta1',
        'project' => 'viewsphpfilter',
        'datestamp' => '1244701885',
        'php' => '4.3.5',
      ),
      'project' => 'viewsphpfilter',
      'version' => '6.x-1.0-beta1',
    ),
    'views_arguments_extras' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/views_arguments_extras/views_arguments_extras.module',
      'name' => 'views_arguments_extras',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Arguments Extras',
        'description' => 'Adds extra to Views around arguments',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'version' => '6.x-1.0-alpha4',
        'project' => 'views_arguments_extras',
        'datestamp' => '1271304014',
        'php' => '4.3.5',
      ),
      'project' => 'views_arguments_extras',
      'version' => '6.x-1.0-alpha4',
    ),
    'views_customfield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/views_customfield/views_customfield.module',
      'name' => 'views_customfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Custom Field',
        'description' => 'Provides a number of custom fields (rownumber, phpcode, ...).',
        'core' => '6.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-1.0',
        'project' => 'views_customfield',
        'datestamp' => '1240962075',
        'php' => '4.3.5',
      ),
      'project' => 'views_customfield',
      'version' => '6.x-1.0',
    ),
    'drupalwiki_imageselect_element' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/modules/drupalwiki_imageselect_element/drupalwiki_imageselect_element.module',
      'name' => 'drupalwiki_imageselect_element',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupalwiki imageselect element',
        'description' => 'Use this helper to make nice looking select boxes with images',
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'wysiwyg_imageupload',
        'datestamp' => '1292376067',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'wysiwyg_imageupload_browser' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/modules/wysiwyg_imageupload_browser/wysiwyg_imageupload_browser.module',
      'name' => 'wysiwyg_imageupload_browser',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG Image upload Browser',
        'description' => 'Browser for the last x Images inserted by the User',
        'dependencies' => 
        array (
          0 => 'wysiwyg_imageupload',
          1 => 'views',
        ),
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'project' => 'wysiwyg_imageupload',
        'version' => '6.x-2.9',
        'datestamp' => '1292376067',
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'wysiwyg_imageupload_fancybox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/modules/wysiwyg_imageupload_fancybox/wysiwyg_imageupload_fancybox.module',
      'name' => 'wysiwyg_imageupload_fancybox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG Image upload - Fancybox integration',
        'description' => 'Image upload dialog for the most WYSIWYG Editors',
        'dependencies' => 
        array (
          0 => 'wysiwyg_imageupload',
          1 => 'fancybox',
        ),
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'project' => 'wysiwyg_imageupload',
        'version' => '6.x-2.9',
        'datestamp' => '1292376067',
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'wysiwyg_imageupload_lightbox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/modules/wysiwyg_imageupload_lightbox/wysiwyg_imageupload_lightbox.module',
      'name' => 'wysiwyg_imageupload_lightbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG Image upload - Lightbox2 integration',
        'description' => 'Image upload dialog for the most WYSIWYG Editors',
        'dependencies' => 
        array (
          0 => 'wysiwyg_imageupload',
          1 => 'lightbox2',
        ),
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'project' => 'wysiwyg_imageupload',
        'version' => '6.x-2.9',
        'datestamp' => '1292376067',
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'wysiwyg_imageupload_migrate_1_2' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/modules/wysiwyg_imageupload_migrate_1_2/wysiwyg_imageupload_migrate_1_2.module',
      'name' => 'wysiwyg_imageupload_migrate_1_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg imageupload - Migrates WYSIWYG imageupload 1-x t 2.x',
        'dependencies' => 
        array (
          0 => 'wysiwyg_imageupload',
          1 => 'wysiwyg_imageupload_migration',
        ),
        'package' => 'Drupal Wiki',
        'version' => '6.x-2.9',
        'core' => '6.x',
        'project' => 'wysiwyg_imageupload',
        'datestamp' => '1292376067',
        'description' => '',
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'wysiwyg_imageupload_migration' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/modules/wysiwyg_imageupload_migration/wysiwyg_imageupload_migration.module',
      'name' => 'wysiwyg_imageupload_migration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG Image upload migration tool',
        'description' => 'Migrates different image upload systems into wysiwyg_imageupload',
        'dependencies' => 
        array (
          0 => 'wysiwyg_imageupload',
        ),
        'package' => 'Drupal Wiki',
        'version' => '6.x-2.9',
        'core' => '6.x',
        'project' => 'wysiwyg_imageupload',
        'datestamp' => '1292376067',
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'wysiwyg_imageupload_shadowbox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/modules/wysiwyg_imageupload_shadowbox/wysiwyg_imageupload_shadowbox.module',
      'name' => 'wysiwyg_imageupload_shadowbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG Image upload - Shadowbox integration',
        'description' => 'Image upload dialog for the most WYSIWYG Editors',
        'dependencies' => 
        array (
          0 => 'wysiwyg_imageupload',
          1 => 'shadowbox',
        ),
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'project' => 'wysiwyg_imageupload',
        'version' => '6.x-2.9',
        'datestamp' => '1292376067',
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'wysiwyg_imageupload' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/wysiwyg_imageupload/wysiwyg_imageupload.module',
      'name' => 'wysiwyg_imageupload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG Image upload',
        'description' => 'Image upload dialog for the most WYSIWYG Editors',
        'dependencies' => 
        array (
          0 => 'wysiwyg',
          1 => 'jquery_ui_dialog',
          2 => 'imagecache',
          3 => 'drupalwiki_imageselect_element',
        ),
        'package' => 'Drupal Wiki',
        'core' => '6.x',
        'project' => 'wysiwyg_imageupload',
        'version' => '6.x-2.9',
        'datestamp' => '1292376067',
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_imageupload',
      'version' => '6.x-2.9',
    ),
    'og_gallery' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/features/og_gallery/og_gallery.module',
      'name' => 'og_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'comment',
          1 => 'colorbox',
          2 => 'context',
          3 => 'features',
          4 => 'galleryformatter',
          5 => 'jquery_update',
          6 => 'og_views',
          7 => 'search',
          8 => 'strongarm',
          9 => 'taxonomy',
          10 => 'text',
        ),
        'description' => 'Group gallery feature',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'gallery-field_gallery_description',
            1 => 'gallery-field_gallery_image',
          ),
          'context' => 
          array (
            0 => 'context_ui-og_gallery-group',
          ),
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'node' => 
          array (
            0 => 'gallery',
          ),
          'user_permission' => 
          array (
            0 => 'create gallery content',
            1 => 'delete own gallery content',
            2 => 'edit own gallery content',
          ),
          'variable' => 
          array (
            0 => 'comment_gallery',
            1 => 'content_extra_weights_gallery',
            2 => 'node_options_gallery',
            3 => 'og_content_type_usage_gallery',
          ),
          'views' => 
          array (
            0 => 'og_tab_galleries',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'OG gallery',
        'package' => 'Features',
        'project' => 'og_gallery',
        'version' => '6.x-1.0-alpha1',
        'php' => '4.3.5',
      ),
      'project' => 'og_gallery',
      'version' => '6.x-1.0-alpha1',
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
        'version' => '6.x-2.0',
        'project' => 'strongarm',
        'datestamp' => '1281369974',
        'php' => '4.3.5',
      ),
      'project' => 'strongarm',
      'version' => '6.x-2.0',
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
        'version' => '6.x-1.4',
        'project' => 'getid3',
        'datestamp' => '1280030411',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'getid3',
      'version' => '6.x-1.4',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'upload' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/modules/upload/upload.module',
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upload',
        'description' => 'Allows users to upload and attach files to content.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
        'datestamp' => '1291334645',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ajax_load',
      'version' => '6.x-1.x-dev',
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
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
        'description' => 'Google chart API integration.',
        'package' => 'Charting',
        'core' => '6.x',
        'php' => '5',
        'version' => '6.x-1.3',
        'project' => 'chart',
        'datestamp' => '1289940382',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'chart',
      'version' => '6.x-1.3',
    ),
    'commons_release' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/commons_release/commons_release.module',
      'name' => 'commons_release',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commons release',
        'description' => 'Track updates to the Drupal Commons distribution.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'update',
        ),
        'version' => '6.x-1.4',
        'project' => 'commons_release',
        'datestamp' => '1298053999',
        'php' => '4.3.5',
      ),
      'project' => 'commons_release',
      'version' => '6.x-1.4',
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
      'schema_version' => '6304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
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
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
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
        'version' => '6.x-3.0',
        'project' => 'context_og',
        'datestamp' => '1283194307',
        'php' => '4.3.5',
      ),
      'project' => 'context_og',
      'version' => '6.x-3.0',
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
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
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
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
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
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
      'schema_version' => '6001',
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
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
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
        'version' => '6.x-2.1',
        'project' => 'diff',
        'datestamp' => '1281632190',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'diff',
      'version' => '6.x-2.1',
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
        'version' => '6.x-3.9',
        'project' => 'filefield',
        'datestamp' => '1292197563',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.9',
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
        'version' => '6.x-3.9',
        'project' => 'filefield',
        'datestamp' => '1292197563',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.9',
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
        'description' => 'Integration module between heartbeat and flag.',
        'dependencies' => 
        array (
          0 => 'heartbeat',
          1 => 'flag',
        ),
        'core' => '6.x',
        'version' => '6.x-4.11',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
        'version' => '6.x-4.11',
        'project' => 'heartbeat',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
        'version' => '6.x-4.11',
        'project' => 'heartbeat',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
    ),
    'homebox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/homebox/homebox.module',
      'name' => 'homebox',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Homebox',
        'description' => 'Provides user with a page like iGoogle, Netvibes or bbc.co.uk front page',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'jquery_ui',
        ),
        'package' => 'Homebox',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'homebox',
        'datestamp' => '1281486392',
        'php' => '4.3.5',
      ),
      'project' => 'homebox',
      'version' => '6.x-2.1',
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
        'version' => '6.x-1.9',
        'project' => 'imageapi',
        'datestamp' => '1287340884',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.9',
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
        'version' => '6.x-1.9',
        'project' => 'imageapi',
        'datestamp' => '1287340884',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.9',
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
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
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
        'version' => '6.x-3.9',
        'project' => 'imagefield',
        'datestamp' => '1292197241',
        'php' => '4.3.5',
      ),
      'project' => 'imagefield',
      'version' => '6.x-3.9',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
        'version' => '6.x-2.4',
        'project' => 'messaging',
        'datestamp' => '1297899425',
        'php' => '4.3.5',
      ),
      'project' => 'messaging',
      'version' => '6.x-2.4',
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
        'version' => '6.x-2.3',
        'project' => 'notifications',
        'datestamp' => '1287647170',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.3',
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
        'version' => '6.x-2.3',
        'project' => 'notifications',
        'datestamp' => '1287647170',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.3',
    ),
    'notifications_lite' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/notifications/notifications_lite/notifications_lite.module',
      'name' => 'notifications_lite',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Lite',
        'description' => 'Extra Simple Notifications API. Enable only when required by other modules.',
        'package' => 'Notifications',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'notifications',
        'datestamp' => '1287647170',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.3',
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
      'schema_version' => '6001',
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
        'version' => '6.x-2.3',
        'project' => 'notifications',
        'datestamp' => '1287647170',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.3',
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
        'version' => '6.x-2.3',
        'project' => 'notifications',
        'datestamp' => '1287647170',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.3',
    ),
    'og_notifications' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/og/modules/og_notifications/og_notifications.module',
      'name' => 'og_notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
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
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6310',
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
        'version' => '6.x-3.9',
        'project' => 'panels',
        'datestamp' => '1294876603',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.9',
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
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
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
      'schema_version' => '6202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shoutbox',
        'description' => 'This module enables you to display a shoutbox block and page.',
        'core' => '6.x',
        'package' => 'Shoutbox',
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1295397446',
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
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shoutbox group',
        'core' => '6.x',
        'description' => 'Extends shoutbox functionality to Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'shoutbox',
        ),
        'package' => 'Shoutbox',
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1295397446',
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
        'name' => 'Shoutbox points',
        'core' => '6.x',
        'description' => 'Extends shoutbox functionality to User points',
        'dependencies' => 
        array (
          0 => 'shoutbox',
          1 => 'userpoints',
        ),
        'package' => 'Shoutbox',
        'version' => '6.x-2.x-dev',
        'project' => 'shoutbox',
        'datestamp' => '1295397446',
        'php' => '4.3.5',
      ),
      'project' => 'shoutbox',
      'version' => '6.x-2.x-dev',
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
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Skinr',
        'description' => 'Provides a way to define and/or skin bits of Drupal output from the UI.',
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'skinr',
        'datestamp' => '1289424665',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'skinr',
      'version' => '6.x-1.6',
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
        'version' => '6.x-1.3',
        'project' => 'tagadelic',
        'datestamp' => '1300300868',
        'php' => '4.3.5',
      ),
      'project' => 'tagadelic',
      'version' => '6.x-1.3',
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
        'version' => '6.x-1.2',
        'project' => 'tagadelic_views',
        'datestamp' => '1279766708',
        'php' => '4.3.5',
      ),
      'project' => 'tagadelic_views',
      'version' => '6.x-1.2',
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
    'userpoints' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints/userpoints.module',
      'name' => 'userpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6012',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints',
        'description' => 'Userpoints core: API module for recording points for other modules.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'userpoints',
        'datestamp' => '1296670918',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.2',
    ),
    'userpoints_badges' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/userpoints_contrib/userpoints_badges/userpoints_badges.module',
      'name' => 'userpoints_badges',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Badges',
        'description' => 'Assign badges to users as they get certain number of userpoints.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'user_badges',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'userpoints_contrib',
        'datestamp' => '1289564797',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.x-dev',
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
        'version' => '6.x-1.2',
        'project' => 'userpoints_user_picture',
        'datestamp' => '1296018707',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_user_picture',
      'version' => '6.x-1.2',
    ),
    'user_badges' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/user_badges/user_badges.module',
      'name' => 'user_badges',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User badges',
        'description' => 'Enables assignment of graphical badges to users and roles.',
        'dependencies' => 
        array (
          0 => 'upload',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'user_badges',
        'datestamp' => '1289861474',
        'php' => '4.3.5',
      ),
      'project' => 'user_badges',
      'version' => '6.x-1.6',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
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
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Exposes new Views style \'Bulk Operations\' for selecting multiple nodes and applying operations on them.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.10',
        'project' => 'views_bulk_operations',
        'datestamp' => '1286380267',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.10',
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
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows users to edit contents with client-side editors.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'wysiwyg',
        'datestamp' => '1294317115',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg',
      'version' => '6.x-2.x-dev',
    ),
    'wysiwyg_filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/contrib/wysiwyg_filter/wysiwyg_filter.module',
      'name' => 'wysiwyg_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG Filter',
        'description' => 'Provides an input filter that allows site administrators configure which HTML elements, attributes and style properties are allowed.',
        'package' => 'Input filters',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'wysiwyg_filter',
        'datestamp' => '1273304109',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg_filter',
      'version' => '6.x-1.5',
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
    'commons_admin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_admin/commons_admin.module',
      'name' => 'commons_admin',
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
          1 => 'context_ui',
          2 => 'features',
          3 => 'imagecache_ui',
          4 => 'rules_admin',
          5 => 'user_relationships_ui',
          6 => 'views',
          7 => 'views_ui',
        ),
        'description' => 'Contains modules that provide admin interfaces',
        'features' => 
        array (
          'user_permission' => 
          array (
            0 => 'access administration menu',
            1 => 'administer rules',
          ),
        ),
        'name' => 'Commons Admin',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_blog/commons_blog.module',
      'name' => 'commons_blog',
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
          0 => 'blog',
          1 => 'comment',
          2 => 'commons_core',
          3 => 'editablefields',
          4 => 'features',
          5 => 'fieldgroup',
          6 => 'imagefield',
          7 => 'menu',
          8 => 'og_views',
          9 => 'optionwidgets',
          10 => 'search',
          11 => 'strongarm',
          12 => 'taxonomy',
          13 => 'text',
          14 => 'views',
        ),
        'description' => 'Provide a blog inside groups for Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'blog-field_content_images',
            1 => 'blog-field_featured_content',
            2 => 'blog-field_group_sticky',
          ),
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'blog-group_images',
            1 => 'blog-group_promote_content',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:content/blogs',
          ),
          'user_permission' => 
          array (
            0 => 'create blog entries',
            1 => 'delete any blog entry',
            2 => 'delete own blog entries',
            3 => 'edit any blog entry',
            4 => 'edit own blog entries',
          ),
          'variable' => 
          array (
            0 => 'comment_blog',
            1 => 'comment_controls_blog',
            2 => 'comment_default_mode_blog',
            3 => 'comment_default_order_blog',
            4 => 'comment_default_per_page_blog',
            5 => 'comment_form_location_blog',
            6 => 'comment_preview_blog',
            7 => 'content_extra_weights_blog',
            8 => 'node_options_blog',
            9 => 'og_content_type_usage_blog',
          ),
          'views' => 
          array (
            0 => 'content_global_blogs',
            1 => 'og_tab_blogs',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Blog',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_dashboard/commons_dashboard.module',
      'name' => 'commons_dashboard',
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
          0 => 'commons_core',
          1 => 'content',
          2 => 'features',
          3 => 'homebox',
          4 => 'jquery_ui',
          5 => 'menu',
          6 => 'og_views',
          7 => 'views',
        ),
        'description' => 'The user dashboard for Commons',
        'features' => 
        array (
          'homebox' => 
          array (
            0 => 'dashboard',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:dashboard',
          ),
          'user_permission' => 
          array (
            0 => 'administer homebox',
          ),
          'views' => 
          array (
            0 => 'og_dashboard_groups',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Dashboard',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_discussion' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_discussion/commons_discussion.module',
      'name' => 'commons_discussion',
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
          0 => 'comment',
          1 => 'commons_core',
          2 => 'editablefields',
          3 => 'features',
          4 => 'fieldgroup',
          5 => 'imagefield',
          6 => 'menu',
          7 => 'og_views',
          8 => 'optionwidgets',
          9 => 'search',
          10 => 'strongarm',
          11 => 'taxonomy',
          12 => 'text',
        ),
        'description' => 'Create discussions within groups in Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'discussion-field_content_images',
            1 => 'discussion-field_featured_content',
            2 => 'discussion-field_group_sticky',
          ),
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'discussion-group_images',
            1 => 'discussion-group_promote_content',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:content/discussions',
          ),
          'node' => 
          array (
            0 => 'discussion',
          ),
          'user_permission' => 
          array (
            0 => 'create discussion content',
            1 => 'delete any discussion content',
            2 => 'delete own discussion content',
            3 => 'edit any discussion content',
            4 => 'edit own discussion content',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_discussion',
            1 => 'comment_controls_discussion',
            2 => 'comment_default_mode_discussion',
            3 => 'comment_default_order_discussion',
            4 => 'comment_default_per_page_discussion',
            5 => 'comment_discussion',
            6 => 'comment_form_location_discussion',
            7 => 'comment_preview_discussion',
            8 => 'comment_subject_field_discussion',
            9 => 'content_extra_weights_discussion',
            10 => 'node_options_discussion',
            11 => 'og_content_type_usage_discussion',
          ),
          'views' => 
          array (
            0 => 'content_global_discussions',
            1 => 'og_tab_discussions',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Discussion',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_document' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_document/commons_document.module',
      'name' => 'commons_document',
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
          0 => 'comment',
          1 => 'commons_core',
          2 => 'content_permissions',
          3 => 'editablefields',
          4 => 'features',
          5 => 'fieldgroup',
          6 => 'filefield',
          7 => 'filefield_meta',
          8 => 'getid3',
          9 => 'menu',
          10 => 'og_views',
          11 => 'optionwidgets',
          12 => 'search',
          13 => 'strongarm',
          14 => 'taxonomy',
          15 => 'text',
          16 => 'views',
        ),
        'description' => 'Provide simple document management inside groups for Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'document-field_featured_content',
            1 => 'document-field_file',
            2 => 'document-field_group_sticky',
          ),
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'document-group_promote_content',
            1 => 'document-group_upload',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:content/documents',
          ),
          'node' => 
          array (
            0 => 'document',
          ),
          'user_permission' => 
          array (
            0 => 'create document content',
            1 => 'delete any document content',
            2 => 'delete own document content',
            3 => 'edit any document content',
            4 => 'edit field_file',
            5 => 'edit own document content',
            6 => 'view field_file',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_document',
            1 => 'comment_controls_document',
            2 => 'comment_default_mode_document',
            3 => 'comment_default_order_document',
            4 => 'comment_default_per_page_document',
            5 => 'comment_document',
            6 => 'comment_form_location_document',
            7 => 'comment_preview_document',
            8 => 'comment_subject_field_document',
            9 => 'content_extra_weights_document',
            10 => 'node_options_document',
            11 => 'og_content_type_usage_document',
          ),
          'views' => 
          array (
            0 => 'content_global_documents',
            1 => 'og_tab_documents',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Document',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_event' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_event/commons_event.module',
      'name' => 'commons_event',
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
          0 => 'calendar',
          1 => 'commons_core',
          2 => 'content_permissions',
          3 => 'context',
          4 => 'date',
          5 => 'date_api',
          6 => 'date_popup',
          7 => 'date_timezone',
          8 => 'date_tools',
          9 => 'editablefields',
          10 => 'features',
          11 => 'fieldgroup',
          12 => 'imagefield',
          13 => 'jcalendar',
          14 => 'jquery_ui',
          15 => 'menu',
          16 => 'og_views',
          17 => 'optionwidgets',
          18 => 'strongarm',
          19 => 'taxonomy',
          20 => 'text',
          21 => 'views',
        ),
        'description' => 'Create events on calendars inside groups in Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'event-field_content_images',
            1 => 'event-field_date',
            2 => 'event-field_featured_content',
            3 => 'event-field_group_sticky',
            4 => 'event-field_location',
          ),
          'context' => 
          array (
            0 => 'context_ui-group-event',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'event-group_event_details',
            1 => 'event-group_images',
            2 => 'event-group_promote_content',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:content/calendar',
          ),
          'node' => 
          array (
            0 => 'event',
          ),
          'user_permission' => 
          array (
            0 => 'administer date tools',
            1 => 'create event content',
            2 => 'delete any event content',
            3 => 'delete own event content',
            4 => 'edit any event content',
            5 => 'edit field_date',
            6 => 'edit field_location',
            7 => 'edit own event content',
            8 => 'view field_date',
            9 => 'view field_location',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_event',
            1 => 'comment_controls_event',
            2 => 'comment_default_mode_event',
            3 => 'comment_default_order_event',
            4 => 'comment_default_per_page_event',
            5 => 'comment_event',
            6 => 'comment_form_location_event',
            7 => 'comment_preview_event',
            8 => 'comment_subject_field_event',
            9 => 'content_extra_weights_event',
            10 => 'node_options_event',
            11 => 'og_content_type_usage_event',
          ),
          'views' => 
          array (
            0 => 'content_global_calendar',
            1 => 'og_calendar',
            2 => 'og_upcoming_events',
            3 => 'upcoming_events',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Event',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_group_aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_group_aggregator/commons_group_aggregator.module',
      'name' => 'commons_group_aggregator',
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
          0 => 'aggregator',
          1 => 'context',
          2 => 'features',
          3 => 'og',
          4 => 'og_aggregator',
        ),
        'description' => 'Provide an RSS aggregator for groups in Commons',
        'features' => 
        array (
          'context' => 
          array (
            0 => 'context_ui-group-aggregator',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
          ),
          'user_permission' => 
          array (
            0 => 'access news feeds',
            1 => 'access og_aggregator',
            2 => 'administer news feeds',
            3 => 'administer og_aggregator',
            4 => 'view all og_aggregator sources',
          ),
        ),
        'name' => 'Commons Group Aggregator',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_home' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_home/commons_home.module',
      'name' => 'commons_home',
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
          0 => 'comment',
          1 => 'commons_core',
          2 => 'content',
          3 => 'ctools',
          4 => 'og_views',
          5 => 'page_manager',
          6 => 'panels',
          7 => 'search',
          8 => 'strongarm',
          9 => 'tagadelic_views',
          10 => 'taxonomy',
          11 => 'views',
        ),
        'description' => 'The components that make up the Commons home page',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'strongarm:strongarm:1',
          ),
          'page_manager_pages' => 
          array (
            0 => 'commons_homepage',
          ),
          'variable' => 
          array (
            0 => 'site_frontpage',
          ),
          'views' => 
          array (
            0 => 'homepage_group_showcase',
            1 => 'homepage_most_active_groups',
            2 => 'homepage_recent_featured',
            3 => 'homepage_tag_cloud',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Home',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
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
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'messaging',
          2 => 'messaging_mail',
          3 => 'messaging_simple',
          4 => 'notifications',
          5 => 'notifications_autosubscribe',
          6 => 'notifications_content',
          7 => 'notifications_lite',
          8 => 'notifications_ui',
          9 => 'notifications_views',
          10 => 'og_notifications',
          11 => 'strongarm',
        ),
        'description' => 'Integration of email and web notifications for site activity',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'user_permission' => 
          array (
            0 => 'administer messaging',
            1 => 'administer notifications',
            2 => 'maintain own subscriptions',
            3 => 'manage all subscriptions',
            4 => 'manage own subscriptions',
            5 => 'skip notifications',
            6 => 'subscribe to author',
            7 => 'subscribe to content',
            8 => 'subscribe to content in groups',
            9 => 'subscribe to content type',
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
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_poll/commons_poll.module',
      'name' => 'commons_poll',
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
          0 => 'comment',
          1 => 'commons_core',
          2 => 'context',
          3 => 'editablefields',
          4 => 'features',
          5 => 'fieldgroup',
          6 => 'imagefield',
          7 => 'menu',
          8 => 'og_views',
          9 => 'optionwidgets',
          10 => 'poll',
          11 => 'search',
          12 => 'strongarm',
          13 => 'taxonomy',
          14 => 'text',
          15 => 'views',
        ),
        'description' => 'Create polls inside of groups in Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'poll-field_content_images',
            1 => 'poll-field_featured_content',
          ),
          'context' => 
          array (
            0 => 'context_ui-group-poll',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'poll-group_images',
            1 => 'poll-group_promote_content',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:content/polls',
          ),
          'user_permission' => 
          array (
            0 => 'cancel own vote',
            1 => 'create poll content',
            2 => 'delete any poll content',
            3 => 'delete own poll content',
            4 => 'edit any poll content',
            5 => 'edit own poll content',
            6 => 'inspect all votes',
            7 => 'vote on polls',
          ),
          'variable' => 
          array (
            0 => 'comment_default_mode_poll',
            1 => 'comment_default_order_poll',
            2 => 'comment_default_per_page_poll',
            3 => 'comment_form_location_poll',
            4 => 'comment_poll',
            5 => 'comment_preview_poll',
            6 => 'comment_subject_field_poll',
            7 => 'content_extra_weights_poll',
            8 => 'node_options_poll',
            9 => 'og_content_type_usage_poll',
          ),
          'views' => 
          array (
            0 => 'content_global_polls',
            1 => 'og_polls_all',
            2 => 'og_recent_poll',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Poll',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_reputation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_reputation/commons_reputation.module',
      'name' => 'commons_reputation',
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
          0 => 'commons_core',
          1 => 'context',
          2 => 'features',
          3 => 'menu',
          4 => 'shoutbox_points',
          5 => 'strongarm',
          6 => 'upload',
          7 => 'user_badges',
          8 => 'userpoints',
          9 => 'userpoints_badges',
          10 => 'userpoints_nc',
          11 => 'userpoints_user_picture',
          12 => 'views',
        ),
        'description' => 'A reputation system for Commons which awards points and badges for community involvement',
        'features' => 
        array (
          'context' => 
          array (
            0 => 'context_ui-content-most_active_users',
            1 => 'context_ui-users-most_active',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'strongarm:strongarm:1',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:myuserpoints',
          ),
          'user_permission' => 
          array (
            0 => 'administer userpoints',
            1 => 'change badge assignments',
            2 => 'manage badges',
            3 => 'upload files',
            4 => 'userpoints user picture',
            5 => 'view own userpoints',
            6 => 'view uploaded files',
            7 => 'view userpoints',
          ),
          'variable' => 
          array (
            0 => 'shoutbox_points_amount',
            1 => 'shoutbox_points_delete_points',
            2 => 'upload_blog',
            3 => 'upload_discussion',
            4 => 'upload_document',
            5 => 'upload_event',
            6 => 'upload_group',
            7 => 'upload_notice',
            8 => 'upload_page',
            9 => 'upload_poll',
            10 => 'upload_wiki',
            11 => 'user_badges_showone',
            12 => 'userpoints_post__undo_points_on_delete',
            13 => 'userpoints_post_blog',
            14 => 'userpoints_post_comment',
            15 => 'userpoints_post_discussion',
            16 => 'userpoints_post_document',
            17 => 'userpoints_post_event',
            18 => 'userpoints_post_group',
            19 => 'userpoints_post_page',
            20 => 'userpoints_post_poll',
            21 => 'userpoints_post_wiki',
            22 => 'userpoints_user_picture',
          ),
          'views' => 
          array (
            0 => 'most_active_users',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Reputation',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_seo' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_seo/commons_seo.module',
      'name' => 'commons_seo',
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
          0 => 'features',
          1 => 'path',
          2 => 'pathauto',
          3 => 'strongarm',
        ),
        'description' => 'Provide functionality to improve search indexing, URL structure, etc',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'user_permission' => 
          array (
            0 => 'administer pathauto',
          ),
          'variable' => 
          array (
            0 => 'pathauto_node_blog_pattern',
            1 => 'pathauto_node_discussion_pattern',
            2 => 'pathauto_node_document_pattern',
            3 => 'pathauto_node_event_pattern',
            4 => 'pathauto_node_group_pattern',
            5 => 'pathauto_node_notice_pattern',
            6 => 'pathauto_node_page_pattern',
            7 => 'pathauto_node_poll_pattern',
            8 => 'pathauto_node_wiki_pattern',
            9 => 'pathauto_taxonomy_2_pattern',
            10 => 'pathauto_tracker_pattern',
            11 => 'pathauto_user_pattern',
          ),
        ),
        'name' => 'Commons SEO',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'commons_wiki' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/modules/features/commons_wiki/commons_wiki.module',
      'name' => 'commons_wiki',
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
          0 => 'comment',
          1 => 'commons_core',
          2 => 'diff',
          3 => 'editablefields',
          4 => 'features',
          5 => 'fieldgroup',
          6 => 'freelinking',
          7 => 'imagefield',
          8 => 'menu',
          9 => 'og_views',
          10 => 'optionwidgets',
          11 => 'search',
          12 => 'strongarm',
          13 => 'taxonomy',
          14 => 'text',
          15 => 'views',
          16 => 'wikitools',
        ),
        'description' => 'Provide a wiki for groups inside Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'wiki-field_content_images',
            1 => 'wiki-field_featured_content',
            2 => 'wiki-field_group_sticky',
          ),
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'wiki-group_images',
            1 => 'wiki-group_promote_content',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:content/wikis',
          ),
          'node' => 
          array (
            0 => 'wiki',
          ),
          'user_permission' => 
          array (
            0 => 'access freelinking list',
            1 => 'administer freelinking',
            2 => 'create wiki content',
            3 => 'delete any wiki content',
            4 => 'delete own wiki content',
            5 => 'edit any wiki content',
            6 => 'edit own wiki content',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_wiki',
            1 => 'comment_controls_wiki',
            2 => 'comment_default_mode_wiki',
            3 => 'comment_default_order_wiki',
            4 => 'comment_default_per_page_wiki',
            5 => 'comment_form_location_wiki',
            6 => 'comment_preview_wiki',
            7 => 'comment_subject_field_wiki',
            8 => 'comment_wiki',
            9 => 'content_extra_weights_wiki',
            10 => 'freelinking_camelcase',
            11 => 'freelinking_nodetype',
            12 => 'freelinking_notfound',
            13 => 'freelinking_onceonly',
            14 => 'freelinking_restriction',
            15 => 'node_options_wiki',
            16 => 'og_content_type_usage_wiki',
            17 => 'wikitools_404_type',
            18 => 'wikitools_disallowed_characters',
            19 => 'wikitools_main_page_title',
            20 => 'wikitools_node_types',
            21 => 'wikitools_options',
            22 => 'wikitools_path',
            23 => 'wikitools_subpages',
            24 => 'wikitools_subpages_handling',
          ),
          'views' => 
          array (
            0 => 'content_global_wikis',
            1 => 'og_tab_wikis',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Wiki',
        'package' => 'Features',
        'spaces' => 
        array (
          'types' => 
          array (
            0 => 'og',
          ),
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/admin_menu/admin_menu.module',
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
        'version' => '6.x-1.6',
        'project' => 'admin_menu',
        'datestamp' => '1283512306',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'admin_menu',
      'version' => '6.x-1.6',
    ),
    'jquery_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/jquery_ui/jquery_ui.module',
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
        'version' => '6.x-1.4',
        'project' => 'jquery_ui',
        'datestamp' => '1284001909',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_ui',
      'version' => '6.x-1.4',
    ),
    'link' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/sites/all/modules/contrib/link/link.module',
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
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
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
        'version' => '6.x-1.5',
        'project' => 'pathauto',
        'datestamp' => '1286469664',
        'php' => '4.3.5',
      ),
      'project' => 'pathauto',
      'version' => '6.x-1.5',
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
      'schema_version' => '6002',
      'weight' => '5',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ajax_load',
          1 => 'chart',
          2 => 'comment',
          3 => 'contact',
          4 => 'content',
          5 => 'content_permissions',
          6 => 'context',
          7 => 'context_og',
          8 => 'ctools',
          9 => 'editablefields',
          10 => 'features',
          11 => 'fieldgroup',
          12 => 'flag',
          13 => 'flag_heartbeat',
          14 => 'friendlist_activity',
          15 => 'heartbeat',
          16 => 'heartbeat_views',
          17 => 'hrules',
          18 => 'imageapi',
          19 => 'imageapi_gd',
          20 => 'imagecache',
          21 => 'imagecache_canvasactions',
          22 => 'imagecache_profiles',
          23 => 'imagefield',
          24 => 'insert',
          25 => 'link',
          26 => 'menu',
          27 => 'node',
          28 => 'og',
          29 => 'og_access',
          30 => 'og_activity',
          31 => 'og_statistics',
          32 => 'og_views',
          33 => 'optionwidgets',
          34 => 'page_manager',
          35 => 'panels',
          36 => 'path',
          37 => 'php',
          38 => 'profile',
          39 => 'quant',
          40 => 'rules',
          41 => 'search',
          42 => 'shoutbox',
          43 => 'shoutbox_group',
          44 => 'skinr',
          45 => 'strongarm',
          46 => 'tagadelic',
          47 => 'tagadelic_views',
          48 => 'taxonomy',
          49 => 'text',
          50 => 'token',
          51 => 'tracker',
          52 => 'user',
          53 => 'user_relationship_blocks',
          54 => 'user_relationship_elaborations',
          55 => 'user_relationship_mailer',
          56 => 'user_relationship_views',
          57 => 'user_relationships_api',
          58 => 'user_relationships_rules',
          59 => 'user_terms',
          60 => 'views',
          61 => 'views_bulk_operations',
          62 => 'views_content',
          63 => 'wysiwyg',
          64 => 'wysiwyg_filter',
        ),
        'description' => 'The main components of Drupal Commons',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'group-field_featured_group',
            1 => 'group-field_group_image',
            2 => 'group-field_grouplink',
            3 => 'notice-field_content_images',
          ),
          'context' => 
          array (
            0 => 'context_ui-content-global_content',
            1 => 'context_ui-global-global',
            2 => 'context_ui-group-group',
            3 => 'context_ui-profile-profile',
            4 => 'context_ui-users-user_browser',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'page_manager:pages_default:1',
            2 => 'strongarm:strongarm:1',
          ),
          'fieldgroup' => 
          array (
            0 => 'group-group_attributes',
            1 => 'group-group_promote_content',
            2 => 'notice-group_images',
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
            3 => 'group_images_showcase',
            4 => 'group_images_thumb',
            5 => 'member_list_image',
            6 => 'profile_pictures',
            7 => 'user_picture_meta',
          ),
          'menu_links' => 
          array (
            0 => 'primary-links:analytics',
            1 => 'primary-links:bookmarks',
            2 => 'primary-links:community',
            3 => 'primary-links:groups',
            4 => 'primary-links:groups/my',
            5 => 'primary-links:mycontent',
            6 => 'primary-links:myprofile',
            7 => 'primary-links:relationships',
            8 => 'primary-links:user',
            9 => 'primary-links:users',
          ),
          'node' => 
          array (
            0 => 'group',
            1 => 'notice',
            2 => 'page',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view_panel_context',
            1 => 'user_view_panel_context',
          ),
          'rules_categories' => 
          array (
            0 => 'commons_core',
          ),
          'user_permission' => 
          array (
            0 => 'access administration pages',
            1 => 'access all views',
            2 => 'access comments',
            3 => 'access content',
            4 => 'access site reports',
            5 => 'access user profiles',
            6 => 'administer actions',
            7 => 'administer advanced pane settings',
            8 => 'administer blocks',
            9 => 'administer comments',
            10 => 'administer content types',
            11 => 'administer features',
            12 => 'administer files',
            13 => 'administer filters',
            14 => 'administer flags',
            15 => 'administer imageapi',
            16 => 'administer imagecache',
            17 => 'administer menu',
            18 => 'administer nodes',
            19 => 'administer organic groups',
            20 => 'administer page manager',
            21 => 'administer pane access',
            22 => 'administer pane visibility',
            23 => 'administer panels layouts',
            24 => 'administer permissions',
            25 => 'administer quant',
            26 => 'administer search',
            27 => 'administer shoutbox',
            28 => 'administer shoutbox_group',
            29 => 'administer site configuration',
            30 => 'administer site-wide contact form',
            31 => 'administer skinr',
            32 => 'administer taxonomy',
            33 => 'administer url aliases',
            34 => 'administer user relationships',
            35 => 'administer users',
            36 => 'administer views',
            37 => 'can have relationships',
            38 => 'change own username',
            39 => 'configure heartbeat',
            40 => 'configure heartbeat messages',
            41 => 'create group content',
            42 => 'create notice content',
            43 => 'create page content',
            44 => 'delete any group content',
            45 => 'delete any notice content',
            46 => 'delete any page content',
            47 => 'delete heartbeat activity logs',
            48 => 'delete own group content',
            49 => 'delete own heartbeat activity logs',
            50 => 'delete own notice content',
            51 => 'delete own page content',
            52 => 'delete own shouts',
            53 => 'delete revisions',
            54 => 'edit any group content',
            55 => 'edit any notice content',
            56 => 'edit any page content',
            57 => 'edit field_content_images',
            58 => 'edit field_featured_content',
            59 => 'edit field_featured_group',
            60 => 'edit field_group_image',
            61 => 'edit field_group_sticky',
            62 => 'edit field_grouplink',
            63 => 'edit own group content',
            64 => 'edit own notice content',
            65 => 'edit own page content',
            66 => 'edit own shouts',
            67 => 'flush imagecache',
            68 => 'maintain own activity',
            69 => 'maintain own relationships',
            70 => 'manage features',
            71 => 'moderate shoutbox',
            72 => 'post comments',
            73 => 'post comments without approval',
            74 => 'post shouts',
            75 => 'post shouts in all groups',
            76 => 'post shouts without approval',
            77 => 'revert revisions',
            78 => 'search content',
            79 => 'select different theme',
            80 => 'use PHP for block visibility',
            81 => 'use advanced search',
            82 => 'view analytics page',
            83 => 'view content rss feeds',
            84 => 'view field_content_images',
            85 => 'view field_featured_content',
            86 => 'view field_featured_group',
            87 => 'view field_group_image',
            88 => 'view field_group_sticky',
            89 => 'view field_grouplink',
            90 => 'view group content rss feeds',
            91 => 'view heartbeat messages',
            92 => 'view imagecache Featured',
            93 => 'view imagecache Small',
            94 => 'view imagecache group_images',
            95 => 'view imagecache group_images_showcase',
            96 => 'view imagecache group_images_thumb',
            97 => 'view imagecache member_list_image',
            98 => 'view imagecache profile_pictures',
            99 => 'view imagecache user_picture_meta',
            100 => 'view personal heartbeat activity',
            101 => 'view revisions',
            102 => 'view shouts',
            103 => 'view user relationships',
          ),
          'user_role' => 
          array (
            0 => 'community manager',
            1 => 'content manager',
            2 => 'site admin',
          ),
          'variable' => 
          array (
            0 => 'comment_default_order_notice',
            1 => 'comment_group',
            2 => 'comment_preview_notice',
            3 => 'content_extra_weights_group',
            4 => 'content_extra_weights_notice',
            5 => 'date_first_day',
            6 => 'date_format_long',
            7 => 'date_format_medium',
            8 => 'date_format_short',
            9 => 'heartbeat_access_types',
            10 => 'heartbeat_relations_api',
            11 => 'heartbeat_show_user_profile_messages_privateheartbeat',
            12 => 'node_options_forum',
            13 => 'node_options_group',
            14 => 'node_options_notice',
            15 => 'node_options_page',
            16 => 'og_audience_required',
            17 => 'og_content_type_usage_group',
            18 => 'og_content_type_usage_notice',
            19 => 'og_content_type_usage_page',
            20 => 'og_home_page_view',
            21 => 'og_private_groups',
            22 => 'og_visibility',
            23 => 'tagadelic_block_tags_2',
            24 => 'tagadelic_sort_order',
            25 => 'tagging_inject_2',
            26 => 'tagging_show_suggestion_example',
            27 => 'theme_settings',
            28 => 'user_picture_dimensions',
            29 => 'user_picture_imagecache_comments',
            30 => 'user_picture_imagecache_profiles',
            31 => 'user_picture_imagecache_profiles_default',
            32 => 'user_picture_path',
            33 => 'user_pictures',
            34 => 'user_terms_group_terms',
            35 => 'user_terms_group_title',
            36 => 'user_terms_profile_path',
            37 => 'user_terms_vocabs',
            38 => 'wysiwyg_filter_styles_border-1_1',
            39 => 'wysiwyg_filter_styles_border-2_1',
            40 => 'wysiwyg_filter_styles_dimension_1',
            41 => 'wysiwyg_filter_styles_layout_1',
            42 => 'wysiwyg_filter_styles_text_1',
            43 => 'wysiwyg_filter_valid_elements_parsed_1',
            44 => 'wysiwyg_filter_valid_elements_raw_1',
          ),
          'views' => 
          array (
            0 => 'my_recent_items',
            1 => 'my_unread_items',
            2 => 'newest_users',
            3 => 'og_admins_faces',
            4 => 'og_all',
            5 => 'og_content_tracker',
            6 => 'og_featured',
            7 => 'og_members_custom_block',
            8 => 'og_most_active',
            9 => 'og_my_content',
            10 => 'og_my_groups',
            11 => 'og_profile_user_groups',
            12 => 'og_tag_cloud',
            13 => 'recent_content_all',
            14 => 'recent_featured',
            15 => 'recent_featured_stream',
            16 => 'recent_notices',
            17 => 'tag_cloud',
            18 => 'user_directory',
            19 => 'user_meta',
            20 => 'users_online',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Commons Core',
        'package' => 'Features',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
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
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
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
        'description' => 'This widget is replacing the default Drupal-Tagging-Interface with a more visual driven one, to make tagging even easier. (by <a href="http://kontextwork.de"KontextWork</a>)',
        'package' => 'Drupal Wiki',
        'version' => '6.x-2.5',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'tagging',
        'datestamp' => '1287311492',
        'php' => '4.3.5',
      ),
      'project' => 'tagging',
      'version' => '6.x-2.5',
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
        'version' => '6.x-1.15',
        'project' => 'token',
        'datestamp' => '1286469963',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.15',
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
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
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
        'version' => '6.x-1.0',
        'project' => 'insert',
        'datestamp' => '1295569372',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'insert',
      'version' => '6.x-1.0',
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
        'version' => '6.x-1.0',
        'project' => 'features',
        'datestamp' => '1282573607',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.0',
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
        'php' => '5.1',
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
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
      'schema_version' => '410',
      'weight' => '50',
      'info' => 
      array (
        'package' => 'Heartbeat',
        'project' => 'heartbeat',
        'name' => 'Heartbeat activity',
        'description' => 'Logs user activity when certain events occur, triggering actions. The logged data is accessable through heartbeat displays.',
        'core' => '6.x',
        'version' => '6.x-4.11',
        'datestamp' => '1295571920',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
        'version' => '6.x-4.11',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
        'version' => '6.x-4.11',
        'datestamp' => '1295571920',
        'php' => '4.3.5',
      ),
      'project' => 'heartbeat',
      'version' => '6.x-4.11',
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
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
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
        'version' => '6.x-2.3',
        'project' => 'notifications',
        'datestamp' => '1287647170',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.3',
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
  ),
  'themes' => 
  array (
    'acquia_commons' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/themes/acquia_commons/acquia_commons.info',
      'name' => 'acquia_commons',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
    'bluemarine' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/bluemarine/bluemarine.info',
      'name' => 'bluemarine',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bluemarine',
        'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
        'version' => '6.20',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'celadon' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/celadon/celadon.info',
      'name' => 'celadon',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Celadon',
        'description' => 'Fusion subtheme based on a WordPress theme from <a href="http://www.themesboutique.com/theme/celadon" target="_blank">Themes Boutique</a>. Drupal port provided by <a href="http://www.sandianstudio.com/" target="_blank">Sandian Studio</a>.',
        'base theme' => 'fusion_core',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/celadon-style.css',
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
          'theme_grid' => 'grid16-960',
          'theme_grid_options' => 
          array (
            0 => 'grid16-960',
            1 => 'grid16-fluid',
          ),
          'fluid_grid_width' => 'fluid-100',
          'theme_font_size' => 'font-size-12',
          'sidebar_layout' => 'sidebars-both-last',
          'sidebar_first_width' => '5',
          'sidebar_last_width' => '5',
        ),
        'skinr' => 
        array (
          'options' => 
          array (
            'inherit_skins' => true,
          ),
          'sidebar-block-color' => 
          array (
            'title' => 'Sidebar block color',
            'type' => 'select',
            'description' => 'Select a color to use for the sidebar block.',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Blue',
                'class' => 'sidebar-block-blue',
              ),
              2 => 
              array (
                'label' => 'Green',
                'class' => 'sidebar-block-green',
              ),
              3 => 
              array (
                'label' => 'Red',
                'class' => 'sidebar-block-red',
              ),
              4 => 
              array (
                'label' => 'Orange',
                'class' => 'sidebar-block-orange',
              ),
              5 => 
              array (
                'label' => 'Purple',
                'class' => 'sidebar-block-purple',
              ),
              6 => 
              array (
                'label' => 'Black',
                'class' => 'sidebar-block-black',
              ),
            ),
          ),
          'blogstyle-color' => 
          array (
            'title' => 'Blog style color',
            'type' => 'select',
            'description' => 'Select a color to use for the blog style.',
            'features' => 
            array (
              0 => 'node',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Blue',
                'class' => 'blogstyle-blue',
              ),
              2 => 
              array (
                'label' => 'Green',
                'class' => 'blogstyle-green',
              ),
              3 => 
              array (
                'label' => 'Red',
                'class' => 'blogstyle-red',
              ),
              4 => 
              array (
                'label' => 'Orange',
                'class' => 'blogstyle-orange',
              ),
              5 => 
              array (
                'label' => 'Purple',
                'class' => 'blogstyle-purple',
              ),
              6 => 
              array (
                'label' => 'Black',
                'class' => 'blogstyle-black',
              ),
            ),
          ),
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'celadon',
        'datestamp' => '1278833666',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'celadon',
      'version' => '6.x-1.x-dev',
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
      'schema_version' => '-1',
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
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'fusion_core' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/profiles/drupal_commons/themes/fusion_core/fusion_core.info',
      'name' => 'fusion_core',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
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
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal_commons/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.20',
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
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
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
        'version' => '6.20',
        'core' => '6.x',
        'base theme' => 'chameleon',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Minnelli',
        'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
        'version' => '6.20',
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
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
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
      'schema_version' => '-1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pushbutton',
        'description' => 'Tabled, multi-column theme in blue and orange tones.',
        'version' => '6.20',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
  ),
);
$options['site_url'] = 'knesset.heschel.org';
$options['site_id'] = '439';
$options['client_email'] = 'irene@irenemeisel.net';
