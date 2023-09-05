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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Practice' );

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
define( 'AUTH_KEY',         'NxlQYMuDij1bfhNbOnV2W79LAN3wxRLmAwoBJIiZm92UPGP5zpEVU13X7EHyl7nX' );
define( 'SECURE_AUTH_KEY',  'gyyQDt9sJw44dnRFtciRu25SEENQXBX06BpWukpB2CE0lboqJKKc5VXDmoYUFiHB' );
define( 'LOGGED_IN_KEY',    '69BlVA4R3XRo2S23Gu5VYBE2cEb2P60IVt8rWetFDAlo7Dzgcfeu7cqQt4fFAjV3' );
define( 'NONCE_KEY',        'JzWwdtMc57HLYh1iDJ49IOhSUXEjsy1EGVPmqqz9eLrMMfmuYutoAGrjlypt6Icl' );
define( 'AUTH_SALT',        'XWpWGZFl55BRMCcMHi227Lv0DJb1eFRDS8cz2x9LSnUsXDUTD3nRsGR9EQIvV9rX' );
define( 'SECURE_AUTH_SALT', 'Pc9BLoi0uOco8yPoNoSPR6g1w18l2yoExYk7gjA6u4EQyBPYYfa7jHH5fndQdAqE' );
define( 'LOGGED_IN_SALT',   '4zC2eVbiuL7uWT2SRYQHf2uheLE4NGfDJaHjRp0I9F8vJZomDM5zcH7TxExS51Fg' );
define( 'NONCE_SALT',       'AewaGUvx2iWxsqyBqBkg7HB7DUYx8PNS4c7GpUFzNRNT62IXFOtMckphig4NMEL0' );

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
