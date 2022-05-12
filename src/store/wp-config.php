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
define( 'AUTH_KEY',         '#UdNic =mVhT7^#Y/oV)/q<cg(Khq/g{0Pw&3~.DT<E&W`#JMr0PR#_EW}V0?,]5' );
define( 'SECURE_AUTH_KEY',  '9$XAA;MELNhI{{NPNa?yu]c9v]89,X3I{B,59U~=Gm&w^bFl6n?@.h7f-FVq/ciz' );
define( 'LOGGED_IN_KEY',    '[IRflEk-L7m;?;$g0# xwN[fn^O&KF,`fz!M8E/$6(i53cP}>vG=&8 7B1J%aNsE' );
define( 'NONCE_KEY',        '4hWTY6p)6c7w9(BV)_A|Yip&[2RP>:m;@]V*<BcYTr6I|)&]&),Q5^B3dk{^0hfc' );
define( 'AUTH_SALT',        'x[[JrZzD{D.MFP^G?r9 1r4@RgPzd57D3}@I1x&O+O(0%[o}%>Hk,QQa;3w)6=4L' );
define( 'SECURE_AUTH_SALT', ']0lD]?YUh3 Hau#{ww/NDiQCI29 @CQ;Y&*@os}w+Kjz*YQWfBL(d]&1Gr I;2Tb' );
define( 'LOGGED_IN_SALT',   'Y?95V]1@!-Q*O$TuauJil:9|;3PT.;8k^kJSnNO@[N#E9NMqz.GV]mVF UELrw:|' );
define( 'NONCE_SALT',       ': tr:d!!9ZJ3JvUN!fLx4/@4u07k5o9fbDF&K?R7V!C%n$C/-e|,N64TF2cqY1Z_' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
