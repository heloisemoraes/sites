<?php
/*
Template Name: Página Interna 2
*/
get_header(); ?>
 
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
            
        
        

<div class="head-banner" style=" visibility: visible !important">

    
    <?php echo $_SESSION['video_header']; ?>

<div id="video_cabecalho">

</div>  
<div id="video_cabecalho_container">

</div>  	
<?php echo img_header . img_header_mobile; ?>


</div>    
            
            

            
<div id="post-<?php the_ID(); ?>" class="container-fluid">
    <div class="row">
       
            <h1 class="titulo_site3">
        		<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
				<?php the_title(); ?>
            </h1>
             
        <div class="laytou_width fundo_cinza_muito_claro clearfix">
    		

<?php if ( has_post_thumbnail() ): ?>
        <div class="visible-xs col-sm-6 col-md-6 pag-content imagem_destaque" style="padding-top: 30px !important;">
            <?php the_post_thumbnail(); ?>
        </div>
    
        <div class="col-sm-6 col-md-6 pag-content" style="padding-top: 30px !important;">		 
            <?php the_content(); ?>
       </div>
       
        <div class="hidden-xs col-sm-6 col-md-6 pag-content imagem_destaque" style="padding-top: 30px !important;">
            <?php the_post_thumbnail(); ?>
        </div>
        
		<?php
            $botao_verde = get_post_meta($post->ID, "botao_verde", true); 
            $link_botao = get_post_meta($post->ID, "link_do_botao", true); 
            if( ! empty ($botao_verde) ):
        ?>
            <div class="col-sm-6 col-md-6 pag-content" style="padding-top: 30px !important;">
                    <a href="<?php echo $link_botao; ?>" class="bt-model bt-fundo_verde"><?php echo $botao_verde; ?></a>
            </div>
        <?php endif; ?>
           
<?php else: ?>
           
    
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
       
           <?php endif; ?>
           
        </div>

    </div>
</div>
   <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>




