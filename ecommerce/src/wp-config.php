<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'laurenpapelaria' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', '0.0.0.0:3306' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p8.^(VOXjV-;>hDO4DxAmEL0/Expxj$ELnj^:,=.x)>>l7uH`A+Qz`le=<BUb.{e' );
define( 'SECURE_AUTH_KEY',  ']E[@O6q7Mn3FMVn$4_uFQFv8MkKnZCA]rNU9a;]mzSRM]Zdg@;M00bOr`HTo>(dn' );
define( 'LOGGED_IN_KEY',    '$5! mGxX[tl8ybi`FK*%quJmN;{Ea2VC+n?9PUQ$Y(8$ CBoRa7QcrQy(HVxW..{' );
define( 'NONCE_KEY',        'h0._g |2*r*zlOX=vD=t9<]/;bIIH+iOA.vwj$~Ctzy0;IdPlsez/Q$qx1bhW;G ' );
define( 'AUTH_SALT',        'Z,#(X^08}es_q&tlDsV3(.MiMn~6tuMF,D[NW`hUu[}Adr]b^8mEt8;<.+W9!TN-' );
define( 'SECURE_AUTH_SALT', 'eo^h$7>sRJ*rG>9VwAcy/+@v[Zv@z!3w)fp>i{b=8/3.W{qcO&*Y9[*o(#E@~kU ' );
define( 'LOGGED_IN_SALT',   'SE~QI(-mj_@kwyU[Yg(gw#k_]z;nhR}}gY`KGSfd,|qu >,^I@3{[q@yzH6{W/p#' );
define( 'NONCE_SALT',       'AEmu/dseK*>f2f}T(EHJVe2/(s$-|q1GKb8X9sbd8zPHt/&l1/&V4}Jp*fkCbf[L' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_POST_REVISIONS', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
