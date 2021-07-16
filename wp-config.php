<?php
/** Enable W3 Total Cache */

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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'mexsor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mexsor12' );

/** MySQL hostname */
define( 'DB_HOST', '10.120.48.81' );

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
define( 'AUTH_KEY',         '6-3C8O6{^Uap~GS)3=3W[%f va^*D|)DPSiWW0=b4lfmFNTE(9ZX/>DcU^=McF2#' );
define( 'SECURE_AUTH_KEY',  'h$6d@!!{PYOoPhY1!;K[<!GgdD7T`4%<-K{2)lQs{d`S?Yn<Es[)pGc]jFd$#Z%9' );
define( 'LOGGED_IN_KEY',    'QTe}PNQ.IWm1^]pmlXwKjqke@,MS*qtGf%/`$J}?#BPP;CsJ}VV<!BY?m/e!W!{_' );
define( 'NONCE_KEY',        'lv,$t6.LSgu}~Y:1?Bo>^52mt%9@)5g!K.;4xVfi)Ug>U^gT4LB#Sl4qq^R_;o6p' );
define( 'AUTH_SALT',        '&@f:y&tV.4>uH.x5z Duaz(FyT}Yh374/625!o:2W6(Pp[wNA=+/W7%6C^=iED1`' );
define( 'SECURE_AUTH_SALT', 'x&sm&[l5Ev1f&@yKsm?ke(?E- 4vLfmEwv|{d+Da#/Wj(:MI4^b+}b6gH$q7t/.(' );
define( 'LOGGED_IN_SALT',   'bJT@_gaukB;XbJp7iV?OKyS]+iX?LMA^ Fi^uJoMb}>*P:Pq&7wc$Bh%n (B17z2' );
define( 'NONCE_SALT',       ']Pd?L0STw=zDojajJUoS4vT1(=.}[`[xKB<rB=^pcHp<`$,Jujz&*k5yro*<}t6l' );

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
