<?php

include_once "adm_login.php";
include_once "classes/Modelo.class.php";
$class = new Modelo();

include_once "classes/Marca.class.php";
$classMarca = new Marca();

$pagina = "modelo";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);

if( $_POST['acao'] == "gravar" )
{
	if( $_POST['id'] )
	{
		$retorno = $class->Altera($_POST, $_FILES["arquivo"], NULL);
		$smarty->assign("mensagem", $retorno[1]);
	}
	else
	{
		$retorno = $class->Grava($_POST, $_FILES["arquivo"], NULL);
		$smarty->assign("mensagem", $retorno[1]);
	}
	
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_" . $pagina . ".php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$retorno = $class->Pesquisar($_POST);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->display('admin/' . $pagina . '/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->Pesquisar($parametro);

	//Resgata as marcas cadastradas
	$retornoMarca = $classMarca->Pesquisar(true);	
	if( $retornoMarca[0] )
	{
		$smarty->assign("mensagem", $retornoMarca[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dadosMarca", $retornoMarca[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	$smarty->display("admin/" . $pagina . "/dados.html");
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $class->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_" . $pagina . ".php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

//Resgata as marcas cadastradas
$retornoMarca = $classMarca->Pesquisar(true);	
if( $retornoMarca[0] )
{
	$smarty->assign("mensagem", $retornoMarca[1]);
	$smarty->assign("redir", "adm_" . $pagina . ".php");
	$smarty->display("mensagem.html");
	exit();
}

$smarty->assign("dadosMarca", $retornoMarca[1]);
$smarty->assign("botao", "Gravar");
$smarty->display("admin/" . $pagina . "/dados.html");

?>