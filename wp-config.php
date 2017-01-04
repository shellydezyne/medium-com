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
define('DB_NAME', 'medium-com');

/** MySQL database username */
define('DB_USER', 'medium-com');

/** MySQL database password */
define('DB_PASSWORD', 'medium-com');

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
define('AUTH_KEY',         'pY&%F,?l,i>^wC(3wPl-d#^$$qz5~d(i`#]n6A-1Qt&e_G&bA?14eFTw;59eB6Z;');
define('SECURE_AUTH_KEY',  '4?hh0Qlpnx8p%NaD8Ui4`OV41R4w%v-ql^y|3|}WyR>KGy=`W=NQ Upkz67-&M_o');
define('LOGGED_IN_KEY',    ']y[A5j7@C|S]c$?TB]l=Bj/v>X1u1:iwAL~},jZ/B$FGR_J9[2-uj}1$WVFhvjTx');
define('NONCE_KEY',        'bhx7hiwl%O~_GPl?oy5kMR.J_bo IZogyOuweerZpkiih)^dPrDqAg2)j`}Sf]`2');
define('AUTH_SALT',        'hk.`WP^s8uohu}@y5^hOiym$kUzs5.af7`dF!6)Y_tNas 0|0`H,5v/,RP!f7v.(');
define('SECURE_AUTH_SALT', '^+w)>HBCR^u9+?l|YA.}iE@kW<9B@%4IVh4w89yo{f2Q:C&$A`5loj-SxEB/vRX0');
define('LOGGED_IN_SALT',   '220~u)<&Ux8z8wWfGD:~<dn2G>1(#h3&Qx*.UO36$AvO+lUg{+Dx&_~tMj#6j!pm');
define('NONCE_SALT',       '8<-FgsKF.<kmLRCNO!9UtKG1n9+i3&EFK3vSCp;r8:Rc++Mr1 3I^D$?`Xibx__f');

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
