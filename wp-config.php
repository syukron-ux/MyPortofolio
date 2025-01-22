<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prt' );

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
define( 'AUTH_KEY',         ',?q*L|/Qv_;w* -NqkGhs0[si8;9:Jt9lA(.[q/IceQfzbglZbHOa;<x?G^t [:8' );
define( 'SECURE_AUTH_KEY',  'Bm2x7exrRKVwY)I.h]UNX:gyI;.{yR8:Zc<GVF*f@_3i!`}_-zmcxxIoeS>BZX{w' );
define( 'LOGGED_IN_KEY',    '+2Z IH3<xeKfWaK^ BN(A4M<m:HZg;eBsIgG,SY$XRs/9z%SsO%;?x9`f)6-1f#.' );
define( 'NONCE_KEY',        'NTl>FBzFCtZ;G_zU)(RMR?Y 5iLe@=.$6@VWsBu(_{^E3TD:lP7<B}b&z3cS&:Va' );
define( 'AUTH_SALT',        '^DQ$W?]D@>V.u6POVvr)aln<=hbohFlXr*m}DNPI0SwMVTY-0h}r|L~jco3JoZCt' );
define( 'SECURE_AUTH_SALT', 'rClcdELFS882{wZ !mhj&T:Bg3x0^jE<-RF~xjEsbl%[*arq`[pmgD2TR%1Cx)m`' );
define( 'LOGGED_IN_SALT',   '~,9dDoXaA3jX4wUgQXvdstj+#{OyIns+tMi*cZN>P!=][;gotW1:H`f@1vxUx9fp' );
define( 'NONCE_SALT',       'jvxfZ)ulPo}.F,=BuR=aSPqK{CY;bxa9FyF,X6%ISzsG)L{2*T6aqQ.d7]oR?onr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
