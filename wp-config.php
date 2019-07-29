<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define( 'DB_NAME', 'pausadocafe' );

/** MySQL database username */
define( 'DB_USER', 'pausadocafe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wq3S#iZve+=fYad%-%Yp_SV%j5=LKH}x' );

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
define( 'AUTH_KEY',         '`rIJ:p`C0@FsW$tgX!|w-G=QcpUUlj8n@H}_f29pgf,|OV/,]d:,SD5Zi#!Eh_f{' );
define( 'SECURE_AUTH_KEY',  ')AB2a/;1!}& w=.c*t|RU0;E4Fab]& ^Hx)t<rzq7[fe<-P:u#:hG{#|dLhfS~MV' );
define( 'LOGGED_IN_KEY',    'T}tXUR3Mf5i0K?;1RbR}Xw*QjG!IOIgFv,i=1[:lrEg4BU&]yYxlMceyj15$sq3_' );
define( 'NONCE_KEY',        'IhOq2-z6!~HZzco}`(qtdIhbyi]udA)Eb(g|R@j?/caW1;SED?;XGR~L%rW80XN_' );
define( 'AUTH_SALT',        'AsUne9Abn*Z:q^R2;3To)s3^{qu`+mJA% /TxOzPV@P$fA(CL|?c0l_Y^QQTOP7V' );
define( 'SECURE_AUTH_SALT', 'uk:=W)JT7& +C>&VNTrpwy]c,>WZcJnw^9KRf9qL3~[X (A3X{Sk*5m|,BE!L-!:' );
define( 'LOGGED_IN_SALT',   'A+!^Y_ >Yl7`UEBQD#u6jIcmZIt<S3:uvo?Xb_8FTAT=M:lh.rNZaNrJlQ7tj{Ti' );
define( 'NONCE_SALT',       'um2exe-WqTtH*e{5h7`5$IG)2KB !iHss7;]E)DUVF;zIA4gBew7*BM2Je1FIfGL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bl_';

define( 'DISALLOW_FILE_EDIT', true );

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
