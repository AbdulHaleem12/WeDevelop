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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']hAVN=&UfE3s5<vVzJH0tLsT+-0|rmHX8@!ne/j,00:pMPeHY:_6GI97nG@DR~z%' );
define( 'SECURE_AUTH_KEY',  'ikQ?+Wbch#C]x/&[+Hj8!w0[>iV/CiwN8b3`Nsh|9D0hUzRU3;boP0=hch(J1JBs' );
define( 'LOGGED_IN_KEY',    'ES#E}FhA-*yrt^D.ZFB>DrPp4 ^4`hoo:uBR|0t=;J+!*,lv;VU*ql^su[MAD&)R' );
define( 'NONCE_KEY',        '2YY&&jVKZ0l$_pZ{&g%=;2|x]9[[CFb@7HPSiVW7*{IdWt%ij4_YtR*T/p72{zlr' );
define( 'AUTH_SALT',        'B4}+CP.[,m9:CuA,|!.F%H*HtA:)NMJ6HJ35F;:qFxQ_HV&CDV`(X~y:>j)}.>OK' );
define( 'SECURE_AUTH_SALT', '=FZlm*9/Wjc`v_xH%o(BjTe{M}%!W@2^i{^A->Zyu7B(jtyDoRyay.#8%{,r)vmE' );
define( 'LOGGED_IN_SALT',   'sKcaARIc]-]SG+6Y5Np-$NoM}*2d;4w[]=<u}@_fsaiW?~;!lMb{[y=3 xY^^T8c' );
define( 'NONCE_SALT',       '<wxlnq2xt$cx~4TLVfKaXA`vh&llY?[f0%[uz&4?mN*;6]U|.#r?pR3VHNxCA -6' );

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
