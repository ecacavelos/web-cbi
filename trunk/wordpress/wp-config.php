<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'web_cbi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'p3jdL|iP2aF|N[X``hg V{Iq;~;YC3G*P|F;t2|UK|+]:9bA(wgO8;ZR,1 U+0m?'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '74OwjJIS:,PP7jVR>|a4kM(U4`q+ uI7jy#mx2;ks:;,@@mMWh|vn]Slx3&[u(ll'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'M3,Jj,k`|pXpF 5vWf=%A_Poe2-+Pj=s;1<OYXWT(+u*(ZbQSvR@G!$;[}z2|haS'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '%=REWX6x6Owl6+Q.#LY+NJTf!~w)V+~$kI$<6)C#ab9T.(biR:^4ymv*B,!l_X0b'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'kk5o=|+hpm@Ff++yImiW|<_-#Rk5c|{-3U%=2w,|!<.=Hs9_LC&.ZKG> ++oGhVj'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'M<lWv6;*qfP[tp$t--+S)})G1@luxU`^R9C+yj&|qX>mZPL5qcV{A|?tt OMi1!e'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '{k_:r5s#*+*n?;|-dw6^m6S(sJIVEac;GRHv8M,6y>.z4<I%z,+7QbE|ot(&GCOX'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '<lRb$l$xf6y}|OltI@J2ME$Ua?N4&7h~D|_TZ:E#(M-c3YQevyxSs8%yiI{b;o6p'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

