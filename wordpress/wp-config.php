<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressadvanced' );

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
define( 'AUTH_KEY',         'bQ/7F(:f>8PO?=?p5MW7R3z(g8u4]~,@4)1pVE:rKX)+)=?=?=8{1<7X*(G2iAjO' );
define( 'SECURE_AUTH_KEY',  '#YLjxBV_DO/g.#H2pi%+IgFD&rXlDBjz%C[UEBP6l~P7$3DNpL`]4 `xAZ$w:zn6' );
define( 'LOGGED_IN_KEY',    ')e+Gx%-A$Af*RLT)SAkz+G,]%w+>Qpj>OL=o/UUIqswpt@0|@H9QhodB9d5hey.=' );
define( 'NONCE_KEY',        '3s;|t2rgn7x6>7K[^[y(5<` {TKH!yiN5!00LBwT48o9$#%B?a.2J$BGZ3+3X%_e' );
define( 'AUTH_SALT',        'Hz3wV6g#?~kYeW(_5n1eL]$g-(0g(ViWj%v;q{xKzmmQ=XmS1]kR,>EVP4$]D~^Q' );
define( 'SECURE_AUTH_SALT', 'QAu{|4=;t2df/jk/PqRxZ=zygVNBP-Uv(dx=?Oe+S>N_6?I[7?Hff` zXV!X[yQ ' );
define( 'LOGGED_IN_SALT',   'k> koZ>YycP2[_;yCyd=aWN|@uBuwXmb,rwL7bdV9)n@}pMk6?d!H9/SV|0S91S:' );
define( 'NONCE_SALT',       '0T4zc,/>tBPU@7R+3`3*{#r2oU;L)V5D+RTrLN)$SC4n/_RgZEn2{wxlyHS]ZD^2' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
