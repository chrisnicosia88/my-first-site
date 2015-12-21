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
define('DB_NAME', 'chris');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'asdfasdf');

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
define('AUTH_KEY',         '+OW144)7iQ.%+w%St>)-@9Vxf~g8wdfAII;q:;:C5Ln^Wr^F ztr<rDcP$;<>Ut1');
define('SECURE_AUTH_KEY',  'J)J+tw x *=v9_ !G]%fY[3;I|[-E-hc)KUsz^ PPEy,~znpyLh;yt9|12z=AB9g');
define('LOGGED_IN_KEY',    '@u8hBIyok,0As2-x,x,|UdJwm-Hq?|IZ. NfIi14lgOXVs-YWw@H^o!:|@W*vWIP');
define('NONCE_KEY',        'fSHP9Fz9H9A>:KRP !v8.^GLFfR_~2a>2!QJ)-6@q|&H`Td3E0{S-#_w@DY7?Vp ');
define('AUTH_SALT',        ':>Z[dPxC1#-d}oXIgZ2%*SP#KJIN`Q0rY8#IS<2=?0|g/#qr>Z|@Rl=3w=,XA)/w');
define('SECURE_AUTH_SALT', ':u#kEZ$<ss$4z|r1+k%{yW`=]VS$:+vwymuz<M@;{~WQjsV7K($Ud{|HCfJlLls|');
define('LOGGED_IN_SALT',   ',e=RLsfR~?i>D%W/?|*-C1nCXP7 .,a;RA|4A #{p`G**&tZHBE}g0lLs-%HI+WS');
define('NONCE_SALT',       'ooA D80o*<US.7Omf7QEX-A!0+z2?QwrEjH+:9MT/(D|z#@i&A|+}{;.|D<[h@$b');

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
