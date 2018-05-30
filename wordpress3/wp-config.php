<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress3');
define('FS_METHOD', 'direct');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'passer');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hWZ0|r]~FKa_d,iy]ot_@8Z^/(~6t|g=8?}_ZaO.]Xix6u@jn)tXr54IQS7aOO]0');
define('SECURE_AUTH_KEY',  'O;qZ{-$NDjf9oI`pt9*%s&)^_*j-|_J}Fu6T|#qww1HZ357UJMq4vpqMh%$O%yyW');
define('LOGGED_IN_KEY',    '0IS.sL~$ syM=rAz ,YSn_gY>3@=NETJ l}LC=;)k[Qd~n=(Q|HH/|}uD#t0fpJz');
define('NONCE_KEY',        'n0<u]m4@Xr$l0dLW<r&sH&WydL6dA{U=7;n%Hls2QjsLEPyV7vq8vt:_-eMKr*B%');
define('AUTH_SALT',        '?nuA$pIs9eYi|>TuaSPv*V^9ljUl2H@MIPTS(CB9L.[A3?hm;^WYn47b+F|sJ%aj');
define('SECURE_AUTH_SALT', '-?SbEK15F9&&[ZPi2<}NbFOfd@$qCVv&A{1B@G7S<_)dQRLx6]D<g-1+8]i;*v<A');
define('LOGGED_IN_SALT',   ';F)Z}|IF~8<5fsX+}v%kXgMoGFFJ*[)dHCG}_cPvATS?uEZiQLcRWOsU@KI7M)gz');
define('NONCE_SALT',       '#[1h{~t6;H`bK b10wScmdpK fku:H/0k(:Al/v9$IqruTP$b8q~inQP_le~+.;m');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');