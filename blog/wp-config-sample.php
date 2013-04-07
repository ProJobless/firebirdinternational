<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Wb*u9L+44H|P@^CjZ6^&G>ZR|L)x#EDr2%yw>PV h4-VJkD><5e5m]n<r!^CoZ$/');
define('SECURE_AUTH_KEY',  'L*p@@>Z3V a3!s40q6zqZzBmm%=G_YhHd*=-Pl2KcQ&jqCf9^$v:!w2H%$Z)g_^1');
define('LOGGED_IN_KEY',    '~2(FDOPm<qnK?Q[}abI`(,UjiH3?{N^^o#CA9<ecw){>oeUX>Xe14DiS B+! UD[');
define('NONCE_KEY',        '6|psr_Zm0v`m]@5l#cR38;5~8yZl-xU]+C!M+9=)6V LVUdGziTv[gvyS#=Bm}J$');
define('AUTH_SALT',        'a+Mp8ZhQa#O~6;CsaC!pz4#t=*-56T|+}Q!(/tjIG!%3NG^B!}q)L0aSwf*B3[97');
define('SECURE_AUTH_SALT', '^Yp$kX!wSrNI;e~NW84j/M)^v4,Oi8C>j1V/B)!zLJl&mn:O8TP?D?5yu@xP09,t');
define('LOGGED_IN_SALT',   '<z!Gg2%VU$P4HJ:e,I*?-6WpH?`jK8eAyUr3VtMgo?:&`Zn^^8G$z.n(]ZKGdkO9');
define('NONCE_SALT',       'jLp|}P[0S*#jbnC~h=VSnkuffr#bXmtCsM>yaS?!Ls?y9on&oZ>F+(?,csOD5E0u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
