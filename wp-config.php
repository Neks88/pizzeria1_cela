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
define('DB_NAME', 'pizzeria');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'aEX[A(PWDKBqM8<U7@JR>(b4EQu>uwxUl%6o#7X9IT<-E(o|wtW< Qvqgj72)#dD');
define('SECURE_AUTH_KEY',  'HAKvXBQ,,NiTNso(1otL:OeGET+XDdgTW9)&7{;C8lH68-#8uV:4<J&#Ow1DTGrn');
define('LOGGED_IN_KEY',    '$#/&YuyPg.{3o5x5auLZ%GpoiHH-61dk~vIi=<,/XqujYH*5ucv_[,3kZ5T[Nrl<');
define('NONCE_KEY',        'hulhMKCZyKYAWwuE8r2d[]*d.zu?bWLzLw &c,wq<y$yrc6CFit8@W{~CN~*.Z=9');
define('AUTH_SALT',        'Qx|qd?w(gFdz:G/iX8,94=$z.P+-Q[X~|Z#7R#guF<JcAaV&rSLJq#]eaEIKv+~;');
define('SECURE_AUTH_SALT', 'B.*Yd=bq9LHovr%hUL&3P[[?]`Lam>i,4NW@%Zy5RU>BqzXQg Ptqe6A+3T8N_D]');
define('LOGGED_IN_SALT',   'B7?)_C zyBQcfg+6*35~ roKw%JJ|Nho:nO59^!?).Jk4S?EpgT.-LJvsbA`}~@:');
define('NONCE_SALT',       '+%g7o592T^Rq+^fC6hwYA^{^d=~JU@[|Er-@uvY9Wc#Glf5LBdGvhiwGEe&$!6H)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
