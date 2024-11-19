<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ikonic-dev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3k_M^28JT{tM^xBqX8b 5I[8<6=Fn/D/=h`,?d}7sdM^/fc]23hMmUi|8_*JIdZ7' );
define( 'SECURE_AUTH_KEY',  't|.+neLoVNsdPq@,~:b*L|o/&v6g].m+4ax`;S^6.AjzhSQV:F8(Iz~ByqPYN{%z' );
define( 'LOGGED_IN_KEY',    '^)E)0ycgt1nG6%1s)RZwNCB79a%N(uCAoaSFx:-fkY!YB];lF5{TWoY@:mn,-LeQ' );
define( 'NONCE_KEY',        '~C5GF]B+|Y7Wt*OiJ&}PD!6L]+014`%b5Nc`f!-{|]jNonaBZQ#i>GiI h+*Y-X-' );
define( 'AUTH_SALT',        'xR@br]@!H>6/WMAjtm(X2ZFP$c[FoY62bIk_:FXBFgB78lUeL`d0u4oO<FQQa4m[' );
define( 'SECURE_AUTH_SALT', '?izG46:e%|WI9,EH8V4f0.k9UfR_HT.#$)uc$/v6M^Mlv=X}la3h+NJ%-I+oarZk' );
define( 'LOGGED_IN_SALT',   '0Bh)*9D;>cz9HYKE&jynls;:a#D8$SP;~r_RiHz7G8R#cLy&>jX-X%MjQI!`L/<N' );
define( 'NONCE_SALT',       'i4<4+{$YV[>jf:0!!De?oWcV);z+_ASRjTZ]=>Na<1fuGZ&/h)x)8N[M<n5Xz|uf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
