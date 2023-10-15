<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'biswajit' );

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
define( 'AUTH_KEY',         'm}2IvlRz8k(NK0:DPvK3LA6+Ic02>O74;fXv=-1_1!mOR1#g`$f[V@_PV$&cn.I(' );
define( 'SECURE_AUTH_KEY',  'vV$ClY9|&-{dM/LwW4^g=qWp+0soHQ^~nj,I?<#?u;ttSjTnK#K {la5[)EC-wUd' );
define( 'LOGGED_IN_KEY',    'clhyX6`/9P2;L6*I;*1)^}l`78pUGt8]PFPK:+]+qhgWR A@u^m4^y_bHe_tmnWZ' );
define( 'NONCE_KEY',        '9Hi ?Bi]s^J7&^zBs5pP}Y(80@`]8m-:B-HLxciDJ${`{_H;qCVJso.A+p_}{bu[' );
define( 'AUTH_SALT',        '.F}KK!WpK%2*=q[m^K=cHdsUUI>eYVA@Z=;k^1!$*|v~aeNq<h%ywTRaq2p2x)1~' );
define( 'SECURE_AUTH_SALT', 'QaCb$zbCJ,ie/zF.$3gXD9>nX;o|zN*nVR(#|kHwGqa{hPK3rF$4mv Tg5P%IGS3' );
define( 'LOGGED_IN_SALT',   '#hEn*7fY]u=%.G.a](FAanE^&INF+wSQAm+&6H;z#W$1^Uv?>ejw6c*hGKm5%0ai' );
define( 'NONCE_SALT',       'Uoj}T*kLKu)]668ox:R0Y;[+)v!Ok<eLDyp|$NaGx??Qy24q[_XhoB8u|c0]8a3q' );

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
