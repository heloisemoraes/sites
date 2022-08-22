<?php get_header(); ?>     

<div class="container">
<div class="row-fluid">
<div class="span12">


<?php /*

	$postagem = get_post($id);
				
				echo"
					
						<p>" . $postagem->post_content . "</p>
						
				";
				*/
				
				
?>
	

<?php while(have_posts()): the_post(); ?>

	<?php
    $pag_id = get_the_ID();
	
	if( in_category('noticias')):

	?>
    
<div style="display: block; max-width: 800px; margin: auto;"> 

<div style="display: table; margin: auto;"> 
<h2 style="font-size: 30px;"><?php the_title(); ?></h2>
</div>

	<?php endif; ?>
    

<div style="display: table; margin: auto;"> 
<?php echo get_the_post_thumbnail(); ?>
</div>

<div style="display: table; margin: auto;"> 
<?php the_content(); ?>
</div>

</div>
<?php endwhile; ?>


<div class="bts_voltar_avancar_post span12">

 <div class="span4 bt_voltar_post"><?php previous_post('%', '', 'yes', 'yes'); ?></div>
 
 <div class="span4 bt_avancar_post"><?php next_post('%', '', 'yes', 'no'); ?></div>
 
</div>

</div>
</div>
</div>



         



<?php get_footer(); ?>

