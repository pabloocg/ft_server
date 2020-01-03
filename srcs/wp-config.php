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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'a,)1llq[[lD6VE_:EqJ|ziT%hts$Tn)~uZi5^,aST$+|HuzS`?RZl+$w|2)siY/v' );
define( 'SECURE_AUTH_KEY',  'G(l@^[].P*Zu~6u0_U0ocU`{L)s~nk`$:uKFn:tqd-y1w|-+8}Z`#HcJrkFSR21*' );
define( 'LOGGED_IN_KEY',    '=#{Ddrc|iVmmUA+o6vJ-)0~d[oK_k`|6@{;rNJQZ&Bg}=LgK~Bp!*, Z.6V<yOWE' );
define( 'NONCE_KEY',        'FiQ~@~4gD3p/,EICN,Wk/Hq6TP)iQ{gjJ{[o#/h(%15nt{ur|2|z)t^kM57(?Yzz' );
define( 'AUTH_SALT',        'SY P@&c`AmKke5ksXX =YGm|08`FBZ>uF4GKeWP(/Zbi+a5-n%%I +_Sow$mCI_5' );
define( 'SECURE_AUTH_SALT', 'SYEG]_i~_9C=OQ^Wg;Pl^1|Ja%s!]6af:-CIYUIeo&][LAoXg-xrftXIK:O}Z9V[' );
define( 'LOGGED_IN_SALT',   '&9tc,_@7|XD)TB17OUE%e3km;-zqj+M9XdtxsKo)<JB}eD4f9D|X]y0Bzu|]-z+R' );
define( 'NONCE_SALT',       'tJB8l*wptolYr+#56l(V]*{CsEol8n#|EVgGE(t!^Me_zT%LbMW,{&*eh4s4-3(F' );

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
