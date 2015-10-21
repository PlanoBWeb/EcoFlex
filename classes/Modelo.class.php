<?php

include_once "configs/funcoes.php";

class Modelo
{
	function Modelo()
    {
		$this->entidade = "modelo";
    }
	
	function Grava($post, $file, $copy = NULL)
	{
		$retorno = array();
		
		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				titulo		= '".utf8_decode(str_replace("'","''", $post['titulo']))."',
				idMarca		= '".$post['idMarca']."'
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
	
		$sql = "
			UPDATE	
				".$this->entidade."
			SET
				titulo 			= '".utf8_decode(str_replace("'","''", $post['titulo']))."',
				idMarca			= '".$post['idMarca']."'
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
			$query .= " AND Mo.id = '".$post['id']."' ";
		}

		if($post['idMarca'])
		{
			$query .= " AND Mo.idMarca = '".$post['idMarca']."' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					Mo.*,
					Ma.titulo AS tituloMarca
				FROM  
					" . $this->entidade . " Mo
				INNER JOIN marca Ma
					ON Mo.idMarca = Ma.id
				WHERE
					1 = 1 ".$query."
				ORDER BY
					Mo.idMarca, Mo.titulo DESC
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
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusуo feita com sucesso!";
		return $retorno;
	}
}

?>