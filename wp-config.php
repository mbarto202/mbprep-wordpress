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
define( 'AUTH_KEY',          'iF6}:8DM{`q^3N(Xf)&}| OW ;MNHLH`U8W!>M[nyk`o3[L2y^Ym7!cU)!Bh xlq' );
define( 'SECURE_AUTH_KEY',   '&{2hn).N*Y<G,!lLGoNj(p&`YUpukz;J4UdJ-v,P yR1dg*z xaFqK,H#N9XI 6&' );
define( 'LOGGED_IN_KEY',     '~;o9blB*lV}fp=fB4r5{iZO9uoMb|sjC`p^@FNH@e09cPy*1x74b|EvkJIyl2Euy' );
define( 'NONCE_KEY',         'DKF>&ggDtNe=8D.)%#`-w>%A;(q,Hlr^he[9DHTSy,Nn]F.a>z.b}sZlNT3l?<T8' );
define( 'AUTH_SALT',         'dFJ$na;YO.?nT+F&#$AXx/]X1uxf$FhtEB@*q/][Vu!-c+OPVUA^Qgj<{`5GyJtP' );
define( 'SECURE_AUTH_SALT',  'rVxj6$Z$ o.e:@FUD1x5R#>f7|)b^b4n6Dd,yT9#:G{bJL`BG<htx.b0*=5N.4)i' );
define( 'LOGGED_IN_SALT',    'j4xvpHJOKhiA%AC72`(2#Ef<Ya1xQIF7/4o1Fqv(xVo/Q=!RgmBO}].IA6UfJV{F' );
define( 'NONCE_SALT',        'zE< Yma;`z}qc_`Ct[X0Z](x^SA.#SB%uN>`+{E4&6lmL1+8M//r{g:Y]JP+DpUQ' );
define( 'WP_CACHE_KEY_SALT', '**blpW`{i0l=n`JNv?!D<}:vF>r_5rX#[Iw]qRpxVWiw/J?4~yM5Hobe0SzAaO0Z' );


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
