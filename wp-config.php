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
define( 'DB_NAME', 'wordpresstutorial' );

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
define( 'AUTH_KEY',         'dHUrDye|<X$Dt!TR(DZ<[8.|*sJpHm6GdjIX;pkwpY,=OPPpvr yxPp hh-ZT,wV' );
define( 'SECURE_AUTH_KEY',  'x)5h5>ETpJ.caRA.0_k&gVvywQq%/8kURE.8Vg1B-?!DgCrIBLo~-3ySRh[hNXXR' );
define( 'LOGGED_IN_KEY',    'v4aJZ,4=&am;iomXls[: Y{6X#5i:;f<r[] x;{z8@S;Hw~5[]3H/r*eT`NL,xA6' );
define( 'NONCE_KEY',        'GJ6wb6{D}&-&~b#2 +Ej[Lh+p9F~CZPhPo}O8N4,Z9nQ2YJBDjGskO=%iajHm0gu' );
define( 'AUTH_SALT',        '.mItTH_6bj.I@BaW;RS/ 5A8mL.<1E5taY>5v C.gtv)?+wx&|E01>-dMuQ,LSc#' );
define( 'SECURE_AUTH_SALT', 'fWYoi{7=drU4C.;/(0T9-k-=WDMzF]0F47$~%.x4[LDP#)x>Z]TtEI%#3FzCQq!g' );
define( 'LOGGED_IN_SALT',   'm#,?w,W<i&.8.C<m:ONeaXYn+DG%wh`mKm.qO)<0`!yY)+#BdT#G,#:JA.fL^FQB' );
define( 'NONCE_SALT',       '/XQ`Ps9}jwt]nG==Cmurni/1,#P&SUoX[?=h*8xm:^^:cIGSeQL[Oq2voY%#%&+(' );

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
