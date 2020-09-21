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
define( 'DB_NAME', 'wood' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'iitaF>UC._~viF<$GEyA.N^7`(PK0{f Yu6Og>JNPn54bGL>W7q*CzX>2A%&@WvB' );
define( 'SECURE_AUTH_KEY',  'iv2ULuUr.wyNM@[D6(l@cxkU:SRN$aMO01:~[$Mq)/$=NU>,|ghB:J&1N,Z{pE51' );
define( 'LOGGED_IN_KEY',    'f<@xNu{D`(G[-ZHD+UE^338~|40rKVL*x+cEDo?B}<4~Ebzd^5!mkzf&;l>SUh:~' );
define( 'NONCE_KEY',        '6T8YU?vS%Y$m:o#UyZDJeZqPJvwtpMp>E-6vNV1Wuzh<vq}SR5pA2G]qBw^S7B|K' );
define( 'AUTH_SALT',        'ae1yR#iBFo@DGf`4U6VV|5@UQYxcwNsy,((mK]a~A$gq|L/X6I~XX`L/g7Xqcq7f' );
define( 'SECURE_AUTH_SALT', '<iq6)?bY.qc/ii?9 g_R&?To( TPacA@2XAIxxg-Yg@(Q1]Rd8D:E~rNTS#Anh^-' );
define( 'LOGGED_IN_SALT',   'Y`4~sAb6>k8ZMhe6`3a+fes:bs!TMp7H#!Tt$Uy$^60xebu_i@0EJZN<E(<CrguW' );
define( 'NONCE_SALT',       'A,9&Jyr9L  .NBn!TVHGU*NH/kPVs,cS<;&Ua7CO;E%y;Y3uZ(YP5*]*?Mp<UmC*' );

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
