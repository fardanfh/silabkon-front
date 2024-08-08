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
define( 'DB_NAME', 'front-silabkon' );

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
define( 'AUTH_KEY',         '6gRY9NGhNzcUNkyv3sPnjtKrK5gOvEl3oA8fDh6Pxkhl9VoK2wftJkmhG3isfeUR' );
define( 'SECURE_AUTH_KEY',  's9g1krRgWOmNwKud72rCmTpOipLP2kt32BXvfU7tXqm2oIdfmM9IEk8REZeADQZi' );
define( 'LOGGED_IN_KEY',    'D2CB8cYZL7a6CR2as9JCx5x3PWzmPMBG0HzEuUWpmnih0UM24V076aJk9ksYT9KX' );
define( 'NONCE_KEY',        'ktQ0VgryMy6s0H5L30I6w9QrRqEdPbIs7w85NOTwJYqYEDdZHkqmQy2tXbovRAHc' );
define( 'AUTH_SALT',        '7ALQxCAxTjN2fXzCxYOhMXjydajeJ1aGRj6vUAeS7hBN1Toddr1zrFGkgUyBctrH' );
define( 'SECURE_AUTH_SALT', 'QpgIv2S4FqF3c2jN1p4WAS3cK0abH7inr0mWguyYyFVlgQJ9OSGvi2Haa3VdOL0G' );
define( 'LOGGED_IN_SALT',   'I1cCijyFXayoBWwwQsOgijhSCjaWYwKMroWWy6tGV4ETQoxI9xc9Cer6c4XHdP34' );
define( 'NONCE_SALT',       'XzenTmmOSL0SeuwJ7od1LeAPu8xDGodSptX8AXIRlIDhr9RIIovtSMqgbgqEQzzZ' );

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
