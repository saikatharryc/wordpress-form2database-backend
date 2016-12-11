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

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Y6 jKL+s<GF8`rE66es&`?&ySVQQoGr2oxx}vOYb~:U<w.Ck]rNevE}pIoprERo7');
define('SECURE_AUTH_KEY',  'DI?8[Xj)]}Z8!vzNwisH_gpbTyM<G9aVx5kLko-&^r/zmb,J-w^B<i83LFr}(gn(');
define('LOGGED_IN_KEY',    '$,g*%=:C%hRrnW^-y46;}iP~bcmthNY;ZC@5<$Aal-nvrF, xf#E?9VE&/2ab_t8');
define('NONCE_KEY',        '>?$0-,OUpvXG@@+G/FOg8(b%qDWuUP:?EEp2YNaF$o!Dqf7z>9T%F0R<lgh8$ySu');
define('AUTH_SALT',        '4y&T,~t6*MWlHU}E@WD|0xHy?b/]cjt?Y;eH9s)B^20$Bn4:|L[P^,!55!*lP2~<');
define('SECURE_AUTH_SALT', '/m81;p0Y;sSu~^hUe)1oU*9|@Xe-|AU[OeR_{bo$].42EU^21-Gt10gm5i/k/2q1');
define('LOGGED_IN_SALT',   'v:QY$IF}F-?}WI#4N}[0u~[mt:^1Sx|FVlaXgJf?iE~UkY8+ctMY!BB6DAcP[l$Q');
define('NONCE_SALT',       'Ly+)2+Y8>(&Q3D[G[0=L>/(bwIO|fk^UT@7RMKketz:$*WN83<1t%OmsA^k[I}:1');

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
