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
define( 'DB_NAME', 'mysite' );

/** Database username */
define( 'DB_USER', 'mysite' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '_rq~sh(~[m8+%.2m4vmGh)&OVrJ>6fn/lRqT,Xtkt.zp$DE7^!Z.gt7}5icUW5Jh' );
define( 'SECURE_AUTH_KEY',  '`[^l .#DRVpKBT{v b<5pf$[+##P>E04>n(X7ZI^OS_EfHg0vQ*_Y~5Y4=E7{| p' );
define( 'LOGGED_IN_KEY',    '<c6[~Vc$X=$ tU]ML;=;^!q&mJ}9Zr)?5j3W UmOe49>H5dAs)DjAncX9$Ewy&k3' );
define( 'NONCE_KEY',        '&! #wQ2/GS,7elM7A9_?+%i$,<f27go+NPd(xz94=H/R)?}jQ.F;%g=]oIELz/?A' );
define( 'AUTH_SALT',        'uY1XwOp=G-@B5b(W4NF$r]Q&D*9>XHqxbzl11$d{|403yp7kb`t58R[|2#-nhH:Z' );
define( 'SECURE_AUTH_SALT', 'tXhY9A]<6uxl+w+hnuDO +ET{|%$39zo[5-KFj^]qDTyNg4}MQqYAE%@c&&~*F}*' );
define( 'LOGGED_IN_SALT',   ']<xx4kA`X9nw;9}9?A$WJyZeSG}JLD#YT;LC!~i%zZ)!dCZ<(T+=2(ZZy!uSGID4' );
define( 'NONCE_SALT',       'mp%cBE} onY9ak5=WLK9]><fp`>j@c`WN{A y(.}j322XB>:=SgkL)/PwzU+:Jm%' );

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
