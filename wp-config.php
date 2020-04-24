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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'cZdI(qf;%AdFYR_IL~x3r~D<>}O?XoGY uV$a}l@1r kmXHDoGz=GQW13RtYH:Cf' );
define( 'SECURE_AUTH_KEY',  'O)9b]};bhtpDppAF.oyA8Kr0QRy%}&XbKspJQ6V|IwpP> ]1l_s+~klez7ZM*JNi' );
define( 'LOGGED_IN_KEY',    '+qDas)o0Vu`>78#}u9dd` h1}7Gx#)+`1ok=i({:U1iNsK48CYV^q$/;KgETxgL?' );
define( 'NONCE_KEY',        'g&|l_P!}M#w:ci8dz^?x.-trf-~APs!JY{9uFBa_Jf}S,E?zY@>$]Js%|j-B}Kw}' );
define( 'AUTH_SALT',        '7*QARo[S^0f;Yt`QEQ9A]?*jfPE@CpOF%b_~<S1e!~#POW%Fo$@KUW.$?3#_E1M$' );
define( 'SECURE_AUTH_SALT', 'dV~01s:RDFg ix8j{t%B8s.Ik`U0~fOqW&r=cS%[!O7srBDm*uI5%.lvjBm.Xd)v' );
define( 'LOGGED_IN_SALT',   'NQW2&ETZFDRUHv.OFnVHmXH!Xmc9L&jTeJ{S$^Q3JLgD96<Km1mN|n%8f1q!8XEO' );
define( 'NONCE_SALT',       'Ke8W<jOI2M2,d>+B}mmGgEe~WipztiDA~On6#leWE:[acYH/m)Nw#<R4G:lwlVj.' );

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
