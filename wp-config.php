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
define( 'DB_NAME', 'wordpresscvwebsite_db' );

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
define( 'AUTH_KEY',         'IqzhSH{;?cG4xy8:([h71>/j^kl9 k2Bu`=~TG,<j$LMPEM-$aF)Tbci=Ag-t,Xm' );
define( 'SECURE_AUTH_KEY',  's n |2CU)rO!zswqv0yxm~j8zMd_1^Cn8]njuR^ANOuQ7:tfdBjkOHH VH[2XWy}' );
define( 'LOGGED_IN_KEY',    'T[aL4kiGZ.}H^z6(x,6,9TKP;(AxSrara*`lEtR>d6Ug.#]c/0*Av!034=Eq5M7O' );
define( 'NONCE_KEY',        '~[D<mzGvx5U5+2.{.yBe>oIw.4|Q_?zT5;I?zY0o9r7o v`c0lbDV:a /I.}<SR<' );
define( 'AUTH_SALT',        'zTUH,F5EvSXOrS?9(@30oSrH,C5%i6EXy36^xpsS*JrP=Y1`rlrNNYm;i$*rh/I&' );
define( 'SECURE_AUTH_SALT', '{=t#1Nd?<k!`+qM$C y4SQJPS5UFIW.AS^AMsCAD@Pd$`et/@}e!T#oP[yA<<2XW' );
define( 'LOGGED_IN_SALT',   '>S,)^J)3wB>!V$_7hpwOu,9pHnpfTe$d6 /G1Jo8`:J/rc/{LnJJ~qt(e5 =C7l{' );
define( 'NONCE_SALT',       '$PbmHc#d2#A4XdM;|MI Q?L>*!3d$Hiyh|d&x/<MJ,kG$%:pM qozy*^]:31*,6[' );

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
