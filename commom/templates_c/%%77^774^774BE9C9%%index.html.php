<?php /* Smarty version 2.6.12, created on 2015-10-22 15:21:21
         compiled from index.html */ ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ecoflex</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="" />
    <link href="commom/img/icon-tab.png" rel="icon">
    <!-- Bootstrap -->
    <link href="commom/css/bootstrap.min.css" rel="stylesheet">
    <link href="commom/css/estilo.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- vitrine -->
    <link rel="stylesheet" type="text/css" href="commom/css/vitrine/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="commom/css/vitrine/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="commom/css/vitrine/owl.transitions.css">
    <!-- vitrine -->
</head>
<body>
    <div class="container-fluid pd-none">
    	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	<!-- Banner -->
        <article class="banner">
            <div id="demo">
              <div class="container">
                  <div class="row">
                     <div class="span12">
	                        <div id="owl-demo" class="owl-carousel">
	                           <div class="item">
	                              	<div class="bloco-desc-banner">
	                                 	<h2 class="font-bold">Tribunal de Contas Controle de Contas Públicas</h2>
	                                 	<div class="linha-desc-banner"></div>
	                                 	<p class="font-normal">Assessoria prévia à prestação de contas, orientações e acompanhamentos sobre aplicação e destinação de recursos públicos diante dos atuais posicionamentos dos Tribunais de </p>
	                              	</div>
	                              <img src="commom/img/banner.jpg" alt="banner" title="banner">
	                           	</div>
	                            <div class="item"><img src="commom/img/banner.jpg" alt="banner" title="banner"></div>
	                        </div>
                     	</div>
                  	</div>
              	</div>
          	</div>            
        </article>
        <!-- Banner -->
        <section class="conteudo">
            <div class="row">
                <h1 class="titulo-destaque-pag">Nossos produtos</h1>
                <p class="txt-destaque-pag">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica.</p>
            </div>
            <article class="row bloco-produtos-destaque">
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['RetornoDestaque']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)4;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>                     
                    <div class="col-xs-12 col-sm-3 col-md-3 produto-home">
                        <?php if ($this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['super'] == 1): ?>
                            <div class="super-produto-home">
                                <p class="txt-super-produto">Super Calha</p>
                            </div>
                        <?php endif; ?>
                        <div class="bloco-produto-home">
                            <?php if ($this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['caminhoImagem']): ?>
                                <img src="<?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" title="<?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['descricao']; ?>
" alt="<?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['descricao']; ?>
">
                            <?php else: ?>
                                <img src="commom/img/sem-foto.jpg" title="<?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['descricao']; ?>
" alt="<?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['descricao']; ?>
">
                            <?php endif; ?>
                            <p class="txt-produto-home"><?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['descricao']; ?>
</p>
                            <a href="calha.php?id=<?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['id']; ?>
" class="btn-default" alt="Saiba mais sobre <?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['descricao']; ?>
" title="Saiba mais sobre <?php echo $this->_tpl_vars['RetornoDestaque'][$this->_sections['i']['index']]['descricao']; ?>
">
                                <img src="commom/img/icon-mais.png" alt="icone mais" title="icone mais">
                                saiba mais
                            </a>
                        </div>
                    </div>
                <?php endfor; endif; ?>

                <!-- <div class="col-xs-12 col-sm-3 col-md-3 produto-home">
                    <div class="super-produto-home">
                        <p class="txt-super-produto">Super Calha</p>        
                    </div>
                    <div class="bloco-produto-home">
                        <img src="commom/img/produto.jpg" title="Produto" alt="Produto">
                        <p class="txt-produto-home">Calha de Chuva Renegade 15 4P</p>
                        <a href="calha.php" class="btn-default" alt="Saiba mais sobre esse produto" title="Saiba mais sobre esse produto">
                            <img src="commom/img/icon-mais.png" alt="icone mais" title="icone mais">
                            saiba mais
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 produto-home">
                    <div class="bloco-produto-home">
                        <img src="commom/img/produto.jpg" title="Produto" alt="Produto">
                        <p class="txt-produto-home">Calha de Chuva Renegade 15 4P</p>
                        <a href="calha.php" class="btn-default" alt="Saiba mais sobre esse produto" title="Saiba mais sobre esse produto">
                            <img src="commom/img/icon-mais.png" alt="icone mais" title="icone mais">
                            saiba mais
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 produto-home">
                    <div class="super-produto-home">
                        <p class="txt-super-produto">Super Calha</p>        
                    </div>
                    <div class="bloco-produto-home">
                        <img src="commom/img/produto.jpg" title="Produto" alt="Produto">
                        <p class="txt-produto-home">Calha de Chuva Renegade 15 4P</p>
                        <a href="calha.php" class="btn-default" alt="Saiba mais sobre esse produto" title="Saiba mais sobre esse produto">
                            <img src="commom/img/icon-mais.png" alt="icone mais" title="icone mais">
                            saiba mais
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 produto-home">
                    <div class="bloco-produto-home">
                        <img src="commom/img/produto.jpg" title="Produto" alt="Produto">
                        <p class="txt-produto-home">Calha de Chuva Renegade 15 4P</p>
                        <a href="calha.php" class="btn-default" alt="Saiba mais sobre esse produto" title="Saiba mais sobre esse produto">
                            <img src="commom/img/icon-mais.png" alt="icone mais" title="icone mais">
                            saiba mais
                        </a>
                    </div>
                </div> -->
            </article>
            <div class="row">
                <h2 class="titulo-destaque-pag">trabalhamos com as Marcas</h2>
                <p class="txt-destaque-pag">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica.</p>
            </div>
            <div class="row">
                <img src="commom/img/audi.png" alt="audi" title="audi" class="img-marca">
                <img src="commom/img/bmw.png" alt="bmw" title="bmw" class="img-marca">
                <img src="commom/img/chery.png" alt="chery" title="chery" class="img-marca">
                <img src="commom/img/chevrolet.png" alt="chevrolet" title="chevrolet" class="img-marca">
                <img src="commom/img/citroen.png" alt="citroen" title="citroen" class="img-marca">
                <img src="commom/img/dodge.png" alt="dodge" title="dodge" class="img-marca">
                <img src="commom/img/fiat.png" alt="fiat" title="fiat" class="img-marca">
                <img src="commom/img/ford.png" alt="ford" title="ford" class="img-marca">

                <img src="commom/img/audi.png" alt="audi" title="audi" class="img-marca">
                <img src="commom/img/bmw.png" alt="bmw" title="bmw" class="img-marca">
                <img src="commom/img/chery.png" alt="chery" title="chery" class="img-marca">
                <img src="commom/img/chevrolet.png" alt="chevrolet" title="chevrolet" class="img-marca">
                <img src="commom/img/citroen.png" alt="citroen" title="citroen" class="img-marca">
                <img src="commom/img/dodge.png" alt="dodge" title="dodge" class="img-marca">
                <img src="commom/img/fiat.png" alt="fiat" title="fiat" class="img-marca">
                <img src="commom/img/ford.png" alt="ford" title="ford" class="img-marca">
            </div>

            <div class="row bloco-parceiro-catalogo">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h2 class="titulo-destaque-pag">parceria</h2>
                    <p class="txt-destaque-pag mg-bottom-txt">Lorem Ipsum é simplesmente uma simulação de texto.</p>
                    <a href=""><img class="center-block" src="commom/img/top-mix.png" alt="top mix" title="top mix"></a>
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h2 class="titulo-destaque-pag">Catálogo</h2>
                    <div class="txt-destaque-pag">
                        <img class="img-catalogo" src="commom/img/catalogo.png" alt="Catálogo" title="Catálogo">
                        <p class="txt-catalogo">Lorem Ipsum é simplesmente uma simulação de texto.</p><br>
                        <a href="" class="btn-default btn-download" alt="Saiba mais sobre esse produto" title="Saiba mais sobre esse produto">
                            <img src="commom/img/download.png" alt="icone download" title="icone download">
                            Download
                        </a>
                    </div>
                </div>        
            </div>
        </section>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>