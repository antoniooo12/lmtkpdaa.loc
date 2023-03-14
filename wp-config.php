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
define( 'DB_NAME', 'lmtkpdaa' );

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
define( 'AUTH_KEY',         's2uoC;OX>C|kiC};)qz*y![NC/;rQXsa[>xW/gF^;KB*[rx,~gwCuje$}w;7r^T)' );
define( 'SECURE_AUTH_KEY',  'Cw-TnL7@2<TR&DR!&VS*[bqbAuV$;oFSHr=nB;002?n3}`x,F*0[z0&jS{34mnWf' );
define( 'LOGGED_IN_KEY',    ' o@53+|C |i+gd/b((/=)gc`gq.ubPa1&S4`w(=Wjxg7>#q{$AOEJRljvDKz+89s' );
define( 'NONCE_KEY',        '*@Cv.o$)twE@(RkDy/U+5{/f]%4!(,N{*&ZM[2efs8S#&CyvL0PHy?Qi*l$f_Tgf' );
define( 'AUTH_SALT',        'd4jn(|/*<:%2C[gV4e*p,^[}?#l*CH,>Q=|LaUx}{.^+MZ%NF7#D}Xgj%r.j*.H]' );
define( 'SECURE_AUTH_SALT', 'GKle[VwfFrJ1kXGB.<*8m`$.UE]{o?6ARVQh+Ihu.| #ya*0-o_!zkZ?mV<Ti:us' );
define( 'LOGGED_IN_SALT',   'gOq 5My5F,]4T8WYgy%-F= _2@j;:iY:2Kc2#Rd.STa^u|x~8ELLW!T-fNR=7;X:' );
define( 'NONCE_SALT',       '%b[e7Ke<Mn=&%=Jv+/&WX+uQEFZt0WJd/_d&[aVPU]b]tG]RKj46Q^o2ipE,&5.`' );

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
