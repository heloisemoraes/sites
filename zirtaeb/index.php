<?php require_once("redirect_mobile/include.php"); ?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="title"><?php the_title(); ?></h2>
			<div class="cntt">
				<?php the_content('<br /><br />...continue lendo.'); ?>
			</div>
			
		</div>
	 <?php endwhile; ?>    
	 
	 <?php else : ?>
	 <h2 class="center"><strong>N�o foi encontrado nenhum conte�do para essa p�gina.</strong></h2>
	<?php endif; ?>     

	<div class="wp-pagenavi voltar" style="text-align:right;">
		<a href="<?php bloginfo('url'); ?>">Home</a>
		<a href="javascript:history.go(-1)">Voltar</a>
		<?php edit_post_link('Editar', '', ''); ?>
	</div>


<?php get_footer(); ?>

