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
	 <h2 class="center"><strong>Não foi encontrado nenhum conteúdo para essa página.</strong></h2>
	<?php endif; ?>     

	<div class="wp-pagenavi voltar" style="text-align:right;">
		<a href="<?php bloginfo('url'); ?>">Home</a>
		<a href="javascript:history.go(-1)">Voltar</a>
		<?php edit_post_link('Editar', '', ''); ?>
	</div>


<?php get_footer(); ?>

