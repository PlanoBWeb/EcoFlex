<?php /* Smarty version 2.6.12, created on 2015-10-19 13:52:44
         compiled from inc/footer.html */ ?>
		<footer class="rodape">
			<article class="bloco-rodape">
			    <div class="col-xs-12 col-sm-4 col-md-4 bloco-ind-rodape">
					<p class="titulo-rodape">Atendimento:</p>
					<ul>
						<li class="linha-rodape"><a class="link-rodape" href="tel:1100000000 ">(11) 0000-0000</a></li>
						<li class="linha-rodape"><a class="link-rodape" href="mailto:contato@ecoflex.com.br">contato@ecoflex.com.br</a></li>
						<li class="linha-rodape">Seg a Sáb das 9:00 às 18:30hs.</li>
					</ul>
			    </div>
			    <div class="col-xs-12 col-sm-4 col-md-4 bloco-ind-rodape">
			    	<p class="titulo-rodape">Localização:</p>
					<ul>
						<li class="linha-rodape">Rua Nononon nnono, 4487</li>
						<li class="linha-rodape">Nome Bairro - São Paulo - SP</li>
						<li class="linha-rodape">CEP:00000-000</li>
					</ul>
			    </div>
			    <div class="col-xs-12 col-sm-4 col-md-4 bloco-ind-rodape">
					<p class="titulo-rodape">Como chegar:</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.9782809666535!2d-46.44387798501994!3d-23.676734684625707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6bf928c4a2d1%3A0x193cebfd6813595a!2sR.+Dr.+M%C3%A1rio%2C+327+-+Vila+Falchi%2C+Mau%C3%A1+-+SP%2C+09350-355!5e0!3m2!1spt-BR!2sbr!4v1445018399733" allowfullscreen></iframe>
			    </div>
			</article>	   
		</footer>
		<article class="bloco-linha-dev">
			<div class="encapsula-linha-dev">
				<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
					<p class="txt-direitos">Ecoflex Automotive - Todos os direitos reservados</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 pd-none">
					<a href="http://www.planobweb.com.br/"><img class="pull-right" src="commom/img/planobweb.jpg" alt="Desenvolvido pela PlanoBWeb" title="Desenvolvido pela PlanoBWeb"></a>
					<p class="txt-direitos pull-right">Desenvolvimento:</p>
				</div>
			</div>
		</article>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="commom/js/bootstrap.min.js"></script>
    <!-- vitrine -->
    <script src="commom/js/vitrine/owl.carousel.js"></script>
    <script src="commom/js/funcoes.js"></script>
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

            $(\'.link-menu-produto\').click(function(e){
            	event.preventDefault();
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

                if(trim(d.msg.value)=="")
                {
                    alert("O campo MENSAGEM deve ser preenchido!");
                    d.msg.focus();
                    return false;
                }
                
                d.submit();
            }
        </script>
    '; ?>

</body>
</html>