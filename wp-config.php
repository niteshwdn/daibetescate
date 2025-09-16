<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'HEs<xA=k%N90<U8CENX?gP|efy&Fx0@gf2XnwATUDm}2~Aj@KM@_Aq[dz 1y`rb3' );
define( 'SECURE_AUTH_KEY',  '+KGt)8<CS=YMLO)QsR+/ihtH@N{ECo)FFdirw!QSI&/7E%19uaLuTLHzllzIHT}g' );
define( 'LOGGED_IN_KEY',    'Vj)mIk*4}Oigj-*+m:)%Q/l:*V4ZwXtoWM|-mWpa=Octwn@B,l^d$nC`,b7bd8ip' );
define( 'NONCE_KEY',        'Aler*)pD[7h$%p7=P@vox0[~MKc(q,]k<CZ:B- ]IZil9=>L<6V=rjVb0Xt:LOwi' );
define( 'AUTH_SALT',        'vlIwv;fW,o[-xA#}v sZEc[7_N<=mZqtW:Fx9imR$@IRgFk*2w]%Eb-75o4Zy__;' );
define( 'SECURE_AUTH_SALT', 'W@q}lVaA2Wi@EQ-BhxC;hv%y)mut@u~`s(~m{Y1*Le=_4,DAk-3.OUNep^(<oa4~' );
define( 'LOGGED_IN_SALT',   'b@RzQj ELr2hGJHm0mD8<g:q+E3LZmQ#^E d,a)L9.P*,&Lr+/drNh)H_F=b+Q8P' );
define( 'NONCE_SALT',       '=N3$LIxQyRo`H*dgP#_GQm2(W7:Z&$y$*X/(_eUc976usX[QHpcw69GSp,mEAuGd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
