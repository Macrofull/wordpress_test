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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Tm9Q7yo=^=P&,T)c}sKn KY<,9tU6>B_5m$A@}:dc&Jbuh%QDa%%S(ch}xQPy%6-' );
define( 'SECURE_AUTH_KEY',  '-z-b.Mer{9mR-/SM$r;_!.wJl}psXQr_z9+QMDQ_om<-E+;a`/f JewTL!z;) mz' );
define( 'LOGGED_IN_KEY',    ':>m_6d`J](m{(3QbCdQe2+m/Xp.$R,&1KC$!.!ZlIo]-S!kNFw>%x__4a` VP(%B' );
define( 'NONCE_KEY',        '7h823^$(N[FV%$1cpmeLk|#@QwcCzP|MhR.gW.rdp&#EZw5TA~M8*!Hq-D1q7b)r' );
define( 'AUTH_SALT',        'LV)zAe|ss6hMl$o9~P:1+~?]~[48/P}]dFm@|x)WS`F5;p_hMuyoiwpTAC39b;Sm' );
define( 'SECURE_AUTH_SALT', 'P8c5!((gBrg$_dk !y2KDq(LHQ$Zeq4kS?s_GY2>66op</kFKi:`x4r,l?#ghkdL' );
define( 'LOGGED_IN_SALT',   '<~vc;YVBI}X$>m:Is4qt?6^|LL7oe{D4B^d_k^AN^@9v|~P]Mi5K_xDX[DE(~GT]' );
define( 'NONCE_SALT',       '/|x|Y1bNc_qPT&xbs@nurgxrz/YOWlwy0BpfSK]#j<s?r${RCn$/b=^V@E6u~SJq' );
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
