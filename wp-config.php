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
define('DB_NAME', 'hds_wp');

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
define('AUTH_KEY',         '&UVFgnFeDZ:xZ{mc }%u]V0Typ?[5DT|ZpIQ+jX,;fA~$[Q?RNyUbzNX=/?q*Hp0');
define('SECURE_AUTH_KEY',  'Pq}ULyupQ{R8=0`zxCkI@|KGKV|4#Y^3S}Qz8Cnodf}&Oe <Q%iBLab3;$DyHiyZ');
define('LOGGED_IN_KEY',    ':zipLV0DZh+cK=4)w@<+fw LKrFPec~.wh>vah<j^]FECwY6Sa0E29c_~T?4?qVW');
define('NONCE_KEY',        'Cswz/RIs=}hpz^)b>8GCb&@-OD/^@F$i.a7V3`Q/F-.xC7,B,!9wTn[)I{~X(9E-');
define('AUTH_SALT',        '15%ie#yY:/hVLNqb#cmOsPOy3$d2`vWux[9)xJ#AvN$ppTmrbo;>INT,6?-+10To');
define('SECURE_AUTH_SALT', 'Ne;WS-|$ A[msLjk:E!FB&{b-T4L-kigcA%03/Hqu{/eQOOuc~O=YzEL,-i/=bIH');
define('LOGGED_IN_SALT',   'ar,e>kr?|5M,X/T&I,,gI91b$wEgNgZX4hg,R+5O.w1^cam_T5}4c>~jcTYg]3{d');
define('NONCE_SALT',       '.Ud[w*U}zs`)H6eYTrPs7mDmJtayW)/!b)<`[BA2Wo3Kc?j0q9bn8Lt.# b|WU8T');

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

