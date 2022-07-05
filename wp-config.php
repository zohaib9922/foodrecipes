<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foodrecipes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')DE{1=Gj$<MbMbc1Af2h:svi2Fx?(m`:u]GznUM_wX y-a<W4fgd]XO;^:sMc`|s' );
define( 'SECURE_AUTH_KEY',  'i9*&y-U8{v)ZtBY3P3p1sa Gw>BwE+PQAlJj0RCkdtFT|:x!sIIz%2u$$8^!h>X`' );
define( 'LOGGED_IN_KEY',    'oYty!+<H&g<HwzM9:`T$/ynfZ@p4N?k#rE@V@PIKq4^wP[_:TQx:c`Ym;(Z({iU/' );
define( 'NONCE_KEY',        'B=3>~lLfcymD(H4LqW/r;sJ5t{ <U$qi{6x,js_{`,Flkh_Z4CK&>?d?165Hovuw' );
define( 'AUTH_SALT',        '%F^Q<{+@8~e9y$rZfYg0_ZeGXp]Z^}hpnJ%%;/Qe{av8e?za35j2AD_Wl.[>Nv{/' );
define( 'SECURE_AUTH_SALT', 'hRL=r v>(f<mE%ijrqE?PY/s>Gwib7mF_ai$[TWu*`Ww@vWT>]nO#:^aIYXZ1<^:' );
define( 'LOGGED_IN_SALT',   '/WxXB!=WWQ9?U`Zv(Q*vp#k}F48L_gdZyTgL&H}rtw8a&&r9@F+7SBLXs5B@9AC.' );
define( 'NONCE_SALT',       'G$ 9bmQ/biw9+Sl$ItdBs3q%e|MwDKHVVq#l,Kd(uG!1CTy4.DuXWCXC%w+T~J]z' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
