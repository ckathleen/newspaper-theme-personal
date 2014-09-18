<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'caruso_wp376');

/** MySQL database username */
define('DB_USER', 'caruso_wp376');

/** MySQL database password */
define('DB_PASSWORD', 'PfS1g2n42a');

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
define('AUTH_KEY',         'jlr0ygr5pq1fioozci7404tdyleguujla05lte1sok0eth7buirgpluqymltshwc');
define('SECURE_AUTH_KEY',  'mz2qpnrdmopsjbgxr87sz008sjinatvhj8drcjgib06msayyevkrmv8apbyak8dy');
define('LOGGED_IN_KEY',    'niij3lfhxa4ebd39mnfcfcf6ptxlhttbc0k32gwwiu663sanoyahu9hx15dgjqyc');
define('NONCE_KEY',        'tmltfkpoxhuufgptahz0v89eybnk05ypbxt1lxrbsxv6mwjuonlfohlmzywc7l8n');
define('AUTH_SALT',        'naqsrmbrgstgnefkjidyb4h5a87qdgx4gscd8tifs7b9mwwosbvnjfsqkkzqwku6');
define('SECURE_AUTH_SALT', 'ha8cs6ruluhdun5gegfqscug2eroqbvtlrjlrxxlfabvsfq1byra1p9njddhijx6');
define('LOGGED_IN_SALT',   'o61ebtzq2pynyzgqapqiv7ynytopzzazfeb7kxnfetqtdmzgcifyp5vhf3pkws5o');
define('NONCE_SALT',       'gxucxqakpfryajhy8ke62ifhihelwl9iyummgss5j3iqpxybchb5ufaqqwvj24rs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

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
