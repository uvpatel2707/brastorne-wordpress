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
define( 'DB_NAME', 'brastorne' );

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
define( 'AUTH_KEY',         'QM?7s!^/( +q*zE~h WObHwd[RaS%ka|QjbU$rpy/v`Z  Y);t-Mm[24}]:ap n;' );
define( 'SECURE_AUTH_KEY',  '0R:gc|(R3i8b?hoT//rJ=hXcx8wsMP[15@qU=`,QvX8w2TQ,0l%LzPPlbOz:U[n@' );
define( 'LOGGED_IN_KEY',    'D-$0K~H(Y#PDCN_xKjEEX99,Bi8cLHFfW}k.rLylRnr;r!kynV,XIG(Y2aI@Y8Hv' );
define( 'NONCE_KEY',        '@Z<4Hv-f_}3+ETJ)n`!S(T<Z4Cu;4Rh47%[4#nQZj7g/OT(V,aU$.1YcmWMMvy01' );
define( 'AUTH_SALT',        'TFA:BZe##43WLI`HN<=yj:<l -T]=ko@u_YA~j8^o(ks{gz7AXq?QA;/~xQ#xt>g' );
define( 'SECURE_AUTH_SALT', 'ZNvu2]djc<J>5$`s/5OKP6A(VUQE_p2z;Q]k_xUL,y+|_;On8n*w3dknsvG{In]/' );
define( 'LOGGED_IN_SALT',   'TFO *.])^.|Q[C#G]T}yBO{5,4P&K.qE2X/u@Ji%,TwzrVs[2ufLxSq>Gx|:5TF<' );
define( 'NONCE_SALT',       ';X^!@CR&-x8r``]dzAsr1ABVy`Jbz{b}#sF8j$5x.mV,vzVm:;5o4Z`M0F@Fw;=e' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
