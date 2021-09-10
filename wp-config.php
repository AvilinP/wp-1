<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptheme' );

/** MySQL database username */
define( 'DB_USER', 'medie-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'medie-admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '``XgGEnm,ssFcr#3OVaFN1dtjB*@kgv@sK+2ni0M.:m9nHAprX<esPdXmQ]pf@G)' );
define( 'SECURE_AUTH_KEY',  '`ojM@0?RLEe6kqD!7vGGm1O/bFASMX8H7?cYw;s8c5<%wzDgd :/NIQHmV66<c c' );
define( 'LOGGED_IN_KEY',    'o$^fJDCEPq=b1Q4v m=J}3A$Suwl8]^)E]6%G&+$es:8S+oidgl0e/yYkq+=.+ev' );
define( 'NONCE_KEY',        '&+hq$cFS>E/Go;c9[ER<$Bi!:b^}JG^AlK<</y3TCvCP{Q-N:b%[*E5pZORYmc.6' );
define( 'AUTH_SALT',        'dx.ull?Sy~BH|pT)`uM2){=uFOW]Btys/A);u.8Z2vS}uM|,o>BqSCx}*p)4o8~R' );
define( 'SECURE_AUTH_SALT', 'QWXyYR1Bw>^E)$1;h=[Yp0^ Ht42acjCqHLUP,MPx3]I<mRR;Zp<++*hE-=k#6M<' );
define( 'LOGGED_IN_SALT',   'tverLjy0))<:q(:-3S-}%4wLc#Wg70XH%J0%i#7FiBfahfN5ijtl 1PMb%wwG!XQ' );
define( 'NONCE_SALT',       'Waq*|&H< vV%ywj{|M)])Evqi7NIZ!QhURKGVQ-fp<uy:rBUpQ/gv8]QL!{S-1rX' );
define('FS_METHOD','direct');
define('WP_MEMORY_LIMIT', '256M');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */


define('CONCATENATE_SCRIPTS', false);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

