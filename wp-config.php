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
define( 'DB_NAME', 'weeding_book_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(L+-CcXT_[7DrsT{fs()xHo_?ZM0N=xM$qof([1Fo7h^R79<.5(}<R_*khz?W7S1' );
define( 'SECURE_AUTH_KEY',  'NeJNj9Yiy-n)baBiF,$>{M|Q=9Lt$8Q7Az|:4bXfx!6y[QQa~!Sh/K<C3*:k|)86' );
define( 'LOGGED_IN_KEY',    'Qf.:zT5c)#mah%D-~<V,pcA+ZXZ;FfK663<Xsy1[-iI_ e[8:M`PmR3&JEp:??$-' );
define( 'NONCE_KEY',        'o},D}eCb|X+_qpG%SoQj)h:QR{/rr??5A1&%QV:[$/RA&c{|hO^${#H6<gPqk{.?' );
define( 'AUTH_SALT',        '9]!/j4zlLY}Yy3X0U;a#N`cc:%)TO8up&A@lgR/l yPB0T(KS,hl5WhxzpD@@@ T' );
define( 'SECURE_AUTH_SALT', 'o{R)~Jrr.k9ZVw!3>Qtc$o^`G?Glp[F.$}5vIiKF^^$&Qc  brUeHgXBn^O;n_eS' );
define( 'LOGGED_IN_SALT',   't}+>1ElDk]+bkph],^pMzM]_LF0~80wak%8|&8BrHyw{/nUYpM7+rD*Jz 9y@spA' );
define( 'NONCE_SALT',       'h<{zr%d_f VO(_)* X_s;{aA)-!H.BkfnDiMGbI4l(pcv{R:_D6#S6s1@@-n7-XB' );

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
