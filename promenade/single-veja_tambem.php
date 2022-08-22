<?php get_header();
$categoria = get_the_category($post->ID);
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
		
		<span>Veja Também</span>
	
	<?php if($ico_perso): ?>
		<i class="ic_creci <?php echo $ico_perso; ?>"></i>
	<?php endif; ?>
	
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
				
			<h2 class="layout_width" style="margin-bottom: 15px !important;"><?php echo the_title(); ?></h2>			
		 	

				
				<?php the_content(); ?>
                
                <?php
					$botao_verde = get_post_meta($post->ID, "botao_verde", true); 
					$link_botao = get_post_meta($post->ID, "link_do_botao", true); 
					if( ! empty ($botao_verde) ):
				?>
                	<a href="<?php echo $link_botao; ?>" class="bt-model bt-fundo_verde"><?php echo $botao_verde; ?></a>
                <?php endif; ?>
				
				
				<?php if($categoria[0]->name == "Cursos Crescer"): ?>
                	<a href="<?php echo home_url(); ?>/mais-informacoes" class="bt-model bt-fundo_verde" style="margin-bottom: 20px;">Mais Informações</a>
                <?php endif; ?>
                
           </div>
           
        </div>

    </div>
</div>
   <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>

