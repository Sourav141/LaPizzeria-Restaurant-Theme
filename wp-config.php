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
define('DB_NAME', 'lapizzeria');

/** MySQL database username */
define('DB_USER', 'Sourav141');

/** MySQL database password */
define('DB_PASSWORD', 'swe10335141');

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
define('AUTH_KEY',         '}CRl^oyR|~`5Bh^&fYF^MZHAh`=@BIo.d|_K]XT&`@e27I$}A3}QPQuL).I*>Acd');
define('SECURE_AUTH_KEY',  '1|+*oT-$+xxfmfj]t5/3rs_/5Exk{(3~X0XZEad*F@ZBF:d]S0jS?{-2%ZI)m2aO');
define('LOGGED_IN_KEY',    '%IJpqh@K%QRSS]:B:{43ct*1)+5}5le#:{RF66TO%zCY~Fbp#&;~2{WppA0#n?-L');
define('NONCE_KEY',        '`5ToG[qm$IP7#4EcJ5!2H/sW=3UOKfj,+(ICodQhWyn{SW|R5T{=Lm}X6}k94Bed');
define('AUTH_SALT',        'u6jtM>0GZs,ZPeGic Rdimgi|H8/eczNnS(>V?5(O~b0<Wfdif^wYj%v@`Z&kCLA');
define('SECURE_AUTH_SALT', ';]cZvU!QC|36+9Ju3pEh9|,QN=hJJkPDsz1ZM1YkUL&%|TP!3Mu9.!{2jrg[Cf3v');
define('LOGGED_IN_SALT',   '^k^t9%5qw*iuq9%4|yb7D0ViWKf6A_[!8M|+3L7(.?*p<ZGH:#X-Q[hET_Ko]T~;');
define('NONCE_SALT',       '=J3]Zk.2*w^ETVj59>bJ^e*%*y%L`f`WLY, .qt[}=ivIp8&~.BSoY*B!wNr652:');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
