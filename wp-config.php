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
define( 'DB_NAME', 'solarpanels' );

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
define( 'AUTH_KEY',         '`=Gr}Rpg~^L^;MeKY8iH,Z3_.m)s3,;g:ii]{;36$x1@7(,6lFJXM0B/6{4< e?J' );
define( 'SECURE_AUTH_KEY',  'RroODKAPWC$g4Mk5.fiLXlk!QPp?`V1K(4Q3wS9z{BsXJ[w1kXm=fwKF$Xj;huJ1' );
define( 'LOGGED_IN_KEY',    'qZB|Yebn/0/<+GKl2bwgu0w6ckJD5ce#tC7dxDylh6t(3/bt4/}bZYo4W9+%=SCN' );
define( 'NONCE_KEY',        'vn s|d7OlJB`wt7.rE|/b7h*3Dr Up~9l3lSM,`xM!.hA$p/M/hlndk:v6@]Z;qE' );
define( 'AUTH_SALT',        'hw|PtEt#.d7[giY8smDz{]1rD[Ak8_J$D&YW@}#D)S+:y[|cNQar+bj6JvdEF{S<' );
define( 'SECURE_AUTH_SALT', 'N.qvUXHyZDFJ750-6?u+9nPhI:z l@RE[kpu6;<7-:^b[Pa3c|Zz9fijsPiuVv!m' );
define( 'LOGGED_IN_SALT',   'k*73/c]U[!x-0LFFt?z;[1ZP?nCt=?{5/k6tjV];oA`YG!}iNr*@JA2n&-Xu,vO6' );
define( 'NONCE_SALT',       '.@8Ev]0y<) 58SQ`q|%!%R`C`m%@m09n0m%l?e@}#7=Rqs[V&)TFRe>dO1(=t5H`' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
