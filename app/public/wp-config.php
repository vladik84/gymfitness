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
define('AUTH_KEY',         'laApZBudga3ayC4A15/6ag3BCCg1E4cHxdcvgXCBLgV3X01KAe1xywTkK9cT6Zcsp3ZwCgBeJKsnNSq4kf2AOQ==');
define('SECURE_AUTH_KEY',  'dfZ7NbGpTCzi69K9/JdByLcAasfOCANAY7EyF/TvJMvGN/V0zd1Naa9m7ntqhEn8ja970CABx019ENBmfZP/vQ==');
define('LOGGED_IN_KEY',    'lUBjeI94LMyK3axB0oTnwp95NwMtMjvYqxX6u2fxh8cW4MsLFBaP6M/dQGKtwbzgl/V4qyEmpSxhmmWXlsd9pw==');
define('NONCE_KEY',        'wlnXDU/FL0T05birAu9HXKzQq3h6lJbZ/zSNzuEVJR6f+vKMhQnWeCD3MfdiD/rJZ0nHpQA9GwseJqENM9zR3w==');
define('AUTH_SALT',        'fWRHgS2w9DmvHntFmhcKl6OmZy3MhvxGAZjcXevUPMWz5ulDkJY9PJdnasmXRlRgPGGb6mcRGibzm5Mi7QxnWw==');
define('SECURE_AUTH_SALT', 'v1SnMtJLdt1Z3vyrvEFr0LxPtTxPmfKAmpsjknoa2rjYBcR6WffXYqDaLoBG/nUEIQo2CtS5vWr2DknXqVI+wQ==');
define('LOGGED_IN_SALT',   'z2F0zSXXfm47str8CDZxbgVZnUg4igToln9HDXwI8OVm+UoI8QM+BDVmP9wiglxpxNK/Y8i3OXpIJd/jZD2xIw==');
define('NONCE_SALT',       'nuOZFCMLvc1oKBj8rPO1cUAvNBhIoNXNYxUdz4QkvF1TPdWlnDvU+c9esRaubGw61Sa+RDSSAMkQNQW/zSBqZA==');

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
