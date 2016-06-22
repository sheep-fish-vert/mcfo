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
define('DB_NAME', 'sevenbit_test154');

/** MySQL database username */
define('DB_USER', 'sevenbit_test154');

/** MySQL database password */
define('DB_PASSWORD', '6vg56855');

/** MySQL hostname */
define('DB_HOST', 'sevenbit.mysql.ukraine.com.ua');

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
define('AUTH_KEY',         'xo-E*7B Fa@K#@O20!)!3r76:.zLBe$[6g9=Gt_$0LX]2Tz69>G>},`n3%<!J2,r');
define('SECURE_AUTH_KEY',  'U^b)h8+t7_cGhszDup;r$GjcK7Jh;e#4Qzf3;s- >D.{+hK7}5nYz-||_D6Z{]X6');
define('LOGGED_IN_KEY',    'LRJUx=ZO-P!N^p>nu3dWnET0w0[W}l|[ep:Wq]#bQlp]O>w@MFfeR@7`$9U U>Gi');
define('NONCE_KEY',        ';>RfB&&;:PCHX{[Ihf=p@LQiHZIYz-$|b`l(ox}!Rk]{|HLQS(Ed)} PTl]La-R8');
define('AUTH_SALT',        'rlpRn>(*=@|?<MGz?OZNhk96>wFAx&kxhfU4kl8CHCfNf)1QY;9 oD<o,dakuhHf');
define('SECURE_AUTH_SALT', 'NM~)6!_}g#!]BLwsyb=C`xR<*ZsNl{$ghc#IEht[J5YRB:T)k%I1krZ6#`(Foe,i');
define('LOGGED_IN_SALT',   '%UPK#,fp[E4ZBScl-d7zkkcn?Led3&G*|Ih=<`b`1JdUw&}ePp3o,eiuy=1o(<CB');
define('NONCE_SALT',       '@pcBiZl|Aa&K1svi^%QO,,{!&2l(K B*vWJvknIIg5wfzwi@;u},{_,BXA9=_4c)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qwe_';

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
