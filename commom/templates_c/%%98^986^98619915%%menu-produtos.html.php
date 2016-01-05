<?php /* Smarty version 2.6.12, created on 2016-01-04 17:51:57
         compiled from inc/menu-produtos.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'inc/menu-produtos.html', 5, false),)), $this); ?>
<!-- Desktop -->
<ul class="menu-lateral-produto">
    <li class="linha-menu-produto">
        <ul>
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
                    </ul>
                </li>
                <li class="linha-menu-produto menu-produto-icon">
                        <img class="img-marca-lateral" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']; ?>
" title="<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']; ?>
">
                        <a class="link-menu-produto" href="<?php echo $this->_tpl_vars['URL']; ?>
calhas/<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']; ?>
</a>
                        
                    <ul class="submenu-produto-lateral" <?php if ($this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['urlAmigavel'] == $this->_tpl_vars['idMarca'] || $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['urlAmigavel'] == $this->_tpl_vars['LateralModeAtivo']): ?> style="display:block" <?php endif; ?>>
                    <?php endif; ?>
                    <li class="linha-submenu-produto">
                        <a class="link-submenu-produto" href="<?php echo $this->_tpl_vars['URL']; ?>
calhas/<?php echo $this->_tpl_vars['url'][1]; ?>
/<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['urlAmigavelmod']; ?>
"><?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['modelo']; ?>
</a>
                    </li>
            <?php $this->assign('nmTipo', $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']); ?>
            <?php endfor; endif; ?>
        </ul>
    </li>
</ul>
<!-- Desktop -->

<!-- Mobile -->
<div class="menu-lateral-produto-mobile">
    <h2 class="titulo-destaque-pag pull-left">Marcas/Modelo</h2>
    <select class="mod-mobile" name="mod-mobile">
        <option>Selecione um modelo</option>
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
                <option class="marca-mob" <?php if ($this->_tpl_vars['idMarca'] == $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['idMarca']): ?> selected <?php endif; ?> value="_m<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['idMarca']; ?>
"><?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']; ?>
</option>
            <?php endif; ?>
            <option class="select-modelo-mob" <?php if ($this->_tpl_vars['idMod'] == $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['idModelo']): ?> selected <?php endif; ?> value="<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['idModelo']; ?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['modelo']; ?>
</option>
            <?php $this->assign('nmTipo', $this->_tpl_vars['menuLateral'][$this->_sections['i']['index']]['marca']); ?>
        <?php endfor; endif; ?>
    </select>
</div>
<!-- Mobile -->