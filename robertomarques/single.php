
<?php get_header(); ?>

<?php if (have_posts()) : 
    while (have_posts()) : the_post(); ?>

    <div class="postagem">
    	<div class="post_header">

			<div class="titulo"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>    
					<div class="data">
						<div class="dia"><?php the_time('j \d\e F \d\e Y ') ?></div>
					</div>	
			</div>


			<div class="post_body">	 
				<?php the_content('(leia mais...)'); ?>			
			</div>		
			<br class="clear" />			
			<div class="post_footer">	
				
					<div class="comentario col-xs-12 col-sm-4">
					<a href="<?php comments_link(); ?>">Deixe seu comentário</a>		
					</div>				
					
					</div>	
					
					<?php /* * / ?>
					<div class="comentarios-facebook hidden-xs">
                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="3" data-width="100%" data-colorscheme="light"></div>
            </div><?php /* */ ?>
			 <br class="clear" />
			 <div id="comments">
				<?php if (function_exists('paged_comments_template')) paged_comments_template(); else comments_template(); ?>
			</div>


			

            <br class="clear" />

        </div>
		
		
<div class="proppost">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Propaganda Post') ):  endif; ?>
	</div>
	
    </div>
<div class="container">	


    <?php endwhile; ?>
    <div id="footlink"> <?php #if(function_exists('wp_pagenavi')){ wp_pagenavi();} ?> </div>
<?php else : ?>
    <h2>N&atilde;o foi encontrado nenhum conte&uacute;do.</h2> 
<?php endif; ?>


<?php get_footer(); ?>
