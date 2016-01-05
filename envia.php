<?php
//PROTEÇÃO ANTES DE ENVIAR 
//Verifica se os campos mensagem, email_de e assunto do formulário estão preenchidos 
if (empty($_POST['nome'])|| empty($_POST['email'])|| empty($_POST['tel']) || empty($_POST['msg'])) {
   //Não tem mensagem vindo pelo formulário, não manda nada e redireciona para o formulario.html 
   header("Location: index.php"); 
} else { 

  $ip = $_SERVER['REMOTE_ADDR'];
  $data = date("d/m/y"); //função para pegar a data de envio do e-mail
  $hora = date("H:i"); //para pegar a hora com a função date

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['tel'];
  $como = $_POST['como'];
  $msg = $_POST['msg'];
  $cod = $_POST['cod'];

  $cont = "$ip\r\n";
  $cont .= "$data\r\n";
  $cont .= "$hora\r\n\r\n";
  if ($pagina == "calha") {
    $cont .= "Código Produto: \t$cod\r\n"; 
  }
  $cont .= "Nome: \t$nome\r\n";
  $cont .= "E-mail: \t$email\r\n";
  $cont .= "Telefone: \t$tel\r\n";
  $cont .= "Onde nos encontrou: \t$como\r\n";
  $cont .= "\r\nMensagem: \n";
  $cont .= "$msg";

  $headers 	= "MIME-Version: 1.1\r\n";
  $headers 	.= "Content-type: text/plain; charset=UTF-8\n";
  $assunto 	.= "Ecoflex Automotive - Contato";
  $conteudo 	.= "$cont\r\n";
  $headers 	.= "From: ecoflexautomotive@uol.com.br\n"; // remetente-empresa
  $headers 	.= "Return-Path: ecoflexautomotive@uol.com.br\r\n"; // return-path - empresa
  $headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
  $headers 	.= "Reply-To: $email\n";
  $envio 		= mail("ecoflexautomotive@uol.com.br", $assunto,$conteudo,$headers); //enviado
  
  if ($pagina == "localizacao") {
    echo "<script>alert('Enviado com sucesso!!');location.href ='{$URL}obrigado-localizacao'</script>";
  }elseif ($pagina == "fale-conosco") {
    echo "<script>alert('Enviado com sucesso!!');location.href ='{$URL}obrigado-fale-conosco'</script>";
  }elseif ($pagina == "calha") {
    echo "<script>alert('Enviado com sucesso!!');location.href ='{$URL}obrigado-produto'</script>";
  }

  // echo "<script>alert('Enviado com sucesso!!');location.href ='obrigado-fale-conosco.php'</script>";
}

?>

