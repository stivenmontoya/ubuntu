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
define( 'DB_NAME', 'ubuntu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'i+gfYZK&v6[j;+3~M;/arZ:/d3&r73n56)%&En.9>`KQKdMqZWry0;/l86l2H85[' );
define( 'SECURE_AUTH_KEY',  'hM65elyb%zOu6#qN4Ot)04dz|f@gu@OIC`$BfSk)f*@O:tM(h`}]+If^tw3kN1>l' );
define( 'LOGGED_IN_KEY',    '_pTIBQ(ucJ$g_~k.{=MZA4y`Dh)FmA10sd6CAejfBFz6-c^g^OM9k9%1u>y1xPX=' );
define( 'NONCE_KEY',        'OQ%PZF~JN5=#r:zJ(W;)]imgB/V<(YGxWh;~c&)h)$.PDT!7_=xCsLjUxE/IQGsf' );
define( 'AUTH_SALT',        'fhw(NuP4&[SJDEj,%GyM!Bk3,x4Cln&=SGn; GWBKBfi4K.@7h8GaKj-I-daHK8r' );
define( 'SECURE_AUTH_SALT', 'K^@n#:vRzn;S WjUb<d6F3~Tup[^Bku5=q~MEaY|V2WMy(wE:-7(fIJ->>-=G1l&' );
define( 'LOGGED_IN_SALT',   ':kYp2h;vXee3wFeliA;= J+UHFRte]VWO9ev?U&49aZ1dw3<BZ^pKzR@ZdJaT=rY' );
define( 'NONCE_SALT',       'dXg#x>?<-,1UeWV0EV]CYJd$|LIS/&k|_t/cMuULIzH^Uk G}7CtzG</e<eoQBq?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'obt_';

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
