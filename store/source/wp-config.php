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
define( 'AUTH_KEY',         '%xvfOH<4XYV$g4}l$gzW66|5lwUY/#T<I#W/anOtg3_uk<>>?Oe~YZS~}U+)!U4 ' );
define( 'SECURE_AUTH_KEY',  'RgV{7eS.ts0<v_7D)}>BKrs4l?ujP(|>qJ!?u)<%Wa}8lsiX`6jJ57{}z1|)Oyw4' );
define( 'LOGGED_IN_KEY',    '7t=vC@/vJa?w_Twnj T/[!im.xJyuuTi+!H62`[Ox+J0$eP;u{Ct]XGtdMhN5Bh@' );
define( 'NONCE_KEY',        '%rrnuRya^wHK-8Qk6[}c-XnO,6ndUpNjI,D(oqs7LmP*VnxPjoi^]<@mdP:$8j?T' );
define( 'AUTH_SALT',        '1?G-k,D+tj6K~i$a<kFKBIFK:~MnF^8WWxjOd#Gdh;(Dl`!=lnBT&^*|6,bVq =X' );
define( 'SECURE_AUTH_SALT', 'h=Mx-Ti9D(4:%kVMMpo:{p9/}r3`bE~J>_SGT76FoMaA+EaS<v{Z0`~A!X&.kGO]' );
define( 'LOGGED_IN_SALT',   'DBH|n>]Vm=@x|#|@Y>V1i+5~/0PnrT-Y3./)k :h85: :W~v}]T< B}C)_X_hOms' );
define( 'NONCE_SALT',       '@>baKJC{@UuFL#FqgUwp0=/.+?wvS~LlJS>HZ.g/+XC$a`Fx*QC7?bW3A&kz/r]<' );

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
