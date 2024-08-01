<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DaltonCoinSite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'TA5jdNYlYU89r4NtLHDkP6kvmnDjhHis8ojIh3a6NkEo9uzyI8k8eBdBxh1N5d1d' );
define( 'SECURE_AUTH_KEY',  '7pCuVCTKgSsaBowZpgSnw4IoKMbuykOf63ape6yRmvrMYo68nuunW1A6ZJuxXuSI' );
define( 'LOGGED_IN_KEY',    'eK0sruhvoRCps5xDHAtiLplHDLoVtljQPfpyZjngUCGsz1YjdiHdUjUwGT8UMBAl' );
define( 'NONCE_KEY',        'NHspxqseg3hZ7PP2iCOp51dZQFwtJc0CmevVhHTnvJd81k9ca1ZIEIRUP6qlcPIK' );
define( 'AUTH_SALT',        'qjrvqElmfxILh1AENsfgFkfZoQdbTtlPHc1kmXNI7yMWgb4j2pA0cPb1taYm1vBq' );
define( 'SECURE_AUTH_SALT', 'iya0v4XbFgjiCWdgUy85rF1Qh80vGmRPm49RBJf2IewkRaYomBmo4P2W5GtHiYB9' );
define( 'LOGGED_IN_SALT',   'Df2RzaeaSRMMwalfMLhqp7AxFqNxhhoJcbk9MBA0mh5hHB3gLySKAhbblHgTThnf' );
define( 'NONCE_SALT',       'NXO0fpqSMvUFN55uWw9yviD64VL60ZVgzphjAPLy1avO4sQqxougEzej08llmfQB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
