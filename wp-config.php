<?php
/****************************************
 * WP-Config file created by SiteSpace
 * Wordpress on AWS Elastic Beanstalk
 * Rename this file to wp-config.php and don't forget to create the Enviroment Variables on your Elastic Beanstalk Enviroment, Read more about this in the readme file located at:
 https://github.com/sitespace/wponeb
 ****************************************/


/** 	MySQL settings
 ****************************************/

/** The name of the database for WordPress */
define('DB_NAME', $_SERVER['DB_NAME']);
/** MySQL database username */
define('DB_USER', $_SERVER['DB_USER']);
/** MySQL database password */
define('DB_PASSWORD', $_SERVER['DB_PASSWORD']);
/** MySQL hostname */
define('DB_HOST', $_SERVER['DB_HOST']);
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** 	Wordpress Multisite
 ****************************************/
define('WP_ALLOW_MULTISITE', $_SERVER['WP_ALLOW_MULTISITE']);
define('MULTISITE', $_SERVER['MULTISITE']);
define('SUBDOMAIN_INSTALL', $_SERVER['SUBDOMAIN_INSTALL']);
define('DOMAIN_CURRENT_SITE', $_SERVER['DOMAIN_CURRENT_SITE']);
define('PATH_CURRENT_SITE', $_SERVER['PATH_CURRENT_SITE']);
define('SITE_ID_CURRENT_SITE', $_SERVER['SITE_ID_CURRENT_SITE']);
define('BLOG_ID_CURRENT_SITE', $_SERVER['BLOG_ID_CURRENT_SITE']);

/** 	Define Error Logging
 ****************************************/
define('WP_DEBUG', $_SERVER['WP_DEBUG']);
define('WP_DEBUG_LOG', $_SERVER['WP_DEBUG_LOG']);
define('WP_DEBUG_DISPLAY', $_SERVER['WP_DEBUG_DISPLAY']);

/** 	Post Revisions & AutoSave
 ****************************************/
define('WP_POST_REVISIONS', $_SERVER['WP_POST_REVISIONS']);
define('AUTOSAVE_INTERVAL', $_SERVER['AUTOSAVE_INTERVAL']); // Seconds

/** 	Authentication Salts
 ****************************************/
define('AUTH_KEY', 		$_SERVER['WP_SALTS_AUTH_KEY']);
define('AUTH_SALT',		$_SERVER['WP_SALTS_AUTH_SALT']);
define('LOGGED_IN_KEY',		$_SERVER['WP_SALTS_LOGGED_IN_KEY']);
define('LOGGED_IN_SALT',	$_SERVER['WP_SALTS_LOGGED_IN_SALT']);
define('NONCE_KEY',		$_SERVER['WP_SALTS_NONCE_KEY']);
define('NONCE_SALT',		$_SERVER['WP_SALTS_NONCE_SALT']);
define('SECURE_AUTH_KEY',	$_SERVER['WP_SALTS_SECURE_AUTH_KEY']);
define('SECURE_AUTH_SALT', 	$_SERVER['WP_SALTS_SECURE_AUTH_SALT']);

$table_prefix  = $_SERVER['TABLE_PREFIX'];

/** 	Disallow File Editing
 ****************************************/
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true );

/** 	Disable Automatic Updates
 ****************************************/
define('AUTOMATIC_UPDATER_DISABLED', true );
define('WP_AUTO_UPDATE_CORE', false );

/*********************************************/
/* That's all, stop editing! Happy blogging. */
/*********************************************/

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
