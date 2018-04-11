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
define('DB_NAME', 'gnp');

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
define('AUTH_KEY',         'u>_kl6M!1Zm#y1f>XwCuD1p.g?y7*WFDl4NNr?XTV&$RjVAq,eU@s)/!>2{>e#d;');
define('SECURE_AUTH_KEY',  'jxj;xgkb7F[jM^iM+G&yNbj#n;WDk,@Jo@DIM)jP^#TQRT(VZL6I:GK=)4B,4W+)');
define('LOGGED_IN_KEY',    'lEo3M5z}Fcd, IG4C-V&TN7H^1h.Z%75&W-^Fyag5y^F|#dG!_(qH?`*}Lq;D!/*');
define('NONCE_KEY',        'r:O)%|D:WKUfJ(!v8=#X,C5LL[iDpm`i/S)[s}VreL 8_PvC0N~`~A4)Z<BlRSM}');
define('AUTH_SALT',        'KdtMsJ?S=XCjjE^m2sK#|z j%+3GR)^fMlyI@o`}SL7c/{Rjte7.ek!8j~n~24}g');
define('SECURE_AUTH_SALT', '@HTm]8X[68V{W=~%_>F=r^!%X5o(vgHZeO%1^Oh&bU&V^#+Dq|EP*,K4}g4lng`8');
define('LOGGED_IN_SALT',   ':w)gR#9[~6tA)(q>XG?oaE&4FeQ-DHBBWb+o@j@91+/[9/ypI|gBH}[e!@;dpv~1');
define('NONCE_SALT',       'MK*rYYcPk}|yk_YrSZ:+aF8xOaUtZQ.`CKb>wy3+1``4b>%:g&d61d4]VtJ(];n/');

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
