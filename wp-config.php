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
define('DB_NAME', 'emd2');

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
define('AUTH_KEY',         'WHu`V[`VRHji?ib*3s(Br|?4w9=y<nu@`c~vq!+qXh$=QaW.~a?(iqoyQxp TVcb');
define('SECURE_AUTH_KEY',  'Trw3vk&xB[qwvN.QOlL8,Y%]Y.!D/&jU%I@pu=6x9y`W!=~]vC6a(:^K WlF)eBN');
define('LOGGED_IN_KEY',    'W|h<bva<l [>!wwc72h*, Iz:5u^NW3p*(7tPmAtH_4GX?C-6b,TV]s=<vCq?#j4');
define('NONCE_KEY',        'UD4aX9}$KH=G[+r?H5+|~H&ax1:`^u3rQ+:6gCeUcPrc.X!g$rSL]`og0h&`)nLA');
define('AUTH_SALT',        'lRkTnvAnDp;DY{[Z(2A`_@,cz3G OmgJjKoIVF{& ~nhG%]zi}+S@e8aPTNuLfYe');
define('SECURE_AUTH_SALT', 'H @=+$Us{(0k(pQ,bAfr:iPo( Dd!|]kZue[{ |+SbPX8B kt2m_.=i#Di~UhFId');
define('LOGGED_IN_SALT',   'mfq7)4zcw2[ISY*:MVYZiHY>tnOmN9(]E0A3s9NAaI&lAP67@ ^[[.tBxp/4A2UC');
define('NONCE_SALT',       'VpQhZlm3}sF#6?l[QtqXhx>U,xm0k,|_TeLW?Kr{@y@iYPiv>*V&_Pm[dn=5g+5W');
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