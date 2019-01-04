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
define('DB_NAME', 'juzosum');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')2hszN8!YoST`6,y?8ROd-[I~5x]Ec<U~V.57)5vLszdJ?3N,.BOT|_{!y`O^h4|');
define('SECURE_AUTH_KEY',  'Up<w^msXc.N3F>d@HBWdax{ue|ef:j`Max@F{uFo{z}nSe]mfwydvO~ALyF3Xk`g');
define('LOGGED_IN_KEY',    'T4Sgj>eP.pEyPdt~pQ{n{=G=G!/iSf%`n3z4){ul{=azjfRk(xIP(FZmiZRz&2y0');
define('NONCE_KEY',        'hl.].MqBtN5^;V)H$}M>$E]m<8<?j^Y1k?}$j.A:-wFTyYu%L8B,A%% tH/_ltJ0');
define('AUTH_SALT',        '/,1zGRXT>8c<f^O Fdffg^sV5<gyDpXN9a8uJvXiLVSY9O$hSH/h+]m;{o_yB0.U');
define('SECURE_AUTH_SALT', 'infG=I+#wvellz&1)9os7CMs``A65tkxuUGM@>f-/vqcz=Bnl/hT#*|ogp<<[|_^');
define('LOGGED_IN_SALT',   'cl*tOhET$BbV40;KjEsFO$Tc2(V.QVvlllr8NMjW%$<ru@AV%]MB|(,E8tmr]Dj;');
define('NONCE_SALT',       '$B0B%}T-TJx%ptCuK?%F8Q+l>^SEocI#>z>AP+Qg4Fh3f48B+A`aZ}^K}nwB^$ ?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
