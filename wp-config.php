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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'N?Egh&])[H05.8qi.-eqML5q8<sI(b!qI`nk^=8PW_$ nrtZ%~d_.C5g7hqq vH`' );
define( 'SECURE_AUTH_KEY',  'E=eIv0V`qI4C}s@w1rW0DY]$c~LT>I#X&]sviO.5DB)0)l+~,H)[c;K4on)YKFIR' );
define( 'LOGGED_IN_KEY',    '1b{cFZhQHlKl5?zOsy}Sg28&I8oY-Ug_tR)60YRKUoL,0~F3Q%>5w@~:ggP2e ns' );
define( 'NONCE_KEY',        'nt_5TL.SgoV+bQb%)K1{Ki0&Yfd%R/h9saVc=RLo=?pFz5aY|xc3Pf#s*V>^kxbN' );
define( 'AUTH_SALT',        'b!KrDVni:Jg.L~q4p}5Cb.w{F3Eg:jze}>gVoSsbD8=H*5e]`p6A-vRP*Fa5u7f3' );
define( 'SECURE_AUTH_SALT', 'l9`&  AW@XBe|H76HG9x9CV?c*qaJP<w}+DYr|0t-.0HC<Stox6&cy~Tx37bbWI4' );
define( 'LOGGED_IN_SALT',   '-Pi)Q $kzWkjFXff<e:j4k9|/y[a3ALf4ByxSql<$B:-T9aI3@bJ@Pl7A0d;$Y-u' );
define( 'NONCE_SALT',       'hnOyXF942R(hZG)iy<(O:w9N{>&kq#g%k kP[XW0]EL!UtK 3xorTRBR,JnVPsyr' );

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
