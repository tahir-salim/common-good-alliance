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
define( 'DB_NAME', 'common-good-alliance' );

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
define( 'AUTH_KEY',         'p*Uuj94D7+|iL3Dh_oW[!C2!0+zO$,4V4vR0O$I+Mv (W1Cu>S;DEe:jmcoTWFf!' );
define( 'SECURE_AUTH_KEY',  'K6-(]SpS]6O,T>8Q(64r!_dO]e~wlQygJ,,k(AOF!2BQvSt-31sC[.|vK@-z1,#4' );
define( 'LOGGED_IN_KEY',    ' :a+Px{_VQ5rQ53xf8&yj4f!/&(*egZI]mUB=c`#U$?:Uu:,|[5%A,?/T<@b{GQ%' );
define( 'NONCE_KEY',        'q0>#J{Zm8Tfy4e2Am<xBs/UJ8=Vr+#s;di6dBX/:o4+p@=_*rG]>b7)_<YUMI01w' );
define( 'AUTH_SALT',        '#gY{G?+Npl4$cjIiO9FBOSqG]8FLH&Lr+W7~$,qXsMTW>}nHL.lG|wY/9!zB;p-K' );
define( 'SECURE_AUTH_SALT', 'Q=M}8@]BRA!W mrRB!>5/{N(LstZ5KbO9(*}M%?#]9V-Vdg$87;t_GE5-*=bPjkq' );
define( 'LOGGED_IN_SALT',   '3V.62`LjPt$c,{p^*/>]{C,l.oRk<g=fE-Iz5n.A/<rN3:x~%4ML-XUou,`Cl/4^' );
define( 'NONCE_SALT',       'gZ 9^yM:sE,d173VX=jB]rDtV3Z?qR1|PB]}6%A&*I~F-Atg6(d]o*J)>Nk0@N0>' );

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
