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
define('DB_NAME', 'db_myhome');

/** MySQL database username */
define('DB_USER', 'root');
// define('DB_USER', 'myhomevn_us');

/** MySQL database password */
define('DB_PASSWORD', 'root');
// define('DB_PASSWORD', '#myhomevn_us#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         't:1vEy3dY4iY$/;nWfGuE=:C04o?azSug]{8~+j]PpXrTT5Z);huEIuB8ogZk5kg');
define('SECURE_AUTH_KEY',  'l^X<J{^@5:&8Q*wTm 9:i=AD(/v-32g dytH41LvKK8yV.)h{VnA8IJ&KVrKnN7R');
define('LOGGED_IN_KEY',    '~s{:pZ@WA%D~QEWpC [D8^>9]7Ut1I/;DzvBmabWoGMV6C Fm.x)4hb`*~D70WVt');
define('NONCE_KEY',        '~8AO*QkO-/{@qFkw70w_5TQ_9)na5&}$Vj8kX6TrV $:|>{>p8J&!t{vQ SN@Nvp');
define('AUTH_SALT',        'QE$nFTi-OiquNzS`@nz*d~kxJjj^jXmY(NBP;EaZ<1h2_r`GI{+Wtcg<QhBe|JwN');
define('SECURE_AUTH_SALT', 'kS%>^}#}dWGP4[?D!d5gM:Pgm<3gO)p(P0sMk<[EcUcfmb_nyb0At@o[n<MG,gyN');
define('LOGGED_IN_SALT',   '()})%l(|1&kZ_68/mheOj7)[HCV#81*7lLRPY/B`]@yP2t|sGlu|VB`vc=uW}q>S');
define('NONCE_SALT',       ',:jP2>cmG00<,]+w1DF){39^2!0Z>2]d) kQISk/=.{.b6OI[),q--t7 3x)Xq{E');

/**#@-*/
define('FS_METHOD','direct');
define('WP_MEMORY_LIMIT', '96M');
define( 'WP_POST_REVISIONS', 1 );
//define('DISALLOW_FILE_MODS',true);
//define('DISALLOW_FILE_EDIT',true);
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME',    'http://' . $_SERVER['HTTP_HOST']);

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tpt_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
