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
define( 'DB_NAME', 'tilakraj' );

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
define( 'AUTH_KEY',         'z^ p^RMpo,GW:osRkZg&~lV,93TN44u*K<W&2U3v8?A;UG-0xyA2++L9YD7.Z*E9' );
define( 'SECURE_AUTH_KEY',  ':CpA;e0/qHp@_%kXT$$)`s[(WMQn(tQHVn!suc?4K;^g8Ut3,AJ+FqXoMN%P|`[x' );
define( 'LOGGED_IN_KEY',    'N{:G|w:d1qb1NucTCd&d]1+.GS}*[4#4kc* GZAR:#_SD=68%EU|Ni}:?yER[#2R' );
define( 'NONCE_KEY',        'edziu4L+off/7|^xufzNV</i%RnK:WmJN#)K5VS{NQVm;L}aDL:VV#3Z%qB}-m,H' );
define( 'AUTH_SALT',        'F_du eIP]FO)%vF8pa,/brpC?}C#$O~1+zJG.h8tVk3?-*<GVUu7DL/ZE(R0>Q9W' );
define( 'SECURE_AUTH_SALT', '&Wc/ZXa.79=WFt8r-v.+*cXUsGAe7OvMz:E/:Ca&@q0Q!+J/}g*E[#)M)F A*)VA' );
define( 'LOGGED_IN_SALT',   '.P8jEx1Fhz2IaZc[W{dRad1VU_ISg(KWNP|l68dnHoR:F2HG[z9uGPnA$1dTg&}*' );
define( 'NONCE_SALT',       'ZRJ{+~r^0^86{,c)Te7i+|IOzX&112>lQ7~J,;qZ:loL#qaNN{iP/wgDvGTYU?$S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tilakraj_';

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
