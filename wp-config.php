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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sekolah' );

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
define( 'AUTH_KEY',         'hfP0r8tg{+U^~ANw3-_E{&/S^b6H8YEy74+UQO!1?/0bKSC!5-1 d +ZDAIy>!Dq' );
define( 'SECURE_AUTH_KEY',  '$t+?>GI.vz8(l,/;OH.+iO_DLszC(-lg_h`0}IM.6BbI4FL/}fay}3x3Wh!3bl2y' );
define( 'LOGGED_IN_KEY',    '@|bN}}s%Dr3;M*vBJON-WaQmvg(5n9xiOf)(a@Wh3ZV .Xv#+lkL?C+Qty+>oK>8' );
define( 'NONCE_KEY',        '/w!P&5k7L.I^mLFGxj;DYeMKc4EZJ&zl}^3N6`Z1fwib9Lk~I(qaD2fT*9*:KWBV' );
define( 'AUTH_SALT',        '+j)&zj/{BpCV-o4h2}4r`Ne~7cW|SzIQJK=m$-jl$fje)&Wcp.]OlEg^D(~U5C@d' );
define( 'SECURE_AUTH_SALT', '7gz9^qL9Ke%C&5?@kQ`5[vrl_Q7Wenu}i9X1L`u1:%<OKhoVs,PwJm<}3M:q^Vhh' );
define( 'LOGGED_IN_SALT',   'jq:3NNa_AP.~H75$|q&L_k^(-f4XIm^(7Q=vpa_<7JV|ah|L}8v9D=uR@oq#S/$6' );
define( 'NONCE_SALT',       'LOvg-~n|2K5H8lG34a,`]fDWiU-*~U*unf?i_S(+c~o.X+h*A+~i$v&vY@qv Wfx' );

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
