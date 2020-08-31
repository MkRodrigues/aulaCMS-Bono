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
define( 'DB_NAME', 'aulacms_bono' );

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
define( 'AUTH_KEY',         ',/f#GD}51EnF?w-NZ-h690b$?#i&VS} I^i6py)M%rcE5?}shC3Q9Hh G+Mr:F^P' );
define( 'SECURE_AUTH_KEY',  '@G:hmcMU]JPT+TSy=`u`KL&3YE#R/+BPs9~c PhTC6@bvy*@3Y/%]S-Brp0K<J%9' );
define( 'LOGGED_IN_KEY',    ';C+as %uv{ j=yI55Ymt&8ZcE$;+#U<fz3%*tS1n~QoJwX|(SWQ-ZQd*Y6t=H3J;' );
define( 'NONCE_KEY',        'Z*l+_/&-%Z()lZz]ry%;w]WZGVAi?VkU//10UFKv;>u-(Mglj^8Z-@&gk$4?}3Q0' );
define( 'AUTH_SALT',        'z81v2NwIZVL7]d8QJ~Rjoyum&R`+5M*x0JF]|DdZ8?JEWkfrN}SybkhN$h;(3v%K' );
define( 'SECURE_AUTH_SALT', '8v+Kt)LOv6o}@JTvTJ}31*s|Z~X+W;_tK6ZX_(8F!(qA>)!+Mzn8Bi^ M2v>DF-p' );
define( 'LOGGED_IN_SALT',   '&;B*92ZZg6v)jr;)XdWD?E-D(@v0/:3sQ7|}zNn$&%0Dwg?yc|tzHn`i[zFgfb/;' );
define( 'NONCE_SALT',       'F!EJDxCW~_:lGNf6,!l4(jADj8QkB@/QO.udD7E1ruUOG~eWCD+ Jc|4Pbj%w)0}' );

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
