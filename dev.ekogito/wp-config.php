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
define( 'WPCACHEHOME', '/var/www/vhosts/ekogito/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'dev.ekogito');

/** MySQL database username */
define('DB_USER', 'dev.ekogito');

/** MySQL database password */
define('DB_PASSWORD', 'enqdE2Mw76GGxqE2');

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
define('AUTH_KEY',         '+!u{#Zjvbw.t]>!L^nph`z$)*Hyo15(~t[ZS7nv),4:g_nG15$G!OY #n0DhPV5;');
define('SECURE_AUTH_KEY',  'U=m`2nXNYtT.KNO_(qc/TC$*|-_-pO7=H]AEx Jw#H%G3Rg{?C7pN~Au%6M@I#T(');
define('LOGGED_IN_KEY',    'SO.#[eJ~C#I;h} /*5PXtn`)>Rh,W;gA9+7?McIA($nDY qj,B 7C8-rKW#4AJXB');
define('NONCE_KEY',        'oad:Wo%ZwdhnX5Sbnl}k^Ugk_ {gu_|`Z:xnI+xU?>CNz]Xil|S^A$/0uJ@h/SnT');
define('AUTH_SALT',        '@] HR2Bq[Au7I@^IVnL*)x|#m*;XQ0rW1(N$+<}7JSQ#s-VeEL2{v7^*}.n!YCTQ');
define('SECURE_AUTH_SALT', 'tx+Pqn}.Z:qN7mFEpEvL{3e0-zD<~:,`v=BO-E@ KM&ISSWZ}D@z#e/FUrS.+l&u');
define('LOGGED_IN_SALT',   '16R(p:3vvN2d;IR2%K/OuLsyEQ!KNlf)}b cykb&v@Nw=?r7oGaaC@!Cn6F!?95M');
define('NONCE_SALT',       'sdd-iY#*8jzmnh}6eKx//Af0Ki-Fm1lgtm.;6&2uPJi`b;;o94U0jnKy6}}#U(dA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

