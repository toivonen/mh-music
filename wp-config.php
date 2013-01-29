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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'azsxdc');

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
define('AUTH_KEY',         'v6fvt[mNW):Cig87-28RxCg%@rj{QFU`*=bv!|a3=W>kl%/XejAY!<tj#xVu[X)$');
define('SECURE_AUTH_KEY',  '2IvDz2|Ey+h5q^%.c_uw[f/&!-qW<-bf]7bVT +xbw|yhHB*~yf{`uCquQHnaY6V');
define('LOGGED_IN_KEY',    ')IN_z2jaBt-~F[l!KUw|ng-`.IB9]{1&-+JVit:*L!UB<e`b(Cx|1|ZrM]}2JT(Q');
define('NONCE_KEY',        'H#/E1Kze^fx=Huf+lndk|zn1%D. wM4QDh-p,X4/&eP+^K*(`ZG+&b%}S}=Z-is]');
define('AUTH_SALT',        'wSO59pd|?Auji8D{LsjJLlH28+4QIpmK|M/LtuV|w%WPL+i:-~Q(f`V[JI.!J,lt');
define('SECURE_AUTH_SALT', 'Ox=bIT?6X<|%4KW4XHc9a?jr<z}RKR>;Yk@.v)K)tU/05C*N`p@~Z=NkEd+Qe~t+');
define('LOGGED_IN_SALT',   'hVjUO*bA==sNU|yzUT:<y%ev|fe#I#iK foQ]Xy;$!E;/)Pj+!6Wzx~YtLG3IpZc');
define('NONCE_SALT',       '(p_z@3w?8+HCi2]!$19=3$|KC%{<g[Q9^rH#-Y J?@{,eA.AS$O#K*UU/8:~Xs?x');

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

