<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'BnN7MBbpbY';
$options['db_name'] = 'brightbrainhedge';
$options['db_user'] = 'brightbrainhedge';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.23',
      'description' => 'This platform is running Drupal 7.23',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/profiles/standard/standard.profile',
      'project' => 'drupal',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.23',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'aggregator_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/aggregator/tests/aggregator_test.module',
      'name' => 'aggregator_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator module tests',
        'description' => 'Support module for aggregator related testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'block' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'block_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/block/tests/block_test.module',
      'name' => 'block_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test',
        'description' => 'Provides test blocks.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'blog' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'book' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'color' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'comment' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'contact' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'contextual' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'dashboard' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.23',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'dblog' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'field' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'list' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'list_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/modules/list/tests/list_test.module',
      'name' => 'list_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List test',
        'description' => 'Support module for the List module tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'number' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'options' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'text' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'field_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field/tests/field_test.module',
      'name' => 'field_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field API Test',
        'description' => 'Support module for the Field API tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'files' => 
        array (
          0 => 'field_test.entity.inc',
        ),
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'field_ui' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'file' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'file_module_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/file/tests/file_module_test.module',
      'name' => 'file_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Provides hooks for testing File module functionality.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'filter' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'forum' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'help' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'image' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'image_module_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/image/tests/image_module_test.module',
      'name' => 'image_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Provides hook implementations for testing Image module functionality.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_module_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'locale' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'locale_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/locale/tests/locale_test.module',
      'name' => 'locale_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale Test',
        'description' => 'Support module for the locale layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'menu' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'node' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7013',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'node_access_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/node/tests/node_access_test.module',
      'name' => 'node_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module access tests',
        'description' => 'Support module for node permission testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'node_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/node/tests/node_test.module',
      'name' => 'node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module tests',
        'description' => 'Support module for node related testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'node_test_exception' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/node/tests/node_test_exception.module',
      'name' => 'node_test_exception',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module exception tests',
        'description' => 'Support module for node related exception testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'openid' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.23',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'openid_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/openid/tests/openid_test.module',
      'name' => 'openid_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID dummy provider',
        'description' => 'OpenID provider used for testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'overlay' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'path' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'php' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'poll' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'profile' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile.test',
        ),
        'configure' => 'admin/config/people/profile',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'rdf' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'rdf_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/rdf/tests/rdf_test.module',
      'name' => 'rdf_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF module tests',
        'description' => 'Support module for RDF module testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'search' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'search_embedded_form' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/search/tests/search_embedded_form.module',
      'name' => 'search_embedded_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search embedded form',
        'description' => 'Support module for search module testing of embedded forms.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'search_extra_type' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/search/tests/search_extra_type.module',
      'name' => 'search_extra_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test search type',
        'description' => 'Support module for search module testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'shortcut' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'simpletest' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/pager.test',
          22 => 'tests/password.test',
          23 => 'tests/path.test',
          24 => 'tests/registry.test',
          25 => 'tests/schema.test',
          26 => 'tests/session.test',
          27 => 'tests/tablesort.test',
          28 => 'tests/theme.test',
          29 => 'tests/unicode.test',
          30 => 'tests/update.test',
          31 => 'tests/xmlrpc.test',
          32 => 'tests/upgrade/upgrade.test',
          33 => 'tests/upgrade/upgrade.comment.test',
          34 => 'tests/upgrade/upgrade.filter.test',
          35 => 'tests/upgrade/upgrade.forum.test',
          36 => 'tests/upgrade/upgrade.locale.test',
          37 => 'tests/upgrade/upgrade.menu.test',
          38 => 'tests/upgrade/upgrade.node.test',
          39 => 'tests/upgrade/upgrade.taxonomy.test',
          40 => 'tests/upgrade/upgrade.trigger.test',
          41 => 'tests/upgrade/upgrade.translatable.test',
          42 => 'tests/upgrade/upgrade.upload.test',
          43 => 'tests/upgrade/upgrade.user.test',
          44 => 'tests/upgrade/update.aggregator.test',
          45 => 'tests/upgrade/update.trigger.test',
          46 => 'tests/upgrade/update.field.test',
          47 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'actions_loop_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/actions_loop_test.module',
      'name' => 'actions_loop_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions loop test',
        'description' => 'Support module for action loop testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'ajax_forms_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/ajax_forms_test.module',
      'name' => 'ajax_forms_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX form test mock module',
        'description' => 'Test for AJAX form calls.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'ajax_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/ajax_test.module',
      'name' => 'ajax_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Test',
        'description' => 'Support module for AJAX framework tests.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'batch_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/batch_test.module',
      'name' => 'batch_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Batch API test',
        'description' => 'Support module for Batch API tests.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'common_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/common_test.module',
      'name' => 'common_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test',
        'description' => 'Support module for Common tests.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'common_test.css',
          ),
          'print' => 
          array (
            0 => 'common_test.print.css',
          ),
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'common_test_cron_helper' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/common_test_cron_helper.module',
      'name' => 'common_test_cron_helper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test Cron Helper',
        'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'database_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/database_test.module',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Test',
        'description' => 'Support module for Database layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'drupal_system_listing_compatible_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
      'name' => 'drupal_system_listing_compatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing compatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'drupal_system_listing_incompatible_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
      'name' => 'drupal_system_listing_incompatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing incompatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'entity_cache_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/entity_cache_test.module',
      'name' => 'entity_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test',
        'description' => 'Support module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_cache_test_dependency',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'entity_cache_test_dependency' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/entity_cache_test_dependency.module',
      'name' => 'entity_cache_test_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test dependency',
        'description' => 'Support dependency module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'entity_crud_hook_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/entity_crud_hook_test.module',
      'name' => 'entity_crud_hook_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD Hooks Test',
        'description' => 'Support module for CRUD hook tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'entity_query_access_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/entity_query_access_test.module',
      'name' => 'entity_query_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity query access test',
        'description' => 'Support module for checking entity query results.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'error_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/error_test.module',
      'name' => 'error_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Error test',
        'description' => 'Support module for error and exception testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'file_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/file_test.module',
      'name' => 'file_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Support module for file handling tests.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'filter_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/filter_test.module',
      'name' => 'filter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter test module',
        'description' => 'Tests filter hooks and functions.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'form_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/form_test.module',
      'name' => 'form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FormAPI Test',
        'description' => 'Support module for Form API tests.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'image_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/image_test.module',
      'name' => 'image_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Support module for image toolkit tests.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'menu_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/menu_test.module',
      'name' => 'menu_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook menu tests',
        'description' => 'Support module for menu hook testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'module_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/module_test.module',
      'name' => 'module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module test',
        'description' => 'Support module for module system testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'path_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/path_test.module',
      'name' => 'path_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook path tests',
        'description' => 'Support module for path hook testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'psr_0_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/psr_0_test/psr_0_test.module',
      'name' => 'psr_0_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PSR-0 Test cases',
        'description' => 'Test classes to be discovered by simpletest.',
        'core' => '7.x',
        'hidden' => true,
        'package' => 'Testing',
        'version' => '7.23',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'requirements1_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/requirements1_test.module',
      'name' => 'requirements1_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 1 Test',
        'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'requirements2_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/requirements2_test.module',
      'name' => 'requirements2_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 2 Test',
        'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
        'dependencies' => 
        array (
          0 => 'requirements1_test',
          1 => 'comment',
        ),
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'session_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/session_test.module',
      'name' => 'session_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session test',
        'description' => 'Support module for session data testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'system_dependencies_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/system_dependencies_test.module',
      'name' => 'system_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System dependency test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => '_missing_dependency',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'system_incompatible_core_version_dependencies_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
      'name' => 'system_incompatible_core_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_core_version_test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'system_incompatible_core_version_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/system_incompatible_core_version_test.module',
      'name' => 'system_incompatible_core_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '5.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'system_incompatible_module_version_dependencies_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
      'name' => 'system_incompatible_module_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_module_version_test (>2.0)',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'system_incompatible_module_version_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/system_incompatible_module_version_test.module',
      'name' => 'system_incompatible_module_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'system_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/system_test.module',
      'name' => 'system_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System test',
        'description' => 'Support module for system testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'taxonomy_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/taxonomy_test.module',
      'name' => 'taxonomy_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy test module',
        'description' => '"Tests functions and hooks not used in core".',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'theme_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/theme_test.module',
      'name' => 'theme_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme test',
        'description' => 'Support module for theme system testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'update_script_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/update_script_test.module',
      'name' => 'update_script_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update script test',
        'description' => 'Support module for update script testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'update_test_1' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/update_test_1.module',
      'name' => 'update_test_1',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'update_test_2' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/update_test_2.module',
      'name' => 'update_test_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'update_test_3' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/update_test_3.module',
      'name' => 'update_test_3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'url_alter_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/url_alter_test.module',
      'name' => 'url_alter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Url_alter tests',
        'description' => 'A support modules for url_alter hook testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'xmlrpc_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/simpletest/tests/xmlrpc_test.module',
      'name' => 'xmlrpc_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML-RPC Test',
        'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'statistics' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'syslog' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'system' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7078',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'taxonomy' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'toolbar' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.23',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'tracker' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'translation_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/translation/tests/translation_test.module',
      'name' => 'translation_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Translation Test',
        'description' => 'Support module for the content translation tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.23',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'translation' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'trigger_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/trigger/tests/trigger_test.module',
      'name' => 'trigger_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger Test',
        'description' => 'Support module for Trigger tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.23',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'trigger' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'aaa_update_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/update/tests/aaa_update_test.module',
      'name' => 'aaa_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AAA Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.23',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'bbb_update_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/update/tests/bbb_update_test.module',
      'name' => 'bbb_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BBB Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.23',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'ccc_update_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/update/tests/ccc_update_test.module',
      'name' => 'ccc_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCC Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.23',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'update_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/update/tests/update_test.module',
      'name' => 'update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'update' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.23',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'user_form_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/user/tests/user_form_test.module',
      'name' => 'user_form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User module form tests',
        'description' => 'Support module for user form testing.',
        'package' => 'Testing',
        'version' => '7.23',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'user' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'standard' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/profiles/standard/standard.profile',
      'name' => 'standard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.23',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'acl' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/acl/acl.module',
      'name' => 'acl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ACL',
        'description' => 'Access control list API. Has no features on its own.',
        'core' => '7.x',
        'package' => 'Access control',
        'version' => '7.x-1.0',
        'project' => 'acl',
        'datestamp' => '1322308236',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'acl',
      'version' => '7.x-1.0',
    ),
    'acl_node_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/acl/tests/acl_node_test.module',
      'name' => 'acl_node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ACL Node module tests',
        'description' => 'Support module for ACL node related testing.',
        'package' => 'Testing',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'hidden' => true,
        'files' => 
        array (
          0 => 'acl_node_test.module',
        ),
        'project' => 'acl',
        'datestamp' => '1322308236',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'acl',
      'version' => '7.x-1.0',
    ),
    'admin_devel' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc4',
        'project' => 'admin_menu',
        'datestamp' => '1359651687',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc4',
    ),
    'admin_menu' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc4',
        'project' => 'admin_menu',
        'datestamp' => '1359651687',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc4',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc4',
        'project' => 'admin_menu',
        'datestamp' => '1359651687',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc4',
    ),
    'autocomplete_deluxe' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/autocomplete_deluxe/autocomplete_deluxe.module',
      'name' => 'autocomplete_deluxe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Autocomplete Deluxe',
        'description' => 'Enhanced autocomplete using Jquery UI autocomplete.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'autocomplete_deluxe.module',
        ),
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'autocomplete_deluxe',
        'datestamp' => '1375695669',
        'php' => '5.2.4',
      ),
      'project' => 'autocomplete_deluxe',
      'version' => '7.x-2.0-beta3',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7204',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'backup_migrate.module',
          1 => 'backup_migrate.install',
          2 => 'includes/destinations.inc',
          3 => 'includes/profiles.inc',
          4 => 'includes/schedules.inc',
        ),
        'configure' => 'admin/config/system/backup_migrate',
        'version' => '7.x-2.7',
        'project' => 'backup_migrate',
        'datestamp' => '1368729920',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'backup_migrate',
      'version' => '7.x-2.7',
    ),
    'blockcache_alter' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/blockcache_alter/blockcache_alter.module',
      'name' => 'blockcache_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Cache Alter',
        'description' => 'Alter the cache settings per block.',
        'core' => '7.x',
        'package' => 'Caching',
        'files' => 
        array (
          0 => 'blockcache_alter.module',
          1 => 'blockcache_alter.install',
        ),
        'version' => '7.x-1.0',
        'project' => 'blockcache_alter',
        'datestamp' => '1294226749',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'blockcache_alter',
      'version' => '7.x-1.0',
    ),
    'block_class' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/block_class/block_class.module',
      'name' => 'block_class',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Class',
        'description' => 'Allows assigning CSS classes to blocks.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'files' => 
        array (
          0 => 'block_class.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'context',
        ),
        'version' => '7.x-2.1',
        'project' => 'block_class',
        'datestamp' => '1377197769',
        'php' => '5.2.4',
      ),
      'project' => 'block_class',
      'version' => '7.x-2.1',
    ),
    'ckeditor' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ckeditor/ckeditor.module',
      'name' => 'ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CKEditor',
        'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/content/ckeditor',
        'version' => '7.x-1.13',
        'project' => 'ckeditor',
        'datestamp' => '1365759619',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ckeditor',
      'version' => '7.x-1.13',
    ),
    'ckeditor_link' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ckeditor_link/ckeditor_link.module',
      'name' => 'ckeditor_link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'CKEditor Link',
        'description' => 'Easily create links to Drupal internal paths through CKEditor.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/ckeditor_link',
        'version' => '7.x-2.3',
        'project' => 'ckeditor_link',
        'datestamp' => '1358413212',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ckeditor_link',
      'version' => '7.x-2.3',
    ),
    'context' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/context.test',
          1 => 'tests/context.conditions.test',
          2 => 'tests/context.reactions.test',
        ),
        'version' => '7.x-3.0-beta7',
        'project' => 'context',
        'datestamp' => '1375065368',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.0-beta7',
    ),
    'context_layouts' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/context_layouts_reaction_block.inc',
        ),
        'version' => '7.x-3.0-beta7',
        'project' => 'context',
        'datestamp' => '1375065368',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.0-beta7',
    ),
    'context_ui' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'core' => '7.x',
        'configure' => 'admin/structure/context',
        'files' => 
        array (
          0 => 'context.module',
          1 => 'tests/context_ui.test',
        ),
        'version' => '7.x-3.0-beta7',
        'project' => 'context',
        'datestamp' => '1375065368',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.0-beta7',
    ),
    'bulk_export' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6008',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
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
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'page_manager' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'stylizer' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_export_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/tests/ctools_export_test/ctools_export_test.module',
      'name' => 'ctools_export_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CTools export test',
        'description' => 'CTools export test module',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'hidden' => true,
        'files' => 
        array (
          0 => 'ctools_export.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_plugin_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/tests/ctools_plugin_test.module',
      'name' => 'ctools_plugin_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools plugins test',
        'description' => 'Provides hooks for testing ctools plugins.',
        'package' => 'Chaos tool suite',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'ctools.plugins.test',
          1 => 'object_cache.test',
          2 => 'css.test',
          3 => 'context.test',
          4 => 'math_expression.test',
          5 => 'math_expression_stack.test',
        ),
        'hidden' => true,
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'views_content' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'date' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_api.test',
          1 => 'tests/date.test',
          2 => 'tests/date_field.test',
          3 => 'tests/date_validation.test',
          4 => 'tests/date_timezone.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_all_day' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_all_day/date_all_day.module',
      'name' => 'date_all_day',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date All Day',
        'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_api' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_sql.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_context' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
          1 => 'plugins/date_context_date_condition.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_migrate' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_migrate/date_migrate.module',
      'name' => 'date_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Migration',
        'description' => 'Provides support for importing into date fields with the Migrate module.',
        'core' => '7.x',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'migrate',
          1 => 'date',
        ),
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'date_migrate.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_repeat_field',
          3 => 'date_migrate',
          4 => 'features',
          5 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.6',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_popup' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_repeat' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
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
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_repeat.test',
          1 => 'tests/date_repeat_form.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_repeat_field/date_repeat_field.module',
      'name' => 'date_repeat_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat Field',
        'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
          2 => 'date_repeat',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date_repeat_field.css',
          ),
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_tools' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/tools',
        'files' => 
        array (
          0 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_views' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'includes/date_views_argument_handler.inc',
          1 => 'includes/date_views_argument_handler_simple.inc',
          2 => 'includes/date_views_filter_handler.inc',
          3 => 'includes/date_views_filter_handler_simple.inc',
          4 => 'includes/date_views.views_default.inc',
          5 => 'includes/date_views.views.inc',
          6 => 'includes/date_views_plugin_pager.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'devel' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7004',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'devel',
        'datestamp' => '1338940281',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.3',
    ),
    'devel_generate' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'devel',
        ),
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'version' => '7.x-1.3',
        'project' => 'devel',
        'datestamp' => '1338940281',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.3',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.3',
        'project' => 'devel',
        'datestamp' => '1338940281',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.3',
    ),
    'devel_themer' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/devel_themer/devel_themer.module',
      'name' => 'devel_themer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme developer',
        'description' => 'Essential theme API information for theme developers',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'devel',
          1 => 'simplehtmldom',
        ),
        'configure' => 'admin/config/development/devel_themer',
        'files' => 
        array (
          0 => 'devel_themer.module',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'devel_themer',
        'datestamp' => '1365209224',
        'php' => '5.2.4',
      ),
      'project' => 'devel_themer',
      'version' => '7.x-1.x-dev',
    ),
    'draggableviews' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/draggableviews/draggableviews.module',
      'name' => 'draggableviews',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Draggableviews',
        'description' => 'Makes Views draggable',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'entity',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'handlers/draggableviews_handler.inc',
          1 => 'handlers/draggableviews_handler_native.inc',
          2 => 'handlers/draggableviews_handler_fieldapi.inc',
          3 => 'views/draggableviews_handler_field_draggable.inc',
          4 => 'views/draggableviews_handler_sort.inc',
          5 => 'views/draggableviews_join_handler.inc',
          6 => 'test/draggableviews.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'draggableviews',
        'datestamp' => '1338282056',
        'php' => '5.2.4',
      ),
      'project' => 'draggableviews',
      'version' => '7.x-2.0',
    ),
    'draggableviews_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/draggableviews/test/draggableviews_test/draggableviews_test.module',
      'name' => 'draggableviews_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Draggableviews Test',
        'description' => 'Provides views for testing.',
        'dependencies' => 
        array (
          0 => 'draggableviews',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.x-2.0',
        'project' => 'draggableviews',
        'datestamp' => '1338282056',
        'php' => '5.2.4',
      ),
      'project' => 'draggableviews',
      'version' => '7.x-2.0',
    ),
    'email' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/email/email.module',
      'name' => 'email',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Email',
        'description' => 'Defines an email field type.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'email.migrate.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'email',
        'datestamp' => '1346254131',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'email',
      'version' => '7.x-1.2',
    ),
    'entity' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'entity',
        'datestamp' => '1376493705',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.2',
    ),
    'entity_token' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.2',
        'project' => 'entity',
        'datestamp' => '1376493705',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.2',
    ),
    'entity_feature' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/entity/tests/entity_feature.module',
      'name' => 'entity_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity feature module',
        'description' => 'Provides some entities in code.',
        'version' => '7.x-1.2',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_feature.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity_test',
        ),
        'hidden' => true,
        'project' => 'entity',
        'datestamp' => '1376493705',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.2',
    ),
    'entity_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/entity/tests/entity_test.module',
      'name' => 'entity_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD test module',
        'description' => 'Provides entity types based upon the CRUD API.',
        'version' => '7.x-1.2',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_test.module',
          1 => 'entity_test.install',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'hidden' => true,
        'project' => 'entity',
        'datestamp' => '1376493705',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.2',
    ),
    'entity_test_i18n' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/entity/tests/entity_test_i18n.module',
      'name' => 'entity_test_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity-test type translation',
        'description' => 'Allows translating entity-test types.',
        'dependencies' => 
        array (
          0 => 'entity_test',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.x-1.2',
        'project' => 'entity',
        'datestamp' => '1376493705',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.2',
    ),
    'entityreference' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/entityreference/entityreference.module',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference',
        'description' => 'Provides a field that can reference other entities.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'entityreference.migrate.inc',
          1 => 'plugins/selection/abstract.inc',
          2 => 'plugins/selection/views.inc',
          3 => 'plugins/behavior/abstract.inc',
          4 => 'views/entityreference_plugin_display.inc',
          5 => 'views/entityreference_plugin_style.inc',
          6 => 'views/entityreference_plugin_row_fields.inc',
          7 => 'tests/entityreference.handlers.test',
          8 => 'tests/entityreference.taxonomy.test',
          9 => 'tests/entityreference.admin.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'entityreference',
        'datestamp' => '1353230808',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference',
      'version' => '7.x-1.0',
    ),
    'entityreference_behavior_example' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
      'name' => 'entityreference_behavior_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference Behavior Example',
        'description' => 'Provides some example code for implementing Entity Reference behaviors.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entityreference',
        ),
        'version' => '7.x-1.0',
        'project' => 'entityreference',
        'datestamp' => '1353230808',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference',
      'version' => '7.x-1.0',
    ),
    'features' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'configure' => 'admin/structure/features/settings',
        'version' => '7.x-2.0-rc3',
        'project' => 'features',
        'datestamp' => '1377548845',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'features',
      'version' => '7.x-2.0-rc3',
    ),
    'features_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/features/tests/features_test/features_test.module',
      'name' => 'features_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Features Tests',
        'description' => 'Test module for Features testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'php' => '5.2.0',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'image',
          2 => 'strongarm',
          3 => 'taxonomy',
          4 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_features_test',
          ),
          'field_instance' => 
          array (
            0 => 'node-features_test-field_features_test',
          ),
          'filter' => 
          array (
            0 => 'features_test',
          ),
          'image' => 
          array (
            0 => 'features_test',
          ),
          'node' => 
          array (
            0 => 'features_test',
          ),
          'taxonomy' => 
          array (
            0 => 'taxonomy_features_test',
          ),
          'user_permission' => 
          array (
            0 => 'create features_test content',
          ),
          'views_view' => 
          array (
            0 => 'features_test',
          ),
        ),
        'hidden' => '1',
        'version' => '7.x-2.0-rc3',
        'project' => 'features',
        'datestamp' => '1377548845',
      ),
      'project' => 'features',
      'version' => '7.x-2.0-rc3',
    ),
    'fences' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/fences/fences.module',
      'name' => 'fences',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fences',
        'description' => 'Configurable field wrappers',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'configure' => 'admin/config/content/fences',
        'version' => '7.x-1.0',
        'project' => 'fences',
        'datestamp' => '1335373578',
        'php' => '5.2.4',
      ),
      'project' => 'fences',
      'version' => '7.x-1.0',
    ),
    'field_collection' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/field_collection/field_collection.module',
      'name' => 'field_collection',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field collection',
        'description' => 'Provides a field collection field, to which any number of fields can be attached.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'files' => 
        array (
          0 => 'field_collection.test',
          1 => 'field_collection.info.inc',
          2 => 'views/field_collection_handler_relationship.inc',
        ),
        'configure' => 'admin/structure/field-collections',
        'package' => 'Fields',
        'version' => '7.x-1.0-beta5',
        'project' => 'field_collection',
        'datestamp' => '1356475963',
        'php' => '5.2.4',
      ),
      'project' => 'field_collection',
      'version' => '7.x-1.0-beta5',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
        'core' => '7.x',
        'package' => 'Statistics',
        'configure' => 'admin/config/system/googleanalytics',
        'files' => 
        array (
          0 => 'googleanalytics.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'google_analytics',
        'datestamp' => '1351810914',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'google_analytics',
      'version' => '7.x-1.3',
    ),
    'i18n' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n.module',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Internationalization',
        'description' => 'Extends Drupal support for multilingual features.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'variable',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_object.inc',
          1 => 'i18n.test',
        ),
        'configure' => 'admin/config/regional/i18n',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_block' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_block/i18n_block.module',
      'name' => 'i18n_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Block languages',
        'description' => 'Enables language selector for blocks and optional block translation.',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_block.inc',
          1 => 'i18n_block.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_contact' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_contact/i18n_contact.module',
      'name' => 'i18n_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact translation',
        'description' => 'Makes contact categories and replies available for translation.',
        'dependencies' => 
        array (
          0 => 'contact',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_field' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_field/i18n_field.module',
      'name' => 'i18n_field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field translation',
        'description' => 'Translate field properties',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_field.inc',
          1 => 'i18n_field.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_forum' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_forum/i18n_forum.module',
      'name' => 'i18n_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual forum',
        'description' => 'Enables multilingual forum, translates names and containers.',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'i18n_taxonomy',
          2 => 'i18n_node',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_forum.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_menu' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_menu/i18n_menu.module',
      'name' => 'i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Menu translation',
        'description' => 'Supports translatable custom menu items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'menu',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_menu.inc',
          1 => 'i18n_menu.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_node' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_node/i18n_node.module',
      'name' => 'i18n_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual content',
        'description' => 'Extended node options for multilingual content',
        'dependencies' => 
        array (
          0 => 'translation',
          1 => 'i18n',
          2 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/node',
        'files' => 
        array (
          0 => 'i18n_node.test',
          1 => 'i18n_node.variable.inc',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_path' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_path/i18n_path.module',
      'name' => 'i18n_path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Path translation',
        'description' => 'Define translations for generic paths',
        'dependencies' => 
        array (
          0 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_path.inc',
          1 => 'i18n_path.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_redirect' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_redirect/i18n_redirect.module',
      'name' => 'i18n_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation redirect',
        'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_select' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_select/i18n_select.module',
      'name' => 'i18n_select',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual select',
        'description' => 'API module for multilingual content selection',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/select',
        'files' => 
        array (
          0 => 'i18n_select.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_string' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_string/i18n_string.module',
      'name' => 'i18n_string',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'String translation',
        'description' => 'Provides support for translation of user defined strings.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_string.admin.inc',
          1 => 'i18n_string.inc',
          2 => 'i18n_string.test',
        ),
        'configure' => 'admin/config/regional/i18n/strings',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_sync' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_sync/i18n_sync.module',
      'name' => 'i18n_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Synchronize translations',
        'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_sync.module',
          1 => 'i18n_sync.install',
          2 => 'i18n_sync.module.inc',
          3 => 'i18n_sync.node.inc',
          4 => 'i18n_sync.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_taxonomy' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_taxonomy/i18n_taxonomy.module',
      'name' => 'i18n_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy translation',
        'description' => 'Enables multilingual taxonomy.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'i18n_string',
          2 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_taxonomy.inc',
          1 => 'i18n_taxonomy.pages.inc',
          2 => 'i18n_taxonomy.admin.inc',
          3 => 'i18n_taxonomy.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_translation' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_translation/i18n_translation.module',
      'name' => 'i18n_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation sets',
        'description' => 'Simple translation sets API for generic objects',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_translation.inc',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_user' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_user/i18n_user.module',
      'name' => 'i18n_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User mail translation',
        'description' => 'Translate emails sent from the User module.',
        'core' => '7.x',
        'package' => 'Multilingual - Internationalization',
        'dependencies' => 
        array (
          0 => 'i18n_variable',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_variable' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/i18n_variable/i18n_variable.module',
      'name' => 'i18n_variable',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7004',
      'weight' => '-900',
      'info' => 
      array (
        'name' => 'Variable translation',
        'description' => 'Multilingual variables that switch language depending on page language.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'variable_store (7.x-2.x)',
          2 => 'variable_realm (7.x-2.x)',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/variable',
        'files' => 
        array (
          0 => 'i18n_variable.class.inc',
          1 => 'i18n_variable.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/i18n/tests/i18n_test.module',
      'name' => 'i18n_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'imce' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce',
        'version' => '7.x-1.7',
        'project' => 'imce',
        'datestamp' => '1359476607',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'imce',
      'version' => '7.x-1.7',
    ),
    'jquery_update' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_update.module',
          1 => 'jquery_update.install',
        ),
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-2.3',
        'project' => 'jquery_update',
        'datestamp' => '1360375905',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'jquery_update',
      'version' => '7.x-2.3',
    ),
    'l10n_update' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/l10n_update/l10n_update.module',
      'name' => 'l10n_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Localization update',
        'description' => 'Provides automatic downloads and updates for translations.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'core' => '7.x',
        'package' => 'Multilingual',
        'files' => 
        array (
          0 => 'l10n_update.admin.inc',
          1 => 'l10n_update.api.php',
          2 => 'l10n_update.batch.inc',
          3 => 'l10n_update.check.inc',
          4 => 'l10n_update.drush.inc',
          5 => 'l10n_update.inc',
          6 => 'l10n_update.install',
          7 => 'l10n_update.locale.inc',
          8 => 'l10n_update.module',
          9 => 'l10n_update.parser.inc',
          10 => 'l10n_update.project.inc',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'l10n_update',
        'datestamp' => '1328563848',
        'php' => '5.2.4',
      ),
      'project' => 'l10n_update',
      'version' => '7.x-1.0-beta3',
    ),
    'libraries' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version-dependent and shared usage of external libraries.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/libraries.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'libraries',
        'datestamp' => '1362848412',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-2.1',
    ),
    'libraries_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/libraries/tests/libraries_test.module',
      'name' => 'libraries_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries test module',
        'description' => 'Tests library detection and loading.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'libraries',
        ),
        'hidden' => true,
        'version' => '7.x-2.1',
        'project' => 'libraries',
        'datestamp' => '1362848412',
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-2.1',
    ),
    'menu_attributes' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/menu_attributes/menu_attributes.module',
      'name' => 'menu_attributes',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Menu attributes',
        'description' => 'Allows administrators to specify custom attributes for menu items.',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/menu/settings',
        'files' => 
        array (
          0 => 'menu_attributes.test',
        ),
        'version' => '7.x-1.0-rc2',
        'project' => 'menu_attributes',
        'datestamp' => '1338541556',
        'php' => '5.2.4',
      ),
      'project' => 'menu_attributes',
      'version' => '7.x-1.0-rc2',
    ),
    'modernizr' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/modernizr/modernizr.module',
      'name' => 'modernizr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Modernizr',
        'description' => 'Modernizr integration for Drupal. Extends the library by providing two APIs: (1) for test management (2) for exposing Modernizr.load() to Drupal',
        'core' => '7.x',
        'package' => 'Frontend',
        'configure' => 'admin/config/development/modernizr',
        'files' => 
        array (
          0 => 'modernizr.module',
          1 => 'modernizr.install',
          2 => 'modernizr.admin.inc',
          3 => 'modernizr.args.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'modernizr',
        'datestamp' => '1368683711',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'modernizr',
      'version' => '7.x-3.1',
    ),
    'module_filter' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.js',
          2 => 'module_filter.module',
          3 => 'module_filter.admin.inc',
          4 => 'module_filter.theme.inc',
          5 => 'css/module_filter.css',
          6 => 'css/module_filter_tab.css',
          7 => 'js/module_filter.js',
          8 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-1.8',
        'project' => 'module_filter',
        'datestamp' => '1375995220',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'module_filter',
      'version' => '7.x-1.8',
    ),
    'mollom' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/mollom/mollom.module',
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom',
        'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
        'core' => '7.x',
        'configure' => 'admin/config/content/mollom',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'mollom.css',
          ),
        ),
        'files' => 
        array (
          0 => 'includes/mollom.class.inc',
          1 => 'mollom.drupal.inc',
          2 => 'tests/mollom.test',
          3 => 'tests/mollom.class.test',
        ),
        'version' => '7.x-2.7',
        'project' => 'mollom',
        'datestamp' => '1372682452',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'mollom',
      'version' => '7.x-2.7',
    ),
    'mollom_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/mollom/tests/mollom_test.module',
      'name' => 'mollom_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom Test',
        'description' => 'Testing module for Mollom functionality. Do not enable.',
        'core' => '7.x',
        'package' => 'Testing',
        'hidden' => true,
        'version' => '7.x-2.7',
        'project' => 'mollom',
        'datestamp' => '1372682452',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'mollom',
      'version' => '7.x-2.7',
    ),
    'mollom_test_server' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/mollom/tests/mollom_test_server.module',
      'name' => 'mollom_test_server',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom Test Server',
        'description' => 'Testing Server module for Mollom functionality. Do not enable.',
        'core' => '7.x',
        'package' => 'Testing',
        'hidden' => true,
        'version' => '7.x-2.7',
        'project' => 'mollom',
        'datestamp' => '1372682452',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'mollom',
      'version' => '7.x-2.7',
    ),
    'clone' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/node_clone/clone.module',
      'name' => 'clone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node clone',
        'description' => 'Allows users to clone (copy then edit) an existing node.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/views_handler_field_node_link_clone.inc',
        ),
        'configure' => 'admin/config/content/clone',
        'version' => '7.x-1.0-rc1',
        'project' => 'node_clone',
        'datestamp' => '1344129444',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'node_clone',
      'version' => '7.x-1.0-rc1',
    ),
    'node_export' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development',
      'name' => 'node_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'page_title' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/page_title/page_title.module',
      'name' => 'page_title',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page Title',
        'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
        'core' => '7.x',
        'package' => 'SEO',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'page_title.module',
          1 => 'page_title.admin.inc',
          2 => 'page_title.tokens.inc',
          3 => 'page_title.test',
          4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
          5 => 'views_handler_field_node_page_title.inc',
        ),
        'configure' => 'admin/config/search/page-title',
        'version' => '7.x-2.7',
        'project' => 'page_title',
        'datestamp' => '1336556786',
        'php' => '5.2.4',
      ),
      'project' => 'page_title',
      'version' => '7.x-2.7',
    ),
    'pathauto' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
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
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.2',
        'project' => 'pathauto',
        'datestamp' => '1344525185',
        'php' => '5.2.4',
      ),
      'project' => 'pathauto',
      'version' => '7.x-1.2',
    ),
    'prev_next' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/prev_next/prev_next.module',
      'name' => 'prev_next',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Prev/Next',
        'description' => 'Provide a high performance API for previous/next nodes for a given node',
        'core' => '7.x',
        'configure' => 'admin/config/system/prev_next',
        'version' => '7.x-1.x-dev',
        'project' => 'prev_next',
        'datestamp' => '1369450597',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'prev_next',
      'version' => '7.x-1.x-dev',
    ),
    'prev_next_views' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/prev_next/prev_next_views.module',
      'name' => 'prev_next_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Prev/Next for Views',
        'description' => 'Provide an API for previous/next nodes for Views results',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'prev_next',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'prev_next',
        'datestamp' => '1369450597',
        'php' => '5.2.4',
      ),
      'project' => 'prev_next',
      'version' => '7.x-1.x-dev',
    ),
    'node_reference' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/references/node_reference/node_reference.module',
      'name' => 'node_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'files' => 
        array (
          0 => 'node_reference.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'references',
        'datestamp' => '1360265821',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.1',
    ),
    'references' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/references/references.module',
      'name' => 'references',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'References',
        'description' => 'Defines common base features for the various reference field types.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'views/references_handler_relationship.inc',
          1 => 'views/references_handler_argument.inc',
          2 => 'views/references_plugin_display.inc',
          3 => 'views/references_plugin_style.inc',
          4 => 'views/references_plugin_row_fields.inc',
        ),
        'version' => '7.x-2.1',
        'project' => 'references',
        'datestamp' => '1360265821',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.1',
    ),
    'user_reference' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/references/user_reference/user_reference.module',
      'name' => 'user_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'version' => '7.x-2.1',
        'project' => 'references',
        'datestamp' => '1360265821',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.1',
    ),
    'semanticviews' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/semanticviews/semanticviews.module',
      'name' => 'semanticviews',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Semantic Views',
        'description' => 'Views 3 plugins for UI management of output markup',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'files' => 
        array (
          0 => 'semanticviews.module',
          1 => 'semanticviews_plugin_row_fields.inc',
          2 => 'semanticviews_plugin_style_default.inc',
          3 => 'semanticviews.theme.inc',
          4 => 'semanticviews.views_default.inc',
          5 => 'semanticviews.views.inc',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'semanticviews',
        'datestamp' => '1369453055',
        'php' => '5.2.4',
      ),
      'project' => 'semanticviews',
      'version' => '7.x-1.x-dev',
    ),
    'simplehtmldom' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/simplehtmldom/simplehtmldom.module',
      'name' => 'simplehtmldom',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'simplehtmldom API',
        'description' => 'A wrapper module around the simplehtmldom PHP library at sourceforge.',
        'package' => 'Filter',
        'core' => '7.x',
        'version' => '7.x-1.12',
        'project' => 'simplehtmldom',
        'datestamp' => '1307968619',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'simplehtmldom',
      'version' => '7.x-1.12',
    ),
    'site_map' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/site_map/site_map.module',
      'name' => 'site_map',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site map',
        'description' => 'Display a site map.',
        'core' => '7.x',
        'configure' => 'admin/config/search/sitemap',
        'version' => '7.x-1.0',
        'project' => 'site_map',
        'datestamp' => '1315890108',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'site_map',
      'version' => '7.x-1.0',
    ),
    'stringoverrides' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/stringoverrides/stringoverrides.module',
      'name' => 'stringoverrides',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'String Overrides',
        'description' => 'Provides a quick and easy way of replacing text.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'stringoverrides.module',
          1 => 'stringoverrides.install',
          2 => 'stringoverrides.admin.inc',
        ),
        'configure' => 'admin/config/regional/stringoverrides',
        'version' => '7.x-1.8',
        'project' => 'stringoverrides',
        'datestamp' => '1304446316',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'stringoverrides',
      'version' => '7.x-1.8',
    ),
    'stringoverrides_migrate' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/stringoverrides/stringoverrides_migrate.module',
      'name' => 'stringoverrides_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'String Overrides Migrate',
        'description' => 'Tools for importing and exporting string override settings.',
        'dependencies' => 
        array (
          0 => 'stringoverrides',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'stringoverrides_migrate.module',
          1 => 'stringoverrides_migrate.admin.inc',
        ),
        'version' => '7.x-1.8',
        'project' => 'stringoverrides',
        'datestamp' => '1304446316',
        'php' => '5.2.4',
      ),
      'project' => 'stringoverrides',
      'version' => '7.x-1.8',
    ),
    'token_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/token/tests/token_test.module',
      'name' => 'token_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Test',
        'description' => 'Testing module for token functionality.',
        'package' => 'Testing',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token_test.module',
        ),
        'hidden' => true,
        'version' => '7.x-1.5',
        'project' => 'token',
        'datestamp' => '1361665026',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.5',
    ),
    'token' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'token',
        'datestamp' => '1361665026',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.5',
    ),
    'translation_overview' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/translation_overview/translation_overview.module',
      'name' => 'translation_overview',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation overview',
        'description' => 'Provides an overview of the translation status of the site\'s content.',
        'dependencies' => 
        array (
          0 => 'translation',
        ),
        'core' => '7.x',
        'php' => '5.1',
        'package' => 'Multilanguage',
        'files' => 
        array (
          0 => 'translation_overview.install',
          1 => 'translation_overview.module',
          2 => 'translation_overview.pages.inc',
          3 => 'translation_overview.test',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'translation_overview',
        'datestamp' => '1306699318',
      ),
      'project' => 'translation_overview',
      'version' => '7.x-2.0-beta1',
    ),
    'uuid' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development',
      'name' => 'uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7102',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_features' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development',
      'name' => 'uuid_features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '-50',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'variable' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/variable/variable.module',
      'name' => 'variable',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable',
        'description' => 'Variable Information and basic variable API',
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/forum.variable.inc',
          1 => 'includes/locale.variable.inc',
          2 => 'includes/menu.variable.inc',
          3 => 'includes/node.variable.inc',
          4 => 'includes/system.variable.inc',
          5 => 'includes/taxonomy.variable.inc',
          6 => 'includes/translation.variable.inc',
          7 => 'includes/user.variable.inc',
          8 => 'variable.test',
        ),
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_admin' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/variable/variable_admin/variable_admin.module',
      'name' => 'variable_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable admin',
        'description' => 'Variable Administration UI',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_advanced' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/variable/variable_advanced/variable_advanced.module',
      'name' => 'variable_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable advanced',
        'description' => 'Provides access to advanced low level variables. By using this you will be able to break your site badly.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_example' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/variable/variable_example/variable_example.module',
      'name' => 'variable_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable example',
        'description' => 'An example module showing how to use the Variable API and providing some variables.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'variable_store',
        ),
        'package' => 'Example modules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_example.variable.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_realm' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/variable/variable_realm/variable_realm.module',
      'name' => 'variable_realm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7000',
      'weight' => '-1000',
      'info' => 
      array (
        'name' => 'Variable realm',
        'description' => 'API to use variable realms from different modules',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'files' => 
        array (
          0 => 'variable_realm.class.inc',
          1 => 'variable_realm_union.class.inc',
        ),
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_store' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/variable/variable_store/variable_store.module',
      'name' => 'variable_store',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7000',
      'weight' => '-1000',
      'info' => 
      array (
        'name' => 'Variable store',
        'description' => 'Database storage for variable realms. This is an API module.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'files' => 
        array (
          0 => 'variable_store.class.inc',
          1 => 'variable_store.test',
        ),
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_views' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/variable/variable_views/variable_views.module',
      'name' => 'variable_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable views',
        'description' => 'Provides views integration for variable, included a default variable argument.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'views',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views_plugin_argument_default_variable.inc',
          1 => 'includes/views_handler_field_variable_title.inc',
          2 => 'includes/views_handler_field_variable_value.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'views_test' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/views/tests/views_test.module',
      'name' => 'views_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Test',
        'description' => 'Test module for Views.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'hidden' => true,
        'version' => '7.x-3.7',
        'project' => 'views',
        'datestamp' => '1365499236',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.7',
    ),
    'views' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_result.inc',
          2 => 'handlers/views_handler_area_text.inc',
          3 => 'handlers/views_handler_area_text_custom.inc',
          4 => 'handlers/views_handler_area_view.inc',
          5 => 'handlers/views_handler_argument.inc',
          6 => 'handlers/views_handler_argument_date.inc',
          7 => 'handlers/views_handler_argument_formula.inc',
          8 => 'handlers/views_handler_argument_many_to_one.inc',
          9 => 'handlers/views_handler_argument_null.inc',
          10 => 'handlers/views_handler_argument_numeric.inc',
          11 => 'handlers/views_handler_argument_string.inc',
          12 => 'handlers/views_handler_argument_group_by_numeric.inc',
          13 => 'handlers/views_handler_field.inc',
          14 => 'handlers/views_handler_field_counter.inc',
          15 => 'handlers/views_handler_field_boolean.inc',
          16 => 'handlers/views_handler_field_contextual_links.inc',
          17 => 'handlers/views_handler_field_custom.inc',
          18 => 'handlers/views_handler_field_date.inc',
          19 => 'handlers/views_handler_field_entity.inc',
          20 => 'handlers/views_handler_field_markup.inc',
          21 => 'handlers/views_handler_field_math.inc',
          22 => 'handlers/views_handler_field_numeric.inc',
          23 => 'handlers/views_handler_field_prerender_list.inc',
          24 => 'handlers/views_handler_field_time_interval.inc',
          25 => 'handlers/views_handler_field_serialized.inc',
          26 => 'handlers/views_handler_field_machine_name.inc',
          27 => 'handlers/views_handler_field_url.inc',
          28 => 'handlers/views_handler_filter.inc',
          29 => 'handlers/views_handler_filter_boolean_operator.inc',
          30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          31 => 'handlers/views_handler_filter_combine.inc',
          32 => 'handlers/views_handler_filter_date.inc',
          33 => 'handlers/views_handler_filter_equality.inc',
          34 => 'handlers/views_handler_filter_entity_bundle.inc',
          35 => 'handlers/views_handler_filter_group_by_numeric.inc',
          36 => 'handlers/views_handler_filter_in_operator.inc',
          37 => 'handlers/views_handler_filter_many_to_one.inc',
          38 => 'handlers/views_handler_filter_numeric.inc',
          39 => 'handlers/views_handler_filter_string.inc',
          40 => 'handlers/views_handler_relationship.inc',
          41 => 'handlers/views_handler_relationship_groupwise_max.inc',
          42 => 'handlers/views_handler_sort.inc',
          43 => 'handlers/views_handler_sort_date.inc',
          44 => 'handlers/views_handler_sort_formula.inc',
          45 => 'handlers/views_handler_sort_group_by_numeric.inc',
          46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          47 => 'handlers/views_handler_sort_random.inc',
          48 => 'includes/base.inc',
          49 => 'includes/handlers.inc',
          50 => 'includes/plugins.inc',
          51 => 'includes/view.inc',
          52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          61 => 'modules/book/views_plugin_argument_default_book_root.inc',
          62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          63 => 'modules/comment/views_handler_field_comment.inc',
          64 => 'modules/comment/views_handler_field_comment_depth.inc',
          65 => 'modules/comment/views_handler_field_comment_link.inc',
          66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          70 => 'modules/comment/views_handler_field_comment_node_link.inc',
          71 => 'modules/comment/views_handler_field_comment_username.inc',
          72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          74 => 'modules/comment/views_handler_field_node_comment.inc',
          75 => 'modules/comment/views_handler_field_node_new_comments.inc',
          76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          79 => 'modules/comment/views_handler_filter_node_comment.inc',
          80 => 'modules/comment/views_handler_sort_comment_thread.inc',
          81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          83 => 'modules/comment/views_plugin_row_comment_rss.inc',
          84 => 'modules/comment/views_plugin_row_comment_view.inc',
          85 => 'modules/contact/views_handler_field_contact_link.inc',
          86 => 'modules/field/views_handler_field_field.inc',
          87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          88 => 'modules/field/views_handler_argument_field_list.inc',
          89 => 'modules/field/views_handler_argument_field_list_string.inc',
          90 => 'modules/field/views_handler_filter_field_list.inc',
          91 => 'modules/filter/views_handler_field_filter_format_name.inc',
          92 => 'modules/locale/views_handler_field_node_language.inc',
          93 => 'modules/locale/views_handler_filter_node_language.inc',
          94 => 'modules/locale/views_handler_argument_locale_group.inc',
          95 => 'modules/locale/views_handler_argument_locale_language.inc',
          96 => 'modules/locale/views_handler_field_locale_group.inc',
          97 => 'modules/locale/views_handler_field_locale_language.inc',
          98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          99 => 'modules/locale/views_handler_filter_locale_group.inc',
          100 => 'modules/locale/views_handler_filter_locale_language.inc',
          101 => 'modules/locale/views_handler_filter_locale_version.inc',
          102 => 'modules/node/views_handler_argument_dates_various.inc',
          103 => 'modules/node/views_handler_argument_node_language.inc',
          104 => 'modules/node/views_handler_argument_node_nid.inc',
          105 => 'modules/node/views_handler_argument_node_type.inc',
          106 => 'modules/node/views_handler_argument_node_vid.inc',
          107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          109 => 'modules/node/views_handler_field_node.inc',
          110 => 'modules/node/views_handler_field_node_link.inc',
          111 => 'modules/node/views_handler_field_node_link_delete.inc',
          112 => 'modules/node/views_handler_field_node_link_edit.inc',
          113 => 'modules/node/views_handler_field_node_revision.inc',
          114 => 'modules/node/views_handler_field_node_revision_link.inc',
          115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          117 => 'modules/node/views_handler_field_node_path.inc',
          118 => 'modules/node/views_handler_field_node_type.inc',
          119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          120 => 'modules/node/views_handler_filter_node_access.inc',
          121 => 'modules/node/views_handler_filter_node_status.inc',
          122 => 'modules/node/views_handler_filter_node_type.inc',
          123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          124 => 'modules/node/views_plugin_argument_default_node.inc',
          125 => 'modules/node/views_plugin_argument_validate_node.inc',
          126 => 'modules/node/views_plugin_row_node_rss.inc',
          127 => 'modules/node/views_plugin_row_node_view.inc',
          128 => 'modules/profile/views_handler_field_profile_date.inc',
          129 => 'modules/profile/views_handler_field_profile_list.inc',
          130 => 'modules/profile/views_handler_filter_profile_selection.inc',
          131 => 'modules/search/views_handler_argument_search.inc',
          132 => 'modules/search/views_handler_field_search_score.inc',
          133 => 'modules/search/views_handler_filter_search.inc',
          134 => 'modules/search/views_handler_sort_search_score.inc',
          135 => 'modules/search/views_plugin_row_search_view.inc',
          136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          137 => 'modules/system/views_handler_argument_file_fid.inc',
          138 => 'modules/system/views_handler_field_file.inc',
          139 => 'modules/system/views_handler_field_file_extension.inc',
          140 => 'modules/system/views_handler_field_file_filemime.inc',
          141 => 'modules/system/views_handler_field_file_uri.inc',
          142 => 'modules/system/views_handler_field_file_status.inc',
          143 => 'modules/system/views_handler_filter_file_status.inc',
          144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          160 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          161 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          162 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          163 => 'modules/system/views_handler_filter_system_type.inc',
          164 => 'modules/translation/views_handler_argument_node_tnid.inc',
          165 => 'modules/translation/views_handler_field_node_link_translate.inc',
          166 => 'modules/translation/views_handler_field_node_translation_link.inc',
          167 => 'modules/translation/views_handler_filter_node_tnid.inc',
          168 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          169 => 'modules/translation/views_handler_relationship_translation.inc',
          170 => 'modules/user/views_handler_argument_user_uid.inc',
          171 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          172 => 'modules/user/views_handler_field_user.inc',
          173 => 'modules/user/views_handler_field_user_language.inc',
          174 => 'modules/user/views_handler_field_user_link.inc',
          175 => 'modules/user/views_handler_field_user_link_cancel.inc',
          176 => 'modules/user/views_handler_field_user_link_edit.inc',
          177 => 'modules/user/views_handler_field_user_mail.inc',
          178 => 'modules/user/views_handler_field_user_name.inc',
          179 => 'modules/user/views_handler_field_user_permissions.inc',
          180 => 'modules/user/views_handler_field_user_picture.inc',
          181 => 'modules/user/views_handler_field_user_roles.inc',
          182 => 'modules/user/views_handler_filter_user_current.inc',
          183 => 'modules/user/views_handler_filter_user_name.inc',
          184 => 'modules/user/views_handler_filter_user_permissions.inc',
          185 => 'modules/user/views_handler_filter_user_roles.inc',
          186 => 'modules/user/views_plugin_argument_default_current_user.inc',
          187 => 'modules/user/views_plugin_argument_default_user.inc',
          188 => 'modules/user/views_plugin_argument_validate_user.inc',
          189 => 'modules/user/views_plugin_row_user_view.inc',
          190 => 'plugins/views_plugin_access.inc',
          191 => 'plugins/views_plugin_access_none.inc',
          192 => 'plugins/views_plugin_access_perm.inc',
          193 => 'plugins/views_plugin_access_role.inc',
          194 => 'plugins/views_plugin_argument_default.inc',
          195 => 'plugins/views_plugin_argument_default_php.inc',
          196 => 'plugins/views_plugin_argument_default_fixed.inc',
          197 => 'plugins/views_plugin_argument_default_raw.inc',
          198 => 'plugins/views_plugin_argument_validate.inc',
          199 => 'plugins/views_plugin_argument_validate_numeric.inc',
          200 => 'plugins/views_plugin_argument_validate_php.inc',
          201 => 'plugins/views_plugin_cache.inc',
          202 => 'plugins/views_plugin_cache_none.inc',
          203 => 'plugins/views_plugin_cache_time.inc',
          204 => 'plugins/views_plugin_display.inc',
          205 => 'plugins/views_plugin_display_attachment.inc',
          206 => 'plugins/views_plugin_display_block.inc',
          207 => 'plugins/views_plugin_display_default.inc',
          208 => 'plugins/views_plugin_display_embed.inc',
          209 => 'plugins/views_plugin_display_extender.inc',
          210 => 'plugins/views_plugin_display_feed.inc',
          211 => 'plugins/views_plugin_display_page.inc',
          212 => 'plugins/views_plugin_exposed_form_basic.inc',
          213 => 'plugins/views_plugin_exposed_form.inc',
          214 => 'plugins/views_plugin_exposed_form_input_required.inc',
          215 => 'plugins/views_plugin_localization_core.inc',
          216 => 'plugins/views_plugin_localization.inc',
          217 => 'plugins/views_plugin_localization_none.inc',
          218 => 'plugins/views_plugin_pager.inc',
          219 => 'plugins/views_plugin_pager_full.inc',
          220 => 'plugins/views_plugin_pager_mini.inc',
          221 => 'plugins/views_plugin_pager_none.inc',
          222 => 'plugins/views_plugin_pager_some.inc',
          223 => 'plugins/views_plugin_query.inc',
          224 => 'plugins/views_plugin_query_default.inc',
          225 => 'plugins/views_plugin_row.inc',
          226 => 'plugins/views_plugin_row_fields.inc',
          227 => 'plugins/views_plugin_row_rss_fields.inc',
          228 => 'plugins/views_plugin_style.inc',
          229 => 'plugins/views_plugin_style_default.inc',
          230 => 'plugins/views_plugin_style_grid.inc',
          231 => 'plugins/views_plugin_style_list.inc',
          232 => 'plugins/views_plugin_style_jump_menu.inc',
          233 => 'plugins/views_plugin_style_mapping.inc',
          234 => 'plugins/views_plugin_style_rss.inc',
          235 => 'plugins/views_plugin_style_summary.inc',
          236 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          237 => 'plugins/views_plugin_style_summary_unformatted.inc',
          238 => 'plugins/views_plugin_style_table.inc',
          239 => 'tests/handlers/views_handler_area_text.test',
          240 => 'tests/handlers/views_handler_argument_null.test',
          241 => 'tests/handlers/views_handler_argument_string.test',
          242 => 'tests/handlers/views_handler_field.test',
          243 => 'tests/handlers/views_handler_field_boolean.test',
          244 => 'tests/handlers/views_handler_field_custom.test',
          245 => 'tests/handlers/views_handler_field_counter.test',
          246 => 'tests/handlers/views_handler_field_date.test',
          247 => 'tests/handlers/views_handler_field_file_size.test',
          248 => 'tests/handlers/views_handler_field_math.test',
          249 => 'tests/handlers/views_handler_field_url.test',
          250 => 'tests/handlers/views_handler_field_xss.test',
          251 => 'tests/handlers/views_handler_filter_combine.test',
          252 => 'tests/handlers/views_handler_filter_date.test',
          253 => 'tests/handlers/views_handler_filter_equality.test',
          254 => 'tests/handlers/views_handler_filter_in_operator.test',
          255 => 'tests/handlers/views_handler_filter_numeric.test',
          256 => 'tests/handlers/views_handler_filter_string.test',
          257 => 'tests/handlers/views_handler_sort_random.test',
          258 => 'tests/handlers/views_handler_sort_date.test',
          259 => 'tests/handlers/views_handler_sort.test',
          260 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          261 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          262 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          263 => 'tests/plugins/views_plugin_display.test',
          264 => 'tests/styles/views_plugin_style_jump_menu.test',
          265 => 'tests/styles/views_plugin_style.test',
          266 => 'tests/styles/views_plugin_style_base.test',
          267 => 'tests/styles/views_plugin_style_mapping.test',
          268 => 'tests/styles/views_plugin_style_unformatted.test',
          269 => 'tests/views_access.test',
          270 => 'tests/views_analyze.test',
          271 => 'tests/views_basic.test',
          272 => 'tests/views_argument_default.test',
          273 => 'tests/views_argument_validator.test',
          274 => 'tests/views_exposed_form.test',
          275 => 'tests/field/views_fieldapi.test',
          276 => 'tests/views_glossary.test',
          277 => 'tests/views_groupby.test',
          278 => 'tests/views_handlers.test',
          279 => 'tests/views_module.test',
          280 => 'tests/views_pager.test',
          281 => 'tests/views_plugin_localization_test.inc',
          282 => 'tests/views_translatable.test',
          283 => 'tests/views_query.test',
          284 => 'tests/views_upgrade.test',
          285 => 'tests/views_test.views_default.inc',
          286 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          287 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          288 => 'tests/node/views_node_revision_relations.test',
          289 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          290 => 'tests/user/views_handler_field_user_name.test',
          291 => 'tests/user/views_user_argument_default.test',
          292 => 'tests/user/views_user_argument_validate.test',
          293 => 'tests/user/views_user.test',
          294 => 'tests/views_cache.test',
          295 => 'tests/views_view.test',
          296 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.7',
        'project' => 'views',
        'datestamp' => '1365499236',
      ),
      'project' => 'views',
      'version' => '7.x-3.7',
    ),
    'views_ui' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.7',
        'project' => 'views',
        'datestamp' => '1365499236',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.7',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.1',
        'project' => 'views_bulk_operations',
        'datestamp' => '1354500015',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.1',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_bulk_operations',
        'datestamp' => '1354500015',
        'php' => '5.2.4',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.1',
    ),
    'views_content_cache' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/views_content_cache/views_content_cache.module',
      'name' => 'views_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Content Cache',
        'description' => 'Provides a views cache plugin based on content type changes.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'plugins/views_content_cache/base.inc',
          1 => 'plugins/views_content_cache/comment.inc',
          2 => 'plugins/views_content_cache/node.inc',
          3 => 'plugins/views_content_cache/node_only.inc',
          4 => 'plugins/views_content_cache/og.inc',
          5 => 'plugins/views_content_cache/votingapi.inc',
          6 => 'views/views_content_cache_plugin_cache.inc',
          7 => 'tests/views_content_cache.test',
        ),
        'version' => '7.x-3.0-alpha2',
        'project' => 'views_content_cache',
        'datestamp' => '1369601463',
        'php' => '5.2.4',
      ),
      'project' => 'views_content_cache',
      'version' => '7.x-3.0-alpha2',
    ),
    'webform' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/modules/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7321',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'files' => 
        array (
          0 => 'includes/webform.export.inc',
          1 => 'views/webform_handler_field_form_body.inc',
          2 => 'views/webform_handler_field_is_draft.inc',
          3 => 'views/webform_handler_field_node_link_edit.inc',
          4 => 'views/webform_handler_field_node_link_results.inc',
          5 => 'views/webform_handler_field_submission_count.inc',
          6 => 'views/webform_handler_field_submission_link.inc',
          7 => 'views/webform_handler_field_webform_status.inc',
          8 => 'views/webform_handler_filter_is_draft.inc',
          9 => 'views/webform_handler_filter_webform_status.inc',
          10 => 'views/webform.views.inc',
          11 => 'tests/components.test',
          12 => 'tests/permissions.test',
          13 => 'tests/submission.test',
          14 => 'tests/webform.test',
        ),
        'version' => '7.x-3.19',
        'project' => 'webform',
        'datestamp' => '1369860079',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'webform',
      'version' => '7.x-3.19',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'garland' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
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
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'seven' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'stark' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.23',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1375928238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.23',
    ),
    'zen' => 
    array (
      'filename' => '/home/www/aegir/platforms/drupal-7.23-development/sites/all/themes/zen/zen.info',
      'name' => 'zen',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Zen',
        'description' => 'Zen sub-themes are the ultimate starting themes for Drupal 7. Read the <a href="https://drupal.org/node/873778">online docs</a> or the included README-FIRST.txt on how to create a theme with Zen.',
        'screenshot' => 'zen-internals/screenshot.png',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'system.menus.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'navigation' => 'Navigation bar',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First sidebar',
          'sidebar_second' => 'Second sidebar',
          'footer' => 'Footer',
          'bottom' => 'Page bottom',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'zen_breadcrumb' => 'yes',
          'zen_breadcrumb_separator' => ' › ',
          'zen_breadcrumb_home' => '1',
          'zen_breadcrumb_trailing' => '0',
          'zen_breadcrumb_title' => '0',
          'zen_layout' => 'zen-responsive-sidebars',
          'zen_skip_link_anchor' => 'main-menu',
          'zen_skip_link_text' => 'Jump to navigation',
          'zen_html5_respond_meta' => 
          array (
            0 => 'respond',
            1 => 'html5',
            2 => 'meta',
          ),
          'zen_rebuild_registry' => '0',
          'zen_wireframes' => '0',
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'panels-layouts',
          ),
        ),
        'version' => '7.x-5.4',
        'project' => 'zen',
        'datestamp' => '1377107504',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'zen',
      'version' => '7.x-5.4',
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '127.0.0.1',
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
