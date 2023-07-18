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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'et]BO~Oj~PNw!J26v0TR3b)W>`0`~v@#vew~G,^$8;Oo*8u#:Ph@{]8|KDzZvb_R' );
define( 'SECURE_AUTH_KEY',  'X6(pgTKY|%H; `%hc7q1K8!B9OCJTLl}$`-:Gk&P|g`GW?,!)D covW0C911UL[4' );
define( 'LOGGED_IN_KEY',    'XG<i_K5|sWDO~V4LyW.:ikl3<0T{sf{,|@/J,R[@>23-6tIW,f6+Bw*ee1/2qN~a' );
define( 'NONCE_KEY',        'xc2V>aas8=Ro)=|C<ck.>~ZePi/=5eB:FXW0DD}?oOAZDA]%g$H{Mfq`PjClZ..=' );
define( 'AUTH_SALT',        'Sk;j.JsZxX$^f~-9fhi<?LfJ#A%@dB9uSLj^~R?b4pJ8fD):O,cj7)5w/>4h@7E:' );
define( 'SECURE_AUTH_SALT', '[!R2)>s|=;~W%2z,OxJjZ*7i16vjSrb/ZnjVqf|`NyC??XsKUJk%fvArHDqufzf?' );
define( 'LOGGED_IN_SALT',   '[[/4Y`$tu{*Z_lI*P, OB:_P]aUR3|hm4GmU<PX=dR=m>[f_-U:I!M-TZhP#X~s8' );
define( 'NONCE_SALT',       ')B{$GombD3F$PRnA,-H<=bXm> 1$s+.OZW5[GMOtGXAGT$PpQ_?*CNA)Bn:os=T1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
