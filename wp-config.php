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
define( 'DB_NAME', 'home' );

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
define( 'AUTH_KEY',         'C{w2*A}Zks^1/E}ybjmq^+bgMoAUT]2!Qxa{/;K4`z+KYY?Kt/f`ONUD3m_wD%+{' );
define( 'SECURE_AUTH_KEY',  'l5%M}?XAD~>}#!N<L*.@FDo_7]8Yq-P`OLVgvIIdYR|rMLRJ/m2r]6E}}p}IV3 7' );
define( 'LOGGED_IN_KEY',    'h/*qB^%.aB=1(t=_.|8~q y=?7c5FUY|e>}Lix0/=|G%X6@39eAc)tfGVQml0hl0' );
define( 'NONCE_KEY',        'f*zAiuZ,e7Y&c9*m<YIT,WQ@S{2PLNzknxVDhAC`?T8*pT)!H9+w-8aM{ErE]D<{' );
define( 'AUTH_SALT',        '->0jE$d3Go^*0bKv{d0ZC~Vw~Itf@ Xhw(>4YDpi?+=*sRUiD[>5**Z*2LYCyZ/3' );
define( 'SECURE_AUTH_SALT', ']y{ W-)54fu0${o3J?P?z/F-$iSU v,p)4R.@f-8bujU2>-6bJN%2-eNFtQR9^>=' );
define( 'LOGGED_IN_SALT',   'i_;i+)I+?KVG#vQ#J9wDe7dC=tkj^@ptTUpkW*QZq2{,@H<~fv0tYrYB>FSLx|rS' );
define( 'NONCE_SALT',       'q RBA6 xH@R5Zj.9j3lubV*RTt@rZN&QWlG^65X16*:O#/BXIt#9%_n8MSgL`D]O' );

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
