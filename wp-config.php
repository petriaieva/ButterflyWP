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
define('AUTH_KEY',         '8I0XY.ezoB$TkO{gpT~E~g7LQgI5mXL@}DIZa])d~_i=DnT=Zq!$|x];T<U8G:wU');
define('SECURE_AUTH_KEY',  '0r fW)d$pl&cf:sJR)_;6.t|M.b,M9F&5g +$(?7lu#S^z!! c#GrLm]=CpVT3#Z');
define('LOGGED_IN_KEY',    'R}<#e C:-FBd(WjSjpI_lTh6PX{x>wMf e{YG3x[:A9S11NV%z_mehVx5(nx5NP#');
define('NONCE_KEY',        ',^yBG:liA;n$yVQ%A!bZ*My7)JO$`~6|9FLyBtag?&4#r~_X^OU/<{1.L.+QxyzU');
define('AUTH_SALT',        'jv3!x82A)?rxq&D>35-& .%BQVCT5i|P>*7u9)nlF}O56K6kjig1]|Z3b{SN{:D~');
define('SECURE_AUTH_SALT', '0,-X^+V|KdM EC2~E.8z9~HkJuS>SO^J1][5Dw&*8}pOu(P)2)>< {]r.kOF[i.U');
define('LOGGED_IN_SALT',   '(eE-Z$ ~O`ym-tWLIj6@ Y:`VEV;lTZM.LlPZ<&>md_Eb;+xk57IC4uFFiObv`!q');
define('NONCE_SALT',       '(o/@NGN!N0u7(F5lBu5oK6[m)ut^R Wi^ -.>+5VJybMw!-]`t7Hq`dM^/&H]=(r');

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
