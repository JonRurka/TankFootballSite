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
define('DB_NAME', 'TankFootballDB');

/** MySQL database username */
define('DB_USER', 'nug700');

/** MySQL database password */
define('DB_PASSWORD', 'f7V9yCRKnEssHb9E');

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
define('AUTH_KEY',         ';)(6cY&Qj+K$w]Y()VZ1OV-6G7?nw!gRL9v)s.>|ydL6Coflc+In:7h,g_od|05N');
define('SECURE_AUTH_KEY',  'B(<PP!T;,2,y9_,c#lynlWs80NGq6k+8-6?wY{e,rF`yE-3}N1Ayipa57uF<mOw}');
define('LOGGED_IN_KEY',    'ttf5LCKSt9-|=xePTa|i=R@u^:l*6$z)NbtgrNJ8_aLB<?vJ}6Hn{:hjz(=hrX^M');
define('NONCE_KEY',        '[;7UF,X3`^?zB|-(/^Whsw}r_G$J$wiHNJvZ$A4m1-s;9b877?35>o,|FvCP?Voy');
define('AUTH_SALT',        'qk;y5shrB0re/J}J#).G~|3G[e-q%YwZ``u|f??h&cjX:leMNmk(X45 CJ3pHzvy');
define('SECURE_AUTH_SALT', 'Sa-MoO(a55+;4Bl?S`5OjE#u}}O+ekYq,/-;M7p+I@oK1{G8P|3!+):{+:#NH|HN');
define('LOGGED_IN_SALT',   'NT{*.a>YyeVbV-nSO]H<j+]c!(h<]U ,yZ:0>9)Sk:@X%_-HwrGz&3F/D=X*v{.E');
define('NONCE_SALT',       '0e,-I:5uTUsb!Uxy>xq+xWC^RM,Ub%OvK7QC~!?)6Lp%gBFefQos7RxLVe(`?Xdp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tf_';

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
