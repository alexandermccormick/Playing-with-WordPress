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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pXO$$-;vTjB4)DRCF]4nm@qLh]0vA`OupO3l9d TV/$Lkas,;<`rTm~U,$E0>Tv{');
define('SECURE_AUTH_KEY',  'Q_b? }ZM1IR9>eg!z$^yXHc:</XG|yq.0<Oz/,7]6a0@bsP}I0q e_9sqoEk8GP=');
define('LOGGED_IN_KEY',    ')0m3/V#H&~ul+X!6AqyJS91KYfdCsO3WnKh&-`t6(iY69^.xXN%yP_m44g$yN3gq');
define('NONCE_KEY',        'fv2hPdn A536u6_96|S#&_ZYK;uCk@Io7wGIp|)plN[YatY7iwX8uU!T1KTKRC5&');
define('AUTH_SALT',        'q[vg(&PGrlP?sI??H,laWj>tcz&3OjO1=U&yImPEhQ2%RWO^#ETYj8yAJz,(3AW4');
define('SECURE_AUTH_SALT', 'YW>sCW{JmfccaNKnO3Vb%Z:~4=s2P{NZBy/]x+w71_Y,UD<Nm<K?9@yA{7@8s]5b');
define('LOGGED_IN_SALT',   'CgMnF$|}VH~bOX}:0+h5D{MRd7&rKI4^~l(m.QN %iImRw<bWi)E69NJO7!O#HAd');
define('NONCE_SALT',       'pjjx ;4S[v1Hl:QsRZM`@a@wuAyR54+gP60i z&OuAm&e%W,/t+7U^@^R1HdvH?5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_firstsite';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
