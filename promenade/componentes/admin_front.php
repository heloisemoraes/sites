<?php

$home_page = home_url('/');
$pagina_atual = get_permalink();





/* ---------------------------- areas ---------------------------- */

$area_slide_cabecalho_1 = get_option('slide_cabecalho-pagina_principal');
$area_slide_cabecalho_2 = get_option('slide_cabecalho-paginas_internas');

/* ---------------------------- areas ---------------------------- */




define(titulo_header, "<h2 class='titulo_header'>" . get_option('titulo-img-header') . "</h2>");

$titulo_destaque_conteudo = get_option('titulo-da-pagina');

if( ! empty ($titulo_destaque_conteudo)){
$titulo_destaque = "<h2 class='titulo_site2'>" . $titulo_destaque_conteudo . "</h2><hr style='margin-bottom: 60px;'>";
}

define(titulo_destaque, $titulo_destaque);

/* -------------------------- direitos autorais ---------------------- */

define(direitos_autorais, "<div class='direito_autorais'><p>" . get_option('direitos-autorais-footer') . "</p></div>");
 
 
$url_favicon = get_option('url-favicon');

if( !empty($url_favicon) ){
	$url_favicon = '<link rel="icon" type="image/png" href="'.$url_favicon.'" />';
}

define( url_favicon , $url_favicon );


/* ------------------ informacoes cliente ------------------ */
$apelido = get_option('apelido-cliente');
$codigo = get_option('codigo-cliente');

define(apelido, $apelido);
define (codigo, $codigo);





/* ------------------ video cabeçalho ------------------ */

$url_video =  get_option('video_cabecalho-url_video');
$area_video_cabecalho_1 = get_option('video_cabecalho-pagina_principal');
$area_video_cabecalho_2 = get_option('video_cabecalho-paginas_internas');
$video_cabecalho_altura = get_option('video-cabecalho-altura');
$container_video = "#video_cabecalho";


if( $area_video_cabecalho_1 == "video_pagina_principal" && $home_page == $pagina_atual && $url_video != "" ) : 

?>
<script type='text/javascript' src="<?php echo plugins_url();?>/admin_theme/js/jquery.tubular.1.0.js"></script>
<script>
jQuery(document).ready(function(e) {
	jQuery().ready(function() {
		jQuery('#video_cabecalho_container').css({'width': '100%', 'height': '<?php echo $video_cabecalho_altura; ?>', 'overflow': 'hidden'});
		jQuery('<?php echo $container_video; ?>').tubular({videoId: '<?php echo get_option('video_cabecalho-url_video');?>'}); // where idOfYourVideo is the YouTube ID.
    });
});		
</script>

<?php

	
elseif( $area_video_cabecalho_2 == "video_paginas_internas" && $home_page != $pagina_atual && $url_video != "" ) :
	
?>
<script type='text/javascript' src="<?php echo plugins_url();?>/admin_theme/js/jquery.tubular.1.0.js"></script>
<script>
jQuery(document).ready(function(e) {
	jQuery().ready(function() {
		jQuery('#video_cabecalho_container').css({'width': '100%', 'height': '<?php echo $video_cabecalho_altura; ?>', 'overflow': 'hidden'});
		jQuery('<?php echo $container_video; ?>').tubular({videoId: '<?php echo get_option('video_cabecalho-url_video');?>'}); // where idOfYourVideo is the YouTube ID.
    });
});		
</script>
<?php
	
	
endif; 


// video
$url_video_mp4 = get_option('video_cabecalho-url_video_mp4_1');
$url_video_imagem_preload = get_option('video_cabecalho-url_video_imagem_preload_1');


if( get_option('video_cabecalho-url_video_mp4_2') != "" ){
	// video
	$video = rand(1,2);
	$url_video_mp4 = get_option('video_cabecalho-url_video_mp4_'.$video);
	$url_video_imagem_preload = get_option('video_cabecalho-url_video_imagem_preload_'.$video);
}



/*
// video 2
$url_video_mp4_2 = get_option('video_cabecalho-url_video_mp4_2');
$url_video_imagem_preload_2 = get_option('video_cabecalho-url_video_imagem_preload_2');
*/


$video_mp4 = "";
$altura_video = "";

if( $area_video_cabecalho_1 == "video_pagina_principal" && $home_page == $pagina_atual && $url_video_mp4 != "" ) : 


$altura_video_valor = get_option('video-cabecalho-altura');
	if( !empty($altura_video_valor) ):
		$altura_video = ' height: ' . $altura_video_valor . 'px; overflow: hidden; ' ;
	endif;
	
$video_mp4 = '

<script>
jQuery(window).load(function(){
	
	window.setTimeout(function(){
		
		var video = window.document.getElementById("video_play");
		video.play();
	
	},3000);
	
});
</script>

<section class="layout_width">
	<h1 class="titulo_topo padding0_15">'.get_option('titulo-img-header').'</h1>
	<h2 class="titulo_topo padding0_15">'.get_option('titulo-da-pagina').'</h2>
</section>

<video id="video_play" preload="auto" poster="'.$url_video_imagem_preload.'" loop style="position: absolute; z-index: 1; top: -400px; background-position: center top;" >
<source src="'.$url_video_mp4.'" type="video/mp4">
</video>

';

	
elseif( $area_video_cabecalho_2 == "video_paginas_internas" && $home_page != $pagina_atual && $url_video_mp4 != "" ) :


$altura_video_valor = get_option('video-cabecalho-altura');
	if( !empty($altura_video_valor) ):
		$altura_video = ' height: ' . $altura_video_valor . 'px; overflow: hidden; ' ;
	endif;
	
$video_mp4 = '

<script>
jQuery(window).load(function(){
	
	window.setTimeout(function(){
		
		var video = window.document.getElementById("video_play");
		video.play();
	
	},3000);
	
});
</script>

<section class="layout_width">
	<h1 class="titulo_topo padding0_15">'.get_option('titulo-img-header').'</h1>
	<h2 class="titulo_topo padding0_15">'.get_option('titulo-da-pagina').'</h2>
</section>

<video id="video_play" preload="auto" poster="'.$url_video_imagem_preload.'" loop style="position: absolute; z-index: 1; top: -400px; background-position: center top;" >
<source src="'.$url_video_mp4.'" type="video/mp4">
</video>

';


endif;


define( video_mp4 , $video_mp4 );
define( altura_video , $altura_video );


/* ------------------ imagem cabeçalho ------------------ */

$url_img_header = get_option('imagem-cabecalho');
$titulo_img_header = get_option('titulo-imagem-cabecalho');
$area_img_cabecalho_1 = get_option('imagem_cabecalho-pagina_principal');
$area_img_cabecalho_2 = get_option('imagem_cabecalho-paginas_internas');

if($area_img_cabecalho_1 == pagina_principal && $home_page == $pagina_atual && $area_video_cabecalho_1 != "video_pagina_principal" && $area_slide_cabecalho_1 != pagina_principal):
	$img_header = "<img class='imagem_header' src='" . $url_img_header . "' title='" . $titulo_img_header . "' alt='" . $titulo_img_header . "'>";
elseif($area_img_cabecalho_2 == paginas_internas && $home_page != $pagina_atual && $area_video_cabecalho_2 != "video_paginas_internas" && $area_slide_cabecalho_2 != paginas_internas):
	$img_header = "<img class='imagem_header' src='" . $url_img_header . "' title='" . $titulo_img_header . "' alt='" . $titulo_img_header . "'>";
endif;


define(img_header, $img_header);




/* ------------------ imagem cabeçalho mobile ------------------ */

$url_img_header_mobile = get_option('imagem-cabecalho-mobile');
$titulo_img_header_mobile = get_option('titulo-imagem-cabecalho-mobile');
$area_img_cabecalho_1_mobile = get_option('imagem_cabecalho_mobile-pagina_principal');
$area_img_cabecalho_2_mobile = get_option('imagem_cabecalho_mobile-paginas_internas');

if( ! empty ($url_img_header_mobile)):
	if($area_img_cabecalho_1_mobile == pagina_principal_cabecalho_mobile && $home_page == $pagina_atual):
		$img_header_mobile = "<img class='imagem_header_mobile' src='" . $url_img_header_mobile . "' title='" . $titulo_img_header_mobile . "' alt='" . $titulo_img_header_mobile . "'>";
		
	elseif($area_img_cabecalho_2_mobile == paginas_internas_cabecalho_mobile && $home_page != $pagina_atual):
		$img_header_mobile = "<img class='imagem_header_mobile' src='" . $url_img_header_mobile . "' title='" . $titulo_img_header_mobile . "' alt='" . $titulo_img_header_mobile . "'>";
	endif;
endif;

define(img_header_mobile, $img_header_mobile);





if( ! empty ($url_img_header_mobile)):
	if($area_img_cabecalho_1_mobile == pagina_principal_cabecalho_mobile && $home_page == $pagina_atual):
		$img_header_mobile_div_bg = "<div class='imagem_header_mobile' style='background:url(" . $url_img_header_mobile . "); background-size: cover; background-position: center center; position: absolute; top: 0;' title='" . $titulo_img_header_mobile . "' alt='" . $titulo_img_header_mobile . "'></div>";
		
	elseif($area_img_cabecalho_2_mobile == paginas_internas_cabecalho_mobile && $home_page != $pagina_atual):
		$img_header_mobile_div_bg = "<div class='imagem_header_mobile' style='background:url(" . $url_img_header_mobile . "); background-size: cover; background-position: center center; position: absolute; top: 0;' title='" . $titulo_img_header_mobile . "' alt='" . $titulo_img_header_mobile . "'></div>";
	endif;
endif;

define(img_header_mobile_div_bg, $img_header_mobile_div_bg);





/* ------------------ logo ------------------ */

$url_logo_empresa = get_option('logo-empresa'); 
$link_logo_empresa = get_option('link-logo-empresa');
$classe_logo = array('logo_empresa'=>'logo_empresa','logo_empresa_header'=>'logo_empresa_header','logo_empresa_footer'=>'logo_empresa_footer');

if( empty ( $link_logo_empresa ) && ! empty ($url_logo_empresa)) {
	
	$logo_empresa = "<img class='" . $classe_logo['logo_empresa'] . "' src='" . $url_logo_empresa . "' alt='" . get_option('alt-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'>";
		
		
		
	$logo_empresa_header = "<img class='" . $classe_logo['logo_empresa_header'] . "' src='" . $url_logo_empresa . "' alt='" . get_option('alt-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'>";	
	
	
	$logo_empresa_footer = "<img class='" . $classe_logo['logo_empresa_footer'] . "' src='" . $url_logo_empresa . "' alt='" . get_option('alt-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'>";

		
}else if( ! empty ( $link_logo_empresa ) && ! empty ($url_logo_empresa) ){
	
	$logo_empresa = "<a href='" . $link_logo_empresa . "' target='" . get_option('link-target-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'> <img class='" . $classe_logo['logo_empresa'] . "' src='" . $url_logo_empresa . "' alt='" . get_option('alt-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'> </a>";
		
		
		
	$logo_empresa_header = "<a href='" . $link_logo_empresa . "' target='" . get_option('link-target-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'> <img class='" . $classe_logo['logo_empresa_header'] . "' src='" . $url_logo_empresa . "' alt='" . get_option('alt-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'> </a>";
					
	
	$logo_empresa_footer = "<a href='" . $link_logo_empresa . "' target='" . get_option('link-target-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'> <img class='" . $classe_logo['logo_empresa_footer'] . "' src='" . $url_logo_empresa . "' alt='" . get_option('alt-logo-empresa') . "' title='" . get_option('titulo-logo-empresa') . "'> </a>";
	

	}

define(logo_empresa, $logo_empresa);
define(logo_empresa_header, $logo_empresa_header);
define(logo_empresa_footer, $logo_empresa_footer);


/* ------------------- imagem fundo ------------------- */

$imagem_fundo = get_option('imagem-fundo');

if( ! empty ($imagem_fundo)){
	$imagem_fundo = "<style> body{ background: url(" . $imagem_fundo . ") center top; background-attachment: fixed; background-size: cover;</style>";
}

define(imagem_fundo, $imagem_fundo);








/* ------------------ inserir imagem 1 ------------------ */

$url_inserir_imagem_1 = get_option('inserir-imagem-1');
$titulo_inserir_imagem_1 = get_option('titulo-inserir-imagem-1');
$inserir_imagem_1_link = get_option('inserir-imagem-1-link');
$inserir_imagem_1_opc_1 = get_option('inserir-imagem-1-opc-1');

$inserir_imagem_1 = "<img class='imagem_1' src='" . $url_inserir_imagem_1 . "' title='" . $titulo_inserir_imagem_1 . "' alt='" . $titulo_inserir_imagem_1 . "'>";

define(inserir_imagem_1, $inserir_imagem_1);
define(inserir_imagem_1_link, $inserir_imagem_1_link);
define(inserir_imagem_1_opc_1, $inserir_imagem_1_opc_1);


/* ------------------ inserir imagem 2 ------------------ */

$url_inserir_imagem_2 = get_option('inserir-imagem-2');
$titulo_inserir_imagem_2 = get_option('titulo-inserir-imagem-2');

$inserir_imagem_2 = "<img class='imagem_header' src='" . $url_inserir_imagem_2 . "' title='" . $titulo_inserir_imagem_2 . "' alt='" . $titulo_inserir_imagem_2 . "'>";

define(inserir_imagem_2, $inserir_imagem_2);


/* ------------------ inserir imagem 3 ------------------ */

$url_inserir_imagem_3 = get_option('inserir-imagem-3');
$titulo_inserir_imagem_3 = get_option('titulo-inserir-imagem-3');

$inserir_imagem_3 = "<img class='imagem_header' src='" . $url_inserir_imagem_3 . "' title='" . $titulo_inserir_imagem_3 . "' alt='" . $titulo_inserir_imagem_3 . "'>";

define(inserir_imagem_3, $inserir_imagem_3);



/* ------------------ contato ------------------ */

$tel_contato_header = get_option ('telefone-contato-header');
if( ! empty ($tel_contato_header)){
$tel_contato_header = "<p class='ico ico_tel_header' >" . $tel_contato_header . "</p>";
}


$tel_contato = get_option ('telefone-contato');
if( ! empty ($tel_contato)){
$tel_contato = "<p class='ico_style' ><i class='glyphicon glyphicon-earphone'></i>" . $tel_contato . "</p>";
}

$email_contato = get_option('email-contato');
if( ! empty ($email_contato)){
$email_contato = "<p class='ico_style' ><a href='mailto:" . $email_contato . "'><i class='glyphicon glyphicon-envelope'></i>" . $email_contato . "</a></p>";
}

$email_contato_header = get_option('email-contato');
if( ! empty ($email_contato_header)){
$email_contato_header = "<p class='ico ico_email_header' ><a href='mailto:" . $email_contato_header . "'>" . $email_contato_header . "</a></p>";
}

$endereco_contato = get_option('endereco-contato');
if( ! empty ($endereco_contato)){
$endereco_contato = "<p class='ico_style' ><i class='glyphicon glyphicon-map-marker'></i>" . $endereco_contato . "</p>";
}



define(tel_contato, $tel_contato);
define(tel_contato_header, $tel_contato_header);

define(email_contato, $email_contato);
define(email_contato_header, $email_contato_header);

define(endereco_contato, $endereco_contato);




/* ------------------------------------------------ areas rodape ------------------------------------------------ */


/*texto footer area 1*/
$titulo_footer_1 = get_option ('titulo-footer-1');
$ocultar_titulo_footer_1 = get_option('ocultar-titulo-footer-1');

$footer_1 = get_option('texto-footer-1');

if( ! empty ($footer_1)){
	$footer_1 = $footer_1;
}

if( ! empty ($titulo_footer_1) ){
$titulo_footer_1 = "<h2 style='margin-top: 0;'>" . $titulo_footer_1 . "</h2>";
	if( ! empty ($ocultar_titulo_footer_1)){
		$titulo_footer_1 = "";
	}
}

/*texto footer area 2*/
$titulo_footer_2 = get_option ('titulo-footer-2');
$ocultar_titulo_footer_2 = get_option('ocultar-titulo-footer-2');

$footer_2 = get_option('texto-footer-2');

if( ! empty ($footer_2)){
	$footer_2 = $footer_2;
}

if( ! empty ($titulo_footer_2) ){
$titulo_footer_2 = "<h2 style='margin-top: 0;'>" . $titulo_footer_2 . "</h2>";
	if( ! empty ($ocultar_titulo_footer_2)){
		$titulo_footer_2 = "";
	}
}

/*texto footer area 3*/
$titulo_footer_3 = get_option ('titulo-footer-3');
$ocultar_titulo_footer_3 = get_option('ocultar-titulo-footer-3');

$footer_3 = get_option('texto-footer-3');

if( ! empty ($footer_3)){
	$footer_3 = $footer_3;
}

if( ! empty ($titulo_footer_2) ){
$titulo_footer_3 = "<h2 style='margin-top: 0;'>" . $titulo_footer_3 . "</h2>";
	if( ! empty ($ocultar_titulo_footer_3)){
		$titulo_footer_3 = "";
	}
}

/*texto footer area 4*/
$titulo_footer_4 = get_option ('titulo-footer-4');
$ocultar_titulo_footer_4 = get_option('ocultar-titulo-footer-4');

$footer_4 = get_option('texto-footer-4');

if( ! empty ($footer_4)){
	$footer_4 = $footer_4;
}

if( ! empty ($titulo_footer_4) ){
$titulo_footer_4 = "<h2 style='margin-top: 0;'>" . $titulo_footer_4 . "</h2>";
	if( ! empty ($ocultar_titulo_footer_4)){
		$titulo_footer_4 = "";
	}
}

define(titulo_footer_1, $titulo_footer_1);
define(footer_1, $footer_1);

define(titulo_footer_2, $titulo_footer_2);
define(footer_2, $footer_2);

define(titulo_footer_3, $titulo_footer_3);
define(footer_3, $footer_3);

define(titulo_footer_4, $titulo_footer_4);
define(footer_4, $footer_4);







/* ------------------------ PESQUISAS FREQUENTES -------------------------- */


if( ! empty ($apelido) &&  ! empty ($codigo) ):

$t_p = get_option('titulo-pesquisas-frequentes');

if( ! empty ($t_p)){
 $titulo_pesquisas_mais_frequentes = "<h4><img src='" . get_template_directory_uri() . "/images/imoveis-mais-procurados.png'> " . $t_p . "</h4>";
}

$qtd_maxima_itens = get_option('quantidade-maxima-de-itens-mais-procurados'); 
$qtd_max_de_col_itens = get_option('quantidade-de-colunas-mais-procurados');

?>



<script type='text/javascript'>

jQuery(document).ready(function(){

jQuery.getJSON("<?php echo get_option('url-json-pesquisas-frequentes'); ?>", function( dados ) {

  var qtd_itens = 0;
  var qtd_total_itens = 0;
  var qtd_maxima_itens = <?php if( ! empty($qtd_maxima_itens) ){echo $qtd_maxima_itens;}else{ echo 0;} ?>;
  var qtd_max_de_col_itens = <?php if( ! empty($qtd_max_de_col_itens) ){echo $qtd_max_de_col_itens;}else{ echo 0;} ?>;
  var qtd_total_de_col_itens = 0;
  var qtd_col_itens = qtd_maxima_itens / qtd_max_de_col_itens;
  var class_col = "";
  
  if(qtd_max_de_col_itens == 1){
	class_col = "col-md-12 col-sm-12";
  }  
  if(qtd_max_de_col_itens == 2){
	class_col = "col-md-6 col-sm-6";
  }  
  if(qtd_max_de_col_itens == 3){
	class_col = "col-md-4 col-sm-4";
  }
  else if (qtd_max_de_col_itens == 4){
	class_col = "col-md-3 col-sm-3 ";
  }
  
  var itens_mais = ["<ul class='"+class_col+"'>"]; 
  
  
  jQuery.each( dados, function( e, item ) {
	qtd_itens++;
	if(qtd_total_itens < qtd_maxima_itens){
		if(qtd_itens >= qtd_col_itens){
			qtd_total_de_col_itens++;
			if(qtd_total_de_col_itens < qtd_max_de_col_itens){
				itens_mais.push( "<li> <a ahref='" + item.url + "'>" + item.nome + "</a></li></ul><ul class='"+class_col+"'>" );
			}else{
				itens_mais.push( "<li> <a ahref='" + item.url + "'>" + item.nome + "</a></li>" );
			}
			qtd_itens= 0;
		}else{
			itens_mais.push( "<li> <a ahref='" + item.url + "'>" + item.nome + "</a></li>" );
		}
	}
	qtd_total_itens++;
  });
 
  jQuery("<div>",{ "class":"clearfix", html: itens_mais.join( "" )}).appendTo( "#maisprocurados" );

});
        
		
		});
    

</script>

<style>
           #maisprocurados{
                padding: 0;
            }
			#maisprocurados h4{
				color: #fff;
				font-size: 13px;
			}
            #maisprocurados ul{
                list-style: none;
            }
            #maisprocurados li{ 
                padding: 2px 0;
            }
            #maisprocurados li a { 
				cursor: pointer;
				color: #fff; 
				font-size: 11px;
			}
        </style>

<?php


endif;

define(titulo_pesquisas_mais_frequentes, $titulo_pesquisas_mais_frequentes);








/* ------------------------ redes sociais ------------------------ */

$social_header = get_option('redes_sociais-areas_do_tema-header');
$social_esquerda = get_option('redes_sociais-areas_do_tema-esquerda');
$social_direita = get_option('redes_sociais-areas_do_tema-direita');
$social_footer = get_option('redes_sociais-areas_do_tema-footer');

 
$facebook_ico = get_option('facebook-ico');
$twitter_ico = get_option('twitter-ico');
$linkedin_ico = get_option('linkedin-ico');
$youtube_ico = get_option('youtube-ico');
$google_plus_ico = get_option('google_plus-ico');
$instagram_ico = get_option('instagram-ico');

	
if( ! empty ($facebook_ico)){
	$redes_sociais_cadastradas = $redes_sociais_cadastradas . "<a href='" . $facebook_ico . "' class='ico_social facebook_ico' target='_blank'></a>";
}
	
if( ! empty ($twitter_ico)){
	$redes_sociais_cadastradas = $redes_sociais_cadastradas . "<a href='" . $twitter_ico . "' class='ico_social twitter_ico' target='_blank'></a>";
}
	
if( ! empty ($linkedin_ico)){
	$redes_sociais_cadastradas = $redes_sociais_cadastradas . "<a href='" . $linkedin_ico . "' class='ico_social linkedin_ico' target='_blank'></a>";
}
	
if( ! empty ($youtube_ico)){
	$redes_sociais_cadastradas = $redes_sociais_cadastradas . "<a href='" . $youtube_ico . "' class='ico_social youtube_ico' target='_blank'></a>";
}
	
if( ! empty ($google_plus_ico)){
	$redes_sociais_cadastradas = $redes_sociais_cadastradas . "<a href='" . $google_plus_ico . "' class='ico_social google_plus_ico' target='_blank'></a>";
}
	
if( ! empty ($instagram_ico)){
	$redes_sociais_cadastradas = $redes_sociais_cadastradas . "<a href='" . $instagram_ico . "' class='ico_social instagram_ico' target='_blank'></a>";
}

if($social_footer == "rede_social_footer"){
	$redes_sociais_cadastradas_footer = $redes_sociais_cadastradas;
}

define(redes_sociais_footer, $redes_sociais_cadastradas_footer);









/* ---------------------------------------------- slide cabeçalho ---------------------------------------------*/

	
$mee_cor_borda_miniatura = get_option('mee-cor-borda-miniatura');

$mee_miniaturas_slide_largura = get_option('mee-miniaturas-slide-largura');
if( empty ($mee_miniaturas_slide_largura) ){
$mee_miniaturas_slide_largura = "150";
}

$mee_miniaturas_slide_altura = get_option('mee-miniaturas-slide-altura');
if( empty ($mee_miniaturas_slide_altura) ){
$mee_miniaturas_slide_altura = "150";
}

$mee_cor_fundo_titulo = get_option('mee-cor-fundo-titulo');
$mee_cor_fonte_titulo = get_option('mee-cor-fonte-titulo');
$mee_sombra_texto = get_option('mee-sombra-texto');
$mee_valor_sombra = get_option('mee-textshadow-titulo-slide');
$mee_valor_sombra = explode ( "," , $mee_valor_sombra );

$mee_tamanho_fonte_titulo = get_option('mee-tamanho-fonte-titulo');
if( empty ($mee_tamanho_fonte_titulo) ){
$mee_tamanho_fonte_titulo = "22";
}
$mee_tamanho_fonte_titulo = $mee_tamanho_fonte_titulo . "px";

$unid_m_a = "";
$slide_cabecalho_altura_valor = get_option('mee-slide-altura');
if( ! empty ($slide_cabecalho_altura_valor) ){
$slide_cabecalho_altura = $slide_cabecalho_altura_valor;
$unid_m_a = "px";
}else{
	$slide_cabecalho_altura = "400";
	$unid_m_a = "px";
}
$unid_m = "";
$slide_cabecalho_largura_full_valor = get_option('mee-ful_or_personal_size');
$slide_cabecalho_largura_maxima_valor = get_option('mee-slide-largura');
if( $slide_cabecalho_largura_full_valor == "100%" ){
$slide_cabecalho_largura = $slide_cabecalho_largura_full_valor;
}elseif( ! empty ($slide_cabecalho_largura_maxima_valor) ){
$slide_cabecalho_largura = $slide_cabecalho_largura_maxima_valor;
$unid_m = "px";
}else{
	$slide_cabecalho_largura = "1200";
	$unid_m = "px";
}

$mee_efeitos_slide = get_option('mee-efeitos-slide');
if( empty ($mee_efeitos_slide) ){
	$mee_efeitos_slide == "slide";
}

$mee_tempo_para_troca_de_imagem = get_option('mee-tempo-para-troca-de-imagem');
if( empty ($mee_tempo_para_troca_de_imagem) ){
	$mee_tempo_para_troca_de_imagem = "6000";
}

$mee_efeitos_duracao = get_option('mee-efeitos-duracao');
if( empty ($mee_efeitos_duracao) ){
	$mee_efeitos_duracao = "600";
}


?>


<link rel="stylesheet" href="<?php echo plugins_url(); ?>/admin_theme/slide/flexslider.css" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo plugins_url(); ?>/admin_theme/slide/jquery.flexslider-min.js"></script>
   <script type="text/javascript">
	
    jQuery(window).load(function(){
		jQuery(".slider").css("height","<?php echo $slide_cabecalho_altura . $unid_m_a; ?>");
		if(document.documentMode){
			jQuery(".fundo_slide").css("opacity","0.5");
			jQuery("#busca_rapida form div > div.seta > span,#busca_rapida form div > div > select,#busca_rapida form > div > div > input,#Bairro > input,#Tipo_Imovel > input,#busca_livre form input,#busca-por-referencia form input,#Bairro,.tipo .SuperCaixa span,.bairro #bairro").css("border-radius","0 0 0 0");
		}
      jQuery('#carousel').flexslider({
        animation: "<?php echo $mee_efeitos_slide; ?>",
		slideshowSpeed: <?php echo $mee_tempo_para_troca_de_imagem; ?>,
		animationSpeed: <?php echo $mee_efeitos_duracao; ?>,  
        controlNav: false,
        animationLoop: false,
        slideshow: true,
        itemWidth: <?php echo $mee_miniaturas_slide_largura; ?>,
        itemMargin: 5,
        asNavFor: '#slider',
      });

      jQuery('#slider').flexslider({
        animation: "<?php echo $mee_efeitos_slide; ?>",
		slideshowSpeed: <?php echo $mee_tempo_para_troca_de_imagem; ?>,
		animationSpeed: <?php echo $mee_efeitos_duracao; ?>,  
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
		pauseOnAction: false, 
		touch: true,                    
		video: true,  
		pausePlay: false,
		start: function(){
				var url_imagem_slide = jQuery('.flex-active-slide div').css('background-image');
				jQuery('.fundo_slide').css({"background-image": url_imagem_slide});
		},
		after: function(){
				var url_imagem_slide = jQuery('.flex-active-slide div').css('background-image');
				var img = String(url_imagem_slide);
				jQuery('.fundo_slide').css({"background-image": url_imagem_slide });
			}
				
      });
	  
    });


</script>

 
  
  <style>
.container_slider{
	width: 100%;
	position: relative;
	overflow: hidden;
}
.fundo_slide{
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	filter: blur(10px); 
	-webkit-filter: blur(10px); 
	-moz-filter: blur(10px);
	-o-filter: blur(10px); 
	-ms-filter: blur(10px);
    filter: blur(10px);
	filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='10');
	position: absolute;
	width: 120%;
    height: 120%;
    margin-left: -10%;
}


/* slide - imagens do imovel */
.slider{
	max-width: <?php echo $slide_cabecalho_largura.$unid_m; ?>;
	margin: auto;
	/*margin-top: 136px;*/
	overflow: hidden;
}
#slider{
	margin-bottom: -130px;
	background: #000;
	border: none;
}
#slider ul li iframe{
	position: absolute !important;
	width: 100%;
	height: 100%;
	max-height: <?php echo $slide_cabecalho_altura . $unid_m_a; ?>;
	position: relative;
}

#slider ul li a > div,#slider ul li > div{
	background-position: center center;
	background-repeat: no-repeat;
	<?php if($slide_cabecalho_largura == "100%"): ?>
		background-size: cover;
	<?php else: ?>
		background-size: <?php echo $slide_cabecalho_largura.$unid_m; ?> <?php echo $slide_cabecalho_altura . $unid_m_a; ?> ;
	<?php endif; ?>
	height: <?php echo $slide_cabecalho_altura . $unid_m_a; ?>;
	width: 100%;
	background-position: center center;
}


#carousel{
	margin: auto;
	max-width: 1200px;
	background: transparent;
	border: 4px solid transparent;
	transition-duration: 0.5s;
	opacity: 0;
	bottom: 10px;
	visibility: hidden;
}
#carousel > .flex-direction-nav{
display: none;	
}
#carousel > div {
	z-index: 2;
}
.container_slider:hover #carousel{
	visibility: visible;
	opacity: 1;
}
#carousel ul li{
	margin-left: 10px;
	margin-right: 10px;
	overflow: hidden;
	width: <?php echo $mee_miniaturas_slide_largura . "px"; ?>;
	height: <?php echo $mee_miniaturas_slide_altura . "px"; ?>;
	border: solid 4px <?php echo $mee_cor_borda_miniatura; ?>;
	box-sizing: border-box;
}
#carousel ul li img{
	cursor: pointer;
	transition-duration: 0.5s;
	min-height: 100%;
    max-height: 100%;
	width: auto;
	max-width: 200%;
	opacity: 0.7;
}
#carousel ul li img:hover{
	opacity: 1;
}
#carousel ul li.flex-active-slide img{
	opacity: 1;
	background: #fff;
}


.flex-caption{
	width: 100%;
	position: absolute;
	font-weight: 400;
	font-size: <?php echo $mee_tamanho_fonte_titulo; ?>;
    bottom: 20%;
    right:0;
	visibility: hidden;
	opacity: 0;
	text-align: center;
}


.flex-active-slide .flex-caption{
	visibility: visible;
	opacity: 1;
}

.flex-active-slide .flex-caption > b{
    color: <?php echo $mee_cor_fonte_titulo; ?>;
    background:  <?php echo $mee_cor_fundo_titulo; ?>;;
	display: table;
	margin: auto;
	text-align: right;	
	padding: 20px;
	box-sizing: border-box;
	<?php if( ! empty ($mee_sombra_texto) ): ?>;
	text-shadow: rgba(0,0,0,1) <?php if( empty ($mee_valor_sombra[0]) ){echo 0;}else{echo $mee_valor_sombra[0] . "px" ;} ?> <?php if( empty ($mee_valor_sombra[1]) ){echo 0;}else{echo $mee_valor_sombra[1] . "px" ;} ?> <?php if( empty ($mee_valor_sombra[2]) ){echo 0;}else{echo $mee_valor_sombra[2] . "px" ;} ?>;
	<?php endif; ?>
}

.flex-direction-nav li{
	line-height: normal;	
}

/*.container_slider:hover .flex-caption{
	visibility: visible;
	opacity: 1;
}*/
.flex-pauseplay{
	position: absolute;
	top: 50px;
	left: 15px;
}

.flex-direction-nav{
    display: block;
    height: 0px;
    position: absolute;
	width: 1100px;
    top: 50%;
    left: 50%;
    margin: auto;
    margin-left: -550px;
    margin-top: -20px;
}

/*
@media (min-width: 1101px) and (max-width: 1300px){
	.slider{
		height:<?php echo $slide_cabecalho_altura/100*80 . $unid_m_a; ?> !important;
		max-width: <?php echo $slide_cabecalho_largura/100*80 . $unid_m ?>;
	}
	
	#slider ul li a > div,#slider ul li > div{
		width: <?php echo $slide_cabecalho_largura/100*80 . $unid_m ?>;
	 	height: <?php echo $slide_cabecalho_altura/100*80 . $unid_m_a; ?>;
		background-position: center center !important;
		<?php if($slide_cabecalho_largura == "100%"): ?>
			background-size: cover;
		<?php else: ?>
			display: table-cell;
			background-size: <?php echo $slide_cabecalho_largura/100*80 . $unid_m; ?> <?php echo $slide_cabecalho_altura/100*80 . $unid_m_a; ?> ;
		<?php endif; ?>
	 }
	#slider ul li iframe{height: <?php echo $slide_cabecalho_altura/100*80 . $unid_m_a; ?>;}

}

@media (max-width: 1100px){
	.slider{
		height:<?php echo $slide_cabecalho_altura/100*60 . $unid_m ?> !important;
		max-width: <?php echo $slide_cabecalho_largura/100*60 . $unid_m ?>;
	}
	
	#slider ul li a > div,#slider ul li > div{
		width: <?php echo $slide_cabecalho_largura/100*60 . $unid_m ?>;
	 	height: <?php echo $slide_cabecalho_altura/100*60 . $unid_m ?>;
		background-position: center center !important;
		<?php if($slide_cabecalho_largura == "100%"): ?>
			background-size: cover;
		<?php else: ?>
			display: table-cell;
			background-size: <?php echo $slide_cabecalho_largura/100*60 . $unid_m; ?> <?php echo $slide_cabecalho_altura/100*60 . $unid_m ?> ;
		<?php endif; ?>
	 }
	#slider ul li iframe{height: <?php echo $slide_cabecalho_altura/100*60 . $unid_a; ?>;}

}
*/

@media (max-width: 1100px){

	.flex-direction-nav{
		width: 100%;
		padding: inherit 30px;
		box-sizing: border-box;
   		margin-left: auto;
   		left: auto;
	}
	.flex-direction-nav li > a:before{
		margin: 0 10px 0px 10px;
	}
}
.flex-direction-nav a {
    height: 53px;
    margin: 0;
    top: 0px;
    opacity: 1;
    width: 50px;
    height: 45px;
}

.flex-direction-nav .flex-nav-next a{
	right: 0;
	
}
.flex-direction-nav .flex-nav-prev a{
	left: 0;
}
/*
.flex-direction-nav a.flex-next:before {
    left: 0;
    content: url('<?php echo get_template_directory_uri() ?>/images/topo/seta-direita.png');
}
.flex-direction-nav a.flex-prev:before {
    left: 0;
    content: url('<?php echo get_template_directory_uri() ?>/images/topo/seta-esquerda.png');
}

*/

</style>

<!-- fim slide -->

<?php

	

	
	if($area_slide_cabecalho_1 == pagina_principal && $home_page == $pagina_atual && $area_video_cabecalho_1 != "video_pagina_principal"):
	$html_slide_cabecalho = true;
	endif;
	if($area_slide_cabecalho_2 == paginas_internas && $home_page != $pagina_atual && $area_video_cabecalho_2 != "video_paginas_internas"):
	$html_slide_cabecalho = true;
	endif;
	
	define(html_slide_cabecalho, $html_slide_cabecalho);

function slide_cabecalho(){
	

		if(html_slide_cabecalho == true):
	
            $titulos_imgs_slide = get_option('titulos_imgs_slide');
            $titulos_imgs_slide = explode(",",$titulos_imgs_slide);
            
            if( ! empty ($titulos_imgs_slide) ):
            
            $urls_imgs_slide = get_option('urls_imgs_slide');
            $urls_imgs_slide = explode(",",$urls_imgs_slide);
			
			$links_imgs_slide = get_option('mee-links-imgs-slide');
            $links_imgs_slide = explode(",",$links_imgs_slide);
			
			$target_links_imgs_slide = get_option('mee-target-links-imgs-slide');
            $target_links_imgs_slide = explode(",",$target_links_imgs_slide);
            
            $qtd_itens_slide = 0;
			$mee_titulo_slide = get_option('mee-titulo-slide-ocultar');
			$mee_miniaturas_slide_exibir  = get_option('mee-miniaturas-slide-exibir');
			
            ?>
			
			 <div class='container_slider slide_cabecalho'>
             <div class="fundo_slide"></div>
              <div class='slider'>
               <div id='slider' class='flexslider'>
                <ul class='slides'>
                
			<?php
            foreach($urls_imgs_slide as $imgs_urls):
            ?>
         			<li>
						<?php if ( ! empty ($links_imgs_slide[$qtd_itens_slide])): ?>
                        <a href="<?php echo $links_imgs_slide[$qtd_itens_slide]; ?>" target="<?php echo $target_links_imgs_slide[$qtd_itens_slide]; ?>">
                        <?php endif; ?>
                            <?php if ( ! empty ($titulos_imgs_slide[$qtd_itens_slide]) && empty ($mee_titulo_slide) ): ?>
                                <p class='flex-caption'><b><?php echo $titulos_imgs_slide[$qtd_itens_slide]; ?></b></p>
                            <?php endif; ?>
                            <div style='background-image: url(<?php echo $imgs_urls; ?>);'></div>
                        <?php if ( ! empty ($links_imgs_slide[$qtd_itens_slide])): ?>
                        </a>
                        <?php endif; ?>
                    </li>
            <?php 
            $qtd_itens_slide++;
            endforeach;
            ?>
			</div>
			
            <?php 
			if( ! empty ($mee_miniaturas_slide_exibir) ):
            ?>
               <div id='carousel' class='flexslider'>
                 <ul class='slides'>
            <?php 
            foreach($urls_imgs_slide as $imgs_urls):
            ?>
                 	<li>
                       <img src='<?php echo $imgs_urls; ?>' />
                    </li>
            <?php 
            endforeach;
			?>
                 </ul>
               </div>
               <?php endif; ?>
              </div>
             </div>
			
			<?php
            endif;
			
		endif;
			
			
			
}
      




/*

<div class='container_slider'>
  <div class='slider'>
   <div id='slider' class='flexslider'>
    <ul class='slides'>
         <li>
            <p class='flex-caption'></p>
            <img src=''>
         </li>
    </ul>
   </div>
   <div id='carousel' class='flexslider'>
    <ul class='slides'>
        <li>
            <img src='' />
        </li>
    </ul>
   </div>
  </div>
 </div>
 
 */



?>