<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kerinci_timur' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2>!HwZYD>nUx6KhE#pxaLUUwm .!>1,Q+IySSba6@cXJvaFAL{}h045:O^Q[f(=5' );
define( 'SECURE_AUTH_KEY',  'ixS.:R)}VJMe^,;8bDpN3lI9_Zu?m%@::1(Np_|q;VL4rV@WuZX6A+lGNbG0|KrP' );
define( 'LOGGED_IN_KEY',    'OqpP.5r7/mt%r.4`F:g,Z>irnLuP#UAZ=,|ZJ$a*:fA$:W6?aYg/_UW{q2i]x^/u' );
define( 'NONCE_KEY',        'VgoQ5TT?xQN$]%XWC^BS.78`G-a21S.c8}w*OBz.-m{b^A:zH?^?-iZh{ 1m}=UI' );
define( 'AUTH_SALT',        ':8yY:K7PG=O*tkHwA<y#nncP0E$;,Gg.?k2(tORZzUp( #6=|V];w878rZN^WY{y' );
define( 'SECURE_AUTH_SALT', 'P<2wu.?=ZwoCKbQ0|mN7Qc{z%XAgcwB7BuAAq~uI}8I6N(2M27A,g3_}q.1N #J_' );
define( 'LOGGED_IN_SALT',   'ekH5Ns@wKW0J]QbmEb%ks,*7)mTIm*DdbopR2<Eb?gQ d>`rc#zc.yz0%?_[sU&(' );
define( 'NONCE_SALT',       '68faP/+OY+V8jwiH=31?a`L||4PMkEfo+iKeO1KV1]|i#`m[G/d7zkq?o8t znK=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
