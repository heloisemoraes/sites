<?php
/*
Template Name: Home page
*/
get_header();
?>

<style>

.content_home{
	min-height: 300px;
}

</style>



<?php /*
<div class="breadcrumb">
<?php 
// if there is a parent, display the link
$parent_title = get_the_title( $post->post_parent );
if ( $parent_title != the_title( ' ', ' ', false ) ) {
	echo '<a href="' . get_permalink( $post->post_parent ) . '" title="' . $parent_title . '">' . $parent_title . '</a> » ';
} 
// then go on to the current page link
?>
<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
<?php the_title(); ?></a> »
</div>
*/?>


<div class="container-fluid padding0">
	
 
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<div class="container-fluid">
						
						<div class="row layout_width">
							<div class="col-xs-12">
								<?php the_content(); ?>
							</div>
						</div>
							
					</div>
						
						
		<div class="padding_bottom_30">
									
			<div class="row layout_width">
			
				<div class="col-md-6">
					<h2 class="titulo_area2 ic_ultimas_noticias">ÚLTIMAS NOTÍCIAS <div class="ver_todos_area_right mais"><a href="<?php echo home_url(); ?>/noticias">Ver todas</a></div><hr></h2>
					
					
				
					<div class="container-fluid">
						<div class="row">
						
							<?php 
								$argumentos = array('cat'=> '3', 'orderby'=> 'date', 'order'=> 'DESC');
								postagens($argumentos,40,120,"","",3,"layout5","");
							?>
							
						</div>
					</div>
					
						

				</div>
								
				<div class="col-md-6 padding0">
					
					<div class="col-xs-12 padding0 padding_bottom_10">
						<div class="col-xs-12">
							<h2 class="titulo_area2 ic_veja_mais">VEJA TAMBÉM <div class="ver_todos_area_right mais"><a href="<?php echo home_url(); ?>/veja-tambem">Ver todas</a></div><hr></h2>
						</div>
					</div>
					
									
					<div class="slideshow_veja_tambem" >
						<?php 
							$argumentos = array('cat'=> '', 'orderby'=> 'date', 'order'=> 'DESC', 'post_type'=> 'veja_tambem');
							postagens($argumentos,40,120,"","",2,"layout6","");
						?>
					</div>
				</div>
				
			</div>
			
		</div>
						
				
					<?php endwhile; ?>
				<?php endif; ?>

    
    <!--<a href="<?php echo get_home_url() . "/imoveis/" ?>" class="bt-model bt-fundo_verde_azulado">VER MAIS IMÓVEIS</a>-->

</div>





<?php get_footer(); ?>









