<?php /* Smarty version 2.6.12, created on 2015-10-23 10:32:59
         compiled from calha.html */ ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->_tpl_vars['dados'][0]['tituloMarca']; ?>
 - <?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
" />
    <link href="commom/img/icon-tab.png" rel="icon">
    <link href="commom/css/bootstrap.min.css" rel="stylesheet">
    <link href="commom/css/estilo.css" rel="stylesheet">
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
            <img class="img-banner-interna" src="commom/img/banner-produto.jpg" alt="calhas automotivas" title="calhas automotivas">
            <h2 class="titulo-interna">calhas automotivas</h2>
        </div>
        <section class="conteudo">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/menu-produtos.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>  
                <div class="col-xs-12 col-sm-9 col-md-9 bloco-produtos-interna">  
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 pd-none produto-detalhe">
                            <!-- <img src="commom/img/produto.jpg" title="Produto" alt="Produto"> -->
                            <?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?>
                                <img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
">
                            <?php else: ?>
                                <img src="commom/img/sem-foto.jpg" title="<?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
">
                            <?php endif; ?>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 pd-none encapsula-desc-produto">
                            <h1 class="titulo-produto"><?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</h1>
                            <div class="col-xs-12 col-sm-7 col-md-7 pd-none">
                                <div class="row bloco-desc-ind">
                                    <img class="icon-desc-produto pull-left" src="commom/img/icon-cod.png" alt="icone" title="icone">
                                    <p class="txt-detalhe-produto"><strong>Código do produto</strong></p>
                                    <p class="txt-detalhe-produto"><?php echo $this->_tpl_vars['dados'][0]['codigo']; ?>
</p>
                                </div>  
                                <div class="row bloco-desc-ind">
                                    <img class="icon-desc-produto pull-left" src="commom/img/icon-portas.png" alt="icone" title="icone">
                                    <p class="txt-detalhe-produto"><strong>Portas</strong></p>
                                    <p class="txt-detalhe-produto"><?php echo $this->_tpl_vars['dados'][0]['porta']; ?>
</p>
                                </div>  
                                <div class="row bloco-desc-ind">
                                    <img class="icon-desc-produto pull-left" src="commom/img/icon-modelo.png" alt="icone" title="icone">
                                    <p class="txt-detalhe-produto"><strong>Modelo</strong></p>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
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
                                        <p class="txt-detalhe-produto"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nmModelo']; ?>
</p>
                                    <?php endfor; endif; ?>
                                </div>  
                            </div>  
                            <div class="col-xs-12 col-sm-5 col-md-5 pd-none">  
                                <div class="row bloco-desc-ind">
                                    <img class="icon-desc-produto pull-left" src="commom/img/icon-marca.png" alt="icone" title="icone">
                                    <p class="txt-detalhe-produto"><strong>Marca</strong></p>
                                    <p class="txt-detalhe-produto"><img class="icon-img-desc" src="<?php echo $this->_tpl_vars['dados'][0]['imgMarca']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['nmModelo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['nmModelo']; ?>
"></p>
                                </div>  
                                <div class="row bloco-desc-ind">
                                    <img class="icon-desc-produto pull-left" src="commom/img/icon-material.png" alt="icone" title="icone">
                                    <p class="txt-detalhe-produto"><strong>Material</strong></p>
                                    <p class="txt-detalhe-produto">100% Acrílico</p>
                                </div>  
                                <?php if ($this->_tpl_vars['dados'][0]['qualidade']): ?>
                                    <div class="row bloco-desc-ind">
                                        <img class="icon-desc-produto pull-left" src="commom/img/icon-qualidade.png" alt="icone" title="icone">
                                        <p class="txt-detalhe-produto"><strong>Qualidade</strong></p>
                                        <p class="txt-detalhe-produto"><img src="commom/img/3m.png" alt="3M" title="3M"></p>
                                    </div> 
                                <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                    <div class="row bloco-orcamento-produto">
                        <div class="linha-baixo-titulo">
                            <h2 class="titulo-destaque-pag">orçamentos</h2>
                        </div>
                        <p class="txt-detalhe-produto pull-right"><strong>Código do produto </strong> <?php echo $this->_tpl_vars['dados'][0]['codigo']; ?>
</p><br><br><br>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/form.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>

                    <div class="row bloco-orcamento-produto">
                        <div class="linha-baixo-titulo">
                            <h2 class="titulo-destaque-pag">veja também</h2>
                        </div>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['RetornoDestaque']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)3;
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
                            <div class="col-xs-12 col-sm-4 col-md-4 produto-home">
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
                    </div>                        
                </div>
            </div>
        </section>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>