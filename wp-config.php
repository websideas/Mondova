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
define('DB_NAME', 'mondova');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'm`1TuJ=}C4ui+g8h}xfEG|w*9A=z}NW]RE+;<%8 F3w4mkh|:jt`5aLYV>=^+uXG');
define('SECURE_AUTH_KEY',  'y|DPrc~+/8[7J8aY!>W-bip^-*,X8`zUtHF{+esA-d,yZX!74_Gt+:a-Bk.p_ICJ');
define('LOGGED_IN_KEY',    'wC@-&MAP{iimb390>>6y4`rMZjWN%:gzSw~7Xzkheui^!zJTUIt.*)$ V0[[goxs');
define('NONCE_KEY',        'ByV4DcVB7]CD_2W8p6slUQSwOs0$T}hF2sG`s|/zxC4vdH^IN+-cMS2_VqK>V`#w');
define('AUTH_SALT',        'N:i#nV9;8GCpx[sIDLjoMRKT8yya#vkjdIB{W!Pek]H6+ahUipIai$?T(8+LQ}#Q');
define('SECURE_AUTH_SALT', '-{POp0`Xl]!bm[r1{L1(1:9+jt((]yM?X3d%L0]{CO2BGE~,z%*-Xi51~:hJc&O(');
define('LOGGED_IN_SALT',   'g2TdlFfapTK$zIgPFxLef:| wKTi1ZQ+EnVfi=pe:4+&f=JP}a(&oxNzlGpmv:eZ');
define('NONCE_SALT',       '&y0i*$]ur{s-aL+fS[(4$(-ZOuG(Ik6YM&0csZu=2o{|mi+?jL}#:sv(gl|%YM,b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mo_';

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
define('WP_DEBUG', true);

define('AUTOSAVE_INTERVAL', 300 ); // seconds
define('WP_POST_REVISIONS', false );
define('JETPACK_DEV_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
