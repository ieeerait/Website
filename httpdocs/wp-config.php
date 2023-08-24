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
define('DB_NAME', 'wordpress_9da');

/** MySQL database username */
define('DB_USER', 'wordpress_b61');

/** MySQL database password */
define('DB_PASSWORD', '3_56tUTqzI');

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
define('AUTH_KEY',         'sDcKR&FbD3)z^vq2w@DyVuYbM5ywv161heRKjyk4@fX%)0ycmyTro6cmFOqzV*Ej');
define('SECURE_AUTH_KEY',  '5Aa9My^*U%ozZB%r#FkhYMJ2I(4HVTF(MuO#FEBRGPX3KlVn%6VtJiVRH5ae4!t2');
define('LOGGED_IN_KEY',    '6b@D0R#hGqAVzS1nm5*jZHeEcwzYU7%6zWfQ6BI4&&6eSEA3upIMxxI5S18EoyL@');
define('NONCE_KEY',        'ctmpwb3e3ovOE5A8TRX7!#xyAZZQJPo4^#Kc))FQmuBS7GXdvVO9&uyl@wTj297o');
define('AUTH_SALT',        'vey7uIVs&P4Rj^n#YZI&3^b#5W7AaRAPMf9Q)bG)X4VYMjbl&w1TUA8zd*kpH7VU');
define('SECURE_AUTH_SALT', '*ya54%HvO5PBL53qXxw5@HVPXqC#Trj&dEFyGyMoFH(^4nQdpL&&*&AmI7(8F@41');
define('LOGGED_IN_SALT',   'mt5C&o8VMibuXFf!*WDfEKK%xSufv4BDvVc)I6576IP&@z861v(05oVo3vcY0TG#');
define('NONCE_SALT',       'feUzK%uk)luCE8c1UOD#M&zCklPHuFzyt7ynQb8W3rBu6Dljqip2i&UewyBXiPb%');
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
