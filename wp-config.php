<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'RC*29#B@hrx^!5RE');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '4NRmXxwYGVUikWgL');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SYltlsE`th[v)<7On_yT>(CuB? efPi2P(FkN39>vqdJ9|Kp[Q./d~v{PXhV1~1[');
define('SECURE_AUTH_KEY',  'H:3s+(7<)J|^kf^((,[bW=mh/y*7ZK?LRA4:/Miw|eKEDASriv.4owtjbpc:qtsk');
define('LOGGED_IN_KEY',    'Y&5.FHRJ08T-:S5>QQ[nfLObqWOp?tVua8;!)k:aHBN(*3Nk3`Ny7;l+8v4Tzo7S');
define('NONCE_KEY',        'WWKcF)N@W|2AJ,|_Mu_UQMqIQ4,H=+zaH_rn_:v^dO/I`!2vKX)%vEd3.L%k{|d$');
define('AUTH_SALT',        '9zGnMn`3:N{FJk2AWULY1l/su~Y@1Jbf [hhNedKz&.u9ZMGESy#M!4`RgPt#L<y');
define('SECURE_AUTH_SALT', 'b~f[wUuop4:r+n Q0Ly~8i@J.Nf->gqk-xb?uZnAn 5bz/(P1jB;H6Lwwcne`$5]');
define('LOGGED_IN_SALT',   '4r3wL[RL.(s46O&0Ct^DoED^3@bF_]En@gST^QU-tg9%a7RT#9F6}8m-Xlq^h+,E');
define('NONCE_SALT',       'Xh72mTU0[clm[ROA+CU/?4ahvX5D`oDbx?}W:vfakm$UN^~!6A@L#B~Cau[+lOV~');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
