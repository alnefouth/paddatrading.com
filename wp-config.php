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
define( 'DB_NAME', 'padda' );

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
define( 'AUTH_KEY',         '@Bv6wtKbo]Rm9#QPdeJ(ubGVK~zWTO*c]+_Tf8V)*Dx6{$bZo:Vjr2wTEA!J`/1E' );
define( 'SECURE_AUTH_KEY',  'S.wfQTN6Sulx-E(KVH,r;GuhB|^bI)f<Pgaalcz&8H&Wp@[;oa>mM$Tj&RDU<-(Q' );
define( 'LOGGED_IN_KEY',    'oBybqj?,-aP4j7bU9N7Wl3)0Xn30%,^enPB>w%?}FQE>/iX<;|wOmI(`jlA4x+ay' );
define( 'NONCE_KEY',        'F;q+E8Au+2~)gp%tw8LMbm|jO[(N|n/MGX#v_Zf_ITG147NZ$|jS<A|r>gns{*F]' );
define( 'AUTH_SALT',        'Tl&X~@qH8VUN&4RnHAn$9:A9qs<R28hYT>N*`<R}B9Y*whK(/v Gk?bo!!(3daeQ' );
define( 'SECURE_AUTH_SALT', '{w~y`4qnd;nk}C$iEtzrn_t[9 iP8Nu85sdR`t_5eep.$H`FnHeIr!Znkz(m4FJl' );
define( 'LOGGED_IN_SALT',   'Ccek$TDC[]li%^z#KJ,WAxhXBJAqcY/*=p#xUEV!ab!#IG[BT*6s`s9Z}RvTE>%=' );
define( 'NONCE_SALT',       'ef*.Td?&p`6B}=OpEu9^?k(k,S*a>v>%e=1u=m!wt!m;m%AcC-}2%C}AvCIXjGl(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'padda_';

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
