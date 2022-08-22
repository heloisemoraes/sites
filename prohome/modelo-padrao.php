<?php 
/*
Template Name: Página Padrão
*/
get_header();
 ?>     
<div class="container">
<div class="row-fluid">


 


<div class="span12">
<div  id="single-post post-<?php the_ID(); ?>" <?php post_class(); ?>> 



<?php 

$pagina_atual = get_the_ID();
$pagina_inicial = 18;

if($pagina_atual == $pagina_inicial){

	
	echo "<div class='entry-content'>
			<div class='row-fluid'>
	";
	$categoria5 = "category=5";
	$postagem5 = get_posts($categoria5."&orderby=ID"."&order=ASC"."&posts_per_page=-1");
	$link_pagina_proposta = array ("http://www.prohomeimoveis.com.br/proposta-locacao-e-venda/","http://www.prohomeimoveis.com.br/proposta-administracao-de-condominios/","http://www.prohomeimoveis.com.br/proposta-implantacao-de-condominios/");	

	$link_ver_mais = array("http://www.prohomeimoveis.com.br/imoveis-locacao-e-venda/","http://www.prohomeimoveis.com.br/condominios/","http://www.prohomeimoveis.com.br/implantacao-de-condominios/");
	
	$lk = 0;
	
		foreach($postagem5 as $p5){
			
				
			
				echo"
					<div class='container_post servicos span4'>
						<h2>" . $p5->post_title . "</h2><br>
						" . get_the_post_thumbnail($p5->ID) . "
						<p>" . $p5->post_content . "</p>
						<div class='bt-post-servicos'>
							<a href='" . $link_pagina_proposta[$lk] . "'>PROPOSTA</a>
							<a href='" . $link_ver_mais[$lk] . "'>VER MAIS</a>
						</div>
					</div>
				";
				
				$lk++;
	
	}
	echo "</div></div>
	</div></div></div></div>
	<br clear='all'>";

	
	echo "
	<div class='container cursos_online_container_seguros cursos'>
	<div class='row-fluid'>
	<div class='entry-content cursos_online_container_seguros cursos'>";
	
	$categoria7 = "category=7";
	$postagem7 = get_posts($categoria7."&orderby=ID"."&order=ASC"."&posts_per_page=-1");
	
	
	echo "<h2 class='titulo_areas'>" . get_cat_name('7') . "</h2><br><br><div>
	<div class='row-fluid'>
	";
	
		foreach($postagem7 as $p7){
			
				$link_campo_personalizado = get_post_meta($p7->ID, 'link_curso', true);
				if (empty($link_campo_personalizado)){
					$link_campo_personalizado = "#";
				}

				echo"
					<div class='container_post cursos_online_seguros cursos span3'>
						<a href='" . $link_campo_personalizado . "' target='_blank'>		
							" . get_the_post_thumbnail($p7->ID) . "
							<h2>" . $p7->post_title . "</h2>
							<br>
							<p>" . $p7->post_content . "</p>
						</a>
					</div>
				";

	}
		
			echo "</div>
			
			<br clear='all'>
	
	</div>
	</div>
	</div>";
	
	
	echo "
	<div class='container cursos_online_container_seguros'>
	<div class='row-fluid'>
	<div class='entry-content cursos_online_container_seguros'>";
	
	$categoria8 = "category=8";
	$postagem8 = get_posts($categoria8."&orderby=ID"."&order=ASC"."&posts_per_page=-1");
	
	
	echo "<h2 class='titulo_areas'>Seguros</h2><br><div>
			<div class='row-fluid'>
	";
	
		
				echo"
					<div class='seguros' >    					<div class='seguros-item' >						<a href='http://conteudo.prohomeimoveis.com.br/seguro_incedio_conteudo'>							<img src='http://www.prohomeimoveis.com.br/wp-content/themes/multipurpose/images/seguro-conteudo.png' class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt=''>							<h2 style='color: #74bc00;'>Seguro incêndio conteúdo</h2>						</a>					</div>											 <div class='seguros-item' >						<a href='http://conteudo.prohomeimoveis.com.br/prohome-spcc'>							<img src='http://www.prohomeimoveis.com.br/wp-content/themes/multipurpose/images/seguro-garantia.png' class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt=''>							<h2 style='color: #74bc00;'>Seguro garantia cota condominial</h2>						</a>					</div>					</div>					<br>
				";


		
			echo "</div>
			
			<br clear='all'>
	
	</div>
	</div>
	</div>";	
	
	
	$prohome_online = get_post('88');
	
	$frase_pro_home_web = get_post_meta('88', 'frase_pro_home_web', true);
				if (!empty($frase_pro_home_web)){
					$frase = "<h6 style='font-size: 12px !important; font-style: italic;'>" . $frase_pro_home_web . "</h6>";
				}

	
	echo"
	<div class='container cursos_online_container_seguros prohome_online'>
	<div class='row-fluid'>
	<div class='entry-content cursos_online_container_seguros prohome_online'>
					
					<div class='container_post prohome_online'>
					
					<h2 class='titulo_areas'>" . $prohome_online->post_title . "</h2>
						<br>
					<div class='row-fluid'>
					<div class='span6'>
						" . get_the_post_thumbnail($prohome_online->ID) . 
						 $frase ."
						
						</div>
						
						<div class='span6'>" . $prohome_online->post_content . "</div>
						<br clear='all'>
					</div>
				
				</div>
				</div>
				</div>
				
				
				";
	
		
		}else{
	
	
echo "
	<div class='container'>
	<div class='row-fluid'>
<div class='entry-content'>

<h1 class='entry-title'>" . the_title() . "</h1>";

the_content();

echo "</div>
</div></div>";

}




?>



</div>

</div>
</div>
</div>
         

<?php get_footer(); ?>
