<?php /* Smarty version 2.6.12, created on 2016-01-04 17:45:06
         compiled from calhas.html */ ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalhamos com diversas marcas de carros.</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Calhas de chuva automotivas de diversas marcas como Nissan, Volkswagen, Hyundai, Citroen, Toyota" />
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
commom/img/banner-produto.jpg" alt="calhas automotivas" title="calhas automotivas">
            <h1 class="titulo-interna">calhas automotivas</h1>
        </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/bradcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
                
                    <!-- <h2 class="titulo-destaque-pag">Não existe resultados para: "<?php echo $this->_tpl_vars['postBusca']; ?>
"</h2> -->
                    <?php if ($this->_tpl_vars['dados']): ?>
                        <p class="txt-interna">Os produtos comercializados pela Ecoflex têm como objetivo trazer conforto e segurança em seu automóvel nos dias de chuva!  Com a calha de chuva a água da chuva não entrará no interior do veículo e evita que os vidros embacem.</p>
                        
                        <div class="row encapusla-produtos-interna">
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
                                <div class="col-xs-12 col-sm-4 col-md-4 produto-home">
                                    <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['super'] == 1): ?>
                                        <div class="super-produto-home">
                                            <p class="txt-super-produto">Super Calha</p>
                                        </div>
                                    <?php endif; ?>
                                    <div class="bloco-produto-home">
                                        <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem']): ?>
                                            <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['descricao']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['descricao']; ?>
">
                                        <?php else: ?>
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/sem-foto.jpg" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['descricao']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['descricao']; ?>
">
                                        <?php endif; ?>
                                        <p class="txt-produto-home txt-produto-titulo titulo-valor-busca"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['descricao']; ?>
</p>
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
calha/<?php if ($this->_tpl_vars['url'][1]):  echo $this->_tpl_vars['url'][1]; ?>
/<?php endif;  if ($this->_tpl_vars['url'][2]):  echo $this->_tpl_vars['url'][2]; ?>
/<?php endif;  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="btn-default" title="Saiba mais <?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['descricao']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-mais.png" alt="icone mais" title="icone mais">
                                            saiba mais
                                        </a>
                                    </div>
                                </div>
                            <?php endfor; endif; ?>
                        </div>
                        <div class="bloco-paginacao">
                            <?php if ($this->_tpl_vars['totalPaginas'] > 1): ?>
                                <?php if ($this->_tpl_vars['idMarca']): ?>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas.php?p=<?php echo $this->_tpl_vars['Numpaginas'][0]; ?>
&idMarca=<?php echo $this->_tpl_vars['idMarca']; ?>
" class="seta-pagin pull-left"> << </a>
                                <?php elseif ($this->_tpl_vars['postBusca']): ?>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas.php?p=<?php echo $this->_tpl_vars['Numpaginas'][0]; ?>
&busca=<?php echo $this->_tpl_vars['postBusca']; ?>
" class="seta-pagin pull-left"> << </a>
                                <?php else: ?>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas.php?p=<?php echo $this->_tpl_vars['Numpaginas'][0]; ?>
" class="seta-pagin pull-left"> << </a>
                                <?php endif; ?>

                                <?php unset($this->_sections['j']);
$this->_sections['j']['start'] = (int)1;
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['Numpaginas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
if ($this->_sections['j']['start'] < 0)
    $this->_sections['j']['start'] = max($this->_sections['j']['step'] > 0 ? 0 : -1, $this->_sections['j']['loop'] + $this->_sections['j']['start']);
else
    $this->_sections['j']['start'] = min($this->_sections['j']['start'], $this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] : $this->_sections['j']['loop']-1);
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = min(ceil(($this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] - $this->_sections['j']['start'] : $this->_sections['j']['start']+1)/abs($this->_sections['j']['step'])), $this->_sections['j']['max']);
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                                    <?php if ($this->_tpl_vars['idMarca']): ?>
                                        <a class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" href="calhas.php?p=<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
&idMarca=<?php echo $this->_tpl_vars['idMarca']; ?>
"><?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
</a>
                                    <?php elseif ($this->_tpl_vars['postBusca']): ?>
                                        <a class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" href="calhas.php?p=<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
&busca=<?php echo $this->_tpl_vars['postBusca']; ?>
"><?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
</a>
                                    <?php else: ?>
                                        <a class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" href="calhas.php?p=<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
"><?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
</a>
                                    <?php endif; ?>
                                <?php endfor; endif; ?>
                                <!-- <a href="calhas.php" class="seta-pagin pull-right">  >> </a> -->

                                <?php if ($this->_tpl_vars['idMarca']): ?>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas.php?p=<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
&idMarca=<?php echo $this->_tpl_vars['idMarca']; ?>
" class="seta-pagin pull-right"> >> </a>
                                <?php elseif ($this->_tpl_vars['postBusca']): ?>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas.php?p=<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
&busca=<?php echo $this->_tpl_vars['postBusca']; ?>
" class="seta-pagin pull-right"> >> </a>
                                <?php else: ?>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas.php?p=<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
" class="seta-pagin pull-right"> >> </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <h1 class="titulo-destaque-pag align-left">Nenhum resultado encontrado por "<?php echo $this->_tpl_vars['postBusca']; ?>
"</h1>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>