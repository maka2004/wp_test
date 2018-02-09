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
define('DB_NAME', 'maka2004');

/** MySQL database username */
define('DB_USER', 'maka2004');

/** MySQL database password */
define('DB_PASSWORD', 'mytaste01');

/** MySQL hostname */
define('DB_HOST', 'mysql.zzz.com.ua');

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
define('AUTH_KEY',         'kyJQ+`NC6;i?7jvk 3:%J~HP|_qCwIC*[kw74:g!3Pme4kCiC9m]ellKS}!W/c12');
define('SECURE_AUTH_KEY',  'vi//E{Fn<wz:f.AV}b${H2[eyGwCr]t#zZ^(Kg[tsln@!4&fE7WTpE}$|7g?iC23');
define('LOGGED_IN_KEY',    ',:-)P+>xJAb1*{M38}+%Vn|} .Yi!|aC?w+zaJ(+_Pf9C2C6xjc Xoc$9b0G/@F^');
define('NONCE_KEY',        '@J`-$P3*v!rS7&>&E.dO/mgrj!_^j}KH1^8;tsW-C7uk9*iio!m1}%vivbZA5+YR');
define('AUTH_SALT',        '|@RrE590!640-y.!t,3>z<[p/}W(L*%>@Z`Eu)j~rJDGu*S{>JY`D{8VF9LH,4f ');
define('SECURE_AUTH_SALT', '5eGnf?)QdL*JgDZGn>/4}{Zg|dhju|dN^rJw#/3(o0 NneFeP(azNs;.8bId;37*');
define('LOGGED_IN_SALT',   'wH|?{6X&aiIrf?M:+xfpjg><zeKye>0k`xL_-. G>WZkXENwpB:@ME/KBx)l8O&-');
define('NONCE_SALT',       'm_@mhyhVHT4F94h6b8SGVr17X=Hvk9=A9Y.o-J(B|[rj,Z,B>Czg:tnf~+R60wu=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wps_';

define('FS_METHOD', 'direct');
$GLOBALS['_wp_filesystem_direct_method'] = 'relaxed_ownership';


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
