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
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'jt ab~WgA g).eZiFA.Jmj5tR>ffRVBeR8GHGRFHLPp9w ;D>V=q!@k_sta9rZ=g');
define('SECURE_AUTH_KEY',  'yS.+{*x4Z=n|)KXR-jvp,{-%E5u0gUUwo-0@6-&@jgFo B=HHD9zj.O#9D ]|8z+');
define('LOGGED_IN_KEY',    'tMW-g<Hu#f,!`/Q`{G-KTjY8:I.=AtrdK}`-V)VWe#;z.8=GK2/|2<dV@;C+d41d');
define('NONCE_KEY',        'A1K#[]9E-{joD:*4U%Hma?pXq!>Zn`=wZ_UU^R6kI?;~U7bYSNhiDM-&}nbQ:^hU');
define('AUTH_SALT',        'L6U<.b&Jlnu:|yUuqPez-hjH18 >=7,q.jRb3aGDVYk@JllJf[fH=Z3dWSoplD,T');
define('SECURE_AUTH_SALT', 'EeaU[dbX?Y;+S`JblT^XN8M1|HV4tkzIA<3+81RQs]|Kv$-b8am!9!L);|p^}|]C');
define('LOGGED_IN_SALT',   'Z+_g}cL&]Wt=[-neE!TB%<TleSnp&|0|c-2(+nrZ 4M!Wa^JE)D6{9]puno|sbLk');
define('NONCE_SALT',       '+k*O|Nq+zS|@.{SzmKg/e%b3zgD(0I_0uC6RY[vdE*GeTWg8-|Do,7eE*RPMMl!X');

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

