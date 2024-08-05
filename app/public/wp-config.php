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
define( 'AUTH_KEY',          '.T{XJv]mo67M!@Dm*Eu%7!S62F<fc5NN;17i)kt!dY~5jMW^Ai-[X)G S+%Z4&K2' );
define( 'SECURE_AUTH_KEY',   'Ri#pmpN{O;wwb<n4ri#b<]&kNKcbC|;ALAzR7ZT@U pU2|7#l!8-QdFt<I<K1%/1' );
define( 'LOGGED_IN_KEY',     '$>t_OoLx(.4P-n-8f*|(WLa!]O_I: }46:dJJ-rH[`65~v8.x-)c`H5IY3)IBg:s' );
define( 'NONCE_KEY',         '^-RzyVNxcWGW0[0ADi_(5#IU7l^I,GCP(|`0=dA&lUn!vsNtSk-oyPQ}Zk1-].Jt' );
define( 'AUTH_SALT',         '2}mJ#y]hPSnGXp8]GKWJ3zZrv}t@^;<zNO}.RNv18PwS(T{]u|,__X*9v7|AR;oB' );
define( 'SECURE_AUTH_SALT',  'kxT%`{{rp[ 5So7M,E_Dr*`o^$46eV4ZQ{`~^!&VkW[xu<%pO1r>WB2zbw36prkg' );
define( 'LOGGED_IN_SALT',    'W7TK~V0ohes.5F@>qD^{;E0Uio(M.RSB55R?I0Yss:f{YxikFo;LY&h,cVSJ8Su4' );
define( 'NONCE_SALT',        '[Ti 0yTOiTM--SMaSs;Zb#OZ8+T{h|K0!s7A<MU~5I/VBdZp2.;dhMZra}p%|Z`|' );
define( 'WP_CACHE_KEY_SALT', '_CFhFCJ_|]u~KIk,h6qp:xd9}Rue$]zjB*{hA@o9cM4U~*Eq~dJ9bc+){WZYd#N@' );


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
