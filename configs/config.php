<?php

// Data no passado
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// Sempre modificado
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");

session_start();

require $path.'libs/Smarty.class.php';

$smarty = new Smarty;
/*
$smarty->compile_check = false;
$smarty->caching = false;
$smarty->debugging = false;
*/

/* MyADMIN - http://phpmyadmin.locaweb.com.br/ */
if( $_SERVER['SERVER_NAME'] == 'localhost' )
{
	define("DB_HOST", 'localhost');
	define("DB_USER", 'root');
	define("DB_PASS", '');
	define("DB_BASE", 'ecoflex');
	define("PATH_SERVIDOR","C:/wamp/www/Clientes/EcoflexAutomotive/Web/");

}
else if( $_SERVER['SERVER_NAME'] == 'planobweb' || $_SERVER['SERVER_NAME'] == '192.168.0.105')
{
	define("DB_HOST", 'localhost');
	define("DB_USER", 'root');
	define("DB_PASS", '');
	define("DB_BASE", 'ecoflex');
	define("PATH_SERVIDOR","C:/wamp/www/Clientes/EcoflexAutomotive/Web/");
	define("PASTAPROJETO", "clientes/EcoflexAutomotive/Web/");
	if ($_SERVER['SERVER_NAME'] == '192.168.0.105') {
		define("URL","http://192.168.0.105/clientes/EcoflexAutomotive/Web/");
	}else{
		define("URL","http://planobweb/clientes/EcoflexAutomotive/Web/");
	}
}
else
{
	// define("DB_HOST", '179.188.16.81');
	// define("DB_USER", 'ecoflexautomot');
	// define("DB_PASS", 'ec0546ex');
	// define("DB_BASE", 'ecoflexautomot');
	// define("PATH_SERVIDOR","E:/Home/ecoflexautomotive/Web/");
	// define("PASTAPROJETO", "homologacao/");
	// define("URL","http://ecoflexautomotive.com.br/homologacao/");
	define("DB_HOST", '179.188.16.102');
	define("DB_USER", 'ecoflexautomot1');
	define("DB_PASS", 'ec0546ex');
	define("DB_BASE", 'ecoflexautomot1');
	define("PATH_SERVIDOR","E:/Home/ecoflexautomotive/Web/");
	define("PASTAPROJETO", "homologacao/");
	define("URL","http://ecoflexautomotive.com.br/homologacao/");
}

//Acesso ao MyAdmin
$resultado=mysql_connect(DB_HOST, DB_USER, DB_PASS);
if (!($resultado)) {
	echo "Erro ao conectar-se ao MySQL<br>";
}

//Acesso ao Banco de Dados
$resultado = mysql_select_db(DB_BASE);
if (!($resultado)) {
	echo "Erro ao conectar-se ao Banco de Dados";
}

define("TITULO","EcoFlex");
define("URL","http://www.papelchamex.com/");

?>