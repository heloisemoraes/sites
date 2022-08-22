<?php get_header(); ?>
<style>
.imagem_header{
	position: absolute;
}
.col-md-12.pag-content{
	position: relative;
	background: #fff;
	box-shadow: rgba(0,0,0,0.1) 0px -8px 10px 0px;
}
.titulo_pag_internas{
	background: #163755;
    display: block;
    color: #fff;
    position: relative;
    margin: 0;
    padding: 15px 30px;
    font-size: 25px;
    font-weight: 700;
}
.conteudo_interno_primeiro_item{
	margin-top: 150px;
}
.conteudo_interno{
	margin-top: 50px;
	min-height: 400px;
}
.pesquisa > form{
	 border-radius: 20px;
	 height: 35px;
	 display: block;
}
.pesquisa input.search-field{
	background: #E7E7E7;
	box-shadow: rgba(0,0,0,0.3) 0px 2px 6px inset;
}
.pesquisa input.search-submit{
    margin-right: -1px;
	width: 15% !important;
}

@media (max-width: 770px){
	.conteudo_interno_primeiro_item{
		margin-top: 50px;
	}
}

</style>


<div class="head-banner" style=" visibility: visible !important">

	

<?php echo img_header ?>

<?php echo img_header_mobile; ?>


</div>    

         
<?php $primeiro_item = true; if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
            

   
            
            
<div id="post-<?php the_ID(); ?>" class="container-fluid <?php if($primeiro_item=="true"){echo "conteudo_interno_primeiro_item"; $primeiro_item = false;}else{echo "conteudo_interno"; } ?>">
    <div class="row">
            
        <div class="laytou_width fundo_cinza_muito_claro clearfix">
        
        <h1 class="titulo_pag_internas"><?php the_title(); ?></h1>
    		    
			<div class="col-md-12 pag-content" style="padding-top: 30px !important;">		 
		 		<?php the_content(); ?>
                
                <?php
					$botao_verde = get_post_meta($post->ID, "botao_verde", true); 
					$link_botao = get_post_meta($post->ID, "link_do_botao", true); 
					if( ! empty ($botao_verde) ):
				?>
                	<a href="<?php echo $link_botao; ?>" class="bt-model bt-fundo_verde"><?php echo $botao_verde; ?></a>
                <?php endif; ?>
                
           </div>
           
        </div>

    </div>
</div>


   <?php endwhile; ?>

<?php else: ?>








            
            
<div id="post-<?php the_ID(); ?>" class="container-fluid conteudo_interno_primeiro_item">
    <div class="row">
            
        <div class="laytou_width fundo_cinza_muito_claro clearfix">
        
        <h1 class="titulo_pag_internas">Nenhum resultado encontrado!</h1>
			<div class="col-md-12 pag-content" style="padding-top: 30px !important;">		 

    		<p>Continue pesquisando...</p>
<div class="pesquisa">
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

<!--<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>-->
<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Procurar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'OK', 'submit button' ) ?>" />
</form>
</div>




           </div>
           
        </div>

    </div>
</div>





            
            
<div id="post-<?php the_ID(); ?>" class="container-fluid conteudo_interno">
    <div class="row">
            
        <div class="laytou_width fundo_cinza_muito_claro clearfix">
        
        <h1 class="titulo_pag_internas">Últimas Notícias!</h1>
			<div class="col-md-12 pag-content" style="padding-top: 30px !important;">		 


<div class="row">


<?php 
    
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$args_posts = array('cat'=> 3, 'orderby'=> 'ID', 'order'=> 'ASC', 'posts_per_page'=> 2, 'paged'=> $paged);
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
                 <div class="col-sm-6" style="min-height: 350px;">
        			<div class="row">
        				<a href="<?php echo get_permalink($p3->ID);	?>">
                            <div class="col-sm-4" title="<?php echo $p3->post_title; ?>">
                                <div class="thumb_area" style="background: url(<?php echo $url_thumb; ?>); height: 150px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h4><?php echo $p3->post_title; ?></h4>
                                <p style="color: #000;"><?php echo $conteudo; ?></p>
                            </div>
                    	</a>
                    </div>
                 </div>
                     
            
		<?php

}    
	
wp_reset_query();
?>              



</div>




           </div>
           
        </div>

    </div>
</div>



<?php endif; ?>


<?php get_footer(); ?>

