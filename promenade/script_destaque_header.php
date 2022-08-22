

<!-- Destaques -->



<script type="text/javascript"> 

jQuery(document).ready(function(){



	/* VALORES PADRÃO PARA TODOS OS DESTAQUES */

	/* identificação da imobiliaria (sem espaços ou acentos) */

		var nome_parceiro = '<?php echo apelido; ?>';	    

	/* código da imobiliaria */			

		var codigo_parceiro = <?php echo codigo; ?>;

	/* quantidade de imóveis */		

		
		/*tamanho_conteudo_slide_locacao = jQuery(window).width();
		
		var qtd_destaques = "";
		
		if(tamanho_conteudo_slide_locacao <= 991){
			qtd_destaques = 4;
		}
		else if(tamanho_conteudo_slide_locacao > 991){
			qtd_destaques = 8;
		}*/
		
		var qtd_destaques = "3";
		
		

	/* Finalidade dos imóveis */			

		var finalidade_locacao = 'A';	

		var finalidade_venda = 'C';  

		var grupo = 3; /* quantidade de imóveis por grupo */
		
		var qtd_destaques_por_grupo = qtd_destaques/grupo;		

	

	/*	DESTAQUE LOCAÇÃO	*/   

	jQuery.getJSON("http://"+nome_parceiro+".i.wsrun.net/imoveis/CP-"+codigo_parceiro+"/destaque_json/?Codigo_Parceiro="+codigo_parceiro+"&qtd="+qtd_destaques+"&Finalidade="+finalidade_locacao+"&Local=pagina_principal&callback=?",

	function (dados) {

		var conteudo = '';

		var contadorItem = 0;

		var contadorGrupo = 1;
		
		conteudo = conteudo + "<div class='row grupo grupo" + contadorGrupo + "'>";

		

		jQuery.each(dados, function (i, imovel) {
			
			if(contadorItem < qtd_destaques){
			
				if(contadorItem == qtd_destaques_por_grupo){
					
					contadorGrupo++;
					contadorItem = 0;
					conteudo = conteudo + "</div><div class='row grupo grupo" + contadorGrupo +"'>";
				
				}

				if(imovel.imagem){
				contadorItem++; 

						conteudo = conteudo + "<div class='item_destaque col-xs-12 col-sm-12 color-azul item" + contadorItem + "'><a href='"+imovel.link+"'><div>";
						conteudo = conteudo + "<div class='content_item col-xs-12 col-xs-12 center-block' style='background: url("+imovel.imagem+") center center no-repeat; background-size: cover;'></div><div class='descricao color-azul'><p>"+imovel.finalidade+"</p><p>"+imovel.bairro+"</p><p class='valor_imovel'>"+imovel.tipo+" R$ "+imovel.valor+"</p></div></div></a></div>";
					
				}
			}
			
		});

		conteudo = conteudo + "</div>"; 
		

		jQuery("#destaquesLocacao").append(conteudo); 
		
		jQuery('#destaquesLocacao').cycle({
			speed: 600,
			manualSpeed: 200,
			fx: "fade",
			timeout: "10000",
			slides: "> div"
		});

	});
	
	jQuery(window).resize(function(){
		tamanho_conteudo_slide_locacao = jQuery("#destaquesLocacao .row").css("height");
		jQuery("#destaquesLocacao").css("height", tamanho_conteudo_slide_locacao);
	});
	
	
	
	

	/*	DESTAQUE COMPRA E VENDA	*/   

	jQuery.getJSON("http://"+nome_parceiro+".i.wsrun.net/imoveis/CP-"+codigo_parceiro+"/destaque_json/?Codigo_Parceiro="+codigo_parceiro+"&qtd="+qtd_destaques+"&Finalidade="+finalidade_venda+"&Local=pagina_principal&callback=?",

	function (dados) {

		var conteudo = '';

		var contadorItem = 0;

		var contadorGrupo = 1;
		
		conteudo = conteudo + "<div class='row grupo grupo" + contadorGrupo + "'>";

		

		jQuery.each(dados, function (i, imovel) {
			
			if(contadorItem < qtd_destaques){
			
				if(contadorItem == qtd_destaques_por_grupo){
					
					contadorGrupo++;
					contadorItem = 0;
					conteudo = conteudo + "</div><div class='row grupo grupo" + contadorGrupo +"'>";
				
				}

				if(imovel.imagem){
				contadorItem++; 

						conteudo = conteudo + "<div class='item_destaque col-xs-12 col-sm-12 color-azul item" + contadorItem + "'><a href='"+imovel.link+"'><div>";
						conteudo = conteudo + "<div class='content_item col-xs-12 col-xs-12 center-block' style='background: url("+imovel.imagem+") center center no-repeat; background-size: cover;'></div><div class='descricao color-azul'><p>"+imovel.finalidade+"</p><p>"+imovel.bairro+"</p><p class='valor_imovel'>"+imovel.tipo+" R$ "+imovel.valor+"</p></div></div></a></div>";
					
				}
			}
			
		});

		conteudo = conteudo + "</div>"; 
		

		jQuery("#destaquesVenda").append(conteudo); 
		
		jQuery('#destaquesVenda').cycle({
			speed: 600,
			manualSpeed: 200,
			fx: "fade",
			timeout: "10000",
			slides: "> div"
		});

	});
	
	jQuery(window).resize(function(){
		tamanho_conteudo_slide_locacao = jQuery("#destaquesVenda .row").css("height");
		jQuery("#destaquesVenda").css("height", tamanho_conteudo_slide_locacao);
	});
	
	
	
});
	
</script>
	