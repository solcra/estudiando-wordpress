<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'prueba2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0[Nq~HOIUb=d@J 4TYUIJ=1B^AMz!#IZp~0Dg?1IXr?zYTr)1$[=?BgW+ENwBSR>' );
define( 'SECURE_AUTH_KEY',  'DxF]l^o]_>bm>.pB.RL;=V4(975Kb)t4dbMEl@P^n+c ?mrj(#OJ(W<yvS8c>~T!' );
define( 'LOGGED_IN_KEY',    'Vx@vYDI=<kx%<ZP@MM_j[;h}R4-3FO4@qDJpi]FT&mUq_~cMwt0`A4#-E<LU5flz' );
define( 'NONCE_KEY',        'xLZHxL>X^RiuX]#qRIE3$51FAdY;nKrq~,g}+wL#+E-g8S%IY|Trb!TFT)?Gx`S=' );
define( 'AUTH_SALT',        '+9C,+CZxO?ht:^B i[lYT{=5g_y-K:p<#c@1KAJ8xua@g*K++^mkOgc~v4@F@USK' );
define( 'SECURE_AUTH_SALT', 'S9_OXN2u#-q{H;RV0XFD!oa<6``nE!Xa<0s/utO: eqrJZlS/O6iE:IX7@gxbRL|' );
define( 'LOGGED_IN_SALT',   'c^9HOsNC,Q=iKi~l-!VOTv3tyUnG@2-?^d^zQ<aM@pc7s5H>^R[!}2,8a[|dC:):' );
define( 'NONCE_SALT',       'p(<fpN+P7:!e^4?qA LIyj1Zyh`)=c2trykdK(q@Kfq@$$Ur9/nt-quzu1` tu1k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'prue_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
