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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'growthitude_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T!6?(:5Y^wdt?*ZHTt_o>:g+?S(zYKl|n>q+ZbMFZQvNGe9|4`#L^RWVOhqY6[R)');
define('SECURE_AUTH_KEY',  '*XH(G>LfDwrpUTn:|w2Z|0W{BMcBG[)yhG?:L!O[sup,?o=#h:MX/CtZSMMXMQlK');
define('LOGGED_IN_KEY',    'ahdM~VW`JsrD2[2D>%!C:oAv}R-kT^SV.1RP6s~E{W3/6DeG}n?aP0h$)qOd0e;a');
define('NONCE_KEY',        'srvWt~]{$Bfo7;%1M5tby!Y*D4t~x_>*]`;IE/8_ek=M-F_>wY`i&]y[c:2gH1QI');
define('AUTH_SALT',        '6)TZV7#]*+3O+`l4N7Y1 QNK:YzO:qwBY=yBud43Vlq@o 6H[ Ok@?6sd=fR{^-B');
define('SECURE_AUTH_SALT', 's[u#[9|oh6;ZG9Zb}:z&jjq5ou.b-|?DFaFo8J2/pw$)gzA%2d<A5P}])d;.,xc#');
define('LOGGED_IN_SALT',   'o$Jhz;Xs{aK$R$#LT$p0?P[*986Iep1h/[o&n]yRF<8aq^~+|i{iM$|azg^V$pXQ');
define('NONCE_SALT',       'm<q~(4.8.vF&Ok$D7hsPz4DDKH%H&mSp/EZw`+Y|{q#+)F{l:tc*KDgLOG~7U-j`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
