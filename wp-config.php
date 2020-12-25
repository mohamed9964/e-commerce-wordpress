<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_myecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rgnxx:|~,R_6;M 4P.@I-szMncb?|#i,7c;(jZ&]w&1}6-Z?$ZJ* Qj!L.CiaseE' );
define( 'SECURE_AUTH_KEY',  'qqv!_uI*<Ik2IwO!ivq9bs_?B4Ip I>aHK&^U]W~%Ez%CGIJ9xj{uvqi8.d^zWzO' );
define( 'LOGGED_IN_KEY',    'b+)6>F/n@sxn[>=[xdSJ>!UG6</6{*#gXA[uBDdQb<yvj:7v]?$ru>;-BFJ/s au' );
define( 'NONCE_KEY',        'dLQ KZ*Dt<rU_3(EfKB|GQ^&lh~mGxZ<S_=/$lv^ 87W{w4wzOG,[Z {R+X*,4zL' );
define( 'AUTH_SALT',        'OH3KaXG?,:zH,H;w+f )I3[)|3@*`~wo) F2dvPok56AC:.N=f/Y]@fe^5W_y(r2' );
define( 'SECURE_AUTH_SALT', '[88PpSLS@ `eXY,77%)FDEkk=,PfvvW<G-^$#5!J`CeiQcq[oxXmm#_$OT6Yb0O.' );
define( 'LOGGED_IN_SALT',   '[BhIl2Rdxqn)n3Yr)z=Y<Gub})Emg:K]-y4u@v/oqUoXN`91R&IH3q!Y-GXg5M9x' );
define( 'NONCE_SALT',       'xzr5r;nsDdG)IcuU`pvl]tw,+j~daN3becR9OhVXT1uO5w::$,gYEmF/`BZp`iC=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
