<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Wx`pTZ4^8VK-[7_G, -eQx<Om[GpLFSe~[YC2@l8Q`[59g-y0UpdkW%-UE5pr`J:' );
define( 'SECURE_AUTH_KEY',  'NZ}tlmRh)6+zOSHk=|k|sf+udWLl9n`<?.6|^}%c ha}x8;xo:_)rzQ2S{%]mh3R' );
define( 'LOGGED_IN_KEY',    '$:tJL][S#r*aQTJN(0Tgd+q95F$3q!_m4}:NoHr3<cO}^4O)cqB{#n<]/8[|CK7c' );
define( 'NONCE_KEY',        'aSYTtSrI3R3BKogqS8&f$d5/Y9UK!Z@}vooytU:;7/L=|K[>EO]}IPoJD[eO#D)t' );
define( 'AUTH_SALT',        'h}^A63;_zu<V:$OA:>l@H~<n_gk]B@(HP$*|.1>_Gcy..LlkH_o7mZ Le[O9jQ=v' );
define( 'SECURE_AUTH_SALT', '#lZxBZ{OnIYdcHk4oS&a,(@gCL&5J+AE`UQq@{cc.0GRp(^7*[Ro5Qp+22M,fHQr' );
define( 'LOGGED_IN_SALT',   '.M}MB5{)|1~-3,>[2{nbyX][)@mA:O) ESXHyVg;J_8<,d~j;Z7MFD4S5p:yDI<%' );
define( 'NONCE_SALT',       '~rK]R {0JMrQGQEn&`ESI^oXro.*q7KU/bU05/zX~U,oI;X(Tf}oJ%e0`7y/~5n;' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
