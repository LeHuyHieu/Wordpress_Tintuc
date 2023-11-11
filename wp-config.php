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
define( 'DB_NAME', "cuoiky" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'a.gE,53zO_Yf)XV~ T]R1{gW(;`?1}W;I:[~zO`GT)uTQFmYD>5q6 ]tp<wf<:TI' );
define( 'SECURE_AUTH_KEY',  'ya(iuMOF3}s(TNrzqk&00+n8]Tibs)8o+F+C=-ePR,=u*bls+IBA}Zyz};qL0jnm' );
define( 'LOGGED_IN_KEY',    '=U[eucX =@&5Q_{CU[Z07>VDvvE!c)eGExk]n|3q2W]dw( ^V[3r}65.t2r}:`j2' );
define( 'NONCE_KEY',        'XeX|LBU_/TW&S@_P4%m/J@kb2%`st3[Gg&v9vdT7bld[qU1YK[(+Ba[ _|Zh4Jw`' );
define( 'AUTH_SALT',        'BR}Enuzge8P*9tOFs7<K9Q,w(*ft7!MyAkNqexB&*A@aiebB=z/`WA7IABPv1O1t' );
define( 'SECURE_AUTH_SALT', 'b}?V?R/MC@Ikh?)J8ZI?DniD$};zp<`wpx@d|>Z.{+L3bb>3z3BB*WI,L5#qf4=]' );
define( 'LOGGED_IN_SALT',   'K+U/~*[hU&[v~fsbA%M];J&%19z9[U.~X(0XZFJw&3hC;W%`;`_0i;3)b_CH-V_`' );
define( 'NONCE_SALT',       'VfOXCAIF}9zQ_>o=|j@Q}Nmpg6T%/k?5Mh6z};K-yQ_%9=c@V5@NX1b#T0f4IgER' );

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



define( 'WP_SITEURL', 'http://localhost/n905/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
