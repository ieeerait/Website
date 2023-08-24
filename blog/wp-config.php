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
define('DB_NAME', 'wordpress_55c');

/** MySQL database username */
define('DB_USER',       'wordpress_adb');

/** MySQL database password */
define('DB_PASSWORD',       'pq6Rx8!5FK');

/** MySQL hostname */
define('DB_HOST', '182.50.133.87:3306');

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
define('AUTH_KEY',       'oX4XnojO9hwF!z86tF(w#1^s&(oshxgVXxqs%HifN1YeYOHSQvJfpjV6#NNpnz2*');
define('SECURE_AUTH_KEY',       '@uHR6l5L0)0(4C6(fRkH#JU7Y504YVqaa8evF^5yHjWBSSH&KKSWF1LoajdiMH%d');
define('LOGGED_IN_KEY',       'wlgm!Tly@OlTSAQbB2Nwm5YMOq52qL28j8&ARyEpMLeyDdfPJo*N6WlbjBb)oh@k');
define('NONCE_KEY',       'XCs%b&#6Jw*zaFbjBxQMcXJlSaBo%9FOKpL5bE5!Glea*Hmf#kb()Jk58UbObiEP');
define('AUTH_SALT',       'Dli8lBGIv0Bx^WmK57jNRNmljs6euc5vcAR9zBsqNk8&Ep9Jn858wKMRSHRx!Apu');
define('SECURE_AUTH_SALT',       'Byqc9GWUlwdT9vqLSmA!9U&&LIE^LvO*5Bl@s83f()bV*B%6Bx#2Nyeis!t)zA2A');
define('LOGGED_IN_SALT',       'a@M&l4MS(Xxq5K4*9)^*2lLN%Op)y)LqCoBQAN10gzuKvQ@I3)zAntLLQM6^1r6n');
define('NONCE_SALT',       'P4)c##ecG(WQjRawBD9QwrPv@6Oa^95kGzbP&rdxT6x4@oZWr!OFJ#n*yE3anAHP');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
