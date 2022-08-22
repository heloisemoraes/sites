<?php get_header(); ?>

<br />

<div class="gridPosts">

<?php 
$args = array(
    'posts_per_page' => 60,
    'paged'          => get_query_var('paged'),
    's'              => $_GET['s'],
    'post_type'      => 'post'
);

query_posts( $args );

if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div class="category-post">
    
    <div class="cat-data"> <?php the_time('d') ?> <?php the_time('M') ?> </div>

    <div class="cat-post-thumb">
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php
if ( has_post_thumbnail() ) { the_post_thumbnail( 'grid-thumb' ); }
else { echo '<img src="'.get_bloginfo('stylesheet_directory').'/imagens/gravatar_default_300.jpg" class="wp-post-image" width="205px" height="220" />'; } 
?>
        </a>
    </div>
    
    <div class="cat-title"> <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo the_title_lenght(50); ?></a> </div>
</div>



<?php endwhile; ?>
<div id="footlink"> <?php if(function_exists('wp_pagenavi')){ wp_pagenavi();} ?> </div>

	<?php else : ?>
<div class="postentry">
		<div class="resultado">Não encontramos resultados para a sua busca...</div>
</div>

	<?php endif; ?>
		


</div>



<?php get_footer(); ?>