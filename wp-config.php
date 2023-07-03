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
define( 'DB_NAME', 'wpi6' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cados123' );

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
define( 'AUTH_KEY',         '3a=vluIoR:7>:>*[3kdB#l3/K]X``+ hX4X_RQoeRZ2pL& 47g4XVbMplJsOLOV8' );
define( 'SECURE_AUTH_KEY',  'io`kS1l0$RY-62`gy#2u]l)0PAMx#3.zBZz.IVSH1$]]]hTmZecfr%f0B3UMc@#G' );
define( 'LOGGED_IN_KEY',    '@4sp]>l:x-@!!Y<3.vTs/ )6!6]{nc9O$`!=~O@>3U*[s(q0t]5sN<v>H|HRRvOy' );
define( 'NONCE_KEY',        '&yK+p ;=-r-E}EsD:zb.z esCxPOg!|&aGfe9dRoN4f.XWIfy5Fca*}|h~FXmV,u' );
define( 'AUTH_SALT',        '^){1a.`9y2O6Mpe[cgIECs@!`eTb%rMaKk!BsS%4T =R1@FO]KY3=)3UBl=eTc,[' );
define( 'SECURE_AUTH_SALT', 'k!)a%U^O5;4WG1SIU v-yH0HGjLZ8/P#E7ewq]-qS<@/e>t;CHWXRl~]C ^5Ug)y' );
define( 'LOGGED_IN_SALT',   '}.!Gw`aE,FV0*2*Sfp$/sPLf[*4}ReB:F4y!.7+fG!@O26&SPgLq53Mm0lk$]RTm' );
define( 'NONCE_SALT',       'u?ddD3J|TVE3F]S3;Y4jn.d$7dj 3D!!@/4j(5D2glY+*mU1Cr>%u#n+@XrtY^.|' );

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
