			
				<?php if (!is_home()){ echo '</div><br class="clear" />'; } ?>
			</div> <!-- #middle -->
            <div id="footer">
				<div id="filiais">
					<ul>
						<li class="centro">
							<?php echo do_shortcode('[lbfenix id="filial_centro"] 
							<strong>Zirtaeb Centro</strong><br />
							Rua da Alf&acirc;ndega, 108 - Centro - RJ<br />
							CEP: 20070-004 <br />
							Tel.PABX 3233-3500<br />
							Fax: 2222-2576<br />
							E-mail: <a href="mailto:matriz@zirtaeb.com">matriz@zirtaeb.com</a>
							[/lbfenix]'); ?>
						</li>
						<li class="barra">
							<?php echo do_shortcode('[lbfenix id="filial_barra"] 
							<strong>Zirtaeb Barra</strong><br />
							Av. das Am&eacute;ricas, 2901 Grupos 411 e 412 - Ed. Barra Business <br />
							CEP:22631-002<br />
							Telefax: 2439-8170 <br />
							E-mail: <a href="mailto:barra@zirtaeb.com">barra@zirtaeb.com</a>
							[/lbfenix]'); ?>
						</li>
						<li class="recreio">
							<?php echo do_shortcode('[lbfenix id="filial_recreio"] 
							<strong>Zirtaeb Recreio</strong><br />
							Rua Amaury Monteiro, 35 Grupos 201/215 - Centro Comercial do Recreio<br />
							CEP: 22790-110<br />
							TeleFax: 2437-9445 <br />
							E-mail: <a href="mailto:recreio@zirtaeb.com">recreio@zirtaeb.com</a>
							[/lbfenix]'); ?>
						</li>
						<li class="copacabana">
							<?php echo do_shortcode('[lbfenix id="filial_copacabana"] 
							<strong>Zirtaeb Copacabana</strong><br />
							Av. N.S.Copacabana, 647 GR. 709<br />
							CEP: 22050-901 <br />
							Tel: 2255-9893<br />
							E-mail: <a href="mailto:copacabana@zirtaeb.com">copacabana@zirtaeb.com</a>
							[/lbfenix]'); ?>
						</li>
					</ul>
					<div class="frase"></div>
				</div>
				
				<div id="logos_associados"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/rodape_logo-associados.png" /></div>
				<div id="midias_sociais">
					<a href="http://www.facebook.com/pages/Administradora-Zirtaeb/307256769301532?sk=wall" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/icon_facebook.png" alt="Facebook" width="32" height="32" border="0" /></a>
					<a href="http://www.zirtaeb.com/index.php/feed/rss/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/icon_rss.png" alt="RSS" width="32" height="32" border="0" /></a>
				</div>
				<div id="prod_base">
					<a href="http://www.basesoftware.com.br" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/prod_basesoftware.png" /></a>
				</div>
				
				<div id="copy">Copyright 2011 Zirtaeb - Todos os direitos reservados</div>
			</div>

        </div></div></div></div>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/selector.js"></script>
		<?php wp_footer(); ?>
		<?php if(is_home()){ ?>
                <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.tools.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/functions_home.js"></script>
		<script type="text/javascript">
                //Janela dos sites
                function some() {
                        document.getElementById("aviso").style.display = "none";
                }
                

		jQuery(document).ready(function() { // inicio jquery
                        
			// (INICIO) Destaques para Aluguel
			jQuery.getJSON("http://<?=apelido()?>.i.wsrun.net/imoveis/CP/destaque_json/?Codigo_Parceiro=<?=codigo_parceiro()?>&qtd=5&Finalidade=A&Alt_Foto=188&Larg_Foto=186&Local=pagina_principal&callback=?",
			function(dados){
				var conteudo='';
				jQuery.each(dados,function(i,imovel){
				   conteudo=conteudo+"<div><a href='"+imovel.link+ "'><img src='"+imovel.imagem+"' class='dtkimg' width='186' height='188' /><span class='dets'><span class='bairro'>"+imovel.bairro+"</span><span class='valor'>R$ "+imovel.valor+"</span><span class='endereco'>"+imovel.endereco+"</span></span></a></div>"; 									  
				});
				jQuery(".slider.alu").append(conteudo);
				jQuery(".slider.alu").cycle({
					fx:     'scrollHorz', 
					speed:  500, 
					timeout: 5000, 
					next:   '#nextBtnalu',
					prev:	''
				});
			}); 
			// (FIM) Destaques para Aluguel

			// (INICIO) Destaques para Venda
			jQuery.getJSON("http://<?=apelido()?>.i.wsrun.net/imoveis/CP/destaque_json/?Codigo_Parceiro=<?=codigo_parceiro()?>&qtd=5&Finalidade=C&Alt_Foto=188&Larg_Foto=186&Local=pagina_principal&callback=?",
			function(dados){
				var conteudo='';
				jQuery.each(dados,function(i,imovel){
					conteudo=conteudo+"<div><a href='"+imovel.link+ "'><img src='"+imovel.imagem+"' class='dtkimg' width='186' height='188' /><span class='dets'><span class='bairro'>"+imovel.bairro+"</span><span class='valor'>R$ "+imovel.valor+"</span><span class='endereco'>"+imovel.endereco+"</span></span></a></div>"; 									  
				});
				jQuery(".slider.ve").append(conteudo);
				jQuery(".slider.ve").cycle({
					fx:     'scrollHorz', 
					speed:  500, 
					timeout: 5000, 
					next:   '#nextBtnve',
					prev:	''
				});
			}); 
			// (FIM) Destaques para Venda
			
		}); // fim jquery
		</script>
		<?php } ?>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/functions.js"></script>
		
    </body>
</html>
