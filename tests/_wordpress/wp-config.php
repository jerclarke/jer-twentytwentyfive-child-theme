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
define( 'DB_NAME', 'db.sqlite' );

/** Database username */
define( 'DB_USER', '' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '?$Ak_*S(3ewj#9jT?oX;PYZvV}e|$+@%k-^1M[tKRvV|,4}yKiIy;8@|Ko08Vn3}' );
define( 'SECURE_AUTH_KEY',  'r9F9.])K4x[@t9R$%m,uGPy;yK7|uY|Id+6sbGL#`^YzR_c:(0ZGDdG{BvsOu;8t' );
define( 'LOGGED_IN_KEY',    '|r_q|jHd[YoB547W@~4w$)fW&v1vgCs@v>C1[Z+nHvd;hIE![|5x6}0tyIT}FHbf' );
define( 'NONCE_KEY',        'ce^M3%&02oc6{#G[aJ*gR0AWl0[Q5z{TXT%t?|{m3eTC[XpC[z!hJ[VL`dQfovob' );
define( 'AUTH_SALT',        'O+hb5Dm;p?4F_B]ok(u?-.S+lGmJb@ms/Sp>AbiKdrO4{D7~8Jen%t>c;on>z.x7' );
define( 'SECURE_AUTH_SALT', '&/GTN6k<.DBkO+vpwV``8pu(IRE%5r;Q9!X6>SoSWw[I;UGu,LZaR8pDB{eP}zd?' );
define( 'LOGGED_IN_SALT',   'Ns`Q>xTlFqlljWAJC0@(4H1D/~]eq/f@G4p97$5)zD2#9Gh&$|BhA(J;((c`j{&*' );
define( 'NONCE_SALT',       'Yr-PnUi.6-oq?{nw?aZFSrL7Sk7LAxq_L6yWu.MH><7YMEowH<y&S9palL1|gq;d' );

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

define( 'DB_DIR', __DIR__ . '/data' );
define( 'DB_FILE', 'db.sqlite' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
