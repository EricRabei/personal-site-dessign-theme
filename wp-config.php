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
define('DB_NAME', 'ericrabei_com_6');

/** MySQL database username */
define('DB_USER', 'ericrabeicom6');

/** MySQL database password */
define('DB_PASSWORD', '^5mFKn*U');

/** MySQL hostname */
define('DB_HOST', 'mysql.ericrabei.com');

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
define('AUTH_KEY',         ':Ou()H?+m;P^psFr+%Wi9$?zwsOEj~SLGR:(+Cj%aHqQ"mxkAk5h?1j3g%LW/L7Y');
define('SECURE_AUTH_KEY',  ';ZaA@|lE*k`WuF#ZbZ5!Fl&Kr7@56QU9"YhCI7K+qu|UV"1ij"y*6Lk+Tyu(`8at');
define('LOGGED_IN_KEY',    'TaB!J3"~|(j&jr^7#BL(ZeCZ^AtWulw(96VHvB:6Rnk8jFNZ0YNOhG28KdphMo`/');
define('NONCE_KEY',        '^&gKMUSYRe51$xcXrqk/pDXFqUMXs#_yQqmPE5%XHK7QWin1qwqSN:QEEFpSYeJ|');
define('AUTH_SALT',        '7pZP+W0N|wvzqsFoe4A0zbAQ!9uSDmoN1X*N*Z_vIC(5vz$e4o:U&(@YLZV@3`en');
define('SECURE_AUTH_SALT', 'KEfu!rZIx93WK|Tv?9v&R;JDwHZta~H&daz5YlXwlvs(j5+qX!^dzjrIi;Ij+B$I');
define('LOGGED_IN_SALT',   'CY#t;qPQvvb2Bv~LY^^vDOYKR9g$6hthY|Kh|C+mHU&eGX5&K@JICQSpX$Y6dVWm');
define('NONCE_SALT',       'F2k+89/Y&a!76gE3k_iRO(/k1ad#D;18$vwu/CiquNJ+e3oWiFWd%h*AZ7oCW^9^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_hy9vq9_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.ericrabei.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


