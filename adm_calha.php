<?php

include_once "adm_login.php";
include_once "classes/Calha.class.php";
$class = new Calha();

include_once "classes/Marca.class.php";
$classMarca = new Marca();

include_once "classes/Modelo.class.php";
$classModelo = new Modelo();

$pagina = "calha";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);

if( $_POST['acao'] == "gravar" )
{
	$idCalha = 0;
	if( $_POST['id'] )
	{
		$idCalha = $_POST['id'];

		$retorno = $class->Altera($_POST, $_FILES["arquivo"], $_FILES["arquivo2"]);
		$smarty->assign("mensagem", $retorno[1]);
	}
	else
	{
		$retorno = $class->Grava($_POST, $_FILES["arquivo"], $_FILES["arquivo2"]);
		$smarty->assign("mensagem", $retorno[1]);

		$idCalha = $retorno[2];
	}
	
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_" . $pagina . ".php?acao=visualizar&id=".$idCalha);
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$retorno = $class->Pesquisar($_POST, null, null);
	
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
elseif( $_GET['acao'] == "visualizar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->Pesquisar($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$parametroModelo['idCalha'] = $_GET['id'];
	$retornoModelo = $class->Pesquisar_calha_modelo($parametroModelo);
	if( $retornoModelo[0] )
	{
		$smarty->assign("mensagem", $retornoModelo[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosModelo", $retornoModelo[1]);
	$smarty->display("admin/" . $pagina . "/visualizar.html");
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->Pesquisar($parametro, null, null);

	//Resgata as marcas cadastradas
	$parametroModelo['idMarca'] = $retorno[1][0]['idMarca'];
	$retornoModelo = $classModelo->Pesquisar($parametroModelo);
	if( $retornoModelo[0] )
	{
		$smarty->assign("mensagem", $retornoModelo[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosModelo", $retornoModelo[1]);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("idMarca", $retornoModelo[1][0]['idMarca']);
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
elseif( $_POST['idMarca'] > 0 && $_POST['acao'] == "cadastrar" )
{
	//Resgata as marcas cadastradas
	$parametro['idMarca'] = $_POST['idMarca'];
	$retornoModelo = $classModelo->Pesquisar($parametro);
	if( $retornoModelo[0] )
	{
		$smarty->assign("mensagem", $retornoModelo[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosModelo", $retornoModelo[1]);
	$smarty->assign("idMarca", $parametro['idMarca']);
	$smarty->assign("botao", "Gravar");
	$smarty->display("admin/" . $pagina . "/dados.html");
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
$smarty->display("admin/" . $pagina . "/selectMarca.html");
exit();

?>