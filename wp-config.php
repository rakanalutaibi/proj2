<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rakan' );

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
define( 'AUTH_KEY',         '(?l^P^hjW$BRHPi%6_z:0Z{gl(Xw^uZhKRl-qD>7ramO|vY_&MR/Ts~r*}UzzgPs' );
define( 'SECURE_AUTH_KEY',  '2T)tiz/|bquFr@D?H;M!XHOlFl[ESp+9 2-nDM(NRG%09a5k-.a<C,S< ~7kF@Gz' );
define( 'LOGGED_IN_KEY',    'd*IwG Fj[ b3AFoMrrWqVEMt+j#2%6u%D(7rcE0Ku+@s:]j#*AUu$B!Tt<~_yoAm' );
define( 'NONCE_KEY',        '4:.G[~lO=f&R9s=x+8f@zHJe@/;MK{1vpI?*YJC_k?(|Vj$:[;?/AZycnq=4w/UU' );
define( 'AUTH_SALT',        'q5Jbb06e;0quh%u1sV,j[3wR?E;`I]{Ud?#Um [lpc1+ETUNBF_tNh<~2XSDdoP*' );
define( 'SECURE_AUTH_SALT', 'TbY/IlUM-odDn(?00Es^@]<BF4)5{#6_([-S/T0r__x#0=_x6|QJ&g0h=H2dCA6r' );
define( 'LOGGED_IN_SALT',   'V_zDy<v9%UO|~F|{BA T W;~VliCLUq@JNdTpCqRP4J&p6k8~8MAJXx((o5S:dj=' );
define( 'NONCE_SALT',       'Y I[VBlNEOR}^K;b}uCAfoUDNd-N%6ziRT~va`KKbI.7pn{](/_6~uve&3ox88PT' );

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
