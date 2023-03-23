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
define( 'DB_NAME', 'example' );

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
define( 'AUTH_KEY',         ':T@oBZbk)tHu<!QNCzZO{Ozgoys|X.v-eYHGvyb8[EM=A/5Zs8S%Xp}imO6&9TJ2' );
define( 'SECURE_AUTH_KEY',  'MGY]&])/l+(a6I,O2f<P4#z^tc[Ay!:~L]UEAo1{@lN c(~B%)BS$ -Pq^|H3HaK' );
define( 'LOGGED_IN_KEY',    'Wa-!$fd[L(h~a=8UI`ucQZ=p6+0~23<KaI[./hhO!2.H,s@P!,43c]VID6x&pKJd' );
define( 'NONCE_KEY',        'x5?E;/f!>gq(X6 Uye&]ZE$gZNJYK?i7mI9)P<uSR+b59n x{9ffx<Y.xJ3APZVp' );
define( 'AUTH_SALT',        'ArAC@iim3:-Bi)#][%1(E/ _O)t,M*}He]RF}jtAH8I3~9?o1gGf=c.K.#xFZA!z' );
define( 'SECURE_AUTH_SALT', 'sKjGHkVBN^9vFNisx%fQ3<*bY%+Io>D$1Q(:Lo.=3|l|4cdbv{;sOF,]pz>L1Tn+' );
define( 'LOGGED_IN_SALT',   'c0khOa^+Uz$KX{TwZ.3&U>h?uk9AWjYU9Ga484yZz1RJh+K]v%`g7WWnS60?9/9q' );
define( 'NONCE_SALT',       'dc->;YMv$+Y)tFP[Ahjmw~U>Nx`;-h{W}`bOs,:xnZ-U5vm*9rx!AoIpo3nTT8s.' );

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
