<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'db_olismix' );

/** MySQL database username */
define( 'DB_USER', 'olis' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Olis121M*#' );

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
define( 'AUTH_KEY',         'Mnt7IAbRh{T?:B9Z/).@#[xgX y{|:Xx,R[X!0Dw,LnbH2WC3(bW%uO8_1/U33<h' );
define( 'SECURE_AUTH_KEY',  '33NSEFFiqFv~My<@OONo6M,3$RCsuJM~:avSI7yeooNJBVWyN&<&T0{/<,&;z#3|' );
define( 'LOGGED_IN_KEY',    'Vl&<|2J7S@ro nh^o-I@l?E:8XnICr`Lx$01v,jhp?ln^DxO6loRN2EC_la6tPuC' );
define( 'NONCE_KEY',        'b$0ZOMUB|C1dLjOs4x3HLdeu/@xR}<&d_|&#H~EHC:;k|8jiI1.Ve%hU5.:t&ytT' );
define( 'AUTH_SALT',        '?/R;<F<U%j%W32]~--J4%(w^hoecUXuB?2XNl%v-f1l4/jKrbsOx`k]|:#C{7Mb<' );
define( 'SECURE_AUTH_SALT', 'e*8aSS:cB~Z&nJ^JxcyYQAdsa2HF1R:[(:8,dwfH!UcSI&ZlI`.R>l@2G`V:Tebf' );
define( 'LOGGED_IN_SALT',   '*3y-Lo/4B?M.E?|;ARCG[!l|I?)_&{R+`$_1*.QL$4O ~~a@]fHk,8dn[`tD6]Z;' );
define( 'NONCE_SALT',       '7Cf32=`vfSSzQT i*dj>JSpIb6dUGZ|6{/ *LwP]dB1aBKaNt}<&OcM8}B$6(,w9' );
define( 'WP_HOME', 'https://olismix.com/' );
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
