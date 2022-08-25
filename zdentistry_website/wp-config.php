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
define( 'DB_NAME', 'zdentistry_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q++14> 1x*iYqlu/U?hqB9|?*;P>+Pqi=}7%>>Gpk1v2NMpaLS5,6MEu7xwmPu|s' );
define( 'SECURE_AUTH_KEY',  '.#L~<V$1Tf:1dS^:jUWBSCPA#<+(RFprONCJys4$BrvP>6A0iOQ!D%KO0[,&bVj,' );
define( 'LOGGED_IN_KEY',    'M?cse?C;~`cSis<MP<bDG!em. UFN!Ud~HO-2Dxaq>&aNfgf#2jD2zD~eWN46k<S' );
define( 'NONCE_KEY',        'r%}</Triy;`iWc%nU{v_@a@oh(%an=i=eW8bweeEgcbDL>@bYOhEZ)|/dz(-AMyA' );
define( 'AUTH_SALT',        'tSldU(A4]l*JC2ntWG;.8SCXc+>*iJSt]`$7MKX`I1E 3c?0f:qL$<uTk0Z64O!/' );
define( 'SECURE_AUTH_SALT', '6&J&q-!d/vPhnTgv.@!st8}+p0{+-&[<y^Izk,a:Vm=(: pBaDxMFj:mOsIsEcO$' );
define( 'LOGGED_IN_SALT',   'gLUgZ#=]SLy5O,?Pu$zlWvj792nVi,]x/xgY1KJ%[rEBleH0z?}IAk(#- ICF6!4' );
define( 'NONCE_SALT',       '.@~I*}6&~Ljs4KEk2T@3-b1K(~wk2Rp-:cNUUcq.7|tr^x5/`:e]ZvENT+mi;]nl' );

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
