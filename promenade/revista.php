<?php
/*
Template Name: Revista
*/
get_header();
$edicao = get_option("inserir-imagem-1-opc-1");
?>
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
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
          
           
<h1 class="titulo_pag_internas layout_width <?php echo $cor_perso; ?>">
	
	<span>
	
	<?php echo get_the_title() . " - " . $edicao; ?>
	
	<?php if($ico_perso): ?>
		<i class="ic_creci <?php echo $ico_perso; ?>"></i>
	<?php endif; ?>
	
	</span>
	
</h1> 

            
<div id="post-<?php the_ID(); ?>" class="container-fluid pag-content pag-content-interna">

	<div class="row">
        <?php
			$slug_page = $post->post_name;
			$cor_perso = "fundo_preto_transparente";
			if($slug_page == "galeria-de-fotos"){
				$ico_perso = "ic_pgocreci";
			}
		?>
        <div class="layout_width fundo_cinza_muito_claro clearfix">
        
    		    
			<div class="col-md-12" style="padding-top: 30px !important;">	 
		 		
	
			<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
			
			
				<?php the_content(); ?>
                
                <?php
					$botao_verde = get_post_meta($post->ID, "botao_verde", true); 
					$link_botao = get_post_meta($post->ID, "link_do_botao", true); 
					if( ! empty ($botao_verde) ):
				?>
                	<a href="<?php echo $link_botao; ?>" class="bt-model bt-fundo_verde"><?php echo $botao_verde; ?></a>
                <?php endif; ?>
                
           </div>
           
        </div>

    </div>
	
	<div class="row">

        <div class="layout_width fundo_cinza_muito_claro clearfix">
		
			<div class="col-md-12">	
			
				<div class="row">
				
					
					<div class="col-md-4">	
						
						<a target="_blank" href="<?php echo get_option("inserir-imagem-1-link"); ?>">
							<img style="max-width: 100%;" src="<?php echo get_option("inserir-imagem-1"); ?>">
						</a>
					</div>
					
					<div class="col-md-8">	
	
						<?php 

						if( empty ($posts_por_pagina) ){
							$posts_por_pagina = 8;
						}

						$argumentos = array('cat' => '', 'orderby'=> 'date', 'order'=> 'DESC', 'posts_per_page'=> '-1');
						postagens($argumentos,60,200,"",$edicao,"","revista","");
						
						?> 
					
					</div>
					
				</div>
				
				<div class="row" style="padding: 20px 0;">
					
					<div class="col-md-3">
						<a href="<?php echo home_url(); ?>/expediente-lowndes-report/" class="botoes_revista bt4">Expediente</a>
					</div>
					
					<div class="col-md-3">
						<a href="<?php echo home_url(); ?>/edicoes-anteriores-lowndes-report/" class="botoes_revista bt3">Edições anteriores</a>
					</div>
					
					<div class="col-md-3">
						<a href="<?php echo home_url(); ?>/anuncie-conosco/" class="botoes_revista bt2">Anuncie Aqui</a>
					</div>
					
					<div class="col-md-3">
						<a href="<?php echo home_url(); ?>/assinatura-lowndes-report/" class="botoes_revista">Assinatura</a>
					</div>
					
				</div>


			</div>

		</div>
		
	</div>
	
	
</div>
   <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>

