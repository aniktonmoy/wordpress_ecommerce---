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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'tonmoy' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'jM:&4C8[W:ybf;4pWkBAdXq}tJ3/8V|?V<|J_*;{?|IZ&]~KCUn%Q6LLL$J2T;94' );
define( 'SECURE_AUTH_KEY',  '2ywcsk!9;ZHyI2Yo=3QR4Lbrq(XOgpXqsamQn)d5(/#:xc?a)Vho.ojLtZ-?>B>Q' );
define( 'LOGGED_IN_KEY',    'iQY2Msm+.YTc0+E/ScSm461`,$]k8@I5Ew=2cy;kW{vasnsom%)jHVTc&@4i$e; ' );
define( 'NONCE_KEY',        '7/Z]KsYW^Tt#pX|hjg|HWss#$ywj|?&jVqq$kivoCg!*AW5[~HC65`PvH68B`y`Z' );
define( 'AUTH_SALT',        ' C=aT=IJQ`j6<1*G UA)1/k3u3.Yw<yMDo/6#(w:4[>;|o2i5`9;IJN@#Ez^<#i;' );
define( 'SECURE_AUTH_SALT', 'i82**fr%v;iND8x$nC?NZe/>cEL@Yd5i?< d:@,2SNE9;c(&%r<G>R{yoc+]pAd7' );
define( 'LOGGED_IN_SALT',   '#-#W79pWEX05NaB>Au7gvGbDPX!d?J[NLlHeuy<HMz!%ZT!/wSW(+}hDoq*q)n/*' );
define( 'NONCE_SALT',       '0LV*lin(9fLh~,=b0r7k_iH.[*0584pY.n$;2e@E<bKJah_jx~[0!aB*_<[@%lF ' );

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
