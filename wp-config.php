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
define( 'DB_NAME', 'ctm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'B.t1E[(|/]:W.[6,JGQ-QnYNJD 3tIc[Meet#-h#Y*OUN0udm,4M^<I|E]M{}!-q' );
define( 'SECURE_AUTH_KEY',  'Sn7+2J+o[d7|3,gzJ7;K |JCunbxlM+pHt4#}#~agT3(lH&=E1Rc!A}=Aa$y7#Ld' );
define( 'LOGGED_IN_KEY',    '-UFJ&5x*NuMfL^Qcqpr:F=&T.r-@:_uBKf:?;pjSoD3{CMHsMX5 grtWw4DP {ic' );
define( 'NONCE_KEY',        'R).$:r> Db/zY&&1#F5S}g#[>a((d58zSj&*%ozx9elyzZsi 4[0 ^Th~FN$US|m' );
define( 'AUTH_SALT',        '?-$JLw{JcTsq{~R,d61x;0<(OWP1-5{o@!gG!d}l=}L;CIl},]R=3.[L;@J0R`_Z' );
define( 'SECURE_AUTH_SALT', 'NV4xUVd-^c=9nhozP<wgj+4?#Y:RflbrEsjc7j|4Kp%K5h&^X3Dg>pC4j^zH;B=>' );
define( 'LOGGED_IN_SALT',   'hLEGw^k*b(c =5cM7bd`5rJM4sqt|0 6GxJD$@^PsufWf_ 8_SB[~8O|>QHQ>Jb8' );
define( 'NONCE_SALT',       'GapYzN<`j|tV?s<B`~X9?=kX+,AguT!>4L4F;4Jc^g7}<F;Sx:oRaq:TO[=c(x(t' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
