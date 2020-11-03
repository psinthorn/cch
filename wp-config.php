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
define('AUTH_KEY',         'cXDP2FiGCEURdHMtZ/Ze5nxedBNdooPEf6+FvLDb2Sc2Dq98z3jlDZkXy/ju01RgWH6Cx0hECAOSl7RYQSuTzg==');
define('SECURE_AUTH_KEY',  'E/7J6FdnEb+8KF4yMqHOikqFTwSkW667KhhradhYcncIbfq2IsRrJ9TmChQ6Z6AoUT/lUn+tmlmG0agUwIYlKQ==');
define('LOGGED_IN_KEY',    'V+UrPvDKRzUqkqYZUkVdu5pLeSUdjUZQDWbngGg6IRwuvkrGUX6JcgLcj8HM+lWbtsd9ScCwz7WPA/UuQMsPjA==');
define('NONCE_KEY',        'COIZuMSrZpPdT3kn6IA0QkWTyrbN3wDY6UembCio9lcOSA0woh1swzfAovc+jGZ07keBwdgjyPgKDQXHGfWchQ==');
define('AUTH_SALT',        'v6ehrdJNJZAHejsk0UDUy1yf9fQYr4/++ZPKBtDcRq3m32nfYdz7kqSivWqcMhG89KSZQxbFPjcQdAykJ0fLPg==');
define('SECURE_AUTH_SALT', 'Ax2VrGwomBTxZvl+KavWaXl6zZF6mjDqF0jDEqioztvGAl4nQl6rg80Cc07n61yWHqFrLuYOuzpHIHLCg8Fz8w==');
define('LOGGED_IN_SALT',   'rHRDWQQJFUh99tNXIPR918XNASboy+CfUnaZIhJZzR0eMvHYpVcrao++6N0CLuyw/EPR6Hp9mMpT3QNHxpOT5w==');
define('NONCE_SALT',       '/4sgNHaxBPcOIa270p8eRD/Yj7D3hWl/kNMmOgIpuCvctIydpxzNNoRDv1CQHUlZuIo3dl1GpKsBdUYoPY+X4Q==');

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
