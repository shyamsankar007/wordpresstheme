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
define( 'DB_NAME', 'theme' );

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
define( 'AUTH_KEY',         'wo[!zad|=wlCWeTV+,44a2&jlp~7V,8^Wt$5wsshP7 AljSn9_T^r&4TZm^ya`dY' );
define( 'SECURE_AUTH_KEY',  'lbj-}EL:oRXnpZ{oVUeFbFH+8O<k^Z:Ig[6:eXw]G@QMO<8E(v8::SEk@Hp$.sKG' );
define( 'LOGGED_IN_KEY',    '{GNvx.gbb4dj:EQS:56lCH{0@w_KOvu[xE,0A$/MKb)z2k.EY1w:?a=fmzeTx6-T' );
define( 'NONCE_KEY',        '+ei:ngE8j<]#{`/_d7]B4UDhA9v8q/?q6|~Q#^B6iI=-#6Ho>d?Hl q7}DV{WDsU' );
define( 'AUTH_SALT',        ']Ey/pG!z DC3S(!G_LaI7^>l3zSLo,|xFKRTx(D:lH.?G3>~^6JwG8?B]g-9zZxM' );
define( 'SECURE_AUTH_SALT', '/+HuD@_#yr#nL$J(As>1|ELUWywo9R)OtGGDs>500:{eT|{h&mLV=H[GS.mkWGJ7' );
define( 'LOGGED_IN_SALT',   'A{96fTCS,~ -+qv!*vQ95v#ac*shlH*Yfck73b?^pAsIO]vexrk.^Yftfc#nTAEy' );
define( 'NONCE_SALT',       'F:{rS:ZWID<H;bjG24!(Bo@l=o|C:!|(hh}]T7IN@&2{g;]Ipju%bawi/f*~Et?x' );

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
