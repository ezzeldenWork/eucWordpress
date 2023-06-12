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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'xHW5AyytETQrykr8wZMNtkNPB/gfuEhQcDviofg1EDF3gFt3FhC9n3Up6Dg/OZszznOZpM8en2On/VQhWABRcw==');
define('SECURE_AUTH_KEY',  'QJGRObsvCSjuIJXXzj3SKzvXkCWH+VQYUBOMffg+nViXEDnipa3+C8VVV1ID5je2nDcvNOD0dyOoANC0b6I/WA==');
define('LOGGED_IN_KEY',    'pEeI+FNcblkPWUl1hNJbHKN9tYIRwE9HNzmQzc6PVrnUDBZZL/J5nftQDJtzRo9civFZwax8J2Jv2teEFvY2Tw==');
define('NONCE_KEY',        's9Jt+18WpbeCxZm+0LCv6xrJOAEVCDlXNm4mMI0z1Mt0PGhFmjXX/aS2uayqtd9rG1qufzAm84cIMFekcaZX6Q==');
define('AUTH_SALT',        'WVqZuBzaWrArwbU+K+Vosl6ZmkoAOXmy/PtQTJDztmUMVRxZZediDBJiTDOYddjWrDUn65OzdZCBJDENtPx6HA==');
define('SECURE_AUTH_SALT', 'mAAS7l59WmW+kaCaMz1TCnrmUHMcdlQw9MznxTOXiFiWqwF1jEJSvzcvzECKLYtUYSc+s457yXsFdP13fjVlqQ==');
define('LOGGED_IN_SALT',   '0xQjU2txzom+GPbdIrwJl3DTGPNAYAUHawPK2FgIQrNlwg8R5J+4c6C8MK3pyvdGh6SY4pWiibu/q9Vkimf8aQ==');
define('NONCE_SALT',       'tsFwpbpfYUCSuXxdwfDHEcJezn7aOCYiZB5/w4jd6OJIBv84/jE70PXYoXFBhtLq6QTgedCuRWPx3eKkVvaTQQ==');


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
