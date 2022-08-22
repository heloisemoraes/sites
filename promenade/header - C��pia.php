<?php


$menu_mobile =

	array(

		'theme_location' => 'menu-mobile',

		'menu' => '',

		'menu_class' => 'nav navbar-nav navbar-right',

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




/*$menu_principal = array('Inicio','Galerias','Contato');

$teste = array(
	'nomes'=> array(
		array(
			$menu_principal[0],
			$menu_principal[1],
			$menu_principal[2]
		),
		array(
			array(
				$menu_principal[0],
				'Home',
				'Sair'
			),
			array(
				$menu_principal[1],
				'Fotos',
				'Vídeos'
			),
			array(
				$menu_principal[2],
				'Como Chegar',
				'Enviar um email',				

			),
			array(
				array(
					$menu_principal[2],
					'Como Chegar',
					'Enviar um email',				
				)
			)
		)
	),
	'valor2',
	'valor3'
);

*/
?>

<?php /* if( ! empty ($teste)): ?>
<ul>
	<?php foreach($teste['nomes'][0] as $itens_menu){ ?>
	<li><?php echo $itens_menu;?>
        <ul>
		<?php
		$limite_niveis = 10;
        for($i=0; $i < $limite_niveis; $i++){
			for($l=0; $l < $limite_niveis; $l++){
				if($teste['nomes'][$l][$i][0] == $itens_menu){ foreach($teste['nomes'][$l][$i] as $itens_menu){ ?>
					<li><?php if($itens_menu > 0){ echo $itens_menu; } ?>
                    
                            <ul>
                            <?php
                            $limite_niveis = 10;
                            for($i=0; $i < $limite_niveis; $i++){
                                for($l=0; $l < $limite_niveis; $l++){
                                for($n=0; $n < $limite_niveis; $n++){
                                    if($teste['nomes'][$l][$i][$n][0] == $itens_menu){ foreach($teste['nomes'][$l][$i][$n] as $itens_menu){ ?>
                                        <li><?php if($itens_menu > 0){  echo $itens_menu; } ?></li>
                                    <?php }}
                                    }}}
                            ?>
                            </ul>
                    
                    
					</li>
				<?php }}
				}}
		?>
        </ul>
    </li>
	<?php }; ?>
</ul>
<? endif; */ ?>






<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
    
    

<!-- busca rapida -->

<link rel='stylesheet' id='fancybox-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/fancybox/jquery.fancybox-1.2.6.css' type='text/css' media='screen' />

<link rel='stylesheet' id='super_caixa-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/superCaixa/super_caixa.css' type='text/css' media='screen' />

<link rel='stylesheet' id='super_caixa_parceiro-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/superCaixa/super_caixa_parceiro.css' type='text/css' media='screen' />

<link rel='stylesheet' id='multiSelect-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/jquery.multiSelect-1.2.1/jquery.multiSelect.css' type='text/css' media='screen' />



<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/path/Path_clientes.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/jquery.multiSelect-1.2.1/jquery.multiSelect.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/cookie/jcookie.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/superCaixa/SuperCaixa2.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/quicksearch/quicksearch.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/json/jquery.json-1.3.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/BuscaRapidaLanguage.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/en-us.lang.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/es.lang.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/pt-br.lang.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/BuscaRapida.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/busca/OrigemFollowup.js'></script>


<script type="text/javascript">

jQuery(document).ready(function(e) {
   
jQuery('<div></div>').appendTo('body').addClass('voltarTopo glyphicon glyphicon-chevron-up').hide();

	jQuery(window).scroll(function () {

		if (jQuery(this).scrollTop() > 200 ) {

		jQuery('.voltarTopo').fadeIn();

		} else {

		jQuery('.voltarTopo').fadeOut();

		}
		
		if (jQuery(this).scrollTop() > 10 ) {
			jQuery('header.fixed-top').addClass('header_background');
		}else{
			jQuery('header.fixed-top').removeClass('header_background');
		}

	});

	

	jQuery('.voltarTopo').click(function() {

		jQuery('body,html').animate({scrollTop:0},600);

	});
	
 
});
	
</script>



<script type="text/javascript">

	Path.setPrefixo("<?php echo apelido; ?>");

	jQuery(document).ready(function(){

		BuscaRapida.addTraducao(BuscaRapidaPortugues);

		BuscaRapida.addTraducao(BuscaRapidaIngles);

		BuscaRapida.addTraducao(BuscaRapidaEspanhol);

		//BuscaRapida.setInterno(true);

		BuscaRapida.setIdiomaPadrao("PT-BR");

		BuscaRapida.setCodigoParceiro(<?php echo codigo; ?>);

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

					return "<option value='' class='lbl_finalidade'>"+BuscaRapidaLanguage.get("LBL_FINALIDADE")+"</option>";

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



<!-- acaba busca rapida -->    


<!-- Destaques -->



<script type="text/javascript"> 

jQuery(document).ready(function(){
		var nome_parceiro = '<?php echo apelido; ?>';	  
		var codigo_parceiro = <?php echo codigo; ?>;
		var qtd_destaques = 3;	    
		var finalidade = '';   	

	jQuery.getJSON("http://"+nome_parceiro+".i.wsrun.net/imoveis/CP-"+codigo_parceiro+"/destaque_json/?Codigo_Parceiro="+codigo_parceiro+"&qtd="+qtd_destaques+"&Finalidade="+finalidade+"&Local=pagina_principal&callback=?",
	function (dados) {
		//console.dir(dados);
		var conteudo = '';
		var contadorItem = 0;
		var contadorGrupo = 1;
		var grupo = 3; /* quantidade de imóveis por grupo */
		conteudo = conteudo + "<div class='row grupo grupo" + contadorGrupo + "'>";
		jQuery.each(dados, function (i, imovel) {
			contadorItem++; 
			/* HTML de cada imovel, será passado por todos em loop */
			conteudo = conteudo + "<div class='item_destaque col-xs-12 col-sm-4 col-md-4 item" + contadorItem + "'><a href='"+imovel.link+"'><div>";
			
			conteudo = conteudo + "<div class='content_item col-xs-12 col-sm-12 col-md-12 center-block' style='background: url("+imovel.imagem+") center center no-repeat; background-size: cover;'></div><div class='titulo'></div><div class='descricao'><p>"+imovel.finalidade+"<br>"+imovel.bairro+"</p><p class='valor_imovel'>R$ "+imovel.valor+"</p><p class='ver_mais'>Ver mais</p></div></div></a></div>";

		});
		conteudo = conteudo + "</div>"; 
		jQuery("#destaques").append(conteudo); 
	});
});













<?php

$url_pagina_atual = get_permalink();

$url_pagina_de_imoveis = get_home_url() . "/imoveis/";



if($url_pagina_atual == $url_pagina_de_imoveis):


?>




//imoveis em destaque venda

jQuery(document).ready(function(){
		var nome_parceiro = '<?php echo apelido; ?>';	  
		var codigo_parceiro = <?php echo codigo; ?>;
		var qtd_destaques = 3;	    
		var finalidade = 'C';   	

	jQuery.getJSON("http://"+nome_parceiro+".i.wsrun.net/imoveis/CP-"+codigo_parceiro+"/destaque_json/?Codigo_Parceiro="+codigo_parceiro+"&qtd="+qtd_destaques+"&Finalidade="+finalidade+"&Local=pagina_principal&callback=?",
	function (dados) {
		//console.dir(dados);
		var conteudo = '';
		var contadorItem = 0;
		var contadorGrupo = 1;
		var grupo = 3; /* quantidade de imóveis por grupo */
		conteudo = conteudo + "<div class='row grupo grupo" + contadorGrupo + "'>";
		jQuery.each(dados, function (i, imovel) {
			contadorItem++; 
			/* HTML de cada imovel, será passado por todos em loop */
			conteudo = conteudo + "<div class='item_destaque col-xs-12 col-sm-4 col-md-4 item" + contadorItem + "'><a href='"+imovel.link+"'><div>";
			
			conteudo = conteudo + "<div class='content_item col-xs-12 col-sm-12 col-md-12 center-block' style='background: url("+imovel.imagem+") center center no-repeat; background-size: cover;'></div><div class='titulo'></div><div class='descricao'><p>"+imovel.finalidade+"<br>"+imovel.bairro+"</p><p class='valor_imovel'>R$ "+imovel.valor+"</p><p class='ver_mais'>Ver mais</p></div></div></a></div>";

		});
		conteudo = conteudo + "</div>"; 
		jQuery("#destaques_venda").append(conteudo); 
	});
});



//imoveis em destaque locação

jQuery(document).ready(function(){
		var nome_parceiro = '<?php echo apelido; ?>';	  
		var codigo_parceiro = <?php echo codigo; ?>;
		var qtd_destaques = 3;	    
		var finalidade = 'A';   	

	jQuery.getJSON("http://"+nome_parceiro+".i.wsrun.net/imoveis/CP-"+codigo_parceiro+"/destaque_json/?Codigo_Parceiro="+codigo_parceiro+"&qtd="+qtd_destaques+"&Finalidade="+finalidade+"&Local=pagina_principal&callback=?",
	function (dados) {
		//console.dir(dados);
		var conteudo = '';
		var contadorItem = 0;
		var contadorGrupo = 1;
		var grupo = 3; /* quantidade de imóveis por grupo */
		conteudo = conteudo + "<div class='row grupo grupo" + contadorGrupo + "'>";
		jQuery.each(dados, function (i, imovel) {
			contadorItem++; 
			/* HTML de cada imovel, será passado por todos em loop */
			conteudo = conteudo + "<div class='item_destaque col-xs-12 col-sm-4 col-md-4 item" + contadorItem + "'><a href='"+imovel.link+"'><div>";
			
			conteudo = conteudo + "<div class='content_item col-xs-12 col-sm-12 col-md-12 center-block' style='background: url("+imovel.imagem+") center center no-repeat; background-size: cover;'></div><div class='titulo'></div><div class='descricao'><p>"+imovel.finalidade+"<br>"+imovel.bairro+"</p><p class='valor_imovel'>R$ "+imovel.valor+"</p><p class='ver_mais'>Ver mais</p></div></div></a></div>";

		});
		conteudo = conteudo + "</div>"; 
		jQuery("#destaques_locacao").append(conteudo); 
	});
});























<?php endif; ?>













jQuery(document).ready(function(){

		var nome_parceiro = '<?php echo apelido; ?>';	  

		var codigo_parceiro = <?php echo codigo; ?>;

		var qtd_destaques = 6;	    
		
		var destaque = "S";
		
		var tipo_destaque = "Tipo 1";
		

	jQuery.getJSON("http://"+nome_parceiro+".i.wsrun.net/imoveis/CP-"+codigo_parceiro+"/destaque_json/?Codigo_Parceiro="+codigo_parceiro+"&qtd="+qtd_destaques+"&Destaque="+destaque+"&Tipo_Destaque="+tipo_destaque+"&Local=pagina_principal&callback=?",

	function (dados) {
		
		//console.dir(dados);

		var conteudo = '';
		var contadorItem = 0;
		var contadorGrupo = 3;
		var grupo = 3; /* quantidade de imóveis por grupo */
		
		conteudo = conteudo + "<div class='container_slider'><div class='fundo_slide'></div><div class='slider'><div id='slider' class='flexslider'><ul class='slides'>";
		
		jQuery.each(dados, function (i, imovel) {

			contadorItem++; 

			conteudo = conteudo + "<li id='slide_imagem"+contadorItem+"'><div style='background-image: url("+imovel.imagem+"); background-position: center center; background-repeat: no-repeat; background-size: cover; height: 700px; width: 100%;'></div><a href='"+imovel.link+"'><p class='flex-caption'>"+imovel.finalidade+" - "+imovel.tipo+"<br>"+imovel.bairro+"<br>R$ "+imovel.valor+"</p></a></li>";
			
		});
		
		conteudo = conteudo + "</ul></div></div></div>";


		/* Adiciona o conteudo na div */

		//jQuery("#slide").append(conteudo); 

	});

});



</script>


<?php /*

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
 
*/ ?>

<!-- slide -->

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/slide/jquery.flexslider-min.js"></script>
   <script type="text/javascript">
	
    jQuery(window).load(function(){
		if(document.documentMode){
			jQuery(".fundo_slide").css("opacity","0.5");
			jQuery("#busca_rapida form div > div.seta > span,#busca_rapida form div > div > select,#busca_rapida form > div > div > input,#Bairro > input,#Tipo_Imovel > input,#busca_livre form input,#busca-por-referencia form input,#Bairro,.tipo .SuperCaixa span,.bairro #bairro").css("border-radius","0 0 0 0");
		}
      jQuery('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: true,
        itemWidth: 130,
        itemMargin: 5,
        asNavFor: '#slider',
      });

      jQuery('#slider').flexslider({
        animation: "slide",
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

 <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/slide/flexslider.css" type="text/css" media="all" />
  
  <style>
.container_slider{
	width: 100%;
	margin-bottom: -60px;
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
	max-width: 1024px;
	margin: auto;
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
	max-height: 700px;
	position: relative;
}
#carousel{
	margin: 0;
	background: transparent;
	border: 4px solid transparent;
	transition-duration: 0.5s;
	opacity: 0;
	bottom: 10px;
	visibility: hidden;
}
.container_slider:hover #carousel{
	visibility: visible;
	opacity: 1;
}
#carousel ul li{
	margin-left: 10px;
	margin-right: 10px;
}
#carousel ul li img{
	background: rgba(0,0,0,0.6);
	padding: 4px;
	opacity: 0.7;
	cursor: pointer;
	transition-duration: 0.5s;
}
#carousel ul li img:hover{
	opacity: 1;
}
#carousel ul li.flex-active-slide img{
	opacity: 1;
	background: #fff;
}
.flex-caption{
    color: #000;
    background: rgba(255,255,255,0.8);
	padding: 20px;
	box-sizing: border-box;
	width: auto;
	position: absolute;
	transition-duration: 0.5s;
	font-weight: 400;
	font-size: 20px;
	text-transform: uppercase;
/*	visibility: hidden;
	opacity: 0;*/
}

.flex-active-slide .flex-caption {
    top: 30px;
    right: 30px;
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
    width: 160px;
    display: block;
    height: 80px;
    top: 175px;
    right: 30px;
    position: absolute;
}
.flex-direction-nav a {
    height: 53px;
    margin: 0;
    top: 0px;
    opacity: 1;
}

.flex-direction-nav .flex-nav-next a{
	right: 0;
    width: 66px;
    height: 60px;
	
}
.flex-direction-nav .flex-nav-prev a{
	left: 0;
    width: 66px;
    height: 60px;
}

.flex-direction-nav a.flex-next:before {
    left: 0;
    content: url('<?php echo get_template_directory_uri() ?>/images/topo/seta-direita.png');
}
.flex-direction-nav a.flex-prev:before {
    left: 0;
    content: url('<?php echo get_template_directory_uri() ?>/images/topo/seta-esquerda.png');
}

</style>

<!-- fim slide -->





<?php echo imagem_fundo; ?>




</head>

 

<body <?php body_class(isset($class) ? $class : ''); ?>>


<div class="container-fluid laytou_width fundo_claro_cinza">

</div>



<header>

<?php
	$aparece=="false";
	if($aparece=="true"):
 ?>
<!-- pre menu -->

<div class="pre_menu">
	
    <div class="container-fluid laytou_width clearfix">
        <div class="area_restrita hidden-xs">
            <form name="login" action="http://<?php echo apelido; ?>.wsrun.net/php/sistema.php" method="post">
                <p><i class="glyphicon glyphicon-lock"></i> Área do cliente:</p>
                
                <input type="Hidden" name="action" value="Frame_Parceiro">
                <input type="hidden" name="codigo" value="<?php echo codigo;?>">
                
                <input name="login" type="text" value="" placeholder="Login" autocomplete="off">
                <input type="password" name="senha" placeholder="Senha" autocomplete="off">
                <button type="submit" name="ok" value="OK">OK</button>
                
                <script language="JavaScript" style="display: none;">
					function abrejanela(link) {
						var msgWindow;
						msgWindow=window.open(link,'Senha','resizable=no,width=500,height=500,dependent=yes,scrollbars=yes');
					}
                </script>
                 
				<a href="#" title="Esqueceu sua senha? Clique aqui!" onClick="abrejanela('http://<?php echo apelido; ?>.wsrun.net/php/email.php?action=email_senha&Codigo_Parceiro=<?php echo codigo;?>');" ><i class="glyphicon glyphicon-question-sign"></i></a>
                
			</form>
		</div>
        <!--
        <div class="contato_header">
			<?php echo tel_contato_header . email_contato_header; ?>
            
		</div>
        -->
	</div>
    
</div>

 <?php endif; ?>



<!-- menu default -->
<!--
<nav class="navbar navbar-default" role="navigation">

	<div class="container-fluid laytou_width">



        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>
            <?php echo logo_empresa_header; ?>

			<?php /* if ( is_active_sidebar( 'logotopo' ) ) : ?>

                <?php dynamic_sidebar( 'Logo Topo' ); ?>

            <?php endif; */?>

        </div>

   

        <div class="collapse navbar-collapse">

        <?php wp_nav_menu($menu-principal); ?>

        </div>





    </div>

</nav>  
-->

<?php
	$aparece=="false";
	if($aparece=="true"):
 ?>
<nav class="container-fluid menu_principal padding0">
	<div class="laytou_width">
        <div class="logo_topo" style="float: left;">
        	<?php echo logo_empresa_header; ?>
        </div>
		<?php wp_nav_menu($menu_principal); ?>
	</div>
</nav>


<?php
endif;
?>










<nav class="navbar navbar-default" role="navigation">

	<div class="container-fluid laytou_width">



        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>
            <?php echo logo_empresa_header; ?>

			<?php /* if ( is_active_sidebar( 'logotopo' ) ) : ?>

                <?php dynamic_sidebar( 'Logo Topo' ); ?>

            <?php endif; */?>

        </div>

   

        <div class="collapse navbar-collapse">

        <?php wp_nav_menu($menu_mobile); ?>

        </div>





    </div>

</nav>  










<div class="pre_menu visible-xs fundo_cinza_muito_claro">
	
    <div class="container-fluid laytou_width clearfix">
    
  	  <div class="area_restrita area_restrita_2 hidden-sm hidden-md hidden-lg" style="display: none;">
            <form name="login" action="">
                <p>Área do cliente:</p>
                <input name="login" type="text" class="form_admin" value="" maxlength="30" placeholder="Login">
                <input type="password" name="senha" maxlength="30" class="form_admin" placeholder="Senha">
                <button type="submit" name="ok" value="OK">OK</button>
            </form>
        </div>
    
        <a href="#area-restrita" onClick="jQuery('.area_restrita_2').slideToggle(500)" style="color: #333;">
        <div class="contato_header" style="padding-bottom: 10px;">
        	<i class="glyphicon glyphicon-lock" style="color: #729d68;"></i> Área Restríta
		</div>
        </a>
	</div>
    
</div>


</header>

<? /*

<?php $home_page = home_url() . "/"; if( $home_page == get_permalink() ) : ?>

<nav class="container-fluid menu_links_ulteis_menu padding0">

        <?php wp_nav_menu($links_ulteis_menu); ?>

</nav>



<?php endif; ?>
*/?>

