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
define( 'DB_NAME', 'Soissons-Games-Show' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'wBWjVz-oh+0~F)<D{llSFdDyND|Mr`ylf>t|gh)T^c.:/z1#,N->4SiDu/$CrDmA' );
define( 'SECURE_AUTH_KEY',  'Yhz}1 kw}q!hVcWK#{kx-wPonf{aS=x`4uhIBPL*]@nF/?)[.z.|O&IJLj6_jHT9' );
define( 'LOGGED_IN_KEY',    '}2~ujO{isgq@7U(K6J;?_SzGlQwvKF/y[D^p*ItkR,1BGiXW@8t]/h9SP}=@L@7!' );
define( 'NONCE_KEY',        'nNY`f<$D6=?RL6+/# oq?+ &[@dWrgu[eX>J+DDI,QUHPACF$kIS[~Snf|UK3wuS' );
define( 'AUTH_SALT',        '0JLrG.-J#2Lgk~J[cZtbGlZ1/3R&SGFir5rO_KU@]Gz,tN3?mw3U9n{t(Q.Sg}I9' );
define( 'SECURE_AUTH_SALT', 'zd4?Qih]mb:>K<r3!`XI5AT`C}Zy*cI3#PiQ#M/_:LMz/5{>FjhCa;E&^?mLhzGQ' );
define( 'LOGGED_IN_SALT',   'poUq0ol-!c8$,3 5a~|9e:-J0/QCK<i<J0d|-4oYl!i5P3r0A>LfiMbOsl1F)YWH' );
define( 'NONCE_SALT',       'Axe^Qk11sKD_NMcq?~MS:Ygdi,MOOC)nExTd*U)b|^[d4>%._V-i~t4Q>4,bMDC,' );
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
