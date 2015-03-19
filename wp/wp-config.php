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
define('DB_NAME', 'jayrente_AandBae');

/** MySQL database username */
define('DB_USER', 'jayrente_AandBae');

/** MySQL database password */
define('DB_PASSWORD', '(@RbP17S4X');

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
define('AUTH_KEY',         '1fmaj2xsdyh8guabewydqebp9jfjzbqhpep0xuuht8w409vi0ne1j79p9kil0bfv');
define('SECURE_AUTH_KEY',  'gwvgu3fe8eevqtygkgqxwzc0ed0bylk4imcvej6jjveyi3nxzhzm6nnip8i06abn');
define('LOGGED_IN_KEY',    'hkidbkcocol6egqcnahw7dknqwh8cyfmxm3a3oydco8ujj0tgwjqcp0luba8pkds');
define('NONCE_KEY',        'ljnoawptocsnwllczd8eapxqm7ic2njtdkkufxqvcainggdxgqjjjxval9snm6qi');
define('AUTH_SALT',        'ib3qkwfsmwqvlrtknytlv3lbcucck09sek6zj4kexosyympebsdvc5c0rq4lc1r7');
define('SECURE_AUTH_SALT', '9mhpcrygxyvagbnpitmrvcrylpwkwqvzkflzixsgtovaktbp6v9znk9vomm4zwmf');
define('LOGGED_IN_SALT',   'h8y3r9ysyvz7xmjdlqxtawd4xy3ubnt5iuvcsgmldkmjynw6krpahudbw6nxegiy');
define('NONCE_SALT',       'wxxfa4nrnlpicptgtqgbxyvar7f3elw9gmgzb4z3hkgvcqdolzte9w31m3zkxnwu');

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
