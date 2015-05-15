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
define('DB_NAME', 'ammilis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Set the URL for the site */
define('WP_HOME', 'http://localhost/ammilis');
define('WP_SITEURL', 'http://localhost/ammilis');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2P=5Tk!0oPF,m$J}Q>d+%]!9p+BONl, /Abm|:!ygQEzt8e^O=7?U2k1WRcbWx;P');
define('SECURE_AUTH_KEY',  'ARnb~{mKf:EW%xg%SF-+gh#%pPqaJ:_mCx(GuAtEwITFc>:h~K-AC-B5kS@<IS?i');
define('LOGGED_IN_KEY',    '1FzB_z{;L.5.7|uX-3E# <rg^+TSsOGeI4qeWhwhM{_Z4;N:V?);R0!0}O:[iB8L');
define('NONCE_KEY',        '_@YdL`T^eCH~Z.88?+m1b|M[XK>d(kfg3whS9Adyy#j9vs;E[;h+ 64!+L>awJ%6');
define('AUTH_SALT',        '+XJ6Ra;hq@nNIL20xKq__E$Q<TFed}B2Nt_K&|II:FOAI-Gec;X*O[&U=byPwC+N');
define('SECURE_AUTH_SALT', 'SqSw{Ks5kay=b4+zaMxzyr9bQv~|M4Ulpvkda}J)0brYl>R5b{KmquZY@m`>wpkb');
define('LOGGED_IN_SALT',   '7ilMA$.bJ*x2e|j~=&NA.~9larakqKn~|Q-.]4M0R^v6(]th`;@1.H$UM*[Nz|qq');
define('NONCE_SALT',       'JT6@z 37e>C%`|n^U?:V79Y{Z|J8%J?e,0kzq U?Xad$-U}lN^T-IqYJK+Ky9@aC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpLLV_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'is_IS');

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
