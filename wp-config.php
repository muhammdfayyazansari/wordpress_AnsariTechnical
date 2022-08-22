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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         'Z|09}YGS,s;6~$ f)#vw?22M4XheV9PcYau jE7sHf&:G:sYQ(cbxH=ilI*9s.? ' );
define( 'SECURE_AUTH_KEY',  '1!D_A# C1`C9/3$8-S!3C}n=T)Vsg2r6SgKqN6Nkc7u-Wn-u)io(Y>|S+Mf{NL0u' );
define( 'LOGGED_IN_KEY',    'G~e3ogEuc-gt!fmclG{$y2[=W~Splghk]` N]tRZZjP:?59bclZ(giZAM%]#AzY@' );
define( 'NONCE_KEY',        '9^~|_6tL;{ig^`-|lZvOvtDKyo;7*_5oHy1*fhJ+eAV&>B3@^o9>A9-&C+K=M8a+' );
define( 'AUTH_SALT',        'EM=saeqD#k)I-W<2t^-#Yf0PI} s*dY^1{c(.?2%U|skZ+;3%>;Nhz~|67Wb,jZ|' );
define( 'SECURE_AUTH_SALT', 'VrL,k)}f+Xd??pM .f+)i&Icdl+pc~SBO-:~ZJm,5d *qU4xuB4T/:ni:&3@54I|' );
define( 'LOGGED_IN_SALT',   '3z:KT#qkv:1BT{)^Y&-g*NK KgYWQ<Lz+9Nh~e;b~_c4%2[%{_tfHDjxCpMQ#rgA' );
define( 'NONCE_SALT',       'oaOf<R1c(lI^VDlD6_wfln.g3d,>MonNZ$0(tJ@3baSK+u( |WrHm9U-~]FIwpoS' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
