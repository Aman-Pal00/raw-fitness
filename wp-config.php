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
define( 'DB_NAME', 'raw fitness' );

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
define( 'AUTH_KEY',         'mqnP8E3A/3w#xcl.W4yAryZ)E`xUdv_ y.V:mq=e42mV=Ej.?fx!QMUo,%|DLRp#' );
define( 'SECURE_AUTH_KEY',  'dw}i:mws`)`)5FwjIhn#I<t?glq]9&:CxgHkbVW < ~HTQY-sq::#i><,k!C %FB' );
define( 'LOGGED_IN_KEY',    'w]UQM~S{7^}M4sJk4.wF7<$[_wFtOsUVu YD=ZGN65/]lfckHjq,<_%`#}nJ+$;N' );
define( 'NONCE_KEY',        '?bN8cuD,PvRh$6rC1EF?2)r<4ZR`mfc#_aR |.8txb<j}_s>g]BvY4L~[4S{F~,B' );
define( 'AUTH_SALT',        '1R*vhyu$]Lm[/Na-,#V(76lqDwh;R-Z$.Kt>S@J!fRy?9VQ|OW1=Z,U*ugP9,p1[' );
define( 'SECURE_AUTH_SALT', 'y&R>dS?mZ,$@+6+1J]PNb$)cBwb2%m)VgaObiCQw~J&QE6!dhy=<I5dTS`S)%:p_' );
define( 'LOGGED_IN_SALT',   '^BCQVm$qZ{xlQ?2_P-N#EDZR u%`g57z#Ly#.Tmx2=|sg+q11Jk|I3By%Qyw`fUv' );
define( 'NONCE_SALT',       'AstX4s5Q=Z#6^aEz+u;:Fogqv8O9d8pEKm8|E<X<Fm?%WE%L&.q1s ;;]<b8hZ61' );

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
