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
define('DB_NAME', 'ai_db');

/** MySQL database username */
define('DB_USER', 'afr');

/** MySQL database password */
define('DB_PASSWORD', 'Password11!');

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
define('AUTH_KEY',         ']Mm=:_hdJ45a9ac~,k?#P? #o(+Ei<B,%%M Qxjh z+3f@Nf%xwZg/YcrA}jsUvE');
define('SECURE_AUTH_KEY',  'ZKgCY0x/RR^ye|aEAUL=pT9o;EQ7P:(MsIZtu!(X()O1KB{(z-Cv@vAJ.uY4BtK/');
define('LOGGED_IN_KEY',    '8/<ZrW}rB/=nv1f}fM$E^mu`Q-NIt3( p*p7?WNT|2h69P]7-=.@-iDO180&(O`^');
define('NONCE_KEY',        'Go;fcy$(|H-sg$}PpWHN*]hNa^|`PE[=~&?[@MMh]Skq}zWY _j:3TZQdPp3R-nV');
define('AUTH_SALT',        ';v=7c.}nhGPp3E4:Bj/.[ M+6C`BE$$Oe5X<)LG/6ymX==@^0sTR~pcq::F[)q,v');
define('SECURE_AUTH_SALT', ')N./eRsKiIDzLj8|R1XKM`F-n;}8e8$`q=J/t:F3bl$qh~1TfE!ydJ.50^w>,1O!');
define('LOGGED_IN_SALT',   'u/gdJ)&M FXDCg%d.adeFN?UZC!P8vYSQ*fB?%{]GjxXM+,zCTWCS#~c6b{Md)p-');
define('NONCE_SALT',       '1[w(JbFNKaX5PV!t6nQgJuC|,>h8kI&}QhT{`8SlQ;r<.oTO~$%l?<E<Yu6lsWx/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ai_';

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

