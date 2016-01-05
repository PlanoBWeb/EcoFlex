<?php /* Smarty version 2.6.12, created on 2016-01-05 09:58:36
         compiled from inc/bradcrumb.html */ ?>
<div class="row">
    <div class="breadcrumb">
        <ul class="encapsula-breadcrumb">
            <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
home">HOME / </a></li>
            <!-- <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas.php?idMarca=<?php echo $this->_tpl_vars['dados'][0]['idMarca']; ?>
"><?php echo $this->_tpl_vars['dados'][0]['tituloMarca']; ?>
 / </a></li> -->
            <?php if ($this->_tpl_vars['url'][0] == 'calha'): ?>
                <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas">CALHAS / </a></li>
                <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas/<?php echo $this->_tpl_vars['dados'][0]['idMarca']; ?>
"><?php echo $this->_tpl_vars['dados'][0]['tituloMarca']; ?>
 / </a></li>
                <?php if ($this->_tpl_vars['url'][3]): ?>
                    <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas/<?php echo $this->_tpl_vars['dados'][0]['idMarca']; ?>
/<?php echo $this->_tpl_vars['url'][2]; ?>
"><?php echo $this->_tpl_vars['dados'][0]['nmModelo']; ?>
 / </a></li>
                <?php endif; ?>
                <li class="active"><?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</li>
            <?php else: ?>
                <?php if ($this->_tpl_vars['url'][2]): ?>
                    <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas">CALHAS / </a></li>
                    <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas/<?php echo $this->_tpl_vars['dados'][0]['idMarca']; ?>
"><?php echo $this->_tpl_vars['dados'][0]['idMarca']; ?>
 / </a></li>
                    <li class="active"><?php echo $this->_tpl_vars['dados'][0]['tituloModelo']; ?>
 </li>
                <?php elseif ($this->_tpl_vars['url'][1]): ?>
                    <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
calhas">CALHAS / </a></li>
                    <li class="active"><?php echo $this->_tpl_vars['dados'][0]['nmMarca']; ?>
</li>
                <?php else: ?>
                    <li class="active"><?php echo $this->_tpl_vars['breadCrumb']; ?>
</li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>