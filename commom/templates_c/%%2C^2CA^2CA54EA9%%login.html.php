<?php /* Smarty version 2.6.12, created on 2015-11-10 12:08:20
         compiled from admin/login.html */ ?>
<html>
<head>
	<title><?php echo $this->_tpl_vars['titulo']; ?>
 - ADMINISTRAÇÃO</title>

<script src="commom/js/geral.js"></script>
<link rel="stylesheet" type="text/css" href="commom/css/estilo.css">

<?php echo '
<script>

	function checa(){
		a = document.formu_adm;
		
		if(a.login.value==\'\'){
			alert(\'Preencha o campo e-mail!\');
			a.login.focus();
			return false;
		}
		
		if(!email(a.login, \'E-mail inválido\'))
		{
			return false;
		}
		
		
		if(a.senha.value==\'\'){
			alert(\'Preencha o campo senha!\');
			a.senha.focus();
			return false;
		}
		
		return true;
		a.submit();
	}

</script>
'; ?>


</head>

<body topmargin="0" leftmargin="0" bgcolor="#D5DDE3">

<form  class="form-admin" style="width: 340px;" name="formu_adm" method="POST" OnSubmit="return checa()">
	<div class="logo" style="display: block;   display: block;  float: none;  margin: auto;  margin-bottom: 50px;  margin-top: 20px;"></div>
	<input type="hidden" name="acao" value="logar">
	<label>E-mail:</label> 
	<input type="text" style="width: 340px;" name="login" size="50"> <br>
	<label>Senha:</label> 
	<input type="password" style="width: 340px;" name="senha" size="35"> <br>
	<input type="submit" value="Acessar" class="botao">
 </form>

</body>
</html>