<?php /* Smarty version 2.6.12, created on 2015-10-21 12:34:01
         compiled from inc/header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'inc/header.html', 34, false),)), $this); ?>
<header>
	<nav class="navbar navbar-default">
		<div class="encapsula-topo">
	        <div class="container-fluid">
	            <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <img class="busca-mobile" src="commom/img/lupa.png" alt="busca" title="busca">
		            <a class="navbar-brand" href="index.php"> <img src="commom/img/logo.jpg" alt="EcoFlex automotive" title="EcoFlex automotive"> </a>
	            </div>
	            <div class="col-xs-12 search-mobile">
			    	<form class="form-search" action="" method="post" name="search">
			    		<input class="busca" type="search" name="busca" placeholder="Pesquisar...">
			    		<input class="buscar" type="submit" value="">
			    	</form>
			    </div>
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	             	<ul class="nav navbar-nav">
		                <li class="linha-menu"><a class="link-menu <?php if ($this->_tpl_vars['pagina'] == 'index.php'): ?> link-menu-ativo <?php endif; ?>" href="index.php">Home</a></li>
		                <li class="divisao-menu hidden-xs">|</li>
		                <li class="linha-menu"><a class="link-menu <?php if ($this->_tpl_vars['pagina'] == 'quem-somos.php'): ?> link-menu-ativo <?php endif; ?>" href="quem-somos.php">Quem somos</a></li>
		                <li class="divisao-menu hidden-xs">|</li>
		                <li class="linha-menu"><a class="link-menu <?php if ($this->_tpl_vars['pagina'] == 'localizacao.php'): ?> link-menu-ativo <?php endif; ?>" href="localizacao.php">Localização</a></li>
		                <li class="divisao-menu hidden-xs">|</li>
		                <li class="linha-menu"><a class="link-menu <?php if ($this->_tpl_vars['pagina'] == 'fale-conosco.php'): ?> link-menu-ativo <?php endif; ?>" href="fale-conosco.php">Fale Conosco</a></li>  
		                <li class="linha-menu visible-xs-block <?php if ($this->_tpl_vars['pagina'] == 'calhas.php'): ?> link-menu-ativo <?php endif; ?>"><a class="link-menu" href="calhas.php">Calhas Automotivas</a></li>  
		                <li class="linha-menu visible-xs-block dropdown">
		                	<a class="link-menu dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">Marcas</a>
			                <ul class="dropdown-menu">
			                	<?php $this->assign('nmTipo', ((is_array($_tmp=@$this->_tpl_vars['nmTipo'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
			                	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['menuLateral']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			                		<?php if ($this->_tpl_vars['nmTipo'] <> $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']): ?>
			                    		<li><a class="link-menu" href="#"><?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']; ?>
</a></li>
			                    	<?php endif; ?>
									<?php $this->assign('nmTipo', $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']); ?>
			                    <?php endfor; endif; ?>
			                </ul>
		                </li>  
		                <li class="linha-menu visible-xs-block"><a class="link-menu <?php if ($this->_tpl_vars['pagina'] == 'onde-comprar.php'): ?> link-menu-ativo <?php endif; ?>" href="#">Onde comprar</a></li>
	              	</ul>
	            </div>
	        </div>
	    </div>
	</nav>
	<div class="bloco-contato-topo">
    	<div class="col-sm-3 col-md-5">
			<a class="link-logo hidden-xs" href="index.php"> <img src="commom/img/logo.jpg" alt="EcoFlex automotive" title="EcoFlex automotive"> </a>
    	</div>
		<div class="encapsula-contato-topo pd-none">
	    	<div class="col-xs-12 col-sm-2 col-md-2 bloco-tel-topo pd-none">
				<img class="icon-contato-topo" src="commom/img/icon-tel.png" alt="Icone telefone" title="Icone telefone">
				<a href="tel:11988643325" class="link-contato-topo" alt="" title="">11  0000-0000</a>
	    	</div> 
	    	<div class="col-xs-12 col-sm-2 col-md-2 bloco-email-topo pd-none">
				<img class="icon-contato-topo" src="commom/img/icon-email.png" alt="Icone telefone" title="Icone telefone">
				<a href="mailto:contato@ecoflex.com.br" class="link-contato-topo" alt="contato@ecoflex.com.br" title="contato@ecoflex.com.br">contato@ecoflex.com.br</a>
	    	</div>
	    	<!-- <div class="col-xs-12 col-sm-2 col-md-2 bloco-local-topo pd-none hidden-xs">
	    		<img class="icon-contato-topo" src="commom/img/icon-local.png" alt="Icone telefone" title="Icone telefone">
				<a href="" class="link-contato-topo" alt="Onde comprar" title="Onde comprar">Onde comprar</a>
	    	</div> -->
	    </div>
    </div>
    <div class="linha-baixo-topo hidden-xs">
	    <div class="bloco-baixo-topo">
	    	<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
		    	<nav class="nav-linha-baixo-topo">
		    		<ul>
		    			<li class="linha-menu-baixo-topo <?php if ($this->_tpl_vars['pagina'] == 'calhas.php'): ?> linha-menu-baixo-topo-ativo <?php endif; ?>"><a class="link-baixo-topo" href="calhas.php">CALHAS AUTOMOTIVAS</a></li>
		    			<li class="linha-menu-baixo-topo">
		    				<a class="link-baixo-topo" href="">MARCAS</a>
		    				<ul class="drop-down">
		    					<div class="encapsula-drop-down">
		    						<?php $this->assign('nmTipo', ((is_array($_tmp=@$this->_tpl_vars['nmTipo'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
									<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['menuLateral']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<?php if ($this->_tpl_vars['nmTipo'] <> $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']): ?>
											<li class="linha-drop"><a class="link-drop" href="calhas.php?idMarca=<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['idMarca']; ?>
"><?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']; ?>
</a></li>
										<?php endif; ?>
										<?php $this->assign('nmTipo', $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']); ?>
									<?php endfor; endif; ?>
			    				</div>
		    				</ul>
		    			</li>
		    		</ul>
		    	</nav>
		    </div>
		    <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
		    	<form class="form-search" action="calhas.php" method="post" name="search">
		    		<input class="busca" type="search" name="busca" placeholder="Pesquisar...">
		    		<input class="buscar" type="submit" value="">
		    	</form>
		    </div>
	    </div>
	</div>
</header>