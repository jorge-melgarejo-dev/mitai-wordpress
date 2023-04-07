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
define( 'AUTH_KEY',         '%TzN|g>eQN3E{i[:[wkzY,/1W.Vnh!cLWf+h!-MHe!gDpEpyETMzJLYM]rmMoal5' );
define( 'SECURE_AUTH_KEY',  'P[6$N&xF[{M`)rhYru.^pZP+RD2x0Xk)*V@ _G=W|,Qs1BKYWA,DuC4cPOkbFd=d' );
define( 'LOGGED_IN_KEY',    'NXh#M6SfFdiv79IbpHw.+;t%4;Hg2rf9tM?+tGHVjZ9hJm=LlF (`eq<AB236`]#' );
define( 'NONCE_KEY',        'J`0laPOtW:mzg> {JN,9U@,0O`$z.cZ9t6WfI^BQ& e_1-*9VGBX+Q}.toXMb)Xp' );
define( 'AUTH_SALT',        ';,wtqAn<PAJY$&24FDqI::cC1eOwp%G{(M`|vNnY#ofJKnurfK}OH54x>8k}RLy;' );
define( 'SECURE_AUTH_SALT', '$-S(MZIBVjIv}na>A>=FzE7H|7LUBF1w:M?G2>Kobciv~op>H_g=w+eX8NYVm&56' );
define( 'LOGGED_IN_SALT',   'G@@qY~c]T!5HoXH4a_FE;{:d,00|C4sI:+,l|NX$n,oK=7YkdWEQTr}|>Ea%Kum7' );
define( 'NONCE_SALT',       ';V8i^2VhK)Y7Qm.=$a{MB!WR|9n=,r~x:PG2 7*NZu@[z~N9%f]E>G5]Q|!lDuJh' );

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
