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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3406');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S:}xiQp+@<s_DV`g+|K_&A!|nxUcWN~rq$WT5.(cNAwl<}M0-@P<71>GbSK-K&+7');
define('SECURE_AUTH_KEY',  'uy;%J`,~buVAHeoA!Tw|^ro$|6{p4eAgk#d>hD9OJndN?QMAf[H](yXba.[c47ZT');
define('LOGGED_IN_KEY',    'Rx0&%9@g3G05}dIOb3TnZZD-Nl$8]uzQ>MW{.(1A3Fx;wHM4oi``;|eE~}}.XyH#');
define('NONCE_KEY',        'hMkAgh,qu!m2A<$MT)yI~iX%kvwR[6[F |,}uZrsd!Z8#L>`7lGU`(/g}</.%)|U');
define('AUTH_SALT',        'lYTu,C$KbpBL`-i>hC+$4KLF`H-;`~|}T*kb?t~H@^>>IrHxqsR+]+_6i/BvQd8$');
define('SECURE_AUTH_SALT', '/`bT0M`3Y%wwGlb10*wDX$NvAbMe8P=o_--wW!_ELMBA:L^6%hgHvSx}JaWZ%[:L');
define('LOGGED_IN_SALT',   '-S#h31P; !;6-]1)e>wLJbVK4zR0k6|i(J{aNDt>t7oii8C)Vq&^|;4^j~AmX{m)');
define('NONCE_SALT',       'y@/FBpP5D1}P*$WR3b$aL=.[j+L+:DwQn*+m,t,gXC/=MEfz!FAs^:>:doADmG[4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'igl_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
