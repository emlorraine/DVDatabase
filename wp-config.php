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
define( 'DB_NAME', 'data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1_]<!Yf|/]1c_02%79H$?.))]yptbb 06=&b]|%N;#{>K=hTgY9BE~XF&PK*bO:]' );
define( 'SECURE_AUTH_KEY',  '?mwL|p!bJ:Fk`$jb|;P6?k37dV5QG:q-lX`5I)y9G^u:,o]ZgFmDr`_ronZ7`>~u' );
define( 'LOGGED_IN_KEY',    '*fT@t,!.)+$.:z5N6`PVvW$U80;TmL9D,) FeDswxt [FTrE1:rfTQcsZOEL~~r<' );
define( 'NONCE_KEY',        'J}rbJ5KP2l/Q1F{rg$R{%7B|#:pQQ=GD/{&<(.P0:;xyb_6#NuS,=9FquTV/gsRb' );
define( 'AUTH_SALT',        'bm$k&i)@jjNgnS*|zpWArb_LUXi{/gqX?0z?8j)BmwwD`Zz%-^C+>Q3bo7)8^#PU' );
define( 'SECURE_AUTH_SALT', 'fL5m.m#Co*}EYpw.%qo]2 E&Ik!kly>wUIaaK6i|NFVDbX51Rq1/G0qs6HS~9X3e' );
define( 'LOGGED_IN_SALT',   '-P5MCu2>B6ma,@5y#7-uMLR4&M,a-rB&;rTOND%*n^`c5JN Y2,+L)PAWc,~zQM0' );
define( 'NONCE_SALT',       '?PVi;dVC`Tz[`0[o%8D1*CFezA[K+{96:~#V2ET;)m,}n:~s{J,VjVaFd?auMsEG' );

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
