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
define('AUTH_KEY',         'hM0RB4pJgs//lPe3dK5O1mdnk518BMj8N4UHRHZtUuwwaG5/Q+N15AMI2dapamFcpJEmPHYM4YiXyV4iNhay0g==');
define('SECURE_AUTH_KEY',  'fHRRmZqX+YvRwkpB1IaTvW/6D5Fby4POEpjO9cmrCxUcWC1ehxFbnmB6uOX3/92xKI7L0kI0RRK/cF3afQia5A==');
define('LOGGED_IN_KEY',    'cMny91jDAEw4e5tKNyNLFI9xv405EL6rFCmbarRi449UTe7aEWG1ZmBjYrxOlR+kTtt4EYdHRs6ZboilywCuIw==');
define('NONCE_KEY',        'LQhhboGlFIStURqjqSxVehfLnPvq22LSYFR949XM6rrMd71F4eoBstiAzT/LPhnLEq4eQFFBR3TsZKC4fF7/tA==');
define('AUTH_SALT',        'gnsguFJH9Wdb61yRr8CMLtEMfPSRo2ihZ53OZVKtIFpGq/Jw0P4C7lOPR0TJdD8hRy3c2HJKDgV0n/JGkiB5ug==');
define('SECURE_AUTH_SALT', 'Vso65Wq25sE2RXJB5XL5WXj/c/dFq7fxOYA2odPEobOCukVnMAdJw+6ny0WCEZEtPEMqZ4QNYrw7YVZBQuEhpA==');
define('LOGGED_IN_SALT',   'YC52K1uqFz9dP2cBF5m50kQankmGo0xb+B24z6g5kOJiW/Y47V6PjeVhcFgn0H/dqI2m+GKRmwIS2pS3Qb4QRQ==');
define('NONCE_SALT',       'sAqPBHlZhhCCAzv9+X81uMGEfI+B9k1kEb/yS8QYX2I++w0D5Wx38kZGY7+0kL8gXzkVelLgyta1ggo8y5lrGQ==');

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
