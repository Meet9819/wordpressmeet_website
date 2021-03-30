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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressmeett' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd?ZY82&nMA}%HDLqz:*K oGk{}Y.uYaK8&FUG<XRy4=(>T9SOa0,Y8J]X,;Q!<$%' );
define( 'SECURE_AUTH_KEY',  'olThsSK67CH/T;4xLQ}DYeL3c6Hi4ed}.9vdm=nv}5lr?BKdH0M.3PgFQ@vGIlY9' );
define( 'LOGGED_IN_KEY',    '_yg!^(Bu:YmXxrr.=D_vv]TS)OsEb3md#^Q7A7IA2cSDQ=[;,`,Wu|~4p=|>?|hS' );
define( 'NONCE_KEY',        'HdKRC:TUXNd&(M|%&:8AT2*7OQOEyW]Wg(`Ioj|Nr/(@jL1roFgwR-xN6|{Cp,k8' );
define( 'AUTH_SALT',        '%+C.3r2pZ2gdBXUu(1f-e{F Ae#Kda+kB0:ij~{:t0U }1 ^Pn4@[jMDtQKi@1z0' );
define( 'SECURE_AUTH_SALT', '{x?>F89t.O2x=EO*.FMZT)F1X>SL`d](:>]#@PUOaI1{0TzwanSMSVA%b(1773aD' );
define( 'LOGGED_IN_SALT',   ':r(a:1Q.d23`TIE[y1hO673n9`uq=3*DAmS7fF htWBJ_ aZ7DOpId(o6kAjqAt/' );
define( 'NONCE_SALT',       'z$z=!KtPRVvycVAdw3}7CC~t*To$$-.O_#9aYuaj:1k6Pq5E`NAACQhtb|x06v?`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
