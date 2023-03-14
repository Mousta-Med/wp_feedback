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
define( 'DB_NAME', 'testo' );

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
define( 'AUTH_KEY',         'i8FrWEH?``n+WJMa1{QKukL1=X?Pn`X.-Hk]u(GNEbgt_eMA4via<5V-Sk#FE4co' );
define( 'SECURE_AUTH_KEY',  '`h_?m%&&llQU5AL91.E>SGAHS!>S6N+x2sxNHmIF!!Q>0H$q~D8pmBo;mJaAQatJ' );
define( 'LOGGED_IN_KEY',    '>dHEG~xRepx:yZEZu6|{6$fduw?#8rd5gqN~+va:$ao}=|GQf*Jx32/?sY2Vo+6M' );
define( 'NONCE_KEY',        'VR4gtS(*xu<[sfNSH!P+yhaBN4DZ2oweg$1ba9GbjQV9xb<,Q*P-Hn!V&$5n&q`b' );
define( 'AUTH_SALT',        'Htxo1/kc%.`uVL}_1@*YMEolMZT>:e.wSR`i8bL!59y;($hmH|#(&D!SDQDj*%FO' );
define( 'SECURE_AUTH_SALT', 'z,g`hw]H8+g`:bky(tM~[k{[#~dg1w3a9H,aVM0BZ:,Lk5al<XcWwFe}Cs![IpAq' );
define( 'LOGGED_IN_SALT',   'AF%R$#grbHfNRoE0bwm[gR+Pbn:;>yd^Hsj7sR*pkmk9)qp3iHx[bf>L`N*U1K=C' );
define( 'NONCE_SALT',       'L*N=f=rT,MI}PW5mRvg%f.~&SwZF~2g:+t^BPs^<]`QCQP,Z}rgFcyGd&!f02)X%' );

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
