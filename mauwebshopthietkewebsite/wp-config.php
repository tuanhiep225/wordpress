<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define('DB_NAME', 'bachhoa3_1');

/** MySQL database username */
define('DB_USER', 'bachhoa3_1');

/** MySQL database password */
define('DB_PASSWORD', 'eeyhGHBKvU');

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
define('AUTH_KEY',         '*04-YYom0f&g.:!qW+x9o=y;IraIFM6Tg-bU#>}v]vcG])],s}Sn53/$GOX3:|Xi');
define('SECURE_AUTH_KEY',  'l@XDDVmg*LNyvZ%,YZ:C+7Y.B6?u -,$ku~2M<Q>?(Lo(n}%>nPv@#|@F(J|my[`');
define('LOGGED_IN_KEY',    '&$yVL*^AXPyA{^:N]!u[%/V2x;YAa{;Uj[<{AX#d.=AX$WDw)8g|_4m>(%4 ,oui');
define('NONCE_KEY',        'oA/S>ajHjp|ADM~<vkJ;G81HC*dQ-P=z]bgL0^@mXpnqqqMOJ9^T(rw$r;%CIdC|');
define('AUTH_SALT',        '}{E;B13%@>o^N*oe]?1/s<YGs8_MVfPRs|)H|x:G{rR$n5DOcFO+=4Pnz9r7W$CZ');
define('SECURE_AUTH_SALT', 'x41E$.t$~6K0m9#&?cL;n1Ig{umaK`mnPm0u.OT{<7n7Z2zQXs9`n%zUAg9GC*di');
define('LOGGED_IN_SALT',   '>R=:k:[szCBQEet>]V1X1N/s:?(f#87x:Ry+gU.|gg[*5K</VP8QhUw6xQ$.FenT');
define('NONCE_SALT',       'YMw,o|`L:JA/S=Ul4|HyFbasNmTS+4aL|_)lZcKtkVRuIJ(ppX~nD/xS:,U?FY=l');

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
