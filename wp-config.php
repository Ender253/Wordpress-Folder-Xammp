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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proiectdb' );

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
define( 'AUTH_KEY',         'B(Th?fVm2zU0foN~e;qXk*%)kx+u`T7l0<G j-jW>j2x@!iB%NZ{^r^qn}|-&88T' );
define( 'SECURE_AUTH_KEY',  '&[L3:1BMMSPl&#Q.L ,TaLN8Kgp[1:|q8,{P7>.C,ZDLUMyCa<Z]6e P(5a^s)G#' );
define( 'LOGGED_IN_KEY',    'OaGS*)VskY}7JK+jOq_$T}/:JsGOO(@cCdn%hf%]W5v7YLAtzbm:?f`dkGe#6)32' );
define( 'NONCE_KEY',        'c>*+ln/|7/4)H!gph$lTPv.[:^LFI4YwPi;osMt(ez^:2vZ 5/5D-)Wd?7_aI8Nc' );
define( 'AUTH_SALT',        'eQG#}uIZ$M]_t~BOGj;<e{4bSwSr.cZ&;yQr{@9U~{T JJ&%412>iyV?l9d:,PkJ' );
define( 'SECURE_AUTH_SALT', '*~S{z^S9G83VAL=DNu0?#i6#X@+ZjF @ BwNXKTf+Mf#GV&:0C1p6t=*%-?Goz7a' );
define( 'LOGGED_IN_SALT',   'HTf_iF-(?zyn?:h@sY!}eY8K.tX5tdiG9Kh}9ueZ8hcCR.^U&CKG^LM1xZ_GEOra' );
define( 'NONCE_SALT',       '`Ae8,g+`uf>R[|lvB!PZ5k4A~/LX_vyUt]]r ,ts)%6-[m}-gsX7h~uW:YCahJ5S' );

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
