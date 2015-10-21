<?php /* Smarty version 2.6.12, created on 2015-09-26 15:01:39
         compiled from admin/topo.html */ ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="commom/css/estilo.css">
    <script src="commom/js/jquery-1.11.1.min.js"></script>
    <script src="commom/js/geral.js"></script>

    <script type="text/javascript" src="commom/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    // <?php echo '
    // tinymce.init({
    //     selector: "textarea",
    //     plugins: ["image","link"],
    //     width: 800,
    //  });
    // '; ?>

    </script>

    <title><?php echo $this->_tpl_vars['titulo']; ?>
 - ADM</title>
</head>
<body>
<div class="faixa-index"></div>
<section class="encapsula-topo">
    <header class="topo">
        <a href="admin/index.php">
            <div class="logo"></div>
        </a>
        <nav class="menu-topo menu">
            <ul class="bloco-menu-topo">
                <!-- <li class="linha-menu-topo">
                    <a class="link-menu-topo" href="">USUÁRIOS</a>
                    <ul class="menu-drop-aparece" style="display:none;">
                        <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_usuario.php">Cadastrar</a></li>
                        <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_usuario.php?acao=pesquisar">Consultar</a></li>
                    </ul>
                </li> -->
                <li class="linha-menu-topo">
                    <a class="link-menu-topo" href="">MARCA</a>
                    <ul class="menu-drop-aparece" style="display:none;">
                        <div class="bloco-drop-down">
                            <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_marca.php">Cadastrar</a></li>
                            <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_marca.php?acao=pesquisar">Consultar</a></li>
                        </div>
                    </ul>
                </li>
                <li class="linha-menu-topo">
                    <a class="link-menu-topo" href="">MODELO</a>
                    <ul class="menu-drop-aparece" style="display:none;">
                        <div class="bloco-drop-down">
                            <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_modelo.php">Cadastrar</a></li>
                            <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_modelo.php?acao=pesquisar">Consultar</a></li>
                        </div>
                    </ul>
                </li>
                <li class="linha-menu-topo">
                    <a class="link-menu-topo" href="">CALHA</a>
                    <ul class="menu-drop-aparece" style="display:none;">
                        <div class="bloco-drop-down">
                            <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_calha.php">Cadastrar</a></li>
                            <li class="linha-submenu-topo" style="padding: 10px 20px 10px 10px;"><a class="link-menu-topo" href="adm_calha.php?acao=pesquisar">Consultar</a></li>
                        </div>
                    </ul>
                </li>
                <li class="linha-menu-topo"><a class="link-menu-topo" href="adm_login.php?acao=logout">SAIR</a></li>
            </ul>
        </nav>

    </header>
</section>
<!-- <div style="width: 200px; height: 80px; margin: auto; margin-top: 50px;">
    <h1>Administração</h1>
    <h4>Olá <?php echo $this->_tpl_vars['nome']; ?>
</h2>
</div> -->

<?php echo '
<script>
    
    $(".linha-menu-topo").mouseenter(function(){
        var aq = $(this).children(\'ul\');
        $(aq).css(\'display\', \'block\');
    });

    $(".linha-menu-topo").mouseleave(function(){
        var aq = $(this).children(\'ul\');
        $(aq).css(\'display\', \'none\');
    });
    
</script>
'; ?>