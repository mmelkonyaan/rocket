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
define( 'DB_NAME', 'mmo110bm_1' );

/** Database username */
define( 'DB_USER', 'mmo110bm_1' );

/** Database password */
define( 'DB_PASSWORD', '%MMc1l1m' );

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
define( 'AUTH_KEY',         'AlYyrfH}&~ecF@p?aK+3ke5DgOmU#1tV+4B}nkB+fx@Ol0[0nI8c|bNy$_1m*c,?' );
define( 'SECURE_AUTH_KEY',  '3<shAw:1niku^?V}:rGB[Zo#<W;j}~ &CD/IAU>7309q~en3dKw!w1d^6P+P_ G ' );
define( 'LOGGED_IN_KEY',    'FB!?Ubgc<7w5;w:}0`X%hV}xrEtB-eVr2U8}pk)WG1)5v@[H[S^o%a0J_lq^s2U?' );
define( 'NONCE_KEY',        'kaJg(Z7,:?4C<J%Zcbsrr-MWa:q(Y:hmPM4+[:E020DYx^]q.O/`b)BX2u>BvK9/' );
define( 'AUTH_SALT',        'FHGw[M1=cM,Vv;N<-?#a~IR7QByK>CcL81cYq>qHE5]1f^<Jr?oz|e1JA0V#W`UR' );
define( 'SECURE_AUTH_SALT', ',@C2B{d59K?FR`9T!ck8D~%]1IyS4ESRxIi?B#Ju =;Yov9t[VMH9Vc}_jj<(VOI' );
define( 'LOGGED_IN_SALT',   'pK]~xD#C*fbd9Qbv[Nr6RQ,0KfHTF:;L=f}!_5C}DW=U%Iz?c:b(WvchG`B&FUb6' );
define( 'NONCE_SALT',       'h<8l2`[16uhU7EfeY!H*01,*Y,d.5y,+)}K l)s6ipz/xiP,7Z@E#kdlfRcI|-@t' );

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
