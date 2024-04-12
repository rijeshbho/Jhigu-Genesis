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
define( 'DB_NAME', 'jhigugenesis' );

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
define( 'AUTH_KEY',         '`|w}N9B6Z:Wzt<uzk-/`7)2}=}E0$(Y3lt<!Ms<elD^g.1l?3|&jCpo(,/Ty$G#9' );
define( 'SECURE_AUTH_KEY',  'k3b3h1p,mp]lmLCHG^aMPt r~ ;8<}YxU/MTSw,V;+M,|2d7hv MzWQRD92G:uuM' );
define( 'LOGGED_IN_KEY',    'p])<(@PWyL{>JzO9Xu/`S;.?V*lk:Ha~V]g^wsD}8nliqg8DcP52>~} 55UX+*9Y' );
define( 'NONCE_KEY',        'L{0)i^XN)*uu`V,#vp,b}T}c2+2z5f>K6Ce<l}~PYe(wl&vTxtthYK~&Wo/PR0@+' );
define( 'AUTH_SALT',        '^{?IyBVm)~X:gngp*@;]9i}E9J-:`aIQFeU&Zp =!y<j}D_r20=Xm@sl7&Wc_|P:' );
define( 'SECURE_AUTH_SALT', 'a{o;w{vYMdY>Lz8^3.Vgw$=cr,LxNv)Y`iQJ5QAP6XUOuqkWZ=.dkj~8^#I94.qL' );
define( 'LOGGED_IN_SALT',   'mXuZFsYx=ik>#VhlA(lKhJIp3|6s3j#umw0DLvjj#K*TZ2anQ7oivzJ6pcsNyR5c' );
define( 'NONCE_SALT',       ')r8|&/[O!H)@K:FF>T+$5ZtGI?Rz/aN2J*2Jm :OBL7T.)+a#AeM!4p<km1k^@yx' );

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
