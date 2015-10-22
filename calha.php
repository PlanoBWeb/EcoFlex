<?php

	include_once "configs/config.php";
	include_once "url.php";
	include_once "classes/Calha.class.php";
	$class = new Calha();
	$paginaRetorno = "calha";
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->assign("pagina", $pagina);

	// Traz os modelos para o menu lateral
	$retornoMenuLateral = $class->PesquisarMenuLateral($_POST);
	if( $retornoMenuLateral[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLateral[1]);
		$smarty->assign("redir", $paginaRetorno.".php");
		$smarty->display("mensagem.html");
		exit();
	}

	// Pesquisa a calha
	$parametro['id'] = $_GET['id'];
	$retorno = $class->PesquisarCalha($parametro, null, null);	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", $paginaRetorno.".php");
		$smarty->display("mensagem.html");
		exit();
	}

	// Produto em destaque
	$destaque['destaque'] = 1;
	$retornoDes 		= $class->Pesquisar($destaque, null, null);

	// Rand do array para a parte de destaques
	$RetornoDestaque = array_rand($retornoDes[1], 9);
	for ($i=0; $i < 3; $i++) { 
		$RetornoDestaque[$i] = $retornoDes[1][$RetornoDestaque[$i]];
	}

	
	$smarty->assign("RetornoDestaque", $RetornoDestaque);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("menuLateral", $retornoMenuLateral[1]);
	$smarty->display("calha.html");

?>