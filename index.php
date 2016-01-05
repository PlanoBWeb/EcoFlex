<?php
	include_once "configs/config.php";

	$url = $_SERVER['REQUEST_URI'];
	$url = substr($url, 1);
	$url = str_replace(PASTAPROJETO, "", $url);
	$url = explode('/', $url);

	$permissao  = array('home', 'localizacao', 'calhas', 'calha', 'envia', 'quem-somos', 'index', 'erro', 'resultado-busca', 'fale-conosco', 'obrigado-localizacao', 'obrigado-fale-conosco', 'obrigado-produto');

	$url['pagina'] = $url[0];

	if ($url['pagina'] == "" || $url['pagina'] == "index") {
		include "home.php";
	}else{
		if (in_array($url['pagina'], $permissao)) {
			include $url['pagina'].".php";
		}elseif ($url['pagina'] == "admin") {
			include "admin/index.php";
		}else{
			include "erro.php";
		}
	}
?>