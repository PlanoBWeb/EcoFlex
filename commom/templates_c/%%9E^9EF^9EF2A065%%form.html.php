<?php /* Smarty version 2.6.12, created on 2015-10-21 13:34:09
         compiled from inc/form.html */ ?>
<form class="form-horizontal" method="post" name="contato" action="envia.php">
    <input type="hidden" name="pagina" value="<?php echo $this->_tpl_vars['pagina']; ?>
">
    <input type="hidden" name="cod" value="<?php echo $this->_tpl_vars['dados'][0]['codigo']; ?>
">
    <div class="form-group">
        <label for="nome" class="col-sm-2 control-label">Nome*</label>
        <div class="col-sm-10">
            <input type="text" name="nome" class="form-control" id="nome">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">e-mail*</label>
        <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="email">
        </div>
    </div>
    <div class="form-group">
        <label for="telefone" class="col-sm-2 control-label">Telefone*</label>
        <div class="col-sm-10">
            <input type="text" name="tel" class="form-control" id="telefone">
        </div>
    </div>
    <div class="form-group">
        <label for="msg" class="col-sm-2 control-label">Mensagem*</label>
        <div class="col-sm-10">
            <textarea class="form-control campo-msg" name="msg" id="msg"></textarea>
        </div>
    </div>                     
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn-default btn-download btn-enviar pull-right" onclick="return enviardados();">enviar</button>
        </div>
    </div>
</form>