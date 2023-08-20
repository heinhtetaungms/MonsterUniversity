<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //

if(strstr($_SERVER['SERVER_NAME'], 'monster-university.local')) {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', '' );
	define( 'DB_USER', '' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', '127.0.0.1' );
}


/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'j4tptz24pJ0Jm3r1FsLsbuMcrd4cyWFZ3/9dceXNQA4Mb1JumIXeiFSCyZGYAMs8xTzE9VukvBIGBgETutIeeA==');
define('SECURE_AUTH_KEY',  'ep9hzeHulS0lBLTkHb9DAL0Sxa8q0F8s6s/DnliiCTF/cAwyx/BqDflbe8f7CnPG4NmMXxO/D5uGNUELKa++6w==');
define('LOGGED_IN_KEY',    'IYPUEVkJiiAuIO4CmQAugVdaYNpSqZXlryVXazdFvXtLo1dK+SmDu6B4rL36ssWOu3UMBgQ4nVxewXZI0q6Q+w==');
define('NONCE_KEY',        '9z1bZtA3NmMZyUK7TKCu71ilFWUKEBBamCD48H5PTIrjcUDmi6TNeYkaE/8Fu2vkL/4XEpTDml4mT//eDGWGIg==');
define('AUTH_SALT',        'Rh0gZZXoIxsXkOTQo0ETWsoVNTACcFS6zHWbqGcEiaWjnc3Kcnv32Us3Ex2XAg3opsoiI6PKCrxlqyQlckJKTw==');
define('SECURE_AUTH_SALT', 'K7WHD8iHgZtY1bnhuplh5pAwSB1mPyJzRZOBlrXVb677ojGMqmAq3efVZRbNWMOhtUZEpLHAggs10b7zDAqbbA==');
define('LOGGED_IN_SALT',   'Tyw/p/9ByRui79VH+o5UJ99Z0ZckVeDdiFpq/bEi0HLafcXtfCaP0DjCCQY6flhkovOemaL/yFNFuZxS7r4N0Q==');
define('NONCE_SALT',       '0z0AbrAxqpabkdP1hsN0nDmqwr7wUrCIadhVxnOjxwkdhnQG25pBOF/xpMu8DmjJLDoxvvF14wCH5EFOTaV3jQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
