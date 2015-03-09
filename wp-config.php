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
define('DB_NAME', 'portal_vehiculos');

/** MySQL database username */
define('DB_USER', 'wp_root');

/** MySQL database password */
define('DB_PASSWORD', 'wp_root');

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
define('AUTH_KEY',         '9B+6>zbK+]0Z]gH+z^pLECvyK;|`T`SIW$e1*BQe|7NFzl#4p}n1,6aSvkkJjJ8h');
define('SECURE_AUTH_KEY',  'a8>%xB]HAK1jGJuq}BAp-Pd;MpDV&S+yiPXChIc>ci-jah@|]/4Lw#@:I)j4SE>C');
define('LOGGED_IN_KEY',    '7yf* #T$Sx?6N2@ FJ{>]f}-],$(C{rClh.>ly|}-X-^ez!-I>HmOk@CsP{UJ$:v');
define('NONCE_KEY',        '0Yr+nd=:L:DVs1h!:4x5~K!)E9M#(+jl8U7X9:w$K?Wqn/*yd}X~]J~dQk^XW*p#');
define('AUTH_SALT',        'G.8;mVRY4@-lZezZ%r0,.NA1BV74c|)>9G)F@9bpiTBS}Sqiopu=}|%A(pymt@d!');
define('SECURE_AUTH_SALT', '!6j.1 4koGW6C=I;as:X,.&5xFT_y_8!3S?`MY8EE<SR7U9/*u`cgPwh(q}.A_Du');
define('LOGGED_IN_SALT',   'jbrk#x6yw-`iTmmMnvj(:Wr5#zy@7t-d%uUIBK(.P8+QLP$c+sjUnc7nu>~8Fgpi');
define('NONCE_SALT',       '+dLx^C*0G+V96&p}TLU:;_)Gyc!N^RnpVn7iHRMD./d(,p%0lY,ES;9`E+T&qBU}');

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
