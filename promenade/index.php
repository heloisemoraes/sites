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
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
          
           
<h1 class="titulo_pag_internas <?php echo $cor_perso; ?> layout_width">
	
	<span>
	<?php echo the_title(); ?>
	
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
		
			<div class="col-md-12">	
			
				<div class="row">
	
<?php 


$cats = post_info($post->ID)->categorias;
$posts_por_pagina = post_info($post->ID)->posts_por_pagina;


if( empty ($posts_por_pagina) ){
	$posts_por_pagina = 8;
}

if ($cats):

if( urlAtual() == home_url(). "/mercado-imobiliario/" ){
	$caracteres_conteudo = 150;
}
else if( urlAtual() == home_url(). "/ciclo-de-palestras/" ){
	$caracteres_conteudo = "";
}
else if( urlAtual() == home_url(). "/cursos-crescer/" ){
	$caracteres_conteudo = "";
}else{
	$caracteres_conteudo = 150;
}

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$argumentos = array('cat'=> $cats, 'orderby'=> 'date', 'order'=> 'DESC', 'posts_per_page'=> $posts_por_pagina, 'paged'=> $paged);
postagens($argumentos,60,$caracteres_conteudo,"","","","layout4",true);

endif;


?> 
				</div>


			</div>

		</div>
		
	</div>
	
	
	
	
	
	<div class="row">
	
        <div class="layout_width fundo_cinza_muito_claro clearfix">
        
    		    
			<div class="col-md-12" style="padding-top: 30px !important;">	
		 		
				
				
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
	
	
</div>
   <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>

