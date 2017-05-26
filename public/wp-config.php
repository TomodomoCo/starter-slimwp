<?php

/**
 * Require the Composer autoloader
 */
require_once( ABSPATH . '../../vendor/composer/autoload.php' );

/**
 * Settings
 */
define('WP_HOME', 'http://domain.com');

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
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');
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
