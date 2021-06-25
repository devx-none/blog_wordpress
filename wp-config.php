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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D}T*X3zna$x J#x1A@qom9Pfua3/=x/>3`_SS>TOw!,.rGU5fjW3~YL(+nUXaOCn' );
define( 'SECURE_AUTH_KEY',  '>vkAuG8~|:xbt$IYbbj& Iz6/rOC/CZ~~0nFd@E<.GDhoE(lW*a)b=B$RJ.k5a~o' );
define( 'LOGGED_IN_KEY',    'ZtAqm>(LK)}tT7^l$0q:`tlPqCH<%k)`Xgzr;7_+s +T?1~skX0Pw6On -PRPl)M' );
define( 'NONCE_KEY',        'sc&*ETFl#AB;2xsB5<Ol4N/9*=l(:vf_q@:6]>rk SuIM#D(4m8i){kX2*an7*A!' );
define( 'AUTH_SALT',        '25A<0UnO.zTumSs5*:/Qjt:Q,DvUU7xdC<NijD0hTKG|6B?PplP>( }K?|a_MT6u' );
define( 'SECURE_AUTH_SALT', 'f#iMDDJ#js;m xgHey8@W%*+m3BUlY@4xkBBz?u+G2c,MWn< 2!^Dj*#axJW>iv^' );
define( 'LOGGED_IN_SALT',   'P}W2,T4s{<n0%s(cD!%5Apg[0d-!PZ~KZ9}*t?QAx8R?(K`t SHlugDP$oZV~4XS' );
define( 'NONCE_SALT',       'RFXQ,yHTX/D(VSp^UCCn71q<OQXTWU~Z 2WMPoYanc?;RptG}Rk{o_`/7/9q:F8A' );

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
