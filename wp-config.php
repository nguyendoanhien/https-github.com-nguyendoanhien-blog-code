<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/opt/lampp/htdocs/hiennguyen/wp-content/plugins/wp-super-cache/' );
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'hiennguyenblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '!*p/[Dn+k3qZ52fd,`oT:eLf$_dbYy2:#4RbSyy7h[01RnuJB^[d*2OR]-(~;+lN' );
define( 'SECURE_AUTH_KEY',  ']4w(P*ea9v(R@2?uTS<sl38:[3:QhmxZdk3S@:E92EpemJ4uNF8NiJ50$_I;,AF;' );
define( 'LOGGED_IN_KEY',    'hz%2$Ee^Mf?_g[BE6`8I&q.sW8>hcCq)a _nSlgp$Vd4&$+i6VIMK%@auij+VX{{' );
define( 'NONCE_KEY',        'c|,jT=b-en(tI+I-|M4s*CdUuq=yo@tPP3.4p-hL[@fmegECn>j<hID2~|DW*,`=' );
define( 'AUTH_SALT',        ',%7;mQND@G9<8e_`kxWy`cvzI_nLPz9N1>y]}GX82;PsM~sV|{bTLDt&T-d(s:*f' );
define( 'SECURE_AUTH_SALT', '+yK$PuE0M#a~]L`a}^8Y}~fYZ}wL4Ot NU[XeFVbRgxa}-4gM4&C&zM=B]-TntP)' );
define( 'LOGGED_IN_SALT',   '98k}1T2^QEJDR90k{&WzrLvOXbhWOb%PXm`u)u-gpl6#d_,I{:o2vDz&(V(Im6 /' );
define( 'NONCE_SALT',       'QTD_=AO&2Pv;Fa,Zix;{nn7KJzv{<kjA(`,Hg$g0^(Rj;D:RtqN|[8a&7zHdk4U|' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
