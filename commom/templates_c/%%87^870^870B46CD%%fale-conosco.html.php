<?php /* Smarty version 2.6.12, created on 2016-01-04 12:43:09
         compiled from fale-conosco.html */ ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entre em contato conosco!</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Empresa de calhas de chuva automotivas. Solicite um orçamento." />
    <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
    <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container-fluid pd-none">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="row hidden-xs">
            <img class="img-banner-interna" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner-fale-conosco.jpg" alt="fale conosco" title="fale conosco">
            <h2 class="titulo-interna">fale conosco</h2>
        </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/bradcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <section class="conteudo">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <h1 class="titulo-destaque-pag align-left">Entre em contato conosco!</h1><br>
                    <p class="txt-interna">Venha conhecer a Ecoflex. Preencha seus dados que entraremos em contato.</p><br><br>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/form.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>  
                <div class="col-xs-12 col-sm-4 col-md-4 bloco-contato-fale">  
                    <div class="encapsula-contato-fale">
                        <p class="titulo-rodape">Atendimento:</p>
                        <ul>
                            <li class="linha-rodape"><a class="link-rodape" href="tel:01140430356">(11) 40430356</a></li>
                            <li class="linha-rodape"><a class="link-rodape" href="mailto:ecoflexautomotive@uol.com.br">ecoflexautomotive@uol.com.br</a></li>
                            <li class="linha-rodape">Seg a Sáb das 9:00 às 18:30hs.</li>
                        </ul>
                    </div>
                    
                    <div class="encapsula-contato-fale">
                        <p class="titulo-rodape">Localização:</p>
                        <ul>
                            <li class="linha-rodape">Rua Álvares Cabral 477</li>
                            <li class="linha-rodape">Vila Conceição - Diadema - SP</li>
                            <li class="linha-rodape">CEP: 09981-030</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    