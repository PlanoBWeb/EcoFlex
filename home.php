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

	// Produto em destaque
	$destaque['destaque'] = 1;
	$retornoDes 		= $class->Pesquisar($destaque, null, null);

	// Rand do array para a parte de destaques
	$RetornoDestaque = array_rand($retornoDes[1], 9);
	for ($i=0; $i < 4; $i++) { 
		$RetornoDestaque[$i] = $retornoDes[1][$RetornoDestaque[$i]];
	}
	
	$smarty->assign("RetornoDestaque", $RetornoDestaque);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->assign("menuLateral", $retornoMenuLateral[1]);
	$smarty->display("index.html");

?>