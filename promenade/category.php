<?php
get_header(); ?>
<style>
.imagem_header,.imagem_destaque{
	position: relative;
}
.imagem_destaque{
	width: 100%;
}
.imagem_destaque img{
	max-height: none !important;
}
.ic_creci{
	margin: 0;
}
</style>

<?php

/*categoria atual*/
$categoria_atual = $_SERVER['REQUEST_URI'];
$categoria_atual = explode("/",$categoria_atual);

if($categoria_atual[6] && $categoria_atual[6] != "page" && ! is_numeric($categoria_atual[6]) ){
	$categoria_atual =  get_category_by_slug($categoria_atual[6]);
	$categoria_atual_id = $categoria_atual->term_id;
	$categoria_atual_slug = $categoria_atual->name;
}
else if($categoria_atual[5] && $categoria_atual[5] != "page" && ! is_numeric($categoria_atual[5]) ){
	$categoria_atual =  get_category_by_slug($categoria_atual[5]);
	$categoria_atual_id = $categoria_atual->term_id;
	$categoria_atual_slug = $categoria_atual->name;
}
else if($categoria_atual[4] && $categoria_atual[4] != "page" && ! is_numeric($categoria_atual[4]) ){
	$categoria_atual =  get_category_by_slug($categoria_atual[4]);
	$categoria_atual_id = $categoria_atual->term_id;
	$categoria_atual_slug = $categoria_atual->name;
}
else if($categoria_atual[3] && $categoria_atual[3] != "page" && ! is_numeric($categoria_atual[3]) ){
	$categoria_atual =  get_category_by_slug($categoria_atual[3]);
	$categoria_atual_id = $categoria_atual->term_id;
	$categoria_atual_slug = $categoria_atual->name;
}
else if($categoria_atual[2] && $categoria_atual[2] != "page" && ! is_numeric($categoria_atual[2]) ){
	$categoria_atual =  get_category_by_slug($categoria_atual[2]);
	$categoria_atual_id = $categoria_atual->term_id;
	$categoria_atual_slug = $categoria_atual->name;
}

?>      

           
<h1 class="titulo_pag_internas layout_width <?php echo $cor_perso; ?>">	
		<span><?php echo $categoria_atual_slug ?></span>
</h1> 


<div id="post-<?php the_ID(); ?>" class="container-fluid pag-content pag-content-interna layout_width fundo_cinza_muito_claro clearfix" style="padding-top: 30px !important;">


			<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>	 

<div class="row">


<?php 

if(have_posts()) :

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array('posts_per_page' => 3,'paged' => $paged );
$postagem = new WP_Query( $args ); 

while(have_posts()) : the_post();

?>

	<div class="col-sm-6" style="min-height: 175px;">
		<a href="<?php echo get_permalink($post->ID) ?>" style="text-decoration: none; color: inherit;">
			<b style="text-transform: uppercase; display: block;"><i class="glyphicon glyphicon-triangle-right icone seta_posts azul"></i><?php echo $post->post_title ?></b>
			<p><?php echo resumo($post->post_content,150) ?><p>
		</a>
		<div class="ver_todos_area">
			<a href="<?php echo get_permalink($post->ID) ?>">leia mais</a> 
		</div>
	</div>
	
<?php
endwhile;

	wp_pagenavi();

endif;
?>




</div>

</div>



			



















<?php get_footer(); ?>

