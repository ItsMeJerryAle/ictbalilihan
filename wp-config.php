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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u554712135_LHUV2' );

/** Database username */
define( 'DB_USER', 'u554712135_diAnQ' );

/** Database password */
define( 'DB_PASSWORD', 'wdUpLKPjD7' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '1_m($[I=(xmjN8X)gy h{46@;~~?j@<$//x~C@oGQ#I+Y=^(2=|0|Cf;p*2nV*My' );
define( 'SECURE_AUTH_KEY',   'x6-HztkU$HlwekPQSU(yn79AU|S#gtU-Qs17;J}@[mXlzI4uYq14=nf|i#?L Abw' );
define( 'LOGGED_IN_KEY',     '~LIry?L@j)y>dg/~jS/>w&&5jB^$us8Z5g>8W1ub]^J7YCQ;dYDA11wMncef]GHB' );
define( 'NONCE_KEY',         'k&6,=OIZ]SB:Z</HZ!Ae_Tg/0z=nA1j7.r3A(n/|Uh$sz^?ja BrVa#L~mnL89$j' );
define( 'AUTH_SALT',         'E!ZLUO=zvkn^NtT:ucP;R<^{zf68Qnmp{k`o@DTVy+QO1cD%g7]v|fi6EDPo>>.k' );
define( 'SECURE_AUTH_SALT',  'cz_V;g]tcc;|nDR&|h3.W]R|@UtV{-X+N]^T:0Y]F1o[E}c8&/;<K!`DLh3#I&uh' );
define( 'LOGGED_IN_SALT',    '^Nx$DJR3W)qu!wD[vU^$Bp6N2sTqX#w {Rlq>d3MWYd%rOXK4%H.2Zd>/Q<lW(8Q' );
define( 'NONCE_SALT',        '94-&z@hIr]b8ZzZZSwwq_3.ZI+Q9f0q:w}n}|-`WsUVNQ$78_b=C{WTX@0Z^j%w@' );
define( 'WP_CACHE_KEY_SALT', '69-fNC.K@Y)!Ds3{$?wVN((! ^[aTp1K+R<flu>pt[Jy47ni41xPCKno>{@8;KOa' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
