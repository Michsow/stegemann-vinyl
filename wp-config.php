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
define( 'AUTH_KEY',          '-&dWy8S6VQo4k{Hw> 2a>&9vukwoUU!Z/Qxf[/{^I~0W#=dy}8K;E)|e]Lg|;j6%' );
define( 'SECURE_AUTH_KEY',   ' k`MH)D7&w0]%@M,Sw]k!?5O0*ip@CWj-+>@c!&:`oY_sa*9aP)r~V 5d|SUo:$g' );
define( 'LOGGED_IN_KEY',     '-zr]/1/]zxV[h}rI@5(=5>x7sXBtW6>v`:cd$,>yB.y9ln1Z.%,neHu?j(LTmVy#' );
define( 'NONCE_KEY',         'WnF#U}U)=$porQ(%?h4VL]k9J3Y[<3~K`$M7f%IMgQV@fA6ff(C|?4pn2<@GRq2-' );
define( 'AUTH_SALT',         'eN6xzyB rcJtvP6Mn q>EyozA]<G$(2of4<wrFv?Ml+yMoiSU$(]uRTib0`^9;XD' );
define( 'SECURE_AUTH_SALT',  'hns,!*tpOoh,X= C?o#^AJH|#DiHbRQFV0I9D|pRQwI!lih%kvT_jt/;UkK{XjuG' );
define( 'LOGGED_IN_SALT',    '?VTJPkKrA7Hd6Mjl}j>268qzclW*c)5C|57<4:`{N~}oa562&q_]n:Q33(@iL(}$' );
define( 'NONCE_SALT',        'k$2}L|~)jR3vVz@=O?fKeYX!m6`=w=s%#Iv8lBb/i|=Hq0/|n8fl_=4[ahM(av6<' );
define( 'WP_CACHE_KEY_SALT', '4CLab[qhGfxC_I.x]+AO`JADm*G8an0qIpr~KcM!K<wMHe07,KQlT<i0H=H}x.2%' );


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
