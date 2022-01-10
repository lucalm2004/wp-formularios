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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'A(K{4Kc;e8m`u|V5o/|G2gFO_bt#DTXq`0]gCj(/xkv<xs~yiw *HZ_MyF`_2^oW' );
define( 'SECURE_AUTH_KEY',  'C+^6j%kwB7r(L1Zo*HRLieS)C`(j?P%]x.v(X/OnKEA^57A>zlh8nM!p;p4lqEv/' );
define( 'LOGGED_IN_KEY',    'QPSLJ9Jq5z:1%RK:G[^%TmO0Zu:akLpgH8$Tqgo-^:ma6%Z~!CY7!3[f8k0`AW3!' );
define( 'NONCE_KEY',        'lRC;E#]K>S=8ZW:6yH`sv.s}2@}&ll$Qs-Sgo0H.oa2C$}O_KgnaBAVB{/J8$`qB' );
define( 'AUTH_SALT',        '200F%Z0=53G}zv^B4bw{AWBs!6#!axR.AAxrIEI,9#_2Co,c(lOcH%7r?U&`*)Ai' );
define( 'SECURE_AUTH_SALT', 'x?)Eax@bM2D^^E?`f/7R~)F6Bi1RtJ;?VdUP .o!yBn8+jSl+4ibavtnXXD#OhY7' );
define( 'LOGGED_IN_SALT',   'ptNwv~;e0.k]YU3m$-0vWtP3abSuhG@d>^f`!>/}e3#PdZ(NK;[~&]OEj;jVppb0' );
define( 'NONCE_SALT',       ' z~wUxJ-r^cn[F&Y|#:aa!e#zR[b]|0o9<_DfetS$>k(Bl -9MC{K,PyjkqkK(#X' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
