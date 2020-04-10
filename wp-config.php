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
define( 'AUTH_KEY',         '<S4r5_[tm5t:$]2U=s6j0BD1$`X`0]2z!u4L[+>.nwqr1lww9TG~>.UY_n`r6[G7' );
define( 'SECURE_AUTH_KEY',  'N`X[QX1%S)@uVu{3%2PKl6NPQMf|T2vr8^fUtbeo94DOjsCj?m(&8t};iOjMc8.%' );
define( 'LOGGED_IN_KEY',    'd9ct8D4mQ.|I)!?{B1G^>}<$/Q{|8#Sv[vVO4<}X%YCJtaqr?RrM?9P40B#^Xbe9' );
define( 'NONCE_KEY',        'XTE?T>0P!jk8AS00^f1MRTl1+Jc-M(O}BWSP0~/aq$>_tS9pde(hZ,$YLjzZ>pS_' );
define( 'AUTH_SALT',        '[gVT}&_q2aDL}Gkz;H _Zd~S*L{=fg!{j*DI.W3`rDJo#qbJ{;x|/kA!QZ[drllP' );
define( 'SECURE_AUTH_SALT', 'Lq-`=,8~c<kYC)/`~%)@/alK[v2=vc%]Cu+^ZSlZs8NKIm-MImk>v[[ 6&?I`d<<' );
define( 'LOGGED_IN_SALT',   'L|cJi(bBPir_bJd30!zTKr#@]`59q[f%;BEQ!x:<([+HLmjo&<!O%hIkdxyWB=%_' );
define( 'NONCE_SALT',       '36b2w=!]*Og/W :0HE18GLN$d#U(Oj&,?`-KP4VI@Qd_Sh7l-#3/j4?G#i|QmvDi' );

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
