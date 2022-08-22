<?php
$menu_mobile =

	array(

		'theme_location' => 'menu-mobile',

		'menu' => '',

		'menu_class' => 'nav navbar-nav', /*navbar-right*/

		'depth'=> 0,

		'container'=> false,

		'walker'=> new Bootstrap_Walker_Nav_Menu

	);
	
$menu_principal =

	array(

		'theme_location' => 'menu-principal',

		'menu' => '',

		'menu_class' => 'row padding0',

		'depth'=> 1,

		'container'=> false,

		'walker'=> new menu_principal

	);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php if( home() != UrlAtual() ){ the_title(); echo" - "; }; bloginfo('blogname'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php wp_head(); ?>
	<?php echo url_favicon ?>
<!--- Secure Site Seal - DO NOT EDIT --->
<span id="ss_img_wrapper_115-55_image_en">
<a href="http://www.alphassl.com/ssl-certificates/wildcard-ssl.html" 
target="_blank" title="SSL Certificates">
<img alt="Wildcard SSL Certificates" border=0 id="ss_img"
src="//seal.alphassl.com/SiteSeal/images/alpha_noscript_115-55_en.gif"
title="SSL Certificate">
</a>
</span>
<script type="text/javascript"
src="//seal.alphassl.com/SiteSeal/alpha_image_115-55_en.js"></script>
<!--- Secure Site Seal - DO NOT EDIT --->

    
<script type="text/javascript">

jQuery(document).ready(function(e) {
	
	jQuery('div.ycarousel-container ul li:first-child').remove();
	
	   
jQuery('<div></div>').appendTo('body').addClass('voltarTopo fundo_amarelo fonte_azul glyphicon glyphicon-chevron-up').hide();

jQuery(".target_blank a").attr("target","_blank");

	jQuery(window).scroll(function () {

		if (jQuery(this).scrollTop() > 200 ) {

		jQuery('.voltarTopo').fadeIn();

		} else {

		jQuery('.voltarTopo').fadeOut();

		}
		

	});

	jQuery('.voltarTopo').click(function() {

		jQuery('body,html').animate({scrollTop:0},600);

	});
	
	jQuery('.slideshow_veja_tambem').cycle({
		speed: 500,
		manualSpeed: 200,
		fx: "scrollHorz",
		timeout: "4000",
		pause: true,
		slides: "> a.slide_item"
	});
	jQuery('.slideshow_veja_tambem').append('<div class="prev"></div>').append('<div class="next"></div>');
	
	jQuery('.slideshow_veja_tambem .prev').click(function(){	
		jQuery('.slideshow_veja_tambem').cycle('prev');
	});
	
	jQuery('.slideshow_veja_tambem .next').click(function(){
		jQuery('.slideshow_veja_tambem').cycle('next');
	});
	
	window.setTimeout(function(){
		var altura_slide = jQuery('.slideshow_veja_tambem').eq(0).find('a.slide_item').css('height');
		jQuery('.slideshow_veja_tambem').css('min-height',altura_slide);
	},500);
	
	jQuery(window).resize(function(){
		
		var altura_slide = jQuery('.slideshow_veja_tambem').eq(0).find('a.slide_item').css('height');
		jQuery('.slideshow_veja_tambem').css('min-height',altura_slide);
		
	});
	
	
 
});
	
</script>




<?php // include_once "busca_rapida_header.php"; ?>



<?php // include_once "script_destaque_header.php"; ?>


<?php echo imagem_fundo; ?>

</head>

<body <?php body_class(isset($class) ? $class : ''); ?>>


<div class="container-fluid padding0 fundo_cinza_claro">



<div class="row padding30_15 layout_width" style="margin: auto !important;">
				
	<div class="col-xs-12 col-sm-6 col-md-6">
		<?php echo logo_empresa_header; ?>
	</div>			
	<div class="col-xs-12 col-sm-6 col-md-6">
		<?php include "form_area_restrita.php"; ?>
	</div>
	
</div>
	
	
<nav class="navbar navbar-default fundo_vermelho" role="navigation">

	<div class="container-fluid layout_width">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>
            

        </div>

        <div class="collapse navbar-collapse">

        <?php wp_nav_menu($menu_mobile); ?>
		
		<a href="https://www.facebook.com/promenadeimoveis/" target="_blank" class="ico_facebook" style="position: absolute; right: 0; top: 15px;"></a>

        </div>


    </div>

</nav>  

</div>


<?php if( home() == UrlAtual() ): ?>


<header>
<!-- INICIO header banner -->

<div class="head-banner" style=" visibility: visible !important; <?php echo altura_video ?>">


	<?php  if ( has_post_thumbnail() ): ?>
        <div class="imagem_destaque">
            <img src="<?php wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'tamanho-padrao-single-post' )[0] ?>" />
        </div>
    <?php else: ?>
    
    
<div id="video_cabecalho">

</div>  
<div id="video_cabecalho_container">

</div>  	

<?php echo slide_cabecalho() . video_mp4 ?>


<?php echo img_header_mobile_div_bg; ?>


</div> 
<?php /*
<div class="container-fluid titulo_e_busca" style="margin-top: -150px; margin-bottom: 80px;">
	<div class="row layout_width">
		
		<div class="col-md-4 titulo" style="margin-top: -155px;">
			<div class="padding15 fonte_branca" style="position: relative; z-index: 2;">
				<?php echo "<h1>" . get_option('titulo-img-header'). "</h1><h4>" . get_option('titulo-da-pagina') . "</h4>"; ?>
			</div>
			<div class="fundo_azul" style="position: absolute; width: 800px; height: 100%; right: 20px; top: 0;"></div>
		</div>
		
		<div class="col-md-8 fundo_azul padding15 busca">
		<?php include"busca_rapida_content.php"; ?>
		</div>
		
	</div>
</div>

*/ ?>

<!-- FIM header banner -->

<?php  endif;  ?>

</header>



<?php  else:  ?>

	

		<?php  if ( has_post_thumbnail() ): ?>
        <div class="imagem_destaque">
            <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'tamanho-padrao-single-post' )[0] ?>" />
        </div>
		<?php else: ?>

		<div class="imagem_topo">
		<?php echo img_header; ?>
		</div>
		<div class="img_header_mobile_div_bg">
			<?php echo img_header_mobile_div_bg; ?>
		</div>			
		<?php  endif;  ?>
		
		

<?php  endif;  ?>



<a href="https://promenade.icondo.com.br/" target="_blank" class="bt_2via"><img src="<?php bloginfo('template_directory') ?>/images/promenade/ic_2via.png"></a>

