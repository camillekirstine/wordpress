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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'iA1~$TN/{Wu7O0.V5DXQhd bHm}M=<R?`mBB#/rc]vtO2pzNNczO7Gjo`*^q|@nF' );
define( 'SECURE_AUTH_KEY',  'jsG$kDMV#du2!WucmNp;36L/tmye}#w&a<:qx`QmVwZ@/Pl3ci_`%YsHZ*8vS6Ql' );
define( 'LOGGED_IN_KEY',    '5>7Hlgy{RhNeO]Z@)o@AEI>b3gK:y87Nx5{eY%@p_t<w7G,uLD}&KPMp03Q;E5Nh' );
define( 'NONCE_KEY',        '`o[^>YTJGj]&RugkiG;L781bs-m<lVwF.o~hZ^pnet{JS]E!4f7IsPz}EUaJ+$ <' );
define( 'AUTH_SALT',        'AgYcb>I=_;YK+Q5qKVg[K[Sn&-FxTUAWx9<j;b=.w>kO0.g-qMO_&k+>Uh/]2[$=' );
define( 'SECURE_AUTH_SALT', ']38=R8](,q|m!oM`2T9v+QL8Sfc^nzAJeV>`ZfTfvmm8TpQ@A~Ig#BlA3mm;m0mp' );
define( 'LOGGED_IN_SALT',   '1v(K,$X7FQo3%S3+9}M@wzRZ,+D1`%?[7^V=IS64S^w1Z-hW5RF-<T<GiUK(}f)k' );
define( 'NONCE_SALT',       'yn7{X~/8<Cn~W9U~`r:VRJ.A:&hhkMc%sbN0?(d_9~--1.7B)k]*]JC&w,e#8~{n' );

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
