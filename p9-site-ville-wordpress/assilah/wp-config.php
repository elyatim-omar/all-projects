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
define( 'DB_NAME', 'assilah' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'solicode24' );

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
define( 'AUTH_KEY',         'qFpm<]5-r%RAguP|w`Z:pRmEbiGr ?nYfBBf.Tf:vf/>kJ3x|ee9SxJg`$$kX3%|' );
define( 'SECURE_AUTH_KEY',  '0S`VL&*3t99#,p<;jO0Qut UI>we,W{?Mq<r:dKQGD`{G)YpJHz.Cg6)MpQZAkUr' );
define( 'LOGGED_IN_KEY',    '0&>X,.&97/:zwMHju.LN=b OGvJ[7MAUrboa~zJgpUO<ZMc~1n-vzFx^K)TR=ow#' );
define( 'NONCE_KEY',        'vV?cR39RAGp-nw}!2lTSvbNCXQN!4*F9zbgr)8eFK&X{/xa}_zT31%1{ob5MBY;l' );
define( 'AUTH_SALT',        '[ 5^r058Hh0XF4hT2UHR|loi9uG:it&Npw$@XGhDxBLEMFQH6M)e/Pm+]cr]~XF0' );
define( 'SECURE_AUTH_SALT', 'g)18x4!/A*o1elyO;r;Wykj~c{EkPwT}@@,$JU-&ODzOKj9R?JNgkf>in#NFW2W]' );
define( 'LOGGED_IN_SALT',   'Bj0>0tMKmqazM{^OU>2pF[e?-3~MyIz4a/y{w6b-#XGbM5$k}u:i8v;hyQa*eP:G' );
define( 'NONCE_SALT',       'W]pjLt)raKom=MOhK.hU-zq`Ojpl7g|JL@~Q<JAJVBB^?K!M%;@xT3GAdpT0|YbN' );

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
