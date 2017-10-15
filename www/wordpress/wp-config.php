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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'jQw F UUy_hpJE.<:7Ja+~]nmSU{K0h#6.@3)LUj[<j~[> 0ya9#ulyqEzUxI?wh');
define('SECURE_AUTH_KEY',  'zLklSTk7QmQ#k=KUA`t*PQI|eFB@~99y6wig{3h2y(f=U@I~_7Lb8DR*B%[Gc(U%');
define('LOGGED_IN_KEY',    'U+7|}*7tTWX$1qXeK%>8HX5ySw6&VM;IwiL|U+qmN~4g2U8M^(S|! :s)tl75y1O');
define('NONCE_KEY',        'z{$d=C=ito]Y](HnTl6K=6w7V}t<lXheFrw9ZKElKl*0)k_*OM76)6 4-x4gl5zi');
define('AUTH_SALT',        'O;0G=C_-/TGQgNsu?%oXi`)*qf~7_gJnE+!$%tO+/)E$ex*1)eTi|Z^gA^*~RP|v');
define('SECURE_AUTH_SALT', 'n|u1(39bKiSP&XN>^`4GW*;]h3&IgSz}b?,Ffiey Wh^04@<.mbitK{Po)ruzpQk');
define('LOGGED_IN_SALT',   '&iy]S(Yf^macK`2VPKr]iTY9x*Nc|+IaY>6y~%x.1GD6,`2UQ6j ZAG|G>@U?Jw~');
define('NONCE_SALT',       'f3 sXa/SwNeD0gof%=0;AfkIDiZ;]qQ10pn2Wh9*iA*eoGE<aSa(%+Vb!30S4#6}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
