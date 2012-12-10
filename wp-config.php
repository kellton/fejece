<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fejece');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rP<^t-3NMIEcO2cZL0{SB&|!QlK1cl6,LkdMe$a>7y0g$2nE^UNx7vZW.?tOEOdJ');
define('SECURE_AUTH_KEY',  '7Ig}vTR;~x)lingQ4.TL@}~HTl]Sf<;%En<-J%Y55K59T`7N.uR=Gf iZ9CxE/*F');
define('LOGGED_IN_KEY',    '5*!{*v&PgSN_^:)E;$>*=a]>7k8)lX`Bfh=e~<FjTU*SgDc4%z3KH?vxYo2{7btj');
define('NONCE_KEY',        '#[E$%@`{XdB(Hn&V-kU!W0/0|~t4X5|E%,i!$4av]TaLlYj7Gi;63Ao>i~,`)!yc');
define('AUTH_SALT',        'O7|]GfM+C!mpFu]{Fp$K0y@=OS]#GOb>#Vz]QFM2#YdP3$-~K6)C2}dgZVFP<$_i');
define('SECURE_AUTH_SALT', 'L%pH>ZJqnO5oKr/ O&ovZ>Rd]k37g)%d|;WR0gZnHF{uVSB[<TyFy`Th<TGp{r$:');
define('LOGGED_IN_SALT',   'o 560mT[WuoMxk1h+]UCe?^a{:wrQ<w(A2SNn|(g^pf4(A~0s}D}+K#1-i.=>2y*');
define('NONCE_SALT',       '%?gzx@e*$9=T[D6y]h1zpOj%h,@$)tk!mmvzL;EmW#}EGG>S7STj*/l?v_C}bO08');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
