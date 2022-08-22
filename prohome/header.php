<!DOCTYPE html>



<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>



<head>



 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>"; charset="<?php bloginfo('charset'); ?>" />

<link rel="icon" type="image/png" href="/wp-content/themes/multipurpose/images/icon.png" />
 
 

<title><?php wp_title(); ?></title>



<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" />

<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<!-- <script src="< ?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script> -->



<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>





<!-- atendimento CRM -->



<link rel="stylesheet" type="text/css" href="<?php bloginfo('home'); ?>/wp-content/themes/multipurpose/crm/site-cliente.css?v=1">

<script type="text/javascript" src="<?php bloginfo('home'); ?>/wp-content/themes/multipurpose/crm/site-cliente.js"></script>

<script type="text/javascript" src="https://prohome.crm.srv.br/portal/js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js"></script>



<script type="text/javascript">

	jQuery(document).ready(function(){			

		SiteCliente.init({

			urlCRM : 'https://prohome.crm.srv.br',

			usuario : 'Portal',

			accesskey : 'QvZSpW0ke2wmehaK'

		});								

	});

</script>


<script src="https://portal.icondo.com.br/js/jquery.js"></script>

<!-- busca rapida -->





<link rel='stylesheet' id='fancybox-css'  href='https://casaemcasa.com.br/imoveis/js/fancybox/jquery.fancybox-1.2.6.css' type='text/css' media='screen' />
<link rel='stylesheet' id='super_caixa-css'  href='https://casaemcasa.com.br/imoveis/js/superCaixa/super_caixa.css' type='text/css' media='screen' />
<link rel='stylesheet' id='super_caixa_parceiro-css'  href='https://casaemcasa.com.br/imoveis/js/superCaixa/super_caixa_parceiro.css' type='text/css' media='screen' />
<link rel='stylesheet' id='multiSelect-css'  href='https://casaemcasa.com.br/imoveis/js/jquery.multiSelect-1.2.1/jquery.multiSelect.css' type='text/css' media='screen' />


<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/path/Path_clientes.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/jquery.multiSelect-1.2.1/jquery.multiSelect.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/cookie/jcookie.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/superCaixa/SuperCaixa2.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/quicksearch/quicksearch.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/json/jquery.json-1.3.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/buscaRapida/BuscaRapidaLanguage.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/buscaRapida/en-us.lang.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/buscaRapida/es.lang.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/buscaRapida/pt-br.lang.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/buscaRapida/BuscaRapida.js'></script>
<script type='text/javascript' src='https://casaemcasa.com.br/imoveis/js/busca/OrigemFollowup.js'></script>

<script type="text/javascript">
	Path.setPrefixo("promenade");
	jQuery(document).ready(function(){
		BuscaRapida.addTraducao(BuscaRapidaPortugues);
		BuscaRapida.addTraducao(BuscaRapidaIngles);
		BuscaRapida.addTraducao(BuscaRapidaEspanhol);
		//BuscaRapida.setInterno(true);
		BuscaRapida.setIdiomaPadrao("PT-BR");
		BuscaRapida.setCodigoParceiro(175728);
		BuscaRapida.init("", function(){
			// Define os valores iniciais da pesquisa
			var params = {
				//"finalidade"    : ["A"],
				//"estado"        : ["RJ"]
			};
			BuscaRapida.valoresIniciais(params);
		}, {
			comboFinalidade:{
				primeiraOption  : function(){
					return "<option value='' class='lbl_finalidade'>"+BuscaRapidaLanguage.get("LBL_FINALIDADE").toUpperCase()+"</option>";
				}
			},
			comboEstado:    {
				
				primeiraOption  : function(){
					return "<option value='' class='lbl_estado'>"+BuscaRapidaLanguage.get("LBL_ESTADO")+"</option>";
				}
			},
			comboMunicipio: {
				primeiraOption  : function(){
					return "<option value='' class='lbl_municipio'>"+BuscaRapidaLanguage.get("LBL_MUNICIPIO")+"</option>";
				}
			},
			comboBairro:    {
				primeiraOption  : function(){
					return BuscaRapidaLanguage.get("LBL_BAIRRO");
				}
			},
			comboTipoImovel:{
				primeiraOption  : function(){
					return BuscaRapidaLanguage.get("LBL_TIPO_IMOVEL");
				}
			}
		});
	});

</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '772640759787167'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=772640759787167&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


<!-- acaba busca rapida -->

<style>

.current-menu-item.current_page_item.active > a,.current-menu-item > a,.active > a{

	background: none !important;

	color: #8cba13;

	border-bottom: solid 1px #8cba13;

}

</style>



</head>





<body <?php body_class(); ?>>

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/a8031c79-212d-4e2e-8fd3-8439260d8f9d-loader.js"></script>






 



     



<!-- NAVBAR



    ================================================== -->



    <div class="navbar-wrapper">



      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->



      <div class="nav-area">



   <!--    <div class="container">



        <div class="row-fluid header-logo-area">



            <div class="span4">



                <h1><a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>"><?php multipurpose_logo(); ?></a></h1>



            </div>



           <div class="span8">



                <?php //if(!dynamic_sidebar('header')) echo "<div class='pull-right tagline'>".get_bloginfo('description')."</div>"; ?>



            </div>



        </div>



      </div> -->


<script>
/*
jQuery(document).ready(function(){
	jQuery("#area-restrita").click(function(){
		if( jQuery(".area-restrita div").hasClass("esconder") ){
			jQuery(".area-restrita div").removeClass("esconder");
		}else{
			jQuery(".area-restrita div").addClass("esconder");
		}
	});
});*/

</script>


<!--div class="area-restrita mobile">                                                   
<p id="area-restrita"><img src="< ?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/area-restrita.png" title="area restrita" alt="area-restrita" /> Prohome Web</p>                        
<div class="form_mobile" style="display: block;">							
<div id='loginIcondo' data-parceiro='prohome' data-codigo='0FF1E903-AFA5-4E26-A8D4-35BEB4244A38' data-facebook='false' data-google='false'></div>
</div>						                       
</div>   
</div-->

      <div class="container-fluid menu-bar">

          <div class="container">
                <div class="navbar">
                  <div class="navbar-inner inner-mobile clean">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                      <?php

                                $args = array(
                                'theme_location' => 'primary',
                                'depth' => 3,
                                'container' => false,
                                'menu_class' => 'nav',
                                'fallback_cb' => false,
                                'walker' => new multipurpose_bootstrap_walker_nav_menu()
                                );
                                wp_nav_menu($args);
                                ?>

                    </div><!--/.nav-collapse -->
					
					
									
					<div class="area-restrita" style="float: right;">          	                        
					<p id="area-restrita" class="textoareares"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/area-restrita.png" title="area restrita" alt="area-restrita" /> Prohome Web</p>
                        <!--div class="esconder" style="display: block;">
                        <form method="post" name="formulario" action="http://prohome.wsrun.net/php/sistema.php"  target="_top" > 
                            <input type="Hidden" name="action" value="Frame_Parceiro">
                            <input type="hidden" name="codigo" value="82708" size="20">
                            <input type="text" name="login" value="" size="12" autocomplete="off" placeholder="LOGIN"> 
                            <input type="password" name="senha" size="12" autocomplete="off" placeholder="SENHA"> 
                            <input type="submit" name="ok" value="Ok" />
                            <script language="JavaScript">
                            function abrejanela(link) {
								var msgWindow;
								msgWindow=window.open(link,'Senha','resizable=no,width=500,height=500,dependent=yes,scrollbars=yes');
							}
                            </script>
                            <a href="#" onClick="abrejanela('http://prohome.wsrun.net/php/email.php?action=email_senha&Codigo_Parceiro=82708');" >Esqueceu  sua senha?</a>        
						</div>						
						</form-->
						<div id='loginIcondo' data-parceiro='prohome' data-codigo='0FF1E903-AFA5-4E26-A8D4-35BEB4244A38' data-facebook='false' data-google='false'></div>
						<style type="text/css">
						.area-restrita{padding: 15px 25px 0px;} 
						.loadingBG, .loading{ display:none!important}
						.formLoginBase{background: none;}
						.area-restrita div form * {    width: 30%;    margin-right: 10px;}
						#user_login, #user_pass{ width: 75px;}	
						.area-restrita div{padding: 0px;}	
						.area-restrita div{float: left; width:310px;}
						#submit{height: 30px!important; margin-top:-22px; background: #8cba13;}	
						.area-restrita div form a{    width: 120px;    margin: 3px 0px 0px -26px;}	
						.textoareares{margin-top: 4px!important;}
						.area-restrita a{color: #444444!important;}
						a {color: #444444!important;}
						
								
								
						@media (max-width: 1239px){
							.area-restrita{
									display: block!important;
								}
						.area-restrita {
							position: relative;
							top: 0;
							right: 0px;
							margin-top: 10px;
							padding: 10px!important;
						}		
												}

						</style> 
                    </div>              
                    </div>
                  </div><!-- /.navbar-inner -->
                </div>
          </div>

      </div> <!-- /.container -->

<div class="container topo">
	<div class="row-fluid">
    <div class="span5">
    	<a href="<?php echo bloginfo('home'); ?>"><img class="logo-topo" src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/logo-site.png" title="ProHome" alt="ProHome" style="width: 279px; display: block;"/></a>
        </div>    

        

        <div class="span6 offset1">
        

        	<p class="header-info-esq">    

            

            

            <!--<img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/whatsapp.png" title="Whatsapp" alt="Whatsapp" /> (21) 00000-0000-->

              

              <a href="javascript:SiteCliente.perguntar();" style="margin-right: 10px;"><img style="margin-right: 5px;" src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/07/ic-cadastre-atendomentop.png" title="Cadastre seu Atendimento" alt="Cadastre seu Atendimento" /> Cadastre seu Atendimento</a>

              

                

                    <a href="https://www.facebook.com/prohome.imoveis" target="_blank"  style="margin-right: 10px; margin-left: 10px;"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/facebook.png" title="Facebook" alt="Facebook" /></a>

                    

                    <a href="https://twitter.com/intent/follow?screen_name=ProhomeImoveis" target="_blank"  style="margin-right: 10px;"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/twitter.png" title="Twitter" alt="Twitter" /></a>

                    

                    <a href="https://plus.google.com/u/0/100212389483050926948/posts" target="_blank"  style="margin-right: 10px;"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/google-plus.png" title="Google +" alt="Google +" /></a>
					
                    <script>
					
					$(document).ready(function() {
						$valido = true;
                        $('#whatsapp_numero').click(function(){
							if($valido == true){
								$(this).children('span').css('display','inline-block'); $valido = false;
							}else{
								$(this).children('span').css('display','none'); $valido = true;
							}
							
						});
						
						
                    });
					
					</script>
					
					<a href="javascript: void(0)" id="whatsapp_numero" target="_blank"  title="(21) 99328-9509" style="margin-right: 0;"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2016/03/whatsapp.png" title="(21) 99328-9509" alt="(21) 99328-9509" /><span style="display: none; margin-left: 5px;">(21) 99328-9509</span></a>

        	</p>

            <br clear="all">

            <p class="header-info-esq parte_de_baixo">

            	

                <img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2016/03/telefone-topo.png" title="" alt="Contato" /> (21) 2516-4199

                

                <a href="https://www.prohomeimoveis.com.br/contatos/" style="margin-right: 10px; margin-left: 10px;"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/contato.png" title="Contato" alt="Contato" /> Contato</a>

            	

               

                <!--<a href="javascript:SiteCliente.perguntar();" style="margin-right: 10px;"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/cadastre-seu-atendimento.png" title="Cadastre seu Atendimento" alt="Cadastre seu Atendimento" /> Cadastre seu Atendimento</a>-->

                <a href="<?php echo bloginfo(home); ?>/prohome-ambiental/"><img src="<?php echo bloginfo(home); ?>/wp-content/uploads/2015/06/ic-prohome-ambiental.png" title="Cadastre seu Atendimento" alt="Cadastre seu Atendimento" /> Ambiental</a>

            </p>

        </div>

    </div>

</div>



     </div> 



      <?php if(is_archive()): ?>



      <div class="container">



      <div class="row-fluid"><div class="span12 arc-header">



      <h1 class="entry-title">



                        <?php if ( is_day() ) : ?>                            



                        <?php echo get_the_date(); ?>    



                        <?php elseif ( is_month() ) : ?>



                        Monthly Archives: <?php echo get_the_date( 'F Y' ); ?>                        



                        <?php elseif ( is_year() ) : ?>



                        <?php echo get_the_date( 'Y' ); ?>                            



                        <?php elseif(is_category()) : ?>



                        <?php echo single_cat_title( '', false ); ?>



                        <?php elseif(is_tag()) : ?> 



                        <?php echo single_tag_title(); ?>



                        <?php else : the_post(); ?> 



                        <?php echo get_the_author(); ?>



                        <?php rewind_posts(); endif; ?>



      </h1>



      </div></div></div>



      <?php endif; ?>



      



      <?php



          //if(is_front_page()) get_template_part('homepage','top');



      ?>



<div class="header-area">





<?php


$_pag_atual = get_permalink();

$_pag_principal = home_url() . "/";



if($_pag_atual == $_pag_principal):

?>





<style>

.video_topo{

	display: none;

width: 100% !important;

position: relative;

height: 400px;

/*

overflow: hidden;

*/

z-index: 9999999;

}

.video_topo video{

/*

width: 100%;

margin-top: -150px;

*/

}

</style>



<div class="video_topo">



<!--

<video autoplay muted loop>

  <source src="https://www.prohomeimoveis.com.br/wp-content/uploads/2015/06/4K-UHD-Luxury-liner-twisting-and-turning-on-itself-at-port-in-a-city-at-dusk.mp4" type="video/mp4">

  Your browser does not support the video tag.

</video>

-->





</div>



<div class="url-video-slide" style="display: none;" >

<?php dynamic_sidebar('video-slide'); ?>

</div>



<script>

$(document).ready(function() {

   

   var video_url = new Array();

   i = 0;

	$(".url-video-slide div").each(function() {

		i++;

		texto = $(this).text();

	    video_url[i] = texto;

		

    });

	

	e = Math.floor((Math.random() * i ) + 1);



	

	$("<video class='video_play' loop><source src='"+video_url[e]+"'></source></video>").appendTo("#slide-video");

	

	

	var delay_video = 3000;

	

	$(".video_play").fadeIn(500, function(){

				video = this;

				video.load();

				setTimeout(function(){video.play();},delay_video);

			});

	



	

});	





		





	

</script>



<? /*

<script>

$(document).ready(function(e) {

   

   var video_url = new Array();

   i = 0;

	$(".url-video-slide div").each(function() {

		texto = $(this).text();

	    video_url[i] = texto;

		classe = i+1;

		$("<video class='video"+classe+"' loop><source src='"+video_url[i]+"'></source></video>").appendTo("#slide-video");

		i++;

    });

	

	

	

	var video_tempo = new Array();

	e = 0;

	var delay_video = 6000;

	$(".url-video-slide span").each(function() {

		time = $(this).html();

	    video_tempo[e] = parseInt(time)+delay_video-500;

		e++;

    });

	//alert(video_tempo[0] + " e " + video_tempo[1]);

	

	

		

	function slide1(){

		$('.video1').fadeIn(200, function(){

				video = this;

				setTimeout(function(){video.play();},delay_video-200);

			});

		$(".video1").delay(video_tempo[0]).fadeOut(200, function(){

        	slide2();

			this.load();

			this.pause();

    	});

	}	

	

	function slide2(){

		$('.video2').fadeIn(200, function(){

				video = this;

				setTimeout(function(){video.play();},delay_video-200);

			});

		$(".video2").delay(video_tempo[1]).fadeOut(200, function(){

        	slide1();

			this.load();

			this.pause();

    	});

	}

	

	

	slide1();

});







</script>



*/?>



<style>

#slide-video > h2{

	font-size: 50px;

	text-shadow: #000 0px 0px 10px;

	text-align: center;

	position: absolute;

	height: 50px;

	width: 80%;

	left: 50%;

	margin-left: -40%;

	top: 40%;

	line-height: 53px;

	margin-top: -25px;

	z-index: 99999;

	color: #fff;

	font-family: "titulos", sans-serif;

}

</style>



<div id="slide-video">
<center>
<?php 
    echo do_shortcode("[metaslider id=15]"); 
?>
<!-- <h2>A TRANQUILIDADE QUE VOCÊ PRECISA</h2>-->

</div>




<div id="busca_rapida">

	<form action="https://casaemcasa.com.br/imoveis/imodata/montar-busca-de-imoveis" target="_top" method="post" id="buscarapida">
	
		<p>ENCONTRE SEU IMÓVEL:</p>
			<div class="finalidade span3">
			<select name="Finalidade" id="Finalidade">
				<option value="">Carregando...</option>
			</select>
			</div>
			<div class="estado2 span3">
			<select name="Estado" id="Estado">
				<option value="">Carregando...</option>
			</select>
			</div>
			<div class="municipio span3">
			<select name="Municipio" id="Municipio">
				<option value="">Carregando...</option>
			</select>
			</div>			

		<div class="butoes span1">

			<input class="enviar botao-buscar" type="button" value="Buscar" id="botao" log="false" />

		</div>  

        

              



                

	</form>

</div>





<?php else: ?>



</script>



<style>

.header-area #cima{

	background: #f0f0f0;

	min-height: 111px;

	width: 100%;

}

.header-area #cima > div{

	min-height: 111px;

	max-width: 1232px;

	margin: auto;

	background:  url('<?php echo bloginfo('template_url') . "/images/" . get_the_ID(); ?>.png') left center no-repeat;

}

.header-area #cima > div h1{

	font-size: 50px;

	color: #8cba13;

	margin-left: 95px;

	padding-top: 30px;

	margin-bottom: 0px;

	display: block;

	margin-top: 0px;

	line-height: initial;

}

.header-area #baixo{

	background: #e4e4e4;

	height: 50px;

	width: 100%;

}



</style>



<div id="cima">

	<div>        

		<h1 class="entry-title" id="titulo_pag">
        
        
	<?php
    $pag_id = get_the_ID();
	
	
	
	
	if( in_category('noticias')):
    ?>
    	<style>
		.header-area #cima > div{
			background:  url('<?php echo bloginfo('template_url'); ?>/images/165.png') left center no-repeat !important;
		}
		</style>
    
	<?php 
    echo get_the_category_by_id(9); ?>
    
    <?php else: ?>

			<?php

            	$titulo_opcional = get_post_meta($post->ID, 'titulo-opcional', true);

				if (!empty($titulo_opcional)){

					echo $titulo_opcional;

				}else{

					the_title();

				}

			?>
            
            
            <?php endif; ?>

		</h1>

        

	</div>

</div>

<script>

$(document).ready(function(e) {

    var str = document.getElementById("titulo_pag").innerHTML; 

    var res = str.replace("<br>", " ");

    document.getElementById("titulo_pag").innerHTML = res;

});

</script>

<div id="baixo">



</div>











<?php endif; ?>





</div>

      

      

      

      

      

      

      



    </div><!-- /.navbar-wrapper -->


<a style="display: block; margin: auto; position: fixed; z-index: 9999999; top: 210px; margin-bottom: 200px; right: 10px;" class="hidden-phone" href="https://prohome.icondo.com.br/" target="_blank">
<img class="seg_via_icon" style="right: 0; position: relative; margin: auto; display: block;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ic_2via-boleto.png">
</a>
        



