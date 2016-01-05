<?php

	include_once "configs/config.php";
	include_once "url.php";
	include_once "classes/Calha.class.php";
	$class 			= new Calha();
	$paginaRetorno  = "calhas";
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->assign("pagina", $pagina);

	// $teste = $class->calhaaa();
	// // echo "<pre>";
	// // print_r($teste);
	// // die();
	// foreach ($teste[1] as $key) {
	// 	echo "Update calha Set urlAmigavel = 'calha-".$key['urlAmigavel']."' Where id = '".$key['id']."'; ";
	// 	echo "<br>";
	// }

	// Traz os modelos para o menu lateral
	$retornoMenuLateral = $class->PesquisarMenuLateral($_POST);
	if( $retornoMenuLateral[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLateral[1]);
		$smarty->assign("redir", $paginaRetorno);
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
	$_POST['p'] = (!$_POST['p'] ? 1 : $_POST['p']);

	//  Fim Paginação

	if($url[2]){
		// $url[1] == "modelo"
		$parametro 	= $url[2];
		$retornoPag = $class->PesquisarCalhasModelo($parametro, null, null);
		$retorno 	= $class->PesquisarCalhasModelo($parametro, $totalPorPagina, $_POST['p']);
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", $paginaRetorno);
			$smarty->display("mensagem.html");
			exit();
		}
		$LateralModeAtivo = $retorno[1][0]['idMarca'];

	}else{
		$parametro['idMarca'] 	= $url[1];
		$parametro['busca'] 	= $_POST['busca'];
// echo "<pre>";
// print_r($_POST);
// die();
		if($parametro['idMarca'] || $_POST['busca']){
			$retornoPag = $class->Pesquisar($parametro, null, null);	
			$retorno 	= $class->Pesquisar($parametro, $totalPorPagina, $_POST['p']);

			if ($retorno[1]) {
				foreach ($retorno[1] as $key) {
					echo '
						<ul class="carrega-busca-ajax">					    		
							<li class="selectProduto">'.$key["descricao"].'</li>
						</ul>
					';
				}	
			}
		}else{
			$PaginaSemFiltro = array();
			for ($i=0; $i < 60; $i++) { 
				$PaginaSemFiltro[$i] = $i;
			}
			$retornoPag[1] 	= $PaginaSemFiltro;
			$retorno 		= $class->Pesquisar($parametro, $totalPorPagina, $_POST['p']);	
		}
		
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", $paginaRetorno);
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

	// $smarty->assign("id", $url[1]);
	$smarty->assign("numPagina", $_POST['p']);
	$smarty->assign("url", $url);
	$smarty->assign("URL", URL);
	$smarty->assign("LateralModeAtivo", $LateralModeAtivo);
	$smarty->assign("breadCrumb", "Calhas");
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("postBusca", $_POST['busca']);
	$smarty->assign("idMod", $url[2]);
	$smarty->assign("idMarca", $url[1]);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("menuLateral", $retornoMenuLateral[1]);
	$smarty->assign("dados", $retorno[1]);
	if (!$_POST['buscaAjax']) {
		$smarty->display($paginaRetorno.'.html');
	}
	exit;
?>