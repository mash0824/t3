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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'turnkey-new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kai_sean1' );

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
define( 'AUTH_KEY',         'Fd8K8Q7}!3#u1?Y-.t>r-Q*l)uc>g*y<bPn/Z--E&-HW<ma5@6t=l3lm>1zNW|YW' );
define( 'SECURE_AUTH_KEY',  '!1VAN!NMossk]g*gtM##B/]pvky6HTGRB64wk`:9=sKJdBr**3ORQ8<6i:M>p&1N' );
define( 'LOGGED_IN_KEY',    '=>C2LE$T.b&Y/EkZ?&z?GLP,`ivRJE9K}~>;pZu1lHTeBhU>Gq|o)tRMRKt^Ba[:' );
define( 'NONCE_KEY',        'kOg#{0G)rK@+<bfFL3:@0X,}f;2|n[Hq1WEy)K.?w^Fnut;oUV:%_B-}d9h_0>im' );
define( 'AUTH_SALT',        'NO0L+SIB]T90&^&wlC>7i1ZnoP6aP*P^/pY2bZ7TF[_Y;Mw:>X9l(~cWXq7HA`:Z' );
define( 'SECURE_AUTH_SALT', ')45[/AHh5OXSj0;FWb7D#bt2:FhL^0upUM}(#(EmnstmvLlNO8kmFQtf^v+1glLl' );
define( 'LOGGED_IN_SALT',   '%4a<=b~OY511/0[7izqT^D+0|,KAO3jV<w~R_mlkr9*MHrrIi>p-)A(URdi1h2Dh' );
define( 'NONCE_SALT',       '^lyW$)R]p<Ngo&VD#xzri}`Y,a2y+xt0_kDL Z 6}Y+U>Wv$Tboob??KKp_=.!)d' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );