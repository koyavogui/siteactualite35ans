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
define( 'DB_NAME', 'actualite' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'WihT&z8;y~6 *@I1F#aZ#RJ+{?6oDSkHT_P=HLfs$ZTj$!^bxy8m@X!O/SIHIk)Q' );
define( 'SECURE_AUTH_KEY',  'C!#=ugeEC~}^U~L*9$4ehF[5RCZ~@>`J!aJ?fxr];VW;~o9wp%DX<9^D<J@X&b|K' );
define( 'LOGGED_IN_KEY',    'IVJB(&E|x(/U;6:qn:j)nN}(TjYLsK<~|a5J2}a&fl7]d7yg|jcrmBwN[>X*+Q1H' );
define( 'NONCE_KEY',        'V)%Pxn2g{e}@:`Jb;`xeei9?KH>sXXw]/QjGXyA4gN8_Kp3Z?$mQkJff3ocRd@JV' );
define( 'AUTH_SALT',        'TDKcNyq/W6lVT=>J4fV( !nL cB3.E@z/Zn97]_.OJEz~5BEwBy9g8ZYBDAhz^k(' );
define( 'SECURE_AUTH_SALT', 'i5Q{),Hv.j%]X-0zzGl`?hjzAMlxP^|kskxJUIkam;!lot9)^dwSW]e4]<n69<$7' );
define( 'LOGGED_IN_SALT',   'OR[5UMeNLFL8/x6 ADNDQKu^XT].[b5c#QPp/8#>R=>O?8ug`+lw`.z^`OX+!_Z]' );
define( 'NONCE_SALT',       'L26/RlTAJwG?5@:3enRk/S.bEmQc%f`&F*&V!Ze1:bw{(pz{wD0;D1}t0{/.b$dA' );
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
