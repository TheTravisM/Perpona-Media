g<?php
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
define( 'DB_NAME', 'Perpona_Media' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2vduHD_N%T GvSD?#5T$$aR[L/s.tgf|IN%_?FF]%LFk<q5hm:v6(<<m9?/-3-Pv' );
define( 'SECURE_AUTH_KEY',  'ldndg32;ncA9q_K&0!kuS#T{JZ>)%36o;M-8uB;^X2:3/=}WuBm#[h%rXK|0Jbdk' );
define( 'LOGGED_IN_KEY',    'stZdT].!Qa9.em^xh>;:+We2aAaG}%Z;|0gaPKcN[[;e,UYs@M#Q$RPer=)A&ei(' );
define( 'NONCE_KEY',        'S&pmNe[`.(UARQt[]R?:|Gg?2#dq32o-~eJ;`,T9b)L$*i^JC`ug<A`Id<:,v#m8' );
define( 'AUTH_SALT',        'NqSfkJ2f?bHiAuUvL}`=?z:%6BXv^8p{RKkBa5t(aaQgZa786jG+]4x:x@5D; OS' );
define( 'SECURE_AUTH_SALT', ')#qnfv8Se$B$X5,iNW vG%f(RlD&a*V<!?,^./I]Sed;9kGo?PT>[/uS3OT4wQ~`' );
define( 'LOGGED_IN_SALT',   '2au9V-I6eRE/-}Zr&HrRh7QAV4txQ&ve-K!*,t+?*Y5 TXRmo.my:f^s;1B)jfp>' );
define( 'NONCE_SALT',       '(djmJR+9,{*P 3c-cb56K4@fMzhW%.EO;X[7ReR@|)rR qu-Nv>,an me=q0GuBi' );

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
