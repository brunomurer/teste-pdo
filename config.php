<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 12:20
 */


/** 
Nome do host do MySQL
O nome do banco de dados
*/
define('DB_INFO', 'mysql:dbname= ;host= ;charset=UTF8');

/** O nome do banco de dados*/
//define('DB_NAME', '');
/** Usuário do banco de dados MySQL */
define('DB_USER', '');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');
/** nome do host do MySQL */
//define('DB_HOST', '');
/** caminho absoluto para a pasta do sistema **/
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if (!defined('BASEURL'))
    define('BASEURL', '/teste-pdo/');

/** caminho do arquivo de banco de dados **/
if (!defined('DBAPI'))
    define('DBAPI', ABSPATH . 'database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'header.php');
define('SISTEMA_TEMPLATE', ABSPATH . 'sistema.php');
define('FOOTER_TEMPLATE', ABSPATH . 'footer.php');