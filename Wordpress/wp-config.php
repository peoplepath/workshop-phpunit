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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'wp' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'A)igo%Wf:`%,:j=8Kg_mVM$l5/ch&5s8yi~pZs2Muw-)_R3&|4)?&%A<pDf,/.6B' );
define( 'SECURE_AUTH_KEY',  'jl X<Q(P_Vv-J tmb6ynly!gzc)[HB_%Nu!.)rGS;zP5| M#LHndy}#t0/]^YAHF' );
define( 'LOGGED_IN_KEY',    'irnZkB-O(T0f{tzUS!+%;n#J$@H`EH1eQZZCOi4BzFL0Y|-XCn{vu1akKH4#;3`N' );
define( 'NONCE_KEY',        'Zb9A1hftc5qJ{+TyA;V~Ag^.W.BUrT>uX,OyZ <)16F=8b5>5[rg5ly2a92}oSHU' );
define( 'AUTH_SALT',        '}B;zdOo7U`/IX@6C@{VS>1^hRI%1DL^_UJ^QvdT-Iu%p!vf0{AsPN{T`(Z9k*,ZG' );
define( 'SECURE_AUTH_SALT', 'WF#E>taaiVko=H}h_Sfm Pv9Y9R,v{pv<QXN,:KqbCk#e;~Feb=T`xADlR~2)_Yz' );
define( 'LOGGED_IN_SALT',   'F__{3q**J5R*e8f+zAn/I,S/LnYorlwmt=7KnaGFD!2(S(ed<KR$-NN5EG6FPAK4' );
define( 'NONCE_SALT',       'y-b]gp <bWJ5%4ppH3|OE5R0 xG`2<YlQj,W&E]]h$z*CKvT@w+>i69Us}Pl=f9,' );

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
