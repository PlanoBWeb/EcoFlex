<?php

include_once "configs/config.php";
include_once "classes/Usuario.class.php";

$smarty->assign("titulo", utf8_encode(TITULO));

if ($_POST["acao"] == "logar")
{
	$classUsuario = new Usuario();
	
	$arCheca = $classUsuario->checa($_POST['login'], $_POST['senha']);
	if( $arCheca[0] )
	{
		$smarty->assign("mensagem", $arCheca[1]);
		$smarty->assign("volta", true);
		$smarty->display("mensagem.html");
		exit();
	}
	
	session_start();
	$_SESSION['id'] 	= $arCheca[1]['id'];
	$_SESSION['login'] 	= $arCheca[1]['email'];
	$_SESSION['senha'] 	= $arCheca[1]['senha'];
	$_SESSION['nome'] 	= utf8_encode($arCheca[1]['nome']);
	$_SESSION['perfil'] = $arCheca[1]['perfil'];
	
	echo "<script>location.href='adm_index.php';</script>";
}

session_start();
if($_SESSION['login'] == "" OR $_SESSION['senha'] == "" OR $_SESSION['id'] == "")
{
	$smarty->display('admin/login.html');
	die();
}

if ($_GET["acao"] == "logout")
{
	session_destroy();
    header("Location: adm_index.php");
}


?>