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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'neurokey' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '-4{0eIh{A(xDbSwg9X_Ap[#~([CZfczMLrZuUxY@XT~hAwk4NR$Ep._:524Cy~?G' );
define( 'SECURE_AUTH_KEY',  ',mwfmthht7bS/QcIJgu}Lgjx:kg$q~u3>(c%IB88K(*KpqUNOq9yVw$-|!FGx6,{' );
define( 'LOGGED_IN_KEY',    'OGV!v%;Y&;A3FeGI8,4$?SVO6>#ldw!Br#jocED~51Rq<ivoF8TC!C{)A%yp=@~B' );
define( 'NONCE_KEY',        '3ylf7C/]PCF)2/e_{tpZY=;FK?=9,u >my$q/]k@;m+$slA@/CCt:4y<awNnbRg.' );
define( 'AUTH_SALT',        'H/!d(;k-tYw/DFh1 < /DbNCTaHW^x[f5cteSQ7{~B[]l_OZlJ}dG$fOCqS:Cl~[' );
define( 'SECURE_AUTH_SALT', 'fWu+6TaSu>x7KUWvZB7@uYN5I^L0fD{S]!*!i.0k >KYL}{(y)w%:_`|jdV}V9~N' );
define( 'LOGGED_IN_SALT',   'c6msvWOgr3P_YnAH}:zX><u[b[)^xW_(!3t|XqgEV8;,B9;PcTh2/WbI0ElzKu]l' );
define( 'NONCE_SALT',       'DqR|;=I{p&2^<:e#M0NQ}th!!s<~~QYp(*)HI.M~s>l[)erKIQG4f1nFlk62Sh3}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
