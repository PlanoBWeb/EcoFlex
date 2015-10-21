<?php

include_once "adm_login.php";
include_once "classes/Usuario.class.php";
$classUsuario = new Usuario();

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);

/*
 * Valida permissão
 */
session_start();
if($_SESSION['perfil'] != "M")
{
	$smarty->assign("mensagem", utf8_encode("Você não tem permissão para acessar essa área!"));
	$smarty->assign("redir", "adm_index.php");
	$smarty->display("mensagem.html");
	exit();
}
/*
 * FIM - Valida permissão
 */

if( $_POST['acao'] == "gravar" )
{
	if( $_POST['id'] )
		$retorno = $classUsuario->Altera($_POST);
	else
		$retorno = $classUsuario->Grava($_POST);
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_usuario.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$retorno = $classUsuario->Pesquisar($_POST);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_usuario.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->display('admin/usuario/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $classUsuario->Pesquisar($parametro);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_usuario.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	$smarty->display('admin/usuario/dados.html');
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $classUsuario->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_usuario.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

$smarty->assign("botao", "Gravar");
$smarty->display('admin/usuario/dados.html');

?>