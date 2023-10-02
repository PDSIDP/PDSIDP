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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']{Ke|h?[64K?E~2Xu]Ecf(,3{vN~X4y(pCw[IN5;U1fk;K1yd3rw>Pe&lJ%=$mc0' );
define( 'SECURE_AUTH_KEY',  'G%y8y@z7w)%z1Fz[xl8`ZRH)h`6[CJB j%li;4xmOO@#<jR4K)NWpP<%32]gh2bv' );
define( 'LOGGED_IN_KEY',    'Ea:]>gPVGElzonc{jlPZu?7{(F`!VW7hRJv4HFc+5hp8fFHkt:^I#Di%8X`4iDAi' );
define( 'NONCE_KEY',        '#R:rN5D;FJ:o`3,d>xXfYWNn-QMS.?YU ]K-84Dnwc9N|Xvi2`)>/KQt!3VneFC ' );
define( 'AUTH_SALT',        'YDfdoLi{})6LX[1lXl?B6J?uSTfq<KaP*WB3vF;;~ZBNb!M#$J~4cUTyVVgMB9R`' );
define( 'SECURE_AUTH_SALT', '15.?loX`P>/^H``{!}YWd!^qz,TNRtGG]e1/sw:9KXVHiLkzno5I=sT-r5bpd,M!' );
define( 'LOGGED_IN_SALT',   ';^#fFwf?[P@t%xifp2I[#F2j1e}(hnz]Alw:!-]o9H**=)G{;<}R9g_m%T_mpxsB' );
define( 'NONCE_SALT',       'H&cmb$z~qMVS(I[QVfLC,ZE@ZlD]/JW~hAyjCQ|.h^W*1iW2h7uucDI:BG!!1YY#' );

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
