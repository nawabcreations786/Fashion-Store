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
define( 'AUTH_KEY',          'MB9yPb.StcpCWxuAypxyAsj;(e}lS{V8D>%NH>An/kgJp6bB49y/>Q2b<V!CTZ~J' );
define( 'SECURE_AUTH_KEY',   '=zg}pG5|&I$Ix02h197N{+RP4gnL&gj^4jtC8RTEsU^+;ARr>;^!z+T^Q,8Bt]1e' );
define( 'LOGGED_IN_KEY',     'zwuF]Kc9(hz>w|g9QZT6w2-?/H#4gx28Obay)ste47JNLvgO+9WaDF:/Y|MfPM<(' );
define( 'NONCE_KEY',         'sPhv<C4eh>}Ze,<_~p{?5k#hWOqYx;Lu]N#v/$,l!kvWYLa}P]z|)GGN@o}a!6N%' );
define( 'AUTH_SALT',         'V0P6SL_U&-Oo+Jp^tso4v9nrqkHTctZ+]QZPt}|D=m?pSS:9L}[;Xd}/DM;N{{3R' );
define( 'SECURE_AUTH_SALT',  'ud4G{aH`XnH2^/o,3X^8~a}B7(8Xe89FZqHKX9=R)@nsM85;Pt14t(VdTEr:TV-^' );
define( 'LOGGED_IN_SALT',    ',nC8ftDSjC;):+7rRSr@m~D,WUjp#GbBo?I ;w7;8$T5LvV<h}7*/3o<`m}f^#KS' );
define( 'NONCE_SALT',        '>#G/+Z%orjXy1^5?<Z5nUHWc?{O@|@8cz.Ij-z8#rz[ZR/L$[gQx#2$Qn?9z^)>P' );
define( 'WP_CACHE_KEY_SALT', '1|AA1b_wJ;xd 4Mg7UH:b|ZKxEP)ro.ipW^A#$}eYh%~*yzYQ}dPPR&H$UZbtU4d' );


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
