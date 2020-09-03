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
define( 'DB_NAME', 'demo-wordpress' );

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
define( 'AUTH_KEY',         '+$OmOi&:<Nz0rp=%wbn#j!n-2$[e&La+)D4. `5[;w9:nSSPo=i_9w8C&ER&}~~H' );
define( 'SECURE_AUTH_KEY',  ',5mePKfDmO9x{F%^VNGb}JsBC+G=4aaBqH^8|`gu#c6s((>ejMdlsG#!1-.k==j+' );
define( 'LOGGED_IN_KEY',    '~,ltqUQxTR-5fDXn,`!HYCBzab+~>TXOYQm 4a7TPsB@}SAh5-ef_QI#o?3;Ddlm' );
define( 'NONCE_KEY',        'PDGX_l@Wo72k)Xt ,SFSe0{kFeWOyw$)^I,.}l#;64v5Ovb^rJv&&[9?|>E&hs8R' );
define( 'AUTH_SALT',        'A;3aSq;[M]`[MYI$dl40h[Uq_t [Wp,(J#h!/>!ctDyYcDpq_&Z2O3;-CK25Dx~0' );
define( 'SECURE_AUTH_SALT', 'EyBqq+JcyU0sB$@]xu|NKpyu[3 /F(J;z<Gw/I)1hR3gV>u}]s#Qo64X8*BKGs5H' );
define( 'LOGGED_IN_SALT',   'U>)iej?!?k%Kj3d%mwK4lo49n:K9,}&Z)M$m#B5B!q@)GPN#.|pv/rU:*13pIc63' );
define( 'NONCE_SALT',       'mk3Y+{2-d>.!ohm*!9HG 1gz`zwFOILTW9@%wOlDkmiL5ge2*M8L8bQ165Nc9nu7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
