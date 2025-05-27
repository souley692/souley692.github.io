<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         '`$R953sW:pjn7R|Vxy+ZWho22+biJQI[-AYes@?(P+`Y:u!>4uh*W9K`XY~.{h8-' );
define( 'SECURE_AUTH_KEY',  '*i+Q;`!i?~_!6!XoPE;fHPY=vP;9%+nAV%&R ~<p6_51M)bS>jDyunn4&T:wQPpB' );
define( 'LOGGED_IN_KEY',    'bv_dLZ)HMgcC;euTV1qJgOs5oa]+:r^!yipvuXV_;5#W_083(S*>)hMFx]y_=Z@(' );
define( 'NONCE_KEY',        '/]BpG(;.V+/gXb3:$w(JD G>>~-FCsXf1gv#.`yyNdI^4l(t,64CR-1|XA9LrPr,' );
define( 'AUTH_SALT',        'VL%se{=TgcUt)=^;^2jmhR>HzJV{wO>n-m3$$M+3z2t142N.F[OOF!Bfqf.=3}-7' );
define( 'SECURE_AUTH_SALT', 'H.N(j*!?;q)[pMh2_;<jxIt:k.9N[(sMbr64K+$*zo?D tlO*m{~ec^xYtU>!Z$U' );
define( 'LOGGED_IN_SALT',   '#]{BE=D+{,,$JM-W~D1p]^G;7y1APjvYQei`%TaI&KK){H:+q8:$UR(,gd}@dDld' );
define( 'NONCE_SALT',       '*^PYt Fs3MwDSi2nypj%3x)N7mV00dTLUO^2>&E[?@V,xW(&5,ge~b:8Oe}qt+8J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
