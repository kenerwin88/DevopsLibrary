<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devopslibrary');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'i+(9lc@[6J+K:-SSK.lS8^F4nn+u)H]D<v=sL5GM{k;LB%4Tn2L-#eV4eK;-gd9,');
define('SECURE_AUTH_KEY',  'WcM`9wg#mUZwoCyq:-TN.fs6V+E8UtSyI/zw+G?e <~^A~Q#s0UM|mQZp}<+-k2+');
define('LOGGED_IN_KEY',    'Hs<)n]&@*#.8eqKxU8YRKydD/&h%sRazJS9+RzGLw+3%*N-&iZ&eDr-EBf:0zH6l');
define('NONCE_KEY',        '+_SRJ7#|IwU4w-.?l4)jF/}%Y4I4}>InxBRBbX`U|sq|hcVL3t#6~xYp/LdZT#+<');
define('AUTH_SALT',        '~&5yb+-F/cGcY9(sA_m:H W8p4oVrth4hEsRs-t,gLTS$P%a7^35Z!5gJ.#<cw:-');
define('SECURE_AUTH_SALT', 'p9/p8]a+HgM=f;;R.L]cvc-oZoxgY?;WJ5<N~$;6z`Efb}|&UM]OhgC7LiN):H)p');
define('LOGGED_IN_SALT',   'Fs/E`CvGN)CfXvD)vI[FP[[:=H#?gDzX_^-z-%|U+%G8Xo;,{&}t+-[mwwp%<Xj3');
define('NONCE_SALT',       'fA.=dCP>91:,gJgj$BrmRx^yhI,]Vq}bAp@}|R[KLaV|9hv.9r$eOKe&R:Yte,p&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
