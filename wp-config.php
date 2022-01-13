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
define( 'DB_NAME', 'another' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}zM`VqJ<zBP+;T!2y([?U;lo,[1VBp9fN:_X$;{x7,U|+*;3*S?x(8>4u(W7E2Ey' );
define( 'SECURE_AUTH_KEY',  '|`U<kT@Ait8KlzTM2*~1Z,LLX?|p?$rl0:45{`WF@mN2<ISnX{6L kd>Ek^=p0ZC' );
define( 'LOGGED_IN_KEY',    ')uau/1%C&iO=NU]>&,WBqZL]l%*m>k.q2qNBUJc-n@XPg)/$rRXdCO|D_<{2.<Lc' );
define( 'NONCE_KEY',        ',<&3m{@4rk}emdAwx1* EFWf8H4k[~a3sHfDo;:A+_W]]6#-EvHd]V2XL7|x6TMa' );
define( 'AUTH_SALT',        'Mbt7u(CZC1f-50)-*SKq/(txsZxa~Y{EX%g$}JE1(`?o8(1cA{$<O#9ZrAa/rl$-' );
define( 'SECURE_AUTH_SALT', 'K^Y=jVW(scM%;6$BHD;/(1G9|Bi<(E<d_nay>q&Hc<L07^4z_-#9Ccz=mMS5?`Hw' );
define( 'LOGGED_IN_SALT',   ']odUG&po3R@jL9e]_8}8@-T$I5d$*:Wnyu|_[qtUn%;X@WQm]3e:u,F_8>scfG9h' );
define( 'NONCE_SALT',       ';~lSVcQ;{Y|6Io(cX[D$W&#DV7h-USQ{au(2GXMEAjqDNqjWbJkki!$J&zd,>r3l' );

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
