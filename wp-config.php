<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'newlakshmikanth3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mcCbbU`?1TksFVaVnNkC7N@0OfJ>&ccv1WxVlN0v7}MD1g$ZF>ncA!_lAhZCazGq' );
define( 'SECURE_AUTH_KEY',  'f!|(%bJ:,_Er)4i<vv1(L$=jdGz[|,,c8!EV=gw8yq25-,kL8oDIS((v1vB^]nv[' );
define( 'LOGGED_IN_KEY',    '|p|d=stA;&w@SBQZM0dy1+y-I|7W/I0g3Q+#nd~a?s^d%rhc-3@2`L]tAo|Uolz;' );
define( 'NONCE_KEY',        '0gNcGxU8:>V1?D8{10}-=(]YU;9?9W%RJ.ge}5d6-~hFD rnGyWhxaU**I578:H0' );
define( 'AUTH_SALT',        '/T)IAJ%o{L p^b<qd$Hh]s=Jd?>*v57K, 5O>0a<`)AD=IHHuYRpesrIgO|;E`aw' );
define( 'SECURE_AUTH_SALT', '#00N:KtvqmU;Km(#AzEVfr~o4$70A/VgU33F}}iusEx+L0Q@2`9a dLT%(s[q`L5' );
define( 'LOGGED_IN_SALT',   '5HHTPgB6<@eFsXtgc9$~>Mj:IxG![q=rhT(MXEFGNDv,KKFkdwzpHR1{7MU; <S7' );
define( 'NONCE_SALT',       'KWkn!4Y%4{ryGZ?T0jhiAP]cvzGx)6Xr9{MA01[Duj!|J1br+Hb.9o^L{J90iQjC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_new4';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
