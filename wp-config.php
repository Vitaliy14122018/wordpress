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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         'e??Gg[VALJ&ECLd;*(lYrLi>_3 }-4TAw`Og/*Qy1^UmX^w}.LHst:c5}ltN!!{:' );
define( 'SECURE_AUTH_KEY',  'G8HKxSl)d,L~1Zm*/ril(nI?_&{10f/wdFrHZN%Mjr;EUu#]fsW8D,Y0,yf7L_<1' );
define( 'LOGGED_IN_KEY',    '7sv}X~1qBI[$hgu3>JgJ>1Y6=oF*EwS.4(p@=plE~{ :9yC}:~/!!2)~B?4vFIAY' );
define( 'NONCE_KEY',        ':t[DWbD|]E9?C2Dw#xEQuzL*-pWd77|ccW`f^7kqFEc^(9MLKSYQdPH=xWW2r2-0' );
define( 'AUTH_SALT',        '(TIa<}WzcI?H>2QD>jU!z#b87{WL%pxAR!^h)p*1lN=Lkd>+l Hd3 7`;cvU<v`X' );
define( 'SECURE_AUTH_SALT', '+WE:0GZ*gD)Lx%D!Zo!`--=-O?z7p+7o?LPc9X5&2ov@nKDk}pq}~hs!L:mh7b]h' );
define( 'LOGGED_IN_SALT',   ')0;c0i@fDbfr|=7gcpHaZ|W?,{!%Nj1Y>mFqIg;[}cLOm-*Er:,Xa(; bBk:EP,$' );
define( 'NONCE_SALT',       '6V)[ v4S51+CB6 G_<2awSD|)lS6cYb2:qL~p.dhlvF)^2 R+61h|CTC-EnneHC?' );

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
