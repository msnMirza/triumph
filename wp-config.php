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
define( 'DB_NAME', 'triumph' );

/** Database username */
define( 'DB_USER', 'mirza' );

/** Database password */
define( 'DB_PASSWORD', 'unL0ckme' );

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
define( 'AUTH_KEY',         'j63&>;8&MQwD.o~x@T@bW!=&B0C#c6hHy.XgS~F?lVgX=AbLkT>m)P(HY7FLI.tC' );
define( 'SECURE_AUTH_KEY',  'p]*ts,CdKl8c(=2_PGi|d>?QS/ncyk9^ndfKjo&Oq*}Km0POTrwo?>19L{16dq!r' );
define( 'LOGGED_IN_KEY',    '6FRFCV^f*Tj`CqTBF6+Nc3B{`JM&GyBQ5Y<Qp]$;Ss6mpl3;>I=AH}`aIip;^F(c' );
define( 'NONCE_KEY',        '7-<ENv?R:-g2[ NM3m4co5O3Qiug$y5oiss&.<%c~3sKMDsLBsl$U AMN13H5|@S' );
define( 'AUTH_SALT',        'CLQ8rKoW_Mh/aXylfpcU?}oR^pf<XR}@KxHiF7,{Q$4[YuO0^NV<Po+y)zSAhRs>' );
define( 'SECURE_AUTH_SALT', '&%rhS:6-t}FB6TJMCIu*m7$L,hNq-<8kSgU8 Y739NQw&/T@% ez()$(|%eeW~Vm' );
define( 'LOGGED_IN_SALT',   'ko,&:2%q`<T|i4gT}d#z%n?H7ie{fNE76<4;m[MFB[PV-L^|@Apt9@t{?&CQ7+ig' );
define( 'NONCE_SALT',       '@<GMi4~ %<7Y0U5>AP{}0]A{oPbE+&:!&_Uv2yObo&#*<d+vu|m`O2s1sO{BSPWx' );

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
