<?php
/**
 * The base configuration for WordPresss
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
define( 'AUTH_KEY',          'iw(FWO,) RCl%HhZ-@OR;PNg&9Z&Ga(#:)<RHjaC{07Gwb/!_Gtf.b.<X|%FjJA=' );
define( 'SECURE_AUTH_KEY',   'G|Jj2Gpo*af8VUQE*4}8-g-=&U55 5ja=Gq4k+0SCqDF3<:pL2P,~{z#@7>&&KN1' );
define( 'LOGGED_IN_KEY',     '7Q!q#+pJY2)/;KuzCTXQJwrPk6&-D,v,!sT%^n`%e JIq``<gkz?@Y]+aLtIsO;B' );
define( 'NONCE_KEY',         '_1]%a3f44~qLcp|YvuJbjgLtwp^-q=X>ET<gqN?C`cWvvdwGp1Iw/x*Tr!?DQ2qY' );
define( 'AUTH_SALT',         ')H9#Hja,qHN#vF>RU}tq$#U&u&heEkPWrIYQew,fDIfedlk}u?zxd(nYJ`~9y<@R' );
define( 'SECURE_AUTH_SALT',  '6[#]h:0%sn7mZM-+fJMZp?VwYTG:mD_&@lB=?9hHNI[(qib-,|Gaet`AC8*xq$<f' );
define( 'LOGGED_IN_SALT',    '<QX*VfPfWa8ka|!|Y]8;*P}*:&`EoEq`6bCWH$sWK @v-T}sf_P-XwhSdKZ?L3jS' );
define( 'NONCE_SALT',        'OR7|2YZ3C Nlp!qsuH_=qNAvlAgp1jTGzS+[hd`t=/dK?!zabX!kX2w94ha;JrVa' );
define( 'WP_CACHE_KEY_SALT', 'wA5!NL~Mj,cx}=~mKYMfNPvn)/O]vbO`hC4QMI#TA=oGTt#YU7]wK(:ueDG.>$Y]' );


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
