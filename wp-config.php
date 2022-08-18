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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'm>{#H8[,YkV2GruA+s<bpA!3%}%O~%[7Pmp;.~-XG.v$AO9.=z+]P(~DJr{e[*c6' );
define( 'SECURE_AUTH_KEY',  '0*+p`~5rcl&c5C`=s.kJ>Yr#/^w%=ugUU-o AW[WYjh=g[utJ,Ir8mz:wpkWuY^S' );
define( 'LOGGED_IN_KEY',    'k3Ma#%1-TW{gjbh<yZYa7 e1X;KL9F6^O/>N[5>]g4&`vUgq-!KYkO@P|%28l,Y}' );
define( 'NONCE_KEY',        'ZX_iLak@_72_v+5?y30=zZ~Eow`m}G8:fg?R.~t7eTgtqbVL(q aUZI<SGSjUtTT' );
define( 'AUTH_SALT',        '|/>l*l0}irkvx|nh8i*(Cl(F1Z^f~.Reb$/NCJfwaVC,O?wSr=2)(I-cr=R#M|EY' );
define( 'SECURE_AUTH_SALT', 'b{*3kP1-9PvEA=u)5n5#oBqVZi6B0BMkveb>%ODb^Pns4_>luC YR)gCK`Moqxe{' );
define( 'LOGGED_IN_SALT',   'd 0b8uR4t2oKB$6_P%=SOOjag@jaIcnOS,e(nWP>ADg66;3*#@TvTnX~e<_hj^!;' );
define( 'NONCE_SALT',       'Dk;^9G0{_w}hEOLbDJ8zB$Ia105h^wdUiVxu+2Qf3,;.Mv71<XML)p>UomRM1~8x' );

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
