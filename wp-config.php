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
define( 'DB_NAME', 'ctcanteen1_db' );

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
define( 'AUTH_KEY',         '+C2]vWA9UF7$:xe.&FX,LC,,![[;f)JMJIQSrOUeHVB.$C7-T3l~LtSN)c=EqTL,' );
define( 'SECURE_AUTH_KEY',  '&qdDKYsi@:$m^LDn5muej&~M,`Wp{_WV!Xy9=i:UHJ@KljIi/Wi!]0?z0_boMp,0' );
define( 'LOGGED_IN_KEY',    ')4 <FI~WMr(Q0KXw+[?3HOCtiG/q}?uR7V,,h>%&66kz8@YY]|?HN/2Rp+BOA#($' );
define( 'NONCE_KEY',        '}5}0wg_ -qVdW5*n]?Whdo~>+R}ZZKCi}6[eUH?cb07t[=p!(2.ITl1=EJ^eO=*a' );
define( 'AUTH_SALT',        'YLyNLLEB6uLF9$H%MdGz<kFuo:LG+i_CGL|(]%AuHLxj@|6I5YXc;9M>#RCX/6C&' );
define( 'SECURE_AUTH_SALT', 'zqN%<kc{Ddqu>9p)w ~Z*b4p _NW/gM[@LQ1?>7kqo4a+!<dP=f>~<WslESKv.-Y' );
define( 'LOGGED_IN_SALT',   'Rjk*2c9Pi~y$%J8{$@-40p:.d/GZD6+ UZO}q/84-}^bMV,QK*@OKEqN#?J.!2xk' );
define( 'NONCE_SALT',       'a`)x]~:TY&J*,~+[AiW&FBj`YRH;&Z!`l?e+>sOjzE/DeH_,_JW8LEP.x4F=J=m-' );

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
