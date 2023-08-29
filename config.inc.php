<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db('Pdo_Pgsql', 'typecho_');
$db->addServer(array (
  'host' => 'john.db.elephantsql.com',
  'port' => 5432,
  'user' => 'dqtkzxuh',
  'password' => 'ntkJq0o_rdQn72NgGoxlTbpnd4_D2DYA',
  'charset' => 'utf8',
  'database' => 'dqtkzxuh',
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
