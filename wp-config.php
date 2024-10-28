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
define( 'DB_NAME', 'quanly' );

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
define( 'AUTH_KEY',         's0*?jwNF}vFUN}o8qg?4-{?!IH>S;c{@$|Okr~O[q-xY!75O$eJmtL0N!K{b@h_/' );
define( 'SECURE_AUTH_KEY',  'qzv9lLfs)!Rrnp=x}p)2t#upn*{F?<ErdI*T!@( ]QAu|}DzJ61h7U6SmEr)=DE&' );
define( 'LOGGED_IN_KEY',    'x1+E<$&ldJc<>)VwQYZXk2-H>^JsN,w_EQCWmV1CLLt&?P!`OUXsNji]wd.c;NA)' );
define( 'NONCE_KEY',        '>S^B;9d&Xy:jJ[3O)J}E+A{E-SWQ>5CJ)=?3gl|m!<yv+O+uP0ez>w)C** lb.~8' );
define( 'AUTH_SALT',        'xRpNNCwC[`5nhYbS}d-YxxrRc1`FA<w0|GX^ccem5b[R]7;N2S2G2sWmb_6la!!Y' );
define( 'SECURE_AUTH_SALT', '7{^eqm`O-Kb/GMh0I]$uvm~so0g`VYd;(kA/zNP6H@rO`yAL9A]HX6):<aGakF 5' );
define( 'LOGGED_IN_SALT',   ')a9(L8A=(&y_@b@m.P]~sfsfyd)uSg|8x|BbUa&C:71X18(@SwylO8NCNZY6_it8' );
define( 'NONCE_SALT',       's:g0g:_b]-o7!j9-h&P6K?*,Y,P)c-.6%9M5GVpxtGDBUS2W#u FrEef8v|sSxMT' );

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
