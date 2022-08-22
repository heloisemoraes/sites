<?php
/*
Template Name: Notícias
*/

    get_header();
?>
<div id="meio">

<?php 
	global $more;
        
        $settings = array( 
            'numberposts' => -1, 
            'paged' => get_query_var('paged'),
            'posts_per_page' => 7, // quantidade de posts por pagina (-1 = todos)
        );
        
	$args = new WP_Query( $settings );
        
	if ($args->have_posts()) :  while ( $args->have_posts() ) : $args->the_post();
	$more = 0
	
?>  

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="title"><? the_title(); ?></h2>
        <div class="cntt">
           <?php the_content("<div class='readmore'>&bull; Continue lendo ".the_title('', '', false)."</div>"); ?>
            <?php edit_post_link('( Editar )', '<div class="editar">', '</div>'); ?>
            <br class="clear" />
        </div>
    </div>
    

<?php

	endwhile;
    else : 
?>

    <div class="cntt">
		<h2 class="center"><strong>Não foi encontrado nenhum conteúdo para essa página.</strong></h2>
		
	<br class="clear" />
    </div>
	
<?php endif; ?>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $args ) ); } wp_reset_postdata(); ?>
	<div class="voltar">
		<a href="<?php bloginfo('url'); ?>">Home</a>
		<a href="javascript:history.go(-1)">Voltar</a>
		<?php edit_post_link('Editar', '', ''); ?>
	</div>
</div>

<?php get_footer(); ?>
