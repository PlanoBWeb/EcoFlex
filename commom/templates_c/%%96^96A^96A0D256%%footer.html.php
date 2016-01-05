<?php /* Smarty version 2.6.12, created on 2016-01-04 12:41:26
         compiled from inc/footer.html */ ?>
		<footer class="rodape">
			<article class="bloco-rodape">
			    <div class="col-xs-12 col-sm-4 col-md-4 bloco-ind-rodape">
					<p class="titulo-rodape">Atendimento:</p>
					<ul>
						<li class="linha-rodape"><a class="link-rodape" href="tel:01140430356">(11) 40430356</a></li>
						<li class="linha-rodape"><a class="link-rodape" href="mailto:ecoflexautomotive@uol.com.br">ecoflexautomotive@uol.com.br</a></li>
						<li class="linha-rodape">Seg a Sáb das 9:00 às 18:30hs.</li>
					</ul>
			    </div>
			    <div class="col-xs-12 col-sm-4 col-md-4 bloco-ind-rodape">
			    	<p class="titulo-rodape">Localização:</p>
					<ul>
						<li class="linha-rodape">Rua Álvares Cabral 477</li>
						<li class="linha-rodape">Vila Conceição  - Diadema - SP</li>
						<li class="linha-rodape">CEP: 09981-030</li>
					</ul>
			    </div>
			    <div class="col-xs-12 col-sm-4 col-md-4 bloco-ind-rodape">
					<p class="titulo-rodape">Como chegar:</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.4189813192834!2d-46.61176578501967!3d-23.696727484615845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce446132a2c075%3A0x6f9c2f8eacaa7f72!2sR.+%C3%81lvares+Cabral%2C+477+-+Concei%C3%A7%C3%A3o%2C+Diadema+-+SP%2C+09981-030!5e0!3m2!1spt-BR!2sbr!4v1445620710856" allowfullscreen ></iframe>
			    </div>
			</article>	   
		</footer>
		<article class="bloco-linha-dev">
			<div class="encapsula-linha-dev">
				<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
					<p class="txt-direitos">Ecoflex Automotive - Todos os direitos reservados</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
					<a href="http://www.planobweb.com.br/" target="_blank"><img class="pull-right" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/planobweb.jpg" alt="Desenvolvido pela PlanoBWeb" title="Desenvolvido pela PlanoBWeb"></a>
					<p class="txt-direitos pull-right">Desenvolvimento:</p>
				</div>
			</div>
		</article>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/bootstrap.min.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/vitrine/owl.carousel.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/funcoes.js"></script>
    
    <!-- vitrine -->
    <?php echo '
        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation : true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true
                });
            });

            $(\'.busca-mobile\').click(function(){
                if($(\'.search-mobile\').is(":visible")){
                    $(\'.search-mobile\').animate({ width: "toggle" });
                }else{
                    $(\'.search-mobile\').animate({ width: "toggle" });
               }
            });
            $(\'.close-search-mobile\').click(function(){
                $(\'.search-mobile\').animate({ width: "toggle" });
            });

            $(\'.link-menu-produto\').click(function(){
            	// event.preventDefault();
            	menu = $(this).next(\'.submenu-produto-lateral\');
                link = $(this).parent(\'.linha-menu-produto\');

            	if($(\'.submenu-produto-lateral\').is(\':visible\')){
                    $(\'.submenu-produto-lateral\').hide();   
                    $(link).addClass(\'menu-produto-icon\'); 
                    $(link).removeClass(\'menu-produto-icon-ativo\'); 
            	}else{
                    $(\'.linha-menu-produto\').addClass(\'menu-produto-icon\'); 
                    $(\'.linha-menu-produto\').removeClass(\'menu-produto-icon-ativo\'); 
            		$(menu).toggle();   	
                    $(link).removeClass(\'menu-produto-icon\'); 
                    $(link).addClass(\'menu-produto-icon-ativo\'); 
            	}
            });

            $(\'.link-submenu-produto\').click(function(){
                var blocoPaiLateral = $(this).parent(".submenu-produto-lateral");
                $(blocoPaiLateral).show();
            });
 
            function enviardados()
            {
                d = document.contato;

                if(trim(d.nome.value)=="")
                {
                    alert("O campo NOME deve ser preenchido!");
                    d.nome.focus();
                    return false;
                }
                
                if(trim(d.email.value)=="")
                {
                    alert("O campo E-MAIL deve ser preenchido!");
                    d.email.focus();
                    return false;
                }
                
                if(!email(d.email,\'\')) return false;

                if(trim(d.telefone.value)=="")
                {
                    alert("O campo TELEFONE deve ser preenchido!");
                    d.telefone.focus();
                    return false;
                }

                if(trim(d.como.value)=="" || trim(d.como.value)=="*Como nos conheceu?")
                {
                    alert("O campo ONDE NOS ENCONTROU deve ser preenchido!");
                    d.como.focus();
                    return false;
                }

                if(trim(d.msg.value)=="")
                {
                    alert("O campo MENSAGEM deve ser preenchido!");
                    d.msg.focus();
                    return false;
                }
                
                d.submit();
            }

            $(\'.mod-mobile\').change(function(){
                var modeloMob = $(\'.mod-mobile\').val();
                var retornoExiste = modeloMob.indexOf(\'_m\');

                if (modeloMob == "Selecione um modelo"){
                    alert(\'Selecione um modelo\');
                }else{
                    if(retornoExiste == 0){
                        var modeloMob = modeloMob.replace(\'_m\', \'\');
                        window.location.href = "calhas.php?idMarca="+modeloMob;
                    }else{
                        window.location.href = "calhas.php?idMod="+modeloMob;    
                    }
                }
            });

            // Ajax Busca Desktop
            $(document).ready(function(){
                $("#buscaValor").keyup(function(){
                    var valorBusca = $(\'#buscaValor\').val();
                    var min_length = 0;
                    var contaValor = $(\'#buscaValor\').val().length;

                    if (contaValor != min_length) {

                        $.ajax({
                        type: "GET",
                        url: "calhas.php",
                        // data:\'busca=\'+$(this).val(),
                        data: {busca: valorBusca, buscaAjax: "buscaAjax"},
                  
                            success: function(data){
                                $("#carrega-busca").show();
                                $("#carrega-busca").html(data);
                                $("#buscaValor").css("background","#FFF");
                            }
                        });
                    }else{
                          $(\'#carrega-busca\').hide();
                    }
                });
            });

            $(\'#carrega-busca\').on(\'click\',\'.selectProduto\', function(){
                var valorTxtBusca = $(this).text();

                $("#buscaValor").val(valorTxtBusca);
                $("#carrega-busca").hide();
                
            });
            // Ajax Busca Desktop


            // Ajax Busca Mobile
            $(document).ready(function(){
                $("#buscaValorMobile").keyup(function(){
                    var valorBusca = $(\'#buscaValorMobile\').val();
                    var min_length = 0;
                    var contaValor = $(\'#buscaValorMobile\').val().length;

                    if (contaValor != min_length) {

                        $.ajax({
                        type: "GET",
                        url: "calhas.php",
                        // data:\'busca=\'+$(this).val(),
                        data: {busca: valorBusca, buscaAjax: "buscaAjax"},
                  
                            success: function(data){
                                $("#carrega-busca-mobile").show();
                                $("#carrega-busca-mobile").html(data);
                                $("#buscaValorMobile").css("background","#FFF");
                            }
                        });
                    }else{
                          $(\'#carrega-busca-mobile\').hide();
                    }
                });
            });

            $(\'#carrega-busca-mobile\').on(\'click\',\'.selectProduto\', function(){
                var valorTxtBusca = $(this).text();

                $("#buscaValorMobile").val(valorTxtBusca);
                $("#carrega-busca-mobile").hide();
                
            });
            // Ajax Busca Mobile

            $(\'html\').on(\'click\',\'body\', function(){
                $("#carrega-busca-mobile").hide();
                $("#carrega-busca").hide();
            });
        </script>
    '; ?>

</body>
</html>