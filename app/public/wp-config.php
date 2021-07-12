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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E3jcGTzSRkBqG6IvcOll++izMfUjZMSzYAx7+1Ybc5S7WUsB/YpTSqUHkWhsjEkxnnxfWfOOf0vMYpefxOUCXg==');
define('SECURE_AUTH_KEY',  'GtMOUKptoHxURZO1vXrWTb3BC2DgRFyWPrabBTMH7FldKULzaFVjXRo3eIN386p0oWPECDzjYDSqMXM0h21rjA==');
define('LOGGED_IN_KEY',    'CQH5/F3arFdtAyqUPkxjIOnWYygilob/0sZ99PkuKXscGF2goo9toaWYJqjjUnbCzv1UysFNbLVHOOYsydBgfA==');
define('NONCE_KEY',        '9Pv6mTdY10n/xd89bb32KhVzroZsUciVCHKAw5JuVe5SsOdJRJbJDR0kHLAvIGrYOrGQXUotCCAUl9QSDMtsow==');
define('AUTH_SALT',        'Q7TKg4qr1ywcLN/Wky3ZYzopAfNnGG1Lu2hX4+BwpT7/qraLJ4FfU+8FToREUzzn0VKiNrWEbu0zjfGEG8gFBA==');
define('SECURE_AUTH_SALT', '3ghhSWjvH9f/LSdTCTepQCC7sx98/dFSGccaAs+PP4h2junCZD9m9fin7MY2K2Jj8UJu5xtg3s8SJ2dbaUdHkg==');
define('LOGGED_IN_SALT',   'i1ojn679Mg8orjhlbuI2YsyEmhCq4rmNEEdCtbEac/ihM4kNWL39odbesFq3CbdYkuOrWFa55+Gd0NTNSgHjIA==');
define('NONCE_SALT',       'xs+xMaLU+J4WPUb/7CmCUPopQYfFu0RWEqqkU8ev2EbMz+5uiPQ8hoiS8gRWZHko6FO4QO8y3yS/BPGBUUveug==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
