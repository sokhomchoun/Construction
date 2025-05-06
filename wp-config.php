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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_building' );

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
define( 'AUTH_KEY',         'T`KD2bT:&dWj9Qzl_l|aCvE70#lqCb|K?Kw2Dhw}b.<=#`II}mg^YC0[gZ3#X,MC' );
define( 'SECURE_AUTH_KEY',  '1uS M,|OIHo9 dCm`H=CHrVW%osQCM|&C=az1sn;.VLJZ0K1,wM*E|IY3p`}LAVp' );
define( 'LOGGED_IN_KEY',    'P}aipV%Tj3aJG*yjeC.>gPUV`Nff+m[)XvjEDK!Iv3~!1x.Y!H|m7,`z%c9WSy#M' );
define( 'NONCE_KEY',        '2a}UzgOvej`BT//&KN.t0syPK54nK(m?s<%>M<? yR<uKE%3,y%FLx:dB2>l[R2*' );
define( 'AUTH_SALT',        'terd2sJ2Ev}9u&-Vy#?~y!ep9veLdqv]$plDa/`d`<lR_5.C-fOpe|jIX[@)#m>E' );
define( 'SECURE_AUTH_SALT', '2& {XE<f$qhTV,&/_WHn$33_0:fsH#8,$[=IZ,npHpEbvX h{<-d3c|pWJkpFri:' );
define( 'LOGGED_IN_SALT',   'Ep/Is7q<J/gwlZqHl&6&J6%R };EtWDWOAxqwLt`7E{/t[xUC]qqk#JwO9DA+}Nf' );
define( 'NONCE_SALT',       'df7l}Shim-H81.dh!`249Uw3UI`f*?^6s`p/3Kl=e#nl]?-.t7#[H]40lw<aT$i:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
