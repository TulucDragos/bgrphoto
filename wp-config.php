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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bgrphoto' );

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
define( 'AUTH_KEY',         '*VsSF@>B>&dl2ut[vR1zNJ7Q4c:.b_#B:t?f#NjYtRtNq?ZF}gk.o.6HXPg?_w-G' );
define( 'SECURE_AUTH_KEY',  '}{niI&~`6|sl #0n{kF-@A*+(YUEMp;0B>FoIu:adCNrN&WG79ZDy=V%d{noTQtN' );
define( 'LOGGED_IN_KEY',    '|U<sC kueH.fV/XgCM9A5+`Vrf86/JSi}A:sp+iT|+ te#a)Y.{f!De@]k1m![8?' );
define( 'NONCE_KEY',        'n]%gVmf.B:1kCh^?a(0]-D0x)iv6 Ac$D[xhJ-F4q4(!XqhFu4<EOWE&Fwf t=me' );
define( 'AUTH_SALT',        '(GVAd,c]f%P5.Hy$;!9Zf=k2$y$_(tMgJ8cL%ey((2u&B6jt!T#ea^:v&h mL19i' );
define( 'SECURE_AUTH_SALT', 'yEonN0#6DsA.vqM2n44=fGzH>tG+E3RI0X+]iF<efBwiq^BCd7<`//.Hhdn8mq(H' );
define( 'LOGGED_IN_SALT',   '!v|/7o,95(k@}oiCQ9xh5n@vClff+!1oaUbZlB?m!SiO6${^x8AfIz}%*xRbeC.J' );
define( 'NONCE_SALT',       '9!r`^f7- #QFenkE.foa=-uYeMf4^,~rr4{8)R}QGsnS(v>njy3]<9M0ic.z$>>E' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
