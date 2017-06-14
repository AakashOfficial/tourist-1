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
define('DB_NAME', 'tourist');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?GVW$>7R%hK54_YeJ%yLxGqRY$UV%<c3m/E7-+18|Vk*V>B;z,oRgjd MugC8>O-');
define('SECURE_AUTH_KEY',  '4o^:W[y a+XB_,HwR|X0ITA?cc690u,Wu`%)p3|oNUVW>MZqMqGg.S;;uZYF5OJb');
define('LOGGED_IN_KEY',    'RjXvS-.Nt}`FXuuG.gAv~w1>N`f*~m8JsY[!2i]MH.n,1|N0rF$NZt_fE3CD|9T<');
define('NONCE_KEY',        'Xy9`B,j9ebai3zW@tt^lb}@VV.pu)B{+|o(qL*GnSST Mm^w;3v*8$W*}8%F!2~c');
define('AUTH_SALT',        'Nxc;6qg(|:{c^:sit%r3qxz:G]-z9Rw-tWF~zPk^l:n[~#l-Bg]FH&CVGoe2r>X#');
define('SECURE_AUTH_SALT', 'U J,IXQ= gRkkH:|iwtAi;U16wfs^UC&?2r7*DM?nf|aH&<~LOnozTu,c^Y/y4TH');
define('LOGGED_IN_SALT',   'Grh6QAt-DM-%p83UpIp%?-v+Gm#gx:z,)k2o?b3|t{jYMs#%=C6qG`+W!_#0>W5#');
define('NONCE_SALT',       'NAPx0P2CJ(<)RiMdE1@(9Ypk0M3 {wu5& HKC{7;WGol#K,SLosqHoA/~^N6`D}@');

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
