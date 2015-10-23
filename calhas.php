<?php

	include_once "configs/config.php";
	include_once "url.php";
	include_once "classes/Calha.class.php";
	$class 			= new Calha();
	$paginaRetorno  = "calhas";
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
	// Traz os modelos para o menu lateral

	// Busca
	// if($_POST['busca']){
	// 	$parametro['busca'] = $_POST['busca'];
	// 	$smarty->assign("postBusca", $parametro['busca']);
	// }
	// Busca

	$totalPorPagina = 6;
	$_GET['p'] = (!$_GET['p'] ? 1 : $_GET['p']);
	//  Fim Paginação

	if($parametro = $_GET['idMod']){
		$retornoPag = $class->PesquisarCalhasModelo($parametro, null, null);
		$retorno 	= $class->PesquisarCalhasModelo($parametro, $totalPorPagina, $_GET['p']);
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", $paginaRetorno.".php");
			$smarty->display("mensagem.html");
			exit();
		}
	}else{
		$parametro['idMarca'] 	= $_GET['idMarca'];
		$parametro['busca'] 	= $_GET['busca'];

		if($parametro['idMarca'] || $_GET['busca']){
			$retornoPag = $class->Pesquisar($parametro, null, null);	
			$retorno 	= $class->Pesquisar($parametro, $totalPorPagina, $_GET['p']);
		}else{
			$PaginaSemFiltro = array();
			for ($i=0; $i < 60; $i++) { 
				$PaginaSemFiltro[$i] = $i;
			}
			$retornoPag[1] 	= $PaginaSemFiltro;
			$retorno 		= $class->Pesquisar($parametro, $totalPorPagina, $_GET['p']);	
		}
		
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", $paginaRetorno.".php");
			$smarty->display("mensagem.html");
			exit();
		}
	}

	$totalDeRegistros = count($retornoPag[1]); 	
	$conta = $totalDeRegistros / $totalPorPagina;
	$totalPaginas = ceil($conta);

	$Numpaginas = array();
	for($j=0; $j <= $totalPaginas; $j++) { 
		$Numpaginas[$j] = $j;
		if ($Numpaginas[$j] == "10") {
			break;
		}
	}
	$ultimaPaginacao = end($Numpaginas);

	$smarty->assign("breadCrumb", "Calhas");
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("postBusca", $_GET['busca']);
	$smarty->assign("idMod", $_GET['idMod']);
	$smarty->assign("idMarca", $_GET['idMarca']);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("menuLateral", $retornoMenuLateral[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->display($paginaRetorno.'.html');
	exit;
?>