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
define( 'DB_NAME', 'u607513838_RaCaBd4' );

/** Database username */
define( 'DB_USER', 'u607513838_RaCaUsr21234' );

/** Database password */
define( 'DB_PASSWORD', 'v+UTn!tod88' );

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
define( 'AUTH_KEY',         '7*oB^8WTJ(NO*OfBC7%z/**tKx8Zi#uJ*9 FVJ{U9h<l+X!uG<`cGjSD%jYqjMUS' );
define( 'SECURE_AUTH_KEY',  '%F}/7QkJd/qv5W{7l1||c/-4>YF7u9-O6cJ>35&A0Cso}8W&aO}|sY[.9UU<_Kmm' );
define( 'LOGGED_IN_KEY',    '3^@K#$y;E~ewA%8&a1+gq|&G.;Xs$o%[&yJIAA<r$ C};Xva{a!gTbWj{NqqtE]e' );
define( 'NONCE_KEY',        ';V-d S;@6lZV^.Xc=+3~Fr[~$eiCul<jf@+mj;.ymmc$oCBFw2(Fj^{jw=b8=V%Z' );
define( 'AUTH_SALT',        'Zk>}{l=r860sgtUg##x|4z;Lw?_h85d)ZqaPMN&0H~nfdJo:=;yu0;97hECK%a5]' );
define( 'SECURE_AUTH_SALT', 'nvJDNi?XX{n,yapY4Aosh6%(,A#os6P.+oM:2Wdfz9w<o8vUl/*K<v[cxUJL9q;q' );
define( 'LOGGED_IN_SALT',   '%{x]Tm9dJ-4jUnq~e62~i.J[I!F~$/RjQ::li]$ |ZOwc;*;T<fd:0aUTk}.^J+o' );
define( 'NONCE_SALT',       '{`$2}?C1MSO]fNA4o2-,&{3`~S4c.zDRU*R^rtK}j.tWm|eYrbG(7cf=5IYi%&_<' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
