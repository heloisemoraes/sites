<?php
/*
Template Name: Página simples
*/
get_header(); ?>     

<div class="container">

<div class="row-fluid">

<div class="span12">

<div  id="single-post post-<?php the_ID(); ?>" <?php post_class(); ?>> 

<?php 



while(have_posts()): the_post(); ?>

 

<div <?php post_class('post'); ?>>

<div class="clear"></div>



<div class="entry-content">

<?php multipurpose_post_thumb(array(1100,0),true, array('class'=>'img-polaroid')); ?>

<?php the_content(); ?>


</div>


</div>



<?php endwhile; ?>


<?php

$botao = get_post_meta($post->ID,"botao",true);
$link_botao = get_post_meta($post->ID,"link_botao",true);

if(empty($link_botao)){
	$link_botao = "#";
}

if(!empty($botao)){
	echo "<a class='botao_campo_personalizado' href='" . $link_botao . "'>" . $botao . "</a>";
}

?>

</div>

</div>



</div>

</div>



<?php
		
	$pag_id = get_the_ID();
	
	
	/*
	if($pag_id == '160'){
	
	echo "
	<div class='container cursos_online_container_seguros pagina_seguros'>
	<div class='row-fluid'>
	<div class='entry-content cursos_online_container_seguros'>";
	
	$categoria8 = "category=8";
	$postagem8 = get_posts($categoria8."&orderby=ID"."&order=ASC"."&posts_per_page=-1");
	
	
	echo "<div>
			<div class='row-fluid'>
	";
	
		foreach($postagem8 as $p8){
				echo"
					<div class='container_post cursos_online_seguros seguros span4'>
						<a href='" . get_permalink($p8->ID) . "'>
							" . get_the_post_thumbnail($p8->ID) . "
							<h2>" . $p8->post_title . "</h2>						
						</a>
					</div>
				";

	}
		
			echo "</div></div>
			
			<br clear='all'>
	
	</div>
	</div>
	</div>
			
			<br clear='all'>";
	}

	*/
	
	
	if($pag_id == '165'){

	echo "
	<div class='container'>
	<div class='row-fluid'>
	<div class='entry-content'>";
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }
	$qtd_por_page = 6;
	$args = array('cat'=> 9, 'orderby'=> 'ID', 'order'=> 'DESC', 'posts_per_page'=> $qtd_por_page, 'paged'=> $paged);
	query_posts($args); 
	$postagem9 = get_posts($args);


	echo "<div>
			<div class='row-fluid'>
	";
	
			//print_r($postagem9);
			
						
			function resumo($conteudo,$quantidade_de_caracteres){

			 if(strlen($conteudo) > $quantidade_de_caracteres){

			  $conteudo = strip_tags($conteudo);
			  $conteudo = preg_replace("/\[(.*?)\]/i", '', $conteudo);
			  $conteudo = mb_substr($conteudo, 0, $quantidade_de_caracteres) . "...";
			  //$conteudo = strip_shortcodes(string $conteudo);

			 }else{
			  //$conteudo = do_shortcode($conteudo);
			  $conteudo = preg_replace("/\[(.*?)\]/i", '', $conteudo);
			 }
			 return $conteudo;
			 
			}
		
		$itens_por_coluna = $qtd_por_page / 2;
		$itens = 0;
		foreach($postagem9 as $p9){	
		
			$itens++;
		
			
			$conteudo = $p9->post_content;
			$quantidade_de_caracteres = 150;
			

			
			
			
			/*
			if(strlen($conteudo) > $quantidade_de_caracteres){
				$resumo = substr($conteudo, 0, $quantidade_de_caracteres) . "...";
			}else{
				$resumo = $conteudo;	
			}*/
			
			
			if($itens==1){
				echo "<div class='span6'>";
			}
			
			if($itens_por_coluna <= $itens){
			echo"
				<div class='container_post_noticias span12'>
						" /* .  get_the_post_thumbnail($p9->ID) */ . "
						<h2>" . resumo($p9->post_title,40) . "</h2>	
						<p>" . resumo($conteudo,$quantidade_de_caracteres) . "</p>			
						<a href='" . get_permalink($p9->ID) . "'>Leia Mais</a>
				</div>
			";
			}
			
			if($itens==$itens_por_coluna){
				echo "</div><div class='span6'>";
			}
			
			if($itens_por_coluna > $itens){
			echo"
				<div class='container_post_noticias span12'>
						" /* .  get_the_post_thumbnail($p9->ID) */ . "
						<h2>" . resumo($p9->post_title,40) . "</h2>	
						<p>" . resumo($conteudo,$quantidade_de_caracteres) . "</p>	
						<a href='" . get_permalink($p9->ID) . "'>Leia Mais</a>
				</div>
			";
				
			}

		}
		
			echo "</div></div></div>
			
			<br clear='all'>
	
	</div>
	</div>
	</div>
			
			<br clear='all'>";
	


?>



<div style="display: table; margin: auto;"> 
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>
 
<?php 
wp_reset_query();
} ?>


<?php get_footer(); ?>





