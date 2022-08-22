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

          
           
<h1 class="titulo_pag_internas <?php echo $cor_perso; ?> layout_width">
	
	<span>
	
	<?php post_type_archive_title(); ?>
	
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

                
           </div>
           
        </div>

    </div>


	

	<div class="row">
        <div class="layout_width fundo_cinza_muito_claro clearfix">
			<div class="col-md-12" style="padding-top: 30px !important;">	
			
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
					<a href="<?php echo get_permalink($post->ID); ?>" style="text-decoration: none; color: inherit; display: block;">
					<div class="col-md-6">
						<h4 style="color: #B1001C;"><?php echo resumo( get_the_title(), 20 ); ?></h4>
						<p><?php echo resumo( get_the_content(), 150 ); ?></p>
						<div class="ver_todos_area">
							<p>Ler mais</p> 
						</div>
					</div>		
					</a>
					
					
				   <?php wp_pagenavi(); endwhile; ?>
				<?php endif; ?>
	
           </div>
        </div>
    </div>
	
</div>


<?php get_footer(); ?>

