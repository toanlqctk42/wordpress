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
define( 'DB_NAME', 'mywordpress' );

/** MySQL database username */
define( 'DB_USER', 'quoctoan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'quoctoan' );

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
define( 'AUTH_KEY',         '!oM)|2$DI5GPPeCHvq>_3NgT,^UfL;o90mwTv_=.%%9G/#]a].xj! ;U/@f3yB--' );
define( 'SECURE_AUTH_KEY',  's#D}A!$];Nu:RzxWnO8Z^Nx (x_!m%YzftR7/f$3?f 1j V)B6$*@8R/2+:Wd5Ta' );
define( 'LOGGED_IN_KEY',    'W*%}<mN0esSE=OgAx,,9RIJ>[+3!?Dt{4.yz:qBu-dqAK:ICL1;orZrAo@a2uHpU' );
define( 'NONCE_KEY',        '30HB~,@rZvPzA?}E,nB)G$P7GyC`Ca[Z=7acT-u(EKN-sXL4i2:6@J#d(q4Ig&M9' );
define( 'AUTH_SALT',        ')JYcIEV8NwtnJF?OUArmQ2 @(VK@!=0-y)h?s9g^<w}1kx`i~.e]YDd4|E}g xC+' );
define( 'SECURE_AUTH_SALT', '2d,y,4sewq_.,U#G1gf!]AV-z4j`U<m1bd4RGULRRchL39O$DZzun^xr~pV0uqA,' );
define( 'LOGGED_IN_SALT',   'oPI_nH#T9WE %}3Z,vWR3$x(uRlX1xz/kKWmEW>~0JSlL^VgX)Ok>vN2*9*5qM(k' );
define( 'NONCE_SALT',       'IX_se1]dLH6jbte!9S&aq&wVcqOCM:%a,-d(+n!4x5ZA,iuL`}WZ_glC$vfEKbiq' );

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
