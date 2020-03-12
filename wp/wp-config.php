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
define( 'DB_NAME', 'mediger_sealand' );

/** MySQL database username */
define( 'DB_USER', 'mediger_sealand' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lm3b4pbmWQ' );

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
define( 'AUTH_KEY',         '$,vxOr7l)MrZhG^A}s><at/,3RL.DYy6i`Zb7QkEF$_{cSoRf_5b97Rr0jr8ko9 ' );
define( 'SECURE_AUTH_KEY',  '.o-os)&;0,^1S}73k*rm=A}v;:*Z4v*:M5S@0Y1}pt;|9&H(8s!kw9q&fQx{`!ps' );
define( 'LOGGED_IN_KEY',    'k[}.(Zn#GOl&2 re}jx*40CKXjlP^(h-3_iq[*& {QP##|Z7Td;{ER^dfrcOvb#Y' );
define( 'NONCE_KEY',        'Z?miSc8q?jVqkh4|&&hPxUoq6(uK@Z3PxdL@WA12<`r%At0fVoit*5)><;/G9#[Z' );
define( 'AUTH_SALT',        'D9U:LIh^4F-Xw&Bd,V4hUO7L0~kc5C+H}SF]pYg}&<2IhDDy>cMCJxeL}c}0?2n`' );
define( 'SECURE_AUTH_SALT', 'nT g|lYYb}r(z}O:~W<+{S@P)P/c=<S;tfZ6NL#2n`7m]PoaA:LH@/caJ3` j^z-' );
define( 'LOGGED_IN_SALT',   'SeZT{Q`Rq_Rtr{-N7p<F,#B&WadJ%1nNMQ~65)zYgPUY_?D$Zaq--puf/CO7xfOl' );
define( 'NONCE_SALT',       '%).2Wh2gUK( +~1q?l`p^;yeWEjz<hF ~r|u,Z[/c3l,k(&+j*li5K{UO9aucsH)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sl_';

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
