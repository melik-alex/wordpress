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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word_pr' );

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
define( 'AUTH_KEY',         'yOq.NQVPp3&=/*6BQJO6c&{vZA`>dw<:H&.F34$9HM7}N;QbOU_MLCuQZ-GU3;|V' );
define( 'SECURE_AUTH_KEY',  'b@Vl>EkD*-rIPrF5|c|PG1QYT5o!JUmI^BRT]6C[j-9kQLul~@*^D-4uk#QaD)om' );
define( 'LOGGED_IN_KEY',    '-bT%(.>3jG T:`fy;-POrfbWZzV^dV]XVix?v:<z8N1toVxx_-ttXK05l@ohq7-+' );
define( 'NONCE_KEY',        '&?;>R%~_X:R|bl5E/3LJWVNhXQ9kspytYN9]v?EGD`Mr^L<7TEuO!ZB&mGuA;PK*' );
define( 'AUTH_SALT',        'r[:WU!s/AS`Z)owLTh@zUmY^ZOOoJ#3RsGDz<rQuZ:=PAW$ub7z.{g?.|?aT%T+l' );
define( 'SECURE_AUTH_SALT', '],{nz8KOtxA~L2z/.~$(yVq!tI+&t%<uDPgGlecJwR3_18C.RQ1wjHuyBkwiS}w1' );
define( 'LOGGED_IN_SALT',   'uCaFlp2wz=CPn&J:e&>.%]Y7s<;$W~%zugO}j4E8s(,[4]9>U`#t_`h[[l>2(f=_' );
define( 'NONCE_SALT',       'Y|g4=gY+HhMvt@Z;E%cA;cH_6Ca>v-J?X&vK!}T~PAS;VFx0k/t_f 25l}$EwX<A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
