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
define( 'DB_NAME', 'haidang' );

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
define( 'AUTH_KEY',         'uR;;s%zbC< ^ieP)Id`G$w#C`MK^/RA8TBEP0dof]!=@#F,wPDFAIuwD[#=>OGni' );
define( 'SECURE_AUTH_KEY',  '}OKCA17^Y@EA]uaBLWD+{h*sLIaL%vsA`ptcgtzlQD9GMfvilej*G>rq/&sgP#A0' );
define( 'LOGGED_IN_KEY',    'z?|YbPOK@+6HmT3sd64g&1j7.fMfP<Abk(U:L_!nWlb>4R.-_Qv+`Rk%B.oA5)2z' );
define( 'NONCE_KEY',        'V:,F4bfRx1p@p1~Tf&B&kLi~$x/X659V5n|~Wf;Rc|:`L]NCX;sY|WB/JO<JPt?,' );
define( 'AUTH_SALT',        'G&q$Ua_1kn;4HEQ8mvb;`?9X7C=w/]vbbqLQf/,F!,D.2t,S:g<M7h6Hcz.<rR7z' );
define( 'SECURE_AUTH_SALT', 'g}nkF,gy<]cUewlYZC/v~a1x7i{]Gk]Pm::?cFMM>Rq<7Mvy9h]AUMRK1DW%2vm&' );
define( 'LOGGED_IN_SALT',   'RdL0kq7|nulaWq@/3?[)KU@mS/Tk1psI:=c`Q@-V<9qriM}fS[gw7y:@`~0y:,F$' );
define( 'NONCE_SALT',       '>nqfYijB3XAL8%}GeK`IR$j/v)z)5+HCBxL`~k[uS?$k zWSG-&m#HN+_ot*8=ee' );

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
