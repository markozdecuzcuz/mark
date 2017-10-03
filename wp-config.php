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
define('DB_NAME', '88thavenuebeirut');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wX]a`:!c@D>._-@EW8hlJ`+7s6hP?;(PUk_>:A7|1#=c6M`Y$8]xq&=i9f$4Y7O7');
define('SECURE_AUTH_KEY',  'es`hI4KRP6f4JMnFm$6^D4XC-Y/+u%Yt@|h&nO<,YDvqa^Z1+!8$u-7b2~8!IA=j');
define('LOGGED_IN_KEY',    '7:-wX2PI:<!91ys9Ab-!GO*7^+M-)=s0krSny9m:2-jL;yc|#2k(,=TmV)qf~m:<');
define('NONCE_KEY',        '$}jy@zC.3jU>n3$nt0f-;Vl~a~_(+|K[|;!Ql{)c3k1spZj:2&4Hc)l&<Rj|K!OD');
define('AUTH_SALT',        '8)|jg7,!dcLtQcf`R<S7y=Dq `bu*A3L@3:1X<9V$8#X@+w0@r)|`?$k<Bug~U`V');
define('SECURE_AUTH_SALT', 'nuoFUi@W4$vpOe{bfIm_-n7$^~Af+LB):O7~u+{gR!eSv zVLYCy>]SWzmx6M,+D');
define('LOGGED_IN_SALT',   '|;M%n;s|Z,-85VjJ+uc9=gmf}??^y(vZVf,[6hDE:H?GlHASx1*h;U_4 8jdPD^H');
define('NONCE_SALT',       '9@tiy7NX.Y%E>[K.m[e`skT<]UYsqK@%t=b_Ww#xtb7W>w[WpIo`FNwrj$9z~17y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
