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
define( 'DB_NAME', 'lorezse' );

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
define( 'AUTH_KEY',         '5wPv 5v6Tuh4{xPEzb3sP%rHX+$_9%(R,Lp;E(ya1Rei~p?yi&Qpu?UJ=)FuJ0d0' );
define( 'SECURE_AUTH_KEY',  '&tKj^]W2%2|n4A}sLwUhGpCt.xkSH%]<tlsp-Rofx[</(~aeh=P(nBeP=)q}d,;X' );
define( 'LOGGED_IN_KEY',    '@Dyh0[A(?RXZryNW@o6?xV<+it5b+k<gzyc0:>Et^:EdtGfZSqmIsxu6p}P5c$vB' );
define( 'NONCE_KEY',        'S(<&-m!`Z&PC Htn6fL?~`{pZ%g@8jy[l&Z_[TTwkGTmRYf`fxx);<4km=4UKUmN' );
define( 'AUTH_SALT',        'gH3@4=uMOor`Ld6<PjsTkoy6V)*_~6@?l|qeyHG{N`O=ZinqZ<L(bN;&1~[lW^@B' );
define( 'SECURE_AUTH_SALT', 'L{0~vu*[=)XiIC(8Be<jz7[u8dl0*{-~h$r[L9s#/tC1Ae}]{F[_bXW(!]QmPe^j' );
define( 'LOGGED_IN_SALT',   'abr!,h5E ->,6Ab&rk> &!M#mShL_>S?7k9cuP.XK9nX4ZB>}&%@1Bnf|xbrVq F' );
define( 'NONCE_SALT',       ':!.cotg-Q@r_zZF8|!C8=Sy.voB(Hif*,KJ+.(E_I^?YN@;6uNC.WhA@m=6YPwY,' );

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
