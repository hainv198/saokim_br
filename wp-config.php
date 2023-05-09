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
define( 'DB_NAME', 'saokim' );

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

// add new plugin 

define( 'SAVEQUERIES',true );
define( 'WP_DEBUG_LOG',true );


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
define( 'AUTH_KEY',         '{oI9d^v!bBdj&HqN)6[j(BA*Uu7B6(Yyu!5qwM4f;${[.Lc4eEbI:nT 9 ,LXlmO' );
define( 'SECURE_AUTH_KEY',  '<4H@ssB(ugv5rN?3)ire>.p]0zHw6DA;U;v7|(rAV,!V5o*=eXM3u4A5S@&RFJE5' );
define( 'LOGGED_IN_KEY',    'on5DP:u?R5DYuuP{)CX2[heY6:8fFC&Yvi)7T,w0;:pJOxtHxM6X`iuS?5#eyBBU' );
define( 'NONCE_KEY',        '%~+gMC)&EB1dR ~&&rEX~,*xWt]w$b4b_1))__6: }#buA42.T3jH9lBi!s,!hba' );
define( 'AUTH_SALT',        'nV1wvyhy7fBP4X;Nsxp-;g|]C;tsmMOhf~Wm:|9H%yFtdYrpIRLCMc(=a>,`v4kj' );
define( 'SECURE_AUTH_SALT', '87#=PO3rzcm-6@krT3V]vLcmMJfYP}s]rjQ)ZzH+P&ugV7<rnuo:Emfre*GIgU)m' );
define( 'LOGGED_IN_SALT',   '9cs4@vFj|eBiZPMMhq~=*5=^olhi4#+0GdV1X,m!<(M+Vs{Es4wT,GiN{#@xS6N1' );
define( 'NONCE_SALT',       'hV8gxeS?Id~_Cr5+I;v](ekL>!.B6zano$cqJQiq.i0gp-}?h`_:;o>h=23I/6}#' );

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
