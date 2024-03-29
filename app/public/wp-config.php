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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{[_7?MNL<v1WKhyzsexocc&SR4pXX$AhFC)80BpOLM(Y*zQI;@.3,M5c]>}f|i+R' );
define( 'SECURE_AUTH_KEY',   'n}MPYly+{22gKLI*]fPE~Y[)5Fmne@NItK7BA<O{Xw}?vDhc8`%OL4o%2j  9s|o' );
define( 'LOGGED_IN_KEY',     ',c(:;yc*Hc&t7;XLqB}6L:-Parp).fVMLuhSI,9byl$GGZye/&TPFFtazM[CUItv' );
define( 'NONCE_KEY',         'tyWdg}%]wA3;TmT>H2ll7_Vh##^lf58>^%t*PMXmKoXI(wd#A?etE]B,R:ci%$|Y' );
define( 'AUTH_SALT',         'l-;QdD7TH9F._5U3AE}Tjk&VPoup0;WGZzuV.eNzP:x!*JMWdH$BRiEm)b@I3IG-' );
define( 'SECURE_AUTH_SALT',  '+Vs`s9m)?8(2U+7@#h#/kel^6vO:BnIdHmen!~pVk87!u>zXSb[~[^%^]WJIVyD>' );
define( 'LOGGED_IN_SALT',    'F/Z$WmOh$,4?vt:w@l^+c;r=EdGktJQk@*86c_,hPKJr^?tyR6WGI-IaKEfXIE-^' );
define( 'NONCE_SALT',        'm$o;>s4u,uT$i;Bl^A96F<,Xa~l3Fwe0p)6*himcSLq;^BWZ|e%46W]Uz.dG_{o;' );
define( 'WP_CACHE_KEY_SALT', '@ZMyy=XA|C,cfAgJY;k=gyi&[c2[,7/a}%WZbsJo3@#q>hb G;yUI%`VHj>g+(@L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
