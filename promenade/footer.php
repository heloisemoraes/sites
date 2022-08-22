<?php 



wp_footer();

?>
<footer class="rodape">


<div class="areas-rodape fundo_vermelho">
    <div class="container-fluid layout_width">
        <div class="row">

            <div class="col-xs-12 col-md-4">
                <?php /*echo titulo_footer_1 . endereco_contato . tel_contato . email_contato . footer_1;*/ ?>
				RIO DE JANEIRO<br>
				Avenida das Américas, 500, Bloco 12, Loja 108.<br>
				Barra da Tijuca – RJ.<br>
				CEP 22.640-904<br>
				(21) 2106-2300<br>
				<br>
				<i
				class="fa fa-facebook" aria-hidden="true" style="margin-right: 10px; font-size: 17px;"></i><a
				target="_blank" href="https://www.facebook.com/promenadeimoveis/">facebook.com/promenade</a>
            </div>

            <div class="col-xs-12 col-md-4">
			MINAS GERAIS<br>
			Rua Uberada, 436, sala 307.<br>
			Barro Preto – Belo Horizonte – MG.<br>
			CEP 30.180-080<br>
			(31) 2125-3500<br>
			<br>
			<i
			class="glyphicon glyphicon-envelope" style="margin-right: 10px;  font-size: 17px;"><a
			href="mailto:contato@promenade.com.br" target="_top"></i>contato@promenade.com.br</a>
			</div>

            <div class="col-xs-12 col-md-4">
                <?php echo titulo_footer_3 . footer_3; ?>
            </div>
			
			
			<?php
			
			$titulo_footer_4 = titulo_footer_4; $footer_4 = footer_4;
			if( !empty($titulo_footer_4) || !empty($footer_4) ) :
			
			?>
			
				<div class="col-xs-12 inline-block-content">
					<hr>
					<?php echo $titulo_footer_4 . $footer_4; ?>
				</div>
				
				<style>
				
					.inline-block-content{
						text-align: center;
					}
					.inline-block-content > *{
						display: inline-block !important;
						padding: 10px 30px !important;
						margin: 0 auto;
					}
					.inline-block-content > hr{
						display: block !important;
						opacity: 0.2;
						padding: 0;
					}
				
				</style>
			
			<?php endif; ?>
			
			
			<!--
            <div class="col-md-4">
            		
                    <div class="redes_sociais text-align-center">
                    <?php //echo redes_sociais_footer; ?>
                    </div>
            
                    <div id="maisprocurados" class="row layout_width ">
                    <?php //echo titulo_pesquisas_mais_frequentes; ?>
                    </div>
            </div>
			
			-->

        </div>
    </div> 
</div>

<div class="container-fluid fundo_cinza_claro" >

	<div class="row layout_width">
		
		<div class="row logos_rodape padding30_0">
					
			
			<div class="col-sm-12 col-md-5">
				<div class="col-xs-12 text-align-center padding15_0">
					Também são empresas do Grupo Promenade:
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<div class="col-sm-4">
					<a href="#" onclick="return false" target="_blank">
						<img src="/wp-content/uploads/2016/07/logo-zun.png" title="Zun" alt="Zun">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="http://www.prohomeimoveis.com.br/" target="_blank">
						<img src="/wp-content/uploads/2016/07/logo-prohome.png" title="Prohome" alt="Prohome">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="http://www.promenade.com.br/" target="_blank">
						<img src="/wp-content/uploads/2016/07/logo-promenade-1.png" title="Promenade" alt="Promenade">
					</a>
				</div>
			</div>
			
		</div>
				

		<div class="col-xs-12">
				<?php echo direitos_autorais; ?>
		</div>
	
	</div>

</div>
    

<?php /*
<div class="areas-rodape fundo_azul_escuro padding15_0">
    <div class="container-fluid layout_width">
    	<div class="row">

<div class="col-xs-12 col-sm-4">
<a class="bt_area_restrita" href="/area-restrita-funcionario/"><i class="ic_style ic_arearestrita"></i>Área restrita funcionários</a>
</div>
  
<div class="col-xs-12 col-sm-4">
        <?php echo direitos_autorais; ?>
</div>
<div class="col-xs-12 col-sm-4">
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" style="display: inline-block; float: right;">

<!--<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>-->
<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Procurar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'OK', 'submit button' ) ?>" />

</form>
</div>


		</div>
    </div>
</div>

*/ ?>

<style>
html{margin-top: 0px !important;}
</style>   

</footer>
</body>
</html>