<?php
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
define( 'DB_NAME', 'vortex' );

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
define( 'AUTH_KEY',         '_s7S0]1,%8Oo^#3Q}pSAfpCk4Rf:Z7~98R:|q@t3+;=Wa4sca~JI5G<Sw?,LcOX)' );
define( 'SECURE_AUTH_KEY',  'tmOJe|:=;Qb#MgSKC+zNFiO`,I!L8]6<k/o 2F^Pc&[16U1Ze`xjj}LVAXk_&Z1W' );
define( 'LOGGED_IN_KEY',    ':Hg*hG]TJj]U2&e!>+tZnV%QzkNHv,j=WCL&]#h(scN,YLEEmdyzOeuEjJ>4sVi5' );
define( 'NONCE_KEY',        '}9q;jx~W=/[dysjWk@sAMJltS?yP^{-f2LtH=#+>3vD1lt_XexPerh<I/,pLWo6T' );
define( 'AUTH_SALT',        ':dDG$]@]Z/FwRNqp32=,hUKF^Gzv1B{J+tk]ty@pflZBZt2%?hjU8{ANMw{)<z3k' );
define( 'SECURE_AUTH_SALT', '+rla8rsocn_#tM<u3Nmd+wfG&^hn6j~KxWr{tl[}EY3hC}vnpn4]_mOmKc{fWKY[' );
define( 'LOGGED_IN_SALT',   'd@mDJ!~wqDUo#zz&Bm}PsBxL g=cyLTXsFWSsiwkh`lJiFA2FF,t.{LjkcM)8f_g' );
define( 'NONCE_SALT',       'ecg6m:0!OkRnV6>Wd-2[&7UA|SH;#kCWf:Cdm59]Z6_dOtW(VSRc}WT!<^B.kdP=' );

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
