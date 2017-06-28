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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', '573GG^8wj');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Txv*t8u%p{4u9[#UbGA*^{FGn**!5yo)Nqd z?+l,;PAW!Kg+t$kE#}NnO,k}o?k');
define('SECURE_AUTH_KEY',  'zh,Lkv[SZ<OHGnm^9[][fvyy09Kr-L/Jh/&oc-1yR<x}$IgU<nN* 1|b89D~}`SU');
define('LOGGED_IN_KEY',    '0[4pNdmHt$b IY0/G&O*/9o)ZLUV9hO6q|^!lvB1eOj#BNiu!$+R)wzG[#23;7-7');
define('NONCE_KEY',        '0V1#uauM4h(v-*yQ[9#9:j7 O!c[yqOv;k6CTKBp=)]@<aySGq@hR<. qgA&%mRt');
define('AUTH_SALT',        'PcD|2z%HP9=x5N^;lH-J{)H[DeWtT&?]e.O%q63L3K|?H=%n*TLfZ.b,!_iXb5$-');
define('SECURE_AUTH_SALT', 'x_NPN:R+f*}h_BJAzKw3+V6?Q|w]}fu+$KOV` [!8,O#B&9-3!!rf9g|[`}Z91QS');
define('LOGGED_IN_SALT',   'CyYYDF|rQ9yW|,|]]>lZbJZTA=EmD*D 2WM_G|yoaSAs`M_z---2&gJM1p_:8{av');
define('NONCE_SALT',       'fUj5[9`JC[Dr0Ez.>eC4`w|Zoy_#3kv{Co+d0zo]ijkImG)trU-nY4$6,]$TR,`)');

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
