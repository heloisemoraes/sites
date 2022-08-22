<?php
/*
template name: categorias
*/
get_header(); ?>
<style>
.imagem_header,.imagem_destaque{
	position: absolute;
}
.imagem_destaque{
	width: 100%;
}

.imagem_destaque img{
	max-height: none !important;
}

.col-md-12.pag-content{
	position: relative;
	background: #fff;
	box-shadow: rgba(0,0,0,0.1) 0px -8px 10px 0px;
	min-height: 250px;
}
.titulo_pag_internas{
    display: block;
    color: #fff;
    position: relative;
    margin: 0;
	margin-top: 100px;
    padding: 15px 30px;
    font-size: 25px;
    font-weight: 700;
}
.ic_creci{
	margin: 0;
}
</style>
         

<div class="head-banner" style=" visibility: visible !important">


	<?php if ( has_post_thumbnail() ): ?>
        <div class="imagem_destaque">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php else: ?>
    
    
<div id="video_cabecalho">

</div>  
<div id="video_cabecalho_container">

</div>  	

<?php echo img_header ?>



<?php endif; ?>



<?php echo img_header_mobile; ?>

</div>    
                  
     
<div id="post-<?php the_ID(); ?>" class="container-fluid">
    <div class="row">
        <?php
			$slug_page = $post->post_name;
			$cor_perso = "fundo_azul";
			if($slug_page == "noticias"){
				$ico_perso = "ic_noticias";
				$cor_perso = "fundo_lilas";
			}
			else if($slug_page == "revista-stand"){
				$ico_perso = "ic_revistastand";	
				$cor_perso = "fundo_dourado";				
			}
		?>
        <div class="laytou_width fundo_cinza_muito_claro clearfix">
        
        <h1 class="titulo_pag_internas <?php echo $cor_perso; ?>">
        	
			<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
			<?php echo the_title(); ?>
			
			
			
			<?php if($ico_perso): ?>
				<i class="ic_creci <?php echo $ico_perso; ?>"></i>
			<?php endif; ?>
			
        </h1>
    		    
			<div class="col-md-12 pag-content" style="padding-top: 30px !important;">		 

<div class="row">

<?php 

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$cts = array("Ações","Atualidade","Capa");

$contagem_ct = 0;

$ids_categorias = 0;

foreach($cts as $ct){
	if($contagem_ct == 0 ){
		$ids_categorias = get_cat_ID( $ct );
	}else{
		$ids_categorias .= "," . get_cat_ID( $ct );
	}
	$contagem_ct++;
}

echo($ids_categorias);

$args_posts = array('cat'=> $ids_categorias, 'orderby'=> 'date', 'order'=> 'DESC', 'posts_per_page'=> 8, 'paged'=> $paged);
query_posts($args_posts); 
$postagem3 = get_posts($args_posts);
$quantidade_de_caracteres = 200;

//print_r($postagem3);
foreach($postagem3 as $p3){
	
		$conteudo = $p3->post_content;
		//$conteudo = $p3->post_content;
		if(strlen($conteudo) > $quantidade_de_caracteres){
			$conteudo = strip_tags($conteudo);
			$conteudo = substr($conteudo, 0, $quantidade_de_caracteres) . "...";
			$conteudo = strip_shortcodes($conteudo);
		}else{
			$conteudo = strip_tags($conteudo);
			$conteudo = strip_shortcodes($conteudo);	
		}
		$url_thumb = wp_get_attachment_url( get_post_thumbnail_id($p3->ID) );

		?>
		
		<div class="col-sm-6" style="min-height: 200px;">
			<div class="row">
				<a href="<?php echo get_permalink($p3->ID);	?>">
					<div class="col-sm-12">
						<h4><?php echo $p3->post_title; ?></h4>
						<p style="color: #000;"><?php echo $conteudo; ?></p>
					</div>
				</a>
			</div>
		</div>      
            
		<?php

} 

echo easy_wp_pagenavigation();
wp_reset_query();
?> 

</div>



           </div>
           
        </div>

    </div>
</div>


















<?php get_footer(); ?>

