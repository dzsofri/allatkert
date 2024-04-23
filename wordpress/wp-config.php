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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'allatkert' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ':x:$rE^]=u#3qjv@|2l0Us,~;@&SwoL:PhB3r5%1W}? xtv>JK&bY|;Y@?oso.P(' );
define( 'SECURE_AUTH_KEY',  ')-F(hp:NW/ ]7:~`vweJo?a#EoLW?TC/,8LfvI^8Q{/LJsstCUwgK)l9N4S&>J~P' );
define( 'LOGGED_IN_KEY',    '2{V8v_WT!bQ%*SD1HKH_RA@jDjIP<0Zt|C{<Sd9^QM-92%c )@ +U-K;fsPP5pkG' );
define( 'NONCE_KEY',        'pIkhb^GtyPWxkW$$2[`])#ABB_{He@(kn~8q?b~Rgd^1=s<| A]LC}zEr5v-h!=%' );
define( 'AUTH_SALT',        '1Eml9}A|VLdW[O1 sUl&F:4){F7[G}oNL-}g5>m]qN(ZN|e`]!2(o|Ox}u9KVddE' );
define( 'SECURE_AUTH_SALT', '}y=UmkS=D8;UhVqOR1j{qsARNr(j_BICdtXAg513,bH^Q4Dfus.2A++j?a1Sn}V6' );
define( 'LOGGED_IN_SALT',   'a|Zedg=8gW]|*kDaV_aA~H<rPI@pVfp,M%vX$h[1JQV8n&a&G@p8sr(XZ.|R*F3v' );
define( 'NONCE_SALT',       '$MF^EBQz*7 i}^:qq.]7Q{494doy$WR.>TxLM?A2Qn_sw(qmtrcGn&=iOb@UAWF ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
