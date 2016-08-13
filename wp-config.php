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
define('AUTH_KEY',         '!7uowT{<^k?(7-a0P2RqW%rc;[j9[D~:XtUx484U3-,4TS$pLAM%q,88.CWNg!7^');
define('SECURE_AUTH_KEY',  ',k*d1Ee$ayL*~~?%Jmh.h-n[[m/p9oVBp)YWu6PIFE4@Fy0(gB?oa@_^K HjX$2R');
define('LOGGED_IN_KEY',    '1&Oc`|g|h}TxyiF]zF-frb&3nL7F.|_or3N?3B9RXJ+*2IY$-L-llOU=L[WyS3<5');
define('NONCE_KEY',        'w#=HAA9S~&2J/izGq#f/>6#B+eY)tP)9Ud7)}|wl=y Oq)c^b%n{3Q[kEv2[={H6');
define('AUTH_SALT',        '5B<KFW#2UN+%2MpfuuwB6(JvX.nUH:lW4]HmMQd![a5AJ3G*`7c)U]dFv>eoC![`');
define('SECURE_AUTH_SALT', '-M2raI Lp,bng<K$f8W34~KCrP)^ Lp9Wv$fsQk>l^|,@Gfe~LT=*M_ftk-A?Km1');
define('LOGGED_IN_SALT',   '=[hwE5@~TO!~VoC<WQ;m#8Lr7zf4Ar,Ay7e}cJR!I:T0|W35}eSq[8G -5R?1u3s');
define('NONCE_SALT',       'RVbA5 6Y?)eTU}s9P|RZ3wcK<b:esi6%tGQ:[VX:s|A3o*HavsbF_H1+G:3w*zFX');

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
