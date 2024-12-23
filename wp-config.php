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
/** The name of the database for WordPress */
define( 'DB_NAME', 'fe24_minimo_zinchenko' );

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
define( 'AUTH_KEY',         '/Eq-^hS}u#6e|,8c/B[}4zfx1(YW_D|qY-CAZCNQ8t/S(zikshAJ2=c~|mJ44rQv' );
define( 'SECURE_AUTH_KEY',  'C|B3h 3s`m*gPBW)KfI=Ig?)!Gc6u}e9Q>wPGz~=qhV70x6[&5D+WYC9ezD7x=e>' );
define( 'LOGGED_IN_KEY',    'q6_S]d]p}*,z8qi7^M/fLiGfc?/eEVn)8r8{C5:dfsZ1R.q36I##sQ kriCpIsfe' );
define( 'NONCE_KEY',        'GE?Vd!UMOX1vFzW$b)XUS,lcK3v<Er!E.iR`{dV}|H,=FTbKe+(<)m=B7syI]J$z' );
define( 'AUTH_SALT',        'Ejn45Z$30Yn(]V*Q(!mpyF<L8Y75Ud^&ZH+JNc3GS_C{!Wc9 G2FLPC(pTTO6,C9' );
define( 'SECURE_AUTH_SALT', 'UmqJM9cq&o4W&o`8Q-T:Z;,`KNEt{;nk.pcCUONntcB5`(JXc fy^f$~9,.Sivpn' );
define( 'LOGGED_IN_SALT',   'feMhzY|#&&XTyhLdAAXQmzl5Z(BgpP>rh1^T}ANY?><lqKeXBbX,Nr$RM#@)RQ&^' );
define( 'NONCE_SALT',       'I.9dE!}u3xc(dxB}/&wmaZ#Z-Xp7X6.0Av3zM?WZ7{*pVB/6o&_ff,*m!=0l?Q;,' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
