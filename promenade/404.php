<?php get_header(); ?>
<style>
.imagem_header,.imagem_destaque{
	position: relative;
}
.imagem_destaque{
	width: 100%;
}
.imagem_destaque img{
	max-height: none !important;
}
.ic_creci{
	margin: 0;
}
</style>



       
        <h1 class="titulo_pag_internas">
			Página não encontrada!
        </h1>   
          



<div class="container-fluid pag-content pag-content-interna">
            
	<div class="laytou_width fundo_cinza_muito_claro clearfix">
		
		<div class="col-md-12 pag-content" style="padding-top: 30px !important;">	
			<h3 style="text-align: center;">Página não encontrada!</h3>
		</div>
		
		<div class="col-md-12 pag-content" style="padding-top: 30px !important;">		
			
			<h3>Últimas Notícias!</h3>	 

			<div id="post-<?php the_ID(); ?>" class="row">

				<div class="col-md-12">
					<?php
						$argumentos = array('orderby'=> 'date', 'order'=> 'DESC', 'posts_per_page'=> 8);
						postagens($argumentos,60,250,"","","","layout4",false);
					?>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>




</div>







<?php get_footer(); ?>

