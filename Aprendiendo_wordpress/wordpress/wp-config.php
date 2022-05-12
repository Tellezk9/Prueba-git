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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aprendiendo_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'v)$7*]l#qrqT8[_XUC=1:*8Is+)W= =c/CF/7*UO x,>rcu`U!b>0Kk/NwK5=aOj' );
define( 'SECURE_AUTH_KEY',  '!+Ip-4<f+9U[m,7{=B7F!wKPyOl#AtaMAhwP]6JK{89)uKI?yhE1J0 <&RC!|,;[' );
define( 'LOGGED_IN_KEY',    'VTwk2M5,2%GW,/J~g,C]b?C;gNDE&UmhKpZqJQ<>2B9xKIzOkf1~kP) 2a)%37(@' );
define( 'NONCE_KEY',        ',}]WMCr;3MEDm)|8)]zpp:L$D:>kW/Hb(uG#kOmiCXy8KEzRv7kUNBu4b~8Zu>n;' );
define( 'AUTH_SALT',        '4`v>&s]H8Xs*6#a]P~VUt}3.;r[KJBs.gbD-1IYmR]?:f$<Em6a`I])C5QFFh)I^' );
define( 'SECURE_AUTH_SALT', 'm$w]3$|Ka<{Mv*r%&@5Owd9ow49N$vXBxZP)CZJ7PSi+=J;%#:S=M,4);oo M=)J' );
define( 'LOGGED_IN_SALT',   '#cioq%VtnF;9P7:2vhUDOzt@N-a(<t58kt&jX;? u*Zs/$:I9EsT*qcR_7<j1/QG' );
define( 'NONCE_SALT',       '25/L2|Z,frbfX8[oELa!|6$;=b4:^_$Vm&=a/zKe&a[cmf2Uc>IqE%2an|t7-*q{' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
