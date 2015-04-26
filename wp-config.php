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
define('DB_NAME', 'zenstoreDBioiwi');

/** MySQL database username */
define('DB_USER', 'zenstoreDBioiwi');

/** MySQL database password */
define('DB_PASSWORD', 'zw9w6ITCQc');

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
define('AUTH_KEY',         'm{u.6P6{EXqeL*m*t<A#+;HWPz}F4N3NBUnU^jv,>7IYBQbrQfuy<3Io-[5@OdGRh');
define('SECURE_AUTH_KEY',  'Q$,37MbnQbr^fu,<Q3IXbq*{u*Egw|[8NcBRgsUkv|>7N0BQgJUjzcn$dt~:t_:D');
define('LOGGED_IN_KEY',    '1#SdGVhw-[5bq${q*EIXiLy+]2xDLLTP+#NYn@cr^,3JU7McnQfu^j3I{7MXAQbq');
define('NONCE_KEY',        '|}00BN;5HHSeel~#11DOOWVh:.IT2IXbq*{t.;E.2iLap+et*;Qgv,>7J}7McBQfv');
define('AUTH_SALT',        'ODOSht_EUjuXn7^{AQITjIX<q*{A*;AP2HX8NcrRgv!kv,47NcFQgvUjv,n7MEU');
define('SECURE_AUTH_SALT', 'p-!|4G[4h.{b6HuT*]p*]A_TiHWlxap+]tDSy,3I>7IYAr^fu,y.3IMbmPfq*eu.');
define('LOGGED_IN_SALT',   'td[5-[ZCOdpRhs_iy.m+<6+{bEPeuTix.m6L;9PeDSet3jzYn$>r$}FUjIXnybn$');
define('NONCE_SALT',       '}RRcrRg}r7~;9_1DS5GWlp~]s~:9_1hKZl-do~[P*y<2I<6LXAP*it.;x.25LamO');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
