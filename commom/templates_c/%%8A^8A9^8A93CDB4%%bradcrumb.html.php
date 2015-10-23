<?php /* Smarty version 2.6.12, created on 2015-10-23 16:28:24
         compiled from inc/bradcrumb.html */ ?>
<div class="row">
    <div class="breadcrumb">
        <ul class="encapsula-breadcrumb">
            <li><a href="index.php">HOME / </a></li>
            
            <?php if ($this->_tpl_vars['pagina'] == "calha.php"): ?>
                <li><a href="calhas.php">CALHAS / </a></li>
                <li><a href="calhas.php?idMarca=<?php echo $this->_tpl_vars['dados'][0]['idMarca']; ?>
"><?php echo $this->_tpl_vars['dados'][0]['tituloMarca']; ?>
 / </a></li>
                <li class="active"><?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</li>
            <?php else: ?>
                <?php if ($this->_tpl_vars['idMarca']): ?>
                    <li><a href="calhas.php">CALHAS / </a></li>
                    <li class="active"><?php echo $this->_tpl_vars['dados'][0]['nmMarca']; ?>
</li>
                <?php elseif ($this->_tpl_vars['idMod']): ?>
                    <li><a href="calhas.php">CALHAS / </a></li>
                    <li class="active"><?php echo $this->_tpl_vars['dados'][0]['tituloModelo']; ?>
</li>
                <?php elseif ($this->_tpl_vars['postBusca']): ?>
                    <li><a href="calhas.php">CALHAS / </a></li>
                    <li class="active"><?php echo $this->_tpl_vars['postBusca']; ?>
</li>
                <?php else: ?>
                    <li class="active"><?php echo $this->_tpl_vars['breadCrumb']; ?>
</li>
                <?php endif; ?>
            <?php endif; ?>
            <!-- <li class="active"><?php echo $this->_tpl_vars['pagina']; ?>
</li> -->
        </ul>
    </div>
</div>