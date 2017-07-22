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
define('DB_NAME', 'farminghope1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY','jA-VLytzIr6,&-)0p}^eTx^!m4FM>si`!S>PgB!KP]/MiQ9on Nt0+t}/GhS^%X|');
define('SECURE_AUTH_KEY','igw*SCEY1=Xv:+YI>8:85:CFn)0IXI+9Xr/-|k8q}*9-`X@3>L{0&C)3pL?f[8@Q');
define('LOGGED_IN_KEY','0 z);UMhYeS-sH(T63nsH5`TxbIC->mZPAM()FhA|08=l|(0kkWG5C51T`QqlmU:');
define('NONCE_KEY','--3m2uU}4 y{h5c,H|KE-N9RGd O+9DP8/&9+Y[ZCHNw-Ah(ZFQZF7h*<I#Y|1Nj');
define('AUTH_SALT','kI8w4+A$+z&H<=oZ|]n]@-~ABnk<1As8O;T3crbPxyA$|ARqL854}j=yhDW_}C+^');
define('SECURE_AUTH_SALT',';B$8Q,d-V4~|NSmqU^|G||sIK}Wnx*|p7{nTCf!+[(b8?ikOM/US{ep+Jp*MeUeC');
define('LOGGED_IN_SALT','9L![](kzs|E@c-T7w;52=-*Q{- HlImFw3Fgta?{RWMzHnx;Aigic_~I++LR%ut+');
define('NONCE_SALT','ADl_KaXTk]_O:&1tR-O`JJ2/0F_eeT}yj{,*2<RI9%4/+p+5=^62s@bL/r7>k*Mz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz_123';

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
