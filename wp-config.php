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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define( 'WP_DEBUG', false );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bloganac_blog' );

/** Database username */
define( 'DB_USER', 'bloganac_wisam' );

/** Database password */
define( 'DB_PASSWORD', 'hG66^RG75veT' );

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
define( 'AUTH_KEY',         'vX:/KLvoFF<9-hFkkk~#l97*[q1XlqnH4+n/RT-$_5gw4-`k%O^iu0q7$#&@>txq' );
define( 'SECURE_AUTH_KEY',  'd}5MEq~Wqu5C/_J,:jNJT.xo7,+Kkh4_{ZSV@ub9/*SmLP(/_EGa^d&3e5COSiy/' );
define( 'LOGGED_IN_KEY',    '.0Cix)hU1i*/@pLAzeNwC$$W*S>Q1x<]%$PNVok{q+w%_V1LwIZM4Gp9T:zQd,%:' );
define( 'NONCE_KEY',        'TkVujD2+L{v#->G9CA$Mm[f>zGKuI>#u_`YKn+:Vsy!FavAF;k.:]S<QX$aA*Um-' );
define( 'AUTH_SALT',        'M)wSA^lj@q+!yM6N#k^+2 9$zLt[w:P6/t@,v8K<h%!RT?N@Rek9ZsZb2|a@GKEx' );
define( 'SECURE_AUTH_SALT', '`|+!mCwLdjF[1zxyI-xRHOoN9DBM3z2e&wCNHv3aC[nd=yyeZ|%Pd@44#v?L+!wP' );
define( 'LOGGED_IN_SALT',   '++z`YEv5 3TZl=%0HLI@!=;d*/T1u=mgjWGSm< `tiLeA<r8`&MMU4*[9DGobZ^P' );
define( 'NONCE_SALT',       '~hfGKwf5Hks]`Jm&({TutaPjTHUfPR:a{wBI:$<qB~u[j{`]pl]q,ylj`l#K.<KZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bl_';

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
