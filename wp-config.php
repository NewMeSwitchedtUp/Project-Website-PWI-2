<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_webtugaspwi2' );

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
define( 'AUTH_KEY',         '!tu^k4vR/y2VkM?Twy[aG[}y;j1S_z@eFz1=Fm(f^o<y[h@3!lQC@M-9Q,NFJe#h' );
define( 'SECURE_AUTH_KEY',  'w/)OwZ92%8_S3.m[o;4t#pHn+x{/zX/!mV*mQG!hAz!)ip!gki!640u~0d:)Ws&=' );
define( 'LOGGED_IN_KEY',    'YS4-&i E]%B-xt@R>hdRJn[<0)NF%K*d_NU;W}d)B*Cnxb9Q [DL<.Vn%HwQ|5fz' );
define( 'NONCE_KEY',        'T)%.>*v58u,rPz;.1Sxh:v/6zhlYP~oousdY&8t0@C|a*>:jRS0T%__etqKmUUO$' );
define( 'AUTH_SALT',        'yMgD@ xajc!RNfM>Fq#WtBhCk*&9xhY4YhI`k4Gk<H@V,y1YR-o(gGR%.hx_SW5b' );
define( 'SECURE_AUTH_SALT', 'gIARHkZTP|$7R?4T7dx]ghP&ko5`4D[QZ?kz3Gm~A@{Pa%5>CkFh2 yDPa2m5X[b' );
define( 'LOGGED_IN_SALT',   '-fo0=nD1`H0X{nNaQCdH`/M).uLn p`{K80fA.Ia<>^ftF/BKa*hwD;98g<UTZst' );
define( 'NONCE_SALT',       '=JjZ+i1W,<X2nCYOR8]_k@cX!_;|?z3lAlN#Qrm.kfPUwY]:QJVxQP@<HsK|@aA,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
