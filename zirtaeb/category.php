<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="title"><?php the_title(); ?></h2>
			<div class="cntt">
				<?php the_content('<br /><br />...continue lendo.'); ?>
			</div>
			<br class="clear" />
		</div>
	 <?php endwhile; ?>    
	 
	 <?php else : ?>
	 <h2 class="center"><strong>N�o foi encontrado nenhum conte�do para essa p�gina.</strong></h2>
	<?php endif; ?>     
	
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

	<div class="wp-pagenavi voltar" style="text-align:right;">
		<a href="<?php bloginfo('url'); ?>">Home</a>
		<a href="javascript:history.go(-1)">Voltar</a>
	</div>


<?php get_footer(); ?>

