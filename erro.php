<?php

	include_once "configs/config.php";
	include_once "url.php";
	include_once "classes/Calha.class.php";
	$class 			= new Calha();

	// Traz os modelos para o menu lateral
	$retornoMenuLateral = $class->PesquisarMenuLateral($_POST);
	if( $retornoMenuLateral[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLateral[1]);
		$smarty->assign("redir", $paginaRetorno.".php");
		$smarty->display("mensagem.html");
		exit();
	}
	// Traz os modelos para o menu lateral

	$smarty->assign("breadCrumb", "Página não encontrada");
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->assign("menuLateral", $retornoMenuLateral[1]);
	$smarty->display("erro.html");

?>