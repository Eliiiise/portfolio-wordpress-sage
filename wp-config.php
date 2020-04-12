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
define( 'DB_NAME', 'monportfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'q-mK+k<oZ?Z`f#>n$x3GxBAWK?:sQ l@fTIlhfP:.+E~E -g.R$ZVy[VBjEP!}5r' );
define( 'SECURE_AUTH_KEY',  'QGT5y1uW38+@E7Bt,DJ*@z0bQ&*>c`{3#d89&*w`+{8]g]Q{kx*|zz8kjTRIf<$T' );
define( 'LOGGED_IN_KEY',    '?3k94Hbzf(>bBJ@to=4FN%#&*yl7wUc/flSL:zY{+h}?<B`qB~l!Z4:q+(`dWxf_' );
define( 'NONCE_KEY',        'qVZg[yM5C1 $DMd2RLrRxrtlA*3-$gjXZ2e.So*^&jHc|++&&W5m|zS[<a2mVds7' );
define( 'AUTH_SALT',        '<GXo^,bAC,HCEb  :#YNIj@OKDJk{dhBQh]ll.Sm?sd{( %/M MKKe<riRbp 92N' );
define( 'SECURE_AUTH_SALT', 'rx]uXH]z.K*a5Cz|<q3x5g][/S`i=yOS4&cx 4FtEtHq]!AR<o5JGZ~BjTvN6j}5' );
define( 'LOGGED_IN_SALT',   '.qjH<Z[Z[_?Otu33.wOBcdh9(TaZN@6d>d0P~~*<|v #H78UB}]xzx{0un;{<>{5' );
define( 'NONCE_SALT',       'R6/HnN>zt$/*[1#Sl8W$Lnnw8l?{&f!5?8Oqb]X/[`sRs?W_%R6T0YlHs3[41g`u' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
