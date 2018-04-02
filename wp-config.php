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
define('DB_NAME', 'wp-bds');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '091216.');

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
define('AUTH_KEY',         '8 zk@^u2He=MnQT@Rr8LiBYz.rS$RE&A2ak_&.pr)gT[8hqsUa@1@gGiEo=:,0<L');
define('SECURE_AUTH_KEY',  'Xyx^)r+n51xnPFy#_7:{HT{(:r)#||sl(K1q-5Br)8O2mz<fD@?E89U3:Ce%{!:a');
define('LOGGED_IN_KEY',    ']Y>WZr8>=19U[7Z|PY:/ /CN;mFyK:wU Z$@td^KH^8zBQ!=qFtaky?wF<tMBX@[');
define('NONCE_KEY',        '0KTLcJOVWC6e%GH2%_(}bE3j**tme.o t9{_6JH^GxkF>=CbW{X@5?!VfO%M<bI*');
define('AUTH_SALT',        'TNHlW^f7lvW?rhO>lh|TV+F(u]sGkErR-D)}0x6h4gc(]Y_D=Y#T])y`@[q(/0(c');
define('SECURE_AUTH_SALT', 'dx[ayJc*w;)>Iy&h1 M8Saaq*ZLod-j_.0mDY$J:Hu5E4q7!&a!|aqjZ[I|ZE2o5');
define('LOGGED_IN_SALT',   '~4frtCa$$Z@Pij/;f$g[Iu_sIF@:O)n8gCSB5-ckH )y4|tufqhu%.Q;K2CjHpIA');
define('NONCE_SALT',       'ObLz/`#{mTw~n;zrKk<&OL[.i#rv%VWJ%xHY^Oa^;hA-DAjG#HCfbv#<]gqvGn07');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

// ////////////////////////////////////////
define( 'WP_MEMORY_LIMIT', '96M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

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