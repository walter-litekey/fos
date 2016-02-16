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
define('AUTH_KEY',         '[52lilopMQ-V2-p:sGUi+|nK$i~n~04F[A97B1hEs$[9G!:YDn}|!4-z(z<FGFh4');
define('SECURE_AUTH_KEY',  '$@p35bF;I,o;8|CW6Yal.z[tzZ=BJ~o~t`)8>t~xFc@2}fi1la8|,jyGqV{OUN39');
define('LOGGED_IN_KEY',    '!0>taD[V{qtgJ|EX]{6fe7v_0qR)+=PD} ,:tgBD=ZGDh<R!R~C!g9=Iuqh11Mzy');
define('NONCE_KEY',        'RIjFBykEzG>$JyDPheF%LY[;;WLmD]l7?%^Q2T--Up7#-V={91p=efg)pAm_e8(`');
define('AUTH_SALT',        'JrV+t0iob9M#Jl!QC}w$,Lh:Fj--%U5h73nZt+R`.Uj77Jy%VgE[T9uotO=we.;D');
define('SECURE_AUTH_SALT', '4oI-~ hJ3t/)Vslq:%L4<+}oJEnbq=U4y#nLDhoXN+l-oH;}W|SM6#$r;+&d<eNa');
define('LOGGED_IN_SALT',   ']);=G0#KS+$USL()mc(p4qYE@|}n$0973J|Ax?^65w-C{{Ho7h^Q.VrQVOKmL/#X');
define('NONCE_SALT',       '-HMoxif;kzfwL@V-}wg182QP/~O_mMSc|-b.qCa_mUQUj5~6>moeoT]rLl|9CrQ2');

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
