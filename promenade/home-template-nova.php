<?php
/*
Template Name: Home nova
*/
?>
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header('new'); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
            




            
<div id="post-<?php the_ID(); ?>" class="container-fluid">
    <div class="row">
            
        <div class="layout_width clearfix">
    		    
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
