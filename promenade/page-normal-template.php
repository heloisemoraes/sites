<?php get_header(); ?>
<style>
.imagem_header,.imagem_destaque{
	position: absolute;
}
.imagem_destaque{
	width: 100%;
}

.imagem_destaque img{
	max-height: none !important;
}
.col-md-12.pag-content{
	position: relative;
	background: #fff;
	box-shadow: rgba(0,0,0,0.1) 0px -8px 10px 0px;
}
.titulo_pag_internas{
	background: #163755;
    display: block;
    color: #fff;
    position: relative;
    margin: 0;
	margin-top: 100px;
    padding: 15px 30px;
    font-size: 25px;
    font-weight: 700;
}

</style>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
            

<div class="head-banner" style=" visibility: visible !important">


	<?php if ( has_post_thumbnail() ): ?>
        <div class="imagem_destaque">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php else: ?>
    
    
<div id="video_cabecalho">

</div>  
<div id="video_cabecalho_container">

</div>  	


<?php echo img_header ?>

<?php endif; ?>

<?php echo img_header_mobile; ?>

</div>    
            
            
<br><br><br><br>
            
<div id="post-<?php the_ID(); ?>" class="container-fluid">
    <div class="row">
            
        <div class="laytou_width fundo_cinza_muito_claro clearfix">
        
        
        <h1 class="titulo_pag_internas">
        	<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
			<?php the_title(); ?>
        </h1>
    		    
			<div class="col-md-12 pag-content" style="padding-top: 30px !important;">		 
		 		

				
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

