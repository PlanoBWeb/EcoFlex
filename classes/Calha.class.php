<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Calha
{
	function Calha()
    {
		$this->entidade = "calha";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	
	function Grava($post, $file, $file2)
	{
		$retorno = array();

		//Checa se existe imagem
		if ($file['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/calhas/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}

		//Checa se existe imagem
		if ($file2['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem2 = $this->classImagem->gravaImagem($file2, $post['extencoeValidas'], "upload/calhas/", $copy);
			if( $retornoClassImagem2[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem2[1];
				return $retorno;
			}
		}
		
		if($post['super']){
			$super = "1";
		}

		if($post['qualidade']){
			$qualidade = "1";
		}

		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				idMarca		= '".$post['idMarca']."',
				super		= '". $super ."',
				qualidade	= '". $qualidade ."',
				codigo		= '".utf8_decode(str_replace("'","''", $post['codigo']))."',
				porta		= '".utf8_decode(str_replace("'","''", $post['porta']))."',
				descricao	= '".utf8_decode(str_replace("'","''", $post['descricao']))."',
				caminhoImagem	= '".$retornoClassImagem[1]."',
				caminhoImagem2	= '".$retornoClassImagem2[1]."'
				
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = grava";
			return $retorno;
		}
		else
		{
			//Descobri ID gerado
			$idCalha = mysql_insert_id();

			if($idCalha > 0)
			{
				for($i=0; $i < count($post['idModelo']); $i++)
				{
					$parametroModelo['idCalha'] = $idCalha;
					$parametroModelo['idModelo'] = $post['idModelo'][$i];

					$retornoModelo = $this->Grava_calha_modelo($parametroModelo);
					if( $retornoModelo[0] )
					{
						$retorno[0] = "1";
						$retorno[1] = "Não foi possível vincular o modelo à calha!";
						return $retorno;
					}
				}
			}

			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			$retorno[2] = $idCalha;
			return $retorno;
		}
	}

	function Grava_calha_modelo($post)
	{
		$retorno = array();
		
		$sql = "
			INSERT INTO
				calha_modelo
			SET
				idCalha		= '".$post['idCalha']."',
				idModelo	= '".$post['idModelo']."'
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Grava_calha_modelo";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Altera($post, $file, $file2)
	{
		$retorno = array();

		//Checa se será autializado a imagem
		if ($file['name'] != "")
		{
			if( $post["caminhoImagem"] != "" )
			{
				//Checa se existe a imagem
				if( file_exists($post["caminhoImagem"]) )
				{
					//Exclui a antiga
					if(!unlink( $this->pathProjeto.$post["caminhoImagem"] ))
					{
						$retorno[0] = "1";
						$retorno[1] = "Não foi possíel excluir a imagem antiga!";
						return $retorno;
					}
				}
			}
			
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/calhas/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}
		else
		{
			//Mantém a imagem antiga
			$retornoClassImagem[1] = $post["caminhoImagem"];
		}


		//Checa se será autializado a imagem
		if ($file2['name'] != "")
		{
			if( $post["caminhoImagem2"] != "" )
			{
				//Checa se existe a imagem
				if( file_exists($post["caminhoImagem2"]) )
				{
					//Exclui a antiga
					if(!unlink( $this->pathProjeto.$post["caminhoImagem2"] ))
					{
						$retorno[0] = "1";
						$retorno[1] = "Não foi possíel excluir a imagem antiga 2!";
						return $retorno;
					}
				}
			}
			
			//Grava a Imagem
			$retornoClassImagem2 = $this->classImagem->gravaImagem($file2, $post['extencoeValidas'], "upload/calhas/", $copy);
			if( $retornoClassImagem2[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem2[1];
				return $retorno;
			}
		}
		else
		{
			//Mantém a imagem antiga
			$retornoClassImagem2[1] = $post["caminhoImagem2"];
		}

		if($post['super']){
			$super = "1";
		}

		if($post['qualidade']){
			$qualidade = "1";
		}

		$sql = "
			UPDATE	
				".$this->entidade."
			SET
				idMarca			= '".$post['idMarca']."',
				super			= '".$super."',
				qualidade		= '".$qualidade."',
				codigo			= '".utf8_decode(str_replace("'","''", $post['codigo']))."',
				porta			= '".utf8_decode(str_replace("'","''", $post['porta']))."',
				descricao		= '".utf8_decode(str_replace("'","''", $post['descricao']))."',
				caminhoImagem	= '".$retornoClassImagem[1]."',
				caminhoImagem2	= '".$retornoClassImagem2[1]."'
			WHERE
				id 				= '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Alterar";
			return $retorno;
		}

		//Exclui o vínculo com o modelo
		$retornoExclusao = $this->Exclui_calha_modelo($post['id']);
		if( $retornoExclusao[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível excluir o vínculo com o modelo!";
			return $retorno;
		}

		//Inclui novamente o vínculo com o modelo
		$idCalha = $post['id'];
		if($idCalha > 0)
		{
			for($i=0; $i < count($post['idModelo']); $i++)
			{
				$parametroModelo['idCalha'] = $idCalha;
				$parametroModelo['idModelo'] = $post['idModelo'][$i];

				$retornoModelo = $this->Grava_calha_modelo($parametroModelo);
				if( $retornoModelo[0] )
				{
					$retorno[0] = "1";
					$retorno[1] = "Não foi possível vincular o modelo à calha!";
					return $retorno;
				}
			}
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Alteração feita com sucesso!";
		return $retorno;
	}
	
	function Pesquisar($post, $totalPorPagina, $pagina)
	{
		$query = "";

		$sqlLimit = "";
		if ($totalPorPagina) {

			$numero = $pagina-1;
			$_limit = $numero*$totalPorPagina;

			$sqlLimit = "LIMIT ".$_limit.",".$totalPorPagina."";
		}

		if ($post['destaque']) {
			$sqlLimit = "LIMIT 10";
		}
		
		if($post['id'])
		{
			$query .= " AND C.id = '".$post['id']."' ";
		}

		if($post['busca'])
		{
			$query .= " AND C.descricao LIKE '%".$post['busca']."%' ";
		}

		if($post['idMarca'])
		{
			$query .= " AND C.idMarca = '".$post['idMarca']."' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					C.*,
					M.titulo AS nmMarca
				FROM  
					" . $this->entidade . " C
				INNER JOIN marca M
					ON M.id = C.idMarca
				WHERE
					1 = 1 ".$query."
				ORDER BY
					C.id DESC, C.id DESC
			".$sqlLimit." ";
			
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['codigo'] 		= utf8_encode($rows['codigo']);
			$dados[$i]['descricao'] 	= utf8_encode($rows['descricao']);
			$dados[$i]['descricaoBR'] 	= utf8_encode(nl2br($rows['descricao']));

			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function Pesquisar_calha_modelo($post)
	{
		$query = "";

		if($post['idCalha'])
		{
			$query .= " AND CM.idCalha = '".$post['idCalha']."' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					M.*
				FROM  
					calha_modelo CM
				INNER JOIN modelo M
					ON M.id = CM.idModelo
				WHERE
					1 = 1 ".$query."
				ORDER BY
					M.titulo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);

			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	
	function Exclui($id)
	{
		$retorno = array();

		// Localiza imagem para exclusão do registro
		$parametro['id'] = $id;
		$dados = $this->Pesquisar($parametro, null, null);
		if( $dados[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível localizar a imagem para excluir!";
			return $retorno;
		}
		$imgExclusao = $dados[1][0]["caminhoImagem"];

		// Localiza imagem para exclusão do registro
		$parametro2['id'] = $id;
		$dados2 = $this->Pesquisar($parametro2, null, null);
		if( $dados2[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível localizar a imagem para excluir 2!";
			return $retorno;
		}
		$imgExclusao2 = $dados[1][0]["caminhoImagem2"];
		
		$sql = "
			DELETE FROM	
				".$this->entidade." 
			WHERE
				id = '".$id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Exclui";
			return $retorno;
		}

		//Exclui imagem da pasta
		if($imgExclusao != "")
		{ 
			if(!unlink( $this->pathProjeto.$imgExclusao ))
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possíel excluir a imagem do registro!";
				return $retorno;
			}
		}

		//Exclui imagem da pasta
		if($imgExclusao2 != "")
		{ 
			if(!unlink( $this->pathProjeto.$imgExclusao2 ))
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possíel excluir a imagem do registro 2!";
				return $retorno;
			}
		}

		//Exclui o vínculo com o modelo
		$retornoExclusao = $this->Exclui_calha_modelo($id);
		if( $retornoExclusao[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível excluir o vínculo com o modelo!";
			return $retorno;
		}

		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}

	function Exclui_calha_modelo($id)
	{
		$retorno = array();
		
		$sql = "
			DELETE FROM	
				calha_modelo
			WHERE
				idCalha = '".$id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Exclui_calha_modelo";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}

	function PesquisarMenuLateral($post)
	{
		$query = "";
		
		$retorno = array();
	
		$sql = "SELECT 
					Ca.id AS idCalha,
					CM.idModelo AS idModelo,
					Mo.titulo AS modelo,
					Ma.id AS idMarca,
					Ma.caminhoImagem,
					Ma.titulo AS marca
				FROM
					calha Ca
				INNER JOIN
					calha_modelo CM ON CM.idCalha = Ca.id
				INNER JOIN
					marca Ma ON Ma.id = Ca.idMarca
				INNER JOIN
					modelo Mo ON Mo.id = CM.idModelo
				GROUP BY
					Mo.titulo
				ORDER BY	
					Ma.titulo, Mo.titulo ASC
		";
		
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);
			$dados[$i]['modelo'] 		= utf8_encode($rows['modelo']);
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarSite($post, $totalPorPagina, $pagina)
	{
		$query = "";

		$sqlLimit = "";
		if ($totalPorPagina) {

			$numero = $pagina-1;
			$_limit = $numero*$totalPorPagina;

			$sqlLimit = "LIMIT ".$_limit.",".$totalPorPagina."";
		}
		
		$retorno = array();
	
		$sql = "SELECT 
					Ca.id AS idCalha,
					CM.idModelo AS idModelo,
					Mo.titulo AS modelo,
					Ma.id AS idMarca,
					Ma.titulo AS marca
				FROM
					calha Ca
				INNER JOIN
					calha_modelo CM ON CM.idCalha = Ca.id
				INNER JOIN
					marca Ma ON Ma.id = Ca.idMarca
				INNER JOIN
					modelo Mo ON Mo.id = CM.idModelo
				ORDER BY	
					Ca.idMarca
				GROUP BY
					Mo.titulo ASC
		";
		
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);

			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarCalhasModelo($post, $totalPorPagina, $pagina)
	{

		$query = "";

		$sqlLimit = "";
		if ($totalPorPagina) {

			$numero = $pagina-1;
			$_limit = $numero*$totalPorPagina;

			$sqlLimit = "LIMIT ".$_limit.",".$totalPorPagina."";
		}

		if($post){
			$query .= " AND CM.idModelo = '".$post."' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT 
					CM.idModelo AS idCalhaMod,
					CM.idModelo AS idModelo,
					CA.id AS idCalha,
					CA.descricao
				FROM
					calha_modelo CM
				INNER JOIN
					calha CA ON CM.idCalha = CA.id
				WHERE
					1 = 1 ".$query."
				ORDER BY	
					CA.id
		";
		
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);
			$dados[$i]['descricao'] 	= utf8_encode($rows['descricao']);
			$dados[$i]['id'] 			= utf8_encode($rows['idCalha']);

			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarCalha($post)
	{
		$query = "";

		if($post['id'])
		{
			$query .= " AND C.id = '".$post['id']."' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					C.*,
					M.titulo AS nmModelo,
					CM.idCalha,
					MA.titulo AS tituloMarca
				FROM  
					" . $this->entidade . " C
				INNER JOIN calha_modelo CM
					ON CM.idCalha = C.id
				INNER JOIN modelo M
					ON M.id = CM.idModelo
				INNER JOIN marca MA
					ON MA.id = M.idMarca
				WHERE
					1 = 1 ".$query."
				ORDER BY
					C.id DESC, C.id DESC
			";
			
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['descricao'] 	= utf8_encode($rows['descricao']);
			$dados[$i]['tituloMarca'] 	= utf8_encode($rows['tituloMarca']);
			$dados[$i]['nmModelo'] 		= utf8_encode($rows['nmModelo']);

			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

}

