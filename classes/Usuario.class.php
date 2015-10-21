<?php

include_once "configs/funcoes.php";
//include_once "Imagem.class.php";

class Usuario
{
	function Usuario()
    {
    	$this->entidade = "usuario";
  //   	$this->pathProjeto = PATH_SERVIDOR;
		
		// $classImagem = new Imagem();
		// $this->classImagem = $classImagem;
    }
	
	function Grava($post)
	{
		$retorno = array();

		//Valida duplicidade
		$parametroValidacao['email'] = $post['email'];
		$retornoValidacao = $this->Pesquisar($parametroValidacao);
		if($retornoValidacao[1][0]['id'] != 0)
		{
			$retorno[0] = "1";
			$retorno[1] = "O email ".$post['email']." jс existe em nosso banco de dados!";
			return $retorno;
		}
		
		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				nome = '".utf8_decode($post['nome'])."',
				email = '".$post['email']."',
				senha = '".$post['senha']."'
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = grava";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Altera($post)
	{
		$retorno = array();
	
		$sql = "
			UPDATE	
				".$this->entidade." 
			SET
				nome = '".utf8_decode($post['nome'])."',
				email = '".$post['email']."',
				senha = '".$post['senha']."'
			WHERE
				id = '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = Alterar";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Alteraчуo feita com sucesso!";
			return $retorno;
		}
	}
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND U.id = '".$post['id']."' ";
		}
		
		if($post['nome'])
		{
			$query .= " AND U.nome like '%".$post['nome']."%' ";
		}
		
		if($post['email'])
		{
			$query .= " AND U.email like '%".$post['email']."%' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					".$this->entidade." U
				WHERE
					1 = 1 ".$query."
				ORDER BY
					U.nome
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			$dados[$i]['nome'] = utf8_encode($rows['nome']);
			$dados[$i]['escola'] = utf8_encode($rows['escola']);
			
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
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusуo feita com sucesso!";
		return $retorno;
	}
	
	function checa($login, $senha)
	{
		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					".$this->entidade." 
				WHERE
					email = '".$login."' AND 
					senha = '".$senha."'
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = checa";
			return $retorno;
		}
		$total = mysql_num_rows($result);
		
		if( $total != 1 )
		{
			$retorno[0] = "1";
			$retorno[1] = "Login ou senha incorreta!";
			return $retorno;
		}
		
		$rows = mysql_fetch_array($result);
		
		$dadosUsuario['id']		= $rows['id'];
		$dadosUsuario['email']	= $rows['email'];
		$dadosUsuario['senha']	= $rows['senha'];
		$dadosUsuario['nome']	= $rows['nome'];
		
		$retorno[0] = 0;
		$retorno[1] = $dadosUsuario;
		return $retorno;
	}
}

?>