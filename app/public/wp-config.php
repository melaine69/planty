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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'O@HcoL$SHB8P[SO({7h^@Z27o{JP~d1.?<t<y&h2]%xK>{`e~U;o< W7|U}H>5K/' );
define( 'SECURE_AUTH_KEY',   ')))?fYpoDJ$vsY^k[&g]V%5P$78ws]I(!%rzn6Ru1A#%(elZ/`IP<n4HjvyWfA3u' );
define( 'LOGGED_IN_KEY',     'Md-U>aR+7|aV0+I~:R=#KfH^OThR]{Et]LS};VOztTwWcnD24@EYW8m+_2NV,#LK' );
define( 'NONCE_KEY',         ' CEv{wLj;Ocs0iTI(*oZ@tl oS@V+KEsE+d|ZSHxN#~dGX|y<s2AIFI3Z?.$|Q4=' );
define( 'AUTH_SALT',         'q:aL>dgPDoM_yqe%)#0_Y1ijs=g/qVmDw(s|^$C]y8Y{/d@82@F_=Sq[vZTxuxjh' );
define( 'SECURE_AUTH_SALT',  '#poo)]hE2n7w1UH!dnjc@;]PX6d1NuxX~DjYh_NMXF4^0MDkbWz(d]bj^+FCY%6&' );
define( 'LOGGED_IN_SALT',    'JO1(i12:M7f2+(S/3eAiXwo=0Nhsied=#)dBKG6- WX,pI!l;qIo,ePCfJ])=n|(' );
define( 'NONCE_SALT',        '>C/Uz/t;^sgKKU&oE8cPkYx,~3qwDLODHNeEb~`s+Qh7M({l(e/vwndbC`R~]H`?' );
define( 'WP_CACHE_KEY_SALT', ';myLOaQ,hfS8@y>Ze28MBU=<J?>2Q^o1/!eQ5VgKK<)LuKx)$D>c{?p<)|X[IjO=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define('WP_MEMORY_LIMIT', '512M');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
