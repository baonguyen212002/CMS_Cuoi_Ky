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
define( 'DB_NAME', 'wordpress_cuoiky' );

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
define( 'AUTH_KEY',         'h-In1suB2+et6uFoqL()>QVuLWAJa^ n8z/A-:dhT16* /;r]syGff7ORa>u44?)' );
define( 'SECURE_AUTH_KEY',  ';w:ozr,_MH8)U(~/3J1wwgNVYgRNM##*sw^--,FcV5>:PoV+vV_;yZGr3&MSUy~`' );
define( 'LOGGED_IN_KEY',    'Hlqq{^V<);0?l;tJJ0Hb!uxG3~t/`)x45=0Fm`KZ5{Wy) oY:81Kk^g KI9cy`<;' );
define( 'NONCE_KEY',        '#G4leJBC<N4GX}SL:4M(?wJea-Ko!/bFun,3Wc2U,UF=BcOoP,H*So8fB/N8H/SW' );
define( 'AUTH_SALT',        'nD.d4~p5WA%i7Y4[I;AH/S>^|t>wO$CR4I=4-0*FHhf{&6UYsVBl<<`/(Isv4:Zu' );
define( 'SECURE_AUTH_SALT', 'y?D$_Q~Lxw3O9g0ec^{4uu.c9$m]B(Idb9Ak~__`Oz4Y4:(77;Xgq_V-m=A5iq&`' );
define( 'LOGGED_IN_SALT',   '! 1~0z;|S26G^s0dcLy8e*rb.^^+/2Xne!RWd=L;O6J.HJ;$I[}*bAhq=l+%fMwV' );
define( 'NONCE_SALT',       '.q)>.y-?o{yC8`t2;U8pM/Rf(8^>YfC4P.2OY K=23*P+ZJiB4q Pw%0^modZ-6L' );

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
