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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'UA)}W{A%&w.KhNrS|4P=)]QX@5qI]U=Cu*B3M+O/AqK_{+Y}U6Hu|[Xpb.rlgMfD' );
define( 'SECURE_AUTH_KEY',  'a#Fw`d14w%a /G@mL=ygmY4<b}UWP+Bu6s[T=M8EP*Z~{HzntrLNpR%mSBg?b_j~' );
define( 'LOGGED_IN_KEY',    'i*h8`{ZpypbOKyN;(rfwE&HWyF4D=ggFyg,#{c)LQ? ?[a~fpGr[$.B3])bNLt?N' );
define( 'NONCE_KEY',        'q&#Opp<gzS9D)RpsVBEjLZpj%uY_7Zx0N.2jKSfF8O3^Fwa;RF*7fo6E^w73s qP' );
define( 'AUTH_SALT',        'NbG65sShT!k2:?#p$_f}F.0-VVth|SjUbathZFX) E60t !{kcFj)[^t@1r|Mmo2' );
define( 'SECURE_AUTH_SALT', '] B`>tV=(lS0gehq?74Xr_y_;[==;Q{c0%23.Kr9w0uK`-l:,>dU)TMIEv>txxle' );
define( 'LOGGED_IN_SALT',   '^vx+V(I(k~|61oiw~znoBa$vlSqlXhR1F(=[E/N;:>.lesa66Vm#yttK5lMtsh+A' );
define( 'NONCE_SALT',       'S:*T~3IVu/ghI8Gm2G}V/^xd >JgnD)`ioj/O~-h7CQ!}~>f*xi]I^z;kF+rH9Ac' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
