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
define( 'DB_NAME', 'mrgreenclicks_db' );

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
define( 'AUTH_KEY',         '=b`z{&3EssjHHN@^2y/>}lk)/@:S/+[(it7mJ;DDaQHm@hFtR/WLzoqL3I/f>YPO' );
define( 'SECURE_AUTH_KEY',  '.*u+Z-BSB&l[Y7@0%h50uDx[ep,8#J8PB:m0~U,hlICLI[[/Vw2MBWVQ}FdvTbL;' );
define( 'LOGGED_IN_KEY',    'H$yptV~Dpa4Gcc<=hL}ce=0.DY_XwEOHV(V3.[G2@5byu;K$C$K]MRzuH)G@w,sD' );
define( 'NONCE_KEY',        'I;Wr,-YIi?OCWeR-KpXW[/L799%SAlHkmVVS$zKGo^@r5P-7a55<BU5(EC%A,e?O' );
define( 'AUTH_SALT',        'OTNsFRp+B9iKdR%lH9%$zlkv3U]9oseM0MNXO%YHskbN,bDdST,s~eF6Yl+YUH@[' );
define( 'SECURE_AUTH_SALT', '}{]2dqAAflN*0@^nCGT qBX/Xn%2u$Q*`~ZI-5nYzu!pfQ>i_J?xMX`E6[h0#/DL' );
define( 'LOGGED_IN_SALT',   '/pl3r75s*Fz@`w.ZCRNF48bY(p}9-Xt>APW)qOR74|[>/0@b0o@H@GbV|nrfl 3g' );
define( 'NONCE_SALT',       '8v;+#V6 [Z$,gV!30Ow5/c^ODFk#X_ni|3eL@]9yUIn/v((zY5vZn$i7p<KoRQ0T' );

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
