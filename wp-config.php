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
define('DB_NAME', 'dekruipruimteexpert');

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
define('AUTH_KEY',         '[^,#sGcN+[>1/VIU?C4mQ8foqHI-|cMHLGRx`/1G) rr2k6)ocLeuK#?z5 #wP` ');
define('SECURE_AUTH_KEY',  'V+<eO@Pu5nb3YF#&w*i[Ae)8=vT@_~B!0~FmNabKm^!J^I*?ovorxz0JA!nmdF5$');
define('LOGGED_IN_KEY',    'v8Y<}V*%Zs4s/y5V.qDwkKR++z,a7X0u_+<u-IL&-?YK^1ZEK-Y^al<^/KR,I|qS');
define('NONCE_KEY',        'fKKvlA`W65GpKy.0+RaOKmCdj4h4C`%oV5!QC?}xplIZ%@DF{qe>?@}9`<z+aZqQ');
define('AUTH_SALT',        '/}k j{^b.(%Ouh<n:0JiUx6AJtjM/yZ<J2.en0@ExXBa:p$mr7BpM7DSe_Q&xD9$');
define('SECURE_AUTH_SALT', 'GQ?&hJlN?=3C +)~tTlM&we4_%wW!LUgAT{ B`Fuf$`{6p1F`3m.<YJ>sRG$U%nm');
define('LOGGED_IN_SALT',   'o-)&4}3,bGtrS%t4W`=#&9xC[<pv>pb:OdGo_HW#4hROkk#.zE`|SVFkPMKCXs>?');
define('NONCE_SALT',       'XN6=TeDvH&3uNbnmFbjRLA1z7VwwVCisi}lt3AJ!W`TC= 4:{}3lTiMEYtZ2^cvl');

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
