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
define('DB_NAME', 'finalproDBhps3v');

/** MySQL database username */
define('DB_USER', 'finalproDBhps3v');

/** MySQL database password */
define('DB_PASSWORD', 'msJYNb5H8');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'B}k>^Qc7|85sDOVg:|1x#+LaPpdtD;D<3jbnq+LEPEg0!0|VzcQcRo~s~wHgVkZ[8');
define('SECURE_AUTH_KEY',  '!hr@v!R5H5Hxl|~[_SdHP*y.#6]ame^v,vrfyQQcGR!w|>44JGV~+;p~Zp9:9*XP');
define('LOGGED_IN_KEY',    '05:C1htz|-KZ9LAq+u:_1erMF^EqfujugN@ozN4kV|0@R8oZkM3,v^Q7nzg0^RYFz');
define('NONCE_KEY',        'rb!o8>4oV|sGR8oV[4!VC^r@N7nUg4^RBr@o8,VFRsd:~OZGwh1D:dO~lxL1wd1C[');
define('AUTH_SALT',        '!YN!sF0kV-l9]dO_tH;hS#xL2-l8[dO_sG1lW[-SD.yI2mX{$PAuf3.XI#xL6H+mA');
define('SECURE_AUTH_SALT', '}XI$>yM7rb{$UBvf3^G4kV[-R8sd1!VG-lN8sc4|ZJ@oC}gV[z9]eO_5#aL*pD;iW');
define('LOGGED_IN_SALT',   'DeS.tSDtd;-OaHeL+#xH2iP.;+L6mxi2*hOa]-L5lxh2~PaL+i6_;TAqb{7,XEufr');
define('NONCE_SALT',       '#xLWHxe2*]eL+i<3,UArbn7>YEy,rB{cnY6.XEP.qA{bMX<uEAqX@kvJ0gR!}zN4');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
