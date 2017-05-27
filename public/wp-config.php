<?php

/**
 * Require the Composer autoloader
 */
require_once( ABSPATH . '../../vendor/composer/autoload.php' );

$app = json_decode(file_get_contents(dirname(__FILE__) . './../config/application.json'), true);
$db  = json_decode(file_get_contents(dirname(__FILE__) . './../config/database.json'), true);

/**
 * Settings
 */
define('WP_HOME', $app['home']);

/**
 * Don't do default cron
 */
define('DISABLE_WP_CRON', true);

/**
 * Misc. Settings
 */
define('WP_POST_REVISIONS', 8);

/**
 * Language (leave blank for American English)
 */
define('WPLANG', '');

/**
 * Path to WordPress
 */
define('WP_SITEURL', WP_HOME . '/wp');

/**
 * Custom Content Directory
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', WP_HOME . '/wp-content');

/**
 * Set up databases
 */
define('DB_NAME', $db['name']);
define('DB_USER', $db['user']);
define('DB_PASSWORD', $db['password']);
define('DB_HOST', $db['host']);
$table_prefix = 'wp_';

/**
 * You almost certainly do not want to change these
 */
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**
 * Bootstrap WordPress
 */
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );

require_once( ABSPATH . 'wp-settings.php' );
