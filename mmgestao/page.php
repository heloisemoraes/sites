
<?php get_header(); ?>

<?php if (have_posts()) : 
    while (have_posts()) : the_post(); ?>

    <div class="postagem">
            <div class="post_header">
                <div class="titulo"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>            
            </div>

			<div class="post_body">	 
				<?php the_content('(leia mais...)'); ?>			
			</div>		
			<br class="clear" />			

        </div>		
	
    </div>
<div class="container">	


    <?php endwhile; ?>
    <div id="footlink"> <?php #if(function_exists('wp_pagenavi')){ wp_pagenavi();} ?> </div>
<?php else : ?>
    <h2>N&atilde;o foi encontrado nenhum conte&uacute;do.</h2> 
<?php endif; ?>


<?php get_footer(); ?>
