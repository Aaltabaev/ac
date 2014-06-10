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
define('DB_NAME', 'ac');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'Wo #IOtnSM,Vpu~;:Hp@A`2!KBsu|~bQc`}c*~AkfkNjbub2mWW~u:Za[y!aga~;');
define('SECURE_AUTH_KEY',  'yW]2)On}t;,Q-IypA~>;i(-LJQYbd|p4h>XZ ~KcZaEF_oQ]&_Ocdr@4}AY{)E4;');
define('LOGGED_IN_KEY',    ';6#HV&zra@%s_k)}@{|+rQky|UtX*-zt:v. w)aj2RFNT[,H ,+GF_zBx_{(2E0:');
define('NONCE_KEY',        '-,X45{I+>eIZxa<<Muys{p!O03tP+5 Xj7|S)Pw=SzwY-Wwt/tr-6J8N!+THq|=)');
define('AUTH_SALT',        'p m~vG4V|[~|Y:}X:&Zv HLze!<r:{OPtyMh)NHf8p-8uDux=ydsJSa$.Ocx#RFm');
define('SECURE_AUTH_SALT', '7HO0P5WMnyETG  &X:`AREwF$N:!7W!tp*2r]osa>t-;ckhW/KS+TKf{?05Ov#:d');
define('LOGGED_IN_SALT',   '^LjXHPW>^e)(.*;K|af&<?_rR0T .KM.`8fJyzBU;.c<gw_[BfF..O+d%y!60pn%');
define('NONCE_SALT',       'on%Z*>y)R{ieP|=LRm$=+fvU+gm=g!Wmm#EZhfXcRpVFXePDiJ95D3$;Dyu8+17j');

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
