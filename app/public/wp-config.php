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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'F]_;Sl*HxKqz@g@6Rs*ZlPS^oKx(5;vTR8FlOG3iQy/{-MX^s`>**VO>?F]6p{<4' );
define( 'SECURE_AUTH_KEY',   '7HIwm?+^rL[zn3U*ajU,59q,$y<=uN:0u5BC@77~~+7Lf<aIO4ZCeJ 3(xRo{Z$ ' );
define( 'LOGGED_IN_KEY',     'a:W#h}s7Q8@q,vkhvsUtLT<<(/[@J<|N*IE20cIsg}*i}S%VbMmZy~~u2]TPrM0C' );
define( 'NONCE_KEY',         'So4sg(xPEe^Mnya)]jYw|SvmbO9b*[C:GleU7L6!Gi[|5(9YHVrRq0i9^q]|<S#[' );
define( 'AUTH_SALT',         'trt2hwg2uX!CuGukL#^fhddJ9N`*<ET,,$HT}>$Idc1hH|upK=FZ{T.F,=LM=?v ' );
define( 'SECURE_AUTH_SALT',  'dn9rpEX4E=7z99_6pMY6i+U=5^{~fPkRBBL%}oc_Xli]q!#O2?-eX>g,%9xr_:V#' );
define( 'LOGGED_IN_SALT',    'NI(h7BvcCGC-%HFmbS&h9j#~F`w;8H$ $T||B&o}NU/t:KIxT PG-BoA7i<~7U&W' );
define( 'NONCE_SALT',        'Eu9]=*j`Z%sfiENRl PPKwdPUbt?,iFNP5lB}G#5-*^6K0M~?1!y#=K4b8)6!q 8' );
define( 'WP_CACHE_KEY_SALT', '7Ylia-8?Ibv}:UNZ&XOGO&}?%oix[G7Wdh $gu5S?~R(~Jm|c/PP+^(tv_3Lv^$^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
