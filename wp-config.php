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
define( 'DB_NAME', 'mtl_shopers' );

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
define( 'AUTH_KEY',         'jy43.wpB|C-nza7G24o=hl9z7(>6n%ye$8K_~oZm3i%J1kz2W0V2v2M*pGnrE`,P' );
define( 'SECURE_AUTH_KEY',  ';5}_%(79F&Z;)PRD,7lR;.Z$N;<gDNsJjjZT^94+E+W_RXGB5H=*aQ|A!ctS{<Oe' );
define( 'LOGGED_IN_KEY',    '?/kCs)iSs%*2ZvHjRCcH<rh9~!q?Djlt6=>`vwjYOdYP9@c{K37]-N+p|v@2iap*' );
define( 'NONCE_KEY',        '<$6XZtEHt~E?4TZg#s2K]C@<EuEOH/[@@$<@~}wS/RG;SU?S>t~.jyf tB@$Zf<|' );
define( 'AUTH_SALT',        '>NeoVubp&!G,##y-P459cAS1Lr{enf}+~l4cF3gud}g`uoUs:VkAI|$$Ia#42z>s' );
define( 'SECURE_AUTH_SALT', '5J6EWz=b;26RCf0c4|~VkIWX6Oy!e8>qolcim?B-v8[mDz$vKz9^4+4gF2LaX!(l' );
define( 'LOGGED_IN_SALT',   'hp-:k7_#z.!>@% _%JH2uw8chpRobw+,I@ZNTZ 7.O_)s?/Y(^jPrL<.sDxxFA~^' );
define( 'NONCE_SALT',       '(:! ?Wq8jC)SyA`cUS*{-yr;WEmiMWNsygUT]pgTpVWpG>tM4S1`=<B[>u_AlV&Q' );

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
