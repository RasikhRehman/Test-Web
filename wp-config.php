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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'erozgar1' );

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
define( 'AUTH_KEY',         'C/b~.nw.ZwNmPj+UNVw:TqOM]7Kxgh)}~WP]#~f$QpvW|e:dk245?zc;-AGxeIR%' );
define( 'SECURE_AUTH_KEY',  ':Q3Vk$6N`Oe+n,mu+NmV,VZ!~cO_NKr^MnlB32Cx.ur3iu~}Qf*ha{YTD1Ef>L8 ' );
define( 'LOGGED_IN_KEY',    '`gjZlI~_f)rX$6ziy[(Xq%k%Hel-WSK?UC,qK5M}U {&^OD0AAbRm8@m >r5*)r1' );
define( 'NONCE_KEY',        'V1I[6#;^WFTZEfw?K.?FO$rQ7T[8_zs>5-.*&Hnp0&%=._m(j+u@-u0TVU8n.D]M' );
define( 'AUTH_SALT',        'HEF G*5c91akb6}m7$s(Xj)K,hBD+yifLGpC=:.dh6y/X^_?M Qm,rc<9hoVMH6#' );
define( 'SECURE_AUTH_SALT', 'h22H+M6Qtu|)<lz7e4nN&et-.n5ih1 d>_^A(<2/<.RurH2/6_X3N|K;<:KQfc#`' );
define( 'LOGGED_IN_SALT',   'j2$jwP:+)Xo8^/^,M-CN,vnT)CUR<2Eh/86+:T,7;paH`O5~}Tb7H81!Ml<EF9JQ' );
define( 'NONCE_SALT',       'RQcDa#Y<TZ:e{5$lcDj>4K=5RiZ=d)D~pj}-df/_F{:0PzZ/ ,]2h-] 9B9N-]6j' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
