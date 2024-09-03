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
define( 'AUTH_KEY',          '}{O;Y+ xm7OIp_0&h/4W%Twr%:t[+8`<^#jP=xClXm6KnU65#6fYhA@=fY3X|T/B' );
define( 'SECURE_AUTH_KEY',   'Sv07 E~%`jFNq{_EX=`Mo@`zQca`N B 8h9v1$B 8@Q&p1nWuxBxT;_tD9o59+f`' );
define( 'LOGGED_IN_KEY',     '1J/f<X<,RaCzOvzA!{4<}l8>q3@t=Tsm91}#wVNV4nmFn4*JapUG}psL0G5_R+sj' );
define( 'NONCE_KEY',         'IL5~} @id[^Cg=k]ISYc3>vJ}o`?.@=B#gPpU7GM0W=ftvZ1X`l%gU4r%=kJ;c?Q' );
define( 'AUTH_SALT',         '(zG4A&8u lK|6|1u>DA:#B<wQKYOhySapk/|E5L2!cujGRO)]Kb)#hkybl;{X_R^' );
define( 'SECURE_AUTH_SALT',  'E:VCn}>PFtJQ|$rvS f^T_UsUaG8Y6Vl@2&t&KTD5@C@>EPB}<yzx&6*Cy`UFtge' );
define( 'LOGGED_IN_SALT',    'n<|f.cud>:A?KJ,bc#R;Jk_n4I>5(W*zHDe_L>25Ka&Q80tnd~mi^;|f|80f!LGn' );
define( 'NONCE_SALT',        '9&k8lk7kf/tmgiOF2(B-V7s6_=?AOlBy ]}yF)IB%VIIp5{/DTpwy]y0[$kZ_W.%' );
define( 'WP_CACHE_KEY_SALT', 'Jykobf<W)qp8cY~hiKo7Rx([)zC1yM+0ZPV$#2i4re+z6AG/f <UOaIKe*7no1{-' );


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
// if ( ! defined( 'WP_DEBUG' ) ) {
// 	define( 'WP_DEBUG', false );
	
// }
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
define( 'WP_DEBUG', true );
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
