

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-2+k|_Tj%ZLZly.+3Iw(.L,[wh<*Rt};wCIz!?S mu*8!wFtW6uMbI`9]kmjIM-D');
define('SECURE_AUTH_KEY',  '|CZtl,/zD4z3OHeK;6:gGa|HL[Y;a^^6m_&uBBetSsDXt9hWA+6]foRR?>DM4;i(');
define('LOGGED_IN_KEY',    '|reJ_[jqR]}|JD3;|t0m*+%>5LWtyb.Ldbm=8jaiC%y&KOsjxCJv_:53)cu@1K=Z');
define('NONCE_KEY',        'u+?Wb{!7C-Mn~ipZ&;VrWqx-/S~nHc,:&BZ-^jHP[C%Z -x^aJI&mc[>,RHbcSbh');
define('AUTH_SALT',        'Ho,)U, m6IR:OHh;M@chh-y{M:eXxQGd|j|oUI=7$yEA}p5os8$BERyPo+NJ3A$~');
define('SECURE_AUTH_SALT', 'Tu;d7|b<?J8hn{}v[ldagfb$_f*^h6[+K[-XW9b~fY|[@dv!@69L7W<e4Sgev9u~');
define('LOGGED_IN_SALT',   'k!x4(=%A,Vhf@)c]=6RXi}$tAlQ;BQaho:`S!1lQEi,lpUnQey5!dL |p8e>Q6bi');
define('NONCE_SALT',       '(7ylE}t|s9Wf971H.d+T&&-WAU=[-xbRwxa&mpK^YYs=khtA>ri|E~v5X7|o5l(}');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
