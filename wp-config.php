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
define( 'DB_NAME', 'evark' );

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
define( 'AUTH_KEY',         'v(q(+~cl$1UE3wNvy nhqIYvlO%K`=bb@59V6Q&2DL4p)!wu _Y,}Y9-qjS.GDMK' );
define( 'SECURE_AUTH_KEY',  'd3bnA[u5Jzi:TUqD:Yp!P<Xu ioI]. w[DXk5[>$u2yh9{G,WD{YW:BB8`u1M~Xs' );
define( 'LOGGED_IN_KEY',    'T]V6{stXyXpKQ[yH1QIFnUTKrD$= :%8[>MLKv1y}0e7$PK,B&HE+Eiq)y$2yl6h' );
define( 'NONCE_KEY',        '.F;sV(I!Qh;N]2-#Qa_)6!+L.X%^%CAdYd3j0L6Wc9@lwl-mdv<De_[ r:W )pJo' );
define( 'AUTH_SALT',        'BCm|aFx9PCMEZr]-3}(#+]Vd?<8)5)/|qQK^?:[[Ry5Jwu=ck]Anku[Y,ii.]&Y ' );
define( 'SECURE_AUTH_SALT', 'k1R[$W$!!TNOll,NpJa9tgmTpqt5Xd*/3jg+]RBQ-)9]f!?hnv]Y,ss6o(t8A{AJ' );
define( 'LOGGED_IN_SALT',   '~o7bdk|_WWRo[5F)$&DV:8,AKz|4kt?6i9qN>9apf6xSkTD>}3yN/H|QfpGQBXqt' );
define( 'NONCE_SALT',       'zG~P}y6Ta}Z|vV;f6/6bcuorw[Mfpk$BtluU1Oywf$RLHks%|;Em/vu&Y35v[9sh' );

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
