<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'newplanty');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '2cR)z+nN.;bu+&EdTJZI~t^I32~]Bbev;S<?JauNe1`Zh I#P]IGF=0xB[CrI5Q:');
define('SECURE_AUTH_KEY', 'WF~_/uh4 DSwG~``a5IyoXA7WTDvzUtWZr[ZW#gp,7/{Em3L~]UaZLxyq3V9Rmd[');
define('LOGGED_IN_KEY', 'UmZ7OR#((Gi/(>$MkX:UKl{[#PZUh=f0+y agV3E]%QW)EP=&UIpXZoU#H3o#*;g');
define('NONCE_KEY', 'W<UaJP{+VHtFH7n]c6j#k0ZG5C{bUIBV:JZ`h;?j5gxKUpa[HoMLx/=A%`xf88jy');
define('AUTH_SALT', 'hG.Oy7<chh4O4>SP28czws3ddQc~.iI+de%mn%6^8`b~6^Wd+Xmeleu=E%pp@X@u');
define('SECURE_AUTH_SALT', ',Pwf1dAR>JZ F#kK7:&8>6 -YCL-TalJ-Sekl[LKFuy_u7>`x1;!Yd-$!][=+,Wi');
define('LOGGED_IN_SALT', 'Wy}i2]1/%}H2<`,zuT3o=#S]pTW1e|@!@-2Su=Wum6;)84ywg8BcXPbEo&;-1W^}');
define('NONCE_SALT', 'I#(?MoptHSfKVBq.Yw-Jjaw9$7=wM^*JpduYL36tXly,]F/(mqnHg4(=YG.=;,}:');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */


// Active le mode WP_DEBUG
define('WP_DEBUG', true);

// Active l’enregistrement dans le fichier /wp-content/debug.log
define('WP_DEBUG_LOG', true);

// Désactive l’affichage des erreurs et des avertissements
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

// Utiliser les versions en développement des fichiers JS et CSS de base (seulement nécessaire si vous modifiez ces fichiers de base)
define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy publishing. */



/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');