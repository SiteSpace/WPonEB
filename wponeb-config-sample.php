<?php
/****************************************
 * WP-Config file created by SiteSpace
 * Wordpress on AWS Elastic Beanstalk
 * Rename this file to wp-config.php and don't forget to create the Enviroment Variables on your Elastic Beanstalk Enviroment, Read more about this in the readme file located at:
 https://github.com/sitespace/wponeb
 ****************************************/


/** 	MySQL settings
 ****************************************/
/** ElasticBeans has autoinjected env variables. */
/** If your application has RDS configured as part of app, don't change this */

/** The name of the database for WordPress */
define('DB_NAME', $_SERVER['RDS_DB_NAME']);
/** MySQL database username */
define('DB_USER', $_SERVER['RDS_USERNAME']);
/** MySQL database password */
define('DB_PASSWORD', $_SERVER['RDS_PASSWORD']);
/** MySQL hostname */
define('DB_HOST', $_SERVER['RDS_HOSTNAME'] . ':' . $_SERVER['RDS_PORT']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** 	SSL Settings
 ****************************************/
//define('FORCE_SSL_ADMIN', true); // Force SSL on Admin URL (/wp-admin/)
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
       $_SERVER['HTTPS']='on'; // Allow SSL on Reverse Proxy

/** 	Set Default Theme
****************************************/
//define('WP_DEFAULT_THEME', 'WPonEB'); // Set default theme

/** 	Wordpress Multisite
 ****************************************/
//define('WP_ALLOW_MULTISITE', $_SERVER['WP_ALLOW_MULTISITE']);
//define('MULTISITE', $_SERVER['MULTISITE']);
//define('SUBDOMAIN_INSTALL', $_SERVER['SUBDOMAIN_INSTALL']);
//define('DOMAIN_CURRENT_SITE', $_SERVER['DOMAIN_CURRENT_SITE']);
//define('PATH_CURRENT_SITE', $_SERVER['PATH_CURRENT_SITE']);
//define('SITE_ID_CURRENT_SITE', $_SERVER['SITE_ID_CURRENT_SITE']);
//define('BLOG_ID_CURRENT_SITE', $_SERVER['BLOG_ID_CURRENT_SITE']);

/** 	Domain Mapping
 ****************************************/
//define('SUNRISE', 'on' ); // Multisite Domain Mapping


/** 	Define Error Logging
 ****************************************/
define('WP_DEBUG', $_SERVER['WP_DEBUG']);
define('WP_DEBUG_LOG', $_SERVER['WP_DEBUG_LOG']);
define('WP_DEBUG_DISPLAY', $_SERVER['WP_DEBUG_DISPLAY']);
//Setting log location if logs are turned on
if (defined('WP_DEBUG_LOG') && WP_DEBUG_LOG) {
    ini_set( 'error_log', '/var/app/current/wp-content/uploads/wponeb-debug.txt' );
}


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

/** Temp Directory
 ****************************************/
define( 'WP_TEMP_DIR', '/var/app/current/wp-content/temp/' );

/** Define Upload Limit
(This is also defined as 256MB in .htaccess then restricted here)
 ****************************************/
define('WP_MEMORY_LIMIT', $_SERVER['WP_MEMORY_LIMIT']);
define('WP_MAX_MEMORY_LIMIT', $_SERVER['WP_MAX_MEMORY_LIMIT']);

/*********************************************/
/* That's all, stop editing! Happy blogging. */
/*********************************************/

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
