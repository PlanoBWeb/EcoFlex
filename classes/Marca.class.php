<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Marca
{
	function Marca()
    {
		$this->entidade = "marca";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	
	function Grava($post, $file, $copy = NULL)
	{
		$retorno = array();

		//Checa se existe imagem
		if ($file['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/marcas/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}
		
		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				titulo 			= '".utf8_decode(str_replace("'","''", $post['titulo']))."',
				caminhoImagem	= '".$retornoClassImagem[1]."'
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
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Altera($post, $file, $copy = NULL)
	{
		$retorno = array();

		//Checa se serс autializado a imagem
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
						$retorno[1] = "Nуo foi possэel excluir a imagem antiga!";
						return $retorno;
					}
				}
			}
			
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/marcas/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}
		else
		{
			//Mantщm a imagem antiga
			$retornoClassImagem[1] = $post["caminhoImagem"];
		}
	
		$sql = "
			UPDATE	
				".$this->entidade."
			SET
				titulo 			= '".utf8_decode(str_replace("'","''", $post['titulo']))."',
				caminhoImagem	= '".$retornoClassImagem[1]."'
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
		
		$retorno[0] = 0;
		$retorno[1] = "Alteraчуo feita com sucesso!";
		return $retorno;
	}
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND id = '".$post['id']."' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					" . $this->entidade . "
				WHERE
					1 = 1 ".$query."
				ORDER BY
					titulo DESC
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

		// Localiza imagem para exclusуo do registro
		$parametro['id'] = $id;
		$dados = $this->Pesquisar($parametro, null, null);
		if( $dados[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Nуo foi possэvel localizar a imagem para excluir!";
			return $retorno;
		}
		$imgExclusao = $dados[1][0]["caminhoImagem"];
		
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
				$retorno[1] = "Nуo foi possэel excluir a imagem do registro!";
				return $retorno;
			}
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusуo feita com sucesso!";
		return $retorno;
	}

}

?>