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
define( 'DB_NAME', 'wordpress_tablas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'p?Uzy7]JF7 1Bp)b*2!E8sbKzV {)`90 _b JODJhv*hKhjU5wWX1w/yc+;W9a24' );
define( 'SECURE_AUTH_KEY',  'mSFgrDo{8<gA5rQ9y;9[v5qa5[AYb+TI`4^wY-E90|u2U.K?|Muo)]1BFdAR:~0.' );
define( 'LOGGED_IN_KEY',    'bWs$C55^7=h{fq|LC:>&f-_CMl~E-zW-y_rh._UKMFqvj&p7vEq2$5c;,95)wnht' );
define( 'NONCE_KEY',        '#D^HO|aZBke0 qH}_)oE5l4$>kP5|kp}mgDE?,ww*]q<@d&lWxz]|COBR7y,0{}L' );
define( 'AUTH_SALT',        'M9I0jW$^ 8DdG,@;%=t[tzTv)`xxRZm8 NI5#&RHOA)[m:g&8%M!x?4>]QQT?J]V' );
define( 'SECURE_AUTH_SALT', 'O2N1y.z].mDkT:g{*Nwq=Vxf82w.6;jE/,$v?hLfNS(UMJjH:!Aa@U$}dLp:tljC' );
define( 'LOGGED_IN_SALT',   'HKN9WkM~:@EIZKB8g%-ozN0bT(X2LTTXY5,7){l;+gcRKc qV;xo~>xBt&YI>%Pg' );
define( 'NONCE_SALT',       'MGY[Jblpz[Q$g/@rkyuvFA64B2V71A!IVtdZct`H=(l;@|Q)#jEI8=@2p4O3LQ1J' );

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
