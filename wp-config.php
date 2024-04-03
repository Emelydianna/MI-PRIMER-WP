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
define( 'DB_NAME', 'wp_gh21a' );

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
define( 'AUTH_KEY',         'P]*.:Z@]p;0D24I*AczHj#( PT1z[B7^?~ha`-Wv~~/gg|31BvQA%;&<U89Be_*D' );
define( 'SECURE_AUTH_KEY',  'G~@B}AWfz{G!0.HM_*j.>vO?3w`L~W[EAOxZappJ(FkmkPnk2~B lC0u+,=f,%7.' );
define( 'LOGGED_IN_KEY',    'viy:bCj#0s6PdDi:3v4xKduIeg([9yIaz$nmxUFn6NV!nq$12^?CY9?$d}w[@gNd' );
define( 'NONCE_KEY',        'k;@j;1^s dfT#dnU](-ra#od/DBn}~@@{N,`6`[MH;9AiwU;9~S&Kl%H; GS!PB ' );
define( 'AUTH_SALT',        'KCHRa[vqT8;H68ZKm3dP}8:[3}`!+ro.Za{4r<e-ap(Rdk5G(dFR]XeFBW<[*iT<' );
define( 'SECURE_AUTH_SALT', '1Hyn%2`&&Us._B3%OXFfoCD_5.~Vre?emObruf0@oC~flQ..a?F^i=93W5n>zS)|' );
define( 'LOGGED_IN_SALT',   '8+ndSUhry%NjKU~_IBo7ZE~Bd[;`OC[Eh1N.n8ZSo<ae90^eKU`GW])>4<.bP2)_' );
define( 'NONCE_SALT',       '^>/$QrK<[(8`d TF|y#qZ:jM0`~{ ls}05S*_i:|~]QbpGxXRdk|WZo<XGEy%AG/' );

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
