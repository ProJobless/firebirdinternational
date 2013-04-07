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
define('DB_NAME', 'firebirdspeed256');

/** MySQL database username */
define('DB_USER', 'firebirdspeed256');

/** MySQL database password */
define('DB_PASSWORD', 'sddfGrA45!W3e');

/** MySQL hostname */
define('DB_HOST', 'firebirdspeed256.db.10456739.hostedresource.com');

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
define('AUTH_KEY',         '+d(V?zZy8ZFA{u@+r_.V(BD35lbldX*J*wfX=w}po|exV^z/:]K;}9gkluW@}QR>');
define('SECURE_AUTH_KEY',  '&L-X09f[v}<`}C7]-F&l)ZywWjplR.glpT(>+>Y--H;$/[lNsPLO&O93*d|5l{R;');
define('LOGGED_IN_KEY',    'sOR^fcf(@J){rgv],o3J3ZBJs0jfCHC:0wa=e*S~C2XXPv/p37)3[aPa-7j9|5&@');
define('NONCE_KEY',        'n3m>PjF>[7(XUsYp97i:#p>Z}%FVCh3>H+1[SWi{|:=;)=XFQ,r2dC.(K;Z:&ut0');
define('AUTH_SALT',        '1i[<,D65v2Zr}]zX^`<8d*IWvSKzKA7.5FWMjE^jPP0}T7O-DUCG.4m|(YAs,&qG');
define('SECURE_AUTH_SALT', '))n]9-MncdVgxjBbHS`%c)[v<{u#1O7{)n,;!_aIBvYSO7P 3mN-jSQG%A#Msow?');
define('LOGGED_IN_SALT',   '|RB+;a%|jhLF/E0dw:Fni|wh!u4_-BEVFoq2 8oH/qcC/fbZxCACcB}3.B[E8o9 ');
define('NONCE_SALT',       '2)q%*|r*O^D;B!-YEVfM%AOdyEm R{+NBt@8?$)~^>+}Ds&-2 lP$[B~5[+olA|i');

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
